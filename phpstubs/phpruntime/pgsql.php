<?php



namespace {

	/**
	 * 変更されたレコード(タプル)の数を返す
	 * <p><b>pg_affected_rows()</b> は、INSERT, UPDATE, DELETE クエリにより変更されたタプル(インスタンス/レコード/行)の数を 返します。</p><p>PostgreSQL 9.0 以降は、SELECT を実行したときには選択された行の数を返すようになりました。 それ以前のバージョンでは、SELECT が返す結果は 0 でした。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_cmdtuples()</b> と呼ばれていました。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @return int <p>クエリによって変更された行の数を返します。もし変更されたタプルがない場合は 0 を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-affected-rows.php
	 * @see pg_query(), pg_query_params(), pg_execute(), pg_num_rows()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_affected_rows($result): int {}

	/**
	 * 非同期クエリを取り消す
	 * <p><b>pg_cancel_query()</b> は、 <code>pg_send_query()</code>・<code>pg_send_query_params()</code> あるいは <code>pg_send_execute()</code> により送信された非同期クエリを キャンセルします。<code>pg_query()</code> により実行されたクエリを キャンセルすることはできません。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-cancel-query.php
	 * @see pg_send_query(), pg_connection_busy()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_cancel_query($connection): bool {}

	/**
	 * クライアントのエンコーディングを取得する
	 * <p>PostgreSQL は、ある種の文字セットについてはサーバーとクライアントの間の 自動文字コード変換をサポートしています。 <b>pg_client_encoding()</b> は、クライアントの エンコーディングを文字列として返します。返される値は、標準の PostgreSQL エンコーディング識別子のなかのひとつとなります。</p><p><b>注意</b>:</p><p>この関数を使用するには、PHP 4.0.3 以降と PostgreSQL 7.0 以降が必要です。 libpq がマルチバイトエンコーディングのサポートを有効にせずに コンパイルされている場合、<b>pg_client_encoding()</b> は常に <i>SQL_ASCII</i> を返します。サポートされる エンコーディングは PostgreSQL のバージョンに依存します。サポートされる エンコーディングの詳細については PostgreSQL のドキュメントを参照ください。</p><p>この関数は、以前は <b>pg_clientencoding()</b> と呼ばれていました。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return string <p>クライアントのエンコーディングを返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-client-encoding.php
	 * @see pg_set_client_encoding()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function pg_client_encoding($connection = NULL): string {}

	/**
	 * PostgreSQL 接続をクローズする
	 * <p><b>pg_close()</b> は、 <code>connection</code> リソースで指定した PostgreSQL データベースへの持続的でない接続を閉じます。</p><p><b>注意</b>:</p><p>持続的でない接続はスクリプトの実行終了時に自動的にクローズされるため、 <b>pg_close()</b> は通常は必要ありません。</p><p>接続の中でラージオブジェクトをオープンしている場合は、すべての ラージオブジェクトリソースをクローズするまで接続を閉じないでください。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-close.php
	 * @see pg_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_close($connection = NULL): bool {}

	/**
	 * PostgreSQL 接続をオープンする
	 * <p><b>pg_connect()</b> は、<code>connection_string</code> で指定された情報を用いてデータベースとの接続をオープンします。</p><p>同じ <code>connection_string</code> 引数で 2 回 <b>pg_connect()</b> 関数がコールされた場合は、 <code>connect_type</code> に <b><code>PGSQL_CONNECT_FORCE_NEW</code></b> を指定していない限り 既存の接続が返されます。</p><p>複数のパラメータをサポートする古い構文 <b>$conn = pg_connect("host", "port", "options", "tty", "dbname") </b> は推奨されません。</p>
	 * @param string $connection_string <p>すべてデフォルトのパラメータを使用する場合には <code>connection_string</code> を空にすることが可能です。 または 1 つ以上のパラメータを空白で区切って指定することも可能です。 個々のパラメータは <i>keyword = value</i> の形式で 設定します。等号の前後の空白はあってもなくてもかまいません。 空の値や空白を含む値を指定する場合は、その値をシングルクォートで 囲みます（例: <i>keyword = 'a value'</i>）。値の中に シングルクォートやバックスラッシュが含まれる場合は、それらを バックスラッシュでエスケープする必要があります（例: \' および \\）。</p> <p>現在利用できるパラメータは以下のとおりです。 <code>host</code>, <code>hostaddr</code>, <code>port</code>, <code>dbname</code> (デフォルトは <code>user</code> の値), <code>user</code>, <code>password</code>, <code>connect_timeout</code>, <code>options</code>, <code>tty</code>（無視されます）, <code>sslmode</code>, <code>requiressl</code>（非推奨。代わりに <code>sslmode</code> を推奨します） および <code>service</code> 。これらのうち実際にどの パラメータが使えるかは、PostgreSQL のバージョンに依存します。</p> <p><code>options</code> パラメータを使うと、 サーバー側で実行されるコマンドラインパラメータを指定することができます。</p>
	 * @param int $connect_type <p><b><code>PGSQL_CONNECT_FORCE_NEW</code></b> が渡された場合は、 たとえ <code>connection_string</code> が既存の接続と まったく同一であっても新しい接続をオープンします。</p> <p><b><code>PGSQL_CONNECT_ASYNC</code></b> を指定すると、 非同期接続を確立します。この接続の状態は、 <code>pg_connect_poll()</code> あるいは <code>pg_connection_status()</code> で確認できます。</p>
	 * @return resource <p>成功した場合に PostgreSQL の接続リソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-connect.php
	 * @see pg_pconnect(), pg_close(), pg_host(), pg_port(), pg_tty(), pg_options(), pg_dbname()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_connect(string $connection_string, int $connect_type = NULL) {}

	/**
	 * 進行中の非同期 PostgreSQL 接続試行のステータスをポーリングする
	 * <p><b>pg_connect_poll()</b> は、 <b><code>PGSQL_CONNECT_ASYNC</code></b> オプションを使用して コールされた <code>pg_connect()</code> で作成された PostgreSQL 接続のステータスをポーリングします。</p>
	 * @param resource $connection <p>PostgreSQL の接続リソース。</p>
	 * @return int <p><b><code>PGSQL_POLLING_FAILED</code></b>、 <b><code>PGSQL_POLLING_READING</code></b>、 <b><code>PGSQL_POLLING_WRITING</code></b>、 <b><code>PGSQL_POLLING_OK</code></b>、 または <b><code>PGSQL_POLLING_ACTIVE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-connect-poll.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function pg_connect_poll($connection): int {}

	/**
	 * 接続がビジーかどうか調べる
	 * <p><b>pg_connection_busy()</b> は、接続がビジーかどうかを調べます。 接続がビジーである場合、以前のクエリがまだ実行中です。 もしこの接続に <code>pg_get_result()</code> がコールされた場合、 それはブロックされます。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @return bool <p>接続がビジーの場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-connection-busy.php
	 * @see pg_connection_status(), pg_get_result()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_connection_busy($connection): bool {}

	/**
	 * 接続をリセット(再接続)する
	 * <p><b>pg_connection_reset()</b> は接続をリセットします。 エラーからの復旧の際に有用です。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-connection-reset.php
	 * @see pg_connect(), pg_pconnect(), pg_connection_status()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_connection_reset($connection): bool {}

	/**
	 * 接続ステータスを取得する
	 * <p><b>pg_connection_status()</b> は、 <code>connection</code> で指定した接続のステータスを返します。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @return int <p><b><code>PGSQL_CONNECTION_OK</code></b> あるいは <b><code>PGSQL_CONNECTION_BAD</code></b> 。</p>
	 * @link https://php.net/manual/ja/function.pg-connection-status.php
	 * @see pg_connection_busy()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_connection_status($connection): int {}

	/**
	 * 接続の入力を読み取る
	 * <p><b>pg_consume_input()</b> は、データベースサーバーからの 読み取りを待機中のすべての入力を消費します。</p>
	 * @param resource $connection <p>PostgreSQL の接続リソース。</p>
	 * @return bool <p>エラーが発生しなかった場合 <b><code>TRUE</code></b>、 またはエラーがあった場合 <b><code>FALSE</code></b>。 <b><code>TRUE</code></b> は、入力が読み取り待機中ということを示すとは限らないことに注意してください。</p>
	 * @link https://php.net/manual/ja/function.pg-consume-input.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function pg_consume_input($connection): bool {}

	/**
	 * 連想配列の値を、SQL 文として実行可能な形式に変換する
	 * <p><b>pg_convert()</b> は、<code>assoc_array</code> の中の値をチェックし、SQL 文の中で使用可能な形式に変換します。 少なくとも <code>assoc_array</code> の要素数以上のカラムを持つ テーブル <code>table_name</code> が存在することが前提条件と なります。<code>assoc_array</code> の要素名が <code>table_name</code> のフィールド名と一致し、また 要素に対応する値はフィールドのデータ型と互換性がなければなりません。 成功した場合に変換後の値の配列、それ以外の場合に <b><code>FALSE</code></b> を返します。</p><p><b>注意</b>:</p><p>PHP 5.6.0 以降は、boolean 値も受け付けるようになりました。 PostgreSQL の boolean 型に変換します。 boolean 値の文字列表現にも対応しています。 <b><code>NULL</code></b> は、PostgreSQL の NULL に変換します。</p><p>PHP 5.6.0 より前のバージョンでは、論理型のフィールドが <code>table_name</code> にあった場合、 対応する <code>assoc_array</code> では定数 <b><code>TRUE</code></b> を使用 しないでください。これは文字列 'TRUE' に変換されてしまい、PostgreSQL では論理型として無効な形式になります。代わりに t、true、1、y、yes のうちのひとつを用いてください。</p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @param string $table_name <p>変換対象となるテーブルの名前。</p>
	 * @param array $assoc_array <p>変換されるデータ。</p>
	 * @param int $options <p><b><code>PGSQL_CONV_IGNORE_DEFAULT</code></b>, <b><code>PGSQL_CONV_FORCE_NULL</code></b> あるいは <b><code>PGSQL_CONV_IGNORE_NOT_NULL</code></b> の組み合わせ。</p>
	 * @return array <p>変換された値の配列を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-convert.php
	 * @see pg_meta_data(), pg_insert(), pg_select(), pg_update(), pg_delete()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_convert($connection, string $table_name, array $assoc_array, int $options = 0): array {}

	/**
	 * 配列からテーブルに挿入する
	 * <p><b>pg_copy_from()</b> は、<code>rows</code> の内容をテーブルに挿入します。レコードを挿入するために、内部では <i>COPY FROM</i> SQL コマンドを発行します。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @param string $table_name <p><code>rows</code> をコピーするテーブルの名前。</p>
	 * @param array $rows <p><code>table_name</code> にコピーするデータの配列。 <code>rows</code> の個々の値が <code>table_name</code> のひとつの行となります。<code>rows</code> の個々の値は、 それぞれのフィールドに対応する値が区切り文字で区切られており、最後は 改行で終了していなければなりません。</p>
	 * @param string $delimiter <p><code>rows</code> の要素内で、各フィールドに対応する値を 区切る文字。デフォルトは <i>TAB</i> です。</p>
	 * @param string $null_as <p><code>rows</code> の中で、SQL の <i>NULL</i> をどのように表現するか。デフォルトは \N ("\\N") です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-copy-from.php
	 * @see pg_copy_to()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_copy_from($connection, string $table_name, array $rows, string $delimiter = NULL, string $null_as = NULL): bool {}

	/**
	 * 配列にテーブルをコピーする
	 * <p><b>pg_copy_to()</b> は、テーブルを配列にコピーします。 レコードを取得するために、内部では <i>COPY TO</i> SQL コマンドを発行します。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @param string $table_name <p>データを <code>rows</code> にコピーするテーブルの名前。</p>
	 * @param string $delimiter <p><code>rows</code> の要素内で、各フィールドに対応する値を 区切る文字。デフォルトは <i>TAB</i> です。</p>
	 * @param string $null_as <p><code>rows</code> の中で、SQL の <i>NULL</i> をどのように表現するか。デフォルトは \N ("\\N") です。</p>
	 * @return array <p><i>COPY</i> されたデータが 1 行ごとにひとつの要素と なっている配列を返します。失敗した場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-copy-to.php
	 * @see pg_copy_from()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_copy_to($connection, string $table_name, string $delimiter = NULL, string $null_as = NULL): array {}

	/**
	 * データベース名を取得する
	 * <p><b>pg_dbname()</b> は、 PostgreSQL <code>connection</code> リソースで指定した データベースの名前を返します。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return string <p><code>connection</code> が指すデータベースの名前を表す 文字列を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-dbname.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_dbname($connection = NULL): string {}

	/**
	 * レコードを削除する
	 * <p><b>pg_delete()</b> は、<code>assoc_array</code> で指定したキーと値を用いてテーブルからレコードを削除します。 <code>options</code> が指定された場合、指定したオプションを つけて <code>pg_convert()</code> が <code>assoc_array</code> に適用されます。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @param string $table_name <p>行を削除するテーブルの名前。</p>
	 * @param array $assoc_array <p>そのキーが <code>table_name</code> テーブルのフィールド名、 値が削除したいフィールドの値となっている配列。</p>
	 * @param int $options <p><b><code>PGSQL_CONV_FORCE_NULL</code></b>、 <b><code>PGSQL_DML_NO_CONV</code></b>、 <b><code>PGSQL_DML_ESCAPE</code></b>、 <b><code>PGSQL_DML_EXEC</code></b>、 <b><code>PGSQL_DML_ASYNC</code></b> あるいは <b><code>PGSQL_DML_STRING</code></b> を組み合わせた数。 <code>options</code> に <b><code>PGSQL_DML_STRING</code></b> が含まれている場合、クエリ文字列が返されます。 <b><code>PGSQL_DML_NO_CONV</code></b> あるいは <b><code>PGSQL_DML_ESCAPE</code></b> が設定されている場合は、内部的に <code>pg_convert()</code> を呼びません。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>options</code> で <b><code>PGSQL_DML_STRING</code></b> が渡された場合は文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-delete.php
	 * @see pg_convert()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_delete($connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC) {}

	/**
	 * PostgreSQL バックエンドと同期する
	 * <p><b>pg_end_copy()</b> は、<code>pg_put_line()</code> によるコピー操作の後で PostgreSQL フロントエンド（通常は Web サーバー プロセス）と PostgreSQL サーバーを同期させます。 <b>pg_end_copy()</b> を実行しなければ、PostgreSQL サーバーが フロントエンドとの同期を失ってしまい、エラーが発生します。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-end-copy.php
	 * @see pg_put_line()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function pg_end_copy($connection = NULL): bool {}

	/**
	 * bytea フィールドに挿入するために文字列をエスケープする
	 * <p><b>pg_escape_bytea()</b> は、bytea 型のために文字列を エスケープし、エスケープした文字列を返します。</p><p><b>注意</b>:</p><p>bytea 型を <i>SELECT</i> した場合、PostgreSQL は '\' で 始まる 8 進数のバイト値（例: \032）を返します。これをユーザーが手動で コンバートすることを期待されています。</p><p>この関数は PostgreSQL 7.2 以降のバージョンを必要とします。PostgreSQL 7.2.0 および 7.2.1 では、マルチバイトのサポートを有効にした場合は bytea の値をキャストする必要があります。例: <i>INSERT INTO test_table (image) VALUES ('$image_escaped'::bytea); </i> PostgreSQL 7.2.2 以降ではキャストする必要はありません。 クライアントとバックエンドの文字エンコーディングが一致しない場合は 例外で、この場合はマルチバイトストリームエラーが発生します。この エラーを避けるためには bytea 型へのキャストが必要になります。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。 <code>connection</code> が存在しない場合は、 デフォルトの接続を使用します。デフォルトの接続は、 <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> で直近に作成されたものとなります。</p>
	 * @param string $data <p>bytea 型のカラムに挿入するテキストまたはバイナリデータを含む 文字列。</p>
	 * @return string <p>エスケープされたデータを文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.pg-escape-bytea.php
	 * @see pg_unescape_bytea(), pg_escape_string()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_escape_bytea($connection = NULL, string $data): string {}

	/**
	 * テキスト型フィールドに挿入するために、識別子をエスケープする
	 * <p><b>pg_escape_identifier()</b> は、データベースへの問い合わせに使う識別子 (テーブル名やフィールド名など) をエスケープします。 PostgreSQL サーバー用にエスケープされた識別子を返します。 <b>pg_escape_identifier()</b> は、データの前後にダブルクォートを追加します。 ユーザーが自分で追加してはいけません。 この関数は、クエリ内で使う識別子のパラメータに有用です。SQL リテラル (bytea 以外のパラメータ) には、<code>pg_escape_literal()</code> あるいは <code>pg_escape_string()</code> を使わなければなりません。 bytea 型のフィールドには、<code>pg_escape_bytea()</code> を使わなければなりません。</p><p><b>注意</b>:</p><p>この関数は内部的なエスケープコードを使い、PostgreSQL 8.4 より前のバージョンでも使えます。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。 <code>connection</code> が存在しない場合は、 デフォルトの接続を使用します。デフォルトの接続は、 <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> で直近に作成されたものとなります。</p>
	 * @param string $data <p>エスケープするテキスト文字列。</p>
	 * @return string <p>エスケープされたデータを文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.pg-escape-identifier.php
	 * @see pg_escape_literal(), pg_escape_bytea(), pg_escape_string()
	 * @since PHP 5 >= 5.4.4, PHP 7
	 */
	function pg_escape_identifier($connection = NULL, string $data): string {}

	/**
	 * テキスト型フィールドに挿入するために、リテラルをエスケープする
	 * <p><b>pg_escape_literal()</b> は、 PostgreSQL データベースへの問い合わせに使うリテラルをエスケープします。 PostgreSQL フォーマットでエスケープされたリテラルを返します。 <b>pg_escape_literal()</b> は、データの前後にクォートを追加します。 ユーザーが自分で追加してはいけません。 <code>pg_escape_string()</code> ではなくこの関数を使うことを推奨します。 カラム型が bytea の場合は、代わりに <code>pg_escape_bytea()</code> を使わなければなりません。 識別子 (テーブル名やフィールド名など) のエスケープには <code>pg_escape_identifier()</code> を使わなければなりません。</p><p><b>注意</b>:</p><p>この関数は内部的なエスケープコードを使い、PostgreSQL 8.4 より前のバージョンでも使えます。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。 <code>connection</code> が存在しない場合は、 デフォルトの接続を使用します。デフォルトの接続は、 <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> で直近に作成されたものとなります。 デフォルトの接続がない場合は、<i>E_WARNING</i> が発生して <b><code>FALSE</code></b> を返します。</p>
	 * @param string $data <p>エスケープするテキスト文字列。</p>
	 * @return string <p>エスケープされたデータを文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.pg-escape-literal.php
	 * @see pg_escape_identifier(), pg_escape_bytea(), pg_escape_string()
	 * @since PHP 5 >= 5.4.4, PHP 7
	 */
	function pg_escape_literal($connection = NULL, string $data): string {}

	/**
	 * クエリに使う文字列をエスケープする
	 * <p><b>pg_escape_string()</b> は、データベースへの問い合わせに使う文字列をエスケープします。 PostgreSQL フォーマットにエスケープされた文字列を、クォートなしの形式で返します。 PostgreSQL に使う SQL パラメータをエスケープするときには <code>pg_escape_literal()</code> を使うほうがよいでしょう。 <code>addslashes()</code> を PostgreSQL で使ってはいけません。 カラム型が bytea の場合は、代わりに <code>pg_escape_bytea()</code> を使わなければなりません。 識別子 (テーブル名やフィールド名など) のエスケープには <code>pg_escape_identifier()</code> を使わなければなりません。</p><p><b>注意</b>:</p><p>この関数は、PostgreSQL 7.2 以降が必要です。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。 <code>connection</code> が存在しない場合は、 デフォルトの接続を使用します。デフォルトの接続は、 <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> で直近に作成されたものとなります。</p>
	 * @param string $data <p>エスケープするテキスト文字列。</p>
	 * @return string <p>エスケープされたデータを文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.pg-escape-string.php
	 * @see pg_escape_bytea()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_escape_string($connection = NULL, string $data): string {}

	/**
	 * 指定したパラメータを用いてプリペアドステートメントを実行するリクエストを 送信し、その結果を待つ
	 * <p>指定したパラメータを用いてプリペアドステートメントを実行するリクエストを 送信し、その結果を待ちます。</p><p><b>pg_execute()</b> は <code>pg_query_params()</code> と似ています。しかし、実行するコマンドはクエリを指定することで 決まるのではなく、事前に準備されたステートメントに値を指定する ことによって決まります。この機能のおかげで、繰り返し使用される コマンドに構文解析や実行計画作成が最初の一度だけで済みます。 実行するステートメントは、カレントのセッションで事前に準備しておく 必要があります。<b>pg_execute()</b> は、PostgreSQL 7.4 以降のバージョンの接続にのみ対応しています。それ以前のバージョンでは 失敗します。</p><p>パラメータは <code>pg_query_params()</code> と同じですが、 クエリ文字列のかわりにプリペアドステートメントの名前を指定する という点だけが違います。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param string $stmtname <p>実行するプリペアドステートメントの名前。"" が指定された場合は 無名ステートメントが実行されます。名前は、事前に <code>pg_prepare()</code>・<code>pg_send_prepare()</code> あるいは <i>PREPARE</i> SQL コマンドで準備されたものである 必要があります。</p>
	 * @param array $params <p>プリペアドステートメント中の $1、$2 などのプレースホルダを 置き換えるパラメータの配列。配列の要素数はプレースホルダの 数と一致する必要があります。</p>  <b>警告</b> <p>この関数をコールする際に、要素の内容は文字列に変換されます。</p>
	 * @return resource <p>成功した場合にクエリ結果リソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-execute.php
	 * @see pg_prepare(), pg_send_prepare(), pg_query_params()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_execute($connection = NULL, string $stmtname, array $params) {}

	/**
	 * 取得されたすべての行を配列として取得する
	 * <p><b>pg_fetch_all()</b>は、結果リソースのすべての行 （レコード）を保持する配列を返します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $result_type
	 * @return array <p>結果のすべての行を含む配列を返します。それぞれの行は、フィールド名を 添字とするフィールド値の配列です。</p><p>結果の行数が 0 だった場合、あるいはその他のエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-fetch-all.php
	 * @see pg_fetch_row(), pg_fetch_array(), pg_fetch_object(), pg_fetch_result()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_fetch_all($result, int $result_type = PGSQL_ASSOC): array {}

	/**
	 * 指定したカラムの全ての行を配列として取得する
	 * <p><b>pg_fetch_all_columns()</b> は、結果リソースの 指定したカラムについて全ての行（レコード）を含む配列を返します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $column <p>結果リソースから取得するカラムの番号。0 から始まります。 指定しない場合のデフォルトは最初のカラムです。</p>
	 * @return array <p>結果カラムの全ての値を配列で返します。</p><p><code>column</code> が結果のカラム数より大きい場合や その他のエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-fetch-all-columns.php
	 * @see pg_fetch_all()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_fetch_all_columns($result, int $column = 0): array {}

	/**
	 * 行を配列として取得する
	 * <p><b>pg_fetch_array()</b> は、取得した行（レコード）を 配列で返します。</p><p><b>pg_fetch_array()</b> は拡張版の <code>pg_fetch_row()</code> です。結果配列のフィールド番号に 対応する要素にデータを格納し、それに加えてフィールド名をキーとした 連想配列にも格納します。デフォルトで、両方ともが有効になっています。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p><p><b>pg_fetch_array()</b> は、 <code>pg_fetch_row()</code> に比べてきわめて遅いというわけでは 「ありません」。そして、きわめて簡単に使用できます。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $row <p>取得する行番号。最初の行は 0 です。省略したり <b><code>NULL</code></b> を指定したりした場合は、 次の行を取得します。</p>
	 * @param int $result_type <p><code>result_type</code> は、返り値の形式を制御する オプションのパラメータです。<code>result_type</code> は定数であり、次の値のどれかとすることが可能です。 <b><code>PGSQL_ASSOC</code></b>、<b><code>PGSQL_NUM</code></b> および <b><code>PGSQL_BOTH</code></b>。 <b><code>PGSQL_NUM</code></b> を使用すると、<b>pg_fetch_array()</b> は数値添字の配列を返します。また、<b><code>PGSQL_ASSOC</code></b> を使用すると連想配列形式で返します。<b><code>PGSQL_BOTH</code></b> がデフォルト設定で、これは数値添字の配列と連想配列の両方を返します。</p>
	 * @return array <p>0 から始まる数値添字の配列か連想配列（フィールド名をキーとする）、 あるいはその両方を返します。配列の各要素の値は文字列です。 データベースの <i>NULL</i> 値は、<b><code>NULL</code></b> として返します。</p><p><code>row</code> が結果の行数より大きい場合や行が存在しない場合、 そしてそれ以外のエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-fetch-array.php
	 * @see pg_fetch_row(), pg_fetch_object(), pg_fetch_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_fetch_array($result, int $row = NULL, int $result_type = PGSQL_BOTH): array {}

	/**
	 * 行を連想配列として取得する
	 * <p><b>pg_fetch_assoc()</b> は、取得した行（レコード）を 保持する連想配列を返します。</p><p><b>pg_fetch_assoc()</b> は、オプションの第 3 パラメータに <b><code>PGSQL_ASSOC</code></b> を指定して <code>pg_fetch_array()</code> をコールするのと同じです。連想配列のみを返します。もし数値添字の配列が 必要な場合は <code>pg_fetch_row()</code> を使用してください。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p><p><b>pg_fetch_assoc()</b> は、 <code>pg_fetch_row()</code> に比べてきわめて遅いというわけでは 「ありません」。そして、きわめて簡単に使用できます。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $row <p>取得する行番号。最初の行は 0 です。省略したり <b><code>NULL</code></b> を指定したりした場合は、 次の行を取得します。</p>
	 * @return array <p>連想配列（フィールド名をキーとする）を返します。 配列の各要素の値は文字列です。 データベースの <i>NULL</i> 値は、<b><code>NULL</code></b> として返します。</p><p><code>row</code> が結果の行数より大きい場合、行が存在しない場合、 そしてそれ以外のエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-fetch-assoc.php
	 * @see pg_fetch_row(), pg_fetch_array(), pg_fetch_object(), pg_fetch_result()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_fetch_assoc($result, int $row = NULL): array {}

	/**
	 * 行をオブジェクトとして得る
	 * <p><b>pg_fetch_object()</b> は、取得した行のフィールド名に 対応するプロパティを有するオブジェクトを返します。オプションとして、 指定したクラスのコンストラクタにパラメータを渡してインスタンス化する ことも可能です。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p><p>速度面では、この関数は <code>pg_fetch_array()</code> と同じであり、 <code>pg_fetch_row()</code> とほとんど同じ程度です （違いはわずかです）。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $row <p>取得する行番号。最初の行は 0 です。省略したり <b><code>NULL</code></b> を指定したりした場合は、 次の行を取得します。</p>
	 * @param int $result_type <p>非推奨で、無視されます。</p>
	 * @return object <p>結果の各フィールドに対応する属性を持つ <code>object</code> を返します。 データベースの <i>NULL</i> 値は <b><code>NULL</code></b> として返します。</p><p><code>row</code> が結果の行数より大きい場合・行が存在しない場合 、そしてそれ以外のエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-fetch-object.php
	 * @see pg_query(), pg_fetch_array(), pg_fetch_assoc(), pg_fetch_row(), pg_fetch_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_fetch_object($result, int $row = NULL, int $result_type = PGSQL_ASSOC): object {}

	/**
	 * 結果リソースから値を返す
	 * <p><b>pg_fetch_result()</b> は、PostgreSQL 結果リソースから 特定の行とフィールド（カラム）の値を返します。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_result()</b> という名前でした。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $row <p>結果から取得する行の番号。行番号は 0 から始まります。指定しなかった 場合は、次の行が読み込まれます。</p>
	 * @param mixed $field <p>取得するフィールド（カラム）の名前を表す文字列、あるいは取得する フィールドの番号。フィールド番号は 0 から始まります。</p>
	 * @return string <p>論理型の値は "t" あるいは "f" の形式で返します。 配列を含むそれ以外の型は、PostgreSQL のやりかたにしたがって文字列として フォーマットされた形式で返します。これは <b>psql</b> プログラムの出力と同じ形式です。データベースの <i>NULL</i> 値は、<b><code>NULL</code></b> として返します。</p><p><code>row</code> が結果の行数より大きい場合、 あるいはそれ以外のエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-fetch-result.php
	 * @see pg_query(), pg_fetch_array()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_fetch_result($result, int $row, $field): string {}

	/**
	 * 数値添字の配列として行を得る
	 * <p><b>pg_fetch_row()</b> は、指定した <code>result</code> リソースが指す結果から 1 行分のデータを取得します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $row <p>取得する行番号。最初の行は 0 です。省略したり <b><code>NULL</code></b> を指定したりした場合は、 次の行を取得します。</p>
	 * @return array <p>個々の値を文字列として格納した配列を返します。配列の添字は 0 から 始まります。データベースの <i>NULL</i> 値は <b><code>NULL</code></b> として返します。</p><p><code>row</code> が結果の行数より大きい場合・行が存在しない場合 、そしてそれ以外のエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-fetch-row.php
	 * @see pg_query(), pg_fetch_array(), pg_fetch_object(), pg_fetch_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_fetch_row($result, int $row = NULL): array {}

	/**
	 * フィールドが SQL の NULL かどうか調べる
	 * <p><b>pg_field_is_null()</b> は、PostgreSQL 結果リソースの フィールドが SQL の <i>NULL</i> であるかどうかを調べます。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_fieldisnull()</b> と呼ばれていました。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $row <p>取得する結果の行番号。行番号は 0 から始まります。指定しなかった場合は カレントの行を取得します。</p>
	 * @param mixed $field <p>（0 から始まる）フィールド番号を表す数値、 あるいはフィールド名を表す文字列。</p>
	 * @return int <p>指定した行のフィールドが SQL の <i>NULL</i> だった場合に <i>1</i>、そうでない場合に <i>0</i> を返します。 もし範囲外の行を指定したりその他のエラーが発生したりした場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-field-is-null.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_is_null($result, int $row, $field): int {}

	/**
	 * フィールドの名前を返す
	 * <p><b>pg_field_name()</b> は、指定した PostgreSQL <code>result</code> リソースの指定した <code>field_number</code> にあるフィールドの名前を 返します。フィールド番号は 0 から始まります。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_fieldname()</b> と呼ばれていました。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $field_number <p>フィールド番号。0 から始まります。</p>
	 * @return string <p>フィールド名を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-field-name.php
	 * @see pg_field_num()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_name($result, int $field_number): string {}

	/**
	 * 指定されたフィールドのフィールド番号を返す
	 * <p><b>pg_field_num()</b> は、指定した PostgreSQL の 結果リソース(<code>result</code>)において <code>field_name</code> に相当するカラム(フィールド) のフィールド番号を返します。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_fieldnum()</b> と呼ばれていました。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param string $field_name <p>フィールドの名前。</p>
	 * @return int <p>フィールド番号（0 から始まります）を返します。エラー時には -1 を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-field-num.php
	 * @see pg_field_name()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_num($result, string $field_name): int {}

	/**
	 * 表示される長さを返す
	 * <p><b>pg_field_prtlen()</b> は、PostgreSQL の <code>result</code> の指定した値に関して、実際に 表示した場合の長さ(文字の数)を返します。行番号(row_number)は 0 から始まります。この関数は、エラーの場合に <b><code>FALSE</code></b> を返します。</p><p><code>field_name_or_number</code> は、<code>integer</code> または <code>string</code> のどちらかで渡すことが可能です。 <code>integer</code> で渡された場合、PHP はそれをフィールド番号と判断 します。それ以外の場合はフィールド名と判断します。</p><p><code>pg_field_name()</code> ページの例を参照ください。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_fieldprtlen()</b> と呼ばれていました。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $row_number
	 * @param mixed $field_name_or_number
	 * @return int <p>フィールドの表示される長さを返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-field-prtlen.php
	 * @see pg_field_size()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_prtlen($result, int $row_number, $field_name_or_number): int {}

	/**
	 * 指定したフィールドの内部記憶領域におけるサイズを返す
	 * <p><b>pg_field_size()</b> は、指定した PostgreSQL の 結果において、指定したフィールド番号の内部記憶領域のサイズを (バイト数で)返します。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_fieldsize()</b> と呼ばれていました。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $field_number <p>フィールド番号。0 から始まります。</p>
	 * @return int <p>内部記憶領域のサイズ（バイト数）を返します。-1 は可変長フィールドを 示します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-field-size.php
	 * @see pg_field_prtlen(), pg_field_type()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_size($result, int $field_number): int {}

	/**
	 * tables フィールドの名前あるいは oid を返す
	 * <p><b>pg_field_table()</b> は、フィールドが属するテーブルの名前か あるいは <code>oid_only</code> が <b><code>TRUE</code></b> の場合にテーブルの oid を返します。</p>
	 * @param resource $result <p><code>pg_query()</code>、<code>pg_query_params()</code> あるいは <code>pg_execute()</code> (その他も含む) から返された、PostgreSQL クエリ結果リソース。</p>
	 * @param int $field_number <p>0 から始まるフィールド番号。</p>
	 * @param bool $oid_only <p>デフォルトでは、フィールドが属するテーブルの名前が返されます。 しかし <code>oid_only</code> を<b><code>TRUE</code></b> に設定すると、 その代わりに oid が返されます。</p>
	 * @return mixed <p>成功した場合にフィールドのテーブル名あるいは oid、 あるいは失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-field-table.php
	 * @see pg_field_name(), pg_field_type()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function pg_field_table($result, int $field_number, bool $oid_only = FALSE) {}

	/**
	 * フィールド番号に対応する型名を返す
	 * <p><b>pg_field_type()</b> は、指定した PostgreSQL の <code>result</code> リソースにおいて、指定した <code>field_number</code> の型名を保持する文字列を 返します。</p><p><b>注意</b>:</p><p>フィールドが（基本型ではなく）PostgreSQL ドメインを使用している場合は、 ドメインそのものの名前ではなくドメインの元となっている型の名前を返します。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_fieldtype()</b> と呼ばれていました。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $field_number <p>フィールド番号。0 から始まります。</p>
	 * @return string <p>フィールド型の名前を文字列で返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-field-type.php
	 * @see pg_field_prtlen(), pg_field_name(), pg_field_type_oid()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_field_type($result, int $field_number): string {}

	/**
	 * フィールド番号に対応する型 ID（OID）を返す
	 * <p><b>pg_field_type_oid()</b> は、指定した PostgreSQL <code>result</code> リソースにおける指定した <code>field_number</code> の型の OID を返します。</p><p>フィールド型についての詳細な情報を得るには、PostgreSQL のシステムテーブル <i>pg_type</i> に対して、この関数で取得した OID を用いて 問い合わせます。PostgreSQL の <b>format_type()</b> 関数は、 型の OID を SQL の型名に変換します。</p><p><b>注意</b>:</p><p>フィールドが（基本型ではなく）PostgreSQL ドメインを使用している場合は、 ドメインそのものの OID ではなくドメインの元となっている型の OID を返します。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $field_number <p>フィールド番号。0 から始まります。</p>
	 * @return int <p>フィールドの型に対応する OID を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-field-type-oid.php
	 * @see pg_field_type(), pg_field_prtlen(), pg_field_name()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_field_type_oid($result, int $field_number): int {}

	/**
	 * アウトバウンドクエリデータを接続へフラッシュする
	 * <p><b>pg_flush()</b> は、接続への送信を待機中のすべての アウトバウンドクエリデータをフラッシュします。</p>
	 * @param resource $connection <p>PostgreSQL の接続リソース。</p>
	 * @return mixed <p>フラッシュが成功したか、またはフラッシュを待機中のデータがなかった場合 <b><code>TRUE</code></b>、 保留中のデータの一部がフラッシュされ残りがある場合、<i>0</i>。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link https://php.net/manual/ja/function.pg-flush.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function pg_flush($connection) {}

	/**
	 * メモリを開放する
	 * <p><b>pg_free_result()</b> は、指定された PostgreSQL クエリ 結果 <code>resource</code> に関するメモリとデータを開放します。</p><p>この関数は、スクリプト実行中のメモリ使用量を抑制したい場合にのみ コールする必要があります。それ以外の場合は、すべての結果保持用 メモリは、スクリプトが終了する際に自動的に開放されます。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_freeresult()</b> と呼ばれていました。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-free-result.php
	 * @see pg_query(), pg_query_params(), pg_execute()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_free_result($result): bool {}

	/**
	 * SQL NOTIFY メッセージを取得する
	 * <p><b>pg_get_notify()</b>は、<i>NOTIFY</i> SQL コマンドにより送信された通知メッセージを取得します。 通知メッセージを取得するには、<i>LISTEN</i> SQL コマンドを発行する必要があります。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @param int $result_type <p><code>result_type</code> は、返り値の形式を制御する オプションのパラメータです。<code>result_type</code> は定数であり、次の値のどれかとすることが可能です。 <b><code>PGSQL_ASSOC</code></b>、<b><code>PGSQL_NUM</code></b> および <b><code>PGSQL_BOTH</code></b>。 <b><code>PGSQL_NUM</code></b> を使用すると、<b>pg_get_notify()</b> は数値添字の配列を返します。また、<b><code>PGSQL_ASSOC</code></b> を使用すると連想配列形式で返します。<b><code>PGSQL_BOTH</code></b> がデフォルト設定で、これは数値添字の配列と連想配列の両方を返します。</p>
	 * @return array <p><i>NOTIFY</i> メッセージ名とバックエンドの PID を含む 配列を返します。 PHP 5.4.0 以降、サーバでサポートされている場合は、 配列にはサーバーのバージョンおよびペイロードも含まれます。 もし待ち受ける <i>NOTIFY</i> が存在しない場合は、 <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-get-notify.php
	 * @see pg_get_pid()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_get_notify($connection, int $result_type = NULL): array {}

	/**
	 * バックエンドのプロセス ID を得る
	 * <p><b>pg_get_pid()</b> は、バックエンド(データベースサーバ のプロセス)のプロセス ID を取得します。プロセス ID は、 <i>NOTIFY</i> メッセージが他のプロセスから送信されている かどうかを調べるために有用です。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @return int <p>バックエンドのデータベースのプロセス ID 。</p>
	 * @link https://php.net/manual/ja/function.pg-get-pid.php
	 * @see pg_get_notify()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_get_pid($connection): int {}

	/**
	 * 非同期クエリの結果を取得する
	 * <p><b>pg_get_result()</b> は、 <code>pg_send_query()</code>・<code>pg_send_query_params()</code> あるいは <code>pg_send_execute()</code> で実行した非同期クエリから結果リソースを取得します。</p><p><code>pg_send_query()</code> およびその他の非同期クエリ関数は、 複数のクエリを PostgreSQL サーバーに送信することが可能です。クエリの結果を ひとつずつ取得するには、<b>pg_get_result()</b> を使用します。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @return resource <p>結果 <code>resource</code> を返します。結果がもうない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-get-result.php
	 * @see pg_send_query()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_get_result($connection = NULL) {}

	/**
	 * 接続に関連するホスト名を返す
	 * <p><b>pg_host()</b> は、指定した PostgreSQL <code>connection</code> リソースが接続しているホストの 名前を返します。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return string <p><code>connection</code> が接続しているホストの名前を 文字列で返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-host.php
	 * @see pg_connect(), pg_pconnect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_host($connection = NULL): string {}

	/**
	 * テーブルに配列を挿入する
	 * <p><b>pg_insert()</b> は、 <i>table_name</i> で指定したテーブルに <i>assoc_array</i> の値をを挿入します。 <code>options</code> が指定されている場合、そのオプションと ともに <code>pg_convert()</code> が <i>assoc_array</i> に適用されます。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @param string $table_name <p>行を挿入するテーブルの名前。テーブル <code>table_name</code> は、少なくとも <code>assoc_array</code> の要素数ぶんのカラムを 保持している必要があります。</p>
	 * @param array $assoc_array <p>テーブル <code>table_name</code> のフィールド名をキーに、 挿入する内容を値にもつ配列。</p>
	 * @param int $options <p><b><code>PGSQL_CONV_OPTS</code></b>、 <b><code>PGSQL_DML_NO_CONV</code></b>、 <b><code>PGSQL_DML_ESCAPE</code></b>、 <b><code>PGSQL_DML_EXEC</code></b>、 <b><code>PGSQL_DML_ASYNC</code></b> あるいは <b><code>PGSQL_DML_STRING</code></b> を組み合わせた数。 <b><code>PGSQL_DML_STRING</code></b> が <code>options</code> に含まれていた場合、 クエリ文字列が返されます。 <b><code>PGSQL_DML_NO_CONV</code></b> あるいは <b><code>PGSQL_DML_ESCAPE</code></b> が設定されている場合は、内部的に <code>pg_convert()</code> を呼びません。</p>
	 * @return mixed <p>成功時に接続リソースを返し、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>options</code> で <b><code>PGSQL_DML_STRING</code></b> が渡された場合は文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-insert.php
	 * @see pg_convert()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_insert($connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC) {}

	/**
	 * 特定の接続から直近のエラーメッセージ文字列を取得する
	 * <p><b>pg_last_error()</b> は、指定した <code>connection</code> から直近のエラーメッセージを返します。</p><p>エラーメッセージは、内部的な PostgreSQL(libpq) 関数コールにより 上書きされる可能性があります。PostgreSQL モジュール関数の中で複数の エラーが発生した場合には、この関数は適切なエラーメッセージを返さない 可能性があります。</p><p>エラー処理を改善するために <code>pg_result_error()</code>、<code>pg_result_error_field()</code>、 <code>pg_result_status()</code> および <code>pg_connection_status()</code> を使用ください。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_errormessage()</b> と呼ばれていました。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return string <p>指定した <code>connection</code> の直近のエラーメッセージを 含む文字列を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-last-error.php
	 * @see pg_result_error(), pg_result_error_field()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_last_error($connection = NULL): string {}

	/**
	 * PostgreSQL サーバーからの直近の通知メッセージを返す
	 * <p><b>pg_last_notice()</b> は、<code>connection</code> で指定した PostgreSQL サーバーからの直近の通知メッセージを返します。 たとえば、テーブルに <i>SERIAL</i> カラムを作成する場合などに PostgreSQL サーバーは通知メッセージを送信します。</p><p><b>pg_last_notice()</b> でトランザクションに関連する通知 メッセージがあるかないかをチェックすることで、無意味なクエリの発行を 避けることが可能です。</p><p>php.ini で <i>pgsql.ignore_notice</i> に 1 を指定することで、通知メッセージの追跡をしないようにすることが可能です。</p><p>php.ini で <i>pgsql.log_notice</i> に 0 を指定することで、通知メッセージをログに記録しないようにすることが可能です。 <i>pgsql.ignore_notice</i> が 0 に設定されていない限り、 通知メッセージをログに記録することはできません。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @param int $option <p>直近の通知を返す <b><code>PGSQL_NOTICE_LAST</code></b>、 すべての通知を返す <b><code>PGSQL_NOTICE_ALL</code></b>、 または通知をクリアする <b><code>PGSQL_NOTICE_CLEAR</code></b> のいずれか</p>
	 * @return mixed <p><b><code>PGSQL_NOTICE_LAST</code></b> 使用時は、 指定された <code>connection</code> の直近の通知を含む <code>string</code>、 <b><code>PGSQL_NOTICE_ALL</code></b> 使用時は <code>array</code>、 <b><code>PGSQL_NOTICE_CLEAR</code></b> 使用時は <code>boolean</code>、 エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-last-notice.php
	 * @see pg_query(), pg_last_error()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function pg_last_notice($connection, int $option = PGSQL_NOTICE_LAST) {}

	/**
	 * 直近の行のオブジェクト ID を返す
	 * <p><b>pg_last_oid()</b> は、挿入された行に割り当てられた OID を取得します。</p><p>OID フィールドは PostgreSQL 7.2 からはオプションとなり、 PostgreSQL 8.1 ではデフォルトで存在しません。OID フィールドが テーブルに存在しない場合、プログラマは <code>pg_result_status()</code> を使用して挿入が成功したことを 確かめる必要があります。</p><p>挿入された行の <i>SERIAL</i> フィールドの値を取得するには、 PostgreSQL の <i>CURRVAL</i> 関数を使用してシーケンス内で 直近に要求された値を取得する必要があります。シーケンス名がわからない 場合は、PostgreSQL 8.0 の関数 <i>pg_get_serial_sequence</i> が必要になります。</p><p>PostgreSQL 8.1 には <i>LASTVAL</i> 関数が存在し、セッション内で 直近に使用されたシーケンスの値を返します。これを用いれば、シーケンスや テーブルやカラムの名前を指定する必要がなくなります。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_getlastoid()</b> と呼ばれていました。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @return string <p>指定された <code>connection</code> で、直近に挿入された行に 割り当てられた OID を文字列で返します。エラー時や有効な OID のない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-last-oid.php
	 * @see pg_query(), pg_result_status()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_last_oid($result): string {}

	/**
	 * ラージオブジェクトをクローズする
	 * <p><b>pg_lo_close()</b> はラージオブジェクトをクローズします。 <code>large_object</code> は、<code>pg_lo_open()</code> でオープンされたラージオブジェクトのリソースです。</p><p>ラージオブジェクトインターフェイスは、トランザクションブロックの中で 使用する必要があります。</p><p><b>注意</b>:</p><p>This function used to be called <b>pg_loclose()</b>.</p>
	 * @param resource $large_object
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-close.php
	 * @see pg_lo_open(), pg_lo_create(), pg_lo_import()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_close($large_object): bool {}

	/**
	 * ラージオブジェクトを生成する
	 * <p><b>pg_lo_create()</b> はラージオブジェクトを 生成し、そのラージオブジェクトの OID を返します。 PostgreSQL アクセスモード <b><code>INV_READ</code></b>、<b><code>INV_WRITE</code></b> および <b><code>INV_ARCHIVE</code></b> はサポートされません。オブジェクトは 常に読み書き可のアクセス権で生成されます。 <b><code>INV_ARCHIVE</code></b> は PostgreSQL 自身からも削除されました （バージョン 6.3 以降）。</p><p>ラージオブジェクトインターフェイスは、トランザクションブロックの中で 使用する必要があります。</p><p>ラージオブジェクトインターフェイス（アクセス制御もできないし使用が面倒） を使用するかわりに、PostgreSQL の bytea カラム型と <code>pg_escape_bytea()</code> を試してください。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_locreate()</b> と呼ばれていました。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param mixed $object_id <p><code>object_id</code> が指定されると、 この関数は指定された ID のラージオブジェクトを作成しようとします。 それ以外の場合は、サーバーから割り当てられたオブジェクト ID を使用します。 このパラメータは PHP 5.3 で追加されたもので、 PostgreSQL 8.1 以降の新機能に依存しています。</p>
	 * @return int <p>ラージオブジェクトの OID を返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-create.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_create($connection = NULL, $object_id = NULL): int {}

	/**
	 * ラージオブジェクトをファイルにエクスポートする
	 * <p><b>pg_lo_export()</b> は PostgreSQL データベースから ラージオブジェクトを取得し、その内容をローカルファイルシステム上の ファイルに保存します。</p><p>ラージオブジェクトインターフェイスは、トランザクションブロックの中で 使用する必要があります。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_loexport()</b> と呼ばれていました。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param int $oid <p>データベース内のラージオブジェクトの OID 。</p>
	 * @param string $pathname <p>ラージオブジェクトをクライアントのファイルシステムに書き込む際の フルパスとファイル名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-export.php
	 * @see pg_lo_import()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_export($connection = NULL, int $oid, string $pathname): bool {}

	/**
	 * ファイルからラージオブジェクトをインポートする
	 * <p><b>pg_lo_import()</b> は、ファイルシステム上のファイルの データをもとにして新しいラージオブジェクトをデータベース内に作成します。</p><p>ラージオブジェクトインターフェイスは、トランザクションブロックの中で 使用する必要があります。</p><p><b>注意</b>: <code> セーフモード が有効の場合、PHP は操作を行うファイル／ディレクトリが実行するスクリプトと 同じ UID (所有者)を有しているかどうかを確認します。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_loimport()</b> と呼ばれていました。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param string $pathname <p>クライアントのファイルシステムからラージオブジェクト用データを 読み込む際のフルパスとファイル名。</p>
	 * @param mixed $object_id <p><code>object_id</code> が指定されると、 この関数は指定された ID のラージオブジェクトを作成しようとします。 それ以外の場合は、サーバーから割り当てられたオブジェクト ID を使用します。 このパラメータは PHP 5.3 で追加されたもので、 PostgreSQL 8.1 以降の新機能に依存しています。</p>
	 * @return int <p>作成されたラージオブジェクトの OID を返します。 失敗した場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-import.php
	 * @see pg_lo_export(), pg_lo_open()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_import($connection = NULL, string $pathname, $object_id = NULL): int {}

	/**
	 * ラージオブジェクトをオープンする
	 * <p><b>pg_lo_open()</b> はデータベース内にラージオブジェクトを オープンし、それを操作するためのラージオブジェクトリソースを返します。</p><p>ラージオブジェクトのリソースを閉じる前にデータベースへの接続を 閉じないでください。</p><p>ラージオブジェクトインターフェイスは、トランザクションブロックの中で 使用する必要があります。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_loopen()</b> と呼ばれていました。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param int $oid <p>データベース内のラージオブジェクトの OID 。</p>
	 * @param string $mode <p>読み込み専用の "r"、書き込み専用の "w"、読み書き可能な "rw" のいずれか。</p>
	 * @return resource <p>ラージオブジェクトのリソースを返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-open.php
	 * @see pg_lo_close(), pg_lo_create()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_open($connection, int $oid, string $mode) {}

	/**
	 * ラージオブジェクトを読み込む
	 * <p><b>pg_lo_read()</b>は、ラージオブジェクトから最大 <code>len</code> バイト分読み込み、文字列として返します。</p><p>ラージオブジェクトインターフェイスは、トランザクションブロックの中で 使用する必要があります。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_loread()</b> と呼ばれていました。</p>
	 * @param resource $large_object <p><code>pg_lo_open()</code> によって返された PostgreSQL ラージオブジェクト (LOB) リソース。</p>
	 * @param int $len <p>返すデータの最大バイト数（オプション）。</p>
	 * @return string <p>ラージオブジェクトから <code>len</code> バイトのデータを 文字列で返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-read.php
	 * @see pg_lo_read_all()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_read($large_object, int $len = 8192): string {}

	/**
	 * ラージオブジェクト全体を読み込みブラウザに直接送信する
	 * <p><b>pg_lo_read_all()</b> は、ラージオブジェクトを読み込み 未送信のヘッダを全て送信した後、ブラウザに直接ラージオブジェクトを 送信します。これは主に、イメージや音などのバイナリデータを送信するために 使用します。</p><p>ラージオブジェクトインターフェイスは、トランザクションブロックの中で 使用する必要があります。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_loreadall()</b> と呼ばれていました。</p>
	 * @param resource $large_object <p><code>pg_lo_open()</code> によって返された PostgreSQL ラージオブジェクト (LOB) リソース。</p>
	 * @return int <p>読み込んだバイト数を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-read-all.php
	 * @see pg_lo_read()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_read_all($large_object): int {}

	/**
	 * ラージオブジェクトの位置をシークする
	 * <p><b>pg_lo_seek()</b> はラージオブジェクトリソースの位置を シークします。</p><p>ラージオブジェクトインターフェイスは、トランザクションブロックの中で 使用する必要があります。</p>
	 * @param resource $large_object <p><code>pg_lo_open()</code> が返す PostgreSQL の ラージオブジェクト(LOB)リソース。</p>
	 * @param int $offset <p>シークするバイト数。</p>
	 * @param int $whence <p>定数 <b><code>PGSQL_SEEK_SET</code></b>（オブジェクトの先頭からシークする）、 <b><code>PGSQL_SEEK_CUR</code></b>（カレントの位置からシークする）、 あるいは <b><code>PGSQL_SEEK_END</code></b>（オブジェクトの最後からシークする） の中のひとつ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-seek.php
	 * @see pg_lo_tell()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_seek($large_object, int $offset, int $whence = PGSQL_SEEK_CUR): bool {}

	/**
	 * ラージオブジェクトのカレントのシーク位置を返す
	 * <p><b>pg_lo_tell()</b> は、ラージオブジェクトのカレントの位置 （先頭からのオフセット）を返します。</p><p>ラージオブジェクトインターフェイスは、トランザクションブロックの中で 使用する必要があります。</p>
	 * @param resource $large_object <p><code>pg_lo_open()</code> が返す PostgreSQL の ラージオブジェクト(LOB)リソース。</p>
	 * @return int <p>ラージオブジェクトの先頭からのカレントのシーク位置（バイト数）を返します。 エラーが発生した場合は、負の数を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-tell.php
	 * @see pg_lo_seek()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_tell($large_object): int {}

	/**
	 * Truncates a large object
	 * <p><b>pg_lo_truncate()</b> truncates a large object resource.</p><p>To use the large object interface, it is necessary to enclose it within a transaction block.</p>
	 * @param resource $large_object <p>PostgreSQL large object (LOB) resource, returned by <code>pg_lo_open()</code>.</p>
	 * @param int $size <p>The number of bytes to truncate.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-truncate.php
	 * @see pg_lo_tell()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function pg_lo_truncate($large_object, int $size): bool {}

	/**
	 * ラージオブジェクトを削除する
	 * <p><b>pg_lo_unlink()</b>は、<code>oid</code>で 関連付けられたラージオブジェクトを削除します。成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>ラージオブジェクトインターフェイスは、トランザクションブロックの中で 使用する必要があります。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_lounlink()</b> と呼ばれていました。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param int $oid <p>データベース内のラージオブジェクトの OID 。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-unlink.php
	 * @see pg_lo_create(), pg_lo_import()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_unlink($connection, int $oid): bool {}

	/**
	 * ラージオブジェクトを書く
	 * <p><b>pg_lo_write()</b> は、ラージオブジェクトの カレントのシーク位置にデータを書き込みます。</p><p>ラージオブジェクトインターフェイスは、トランザクションブロックの中で 使用する必要があります。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_lowrite()</b> と呼ばれていました。</p>
	 * @param resource $large_object <p><code>pg_lo_open()</code> によって返された PostgreSQL ラージオブジェクト (LOB) リソース。</p>
	 * @param string $data <p>ラージオブジェクトに書き込むデータ。<code>len</code> が <code>data</code> の長さより小さく指定されている場合、 <code>len</code> バイトのみが書き込まれます。</p>
	 * @param int $len <p>書き込むデータの最大バイト数（オプション）。0 より大きく、かつ <code>data</code> のサイズ以下でなければなりません。 デフォルトは <code>data</code> の長さです。</p>
	 * @return int <p>ラージオブジェクトに書き込んだバイト数を返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-lo-write.php
	 * @see pg_lo_create(), pg_lo_open()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_lo_write($large_object, string $data, int $len = NULL): int {}

	/**
	 * テーブルからメタデータを取得する
	 * <p><b>pg_meta_data()</b> は、<i>table_name</i> のテーブル定義を配列として返します。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @param string $table_name <p>テーブルの名前。</p>
	 * @param bool $extended <p>拡張メタデータを返すかどうかを表すフラグ。デフォルトは <b><code>FALSE</code></b>。</p>
	 * @return array <p>テーブル定義の配列を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-meta-data.php
	 * @see pg_convert()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_meta_data($connection, string $table_name, bool $extended = FALSE): array {}

	/**
	 * フィールド数を返す
	 * <p><b>pg_num_fields()</b> は、PostgreSQL 結果リソースから フィールド（カラム）の数を返します。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_numfields()</b> と呼ばれていました。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @return int <p>結果のフィールド（カラム）数を返します。エラー時には -1 を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-num-fields.php
	 * @see pg_num_rows(), pg_affected_rows()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_num_fields($result): int {}

	/**
	 * 行数を返す
	 * <p><b>pg_num_rows()</b> は、PostgreSQL の結果リソースの 行数を返します。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_numrows()</b> と呼ばれていました。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @return int <p>結果の行数を返します。エラー時には -1 を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-num-rows.php
	 * @see pg_num_fields(), pg_affected_rows()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_num_rows($result): int {}

	/**
	 * 接続に関連するオプションを取得する
	 * <p><b>pg_options()</b> は、指定した PostgreSQL <code>connection</code> リソースの オプションを保持する文字列を返します。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return string <p><code>connection</code> のオプションを文字列で返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-options.php
	 * @see pg_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_options($connection = NULL): string {}

	/**
	 * サーバーのパラメータ設定を検索する
	 * <p>サーバーのパラメータ設定を検索します。</p><p>いくつかのパラメータについては、接続の確立時や値の変更時にサーバーから 自動的に通知されます。<b>pg_parameter_status()</b> は これらの設定問い合わせるために使用可能です。指定したパラメータが存在する 場合にその値を、存在しない場合に <b><code>FALSE</code></b> を返します。</p><p>PostgreSQL 8.0 で指定できるパラメータには以下が含まれます。 <i>server_version</i>、 <i>server_encoding</i>、<i>client_encoding</i>、 <i>is_superuser</i>、<i>session_authorization</i>、 <i>DateStyle</i>、<i>TimeZone</i> および <i>integer_datetimes</i> （<i>server_encoding</i>、<i>TimeZone</i> および <i>integer_datetimes</i> は 8.0 より前のバージョンでは指定できません）。 <i>server_version</i>、<i>server_encoding</i> および <i>integer_datetimes</i> は、PostgreSQL の稼動中には変更できないことに注意しましょう。</p><p>PostgreSQL 7.3 以前のサーバーはパラメータ設定を通知する機能を持っていません。 しかし、<b>pg_parameter_status()</b> には <i>server_version</i> および <i>client_encoding</i> を取得する機能を組み込んでいます。これらの値を取得するためにアプリケーションで アドホックなコードを書くのではなく、<b>pg_parameter_status()</b> を使用することを推奨します。</p><p>7.4 より前の PostgreSQL サーバーでは、接続の確立後に <i>SET</i> を用いて <i>client_encoding</i> を変更しても <b>pg_parameter_status()</b> には反映されません。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param string $param_name <p>指定可能な <code>param_name</code> には以下が含まれます。 <i>server_version</i>、 <i>server_encoding</i>、<i>client_encoding</i>、 <i>is_superuser</i>、<i>session_authorization</i>、 <i>DateStyle</i>、<i>TimeZone</i> および <i>integer_datetimes</i>。</p>
	 * @return string <p>パラメータの値を文字列で返します。失敗した場合や <code>param_name</code> が間違っている場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-parameter-status.php
	 * @since PHP 5, PHP 7
	 */
	function pg_parameter_status($connection = NULL, string $param_name): string {}

	/**
	 * 持続的な PostgreSQL 接続をオープンする
	 * <p><b>pg_pconnect()</b> は PostgreSQL への接続を オープンします。この関数は、他の PostgreSQL関数 が必要とする 接続リソースを返します。</p><p>既存の接続と同じ <code>connection_string</code> を用いて <b>pg_pconnect()</b> が 2 回目にコールされた場合は、 既存の接続を返します。ただし、<code>connect_type</code> に <b><code>PGSQL_CONNECT_FORCE_NEW</code></b> を指定している場合は 除きます。</p><p>持続的接続を有効にするには、php.ini のディレクティブ pgsql.allow_persistent を "On" に設定する必要があります（デフォルトは On です）。 持続的接続の最大数は php.ini ディレクティブ pgsql.max_persistent で設定可能です（デフォルトは制限無しを意味する -1 です）。 接続全体の数は php.ini ディレクティブ pgsql.max_links で設定可能です。</p><p><code>pg_close()</code> は、 <b>pg_pconnect()</b> によりオープンされた持続的接続は 閉じません。</p>
	 * @param string $connection_string <p>すべてデフォルトのパラメータを使用する場合には <code>connection_string</code> を空にすることが可能です。 または 1 つ以上のパラメータを空白で区切って指定することも可能です。 個々のパラメータは <i>keyword = value</i> の形式で 設定します。等号の前後の空白はあってもなくてもかまいません。 空の値や空白を含む値を指定する場合は、その値をシングルクォートで 囲みます（例: <i>keyword = 'a value'</i>）。値の中に シングルクォートやバックスラッシュが含まれる場合は、それらを バックスラッシュでエスケープする必要があります（例: \' および \\）。</p> <p>現在利用できるパラメータは以下のとおりです。 <code>host</code>, <code>hostaddr</code>, <code>port</code>, <code>dbname</code>, <code>user</code>, <code>password</code>, <code>connect_timeout</code>, <code>options</code>, <code>tty</code>（無視されます）, <code>sslmode</code>, <code>requiressl</code>（非推奨。代わりに <code>sslmode</code> を推奨します） および <code>service</code> 。これらのうち実際にどの パラメータが使えるかは、PostgreSQL のバージョンに依存します。</p>
	 * @param int $connect_type <p><b><code>PGSQL_CONNECT_FORCE_NEW</code></b> が渡された場合は、 たとえ <code>connection_string</code> が既存の接続と まったく同一であっても新しい接続をオープンします。</p>
	 * @return resource <p>成功した場合に PostgreSQL の接続リソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-pconnect.php
	 * @see pg_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_pconnect(string $connection_string, int $connect_type = NULL) {}

	/**
	 * データベース接続を調べる
	 * <p><b>pg_ping()</b> はデータベース接続を調べ、その接続が 壊れている場合には再度接続を試みます。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-ping.php
	 * @see pg_connection_status(), pg_connection_reset()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_ping($connection = NULL): bool {}

	/**
	 * 接続に関連するポート番号を返す
	 * <p><b>pg_port()</b> は、指定した PostgreSQL <code>connection</code> リソースが接続している ポートの番号を返します。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return int <p><code>connection</code> が指しているデータベースのポート番号を 含む <code>int</code> を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-port.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_port($connection = NULL): int {}

	/**
	 * 指定したパラメータでプリペアドステートメントを作成するリクエストを 送信し、その完了を待つ
	 * <p><b>pg_prepare()</b> は、 <code>pg_execute()</code> あるいは <code>pg_send_execute()</code> で後に実行するためのプリペアドステートメントを作成します。これにより、 繰り返し使用されるコマンドについての構文解析や実行計画作成が最初の 一度だけですみます。<b>pg_prepare()</b> は PostgreSQL 7.4 以降の接続でのみ使用可能です。それ以前のバージョンでは失敗します。</p><p>この関数は <code>stmtname</code> という名前の プリペアドステートメントを <code>query</code> 文字列から作成します。 この文字列には 1 つの SQL コマンドが含まれている必要があります。 <code>stmtname</code> を "" にすることで無名ステートメントを 作成することが可能で、既存の無名ステートメントは自動的に上書きされます。 それ以外の場合、もしカレントのセッションで既に定義済みのステートメント名を 使用した場合にはエラーとなります。パラメータを使用する際は、 <code>query</code> 内で $1、$2 のような形式で参照されます。</p><p><b>pg_prepare()</b> で使用するプリペアドステートメントは、 SQLの <i>PREPARE</i> 文を実行することでも作成可能です （しかし、パラメータの型を事前に指定する必要がないという点で <b>pg_prepare()</b> のほうがより柔軟です）。 また、PHP にはプリペアドステートメントを削除する関数がありませんが、 この目的のためには SQLの <i>DEALLOCATE</i> 文が使用可能です。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param string $stmtname <p>プリペアドステートメントにつける名前。接続内で一意である必要があります。 "" が指定された場合は無名ステートメントが作成され、以前に定義された 無名ステートメントを上書きします。</p>
	 * @param string $query <p>パラメータ化した SQL 文。ひとつの文のみである必要があります （複数の文をセミコロンで区切る形式は使用できません）。パラメータを 使用する際は $1、$2 などの形式で参照されます。</p>
	 * @return resource <p>成功した場合にクエリ結果リソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-prepare.php
	 * @see pg_execute(), pg_send_execute()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_prepare($connection = NULL, string $stmtname, string $query) {}

	/**
	 * NULL で終わる文字列を PostgreSQL バックエンドに送信する
	 * <p><b>pg_put_line()</b> は、NULL で終わる文字列を PostgreSQL バックエンドサーバーに送信します。これは、PostgreSQL の <i>COPY FROM</i> コマンドとともに使用する場合に必要となります。</p><p><i>COPY</i> は、PostgreSQL によってサポートされている 高速なデータ読み込みインターフェイスです。データの内容はパースされず、 一度のトランザクションで実行されます。</p><p>低レベルな <b>pg_put_line()</b> コマンドを用いない別の方法は、 <code>pg_copy_from()</code> を使用することです。これは、はるかに シンプルなインターフェイスです。</p><p><b>注意</b>:</p><p><code>pg_end_copy()</code> を実行する際には、送信データの最後に 明示的に "\." の 2 文字を送信する必要があります。これによって、 バックエンドに対してデータ送信の終了を通知します。</p><p><b>pg_put_line()</b> の使用は、<code>pg_lo_read()</code> や <code>pg_lo_tell()</code> などを含むラージオブジェクトの操作を 発生させ、これが失敗することもあります。そのような場合、かわりに <code>pg_copy_from()</code> および <code>pg_copy_to()</code> が使用可能です。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param string $data <p>PostgreSQL バックエンドに直接送信されるテキストデータ。 最後に <i>NULL</i> が自動的に付加されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-put-line.php
	 * @see pg_end_copy()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function pg_put_line($connection = NULL, string $data): bool {}

	/**
	 * クエリを実行する
	 * <p><b>pg_query()</b> は、指定したデータベース <code>connection</code> 上で <code>query</code> を実行します。 特別な理由がない限り、この関数よりも <code>pg_query_params()</code> を使うほうがいいでしょう。</p><p>エラーが発生して <b><code>FALSE</code></b> が返された場合、もし接続が正常なら <code>pg_last_error()</code> 関数を使用してエラーの詳細情報が 取得可能です。</p><p></p><p><b>注意</b>:  <code>connection</code>は省略可能ですが、それは推奨されません。 なぜならスクリプトのバグが発見しにくくなるためです。 </p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_exec()</b> と呼ばれていました。 <b>pg_exec()</b> は互換性確保のためにまだ使用可能ですが、 新しい名前を使用することが推奨されています。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param string $query <p>実行する 1 つまたは複数の SQL 文。複数の文が関数に渡された場合は、 明示的に BEGIN/COMMIT コマンドを指定していない限りはそれらの文は ひとつのトランザクションとして実行されます。しかし、1 回のコールで 複数のトランザクションを実行することは推奨されません。</p>  <b>警告</b> <p>ユーザーから受け取ったデータを文字列に直接組み込むのは危険で、SQL インジェクション の脆弱性を引き起こしがちです。クエリ文字列に直接埋め込むのではなく、 <code>pg_query_params()</code> を使ってパラメータとして指定することを推奨します。</p> <p>ユーザーから受け取ったデータをクエリ文字列に直接埋め込む場合は、 適切にエスケープ する必要があります。</p>
	 * @return resource <p>成功した場合にクエリ結果リソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-query.php
	 * @see pg_connect(), pg_pconnect(), pg_fetch_array(), pg_fetch_object(), pg_num_rows(), pg_affected_rows()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_query($connection = NULL, string $query) {}

	/**
	 * SQL コマンドとパラメータを分割してサーバーへ送信し、その結果を待つ
	 * <p>コマンドをサーバーに送信し、その結果を待ちます。パラメータを SQL コマンド とは別に渡すことが可能です。</p><p><b>pg_query_params()</b> は <code>pg_query()</code> と似ていますが、追加の機能を有しています。それはパラメータ値が コマンド文字列と分離しているということです。 <b>pg_query_params()</b> は PostgreSQL 7.4 以降の接続でのみ サポートされます。それ以前のバージョンでは失敗します。</p><p>パラメータを使用する際は、<code>query</code> 文字列内で $1、$2 のように参照されます。 <code>query</code> の中で同じパラメータを何度も使えます。 その場合は、それぞれに同じ値が渡されます。 <code>params</code> で 実際の値を指定します。<b><code>NULL</code></b> を指定すると、SQL の <i>NULL</i> とみなされます。</p><p><code>pg_query()</code> に対する <b>pg_query_params()</b> の最大の利点は、パラメータの値を <code>query</code> 文字列から 分離できることです。そのため、退屈でエラーの元となりやすいクォート・ エスケープなどをしなくてもよくなります。<code>pg_query()</code> と異なり、<b>pg_query_params()</b> ではひとつの SQL コマンドしか実行できません（クエリ文字列にセミコロンを含めることは 可能です。しかしそれ以降にコマンドを続けることはできません）。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param string $query <p>パラメータ化した SQL 文。ひとつの文のみである必要があります （複数の文をセミコロンで区切る形式は使用できません）。パラメータを 使用する際は $1、$2 などの形式で参照されます。</p> <p>ユーザーから受け取った値は常にパラメータとして渡すべきです。 直接クエリ文字列に組み込んではいけません。そうしてしまうと、 SQL インジェクション 攻撃を受けてしまう可能性があります。また、クォート文字を含むデータの処理でバグの原因になります。 何らかの理由でパラメータが使えない場合は、値を 適切にエスケープするようにしましょう。</p>
	 * @param array $params <p>プリペアドステートメント中の $1、$2 などのプレースホルダを 置き換えるパラメータの配列。配列の要素数はプレースホルダの 数と一致する必要があります。</p> <p><i>bytea</i> フィールド用の値は、パラメータとして指定できません。 <code>pg_escape_bytea()</code> を使うか、ラージオブジェクト関数を使うようにしましょう。</p>
	 * @return resource <p>成功した場合にクエリ結果リソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-query-params.php
	 * @see pg_query()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_query_params($connection = NULL, string $query, array $params) {}

	/**
	 * 結果に関連するエラーメッセージを取得する
	 * <p><b>pg_result_error()</b> は、結果リソース (<code>result</code>)に関連したエラーメッセージを返します。 このため、ユーザーが <code>pg_last_error()</code> よりも適切な エラーメッセージを得る可能性があります。</p><p><code>pg_result_error_field()</code> は、 <b>pg_result_error()</b> よりもさらに詳細なエラー情報を 返します。</p><p><code>pg_query()</code> はクエリが失敗した場合に <b><code>FALSE</code></b> を返すので、 結果ハンドルを取得するには <code>pg_send_query()</code> および <code>pg_get_result()</code> を使用する必要があります。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @return string <p>文字列を返します。エラーがない場合は空文字列を返します。 <code>result</code> パラメータに関連付けられたエラーがある場合は それを文字列で返します。それ以外の場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-result-error.php
	 * @see pg_result_error_field(), pg_query(), pg_send_query(), pg_get_result(), pg_last_error(), pg_last_notice()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_result_error($result): string {}

	/**
	 * エラー報告の各フィールドを返す
	 * <p><b>pg_result_error_field()</b> は、<code>result</code> リソースに関するエラーメッセージの特定のフィールドを返します。 PostgreSQL 7.4 以降のサーバーでのみ有効です。エラーフィールドは <code>fieldcode</code> で定義します。</p><p><code>pg_query()</code> や <code>pg_query_params()</code> はクエリが失敗した場合に <b><code>FALSE</code></b> を返すので、結果のハンドルを得るには <code>pg_send_query()</code> および <code>pg_get_result()</code> を使用する必要があります。</p><p>失敗した <code>pg_query()</code> クエリから詳細なエラー情報を 取得する必要がある場合は、<code>pg_set_error_verbosity()</code> および <code>pg_last_error()</code> を使用してその結果をパース します。</p>
	 * @param resource $result <p>実行したステートメントのクエリ結果リソース。</p>
	 * @param int $fieldcode <p>以下の <code>fieldcode</code> が使用可能です。 <b><code>PGSQL_DIAG_SEVERITY</code></b>、 <b><code>PGSQL_DIAG_SQLSTATE</code></b>、<b><code>PGSQL_DIAG_MESSAGE_PRIMARY</code></b>、 <b><code>PGSQL_DIAG_MESSAGE_DETAIL</code></b>、 <b><code>PGSQL_DIAG_MESSAGE_HINT</code></b>、<b><code>PGSQL_DIAG_STATEMENT_POSITION</code></b>、 <b><code>PGSQL_DIAG_INTERNAL_POSITION</code></b>（PostgreSQL 8.0+ のみ）、 <b><code>PGSQL_DIAG_INTERNAL_QUERY</code></b>（PostgreSQL 8.0+ のみ）、 <b><code>PGSQL_DIAG_CONTEXT</code></b>、<b><code>PGSQL_DIAG_SOURCE_FILE</code></b>、 <b><code>PGSQL_DIAG_SOURCE_LINE</code></b> あるいは <b><code>PGSQL_DIAG_SOURCE_FUNCTION</code></b> 。</p>
	 * @return string <p>エラーフィールドの内容を文字列で返します。 フィールドが存在しない場合に <b><code>NULL</code></b> 、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-result-error-field.php
	 * @see pg_result_error()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_result_error_field($result, int $fieldcode): string {}

	/**
	 * 結果リソースの内部行オフセットを設定する
	 * <p><b>pg_result_seek()</b>は、結果リソースの行の位置を 指定された offset にセットします。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $offset <p>結果リソース内で、内部オフセットを移動させる行。 行番号はゼロから始まります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-result-seek.php
	 * @see pg_fetch_row(), pg_fetch_assoc(), pg_fetch_array(), pg_fetch_object(), pg_fetch_result()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_result_seek($result, int $offset): bool {}

	/**
	 * クエリ結果のステータスを取得する
	 * <p><b>pg_result_status()</b> は、結果リソースのステータス あるいは結果に関するコマンド補完タグを返します。</p>
	 * @param resource $result <p><code>pg_query()</code>, <code>pg_query_params()</code> あるいは <code>pg_execute()</code> から返される PostgreSQL の クエリ結果リソース。</p>
	 * @param int $type <p><code>result</code> の数値ステータスを返す <b><code>PGSQL_STATUS_LONG</code></b>、あるいは <code>result</code> のコマンドタグを返す <b><code>PGSQL_STATUS_STRING</code></b> のいずれかです。 指定しない場合は <b><code>PGSQL_STATUS_LONG</code></b> がデフォルトです。</p>
	 * @return mixed <p><b><code>PGSQL_STATUS_LONG</code></b> が指定された場合の返り値は 以下のいずれかです。 <b><code>PGSQL_EMPTY_QUERY</code></b>、 <b><code>PGSQL_COMMAND_OK</code></b>、<b><code>PGSQL_TUPLES_OK</code></b>、<b><code>PGSQL_COPY_OUT</code></b>、 <b><code>PGSQL_COPY_IN</code></b>、<b><code>PGSQL_BAD_RESPONSE</code></b>、<b><code>PGSQL_NONFATAL_ERROR</code></b> および <b><code>PGSQL_FATAL_ERROR</code></b> 。 それ以外の場合は、PostgreSQL コマンドタグを含む文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-result-status.php
	 * @see pg_connection_status()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_result_status($result, int $type = PGSQL_STATUS_LONG) {}

	/**
	 * レコードを選択する
	 * <p><b>pg_select()</b> は、<i>field=&gt;value</i> 形式の <i>assoc_array</i> で指定したレコードを選択します。 クエリに成功した場合、<i>assoc_array</i> で指定した条件に マッチする全てのレコードとフィールドを含む配列が返されます。</p><p><i>options</i> が指定された場合、 指定したフラグとともに <code>pg_convert()</code> が <i>assoc_array</i> に適用されます。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @param string $table_name <p>行を選択するテーブルの名前。</p>
	 * @param array $assoc_array <p>テーブル <code>table_name</code> のフィールド名をキーに、 そして取得対象となる行にマッチするデータを値にもつ配列。</p>
	 * @param int $options <p><b><code>PGSQL_CONV_FORCE_NULL</code></b>、 <b><code>PGSQL_DML_NO_CONV</code></b>、 <b><code>PGSQL_DML_ESCAPE</code></b>、 <b><code>PGSQL_DML_EXEC</code></b>、 <b><code>PGSQL_DML_ASYNC</code></b> あるいは <b><code>PGSQL_DML_STRING</code></b> の組み合わせ。 <code>options</code> の一部に <b><code>PGSQL_DML_STRING</code></b> が含まれていた場合、 クエリ文字列が返されます。 <b><code>PGSQL_DML_NO_CONV</code></b> あるいは <b><code>PGSQL_DML_ESCAPE</code></b> が設定されている場合は、内部的に <code>pg_convert()</code> を呼びません。</p>
	 * @param int $result_type
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>options</code> に <b><code>PGSQL_DML_STRING</code></b> が渡された場合は文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-select.php
	 * @see pg_convert()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_select($connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC, int $result_type = PGSQL_ASSOC) {}

	/**
	 * 指定したパラメータでプリペアドステートメントを実行するリクエストを 送信し、その結果を待たない
	 * <p>指定したパラメータでプリペアドステートメントを実行するリクエストを 送信し、その結果を待ちません。</p><p>これは <code>pg_send_query_params()</code> と似ています。 しかし、実行するコマンドは指定したクエリ文字列で決まるのではなく 事前に準備されたステートメントの名前で決まります。関数のパラメータは <code>pg_execute()</code> と同じように処理されます。 <code>pg_execute()</code> と同様に、7.4 より前のバージョンの PostgreSQL では動作しません。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param string $stmtname <p>実行するプリペアドステートメントの名前。"" が指定された場合は 無名ステートメントが実行されます。名前は、事前に <code>pg_prepare()</code>・<code>pg_send_prepare()</code> あるいは <i>PREPARE</i> SQL コマンドで準備されたものである 必要があります。</p>
	 * @param array $params <p>プリペアドステートメント中の $1、$2 などのプレースホルダを 置き換えるパラメータの配列。配列の要素数はプレースホルダの 数と一致する必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> 、失敗した場合に <b><code>FALSE</code></b> を返します。 クエリの結果を確認するには <code>pg_get_result()</code> を使用します。</p>
	 * @link https://php.net/manual/ja/function.pg-send-execute.php
	 * @see pg_prepare(), pg_send_prepare(), pg_execute()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_send_execute($connection, string $stmtname, array $params): bool {}

	/**
	 * 指定したパラメータでプリペアドステートメントを作成するリクエストを 送信し、その結果を待たない
	 * <p>指定したパラメータでプリペアドステートメントを作成するリクエストを 送信し、その結果を待ちません。</p><p>これは <code>pg_prepare()</code> の非同期バージョンです。 リクエストが受け付けられた場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。コールが成功した後、実際にプリペアドステートメントが 作成されたかどうかを調べるには <code>pg_get_result()</code> を使用します。関数のパラメータは <code>pg_prepare()</code> と同じように処理されます。<code>pg_prepare()</code> と同様、 7.4 より前の PostgreSQL のバージョンでは正しく動作しません。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param string $stmtname <p>プリペアドステートメントにつける名前。接続内で一意である必要があります。 "" が指定された場合は無名ステートメントが作成され、以前に定義された 無名ステートメントを上書きします。</p>
	 * @param string $query <p>パラメータ化した SQL 文。ひとつの文のみである必要があります （複数の文をセミコロンで区切る形式は使用できません）。パラメータを 使用する際は $1、$2 などの形式で参照されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> 、失敗した場合に <b><code>FALSE</code></b> を返します。 クエリの結果を確かめるには <code>pg_get_result()</code> を使用します。</p>
	 * @link https://php.net/manual/ja/function.pg-send-prepare.php
	 * @see pg_connect(), pg_pconnect(), pg_execute(), pg_send_execute(), pg_send_query_params()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_send_prepare($connection, string $stmtname, string $query): bool {}

	/**
	 * 非同期クエリを送信する
	 * <p><b>pg_send_query()</b> は、<code>connection</code> に非同期クエリを送信します。<code>pg_query()</code> とは異なり、 PostgreSQL へ一度に複数のクエリを送信することができ、 <code>pg_get_result()</code> を用いて結果を一つずつ取得することが可能です。</p><p>スクリプトの実行は、クエリを実行中もブロックされません。 接続がビジーである(すなわち、クエリが実行中である)ことを調べるには、 <code>pg_connection_busy()</code> を使用してください。 クエリは、<code>pg_cancel_query()</code> をコールすることによりキャンセルすることが可能です。</p><p>ユーザーは複数のクエリを一度に送信することができますが、 複数のクエリをビジー状態の接続に送信することはできません。 クエリがビジー状態の接続に送信された場合、 最後のクエリが終了するまで待ち、全ての結果は破棄されます。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。</p>
	 * @param string $query <p>実行するひとつまたは複数の SQL 文。</p> <p>クエリ内のデータは 適切にエスケープ する必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>クエリの結果を利用するには <code>pg_get_result()</code> を使用します。</p>
	 * @link https://php.net/manual/ja/function.pg-send-query.php
	 * @see pg_query(), pg_cancel_query(), pg_get_result(), pg_connection_busy()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pg_send_query($connection, string $query): bool {}

	/**
	 * コマンドとパラメータを分割してサーバーに送信し、その結果を待たない
	 * <p>コマンドとパラメータを分割してサーバーに送信します。その結果を待つことは しません。</p><p>これは <code>pg_send_query()</code> とほぼ同じですが、パラメータが <code>query</code> とは別に分かれている点が違います。 関数のパラメータは、<code>pg_query_params()</code> によって 完全に制御されます。<code>pg_query_params()</code> と同様、 7.4 より前の PostgreSQL では動作しません。またクエリ文字列には ひとつのコマンドのみを含めることができます。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @param string $query <p>パラメータ化した SQL 文。ひとつの文のみである必要があります （複数の文をセミコロンで区切る形式は使用できません）。パラメータを 使用する際は $1、$2 などの形式で参照されます。</p>
	 * @param array $params <p>プリペアドステートメント中の $1、$2 などのプレースホルダを 置き換えるパラメータの配列。配列の要素数はプレースホルダの 数と一致する必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>クエリの結果を判断するには <code>pg_get_result()</code> を使用します。</p>
	 * @link https://php.net/manual/ja/function.pg-send-query-params.php
	 * @see pg_send_query()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_send_query_params($connection, string $query, array $params): bool {}

	/**
	 * クライアントのエンコーディングを設定する
	 * <p><b>pg_set_client_encoding()</b> はクライアントの エンコーディングを設定し、成功した場合に 0、エラー時に -1 を 返します。</p><p>PostgreSQL は、バックエンドのデータベースエンコーディングを自動的に フロントエンドのエンコーディングに変換します。</p><p><b>注意</b>:</p><p>この関数は、以前は <b>pg_setclientencoding()</b> と呼ばれていました。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param string $encoding <p>クライアントエンコーディング。以下のうちのひとつです。<i>SQL_ASCII</i>、<i>EUC_JP</i>、 <i>EUC_CN</i>、<i>EUC_KR</i>、<i>EUC_TW</i>、 <i>UNICODE</i>、<i>MULE_INTERNAL</i>、<i>LATINX</i> (X=1...9)、 <i>KOI8</i>、<i>WIN</i>、<i>ALT</i>、<i>SJIS</i>、 <i>BIG5</i> あるいは <i>WIN1250</i> 。</p> <p>利用可能なエンコーディングの完全なリストは、使用している PostgreSQL のバージョンに依存します。詳細な情報については PostgreSQL のマニュアルを 参照ください。</p>
	 * @return int <p>成功した場合に 0 、エラー時に -1 を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-set-client-encoding.php
	 * @see pg_client_encoding()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function pg_set_client_encoding($connection = NULL, string $encoding): int {}

	/**
	 * pg_last_error() および pg_result_error() が返すメッセージの詳細度を指定する
	 * <p><code>pg_last_error()</code> および <code>pg_result_error()</code> が返すメッセージの詳細度を指定します。</p><p><b>pg_set_error_verbosity()</b> は詳細度を設定し、その接続の これまでの設定を返します。<b><code>PGSQL_ERRORS_TERSE</code></b> モードでは、返されるメッセージは深刻度・概要 および 発生位置のみです。 これはたいていの場合 1 行に収まります。デフォルトのモード （<b><code>PGSQL_ERRORS_DEFAULT</code></b>）では、それに加えて何らかの 詳細情報・ヒントあるいは状況フィールドを含みます（これらは複数行に またがる可能性があります）。<b><code>PGSQL_ERRORS_VERBOSE</code></b> モードは、有効なフィールドをすべて含みます。詳細度の設定変更内容は それ以降に新しく作成した結果オブジェクトにのみ反映され、既存の 結果オブジェクトには影響を与えません。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @param int $verbosity <p>指定する詳細度。<b><code>PGSQL_ERRORS_TERSE</code></b>、 <b><code>PGSQL_ERRORS_DEFAULT</code></b> あるいは <b><code>PGSQL_ERRORS_VERBOSE</code></b> 。</p>
	 * @return int <p>変更前の詳細度レベル。<b><code>PGSQL_ERRORS_TERSE</code></b>、 <b><code>PGSQL_ERRORS_DEFAULT</code></b> あるいは <b><code>PGSQL_ERRORS_VERBOSE</code></b> のいずれかを 返します。</p>
	 * @link https://php.net/manual/ja/function.pg-set-error-verbosity.php
	 * @see pg_last_error(), pg_result_error()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_set_error_verbosity($connection = NULL, int $verbosity): int {}

	/**
	 * Get a read only handle to the socket underlying a PostgreSQL connection
	 * <p><b>pg_socket()</b> returns a read only <code>resource</code> corresponding to the socket underlying the given PostgreSQL connection.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $connection <p>PostgreSQL database connection resource.</p>
	 * @return resource <p>A socket resource on success失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.pg-socket.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function pg_socket($connection) {}

	/**
	 * PostgreSQL 接続のトレースを有効にする
	 * <p><b>pg_trace()</b> は、PostgreSQL フロントエンド/ バックエンド間の通信をデバック用のファイルにトレースすることを有効にします。 このトレース結果を完全に理解するためには、PostgreSQL 通信プロトコルの詳細に 精通している必要があります。</p><p>そうでない人にとっても、サーバーに送られたクエリのエラーを トレースすることは有用です。試しに <b>grep '^To backend' trace.log</b> を実行し、実際に PostgreSQL サーバーに送信される クエリを見てみるとよいでしょう。詳細な情報は » PostgreSQL ドキュメントを 参照ください。</p>
	 * @param string $pathname <p>トレースログを書き込むファイルの名前（フルパスを含む）。 <code>fopen()</code> と同じ。</p>
	 * @param string $mode <p>オプションのファイルアクセスモード。<code>fopen()</code> と同じです。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-trace.php
	 * @see fopen(), pg_untrace()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function pg_trace(string $pathname, string $mode = "w", $connection = NULL): bool {}

	/**
	 * サーバー上で実行中のトランザクションの状態を返す
	 * <p>サーバー上で実行中のトランザクションの状態を返します。</p><p>PostgreSQL 7.3 サーバーで <i>autocommit</i> を off に 設定している場合、<b>pg_transaction_status()</b> は 不正確な値を返します。サーバー側での自動コミット機能は非推奨と されており、最近のバージョンのサーバーでは存在しません。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @return int <p><b><code>PGSQL_TRANSACTION_IDLE</code></b>（アイドル状態）、 <b><code>PGSQL_TRANSACTION_ACTIVE</code></b>（コマンドの実行中）、 <b><code>PGSQL_TRANSACTION_INTRANS</code></b>（正常なトランザクション内でアイドル状態）、 あるいは <b><code>PGSQL_TRANSACTION_INERROR</code></b>（失敗したトランザクション内でアイドル状態） のいずれかを返します。 接続が異常な場合は <b><code>PGSQL_TRANSACTION_UNKNOWN</code></b> を返します。 <b><code>PGSQL_TRANSACTION_ACTIVE</code></b> が返されるのは、クエリを サーバーに送信した後まだそれが完了していない場合のみです。</p>
	 * @link https://php.net/manual/ja/function.pg-transaction-status.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function pg_transaction_status($connection): int {}

	/**
	 * 接続に関する TTY 名を返す
	 * <p><b>pg_tty()</b> は、指定した PostgreSQL <code>connection</code> リソースで、サーバー側のデバッグ出力が 送られる tty 名を返します。</p><p><b>注意</b>:</p><p><b>pg_tty()</b> は現在は使用されません。今はサーバーが TTY 設定を気にする必要がないからです。しかし、過去との互換性を 保持するためにこの関数は残されています。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return string <p><code>connection</code> のデバッグ TTY を文字列で返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-tty.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function pg_tty($connection = NULL): string {}

	/**
	 * bytea 型のバイナリをアンエスケープする
	 * <p><b>pg_unescape_bytea()</b> は、bytea 型のデータ文字列を アンエスケープし、エスケープしていない文字列、 場合によってはバイナリデータを返します。</p><p><b>注意</b>:</p><p>bytea 型を <i>SELECT</i> した場合、PostgreSQL は '\' で 始まる 8 進数のバイト値（例: \032）を返します。これをユーザーが手動で コンバートすることを期待されています。</p><p>この関数は PostgreSQL 7.2 以降のバージョンを必要とします。PostgreSQL 7.2.0 および 7.2.1 では、マルチバイトのサポートを有効にした場合は bytea の値をキャストする必要があります。例: <i>INSERT INTO test_table (image) VALUES ('$image_escaped'::bytea); </i> PostgreSQL 7.2.2 以降ではキャストする必要はありません。 クライアントとバックエンドの文字エンコーディングが一致しない場合は 例外で、この場合はマルチバイトストリームエラーが発生します。この エラーを避けるためには bytea 型へのキャストが必要になります。</p>
	 * @param string $data <p>PHP のバイナリ文字列に変換される PostgreSQL の bytea データを含む 文字列。</p>
	 * @return string <p>アンエスケープされたデータを文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.pg-unescape-bytea.php
	 * @see pg_escape_bytea(), pg_escape_string()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_unescape_bytea(string $data): string {}

	/**
	 * PostgreSQL 接続のトレースを無効にする
	 * <p><code>pg_trace()</code> で開始したトレースを停止します。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
	 * @link https://php.net/manual/ja/function.pg-untrace.php
	 * @see pg_trace()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function pg_untrace($connection = NULL): bool {}

	/**
	 * テーブルを更新する
	 * <p><b>pg_update()</b> は、<i>data</i> に関して <i>condition</i> にマッチするレコードを更新します。 <i>options</i> が指定された場合、指定したオプションとともに <code>pg_convert()</code> が <i>data</i> に適用されます。</p>
	 * @param resource $connection <p>PostgreSQL データベースの接続リソース。</p>
	 * @param string $table_name <p>行を更新するテーブルの名前。</p>
	 * @param array $data <p>テーブル <code>table_name</code> のフィールド名をキーに、 そしてマッチした対象を更新するデータを値にもつ配列。</p>
	 * @param array $condition <p>テーブル <code>table_name</code> のフィールド名をキーに、 そして取得対象となる行にマッチするデータを値にもつ配列。</p>
	 * @param int $options <p><b><code>PGSQL_CONV_FORCE_NULL</code></b>、 <b><code>PGSQL_DML_NO_CONV</code></b>、 <b><code>PGSQL_DML_ESCAPE</code></b>、 <b><code>PGSQL_DML_EXEC</code></b>、 <b><code>PGSQL_DML_ASYNC</code></b> あるいは <b><code>PGSQL_DML_STRING</code></b> の組み合わせ。 <code>options</code> の一部に <b><code>PGSQL_DML_STRING</code></b> が含まれていた場合、 クエリ文字列が返されます。 <b><code>PGSQL_DML_NO_CONV</code></b> あるいは <b><code>PGSQL_DML_ESCAPE</code></b> が設定されている場合は、内部的に <code>pg_convert()</code> を呼びません。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>options</code> に <b><code>PGSQL_DML_STRING</code></b> が渡された場合は文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-update.php
	 * @see pg_convert()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pg_update($connection, string $table_name, array $data, array $condition, int $options = PGSQL_DML_EXEC) {}

	/**
	 * クライアント・プロトコル・サーバーのバージョンを配列で返す
	 * <p><b>pg_version()</b> はクライアント・プロトコル およびサーバーのバージョンを配列で返します。プロトコルおよびサーバーの バージョンは、PHP が PostgreSQL 7.4 以降とともにコンパイルされている 場合のみ有効です。</p><p>詳細なサーバー情報を取得するには <code>pg_parameter_status()</code> を参照ください。</p>
	 * @param resource $connection <p>PostgreSQL データベース接続リソース。<code>connection</code> が指定されていない場合はデフォルトの接続が使用されます。 デフォルトの接続は、直近の <code>pg_connect()</code> あるいは <code>pg_pconnect()</code> によって作成されたものです。</p>
	 * @return array <p><i>client</i>, <i>protocol</i> および <i>server</i> のキーとその値を持つ配列を 返します（有効な場合）。エラー時や接続が正常でない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pg-version.php
	 * @see pg_parameter_status()
	 * @since PHP 5, PHP 7
	 */
	function pg_version($connection = NULL): array {}

	/**
	 * <code>pg_fetch_array()</code> に渡します。 フィールド名と値の連想配列を返します。
	 */
	define('PGSQL_ASSOC', null);

	/**
	 * <code>pg_result_status()</code> から返されます。 サーバーからの応答を判別できませんでした。
	 */
	define('PGSQL_BAD_RESPONSE', null);

	/**
	 * <code>pg_fetch_array()</code> に渡します。 フィールド値の配列を、数値添字（フィールド番号で）と 連想配列（フィールド名で）の両方で返します。
	 */
	define('PGSQL_BOTH', null);

	/**
	 * <code>pg_result_status()</code> から返されます。 コマンドは正常に終了し、何もデータを返しませんでした。
	 */
	define('PGSQL_COMMAND_OK', null);

	/**
	 * <code>pg_connect()</code> に渡し、非同期接続を確立させます。 PHP 5.6.0 で追加されました。
	 */
	define('PGSQL_CONNECT_ASYNC', null);

	/**
	 * <code>pg_connect()</code> に渡し、既存の同一接続を無視して 新しい接続を確立させるようにします。
	 */
	define('PGSQL_CONNECT_FORCE_NEW', null);

	/**
	 * <code>pg_connection_status()</code> から返され、データベースとの 接続が不正な状態になっていることを示します。
	 */
	define('PGSQL_CONNECTION_BAD', null);

	/**
	 * <code>pg_connection_status()</code> から返され、データベースとの 接続が正常であることを示します。
	 */
	define('PGSQL_CONNECTION_OK', null);

	/**
	 * <code>pg_convert()</code> に渡します。 空文字列に対して、SQL の <i>NULL</i> を使用します。
	 */
	define('PGSQL_CONV_FORCE_NULL', null);

	/**
	 * <code>pg_convert()</code> に渡します。 変換時に、テーブルのデフォルト値を無視します。
	 */
	define('PGSQL_CONV_IGNORE_DEFAULT', null);

	/**
	 * <code>pg_convert()</code> に渡します。 <b><code>NULL</code></b> を SQL の <i>NOT NULL</i> に変換しないように します。
	 */
	define('PGSQL_CONV_IGNORE_NOT_NULL', null);

	/**
	 * <code>pg_result_status()</code> から返されます。 （サーバーへの）データのコピーが始まりました。
	 */
	define('PGSQL_COPY_IN', null);

	/**
	 * <code>pg_result_status()</code> から返されます。 （サーバーからの）データのコピーが始まりました。
	 */
	define('PGSQL_COPY_OUT', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 エラーが発生した状況を指定します。現在ここに含まれているのは、 アクティブなプロシージャの関数や内部生成クエリのコール履歴です。 これはエントリごとに 1 行のデータとなっており、直近のデータが 先頭にきます。
	 */
	define('PGSQL_DIAG_CONTEXT', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 <b><code>PG_DIAG_STATEMENT_POSITION</code></b> と同じ定義ですが、 こちらはカーソル位置が内部で生成されたコマンドを参照している場合に 使用されます。このフィールドが存在する場合は、常に <b><code>PG_DIAG_INTERNAL_QUERY</code></b> フィールドも存在します。
	 */
	define('PGSQL_DIAG_INTERNAL_POSITION', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 失敗した内部生成コマンドのテキストです。例としては、PL/pgSQL 関数で 発行された SQL クエリなどがあてはまります。
	 */
	define('PGSQL_DIAG_INTERNAL_QUERY', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 オプションの 2 番目のエラーメッセージで、問題に対する詳細な情報を 含みます。複数行にまたがることもあります。
	 */
	define('PGSQL_DIAG_MESSAGE_DETAIL', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 オプションのメッセージで、問題に対してどのように対応すべきかを指摘 します。エラーの詳細情報と違う点は、発生した事実ではなくアドバイス （時に不適切な場合もある）をするところです。複数行にまたがることも あります。
	 */
	define('PGSQL_DIAG_MESSAGE_HINT', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 人間が判読できる最初のエラーメッセージ（たいてい 1 行）です。常に存在します。
	 */
	define('PGSQL_DIAG_MESSAGE_PRIMARY', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 深刻度です。その内容は <i>ERROR</i>、 <i>FATAL</i>、あるいは <i>PANIC</i> （エラーメッセージ内）、あるいは <i>WARNING</i>、 <i>NOTICE</i>、<i>DEBUG</i>、 <i>INFO</i>、あるいは <i>LOG</i> （通知メッセージ内）、あるいはこれらの各国語版のうちのどれかです。 常に存在します。
	 */
	define('PGSQL_DIAG_SEVERITY', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 エラーが報告された箇所の、PostgreSQL ソースコードでのファイル名です。
	 */
	define('PGSQL_DIAG_SOURCE_FILE', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 エラーが報告された箇所の、PostgreSQL ソースコードでの関数名です。
	 */
	define('PGSQL_DIAG_SOURCE_FUNCTION', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 エラーが報告された箇所の、PostgreSQL ソースコードでの行番号です。
	 */
	define('PGSQL_DIAG_SOURCE_LINE', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 エラーの SQLSTATE コードです。SQLSTATE コードは発生したエラーの種別を 特定します。これは、データベースエラーに対してフロントエンドの アプリケーションが適切な操作（エラー処理など）をできるようにするために 使用されます。このフィールドはローカライズされていません。また、 常に存在します。
	 */
	define('PGSQL_DIAG_SQLSTATE', null);

	/**
	 * <code>pg_result_error_field()</code> に渡します。 エラーカーソルの位置を、もとのステートメント中の位置として表す 整数値を保持する文字列です。 最初の文字の位置は 1 で、それ以降（バイト数ではなく）文字数で 位置を数えます。
	 */
	define('PGSQL_DIAG_STATEMENT_POSITION', null);

	/**
	 * <code>pg_insert()</code> や <code>pg_select()</code>、 <code>pg_update()</code>、<code>pg_delete()</code> に渡します。 これらの関数を使って、非同期クエリを実行します。
	 */
	define('PGSQL_DML_ASYNC', null);

	/**
	 * <code>pg_insert()</code> や <code>pg_select()</code>、 <code>pg_update()</code>、<code>pg_delete()</code> に渡します。 内部的に <code>pg_convert()</code> を呼ぶ代わりに、すべてのパラメータをエスケープします。 このオプションは、メタデータのルックアップを除外します。 <code>pg_query()</code> や <code>pg_send_query()</code> と同程度の速度になります。
	 */
	define('PGSQL_DML_ESCAPE', null);

	/**
	 * <code>pg_insert()</code> や <code>pg_select()</code>、 <code>pg_update()</code>、<code>pg_delete()</code> に渡します。 これらの関数を使って、クエリを実行します。
	 */
	define('PGSQL_DML_EXEC', null);

	/**
	 * <code>pg_insert()</code> や <code>pg_select()</code>、 <code>pg_update()</code>、<code>pg_delete()</code> に渡します。 すべてのパラメータを、そのままの形式で渡します。ユーザーから受け取ったデータを渡す際には、手動でのエスケープが必要になります。 <code>pg_escape_string()</code> を使いましょう。
	 */
	define('PGSQL_DML_NO_CONV', null);

	/**
	 * <code>pg_insert()</code> や <code>pg_select()</code>、 <code>pg_update()</code>、<code>pg_delete()</code> に渡します。 実行したクエリ文字列を返します。
	 */
	define('PGSQL_DML_STRING', null);

	/**
	 * <code>pg_result_status()</code> から返されます。 サーバーに送信された文字列が空でした。
	 */
	define('PGSQL_EMPTY_QUERY', null);

	/**
	 * <code>pg_set_error_verbosity()</code> に渡します。 デフォルトで返されるメッセージで、上の内容に加えて詳細・ ヒントあるいは詳細情報を含めます（複数行にまたがるかもしれません）。
	 */
	define('PGSQL_ERRORS_DEFAULT', null);

	/**
	 * <code>pg_set_error_verbosity()</code> に渡します。 返されるメッセージを指定します。ここには深刻度・短い説明および 発生位置のみを含めます。通常は 1 行に収まるでしょう。
	 */
	define('PGSQL_ERRORS_TERSE', null);

	/**
	 * <code>pg_set_error_verbosity()</code> に渡します。 詳細モードでのメッセージで、有効なフィールドをすべて含めます。
	 */
	define('PGSQL_ERRORS_VERBOSE', null);

	/**
	 * <code>pg_result_status()</code> から返されます。 致命的なエラーが発生しました。
	 */
	define('PGSQL_FATAL_ERROR', null);

	/**
	 * 短い形式の libpq バージョン情報。数字とドットだけの形式です。
	 */
	define('PGSQL_LIBPQ_VERSION', null);

	/**
	 * 長い形式の libpq バージョン情報。コンパイラの情報も含めます。
	 */
	define('PGSQL_LIBPQ_VERSION_STR', null);

	/**
	 * <code>pg_result_status()</code> から返されます。 致命的ではないエラー（通知や警告など）が発生しました。
	 */
	define('PGSQL_NONFATAL_ERROR', null);

	/**
	 * <code>pg_last_notice()</code> で使用されます。 PHP 7.1.0 以降で使用可能です。
	 */
	define('PGSQL_NOTICE_ALL', null);

	/**
	 * <code>pg_last_notice()</code> で使用されます。 PHP 7.1.0 以降で使用可能です。
	 */
	define('PGSQL_NOTICE_CLEAR', null);

	/**
	 * <code>pg_last_notice()</code> で使用されます。 PHP 7.1.0 以降で使用可能です。
	 */
	define('PGSQL_NOTICE_LAST', null);

	/**
	 * <code>pg_fetch_array()</code> に渡します。 フィールド番号と値の数値添字配列を返します。
	 */
	define('PGSQL_NUM', null);

	/**
	 * <code>pg_connect_poll()</code> が返す値です。 接続が、現在アクティブであることを示します。
	 */
	define('PGSQL_POLLING_ACTIVE', null);

	/**
	 * <code>pg_connect_poll()</code> が返す値です。 接続の試行に失敗したことを示します。
	 */
	define('PGSQL_POLLING_FAILED', null);

	/**
	 * <code>pg_connect_poll()</code> が返す値です。 接続が、利用可能になったことを示します。
	 */
	define('PGSQL_POLLING_OK', null);

	/**
	 * <code>pg_connect_poll()</code> が返す値です。 接続が、PostgreSQL のソケットが読み込み可能になるのを待っていることを示します。
	 */
	define('PGSQL_POLLING_READING', null);

	/**
	 * <code>pg_connect_poll()</code> が返す値です。 接続が、PostgreSQL のソケットが書き込み可能になるのを待っていることを示します。
	 */
	define('PGSQL_POLLING_WRITING', null);

	/**
	 * <code>pg_lo_seek()</code> に渡します。シーク操作は カレントの位置から始められます。
	 */
	define('PGSQL_SEEK_CUR', null);

	/**
	 * <code>pg_lo_seek()</code> に渡します。シーク操作は オブジェクトの最後から始められます。
	 */
	define('PGSQL_SEEK_END', null);

	/**
	 * <code>pg_lo_seek()</code> に渡します。シーク操作は オブジェクトの先頭から始められます。
	 */
	define('PGSQL_SEEK_SET', null);

	/**
	 * <code>pg_result_status()</code> に渡します。 結果として数値が要求されていることを示します。
	 */
	define('PGSQL_STATUS_LONG', null);

	/**
	 * <code>pg_result_status()</code> に渡します。 結果としてテキストのコマンドタグが要求されていることを示します。
	 */
	define('PGSQL_STATUS_STRING', null);

	/**
	 * <code>pg_transaction_status()</code> から返されます。 接続内でコマンドを実行中です。クエリが接続を通じて送信され、 まだ完了していません。
	 */
	define('PGSQL_TRANSACTION_ACTIVE', null);

	/**
	 * <code>pg_transaction_status()</code> から返されます。 接続は現在アイドル状態で、トランザクション内ではありません。
	 */
	define('PGSQL_TRANSACTION_IDLE', null);

	/**
	 * <code>pg_transaction_status()</code> から返されます。 接続は現在アイドル状態で、トランザクション処理に失敗しています。
	 */
	define('PGSQL_TRANSACTION_INERROR', null);

	/**
	 * <code>pg_transaction_status()</code> から返されます。 接続は現在アイドル状態で、トランザクションブロック内にあります。
	 */
	define('PGSQL_TRANSACTION_INTRANS', null);

	/**
	 * <code>pg_transaction_status()</code> から返されます。 接続が正常ではありません。
	 */
	define('PGSQL_TRANSACTION_UNKNOWN', null);

	/**
	 * <code>pg_result_status()</code> から返されます。 コマンドは正常に終了し、データを返しました （<i>SELECT</i> や <i>SHOW</i> など）。
	 */
	define('PGSQL_TUPLES_OK', null);

}
