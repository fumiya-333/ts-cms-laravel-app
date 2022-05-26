<?php
namespace App\Libs;

use Str;
use App\Libs\AppConstants;

class StrUtil {


    /**
     * UUIDを取得
     *
     * @return uuid
     */
    public static function getUuid(){
        return (string) Str::uuid();
    }

    /**
     * ハッシュ値の取得
     *
     * @return ハッシュ値
     */
    public static function getHash(){
        return hash(AppConstants::HASH_KEY_SHA256, uniqid(rand(), true));
    }
}
