<?php
namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Libs\AppConstants;
use App\Interfaces\BusinessLogics\PasswordResetPreRepositoryInterface;
use App\Requests\Users\PasswordResetPreRequest;
use Redirect;

class PasswordResetPreController extends Controller
{
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
     * 仮登録処理
     *
     * @param  mixed $request
     * @return void
     */
    public function exec(PasswordResetPreRequest $request){
        try {
            // 仮登録処理実行
            // $this->create_pre_repository->exec($request);
        } catch (\Exception $e) {
            return Redirect::back()->with([AppConstants::KEY_ERR => self::ERR_MSG, AppConstants::KEY_ERR_LOG => $e])->withInput();
        }
        return Redirect::back()->with([AppConstants::KEY_MSG => self::INFO_MSG]);
    }
}
