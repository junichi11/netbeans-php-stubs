<?php



namespace {

	/**
	 * autocommit をオンまたはオフに切替える
	 * <p><b>ingres_autocommit()</b> は、サーバーの autocommit モードをオンまたはオフに切替えるために、トランザクションをオープンする前 (最初に <code>ingres_query()</code> をコールする前、または <code>ingres_rollback()</code> あるいは <code>ingres_commit()</code> をコールした直後) にコールされます (スクリプトの実行開始には、autocommit モードはオフです)。</p><p>autocommit モードがオンの場合、各クエリはサーバーにより自動的にコミットされます。 これは、<code>ingres_query()</code> をコールした後に常に <code>ingres_commit()</code> をコールすることと等価です。 autocommit が有効かどうかを調べるには <code>ingres_autocommit_state()</code> を使用します。</p><p>デフォルトで、Ingres will はリクエストの終了時に未コミットのトランザクションをロールバックします。 この関数あるいは <code>ingres_commit()</code> を使うことで、データを確実にデータベースにコミットすることができます。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-autocommit.php
	 * @see ingres_autocommit_state(), ingres_query(), ingres_rollback(), ingres_commit()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_autocommit($link): bool {}

	/**
	 * 接続が autocommit を使っているかどうかを調べる
	 * <p><b>ingres_autocommit_state()</b> をコールして、 現在のリンクで autocommit が有効になっているかどうかを調べます。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @return bool <p>autocommit が有効な場合に <b><code>TRUE</code></b>、無効な場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-autocommit-state.php
	 * @see ingres_autocommit(), ingres_query()
	 * @since PECL ingres >= 2.0.0
	 */
	function ingres_autocommit_state($link): bool {}

	/**
	 * 文字セットを返す
	 * <p><b>ingres_charset()</b> をコールして、 Ingres クライアントが使っている文字セットを取得します。 II_CHARSETxx (xx は導入されているコード) 形式となります。</p><p><b>注意</b>:</p><p>返される値をオーバーライドするには <code>putenv()</code> を使います。 実行中の Ingres における II_CHARSETxx の値の変更は、データが破壊されてしまう原因となります。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @return string <p>II_CHARSETxx の文字列を返します。値を取得できなかった場合は NULL を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-charset.php
	 * @see ingres_connect(), ingres_query()
	 * @since PECL ingres >= 2.1.0
	 */
	function ingres_charset($link): string {}

	/**
	 * Ingres データベース接続を閉じる
	 * <p><b>ingres_close()</b> は、指定したリンクが指す Ingres サーバーへの接続をクローズします。パラメータ</p><p>持続的接続をクローズすることはできず、 持続的でない接続はスクリプトの終了時に自動的にクローズされるため、 <b>ingres_close()</b> は通常は不要です。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-close.php
	 * @see ingres_connect(), ingres_pconnect()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_close($link): bool {}

	/**
	 * トランザクションをコミットする
	 * <p><b>ingres_commit()</b> は、 現在オープンしているトランザクションをコミットし、 全ての変更をデータベースに保存します。</p><p>この関数はトランザクションをクローズします。 <code>ingres_query()</code> によりクエリを送信することで、 新規のトランザクションをオープンすることが可能です。</p><p>トランザクションをオープンする前に <code>ingres_autocommit()</code> をコールすることにより、 各クエリの後に自動的にサーバー側でコミットを行うことも可能です。</p><p>デフォルトで、Ingres will はリクエストの終了時に未コミットのトランザクションをロールバックします。 この関数あるいは <code>ingres_autocommit()</code> を使うことで、データを確実にデータベースにコミットすることができます。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-commit.php
	 * @see ingres_query(), ingres_rollback(), ingres_autocommit()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_commit($link): bool {}

	/**
	 * Ingres データベースへの接続をオープンする
	 * <p><b>ingres_connect()</b> は、指定した Ingres <code>database</code> との接続をオープンします。</p><p>この接続は、スクリプトの実行終了時または、このリンクについて <code>ingres_close()</code> がコールされた場合に クローズされます。</p>
	 * @param string $database <p>データベース名。</p> <p>[vnode::]dbname[/svr_class] 形式でなければなりません。</p>
	 * @param string $username <p>Ingres のユーザー名。</p>
	 * @param string $password <p><code>username</code> のパスワード。</p>
	 * @param array $options <p><b>ingres_connect()</b> のオプション</p>   オプション名 型 説明 例     date_century_boundary <code>integer</code>  2桁で指定した年を、今世紀と判断するか来世紀と判断するかの閾値。 II_DATE_CENTURY_BOUNDARY と同等です。  50   group <code>string</code> ユーザーのグループ ID を指定します。"-G" フラグと同等です。 payroll   role <code>string</code>  アプリケーションのロール ID。ロールのパスワードが必要な場合は、 このパラメータは "role/password" 形式で指定する必要があります。    effective_user <code>string</code> 使用する ingres ユーザーアカウント。"-u" フラグと同等です。 another_user   dbms_password <code>string</code> ユーザーが Ingres に接続する際に使用する、内部データベースのパスワード。 s3cr3t   table_structure <code>string</code>  <p>新規テーブルのデフォルトの構造。以下のいずれかが指定可能です。</p> <ul> <li>INGRES_STRUCTURE_BTREE</li> <li>INGRES_STRUCTURE_HASH</li> <li>INGRES_STRUCTURE_HEAP</li> <li>INGRES_STRUCTURE_ISAM</li> <li>INGRES_STRUCTURE_CBTREE</li> <li>INGRES_STRUCTURE_CISAM</li> <li>INGRES_STRUCTURE_CHASH</li> <li>INGRES_STRUCTURE_CHEAP</li> </ul>  INGRES_STRUCTURE_BTREE   index_structure <code>string</code>  <p>新規セカンダリインデックスのデフォルトの構造。以下のいずれかが指定可能です。</p> <ul> <li>INGRES_STRUCTURE_CBTREE</li> <li>INGRES_STRUCTURE_CISAM</li> <li>INGRES_STRUCTURE_CHASH</li> <li>INGRES_STRUCTURE_BTREE</li> <li>INGRES_STRUCTURE_HASH</li> <li>INGRES_STRUCTURE_ISAM</li> </ul>  INGRES_STRUCTURE_HASH   login_local <code>boolean</code>  対象データベースの文字列に VNODE が含まれていた場合に ユーザー ID とパスワードをどのように使用して接続するかを指定します。 TRUE に設定すると、ユーザー ID とパスワードで VNODE にローカルアクセスし、 VNODE のログイン情報を使用してデータベースとの接続を確立します。 FALSE に設定すると、プロセスのユーザー ID を使用して VNODE にアクセスし、 接続用のユーザー ID とパスワードを VNODE のログイン情報の代わりに使用して データベースとの接続を確立します。対象データベースの文字列に VNODE が含まれていない場合は、このパラメータは無視されます。 デフォルトは FALSE です。  TRUE   timezone <code>string</code>  このセッションのタイムゾーンを設定します。設定しなかった場合は II_TIMEZONE_NAME の値が使用されます。II_TIMEZONE_NAME も設定されていない場合は、NA-PACIFIC (GMT-8 に夏時間を適用) が用いられます。    date_format <code>integer</code>  <p>Ingres の日付として指定可能な入出力書式を設定します。 デフォルトは II_DATE_FORMAT で指定された値です。II_DATE_FORMAT が設定されていない場合は、デフォルトは US の日付フォーマット、すなわち mm/dd/yy となります。以下のいずれかが使用可能です。</p> <ul> <li>INGRES_DATE_DMY</li> <li>INGRES_DATE_FINISH</li> <li>INGRES_DATE_GERMAN</li> <li>INGRES_DATE_ISO</li> <li>INGRES_DATE_ISO4</li> <li>INGRES_DATE_MDY</li> <li>INGRES_DATE_MULTINATIONAL</li> <li>INGRES_DATE_MULTINATIONAL4</li> <li>INGRES_DATE_YMD</li> <li>INGRES_DATE_US</li> </ul>  INGRES_DATE_MULTINATIONAL4   decimal_separator <code>string</code> 小数点を表す文字。 ","   money_lort <code>integer</code>  <p>通貨記号を先頭あるいは末尾のどちらにつけるか。以下のいずれかが使用可能です。</p> <ul> <li>INGRES_MONEY_LEADING</li> <li>INGRES_MONEY_TRAILING</li> </ul>  INGRES_MONEY_TRAILING   money_sign <code>string</code> MONEY データ型で使用する通貨記号。 €   money_precision <code>integer</code> MONEY データ型の精度。 3   float4_precision <code>integer</code> FLOAT4 データ型の精度。 10   float8_precision <code>integer</code> FLOAT8 データの精度。 10   blob_segment_length <code>integer</code>  BLOB/CLOB データを読み込む際に、一度に取得するデータのバイト数。 明示的に指定しなかった場合、デフォルトは 4096 バイトです。  8192
	 * @return resource <p>成功時に Ingres リンクリソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-connect.php
	 * @see ingres_pconnect(), ingres_close()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_connect(string $database = NULL, string $username = NULL, string $password = NULL, array $options = NULL) {}

	/**
	 * 指定した結果リソースのカーソル名を取得する
	 * <p>アクティブなカーソルの名前を文字列で返します。 アクティブなカーソルがない場合は NULL を返します。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @return string <p>アクティブなカーソルの名前を含む文字列を返します。 アクティブなカーソルがない場合は NULL が返されます。</p>
	 * @link https://php.net/manual/ja/function.ingres-cursor.php
	 * @see ingres_prepare(), ingres_execute()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_cursor($result): string {}

	/**
	 * 直近に発生した ingres エラー番号を取得する
	 * <p>直近のエラー番号を整数値で返します。エラーが発生していない場合は 0 を返します。</p><p><code>link</code> リソースが <b>ingres_errno()</b> に渡された場合、そのリンクに記録された直近のエラーを返します。 リンクが渡されなかった場合、<b>ingres_errno()</b> はデフォルトのリンクを使用して直近のエラーを返します。</p><p>この関数 <b>ingres_errno()</b> は、 データベースクエリを実行した直後にコールしなければなりません。 <b>ingres_errno()</b> の前に他の関数がコールされると、 直近の Ingres 関数のコールで発生したエラーコードが書き換えられてしまいます。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @return int <p>直近のエラー番号を整数値で返します。エラーが発生していない場合は 0 を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-errno.php
	 * @see ingres_error(), ingres_errsqlstate(), ingres_next_error()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_errno($link = NULL): int {}

	/**
	 * 直近に発生したエラーのエラーメッセージを取得する
	 * <p>直近のエラーの内容を文字列で返します。エラーが発生していない場合は NULL を返します。</p><p><code>link</code> リソースが <b>ingres_error()</b> に渡された場合、そのリンクに記録された直近のエラーを返します。 リンクが渡されなかった場合、<b>ingres_error()</b> はデフォルトのリンクを使用して直近のエラーを返します。</p><p>この関数 <b>ingres_error()</b> は、 データベースクエリを実行した直後にコールしなければなりません。 <b>ingres_error()</b> の前に他の関数がコールされると、 直近の Ingres 関数のコールで発生したエラーメッセージが書き換えられてしまいます。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @return string <p>直近のエラーの内容を文字列で返します。エラーが発生していない場合は NULL を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-error.php
	 * @see ingres_errno(), ingres_errsqlstate(), ingres_next_error()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_error($link = NULL): string {}

	/**
	 * 直近に発生した SQLSTATE エラーコードを取得する
	 * <p>直近の SQLSTATE を文字列で返します。エラーが発生していない場合は NULL を返します。</p><p><code>link</code> リソースが <b>ingres_errsqlstate()</b> に渡された場合、そのリンクに記録された直近のエラーを返します。 リンクが渡されなかった場合、<b>ingres_errsqlstate()</b> はデフォルトのリンクを使用して直近のエラーを返します。</p><p>この関数 <b>ingres_errsqlstate()</b> は、 データベースクエリを実行した直後にコールしなければなりません。 <b>ingres_errsqlstate()</b> の前に他の関数がコールされると、 直近の Ingres 関数のコールで発生したエラーメッセージが書き換えられてしまいます。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @return string <p>直近の SQLSTATE を文字列で返します。エラーが発生していない場合は NULL を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-errsqlstate.php
	 * @see ingres_errno(), ingres_error(), ingres_next_error()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_errsqlstate($link = NULL): string {}

	/**
	 * クエリで使うために特殊文字をエスケープする
	 * <p><b>ingres_escape_string()</b> を使って、 文字列内の特殊文字をエスケープしてからデータベースに送信します。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @param string $source_string <p>パースする文字列。</p>
	 * @return string <p>エスケープしたデータを含む文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-escape-string.php
	 * @see ingres_query()
	 * @since PECL ingres >= 2.1.0
	 */
	function ingres_escape_string($link, string $source_string): string {}

	/**
	 * プリペアドクエリを実行する
	 * <p><code>ingres_prepare()</code> で準備したクエリを実行します。</p><p><b>注意</b>: <b>関連する設定項目</b><br></p><p>実行時設定での ingres.describe、 ingres.scrollable および ingres.utf8 の説明も参照ください。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @param array $params <p>このクエリで使うパラメータの値の配列。</p>
	 * @param string $types <p>パラメータに渡した値の型を表す文字列。型コードの一覧は <code>ingres_query()</code> の types パラメータを参照ください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-execute.php
	 * @see ingres_unbuffered_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row(), ingres_commit(), ingres_rollback(), ingres_autocommit(), ingres_set_environment(), ingres_errno(), ingres_error()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_execute($result, array $params = NULL, string $types = NULL): bool {}

	/**
	 * 1 行分の結果を配列に取得する
	 * <p>この関数は、<code>ingres_fetch_row()</code> の拡張版です。 結果として返される配列の数値添字にデータを保存するだけでなく、 フィールド名をキーとして連想配列にもデータが保存されます。</p><p>結果において複数のカラムが同じフィールド名を有している場合、後の カラムが優先されます。同名の他のカラムにアクセスするには、カラムの 添字番号を使用するか、カラムのエイリアスを作成する必要があります。</p><p>速度面では、この関数は <code>ingres_fetch_object()</code> と同じで、<code>ingres_fetch_row()</code> とほぼ同等です (差は僅かです)。</p><p>デフォルトでは、<b>ingres_fetch_array()</b> が作成する配列のインデックスは 1 から始まります。これは、 他の DBMS の拡張モジュールが 0 から始めるのと異なっています。 他と同様に 0 から始めるようにするには、設定パラメータ ingres.array_index_start を使用します。</p><p><b>注意</b>: <b>関連する設定項目</b><br></p><p>実行時設定 の ingres.array_index_start, ingres.fetch_buffer_size および ingres.utf8 ディレクティブも参照ください。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @param int $result_type <p><code>result_type</code> には、数値添字の場合に <b><code>INGRES_NUM</code></b>、連想配列の場合に <b><code>INGRES_ASSOC</code></b>、両方の場合に <b><code>INGRES_BOTH</code></b> (デフォルト)を指定可能です。</p>
	 * @return array <p>取得したレコード(行)に対応する配列を返します。 レコードがもうない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-fetch-array.php
	 * @see ingres_query(), ingres_num_fields(), ingres_field_name(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_fetch_array($result, int $result_type = NULL): array {}

	/**
	 * 1 行分の結果を連想配列に取得する
	 * <p>この関数は、<code>ingres_query()</code> で実行したクエリから取得したデータを連想配列に保存します。 フィールド名が連想配列のキーとなります。</p><p>速度面では、この関数は <code>ingres_fetch_object()</code> と同じで、<code>ingres_fetch_row()</code> とほぼ同等です (差は僅かです)。</p><p>デフォルトでは、<b>ingres_fetch_assoc()</b> が作成する配列のインデックスは 1 から始まります。これは、 他の DBMS の拡張モジュールが 0 から始めるのと異なっています。 他と同様に 0 から始めるようにするには、設定パラメータ ingres.array_index_start を使用します。</p><p><b>注意</b>: <b>関連する設定項目</b><br></p><p>実行時設定での ingres.array_index_start、 ingres.fetch_buffer_size および ingres.utf8 の説明も参照ください。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @return array <p>取得した行に対応する連想配列を返します。 行がもうない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-fetch-assoc.php
	 * @see ingres_query(), ingres_num_fields(), ingres_field_name(), ingres_fetch_array(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PECL ingres >= 2.2.2
	 */
	function ingres_fetch_assoc($result): array {}

	/**
	 * 1 行分の結果をオブジェクトとして取得する
	 * <p>この関数は <code>ingres_fetch_array()</code> に似ていますが、 配列の代わりにオブジェクトが返されるという違いが一つあります。 間接的なアクセス、つまり、オフセットではなくフィールド名によりデータを アクセスすることのみが可能です(数値はプロパティ名としては使用 できません)。</p><p>速度の面では、この関数は <code>ingres_fetch_array()</code> と等価であり、<code>ingres_fetch_row()</code> とほぼ同等です (違いは僅かです)。</p><p><b>注意</b>: <b>関連する設定項目</b><br></p><p>実行時設定 の ingres.array_index_start, ingres.fetch_buffer_size および ingres.utf8 ディレクティブも参照ください。</p>
	 * @param resource $result
	 * @param int $result_type <p>オプションの引数 <code>result_type</code> は定数であり、 次の値のどれかとなります: <b><code>INGRES_ASSOC</code></b>, <b><code>INGRES_NUM</code></b>, <b><code>INGRES_BOTH</code></b></p>
	 * @return object <p>取得したレコード(行)をオブジェクトとして返します。 レコードがもうない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-fetch-object.php
	 * @see ingres_query(), ingres_num_fields(), ingres_field_name(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_fetch_object($result, int $result_type = NULL): object {}

	/**
	 * プロシージャコールからの返り値を取得する
	 * <p>この関数を使って、Ingres データベースプロシージャ (ストアドプロシージャ) からの返り値を取得します。</p><p><b>注意</b>:</p><p>行を処理する関数と組み合わせて使う場合は、 <code>ingres_fetch_array()</code> や <code>ingres_fetch_object()</code>、 <code>ingres_fetch_row()</code> を使ってすべての行を取得し終えてからでないと この関数をコールしてはいけません。 この関数をコールすると、残っている行をすべて破棄してしまいます。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @return int <p>返り値がある場合は <code>integer</code>、それ以外の場合は <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-fetch-proc-return.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PECL ingres >= 1.4.0
	 */
	function ingres_fetch_proc_return($result): int {}

	/**
	 * 1 行分の結果を数値添字配列として取得する
	 * <p><b>ingres_fetch_row()</b> は取得したレコード(行)を有 する配列を返します。レコードがもうない場合は <b><code>FALSE</code></b> を返します。各 カラムは、オフセット1から始まる配列オフセットに保存されます。</p><p><b>ingres_fetch_row()</b> を連続的にコールした場合、 結果集合の中の次のレコードが返され、もうレコードがない場合は<b><code>FALSE</code></b> を返します。</p><p>デフォルトでは、<b>ingres_fetch_row()</b> が作成する配列のインデックスは 1 から始まります。これは、 他の DBMS の拡張モジュールが 0 から始めるのと異なっています。 他と同様に 0 から始めるようにするには、設定パラメータ ingres.array_index_start を使用します。</p><p><b>注意</b>: <b>関連する設定項目</b><br></p><p>実行時設定 の ingres.array_index_start, ingres.fetch_buffer_size および ingres.utf8 ディレクティブも参照ください。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @return array <p>取得したレコード(行)を有する配列を返します。 レコードがもうない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-fetch-row.php
	 * @see ingres_num_fields(), ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_fetch_row($result): array {}

	/**
	 * フィールド長を得る
	 * <p><b>ingres_field_length()</b> はフィールド長を返します。 フィールド長は、フィールドをサーバーに保存する際に使用されるバイト数です。 詳細な情報については、Ingres <i>OpenAPI User Guide</i> の Appendix <i>"Data Types"</i> を参照ください。</p><p><b>注意</b>: <b>関連する設定</b><br></p><p>実行時設定 の ingres.array_index_start を参照ください。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @param int $index <p><code>index</code> は、長さを取得したいカラムの番号です。</p> <p><code>index</code> の取りうる値は ingres.array_index_start の値に依存します。 ingres.array_index_start が <i>1</i> (デフォルト) の場合は、<code>index</code> は <i>1</i> 以上 <code>ingres_num_fields()</code> 以下でなければなりません。 ingres.array_index_start が <i>0</i> の場合は、<code>index</code> は <i>0</i> 以上 <code>ingres_num_fields()</code> 未満でなければなりません。</p>
	 * @return int <p>フィールドの長さを返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-field-length.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_length($result, int $index): int {}

	/**
	 * クエリ結果においてフィールド名を得る
	 * <p><b>ingres_field_name()</b> は、クエリ結果のフィールド名を返します。</p><p><b>注意</b>: <b>関連する設定</b><br></p><p>実行時設定 の ingres.array_index_start を参照ください。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @param int $index <p><code>index</code> は、名前を取得したいフィールドです。</p> <p><code>index</code> の取りうる値は ingres.array_index_start の値に依存します。 ingres.array_index_start が <i>1</i> (デフォルト) の場合は、<code>index</code> は <i>1</i> 以上 <code>ingres_num_fields()</code> 以下でなければなりません。 ingres.array_index_start が <i>0</i> の場合は、<code>index</code> は <i>0</i> 以上 <code>ingres_num_fields()</code> 未満でなければなりません。</p>
	 * @return string <p>クエリ結果のフィールド名を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-field-name.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_name($result, int $index): string {}

	/**
	 * フィールドに NULL 値を設定可能かどうか調べる
	 * <p>フィールドに null を設定可能かどうかを調べます。</p><p><b>注意</b>: <b>関連する設定</b><br></p><p>実行時設定 の ingres.array_index_start を参照ください。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @param int $index <p><code>index</code> は、null が設定可能かどうかを取得したいフィールドです。</p> <p><code>index</code> の取りうる値は ingres.array_index_start の値に依存します。 ingres.array_index_start が <i>1</i> (デフォルト) の場合は、<code>index</code> は <i>1</i> 以上 <code>ingres_num_fields()</code> 以下でなければなりません。 ingres.array_index_start が <i>0</i> の場合は、<code>index</code> は <i>0</i> 以上 <code>ingres_num_fields()</code> 未満でなければなりません。</p>
	 * @return bool <p><b>ingres_field_nullable()</b> は、フィールドに <b><code>NULL</code></b> が設定可能な場合に <b><code>TRUE</code></b>、設定できない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-field-nullable.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_nullable($result, int $index): bool {}

	/**
	 * フィールドの精度を得る
	 * <p><b>ingres_field_precision()</b> はフィールドの精度を返します。 この値は、decimal、float、SQLデータ money 型でのみ使用されます。 詳細な情報については、Ingres <i>OpenAPI User Guide</i> の Appendix "Data Types" を参照ください。</p><p><b>注意</b>: <b>関連する設定</b><br></p><p>実行時設定 の ingres.array_index_start を参照ください。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @param int $index <p><code>index</code> は、精度を取得したいフィールドです。</p> <p><code>index</code> の取りうる値は ingres.array_index_start の値に依存します。 ingres.array_index_start が <i>1</i> (デフォルト) の場合は、<code>index</code> は <i>1</i> 以上 <code>ingres_num_fields()</code> 以下でなければなりません。 ingres.array_index_start が <i>0</i> の場合は、<code>index</code> は <i>0</i> 以上 <code>ingres_num_fields()</code> 未満でなければなりません。</p>
	 * @return int <p>フィールドの精度を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-field-precision.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_precision($result, int $index): int {}

	/**
	 * フィールドのスケールを得る
	 * <p><b>ingres_field_scale()</b> はフィールドのスケールを返します。 この値は、SQLデータ decimal 型でのみ使用されます。 詳細な情報については、Ingres <i>OpenAPI User Guide</i> の Appendix <i>"Data Types"</i> を参照ください。</p><p><b>注意</b>: <b>関連する設定</b><br></p><p>実行時設定 の ingres.array_index_start を参照ください。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @param int $index <p><code>index</code> は、スケールを取得したいフィールドです。</p> <p><code>index</code> の取りうる値は ingres.array_index_start の値に依存します。 ingres.array_index_start が <i>1</i> (デフォルト) の場合は、<code>index</code> は <i>1</i> 以上 <code>ingres_num_fields()</code> 以下でなければなりません。 ingres.array_index_start が <i>0</i> の場合は、<code>index</code> は <i>0</i> 以上 <code>ingres_num_fields()</code> 未満でなければなりません。</p>
	 * @return int <p>フィールドのスケールを返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-field-scale.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_scale($result, int $index): int {}

	/**
	 * クエリ結果においてフィールドの型を得る
	 * <p>クエリ結果においてフィールドの型を取得します。</p><p><b>注意</b>: <b>関連する設定</b><br></p><p>実行時設定 の ingres.array_index_start を参照ください。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @param int $index <p><code>index</code> は、型を取得したいフィールドです。</p> <p><code>index</code> の取りうる値は ingres.array_index_start の値に依存します。 ingres.array_index_start が <i>1</i> (デフォルト) の場合は、<code>index</code> は <i>1</i> 以上 <code>ingres_num_fields()</code> 以下でなければなりません。 ingres.array_index_start が <i>0</i> の場合は、<code>index</code> は <i>0</i> 以上 <code>ingres_num_fields()</code> 未満でなければなりません。</p>
	 * @return string <p><b>ingres_field_type()</b> はクエリ結果のフィールド型、 失敗した場合に <b><code>FALSE</code></b> を返します。返される型は、例えば、 <i>IIAPI_BYTE_TYPE</i>, <i>IIAPI_CHA_TYPE</i>, <i>IIAPI_DTE_TYPE</i>, <i>IIAPI_FLT_TYPE</i>, <i>IIAPI_INT_TYPE</i>, <i>IIAPI_VCH_TYPE</i> になります。 これらの型のいくつかは、フィールド長に応じて複数の SQL 型を マップすることが可能です(<code>ingres_field_length()</code> を参照ください)。例えば IIAPI_FLT_TYPE は、float4 または float8 とすることが可能です。詳細な情報については、Ingres <i>OpenAPI User Guide</i> の Appendix "Data Types" を参照ください。</p>
	 * @link https://php.net/manual/ja/function.ingres-field-type.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_field_type($result, int $index): string {}

	/**
	 * 結果 ID に関連づけられたリソースを解放する
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-free-result.php
	 * @see ingres_query()
	 * @since PECL ingres >= 2.0.0
	 */
	function ingres_free_result($result): bool {}

	/**
	 * 次の Ingres エラーを取得する
	 * <p>最後に実行したクエリについての、次の Ingres エラーを取得します。 <b>ingres_next_error()</b> をコールするたびに、続けて <code>ingres_errno()</code>、<code>ingres_error()</code> あるいは <code>ingres_errsqlstate()</code> をコールしてエラー番号、エラーテキスト、SQL STATE を取得することができます。 <b>ingres_next_error()</b> が <b><code>TRUE</code></b> を返す間は、取得できるエラーがまだ残っています。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @return bool <p><b>ingres_next_error()</b> は、 取得できるエラーがまだ残っている場合に <b><code>TRUE</code></b> を返します。 もうエラーがない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-next-error.php
	 * @see ingres_errno(), ingres_error(), ingres_errsqlstate()
	 * @since PECL ingres >= 2.0.0
	 */
	function ingres_next_error($link = NULL): bool {}

	/**
	 * 直近のクエリにより返されたフィールドの数を得る
	 * <p><b>ingres_num_fields()</b> は、 <code>ingres_query()</code> をコールした後で、Ingres サーバーにより返された結果のフィールド数を返します。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @return int <p>フィールドの数を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-num-fields.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_num_fields($result): int {}

	/**
	 * クエリが変更したり返したりしたレコードの数を取得する
	 * <p>この関数は、主にデータベースで修正されたレコードの数を得る際に有用です。 しかし、SELECT 分で取得した行の数を取得するために使うこともできます。</p><p><b>注意</b>:</p><p>スクロール可能なカーソル が無効な状態でこの関数が <code>ingres_fetch_array()</code>、 <code>ingres_fetch_object()</code>、 <code>ingres_fetch_row()</code> を使用する前にコールされた場合、 サーバーは結果のデータを削除し、スクリプトは結果を得ることができなくなります。</p><p>代わりにこれらの取得用関数のどれかをもう結果が残っていないという意味で <b><code>FALSE</code></b> を返すまでループ処理を行い、結果のデータを取得する必要があります。</p>
	 * @param resource $result <p>クエリ結果 ID。</p>
	 * @return int <p>delete, insert, update クエリの場合、 <b>ingres_num_rows()</b> は、そのクエリにより作用された行 (レコード)の数を返します。その他のクエリの場合、 <b>ingres_num_rows()</b> はクエリ結果のレコード数を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-num-rows.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_num_rows($result): int {}

	/**
	 * Ingres データベースへの持続的接続をオープンする
	 * <p>Ingres データベースへの持続的接続をオープンします。</p><p>この関数と <code>ingres_connect()</code> の違いは次の 2 つだけです。 まず、接続時にこの関数は、まず同じパラメータ既にオープンされている (持続的な)リンクを探すことです。第2に、Ingres サーバーへの接続は スクリプトの実行終了時にもクローズされないところです。代わりに、 リンクは、後で使用するためにオープンされたままとなります (<code>ingres_close()</code> は、 <b>ingres_pconnect()</b> により確立されたリンクを クローズしません)。このため、この型のリンクは「持続的(persistent)」 であると呼ばれます。</p>
	 * @param string $database <p>データベース名。</p> <p>[vnode::]dbname[/svr_class] のような形式でなければなりません。</p>
	 * @param string $username <p>Ingres のユーザー名。</p>
	 * @param string $password <p><code>username</code> のパスワード。</p>
	 * @param array $options <p>渡せるオプションの一覧は <code>ingres_connect()</code> を参照ください。</p>
	 * @return resource <p>成功した際に Ingres リンクリソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-pconnect.php
	 * @see ingres_connect(), ingres_close()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_pconnect(string $database = NULL, string $username = NULL, string $password = NULL, array $options = NULL) {}

	/**
	 * 後で実行するためのクエリを準備する
	 * <p><code>ingres_execute()</code> で実行するためのクエリを準備します。</p><p>クエリは、現在開いているトランザクションの一部となります。 開いているトランザクションがない場合は <code>ingres_query()</code> が新しいトランザクションを開きます。 トランザクションを閉じるには、<code>ingres_commit()</code> をコールして変更をデータベースにコミットするか <code>ingres_rollback()</code> で変更をキャンセルします。 スクリプトが終了すると、開いているトランザクションはすべて (<code>ingres_rollback()</code> をコールして) ロールバックされます。 新しいトランザクションを開く前に <code>ingres_autocommit()</code> をコールすると、 SQL を実行するたびにその場で自動的にコミットするようになります。</p><p><b>注意</b>: <b>関連する設定項目</b><br></p><p>実行時設定での ingres.describe、 ingres.scrollable および ingres.utf8 の説明も参照ください。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @param string $query <p>Ingres のドキュメント (Ingres <i>SQL reference guide</i> を参照ください) に書かれた正しい形式の SQL クエリ。 <b>ingres_prepare()</b> を使って実行できない SQL 文の一覧は、 <code>ingres_query()</code> の query パラメータを参照ください。</p>
	 * @return mixed <p><b>ingres_prepare()</b> はクエリの結果 ID を返します。 <code>ingres_execute()</code> でクエリを実行するときに、これを使います。 エラーが発生したかどうかを知るには、<code>ingres_errno()</code>、 <code>ingres_error()</code> あるいは <code>ingres_errsqlstate()</code> を使います。</p>
	 * @link https://php.net/manual/ja/function.ingres-prepare.php
	 * @see ingres_unbuffered_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row(), ingres_commit(), ingres_rollback(), ingres_autocommit(), ingres_set_environment(), ingres_errno(), ingres_error()
	 * @since PECL ingres >= 1.1.0
	 */
	function ingres_prepare($link, string $query) {}

	/**
	 * Ingres に SQL クエリを送信する
	 * <p><b>ingres_query()</b> は、指定した <code>query</code> を Ingres サーバーに送信します。</p><p>クエリは、現在オープンされているトランザクションの一部となります。 オープンされているトランザクションがない場合、 <b>ingres_query()</b> は新規のトランザクションをオープンします。 トランザクションをクローズするには、データベースへの変更をコミットする場合に <code>ingres_commit()</code> を、 これらの変更をキャンセルする場合に <code>ingres_rollback()</code> のどちらかを使用することが可能です。 スクリプト終了時に、全てのオープンされたトランザクションは (<code>ingres_rollback()</code> をコールすることにより) ロールバックされます。新規トランザクションをオープンする前に <code>ingres_autocommit()</code> を使用することも可能です。 この場合、各 SQL クエリは直ちにコミットされます。</p><p><b>注意</b>: <b>関連する設定項目</b><br></p><p>実行時設定 での ingres.describe、 ingres.scrollable および ingres.utf8 の説明も参照ください。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @param string $query <p>有効な SQL クエリ (Ingres ドキュメントにある Ingres <i>SQL リファレンスガイド</i> を参照ください)。</p> <p>クエリ内のデータは 適切にエスケープ しておかなければなりません。</p> <p>次の型の SQL クエリは、この関数で送信できません。</p><ul> <li>  <i>close</i> (<code>ingres_close()</code> を参照)  </li> <li>  <i>commit</i> (<code>ingres_commit()</code> を参照)  </li> <li>  <i>connect</i> (<code>ingres_connect()</code> を参照)  </li> <li>  <i>disconnect</i> (<code>ingres_close()</code> を参照)  </li> <li> <i>get dbevent</i> </li> <li> <i>prepare to commit</i> </li> <li>  <i>rollback</i> (<code>ingres_rollback()</code> を参照)  </li> <li><i>savepoint</i></li> <li>  <i>set autocommit</i> (<code>ingres_autocommit()</code> を参照)  </li> <li> カーソルに関係するクエリはサポートされていません </li> </ul>
	 * @param array $params <p>クエリで使用するパラメータの値の配列。</p>
	 * @param string $types <p>渡されたパラメータの値の型を含む文字列。 ingres.describe が有効な場合は このパラメータは無視され、サーバーが期待している型をドライバが自動的に取得します。</p>    型コード Ingres の型     a <code>BOOLEAN</code>   b BYTE   B LONG BYTE/BLOB   c CHAR   d DATE/ANSIDATE/TIMESTAMP/TIME   f <code>FLOAT</code>   i <code>INTEGER</code>   L LONG TEXT   m MONEY   M LONG NVARCHAR   n NCHAR   N NVARCHAR   t TEXT   v VARCHAR   V LONG VARCHAR
	 * @return mixed <p><b>ingres_query()</b> は、 成功した場合にクエリ結果 ID、それ以外の場合に <b><code>FALSE</code></b> を返します。 エラーが発生したかどうかを知るには <code>ingres_errno()</code>、 <code>ingres_error()</code> あるいは <code>ingres_errsqlstate()</code> を使用します。</p>
	 * @link https://php.net/manual/ja/function.ingres-query.php
	 * @see ingres_unbuffered_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row(), ingres_commit(), ingres_rollback(), ingres_autocommit(), ingres_set_environment(), ingres_errno(), ingres_error()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_query($link, string $query, array $params = NULL, string $types = NULL) {}

	/**
	 * データを取得する前に行の位置を設定する
	 * <p>この関数を使って、フェッチを実行する前に結果セットのカーソルを移動することができます。 ingres.array_index_start が 0 の場合は最初の行が 0 番目、それ以外の場合は最初の行は 1 番目となります。 <b>ingres_result_seek()</b> は、 スクロール可能なカーソル を使ったクエリでのみ使うことができます。 <code>ingres_unbuffered_query()</code> では使うことができません。</p><p><b>注意</b>: <b>関連する設定項目</b><br></p><p>実行時設定での ingres.scrollable および ingres.array_index_start の説明も参照ください。</p>
	 * @param resource $result <p>クエリの結果 ID。</p>
	 * @param int $position <p>カーソルを移動させる場所。ingres.array_index_start が 0 の場合は最初の行が 0 番目、それ以外の場合は最初の行は 1 番目となります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-result-seek.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row()
	 * @since PECL ingres >= 2.1.0
	 */
	function ingres_result_seek($result, int $position): bool {}

	/**
	 * トランザクションをロールバックする
	 * <p><b>ingres_rollback()</b> は現在オープンされているトランザクションをロールバックし、 トランザクションの間にデータベースに行われた全ての変更をキャンセルします。</p><p>この関数は、トランザクションをクローズします。 <code>ingres_query()</code> によりクエリを送信することによって、 新規のトランザクションをオープンすることが可能です。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-rollback.php
	 * @see ingres_query(), ingres_commit(), ingres_autocommit()
	 * @since PHP 4 >= 4.0.2, PHP 5 < 5.1.0, PECL ingres >= 1.0.0
	 */
	function ingres_rollback($link): bool {}

	/**
	 * 環境を設定して出力オプションを制御する
	 * <p><b>ingres_set_environment()</b> をコールして、 Ingres からの値の出力に影響する環境設定をします。 タイムゾーンや日付の書式、桁区切り文字や小数点の桁数などが含まれます。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @param array $options <p>オプション名とその値のペアの配列。 オプション名と型は次のとおりです。</p> <p></p>   オプション名 型 説明 例     date_century_boundary <code>integer</code> 2 桁表記の年が今世紀を表すのか来世紀を表すのかの区切り。 II_DATE_CENTURY_BOUNDARY と同じです。 50   timezone <code>string</code> セッションのタイムゾーンを設定します。未設定の場合は II_TIMEZONE_NAME で定義したデフォルトを使います。 II_TIMEZONE_NAME が定義されていない場合は NA-PACIFIC (GMT-8 +夏時間) を使います。 UNITED-KINGDOM   date_format <code>integer</code>  <p>Ingres の日付の入出力フォーマットを設定します。 デフォルトは II_DATE_FORMAT で定義した値です。II_DATE_FORMAT が未設定の場合は デフォルトの日付フォーマットは US、つまり mm/dd/yy 形式となります。 date_format には次の値を使えます。</p> <ul> <li>INGRES_DATE_DMY</li> <li>INGRES_DATE_FINISH</li> <li>INGRES_DATE_GERMAN</li> <li>INGRES_DATE_ISO</li> <li>INGRES_DATE_ISO4</li> <li>INGRES_DATE_MDY</li> <li>INGRES_DATE_MULTINATIONAL</li> <li>INGRES_DATE_MULTINATIONAL4</li> <li>INGRES_DATE_YMD</li> <li>INGRES_DATE_US</li> </ul>  INGRES_DATE_ISO4   decimal_separator <code>string</code> 数値の桁区切り文字 ","   money_lort <code>integer</code>  <p>通貨記号を先頭と末尾のどちらにつけるか。 money_lort には次の値を使えます。</p> <ul> <li>INGRES_MONEY_LEADING</li> <li>INGRES_MONEY_TRAILING</li> </ul>  INGRES_MONEY_LEADING   money_sign <code>string</code> MONEY 型で使う通貨記号 €   money_precision <code>integer</code> MONEY 型の小数点以下の桁数 2   float4_precision <code>integer</code> FLOAT4 型の小数点以下の桁数 10   float8_precision <code>integer</code> FLOAT8 型の小数点以下の桁数 10   blob_segment_length <code>integer</code> BLOB や CLOB のデータを取得するときの一回あたりの取得バイト数。 明示的に指定しない場合のデフォルトは 4096 バイト。 8192
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ingres-set-environment.php
	 * @see ingres_connect(), ingres_query()
	 * @since PECL ingres >= 1.2.0
	 */
	function ingres_set_environment($link, array $options): bool {}

	/**
	 * 未バッファ SQL クエリを Ingres に送信する
	 * <p><b>ingres_unbuffered_query()</b> は、指定したクエリを Ingres サーバーに送信します。</p><p>クエリは、現在開いているトランザクションの一部となります。 開いているトランザクションがない場合は <b>ingres_unbuffered_query()</b> が新しいトランザクションを開きます。 トランザクションを閉じるには、<code>ingres_commit()</code> をコールして変更をデータベースにコミットするか <code>ingres_rollback()</code> で変更をキャンセルします。 スクリプトが終了すると、開いているトランザクションはすべて (<code>ingres_rollback()</code> をコールして) ロールバックされます。 新しいトランザクションを開く前に <code>ingres_autocommit()</code> をコールすると、 SQL を実行するたびにその場で自動的にコミットするようになります。 Ingres は、未バッファの文を一度にひとつしかアクティブにできません。 この拡張モジュールは、アクティブな未バッファの文をすべて閉じてから SQL を実行します。さらに、フェッチを始める前に <code>ingres_result_seek()</code> で行の位置を移動することはできません。</p><p><b>注意</b>: <b>関連する設定項目</b><br></p><p>実行時設定での ingres.describe および ingres.utf8 の説明も参照ください。</p>
	 * @param resource $link <p>接続リンク ID。</p>
	 * @param string $query <p>Ingres のドキュメント (Ingres <i>SQL reference guide</i> を参照ください) に書かれた正しい形式の SQL クエリ。 <b>ingres_unbuffered_query()</b> を使って実行できない SQL 文の一覧は、<code>ingres_query()</code> の query パラメータを参照ください。</p> <p>クエリ内のデータは、適切にエスケープ しておかなければなりません。</p>
	 * @param array $params <p>このクエリで使うパラメータの値の配列。</p>
	 * @param string $types <p>パラメータに渡した値の型を表す文字列。型コードの一覧は <code>ingres_query()</code> の types パラメータを参照ください。</p>
	 * @return mixed <p><b>ingres_unbuffered_query()</b> は、行を取得した場合にクエリ結果 ID を返します。行がない場合、たとえば INSERT や UPDATE あるいは DELETE 文を実行した場合は <b><code>FALSE</code></b> を返します。 エラーが発生したかどうかを知るには <code>ingres_errno()</code>、 <code>ingres_error()</code> あるいは <code>ingres_errsqlstate()</code> を使用します。</p>
	 * @link https://php.net/manual/ja/function.ingres-unbuffered-query.php
	 * @see ingres_query(), ingres_fetch_array(), ingres_fetch_assoc(), ingres_fetch_object(), ingres_fetch_row(), ingres_commit(), ingres_rollback(), ingres_autocommit(), ingres_set_environment(), ingres_errno(), ingres_error()
	 * @since No version information available, might only be in Git
	 */
	function ingres_unbuffered_query($link, string $query, array $params = NULL, string $types = NULL) {}

	/**
	 * この拡張モジュールがビルドされた際の Ingres OpenAPI のバージョンを表します。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。
	 */
	define('INGRES_API_VERSION', null);

	/**
	 * フィールド名をキーとする配列でカラムデータを返します。 <code>ingres_fetch_array()</code> で使用します。
	 */
	define('INGRES_ASSOC', null);

	/**
	 * 数値添字・フィールド名キーの両方の形式でカラムデータを返します。 <code>ingres_fetch_array()</code> で使用します。
	 */
	define('INGRES_BOTH', null);

	/**
	 * Ingres カーソルが "readonly" モードでオープンされていることを表します。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 ingres.cursor_mode で使用します。
	 */
	define('INGRES_CURSOR_READONLY', null);

	/**
	 * Ingres カーソルが "for update" モードでオープンされていることを表します。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 ingres.cursor_mode で使用します。
	 */
	define('INGRES_CURSOR_UPDATE', null);

	/**
	 * II_DATE_FORMAT の設定 DMY と等価です。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 <code>ingres_connect()</code>、<code>ingres_pconnect()</code> および <code>ingres_set_environment()</code> で使用します。 <code>ingres_set_environment()</code> の オプション も参照ください。
	 */
	define('INGRES_DATE_DMY', null);

	/**
	 * II_DATE_FORMAT の設定 FINNISH と等価です。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 <code>ingres_connect()</code>、<code>ingres_pconnect()</code> および <code>ingres_set_environment()</code> で使用します。 <code>ingres_set_environment()</code> の オプション も参照ください。
	 */
	define('INGRES_DATE_FINNISH', null);

	/**
	 * II_DATE_FORMAT の設定 GERMAN と等価です。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 <code>ingres_connect()</code>、<code>ingres_pconnect()</code> および <code>ingres_set_environment()</code> で使用します。 <code>ingres_set_environment()</code> の オプション も参照ください。
	 */
	define('INGRES_DATE_GERMAN', null);

	/**
	 * II_DATE_FORMAT の設定 ISO と等価です。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 <code>ingres_connect()</code>、<code>ingres_pconnect()</code> および <code>ingres_set_environment()</code> で使用します。 <code>ingres_set_environment()</code> の オプション も参照ください。
	 */
	define('INGRES_DATE_ISO', null);

	/**
	 * II_DATE_FORMAT の設定 ISO4 と等価です。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 <code>ingres_connect()</code>、<code>ingres_pconnect()</code> および <code>ingres_set_environment()</code> で使用します。 <code>ingres_set_environment()</code> の オプション も参照ください。
	 */
	define('INGRES_DATE_ISO4', null);

	/**
	 * II_DATE_FORMAT の設定 MDY と等価です。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 <code>ingres_connect()</code>、<code>ingres_pconnect()</code> および <code>ingres_set_environment()</code> で使用します。 <code>ingres_set_environment()</code> の オプション も参照ください。
	 */
	define('INGRES_DATE_MDY', null);

	/**
	 * II_DATE_FORMAT の設定 MULTINATIONAL と等価です。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 <code>ingres_connect()</code>、<code>ingres_pconnect()</code> および <code>ingres_set_environment()</code> で使用します。 <code>ingres_set_environment()</code> の オプション も参照ください。
	 */
	define('INGRES_DATE_MULTINATIONAL', null);

	/**
	 * II_DATE_FORMAT の設定 MULTINATIONAL4 と等価です。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 <code>ingres_connect()</code>、<code>ingres_pconnect()</code> および <code>ingres_set_environment()</code> で使用します。 <code>ingres_set_environment()</code> の オプション も参照ください。
	 */
	define('INGRES_DATE_MULTINATIONAL4', null);

	/**
	 * II_DATE_FORMAT の設定 YMD と等価です。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 <code>ingres_connect()</code>、<code>ingres_pconnect()</code> および <code>ingres_set_environment()</code> で使用します。 <code>ingres_set_environment()</code> の オプション も参照ください。
	 */
	define('INGRES_DATE_YMD', null);

	/**
	 * Ingres 拡張モジュールのバージョンを表します。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。
	 */
	define('INGRES_EXT_VERSION', null);

	/**
	 * 金額の値の先頭に表示する文字を表します。 II_MONEY_FORMAT の設定 "L:" と等価です。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 <code>ingres_connect()</code>、<code>ingres_pconnect()</code> および <code>ingres_set_environment()</code> で使用します。 <code>ingres_set_environment()</code> の オプション も参照ください。
	 */
	define('INGRES_MONEY_LEADING', null);

	/**
	 * 金額の値の最後に表示する文字を表します。 II_MONEY_FORMAT の設定 "T:" と等価です。 PECL 拡張モジュールのバージョン 1.2.0 以降で使用可能です。 <code>ingres_connect()</code>、<code>ingres_pconnect()</code> および <code>ingres_set_environment()</code> で使用します。 <code>ingres_set_environment()</code> の オプション も参照ください。
	 */
	define('INGRES_MONEY_TRAILING', null);

	/**
	 * 数値添字の配列でカラムデータを返します。 デフォルトでは、結果の最初のフィールドの添字は 1 となります。 これを変更するには ingres.array_index_start を参照ください。 <code>ingres_fetch_array()</code> で使用します。
	 */
	define('INGRES_NUM', null);

	/**
	 * デフォルトのテーブル構造あるいはインデックス構造を BTREE に設定します。 これは、接続時のオプション table_structure あるいは index_structure と組み合わせて使用します。 PECL 拡張モジュールのバージョン 1.4.0 以降で使用可能です。 <code>ingres_connect()</code> および <code>ingres_pconnect()</code> で使用します。 <code>ingres_connect()</code> の オプション も参照ください。
	 */
	define('INGRES_STRUCTURE_BTREE', null);

	/**
	 * デフォルトのテーブル構造あるいはインデックス構造を COMPRESSED BTREE に設定します。 これは、接続時のオプション table_structure あるいは index_structure と組み合わせて使用します。 PECL 拡張モジュールのバージョン 1.4.0 以降で使用可能です。 <code>ingres_connect()</code> および <code>ingres_pconnect()</code> で使用します。 <code>ingres_connect()</code> の オプション も参照ください。
	 */
	define('INGRES_STRUCTURE_CBTREE', null);

	/**
	 * デフォルトのテーブル構造あるいはインデックス構造を COMPRESSED HASH に設定します。 これは、接続時のオプション table_structure あるいは index_structure と組み合わせて使用します。 PECL 拡張モジュールのバージョン 1.4.0 以降で使用可能です。 <code>ingres_connect()</code> および <code>ingres_pconnect()</code> で使用します。 <code>ingres_connect()</code> の オプション も参照ください。
	 */
	define('INGRES_STRUCTURE_CHASH', null);

	/**
	 * デフォルトのテーブル構造あるいはインデックス構造を COMPRESSED HEAP に設定します。 これは、接続時のオプション table_structure あるいは index_structure と組み合わせて使用します。 PECL 拡張モジュールのバージョン 1.4.0 以降で使用可能です。 <code>ingres_connect()</code> および <code>ingres_pconnect()</code> で使用します。 <code>ingres_connect()</code> の オプション も参照ください。
	 */
	define('INGRES_STRUCTURE_CHEAP', null);

	/**
	 * デフォルトのテーブル構造あるいはインデックス構造を COMPRESSED ISAM に設定します。 これは、接続時のオプション table_structure あるいは index_structure と組み合わせて使用します。 PECL 拡張モジュールのバージョン 1.4.0 以降で使用可能です。 <code>ingres_connect()</code> および <code>ingres_pconnect()</code> で使用します。 <code>ingres_connect()</code> の オプション も参照ください。
	 */
	define('INGRES_STRUCTURE_CISAM', null);

	/**
	 * デフォルトのテーブル構造あるいはインデックス構造を HASH に設定します。 これは、接続時のオプション table_structure あるいは index_structure と組み合わせて使用します。 PECL 拡張モジュールのバージョン 1.4.0 以降で使用可能です。 <code>ingres_connect()</code> および <code>ingres_pconnect()</code> で使用します。 <code>ingres_connect()</code> の オプション も参照ください。
	 */
	define('INGRES_STRUCTURE_HASH', null);

	/**
	 * デフォルトのテーブル構造あるいはインデックス構造を HEAP に設定します。 これは、接続時のオプション table_structure あるいは index_structure と組み合わせて使用します。 PECL 拡張モジュールのバージョン 1.4.0 以降で使用可能です。 <code>ingres_connect()</code> および <code>ingres_pconnect()</code> で使用します。 <code>ingres_connect()</code> の オプション も参照ください。
	 */
	define('INGRES_STRUCTURE_HEAP', null);

	/**
	 * デフォルトのテーブル構造あるいはインデックス構造を ISAM に設定します。 これは、接続時のオプション table_structure あるいは index_structure と組み合わせて使用します。 PECL 拡張モジュールのバージョン 1.4.0 以降で使用可能です。 <code>ingres_connect()</code> および <code>ingres_pconnect()</code> で使用します。 <code>ingres_connect()</code> の オプション も参照ください。
	 */
	define('INGRES_STRUCTURE_ISAM', null);

}
