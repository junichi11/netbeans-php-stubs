<?php



namespace {

	/**
	 * 指定したデータベースに対してクエリを実行し、配列を返す
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_array_query()</b> は与えられたクエリを実行し、 結果セット全体を配列で返します。これは、結果セットの各レコードに関して <code>sqlite_query()</code>に続いて <code>sqlite_fetch_array()</code>をコールすることに似ています。 <b>sqlite_array_query()</b> は前述の方法よりも著しく高速です。</p><p><b>sqlite_array_query()</b> は、返すレコードが45件以下 のクエリーで最も有効です。これ以上のデータがある場合には、 より性能を最適化するために、代わりに <code>sqlite_unbuffered_query()</code>を使用するようなスクリ プトを書くことをお薦めします。</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param string $query <p>実行するクエリ</p> <p>クエリ内のデータは 適切にエスケープ する必要があります。</p>
	 * @param int $result_type <p>オプションの <code>result_type</code> パラメータには定数を指定でき、返される配列の添字を定義します。 <b><code>SQLITE_ASSOC</code></b> を用いると、連想配列の添字(名前フィールド)のみが 返されます。一方、<b><code>SQLITE_NUM</code></b> は、 数値の添字(フィールド番号)のみを返します。<b><code>SQLITE_BOTH</code></b> は、 連想配列の添字と数値の添字の両方を返します。 <b><code>SQLITE_BOTH</code></b> がこの関数のデフォルトです。</p>
	 * @param bool $decode_binary <p><code>decode_binary</code> パラメータが <b><code>TRUE</code></b> (デフォルト)に 設定された場合、PHP はバイナリエンコーディングをデコードします。 これは、<code>sqlite_escape_string()</code> によりエンコードされたデータに 適用されます。sqlite をサポートする他のアプリケーションにより 作成されたデータベースを処理する時以外は、この値をデフォルトのままにしておくべきです。</p>
	 * @return array <p>結果セット全体の配列、その他の場合は <b><code>FALSE</code></b> を返します。</p><p><b><code>SQLITE_ASSOC</code></b> および <b><code>SQLITE_BOTH</code></b> で 返されるカラム名は、設定オプション sqlite.assoc_case の値に基づき、 大文字小文字が変換されます。</p>
	 * @link https://php.net/manual/ja/function.sqlite-array-query.php
	 * @see sqlite_query(), sqlite_fetch_array(), sqlite_fetch_string()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_array_query($dbhandle, string $query, int $result_type = SQLITE_BOTH, bool $decode_binary = TRUE): array {}

	/**
	 * ビジータイムアウト時間を設定またはビジーハンドラを無効にする
	 * <p>オブジェクト指向型 (メソッド):</p><p>SQLite データベース <code>database</code>が利用可能となるまでの 最大の待ち時間を <code>milliseconds</code> に設定します。</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param int $milliseconds <p>ミリ秒での数。 <code>milliseconds</code> が <i>0</i>の場合、 ビジーハンドラは無効となり、他のプロセス/スレッドが更新用にデータベー スをロックしている際に、sqliteは<i>SQLITE_BUSY</i>を 直ちに返します。</p> <p>PHPはデフォルトでデータベースがオープンされる際のビジータイムアウト を 60 秒に設定しています。</p>  <p><b>注意</b>:</p> <p>1 秒は 1000 ミリ秒です。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.sqlite-busy-timeout.php
	 * @see sqlite_open()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_busy_timeout($dbhandle, int $milliseconds): void {}

	/**
	 * 直近のSQLステートメントにより変更されたレコード数を返す
	 * <p>オブジェクト指向型 (メソッド):</p><p>データベースハンドル <code>dbhandle</code> に対して実行された 直近のSQLステートメントによって変更されたレコード数を返します。</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @return int <p>変更された行数を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-changes.php
	 * @see sqlite_open()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_changes($dbhandle): int {}

	/**
	 * オープンされたSQLiteデータベースを閉じる
	 * <p>指定したデータベースハンドル <code>db_handle</code> を閉じます。 このデータベースに持続性がある場合、このデータベースは閉じられ、 持続的データベースリストから削除されます。</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.sqlite-close.php
	 * @see sqlite_open(), sqlite_popen()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_close($dbhandle): void {}

	/**
	 * カレントの結果セットのレコードからカラムを1列取得する
	 * <p>クエリ結果ハンドル<code>result</code> の現在のレコードから <code>index_or_name</code> (文字列の場合) というカラム名、 または、カラム番号 <code>index_or_name</code> (整数の場合) の値を取得します。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param mixed $index_or_name <p>取得するカラムインデックス、もしくは名前</p>
	 * @param bool $decode_binary <p><code>decode_binary</code> パラメータが <b><code>TRUE</code></b> (デフォルト)に 設定された場合、PHP はバイナリエンコーディングをデコードします。 これは、<code>sqlite_escape_string()</code> によりエンコードされたデータに 適用されます。sqlite をサポートする他のアプリケーションにより 作成されたデータベースを処理する時以外は、この値をデフォルトのままにしておくべきです。</p>
	 * @return mixed <p>カラムの値を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-column.php
	 * @see sqlite_fetch_string()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_column($result, $index_or_name, bool $decode_binary = TRUE) {}

	/**
	 * SQLステートメントで使用する集約UDFを登録する
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_create_aggregate()</b> は、 <code>sqlite_create_function()</code> に似ていますが、 クエリの全レコードを通じて集約された結果を計算するために使用される 関数を登録するところが異なります。</p><p>この関数と <code>sqlite_create_function()</code> の主な違い は、二つの関数が集約を管理するために必要であることです。 <code>step_func</code>は、結果セットの各レコードに関して コールされます。PHP関数は、結果を加算し、集約コンテキストに保存する 必要があります。 全レコードが処理された後、 <code>finalize_func</code>がコールされ、 集約コンテキストからデータが取得され、結果が返されます。 コールバック関数は SQLite が認識可能な型 (すなわち スカラー型) を返す必要があります。</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param string $function_name <p>SQL ステートメントで使用される関数名</p>
	 * @param callable $step_func <p>結果セットの各レコードに対してコールされるコールバック関数。 この関数のパラメータは <i>&amp;$context, $value, ...</i> です。</p>
	 * @param callable $finalize_func <p>各レコードからの "段階的な" データを集約するためのコールバック関数。 この関数のパラメータは <i>&amp;$context</i> で、 集約の最終的な結果を返さなければなりません。</p>
	 * @param int $num_args <p>見積もられた引数の数をコールバック関数が受け入れる場合に SQLite パーサへ渡すヒント</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.sqlite-create-aggregate.php
	 * @see sqlite_create_function(), sqlite_udf_encode_binary(), sqlite_udf_decode_binary()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_create_aggregate($dbhandle, string $function_name, callable $step_func, callable $finalize_func, int $num_args = -1): void {}

	/**
	 * SQLステートメントで使用するために"通常の"ユーザー定義関数を登録する
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_create_function()</b> により、SQLiteにPHP関数 をUDF (ユーザー定義関数)として登録することが可能で す。この関数は、SQLステートメントの中からコールできます。</p><p>UDFは、SELECTおよびUPDATEステートメント、そして、トリガーの中のよう に関数をコールできる全てのSQLステートメントで使用可能です。</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param string $function_name <p>SQL ステートメントで使用する関数名</p>
	 * @param callable $callback <p>定義された SQL 関数を処理するためのコールバック関数</p> <p><b>注意</b>:  コールバック関数は SQLite で有効な型 (例えば スカラー型) を返す必要があります </p>
	 * @param int $num_args <p>コールバック関数が規定の引数の数を受け入れるかどうかを決定するため SQLite パーサに渡すヒント</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.sqlite-create-function.php
	 * @see sqlite_create_aggregate()
	 * @since PHP 5 < 5.4.0, sqlite >= 1.0.0
	 */
	function sqlite_create_function($dbhandle, string $function_name, callable $callback, int $num_args = -1): void {}

	/**
	 * 結果セットからカレントのレコードを配列として取得する
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_current()</b> は <code>sqlite_fetch_array()</code> と同じですが、 データを返す前に次のレコードに移動せず、カレントの位置からのみデー タを返すという違いがあります。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param int $result_type <p>オプションの <code>result_type</code> パラメータには定数を指定でき、返される配列の添字を定義します。 <b><code>SQLITE_ASSOC</code></b> を用いると、連想配列の添字(名前フィールド)のみが 返されます。一方、<b><code>SQLITE_NUM</code></b> は、 数値の添字(フィールド番号)のみを返します。<b><code>SQLITE_BOTH</code></b> は、 連想配列の添字と数値の添字の両方を返します。 <b><code>SQLITE_BOTH</code></b> がこの関数のデフォルトです。</p>
	 * @param bool $decode_binary <p><code>decode_binary</code> パラメータが <b><code>TRUE</code></b> (デフォルト)に 設定された場合、PHP はバイナリエンコーディングをデコードします。 これは、<code>sqlite_escape_string()</code> によりエンコードされたデータに 適用されます。sqlite をサポートする他のアプリケーションにより 作成されたデータベースを処理する時以外は、この値をデフォルトのままにしておくべきです。</p>
	 * @return array <p>結果セットからカレントレコードの配列を返します。 現在の位置が最終レコード以降の場合、 <b><code>FALSE</code></b> を返します。</p><p><b><code>SQLITE_ASSOC</code></b> および <b><code>SQLITE_BOTH</code></b> で 返されるカラム名は、設定オプション sqlite.assoc_case の値に基づき、 大文字小文字が変換されます。</p>
	 * @link https://php.net/manual/ja/function.sqlite-current.php
	 * @see sqlite_seek(), sqlite_next(), sqlite_fetch_array()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_current($result, int $result_type = SQLITE_BOTH, bool $decode_binary = TRUE): array {}

	/**
	 * エラーコードの説明を返す
	 * <p><code>sqlite_last_error()</code>から返される <code>error_code</code>の可読性が高い説明を返します。</p>
	 * @param int $error_code <p>使用するエラーコード。これは <code>sqlite_last_error()</code> から返されたものです。</p>
	 * @return string <p><code>error_code</code> に対応する可読形式の説明を文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-error-string.php
	 * @see sqlite_last_error()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_error_string(int $error_code): string {}

	/**
	 * クエリパラメータ用に文字列をエスケープする
	 * <p><b>sqlite_escape_string()</b> は、 <code>item</code> で指定した文字列を SQLite SQLステートメントで使用できるように正しくクオートします。 この際、シングルクオート(<i>'</i>)は2重にされ、 クエリ文字列のバイナリセーフでない文字がチェックされます。</p><p>このエンコーディングは、データ挿入を安全に行いますが、 テキスト比較は単純化され、バイナリデータを含むカラムについては クエリの中で<i>LIKE</i>句を使用できません。 実際には、バイナリカラムでこのようなことをするスキーマにはしないの で、これが問題になることはないでしょう (実際には、ファイルのような他の手段でバイナリデータを保存する方が良 いでしょう)。</p>
	 * @param string $item <p>クォートしたい文字列。</p> <p><code>item</code>が<i>NUL</i>文字を含む場合、 または、16進表現の<i>0x01</i>で始まる場合、 PHPはバイナリデータを安全に保存/取得するためのバイナリエンコーディ ングを適用します。</p>
	 * @return string <p>SQLite の SQL 文で使用できる形式にエスケープした文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-escape-string.php
	 * @see sqlite_udf_encode_binary()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_escape_string(string $item): string {}

	/**
	 * 与えられたデータベースに対して結果を伴わないクエリを実行する
	 * <p>オブジェクト指向型 (メソッド):</p><p>与えられたデータベースハンドル (<code>dbhandle</code> パラメータで指定される) に対して <code>query</code> によって指定される SQL ステートメントを実行します。</p><p>SQLiteは、セミコロンで区切られた複数のクエリを実行します。 これにより、ファイルからロードするかスクリプトに埋め込んだ SQL をバッチ実行することができます。</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param string $query <p>実行するクエリを指定します。</p> <p>クエリ内のデータは 適切にエスケープ する必要があります。</p>
	 * @param string $error_msg <p>エラーが発生した場合、指定された変数に詰め込まれます。 SQL 文法エラーは <code>sqlite_last_error()</code> 関数では取得できないので、これは特に重要です。</p>
	 * @return bool <p>この関数はブール型の結果を返します。 成功時は <b><code>TRUE</code></b>、失敗時は <b><code>FALSE</code></b> を返します。 もしレコードを返すクエリを実行する必要がある場合は <code>sqlite_query()</code> を参照ください。</p><p><b><code>SQLITE_ASSOC</code></b> および <b><code>SQLITE_BOTH</code></b> で 返されるカラム名は、設定オプション sqlite.assoc_case の値に基づき、 大文字小文字が変換されます。</p>
	 * @link https://php.net/manual/ja/function.sqlite-exec.php
	 * @see sqlite_query(), sqlite_unbuffered_query(), sqlite_array_query()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.3
	 */
	function sqlite_exec($dbhandle, string $query, string &$error_msg = NULL): bool {}

	/**
	 * SQLite データベースをオープンし、SQLiteDatabse オブジェクトを返す
	 * <p><b>sqlite_factory()</b> は <code>sqlite_open()</code> と同様に SQLite データベースをオープン、もしくはデータベースが存在しない場合は生成しようと試みます。しかしながら、リソースの代わりに SQLiteDatabase オブジェクトが返されます。詳細な使用法と注意事項については、 <code>sqlite_open()</code> を参照ください。</p>
	 * @param string $filename <p>SQLite データベースのファイル名</p>
	 * @param int $mode <p>ファイルのモード。読み込み専用モードでデータベースをオープンするために 使用することを目的としています。現在、このパラメータは SQLite ライブラリに無視されます。このモードのデフォルト値は、 8 進数値 <i>0666</i> で、これは推奨される値です。</p>
	 * @param string $error_message <p>参照として渡され、エラーが発生した場合に データベースがオープンできなかった原因を説明する 記述的なエラーメッセージを保持するために設定されます。</p>
	 * @return SQLiteDatabase <p>成功時に SQLiteDatabase オブジェクト、失敗時に <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-factory.php
	 * @see sqlite_open(), sqlite_popen()
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_factory(string $filename, int $mode = 0666, string &$error_message = NULL): \SQLiteDatabase {}

	/**
	 * 結果セットから全てのレコードを配列の配列として取得する
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_fetch_all()</b> は結果リソース <code>result</code> から全結果セットの配列を返します。 これは <code>sqlite_query()</code> (もしくは <code>sqlite_unbuffered_query()</code>) の後に結果セットの各レコードに対して <code>sqlite_fetch_array()</code> を行うことと等価です。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param int $result_type <p>オプションの <code>result_type</code> パラメータには定数を指定でき、返される配列の添字を定義します。 <b><code>SQLITE_ASSOC</code></b> を用いると、連想配列の添字(名前フィールド)のみが 返されます。一方、<b><code>SQLITE_NUM</code></b> は、 数値の添字(フィールド番号)のみを返します。<b><code>SQLITE_BOTH</code></b> は、 連想配列の添字と数値の添字の両方を返します。 <b><code>SQLITE_BOTH</code></b> がこの関数のデフォルトです。</p>
	 * @param bool $decode_binary <p><code>decode_binary</code> パラメータが <b><code>TRUE</code></b> (デフォルト)に 設定された場合、PHP はバイナリエンコーディングをデコードします。 これは、<code>sqlite_escape_string()</code> によりエンコードされたデータに 適用されます。sqlite をサポートする他のアプリケーションにより 作成されたデータベースを処理する時以外は、この値をデフォルトのままにしておくべきです。</p>
	 * @return array <p>結果セットからのカレントレコードの配列を返します。 <code>sqlite_query()</code> の直後にコールされた場合、 全ての行を返します。<code>sqlite_fetch_array()</code> の後にコールされた場合、残りの行を返します。 結果セットに行が残っていない場合、空の配列を返します。</p><p><b><code>SQLITE_ASSOC</code></b> および <b><code>SQLITE_BOTH</code></b> で 返されるカラム名は、設定オプション sqlite.assoc_case の値に基づき、 大文字小文字が変換されます。</p>
	 * @link https://php.net/manual/ja/function.sqlite-fetch-all.php
	 * @see sqlite_fetch_array()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_fetch_all($result, int $result_type = SQLITE_BOTH, bool $decode_binary = TRUE): array {}

	/**
	 * 結果セットから次のレコードを配列として取得する
	 * <p>オブジェクト指向型 (メソッド):</p><p>指定した結果ハンドル <code>result</code> から次のレコードを取得 します。レコードがもうない場合は <b><code>FALSE</code></b>を返し、それ以外は レコードデータを含む連想配列を返します。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param int $result_type <p>オプションの <code>result_type</code> パラメータには定数を指定でき、返される配列の添字を定義します。 <b><code>SQLITE_ASSOC</code></b> を用いると、連想配列の添字(名前フィールド)のみが 返されます。一方、<b><code>SQLITE_NUM</code></b> は、 数値の添字(フィールド番号)のみを返します。<b><code>SQLITE_BOTH</code></b> は、 連想配列の添字と数値の添字の両方を返します。 <b><code>SQLITE_BOTH</code></b> がこの関数のデフォルトです。</p>
	 * @param bool $decode_binary <p><code>decode_binary</code> パラメータが <b><code>TRUE</code></b> (デフォルト)に 設定された場合、PHP はバイナリエンコーディングをデコードします。 これは、<code>sqlite_escape_string()</code> によりエンコードされたデータに 適用されます。sqlite をサポートする他のアプリケーションにより 作成されたデータベースを処理する時以外は、この値をデフォルトのままにしておくべきです。</p>
	 * @return array <p>結果セットの次レコードの配列を返します。 次レコードの位置が最終レコード以降の場合、<b><code>FALSE</code></b> を返します。</p><p><b><code>SQLITE_ASSOC</code></b> および <b><code>SQLITE_BOTH</code></b> で 返されるカラム名は、設定オプション sqlite.assoc_case の値に基づき、 大文字小文字が変換されます。</p>
	 * @link https://php.net/manual/ja/function.sqlite-fetch-array.php
	 * @see sqlite_array_query(), sqlite_fetch_string()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_fetch_array($result, int $result_type = SQLITE_BOTH, bool $decode_binary = TRUE): array {}

	/**
	 * 特定のテーブルからカラム型の配列を返す
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_fetch_column_types()</b> は、 指定されたテーブル <code>table_name</code> からカラムのデータ型の配列を返します。</p>
	 * @param string $table_name <p>問い合わせるテーブル名</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param int $result_type <p>オプションパラメータ <code>result_type</code> は定数を受け付け、 返される配列をどの様にインデックス付けするかを決定します。 <b><code>SQLITE_ASSOC</code></b> を使用すると連想インデックス (名前付けられたフィールド) のみを返し、 <b><code>SQLITE_NUM</code></b> の場合は数値インデックス (順序を表すフィールド番号) のみを返します。 <b><code>SQLITE_ASSOC</code></b> がこの関数のデフォルトです。</p>
	 * @return array <p>カラムのデータ型の配列を返します。エラー時は <b><code>FALSE</code></b> を返します。</p><p><b><code>SQLITE_ASSOC</code></b> および <b><code>SQLITE_BOTH</code></b> で 返されるカラム名は、設定オプション sqlite.assoc_case の値に基づき、 大文字小文字が変換されます。</p>
	 * @link https://php.net/manual/ja/function.sqlite-fetch-column-types.php
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_fetch_column_types(string $table_name, $dbhandle, int $result_type = SQLITE_ASSOC): array {}

	/**
	 * Fetches the next row from a result set as an object
	 * <p>オブジェクト指向型 (method):</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $result
	 * @param string $class_name
	 * @param array $ctor_params
	 * @param bool $decode_binary
	 * @return object
	 * @link https://php.net/manual/ja/function.sqlite-fetch-object.php
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_fetch_object($result, string $class_name = NULL, array $ctor_params = NULL, bool $decode_binary = TRUE): object {}

	/**
	 * 結果セットの最初のカラムを文字列として取得する
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_fetch_single()</b> は、 レコードセットの最初のカラムの値を返すことを除いて <code>sqlite_fetch_array()</code> と等価です。</p><p>この関数は、データの単一カラムの値を確認するだけの場合に データを処理する最善の方法です。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param bool $decode_binary <p><code>decode_binary</code> パラメータが <b><code>TRUE</code></b> (デフォルト)に 設定された場合、PHP はバイナリエンコーディングをデコードします。 これは、<code>sqlite_escape_string()</code> によりエンコードされたデータに 適用されます。sqlite をサポートする他のアプリケーションにより 作成されたデータベースを処理する時以外は、この値をデフォルトのままにしておくべきです。</p>
	 * @return string <p>最初のカラムの値を文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-fetch-single.php
	 * @see sqlite_fetch_array()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.1
	 */
	function sqlite_fetch_single($result, bool $decode_binary = TRUE): string {}

	/**
	 * sqlite_fetch_single() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>sqlite_fetch_single()</code>.</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param bool $decode_binary <p><code>decode_binary</code> パラメータが <b><code>TRUE</code></b> (デフォルト)に 設定された場合、PHP はバイナリエンコーディングをデコードします。 これは、<code>sqlite_escape_string()</code> によりエンコードされたデータに 適用されます。sqlite をサポートする他のアプリケーションにより 作成されたデータベースを処理する時以外は、この値をデフォルトのままにしておくべきです。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sqlite-fetch-string.php
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_fetch_string($result, bool $decode_binary = TRUE): string {}

	/**
	 * 特定のフィールドの名前を返す
	 * <p>オブジェクト指向型 (メソッド):</p><p>Given the ordinal column number, <code>field_index</code>, <b>sqlite_field_name()</b> returns the name of that field in the result set <code>result</code>.</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param int $field_index <p>結果セットにおけるオリジナルのカラム番号</p>
	 * @return string <p>与えられたオリジナルのカラム番号での SQLite 結果セット中のフィールド名を返します。エラーの場合は、<b><code>FALSE</code></b> を返します。</p><p><b><code>SQLITE_ASSOC</code></b> および <b><code>SQLITE_BOTH</code></b> で 返されるカラム名は、設定オプション sqlite.assoc_case の値に基づき、 大文字小文字が変換されます。</p>
	 * @link https://php.net/manual/ja/function.sqlite-field-name.php
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_field_name($result, int $field_index): string {}

	/**
	 * まだレコードがあるかないかを返す
	 * <p>与えられた結果セット中にまだレコードがあるかどうかを見つけます。</p>
	 * @param resource $result <p>SQLite 結果リソース</p>
	 * @return bool <p><code>result</code> ハンドルにまだレコードがある場合 <b><code>TRUE</code></b> を返します。そうでない場合 <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-has-more.php
	 * @see sqlite_num_rows(), sqlite_changes()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_has_more($result): bool {}

	/**
	 * 前のレコードがあるかどうかを返す
	 * <p>オブジェクト指向型 (メソッド):</p><p>与えられた結果ハンドルに前のレコードがあるかどうかを検査します。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>  <p><b>注意</b>:</p> <p>この関数は、 バッファなしの結果ハンドルで使用することはできません。</p>
	 * @return bool <p>結果ハンドル <code>result</code> に前のレコードがある場合 <b><code>TRUE</code></b>、 そうでない場合 <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-has-prev.php
	 * @see sqlite_prev(), sqlite_has_more(), sqlite_num_rows()
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_has_prev($result): bool {}

	/**
	 * カレントレコードのインデックスを返す
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>SQLiteResult::key()</b> は、バッファされた結果セット <code>result</code> のカレントレコードのインデックスを返します。</p><p>他の SQLite 関数とは異なり、この関数には手続き型のバージョンはありません。 <b>SQLiteResult</b> オブジェクトのメソッドとしてのみ呼ぶことができます。</p>
	 * @return int <p>バッファされた結果セット <code>result</code> のカレントレコードのインデックスを返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-key.php
	 * @see sqlite_next(), sqlite_current(), sqlite_rewind()
	 * @since PHP 5 >= 5.1.0 < 5.4.0
	 */
	function sqlite_key(): int {}

	/**
	 * データベースに関する直近のエラーコードを返す
	 * <p>オブジェクト指向型 (メソッド):</p><p><code>dbhandle</code> (データベースハンドル)、 上で実行された直近の処理のエラーコード、 あるいはエラーが発生しなかった場合に <i>0</i> を返します。人が読み取れるエラーコードの詳細は、 <code>sqlite_error_string()</code> で取得可能です。</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @return int <p>エラーコード、あるいはエラーが発生していない場合に 0 を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-last-error.php
	 * @see sqlite_error_string()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_last_error($dbhandle): int {}

	/**
	 * 直近に挿入されたレコードのrowidを返す
	 * <p>オブジェクト指向型 (メソッド):</p><p>データベース<code>dbhandle</code>に直近に挿入されたレコードの rowid を返します。ただし、この rowid が auto-increment フィールドとして作成されている場合に限ります。</p><p>テーブルスキーマで <i>INTEGER PRIMARY KEY</i>と宣言することにより、 SQLiteでauto-incrementフィールドを作成することができます。</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @return int <p>行 ID を整数値で返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-last-insert-rowid.php
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_last_insert_rowid($dbhandle): int {}

	/**
	 * リンクされているSQLiteライブラリのエンコーディングを返す
	 * <p>SQLiteライブラリは、<i>ISO-8859-1</i>または<i>UTF-8</i> 互換モードのどちらかでコンパイルすることができます。この関数により、 使用するライブラリのエンコーディングを特定することが可能です。</p><p>デフォルトのPHPのディストリビューションでは、libsqliteを <i>ISO-8859-1</i>エンコーディングモードで構築します。しかし、この名前は誤りです。 <i>ISO-8859-1</i>を処理するというのではなく、 このモードは文字列の比較やソートに使用するカレントのロケールを使用します。 このため、<i>ISO-8859-1</i>ではなく、'<i>8ビット</i>'とみなすべきです。</p><p><i>UTF-8</i>サポートを指定してコンパイルした場合、sqliteは データ中の <i>UTF-8</i>マルチバイト文字のエンコードおよびデコードを行います。 しかし、データ処理を完全に行うことはまだできず (例えば、正規化は行われません)、いくつかの比較処理は、まだ、正しく行うことができません。</p><p><i>UTF-8</i>サポートを指定してコンパイルされたバージョンのSQLite ライブラリを組み込んでWebサーバー版のPHPを使用することは推奨されません。 これは、<i>UTF-8</i>エンコーディングで問題が検出された場合にlibsqlite がプロセスを強制終了するためです。</p>
	 * @return string <p>ライブラリのエンコーディングを返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-libencoding.php
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_libencoding(): string {}

	/**
	 * リンクされているSQLiteライブラリのバージョンを返す
	 * <p>リンクされているSQLiteライブラリのバージョンを文字列として返します。</p>
	 * @return string <p>ライブラリのバージョンを文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-libversion.php
	 * @see sqlite_libencoding()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_libversion(): string {}

	/**
	 * 次のレコード番号へシークする
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_next()</b>は、結果ハンドル <code>result</code>を次のレコードへ進めます。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @return bool <p>成功時は <b><code>TRUE</code></b>、もしレコードがない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-next.php
	 * @see sqlite_seek(), sqlite_current(), sqlite_rewind()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_next($result): bool {}

	/**
	 * 結果セットのフィールド数を返す
	 * <p>オブジェクト指向型 (メソッド):</p><p>結果セット <code>result</code> のフィールド数を返します。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @return int <p>フィールド数を整数値で返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-num-fields.php
	 * @see sqlite_changes(), sqlite_num_rows()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_num_fields($result): int {}

	/**
	 * 結果セットのレコード数を返す
	 * <p>オブジェクト指向型 (メソッド):</p><p>バッファされた結果セット <code>result</code> のレコード数を返します。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>  <p><b>注意</b>:</p> <p>この関数は、 バッファなしの結果ハンドルで使用することはできません。</p>
	 * @return int <p>行数を整数値で返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-num-rows.php
	 * @see sqlite_changes(), sqlite_query(), sqlite_num_fields()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_num_rows($result): int {}

	/**
	 * SQLiteデータベースをオープンする。データベースが存在しない場合は作 成する
	 * <p>オブジェクト指向型 (コンストラクタ):</p><p>SQLite データベースをオープン、 もしくは存在しない場合データベースを生成します。</p>
	 * @param string $filename <p>SQLite データベースのファイル名。もしこのファイルが存在しない場合、 SQLite はファイルを生成しようとします。 データを挿入したり、データベーススキーマを変更、 もしくはデータベースが存在しない場合にデータベースを生成する場合、 PHP はファイルに対する書き込み権限を持っている必要があります。</p>
	 * @param int $mode <p>ファイルのモード。読み込み専用モードでデータベースをオープンするために 使用することを目的としています。現在、このパラメータは SQLite ライブラリに無視されます。このモードのデフォルト値は、 8 進数値 <i>0666</i> で、これは推奨される値です。</p>
	 * @param string $error_message <p>参照として渡され、エラーが発生した場合に データベースがオープンできなかった原因を説明する 記述的なエラーメッセージを保持するために設定されます。</p>
	 * @return resource <p>成功時にリソース (データベースハンドル)、失敗時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-open.php
	 * @see sqlite_popen(), sqlite_close(), sqlite_factory()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_open(string $filename, int $mode = 0666, string &$error_message = NULL) {}

	/**
	 * SQLiteデータベースへの持続的ハンドルをオープンする。存在しない場合 には、データベースを作成する
	 * <p>この関数は<code>sqlite_open()</code>と同じように動作しますが、 PHPの持続的リソース機能を使用するところが異なります。 パラメータの意味に関する詳細については、マニュアルの <code>sqlite_open()</code> を参照してください。</p><p><b>sqlite_popen()</b> は、まず、持続的ハンドルが指定し た<code>filename</code>に関してすでにオープンされているか どうかを調べます。みつかった場合には、スクリプトのそのハンドルを返 し、それ以外は、データベースのハンドルを新規にオープンします。</p><p>この手法の利点は、持続性のあるWebサーバー SAPI(通常のCGIまたはCLI以外 の全てのSAPI)により処理される各ページについてデータベースやインデッ クススキーマを再読み込みする性能上のコストを払うことがないことです。</p><p><b>注意</b>:  持続的ハンドルを使用している時にデータベースが(crontab等の)バック グラウンドプロセスにより更新され、このプロセスが上書きすることによ り(消去して、再構築するか、カレントのバージョンを置換するために更 新後のバージョンを移動)データベースを再生成する場合、 古いバージョンのデータベースに関する持続的ハンドルが再利用されると いった予測できない動作を引き起こす可能性があります。   この問題を回避するために、バックグラウンドプロセスが同じデータベー スファイルをオープンするようにし、更新をトランザクションで行うよう にしてください。 </p>
	 * @param string $filename <p>SQLite データベースのファイル名。もしこのファイルが存在しない場合、 SQLite はファイルを生成しようとします。 データを挿入したり、データベーススキーマを変更、 もしくはデータベースが存在しない場合にデータベースを生成する場合、 PHP はファイルに対する書き込み権限を持っている必要があります。</p>
	 * @param int $mode <p>ファイルのモード。読み込み専用モードでデータベースをオープンするために 使用することを目的としています。現在、このパラメータは SQLite ライブラリに無視されます。このモードのデフォルト値は、 8 進数値 <i>0666</i> で、これは推奨される値です。</p>
	 * @param string $error_message <p>参照として渡され、エラーが発生した場合に データベースがオープンできなかった原因を説明する 記述的なエラーメッセージを保持するために設定されます。</p>
	 * @return resource <p>成功時にリソース (データベースハンドル)、失敗時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-popen.php
	 * @see sqlite_open(), sqlite_close(), sqlite_factory()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_popen(string $filename, int $mode = 0666, string &$error_message = NULL) {}

	/**
	 * 結果セットの前のレコード番号へシークする
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_prev()</b> は、結果ハンドル <code>result</code> を前のレコードに戻します。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>  <p><b>注意</b>:</p> <p>この関数は、 バッファなしの結果ハンドルで使用することはできません。</p>
	 * @return bool <p>成功時は <b><code>TRUE</code></b>、もしレコードがない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-prev.php
	 * @see sqlite_has_prev(), sqlite_rewind(), sqlite_next()
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_prev($result): bool {}

	/**
	 * 指定したデータベースに対してクエリを実行し、結果ハンドル を返す
	 * <p>オブジェクト指向型 (メソッド):</p><p>指定したデータベースにより <code>query</code> で指定した SQL ステートメントを実行します。</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param string $query <p>実行するクエリ</p> <p>クエリ内のデータは 適切にエスケープ する必要があります。</p>
	 * @param int $result_type <p>オプションの <code>result_type</code> パラメータには定数を指定でき、返される配列の添字を定義します。 <b><code>SQLITE_ASSOC</code></b> を用いると、連想配列の添字(名前フィールド)のみが 返されます。一方、<b><code>SQLITE_NUM</code></b> は、 数値の添字(フィールド番号)のみを返します。<b><code>SQLITE_BOTH</code></b> は、 連想配列の添字と数値の添字の両方を返します。 <b><code>SQLITE_BOTH</code></b> がこの関数のデフォルトです。</p>
	 * @param string $error_msg <p>もしエラーが発生した場合、ここに保存されます。SQL 構文のエラーは <code>sqlite_last_error()</code> 関数で取得することが できないため、このパラメータが特に重要となります。</p>
	 * @return resource <p>この関数は結果ハンドルを返します。失敗した場合に <b><code>FALSE</code></b> を返します。 レコードを返すクエリの場合、結果ハンドルは <code>sqlite_fetch_array()</code> や <code>sqlite_seek()</code> のような関数で使用することができます。</p><p>クエリの型によらず、この関数はクエリが失敗した場合に<b><code>FALSE</code></b> を返し ます。</p><p><b>sqlite_query()</b> は、バッファリングされ、シーク可 能な結果ハンドルを返します。これは、レコードにランダムにアクセスす る必要がある小さなクエリの場合に有用です。バッファリングされた結果 ハンドルは、結果全体を保持するためのメモリを確保し、結果が取得され るまでは値を返しません。 データに連続的にアクセスしたい場合、かわりにより高性能な <code>sqlite_unbuffered_query()</code> を使用することが 推奨されます。</p>
	 * @link https://php.net/manual/ja/function.sqlite-query.php
	 * @see sqlite_unbuffered_query(), sqlite_array_query()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_query($dbhandle, string $query, int $result_type = SQLITE_BOTH, string &$error_msg = NULL) {}

	/**
	 * 先頭レコード番号へシークする
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_rewind()</b>は、 結果セットの先頭レコードへシークします。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>  <p><b>注意</b>:</p> <p>この関数は、 バッファなしの結果ハンドルで使用することはできません。</p>
	 * @return bool <p>結果セットにレコードがもうない場合は、<b><code>FALSE</code></b>、 そうでない場合は <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-rewind.php
	 * @see sqlite_next(), sqlite_current(), sqlite_seek()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_rewind($result): bool {}

	/**
	 * 特定のレコード番号へシークする
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_seek()</b>は、パラメータ <code>rownum</code>で指定したレコードにシークします。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>  <p><b>注意</b>:</p> <p>この関数は、 バッファなしの結果ハンドルで使用することはできません。</p>
	 * @param int $rownum <p>シークするオリジナルのレコード番号。 レコード番号は 0 から始まります (0 が先頭レコード) 。</p>  <p><b>注意</b>:</p> <p>この関数は、 バッファなしの結果ハンドルで使用することはできません。</p>
	 * @return bool <p>レコードが存在しない場合は <b><code>FALSE</code></b>、それ以外の場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-seek.php
	 * @see sqlite_next(), sqlite_current(), sqlite_rewind()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_seek($result, int $rownum): bool {}

	/**
	 * クエリを実行し、単一カラムもしくは先頭レコードの値に対する配列を返す
	 * <p>オブジェクト指向型 (メソッド):</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $db
	 * @param string $query
	 * @param bool $first_row_only
	 * @param bool $decode_binary
	 * @return array
	 * @link https://php.net/manual/ja/function.sqlite-single-query.php
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.1
	 */
	function sqlite_single_query($db, string $query, bool $first_row_only = NULL, bool $decode_binary = NULL): array {}

	/**
	 * UDFにパラメータとして渡されたバイナリデータをデコードする
	 * <p>パラメータで渡されたバイナリデータを UDF にデコードします。</p><p>バイナリデータをUDFにより処理させる必要がある場合、UDFに渡されたパ ラメータに関してこの関数をコールする必要があります。 これは、PHPにより適用されたバイナリエンコーディングが内容と元のパラ メータを隠蔽するためです。</p><p>PHP は、自動的にエンコード/デコード処理を行いません。これは、これを 行うと著しい性能劣化を生じる可能性があるためです。</p>
	 * @param string $data <p>デコード対象となる、エンコードされたデータ。これは <code>sqlite_udf_encode_binary()</code> あるいは <code>sqlite_escape_string()</code> で作成したものです。</p>
	 * @return string <p>デコードされた文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-udf-decode-binary.php
	 * @see sqlite_udf_encode_binary(), sqlite_create_function(), sqlite_create_aggregate()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_udf_decode_binary(string $data): string {}

	/**
	 * UDFから返す前にバイナリデータをエンコードする
	 * <p><b>sqlite_udf_encode_binary()</b> は (元のlibsqlite APIはバイナリ対応ではないため)、 クエリから安全に値を返せるように<code>data</code> にバイ ナリエンコーディングを適用します。</p><p>バイナリセーフでないと思われるデータ(例: ヌルバイトを末尾以外の場所 に含むデータや先頭文字に<i>0x01</i>を含むデータ)の場合、 UDFからの返り値をエンコードするために、この関数をコールする必要があ ります。</p><p>PHPは、このエンコード/デコード処理を自動的に行いません。 これは、性能上著しい影響があるためです。</p><p><b>注意</b>:</p><p>UDFから返す文字列をクオートするために <code>sqlite_escape_string()</code>を使用しないでください。 代わりにこの関数を使用してください。</p>
	 * @param string $data <p>エンコードしたい文字列。</p>
	 * @return string <p>エンコードされた文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-udf-encode-binary.php
	 * @see sqlite_udf_decode_binary(), sqlite_escape_string(), sqlite_create_function(), sqlite_create_aggregate()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_udf_encode_binary(string $data): string {}

	/**
	 * 事前取得していないクエリを実行し、全てのデータをバッファリングする
	 * <p>オブジェクト指向型 (メソッド):</p><p><b>sqlite_unbuffered_query()</b> は <code>sqlite_query()</code> と同じですが、 連続的に前方のみにアクセス可能な結果セットが返され、 各レコードを１件ずつ読み込むことだけしかできないところが異なります。</p><p>この関数は、一度に１件ずつレコードを処理するだけでよく、ランダムに データをアクセスする必要がない、HTMLテーブルのようなものを生成する のに適しています。</p><p><b>注意</b>:</p><p><code>sqlite_seek()</code>, <code>sqlite_rewind()</code>, <code>sqlite_next()</code>, <code>sqlite_current()</code> および <code>sqlite_num_rows()</code> のような関数は、この関数から返 された結果ハンドルでは動作しません。</p>
	 * @param resource $dbhandle <p>SQLite データベースリソース。手続きに従って、 <code>sqlite_open()</code> から返されます。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>
	 * @param string $query <p>実行するクエリ</p> <p>クエリ内のデータは 適切にエスケープ する必要があります。</p>
	 * @param int $result_type <p>オプションの <code>result_type</code> パラメータには定数を指定でき、返される配列の添字を定義します。 <b><code>SQLITE_ASSOC</code></b> を用いると、連想配列の添字(名前フィールド)のみが 返されます。一方、<b><code>SQLITE_NUM</code></b> は、 数値の添字(フィールド番号)のみを返します。<b><code>SQLITE_BOTH</code></b> は、 連想配列の添字と数値の添字の両方を返します。 <b><code>SQLITE_BOTH</code></b> がこの関数のデフォルトです。</p>
	 * @param string $error_msg <p>もしエラーが発生した場合、ここに保存されます。SQL 構文のエラーは <code>sqlite_last_error()</code> 関数で取得することが できないため、このパラメータが特に重要となります。</p>
	 * @return resource <p>結果セットを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><b>sqlite_unbuffered_query()</b> は、 各レコードを順番に読み込む場合にのみ利用可能な シーケンシャルで前進のみ可能な結果セットを返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-unbuffered-query.php
	 * @see sqlite_query()
	 * @since PHP 5 < 5.4.0, PECL sqlite >= 1.0.0
	 */
	function sqlite_unbuffered_query($dbhandle, string $query, int $result_type = SQLITE_BOTH, string &$error_msg = NULL) {}

	/**
	 * まだレコードが残っているかどうかを返す
	 * <p>オブジェクト指向型 (メソッド):</p><p>与えられた結果ハンドルにまだレコードが残っているかを検査します。</p>
	 * @param resource $result <p>SQLite 結果リソース。 このパラメータは、 オブジェクト指向言語型メソッドを使用する場合は不要です。</p>  <p><b>注意</b>:</p> <p>この関数は、 バッファなしの結果ハンドルで使用することはできません。</p>
	 * @return bool <p>結果ハンドル <code>result</code> にレコードが残っている場合 <b><code>TRUE</code></b>、そうでない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sqlite-valid.php
	 * @see sqlite_num_rows(), sqlite_changes()
	 * @since PHP 5 < 5.4.0
	 */
	function sqlite_valid($result): bool {}

	/**
	 * コールバックルーチンが中断を要求しました
	 */
	define('SQLITE_ABORT', null);

	/**
	 * カラムは、フィールド名を配列インデックスとする配列に返されます。
	 */
	define('SQLITE_ASSOC', null);

	/**
	 * 認証に失敗しました
	 */
	define('SQLITE_AUTH', null);

	/**
	 * カラムは、数値インデックスとフィールド名による配列インデックスを 共に有する配列に返されます。
	 */
	define('SQLITE_BOTH', null);

	/**
	 * データベースファイルがロックされています
	 */
	define('SQLITE_BUSY', null);

	/**
	 * データベースファイルをオープンできません
	 */
	define('SQLITE_CANTOPEN', null);

	/**
	 * 制約違反のため中止しました
	 */
	define('SQLITE_CONSTRAINT', null);

	/**
	 * データベースのディスクイメージが不正です
	 */
	define('SQLITE_CORRUPT', null);

	/**
	 * 内部プロセスが実行を完了しました
	 */
	define('SQLITE_DONE', null);

	/**
	 * (内部的な) データベーステーブルが空です
	 */
	define('SQLITE_EMPTY', null);

	/**
	 * SQL エラーあるいはデータベースが存在しません
	 */
	define('SQLITE_ERROR', null);

	/**
	 * データベースのフォーマットエラー
	 */
	define('SQLITE_FORMAT', null);

	/**
	 * データベースが一杯のため挿入に失敗しました
	 */
	define('SQLITE_FULL', null);

	/**
	 * SQLiteの内部ロジックエラーです
	 */
	define('SQLITE_INTERNAL', null);

	/**
	 * 処理が内部的に終了しました
	 */
	define('SQLITE_INTERRUPT', null);

	/**
	 * ディスク I/O エラーが発生しました
	 */
	define('SQLITE_IOERR', null);

	/**
	 * データベース内のテーブルがロックされています
	 */
	define('SQLITE_LOCKED', null);

	/**
	 * データ型が一致しません
	 */
	define('SQLITE_MISMATCH', null);

	/**
	 * ライブラリが不正確に使用されました
	 */
	define('SQLITE_MISUSE', null);

	/**
	 * OS 機能の使用はホスト上でサポートされていません
	 */
	define('SQLITE_NOLFS', null);

	/**
	 * メモリの割り当てに失敗しました
	 */
	define('SQLITE_NOMEM', null);

	/**
	 * データベースファイルではないファイルをオープンしました
	 */
	define('SQLITE_NOTADB', null);

	/**
	 * (内部的な) テーブルもしくはレコードが存在しません
	 */
	define('SQLITE_NOTFOUND', null);

	/**
	 * カラムは、フィールドへの数値インデックスを有する配列に返されます。 このインデックスは 0 から始まり、結果の先頭フィールドとなります。
	 */
	define('SQLITE_NUM', null);

	/**
	 * 成功しました
	 */
	define('SQLITE_OK', null);

	/**
	 * アクセス権限がありません
	 */
	define('SQLITE_PERM', null);

	/**
	 * データベースロックプロトコルエラーです
	 */
	define('SQLITE_PROTOCOL', null);

	/**
	 * 読み込み専用データベースに書き込もうとしました
	 */
	define('SQLITE_READONLY', null);

	/**
	 * 内部プロセスが他の行を準備しました
	 */
	define('SQLITE_ROW', null);

	/**
	 * データベーススキーマが変更されました
	 */
	define('SQLITE_SCHEMA', null);

	/**
	 * テーブルの 1 行に対するデータが多すぎます
	 */
	define('SQLITE_TOOBIG', null);

}
