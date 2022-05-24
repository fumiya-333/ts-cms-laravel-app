<?php
namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use App\Libs\AppConstants;
use App\Interfaces\BusinessLogics\CreatePreRepositoryInterface;
use App\Requests\Auths\CreateRequest;
use Redirect;

class CreateController extends Controller
{
    /** 完了メッセージ */
    const INFO_MSG = '仮登録が完了しました。入力して頂いたメールアドレス宛てに、本登録を行う為のURLをメールにてお送りしました。24時間以内にメールのURLより本登録画面へ進んで頂き、アカウントの本登録を実施して下さい。※仮登録受付完了メールが届かない場合は、管理者にご連絡下さい。';

    /** エラーメッセージ */
    const ERR_MSG = '仮登録に失敗しました。管理者にご連絡下さい。';

    private CreatePreRepositoryInterface $createPreRepository;

    public function __construct(CreatePreRepositoryInterface $createPreRepository)
    {
        $this->createPreRepository = $createPreRepository;
    }

    /**
     * 初期表示
     *
     * @return view
     */
    public function show(){
        return view('auths.createPre');
    }


    /**
     * 新規作成
     *
     * @param  mixed $request
     * @return void
     */
    public function createPre(CreateRequest $request){
        try {
            // 仮登録処理実行
            $this->createPreRepository->exec($request);
        } catch (\Exception $e) {
            return Redirect::back()->with([AppConstants::KEY_ERR => self::ERR_MSG, AppConstants::KEY_ERR_LOG => $e])->withInput();
        }
        return Redirect::back()->with([AppConstants::KEY_MSG => self::INFO_MSG]);
    }
}
