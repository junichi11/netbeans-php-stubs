<?php



/**
 * アップロードされるファイルのためのスペースを確保する
 * <p><i>ALLO</i> コマンドを FTP サーバーに送信し、 アップロードされるファイルのためのスペースを確保します。</p><p><b>注意</b>:</p><p>多くの FTP サーバーはこのコマンドをサポートしていません。これらのサーバーの中には、 「そのコマンドをサポートしていない」という意味で失敗コード（<b><code>FALSE</code></b>） を返すものもあれば 「事前に確保する必要はない」という意味で成功コード（<b><code>TRUE</code></b>） を返すものもあります。このような理由から、事前のスペース確保が明示的に 要求されているサーバーに対してのみこの関数を使用するようにするとよいでしょう。</p><p></p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param int $filesize <p>確保したいバイト数。</p>
 * @param string $result <p>もし変数が指定されていた場合、サーバーからの応答テキストの内容の 参照が格納されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-alloc.php
 * @see ftp_put(), ftp_fput()
 * @since PHP 5, PHP 7
 */
function ftp_alloc($ftp_stream, int $filesize, string &$result = NULL): bool {}

/**
 * Append content of a file a another file on the FTP server
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $ftp
 * @param string $remote_file
 * @param string $local_file
 * @param int $mode
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-append.php
 * @since PHP 7 >= 7.2.0
 */
function ftp_append($ftp, string $remote_file, string $local_file, int $mode = FTP_IMAGE): bool {}

/**
 * 親ディレクトリに移動する
 * <p>親ディレクトリに移動します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-cdup.php
 * @see ftp_chdir(), ftp_pwd()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_cdup($ftp_stream): bool {}

/**
 * FTP サーバー上でディレクトリを移動する
 * <p>カレントディレクトリを、指定した場所に移動します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $directory <p>対象となるディレクトリ。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 ディレクトリの変更に失敗した場合は、PHP は警告を出します。</p>
 * @link http://php.net/manual/ja/function.ftp-chdir.php
 * @see ftp_cdup(), ftp_pwd()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_chdir($ftp_stream, string $directory): bool {}

/**
 * FTP 経由でファイルのパーミッションを設定する
 * <p>指定したリモートファイルのパーミッションを <code>mode</code> に設定します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param int $mode <p>新しいパーミッション。<i>8 進数</i> で指定します。</p>
 * @param string $filename <p>リモートファイル。</p>
 * @return int <p>成功した場合に新しいパーミッションを、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-chmod.php
 * @see chmod()
 * @since PHP 5, PHP 7
 */
function ftp_chmod($ftp_stream, int $mode, string $filename): int {}

/**
 * FTP 接続を閉じる
 * <p><b>ftp_close()</b> は、指定されたリンク ID を閉じて <code>resource</code> を開放します。</p><p><b>注意</b>:</p><p>この関数をコールした後は、FTP 接続を利用することはできません。 利用するためには <code>ftp_connect()</code> で新しい接続を 作成しなければなりません。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-close.php
 * @see ftp_connect()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function ftp_close($ftp_stream): bool {}

/**
 * FTP 接続をオープンする
 * <p><b>ftp_connect()</b> は、指定した <code>host</code> への FTP 接続をオープンします。</p>
 * @param string $host <p>FTP サーバーのアドレス。このパラメータには、最後のスラッシュや最初の <i>ftp://</i> をつけてはいけません。</p>
 * @param int $port <p>このパラメータは接続先のポートを指定します。もし指定しなかったり ゼロを指定したりした場合は、デフォルトの FTP ポートである 21 が用いられます。</p>
 * @param int $timeout <p>このパラメータは、以降のネットワーク操作時のタイムアウトを秒単位で指定します。 指定されなかった場合のデフォルト値は 90 秒です。タイムアウトの変更や 参照は、<code>ftp_set_option()</code> や <code>ftp_get_option()</code> を用いていつでも可能です。</p>
 * @return resource <p>成功した場合に FTP ストリームを、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-connect.php
 * @see ftp_close(), ftp_ssl_connect()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_connect(string $host, int $port = 21, int $timeout = 90) {}

/**
 * FTP サーバー上のファイルを削除する
 * <p><b>ftp_delete()</b> は、<code>path</code> で指定したファイルを FTP サーバーから削除します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $path <p>削除するファイル。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-delete.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_delete($ftp_stream, string $path): bool {}

/**
 * FTP サーバー上でのコマンドの実行をリクエストする
 * <p>FTP サーバーに SITE EXEC <code>command</code> リクエストを 送信します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $command <p>実行したいコマンド。</p>
 * @return bool <p>コマンドが成功した（サーバーの応答コードが <i>200</i>） 場合に <b><code>TRUE</code></b> を、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-exec.php
 * @see ftp_raw()
 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
 */
function ftp_exec($ftp_stream, string $command): bool {}

/**
 * FTP サーバーからファイルをダウンロードし、オープン中のファイルに保存する
 * <p><b>ftp_fget()</b> は、FTP サーバーから <code>remote_file</code> を取得し、指定したファイルポインタ <code>fp</code> に書きこみます。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param resource $handle <p>オープンされているファイルのポインタ。ここにデータが保存されます。</p>
 * @param string $remote_file <p>リモートファイルのパス。</p>
 * @param int $mode <p>転送モード。<b><code>FTP_ASCII</code></b> または <b><code>FTP_BINARY</code></b> のどちらかを指定する必要があります。</p>
 * @param int $resumepos <p>リモートファイル中で、ダウンロードを開始する位置。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-fget.php
 * @see ftp_get(), ftp_nb_get(), ftp_nb_fget()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_fget($ftp_stream, $handle, string $remote_file, int $mode = FTP_IMAGE, int $resumepos = 0): bool {}

/**
 * オープン中のファイルを FTP サーバーにアップロードする
 * <p><b>ftp_fput()</b> は、ファイルポインタが指すデータを FTP サーバー上のリモートファイルへアップロードします。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $remote_file <p>リモートファイルのパス。</p>
 * @param resource $handle <p>ローカルでオープンされているファイルのポインタ。 ファイルの終端まで進むと読み込みが終了します。</p>
 * @param int $mode <p>転送モード。<b><code>FTP_ASCII</code></b> または <b><code>FTP_BINARY</code></b> のどちらかを指定する必要があります。</p>
 * @param int $startpos <p>リモートファイル内での、アップロード開始位置。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-fput.php
 * @see ftp_put(), ftp_nb_fput(), ftp_nb_put()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_fput($ftp_stream, string $remote_file, $handle, int $mode = FTP_IMAGE, int $startpos = 0): bool {}

/**
 * FTP サーバーからファイルをダウンロードする
 * <p><b>ftp_get()</b> は FTP サーバーからリモートファイルを取得し、 それをローカルファイルに保存します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $local_file <p>ローカルファイルのパス（ファイルがすでに存在する場合は上書きされます）。</p>
 * @param string $remote_file <p>リモートファイルのパス。</p>
 * @param int $mode <p>転送モード。<b><code>FTP_ASCII</code></b> または <b><code>FTP_BINARY</code></b> のどちらかを指定する必要があります。</p>
 * @param int $resumepos <p>リモートファイルの、ダウンロードを開始する位置。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-get.php
 * @see ftp_pasv(), ftp_fget(), ftp_nb_get(), ftp_nb_fget()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_get($ftp_stream, string $local_file, string $remote_file, int $mode = FTP_BINARY, int $resumepos = 0): bool {}

/**
 * カレント FTP ストリームでの種々の実行時動作を取得する
 * <p>この関数は、指定した FTP 接続について <code>option</code> の値を返します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID</p>
 * @param int $option <p>現在、以下のオプションがサポートされています:</p> <b>サポートされる実行時 FTP オプション</b>   <b><code>FTP_TIMEOUT_SEC</code></b>  ネットワーク関連処理で使用されるカレントのタイムアウトを返します。    <b><code>FTP_AUTOSEEK</code></b>  オプションが設定されている場合に <b><code>TRUE</code></b> を、それ以外の場合に <b><code>FALSE</code></b> を返します。
 * @return mixed <p>成功した場合はその値を、指定した <code>option</code> がサポートされていない場合は <b><code>FALSE</code></b> を返します。後者の場合は、 同時に警告メッセージも発生します。</p>
 * @link http://php.net/manual/ja/function.ftp-get-option.php
 * @see ftp_set_option()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function ftp_get_option($ftp_stream, int $option) {}

/**
 * FTP 接続にログインする
 * <p>指定した FTP ストリームにログインします。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $username <p>ユーザー名（<i>USER</i>）。</p>
 * @param string $password <p>パスワード（<i>PASS</i>）。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 失敗した場合は、PHP が警告を発生します。</p>
 * @link http://php.net/manual/ja/function.ftp-login.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_login($ftp_stream, string $username, string $password): bool {}

/**
 * 指定したファイルが最後に更新された時刻を返す
 * <p><b>ftp_mdtm()</b> はリモートファイルが最後に更新された時刻を取得します。</p><p><b>注意</b>:</p><p>すべてのサーバーがこの機能をサポートしているわけではありません!</p><p><b>注意</b>:</p><p><b>ftp_mdtm()</b> はディレクトリに対しては機能しません。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $remote_file <p>最終更新時刻を取得するファイル。</p>
 * @return int <p>成功した場合にUNIXのタイムスタンプ、エラー時に -1 を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-mdtm.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_mdtm($ftp_stream, string $remote_file): int {}

/**
 * ディレクトリを作成する
 * <p>FTP サーバー上に、指定した <code>directory</code> を作成します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $directory <p>作成されるディレクトリの名前。</p>
 * @return string <p>成功した時には新規に作成したディレクトリ名、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-mkdir.php
 * @see ftp_rmdir()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_mkdir($ftp_stream, string $directory): string {}

/**
 * Returns a list of files in the given directory
 * @param resource $ftp_stream <p>The link identifier of the FTP connection.</p>
 * @param string $directory <p>The directory to be listed.</p>
 * @return array <p>Returns an array of arrays with file infos from the specified directory on success or <b><code>FALSE</code></b> on error.</p>
 * @link http://php.net/manual/ja/function.ftp-mlsd.php
 * @see ftp_rawlist(), ftp_nlist()
 * @since PHP 7 >= 7.2.0
 */
function ftp_mlsd($ftp_stream, string $directory): array {}

/**
 * ファイルの取得/送信を継続する（非ブロッキング）
 * <p>非ブロッキングモードで、ファイルの取得/送信を継続します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @return int <p><b><code>FTP_FAILED</code></b>、<b><code>FTP_FINISHED</code></b> あるいは <b><code>FTP_MOREDATA</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-nb-continue.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function ftp_nb_continue($ftp_stream): int {}

/**
 * FTP サーバーからファイルをダウンロードし、オープン中のファイルに保存する（非ブロッキング）
 * <p><b>ftp_nb_fget()</b> は、FTP サーバーからリモートファイルを取得します。</p><p><code>ftp_fget()</code> との違いは、この関数が 非同期処理でファイルを取得するということです。そのため、 ファイルをダウンロードしている最中に別の処理を行うことができます。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param resource $handle <p>オープンされているファイルのポインタ。ここにデータが保存されます。</p>
 * @param string $remote_file <p>リモートファイルのパス。</p>
 * @param int $mode <p>転送モード。<b><code>FTP_ASCII</code></b> または <b><code>FTP_BINARY</code></b> のどちらかを指定する必要があります。</p>
 * @param int $resumepos <p>ダウンロードを開始する、リモートファイル内の位置。</p>
 * @return int <p><b><code>FTP_FAILED</code></b>、<b><code>FTP_FINISHED</code></b> あるいは <b><code>FTP_MOREDATA</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-nb-fget.php
 * @see ftp_nb_get(), ftp_nb_continue(), ftp_fget(), ftp_get()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function ftp_nb_fget($ftp_stream, $handle, string $remote_file, int $mode = FTP_IMAGE, int $resumepos = 0): int {}

/**
 * オープン中のファイルを FTP サーバーに保存する（非ブロッキング）
 * <p><b>ftp_nb_fput()</b> は、ファイルポインタが指すデータを FTP サーバー上のリモートファイルへアップロードします。</p><p><code>ftp_fput()</code> との違いは、この関数が 非同期処理でファイルをアップロードするということです。そのため、 ファイルをアップロードしている最中に別の処理を行うことができます。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $remote_file <p>リモートファイルのパス。</p>
 * @param resource $handle <p>ローカルでオープンされているファイルのポインタ。 ファイルの終端まで進むと読み込みが終了します。</p>
 * @param int $mode <p>転送モード。<b><code>FTP_ASCII</code></b> または <b><code>FTP_BINARY</code></b> のどちらかを指定する必要があります。</p>
 * @param int $startpos <p>リモートファイル内での、アップロード開始位置。</p>
 * @return int <p><b><code>FTP_FAILED</code></b>、<b><code>FTP_FINISHED</code></b> あるいは <b><code>FTP_MOREDATA</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-nb-fput.php
 * @see ftp_nb_put(), ftp_nb_continue(), ftp_put(), ftp_fput()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function ftp_nb_fput($ftp_stream, string $remote_file, $handle, int $mode = FTP_IMAGE, int $startpos = 0): int {}

/**
 * FTP サーバーからファイルを取得し、ローカルファイルに書き込む（非ブロッキング）
 * <p><b>ftp_nb_get()</b> は FTP サーバーからリモートファイルを取得し、 それをローカルファイルに保存します。</p><p><code>ftp_get()</code> との違いは、この関数が 非同期処理でファイルを取得するということです。そのため、 ファイルをダウンロードしている最中に別の処理を行うことができます。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $local_file <p>ローカルファイルのパス（ファイルがすでに存在する場合、上書きされます）。</p>
 * @param string $remote_file <p>リモートファイルのパス。</p>
 * @param int $mode <p>転送モード。<b><code>FTP_ASCII</code></b> または <b><code>FTP_BINARY</code></b> のどちらかを指定する必要があります。</p>
 * @param int $resumepos <p>ダウンロードを開始する、リモートファイル内の位置。</p>
 * @return int <p><b><code>FTP_FAILED</code></b>、<b><code>FTP_FINISHED</code></b> あるいは <b><code>FTP_MOREDATA</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-nb-get.php
 * @see ftp_nb_fget(), ftp_nb_continue(), ftp_fget(), ftp_get()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function ftp_nb_get($ftp_stream, string $local_file, string $remote_file, int $mode = FTP_IMAGE, int $resumepos = 0): int {}

/**
 * FTP サーバーにファイルを保存する（非ブロッキング）
 * <p><b>ftp_nb_put()</b> はローカルファイルを FTP サーバーに保存します。</p><p><code>ftp_put()</code> との違いは、この関数が 非同期処理でファイルをアップロードするということです。そのため、 ファイルをアップロードしている最中に別の処理を行うことができます。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $remote_file <p>リモートファイルのパス。</p>
 * @param string $local_file <p>ローカルファイルのパス。</p>
 * @param int $mode <p>転送モード。<b><code>FTP_ASCII</code></b> または <b><code>FTP_BINARY</code></b> のどちらかを指定する必要があります。</p>
 * @param int $startpos <p>リモートファイル内での、アップロード開始位置。</p>
 * @return int <p><b><code>FTP_FAILED</code></b>、<b><code>FTP_FINISHED</code></b> あるいは <b><code>FTP_MOREDATA</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-nb-put.php
 * @see ftp_nb_fput(), ftp_nb_continue(), ftp_put(), ftp_fput()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function ftp_nb_put($ftp_stream, string $remote_file, string $local_file, int $mode = FTP_IMAGE, int $startpos = 0): int {}

/**
 * 指定したディレクトリのファイルの一覧を返す
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $directory <p>一覧を表示するディレクトリ。このパラメータには引数を含めることができます。 例: ftp_nlist($conn_id, "-la /your/dir"); このパラメータはエスケープ処理されません。スペースやその他の文字を含む ファイル名では問題が発生する可能性があることに注意してください。</p>
 * @return array <p>成功した場合は指定したディレクトリ内のファイル名の配列を、 エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-nlist.php
 * @see ftp_rawlist(), ftp_mlsd()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_nlist($ftp_stream, string $directory): array {}

/**
 * パッシブモードをオンまたはオフにする
 * <p><b>ftp_pasv()</b> はパッシブモードをオンまたはオフにします。 パッシブモードでは、データ接続はサーバーではなくクライアントにより 初期化されます。クライアントがファイアウォールの向こうにある場合に 必要となるでしょう。</p><p><b>ftp_pasv()</b> をコールできるのは、 ログインに成功した後だけであることに注意しましょう。 それ以外の場合は、この関数のコールは失敗します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param bool $pasv <p><b><code>TRUE</code></b>, の場合はパッシブモードをオンに、そうでない場合はオフにします。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-pasv.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_pasv($ftp_stream, bool $pasv): bool {}

/**
 * FTP サーバーにファイルをアップロードする
 * <p><b>ftp_put()</b> ローカルファイルを FTP サーバーに保存します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $remote_file <p>リモートファイルのパス。</p>
 * @param string $local_file <p>ローカルファイルのパス。</p>
 * @param int $mode <p>転送モード。<b><code>FTP_ASCII</code></b> または <b><code>FTP_BINARY</code></b> のどちらかを指定する必要があります。</p>
 * @param int $startpos <p>リモートファイル内での、アップロード開始位置。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-put.php
 * @see ftp_pasv(), ftp_fput(), ftp_nb_fput(), ftp_nb_put()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_put($ftp_stream, string $remote_file, string $local_file, int $mode = FTP_IMAGE, int $startpos = 0): bool {}

/**
 * カレントのディレクトリ名を返す
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @return string <p>カレントのディレクトリ名、またはエラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-pwd.php
 * @see ftp_chdir(), ftp_cdup()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_pwd($ftp_stream): string {}

/**
 * ftp_close() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>ftp_close()</code>.</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.ftp-quit.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_quit($ftp_stream): bool {}

/**
 * FTP サーバーに任意のコマンドを送信する
 * <p>任意の <code>command</code> を FTP サーバーに送信します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $command <p>実行したいコマンド。</p>
 * @return array <p>サーバーからの応答を文字列の配列で返します。 結果の文字列に対して、何の処理も行いません。また、 <b>ftp_raw()</b> はそのコマンドが成功したのかどうかを 判断できません。</p>
 * @link http://php.net/manual/ja/function.ftp-raw.php
 * @see ftp_exec()
 * @since PHP 5, PHP 7
 */
function ftp_raw($ftp_stream, string $command): array {}

/**
 * 指定したディレクトリの詳細なファイル一覧を返す
 * <p><b>ftp_rawlist()</b> は、FTP <b>LIST</b> コマンドを実行し、結果を配列として返します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $directory <p>ディレクトリのパス。 <b>LIST</b> コマンドの引数を含むこともあります。</p>
 * @param bool $recursive <p><b><code>TRUE</code></b> を設定した場合、発行されるコマンドは <b>LIST -R</b> となります。</p>
 * @return array <p>各要素が 1 行分のテキストに対応する配列を返します。 渡された <code>directory</code> が無効な場合は <b><code>FALSE</code></b> を返します。</p><p>出力に関する処理は全く行われません。結果の解釈の仕方を定義するために <code>ftp_systype()</code> から返されるシステム型 ID を使用することができます。</p>
 * @link http://php.net/manual/ja/function.ftp-rawlist.php
 * @see ftp_nlist(), ftp_mlsd()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_rawlist($ftp_stream, string $directory, bool $recursive = FALSE): array {}

/**
 * FTP サーバー上のファイルまたはディレクトリの名前を変更する
 * <p><b>ftp_rename()</b> は FTP サーバー上のファイルやディレクトリの 名前を変更します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $oldname <p>現在のファイル/ディレクトリの名前。</p>
 * @param string $newname <p>新しい名前。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 Upon failure (such as attempting to rename a non-existent file), an <i>E_WARNING</i> error will be emitted.</p>
 * @link http://php.net/manual/ja/function.ftp-rename.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_rename($ftp_stream, string $oldname, string $newname): bool {}

/**
 * ディレクトリを削除する
 * <p>FTP サーバー上の、指定した <code>directory</code> を削除します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $directory <p>削除するディレクトリ。空のディレクトリへの絶対パス または相対パスでなければなりません。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-rmdir.php
 * @see ftp_mkdir()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_rmdir($ftp_stream, string $directory): bool {}

/**
 * さまざまな FTP 実行時オプションを設定する
 * <p>この関数は、指定した FTP ストリームに関してのさまざまな実行時オプションを 制御します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param int $option <p>現在、以下のオプションがサポートされています:</p> <b>サポートされる実行時 FTP オプション</b>   <b><code>FTP_TIMEOUT_SEC</code></b>  全てのネットワーク関連関数に関して秒単位でタイムアウトを変更 します。<code>value</code>は、 0 より大きい整数値である必要があります。 デフォルトのタイムアウトは90秒です。    <b><code>FTP_AUTOSEEK</code></b>  有効になっている場合は、GET や PUT のリクエストが <code>resumepos</code> や <code>startpos</code> のパラメータ付きで実行されるとファイル中の該当位置をシークします。 デフォルトで有効になっています。    <b><code>FTP_USEPASVADDRESS</code></b>  When disabled, PHP will ignore the IP address returned by the FTP server in response to the PASV command and instead use the IP address that was supplied in the ftp_connect(). <code>value</code> must be a boolean.
 * @param mixed $value <p>このパラメータの内容は、どの <code>option</code> を変更しようとしているかによって変わります。</p>
 * @return bool <p>オプションが設定できた場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。 <code>option</code> がサポートされていなかった場合や <code>option</code> が想定していない値を <code>value</code> に渡した場合は警告メッセージが発生します。</p>
 * @link http://php.net/manual/ja/function.ftp-set-option.php
 * @see ftp_get_option()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function ftp_set_option($ftp_stream, int $option, $value): bool {}

/**
 * SITEコマンドをサーバーに送信する
 * <p><b>ftp_site()</b> は、指定された <i>SITE</i> コマンドを FTP サーバーに送信します。</p><p><i>SITE</i> コマンドの規格は統一されていないため、 サーバーにより仕様が異なります．ファイルのパーミッションや グループメンバーの設定のような処理を行う際には有用です。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $command <p>SITE コマンド。このパラメータはエスケープされないので、スペースや その他の文字を含むファイル名は問題を引き起こす可能性があることに 注意してください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-site.php
 * @see ftp_raw()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_site($ftp_stream, string $command): bool {}

/**
 * 指定したファイルのサイズを返す
 * <p><b>ftp_size()</b> は指定されたファイルのサイズを バイト数で返します。</p><p><b>注意</b>:</p><p>すべてのサーバーがこの機能をサポートしているわけではありません。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @param string $remote_file <p>リモートファイル。</p>
 * @return int <p>成功した場合はファイルのサイズを、エラー時には -1 を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-size.php
 * @see ftp_rawlist()
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_size($ftp_stream, string $remote_file): int {}

/**
 * セキュアな SSL-FTP 接続をオープンする
 * <p><b>ftp_ssl_connect()</b> は、指定した <code>host</code> への<i>明示的な</i> SSL-FTP 接続をオープンします。 サーバー側が SSL-FTP 接続に対応していなかったり、証明書が無効であったりした場合でも、 <b>ftp_ssl_connect()</b> は成功します。 そういった場合は、<code>ftp_login()</code> を呼んで AUTH FTP コマンドを送信した時点ではじめて、 <code>ftp_login()</code> が失敗することになります。</p><p><b>注意</b>: <b>この関数が存在しないことがあるのはなぜですか？</b><br></p><p><b>ftp_ssl_connect()</b> が使えるのは、 ftp モジュールおよび OpenSSL サポートが静的に PHP に組み込まれている場合のみです。 つまり、Windows 版の PHP 公式ビルドではこの関数は使えないということです。 この関数を Windows で使いたい場合は、PHP バイナリを自分でコンパイルしなければなりません。</p><p><b>注意</b>:</p><p><b>ftp_ssl_connect()</b> は、sFTP で使うための関数ではありません。 PHP で sFTP を使うには <code>ssh2_sftp()</code> を参照ください。</p>
 * @param string $host <p>FTP サーバーのアドレス。このパラメータには、最後のスラッシュや 先頭の <i>ftp://</i> をつけてはいけません。</p>
 * @param int $port <p><code>port</code> パラメータは別のポートに接続することを 指定します。これを省略するか 0 にした場合、デフォルトの FTP ポート、 つまり 21 が使用されます。</p>
 * @param int $timeout <p>このパラメータは、以降の全てのネットワーク処理の タイムアウトを指定します。省略された場合の デフォルト値は、90 秒となります。timeout は、 <code>ftp_set_option()</code> および <code>ftp_get_option()</code> でいつでも変更および取得可能です。</p>
 * @return resource <p>成功した場合に SSL-FTP ストリーム、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-ssl-connect.php
 * @see ftp_connect()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function ftp_ssl_connect(string $host, int $port = 21, int $timeout = 90) {}

/**
 * リモート FTP サーバーのシステム型 ID を返す
 * <p>リモート FTP サーバーのシステム型 ID を返します。</p>
 * @param resource $ftp_stream <p>FTP 接続のリンク ID 。</p>
 * @return string <p>リモートシステム型を返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ftp-systype.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ftp_systype($ftp_stream): string {}

define('FTP_ASCII', 1);

/**
 * <p>Automatically determine resume position and start position for GET and PUT requests (only works if FTP_AUTOSEEK is enabled)</p>
 */
define('FTP_AUTORESUME', -1);

/**
 * <p>See <code>ftp_set_option()</code> for information.</p>
 */
define('FTP_AUTOSEEK', 1);

define('FTP_BINARY', 2);

/**
 * <p>Asynchronous transfer has failed</p>
 */
define('FTP_FAILED', 0);

/**
 * <p>Asynchronous transfer has finished</p>
 */
define('FTP_FINISHED', 1);

/**
 * <p>Alias of <b><code>FTP_BINARY</code></b>.</p>
 */
define('FTP_IMAGE', 2);

/**
 * <p>Asynchronous transfer is still active</p>
 */
define('FTP_MOREDATA', 2);

/**
 * <p>Alias of <b><code>FTP_ASCII</code></b>.</p>
 */
define('FTP_TEXT', 1);

/**
 * <p>See <code>ftp_set_option()</code> for information.</p>
 */
define('FTP_TIMEOUT_SEC', 0);

/**
 * <p>See <code>ftp_set_option()</code> for information. Available as of PHP 5.6.0.</p>
 */
define('FTP_USEPASVADDRESS', 2);

