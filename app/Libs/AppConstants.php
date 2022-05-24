<?php
namespace App\Libs;

class AppConstants {

    /********************************************
    /* 画面表示
    /********************************************
    /** 画面タイトル */
    const VIEW_TITLE = 'TF-CMS';

    /********************************************
    /* ロジックキー
    /********************************************
    /** メッセージ */
    const KEY_MSG = 'msg';
    /** エラーメッセージ */
    const KEY_ERR = 'error';
    /** エラーログ */
    const KEY_ERR_LOG = 'error_log';
    /** ハッシュ sha256 */
    const HASH_KEY_SHA256 = 'sha256';

    /********************************************
    /* ルーティングディレクトリ
    /********************************************
    /** ユーザー */
    const ROOT_DIR_USERS = 'users';
    /** 新規作成（仮登録） */
    const ROOT_DIR_CREATE_PRE = 'createPre';
    /** 新規作成 */
    const ROOT_DIR_CREATE = 'create';
    /** ユーザー新規作成（仮登録） */
    const ROOT_DIR_USERS_CREATE_PRE = self::ROOT_DIR_USERS . '/'. self::ROOT_DIR_CREATE_PRE;
    /** ユーザー新規作成 */
    const ROOT_DIR_USERS_CREATE = self::ROOT_DIR_USERS . '/'. self::ROOT_DIR_CREATE;
}
