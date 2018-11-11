<?php



/**
 * 一番最近の操作で変更された行の数を得る
 * <p><code>link_identifier</code> と関連付けられた直近の INSERT、UPDATE、REPLACE、DELETE クエリによって変更された行の数を取得します。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return int <p>成功した場合に変更された行の数を、直近のクエリが失敗した場合に -1 を返します。</p><p>直近のクエリが WHERE 句を含まない DELETE だった場合、テーブルから すべてのレコードが削除されますが、MySQL 4.1.2 以前のバージョンでは この関数はゼロを返します。</p><p>UPDATE を使用する場合、MySQL では新旧の値が同じときには更新処理を行いません。 このことから、必ずしも <b>mysql_affected_rows()</b> の返す値が マッチする行の数と一致するとは限りません。返す値は実際に更新処理が行われた 行の数です。</p><p>REPLACE ステートメントは、まず最初に同じ主キーのレコードを削除した後に 新しいレコードを挿入します。この関数は、削除された行の数と 挿入された行の数を足したものを返します。</p><p>"INSERT ... ON DUPLICATE KEY UPDATE" クエリの場合の返り値は、 新しい行を追加した場合が <i>1</i> で既存の行を更新した場合が <i>2</i> となります。</p>
 * @link http://php.net/manual/ja/function.mysql-affected-rows.php
 * @see mysql_num_rows(), mysql_info()
 * @since PHP 4, PHP 5
 */
function mysql_affected_rows($link_identifier = NULL): int {}

/**
 * 文字セット名を返す
 * <p>MySQL の <i>character_set</i> 変数の値を取得します。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return string <p>カレントの接続から、デフォルトの文字セット名を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-client-encoding.php
 * @see mysql_set_charset(), mysql_real_escape_string()
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mysql_client_encoding($link_identifier = NULL): string {}

/**
 * MySQL 接続を閉じる
 * <p><b>mysql_close()</b> は、指定した link_identifier が指す MySQL データベースへの非持続的リンクを閉じます。 <code>link_identifier</code> が指定されない場合、最後に オープンされたリンクが使用されます。</p><p>持続的でない MySQL 接続や結果セットは、PHP スクリプトの実行が終了する時点で自動的に破棄されます。 そのため、オープンした接続をクローズしたり結果セットを開放したりすることは必須ではありませんが、 そうしておくことを推奨します。 その時点ですぐに PHP や MySQL にリソースを返せ、パフォーマンスの向上につながるからです。 関連する除法は リソースの開放を参照ください。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。接続が見つからない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-close.php
 * @see mysql_connect(), mysql_free_result()
 * @since PHP 4, PHP 5
 */
function mysql_close($link_identifier = NULL): bool {}

/**
 * MySQL サーバーへの接続をオープンする
 * <p>MySQL サーバーへの接続をオープンあるいは再利用します。</p>
 * @param string $server <p>MySQL サーバー。"hostname:port" のようにポート番号を 指定することが可能で、localhost では ":/path/to/socket" のようにソケットへのパスを指定することも可能です。</p> <p>PHP ディレクティブ  mysql.default_host が指定されない場合（デフォルト）、 'localhost:3306' が使用されます。 SQL セーフモード の場合はこのパラメータは無視され、常に 'localhost:3306' が用いられます。</p>
 * @param string $username <p>ユーザー名。デフォルト値は mysql.default_user で定義されている値です。SQL セーフモード の場合はこのパラメータは無視され、 サーバープロセスの所有ユーザー名が用いられます。</p>
 * @param string $password <p>パスワード。デフォルト値は mysql.default_password で定義されている値です。SQL セーフモード の場合はこのパラメータは無視され、 空のパスワードが用いられます。</p>
 * @param bool $new_link <p>同じ引数で 2 回 <b>mysql_connect()</b> をコールした場合、 2 回目は新規のリンクが確立されるのではなく、代わりにすでにオープンされた リンクのリンク ID が返されます。 パラメータ <code>new_link</code> はこの動作を変更し、既に <b>mysql_connect()</b> が同じパラメータでコールされて いる場合でも常に新規のリンクがオープンされるようにします。 SQL セーフモード の場合はこのパラメータは無視されます。</p>
 * @param int $client_flags <p>パラメータ <code>client_flags</code> は、 以下の定数の組み合わせです： 128 (<i>LOAD DATA LOCAL</i> の処理を有効にする)、 <b><code>MYSQL_CLIENT_SSL</code></b>、 <b><code>MYSQL_CLIENT_COMPRESS</code></b>、 <b><code>MYSQL_CLIENT_IGNORE_SPACE</code></b> または <b><code>MYSQL_CLIENT_INTERACTIVE</code></b>。 詳細な情報については MySQL クライアント定数 を参照ください。 SQL セーフモード の場合はこのパラメータは無視されます。</p>
 * @return resource <p>成功した場合に MySQL リンク ID を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-connect.php
 * @see mysql_pconnect(), mysql_close()
 * @since PHP 4, PHP 5
 */
function mysql_connect(string $server = 'ini_get("mysql.default_host")', string $username = 'ini_get("mysql.default_user")', string $password = 'ini_get("mysql.default_password")', bool $new_link = FALSE, int $client_flags = 0) {}

/**
 * MySQL データベースを作成する
 * <p><b>mysql_create_db()</b> は、指定したリンク ID が指す サーバー上に新規のデータベースを作成します。</p>
 * @param string $database_name <p>作成されるデータベースの名前です。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-create-db.php
 * @see mysql_query(), mysql_select_db()
 * @since PHP 4, PHP 5
 */
function mysql_create_db(string $database_name, $link_identifier = NULL): bool {}

/**
 * 内部的な結果ポインタを移動する
 * <p><b>mysql_data_seek()</b> は、指定した結果 ID （result_identifier）が指す MySQL 結果の内部ポインタが指定した行番号 （row_number）を指すように移動します。 この後、たとえば <code>mysql_fetch_assoc()</code> のような MySQL のフェッチ関数をコールした場合には、 ここで指定した行の内容が返されます。</p><p><code>row_number</code> は 0 から始まります。 <code>row_number</code> は 0 から <code>mysql_num_rows()</code> - 1 までの範囲にあるべきです。 しかし、もし結果セットが空（<code>mysql_num_rows()</code> == 0） の場合、0 へのシークは E_WARNING を発生して失敗し、<b>mysql_data_seek()</b> は <b><code>FALSE</code></b> を返します。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @param int $row_number <p>新しく結果ポインタを設定したい行番号です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-data-seek.php
 * @see mysql_query(), mysql_num_rows(), mysql_fetch_row(), mysql_fetch_assoc(), mysql_fetch_array(), mysql_fetch_object()
 * @since PHP 4, PHP 5
 */
function mysql_data_seek($result, int $row_number): bool {}

/**
 * mysql_list_dbs() のコール結果からデータベース名を取得する
 * <p><code>mysql_list_dbs()</code> をコールした結果からデータベース名を取得します。</p>
 * @param resource $result <p><code>mysql_list_dbs()</code> をコールして 得られた結果ポインタ。</p>
 * @param int $row <p>結果セット内のインデックス。</p>
 * @param mixed $field <p>フィールド名。</p>
 * @return string <p>成功した場合にデータベース名を、失敗した場合に <b><code>FALSE</code></b> を返します。 <b><code>FALSE</code></b> が返された場合、エラーの発生源を特定するには <code>mysql_error()</code> を使用してください。</p>
 * @link http://php.net/manual/ja/function.mysql-db-name.php
 * @see mysql_list_dbs(), mysql_tablename()
 * @since PHP 4, PHP 5
 */
function mysql_db_name($result, int $row, $field = NULL): string {}

/**
 * データベースを選択し、そこでクエリーを実行する
 * <p><b>mysql_db_query()</b> はデータベースを選択し、 そこでクエリーを実行します。</p>
 * @param string $database <p>選択するデータベース名。</p>
 * @param string $query <p>MySQL クエリー。</p> <p>クエリ内のデータは 適切にエスケープ する必要があります。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return resource <p>クエリーの結果を指す MySQL 結果リソースを正の値で返します。 エラー時には <b><code>FALSE</code></b> を返します。また、 <i>INSERT</i>/<i>UPDATE</i>/<i>DELETE</i> クエリーの場合には <b><code>TRUE</code></b> または <b><code>FALSE</code></b> を返し、これらはそれぞれ クエリーが 成功した / 失敗した ことを示します。</p>
 * @link http://php.net/manual/ja/function.mysql-db-query.php
 * @see mysql_query(), mysql_select_db()
 * @since PHP 4, PHP 5
 */
function mysql_db_query(string $database, string $query, $link_identifier = NULL) {}

/**
 * MySQLデータベースを破棄(削除)する
 * <p><b>mysql_drop_db()</b> は、指定した link_identifier が指す データベース全体をサーバーから破棄(削除)しようとします。 この関数は非推奨です。かわりに、 <code>mysql_query()</code> を用いて <i>DROP DATABASE</i> 文を発行する方法が推奨されます。</p>
 * @param string $database_name <p>削除するデータベースの名前。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-drop-db.php
 * @see mysql_query()
 * @since PHP 4, PHP 5
 */
function mysql_drop_db(string $database_name, $link_identifier = NULL): bool {}

/**
 * 直近の MySQL 処理からエラーメッセージのエラー番号を返す
 * <p>直近の MySQL 関数で発生したエラーの番号を返します。</p><p>MySQL データベースバックエンドから返ってくるエラーは、 警告を発生しません。代わりに <b>mysql_errno()</b> を用いて エラー番号を取得してください。この関数が返すのは、直近に実行された MySQL 関数（<code>mysql_error()</code> と <b>mysql_errno()</b> は除く）のエラーコードだけであることに 注意しましょう。この関数を利用するなら、別の MySQL 関数をコールする前に 値を調べることを忘れないようにしましょう。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return int <p>直近の MySQL 関数からのエラー番号を返します。エラーが発生していない 場合は、<i>0</i> (ゼロ)を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-errno.php
 * @see mysql_error()
 * @since PHP 4, PHP 5
 */
function mysql_errno($link_identifier = NULL): int {}

/**
 * 直近に実行された MySQL 操作のエラーメッセージを返す
 * <p>直近の MySQL 関数からのエラー文字列を返します。 MySQL データベースバックエンドから返ってくるエラーは、 警告を発生しません。代わりに <b>mysql_error()</b> を用いて エラー文字列を取得してください。この関数が返すのは、直近に実行された MySQL 関数（<b>mysql_error()</b> と <code>mysql_errno()</code> は除く）のエラー文字列だけであることに 注意しましょう。この関数を利用するなら、別の MySQL 関数をコールする前に 値を調べることを忘れないようにしましょう。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return string <p>直近の MySQL 関数からのエラー文字列を返します。エラーが発生していない 場合には、<i>''</i> (空文字列) を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-error.php
 * @see mysql_errno()
 * @since PHP 4, PHP 5
 */
function mysql_error($link_identifier = NULL): string {}

/**
 * mysql_query で使用するために文字列をエスケープする
 * <p>この関数は、<code>mysql_query()</code> で指定可能なように <code>unescaped_string</code> をエスケープします。 この関数は非推奨です。</p><p>この関数は <code>mysql_real_escape_string()</code> とほぼ同じです。ただ <code>mysql_real_escape_string()</code> はコネクションハンドラを用い、 カレントの文字セットを考慮したエスケープを行うという点が違います。 <b>mysql_escape_string()</b> はコネクションに関する引数を 持たず、カレントの文字セット設定を考慮しません。</p>
 * @param string $unescaped_string <p>エスケープされる文字列。</p>
 * @return string <p>エスケープされた文字列を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-escape-string.php
 * @see mysql_real_escape_string(), addslashes()
 * @since PHP 4 >= 4.0.3, PHP 5
 */
function mysql_escape_string(string $unescaped_string): string {}

/**
 * 連想配列、添字配列、またはその両方として結果の行を取得する
 * <p>取得した行に対応する配列を返し、内部のデータポインタを前に進めます。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @param int $result_type <p>取得する配列の形式です。以下の定数値をとります。: <b><code>MYSQL_ASSOC</code></b>, <b><code>MYSQL_NUM</code></b>, そして <b><code>MYSQL_BOTH</code></b></p>
 * @return array <p>取得した行をあらわす文字列の配列を返します。もし行が存在しない場合は <b><code>FALSE</code></b> を返します。返される配列の形式は、<code>result_type</code> がどのように指定されているかによります。<b><code>MYSQL_BOTH</code></b>（デフォルト） を利用すると、連想添字と数値添字を共に持つ配列を取得します。 <b><code>MYSQL_ASSOC</code></b> を利用すると（<b> mysql_fetch_assoc()</b> の動作と同様に）連想添字のみが取得され、 <b><code>MYSQL_NUM</code></b> を利用すると （<code>mysql_fetch_row()</code> の動作と同様に）数値添字のみが 取得されます。</p><p>結果の中で同じフィールド名のカラムが 2 つ以上ある場合、 最後のカラムが優先されます。 同名の他のカラムにアクセスするには、そのカラムの数値インデックスを 使うかまたはカラムの別名を定義する必要があります。 カラムの別名を定義した場合は、本来の列名でそのカラムにアクセスすることは できません。</p>
 * @link http://php.net/manual/ja/function.mysql-fetch-array.php
 * @see mysql_fetch_row(), mysql_fetch_assoc(), mysql_data_seek(), mysql_query()
 * @since PHP 4, PHP 5
 */
function mysql_fetch_array($result, int $result_type = MYSQL_BOTH): array {}

/**
 * 連想配列として結果の行を取得する
 * <p>取得した行に対応する連想配列を返し、内部のデータポインタを前に進めます。 <b>mysql_fetch_assoc()</b> は、 <code>mysql_fetch_array()</code> の 2 番目のパラメータを MYSQL_ASSOC に指定してコールするのと同じ働きをします。つまり、 連想配列のみを返します。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @return array <p>取得した行に対応する文字列の連想配列を返します。行がもうない場合には <b><code>FALSE</code></b> を返します。</p><p>結果の複数のカラムが同じフィールド名を有している場合、最後のカラ ムが優先されます。同じ名前を有する他のカラムにアクセスするには、 <code>mysql_fetch_row()</code>を使用して数値添字を返すか、 エイリアス名を追加する必要があります。エイリアスの説明については、 <code>mysql_fetch_array()</code>の例を参照ください。</p>
 * @link http://php.net/manual/ja/function.mysql-fetch-assoc.php
 * @see mysql_fetch_row(), mysql_fetch_array(), mysql_data_seek(), mysql_query(), mysql_error()
 * @since PHP 4 >= 4.0.3, PHP 5
 */
function mysql_fetch_assoc($result): array {}

/**
 * 結果からカラム情報を取得し、オブジェクトとして返す
 * <p>フィールド情報を含むオブジェクトを返します。特定のクエリー結果の中の フィールドに関する情報を得るために使用可能です。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @param int $field_offset <p>数字で表したフィールドの位置です。もし指定されなければ、 まだこの関数で情報を取得していないフィールドのうち最初のものが 選択されます。<code>field_offset</code> は、 <i>0</i> からはじまります。</p>
 * @return object <p>フィールド情報を含む<code>object</code>を返します。オブジェクトの プロパティは次のとおりです。</p><ul> <li>  name - カラム名  </li> <li>  table - カラムが属しているテーブルの名前。エイリアスを定義している場合はエイリアスの名前  </li> <li>  max_length - カラムの最大長  </li> <li>  not_null - カラムが <b><code>NULL</code></b> 値をとることができない場合 1  </li> <li>  primary_key - カラムが主キーであれば 1  </li> <li>  unique_key - カラムがユニークキーであれば 1  </li> <li>  multiple_key - カラムが非ユニークキーであれば 1  </li> <li>  numeric - カラムが数値(numeric)であれば 1  </li> <li>  blob - カラムがBLOBであれば 1  </li> <li>  type - カラムの型  </li> <li>  unsigned - カラムが符号無し(unsigned)であれば 1  </li> <li>  zerofill - カラムがゼロで埋められている(zero-filled)場合に 1  </li> </ul>
 * @link http://php.net/manual/ja/function.mysql-fetch-field.php
 * @see mysql_field_seek()
 * @since PHP 4, PHP 5
 */
function mysql_fetch_field($result, int $field_offset = 0): object {}

/**
 * 結果における各出力の長さを得る
 * <p>MySQL により一番最近に取得された行における各フィールドの長さを 格納した配列を返します。</p><p><b>mysql_fetch_lengths()</b>は、 <code>mysql_fetch_row()</code>, <code>mysql_fetch_assoc()</code>, <code>mysql_fetch_array()</code>, そして <code>mysql_fetch_object()</code> により一番最近に返された 各結果カラムの長さを格納した配列を返します。この配列のオフセットは 0 から始まります。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @return array <p>成功した場合に長さの配列（<code>array</code>）を、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-fetch-lengths.php
 * @see mysql_field_len(), mysql_fetch_row(), strlen()
 * @since PHP 4, PHP 5
 */
function mysql_fetch_lengths($result): array {}

/**
 * 結果の行をオブジェクトとして取得する
 * <p>取得された行を表すプロパティを有するオブジェクトを返し、 内部のデータポインタを前に進めます。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @param string $class_name <p>インスタンス化し、プロパティを設定して返すクラスの名前。 指定しなかった場合は <b>stdClass</b> オブジェクトが返されます。</p>
 * @param array $params <p><code>class_name</code> オブジェクトのコンストラクタに渡す オプションのパラメータの配列。</p>
 * @return object <p>取得された行を表す文字列プロパティを有するオブジェクト(<code>object</code>)を返します。 もう行が残っていない場合は、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-fetch-object.php
 * @see mysql_fetch_array(), mysql_fetch_assoc(), mysql_fetch_row(), mysql_data_seek(), mysql_query()
 * @since PHP 4, PHP 5
 */
function mysql_fetch_object($result, string $class_name = NULL, array $params = NULL): object {}

/**
 * 結果を添字配列として取得する
 * <p>取得された行に対応する配列を返し、内部のデータポインタを前に進めます。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @return array <p>取得された行に対応する文字列の配列を返します。もう行がない場合は、 <b><code>FALSE</code></b> を返します。</p><p><b>mysql_fetch_row()</b>は、指定した結果 ID が指す結果から 1 行分のデータを取得します。 各結果カラムは、オフセット 0 から始まる配列に格納されます。</p>
 * @link http://php.net/manual/ja/function.mysql-fetch-row.php
 * @see mysql_fetch_array(), mysql_fetch_assoc(), mysql_fetch_object(), mysql_data_seek(), mysql_fetch_lengths(), mysql_result()
 * @since PHP 4, PHP 5
 */
function mysql_fetch_row($result): array {}

/**
 * 結果において指定したフィールドのフラグを取得する
 * <p><b>mysql_field_flags()</b>は、指定したフィールドの フィールドフラグを返します。個々のフラグは、空白一つで区切られた 形式で返されます。このため、返された値を <code>explode()</code> で分割することができます。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は <i>0</i> から始まります。 <code>field_offset</code> が存在しない場合、 <b><code>E_WARNING</code></b> レベルのエラーが発行されます。</p>
 * @return string <p>結果についてのフラグを文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>運用システム上のMySQLがサポートしている場合、次のフラグがレポート されます。 <i>"not_null"</i>, <i>"primary_key"</i>, <i>"unique_key"</i>, <i>"multiple_key"</i>, <i>"blob"</i>, <i>"unsigned"</i>, <i>"zerofill"</i>, <i>"binary"</i>, <i>"enum"</i>, <i>"auto_increment"</i> そして <i>"timestamp"</i></p>
 * @link http://php.net/manual/ja/function.mysql-field-flags.php
 * @see mysql_field_type(), mysql_field_len()
 * @since PHP 4, PHP 5
 */
function mysql_field_flags($result, int $field_offset): string {}

/**
 * 指定したフィールドの長さを返す
 * <p><b>mysql_field_len()</b>は指定したフィールドの長さを 返します。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は <i>0</i> から始まります。 <code>field_offset</code> が存在しない場合、 <b><code>E_WARNING</code></b> レベルのエラーが発行されます。</p>
 * @return int <p>成功した場合には指定したフィールドの長さ、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-field-len.php
 * @see mysql_fetch_lengths(), strlen()
 * @since PHP 4, PHP 5
 */
function mysql_field_len($result, int $field_offset): int {}

/**
 * 結果において指定したフィールド名を取得する
 * <p><b>mysql_field_name()</b>は、指定したフィールドの 名前を返します。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は <i>0</i> から始まります。 <code>field_offset</code> が存在しない場合、 <b><code>E_WARNING</code></b> レベルのエラーが発行されます。</p>
 * @return string <p>成功した場合に指定したフィールドの名前を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-field-name.php
 * @see mysql_field_type(), mysql_field_len()
 * @since PHP 4, PHP 5
 */
function mysql_field_name($result, int $field_offset): string {}

/**
 * 結果ポインタを指定したフィールドオフセットにセットする
 * <p>指定したフィールドオフセットに移動します。 <b>mysql_field_seek()</b> をコールした後、 <code>mysql_fetch_field()</code> をフィールドオフセットを付けずに コールした場合、このフィールドが返されます。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は <i>0</i> から始まります。 <code>field_offset</code> が存在しない場合、 <b><code>E_WARNING</code></b> レベルのエラーが発行されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-field-seek.php
 * @see mysql_fetch_field()
 * @since PHP 4, PHP 5
 */
function mysql_field_seek($result, int $field_offset): bool {}

/**
 * 指定したフィールドが含まれるテーブルの名前を取得する
 * <p>指定したフィールドが含まれるテーブルの名前を返します。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は <i>0</i> から始まります。 <code>field_offset</code> が存在しない場合、 <b><code>E_WARNING</code></b> レベルのエラーが発行されます。</p>
 * @return string <p>成功した場合にテーブルの名前を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-field-table.php
 * @see mysql_list_tables()
 * @since PHP 4, PHP 5
 */
function mysql_field_table($result, int $field_offset): string {}

/**
 * 結果において指定したフィールドの型を取得する
 * <p><b>mysql_field_type()</b> は、 <code>mysql_field_name()</code> 関数に似ています。 引数は同じですが、この関数ではフィールドの型が返されます。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @param int $field_offset <p>数値フィールドオフセット。 <code>field_offset</code> は <i>0</i> から始まります。 <code>field_offset</code> が存在しない場合、 <b><code>E_WARNING</code></b> レベルのエラーが発行されます。</p>
 * @return string <p>返されるフィールド型は <i>"int"</i>, <i>"real"</i>, <i>"string"</i>, <i>"blob"</i>, そして その他 » MySQL ドキュメント で詳細が規定されている型のうちのひとつになります。</p>
 * @link http://php.net/manual/ja/function.mysql-field-type.php
 * @see mysql_field_name(), mysql_field_len()
 * @since PHP 4, PHP 5
 */
function mysql_field_type($result, int $field_offset): string {}

/**
 * 結果保持用メモリを開放する
 * <p><b>mysql_free_result()</b> は、結果 ID <code>result</code> に関するすべてのメモリを開放します。</p><p><b>mysql_free_result()</b> は、 スクリプト実行のメモリの使用量が多すぎると懸念される場合にのみ 必要になります。指定した結果 ID に関する全ての結果保持用メモリは、 スクリプトの実行後に自動的に開放されます。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><code>result</code> がリソースではなかった場合、 E_WARNING レベルのエラーが発生します。 <code>mysql_query()</code> が <code>resource</code> を返すのは SELECT, SHOW, EXPLAIN, そして DESCRIBE の場合だけであることに注意しましょう。</p>
 * @link http://php.net/manual/ja/function.mysql-free-result.php
 * @see mysql_query(), is_resource()
 * @since PHP 4, PHP 5
 */
function mysql_free_result($result): bool {}

/**
 * MySQL クライアント情報を取得する
 * <p><b>mysql_get_client_info()</b> は、 クライアントライブラリのバージョンを表す文字列を返します。</p>
 * @return string <p>MySQL クライアントのバージョンを返します。</p>
 * @link http://php.net/manual/ja/function.mysql-get-client-info.php
 * @see mysql_get_host_info(), mysql_get_proto_info(), mysql_get_server_info()
 * @since PHP 4 >= 4.0.5, PHP 5
 */
function mysql_get_client_info(): string {}

/**
 * MySQL ホスト情報を取得する
 * <p>使用されている接続の型を返します。その中にはサーバーのホスト名も含まれます。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return string <p>使用されている MySQL 接続の型を表す文字列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-get-host-info.php
 * @see mysql_get_client_info(), mysql_get_proto_info(), mysql_get_server_info()
 * @since PHP 4 >= 4.0.5, PHP 5
 */
function mysql_get_host_info($link_identifier = NULL): string {}

/**
 * MySQL プロトコル情報を取得する
 * <p>MySQL プロトコルを取得します。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return int <p>成功した場合に MySQL プロトコル、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-get-proto-info.php
 * @see mysql_get_client_info(), mysql_get_host_info(), mysql_get_server_info()
 * @since PHP 4 >= 4.0.5, PHP 5
 */
function mysql_get_proto_info($link_identifier = NULL): int {}

/**
 * MySQL サーバー情報を取得する
 * <p>MySQL サーバーのバージョンを取得します。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return string <p>成功した場合に MySQL サーバーのバージョン、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-get-server-info.php
 * @see mysql_get_client_info(), mysql_get_host_info(), mysql_get_proto_info(), phpversion()
 * @since PHP 4 >= 4.0.5, PHP 5
 */
function mysql_get_server_info($link_identifier = NULL): string {}

/**
 * 直近のクエリについての情報を得る
 * <p>直近のクエリについての詳細な情報を返します。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return string <p>成功した場合に文についての情報、失敗した場合に <b><code>FALSE</code></b> を返します。 どんな文が情報を返し、またそれがどのように見えるのかについては、以下の 例を参照ください。ここに挙げられていない文では <b><code>FALSE</code></b> が返されます。</p>
 * @link http://php.net/manual/ja/function.mysql-info.php
 * @see mysql_affected_rows(), mysql_insert_id(), mysql_stat()
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mysql_info($link_identifier = NULL): string {}

/**
 * 直近のクエリで生成された ID を得る
 * <p>直近のクエリ (通常は INSERT) により AUTO_INCREMENT カラム用に生成された ID を取得します。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return int <p>直近のクエリにより AUTO_INCREMENT カラム用に生成された ID を返します。直近のクエリが AUTO_INCREMENT な値を生成しなかった 場合に <i>0</i>、MySQL 接続が確立されていなかった 場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-insert-id.php
 * @see mysql_query(), mysql_info()
 * @since PHP 4, PHP 5
 */
function mysql_insert_id($link_identifier = NULL): int {}

/**
 * MySQL サーバー上で利用可能なデータベースのリストを得る
 * <p>現在の mysql デーモンで利用可能なデータベースの結果ポインタを返します。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return resource <p>成功した場合に結果ポインタ <code>resource</code> を、失敗した場合に <b><code>FALSE</code></b> を返します。結果ポインタの中身を調べるために <code>mysql_tablename()</code> 関数を利用し、取得したテーブルを 利用するには <code>mysql_fetch_array()</code> などの関数を 利用してください。</p>
 * @link http://php.net/manual/ja/function.mysql-list-dbs.php
 * @see mysql_db_name(), mysql_select_db()
 * @since PHP 4, PHP 5
 */
function mysql_list_dbs($link_identifier = NULL) {}

/**
 * MySQL テーブルのフィールドのリストを得る
 * <p>指定された名前のテーブルについての情報を取得します。</p><p>この関数は非推奨です。かわりに <code>mysql_query()</code> を利用して <i>SHOW COLUMNS FROM table [LIKE 'name']</i> 文を発行することを推奨します。</p>
 * @param string $database_name <p>クエリの対象となるデータベース名。</p>
 * @param string $table_name <p>クエリの対象となるテーブル名。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return resource <p>成功した場合に結果ポインタ <code>resource</code> 、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>返された結果は <code>mysql_field_flags()</code>, <code>mysql_field_len()</code>, <code>mysql_field_name()</code> そして <code>mysql_field_type()</code> で利用可能です。</p>
 * @link http://php.net/manual/ja/function.mysql-list-fields.php
 * @see mysql_field_flags(), mysql_info()
 * @since PHP 4, PHP 5
 */
function mysql_list_fields(string $database_name, string $table_name, $link_identifier = NULL) {}

/**
 * MySQL プロセスのリストを得る
 * <p>現在の MySQL サーバーのスレッドを取得します。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return resource <p>成功した場合に結果ポインタ <code>resource</code> 、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-list-processes.php
 * @see mysql_thread_id(), mysql_stat()
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mysql_list_processes($link_identifier = NULL) {}

/**
 * MySQL データベース上のテーブルのリストを得る
 * <p>MySQL データベースから、テーブル名のリストを取得します。</p><p>この関数は非推奨となりました。かわりに <code>mysql_query()</code> を利用して <i>SHOW TABLES [FROM db_name] [LIKE 'pattern']</i> 文を発行することを推奨します。</p>
 * @param string $database <p>データベース名。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return resource <p>成功した場合に結果ポインタ <code>resource</code> 、 失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果ポインタの中身を調べるためには <code>mysql_tablename()</code> 関数を利用し、 取得したテーブルを利用するには <code>mysql_fetch_array()</code> などの関数を利用してください。</p>
 * @link http://php.net/manual/ja/function.mysql-list-tables.php
 * @see mysql_list_dbs(), mysql_tablename()
 * @since PHP 4, PHP 5
 */
function mysql_list_tables(string $database, $link_identifier = NULL) {}

/**
 * 結果におけるフィールドの数を得る
 * <p>クエリから、フィールドの数を取得します。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @return int <p>成功した場合に結果セット <code>resource</code> のフィールド数、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-num-fields.php
 * @see mysql_select_db(), mysql_query(), mysql_fetch_field(), mysql_num_rows()
 * @since PHP 4, PHP 5
 */
function mysql_num_fields($result): int {}

/**
 * 結果における行の数を得る
 * <p>結果セットから行の数を取得します。このコマンドは、 SELECT や SHOW のような、実際に結果セットを返す文に対してのみ有効です。 INSERT、UPDATE、REPLACE、DELETE クエリで変更された行の数を得るには、 <code>mysql_affected_rows()</code> を使用してください。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @return int <p>成功した場合に結果セットの行の数、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-num-rows.php
 * @see mysql_affected_rows(), mysql_connect(), mysql_data_seek(), mysql_select_db(), mysql_query()
 * @since PHP 4, PHP 5
 */
function mysql_num_rows($result): int {}

/**
 * MySQL サーバーへの持続的な接続をオープンする
 * <p>MySQL サーバーとの持続的な接続を確立します。</p><p><b>mysql_pconnect()</b>は、 <code>mysql_connect()</code>とよく似た動作をしますが、 2 つの大きな違いがあります。</p><p>1 番目の違いとして、この関数は接続時にまず 同じホスト、ユーザー名、パスワードを有する(持続的)リンクが すでにオープンされていないかどうかを調べます。 それがみつかった場合、新規の接続をオープンする代わりに そのリンクの ID が返されます。</p><p>2 番目の違いは、スクリプトの実行が終了しても SQL サーバーとの接続が 閉じられないということです。そのかわりに、将来再利用されるために リンクがオープンされたままとなります（<code>mysql_close()</code> は、<b>mysql_pconnect()</b> によって確立されたリンクを 閉じません）。</p><p>このため、この型のリンクは、'持続的(persistent)'であると言われます。</p>
 * @param string $server <p>MySQL サーバー。"hostname:port" のようにポート番号を 指定することが可能で、localhost では ":/path/to/socket" のようにソケットへのパスを指定することも可能です。</p> <p>PHP ディレクティブ  mysql.default_host が指定されない場合（デフォルト）、 'localhost:3306' が使用されます。</p>
 * @param string $username <p>ユーザー名。デフォルト値はサーバープロセスの所有ユーザー名です。</p>
 * @param string $password <p>パスワード。デフォルト値は空のパスワードです。</p>
 * @param int $client_flags <p>パラメータ <code>client_flags</code> は、 以下の定数の組み合わせです： 128 (<i>LOAD DATA LOCAL</i> の処理を有効にする)、 <b><code>MYSQL_CLIENT_SSL</code></b>、 <b><code>MYSQL_CLIENT_COMPRESS</code></b>、 <b><code>MYSQL_CLIENT_IGNORE_SPACE</code></b> または <b><code>MYSQL_CLIENT_INTERACTIVE</code></b></p>
 * @return resource <p>成功した場合に MySQL 持続的リンク ID を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-pconnect.php
 * @see mysql_connect()
 * @since PHP 4, PHP 5
 */
function mysql_pconnect(string $server = 'ini_get("mysql.default_host")', string $username = 'ini_get("mysql.default_user")', string $password = 'ini_get("mysql.default_password")', int $client_flags = 0) {}

/**
 * サーバーとの接続状況を調べ、接続されていない場合は再接続する
 * <p>サーバーとの接続が有効かどうかを調べます。 もし接続が切れていた場合、自動的に再接続が試みられます。 この関数は、アイドル期間が長いスクリプトで利用し、 サーバーが接続を切断したかどうかを確認するために用いられます。</p><p><b>注意</b>:</p><p>MySQL 5.0.3 以降、自動再接続機能は使えなくなりました。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return bool <p>MySQL サーバーとの接続が有効な場合に <b><code>TRUE</code></b> そうでない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-ping.php
 * @see mysql_thread_id(), mysql_list_processes()
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mysql_ping($link_identifier = NULL): bool {}

/**
 * MySQL クエリを送信する
 * <p><b>mysql_query()</b> は、 ひとつのクエリを送信します (複数クエリの送信はサポートしません)。 送信先は、<code>link_identifier</code> で指定したサーバー上にある、現在アクティブなデータベースです。</p>
 * @param string $query <p>SQL クエリ。</p> <p>クエリ文字列は、セミコロンで終えてはいけません。 クエリ内のデータは 適切にエスケープ する必要があります。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return mixed <p>SELECT, SHOW, DESCRIBE や EXPLAIN 文、その他結果セットを返す文では、 <b>mysql_query()</b> は成功した場合に <code>resource</code> を返します。エラー時には <b><code>FALSE</code></b> を返します。</p><p>それ以外の SQL 文 INSERT, UPDATE, DELETE, DROP などでは、 <b>mysql_query()</b> は成功した場合に <b><code>TRUE</code></b> 、エラー時に <b><code>FALSE</code></b> を返します。</p><p>返された結果にアクセスするためには、結果リソースを <code>mysql_fetch_array()</code> やその他の関数に渡します。</p><p>SELECT 文によって返された行の数を知るには <code>mysql_num_rows()</code> を用います。また DELETE, INSERT, REPLACE, または UPDATE 文で変更された行の数を 知るには <code>mysql_affected_rows()</code> を用います。</p><p>クエリが参照するテーブルにアクセスする権限がない場合も <b>mysql_query()</b>は失敗し、<b><code>FALSE</code></b> が返されます。</p>
 * @link http://php.net/manual/ja/function.mysql-query.php
 * @see mysql_connect(), mysql_error(), mysql_real_escape_string(), mysql_result(), mysql_fetch_assoc(), mysql_unbuffered_query()
 * @since PHP 4, PHP 5
 */
function mysql_query(string $query, $link_identifier = NULL) {}

/**
 * SQL 文中で用いる文字列の特殊文字をエスケープする
 * <p>現在の接続の文字セットで <code>unescaped_string</code> の特殊文字をエスケープし、 <code>mysql_query()</code> で安全に利用できる形式に変換します。バイナリデータを挿入しようとしている場合、 必ずこの関数を利用しなければなりません。</p><p><b>mysql_real_escape_string()</b> は、MySQL のライブラリ関数 mysql_real_escape_string をコールしています。 これは以下の文字について先頭にバックスラッシュを付加します。 <i>\x00</i>, <i>\n</i>, <i>\r</i>, <i>\</i>, <i>'</i>, <i>"</i> そして <i>\x1a</i>.</p><p>データの安全性を確保するため、MySQL へクエリを送信する場合には （わずかな例外を除いて）常にこの関数を用いなければなりません。</p><p>サーバーレベルで設定するなり API 関数 <code>mysql_set_charset()</code> を使うなりして、 文字セットを明示しておく必要があります。この文字セットが <b>mysql_real_escape_string()</b> に影響を及ぼします。詳細は 文字セットの概念 を参照ください。</p>
 * @param string $unescaped_string <p>エスケープされる文字列。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return string <p>成功した場合にエスケープ後の文字列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-real-escape-string.php
 * @see mysql_set_charset(), mysql_client_encoding(), addslashes(), stripslashes()
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mysql_real_escape_string(string $unescaped_string, $link_identifier = NULL): string {}

/**
 * 結果データを得る
 * <p>MySQL の結果セットからひとつのセルの内容を取得します。</p><p>大量の結果セットで作業を行う際は、行全体を取り込む関数のうちひとつを 使用することを検討するべきです（以下で説明します）。 これらの関数は一回の関数コールで複数のセルの内容を返すので、 <b>mysql_result()</b> よりもかなり高速です。 また、フィールド引数としてオフセット数値を指定する方が フィールド名やテーブル名.フィールド名のように指定するよりも かなり高速です。</p>
 * @param resource $result <p>評価された結果 リソース。 この結果は、<code>mysql_query()</code> のコールにより得られたものです。</p>
 * @param int $row <p>結果から取得する行の番号。行番号は <i>0</i> からはじまります。</p>
 * @param mixed $field <p>取得したいフィールド名またはフィールドのオフセット。</p> <p>フィールドのオフセット、フィールド名またはテーブル名.フィールド名を 指定可能です。カラム名のエイリアスが定義されている （'select foo as bar from...'）場合、そのカラム名の代わりに エイリアスを使用してください。指定しなかった場合は最初のフィールドを 取得します。</p>
 * @return string <p>成功した場合に MySQL 結果セットのひとつのセルの内容、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-result.php
 * @see mysql_fetch_row(), mysql_fetch_array(), mysql_fetch_assoc(), mysql_fetch_object()
 * @since PHP 4, PHP 5
 */
function mysql_result($result, int $row, $field = 0): string {}

/**
 * MySQL データベースを選択する
 * <p>指定したリンク ID が指すサーバー上のデータベースを、アクティブな データベースに設定します。それ以降にコールされる <code>mysql_query()</code> は、すべてアクティブなデータベース上で 実行されます。</p>
 * @param string $database_name <p>選択するデータベース名。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-select-db.php
 * @see mysql_connect(), mysql_pconnect(), mysql_query()
 * @since PHP 4, PHP 5
 */
function mysql_select_db(string $database_name, $link_identifier = NULL): bool {}

/**
 * クライアントの文字セットを設定する
 * <p>現在の接続における、デフォルトの文字セットを設定します。</p>
 * @param string $charset <p>有効な文字セット名。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-set-charset.php
 * @see mysql_client_encoding()
 * @since PHP 5 >= 5.2.3
 */
function mysql_set_charset(string $charset, $link_identifier = NULL): bool {}

/**
 * 現在のシステムの状態を取得する
 * <p><b>mysql_stat()</b> は現在のサーバーの状態を返します。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return string <p>稼働時間、スレッド、クエリ、オープンされているテーブル、フラッシュされた テーブル、そして 1 秒あたりのクエリ数を文字列で返します。その他のデータも 含めた完全な状態を得るには、<i>SHOW STATUS</i> SQL コマンドを 実行する必要があります。<code>link_identifier</code> が不正な 場合には <b><code>NULL</code></b> が返されます。</p>
 * @link http://php.net/manual/ja/function.mysql-stat.php
 * @see mysql_get_server_info(), mysql_list_processes()
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mysql_stat($link_identifier = NULL): string {}

/**
 * フィールドのテーブル名を得る
 * <p><code>result</code> からテーブル名を取得します。</p><p>この関数は非推奨です。かわりに <code>mysql_query()</code> を利用して <i>SHOW TABLES [FROM db_name] [LIKE 'pattern']</i> 文を発行することを推奨します。</p>
 * @param resource $result <p><code>mysql_list_tables()</code> から返される 結果ポインタ <code>resource</code> 。</p>
 * @param int $i <p>整数のインデックス（行/テーブル 番号）。</p>
 * @return string <p>成功した場合にテーブル名、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>結果ポインタの中身を調べるために <b>mysql_tablename()</b> 関数を利用し、取得したテーブルを 利用するには <code>mysql_fetch_array()</code> などの関数を 利用してください。</p>
 * @link http://php.net/manual/ja/function.mysql-tablename.php
 * @see mysql_list_tables(), mysql_field_table(), mysql_db_name()
 * @since PHP 4, PHP 5
 */
function mysql_tablename($result, int $i): string {}

/**
 * カレントのスレッド ID を返す
 * <p>カレントのスレッド ID を取得します。接続が一度切断され、 <code>mysql_ping()</code> によって再接続された場合には、 スレッド ID は変わります。つまり、スレッド ID は必要になったその時点で 取得すべきだということです。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return int <p>成功した場合にスレッド ID 、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-thread-id.php
 * @see mysql_ping(), mysql_list_processes()
 * @since PHP 4 >= 4.3.0, PHP 5
 */
function mysql_thread_id($link_identifier = NULL): int {}

/**
 * MySQL に SQL クエリを送信するが、結果に対してのフェッチやバッファリングは行わない
 * <p><b>mysql_unbuffered_query()</b> は SQL クエリ <code>query</code> を MySQL に送信します。その際、 <code>mysql_query()</code> が行っているような自動バッファリングを 行いません。一方、この挙動により SQL クエリが消費するメモリの量を おさえられます。また、最初の 1 行目が取得されたらすぐに処理を はじめることができます。SQL の処理が完全に終わるまで待つ必要がありません。 複数の DB 接続を利用する場合には、オプションのパラメータ <code>link_identifier</code> を指定する必要があります。</p>
 * @param string $query <p>実行する SQL クエリ。</p> <p>クエリ内のデータは 適切にエスケープ する必要があります。</p>
 * @param resource $link_identifier <p>MySQL 接続。 指定されない場合、<code>mysql_connect()</code> により直近にオープンされたリンクが 指定されたと仮定されます。そのようなリンクがない場合、引数を指定せずに <code>mysql_connect()</code> がコールした時と同様にリンクを確立します。 リンクが見付からない、または、確立できない場合、 <b><code>E_WARNING</code></b> レベルのエラーが生成されます。</p>
 * @return resource <p>SELECT, SHOW, DESCRIBE あるいは EXPLAIN では、 <b>mysql_unbuffered_query()</b> は 成功した場合に <code>resource</code> 、エラー時に <b><code>FALSE</code></b> を返します。</p><p>UPDATE, DELETE, DROP, などその他の SQL 文では、 <b>mysql_unbuffered_query()</b> は 成功した場合に <b><code>TRUE</code></b> 、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mysql-unbuffered-query.php
 * @see mysql_query()
 * @since PHP 4 >= 4.0.6, PHP 5
 */
function mysql_unbuffered_query(string $query, $link_identifier = NULL) {}

/**
 * カラムは、フィールド名を添字とする配列形式で返されます。
 */
define('MYSQL_ASSOC', null);

/**
 * カラムは、数値の添字とフィールド名の添字のどちらでもアクセスできる 配列形式で返されます。
 */
define('MYSQL_BOTH', null);

/**
 * 圧縮プロトコルを利用します。
 */
define('MYSQL_CLIENT_COMPRESS', null);

/**
 * 関数名の後のスペースを許可します。
 */
define('MYSQL_CLIENT_IGNORE_SPACE', null);

/**
 * interactive_timeout で指定された秒数（<b>wait_timeout</b> のかわり） の無通信が続くまで接続を閉じません。
 */
define('MYSQL_CLIENT_INTERACTIVE', null);

/**
 * SSL による暗号化を使用します。このフラグは、バージョン 4.x 以降の MySQL クライアントライブラリを利用している場合にのみ有効です。 PHP 4 や、Windows 版の PHP 5 にバンドルされているのは、バージョン 3.23.x のライブラリです。
 */
define('MYSQL_CLIENT_SSL', null);

/**
 * カラムは、数値の添字を持つ配列形式で返されます。添字は 0 からはじまり、 結果の最初のフィールドです。
 */
define('MYSQL_NUM', null);

