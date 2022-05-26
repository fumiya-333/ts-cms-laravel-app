<?php
namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Libs\AppConstants;
use App\Interfaces\BusinessLogics\PasswordResetPreRepositoryInterface;
use App\Requests\Users\PasswordResetPreRequest;
use Redirect;

class PasswordResetPreController extends Controller
{
    /** 完了メッセージ */
    const INFO_MSG = '入力して頂いたメールアドレス宛てに、本登録を行う為のURLをメールにてお送りしました。24時間以内にメールのURLより本登録画面へ進んで頂き、パスワードの本更新を実施して下さい。※受付完了メールが届かない場合は、管理者にご連絡下さい。';

    /** エラーメッセージ */
    const ERR_MSG = 'パスワード仮更新に失敗しました。管理者にご連絡下さい。';

    private PasswordResetPreRepositoryInterface $password_reset_pre_repository;

    public function __construct(PasswordResetPreRepositoryInterface $password_reset_pre_repository)
    {
        $this->password_reset_pre_repository = $password_reset_pre_repository;
    }

    /**
     * 初期表示
     *
     * @return view
     */
    public function show(){
        return view(AppConstants::VIEW_PATH_USERS_PASSWORD_RESET_PRE);
    }

    /**
     * パスワードリセット処理
     *
     * @param  mixed $request
     * @return void
     */
    public function exec(PasswordResetPreRequest $request){
        try {
            // パスワードリセット処理実行
            $this->password_reset_pre_repository->exec($request);
        } catch (\Exception $e) {
            return Redirect::back()->with([AppConstants::KEY_ERR => self::ERR_MSG, AppConstants::KEY_ERR_LOG => $e])->withInput();
        }
        return Redirect::back()->with([AppConstants::KEY_MSG => self::INFO_MSG]);
    }
}
