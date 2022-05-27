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
    /** 新規作成 */
    const ROOT_DIR_CREATE = 'create';
    /** パスワードリセット */
    const ROOT_DIR_PASSWORD_RESET = 'password-reset';
    /** ホーム画面（Vue） */
    const ROOT_DIR_HOME = 'home';
    /** 新規作成（仮） */
    const ROOT_DIR_CREATE_PRE = self::ROOT_DIR_CREATE . '-pre';
    /** パスワードリセット（仮） */
    const ROOT_DIR_PASSWORD_RESET_PRE = self::ROOT_DIR_PASSWORD_RESET . '-pre';
    /** パスワードリセット（仮登録） */
    const ROOT_DIR_USERS_PASSWORD_RESET_PRE = self::ROOT_DIR_USERS . '/'. self::ROOT_DIR_PASSWORD_RESET_PRE;
    /** パスワードリセット */
    const ROOT_DIR_USERS_PASSWORD_RESET = self::ROOT_DIR_USERS . '/'. self::ROOT_DIR_PASSWORD_RESET;
    /** ユーザー新規作成（仮登録） */
    const ROOT_DIR_USERS_CREATE_PRE = self::ROOT_DIR_USERS . '/'. self::ROOT_DIR_CREATE_PRE;
    /** ユーザー新規作成 */
    const ROOT_DIR_USERS_CREATE = self::ROOT_DIR_USERS . '/'. self::ROOT_DIR_CREATE;

    /** ビュー インデックス */
    const VIEW_PATH_INDEX = 'index';
    /** ビュー ユーザーインデックス */
    const VIEW_PATH_USERS_INDEX = self::ROOT_DIR_USERS . '.'. self::VIEW_PATH_INDEX;
    /** ビュー ユーザー新規作成（仮登録） */
    const VIEW_PATH_USERS_CREATE_PRE = self::ROOT_DIR_USERS . '.'. self::ROOT_DIR_CREATE_PRE;
    /** ビュー ユーザー新規作成 */
    const VIEW_PATH_USERS_CREATE = self::ROOT_DIR_USERS . '.'. self::ROOT_DIR_CREATE;
    /** ビュー パスワードリセット（仮登録） */
    const VIEW_PATH_USERS_PASSWORD_RESET_PRE = self::ROOT_DIR_USERS . '.'. self::ROOT_DIR_PASSWORD_RESET_PRE;
    /** ビュー パスワードリセット */
    const VIEW_PATH_USERS_PASSWORD_RESET = self::ROOT_DIR_USERS . '.'. self::ROOT_DIR_PASSWORD_RESET;
}
