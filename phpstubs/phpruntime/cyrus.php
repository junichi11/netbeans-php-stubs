<?php



/**
 * Cyrus IMAP サーバーに対する認証を行う
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $connection
 * @param string $mechlist
 * @param string $service
 * @param string $user
 * @param int $minssf
 * @param int $maxssf
 * @param string $authname
 * @param string $password
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.cyrus-authenticate.php
 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
 */
function cyrus_authenticate($connection, string $mechlist = NULL, string $service = NULL, string $user = NULL, int $minssf = NULL, int $maxssf = NULL, string $authname = NULL, string $password = NULL): void {}

/**
 * Cyrus IMAP 接続へのコールバックをバインドする
 * <p>Cyrus IMAP 接続へのコールバックをバインドします。</p>
 * @param resource $connection <p>接続ハンドル。</p>
 * @param array $callbacks <p>コールバックの配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.cyrus-bind.php
 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
 */
function cyrus_bind($connection, array $callbacks): bool {}

/**
 * Cyrus IMAP サーバーへの接続を閉じる
 * <p>Cyrus IMAP サーバーへの接続を閉じます。</p>
 * @param resource $connection <p>接続ハンドル。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.cyrus-close.php
 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
 */
function cyrus_close($connection): bool {}

/**
 * Cyrus IMAP サーバーに接続する
 * <p>Cyrus IMAP サーバーに接続します。</p>
 * @param string $host <p>Cyrus IMAP ホスト名。</p>
 * @param string $port <p>ポート番号。</p>
 * @param int $flags
 * @return resource <p>成功した場合に接続ハンドラ、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.cyrus-connect.php
 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
 */
function cyrus_connect(string $host = NULL, string $port = NULL, int $flags = NULL) {}

/**
 * Cyrus IMAP サーバーへクエリを送信する
 * <p>Cyrus IMAP サーバーへクエリを送信します。</p>
 * @param resource $connection <p>接続ハンドル。</p>
 * @param string $query <p>クエリ文字列。</p>
 * @return array <p><i>text</i>、<i>msgno</i>、 そして <i>keyword</i> のキーを持つ連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.cyrus-query.php
 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
 */
function cyrus_query($connection, string $query): array {}

/**
 * アンバインドする ...
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $connection <p>接続ハンドル。</p>
 * @param string $trigger_name <p>トリガ名。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.cyrus-unbind.php
 * @since PHP 4 >= 4.1.0, PECL cyrus 1.0
 */
function cyrus_unbind($connection, string $trigger_name): bool {}

define('CYRUS_CALLBACK_NOLITERAL', null);

define('CYRUS_CALLBACK_NUMBERED', null);

define('CYRUS_CONN_INITIALRESPONSE', null);

define('CYRUS_CONN_NONSYNCLITERAL', null);

