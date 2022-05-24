<?php
namespace App\Models;

use App\Models\Base;

class MUser extends Base
{
    /** テーブル名 */
    const TABLE_NAME = 'm_users';
    /** ユーザーID */
    const COL_USER_ID = 'user_id';
    /** 氏名 */
    const COL_NAME = 'name';
    /** メールアドレス */
    const COL_EMAIL = 'email';
    /** メール認証フラグ */
    const COL_EMAIL_VERIFIED = 'email_verified';
    /** メールアドレスURLトークン */
    const COL_EMAIL_VERIFY_TOKEN = 'email_verify_token';
    /** メール認証発行日 */
    const COL_EMAIL_VERIFIED_AT = 'email_verified_at';
    /** パスワードリセットメール認証フラグ */
    const COL_EMAIL_PASSWORD_RESET_VERIFIED = 'email_password_reset_verified';
    /** パスワードリセットメールアドレスURLトークン */
    const COL_EMAIL_PASSWORD_RESET_TOKEN = 'email_password_reset_token';
    /** パスワードリセットメール認証発行日 */
    const COL_EMAIL_PASSWORD_RESET_AT = 'email_password_reset_at';
    /** パスワード */
    const COL_PASSWORD = 'password';
    /** ログイン保持用トークン */
    const COL_REMENBER_TOKEN = 'remember_token';

    protected $fillable = [self::COL_USER_ID, self::COL_NAME, self::COL_EMAIL, self::COL_EMAIL_VERIFIED, self::COL_EMAIL_VERIFY_TOKEN, self::COL_EMAIL_VERIFIED_AT, self::COL_PASSWORD, self::COL_REMENBER_TOKEN, self::COL_EMAIL_PASSWORD_RESET_VERIFIED, self::COL_EMAIL_PASSWORD_RESET_TOKEN, self::COL_EMAIL_PASSWORD_RESET_AT];

    /** 氏名（日本語） */
    const COL_JP_NAME = '氏名';
    /** メールアドレス（日本語） */
    const COL_JP_EMAIL = 'メールアドレス';
    /** パスワード（日本語） */
    const COL_JP_PASSWORD = 'パスワード';

    /** メール認証フラグ：オフ */
    const EMAIL_VERIFIED_OFF = '0';
    /** メール認証フラグ：オン */
    const EMAIL_VERIFIED_ON = '1';

    /** パスワードリセットメール認証フラグ：オフ */
    const EMAIL_PASSWORD_RESET_VERIFIED_OFF = '0';
    /** パスワードリセットメール認証フラグ：オン */
    const EMAIL_PASSWORD_RESET_VERIFIED_ON = '1';

    /** プライマリーキー */
    protected $primaryKey = self::COL_USER_ID;
}
