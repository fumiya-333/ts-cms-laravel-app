<?php

namespace App\Repositories\BusinessLogics;

use Illuminate\Http\Request;
use App\Interfaces\BusinessLogics\CreateRepositoryInterface;
use App\Interfaces\Models\MUserRepositoryInterface;
use App\Libs\AppConstants;
use App\Libs\DateUtil;
use App\Models\MUser;

class CreateRepository implements CreateRepositoryInterface
{
    /** ユーザー情報本登録完了 */
    const INFO_MSG_USER_REGIST_SUCCESS = 'ユーザー情報の本登録が完了しました。ログインを行いご利用下さい。';
    /** ユーザー情報本登録失敗 */
    const ERR_MSG_USER_REGIST_FAILED = 'ユーザー情報の本登録に失敗しました。管理者に連絡を行って下さい。';
    /** メール認証失敗 */
    const ERR_MSG_EMAIL_AUTH_FAILED = 'メール認証に失敗しました。再度、メールからリンクをクリックしてください。';
    /** 無効なトークン */
    const ERR_MSG_EMAIL_VERIFY_TOKEN_VALID = '無効なトークンです。URLが途切れていないかご確認下さい。';
    /** 本登録済み */
    const ERR_MSG_USER_REGIST_COMPLETED = '既に本登録されています。ログインを行いご利用下さい。';
    /** メール認証発効後24時間以上経過 */
    const ERR_MSG_EMAIL_AUTH_24HOURS_PASSED = 'メール認証の発行から24時間以上経過しています。再度アカウント設定を行って下さい。';

    private MUserRepositoryInterface $m_user_repository;

    public function __construct(MUserRepositoryInterface $m_user_repository)
    {
        $this->m_user_repository = $m_user_repository;
    }


    /**
     * 仮登録処理実行
     *
     * @param  mixed $request リクエストパラメータ
     * @param  mixed $msg メッセージ
     * @return void
     */
    public function exec(Request $request, &$msg) {

        // メールアドレスURLトークンに紐づくユーザー情報取得
        $m_user = MUser::emailVerifyTokenFindUser($request->email_verify_token);

        // メール認証チェック
        if(self::isEmailAuth($m_user, $msg)){
            // 本登録処理
            if($this->m_user_repository->updateEmailVerified($m_user, $request->email_verified)){
                $msg .= self::INFO_MSG_USER_REGIST_SUCCESS;
                return true;
            }
            $msg .= self::ERR_MSG_USER_REGIST_FAILED;
        }else{
            $msg .= self::ERR_MSG_EMAIL_AUTH_FAILED;
        }

        return false;
    }

    /**
     * メール認証チェック
     *
     * @param  mixed $m_user ユーザー情報
     * @param  mixed $msg メッセージ
     * @return メール認証フラグ
     */
    public function isEmailAuth(MUser $m_user, &$msg){
        // 登録されているトークンか判定
        if(!$this->m_user_repository->existsEmail($m_user->email)){
            $msg .= self::ERR_MSG_EMAIL_VERIFY_TOKEN_VALID;
            return false;
        }
        // 本登録されているか判定
        if($this->m_user_repository->isEmailVerified($m_user->email)){
            $msg .= self::ERR_MSG_USER_REGIST_COMPLETED;
            return false;
        }
        // メール認証の発行から、24時間以上経過しているか
        if(DateUtil::isAddDay($m_user->email_verified_at)){
            $msg .= self::ERR_MSG_EMAIL_AUTH_24HOURS_PASSED;
            return false;
        }
        return true;
    }
}
