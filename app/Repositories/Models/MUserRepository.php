<?php

namespace App\Repositories\Models;

use App\Interfaces\Models\MUserRepositoryInterface;
use App\Models\MUser;
use Carbon\Carbon;

class MUserRepository implements MUserRepositoryInterface
{
    /**
     * ユーザー情報登録
     *
     * @param  mixed $user_id ユーザーID
     * @param  mixed $name 氏名
     * @param  mixed $email メールアドレス
     * @param  mixed $password パスワード
     * @param  mixed $email_verified メール認証フラグ
     * @param  mixed $email_verify_token メールアドレスURLトークン
     * @param  mixed $email_verified_at メール認証発行日
     * @return void
     */
    public function create(string $user_id, $name, $email, $password, $email_verified, $email_verify_token, $email_verified_at) {
        return MUser::create([
            MUser::COL_USER_ID => $user_id,
            MUser::COL_NAME => $name,
            MUser::COL_EMAIL => $email,
            MUser::COL_PASSWORD => $password,
            MUser::COL_EMAIL_VERIFIED => $email_verified,
            MUser::COL_EMAIL_VERIFY_TOKEN => $email_verify_token,
            MUser::COL_EMAIL_VERIFIED_AT => $email_verified_at,
        ]);
    }

    /**
     * メールアドレスに紐づくユーザー情報取得
     *
     * @param  mixed $email メールアドレス
     * @return ユーザー情報
     */
    public function emailFindUser($email){
        return MUser::emailFindUser($email);
    }

    /**
     * メールアドレスURLトークンに紐づくユーザー情報取得
     *
     * @param  mixed $email_verify_token メールアドレスURLトークン
     * @return ユーザー情報
     */
    public function emailVerifyTokenFindUser($email_verify_token){
        return MUser::emailVerifyTokenFindUser($email_verify_token);
    }

    /**
     * メールアドレスURLトークンの更新
     *
     * @param  mixed $m_user ユーザー情報
     * @param  mixed $request リクエストパラメータ
     * @return void
     */
    public function updateEmailVerified($m_user, $request){
        $m_user->email_verified = MUser::EMAIL_VERIFIED_ON;
        return $m_user->save();
    }

    /**
     * パスワードリセット情報更新
     *
     * @param  mixed $m_user ユーザー情報
     * @param  mixed $email_password_reset_verified パスワードリセットメール認証フラグ
     * @param  mixed $email_password_reset_token パスワードリセットメールアドレスURLトークン
     * @return void
     */
    public function updatePasswordReset($m_user, $email_password_reset_verified, $email_password_reset_token){
        $m_user->email_password_reset_verified = $email_password_reset_verified;
        $m_user->email_password_reset_token = $email_password_reset_token;
        $m_user->email_password_reset_at = new Carbon();
        return $m_user->save();
    }
}
