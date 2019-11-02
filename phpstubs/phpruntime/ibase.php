<?php



namespace {

	/**
	 * のエイリアス ibase_add_user()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_add_user()</code>.</p>
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the new database user.</p>
	 * @param string $password <p>The password of the new user.</p>
	 * @param string $first_name <p>The first name of the new database user.</p>
	 * @param string $middle_name <p>The middle name of the new database user.</p>
	 * @param string $last_name <p>The last name of the new database user.</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-add-user.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_add_user($service_handle, string $user_name, string $password, string $first_name = NULL, string $middle_name = NULL, string $last_name = NULL): bool {}

	/**
	 * のエイリアス ibase_affected_rows()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_affected_rows()</code>.</p>
	 * @param resource $link_identifier <p>トランザクションのコンテキスト。 <code>link_identifier</code> が接続リソースの場合、 そのデフォルトのトランザクションが使用されます。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.fbird-affected-rows.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_affected_rows($link_identifier = NULL): int {}

	/**
	 * のエイリアス ibase_backup()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_backup()</code>.</p>
	 * @param resource $service_handle <p>A previously opened connection to the database server.</p>
	 * @param string $source_db <p>The absolute file path to the database on the database server. You can also use a database alias.</p>
	 * @param string $dest_file <p>The path to the backup file on the database server.</p>
	 * @param int $options <p>Additional options to pass to the database server for backup. The <code>options</code> parameter can be a combination of the following constants: <b><code>IBASE_BKP_IGNORE_CHECKSUMS</code></b>, <b><code>IBASE_BKP_IGNORE_LIMBO</code></b>, <b><code>IBASE_BKP_METADATA_ONLY</code></b>, <b><code>IBASE_BKP_NO_GARBAGE_COLLECT</code></b>, <b><code>IBASE_BKP_OLD_DESCRIPTIONS</code></b>, <b><code>IBASE_BKP_NON_TRANSPORTABLE</code></b> or <b><code>IBASE_BKP_CONVERT</code></b>. Read the section about 定義済み定数 for further information.</p>
	 * @param bool $verbose <p>Since the backup process is done on the database server, you don't have any chance to get its output. This argument is useless.</p>
	 * @return mixed
	 * @link https://php.net/manual/ja/function.fbird-backup.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_backup($service_handle, string $source_db, string $dest_file, int $options = 0, bool $verbose = FALSE) {}

	/**
	 * のエイリアス ibase_blob_add()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_blob_add()</code>.</p>
	 * @param resource $blob_handle <p><code>ibase_blob_create()</code> でオープンした blob ハンドル。</p>
	 * @param string $data <p>追加するデータ。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.fbird-blob-add.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_blob_add($blob_handle, string $data): void {}

	/**
	 * Cancel creating blob
	 * <p>This function will discard a BLOB if it has not yet been closed by <code>fbird_blob_close()</code>.</p>
	 * @param resource $blob_handle <p>A BLOB handle opened with <code>fbird_blob_create()</code>.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbird-blob-cancel.php
	 * @see fbird_blob_close(), fbird_blob_create(), fbird_blob_import()
	 * @since PHP 5, PHP 7
	 */
	function fbird_blob_cancel($blob_handle): bool {}

	/**
	 * のエイリアス ibase_blob_close()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_blob_close()</code>.</p>
	 * @param resource $blob_handle <p><code>ibase_blob_create()</code> あるいは <code>ibase_blob_open()</code> でオープンした blob ハンドル。</p>
	 * @return mixed
	 * @link https://php.net/manual/ja/function.fbird-blob-close.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_blob_close($blob_handle) {}

	/**
	 * のエイリアス ibase_blob_create()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_blob_create()</code>.</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @return resource
	 * @link https://php.net/manual/ja/function.fbird-blob-create.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_blob_create($link_identifier = NULL) {}

	/**
	 * のエイリアス ibase_blob_echo()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_blob_echo()</code>.</p>
	 * @param string $blob_id
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-blob-echo.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_blob_echo(string $blob_id): bool {}

	/**
	 * のエイリアス ibase_blob_get()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_blob_get()</code>.</p>
	 * @param resource $blob_handle <p><code>ibase_blob_open()</code> でオープンした BLOB ハンドル。</p>
	 * @param int $len <p>返されるデータのサイズ。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.fbird-blob-get.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_blob_get($blob_handle, int $len): string {}

	/**
	 * のエイリアス ibase_blob_import()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_blob_import()</code>.</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @param resource $file_handle <p><code>fopen()</code> が返すファイルハンドル。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.fbird-blob-import.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_blob_import($link_identifier, $file_handle): string {}

	/**
	 * のエイリアス ibase_blob_info()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_blob_info()</code>.</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @param string $blob_id <p>BLOB の ID。</p>
	 * @return array
	 * @link https://php.net/manual/ja/function.fbird-blob-info.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_blob_info($link_identifier, string $blob_id): array {}

	/**
	 * のエイリアス ibase_blob_open()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_blob_open()</code>.</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @param string $blob_id <p>BLOB の ID。</p>
	 * @return resource
	 * @link https://php.net/manual/ja/function.fbird-blob-open.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_blob_open($link_identifier, string $blob_id) {}

	/**
	 * のエイリアス ibase_close()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_close()</code>.</p>
	 * @param resource $connection_id <p><code>ibase_connect()</code> が返す InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-close.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_close($connection_id = NULL): bool {}

	/**
	 * のエイリアス ibase_commit()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_commit()</code>.</p>
	 * @param resource $link_or_trans_identifier <p>引数なしでコールされた場合、この関数はデフォルトリンクの デフォルトのトランザクションをコミットします。引数が接続 ID であった場合は、対応する接続のデフォルトのトランザクションを コミットします。引数がトランザクション ID であった場合は、 対応するトランザクションがコミットされます。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-commit.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_commit($link_or_trans_identifier = NULL): bool {}

	/**
	 * のエイリアス ibase_commit_ret()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_commit_ret()</code>.</p>
	 * @param resource $link_or_trans_identifier <p>引数なしでコールされた場合、この関数はデフォルトリンクのデフォルトの トランザクションをコミットします。引数が接続 ID だった場合、対応する 接続のデフォルトのトランザクションをコミットします。引数が トランザクション ID だった場合、対応するトランザクションをコミットします。 トランザクションコンテキストはそのまま維持され、このトランザクション内で 実行された文は取り消されません。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-commit-ret.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_commit_ret($link_or_trans_identifier = NULL): bool {}

	/**
	 * のエイリアス ibase_connect()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_connect()</code>.</p>
	 * @param string $database <p><code>database</code>は接続するサーバー上のデータベース ファイルへの正しいパスである必要があります。ローカルなサーバーへの 接続でない場合、使用する接続プロトコルに応じてこの引数の前に 'hostname:' (TCP/IP)、'hostname/port:' (カスタム TCP ポート上での interbase サーバーでの TCP/IP)、'//hostname/' (NetBEUI) のどれかをつける必要があります。</p>
	 * @param string $username <p>ユーザー名。php.ini ディレクティブ <i>ibase.default_user</i> で設定します。</p>
	 * @param string $password <p><code>username</code> のパスワード。 php.ini ディレクティブ <i>ibase.default_password</i> で設定します。</p>
	 * @param string $charset <p><code>charset</code> はデータベースに関するデフォルトの文字セットです。</p>
	 * @param int $buffers <p><code>buffers</code> はサーバー側のキャッシュに確保されるデータベースバッファの数です。0 または省略された場合、サーバーはデフォルト値を用います。</p>
	 * @param int $dialect <p><code>dialect</code> は、接続時に実行される全ての命令に 関する SQL 方言のデフォルト値を選択し、デフォルトではクライアント ライブラリでサポートされる方言のうち、最高位のものになります。</p>
	 * @param string $role <p>InterBase 5 以降でのみ有効です。</p>
	 * @param int $sync
	 * @return resource
	 * @link https://php.net/manual/ja/function.fbird-connect.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_connect(string $database = NULL, string $username = NULL, string $password = NULL, string $charset = NULL, int $buffers = NULL, int $dialect = NULL, string $role = NULL, int $sync = NULL) {}

	/**
	 * のエイリアス ibase_db_info()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_db_info()</code>.</p>
	 * @param resource $service_handle
	 * @param string $db
	 * @param int $action
	 * @param int $argument
	 * @return string
	 * @link https://php.net/manual/ja/function.fbird-db-info.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_db_info($service_handle, string $db, int $action, int $argument = 0): string {}

	/**
	 * のエイリアス ibase_delete_user()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_delete_user()</code>.</p>
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the user you want to delete from the database.</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-delete-user.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_delete_user($service_handle, string $user_name): bool {}

	/**
	 * のエイリアス ibase_drop_db()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_drop_db()</code>.</p>
	 * @param resource $connection <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-drop-db.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_drop_db($connection = NULL): bool {}

	/**
	 * のエイリアス ibase_errcode()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_errcode()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.fbird-errcode.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_errcode(): int {}

	/**
	 * のエイリアス ibase_errmsg()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_errmsg()</code>.</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.fbird-errmsg.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_errmsg(): string {}

	/**
	 * のエイリアス ibase_execute()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_execute()</code>.</p>
	 * @param resource $query <p><code>ibase_prepare()</code> で準備した InterBase クエリ。</p>
	 * @param mixed $_
	 * @return resource
	 * @link https://php.net/manual/ja/function.fbird-execute.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_execute($query, $_ = NULL) {}

	/**
	 * のエイリアス ibase_fetch_assoc()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_fetch_assoc()</code>.</p>
	 * @param resource $result <p>結果ハンドル。</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> は、定数 <b><code>IBASE_TEXT</code></b> および <b><code>IBASE_UNIXTIME</code></b> を論理和で指定します。<b><code>IBASE_TEXT</code></b> を渡すと、BLOB ID のかわりに BLOB の内容自体を返します。<b><code>IBASE_UNIXTIME</code></b> を渡すと、日付/時刻の値を文字列ではなく Unix タイムスタンプで返します。</p>
	 * @return array
	 * @link https://php.net/manual/ja/function.fbird-fetch-assoc.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_fetch_assoc($result, int $fetch_flag = 0): array {}

	/**
	 * のエイリアス ibase_fetch_object()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_fetch_object()</code>.</p>
	 * @param resource $result_id <p><code>ibase_query()</code> あるいは <code>ibase_execute()</code> で取得した InterBase 結果 ID。</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> は、定数 <b><code>IBASE_TEXT</code></b> および <b><code>IBASE_UNIXTIME</code></b> を論理和で指定します。<b><code>IBASE_TEXT</code></b> を渡すと、BLOB ID のかわりに BLOB の内容自体を返します。<b><code>IBASE_UNIXTIME</code></b> を渡すと、日付/時刻の値を文字列ではなく Unix タイムスタンプで返します。</p>
	 * @return object
	 * @link https://php.net/manual/ja/function.fbird-fetch-object.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_fetch_object($result_id, int $fetch_flag = 0): object {}

	/**
	 * のエイリアス ibase_fetch_row()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_fetch_row()</code>.</p>
	 * @param resource $result_identifier <p>InterBase 結果 ID。</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> は、定数 <b><code>IBASE_TEXT</code></b> および <b><code>IBASE_UNIXTIME</code></b> を論理和で指定します。<b><code>IBASE_TEXT</code></b> を渡すと、BLOB ID のかわりに BLOB の内容自体を返します。<b><code>IBASE_UNIXTIME</code></b> を渡すと、日付/時刻の値を文字列ではなく Unix タイムスタンプで返します。</p>
	 * @return array
	 * @link https://php.net/manual/ja/function.fbird-fetch-row.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_fetch_row($result_identifier, int $fetch_flag = 0): array {}

	/**
	 * のエイリアス ibase_field_info()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_field_info()</code>.</p>
	 * @param resource $result <p>InterBase 結果 ID。</p>
	 * @param int $field_number <p>フィールドのオフセット。</p>
	 * @return array
	 * @link https://php.net/manual/ja/function.fbird-field-info.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_field_info($result, int $field_number): array {}

	/**
	 * のエイリアス ibase_free_event_handler()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_free_event_handler()</code>.</p>
	 * @param resource $event <p><code>ibase_set_event_handler()</code> で作成したイベントリソース。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-free-event-handler.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_free_event_handler($event): bool {}

	/**
	 * のエイリアス ibase_free_query()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_free_query()</code>.</p>
	 * @param resource $query <p><code>ibase_prepare()</code> で準備したクエリ。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-free-query.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_free_query($query): bool {}

	/**
	 * のエイリアス ibase_free_result()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_free_result()</code>.</p>
	 * @param resource $result_identifier <p><code>ibase_query()</code> あるいは <code>ibase_execute()</code> で作成した結果セット。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-free-result.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_free_result($result_identifier): bool {}

	/**
	 * のエイリアス ibase_gen_id()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_gen_id()</code>.</p>
	 * @param string $generator
	 * @param int $increment
	 * @param resource $link_identifier
	 * @return mixed
	 * @link https://php.net/manual/ja/function.fbird-gen-id.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_gen_id(string $generator, int $increment = 1, $link_identifier = NULL) {}

	/**
	 * のエイリアス ibase_maintain_db()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_maintain_db()</code>.</p>
	 * @param resource $service_handle
	 * @param string $db
	 * @param int $action
	 * @param int $argument
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-maintain-db.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_maintain_db($service_handle, string $db, int $action, int $argument = 0): bool {}

	/**
	 * のエイリアス ibase_modify_user()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_modify_user()</code>.</p>
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the database user to modify.</p>
	 * @param string $password <p>The user's new password.</p>
	 * @param string $first_name <p>The user's new first name.</p>
	 * @param string $middle_name <p>The user's new middle name.</p>
	 * @param string $last_name <p>The user's new last name.</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-modify-user.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_modify_user($service_handle, string $user_name, string $password, string $first_name = NULL, string $middle_name = NULL, string $last_name = NULL): bool {}

	/**
	 * のエイリアス ibase_name_result()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_name_result()</code>.</p>
	 * @param resource $result <p>InterBase 結果セット。</p>
	 * @param string $name <p>割り当てる名前。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-name-result.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_name_result($result, string $name): bool {}

	/**
	 * のエイリアス ibase_num_fields()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_num_fields()</code>.</p>
	 * @param resource $result_id <p>InterBase 結果 ID。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.fbird-num-fields.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_num_fields($result_id): int {}

	/**
	 * のエイリアス ibase_num_params()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_num_params()</code>.</p>
	 * @param resource $query <p>プリペアドクエリのハンドル。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.fbird-num-params.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_num_params($query): int {}

	/**
	 * のエイリアス ibase_param_info()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_param_info()</code>.</p>
	 * @param resource $query <p>InterBase プリペアドクエリのハンドル。</p>
	 * @param int $param_number <p>パラメータのオフセット。</p>
	 * @return array
	 * @link https://php.net/manual/ja/function.fbird-param-info.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_param_info($query, int $param_number): array {}

	/**
	 * のエイリアス ibase_pconnect()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_pconnect()</code>.</p>
	 * @param string $database <p><code>database</code>は接続するサーバー上のデータベース ファイルへの正しいパスである必要があります。ローカルなサーバーへの 接続でない場合、使用する接続プロトコルに応じてこの引数の前に' hostname:' (TCP/IP)、'//hostname/' (NetBEUI)、'hostname@' (IPX/SPX)のどれかをつける必要があります。</p>
	 * @param string $username <p>ユーザー名。php.ini ディレクティブ <i>ibase.default_user</i> で設定します。</p>
	 * @param string $password <p><code>username</code> のパスワード。 php.ini ディレクティブ <i>ibase.default_password</i> で設定します。</p>
	 * @param string $charset <p><code>charset</code> はデータベースに関するデフォルトの文字セットです。</p>
	 * @param int $buffers <p><code>buffers</code> はサーバー側のキャッシュに確保されるデータベースバッファの数です。0 または省略された場合、サーバーはデフォルト値を用います。</p>
	 * @param int $dialect <p><code>dialect</code> は、接続時に実行される全ての命令に 関する SQL 方言のデフォルト値を選択し、デフォルトではクライアント ライブラリでサポートされる方言のうち、最高位のものになります。 InterBase 6 以降でのみ有効です。</p>
	 * @param string $role <p>InterBase 5 以降でのみ有効です。</p>
	 * @param int $sync
	 * @return resource
	 * @link https://php.net/manual/ja/function.fbird-pconnect.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_pconnect(string $database = NULL, string $username = NULL, string $password = NULL, string $charset = NULL, int $buffers = NULL, int $dialect = NULL, string $role = NULL, int $sync = NULL) {}

	/**
	 * のエイリアス ibase_prepare()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_prepare()</code>.</p>
	 * @param string $query <p>An InterBase query.</p>
	 * @return resource
	 * @link https://php.net/manual/ja/function.fbird-prepare.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_prepare(string $query) {}

	/**
	 * のエイリアス ibase_query()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_query()</code>.</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @param string $query <p>InterBase クエリ。</p>
	 * @param int $bind_args
	 * @return resource
	 * @link https://php.net/manual/ja/function.fbird-query.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_query($link_identifier = NULL, string $query, int $bind_args = NULL) {}

	/**
	 * のエイリアス ibase_restore()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_restore()</code>.</p>
	 * @param resource $service_handle <p>A previously opened connection to the database server.</p>
	 * @param string $source_file <p>The absolute path on the server where the backup file is located.</p>
	 * @param string $dest_db <p>The path to create the new database on the server. You can also use database alias.</p>
	 * @param int $options <p>Additional options to pass to the database server for restore. The <code>options</code> parameter can be a combination of the following constants: <b><code>IBASE_RES_DEACTIVATE_IDX</code></b>, <b><code>IBASE_RES_NO_SHADOW</code></b>, <b><code>IBASE_RES_NO_VALIDITY</code></b>, <b><code>IBASE_RES_ONE_AT_A_TIME</code></b>, <b><code>IBASE_RES_REPLACE</code></b>, <b><code>IBASE_RES_CREATE</code></b>, <b><code>IBASE_RES_USE_ALL_SPACE</code></b>, <b><code>IBASE_PRP_PAGE_BUFFERS</code></b>, <b><code>IBASE_PRP_SWEEP_INTERVAL</code></b>, <b><code>IBASE_RES_CREATE</code></b>. Read the section about 定義済み定数 for further information.</p>
	 * @param bool $verbose <p>Since the restore process is done on the database server, you don't have any chance to get its output. This argument is useless.</p>
	 * @return mixed
	 * @link https://php.net/manual/ja/function.fbird-restore.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_restore($service_handle, string $source_file, string $dest_db, int $options = 0, bool $verbose = FALSE) {}

	/**
	 * のエイリアス ibase_rollback()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_rollback()</code>.</p>
	 * @param resource $link_or_trans_identifier <p>引数なしでコールされた場合、この関数はデフォルトリンクのデフォルトの トランザクションをロールバックします。引数として接続 ID が渡された場合、 対応する接続のデフォルトのトランザクションをロールバックします。 引数としてトランザクション ID が渡された場合、対応するトランザクションを ロールバックします。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-rollback.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_rollback($link_or_trans_identifier = NULL): bool {}

	/**
	 * のエイリアス ibase_rollback_ret()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_rollback_ret()</code>.</p>
	 * @param resource $link_or_trans_identifier <p>引数なしでコールされた場合、この関数はデフォルトリンクのデフォルトの トランザクションをロールバックします。引数が接続 ID だった場合、対応する 接続のデフォルトのトランザクションをロールバックします。引数が トランザクション ID だった場合、対応するトランザクションをロールバックします。 トランザクションコンテキストはそのまま維持され、このトランザクション内で 実行された文は取り消されません。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-rollback-ret.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_rollback_ret($link_or_trans_identifier = NULL): bool {}

	/**
	 * のエイリアス ibase_server_info()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_server_info()</code>.</p>
	 * @param resource $service_handle
	 * @param int $action
	 * @return string
	 * @link https://php.net/manual/ja/function.fbird-server-info.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_server_info($service_handle, int $action): string {}

	/**
	 * のエイリアス ibase_service_attach()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_service_attach()</code>.</p>
	 * @param string $host
	 * @param string $dba_username
	 * @param string $dba_password
	 * @return resource
	 * @link https://php.net/manual/ja/function.fbird-service-attach.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_service_attach(string $host, string $dba_username, string $dba_password) {}

	/**
	 * のエイリアス ibase_service_detach()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_service_detach()</code>.</p>
	 * @param resource $service_handle
	 * @return bool
	 * @link https://php.net/manual/ja/function.fbird-service-detach.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_service_detach($service_handle): bool {}

	/**
	 * のエイリアス ibase_set_event_handler()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_set_event_handler()</code>.</p>
	 * @param callable $event_handler <p>コールバックは、データベースから特定のイベントが送信された場合に、 イベント名とリンクリソースを引数としてコールされます。</p> <p>イベントハンドラがキャンセルされた場合は、 コールバックは <b><code>FALSE</code></b> を返す必要があります。 その他の返り値は無視されます。 この関数は、最大 15 のイベントを引数として受け取ります。</p>
	 * @param string $event_name1 <p>イベントの名前。</p>
	 * @param string $_ <p>最大で 15 のイベントを指定できます。</p>
	 * @return resource
	 * @link https://php.net/manual/ja/function.fbird-set-event-handler.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_set_event_handler(callable $event_handler, string $event_name1, string $_ = NULL) {}

	/**
	 * のエイリアス ibase_trans()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_trans()</code>.</p>
	 * @param int $trans_args <p><code>trans_args</code> は、以下の <b><code>IBASE_READ</code></b>、 <b><code>IBASE_WRITE</code></b>、 <b><code>IBASE_COMMITTED</code></b>、 <b><code>IBASE_CONSISTENCY</code></b>、 <b><code>IBASE_CONCURRENCY</code></b>、 <b><code>IBASE_REC_VERSION</code></b>、 <b><code>IBASE_REC_NO_VERSION</code></b>、 <b><code>IBASE_WAIT</code></b> および <b><code>IBASE_NOWAIT</code></b> の組み合わせとなります。</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @return resource
	 * @link https://php.net/manual/ja/function.fbird-trans.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_trans(int $trans_args = NULL, $link_identifier = NULL) {}

	/**
	 * のエイリアス ibase_wait_event()
	 * <p>この関数は次の関数のエイリアスです。 <code>ibase_wait_event()</code>.</p>
	 * @param string $event_name1 <p>イベントの名前。</p>
	 * @param string $_
	 * @return string
	 * @link https://php.net/manual/ja/function.fbird-wait-event.php
	 * @since PHP 5, PHP 7
	 */
	function fbird_wait_event(string $event_name1, string $_ = NULL): string {}

	/**
	 * Add a user to a security database
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the new database user.</p>
	 * @param string $password <p>The password of the new user.</p>
	 * @param string $first_name <p>The first name of the new database user.</p>
	 * @param string $middle_name <p>The middle name of the new database user.</p>
	 * @param string $last_name <p>The last name of the new database user.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-add-user.php
	 * @see ibase_modify_user(), ibase_delete_user()
	 * @since PHP 5, PHP 7
	 */
	function ibase_add_user($service_handle, string $user_name, string $password, string $first_name = NULL, string $middle_name = NULL, string $last_name = NULL): bool {}

	/**
	 * 直近のクエリで変更された行の数を返す
	 * <p>この関数は、<code>link_identifier</code> で指定された トランザクション内で実行された直近のクエリ(INSERT、UPDATE あるいは DELETE)によって変更された行の数を返します。</p>
	 * @param resource $link_identifier <p>トランザクションのコンテキスト。 <code>link_identifier</code> が接続リソースの場合、 そのデフォルトのトランザクションが使用されます。</p>
	 * @return int <p>変更された行数を整数値で返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-affected-rows.php
	 * @see ibase_query(), ibase_execute()
	 * @since PHP 5, PHP 7
	 */
	function ibase_affected_rows($link_identifier = NULL): int {}

	/**
	 * Initiates a backup task in the service manager and returns immediately
	 * <p>This function passes the arguments to the (remote) database server. There it starts a new backup process. Therefore you won't get any responses.</p>
	 * @param resource $service_handle <p>A previously opened connection to the database server.</p>
	 * @param string $source_db <p>The absolute file path to the database on the database server. You can also use a database alias.</p>
	 * @param string $dest_file <p>The path to the backup file on the database server.</p>
	 * @param int $options <p>Additional options to pass to the database server for backup. The <code>options</code> parameter can be a combination of the following constants: <b><code>IBASE_BKP_IGNORE_CHECKSUMS</code></b>, <b><code>IBASE_BKP_IGNORE_LIMBO</code></b>, <b><code>IBASE_BKP_METADATA_ONLY</code></b>, <b><code>IBASE_BKP_NO_GARBAGE_COLLECT</code></b>, <b><code>IBASE_BKP_OLD_DESCRIPTIONS</code></b>, <b><code>IBASE_BKP_NON_TRANSPORTABLE</code></b> or <b><code>IBASE_BKP_CONVERT</code></b>. Read the section about 定義済み定数 for further information.</p>
	 * @param bool $verbose <p>Since the backup process is done on the database server, you don't have any chance to get its output. This argument is useless.</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>Since the backup process is done on the (remote) server, this function just passes the arguments to it. While the arguments are legal, you won't get <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/ja/function.ibase-backup.php
	 * @see ibase_restore()
	 * @since PHP 5, PHP 7
	 */
	function ibase_backup($service_handle, string $source_db, string $dest_file, int $options = 0, bool $verbose = FALSE) {}

	/**
	 * 生成された blob にデータを追加する
	 * <p><b>ibase_blob_add()</b> は、 <code>ibase_blob_create()</code> で作成した blob にデータを追加します。</p>
	 * @param resource $blob_handle <p><code>ibase_blob_create()</code> でオープンした blob ハンドル。</p>
	 * @param string $data <p>追加するデータ。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.ibase-blob-add.php
	 * @see ibase_blob_cancel(), ibase_blob_close(), ibase_blob_create(), ibase_blob_import()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_add($blob_handle, string $data): void {}

	/**
	 * blob の生成を取り消す
	 * <p>この関数は、まだ <code>ibase_blob_close()</code> で閉じられていない場合に BLOB を捨てます。</p>
	 * @param resource $blob_handle <p><code>ibase_blob_create()</code> でオープンした blob ハンドル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-blob-cancel.php
	 * @see ibase_blob_close(), ibase_blob_create(), ibase_blob_import()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_cancel($blob_handle): bool {}

	/**
	 * blob を閉じる
	 * <p>この関数は、読み込み用に <code>ibase_blob_open()</code> でオープンされたかあるいは書き込み用に <code>ibase_blob_create()</code> でオープンされた BLOB を閉じます。</p>
	 * @param resource $blob_handle <p><code>ibase_blob_create()</code> あるいは <code>ibase_blob_open()</code> でオープンした blob ハンドル。</p>
	 * @return mixed <p>BLOB が読み込み用であった場合、 この関数は成功時に <b><code>TRUE</code></b> を返します。一方 BLOB が書き込み用であった場合、 データベースによって割り当てられた BLOB ID を文字列で返します。 失敗した場合は、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-blob-close.php
	 * @see ibase_blob_cancel(), ibase_blob_open()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_close($blob_handle) {}

	/**
	 * データを追加するために blob を生成する
	 * <p><b>ibase_blob_create()</b> は、 データを書き込むための新しい BLOB を生成します。</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @return resource <p><code>ibase_blob_add()</code> で使用するための BLOB ハンドルを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-blob-create.php
	 * @see ibase_blob_add(), ibase_blob_cancel(), ibase_blob_close(), ibase_blob_import()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_create($link_identifier = NULL) {}

	/**
	 * ブラウザに blob の内容を出力する
	 * <p>この関数は読み込み用に BLOB をオープンし、直接その内容を標準出力 (たいていの場合はブラウザ) に送信します。</p>
	 * @param string $blob_id
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-blob-echo.php
	 * @see ibase_blob_open(), ibase_blob_close(), ibase_blob_get()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_echo(string $blob_id): bool {}

	/**
	 * オープンした blob から len バイト分のデータを取得する
	 * <p>この関数は、<code>ibase_blob_open()</code> によって読み込み用に オープンした BLOB から最大 <code>len</code> バイトを返します。</p><p><b>注意</b>:</p><p><code>ibase_blob_create()</code> で書き込み用にオープンした BLOB から読み込むことはできません。</p>
	 * @param resource $blob_handle <p><code>ibase_blob_open()</code> でオープンした BLOB ハンドル。</p>
	 * @param int $len <p>返されるデータのサイズ。</p>
	 * @return string <p>BLOB から最大 <code>len</code> バイトを返します。 失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-blob-get.php
	 * @see ibase_blob_open(), ibase_blob_close(), ibase_blob_echo()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_get($blob_handle, int $len): string {}

	/**
	 * blob を生成し、ファイルをコピーし、閉じる
	 * <p>この関数は BLOB を作成し、その中にファイルのすべての内容を読み込み、 それを閉じ、関連付けられた BLOB ID を返します。</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @param resource $file_handle <p><code>fopen()</code> が返すファイルハンドル。</p>
	 * @return string <p>成功した場合に BLOB の ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-blob-import.php
	 * @see ibase_blob_add(), ibase_blob_cancel(), ibase_blob_close(), ibase_blob_create()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_import($link_identifier, $file_handle): string {}

	/**
	 * blob の長さと他の便利な情報を返す
	 * <p>BLOB の長さや他の便利な情報を返します。</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @param string $blob_id <p>BLOB の ID。</p>
	 * @return array <p>BLOB についての情報を含む配列を返します。返される情報には BLOB の長さ・含んでいるセグメントの数・最大のセグメントのサイズ・ ストリーム BLOB とセグメント BLOB のどちらであるかなどがあります。</p>
	 * @link https://php.net/manual/ja/function.ibase-blob-info.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_info($link_identifier, string $blob_id): array {}

	/**
	 * データの一部を取得するために blob をオープンする
	 * <p>既存の BLOB を読み込み用にオープンします。</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @param string $blob_id <p>BLOB の ID。</p>
	 * @return resource <p>後で <code>ibase_blob_get()</code> とともに使用する BLOB ハンドルを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-blob-open.php
	 * @see ibase_blob_close(), ibase_blob_echo(), ibase_blob_get()
	 * @since PHP 5, PHP 7
	 */
	function ibase_blob_open($link_identifier, string $blob_id) {}

	/**
	 * InterBase データベースへの接続を閉じる
	 * <p><code>ibase_connect()</code> から返された接続 ID が指す InterBase データベースへのリンクを閉じます。 接続 ID が省略された場合、最後にオープンされたリンクが仮定されます。 リンクにおけるデフォルトのトランザクションがコミットされ、 他のトランザクションはロールバックされます。</p>
	 * @param resource $connection_id <p><code>ibase_connect()</code> が返す InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-close.php
	 * @see ibase_connect(), ibase_pconnect()
	 * @since PHP 5, PHP 7
	 */
	function ibase_close($connection_id = NULL): bool {}

	/**
	 * トランザクションをコミットする
	 * <p>トランザクションをコミットします。</p>
	 * @param resource $link_or_trans_identifier <p>引数なしでコールされた場合、この関数はデフォルトリンクの デフォルトのトランザクションをコミットします。引数が接続 ID であった場合は、対応する接続のデフォルトのトランザクションを コミットします。引数がトランザクション ID であった場合は、 対応するトランザクションがコミットされます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-commit.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_commit($link_or_trans_identifier = NULL): bool {}

	/**
	 * トランザクションを閉じずにコミットする
	 * <p>トランザクションを閉じずにコミットします。</p>
	 * @param resource $link_or_trans_identifier <p>引数なしでコールされた場合、この関数はデフォルトリンクのデフォルトの トランザクションをコミットします。引数が接続 ID だった場合、対応する 接続のデフォルトのトランザクションをコミットします。引数が トランザクション ID だった場合、対応するトランザクションをコミットします。 トランザクションコンテキストはそのまま維持され、このトランザクション内で 実行された文は取り消されません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-commit-ret.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_commit_ret($link_or_trans_identifier = NULL): bool {}

	/**
	 * データベースへの接続をオープンする
	 * <p>Firebird/InterBase サーバーへの接続を確立します。</p><p>同じ引数で <b>ibase_connect()</b> が再度コールされた場合、 新規のリンクは作成されず、代わりに既にオープンされているリンクの リンク ID が返されます。 <code>ibase_close()</code> を明示的にコールしない限り、 サーバーへのリンクはスクリプトの実行終了時に閉じられます。</p>
	 * @param string $database <p><code>database</code>は接続するサーバー上のデータベース ファイルへの正しいパスである必要があります。ローカルなサーバーへの 接続でない場合、使用する接続プロトコルに応じてこの引数の前に 'hostname:' (TCP/IP)、'hostname/port:' (カスタム TCP ポート上での interbase サーバーでの TCP/IP)、'//hostname/' (NetBEUI) のどれかをつける必要があります。</p>
	 * @param string $username <p>ユーザー名。php.ini ディレクティブ <i>ibase.default_user</i> で設定します。</p>
	 * @param string $password <p><code>username</code> のパスワード。 php.ini ディレクティブ <i>ibase.default_password</i> で設定します。</p>
	 * @param string $charset <p><code>charset</code> はデータベースに関するデフォルトの文字セットです。</p>
	 * @param int $buffers <p><code>buffers</code> はサーバー側のキャッシュに確保されるデータベースバッファの数です。0 または省略された場合、サーバーはデフォルト値を用います。</p>
	 * @param int $dialect <p><code>dialect</code> は、接続時に実行される全ての命令に 関する SQL 方言のデフォルト値を選択し、デフォルトではクライアント ライブラリでサポートされる方言のうち、最高位のものになります。</p>
	 * @param string $role <p>InterBase 5 以降でのみ有効です。</p>
	 * @param int $sync
	 * @return resource <p>成功した場合に Firebird/InterBase リンク ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-connect.php
	 * @see ibase_pconnect(), ibase_close()
	 * @since PHP 5, PHP 7
	 */
	function ibase_connect(string $database = NULL, string $username = NULL, string $password = NULL, string $charset = NULL, int $buffers = NULL, int $dialect = NULL, string $role = NULL, int $sync = NULL) {}

	/**
	 * データベースについての統計情報を要求する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $service_handle
	 * @param string $db
	 * @param int $action
	 * @param int $argument
	 * @return string
	 * @link https://php.net/manual/ja/function.ibase-db-info.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_db_info($service_handle, string $db, int $action, int $argument = 0): string {}

	/**
	 * Delete a user from a security database
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the user you want to delete from the database.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-delete-user.php
	 * @see ibase_add_user(), ibase_modify_user()
	 * @since PHP 5, PHP 7
	 */
	function ibase_delete_user($service_handle, string $user_name): bool {}

	/**
	 * データベースを削除する
	 * <p>この関数は、<code>ibase_connect()</code> あるいは <code>ibase_pconnect()</code> のいずれかによってオープンされたデータベースを削除します。 データベースがクローズされ、サーバーから削除されます。</p>
	 * @param resource $connection <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-drop-db.php
	 * @see ibase_connect(), ibase_pconnect()
	 * @since PHP 5, PHP 7
	 */
	function ibase_drop_db($connection = NULL): bool {}

	/**
	 * エラーコードを返す
	 * <p>直近の InterBase 関数のコールによって得られたエラーコードを返します。</p>
	 * @return int <p>エラーコードを表す整数、あるいはエラーが発生しなかった場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-errcode.php
	 * @see ibase_errmsg()
	 * @since PHP 5, PHP 7
	 */
	function ibase_errcode(): int {}

	/**
	 * エラーメッセージを返す
	 * <p>直近の InterBase 関数コールの結果として得られるエラーメッセージを返します。</p>
	 * @return string <p>エラーメッセージを表す文字列、あるいはエラーが発生しなかった場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-errmsg.php
	 * @see ibase_errcode()
	 * @since PHP 5, PHP 7
	 */
	function ibase_errmsg(): string {}

	/**
	 * 準備されたクエリを実行する
	 * <p><code>ibase_prepare()</code> で準備したクエリを実行します。</p><p>いくつかのパラメータが変わるだけで同じクエリを 複数回実行する場合には、この関数は <code>ibase_query()</code> を使用するよりもずっと効率的です。</p>
	 * @param resource $query <p><code>ibase_prepare()</code> で準備した InterBase クエリ。</p>
	 * @param mixed $_
	 * @return resource <p>クエリがエラーを発生させた場合は <b><code>FALSE</code></b> を返します。 クエリが成功し、結果セット(空のセットとなる可能性もありえます)を 返した場合(SELECT クエリなど)は結果 ID を返します。クエリが成功し、 結果セットが返されなかった場合は <b><code>TRUE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>この関数はクエリによって変更された行の数を 返します(行を変更するクエリで、結果が 0 より大きかった場合)。 クエリは成功したが、どの行も変更されなかった場合(例: 存在しない 行に対する UPDATE)は <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-execute.php
	 * @see ibase_query()
	 * @since PHP 5, PHP 7
	 */
	function ibase_execute($query, $_ = NULL) {}

	/**
	 * クエリの結果から、行を連想配列として取得する
	 * <p>クエリの結果の行を連想配列で返します。</p><p><b>ibase_fetch_assoc()</b> は、 <code>result</code> から結果を 1 行取得します。 同じフィールド名のカラムが 2 つ以上存在する場合、最後のカラムが 優先されます。同名のその他のカラムにアクセスするには、 <code>ibase_fetch_row()</code> を使用して数値添字を用いるか あるいはクエリ中でカラムに別名をつけます。</p>
	 * @param resource $result <p>結果ハンドル。</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> は、定数 <b><code>IBASE_TEXT</code></b> および <b><code>IBASE_UNIXTIME</code></b> を論理和で指定します。<b><code>IBASE_TEXT</code></b> を渡すと、BLOB ID のかわりに BLOB の内容自体を返します。<b><code>IBASE_UNIXTIME</code></b> を渡すと、日付/時刻の値を文字列ではなく Unix タイムスタンプで返します。</p>
	 * @return array <p><b>ibase_fetch_assoc()</b> は、取得した行に対応する連想配列を返します。 続けてコールすると、結果セットの次の行を返し、 行がもうない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-fetch-assoc.php
	 * @see ibase_fetch_row(), ibase_fetch_object()
	 * @since PHP 5, PHP 7
	 */
	function ibase_fetch_assoc($result, int $fetch_flag = 0): array {}

	/**
	 * InterBase データベースからオブジェクトを得る
	 * <p>指定した結果 ID から、行を疑似オブジェクトとして取得します。</p><p><b>ibase_fetch_object()</b> を続けてコールすると、 結果セットの次の行を返します。</p>
	 * @param resource $result_id <p><code>ibase_query()</code> あるいは <code>ibase_execute()</code> で取得した InterBase 結果 ID。</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> は、定数 <b><code>IBASE_TEXT</code></b> および <b><code>IBASE_UNIXTIME</code></b> を論理和で指定します。<b><code>IBASE_TEXT</code></b> を渡すと、BLOB ID のかわりに BLOB の内容自体を返します。<b><code>IBASE_UNIXTIME</code></b> を渡すと、日付/時刻の値を文字列ではなく Unix タイムスタンプで返します。</p>
	 * @return object <p>次の行の情報を含むオブジェクト、 あるいは行がもうない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-fetch-object.php
	 * @see ibase_fetch_row(), ibase_fetch_assoc()
	 * @since PHP 5, PHP 7
	 */
	function ibase_fetch_object($result_id, int $fetch_flag = 0): object {}

	/**
	 * InterBase データベースから 1 行分の結果を取得する
	 * <p><b>ibase_fetch_row()</b> は、指定した <code>result_identifier</code> に関連付けられた結果からデータを 1 行取得します。</p><p><b>ibase_fetch_row()</b> を続けてコールすると、 結果セットの次の行を返します。行がもうない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @param resource $result_identifier <p>InterBase 結果 ID。</p>
	 * @param int $fetch_flag <p><code>fetch_flag</code> は、定数 <b><code>IBASE_TEXT</code></b> および <b><code>IBASE_UNIXTIME</code></b> を論理和で指定します。<b><code>IBASE_TEXT</code></b> を渡すと、BLOB ID のかわりに BLOB の内容自体を返します。<b><code>IBASE_UNIXTIME</code></b> を渡すと、日付/時刻の値を文字列ではなく Unix タイムスタンプで返します。</p>
	 * @return array <p>取得した行に対応する配列を返します。行がもうない場合には <b><code>FALSE</code></b> を返します。 結果の各行は配列のオフセットに格納され、 このオフセットは 0 から始まります。</p>
	 * @link https://php.net/manual/ja/function.ibase-fetch-row.php
	 * @see ibase_fetch_assoc(), ibase_fetch_object()
	 * @since PHP 5, PHP 7
	 */
	function ibase_fetch_row($result_identifier, int $fetch_flag = 0): array {}

	/**
	 * フィールドに関する情報を得る
	 * <p>select クエリが実行された後、フィールドに関する情報を配列として返します。</p>
	 * @param resource $result <p>InterBase 結果 ID。</p>
	 * @param int $field_number <p>フィールドのオフセット。</p>
	 * @return array <p>配列を返します。配列に含まれるキーは <i>name</i>、 <i>alias</i>、<i>relation</i>、 <i>length</i> そして <i>type</i> です。</p>
	 * @link https://php.net/manual/ja/function.ibase-field-info.php
	 * @see ibase_num_fields()
	 * @since PHP 5, PHP 7
	 */
	function ibase_field_info($result, int $field_number): array {}

	/**
	 * 登録済みのイベントハンドラをキャンセルする
	 * <p>この関数は、<code>event</code> で指定した登録済みの イベントハンドラをキャンセルします。イベントに対応して登録されていた コールバック関数は、もはやコールされません。</p>
	 * @param resource $event <p><code>ibase_set_event_handler()</code> で作成したイベントリソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-free-event-handler.php
	 * @see ibase_set_event_handler()
	 * @since PHP 5, PHP 7
	 */
	function ibase_free_event_handler($event): bool {}

	/**
	 * プリペアドクエリにより確保されたメモリを解放する
	 * <p>プリペアドクエリを解放します。</p>
	 * @param resource $query <p><code>ibase_prepare()</code> で準備したクエリ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-free-query.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_free_query($query): bool {}

	/**
	 * 結果セットを解放する
	 * <p>結果セットを解放します。</p>
	 * @param resource $result_identifier <p><code>ibase_query()</code> あるいは <code>ibase_execute()</code> で作成した結果セット。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-free-result.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_free_result($result_identifier): bool {}

	/**
	 * 指定した名前のジェネレータをひとつ加算し、その新しい値を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $generator
	 * @param int $increment
	 * @param resource $link_identifier
	 * @return mixed <p>新しいジェネレータの値を整数で返します。値が大きくなりすぎた場合は文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-gen-id.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_gen_id(string $generator, int $increment = 1, $link_identifier = NULL) {}

	/**
	 * データベースサーバーでメンテナンスコマンドを実行する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $service_handle
	 * @param string $db
	 * @param int $action
	 * @param int $argument
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-maintain-db.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_maintain_db($service_handle, string $db, int $action, int $argument = 0): bool {}

	/**
	 * Modify a user to a security database
	 * @param resource $service_handle <p>The handle on the database server service.</p>
	 * @param string $user_name <p>The login name of the database user to modify.</p>
	 * @param string $password <p>The user's new password.</p>
	 * @param string $first_name <p>The user's new first name.</p>
	 * @param string $middle_name <p>The user's new middle name.</p>
	 * @param string $last_name <p>The user's new last name.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-modify-user.php
	 * @see ibase_add_user(), ibase_delete_user()
	 * @since PHP 5, PHP 7
	 */
	function ibase_modify_user($service_handle, string $user_name, string $password, string $first_name = NULL, string $middle_name = NULL, string $last_name = NULL): bool {}

	/**
	 * 結果セットに名前を割り当てる
	 * <p>この関数は、結果セットに新しい名前を割り当てます。この名前は、後で UPDATE|DELETE ... WHERE CURRENT OF <code>name</code> 文で使用します。</p>
	 * @param resource $result <p>InterBase 結果セット。</p>
	 * @param string $name <p>割り当てる名前。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-name-result.php
	 * @see ibase_prepare(), ibase_execute()
	 * @since PHP 5, PHP 7
	 */
	function ibase_name_result($result, string $name): bool {}

	/**
	 * 結果セットにおけるフィールド数を得る
	 * <p>結果セットにおけるフィールド数を整数として返します。</p>
	 * @param resource $result_id <p>InterBase 結果 ID。</p>
	 * @return int <p>フィールドの数を整数値で返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-num-fields.php
	 * @see ibase_field_info()
	 * @since PHP 5, PHP 7
	 */
	function ibase_num_fields($result_id): int {}

	/**
	 * プリペアドクエリのパラメータ数を返す
	 * <p>この関数は、<code>query</code> で指定した プリペアドクエリのパラメータの数を返します。 <code>ibase_execute()</code> をコールする際に、 この数と同じだけのバインド引数が割り当てられている必要があります。</p>
	 * @param resource $query <p>プリペアドクエリのハンドル。</p>
	 * @return int <p>パラメータの数を整数値で返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-num-params.php
	 * @see ibase_prepare(), ibase_param_info()
	 * @since PHP 5, PHP 7
	 */
	function ibase_num_params($query): int {}

	/**
	 * プリペアドクエリのパラメータに関する情報を返す
	 * <p>クエリが準備された後に、パラメータについての情報を配列で返します。</p>
	 * @param resource $query <p>InterBase プリペアドクエリのハンドル。</p>
	 * @param int $param_number <p>パラメータのオフセット。</p>
	 * @return array <p>配列を返します。配列に含まれるキーは <i>name</i>、 <i>alias</i>、<i>relation</i>、 <i>length</i> および <i>type</i> となります。</p>
	 * @link https://php.net/manual/ja/function.ibase-param-info.php
	 * @see ibase_field_info(), ibase_num_params()
	 * @since PHP 5, PHP 7
	 */
	function ibase_param_info($query, int $param_number): array {}

	/**
	 * InterBase データベースへの持続的接続をオープンする
	 * <p>InterBase データベースへの持続的な接続をオープンします。</p><p><b>ibase_pconnect()</b> の動作は <code>ibase_connect()</code> と非常に似ていますが、 大きな違いが二つあります。</p><p>まず、この関数は接続時に同じパラメータで既にオープンされている (持続的)リンクを探します。見つかった場合、新規接続をオープンする 代わりにそのリンクの ID が返されます。</p><p>2 番目の違いとしては、InterBase サーバーへの接続は スクリプト終了時にも閉じられないということです。 代わりに、そのリンクは今後使用するためにオープンされたままとなります (<code>ibase_close()</code> は <b>ibase_pconnect()</b> によりオープンされたリンクを閉じません)。 このため、この型のリンクは'持続的(persistent)'と呼ばれます。</p>
	 * @param string $database <p><code>database</code>は接続するサーバー上のデータベース ファイルへの正しいパスである必要があります。ローカルなサーバーへの 接続でない場合、使用する接続プロトコルに応じてこの引数の前に' hostname:' (TCP/IP)、'//hostname/' (NetBEUI)、'hostname@' (IPX/SPX)のどれかをつける必要があります。</p>
	 * @param string $username <p>ユーザー名。php.ini ディレクティブ <i>ibase.default_user</i> で設定します。</p>
	 * @param string $password <p><code>username</code> のパスワード。 php.ini ディレクティブ <i>ibase.default_password</i> で設定します。</p>
	 * @param string $charset <p><code>charset</code> はデータベースに関するデフォルトの文字セットです。</p>
	 * @param int $buffers <p><code>buffers</code> はサーバー側のキャッシュに確保されるデータベースバッファの数です。0 または省略された場合、サーバーはデフォルト値を用います。</p>
	 * @param int $dialect <p><code>dialect</code> は、接続時に実行される全ての命令に 関する SQL 方言のデフォルト値を選択し、デフォルトではクライアント ライブラリでサポートされる方言のうち、最高位のものになります。 InterBase 6 以降でのみ有効です。</p>
	 * @param string $role <p>InterBase 5 以降でのみ有効です。</p>
	 * @param int $sync
	 * @return resource <p>成功した場合に InterBase リンク ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-pconnect.php
	 * @see ibase_close(), ibase_connect()
	 * @since PHP 5, PHP 7
	 */
	function ibase_pconnect(string $database = NULL, string $username = NULL, string $password = NULL, string $charset = NULL, int $buffers = NULL, int $dialect = NULL, string $role = NULL, int $sync = NULL) {}

	/**
	 * Prepare a query for later binding of parameter placeholders and execution
	 * <p>Prepare a query for later binding of parameter placeholders and execution (via <code>ibase_execute()</code>).</p>
	 * @param string $query <p>An InterBase query.</p>
	 * @return resource <p>Returns a prepared query handle, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/ja/function.ibase-prepare.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_prepare(string $query) {}

	/**
	 * InterBase データベースでクエリを実行する
	 * <p>InterBase データベース上でクエリを実行します。</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @param string $query <p>InterBase クエリ。</p>
	 * @param int $bind_args
	 * @return resource <p>クエリが失敗した場合、<b><code>FALSE</code></b> を返します。成功した場合、 (SELECT クエリのような) 結果の行がある場合、結果 ID を返します。 クエリが成功し、結果がない場合は <b><code>TRUE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>PHP 5.0.0 以降では、INSERT・UPDATE・DELETE 文に対してはこの関数は 変更された行数を返します。後方互換性を確保するため、これらの文で クエリが成功したものの 1 行も更新されなかった場合には <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-query.php
	 * @see ibase_errmsg(), ibase_fetch_row(), ibase_fetch_object(), ibase_free_result()
	 * @since PHP 5, PHP 7
	 */
	function ibase_query($link_identifier = NULL, string $query, int $bind_args = NULL) {}

	/**
	 * Initiates a restore task in the service manager and returns immediately
	 * <p>This function passes the arguments to the (remote) database server. There it starts a new restore process. Therefore you won't get any responses.</p>
	 * @param resource $service_handle <p>A previously opened connection to the database server.</p>
	 * @param string $source_file <p>The absolute path on the server where the backup file is located.</p>
	 * @param string $dest_db <p>The path to create the new database on the server. You can also use database alias.</p>
	 * @param int $options <p>Additional options to pass to the database server for restore. The <code>options</code> parameter can be a combination of the following constants: <b><code>IBASE_RES_DEACTIVATE_IDX</code></b>, <b><code>IBASE_RES_NO_SHADOW</code></b>, <b><code>IBASE_RES_NO_VALIDITY</code></b>, <b><code>IBASE_RES_ONE_AT_A_TIME</code></b>, <b><code>IBASE_RES_REPLACE</code></b>, <b><code>IBASE_RES_CREATE</code></b>, <b><code>IBASE_RES_USE_ALL_SPACE</code></b>, <b><code>IBASE_PRP_PAGE_BUFFERS</code></b>, <b><code>IBASE_PRP_SWEEP_INTERVAL</code></b>, <b><code>IBASE_RES_CREATE</code></b>. Read the section about 定義済み定数 for further information.</p>
	 * @param bool $verbose <p>Since the restore process is done on the database server, you don't have any chance to get its output. This argument is useless.</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>Since the restore process is done on the (remote) server, this function just passes the arguments to it. While the arguments are legal, you won't get <b><code>FALSE</code></b>.</p>
	 * @link https://php.net/manual/ja/function.ibase-restore.php
	 * @see ibase_backup()
	 * @since PHP 5, PHP 7
	 */
	function ibase_restore($service_handle, string $source_file, string $dest_db, int $options = 0, bool $verbose = FALSE) {}

	/**
	 * トランザクションをロールバックする
	 * <p>トランザクションをロールバックします。</p>
	 * @param resource $link_or_trans_identifier <p>引数なしでコールされた場合、この関数はデフォルトリンクのデフォルトの トランザクションをロールバックします。引数として接続 ID が渡された場合、 対応する接続のデフォルトのトランザクションをロールバックします。 引数としてトランザクション ID が渡された場合、対応するトランザクションを ロールバックします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-rollback.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_rollback($link_or_trans_identifier = NULL): bool {}

	/**
	 * トランザクションを閉じずにロールバックする
	 * <p>トランザクションを閉じずにロールバックします。</p>
	 * @param resource $link_or_trans_identifier <p>引数なしでコールされた場合、この関数はデフォルトリンクのデフォルトの トランザクションをロールバックします。引数が接続 ID だった場合、対応する 接続のデフォルトのトランザクションをロールバックします。引数が トランザクション ID だった場合、対応するトランザクションをロールバックします。 トランザクションコンテキストはそのまま維持され、このトランザクション内で 実行された文は取り消されません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-rollback-ret.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_rollback_ret($link_or_trans_identifier = NULL): bool {}

	/**
	 * データベースサーバーについての情報を要求する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $service_handle
	 * @param int $action
	 * @return string
	 * @link https://php.net/manual/ja/function.ibase-server-info.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_server_info($service_handle, int $action): string {}

	/**
	 * サービスマネージャに接続する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $host
	 * @param string $dba_username
	 * @param string $dba_password
	 * @return resource
	 * @link https://php.net/manual/ja/function.ibase-service-attach.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_service_attach(string $host, string $dba_username, string $dba_password) {}

	/**
	 * サービスマネージャとの接続を切断する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $service_handle
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-service-detach.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_service_detach($service_handle): bool {}

	/**
	 * イベントが発生した際にコールされるコールバック関数を登録する
	 * <p>この関数は、指定したイベントのハンドラとして PHP ユーザー関数を登録します。</p>
	 * @param callable $event_handler <p>コールバックは、データベースから特定のイベントが送信された場合に、 イベント名とリンクリソースを引数としてコールされます。</p> <p>イベントハンドラがキャンセルされた場合は、 コールバックは <b><code>FALSE</code></b> を返す必要があります。 その他の返り値は無視されます。 この関数は、最大 15 のイベントを引数として受け取ります。</p>
	 * @param string $event_name1 <p>イベントの名前。</p>
	 * @param string $_ <p>最大で 15 のイベントを指定できます。</p>
	 * @return resource <p>返される値はイベントのリソースです。このリソースは、 <code>ibase_free_event_handler()</code> でイベントハンドラを開放する際に使用可能です。</p>
	 * @link https://php.net/manual/ja/function.ibase-set-event-handler.php
	 * @see ibase_free_event_handler(), ibase_wait_event()
	 * @since PHP 5, PHP 7
	 */
	function ibase_set_event_handler(callable $event_handler, string $event_name1, string $_ = NULL) {}

	/**
	 * トランザクションを開始する
	 * <p>トランザクションを開始します。</p><p><b>注意</b>:</p><p><b>ibase_trans()</b> を最初にコールした際には、接続の デフォルトのトランザクションを返しません。<b>ibase_trans()</b> によって開始されたすべてのトランザクションは、<code>ibase_commit()</code> や <code>ibase_rollback()</code> を使用してコミットあるいは ロールバックを明示的に行わない限り、スクリプトの終了時に自動的に ロールバックされます。</p><p><b>注意</b>:</p><p>この関数は複数の <code>trans_args</code> および <code>link_identifier</code> を指定することが可能です。これにより、 複数のデータベース接続にまたがるトランザクションを扱えるようになり、 2 フェーズコミット機能を使用したコミットが可能になります。つまり、複数の データベースの更新内容が成功したか失敗したかによる判断ができるということです。 これは、ひとつのクエリで異なるデータベースのテーブルを同時に使用できるという ことではありません!</p><p>複数データベースにまたがるトランザクションを使用する場合、 <code>ibase_query()</code> および <code>ibase_prepare()</code> をコールする際には <code>link_id</code> および <code>transaction_id</code> の両方を指定する必要があります。</p>
	 * @param int $trans_args <p><code>trans_args</code> は、以下の <b><code>IBASE_READ</code></b>、 <b><code>IBASE_WRITE</code></b>、 <b><code>IBASE_COMMITTED</code></b>、 <b><code>IBASE_CONSISTENCY</code></b>、 <b><code>IBASE_CONCURRENCY</code></b>、 <b><code>IBASE_REC_VERSION</code></b>、 <b><code>IBASE_REC_NO_VERSION</code></b>、 <b><code>IBASE_WAIT</code></b> および <b><code>IBASE_NOWAIT</code></b> の組み合わせとなります。</p>
	 * @param resource $link_identifier <p>InterBase リンク ID。省略した場合は、 最後にオープンしたリンクを使用します。</p>
	 * @return resource <p>トランザクションハンドル、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-trans.php
	 * @since PHP 5, PHP 7
	 */
	function ibase_trans(int $trans_args = NULL, $link_identifier = NULL) {}

	/**
	 * データベースでイベントが発生するのを待つ
	 * <p>この関数は、指定したイベントのうちのひとつがデータベースで発生するまで スクリプトの実行を停止します。発生したイベントの名前を返します。 この関数は、最大 15 のイベントを指定可能です。</p>
	 * @param string $event_name1 <p>イベントの名前。</p>
	 * @param string $_
	 * @return string <p>発生したイベントの名前を返します。</p>
	 * @link https://php.net/manual/ja/function.ibase-wait-event.php
	 * @see ibase_set_event_handler(), ibase_free_event_handler()
	 * @since PHP 5, PHP 7
	 */
	function ibase_wait_event(string $event_name1, string $_ = NULL): string {}

	/**
	 * <code>ibase_backup()</code> へのオプション
	 */
	define('IBASE_BKP_CONVERT', null);

	define('IBASE_BKP_IGNORE_CHECKSUMS', null);

	define('IBASE_BKP_IGNORE_LIMBO', null);

	define('IBASE_BKP_METADATA_ONLY', null);

	define('IBASE_BKP_NO_GARBAGE_COLLECT', null);

	define('IBASE_BKP_NON_TRANSPORTABLE', null);

	define('IBASE_BKP_OLD_DESCRIPTIONS', null);

	/**
	 * 分離レベルを 'read committed' にしてトランザクションを開始します。 このフラグは <b><code>IBASE_REC_VERSION</code></b> あるいは <b><code>IBASE_REC_NO_VERSION</code></b> とともに使用する必要があります。 トランザクションの開始以降にコミットされた内容についてもアクセス可能と なります。<b><code>IBASE_REC_NO_VERSION</code></b> が指定された場合、 最新バージョンのデータのみが読み込み可能となります。 <b><code>IBASE_REC_VERSION</code></b> が指定された場合、他の トランザクションで処理が完了していない変更についても読み込むことが できます。
	 */
	define('IBASE_COMMITTED', null);

	/**
	 * 分離レベルを 'concurrency' (あるいは 'snapshot') にして トランザクションを開始します。すべてのテーブルへのアクセスが 可能ですが、トランザクションの開始以降に別のトランザクションに よってコミットされた内容を見ることはできません。
	 */
	define('IBASE_CONCURRENCY', null);

	/**
	 * 分離レベルを 'consistency' にしてトランザクションを開始します。 他のトランザクションによって変更中のテーブルを読み込むことは できません。
	 */
	define('IBASE_CONSISTENCY', null);

	/**
	 * デフォルトのトランザクション設定が使用されます。デフォルト設定は クライアントライブラリによって決定され、たいていの場合は IBASE_WRITE|IBASE_CONCURRENCY|IBASE_WAIT です。
	 */
	define('IBASE_DEFAULT', null);

	/**
	 * 配列をインラインで読み込みます。指定しなかった場合は、配列の ID を返します。配列 ID は INSERT 操作への引数としてのみ使用可能で、 配列 ID を処理できる関数は現在存在しません。
	 */
	define('IBASE_FETCH_ARRAYS', null);

	/**
	 * 過去との互換性を保持するため、<b><code>IBASE_TEXT</code></b> としても使用可能です。BLOB データを読み込む際に、BLOB ID ではなく 直接データそのものを読み込みます。
	 */
	define('IBASE_FETCH_BLOBS', null);

	/**
	 * 衝突が発生した場合に、トランザクションがその場で処理を中断して 処理が失敗することを示します。
	 */
	define('IBASE_NOWAIT', null);

	define('IBASE_PRP_ACCESS_MODE', null);

	define('IBASE_PRP_ACTIVATE', null);

	define('IBASE_PRP_AM_READONLY', null);

	define('IBASE_PRP_AM_READWRITE', null);

	define('IBASE_PRP_DB_ONLINE', null);

	define('IBASE_PRP_DENY_NEW_ATTACHMENTS', null);

	define('IBASE_PRP_DENY_NEW_TRANSACTIONS', null);

	define('IBASE_PRP_PAGE_BUFFERS', null);

	define('IBASE_PRP_RES', null);

	define('IBASE_PRP_RES_USE_FULL', null);

	define('IBASE_PRP_RESERVE_SPACE', null);

	define('IBASE_PRP_SET_SQL_DIALECT', null);

	define('IBASE_PRP_SHUTDOWN_DB', null);

	define('IBASE_PRP_SWEEP_INTERVAL', null);

	define('IBASE_PRP_WM_ASYNC', null);

	define('IBASE_PRP_WM_SYNC', null);

	define('IBASE_PRP_WRITE_MODE', null);

	/**
	 * 読み込み専用のトランザクションを開始します。
	 */
	define('IBASE_READ', null);

	define('IBASE_RES_CREATE', null);

	define('IBASE_RES_DEACTIVATE_IDX', null);

	define('IBASE_RES_NO_SHADOW', null);

	define('IBASE_RES_NO_VALIDITY', null);

	define('IBASE_RES_ONE_AT_A_TIME', null);

	define('IBASE_RES_REPLACE', null);

	/**
	 * <code>ibase_restore()</code> へのオプション
	 */
	define('IBASE_RES_USE_ALL_SPACE', null);

	define('IBASE_RPR_CHECK_DB', null);

	define('IBASE_RPR_FULL', null);

	define('IBASE_RPR_IGNORE_CHECKSUM', null);

	define('IBASE_RPR_KILL_SHADOWS', null);

	define('IBASE_RPR_MEND_DB', null);

	/**
	 * <code>ibase_maintain_db()</code> へのオプション
	 */
	define('IBASE_RPR_SWEEP_DB', null);

	define('IBASE_RPR_VALIDATE_DB', null);

	define('IBASE_STS_DATA_PAGES', null);

	define('IBASE_STS_DB_LOG', null);

	define('IBASE_STS_HDR_PAGES', null);

	define('IBASE_STS_IDX_PAGES', null);

	/**
	 * <code>ibase_db_info()</code> へのオプション
	 */
	define('IBASE_STS_SYS_RELATIONS', null);

	define('IBASE_SVC_GET_ENV', null);

	define('IBASE_SVC_GET_ENV_LOCK', null);

	define('IBASE_SVC_GET_ENV_MSG', null);

	/**
	 * <code>ibase_server_info()</code> へのオプション
	 */
	define('IBASE_SVC_GET_USERS', null);

	define('IBASE_SVC_IMPLEMENTATION', null);

	define('IBASE_SVC_SERVER_VERSION', null);

	define('IBASE_SVC_SVR_DB_INFO', null);

	define('IBASE_SVC_USER_DBPATH', null);

	/**
	 * 日付や時刻のフィールド値を、文字列ではなく UNIX タイムスタンプ (1-Jan-1970 0:00 UTC からの経過秒数)で返します。 1970 年より前の日付に対してこれを使用すると、環境によっては 問題を引き起こす可能性があります。
	 */
	define('IBASE_UNIXTIME', null);

	/**
	 * 衝突が発生した場合に、トランザクションが処理を再試行することを示します。
	 */
	define('IBASE_WAIT', null);

	/**
	 * 読み書き可能なトランザクションを開始します。
	 */
	define('IBASE_WRITE', null);

}
