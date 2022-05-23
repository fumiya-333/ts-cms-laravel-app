<?php
namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use Redirect;
use Auth;
use App\Requests\Auths\LoginRequest;
use App\Models\MUser;

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
        return view('auths.index');
    }

    /**
     * ログイン
     *
     * @param  LoginRequest $request リクエストパラメータ
     * @return view
     */
    public function login(LoginRequest $request){
        if(Auth::attempt([MUser::COL_EMAIL => $request->email, MUser::COL_PASSWORD => $request->password])){
            return view('auths.index');
        }else{
            return Redirect::back()->with('error', self::ERR_MSG)->withInput();
        }
    }
}
