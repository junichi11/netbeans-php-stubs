<?php

// Start of PDO v.7.0.19

/**
 * PDO が発するエラーを表します。あなた自身が書いたコードから
 * <b>PDOException</b> をスローしてはいけません。
 * PHP の例外についての詳細な情報は、
 * 例外
 * を参照ください。
 * @link http://php.net/manual/ja/class.pdoexception.php
 */
class PDOException extends RuntimeException implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;
	public $errorInfo;


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
 * PHP とデータベースサーバーの間の接続を表します。
 * @link http://php.net/manual/ja/class.pdo.php
 */
class PDO  {

	/**
	 * ブールデータ型を表します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_BOOL = 5;

	/**
	 * SQL NULL データ型を表します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_NULL = 0;

	/**
	 * SQL INTEGER データ型を表します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_INT = 1;

	/**
	 * SQL CHAR, VARCHAR, または他の文字列データ型を表します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_STR = 2;

	/**
	 * SQL ラージオブジェクト型を表します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_LOB = 3;
	const PARAM_STMT = 4;

	/**
	 * パラメータがストアドプロシージャ用の入力パラメータであることを指定します。
	 * この値は、PDO::PARAM_* データ型とのビットORとして指定する必要があります。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_INPUT_OUTPUT = 2147483648;

	/**
	 * 割り当てられたときに発生するイベント。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_EVT_ALLOC = 0;

	/**
	 * 割り当てが解除されたときに発生するイベント。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_EVT_FREE = 1;

	/**
	 * プリペアドステートメントの実行前に発生するイベント。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_EVT_EXEC_PRE = 2;

	/**
	 * プリペアドステートメントの実行後に発生するイベント。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_EVT_EXEC_POST = 3;

	/**
	 * 結果セットから結果を取得する前に発生するイベント。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_EVT_FETCH_PRE = 4;

	/**
	 * 結果セットから結果を取得した後に発生するイベント。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_EVT_FETCH_POST = 5;

	/**
	 * バインドパラメータの登録時に発生するイベント。
	 * これにより、ドライバがパラメータ名を正規化できるようになります。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const PARAM_EVT_NORMALIZE = 6;

	/**
	 * 取得する方法として、
	 * 結果セットが返すカラム名と同じ名前の変数を有するオブジェクトとして各行を返す方法を
	 * 指定します。
	 * <b>PDO::FETCH_LAZY</b> は、アクセスされたものと同じ名前のオブジェクト変数を作成します。
	 * <b>PDOStatement::fetchAll</b> の中では使えません。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_LAZY = 1;

	/**
	 * 結果セットの対応するカラム名にふられているものと同じキーを付けた
	 * 連想配列として各行を返す取得方法を指定します。
	 * もし結果セットが複数のカラムを同名で含む場合、
	 * <b>PDO::FETCH_ASSOC</b> はカラム名毎に 1 つの値のみ返します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_ASSOC = 2;

	/**
	 * 結果セットの対応するカラム番号にふられているものと同じ添字を付けた
	 * 配列として各行を返す取得方法を指定します。番号は0から始まります。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_NUM = 3;

	/**
	 * 結果セットと同じカラム名と0から始まるカラム番号を付けた配列として各行を返す
	 * 方法を指定します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_BOTH = 4;

	/**
	 * 結果セットが返すカラム名と同じ名前のプロパティを有する
	 * オブジェクトとして各行を返す方法を指定します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_OBJ = 5;

	/**
	 * 結果セットのカラムの値を
	 * <b>PDOStatement::bindParam</b> または
	 * <b>PDOStatement::bindColumn</b> メソッドでバインドされた
	 * PHP変数に代入し、TRUEを返すという取得方法を指定します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_BOUND = 6;

	/**
	 * 結果セットの次の行から指定された一つのカラムのみを返す取得方法を指定します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_COLUMN = 7;

	/**
	 * カラムをクラスのプロパティにマップしつつ、
	 * 指定されたクラスの新規インスタンスを返す取得方法を指定します。
	 * 要求されたクラスにプロパティが存在しない場合は、マジックメソッド
	 * <b>__set</b>
	 * がコールされます。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_CLASS = 8;

	/**
	 * カラムをクラスのプロパティにマップしつつ、
	 * 指定されたクラスの既存のインスタンスを更新する取得方法を指定します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_INTO = 9;

	/**
	 * データをその場で扱う方法を完全にカスタマイズできるようにします
	 * (<b>PDOStatement::fetchAll</b> の中でしか使えません)。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_FUNC = 10;

	/**
	 * 値で返すグループ。
	 * <b>PDO::FETCH_COLUMN</b> あるいは
	 * <b>PDO::FETCH_KEY_PAIR</b> と組み合わせます。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_GROUP = 65536;

	/**
	 * 一意な値だけを取得します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_UNIQUE = 196608;

	/**
	 * ふたつのカラムからなる結果を配列で取得します。最初のカラムの値がキー、二番目のカラムの内容が値となります。
	 * PHP 5.2.3 以降で使用可能です。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_KEY_PAIR = 12;

	/**
	 * 最初のカラムの値からクラス名を決定します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_CLASSTYPE = 262144;

	/**
	 * <b>PDO::FETCH_INTO</b> と同様ですが、
	 * シリアライズした文字列としてオブジェクトを提供します。
	 * PHP 5.1.0 以降で使用可能です。
	 * PHP 5.3.0 以降、このフラグを設定した場合はコンストラクタが呼ばれないようになりました。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_SERIALIZE = 524288;

	/**
	 * コンストラクタを呼んでからプロパティを設定します。
	 * PHP 5.2.0 以降で使用可能です。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_PROPS_LATE = 1048576;

	/**
	 * 結果セットの対応するカラム名にふられているものと同じキーを付けた
	 * 連想配列として各行を返す取得方法を指定します。
	 * もし結果セットが複数のカラムを同名で含む場合、
	 * <b>PDO::FETCH_NAMED</b> はカラム名毎に値の配列を返します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_NAMED = 11;

	/**
	 * この値が <b>FALSE</b> の場合、PDO は接続がトランザクションを開始できるように
	 * オートコミットを無効にしようとします。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ATTR_AUTOCOMMIT = 0;

	/**
	 * 独自アプリケーションにおけるメモリ使用量に対する速度のバランスを
	 * 調整するためのプリフェッチサイズを設定します。
	 * 全てのデータベースとドライバの組み合わせでプリフェッチサイズの設定を
	 * サポートしているわけではありません。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ATTR_PREFETCH = 1;

	/**
	 * データベースとの通信に対するタイムアウト値を秒で設定します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ATTR_TIMEOUT = 2;
	const ATTR_ERRMODE = 3;
	const ATTR_SERVER_VERSION = 4;
	const ATTR_CLIENT_VERSION = 5;
	const ATTR_SERVER_INFO = 6;
	const ATTR_CONNECTION_STATUS = 7;

	/**
	 * PDO::CASE_* 定数で指定されたケースにカラム名を変更します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ATTR_CASE = 8;
	const ATTR_CURSOR_NAME = 9;
	const ATTR_CURSOR = 10;

	/**
	 * 空文字を SQL の NULL 値に変換します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ATTR_ORACLE_NULLS = 11;

	/**
	 * 新規接続を生成するよりもむしろ持続的接続を要求します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ATTR_PERSISTENT = 12;
	const ATTR_STATEMENT_CLASS = 13;

	/**
	 * 結果セット中の各カラム名にテーブル名を追加します。
	 * テーブル名とカラム名は、小数点 (.) で区切られます。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ATTR_FETCH_TABLE_NAMES = 14;

	/**
	 * 結果セット中の各カラム名にカタログ名を追加します。
	 * カタログ名とカラム名は、小数点 (.) で区切られます。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ATTR_FETCH_CATALOG_NAMES = 15;

	/**
	 * ドライバ名を返します。
	 * <p>
	 * <b>PDO::ATTR_DRIVER_NAME</b> の使用例
	 * <code>
	 * if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
	 * echo "mysql 上で動作しています。何か mysql 固有のことをここで行います\n";
	 * }
	 * </code>
	 * </p>
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ATTR_DRIVER_NAME = 16;
	const ATTR_STRINGIFY_FETCHES = 17;
	const ATTR_MAX_COLUMN_LEN = 18;

	/**
	 * PHP 5.1.3 以降で使用可能です。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ATTR_EMULATE_PREPARES = 20;

	/**
	 * PHP 5.2.0 以降で使用可能です。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ATTR_DEFAULT_FETCH_MODE = 19;

	/**
	 * エラー時にエラーもしくは例外を発生しません。
	 * 開発者の方は明示的にエラーをチェックするようにしてください。
	 * これはデフォルトのモードです。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ERRMODE_SILENT = 0;

	/**
	 * エラーが発生した場合、PHP の <b>E_WARNING</b> メッセージを発行します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ERRMODE_WARNING = 1;

	/**
	 * エラーが発生した場合、PDOException を投げます。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ERRMODE_EXCEPTION = 2;

	/**
	 * カラム名をデータベースドライバにより返されたままにします。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const CASE_NATURAL = 0;

	/**
	 * カラム名を小文字にします。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const CASE_LOWER = 2;

	/**
	 * カラム名を大文字にします。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const CASE_UPPER = 1;
	const NULL_NATURAL = 0;
	const NULL_EMPTY_STRING = 1;
	const NULL_TO_STRING = 2;

	/**
	 * SQLSTATE '00000' は SQL
	 * ステートメントがエラーや警告がなく発行に成功したことを意味します。
	 * この定数はエラーが発生したかどうかを判別するために
	 * <b>PDO::errorCode</b> もしくは
	 * <b>PDOStatement::errorCode</b> をチェックする際に
	 * 便利です。この場合、通常はエラー状態を発生したメソッドからの戻りコードを
	 * 検査することによって検知します。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const ERR_NONE = 00000;

	/**
	 * 結果セットの次の行を取得します。スクローラブルなカーソルでのみ有効です。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_ORI_NEXT = 0;

	/**
	 * 結果セットの前の行を取得します。スクローラブルなカーソルでのみ有効です。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_ORI_PRIOR = 1;

	/**
	 * 結果セットの先頭の行を取得します。スクローラブルなカーソルでのみ有効です。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_ORI_FIRST = 2;

	/**
	 * 結果セットの最後の行を取得します。スクローラブルなカーソルでのみ有効です。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_ORI_LAST = 3;

	/**
	 * 結果セットから行番号で指定した行を取得します。スクローラブルなカーソルでのみ有効です。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_ORI_ABS = 4;

	/**
	 * 結果セットのカーソルの現在の位置を基準とする相対位置により指定された行を
	 * 取得します。スクローラブルなカーソルでのみ有効です。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const FETCH_ORI_REL = 5;

	/**
	 * 前進のみ可能なカーソルを有する <b>PDOStatement</b> オブジェクトを生成します。
	 * これにより、アプリケーションの性能は改善しますが、
	 * PDOStatementオブジェクトは前方にある結果セットから一度に一行を
	 * 取得するという制約を受けます。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const CURSOR_FWDONLY = 0;

	/**
	 * スクローラブルカーソルを有する <b>PDOStatement</b> オブジェクトを作成します。
	 * 結果セットから取得した行を制御するための PDO::FETCH_ORI_* 定数を指定して
	 * ください。
	 * @link http://php.net/manual/ja/pdo.constants.php
	 */
	const CURSOR_SCROLL = 1;

	/**
	 * <p>
	 * PHP 5.3.0 以降で使用可能。
	 * </p>
	 * <p>
	 * 日付フォーマットを設定します。
	 * </p>
	 * @link http://php.net/manual/ja/pdo-firebird.constants.php
	 */
	const FB_ATTR_DATE_FORMAT = 1000;

	/**
	 * <p>
	 * 時刻フォーマットを設定します。
	 * </p>
	 * <p>
	 * PHP 5.3.0 以降で使用可能。
	 * </p>
	 * @link http://php.net/manual/ja/pdo-firebird.constants.php
	 */
	const FB_ATTR_TIME_FORMAT = 1001;

	/**
	 * <p>
	 * タイムスタンプフォーマットを設定します。
	 * </p>
	 * <p>
	 * PHP 5.3.0 以降で使用可能。
	 * </p>
	 * @link http://php.net/manual/ja/pdo-firebird.constants.php
	 */
	const FB_ATTR_TIMESTAMP_FORMAT = 1002;

	/**
	 * <b>PDOStatement</b> でこの属性を <b>TRUE</b> に設定すると、
	 * MySQL ドライバはバッファ版の MySQL API を使用します。
	 * 移植性の高いコードを書くには、代わりに
	 * <b>PDOStatement::fetchAll</b> を使用すべきです。
	 * <p>
	 * mysql でクエリのバッファリングを強制する
	 * <code>
	 * if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
	 * $stmt = $db->prepare('select * from foo',
	 * array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true));
	 * } else {
	 * die("このアプリケーションは mysql でしか動作しません。代わりに \$stmt->fetchAll() を使用すべきです");
	 * }
	 * </code>
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_USE_BUFFERED_QUERY = 1000;

	/**
	 * <p>
	 * LOAD LOCAL INFILE を有効にします。
	 * </p>
	 * <p>
	 * この定数を使うのは、新しいデータベースハンドルを作るときの
	 * <i>driver_options</i> 配列内だけであることに注意しましょう。
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_LOCAL_INFILE = 1001;

	/**
	 * <p>
	 * MySQL サーバーへの接続時に実行するコマンドを指定します。
	 * 再接続の際には自動的に再実行されます。
	 * </p>
	 * <p>
	 * この定数を使うのは、新しいデータベースハンドルを作るときの
	 * <i>driver_options</i> 配列内だけであることに注意しましょう。
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_INIT_COMMAND = 1002;

	/**
	 * <p>
	 * ネットワーク通信の圧縮を有効にします。PHP 5.3.11 以降では、
	 * mysqlnd を使ってコンパイルした場合でもサポートされています。
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_COMPRESS = 1003;

	/**
	 * <p>
	 * プリペアドステートメントではなく、直接クエリを実行します。
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_DIRECT_QUERY = 1004;

	/**
	 * <p>
	 * 変更された行数ではなく、見つかった (マッチした) 行数を返します。
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_FOUND_ROWS = 1005;

	/**
	 * <p>
	 * 関数名の後に続く空白を許可します。
	 * すべての関数名を予約語にします。
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_IGNORE_SPACE = 1006;

	/**
	 * <p>
	 * </p>
	 * <p>
	 * これが使えるようになった PHP のバージョンは 5.3.7.
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_SSL_KEY = 1007;

	/**
	 * <p>
	 * </p>
	 * <p>
	 * これが使えるようになった PHP のバージョンは 5.3.7.
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_SSL_CERT = 1008;

	/**
	 * <p>
	 * </p>
	 * <p>
	 * これが使えるようになった PHP のバージョンは 5.3.7.
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_SSL_CA = 1009;

	/**
	 * <p>
	 * </p>
	 * <p>
	 * これが使えるようになった PHP のバージョンは 5.3.7.
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_SSL_CAPATH = 1010;

	/**
	 * <p>
	 * </p>
	 * <p>
	 * これが使えるようになった PHP のバージョンは 5.3.7.
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_SSL_CIPHER = 1011;
	const MYSQL_ATTR_SERVER_PUBLIC_KEY = 1012;

	/**
	 * <p>
	 * <b>FALSE</b> にすると、<b>PDO::prepare</b>
	 * や <b>PDO::query</b> でのマルチクエリの実行を無効にします。
	 * </p>
	 * <p>
	 * この定数が使えるのは、データベースハンドルを新規作成する際の <i>driver_options</i>
	 * 配列内だけであることに注意しましょう。
	 * </p>
	 * <p>
	 * これが使えるようになった PHP のバージョンは 5.5.21 および PHP 5.6.5。
	 * </p>
	 * @link http://php.net/manual/ja/pdo-mysql.constants.php
	 */
	const MYSQL_ATTR_MULTI_STATEMENTS = 1013;
	const MYSQL_ATTR_SSL_VERIFY_SERVER_CERT = 1014;
	const ODBC_ATTR_USE_CURSOR_LIBRARY = 1000;
	const ODBC_ATTR_ASSUME_UTF8 = 1001;
	const ODBC_SQL_USE_IF_NEEDED = 0;
	const ODBC_SQL_USE_DRIVER = 2;
	const ODBC_SQL_USE_ODBC = 1;
	const PGSQL_ATTR_DISABLE_PREPARES = 1000;
	const PGSQL_TRANSACTION_IDLE = 0;
	const PGSQL_TRANSACTION_ACTIVE = 1;
	const PGSQL_TRANSACTION_INTRANS = 2;
	const PGSQL_TRANSACTION_INERROR = 3;
	const PGSQL_TRANSACTION_UNKNOWN = 4;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * データベースへの接続を表す PDO インスタンスを生成する
	 * @link http://php.net/manual/ja/pdo.construct.php
	 * @param string $dsn <p>
	 * <i>dsn</i> は、DSN 文字列を定義する
	 * <i>php.ini</i> の pdo.dsn.name
	 * へマップする名前 <i>name</i> からなります。
	 * </p>
	 * <p>
	 * エイリアスは、.htaccess や httpd.conf ではなく、
	 * <i>php.ini</i> で定義する必要があります。
	 * </p>
	 * @param string $username [optional]
	 * @param string $password [optional]
	 * @param array $options [optional]
	 */
	public function __construct(string $dsn, string $username = null, string $password = null, array $options = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * 文を実行する準備を行い、文オブジェクトを返す
	 * @link http://php.net/manual/ja/pdo.prepare.php
	 * @param string $statement <p>
	 * これは対象のデータベースサーバーに対して有効な SQL
	 * 文のテンプレートでなければなりません。
	 * </p>
	 * @param array $driver_options [optional] <p>
	 * この配列は、このメソッドによって返される PDOStatement
	 * オブジェクトに対して 1
	 * もしくはそれ以上の key=&gt;value の組を含みます。
	 * 通常、スクロール可能なカーソルを要求するために
	 * PDO::ATTR_CURSOR に
	 * PDO::CURSOR_SCROLL
	 * を設定する場合に使用することになるでしょう。
	 * いくつかのドライバには、準備する際に利用可能なドライバ固有の
	 * オプションがあります。
	 * </p>
	 * @return PDOStatement もしデータベースサーバーが正常に文を準備する場合、
	 * <b>PDO::prepare</b> は
	 * <b>PDOStatement</b> オブジェクトを返します。
	 * もしデータベースサーバーが文を準備できなかった場合、
	 * <b>PDO::prepare</b> は <b>FALSE</b> を返すか
	 * <b>PDOException</b> を発行します
	 * (エラー処理 の方法に依存します)。
	 * </p>
	 * <p>
	 * プリペアドステートメントをエミュレートする際にデータベースサーバーとの通信は行いません。
	 * したがって <b>PDO::prepare</b> はステートメントのチェックを行いません。
	 */
	public function prepare(string $statement, array $driver_options = array()): PDOStatement {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * トランザクションを開始する
	 * @link http://php.net/manual/ja/pdo.begintransaction.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function beginTransaction(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * トランザクションをコミットする
	 * @link http://php.net/manual/ja/pdo.commit.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function commit(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * トランザクションをロールバックする
	 * @link http://php.net/manual/ja/pdo.rollback.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function rollBack(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.3, Bundled pdo_pgsql, PHP 7)<br/>
	 * トランザクション内かどうかを調べる
	 * @link http://php.net/manual/ja/pdo.intransaction.php
	 * @return bool トランザクションが現在アクティブな場合に <b>TRUE</b>、
	 * そうでないときに <b>FALSE</b> を返します。
	 */
	public function inTransaction(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * 属性を設定する
	 * @link http://php.net/manual/ja/pdo.setattribute.php
	 * @param int $attribute
	 * @param mixed $value
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setAttribute(int $attribute, $value): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * SQL ステートメントを実行し、作用した行数を返す
	 * @link http://php.net/manual/ja/pdo.exec.php
	 * @param string $statement <p>
	 * 準備、実行する SQL ステートメントを指定します。
	 * </p>
	 * <p>
	 * クエリ内のデータは 適切にエスケープ
	 * する必要があります。
	 * </p>
	 * @return int <b>PDO::exec</b> は、発行した SQL
	 * ステートメントによって更新もしくは
	 * 削除された行数を返します。
	 * 1 行も作用しなかった場合、<b>PDO::exec</b> は
	 * 0 を返します。
	 * </p>
	 * この関数は論理値
	 * <b>FALSE</b> を返す可能性がありますが、<b>FALSE</b> として評価される値を返す可能性もあります。
	 * 詳細については 論理値の
	 * セクションを参照してください。この関数の返り値を調べるには
	 * ===演算子 を
	 * 使用してください。
	 * <p>
	 * 以下の例は <b>PDO::exec</b>
	 * の戻り値の使用法を間違っています。結果として一行も更新されなかった場合に
	 * <b>die</b> がコールされてしまうからです。
	 * <code>
	 * $db->exec() or die(print_r($db->errorInfo(), true));
	 * </code>
	 */
	public function exec(string $statement): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * SQL ステートメントを実行し、結果セットを PDOStatement オブジェクトとして返す
	 * @link http://php.net/manual/ja/pdo.query.php
	 * @param string $statement <p>
	 * 準備、発行する SQL ステートメント。
	 * </p>
	 * <p>
	 * クエリ内のデータは 適切にエスケープ
	 * する必要があります。
	 * </p>
	 * @return PDOStatement <b>PDO::query</b> は、PDOStatement オブジェクトを返します。
	 * 失敗した場合は <b>FALSE</b> を返します。
	 */
	public function query(string $statement): PDOStatement {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * 最後に挿入された行の ID あるいはシーケンスの値を返す
	 * @link http://php.net/manual/ja/pdo.lastinsertid.php
	 * @param string $name [optional] <p>
	 * ID が返されるべきシーケンスオブジェクト名を指定します。
	 * </p>
	 * @return string もし <i>name</i>
	 * パラメータにシーケンス名が指定されなかった場合、
	 * <b>PDO::lastInsertId</b>
	 * はデータベースに挿入された最後の行の行IDに相当する文字列を返します。
	 * </p>
	 * <p>
	 * もし <i>name</i>
	 * パラメータにシーケンス名が指定された場合、
	 * <b>PDO::lastInsertId</b>
	 * は指定されたシーケンスオブジェクトから取得した最後の値に相当する
	 * 文字列を返します。
	 * </p>
	 * <p>
	 * もし PDO ドライバがサポートしていない場合、
	 * <b>PDO::lastInsertId</b>
	 * は IM001 SQLSTATE を発生させます。
	 */
	public function lastInsertId(string $name = null): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * データベースハンドラにおける直近の操作に関連する SQLSTATE を取得する
	 * @link http://php.net/manual/ja/pdo.errorcode.php
	 * @return mixed SQLSTATE を返します。これは、ANSI SQL-92 標準で定義された英数 5
	 * 文字の ID です。簡潔に言えば、SQLSTATE は 2文字のクラス値の後に
	 * 3 文字のサブクラス値が続きます。クラス値 01 はワーニングを表し、
	 * 戻り値のコード SQL_SUCCESS_WITH_INFO を伴います。
	 * クラス 'IM' を除く '01' 以外のクラス値はエラーを表します。
	 * クラス 'IM' は PDO 自身の実装 (もしくは ODBC ドライバを使用している場合は
	 * ODBC かも知れません) に由来するワーニングやエラーに固有の値です。
	 * あらゆるクラスでのサブクラス値 '000' は SQLSTATE
	 * に対するサブクラスがない事を示しています。
	 * </p>
	 * <p>
	 * <b>PDO::errorCode</b> はデータベースハンドラに
	 * 直接行った操作に対するエラーコードのみを取得します。
	 * もし <b>PDO::prepare</b> や <b>PDO::query</b>
	 * を通して PDOStatement オブジェクトを生成し、
	 * 文でエラーが発生した場合、<b>PDO::errorCode</b>
	 * はエラーを反映しません。
	 * 特定の文ハンドラに対して実行された操作についてのエラーコードを返すには
	 * <b>PDOStatement::errorCode</b>
	 * をコールしなければなりません。
	 * </p>
	 * <p>
	 * そのデータベースハンドル上で何も操作が行われていない場合は <b>NULL</b> を返します。
	 */
	public function errorCode() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * データベースハンドラにおける直近の操作に関連する拡張エラー情報を取得する
	 * @link http://php.net/manual/ja/pdo.errorinfo.php
	 * @return array <b>PDO::errorInfo</b> は、
	 * このデータベースハンドラによって実行された直近の操作に関するエラー情報を
	 * 配列として返します。この配列は次のフィールドを含みます。
	 * <tr valign="top">
	 * <td>要素</td>
	 * <td>情報</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>0</td>
	 * <td>SQLSTATE エラーコード
	 * (これは、ANSI SQL 標準で定義された英数 5 文字の ID)</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>ドライバ固有のエラーコード</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>ドライバ固有のエラーメッセージ</td>
	 * </tr>
	 * </p>
	 * <p>
	 * SQLSTATE エラーコードが設定されていない場合やドライバ固有のエラーがない場合は、
	 * 要素 0 に続く要素は <b>NULL</b> となります。
	 * </p>
	 * <p>
	 * <b>PDO::errorInfo</b> はデータベースハンドラに
	 * 直接行った操作に対するエラーコードのみを取得します。
	 * もし <b>PDO::prepare</b> や <b>PDO::query</b>
	 * を通して PDOStatement オブジェクトを生成し、
	 * 文でエラーが発生した場合、<b>PDO::errorInfo</b>
	 * はそのエラーを反映しません。
	 * 特定の文ハンドラに対して実行された操作についてのエラーコードを返すには
	 * <b>PDOStatement::errorInfo</b>
	 * をコールしなければなりません。
	 */
	public function errorInfo(): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * データベース接続の属性を取得する
	 * @link http://php.net/manual/ja/pdo.getattribute.php
	 * @param int $attribute <p>
	 * PDO_ATTR_* 定数の 1 つを指定します。
	 * データベース接続に適用される定数は以下の通りです。
	 * PDO::ATTR_AUTOCOMMIT
	 * PDO::ATTR_CASE
	 * PDO::ATTR_CLIENT_VERSION
	 * PDO::ATTR_CONNECTION_STATUS
	 * PDO::ATTR_DRIVER_NAME
	 * PDO::ATTR_ERRMODE
	 * PDO::ATTR_ORACLE_NULLS
	 * PDO::ATTR_PERSISTENT
	 * PDO::ATTR_PREFETCH
	 * PDO::ATTR_SERVER_INFO
	 * PDO::ATTR_SERVER_VERSION
	 * PDO::ATTR_TIMEOUT
	 * </p>
	 * @return mixed コールに成功した場合は要求された PDO 属性の値を返します。
	 * コールに失敗した場合は null を返します。
	 */
	public function getAttribute(int $attribute) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.1)<br/>
	 * クエリ用の文字列をクオートする
	 * @link http://php.net/manual/ja/pdo.quote.php
	 * @param string $string <p>
	 * クオートされる文字列を指定します。
	 * </p>
	 * @param int $parameter_type [optional] <p>
	 * クオートするスタイルを変更するため、
	 * ドライバにデータ型のヒントを提供します。
	 * </p>
	 * @return string 理論上安全なクオートされた SQL ステートメントの文字列を返します。
	 * ドライバがこの方法での引用符付けをサポートしていない場合は
	 * <b>FALSE</b> を返します。
	 */
	public function quote(string $string, int $parameter_type = PDO::PARAM_STR): string {}

	final public function __wakeup() {}

	final public function __sleep() {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7, PECL pdo &gt;= 1.0.3)<br/>
	 * 利用可能な PDO ドライバの配列を返す
	 * @link http://php.net/manual/ja/pdo.getavailabledrivers.php
	 * @return array <b>PDO::getAvailableDrivers</b> は PDO ドライバ名の配列を返します。
	 * もしドライバが何も利用できない場合、空の配列を返します。
	 */
	public static function getAvailableDrivers(): array {}

}

/**
 * プリペアドステートメントを表します。ステートメント実行後は関連する結果セットを表します。
 * @link http://php.net/manual/ja/class.pdostatement.php
 */
class PDOStatement implements Traversable {
	/**
	 * @var string
	 */
	public $queryString;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * プリペアドステートメントを実行する
	 * @link http://php.net/manual/ja/pdostatement.execute.php
	 * @param array $input_parameters [optional] <p>
	 * 実行される SQL 文の中のバインドパラメータと同数の要素からなる、
	 * 値の配列。すべての値は <b>PDO::PARAM_STR</b> として扱われます。
	 * </p>
	 * <p>
	 * ひとつのパラメータに対して複数の値をバインドすることはできません。
	 * 例えば、IN() 句の中のひとつのパラメータに対して
	 * 2 つの値をバインドすることはできません。
	 * </p>
	 * <p>
	 * 指定した数よりも多い値をバインドすることはできません。
	 * <i>input_parameters</i> のキーが
	 * <b>PDO::prepare</b> で指定した SQL にある数より多い場合は、
	 * ステートメントが失敗してエラーが発生します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function execute(array $input_parameters = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * 結果セットから次の行を取得する
	 * @link http://php.net/manual/ja/pdostatement.fetch.php
	 * @param int $fetch_style [optional] <p>
	 * 次のレコードを呼び出し元に返す方法を制御します。
	 * この値は、PDO::FETCH_* 定数のどれかで、
	 * デフォルトは <b>PDO::ATTR_DEFAULT_FETCH_MODE</b> の値
	 * (そのデフォルトは <b>PDO::FETCH_BOTH</b>) です。
	 * <p>
	 * PDO::FETCH_ASSOC: は、結果セットに
	 * 返された際のカラム名で添字を付けた配列を返します。
	 * </p>
	 * @param int $cursor_orientation [optional] <p>
	 * スクロール可能なカーソルを表す PDOStatement オブジェクトの場合、
	 * この値により呼び出し側に返される行を定義します。
	 * この値は、PDO::FETCH_ORI_* 定数のどれかと
	 * する必要があり、
	 * PDO::FETCH_ORI_NEXT がデフォルトとなっています。
	 * PDOStatement に対してスクロール可能なカーソルを要求するためには、
	 * <b>PDO::prepare</b> を用いて SQL ステートメントを
	 * 準備する際、
	 * PDO::CURSOR_SCROLL に
	 * PDO::ATTR_CURSOR 属性を設定する必要があります。
	 * </p>
	 * @param int $cursor_offset [optional]
	 * @return mixed この関数が成功した場合の返り値は、取得形式によって異なります。
	 * 失敗した場合は常に <b>FALSE</b> を返します。
	 */
	public function fetch(int $fetch_style = null, int $cursor_orientation = PDO::FETCH_ORI_NEXT, int $cursor_offset = 0) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * 指定された変数名にパラメータをバインドする
	 * @link http://php.net/manual/ja/pdostatement.bindparam.php
	 * @param mixed $parameter <p>
	 * パラメータ ID を指定します。名前付けされたプレースホルダを使った文に
	 * 対しては、:name 形式のパラメータ名となります。
	 * 疑問符プレースホルダを使った文に対しては、1 から始まるパラメータの
	 * 位置となります。
	 * </p>
	 * @param mixed $variable <p>
	 * SQL ステートメントパラメータにバインドする PHP 変数名を指定します。
	 * </p>
	 * @param int $data_type [optional] <p>
	 * パラメータに対して
	 * PDO::PARAM_* 定数
	 * を使った明示的なデータ型を指定します。
	 * ストアドプロシージャからの INOUT パラメータの場合、
	 * <i>data_type</i> パラメータに PDO::PARAM_INPUT_OUTPUT
	 * ビットを設定するためにビット OR を使用してください。
	 * </p>
	 * @param int $length [optional] <p>
	 * データ型の長さを指定します。パラメータがストアドプロシージャからの
	 * OUT パラメータであることを示す場合、
	 * 明示的に長さを設定しなければなりません。
	 * </p>
	 * @param mixed $driver_options [optional] <p>
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function bindParam($parameter, &$variable, int $data_type = PDO::PARAM_STR, int $length = null, $driver_options = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * カラムを PHP 変数にバインドする
	 * @link http://php.net/manual/ja/pdostatement.bindcolumn.php
	 * @param mixed $column <p>
	 * 結果セット中のカラム番号 (1 から始まる) を指定します。
	 * カラム名を使用する場合、
	 * ドライバによって返されるカラムの大文字小文字が一致する必要が
	 * あることをご承知おきください。
	 * </p>
	 * @param mixed $param <p>
	 * カラムがバインドされる PHP 変数名を指定します。
	 * </p>
	 * @param int $type [optional] <p>
	 * パラメータのデータ型を
	 * PDO::PARAM_* 定数
	 * で指定します。
	 * </p>
	 * @param int $maxlen [optional] <p>
	 * 領域を事前に確保するためのヒント。
	 * </p>
	 * @param mixed $driverdata [optional] <p>
	 * ドライバのオプションパラメータ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function bindColumn($column, &$param, int $type = null, int $maxlen = null, $driverdata = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 1.0.0)<br/>
	 * 値をパラメータにバインドする
	 * @link http://php.net/manual/ja/pdostatement.bindvalue.php
	 * @param mixed $parameter <p>
	 * パラメータ ID。名前つきプレースホルダを使用する
	 * プリペアドステートメントの場合は、
	 * :name 形式のパラメータ名となります。
	 * 疑問符プレースホルダを使用するプリペアドステートメントの場合は、
	 * 1 から始まるパラメータの位置となります。
	 * </p>
	 * @param mixed $value <p>
	 * パラメータにバインドする値。
	 * </p>
	 * @param int $data_type [optional] <p>
	 * パラメータに対して
	 * PDO::PARAM_* 定数
	 * を使った明示的なデータ型を指定します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function bindValue($parameter, $value, int $data_type = PDO::PARAM_STR): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * 直近の SQL ステートメントによって作用した行数を返す
	 * @link http://php.net/manual/ja/pdostatement.rowcount.php
	 * @return int 行の数を返します。
	 */
	public function rowCount(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.9.0)<br/>
	 * 結果セットの次行から単一カラムを返す
	 * @link http://php.net/manual/ja/pdostatement.fetchcolumn.php
	 * @param int $column_number [optional] <p>
	 * 行から処理したい 0 で始まるカラム番号を指定します。
	 * 何も値が与えられない場合、
	 * <b>PDOStatement::fetchColumn</b>
	 * は最初のカラムをフェッチします。
	 * </p>
	 * @return mixed <b>PDOStatement::fetchColumn</b>
	 * は結果セットの次行から単一カラムを返します。
	 * それ以上行がない場合、<b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * <b>PDOStatement::fetchColumn</b>
	 * を使用してデータを処理する場合、同一行から
	 * 他のカラムを返す方法はありません。
	 */
	public function fetchColumn(int $column_number = 0) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * 全ての結果行を含む配列を返す
	 * @link http://php.net/manual/ja/pdostatement.fetchall.php
	 * @param int $fetch_style [optional] <p>
	 * <b>PDOStatement::fetch</b> に文章化されているような
	 * 返される配列の内容を制御します。
	 * デフォルトは <b>PDO::ATTR_DEFAULT_FETCH_MODE</b> の値
	 * (そのデフォルトは <b>PDO::FETCH_BOTH</b>) です。
	 * </p>
	 * <p>
	 * 結果セットから単一カラムの全ての値を含む配列を返す場合、
	 * <b>PDO::FETCH_COLUMN</b> を指定します。
	 * <i>fetch_argument</i> パラメータにどのカラムを返すかを
	 * 指定することができます。
	 * </p>
	 * <p>
	 * 結果セットから単一カラムの一意な値のみ取得する場合、
	 * <b>PDO::FETCH_UNIQUE</b> をビット OR した
	 * <b>PDO::FETCH_COLUMN</b> を指定します。
	 * </p>
	 * <p>
	 * 指定したカラムの値によってグループ化した連想配列を返す場合、
	 * <b>PDO::FETCH_GROUP</b> をビット OR した
	 * <b>PDO::FETCH_COLUMN</b> を指定します。
	 * </p>
	 * @param mixed $fetch_argument [optional] <p>
	 * この引数は、<i>fetch_style</i> の値によって意味が異なります。
	 * <p>
	 * <b>PDO::FETCH_COLUMN</b>: ここで指定した、
	 * 0 から始まる番号のカラムを返します。
	 * </p>
	 * @param array $ctor_args [optional] <p>
	 * <i>fetch_style</i> が
	 * <b>PDO::FETCH_CLASS</b>
	 * のときに使う、独自のクラスコンストラクタへの引数。
	 * </p>
	 * @return array <b>PDOStatement::fetchAll</b> は、
	 * 結果セットに残っている全ての行を含む配列を返します。
	 * この配列は、カラム値の配列もしくは各カラム名に対応するプロパティを持つオブジェクトとして各行を表します。
	 * 取得結果がゼロ件だった場合は空の配列を返し、
	 * 失敗した場合は <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * 大きな結果セットをフェッチするためにこのメソッドを使用することは、
	 * システムとネットワークリソースに大量の要求を行うことになります。
	 * PHP で全てのデータ処理と操作を行うよりも、データベースサーバー側で
	 * 結果セットを操作することを検討してください。例えば、PHP で処理を行う前に
	 * SQL で WHERE 句や ORDER BY 句を使用し、結果を制限することです。
	 */
	public function fetchAll(int $fetch_style = null, $fetch_argument = null, array $ctor_args = array()): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.4)<br/>
	 * 次の行を取得し、それをオブジェクトとして返す
	 * @link http://php.net/manual/ja/pdostatement.fetchobject.php
	 * @param string $class_name [optional] <p>
	 * 作成されるクラスの名前。
	 * </p>
	 * @param array $ctor_args [optional] <p>
	 * この配列の要素がコンストラクタに渡されます。
	 * </p>
	 * @return mixed カラム名に対応するプロパティを保持する、要求されたクラスの
	 * インスタンスを返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function fetchObject(string $class_name = "stdClass", array $ctor_args = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * 文ハンドラにおける直近の操作に関連する SQLSTATE を取得する
	 * @link http://php.net/manual/ja/pdostatement.errorcode.php
	 * @return string <b>PDOStatement::errorCode</b>
	 * は PDOStatement オブジェクトを用いて実行された操作に対する
	 * エラーコードを取得することを除き、
	 * <b>PDO::errorCode</b> と等価です。
	 */
	public function errorCode(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.1.0)<br/>
	 * 文ハンドラにおける直近の操作に関連する拡張エラー情報を取得する
	 * @link http://php.net/manual/ja/pdostatement.errorinfo.php
	 * @return array <b>PDOStatement::errorInfo</b> は、
	 * この文ハンドラによって実行された直近の操作に関するエラー情報を
	 * 配列として返します。この配列は次のフィールドを含みます。
	 * <tr valign="top">
	 * <td>要素</td>
	 * <td>情報</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>0</td>
	 * <td>SQLSTATE エラーコード
	 * (これは、ANSI SQL 標準で定義された英数 5 文字の ID)</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>ドライバ固有のエラーコード</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>ドライバ固有のエラーメッセージ</td>
	 * </tr>
	 */
	public function errorInfo(): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * 文の属性を設定する
	 * @link http://php.net/manual/ja/pdostatement.setattribute.php
	 * @param int $attribute
	 * @param mixed $value
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setAttribute(int $attribute, $value): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * 文の属性を取得する
	 * @link http://php.net/manual/ja/pdostatement.getattribute.php
	 * @param int $attribute
	 * @return mixed 属性の値を返します。
	 */
	public function getAttribute(int $attribute) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * 結果セット中のカラム数を返す
	 * @link http://php.net/manual/ja/pdostatement.columncount.php
	 * @return int PDOStatement オブジェクトに相当する結果セットにあるカラム数を返します。
	 * 結果セットが空である場合でも同様です。
	 * もし結果セットがなければ、<b>PDOStatement::columnCount</b>
	 * は 0 を返します。
	 */
	public function columnCount(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * 結果セットのカラムに対するメタデータを返す
	 * @link http://php.net/manual/ja/pdostatement.getcolumnmeta.php
	 * @param int $column <p>
	 * 結果セットの 0 から始まるカラムを指定します。
	 * </p>
	 * @return array 1つのカラムについてのメタデータに相当する次の値を含んだ連想配列を返します。
	 * </p>
	 * <table>
	 * カラムのメタデータ
	 * <tr valign="top">
	 * <td>名前</td>
	 * <td>値</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>native_type</td>
	 * <td>カラム値を表現するために使用される PHP のネイティブ型</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>driver:decl_type</td>
	 * <td>データベースにおけるカラム値を表現するために使用される SQL 型。
	 * もし、結果セットのカラムが関数から返される場合、
	 * この値は <b>PDOStatement::getColumnMeta</b>.
	 * よって返されません。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>flags</td>
	 * <td>このカラムにセットされているあらゆるフラグ</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>name</td>
	 * <td>データベースによって返されるこのカラムの名前</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>table</td>
	 * <td>データベースによって返されるこのカラムのテーブル名</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>len</td>
	 * <td>カラム長。浮動小数点数以外の型については通常
	 * -1 となる。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>precision</td>
	 * <td>カラムの数値精度。浮動小数点数以外の型については通常
	 * 0 となる。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>pdo_type</td>
	 * <td>
	 * PDO::PARAM_* 定数
	 * によって表現されるカラムの型</td>
	 * </tr>
	 * </table>
	 * <p>
	 * 要求されたカラムが結果セットに存在しない、
	 * もしくは結果セットが存在しない場合、<b>FALSE</b> を返します。
	 */
	public function getColumnMeta(int $column): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * この文に対するデフォルトのフェッチモードを設定する
	 * @link http://php.net/manual/ja/pdostatement.setfetchmode.php
	 * @param int $mode <p>
	 * フェッチモードは、PDO::FETCH_* 定数の 1
	 * つでなければなりません。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setFetchMode(int $mode): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.2.0)<br/>
	 * 複数の行セットを返す文ハンドラで次の行セットに移動する
	 * @link http://php.net/manual/ja/pdostatement.nextrowset.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function nextRowset(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.9.0)<br/>
	 * カーソルを閉じてステートメントを再実行できるようにする
	 * @link http://php.net/manual/ja/pdostatement.closecursor.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function closeCursor(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7, PECL pdo &gt;= 0.9.0)<br/>
	 * SQL プリペアドコマンドを出力する
	 * @link http://php.net/manual/ja/pdostatement.debugdumpparams.php
	 * @return void 値を返しません。
	 */
	public function debugDumpParams(): void {}

	final public function __wakeup() {}

	final public function __sleep() {}

}

final class PDORow  {
}

function pdo_drivers() {}

// End of PDO v.7.0.19
?>
