<?php



namespace {

	/**
	 * オープンされた接続/データベースを閉じる
	 * @param object $link_identifier <p>閉じたい DBX リンクオブジェクト。</p>
	 * @return int <p>成功した場合に 1、エラーの場合に 0 を返します。</p>
	 * @link https://php.net/manual/ja/function.dbx-close.php
	 * @see dbx_connect()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_close(object $link_identifier): int {}

	/**
	 * ソートするために二つのレコードを比較する
	 * <p><b>dbx_compare()</b> は <code>dbx_sort()</code> のヘルパ関数で、 独自のソート関数を作成しやすくします。</p>
	 * @param array $row_a <p>最初の行。</p>
	 * @param array $row_b <p>二番目の行。</p>
	 * @param string $column_key <p>比較するカラム。</p>
	 * @param int $flags <p><code>flags</code> によって比較の方向を指定します。</p><ul> <li>  <b><code>DBX_CMP_ASC</code></b> - 昇順  </li> <li>  <b><code>DBX_CMP_DESC</code></b> - 降順  </li> </ul> また、比較の型についても指定します。 <ul> <li>  <b><code>DBX_CMP_NATIVE</code></b> - 型の変換を行いません  </li> <li>  <b><code>DBX_CMP_TEXT</code></b> - 文字列として比較します  </li> <li>  <b><code>DBX_CMP_NUMBER</code></b> - 数値として比較します  </li> </ul> 方向からひとつ、型の定数からひとつを選び、ビット OR 演算子 (|) で 組み合わせます。
	 * @return int <p><i>row_a[$column_key]</i> が <i>row_b[$column_key]</i> に等しい場合に <i>0</i>、 前者が後者より大きいかあるいは小さい場合にそれぞれ <i>1</i> あるいは <i>-1</i>、 もし <b><code>DBX_CMP_DESC</code></b> が設定されていればその逆を返します。</p>
	 * @link https://php.net/manual/ja/function.dbx-compare.php
	 * @see dbx_sort()
	 * @since PHP 4 >= 4.1.0, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_compare(array $row_a, array $row_b, string $column_key, int $flags = DBX_CMP_ASC | DBX_CMP_NATIVE): int {}

	/**
	 * 接続/データベースをオープンする
	 * <p>データベースへの接続をオープンします。</p>
	 * @param mixed $module <p><code>module</code> パラメータには文字列または定数を設定します。 定数の使用が推奨されます。指定可能な値を以下に示しますが、これは 該当するモジュールが実際にロードされている場合のみ動作することに注意してください。</p> <p></p><ul> <li>  <b><code>DBX_MYSQL</code></b> あるいは <i>"mysql"</i>  </li> <li>  <b><code>DBX_ODBC</code></b> あるいは <i>"odbc"</i>  </li> <li>  <b><code>DBX_PGSQL</code></b> あるいは <i>"pgsql"</i>  </li> <li>  <b><code>DBX_MSSQL</code></b> あるいは <i>"mssql"</i>  </li> <li>  <b><code>DBX_FBSQL</code></b> あるいは <i>"fbsql"</i>  </li> <li>  <b><code>DBX_SYBASECT</code></b> あるいは <i>"sybase_ct"</i>  </li> <li>  <b><code>DBX_OCI8</code></b> あるいは <i>"oci8"</i>  </li> <li>  <b><code>DBX_SQLITE</code></b> あるいは <i>"sqlite"</i>  </li> </ul>
	 * @param string $host <p>SQL サーバーのホスト。</p>
	 * @param string $database <p>データベース名。</p>
	 * @param string $username <p>ユーザー名。</p>
	 * @param string $password <p>パスワード。</p>
	 * @param int $persistent <p><code>persistent</code> パラメータに <b><code>DBX_PERSISTENT</code></b> を設定すると、持続的接続が作成されます。</p>
	 * @return object <p><b>dbx_connect()</b> は成功時にオブジェクト、エラー時に <b><code>FALSE</code></b> を返します。接続は確立したもののデータベースが選択できなかった場合には、 接続はクローズされて <b><code>FALSE</code></b> を返します。</p><p>返される object は 3 つのプロパティを有します。</p>  database    現在選択されているデータベースの名前。    handle   <p>接続されたデータベースの有効なハンドルで、モジュール固有の関数に （必要に応じて）使用されます。</p>   <code> &lt;&#63;php<br>$link = dbx_connect(DBX_MYSQL, "localhost", "db", "username", "password");<br>mysql_close($link-&gt;handle); // dbx_close($link) の方が良いかもしれません<br>&#63;&gt;  </code>     module    dbx の内部でのみ使用され、上で述べたモジュール番号を表します。
	 * @link https://php.net/manual/ja/function.dbx-connect.php
	 * @see dbx_close()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_connect($module, string $host, string $database, string $username, string $password, int $persistent = NULL): object {}

	/**
	 * 使用するモジュールの最新の関数コールにおけるエラーメッセージを出力する
	 * <p><b>dbx_error()</b> は、直近のエラーメッセージを返します。</p>
	 * @param object $link_identifier <p><code>dbx_connect()</code> が返す DBX リンクオブジェクト。</p>
	 * @return string <p>抽象化されたモジュール（例えば mysql モジュール）の直近の関数コールからエラーメッセージを有する文字列を返します。 同じモジュールに複数の接続がある場合、 最後のエラーのみが取得されます。別のモジュールに接続がある場合、 （<code>link_identifier</code> パラメータで）指定した モジュールに関する直近のエラーのみが返されます。</p>
	 * @link https://php.net/manual/ja/function.dbx-error.php
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_error(object $link_identifier): string {}

	/**
	 * SQL ステートメントで安全に使用できるように文字列をエスケープする
	 * <p>指定した文字列をエスケープし、SQL ステートメントで安全に使用できるようにします。</p>
	 * @param object $link_identifier <p><code>dbx_connect()</code> が返す DBX リンクオブジェクト。</p>
	 * @param string $text <p>エスケープする文字列。</p>
	 * @return string <p>テキストを返します。 必要なら（クォートやバックスラッシュなど）エスケープ処理を行います。 エラー時には <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbx-escape-string.php
	 * @see dbx_query()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_escape_string(object $link_identifier, string $text): string {}

	/**
	 * DBX_RESULT_UNBUFFERED フラグを指定した クエリ結果から、行を取得する
	 * <p><b>dbx_fetch_row()</b> は、 <b><code>DBX_RESULT_UNBUFFERED</code></b> フラグを指定したクエリ結果から、行を取得します。</p><p>クエリで <b><code>DBX_RESULT_UNBUFFERED</code></b> が指定されていない場合、 <b>dbx_fetch_row()</b> は失敗します。なぜなら、すでにすべての 行は取得されて data プロパティに格納されているからです。</p><p>副作用として、<b>dbx_fetch_row()</b> のコールのたびに クエリ結果オブジェクトの rows プロパティの 値が加算されます。</p>
	 * @param object $result_identifier <p><code>dbx_query()</code> が返す結果セット。</p>
	 * @return mixed <p>成功した場合にオブジェクトを返します。このオブジェクトには、 <code>dbx_query()</code> の結果における data プロパティの内容と同じ情報が含まれ、<code>dbx_query()</code> で設定した内容に応じてインデックスあるいはフィールド名でアクセスが可能です。</p><p>失敗した場合 (例: 行がもうない場合) には <i>0</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbx-fetch-row.php
	 * @see dbx_query()
	 * @since PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_fetch_row(object $result_identifier) {}

	/**
	 * クエリを送信し、(ある場合には)結果を全て取得する
	 * <p>クエリを送信し、すべての結果を取得します。</p>
	 * @param object $link_identifier <p><code>dbx_connect()</code> が返す DBX リンクオブジェクト。</p>
	 * @param string $sql_statement <p>SQL 文。</p> <p>クエリ内のデータは 適切にエスケープ しておかなければなりません。</p>
	 * @param int $flags <p><code>flags</code> パラメータは、返される情報の量を制御する ために使用されます。以下の定数の組み合わせを、論理 OR 演算子 (|) で連結したものとなります。DBX_COLNAMES_&#42; フラグは php.ini の dbx.colnames_case 設定を上書きします。</p>  <b><code>DBX_RESULT_INDEX</code></b>    これは<i>常に</i>設定され、結果に二次元配列の data プロパティを含めます。たとえば <i>data[2][3]</i> では <i>2</i> が行番号 （レコード番号）を表し、<i>3</i> がカラム番号 （フィールド番号）を表します。最初の行やカラムの番号は 0 です。   <b><code>DBX_RESULT_ASSOC</code></b> が指定された場合、返される オブジェクトには <b><code>DBX_RESULT_INFO</code></b> に関連する 情報が（指定していなくても）含まれます。    <b><code>DBX_RESULT_INFO</code></b>    カラムに関する情報、つまりフィールド名とフィールドの型を含めます。    <b><code>DBX_RESULT_ASSOC</code></b>    返されるオブジェクトの data プロパティの キーとして、関連するカラム名の値がアクセスされます。   関連付けられた結果は数値添字となっているので、 <i>data[0][0]</i> を変更すると <i>data[0]['最初のカラムのフィールド名']</i> も同様に 変更されます。    <b><code>DBX_RESULT_UNBUFFERED</code></b>    このフラグは data プロパティを作成せず、 rows プロパティの初期値を 0 に設定します。 結果セットが大きくなる場合にこのフラグを使用し、 <code>dbx_fetch_row()</code> を使用して結果を 1 行ごとに 取得してください。   <code>dbx_fetch_row()</code> 関数は、このクエリで設定した フラグの内容を反映じた行を返します。また、この関数がコールされる たびに rows が更新されます。    <b><code>DBX_COLNAMES_UNCHANGED</code></b>    返されるカラム名の大文字小文字を変更しません。    <b><code>DBX_COLNAMES_UPPERCASE</code></b>    返されるカラム名を大文字に変更します。    <b><code>DBX_COLNAMES_LOWERCASE</code></b>    返されるカラム名を小文字に変更します。    <code>flags</code> パラメータの実際の値にかかわらず、常に <b><code>DBX_RESULT_INDEX</code></b> が有効となることに注意しましょう。 つまり、結果的に使用可能なのは以下の組み合わせだけであるということです。 <ul> <li>  <b><code>DBX_RESULT_INDEX</code></b>  </li> <li>  <b><code>DBX_RESULT_INDEX</code></b> | <b><code>DBX_RESULT_INFO</code></b>  </li> <li>  <b><code>DBX_RESULT_INDEX</code></b> | <b><code>DBX_RESULT_INFO</code></b> | <b><code>DBX_RESULT_ASSOC</code></b> - <code>flags</code> を指定しなかった場合、これがデフォルトです。  </li> </ul>
	 * @return mixed <p><b>dbx_query()</b> は、成功した場合に オブジェクトあるいは <i>1</i>、失敗した場合に <i>0</i> を返します。 結果オブジェクトが返されるのは、<code>sql_statement</code> で指定されたクエリが結果セットを生成する場合（例: SELECT クエリ。結果が 0 件の場合も含む）のみです。</p><p>返されるオブジェクトは、<code>flags</code> の設定により 4 つまたは 5 つのプロパティを保持します。</p>  handle   <p>接続したデータベースの有効なハンドルで、モジュール専用関数で （必要ならば）使用されます。</p>   <code> &lt;&#63;php<br>$result = dbx_query($link, "SELECT id FROM table");<br>mysql_field_len($result-&gt;handle, 0);<br>&#63;&gt;  </code>     cols および rows   <p>これらは、それぞれカラム数（フィールド数）および行数（レコード数） を表します。</p>   <code> &lt;&#63;php<br>$result = dbx_query($link, 'SELECT id FROM table');<br>echo $result-&gt;rows; // レコード数<br>echo $result-&gt;cols; // フィールド数<br>&#63;&gt;  </code>     info (オプション)    <code>flags</code> パラメータに <b><code>DBX_RESULT_INFO</code></b> あるいは <b><code>DBX_RESULT_ASSOC</code></b> が指定されている場合のみ 返されます。2 次元の配列で、2 つのキー（<i>name</i> および <i>type</i>）を持ち、カラムの情報を取得するために 使用します。   <p><b>例1 各フィールドの名前と型を一覧表示する</b></p>  <code> &lt;&#63;php<br>$result = dbx_query($link, 'SELECT id FROM table',<br>                     DBX_RESULT_INDEX | DBX_RESULT_INFO);<br><br>for ($i = 0; $i &lt; $result-&gt;cols; $i++ ) {<br>    echo $result-&gt;info['name'][$i] . "\n";<br>    echo $result-&gt;info['type'][$i] . "\n";  <br>}<br>&#63;&gt;  </code>     data    このプロパティには結果のデータが含まれます。<code>flags</code> の設定によってはこのデータはカラム名と関連付けられているでしょう。 <b><code>DBX_RESULT_ASSOC</code></b> が設定されていた場合、 <i>$result-&gt;data[2]["field_name"]</i> のように使用可能です。   <p><b>例2 data プロパティの内容を HTML テーブルで表示する</b></p>  <code> &lt;&#63;php<br>$result = dbx_query($link, 'SELECT id, parentid, description FROM table');<br><br>echo "&lt;table&gt;\n";<br>foreach ($result-&gt;data as $row) {<br>    echo "&lt;tr&gt;\n";<br>    foreach ($row as $field) {<br>        echo "&lt;td&gt;$field&lt;/td&gt;";<br>    }<br>    echo "&lt;/tr&gt;\n";<br>}<br>echo "&lt;/table&gt;\n";<br>&#63;&gt;  </code>    <p><b>例3 UNBUFFERED クエリの処理法</b></p>  <code> &lt;&#63;php<br><br>$result = dbx_query ($link, 'SELECT id, parentid, description FROM table', DBX_RESULT_UNBUFFERED);<br><br>echo "&lt;table&gt;\n";<br>while ($row = dbx_fetch_row($result)) {<br>    echo "&lt;tr&gt;\n";<br>    foreach ($row as $field) {<br>        echo "&lt;td&gt;$field&lt;/td&gt;";<br>    }<br>    echo "&lt;/tr&gt;\n";<br>}<br>echo "&lt;/table&gt;\n";<br><br>&#63;&gt;  </code>
	 * @link https://php.net/manual/ja/function.dbx-query.php
	 * @see dbx_escape_string(), dbx_fetch_row(), dbx_connect()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_query(object $link_identifier, string $sql_statement, int $flags = NULL) {}

	/**
	 * カスタマイズされたソート関数により、dbx_query から結果をソートする
	 * <p><code>dbx_query()</code> のコール結果を、 独自のソート関数で並べ替えます。</p>
	 * @param object $result <p><code>dbx_query()</code> が返す結果セット。</p>
	 * @param string $user_compare_function <p>ユーザー定義の比較関数。二つの引数を受け取り、 第一引数が第二引数より小さい場合に負の数、等しい場合にゼロ、 大きい場合に正の数を返すものでなければなりません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dbx-sort.php
	 * @see dbx_compare()
	 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0, PECL dbx >= 1.1.0
	 */
	function dbx_sort(object $result, string $user_compare_function): bool {}

}
