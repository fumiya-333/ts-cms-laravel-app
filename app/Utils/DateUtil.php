<?php
/**
 * 日付共通クラス
 *
 * @version 1.0
 * @author tsuji
 */
namespace App\Utils;

use Carbon\Carbon;

/**
 * 日付共通クラス
 *
 * 共通で利用する日付関数を記載
 */
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
