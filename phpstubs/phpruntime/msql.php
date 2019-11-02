<?php



namespace {

	/**
	 * Alias of msql_db_query()
	 * <p>この関数は次の関数のエイリアスです。 <code>msql_db_query()</code>.</p>
	 * @param string $database <p>mSQL データベースの名前。</p>
	 * @param string $query <p>SQL クエリ。</p>
	 * @param resource $link_identifier <p>mSQL 接続。 指定されない場合、<code>msql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、この関数は、 <code>msql_connect()</code>をコールした時と同様にリンクを確立し、使用します。</p>
	 * @return resource
	 * @link https://php.net/manual/ja/function.msql.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql(string $database, string $query, $link_identifier = NULL) {}

	/**
	 * 変更された行の数を返す
	 * <p><code>result</code> に関連する直近の SELECT、UPDATE あるいは DELETE クエリにより変更された行の数を返します。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @return int <p>成功した場合には変更された行の数、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-affected-rows.php
	 * @see msql_query()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_affected_rows($result): int {}

	/**
	 * mSQL 接続を閉じる
	 * <p><b>msql_close()</b> は、指定したリンク ID に関連付けられた mSQL サーバーとの持続的でない接続を閉じます。</p><p>通常は <b>msql_close()</b> を使用する必要はありません。 なぜなら、持続的でないリンクはスクリプトの実行終了時に自動的に 閉じられるからです。 リソースの開放 も参照ください。</p>
	 * @param resource $link_identifier <p>mSQL 接続。 指定されない場合、<code>msql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、この関数は、 <code>msql_connect()</code>をコールした時と同様にリンクを確立し、使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-close.php
	 * @see msql_connect(), msql_pconnect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_close($link_identifier = NULL): bool {}

	/**
	 * mSQL 接続を開く
	 * <p><b>msql_connect()</b> は mSQL サーバーとの接続を確立します。</p><p>同じ引数で <b>msql_connect()</b> が再度コールされた場合、 新しいリンクは作成されません。替わりに、既に開かれているリンクの ID が返されます。</p><p><code>msql_close()</code> を明示的にコールしなければ、サーバーとの リンクはスクリプトの実行終了直後に閉じられます。</p>
	 * @param string $hostname <p>ホスト名にはポート番号を含めることも可能です。例: <i>hostname,port</i></p> <p>指定されなかった場合、接続は Unix ドメインソケットで確立されます。 これは、ローカルホストへの TCP ソケット接続より効率的です。</p>  <p><b>注意</b>:</p> <p>この関数はホスト名とポートの区切りとしてコロン（<i>:</i>） も受け付けますが、カンマ（<i>,</i>）で区切るほうが 推奨されます。</p>
	 * @return resource <p>成功した場合には正の mSQL リンク IDを、エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-connect.php
	 * @see msql_pconnect(), msql_close()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_connect(string $hostname = NULL) {}

	/**
	 * mSQL データベースを作成する
	 * <p><b>msql_create_db()</b> は、mSQL サーバー上に データベースの作成を試みます。</p>
	 * @param string $database_name <p>mSQL データベース名。</p>
	 * @param resource $link_identifier <p>mSQL 接続。 指定されない場合、<code>msql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、この関数は、 <code>msql_connect()</code>をコールした時と同様にリンクを確立し、使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-create-db.php
	 * @see msql_drop_db()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_create_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * msql_create_db() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>msql_create_db()</code></p>
	 * @param string $database_name <p>mSQL データベース名。</p>
	 * @param resource $link_identifier <p>mSQL 接続。 指定されない場合、<code>msql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、この関数は、 <code>msql_connect()</code>をコールした時と同様にリンクを確立し、使用します。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.msql-createdb.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_createdb(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * 行に関する内部ポインタを移動する
	 * <p><b>msql_data_seek()</b> は、指定したクエリー ID (query_identfier)が指す mSQL の結果行への内部ポインタが指定した行番号 (row_number)を指すようにします。 次に <code>msql_fetch_row()</code> をコールした際には、 その行を返します。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $row_number <p>指定する行番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-data-seek.php
	 * @see msql_fetch_array(), msql_fetch_object(), msql_fetch_row(), msql_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_data_seek($result, int $row_number): bool {}

	/**
	 * mSQL クエリを送信する
	 * <p><b>msql_db_query()</b> はデータベースを選択し、 そこに対してクエリを実行します。</p>
	 * @param string $database <p>mSQL データベースの名前。</p>
	 * @param string $query <p>SQL クエリ。</p>
	 * @param resource $link_identifier <p>mSQL 接続。 指定されない場合、<code>msql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、この関数は、 <code>msql_connect()</code>をコールした時と同様にリンクを確立し、使用します。</p>
	 * @return resource <p>成功した場合には正の mSQL リンク IDを、エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-db-query.php
	 * @see msql_query()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_db_query(string $database, string $query, $link_identifier = NULL) {}

	/**
	 * msql_result() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>msql_result()</code></p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $row <p>行オフセット。</p>
	 * @param mixed $field <p>フィールドのオフセット、あるいはフィールド名、またはテーブル名 .フィールド名 のいずれか。カラム名がエイリアス定義されている （'select foo as bar from ...'）場合、カラム名のかわりに エイリアスを使用します。</p>  <p><b>注意</b>:</p> <p>フィールド名やテーブル名.フィールド名を指定するよりも フィールドのオフセットを数値で指定するほうがはるかに高速です。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.msql-dbname.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_dbname($result, int $row, $field = NULL): string {}

	/**
	 * mSQL データベースを破棄(削除)する
	 * <p><b>msql_drop_db()</b> は、mSQL サーバーから データベースを削除することを試みます。</p>
	 * @param string $database_name <p>データベースの名前。</p>
	 * @param resource $link_identifier <p>mSQL 接続。 指定されない場合、<code>msql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、この関数は、 <code>msql_connect()</code>をコールした時と同様にリンクを確立し、使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-drop-db.php
	 * @see msql_create_db()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_drop_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * 最後の msql コールに関するエラーメッセージを返す
	 * <p><b>msql_error()</b> は、mSQL サーバーで最後に発生したエラーを 返します。<b>msql_error()</b> でアクセス可能なのは 直近のエラーメッセージだけであることに注意しましょう。</p>
	 * @return string <p>直近のエラーメッセージを返します。エラーが発生しなかった場合は 空文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-error.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_error(): string {}

	/**
	 * 結果の行を配列として取得する
	 * <p><b>msql_fetch_array()</b> は、 <code>msql_fetch_row()</code> の拡張版です。 結果配列のデータを数値インデックスに格納することに加え、 フィールド名をキーとして連想配列にも格納します。</p><p><b>msql_fetch_array()</b> の使用に際して注意すべきことは、 かなりの付加機能を提供するにもかかわらず、 <code>msql_fetch_row()</code> を使用する場合より そんなに遅くないということです。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $result_type <p>以下の定数 <b><code>MSQL_ASSOC</code></b>、<b><code>MSQL_NUM</code></b>、および <b><code>MSQL_BOTH</code></b> のうちのいずれか。 <b><code>MSQL_BOTH</code></b> がデフォルト。</p>
	 * @return array <p>取得した行に対応する配列を返します。行が残っていない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-fetch-array.php
	 * @see msql_fetch_row(), msql_fetch_object(), msql_data_seek(), msql_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fetch_array($result, int $result_type = NULL): array {}

	/**
	 * フィールド情報を得る
	 * <p><b>msql_fetch_field()</b> はあるクエリ結果に含まれる フィールドの情報を取得する際に使用することができます。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>フィールドオフセット。指定されていない場合は、まだ <b>msql_fetch_field()</b> で取得されていない 次のフィールドが返されます。</p>
	 * @return object <p>フィールド情報を含むオブジェクトを返します。プロパティは以下のとおりです。</p><ul> <li> <p>name - カラム名</p> </li> <li> <p>table - カラムが属するテーブル名</p> </li> <li> <p>not_null - カラムが <b><code>NULL</code></b> になることができない場合に 1</p> </li> <li> <p>unique - カラムがユニークキーである場合に 1</p> </li> <li>  type - カラムの型  </li> </ul>
	 * @link https://php.net/manual/ja/function.msql-fetch-field.php
	 * @see msql_field_seek()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fetch_field($result, int $field_offset = 0): object {}

	/**
	 * 結果の行をオブジェクトとして取得する
	 * <p><b>msql_fetch_object()</b> は、 <code>msql_fetch_array()</code> に似ていますが、配列の代わりに オブジェクトを返すところだけが異なっています。遠まわしに言うと、 オフセット値によってではなくフィールド名によってのみデータを アクセスすることができることを意味しています （数字は、プロパティ名として使用できません）。</p><p>速度面でこの関数は <code>msql_fetch_array()</code> と同等です。そして、ほぼ <code>msql_fetch_row()</code> と同等の速度を有しています（その差は無視できるほどです）。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @return object <p>得た行に対応するプロパティを有するオブジェクトを返します。 もう行がない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-fetch-object.php
	 * @see msql_fetch_array(), msql_fetch_row(), msql_data_seek(), msql_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fetch_object($result): object {}

	/**
	 * 結果の行を数値配列として取得する
	 * <p><b>msql_fetch_row()</b> は、指定したリンク ID が指す 結果から 1 行分のデータを得ます。行は、配列として返されます。 各結果のカラムは、0 から始まる配列オフセットに保存されます。</p><p>連続して <b>msql_fetch_row()</b> をコールした場合、 次の行を結果として返します。もう行がない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @return array <p>結果の行に対応する配列を返します。もう行がない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-fetch-row.php
	 * @see msql_fetch_array(), msql_fetch_object(), msql_data_seek(), msql_result()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fetch_row($result): array {}

	/**
	 * フィールドのフラグを取得する
	 * <p><b>msql_field_flags()</b> は、指定したフィールドの フィールドフラグを返します。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は、<i>1</i>から始まります。</p>
	 * @return string <p>指定したキーのフィールドフラグを含む文字列を返します。 とりうる値は: <i>primary key not null</i>、 <i>not null</i>、<i>primary key</i>、 <i>unique not null</i> あるいは <i>unique</i> です。</p>
	 * @link https://php.net/manual/ja/function.msql-field-flags.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_flags($result, int $field_offset): string {}

	/**
	 * フィールドの長さを取得する
	 * <p><b>msql_field_len()</b> は指定したフィールドの長さを返します。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は、<i>1</i>から始まります。</p>
	 * @return int <p>指定したフィールドの長さを返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-field-len.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_len($result, int $field_offset): int {}

	/**
	 * 結果における指定したフィールドの名前を取得する
	 * <p><b>msql_field_name()</b> は、指定したフィールドインデックスの 名前を取得します。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は、<i>1</i>から始まります。</p>
	 * @return string <p>フィールドの名前を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-field-name.php
	 * @see msql_field_len()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_name($result, int $field_offset): string {}

	/**
	 * フィールドオフセットを設定する
	 * <p>指定されたフィールドオフセットに移動します。 この後で <code>msql_fetch_field()</code> を フィールドオフセットを指定せずにコールした場合は、 ここで指定したフィールドが返されます。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は、<i>1</i>から始まります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-field-seek.php
	 * @see msql_fetch_field()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_seek($result, int $field_offset): bool {}

	/**
	 * フィールドのテーブル名を取得する
	 * <p>指定したフィールドが含まれるテーブルの名前を返します。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は、<i>1</i>から始まります。</p>
	 * @return int <p>成功した場合はテーブルの名前、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-field-table.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_table($result, int $field_offset): int {}

	/**
	 * フィールドの型を取得する
	 * <p><b>msql_field_type()</b> は、指定したフィールドインデックスの 型を取得します。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は、<i>1</i>から始まります。</p>
	 * @return string <p>フィールドの型。<i>int</i>、 <i>char</i>、<i>real</i>、<i>ident</i>、 <i>null</i> あるいは <i>unknown</i> のいずれか。 失敗した場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-field-type.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_field_type($result, int $field_offset): string {}

	/**
	 * Alias of msql_field_flags()
	 * <p>この関数は次の関数のエイリアスです。 <code>msql_field_flags()</code>.</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は、<i>1</i>から始まります。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.msql-fieldflags.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fieldflags($result, int $field_offset): string {}

	/**
	 * Alias of msql_field_len()
	 * <p>この関数は次の関数のエイリアスです。 <code>msql_field_len()</code>.</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は、<i>1</i>から始まります。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.msql-fieldlen.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fieldlen($result, int $field_offset): int {}

	/**
	 * Alias of msql_field_name()
	 * <p>この関数は次の関数のエイリアスです。 <code>msql_field_name()</code>.</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は、<i>1</i>から始まります。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.msql-fieldname.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fieldname($result, int $field_offset): string {}

	/**
	 * Alias of msql_field_table()
	 * <p>この関数は次の関数のエイリアスです。 <code>msql_field_table()</code>.</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は、<i>1</i>から始まります。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.msql-fieldtable.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fieldtable($result, int $field_offset): int {}

	/**
	 * Alias of msql_field_type()
	 * <p>この関数は次の関数のエイリアスです。 <code>msql_field_type()</code>.</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は、<i>1</i>から始まります。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.msql-fieldtype.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_fieldtype($result, int $field_offset): string {}

	/**
	 * 結果保持用メモリを開放する
	 * <p><b>msql_free_result()</b> は、 <code>query_identifier</code> が指すメモリを開放します。 リクエストの処理を完了した時、このメモリは自動的に開放されます。 よって、この関数を使用する必要があるのは、 スクリプトの実行時に大量のメモリを使用しないことを 確実にしたい場合のみです。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-free-result.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_free_result($result): bool {}

	/**
	 * サーバー上の mSQL データベースのリストを返す
	 * <p><b>msql_list_dbs()</b> は、指定した <code>link_identifier</code> 上で使用可能なデータベースの 一覧を返します。</p>
	 * @param resource $link_identifier <p>mSQL 接続。 指定されない場合、<code>msql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、この関数は、 <code>msql_connect()</code>をコールした時と同様にリンクを確立し、使用します。</p>
	 * @return resource <p>結果セットを返します。これは <code>msql_fetch_array()</code> のような結果セットを読み込む関数によって処理が可能です。失敗した場合は、 この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-list-dbs.php
	 * @see msql_list_tables(), msql_list_fields()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_list_dbs($link_identifier = NULL) {}

	/**
	 * 結果フィールドのリストを得る
	 * <p><b>msql_list_fields()</b> は、指定したテーブルに関する情報を返します。</p>
	 * @param string $database <p>データベースの名前。</p>
	 * @param string $tablename <p>テーブルの名前。</p>
	 * @param resource $link_identifier <p>mSQL 接続。 指定されない場合、<code>msql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、この関数は、 <code>msql_connect()</code>をコールした時と同様にリンクを確立し、使用します。</p>
	 * @return resource <p>結果セットを返します。これは <code>msql_fetch_array()</code> のような結果セットを読み込む関数によって処理が可能です。失敗した場合は、 この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-list-fields.php
	 * @see msql_list_tables(), msql_list_dbs()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_list_fields(string $database, string $tablename, $link_identifier = NULL) {}

	/**
	 * mSQL データベースにおけるテーブルのリストを得ます
	 * <p><b>msql_list_tables()</b> は、指定した <code>database</code> 上のテーブルのリストを返します。</p>
	 * @param string $database <p>データベースの名前。</p>
	 * @param resource $link_identifier <p>mSQL 接続。 指定されない場合、<code>msql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、この関数は、 <code>msql_connect()</code>をコールした時と同様にリンクを確立し、使用します。</p>
	 * @return resource <p>結果セットを返します。これは <code>msql_fetch_array()</code> のような結果セットを読み込む関数によって処理が可能です。失敗した場合は、 この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-list-tables.php
	 * @see msql_list_fields(), msql_list_dbs()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_list_tables(string $database, $link_identifier = NULL) {}

	/**
	 * 結果におけるフィールドの数を得る
	 * <p><b>msql_num_fields()</b>は、結果セットにおける フィールドの数を返します。</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @return int <p>結果セットにおけるフィールドの数を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-num-fields.php
	 * @see msql_query(), msql_fetch_field(), msql_num_rows()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_num_fields($result): int {}

	/**
	 * 結果における行の数を得る
	 * <p><b>msql_num_rows()</b> は、結果セットにおける 行の数を返します。</p>
	 * @param resource $query_identifier
	 * @return int <p>結果セットにおける行の数を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-num-rows.php
	 * @see msql_num_fields()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_num_rows($query_identifier): int {}

	/**
	 * Alias of msql_num_fields()
	 * <p>この関数は次の関数のエイリアスです。 <code>msql_num_fields()</code>.</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.msql-numfields.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_numfields($result): int {}

	/**
	 * Alias of msql_num_rows()
	 * <p>この関数は次の関数のエイリアスです。 <code>msql_num_rows()</code>.</p>
	 * @param resource $query_identifier
	 * @return int
	 * @link https://php.net/manual/ja/function.msql-numrows.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_numrows($query_identifier): int {}

	/**
	 * 持続的な mSQL 接続をオープンする
	 * <p><b>msql_pconnect()</b> は <code>msql_connect()</code> とほぼ同じ動作をしますが、 大きな違いがふたつあります。</p><p>ひとつめは、この関数は接続する際に同じホストにおいてすでに確立された （持続的な）リンクを探そうとすることです。そのようなリンクが見つかった 場合、新たな接続をオープンするかわりにそのリンクの ID が返されます。</p><p>ふたつめは、スクリプトの実行が終了しても SQL サーバーへの接続が閉じられない ということです。そのかわりに、次に利用するときのために リンクが開かれたままとなります（<code>msql_close()</code> はこの関数によって確立されたリンクを閉じません）。</p>
	 * @param string $hostname <p>ホスト名にはポート番号を含めることも可能です。例: <i>hostname,port</i></p> <p>指定されなかった場合、接続は Unix ドメインソケットで確立されます。 これは、ローカルホストへの TCP ソケット接続より効率的です。</p> <p><b>注意</b>:  この関数はホスト名とポートの区切りとしてコロン（<i>:</i>） も受け付けますが、カンマ（<i>,</i>）で区切るほうが 推奨されます。 </p>
	 * @return resource <p>成功した場合には正の mSQL リンク IDを、エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-pconnect.php
	 * @see msql_connect(), msql_close()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_pconnect(string $hostname = NULL) {}

	/**
	 * mSQL クエリを送信する
	 * <p><b>msql_query()</b> は、指定されたリンク ID に 関連付けられたサーバー上の現在アクティブなデータベースに クエリを送信します。</p>
	 * @param string $query <p>SQL クエリ。</p>
	 * @param resource $link_identifier <p>mSQL 接続。 指定されない場合、<code>msql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、この関数は、 <code>msql_connect()</code>をコールした時と同様にリンクを確立し、使用します。</p>
	 * @return resource <p>成功した場合には正の mSQL リンク IDを、エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-query.php
	 * @see msql_db_query(), msql_select_db(), msql_connect()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_query(string $query, $link_identifier = NULL) {}

	/**
	 * Alias of sql_regcase()
	 * <p>この関数は次の関数のエイリアスです。 <code>sql_regcase()</code>.</p>
	 * @param string $string <p>入力文字列。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.msql-regcase.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_regcase(string $string): string {}

	/**
	 * 結果のデータを得る
	 * <p><b>msql_result()</b> は、mSQL 結果セットの セルの内容を返します。</p><p>大きな結果セットを処理する際には、（以下に指定した） 行全体を取り出す関数のどれかの使用を考慮するべきです。 これらの関数は 1 度のコールで複数セルの内容を返し、<b>msql_result()</b> よりもかなり高速に動作します。</p><p>推奨される方法は以下のとおりです。 <code>msql_fetch_row()</code>、 <code>msql_fetch_array()</code>、および <code>msql_fetch_object()</code></p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $row <p>行オフセット。</p>
	 * @param mixed $field <p>フィールドのオフセット、あるいはフィールド名、またはテーブル名 .フィールド名 のいずれか。カラム名がエイリアス定義されている （'select foo as bar from ...'）場合、カラム名のかわりに エイリアスを使用します。</p>  <p><b>注意</b>:</p> <p>フィールド名やテーブル名.フィールド名を指定するよりも フィールドのオフセットを数値で指定するほうがはるかに高速です。</p>
	 * @return string <p>指定した mSQL 結果セットから、行とオフセットに対応するセルの内容を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-result.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_result($result, int $row, $field = NULL): string {}

	/**
	 * mSQL データベースを選択する
	 * <p><b>msql_select_db()</b> は、指定した <code>link_identifier</code> に関連付けられたサーバー上の アクティブなデータベースを設定します。</p><p>これ以降の <code>msql_query()</code> のコールは、アクティブな データベースに対して行われます。</p>
	 * @param string $database_name <p>データベース名。</p>
	 * @param resource $link_identifier <p>mSQL 接続。 指定されない場合、<code>msql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、この関数は、 <code>msql_connect()</code>をコールした時と同様にリンクを確立し、使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.msql-select-db.php
	 * @see msql_connect(), msql_pconnect(), msql_query()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_select_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * Alias of msql_result()
	 * <p>この関数は次の関数のエイリアスです。 <code>msql_result()</code>.</p>
	 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>msql_query()</code> のコールにより得られたものです。</p>
	 * @param int $row <p>行オフセット。</p>
	 * @param mixed $field <p>フィールドのオフセット、あるいはフィールド名、またはテーブル名 .フィールド名 のいずれか。カラム名がエイリアス定義されている （'select foo as bar from ...'）場合、カラム名のかわりに エイリアスを使用します。</p>  <p><b>注意</b>:</p> <p>フィールド名やテーブル名.フィールド名を指定するよりも フィールドのオフセットを数値で指定するほうがはるかに高速です。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.msql-tablename.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function msql_tablename($result, int $row, $field = NULL): string {}

	define('MSQL_ASSOC', null);

	define('MSQL_BOTH', null);

	define('MSQL_NUM', null);

}
