<?php



/**
 * ストアドプロシージャまたはリモートストアドプロシージャへパラメータを追加する
 * <p>ストアドプロシージャまたはリモートストアドプロシージャへパラメータをバインドします。</p>
 * @param resource $stmt <p><code>mssql_init()</code> で取得したステートメントリソース。</p>
 * @param string $param_name <p>パラメータ名を表す文字列。</p>  <p><b>注意</b>:</p> <p>T-SQL 構文のように <i>@</i> 文字を含めなければなりません。 <code>mssql_execute()</code> にある例を参照ください。</p>
 * @param mixed $var <p>MSSQL パラメータとしてバインドする PHP 変数。 値渡し、参照渡しのどちらも可能です。実行後に OUTPUT や RETVAL を取得するには参照渡しとします。</p>
 * @param int $type <p><b><code>SQLTEXT</code></b>, <b><code>SQLVARCHAR</code></b>, <b><code>SQLCHAR</code></b>, <b><code>SQLINT1</code></b>, <b><code>SQLINT2</code></b>, <b><code>SQLINT4</code></b>, <b><code>SQLBIT</code></b>, <b><code>SQLFLT4</code></b>, <b><code>SQLFLT8</code></b>, <b><code>SQLFLTN</code></b> のいずれか。</p>
 * @param bool $is_output <p>値が OUTPUT パラメータであるかどうか。OUTPUT パラメータであることに気づかなかった場合、それは通常の INPUT パラメータとして扱われ、エラーは発生しません。</p>
 * @param bool $is_null <p>パラメータが <b><code>NULL</code></b> かどうか。<b><code>NULL</code></b> 値を <code>var</code> に渡しても正しく動作しません。</p>
 * @param int $maxlen <p>char/varchar 値で使用します。データの長さを指定する必要があります。 たとえばパラメータが varchar(50) の場合、型は <b><code>SQLVARCHAR</code></b> で、この値が <i>50</i> となります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-bind.php
 * @see mssql_execute(), mssql_free_statement(), mssql_init()
 * @since PHP 4 >= 4.0.7, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_bind($stmt, string $param_name, &$var, int $type, bool $is_output = FALSE, bool $is_null = FALSE, int $maxlen = -1): bool {}

/**
 * MS SQL Server への接続を閉じる
 * <p>指定したリンク ID が指す MS SQL Server データベースへのリンクを閉じます。 リンク ID が指定されない場合、最後にオープンされたリンクが指定されたと仮定します。</p><p>持続的でないリンクはスクリプト実行終了時に自動的に閉じられるので この関数は通常は必要ではありません。</p>
 * @param resource $link_identifier <p><code>mssql_connect()</code> が返す MS SQL リンク ID。</p> <p>この関数は、 <code>mssql_pconnect()</code> が作成した持続的リンクを閉じません。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-close.php
 * @see mssql_connect(), mssql_pconnect()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_close($link_identifier = NULL): bool {}

/**
 * MS SQL サーバー接続をオープンする
 * <p><b>mssql_connect()</b> はMS SQL サーバーへの接続を確立します。</p><p>サーバーへのリンクは、事前に <code>mssql_close()</code> により 明示的に閉じられていない限り、スクリプト終了後すぐに閉じられます。</p>
 * @param string $servername <p>MS SQL サーバー。 <i>hostname:port</i> (Linux) あるいは <i>hostname,port</i> (Windows) のようにしてポート番号を含めることもできます。</p>
 * @param string $username <p>ユーザー名。</p>
 * @param string $password <p>パスワード。</p>
 * @param bool $new_link <p>同じ引数で <b>mssql_connect()</b> が再度コールされた場合、 新規のリンクは作成されず、代わりに既にオープンされたリンク ID が返されます。 このパラメータは、この振る舞いを変更し、<b>mssql_connect()</b> が常に新しいリンクを返すようにします。同じパラメータで事前に <b>mssql_connect()</b> がコールされていたとしても、 新しいリンクを返します。</p>
 * @return resource <p>成功時に MS SQL リンク ID、エラー発生時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-connect.php
 * @see mssql_close(), mssql_pconnect()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_connect(string $servername = NULL, string $username = NULL, string $password = NULL, bool $new_link = FALSE) {}

/**
 * 内部行ポインタを移動する
 * <p><b>mssql_data_seek()</b> は、指定した結果 ID が指す MS SQL 結果に関する内部行ポインタを指定した行番号に移動します。 最初の行は行番号 0 となります。 この後、<code>mssql_fetch_row()</code> をコールした場合、 その行を返します。</p>
 * @param resource $result_identifier <p>処理対象となる結果リソース。</p>
 * @param int $row_number <p>新しい結果ポインタの行番号。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-data-seek.php
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_data_seek($result_identifier, int $row_number): bool {}

/**
 * MS SQL サーバーデータベースでストアドプロシージャを実行する
 * <p>MS SQL サーバーデータベースでストアドプロシージャを実行します。</p>
 * @param resource $stmt <p><code>mssql_init()</code> で取得したステートメントハンドル.</p>
 * @param bool $skip_results <p>結果をスキップするかどうか。</p>
 * @return mixed
 * @link http://php.net/manual/ja/function.mssql-execute.php
 * @see mssql_bind(), mssql_free_statement(), mssql_init()
 * @since PHP 4 >= 4.0.7, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_execute($stmt, bool $skip_results = FALSE) {}

/**
 * 連想配列・数値添字配列・あるいはその両方で結果の行を取得する
 * <p><b>mssql_fetch_array()</b> は、 <code>mssql_fetch_row()</code> の拡張版です。 この関数は、結果の配列に数値インデックスにデータを保持するのに加えて、 フィールド名をキーとしてデータを連想配列にも保存します。</p><p>機能がかなり増えているにもかかわらず、<b>mssql_fetch_array()</b> は <code>mssql_fetch_row()</code> よりもそれほど遅くはないということを強調しておきます。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @param int $result_type <p>取得する配列の形式。定数で、以下のいずれかの値となります。 <b><code>MSSQL_ASSOC</code></b>、 <b><code>MSSQL_NUM</code></b> あるいは <b><code>MSSQL_BOTH</code></b>。</p>
 * @return array <p>取得された行に対応する配列、行がもうない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-fetch-array.php
 * @see mssql_fetch_row()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_fetch_array($result, int $result_type = MSSQL_BOTH): array {}

/**
 * 結果の現在行を連想配列として返す
 * <p>取得した行に対応する連想配列を返し、内部データポインタをひとつ進めます。 <b>mssql_fetch_assoc()</b> は、 <code>mssql_fetch_array()</code> の二番目のオプションパラメータに <b><code>MSSQL_ASSOC</code></b> を指定してコールするのと同等です。</p>
 * @param resource $result_id <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @return array <p>取得した行に対応する連想配列を返します。もう行がない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-fetch-assoc.php
 * @since PHP 4 >= 4.2.0, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_fetch_assoc($result_id): array {}

/**
 * レコードの次のバッチを返す
 * <p>レコードの次のバッチを返します。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @return int <p>返されたバッチ内の行番号を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-fetch-batch.php
 * @since PHP 4 >= 4.0.4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_fetch_batch($result): int {}

/**
 * フィールド情報を取得する
 * <p><b>mssql_fetch_field()</b> は、あるクエリー結果のフィールドに関して情報を得るために使用します。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @param int $field_offset <p>フィールドオフセット。フィールドオフセットが指定されない場合、 <b>mssql_fetch_field()</b> によりまだ取得されていない次のフィールドが取得されます。 <code>field_offset</code> は 0 から始まります。</p>
 * @return object <p>フィールド情報を含むオブジェクトを返します。</p><p>オブジェクトのプロパティは次のようになります。</p><ul> <li>  name - カラム名。カラムが関数の結果である場合、このプロパティは computed#N に設定されます。ただし、#N はシリアル番号です。  </li> <li>  column_source - そのカラムが取得されたテーブル  </li> <li>  max_length - カラムの最大長  </li> <li>  numeric - そのカラムが数字である場合に 1  </li> <li>  type - カラムの型  </li> </ul>
 * @link http://php.net/manual/ja/function.mssql-fetch-field.php
 * @see mssql_field_seek()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_fetch_field($result, int $field_offset = -1): object {}

/**
 * オブジェクトとして行を取得する
 * <p><b>mssql_fetch_object()</b> は <code>mssql_fetch_array()</code> に似ていますが、配列の代わりに オブジェクトが返されるという違いがあります。 間接的にこのことは、データをフィールド名でのみアクセスすることが 可能であり、そのオフセットではアクセスできないことを意味します (番号はプロパティ名としては使用できません)。</p><p>速度面でこの関数は <code>mssql_fetch_array()</code> と同等であり、 <code>mssql_fetch_row()</code> とほとんど同じです (違いは僅かです)。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @return object <p>取得された行に対応するプロパティを有するオブジェクト、 またはもう行がない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-fetch-object.php
 * @see mssql_fetch_array(), mssql_fetch_row()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_fetch_object($result): object {}

/**
 * 配列として行を取得する
 * <p><b>mssql_fetch_row()</b> は指定した結果 ID に関連する結果から 1 行分のデータを取得します。行は配列として返されます。 配列オフセットに保存された各結果カラムは、オブセット 0 から始まります。</p><p><b>mssql_fetch_rows()</b> を続けてコールした場合、 結果セットの次の行が返され、行がもうない場合は <b><code>FALSE</code></b> が返されます。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @return array <p>取得された行に対応する配列、または行がもうない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-fetch-row.php
 * @see mssql_fetch_array(), mssql_fetch_object(), mssql_data_seek(), mssql_result()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_fetch_row($result): array {}

/**
 * フィールド長を得る
 * <p>結果 <code>result</code> のフィールド番号 <code>offset</code> のフィールド長を返します。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @param int $offset <p>フィールドオフセット。0 から始まります。 省略した場合は現在のフィールドを使用します。</p>
 * @return int <p>成功した場合は指定したフィールドの長さ、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-field-length.php
 * @see mssql_field_name(), mssql_field_type()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_field_length($result, int $offset = -1): int {}

/**
 * フィールド名を得る
 * <p><code>result</code> のフィールド番号 <code>offset</code> の名前を返します。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @param int $offset <p>フィールドオフセット。0 から始まります。省略した場合は現在のフィールドを使用します。</p>
 * @return string <p>成功した場合は指定したフィールドインデックスの名前、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-field-name.php
 * @see mssql_field_length(), mssql_field_type()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_field_name($result, int $offset = -1): string {}

/**
 * 指定したフィールドオフセットに移動する
 * <p>指定したフィールドオフセットを探します。この後、フィールドオフセット を指定せずに <code>mssql_fetch_field()</code> をコールした 場合、このフィールドが返されます。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @param int $field_offset <p>フィールドオフセット。0 から始まります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-field-seek.php
 * @see mssql_fetch_field()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_field_seek($result, int $field_offset): bool {}

/**
 * フィールド型を得る
 * <p><code>result</code> のフィールド番号 <code>offset</code> の型を返します。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @param int $offset <p>フィールドオフセット。0 から始まります。省略した場合は現在のフィールドを使用します。</p>
 * @return string <p>成功した場合は指定したフィールドインデックスの型、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-field-type.php
 * @see mssql_field_length(), mssql_field_name()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_field_type($result, int $offset = -1): string {}

/**
 * 結果保持用メモリを解放する
 * <p>スクリプト実行時のメモリ使用量が過大であると懸念される場合のみ <b>mssql_free_result()</b> はコールするべきです。 全ての結果保持用メモリはスクリプト実行終了時に自動的に解放されます。 引数に結果 ID を指定して <b>mssql_free_result()</b> を コールすることが可能です。 この場合、関連する結果保持用メモリが解放されます。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-free-result.php
 * @see mssql_free_statement()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_free_result($result): bool {}

/**
 * ステートメントのメモリを開放する
 * <p><b>mssql_free_statement()</b> をコールする必要があるのは、 スクリプトの実行中に大量のメモリを使用することが気になる場合のみです。 すべてのステートメントメモリはスクリプトが終了する際に自動的に開放 されます。ステートメント ID を引数に指定して <b>mssql_free_statement()</b> をコールすることで、 関連付けられたステートメントのメモリが開放されます。</p>
 * @param resource $stmt <p><code>mssql_init()</code> で取得したステートメントリソース。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-free-statement.php
 * @see mssql_bind(), mssql_execute(), mssql_init(), mssql_free_result()
 * @since PHP 4 >= 4.3.2, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_free_statement($stmt): bool {}

/**
 * サーバーの直近のメッセージを返す
 * <p>MS-SQL サーバーからの直近のメッセージを取得します。</p>
 * @return string <p>サーバーからの直近のエラーメッセージ、 あるいは MSSQL でエラーが発生していない場合は空の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-get-last-message.php
 * @see mssql_min_error_severity(), mssql_min_message_severity()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_get_last_message(): string {}

/**
 * 16 バイトバイナリ GUID を文字列に変換する
 * <p>16 バイトのバイナリ GUID を文字列に変換します。</p>
 * @param string $binary <p>16 バイトのバイナリ GUID。</p>
 * @param bool $short_format <p>短い形式を使うかどうか。</p>
 * @return string <p>成功したばあいに変換後の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-guid-string.php
 * @since PHP 4 >= 4.0.7, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_guid_string(string $binary, bool $short_format = FALSE): string {}

/**
 * ストアドプロシージャまたはリモートのストアドプロシージャを初期化する
 * <p>ストアドプロシージャまたはリモートのストアドプロシージャを初期化します。</p>
 * @param string $sp_name <p>ストアドプロシージャ名。たとえば <i>ownew.sp_name</i> や <i>otherdb.owner.sp_name</i> のようになります。</p>
 * @param resource $link_identifier <p><code>mssql_connect()</code> が返す MS SQL リンク ID。</p>
 * @return resource <p>"statement" リソースの ID を返します。これを使用して、 <code>mssql_bind()</code> や <code>mssql_execute()</code> をコールします。エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-init.php
 * @see mssql_bind(), mssql_execute(), mssql_free_statement()
 * @since PHP 4 >= 4.0.7, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_init(string $sp_name, $link_identifier = NULL) {}

/**
 * 最小のエラー深刻度を設定する
 * <p>最小のエラー深刻度を設定します。</p>
 * @param int $severity <p>新しいエラー深刻度。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.mssql-min-error-severity.php
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_min_error_severity(int $severity): void {}

/**
 * 最小のメッセージ深刻度を設定する
 * <p>最小のメッセージ深刻度を設定します。</p>
 * @param int $severity <p>新しいメッセージ深刻度。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.mssql-min-message-severity.php
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_min_message_severity(int $severity): void {}

/**
 * 次の結果に内部結果ポインタを移動する
 * <p>サーバーへ複数の SQL 命令を送信するか複数の結果を有するストアドプロシージャを 実行する場合、この関数はサーバーが複数の結果集合を返すようにします。 この関数は、サーバーから追加の結果が存在するかどうかを調べます。 追加の結果集合が存在する場合、既存の結果集合を解放し、新しい 結果集合から行を取得するための準備を行います。</p>
 * @param resource $result_id <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @return bool <p>追加の結果集合が取得可能な場合に <b><code>TRUE</code></b>、 その他の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-next-result.php
 * @since PHP 4 >= 4.0.5, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_next_result($result_id): bool {}

/**
 * 結果のフィールド数を得る
 * <p><b>mssql_num_fields()</b> は結果のフィールド数を返します。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @return int <p>フィールドの数を整数値で返します。</p>
 * @link http://php.net/manual/ja/function.mssql-num-fields.php
 * @see mssql_query(), mssql_fetch_field(), mssql_num_rows()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_num_fields($result): int {}

/**
 * 結果の行数を得る
 * <p><b>mssql_num_rows()</b> は結果の行数を返します。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @return int <p>行の数を整数値で返します。</p>
 * @link http://php.net/manual/ja/function.mssql-num-rows.php
 * @see mssql_query(), mssql_fetch_row()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_num_rows($result): int {}

/**
 * 持続的 MS SQL 接続をオープンする
 * <p><b>mssql_pconnect()</b> は <code>mssql_connect()</code> とほとんど同じく動作しますが、違う点が 2 つあります。</p><p>第 1 に、この関数は接続時に同じホスト、ユーザー名、パスワードで既に オープンされている(持続的)リンクを探そうとします。 もし見つかった場合、新規の接続をオープンせずにその ID を返します。</p><p>第 2 に、SQL サーバーはスクリプトの実行終了時に接続を閉じません。 代わりに、リンクは後に使用されるためにオープンされたままとします (<code>mssql_close()</code> は <b>mssql_pconnect()</b> により確立されたリンクを閉じません)。</p><p>この型のリンクはこのため '持続的である' と呼ばれます。</p>
 * @param string $servername <p>MS SQL サーバー。 <i>hostname:port</i> のようにポート番号を含めることもできます。</p>
 * @param string $username <p>ユーザー名。</p>
 * @param string $password <p>パスワード。</p>
 * @param bool $new_link <p>同じ引数で <b>mssql_pconnect()</b> が再度コールされた場合、 新規のリンクは作成されず、代わりに既にオープンされたリンク ID が返されます。 このパラメータは、この振る舞いを変更し、<b>mssql_pconnect()</b> が常に新しいリンクを返すようにします。同じパラメータで事前に <b>mssql_pconnect()</b> がコールされていたとしても、 新しいリンクを返します。</p>
 * @return resource <p>成功時に正の MS SQL 持続的リンク ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-pconnect.php
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_pconnect(string $servername = NULL, string $username = NULL, string $password = NULL, bool $new_link = FALSE) {}

/**
 * MS SQL クエリを送る
 * <p><b>mssql_query()</b> は指定したリンク ID が指すサーバー上の現在アクティブなデータベースにクエリを送信します。</p>
 * @param string $query <p>SQL クエリ。</p>
 * @param resource $link_identifier <p><code>mssql_connect()</code> あるいは <code>mssql_pconnect()</code> が返す MS SQL リンク ID。</p> <p>リンク ID が指定されない場合、最後にオープンされたリンクが 仮定されます。リンクがオープンされない場合、この関数は <code>mssql_connect()</code> がコールされた時と同様に リンクの確立を試み、これを使用します。</p>
 * @param int $batch_size <p>バッファにまとめるレコードの数。</p>
 * @return mixed <p>成功時に MS SQL 結果 ID、結果が返されなかった場合に <b><code>TRUE</code></b>、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-query.php
 * @see mssql_select_db(), mssql_connect()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_query(string $query, $link_identifier = NULL, int $batch_size = 0) {}

/**
 * 結果データを得る
 * <p><b>mssql_result()</b>は、MS SQL 結果行からセルの内容を返します。</p>
 * @param resource $result <p>処理対象となる結果リソース。これは <code>mssql_query()</code> のコールによって取得します。</p>
 * @param int $row <p>行番号。</p>
 * @param mixed $field <p>フィールドオフセット、フィールド名または テーブル名.フィールド名の形式で指定することができます。 カラム名がエイリアス定義されている場合 ('select foo as bar from...')、そのカラム名の代わりにエイリアスが使用されます。</p>  <p><b>注意</b>:</p> <p><code>field</code> 引数でオフセット番号を指定する方が、フィールド名または テーブル名.フィールド名で引数で指定するよりもかなり高速です。</p>
 * @return string <p>指定したセルの内容を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-result.php
 * @see mssql_fetch_row(), mssql_fetch_array(), mssql_fetch_assoc(), mssql_fetch_object()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_result($result, int $row, $field): string {}

/**
 * クエリによって変更されたレコード数を返す
 * <p>直近の書き込みクエリによって変更されたレコード数を返します。</p>
 * @param resource $link_identifier <p><code>mssql_connect()</code> あるいは <code>mssql_pconnect()</code> が返す MS SQL リンク ID。</p>
 * @return int <p>直近の書き込みクエリによって変更されたレコード数を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-rows-affected.php
 * @since PHP 4 >= 4.0.4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_rows_affected($link_identifier): int {}

/**
 * MS SQL データベースを選択する
 * <p><b>mssql_select_db()</b> は、指定したリンク ID が指すサーバーの 現在アクティブなデータベースを設定します。</p><p>以降の <code>mssql_query()</code> のコールは アクティブなデータベースに対して行われます。</p>
 * @param string $database_name <p>The database name.</p> <p>スペースやハイフン（"-"）、あるいはその他の例外文字を含むデータベース名を エスケープするには、下の例で示すようにデータベース名をブラケットで囲む 必要があります。この手法は、データベースの名前に予約語（たとえば <i>primary</i>）が含まれている場合にも同様に使用する必要があります。</p>
 * @param resource $link_identifier <p><code>mssql_connect()</code> あるいは <code>mssql_pconnect()</code> が返す MS SQL リンク ID。</p> <p>リンク ID が指定されない場合、最後にオープンされたリンクが仮定されます。 リンクがオープンされない場合、関数は <code>mssql_connect()</code> がコールされた場合と同様に リンクを確立し、これを使用しようとします。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mssql-select-db.php
 * @see mssql_connect(), mssql_pconnect(), mssql_query()
 * @since PHP 4, PHP 5, PECL odbtp >= 1.1.1
 */
function mssql_select_db(string $database_name, $link_identifier = NULL): bool {}

/**
 * 連想配列で返します。 <code>mssql_fetch_array()</code> の <i>result_type</i> パラメータで使用します。
 */
define('MSSQL_ASSOC', null);

/**
 * 数値キーとフィールド名キーの両方を含む配列で返します。 <code>mssql_fetch_array()</code> の <i>result_type</i> パラメータのデフォルト値です。
 */
define('MSSQL_BOTH', null);

/**
 * 数値キーの配列で返します。 <code>mssql_fetch_array()</code> の <i>result_type</i> パラメータで使用します。
 */
define('MSSQL_NUM', null);

/**
 * MSSQL の '<i>BIT</i>' 型を表します。 <code>mssql_bind()</code> の <i>type</i> パラメータで使用します。
 */
define('SQLBIT', null);

/**
 * MSSQL の '<i>CHAR</i>' 型を表します。 <code>mssql_bind()</code> の <i>type</i> パラメータで使用します。
 */
define('SQLCHAR', null);

/**
 * 4 バイトの float を表します。
 */
define('SQLFLT4', null);

/**
 * 8 バイトの float を表します。
 */
define('SQLFLT8', null);

/**
 * 1 バイト、-128 から 127 までの範囲を表します。
 */
define('SQLINT1', null);

/**
 * 2 バイト、-32768 から 32767 までの範囲を表します。
 */
define('SQLINT2', null);

/**
 * 4 バイト、-2147483648 から 2147483647 までの範囲を表します。
 */
define('SQLINT4', null);

/**
 * MSSQL の '<i>TEXT</i>' 型を表します。 <code>mssql_bind()</code> の <i>type</i> パラメータで使用します。
 */
define('SQLTEXT', null);

/**
 * MSSQL の '<i>VARCHAR</i>' 型を表します。 <code>mssql_bind()</code> の <i>type</i> パラメータで使用します。
 */
define('SQLVARCHAR', null);

