<?php



namespace {

	/**
	 * データベース接続の AUTOCOMMIT の状態を取得または設定する
	 * <p>指定した接続リソースについての AUTOCOMMIT の状態を設定あるいは取得します。</p>
	 * @param resource $connection <p><code>db2_connect()</code> あるいは <code>db2_pconnect()</code> が返した有効なデータベース接続リソース。</p>
	 * @param bool $value <p>以下の定数のいずれか。</p>  <i>DB2_AUTOCOMMIT_OFF</i>   <p>AUTOCOMMIT を無効にします。</p>   <i>DB2_AUTOCOMMIT_ON</i>   <p>AUTOCOMMIT を有効にします。</p>
	 * @return mixed <p><b>db2_autocommit()</b> に <code>connection</code> パラメータのみを渡した場合、 指定した接続の AUTOCOMMIT の状態を整数値で返します。 <b><code>DB2_AUTOCOMMIT_OFF</code></b> の場合は無効、 <b><code>DB2_AUTOCOMMIT_ON</code></b> の場合は有効です。</p><p><b>db2_autocommit()</b> に <code>connection</code> および <code>autocommit</code> の両方のパラメータを渡した場合、 指定した接続の AUTOCOMMIT を対応する状態に設定します。 成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-autocommit.php
	 * @see db2_connect(), db2_pconnect()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_autocommit($connection, bool $value = NULL) {}

	/**
	 * PHP 変数を SQL 文のパラメータにバインドする
	 * <p><code>db2_prepare()</code> が返したステートメントリソース内の SQL 文のパラメータに PHP 変数をバインドします。 <code>db2_execute()</code> へのオプション配列の一部として 変数を渡すのに比べ、この関数を使用すると パラメータの型、データの型、精度、位取りなどの詳細を制御できるようになります。</p>
	 * @param resource $stmt <p><code>db2_prepare()</code> が返すプリペアドステートメント。</p>
	 * @param int $parameter_number <p>プリペアドステートメントのパラメータの位置。 1 から始まります。</p>
	 * @param string $variable_name <p><code>parameter_number</code> で指定したパラメータに バインドする PHP 変数の名前を表す文字列。</p>
	 * @param int $parameter_type <p>PHP 変数を SQL パラメータにバインドする際に 入力パラメータとするのか (<i>DB2_PARAM_IN</i>) 出力パラメータとするのか (<i>DB2_PARAM_OUT</i>) あるいは入出力両方を許可するのか (<i>DB2_PARAM_INOUT</i>) を指定する定数。 メモリのオーバーヘッドを避けるため、<i>DB2_PARAM_FILE</i> を指定して PHP 変数をファイルにバインドし、 ファイルからラージオブジェクト (BLOB、CLOB あるいは DBCLOB) データを読み込むようにするすることも可能です。</p>
	 * @param int $data_type <p>PHP 変数をどの SQL データ型にバインドするのかを指定する定数。 <i>DB2_BINARY</i>、 <i>DB2_CHAR</i>、<i>DB2_DOUBLE</i> あるいは <i>DB2_LONG</i> のうちのいずれか。</p>
	 * @param int $precision <p>変数をデータベースにバインドする際の精度を指定します。 このパラメータは、ストアドプロシージャから XML 出力の値を取得する際にも使用します。 非負の値を指定すると、それがデータベースから取得する XML データの最大サイズとなります。 このパラメータを使用しない場合は、 ストアドプロシージャから XML 出力を取得する際の最大サイズを デフォルトの 1MB とみなします。</p>
	 * @param int $scale <p>変数をデータベースにバインドする際の位取りを指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-bind-param.php
	 * @see db2_execute(), db2_prepare()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_bind_param($stmt, int $parameter_number, string $variable_name, int $parameter_type = NULL, int $data_type = 0, int $precision = -1, int $scale = 0): bool {}

	/**
	 * DB2 データベースクライアントの情報をプロパティに保持するオブジェクトを返す
	 * <p>この関数は、DB2 データベースクライアントについての情報を 読み取り専用のプロパティに保持するオブジェクトを返します。 以下の表は、DB2 クライアントプロパティの一覧です。</p><p>最小限の ODBC SQL 構文をサポートします。</p><p>コア ODBC SQL をサポートします。</p><p>拡張 ODBC SQL 構文をサポートします。</p>
	 * @param resource $connection <p>アクティブな DB2 クライアント接続を指定します。</p>
	 * @return object <p>成功した場合にオブジェクト、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-client-info.php
	 * @see db2_server_info()
	 * @since PECL ibm_db2 >= 1.1.1
	 */
	function db2_client_info($connection): object {}

	/**
	 * データベース接続を閉じる
	 * <p>この関数は、<code>db2_connect()</code> で作成した DB2 クライアント接続を閉じ、データベースサーバーへのリソースを返します。</p><p><code>db2_pconnect()</code> で作成した持続的 DB2 クライアント接続を閉じようとするとその要求は無視され、 次にコールされるときまで持続的 DB2 クライアント接続はそのまま残ります。</p>
	 * @param resource $connection <p>アクティブな DB2 クライアント接続を指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-close.php
	 * @see db2_connect(), db2_pclose(), db2_pconnect()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_close($connection): bool {}

	/**
	 * テーブルのカラムおよび関連する権限情報を含む結果セットを返す
	 * <p>テーブルのカラムおよび関連する権限情報を含む結果セットを返します。</p>
	 * @param resource $connection <p>IBM DB2、Cloudscape あるいは Apache Derby データベースへの有効な接続。</p>
	 * @param string $qualifier <p>OS/390 あるいは z/OS サーバー上で稼動している DB2 データベースの修飾子。 その他のデータベースの場合には <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $schema <p>テーブルを含むスキーマ。すべてのスキーマに一致させるには、 <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $table_name <p>テーブルあるいはビューの名前。データベース内のすべてのテーブルに一致させるには、 <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $column_name <p>カラムの名前。テーブル内のすべてのカラムに一致させるには、 <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @return resource <p>指定したパラメータに一致するカラムの権限情報を含むステートメントリソースを返します。 行の内容は、以下のカラムで構成されています。</p>   カラム名 説明     TABLE_CAT  カタログの名前。テーブルがカタログを保持していない場合は NULL。    TABLE_SCHEM スキーマの名前。   TABLE_NAME テーブルあるいはビューの名前。   COLUMN_NAME カラムの名前。   GRANTOR その権限を与えたユーザーの認証 ID。   GRANTEE その権限を与えられたユーザーの認証 ID。   PRIVILEGE カラムの権限。   IS_GRANTABLE GRANTEE が、この権限を他のユーザーに与えることができるかどうか。
	 * @link https://php.net/manual/ja/function.db2-column-privileges.php
	 * @see db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_column_privileges($connection, string $qualifier = NULL, string $schema = NULL, string $table_name = NULL, string $column_name = NULL) {}

	/**
	 * テーブルのカラムおよび関連するメタデータを含む結果セットを返す
	 * <p>テーブルのカラムおよび関連するメタデータを含む結果セットを返します。</p>
	 * @param resource $connection <p>IBM DB2、Cloudscape あるいは Apache Derby データベースへの有効な接続。</p>
	 * @param string $qualifier <p>OS/390 あるいは z/OS サーバー上で稼動している DB2 データベースの修飾子。 その他のデータベースの場合には <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $schema <p>テーブルを含むスキーマ。すべてのスキーマに一致させるには、 <i>'%'</i> を渡します。</p>
	 * @param string $table_name <p>テーブルあるいはビューの名前。データベース内のすべてのテーブルに一致させるには、 <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $column_name <p>カラムの名前。テーブル内のすべてのカラムに一致させるには、 <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @return resource <p>指定したパラメータに一致するカラムの情報を含む結果セットの ステートメントリソースを返します。 行の内容は、以下のカラムで構成されています。</p>   カラム名 説明     TABLE_CAT  カタログの名前。テーブルがカタログを保持していない場合は NULL。    TABLE_SCHEM スキーマの名前。   TABLE_NAME テーブルあるいはビューの名前。   COLUMN_NAME カラムの名前。   DATA_TYPE カラムの SQL データ型を整数値で表したもの。   TYPE_NAME カラムのデータ型を文字列で表したもの。   COLUMN_SIZE カラムのサイズを表す整数値。   BUFFER_LENGTH  このカラムのデータを保存するために必要な最大のバイト数。    DECIMAL_DIGITS  カラムの位取り。位取りが適用できない場合は <b><code>NULL</code></b>。    NUM_PREC_RADIX  <i>10</i> (正確な数値データ型を表す)、 <i>2</i> (概数データ型を表す)、 あるいは <b><code>NULL</code></b> (基数が適用できないデータ型を表す) のいずれか。    NULLABLE カラムが null 値をとることができるかどうかを表す整数値。   REMARKS カラムの説明。   COLUMN_DEF カラムのデフォルト値。   SQL_DATA_TYPE カラムのサイズを表す整数値。   SQL_DATETIME_SUB  datetime 型のコードを表す整数値、 あるいはこれが適用できない SQL データ型である場合に <b><code>NULL</code></b>。    CHAR_OCTET_LENGTH  文字型のカラムにおける最大のオクテット数。 シングルバイト文字セットのデータの場合、これは COLUMN_SIZE に一致します。文字型でないカラムの場合は <b><code>NULL</code></b> となります。    ORDINAL_POSITION テーブル内でのカラムの位置を表す、1 から始まるインデックス。   IS_NULLABLE  カラムが null 値をとることができるかどうかを表す文字列。 'YES' の場合は null 値をとることができ、 'NO' の場合はできません。
	 * @link https://php.net/manual/ja/function.db2-columns.php
	 * @see db2_column_privileges(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_columns($connection, string $qualifier = NULL, string $schema = NULL, string $table_name = NULL, string $column_name = NULL) {}

	/**
	 * トランザクションをコミットする
	 * <p>指定した接続リソース上で実行中のトランザクションをコミットし、 新しいトランザクションを開始します。PHP アプリケーションのデフォルトは AUTOCOMMIT モードなので、接続リソースに対して AUTOCOMMIT を無効にしていない限り <b>db2_commit()</b> は必要ありません。</p>
	 * @param resource $connection <p><code>db2_connect()</code> あるいは <code>db2_pconnect()</code> が返した有効なデータベース接続リソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-commit.php
	 * @see db2_autocommit(), db2_rollback()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_commit($connection): bool {}

	/**
	 * 直近の接続から返された SQLSTATE を含む文字列を返す
	 * <p><b>db2_conn_error()</b> は、データベースへの直近の接続が 失敗した原因を表す SQLSTATE を返します。接続が失敗した場合には、 <code>db2_connect()</code> は <b><code>FALSE</code></b> を返します。 この場合、SQLSTATE の値を取得するために <b>db2_conn_error()</b> に何もパラメータを渡す必要はありません。</p><p>しかし、接続は成功したもののその後に無効になった場合は、 パラメータ <code>connection</code> を指定することで 特定の接続についての SQLSTATE を取得することができます。</p><p>SQLSTATE の値の意味を調べるには、DB2 コマンドラインプロセッサのプロンプトで 次のコマンドを発行します。 <b><code>db2 '&#63; <code>sqlstate-value</code>'</code></b> また、<code>db2_conn_errormsg()</code> をコールして、 明示的なエラーメッセージと、それに関連する SQLCODE の値を取得することも可能です。</p>
	 * @param resource $connection <p>当初は成功したものの、その後に無効になった接続に 関連付けられた接続リソース。</p>
	 * @return string <p>失敗した接続試行の結果を表す SQLSTATE を返します。 直近の接続試行に関連するエラーがない場合には空の文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-conn-error.php
	 * @see db2_conn_errormsg(), db2_connect(), db2_stmt_error(), db2_stmt_errormsg()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_conn_error($connection = NULL): string {}

	/**
	 * 直近の接続エラーメッセージおよび SQLCODE を返す
	 * <p><b>db2_conn_errormsg()</b> は、データベースへの直近の接続が 失敗した原因を表す SQLCODE およびエラーメッセージを返します。 接続が失敗した場合には、<code>db2_connect()</code> は <b><code>FALSE</code></b> を返します。 この場合、エラーメッセージおよび SQLSTATE の値を取得するために <b>db2_conn_errormsg()</b> に何もパラメータを渡す必要はありません。</p><p>しかし、接続は成功したもののその後に無効になった場合は、 パラメータ <code>connection</code> を指定することで 特定の接続についてのエラーメッセージおよび SQLSTATE を取得することができます。</p>
	 * @param resource $connection <p>当初は成功したものの、その後に無効になった接続に 関連付けられた接続リソース。</p>
	 * @return string <p>失敗した接続試行の結果を表すエラーメッセージおよび SQLSTATE を返します。 直近の接続試行に関連するエラーがない場合には、 <b>db2_conn_errormsg()</b> はn空の文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-conn-errormsg.php
	 * @see db2_conn_error(), db2_connect(), db2_stmt_error(), db2_stmt_errormsg()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_conn_errormsg($connection = NULL): string {}

	/**
	 * データベースへの接続を返す
	 * <p>IBM DB2 Universal Database、IBM Cloudscape あるいは Apache Derby データベースへの新しい接続を作成します。</p>
	 * @param string $database <p>データベースへのカタログ接続の場合には、<code>database</code> は DB2 クライアントカタログ内でのデータベースエイリアスを表します。</p> <p>データベースへの非カタログ接続の場合には、 <code>database</code> は以下のような形式の接続文字列を表します。</p><pre>DATABASE=<code>database</code>;HOSTNAME=<code>hostname</code>;PORT=<code>port</code>;PROTOCOL=TCPIP;UID=<code>username</code>;PWD=<code>password</code>;</pre> それぞれのパラメータは以下の内容を表します。   <code>database</code>   <p>データベースの名前。</p>   <code>hostname</code>   <p>データベースサーバーのホスト名あるいは IP アドレス。</p>   <code>port</code>   <p>データベースが要求を待ち受ける TCP/IP ポート。</p>   <code>username</code>   <p>データベースに接続するユーザー名。</p>   <code>password</code>   <p>データベースに接続するパスワード。</p>
	 * @param string $username <p>データベースに接続するユーザー名。</p> <p>カタログでない接続の場合は、<b><code>NULL</code></b> あるいは空の文字列を渡す必要があります。</p>
	 * @param string $password <p>データベースに接続するパスワード。</p> <p>カタログでない接続の場合は、<b><code>NULL</code></b> あるいは空の文字列を渡す必要があります。</p>
	 * @param array $options <p>接続の振る舞いを指定する接続オプションの連想配列。 使用可能なキーは以下のとおりです。</p>  <code>autocommit</code>   <p><i>DB2_AUTOCOMMIT_ON</i> を渡すと、 この接続ハンドルで自動コミットを有効にします。</p> <p><i>DB2_AUTOCOMMIT_OFF</i> を渡すと、 この接続ハンドルで自動コミットを無効にします。</p>   <code>DB2_ATTR_CASE</code>   <p><i>DB2_CASE_NATURAL</i> を渡すと、 カラム名の大文字小文字を変換せずに返します。</p> <p><i>DB2_CASE_LOWER</i> を渡すと、 カラム名を小文字に変換して返します。</p> <p><i>DB2_CASE_UPPER</i> を渡すと、 カラム名を大文字に変換して返します。</p>   <code>CURSOR</code>   <p><i>DB2_FORWARD_ONLY</i> を渡すと、 ステートメントリソースで前進のみのカーソルを使用します。 これはデフォルトのカーソル型であり、 すべてのデータベースサーバーでサポートされています。</p> <p><i>DB2_SCROLLABLE</i> を渡すと、 ステートメントリソースでスクロール可能なカーソルを使用します。 このモードでは結果セット内の行へのランダムアクセスが可能となりますが、 現在は IBM DB2 Universal Database でしかサポートされていません。</p>   <p>以下の新しいオプションは、ibm_db2 のバージョン 1.7.0 以降で使用可能です。</p>  <code>trustedcontext</code>   <p>DB2_TRUSTED_CONTEXT_ENABLE を渡すと、この接続ハンドルでの信頼済みコンテキストを有効にします。 このパラメータを <code>db2_set_option()</code> で設定することはできません。</p> <p>このキーは、カタログ接続の場合 (たとえローカルデータベースであっても) あるいは接続時に完全な DSN を指定した場合にのみ動作します。</p> <p>データベースをカタログするには次のコマンドを実行します。</p> <p></p> <pre>db2 catalog tcpip node loopback remote &lt;SERVERNAME&gt; server &lt;SERVICENAME&gt; db2 catalog database &lt;LOCALDBNAME&gt; as &lt;REMOTEDBNAME&gt; at node loopback db2 "update dbm cfg using svcename &lt;SERVICENAME&gt;" db2set DB2COMM=TCPIP</pre>   <p>以下の新しい i5/OS オプションは、ibm_db2 のバージョン 1.5.1 以降で使用可能です。</p>  <code>i5_lib</code>   <p>未解決のファイル参照を解決する際に使用するデフォルトのライブラリを指定します。 システムのネーミングモードを使用している接続の場合は、これは無効です。</p>   <code>i5_naming</code>   <p><i>DB2_I5_NAMING_ON</i> は、DB2 UDB CLI iSeries のシステムネーミングモードを有効にします。ファイルの識別の際、 区切り文字としてスラッシュ (/) を使用します。 識別されないファイルの解決には、ジョブのライブラリ一覧を使用します。</p> <p><i>DB2_I5_NAMING_OFF</i> は、DB2 UDB CLI のデフォルトのネーミングモード (SQL ネーミング) を無効にします。 ファイルの識別の際、区切り文字としてピリオド (.) を使用します。 識別されないファイルの解決には、 デフォルトのライブラリあるいは現在のユーザー ID を使用します。</p>   <code>i5_commit</code>   <p><code>i5_commit</code> 属性は、 <b>db2_connect()</b> の前に設定しなければなりません。 接続が確立された後にこの値が変更され、その接続がリモートデータソースに対するものだった場合は、 その接続ハンドルに対してもう一度 <b>db2_connect()</b> がコールされるまで変更は反映されません。</p>  <p><b>注意</b>:</p> <p>php.ini の設定は <code>ibm_db2.i5_allow_commit</code>==0 あるいは <i>DB2_I5_TXN_NO_COMMIT</i> がデフォルトです。 しかし、その設定よりも <code>i5_commit</code> オプションの内容のほうが優先されます。</p>  <p><i>DB2_I5_TXN_NO_COMMIT</i> - コミットの管理を使用しません。</p> <p><i>DB2_I5_TXN_READ_UNCOMMITTED</i> - ダーティリード、 反復不能読み取り、ファントムリードが発生する可能性があります。</p> <p><i>DB2_I5_TXN_READ_COMMITTED</i> - ダーティリードは発生しません。 反復不能読み取り、ファントムリードが発生する可能性があります。</p> <p><i>DB2_I5_TXN_REPEATABLE_READ</i> - ダーティリード、 反復不能読み取りは発生しません。 ファントムリードが発生する可能性があります。</p> <p><i>DB2_I5_TXN_SERIALIZABLE</i> - トランザクションの一貫性を保持します。 ダーティリード、反復不能読み取り、ファントムリードは発生しません。</p>   <code>i5_query_optimize</code>   <p><i>DB2_FIRST_IO</i> すべてのクエリは、結果の一行目をできるだけ早く返すように最適化されます。 これが有効なのは、出力の制御をユーザーが行う場合です。出力の制御とは、 たとえば、出力の最初のページを見てそこで処理を停止させるなどのことです。 OPTIMIZE FOR nnn ROWS 句を指定したクエリは、その指定が優先されます。</p> <p><i>DB2_ALL_IO</i> すべてのクエリは、結果全体をできるだけ短時間で取得できるように最適化されます。 これは、結果をファイルや帳票に書き出す場合に有用なオプションです。 あるいは出力データを順次処理するインターフェイスなどにも有用です。 OPTIMIZE FOR nnn ROWS 句を指定したクエリは、その指定が優先されます。 これはデフォルトの設定です。</p>   <code>i5_dbcs_alloc</code>   <p><i>DB2_I5_DBCS_ALLOC_ON</i> は、 DBCS トランザクションカラムサイズ用の DB2 6X アロケーションを有効にします。</p> <p><i>DB2_I5_DBCS_ALLOC_OFF</i> は、 DBCS トランザクションカラムサイズ用の DB2 6X アロケーションを無効にします。</p> <p>注意: php.ini では <code>ibm_db2.i5_dbcs_alloc</code>==0 あるいは <i>DB2_I5_DBCS_ALLOC_OFF</i> がデフォルト設定となっています。 しかし、<code>i5_dbcs_alloc</code> の値のほうが優先されます。</p>   <code>i5_date_fmt</code>   <p><i>DB2_I5_FMT_ISO</i> - 国際標準化機構 (ISO) の日付書式 yyyy-mm-dd を使用します。デフォルトです。</p> <p><i>DB2_I5_FMT_USA</i> - 合衆国の日付書式 mm/dd/yyyy を使用します。</p> <p><i>DB2_I5_FMT_EUR</i> - 欧州の日付書式 dd.mm.yyyy を使用します。</p> <p><i>DB2_I5_FMT_JIS</i> - 日本工業規格 (JIS) の日付書式 yyyy-mm-dd を使用します。</p> <p><i>DB2_I5_FMT_MDY</i> - 日付書式 mm/dd/yyyy を使用します。</p> <p><i>DB2_I5_FMT_DMY</i> - 日付書式 dd/mm/yyyy を使用します。</p> <p><i>DB2_I5_FMT_YMD</i> - 日付書式 yy/mm/dd を使用します。</p> <p><i>DB2_I5_FMT_JUL</i> - ユリウス日 yy/ddd を使用します。</p> <p><i>DB2_I5_FMT_JOB</i> - そのジョブのデフォルトを使用します。</p>   <code>i5_date_sep</code>   <p><i>DB2_I5_SEP_SLASH</i> - スラッシュ ( / ) を日付の区切り文字として使用します。 デフォルトです。</p> <p><i>DB2_I5_SEP_DASH</i> - ダッシュ ( - ) を日付の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_PERIOD</i> - ピリオド ( . ) を日付の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_COMMA</i> - カンマ ( , ) を日付の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_BLANK</i> - ブランクを日付の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_JOB</i> - そのジョブのデフォルトを使用します。</p>   <code>i5_time_fmt</code>   <p><i>DB2_I5_FMT_ISO</i> - 国際標準化機構 (ISO) の時刻書式 hh.mm.ss を使用します。デフォルトです。</p> <p><i>DB2_I5_FMT_USA</i> - 合衆国の時刻書式 hh:mmxx を使用します。xx には AM あるいは PM が入ります。</p> <p><i>DB2_I5_FMT_EUR</i> - 欧州の時刻書式 hh.mm.ss を使用します。</p> <p><i>DB2_I5_FMT_JIS</i> - 日本工業規格 (JIS) の時刻書式 hh:mm:ss を使用します。</p> <p><i>DB2_I5_FMT_HMS</i> - hh:mm:ss を使用します。</p>   <code>i5_time_sep</code>   <p><i>DB2_I5_SEP_COLON</i> - コロン ( : ) を時刻の区切り文字として使用します。 デフォルトです。</p> <p><i>DB2_I5_SEP_PERIOD</i> - ピリオド ( . ) を時刻の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_COMMA</i> - カンマ ( , ) を時刻の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_BLANK</i> - ブランクを時刻の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_JOB</i> - そのジョブのデフォルトを使用します。</p>   <code>i5_decimal_sep</code>   <p><i>DB2_I5_SEP_PERIOD</i> - ピリオド ( . ) を小数点として使用します。 デフォルトです。</p> <p><i>DB2_I5_SEP_COMMA</i> - カンマ ( , ) を小数点として使用します。</p> <p><i>DB2_I5_SEP_JOB</i> - そのジョブのデフォルトを使用します。</p>   <p>以下の新しい i5/OS オプションは、ibm_db2 のバージョン 1.8.0 以降で使用可能です。</p>  <code>i5_libl</code>   <p>ファイル参照を解決する際に用いるライブラリ一覧を表す文字。 ライブラリ一覧の項目を指定する際は、空白で区切って 'i5_libl'=&gt;"MYLIB YOURLIB ANYLIB" のようにします。</p>  <p><b>注意</b>:</p> <p><code>i5_libl</code> は qsys2/qcmdexc('cmd',cmdlen) をコールします。 これは i5/OS V5R4 以降でのみ使用可能です。</p>
	 * @return resource <p>接続に成功した場合は接続ハンドルリソースを返します。 接続に失敗した場合は、<b>db2_connect()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-connect.php
	 * @see db2_close(), db2_pconnect()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_connect(string $database, string $username, string $password, array $options = NULL) {}

	/**
	 * ステートメントリソースが使用しているカーソルの型を返す
	 * <p>ステートメントリソースが使用しているカーソルの型を返します。 使用中のカーソルが前進のみなのかスクロール可能なのかを調べるために、 これを使用します。</p>
	 * @param resource $stmt <p>有効なステートメントリソース。</p>
	 * @return int <p>ステートメントリソースが前進のみのカーソルを使用している場合に <i>DB2_FORWARD_ONLY</i>、スクロール可能なカーソルを 使用している場合に <i>DB2_SCROLLABLE</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-cursor-type.php
	 * @see db2_prepare()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_cursor_type($stmt): int {}

	/**
	 * 特定の文字をエスケープする
	 * <p>引数で指定した文字列中の特殊文字の前にバックスラッシュを追加します。</p>
	 * @param string $string_literal <p>変更すべき特殊文字を含む文字列。 <i>\x00</i>、 <i>\n</i>、<i>\r</i>、<i>\</i>、 <i>'</i>、<i>"</i> および <i>\x1a</i> について、その前にバックスラッシュを追加します。</p>
	 * @return string <p><code>string_literal</code> の中の上で挙げた文字について、 その前にバックスラッシュを追加した文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-escape-string.php
	 * @see db2_prepare()
	 * @since PECL ibm_db2 >= 1.6.0
	 */
	function db2_escape_string(string $string_literal): string {}

	/**
	 * SQL 文を直接実行する
	 * <p>SQL 文を直接実行します。</p><p>PHP 変数の内容を SQL 文に組み込みたい場合は、この関数を使用すると 典型的なセキュリティ上の問題を引き起こしかねないことを知っておきましょう。 <code>db2_prepare()</code> をコールして入力パラメータつきの SQL 文を準備することを検討してください。その後で <code>db2_execute()</code> をコールして入力値を渡すことで、 SQL インジェクション攻撃を避けることができます。</p><p>同じ SQL 文にさまざまなパラメータを指定して何度も発行する場合は、 <code>db2_prepare()</code> および <code>db2_execute()</code> の使用を検討してください。 これにより、データベースサーバーが実行計画を再利用することができて データベースアクセスの効率が向上します。</p>
	 * @param resource $connection <p><code>db2_connect()</code> あるいは <code>db2_pconnect()</code> が返した有効なデータベース接続リソース。</p>
	 * @param string $statement <p>SQL 文。パラメータマーカを含めることはできません。</p>
	 * @param array $options <p>文のオプションを含む連想配列。 データベースサーバーがその機能をサポートしている場合に、 このパラメータを使用してスクロール可能なカーソルの使用を 要求することができます。</p> <p>オプションについての説明は <code>db2_set_option()</code> を参照ください。</p>
	 * @return resource <p>SQL 文の実行に成功した場合にステートメントリソース、 SQL 文の実行に失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-exec.php
	 * @see db2_execute(), db2_prepare()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_exec($connection, string $statement, array $options = NULL) {}

	/**
	 * プリペアドステートメントを実行する
	 * <p><b>db2_execute()</b> は、 <code>db2_prepare()</code> で準備された SQL 文を実行します。</p><p>SQL 文が結果セットを返す場合、例えば SELECT 文であったり 結果セットを返すストアドプロシージャの CALL であったりした場合には、 <i>stmt</i> から結果の行を配列として取得することができます。 取得には <code>db2_fetch_assoc()</code>、 <code>db2_fetch_both()</code> あるいは <code>db2_fetch_array()</code> を使用します。 あるいは、<code>db2_fetch_row()</code> を使用して 結果セットポインタを次の行に移動させ、 <code>db2_result()</code> で行の内容をその都度取得することも可能です。</p><p><code>db2_exec()</code> の代わりに <code>db2_prepare()</code> および <b>db2_execute()</b> を使用することの利点については、 <code>db2_prepare()</code> での簡単な説明を参照ください。</p>
	 * @param resource $stmt <p><code>db2_prepare()</code> が返すプリペアドステートメント。</p>
	 * @param array $parameters <p>プリペアドステートメント内に含まれるパラメータマーカに対応する、 入力パラメータの配列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-execute.php
	 * @see db2_exec(), db2_fetch_array(), db2_fetch_assoc(), db2_fetch_both(), db2_fetch_row(), db2_prepare(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_execute($stmt, array $parameters = NULL): bool {}

	/**
	 * 結果セット内の行を表す、カラム位置をインデックスとする配列を返す
	 * <p>結果セット内の行を表す、カラム位置をインデックスとする配列を返します。 インデックスは 0 から始まります。</p>
	 * @param resource $stmt <p>結果セットを含む有効な <i>stmt</i> リソース。</p>
	 * @param int $row_number <p>結果セット内の 1 から始まる行番号を指定します。 結果セットで前進のみのカーソルを使用している場合にこのパラメータを渡すと、 PHP の警告が発生します。</p>
	 * @return array <p>結果セットの次の行あるいは要求した行のデータを表す配列を返します。 配列の 0 から始まるインデックスが、カラムの位置を表します。 結果セットに行がもうない場合、あるいは <code>row_number</code> で指定された行が結果セットに存在しない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-fetch-array.php
	 * @see db2_fetch_assoc(), db2_fetch_both(), db2_fetch_object(), db2_fetch_row(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.1
	 */
	function db2_fetch_array($stmt, int $row_number = -1): array {}

	/**
	 * 結果セット内の行を表す、カラム名をインデックスとする配列を返す
	 * <p>結果セット内の行を表す、カラム名をインデックスとする配列を返します。</p>
	 * @param resource $stmt <p>結果セットを含む有効な <i>stmt</i> リソース。</p>
	 * @param int $row_number <p>結果セット内の 1 から始まる行番号を指定します。 結果セットで前進のみのカーソルを使用している場合にこのパラメータを渡すと、 PHP の警告が発生します。</p>
	 * @return array <p>結果セットの次の行あるいは要求した行のデータを表す、 カラム名をインデックスとした連想配列を返します。 結果セットに行がもうない場合、あるいは <code>row_number</code> で指定された行が結果セットに存在しない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-fetch-assoc.php
	 * @see db2_fetch_array(), db2_fetch_both(), db2_fetch_object(), db2_fetch_row(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_fetch_assoc($stmt, int $row_number = -1): array {}

	/**
	 * 結果セット内の行を表す、 カラム位置およびカラム名の両方をインデックスとする配列を返す
	 * <p>結果セット内の行を表す、 カラム位置およびカラム名の両方をインデックスとする配列を返します。 <b>db2_fetch_both()</b> が返す行は、 一種類のインデックスしか返さない <code>db2_fetch_assoc()</code> あるいは <code>db2_fetch_array()</code> よりもメモリを消費することに注意しましょう。</p>
	 * @param resource $stmt <p>結果セットを含む有効な <i>stmt</i> リソース。</p>
	 * @param int $row_number <p>結果セット内の 1 から始まる行番号を指定します。 結果セットで前進のみのカーソルを使用している場合にこのパラメータを渡すと、 PHP の警告が発生します。</p>
	 * @return array <p>結果セットの次の行あるいは要求した行のデータを表す、 カラム名および (0 から始まる) カラム番号の両方をインデックスとした連想配列を返します。 結果セットに行がもうない場合、あるいは <code>row_number</code> で指定された行が結果セットに存在しない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-fetch-both.php
	 * @see db2_fetch_array(), db2_fetch_assoc(), db2_fetch_object(), db2_fetch_row(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_fetch_both($stmt, int $row_number = -1): array {}

	/**
	 * 結果セット内の行を表す、カラムをプロパティとするオブジェクトを返す
	 * <p>結果セット内の行を表す、カラムをプロパティとするオブジェクトを返します。</p>
	 * @param resource $stmt <p>結果セットを含む有効な <i>stmt</i> リソース。</p>
	 * @param int $row_number <p>結果セット内の 1 から始まる行番号を指定します。 結果セットで前進のみのカーソルを使用している場合にこのパラメータを渡すと、 PHP の警告が発生します。</p>
	 * @return object <p>結果セット内の行を表すオブジェクトを返します。 オブジェクトのプロパティが、結果セット内のカラム名に対応します。</p><p>IBM DB2、Cloudscape および Apache Derby データベースサーバーは、 通常はカラム名を大文字として扱います。そのため、 オブジェクトのプロパティも同じようになります。</p><p>SELECT 文の中でスカラ関数をコールすることでカラムの値を変更している場合、 データベースサーバーは、そのカラムの名前としてカラム番号を返します。 もし何らかの意味のある名前をオブジェクトのプロパティとして使用したいのなら、 AS 句を使用して結果セット内のカラムに名前を割り当てる必要があります。</p><p>行が取得されなかった場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-fetch-object.php
	 * @see db2_fetch_array(), db2_fetch_assoc(), db2_fetch_both(), db2_fetch_row(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_fetch_object($stmt, int $row_number = -1): object {}

	/**
	 * 結果セットポインタを次の行あるいは要求された行に設定する
	 * <p><b>db2_fetch_row()</b> を使用して結果セットを順に処理します。 あるいは、スクロール可能なカーソルを使用している場合は 指定した行を指すようにします。</p><p>結果セットから個々のフィールドを取得するには <code>db2_result()</code> 関数をコールします。</p><p><b>db2_fetch_row()</b> および <code>db2_result()</code> をコールするのではなく、 ほとんどのアプリケーションでは <code>db2_fetch_assoc()</code>、<code>db2_fetch_both()</code>、 および <code>db2_fetch_array()</code> のいずれかをコールするでしょう。 これらは、結果セットのポインタを前に進めたうえで行の内容を配列として取得します。</p>
	 * @param resource $stmt <p>有効な <i>stmt</i> リソース。</p>
	 * @param int $row_number <p>スクロール可能なカーソルの場合に、結果セットの行番号を指定します。 行番号は 1 から始まります。</p>
	 * @return bool <p>結果セットに指定した行が存在する場合に <b><code>TRUE</code></b>、存在しない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-fetch-row.php
	 * @see db2_fetch_array(), db2_fetch_assoc(), db2_fetch_both(), db2_fetch_object(), db2_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_fetch_row($stmt, int $row_number = NULL): bool {}

	/**
	 * カラムを表示するために必要な最大のバイト数を返す
	 * <p>結果セット内のカラムを表示するために必要な最大のバイト数を返す</p>
	 * @param resource $stmt <p>結果セットを含むステートメントリソースを指定します。</p>
	 * @param mixed $column <p>結果セット内のカラムを指定します。0 から始まるインデックス、 あるいはカラム名を表す文字列のいずれかが使用可能です。</p>
	 * @return int <p>指定したカラムを表示するために必要な最大バイト数を表す整数値を返します。 結果セット内にそのカラムが存在しない場合には、 <b>db2_field_display_size()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-field-display-size.php
	 * @see db2_field_name(), db2_field_num(), db2_field_precision(), db2_field_scale(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_display_size($stmt, $column): int {}

	/**
	 * 結果セット内のカラムの名前を返す
	 * <p>結果セット内の指定したカラムの名前を返します。</p>
	 * @param resource $stmt <p>結果セットを含むステートメントリソースを指定します。</p>
	 * @param mixed $column <p>結果セット内のカラムを指定します。0 から始まるインデックス、 あるいはカラム名を表す文字列のいずれかが使用可能です。</p>
	 * @return string <p>指定したカラムの名前を含む文字列を返します。 結果セット内にそのカラムが存在しない場合には、 <b>db2_field_name()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-field-name.php
	 * @see db2_field_display_size(), db2_field_num(), db2_field_precision(), db2_field_scale(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_name($stmt, $column): string {}

	/**
	 * 結果セット内の指定したカラムの位置を返す
	 * <p>結果セット内の指定したカラムの位置を返します。</p>
	 * @param resource $stmt <p>結果セットを含むステートメントリソースを指定します。</p>
	 * @param mixed $column <p>結果セット内のカラムを指定します。0 から始まるインデックス、 あるいはカラム名を表す文字列のいずれかが使用可能です。</p>
	 * @return int <p>結果セット内でのカラムの位置を、0 から始まる整数値で返します。 結果セット内にそのカラムが存在しない場合には、 <b>db2_field_num()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-field-num.php
	 * @see db2_field_display_size(), db2_field_name(), db2_field_precision(), db2_field_scale(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_num($stmt, $column): int {}

	/**
	 * 結果セット内の指定したカラムの精度を返す
	 * <p>結果セット内の指定したカラムの精度を返します。</p>
	 * @param resource $stmt <p>結果セットを含むステートメントリソースを指定します。</p>
	 * @param mixed $column <p>結果セット内のカラムを指定します。0 から始まるインデックス、 あるいはカラム名を表す文字列のいずれかが使用可能です。</p>
	 * @return int <p>指定したカラムの精度を表す整数値を返します。 結果セット内にそのカラムが存在しない場合には、 <b>db2_field_precision()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-field-precision.php
	 * @see db2_field_display_size(), db2_field_name(), db2_field_num(), db2_field_scale(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_precision($stmt, $column): int {}

	/**
	 * 結果セット内の指定したカラムの位取りを返す
	 * <p>結果セット内の指定したカラムの位取りを返します。</p>
	 * @param resource $stmt <p>結果セットを含むステートメントリソースを指定します。</p>
	 * @param mixed $column <p>結果セット内のカラムを指定します。0 から始まるインデックス、 あるいはカラム名を表す文字列のいずれかが使用可能です。</p>
	 * @return int <p>指定したカラムの位取りを整数値で返します。 結果セット内にそのカラムが存在しない場合には、 <b>db2_field_scale()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-field-scale.php
	 * @see db2_field_display_size(), db2_field_name(), db2_field_num(), db2_field_precision(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_scale($stmt, $column): int {}

	/**
	 * 結果セット内の指定したカラムのデータ型を返す
	 * <p>結果セット内の指定したカラムのデータ型を返します。</p>
	 * @param resource $stmt <p>結果セットを含むステートメントリソースを指定します。</p>
	 * @param mixed $column <p>結果セット内のカラムを指定します。0 から始まるインデックス、 あるいはカラム名を表す文字列のいずれかが使用可能です。</p>
	 * @return string <p>指定したカラムに定義されているデータ型を表す文字列を返します。 結果セット内にそのカラムが存在しない場合には、 <b>db2_field_type()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-field-type.php
	 * @see db2_field_display_size(), db2_field_name(), db2_field_num(), db2_field_precision(), db2_field_scale(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_type($stmt, $column): string {}

	/**
	 * 結果セット内の指定したカラムの現在値の幅を返す
	 * <p>結果セット内の指定したカラムの現在値の幅を返します。 固定長のデータ型では、この値はカラムの最大幅になります。 可変長のデータ型では、実際のカラムの幅となります。</p>
	 * @param resource $stmt <p>結果セットを含むステートメントリソースを指定します。</p>
	 * @param mixed $column <p>結果セット内のカラムを指定します。0 から始まるインデックス、 あるいはカラム名を表す文字列のいずれかが使用可能です。</p>
	 * @return int <p>結果セット内の文字型あるいはバイナリデータ型のカラムについて、 その幅を整数値で返します。 結果セット内にそのカラムが存在しない場合には、 <b>db2_field_width()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-field-width.php
	 * @see db2_field_display_size(), db2_field_name(), db2_field_num(), db2_field_precision(), db2_field_scale(), db2_field_type()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_field_width($stmt, $column): int {}

	/**
	 * テーブルの外部キーを含む結果セットを返す
	 * <p>テーブルの外部キーを含む結果セットを返します。</p>
	 * @param resource $connection <p>IBM DB2、Cloudscape あるいは Apache Derby データベースへの有効な接続。</p>
	 * @param string $qualifier <p>OS/390 あるいは z/OS サーバー上で稼動している DB2 データベースの修飾子。 その他のデータベースの場合には <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $schema <p>テーブルを含むスキーマ。<code>schema</code> が <b><code>NULL</code></b> の場合は、<b>db2_foreign_keys()</b> 現在の接続のスキーマに一致します。</p>
	 * @param string $table_name <p>テーブルの名前。</p>
	 * @return resource <p>指定したテーブルの外部キーを含む結果セットのステートメントリソースを返します。 結果セットは、以下のカラムで構成されています。</p>   カラム名 説明     PKTABLE_CAT  主キーを含むテーブルのカタログの名前。 テーブルがカタログを保持していない場合は NULL。    PKTABLE_SCHEM  主キーを含むテーブルのスキーマの名前。    PKTABLE_NAME 主キーを含むテーブルの名前。   PKCOLUMN_NAME 主キーを含むカラムの名前。   FKTABLE_CAT  外部キーを含むテーブルのカタログの名前。 テーブルがカタログを保持していない場合は NULL。    FKTABLE_SCHEM  外部キーを含むテーブルのスキーマの名前。    FKTABLE_NAME 外部キーを含むテーブルの名前。   FKCOLUMN_NAME 外部キーを含むカラムの名前。   KEY_SEQ 1 から始まる数字で表した、キー内のカラムの位置。   UPDATE_RULE  SQL で UPDATE 操作を行った際に外部キーに適用される動作を表す整数値。    DELETE_RULE  SQL で DELETE 操作を行った際に外部キーに適用される動作を表す整数値。    FK_NAME 外部キーの名前。   PK_NAME 主キーの名前。   DEFERRABILITY  外部キーの遅延度を表す整数値。 SQL_INITIALLY_DEFERRED、SQL_INITIALLY_IMMEDIATE あるいは SQL_NOT_DEFERRABLE のいずれか。
	 * @link https://php.net/manual/ja/function.db2-foreign-keys.php
	 * @see db2_column_privileges(), db2_columns(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_foreign_keys($connection, string $qualifier, string $schema, string $table_name) {}

	/**
	 * 結果セットに関連付けられたリソースを開放する
	 * <p>結果セットに関連付けられたシステムリソースおよびデータベースリソースを 開放します。これらのリソースはスクリプトの終了時に暗黙的に開放されますが、 スクリプトの終了前に <b>db2_free_result()</b> をコールすることで、明示的に結果セットリソースを開放することができます。</p>
	 * @param resource $stmt <p>有効なステートメントリソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-free-result.php
	 * @see db2_free_stmt()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_free_result($stmt): bool {}

	/**
	 * 指定されたステートメントリソースに関連付けられたリソースを開放する
	 * <p>ステートメントリソースに関連付けられたシステムリソースおよびデータベースリソースを 開放します。これらのリソースはスクリプトの終了時に暗黙的に開放されますが、 スクリプトの終了前に <b>db2_stmt_result()</b> をコールすることで、明示的にステートメントリソースを開放することができます。</p>
	 * @param resource $stmt <p>有効なステートメントリソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-free-stmt.php
	 * @see db2_free_result()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_free_stmt($stmt): bool {}

	/**
	 * ステートメントリソースあるいは接続リソースからオプションの値を取得する
	 * <p>ステートメントリソースあるいは接続リソースから、指定したオプションの値を取得します。</p>
	 * @param resource $resource <p><code>db2_prepare()</code> が返す有効なステートメントリソース、 あるいは <code>db2_connect()</code> や <code>db2_pconnect()</code> が返す有効な接続リソース。</p>
	 * @param string $option <p>ステートメントや接続の、有効なオプション。 以下の新しいオプションが、ibm_db2 バージョン 1.6.0 以降で使用可能です。 これらは、有用な情報を提供します。これらの情報は、 <b>db2_get_option()</b> によって取得します。</p> <p><b>注意</b>:</p> <p>以前のバージョンの ibm_db2 では、これらの新しいオプションはサポートしていません。</p> <p>各オプションの値を設定する際、 サーバーによっては指定したすべての内容を処理できないことがあります。 その場合、値が切り詰められます。</p> <p>指定したオプションが正しく変換されてホストシステムに送信されることを確実にするには、 A から Z までの文字と 0 から 9 までの数字、そしてアンダースコア (_) とピリオド (.) のみを使用するようにします。</p>    <code>userid</code>   <p><i>SQL_ATTR_INFO_USERID</i> - ヌル終端の文字列へのポインタで、DB2 接続の際にホストデータベースサーバーに送信する クライアントのユーザー ID として使用します。</p>  <p><b>注意</b>:</p> <p>z/OS および OS/390 サーバー版の DB2 は 16 文字までの長さをサポートしています。 このユーザー ID を、認証時に使用するユーザー ID と混同しないでください。 これは識別のためだけに使用するものであり、認証には用いられません。</p>    <code>acctstr</code>   <p><i>SQL_ATTR_INFO_ACCTSTR</i> - ヌル終端の文字列へのポインタで、DB2 接続の際にホストデータベースサーバーに送信する クライアントのアカウンティング・ストリングとして使用します。</p>  <p><b>注意</b>:</p> <p>z/OS および OS/390 サーバー版の DB2 は 200 文字までの長さをサポートしています。</p>    <code>applname</code>   <p><i>SQL_ATTR_INFO_APPLNAME</i> - ヌル終端の文字列へのポインタで、DB2 接続の際にホストデータベースサーバーに送信する クライアントのアプリケーション名として使用します。</p>  <p><b>注意</b>:</p> <p>z/OS および OS/390 サーバー版の DB2 は 32 文字までの長さをサポートしています。</p>    <code>wrkstnname</code>   <p><i>SQL_ATTR_INFO_WRKSTNNAME</i> - ヌル終端の文字列へのポインタで、DB2 接続の際にホストデータベースサーバーに送信する クライアントのワークステーション名として使用します。</p>  <p><b>注意</b>:</p> <p>z/OS および OS/390 サーバー版の DB2 は 18 文字までの長さをサポートしています。</p>
	 * @return string <p>成功した場合に接続属性の現在の設定内容、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-get-option.php
	 * @see db2_connect(), db2_cursor_type(), db2_exec(), db2_set_option(), db2_pconnect(), db2_prepare()
	 * @since PECL ibm_db2 >= 1.6.0
	 */
	function db2_get_option($resource, string $option): string {}

	/**
	 * この接続上で最後に成功した insert クエリが自動生成した ID を返す
	 * <p>この接続上で最後に成功した insert クエリが自動生成した ID を返します。</p><p>この関数の結果は、以下のいずれにも影響を受けません。</p><p>VALUE 句を使用した単一行の INSERT 文で、ID カラムを指定していないもの</p><p>VALUE 句を使用した複数行の INSERT 文</p><p>全選択からの INSERT 文</p><p>ROLLBACK TO SAVEPOINT 文</p>
	 * @param resource $resource <p><code>db2_connect()</code> あるいは <code>db2_pconnect()</code> が返す接続リソース。 このパラメータにはステートメントリソースや結果セットリソースを指定することはできません。</p>
	 * @return string <p>この接続上で最後に成功した insert クエリが自動生成した ID を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-last-insert-id.php
	 * @since PECL ibm_db2 >= 1.7.1
	 */
	function db2_last_insert_id($resource): string {}

	/**
	 * LOB ファイルから、ユーザーが定義したサイズの内容を取得する
	 * <p><b>db2_lob_read()</b> により、 結果セットの指定したカラムから、指定したサイズの LOB データを取得します。</p>
	 * @param resource $stmt <p>LOB データを含む有効な <i>stmt</i> リソース。</p>
	 * @param int $colnum <p><i>stmt</i> リソースの結果セット内の、有効なカラム番号。</p>
	 * @param int $length <p><i>stmt</i> リソースから取得する LOB データのサイズ。</p>
	 * @return string <p>指定したサイズのデータを返します。データが取得できない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-lob-read.php
	 * @see db2_bind_param(), db2_exec(), db2_execute(), db2_fetch_row(), db2_prepare(), db2_result()
	 * @since PECL ibm_db2 >= 1.6.0
	 */
	function db2_lob_read($stmt, int $colnum, int $length): string {}

	/**
	 * ストアドプロシージャから、次の結果セットを要求する
	 * <p>ストアドプロシージャは、複数の結果セットを返すことができます。 単純な SELECT 文が返す結果を処理するのと同じように最初の結果セットを 扱った後でそれ以降の結果セットを処理する際には、 <b>db2_next_result()</b> 関数をコールして その返り値を PHP 変数に代入しなければなりません。</p>
	 * @param resource $stmt <p><code>db2_exec()</code> あるいは <code>db2_execute()</code> から返されるプリペアドステートメント。</p>
	 * @return resource <p>ストアドプロシージャが別の結果セットを返している場合には 次の結果セットを含む新しいステートメントリソース、 別の結果セットを返していない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-next-result.php
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_next_result($stmt) {}

	/**
	 * 結果セットに含まれるフィールドの数を返す
	 * <p>結果セットに含まれるフィールドの数を返します。動的に生成されたクエリが返す 結果セットを処理する場合、あるいはストアドプロシージャから返された結果セットを 処理する場合など、結果セットの使用法がアプリケーションにわからない場合に有用です。</p>
	 * @param resource $stmt <p>結果セットを含む有効なステートメントリソース。</p>
	 * @return int <p>指定したステートメントリソースに関連付けられた結果セット内の フィールドの数を表す整数値を返します。ステートメントリソースが 不正な値の場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-num-fields.php
	 * @see db2_execute(), db2_field_display_size(), db2_field_name(), db2_field_num(), db2_field_precision(), db2_field_scale(), db2_field_type(), db2_field_width()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_num_fields($stmt): int {}

	/**
	 * SQL 文によって変更された行の数を返す
	 * <p>SQL 文によって削除、挿入あるいは更新された行の数を返します。</p><p>SELECT 文が返す行の数を取得するには、調べたい SELECT 文と同じ述部を持つ SELECT COUNT(&#42;) を発行し、その値を取得します。</p><p>SELECT 文が返す行の数を調べて 0 の場合には別の処理を行うようなロジックを アプリケーションで使用している場合、その代わりに <code>db2_fetch_assoc()</code>、<code>db2_fetch_both()</code>、 <code>db2_fetch_array()</code> あるいは <code>db2_fetch_row()</code> を使用して最初の行を取得し、 結果が <b><code>FALSE</code></b> の場合には別の処理を行うという方法を検討してください。</p><p><b>注意</b>:</p><p>スクロール可能なカーソルを使用して SELECT 文を発行した場合は、 <b>db2_num_rows()</b> は SELECT 文の結果の行数を返します。 しかし、スクロール可能なカーソルを使用すると、 アプリケーションのパフォーマンスが急激に低下します。 そのため、SELECT 文の結果の行数を知りたいというだけの理由で スクロール可能なカーソルを使用するのは避けましょう。 前進のみのカーソルを使用し、SELECT COUNT(&#42;) をコールするか フェッチ関数の返す <code>boolean</code> 値を調べるほうが、 同じ機能をずっと高速に実現できます。</p>
	 * @param resource $stmt <p>結果セットを含む有効な <i>stmt</i> リソース。</p>
	 * @return int <p>指定したステートメントハンドルによって発行された、 直近の SQL 文によって変更された行の数を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-num-rows.php
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_num_rows($stmt): int {}

	/**
	 * 持続的データベース接続を閉じる
	 * <p>この関数は、 <code>db2_pconnect()</code> で作成した DB2 クライアント接続を閉じ、 対応するリソースをデータベースサーバーに返します。</p><p><b>注意</b>:</p><p>この関数は、i5/OS で i5/OS システム管理リクエストに対する応答としてのみ使用可能です。</p><p>持続的 DB2 クライアント接続を <code>db2_pconnect()</code> で作成した場合は、 この関数で接続を閉じることができるでしょう。それ以降の接続のパフォーマンスのことを考えて、 この関数使うのは特別な場合だけにしておかなければなりません。 たとえば持続的接続が無反応になったり 当分の間は持続的接続が不要になったりした場合です。</p>
	 * @param resource $resource
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-pclose.php
	 * @see db2_close(), db2_pconnect()
	 * @since PECL ibm_db2 >= 1.8.0
	 */
	function db2_pclose($resource): bool {}

	/**
	 * データベースへの持続的接続を返す
	 * <p>IBM DB2 Universal Database、IBM Cloudscape あるいは Apache Derby データベースへの持続的接続を返します。</p><p>持続的接続についての詳細な情報は、 持続的データベース接続 を参照ください。</p><p>持続的接続に対して <code>db2_close()</code> をコールすると、 常に <b><code>TRUE</code></b> を返します。しかし DB2 クライアント接続はオープンされたままであり、 条件に一致する次の <b>db2_pconnect()</b> リクエストを待ち続けます。</p><p>ibm_db2 のバージョン 1.9.0 以降を使っている場合は、 持続的接続上ではリクエストが終了するたびにトランザクションがロールバックされることに気をつけましょう。 リクエストが終了するたびにトランザクションも終了します。 これは、トランザクションによるブロックが次のリクエストまで持ち越されてしまって 同じ接続を利用する別のスクリプトの実行に影響するのを防ぐためです。</p>
	 * @param string $database <p>DB2 クライアントカタログ内のデータベースエイリアス。</p>
	 * @param string $username <p>データベースに接続するユーザー名。</p>
	 * @param string $password <p>データベースに接続するパスワード。</p>
	 * @param array $options <p>接続の振る舞いを指定する接続オプションの連想配列。 使用可能なキーは以下のとおりです。</p>  <code>autocommit</code>   <p><i>DB2_AUTOCOMMIT_ON</i> を渡すと、 この接続ハンドルで自動コミットを有効にします。</p> <p><i>DB2_AUTOCOMMIT_OFF</i> を渡すと、 この接続ハンドルで自動コミットを無効にします。</p>   <code>DB2_ATTR_CASE</code>   <p><i>DB2_CASE_NATURAL</i> を渡すと、 カラム名の大文字小文字を変換せずに返します。</p> <p><i>DB2_CASE_LOWER</i> を渡すと、 カラム名を小文字に変換して返します。</p> <p><i>DB2_CASE_UPPER</i> を渡すと、 カラム名を大文字に変換して返します。</p>   <code>CURSOR</code>   <p><i>DB2_FORWARD_ONLY</i> を渡すと、 ステートメントリソースで前進のみのカーソルを使用します。 これはデフォルトのカーソル型であり、 すべてのデータベースサーバーでサポートされています。</p> <p><i>DB2_SCROLLABLE</i> を渡すと、 ステートメントリソースでスクロール可能なカーソルを使用します。 このモードでは結果セット内の行へのランダムアクセスが可能となりますが、 現在は IBM DB2 Universal Database でしかサポートされていません。</p>   <p>以下の新しいオプションは、ibm_db2 のバージョン 1.7.0 以降で使用可能です。</p>  <code>trustedcontext</code>   <p>DB2_TRUSTED_CONTEXT_ENABLE を渡すと、この接続ハンドルでの信頼済みコンテキストを有効にします。 このパラメータを <code>db2_set_option()</code> で設定することはできません。</p> <p>このキーは、カタログ接続の場合 (たとえローカルデータベースであっても) あるいは接続時に完全な DSN を指定した場合にのみ動作します。</p> <p>データベースをカタログするには次のコマンドを実行します。</p> <p></p> <pre>db2 catalog tcpip node loopback remote &lt;SERVERNAME&gt; server &lt;SERVICENAME&gt; db2 catalog database &lt;LOCALDBNAME&gt; as &lt;REMOTEDBNAME&gt; at node loopback db2 "update dbm cfg using svcename &lt;SERVICENAME&gt;" db2set DB2COMM=TCPIP</pre>   <p>以下の新しい i5/OS オプションは、ibm_db2 のバージョン 1.5.1 以降で使用可能です。</p> <b>ヒント</b> <p>持続的接続と衝突する属性を使用すると、i5/OS では結果は未定義となります。 持続的接続のユーザープロファイルを使用するすべてのアプリケーションについて、 サイトポリシーを確立しておく必要があります。持続的接続を使用する場合は、 デフォルトの DB2_AUTOCOMMIT_ON をおすすめします。</p>    <code>i5_lib</code>   <p>未解決のファイル参照を解決する際に使用するデフォルトのライブラリを指定します。 システムのネーミングモードを使用している接続の場合は、これは無効です。</p>   <code>i5_naming</code>   <p><i>DB2_I5_NAMING_ON</i> は、DB2 UDB CLI iSeries のシステムネーミングモードを有効にします。ファイルの識別の際、 区切り文字としてスラッシュ (/) を使用します。 識別されないファイルの解決には、ジョブのライブラリ一覧を使用します。</p> <p><i>DB2_I5_NAMING_OFF</i> は、DB2 UDB CLI のデフォルトのネーミングモード (SQL ネーミング) を無効にします。 ファイルの識別の際、区切り文字としてピリオド (.) を使用します。 識別されないファイルの解決には、 デフォルトのライブラリあるいは現在のユーザー ID を使用します。</p>   <code>i5_commit</code>   <p><code>i5_commit</code> 属性は、 <b>db2_pconnect()</b> の前に設定しなければなりません。 接続が確立された後にこの値が変更され、その接続がリモートデータソースに対するものだった場合は、 その接続ハンドルに対してもう一度 <b>db2_pconnect()</b> がコールされるまで変更は反映されません。</p>  <p><b>注意</b>:</p> <p>php.ini の設定は <code>ibm_db2.i5_allow_commit</code>==0 あるいは <i>DB2_I5_TXN_NO_COMMIT</i> がデフォルトです。 しかし、その設定よりも <code>i5_commit</code> オプションの内容のほうが優先されます。</p>  <p><i>DB2_I5_TXN_NO_COMMIT</i> - コミットの管理を使用しません。</p> <p><i>DB2_I5_TXN_READ_UNCOMMITTED</i> - ダーティリード、 反復不能読み取り、ファントムリードが発生する可能性があります。</p> <p><i>DB2_I5_TXN_READ_COMMITTED</i> - ダーティリードは発生しません。 反復不能読み取り、ファントムリードが発生する可能性があります。</p> <p><i>DB2_I5_TXN_REPEATABLE_READ</i> - ダーティリード、 反復不能読み取りは発生しません。 ファントムリードが発生する可能性があります。</p> <p><i>DB2_I5_TXN_SERIALIZABLE</i> - トランザクションの一貫性を保持します。 ダーティリード、反復不能読み取り、ファントムリードは発生しません。</p>   <code>i5_query_optimize</code>   <p><i>DB2_FIRST_IO</i> すべてのクエリは、結果の一行目をできるだけ早く返すように最適化されます。 これが有効なのは、出力の制御をユーザーが行う場合です。出力の制御とは、 たとえば、出力の最初のページを見てそこで処理を停止させるなどのことです。 OPTIMIZE FOR nnn ROWS 句を指定したクエリは、その指定が優先されます。</p> <p><i>DB2_ALL_IO</i> すべてのクエリは、結果全体をできるだけ短時間で取得できるように最適化されます。 これは、結果をファイルや帳票に書き出す場合に有用なオプションです。 あるいは出力データを順次処理するインターフェイスなどにも有用です。 OPTIMIZE FOR nnn ROWS 句を指定したクエリは、その指定が優先されます。 これはデフォルトの設定です。</p>   <code>i5_dbcs_alloc</code>   <p><i>DB2_I5_DBCS_ALLOC_ON</i> は、 DBCS トランザクションカラムサイズ用の DB2 6X アロケーションを有効にします。</p> <p><i>DB2_I5_DBCS_ALLOC_OFF</i> は、 DBCS トランザクションカラムサイズ用の DB2 6X アロケーションを無効にします。</p>  <p><b>注意</b>:</p> <p>php.ini では <code>ibm_db2.i5_dbcs_alloc</code>==0 あるいは <i>DB2_I5_DBCS_ALLOC_OFF</i> がデフォルト設定となっています。 しかし、<code>i5_dbcs_alloc</code> の値のほうが優先されます。</p>    <code>i5_date_fmt</code>   <p><i>DB2_I5_FMT_ISO</i> - 国際標準化機構 (ISO) の日付書式 yyyy-mm-dd を使用します。デフォルトです。</p> <p><i>DB2_I5_FMT_USA</i> - 合衆国の日付書式 mm/dd/yyyy を使用します。</p> <p><i>DB2_I5_FMT_EUR</i> - 欧州の日付書式 dd.mm.yyyy を使用します。</p> <p><i>DB2_I5_FMT_JIS</i> - 日本工業規格 (JIS) の日付書式 yyyy-mm-dd を使用します。</p> <p><i>DB2_I5_FMT_MDY</i> - 日付書式 mm/dd/yyyy を使用します。</p> <p><i>DB2_I5_FMT_DMY</i> - 日付書式 dd/mm/yyyy を使用します。</p> <p><i>DB2_I5_FMT_YMD</i> - 日付書式 yy/mm/dd を使用します。</p> <p><i>DB2_I5_FMT_JUL</i> - ユリウス日 yy/ddd を使用します。</p> <p><i>DB2_I5_FMT_JOB</i> - そのジョブのデフォルトを使用します。</p>   <code>i5_date_sep</code>   <p><i>DB2_I5_SEP_SLASH</i> - スラッシュ ( / ) を日付の区切り文字として使用します。 デフォルトです。</p> <p><i>DB2_I5_SEP_DASH</i> - ダッシュ ( - ) を日付の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_PERIOD</i> - ピリオド ( . ) を日付の区切り文字として使用します。 separator.</p> <p><i>DB2_I5_SEP_COMMA</i> - カンマ ( , ) を日付の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_BLANK</i> - ブランクを日付の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_JOB</i> - そのジョブのデフォルトを使用します。</p>   <code>i5_time_fmt</code>   <p><i>DB2_I5_FMT_ISO</i> - 国際標準化機構 (ISO) の時刻書式 hh.mm.ss を使用します。デフォルトです。</p> <p><i>DB2_I5_FMT_USA</i> - 合衆国の時刻書式 hh:mmxx を使用します。xx には AM あるいは PM が入ります。</p> <p><i>DB2_I5_FMT_EUR</i> - 欧州の時刻書式 hh.mm.ss を使用します。</p> <p><i>DB2_I5_FMT_JIS</i> - 日本工業規格 (JIS) の時刻書式 hh:mm:ss を使用します。</p> <p><i>DB2_I5_FMT_HMS</i> - hh:mm:ss を使用します。</p>   <code>i5_time_sep</code>   <p><i>DB2_I5_SEP_COLON</i> - コロン ( : ) を時刻の区切り文字として使用します。 デフォルトです。</p> <p><i>DB2_I5_SEP_PERIOD</i> - ピリオド ( . ) を時刻の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_COMMA</i> - カンマ ( , ) を時刻の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_BLANK</i> - ブランクを時刻の区切り文字として使用します。</p> <p><i>DB2_I5_SEP_JOB</i> - そのジョブのデフォルトを使用します。</p>   <code>i5_decimal_sep</code>   <p><i>DB2_I5_SEP_PERIOD</i> - ピリオド ( . ) を小数点として使用します。 デフォルトです。</p> <p><i>DB2_I5_SEP_COMMA</i> - カンマ ( , ) を小数点として使用します。</p> <p><i>DB2_I5_SEP_JOB</i> - そのジョブのデフォルトを使用します。</p>   <p>以下の新しい i5/OS オプションは、ibm_db2 のバージョン 1.8.0 以降で使用可能です。</p>  <code>i5_libl</code>   <p>ファイル参照を解決する際に用いるライブラリ一覧を表す文字。 ライブラリ一覧の項目を指定する際は、空白で区切って 'i5_libl'=&gt;"MYLIB YOURLIB ANYLIB" のようにします。</p>  <p><b>注意</b>:</p> <p>i5_libl は qsys2/qcmdexc('cmd',cmdlen) をコールします。 これは i5/OS V5R4 以降でのみ使用可能です。</p>
	 * @return resource <p>接続に成功した場合は接続ハンドルリソースを返します。 パラメータ <code>database</code>、<code>username</code> および <code>password</code> に完全に一致する接続が 既に存在した場合、<b>db2_pconnect()</b> はそれを再利用します。接続に失敗した場合は <b>db2_pconnect()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-pconnect.php
	 * @see db2_connect()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_pconnect(string $database, string $username, string $password, array $options = NULL) {}

	/**
	 * 実行する SQL 文を準備する
	 * <p><b>db2_prepare()</b> は、プリペアドステートメントを作成します。 このプリペアドステートメントには、入力パラメータ・出力パラメータ あるいは入出力パラメータを表すパラメータマーカ (<i>&#63;</i>) を含めることができます。プリペアドステートメントにパラメータを渡すには <code>db2_bind_param()</code> を使用します。 入力パラメータの場合についてのみ、<code>db2_execute()</code> に渡す配列で指定することも可能です。</p><p>アプリケーション内でプリペアドステートメントを使用する利点は、 以下の 3 つです。</p><p><i>パフォーマンス</i>: 事前に文を準備しておくと、 その文によってデータを取得するための実行計画をデータベースサーバーが 最適化します。その後 <code>db2_execute()</code> でプリペアドステートメントを実行する際にはこの実行計画が再利用され、 実行時に実行計画を毎回作成することによるオーバーヘッドを避けられます。</p><p><i>セキュリティ</i>: 事前に文を準備する際に、 入力値にパラメータマーカを含めることができます。 入力値にプレースホルダを使用してプリペアドステートメントを実行すると、 入力値の型がカラム定義あるいはパラメータ定義と一致することを データベースサーバーがチェックします。</p><p><i>高機能</i>: パラメータマーカの機能は、 単に入力値をプリペアドステートメントに渡すだけではありません。 <code>db2_bind_param()</code> を使用すると、 ストアドプロシージャの OUT パラメータおよび INOUT パラメータから 値を取得することも可能です。</p>
	 * @param resource $connection <p><code>db2_connect()</code> あるいは <code>db2_pconnect()</code> が返した有効なデータベース接続リソース。</p>
	 * @param string $statement <p>ひとつ以上のパラメータマーカを含む SQL 文。</p>
	 * @param array $options <p>文のオプションを含む連想配列。 データベースサーバーがその機能をサポートしている場合に、 このパラメータを使用してスクロール可能なカーソルの使用を 要求することができます。</p> <p>オプションについての説明は <code>db2_set_option()</code> を参照ください。</p>
	 * @return resource <p>SQL 文のパースに成功し、データベースサーバー内で正しく準備された場合に ステートメントリソースを返します。データベースサーバーがエラーを返した場合に <b><code>FALSE</code></b> を返します。返されたエラーの詳細を調べるには、 <code>db2_stmt_error()</code> あるいは <code>db2_stmt_errormsg()</code> をコールします。</p>
	 * @link https://php.net/manual/ja/function.db2-prepare.php
	 * @see db2_bind_param(), db2_execute(), db2_stmt_error(), db2_stmt_errormsg()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_prepare($connection, string $statement, array $options = NULL) {}

	/**
	 * テーブルの主キーを含む結果セットを返す
	 * <p>テーブルの主キーを含む結果セットを返します。</p>
	 * @param resource $connection <p>IBM DB2、Cloudscape あるいは Apache Derby データベースへの有効な接続。</p>
	 * @param string $qualifier <p>OS/390 あるいは z/OS サーバー上で稼動している DB2 データベースの修飾子。 その他のデータベースの場合には <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $schema <p>テーブルを含むスキーマ。<code>schema</code> が <b><code>NULL</code></b> の場合、<b>db2_primary_keys()</b> は現在の接続のスキーマを使用します。</p>
	 * @param string $table_name <p>テーブルの名前。</p>
	 * @return resource <p>指定したテーブルの主キーを含む結果セットのステートメントリソースを返します。 結果セットは、以下のカラムで構成されています。</p>   カラム名 説明     TABLE_CAT  主キーを含むテーブルのカタログの名前。 テーブルがカタログを保持していない場合は NULL。    TABLE_SCHEM  主キーを含むテーブルのスキーマの名前。    TABLE_NAME 主キーを含むテーブルの名前。   COLUMN_NAME 主キーを含むカラムの名前。   KEY_SEQ 1 から始まる数字で表した、キー内のカラムの位置。   PK_NAME 主キーの名前。
	 * @link https://php.net/manual/ja/function.db2-primary-keys.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_primary_keys($connection, string $qualifier, string $schema, string $table_name) {}

	/**
	 * ストアドプロシージャのパラメータを含む結果セットを返す
	 * <p>ストアドプロシージャのパラメータを含む結果セットを返します。</p>
	 * @param resource $connection <p>IBM DB2、Cloudscape あるいは Apache Derby データベースへの有効な接続。</p>
	 * @param string $qualifier <p>OS/390 あるいは z/OS サーバー上で稼動している DB2 データベースの修飾子。 その他のデータベースの場合には <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $schema <p>プロシージャを含むスキーマ。このパラメータでは、ワイルドカードとして <i>_</i> および <i>%</i> を含む検索パターンを使用可能です。</p>
	 * @param string $procedure <p>プロシージャの名前。このパラメータでは、ワイルドカードとして <i>_</i> および <i>%</i> を含む検索パターンを使用可能です。</p>
	 * @param string $parameter <p>パラメータの名前。このパラメータでは、ワイルドカードとして <i>_</i> および <i>%</i> を含む検索パターンを使用可能です。 このパラメータが <b><code>NULL</code></b> の場合、指定したストアドプロシージャの すべてのパラメータが返されます。</p>
	 * @return resource <p>指定したパラメータに一致するストアドプロシージャのパラメータ情報を含む結果セットの ステートメントリソースを返します。 行の内容は、以下のカラムで構成されています。</p>   カラム名 説明     PROCEDURE_CAT  プロシージャを含むカタログ。テーブルがカタログを保持していない場合は <b><code>NULL</code></b>。    PROCEDURE_SCHEM ストアドプロシージャを含むスキーマの名前。   PROCEDURE_NAME プロシージャの名前。   COLUMN_NAME パラメータの名前。   COLUMN_TYPE  <p>パラメータの型を表す整数値。</p>    返される値 パラメータの型     1 (SQL_PARAM_INPUT) 入力 (IN) パラメータ。   2 (SQL_PARAM_INPUT_OUTPUT) 入力/出力 (INOUT) パラメータ。   3 (SQL_PARAM_OUTPUT) 出力 (OUT) パラメータ。       DATA_TYPE  パラメータの SQL データ型を表す整数値。    TYPE_NAME パラメータのデータ型を表す文字列。   COLUMN_SIZE パラメータのサイズを表す整数値。   BUFFER_LENGTH  このパラメータのデータを保存するために必要な最大バイト数。    DECIMAL_DIGITS  パラメータの位取り。位取りが適用できない場合は <b><code>NULL</code></b>。    NUM_PREC_RADIX  <i>10</i> (正確な数値データ型を表す)、 <i>2</i> (概数データ型を表す)、 あるいは <b><code>NULL</code></b> (基数が適用できないデータ型を表す) のいずれか。    NULLABLE パラメータが null 値をとることができるかどうかを表す整数値。   REMARKS パラメータの説明。   COLUMN_DEF パラメータのデフォルト値。   SQL_DATA_TYPE パラメータのサイズを表す整数値。   SQL_DATETIME_SUB  datetime 型のコードを表す整数値、 あるいはこれが適用できない SQL データ型である場合に <b><code>NULL</code></b>。    CHAR_OCTET_LENGTH  文字型のパラメータにおける最大のオクテット数。 シングルバイト文字セットのデータの場合、これは COLUMN_SIZE に一致します。文字型でないカラムの場合は <b><code>NULL</code></b> となります。    ORDINAL_POSITION CALL 文の中でのパラメータの位置を表す、1 から始まるインデックス。   IS_NULLABLE  パラメータが null 値をとることができるかどうかを表す文字列。 'YES' の場合は null 値をとることができ、 'NO' の場合はできません。
	 * @link https://php.net/manual/ja/function.db2-procedure-columns.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_procedure_columns($connection, string $qualifier, string $schema, string $procedure, string $parameter) {}

	/**
	 * データベース内に登録されているストアドプロシージャの一覧を含む結果セットを返す
	 * <p>データベース内に登録されているストアドプロシージャの一覧を含む結果セットを返します。</p>
	 * @param resource $connection <p>IBM DB2、Cloudscape あるいは Apache Derby データベースへの有効な接続。</p>
	 * @param string $qualifier <p>OS/390 あるいは z/OS サーバー上で稼動している DB2 データベースの修飾子。 その他のデータベースの場合には <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $schema <p>プロシージャを含むスキーマ。このパラメータでは、ワイルドカードとして <i>_</i> および <i>%</i> を含む検索パターンを使用可能です。</p>
	 * @param string $procedure <p>プロシージャの名前。このパラメータでは、ワイルドカードとして <i>_</i> および <i>%</i> を含む検索パターンを使用可能です。</p>
	 * @return resource <p>指定したパラメータに一致するストアドプロシージャの情報を含む結果セットの ステートメントリソースを返します。 行の内容は、以下のカラムで構成されています。</p>   カラム名 説明     PROCEDURE_CAT  プロシージャを含むカタログ。テーブルがカタログを保持していない場合は <b><code>NULL</code></b>。    PROCEDURE_SCHEM ストアドプロシージャを含むスキーマの名前。   PROCEDURE_NAME プロシージャの名前。   NUM_INPUT_PARAMS ストアドプロシージャの入力 (IN) パラメータの数。   NUM_OUTPUT_PARAMS ストアドプロシージャの出力 (OUT) パラメータの数。   NUM_RESULT_SETS ストアドプロシージャが返す結果セットの数。   REMARKS ストアドプロシージャのコメント。   PROCEDURE_TYPE  常に <i>1</i> を返します。これは、 ストアドプロシージャが返り値を返さないことを意味します。
	 * @link https://php.net/manual/ja/function.db2-procedures.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_special_columns(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_procedures($connection, string $qualifier, string $schema, string $procedure) {}

	/**
	 * 結果セットの行からひとつのカラムを返す
	 * <p><b>db2_result()</b> を使用して、 結果セットの現在の行から指定したカラムの値を取得します。 結果セットポインタの位置を指定するため、<b>db2_result()</b> のコール前には <code>db2_fetch_row()</code> をコールする必要があります。</p>
	 * @param resource $stmt <p>有効な <i>stmt</i> リソース。</p>
	 * @param mixed $column <p>結果セット内のカラムの位置を表す 0 から始まるインデックス、 あるいはカラム名を表す文字列。</p>
	 * @return mixed <p>指定したフィールドが結果セットに存在する場合にそのフィールドの値を返します。 フィールドが存在しない場合には NULL を返し、警告を発生させます。</p>
	 * @link https://php.net/manual/ja/function.db2-result.php
	 * @see db2_fetch_array(), db2_fetch_assoc(), db2_fetch_both(), db2_fetch_object(), db2_fetch_row()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_result($stmt, $column) {}

	/**
	 * トランザクションをロールバックする
	 * <p>指定した接続リソース上で実行中のトランザクションをロールバックし、 新しいトランザクションを開始します。PHP アプリケーションのデフォルトは AUTOCOMMIT モードなので、接続リソースに対して AUTOCOMMIT を無効にしていない限り <b>db2_rollback()</b> は何の意味もありません。</p>
	 * @param resource $connection <p><code>db2_connect()</code> あるいは <code>db2_pconnect()</code> が返した有効なデータベース接続リソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-rollback.php
	 * @see db2_autocommit(), db2_commit()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_rollback($connection): bool {}

	/**
	 * DB2 データベースサーバーの情報をプロパティに保持するオブジェクトを返す
	 * <p>この関数は、IBM DB2、Cloudscape あるいは Apache Derby データベースサーバーについての情報を 読み取り専用のプロパティに保持するオブジェクトを返します。 以下の表は、データベースサーバーのプロパティの一覧です。</p><p>非コミット読み取り: 変更内容は、他のトランザクションからも すぐに見えるようになります。</p><p>カーソル固定: あるトランザクションで読み込まれた行を、 別のトランザクションから変更してコミットすることができます。</p><p>読み取り固定: 検索条件あるいは実行中のトランザクションに 一致する行を、トランザクションから追加したり削除したりできます。</p><p>反復可能読み取り: 実行中のトランザクションに影響を受けるデータは、 他のトランザクションからは見えません。</p><p>コミット不可: 変更内容は、操作が終了した時点で見えるようになります。 明示的なコミットやロールバックはできません。</p><p>SQL-92 エントリレベルに準拠しています。</p><p>FIPS-127-2 transitional に準拠しています。</p><p>SQL-92 完全レベルに準拠しています。</p><p>SQL-92 中間レベルに準拠しています。</p>
	 * @param resource $connection <p>アクティブな DB2 クライアント接続を指定します。</p>
	 * @return object <p>成功した場合にオブジェクト、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-server-info.php
	 * @see db2_client_info()
	 * @since PECL ibm_db2 >= 1.1.1
	 */
	function db2_server_info($connection): object {}

	/**
	 * 接続リソースあるいはステートメントリソースのオプションを設定する
	 * <p>ステートメントリソースあるいは接続リソースのオプションを設定します。 結果セットリソースのオプションを設定することはできません。</p>
	 * @param resource $resource <p><code>db2_prepare()</code> が返す有効なステートメントリソースか、 あるいは <code>db2_connect()</code> や <code>db2_pconnect()</code> が返す有効な接続リソース。</p>
	 * @param array $options <p>ステートメントあるいは接続のオプションを含む連想配列。 このパラメータは、自動コミットの値を変更したりカーソルの型を (スクロール可能、あるいは前進のみに) 変更したり、結果セットに表示されるカラム名を (小文字、大文字、あるいは元のままに) 設定したりする際に使用します。</p>  <code>autocommit</code>   <p><i>DB2_AUTOCOMMIT_ON</i> を渡すと、 指定した接続リソースの自動コミットをオンにします。</p> <p><i>DB2_AUTOCOMMIT_OFF</i> を渡すと、 指定した接続リソースの自動コミットをオフにします。</p>   <code>cursor</code>   <p><i>DB2_FORWARD_ONLY</i> を渡すと、 ステートメントリソースに前進のみのカーソルを指定します。 これはデフォルトのカーソル型であり、 すべてのデータベースサーバーでサポートされています。</p> <p><i>DB2_SCROLLABLE</i> を渡すと、 ステートメントリソースにスクロール可能なカーソルを指定します。 このカーソルは、順番どおり以外の方法で結果セットの行にアクセス可能です。 しかし、IBM DB2 Universal Database でしかサポートされていません。</p>   <code>binmode</code>   <p><i>DB2_BINARY</i> を渡すと、 バイナリデータがそのままの形式で返されるようになります。 これはデフォルトのモードです。php.ini で <i>ibm_db2.binmode=1</i> とするのと同じことです。</p> <p><i>DB2_CONVERT</i> を渡すと、 バイナリデータを十六進エンコーディングで変換して返します。 これは、php.ini で <i>ibm_db2.binmode=2</i> とするのと同じことです。</p> <p><i>DB2_PASSTHRU</i> を渡すと、 バイナリデータを <b><code>NULL</code></b> に変換するようになります。これは php.ini で <i>ibm_db2.binmode=3</i> とするのと同じことです。</p>   <code>db2_attr_case</code>   <p><i>DB2_CASE_LOWER</i> を渡すと、 結果セットのカラム名を小文字で返します。</p> <p><i>DB2_CASE_UPPER</i> を渡すと、 結果セットのカラム名を大文字で返します。</p> <p><i>DB2_CASE_NATURAL</i> を渡すと、 結果セットのカラム名をそのまま何もせずに返します。</p>   <code>deferred_prepare</code>   <p><i>DB2_DEFERRED_PREPARE_ON</i> を渡すと、 指定したステートメントリソースについて遅延プリペアを有効にします。</p> <p><i>DB2_DEFERRED_PREPARE_OFF</i> を渡すと、 指定したステートメントリソースについて遅延プリペアを無効にします。</p>   <p>以下の新しい i5/OS オプションは、ibm_db2 のバージョン 1.5.1 以降で使用可能です。 これらのオプションが適用されるのは、PHP と ibm_db2 が i5 システム上でネイティブに動作している場合のみです。</p>  <code>i5_fetch_only</code>   <p><i>DB2_I5_FETCH_ON</i> - カーソルは読み込み専用となり、場所を指定しての更新や削除には使用できません。 これは、<i>SQL_ATTR_FOR_FETCH_ONLY</i> が <i>SQL_FALSE</i> に設定されていない場合のデフォルト設定です。</p> <p><i>DB2_I5_FETCH_OFF</i> - カーソルは、場所を指定しての更新や削除に使用できるようになります。</p>   <p>以下の新しいオプションが、ibm_db2 バージョン 1.8.0 以降で使用可能です。</p>  <code>rowcount</code>   <p><i>DB2_ROWCOUNT_PREFETCH_ON</i> - クライアントは、取得する前に全行数を問い合わせることができます。つまり、 <i>ROLLFORWARD_ONLY</i> カーソルを使っている場合でも 選択された行数を <code>db2_num_rows()</code> で取得することができます。</p> <p><i>DB2_ROWCOUNT_PREFETCH_OFF</i> - クライアントは、取得する前に全行数を問い合わせることができません。</p>   <p>以下の新しいオプションが、ibm_db2 バージョン 1.7.0 以降で使用可能です。</p>  <code>trusted_user</code>   <p>ユーザーを信頼済みユーザーに変更する際に、信頼済みユーザーのユーザー ID (文字列) をこのキーの値として渡します。 このオプションは、接続リソース上でのみ設定可能です。 このオプションを使用するには、 信頼済みコンテキストを接続リソース上で有効にしなければなりません。</p>   <code>trusted_password</code>   <p>trusted_user キーで指定したユーザーに対応するパスワード (文字列)。</p>   <p>以下の新しいオプションが、ibm_db2 バージョン 1.6.0 以降で使用可能です。 これらは、有用な情報を提供します。これらの情報は、 <code>db2_get_option()</code> によって取得します。</p> <p><b>注意</b>:</p> <p>各オプションの値を設定する際、 サーバーによっては指定したすべての内容を処理できないことがあります。 その場合、値が切り詰められます。</p> <p>指定したオプションが正しく変換されてホストシステムに送信されることを確実にするには、 A から Z までの文字と 0 から 9 までの数字、そしてアンダースコア (_) とピリオド (.) のみを使用するようにします。</p>    <code>userid</code>   <p><i>SQL_ATTR_INFO_USERID</i> - ヌル終端の文字列へのポインタで、DB2 接続の際にホストデータベースサーバーに送信する クライアントのユーザー ID として使用します。</p>  <p><b>注意</b>:</p> <p>z/OS および OS/390 サーバー版の DB2 は 16 文字までの長さをサポートしています。 このユーザー ID を、認証時に使用するユーザー ID と混同しないでください。 これは識別のためだけに使用するものであり、認証には用いられません。</p>    <code>acctstr</code>   <p><i>SQL_ATTR_INFO_ACCTSTR</i> - ヌル終端の文字列へのポインタで、DB2 接続の際にホストデータベースサーバーに送信する クライアントのアカウンティング・ストリングとして使用します。</p>  <p><b>注意</b>:</p> <p>z/OS および OS/390 サーバー版の DB2 は 200 文字までの長さをサポートしています。</p>    <code>applname</code>   <p><i>SQL_ATTR_INFO_APPLNAME</i> - ヌル終端の文字列へのポインタで、DB2 接続の際にホストデータベースサーバーに送信する クライアントのアプリケーション名として使用します。</p>  <p><b>注意</b>:</p> <p>z/OS および OS/390 サーバー版の DB2 は 32 文字までの長さをサポートしています。</p>    <code>wrkstnname</code>   <p><i>SQL_ATTR_INFO_WRKSTNNAME</i> - ヌル終端の文字列へのポインタで、DB2 接続の際にホストデータベースサーバーに送信する クライアントのワークステーション名として使用します。</p>  <p><b>注意</b>:</p> <p>z/OS および OS/390 サーバー版の DB2 は 18 文字までの長さをサポートしています。</p>
	 * @param int $type <p>この関数に渡すリソースの型を、整数値で指定します。 リソースの型とこの値は必ず一致していなければなりません。</p> <p><i>1</i> は、 接続リソースがこの関数に渡されることを表します。</p> <p><i>1</i> 以外の整数を指定すると、 ステートメントリソースがこの関数に渡されることを表します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-set-option.php
	 * @see db2_connect(), db2_pconnect(), db2_exec(), db2_prepare(), db2_cursor_type()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_set_option($resource, array $options, int $type): bool {}

	/**
	 * テーブルのユニーク行 ID カラムを含む結果セットを返す
	 * <p>テーブルのユニーク行 ID カラムを含む結果セットを返します。</p>
	 * @param resource $connection <p>IBM DB2、Cloudscape あるいは Apache Derby データベースへの有効な接続。</p>
	 * @param string $qualifier <p>OS/390 あるいは z/OS サーバー上で稼動している DB2 データベースの修飾子。 その他のデータベースの場合には <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $schema <p>テーブルを含むスキーマ。</p>
	 * @param string $table_name <p>テーブルの名前。</p>
	 * @param int $scope <p>ユニーク行 ID の有効期間の最小値を表す整数値。 以下の値のいずれかとなります。</p>   整数値 SQL 定数 説明     0 SQL_SCOPE_CURROW 行 ID は、カーソルがその行にある場合にのみ有効です。   1 SQL_SCOPE_TRANSACTION 行 ID は、そのトランザクションの間のみ有効です。   2 SQL_SCOPE_SESSION 行 ID は、その接続の間のみ有効です。
	 * @return resource <p>テーブルのユニーク行 ID 情報を含む結果セットの ステートメントリソースを返します。 行の内容は、以下のカラムで構成されています。</p>   カラム名 説明     SCOPE  <p></p>    整数値 SQL 定数 説明     0 SQL_SCOPE_CURROW 行 ID は、カーソルがその行にある場合にのみ有効です。   1 SQL_SCOPE_TRANSACTION 行 ID は、そのトランザクションの間のみ有効です。   2 SQL_SCOPE_SESSION 行 ID は、その接続の間のみ有効です。       COLUMN_NAME ユニークカラムの名前。   DATA_TYPE カラムの SQL データ型。   TYPE_NAME カラムの SQL データ型を文字列で表したもの。   COLUMN_SIZE カラムのサイズを表す整数値。   BUFFER_LENGTH  このカラムのデータを保存するために必要な最大のバイト数。    DECIMAL_DIGITS  カラムの位取り。位取りが適用できない場合は <b><code>NULL</code></b>。    NUM_PREC_RADIX  <i>10</i> (正確な数値データ型を表す)、 <i>2</i> (概数データ型を表す)、 あるいは <b><code>NULL</code></b> (基数が適用できないデータ型を表す) のいずれか。    PSEUDO_COLUMN 常に 1 を返します。
	 * @link https://php.net/manual/ja/function.db2-special-columns.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_statistics(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_special_columns($connection, string $qualifier, string $schema, string $table_name, int $scope) {}

	/**
	 * インデックスの情報およびテーブルの統計情報を含む結果セットを返す
	 * <p>インデックスの情報およびテーブルの統計情報を含む結果セットを返します。</p>
	 * @param resource $connection <p>IBM DB2、Cloudscape あるいは Apache Derby データベースへの有効な接続。</p>
	 * @param string $qualifier <p>OS/390 あるいは z/OS サーバー上で稼動している DB2 データベースの修飾子。 その他のデータベースの場合には <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $schema <p>対象となるテーブルを含むスキーマ。 このパラメータを <b><code>NULL</code></b> にすると、現在のユーザーのスキーマについての 統計およびインデックスが返されます。</p>
	 * @param string $table_name <p>テーブルの名前。</p>
	 * @param bool $unique <p>返されるインデックスの型を表す整数値。</p>  <code>0</code>   <p>テーブルのユニークインデックスについての情報のみを返します。</p>   <code>1</code>   <p>テーブルのすべてのインデックスについての情報を返します。</p>
	 * @return resource <p>指定したパラメータに一致するテーブルの統計およびインデックスを含む ステートメントリソースを返します。 行の内容は、以下のカラムで構成されています。</p>   カラム名 説明     TABLE_CAT  テーブルを含むカタログの名前。テーブルがカタログを保持していない場合は <b><code>NULL</code></b>。    TABLE_SCHEM テーブルを含むスキーマの名前。   TABLE_NAME テーブルの名前。   NON_UNIQUE  <p>インデックスが一意でなければならないかどうか、 あるいはその行がテーブルの統計情報であるかどうかを表す整数値。</p>    返り値 パラメータの型     0 (SQL_FALSE) インデックスは、重複した値をとることができます。   1 (SQL_TRUE) インデックスは、一意でなければなりません。   <b><code>NULL</code></b> この行は、テーブル自身についての統計情報です。       INDEX_QUALIFIER  インデックスの資格を満たすため、INDEX_NAME の先頭に付加しなければならない修飾子を表す文字列。    INDEX_NAME インデックスの名前を表す文字列。   TYPE  <p>結果セットのこの行に含まれる情報の型を表す整数値。</p>    返り値 パラメータの型     0 (SQL_TABLE_STAT) この行は、テーブル自身の統計情報を含みます。   1 (SQL_INDEX_CLUSTERED) この行は、クラスタ化インデックスについての情報を含みます。   2 (SQL_INDEX_HASH) この行は、ハッシュインデックスについての情報を含みます。   3 (SQL_INDEX_OTHER)  この行は、クラスタ化もハッシュも行われていない インデックスについての情報を含みます。        ORDINAL_POSITION  インデックス内の、1 から始まるカラムの位置。 その行がテーブル自身についての統計情報を含んでいる場合は <b><code>NULL</code></b>。    COLUMN_NAME  インデックス内のカラムの名前。 その行がテーブル自身についての統計情報を含んでいる場合は <b><code>NULL</code></b>。    ASC_OR_DESC  カラムの並び順が昇順の場合は <i>A</i>、 降順の場合は <i>D</i>、 その行がテーブル自身についての統計情報を含んでいる場合は <b><code>NULL</code></b>。    CARDINALITY  <p>その行がインデックスの情報を含んでいる場合、このカラムには インデックス内の一意な値の数を表す整数値が含まれます。</p> <p>その行がテーブル自身についての情報を含んでいる場合、 このカラムにはテーブルの行数を表す整数値が含まれます。</p>    PAGES  <p>その行がインデックスの情報を含んでいる場合、このカラムには インデックスを保存するために使用しているページ数を表す整数値が含まれます。</p> <p>その行がテーブル自身についての情報を含んでいる場合、このカラムには テーブルを保存するために使用しているページ数を表す整数値が含まれます。</p>    FILTER_CONDITION 常に <b><code>NULL</code></b>。
	 * @link https://php.net/manual/ja/function.db2-statistics.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_table_privileges(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_statistics($connection, string $qualifier, string $schema, string $table_name, bool $unique) {}

	/**
	 * SQL 文が返す SQLSTATE を含む文字列を返す
	 * <p>SQL 文が返す SQLSTATE を含む文字列を返します。</p><p><b>db2_stmt_error()</b> の引数にステートメントリソースを 渡さなかった場合は、直近で (例えば <code>db2_prepare()</code> あるいは <code>db2_exec()</code> を使用して) 返そうとしたステートメントリソースに関連する SQLSTATE を返します。</p><p>SQLSTATE の値の意味を調べるには、DB2 コマンドラインプロセッサのプロンプトで 次のコマンドを発行します。 <b><code>db2 '&#63; <code>sqlstate-value</code>'</code></b> また、<code>db2_stmt_errormsg()</code> をコールして、 明示的なエラーメッセージと、それに関連する SQLCODE の値を取得することも可能です。</p>
	 * @param resource $stmt <p>有効なステートメントリソース。</p>
	 * @return string <p>SQLSTATE を含む文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-stmt-error.php
	 * @see db2_conn_error(), db2_conn_errormsg(), db2_stmt_errormsg()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_stmt_error($stmt = NULL): string {}

	/**
	 * 直近の SQL 文のエラーメッセージを含む文字列を返す
	 * <p>直近の SQL 文のエラーメッセージを含む文字列を返します。</p><p><b>db2_stmt_errormsg()</b> の引数にステートメントリソースを 渡さなかった場合は、直近で (例えば <code>db2_prepare()</code> あるいは <code>db2_exec()</code> を使用して) 返そうとしたステートメントリソースに関連するエラーメッセージを返します。</p>
	 * @param resource $stmt <p>有効なステートメントリソース。</p>
	 * @return string <p>SQL 文の発行により直近に発生したエラーを表す エラーメッセージおよび SQLSTATE を返します。</p>
	 * @link https://php.net/manual/ja/function.db2-stmt-errormsg.php
	 * @see db2_conn_error(), db2_conn_errormsg(), db2_stmt_error()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_stmt_errormsg($stmt = NULL): string {}

	/**
	 * データベース内のテーブルおよび関連する権限情報を含む結果セットを返す
	 * <p>データベース内のテーブルおよび関連する権限情報を含む結果セットを返します。</p>
	 * @param resource $connection <p>IBM DB2、Cloudscape あるいは Apache Derby データベースへの有効な接続。</p>
	 * @param string $qualifier <p>OS/390 あるいは z/OS サーバー上で稼動している DB2 データベースの修飾子。 その他のデータベースの場合には <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $schema <p>テーブルを含むスキーマ。このパラメータには、ワイルドカードとして <i>_</i> および <i>%</i> を含む検索パターンを指定することができます。</p>
	 * @param string $table_name <p>テーブルの名前。このパラメータには、ワイルドカードとして <i>_</i> および <i>%</i> を含む検索パターンを指定することができます。</p>
	 * @return resource <p>指定したパラメータに一致するテーブルの権限情報を含むステートメントリソースを返します。 行の内容は、以下のカラムで構成されています。</p>   カラム名 説明     TABLE_CAT  テーブルを含むカタログの名前。テーブルがカタログを保持していない場合は <b><code>NULL</code></b>。    TABLE_SCHEM テーブルを含むスキーマの名前。   TABLE_NAME テーブルの名前。   GRANTOR その権限を与えたユーザーの認証 ID。   GRANTEE その権限を与えられたユーザーの認証 ID。   PRIVILEGE  与えられた権限。ALTER、 CONTROL、DELETE、INDEX、INSERT、REFERENCES、SELECT あるいは UPDATE のいずれかです。    IS_GRANTABLE  grantee が、この権限を他のユーザーに与えることができるかどうかを、 文字列 "YES" あるいは "NO" で表す。
	 * @link https://php.net/manual/ja/function.db2-table-privileges.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_tables()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_table_privileges($connection, string $qualifier = NULL, string $schema = NULL, string $table_name = NULL) {}

	/**
	 * データベース内のテーブルおよび関連するメタデータを含む結果セットを返す
	 * <p>データベース内のテーブルおよび関連するメタデータを含む結果セットを返します。</p>
	 * @param resource $connection <p>IBM DB2、Cloudscape あるいは Apache Derby データベースへの有効な接続。</p>
	 * @param string $qualifier <p>OS/390 あるいは z/OS サーバー上で稼動している DB2 データベースの修飾子。 その他のデータベースの場合には <b><code>NULL</code></b> あるいは空の文字列を渡します。</p>
	 * @param string $schema <p>テーブルを含むスキーマ。このパラメータでは、ワイルドカードとして <i>_</i> および <i>%</i> を含む検索パターンを使用可能です。</p>
	 * @param string $table_name <p>テーブルの名前。このパラメータでは、ワイルドカードとして <i>_</i> および <i>%</i> を含む検索パターンを使用可能です。</p>
	 * @param string $table_type <p>テーブル型の識別子をカンマで区切ったリスト。 すべてのテーブル型を指定するには、<b><code>NULL</code></b> あるいは空の文字列を指定します。 有効なテーブル型識別子は ALIAS、HIERARCHY TABLE、INOPERATIVE VIEW、NICKNAME、 MATERIALIZED QUERY TABLE、SYSTEM TABLE、TABLE、TYPED TABLE、TYPED VIEW および VIEW です。</p>
	 * @return resource <p>指定したパラメータに一致するテーブルの情報を含む結果セットのリソースを返します。 行の内容は、以下のカラムで構成されています。</p>   カラム名 説明     TABLE_CAT  テーブルを含むカタログ。テーブルがカタログを保持していない場合は <b><code>NULL</code></b>。    TABLE_SCHEM テーブルを含むスキーマの名前。   TABLE_NAME テーブルの名前。   TABLE_TYPE テーブルの型識別子。   REMARKS テーブルの説明。
	 * @link https://php.net/manual/ja/function.db2-tables.php
	 * @see db2_column_privileges(), db2_columns(), db2_foreign_keys(), db2_primary_keys(), db2_procedure_columns(), db2_procedures(), db2_special_columns(), db2_statistics(), db2_table_privileges()
	 * @since PECL ibm_db2 >= 1.0.0
	 */
	function db2_tables($connection, string $qualifier = NULL, string $schema = NULL, string $table_name = NULL, string $table_type = NULL) {}

	/**
	 * 自動コミットを無効にします。
	 */
	define('DB2_AUTOCOMMIT_OFF', null);

	/**
	 * 自動コミットを有効にします。
	 */
	define('DB2_AUTOCOMMIT_ON', null);

	/**
	 * バイナリデータをそのままの形式で返します。デフォルトのモードです。
	 */
	define('DB2_BINARY', null);

	/**
	 * カラム名を小文字に変換して返します。
	 */
	define('DB2_CASE_LOWER', null);

	/**
	 * カラム名の大文字小文字を変換せずに返します。
	 */
	define('DB2_CASE_NATURAL', null);

	/**
	 * カラム名を大文字に変換して返します。
	 */
	define('DB2_CASE_UPPER', null);

	/**
	 * 変数を、データ型 CHAR あるいは VARCHAR にバインドします。
	 */
	define('DB2_CHAR', null);

	/**
	 * バイナリデータを十六進表現にエンコードし、ASCII 文字列として返します。
	 */
	define('DB2_CONVERT', null);

	/**
	 * 指定したステートメントリソースについて、遅延プリペアを無効にします。
	 */
	define('DB2_DEFERRED_PREPARE_OFF', null);

	/**
	 * 指定したステートメントリソースについて、遅延プリペアを有効にします。
	 */
	define('DB2_DEFERRED_PREPARE_ON', null);

	/**
	 * 変数を、データ型 DOUBLE、FLOAT あるいは REAL にバインドします。
	 */
	define('DB2_DOUBLE', null);

	/**
	 * ステートメントのリソースとして、前進のみ可能なカーソルを指定します。 これはデフォルトのカーソル型であり、 すべてのデータベースサーバーでサポートされています。
	 */
	define('DB2_FORWARD_ONLY', null);

	/**
	 * 変数を、データ型 SMALLINT、INTEGER あるいは BIGINT にバインドします。
	 */
	define('DB2_LONG', null);

	/**
	 * カラムを直接ファイルにバインドし、そのデータを読み込みます。
	 */
	define('DB2_PARAM_FILE', null);

	/**
	 * PHP 変数を、ストアドプロシージャの IN パラメータとしてバインドします。
	 */
	define('DB2_PARAM_IN', null);

	/**
	 * PHP 変数を、ストアドプロシージャの INOUT パラメータとしてバインドします。
	 */
	define('DB2_PARAM_INOUT', null);

	/**
	 * PHP 変数を、ストアドプロシージャの OUT パラメータとしてバインドします。
	 */
	define('DB2_PARAM_OUT', null);

	/**
	 * バイナリデータを <b><code>NULL</code></b> 値に変換します。
	 */
	define('DB2_PASSTHRU', null);

	/**
	 * ステートメントのリソースとして、スクロール可能なカーソルを指定します。 このモードでは結果セット内の行へのランダムアクセスが可能となりますが、 現在は IBM DB2 Universal Database でしかサポートされていません。
	 */
	define('DB2_SCROLLABLE', null);

}
