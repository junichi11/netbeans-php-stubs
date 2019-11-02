<?php



namespace {

	/**
	 * 直近のクエリで変更された行の数を得る
	 * <p><b>sybase_affected_rows()</b> は、指定したリンク ID が 指すサーバーにおいて直近の INSERT、UPDATE、DELETE クエリで変更された レコードの数を返します。</p><p>このコマンドは、SELECT 文には使用できません。レコードを変更する 文のみに使用できます。SELECT から返された行の数を得たい場合は <code>sybase_num_rows()</code> を使用してください。</p>
	 * @param resource $link_identifier <p>リンク ID を省略した場合は、最後にオープンしたリンクを使用します。</p>
	 * @return int <p>変更された行数を整数値で返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-affected-rows.php
	 * @see sybase_num_rows()
	 * @since PHP 4, PHP 5
	 */
	function sybase_affected_rows($link_identifier = NULL): int {}

	/**
	 * Sybase 接続を閉じる
	 * <p><b>sybase_close()</b>は、指定されたリンク <code>link_identifier</code> が指す Sybase データベースへのリンクを閉じます。</p><p>持続的でないリンクは、スクリプトの実行終了時に自動的に閉じられるため、 この関数は、通常の場合コールする必要がないことに注意してください。</p><p><b>sybase_close()</b> は、 <code>sybase_pconnect()</code> により生成された 持続的なリンクは閉じません。</p>
	 * @param resource $link_identifier <p>リンク ID を省略した場合は、最後にオープンしたリンクを使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-close.php
	 * @see sybase_connect(), sybase_pconnect()
	 * @since PHP 4, PHP 5
	 */
	function sybase_close($link_identifier = NULL): bool {}

	/**
	 * Opens a Sybase server connection
	 * <p><b>sybase_connect()</b> establishes a connection to a Sybase server.</p><p>In case a second call is made to <b>sybase_connect()</b> with the same arguments, no new link will be established, but instead, the link identifier of the already opened link will be returned.</p><p>The link to the server will be closed as soon as the execution of the script ends, unless it's closed earlier by explicitly calling <code>sybase_close()</code>.</p>
	 * @param string $servername <p>The servername argument has to be a valid servername that is defined in the 'interfaces' file.</p>
	 * @param string $username <p>Sybase user name</p>
	 * @param string $password <p>Password associated with <code>username</code>.</p>
	 * @param string $charset <p>Specifies the charset for the connection</p>
	 * @param string $appname <p>Specifies an <i>appname</i> for the Sybase connection. This allow you to make separate connections in the same script to the same database. This may come handy when you have started a transaction in your current connection, and you need to be able to do a separate query which cannot be performed inside this transaction.</p>
	 * @param bool $new <p>Whether to open a new connection or use the existing one.</p>
	 * @return resource <p>Returns a positive Sybase link identifier on success, or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/ja/function.sybase-connect.php
	 * @see sybase_pconnect(), sybase_close()
	 * @since PHP 4, PHP 5
	 */
	function sybase_connect(string $servername = NULL, string $username = NULL, string $password = NULL, string $charset = NULL, string $appname = NULL, bool $new = FALSE) {}

	/**
	 * 内部行ポインタを移動する
	 * <p><b>sybase_data_seek()</b>は、指定された結果 ID が指す Sybase 結果の内部行ポインタを指定した行番号に移動します。 <code>sybase_fetch_row()</code> を次にコールした場合、 その行が返されます。</p>
	 * @param resource $result_identifier
	 * @param int $row_number
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-data-seek.php
	 * @see sybase_fetch_row()
	 * @since PHP 4, PHP 5
	 */
	function sybase_data_seek($result_identifier, int $row_number): bool {}

	/**
	 * デッドロックの再試行回数を設定する
	 * <p><b>sybase_deadlock_retry_count()</b> を使用して、デッドロックの 際の再試行回数を定義することが可能です。デフォルトでは、デッドロックが 発生した際は Sybase によってプロセスが停止されたり実行中のスクリプトが 停止したり（例えば <code>set_time_limit()</code>）、あるいは クエリが成功するまでずっと再試行を繰り返します。</p>
	 * @param int $retry_count <p></p> <b>retry_count の値</b>   -1 永遠に再試行します（デフォルト）。   0 再試行しません。   n n 回再試行します。
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.sybase-deadlock-retry-count.php
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function sybase_deadlock_retry_count(int $retry_count): void {}

	/**
	 * 行を配列として取り込む
	 * <p><b>sybase_fetch_array()</b> は <code>sybase_fetch_row()</code> の拡張版です。データを結果配列の 数値インデックスに保存するのに加えて、フィールド名をキーとした 連想インデックスにもデータを保存します。</p><p><b>sybase_fetch_array()</b> を使用した場合でも、 かなりの機能が付加されるにもかかわらず、 <code>sybase_fetch_row()</code> を使用した場合に比べて著しく 遅くなるということはないということを重要なこととして記しておきます。</p>
	 * @param resource $result
	 * @return array <p>取り込んだ行を表す配列を返します。もう行がない場合には <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>同じ名前のフィールドを選択する場合（たとえば join を行った場合など）、 連想インデックスは順に番号を付加します。 詳細は例を参照ください。</p>
	 * @link https://php.net/manual/ja/function.sybase-fetch-array.php
	 * @see sybase_fetch_row(), sybase_fetch_assoc(), sybase_fetch_object()
	 * @since PHP 4, PHP 5
	 */
	function sybase_fetch_array($result): array {}

	/**
	 * 結果の行を連想配列として取得する
	 * <p><b>sybase_fetch_assoc()</b> は <code>sybase_fetch_row()</code> で数値インデックスのかわりに カラム名を使用するバージョンです。複数のテーブルから同じ名前の カラムが取得された場合、それらの名前は name, name1, name2, ..., nameN のような形式で返されます。</p><p><b>sybase_fetch_assoc()</b> を使用した場合でも、 かなりの機能が付加されるにもかかわらず、 <code>sybase_fetch_row()</code> を使用した場合に比べて著しく 遅くなるということはないということを重要なこととして記しておきます。</p>
	 * @param resource $result
	 * @return array <p>取得した行に対応する配列を返します。行がもうない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-fetch-assoc.php
	 * @see sybase_fetch_row(), sybase_fetch_array(), sybase_fetch_object()
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function sybase_fetch_assoc($result): array {}

	/**
	 * 結果からフィールド情報を取得する
	 * <p><b>sybase_fetch_field()</b> は、あるクエリーの結果において、 フィールドに関する情報を得るために使用します。</p>
	 * @param resource $result
	 * @param int $field_offset <p>フィールドオフセットが指定されない場合、 <b>sybase_fetch_field()</b> によりまだ取り込まれていない次のフィールドが取り込まれます。</p>
	 * @return object <p>フィールド情報を含むオブジェクトを返します。</p><p>オブジェクトのプロパティを以下に示します。</p><ul> <li>  name - カラム名。そのカラムがある関数の結果である場合、 このプロパティは、computed#N にセットされます。ただし、#N はシリアルナンバーです。  </li> <li>  column_source - そのカラムが取り出されたテーブル  </li> <li>  max_length - カラムの最大長  </li> <li>  numeric - そのカラムが数値である場合に 1  </li> <li>  type - カラムのデータ型  </li> </ul>
	 * @link https://php.net/manual/ja/function.sybase-fetch-field.php
	 * @see sybase_field_seek()
	 * @since PHP 4, PHP 5
	 */
	function sybase_fetch_field($result, int $field_offset = -1): object {}

	/**
	 * 行をオブジェクトとして取り込む
	 * <p><b>sybase_fetch_object()</b> は <code>sybase_fetch_array()</code> に似ていますが、 違いが一つあります。それは、配列の代わりにオブジェクトを返すことです。</p><p>速度面では、この関数は <code>sybase_fetch_array()</code> と同等であり、 <code>sybase_fetch_row()</code> とほとんど同じです （違いはわずかです）。</p>
	 * @param resource $result
	 * @param mixed $object <p>返されれるオブジェクトの型を指定するには、2 番目のパラメータ <code>object</code> を使用します。このパラメータを指定しなかった場合は、 オブジェクトは stdClass 型となります。</p>
	 * @return object <p>取り込まれた行に対するプロパティを有するオブジェクトを返します。 また、行がもうない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-fetch-object.php
	 * @see sybase_fetch_array(), sybase_fetch_row()
	 * @since PHP 4, PHP 5
	 */
	function sybase_fetch_object($result, $object = NULL): object {}

	/**
	 * 行を配列として取得する
	 * <p><b>sybase_fetch_row()</b> は、指定された結果 ID が指す結果から 1 行分のデータを取り込みます。</p><p>連続的に <b>sybase_fetch_rows()</b> をコールした場合、 結果セットにおける次の行が返されます。 また、もう行がない場合は <b><code>FALSE</code></b> が返されます。</p>
	 * @param resource $result
	 * @return array <p>取り込まれた行に対応する配列を返します。もう行がない場合は <b><code>FALSE</code></b> を返します。 各結果カラムは 0 から始まる配列オフセットに保持されます。</p> <b>データ型</b>   PHP Sybase     string VARCHAR, TEXT, CHAR, IMAGE, BINARY, VARBINARY, DATETIME   int NUMERIC（小数点以下なし）, DECIMAL（小数点以下なし）, INT, BIT, TINYINT, SMALLINT   float NUMERIC（小数点以下あり）, DECIMAL（小数点以下あり）, REAL, FLOAT, MONEY   <b><code>NULL</code></b> NULL
	 * @link https://php.net/manual/ja/function.sybase-fetch-row.php
	 * @see sybase_fetch_array(), sybase_fetch_assoc(), sybase_fetch_object(), sybase_data_seek(), sybase_result()
	 * @since PHP 4, PHP 5
	 */
	function sybase_fetch_row($result): array {}

	/**
	 * フィールドオフセットを設定する
	 * <p>指定したフィールドオフセットに移動します。次にフィールドオフセットを指定しないで <code>sybase_fetch_field()</code> をコールした場合、 このフィールドが返されます。</p>
	 * @param resource $result
	 * @param int $field_offset
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-field-seek.php
	 * @see sybase_fetch_field()
	 * @since PHP 4, PHP 5
	 */
	function sybase_field_seek($result, int $field_offset): bool {}

	/**
	 * 結果メモリを開放する
	 * <p><b>sybase_free_result()</b> は、スクリプト実行時に大量の メモリを使用することが懸念される場合にのみコールする必要があります。 すべての結果メモリは、スクリプト終了時に自動的に開放されます。 結果 ID を引数として <b>sybase_freeresult()</b> を コールすることが可能で、関連する結果メモリは開放されます。</p>
	 * @param resource $result
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-free-result.php
	 * @since PHP 4, PHP 5
	 */
	function sybase_free_result($result): bool {}

	/**
	 * サーバーから直近のメッセージを返す
	 * <p><b>sybase_get_last_message()</b> はサーバーからの直近のメッセージを返します。</p>
	 * @return string <p>メッセージを文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-get-last-message.php
	 * @see sybase_min_message_severity()
	 * @since PHP 4, PHP 5
	 */
	function sybase_get_last_message(): string {}

	/**
	 * クライアントの severity の最小値を設定する
	 * <p><b>sybase_min_client_severity()</b> はクライアントの severity レベルの最小値を設定します。</p>
	 * @param int $severity
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.sybase-min-client-severity.php
	 * @see sybase_min_server_severity()
	 * @since PHP 4, PHP 5
	 */
	function sybase_min_client_severity(int $severity): void {}

	/**
	 * エラーの severity の最小値を設定する
	 * <p><b>sybase_min_error_severity()</b> はエラー severity レベルの最小値を設定します。</p>
	 * @param int $severity
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.sybase-min-error-severity.php
	 * @see sybase_min_message_severity()
	 * @since PHP 4, PHP 5
	 */
	function sybase_min_error_severity(int $severity): void {}

	/**
	 * メッセージの severity の最小値を設定する
	 * <p><b>sybase_min_message_severity()</b> はメッセージの severity レベルの最小値を設定します。</p>
	 * @param int $severity
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.sybase-min-message-severity.php
	 * @see sybase_min_error_severity()
	 * @since PHP 4, PHP 5
	 */
	function sybase_min_message_severity(int $severity): void {}

	/**
	 * サーバーの severity の最小値を設定する
	 * <p><b>sybase_min_server_severity()</b> はサーバーの severity レベルの最小値を設定します。</p>
	 * @param int $severity
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.sybase-min-server-severity.php
	 * @see sybase_min_client_severity()
	 * @since PHP 4, PHP 5
	 */
	function sybase_min_server_severity(int $severity): void {}

	/**
	 * 結果におけるフィールドの数を取得する
	 * <p><b>sybase_num_fields()</b> は、 結果セットにおけるフィールド数を返します。</p>
	 * @param resource $result
	 * @return int <p>フィールドの数を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-num-fields.php
	 * @see sybase_query(), sybase_fetch_field(), sybase_num_rows()
	 * @since PHP 4, PHP 5
	 */
	function sybase_num_fields($result): int {}

	/**
	 * 結果における行の数を取得する
	 * <p><b>sybase_num_rows()</b> は、結果セットの行数を返します。</p>
	 * @param resource $result
	 * @return int <p>結果セットの行の数を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-num-rows.php
	 * @see sybase_num_fields(), sybase_query(), sybase_fetch_row()
	 * @since PHP 4, PHP 5
	 */
	function sybase_num_rows($result): int {}

	/**
	 * Sybase の持続的な接続をオープンする
	 * <p><b>sybase_pconnect()</b> は、2 つの違いを除いて <code>sybase_connect()</code> と全く同様に動作します。</p><p>まず、接続時にこの関数は最初同じホスト、ユーザー名、パスワードで オープンされた（持続的）リンクを見つけようとします。 見つかった場合、新しい接続をオープンする代わりにこれに関する ID が返されます。</p><p>第二に、SQL サーバーへの接続はスクリプト実行終了時にクローズされません。 代わりに、このリンクは将来的に使用するためにオープンされたままに なります（<code>sybase_close()</code> は、 <b>sybase_pconnect()</b> により確立されたリンクを 閉じません）。</p><p>このため、この型のリンクは'持続的'と呼ばれます。</p>
	 * @param string $servername <p>引数 servername は、'interfaces' ファイル中で定義された 有効なサーバー名である必要があります。</p>
	 * @param string $username <p>Sybase のユーザー名。</p>
	 * @param string $password <p><code>username</code> のパスワード。</p>
	 * @param string $charset <p>接続に使用する文字セットを指定します。</p>
	 * @param string $appname <p>Sybase 接続用の <i>appname</i> を指定します。 これにより、ひとつのスクリプトから同じデータベースに複数の接続を行えるようになります。 現在の接続でトランザクションを開始し、 トランザクション内では実行できない別のクエリを実行したい場合などに便利です。</p>
	 * @return resource <p>成功時に正の Sybase 持続リンク ID を、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-pconnect.php
	 * @see sybase_connect()
	 * @since PHP 4, PHP 5
	 */
	function sybase_pconnect(string $servername = NULL, string $username = NULL, string $password = NULL, string $charset = NULL, string $appname = NULL) {}

	/**
	 * Sybase クエリを送信する
	 * <p><b>sybase_query()</b>は、指定されたリンク ID が指すサーバー上で現在アクティブなデータベースにクエリを送信します。</p>
	 * @param string $query
	 * @param resource $link_identifier <p>リンク ID が指定されない場合、最後にオープンされたリンクが指定されたと 仮定されます。リンクがオープンされていない場合、この関数は、 <code>sybase_connect()</code> がコールされた時と同様にリンクを 確立しようと試み、これを使用します。</p>
	 * @return mixed <p>成功時に正の Sybase 結果 ID を、エラー時に <b><code>FALSE</code></b> を返します。 クエリは成功したが、結果としてカラムを何も返さなかった場合は <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-query.php
	 * @see sybase_select_db(), sybase_connect()
	 * @since PHP 4, PHP 5
	 */
	function sybase_query(string $query, $link_identifier = NULL) {}

	/**
	 * 結果データを取得する
	 * <p>指定された Sybase 結果セットにおいて、指定した行および オフセットにおけるセルの内容を返します。</p><p>大きな結果セットを処理する際には、(以下に示す) 行全体を取り込む関数の一つを使用することを考慮すべきです。 これらの関数は、一回の関数コールで複数のセルの内容を返すので、 <b>sybase_result()</b>よりも著しく高速です。 また、field 引数において数値オフセットで指定するほうが、 フィールド名やテーブル名.フィールド名で指定するよりも 著しく高速であるということにも注意してください。</p><p>推奨される高性能な代替案は次のようなものです。 <code>sybase_fetch_row()</code>、 <code>sybase_fetch_array()</code> および <code>sybase_fetch_object()</code>。</p>
	 * @param resource $result
	 * @param int $row
	 * @param mixed $field <p>引数 field は、フィールドのオフセット、フィールド名、 またはテーブル名.フィールド名とすることができます。カラム名の エイリアスが定義されている場合('select foo as bar from...')、カラム名の 代わりにエイリアスを使用してください。</p>
	 * @return string <p><b>sybase_result()</b> は、Sybase 結果セットからセルの内容を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-result.php
	 * @since PHP 4, PHP 5
	 */
	function sybase_result($result, int $row, $field): string {}

	/**
	 * Sybase データベースを選択する
	 * <p><b>sybase_select_db()</b> は、指定されたリンク ID が指す データベースをサーバー上の現在アクティブなデータベースに設定します。</p><p>その後の <code>sybase_query()</code> のコールは、 このアクティブなデータベースにおいて行われます。</p>
	 * @param string $database_name
	 * @param resource $link_identifier <p>リンク ID が指定されない場合、最後にオープンされたリンクが指定されたものとみなします。 リンクがオープンされていない場合、この関数は、 <code>sybase_connect()</code> がコールされた時と同様に リンクを確立しようと試み、これを使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-select-db.php
	 * @see sybase_connect(), sybase_pconnect(), sybase_query()
	 * @since PHP 4, PHP 5
	 */
	function sybase_select_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * サーバーでメッセージが発生した際にコールされるハンドラを指定する
	 * <p><b>sybase_set_message_handler()</b> は、 サーバーからのメッセージを処理するユーザー関数を設定します。グローバル関数の名前、 あるいはオブジェクトへの参照とメソッド名を保持する配列を指定します。</p>
	 * @param callable $handler <p>ハンドラは、以下の 5 つの引数をこの順に受け取ります。 number, severity, state, line number そして description。 最初の 4 つは整数値で、最後は文字列です。関数が <b><code>FALSE</code></b> を返した場合、PHP は通常のエラーメッセージを表示します。</p>
	 * @param resource $link_identifier <p>リンクIDを省略した場合は、最後に開いたリンクを使います。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-set-message-handler.php
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function sybase_set_message_handler(callable $handler, $link_identifier = NULL): bool {}

	/**
	 * Sybase クエリを送信し、ブロックしない
	 * <p><b>sybase_unbuffered_query()</b> は、指定したリンク ID に 関連付けられたサーバー上の現在アクティブなデータベースにクエリを送信します。 リンク ID が指定されていない場合は、直近にオープンされたリンクが 指定されたものと仮定します。リンクがオープンされていない場合は、 <code>sybase_connect()</code> がコールされた場合と同様の手順で リンクのオープンを試み、それを使用します。</p><p><code>sybase_query()</code> とは異なり、 <b>sybase_unbuffered_query()</b> は結果セットの最初の 行のみを読み込みます。それ以降の行は、必要に応じて <code>sybase_fetch_array()</code> またはそれに類する関数で 読み込みます。<code>sybase_data_seek()</code> は指定した 行を読み込みます。この挙動により、大きな結果セットを扱う際に よりよいパフォーマンスを確保できます。</p><p><code>sybase_num_rows()</code> が正確な行数を返すのは、結果セット 全体が読み込まれた場合のみです。Sybase は行数を知ることができず、 クライアントの実装によって行数を計算しています。</p><p><b>注意</b>:</p><p>結果セットをすべて読み込む前に次のクエリを実行しようとした場合、 PHP は警告を発生し、未処理の結果をすべてキャンセルします。これを 避けるには、<code>sybase_free_result()</code> を使用します。 この関数は、バッファリングされていないクエリで未処理の結果を すべてキャンセルします。</p>
	 * @param string $query
	 * @param resource $link_identifier
	 * @param bool $store_result <p>結果セットをメモリ中に読み込む必要がないことを指示するため、 オプションの <code>store_result</code> に <b><code>FALSE</code></b> を 指定することが可能です。これによってメモリの使用量を抑えることができ、 大きな結果セットを扱う場合に有用です。</p>
	 * @return resource <p>成功時に正の Sybase 結果 ID 、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.sybase-unbuffered-query.php
	 * @see sybase_query()
	 * @since PHP 4 >= 4.3.0, PHP 5
	 */
	function sybase_unbuffered_query(string $query, $link_identifier, bool $store_result = NULL) {}

}
