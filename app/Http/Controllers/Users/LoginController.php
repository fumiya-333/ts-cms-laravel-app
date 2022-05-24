<?php
namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Redirect;
use Auth;
use App\Requests\Users\LoginRequest;
use App\Models\MUser;
use App\Libs\AppConstants;

class LoginController extends Controller
{
    /** エラーメッセージ */
    const ERR_MSG = 'ログインに失敗しました。メールアドレスもしくはパスワードが異なります。';

    /**
     * 初期表示
     *
     * @return view
     */
    public function show(){
        return view(AppConstants::VIEW_PATH_USERS_INDEX);
    }

    /**
     * ログイン
     *
     * @param  LoginRequest $request リクエストパラメータ
     * @return view
     */
    public function login(LoginRequest $request){
        if(Auth::attempt([MUser::COL_EMAIL => $request->email, MUser::COL_PASSWORD => $request->password])){
            return view(AppConstants::VIEW_PATH_USERS_INDEX);
        }else{
            return Redirect::back()->with('error', self::ERR_MSG)->withInput();
        }
    }
}
