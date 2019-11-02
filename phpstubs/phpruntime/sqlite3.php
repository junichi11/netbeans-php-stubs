<?php



namespace {

	/**
	 * <p>SQLite 3 データベースとのインターフェイスとなるクラスです。</p>
	 * @link https://php.net/manual/ja/class.sqlite3.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SQLite3 {

		/**
		 * SQLite3 オブジェクトを作成し、SQLite 3 データベースをオープンする
		 * <p>SQLite3 オブジェクトを作成し、SQLite 3 データベースをオープンします。 暗号化込みでビルドされている場合は、キーの使用を試みます。</p>
		 * @param string $filename <p>SQLite データベースへのパス。インメモリデータベースを使う場合は <i>:memory:</i> を指定します。 If <code>filename</code> is an empty string, then a private, temporary on-disk database will be created. This private database will be automatically deleted as soon as the database connection is closed.</p>
		 * @param int $flags <p>SQLite データベースのオープン方法を指定するフラグ。 デフォルトでは <i>SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE</i> を使用してオープンします。</p><ul> <li> <p><i>SQLITE3_OPEN_READONLY</i>: データベースを読み込み専用でオープンする</p> </li> <li> <p><i>SQLITE3_OPEN_READWRITE</i>: データベースを読み書き共用でオープンする</p> </li> <li> <p><i>SQLITE3_OPEN_CREATE</i>: データベースが存在しない場合は作成する</p> </li> </ul>
		 * @param string $encryption_key <p>オプションの暗号キー。SQLite データベースの暗号化と復号に使用します。 暗号化モジュールがインストールされていない場合は、このパラメータは何の影響も及ぼしません。</p>
		 * @return self <p>成功した場合に SQLite3 オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryption_key = NULL) {}

		/**
		 * 接続がビジー状態のときのハンドラを設定する
		 * <p>ビジーハンドラを設定します。 これは、データベースのロックが解除されるかあるいはタイムアウトに達するまでスリープさせます。</p>
		 * @param int $msecs <p>スリープさせる時間 (ミリ秒)。この値をゼロ以下にすると、 すでに設定されているタイムアウトハンドラを無効にします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.busytimeout.php
		 * @since PHP 5 >= 5.3.3, PHP 7
		 */
		public function busyTimeout(int $msecs): bool {}

		/**
		 * 直近の SQL 文で変更 (あるいは挿入、削除) された行の数を返す
		 * <p>直近の SQL 文で変更 (あるいは挿入、削除) された行の数を返します。</p>
		 * @return int <p>直近の SQL 文で変更 (あるいは挿入、削除) された行の数を表す <code>integer</code> 値を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.changes.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function changes(): int {}

		/**
		 * データベースとの接続を閉じる
		 * <p>データベースとの接続を閉じます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.close.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * SQL の集約関数として使用する PHP 関数を登録する
		 * <p>SQL の集約関数として使用する PHP 関数を登録します。 これは SQL 文の中で使用されるものです。</p>
		 * @param string $name <p>作成あるいは再定義したい SQL 集約関数の名前。</p>
		 * @param mixed $step_callback <p>集約対象のすべての項目に適用するコールバックとして指定する、 PHP の関数あるいはユーザー定義関数の名前。</p>
		 * @param mixed $final_callback <p>集約処理の最後に適用するコールバックとして指定する、 PHP の関数あるいはユーザー定義関数の名前。</p>
		 * @param int $argument_count <p>SQL 集約関数が受け取るパラメータの数。 負の値を指定すると、SQL 集約関数は任意の数の引数を受け取るようになります。</p>
		 * @return bool <p>集約関数の作成に成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.createaggregate.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function createAggregate(string $name, $step_callback, $final_callback, int $argument_count = -1): bool {}

		/**
		 * Registers a PHP function for use as an SQL collating function
		 * <p>Registers a PHP function or user-defined function for use as a collating function within SQL statements.</p>
		 * @param string $name <p>Name of the SQL collating function to be created or redefined</p>
		 * @param callable $callback <p>The name of a PHP function or user-defined function to apply as a callback, defining the behavior of the collation. It should accept two values and return as <code>strcmp()</code> does, i.e. it should return -1, 1, or 0 if the first string sorts before, sorts after, or is equal to the second.</p> <p>This function need to be defined as:</p> collation ( <code>mixed</code> <code>$value1</code> , <code>mixed</code> <code>$value2</code> ) : int
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.createcollation.php
		 * @since PHP 5 >= 5.3.11, PHP 7
		 */
		public function createCollation(string $name, callable $callback): bool {}

		/**
		 * SQL のスカラー関数として使用する PHP 関数を登録する
		 * <p>SQL のスカラー関数として使用する PHP 関数を登録します。 これは SQL 文の中で使用されるものです。</p>
		 * @param string $name <p>作成あるいは再定義したい SQL 関数の名前。</p>
		 * @param mixed $callback <p>コールバックとして指定する、 PHP の関数あるいはユーザー定義関数の名前。 これが SQL 関数の振る舞いを定義します。</p>
		 * @param int $argument_count <p>SQL 関数が受け取るパラメータの数。 <i>-1</i> を指定すると、SQL 関数は任意の数の引数を受け取るようになります。</p>
		 * @param int $flags <p>A bitwise conjunction of flags. Currently, only <b><code>SQLITE3_DETERMINISTIC</code></b> is supported, which specifies that the function always returns the same result given the same inputs within a single SQL statement.</p>
		 * @return bool <p>関数の作成に成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.createfunction.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function createFunction(string $name, $callback, int $argument_count = -1, int $flags = 0): bool {}

		/**
		 * Enable throwing exceptions
		 * <p>Controls whether the SQLite3 instance will throw exceptions or warnings on error.</p>
		 * @param bool $enableExceptions
		 * @return bool <p>Returns the old value; <b><code>TRUE</code></b> if exceptions were enabled, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/sqlite3.enableexceptions.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function enableExceptions(bool $enableExceptions = FALSE): bool {}

		/**
		 * 適切にエスケープされた文字列を返す
		 * <p>SQL 文の中で使えるよう適切にエスケープされた文字列を返します。</p><p>この関数は (まだ)バイナリデータ対応ではありません!</p><p>BLOB フィールドには NUL 文字が含まれる可能性があります。BLOB フィールドを適切に処理するには、かわりに <code>SQLite3Stmt::bindParam()</code> を用いましょう。</p>
		 * @param string $value <p>エスケープしたい文字列。</p>
		 * @return string <p>SQL 文の中で安全に使えるよう適切にエスケープされた文字列を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.escapestring.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function escapeString(string $value): string {}

		/**
		 * 指定したデータベースに、結果を返さないクエリを実行する
		 * <p>指定したデータベースに、結果を返さないクエリを実行します。</p>
		 * @param string $query <p>実行したい SQL クエリ (通常は INSERT、UPDATE あるいは DELETE クエリ)。</p>
		 * @return bool <p>クエリが成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.exec.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function exec(string $query): bool {}

		/**
		 * 直近で失敗した SQLite リクエストの結果コードを数値で返す
		 * <p>直近で失敗した SQLite リクエストの結果コードを数値で返します。</p>
		 * @return int <p>直近で失敗した SQLite リクエストの結果コードを数値で返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.lasterrorcode.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function lastErrorCode(): int {}

		/**
		 * 直近で失敗した SQLite リクエストについての英文テキストの説明を返す
		 * <p>直近で失敗した SQLite リクエストについての英文テキストの説明を返します。</p>
		 * @return string <p>直近で失敗した SQLite リクエストについての英文テキストの説明を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.lasterrormsg.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function lastErrorMsg(): string {}

		/**
		 * 直近の INSERT 文でデータベースに追加された行の ID を返す
		 * <p>直近の INSERT 文でデータベースに追加された行の ID を返します。</p>
		 * @return int <p>直近の INSERT 文でデータベースに追加された行の ID を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.lastinsertrowid.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function lastInsertRowID(): int {}

		/**
		 * SQLite 拡張ライブラリを読み込む
		 * <p>SQLite 拡張ライブラリを読み込みます。</p>
		 * @param string $shared_library <p>読み込みたいライブラリの名前。ライブラリは、設定オプション sqlite3.extension_dir で指定したディレクトリになければなりません。</p>
		 * @return bool <p>拡張ライブラリの読み込みに成功した場合に <b><code>TRUE</code></b>、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.loadextension.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function loadExtension(string $shared_library): bool {}

		/**
		 * SQLite データベースをオープンする
		 * <p>SQLite 3 データベースをオープンします。 暗号化込みでビルドされている場合は、キーの使用を試みます。</p>
		 * @param string $filename <p>SQLite データベースへのパス。インメモリデータベースを使う場合は <i>:memory:</i> を指定します。</p>
		 * @param int $flags <p>SQLite データベースのオープン方法を指定するフラグ。 デフォルトでは <i>SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE</i> を使用してオープンします。</p><ul> <li> <p><i>SQLITE3_OPEN_READONLY</i>: データベースを読み込み専用でオープンする</p> </li> <li> <p><i>SQLITE3_OPEN_READWRITE</i>: データベースを読み書き共用でオープンする</p> </li> <li> <p><i>SQLITE3_OPEN_CREATE</i>: データベースが存在しない場合は作成する</p> </li> </ul>
		 * @param string $encryption_key <p>オプションの暗号キー。SQLite データベースの暗号化と復号に使用します。 暗号化モジュールがインストールされていない場合は、このパラメータは何の影響も及ぼしません。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/sqlite3.open.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function open(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryption_key = NULL): void {}

		/**
		 * Opens a stream resource to read a BLOB
		 * <p>Opens a stream resource to read or write a BLOB, which would be selected by:</p><p>SELECT <code>column</code> FROM <code>dbname</code>.<code>table</code> WHERE rowid = <code>rowid</code></p><p><b>注意</b>:  It is not possible to change the size of a BLOB by writing to the stream. Instead, an UPDATE statement has to be executed, possibly using SQLite's zeroblob() function to set the desired BLOB size. </p>
		 * @param string $table <p>The table name.</p>
		 * @param string $column <p>The column name.</p>
		 * @param int $rowid <p>The row ID.</p>
		 * @param string $dbname <p>The symbolic name of the DB</p>
		 * @param int $flags <p>Either <b><code>SQLITE3_OPEN_READONLY</code></b> or <b><code>SQLITE3_OPEN_READWRITE</code></b> to open the stream for reading only, or for reading and writing, respectively.</p>
		 * @return resource <p>Returns a stream resource, 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
		 * @link https://php.net/manual/ja/sqlite3.openblob.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function openBlob(string $table, string $column, int $rowid, string $dbname = "main", int $flags = SQLITE3_OPEN_READONLY) {}

		/**
		 * 実行する SQL 文を準備する
		 * <p>実行する SQL 文を準備し、SQLite3Stmt オブジェクトを返します。</p>
		 * @param string $query <p>準備したい SQL クエリ。</p>
		 * @return SQLite3Stmt <p>成功した場合に SQLite3Stmt オブジェクト、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.prepare.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function prepare(string $query): \SQLite3Stmt {}

		/**
		 * SQL クエリを実行する
		 * <p>SQL クエリを実行し、クエリが結果を返す場合は SQLite3Result オブジェクトを返します。</p>
		 * @param string $query <p>実行したい SQL クエリ。</p>
		 * @return SQLite3Result <p>クエリが結果を返す場合は SQLite3Result オブジェクトを返します。 それ以外の場合は、成功した場合に <b><code>TRUE</code></b>、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.query.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function query(string $query): \SQLite3Result {}

		/**
		 * クエリを実行し、単一の結果を返す
		 * <p>クエリを実行し、単一の結果を返します。</p>
		 * @param string $query <p>実行したい SQL クエリ。</p>
		 * @param bool $entire_row <p>デフォルトでは、<b>querySingle()</b> はクエリが返す結果の最初のカラムの値を返します。 <code>entire_row</code> が <b><code>TRUE</code></b> の場合は、最初の行全体を配列で返します。</p>
		 * @return mixed <p>結果の最初のカラムの値あるいは最初の行全体の配列 (<code>entire_row</code> が <b><code>TRUE</code></b> の場合) を返します。</p><p>クエリ自体は有効であるけれども結果が返されなかった場合の返り値は、 <code>entire_row</code> が <b><code>FALSE</code></b> なら <b><code>NULL</code></b>、 そうでなければ空の配列となります。</p><p>クエリが無効な場合やクエリの実行に失敗した場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.querysingle.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function querySingle(string $query, bool $entire_row = FALSE) {}

		/**
		 * SQLite3 ライブラリのバージョンを、文字列定数と数値で返す
		 * <p>SQLite3 ライブラリのバージョンを、文字列定数と数値で返します。</p>
		 * @return array <p>キー "versionString" および "versionNumber" を持つ連想配列を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3.version.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function version(): array {}
	}

	/**
	 * <p>SQLite 3 拡張モジュールの結果セットを扱うクラスです。</p>
	 * @link https://php.net/manual/ja/class.sqlite3result.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SQLite3Result {

		/**
		 * n 番目のカラムの名前を返す
		 * <p><code>column_number</code> で指定したカラムの名前を返します。</p>
		 * @param int $column_number <p>0 から始まるカラムの数値インデックス。</p>
		 * @return string <p><code>column_number</code> で指定したカラムの名前を文字列で返します。</p>
		 * @link https://php.net/manual/ja/sqlite3result.columnname.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function columnName(int $column_number): string {}

		/**
		 * n 番目のカラムの型を返す
		 * <p><code>column_number</code> で指定したカラムの型を返します。</p>
		 * @param int $column_number <p>0 から始まるカラムの数値インデックス。</p>
		 * @return int <p><code>column_number</code> で指定したカラムのデータ型インデックス (<b><code>SQLITE3_INTEGER</code></b>、<b><code>SQLITE3_FLOAT</code></b>、 <b><code>SQLITE3_TEXT</code></b>、<b><code>SQLITE3_BLOB</code></b> あるいは <b><code>SQLITE3_NULL</code></b> のいずれか) を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3result.columntype.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function columnType(int $column_number): int {}

		/**
		 * 結果の行を、連想配列あるいは数値添字配列あるいはその両方で取得する
		 * <p>結果の行を、連想配列あるいは数値添字配列あるいはその両方で取得します。 デフォルトでは両方で取得します。</p>
		 * @param int $mode <p>次の行をどのように返すかを制御します。値は <i>SQLITE3_ASSOC</i> か <i>SQLITE3_NUM</i>、<i>SQLITE3_BOTH</i> のいずれかでなければなりません。</p><ul> <li> <p><i>SQLITE3_ASSOC</i>: 返された結果セットのカラム名をインデックスとする配列を返します。</p> </li> <li> <p><i>SQLITE3_NUM</i>: 返された結果セットのカラム番号をインデックスとする配列を返します。 カラム番号は 0 から始まります。</p> </li> <li> <p><i>SQLITE3_BOTH</i>: 返された結果セットのカラム名とカラム番号の両方をインデックスとする配列を返します。 カラム番号は 0 から始まります。</p> </li> </ul>
		 * @return array <p>結果の行を、連想配列あるいは数値添字配列あるいはその両方で取得します。 行がない場合は <b><code>FALSE</code></b> を返します。</p><p>The types of the values of the returned array are mapped from SQLite3 types as follows: integers are mapped to <code>integer</code> if they fit into the range <b><code>PHP_INT_MIN</code></b>..<b><code>PHP_INT_MAX</code></b>, and to <code>string</code> otherwise. Floats are mapped to <code>float</code>, <i>NULL</i> values are mapped to <code>null</code>, and strings and blobs are mapped to <code>string</code>.</p>
		 * @link https://php.net/manual/ja/sqlite3result.fetcharray.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function fetchArray(int $mode = SQLITE3_BOTH): array {}

		/**
		 * 結果セットを閉じる
		 * <p>結果セットを閉じます。</p>
		 * @return bool <p><b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3result.finalize.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function finalize(): bool {}

		/**
		 * 結果セットのカラム数を返す
		 * <p>結果セットのカラム数を返します。</p>
		 * @return int <p>結果セットのカラム数を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3result.numcolumns.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function numColumns(): int {}

		/**
		 * 結果セットを最初の行に戻す
		 * <p>結果セットを最初の行に戻します。</p>
		 * @return bool <p>結果セットを最初の行に戻すことに成功した場合に <b><code>TRUE</code></b>、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3result.reset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function reset(): bool {}
	}

	/**
	 * <p>SQLite 3 拡張モジュールのプリペアドステートメントを扱うクラスです。</p>
	 * @link https://php.net/manual/ja/class.sqlite3stmt.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class SQLite3Stmt {

		/**
		 * パラメータを変数にバインドする
		 * <p>パラメータを変数にバインドします。</p>
		 * @param mixed $sql_param <p>パラメータをどの変数にバインドするかを表す文字列あるいは整数値。</p>
		 * @param mixed $param <p>変数にバインドするパラメータ。</p>
		 * @param int $type <p>バインドするパラメータのデータ型。</p><ul> <li> <p><i>SQLITE3_INTEGER</i>: 符号付き整数。 値の大きさに応じて 1, 2, 3, 4, 6, あるいは 8 バイトで格納されます。</p> </li> <li> <p><i>SQLITE3_FLOAT</i>: 浮動小数点数値。 8 バイトの IEEE 浮動小数点数値として格納されます。</p> </li> <li> <p><i>SQLITE3_TEXT</i>: テキスト文字列。 データベースのエンコーディング (UTF-8, UTF-16BE あるいは UTF-16-LE) を用いて格納されます。</p> </li> <li> <p><i>SQLITE3_BLOB</i>: blob データ。 入力がそのままの形式で格納されます。</p> </li> <li> <p><i>SQLITE3_NULL</i>: NULL 値。</p> </li> </ul>
		 * @return bool <p>パラメータを変数にバインドした場合に <b><code>TRUE</code></b>、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3stmt.bindparam.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function bindParam($sql_param, &$param, int $type = NULL): bool {}

		/**
		 * パラメータの値を変数にバインドする
		 * <p>パラメータの値を変数にバインドします。</p>
		 * @param mixed $sql_param <p>値をどの変数にバインドするかを表す文字列あるいは整数値。</p>
		 * @param mixed $value <p>変数にバインドする値。</p>
		 * @param int $type <p>バインドする値のデータ型。</p><ul> <li> <p><i>SQLITE3_INTEGER</i>: 符号付き整数。 値の大きさに応じて 1, 2, 3, 4, 6, あるいは 8 バイトで格納されます。</p> </li> <li> <p><i>SQLITE3_FLOAT</i>: 浮動小数点数値。 8 バイトの IEEE 浮動小数点数値として格納されます。</p> </li> <li> <p><i>SQLITE3_TEXT</i>: テキスト文字列。 データベースのエンコーディング (UTF-8, UTF-16BE あるいは UTF-16-LE) を用いて格納されます。</p> </li> <li> <p><i>SQLITE3_BLOB</i>: blob データ。 入力がそのままの形式で格納されます。</p> </li> <li> <p><i>SQLITE3_NULL</i>: NULL 値。</p> </li> </ul>
		 * @return bool <p>値を変数にバインドした場合に <b><code>TRUE</code></b>、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3stmt.bindvalue.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function bindValue($sql_param, $value, int $type = NULL): bool {}

		/**
		 * 現在バインドされているすべてのパラメータをクリアする
		 * <p>現在バインドされているすべてのパラメータをクリアします。</p>
		 * @return bool <p>バインドされているパラメータのクリアに成功した場合に <b><code>TRUE</code></b>、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3stmt.clear.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function clear(): bool {}

		/**
		 * プリペアドステートメントを閉じる
		 * <p>プリペアドステートメントを閉じます。</p><p><b>注意</b>:  このプリペアドステートメントから取得したすべての SQLite3Result は、プリペアドステートメントを閉じた時点で無効になることに注意しましょう。 </p>
		 * @return bool <p><b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3stmt.close.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * プリペアドステートメントを実行し、結果セットオブジェクトを返す
		 * <p>プリペアドステートメントを実行し、結果セットオブジェクトを返します。</p><p>Result set objects retrieved by calling this method on the same statement object are not independent, but rather share the same underlying structure. Therefore it is recommended to call <code>SQLite3Result::finalize()</code>, before calling <b>SQLite3Stmt::execute()</b> on the same statement object again.</p>
		 * @return SQLite3Result <p>プリペアドステートメントの実行に成功した場合に SQLite3Result オブジェクト、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3stmt.execute.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function execute(): \SQLite3Result {}

		/**
		 * Get the SQL of the statement
		 * <p>Retrieves the SQL of the prepared statement. If <code>expanded</code> is <b><code>FALSE</code></b>, the unmodified SQL is retrieved. If <code>expanded</code> is <b><code>TRUE</code></b>, all query parameters are replaced with their bound values, or with an SQL <i>NULL</i>, if not already bound.</p>
		 * @param bool $expanded <p>Whether to retrieve the expanded SQL. Passing <b><code>TRUE</code></b> is only supported as of libsqlite 3.14.</p>
		 * @return string <p>Returns the SQL of the prepared statement, 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
		 * @link https://php.net/manual/ja/sqlite3stmt.getsql.php
		 * @since PHP 7 >= 7.4.0
		 */
		public function getSQL(bool $expanded = FALSE): string {}

		/**
		 * プリペアドステートメント内のパラメータの数を返す
		 * <p>プリペアドステートメント内のパラメータの数を返します。</p>
		 * @return int <p>プリペアドステートメント内のパラメータの数を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3stmt.paramcount.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function paramCount(): int {}

		/**
		 * Returns whether a statement is definitely read only
		 * <p>Returns whether a statement is definitely read only. A statement is considered read only, if it makes no <i>direct</i> changes to the content of the database file. Note that user defined SQL functions might change the database <i>indirectly</i> as a side effect.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if a statement is definitely read only, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/sqlite3stmt.readonly.php
		 * @since PHP 5 >= 5.3.6, PHP 7
		 */
		public function readOnly(): bool {}

		/**
		 * プリペアドステートメントをリセットする
		 * <p>プリペアドステートメントをリセットし、実行前の状態に戻します。 バインドした内容は、リセットしてもそのまま残ります。</p>
		 * @return bool <p>ステートメントのリセットに成功した場合に <b><code>TRUE</code></b>、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/sqlite3stmt.reset.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function reset(): bool {}
	}

	/**
	 * <b>SQLite3_result::fetchArray()</b> が返す結果セットが、 カラム名をインデックスとする配列であることを指定します。
	 */
	define('SQLITE3_ASSOC', null);

	/**
	 * SQLite3 BLOB 型を表します。
	 */
	define('SQLITE3_BLOB', null);

	/**
	 * <b>SQLite3_result::fetchArray()</b> が返す結果セットが、 カラム名とカラム番号の両方をインデックスとする配列であることを指定します。 カラム番号は 0 からはじまります。
	 */
	define('SQLITE3_BOTH', null);

	/**
	 * Specifies that a function created with <code>SQLite3::createFunction()</code> is deterministic, i.e. it always returns the same result given the same inputs within a single SQL statement. (PHP 7.1.4 以降で使用可能)
	 */
	define('SQLITE3_DETERMINISTIC', null);

	/**
	 * SQLite3 REAL (FLOAT) 型を表します。
	 */
	define('SQLITE3_FLOAT', null);

	/**
	 * SQLite3 INTEGER 型を表します。
	 */
	define('SQLITE3_INTEGER', null);

	/**
	 * SQLite3 NULL 型を表します。
	 */
	define('SQLITE3_NULL', null);

	/**
	 * <b>SQLite3_result::fetchArray()</b> が返す結果セットが、 カラム番号をインデックスとする配列であることを指定します。 カラム番号は 0 からはじまります。
	 */
	define('SQLITE3_NUM', null);

	/**
	 * データベースが存在しない場合に SQLite3 データベースを新規作成することを指定します。
	 */
	define('SQLITE3_OPEN_CREATE', null);

	/**
	 * SQLite3 データベースを読み込み専用でオープンすることを指定します。
	 */
	define('SQLITE3_OPEN_READONLY', null);

	/**
	 * SQLite3 データベースを読み書き両用でオープンすることを指定します。
	 */
	define('SQLITE3_OPEN_READWRITE', null);

	/**
	 * SQLite3 TEXT 型を表します。
	 */
	define('SQLITE3_TEXT', null);

}
