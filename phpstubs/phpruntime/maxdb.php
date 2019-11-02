<?php



namespace {

	/**
	 * 直前の MaxDB の操作で変更された行数を取得する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_affected_rows()</b> は、与えられた <code>link</code> パラメータに関連した直近の INSERT、UPDATE あるいは DELETE クエリによって変更された行の数を返します。 この数が決定できない場合には、-1 を返します。</p><p><b>注意</b>:</p><p>SELECT 文の場合には、<b>maxdb_affected_rows()</b> は <code>maxdb_num_rows()</code> と同じように動作します。</p><p><b>maxdb_affected_rows()</b> 関数は、 テーブルを変更するようなクエリについてのみ動作します。 SELECT クエリの返す行数を調べるには、代わりに <code>maxdb_num_rows()</code> を使用してください。</p>
	 * @param resource $link
	 * @return int <p>ゼロより大きい整数の場合は、変更された行数あるいは取得された行数を表します。 ゼロの場合は、UPDATE ステートメントで行が更新されなかった、 WHERE 句に一致する行がなかった、あるいはクエリが実行されなかったなどを表します。 -1 の場合は、変更された行数が取得できなかったことを表します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-affected-rows.php
	 * @see maxdb_num_rows(), maxdb_info()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_affected_rows($link): int {}

	/**
	 * データベースの変更内容の自動コミット機能を有効あるいは無効にする
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_autocommit()</b> は、<code>link</code> リソースが表すデータベース接続上のクエリについて、 自動コミットモードを有効または無効にするために使用されます。</p>
	 * @param resource $link
	 * @param bool $mode
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-autocommit.php
	 * @see maxdb_commit(), maxdb_rollback()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_autocommit($link, bool $mode): bool {}

	/**
	 * maxdb_stmt_bind_param() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>maxdb_stmt_bind_param()</code></p><p>この関数エイリアスは非推奨であり、下位互換性維持のために残されています。 今後、PHP から削除される可能性がありますので、この関数を使用しないことを推奨します。</p>
	 * @param resource $stmt
	 * @param string $types
	 * @param mixed $var1
	 * @param mixed $_
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-bind-param.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_bind_param($stmt, string $types, &$var1, &$_ = NULL): bool {}

	/**
	 * maxdb_stmt_bind_result() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>maxdb_stmt_bind_result()</code>.</p><p>この関数エイリアスは非推奨であり、下位互換性維持のために残されています。 今後、PHP から削除される可能性がありますので、この関数を使用しないことを推奨します。</p>
	 * @param resource $stmt
	 * @param mixed $var1
	 * @param mixed $_
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-bind-result.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_bind_result($stmt, &$var1, &$_ = NULL): bool {}

	/**
	 * 指定したデータベース接続のユーザーを変更する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_change_user()</b> は、パラメータ <code>link</code> で指定したデータベース接続のユーザーを変更し、現在のデータベースを <code>database</code> で指定したものに変更するために使用します。</p><p>ユーザーの変更を行うには、<code>username</code> および <code>password</code> に有効な値が指定されていること、 そして指定したデータベースに対する適切なアクセス権がユーザーに与えられていることが必要です。 何らかの理由で認証に失敗すると、現在のユーザー認証のままの状態となります。</p><p><b>注意</b>:</p><p>このコマンドを使用すると、その操作が正常に終了したか否かにかかわらず、 新しくデータベースに接続したのと同じように扱われます。つまり、 現在アクティブなトランザクションはすべてロールバックされ、 一時テーブルはすべて閉じられ、テーブルに対するロックもすべて解除されます。</p>
	 * @param resource $link
	 * @param string $user
	 * @param string $password
	 * @param string $database
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-change-user.php
	 * @see maxdb_connect(), maxdb_select_db()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_change_user($link, string $user, string $password, string $database): bool {}

	/**
	 * データベース接続のデフォルトの文字セットを返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><code>link</code> パラメータで指定したデータベース接続の、 現在の文字セットを返します。</p>
	 * @param resource $link
	 * @return string <p>現在の接続のデフォルトの文字セットを、ascii あるいは unicode で返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-character-set-name.php
	 * @see maxdb_client_encoding(), maxdb_real_escape_string()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_character_set_name($link): string {}

	/**
	 * maxdb_character_set_name() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>maxdb_character_set_name()</code>.</p><p>この関数エイリアスは非推奨であり、下位互換性維持のために残されています。 今後、PHP から削除される可能性がありますので、この関数を使用しないことを推奨します。</p>
	 * @param resource $link
	 * @return string
	 * @link https://php.net/manual/ja/function.maxdb-client-encoding.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_client_encoding($link): string {}

	/**
	 * 事前にオープンされたデータベース接続を閉じる
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_close()</b> 関数は、<code>link</code> パラメータで指定したデータベース接続 (事前にオープンされたもの) を閉じます。</p>
	 * @param resource $link
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-close.php
	 * @see maxdb_connect(), maxdb_init(), maxdb_real_connect()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_close($link): bool {}

	/**
	 * maxdb_stmt_close_long_data() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>maxdb_stmt_close_long_data()</code>.</p><p>この関数エイリアスは非推奨であり、下位互換性維持のために残されています。 今後、PHP から削除される可能性がありますので、この関数を使用しないことを推奨します。</p>
	 * @param resource $stmt
	 * @param int $param_nr
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-close-long-data.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_close_long_data($stmt, int $param_nr): bool {}

	/**
	 * 現在のトランザクションをコミットする
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><code>link</code> パラメータで指定したデータベース接続について、 現在のトランザクションをコミットします。</p>
	 * @param resource $link
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-commit.php
	 * @see maxdb_autocommit(), maxdb_rollback()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_commit($link): bool {}

	/**
	 * MaxDB サーバーへの新しい接続をオープンする
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_connect()</b> 関数は、<code>host</code> で稼動している MaxDB サーバーへの接続をオープンしようと試みます。 <code>host</code> にはホスト名あるいは IP アドレスが指定可能です。 "localhost" を渡すと、ローカルホストが使用されます。接続に成功すると、 <b>maxdb_connect()</b> はデータベースへの接続を表すリソースを返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><code>username</code> および <code>password</code> で、MaxDB サーバーに接続する際のユーザー名およびパスワードを指定します。 パスワードが指定されなかった場合 (<b><code>NULL</code></b> が渡された場合) は、php.ini の <code>maxdb.default_pw</code> を使用して MaxDB サーバーへの接続を試みます。</p><p><code>dbname</code> では、 クエリを実行する際のデフォルトのデータベースを指定します。 指定されなかった場合は、php.ini の <code>maxdb.default_db</code> エントリの内容が使用されます。</p><p><code>port</code> および <code>socket</code> は、MaxDB サーバーでは無視されます。</p>
	 * @param string $host
	 * @param string $username
	 * @param string $passwd
	 * @param string $dbname
	 * @param int $port
	 * @param string $socket
	 * @return resource <p>MaxDB サーバーへの接続を表す文字列、あるいは接続に失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-connect.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_connect(string $host = NULL, string $username = NULL, string $passwd = NULL, string $dbname = NULL, int $port = 0, string $socket = NULL) {}

	/**
	 * 直近の接続コールのエラーコードを返す
	 * <p><b>maxdb_connect_errno()</b> 関数は、 直近の <code>maxdb_connect()</code> のコールのエラーコードを返します。 エラーが発生しなかった場合は、この関数はゼロを返します。</p>
	 * @return int <p>直近の <code>maxdb_connect()</code> のコールのエラーコードを返します。 ゼロの場合は、エラーが発生しなかったことを意味します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-connect-errno.php
	 * @see maxdb_connect(), maxdb_connect_error(), maxdb_errno(), maxdb_error(), maxdb_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_connect_errno(): int {}

	/**
	 * 直近の接続エラーについての説明を文字列で返す
	 * <p><b>maxdb_connect_error()</b> 関数は、対応する <code>maxdb_connect_errno()</code> 関数とほぼ同じですが、 直近の <code>maxdb_connect()</code> call で発生したエラーについて、 エラーコードの代わりに文字列を返します。エラーが発生しなかった場合は、 この関数は空の文字列を返します。</p>
	 * @return string <p>エラーについての文字列を返します。 エラーが発生しなかった場合は空の文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-connect-error.php
	 * @see maxdb_connect(), maxdb_connect_errno(), maxdb_errno(), maxdb_error(), maxdb_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_connect_error(): string {}

	/**
	 * 結果ポインタを、結果の任意の行に移動する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_data_seek()</b> 関数は、<code>result</code> が表す結果セットの <code>offset</code> で指定した任意の位置に、 結果ポインタを移動します。<code>offset</code> は、 ゼロから全行数マイナス 1 の間 (0..<code>maxdb_num_rows()</code> - 1) でなければなりません。</p>
	 * @param resource $result
	 * @param int $offset
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-data-seek.php
	 * @see maxdb_store_result(), maxdb_fetch_row(), maxdb_num_rows()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_data_seek($result, int $offset): bool {}

	/**
	 * デバッグ操作を行う
	 * <p><b>maxdb_debug()</b> は、SQLDBC 通信をトレースするために使用されます。以下の文字列が、 <b>maxdb_debug()</b> に対するパラメータとして使用可能です。</p>
	 * @param string $debug
	 * @return void <p><b>maxdb_debug()</b> は、何も値を返しません。</p>
	 * @link https://php.net/manual/ja/function.maxdb-debug.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_debug(string $debug): void {}

	/**
	 * マスタからの読み込みを無効にする
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-disable-reads-from-master.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_disable_reads_from_master($link): bool {}

	/**
	 * RPL のパースを無効にする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-disable-rpl-parse.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_disable_rpl_parse($link): bool {}

	/**
	 * デバッグ情報をログに出力する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-dump-debug-info.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_dump_debug_info($link): bool {}

	/**
	 * 組み込み MaxDB サーバーへの接続をオープンする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $dbname
	 * @return resource
	 * @link https://php.net/manual/ja/function.maxdb-embedded-connect.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_embedded_connect(string $dbname = NULL) {}

	/**
	 * マスタからの読み込みを有効にする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-enable-reads-from-master.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_enable_reads_from_master($link): bool {}

	/**
	 * RPL のパースを有効にする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-enable-rpl-parse.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_enable_rpl_parse($link): bool {}

	/**
	 * 直近の関数コールのエラーコードを返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_errno()</b> 関数は、<code>link</code> で指定したデータベースリンクに関して、直近の MaxDB 関数コールのエラーコードを返します。 エラーが発生しなかった場合は、この関数はゼロを返します。</p>
	 * @param resource $link
	 * @return int <p>直近のコールのエラーコードの値を返します。 ゼロの場合は、エラーが発生しなかったことを意味します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-errno.php
	 * @see maxdb_connect_errno(), maxdb_connect_error(), maxdb_error(), maxdb_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_errno($link): int {}

	/**
	 * 直近のエラーについて説明する文字列を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_error()</b> 関数は、対応する <code>maxdb_errno()</code> 関数とあらゆる点で同じです。 ただ <b>maxdb_error()</b> は、 整数のエラーコードは返しません。代わりに、 <code>link</code> で表されるデータベース接続で、 直近に発生したエラーを説明する文字列を返します。 エラーが発生しなかった場合は、この関数は空の文字列を返します。</p>
	 * @param resource $link
	 * @return string <p>エラーを表す文字列を返します。 エラーが発生しなかった場合は空の文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-error.php
	 * @see maxdb_connect_errno(), maxdb_connect_error(), maxdb_errno(), maxdb_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_error($link): string {}

	/**
	 * maxdb_real_escape_string() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>maxdb_real_escape_string()</code>.</p>
	 * @param resource $link
	 * @param string $escapestr
	 * @return string
	 * @link https://php.net/manual/ja/function.maxdb-escape-string.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_escape_string($link, string $escapestr): string {}

	/**
	 * maxdb_stmt_execute() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>maxdb_stmt_execute()</code>.</p><p>この関数エイリアスは非推奨であり、下位互換性維持のために残されています。 今後、PHP から削除される可能性がありますので、この関数を使用しないことを推奨します。</p>
	 * @param resource $stmt
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-execute.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_execute($stmt): bool {}

	/**
	 * maxdb_stmt_fetch() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>maxdb_stmt_fetch()</code>.</p><p>この関数エイリアスは非推奨であり、下位互換性維持のために残されています。 今後、PHP から削除される可能性がありますので、この関数を使用しないことを推奨します。</p>
	 * @param resource $stmt
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-fetch.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_fetch($stmt): bool {}

	/**
	 * 結果の行を連想配列、数値添字配列あるいはその両方で取得する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>取得した行に対応する配列を返します。 <code>result</code> が表す結果セットに行がもう存在しない場合には <b><code>NULL</code></b> を返します。</p><p><b>maxdb_fetch_array()</b> は <code>maxdb_fetch_row()</code> 関数を拡張したものです。 データを数値添字の配列に保存することに加え、 <b>maxdb_fetch_array()</b> 関数は結果を連想配列でも保存します。 その際は、結果セットのフィールド名をキーとして使用します。</p><p><b>注意</b>: この関数により返されるフィー ルド名は <i>大文字小文字を区別</i> します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p><p>結果の中に同名のカラムが複数存在する場合は、最後のカラムが優先され、 その前に現れたデータを上書きします。同名の複数のカラムにアクセスするには、 数値添字形式の配列を使用します。</p><p>オプションの 2 番目の引数 <code>resulttype</code> は、 行データからどのような形式の配列を作成するかを指定する定数です。 このパラメータに指定可能な値は、 MAXDB_ASSOC、MAXDB_ASSOC_UPPER、MAXDB_ASSOC_LOWER、MAXDB_NUM あるいは MAXDB_BOTH のいずれかです。デフォルトでは <b>maxdb_fetch_array()</b> 関数は MAXDB_BOTH を使用します。これは、このパラメータに MAXDB_NUM および MAXDB_ASSOC を指定したのと同じ動作をします。</p><p>定数 MAXDB_ASSOC を使用すると、この関数は <code>maxdb_fetch_assoc()</code> と同じように動作します。一方、MAXDB_NUM の場合は <code>maxdb_fetch_row()</code> と同じ動作となります。 最後のオプション MAXDB_BOTH は、両方の属性をひとつの配列に含めます。</p><p>定数 MAXDB_ASSOC_UPPER を使用すると、この関数の動作は MAXDB_ASSOC を使用した場合とほぼ同じになります。ただ、 配列のインデックスが、フィールド名を大文字にしたものになるという点が違います。</p><p>定数 MAXDB_ASSOC_LOWER を使用すると、この関数の動作は MAXDB_ASSOC を使用した場合とほぼ同じになります。ただ、 配列のインデックスが、フィールド名を小文字にしたものになるという点が違います。</p>
	 * @param resource $result
	 * @param int $resulttype
	 * @return mixed <p>取得した行に対応する配列、あるいは結果セットに行がもうない場合に <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-fetch-array.php
	 * @see maxdb_fetch_assoc(), maxdb_fetch_row()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_array($result, int $resulttype = NULL) {}

	/**
	 * 結果の行を連想配列として取得する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>取得した行に対応する連想配列を返します。行がもう存在しない場合には <b><code>NULL</code></b> を返します。</p><p><b>maxdb_fetch_assoc()</b> 関数は、<code>result</code> が表す結果の結果セット内の次の行を表す連想配列を返すために使用されます。 連想配列の各キーは、結果セットのカラム名を表します。</p><p>結果の中に同名のカラムが複数存在する場合は、最後のカラムが優先されます。 同名の他のカラムにアクセスするには、 <code>maxdb_fetch_row()</code> を使用して数値添字の配列を使用するか、 あるいはカラム名のエイリアスを使用します。</p><p><b>注意</b>: この関数により返されるフィー ルド名は <i>大文字小文字を区別</i> します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
	 * @param resource $result
	 * @return array <p>取得した行に対応する配列、あるいは結果セットに行がもうない場合に <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-fetch-assoc.php
	 * @see maxdb_fetch_array(), maxdb_fetch_row()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_assoc($result): array {}

	/**
	 * 結果セットの次のフィールドを返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_fetch_field()</b> は、結果セットのカラムの定義を リソースとして返します。この関数を繰り返しコールすると、 結果セットのすべてのカラムの情報を取得できます。 <b>maxdb_fetch_field()</b> は、フィールドがもう残っていない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @param resource $result
	 * @return mixed <p>フィールド定義の情報を含むリソースを返します。 フィールド情報が取得できない場合には <b><code>FALSE</code></b> を返します。</p> <b>オブジェクトのプロパティ</b>   プロパティ 説明     name カラムの名前   max_length 結果セットのフィールドの最大幅   type このフィールドのデータ型   decimals 使用している桁数 (整数フィールドの場合)
	 * @link https://php.net/manual/ja/function.maxdb-fetch-field.php
	 * @see maxdb_num_fields(), maxdb_fetch_field_direct(), maxdb_fetch_fields(), maxdb_field_seek()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_field($result) {}

	/**
	 * 単一のフィールドのメタデータを取得する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_fetch_field_direct()</b> は、 指定した結果セットのフィールド定義情報を含むリソースを返します。 fieldnr の値は、<i>0</i> から <i>フィールド数 - 1</i> の間でなければなりません。</p>
	 * @param resource $result
	 * @param int $fieldnr
	 * @return mixed <p>フィールド定義情報を含むリソースを返します。 指定した <i>fieldnr</i> に対応するフィールド情報が存在しない場合は <b><code>FALSE</code></b> を返します。</p> <b>オブジェクトの属性</b>   属性 説明     name カラムの名前   max_length 結果セットのフィールドの最大幅   type このフィールドのデータ型   decimals 使用している桁数 (整数フィールドの場合)
	 * @link https://php.net/manual/ja/function.maxdb-fetch-field-direct.php
	 * @see maxdb_num_fields(), maxdb_fetch_field(), maxdb_fetch_fields()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_field_direct($result, int $fieldnr) {}

	/**
	 * 結果セット内のフィールドを表すリソースの配列を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、<code>maxdb_fetch_field()</code> と同じ目的で使用します。ただひとつの違いは、 各フィールドに対してひとつづつリソースを返すのではなく、 リソースの配列を返すという点です。</p>
	 * @param resource $result
	 * @return mixed <p>フィールド定義の情報を含む、リソースの配列を返します。 フィールド情報が存在しない場合には <b><code>FALSE</code></b> を返します。</p> <b>オブジェクトのプロパティ</b>   プロパティ 説明     name カラムの名前   max_length 結果セットのフィールドの最大幅   type このフィールドのデータ型   decimals 使用している桁数 (整数フィールドの場合)
	 * @link https://php.net/manual/ja/function.maxdb-fetch-fields.php
	 * @see maxdb_num_fields(), maxdb_fetch_field(), maxdb_fetch_field_direct()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_fields($result) {}

	/**
	 * 結果セットの現在の行のカラムの長さを返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_fetch_lengths()</b> 関数は、<code>result</code> が表す結果セット内の現在の行の、すべてのカラムの長さを配列で返します。 成功した場合はカラムの長さを含む数値添字の配列、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @param resource $result
	 * @return array <p>各カラムの長さ (終端の null 文字を含まない) を表す整数値の配列、 あるいはエラー時には <b><code>FALSE</code></b> を返します。</p><p><b>maxdb_fetch_lengths()</b> は、 結果セットの現在の行に対してのみ有効です。 maxdb_fetch_row/array/resource をコールする前や、 結果セットのすべての行を取得した後にこの関数をコールすると、 <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-fetch-lengths.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_lengths($result): array {}

	/**
	 * 結果セットの現在の行をオブジェクトとして返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_fetch_object()</b> は、結果セットの現在の行を オブジェクトとして返します。オブジェクトの属性が結果セットのフィールド名に対応します。 現在の結果セットに行がもう存在しない場合は <b><code>NULL</code></b> が返されます。</p>
	 * @param object $result
	 * @return object <p>取得した行に対応するオブジェクトを返します。行がもう存在しない場合には <b><code>NULL</code></b> を返します。</p><p><b>注意</b>: この関数により返されるフィー ルド名は <i>大文字小文字を区別</i> します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-fetch-object.php
	 * @see maxdb_fetch_array(), maxdb_fetch_assoc(), maxdb_fetch_row()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_object(object $result): object {}

	/**
	 * 結果の行を数値添字の配列として取得する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>取得した行に対応する連想配列を返します。行がもう存在しない場合には <b><code>NULL</code></b> を返します。</p><p><b>maxdb_fetch_row()</b> は、<code>result</code> で表される結果セットから行のデータを取得し、 それを数値添字の配列で返します。各カラムは、0 (ゼロ) から始まる添字で保存されます。これ以降の <b>maxdb_fetch_row()</b> 関数のコールでは、 結果セット内の次の行を返します。もう行が存在しない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @param resource $result
	 * @return mixed <p><b>maxdb_fetch_row()</b> は、取得した行に対応する配列を返します。 結果セットに行がもうない場合には <b><code>NULL</code></b> を返します。</p><p><b>注意</b>: この関数は、 NULL フィールドに PHPの <b><code>NULL</code></b> 値を設定します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-fetch-row.php
	 * @see maxdb_fetch_array(), maxdb_fetch_assoc()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_fetch_row($result) {}

	/**
	 * 直近のクエリのカラム数を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><code>link</code> で表される接続の、 直近のクエリのカラム数を返します。クエリの詳細を知らなくても そのクエリが結果を返すかどうかを知ることができるので、 この関数は <code>maxdb_store_result()</code> を使用する際に有用です。</p>
	 * @param resource $link
	 * @return int <p>結果セットのフィールド数を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-field-count.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_field_count($link): int {}

	/**
	 * 結果ポインタを、指定したフィールドオフセットに移動する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>フィールドカーソルを、指定したオフセットに移動します。 次に <code>maxdb_fetch_field()</code> をコールすると、 そのオフセットに関連付けられたカラムのフィールド定義が取得されます。</p><p><b>注意</b>:</p><p>行の最初に移動するには、オフセットの値にゼロを指定します。</p>
	 * @param resource $result
	 * @param int $fieldnr
	 * @return bool <p><b>maxdb_field_seek()</b> は、 フィールドカーソルの変更前の値を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-field-seek.php
	 * @see maxdb_fetch_field()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_field_seek($result, int $fieldnr): bool {}

	/**
	 * 結果ポインタの現在のフィールドオフセットを取得する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>直近の <code>maxdb_fetch_field()</code> コールで使用した フィールドカーソルの位置を返します。この値は、 <code>maxdb_field_seek()</code> の引数として使用されます。</p>
	 * @param resource $result
	 * @return int <p>フィールドカーソルの現在のオフセットを返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-field-tell.php
	 * @see maxdb_fetch_field(), maxdb_field_seek()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_field_tell($result): int {}

	/**
	 * 結果に関連付けられたメモリを開放する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_free_result()</b> 関数は、 <code>result</code> が表す結果に関連付けられたメモリを開放します。 このメモリは、<code>maxdb_query()</code>、 <code>maxdb_store_result()</code> あるいは <code>maxdb_use_result()</code> で割り当てられたものです。</p><p><b>注意</b>:</p><p>結果リソースが必要なくなった際には、常に <b>maxdb_free_result()</b> で結果を開放すべきです。</p>
	 * @param resource $result
	 * @return void <p>この関数は値を返しません。</p>
	 * @link https://php.net/manual/ja/function.maxdb-free-result.php
	 * @see maxdb_query(), maxdb_stmt_store_result(), maxdb_store_result(), maxdb_use_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_free_result($result): void {}

	/**
	 * MaxDB クライアントのバージョンを文字列で返す
	 * <p><b>maxdb_get_client_info()</b> 関数は、 MaxDB 拡張モジュールで使用されている、 クライアントのバージョンを表す文字列を返すために使用されます。</p>
	 * @return string <p>MaxDB クライアントライブラリのバージョンを表す文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-get-client-info.php
	 * @see maxdb_get_client_version(), maxdb_get_server_info(), maxdb_get_server_version()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_client_info(): string {}

	/**
	 * MaxDB クライアントの情報を取得する
	 * <p>クライアントのバージョン番号を整数値で返します。</p>
	 * @return int <p>MaxDB クライアントライブラリのバージョンを表す数値を、 以下のフォーマットで返します。 <i>main_version&#42;10000 + minor_version &#42;100 + sub_version</i> 例えば、7.5.0 の場合は 70500 となります。</p><p>これは、何らかの機能が存在するかどうかを知るために クライアントライブラリのバージョンを手早く取得するなどの際に有用です。</p>
	 * @link https://php.net/manual/ja/function.maxdb-get-client-version.php
	 * @see maxdb_get_client_info(), maxdb_get_server_info(), maxdb_get_server_version()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_client_version(): int {}

	/**
	 * 使用している接続の型を表す文字列を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_get_host_info()</b> 関数は、 <code>link</code> で表される接続を表す文字列を返します。</p>
	 * @param resource $link
	 * @return string <p>サーバーのホスト名および接続の型を表す文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-get-host-info.php
	 * @see maxdb_get_proto_info()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_host_info($link): string {}

	/**
	 * maxdb_stmt_result_metadata() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>maxdb_stmt_result_metadata()</code>.</p><p>この関数エイリアスは非推奨であり、下位互換性維持のために残されています。 今後、PHP から削除される可能性がありますので、この関数を使用しないことを推奨します。</p>
	 * @param resource $stmt
	 * @return resource
	 * @link https://php.net/manual/ja/function.maxdb-get-metadata.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_get_metadata($stmt) {}

	/**
	 * 使用している MaxDB プロトコルのバージョンを返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><code>link</code> で表される接続で使用している MaxDB プロトコルのバージョンを表す整数値を返します。</p>
	 * @param resource $link
	 * @return int <p>プロトコルのバージョンを表す整数値 (定数の 10) を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-get-proto-info.php
	 * @see maxdb_get_host_info()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_proto_info($link): int {}

	/**
	 * MaxDB サーバーのバージョンを返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>MaxDB 拡張モジュールが接続している (<code>link</code> パラメータで表される) MaxDB サーバーのバージョンを表す文字列を返します。</p>
	 * @param resource $link
	 * @return string <p>サーバーのバージョンを表す文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-get-server-info.php
	 * @see maxdb_get_client_info(), maxdb_get_client_version(), maxdb_get_server_version()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_server_info($link): string {}

	/**
	 * MaxDB サーバーのバージョンを整数値で返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_get_server_version()</b> 関数は、 MaxDB 拡張モジュールが接続している (<code>link</code> パラメータで表される) MaxDB サーバーのバージョンを表す整数値を返します。</p><p>バージョン番号のフォーマットは <i>main_version &#42; 10000 + minor_version &#42; 100 + sub_version</i> (つまり、バージョン 7.5.0 は 70500) となります。</p>
	 * @param resource $link
	 * @return int <p>サーバーのバージョンを表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-get-server-version.php
	 * @see maxdb_get_client_info(), maxdb_get_client_version(), maxdb_get_server_info()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_get_server_version($link): int {}

	/**
	 * 直近に実行したクエリについての情報を取得する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_info()</b> は、最後に実行されたクエリについての情報を 文字列で返します。文字列の内容は、以下のようになります。</p><p></p><p><b>注意</b>:</p><p>上のいずれにもあてはまらない形式のクエリはサポートされていません。 そのような場合、<b>maxdb_info()</b> は空の文字列を返します。</p>
	 * @param resource $link
	 * @return string <p>直近に実行されたクエリについての追加情報を表す文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-info.php
	 * @see maxdb_affected_rows(), maxdb_warning_count(), maxdb_num_rows()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_info($link): string {}

	/**
	 * MaxDB を初期化し、maxdb_real_connect で使用するリソースを返す
	 * <p><code>maxdb_options()</code> および <code>maxdb_real_connect()</code> で使用する MaxDB リソースを確保、あるいは初期化します。</p><p><b>注意</b>:</p><p><code>maxdb_real_connect()</code> がコールされるまでは、 これ以降の (<code>maxdb_options()</code> 以外の) maxdb 関数のコールは失敗します。</p>
	 * @return resource <p>リソースを返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-init.php
	 * @see maxdb_options(), maxdb_close(), maxdb_real_connect(), maxdb_connect()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_init() {}

	/**
	 * 直近のクエリで使用した、自動生成 ID を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_insert_id()</b> 関数は、DEFAULT SERIAL 属性をもつカラムが存在するテーブルに対するクエリが生成した ID を返します。 直近のクエリが INSERT や UPDATE でなかった場合、 あるいは対象のテーブルに DEFAULT SERIAL 属性をもつカラムが存在しなかった場合は、 この関数はゼロを返します。</p>
	 * @param resource $link
	 * @return mixed <p>直近のクエリによって更新された <i>DEFAULT SERIAL</i> フィールドの値を返します。直近のクエリがない場合、 あるいは直近のクエリが <i>DEFAULT_SERIAL</i> を更新しなかった場合はゼロを返します。</p> <p><b>注意</b>:</p> <p>結果の数値が int の最大値をこえる場合は、<b>maxdb_insert_id()</b> は文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-insert-id.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_insert_id($link) {}

	/**
	 * MaxDB サーバーから切断する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、<code>processid</code> で指定した MaxDB サーバーから切断するために使用されます。</p>
	 * @param resource $link
	 * @param int $processid
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-kill.php
	 * @see maxdb_thread_id()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_kill($link, int $processid): bool {}

	/**
	 * マスタ/スレーブ構成において、クエリをマスタ側で実行することを強制する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link
	 * @param string $query
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-master-query.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_master_query($link, string $query): bool {}

	/**
	 * 複数クエリの結果の中に結果セットがまだあるかどうかを調べる
	 * <p><b>maxdb_more_results()</b> は、事前の <code>maxdb_multi_query()</code> のコールによって取得した結果に まだ結果セットが含まれているかどうかを示します。</p>
	 * @param resource $link
	 * @return bool <p>常に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-more-results.php
	 * @see maxdb_multi_query(), maxdb_next_result(), maxdb_store_result(), maxdb_use_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_more_results($link): bool {}

	/**
	 * データベース上でクエリを実行する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_multi_query()</b> は、 <code>maxdb_query()</code> と同様の動作をします。 複数クエリは、まだサポートされていません。</p>
	 * @param resource $link
	 * @param string $query
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-multi-query.php
	 * @see maxdb_use_result(), maxdb_store_result(), maxdb_next_result(), maxdb_more_results()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_multi_query($link, string $query): bool {}

	/**
	 * multi_query の、次の結果を準備する
	 * <p>複数クエリはまだサポートされていないので、<b>maxdb_next_result()</b> は常に <b><code>FALSE</code></b> を返します。</p>
	 * @param resource $link
	 * @return bool <p><b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-next-result.php
	 * @see maxdb_multi_query(), maxdb_more_results(), maxdb_store_result(), maxdb_use_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_next_result($link): bool {}

	/**
	 * 結果のフィールド数を取得する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_num_fields()</b> は、 指定した結果セットのフィールド数を返します。</p>
	 * @param resource $result
	 * @return int <p>結果セットのフィールド数を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-num-fields.php
	 * @see maxdb_fetch_field()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_num_fields($result): int {}

	/**
	 * 結果の行数を取得する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>結果セットの行数を返します。</p><p>使用している結果セットがバッファ化されているかどうかによって、 <b>maxdb_num_rows()</b> の使用法は変わります。 バッファ化されていない結果セットの場合、 結果セットのすべての行を取得するまでは <b>maxdb_num_rows()</b> は正しい結果を返しません。</p>
	 * @param resource $result
	 * @return int <p>結果セットの行の数を返します。</p> <p><b>注意</b>:</p> <p>行数が int 型の最大値をこえる場合は、結果が文字列として返されます。</p>
	 * @link https://php.net/manual/ja/function.maxdb-num-rows.php
	 * @see maxdb_affected_rows(), maxdb_store_result(), maxdb_use_result(), maxdb_query()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_num_rows($result): int {}

	/**
	 * オプションを設定する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_options()</b> は、 接続時の追加のオプションを設定し、接続の振る舞いを変更するために使用されます。</p><p>この関数は、いくつかのオプションを設定するために複数回コールすることが可能です。</p><p><b>maxdb_options()</b> は、 <code>maxdb_init()</code> をコールした後、 <code>maxdb_real_connect()</code> がコールされるまでにコールしなければなりません。</p><p>パラメータ <code>option</code> は設定したいオプションで、 <code>value</code> はオプションの値です。 オプションについての詳細な説明は、 » http://maxdb.sap.com/documentation/ を参照ください。 パラメータ <code>option</code> は、以下のいずれかの値となります。</p>
	 * @param resource $link
	 * @param int $option
	 * @param mixed $value
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-options.php
	 * @see maxdb_init(), maxdb_real_connect()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_options($link, int $option, $value): bool {}

	/**
	 * maxdb_stmt_param_count() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>maxdb_stmt_param_count()</code>.</p><p>この関数エイリアスは非推奨であり、下位互換性維持のために残されています。 今後、PHP から削除される可能性がありますので、この関数を使用しないことを推奨します。</p>
	 * @param resource $stmt
	 * @return int
	 * @link https://php.net/manual/ja/function.maxdb-param-count.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_param_count($stmt): int {}

	/**
	 * サーバーとの接続を確認し、接続が確立されていない場合は再接続を試みる
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>サーバーとの接続が正常に動作しているかどうかを調べます。 もし接続が確立できていない場合、グローバルオプション <i>maxdb.reconnect</i> が有効になっていれば、 自動的に再接続が試みられます。</p><p>この関数は、クライアント側で長時間アイドル状態が続いた場合などに、 サーバーが接続を閉じてしまったかどうかを調べ、 必要なら再度接続するために使用されます。</p>
	 * @param resource $link
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-ping.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_ping($link): bool {}

	/**
	 * 後で実行するための SQL 文を準備する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_prepare()</b> は、 後で実行するための SQLクエリをヌル終端の文字列で準備し、 今後のステートメントに対する操作に使用するためのハンドルを返します。 クエリは、単一の SQL 文である必要があります。</p><p><b>注意</b>:</p><p>文の最後に、セミコロンや <i>\g</i> をつけてはいけません。</p><p><code>query</code> では、SQL 文の中に、 ひとつあるいは複数のパラメータマーカを含めることが可能です。 適切な場所にクエスチョンマーク (<i>&#63;</i>) を埋め込みます。</p><p><b>注意</b>:</p><p>マーカは、SQL 文の中の適切な箇所にある場合にのみ有効です。 例えば INSERT 文の VALUES() リスト (その行のカラムの値を指定する) あるいは WHERE 句でカラムの値と 比較する条件を指定する場合などが有効です。</p><p>しかし、識別子 (テーブル名やカラム名)、SELECT 文が返すカラム名の一覧、 あるいは (例えば <i>=</i> のような) 二項演算子の両側などに マーカを指定することはできません。最後の制限が必要なのは、 この場合にパラメータの型が決定できなくなるからです。 一般的に、パラメータはデータ操作言語 (DML) 文で使用し、 データ定義言語 (DDL) 文では使用しません。</p><p>パラメータマーカは、文を実行したり行を取得したりする前に、必ず <code>maxdb_stmt_bind_param()</code> や <code>maxdb_stmt_bind_result()</code> でアプリケーションの変数にバインドしなければなりません。</p>
	 * @param resource $link
	 * @param string $query
	 * @return resource <p><b>maxdb_prepare()</b> は、ステートメントリソースを返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-prepare.php
	 * @see maxdb_stmt_execute(), maxdb_stmt_fetch(), maxdb_stmt_bind_param(), maxdb_stmt_bind_result(), maxdb_stmt_close()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_prepare($link, string $query) {}

	/**
	 * データベース上でクエリを実行する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_query()</b> 関数は、<code>link</code> が表すデータベースに対するクエリの実行を単純化するために使用されます。</p>
	 * @param resource $link
	 * @param string $query
	 * @param int $resultmode
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <i>SELECT, SHOW, DESCRIBE</i> あるいは <i>EXPLAIN</i> の場合は、<b>maxdb_query()</b> は結果リソースを返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-query.php
	 * @see maxdb_real_query(), maxdb_multi_query(), maxdb_free_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_query($link, string $query, int $resultmode = NULL) {}

	/**
	 * MaxDB サーバーへの接続をオープンする
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_real_connect()</b> は、 <code>hostname</code> で稼動中の MaxDB データベースエンジンに対して、 接続の確立を試みます。</p><p>この関数は、<code>maxdb_connect()</code> とは以下の点で違います。</p><p><b>maxdb_real_connect()</b> には、 <code>maxdb_init()</code> で作成した有効なリソースが必要です。</p><p><code>maxdb_options()</code> 関数により、 接続の際のさまざまなオプションを設定することが可能です。</p>
	 * @param resource $link
	 * @param string $hostname
	 * @param string $username
	 * @param string $passwd
	 * @param string $dbname
	 * @param int $port
	 * @param string $socket
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-real-connect.php
	 * @see maxdb_connect(), maxdb_init(), maxdb_options(), maxdb_ssl_set(), maxdb_close()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_real_connect($link, string $hostname = NULL, string $username = NULL, string $passwd = NULL, string $dbname = NULL, int $port = 0, string $socket = NULL): bool {}

	/**
	 * 現在の接続の文字セットを考慮したうえで、 SQL 文で使用される文字列中の特殊文字をエスケープする
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、SQL 文で使用するために、SQL で使用可能な文字列を作成するために使用します。 文字列 <i>escapestr</i> が、エスケープされた SQL 文字列にエンコードされます。その際、接続の現在の文字セットを考慮します。</p><p>エンコードされる文字は <i>', "</i> です。</p>
	 * @param resource $link
	 * @param string $escapestr
	 * @return string <p>エスケープされた文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-real-escape-string.php
	 * @see maxdb_character_set_name()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_real_escape_string($link, string $escapestr): string {}

	/**
	 * SQL クエリを実行する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_real_query()</b> は、機能的に <code>maxdb_query()</code> とまったく同じです。</p><p><b>注意</b>:</p><p>指定したクエリが結果セットを返すかどうかを調べるには、 <code>maxdb_field_count()</code> を参照ください。</p>
	 * @param resource $link
	 * @param string $query
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-real-query.php
	 * @see maxdb_query(), maxdb_store_result(), maxdb_use_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_real_query($link, string $query): bool {}

	/**
	 * 内部のレポート関数を有効あるいは無効にする
	 * @param int $flags <p><i>MAXDB_REPORT_XXX</i> 定数のいずれか。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-report.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_report(int $flags): bool {}

	/**
	 * 現在のトランザクションをロールバックする
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><code>link</code> パラメータで指定したデータベース接続について、 現在のトランザクションをロールバックします。</p>
	 * @param resource $link
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-rollback.php
	 * @see maxdb_commit(), maxdb_autocommit()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_rollback($link): bool {}

	/**
	 * RPL のパースが有効かどうかを調べる
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link
	 * @return int
	 * @link https://php.net/manual/ja/function.maxdb-rpl-parse-enabled.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_rpl_parse_enabled($link): int {}

	/**
	 * RPL を調べる
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-rpl-probe.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_rpl_probe($link): bool {}

	/**
	 * RPL クエリ型を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link
	 * @return int
	 * @link https://php.net/manual/ja/function.maxdb-rpl-query-type.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_rpl_query_type($link): int {}

	/**
	 * データベースクエリ用のデフォルトデータベースを選択する
	 * <p><b>maxdb_select_db()</b> 関数は、 <code>link</code> が表すデータベース接続に対して クエリを実行する際に使用するデフォルトのデータベースを (<code>dbname</code> で指定したものに) 選択します。</p><p><b>注意</b>:</p><p>この関数は、接続のデフォルトデータベースを変更する場合にのみ使用すべきです。 デフォルトのデータベースは、<code>maxdb_connect()</code> の 4 番目のパラメータで指定することができます。</p>
	 * @param resource $link
	 * @param string $dbname
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-select-db.php
	 * @see maxdb_connect(), maxdb_real_connect()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_select_db($link, string $dbname): bool {}

	/**
	 * maxdb_stmt_send_long_data() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>maxdb_stmt_send_long_data()</code>.</p><p>この関数エイリアスは非推奨であり、下位互換性維持のために残されています。 今後、PHP から削除される可能性がありますので、この関数を使用しないことを推奨します。</p>
	 * @param resource $stmt
	 * @param int $param_nr
	 * @param string $data
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-send-long-data.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_send_long_data($stmt, int $param_nr, string $data): bool {}

	/**
	 * クエリを送信する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link
	 * @param string $query
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-send-query.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_send_query($link, string $query): bool {}

	/**
	 * 埋め込みサーバーをシャットダウンする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.maxdb-server-end.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_server_end(): void {}

	/**
	 * 埋め込みサーバーを初期化する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param array $server
	 * @param array $groups
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-server-init.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_server_init(array $server = NULL, array $groups = NULL): bool {}

	/**
	 * maxdb_options() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>maxdb_options()</code>.</p>
	 * @param resource $link
	 * @param int $option
	 * @param mixed $value
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-set-opt.php
	 * @since PECL maxdb 1.0
	 */
	function maxdb_set_opt($link, int $option, $value): bool {}

	/**
	 * 直近の MaxDB 操作の SQLSTATE エラーを返します
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>直近のエラーの SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 つの文字で構成されています。<i>'00000'</i> は、エラーが発生しなかったことを意味します。 コードの内容は ANSI SQL および ODBC で指定されています。</p><p><b>注意</b>:</p><p>今のところ、すべての MaxDB エラーが SQLSTATE に関連付けられているわけではないことに注意しましょう。 関連付けられていないエラーについては、 <i>HY000</i> (一般的なエラー) が使用されます。</p>
	 * @param resource $link
	 * @return string <p>直近のエラーについての SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 つの文字で構成されています。<i>'00000'</i> は、エラーが発生しなかったことを意味します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-sqlstate.php
	 * @see maxdb_errno(), maxdb_error()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_sqlstate($link): string {}

	/**
	 * SSL を使用したセキュアな接続を確立するために使用する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link
	 * @param string $key
	 * @param string $cert
	 * @param string $ca
	 * @param string $capath
	 * @param string $cipher
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-ssl-set.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_ssl_set($link, string $key, string $cert, string $ca, string $capath, string $cipher): bool {}

	/**
	 * 現在のシステム状態を取得する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_stat()</b> は、稼動中の MaxDB サーバーに関する情報を含む文字列を返します。</p>
	 * @param resource $link
	 * @return string <p>サーバーの状態を説明する文字列、あるいはエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stat.php
	 * @see maxdb_get_server_info()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stat($link): string {}

	/**
	 * 直近のステートメントによって変更、削除あるいは挿入された行の数を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_stmt_affected_rows()</b> は、 INSERT、UPDATE あるいは DELETE クエリによって変更された行の数を返します。 直近のクエリが無効だった場合、あるいは行数が取得できなかった場合は、 この関数は -1 を返します。</p>
	 * @param resource $stmt
	 * @return int <p>ゼロより大きい整数の場合は、変更された行数あるいは取得した行数を表します。 ゼロの場合は、UPDATE/DELETE 文で 1 行も更新されなかったか、 クエリの WHERE 句にマッチする行がなかった、 あるいはクエリがまだ実行されていないことを表します。 -1 は、クエリがエラーを返したか行数が取得できなかったことを表します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-affected-rows.php
	 * @see maxdb_stmt_num_rows(), maxdb_prepare()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_affected_rows($stmt): int {}

	/**
	 * プリペアドステートメントに、変数をパラメータとしてバインドする
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>手続き型 (拡張構文):</p><p>オブジェクト指向型 (拡張構文):</p><p><b>maxdb_stmt_bind_param()</b> は、 <code>maxdb_prepare()</code> に渡された SQL 文のパラメータマーカに、 変数をバインドするために使用されます。 文字列 <code>types</code> にはひとつあるいは複数の文字が含まれ、 これによって対応するバインド変数の型を指定します。</p><p><b>maxdb_stmt_bind_param()</b> の拡張構文では、 パラメータを、PHP の変数リストではなくひとつの配列として渡せるようになります。 <b>maxdb_stmt_bind_param()</b> のコール前に配列変数が使用されていない場合は、空の配列として初期化されます。 <b>maxdb_stmt_bind_param()</b> の拡張構文の使用法については、 例を参照ください。</p><p>SELECT INTO SQL 文の変数は、<b>maxdb_stmt_bind_param()</b> でバインドすることも可能です。データベースプロシージャのパラメータについては <b>maxdb_stmt_bind_param()</b> を使用してバインドできます。 このような場合の <b>maxdb_stmt_bind_param()</b> の使用法については、例を参照ください。</p><p>SQL 文の INTO 変数にバインドする変数が事前に使用されていた場合は、 その変数の内容は SELECT INTO 文のデータで上書きされます。 <b>maxdb_stmt_bind_param()</b> をコールした後は、 この変数への参照は無効になります。</p><p>データベースプロシージャの INOUT パラメータの場合、 バインドされた INOUT 変数の内容は、データベースプロシージャの出力で 上書きされます。 <b>maxdb_stmt_bind_param()</b> をコールした後は、 この変数への参照は無効になります。</p><p></p>
	 * @param resource $stmt
	 * @param string $types
	 * @param mixed $var1
	 * @param mixed $_
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-bind-param.php
	 * @see maxdb_stmt_bind_result(), maxdb_stmt_execute(), maxdb_stmt_fetch(), maxdb_prepare(), maxdb_stmt_send_long_data(), maxdb_stmt_errno(), maxdb_stmt_error()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_bind_param($stmt, string $types, &$var1, &$_ = NULL): bool {}

	/**
	 * 結果を保存するために、変数をプリペアドステートメントにバインドする
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_stmt_bind_result()</b> は、 結果セット内のカラムを変数に関連付ける (バインドする) ために使用されます。 データを取得するために <code>maxdb_stmt_fetch()</code> をコールすると、MaxDB クライアント/サーバープロトコルが、 バインドされたカラムのデータを指定した変数 <code>var1, ...</code> に保存します。</p><p><b>注意</b>:</p><p>すべてのカラムは、<code>maxdb_stmt_fetch()</code> のコール前にバインドされなければならないことに注意しましょう。 バインド変数は、カラムの型に応じて自動的に対応する PHP 型に変換されます。</p><p>結果セットが部分的に取得された後であっても、カラムはいつでも バインド/再バインドできます。新しいバインド内容は、次に <code>maxdb_stmt_fetch()</code> がコールされた時点で反映されます。</p>
	 * @param resource $stmt
	 * @param mixed $var1
	 * @param mixed $_
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-bind-result.php
	 * @see maxdb_stmt_bind_param(), maxdb_stmt_execute(), maxdb_stmt_fetch(), maxdb_prepare(), maxdb_stmt_prepare(), maxdb_stmt_init(), maxdb_stmt_errno(), maxdb_stmt_error()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_bind_result($stmt, &$var1, &$_ = NULL): bool {}

	/**
	 * プリペアドステートメントを閉じる
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>プリペアドステートメントを閉じます。 <b>maxdb_stmt_close()</b> は、 <code>stmt</code> が指すステートメントハンドルを開放します。 現在のステートメントに処理中あるいはまだ読み込まれていない結果がある場合、 この関数はそれらをキャンセルし、次のクエリを実行できるようにします。</p>
	 * @param resource $stmt
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-close.php
	 * @see maxdb_prepare()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_close($stmt): bool {}

	/**
	 * maxdb_stmt_send_long_data() のシーケンスを終了する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、<code>maxdb_execute()</code> で開始した後、 <code>maxdb_stmt_send_long_data()</code> のシーケンスの後にコールする必要があります。</p><p><code>param_nr</code> は、 データの最後にどのパラメータを関連付けるかを示します。 パラメータは、0 番から順に番号がつけられます。</p>
	 * @param resource $stmt
	 * @param int $param_nr
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-close-long-data.php
	 * @see maxdb_prepare(), maxdb_stmt_bind_param()
	 * @since PECL maxdb 1.0
	 */
	function maxdb_stmt_close_long_data($stmt, int $param_nr): bool {}

	/**
	 * ステートメントの結果セットの、任意の行に移動する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_stmt_data_seek()</b> 関数は、<code>statement</code> が表すステートメント結果セットの中の <code>offset</code> で指定した任意のオフセットに結果ポインタを移動します。 <code>offset</code> は、ゼロから全行数マイナス 1 までの間 (0..<code>maxdb_stmt_num_rows()</code> - 1) である必要があります。</p>
	 * @param resource $statement
	 * @param int $offset
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-data-seek.php
	 * @see maxdb_prepare()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_data_seek($statement, int $offset): bool {}

	/**
	 * 直近のステートメントコール時のエラーコードを返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><i>stmt</i> で指定したステートメントについて、 <b>maxdb_stmt_errno()</b> は 直近に実行されたステートメントのエラーコードを返します。</p><p><b>注意</b>:</p><p>返される可能性のあるエラーコードについては、SQLDBC のドキュメント » http://maxdb.sap.com/documentation/ を参照ください。</p>
	 * @param resource $stmt
	 * @return int <p>エラーコードの値を返します。エラーが発生しなかった場合はゼロを返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-errno.php
	 * @see maxdb_stmt_error(), maxdb_stmt_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_errno($stmt): int {}

	/**
	 * 直近のステートメントコール時のエラー文字列を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><i>stmt</i> で指定したステートメントについて、 <b>maxdb_stmt_error()</b> は 直近に実行されたステートメントのエラーメッセージを返します。</p>
	 * @param resource $stmt
	 * @return string <p>エラーを説明する文字列を返します。エラーが発生しなかった場合は空の文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-error.php
	 * @see maxdb_stmt_errno(), maxdb_stmt_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_error($stmt): string {}

	/**
	 * プリペアドクエリを実行する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_stmt_execute()</b> 関数は、 <code>stmt</code> で表される、事前に <code>maxdb_prepare()</code> で準備したクエリを実行します。実行の際には、 すべてのパラメータマーカが適切な値に置き換えられます。</p><p>UPDATE、DELETE あるいは INSERT 文の場合は、 <code>maxdb_stmt_affected_rows()</code> 関数を使用すると 変更された行の総数が取得できます。同じく、 結果セットを返すクエリの場合は <code>maxdb_fetch()</code> 関数を使用して結果を取得できます。</p><p><b>注意</b>:</p><p><b>maxdb_stmt_execute()</b> を使用する際は、 他のクエリを実行する前に必ず <code>maxdb_fetch()</code> でデータを取得しなければなりません。</p>
	 * @param resource $stmt
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-execute.php
	 * @see maxdb_prepare(), maxdb_stmt_bind_param()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_execute($stmt): bool {}

	/**
	 * プリペアドステートメントの結果を取得し、バインド変数に格納する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_stmt_fetch()</b> は、 <code>maxdb_stmt_bind_result()</code> でバインドした変数を使用して、 行のデータを返します。</p><p><b>注意</b>:</p><p><b>maxdb_stmt_fetch()</b> をコールする前に、 すべてのカラムがアプリケーションによってバインドされている必要があることに注意しましょう。</p>
	 * @param resource $stmt
	 * @return bool <b>返り値</b>   値 説明     <b><code>TRUE</code></b> 成功。データが取得されました。   <b><code>FALSE</code></b> エラーが発生しました。   <b><code>NULL</code></b> 行/データが、もう存在しません。
	 * @link https://php.net/manual/ja/function.maxdb-stmt-fetch.php
	 * @see maxdb_prepare(), maxdb_stmt_errno(), maxdb_stmt_error(), maxdb_stmt_bind_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_fetch($stmt): bool {}

	/**
	 * 指定したステートメントハンドルの結果を保存しているメモリを開放する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_stmt_free_result()</b> 関数は、 <code>stmt</code> パラメータで指定した結果メモリ (これは <code>maxdb_stmt_store_result()</code> によって確保されたものです) を開放します。</p>
	 * @param resource $stmt
	 * @return void <p>この関数は、なにも値を返しません。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-free-result.php
	 * @see maxdb_stmt_store_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_free_result($stmt): void {}

	/**
	 * ステートメントを初期化し、maxdb_stmt_prepare で使用するリソースを返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><code>maxdb_stmt_prepare()</code> で使用するステートメントリソースを 確保して初期化します。</p><p><b>注意</b>:</p><p><code>maxdb_stmt_prepare()</code> がコールされるまでは、 これ以降のすべての maxdb_stmt 関数のコールは失敗します。</p>
	 * @param resource $link
	 * @return resource <p>リソースを返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-init.php
	 * @see maxdb_stmt_prepare()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_init($link) {}

	/**
	 * ステートメントの結果セットの行数を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>結果セット内の行の数を返します。</p>
	 * @param resource $stmt
	 * @return int <p>結果セット内の行の数を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-num-rows.php
	 * @see maxdb_stmt_affected_rows(), maxdb_prepare(), maxdb_stmt_store_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_num_rows($stmt): int {}

	/**
	 * 指定したステートメントのパラメータ数を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_stmt_param_count()</b> は、 プリペアドステートメント内に存在するパラメータマーカの数を返します。</p>
	 * @param resource $stmt
	 * @return int <p>パラメータ数を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-param-count.php
	 * @see maxdb_prepare()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_param_count($stmt): int {}

	/**
	 * 後で実行するための SQL 文を準備する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_stmt_prepare()</b> は、 後で実行するための SQLクエリをヌル終端の文字列で準備します。 ステートメントのリソースは、<code>maxdb_stmt_init()</code> で確保しなければなりません。 クエリは、単一の SQL 文である必要があります。</p><p><b>注意</b>:</p><p>文の最後に、セミコロンや <i>\g</i> をつけてはいけません。</p><p><code>query</code> では、SQL 文の中に、 ひとつあるいは複数のパラメータマーカを含めることが可能です。 適切な場所にクエスチョンマーク (<i>&#63;</i>) を埋め込みます。</p><p><b>注意</b>:</p><p>マーカは、SQL 文の中の適切な箇所にある場合にのみ有効です。 例えば INSERT 文の VALUES() リスト (その行のカラムの値を指定する) あるいは WHERE 句でカラムの値と 比較する条件を指定する場合などが有効です。</p><p>しかし、識別子 (テーブル名やカラム名)、SELECT 文が返すカラム名の一覧、 あるいは (例えば <i>=</i> のような) 二項演算子の両側などに マーカを指定することはできません。最後の制限が必要なのは、 この場合にパラメータの型が決定できなくなるからです。 一般的に、パラメータはデータ操作言語 (DML) 文で使用し、 データ定義言語 (DDL) 文では使用しません。</p><p>パラメータマーカは、文を実行したり行を取得したりする前に、必ず <code>maxdb_stmt_bind_param()</code> や <code>maxdb_stmt_bind_result()</code> でアプリケーションの変数にバインドしなければなりません。</p>
	 * @param resource $stmt
	 * @param string $query
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-prepare.php
	 * @see maxdb_stmt_init(), maxdb_stmt_execute(), maxdb_stmt_fetch(), maxdb_stmt_bind_param(), maxdb_stmt_bind_result(), maxdb_stmt_close()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_prepare($stmt, string $query): bool {}

	/**
	 * プリペアドステートメントをリセットする
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $stmt
	 * @return bool
	 * @link https://php.net/manual/ja/function.maxdb-stmt-reset.php
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_reset($stmt): bool {}

	/**
	 * プリペアドステートメントから、結果セットのメタデータを返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><code>maxdb_prepare()</code> に渡されたステートメントが 結果セットを作成するものであった場合に、 <b>maxdb_stmt_result_metadata()</b> は結果リソースを返します。 これを使用することで、フィールドの総数や各フィールドの情報といったメタ情報を 処理することができます。</p><p><b>注意</b>:</p><p>この結果セットポインタは、結果セットメタデータを処理するフィールドベースの関数、 例えば以下のような関数への引数として渡すことができます。</p><p><code>maxdb_num_fields()</code></p><p><code>maxdb_fetch_field()</code></p><p><code>maxdb_fetch_field_direct()</code></p><p><code>maxdb_fetch_fields()</code></p><p><code>maxdb_field_count()</code></p><p><code>maxdb_field_seek()</code></p><p><code>maxdb_field_tell()</code></p><p><code>maxdb_free_result()</code></p><p>結果セットの構造体は、使用が終わったあとに開放しなければなりません。 そのためには、それを<code>maxdb_free_result()</code> に渡します。</p><p><b>注意</b>:</p><p><b>maxdb_stmt_result_metadata()</b> が返す結果セットには、 メタデータのみが含まれます。結果の行は含まれません。行を取得するには、 ステートメントハンドルを <code>maxdb_fetch()</code> に渡します。</p>
	 * @param resource $stmt
	 * @return resource <p><b>maxdb_stmt_result_metadata()</b> は結果リソースを返します。 エラーが発生した場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-result-metadata.php
	 * @see maxdb_prepare(), maxdb_free_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_result_metadata($stmt) {}

	/**
	 * データを複数ブロックで送信する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>パラメータのデータを、いくつかに分割してサーバーに送信できるようにします。 この関数は、文字データやバイナリデータをカラムに送信するために 複数回コールすることができます。このカラムは TEXT 型あるいは BLOB 型でなければなりません。</p><p><code>param_nr</code> は、データに関連付けるパラメータを指定します。 パラメータは 0 から数え始めます。 <code>data</code> は、送信するデータを含む文字列です。</p><p><b>注意</b>:</p><p>効率を考えると、この関数は <code>maxdb_execute()</code> をコールした後にコールすべきです。この場合、 データはクライアント側には保存されません。このシーケンスを終える際には、 最後に <code>maxdb_stmt_close_long_data()</code> をコールしなければなりません。</p>
	 * @param resource $stmt
	 * @param int $param_nr
	 * @param string $data
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-send-long-data.php
	 * @see maxdb_prepare(), maxdb_stmt_bind_param()
	 * @since PECL maxdb 1.0
	 */
	function maxdb_stmt_send_long_data($stmt, int $param_nr, string $data): bool {}

	/**
	 * 事前のステートメントの捜査からの SQLSTATE エラーを返す
	 * <p>直近に起動したプリペアドステートメントについての SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 つの文字で構成されています。<i>'00000'</i> は、エラーが発生しなかったことを意味します。 コードの内容は ANSI SQL および ODBC で指定されています。</p><p><b>注意</b>:</p><p>今のところ、すべての MaxDB エラーが SQLSTATE に関連付けられているわけではないことに注意しましょう。 関連付けられていないエラーについては、 <i>HY000</i> (一般的なエラー) が使用されます。</p>
	 * @param resource $stmt
	 * @return string <p>直近のエラーについての SQLSTATE エラーコードを含む文字列を返します。 エラーコードは 5 つの文字で構成されています。<i>'00000'</i> は、エラーが発生しなかったことを意味します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-sqlstate.php
	 * @see maxdb_stmt_errno(), maxdb_stmt_error()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_sqlstate($stmt): string {}

	/**
	 * プリペアドステートメントから結果を転送する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_stmt_store_result()</b> は、何の動作もしません。 MaxDB サーバーからデータを取得するために使用すべきではありません。</p>
	 * @param resource $stmt
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-stmt-store-result.php
	 * @see maxdb_prepare(), maxdb_stmt_result_metadata(), maxdb_fetch()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_stmt_store_result($stmt): bool {}

	/**
	 * 直近のクエリから結果セットを転送する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、何の機能も持ちません。</p>
	 * @param resource $link
	 * @return resource <p>結果リソース、あるいはエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-store-result.php
	 * @see maxdb_real_query(), maxdb_use_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_store_result($link) {}

	/**
	 * 現在の接続のスレッド ID を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_thread_id()</b> 関数は、現在の接続のスレッド ID を返します。<code>maxdb_kill()</code> 関数を使用することで、 この接続を殺すことが可能です。接続を見失ったあとで <code>maxdb_ping()</code> を使用して再接続した場合には、 スレッド ID は別の値になります。そのため、スレッド ID は、必要になった時点でのみ取得すべきです。</p><p><b>注意</b>:</p><p>スレッド ID は、接続ごとに割り当てられます。したがって、 接続が壊れてしまい改めて確立しなおした場合には、スレッド ID は別の値が割り当てられます。</p>
	 * @param resource $link
	 * @return int <p><b>maxdb_thread_id()</b> は、 現在の接続のスレッド ID を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-thread-id.php
	 * @see maxdb_kill()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_thread_id($link): int {}

	/**
	 * スレッドセーフであるかどうかを返す
	 * <p><b>maxdb_thread_safe()</b> は、 クライアントライブラリがスレッドセーフにコンパイルされているかどうかを示します。</p>
	 * @return bool <p>クライアントライブラリがスレッドセーフである場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-thread-safe.php
	 * @since PECL maxdb >= 7.6.06.04
	 */
	function maxdb_thread_safe(): bool {}

	/**
	 * 結果セットの取得を開始する
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_use_result()</b> は何の動作もしません。</p>
	 * @param resource $link
	 * @return resource <p>結果、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-use-result.php
	 * @see maxdb_real_query(), maxdb_store_result()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_use_result($link) {}

	/**
	 * 指定したリンクの直近のクエリで発生した警告の数を返す
	 * <p>手続き型</p><p>オブジェクト指向型</p><p><b>maxdb_warning_count()</b> は、 <code>link</code> で表される接続の、 直近のクエリから返される警告の数を返します。</p>
	 * @param resource $link
	 * @return int <p>警告の数、あるいは警告が発生しなかった場合にはゼロを返します。</p>
	 * @link https://php.net/manual/ja/function.maxdb-warning-count.php
	 * @see maxdb_errno(), maxdb_error(), maxdb_sqlstate()
	 * @since PECL maxdb >= 1.0
	 */
	function maxdb_warning_count($link): int {}

	/**
	 * データベースに接続しているアプリケーション。
	 */
	define('MAXDB_APPLICATION', null);

	/**
	 * アプリケーションのバージョン。
	 */
	define('MAXDB_APPVERSION', null);

	/**
	 * フィールド名をインデックスとする配列で、カラムを返します。
	 */
	define('MAXDB_ASSOC', null);

	/**
	 * 小文字に変換したフィールド名をインデックスとする配列で、 カラムを返します。
	 */
	define('MAXDB_ASSOC_LOWER', null);

	/**
	 * 大文字に変換したフィールド名をインデックスとする配列で、 カラムを返します。
	 */
	define('MAXDB_ASSOC_UPPER', null);

	/**
	 * 数値インデックスおよびフィールド名インデックスの両方を含む配列で、 カラムを返します。
	 */
	define('MAXDB_BOTH', null);

	/**
	 * SQLDBC ランタイム環境を初期化するために使用するコンポーネント名。
	 */
	define('MAXDB_COMPNAME', null);

	/**
	 * 自動的に命名される結果テーブルに使用するプレフィックス。
	 */
	define('MAXDB_CURSORPREFIX', null);

	/**
	 * 共有ロックおよび排他ロックを暗黙的に要求/開放するかどうか、 またどのように行うかを指定します。
	 */
	define('MAXDB_ISOLATIONLEVEL', null);

	/**
	 * フィールドの数値インデックスを持つ配列で、カラムを返します。 インデックスは 0 から始まり、これが結果の最初のフィールドを表します。
	 */
	define('MAXDB_NUM', null);

	/**
	 * 接続に使用するリクエストパケットの数。
	 */
	define('MAXDB_PACKETCOUNT', null);

	/**
	 * SQL モード。
	 */
	define('MAXDB_SQLMODE', null);

	/**
	 * 接続内での再利用のためにキャッシュされるプリペアドステートメントの数。
	 */
	define('MAXDB_STATEMENTCACHESIZE', null);

	/**
	 * データベースへの接続がシステムによって閉じられるまでの 最大無活動時間。
	 */
	define('MAXDB_TIMEOUT', null);

	/**
	 * unicode (UCS2) クライアントによる接続の場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b>。
	 */
	define('MAXDB_UNICODE', null);

}
