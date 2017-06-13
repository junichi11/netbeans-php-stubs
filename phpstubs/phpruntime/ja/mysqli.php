<?php

// Start of mysqli v.7.1.5

/**
 * mysqli の例外を処理するクラスです。
 * @link http://php.net/manual/ja/class.mysqli-sql-exception.php
 */
final class mysqli_sql_exception extends RuntimeException implements Throwable {
	protected $message;
	protected $file;
	protected $line;
	protected $code;
	protected $sqlstate;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外をコピーする
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外を作成する
	 * @link http://php.net/manual/ja/exception.construct.php
	 * @param string $message [optional] <p>
	 * スローする例外メッセージ。
	 * </p>
	 * @param int $code [optional] <p>
	 * 例外コード。
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * 以前に使われた例外。例外の連結に使用します。
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外メッセージを取得する
	 * @link http://php.net/manual/ja/exception.getmessage.php
	 * @return string 例外メッセージ文字列を返します。
	 */
	final public function getMessage(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外コードを取得する
	 * @link http://php.net/manual/ja/exception.getcode.php
	 * @return mixed 例外コードを整数値で返します。しかし、
	 * <b>Exception</b> クラスを継承したクラスでは、違う型を返すこともあります
	 * (たとえば <b>PDOException</b> は文字列を返します)。
	 */
	final public function getCode() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られたファイルを取得する
	 * @link http://php.net/manual/ja/exception.getfile.php
	 * @return string 例外が作られたファイルの名前を返します。
	 */
	final public function getFile(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られた行を取得する
	 * @link http://php.net/manual/ja/exception.getline.php
	 * @return int 例外が作られた行番号を返します。
	 */
	final public function getLine(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを取得する
	 * @link http://php.net/manual/ja/exception.gettrace.php
	 * @return array 例外のスタックトレースを配列で返します。
	 */
	final public function getTrace(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 前の例外を返す
	 * @link http://php.net/manual/ja/exception.getprevious.php
	 * @return Exception 前に発生した <b>Throwable</b>、あるいはそれが存在しない場合は <b>NULL</b> を返します。
	 */
	final public function getPrevious(): Exception {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを文字列で取得する
	 * @link http://php.net/manual/ja/exception.gettraceasstring.php
	 * @return string 例外のスタックトレースを文字列で返します。
	 */
	final public function getTraceAsString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外の文字列表現
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @return string 例外を文字列で表現したものを返します。
	 */
	public function __toString(): string {}

}

/**
 * MySQLi ドライバです。
 * @link http://php.net/manual/ja/class.mysqli-driver.php
 */
final class mysqli_driver  {
	/**
	 * @var string
	 */
	public $client_info;
	/**
	 * @var string
	 */
	public $client_version;
	/**
	 * @var string
	 */
	public $driver_version;
	/**
	 * @var string
	 */
	public $embedded;
	/**
	 * @var bool
	 */
	public $reconnect;
	/**
	 * @var int
	 */
	public $report_mode;

}

/**
 * PHP と MySQL データベースの間の接続を表します。
 * @link http://php.net/manual/ja/class.mysqli.php
 */
class mysqli  {
	/**
	 * @var int
	 */
	public $affected_rows;
	/**
	 * @var string
	 */
	public $client_info;
	/**
	 * @var int
	 */
	public $client_version;
	/**
	 * @var int
	 */
	public $connect_errno;
	/**
	 * @var string
	 */
	public $connect_error;
	/**
	 * @var int
	 */
	public $errno;
	/**
	 * @var array
	 */
	public $error_list;
	/**
	 * @var string
	 */
	public $error;
	/**
	 * @var int
	 */
	public $field_count;
	/**
	 * @var int
	 */
	public $client_version;
	/**
	 * @var string
	 */
	public $host_info;
	/**
	 * @var string
	 */
	public $protocol_version;
	/**
	 * @var string
	 */
	public $server_info;
	/**
	 * @var int
	 */
	public $server_version;
	/**
	 * @var string
	 */
	public $info;
	/**
	 * @var mixed
	 */
	public $insert_id;
	/**
	 * @var string
	 */
	public $sqlstate;
	/**
	 * @var int
	 */
	public $thread_id;
	/**
	 * @var int
	 */
	public $warning_count;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * データベース更新の自動コミットをオンまたはオフにする
	 * @link http://php.net/manual/ja/mysqli.autocommit.php
	 * @param bool $mode <p>
	 * 自動コミットを有効にするかどうか。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function autocommit(bool $mode): bool {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * トランザクションを開始する
	 * @link http://php.net/manual/ja/mysqli.begin-transaction.php
	 * @param int $flags [optional] <p>
	 * 以下のフラグが使えます。
	 * </p>
	 * <p>
	 * <b>MYSQLI_TRANS_START_READ_ONLY</b>:
	 * "START TRANSACTION READ ONLY" でトランザクションを開始します。
	 * </p>
	 * @param string $name [optional] <p>
	 * トランザクションのセーブポイント名。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function begin_transaction(int $flags = null, string $name = null): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定されたデータベース接続のユーザー名を変更する
	 * @link http://php.net/manual/ja/mysqli.change-user.php
	 * @param string $user <p>
	 * MySQL のユーザー名。
	 * </p>
	 * @param string $password <p>
	 * MySQL のパスワード。
	 * </p>
	 * @param string $database <p>
	 * 変更するデータベース。
	 * </p>
	 * <p>
	 * 引数には <b>NULL</b> 値を渡すこともできます。
	 * その場合ユーザーの変更だけでデータベースの選択はされません。
	 * そのようなケースでデータベースを選択したい場合には
	 * <b>mysqli_select_db</b> 関数を使用してください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function change_user(string $user, string $password, string $database): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * データベース接続のデフォルトの文字コードセットを返す
	 * @link http://php.net/manual/ja/mysqli.character-set-name.php
	 * @return string 現在の接続のデフォルト文字セットを返します。
	 */
	public function character_set_name(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 事前にオープンしているデータベース接続を閉じる
	 * @link http://php.net/manual/ja/mysqli.close.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function close(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在のトランザクションをコミットする
	 * @link http://php.net/manual/ja/mysqli.commit.php
	 * @param int $flags [optional] <p>
	 * 定数 <b>MYSQLI_TRANS_COR_*</b> のビットマスク。
	 * </p>
	 * @param string $name [optional] <p>
	 * 指定した場合は、COMMIT/*name* / を実行します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function commit(int $flags = null, string $name = null): bool {}

	/**
	 * @param $host [optional]
	 * @param $user [optional]
	 * @param $password [optional]
	 * @param $database [optional]
	 * @param $port [optional]
	 * @param $socket [optional]
	 */
	public function connect($host, $user, $password, $database, $port, $socket) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * デバッグ情報をログに出力する
	 * @link http://php.net/manual/ja/mysqli.dump-debug-info.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function dump_debug_info(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * デバッグ操作を行う
	 * @link http://php.net/manual/ja/mysqli.debug.php
	 * @param string $message <p>
	 * 実行するデバッグ操作を表す文字列。
	 * </p>
	 * @return bool <b>TRUE</b>.
	 */
	public function debug(string $message): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 文字セットオブジェクトを返す
	 * @link http://php.net/manual/ja/mysqli.get-charset.php
	 * @return object この関数は、以下のプロパティを持つ文字セットオブジェクトを返します。
	 * <i>charset</i>
	 * <p>文字セット名</p>
	 * <i>collation</i>
	 * <p>照合規則名</p>
	 * <i>dir</i>
	 * <p>文字セットの設定を読み込むディレクトリ。組み込みの文字セットについては ""</p>
	 * <i>min_length</i>
	 * <p>最小の文字の長さ (バイト数)</p>
	 * <i>max_length</i>
	 * <p>最大の文字の長さ (バイト数)</p>
	 * <i>number</i>
	 * <p>内部文字セット番号</p>
	 * <i>state</i>
	 * <p>文字セットの状態</p>
	 */
	public function get_charset() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * MySQL クライアント情報を取得する
	 * @link http://php.net/manual/ja/mysqli.get-client-info.php
	 * @return string MySQL クライアントライブラリのバージョンを文字列で返します。
	 */
	public function get_client_info(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * クライアント接続に関する統計情報を返す
	 * @link http://php.net/manual/ja/mysqli.get-connection-stats.php
	 * @return bool 成功した場合に接続の統計情報を含む配列、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function get_connection_stats(): bool {}

	public function get_server_info() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * SHOW WARNINGS の結果を取得する
	 * @link http://php.net/manual/ja/mysqli.get-warnings.php
	 * @return mysqli_warning
	 */
	public function get_warnings(): mysqli_warning {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * MySQLi を初期化し、mysqli_real_connect() で使用するリソースを返す
	 * @link http://php.net/manual/ja/mysqli.init.php
	 * @return mysqli オブジェクトを返します。
	 */
	public function init(): mysqli {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * サーバーに MySQL スレッドの停止を問い合わせる
	 * @link http://php.net/manual/ja/mysqli.kill.php
	 * @param int $processid
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function kill(int $processid): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * データベース上でクエリを実行する
	 * @link http://php.net/manual/ja/mysqli.multi-query.php
	 * @param string $query <p>
	 * クエリを表す文字列。
	 * </p>
	 * <p>
	 * クエリ内のデータは 適切にエスケープ
	 * する必要があります。
	 * </p>
	 * @return bool 最初のステートメントが失敗した場合にのみ <b>FALSE</b> を返します。
	 * その他のステートメントのエラーを取得するには、まず
	 * <b>mysqli_next_result</b> をコールする必要があります。
	 */
	public function multi_query(string $query): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新規に MySQL サーバーへの接続をオープンする
	 * @link http://php.net/manual/ja/mysqli.construct.php
	 * @param string $host [optional] <p>
	 * ホスト名または IP アドレスです。この引数に <b>NULL</b> または "localhost" を渡すと
	 * ローカルホストとみなされます。もし可能な場合、TCP/IP プロトコルの代わりに
	 * パイプが使用されます。
	 * </p>
	 * <p>
	 * ホストの前に p: をつけると、持続的な接続を開きます。
	 * 接続プールから開いた接続上で
	 * <b>mysqli_change_user</b> が自動的にコールされます。
	 * </p>
	 * @param string $username [optional] <p>
	 * MySQL のユーザー名。
	 * </p>
	 * @param string $passwd [optional] <p>
	 * 省略したり <b>NULL</b> を渡したりした場合、MySQL サーバーは
	 * パスワードを持たないユーザーレコードについてのみ認証を試みます。
	 * これによってひとつのユーザー名において(パスワードが指定されたか
	 * 否かによって)違うパーミッションを与えることができます。
	 * </p>
	 * @param string $dbname [optional] <p>
	 * 指定した場合は、
	 * クエリが行われるデフォルトのデータベースとなります。
	 * </p>
	 * @param int $port [optional] <p>
	 * MySQL サーバーに接続する際のポート番号を指定します。
	 * </p>
	 * @param string $socket [optional] <p>
	 * 使用するソケットあるいは名前つきパイプを指定します。
	 * </p>
	 * <p>
	 * <i>socket</i> 引数を指定しても、MySQL サーバーへの
	 * 接続時の型を明示的に定義することにはなりません。MySQL サーバーへの
	 * 接続方法については <i>host</i> 引数で定義されます。
	 * </p>
	 */
	public function __construct(string $host = 'ini_get("mysqli.default_host")', string $username = 'ini_get("mysqli.default_user")', string $passwd = 'ini_get("mysqli.default_pw")', string $dbname = "", int $port = 'ini_get("mysqli.default_port")', string $socket = 'ini_get("mysqli.default_socket")') {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * マルチクエリからの結果がまだ残っているかどうかを調べる
	 * @link http://php.net/manual/ja/mysqli.more-results.php
	 * @return bool 直近の <b>mysqli_multi_query</b>
	 * の呼び出しで 1 件以上の結果セットが存在する場合に <b>TRUE</b>、それ以外の場合に
	 * <b>FALSE</b> を返します。
	 */
	public function more_results(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * multi_query の、次の結果を準備する
	 * @link http://php.net/manual/ja/mysqli.next-result.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function next_result(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * オプションを設定する
	 * @link http://php.net/manual/ja/mysqli.options.php
	 * @param int $option <p>
	 * 指定するオプション。以下の値のいずれかです。
	 * <table>
	 * 使用可能なオプション
	 * <tr valign="top">
	 * <td>名前</td>
	 * <td>説明</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_OPT_CONNECT_TIMEOUT</b></td>
	 * <td>接続のタイムアウト秒数 (PHP 5.3.1 以降、Windows 上での TCP/IP 接続をサポートします)。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_OPT_LOCAL_INFILE</b></td>
	 * <td>LOAD LOCAL INFILE の使用可/不可。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_INIT_COMMAND</b></td>
	 * <td>MySQL サーバーへの接続後に実行するコマンド。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_READ_DEFAULT_FILE</b></td>
	 * <td>
	 * my.cnf の代わりに、指定した名前のファイルから
	 * 設定を読み込みます。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_READ_DEFAULT_GROUP</b></td>
	 * <td>
	 * my.cnf の指定した名前のグループ、あるいは
	 * <b>MYSQL_READ_DEFAULT_FILE</b> で指定したファイルから
	 * 設定を読み込みます。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_SERVER_PUBLIC_KEY</b></td>
	 * <td>
	 * RSA 公開鍵ファイル。SHA-256 ベースの認証で使います。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_OPT_NET_CMD_BUFFER_SIZE</b></td>
	 * <td>
	 * 内部のコマンド／ネットワークバッファのサイズ。
	 * mysqlnd でのみ有効です。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_OPT_NET_READ_BUFFER_SIZE</b></td>
	 * <td>
	 * MySQL コマンドパケットのボディを読み込むときの、読み込みチャンクの最大バイト数。
	 * mysqlnd でのみ有効です。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_OPT_INT_AND_FLOAT_NATIVE</b></td>
	 * <td>
	 * integer 型と float 型のカラムを PHP の数値に変換します。
	 * mysqlnd でのみ有効です。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_OPT_SSL_VERIFY_SERVER_CERT</b></td>
	 * <td>
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @param mixed $value <p>
	 * オプションに設定する値。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function options(int $option, $value): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * サーバーとの接続をチェックし、もし切断されている場合は再接続を試みる
	 * @link http://php.net/manual/ja/mysqli.ping.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function ping(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 接続を問い合わせる
	 * @link http://php.net/manual/ja/mysqli.poll.php
	 * @param array $read <p>
	 * 読み込める結果が残っている接続のリスト。
	 * </p>
	 * @param array $error <p>
	 * クエリが失敗した、あるいは接続が切断されたなどのエラーが発生した接続のリスト。
	 * </p>
	 * @param array $reject <p>
	 * 関数から結果を取得できるような非同期クエリが実行されていないという理由で、
	 * 拒否された接続のリスト。
	 * </p>
	 * @param int $sec <p>
	 * 待ち続ける秒数。非負の数でなければなりません。
	 * </p>
	 * @param int $usec [optional] <p>
	 * 待ち続けるマイクロ秒数。非負の数でなければなりません。
	 * </p>
	 * @return int 成功した場合に使用できる接続の数、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public static function poll(array &$read, array &$error, array &$reject, int $sec, int $usec = null): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 実行するための SQL ステートメントを準備する
	 * @link http://php.net/manual/ja/mysqli.prepare.php
	 * @param string $query <p>
	 * クエリを表す文字列。
	 * </p>
	 * <p>
	 * ステートメントの最後にセミコロンや \g
	 * を追加してはいけません。
	 * </p>
	 * <p>
	 * <i>query</i> にはひとつまたは複数のパラメータを
	 * 含めることが可能です。そのためには、適切な位置にクエスチョンマーク
	 * (?) を埋め込みます。
	 * </p>
	 * <p>
	 * パラメータのマーカは、それが SQL 文の適切な位置にある場合のみ有効です。
	 * 例えば INSERT 文の
	 * VALUES() リストの中 (行に登録するカラム値を指定する)
	 * や WHERE 句で列のデータと比較する値などが
	 * 適切な位置の例です。
	 * </p>
	 * <p>
	 * しかし、識別子 (テーブルやカラムの名前) や SELECT
	 * 文で選択する項目の名前に指定したり、
	 * (等号 = のような)
	 * 二項演算子の両側にパラメータを指定したりすることはできません。
	 * 後者の制限は、パラメータの型が判断できなくなることによるものです。
	 * また、パラメータのマーカを NULL と比較して
	 * ? IS NULL のようにすることもできません。
	 * 一般に、パラメータが使用可能なのはデータ操作言語 (DML)
	 * ステートメントであり、データ定義言語 (DDL)
	 * ステートメントでは使用できません。
	 * </p>
	 * @return mysqli_stmt <b>mysqli_prepare</b> はステートメントオブジェクトを返します。
	 * エラー時には <b>FALSE</b> を返します。
	 */
	public function prepare(string $query): mysqli_stmt {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * データベース上でクエリを実行する
	 * @link http://php.net/manual/ja/mysqli.query.php
	 * @param string $query <p>
	 * クエリ文字列。
	 * </p>
	 * <p>
	 * クエリ内のデータは 適切にエスケープ.
	 * する必要があります。
	 * </p>
	 * @param int $resultmode [optional] <p>
	 * 定数 <b>MYSQLI_USE_RESULT</b> あるいは
	 * <b>MYSQLI_STORE_RESULT</b> で、望みの挙動を指定します。
	 * デフォルトでは <b>MYSQLI_STORE_RESULT</b>
	 * を使用します。
	 * </p>
	 * <p>
	 * MYSQLI_USE_RESULT を使用すると、
	 * <b>mysqli_free_result</b> をコールするまでは
	 * それ以降のコールはすべて Commands out of sync
	 * エラーを返します。
	 * </p>
	 * <p>
	 * <b>MYSQLI_ASYNC</b> (mysqlnd で使用可能)
	 * を使用すると、クエリを非同期実行できるようになります。
	 * このクエリの結果を取得するには
	 * <b>mysqli_poll</b> を使用します。
	 * </p>
	 * @return mixed 失敗した場合に <b>FALSE</b> を返します。
	 * SELECT, SHOW, DESCRIBE あるいは
	 * EXPLAIN が成功した場合は、<b>mysqli_query</b>
	 * は <b>mysqli_result</b> オブジェクトを返します。それ以外のクエリが成功した場合は、
	 * <b>mysqli_query</b> は <b>TRUE</b> を返します。
	 */
	public function query(string $query, int $resultmode = MYSQLI_STORE_RESULT) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * mysql サーバーとの接続をオープンする
	 * @link http://php.net/manual/ja/mysqli.real-connect.php
	 * @param string $host [optional] <p>
	 * ホスト名あるいは IP アドレス。<b>NULL</b> 値あるいは文字列
	 * "localhost" をこのパラメータに指定すると、ローカルホストを使用します。
	 * 使用可能な場合は、TCP/IP プロトコルよりもパイプを優先して使用します。
	 * </p>
	 * @param string $username [optional] <p>
	 * MySQL ユーザー名。
	 * </p>
	 * @param string $passwd [optional] <p>
	 * <b>NULL</b> を指定した場合は、MySQL サーバーは
	 * パスワードを持たないユーザーレコードについてのみ認証を試みます。
	 * これにより、同一のユーザー名に対して (パスワードが指定されたか
	 * 否かによって) 違う権限を与えることができます。
	 * </p>
	 * @param string $dbname [optional] <p>
	 * 指定した場合は、
	 * クエリが行われるデフォルトのデータベースとなります。
	 * </p>
	 * @param int $port [optional] <p>
	 * MySQL サーバーに接続する際のポート番号を指定します。
	 * </p>
	 * @param string $socket [optional] <p>
	 * 使用するソケットあるいは名前つきパイプを指定します。
	 * </p>
	 * <p>
	 * <i>socket</i> 引数を指定しても、MySQL サーバーへの
	 * 接続時の型を明示的に定義することにはなりません。MySQL サーバーへの
	 * 接続方法については <i>host</i> 引数で定義されます。
	 * </p>
	 * @param int $flags [optional] <p>
	 * パラメータ <i>flags</i>
	 * で、接続時のさまざまなオプションを設定します。
	 * </p>
	 * <table>
	 * サポートするフラグ
	 * <tr valign="top">
	 * <td>名前</td>
	 * <td>説明</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_CLIENT_COMPRESS</b></td>
	 * <td>圧縮プロトコルを使用します。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_CLIENT_FOUND_ROWS</b></td>
	 * <td>変更された行数ではなく、マッチした行数を返します。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_CLIENT_IGNORE_SPACE</b></td>
	 * <td>関数名に続く空白文字を許可します。すべての関数名を予約語とします。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_CLIENT_INTERACTIVE</b></td>
	 * <td>
	 * 接続を閉じるまでのタイムアウト時間として、
	 * (wait_timeout のかわりに)
	 * interactive_timeout の使用を許可します。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_CLIENT_SSL</b></td>
	 * <td>SSL (暗号化) を使用します。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT</b></td>
	 * <td>
	 * <b>MYSQLI_CLIENT_SSL</b> と似ていますが、
	 * SSL 証明書の検証は行いません。
	 * これは、MySQL Native Driver と MySQL 5.6 以降の組み合わせでのみ使えます。
	 * </td>
	 * </tr>
	 * </table>
	 * <p>
	 * セキュリティの観点から、PHP では MULTI_STATEMENT
	 * フラグはサポートされていません。複数のクエリを実行したい場合は、
	 * <b>mysqli_multi_query</b> 関数を使用してください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function real_connect(string $host = null, string $username = null, string $passwd = null, string $dbname = null, int $port = null, string $socket = null, int $flags = null): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 接続の現在の文字セットを考慮して、SQL 文で使用する文字列の特殊文字をエスケープする
	 * @link http://php.net/manual/ja/mysqli.real-escape-string.php
	 * @param string $escapestr <p>
	 * エスケープする文字列。
	 * </p>
	 * <p>
	 * エンコードされる文字は NUL (ASCII 0), \n, \r, \, ', ", および
	 * Control-Z です。
	 * </p>
	 * @return string エスケープ済みの文字列を返します。
	 */
	public function real_escape_string(string $escapestr): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 非同期クエリから結果を取得する
	 * @link http://php.net/manual/ja/mysqli.reap-async-query.php
	 * @return mysqli_result 成功した場合に <b>mysqli_result</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function reap_async_query(): mysqli_result {}

	/**
	 * @param $string_to_escape
	 */
	public function escape_string($string_to_escape) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * SQL クエリを実行する
	 * @link http://php.net/manual/ja/mysqli.real-query.php
	 * @param string $query <p>
	 * クエリを表す文字列。
	 * </p>
	 * <p>
	 * クエリ内のデータは 適切にエスケープ.
	 * する必要があります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function real_query(string $query): bool {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * 現在のトランザクションのセーブポイント群から、指定した名前のセーブポイントを削除する
	 * @link http://php.net/manual/ja/mysqli.release-savepoint.php
	 * @param string $name <p>
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function release_savepoint(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在のトランザクションをロールバックする
	 * @link http://php.net/manual/ja/mysqli.rollback.php
	 * @param int $flags [optional] <p>
	 * 定数 <b>MYSQLI_TRANS_COR_*</b> のビットマスク。
	 * </p>
	 * @param string $name [optional] <p>
	 * 指定した場合は、ROLLBACK/*name* / を実行します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function rollback(int $flags = null, string $name = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * トランザクションのセーブポイントを設定する
	 * @link http://php.net/manual/ja/mysqli.savepoint.php
	 * @param string $name <p>
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function savepoint(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * クエリを実行するためのデフォルトのデータベースを選択する
	 * @link http://php.net/manual/ja/mysqli.select-db.php
	 * @param string $dbname <p>
	 * データベース名。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function select_db(string $dbname): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.5, PHP 7)<br/>
	 * クライアントのデフォルト文字セットを設定する
	 * @link http://php.net/manual/ja/mysqli.set-charset.php
	 * @param string $charset <p>
	 * デフォルトとして設定する文字セット。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function set_charset(string $charset): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * <b>mysqli_options</b> のエイリアス
	 * @link http://php.net/manual/ja/function.mysqli-set-opt.php
	 * @param $option
	 * @param $value
	 */
	public function set_opt($option, $value) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * SSL を使用したセキュアな接続を確立する
	 * @link http://php.net/manual/ja/mysqli.ssl-set.php
	 * @param string $key <p>
	 * 鍵ファイルへのパス。
	 * </p>
	 * @param string $cert <p>
	 * 証明書ファイルへのパス。
	 * </p>
	 * @param string $ca <p>
	 * CA ファイルへのパス。
	 * </p>
	 * @param string $capath <p>
	 * 信頼された SSL CA 証明書が PEM フォーマットで格納されているディレクトリへのパス。
	 * </p>
	 * @param string $cipher <p>
	 * SSL の暗号化に使用可能な暗号形式の一覧。
	 * </p>
	 * @return bool この関数は、常に <b>TRUE</b> を返します。もし SSL が正しく設定できていない場合、
	 * <b>mysqli_real_connect</b> は接続時にエラーを返します。
	 */
	public function ssl_set(string $key, string $cert, string $ca, string $capath, string $cipher): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在のシステム状態を取得する
	 * @link http://php.net/manual/ja/mysqli.stat.php
	 * @return string サーバーの状態を示す文字列を返します。エラー時には <b>FALSE</b> を返します。
	 */
	public function stat(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ステートメントを初期化し、mysqli_stmt_prepare で使用するオブジェクトを返す
	 * @link http://php.net/manual/ja/mysqli.stmt-init.php
	 * @return mysqli_stmt オブジェクトを返します。
	 */
	public function stmt_init(): mysqli_stmt {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 直近のクエリから結果セットを転送する
	 * @link http://php.net/manual/ja/mysqli.store-result.php
	 * @param int $option [optional] <p>
	 * 指定したいオプション。以下のいずれかの値を指定します。
	 * <table>
	 * 有効なオプション
	 * <tr valign="top">
	 * <td>名前</td>
	 * <td>説明</td>
	 * </tr>
	 * <tr valign="top">
	 * <td><b>MYSQLI_STORE_RESULT_COPY_DATA</b></td>
	 * <td>
	 * 結果を、内部の mysqlnd バッファーから PHP の変数にコピーします。
	 * デフォルトでは、mysqlnd は参照を利用しており、メモリ内の結果をコピーしたり複製したりしないようにしています。
	 * ある種の結果セット (短めの行を大量に保持する結果セットなど) の場合は、
	 * コピーしたほうが、全体的なメモリ使用量を抑えることができます。
	 * 結果を保持する PHP の変数のほうが、解放されるのが早いからです。
	 * これは mysqlnd でのみ利用可能で、PHP 5.6.0 以降で使えます。</td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return mysqli_result バッファに格納した結果オブジェクトを返します。エラー時には <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * <b>mysqli_store_result</b> は、クエリが結果セットを
	 * 返さなかった場合（例えば、クエリが INSERT 文であった場合）に
	 * <b>FALSE</b> を返します。また、結果セットの読み込みに失敗した場合にも
	 * <b>FALSE</b> を返します。エラーが発生したかどうかを調べるには、
	 * <b>mysqli_error</b> が空文字列以外を返す・
	 * <b>mysqli_errno</b> がゼロ以外の値を返す・あるいは
	 * <b>mysqli_field_count</b> がゼロ以外の値を返す
	 * のいずれかを確認します。それ以外にこの関数が <b>FALSE</b> を返す理由としては
	 * <b>mysqli_query</b> のコールに成功して返された
	 * 結果セットが大きすぎる（メモリに割り当てられない）場合がありえます。
	 * もし <b>mysqli_field_count</b> がゼロ以外の値を
	 * 返した場合、文は空でない結果セットを生成しています。
	 */
	public function store_result(int $option = null): mysqli_result {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * スレッドセーフであるかどうかを返す
	 * @link http://php.net/manual/ja/mysqli.thread-safe.php
	 * @return bool クライアントライブラリがスレッドセーフの場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function thread_safe(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 結果セットの取得を開始する
	 * @link http://php.net/manual/ja/mysqli.use-result.php
	 * @return mysqli_result バッファに取得しないで結果オブジェクトを返します。
	 * エラー時には <b>FALSE</b> を返します。
	 */
	public function use_result(): mysqli_result {}

	/**
	 * (PHP 5 &lt;= 5.3.0)<br/>
	 * リフレッシュする
	 * @link http://php.net/manual/ja/mysqli.refresh.php
	 * @param int $options <p>
	 * リフレッシュのオプションを定数 MYSQLI_REFRESH_* で指定します。定数の意味は
	 * MySQLi 定数 のドキュメントを参照ください。
	 * </p>
	 * <p>
	 * 公式ドキュメントの MySQL Refresh
	 * も参照ください。
	 * </p>
	 * @return bool リフレッシュに成功した場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function refresh(int $options): bool {}

}

/**
 * MySQL の警告を表します。
 * @link http://php.net/manual/ja/class.mysqli-warning.php
 */
final class mysqli_warning  {
	public $message;
	public $sqlstate;
	public $errno;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * コンストラクタ
	 * @link http://php.net/manual/ja/mysqli-warning.construct.php
	 */
	protected function __construct() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * next
	 * @link http://php.net/manual/ja/mysqli-warning.next.php
	 * @return void
	 */
	public function next(): void {}

}

/**
 * データベースへのクエリにより得られた結果セットを表します。
 * @link http://php.net/manual/ja/class.mysqli-result.php
 */
class mysqli_result implements Traversable {
	public $current_field;
	public $field_count;
	public $lengths;
	public $num_rows;
	public $type;


	public function __construct() {}

	public function close() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 結果に関連付けられたメモリを開放する
	 * @link http://php.net/manual/ja/mysqli-result.free.php
	 * @return void 値を返しません。
	 */
	public function free(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 結果の任意の行にポインタを移動する
	 * @link http://php.net/manual/ja/mysqli-result.data-seek.php
	 * @param int $offset <p>
	 * フィールドオフセット。ゼロから全行数 - 1 までの間
	 * （0..<b>mysqli_num_rows</b> - 1）である必要があります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function data_seek(int $offset): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 結果セットの次のフィールドを返す
	 * @link http://php.net/manual/ja/mysqli-result.fetch-field.php
	 * @return object フィールド定義情報を含むオブジェクトを返します。もし
	 * フィールドの情報が取得できない場合は、<b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * <table>
	 * オブジェクトのプロパティ
	 * <tr valign="top">
	 * <td>プロパティ</td>
	 * <td>説明</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>name</td>
	 * <td>カラムの名前。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgname</td>
	 * <td>もしエイリアスが指定されている場合の、本来の名前。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>table</td>
	 * <td>フィールドが属するテーブルの名前。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgtable</td>
	 * <td>もしエイリアスが指定されている場合の、本来のテーブル名。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>def</td>
	 * <td>デフォルト値のために予約済。現在は常に ""。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>db</td>
	 * <td>データベース (PHP 5.3.6 以降)。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>catalog</td>
	 * <td>カタログ名。常に "def" (PHP 5.3.6 以降)。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>max_length</td>
	 * <td>結果セットにおけるフィールドの最大幅。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>length</td>
	 * <td>テーブルの定義で指定されているフィールド幅。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>charsetnr</td>
	 * <td>フィールドの文字セット番号。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>flags</td>
	 * <td>フィールドのビットフラグを整数型で表す。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>type</td>
	 * <td>フィールドのデータ型。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>decimals</td>
	 * <td>フィールドの桁数（integer 型のフィールド）。</td>
	 * </tr>
	 * </table>
	 */
	public function fetch_field() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 結果セットのフィールド情報をオブジェクトの配列で返す
	 * @link http://php.net/manual/ja/mysqli-result.fetch-fields.php
	 * @return array フィールド定義情報を含むオブジェクトの配列を返します。もし
	 * フィールドの情報が取得できない場合は、<b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * <table>
	 * オブジェクトのプロパティ
	 * <tr valign="top">
	 * <td>プロパティ</td>
	 * <td>説明</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>name</td>
	 * <td>カラムの名前。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgname</td>
	 * <td>もしエイリアスが指定されている場合の、本来の名前。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>table</td>
	 * <td>フィールドが属するテーブルの名前。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgtable</td>
	 * <td>もしエイリアスが指定されている場合の、本来のテーブル名。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>max_length</td>
	 * <td>結果セットにおけるフィールドの最大幅。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>length</td>
	 * <td>
	 * テーブルの定義で指定されているフィールド幅 (バイト単位)。
	 * この値 (バイト数) は、利用している文字セットによってはテーブル定義の値 (文字数) と異なるかもしれないことに注意しましょう。
	 * たとえば utf8 の場合は一文字あたり3バイトなので、varchar(10) の長さは30になります。
	 * 一方、同じ定義でも latin1 の場合の長さは10になります。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>charsetnr</td>
	 * <td>フィールドの文字セット番号 (id)。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>flags</td>
	 * <td>フィールドのビットフラグを整数型で表す。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>type</td>
	 * <td>フィールドのデータ型。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>decimals</td>
	 * <td>フィールドの桁数（integer 型のフィールド）。</td>
	 * </tr>
	 * </table>
	 */
	public function fetch_fields(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 単一のフィールドのメタデータを取得する
	 * @link http://php.net/manual/ja/mysqli-result.fetch-field-direct.php
	 * @param int $fieldnr <p>
	 * フィールド番号。この値は
	 * 0 から フィールド数 - 1
	 * までの範囲でなければなりません。
	 * </p>
	 * @return object フィールド定義情報を含むオブジェクトを返します。もし、指定した
	 * fieldnr のフィールドの情報が取得できない場合は
	 * <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * <table>
	 * オブジェクトの属性
	 * <tr valign="top">
	 * <td>属性</td>
	 * <td>説明</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>name</td>
	 * <td>カラムの名前。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgname</td>
	 * <td>もしエイリアスが指定されている場合の、本来の名前。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>table</td>
	 * <td>フィールドが属するテーブルの名前。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>orgtable</td>
	 * <td>もしエイリアスが指定されている場合の、本来のテーブル名。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>def</td>
	 * <td>フィールドのデフォルト値。文字列形式。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>max_length</td>
	 * <td>結果セットにおけるフィールドの最大幅。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>length</td>
	 * <td>テーブルの定義で指定されているフィールド幅。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>charsetnr</td>
	 * <td>フィールドの文字セット番号。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>flags</td>
	 * <td>フィールドのビットフラグを整数型で表す。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>type</td>
	 * <td>フィールドのデータ型。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>decimals</td>
	 * <td>フィールドの桁数（数値型のフィールド）。</td>
	 * </tr>
	 * </table>
	 */
	public function fetch_field_direct(int $fieldnr) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 結果のすべての行を連想配列・数値添字配列あるいはその両方の形式で取得する
	 * @link http://php.net/manual/ja/mysqli-result.fetch-all.php
	 * @param int $resulttype [optional] <p>
	 * このオプションは、
	 * 結果の行データから返す配列の型を指定します。ここで指定可能な値は
	 * 定数 <b>MYSQLI_ASSOC</b>、
	 * <b>MYSQLI_NUM</b> あるいは <b>MYSQLI_BOTH</b>.
	 * のいずれかです。
	 * </p>
	 * @return mixed 結果の行を含む連想配列あるいは数値添字配列の配列を返します。
	 */
	public function fetch_all(int $resulttype = MYSQLI_NUM) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 結果の行を連想配列・数値添字配列あるいはその両方の形式で取得する
	 * @link http://php.net/manual/ja/mysqli-result.fetch-array.php
	 * @param int $resulttype [optional] <p>
	 * このオプションは、
	 * 結果の行データから返す配列の型を指定します。ここで指定可能な値は
	 * 定数 <b>MYSQLI_ASSOC</b>、
	 * <b>MYSQLI_NUM</b> あるいは <b>MYSQLI_BOTH</b>.
	 * のいずれかです。
	 * </p>
	 * <p>
	 * <b>MYSQLI_ASSOC</b> 定数を指定すると、この関数は
	 * <b>mysqli_fetch_assoc</b> と同じ結果を返します。一方
	 * <b>MYSQLI_NUM</b> を指定すると、<b>mysqli_fetch_row</b>
	 * 関数と同じ結果となります。最後の <b>MYSQLI_BOTH</b> を指定すると、
	 * ひとつの配列にこれら両方の属性を含めます。
	 * </p>
	 * @return mixed 取得した行に対応する文字列の配列を返します。結果セットにもう行がない場合には
	 * <b>NULL</b> を返します。
	 */
	public function fetch_array(int $resulttype = MYSQLI_BOTH) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 結果の行を連想配列で取得する
	 * @link http://php.net/manual/ja/mysqli-result.fetch-assoc.php
	 * @return array 取得した行に対応する文字列の連想配列を返します。
	 * 連想配列の各キーが、結果セットのカラムを表します。
	 * 結果セットにもう行がない場合には <b>NULL</b> を返します。
	 * </p>
	 * <p>
	 * もし 2 つ以上のカラムが同じフィールド名であった場合は、最後に現れた
	 * カラムが優先され、以前のデータを上書きします。同名の複数のカラムに
	 * アクセスする場合、<b>mysqli_fetch_row</b> を用いて
	 * 数値添字配列を使用するか、あるいはカラム名にエイリアスを指定する
	 * 必要があります。
	 */
	public function fetch_assoc(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 結果セットの現在の行をオブジェクトとして返す
	 * @link http://php.net/manual/ja/mysqli-result.fetch-object.php
	 * @param string $class_name [optional] <p>
	 * インスタンス化してプロパティを設定後に返すクラスの名前。
	 * 省略した場合は <b>stdClass</b> オブジェクトを返します。
	 * </p>
	 * @param array $params [optional] <p>
	 * オプションのパラメータの配列で、
	 * <i>class_name</i> オブジェクトのコンストラクタに渡します。
	 * </p>
	 * @return object 取得した行に対応する文字列プロパティを有するオブジェクトを返します。
	 * もし結果セットにもう行がない場合には <b>NULL</b> を返します。
	 */
	public function fetch_object(string $class_name = "stdClass", array $params = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 結果の行を数値添字配列で取得する
	 * @link http://php.net/manual/ja/mysqli-result.fetch-row.php
	 * @return mixed <b>mysqli_fetch_row</b> は取得した行に対応する文字列の配列を
	 * 返します。もしもう行がない場合には <b>NULL</b> を返します。
	 */
	public function fetch_row() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 結果ポインタを、指定したフィールドオフセットに設定する
	 * @link http://php.net/manual/ja/mysqli-result.field-seek.php
	 * @param int $fieldnr <p>
	 * フィールド番号。これは
	 * 0 から フィールド数 - 1
	 * までの範囲でなければなりません。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function field_seek(int $fieldnr): bool {}

	public function free_result() {}

}

/**
 * プリペアドステートメントを表します。
 * @link http://php.net/manual/ja/class.mysqli-stmt.php
 */
class mysqli_stmt  {
	public $affected_rows;
	public $insert_id;
	public $num_rows;
	public $param_count;
	public $field_count;
	public $errno;
	public $error;
	public $error_list;
	public $sqlstate;
	public $id;


	public function __construct() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ステートメントの属性の現在の値を取得する
	 * @link http://php.net/manual/ja/mysqli-stmt.attr-get.php
	 * @param int $attr <p>
	 * 取得したい属性。
	 * </p>
	 * @return int 属性がみつからない場合は <b>FALSE</b> を、
	 * それ以外の場合はその属性の値を返します。
	 */
	public function attr_get(int $attr): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プリペアドステートメントの振る舞いを変更する
	 * @link http://php.net/manual/ja/mysqli-stmt.attr-set.php
	 * @param int $attr <p>
	 * 設定したい属性。次のいずれかの値となります。
	 * <table>
	 * 属性の値
	 * <tr valign="top">
	 * <td>文字</td>
	 * <td>説明</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH</td>
	 * <td>
	 * <b>TRUE</b> に設定すると、<b>mysqli_stmt_store_result</b> は
	 * メタデータ MYSQL_FIELD->max_length の値を上書きします。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>MYSQLI_STMT_ATTR_CURSOR_TYPE</td>
	 * <td>
	 * <b>mysqli_stmt_execute</b>
	 * が起動された際にステートメントをオープンするためのカーソル型。
	 * <i>mode</i> は、MYSQLI_CURSOR_TYPE_NO_CURSOR
	 * (デフォルト) あるいは MYSQLI_CURSOR_TYPE_READ_ONLY となります。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>MYSQLI_STMT_ATTR_PREFETCH_ROWS</td>
	 * <td>
	 * カーソルの使用時にサーバーからいちどに取得する行数。
	 * <i>mode</i> に指定できる値の範囲は
	 * 1 から unsigned long の最大値までで、デフォルトは 1 です。
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * <p>
	 * MYSQLI_STMT_ATTR_CURSOR_TYPE オプションで
	 * MYSQLI_CURSOR_TYPE_READ_ONLY を使用すると、
	 * <b>mysqli_stmt_execute</b>
	 * を起動した際にそのステートメント用のカーソルをオープンします。
	 * 以前に <b>mysqli_stmt_execute</b>
	 * をコールした際にオープンしたカーソルが残っている場合は、
	 * それを閉じてから新しいカーソルをオープンします。また
	 * <b>mysqli_stmt_reset</b>
	 * も、オープンしているカーソルをすべて閉じてからステートメント再実行の準備をします。
	 * <b>mysqli_stmt_free_result</b>
	 * は、オープンしているカーソルをすべて閉じます。
	 * </p>
	 * <p>
	 * プリペアドステートメント用のカーソルをオープンするのなら
	 * <b>mysqli_stmt_store_result</b> は不要です。
	 * </p>
	 * @param int $mode <p>属性に割り当てるモード。</p>
	 * @return bool
	 */
	public function attr_set(int $attr, int $mode): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プリペアドステートメントのパラメータに変数をバインドする
	 * @link http://php.net/manual/ja/mysqli-stmt.bind-param.php
	 * @param string $types <p>
	 * ひとつあるいは複数の文字で、対応するバインド変数の型を表します。
	 * <table>
	 * 型指定文字
	 * <tr valign="top">
	 * <td>文字</td>
	 * <td>説明</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>i</td>
	 * <td>対応する変数の型は integer です。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>d</td>
	 * <td>対応する変数の型は double です。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>s</td>
	 * <td>対応する変数の型は string です。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>b</td>
	 * <td>対応する変数の型は blob で、複数のパケットに分割して送信されます。</td>
	 * </tr>
	 * </table>
	 * </p>
	 * @param mixed $var1 <p>
	 * 変数の数。文字列
	 * <i>types</i>
	 * の長さは、ステートメント中のパラメータの数と一致する必要があります。
	 * </p>
	 * @param mixed $_ [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function bind_param(string $types, &$var1, &$_ = null): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 結果を保存するため、プリペアドステートメントに変数をバインドする
	 * @link http://php.net/manual/ja/mysqli-stmt.bind-result.php
	 * @param mixed $var1 <p>
	 * バインドする変数。
	 * </p>
	 * @param mixed $_ [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function bind_result(&$var1, &$_ = null): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プリペアドステートメントを閉じる
	 * @link http://php.net/manual/ja/mysqli-stmt.close.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function close(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ステートメントの結果セットの任意の行に移動する
	 * @link http://php.net/manual/ja/mysqli-stmt.data-seek.php
	 * @param int $offset <p>
	 * ゼロから行の総数 - 1（0..<b>mysqli_stmt_num_rows</b> - 1）
	 * までの間である必要があります。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function data_seek(int $offset): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プリペアドクエリを実行する
	 * @link http://php.net/manual/ja/mysqli-stmt.execute.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function execute(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プリペアドステートメントから結果を取得し、バインド変数に格納する
	 * @link http://php.net/manual/ja/mysqli-stmt.fetch.php
	 * @return bool
	 */
	public function fetch(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * SHOW WARNINGS の結果を取得する
	 * @link http://php.net/manual/ja/mysqli-stmt.get-warnings.php
	 * @param mysqli_stmt $stmt
	 * @return object
	 */
	public function get_warnings(mysqli_stmt $stmt) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プリペアドステートメントから結果セットのメタデータを返す
	 * @link http://php.net/manual/ja/mysqli-stmt.result-metadata.php
	 * @return mysqli_result 結果のオブジェクトを返します。エラー時には <b>FALSE</b> を返します。
	 */
	public function result_metadata(): mysqli_result {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 複数クエリで、次の結果が存在するかどうかを調べる
	 * @link http://php.net/manual/ja/mysqli-stmt.more-results.php
	 * @return bool 結果がさらに存在する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function more_results(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 複数クエリから、次の結果を読み込む
	 * @link http://php.net/manual/ja/mysqli-stmt.next-result.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function next_result(): bool {}

	public function num_rows() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * データをブロックで送信する
	 * @link http://php.net/manual/ja/mysqli-stmt.send-long-data.php
	 * @param int $param_nr <p>
	 * データに関連付けるパラメータを示します。
	 * パラメータの番号は 0 から始まります。
	 * </p>
	 * @param string $data <p>
	 * 送信するデータを含む文字列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function send_long_data(int $param_nr, string $data): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したステートメントハンドルの結果を格納したメモリを開放する
	 * @link http://php.net/manual/ja/mysqli-stmt.free-result.php
	 * @return void 値を返しません。
	 */
	public function free_result(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プリペアドステートメントをリセットする
	 * @link http://php.net/manual/ja/mysqli-stmt.reset.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function reset(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * SQL ステートメントを実行するために準備する
	 * @link http://php.net/manual/ja/mysqli-stmt.prepare.php
	 * @param string $query <p>
	 * クエリを表す文字列。単一の SQL 文で構成されている必要があります。
	 * </p>
	 * <p>
	 * ひとつまたは複数のパラメータを SQL 文に含めることができます。
	 * そのためには、適切な位置にクエスチョンマーク
	 * (?) を埋め込みます。
	 * </p>
	 * <p>
	 * ステートメントの最後にセミコロンや \g
	 * を追加してはいけません。
	 * </p>
	 * <p>
	 * パラメータのマーカは、それが SQL 文の適切な位置にある場合のみ
	 * 有効です。例えば INSERT 文の VALUES() リストの中
	 * (行に登録するカラム値を指定する) や
	 * WHERE 句で列のデータと比較する値などが適切な位置の例です。
	 * </p>
	 * <p>
	 * しかし、識別子 (テーブルやカラムの名前) や SELECT 文で選択する
	 * 項目の名前に指定したり、(等号 = のような)
	 * 二項演算子の両側にパラメータを指定したりすることはできません。
	 * 後者の制限は、パラメータの型が判断できなくなることによるものです。
	 * また、パラメータのマーカを NULL と比較して
	 * ? IS NULL のようにすることもできません。
	 * 一般に、パラメータが使用可能なのはデータ操作言語 (DML)
	 * ステートメントであり、データ定義言語 (DDL) ステートメントでは
	 * 使用できません。
	 * </p>
	 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function prepare(string $query) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プリペアドステートメントから結果を転送する
	 * @link http://php.net/manual/ja/mysqli-stmt.store-result.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function store_result(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * プリペアード・ステートメントから結果セットを取得
	 * @link http://php.net/manual/ja/mysqli-stmt.get-result.php
	 * @return mysqli_result SELECT クエリが成功した場合はその結果セットを返します。
	 * その他の DML クエリを実行した場合や失敗した場合は <b>FALSE</b> を返します。
	 * その他の DML クエリを実行したのかクエリの実行に失敗したのかを区別するには、
	 * <b>mysqli_errno</b> 関数を使います。
	 */
	public function get_result(): mysqli_result {}

}

/**
 * (PHP 5, PHP 7)<br/>
 * 直前の MySQL の操作で変更された行の数を得る
 * @link http://php.net/manual/ja/mysqli.affected-rows.php
 * @param mysqli $link
 * @return int 正の整数が返された場合、それは変更された行数かあるいは取得された行数を
 * 示します。ゼロが返された場合、それは UPDATE 文でレコードが更新されなかったか
 * WHERE 条件に当てはまる行がなかった、またはクエリが実行されなかったことを
 * 示します。-1 は、クエリがエラーを返したことを示します。
 * </p>
 * <p>
 * 変更された行数が整数型の最大値 (<b>PHP_INT_MAX</b>) をこえた場合、
 * 結果の行数は文字列として返されます。
 */
function mysqli_affected_rows(mysqli $link): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * データベース更新の自動コミットをオンまたはオフにする
 * @link http://php.net/manual/ja/mysqli.autocommit.php
 * @param mysqli $link
 * @param bool $mode <p>
 * 自動コミットを有効にするかどうか。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_autocommit(mysqli $link, bool $mode): bool {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * トランザクションを開始する
 * @link http://php.net/manual/ja/mysqli.begin-transaction.php
 * @param int $flags [optional] <p>
 * 以下のフラグが使えます。
 * </p>
 * <p>
 * <b>MYSQLI_TRANS_START_READ_ONLY</b>:
 * "START TRANSACTION READ ONLY" でトランザクションを開始します。
 * </p>
 * @param string $name [optional] <p>
 * トランザクションのセーブポイント名。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_begin_transaction(int $flags = null, string $name = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 指定されたデータベース接続のユーザー名を変更する
 * @link http://php.net/manual/ja/mysqli.change-user.php
 * @param mysqli $link
 * @param string $user <p>
 * MySQL のユーザー名。
 * </p>
 * @param string $password <p>
 * MySQL のパスワード。
 * </p>
 * @param string $database <p>
 * 変更するデータベース。
 * </p>
 * <p>
 * 引数には <b>NULL</b> 値を渡すこともできます。
 * その場合ユーザーの変更だけでデータベースの選択はされません。
 * そのようなケースでデータベースを選択したい場合には
 * <b>mysqli_select_db</b> 関数を使用してください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_change_user(mysqli $link, string $user, string $password, string $database): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * データベース接続のデフォルトの文字コードセットを返す
 * @link http://php.net/manual/ja/mysqli.character-set-name.php
 * @param mysqli $link
 * @return string 現在の接続のデフォルト文字セットを返します。
 */
function mysqli_character_set_name(mysqli $link): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 事前にオープンしているデータベース接続を閉じる
 * @link http://php.net/manual/ja/mysqli.close.php
 * @param mysqli $link
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_close(mysqli $link): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 現在のトランザクションをコミットする
 * @link http://php.net/manual/ja/mysqli.commit.php
 * @param mysqli $link
 * @param int $flags [optional] <p>
 * 定数 <b>MYSQLI_TRANS_COR_*</b> のビットマスク。
 * </p>
 * @param string $name [optional] <p>
 * 指定した場合は、COMMIT/*name* / を実行します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_commit(mysqli $link, int $flags = null, string $name = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * <b>mysqli::__construct</b> のエイリアス
 * @link http://php.net/manual/ja/function.mysqli-connect.php
 * @param $host [optional]
 * @param $user [optional]
 * @param $password [optional]
 * @param $database [optional]
 * @param $port [optional]
 * @param $socket [optional]
 */
function mysqli_connect($host, $user, $password, $database, $port, $socket) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近の接続コールに関するエラーコードを返す
 * @link http://php.net/manual/ja/mysqli.connect-errno.php
 * @return int 直近の <b>mysqli_connect</b> コールが失敗した場合、
 * エラーコードを返します。ゼロは、何もエラーが発生しなかったことを示します。
 */
function mysqli_connect_errno(): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近の接続エラーの内容を文字列で返す
 * @link http://php.net/manual/ja/mysqli.connect-error.php
 * @return string エラーの内容を表す文字列を返します。エラーが発生しなかった場合は
 * <b>NULL</b> を返します。
 */
function mysqli_connect_error(): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果の任意の行にポインタを移動する
 * @link http://php.net/manual/ja/mysqli-result.data-seek.php
 * @param mysqli_result $result
 * @param int $offset <p>
 * フィールドオフセット。ゼロから全行数 - 1 までの間
 * （0..<b>mysqli_num_rows</b> - 1）である必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_data_seek(mysqli_result $result, int $offset): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * デバッグ情報をログに出力する
 * @link http://php.net/manual/ja/mysqli.dump-debug-info.php
 * @param mysqli $link
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_dump_debug_info(mysqli $link): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * デバッグ操作を行う
 * @link http://php.net/manual/ja/mysqli.debug.php
 * @param string $message <p>
 * 実行するデバッグ操作を表す文字列。
 * </p>
 * @return bool <b>TRUE</b>.
 */
function mysqli_debug(string $message): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近の関数コールによるエラーコードを返す
 * @link http://php.net/manual/ja/mysqli.errno.php
 * @param mysqli $link
 * @return int 直近のコールが失敗した場合、エラーコードを返します。
 * ゼロは、何もエラーが発生しなかったことを示します。
 */
function mysqli_errno(mysqli $link): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近のエラーの内容を文字列で返す
 * @link http://php.net/manual/ja/mysqli.error.php
 * @param mysqli $link
 * @return string エラーの内容を表す文字列を返します。エラーが発生しなかった場合は空文字列を返します。
 */
function mysqli_error(mysqli $link): string {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * 直近で実行したコマンドからのエラーの一覧を返す
 * @link http://php.net/manual/ja/mysqli.error-list.php
 * @param mysqli $link
 * @return array エラーの一覧を返します。個々のエラーは連想配列形式で、
 * errno、error および sqlstate のキーを含みます。
 */
function mysqli_error_list(mysqli $link): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * プリペアドクエリを実行する
 * @link http://php.net/manual/ja/mysqli-stmt.execute.php
 * @param mysqli_stmt $stmt
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_stmt_execute(mysqli_stmt $stmt): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * <b>mysqli_stmt_execute</b> のエイリアス
 * @link http://php.net/manual/ja/function.mysqli-execute.php
 * @param $stmt
 */
function mysqli_execute($stmt) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果セットの次のフィールドを返す
 * @link http://php.net/manual/ja/mysqli-result.fetch-field.php
 * @param mysqli_result $result
 * @return object フィールド定義情報を含むオブジェクトを返します。もし
 * フィールドの情報が取得できない場合は、<b>FALSE</b> を返します。
 * </p>
 * <p>
 * <table>
 * オブジェクトのプロパティ
 * <tr valign="top">
 * <td>プロパティ</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>カラムの名前。</td>
 * </tr>
 * <tr valign="top">
 * <td>orgname</td>
 * <td>もしエイリアスが指定されている場合の、本来の名前。</td>
 * </tr>
 * <tr valign="top">
 * <td>table</td>
 * <td>フィールドが属するテーブルの名前。</td>
 * </tr>
 * <tr valign="top">
 * <td>orgtable</td>
 * <td>もしエイリアスが指定されている場合の、本来のテーブル名。</td>
 * </tr>
 * <tr valign="top">
 * <td>def</td>
 * <td>デフォルト値のために予約済。現在は常に ""。</td>
 * </tr>
 * <tr valign="top">
 * <td>db</td>
 * <td>データベース (PHP 5.3.6 以降)。</td>
 * </tr>
 * <tr valign="top">
 * <td>catalog</td>
 * <td>カタログ名。常に "def" (PHP 5.3.6 以降)。</td>
 * </tr>
 * <tr valign="top">
 * <td>max_length</td>
 * <td>結果セットにおけるフィールドの最大幅。</td>
 * </tr>
 * <tr valign="top">
 * <td>length</td>
 * <td>テーブルの定義で指定されているフィールド幅。</td>
 * </tr>
 * <tr valign="top">
 * <td>charsetnr</td>
 * <td>フィールドの文字セット番号。</td>
 * </tr>
 * <tr valign="top">
 * <td>flags</td>
 * <td>フィールドのビットフラグを整数型で表す。</td>
 * </tr>
 * <tr valign="top">
 * <td>type</td>
 * <td>フィールドのデータ型。</td>
 * </tr>
 * <tr valign="top">
 * <td>decimals</td>
 * <td>フィールドの桁数（integer 型のフィールド）。</td>
 * </tr>
 * </table>
 */
function mysqli_fetch_field(mysqli_result $result) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果セットのフィールド情報をオブジェクトの配列で返す
 * @link http://php.net/manual/ja/mysqli-result.fetch-fields.php
 * @param mysqli_result $result
 * @return array フィールド定義情報を含むオブジェクトの配列を返します。もし
 * フィールドの情報が取得できない場合は、<b>FALSE</b> を返します。
 * </p>
 * <p>
 * <table>
 * オブジェクトのプロパティ
 * <tr valign="top">
 * <td>プロパティ</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>カラムの名前。</td>
 * </tr>
 * <tr valign="top">
 * <td>orgname</td>
 * <td>もしエイリアスが指定されている場合の、本来の名前。</td>
 * </tr>
 * <tr valign="top">
 * <td>table</td>
 * <td>フィールドが属するテーブルの名前。</td>
 * </tr>
 * <tr valign="top">
 * <td>orgtable</td>
 * <td>もしエイリアスが指定されている場合の、本来のテーブル名。</td>
 * </tr>
 * <tr valign="top">
 * <td>max_length</td>
 * <td>結果セットにおけるフィールドの最大幅。</td>
 * </tr>
 * <tr valign="top">
 * <td>length</td>
 * <td>
 * テーブルの定義で指定されているフィールド幅 (バイト単位)。
 * この値 (バイト数) は、利用している文字セットによってはテーブル定義の値 (文字数) と異なるかもしれないことに注意しましょう。
 * たとえば utf8 の場合は一文字あたり3バイトなので、varchar(10) の長さは30になります。
 * 一方、同じ定義でも latin1 の場合の長さは10になります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>charsetnr</td>
 * <td>フィールドの文字セット番号 (id)。</td>
 * </tr>
 * <tr valign="top">
 * <td>flags</td>
 * <td>フィールドのビットフラグを整数型で表す。</td>
 * </tr>
 * <tr valign="top">
 * <td>type</td>
 * <td>フィールドのデータ型。</td>
 * </tr>
 * <tr valign="top">
 * <td>decimals</td>
 * <td>フィールドの桁数（integer 型のフィールド）。</td>
 * </tr>
 * </table>
 */
function mysqli_fetch_fields(mysqli_result $result): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * 単一のフィールドのメタデータを取得する
 * @link http://php.net/manual/ja/mysqli-result.fetch-field-direct.php
 * @param mysqli_result $result
 * @param int $fieldnr <p>
 * フィールド番号。この値は
 * 0 から フィールド数 - 1
 * までの範囲でなければなりません。
 * </p>
 * @return object フィールド定義情報を含むオブジェクトを返します。もし、指定した
 * fieldnr のフィールドの情報が取得できない場合は
 * <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <table>
 * オブジェクトの属性
 * <tr valign="top">
 * <td>属性</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>カラムの名前。</td>
 * </tr>
 * <tr valign="top">
 * <td>orgname</td>
 * <td>もしエイリアスが指定されている場合の、本来の名前。</td>
 * </tr>
 * <tr valign="top">
 * <td>table</td>
 * <td>フィールドが属するテーブルの名前。</td>
 * </tr>
 * <tr valign="top">
 * <td>orgtable</td>
 * <td>もしエイリアスが指定されている場合の、本来のテーブル名。</td>
 * </tr>
 * <tr valign="top">
 * <td>def</td>
 * <td>フィールドのデフォルト値。文字列形式。</td>
 * </tr>
 * <tr valign="top">
 * <td>max_length</td>
 * <td>結果セットにおけるフィールドの最大幅。</td>
 * </tr>
 * <tr valign="top">
 * <td>length</td>
 * <td>テーブルの定義で指定されているフィールド幅。</td>
 * </tr>
 * <tr valign="top">
 * <td>charsetnr</td>
 * <td>フィールドの文字セット番号。</td>
 * </tr>
 * <tr valign="top">
 * <td>flags</td>
 * <td>フィールドのビットフラグを整数型で表す。</td>
 * </tr>
 * <tr valign="top">
 * <td>type</td>
 * <td>フィールドのデータ型。</td>
 * </tr>
 * <tr valign="top">
 * <td>decimals</td>
 * <td>フィールドの桁数（数値型のフィールド）。</td>
 * </tr>
 * </table>
 */
function mysqli_fetch_field_direct(mysqli_result $result, int $fieldnr) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果セットにおける現在の行のカラムの長さを返す
 * @link http://php.net/manual/ja/mysqli-result.lengths.php
 * @param mysqli_result $result
 * @return array 各カラムのサイズ（終端の null 文字は含みません）を表す整数の配列を
 * 返します。エラー時には <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <b>mysqli_fetch_lengths</b> は、結果セットの現在の行に
 * ついてのみ有効です。mysqli_fetch_row/array/object をコールする前、あるいは
 * 結果のすべての行を取得した後にこの関数をコールすると、<b>FALSE</b>
 * を返します。
 */
function mysqli_fetch_lengths(mysqli_result $result): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 結果のすべての行を連想配列・数値添字配列あるいはその両方の形式で取得する
 * @link http://php.net/manual/ja/mysqli-result.fetch-all.php
 * @param mysqli_result $result
 * @param int $resulttype [optional] <p>
 * このオプションは、
 * 結果の行データから返す配列の型を指定します。ここで指定可能な値は
 * 定数 <b>MYSQLI_ASSOC</b>、
 * <b>MYSQLI_NUM</b> あるいは <b>MYSQLI_BOTH</b>.
 * のいずれかです。
 * </p>
 * @return mixed 結果の行を含む連想配列あるいは数値添字配列の配列を返します。
 */
function mysqli_fetch_all(mysqli_result $result, int $resulttype = MYSQLI_NUM) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果の行を連想配列・数値添字配列あるいはその両方の形式で取得する
 * @link http://php.net/manual/ja/mysqli-result.fetch-array.php
 * @param mysqli_result $result
 * @param int $resulttype [optional] <p>
 * このオプションは、
 * 結果の行データから返す配列の型を指定します。ここで指定可能な値は
 * 定数 <b>MYSQLI_ASSOC</b>、
 * <b>MYSQLI_NUM</b> あるいは <b>MYSQLI_BOTH</b>.
 * のいずれかです。
 * </p>
 * <p>
 * <b>MYSQLI_ASSOC</b> 定数を指定すると、この関数は
 * <b>mysqli_fetch_assoc</b> と同じ結果を返します。一方
 * <b>MYSQLI_NUM</b> を指定すると、<b>mysqli_fetch_row</b>
 * 関数と同じ結果となります。最後の <b>MYSQLI_BOTH</b> を指定すると、
 * ひとつの配列にこれら両方の属性を含めます。
 * </p>
 * @return mixed 取得した行に対応する文字列の配列を返します。結果セットにもう行がない場合には
 * <b>NULL</b> を返します。
 */
function mysqli_fetch_array(mysqli_result $result, int $resulttype = MYSQLI_BOTH) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果の行を連想配列で取得する
 * @link http://php.net/manual/ja/mysqli-result.fetch-assoc.php
 * @param mysqli_result $result
 * @return array 取得した行に対応する文字列の連想配列を返します。
 * 連想配列の各キーが、結果セットのカラムを表します。
 * 結果セットにもう行がない場合には <b>NULL</b> を返します。
 * </p>
 * <p>
 * もし 2 つ以上のカラムが同じフィールド名であった場合は、最後に現れた
 * カラムが優先され、以前のデータを上書きします。同名の複数のカラムに
 * アクセスする場合、<b>mysqli_fetch_row</b> を用いて
 * 数値添字配列を使用するか、あるいはカラム名にエイリアスを指定する
 * 必要があります。
 */
function mysqli_fetch_assoc(mysqli_result $result): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果セットの現在の行をオブジェクトとして返す
 * @link http://php.net/manual/ja/mysqli-result.fetch-object.php
 * @param mysqli_result $result
 * @param string $class_name [optional] <p>
 * インスタンス化してプロパティを設定後に返すクラスの名前。
 * 省略した場合は <b>stdClass</b> オブジェクトを返します。
 * </p>
 * @param array $params [optional] <p>
 * オプションのパラメータの配列で、
 * <i>class_name</i> オブジェクトのコンストラクタに渡します。
 * </p>
 * @return object 取得した行に対応する文字列プロパティを有するオブジェクトを返します。
 * もし結果セットにもう行がない場合には <b>NULL</b> を返します。
 */
function mysqli_fetch_object(mysqli_result $result, string $class_name = "stdClass", array $params = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果の行を数値添字配列で取得する
 * @link http://php.net/manual/ja/mysqli-result.fetch-row.php
 * @param mysqli_result $result
 * @return mixed <b>mysqli_fetch_row</b> は取得した行に対応する文字列の配列を
 * 返します。もしもう行がない場合には <b>NULL</b> を返します。
 */
function mysqli_fetch_row(mysqli_result $result) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近のクエリのカラムの数を返す
 * @link http://php.net/manual/ja/mysqli.field-count.php
 * @param mysqli $link
 * @return int 結果セットのフィールド数を整数で返します。
 */
function mysqli_field_count(mysqli $link): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果ポインタを、指定したフィールドオフセットに設定する
 * @link http://php.net/manual/ja/mysqli-result.field-seek.php
 * @param mysqli_result $result
 * @param int $fieldnr <p>
 * フィールド番号。これは
 * 0 から フィールド数 - 1
 * までの範囲でなければなりません。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_field_seek(mysqli_result $result, int $fieldnr): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果ポインタにおける現在のフィールドオフセットを取得する
 * @link http://php.net/manual/ja/mysqli-result.current-field.php
 * @param mysqli_result $result
 * @return int フィールドカーソルの現在のオフセットを返します。
 */
function mysqli_field_tell(mysqli_result $result): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果に関連付けられたメモリを開放する
 * @link http://php.net/manual/ja/mysqli-result.free.php
 * @param $result
 * @return void 値を返しません。
 */
function mysqli_free_result($result): void {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * クライアント接続に関する統計情報を返す
 * @link http://php.net/manual/ja/mysqli.get-connection-stats.php
 * @param mysqli $link
 * @return array 成功した場合に接続の統計情報を含む配列、それ以外の場合に <b>FALSE</b> を返します。
 */
function mysqli_get_connection_stats(mysqli $link): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * クライアントのプロセス単位の統計情報を返す
 * @link http://php.net/manual/ja/mysqli.get-client-stats.php
 * @return array 成功した場合にクライアントの統計情報を含む配列、それ以外の場合に <b>FALSE</b> を返します。
 */
function mysqli_get_client_stats(): array {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 文字セットオブジェクトを返す
 * @link http://php.net/manual/ja/mysqli.get-charset.php
 * @param mysqli $link
 * @return object この関数は、以下のプロパティを持つ文字セットオブジェクトを返します。
 * <i>charset</i>
 * <p>文字セット名</p>
 * <i>collation</i>
 * <p>照合規則名</p>
 * <i>dir</i>
 * <p>文字セットの設定を読み込むディレクトリ。組み込みの文字セットについては ""</p>
 * <i>min_length</i>
 * <p>最小の文字の長さ (バイト数)</p>
 * <i>max_length</i>
 * <p>最大の文字の長さ (バイト数)</p>
 * <i>number</i>
 * <p>内部文字セット番号</p>
 * <i>state</i>
 * <p>文字セットの状態</p>
 */
function mysqli_get_charset(mysqli $link) {}

/**
 * (PHP 5, PHP 7)<br/>
 * MySQL クライアント情報を取得する
 * @link http://php.net/manual/ja/mysqli.client-info.php
 * @param mysqli $link
 * @return string MySQL クライアントライブラリのバージョンを表す文字列を返します。
 */
function mysqli_get_client_info(mysqli $link): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * MySQL クライアントのバージョンを数値で返す
 * @link http://php.net/manual/ja/mysqli.client-version.php
 * @param mysqli $link
 * @return int MySQL クライアントライブラリのバージョンを表す整数値を返します。書式は
 * main_version*10000 + minor_version *100 + sub_version
 * で、たとえば 4.1.0 の場合は 40100 となります。
 * </p>
 * <p>
 * これは、今使っているバージョンのクライアントライブラリで
 * 何らかの機能が使えるかどうかを手早く調べるときに便利です。
 */
function mysqli_get_client_version(mysqli $link): int {}

function mysqli_get_links_stats() {}

/**
 * (PHP 5, PHP 7)<br/>
 * 使用している接続の型を文字列で返す
 * @link http://php.net/manual/ja/mysqli.get-host-info.php
 * @param mysqli $link
 * @return string サーバーのホスト名と接続の型を文字列で返します。
 */
function mysqli_get_host_info(mysqli $link): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 使用している MySQL プロトコルのバージョンを返す
 * @link http://php.net/manual/ja/mysqli.get-proto-info.php
 * @param mysqli $link
 * @return int プロトコルバージョンを整数値で返します。
 */
function mysqli_get_proto_info(mysqli $link): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * MySQL サーバーのバージョンを返す
 * @link http://php.net/manual/ja/mysqli.get-server-info.php
 * @param mysqli $link
 * @return string サーバーのバージョンを文字列で返します。
 */
function mysqli_get_server_info(mysqli $link): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * MySQL サーバーのバージョンを整数値で返す
 * @link http://php.net/manual/ja/mysqli.get-server-version.php
 * @param mysqli $link
 * @return int サーバーのバージョンを整数値で返します。
 * </p>
 * <p>
 * バージョン番号の書式は以下のようになります。
 * main_version * 10000 + minor_version * 100 + sub_version
 * (つまり、バージョン 4.1.0 は 40100 となります)
 */
function mysqli_get_server_version(mysqli $link): int {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * SHOW WARNINGS の結果を取得する
 * @link http://php.net/manual/ja/mysqli.get-warnings.php
 * @param mysqli $link
 * @return mysqli_warning
 */
function mysqli_get_warnings(mysqli $link): mysqli_warning {}

/**
 * (PHP 5, PHP 7)<br/>
 * MySQLi を初期化し、mysqli_real_connect() で使用するリソースを返す
 * @link http://php.net/manual/ja/mysqli.init.php
 * @return mysqli オブジェクトを返します。
 */
function mysqli_init(): mysqli {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近に実行されたクエリの情報を取得する
 * @link http://php.net/manual/ja/mysqli.info.php
 * @param mysqli $link
 * @return string 直近に実行されたクエリについての追加情報を文字列で返します。
 */
function mysqli_info(mysqli $link): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近のクエリで使用した自動生成の ID を返す
 * @link http://php.net/manual/ja/mysqli.insert-id.php
 * @param mysqli $link
 * @return mixed 直前のクエリで更新された AUTO_INCREMENT
 * フィールドの値を返します。接続での直前のクエリがない場合や
 * クエリが AUTO_INCREMENT の値を更新しなかった場合は
 * ゼロを返します。
 * </p>
 * <p>
 * もし数値が int の最大値をこえた場合、<b>mysqli_insert_id</b>
 * は文字列で結果を返します。
 */
function mysqli_insert_id(mysqli $link) {}

/**
 * (PHP 5, PHP 7)<br/>
 * サーバーに MySQL スレッドの停止を問い合わせる
 * @link http://php.net/manual/ja/mysqli.kill.php
 * @param mysqli $link
 * @param int $processid
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_kill(mysqli $link, int $processid): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * マルチクエリからの結果がまだ残っているかどうかを調べる
 * @link http://php.net/manual/ja/mysqli.more-results.php
 * @param mysqli $link
 * @return bool 直近の <b>mysqli_multi_query</b>
 * の呼び出しで 1 件以上の結果セットが存在する場合に <b>TRUE</b>、それ以外の場合に
 * <b>FALSE</b> を返します。
 */
function mysqli_more_results(mysqli $link): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * データベース上でクエリを実行する
 * @link http://php.net/manual/ja/mysqli.multi-query.php
 * @param mysqli $link
 * @param string $query <p>
 * クエリを表す文字列。
 * </p>
 * <p>
 * クエリ内のデータは 適切にエスケープ
 * する必要があります。
 * </p>
 * @return bool 最初のステートメントが失敗した場合にのみ <b>FALSE</b> を返します。
 * その他のステートメントのエラーを取得するには、まず
 * <b>mysqli_next_result</b> をコールする必要があります。
 */
function mysqli_multi_query(mysqli $link, string $query): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * multi_query の、次の結果を準備する
 * @link http://php.net/manual/ja/mysqli.next-result.php
 * @param mysqli $link
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_next_result(mysqli $link): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果のフィールド数を取得する
 * @link http://php.net/manual/ja/mysqli-result.field-count.php
 * @param mysqli_result $result
 * @return int 結果セットのフィールド数を返します。
 */
function mysqli_num_fields(mysqli_result $result): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果の行数を取得する
 * @link http://php.net/manual/ja/mysqli-result.num-rows.php
 * @param mysqli_result $result
 * @return int 結果セットの行数を返します。
 * </p>
 * <p>
 * 行数が <b>PHP_INT_MAX</b> をこえる場合、行数は文字列で返されます。
 */
function mysqli_num_rows(mysqli_result $result): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * オプションを設定する
 * @link http://php.net/manual/ja/mysqli.options.php
 * @param mysqli $link
 * @param int $option <p>
 * 指定するオプション。以下の値のいずれかです。
 * <table>
 * 使用可能なオプション
 * <tr valign="top">
 * <td>名前</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_OPT_CONNECT_TIMEOUT</b></td>
 * <td>接続のタイムアウト秒数 (PHP 5.3.1 以降、Windows 上での TCP/IP 接続をサポートします)。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_OPT_LOCAL_INFILE</b></td>
 * <td>LOAD LOCAL INFILE の使用可/不可。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_INIT_COMMAND</b></td>
 * <td>MySQL サーバーへの接続後に実行するコマンド。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_READ_DEFAULT_FILE</b></td>
 * <td>
 * my.cnf の代わりに、指定した名前のファイルから
 * 設定を読み込みます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_READ_DEFAULT_GROUP</b></td>
 * <td>
 * my.cnf の指定した名前のグループ、あるいは
 * <b>MYSQL_READ_DEFAULT_FILE</b> で指定したファイルから
 * 設定を読み込みます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_SERVER_PUBLIC_KEY</b></td>
 * <td>
 * RSA 公開鍵ファイル。SHA-256 ベースの認証で使います。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_OPT_NET_CMD_BUFFER_SIZE</b></td>
 * <td>
 * 内部のコマンド／ネットワークバッファのサイズ。
 * mysqlnd でのみ有効です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_OPT_NET_READ_BUFFER_SIZE</b></td>
 * <td>
 * MySQL コマンドパケットのボディを読み込むときの、読み込みチャンクの最大バイト数。
 * mysqlnd でのみ有効です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_OPT_INT_AND_FLOAT_NATIVE</b></td>
 * <td>
 * integer 型と float 型のカラムを PHP の数値に変換します。
 * mysqlnd でのみ有効です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_OPT_SSL_VERIFY_SERVER_CERT</b></td>
 * <td>
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param mixed $value <p>
 * オプションに設定する値。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_options(mysqli $link, int $option, $value): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * サーバーとの接続をチェックし、もし切断されている場合は再接続を試みる
 * @link http://php.net/manual/ja/mysqli.ping.php
 * @param mysqli $link
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_ping(mysqli $link): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 接続を問い合わせる
 * @link http://php.net/manual/ja/mysqli.poll.php
 * @param array $read <p>
 * 読み込める結果が残っている接続のリスト。
 * </p>
 * @param array $error <p>
 * クエリが失敗した、あるいは接続が切断されたなどのエラーが発生した接続のリスト。
 * </p>
 * @param array $reject <p>
 * 関数から結果を取得できるような非同期クエリが実行されていないという理由で、
 * 拒否された接続のリスト。
 * </p>
 * @param int $sec <p>
 * 待ち続ける秒数。非負の数でなければなりません。
 * </p>
 * @param int $usec [optional] <p>
 * 待ち続けるマイクロ秒数。非負の数でなければなりません。
 * </p>
 * @return int 成功した場合に使用できる接続の数、それ以外の場合に <b>FALSE</b> を返します。
 */
function mysqli_poll(array &$read, array &$error, array &$reject, int $sec, int $usec = null): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 実行するための SQL ステートメントを準備する
 * @link http://php.net/manual/ja/mysqli.prepare.php
 * @param mysqli $link
 * @param string $query <p>
 * クエリを表す文字列。
 * </p>
 * <p>
 * ステートメントの最後にセミコロンや \g
 * を追加してはいけません。
 * </p>
 * <p>
 * <i>query</i> にはひとつまたは複数のパラメータを
 * 含めることが可能です。そのためには、適切な位置にクエスチョンマーク
 * (?) を埋め込みます。
 * </p>
 * <p>
 * パラメータのマーカは、それが SQL 文の適切な位置にある場合のみ有効です。
 * 例えば INSERT 文の
 * VALUES() リストの中 (行に登録するカラム値を指定する)
 * や WHERE 句で列のデータと比較する値などが
 * 適切な位置の例です。
 * </p>
 * <p>
 * しかし、識別子 (テーブルやカラムの名前) や SELECT
 * 文で選択する項目の名前に指定したり、
 * (等号 = のような)
 * 二項演算子の両側にパラメータを指定したりすることはできません。
 * 後者の制限は、パラメータの型が判断できなくなることによるものです。
 * また、パラメータのマーカを NULL と比較して
 * ? IS NULL のようにすることもできません。
 * 一般に、パラメータが使用可能なのはデータ操作言語 (DML)
 * ステートメントであり、データ定義言語 (DDL)
 * ステートメントでは使用できません。
 * </p>
 * @return mysqli_stmt <b>mysqli_prepare</b> はステートメントオブジェクトを返します。
 * エラー時には <b>FALSE</b> を返します。
 */
function mysqli_prepare(mysqli $link, string $query): mysqli_stmt {}

/**
 * (PHP 5, PHP 7)<br/>
 * mysqli_driver->report_mode のエイリアス
 * @link http://php.net/manual/ja/function.mysqli-report.php
 * @param $flags
 */
function mysqli_report($flags) {}

/**
 * (PHP 5, PHP 7)<br/>
 * データベース上でクエリを実行する
 * @link http://php.net/manual/ja/mysqli.query.php
 * @param mysqli $link
 * @param string $query <p>
 * クエリ文字列。
 * </p>
 * <p>
 * クエリ内のデータは 適切にエスケープ.
 * する必要があります。
 * </p>
 * @param int $resultmode [optional] <p>
 * 定数 <b>MYSQLI_USE_RESULT</b> あるいは
 * <b>MYSQLI_STORE_RESULT</b> で、望みの挙動を指定します。
 * デフォルトでは <b>MYSQLI_STORE_RESULT</b>
 * を使用します。
 * </p>
 * <p>
 * MYSQLI_USE_RESULT を使用すると、
 * <b>mysqli_free_result</b> をコールするまでは
 * それ以降のコールはすべて Commands out of sync
 * エラーを返します。
 * </p>
 * <p>
 * <b>MYSQLI_ASYNC</b> (mysqlnd で使用可能)
 * を使用すると、クエリを非同期実行できるようになります。
 * このクエリの結果を取得するには
 * <b>mysqli_poll</b> を使用します。
 * </p>
 * @return mixed 失敗した場合に <b>FALSE</b> を返します。
 * SELECT, SHOW, DESCRIBE あるいは
 * EXPLAIN が成功した場合は、<b>mysqli_query</b>
 * は <b>mysqli_result</b> オブジェクトを返します。それ以外のクエリが成功した場合は、
 * <b>mysqli_query</b> は <b>TRUE</b> を返します。
 */
function mysqli_query(mysqli $link, string $query, int $resultmode = MYSQLI_STORE_RESULT) {}

/**
 * (PHP 5, PHP 7)<br/>
 * mysql サーバーとの接続をオープンする
 * @link http://php.net/manual/ja/mysqli.real-connect.php
 * @param mysqli $link
 * @param string $host [optional] <p>
 * ホスト名あるいは IP アドレス。<b>NULL</b> 値あるいは文字列
 * "localhost" をこのパラメータに指定すると、ローカルホストを使用します。
 * 使用可能な場合は、TCP/IP プロトコルよりもパイプを優先して使用します。
 * </p>
 * @param string $username [optional] <p>
 * MySQL ユーザー名。
 * </p>
 * @param string $passwd [optional] <p>
 * <b>NULL</b> を指定した場合は、MySQL サーバーは
 * パスワードを持たないユーザーレコードについてのみ認証を試みます。
 * これにより、同一のユーザー名に対して (パスワードが指定されたか
 * 否かによって) 違う権限を与えることができます。
 * </p>
 * @param string $dbname [optional] <p>
 * 指定した場合は、
 * クエリが行われるデフォルトのデータベースとなります。
 * </p>
 * @param int $port [optional] <p>
 * MySQL サーバーに接続する際のポート番号を指定します。
 * </p>
 * @param string $socket [optional] <p>
 * 使用するソケットあるいは名前つきパイプを指定します。
 * </p>
 * <p>
 * <i>socket</i> 引数を指定しても、MySQL サーバーへの
 * 接続時の型を明示的に定義することにはなりません。MySQL サーバーへの
 * 接続方法については <i>host</i> 引数で定義されます。
 * </p>
 * @param int $flags [optional] <p>
 * パラメータ <i>flags</i>
 * で、接続時のさまざまなオプションを設定します。
 * </p>
 * <table>
 * サポートするフラグ
 * <tr valign="top">
 * <td>名前</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_CLIENT_COMPRESS</b></td>
 * <td>圧縮プロトコルを使用します。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_CLIENT_FOUND_ROWS</b></td>
 * <td>変更された行数ではなく、マッチした行数を返します。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_CLIENT_IGNORE_SPACE</b></td>
 * <td>関数名に続く空白文字を許可します。すべての関数名を予約語とします。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_CLIENT_INTERACTIVE</b></td>
 * <td>
 * 接続を閉じるまでのタイムアウト時間として、
 * (wait_timeout のかわりに)
 * interactive_timeout の使用を許可します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_CLIENT_SSL</b></td>
 * <td>SSL (暗号化) を使用します。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT</b></td>
 * <td>
 * <b>MYSQLI_CLIENT_SSL</b> と似ていますが、
 * SSL 証明書の検証は行いません。
 * これは、MySQL Native Driver と MySQL 5.6 以降の組み合わせでのみ使えます。
 * </td>
 * </tr>
 * </table>
 * <p>
 * セキュリティの観点から、PHP では MULTI_STATEMENT
 * フラグはサポートされていません。複数のクエリを実行したい場合は、
 * <b>mysqli_multi_query</b> 関数を使用してください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_real_connect(mysqli $link, string $host = null, string $username = null, string $passwd = null, string $dbname = null, int $port = null, string $socket = null, int $flags = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 接続の現在の文字セットを考慮して、SQL 文で使用する文字列の特殊文字をエスケープする
 * @link http://php.net/manual/ja/mysqli.real-escape-string.php
 * @param string $escapestr <p>
 * エスケープする文字列。
 * </p>
 * <p>
 * エンコードされる文字は NUL (ASCII 0), \n, \r, \, ', ", および
 * Control-Z です。
 * </p>
 * @return string エスケープ済みの文字列を返します。
 */
function mysqli_real_escape_string(string $escapestr): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * SQL クエリを実行する
 * @link http://php.net/manual/ja/mysqli.real-query.php
 * @param mysqli $link
 * @param string $query <p>
 * クエリを表す文字列。
 * </p>
 * <p>
 * クエリ内のデータは 適切にエスケープ.
 * する必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_real_query(mysqli $link, string $query): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 非同期クエリから結果を取得する
 * @link http://php.net/manual/ja/mysqli.reap-async-query.php
 * @param mysqli $link
 * @return mysqli_result 成功した場合に <b>mysqli_result</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function mysqli_reap_async_query(mysqli $link): mysqli_result {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 現在のトランザクションのセーブポイント群から、指定した名前のセーブポイントを削除する
 * @link http://php.net/manual/ja/mysqli.release-savepoint.php
 * @param string $name <p>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_release_savepoint(string $name): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 現在のトランザクションをロールバックする
 * @link http://php.net/manual/ja/mysqli.rollback.php
 * @param mysqli $link
 * @param int $flags [optional] <p>
 * 定数 <b>MYSQLI_TRANS_COR_*</b> のビットマスク。
 * </p>
 * @param string $name [optional] <p>
 * 指定した場合は、ROLLBACK/*name* / を実行します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_rollback(mysqli $link, int $flags = null, string $name = null): bool {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * トランザクションのセーブポイントを設定する
 * @link http://php.net/manual/ja/mysqli.savepoint.php
 * @param string $name <p>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_savepoint(string $name): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * クエリを実行するためのデフォルトのデータベースを選択する
 * @link http://php.net/manual/ja/mysqli.select-db.php
 * @param mysqli $link
 * @param string $dbname <p>
 * データベース名。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_select_db(mysqli $link, string $dbname): bool {}

/**
 * (PHP 5 &gt;= 5.0.5, PHP 7)<br/>
 * クライアントのデフォルト文字セットを設定する
 * @link http://php.net/manual/ja/mysqli.set-charset.php
 * @param mysqli $link
 * @param string $charset <p>
 * デフォルトとして設定する文字セット。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_set_charset(mysqli $link, string $charset): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近に実行されたステートメントで変更・削除・あるいは追加された行の総数を返す
 * @link http://php.net/manual/ja/mysqli-stmt.affected-rows.php
 * @param mysqli_stmt $stmt
 * @return int ゼロより大きい整数の場合、変更した行の数を示します。ゼロの場合は、
 * UPDATE/DELETE で 1 行も更新されなかった・WHERE 句にマッチする行がなかった・
 * あるいはまだクエリが実行されていないのいずれかであることを示します。
 * -1 は、クエリがエラーを返したことを示します。
 * NULL は、関数に無効な引数が渡されたことを示します。
 * </p>
 * <p>
 * 変更された行の数が PHP の int 型の最大値をこえる場合は、変更された
 * 行の数は文字列として返されます。
 */
function mysqli_stmt_affected_rows(mysqli_stmt $stmt): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * ステートメントの属性の現在の値を取得する
 * @link http://php.net/manual/ja/mysqli-stmt.attr-get.php
 * @param mysqli_stmt $stmt
 * @param int $attr <p>
 * 取得したい属性。
 * </p>
 * @return int 属性がみつからない場合は <b>FALSE</b> を、
 * それ以外の場合はその属性の値を返します。
 */
function mysqli_stmt_attr_get(mysqli_stmt $stmt, int $attr): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * プリペアドステートメントの振る舞いを変更する
 * @link http://php.net/manual/ja/mysqli-stmt.attr-set.php
 * @param mysqli_stmt $stmt
 * @param int $attr <p>
 * 設定したい属性。次のいずれかの値となります。
 * <table>
 * 属性の値
 * <tr valign="top">
 * <td>文字</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH</td>
 * <td>
 * <b>TRUE</b> に設定すると、<b>mysqli_stmt_store_result</b> は
 * メタデータ MYSQL_FIELD->max_length の値を上書きします。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>MYSQLI_STMT_ATTR_CURSOR_TYPE</td>
 * <td>
 * <b>mysqli_stmt_execute</b>
 * が起動された際にステートメントをオープンするためのカーソル型。
 * <i>mode</i> は、MYSQLI_CURSOR_TYPE_NO_CURSOR
 * (デフォルト) あるいは MYSQLI_CURSOR_TYPE_READ_ONLY となります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>MYSQLI_STMT_ATTR_PREFETCH_ROWS</td>
 * <td>
 * カーソルの使用時にサーバーからいちどに取得する行数。
 * <i>mode</i> に指定できる値の範囲は
 * 1 から unsigned long の最大値までで、デフォルトは 1 です。
 * </td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * MYSQLI_STMT_ATTR_CURSOR_TYPE オプションで
 * MYSQLI_CURSOR_TYPE_READ_ONLY を使用すると、
 * <b>mysqli_stmt_execute</b>
 * を起動した際にそのステートメント用のカーソルをオープンします。
 * 以前に <b>mysqli_stmt_execute</b>
 * をコールした際にオープンしたカーソルが残っている場合は、
 * それを閉じてから新しいカーソルをオープンします。また
 * <b>mysqli_stmt_reset</b>
 * も、オープンしているカーソルをすべて閉じてからステートメント再実行の準備をします。
 * <b>mysqli_stmt_free_result</b>
 * は、オープンしているカーソルをすべて閉じます。
 * </p>
 * <p>
 * プリペアドステートメント用のカーソルをオープンするのなら
 * <b>mysqli_stmt_store_result</b> は不要です。
 * </p>
 * @param int $mode <p>属性に割り当てるモード。</p>
 * @return bool
 */
function mysqli_stmt_attr_set(mysqli_stmt $stmt, int $attr, int $mode): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * プリペアドステートメントのパラメータに変数をバインドする
 * @link http://php.net/manual/ja/mysqli-stmt.bind-param.php
 * @param mysqli_stmt $stmt
 * @param string $types <p>
 * ひとつあるいは複数の文字で、対応するバインド変数の型を表します。
 * <table>
 * 型指定文字
 * <tr valign="top">
 * <td>文字</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>i</td>
 * <td>対応する変数の型は integer です。</td>
 * </tr>
 * <tr valign="top">
 * <td>d</td>
 * <td>対応する変数の型は double です。</td>
 * </tr>
 * <tr valign="top">
 * <td>s</td>
 * <td>対応する変数の型は string です。</td>
 * </tr>
 * <tr valign="top">
 * <td>b</td>
 * <td>対応する変数の型は blob で、複数のパケットに分割して送信されます。</td>
 * </tr>
 * </table>
 * </p>
 * @param mixed $var1 <p>
 * 変数の数。文字列
 * <i>types</i>
 * の長さは、ステートメント中のパラメータの数と一致する必要があります。
 * </p>
 * @param mixed $_ [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_stmt_bind_param(mysqli_stmt $stmt, string $types, &$var1, &$_ = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果を保存するため、プリペアドステートメントに変数をバインドする
 * @link http://php.net/manual/ja/mysqli-stmt.bind-result.php
 * @param mysqli_stmt $stmt
 * @param mixed $var1 <p>
 * バインドする変数。
 * </p>
 * @param mixed $_ [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_stmt_bind_result(mysqli_stmt $stmt, &$var1, &$_ = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * プリペアドステートメントを閉じる
 * @link http://php.net/manual/ja/mysqli-stmt.close.php
 * @param mysqli_stmt $stmt
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_stmt_close(mysqli_stmt $stmt): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * ステートメントの結果セットの任意の行に移動する
 * @link http://php.net/manual/ja/mysqli-stmt.data-seek.php
 * @param mysqli_stmt $stmt
 * @param int $offset <p>
 * ゼロから行の総数 - 1（0..<b>mysqli_stmt_num_rows</b> - 1）
 * までの間である必要があります。
 * </p>
 * @return void 値を返しません。
 */
function mysqli_stmt_data_seek(mysqli_stmt $stmt, int $offset): void {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近のステートメントのコールに関するエラーコードを返す
 * @link http://php.net/manual/ja/mysqli-stmt.errno.php
 * @param mysqli_stmt $stmt
 * @return int エラーコードの値を返します。ゼロはエラーが発生しなかったことを示します。
 */
function mysqli_stmt_errno(mysqli_stmt $stmt): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近のステートメントのエラー内容を文字列で返す
 * @link http://php.net/manual/ja/mysqli-stmt.error.php
 * @param mysqli_stmt $stmt
 * @return string エラーの内容を文字列で返します。エラーが発生しなかった場合は空文字列を返します。
 */
function mysqli_stmt_error(mysqli_stmt $stmt): string {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * 直近で実行したステートメントからのエラーの一覧を返す
 * @link http://php.net/manual/ja/mysqli-stmt.error-list.php
 * @param mysqli_stmt $stmt
 * @return array エラーの一覧を返します。個々のエラーは連想配列形式で、
 * errno、error および sqlstate のキーを含みます。
 */
function mysqli_stmt_error_list(mysqli_stmt $stmt): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * プリペアドステートメントから結果を取得し、バインド変数に格納する
 * @link http://php.net/manual/ja/mysqli-stmt.fetch.php
 * @param mysqli_stmt $stmt
 * @return bool
 */
function mysqli_stmt_fetch(mysqli_stmt $stmt): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 指定したステートメントのフィールド数を返す
 * @link http://php.net/manual/ja/mysqli-stmt.field-count.php
 * @param mysqli_stmt $stmt
 * @return int
 */
function mysqli_stmt_field_count(mysqli_stmt $stmt): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 指定したステートメントハンドルの結果を格納したメモリを開放する
 * @link http://php.net/manual/ja/mysqli-stmt.free-result.php
 * @param mysqli_stmt $stmt
 * @return void 値を返しません。
 */
function mysqli_stmt_free_result(mysqli_stmt $stmt): void {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * プリペアード・ステートメントから結果セットを取得
 * @link http://php.net/manual/ja/mysqli-stmt.get-result.php
 * @param mysqli_stmt $stmt
 * @return mysqli_result SELECT クエリが成功した場合はその結果セットを返します。
 * その他の DML クエリを実行した場合や失敗した場合は <b>FALSE</b> を返します。
 * その他の DML クエリを実行したのかクエリの実行に失敗したのかを区別するには、
 * <b>mysqli_errno</b> 関数を使います。
 */
function mysqli_stmt_get_result(mysqli_stmt $stmt): mysqli_result {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * SHOW WARNINGS の結果を取得する
 * @link http://php.net/manual/ja/mysqli-stmt.get-warnings.php
 * @param mysqli_stmt $stmt
 * @return object
 */
function mysqli_stmt_get_warnings(mysqli_stmt $stmt) {}

/**
 * (PHP 5, PHP 7)<br/>
 * ステートメントを初期化し、mysqli_stmt_prepare で使用するオブジェクトを返す
 * @link http://php.net/manual/ja/mysqli.stmt-init.php
 * @param mysqli $link
 * @return mysqli_stmt オブジェクトを返します。
 */
function mysqli_stmt_init(mysqli $link): mysqli_stmt {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近の INSERT 操作で生成した ID を取得する
 * @link http://php.net/manual/ja/mysqli-stmt.insert-id.php
 * @param mysqli_stmt $stmt
 * @return mixed
 */
function mysqli_stmt_insert_id(mysqli_stmt $stmt) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 複数クエリで、次の結果が存在するかどうかを調べる
 * @link http://php.net/manual/ja/mysqli-stmt.more-results.php
 * @param $stmt
 * @return bool 結果がさらに存在する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function mysqli_stmt_more_results($stmt): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 複数クエリから、次の結果を読み込む
 * @link http://php.net/manual/ja/mysqli-stmt.next-result.php
 * @param $stmt
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_stmt_next_result($stmt): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * ステートメントの結果セットの行数を返す
 * @link http://php.net/manual/ja/mysqli-stmt.num-rows.php
 * @param mysqli_stmt $stmt
 * @return int 結果セットの行数を表す整数値を返します。
 */
function mysqli_stmt_num_rows(mysqli_stmt $stmt): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 指定したステートメントのパラメータ数を返す
 * @link http://php.net/manual/ja/mysqli-stmt.param-count.php
 * @param mysqli_stmt $stmt
 * @return int パラメータの数を整数で返します。
 */
function mysqli_stmt_param_count(mysqli_stmt $stmt): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * SQL ステートメントを実行するために準備する
 * @link http://php.net/manual/ja/mysqli-stmt.prepare.php
 * @param mysqli_stmt $stmt
 * @param string $query <p>
 * クエリを表す文字列。単一の SQL 文で構成されている必要があります。
 * </p>
 * <p>
 * ひとつまたは複数のパラメータを SQL 文に含めることができます。
 * そのためには、適切な位置にクエスチョンマーク
 * (?) を埋め込みます。
 * </p>
 * <p>
 * ステートメントの最後にセミコロンや \g
 * を追加してはいけません。
 * </p>
 * <p>
 * パラメータのマーカは、それが SQL 文の適切な位置にある場合のみ
 * 有効です。例えば INSERT 文の VALUES() リストの中
 * (行に登録するカラム値を指定する) や
 * WHERE 句で列のデータと比較する値などが適切な位置の例です。
 * </p>
 * <p>
 * しかし、識別子 (テーブルやカラムの名前) や SELECT 文で選択する
 * 項目の名前に指定したり、(等号 = のような)
 * 二項演算子の両側にパラメータを指定したりすることはできません。
 * 後者の制限は、パラメータの型が判断できなくなることによるものです。
 * また、パラメータのマーカを NULL と比較して
 * ? IS NULL のようにすることもできません。
 * 一般に、パラメータが使用可能なのはデータ操作言語 (DML)
 * ステートメントであり、データ定義言語 (DDL) ステートメントでは
 * 使用できません。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_stmt_prepare(mysqli_stmt $stmt, string $query): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * プリペアドステートメントをリセットする
 * @link http://php.net/manual/ja/mysqli-stmt.reset.php
 * @param mysqli_stmt $stmt
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_stmt_reset(mysqli_stmt $stmt): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * プリペアドステートメントから結果セットのメタデータを返す
 * @link http://php.net/manual/ja/mysqli-stmt.result-metadata.php
 * @param mysqli_stmt $stmt
 * @return mysqli_result 結果のオブジェクトを返します。エラー時には <b>FALSE</b> を返します。
 */
function mysqli_stmt_result_metadata(mysqli_stmt $stmt): mysqli_result {}

/**
 * (PHP 5, PHP 7)<br/>
 * データをブロックで送信する
 * @link http://php.net/manual/ja/mysqli-stmt.send-long-data.php
 * @param mysqli_stmt $stmt
 * @param int $param_nr <p>
 * データに関連付けるパラメータを示します。
 * パラメータの番号は 0 から始まります。
 * </p>
 * @param string $data <p>
 * 送信するデータを含む文字列。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_stmt_send_long_data(mysqli_stmt $stmt, int $param_nr, string $data): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * プリペアドステートメントから結果を転送する
 * @link http://php.net/manual/ja/mysqli-stmt.store-result.php
 * @param mysqli_stmt $stmt
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mysqli_stmt_store_result(mysqli_stmt $stmt): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直前のステートメントの操作での SQLSTATE エラーを返す
 * @link http://php.net/manual/ja/mysqli-stmt.sqlstate.php
 * @param mysqli_stmt $stmt
 * @return string 直前のエラーに関する SQLSTATE エラーコードを含む文字列を返します。
 * エラーコードは 5 文字で構成され、'00000'
 * はエラーが発生しなかったことを意味します。
 */
function mysqli_stmt_sqlstate(mysqli_stmt $stmt): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直前の MySQL の操作での SQLSTATE エラーを返す
 * @link http://php.net/manual/ja/mysqli.sqlstate.php
 * @param mysqli $link
 * @return string 直前のエラーに関する SQLSTATE エラーコードを含む文字列を返します。
 * エラーコードは 5 文字で構成され、'00000'
 * はエラーが発生しなかったことを意味します。
 */
function mysqli_sqlstate(mysqli $link): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * SSL を使用したセキュアな接続を確立する
 * @link http://php.net/manual/ja/mysqli.ssl-set.php
 * @param mysqli $link
 * @param string $key <p>
 * 鍵ファイルへのパス。
 * </p>
 * @param string $cert <p>
 * 証明書ファイルへのパス。
 * </p>
 * @param string $ca <p>
 * CA ファイルへのパス。
 * </p>
 * @param string $capath <p>
 * 信頼された SSL CA 証明書が PEM フォーマットで格納されているディレクトリへのパス。
 * </p>
 * @param string $cipher <p>
 * SSL の暗号化に使用可能な暗号形式の一覧。
 * </p>
 * @return bool この関数は、常に <b>TRUE</b> を返します。もし SSL が正しく設定できていない場合、
 * <b>mysqli_real_connect</b> は接続時にエラーを返します。
 */
function mysqli_ssl_set(mysqli $link, string $key, string $cert, string $ca, string $capath, string $cipher): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 現在のシステム状態を取得する
 * @link http://php.net/manual/ja/mysqli.stat.php
 * @param mysqli $link
 * @return string サーバーの状態を示す文字列を返します。エラー時には <b>FALSE</b> を返します。
 */
function mysqli_stat(mysqli $link): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近のクエリから結果セットを転送する
 * @link http://php.net/manual/ja/mysqli.store-result.php
 * @param mysqli $link
 * @param int $option [optional] <p>
 * 指定したいオプション。以下のいずれかの値を指定します。
 * <table>
 * 有効なオプション
 * <tr valign="top">
 * <td>名前</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MYSQLI_STORE_RESULT_COPY_DATA</b></td>
 * <td>
 * 結果を、内部の mysqlnd バッファーから PHP の変数にコピーします。
 * デフォルトでは、mysqlnd は参照を利用しており、メモリ内の結果をコピーしたり複製したりしないようにしています。
 * ある種の結果セット (短めの行を大量に保持する結果セットなど) の場合は、
 * コピーしたほうが、全体的なメモリ使用量を抑えることができます。
 * 結果を保持する PHP の変数のほうが、解放されるのが早いからです。
 * これは mysqlnd でのみ利用可能で、PHP 5.6.0 以降で使えます。</td>
 * </tr>
 * </table>
 * </p>
 * @return mysqli_result バッファに格納した結果オブジェクトを返します。エラー時には <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <b>mysqli_store_result</b> は、クエリが結果セットを
 * 返さなかった場合（例えば、クエリが INSERT 文であった場合）に
 * <b>FALSE</b> を返します。また、結果セットの読み込みに失敗した場合にも
 * <b>FALSE</b> を返します。エラーが発生したかどうかを調べるには、
 * <b>mysqli_error</b> が空文字列以外を返す・
 * <b>mysqli_errno</b> がゼロ以外の値を返す・あるいは
 * <b>mysqli_field_count</b> がゼロ以外の値を返す
 * のいずれかを確認します。それ以外にこの関数が <b>FALSE</b> を返す理由としては
 * <b>mysqli_query</b> のコールに成功して返された
 * 結果セットが大きすぎる（メモリに割り当てられない）場合がありえます。
 * もし <b>mysqli_field_count</b> がゼロ以外の値を
 * 返した場合、文は空でない結果セットを生成しています。
 */
function mysqli_store_result(mysqli $link, int $option = null): mysqli_result {}

/**
 * (PHP 5, PHP 7)<br/>
 * 現在の接続のスレッド ID を返す
 * @link http://php.net/manual/ja/mysqli.thread-id.php
 * @param mysqli $link
 * @return int 現在の接続のスレッド ID を返します。
 */
function mysqli_thread_id(mysqli $link): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * スレッドセーフであるかどうかを返す
 * @link http://php.net/manual/ja/mysqli.thread-safe.php
 * @return bool クライアントライブラリがスレッドセーフの場合に <b>TRUE</b>、
 * そうでない場合に <b>FALSE</b> を返します。
 */
function mysqli_thread_safe(): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果セットの取得を開始する
 * @link http://php.net/manual/ja/mysqli.use-result.php
 * @param mysqli $link
 * @return mysqli_result バッファに取得しないで結果オブジェクトを返します。
 * エラー時には <b>FALSE</b> を返します。
 */
function mysqli_use_result(mysqli $link): mysqli_result {}

/**
 * (PHP 5, PHP 7)<br/>
 * 指定した接続の直近のクエリから発生した警告の数を返す
 * @link http://php.net/manual/ja/mysqli.warning-count.php
 * @param mysqli $link
 * @return int 警告の数を返します。警告がなかった場合はゼロを返します。
 */
function mysqli_warning_count(mysqli $link): int {}

/**
 * (PHP 5 &lt;= 5.3.0)<br/>
 * リフレッシュする
 * @link http://php.net/manual/ja/mysqli.refresh.php
 * @param resource $link
 * @param int $options <p>
 * リフレッシュのオプションを定数 MYSQLI_REFRESH_* で指定します。定数の意味は
 * MySQLi 定数 のドキュメントを参照ください。
 * </p>
 * <p>
 * 公式ドキュメントの MySQL Refresh
 * も参照ください。
 * </p>
 * @return int リフレッシュに成功した場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function mysqli_refresh($link, int $options): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * <b>mysqli_real_escape_string</b> のエイリアス
 * @link http://php.net/manual/ja/function.mysqli-escape-string.php
 * @param $link
 * @param $query
 */
function mysqli_escape_string($link, $query) {}

/**
 * (PHP 5, PHP 7)<br/>
 * <b>mysqli_options</b> のエイリアス
 * @link http://php.net/manual/ja/function.mysqli-set-opt.php
 */
function mysqli_set_opt() {}


/**
 * <p>
 * my.cnf の指定した名前のグループか、
 * あるいは <b>MYSQLI_READ_DEFAULT_FILE</b>
 * で指定したファイルからオプションを読み込みます。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_READ_DEFAULT_GROUP', 5);

/**
 * <p>
 * my.cnf のかわりに、指定したファイルからオプションを
 * 読み込みます。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_READ_DEFAULT_FILE', 4);

/**
 * <p>
 * 接続のタイムアウトまでの秒数。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_OPT_CONNECT_TIMEOUT', 0);

/**
 * <p>
 * LOAD LOCAL INFILE コマンドを有効にします。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_OPT_LOCAL_INFILE', 8);

/**
 * <p>
 * MySQL サーバーへの接続時に実行するコマンド。
 * 再接続時にも自動的に再実行されます。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_INIT_COMMAND', 3);
define ('MYSQLI_OPT_NET_CMD_BUFFER_SIZE', 202);
define ('MYSQLI_OPT_NET_READ_BUFFER_SIZE', 203);
define ('MYSQLI_OPT_INT_AND_FLOAT_NATIVE', 201);
define ('MYSQLI_OPT_SSL_VERIFY_SERVER_CERT', 21);
define ('MYSQLI_SERVER_PUBLIC_KEY', 27);

/**
 * <p>
 * SSL（暗号化プロトコル）を使用します。このオプションは、アプリケーション
 * プログラムで指定することはできず、MySQL クライアントライブラリの内部で設定します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_CLIENT_SSL', 2048);

/**
 * <p>
 * 圧縮プロトコルを使用します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_CLIENT_COMPRESS', 32);

/**
 * <p>
 * （wait_timeout のかわりに）interactive_timeout の秒数を使用できるように
 * します。クライアントセッションの wait_timeout 変数の値は、interactive_timeout
 * 変数の値に設定されます。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_CLIENT_INTERACTIVE', 1024);

/**
 * <p>
 * 関数名に続く空白文字を許可します。すべての関数名を予約語とします。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_CLIENT_IGNORE_SPACE', 256);

/**
 * <p>
 * db_name.tbl_name.col_name 形式の使用を禁止します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_CLIENT_NO_SCHEMA', 16);
define ('MYSQLI_CLIENT_FOUND_ROWS', 2);
define ('MYSQLI_CLIENT_SSL_VERIFY_SERVER_CERT', 1073741824);
define ('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT', 64);
define ('MYSQLI_CLIENT_CAN_HANDLE_EXPIRED_PASSWORDS', 4194304);
define ('MYSQLI_OPT_CAN_HANDLE_EXPIRED_PASSWORDS', 29);

/**
 * <p>
 * 結果セットをバッファに格納します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_STORE_RESULT', 0);

/**
 * <p>
 * 結果セットをバッファに格納しません。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_USE_RESULT', 1);
define ('MYSQLI_ASYNC', 8);
define ('MYSQLI_STORE_RESULT_COPY_DATA', 16);

/**
 * <p>
 * 行データを、カラム名をインデックスとする配列に格納して返します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_ASSOC', 1);

/**
 * <p>
 * 行データを、数値インデックスの配列に格納して返します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_NUM', 2);

/**
 * <p>
 * 行データを、数値インデックス・カラム名インデックスの両方を
 * 保持する配列に格納して返します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_BOTH', 3);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_STMT_ATTR_UPDATE_MAX_LENGTH', 0);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_STMT_ATTR_CURSOR_TYPE', 1);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_CURSOR_TYPE_NO_CURSOR', 0);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_CURSOR_TYPE_READ_ONLY', 1);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_CURSOR_TYPE_FOR_UPDATE', 2);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_CURSOR_TYPE_SCROLLABLE', 4);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_STMT_ATTR_PREFETCH_ROWS', 2);

/**
 * <p>
 * フィールドは、NOT NULL と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_NOT_NULL_FLAG', 1);

/**
 * <p>
 * フィールドは、プライマリキーの一部です。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_PRI_KEY_FLAG', 2);

/**
 * <p>
 * フィールドは、ユニークキーの一部です。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_UNIQUE_KEY_FLAG', 4);

/**
 * <p>
 * フィールドは、インデックスの一部です。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_MULTIPLE_KEY_FLAG', 8);

/**
 * <p>
 * フィールドは BLOB と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_BLOB_FLAG', 16);

/**
 * <p>
 * フィールドは UNSIGNED と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_UNSIGNED_FLAG', 32);

/**
 * <p>
 * フィールドは ZEROFILL と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_ZEROFILL_FLAG', 64);

/**
 * <p>
 * フィールドは AUTO_INCREMENT と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_AUTO_INCREMENT_FLAG', 512);

/**
 * <p>
 * フィールドは TIMESTAMP と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TIMESTAMP_FLAG', 1024);

/**
 * <p>
 * フィールドは SET と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_SET_FLAG', 2048);

/**
 * <p>
 * フィールドは NUMERIC と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_NUM_FLAG', 32768);

/**
 * <p>
 * フィールドは、マルチインデックスの一部です。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_PART_KEY_FLAG', 16384);

/**
 * <p>
 * フィールドは GROUP BY の一部です。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_GROUP_FLAG', 32768);

/**
 * <p>
 * フィールドが ENUM として定義されています。PHP 5.3.0 以降で使用可能です。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_ENUM_FLAG', 256);

/**
 * <p>
 * フィールドが BINARY として定義されています。PHP 5.3.0 以降で使用可能です。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_BINARY_FLAG', 128);
define ('MYSQLI_NO_DEFAULT_VALUE_FLAG', 4096);
define ('MYSQLI_ON_UPDATE_NOW_FLAG', 8192);

/**
 * <p>
 * フィールドは DECIMAL と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_DECIMAL', 0);

/**
 * <p>
 * フィールドは TINYINT と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_TINY', 1);

/**
 * <p>
 * フィールドは SMALLINT と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_SHORT', 2);

/**
 * <p>
 * フィールドは INT と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_LONG', 3);

/**
 * <p>
 * フィールドは FLOAT と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_FLOAT', 4);

/**
 * <p>
 * フィールドは DOUBLE と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_DOUBLE', 5);

/**
 * <p>
 * フィールドは DEFAULT NULL と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_NULL', 6);

/**
 * <p>
 * フィールドは TIMESTAMP と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_TIMESTAMP', 7);

/**
 * <p>
 * フィールドは BIGINT と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_LONGLONG', 8);

/**
 * <p>
 * フィールドは MEDIUMINT と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_INT24', 9);

/**
 * <p>
 * フィールドは DATE と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_DATE', 10);

/**
 * <p>
 * フィールドは TIME と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_TIME', 11);

/**
 * <p>
 * フィールドは DATETIME と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_DATETIME', 12);

/**
 * <p>
 * フィールドは YEAR と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_YEAR', 13);

/**
 * <p>
 * フィールドは DATE と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_NEWDATE', 14);

/**
 * <p>
 * フィールドは ENUM と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_ENUM', 247);

/**
 * <p>
 * フィールドは SET と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_SET', 248);

/**
 * <p>
 * フィールドは TINYBLOB と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_TINY_BLOB', 249);

/**
 * <p>
 * フィールドは MEDIUMBLOB と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_MEDIUM_BLOB', 250);

/**
 * <p>
 * フィールドは LONGBLOB と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_LONG_BLOB', 251);

/**
 * <p>
 * フィールドは BLOB と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_BLOB', 252);

/**
 * <p>
 * フィールドは VARCHAR あるいは BINARY と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_VAR_STRING', 253);

/**
 * <p>
 * フィールドは STRING と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_STRING', 254);

/**
 * <p>
 * フィールドは TINYINT と定義されています。
 * CHAR については MYSQLI_TYPE_STRING を参照ください。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_CHAR', 1);

/**
 * <p>
 * フィールドは INTERVAL と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_INTERVAL', 247);

/**
 * <p>
 * フィールドは GEOMETRY と定義されています。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_GEOMETRY', 255);
define ('MYSQLI_TYPE_JSON', 245);

/**
 * <p>
 * 精密な DECIMAL あるいは NUMERIC のフィールドです (MySQL 5.0.3 以降)。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_NEWDECIMAL', 246);

/**
 * <p>
 * フィールドは BIT と定義されています (MySQL 5.0.3 以降)。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TYPE_BIT', 16);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_SET_CHARSET_NAME', 7);
define ('MYSQLI_SET_CHARSET_DIR', 6);

/**
 * <p>
 * バインド変数に使用可能なデータがありません。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_NO_DATA', 100);

/**
 * <p>
 * データのトランケーションが発生しました。PHP 5.1.0 および MySQL 5.0.5 以降で使用可能です。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_DATA_TRUNCATED', 101);

/**
 * <p>
 * クエリ内でインデックスが使われていなかったり間違ったインデックスを使っていたりする場合に報告します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REPORT_INDEX', 4);

/**
 * <p>
 * mysqli 関数コールのエラーを報告します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REPORT_ERROR', 1);

/**
 * <p>
 * エラー時に、警告の代わりに mysqli_sql_exception をスローします。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REPORT_STRICT', 2);

/**
 * <p>
 * すべてのオプションを有効にします (すべてを報告します)。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REPORT_ALL', 255);

/**
 * <p>
 * 報告を無効にします。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REPORT_OFF', 0);

/**
 * <p>
 * <b>mysqli_debug</b> 機能が有効の場合に 1 が設定されます。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_DEBUG_TRACE_ENABLED', 0);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_SERVER_QUERY_NO_GOOD_INDEX_USED', 16);

/**
 * <p>
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_SERVER_QUERY_NO_INDEX_USED', 32);
define ('MYSQLI_SERVER_QUERY_WAS_SLOW', 2048);
define ('MYSQLI_SERVER_PS_OUT_PARAMS', 4096);

/**
 * <p>
 * 権限テーブルをリフレッシュします。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REFRESH_GRANT', 1);

/**
 * <p>
 * ログをフラッシュします。SQL 文
 * FLUSH LOGS を実行するのと同じです。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REFRESH_LOG', 2);

/**
 * <p>
 * テーブルキャッシュをフラッシュします。SQL 文
 * FLUSH TABLES を実行するのと同じです。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REFRESH_TABLES', 4);

/**
 * <p>
 * ホストキャッシュをフラッシュします。SQL 文
 * FLUSH HOSTS を実行するのと同じです。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REFRESH_HOSTS', 8);

/**
 * <p>
 * 状態変数をリセットします。SQL 文
 * FLUSH STATUS を実行するのと同じです。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REFRESH_STATUS', 16);

/**
 * <p>
 * スレッドキャッシュをフラッシュします。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REFRESH_THREADS', 32);

/**
 * <p>
 * レプリケーションのスレーブ側のサーバーで、
 * マスタサーバーの情報をリセットしてスレーブを再起動します。
 * SQL 文
 * RESET SLAVE を実行するのと同じです。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REFRESH_SLAVE', 64);

/**
 * <p>
 * レプリケーションのマスタ側のサーバーで、
 * バイナリログインデックスにあるバイナリログファイルを削除してインデックスファイルを切り詰めます。
 * SQL 文
 * RESET MASTER を実行するのと同じです。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_REFRESH_MASTER', 128);
define ('MYSQLI_REFRESH_BACKUP_LOG', 2097152);
define ('MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT', 1);

/**
 * <p>
 * <b>mysqli_begin_transaction</b> で、
 * トランザクションを "START TRANSACTION READ WRITE" で開始します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TRANS_START_READ_WRITE', 2);

/**
 * <p>
 * <b>mysqli_begin_transaction</b> で、
 * トランザクションを "START TRANSACTION READ ONLY" で開始します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TRANS_START_READ_ONLY', 4);

/**
 * <p>
 * "AND CHAIN" を <b>mysqli_commit</b> あるいは
 * <b>mysqli_rollback</b> に追加します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TRANS_COR_AND_CHAIN', 1);

/**
 * <p>
 * "AND NO CHAIN" を <b>mysqli_commit</b> あるいは
 * <b>mysqli_rollback</b> に追加します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TRANS_COR_AND_NO_CHAIN', 2);

/**
 * <p>
 * "RELEASE" を <b>mysqli_commit</b> あるいは
 * <b>mysqli_rollback</b> に追加します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TRANS_COR_RELEASE', 4);

/**
 * <p>
 * "NO RELEASE" を <b>mysqli_commit</b> あるいは
 * <b>mysqli_rollback</b> に追加します。
 * </p>
 * @link http://php.net/manual/ja/mysqli.constants.php
 */
define ('MYSQLI_TRANS_COR_NO_RELEASE', 8);

// End of mysqli v.7.1.5
?>
