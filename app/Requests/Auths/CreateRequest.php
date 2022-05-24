<?php
namespace App\Requests\Auths;

use App\Requests\UserRequest;
use App\Models\MUser;

class CreateRequest extends UserRequest
{
    /**
     * コンストラクタ
     *
     * @return void
     */
    public function __construct() {
        $this->req_rules[MUser::COL_NAME] = self::VALIDATION_RULE_KEY_REQUIRED;
        $this->req_messages[MUser::COL_NAME . '.' . self::VALIDATION_RULE_KEY_REQUIRED] = self::VALIDATION_ATTRIBUTE . self::ERR_MSG_REQUIRED;
        $this->req_attributes[MUser::COL_NAME] = MUser::COL_JP_NAME;
	}

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
        return $this->req_rules;
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages(){
        return $this->req_messages;
    }

    /**
     * バリデーションエラーのカスタム属性の取得
     *
     * @return array
     */
    public function attributes(){
        return $this->req_attributes;
    }
}
