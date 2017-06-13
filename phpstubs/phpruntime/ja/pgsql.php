<?php

// Start of pgsql v.7.1.5

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * PostgreSQL 接続をオープンする
 * @link http://php.net/manual/ja/function.pg-connect.php
 * @param string $connection_string <p>
 * すべてデフォルトのパラメータを使用する場合には
 * <i>connection_string</i> を空にすることが可能です。
 * または 1 つ以上のパラメータを空白で区切って指定することも可能です。
 * 個々のパラメータは keyword = value の形式で
 * 設定します。等号の前後の空白はあってもなくてもかまいません。
 * 空の値や空白を含む値を指定する場合は、その値をシングルクォートで
 * 囲みます（例: keyword = 'a value'）。値の中に
 * シングルクォートやバックスラッシュが含まれる場合は、それらを
 * バックスラッシュでエスケープする必要があります（例: \' および \\）。
 * </p>
 * <p>
 * 現在利用できるパラメータは以下のとおりです。
 * <i>host</i>, <i>hostaddr</i>, <i>port</i>,
 * <i>dbname</i> (デフォルトは <i>user</i> の値), <i>user</i>,
 * <i>password</i>, <i>connect_timeout</i>,
 * <i>options</i>, <i>tty</i>（無視されます）, <i>sslmode</i>,
 * <i>requiressl</i>（非推奨。代わりに <i>sslmode</i> を推奨します）
 * および <i>service</i> 。これらのうち実際にどの
 * パラメータが使えるかは、PostgreSQL のバージョンに依存します。
 * </p>
 * <p>
 * <i>options</i> パラメータを使うと、
 * サーバー側で実行されるコマンドラインパラメータを指定することができます。
 * </p>
 * @param int $connect_type [optional] <p>
 * <b>PGSQL_CONNECT_FORCE_NEW</b> が渡された場合は、
 * たとえ <i>connection_string</i> が既存の接続と
 * まったく同一であっても新しい接続をオープンします。
 * </p>
 * <p>
 * <b>PGSQL_CONNECT_ASYNC</b> を指定すると、
 * 非同期接続を確立します。この接続の状態は、
 * <b>pg_connect_poll</b> あるいは
 * <b>pg_connection_status</b> で確認できます。
 * </p>
 * @return resource 成功した場合に PostgreSQL の接続リソース、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_connect(string $connection_string, int $connect_type = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 持続的な PostgreSQL 接続をオープンする
 * @link http://php.net/manual/ja/function.pg-pconnect.php
 * @param string $connection_string <p>
 * すべてデフォルトのパラメータを使用する場合には
 * <i>connection_string</i> を空にすることが可能です。
 * または 1 つ以上のパラメータを空白で区切って指定することも可能です。
 * 個々のパラメータは keyword = value の形式で
 * 設定します。等号の前後の空白はあってもなくてもかまいません。
 * 空の値や空白を含む値を指定する場合は、その値をシングルクォートで
 * 囲みます（例: keyword = 'a value'）。値の中に
 * シングルクォートやバックスラッシュが含まれる場合は、それらを
 * バックスラッシュでエスケープする必要があります（例: \' および \\）。
 * </p>
 * <p>
 * 現在利用できるパラメータは以下のとおりです。
 * <i>host</i>, <i>hostaddr</i>, <i>port</i>,
 * <i>dbname</i>, <i>user</i>,
 * <i>password</i>, <i>connect_timeout</i>,
 * <i>options</i>, <i>tty</i>（無視されます）, <i>sslmode</i>,
 * <i>requiressl</i>（非推奨。代わりに <i>sslmode</i> を推奨します）
 * および <i>service</i> 。これらのうち実際にどの
 * パラメータが使えるかは、PostgreSQL のバージョンに依存します。
 * </p>
 * @param int $connect_type [optional] <p>
 * <b>PGSQL_CONNECT_FORCE_NEW</b> が渡された場合は、
 * たとえ <i>connection_string</i> が既存の接続と
 * まったく同一であっても新しい接続をオープンします。
 * </p>
 * @return resource 成功した場合に PostgreSQL の接続リソース、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_pconnect(string $connection_string, int $connect_type = null) {}

/**
 * @param $connection [optional]
 */
function pg_connect_poll($connection) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * PostgreSQL 接続をクローズする
 * @link http://php.net/manual/ja/function.pg-close.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_close($connection = null): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 接続ステータスを取得する
 * @link http://php.net/manual/ja/function.pg-connection-status.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @return int <b>PGSQL_CONNECTION_OK</b> あるいは
 * <b>PGSQL_CONNECTION_BAD</b> 。
 */
function pg_connection_status($connection): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 接続がビジーかどうか調べる
 * @link http://php.net/manual/ja/function.pg-connection-busy.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @return bool 接続がビジーの場合に <b>TRUE</b> 、そうでない場合に <b>FALSE</b> を返します。
 */
function pg_connection_busy($connection): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 接続をリセット(再接続)する
 * @link http://php.net/manual/ja/function.pg-connection-reset.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_connection_reset($connection): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 接続に関連するホスト名を返す
 * @link http://php.net/manual/ja/function.pg-host.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return string <i>connection</i> が接続しているホストの名前を
 * 文字列で返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_host($connection = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * データベース名を取得する
 * @link http://php.net/manual/ja/function.pg-dbname.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return string <i>connection</i> が指すデータベースの名前を表す
 * 文字列を返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_dbname($connection = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 接続に関連するポート番号を返す
 * @link http://php.net/manual/ja/function.pg-port.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return int <i>connection</i> が指しているデータベースのポート番号を
 * 含む int を返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_port($connection = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 接続に関する TTY 名を返す
 * @link http://php.net/manual/ja/function.pg-tty.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return string <i>connection</i> のデバッグ TTY を文字列で返します。
 * エラー時には <b>FALSE</b> を返します。
 */
function pg_tty($connection = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 接続に関連するオプションを取得する
 * @link http://php.net/manual/ja/function.pg-options.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return string <i>connection</i> のオプションを文字列で返します。
 * エラー時には <b>FALSE</b> を返します。
 */
function pg_options($connection = null): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * クライアント・プロトコル・サーバーのバージョンを配列で返す
 * @link http://php.net/manual/ja/function.pg-version.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return array client, protocol
 * および server のキーとその値を持つ配列を
 * 返します（有効な場合）。エラー時や接続が正常でない場合に <b>FALSE</b>
 * を返します。
 */
function pg_version($connection = null): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * データベース接続を調べる
 * @link http://php.net/manual/ja/function.pg-ping.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_ping($connection = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * サーバーのパラメータ設定を検索する
 * @link http://php.net/manual/ja/function.pg-parameter-status.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param string $param_name <p>
 * 指定可能な <i>param_name</i> には以下が含まれます。
 * server_version、
 * server_encoding、client_encoding、
 * is_superuser、session_authorization、
 * DateStyle、TimeZone および
 * integer_datetimes。
 * </p>
 * @return string パラメータの値を文字列で返します。失敗した場合や
 * <i>param_name</i> が間違っている場合には
 * <b>FALSE</b> を返します。
 */
function pg_parameter_status($connection = null, string $param_name): string {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * サーバー上で実行中のトランザクションの状態を返す
 * @link http://php.net/manual/ja/function.pg-transaction-status.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @return int <b>PGSQL_TRANSACTION_IDLE</b>（アイドル状態）、
 * <b>PGSQL_TRANSACTION_ACTIVE</b>（コマンドの実行中）、
 * <b>PGSQL_TRANSACTION_INTRANS</b>（正常なトランザクション内でアイドル状態）、
 * あるいは <b>PGSQL_TRANSACTION_INERROR</b>（失敗したトランザクション内でアイドル状態）
 * のいずれかを返します。
 * 接続が異常な場合は <b>PGSQL_TRANSACTION_UNKNOWN</b> を返します。
 * <b>PGSQL_TRANSACTION_ACTIVE</b> が返されるのは、クエリを
 * サーバーに送信した後まだそれが完了していない場合のみです。
 */
function pg_transaction_status($connection): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * クエリを実行する
 * @link http://php.net/manual/ja/function.pg-query.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param string $query <p>
 * 実行する 1 つまたは複数の SQL 文。複数の文が関数に渡された場合は、
 * 明示的に BEGIN/COMMIT コマンドを指定していない限りはそれらの文は
 * ひとつのトランザクションとして実行されます。しかし、1 回のコールで
 * 複数のトランザクションを実行することは推奨されません。
 * </p>
 * <p>
 * ユーザーから受け取ったデータを文字列に直接組み込むのは危険で、SQL
 * インジェクション の脆弱性を引き起こしがちです。クエリ文字列に直接埋め込むのではなく、
 * <b>pg_query_params</b> を使ってパラメータとして指定することを推奨します。
 * </p>
 * <p>
 * ユーザーから受け取ったデータをクエリ文字列に直接埋め込む場合は、
 * 適切にエスケープ
 * する必要があります。
 * </p>
 * @return resource 成功した場合にクエリ結果リソース、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_query($connection = null, string $query) {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * SQL コマンドとパラメータを分割してサーバーにを送信し、その結果を待つ
 * @link http://php.net/manual/ja/function.pg-query-params.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param string $query <p>
 * パラメータ化した SQL 文。ひとつの文のみである必要があります
 * （複数の文をセミコロンで区切る形式は使用できません）。パラメータを
 * 使用する際は $1、$2 などの形式で参照されます。
 * </p>
 * <p>
 * ユーザーから受け取った値は常にパラメータとして渡すべきです。
 * 直接クエリ文字列に組み込んではいけません。そうしてしまうと、
 * SQL インジェクション
 * 攻撃を受けてしまう可能性があります。また、クォート文字を含むデータの処理でバグの原因になります。
 * 何らかの理由でパラメータが使えない場合は、値を
 * 適切にエスケープするようにしましょう。
 * </p>
 * @param array $params <p>
 * プリペアドステートメント中の $1、$2 などのプレースホルダを
 * 置き換えるパラメータの配列。配列の要素数はプレースホルダの
 * 数と一致する必要があります。
 * </p>
 * <p>
 * bytea フィールド用の値は、パラメータとして指定できません。
 * <b>pg_escape_bytea</b> を使うか、ラージオブジェクト関数を使うようにしましょう。
 * </p>
 * @return resource 成功した場合にクエリ結果リソース、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_query_params($connection = null, string $query, array $params) {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 指定したパラメータでプリペアドステートメントを作成するリクエストを
送信し、その完了を待つ
 * @link http://php.net/manual/ja/function.pg-prepare.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param string $stmtname <p>
 * プリペアドステートメントにつける名前。接続内で一意である必要があります。
 * "" が指定された場合は無名ステートメントが作成され、以前に定義された
 * 無名ステートメントを上書きします。
 * </p>
 * @param string $query <p>
 * パラメータ化した SQL 文。ひとつの文のみである必要があります
 * （複数の文をセミコロンで区切る形式は使用できません）。パラメータを
 * 使用する際は $1、$2 などの形式で参照されます。
 * </p>
 * @return resource 成功した場合にクエリ結果リソース、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_prepare($connection = null, string $stmtname, string $query) {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 指定したパラメータを用いてプリペアドステートメントを実行するリクエストを
送信し、その結果を待つ
 * @link http://php.net/manual/ja/function.pg-execute.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param string $stmtname <p>
 * 実行するプリペアドステートメントの名前。"" が指定された場合は
 * 無名ステートメントが実行されます。名前は、事前に
 * <b>pg_prepare</b>・<b>pg_send_prepare</b>
 * あるいは PREPARE SQL コマンドで準備されたものである
 * 必要があります。
 * </p>
 * @param array $params <p>
 * プリペアドステートメント中の $1、$2 などのプレースホルダを
 * 置き換えるパラメータの配列。配列の要素数はプレースホルダの
 * 数と一致する必要があります。
 * </p>
 * <p>
 * この関数をコールする際に、要素の内容は文字列に変換されます。
 * </p>
 * @return resource 成功した場合にクエリ結果リソース、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_execute($connection = null, string $stmtname, array $params) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 非同期クエリを送信する
 * @link http://php.net/manual/ja/function.pg-send-query.php
 * @param resource $connection <p>
 * PostgreSQL データベース接続リソース。
 * </p>
 * @param string $query <p>
 * 実行するひとつまたは複数の SQL 文。
 * </p>
 * <p>
 * クエリ内のデータは 適切にエスケープ
 * する必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。</p>
 * <p>
 * クエリの結果を利用するには <b>pg_get_result</b> を使用します。
 */
function pg_send_query($connection, string $query): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * コマンドとパラメータを分割してサーバーに送信し、その結果を待たない
 * @link http://php.net/manual/ja/function.pg-send-query-params.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @param string $query <p>
 * パラメータ化した SQL 文。ひとつの文のみである必要があります
 * （複数の文をセミコロンで区切る形式は使用できません）。パラメータを
 * 使用する際は $1、$2 などの形式で参照されます。
 * </p>
 * @param array $params <p>
 * プリペアドステートメント中の $1、$2 などのプレースホルダを
 * 置き換えるパラメータの配列。配列の要素数はプレースホルダの
 * 数と一致する必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。</p>
 * <p>
 * クエリの結果を判断するには <b>pg_get_result</b>
 * を使用します。
 */
function pg_send_query_params($connection, string $query, array $params): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 指定したパラメータでプリペアドステートメントを作成するリクエストを
送信し、その結果を待たない
 * @link http://php.net/manual/ja/function.pg-send-prepare.php
 * @param resource $connection <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param string $stmtname <p>
 * プリペアドステートメントにつける名前。接続内で一意である必要があります。
 * "" が指定された場合は無名ステートメントが作成され、以前に定義された
 * 無名ステートメントを上書きします。
 * </p>
 * @param string $query <p>
 * パラメータ化した SQL 文。ひとつの文のみである必要があります
 * （複数の文をセミコロンで区切る形式は使用できません）。パラメータを
 * 使用する際は $1、$2 などの形式で参照されます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> 、失敗した場合に <b>FALSE</b> を返します。
 * クエリの結果を確かめるには <b>pg_get_result</b>
 * を使用します。
 */
function pg_send_prepare($connection, string $stmtname, string $query): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 指定したパラメータでプリペアドステートメントを実行するリクエストを
送信し、その結果を待たない
 * @link http://php.net/manual/ja/function.pg-send-execute.php
 * @param resource $connection <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param string $stmtname <p>
 * 実行するプリペアドステートメントの名前。"" が指定された場合は
 * 無名ステートメントが実行されます。名前は、事前に
 * <b>pg_prepare</b>・<b>pg_send_prepare</b>
 * あるいは PREPARE SQL コマンドで準備されたものである
 * 必要があります。
 * </p>
 * @param array $params <p>
 * プリペアドステートメント中の $1、$2 などのプレースホルダを
 * 置き換えるパラメータの配列。配列の要素数はプレースホルダの
 * 数と一致する必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> 、失敗した場合に <b>FALSE</b> を返します。
 * クエリの結果を確認するには <b>pg_get_result</b>
 * を使用します。
 */
function pg_send_execute($connection, string $stmtname, array $params): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 非同期クエリを取り消す
 * @link http://php.net/manual/ja/function.pg-cancel-query.php
 * @param resource $connection <p>
 * PostgreSQL データベース接続リソース。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_cancel_query($connection): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 結果リソースから値を返す
 * @link http://php.net/manual/ja/function.pg-fetch-result.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $row <p>
 * 結果から取得する行の番号。行番号は 0 から始まります。指定しなかった
 * 場合は、次の行が読み込まれます。
 * </p>
 * @param mixed $field <p>
 * 取得するフィールド（カラム）の名前を表す文字列、あるいは取得する
 * フィールドの番号。フィールド番号は 0 から始まります。
 * </p>
 * @return string 論理型の値は &#x00022;t&#x00022; あるいは &#x00022;f&#x00022; の形式で返します。
 * 配列を含むそれ以外の型は、PostgreSQL のやりかたにしたがって文字列として
 * フォーマットされた形式で返します。これは psql
 * プログラムの出力と同じ形式です。データベースの NULL
 * 値は、<b>NULL</b> として返します。
 * </p>
 * <p>
 * <i>row</i> が結果の行数より大きい場合、
 * あるいはそれ以外のエラーが発生した場合は <b>FALSE</b> を返します。
 */
function pg_fetch_result($result, int $row, $field): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 数値添字の配列として行を得る
 * @link http://php.net/manual/ja/function.pg-fetch-row.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $row [optional] <p>
 * 取得する行番号。最初の行は 0 です。省略したり <b>NULL</b> を指定したりした場合は、
 * 次の行を取得します。
 * </p>
 * @param int $result_type [optional]
 * @return array 個々の値を文字列として格納した配列を返します。配列の添字は 0 から
 * 始まります。データベースの NULL 値は <b>NULL</b>
 * として返します。
 * </p>
 * <p>
 * <i>row</i> が結果の行数より大きい場合・行が存在しない場合
 * 、そしてそれ以外のエラーが発生した場合は <b>FALSE</b> を返します。
 */
function pg_fetch_row($result, int $row = null, int $result_type = null): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 行を連想配列として取得する
 * @link http://php.net/manual/ja/function.pg-fetch-assoc.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $row [optional] <p>
 * 取得する行番号。最初の行は 0 です。省略したり <b>NULL</b> を指定したりした場合は、
 * 次の行を取得します。
 * </p>
 * @return array 連想配列（フィールド名をキーとする）を返します。
 * 配列の各要素の値は文字列です。
 * データベースの NULL 値は、<b>NULL</b> として返します。
 * </p>
 * <p>
 * <i>row</i> が結果の行数より大きい場合、行が存在しない場合、
 * そしてそれ以外のエラーが発生した場合は <b>FALSE</b> を返します。
 */
function pg_fetch_assoc($result, int $row = null): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 行を配列として取得する
 * @link http://php.net/manual/ja/function.pg-fetch-array.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $row [optional] <p>
 * 取得する行番号。最初の行は 0 です。省略したり <b>NULL</b> を指定したりした場合は、
 * 次の行を取得します。
 * </p>
 * @param int $result_type [optional] <p>
 * <i>result_type</i> は、返り値の形式を制御する
 * オプションのパラメータです。<i>result_type</i>
 * は定数であり、次の値のどれかとすることが可能です。
 * <b>PGSQL_ASSOC</b>、<b>PGSQL_NUM</b>
 * および <b>PGSQL_BOTH</b>。
 * <b>PGSQL_NUM</b> を使用すると、<b>pg_fetch_array</b>
 * は数値添字の配列を返します。また、<b>PGSQL_ASSOC</b>
 * を使用すると連想配列形式で返します。<b>PGSQL_BOTH</b>
 * がデフォルト設定で、これは数値添字の配列と連想配列の両方を返します。
 * </p>
 * @return array 0 から始まる数値添字の配列か連想配列（フィールド名をキーとする）、
 * あるいはその両方を返します。配列の各要素の値は文字列です。
 * データベースの NULL 値は、<b>NULL</b> として返します。
 * </p>
 * <p>
 * <i>row</i> が結果の行数より大きい場合や行が存在しない場合、
 * そしてそれ以外のエラーが発生した場合は <b>FALSE</b> を返します。
 */
function pg_fetch_array($result, int $row = null, int $result_type = PGSQL_BOTH): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 行をオブジェクトとして得る
 * @link http://php.net/manual/ja/function.pg-fetch-object.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $row [optional] <p>
 * 取得する行番号。最初の行は 0 です。省略したり <b>NULL</b> を指定したりした場合は、
 * 次の行を取得します。
 * </p>
 * @param int $result_type [optional] <p>
 * 非推奨で、無視されます。
 * </p>
 * @return object 結果の各フィールドに対応する属性を持つ object を返します。
 * データベースの NULL 値は <b>NULL</b> として返します。
 * </p>
 * <p>
 * <i>row</i> が結果の行数より大きい場合・行が存在しない場合
 * 、そしてそれ以外のエラーが発生した場合は <b>FALSE</b> を返します。
 */
function pg_fetch_object($result, int $row = null, int $result_type = PGSQL_ASSOC) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 取得されたすべての行を配列として取得する
 * @link http://php.net/manual/ja/function.pg-fetch-all.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @return array 結果のすべての行を含む配列を返します。それぞれの行は、フィールド名を
 * 添字とするフィールド値の配列です。
 * </p>
 * <p>
 * 結果の行数が 0 だった場合、あるいはその他のエラーが発生した場合に
 * <b>FALSE</b> を返します。
 */
function pg_fetch_all($result): array {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 指定したカラムの全ての行を配列として取得する
 * @link http://php.net/manual/ja/function.pg-fetch-all-columns.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $column [optional] <p>
 * 結果リソースから取得するカラムの番号。0 から始まります。
 * 指定しない場合のデフォルトは最初のカラムです。
 * </p>
 * @return array 結果カラムの全ての値を配列で返します。
 * </p>
 * <p>
 * <i>column</i> が結果のカラム数より大きい場合や
 * その他のエラーが発生した場合に <b>FALSE</b> を返します。
 */
function pg_fetch_all_columns($result, int $column = 0): array {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 変更されたレコード(タプル)の数を返す
 * @link http://php.net/manual/ja/function.pg-affected-rows.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @return int クエリによって変更された行の数を返します。もし変更されたタプルがない場合は
 * 0 を返します。
 */
function pg_affected_rows($result): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 非同期クエリの結果を取得する
 * @link http://php.net/manual/ja/function.pg-get-result.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @return resource 結果 resource を返します。結果がもうない場合に <b>FALSE</b>
 * を返します。
 */
function pg_get_result($connection = null) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 結果リソースの内部行オフセットを設定する
 * @link http://php.net/manual/ja/function.pg-result-seek.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $offset <p>
 * 結果リソース内で、内部オフセットを移動させる行。
 * 行番号はゼロから始まります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_result_seek($result, int $offset): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * クエリ結果のステータスを取得する
 * @link http://php.net/manual/ja/function.pg-result-status.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $type [optional] <p>
 * <i>result</i> の数値ステータスを返す
 * <b>PGSQL_STATUS_LONG</b>、あるいは
 * <i>result</i> のコマンドタグを返す
 * <b>PGSQL_STATUS_STRING</b> のいずれかです。
 * 指定しない場合は <b>PGSQL_STATUS_LONG</b> がデフォルトです。
 * </p>
 * @return mixed <b>PGSQL_STATUS_LONG</b> が指定された場合の返り値は
 * 以下のいずれかです。
 * <b>PGSQL_EMPTY_QUERY</b>、
 * <b>PGSQL_COMMAND_OK</b>、<b>PGSQL_TUPLES_OK</b>、<b>PGSQL_COPY_OUT</b>、
 * <b>PGSQL_COPY_IN</b>、<b>PGSQL_BAD_RESPONSE</b>、<b>PGSQL_NONFATAL_ERROR</b>
 * および <b>PGSQL_FATAL_ERROR</b> 。
 * それ以外の場合は、PostgreSQL コマンドタグを含む文字列を返します。
 */
function pg_result_status($result, int $type = PGSQL_STATUS_LONG) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * メモリを開放する
 * @link http://php.net/manual/ja/function.pg-free-result.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_free_result($result): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 直近の行のオブジェクト ID を返す
 * @link http://php.net/manual/ja/function.pg-last-oid.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @return string 指定された <i>connection</i> で、直近に挿入された行に
 * 割り当てられた OID を文字列で返します。エラー時や有効な OID のない場合に
 * <b>FALSE</b> を返します。
 */
function pg_last_oid($result): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 行数を返す
 * @link http://php.net/manual/ja/function.pg-num-rows.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @return int 結果の行数を返します。エラー時には -1 を返します。
 */
function pg_num_rows($result): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * フィールド数を返す
 * @link http://php.net/manual/ja/function.pg-num-fields.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @return int 結果のフィールド（カラム）数を返します。エラー時には -1 を返します。
 */
function pg_num_fields($result): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * フィールドの名前を返す
 * @link http://php.net/manual/ja/function.pg-field-name.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $field_number <p>
 * フィールド番号。0 から始まります。
 * </p>
 * @return string フィールド名を返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_field_name($result, int $field_number): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 指定されたフィールドのフィールド番号を返す
 * @link http://php.net/manual/ja/function.pg-field-num.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param string $field_name <p>
 * フィールドの名前。
 * </p>
 * @return int フィールド番号（0 から始まります）を返します。エラー時には -1 を返します。
 */
function pg_field_num($result, string $field_name): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 指定したフィールドの内部記憶領域におけるサイズを返す
 * @link http://php.net/manual/ja/function.pg-field-size.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $field_number <p>
 * フィールド番号。0 から始まります。
 * </p>
 * @return int 内部記憶領域のサイズ（バイト数）を返します。-1 は可変長フィールドを
 * 示します。エラー時には <b>FALSE</b> を返します。
 */
function pg_field_size($result, int $field_number): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * フィールド番号に対応する型名を返す
 * @link http://php.net/manual/ja/function.pg-field-type.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $field_number <p>
 * フィールド番号。0 から始まります。
 * </p>
 * @return string フィールド型の名前を文字列で返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_field_type($result, int $field_number): string {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * フィールド番号に対応する型 ID（OID）を返す
 * @link http://php.net/manual/ja/function.pg-field-type-oid.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $field_number <p>
 * フィールド番号。0 から始まります。
 * </p>
 * @return int フィールドの型に対応する OID を返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_field_type_oid($result, int $field_number): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 表示される長さを返す
 * @link http://php.net/manual/ja/function.pg-field-prtlen.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $row_number
 * @param mixed $field_name_or_number
 * @return int フィールドの表示される長さを返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_field_prtlen($result, int $row_number, $field_name_or_number): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * フィールドが SQL の NULL かどうか調べる
 * @link http://php.net/manual/ja/function.pg-field-is-null.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @param int $row <p>
 * 取得する結果の行番号。行番号は 0 から始まります。指定しなかった場合は
 * カレントの行を取得します。
 * </p>
 * @param mixed $field <p>
 * （0 から始まる）フィールド番号を表す数値、
 * あるいはフィールド名を表す文字列。
 * </p>
 * @return int 指定した行のフィールドが SQL の NULL だった場合に
 * 1、そうでない場合に 0 を返します。
 * もし範囲外の行を指定したりその他のエラーが発生したりした場合には
 * <b>FALSE</b> を返します。
 */
function pg_field_is_null($result, int $row, $field): int {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * tables フィールドの名前あるいは oid を返す
 * @link http://php.net/manual/ja/function.pg-field-table.php
 * @param resource $result <p>
 * <b>pg_query</b>、<b>pg_query_params</b>
 * あるいは <b>pg_execute</b>
 * (その他も含む) から返された、PostgreSQL クエリ結果リソース。
 * </p>
 * @param int $field_number <p>
 * 0 から始まるフィールド番号。
 * </p>
 * @param bool $oid_only [optional] <p>
 * デフォルトでは、フィールドが属するテーブルの名前が返されます。
 * しかし <i>oid_only</i> を<b>TRUE</b> に設定すると、
 * その代わりに oid が返されます。
 * </p>
 * @return mixed 成功した場合にフィールドのテーブル名あるいは oid、
 * あるいは失敗した場合に <b>FALSE</b> を返します。
 */
function pg_field_table($result, int $field_number, bool $oid_only = false) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * SQL NOTIFY メッセージを取得する
 * @link http://php.net/manual/ja/function.pg-get-notify.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @param int $result_type [optional] <p>
 * <i>result_type</i> は、返り値の形式を制御する
 * オプションのパラメータです。<i>result_type</i>
 * は定数であり、次の値のどれかとすることが可能です。
 * <b>PGSQL_ASSOC</b>、<b>PGSQL_NUM</b>
 * および <b>PGSQL_BOTH</b>。
 * <b>PGSQL_NUM</b> を使用すると、<b>pg_get_notify</b>
 * は数値添字の配列を返します。また、<b>PGSQL_ASSOC</b>
 * を使用すると連想配列形式で返します。<b>PGSQL_BOTH</b>
 * がデフォルト設定で、これは数値添字の配列と連想配列の両方を返します。
 * </p>
 * @return array NOTIFY メッセージ名とバックエンドの PID を含む
 * 配列を返します。
 * PHP 5.4.0 以降、サーバでサポートされている場合は、
 * 配列にはサーバーのバージョンおよびペイロードも含まれます。
 * もし待ち受ける NOTIFY が存在しない場合は、
 * <b>FALSE</b> を返します。
 */
function pg_get_notify($connection, int $result_type = null): array {}

/**
 * @param $connection
 */
function pg_socket($connection) {}

/**
 * @param $connection
 */
function pg_consume_input($connection) {}

/**
 * @param $connection
 */
function pg_flush($connection) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * バックエンドのプロセス ID を得る
 * @link http://php.net/manual/ja/function.pg-get-pid.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @return int バックエンドのデータベースのプロセス ID 。
 */
function pg_get_pid($connection): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 結果に関連するエラーメッセージを取得する
 * @link http://php.net/manual/ja/function.pg-result-error.php
 * @param resource $result <p>
 * <b>pg_query</b>, <b>pg_query_params</b>
 * あるいは <b>pg_execute</b> から返される PostgreSQL の
 * クエリ結果リソース。
 * </p>
 * @return string 文字列を返します。エラーがない場合は空文字列を返します。
 * <i>result</i> パラメータに関連付けられたエラーがある場合は
 * それを文字列で返します。それ以外の場合は <b>FALSE</b> を返します。
 */
function pg_result_error($result): string {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * エラー報告の各フィールドを返す
 * @link http://php.net/manual/ja/function.pg-result-error-field.php
 * @param resource $result <p>
 * 実行したステートメントのクエリ結果リソース。
 * </p>
 * @param int $fieldcode <p>
 * 以下の <i>fieldcode</i> が使用可能です。 <b>PGSQL_DIAG_SEVERITY</b>、
 * <b>PGSQL_DIAG_SQLSTATE</b>、<b>PGSQL_DIAG_MESSAGE_PRIMARY</b>、
 * <b>PGSQL_DIAG_MESSAGE_DETAIL</b>、
 * <b>PGSQL_DIAG_MESSAGE_HINT</b>、<b>PGSQL_DIAG_STATEMENT_POSITION</b>、
 * <b>PGSQL_DIAG_INTERNAL_POSITION</b>（PostgreSQL 8.0+ のみ）、
 * <b>PGSQL_DIAG_INTERNAL_QUERY</b>（PostgreSQL 8.0+ のみ）、
 * <b>PGSQL_DIAG_CONTEXT</b>、<b>PGSQL_DIAG_SOURCE_FILE</b>、
 * <b>PGSQL_DIAG_SOURCE_LINE</b> あるいは
 * <b>PGSQL_DIAG_SOURCE_FUNCTION</b> 。
 * </p>
 * @return string エラーフィールドの内容を文字列で返します。
 * フィールドが存在しない場合に <b>NULL</b> 、失敗した場合に <b>FALSE</b>
 * を返します。
 */
function pg_result_error_field($result, int $fieldcode): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 特定の接続から直近のエラーメッセージ文字列を取得する
 * @link http://php.net/manual/ja/function.pg-last-error.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return string 指定した <i>connection</i> の直近のエラーメッセージを
 * 含む文字列を返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_last_error($connection = null): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * PostgreSQL サーバーからの直近の通知メッセージを返す
 * @link http://php.net/manual/ja/function.pg-last-notice.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @return string 指定された <i>connection</i> の直近の通知を文字列で
 * 返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_last_notice($connection): string {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * NULL で終わる文字列を PostgreSQL バックエンドに送信する
 * @link http://php.net/manual/ja/function.pg-put-line.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param string $data <p>
 * PostgreSQL バックエンドに直接送信されるテキストデータ。
 * 最後に NULL が自動的に付加されます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_put_line($connection = null, string $data): bool {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * PostgreSQL バックエンドと同期する
 * @link http://php.net/manual/ja/function.pg-end-copy.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_end_copy($connection = null): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 配列にテーブルをコピーする
 * @link http://php.net/manual/ja/function.pg-copy-to.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @param string $table_name <p>
 * データを <i>rows</i> にコピーするテーブルの名前。
 * </p>
 * @param string $delimiter [optional] <p>
 * <i>rows</i> の要素内で、各フィールドに対応する値を
 * 区切る文字。デフォルトは TAB です。
 * </p>
 * @param string $null_as [optional] <p>
 * <i>rows</i> の中で、SQL の NULL
 * をどのように表現するか。デフォルトは \N ("\\N") です。
 * </p>
 * @return array COPY されたデータが 1 行ごとにひとつの要素と
 * なっている配列を返します。失敗した場合には <b>FALSE</b> を返します。
 */
function pg_copy_to($connection, string $table_name, string $delimiter = null, string $null_as = null): array {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 配列からテーブルに挿入する
 * @link http://php.net/manual/ja/function.pg-copy-from.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @param string $table_name <p>
 * <i>rows</i> をコピーするテーブルの名前。
 * </p>
 * @param array $rows <p>
 * <i>table_name</i> にコピーするデータの配列。
 * <i>rows</i> の個々の値が <i>table_name</i>
 * のひとつの行となります。<i>rows</i> の個々の値は、
 * それぞれのフィールドに対応する値が区切り文字で区切られており、最後は
 * 改行で終了していなければなりません。
 * </p>
 * @param string $delimiter [optional] <p>
 * <i>rows</i> の要素内で、各フィールドに対応する値を
 * 区切る文字。デフォルトは TAB です。
 * </p>
 * @param string $null_as [optional] <p>
 * <i>rows</i> の中で、SQL の NULL
 * をどのように表現するか。デフォルトは \N ("\\N") です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_copy_from($connection, string $table_name, array $rows, string $delimiter = null, string $null_as = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * PostgreSQL 接続のトレースを有効にする
 * @link http://php.net/manual/ja/function.pg-trace.php
 * @param string $pathname <p>
 * トレースログを書き込むファイルの名前（フルパスを含む）。
 * <b>fopen</b> と同じ。
 * </p>
 * @param string $mode [optional] <p>
 * オプションのファイルアクセスモード。<b>fopen</b>
 * と同じです。
 * </p>
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_trace(string $pathname, string $mode = "w", $connection = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * PostgreSQL 接続のトレースを無効にする
 * @link http://php.net/manual/ja/function.pg-untrace.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return bool Always returns <b>TRUE</b>.
 */
function pg_untrace($connection = null): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ラージオブジェクトを生成する
 * @link http://php.net/manual/ja/function.pg-lo-create.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param mixed $object_id [optional] <p>
 * <i>object_id</i> が指定されると、
 * この関数は指定された ID のラージオブジェクトを作成しようとします。
 * それ以外の場合は、サーバーから割り当てられたオブジェクト ID を使用します。
 * このパラメータは PHP 5.3 で追加されたもので、
 * PostgreSQL 8.1 以降の新機能に依存しています。
 * </p>
 * @return int ラージオブジェクトの OID を返します。
 * エラー時には <b>FALSE</b> を返します。
 */
function pg_lo_create($connection = null, $object_id = null): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ラージオブジェクトを削除する
 * @link http://php.net/manual/ja/function.pg-lo-unlink.php
 * @param resource $connection <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param int $oid <p>
 * データベース内のラージオブジェクトの OID 。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_lo_unlink($connection, int $oid): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ラージオブジェクトをオープンする
 * @link http://php.net/manual/ja/function.pg-lo-open.php
 * @param resource $connection <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param int $oid <p>
 * データベース内のラージオブジェクトの OID 。
 * </p>
 * @param string $mode <p>
 * 読み込み専用の "r"、書き込み専用の "w"、読み書き可能な "rw"
 * のいずれか。
 * </p>
 * @return resource ラージオブジェクトのリソースを返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_lo_open($connection, int $oid, string $mode) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ラージオブジェクトをクローズする
 * @link http://php.net/manual/ja/function.pg-lo-close.php
 * @param resource $large_object
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_lo_close($large_object): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ラージオブジェクトを読み込む
 * @link http://php.net/manual/ja/function.pg-lo-read.php
 * @param resource $large_object <p>
 * <b>pg_lo_open</b> によって返された
 * PostgreSQL ラージオブジェクト (LOB) リソース。
 * </p>
 * @param int $len [optional] <p>
 * 返すデータの最大バイト数（オプション）。
 * </p>
 * @return string ラージオブジェクトから <i>len</i> バイトのデータを
 * 文字列で返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_lo_read($large_object, int $len = 8192): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ラージオブジェクトを書く
 * @link http://php.net/manual/ja/function.pg-lo-write.php
 * @param resource $large_object <p>
 * <b>pg_lo_open</b> によって返された
 * PostgreSQL ラージオブジェクト (LOB) リソース。
 * </p>
 * @param string $data <p>
 * ラージオブジェクトに書き込むデータ。<i>len</i> が
 * <i>data</i> の長さより小さく指定されている場合、
 * <i>len</i> バイトのみが書き込まれます。
 * </p>
 * @param int $len [optional] <p>
 * 書き込むデータの最大バイト数（オプション）。0 より大きく、かつ
 * <i>data</i> のサイズ以下でなければなりません。
 * デフォルトは <i>data</i> の長さです。
 * </p>
 * @return int ラージオブジェクトに書き込んだバイト数を返します。
 * エラー時には <b>FALSE</b> を返します。
 */
function pg_lo_write($large_object, string $data, int $len = null): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ラージオブジェクト全体を読み込みブラウザに直接送信する
 * @link http://php.net/manual/ja/function.pg-lo-read-all.php
 * @param resource $large_object <p>
 * <b>pg_lo_open</b> によって返された
 * PostgreSQL ラージオブジェクト (LOB) リソース。
 * </p>
 * @return int 読み込んだバイト数を返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_lo_read_all($large_object): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ファイルからラージオブジェクトをインポートする
 * @link http://php.net/manual/ja/function.pg-lo-import.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param string $pathname <p>
 * クライアントのファイルシステムからラージオブジェクト用データを
 * 読み込む際のフルパスとファイル名。
 * </p>
 * @param mixed $object_id [optional] <p>
 * <i>object_id</i> が指定されると、
 * この関数は指定された ID のラージオブジェクトを作成しようとします。
 * それ以外の場合は、サーバーから割り当てられたオブジェクト ID を使用します。
 * このパラメータは PHP 5.3 で追加されたもので、
 * PostgreSQL 8.1 以降の新機能に依存しています。
 * </p>
 * @return int 作成されたラージオブジェクトの OID を返します。
 * 失敗した場合には <b>FALSE</b> を返します。
 */
function pg_lo_import($connection = null, string $pathname, $object_id = null): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ラージオブジェクトをファイルにエクスポートする
 * @link http://php.net/manual/ja/function.pg-lo-export.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param int $oid <p>
 * データベース内のラージオブジェクトの OID 。
 * </p>
 * @param string $pathname <p>
 * ラージオブジェクトをクライアントのファイルシステムに書き込む際の
 * フルパスとファイル名。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_lo_export($connection = null, int $oid, string $pathname): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ラージオブジェクトの位置をシークする
 * @link http://php.net/manual/ja/function.pg-lo-seek.php
 * @param resource $large_object <p>
 * <b>pg_lo_open</b> が返す PostgreSQL の
 * ラージオブジェクト(LOB)リソース。
 * </p>
 * @param int $offset <p>
 * シークするバイト数。
 * </p>
 * @param int $whence [optional] <p>
 * 定数 <b>PGSQL_SEEK_SET</b>（オブジェクトの先頭からシークする）、
 * <b>PGSQL_SEEK_CUR</b>（カレントの位置からシークする）、
 * あるいは <b>PGSQL_SEEK_END</b>（オブジェクトの最後からシークする）
 * の中のひとつ。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pg_lo_seek($large_object, int $offset, int $whence = PGSQL_SEEK_CUR): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ラージオブジェクトのカレントのシーク位置を返す
 * @link http://php.net/manual/ja/function.pg-lo-tell.php
 * @param resource $large_object <p>
 * <b>pg_lo_open</b> が返す PostgreSQL の
 * ラージオブジェクト(LOB)リソース。
 * </p>
 * @return int ラージオブジェクトの先頭からのカレントのシーク位置（バイト数）を返します。
 * エラーが発生した場合は、負の数を返します。
 */
function pg_lo_tell($large_object): int {}

/**
 * @param $large_object
 * @param $size [optional]
 */
function pg_lo_truncate($large_object, $size) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * クエリに使う文字列をエスケープする
 * @link http://php.net/manual/ja/function.pg-escape-string.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。
 * <i>connection</i> が存在しない場合は、
 * デフォルトの接続を使用します。デフォルトの接続は、
 * <b>pg_connect</b> あるいは <b>pg_pconnect</b>
 * で直近に作成されたものとなります。
 * </p>
 * @param string $data <p>
 * エスケープするテキスト文字列。
 * </p>
 * @return string エスケープされたデータを文字列で返します。
 */
function pg_escape_string($connection = null, string $data): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * bytea フィールドに挿入するために文字列をエスケープする
 * @link http://php.net/manual/ja/function.pg-escape-bytea.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。
 * <i>connection</i> が存在しない場合は、
 * デフォルトの接続を使用します。デフォルトの接続は、
 * <b>pg_connect</b> あるいは <b>pg_pconnect</b>
 * で直近に作成されたものとなります。
 * </p>
 * @param string $data <p>
 * bytea 型のカラムに挿入するテキストまたはバイナリデータを含む
 * 文字列。
 * </p>
 * @return string エスケープされたデータを文字列で返します。
 */
function pg_escape_bytea($connection = null, string $data): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * bytea 型のバイナリをアンエスケープする
 * @link http://php.net/manual/ja/function.pg-unescape-bytea.php
 * @param string $data <p>
 * PHP のバイナリ文字列に変換される PostgreSQL の bytea データを含む
 * 文字列。
 * </p>
 * @return string アンエスケープされたデータを文字列で返します。
 */
function pg_unescape_bytea(string $data): string {}

/**
 * (PHP 5 &gt;= 5.4.4, PHP 7)<br/>
 * テキスト型フィールドに挿入するために、リテラルをエスケープする
 * @link http://php.net/manual/ja/function.pg-escape-literal.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。
 * <i>connection</i> が存在しない場合は、
 * デフォルトの接続を使用します。デフォルトの接続は、
 * <b>pg_connect</b> あるいは <b>pg_pconnect</b>
 * で直近に作成されたものとなります。
 * デフォルトの接続がない場合は、E_WARNING
 * が発生して <b>FALSE</b> を返します。
 * </p>
 * @param string $data <p>
 * エスケープするテキスト文字列。
 * </p>
 * @return string エスケープされたデータを文字列で返します。
 */
function pg_escape_literal($connection = null, string $data): string {}

/**
 * (PHP 5 &gt;= 5.4.4, PHP 7)<br/>
 * テキスト型フィールドに挿入するために、識別子をエスケープする
 * @link http://php.net/manual/ja/function.pg-escape-identifier.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。
 * <i>connection</i> が存在しない場合は、
 * デフォルトの接続を使用します。デフォルトの接続は、
 * <b>pg_connect</b> あるいは <b>pg_pconnect</b>
 * で直近に作成されたものとなります。
 * </p>
 * @param string $data <p>
 * エスケープするテキスト文字列。
 * </p>
 * @return string エスケープされたデータを文字列で返します。
 */
function pg_escape_identifier($connection = null, string $data): string {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * <b>pg_last_error</b> および <b>pg_result_error</b>
が返すメッセージの詳細度を指定する
 * @link http://php.net/manual/ja/function.pg-set-error-verbosity.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param int $verbosity <p>
 * 指定する詳細度。<b>PGSQL_ERRORS_TERSE</b>、
 * <b>PGSQL_ERRORS_DEFAULT</b>
 * あるいは <b>PGSQL_ERRORS_VERBOSE</b> 。
 * </p>
 * @return int 変更前の詳細度レベル。<b>PGSQL_ERRORS_TERSE</b>、
 * <b>PGSQL_ERRORS_DEFAULT</b>
 * あるいは <b>PGSQL_ERRORS_VERBOSE</b> のいずれかを
 * 返します。
 */
function pg_set_error_verbosity($connection = null, int $verbosity): int {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * クライアントのエンコーディングを取得する
 * @link http://php.net/manual/ja/function.pg-client-encoding.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @return string クライアントのエンコーディングを返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_client_encoding($connection = null): string {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * クライアントのエンコーディングを設定する
 * @link http://php.net/manual/ja/function.pg-set-client-encoding.php
 * @param resource $connection [optional] <p>
 * PostgreSQL データベース接続リソース。<i>connection</i>
 * が指定されていない場合はデフォルトの接続が使用されます。
 * デフォルトの接続は、直近の <b>pg_connect</b>
 * あるいは <b>pg_pconnect</b> によって作成されたものです。
 * </p>
 * @param string $encoding <p>
 * クライアントエンコーディング。以下のうちのひとつです。SQL_ASCII、EUC_JP、
 * EUC_CN、EUC_KR、EUC_TW、
 * UNICODE、MULE_INTERNAL、LATINX (X=1...9)、
 * KOI8、WIN、ALT、SJIS、
 * BIG5 あるいは WIN1250 。
 * </p>
 * <p>
 * 利用可能なエンコーディングの完全なリストは、使用している PostgreSQL
 * のバージョンに依存します。詳細な情報については PostgreSQL のマニュアルを
 * 参照ください。
 * </p>
 * @return int 成功した場合に 0 、エラー時に -1 を返します。
 */
function pg_set_client_encoding($connection = null, string $encoding): int {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * テーブルからメタデータを取得する
 * @link http://php.net/manual/ja/function.pg-meta-data.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @param string $table_name <p>
 * テーブルの名前。
 * </p>
 * @param bool $extended [optional] <p>
 * 拡張メタデータを返すかどうかを表すフラグ。デフォルトは <b>FALSE</b>。
 * </p>
 * @return array テーブル定義の配列を返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_meta_data($connection, string $table_name, bool $extended = null): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 連想配列の値を、SQL 文として実行可能な形式に変換する
 * @link http://php.net/manual/ja/function.pg-convert.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @param string $table_name <p>
 * 変換対象となるテーブルの名前。
 * </p>
 * @param array $assoc_array <p>
 * 変換されるデータ。
 * </p>
 * @param int $options [optional] <p>
 * <b>PGSQL_CONV_IGNORE_DEFAULT</b>,
 * <b>PGSQL_CONV_FORCE_NULL</b> あるいは
 * <b>PGSQL_CONV_IGNORE_NOT_NULL</b> の組み合わせ。
 * </p>
 * @return array 変換された値の配列を返します。エラー時には <b>FALSE</b> を返します。
 */
function pg_convert($connection, string $table_name, array $assoc_array, int $options = 0): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * テーブルに配列を挿入する
 * @link http://php.net/manual/ja/function.pg-insert.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @param string $table_name <p>
 * 行を挿入するテーブルの名前。テーブル <i>table_name</i>
 * は、少なくとも <i>assoc_array</i> の要素数ぶんのカラムを
 * 保持している必要があります。
 * </p>
 * @param array $assoc_array <p>
 * テーブル <i>table_name</i> のフィールド名をキーに、
 * 挿入する内容を値にもつ配列。
 * </p>
 * @param int $options [optional] <p>
 * <b>PGSQL_CONV_OPTS</b>、
 * <b>PGSQL_DML_NO_CONV</b>、
 * <b>PGSQL_DML_ESCAPE</b>、
 * <b>PGSQL_DML_EXEC</b>、
 * <b>PGSQL_DML_ASYNC</b> あるいは
 * <b>PGSQL_DML_STRING</b> を組み合わせた数。
 * <b>PGSQL_DML_STRING</b> が
 * <i>options</i> に含まれていた場合、
 * クエリ文字列が返されます。
 * <b>PGSQL_DML_NO_CONV</b> あるいは <b>PGSQL_DML_ESCAPE</b>
 * が設定されている場合は、内部的に <b>pg_convert</b> を呼びません。
 * </p>
 * @return mixed 成功時に接続リソースを返し、失敗した場合に <b>FALSE</b> を返します。
 * <i>options</i> で
 * <b>PGSQL_DML_STRING</b> が渡された場合は文字列を返します。
 */
function pg_insert($connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * テーブルを更新する
 * @link http://php.net/manual/ja/function.pg-update.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @param string $table_name <p>
 * 行を更新するテーブルの名前。
 * </p>
 * @param array $data <p>
 * テーブル <i>table_name</i> のフィールド名をキーに、
 * そしてマッチした対象を更新するデータを値にもつ配列。
 * </p>
 * @param array $condition <p>
 * テーブル <i>table_name</i> のフィールド名をキーに、
 * そして取得対象となる行にマッチするデータを値にもつ配列。
 * </p>
 * @param int $options [optional] <p>
 * <b>PGSQL_CONV_FORCE_NULL</b>、
 * <b>PGSQL_DML_NO_CONV</b>、
 * <b>PGSQL_DML_ESCAPE</b>、
 * <b>PGSQL_DML_EXEC</b>、
 * <b>PGSQL_DML_ASYNC</b> あるいは
 * <b>PGSQL_DML_STRING</b> の組み合わせ。
 * <i>options</i> の一部に
 * <b>PGSQL_DML_STRING</b> が含まれていた場合、
 * クエリ文字列が返されます。
 * <b>PGSQL_DML_NO_CONV</b> あるいは <b>PGSQL_DML_ESCAPE</b>
 * が設定されている場合は、内部的に <b>pg_convert</b> を呼びません。
 * </p>
 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。 <i>options</i> に
 * <b>PGSQL_DML_STRING</b> が渡された場合は文字列を返します。
 */
function pg_update($connection, string $table_name, array $data, array $condition, int $options = PGSQL_DML_EXEC) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * レコードを削除する
 * @link http://php.net/manual/ja/function.pg-delete.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @param string $table_name <p>
 * 行を削除するテーブルの名前。
 * </p>
 * @param array $assoc_array <p>
 * そのキーが <i>table_name</i> テーブルのフィールド名、
 * 値が削除したいフィールドの値となっている配列。
 * </p>
 * @param int $options [optional] <p>
 * <b>PGSQL_CONV_FORCE_NULL</b>、
 * <b>PGSQL_DML_NO_CONV</b>、
 * <b>PGSQL_DML_ESCAPE</b>、
 * <b>PGSQL_DML_EXEC</b>、
 * <b>PGSQL_DML_ASYNC</b> あるいは
 * <b>PGSQL_DML_STRING</b> を組み合わせた数。
 * <i>options</i> に <b>PGSQL_DML_STRING</b>
 * が含まれている場合、クエリ文字列が返されます。
 * <b>PGSQL_DML_NO_CONV</b> あるいは <b>PGSQL_DML_ESCAPE</b>
 * が設定されている場合は、内部的に <b>pg_convert</b> を呼びません。
 * </p>
 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * <i>options</i> で <b>PGSQL_DML_STRING</b>
 * が渡された場合は文字列を返します。
 */
function pg_delete($connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * レコードを選択する
 * @link http://php.net/manual/ja/function.pg-select.php
 * @param resource $connection <p>
 * PostgreSQL データベースの接続リソース。
 * </p>
 * @param string $table_name <p>
 * 行を選択するテーブルの名前。
 * </p>
 * @param array $assoc_array <p>
 * テーブル <i>table_name</i> のフィールド名をキーに、
 * そして取得対象となる行にマッチするデータを値にもつ配列。
 * </p>
 * @param int $options [optional] <p>
 * <b>PGSQL_CONV_FORCE_NULL</b>、
 * <b>PGSQL_DML_NO_CONV</b>、
 * <b>PGSQL_DML_ESCAPE</b>、
 * <b>PGSQL_DML_EXEC</b>、
 * <b>PGSQL_DML_ASYNC</b> あるいは
 * <b>PGSQL_DML_STRING</b> の組み合わせ。
 * <i>options</i> の一部に
 * <b>PGSQL_DML_STRING</b> が含まれていた場合、
 * クエリ文字列が返されます。
 * <b>PGSQL_DML_NO_CONV</b> あるいは <b>PGSQL_DML_ESCAPE</b>
 * が設定されている場合は、内部的に <b>pg_convert</b> を呼びません。
 * </p>
 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。 <i>options</i> に
 * <b>PGSQL_DML_STRING</b> が渡された場合は文字列を返します。
 */
function pg_select($connection, string $table_name, array $assoc_array, int $options = PGSQL_DML_EXEC) {}

/**
 * @param $connection [optional]
 * @param $query [optional]
 */
function pg_exec($connection, $query) {}

/**
 * @param $result
 */
function pg_getlastoid($result) {}

/**
 * @param $result
 */
function pg_cmdtuples($result) {}

/**
 * @param $connection [optional]
 */
function pg_errormessage($connection) {}

/**
 * @param $result
 */
function pg_numrows($result) {}

/**
 * @param $result
 */
function pg_numfields($result) {}

/**
 * @param $result
 * @param $field_number
 */
function pg_fieldname($result, $field_number) {}

/**
 * @param $result
 * @param $field_number
 */
function pg_fieldsize($result, $field_number) {}

/**
 * @param $result
 * @param $field_number
 */
function pg_fieldtype($result, $field_number) {}

/**
 * @param $result
 * @param $field_name
 */
function pg_fieldnum($result, $field_name) {}

/**
 * @param $result
 * @param $row [optional]
 * @param $field_name_or_number [optional]
 */
function pg_fieldprtlen($result, $row, $field_name_or_number) {}

/**
 * @param $result
 * @param $row [optional]
 * @param $field_name_or_number [optional]
 */
function pg_fieldisnull($result, $row, $field_name_or_number) {}

/**
 * @param $result
 */
function pg_freeresult($result) {}

/**
 * @param $connection
 */
function pg_result($connection) {}

/**
 * @param $large_object
 */
function pg_loreadall($large_object) {}

/**
 * @param $connection [optional]
 * @param $large_object_id [optional]
 */
function pg_locreate($connection, $large_object_id) {}

/**
 * @param $connection [optional]
 * @param $large_object_oid [optional]
 */
function pg_lounlink($connection, $large_object_oid) {}

/**
 * @param $connection [optional]
 * @param $large_object_oid [optional]
 * @param $mode [optional]
 */
function pg_loopen($connection, $large_object_oid, $mode) {}

/**
 * @param $large_object
 */
function pg_loclose($large_object) {}

/**
 * @param $large_object
 * @param $len [optional]
 */
function pg_loread($large_object, $len) {}

/**
 * @param $large_object
 * @param $buf
 * @param $len [optional]
 */
function pg_lowrite($large_object, $buf, $len) {}

/**
 * @param $connection [optional]
 * @param $filename [optional]
 * @param $large_object_oid [optional]
 */
function pg_loimport($connection, $filename, $large_object_oid) {}

/**
 * @param $connection [optional]
 * @param $objoid [optional]
 * @param $filename [optional]
 */
function pg_loexport($connection, $objoid, $filename) {}

/**
 * @param $connection [optional]
 */
function pg_clientencoding($connection) {}

/**
 * @param $connection [optional]
 * @param $encoding [optional]
 */
function pg_setclientencoding($connection, $encoding) {}


/**
 * 短い形式の libpq バージョン情報。数字とドットだけの形式です。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_LIBPQ_VERSION', "9.5.7");

/**
 * 長い形式の libpq バージョン情報。コンパイラの情報も含めます。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_LIBPQ_VERSION_STR', "PostgreSQL 9.5.7 on x86_64-pc-linux-gnu, compiled by gcc (Ubuntu 5.4.0-6ubuntu1~16.04.4) 5.4.0 20160609, 64-bit");

/**
 * <b>pg_connect</b> に渡し、既存の同一接続を無視して
 * 新しい接続を確立させるようにします。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_CONNECT_FORCE_NEW', 2);

/**
 * <b>pg_connect</b> に渡し、非同期接続を確立させます。
 * PHP 5.6.0 で追加されました。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_CONNECT_ASYNC', 4);

/**
 * <b>pg_fetch_array</b> に渡します。
 * フィールド名と値の連想配列を返します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_ASSOC', 1);

/**
 * <b>pg_fetch_array</b> に渡します。
 * フィールド番号と値の数値添字配列を返します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_NUM', 2);

/**
 * <b>pg_fetch_array</b> に渡します。
 * フィールド値の配列を、数値添字（フィールド番号で）と
 * 連想配列（フィールド名で）の両方で返します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_BOTH', 3);
define ('PGSQL_NOTICE_LAST', 1);
define ('PGSQL_NOTICE_ALL', 2);
define ('PGSQL_NOTICE_CLEAR', 3);

/**
 * <b>pg_connection_status</b> から返され、データベースとの
 * 接続が不正な状態になっていることを示します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_CONNECTION_BAD', 1);

/**
 * <b>pg_connection_status</b> から返され、データベースとの
 * 接続が正常であることを示します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_CONNECTION_OK', 0);
define ('PGSQL_CONNECTION_STARTED', 2);
define ('PGSQL_CONNECTION_MADE', 3);
define ('PGSQL_CONNECTION_AWAITING_RESPONSE', 4);
define ('PGSQL_CONNECTION_AUTH_OK', 5);
define ('PGSQL_CONNECTION_SETENV', 6);

/**
 * <b>pg_connect_poll</b> が返す値です。
 * 接続の試行に失敗したことを示します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_POLLING_FAILED', 0);

/**
 * <b>pg_connect_poll</b> が返す値です。
 * 接続が、PostgreSQL のソケットが読み込み可能になるのを待っていることを示します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_POLLING_READING', 1);

/**
 * <b>pg_connect_poll</b> が返す値です。
 * 接続が、PostgreSQL のソケットが書き込み可能になるのを待っていることを示します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_POLLING_WRITING', 2);

/**
 * <b>pg_connect_poll</b> が返す値です。
 * 接続が、利用可能になったことを示します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_POLLING_OK', 3);

/**
 * <b>pg_connect_poll</b> が返す値です。
 * 接続が、現在アクティブであることを示します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_POLLING_ACTIVE', 4);

/**
 * <b>pg_transaction_status</b> から返されます。
 * 接続は現在アイドル状態で、トランザクション内ではありません。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_TRANSACTION_IDLE', 0);

/**
 * <b>pg_transaction_status</b> から返されます。
 * 接続内でコマンドを実行中です。クエリが接続を通じて送信され、
 * まだ完了していません。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_TRANSACTION_ACTIVE', 1);

/**
 * <b>pg_transaction_status</b> から返されます。
 * 接続は現在アイドル状態で、トランザクションブロック内にあります。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_TRANSACTION_INTRANS', 2);

/**
 * <b>pg_transaction_status</b> から返されます。
 * 接続は現在アイドル状態で、トランザクション処理に失敗しています。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_TRANSACTION_INERROR', 3);

/**
 * <b>pg_transaction_status</b> から返されます。
 * 接続が正常ではありません。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_TRANSACTION_UNKNOWN', 4);

/**
 * <b>pg_set_error_verbosity</b> に渡します。
 * 返されるメッセージを指定します。ここには深刻度・短い説明および
 * 発生位置のみを含めます。通常は 1 行に収まるでしょう。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_ERRORS_TERSE', 0);

/**
 * <b>pg_set_error_verbosity</b> に渡します。
 * デフォルトで返されるメッセージで、上の内容に加えて詳細・
 * ヒントあるいは詳細情報を含めます（複数行にまたがるかもしれません）。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_ERRORS_DEFAULT', 1);

/**
 * <b>pg_set_error_verbosity</b> に渡します。
 * 詳細モードでのメッセージで、有効なフィールドをすべて含めます。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_ERRORS_VERBOSE', 2);

/**
 * <b>pg_lo_seek</b> に渡します。シーク操作は
 * オブジェクトの先頭から始められます。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_SEEK_SET', 0);

/**
 * <b>pg_lo_seek</b> に渡します。シーク操作は
 * カレントの位置から始められます。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_SEEK_CUR', 1);

/**
 * <b>pg_lo_seek</b> に渡します。シーク操作は
 * オブジェクトの最後から始められます。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_SEEK_END', 2);

/**
 * <b>pg_result_status</b> に渡します。
 * 結果として数値が要求されていることを示します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_STATUS_LONG', 1);

/**
 * <b>pg_result_status</b> に渡します。
 * 結果としてテキストのコマンドタグが要求されていることを示します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_STATUS_STRING', 2);

/**
 * <b>pg_result_status</b> から返されます。
 * サーバーに送信された文字列が空でした。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_EMPTY_QUERY', 0);

/**
 * <b>pg_result_status</b> から返されます。
 * コマンドは正常に終了し、何もデータを返しませんでした。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_COMMAND_OK', 1);

/**
 * <b>pg_result_status</b> から返されます。
 * コマンドは正常に終了し、データを返しました
 * （SELECT や SHOW など）。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_TUPLES_OK', 2);

/**
 * <b>pg_result_status</b> から返されます。
 * （サーバーからの）データのコピーが始まりました。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_COPY_OUT', 3);

/**
 * <b>pg_result_status</b> から返されます。
 * （サーバーへの）データのコピーが始まりました。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_COPY_IN', 4);

/**
 * <b>pg_result_status</b> から返されます。
 * サーバーからの応答を判別できませんでした。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_BAD_RESPONSE', 5);

/**
 * <b>pg_result_status</b> から返されます。
 * 致命的ではないエラー（通知や警告など）が発生しました。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_NONFATAL_ERROR', 6);

/**
 * <b>pg_result_status</b> から返されます。
 * 致命的なエラーが発生しました。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_FATAL_ERROR', 7);

/**
 * <b>pg_result_error_field</b> に渡します。
 * 深刻度です。その内容は ERROR、
 * FATAL、あるいは PANIC
 * （エラーメッセージ内）、あるいは WARNING、
 * NOTICE、DEBUG、
 * INFO、あるいは LOG
 * （通知メッセージ内）、あるいはこれらの各国語版のうちのどれかです。
 * 常に存在します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_SEVERITY', 83);

/**
 * <b>pg_result_error_field</b> に渡します。
 * エラーの SQLSTATE コードです。SQLSTATE コードは発生したエラーの種別を
 * 特定します。これは、データベースエラーに対してフロントエンドの
 * アプリケーションが適切な操作（エラー処理など）をできるようにするために
 * 使用されます。このフィールドはローカライズされていません。また、
 * 常に存在します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_SQLSTATE', 67);

/**
 * <b>pg_result_error_field</b> に渡します。
 * 人間が判読できる最初のエラーメッセージ（たいてい 1 行）です。常に存在します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_MESSAGE_PRIMARY', 77);

/**
 * <b>pg_result_error_field</b> に渡します。
 * オプションの 2 番目のエラーメッセージで、問題に対する詳細な情報を
 * 含みます。複数行にまたがることもあります。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_MESSAGE_DETAIL', 68);

/**
 * <b>pg_result_error_field</b> に渡します。
 * オプションのメッセージで、問題に対してどのように対応すべきかを指摘
 * します。エラーの詳細情報と違う点は、発生した事実ではなくアドバイス
 * （時に不適切な場合もある）をするところです。複数行にまたがることも
 * あります。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_MESSAGE_HINT', 72);

/**
 * <b>pg_result_error_field</b> に渡します。
 * エラーカーソルの位置を、もとのステートメント中の位置として表す
 * 整数値を保持する文字列です。
 * 最初の文字の位置は 1 で、それ以降（バイト数ではなく）文字数で
 * 位置を数えます。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_STATEMENT_POSITION', 80);

/**
 * <b>pg_result_error_field</b> に渡します。
 * <b>PG_DIAG_STATEMENT_POSITION</b> と同じ定義ですが、
 * こちらはカーソル位置が内部で生成されたコマンドを参照している場合に
 * 使用されます。このフィールドが存在する場合は、常に
 * <b>PG_DIAG_INTERNAL_QUERY</b> フィールドも存在します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_INTERNAL_POSITION', 112);

/**
 * <b>pg_result_error_field</b> に渡します。
 * 失敗した内部生成コマンドのテキストです。例としては、PL/pgSQL 関数で
 * 発行された SQL クエリなどがあてはまります。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_INTERNAL_QUERY', 113);

/**
 * <b>pg_result_error_field</b> に渡します。
 * エラーが発生した状況を指定します。現在ここに含まれているのは、
 * アクティブなプロシージャの関数や内部生成クエリのコール履歴です。
 * これはエントリごとに 1 行のデータとなっており、直近のデータが
 * 先頭にきます。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_CONTEXT', 87);

/**
 * <b>pg_result_error_field</b> に渡します。
 * エラーが報告された箇所の、PostgreSQL ソースコードでのファイル名です。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_SOURCE_FILE', 70);

/**
 * <b>pg_result_error_field</b> に渡します。
 * エラーが報告された箇所の、PostgreSQL ソースコードでの行番号です。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_SOURCE_LINE', 76);

/**
 * <b>pg_result_error_field</b> に渡します。
 * エラーが報告された箇所の、PostgreSQL ソースコードでの関数名です。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DIAG_SOURCE_FUNCTION', 82);

/**
 * <b>pg_convert</b> に渡します。
 * 変換時に、テーブルのデフォルト値を無視します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_CONV_IGNORE_DEFAULT', 2);

/**
 * <b>pg_convert</b> に渡します。
 * 空文字列に対して、SQL の NULL を使用します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_CONV_FORCE_NULL', 4);

/**
 * <b>pg_convert</b> に渡します。
 * <b>NULL</b> を SQL の NOT NULL に変換しないように
 * します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_CONV_IGNORE_NOT_NULL', 8);

/**
 * <b>pg_insert</b> や <b>pg_select</b>、
 * <b>pg_update</b>、<b>pg_delete</b> に渡します。
 * 内部的に <b>pg_convert</b> を呼ぶ代わりに、すべてのパラメータをエスケープします。
 * このオプションは、メタデータのルックアップを除外します。
 * <b>pg_query</b> や <b>pg_send_query</b>
 * と同程度の速度になります。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DML_ESCAPE', 4096);

/**
 * <b>pg_insert</b> や <b>pg_select</b>、
 * <b>pg_update</b>、<b>pg_delete</b> に渡します。
 * すべてのパラメータを、そのままの形式で渡します。ユーザーから受け取ったデータを渡す際には、手動でのエスケープが必要になります。
 * <b>pg_escape_string</b> を使いましょう。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DML_NO_CONV', 256);

/**
 * <b>pg_insert</b> や <b>pg_select</b>、
 * <b>pg_update</b>、<b>pg_delete</b> に渡します。
 * これらの関数を使って、クエリを実行します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DML_EXEC', 512);

/**
 * <b>pg_insert</b> や <b>pg_select</b>、
 * <b>pg_update</b>、<b>pg_delete</b> に渡します。
 * これらの関数を使って、非同期クエリを実行します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DML_ASYNC', 1024);

/**
 * <b>pg_insert</b> や <b>pg_select</b>、
 * <b>pg_update</b>、<b>pg_delete</b> に渡します。
 * 実行したクエリ文字列を返します。
 * @link http://php.net/manual/ja/pgsql.constants.php
 */
define ('PGSQL_DML_STRING', 2048);

// End of pgsql v.7.1.5
?>
