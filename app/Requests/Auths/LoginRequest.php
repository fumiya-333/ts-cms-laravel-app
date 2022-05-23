<?php
namespace App\Requests\Auths;

use App\Requests\BaseRequest;
use App\Utils\AppConstants;
use App\Models\MUser;

class LoginRequest extends BaseRequest
{
    /**
     * ユーザーがこのリクエストの権限を持っているかを判断する
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * リクエストに適用するバリデーションルールを取得
     *
     * @return array
     */
    public function rules(){
        return [
            MUser::COL_EMAIL => [self::VALIDATION_RULE_KEY_REQUIRED],
            MUser::COL_PASSWORD => [self::VALIDATION_RULE_KEY_REQUIRED],
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages(){
        return [
            MUser::COL_EMAIL . '.' . self::VALIDATION_RULE_KEY_REQUIRED => self::VALIDATION_ATTRIBUTE . self::ERR_MSG_REQUIRED,
            MUser::COL_PASSWORD . '.' . self::VALIDATION_RULE_KEY_REQUIRED => self::VALIDATION_ATTRIBUTE . self::ERR_MSG_REQUIRED,
        ];
    }

    /**
     * バリデーションエラーのカスタム属性の取得
     *
     * @return array
     */
    public function attributes(){
        return [
            MUser::COL_EMAIL => MUser::COL_JP_EMAIL,
            MUser::COL_PASSWORD => MUser::COL_JP_PASSWORD
        ];
    }
}
