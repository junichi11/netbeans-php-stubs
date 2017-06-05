<?php

// Start of interbase v.7.0.19

/**
 * (PHP 5, PHP 7)<br/>
 * データベースへの接続をオープンする
 * @link http://php.net/manual/ja/function.ibase-connect.php
 * @param string $database [optional] <p>
 * <i>database</i>は接続するサーバー上のデータベース
 * ファイルへの正しいパスである必要があります。ローカルなサーバーへの
 * 接続でない場合、使用する接続プロトコルに応じてこの引数の前に
 * 'hostname:' (TCP/IP)、'hostname/port:' (カスタム TCP ポート上での interbase サーバーでの TCP/IP)、'//hostname/' (NetBEUI)
 * のどれかをつける必要があります。
 * </p>
 * @param string $username [optional] <p>
 * ユーザー名。<i>php.ini</i> ディレクティブ
 * ibase.default_user
 * で設定します。
 * </p>
 * @param string $password [optional] <p>
 * <i>username</i> のパスワード。
 * <i>php.ini</i> ディレクティブ
 * ibase.default_password
 * で設定します。
 * </p>
 * @param string $charset [optional] <p>
 * <i>charset</i>
 * はデータベースに関するデフォルトの文字セットです。
 * </p>
 * @param int $buffers [optional] <p>
 * <i>buffers</i>
 * はサーバー側のキャッシュに確保されるデータベースバッファの数です。0
 * または省略された場合、サーバーはデフォルト値を用います。
 * </p>
 * @param int $dialect [optional] <p>
 * <i>dialect</i> は、接続時に実行される全ての命令に
 * 関する SQL 方言のデフォルト値を選択し、デフォルトではクライアント
 * ライブラリでサポートされる方言のうち、最高位のものになります。
 * </p>
 * @param string $role [optional] <p>
 * InterBase 5 以降でのみ有効です。
 * </p>
 * @param int $sync [optional]
 * @return resource 成功した場合に Firebird/InterBase リンク ID、エラー時に <b>FALSE</b> を返します。
 */
function ibase_connect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null, int $sync = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * InterBase データベースへの持続的接続をオープンする
 * @link http://php.net/manual/ja/function.ibase-pconnect.php
 * @param string $database [optional] <p>
 * <i>database</i>は接続するサーバー上のデータベース
 * ファイルへの正しいパスである必要があります。ローカルなサーバーへの
 * 接続でない場合、使用する接続プロトコルに応じてこの引数の前に'
 * hostname:' (TCP/IP)、'//hostname/' (NetBEUI)、'hostname@'
 * (IPX/SPX)のどれかをつける必要があります。
 * </p>
 * @param string $username [optional] <p>
 * ユーザー名。<i>php.ini</i> ディレクティブ
 * ibase.default_user
 * で設定します。
 * </p>
 * @param string $password [optional] <p>
 * <i>username</i> のパスワード。
 * <i>php.ini</i> ディレクティブ
 * ibase.default_password
 * で設定します。
 * </p>
 * @param string $charset [optional] <p>
 * <i>charset</i>
 * はデータベースに関するデフォルトの文字セットです。
 * </p>
 * @param int $buffers [optional] <p>
 * <i>buffers</i>
 * はサーバー側のキャッシュに確保されるデータベースバッファの数です。0
 * または省略された場合、サーバーはデフォルト値を用います。
 * </p>
 * @param int $dialect [optional] <p>
 * <i>dialect</i> は、接続時に実行される全ての命令に
 * 関する SQL 方言のデフォルト値を選択し、デフォルトではクライアント
 * ライブラリでサポートされる方言のうち、最高位のものになります。
 * InterBase 6 以降でのみ有効です。
 * </p>
 * @param string $role [optional] <p>
 * InterBase 5 以降でのみ有効です。
 * </p>
 * @param int $sync [optional]
 * @return resource 成功した場合に InterBase リンク ID、エラー時に <b>FALSE</b> を返します。
 */
function ibase_pconnect(string $database = null, string $username = null, string $password = null, string $charset = null, int $buffers = null, int $dialect = null, string $role = null, int $sync = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * InterBase データベースへの接続を閉じる
 * @link http://php.net/manual/ja/function.ibase-close.php
 * @param resource $connection_id [optional] <p>
 * <b>ibase_connect</b> が返す
 * InterBase リンク ID。省略した場合は、
 * 最後にオープンしたリンクを使用します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_close($connection_id = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * データベースを削除する
 * @link http://php.net/manual/ja/function.ibase-drop-db.php
 * @param resource $connection [optional] <p>
 * InterBase リンク ID。省略した場合は、
 * 最後にオープンしたリンクを使用します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_drop_db($connection = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * InterBase データベースでクエリを実行する
 * @link http://php.net/manual/ja/function.ibase-query.php
 * @param resource $link_identifier [optional] <p>
 * InterBase リンク ID。省略した場合は、
 * 最後にオープンしたリンクを使用します。
 * </p>
 * @param string $query <p>
 * InterBase クエリ。
 * </p>
 * @param int $bind_args [optional]
 * @return resource クエリが失敗した場合、<b>FALSE</b> を返します。成功した場合、
 * (SELECT クエリのような) 結果の行がある場合、結果 ID を返します。
 * クエリが成功し、結果がない場合は <b>TRUE</b> を返します。
 * </p>
 * <p>
 * PHP 5.0.0 以降では、INSERT・UPDATE・DELETE 文に対してはこの関数は
 * 変更された行数を返します。後方互換性を確保するため、これらの文で
 * クエリが成功したものの 1 行も更新されなかった場合には <b>TRUE</b>
 * を返します。
 */
function ibase_query($link_identifier = null, string $query, int $bind_args = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * InterBase データベースから 1 行分の結果を取得する
 * @link http://php.net/manual/ja/function.ibase-fetch-row.php
 * @param resource $result_identifier <p>
 * InterBase 結果 ID。
 * </p>
 * @param int $fetch_flag [optional] <p>
 * <i>fetch_flag</i> は、定数 <b>IBASE_TEXT</b>
 * および <b>IBASE_UNIXTIME</b>
 * を論理和で指定します。<b>IBASE_TEXT</b> を渡すと、BLOB ID のかわりに BLOB
 * の内容自体を返します。<b>IBASE_UNIXTIME</b> を渡すと、日付/時刻の値を文字列ではなく
 * Unix タイムスタンプで返します。
 * </p>
 * @return array 取得した行に対応する配列を返します。行がもうない場合には <b>FALSE</b>
 * を返します。
 * 結果の各行は配列のオフセットに格納され、
 * このオフセットは 0 から始まります。
 */
function ibase_fetch_row($result_identifier, int $fetch_flag = 0): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * クエリの結果から、行を連想配列として取得する
 * @link http://php.net/manual/ja/function.ibase-fetch-assoc.php
 * @param resource $result <p>
 * 結果ハンドル。
 * </p>
 * @param int $fetch_flag [optional] <p>
 * <i>fetch_flag</i> は、定数 <b>IBASE_TEXT</b>
 * および <b>IBASE_UNIXTIME</b>
 * を論理和で指定します。<b>IBASE_TEXT</b> を渡すと、BLOB ID のかわりに BLOB
 * の内容自体を返します。<b>IBASE_UNIXTIME</b> を渡すと、日付/時刻の値を文字列ではなく
 * Unix タイムスタンプで返します。
 * </p>
 * @return array <b>ibase_fetch_assoc</b> は、取得した行に対応する連想配列を返します。
 * 続けてコールすると、結果セットの次の行を返し、
 * 行がもうない場合には <b>FALSE</b> を返します。
 */
function ibase_fetch_assoc($result, int $fetch_flag = 0): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * InterBase データベースからオブジェクトを得る
 * @link http://php.net/manual/ja/function.ibase-fetch-object.php
 * @param resource $result_id <p>
 * <b>ibase_query</b> あるいは <b>ibase_execute</b>
 * で取得した InterBase 結果 ID。
 * </p>
 * @param int $fetch_flag [optional] <p>
 * <i>fetch_flag</i> は、定数 <b>IBASE_TEXT</b>
 * および <b>IBASE_UNIXTIME</b>
 * を論理和で指定します。<b>IBASE_TEXT</b> を渡すと、BLOB ID のかわりに BLOB
 * の内容自体を返します。<b>IBASE_UNIXTIME</b> を渡すと、日付/時刻の値を文字列ではなく
 * Unix タイムスタンプで返します。
 * </p>
 * @return object 次の行の情報を含むオブジェクト、
 * あるいは行がもうない場合には <b>FALSE</b> を返します。
 */
function ibase_fetch_object($result_id, int $fetch_flag = 0) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果セットを解放する
 * @link http://php.net/manual/ja/function.ibase-free-result.php
 * @param resource $result_identifier <p>
 * <b>ibase_query</b> あるいは
 * <b>ibase_execute</b>
 * で作成した結果セット。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_free_result($result_identifier): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果セットに名前を割り当てる
 * @link http://php.net/manual/ja/function.ibase-name-result.php
 * @param resource $result <p>
 * InterBase 結果セット。
 * </p>
 * @param string $name <p>
 * 割り当てる名前。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_name_result($result, string $name): bool {}

/**
 * @param $link_identifier [optional]
 * @param $query [optional]
 */
function ibase_prepare($link_identifier, $query) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 準備されたクエリを実行する
 * @link http://php.net/manual/ja/function.ibase-execute.php
 * @param resource $query <p>
 * <b>ibase_prepare</b> で準備した InterBase クエリ。
 * </p>
 * @param mixed $bind_arg [optional]
 * @param mixed $_ [optional]
 * @return resource クエリがエラーを発生させた場合は <b>FALSE</b> を返します。
 * クエリが成功し、結果セット(空のセットとなる可能性もありえます)を
 * 返した場合(SELECT クエリなど)は結果 ID を返します。クエリが成功し、
 * 結果セットが返されなかった場合は <b>TRUE</b> を返します。
 * </p>
 * <p>
 * この関数はクエリによって変更された行の数を
 * 返します(行を変更するクエリで、結果が 0 より大きかった場合)。
 * クエリは成功したが、どの行も変更されなかった場合(例: 存在しない
 * 行に対する UPDATE)は <b>TRUE</b> を返します。
 */
function ibase_execute($query, $bind_arg = null, $_ = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * プリペアドクエリにより確保されたメモリを解放する
 * @link http://php.net/manual/ja/function.ibase-free-query.php
 * @param resource $query <p>
 * <b>ibase_prepare</b> で準備したクエリ。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_free_query($query): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 指定した名前のジェネレータをひとつ加算し、その新しい値を返す
 * @link http://php.net/manual/ja/function.ibase-gen-id.php
 * @param string $generator
 * @param int $increment [optional]
 * @param resource $link_identifier [optional]
 * @return mixed 新しいジェネレータの値を整数で返します。値が大きくなりすぎた場合は文字列で返します。
 */
function ibase_gen_id(string $generator, int $increment = 1, $link_identifier = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 結果セットにおけるフィールド数を得る
 * @link http://php.net/manual/ja/function.ibase-num-fields.php
 * @param resource $result_id <p>
 * InterBase 結果 ID。
 * </p>
 * @return int フィールドの数を整数値で返します。
 */
function ibase_num_fields($result_id): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * プリペアドクエリのパラメータ数を返す
 * @link http://php.net/manual/ja/function.ibase-num-params.php
 * @param resource $query <p>
 * プリペアドクエリのハンドル。
 * </p>
 * @return int パラメータの数を整数値で返します。
 */
function ibase_num_params($query): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 直近のクエリで変更された行の数を返す
 * @link http://php.net/manual/ja/function.ibase-affected-rows.php
 * @param resource $link_identifier [optional] <p>
 * トランザクションのコンテキスト。
 * <i>link_identifier</i> が接続リソースの場合、
 * そのデフォルトのトランザクションが使用されます。
 * </p>
 * @return int 変更された行数を整数値で返します。
 */
function ibase_affected_rows($link_identifier = null): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * フィールドに関する情報を得る
 * @link http://php.net/manual/ja/function.ibase-field-info.php
 * @param resource $result <p>
 * InterBase 結果 ID。
 * </p>
 * @param int $field_number <p>
 * フィールドのオフセット。
 * </p>
 * @return array 配列を返します。配列に含まれるキーは name、
 * alias、relation、
 * length そして type です。
 */
function ibase_field_info($result, int $field_number): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * プリペアドクエリのパラメータに関する情報を返す
 * @link http://php.net/manual/ja/function.ibase-param-info.php
 * @param resource $query <p>
 * InterBase プリペアドクエリのハンドル。
 * </p>
 * @param int $param_number <p>
 * パラメータのオフセット。
 * </p>
 * @return array 配列を返します。配列に含まれるキーは name、
 * alias、relation、
 * length および type
 * となります。
 */
function ibase_param_info($query, int $param_number): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * トランザクションを開始する
 * @link http://php.net/manual/ja/function.ibase-trans.php
 * @param int $trans_args [optional] <p>
 * <i>trans_args</i> は、以下の
 * <b>IBASE_READ</b>、
 * <b>IBASE_WRITE</b>、
 * <b>IBASE_COMMITTED</b>、
 * <b>IBASE_CONSISTENCY</b>、
 * <b>IBASE_CONCURRENCY</b>、
 * <b>IBASE_REC_VERSION</b>、
 * <b>IBASE_REC_NO_VERSION</b>、
 * <b>IBASE_WAIT</b> および
 * <b>IBASE_NOWAIT</b>
 * の組み合わせとなります。
 * </p>
 * @param resource $link_identifier [optional] <p>
 * InterBase リンク ID。省略した場合は、
 * 最後にオープンしたリンクを使用します。
 * </p>
 * @return resource トランザクションハンドル、あるいはエラー時に <b>FALSE</b> を返します。
 */
function ibase_trans(int $trans_args = null, $link_identifier = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * トランザクションをコミットする
 * @link http://php.net/manual/ja/function.ibase-commit.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * 引数なしでコールされた場合、この関数はデフォルトリンクの
 * デフォルトのトランザクションをコミットします。引数が接続 ID
 * であった場合は、対応する接続のデフォルトのトランザクションを
 * コミットします。引数がトランザクション ID であった場合は、
 * 対応するトランザクションがコミットされます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_commit($link_or_trans_identifier = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * トランザクションをロールバックする
 * @link http://php.net/manual/ja/function.ibase-rollback.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * 引数なしでコールされた場合、この関数はデフォルトリンクのデフォルトの
 * トランザクションをロールバックします。引数として接続 ID が渡された場合、
 * 対応する接続のデフォルトのトランザクションをロールバックします。
 * 引数としてトランザクション ID が渡された場合、対応するトランザクションを
 * ロールバックします。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_rollback($link_or_trans_identifier = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * トランザクションを閉じずにコミットする
 * @link http://php.net/manual/ja/function.ibase-commit-ret.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * 引数なしでコールされた場合、この関数はデフォルトリンクのデフォルトの
 * トランザクションをコミットします。引数が接続 ID だった場合、対応する
 * 接続のデフォルトのトランザクションをコミットします。引数が
 * トランザクション ID だった場合、対応するトランザクションをコミットします。
 * トランザクションコンテキストはそのまま維持され、このトランザクション内で
 * 実行された文は取り消されません。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_commit_ret($link_or_trans_identifier = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * トランザクションを閉じずにロールバックする
 * @link http://php.net/manual/ja/function.ibase-rollback-ret.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * 引数なしでコールされた場合、この関数はデフォルトリンクのデフォルトの
 * トランザクションをロールバックします。引数が接続 ID だった場合、対応する
 * 接続のデフォルトのトランザクションをロールバックします。引数が
 * トランザクション ID だった場合、対応するトランザクションをロールバックします。
 * トランザクションコンテキストはそのまま維持され、このトランザクション内で
 * 実行された文は取り消されません。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_rollback_ret($link_or_trans_identifier = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * blob の長さと他の便利な情報を返す
 * @link http://php.net/manual/ja/function.ibase-blob-info.php
 * @param resource $link_identifier <p>
 * InterBase リンク ID。省略した場合は、
 * 最後にオープンしたリンクを使用します。
 * </p>
 * @param string $blob_id <p>
 * BLOB の ID。
 * </p>
 * @return array BLOB についての情報を含む配列を返します。返される情報には
 * BLOB の長さ・含んでいるセグメントの数・最大のセグメントのサイズ・
 * ストリーム BLOB とセグメント BLOB のどちらであるかなどがあります。
 */
function ibase_blob_info($link_identifier, string $blob_id): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * データを追加するために blob を生成する
 * @link http://php.net/manual/ja/function.ibase-blob-create.php
 * @param resource $link_identifier [optional] <p>
 * InterBase リンク ID。省略した場合は、
 * 最後にオープンしたリンクを使用します。
 * </p>
 * @return resource <b>ibase_blob_add</b> で使用するための
 * BLOB ハンドルを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_blob_create($link_identifier = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 生成された blob にデータを追加する
 * @link http://php.net/manual/ja/function.ibase-blob-add.php
 * @param resource $blob_handle <p>
 * <b>ibase_blob_create</b> でオープンした blob ハンドル。
 * </p>
 * @param string $data <p>
 * 追加するデータ。
 * </p>
 * @return void 値を返しません。
 */
function ibase_blob_add($blob_handle, string $data): void {}

/**
 * (PHP 5, PHP 7)<br/>
 * blob の生成を取り消す
 * @link http://php.net/manual/ja/function.ibase-blob-cancel.php
 * @param resource $blob_handle <p>
 * <b>ibase_blob_create</b> でオープンした blob ハンドル。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_blob_cancel($blob_handle): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * blob を閉じる
 * @link http://php.net/manual/ja/function.ibase-blob-close.php
 * @param resource $blob_handle <p>
 * <b>ibase_blob_create</b>
 * あるいは <b>ibase_blob_open</b>
 * でオープンした blob ハンドル。
 * </p>
 * @return mixed BLOB が読み込み用であった場合、
 * この関数は成功時に <b>TRUE</b> を返します。一方 BLOB が書き込み用であった場合、
 * データベースによって割り当てられた BLOB ID を文字列で返します。
 * 失敗した場合は、この関数は <b>FALSE</b> を返します。
 */
function ibase_blob_close($blob_handle) {}

/**
 * (PHP 5, PHP 7)<br/>
 * データの一部を取得するために blob をオープンする
 * @link http://php.net/manual/ja/function.ibase-blob-open.php
 * @param resource $link_identifier <p>
 * InterBase リンク ID。省略した場合は、
 * 最後にオープンしたリンクを使用します。
 * </p>
 * @param string $blob_id <p>
 * BLOB の ID。
 * </p>
 * @return resource 後で <b>ibase_blob_get</b> とともに使用する
 * BLOB ハンドルを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_blob_open($link_identifier, string $blob_id) {}

/**
 * (PHP 5, PHP 7)<br/>
 * オープンした blob から len バイト分のデータを取得する
 * @link http://php.net/manual/ja/function.ibase-blob-get.php
 * @param resource $blob_handle <p>
 * <b>ibase_blob_open</b> でオープンした BLOB ハンドル。
 * </p>
 * @param int $len <p>
 * 返されるデータのサイズ。
 * </p>
 * @return string BLOB から最大 <i>len</i> バイトを返します。
 * 失敗した場合は <b>FALSE</b> を返します。
 */
function ibase_blob_get($blob_handle, int $len): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * ブラウザに blob の内容を出力する
 * @link http://php.net/manual/ja/function.ibase-blob-echo.php
 * @param string $blob_id
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_blob_echo(string $blob_id): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * blob を生成し、ファイルをコピーし、閉じる
 * @link http://php.net/manual/ja/function.ibase-blob-import.php
 * @param resource $link_identifier <p>
 * InterBase リンク ID。省略した場合は、
 * 最後にオープンしたリンクを使用します。
 * </p>
 * @param resource $file_handle <p>
 * <b>fopen</b> が返すファイルハンドル。
 * </p>
 * @return string 成功した場合に BLOB の ID、エラー時に <b>FALSE</b> を返します。
 */
function ibase_blob_import($link_identifier, $file_handle): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * エラーメッセージを返す
 * @link http://php.net/manual/ja/function.ibase-errmsg.php
 * @return string エラーメッセージを表す文字列、あるいはエラーが発生しなかった場合は <b>FALSE</b> を返します。
 */
function ibase_errmsg(): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * エラーコードを返す
 * @link http://php.net/manual/ja/function.ibase-errcode.php
 * @return int エラーコードを表す整数、あるいはエラーが発生しなかった場合は <b>FALSE</b> を返します。
 */
function ibase_errcode(): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * セキュリティデータベースにユーザーを追加する
 * @link http://php.net/manual/ja/function.ibase-add-user.php
 * @param resource $service_handle
 * @param string $user_name
 * @param string $password
 * @param string $first_name [optional]
 * @param string $middle_name [optional]
 * @param string $last_name [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_add_user($service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * セキュリティデータベースのユーザーを変更する
 * @link http://php.net/manual/ja/function.ibase-modify-user.php
 * @param resource $service_handle
 * @param string $user_name
 * @param string $password
 * @param string $first_name [optional]
 * @param string $middle_name [optional]
 * @param string $last_name [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_modify_user($service_handle, string $user_name, string $password, string $first_name = null, string $middle_name = null, string $last_name = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * セキュリティデータベースからユーザーを削除する
 * @link http://php.net/manual/ja/function.ibase-delete-user.php
 * @param resource $service_handle
 * @param string $user_name
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_delete_user($service_handle, string $user_name): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * サービスマネージャに接続する
 * @link http://php.net/manual/ja/function.ibase-service-attach.php
 * @param string $host
 * @param string $dba_username
 * @param string $dba_password
 * @return resource
 */
function ibase_service_attach(string $host, string $dba_username, string $dba_password) {}

/**
 * (PHP 5, PHP 7)<br/>
 * サービスマネージャとの接続を切断する
 * @link http://php.net/manual/ja/function.ibase-service-detach.php
 * @param resource $service_handle
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_service_detach($service_handle): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * サービスマネージャのバックアップタスクを起動し、すぐに結果を返す
 * @link http://php.net/manual/ja/function.ibase-backup.php
 * @param resource $service_handle
 * @param string $source_db
 * @param string $dest_file
 * @param int $options [optional]
 * @param bool $verbose [optional]
 * @return mixed
 */
function ibase_backup($service_handle, string $source_db, string $dest_file, int $options = 0, bool $verbose = false) {}

/**
 * (PHP 5, PHP 7)<br/>
 * サービスマネージャのリストアタスクを起動し、すぐに結果を返す
 * @link http://php.net/manual/ja/function.ibase-restore.php
 * @param resource $service_handle
 * @param string $source_file
 * @param string $dest_db
 * @param int $options [optional]
 * @param bool $verbose [optional]
 * @return mixed
 */
function ibase_restore($service_handle, string $source_file, string $dest_db, int $options = 0, bool $verbose = false) {}

/**
 * (PHP 5, PHP 7)<br/>
 * データベースサーバーでメンテナンスコマンドを実行する
 * @link http://php.net/manual/ja/function.ibase-maintain-db.php
 * @param resource $service_handle
 * @param string $db
 * @param int $action
 * @param int $argument [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_maintain_db($service_handle, string $db, int $action, int $argument = 0): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * データベースについての統計情報を要求する
 * @link http://php.net/manual/ja/function.ibase-db-info.php
 * @param resource $service_handle
 * @param string $db
 * @param int $action
 * @param int $argument [optional]
 * @return string
 */
function ibase_db_info($service_handle, string $db, int $action, int $argument = 0): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * データベースサーバーについての情報を要求する
 * @link http://php.net/manual/ja/function.ibase-server-info.php
 * @param resource $service_handle
 * @param int $action
 * @return string
 */
function ibase_server_info($service_handle, int $action): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * データベースでイベントが発生するのを待つ
 * @link http://php.net/manual/ja/function.ibase-wait-event.php
 * @param string $event_name1 <p>
 * イベントの名前。
 * </p>
 * @param string $event_name2 [optional]
 * @param string $_ [optional]
 * @return string 発生したイベントの名前を返します。
 */
function ibase_wait_event(string $event_name1, string $event_name2 = null, string $_ = null): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * イベントが発生した際にコールされるコールバック関数を登録する
 * @link http://php.net/manual/ja/function.ibase-set-event-handler.php
 * @param callable $event_handler <p>
 * コールバックは、データベースから特定のイベントが送信された場合に、
 * イベント名とリンクリソースを引数としてコールされます。
 * </p>
 * <p>
 * イベントハンドラがキャンセルされた場合は、
 * コールバックは <b>FALSE</b> を返す必要があります。
 * その他の返り値は無視されます。
 * この関数は、最大 15 のイベントを引数として受け取ります。
 * </p>
 * @param string $event_name1 <p>
 * イベントの名前。
 * </p>
 * @param string $event_name2 [optional] <p>
 * 最大で 15 のイベントを指定できます。
 * </p>
 * @param string $_ [optional]
 * @return resource 返される値はイベントのリソースです。このリソースは、
 * <b>ibase_free_event_handler</b>
 * でイベントハンドラを開放する際に使用可能です。
 */
function ibase_set_event_handler(callable $event_handler, string $event_name1, string $event_name2 = null, string $_ = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 登録済みのイベントハンドラをキャンセルする
 * @link http://php.net/manual/ja/function.ibase-free-event-handler.php
 * @param resource $event <p>
 * <b>ibase_set_event_handler</b>
 * で作成したイベントリソース。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ibase_free_event_handler($event): bool {}

/**
 * @param $database
 * @param $username [optional]
 * @param $password [optional]
 * @param $charset [optional]
 * @param $buffers [optional]
 * @param $dialect [optional]
 * @param $role [optional]
 */
function fbird_connect($database, $username, $password, $charset, $buffers, $dialect, $role) {}

/**
 * @param $database
 * @param $username [optional]
 * @param $password [optional]
 * @param $charset [optional]
 * @param $buffers [optional]
 * @param $dialect [optional]
 * @param $role [optional]
 */
function fbird_pconnect($database, $username, $password, $charset, $buffers, $dialect, $role) {}

/**
 * @param $link_identifier [optional]
 */
function fbird_close($link_identifier) {}

/**
 * @param $link_identifier [optional]
 */
function fbird_drop_db($link_identifier) {}

/**
 * @param $link_identifier [optional]
 * @param $link_identifier [optional]
 * @param $query [optional]
 * @param $bind_arg [optional]
 * @param $bind_arg [optional]
 */
function fbird_query($link_identifier, $link_identifier, $query, $bind_arg, $bind_arg) {}

/**
 * @param $result
 * @param $fetch_flags [optional]
 */
function fbird_fetch_row($result, $fetch_flags) {}

/**
 * @param $result
 * @param $fetch_flags [optional]
 */
function fbird_fetch_assoc($result, $fetch_flags) {}

/**
 * @param $result
 * @param $fetch_flags [optional]
 */
function fbird_fetch_object($result, $fetch_flags) {}

/**
 * @param $result
 */
function fbird_free_result($result) {}

/**
 * @param $result
 * @param $name
 */
function fbird_name_result($result, $name) {}

/**
 * @param $link_identifier [optional]
 * @param $query [optional]
 */
function fbird_prepare($link_identifier, $query) {}

/**
 * @param $query
 * @param $bind_arg [optional]
 * @param $bind_arg [optional]
 */
function fbird_execute($query, $bind_arg, $bind_arg) {}

/**
 * @param $query
 */
function fbird_free_query($query) {}

/**
 * @param $generator
 * @param $increment [optional]
 * @param $link_identifier [optional]
 */
function fbird_gen_id($generator, $increment, $link_identifier) {}

/**
 * @param $query_result
 */
function fbird_num_fields($query_result) {}

/**
 * @param $query
 */
function fbird_num_params($query) {}

/**
 * @param $link_identifier [optional]
 */
function fbird_affected_rows($link_identifier) {}

/**
 * @param $query_result
 * @param $field_number
 */
function fbird_field_info($query_result, $field_number) {}

/**
 * @param $query
 * @param $field_number
 */
function fbird_param_info($query, $field_number) {}

/**
 * @param $trans_args [optional]
 * @param $link_identifier [optional]
 * @param $trans_args [optional]
 * @param $link_identifier [optional]
 */
function fbird_trans($trans_args, $link_identifier, $trans_args, $link_identifier) {}

/**
 * @param $link_identifier
 */
function fbird_commit($link_identifier) {}

/**
 * @param $link_identifier
 */
function fbird_rollback($link_identifier) {}

/**
 * @param $link_identifier
 */
function fbird_commit_ret($link_identifier) {}

/**
 * @param $link_identifier
 */
function fbird_rollback_ret($link_identifier) {}

/**
 * @param $link_identifier [optional]
 * @param $blob_id [optional]
 */
function fbird_blob_info($link_identifier, $blob_id) {}

/**
 * @param $link_identifier [optional]
 */
function fbird_blob_create($link_identifier) {}

/**
 * @param $blob_handle
 * @param $data
 */
function fbird_blob_add($blob_handle, $data) {}

/**
 * @param $blob_handle
 */
function fbird_blob_cancel($blob_handle) {}

/**
 * @param $blob_handle
 */
function fbird_blob_close($blob_handle) {}

/**
 * @param $link_identifier [optional]
 * @param $blob_id [optional]
 */
function fbird_blob_open($link_identifier, $blob_id) {}

/**
 * @param $blob_handle
 * @param $len
 */
function fbird_blob_get($blob_handle, $len) {}

/**
 * @param $link_identifier [optional]
 * @param $blob_id [optional]
 */
function fbird_blob_echo($link_identifier, $blob_id) {}

/**
 * @param $link_identifier [optional]
 * @param $file [optional]
 */
function fbird_blob_import($link_identifier, $file) {}

function fbird_errmsg() {}

function fbird_errcode() {}

/**
 * @param $service_handle
 * @param $user_name
 * @param $password
 * @param $first_name [optional]
 * @param $middle_name [optional]
 * @param $last_name [optional]
 */
function fbird_add_user($service_handle, $user_name, $password, $first_name, $middle_name, $last_name) {}

/**
 * @param $service_handle
 * @param $user_name
 * @param $password
 * @param $first_name [optional]
 * @param $middle_name [optional]
 * @param $last_name [optional]
 */
function fbird_modify_user($service_handle, $user_name, $password, $first_name, $middle_name, $last_name) {}

/**
 * @param $service_handle
 * @param $user_name
 * @param $password
 * @param $first_name [optional]
 * @param $middle_name [optional]
 * @param $last_name [optional]
 */
function fbird_delete_user($service_handle, $user_name, $password, $first_name, $middle_name, $last_name) {}

/**
 * @param $host
 * @param $dba_username
 * @param $dba_password
 */
function fbird_service_attach($host, $dba_username, $dba_password) {}

/**
 * @param $service_handle
 */
function fbird_service_detach($service_handle) {}

/**
 * @param $service_handle
 * @param $source_db
 * @param $dest_file
 * @param $options [optional]
 * @param $verbose [optional]
 */
function fbird_backup($service_handle, $source_db, $dest_file, $options, $verbose) {}

/**
 * @param $service_handle
 * @param $source_file
 * @param $dest_db
 * @param $options [optional]
 * @param $verbose [optional]
 */
function fbird_restore($service_handle, $source_file, $dest_db, $options, $verbose) {}

/**
 * @param $service_handle
 * @param $db
 * @param $action
 * @param $argument [optional]
 */
function fbird_maintain_db($service_handle, $db, $action, $argument) {}

/**
 * @param $service_handle
 * @param $db
 * @param $action
 * @param $argument [optional]
 */
function fbird_db_info($service_handle, $db, $action, $argument) {}

/**
 * @param $service_handle
 * @param $action
 */
function fbird_server_info($service_handle, $action) {}

/**
 * @param $link_identifier
 * @param $event [optional]
 * @param $event2 [optional]
 */
function fbird_wait_event($link_identifier, $event, $event2) {}

/**
 * @param $link_identifier
 * @param $handler
 * @param $event [optional]
 * @param $event2 [optional]
 */
function fbird_set_event_handler($link_identifier, $handler, $event, $event2) {}

/**
 * @param $event
 */
function fbird_free_event_handler($event) {}

define ('IBASE_DEFAULT', 0);
define ('IBASE_CREATE', 0);
define ('IBASE_TEXT', 1);
define ('IBASE_FETCH_BLOBS', 1);
define ('IBASE_FETCH_ARRAYS', 2);
define ('IBASE_UNIXTIME', 4);
define ('IBASE_WRITE', 1);
define ('IBASE_READ', 2);
define ('IBASE_COMMITTED', 8);
define ('IBASE_CONSISTENCY', 16);
define ('IBASE_CONCURRENCY', 4);
define ('IBASE_REC_VERSION', 64);
define ('IBASE_REC_NO_VERSION', 32);
define ('IBASE_NOWAIT', 256);
define ('IBASE_WAIT', 128);
define ('IBASE_BKP_IGNORE_CHECKSUMS', 1);
define ('IBASE_BKP_IGNORE_LIMBO', 2);
define ('IBASE_BKP_METADATA_ONLY', 4);
define ('IBASE_BKP_NO_GARBAGE_COLLECT', 8);
define ('IBASE_BKP_OLD_DESCRIPTIONS', 16);
define ('IBASE_BKP_NON_TRANSPORTABLE', 32);

/**
 * <b>ibase_backup</b> へのオプション
 * @link http://php.net/manual/ja/ibase.constants.php
 */
define ('IBASE_BKP_CONVERT', 64);
define ('IBASE_RES_DEACTIVATE_IDX', 256);
define ('IBASE_RES_NO_SHADOW', 512);
define ('IBASE_RES_NO_VALIDITY', 1024);
define ('IBASE_RES_ONE_AT_A_TIME', 2048);
define ('IBASE_RES_REPLACE', 4096);
define ('IBASE_RES_CREATE', 8192);

/**
 * <b>ibase_restore</b> へのオプション
 * @link http://php.net/manual/ja/ibase.constants.php
 */
define ('IBASE_RES_USE_ALL_SPACE', 16384);
define ('IBASE_PRP_PAGE_BUFFERS', 5);
define ('IBASE_PRP_SWEEP_INTERVAL', 6);
define ('IBASE_PRP_SHUTDOWN_DB', 7);
define ('IBASE_PRP_DENY_NEW_TRANSACTIONS', 10);
define ('IBASE_PRP_DENY_NEW_ATTACHMENTS', 9);
define ('IBASE_PRP_RESERVE_SPACE', 11);
define ('IBASE_PRP_RES_USE_FULL', 35);
define ('IBASE_PRP_RES', 36);
define ('IBASE_PRP_WRITE_MODE', 12);
define ('IBASE_PRP_WM_ASYNC', 37);
define ('IBASE_PRP_WM_SYNC', 38);
define ('IBASE_PRP_ACCESS_MODE', 13);
define ('IBASE_PRP_AM_READONLY', 39);
define ('IBASE_PRP_AM_READWRITE', 40);
define ('IBASE_PRP_SET_SQL_DIALECT', 14);
define ('IBASE_PRP_ACTIVATE', 256);
define ('IBASE_PRP_DB_ONLINE', 512);
define ('IBASE_RPR_CHECK_DB', 16);
define ('IBASE_RPR_IGNORE_CHECKSUM', 32);
define ('IBASE_RPR_KILL_SHADOWS', 64);
define ('IBASE_RPR_MEND_DB', 4);
define ('IBASE_RPR_VALIDATE_DB', 1);
define ('IBASE_RPR_FULL', 128);

/**
 * <b>ibase_maintain_db</b> へのオプション
 * @link http://php.net/manual/ja/ibase.constants.php
 */
define ('IBASE_RPR_SWEEP_DB', 2);
define ('IBASE_STS_DATA_PAGES', 1);
define ('IBASE_STS_DB_LOG', 2);
define ('IBASE_STS_HDR_PAGES', 4);
define ('IBASE_STS_IDX_PAGES', 8);

/**
 * <b>ibase_db_info</b> へのオプション
 * @link http://php.net/manual/ja/ibase.constants.php
 */
define ('IBASE_STS_SYS_RELATIONS', 16);
define ('IBASE_SVC_SERVER_VERSION', 55);
define ('IBASE_SVC_IMPLEMENTATION', 56);
define ('IBASE_SVC_GET_ENV', 59);
define ('IBASE_SVC_GET_ENV_LOCK', 60);
define ('IBASE_SVC_GET_ENV_MSG', 61);
define ('IBASE_SVC_USER_DBPATH', 58);
define ('IBASE_SVC_SVR_DB_INFO', 50);

/**
 * <b>ibase_server_info</b> へのオプション
 * @link http://php.net/manual/ja/ibase.constants.php
 */
define ('IBASE_SVC_GET_USERS', 68);

// End of interbase v.7.0.19
?>
