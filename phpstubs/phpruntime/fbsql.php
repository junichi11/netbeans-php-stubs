<?php



namespace {

	/**
	 * 直近の FrontBase 操作により変更されたレコードの数を得る
	 * <p><b>fbsql_affected_rows()</b> は、 <code>link_identifier</code> が指す接続において 直近の INSERT、UPDATE、DELETE クエリで変更されたレコードの数を返します。</p><p><b>注意</b>:</p><p>トランザクションを使用している場合、コミットの後ではなくINSERT、 UPDATE、DELETE クエリの後で <b>fbsql_affected_rows()</b> をコールする必要があります。</p><p>直近のクエリが WHERE 句のない DELETE クエリの場合、全てのレコードが テーブルから削除されますが、この関数はゼロを返します。</p><p><b>注意</b>:</p><p>UPDATE を使用する場合、FrontBase は新しい値が古い値と同じ場合には カラムを更新しません。このため、 <b>fbsql_affected_rows()</b> は、実際にはマッチした 行の数と一致しない可能性があり、クエリにより実際に変更された行の 数だけとなります。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return int <p>直近のクエリが失敗した場合、この関数は -1 を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-affected-rows.php
	 * @see fbsql_num_rows()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_affected_rows($link_identifier = NULL): int {}

	/**
	 * autocommit を有効または無効にする
	 * <p>autocommit の状態を返します。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @param bool $OnOff <p>このオプションのパラメータを指定すると、 オートコミットステータスは変更されます。</p> <p><code>OnOff</code> を <b><code>TRUE</code></b> に設定すると、 エラーがない場合に各命令が自動的にコミットされます。</p> <p>OnOff を <b><code>FALSE</code></b> に設定すると、ユーザーは <code>fbsql_commit()</code> あるいは <code>fbsql_rollback()</code> によりコミットまたはロールバックを行う必要があります。</p>
	 * @return bool <p>現在の autocommit の状態を boolean 値で返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-autocommit.php
	 * @see fbsql_commit(), fbsql_rollback()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_autocommit($link_identifier, bool $OnOff = NULL): bool {}

	/**
	 * BLOB の大きさを取得する
	 * <p>指定した BLOB の大きさを返します。</p>
	 * @param string $blob_handle <p><code>fbsql_create_blob()</code> が返す BLOB ハンドル。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return int <p>BLOB の大きさを整数値で返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-blob-size.php
	 * @see fbsql_clob_size()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function fbsql_blob_size(string $blob_handle, $link_identifier = NULL): int {}

	/**
	 * アクティブな接続にログインしているユーザーを変更する
	 * <p><b>fbsql_change_user()</b> は、指定した接続にログインするユーザーを変更します。 ユーザーおよびパスワードの認証に失敗した場合は、現在の接続ユーザーがアクティブなままとなります。</p>
	 * @param string $user <p>新しいユーザー名。</p>
	 * @param string $password <p>新しいユーザーのパスワード。</p>
	 * @param string $database <p>指定した場合、これがユーザー変更後のデフォルトまたはカレントデータベースとなります。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-change-user.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_change_user(string $user, string $password, string $database = NULL, $link_identifier = NULL): bool {}

	/**
	 * CLOB の大きさを取得する
	 * <p>指定した CLOB の大きさを取得します。</p>
	 * @param string $clob_handle <p><code>fbsql_create_clob()</code> が返す CLOB ハンドル。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return int <p>CLOB の大きさを整数値で返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-clob-size.php
	 * @see fbsql_blob_size()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function fbsql_clob_size(string $clob_handle, $link_identifier = NULL): int {}

	/**
	 * FrontBase 接続を閉じる
	 * <p>指定したリンク ID に関連する FrontBase サーバーへの接続を閉じます。</p><p>持続的でないオープンされたリンクは、スクリプト実行終了時に自動的に クローズされるため、<b>fbsql_close()</b> は通常は不要です。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-close.php
	 * @see fbsql_connect(), fbsql_pconnect()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_close($link_identifier = NULL): bool {}

	/**
	 * データベースへのトランザクションをコミットする
	 * <p>ディスクへの insert、update、 delete を全て書き込んでトランザクションを終了し、トランザクションにより 保持された全ての行及びテーブルのロックを解除します。このコマンドは、 autocommit が false に設定されている場合のみ必要です。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-commit.php
	 * @see fbsql_autocommit(), fbsql_rollback()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_commit($link_identifier = NULL): bool {}

	/**
	 * FrontBase サーバーへの接続をオープンする
	 * <p><b>fbsql_connect()</b> は、FrontBase サーバーへの接続を確立します。</p><p>同じ引数で <b>fbsql_connect()</b> が 2 度目に コールされた場合、新規のリンクは確立されず、替わりに既に オープンされているリンク ID が返されます。</p><p><code>fbsql_close()</code> をコールすることにより事前に 明示的にクローズされていない限り、サーバーへのリンクはスクリプトの 実行終了時にクローズされます。</p>
	 * @param string $hostname <p>サーバーのホスト名。</p>
	 * @param string $username <p>接続用のユーザー名。</p>
	 * @param string $password <p>接続用のパスワード。</p>
	 * @return resource <p>成功時に正の FrontBase リンク ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-connect.php
	 * @see fbsql_pconnect(), fbsql_close()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_connect(string $hostname = 'ini_get("fbsql.default_host")', string $username = 'ini_get("fbsql.default_user")', string $password = 'ini_get("fbsql.default_password")') {}

	/**
	 * BLOB を作成する
	 * <p>指定したデータから BLOB を作成します。</p>
	 * @param string $blob_data <p>BLOB データ。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return string <p>新しく作成した BLOB のリソースハンドルを返します。 これを insert や update コマンドで使用すると、 データベースに BLOB を保存することができます。</p>
	 * @link https://php.net/manual/ja/function.fbsql-create-blob.php
	 * @see fbsql_create_clob(), fbsql_read_blob(), fbsql_read_clob(), fbsql_set_lob_mode()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function fbsql_create_blob(string $blob_data, $link_identifier = NULL): string {}

	/**
	 * CLOB を作成する
	 * <p>指定したデータから CLOB を作成します。</p>
	 * @param string $clob_data <p>CLOB データ。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return string <p>新しく作成した CLOB のリソースハンドルを返します。 これを insert や update コマンドで使用すると、 データベースに CLOB を保存することができます。</p>
	 * @link https://php.net/manual/ja/function.fbsql-create-clob.php
	 * @see fbsql_create_blob(), fbsql_read_blob(), fbsql_read_clob(), fbsql_set_lob_mode()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function fbsql_create_clob(string $clob_data, $link_identifier = NULL): string {}

	/**
	 * FrontBase データベースを作成する
	 * <p>指定したサーバー上で新しいデータベースの作成を試みます。</p>
	 * @param string $database_name <p>データベース名を表す文字列。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @param string $database_options
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-create-db.php
	 * @see fbsql_drop_db()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_create_db(string $database_name, $link_identifier = NULL, string $database_options = NULL): bool {}

	/**
	 * 内部結果ポインタを移動する
	 * <p>指定した結果 ID が指す FrontBase 結果の内部行ポインタを指定した行番号に移動します。</p><p>これ以降に <code>fbsql_fetch_row()</code> をコールすると、 その行が返されます。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @param int $row_number <p>行番号。0 からはじまります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-data-seek.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_data_seek($result, int $row_number): bool {}

	/**
	 * 接続で使用するデータベース名を取得あるいは設定する
	 * <p>接続で使用するデータベース名を取得あるいは設定します。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @param string $database <p>データベース名。指定すると、接続で使用するデフォルトのデータベースが <code>database</code> に変わります。</p>
	 * @return string <p>この接続で使用するデータベースの名前を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-database.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_database($link_identifier, string $database = NULL): string {}

	/**
	 * FrontBase データベースのパスワードを設定または取得する
	 * <p>現在の接続で 使用されているデータベースのパスワードを設定または取得します。 データベースがパスワードで保護されている場合は、 <code>fbsql_select_db()</code> の前にこの関数をコールする必要があります。</p><p>リンクがオープンされていない場合、この関数は <code>fbsql_connect()</code> がコールされた場合と同様にリンクを確立し、使用します。</p><p>この関数はデータベース内のデータベースパスワードを変更しませんし、 またデータベースのデータベースパスワードを取得することもしません。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @param string $database_password <p>データベースのパスワードを表す文字列。 指定したリンク ID が指すサーバーのデータベースパスワードを設定します。</p>
	 * @return string <p>リンク ID により表されるデータベースのデータベースパスワードを返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-database-password.php
	 * @see fbsql_connect(), fbsql_pconnect(), fbsql_select_db()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_database_password($link_identifier, string $database_password = NULL): string {}

	/**
	 * FrontBase クエリを送信する
	 * <p>データベースを選択し、そこでクエリを実行します。</p>
	 * @param string $database <p>選択したデータベース。</p>
	 * @param string $query <p>実行する SQL クエリ。</p>  <p><b>注意</b>:</p> <p>クエリ文字列の最後には、セミコロンをつけなければなりません。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return resource <p>クエリ結果への正の FrontBase 結果 ID、またはエラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-db-query.php
	 * @see fbsql_query(), fbsql_connect()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_db_query(string $database, string $query, $link_identifier = NULL) {}

	/**
	 * 指定したデータベースの状態を取得する
	 * <p>指定したデータベースの現在の状態を取得します。</p>
	 * @param string $database_name <p>データベース名。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return int <p>現在の状態を表す整数値を返します。これは、以下の定数のいずれかです。</p><ul> <li>  <b><code>FALSE</code></b> - host の exec ハンドラが無効です。このエラーは、 <code>link_identifier</code> がポート番号を用いてデータベースへ直接接続する場合に発生します。 FBExec はサーバーで利用可能ですが、接続が行われていません。  </li> <li>  <b><code>FBSQL_UNKNOWN</code></b> - 状態は不明です。  </li> <li>  <b><code>FBSQL_STOPPED</code></b> - FBSQL_STOPPED - データベースは実行されていません。 データベースを開始するには、<code>fbsql_start_db()</code> を使用してください。  </li> <li>  <b><code>FBSQL_STARTING</code></b> - データベースは起動中です。  </li> <li>  <b><code>FBSQL_RUNNING</code></b> - データベースは実行中で、SQL 処理を実行可能です。  </li> <li>  <b><code>FBSQL_STOPPING</code></b> - データベースは停止中です。  </li> <li>  <b><code>FBSQL_NOEXEC</code></b> - FBExec がサーバーで実行されておらず、 データベースの状態を取得することはできません。  </li> </ul>
	 * @link https://php.net/manual/ja/function.fbsql-db-status.php
	 * @see fbsql_start_db(), fbsql_stop_db()
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
	 */
	function fbsql_db_status(string $database_name, $link_identifier = NULL): int {}

	/**
	 * FrontBase データベースを破棄(削除)する
	 * <p><b>fbsql_drop_db()</b> は、指定したリンク ID が指す サーバーからデータベース全体を破棄(削除)します。</p>
	 * @param string $database_name <p>データベース名を表す文字列。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-drop-db.php
	 * @see fbsql_create_db()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_drop_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * 前の FrontBase 操作によるエラーメッセージの数値を返す
	 * <p>直近の FrontBase 操作からのエラーメッセージを表す数値を返します。</p><p>fbsql データベースのバックエンドから返されるエラーは、警告を発生しません。 その代わりに、<b>fbsql_errno()</b> を使用してエラーコードを 取得します。この関数は、直近に実行した fbsql 関数 (<code>fbsql_error()</code> および <b>fbsql_errno()</b> は除く) のエラーコードのみを返すことに注意しましょう。 もしこれを使用するつもりなら、他の fbsql 関数をコールする前に値を調べる必要があります。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return int <p>直近の fbsql 関数のエラー番号、あるいはエラーが発生しなかった場合に <i>0</i> (ゼロ) を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-errno.php
	 * @see fbsql_error(), fbsql_warnings()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_errno($link_identifier = NULL): int {}

	/**
	 * 前の FrontBase 操作によるエラーメッセージの文字列を返す
	 * <p>直近の FrontBase 操作のエラー文字列を返します。</p><p>fbsql データベースのバックエンドから返されるエラーは、警告を発生しません。 その代わりに、<b>fbsql_error()</b> を使用してエラー文字列を 取得します。この関数は、直近に実行した fbsql 関数 (<b>fbsql_error()</b> および <code>fbsql_errno()</code> は除く)のエラーコードのみを返すことに注意しましょう。もしこれを使用 するつもりなら、他の fbsql 関数をコールする前に値を調べる必要があります。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return string <p>直近の fbsql 関数のエラー文字列を返します。エラーが発生していない場合は <i>''</i> (空の文字列) を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-error.php
	 * @see fbsql_errno(), fbsql_warnings()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_error($link_identifier = NULL): string {}

	/**
	 * 連想配列、数値配列、またはその両方として結果レコードを取得する
	 * <p><b>fbsql_fetch_array()</b> は <code>fbsql_fetch_row()</code> と <code>fbsql_fetch_assoc()</code> を組み合わせたものです。</p><p>注意してほしいのは、 <b>fbsql_fetch_array()</b> は <code>fbsql_fetch_row()</code> と比べてそれほど遅くはないのに その追加機能がとても優れているということです。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @param int $result_type <p><b><code>FBSQL_ASSOC</code></b>、<b><code>FBSQL_NUM</code></b> あるいは <b><code>FBSQL_BOTH</code></b> のいずれかの定数値。</p> <p><b><code>FBSQL_BOTH</code></b> を使用すると、 数値添字の結果配列にデータを格納するだけでなく、フィールド名を キーとする連想配列にもデータを格納します。</p>
	 * @return array <p>取得した行に対応する配列を返します。行がもうない場合には <b><code>FALSE</code></b> を返します。</p><p>2 つ以上のカラムが同じ名前を持っている場合、最後にあらわれたカラムが 優先されます。他のカラムにアクセスするには、カラムの数値インデックスを 使用するか、カラムに別名をつける必要があります。</p>   <pre>select t1.f1 as foo t2.f1 as bar from t1, t2</pre>
	 * @link https://php.net/manual/ja/function.fbsql-fetch-array.php
	 * @see fbsql_fetch_row(), fbsql_fetch_assoc(), fbsql_fetch_object()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_fetch_array($result, int $result_type = NULL): array {}

	/**
	 * 連想配列として結果レコードを取得する
	 * <p><b>fbsql_fetch_assoc()</b> は、 <code>fbsql_fetch_array()</code> のオプションの第 2 引数に FBSQL_ASSOC を指定してコールするのと等価です。この関数は 連想配列のみを返します。</p><p><code>fbsql_fetch_array()</code> も、当初はこのように動作していました。もし連想配列だけでなく 数値添字の配列も必要な場合は <code>fbsql_fetch_array()</code> を使用してください。</p><p>注意してほしいのは、 <b>fbsql_fetch_assoc()</b> は <code>fbsql_fetch_row()</code> と比べてそれほど遅くはないのに その追加機能がとても優れているということです。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @return array <p>取得した行に対応する連想配列を返します。行がもうない場合には <b><code>FALSE</code></b> を返します。</p><p>2 つ以上のカラムが同じ名前を持っている場合、最後にあらわれたカラムが 優先されます。他のカラムにアクセスするには、 <code>fbsql_fetch_array()</code> を使用して数値添字の配列を 取得する必要があります。</p>
	 * @link https://php.net/manual/ja/function.fbsql-fetch-assoc.php
	 * @see fbsql_fetch_row(), fbsql_fetch_array(), fbsql_fetch_object()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_fetch_assoc($result): array {}

	/**
	 * 結果からカラム情報を得て、オブジェクトとして返す
	 * <p>クエリ結果のフィールドについての情報を取得するために使用されます。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @param int $field_offset <p>フィールドの数値オフセット。フィールドのインデックスは 0 からはじまります。 省略した場合は、まだ <b>fbsql_fetch_field()</b> で取得されていない フィールドのうちで最小のものが取得されます。</p>
	 * @return object <p>フィールド情報を含むオブジェクト、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p><p>オブジェクトのプロパティは以下のとおりです。</p><ul> <li>  name - カラム名。  </li> <li>  table - カラムが属するテーブルの名前。  </li> <li>  max_length - カラムの最大長。  </li> <li>  not_null - カラムが <b><code>NULL</code></b> にならない場合に 1。  </li> <li>  type - カラムの型。  </li> </ul>
	 * @link https://php.net/manual/ja/function.fbsql-fetch-field.php
	 * @see fbsql_field_seek()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_fetch_field($result, int $field_offset = NULL): object {}

	/**
	 * 結果の各出力の長さを得る
	 * <p><code>fbsql_fetch_row()</code>、 <code>fbsql_fetch_array()</code> および <code>fbsql_fetch_object()</code> によって返された直近の行について 各カラムの長さを格納した配列を返します。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @return array <p>オフセット 0 から始まる配列を返します。各要素は、 <code>fbsql_fetch_row()</code> で取得した行の各フィールドの長さを表します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-fetch-lengths.php
	 * @see fbsql_fetch_row()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_fetch_lengths($result): array {}

	/**
	 * オブジェクトとして結果レコードを取得する
	 * <p><b>fbsql_fetch_object()</b> は <code>fbsql_fetch_array()</code> と似ていますが 1 点だけ違いが あります。それは、返されるのが配列ではなくオブジェクトであるという点です。 つまり、データへのアクセスはフィールド名によってのみ可能で、 そのオフセットではアクセスできない(数値はプロパティ名として使用できません) ということです。</p><p>速度面では、この関数は <code>fbsql_fetch_array()</code> とまったく同等で、<code>fbsql_fetch_row()</code> と比べても ほぼ同じです (その差はごくわずかです)。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @return object <p>取得した行に対応するプロパティをもつオブジェクトを返します。 行がもうない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-fetch-object.php
	 * @see fbsql_fetch_array(), fbsql_fetch_row(), fbsql_fetch_assoc()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_fetch_object($result): object {}

	/**
	 * 数値配列として結果レコードを得る
	 * <p><b>fbsql_fetch_row()</b> は、指定した結果 ID に 関連付けられた結果から、1 行分のデータを取得します。</p><p><b>fbsql_fetch_row()</b> を続けてコールすると、 結果セットの次の行を返します。行がもうない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @return array <p>取得した行は配列として返されます。各カラムは、配列の 0 からはじまる オフセットに格納されます。行がもうない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-fetch-row.php
	 * @see fbsql_fetch_array(), fbsql_fetch_assoc(), fbsql_fetch_object(), fbsql_data_seek(), fbsql_fetch_lengths(), fbsql_result()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_fetch_row($result): array {}

	/**
	 * クエリ結果において指定したフィールドに関するフラグを得る
	 * <p>結果の指定したフィールドに関連付けられたフラグを取得します。</p>
	 * @param resource $result <p><code>fbsql_list_fields()</code> が返す結果ポインタ。</p>
	 * @param int $field_offset <p>フィールドの数値オフセット。フィールドのインデックスは 0 からはじまります。</p>
	 * @return string <p>指定したフィールドの フィールドフラグを返します。フラグは、単語ごとに空白 1 文字で 区切られた形式で報告されます。そのため、<code>explode()</code> を使用して返り値を分割することが可能です。</p>
	 * @link https://php.net/manual/ja/function.fbsql-field-flags.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_field_flags($result, int $field_offset = NULL): string {}

	/**
	 * 指定したフィールドの長さを返す
	 * <p>指定したフィールドの長さを返します。</p>
	 * @param resource $result <p><code>fbsql_list_fields()</code> が返す結果ポインタ。</p>
	 * @param int $field_offset <p>フィールドの数値オフセット。フィールドのインデックスは 0 からはじまります。</p>
	 * @return int <p>指定したフィールドの長さを返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-field-len.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_field_len($result, int $field_offset = NULL): int {}

	/**
	 * 結果の指定したフィールドの名前を得る
	 * <p>指定したフィールドインデックスの名前を返します。</p>
	 * @param resource $result <p><code>fbsql_list_fields()</code> が返す結果ポインタ。</p>
	 * @param int $field_index <p>フィールドの数値オフセット。フィールドのインデックスは 0 からはじまります。</p>
	 * @return string <p>名前を表す文字列、あるいはフィールドが存在しない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-field-name.php
	 * @see fbsql_field_type()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_field_name($result, int $field_index = NULL): string {}

	/**
	 * 指定したフィールドオフセットに結果ポインタを設定する
	 * <p>指定したフィールドオフセットに移動します。 <code>fbsql_fetch_field()</code> がフィールドオフセットを 指定せずにコールされた場合、<b>fbsql_field_seek()</b> で指定したフィールドオフセットが返されます。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @param int $field_offset <p>フィールドの数値オフセット。フィールドのインデックスは 0 からはじまります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-field-seek.php
	 * @see fbsql_fetch_field()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_field_seek($result, int $field_offset = NULL): bool {}

	/**
	 * 指定したフィールドがあるテーブルの名前を得る
	 * <p>指定したフィールドがあるテーブルの名前を返します。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @param int $field_offset <p>フィールドの数値オフセット。フィールドのインデックスは 0 からはじまります。</p>
	 * @return string <p>テーブル名を文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-field-table.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_field_table($result, int $field_offset = NULL): string {}

	/**
	 * 結果の中で指定したフィールドの型を得る
	 * <p><b>fbsql_field_type()</b> は <code>fbsql_field_name()</code> 関数と同じですが、 返される内容がフィールドの型となります。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @param int $field_offset <p>フィールドの数値オフセット。フィールドのインデックスは 0 からはじまります。</p>
	 * @return string <p>フィールドの型を文字列で返します。</p><p>これは <i>int</i>、<i>real</i>、 <i>string</i>、<i>blob</i> あるいは » FrontBase のドキュメント で詳細が説明されている型のいずれかです。</p>
	 * @link https://php.net/manual/ja/function.fbsql-field-type.php
	 * @see fbsql_field_name()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_field_type($result, int $field_offset = NULL): string {}

	/**
	 * 結果メモリを開放する
	 * <p><code>result</code> で指定した ID に関連付けられた全メモリを開放します。</p><p><b>fbsql_free_result()</b> は、大きな結果セットを返す クエリでメモリの使用量が心配な場合にのみコールします。 結果に関連付けられたメモリは、スクリプトの実行が終了した際に自動的に開放されます。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-free-result.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_free_result($result): bool {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return array
	 * @link https://php.net/manual/ja/function.fbsql-get-autostart-info.php
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
	 */
	function fbsql_get_autostart_info($link_identifier = NULL): array {}

	/**
	 * 接続で使用されているホスト名を取得あるいは設定する
	 * <p>接続で使用されているホスト名を取得あるいは設定します。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @param string $host_name <p>指定した場合は、これが新しい接続のホスト名となります。</p>
	 * @return string <p>現在の接続で使用しているホスト名を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-hostname.php
	 * @see fbsql_username(), fbsql_password()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_hostname($link_identifier, string $host_name = NULL): string {}

	/**
	 * 直近の INSERT 処理により生成された ID を得る
	 * <p>直近の INSERT クエリにおいて、DEFAULT UNIQUE 定義されているカラムで生成された ID を返します。</p><p><b>注意</b>:</p><p>FrontBase SQL関数 <b>fbsql_insert_id()</b> の値は 直近に生成された DEFAULT UNIQUE の値を常に含み、 クエリ間でリセットすることはありません。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return int <p>直近の INSERT クエリが生成した ID を返します。 直近のクエリが DEFAULT UNIQUE 値を生成していない場合は 0 を返します。</p><p>後のために値を保存する必要がある場合、値を生成するクエリの 直後にこの関数をコールするようにしてください。</p>
	 * @link https://php.net/manual/ja/function.fbsql-insert-id.php
	 * @see fbsql_affected_rows()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_insert_id($link_identifier = NULL): int {}

	/**
	 * FrontBase サーバーで利用可能なデータベースの一覧を得る
	 * <p>fbsql デーモンで現在使用可能なデータベースを含む結果ポインタを返します。 この結果ポインタの内容を取得するには <code>fbsql_tablename()</code> 関数を使用します。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return resource <p>結果ポインタあるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-list-dbs.php
	 * @see fbsql_list_fields(), fbsql_list_tables()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_list_dbs($link_identifier = NULL) {}

	/**
	 * FrontBase 結果フィールドの一覧を得る
	 * <p>指定したテーブルについての情報を取得します。</p>
	 * @param string $database_name <p>データベース名。</p>
	 * @param string $table_name <p>テーブル名。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return resource <p>結果ポインタを返します。これは、 <i>fbsql_field_xxx</i> で使用できます。 エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-list-fields.php
	 * @see fbsql_field_len(), fbsql_field_name(), fbsql_field_type(), fbsql_field_flags()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_list_fields(string $database_name, string $table_name, $link_identifier = NULL) {}

	/**
	 * FrontBase データベースのテーブル一覧を得る
	 * <p><code>database</code> について説明する結果ポインタを返します。</p>
	 * @param string $database <p>データベース名。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return resource <p>結果ポインタを返します。これを <code>fbsql_tablename()</code> 関数で使用すると、 実際のテーブル名が取得できます。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-list-tables.php
	 * @see fbsql_list_fields(), fbsql_list_dbs()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_list_tables(string $database, $link_identifier = NULL) {}

	/**
	 * 内部結果ポインタを次の結果に移動する
	 * <p>サーバーに複数の SQL 文を送信したり、複数の結果を返す ストアドプロシージャを実行したりすると、複数の結果セットが返されます。 この関数は、サーバーからの追加の結果セットが存在するかどうかを調べます。 結果が存在した場合、現在の結果セットを開放して新しい結果セットを取得します。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @return bool <p>追加の結果セットが使用可能な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-next-result.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_next_result($result): bool {}

	/**
	 * 結果のフィールド数を得る
	 * <p>指定した結果セット <code>result</code> のフィールド数を返します。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @return int <p>フィールドの数を整数値で返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-num-fields.php
	 * @see fbsql_db_query(), fbsql_query(), fbsql_fetch_field(), fbsql_num_rows()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_num_fields($result): int {}

	/**
	 * 結果のレコード数を得る
	 * <p>指定した結果セット <code>result</code> の行数を取得します。</p><p>このコマンドは SELECT 文に対してのみ使用可能です。 INSERT、UPDATE あるいは DELETE クエリの行数を取得するには、 <code>fbsql_affected_rows()</code> を使用します。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @return int <p>直近の SELECT 文が返す行の数を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-num-rows.php
	 * @see fbsql_affected_rows(), fbsql_connect(), fbsql_select_db(), fbsql_query()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_num_rows($result): int {}

	/**
	 * 接続に対して使用するユーザーパスワードを取得あるいは設定する
	 * <p>接続時のユーザーパスワードを取得あるいは設定します。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @param string $password <p>指定した場合は、これが新しい接続パスワードとなります。</p>
	 * @return string <p>現在の接続パスワードを返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-password.php
	 * @see fbsql_username(), fbsql_hostname()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_password($link_identifier, string $password = NULL): string {}

	/**
	 * FrontBase サーバーへの持続的接続をオープンする
	 * <p>FrontBase サーバーへの持続的な接続を確立します。</p><p>サーバーのポート番号を指定するには <code>fbsql_select_db()</code> を使用します。</p><p><b>fbsql_pconnect()</b> は <code>fbsql_connect()</code> とほとんど同じように動作しますが、 2 つの大きな違いがあります。</p><p>まず、接続の際に、この関数は事前に同じホスト・ユーザー名・パスワードで オープンされている (持続的) リンクを探そうとします。 見つかった場合には、新しい接続をオープンせずにその接続の ID を 返します。</p><p>次に、SQL サーバーへの接続はスクリプトが終了しても閉じられません。 その代わりに、今後利用されるときのためにオープンされたままとなります。</p><p>これらにより、この形式のリンクは「持続的(persistent)」と呼ばれます。</p>
	 * @param string $hostname <p>ホスト名。</p>
	 * @param string $username <p>接続時のユーザー名。</p>
	 * @param string $password <p>接続時のパスワード。</p>
	 * @return resource <p>成功した場合には正の FrontBase 持続的リンク ID、 エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-pconnect.php
	 * @see fbsql_connect()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_pconnect(string $hostname = 'ini_get("fbsql.default_host")', string $username = 'ini_get("fbsql.default_user")', string $password = 'ini_get("fbsql.default_password")') {}

	/**
	 * FrontBase クエリを送信する
	 * <p>クエリ <code>query</code> を、 サーバー上の現在アクティブなデータベースに送信します。</p><p>クエリが成功したと仮定すると、 <code>fbsql_num_rows()</code> を使用して SELECT 文から 返された行数を取得したり <code>fbsql_affected_rows()</code> を使用して DELETE、INSERT、REPLACE あるいは UPDATE 文で変更された行数を 取得したりすることが可能です。</p>
	 * @param string $query <p>実行する SQL クエリ。</p>  <p><b>注意</b>:</p> <p>クエリ文字列の最後はセミコロンで終わらなければなりません。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @param int $batch_size
	 * @return resource <p><b>fbsql_query()</b> は、クエリが成功したかどうかを 示すために <b><code>TRUE</code></b> (非ゼロ) あるいは <b><code>FALSE</code></b> を返します。 返り値が <b><code>TRUE</code></b> の場合、クエリは正しい形式であってサーバーで実行された ことを示します。変更された行数や返された行数については何も示しません。 クエリが成功しても 1 行も変更しなかったり 1 行も返さなかったりすることは 十分にありえることです。</p><p>SELECT 文の場合は <b>fbsql_query()</b> は新しい結果 ID を返し、これを <code>fbsql_result()</code> に渡すことができます。</p><p>クエリが参照しているテーブルへのアクセス権がない場合にも <b>fbsql_query()</b> は失敗し、<b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-query.php
	 * @see fbsql_affected_rows(), fbsql_db_query(), fbsql_free_result(), fbsql_result(), fbsql_select_db(), fbsql_connect()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_query(string $query, $link_identifier = NULL, int $batch_size = NULL) {}

	/**
	 * データベースから BLOB を読み込む
	 * <p>データベースから BLOB データを読み込みます。</p><p>select 文が BLOB や CLOB のカラムを含んでいる場合、 FrontBase はデータが取得される際にはそのデータを直接返します。 このデフォルトの動作は <code>fbsql_set_lob_mode()</code> で変更することが可能で、そうするとデータの取得時には BLOB および CLOB データのハンドルを返します。ハンドルを取得した場合は、 データベースから実際の BLOB データを取得するために <b>fbsql_read_blob()</b> をコールする必要があります。</p>
	 * @param string $blob_handle <p><code>fbsql_create_blob()</code> が返す BLOB ハンドル。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return string <p>指定した BLOB データを含む文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-read-blob.php
	 * @see fbsql_create_blob(), fbsql_read_clob(), fbsql_set_lob_mode()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function fbsql_read_blob(string $blob_handle, $link_identifier = NULL): string {}

	/**
	 * データベースから CLOB を読み込む
	 * <p>データベースから CLOB データを読み込みます。</p><p>select 文が BLOB や CLOB のカラムを含んでいる場合、 FrontBase はデータが取得される際にはそのデータを直接返します。 このデフォルトの動作は <code>fbsql_set_lob_mode()</code> で変更することが可能で、そうするとデータの取得時には BLOB および CLOB データのハンドルを返します。ハンドルを取得した場合は、 データベースから実際の CLOB データを取得するために <b>fbsql_read_clob()</b> をコールする必要があります。</p>
	 * @param string $clob_handle <p><code>fbsql_create_clob()</code> が返す CLOB ハンドル。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return string <p>指定した CLOB データを含む文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-read-clob.php
	 * @see fbsql_create_clob(), fbsql_read_blob(), fbsql_set_lob_mode()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function fbsql_read_clob(string $clob_handle, $link_identifier = NULL): string {}

	/**
	 * 結果データを得る
	 * <p>FrontBase の結果セット <code>result</code> から、ひとつのセルの内容を返します。</p><p>大きな結果セットを処理する場合には、(以下で示すような) 行全体を 取得する関数のうちのひとつを使用することを考慮すべきでしょう。 これらの関数は複数のセルの内容を一度の関数コールで取得することが 可能で、<b>fbsql_result()</b> にくらべてかなり高速です。</p><p><b>fbsql_result()</b> は、その他の結果セットを扱う関数と 一緒に使用すべきではありません。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @param int $row
	 * @param mixed $field <p>フィールドのオフセット・フィールド名・テーブル名とフィールド名をドットで 連結した形式 (テーブル名.フィールド名) のいずれかが指定可能です。</p> <p>カラム名にエイリアスが指定されている場合 ('select foo as bar from...') は、カラム名のかわりにエイリアスを使用します。</p>  <p><b>注意</b>:</p> <p>フィールド名やテーブル名.フィールド名を引数に渡すのに比べると、 フィールドの数値オフセットを指定するほうが高速となります。</p>
	 * @return mixed
	 * @link https://php.net/manual/ja/function.fbsql-result.php
	 * @see fbsql_fetch_row(), fbsql_fetch_array(), fbsql_fetch_assoc(), fbsql_fetch_object()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_result($result, int $row = NULL, $field = NULL) {}

	/**
	 * データベースへのトランザクションをロールバックする
	 * <p>直近のコミット以降に発行されたすべての文をロールバックし、 現在のトランザクションを終了します。</p><p>このコマンドは、autocommit が false に設定されている場合にのみ必要となります。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-rollback.php
	 * @see fbsql_autocommit(), fbsql_commit()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_rollback($link_identifier = NULL): bool {}

	/**
	 * 直近の文で影響をうけた行の数を取得する
	 * <p>直近の文で影響をうけた行の数を取得します。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @return int <p>行の数を整数値で返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-rows-fetched.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function fbsql_rows_fetched($result): int {}

	/**
	 * FrontBase データベースを選択する
	 * <p>指定したリンク ID 上の、現在アクティブなデータベースを設定します。</p><p>クライアントは、データベースへの接続時に使用するポート番号を取得する ために FBExec を使用します。データベース名が番号の場合、システムは これをポート番号として使用し、FBExec にポート番号を問い合わせません。 FrontBase サーバーを開始するには、 FRontBase -FBExec=No -port=&lt;port number&gt; &lt;database name&gt; のようにします。</p><p>この後の <code>fbsql_query()</code> のコールは、 アクティブなデータベースが対象となります。</p>
	 * @param string $database_name <p>選択するデータベースの名前。</p> <p>データベースがパスワードで保護されている場合は、データベースを選択する前に <code>fbsql_database_password()</code> をコールする必要があります。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-select-db.php
	 * @see fbsql_connect(), fbsql_pconnect(), fbsql_database_password(), fbsql_query()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_select_db(string $database_name = NULL, $link_identifier = NULL): bool {}

	/**
	 * 入出力文字セットを変更する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $link_identifier
	 * @param int $characterset
	 * @param int $in_out_both
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.fbsql-set-characterset.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function fbsql_set_characterset($link_identifier, int $characterset, int $in_out_both = NULL): void {}

	/**
	 * FrontBase 結果セットの LOB 取得モードを設定する
	 * <p>データベースから LOB データを取得する際のモードを設定します。</p><p>BLOB および CLOB のデータが FrontBase に格納されている場合、 それは直接的あるいは間接的に保存することが可能です。直接保存された LOB データは lob モードの設定にかかわらず常に取得されます。LOB データが 512 バイトより小さい場合は常に直接保存されます。</p>
	 * @param resource $result <p><code>fbsql_query()</code> あるいは <code>fbsql_db_query()</code> が返す結果 ID。</p>
	 * @param int $lob_mode <p>以下のいずれかです。</p><ul> <li>  <b><code>FBSQL_LOB_DIRECT</code></b> - LOB データは直接取得されます。 データベースから <code>fbsql_fetch_row()</code> やその他の関数を使用してデータを取得した場合、すべての CLOB あるいは BLOB カラムはその内容が直接返されます。 これは新規 FrontBase 結果のデフォルト値です。  </li> <li>  <b><code>FBSQL_LOB_HANDLE</code></b> - LOB データは、実際のデータへのハンドルとして 取得されます。<code>fbsql_fetch_row()</code> あるいはその他の 関数によってデータが取得された際、LOB データが間接的に格納されていた 場合はそのハンドルを、直接格納されていた場合はデータそのものを返します。 ハンドルが返された場合、それは <i>@'000000000000000000000000'</i> のような形式の 27 バイトの文字列となります。  </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-set-lob-mode.php
	 * @see fbsql_create_blob(), fbsql_create_clob(), fbsql_read_blob(), fbsql_read_clob()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function fbsql_set_lob_mode($result, int $lob_mode): bool {}

	/**
	 * 指定したユーザーのパスワードを変更する
	 * <p>指定したユーザー <code>user</code> のパスワードを変更します。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @param string $user <p>ユーザー名。</p>
	 * @param string $password <p>設定する新しいパスワード。</p>
	 * @param string $old_password <p>もとのパスワード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-set-password.php
	 * @since PHP 5, PHP 7
	 */
	function fbsql_set_password($link_identifier, string $user, string $password, string $old_password): bool {}

	/**
	 * トランザクションのロックと分離レベルを設定する
	 * <p>トランザクションのロック <code>locking</code> および分離レベル <code>isolation</code> を設定します。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @param int $locking <p>設定するロックの形式。定数 <b><code>FBSQL_LOCK_DEFERRED</code></b>、 <b><code>FBSQL_LOCK_OPTIMISTIC</code></b> あるいは <b><code>FBSQL_LOCK_PESSIMISTIC</code></b> のいずれかとなります。</p>
	 * @param int $isolation <p>設定する分離レベル。定数 <b><code>FBSQL_ISO_READ_UNCOMMITTED</code></b>、 <b><code>FBSQL_ISO_READ_COMMITTED</code></b>、 <b><code>FBSQL_ISO_REPEATABLE_READ</code></b>、 <b><code>FBSQL_ISO_SERIALIZABLE</code></b> および <b><code>FBSQL_ISO_VERSIONED</code></b> のいずれかとなります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.fbsql-set-transaction.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function fbsql_set_transaction($link_identifier, int $locking, int $isolation): void {}

	/**
	 * ローカルまたはリモートサーバーのデータベースを開始する
	 * <p>ローカルまたはリモートサーバーのデータベースを開始します。</p>
	 * @param string $database_name <p>データベース名。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @param string $database_options
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-start-db.php
	 * @see fbsql_db_status(), fbsql_stop_db()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_start_db(string $database_name, $link_identifier = NULL, string $database_options = NULL): bool {}

	/**
	 * ローカルまたはリモートサーバーのデータベースを停止する
	 * <p>ローカルまたはリモートサーバーのデータベースを停止します。</p>
	 * @param string $database_name <p>データベース名。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-stop-db.php
	 * @see fbsql_db_status(), fbsql_start_db()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_stop_db(string $database_name, $link_identifier = NULL): bool {}

	/**
	 * フィールドのテーブル名を得る
	 * <p><b>fbsql_table_name()</b> は、指定した結果セット <code>result</code> から現在のテーブル名を取得します。</p><p><code>fbsql_num_rows()</code> 関数を使用して、 現在の結果ポインタ内のテーブルの数を判断します。</p>
	 * @param resource $result <p><code>fbsql_list_tables()</code> が返す結果ポインタ。</p>
	 * @param int $index <p>現在のテーブルの整数値インデックス。</p>
	 * @return string <p>テーブル名を文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-table-name.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function fbsql_table_name($result, int $index): string {}

	/**
	 * fbsql_table_name() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>fbsql_table_name()</code>.</p>
	 * @param resource $result <p><code>fbsql_list_tables()</code> が返す結果ポインタ。</p>
	 * @param int $index <p>現在のテーブルの整数値インデックス。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.fbsql-tablename.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function fbsql_tablename($result, int $index): string {}

	/**
	 * 接続に使用するホストユーザーを取得あるいは設定する
	 * <p>接続で使用するユーザー名を取得あるいは設定します。</p>
	 * @param resource $link_identifier <p><code>fbsql_connect()</code> あるいは <code>fbsql_pconnect()</code> が返す FrontBase リンク ID。</p> <p>指定しなかった場合は、この関数は FrontBase サーバーでオープンしているリンクを探します。見つからないときは <code>fbsql_connect()</code> に引数を指定せずにコールしたときと同様にして作成します。</p>
	 * @param string $username <p>指定した場合は、これを新しいユーザー名として設定します。</p>
	 * @return string <p>この接続で使用する現在のユーザー名を文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-username.php
	 * @see fbsql_password(), fbsql_hostname()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_username($link_identifier, string $username = NULL): string {}

	/**
	 * FrontBase 警告を有効または無効にする
	 * <p>FrontBase の警告を有効または無効にします。</p>
	 * @param bool $OnOff <p>警告を有効にするかしないか。</p>
	 * @return bool <p>警告をオンにした場合は <b><code>TRUE</code></b>、そうでない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fbsql-warnings.php
	 * @see fbsql_errno(), fbsql_error()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function fbsql_warnings(bool $OnOff = NULL): bool {}

	define('FBSQL_ASSOC', null);

	define('FBSQL_BOTH', null);

	define('FBSQL_ISO_READ_COMMITTED', null);

	define('FBSQL_ISO_READ_UNCOMMITTED', null);

	define('FBSQL_ISO_REPEATABLE_READ', null);

	define('FBSQL_ISO_SERIALIZABLE', null);

	define('FBSQL_ISO_VERSIONED', null);

	define('FBSQL_LOB_DIRECT', null);

	define('FBSQL_LOB_HANDLE', null);

	define('FBSQL_LOCK_DEFERRED', null);

	define('FBSQL_LOCK_OPTIMISTIC', null);

	define('FBSQL_LOCK_PESSIMISTIC', null);

	define('FBSQL_NOEXEC', null);

	define('FBSQL_NUM', null);

	define('FBSQL_RUNNING', null);

	define('FBSQL_STARTING', null);

	define('FBSQL_STOPPED', null);

	define('FBSQL_STOPPING', null);

	define('FBSQL_UNKNOWN', null);

}
