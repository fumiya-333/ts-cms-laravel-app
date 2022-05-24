<?php
namespace App\Libs;

use Str;

class StrUtil {


    /**
     * UUIDを取得
     *
     * @return uuid
     */
    public static function getUuid(){
        return (string) Str::uuid();
    }
}
