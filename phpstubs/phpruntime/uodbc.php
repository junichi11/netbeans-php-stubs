<?php



/**
 * 自動コミットの動作をオンまたはオフにする
 * <p>自動コミットの挙動を切り替えます。</p><p>デフォルトで接続の自動コミットはオンとなっています。自動コミットを 使用不可にするのは、トランザクションを開始することと等価です。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param bool $OnOff <p><code>OnOff</code> が <b><code>TRUE</code></b> の場合は自動コミットが可能であり、 <b><code>FALSE</code></b> の場合は自動コミットが使用不可となっています。</p>
 * @return mixed <p><code>OnOff</code> パラメータを指定しない場合、 この関数は、<code>connection_id</code> に関する 自動コミットの状態を返します。自動コミットがオンの場合に 非ゼロ、オフの場合にゼロ、エラーを生じた場合に <b><code>FALSE</code></b> を返します。</p><p><code>OnOff</code> が設定されている場合は、 この関数は成功時に <b><code>TRUE</code></b>、失敗したときに <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-autocommit.php
 * @see odbc_commit(), odbc_rollback()
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_autocommit($connection_id, bool $OnOff = FALSE) {}

/**
 * バイナリカラムデータを処理する
 * <p>バイナリカラムデータを処理できるようにします (関係するODBC SQL型: <i>BINARY</i>, <i>VARBINARY</i>, <i>LONGVARBINARY</i>)。</p><p>バイナリ SQL データが文字データに変換される時、ソースデータの 各バイト (8 ビット) は、2 つのアスキー文字で表現されます。 これらの文字は、16 進表現で数値をアスキー文字で表現したものです。 例えば、2 進数 <i>00000001</i> は <i>"01"</i> に変換され、 <i>11111111</i> は <i>"FF"</i> に変換されます。</p><p><code>odbc_fetch_into()</code> を使用した場合、 「通過」は空文字列が対応するカラムに返されることを意味します。</p>
 * @param resource $result_id <p>結果 ID。</p> <p><code>result_id</code> に <i>0</i> を指定した場合、 ここで設定した値は、新規の結果に関するデフォルト値として用いられます。</p><p><b>注意</b>:  <i>longreadlen</i> のデフォルト値は <i>4096</i> で、<code>mode</code> のデフォルト値は <i>ODBC_BINMODE_RETURN</i> です。 バイナリロングカラムの処理は、<code>odbc_longreadlen()</code> の影響も受けます。 </p>
 * @param int $mode <p><code>mode</code> には、以下の値が指定できます。</p><ul> <li>  <b><code>ODBC_BINMODE_PASSTHRU</code></b>: BINARY データとして通過  </li> <li>  <b><code>ODBC_BINMODE_RETURN</code></b>: そのまま返す  </li> <li>  <b><code>ODBC_BINMODE_CONVERT</code></b>: char に変換し返す  </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-binmode.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_binmode($result_id, int $mode): bool {}

/**
 * ODBC 接続を閉じる
 * <p>指定された接続 ID が指すデータベースサーバーへの接続を閉じます。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.odbc-close.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_close($connection_id): void {}

/**
 * 全ての ODBC 接続を閉じる
 * <p><b>odbc_close_all()</b>は、 データベースサーバーへの全ての接続を閉じます。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.odbc-close-all.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_close_all(): void {}

/**
 * 指定したテーブルに関するカラムおよび付随する権限のリストを取得する
 * <p>指定したテーブルに関するカラムおよび付随する権限のリストを取得します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param string $qualifier <p>修飾子。</p>
 * @param string $owner <p>所有者。</p>
 * @param string $table_name <p>テーブル名。</p>
 * @param string $column_name <p>引数 <code>column_name</code> には検索パターン (ゼロ以上の文字にマッチする '%' や単一の文字にマッチする '_') を使用可能です。</p>
 * @return resource <p>ODBC 結果 ID を返します。失敗した場合に <b><code>FALSE</code></b> を返します。 この結果 ID を使用して、カラムや関連する権限の一覧を取得します。</p><p>結果は以下のカラムを有します。</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_OWNER</li> <li>TABLE_NAME</li> <li>GRANTOR</li> <li>GRANTEE</li> <li>PRIVILEGE</li> <li>IS_GRANTABLE</li> </ul><p>結果セットは TABLE_QUALIFIER、TABLE_OWNER、TABLE_NAME でソートされます。</p>
 * @link http://php.net/manual/ja/function.odbc-columnprivileges.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_columnprivileges($connection_id, string $qualifier, string $owner, string $table_name, string $column_name) {}

/**
 * 指定したテーブルにあるカラム名のリストを取得する
 * <p>指定したテーブルにあるカラム名のリストを取得します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param string $qualifier <p>修飾子。</p>
 * @param string $schema <p>所有者。</p>
 * @param string $table_name <p>テーブル名。</p>
 * @param string $column_name <p>カラム名。</p>
 * @return resource <p>ODBC 結果 ID を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果セットは以下のカラムを有しています。</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_SCHEM</li> <li>TABLE_NAME</li> <li>COLUMN_NAME</li> <li>DATA_TYPE</li> <li>TYPE_NAME</li> <li>PRECISION</li> <li>LENGTH</li> <li>SCALE</li> <li>RADIX</li> <li>NULLABLE</li> <li>REMARKS</li> </ul><p>結果セットは TABLE_QUALIFIER、TABLE_SCHEM、TABLE_NAME でソートされます。</p>
 * @link http://php.net/manual/ja/function.odbc-columns.php
 * @see odbc_columnprivileges()
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_columns($connection_id, string $qualifier = NULL, string $schema = NULL, string $table_name = NULL, string $column_name = NULL) {}

/**
 * ODBC トランザクションをコミットする
 * <p>その接続におけるすべての実行中のトランザクションをコミットします。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-commit.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_commit($connection_id): bool {}

/**
 * データソースに接続する
 * <p>他の ODBC 関数を使用するには、 この関数が返す接続 ID が必要となります。 異なる db や異なる権限を使用する限り、 複数の接続を同時にオープンすることができます。</p><p>いくつかの ODBC ドライバでは、 複雑なストアド・プロシージャの実行時に次のようなエラーにより失敗する可能性があります。 "Cannot open a cursor on a stored procedure that has anything other than a single select statement in it" SQL_CUR_USE_ODBC を使用することにより、 このようなエラーを回避できる可能性があります。 また、いくつかのドライバは <code>odbc_fetch_row()</code> においてオプションの row_number パラメータをサポートしません。 この場合でも、SQL_CUR_USE_ODBC により解決できる可能性があります。</p>
 * @param string $dsn <p>接続に使用するデータベースソース名。 あるいは、DSNではない接続文字列を使用することもできます。</p>
 * @param string $user <p>ユーザー名。</p>
 * @param string $password <p>パスワード。</p>
 * @param int $cursor_type <p>この接続で使用するカーソルの型。 通常はこのパラメータは必要ありませんが、いくつかの ODBC ドライバの問題に対処する際には有用です。</p>  次のような定数がカーソル型として定義されています。  <p></p><ul> <li>  SQL_CUR_USE_IF_NEEDED  </li> <li>  SQL_CUR_USE_ODBC  </li> <li>  SQL_CUR_USE_DRIVER  </li> </ul>
 * @return resource <p>ODBC 接続、またはエラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-connect.php
 * @see odbc_pconnect()
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_connect(string $dsn, string $user, string $password, int $cursor_type = NULL) {}

/**
 * カーソル名を得る
 * <p>指定された接続 ID に関するカーソル名を返します。 Gets the cursorname for the given result_id.</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @return string <p>カーソル名を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.odbc-cursor.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_cursor($result_id): string {}

/**
 * 現在の接続についての情報を返す
 * <p>この関数は、有効な DSN（複数回のコールの後）のリストを返します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param int $fetch_type <p><code>fetch_type</code> は次のふたつの定数 <b><code>SQL_FETCH_FIRST</code></b>, <b><code>SQL_FETCH_NEXT</code></b> のうちのどちらかです。 この関数を最初にコールする際には <b><code>SQL_FETCH_FIRST</code></b> を、それ以降は <b><code>SQL_FETCH_NEXT</code></b> を使用します。</p>
 * @return array <p>エラー時には <b><code>FALSE</code></b>、成功時には配列を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-data-source.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function odbc_data_source($connection_id, int $fetch_type): array {}

/**
 * odbc_exec() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>odbc_exec()</code>.</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param string $query_string <p>SQL 文。</p>
 * @param int $flags <p>このパラメータは現在使用していません。</p>
 * @return resource
 * @link http://php.net/manual/ja/function.odbc-do.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_do($connection_id, string $query_string, int $flags = NULL) {}

/**
 * 直近のエラーコードを得る
 * <p>6 桁の ODBC ステートを返します。エラーがない場合には、空の文字列を返します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @return string <p><code>connection_id</code> が指定された場合、 その接続の直近の状態が返されます。そうでない場合、 他の接続の直近の状態が返されます。</p><p>この関数の返り値が意味を持つのは、直近の odbc クエリが失敗した場合 (すなわち <code>odbc_exec()</code> が <b><code>FALSE</code></b> を返した場合) のみです。</p>
 * @link http://php.net/manual/ja/function.odbc-error.php
 * @see odbc_errormsg(), odbc_exec()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function odbc_error($connection_id = NULL): string {}

/**
 * 直近のエラーメッセージを得る
 * <p>直近の ODBC エラーメッセージを含む文字列を返します。 エラーが発生していない場合は、空の文字列を返します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @return string <p><code>connection_id</code> が指定された場合、 その接続の直近の状態が返されます。さもなくば、他の接続の直近の状態が返されます。</p><p>この関数の返り値が意味を持つのは、直近の odbc クエリが失敗した場合 (すなわち <code>odbc_exec()</code> が <b><code>FALSE</code></b> を返した場合) のみです。</p>
 * @link http://php.net/manual/ja/function.odbc-errormsg.php
 * @see odbc_error(), odbc_exec()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function odbc_errormsg($connection_id = NULL): string {}

/**
 * SQL文を準備し、実行する
 * <p>SQL 命令を データベースサーバーに送ります。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param string $query_string <p>SQL 文。</p>
 * @param int $flags <p>このパラメータは現在使用していません。</p>
 * @return resource <p>SQL コマンドの実行に成功した場合には、 ODBC 結果 ID を返します。エラー時には、<b><code>FALSE</code></b>を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-exec.php
 * @see odbc_prepare(), odbc_execute()
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_exec($connection_id, string $query_string, int $flags = NULL) {}

/**
 * プリペアドステートメントを実行する
 * <p><code>odbc_prepare()</code> で準備された命令を実行します。</p>
 * @param resource $result_id <p><code>odbc_prepare()</code> で取得した結果 ID リソース。</p>
 * @param array $parameters_array <p>プリペアドステートメントの中のプレースホルダが、 <code>parameter_array</code> 内のパラメータで順に置き換えられます。 この関数をコールした際に、配列の要素は文字列に変換されます。</p> <p><code>parameter_array</code> の中でシングルクォートで括られたデータがある場合、 それはファイル名と解釈されます。そのファイルの内容が、 該当するプレースホルダのデータとしてデータベースサーバーに送信されます。</p>  シングルクォートで括られたデータを純粋に文字列として使用したい場合は、 空白などの別の文字を前後に付加する必要があります。 それにより、パラメータがファイル名とみなされることがなくなります (もしこのオプションが不要なら、別の仕組み、たとえば <code>odbc_exec()</code> で直接クエリを実行するなどを使用する必要があります)。
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-execute.php
 * @see odbc_prepare()
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_execute($result_id, array $parameters_array = NULL): bool {}

/**
 * 連想配列として結果の行を取得する
 * <p>ODBC クエリから、連想配列を取得します。</p>
 * @param resource $result <p><code>odbc_exec()</code> の結果リソース。</p>
 * @param int $rownumber <p>どの行番号を取得するのかを任意で指定する。</p>
 * @return array <p>取得した行に対応する配列を返します。もう行がない場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-fetch-array.php
 * @see odbc_fetch_row(), odbc_fetch_object(), odbc_num_rows()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function odbc_fetch_array($result, int $rownumber = NULL): array {}

/**
 * 一行ぶんの結果を配列に取り込む
 * <p>結果の行を <code>array</code> に取得します。</p>
 * @param resource $result_id <p>結果リソース。</p>
 * @param array $result_array <p>結果の配列。型変換によってい配列型となるので、どんな型であっても構いません。 この配列には、添字 0 から始まるカラム番号が代入されます。</p>
 * @param int $rownumber <p>行番号。</p>
 * @return int <p>結果におけるカラム番号を返します。また、エラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-fetch-into.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_fetch_into($result_id, array &$result_array, int $rownumber = NULL): int {}

/**
 * オブジェクトとして結果の行を取得する
 * <p>ODBC クエリから、オブジェクトを取得します。</p>
 * @param resource $result <p><code>odbc_exec()</code> の結果リソース。</p>
 * @param int $rownumber <p>どの行番号を取得するのかを任意で指定する。</p>
 * @return object <p>取得した行に対応するオブジェクトを返します。もう行がない場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-fetch-object.php
 * @see odbc_fetch_row(), odbc_fetch_array(), odbc_num_rows()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function odbc_fetch_object($result, int $rownumber = NULL): object {}

/**
 * 行を取り込む
 * <p><code>odbc_do()</code> や <code>odbc_exec()</code> から返された行データを取得します。 <b>odbc_fetch_row()</b> がコールされた後、この行のフィールドは、 <code>odbc_result()</code> でアクセス可能となります。</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @param int $row_number <p><code>row_number</code> が指定されない場合、 <b>odbc_fetch_row()</b> は、 結果セットにおける次の行を取り込もうと試みます。 <code>row_number</code> を指定した <b>odbc_fetch_row()</b> のコールと指定しないコールを混用することができます。</p> <p>結果を複数回走査したい場合、<b>odbc_fetch_row()</b> を <code>row_number</code> に 1 を指定してコールし、 続いて結果を再度見るために <code>row_number</code> を指定せずに <b>odbc_fetch_row()</b> を実行しつづけます。 行を番号で取り込むことをドライバがサポートしていない場合、 <code>row_number</code> パラメータは無視されます。</p>
 * @return bool <p>行があった場合には <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-fetch-row.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_fetch_row($result_id, int $row_number = 1): bool {}

/**
 * フィールドの長さ (精度) を得る
 * <p>指定した ODBC 結果 ID の番号で参照されるフィールドの長さを取得します。</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @param int $field_number <p>フィールド番号。フィールド番号は 1 から始まります。</p>
 * @return int <p>フィールドの長さ、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-field-len.php
 * @see odbc_field_scale()
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_field_len($result_id, int $field_number): int {}

/**
 * カラム名を得る
 * <p>指定された ODBC 結果 ID において指定されたカラム番号にあるフィールドの名前を取得します。</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @param int $field_number <p>フィールド番号。フィールド番号は、1 から始まります。</p>
 * @return string <p>フィールド名を表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-field-name.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_field_name($result_id, int $field_number): string {}

/**
 * カラム番号を返す
 * <p>指定したODBC 結果 ID におけるフィールド名に対応するカラムスロットの数を取得します。</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @param string $field_name <p>フィールド名。</p>
 * @return int <p>フィールド番号、あるいはエラー時に <b><code>FALSE</code></b> を返します。 フィールド番号は、1 から始まります。</p>
 * @link http://php.net/manual/ja/function.odbc-field-num.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_field_num($result_id, string $field_name): int {}

/**
 * odbc_field_len() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>odbc_field_len()</code>.</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @param int $field_number <p>フィールド番号。フィールド番号は 1 から始まります。</p>
 * @return int
 * @link http://php.net/manual/ja/function.odbc-field-precision.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_field_precision($result_id, int $field_number): int {}

/**
 * フィールドの精度を得る
 * <p>指定した ODBC 結果 ID の番号で指定したフィールドの精度を取得します。</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @param int $field_number <p>フィールド番号。 フィールド番号は、1 から始まります。</p>
 * @return int <p>フィールド番号、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-field-scale.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_field_scale($result_id, int $field_number): int {}

/**
 * フィールドのデータ型を返す
 * <p>指定された ODBC 結果 ID において指定番号で参照されるフィールドの SQL 型を取得します。</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @param int $field_number <p>フィールド番号。フィールド番号は 1 から始まります。</p>
 * @return string <p>フィールドの型を表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-field-type.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_field_type($result_id, int $field_number): string {}

/**
 * 外部キーのリストを取得する
 * <p>指定したテーブルの外部キーのリスト、 または指定したテーブルの主キーを参照する他のテーブルの外部キーのリストを取得します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param string $pk_qualifier <p>主キーの修飾子。</p>
 * @param string $pk_owner <p>主キーの所有者。</p>
 * @param string $pk_table <p>主キーのテーブル。</p>
 * @param string $fk_qualifier <p>外部キーの修飾子。</p>
 * @param string $fk_owner <p>外部キーの所有者。</p>
 * @param string $fk_table <p>外部キーのテーブル。</p>
 * @return resource <p>ODBC 結果 ID を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果は、以下のようなカラムを持つものとなります。</p><ul> <li>PKTABLE_QUALIFIER</li> <li>PKTABLE_OWNER</li> <li>PKTABLE_NAME</li> <li>PKCOLUMN_NAME</li> <li>FKTABLE_QUALIFIER</li> <li>FKTABLE_OWNER</li> <li>FKTABLE_NAME</li> <li>FKCOLUMN_NAME</li> <li>KEY_SEQ</li> <li>UPDATE_RULE</li> <li>DELETE_RULE</li> <li>FK_NAME</li> <li>PK_NAME</li> </ul><p><code>pk_table</code> がテーブル名を有している場合、 <b>odbc_foreignkeys()</b> は指定したテーブルの主キー およびそのキーを参照する全ての外部キーのリストを結果として返します。</p><p><code>fk_table</code> がテーブル名を有している場合、 <b>odbc_foreignkeys()</b> は指定したテーブルにある全ての 外部キーおよびそのキーが参照する(他のテーブルの)主キーのリストを 結果として返します。</p><p><code>pk_table</code> および <code>fk_table</code> が共にテーブル名を有している場合、 <b>odbc_foreignkeys()</b> は <code>pk_table</code> で指定されたテーブルの主キーを参照する <code>fk_table</code> で指定されたテーブルの外部キーを返します。 返されるキーは最大でも一つだけです。</p>
 * @link http://php.net/manual/ja/function.odbc-foreignkeys.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_foreignkeys($connection_id, string $pk_qualifier, string $pk_owner, string $pk_table, string $fk_qualifier, string $fk_owner, string $fk_table) {}

/**
 * 結果を保持するリソースを開放する
 * <p>結果を保持するリソースを開放します。</p><p><b>odbc_free_result()</b>は、スクリプトのメモリ消費量が 多すぎることが懸念される場合にのみコールする必要があります。 全ての結果保持用メモリは、スクリプト実行が終了した際に自動的に開放されます。</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @return bool <p>常に <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-free-result.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_free_result($result_id): bool {}

/**
 * データソースがサポートするデータ型についての情報を取得する
 * <p>データソースがサポートするデータ型についての情報を取得します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param int $data_type <p>データ型。単一のデータ型に情報を制限するために使用します。</p>
 * @return resource <p>ODBC 結果 ID または失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果は、以下のようなカラムを持つものとなります。</p><ul> <li>TYPE_NAME</li> <li>DATA_TYPE</li> <li>PRECISION</li> <li>LITERAL_PREFIX</li> <li>LITERAL_SUFFIX</li> <li>CREATE_PARAMS</li> <li>NULLABLE</li> <li>CASE_SENSITIVE</li> <li>SEARCHABLE</li> <li>UNSIGNED_ATTRIBUTE</li> <li>MONEY</li> <li>AUTO_INCREMENT</li> <li>LOCAL_TYPE_NAME</li> <li>MINIMUM_SCALE</li> <li>MAXIMUM_SCALE</li> </ul><p>結果セットは、DATA_TYPE および TYPE_NAME でソートされます。</p>
 * @link http://php.net/manual/ja/function.odbc-gettypeinfo.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_gettypeinfo($connection_id, int $data_type = NULL) {}

/**
 * LONG カラムを処理する
 * <p>LONG および LONGVARBINARY のカラムを処理できるようにします。</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @param int $length <p>PHP に返されるバイト数は、パラメータ length により制御されます。 これを 0 をセットした場合、ロングカラムデータは、 クライアントにそのまま渡されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-longreadlen.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_longreadlen($result_id, int $length): bool {}

/**
 * 複数の結果が利用可能などうか確認する
 * <p>まだ結果セットが存在して <code>odbc_fetch_array()</code>、<code>odbc_fetch_row()</code>、 <code>odbc_result()</code> などで次の結果セットにアクセスできるかどうかを調べます。</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @return bool <p>結果セットがまだある場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-next-result.php
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function odbc_next_result($result_id): bool {}

/**
 * 結果のカラム数を返す
 * <p>ODBC 結果におけるフィールド (カラム) の数を取得します。</p>
 * @param resource $result_id <p><code>odbc_exec()</code> が返す結果 ID。</p>
 * @return int <p>フィールド数、あるいはエラー時に -1 を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-num-fields.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_num_fields($result_id): int {}

/**
 * 結果における行数を返す
 * <p>ODBC 結果における行の数を取得します。 INSERT、UPDATE および DELETE 命令に関しては、 <b>odbc_num_rows()</b> は、変更された行の数を返します。 SELECT 文の場合、この関数は利用可能な行の数を返します。</p>
 * @param resource $result_id <p><code>odbc_exec()</code> が返す結果 ID。</p>
 * @return int <p>ODBC 結果における行の数を返します。 この関数は、エラー時に-1を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-num-rows.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_num_rows($result_id): int {}

/**
 * 持続的なデータベース接続を開く
 * <p>持続的なデータベース接続を開きます。</p><p>この関数は <code>odbc_connect()</code> に非常に似ていますが、 スクリプトが終了した時に接続が閉じられないという点が異なります。 同じ <code>dsn</code>、<code>user</code>、 <code>password</code> の組み合わせ （<code>odbc_connect()</code> および <b>odbc_pconnect()</b> による）接続の場合は、 持続的な接続を再利用することが可能です。</p>
 * @param string $dsn
 * @param string $user
 * @param string $password
 * @param int $cursor_type
 * @return resource <p>ODBC 接続 ID またはエラー時に 0 (<b><code>FALSE</code></b>) を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-pconnect.php
 * @see odbc_connect()
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_pconnect(string $dsn, string $user, string $password, int $cursor_type = NULL) {}

/**
 * 実行用に文を準備する
 * <p>実行用に文を準備します。 結果 ID は、この後 <code>odbc_execute()</code> で命令を実行する際に使用することができます。</p><p>(IBM DB2、MS SQL Server および Oracle のように) ストアドプロシージャが利用可能で、ODBC 仕様で定義されている IN、INOUT および OUT が利用できるものもあります。 しかし、Unified ODBC ドライバでは現在 IN 型のパラメータしかサポートしていません。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param string $query_string <p>準備するクエリ文字列。</p>
 * @return resource <p>SQL コマンドの準備に成功した場合は、ODBC 結果 ID を返します。 エラー時には、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-prepare.php
 * @see odbc_execute()
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_prepare($connection_id, string $query_string) {}

/**
 * テーブルの主キーを取得する
 * <p>テーブルの主キーを有するカラムの名前を取得する際に使用可能な結果 ID を返します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param string $qualifier
 * @param string $owner
 * @param string $table
 * @return resource <p>ODBC 結果 ID を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果は以下のカラムを有します。</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_OWNER</li> <li>TABLE_NAME</li> <li>COLUMN_NAME</li> <li>KEY_SEQ</li> <li>PK_NAME</li> </ul>
 * @link http://php.net/manual/ja/function.odbc-primarykeys.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_primarykeys($connection_id, string $qualifier, string $owner, string $table) {}

/**
 * プロシージャへのパラメータに関する情報を取得する
 * <p>プロシージャへのパラメータに関する情報を取得します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @return resource <p>指定したプロシージャに関して入出力パラメータのリストとその結果を構成するカラムを返します。 ODBC 結果 ID を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果セットのカラムは次のようになります。</p><ul> <li>PROCEDURE_QUALIFIER</li> <li>PROCEDURE_OWNER</li> <li>PROCEDURE_NAME</li> <li>COLUMN_NAME</li> <li>COLUMN_TYPE</li> <li>DATA_TYPE</li> <li>TYPE_NAME</li> <li>PRECISION</li> <li>LENGTH</li> <li>SCALE</li> <li>RADIX</li> <li>NULLABLE</li> <li>REMARKS</li> </ul><p>結果セットは、PROCEDURE_QUALIFIER、PROCEDURE_OWNER、 PROCEDURE_NAME、COLUMN_TYPE でソートされます。</p>
 * @link http://php.net/manual/ja/function.odbc-procedurecolumns.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_procedurecolumns($connection_id) {}

/**
 * 指定したデータソースに保存されているプロシージャのリストを取得する
 * <p>指定した範囲の全てのプロシージャのリストを取得します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @return resource <p>情報を含む ODBC 結果 ID を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果セットのカラムは次のようになります。</p><ul> <li>PROCEDURE_QUALIFIER</li> <li>PROCEDURE_OWNER</li> <li>PROCEDURE_NAME</li> <li>NUM_INPUT_PARAMS</li> <li>NUM_OUTPUT_PARAMS</li> <li>NUM_RESULT_SETS</li> <li>REMARKS</li> <li>PROCEDURE_TYPE</li> </ul>
 * @link http://php.net/manual/ja/function.odbc-procedures.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_procedures($connection_id) {}

/**
 * 結果データを得る
 * <p>結果データを取得します。</p>
 * @param resource $result_id <p>ODBC リソース。</p>
 * @param mixed $field <p>取得するフィールド。 カラム番号を表す整数またはフィールド名を表す文字列のどちらを指定できます。</p>
 * @return mixed <p>フィールドの内容を表す文字列を返します。エラー時には <b><code>FALSE</code></b>、NULL データの場合は <b><code>NULL</code></b>、そしてバイナリデータの場合は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-result.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_result($result_id, $field) {}

/**
 * HTML テーブルとして結果を出力する
 * <p><code>odbc_exec()</code> により作成された結果 ID から全ての行を出力します。結果は、HTML テーブル形式で出力されます。</p>
 * @param resource $result_id <p>結果 ID。</p>
 * @param string $format <p>テーブルのフォーマット指定。</p>
 * @return int <p>成功の場合に結果の行数、エラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-result-all.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_result_all($result_id, string $format = NULL): int {}

/**
 * トランザクションをロールバックする
 * <p>この接続における全ての未解決の命令をロールバックします。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-rollback.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_rollback($connection_id): bool {}

/**
 * ODBC の設定を変更する
 * <p>この関数により特定の接続またはクエリー結果に関する ODBC オプションを変更することが可能となります。この関数は、気まぐれな ODBC ドライバの問題に対処する際の道具として作成されたものです。自分が ODBC プログラマであり、様々なオプションが有する効果を理解している場合にのみこの関数を使用するべきでしょう。 使用可能な全てのオプションおよび値を理解するためには、良い ODBC リファレンスが必要です。ドライバーのバージョンが違うと、 サポートされるオプションも異なります。</p><p>この関数の効果は ODBC ドライバに依存する可能性があるので、 一般に公開するスクリプトでは、この関数の使用は避けましょう。 また、いくつかの ODBC オプションはこの関数では利用できません。 それは、これらを接続の確立またはクエリの準備の前に設定する必要があるからです。 しかし、特定の業務において自分の上司が商用製品の使用を指示しなかったために PHP を使用する場合、このことは実際的な問題となります。</p>
 * @param resource $id <p>設定を変更する接続 ID または 結果 ID。SQLSetConnectOption() の場合、これは接続 ID です。 SQLSetStmtOption() の場合、これは結果 ID です。</p>
 * @param int $function <p>使用する ODBC 関数。 値は SQLSetConnectOption() の場合 1、 SQLSetStmtOption() の場合 2 である必要があります。</p>
 * @param int $option <p>設定するオプション。</p>
 * @param int $param <p>指定した <code>option</code> の値。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.odbc-setoption.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_setoption($id, int $function, int $option, int $param): bool {}

/**
 * 特殊カラムを取得する
 * <p>テーブルのレコードを特定する最適なカラムの組合せ、 またはレコードの値がトランザクションにより更新される際に自動的に更新されるカラムを取得します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param int $type 引数 type が <b><code>SQL_BEST_ROWID</code></b> の場合、 <b>odbc_specialcolumns()</b> はテーブルの各レコードを特定するカラムを返します。   引数 type が <b><code>SQL_ROWVER</code></b> の場合、 <b>odbc_specialcolumns()</b> はカラムから値を取得する ことにより指定したテーブルでレコードを特定できる最適なカラムまたはカラムの組を返します。
 * @param string $qualifier <p>修飾子。</p>
 * @param string $table <p>テーブル。</p>
 * @param int $scope <p>スコープ。これは結果セットの並べかえる際に使用します。</p>
 * @param int $nullable <p>nullable オプション。</p>
 * @return resource <p>ODBC 結果 ID または失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果セットのカラムは次のようになります。</p><ul> <li>SCOPE</li> <li>COLUMN_NAME</li> <li>DATA_TYPE</li> <li>TYPE_NAME</li> <li>PRECISION</li> <li>LENGTH</li> <li>SCALE</li> <li>PSEUDO_COLUMN</li> </ul>
 * @link http://php.net/manual/ja/function.odbc-specialcolumns.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_specialcolumns($connection_id, int $type, string $qualifier, string $table, int $scope, int $nullable) {}

/**
 * テーブルに関する統計情報を取得する
 * <p>テーブルおよびインデックスに関する統計情報を取得します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param string $qualifier <p>修飾子。</p>
 * @param string $owner <p>所有者。</p>
 * @param string $table_name <p>テーブル名。</p>
 * @param int $unique <p>unique 属性。</p>
 * @param int $accuracy <p>正確さ。</p>
 * @return resource <p>ODBC 結果 ID を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果セットのカラムは次のようになります。</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_OWNER</li> <li>TABLE_NAME</li> <li>NON_UNIQUE</li> <li>INDEX_QUALIFIER</li> <li>INDEX_NAME</li> <li>TYPE</li> <li>SEQ_IN_INDEX</li> <li>COLUMN_NAME</li> <li>COLLATION</li> <li>CARDINALITY</li> <li>PAGES</li> <li>FILTER_CONDITION</li> </ul><p>結果セットは、NON_UNIQUE、TYPE、INDEX_QUALIFIER、 INDEX_NAME、SEQ_IN_INDEX でソートされます。</p>
 * @link http://php.net/manual/ja/function.odbc-statistics.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_statistics($connection_id, string $qualifier, string $owner, string $table_name, int $unique, int $accuracy) {}

/**
 * 各テーブルのリストおよび関連する権限のリストを取得する
 * <p>指定した範囲にあるテーブルおよび各テーブルに関連する権限のリストを取得します。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param string $qualifier <p>修飾子。</p>
 * @param string $owner <p>所有者。 ゼロ以上の文字にマッチする '%' や単一の文字にマッチする '_' を使用可能です。</p>
 * @param string $name <p>名前。 ゼロ以上の文字にマッチする '%' や単一の文字にマッチする '_' を使用可能です。</p>
 * @return resource <p>ODBC 結果 ID を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果セットのカラムは次のようになります。</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_OWNER</li> <li>TABLE_NAME</li> <li>GRANTOR</li> <li>GRANTEE</li> <li>PRIVILEGE</li> <li>IS_GRANTABLE</li> </ul><p>結果セットは TABLE_QUALIFIER、TABLE_OWNER、TABLE_NAME の順番になります。</p>
 * @link http://php.net/manual/ja/function.odbc-tableprivileges.php
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_tableprivileges($connection_id, string $qualifier, string $owner, string $name) {}

/**
 * 指定したデータソースに保存されたテーブルの名前のリストを取得する
 * <p>指定した範囲の全てのテーブルリストを得ます。</p><p>限定子、所有者、テーブル名を数えるために、 <code>qualifier</code>、<code>owner</code>、 <code>name</code>、<code>table_type</code> について以下のような特別な記号が使用可能です。</p>
 * @param resource $connection_id <p>ODBC 接続 ID。詳細は <code>odbc_connect()</code> を参照ください。</p>
 * @param string $qualifier <p>修飾子。</p>
 * @param string $owner <p>所有者。 検索パターン (ゼロ以上の文字にマッチする '%' や単一の文字にマッチする '_') を指定可能です。</p>
 * @param string $name <p>名前。 検索パターン (ゼロ以上の文字にマッチする '%' や単一の文字にマッチする '_') を指定可能です。</p>
 * @param string $types <p><code>table_type</code> が空の文字列ではない場合、検索する型に ついてカンマで区切った値のリストを指定する必要があります。 各値は、シングルクオート(')で括るかまたは括らない形で指定可能です。 例えば、"'TABLE','VIEW'" または "TABLE, VIEW" となります。データソースが が指定したテーブル型をサポートしていない場合、 <b>odbc_tables()</b> はその型についていかなる結果も 返しません。</p>
 * @return resource <p>情報を含んでいる ODBC 結果 ID を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果セットのカラムは次のようになります。</p><ul> <li>TABLE_QUALIFIER</li> <li>TABLE_OWNER</li> <li>TABLE_NAME</li> <li>TABLE_TYPE</li> <li>REMARKS</li> </ul><p>結果セットは TABLE_TYPE、TABLE_QUALIFIER、TABLE_OWNER、TABLE_NAME の順番になります。</p>
 * @link http://php.net/manual/ja/function.odbc-tables.php
 * @see odbc_tableprivileges()
 * @since PHP 4, PHP 5, PHP 7
 */
function odbc_tables($connection_id, string $qualifier = NULL, string $owner = NULL, string $name = NULL, string $types = NULL) {}

define('ODBC_BINMODE_CONVERT', null);

define('ODBC_BINMODE_PASSTHRU', null);

define('ODBC_BINMODE_RETURN', null);

define('ODBC_TYPE', null);

define('SQL_BEST_ROWID', null);

define('SQL_BIGINT', null);

define('SQL_BINARY', null);

define('SQL_BIT', null);

define('SQL_CHAR', null);

define('SQL_CONCUR_LOCK', null);

define('SQL_CONCUR_READ_ONLY', null);

define('SQL_CONCUR_ROWVER', null);

define('SQL_CONCUR_VALUES', null);

define('SQL_CONCURRENCY', null);

define('SQL_CUR_USE_DRIVER', null);

define('SQL_CUR_USE_IF_NEEDED', null);

define('SQL_CUR_USE_ODBC', null);

define('SQL_CURSOR_DYNAMIC', null);

define('SQL_CURSOR_FORWARD_ONLY', null);

define('SQL_CURSOR_KEYSET_DRIVEN', null);

define('SQL_CURSOR_STATIC', null);

define('SQL_CURSOR_TYPE', null);

define('SQL_DATE', null);

define('SQL_DECIMAL', null);

define('SQL_DOUBLE', null);

define('SQL_ENSURE', null);

define('SQL_FLOAT', null);

define('SQL_INDEX_ALL', null);

define('SQL_INDEX_UNIQUE', null);

define('SQL_INTEGER', null);

define('SQL_KEYSET_SIZE', null);

define('SQL_LONGVARBINARY', null);

define('SQL_LONGVARCHAR', null);

define('SQL_NO_NULLS', null);

define('SQL_NULLABLE', null);

define('SQL_NUMERIC', null);

define('SQL_ODBC_CURSORS', null);

define('SQL_QUICK', null);

define('SQL_REAL', null);

define('SQL_ROWVER', null);

define('SQL_SCOPE_CURROW', null);

define('SQL_SCOPE_SESSION', null);

define('SQL_SCOPE_TRANSACTION', null);

define('SQL_SMALLINT', null);

define('SQL_TIME', null);

define('SQL_TIMESTAMP', null);

define('SQL_TINYINT', null);

define('SQL_TYPE_DATE', null);

define('SQL_TYPE_TIME', null);

define('SQL_TYPE_TIMESTAMP', null);

define('SQL_VARBINARY', null);

define('SQL_VARCHAR', null);

