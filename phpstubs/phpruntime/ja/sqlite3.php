<?php

// Start of sqlite3 v.0.7-dev

/**
 * SQLite 3 データベースとのインターフェイスとなるクラスです。
 * @link http://php.net/manual/ja/class.sqlite3.php
 */
class SQLite3  {

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * SQLite データベースをオープンする
	 * @link http://php.net/manual/ja/sqlite3.open.php
	 * @param string $filename <p>
	 * SQLite データベースへのパス。インメモリデータベースを使う場合は :memory: を指定します。
	 * </p>
	 * @param int $flags [optional] <p>
	 * SQLite データベースのオープン方法を指定するフラグ。
	 * デフォルトでは SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE
	 * を使用してオープンします。
	 * <p>
	 * SQLITE3_OPEN_READONLY:
	 * データベースを読み込み専用でオープンする
	 * </p>
	 * @param string $encryption_key [optional] <p>
	 * オプションの暗号キー。SQLite データベースの暗号化と復号に使用します。
	 * 暗号化モジュールがインストールされていない場合は、このパラメータは何の影響も及ぼしません。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function open(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryption_key = null): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * データベースとの接続を閉じる
	 * @link http://php.net/manual/ja/sqlite3.close.php
	 * @return bool 成功した場合に <b>TRUE</b>、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function close(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定したデータベースに、結果を返さないクエリを実行する
	 * @link http://php.net/manual/ja/sqlite3.exec.php
	 * @param string $query <p>
	 * 実行したい SQL クエリ (通常は INSERT、UPDATE あるいは DELETE
	 * クエリ)。
	 * </p>
	 * @return bool クエリが成功した場合に <b>TRUE</b>、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function exec(string $query): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * SQLite3 ライブラリのバージョンを、文字列定数と数値で返す
	 * @link http://php.net/manual/ja/sqlite3.version.php
	 * @return array キー "versionString" および
	 * "versionNumber" を持つ連想配列を返します。
	 */
	public static function version(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 直近の INSERT 文でデータベースに追加された行の ID を返す
	 * @link http://php.net/manual/ja/sqlite3.lastinsertrowid.php
	 * @return int 直近の INSERT 文でデータベースに追加された行の ID を返します。
	 */
	public function lastInsertRowID(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 直近で失敗した SQLite リクエストの結果コードを数値で返す
	 * @link http://php.net/manual/ja/sqlite3.lasterrorcode.php
	 * @return int 直近で失敗した SQLite リクエストの結果コードを数値で返します。
	 */
	public function lastErrorCode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 直近で失敗した SQLite リクエストについての英文テキストの説明を返す
	 * @link http://php.net/manual/ja/sqlite3.lasterrormsg.php
	 * @return string 直近で失敗した SQLite リクエストについての英文テキストの説明を返します。
	 */
	public function lastErrorMsg(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.3, PHP 7)<br/>
	 * 接続がビジー状態のときのハンドラを設定する
	 * @link http://php.net/manual/ja/sqlite3.busytimeout.php
	 * @param int $msecs <p>
	 * スリープさせる時間 (ミリ秒)。この値をゼロ以下にすると、
	 * すでに設定されているタイムアウトハンドラを無効にします。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b>、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function busyTimeout(int $msecs): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * SQLite 拡張ライブラリを読み込む
	 * @link http://php.net/manual/ja/sqlite3.loadextension.php
	 * @param string $shared_library <p>
	 * 読み込みたいライブラリの名前。ライブラリは、設定オプション
	 * sqlite3.extension_dir で指定したディレクトリになければなりません。
	 * </p>
	 * @return bool 拡張ライブラリの読み込みに成功した場合に <b>TRUE</b>、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function loadExtension(string $shared_library): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 直近の SQL 文で変更 (あるいは挿入、削除) された行の数を返す
	 * @link http://php.net/manual/ja/sqlite3.changes.php
	 * @return int 直近の SQL 文で変更 (あるいは挿入、削除) された行の数を表す
	 * integer 値を返します。
	 */
	public function changes(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 適切にエスケープされた文字列を返す
	 * @link http://php.net/manual/ja/sqlite3.escapestring.php
	 * @param string $value <p>
	 * エスケープしたい文字列。
	 * </p>
	 * @return string SQL 文の中で安全に使えるよう適切にエスケープされた文字列を返します。
	 */
	public static function escapeString(string $value): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 実行する SQL 文を準備する
	 * @link http://php.net/manual/ja/sqlite3.prepare.php
	 * @param string $query <p>
	 * 準備したい SQL クエリ。
	 * </p>
	 * @return SQLite3Stmt 成功した場合に <b>SQLite3Stmt</b> オブジェクト、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function prepare(string $query): SQLite3Stmt {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * SQL クエリを実行する
	 * @link http://php.net/manual/ja/sqlite3.query.php
	 * @param string $query <p>
	 * 実行したい SQL クエリ。
	 * </p>
	 * @return SQLite3Result クエリが結果を返す場合は <b>SQLite3Result</b> オブジェクトを返します。
	 * それ以外の場合は、成功した場合に <b>TRUE</b>、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function query(string $query): SQLite3Result {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * クエリを実行し、単一の結果を返す
	 * @link http://php.net/manual/ja/sqlite3.querysingle.php
	 * @param string $query <p>
	 * 実行したい SQL クエリ。
	 * </p>
	 * @param bool $entire_row [optional] <p>
	 * デフォルトでは、<b>querySingle</b> はクエリが返す結果の最初のカラムの値を返します。
	 * <i>entire_row</i> が <b>TRUE</b> の場合は、最初の行全体を配列で返します。
	 * </p>
	 * @return mixed 結果の最初のカラムの値あるいは最初の行全体の配列
	 * (<i>entire_row</i> が <b>TRUE</b> の場合) を返します。
	 * </p>
	 * <p>
	 * クエリ自体は有効であるけれども結果が返されなかった場合の返り値は、
	 * <i>entire_row</i> が <b>FALSE</b> なら <b>NULL</b>、
	 * そうでなければ空の配列となります。
	 * </p>
	 * <p>
	 * クエリが無効な場合やクエリの実行に失敗した場合は <b>FALSE</b> を返します。
	 */
	public function querySingle(string $query, bool $entire_row = false) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * SQL のスカラー関数として使用する PHP 関数を登録する
	 * @link http://php.net/manual/ja/sqlite3.createfunction.php
	 * @param string $name <p>
	 * 作成あるいは再定義したい SQL 関数の名前。
	 * </p>
	 * @param mixed $callback <p>
	 * コールバックとして指定する、
	 * PHP の関数あるいはユーザー定義関数の名前。
	 * これが SQL 関数の振る舞いを定義します。
	 * </p>
	 * @param int $argument_count [optional] <p>
	 * SQL 関数が受け取るパラメータの数。
	 * -1 を指定すると、SQL 関数は任意の数の引数を受け取るようになります。
	 * </p>
	 * @param int $flags [optional] <p>
	 * A bitwise conjunction of flags. Currently, only
	 * <b>SQLITE3_DETERMINISTIC</b> is supported, which specifies
	 * that the function always returns the same result given the same inputs
	 * within a single SQL statement.
	 * </p>
	 * @return bool 関数の作成に成功した場合に <b>TRUE</b>、失敗した場合に <b>FALSE</b>
	 * を返します。
	 */
	public function createFunction(string $name, $callback, int $argument_count = -1, int $flags = 0): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * SQL の集約関数として使用する PHP 関数を登録する
	 * @link http://php.net/manual/ja/sqlite3.createaggregate.php
	 * @param string $name <p>
	 * 作成あるいは再定義したい SQL 集約関数の名前。
	 * </p>
	 * @param mixed $step_callback <p>
	 * 集約対象のすべての項目に適用するコールバックとして指定する、
	 * PHP の関数あるいはユーザー定義関数の名前。
	 * </p>
	 * @param mixed $final_callback <p>
	 * 集約処理の最後に適用するコールバックとして指定する、
	 * PHP の関数あるいはユーザー定義関数の名前。
	 * </p>
	 * @param int $argument_count [optional] <p>
	 * SQL 集約関数が受け取るパラメータの数。
	 * 負の値を指定すると、SQL 集約関数は任意の数の引数を受け取るようになります。
	 * </p>
	 * @return bool 集約関数の作成に成功した場合に <b>TRUE</b>、失敗した場合に <b>FALSE</b>
	 * を返します。
	 */
	public function createAggregate(string $name, $step_callback, $final_callback, int $argument_count = -1): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.11, PHP 7)<br/>
	 * Registers a PHP function for use as an SQL collating function
	 * @link http://php.net/manual/ja/sqlite3.createcollation.php
	 * @param string $name <p>
	 * Name of the SQL collating function to be created or redefined
	 * </p>
	 * @param callable $callback <p>
	 * The name of a PHP function or user-defined function to apply as a
	 * callback, defining the behavior of the collation. It should accept two
	 * strings and return as <b>strcmp</b> does, i.e. it should
	 * return -1, 1, or 0 if the first string sorts before, sorts after, or is
	 * equal to the second.
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function createCollation(string $name, callable $callback): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Opens a stream resource to read a BLOB
	 * @link http://php.net/manual/ja/sqlite3.openblob.php
	 * @param string $table <p>
	 * The table name.
	 * </p>
	 * @param string $column <p>
	 * The column name.
	 * </p>
	 * @param int $rowid <p>
	 * The row ID.
	 * </p>
	 * @param string $dbname [optional] <p>
	 * The symbolic name of the DB
	 * </p>
	 * @return resource a stream resource, 失敗した場合に <b>FALSE</b> を返します.
	 */
	public function openBlob(string $table, string $column, int $rowid, string $dbname = "main") {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Enable throwing exceptions
	 * @link http://php.net/manual/ja/sqlite3.enableexceptions.php
	 * @param bool $enableExceptions [optional]
	 * @return bool the old value; <b>TRUE</b> if exceptions were enabled, <b>FALSE</b> otherwise.
	 */
	public function enableExceptions(bool $enableExceptions = false): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * SQLite3 オブジェクトを作成し、SQLite 3 データベースをオープンする
	 * @link http://php.net/manual/ja/sqlite3.construct.php
	 * @param string $filename <p>
	 * SQLite データベースへのパス。インメモリデータベースを使う場合は :memory: を指定します。
	 * If <i>filename</i> is an empty string, then a private, temporary on-disk
	 * database will be created. This private database will be automatically
	 * deleted as soon as the database connection is closed.
	 * </p>
	 * @param int $flags [optional] <p>
	 * SQLite データベースのオープン方法を指定するフラグ。
	 * デフォルトでは SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE
	 * を使用してオープンします。
	 * <p>
	 * SQLITE3_OPEN_READONLY:
	 * データベースを読み込み専用でオープンする
	 * </p>
	 * @param string $encryption_key [optional] <p>
	 * オプションの暗号キー。SQLite データベースの暗号化と復号に使用します。
	 * 暗号化モジュールがインストールされていない場合は、このパラメータは何の影響も及ぼしません。
	 * </p>
	 */
	public function __construct(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryption_key = null) {}

}

/**
 * SQLite 3 拡張モジュールのプリペアドステートメントを扱うクラスです。
 * @link http://php.net/manual/ja/class.sqlite3stmt.php
 */
class SQLite3Stmt  {

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * プリペアドステートメント内のパラメータの数を返す
	 * @link http://php.net/manual/ja/sqlite3stmt.paramcount.php
	 * @return int プリペアドステートメント内のパラメータの数を返します。
	 */
	public function paramCount(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * プリペアドステートメントを閉じる
	 * @link http://php.net/manual/ja/sqlite3stmt.close.php
	 * @return bool <b>TRUE</b> を返します。
	 */
	public function close(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * プリペアドステートメントをリセットする
	 * @link http://php.net/manual/ja/sqlite3stmt.reset.php
	 * @return bool ステートメントのリセットに成功した場合に <b>TRUE</b>、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function reset(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在バインドされているすべてのパラメータをクリアする
	 * @link http://php.net/manual/ja/sqlite3stmt.clear.php
	 * @return bool バインドされているパラメータのクリアに成功した場合に <b>TRUE</b>、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function clear(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * プリペアドステートメントを実行し、結果セットオブジェクトを返す
	 * @link http://php.net/manual/ja/sqlite3stmt.execute.php
	 * @return SQLite3Result プリペアドステートメントの実行に成功した場合に <b>SQLite3Result</b> オブジェクト、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function execute(): SQLite3Result {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * パラメータを変数にバインドする
	 * @link http://php.net/manual/ja/sqlite3stmt.bindparam.php
	 * @param mixed $sql_param <p>
	 * パラメータをどの変数にバインドするかを表す文字列あるいは整数値。
	 * </p>
	 * @param mixed $param <p>
	 * 変数にバインドするパラメータ。
	 * </p>
	 * @param int $type [optional] <p>
	 * バインドするパラメータのデータ型。
	 * <p>
	 * SQLITE3_INTEGER: 符号付き整数。
	 * 値の大きさに応じて 1, 2, 3, 4, 6, あるいは 8 バイトで格納されます。
	 * </p>
	 * @return bool パラメータを変数にバインドした場合に <b>TRUE</b>、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function bindParam($sql_param, &$param, int $type = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * パラメータの値を変数にバインドする
	 * @link http://php.net/manual/ja/sqlite3stmt.bindvalue.php
	 * @param mixed $sql_param <p>
	 * 値をどの変数にバインドするかを表す文字列あるいは整数値。
	 * </p>
	 * @param mixed $value <p>
	 * 変数にバインドする値。
	 * </p>
	 * @param int $type [optional] <p>
	 * バインドする値のデータ型。
	 * <p>
	 * SQLITE3_INTEGER: 符号付き整数。
	 * 値の大きさに応じて 1, 2, 3, 4, 6, あるいは 8 バイトで格納されます。
	 * </p>
	 * @return bool 値を変数にバインドした場合に <b>TRUE</b>、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function bindValue($sql_param, $value, int $type = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * Returns whether a statement is definitely read only
	 * @link http://php.net/manual/ja/sqlite3stmt.readonly.php
	 * @return bool <b>TRUE</b> if a statement is definitely read only, <b>FALSE</b> otherwise.
	 */
	public function readOnly(): bool {}

	/**
	 * @param $sqlite3
	 */
	private function __construct($sqlite3) {}

}

/**
 * SQLite 3 拡張モジュールの結果セットを扱うクラスです。
 * @link http://php.net/manual/ja/class.sqlite3result.php
 */
class SQLite3Result  {

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 結果セットのカラム数を返す
	 * @link http://php.net/manual/ja/sqlite3result.numcolumns.php
	 * @return int 結果セットのカラム数を返します。
	 */
	public function numColumns(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * n 番目のカラムの名前を返す
	 * @link http://php.net/manual/ja/sqlite3result.columnname.php
	 * @param int $column_number <p>
	 * 0 から始まるカラムの数値インデックス。
	 * </p>
	 * @return string <i>column_number</i> で指定したカラムの名前を文字列で返します。
	 */
	public function columnName(int $column_number): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * n 番目のカラムの型を返す
	 * @link http://php.net/manual/ja/sqlite3result.columntype.php
	 * @param int $column_number <p>
	 * 0 から始まるカラムの数値インデックス。
	 * </p>
	 * @return int <i>column_number</i> で指定したカラムのデータ型インデックス
	 * (<b>SQLITE3_INTEGER</b>、<b>SQLITE3_FLOAT</b>、
	 * <b>SQLITE3_TEXT</b>、<b>SQLITE3_BLOB</b> あるいは
	 * <b>SQLITE3_NULL</b> のいずれか)
	 * を返します。
	 */
	public function columnType(int $column_number): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 結果の行を、連想配列あるいは数値添字配列あるいはその両方で取得する
	 * @link http://php.net/manual/ja/sqlite3result.fetcharray.php
	 * @param int $mode [optional] <p>
	 * 次の行をどのように返すかを制御します。値は
	 * SQLITE3_ASSOC か
	 * SQLITE3_NUM、SQLITE3_BOTH
	 * のいずれかでなければなりません。
	 * <p>
	 * SQLITE3_ASSOC:
	 * 返された結果セットのカラム名をインデックスとする配列を返します。
	 * </p>
	 * @return array 結果の行を、連想配列あるいは数値添字配列あるいはその両方で取得します。
	 * 行がない場合は <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * The types of the values of the returned array are mapped from SQLite3 types
	 * as follows: integers are mapped to integer if they fit into the
	 * range <b>PHP_INT_MIN</b>..<b>PHP_INT_MAX</b>, and
	 * to string otherwise. Floats are mapped to float,
	 * NULL values are mapped to null, and strings
	 * and blobs are mapped to string.
	 */
	public function fetchArray(int $mode = SQLITE3_BOTH): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 結果セットを最初の行に戻す
	 * @link http://php.net/manual/ja/sqlite3result.reset.php
	 * @return bool 結果セットを最初の行に戻すことに成功した場合に <b>TRUE</b>、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function reset(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 結果セットを閉じる
	 * @link http://php.net/manual/ja/sqlite3result.finalize.php
	 * @return bool <b>TRUE</b> を返します。
	 */
	public function finalize(): bool {}

	private function __construct() {}

}

/**
 * <b>SQLite3_result::fetchArray</b> が返す結果セットが、
 * カラム名をインデックスとする配列であることを指定します。
 * @link http://php.net/manual/ja/sqlite3.constants.php
 */
define ('SQLITE3_ASSOC', 1);

/**
 * <b>SQLite3_result::fetchArray</b> が返す結果セットが、
 * カラム番号をインデックスとする配列であることを指定します。
 * カラム番号は 0 からはじまります。
 * @link http://php.net/manual/ja/sqlite3.constants.php
 */
define ('SQLITE3_NUM', 2);

/**
 * <b>SQLite3_result::fetchArray</b> が返す結果セットが、
 * カラム名とカラム番号の両方をインデックスとする配列であることを指定します。
 * カラム番号は 0 からはじまります。
 * @link http://php.net/manual/ja/sqlite3.constants.php
 */
define ('SQLITE3_BOTH', 3);

/**
 * SQLite3 INTEGER 型を表します。
 * @link http://php.net/manual/ja/sqlite3.constants.php
 */
define ('SQLITE3_INTEGER', 1);

/**
 * SQLite3 REAL (FLOAT) 型を表します。
 * @link http://php.net/manual/ja/sqlite3.constants.php
 */
define ('SQLITE3_FLOAT', 2);

/**
 * SQLite3 TEXT 型を表します。
 * @link http://php.net/manual/ja/sqlite3.constants.php
 */
define ('SQLITE3_TEXT', 3);

/**
 * SQLite3 BLOB 型を表します。
 * @link http://php.net/manual/ja/sqlite3.constants.php
 */
define ('SQLITE3_BLOB', 4);

/**
 * SQLite3 NULL 型を表します。
 * @link http://php.net/manual/ja/sqlite3.constants.php
 */
define ('SQLITE3_NULL', 5);

/**
 * SQLite3 データベースを読み込み専用でオープンすることを指定します。
 * @link http://php.net/manual/ja/sqlite3.constants.php
 */
define ('SQLITE3_OPEN_READONLY', 1);

/**
 * SQLite3 データベースを読み書き両用でオープンすることを指定します。
 * @link http://php.net/manual/ja/sqlite3.constants.php
 */
define ('SQLITE3_OPEN_READWRITE', 2);

/**
 * データベースが存在しない場合に SQLite3 データベースを新規作成することを指定します。
 * @link http://php.net/manual/ja/sqlite3.constants.php
 */
define ('SQLITE3_OPEN_CREATE', 4);

// End of sqlite3 v.0.7-dev
?>
