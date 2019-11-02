<?php



namespace {

	/**
	 * PHP の配列を Oracle PL/SQL の配列に名前でバインドする
	 * <p><b>oci_bind_array_by_name()</b> は、PHP の配列 <code>var_array</code> を Oracle のプレースホルダ <code>name</code> にバインドします。 このプレースホルダは Oracle PL/SQL の配列を指しています。 入力変数あるいは出力変数のどちらとして使用されるのかは、 実行時に決められます。</p>
	 * @param resource $statement <p>有効な OCI ステートメント識別子</p>
	 * @param string $name <p>Oracle のプレースホルダ</p>
	 * @param array $var_array <p>配列</p>
	 * @param int $max_table_length <p>入力配列および結果の配列の両方の最大長を設定する</p>
	 * @param int $max_item_length <p>配列要素の最大長を設定する。もし指定されない、もしくは -1 が指定された場合、<b>oci_bind_array_by_name()</b> は入力の配列の中で最も長い要素を探し、その長さを最大長とする。</p>
	 * @param int $type <p>PL/SQL 配列の項目の型を指定するために利用される。 指定可能な型については以下を参照のこと。</p> <p></p><ul> <li> <p><b><code>SQLT_NUM</code></b> - NUMBER の配列</p> </li> <li> <p><b><code>SQLT_INT</code></b> - INTEGER の配列 (注意: INTEGER は、実際には NUMBER(38) のシノニムだが、 <b><code>SQLT_NUM</code></b> ではこの場合うまく動作しない)。</p> </li> <li> <p><b><code>SQLT_FLT</code></b> - FLOAT の配列</p> </li> <li> <p><b><code>SQLT_AFC</code></b> - CHAR の配列</p> </li> <li> <p><b><code>SQLT_CHR</code></b> - VARCHAR2 の配列</p> </li> <li> <p><b><code>SQLT_VCS</code></b> - VARCHAR の配列</p> </li> <li> <p><b><code>SQLT_AVC</code></b> - CHARZ の配列</p> </li> <li> <p><b><code>SQLT_STR</code></b> - STRING の配列</p> </li> <li> <p><b><code>SQLT_LVC</code></b> - LONG VARCHAR の配列</p> </li> <li> <p><b><code>SQLT_ODT</code></b> - DATE の配列</p> </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-bind-array-by-name.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL OCI8 >= 1.2.0
	 */
	function oci_bind_array_by_name($statement, string $name, array &$var_array, int $max_table_length, int $max_item_length = -1, int $type = SQLT_AFC): bool {}

	/**
	 * Oracle プレースホルダに PHP 変数をバインドする
	 * <p>PHP の変数 <code>variable</code> を Oracle プレースホルダ <code>bv_name</code> にバインドします。 バインドは Oracle データベースのパフォーマンスに影響を及ぼす重要な仕組みで、 SQL インジェクション攻撃を防ぐための方法にもなります。</p><p>バインドを使うとデータベースでステートメントのコンテキストを (たとえ別のユーザーやプロセスが実行したものであっても) 再利用することができるようになります。 バインドによって SQL インジェクションの心配を軽減できる理由は、 バインド変数で代入したデータが決して SQL 文の一部と見なされることがないからです。 クォートやエスケープは不要です。</p><p>バインドする PHP 変数の中身を変更してステートメントを再実行するときにも、 ステートメントをパースしなおしたり変数をバインドしなおしたりする必要はありません。</p><p>Oracle のバインド変数は、データベースに渡す値に使う <i>IN</i> 変数と PHP に返される値に使う <i>OUT</i> 変数のふたつに大別できます。 バインド変数は <i>IN</i> あるいは <i>OUT</i> のどちらかの形式になります。バインド変数を入力用に使うか出力用に使うかは、 実行時に決まります。</p><p><i>OUT</i> 変数を使う場合は <code>maxlength</code> を指定しなければなりません。 これを用いて、返される値を格納するのに必要なメモリを PHP が確保します。</p><p><i>IN</i> 変数の場合も、もし PHP の変数にさまざまな値を格納してステートメントを何度も実行するのであれば <code>maxlength</code> を設定しておくことを推奨します。 そうしないと、最初に渡した PHP の変数の値にあわせて Oracle がデータの長さを切り詰めてしまう可能性があります。 最大長がどの程度になるかわからない場合は現在のデータサイズで <b>oci_bind_by_name()</b> を再コールしてから <code>oci_execute()</code> を実行するようにしましょう。 不必要に大きなサイズでバインドすると、 データベースのプロセスのメモリ使用量に影響を及ぼします。</p><p>バインドは、Oracle にデータをどのメモリアドレスから読み込むのかを指示します。 <i>IN</i> 変数の場合、<code>oci_execute()</code> がコールされたときにそのメモリアドレスに正しいデータがなければなりません。 つまり、バインドされる変数は実行時までスコープ内に残っていなければならないということです。 もしそうでなければ、 "ORA-01460: unimplemented or unreasonable conversion requested" のような予期せぬエラーが発生します。 <i>OUT</i> 変数の場合は、PHP の変数に何も値が格納されないといったことになるでしょう。</p><p>繰り返し実行されるステートメントで決して値が変わることのないバインド変数を使っていると、 Oracle のオプティマイザが最適な実行プランを選びにくくなる可能性があります。 実行に長い時間がかかり、再実行されることもめったにないようなステートメントは、 バインドの恩恵を受けられないでしょう。 しかし、どちらの場合であっても、文字列を連結して SQL 文を作るよりはバインドを使ったほうが安全です。 ユーザーの入力をフィルタリングせずに埋め込んでしまうというリスクをなくせるからです。</p>
	 * @param resource $statement <p>有効な OCI8 ステートメント識別子。</p>
	 * @param string $bv_name <p>コロンを先頭につけたバインド変数プレースホルダをステートメント内で使います。 コロンは <code>bv_name</code> では必須ではありません。 Oracle はクエスチョンマークをプレースホルダとして使いません。</p>
	 * @param mixed $variable <p><code>bv_name</code> に関連づける PHP の変数。</p>
	 * @param int $maxlength <p>バインド時の最大長。-1 に設定した場合、 <code>variable</code> の現在の長さを最大長として設定します。 この場合は、<b>oci_bind_by_name()</b> がコールされたときに <code>variable</code> が存在してデータが格納されている必要があります。</p>
	 * @param int $type <p>Oracle がデータを扱うときのデータ型。デフォルトの <code>type</code> は <b><code>SQLT_CHR</code></b> です。 Oracle は、可能な場合はこの型とデータベースのカラム (あるいは PL/SQL の変数) の型の間で変換を行います。</p> <p>抽象データ型 (LOB/ROWID/BFILE) をバインドする必要がある場合、まず <code>oci_new_descriptor()</code> 関数を使用してこれを確保する必要があります。 <code>length</code> は抽象データ型用には 使用されず、-1 を設定する必要があります。</p> <p><code>type</code> に設定できる値は以下のとおりです。</p><ul> <li> <p><b><code>SQLT_BFILEE</code></b> or <b><code>OCI_B_BFILE</code></b> - BFILE 用</p> </li> <li> <p><b><code>SQLT_CFILEE</code></b> or <b><code>OCI_B_CFILEE</code></b> - CFILE 用</p> </li> <li> <p><b><code>SQLT_CLOB</code></b> or <b><code>OCI_B_CLOB</code></b> - CLOB 用</p> </li> <li> <p><b><code>SQLT_BLOB</code></b> or <b><code>OCI_B_BLOB</code></b> - BLOB 用</p> </li> <li> <p><b><code>SQLT_RDD</code></b> or <b><code>OCI_B_ROWID</code></b> - ROWID 用</p> </li> <li> <p><b><code>SQLT_NTY</code></b> or <b><code>OCI_B_NTY</code></b> - 名前付けされたデータ型用</p> </li> <li> <p><b><code>SQLT_INT</code></b> or <b><code>OCI_B_INT</code></b> - integer 用</p> </li> <li> <p><b><code>SQLT_CHR</code></b> - VARCHAR 用</p> </li> <li> <p><b><code>SQLT_BIN</code></b> or <b><code>OCI_B_BIN</code></b> - RAW カラム用</p> </li> <li> <p><b><code>SQLT_LNG</code></b> - LONG カラム用</p> </li> <li> <p><b><code>SQLT_LBI</code></b> - LONG RAW カラム用</p> </li> <li> <p><b><code>SQLT_RSET</code></b> - カーソル用。 <code>oci_new_cursor()</code> により、前もって生成されたもの。</p> </li> <li> <p><b><code>SQLT_BOL</code></b> あるいは <b><code>OCI_B_BOL</code></b> PL/SQL の BOOLEAN 用 (OCI8 2.0.7 以降と Oracle Database 12c 以降が必要)</p> </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-bind-by-name.php
	 * @see oci_bind_array_by_name(), oci_parse()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_bind_by_name($statement, string $bv_name, &$variable, int $maxlength = -1, int $type = SQLT_CHR): bool {}

	/**
	 * カーソルからの読み込みをキャンセルする
	 * <p>カーソルを無効にして関連付けられた全てのリソースを開放し、 読み込みをキャンセルします。</p>
	 * @param resource $statement <p>OCI ステートメント</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-cancel.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_cancel($statement): bool {}

	/**
	 * Oracle クライアント・ライブラリのバージョンを返す
	 * <p>PHP がリンクされている Oracle C クライアント・ライブラリのバージョン番号を含む文字列を返します。</p>
	 * @return string <p>文字列としてバージョン番号を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-client-version.php
	 * @see oci_server_version()
	 * @since PHP 5 >= 5.3.7, PHP 7, PECL OCI8 >= 1.4.6
	 */
	function oci_client_version(): string {}

	/**
	 * Oracleとの接続を閉じる
	 * <p>接続 <code>connection</code> を閉じます。 他のいかなるリソースも利用しない、なおかつ <code>oci_connect()</code> または <code>oci_new_connect()</code> で作成された場合、 基礎となるデータベース接続が閉じられます。</p><p>もはや不要となった接続を閉じることを推奨します。 なぜなら、これにより他のユーザーがデータベースリソースを利用できるようになるからです。</p>
	 * @param resource $connection <p><code>oci_connect()</code>、<code>oci_pconnect()</code> あるいは <code>oci_new_connect()</code> が返す Oracle 接続 ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-close.php
	 * @see oci_connect(), oci_free_statement()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_close($connection): bool {}

	/**
	 * 未解決のトランザクションをコミットする
	 * <p>Oracle接続<code>connection</code> 上の未解決なトランザクションをコミットします。 コミットすると、現在のトランザクションを終了してすべての変更を確定させます。 また、保持しているロックをすべて解放します。</p><p>トランザクションが始まるのは、データを変更する最初の SQL 文が <b><code>OCI_NO_AUTO_COMMIT</code></b> フラグつきで <code>oci_execute()</code> によって実行されたときです。 それ以降、他の文によるデータの変更も同じトランザクションの一部となります。 トランザクション内でのデータの変更は、 そのトランザクションがコミットあるいはロールバックされるまでは一時的なものとなります。 データベース上の他のユーザーは、 トランザクションがコミットされるまでその変更内容を見ることができません。</p><p>データを追加したり更新したりする際には、 リレーショナルデータの一貫性やパフォーマンスなどを考慮して トランザクションを使うことを推奨します。</p>
	 * @param resource $connection <p><code>oci_connect()</code>、<code>oci_pconnect()</code> あるいは <code>oci_new_connect()</code> が返す Oracle 接続 ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-commit.php
	 * @see oci_execute(), oci_rollback()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_commit($connection): bool {}

	/**
	 * Oracle データベースに接続する
	 * <p>他のほとんどの OCI8 コールで必要な接続 ID を返します。</p><p>接続の管理及び接続プーリングについての一般的な情報は 接続のハンドリングをご覧下さい。</p><p>PHP 5.1.2 (PECL OCI8 1.1) 以降で、接続を閉じるために <code>oci_close()</code>を使用できます。</p><p>同一の引数で <b>oci_connect()</b> を呼び出すと、 ２回目以降は最初の呼び出しで返された接続ハンドルを返します。 これは、あるハンドル内のトランザクションが、他のハンドル内にも あることを意味します、なぜなら、それらは<i>同一の</i> 基礎となるデータベース接続を使用するからです。 もし２つのハンドルを互いにトランザクション的に分離する必要があれば、 替わりに <code>oci_new_connect()</code> を使用してください。</p>
	 * @param string $username <p>Oracle ユーザー名</p>
	 * @param string $password <p><code>username</code> に対するパスワード</p>
	 * @param string $connection_string <p>接続先の <i>Oracle インスタンス</i>。 » Easy Connect 文字列、tnsnames.ora ファイルの接続文字列、あるいはローカルの Oracle インスタンス名を指定します。</p> <p>省略した場合、PHP は環境変数 <b><code>TWO_TASK</code></b> (Linux) あるいは <b><code>LOCAL</code></b> (Windows) と <b><code>ORACLE_SID</code></b> を用いて接続先の <i>Oracle インスタンス</i> を判断します。</p> <p>Easy Connect 方式を使うには、PHP を Oracle 10<i>g</i> 以降のクライアントライブラリとリンクさせる必要があります。Oracle 10<i>g</i> の Easy Connect 文字列の形式は <i>[//]host_name[:port][/service_name]</i> です。Oracle 11<i>g</i> 以降の場合は、この構文は <i>[//]host_name[:port][/service_name][:server_type][/instance_name]</i> となります。サービス名を調べるには、Oracle のユーティリティ <i>lsnrctl status</i> をデータベースサーバー上で実行します。</p> <p>tnsnames.ora ファイルは Oracle Net のサーチパス上にあります。 サーチパスに含まれるのは $ORACLE_HOME/network/admin や /etc です。もうひとつの方法として、 <i>TNS_ADMIN</i> を指定して $TNS_ADMIN/tnsnames.ora を読み込ませることもできます。 ウェブデーモンにそのファイルの読み込み権限を与えておきましょう。</p>
	 * @param string $character_set <p>Oracle クライアントライブラリが使う文字セットを指定します。 これは、データベースが用いる文字セットと一致させる必要はありません。 一致していない場合は、Oracle が最善を尽くしてデータベースの文字セットとの間の変換を行います。 文字セットによっては、この変換結果がうまく使えないこともあります。 また、変換にはそれなりの時間を要します。</p> <p>省略した場合は、 Oracle クライアントライブラリは環境変数 <b><code>NLS_LANG</code></b> の値をもとに文字セットを判断します。</p> <p>このパラメータを渡すことで、 接続に要する時間を短縮できます。</p>
	 * @param int $session_mode <p>このパラメータは PHP 5 (PECL OCI8 1.1) 以降で使え、 <b><code>OCI_DEFAULT</code></b>、 <b><code>OCI_SYSOPER</code></b> そして <b><code>OCI_SYSDBA</code></b> といった値を指定することができます。<b><code>OCI_SYSOPER</code></b> あるいは <b><code>OCI_SYSDBA</code></b> を指定した場合は、 この関数は外部の証明書を使った特権接続の確立を試みます。 特権接続は、デフォルトでは無効になっています。有効にするには oci8.privileged_connect を <i>On</i> に設定しなければなりません。</p> <p>PHP 5.3 (PECL OCI8 1.3.4) 以降、 <b><code>OCI_CRED_EXT</code></b> モードを使えるようになりました。 これは、Oracle に外部認証あるいは OS 認証を使うよう指示します。 どちらかをデータベースで設定しておかなければなりません。 <b><code>OCI_CRED_EXT</code></b> フラグを使えるのは、ユーザー名が "/" でパスワードが空のときだけです。 oci8.privileged_connect は <i>On</i> あるいは <i>Off</i> のどちらでもかまいません。</p> <p><b><code>OCI_CRED_EXT</code></b> は、 <b><code>OCI_SYSOPER</code></b> あるいは <b><code>OCI_SYSDBA</code></b> モードと組み合わせて使います。</p> <p><b><code>OCI_CRED_EXT</code></b> は、セキュリティ上の理由により Windows ではサポートされていません。</p>
	 * @return resource <p>接続 ID、もしくはエラー時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-connect.php
	 * @see oci_pconnect(), oci_new_connect(), oci_close()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_connect(string $username, string $password, string $connection_string = NULL, string $character_set = NULL, int $session_mode = NULL) {}

	/**
	 * PHP の変数を、クエリで取得するカラムに関連づける
	 * <p>PHP の変数を、<code>oci_fetch()</code> で取得するクエリのカラムに関連づけます。</p><p><b>oci_define_by_name()</b> は、 <code>oci_execute()</code> を実行する前にコールしなければなりません。</p>
	 * @param resource $statement <p><code>oci_parse()</code> で作成して <code>oci_execute()</code> で実行した有効な OCI8 ステートメント ID、 あるいは <i>REF CURSOR</i> ステートメント ID。</p>
	 * @param string $column_name <p>クエリで使用するカラム名。</p> <p>Oracle のデフォルトである大文字小文字を区別しないカラム名では大文字を使います。 大文字小文字を区別するカラム名の場合は、正確なカラム名を使います。</p>
	 * @param mixed $variable <p>返されるカラムの値を格納する PHP 変数。</p>
	 * @param int $type <p>返されるデータの型。一般的には不要です。 Oracle 式のデータ変換は行われないことに注意しましょう。たとえば、 <i>SQLT_INT</i> は無視され、返されるデータの型は <i>SQLT_CHR</i> のままとなります。</p> <p>オプションで、<code>oci_new_descriptor()</code> を使って LOB/ROWID/BFILE の領域を確保することもできます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-define-by-name.php
	 * @see oci_fetch(), oci_new_descriptor()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_define_by_name($statement, string $column_name, &$variable, int $type = SQLT_CHR): bool {}

	/**
	 * 最後に見つかったエラーを返す
	 * <p>最後に見つかったエラーを返します。</p><p>この関数は、エラーが発生した直後にコールしなければなりません。 文の実行が成功すると、エラーはクリアされてしまいます。</p>
	 * @param resource $resource <p>大半のエラーでは、<code>resource</code> は関数コール時に渡されたリソースハンドルとなります。 <code>oci_connect()</code> や <code>oci_new_connect()</code>、 <code>oci_pconnect()</code> の接続エラーの場合は <code>resource</code> を渡しません。</p>
	 * @return array <p>もしエラーが見つからない場合、<b>oci_error()</b> は <b><code>FALSE</code></b> を返します。それ以外の場合は、 <b>oci_error()</b> はエラーの情報を連想配列で返します。</p> <b><b>oci_error()</b> の配列の形式</b>   配列のキー 型 説明     <i>code</i> <code>integer</code>  Oracle のエラーコード。    <i>message</i> <code>string</code>  Oracle のエラーメッセージ。    <i>offset</i> <code>integer</code>  SQL 文の中でのエラーが発生した場所のバイト位置。SQL 文がない場合は <i>0</i> となります。    <i>sqltext</i> <code>string</code>  SQL 文のテキスト。SQL 文がない場合は空文字列となります。
	 * @link https://php.net/manual/ja/function.oci-error.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_error($resource = NULL): array {}

	/**
	 * 文を実行する
	 * <p><code>oci_parse()</code> が返した <code>statement</code> を実行します。</p><p>実行後、<i>INSERT</i> 文などの場合はデフォルトでデータをデータベースにコミットします。 <i>SELECT</i> 文などの場合は問い合わせを実行します。 問い合わせの結果をその後 PHP で取得するには <code>oci_fetch_array()</code> などの関数を使います。</p><p>一度パースした文は何度でも実行することができ、 これを使えば毎回パースするコストを節約することができます。 この方法は、<code>oci_bind_by_name()</code> でデータをバインドした <i>INSERT</i> 文で一般的に使われています。</p>
	 * @param resource $statement <p>有効な OCI ステートメント ID。</p>
	 * @param int $mode <p>オプションの二番目のパラメータは、次の定数のいずれかとなります。</p> <b>実行モード</b>   定数 説明     <b><code>OCI_COMMIT_ON_SUCCESS</code></b> ステートメントの実行に成功すると、 この接続においてまだ確定していない変更をすべてコミットします。 これがデフォルトです。   <b><code>OCI_DESCRIBE_ONLY</code></b>  <code>oci_field_name()</code> 関数などでクエリのメタデータを使えるようにしますが、 結果セットは作りません。続けて <code>oci_fetch_array()</code> などをコールすると失敗します。   <b><code>OCI_NO_AUTO_COMMIT</code></b> 変更を自動的にはコミットしません。PHP 5.3.2 (PECL OCI8 1.4) より前のバージョンでは <b><code>OCI_DEFAULT</code></b> を使います。これは、 <b><code>OCI_NO_AUTO_COMMIT</code></b> と同じ意味です。    <p><b><code>OCI_NO_AUTO_COMMIT</code></b> モードを使うとトランザクションを開始あるいは続行します。 接続を閉じたりスクリプトが終了したりしたときに、 トランザクションは自動的にロールバックされます。 トランザクションをコミットするには <code>oci_commit()</code> を、破棄するには <code>oci_rollback()</code> をコールします。</p> <p>データを追加したり更新したりする際には、 リレーショナルデータの一貫性やパフォーマンスなどを考慮して トランザクションを使うことを推奨します。</p> <p><b><code>OCI_NO_AUTO_COMMIT</code></b> モードを使った文を実行した後に <code>oci_commit()</code> あるいは <code>oci_rollback()</code> をコールしなかった場合、 たとえデータが変更されていなくても スクリプトの終了時に OCI8 がロールバックを実行します。 不要なロールバックを避けるために、多くのスクリプトはクエリや PL/SQL で <b><code>OCI_NO_AUTO_COMMIT</code></b> モードを使いません。 同じスクリプトの中で異なるモードで <b>oci_execute()</b> を実行する場合は、 アプリケーション内で適切なトランザクションの一貫性を確保するよう注意しましょう。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-execute.php
	 * @see oci_parse()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_execute($statement, int $mode = OCI_COMMIT_ON_SUCCESS): bool {}

	/**
	 * クエリの次の行を内部バッファに取得する
	 * <p>クエリの次の行を内部バッファに取得します。このバッファへは <code>oci_result()</code> でアクセスできます。あるいは、 <code>oci_define_by_name()</code> で事前に定義した変数を使ってアクセスすることもできます。</p><p>データの取得に関する全般的な情報は <code>oci_fetch_array()</code> を参照ください。</p>
	 * @param resource $statement <p><code>oci_parse()</code> で作成して <code>oci_execute()</code> で実行した有効な OCI8 ステートメント ID、 あるいは <i>REF CURSOR</i> ステートメント ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、 <code>statement</code> にもう行がない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-fetch.php
	 * @see oci_define_by_name(), oci_fetch_all(), oci_fetch_array(), oci_fetch_assoc(), oci_fetch_object(), oci_fetch_row(), oci_result()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch($statement): bool {}

	/**
	 * クエリからの複数の行を二次元配列に取得する
	 * <p>クエリからの複数の行を二次元配列に取得します。 デフォルトでは、すべての行を返します。</p><p>この関数は、クエリを <code>oci_execute()</code> で実行した後でのみコールすることができます。</p>
	 * @param resource $statement <p><code>oci_parse()</code> で作成して <code>oci_execute()</code> で実行した有効な OCI8 ステートメント ID、 あるいは <i>REF CURSOR</i> ステートメント ID。</p>
	 * @param array $output <p>返された行を格納する変数。</p> <p>LOB 列は文字列として返されます。 Oracle は変換をサポートしています。</p> <p>データや型の取得についての詳細な情報は <code>oci_fetch_array()</code> を参照ください。</p>
	 * @param int $skip <p>結果を取得する際に無視する行数 (デフォルトの値は 0 で、最初の行から開始されます)。</p>
	 * @param int $maxrows <p>読み込む行数。デフォルトは -1 で、これは <code>skip</code> + 1 番目の行以降のすべての行を意味します。</p>
	 * @param int $flags <p>パラメータ <code>flags</code> は、 配列の構造をあらわし、また連想配列を使うかどうかもあらわします。</p> <b><b>oci_fetch_all()</b> の配列構造モード</b>   定数 説明     <b><code>OCI_FETCHSTATEMENT_BY_ROW</code></b> 配列の配列で、内側の配列はクエリの行単位となります。   <b><code>OCI_FETCHSTATEMENT_BY_COLUMN</code></b> 配列の配列で、内側の配列はクエリの列単位となります。 これがデフォルトです。    <p>配列のインデックスには、カラム名あるいは数値を使うことができます。 結果は、どれか一つのモードでだけ返されます。</p> <b><b>oci_fetch_all()</b> の配列インデックスモード</b>   定数 説明     <b><code>OCI_NUM</code></b> 各列の配列に数値添字を使います。   <b><code>OCI_ASSOC</code></b> 各カラムを連想配列にします。 これがデフォルトです。    <p>加算演算子 "+" を使って、 配列の構造とインデックス形式の組み合わせを選択します。</p> <p>Oracle のデフォルトである大文字小文字を区別しないカラム名の場合は、 配列のキーは大文字となります。大文字小文字を区別するカラム名の場合は、 配列のキーの大文字小文字は実際のカラム名と同じになります。 <code>var_dump()</code> で <code>output</code> を確認し、大文字小文字を適切に指定するようにしましょう。</p> <p>同じ名前のカラムが複数あるクエリでは、カラムの別名を使わなければなりません。 そうしないと、連想配列にあらわれるのはその中の一つのカラムだけとなってしまいます。</p>
	 * @return int <p><code>output</code> の行数を返します。これは 0 以上の値となります。 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.oci-fetch-all.php
	 * @see oci_fetch(), oci_fetch_array(), oci_fetch_assoc(), oci_fetch_object(), oci_fetch_row(), oci_set_prefetch()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch_all($statement, array &$output, int $skip = 0, int $maxrows = -1, int $flags = OCI_FETCHSTATEMENT_BY_COLUMN + OCI_ASSOC): int {}

	/**
	 * クエリの次の行を連想配列あるいは数値添字配列で返す
	 * <p>クエリから、結果セットの次の行を含む配列を返します。 配列の各エントリが行の各カラムをあらわします。 この関数の典型的な使い方は、ループの中で <b><code>FALSE</code></b> を返すまでコールすることです。 <b><code>FALSE</code></b> は、もう行がないことを意味します。</p><p><code>statement</code> が Oracle Database 12c の暗黙の結果セットを返す PL/SQL ブロックである場合、 すべてのセットからの行を続けて取得します。 <code>statement</code> が <code>oci_get_implicit_resultset()</code> の戻す値である場合、 ひとつの子クエリーからの行のサブセットだけを返します。</p><p>OCI8 拡張モジュールによるデータ型マッピングの 詳細については、ドライバが サポートするデータ型 を参照ください。</p>
	 * @param resource $statement <p><code>oci_parse()</code> で作成して <code>oci_execute()</code> で実行した有効な OCI8 ステートメント ID、 あるいは <i>REF CURSOR</i> ステートメント ID。</p> <p><code>oci_get_implicit_resultset()</code> が戻すステートメント ID も指定できます。</p>
	 * @param int $mode <p>オプションの第2引数は、次の定数の組み合わせが可能です。</p> <b><b>oci_fetch_array()</b> のモード</b>   定数 説明     <b><code>OCI_BOTH</code></b> 連想配列と配列の両方を返します。 これは <b><code>OCI_ASSOC</code></b> + <b><code>OCI_NUM</code></b> と同等で、 デフォルトの動作です。   <b><code>OCI_ASSOC</code></b> 連想配列を返します。   <b><code>OCI_NUM</code></b> 数値添字配列を返します。   <b><code>OCI_RETURN_NULLS</code></b>  <b><code>NULL</code></b> フィールドの要素も作成します。この要素の値は PHP の <b><code>NULL</code></b> となります。    <b><code>OCI_RETURN_LOBS</code></b> LOB ディスクリプタではなく LOB の中身を返します。    <p>デフォルトの <code>mode</code> は <b><code>OCI_BOTH</code></b> です。</p> <p>加算演算子 "+" を使うと、複数のモードを同時に指定できます。</p>
	 * @return array <p>連想配列や数値添字配列を返します。 <code>statement</code> にもう行がない場合は <b><code>FALSE</code></b> を返します。</p><p>デフォルトでは、<i>LOB</i> カラムは LOB ディスクリプタを返します。</p><p><i>DATE</i> カラムは、現行のデータフォーマットにフォーマットされた 文字列として返されます。既定のフォーマットは <i>NLS_LANG</i> のような Oracle 環境変数で変更したり、またはあらかじめ <i>ALTER SESSION SET NLS_DATE_FORMAT</i> コマンドを実行して変更します。</p><p>Oracle のデフォルトでは、大文字小文字を区別しないカラム名はすべて大文字となり、 結果の連想配列のインデックスも大文字になります。 大文字小文字を区別するカラム名は、配列のインデックスもそれと同じになります。 結果の配列を <code>var_dump()</code> すれば、 各クエリの大文字小文字を確かめることができます。</p><p>テーブル名は配列のインデックスには含まれません。 もし同じ名前の別カラムを複数取得するクエリを実行する場合は、 <b><code>OCI_NUM</code></b> を使うか、あるいはカラムのエイリアスを指定して名前の一意性を保ちましょう。 例 7 を参照ください。そうしなければ、PHP からはひとつのカラムだけしか見えなくなります。</p>
	 * @link https://php.net/manual/ja/function.oci-fetch-array.php
	 * @see oci_fetch(), oci_fetch_all(), oci_fetch_assoc(), oci_fetch_object(), oci_fetch_row(), oci_set_prefetch()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch_array($statement, int $mode = NULL): array {}

	/**
	 * クエリの次の行を連想配列で返す
	 * <p>クエリの次の結果セット行を含む連想配列を返します。 配列の各エントリが、カラムに対応します。 この関数の典型的な使い方は、ループの中でコールすることです。 <b><code>FALSE</code></b> が返された場合は、もう行がないことをあらわします。</p><p><b>oci_fetch_assoc()</b> をコールするのは、 <code>oci_fetch_array()</code> で <b><code>OCI_ASSOC</code></b> + <b><code>OCI_RETURN_NULLS</code></b> を指定してコールするのと同じです。</p>
	 * @param resource $statement <p><code>oci_parse()</code> で作成して <code>oci_execute()</code> で実行した有効な OCI8 ステートメント ID、 あるいは <i>REF CURSOR</i> ステートメント ID。</p>
	 * @return array <p>連想配列を返します。 <code>statement</code> にもう行がない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-fetch-assoc.php
	 * @see oci_fetch(), oci_fetch_all(), oci_fetch_array(), oci_fetch_object(), oci_fetch_row()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch_assoc($statement): array {}

	/**
	 * クエリの次の行をオブジェクトとして返す
	 * <p>クエリから、結果セットの次の行を含むオブジェクトを返します。 オブジェクトの各属性が行の各カラムをあらわします。 この関数の典型的な使い方は、ループの中で <b><code>FALSE</code></b> を返すまでコールすることです。 <b><code>FALSE</code></b> は、もう行がないことを意味します。</p><p>OCI8 拡張モジュールによるデータ型マッピングの 詳細については、ドライバが サポートするデータ型 を参照ください。</p>
	 * @param resource $statement <p><code>oci_parse()</code> で作成して <code>oci_execute()</code> で実行した有効な OCI8 ステートメント ID、 あるいは <i>REF CURSOR</i> ステートメント ID。</p>
	 * @return object <p>オブジェクトを返します。 オブジェクトの属性は文中のフィールドと一致しています。 <code>statement</code> にもう行がない場合は <b><code>FALSE</code></b> を返します。</p><p><i>LOB</i> カラムは LOB ディスクリプタを返します。</p><p><i>DATE</i> カラムは、現行のデータフォーマットにフォーマットされた 文字列として返されます。既定のフォーマットは <i>NLS_LANG</i> のような Oracle 環境変数で変更したり、またはあらかじめ <i>ALTER SESSION SET NLS_DATE_FORMAT</i> コマンドを実行して変更します。</p><p>Oracle のデフォルトでは、文字の大小を区別しないカラム名はすべて大文字となります。 文字の大小を区別するカラム名は、属性の名前もそれと同じになります。 結果のオブジェクト配列を <code>var_dump()</code> すれば、 属性にアクセスするための大文字小文字の区別を確かめられます。</p><p><i>NULL</i> データ・フィールドの全てに対して、属性の値は <b><code>NULL</code></b> になります。</p>
	 * @link https://php.net/manual/ja/function.oci-fetch-object.php
	 * @see oci_fetch(), oci_fetch_all(), oci_fetch_assoc(), oci_fetch_array(), oci_fetch_row()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch_object($statement): object {}

	/**
	 * クエリの次の行を配列で返す
	 * <p>クエリから、結果セットの次の行を含む数値添字配列を返します。 配列の各エントリが行の各カラムに対応します。 この関数の典型的な使用法は、ループの中で <b><code>FALSE</code></b> を返すまで繰り返すことです。 <b><code>FALSE</code></b> は、もう行がないことをあらわします。</p><p><b>oci_fetch_row()</b> をコールすることは、 <code>oci_fetch_array()</code> で <b><code>OCI_NUM</code></b> + <b><code>OCI_RETURN_NULLS</code></b> を指定してコールすることと同じです。</p>
	 * @param resource $statement <p><code>oci_parse()</code> で作成して <code>oci_execute()</code> で実行した有効な OCI8 ステートメント ID、 あるいは <i>REF CURSOR</i> ステートメント ID。</p>
	 * @return array <p>数値添字配列を返します。 <code>statement</code> にもう行がない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-fetch-row.php
	 * @see oci_fetch(), oci_fetch_all(), oci_fetch_array(), oci_fetch_assoc(), oci_fetch_object()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_fetch_row($statement): array {}

	/**
	 * フェッチしたフィールドが NULL であるかどうかを確認する
	 * <p><code>statement</code> の現在の行の、 指定したフィールド <code>field</code> が <b><code>NULL</code></b> であるかどうかを調べます。</p>
	 * @param resource $statement <p>有効な OCI ステートメント ID。</p>
	 * @param mixed $field <p>(1 から始まる) フィールド番号、またはフィールド名。</p>
	 * @return bool <p><code>field</code> が <b><code>NULL</code></b> の場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-field-is-null.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_field_is_null($statement, $field): bool {}

	/**
	 * 文からのフィールド名を返す
	 * <p><code>field</code> の名前を返します。</p>
	 * @param resource $statement <p>有効な OCI ステートメント ID。</p>
	 * @param mixed $field <p>フィールド番号 (1 から始まる) あるいは名前のいずれか。</p>
	 * @return string <p>名前を表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-field-name.php
	 * @see oci_num_fields(), oci_field_type(), oci_field_size()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_field_name($statement, $field): string {}

	/**
	 * フィールドの精度を問い合わせる
	 * <p><code>field</code> の精度を返します。</p><p>FLOAT 型カラムの精度は 0 でなく桁数は -127 となります。 もし精度が 0 の場合、カラムは NUMBER 型、そうでなければ NUMBER(精度, 桁数) となります。</p>
	 * @param resource $statement <p>有効な OCI ステートメント ID。</p>
	 * @param mixed $field <p>フィールド番号 (1 から始まる) あるいは名前のいずれか。</p>
	 * @return int <p>精度を表す整数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-field-precision.php
	 * @see oci_field_scale(), oci_field_type()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_field_precision($statement, $field): int {}

	/**
	 * フィールドの桁数を問い合わせる
	 * <p><code>field</code> に対応するカラムの桁数を返します。</p><p>FLOAT 型カラムの精度は 0 でなく桁数は -127 となります。 もし精度が 0 の場合、カラムは NUMBER 型、そうでなければ NUMBER(精度, 桁数) となります。</p>
	 * @param resource $statement <p>有効な OCI ステートメント ID。</p>
	 * @param mixed $field <p>フィールド番号 (1 から始まる) あるいは名前のいずれか。</p>
	 * @return int <p>桁数を表す整数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-field-scale.php
	 * @see oci_field_precision(), oci_field_type()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_field_scale($statement, $field): int {}

	/**
	 * フィールドサイズを返す
	 * <p>フィールド <code>field</code> のサイズを返します。</p>
	 * @param resource $statement <p>有効な OCI ステートメント ID。</p>
	 * @param mixed $field <p>フィールドのインデックス (1 から始まるもの) あるいは名前。</p>
	 * @return int <p>フィールド <code>field</code> のサイズを表すバイト数、あるいは エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-field-size.php
	 * @see oci_num_fields(), oci_field_name()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_field_size($statement, $field): int {}

	/**
	 * フィールドのデータ型の名前を返す
	 * <p>フィールドのデータ型の名前を返します。</p>
	 * @param resource $statement <p>有効な OCI ステートメント ID。</p>
	 * @param mixed $field <p>フィールド番号 (1 から始まる) あるいは名前のいずれか。</p>
	 * @return mixed <p>フィールドのデータ型を表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-field-type.php
	 * @see oci_num_fields(), oci_field_name(), oci_field_size()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_field_type($statement, $field) {}

	/**
	 * Oracle におけるフィールドの型を問い合わせる
	 * <p>フィールド <code>field</code> の、Oracle における生の "SQLT" データ型を返します。</p><p>フィールドの型の名前を取得したい場合は <code>oci_field_type()</code> を使いましょう。</p>
	 * @param resource $statement <p>有効な OCI ステートメント ID。</p>
	 * @param mixed $field <p>フィールド番号 (1 から始まる) あるいは名前のいずれか。</p>
	 * @return int <p>Oracle のデータ型を表す数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-field-type-raw.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_field_type_raw($statement, $field): int {}

	/**
	 * ディスクリプタを解放する
	 * <p><code>oci_new_descriptor()</code> で確保したディスクリプタを解放します。</p>
	 * @param resource $descriptor
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-free-descriptor.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_free_descriptor($descriptor): bool {}

	/**
	 * 文やカーソルに関連付けられた全てのリソースを解放する
	 * <p><code>oci_parse()</code> の結果や Oracle から取得した、 Oracle のカーソルおよび文に関連付けられた全てのリソースを解放します。</p>
	 * @param resource $statement <p>有効な OCI ステートメント ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-free-statement.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_free_statement($statement): bool {}

	/**
	 * Oracle Database 12c の暗黙の結果セットを持つ親ステートメント・リソースから次の子ステートメント・リソースを返す
	 * <p>ストアドまたは匿名の Oracle PL/SQL ブロックを実行後、 クエリの結果の連続したセットを取得するために使用されます。 そのブロックは、Oracle の <i>DBMS_SQL.RETURN_RESULT</i> PL/SQL 関数によりクエリの結果を返します。 これにより、PL/SQL ブロックはクエリ結果を簡単に返すことができます。</p><p>子ステートメントは、任意の OCI8 取得関数とともに使用できます。 その関数は、<code>oci_fetch()</code>、<code>oci_fetch_all()</code>、 <code>oci_fetch_array()</code>、<code>oci_fetch_object()</code>、 <code>oci_fetch_assoc()</code> または <code>oci_fetch_row()</code> です。</p><p>子ステートメントは、それらの親ステートメントのプリフェッチ値を継承するか、 または <code>oci_set_prefetch()</code> により明示的に設定することができます。</p>
	 * @param resource $statement <p><code>oci_parse()</code> により作成され、 <code>oci_execute()</code> により実行される 有効な OCI8 ステートメント ID 。 そのステートメント ID は、 暗黙の結果セットを返す SQL 文に関連づけられているかもしれませんし、 いないかもしれません。</p>
	 * @return resource <p><code>statement</code> 上で使用可能な 次の子ステートメントに対する文ハンドラを返します。 子ステートメントが存在しないか、 または <b>oci_get_implicit_resultset()</b> への前の呼び出しにより、 すべての子ステートメントが返されていた場合、 <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-get-implicit-resultset.php
	 * @since PHP 5 >= 5.6.0, PHP 7, PECL OCI8 >= 2.0.0
	 */
	function oci_get_implicit_resultset($statement) {}

	/**
	 * 内部デバッグ用の出力を有効または無効にする
	 * <p>内部デバッグ用の出力を有効あるいは無効にします。</p>
	 * @param bool $onoff <p>これを <b><code>FALSE</code></b> にするとデバッグ出力をオフにし、 <b><code>TRUE</code></b> にするとオンになります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.oci-internal-debug.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_internal_debug(bool $onoff): void {}

	/**
	 * ラージオブジェクトをコピーする
	 * <p>ラージオブジェクトあるいはラージオブジェクトの一部を 他のラージオブジェクトにコピーします。 受け取り側の LOB の古いデータは上書きされます。</p><p>もし LOB の特定部分を LOB の特定の位置にコピーする必要がある場合、 <code>OCI-Lob::seek()</code> を使用して LOB の内部ポインタを移動させることができます。</p>
	 * @param \OCI_Lob $lob_to <p>コピー先の LOB。</p>
	 * @param \OCI_Lob $lob_from <p>コピー元の LOB。</p>
	 * @param int $length <p>コピーされるデータの長さ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-lob-copy.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_lob_copy(\OCI_Lob $lob_to, \OCI_Lob $lob_from, int $length = 0): bool {}

	/**
	 * 2 つの LOB/FILE ロケータの等価性を比較する
	 * <p>2 つの LOB/FILE ロケータを比較します。</p>
	 * @param \OCI_Lob $lob1 <p>LOB の ID。</p>
	 * @param \OCI_Lob $lob2 <p>LOB の ID。</p>
	 * @return bool <p>これらのオブジェクトが等しい場合 <b><code>TRUE</code></b> を返し、 そうでなければ <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-lob-is-equal.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_lob_is_equal(\OCI_Lob $lob1, \OCI_Lob $lob2): bool {}

	/**
	 * 新しいコレクションオブジェクトを割り当てる
	 * <p>新しいコレクションオブジェクトを割り当てます。</p>
	 * @param resource $connection <p><code>oci_connect()</code> あるいは <code>oci_pconnect()</code> が返す Oracle 接続 ID。</p>
	 * @param string $tdo <p>有効な型名 (大文字)。</p>
	 * @param string $schema <p>型を作成したスキーマを指定しなければなりません。 現在のユーザー名がデフォルト値となります。</p>
	 * @return OCI-Collection <p>新しい <b>OCICollection</b> オブジェクト、 あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-new-collection.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_new_collection($connection, string $tdo, string $schema = NULL): \OCI_Collection {}

	/**
	 * 一意な接続を使って Oracle サーバーへ接続する
	 * <p>Oracle サーバーへの新規接続を確立し、ログオンします。</p><p><code>oci_connect()</code> や <code>oci_pconnect()</code> と異なり、<b>oci_new_connect()</b> は接続をキャッシュしません。また、 常に新しくオープンされた接続ハンドルを返します。 これは、もしアプリケーションが 2 セットのクエリ間でトランザクション的な独立を必要とする場合に有効です。</p>
	 * @param string $username <p>Oracle のユーザー名。</p>
	 * @param string $password <p><code>username</code> のパスワード。</p>
	 * @param string $connection_string <p>接続先の <i>Oracle インスタンス</i>。 » Easy Connect 文字列、tnsnames.ora ファイルの接続文字列、あるいはローカルの Oracle インスタンス名を指定します。</p> <p>省略した場合、PHP は環境変数 <b><code>TWO_TASK</code></b> (Linux) あるいは <b><code>LOCAL</code></b> (Windows) と <b><code>ORACLE_SID</code></b> を用いて接続先の <i>Oracle インスタンス</i> を判断します。</p> <p>Easy Connect 方式を使うには、PHP を Oracle 10<i>g</i> 以降のクライアントライブラリとリンクさせる必要があります。Oracle 10<i>g</i> の Easy Connect 文字列の形式は <i>[//]host_name[:port][/service_name]</i> です。Oracle 11<i>g</i> 以降の場合は、この構文は <i>[//]host_name[:port][/service_name][:server_type][/instance_name]</i> となります。サービス名を調べるには、Oracle のユーティリティ <i>lsnrctl status</i> をデータベースサーバー上で実行します。</p> <p>tnsnames.ora ファイルは Oracle Net のサーチパス上にあります。 サーチパスに含まれるのは $ORACLE_HOME/network/admin や /etc です。もうひとつの方法として、 <i>TNS_ADMIN</i> を指定して $TNS_ADMIN/tnsnames.ora を読み込ませることもできます。 ウェブデーモンにそのファイルの読み込み権限を与えておきましょう。</p>
	 * @param string $character_set <p>Oracle クライアントライブラリが使う文字セットを指定します。 これは、データベースが用いる文字セットと一致させる必要はありません。 一致していない場合は、Oracle が最善を尽くしてデータベースの文字セットとの間の変換を行います。 文字セットによっては、この変換結果がうまく使えないこともあります。 また、変換にはそれなりの時間を要します。</p> <p>省略した場合は、 Oracle クライアントライブラリは環境変数 <b><code>NLS_LANG</code></b> の値をもとに文字セットを判断します。</p> <p>このパラメータを渡すことで、 接続に要する時間を短縮できます。</p>
	 * @param int $session_mode <p>このパラメータは PHP 5 (PECL OCI8 1.1) 以降で使え、 <b><code>OCI_DEFAULT</code></b>、 <b><code>OCI_SYSOPER</code></b> そして <b><code>OCI_SYSDBA</code></b> といった値を指定することができます。<b><code>OCI_SYSOPER</code></b> あるいは <b><code>OCI_SYSDBA</code></b> を指定した場合は、 この関数は外部の証明書を使った特権接続の確立を試みます。 特権接続は、デフォルトでは無効になっています。有効にするには oci8.privileged_connect を <i>On</i> に設定しなければなりません。</p> <p>PHP 5.3 (PECL OCI8 1.3.4) 以降、 <b><code>OCI_CRED_EXT</code></b> モードを使えるようになりました。 これは、Oracle に外部認証あるいは OS 認証を使うよう指示します。 どちらかをデータベースで設定しておかなければなりません。 <b><code>OCI_CRED_EXT</code></b> フラグを使えるのは、ユーザー名が "/" でパスワードが空のときだけです。 oci8.privileged_connect は <i>On</i> あるいは <i>Off</i> のどちらでもかまいません。</p> <p><b><code>OCI_CRED_EXT</code></b> は、 <b><code>OCI_SYSOPER</code></b> あるいは <b><code>OCI_SYSDBA</code></b> モードと組み合わせて使います。</p> <p><b><code>OCI_CRED_EXT</code></b> は、セキュリティ上の理由により Windows ではサポートされていません。</p>
	 * @return resource <p>接続 ID、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-new-connect.php
	 * @see oci_connect(), oci_pconnect()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_new_connect(string $username, string $password, string $connection_string = NULL, string $character_set = NULL, int $session_mode = NULL) {}

	/**
	 * 新規カーソル (ステートメントハンドル) を割り当て、それを返す
	 * <p>指定された接続に新規カーソルを割り当てます。</p>
	 * @param resource $connection <p><code>oci_connect()</code> あるいは <code>oci_pconnect()</code> が返す Oracle 接続 ID。</p>
	 * @return resource <p>新しいステートメントハンドル、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-new-cursor.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_new_cursor($connection) {}

	/**
	 * 空の新規 LOB あるいは FILE ディスクリプタを初期化する
	 * <p>ディスクリプタあるいは LOB ロケータを保持するリソースを確保します。</p>
	 * @param resource $connection <p><code>oci_connect()</code> あるいは <code>oci_pconnect()</code> が返す Oracle 接続 ID。</p>
	 * @param int $type <p><code>type</code> として有効な値は、 <b><code>OCI_DTYPE_FILE</code></b>、<b><code>OCI_DTYPE_LOB</code></b> および <b><code>OCI_DTYPE_ROWID</code></b> です。</p>
	 * @return OCI-Lob <p>成功した場合に新しい LOB あるいは FILE ディスクリプタ、 エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-new-descriptor.php
	 * @see oci_bind_by_name()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_new_descriptor($connection, int $type = OCI_DTYPE_LOB): \OCI_Lob {}

	/**
	 * ある文における結果のカラム数を返す
	 * <p>指定した文 <code>statement</code> におけるカラムの数を返します。</p>
	 * @param resource $statement <p>有効な OCI ステートメント ID。</p>
	 * @return int <p>カラムの数を表す整数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-num-fields.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_num_fields($statement): int {}

	/**
	 * 文の実行で作用された行数を取得する
	 * <p>文の実行で作用された行数を取得します。</p>
	 * @param resource $statement <p>有効な OCI ステートメント ID。</p>
	 * @return int <p>作用された行の数を表す整数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-num-rows.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_num_rows($statement): int {}

	/**
	 * 実行のために Oracle の文をパースする
	 * <p><code>connection</code> を使って <code>sql_text</code> をパースし、ステートメント ID を返します。この ID は、<code>oci_bind_by_name()</code>, <code>oci_execute()</code> や他の関数で使用されます。</p><p>ステートメント ID を解放するには、 <code>oci_free_statement()</code> を使うか、あるいは 変数に <b><code>NULL</code></b> を代入します。</p>
	 * @param resource $connection <p><code>oci_connect()</code>、<code>oci_pconnect()</code> あるいは <code>oci_new_connect()</code> が返す Oracle 接続 ID。</p>
	 * @param string $sql_text <p>SQL あるいは PL/SQL ステートメント。</p> <p>SQL の最後にセミコロン (";") をつけては <i>いけません</i>。一方、PL/SQL ステートメントの最後はセミコロン (";") を <i>つけなければなりません</i>。</p>
	 * @return resource <p>成功した場合にステートメントハンドル、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-parse.php
	 * @see oci_execute(), oci_free_statement()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_parse($connection, string $sql_text) {}

	/**
	 * Oracle ユーザーのパスワードを変更する
	 * <p>ユーザー <code>username</code> のパスワードを変更します。</p><p><b>oci_password_change()</b> が役立つのは、 PHP コマンドラインスクリプトで使う場合や PHP アプリケーションで持続的でない接続を使う場合です。</p>
	 * @param resource $connection <p><code>oci_connect()</code> あるいは <code>oci_pconnect()</code> が返す Oracle 接続 ID。</p>
	 * @param string $username <p>Oracle のユーザー名。</p>
	 * @param string $old_password <p>旧パスワード。</p>
	 * @param string $new_password <p>設定したい、新しいパスワード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-password-change.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_password_change($connection, string $username, string $old_password, string $new_password): bool {}

	/**
	 * 持続的接続を使用してOracle データベースに接続する
	 * <p>Oracle サーバーへの持続的接続を生成し、ログオンします。</p><p>持続的接続はキャッシュされ、リクエスト間で再利用されることで、 各ページロードのオーバーヘッドを軽減します。 典型的な PHP アプリケーションでは、Apache の子プロセス (もしくは PHP FastCGI/CGI プロセス) ごとに Oracle サーバーに対してオープンされた単一の持続的接続を有します。 より詳細な情報については、持続的データベース接続 のセクションを参照してください。</p>
	 * @param string $username <p>Oracle のユーザー名。</p>
	 * @param string $password <p><code>username</code> のパスワード。</p>
	 * @param string $connection_string <p>接続先の <i>Oracle インスタンス</i>。 » Easy Connect 文字列、tnsnames.ora ファイルの接続文字列、あるいはローカルの Oracle インスタンス名を指定します。</p> <p>省略した場合、PHP は環境変数 <b><code>TWO_TASK</code></b> (Linux) あるいは <b><code>LOCAL</code></b> (Windows) と <b><code>ORACLE_SID</code></b> を用いて接続先の <i>Oracle インスタンス</i> を判断します。</p> <p>Easy Connect 方式を使うには、PHP を Oracle 10<i>g</i> 以降のクライアントライブラリとリンクさせる必要があります。Oracle 10<i>g</i> の Easy Connect 文字列の形式は <i>[//]host_name[:port][/service_name]</i> です。Oracle 11<i>g</i> 以降の場合は、この構文は <i>[//]host_name[:port][/service_name][:server_type][/instance_name]</i> となります。サービス名を調べるには、Oracle のユーティリティ <i>lsnrctl status</i> をデータベースサーバー上で実行します。</p> <p>tnsnames.ora ファイルは Oracle Net のサーチパス上にあります。 サーチパスに含まれるのは $ORACLE_HOME/network/admin や /etc です。もうひとつの方法として、 <i>TNS_ADMIN</i> を指定して $TNS_ADMIN/tnsnames.ora を読み込ませることもできます。 ウェブデーモンにそのファイルの読み込み権限を与えておきましょう。</p>
	 * @param string $character_set <p>Oracle クライアントライブラリが使う文字セットを指定します。 これは、データベースが用いる文字セットと一致させる必要はありません。 一致していない場合は、Oracle が最善を尽くしてデータベースの文字セットとの間の変換を行います。 文字セットによっては、この変換結果がうまく使えないこともあります。 また、変換にはそれなりの時間を要します。</p> <p>省略した場合は、 Oracle クライアントライブラリは環境変数 <b><code>NLS_LANG</code></b> の値をもとに文字セットを判断します。</p> <p>このパラメータを渡すことで、 接続に要する時間を短縮できます。</p>
	 * @param int $session_mode <p>このパラメータは PHP 5 (PECL OCI8 1.1) 以降で使え、 <b><code>OCI_DEFAULT</code></b>、 <b><code>OCI_SYSOPER</code></b> そして <b><code>OCI_SYSDBA</code></b> といった値を指定することができます。<b><code>OCI_SYSOPER</code></b> あるいは <b><code>OCI_SYSDBA</code></b> を指定した場合は、 この関数は外部の証明書を使った特権接続の確立を試みます。 特権接続は、デフォルトでは無効になっています。有効にするには oci8.privileged_connect を <i>On</i> に設定しなければなりません。</p> <p>PHP 5.3 (PECL OCI8 1.3.4) 以降、 <b><code>OCI_CRED_EXT</code></b> モードを使えるようになりました。 これは、Oracle に外部認証あるいは OS 認証を使うよう指示します。 どちらかをデータベースで設定しておかなければなりません。 <b><code>OCI_CRED_EXT</code></b> フラグを使えるのは、ユーザー名が "/" でパスワードが空のときだけです。 oci8.privileged_connect は <i>On</i> あるいは <i>Off</i> のどちらでもかまいません。</p> <p><b><code>OCI_CRED_EXT</code></b> は、 <b><code>OCI_SYSOPER</code></b> あるいは <b><code>OCI_SYSDBA</code></b> モードと組み合わせて使います。</p> <p><b><code>OCI_CRED_EXT</code></b> は、セキュリティ上の理由により Windows ではサポートされていません。</p>
	 * @return resource <p>接続 ID、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-pconnect.php
	 * @see oci_connect(), oci_new_connect()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_pconnect(string $username, string $password, string $connection_string = NULL, string $character_set = NULL, int $session_mode = NULL) {}

	/**
	 * Register a user-defined callback function for Oracle Database TAF
	 * <p>Registers a user-defined callback function to <code>connection</code>. If <code>connection</code> fails due to instance or network failure, the registered callback function will be invoked for several times during failover. See OCI8 Transparent Application Failover (TAF) Support for information.</p><p>When <b>oci_register_taf_callback()</b> is called multiple times, each registration overwrites the previous one.</p><p>Use <code>oci_unregister_taf_callback()</code> to explicitly unregister a user-defined callback.</p><p>TAF callback registration will NOT be saved across persistent connections, therefore the callback needs to be re-registered for a new persistent connection.</p>
	 * @param resource $connection <p>An Oracle connection identifier.</p>
	 * @param mixed $callbackFn <p>A user-defined callback to register for Oracle TAF. It can be a string of the function name or a Closure (anonymous function).</p> <p>The interface of a TAF user-defined callback function is as follows:</p>  <b>userCallbackFn</b> ( resource <code>$connection</code> , int <code>$event</code> , int <code>$type</code> ) : int  <p>See the parameter description and an example on  OCI8 Transparent Application Failover (TAF) Support page.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-register-taf-callback.php
	 * @see oci_unregister_taf_callback()
	 * @since PHP 7.0 >= 7.0.21, PHP 7 >= 7.1.7, PECL OCI8 >= 2.1.7
	 */
	function oci_register_taf_callback($connection, $callbackFn = NULL): bool {}

	/**
	 * フェッチした行からフィールドの値を取得する
	 * <p><code>oci_fetch()</code> によってフェッチされた現在の行のフィールド <code>field</code>からデータを返します。</p><p>OCI8 拡張モジュールによるデータ型マッピングの 詳細については、ドライバが サポートするデータ型 を参照ください。</p>
	 * @param resource $statement
	 * @param mixed $field <p>カラム番号 (1から始まる) またはカラム名 (大文字) のどちらかを使用可能です。 カラム名の大文字小文字は、Oracle のメタデータで定義されているものに会わせる必要があります。 カラムの作成時に大文字小文字を明示しなかった場合、メタデータ上は大文字で記録されています。</p>
	 * @return mixed <p>抽象型 (ROWID, LOB, FILE) を除き、全てを文字列として返します。 エラーの場合、<b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-result.php
	 * @see oci_fetch_array(), oci_fetch_assoc(), oci_fetch_object(), oci_fetch_row(), oci_fetch_all()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_result($statement, $field) {}

	/**
	 * 未解決のデータベーストランザクションをロールバックする
	 * <p>Oracle 接続 <code>connection</code> について、 コミットされていないすべての変更を取り消します。 取得しているロックはすべて解放します。また、すべての Oracle <i>SAVEPOINTS</i> を削除します。</p><p>トランザクションが始まるのは、データを変更する最初の SQL 文が <b><code>OCI_NO_AUTO_COMMIT</code></b> フラグつきの <code>oci_execute()</code> で実行されたときです。 それ以降、他の文で実行されたデータの変更は、同じトランザクションの一部となります。 トランザクション内でのデータの変更は、 コミットあるいはロールバックされるまでは一時的なものとなります。 トランザクションがコミットされるまで、 データベースの他のユーザーはその変更を見ることができません。</p><p>データを追加したり更新したりする場合にはトランザクションを使うことを推奨します。 これは、データの一貫性やパフォーマンスを考慮したものです。</p>
	 * @param resource $connection <p><code>oci_connect()</code>、<code>oci_pconnect()</code> あるいは <code>oci_new_connect()</code>. が返す Oracle 接続 ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-rollback.php
	 * @see oci_commit(), oci_execute()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_rollback($connection): bool {}

	/**
	 * Oracle データベースのバージョンを返す
	 * <p>Oracle データベースのバージョンと利用可能なオプションを返します。</p>
	 * @param resource $connection
	 * @return string <p>バージョン情報を表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-server-version.php
	 * @see oci_client_version()
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_server_version($connection): string {}

	/**
	 * アクション名を設定します
	 * <p>Oracle が追跡するアクション名を設定します</p><p>PHP からデータベースへの次の「ラウンドトリップ」が起きると、 アクション名がデータベースに登録されます。これは一般的にSQLステートメントが実行されるときに起こります。</p><p><i>V$SESSION</i> のようなデータベース管理ビューから、 アクション名を後に問い合わせることができます。 それは例えば、 <i>V$SQLAREA</i> 及び <i>DBMS_MONITOR.SERV_MOD_ACT_STAT_ENABLE</i> と一緒に追跡とモニタリングのために使われることができます。</p><p>この関数で設定した値は、持続的接続をまたがって保持される可能性があります。</p>
	 * @param resource $connection <p><code>oci_connect()</code>、<code>oci_pconnect()</code> あるいは <code>oci_new_connect()</code> が返す Oracle 接続 ID。</p>
	 * @param string $action_name <p>ユーザーが選んだ、長さが最高32バイトの文字列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-set-action.php
	 * @see oci_set_module_name(), oci_set_client_info(), oci_set_client_identifier(), oci_set_db_operation()
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL OCI8 >= 1.4.0
	 */
	function oci_set_action($connection, string $action_name): bool {}

	/**
	 * Sets a millisecond timeout for database calls
	 * <p>Sets a timeout limiting the maxium time a database round-trip using this connection may take.</p><p>Each OCI8 operation may make zero or more calls to Oracle's client library. These internal calls may then may make zero or more round-trips to Oracle Database. If any one of those round-trips takes more than <i>time_out</i> milliseconds, then the operation is cancelled and an error is returned to the application.</p><p>The <i>time_out</i> value applies to each round-trip individually, not to the sum of all round-trips. Time spent processing in PHP OCI8 before or after the completion of each round-trip is not counted.</p><p>When a call is interrupted, Oracle will attempt to clean up the connection for reuse. This operation is allowed to run for another <i>time_out</i> period. Depending on the outcome of the cleanup, the connection may or may not be reusable.</p><p>When persistent connections are used, the timeout value will be retained across PHP requests.</p><p>The <b>oci_set_call_timeout()</b> function is available when OCI8 uses Oracle 18 (or later) Client libraries.</p>
	 * @param resource $connection <p><code>oci_connect()</code>、<code>oci_pconnect()</code> あるいは <code>oci_new_connect()</code> が返す Oracle 接続 ID。</p>
	 * @param int $time_out <p>The maximum time in milliseconds that any single round-trip between PHP and Oracle Database may take.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-set-call-timout.php
	 * @since PHP 7 >= 7.2.14, PHP 7.3.1 > 7.3 PECL OCI8 >= 2.2.0
	 */
	function oci_set_call_timeout($connection, int $time_out): bool {}

	/**
	 * クライアント識別子を設定します
	 * <p>同一のデータベース・ユーザーとして認証するライトウェイト・アプリケーションのユーザーを識別するために、 様々なデータベースコンポーネントによって使用されるクライアント識別子を設定します。</p><p>PHP からデータベースへの次の「ラウンドトリップ」が起きると、 クライアント識別子がデータベースに登録されます。これは一般的にSQLステートメントが実行されるときに起こります。</p><p><i>SELECT SYS_CONTEXT('USERENV','CLIENT_IDENTIFIER') FROM DUAL</i> などとして、クライアント識別子を後に問い合わせることができます。 <i>V$SESSION</i> のようなデータベース管理ビューにも同じ値が含まれています。 それは <i>DBMS_MONITOR.CLIENT_ID_TRACE_ENABLE</i> と一緒に追跡のために使われることができます。 それは監査のために使われることができます。</p><p>この関数で設定した値は、同じ持続的接続を使っている複数のページリクエストにまたがって保持される可能性があります。</p>
	 * @param resource $connection <p><code>oci_connect()</code>、<code>oci_pconnect()</code> あるいは <code>oci_new_connect()</code> が返す Oracle 接続 ID。</p>
	 * @param string $client_identifier <p>ユーザーが選んだ、長さが最高64バイトの文字列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-set-client-identifier.php
	 * @see oci_set_module_name(), oci_set_action(), oci_set_client_info(), oci_set_db_operation()
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL OCI8 >= 1.4.0
	 */
	function oci_set_client_identifier($connection, string $client_identifier): bool {}

	/**
	 * クライアント情報を設定する
	 * <p>Oracle が追跡するクライアント情報を設定します。</p><p>PHP からデータベースへの次の「ラウンドトリップ」が起きると、 クライアント情報がデータベースに登録されます。これは一般的にSQLステートメントが実行されるときに起こります。</p><p><i>V$SESSION</i> のようなデータベース管理ビューから、 クライアント情報を後に問い合わせることができます。</p><p>この関数で設定した値は、持続的接続をまたがって保持される可能性があります。</p>
	 * @param resource $connection <p><code>oci_connect()</code>、<code>oci_pconnect()</code> あるいは <code>oci_new_connect()</code> が返す Oracle 接続 ID。</p>
	 * @param string $client_info <p>ユーザーが選んだ、長さが最高64バイトの文字列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-set-client-info.php
	 * @see oci_set_module_name(), oci_set_action(), oci_set_client_identifier(), oci_set_db_operation()
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL OCI8 >= 1.4.0
	 */
	function oci_set_client_info($connection, string $client_info): bool {}

	/**
	 * Sets the database operation
	 * <p>Sets the DBOP for Oracle tracing.</p><p>The database operation name is registered with the database when the next 'round-trip' from PHP to the database occurs, typically when a SQL statement is executed.</p><p>The database operation can subsequently be queried from database administration views such as <i>V$SQL_MONITOR</i>.</p><p>The <b>oci_set_db_operation()</b> function is available when OCI8 uses Oracle 12 (or later) Client libraries and Oracle Database 12 (or later).</p>
	 * @param resource $connection <p><code>oci_connect()</code>、<code>oci_pconnect()</code> あるいは <code>oci_new_connect()</code> が返す Oracle 接続 ID。</p>
	 * @param string $dbop <p>User chosen string.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-set-db-operation.php
	 * @see oci_set_action(), oci_set_module_name(), oci_set_client_info(), oci_set_client_identifier()
	 * @since PHP 7 >= 7.2.14, PHP 7.3.1 > 7.3 PECL OCI8 >= 2.2.0
	 */
	function oci_set_db_operation($connection, string $dbop): bool {}

	/**
	 * データベース・エディション を設定します
	 * <p>後続の接続で使用する、オブジェクトのデータベース・エディション を設定します。</p><p>オラクル・エディション により、同じスキーマ名とオブジェクト名を使って、複数のバージョンのアプリケーションが稼動できます。これは、稼動中のシステムをアップグレードするときに便利です。</p><p><code>oci_connect()</code>, <code>oci_pconnect()</code> や <code>oci_new_connect()</code> を呼び出す前に、<b>oci_set_edition()</b> をコールして下さい。</p><p>データベースで無効なエディションが設定されると、たとえ <b>oci_set_edition()</b> が成功しても接続は失敗します。</p><p>持続的接続を使用している場合、リクエストされたエディション設定値による接続がもしすでにあれば、それが再利用されます。それ以外の場合、持続的接続が別途作成されます。</p>
	 * @param string $edition <p>SQLコマンド "<i>CREATE EDITION</i>" であらかじめ作成されたオラクル・データベース・エディション名</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-set-edition.php
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL OCI8 >= 1.4.0
	 */
	function oci_set_edition(string $edition): bool {}

	/**
	 * モジュール名を設定します
	 * <p>Oracle が追跡するモジュール名を設定します</p><p>PHP からデータベースへの次の「ラウンドトリップ」が起きると、 モジュール名がデータベースに登録されます。これは一般的にSQLステートメントが実行されるときに起こります。</p><p><i>V$SESSION</i> のようなデータベース管理ビューから、 名称を後に問い合わせることができます。 それは例えば、 <i>V$SQLAREA</i> 及び <i>DBMS_MONITOR.SERV_MOD_ACT_STAT_ENABLE</i> と一緒に追跡とモニタリングのために使われることができます。</p><p>この関数で設定した値は、持続的接続をまたがって保持される可能性があります。</p>
	 * @param resource $connection <p><code>oci_connect()</code>、<code>oci_pconnect()</code> あるいは <code>oci_new_connect()</code> が返す Oracle 接続 ID。</p>
	 * @param string $module_name <p>ユーザーが選んだ、長さが最高48バイトの <code>string</code> 。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-set-module-name.php
	 * @see oci_set_action(), oci_set_client_info(), oci_set_client_identifier(), oci_set_db_operation()
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL OCI8 >= 1.4.0
	 */
	function oci_set_module_name($connection, string $module_name): bool {}

	/**
	 * クエリがプリフェッチする行数を設定する
	 * <p><code>oci_execute()</code> のコール、およびそれに伴う内部的なデータベースへのリクエストがすべて成功した後に Oracle Client ライブラリがバッファに取り込む行数を設定します。 クエリが返す結果の行数が多くなる場合は、プリフェッチ行数をデフォルトの oci8.default_prefetch より大きくしておくとパフォーマンスが劇的に向上します。</p><p>プリフェッチは、Oracle がデータベースからデータを取得する際の効率的な方法で、 一回のネットワークリクエストで複数の行を取得します。こうすれば、 ネットワークや CPU の利用効率がよくなります。 行のバッファリングは OCI8 の内部的なものであり、 プリフェッチ行数が変わっても OCI8 のフェッチ関数群の挙動は変わりません。 たとえば、<code>oci_fetch_row()</code> は、常に一行だけを返します。 プリフェッチバッファはステートメント単位で設定されるものであり、 ステートメントを再実行したときや他の接続から実行したときには使われません。</p><p><b>oci_set_prefetch()</b> は <code>oci_execute()</code> の前にコールします。</p><p>ネットワークやデータベースの状況を考慮して、 プリフェッチの値を適切な大きさに設定することがチューニングの目標です。 大量の行を返すクエリの場合は、データベースからの行の取得を いくつかの塊に分けて行うとシステム全体の効率が良くなるかもしれません (つまり、プリフェッチの値を行数より小さめに設定するということです)。 こうすれば、PHP スクリプトが現在の行を処理している間にも データベースが別のユーザーからのステートメントを処理できるようになります。</p><p>クエリのプリフェッチが導入されたのは、Oracle 8<i>i</i> からです。 REF CURSOR のプリフェッチが導入されたのは Oracle 11<i>g</i>R2 からで、 PHP を Oracle 11<i>g</i>R2 以降のクライアントライブラリとリンクすれば使えます。 ネストしたカーソルのプリフェッチが導入されたのは Oracle 11<i>g</i>R2 からで、 これを使うには Oracle クライアントライブラリと接続先のデータベースがどちらも 11<i>g</i>R2 以降でなければなりません。</p><p>プリフェッチは、LONG あるいは LOB 列を含むクエリには対応していません。 プリフェッチに対応していないクエリの場合はプリフェッチの値は無視され、 どんな場合でも一行単位でフェッチします。</p><p>Oracle Database 12<i>c</i> では、PHP で設定したプリフェッチの値を Oracle のクライアント設定ファイル <i>oraaccess.xml</i> で上書きできます。 詳細は、Oracle のドキュメントを参照ください。</p>
	 * @param resource $statement <p><code>oci_parse()</code> で作成して <code>oci_execute()</code> で実行した有効な OCI8 ステートメント ID、 あるいは <i>REF CURSOR</i> ステートメント ID。</p>
	 * @param int $rows <p>プリフェッチする行数。&gt;= 0</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-set-prefetch.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_set_prefetch($statement, int $rows): bool {}

	/**
	 * ステートメントの種類を返す
	 * <p>OCI ステートメント <code>statement</code> の種類をあらわすキーワードを返します。</p>
	 * @param resource $statement <p><code>oci_parse()</code> が返す、有効な OCI8 ステートメント ID。</p>
	 * @return string <p>ステートメント <code>statement</code> の種類を次のいずれかの値で返します。</p> <b>ステートメントの種類</b>   返される文字列 注意     <i>ALTER</i>     <i>BEGIN</i>     <i>CALL</i> PHP 5.2.1 (PECL OCI8 1.2.3) 以降で使用可能です。   <i>CREATE</i>     <i>DECLARE</i>     <i>DELETE</i>     <i>DROP</i>     <i>INSERT</i>     <i>SELECT</i>     <i>UPDATE</i>     <i>UNKNOWN</i>     <p>エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-statement-type.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	function oci_statement_type($statement): string {}

	/**
	 * Unregister a user-defined callback function for Oracle Database TAF
	 * <p>Unregister the user-defined callback function registered to <code>connection </code> by <code>oci_register_taf_callback()</code>. See OCI8 Transparent Application Failover (TAF) Support  for information.</p>
	 * @param resource $connection <p>An Oracle connection identifier.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.oci-unregister-taf-callback.php
	 * @see oci_register_taf_callback()
	 * @since PHP 7.0 >= 7.0.23, PHP 7 >= 7.1.9, PHP 7.2, PECL OCI8 >= 2.1.7
	 */
	function oci_unregister_taf_callback($connection): bool {}

	/**
	 * <code>oci_fetch_all()</code> と <code>oci_fetch_array()</code> で結果を連想配列で取得するために使います。
	 */
	define('OCI_ASSOC', null);

	/**
	 * <code>oci_bind_by_name()</code> で BFILE をバインドする場合に使います。
	 */
	define('OCI_B_BFILE', null);

	/**
	 * <code>oci_bind_by_name()</code> で RAW 値をバインドする際に使います。
	 */
	define('OCI_B_BIN', null);

	/**
	 * <code>oci_bind_by_name()</code> で BLOB をバインドする場合に使います。
	 */
	define('OCI_B_BLOB', null);

	/**
	 * <code>oci_bind_by_name()</code> で PL/SQL の BOOLEAN 変数をバインドする場合に使います。
	 */
	define('OCI_B_BOL', null);

	/**
	 * <code>oci_bind_by_name()</code> で CFILE をバインドする場合に使います。
	 */
	define('OCI_B_CFILEE', null);

	/**
	 * <code>oci_bind_by_name()</code> で CLOB をバインドする場合に使います。
	 */
	define('OCI_B_CLOB', null);

	/**
	 * <code>oci_bind_by_name()</code> で <code>oci_new_descriptor()</code> によってあらかじめ割り当てられたカーソルをバインドする場合に使います。
	 */
	define('OCI_B_CURSOR', null);

	/**
	 * <code>oci_bind_array_by_name()</code> で INTEGER の配列をバインドする場合に使います。
	 */
	define('OCI_B_INT', null);

	/**
	 * <code>oci_bind_by_name()</code> で 名前付けされたデータ型をバインドする場合に使います。 注意: PHP &lt; 5.0 では <b><code>OCI_B_SQLT_NTY</code></b> と呼ばれます。
	 */
	define('OCI_B_NTY', null);

	/**
	 * <code>oci_bind_array_by_name()</code> で NUMBER の配列をバインドする場合に使います。
	 */
	define('OCI_B_NUM', null);

	/**
	 * <code>oci_bind_by_name()</code> で ROWID をバインドする場合に使います。
	 */
	define('OCI_B_ROWID', null);

	/**
	 * <code>oci_fetch_all()</code> と <code>oci_fetch_array()</code> で結果を配列と連想配列の両方で取得するために使います。
	 */
	define('OCI_BOTH', null);

	/**
	 * <code>oci_execute()</code> のステートメント実行モード。 ステートメントが成功したときに、自動的に変更をコミットします。
	 */
	define('OCI_COMMIT_ON_SUCCESS', null);

	/**
	 * <code>oci_connect()</code> と組み合わせ、 Oracles の External 認証あるいは OS 認証を利用します。 PHP 5.3 および PECL OCI8 1.3.4 で追加されました。
	 */
	define('OCI_CRED_EXT', null);

	/**
	 * <b><code>OCI_DTYPE_FILE</code></b> と等価です。
	 */
	define('OCI_D_FILE', null);

	/**
	 * <b><code>OCI_DTYPE_LOB</code></b> と等価です。
	 */
	define('OCI_D_LOB', null);

	/**
	 * <b><code>OCI_DTYPE_ROWID</code></b> と等価です。
	 */
	define('OCI_D_ROWID', null);

	/**
	 * <b><code>OCI_NO_AUTO_COMMIT</code></b> を参照ください。
	 */
	define('OCI_DEFAULT', null);

	/**
	 * <code>oci_execute()</code> のステートメント実行モード。 このモードをは、カラム名などのメタデータは欲しいけれど クエリから行を取得したくないという場合に使います。
	 */
	define('OCI_DESCRIBE_ONLY', null);

	/**
	 * このフラグは <code>oci_new_descriptor()</code> に新しい FILE ディスクリプタを初期化するように伝えます。
	 */
	define('OCI_DTYPE_FILE', null);

	/**
	 * このフラグは <code>oci_new_descriptor()</code> に新しい LOB ディスクリプタを初期化するように伝えます。
	 */
	define('OCI_DTYPE_LOB', null);

	/**
	 * このフラグは <code>oci_new_descriptor()</code> に新しい ROWID ディスクリプタを初期化するように伝えます。
	 */
	define('OCI_DTYPE_ROWID', null);

	/**
	 * 現在はサポートされていません。文の取得モードを指定します。 アプリケーションがあらかじめ何行取得すればよいか分かっている場合に使います。 このモードは Oracle リリース 8 以降ではプリフェッチ機能をオフにします。 カーソルは希望する行を取得した後キャンセルされ、 サーバー側のリソースの使用は軽減されます。
	 */
	define('OCI_EXACT_FETCH', null);

	/**
	 * <code>oci_fetch_all()</code> のデフォルトのモード。
	 */
	define('OCI_FETCHSTATEMENT_BY_COLUMN', null);

	/**
	 * <code>oci_fetch_all()</code> でのもうひとつのモード。
	 */
	define('OCI_FETCHSTATEMENT_BY_ROW', null);

	/**
	 * 使用されたバッファを解放するために OCI-Lob::flush と併用します。
	 */
	define('OCI_LOB_BUFFER_FREE', null);

	/**
	 * <code>oci_execute()</code> のステートメント実行モード。 このモードでは、トランザクションの自動コミットは行われません。 コードの可読性を考慮して、今までの <b><code>OCI_DEFAULT</code></b> ではなくこちらを使うようにしましょう。 PHP 5.3.2 (PECL OCI8 1.4) 以降で使用可能です。
	 */
	define('OCI_NO_AUTO_COMMIT', null);

	/**
	 * <code>oci_fetch_all()</code> と <code>oci_fetch_array()</code> で結果を配列で取得するために使います。
	 */
	define('OCI_NUM', null);

	/**
	 * <code>oci_fetch_array()</code> でディスクリプタの代わりに LOB の値を取得するために使います。
	 */
	define('OCI_RETURN_LOBS', null);

	/**
	 * <code>oci_fetch_array()</code> でフィールド値が <b><code>NULL</code></b> の場合に空の配列要素を取得するために使います。
	 */
	define('OCI_RETURN_NULLS', null);

	/**
	 * OCI-Lob::seek でシーク位置を設定するために使います。
	 */
	define('OCI_SEEK_CUR', null);

	/**
	 * OCI-Lob::seek でシーク位置を設定するために使います。
	 */
	define('OCI_SEEK_END', null);

	/**
	 * OCI-Lob::seek でシーク位置を設定するために使います。
	 */
	define('OCI_SEEK_SET', null);

	/**
	 * サポートされなくなりました。
	 */
	define('OCI_SYSDATE', null);

	/**
	 * <code>oci_connect()</code> で、SYSDBA として接続するために使います。 php.ini 設定 oci8.privileged_connect を有効にしないと使えません。
	 */
	define('OCI_SYSDBA', null);

	/**
	 * <code>oci_connect()</code> で、SYSOPER として接続するために使います。 php.ini 設定 oci8.privileged_connect を有効にしないと使えません。
	 */
	define('OCI_SYSOPER', null);

	/**
	 * 一時的な BLOB が生成されるよう明示的に指定するため OCI-Lob::writeTemporary と併用します。
	 */
	define('OCI_TEMP_BLOB', null);

	/**
	 * 一時的な CLOB が生成されるよう明示的に指定するため OCI-Lob::writeTemporary と併用します。
	 */
	define('OCI_TEMP_CLOB', null);

	/**
	 * <code>oci_bind_array_by_name()</code> で CHAR の配列をバインドする場合に使います。
	 */
	define('SQLT_AFC', null);

	/**
	 * <code>oci_bind_array_by_name()</code> で CHARZ の配列をバインドする場合に使います。
	 */
	define('SQLT_AVC', null);

	/**
	 * サポートされていません。
	 */
	define('SQLT_BDOUBLE', null);

	/**
	 * <b><code>OCI_B_BFILE</code></b> と等価です。
	 */
	define('SQLT_BFILEE', null);

	/**
	 * サポートされていません。
	 */
	define('SQLT_BFLOAT', null);

	/**
	 * <b><code>OCI_B_BIN</code></b> と等価です。
	 */
	define('SQLT_BIN', null);

	/**
	 * <b><code>OCI_B_BLOB</code></b> と等価です。
	 */
	define('SQLT_BLOB', null);

	/**
	 * <b><code>OCI_B_BOL</code></b> と等価です。
	 */
	define('SQLT_BOL', null);

	/**
	 * <b><code>OCI_B_CFILEE</code></b> と等価です。
	 */
	define('SQLT_CFILEE', null);

	/**
	 * <code>oci_bind_array_by_name()</code> で VARCHAR2 の配列をバインドする場合に使います。 <code>oci_bind_by_name()</code> でも使います。
	 */
	define('SQLT_CHR', null);

	/**
	 * <b><code>OCI_B_CLOB</code></b> と等価です。
	 */
	define('SQLT_CLOB', null);

	/**
	 * <code>oci_bind_array_by_name()</code> で FLOAT の配列をバインドする場合に使います。
	 */
	define('SQLT_FLT', null);

	/**
	 * <b><code>OCI_B_INT</code></b> と等価です。
	 */
	define('SQLT_INT', null);

	/**
	 * <code>oci_bind_by_name()</code> で LONG RAW 値をバインドする際に使います。
	 */
	define('SQLT_LBI', null);

	/**
	 * <code>oci_bind_by_name()</code> で LONG 値をバインドする際に使います。
	 */
	define('SQLT_LNG', null);

	/**
	 * <code>oci_bind_array_by_name()</code> で LONG VARCHAR の配列をバインドする場合に使います。
	 */
	define('SQLT_LVC', null);

	/**
	 * <b><code>OCI_B_NTY</code></b> と等価です。
	 */
	define('SQLT_NTY', null);

	/**
	 * <b><code>OCI_B_NUM</code></b> と等価です。
	 */
	define('SQLT_NUM', null);

	/**
	 * <code>oci_bind_array_by_name()</code> で LONG の配列をバインドする場合に使います。
	 */
	define('SQLT_ODT', null);

	/**
	 * <b><code>OCI_B_ROWID</code></b> と等価です。
	 */
	define('SQLT_RDD', null);

	/**
	 * <b><code>OCI_B_CURSOR</code></b> と等価です。
	 */
	define('SQLT_RSET', null);

	/**
	 * <code>oci_bind_array_by_name()</code> で STRING の配列をバインドする場合に使います。
	 */
	define('SQLT_STR', null);

	/**
	 * サポートされていません。
	 */
	define('SQLT_UIN', null);

	/**
	 * <code>oci_bind_array_by_name()</code> で VARCHAR の配列をバインドする際に使います。
	 */
	define('SQLT_VCS', null);

}
