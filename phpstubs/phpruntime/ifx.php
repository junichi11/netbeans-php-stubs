<?php



/**
 * クエリで変更された行の数を得る
 * <p><code>result_id</code> に関連するクエリにより変更された 行の数を返します。</p><p>insert, update ,delete の場合、その数は、実際に作用された行の数 (sqlerrd[2]) です。select の場合、これは推定値 (sqlerrd[0]) です。 この値を信用してはいけません。データベースサーバーは、SELECT により 実際に返される行の数を返すことはありません。これは、この段階 (オプティマイザがクエリ手順を定義している場合には、"PREPARE" を 行った直後) では、行の取得を始めてさえもいないためです。</p><p><code>ifx_prepare()</code> の実行後に、クエリ結果を適当な量に 制限するために使用すると便利です。</p>
 * @param resource $result_id <p><code>ifx_query()</code> または <code>ifx_prepare()</code> により返される有効な結果 ID です。</p>
 * @return int <p>行の数を整数値で返します。</p>
 * @link http://php.net/manual/ja/function.ifx-affected-rows.php
 * @see ifx_num_rows()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_affected_rows($result_id): int {}

/**
 * 全ての select クエリに関するデフォルトの BLOB モードを設定する
 * <p>全ての select クエリに関するデフォルトの BLOB モードを設定します。</p>
 * @param int $mode <p>モード "0" は、BLOB をメモリーに保存することを意味し、 モード "1" は、BLOB をファイルに保存することを意味します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-blobinfile-mode.php
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_blobinfile_mode(int $mode): bool {}

/**
 * デフォルトのバイトモードを設定する
 * <p>全ての select クエリに関するデフォルトのバイトモードを設定します。</p>
 * @param int $mode <p>モード "0" は BLOB ID を返し、モード "1" がテキストの内容を有する varchar を返します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-byteasvarchar.php
 * @see ifx_textasvarchar()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_byteasvarchar(int $mode): bool {}

/**
 * Informix 接続を閉じる
 * <p><b>ifx_close()</b> は、 指定したリンク ID に関連づけられた Informix データベースへの接続を閉じます。</p><p>非持続的接続としてオープンされたリンクはスクリプトの実行終了時に 自動的に閉じられるため、 この関数は通常は必要ではないことに注意してください。</p><p><b>ifx_close()</b> は、<code>ifx_pconnect()</code> により作成された持続的リンクは閉じません。</p>
 * @param resource $link_identifier <p>リンク ID。指定しなかった場合は、最後にオープンされたリンクが仮定されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-close.php
 * @see ifx_connect(), ifx_pconnect()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_close($link_identifier = NULL): bool {}

/**
 * Informix サーバーへの接続をオープンする
 * <p><b>ifx_connect()</b> は、Informix サーバーへの接続を確立します。</p><p>同じ引数で <b>ifx_connect()</b> を 2 回目にコールした際には、 新規のリンクは確立されず、代わりに既にオープンされたリンクの リンク ID が返されます。</p><p>サーバーへのリンクは、<code>ifx_close()</code> のコールに より明示的に事前に閉じない限り、スクリプトの実行終了直後に閉じられます。</p>
 * @param string $database <p>データベース名を表す文字列。</p>
 * @param string $userid <p>ユーザー名を表す文字列。</p>
 * @param string $password <p>パスワードを表す文字列。</p>
 * @return resource <p>成功時に接続 ID を、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-connect.php
 * @see ifx_pconnect(), ifx_close()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_connect(string $database = NULL, string $userid = NULL, string $password = NULL) {}

/**
 * 指定した BLOB オブジェクトを二重化する
 * <p>指定した BLOB オブジェクトを二重化します。</p>
 * @param int $bid <p>BLOB オブジェクトの ID。</p>
 * @return int <p>新規の BLOB オブジェクト ID を返します。 エラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-copy-blob.php
 * @see ifx_create_blob(), ifx_free_blob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_copy_blob(int $bid): int {}

/**
 * BLOB オブジェクトを作成する
 * <p>BLOB オブジェクトを作成します。</p>
 * @param int $type <p>1 = TEXT, 0 = BYTE</p>
 * @param int $mode <p>0 = BLOB オブジェクトはメモリーに内容を保持する, 1 = BLOB オブジェクトはファイルに内容を保持する。</p>
 * @param string $param <p>mode = 0 の場合: 内容へのポインタ mode = 1 の場合: ファイル文字列へのポインタ</p>
 * @return int <p>新規の BLOB オブジェクト ID を返します。 エラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-create-blob.php
 * @see ifx_copy_blob(), ifx_free_blob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_create_blob(int $type, int $mode, string $param): int {}

/**
 * 文字オブジェクトを作成する
 * <p>文字オブジェクトを作成します。</p>
 * @param string $param <p>内容となる文字。</p>
 * @return int <p>新しい文字オブジェクトの ID、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-create-char.php
 * @see ifx_free_char()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_create_char(string $param): int {}

/**
 * 事前に準備された SQL 文を実行する
 * <p>事前に準備されたクエリを実行し、カーソルをオープンします。</p><p>エラーの際に、<code>result_id</code> を解放しないでください。</p><p>select 文でない場合に、<code>ifx_affected_rows()</code> に数を設定します。 これは、<code>ifx_affected_rows()</code> で取得可能です。</p>
 * @param resource $result_id <p><code>result_id</code> は、 <code>ifx_query()</code> あるいは <code>ifx_prepare()</code> が返す有効な結果 ID です (select 型のクエリのみです!)。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-do.php
 * @see ifx_prepare()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_do($result_id): bool {}

/**
 * 直近の Informix コールのエラーコードを返す
 * <p>文の結果を表す一文字の文字列、そして、 直近に実行された SQL 文についての SQLSTATE と SQLCODE を返します。</p>
 * @param resource $link_identifier <p>リンク ID。</p>
 * @return string <p>Informix エラーコード (SQLSTATE &amp; SQLCODE) は、 <i>x [SQLSTATE = aa bbb SQLCODE=cccc]</i> のような形式になります。</p><p>x = 空白 : エラーなし</p><p>E : エラー</p><p>N : データがもうない</p><p>W : 警告</p><p>&#63; : 未定義</p><p>文字 "x" が空白以外の文字だった場合、SQLSTATE および SQLCODE でエラーの詳細情報を取得します。</p><p>SQLSTATE および SQLCODE の詳細については、Informix マニュアルを参照ください。</p>
 * @link http://php.net/manual/ja/function.ifx-error.php
 * @see ifx_errormsg()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_error($link_identifier = NULL): string {}

/**
 * 直近の Informix コールのエラーメッセージを返す
 * <p>直近の Informix エラーに関する Informix エラーメッセージを返します。</p>
 * @param int $errorcode <p>指定すると、指定したコードに対応するエラーメッセージを返します。</p>
 * @return string <p>エラーメッセージを文字列で返します。</p>
 * @link http://php.net/manual/ja/function.ifx-errormsg.php
 * @see ifx_error()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_errormsg(int $errorcode = NULL): string {}

/**
 * 行を連想配列として取得する
 * <p>結果 ID で指定した結果に対応するデータのひとつの行を取得します。</p><p><b>ifx_fetch_row()</b> を続けてコールした場合、結果セットの 次の行が返されます。 行がもうない場合は、<b><code>FALSE</code></b> が返されます。</p>
 * @param resource $result_id <p><code>ifx_query()</code> または <code>ifx_prepare()</code> (select 型のクエリのみ!) により返された有効な結果 ID です。</p>
 * @param mixed $position <p>オプションのパラメータで、"スクロール" カーソルで "取得" 操作を行うためのものです。 <i>NEXT</i>, <i>PREVIOUS</i>, <i>CURRENT</i>, <i>FIRST</i>, <i>LAST</i> あるいは番号を指定します。 番号を指定した場合、"絶対" 行の取得が行われます。このパラメータは オプションであり、SCROLL カーソルの場合にのみ有効です。</p>
 * @return array <p>取得された行に対応する連想配列を返します。行がもうない場合には <b><code>FALSE</code></b> を返します。</p><p>BLOB カラムは、<code>ifx_get_blob()</code> で使用するために 整数値 BLOB ID として返されます。ただし、ifx_textasvarchar(1) または ifx_byteasvarchar(1) を指定している場合を除きます。この場合、 BLOB は文字列として返されます。エラーの場合は <b><code>FALSE</code></b> が返されます。</p>
 * @link http://php.net/manual/ja/function.ifx-fetch-row.php
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_fetch_row($result_id, $position = NULL): array {}

/**
 * SQL フィールドプロパティのリスト
 * <p>クエリ中の全てのフィールドの Informix SQL フィールドプロパティを 連想配列として返します。プロパティは、以下のような形式となります。 "SQLTYPE;length;precision;scale;ISNULLABLE" ただし、SQLTYPE は、 "SQLVCHAR" 等の Informix 型。ISNULLABLE は、"Y" または "N" となります。</p>
 * @param resource $result_id <p><code>result_id</code> は、 <code>ifx_query()</code> または <code>ifx_prepare()</code> (select 型のクエリのみ!) により返された有効な結果 ID です。</p>
 * @return array <p><code>result_id</code> のクエリについて、フィールド名を キーとし、SQL フィールドプロパティをデータとした連想配列を返します。 エラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-fieldproperties.php
 * @see ifx_fieldtypes()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_fieldproperties($result_id): array {}

/**
 * Informix SQL フィールドのリスト
 * <p><code>result_id</code> のクエリについて、フィールド名をキーとし、 SQL フィールド型をデータとした連想配列を返します。</p>
 * @param resource $result_id <p><code>result_id</code> は、 <code>ifx_query()</code> または <code>ifx_prepare()</code> (select 型のクエリのみ!) により返された有効な結果 ID です。</p>
 * @return array <p><code>result_id</code> のクエリについて、フィールド名をキーとし、 SQL フィールド型をデータとした連想配列を返します。 エラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-fieldtypes.php
 * @see ifx_fieldproperties()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_fieldtypes($result_id): array {}

/**
 * BLOB オブジェクトを削除する
 * <p>指定された BLOB オブジェクト ID の BLOB オブジェクトを削除します。</p>
 * @param int $bid <p>BLOB オブジェクト ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-free-blob.php
 * @see ifx_create_blob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_free_blob(int $bid): bool {}

/**
 * 文字オブジェクトを削除する
 * <p>指定したオブジェクト ID の文字オブジェクトを削除します。</p>
 * @param int $bid <p>文字オブジェクト ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-free-char.php
 * @see ifx_create_char()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_free_char(int $bid): bool {}

/**
 * クエリに関するリソースを解放する
 * <p><code>result_id</code> に間連するクエリの リソースを解放します。</p>
 * @param resource $result_id <p><code>result_id</code> は、 <code>ifx_query()</code> または <code>ifx_prepare()</code> (select 型のクエリのみ!) により返された有効な結果 ID です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-free-result.php
 * @see ifx_do()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_free_result($result_id): bool {}

/**
 * BLOB オブジェクトの内容を返す
 * <p>BLOB オブジェクトの内容を返します。</p>
 * @param int $bid <p>BLOB オブジェクト ID。</p>
 * @return string <p>BLOB の内容を表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-get-blob.php
 * @see ifx_get_char()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_get_blob(int $bid): string {}

/**
 * 文字オブジェクトの内容を返す
 * <p>文字オブジェクトの内容を返します。</p>
 * @param int $bid <p>文字オブジェクト ID。</p>
 * @return string <p>文字の内容を表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-get-char.php
 * @see ifx_get_blob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_get_char(int $bid): string {}

/**
 * クエリ実行後、sqlca.sqlerrd[0..5] の値を得る
 * <p><code>result_id</code> に関連するクエリを実行した後の sqlca.sqlerrd[0] から sqlca.sqlerrd[5] に関する擬似レコードを返します。</p><p>insert、update、delete の場合、クエリが実行された後、サーバーにより 設定される場合と同様にレコードの値が返されます。 これにより、作用を受けた行の数および連番の挿入値にアクセスすることが 可能となります。 <i>SELECT</i> の場合、この値は <i>PREPARE</i> 文の後で保存された値となります。 この値から作用を受けた行の数の"推測"値が分かります。 ifx ドライバにより適当な時に保存された値が取得されるため、 この関数を使用することにより、 <i>SELECT dbinfo('sqlca.sqlerrdx')</i> クエリを実行するオーバーヘッドを防止することができます。</p>
 * @param resource $result_id <p><code>result_id</code> は、 <code>ifx_query()</code> または <code>ifx_prepare()</code> (select 型のクエリのみ!) により返された有効な結果 ID です。</p>
 * @return array <p>連想配列を返します。含まれるエントリは <i>sqlerrd0</i>、<i>sqlerrd1</i>、 <i>sqlerrd2</i>、<i>sqlerrd3</i>、 <i>sqlerrd4</i> および <i>sqlerrd5</i> です。</p>
 * @link http://php.net/manual/ja/function.ifx-getsqlca.php
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_getsqlca($result_id): array {}

/**
 * クエリ結果の全行を HTML テーブルにフォーマットする
 * <p>クエリ結果 <code>result_id</code> の全ての行を HTML テーブルにフォーマットします。</p>
 * @param resource $result_id <p><code>result_id</code> is a valid resultid returned by <code>ifx_query()</code> or <code>ifx_prepare()</code> (select type queries only!).</p>
 * @param string $html_table_options <p>このオプション引数は、&lt;table&gt; タグのオプションとする文字列です。</p>
 * @return int <p>取得された行の数、あるいはエラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-htmltbl-result.php
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_htmltbl_result($result_id, string $html_table_options = NULL): int {}

/**
 * 取得する行のデフォルトの返り値を設定する
 * <p>取得する行のデフォルトの返り値を NULL 値に設定します。</p>
 * @param int $mode <p>モード "0" は "" を返し、モード "1" は "<b><code>NULL</code></b>" を返します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-nullformat.php
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_nullformat(int $mode): bool {}

/**
 * クエリのカラム数を返す
 * <p>クエリを準備または実行された後、この関数をコールすることにより、 クエリ結果中でカラム数が得られます。</p>
 * @param resource $result_id <p><code>result_id</code> は、 <code>ifx_query()</code> または <code>ifx_prepare()</code> (select 型のクエリのみ!) により返された有効な結果 ID です。</p>
 * @return int <p><code>result_id</code> に関するクエリ結果のカラム数、 あるいはエラーの場合に<b><code>FALSE</code></b>を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-num-fields.php
 * @see ifx_num_rows()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_num_fields($result_id): int {}

/**
 * クエリから既に取得された行の数を数える
 * <p><code>ifx_query()</code> または <code>ifx_do()</code> クエリの後、<code>result_id</code> を有する クエリに関してこれまで取得された行の数を返します。</p>
 * @param resource $result_id <p><code>result_id</code> は、 <code>ifx_query()</code> または <code>ifx_prepare()</code> (select 型のクエリのみ!) により返された有効な結果 ID です。</p>
 * @return int <p>取得した行の数、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-num-rows.php
 * @see ifx_num_fields()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_num_rows($result_id): int {}

/**
 * 持続的 Informix 接続をオープンする
 * <p><b>ifx_pconnect()</b> は、二つの大きな違いはあるものの、 <code>ifx_connect()</code> と非常に似た動作をします。</p><p>まず、接続時に、関数は、既にオープンされている同じホスト、ユーザー名、 パスワードの (持続的) リンクを探します。 そのリンクが見つかった場合、新規に接続をオープンする代わりに その ID が返されます。</p><p>第二に、SQL サーバーへの接続は、スクリプトの実行終了時に閉じられません。 代わりにリンクは、後の使用のためにオープンされたままとなります。 (<code>ifx_close()</code> は <b>ifx_pconnect()</b> により確立されたリンクを閉じません。)</p><p>この型のリンクは、このため、'持続的' であると呼ばれます。</p>
 * @param string $database <p>データベース名を表す文字列。</p>
 * @param string $userid <p>ユーザー名を表す文字列。</p>
 * @param string $password <p>パスワードを表す文字列。</p>
 * @return resource <p>返り値: 成功時に有効な Informix 持続的リンク ID 、エラー時に <b><code>FALSE</code></b></p>
 * @link http://php.net/manual/ja/function.ifx-pconnect.php
 * @see ifx_connect()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_pconnect(string $database = NULL, string $userid = NULL, string $password = NULL) {}

/**
 * SQL 文を実行用に準備する
 * <p>あとで <code>ifx_do()</code> で使用するための <code>query</code> を準備します。</p><p>"select 型" のクエリの場合はカーソルを宣言してオープンします。 select 以外のクエリは、直接実行されます。</p><p>どちらのタイプのクエリにおいても、(予測または実際の数として) 作用された行の数は <code>ifx_affected_rows()</code> により 取得可能です。</p><p>TEXT (または BYTE) カラムの内容が許すならば、 "ifx_textasvarchar(1)" または "ifx_byteasvarchar(1)" を使用する ことも可能です。 これにより、TEXT (または BYTE) カラムは、select クエリの 通常の (しかし長い) VARCHAR カラムと同様に処理され、 BLOB ID で悩むこともなくなります。</p><p>ifx_textasvarchar(0) または ifx_byteasvarchar(0) (デフォルト値) の場合、select クエリは、BLOB ID (整数値) に属するものとして BLOB カラムを返します。 BLOB 関数により文字列またはファイルとして BLOB の値を得ることが 可能です (下記を参照ください)。</p>
 * @param string $query <p>クエリ文字列。</p>
 * @param resource $link_identifier <p>リンク ID。</p>
 * @param int $cursor_def <p>オプションのパラメータで、そのカーソルを "スクロール" または "ホールド" カーソルとすることができます。 このオプションはビットマスクであり、 <b><code>IFX_SCROLL</code></b>、 <b><code>IFX_HOLD</code></b> あるいは 両方とも指定することができます。</p>
 * @param mixed $blobidarray <p>もし、クエリにおいて BLOB (BYTE または TEXT) カラムがある場合、 対応する "BLOB ID" を有する <code>blobidarray</code> パラメータを追加することが可能です。この場合、クエリテキストの これらのカラムを "&#63;" で置換することが必要です。</p>
 * @return resource <p>後で <code>ifx_do()</code> で使用するための結果 ID、 あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-prepare.php
 * @see ifx_do()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_prepare(string $query, $link_identifier, int $cursor_def = NULL, $blobidarray) {}

/**
 * Informix クエリを送信する
 * <p>指定したリンク ID が指す現在アクティブなデータベースに クエリ <code>query</code> を送信します。</p><p>"select 型" のクエリの場合はカーソルを宣言してオープンします。 select 以外のクエリは、直接実行されます。</p><p>どちらのタイプのクエリにおいても、(予測または実際の数として) 作用された行の数は <code>ifx_affected_rows()</code> により 取得可能です。</p><p>TEXT (または BYTE) カラムの内容が許すならば、 "ifx_textasvarchar(1)" または "ifx_byteasvarchar(1)" を使用する ことも可能です。 これにより、TEXT (または BYTE) カラムは、select クエリの 通常の (しかし長い) VARCHAR カラムと同様に処理され、 BLOB ID で悩むこともなくなります。</p><p>ifx_textasvarchar(0) または ifx_byteasvarchar(0) (デフォルト値) の場合、select クエリは、BLOB ID (整数値) に属するものとして BLOB カラムを返します。 BLOB 関数により文字列またはファイルとして BLOB の値を得ることが 可能です (下記を参照ください)。</p>
 * @param string $query <p>クエリ文字列。</p>
 * @param resource $link_identifier <p>リンク ID。</p>
 * @param int $cursor_type
 * @param mixed $blobidarray <p>もし、クエリにおいて BLOB (BYTE または TEXT) カラムがある場合、 対応する "BLOB ID" を有する <code>blobidarray</code> パラメータを追加することが可能です。この場合、クエリテキストの これらのカラムを "&#63;" で置換することが必要です。</p>
 * @return resource <p>成功した場合に Informix 結果 ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-query.php
 * @see ifx_connect()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_query(string $query, $link_identifier, int $cursor_type = NULL, $blobidarray = NULL) {}

/**
 * デフォルトのテキストモードを設定する
 * <p>全ての select クエリに関するデフォルトのテキストモードを設定します。</p>
 * @param int $mode <p>モード "0" は、BLOB を返し、"1" は、テキストの内容を有する varchar を 返します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-textasvarchar.php
 * @see ifx_byteasvarchar()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_textasvarchar(int $mode): bool {}

/**
 * BLOB オブジェクトの内容を更新する
 * <p>指定したBLOB オブジェクト ID <code>bid</code> に関する BLOB オブジェクトの内容を更新します。</p>
 * @param int $bid <p>BLOB オブジェクト ID。</p>
 * @param string $content <p>新規データの文字列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-update-blob.php
 * @see ifx_update_char()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_update_blob(int $bid, string $content): bool {}

/**
 * 文字オブジェクトの内容を更新する
 * <p>指定した文字オブジェクト <code>bid</code> に関して 文字オブジェクトの内容を更新します。</p>
 * @param int $bid <p>文字オブジェクト ID。</p>
 * @param string $content <p>新規データの文字列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifx-update-char.php
 * @see ifx_update_blob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifx_update_char(int $bid, string $content): bool {}

/**
 * SLOB オブジェクトを削除する
 * <p>指定した SLOB オブジェクト ID <code>bid</code> の SLOB オブジェクトを削除します。</p>
 * @param int $bid <p>既存の SLOB の ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifxus-close-slob.php
 * @see ifxus_open_slob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifxus_close_slob(int $bid): bool {}

/**
 * SLOB オブジェクトを作成し、オープンする
 * <p>SLOB オブジェクトを作成し、オープンします。</p>
 * @param int $mode <p><b><code>IFX_LO_RDONLY</code></b>、 <b><code>IFX_LO_WRONLY</code></b>、<b><code>IFX_LO_APPEND</code></b>、 <b><code>IFX_LO_RDWR</code></b>、<b><code>IFX_LO_BUFFER</code></b>、 <b><code>IFX_LO_NOBUFFER</code></b> の組み合わせ。</p>
 * @return int <p>新しい SLOB オブジェクトの ID、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifxus-create-slob.php
 * @see ifxus_close_slob(), ifxus_free_slob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifxus_create_slob(int $mode): int {}

/**
 * SLOB オブジェクトを削除する
 * <p>SLOB オブジェクトを削除します。</p>
 * @param int $bid <p>既存の SLOB の ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifxus-free-slob.php
 * @see ifxus_close_slob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifxus_free_slob(int $bid): bool {}

/**
 * SLOB オブジェクトをオープンする
 * <p>SLOB オブジェクトをオープンします。 <code>bid</code> は存在する SLOB ID である必要があります。</p>
 * @param int $bid <p>既存の SLOB の ID。</p>
 * @param int $mode <p><b><code>IFX_LO_RDONLY</code></b>、 <b><code>IFX_LO_WRONLY</code></b>、<b><code>IFX_LO_APPEND</code></b>、 <b><code>IFX_LO_RDWR</code></b>、<b><code>IFX_LO_BUFFER</code></b>、 <b><code>IFX_LO_NOBUFFER</code></b> の組み合わせ。</p>
 * @return int <p>新しい SLOB オブジェクトの ID、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifxus-open-slob.php
 * @see ifxus_close_slob(), ifxus_free_slob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifxus_open_slob(int $bid, int $mode): int {}

/**
 * SLOB オブジェクトから n バイト読みこむ
 * <p>SLOB オブジェクトから <code>nbytes</code> バイトを読みこみます。</p>
 * @param int $bid <p>既存の SLOB の ID。</p>
 * @param int $nbytes <p>読み込むバイト数。</p>
 * @return string <p>SLOB の内容を表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifxus-read-slob.php
 * @see ifxus_write_slob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifxus_read_slob(int $bid, int $nbytes): string {}

/**
 * 現在のファイル位置またはシーク位置を返す
 * <p>オープンされた SLOB オブジェクトに関する 現在のファイルまたはシーク位置を設定します。</p>
 * @param int $bid <p>既存の SLOB の ID。</p>
 * @param int $mode <p>0 = LO_SEEK_SET, 1 = LO_SEEK_CUR, 2 = LO_SEEK_END.</p>
 * @param int $offset <p>バイトオフセット。</p>
 * @return int <p>シーク位置を表す整数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifxus-seek-slob.php
 * @see ifxus_tell_slob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifxus_seek_slob(int $bid, int $mode, int $offset): int {}

/**
 * 現在のファイルまたはシーク位置を返す
 * <p>オープンされた SLOB オブジェクトに関して 現在のファイルまたはシーク位置を返します。</p>
 * @param int $bid <p>既存の SLOB の ID。</p>
 * @return int <p>シーク位置を表す整数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifxus-tell-slob.php
 * @see ifxus_seek_slob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifxus_tell_slob(int $bid): int {}

/**
 * SLOB オブジェクトに文字列を書きこむ
 * <p>SLOB オブジェクトを文字列に書きこみます。</p>
 * @param int $bid <p>既存の SLOB の ID。</p>
 * @param string $content <p>書き込む内容を表す文字列。</p>
 * @return int <p>書き込んだバイト数を表す整数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ifxus-write-slob.php
 * @see ifxus_read_slob()
 * @since PHP 4, PHP 5 < 5.2.1
 */
function ifxus_write_slob(int $bid, string $content): int {}

define('IFX_HOLD', null);

define('IFX_LO_APPEND', null);

define('IFX_LO_BUFFER', null);

define('IFX_LO_NOBUFFER', null);

define('IFX_LO_RDONLY', null);

define('IFX_LO_RDWR', null);

define('IFX_LO_WRONLY', null);

define('IFX_SCROLL', null);

