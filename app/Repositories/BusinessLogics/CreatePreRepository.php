<?php

namespace App\Repositories\BusinessLogics;

use Illuminate\Support\Facades\DB;
use App\Interfaces\Models\MUserRepositoryInterface;
use App\Interfaces\Emails\SendMailRepositoryInterface;
use App\Interfaces\Models\TSendMailRepositoryInterface;
use App\Interfaces\BusinessLogics\CreatePreRepositoryInterface;
use App\Requests\Auths\CreateRequest;
use App\Libs\AppConstants;
use App\Libs\StrUtil;
use App\Models\MUser;
use App\Models\TSendMail;
use Carbon\Carbon;

class CreatePreRepository implements CreatePreRepositoryInterface
{
    private MUserRepositoryInterface $mUserRepository;
    private SendMailRepositoryInterface $sendMailRepository;
    private TSendMailRepositoryInterface $tSendMailRepository;

    public function __construct(MUserRepositoryInterface $mUserRepository, SendMailRepositoryInterface $sendMailRepository, TSendMailRepositoryInterface $tSendMailRepository)
    {
        $this->mUserRepository = $mUserRepository;
        $this->sendMailRepository = $sendMailRepository;
        $this->tSendMailRepository = $tSendMailRepository;
    }

    /**
     * 仮登録処理実行
     *
     * @param  mixed $request
     * @return void
     */
    public function exec(CreateRequest $request) {

        DB::transaction(function () use ($request) {

            // ユーザー情報登録
            $m_user = $this->mUserRepository->create(
                StrUtil::getUuid(),
                $request->name,
                $request->email,
                bcrypt($request->password),
                MUser::EMAIL_VERIFIED_OFF,
                hash(AppConstants::HASH_KEY_SHA256, uniqid(rand(), true)),
                new Carbon(),
            );

            $variables = [MUser::COL_EMAIL => $m_user->email, MUser::COL_EMAIL_VERIFY_TOKEN => $m_user->email_verify_token];
            // メール送信処理実行
            $email = $this->sendMailRepository->exec($m_user->email, TSendMail::CREATE_PRE_EMAIL_SUBJECT, $variables, 'mails.createPre');

            // メール送信情報登録
            $this->tSendMailRepository->create(StrUtil::getUuid(), $m_user->email, TSendMail::CREATE_PRE_EMAIL_SUBJECT, $email->getMessage());

        });
    }
}
