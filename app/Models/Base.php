<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;

class Base extends Model
{
    /** 削除フラグ */
    const COL_DEL_FLG = "del_flg";

    /** uuid */
    protected $uuid;

    /** プライマリーキー データ型 */
    protected $keyType = 'string';

    /** オートインクリメントをオフ */
    public $incrementing = false;

    /**
     * コンストラクタ
     *
     * @param  mixed $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->uuid = (string) Str::uuid();
    }
}
