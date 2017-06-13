<?php

// Start of ftp v.7.1.5

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * FTP 接続をオープンする
 * @link http://php.net/manual/ja/function.ftp-connect.php
 * @param string $host <p>
 * FTP サーバーのアドレス。このパラメータには、最後のスラッシュや最初の
 * ftp:// をつけてはいけません。
 * </p>
 * @param int $port [optional] <p>
 * このパラメータは接続先のポートを指定します。もし指定しなかったり
 * ゼロを指定したりした場合は、デフォルトの FTP ポートである 21
 * が用いられます。
 * </p>
 * @param int $timeout [optional] <p>
 * このパラメータは、以降のネットワーク操作時のタイムアウトを指定します。
 * 指定されなかった場合のデフォルト値は 90 秒です。タイムアウトの変更や
 * 参照は、<b>ftp_set_option</b> や
 * <b>ftp_get_option</b> を用いていつでも可能です。
 * </p>
 * @return resource 成功した場合に FTP ストリームを、エラー時に <b>FALSE</b> を返します。
 */
function ftp_connect(string $host, int $port = 21, int $timeout = 90) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * セキュアな SSL-FTP 接続をオープンする
 * @link http://php.net/manual/ja/function.ftp-ssl-connect.php
 * @param string $host <p>
 * FTP サーバーのアドレス。このパラメータには、最後のスラッシュや
 * 先頭の ftp:// をつけてはいけません。
 * </p>
 * @param int $port [optional] <p>
 * <i>port</i> パラメータは別のポートに接続することを
 * 指定します。これを省略するか 0 にした場合、デフォルトの FTP ポート、
 * つまり 21 が使用されます。
 * </p>
 * @param int $timeout [optional] <p>
 * このパラメータは、以降の全てのネットワーク処理の
 * タイムアウトを指定します。省略された場合の
 * デフォルト値は、90 秒となります。timeout は、
 * <b>ftp_set_option</b> および
 * <b>ftp_get_option</b>
 * でいつでも変更および取得可能です。
 * </p>
 * @return resource 成功した場合に SSL-FTP ストリーム、エラー時に <b>FALSE</b> を返します。
 */
function ftp_ssl_connect(string $host, int $port = 21, int $timeout = 90) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * FTP 接続にログインする
 * @link http://php.net/manual/ja/function.ftp-login.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $username <p>
 * ユーザー名（USER）。
 * </p>
 * @param string $password <p>
 * パスワード（PASS）。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * 失敗した場合は、PHP が警告を発生します。
 */
function ftp_login($ftp_stream, string $username, string $password): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * カレントのディレクトリ名を返す
 * @link http://php.net/manual/ja/function.ftp-pwd.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @return string カレントのディレクトリ名、またはエラー時には <b>FALSE</b> を返します。
 */
function ftp_pwd($ftp_stream): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 親ディレクトリに移動する
 * @link http://php.net/manual/ja/function.ftp-cdup.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftp_cdup($ftp_stream): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * FTP サーバー上でディレクトリを移動する
 * @link http://php.net/manual/ja/function.ftp-chdir.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $directory <p>
 * 対象となるディレクトリ。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * ディレクトリの変更に失敗した場合は、PHP は警告を出します。
 */
function ftp_chdir($ftp_stream, string $directory): bool {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * FTP サーバー上でのコマンドの実行をリクエストする
 * @link http://php.net/manual/ja/function.ftp-exec.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $command <p>
 * 実行したいコマンド。
 * </p>
 * @return bool コマンドが成功した（サーバーの応答コードが 200）
 * 場合に <b>TRUE</b> を、それ以外の場合に <b>FALSE</b> を返します。
 */
function ftp_exec($ftp_stream, string $command): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * FTP サーバーに任意のコマンドを送信する
 * @link http://php.net/manual/ja/function.ftp-raw.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $command <p>
 * 実行したいコマンド。
 * </p>
 * @return array サーバーからの応答を文字列の配列で返します。
 * 結果の文字列に対して、何の処理も行いません。また、
 * <b>ftp_raw</b> はそのコマンドが成功したのかどうかを
 * 判断できません。
 */
function ftp_raw($ftp_stream, string $command): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ディレクトリを作成する
 * @link http://php.net/manual/ja/function.ftp-mkdir.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $directory <p>
 * 作成されるディレクトリの名前。
 * </p>
 * @return string 成功した時には新規に作成したディレクトリ名、エラー時に <b>FALSE</b>
 * を返します。
 */
function ftp_mkdir($ftp_stream, string $directory): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ディレクトリを削除する
 * @link http://php.net/manual/ja/function.ftp-rmdir.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $directory <p>
 * 削除するディレクトリ。空のディレクトリへの絶対パス
 * または相対パスでなければなりません。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftp_rmdir($ftp_stream, string $directory): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * FTP 経由でファイルのパーミッションを設定する
 * @link http://php.net/manual/ja/function.ftp-chmod.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param int $mode <p>
 * 新しいパーミッション。8 進数 で指定します。
 * </p>
 * @param string $filename <p>
 * リモートファイル。
 * </p>
 * @return int 成功した場合に新しいパーミッションを、エラー時に <b>FALSE</b> を返します。
 */
function ftp_chmod($ftp_stream, int $mode, string $filename): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * アップロードされるファイルのためのスペースを確保する
 * @link http://php.net/manual/ja/function.ftp-alloc.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param int $filesize <p>
 * 確保したいバイト数。
 * </p>
 * @param string $result [optional] <p>
 * もし変数が指定されていた場合、サーバーからの応答テキストの内容の
 * 参照が格納されます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftp_alloc($ftp_stream, int $filesize, string &$result = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定したディレクトリのファイルの一覧を返す
 * @link http://php.net/manual/ja/function.ftp-nlist.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $directory <p>
 * 一覧を表示するディレクトリ。このパラメータには引数を含めることができます。
 * 例: ftp_nlist($conn_id, "-la /your/dir");
 * このパラメータはエスケープ処理されません。スペースやその他の文字を含む
 * ファイル名では問題が発生する可能性があることに注意してください。
 * </p>
 * @return array 成功した場合は指定したディレクトリ内のファイル名の配列を、
 * エラー時には <b>FALSE</b> を返します。
 */
function ftp_nlist($ftp_stream, string $directory): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定したディレクトリの詳細なファイル一覧を返す
 * @link http://php.net/manual/ja/function.ftp-rawlist.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $directory <p>
 * ディレクトリのパス。
 * LIST コマンドの引数を含むこともあります。
 * </p>
 * @param bool $recursive [optional] <p>
 * <b>TRUE</b> を設定した場合、発行されるコマンドは LIST -R
 * となります。
 * </p>
 * @return mixed 各要素が 1 行分のテキストに対応する配列を返します。
 * 渡された <i>directory</i> が無効な場合は <b>FALSE</b> を返します。
 * </p>
 * <p>
 * 出力に関する処理は全く行われません。結果の解釈の仕方を定義するために
 * <b>ftp_systype</b> から返されるシステム型 ID
 * を使用することができます。
 */
function ftp_rawlist($ftp_stream, string $directory, bool $recursive = false) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * リモート FTP サーバーのシステム型 ID を返す
 * @link http://php.net/manual/ja/function.ftp-systype.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @return string リモートシステム型を返します。エラー時には <b>FALSE</b> を返します。
 */
function ftp_systype($ftp_stream): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * パッシブモードをオンまたはオフにする
 * @link http://php.net/manual/ja/function.ftp-pasv.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param bool $pasv <p>
 * <b>TRUE</b>, の場合はパッシブモードをオンに、そうでない場合はオフにします。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftp_pasv($ftp_stream, bool $pasv): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * FTP サーバーからファイルをダウンロードする
 * @link http://php.net/manual/ja/function.ftp-get.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $local_file <p>
 * ローカルファイルのパス（ファイルがすでに存在する場合は上書きされます）。
 * </p>
 * @param string $remote_file <p>
 * リモートファイルのパス。
 * </p>
 * @param int $mode <p>
 * 転送モード。<b>FTP_ASCII</b> または
 * <b>FTP_BINARY</b> のどちらかを指定する必要があります。
 * </p>
 * @param int $resumepos [optional] <p>
 * リモートファイルの、ダウンロードを開始する位置。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftp_get($ftp_stream, string $local_file, string $remote_file, int $mode, int $resumepos = 0): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * FTP サーバーからファイルをダウンロードし、オープン中のファイルに保存する
 * @link http://php.net/manual/ja/function.ftp-fget.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param resource $handle <p>
 * オープンされているファイルのポインタ。ここにデータが保存されます。
 * </p>
 * @param string $remote_file <p>
 * リモートファイルのパス。
 * </p>
 * @param int $mode <p>
 * 転送モード。<b>FTP_ASCII</b> または
 * <b>FTP_BINARY</b> のどちらかを指定する必要があります。
 * </p>
 * @param int $resumepos [optional] <p>
 * リモートファイル中で、ダウンロードを開始する位置。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftp_fget($ftp_stream, $handle, string $remote_file, int $mode, int $resumepos = 0): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * FTP サーバーにファイルをアップロードする
 * @link http://php.net/manual/ja/function.ftp-put.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $remote_file <p>
 * リモートファイルのパス。
 * </p>
 * @param string $local_file <p>
 * ローカルファイルのパス。
 * </p>
 * @param int $mode <p>
 * 転送モード。<b>FTP_ASCII</b> または
 * <b>FTP_BINARY</b> のどちらかを指定する必要があります。
 * </p>
 * @param int $startpos [optional] <p>リモートファイル内での、アップロード開始位置。</p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftp_put($ftp_stream, string $remote_file, string $local_file, int $mode, int $startpos = 0): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * オープン中のファイルを FTP サーバーにアップロードする
 * @link http://php.net/manual/ja/function.ftp-fput.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $remote_file <p>
 * リモートファイルのパス。
 * </p>
 * @param resource $handle <p>
 * ローカルでオープンされているファイルのポインタ。
 * ファイルの終端まで進むと読み込みが終了します。
 * </p>
 * @param int $mode <p>
 * 転送モード。<b>FTP_ASCII</b> または
 * <b>FTP_BINARY</b> のどちらかを指定する必要があります。
 * </p>
 * @param int $startpos [optional] <p>リモートファイル内での、アップロード開始位置。</p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftp_fput($ftp_stream, string $remote_file, $handle, int $mode, int $startpos = 0): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定したファイルのサイズを返す
 * @link http://php.net/manual/ja/function.ftp-size.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $remote_file <p>
 * リモートファイル。
 * </p>
 * @return int 成功した場合はファイルのサイズを、エラー時には -1 を返します。
 */
function ftp_size($ftp_stream, string $remote_file): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定したファイルが最後に更新された時刻を返す
 * @link http://php.net/manual/ja/function.ftp-mdtm.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $remote_file <p>
 * 最終更新時刻を取得するファイル。
 * </p>
 * @return int 成功した場合にUNIXのタイムスタンプ、エラー時に -1 を返します。
 */
function ftp_mdtm($ftp_stream, string $remote_file): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * FTP サーバー上のファイルまたはディレクトリの名前を変更する
 * @link http://php.net/manual/ja/function.ftp-rename.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $oldname <p>
 * 現在のファイル/ディレクトリの名前。
 * </p>
 * @param string $newname <p>
 * 新しい名前。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * Upon failure (such as attempting to rename a non-existent
 * file), an E_WARNING error will be emitted.
 */
function ftp_rename($ftp_stream, string $oldname, string $newname): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * FTP サーバー上のファイルを削除する
 * @link http://php.net/manual/ja/function.ftp-delete.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $path <p>
 * 削除するファイル。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftp_delete($ftp_stream, string $path): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * SITEコマンドをサーバーに送信する
 * @link http://php.net/manual/ja/function.ftp-site.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $command <p>
 * SITE コマンド。このパラメータはエスケープされないので、スペースや
 * その他の文字を含むファイル名は問題を引き起こす可能性があることに
 * 注意してください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftp_site($ftp_stream, string $command): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * FTP 接続を閉じる
 * @link http://php.net/manual/ja/function.ftp-close.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftp_close($ftp_stream): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * さまざまな FTP 実行時オプションを設定する
 * @link http://php.net/manual/ja/function.ftp-set-option.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param int $option <p>
 * 現在、以下のオプションがサポートされています:
 * <table>
 * サポートされる実行時 FTP オプション
 * <tr valign="top">
 * <td><b>FTP_TIMEOUT_SEC</b></td>
 * <td>
 * 全てのネットワーク関連関数に関して秒単位でタイムアウトを変更
 * します。<i>value</i>は、
 * 0 より大きい整数値である必要があります。
 * デフォルトのタイムアウトは90秒です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>FTP_AUTOSEEK</b></td>
 * <td>
 * 有効になっている場合は、GET や PUT のリクエストが
 * <i>resumepos</i> や <i>startpos</i>
 * のパラメータ付きで実行されるとファイル中の該当位置をシークします。
 * デフォルトで有効になっています。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param mixed $value <p>
 * このパラメータの内容は、どの <i>option</i>
 * を変更しようとしているかによって変わります。
 * </p>
 * @return bool オプションが設定できた場合に <b>TRUE</b> 、そうでない場合に <b>FALSE</b> を返します。
 * <i>option</i> がサポートされていなかった場合や
 * <i>option</i> が想定していない値を <i>value</i>
 * に渡した場合は警告メッセージが発生します。
 */
function ftp_set_option($ftp_stream, int $option, $value): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * カレント FTP ストリームでの種々の実行時動作を取得する
 * @link http://php.net/manual/ja/function.ftp-get-option.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID
 * </p>
 * @param int $option <p>
 * 現在、以下のオプションがサポートされています:
 * <table>
 * サポートされる実行時 FTP オプション
 * <tr valign="top">
 * <td><b>FTP_TIMEOUT_SEC</b></td>
 * <td>
 * ネットワーク関連処理で使用されるカレントのタイムアウトを返します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>FTP_AUTOSEEK</b></td>
 * <td>
 * オプションが設定されている場合に <b>TRUE</b> を、それ以外の場合に
 * <b>FALSE</b> を返します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return mixed 成功した場合はその値を、指定した <i>option</i>
 * がサポートされていない場合は <b>FALSE</b> を返します。後者の場合は、
 * 同時に警告メッセージも発生します。
 */
function ftp_get_option($ftp_stream, int $option) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * FTP サーバーからファイルをダウンロードし、オープン中のファイルに保存する（非ブロッキング）
 * @link http://php.net/manual/ja/function.ftp-nb-fget.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param resource $handle <p>
 * オープンされているファイルのポインタ。ここにデータが保存されます。
 * </p>
 * @param string $remote_file <p>
 * リモートファイルのパス。
 * </p>
 * @param int $mode <p>
 * 転送モード。<b>FTP_ASCII</b> または
 * <b>FTP_BINARY</b> のどちらかを指定する必要があります。
 * </p>
 * @param int $resumepos [optional] <p>ダウンロードを開始する、リモートファイル内の位置。</p>
 * @return int <b>FTP_FAILED</b>、<b>FTP_FINISHED</b>
 * あるいは <b>FTP_MOREDATA</b> を返します。
 */
function ftp_nb_fget($ftp_stream, $handle, string $remote_file, int $mode, int $resumepos = 0): int {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * FTP サーバーからファイルを取得し、ローカルファイルに書き込む（非ブロッキング）
 * @link http://php.net/manual/ja/function.ftp-nb-get.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $local_file <p>
 * ローカルファイルのパス（ファイルがすでに存在する場合、上書きされます）。
 * </p>
 * @param string $remote_file <p>
 * リモートファイルのパス。
 * </p>
 * @param int $mode <p>
 * 転送モード。<b>FTP_ASCII</b> または
 * <b>FTP_BINARY</b> のどちらかを指定する必要があります。
 * </p>
 * @param int $resumepos [optional] <p>ダウンロードを開始する、リモートファイル内の位置。</p>
 * @return int <b>FTP_FAILED</b>、<b>FTP_FINISHED</b>
 * あるいは <b>FTP_MOREDATA</b> を返します。
 */
function ftp_nb_get($ftp_stream, string $local_file, string $remote_file, int $mode, int $resumepos = 0): int {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ファイルの取得/送信を継続する（非ブロッキング）
 * @link http://php.net/manual/ja/function.ftp-nb-continue.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @return int <b>FTP_FAILED</b>、<b>FTP_FINISHED</b>
 * あるいは <b>FTP_MOREDATA</b> を返します。
 */
function ftp_nb_continue($ftp_stream): int {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * FTP サーバーにファイルを保存する（非ブロッキング）
 * @link http://php.net/manual/ja/function.ftp-nb-put.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $remote_file <p>
 * リモートファイルのパス。
 * </p>
 * @param string $local_file <p>
 * ローカルファイルのパス。
 * </p>
 * @param int $mode <p>
 * 転送モード。<b>FTP_ASCII</b> または
 * <b>FTP_BINARY</b> のどちらかを指定する必要があります。
 * </p>
 * @param int $startpos [optional] <p>リモートファイル内での、アップロード開始位置。</p>
 * @return int <b>FTP_FAILED</b>、<b>FTP_FINISHED</b>
 * あるいは <b>FTP_MOREDATA</b> を返します。
 */
function ftp_nb_put($ftp_stream, string $remote_file, string $local_file, int $mode, int $startpos = 0): int {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * オープン中のファイルを FTP サーバーに保存する（非ブロッキング）
 * @link http://php.net/manual/ja/function.ftp-nb-fput.php
 * @param resource $ftp_stream <p>
 * FTP 接続のリンク ID 。
 * </p>
 * @param string $remote_file <p>
 * リモートファイルのパス。
 * </p>
 * @param resource $handle <p>
 * ローカルでオープンされているファイルのポインタ。
 * ファイルの終端まで進むと読み込みが終了します。
 * </p>
 * @param int $mode <p>
 * 転送モード。<b>FTP_ASCII</b> または
 * <b>FTP_BINARY</b> のどちらかを指定する必要があります。
 * </p>
 * @param int $startpos [optional] <p>リモートファイル内での、アップロード開始位置。</p>
 * @return int <b>FTP_FAILED</b>、<b>FTP_FINISHED</b>
 * あるいは <b>FTP_MOREDATA</b> を返します。
 */
function ftp_nb_fput($ftp_stream, string $remote_file, $handle, int $mode, int $startpos = 0): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>ftp_close</b> のエイリアス
 * @link http://php.net/manual/ja/function.ftp-quit.php
 * @param $ftp
 */
function ftp_quit($ftp) {}


/**
 * <p></p>
 * @link http://php.net/manual/ja/ftp.constants.php
 */
define ('FTP_ASCII', 1);

/**
 * <p>Alias of <b>FTP_ASCII</b>.</p>
 * @link http://php.net/manual/ja/ftp.constants.php
 */
define ('FTP_TEXT', 1);

/**
 * <p></p>
 * @link http://php.net/manual/ja/ftp.constants.php
 */
define ('FTP_BINARY', 2);

/**
 * <p>Alias of <b>FTP_BINARY</b>.</p>
 * @link http://php.net/manual/ja/ftp.constants.php
 */
define ('FTP_IMAGE', 2);

/**
 * <p>
 * Automatically determine resume position and start position for GET and PUT requests
 * (only works if FTP_AUTOSEEK is enabled)
 * </p>
 * @link http://php.net/manual/ja/ftp.constants.php
 */
define ('FTP_AUTORESUME', -1);

/**
 * <p>
 * See <b>ftp_set_option</b> for information.
 * </p>
 * @link http://php.net/manual/ja/ftp.constants.php
 */
define ('FTP_TIMEOUT_SEC', 0);

/**
 * <p>
 * See <b>ftp_set_option</b> for information.
 * </p>
 * @link http://php.net/manual/ja/ftp.constants.php
 */
define ('FTP_AUTOSEEK', 1);
define ('FTP_USEPASVADDRESS', 2);

/**
 * <p>
 * Asynchronous transfer has failed
 * </p>
 * @link http://php.net/manual/ja/ftp.constants.php
 */
define ('FTP_FAILED', 0);

/**
 * <p>
 * Asynchronous transfer has finished
 * </p>
 * @link http://php.net/manual/ja/ftp.constants.php
 */
define ('FTP_FINISHED', 1);

/**
 * <p>
 * Asynchronous transfer is still active
 * </p>
 * @link http://php.net/manual/ja/ftp.constants.php
 */
define ('FTP_MOREDATA', 2);

// End of ftp v.7.1.5
?>
