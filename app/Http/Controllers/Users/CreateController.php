<?php
namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Libs\AppConstants;
use App\Interfaces\BusinessLogics\CreateRepositoryInterface;
use App\Requests\Users\CreateRequest;
use Redirect;

class CreateController extends Controller
{
    private CreateRepositoryInterface $create_repository;

    public function __construct(CreateRepositoryInterface $create_repository)
    {
        $this->create_repository = $create_repository;
    }


    /**
     * 初期表示
     *
     * @param  mixed $request リクエストパラメータ
     * @return void
     */
    public function show(CreateRequest $request){
        $msg = "";
        if(!$this->create_repository->exec($request, $msg)){
            return view(AppConstants::VIEW_PATH_USERS_CREATE)->with(AppConstants::KEY_ERR, $msg);
        }else{
            return view(AppConstants::VIEW_PATH_USERS_CREATE)->with(AppConstants::KEY_MSG, $msg);
        }
    }
}
