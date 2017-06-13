<?php

// Start of session v.7.1.5

/**
 * <b>SessionHandlerInterface</b> は
 * インターフェイス
 * で、カスタムセッションハンドラを作成する際のプロトタイプを定義します。
 * 自作のセッションハンドラを オブジェクト指向型
 * の起動方法で <b>session_set_save_handler</b>
 * に渡すには、このインターフェイスを実装しておく必要があります。
 * @link http://php.net/manual/ja/class.sessionhandlerinterface.php
 */
interface SessionHandlerInterface  {

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * セッションを開始する
	 * @link http://php.net/manual/ja/sessionhandlerinterface.open.php
	 * @param string $save_path <p>
	 * セッションを格納/取得するパス。
	 * </p>
	 * @param string $session_name <p>
	 * セッション名。
	 * </p>
	 * @return bool 返り値 (通常は、<b>TRUE</b> が成功そして <b>FALSE</b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。
	 */
	abstract public function open(string $save_path, string $session_name): bool;

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * セッションを閉じる
	 * @link http://php.net/manual/ja/sessionhandlerinterface.close.php
	 * @return bool 返り値 (通常は、<b>TRUE</b> が成功そして <b>FALSE</b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。
	 */
	abstract public function close(): bool;

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * セッションのデータを読み込む
	 * @link http://php.net/manual/ja/sessionhandlerinterface.read.php
	 * @param string $session_id <p>
	 * セッション id。
	 * </p>
	 * @return string 読み込んだデータをエンコードした文字列を返します。
	 * 何も読まなかった場合は空文字列を返さなければなりません。
	 * この値は、PHP が内部的に使うためだけのものであることに注意しましょう。
	 */
	abstract public function read(string $session_id): string;

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * セッションのデータを書き込む
	 * @link http://php.net/manual/ja/sessionhandlerinterface.write.php
	 * @param string $session_id <p>
	 * セッション id。
	 * </p>
	 * @param string $session_data <p>
	 * エンコードされたセッションデータ。
	 * これは、PHP がスーパーグローバル $_SESSION
	 * の内容を内部的にシリアライズした結果の文字列で、それがこのパラメータに渡されます。
	 * セッションのシリアライズには通常とは別の方式を使っていることに注意しましょう。
	 * </p>
	 * @return bool 返り値 (通常は、<b>TRUE</b> が成功そして <b>FALSE</b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。
	 */
	abstract public function write(string $session_id, string $session_data): bool;

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * セッションを破棄する
	 * @link http://php.net/manual/ja/sessionhandlerinterface.destroy.php
	 * @param string $session_id <p>
	 * 破棄するセッション ID。
	 * </p>
	 * @return bool 返り値 (通常は、<b>TRUE</b> が成功そして <b>FALSE</b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。
	 */
	abstract public function destroy(string $session_id): bool;

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * 古いセッションを削除する
	 * @link http://php.net/manual/ja/sessionhandlerinterface.gc.php
	 * @param int $maxlifetime <p>
	 * 直近の <i>maxlifetime</i> 秒の間に更新されていないセッションを削除します。
	 * </p>
	 * @return bool 返り値 (通常は、<b>TRUE</b> が成功そして <b>FALSE</b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。
	 */
	abstract public function gc(int $maxlifetime): bool;

}

interface SessionIdInterface  {

	abstract public function create_sid();

}

interface SessionUpdateTimestampHandlerInterface  {

	/**
	 * @param $key
	 */
	abstract public function validateId($key);

	/**
	 * @param $key
	 * @param $val
	 */
	abstract public function updateTimestamp($key, $val);

}

/**
 * <b>SessionHandler</b> は特殊なクラスで、
 * これを継承したクラスを作れば PHP が内部的に使っているセッション保存ハンドラを拡張できます。
 * このクラスには七つのメソッドがあり、それぞれが七つのセッション保存ハンドラコールバック
 * (<i>open</i>, <i>close</i>,
 * <i>read</i>, <i>write</i>, <i>destroy</i>, <i>gc</i> および <i>create_sid</i>)
 * に対応しています。デフォルトでは、このクラスは
 * session.save_handler で定義された内部セッションハンドラをラップします。
 * 通常は <i>files</i> がデフォルトになっています。
 * それ以外には、PHP の拡張モジュールとして提供されている SQLite (<i>sqlite</i>) や
 * Memcache (<i>memcache</i>) そして Memcached (<i>memcached</i>) が使えます。
 * @link http://php.net/manual/ja/class.sessionhandler.php
 */
class SessionHandler implements SessionHandlerInterface, SessionIdInterface {

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * セッションを開始する
	 * @link http://php.net/manual/ja/sessionhandler.open.php
	 * @param string $save_path <p>
	 * セッションを格納/取得するパス。
	 * </p>
	 * @param string $session_name <p>
	 * セッション名。
	 * </p>
	 * @return bool 返り値 (通常は、<b>TRUE</b> が成功そして <b>FALSE</b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。
	 */
	public function open(string $save_path, string $session_name): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * セッションを閉じる
	 * @link http://php.net/manual/ja/sessionhandler.close.php
	 * @return bool 返り値 (通常は、<b>TRUE</b> が成功そして <b>FALSE</b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。
	 */
	public function close(): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * セッションのデータを読み込む
	 * @link http://php.net/manual/ja/sessionhandler.read.php
	 * @param string $session_id <p>
	 * データを読み込むセッションの id。
	 * </p>
	 * @return string 読み込んだデータを常に文字列で返します。何も読まなかった場合は空文字列を返さなければなりません。
	 * この値は、PHP の内部で処理されるものであることに注意しましょう。
	 */
	public function read(string $session_id): string {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * セッションのデータを書き込む
	 * @link http://php.net/manual/ja/sessionhandler.write.php
	 * @param string $session_id <p>
	 * セッション id。
	 * </p>
	 * @param string $session_data <p>
	 * エンコードされたセッションのデータ。
	 * これは、PHP が内部的にスーパーグローバル $_SESSION
	 * をエンコードしてシリアライズし、それを渡したものです。
	 * セッションが使うシリアライズ方式は、通常のシリアライズとは別のものであることに注意しましょう。
	 * </p>
	 * @return bool 返り値 (通常は、<b>TRUE</b> が成功そして <b>FALSE</b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。
	 */
	public function write(string $session_id, string $session_data): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * セッションを破棄する
	 * @link http://php.net/manual/ja/sessionhandler.destroy.php
	 * @param string $session_id <p>
	 * 破棄するセッション ID。
	 * </p>
	 * @return bool 返り値 (通常は、<b>TRUE</b> が成功そして <b>FALSE</b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。
	 */
	public function destroy(string $session_id): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * 古いセッションを削除する
	 * @link http://php.net/manual/ja/sessionhandler.gc.php
	 * @param int $maxlifetime <p>
	 * 直近の <i>maxlifetime</i> 秒の間に更新されていないセッションを削除します。
	 * </p>
	 * @return bool 返り値 (通常は、<b>TRUE</b> が成功そして <b>FALSE</b> が失敗を表します)。この値は PHP で内部的に処理されるものであることに注意しましょう。
	 */
	public function gc(int $maxlifetime): bool {}

	/**
	 * (PHP 5 &gt;= 5.5.1, PHP 7)<br/>
	 * 新規セッション ID を返す
	 * @link http://php.net/manual/ja/sessionhandler.create-sid.php
	 * @return string デフォルトのセッション・ハンドラに対して有効なセッションです。
	 */
	public function create_sid(): string {}

}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のセッション名を取得または設定する
 * @link http://php.net/manual/ja/function.session-name.php
 * @param string $name [optional] <p>
 * セッションの名前を参照します。これは、クッキーや URL
 * (例: PHPSESSID) で使われます。
 * セッション名は英数字のみで構成されている必要があり、また、
 * 短く、その内容が分かるようなものである必要があります
 * (これは、クッキー警告を有効にしているユーザー用です)。
 * </p>
 * <p>
 * <p>
 * セッション名は数字だけで構成することはできません。
 * 少なくとも文字がひとつ以上現れる必要があります。そうでない場合、
 * 新規セッション ID が毎回生成されます。
 * </p>
 * </p>
 * @return string 現在のセッションの名前を返します。
 * <i>name</i> を渡すと、
 * <b>session_name</b> はセッション名を上書きして元のセッション名を返します。
 */
function session_name(string $name = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のセッションモジュールを取得または設定する
 * @link http://php.net/manual/ja/function.session-module-name.php
 * @param string $module [optional] <p>
 * <i>module</i> が指定された場合、
 * そのモジュールを代わりに使用します。
 * </p>
 * @return string 現在のセッションモジュールの名前を返します。
 */
function session_module_name(string $module = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のセッションデータ保存パスを取得または設定する
 * @link http://php.net/manual/ja/function.session-save-path.php
 * @param string $path [optional] <p>
 * セッションデータのパス。これを指定すると、
 * データを保存するパスが変更されます。ただしそのためには
 * <b>session_start</b> がコールされる前に
 * <b>session_save_path</b> がコールされている必要があります。
 * </p>
 * <p>
 * <p>
 * いくつかのオペレーションシステムでは、多くの小さなファイルを効率的に
 * 処理するファイルシステム上にパスを指定することが望ましいです。
 * 例えば、Linux では ext2fs よりも reiserfs の方が性能面でより
 * 優れています。
 * </p>
 * </p>
 * @return string 現在のデータ保存先ディレクトリのパスを返します。
 */
function session_save_path(string $path = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のセッション ID を取得または設定する
 * @link http://php.net/manual/ja/function.session-id.php
 * @param string $id [optional] <p>
 * <i>id</i> が指定された場合、現在の
 * セッション ID を置換します。その際、
 * この関数は <b>session_start</b>
 * より前にコールされている必要があります。
 * セッションハンドラによっては、セッション ID として使用できる文字に
 * 制限がある場合があります。例えば、ファイルによるセッションハンドラでは
 * セッション ID として使える文字は
 * a-z A-Z 0-9 , (カンマ) そして - (マイナス)
 * に限られます!
 * </p>
 * セッション保持にクッキーを使用している場合、
 * <b>session_id</b> において
 * <i>id</i> 引数を指定すると、
 * 現在のセッション ID がセットされるものと
 * まったく同一であるかどうかに関わらず、
 * <b>session_start</b>
 * が呼び出される際に常に新しいクッキーが送信されます。
 * @return string <b>session_id</b> は現在のセッションのセッション ID を返します。
 * 現在のセッションが存在しない (現在のセッション ID が存在しない)
 * 場合は空文字列 ("") を返します。
 */
function session_id(string $id = null): string {}

/**
 * @param $prefix [optional]
 */
function session_create_id($prefix) {}

/**
 * (PHP 4 &gt;= 4.3.2, PHP 5, PHP 7)<br/>
 * 現在のセッションIDを新しく生成したものと置き換える
 * @link http://php.net/manual/ja/function.session-regenerate-id.php
 * @param bool $delete_old_session [optional] <p>
 * 関連付けられた古いセッションを削除するかどうか。
 * You should not delete old session if you need to avoid
 * races caused by deletion or detect/avoid session hijack
 * attacks.
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function session_regenerate_id(bool $delete_old_session = false): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * セッションエンコードされた文字列からセッションデータをデコードする
 * @link http://php.net/manual/ja/function.session-decode.php
 * @param string $data <p>
 * エンコードされたデータ。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function session_decode(string $data): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のセッションデータを、セッションエンコードされた文字列に変換する
 * @link http://php.net/manual/ja/function.session-encode.php
 * @return string 現在のセッションの内容をエンコードしたものを返します。
 */
function session_encode(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 新しいセッションを開始、あるいは既存のセッションを再開する
 * @link http://php.net/manual/ja/function.session-start.php
 * @param array $options [optional] <p>
 * オプションの連想配列を指定することができます。これは、現在設定されている
 * セッションの設定ディレクティブ
 * を上書きします。
 * 連想配列のキーにはプレフィックス session. を含めてはいけません。
 * </p>
 * <p>
 * 通常の設定ディレクティブ群に加えて、
 * read_and_close オプションを指定することもできます。
 * これを <b>TRUE</b> にすると、セッションを読み込んだらその場ですぐにクローズします。
 * セッションのデータを書き換えるつもりがない場合は、こうしておけば、意図せぬロックを防げます。
 * </p>
 * @return bool この関数は、セッションが正常に開始した場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b>
 * を返します。
 */
function session_start(array $options = '[]'): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * セッションに登録されたデータを全て破棄する
 * @link http://php.net/manual/ja/function.session-destroy.php
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function session_destroy(): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 全てのセッション変数を開放する
 * @link http://php.net/manual/ja/function.session-unset.php
 * @return void 値を返しません。
 */
function session_unset(): void {}

function session_gc() {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユーザー定義のセッション保存関数を設定する
 * @link http://php.net/manual/ja/function.session-set-save-handler.php
 * @param callable $open
 * @param callable $close
 * @param callable $read
 * @param callable $write
 * @param callable $destroy
 * @param callable $gc
 * @param callable $create_sid [optional]
 * @param callable $validate_sid [optional]
 * @param callable $update_timestamp [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function session_set_save_handler(callable $open, callable $close, callable $read, callable $write, callable $destroy, callable $gc, callable $create_sid = null, callable $validate_sid = null, callable $update_timestamp = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * 現在のキャッシュリミッタを取得または設定する
 * @link http://php.net/manual/ja/function.session-cache-limiter.php
 * @param string $cache_limiter [optional] <p>
 * <i>cache_limiter</i>
 * が指定された場合、現在のキャッシュリミッタは新しい値に変更されます。
 * </p>
 * <table>
 * 取り得る値
 * <tr valign="top">
 * <td>値</td>
 * <td>送信されるヘッダ</td>
 * </tr>
 * <tr valign="top">
 * <td>public</td>
 * <td>
 * <pre>
 * Expires: (未来のいつか、session.cache_expires による)
 * Cache-Control: public, max-age=(未来のいつか、session.cache_expire による)
 * Last-Modified: (セッションが最後に保存されたときのタイムスタンプ)
 * </pre>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>private_no_expire</td>
 * <td>
 * <pre>
 * Cache-Control: private, max-age=(session.cache_expire ぶんだけ未来), pre-check=(session.cache_expire ぶんだけ未来)
 * Last-Modified: (セッションが最後に保存されたときのタイムスタンプ)
 * </pre>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>private</td>
 * <td>
 * <pre>
 * Expires: Thu, 19 Nov 1981 08:52:00 GMT
 * Cache-Control: private, max-age=(session.cache_expire ぶんだけ未来), pre-check=(session.cache_expire ぶんだけ未来)
 * Last-Modified: (セッションが最後に保存されたときのタイムスタンプ)
 * </pre>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>nocache</td>
 * <td>
 * <pre>
 * Expires: Thu, 19 Nov 1981 08:52:00 GMT
 * Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
 * Pragma: no-cache
 * </pre>
 * </td>
 * </tr>
 * </table>
 * @return string 現在のキャッシュリミッタの名前を返します。
 */
function session_cache_limiter(string $cache_limiter = null): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 現在のキャッシュの有効期限を返す
 * @link http://php.net/manual/ja/function.session-cache-expire.php
 * @param string $new_cache_expire [optional] <p>
 * <i>new_cache_expire</i> が指定された場合、
 * 現在のキャッシュの有効期限は、
 * <i>new_cache_expire</i> で置換されます。
 * </p>
 * <p>
 * session.cache_limiterが
 * nocache以外の値にセットされている場合にのみ
 * <i>new_cache_expire</i>が有効となります。
 * </p>
 * @return int session.cache_expire の現在の設定を返します。
 * 返り値は分単位で、デフォルトは 180 です。
 */
function session_cache_expire(string $new_cache_expire = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * セッションクッキーパラメータを設定する
 * @link http://php.net/manual/ja/function.session-set-cookie-params.php
 * @param int $lifetime <p>
 * セッションクッキーの 有効期限。秒数で定義します。
 * </p>
 * @param string $path [optional] <p>
 * クッキーが動作するドメイン上の
 * パス。単一のスラッシュ ('/')
 * を指定すると、ドメイン上のすべてのパスで動作します。
 * </p>
 * @param string $domain [optional] <p>
 * クッキーの ドメイン。たとえば 'www.php.net'。
 * すべてのサブドメインでクッキーを有効にしたい場合は、先頭にドットをつけて
 * '.php.net' のようにします。
 * </p>
 * @param bool $secure [optional] <p>
 * <b>TRUE</b> の場合は、セキュア
 * な接続の場合にのみクッキーを送信します。
 * </p>
 * @param bool $httponly [optional] <p>
 * <b>TRUE</b> の場合は、PHP でセッションクッキーを設定する際に
 * httponly フラグの送信を試みます。
 * </p>
 * @return void 値を返しません。
 */
function session_set_cookie_params(int $lifetime, string $path = null, string $domain = null, bool $secure = false, bool $httponly = false): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * セッションクッキーのパラメータを得る
 * @link http://php.net/manual/ja/function.session-get-cookie-params.php
 * @return array 現在のセッションクッキーの情報を配列として返します。
 * この配列には次のような項目が含まれています。
 * "lifetime" - クッキーの生存期間(lifetime)
 * "path" - 情報が保存されている場所のパス
 * "domain" - クッキーのドメイン
 * "secure" - クッキーはセキュアな接続でのみ送信されます。
 * "httponly" - クッキーは HTTP を通してのみアクセス可能となります。
 */
function session_get_cookie_params(): array {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * セッションデータを書き込んでセッションを終了する
 * @link http://php.net/manual/ja/function.session-write-close.php
 * @return void 値を返しません。
 */
function session_write_close(): void {}

/**
 * (PHP 5 &gt;= 5.6.0, PHP 7)<br/>
 * session 配列の変更を破棄してセッションを終了します
 * @link http://php.net/manual/ja/function.session-abort.php
 * @return void 値を返しません。
 */
function session_abort(): void {}

/**
 * (PHP 5 &gt;= 5.6.0, PHP 7)<br/>
 * session 配列を元の値で再初期化します
 * @link http://php.net/manual/ja/function.session-reset.php
 * @return void 値を返しません。
 */
function session_reset(): void {}

/**
 * (PHP &gt;= 5.4.0)<br/>
 * 現在のセッションの状態を返す
 * @link http://php.net/manual/ja/function.session-status.php
 * @return mixed セッションが無効な場合は <b>PHP_SESSION_DISABLED</b>
 * セッションが有効だけれどもセッションが存在しない場合は <b>PHP_SESSION_NONE</b>
 * セッションが有効で、かつセッションが存在する場合は <b>PHP_SESSION_ACTIVE</b>
 */
function session_status() {}

/**
 * (PHP &gt;= 5.4.0)<br/>
 * セッションのシャットダウン関数
 * @link http://php.net/manual/ja/function.session-register-shutdown.php
 * @return void 値を返しません。
 */
function session_register_shutdown(): void {}

/**
 * (PHP 4 &gt;= 4.4.0, PHP 5, PHP 7)<br/>
 * <b>session_write_close</b> のエイリアス
 * @link http://php.net/manual/ja/function.session-commit.php
 */
function session_commit() {}


/**
 * PHP 5.4.0 以降で導入。セッションが無効な場合の <b>session_status</b> の返り値。
 * @link http://php.net/manual/ja/session.constants.php
 */
define ('PHP_SESSION_DISABLED', 0);

/**
 * PHP 5.4.0 以降で導入。セッションが有効だけれどもセッションが存在しない場合の <b>session_status</b> の返り値。
 * @link http://php.net/manual/ja/session.constants.php
 */
define ('PHP_SESSION_NONE', 1);

/**
 * PHP 5.4.0 以降で導入。セッションが有効で、かつセッションが存在する場合の <b>session_status</b> の返り値。
 * @link http://php.net/manual/ja/session.constants.php
 */
define ('PHP_SESSION_ACTIVE', 2);

// End of session v.7.1.5
?>
