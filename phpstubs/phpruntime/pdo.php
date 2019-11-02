<?php



namespace {

	/**
	 * <p>PHP とデータベースサーバーの間の接続を表します。</p>
	 * @link https://php.net/manual/ja/class.pdo.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
	 */
	class PDO {

		/**
		 * @var int ブールデータ型を表します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_BOOL = 5;

		/**
		 * @var int SQL NULL データ型を表します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_NULL = 0;

		/**
		 * @var int SQL INTEGER データ型を表します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_INT = 1;

		/**
		 * @var int SQL CHAR, VARCHAR, または他の文字列データ型を表します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_STR = 2;

		/**
		 * @var int Flag to denote a string uses the national character set.   Available since PHP 7.2.0
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_STR_NATL = 1073741824;

		/**
		 * @var int Flag to denote a string uses the regular character set.   Available since PHP 7.2.0
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_STR_CHAR = 536870912;

		/**
		 * @var int SQL ラージオブジェクト型を表します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_LOB = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_STMT = 4;

		/**
		 * @var int パラメータがストアドプロシージャ用の入力パラメータであることを指定します。 この値は、PDO::PARAM_&#42; データ型とのビットORとして指定する必要があります。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_INPUT_OUTPUT = 2147483648;

		/**
		 * @var int 取得する方法として、 結果セットが返すカラム名と同じ名前の変数を有するオブジェクトとして各行を返す方法を 指定します。 <b><code>PDO::FETCH_LAZY</code></b> は、アクセスされたものと同じ名前のオブジェクト変数を作成します。 <code>PDOStatement::fetchAll()</code> の中では使えません。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_LAZY = 1;

		/**
		 * @var int 結果セットの対応するカラム名にふられているものと同じキーを付けた 連想配列として各行を返す取得方法を指定します。 もし結果セットが複数のカラムを同名で含む場合、 <b><code>PDO::FETCH_ASSOC</code></b> はカラム名毎に 1 つの値のみ返します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_ASSOC = 2;

		/**
		 * @var int 結果セットの対応するカラム名にふられているものと同じキーを付けた 連想配列として各行を返す取得方法を指定します。 もし結果セットが複数のカラムを同名で含む場合、 <b><code>PDO::FETCH_NAMED</code></b> はカラム名毎に値の配列を返します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_NAMED = 11;

		/**
		 * @var int 結果セットの対応するカラム番号にふられているものと同じ添字を付けた 配列として各行を返す取得方法を指定します。番号は0から始まります。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_NUM = 3;

		/**
		 * @var int 結果セットと同じカラム名と0から始まるカラム番号を付けた配列として各行を返す 方法を指定します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_BOTH = 4;

		/**
		 * @var int 結果セットが返すカラム名と同じ名前のプロパティを有する オブジェクトとして各行を返す方法を指定します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_OBJ = 5;

		/**
		 * @var int 結果セットのカラムの値を <code>PDOStatement::bindParam()</code> または <code>PDOStatement::bindColumn()</code> メソッドでバインドされた PHP変数に代入し、TRUEを返すという取得方法を指定します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_BOUND = 6;

		/**
		 * @var int 結果セットの次の行から指定された一つのカラムのみを返す取得方法を指定します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_COLUMN = 7;

		/**
		 * @var int カラムをクラスのプロパティにマップしつつ、 指定されたクラスの新規インスタンスを返す取得方法を指定します。  <p><b>注意</b>:  要求されたクラスにプロパティが存在しない場合は、マジックメソッド <b>__set()</b> がコールされます。 </p>
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_CLASS = 8;

		/**
		 * @var int カラムをクラスのプロパティにマップしつつ、 指定されたクラスの既存のインスタンスを更新する取得方法を指定します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_INTO = 9;

		/**
		 * @var int データをその場で扱う方法を完全にカスタマイズできるようにします (<code>PDOStatement::fetchAll()</code> の中でしか使えません)。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_FUNC = 10;

		/**
		 * @var int 値で返すグループ。 <b><code>PDO::FETCH_COLUMN</code></b> あるいは <b><code>PDO::FETCH_KEY_PAIR</code></b> と組み合わせます。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_GROUP = 65536;

		/**
		 * @var int 一意な値だけを取得します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_UNIQUE = 196608;

		/**
		 * @var int ふたつのカラムからなる結果を配列で取得します。最初のカラムの値がキー、二番目のカラムの内容が値となります。 PHP 5.2.3 以降で使用可能です。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_KEY_PAIR = 12;

		/**
		 * @var int 最初のカラムの値からクラス名を決定します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_CLASSTYPE = 262144;

		/**
		 * @var int <b><code>PDO::FETCH_INTO</code></b> と同様ですが、 シリアライズした文字列としてオブジェクトを提供します。 PHP 5.1.0 以降で使用可能です。 PHP 5.3.0 以降、このフラグを設定した場合はコンストラクタが呼ばれないようになりました。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_SERIALIZE = 524288;

		/**
		 * @var int コンストラクタを呼んでからプロパティを設定します。 PHP 5.2.0 以降で使用可能です。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_PROPS_LATE = 1048576;

		/**
		 * @var int この値が <b><code>FALSE</code></b> の場合、PDO は接続がトランザクションを開始できるように オートコミットを無効にしようとします。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_AUTOCOMMIT = 0;

		/**
		 * @var int 独自アプリケーションにおけるメモリ使用量に対する速度のバランスを 調整するためのプリフェッチサイズを設定します。 全てのデータベースとドライバの組み合わせでプリフェッチサイズの設定を サポートしているわけではありません。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_PREFETCH = 1;

		/**
		 * @var int データベースとの通信に対するタイムアウト値を秒で設定します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_TIMEOUT = 2;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_ERRMODE = 3;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_SERVER_VERSION = 4;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_CLIENT_VERSION = 5;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_SERVER_INFO = 6;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_CONNECTION_STATUS = 7;

		/**
		 * @var int <i>PDO::CASE_&#42;</i> 定数で指定されたケースにカラム名を変更します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_CASE = 8;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_CURSOR_NAME = 9;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_CURSOR = 10;

		/**
		 * @var int ドライバ名を返します。  <p></p>  <p><b>例1 <b><code>PDO::ATTR_DRIVER_NAME</code></b> の使用例</b></p>  <code> &lt;&#63;php<br>if ($db-&gt;getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {<br>  echo "mysql 上で動作しています。何か mysql 固有のことをここで行います\n";<br>}<br>&#63;&gt;  </code>
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_DRIVER_NAME = 16;

		/**
		 * @var int 空文字を SQL の NULL 値に変換します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_ORACLE_NULLS = 11;

		/**
		 * @var int 新規接続を生成するよりもむしろ持続的接続を要求します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_PERSISTENT = 12;

		/**
		 * @var int Sets the class name of which statements are returned as.
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_STATEMENT_CLASS = 13;

		/**
		 * @var int 結果セット中の各カラム名にカタログ名を追加します。 カタログ名とカラム名は、小数点 (.) で区切られます。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_FETCH_CATALOG_NAMES = 15;

		/**
		 * @var int 結果セット中の各カラム名にテーブル名を追加します。 テーブル名とカラム名は、小数点 (.) で区切られます。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_FETCH_TABLE_NAMES = 14;

		/**
		 * @var int Forces all values fetched to be treated as strings.
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_STRINGIFY_FETCHES = 17;

		/**
		 * @var int Sets the maximum column name length.
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_MAX_COLUMN_LEN = 18;

		/**
		 * @var int PHP 5.2.0 以降で使用可能です。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_DEFAULT_FETCH_MODE = 19;

		/**
		 * @var int PHP 5.1.3 以降で使用可能です。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_EMULATE_PREPARES = 20;

		/**
		 * @var int Sets the default string parameter type, this can be one of <b><code>PDO::PARAM_STR_NATL</code></b> and <b><code>PDO::PARAM_STR_CHAR</code></b>.   Available since PHP 7.2.0.
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ATTR_DEFAULT_STR_PARAM = 21;

		/**
		 * @var int エラー時にエラーもしくは例外を発生しません。 開発者の方は明示的にエラーをチェックするようにしてください。 これはデフォルトのモードです。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERRMODE_SILENT = 0;

		/**
		 * @var int エラーが発生した場合、PHP の <b><code>E_WARNING</code></b> メッセージを発行します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERRMODE_WARNING = 1;

		/**
		 * @var int エラーが発生した場合、PDOException を投げます。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERRMODE_EXCEPTION = 2;

		/**
		 * @var int カラム名をデータベースドライバにより返されたままにします。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const CASE_NATURAL = 0;

		/**
		 * @var int カラム名を小文字にします。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const CASE_LOWER = 2;

		/**
		 * @var int カラム名を大文字にします。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const CASE_UPPER = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const NULL_NATURAL = 0;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const NULL_EMPTY_STRING = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const NULL_TO_STRING = 2;

		/**
		 * @var int 結果セットの次の行を取得します。スクローラブルなカーソルでのみ有効です。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_ORI_NEXT = 0;

		/**
		 * @var int 結果セットの前の行を取得します。スクローラブルなカーソルでのみ有効です。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_ORI_PRIOR = 1;

		/**
		 * @var int 結果セットの先頭の行を取得します。スクローラブルなカーソルでのみ有効です。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_ORI_FIRST = 2;

		/**
		 * @var int 結果セットの最後の行を取得します。スクローラブルなカーソルでのみ有効です。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_ORI_LAST = 3;

		/**
		 * @var int 結果セットから行番号で指定した行を取得します。スクローラブルなカーソルでのみ有効です。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_ORI_ABS = 4;

		/**
		 * @var int 結果セットのカーソルの現在の位置を基準とする相対位置により指定された行を 取得します。スクローラブルなカーソルでのみ有効です。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const FETCH_ORI_REL = 5;

		/**
		 * @var int 前進のみ可能なカーソルを有する PDOStatement オブジェクトを生成します。 これにより、アプリケーションの性能は改善しますが、 PDOStatementオブジェクトは前方にある結果セットから一度に一行を 取得するという制約を受けます。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const CURSOR_FWDONLY = 0;

		/**
		 * @var int スクローラブルカーソルを有する PDOStatement オブジェクトを作成します。 結果セットから取得した行を制御するための <i>PDO::FETCH_ORI_&#42;</i> 定数を指定して ください。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const CURSOR_SCROLL = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERR_CANT_MAP = null;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERR_SYNTAX = null;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERR_CONSTRAINT = null;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERR_NOT_FOUND = null;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERR_ALREADY_EXISTS = null;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERR_NOT_IMPLEMENTED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERR_MISMATCH = null;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERR_TRUNCATED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERR_DISCONNECTED = null;

		/**
		 * @var int
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERR_NO_PERM = null;

		/**
		 * @var int SQLSTATE '00000' は SQL ステートメントがエラーや警告がなく発行に成功したことを意味します。 この定数はエラーが発生したかどうかを判別するために <code>PDO::errorCode()</code> もしくは <code>PDOStatement::errorCode()</code> をチェックする際に 便利です。この場合、通常はエラー状態を発生したメソッドからの戻りコードを 検査することによって検知します。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const ERR_NONE = 00000;

		/**
		 * @var int 割り当てられたときに発生するイベント。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_EVT_ALLOC = 0;

		/**
		 * @var int 割り当てが解除されたときに発生するイベント。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_EVT_FREE = 1;

		/**
		 * @var int プリペアドステートメントの実行前に発生するイベント。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_EVT_EXEC_PRE = 2;

		/**
		 * @var int プリペアドステートメントの実行後に発生するイベント。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_EVT_EXEC_POST = 3;

		/**
		 * @var int 結果セットから結果を取得する前に発生するイベント。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_EVT_FETCH_PRE = 4;

		/**
		 * @var int 結果セットから結果を取得した後に発生するイベント。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_EVT_FETCH_POST = 5;

		/**
		 * @var int バインドパラメータの登録時に発生するイベント。 これにより、ドライバがパラメータ名を正規化できるようになります。
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const PARAM_EVT_NORMALIZE = 6;

		/**
		 * @var int Specifies that a function created with <code>PDO::sqliteCreateFunction()</code> is deterministic, i.e. it always returns the same result given the same inputs within a single SQL statement. (PHP 7.1.4 以降で使用可能です)
		 * @link https://php.net/manual/ja/pdo.constants.php
		 */
		const SQLITE_DETERMINISTIC = null;

		/**
		 * データベースへの接続を表す PDO インスタンスを生成する
		 * <p>指定されたデータベースへの接続を表す PDO インスタンスを生成します。</p>
		 * @param string $dsn <p>データソース名(Data Source Name)またはDSN。データベースに接続するために 必要な情報が含まれます。</p> <p>一般に、DSNはPDOドライバ名の後にコロンが続き、 各PDOドライバに固有の接続構文が続きます。より多くの情報は PDO driver-specific documentation にあります。</p> <p><code>dsn</code> パラメータは、データベースへの接続を生成する ために必要な引数を指定する方法として、3種類の方法をサポートします。</p> <p></p>  ドライバ呼び出し  <p><code>dsn</code> に完全な DSN を指定します。</p>   URI 呼び出し  <p><code>dsn</code> は、<b><code>uri:</code></b> の後に DSN 文字列を含むファイルの位置を定義する URI が続く形式となります。 この URI には、ローカルファイルまたはリモート URL を指定することができます。</p> <p><b><code>uri:file:///path/to/dsnfile</code></b></p>   エイリアス  <p><code>dsn</code> は、DSN 文字列を定義する php.ini の <i>pdo.dsn.name</i> へマップする名前 <code>name</code> からなります。</p>  <p><b>注意</b>:</p> <p>エイリアスは、.htaccess や httpd.conf ではなく、 php.ini で定義する必要があります。</p>
		 * @param string $username <p>DSN 文字列のユーザー名。このパラメータは、いくつかの PDO ドライバではオプションです。</p>
		 * @param string $password <p>パスワード。DSN 文字列で必要とされる場合に指定。</p>
		 * @param array $options <p>ドライバ固有の接続オプションを指定するキー=&gt; 値の配列。</p>
		 * @return self <p>成功時に PDO オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/pdo.construct.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function __construct(string $dsn, string $username = NULL, string $password = NULL, array $options = NULL) {}

		/**
		 * トランザクションを開始する
		 * <p>オートコミットモードをオフにします。オートコミットモードがオフの間、 PDO オブジェクトを通じてデータベースに加えた変更は <code>PDO::commit()</code> をコールするまでコミットされません。 <code>PDO::rollBack()</code> をコールすると、 データベースへの全ての変更をロールバックし、 オートコミットモードに設定された接続を返します。</p><p>MySQL を含むいくつかのデータベースでは、DROP TABLE や CREATE TABLE のようなデータベース定義言語 (DDL) ステートメントがトランザクション中に 発行される場合、暗黙的なコミットが自動的に発行されます。 この暗黙的なコミットにより、そのトランザクション境界で 他のあらゆる変更をロールバックすることができなくなるでしょう。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdo.begintransaction.php
		 * @see PDO::commit(), PDO::rollBack()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function beginTransaction(): bool {}

		/**
		 * トランザクションをコミットする
		 * <p>トランザクションをコミットし、 次に <code>PDO::beginTransaction()</code> で新たなトランザクションが開始されるまで、 データベース接続をオートコミットモードに戻します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdo.commit.php
		 * @see PDO::beginTransaction(), PDO::rollBack()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function commit(): bool {}

		/**
		 * データベースハンドラにおける直近の操作に関連する SQLSTATE を取得する
		 * @return mixed <p>SQLSTATE を返します。これは、ANSI SQL-92 標準で定義された英数 5 文字の ID です。簡潔に言えば、SQLSTATE は 2文字のクラス値の後に 3 文字のサブクラス値が続きます。クラス値 01 はワーニングを表し、 戻り値のコード SQL_SUCCESS_WITH_INFO を伴います。 クラス 'IM' を除く '01' 以外のクラス値はエラーを表します。 クラス 'IM' は PDO 自身の実装 (もしくは ODBC ドライバを使用している場合は ODBC かも知れません) に由来するワーニングやエラーに固有の値です。 あらゆるクラスでのサブクラス値 '000' は SQLSTATE に対するサブクラスがない事を示しています。</p><p><b>PDO::errorCode()</b> はデータベースハンドラに 直接行った操作に対するエラーコードのみを取得します。 もし <code>PDO::prepare()</code> や <code>PDO::query()</code> を通して PDOStatement オブジェクトを生成し、 文でエラーが発生した場合、<b>PDO::errorCode()</b> はエラーを反映しません。 特定の文ハンドラに対して実行された操作についてのエラーコードを返すには <code>PDOStatement::errorCode()</code> をコールしなければなりません。</p><p>そのデータベースハンドル上で何も操作が行われていない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdo.errorcode.php
		 * @see PDO::errorInfo(), PDOStatement::errorCode(), PDOStatement::errorInfo()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function errorCode() {}

		/**
		 * データベースハンドラにおける直近の操作に関連する拡張エラー情報を取得する
		 * @return array <p><b>PDO::errorInfo()</b> は、 このデータベースハンドラによって実行された直近の操作に関するエラー情報を 配列として返します。この配列は次のフィールドを含みます。</p>   要素 情報     0 SQLSTATE エラーコード (これは、ANSI SQL 標準で定義された英数 5 文字の ID)   1 ドライバ固有のエラーコード   2 ドライバ固有のエラーメッセージ    <p><b>注意</b>:</p> <p>SQLSTATE エラーコードが設定されていない場合やドライバ固有のエラーがない場合は、 要素 0 に続く要素は <b><code>NULL</code></b> となります。</p> <p><b>PDO::errorInfo()</b> はデータベースハンドラに 直接行った操作に対するエラーコードのみを取得します。 もし <code>PDO::prepare()</code> や <code>PDO::query()</code> を通して PDOStatement オブジェクトを生成し、 文でエラーが発生した場合、<b>PDO::errorInfo()</b> はそのエラーを反映しません。 特定の文ハンドラに対して実行された操作についてのエラーコードを返すには <code>PDOStatement::errorInfo()</code> をコールしなければなりません。</p>
		 * @link https://php.net/manual/ja/pdo.errorinfo.php
		 * @see PDO::errorCode(), PDOStatement::errorCode(), PDOStatement::errorInfo()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function errorInfo(): array {}

		/**
		 * SQL ステートメントを実行し、作用した行数を返す
		 * <p><b>PDO::exec()</b> は、一度の関数コールで SQL 文を実行し、文によって作用した行数を返します。</p><p><b>PDO::exec()</b> は SELECT 文からは結果を返しません。 プログラム中で一度だけ発行が必要になる SELECT 文に対しては、 <code>PDO::query()</code> の発行を検討してください。 複数回発行が必要な文については、<code>PDO::prepare()</code> による PDOStatement オブジェクトの準備と <code>PDOStatement::execute()</code> による文の発行を行ってください。</p>
		 * @param string $statement <p>準備、実行する SQL ステートメントを指定します。</p> <p>クエリ内のデータは 適切にエスケープ する必要があります。</p>
		 * @return int <p><b>PDO::exec()</b> は、発行した SQL ステートメントによって更新もしくは 削除された行数を返します。 1 行も作用しなかった場合、<b>PDO::exec()</b> は <i>0</i> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p> <p>以下の例は <b>PDO::exec()</b> の戻り値の使用法を間違っています。結果として一行も更新されなかった場合に <code>die()</code> がコールされてしまうからです。</p> <code> &lt;&#63;php<br>$db-&gt;exec() or die(print_r($db-&gt;errorInfo(), true));<br>&#63;&gt;  </code>
		 * @link https://php.net/manual/ja/pdo.exec.php
		 * @see PDO::prepare(), PDO::query(), PDOStatement::execute()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function exec(string $statement): int {}

		/**
		 * データベース接続の属性を取得する
		 * <p>この関数はデータベース接続の属性値を返します。PDOStatement 属性を取得する場合、<code>PDOStatement::getAttribute()</code> を参照ください。</p><p>いくつかのデータベースもしくはドライバは、 データベース接続の属性の全てのをサポートしていないかも知れないことに 注意してください。</p>
		 * @param int $attribute <p><i>PDO_ATTR_&#42;</i> 定数の 1 つを指定します。 データベース接続に適用される定数は以下の通りです。</p><ul> <li><i>PDO::ATTR_AUTOCOMMIT</i></li> <li><i>PDO::ATTR_CASE</i></li> <li><i>PDO::ATTR_CLIENT_VERSION</i></li> <li><i>PDO::ATTR_CONNECTION_STATUS</i></li> <li><i>PDO::ATTR_DRIVER_NAME</i></li> <li><i>PDO::ATTR_ERRMODE</i></li> <li><i>PDO::ATTR_ORACLE_NULLS</i></li> <li><i>PDO::ATTR_PERSISTENT</i></li> <li><i>PDO::ATTR_PREFETCH</i></li> <li><i>PDO::ATTR_SERVER_INFO</i></li> <li><i>PDO::ATTR_SERVER_VERSION</i></li> <li><i>PDO::ATTR_TIMEOUT</i></li> </ul>
		 * @return mixed <p>コールに成功した場合は要求された PDO 属性の値を返します。 コールに失敗した場合は <i>null</i> を返します。</p>
		 * @link https://php.net/manual/ja/pdo.getattribute.php
		 * @see PDO::setAttribute(), PDOStatement::getAttribute(), PDOStatement::setAttribute()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
		 */
		public function getAttribute(int $attribute) {}

		/**
		 * 利用可能な PDO ドライバの配列を返す
		 * <p>この関数は、<code>PDO::__construct()</code> の <code>DSN</code> パラメータで利用可能な全ての有効な PDO ドライバを返します。</p>
		 * @return array <p><b>PDO::getAvailableDrivers()</b> は PDO ドライバ名の配列を返します。 もしドライバが何も利用できない場合、空の配列を返します。</p>
		 * @link https://php.net/manual/ja/pdo.getavailabledrivers.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.3
		 */
		public static function getAvailableDrivers(): array {}

		/**
		 * トランザクション内かどうかを調べる
		 * <p>ドライバ内で、現在トランザクションがアクティブになっているかどうかを調べます。 このメソッドが機能するのは、トランザクションをサポートしているデータベースドライバのみです。</p>
		 * @return bool <p>トランザクションが現在アクティブな場合に <b><code>TRUE</code></b>、 そうでないときに <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdo.intransaction.php
		 * @since PHP 5 >= 5.3.3, Bundled pdo_pgsql, PHP 7
		 */
		public function inTransaction(): bool {}

		/**
		 * 最後に挿入された行の ID あるいはシーケンスの値を返す
		 * <p>最後に挿入された行の ID、 あるいはシーケンスオブジェクトから次の値をを返します。 これは、構成しているドライバに依存します。例えば PDO_PGSQL の場合、<code>name</code> パラメータにシーケンスオブジェクト名を指定する必要があります。</p><p><b>注意</b>:</p><p>このメソッドは、異なる PDO ドライバ間で意味のあるもしくは 一貫性のある結果を返さないかも知れません。 構成しているデータベースが自動インクリメントフィールド、 もしくはシーケンスの概念をサポートしていないかも知れないためです。</p>
		 * @param string $name <p>ID が返されるべきシーケンスオブジェクト名を指定します。</p>
		 * @return string <p>もし <code>name</code> パラメータにシーケンス名が指定されなかった場合、 <b>PDO::lastInsertId()</b> はデータベースに挿入された最後の行の行IDに相当する文字列を返します。</p><p>もし <code>name</code> パラメータにシーケンス名が指定された場合、 <b>PDO::lastInsertId()</b> は指定されたシーケンスオブジェクトから取得した最後の値に相当する 文字列を返します。</p><p>もし PDO ドライバがサポートしていない場合、 <b>PDO::lastInsertId()</b> は <i>IM001</i> SQLSTATE を発生させます。</p>
		 * @link https://php.net/manual/ja/pdo.lastinsertid.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function lastInsertId(string $name = NULL): string {}

		/**
		 * 文を実行する準備を行い、文オブジェクトを返す
		 * <p><code>PDOStatement::execute()</code> メソッドによって実行される SQL ステートメントを準備します。 SQL ステートメントは、文が実行されるときに実際の値に置き換えられる 0 個もしくはそれ以上の名前 (:name) もしくは疑問符 (&#63;) パラメータマークを含むことができます。 名前と疑問符パラメータを同一 SQL ステートメント中で使用することはできません。 どちらか一方か、他のパラメータ形式を使用してください。 ユーザーの入力をバインドする際にはこれらのパラメータを使います。 ユーザーの入力を直接クエリに含めてはいけません。</p><p><code>PDOStatement::execute()</code> をコールする際には、 文に渡すパラメータにはそれぞれ固有のパラメータマークを設定する必要があります。 エミュレーションモードが有効になっていない限り、 ひとつのプリペアドステートメントの中で、同じ名前のパラメータマークを 複数使用することはできません。</p><p><b>注意</b>:</p><p>パラメータマーカーが表せるのは、データリテラルだけです。 リテラルの一部やキーワード、識別子、その他のクエリのパーツをパラメータにバインドすることはできません。 たとえば、SQL 文の IN() 句などで、 ひとつのパラメータに複数の値を割り当てることはできません。</p><p>異なるパラメータを用いて複数回実行されるような文に対し <b>PDO::prepare()</b> と <code>PDOStatement::execute()</code> をコールすることで、 ドライバがクライアントまたはサーバー側にクエリプランやメタ情報を キャッシュさせるよう調整するため、 アプリケーションのパフォーマンスを最適化します。また、 パラメータに手動でクオートする必要がなくなるので SQL インジェクション攻撃から保護する助けになります。</p><p>PDO は元々この機能をサポートしていないドライバに対して プリペアドステートメントとバインドパラメータをエミュレートします。 このため、ある形式をサポートしているがその他の形式をサポートしていない ドライバの場合、名前もしくは疑問符形式のパラメータを他の適当な値に 書き換えることも可能です。</p>
		 * @param string $statement <p>これは対象のデータベースサーバーに対して有効な SQL 文のテンプレートでなければなりません。</p>
		 * @param array $driver_options <p>この配列は、このメソッドによって返される PDOStatement オブジェクトに対して 1 もしくはそれ以上の key=&gt;value の組を含みます。 通常、スクロール可能なカーソルを要求するために <i>PDO::ATTR_CURSOR</i> に <i>PDO::CURSOR_SCROLL</i> を設定する場合に使用することになるでしょう。 いくつかのドライバには、準備する際に利用可能なドライバ固有の オプションがあります。</p>
		 * @return PDOStatement <p>もしデータベースサーバーが正常に文を準備する場合、 <b>PDO::prepare()</b> は PDOStatement オブジェクトを返します。 もしデータベースサーバーが文を準備できなかった場合、 <b>PDO::prepare()</b> は <b><code>FALSE</code></b> を返すか PDOException を発行します (エラー処理 の方法に依存します)。</p> <p><b>注意</b>:</p> <p>プリペアドステートメントをエミュレートする際にデータベースサーバーとの通信は行いません。 したがって <b>PDO::prepare()</b> はステートメントのチェックを行いません。</p>
		 * @link https://php.net/manual/ja/pdo.prepare.php
		 * @see PDO::exec(), PDO::query(), PDOStatement::execute()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function prepare(string $statement, array $driver_options = array()): \PDOStatement {}

		/**
		 * SQL ステートメントを実行し、結果セットを PDOStatement オブジェクトとして返す
		 * <p><b>PDO::query()</b> は、一回の関数コールの中で SQL ステートメントを実行し、このステートメントにより返された 結果セット (ある場合) を PDOStatement オブジェクトとして返します。</p><p>複数回発行する必要があるステートメントの場合、 <code>PDO::prepare()</code> で PDOStatement ステートメントを準備し、 <code>PDOStatement::execute()</code> でそのステートメントを 複数回発行する方がより良いパフォーマンスを得られると実感するでしょう。</p><p><b>PDO::query()</b> を次にコールする前に 結果セット内の全てのデータを取得しない場合、そのコールは失敗します。 <code>PDOStatement::closeCursor()</code> をコールし、 次に <b>PDO::query()</b> をコールする前に PDOStatement オブジェクトに関連付けられたリソースを解放してください。</p><p><b>注意</b>:</p><p>この関数はパラメータをひとつだけしかとらないと記述されていますが、 追加のパラメータを渡すことも可能です。これらのパラメータは、 返される結果のオブジェクトに対して <code>PDOStatement::setFetchMode()</code> をコールするのと同じような扱いになります。</p>
		 * @param string $statement <p>準備、発行する SQL ステートメント。</p> <p>クエリ内のデータは 適切にエスケープ する必要があります。</p>
		 * @return PDOStatement <p><b>PDO::query()</b> は、PDOStatement オブジェクトを返します。 失敗した場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdo.query.php
		 * @see PDO::exec(), PDO::prepare(), PDOStatement::execute()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
		 */
		public function query(string $statement): \PDOStatement {}

		/**
		 * クエリ用の文字列をクオートする
		 * <p><b>PDO::quote()</b> は入力文字列のまわりに引用符を付け (必要であれば) 、 入力文字列にあるシングルクオートをエスケープします。その場合、 構成しているドライバに適したクオート形式が使用されます。</p><p>この関数を SQL の構築に使用する場合、 SQL ステートメントにユーザーの入力値を埋め込むための <b>PDO::quote()</b> を使用する代わりに、 バインドパラメータを用いて SQL を準備するための <code>PDO::prepare()</code> を使用することが<i>強く</i>推奨されます。 バインドパラメータを用いるプリペアドステートメントは、 補間されたクエリした場合に比べ、 移植性や利便性に優れ、SQL インジェクションに対する免疫力を持つだけでなく しばしばより高速で、サーバーやクライアント側でコンパイル済みの形式でクエリを キャッシュする事が可能です。</p><p>全ての PDO ドライバがこのメソッドを実装しているわけではありません (たとえば PDO_ODBC などの例があります)。 代わりにプリペアドステートメントを使用することを検討してください。</p><p>サーバーレベルで設定するなりデータベース接続自身に設定させる (ドライバに依存します) なりして、 文字セットを明示しておく必要があります。この文字セットが <b>PDO::quote()</b> に影響を及ぼします。詳細は  各ドライバのドキュメント を参照ください。</p>
		 * @param string $string <p>クオートされる文字列を指定します。</p>
		 * @param int $parameter_type <p>クオートするスタイルを変更するため、 ドライバにデータ型のヒントを提供します。</p>
		 * @return string <p>理論上安全なクオートされた SQL ステートメントの文字列を返します。 ドライバがこの方法での引用符付けをサポートしていない場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdo.quote.php
		 * @see PDO::prepare(), PDOStatement::execute()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.1
		 */
		public function quote(string $string, int $parameter_type = PDO::PARAM_STR): string {}

		/**
		 * トランザクションをロールバックする
		 * <p><code>PDO::beginTransaction()</code> によって開始された 現在のトランザクションをロールバックします。</p><p>データベースがオートコミットモードに設定されている場合、 この関数はトランザクションをロールバックした後に オートコミットモードを元に戻します。</p><p>MySQL を含むいくつかのデータベースでは、DROP TABLE や CREATE TABLE のようなデータベース定義言語 (DDL) ステートメントがトランザクション中に 発行される場合、暗黙的なコミットが自動的に発行されます。 この暗黙的なコミットにより、そのトランザクション境界で 他のあらゆる変更をロールバックすることができなくなるでしょう。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdo.rollback.php
		 * @see PDO::beginTransaction(), PDO::commit()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function rollBack(): bool {}

		/**
		 * 属性を設定する
		 * <p>データベースハンドルの属性を設定します。 利用可能な通常の属性は以下の一覧の通りです。いくつかのドライバでは、 ドライバ固有の属性を使用することが可能です。</p><p><i>PDO::ATTR_CASE</i>: 強制的にカラム名を指定したケースにする</p><p><i>PDO::CASE_LOWER</i>: 強制的にカラム名を小文字にする</p><p><i>PDO::CASE_NATURAL</i>: データベースドライバによって返されるカラム名をそのままにする</p><p><i>PDO::CASE_UPPER</i>: 強制的にカラム名を大文字にする</p><p><i>PDO::ATTR_ERRMODE</i>: エラーレポート</p><p><i>PDO::ERRMODE_SILENT</i>: エラーコードのみ設定する</p><p><i>PDO::ERRMODE_WARNING</i>: E_WARNING を発生させる</p><p><i>PDO::ERRMODE_EXCEPTION</i>: 例外 を投げる</p><p><i>PDO::ATTR_ORACLE_NULLS</i> (Oracle だけでなく、全てのドライバで利用可能): NULL と空文字列の変換</p><p><i>PDO::NULL_NATURAL</i>: 変換しない</p><p><i>PDO::NULL_EMPTY_STRING</i>: 空文字は <b><code>NULL</code></b> に変換される</p><p><i>PDO::NULL_TO_STRING</i>: NULL は空文字に変換される</p><p><i>PDO::ATTR_STRINGIFY_FETCHES</i>: フェッチする際、数値を文字列に変換する。<code>bool</code> を必要とする</p><p><i>PDO::ATTR_STATEMENT_CLASS</i>: PDOStatement に由来するユーザーが提供するステートメントクラスを設定する。 永続的な PDO インスタンスは使用できない。 <i>array(string classname, array(mixed constructor_args))</i> を必要とする。</p><p><i>PDO::ATTR_TIMEOUT</i>: タイムアウト秒数を指定する。すべてのドライバがこのオプションに対応しているわけではなく、 またドライバによってこのオプションの扱いは異なる。たとえば sqlite は書き込み可能なロックを確保するのをこの秒数まで待ち続けるが、 他のドライバではこの秒数を接続時のタイムアウトや読み込みのタイムアウトとして扱うこともある。 <code>int</code> を渡す。</p><p><i>PDO::ATTR_AUTOCOMMIT</i> (OCI, Firebird そして MySQL で利用可能): それぞれの単一文で自動コミットするかどうか。</p><p><i>PDO::ATTR_EMULATE_PREPARES</i> プリペアドステートメントのエミュレーションを有効または無効にする。 ドライバによってはネイティブのプリペアドステートメントをサポートしていなかったり 完全には対応していなかったりするものがある。この設定を使うと、常に プリペアドステートメントをエミュレートする (<b><code>TRUE</code></b> および プリペアのエミュレートがドライバでサポートされている場合) か、 ネイティブのプリペアドステートメントを使おうとする (<b><code>FALSE</code></b> の場合) かを設定できる。現在のクエリを正しく準備できなかった場合は、常にエミュレート方式を使う。 <code>bool</code> で指定する。</p><p><i>PDO::MYSQL_ATTR_USE_BUFFERED_QUERY</i> (MySQL で利用可能): バッファされたクエリを使用する。</p><p><i>PDO::ATTR_DEFAULT_FETCH_MODE</i>: デフォルトのフェッチモードを設定する。このモードについての説明は <code>PDOStatement::fetch()</code> のドキュメントを参照。</p>
		 * @param int $attribute
		 * @param mixed $value
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdo.setattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function setAttribute(int $attribute, $value): bool {}
	}

	/**
	 * <p>PDO が発するエラーを表します。あなた自身が書いたコードから <b>PDOException</b> をスローしてはいけません。 PHP の例外についての詳細な情報は、 例外 を参照ください。</p>
	 * @link https://php.net/manual/ja/class.pdoexception.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class PDOException extends \RuntimeException {

		/**
		 * @var array <p><code>PDO::errorInfo()</code> あるいは <code>PDOStatement::errorInfo()</code> に対応します。</p>
		 * @link https://php.net/manual/ja/class.pdoexception.php#pdoexception.props.errorinfo
		 */
		public $errorInfo;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>プリペアドステートメントを表します。ステートメント実行後は関連する結果セットを表します。</p>
	 * @link https://php.net/manual/ja/class.pdostatement.php
	 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.0
	 */
	class PDOStatement implements \Traversable {

		/**
		 * @var string <p>使ったクエリ文字列。</p>
		 * @link https://php.net/manual/ja/class.pdostatement.php#pdostatement.props.querystring
		 */
		public $queryString;

		/**
		 * カラムを PHP 変数にバインドする
		 * <p><b>PDOStatement::bindColumn()</b> は、 クエリからの結果セット中にあるカラムにバインドされた特定の値を 取得するための準備をします。 <code>PDOStatement::fetch()</code> もしくは <code>PDOStatement::fetchAll()</code> がコールされる度に、カラムにバインドされた全ての変数は更新されます。</p><p><b>注意</b>:</p><p>カラムに関する情報はステートメントが実行されるまで常に PDO から利用できないため、移植可能なアプリケーションでは <code>PDOStatement::execute()</code>. の <i>後に</i> この関数をコールするようにしてください。</p><p>しかし、LOB カラムをストリームにバインドする際に <i>PgSQL ドライバ</i> を使用するときには、 このメソッドを <code>PDOStatement::execute()</code> の <i>前に</i> コールしなければなりません。 そうしないと、ラージオブジェクトの OID が integer で返されます。</p>
		 * @param mixed $column <p>結果セット中のカラム番号 (1 から始まる) を指定します。 カラム名を使用する場合、 ドライバによって返されるカラムの大文字小文字が一致する必要が あることをご承知おきください。</p>
		 * @param mixed $param <p>カラムがバインドされる PHP 変数名を指定します。</p>
		 * @param int $type <p>パラメータのデータ型を <i>PDO::PARAM_&#42;</i> 定数 で指定します。</p>
		 * @param int $maxlen <p>領域を事前に確保するためのヒント。</p>
		 * @param mixed $driverdata <p>ドライバのオプションパラメータ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.bindcolumn.php
		 * @see PDOStatement::execute(), PDOStatement::fetch(), PDOStatement::fetchAll(), PDOStatement::fetchColumn()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function bindColumn($column, &$param, int $type = NULL, int $maxlen = NULL, $driverdata = NULL): bool {}

		/**
		 * 指定された変数名にパラメータをバインドする
		 * <p>準備された SQL ステートメント中で、 対応する名前もしくは疑問符プレースホルダにパラメータをバインドします。 <code>PDOStatement::bindValue()</code> と異なり、 変数は参照としてバインドされ、<code>PDOStatement::execute()</code> がコールされたときのみ評価されます。</p><p>ほとんどのパラメータは入力パラメータです。つまり、クエリを構築する際、 パラメータは読み込み専用で使用されます。 いくつかのドライバは、出力パラメータとしてデータを返す ストアドプロシージャの実行をサポートしており、 またいくつかのドライバは、データを渡し更新された値を受け取る、 といった入出力パラメータもサポートしています。</p>
		 * @param mixed $parameter <p>パラメータ ID を指定します。名前付けされたプレースホルダを使った文に 対しては、:name 形式のパラメータ名となります。 疑問符プレースホルダを使った文に対しては、1 から始まるパラメータの 位置となります。</p>
		 * @param mixed $variable <p>SQL ステートメントパラメータにバインドする PHP 変数名を指定します。</p>
		 * @param int $data_type <p>パラメータに対して <i>PDO::PARAM_&#42;</i> 定数 を使った明示的なデータ型を指定します。 ストアドプロシージャからの INOUT パラメータの場合、 <code>data_type</code> パラメータに PDO::PARAM_INPUT_OUTPUT ビットを設定するためにビット OR を使用してください。</p>
		 * @param int $length <p>データ型の長さを指定します。パラメータがストアドプロシージャからの OUT パラメータであることを示す場合、 明示的に長さを設定しなければなりません。</p>
		 * @param mixed $driver_options
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.bindparam.php
		 * @see PDO::prepare(), PDOStatement::execute(), PDOStatement::bindValue()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function bindParam($parameter, &$variable, int $data_type = PDO::PARAM_STR, int $length = NULL, $driver_options = NULL): bool {}

		/**
		 * 値をパラメータにバインドする
		 * <p>プリペアドステートメントで使用する SQL 文の中で、 対応する名前あるいは疑問符のプレースホルダに値をバインドします。</p>
		 * @param mixed $parameter <p>パラメータ ID。名前つきプレースホルダを使用する プリペアドステートメントの場合は、 :name 形式のパラメータ名となります。 疑問符プレースホルダを使用するプリペアドステートメントの場合は、 1 から始まるパラメータの位置となります。</p>
		 * @param mixed $value <p>パラメータにバインドする値。</p>
		 * @param int $data_type <p>パラメータに対して <i>PDO::PARAM_&#42;</i> 定数 を使った明示的なデータ型を指定します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.bindvalue.php
		 * @see PDO::prepare(), PDOStatement::execute(), PDOStatement::bindParam()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 1.0.0
		 */
		public function bindValue($parameter, $value, int $data_type = PDO::PARAM_STR): bool {}

		/**
		 * カーソルを閉じてステートメントを再実行できるようにする
		 * <p><b>PDOStatement::closeCursor()</b> は、 他の SQL ステートメントを発行できるようにサーバーへの接続を解放しますが、 ステートメントは再実行可能な状態のまま残されます。</p><p>このメソッドは以前に実行された PDOStatement オブジェクトが行をまだフェッチしていない場合に PDOStatement オブジェクトの実行をサポートしていないデータベースドライバに対して有用です。 もし使用しているデータベースドライバがこの制限を受ける場合、 out-of-sequence エラーが出力されます。</p><p><b>PDOStatement::closeCursor()</b> は、 オプションのドライバ固有のメソッド (最大の効率を得るため) もしくはドライバ固有の関数がインストールされていない場合の汎用的な PDO フォールバックとして実装されています。 汎用的な PDO フォールバックは、PHP スクリプト中に以下のようなコードを書くことと意味的に等価です。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.closecursor.php
		 * @see PDOStatement::execute()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.9.0
		 */
		public function closeCursor(): bool {}

		/**
		 * 結果セット中のカラム数を返す
		 * <p>PDOStatement オブジェクトに相当する結果セットにあるカラム数を返すために <b>PDOStatement::columnCount()</b> を使用します。</p><p>もし PDOStatement オブジェクトが <code>PDO::query()</code> から返された場合、カラム数は直ちに利用可能です。</p><p>もし PDOStatement オブジェクトが <code>PDO::prepare()</code> から返された場合、正確なカラム数は <code>PDOStatement::execute()</code> を実行するまで利用可能になりません。</p>
		 * @return int <p>PDOStatement オブジェクトに相当する結果セットにあるカラム数を返します。 結果セットが空である場合でも同様です。 もし結果セットがなければ、<b>PDOStatement::columnCount()</b> は <i>0</i> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.columncount.php
		 * @see PDO::prepare(), PDOStatement::execute(), PDOStatement::rowCount()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
		 */
		public function columnCount(): int {}

		/**
		 * SQL プリペアドコマンドを出力する
		 * <p>プリペアドステートメントに含まれる以下のような情報を直接出力します。 使用する <i>SQL</i> クエリ、使用するパラメータ数 (<i>Params</i>)、パラメータリスト、パラメータ名、 パラメータの型 (<i>paramtype</i>) をあらわす整数値、 そのキーの名前あるいは位置、そしてクエリ内での位置 (PDO ドライバがサポートしている場合のみ。サポートしていない場合は -1 となります) 、型 (<i>param_type</i>) を表す整数値、boolean 値 <i>is_param</i>。</p><p>これはデバッグ用関数です。結果を標準出力にそのまま出力します。</p><p>ブラウザに直接結果を出力する すべてのものと同様に、出力制御関数 を使用してこの関数の出力をキャプチャーし、(例えば)文字列 (<code>string</code>)に保存することが可能です。</p><p>これは、出力時にステートメント内にあるパラメータのみを出力します。 追加パラメータはステートメントに格納されておらず、出力されません。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/pdostatement.debugdumpparams.php
		 * @see PDO::prepare(), PDOStatement::bindParam(), PDOStatement::bindValue()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.9.0
		 */
		public function debugDumpParams(): void {}

		/**
		 * 文ハンドラにおける直近の操作に関連する SQLSTATE を取得する
		 * @return string <p><b>PDOStatement::errorCode()</b> は PDOStatement オブジェクトを用いて実行された操作に対する エラーコードを取得することを除き、 <code>PDO::errorCode()</code> と等価です。</p>
		 * @link https://php.net/manual/ja/pdostatement.errorcode.php
		 * @see PDO::errorCode(), PDO::errorInfo(), PDOStatement::errorInfo()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function errorCode(): string {}

		/**
		 * 文ハンドラにおける直近の操作に関連する拡張エラー情報を取得する
		 * @return array <p><b>PDOStatement::errorInfo()</b> は、 この文ハンドラによって実行された直近の操作に関するエラー情報を 配列として返します。この配列は次のフィールドを含みます。</p>   要素 情報     0 SQLSTATE エラーコード (これは、ANSI SQL 標準で定義された英数 5 文字の ID)   1 ドライバ固有のエラーコード   2 ドライバ固有のエラーメッセージ
		 * @link https://php.net/manual/ja/pdostatement.errorinfo.php
		 * @see PDO::errorCode(), PDO::errorInfo(), PDOStatement::errorCode()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function errorInfo(): array {}

		/**
		 * プリペアドステートメントを実行する
		 * <p>プリペアドステートメントを実行します。 もし、プリペアドステートメントがパラメータマーカを含む場合、次のいずれかを行わなければなりません。</p><p>パラメータマーカに PHP 変数や値をバインドするため <code>PDOStatement::bindParam()</code> や <code>PDOStatement::bindValue()</code> をコールする。 関連づけされたパラメータマーカがあれば、バインドされた変数は入力値を渡す もしくは出力値を受け取ります。</p><p>あるいは、入力専用のパラメータ値の配列を渡す</p>
		 * @param array $input_parameters <p>実行される SQL 文の中のバインドパラメータと同数の要素からなる、 値の配列。すべての値は <b><code>PDO::PARAM_STR</code></b> として扱われます。</p> <p>ひとつのパラメータに対して複数の値をバインドすることはできません。 例えば、IN() 句の中のひとつのパラメータに対して 2 つの値をバインドすることはできません。</p> <p>指定した数よりも多い値をバインドすることはできません。 <code>input_parameters</code> のキーが <code>PDO::prepare()</code> で指定した SQL にある数より多い場合は、 ステートメントが失敗してエラーが発生します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.execute.php
		 * @see PDO::prepare(), PDOStatement::bindParam(), PDOStatement::fetch(), PDOStatement::fetchAll(), PDOStatement::fetchColumn()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function execute(array $input_parameters = NULL): bool {}

		/**
		 * 結果セットから次の行を取得する
		 * <p>PDOStatementオブジェクトに関連付けられた結果セットから1行取得します。 <code>fetch_style</code> パラメータは、PDO がその行をどの様に返すかを決定します。</p>
		 * @param int $fetch_style <p>次のレコードを呼び出し元に返す方法を制御します。 この値は、<i>PDO::FETCH_&#42;</i> 定数のどれかで、 デフォルトは <b><code>PDO::ATTR_DEFAULT_FETCH_MODE</code></b> の値 (そのデフォルトは <b><code>PDO::FETCH_BOTH</code></b>) です。</p><ul> <li><p><i>PDO::FETCH_ASSOC</i>: は、結果セットに 返された際のカラム名で添字を付けた配列を返します。</p></li> <li><p><i>PDO::FETCH_BOTH</i> (デフォルト): 結果セットに返された際のカラム名と 0 で始まるカラム番号で添字を付けた配列を返します。</p></li> <li><p><i>PDO::FETCH_BOUND</i>: <b><code>TRUE</code></b> を返し、結果セットのカラムの値を <code>PDOStatement::bindColumn()</code> メソッドでバインドされた PHP 変数に代入します。</p></li> <li><p><i>PDO::FETCH_CLASS</i>: 結果セットのカラムがクラス内の名前付けされたプロパティに マッピングされている、要求されたクラスの新規インスタンスを返します。 <i>PDO::FETCH_PROPS_LATE</i> を指定していない限りは、 カラムをマッピングしてからクラスのコンストラクタを呼び出します。 <code>fetch_style</code> に PDO::FETCH_CLASSTYPE が 含まれている場合 (例: <i>PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE</i>) は、最初のカラムの値から クラス名を決定します。</p></li> <li><p><i>PDO::FETCH_INTO</i>: 結果セットのカラムがクラス内の名前付けされたプロパティに マッピングされている要求された既存インスタンスを更新します。</p></li> <li><p><i>PDO::FETCH_LAZY</i>: <i>PDO::FETCH_BOTH</i> と<i>PDO::FETCH_OBJ</i>の 組合せで、オブジェクト変数名を作成します。</p></li> <li><p><i>PDO::FETCH_NAMED</i>: <i>PDO::FETCH_ASSOC</i> と同じ形式の配列を返します。 ただし、同じ名前のカラムが複数あった場合は、そのキーが指す値は、 同じ名前のカラムのすべての値を含む配列になります。</p></li> <li><p><i>PDO::FETCH_NUM</i>: 結果セットに返された際の 0 から始まるカラム番号を添字とする配列を返します。</p></li> <li><p><i>PDO::FETCH_OBJ</i>: 結果セットに返された際のカラム名と同名のプロパティを有する 匿名のオブジェクトを返します。</p></li> <li><p><i>PDO::FETCH_PROPS_LATE</i>: <i>PDO::FETCH_CLASS</i> とともに使用すると、 まずクラスのコンストラクタを呼び出してから、カラムの値をプロパティに代入します。</p></li> </ul>
		 * @param int $cursor_orientation <p>スクロール可能なカーソルを表す PDOStatement オブジェクトの場合、 この値により呼び出し側に返される行を定義します。 この値は、<i>PDO::FETCH_ORI_&#42;</i> 定数のどれかと する必要があり、 <i>PDO::FETCH_ORI_NEXT</i> がデフォルトとなっています。 PDOStatement に対してスクロール可能なカーソルを要求するためには、 <code>PDO::prepare()</code> を用いて SQL ステートメントを 準備する際、 <i>PDO::CURSOR_SCROLL</i> に <i>PDO::ATTR_CURSOR</i> 属性を設定する必要があります。</p>
		 * @param int $cursor_offset
		 * @return mixed <p>この関数が成功した場合の返り値は、取得形式によって異なります。 失敗した場合は常に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.fetch.php
		 * @see PDO::prepare(), PDOStatement::execute(), PDOStatement::fetchAll(), PDOStatement::fetchColumn(), PDOStatement::fetchObject(), PDOStatement::setFetchMode()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function fetch(int $fetch_style = NULL, int $cursor_orientation = PDO::FETCH_ORI_NEXT, int $cursor_offset = 0) {}

		/**
		 * 全ての結果行を含む配列を返す
		 * @param int $fetch_style <p><code>PDOStatement::fetch()</code> に文章化されているような 返される配列の内容を制御します。 デフォルトは <b><code>PDO::ATTR_DEFAULT_FETCH_MODE</code></b> の値 (そのデフォルトは <b><code>PDO::FETCH_BOTH</code></b>) です。</p> <p>結果セットから単一カラムの全ての値を含む配列を返す場合、 <b><code>PDO::FETCH_COLUMN</code></b> を指定します。 <code>fetch_argument</code> パラメータにどのカラムを返すかを 指定することができます。</p> <p>結果セットから単一カラムの一意な値のみ取得する場合、 <b><code>PDO::FETCH_UNIQUE</code></b> をビット OR した <b><code>PDO::FETCH_COLUMN</code></b> を指定します。</p> <p>指定したカラムの値によってグループ化した連想配列を返す場合、 <b><code>PDO::FETCH_GROUP</code></b> をビット OR した <b><code>PDO::FETCH_COLUMN</code></b> を指定します。</p>
		 * @param mixed $fetch_argument <p>この引数は、<code>fetch_style</code> の値によって意味が異なります。</p><ul> <li> <p><b><code>PDO::FETCH_COLUMN</code></b>: ここで指定した、 0 から始まる番号のカラムを返します。</p> </li> <li> <p><b><code>PDO::FETCH_CLASS</code></b>: ここで指定したクラスのインスタンスを返します。各行のカラムがクラスのプロパティ名にマッピングされます。</p> </li> <li> <p><b><code>PDO::FETCH_FUNC</code></b>: ここで指定した関数をコールした結果を返します。各行のカラムを関数コール時のパラメータとします。</p> </li> </ul>
		 * @param array $ctor_args <p><code>fetch_style</code> が <b><code>PDO::FETCH_CLASS</code></b> のときに使う、独自のクラスコンストラクタへの引数。</p>
		 * @return array <p><b>PDOStatement::fetchAll()</b> は、 結果セットに残っている全ての行を含む配列を返します。 この配列は、カラム値の配列もしくは各カラム名に対応するプロパティを持つオブジェクトとして各行を表します。 取得結果がゼロ件だった場合は空の配列を返し、 失敗した場合は <b><code>FALSE</code></b> を返します。</p><p>大きな結果セットをフェッチするためにこのメソッドを使用することは、 システムとネットワークリソースに大量の要求を行うことになります。 PHP で全てのデータ処理と操作を行うよりも、データベースサーバー側で 結果セットを操作することを検討してください。例えば、PHP で処理を行う前に SQL で WHERE 句や ORDER BY 句を使用し、結果を制限することです。</p>
		 * @link https://php.net/manual/ja/pdostatement.fetchall.php
		 * @see PDO::query(), PDOStatement::fetch(), PDOStatement::fetchColumn(), PDO::prepare(), PDOStatement::setFetchMode()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function fetchAll(int $fetch_style = NULL, $fetch_argument = NULL, array $ctor_args = array()): array {}

		/**
		 * 結果セットの次行から単一カラムを返す
		 * <p>結果セットの次行から単一カラムを返します。 行がもうない場合には <b><code>FALSE</code></b> を返します。</p><p><b>注意</b>:</p><p><b>PDOStatement::fetchColumn()</b> は、boolean のカラムを取得するときに使っていけません。 boolean 値としての <b><code>FALSE</code></b> と、もう取得する行がない場合の <b><code>FALSE</code></b> を区別できないからです。 かわりに <code>PDOStatement::fetch()</code> を使いましょう。</p>
		 * @param int $column_number <p>行から処理したい 0 で始まるカラム番号を指定します。 何も値が与えられない場合、 <b>PDOStatement::fetchColumn()</b> は最初のカラムをフェッチします。</p>
		 * @return mixed <p><b>PDOStatement::fetchColumn()</b> は結果セットの次行から単一カラムを返します。 それ以上行がない場合、<b><code>FALSE</code></b> を返します。</p> <b>警告</b> <p><b>PDOStatement::fetchColumn()</b> を使用してデータを処理する場合、同一行から 他のカラムを返す方法はありません。</p>
		 * @link https://php.net/manual/ja/pdostatement.fetchcolumn.php
		 * @see PDO::query(), PDOStatement::fetch(), PDOStatement::fetchAll(), PDO::prepare(), PDOStatement::setFetchMode()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.9.0
		 */
		public function fetchColumn(int $column_number = 0) {}

		/**
		 * 次の行を取得し、それをオブジェクトとして返す
		 * <p>次の行を取得し、それをオブジェクトとして返します。この関数は、 <code>PDOStatement::fetch()</code> で <b><code>PDO::FETCH_CLASS</code></b> あるいは <b><code>PDO::FETCH_OBJ</code></b> を指定することの代替関数となります。</p><p>オブジェクトを取得する際には、各カラムの値を対応するプロパティに代入してから、 そのコンストラクタを実行します。</p>
		 * @param string $class_name <p>作成されるクラスの名前。</p>
		 * @param array $ctor_args <p>この配列の要素がコンストラクタに渡されます。</p>
		 * @return mixed <p>カラム名に対応するプロパティを保持する、要求されたクラスの インスタンスを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.fetchobject.php
		 * @see PDOStatement::fetch()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.4
		 */
		public function fetchObject(string $class_name = "stdClass", array $ctor_args = NULL) {}

		/**
		 * 文の属性を取得する
		 * <p>文の属性を取得します。現時点で共通の属性は存在しませんが、 ドライバ固有の属性のみ存在します。</p><p><i>PDO::ATTR_CURSOR_NAME</i> (Firebird と ODBC 固有): <i>UPDATE ... WHERE CURRENT OF</i> に対するカーソル名を取得する</p>
		 * @param int $attribute
		 * @return mixed <p>属性の値を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.getattribute.php
		 * @see PDO::getAttribute(), PDO::setAttribute(), PDOStatement::setAttribute()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
		 */
		public function getAttribute(int $attribute) {}

		/**
		 * 結果セットのカラムに対するメタデータを返す
		 * <p>結果セットの 0 から始まるカラムに対するメタデータを連想配列で取得します。</p><p>PDO ドライバの全てが <b>PDOStatement::getColumnMeta()</b>. をサポートしているわけではありません。</p><p>以下のドライバがこのメソッドをサポートします。</p>
		 * @param int $column <p>結果セットの 0 から始まるカラムを指定します。</p>
		 * @return array <p>1つのカラムについてのメタデータに相当する次の値を含んだ連想配列を返します。</p> <b>カラムのメタデータ</b>     名前 値     <i>native_type</i> カラム値を表現するために使用される PHP のネイティブ型   <i>driver:decl_type</i> データベースにおけるカラム値を表現するために使用される SQL 型。 もし、結果セットのカラムが関数から返される場合、 この値は <b>PDOStatement::getColumnMeta()</b>. よって返されません。    <i>flags</i> このカラムにセットされているあらゆるフラグ   <i>name</i> データベースによって返されるこのカラムの名前   <i>table</i> データベースによって返されるこのカラムのテーブル名   <i>len</i> カラム長。浮動小数点数以外の型については通常 <i>-1</i> となる。   <i>precision</i> カラムの数値精度。浮動小数点数以外の型については通常 <i>0</i> となる。   <i>pdo_type</i>  <i>PDO::PARAM_&#42;</i> 定数 によって表現されるカラムの型   <p>要求されたカラムが結果セットに存在しない、 もしくは結果セットが存在しない場合、<b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.getcolumnmeta.php
		 * @see PDOStatement::columnCount(), PDOStatement::rowCount()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
		 */
		public function getColumnMeta(int $column): array {}

		/**
		 * 複数の行セットを返す文ハンドラで次の行セットに移動する
		 * <p>いくつかのデータベースサーバーは、1つ以上の行セット (結果セットとしても知られる) を返すストアドプロシージャをサポートしています。 <b>PDOStatement::nextRowSet()</b> により、2 番目以降の PDOStatement オブジェクトに関連する行セットにアクセスすることができます。 それぞれの行セットは、 前の行セットと異なるカラムセットを含むことができます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.nextrowset.php
		 * @see PDOStatement::columnCount(), PDOStatement::execute(), PDOStatement::getColumnMeta(), PDO::query()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
		 */
		public function nextRowset(): bool {}

		/**
		 * 直近の SQL ステートメントによって作用した行数を返す
		 * <p><b>PDOStatement::rowCount()</b> は 相当する <i>PDOStatement</i> オブジェクトによって実行された 直近の DELETE, INSERT, UPDATE 文によって作用した行数を返します。</p><p>関連する <i>PDOStatement</i> によって実行された直近の SQL ステートメントが SELECT 文の場合、いくつかのデータベースは文によって返された 行数を返すかも知れません。しかしながら、 この振る舞いは全てのデータベースで保証されていません。 さまざまな場所で使用するアプリケーションでは、 これに頼ってはいけません。</p>
		 * @return int <p>行の数を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.rowcount.php
		 * @see PDOStatement::columnCount(), PDOStatement::fetchColumn(), PDO::query()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.1.0
		 */
		public function rowCount(): int {}

		/**
		 * 文の属性を設定する
		 * <p>文の属性を設定します。現時点で共通の属性は存在しませんが、 ドライバ固有の属性のみ存在します。</p><p><i>PDO::ATTR_CURSOR_NAME</i> (Firebird と ODBC 固有): <i>UPDATE ... WHERE CURRENT OF</i> に対するカーソル名を取得する</p>
		 * @param int $attribute
		 * @param mixed $value
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.setattribute.php
		 * @see PDO::getAttribute(), PDO::setAttribute(), PDOStatement::getAttribute()
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
		 */
		public function setAttribute(int $attribute, $value): bool {}

		/**
		 * この文に対するデフォルトのフェッチモードを設定する
		 * @param int $mode <p>フェッチモードは、<i>PDO::FETCH_&#42;</i> 定数の 1 つでなければなりません。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/pdostatement.setfetchmode.php
		 * @since PHP 5 >= 5.1.0, PHP 7, PECL pdo >= 0.2.0
		 */
		public function setFetchMode(int $mode): bool {}
	}

	/**
	 * <p>BOOL</p> <p>自動コミットが設定されている場合に TRUE、それ以外の場合に FALSE。</p> <p>dbh-&gt;auto_commit がこの値を含みます。PDO によって直接処理されます。</p>
	 */
	define('PDO_ATTR_AUTOCOMMIT', null);

	/**
	 * <p>LONG</p> <p>PDO によって処理・操作が行われます。</p>
	 */
	define('PDO_ATTR_CASE', null);

	/**
	 * <p>STRING</p> <p>このドライバがサポートしているクライアントとそのバージョンを、 人間が理解できる形式 の文字列で表したもの。</p>
	 */
	define('PDO_ATTR_CLIENT_VERSION', null);

	/**
	 * <p>LONG</p> <p>未定義の値。</p>
	 */
	define('PDO_ATTR_CONNECTION_STATUS', null);

	/**
	 * <p>LONG</p>   PDO_CURSOR_FWDONLY  <p>先送りのみのカーソル</p>   PDO_CURSOR_SCROLL  <p>スクロール可能なカーソル</p>
	 */
	define('PDO_ATTR_CURSOR', null);

	/**
	 * <p>STRING</p> <p>where current in &lt;名前&gt; 形式の SQL ステートメントで使用する、データベースカーソルの名前を 表す文字列。</p>
	 */
	define('PDO_ATTR_CURSOR_NAME', null);

	/**
	 * <p>LONG</p> <p>PDO によって処理されます。</p>
	 */
	define('PDO_ATTR_ERRMODE', null);

	/**
	 * <p>LONG</p> <p>ドライバがサポートしているプリフェッチサイズの値。</p>
	 */
	define('PDO_ATTR_PREFETCH', null);

	/**
	 * <p>STRING</p> <p>人間が理解できる形式 のサーバーの説明。</p>
	 */
	define('PDO_ATTR_SERVER_INFO', null);

	/**
	 * <p>STRING</p> <p>このドライバが現在接続しているサーバーとそのバージョンを、 人間が理解できる形式 の文字列で表したもの。</p>
	 */
	define('PDO_ATTR_SERVER_VERSION', null);

	/**
	 * <p>LONG</p> <p>データベース操作がタイムアウトするまでの長さ。</p>
	 */
	define('PDO_ATTR_TIMEOUT', null);

	/**
	 * <p>先送りのみのカーソル</p>
	 */
	define('PDO_CURSOR_FWDONLY', null);

	/**
	 * <p>スクロール可能なカーソル</p>
	 */
	define('PDO_CURSOR_SCROLL', null);

	/**
	 * <p>値</p>
	 */
	define('属性', null);

}
