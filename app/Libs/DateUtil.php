<?php
namespace App\Libs;

use Carbon\Carbon;

class DateUtil {

    /**
     * 年の取得
     *
     * @return 年
     */
    public static function getYear(){
        return Carbon::now()->year;
    }
}
