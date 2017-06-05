<?php

// Start of posix v.7.0.19

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * プロセスにシグナルを送信する
 * @link http://php.net/manual/ja/function.posix-kill.php
 * @param int $pid <p>
 * プロセス ID。
 * </p>
 * @param int $sig <p>
 * PCNTL シグナル定数
 * のいずれか。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function posix_kill(int $pid, int $sig): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のプロセス ID を返す
 * @link http://php.net/manual/ja/function.posix-getpid.php
 * @return int ID を表す整数値を返します。
 */
function posix_getpid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 親プロセスの ID を返す
 * @link http://php.net/manual/ja/function.posix-getppid.php
 * @return int ID を表す整数値を返します。
 */
function posix_getppid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のプロセスの実際のユーザー ID を返す
 * @link http://php.net/manual/ja/function.posix-getuid.php
 * @return int ID を表す整数値を返します。
 */
function posix_getuid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のプロセスの UID を設定する
 * @link http://php.net/manual/ja/function.posix-setuid.php
 * @param int $uid <p>
 * ユーザー ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function posix_setuid(int $uid): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のプロセスの有効なユーザー ID を返す
 * @link http://php.net/manual/ja/function.posix-geteuid.php
 * @return int ユーザー ID を表す整数値を返します。
 */
function posix_geteuid(): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 現在のプロセスの実効 UID を設定する
 * @link http://php.net/manual/ja/function.posix-seteuid.php
 * @param int $uid <p>
 * ユーザー ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function posix_seteuid(int $uid): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のプロセスの実際のグループ ID を返す
 * @link http://php.net/manual/ja/function.posix-getgid.php
 * @return int 実際のグループ ID を表す整数値を返します。
 */
function posix_getgid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のプロセスの GID を設定する
 * @link http://php.net/manual/ja/function.posix-setgid.php
 * @param int $gid <p>
 * グループ ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function posix_setgid(int $gid): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のプロセスの有効なグループ ID を返す
 * @link http://php.net/manual/ja/function.posix-getegid.php
 * @return int 実効グループ ID を表す整数値を返します。
 */
function posix_getegid(): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 現在のプロセスの実効 GID を設定する
 * @link http://php.net/manual/ja/function.posix-setegid.php
 * @param int $gid <p>
 * グループ ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function posix_setegid(int $gid): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のプロセスのグループセットを返す
 * @link http://php.net/manual/ja/function.posix-getgroups.php
 * @return array 現在のプロセスのグループセットについて、
 * グループ ID を表す整数値を含む配列を返します。
 */
function posix_getgroups(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ログイン名を返す
 * @link http://php.net/manual/ja/function.posix-getlogin.php
 * @return string ユーザーのログイン名を文字列で返します。
 */
function posix_getlogin(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のプロセスのグループ ID を返す
 * @link http://php.net/manual/ja/function.posix-getpgrp.php
 * @return int ID を表す整数値を返します。
 */
function posix_getpgrp(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のプロセスをセッションリーダーにする
 * @link http://php.net/manual/ja/function.posix-setsid.php
 * @return int セッション ID、あるいはエラー時に -1 を返します。
 */
function posix_setsid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ジョブ制御のプロセスグループ ID を設定する
 * @link http://php.net/manual/ja/function.posix-setpgid.php
 * @param int $pid <p>
 * プロセス ID。
 * </p>
 * @param int $pgid <p>
 * プロセスグループ ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function posix_setpgid(int $pid, int $pgid): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ジョブ制御のプロセスグループ ID を得る
 * @link http://php.net/manual/ja/function.posix-getpgid.php
 * @param int $pid <p>
 * プロセス ID。
 * </p>
 * @return int ID を表す整数値を返します。
 */
function posix_getpgid(int $pid): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * プロセスの現在の sid を得る
 * @link http://php.net/manual/ja/function.posix-getsid.php
 * @param int $pid <p>
 * プロセス ID。0 を指定すると、現在のプロセスとみなされます。
 * </p>
 * @return int ID を表す整数値を返します。
 */
function posix_getsid(int $pid): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * システム名を得る
 * @link http://php.net/manual/ja/function.posix-uname.php
 * @return array システムに関する情報を文字列の連想配列として返します。
 * 連想配列のキーは、次のようになります。
 * sysname - オペレーティングシステムの名前 (例 Linux)
 * nodename - システムの名前 (例 valiant)
 * release - オペレーティングシステムのリリース (例 2.2.10)
 * version - オペレーティングシステムのバージョン (例 #4 Tue Jul 20
 * 17:01:36 MEST 1999)
 * machine - システムアーキテクチャ (例 i586)
 * domainname - DNS ドメイン名 (例 example.com)
 * </p>
 * <p>
 * domainname は、GNU の拡張機能で POSIX.1 には含まれていません。
 * このため、このフィールドは GNU システム上または GNU libc
 * を使用している場合にのみ使用可能です。
 */
function posix_uname(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * プロセス時間を得る
 * @link http://php.net/manual/ja/function.posix-times.php
 * @return array 現在のプロセスの CPU 使用状況に関する情報を表す文字列を連想配列
 * として返します。連想配列のキーは次のようになります。
 * ticks - リブートからの経過クロック数。
 * utime - 現在のプロセスにより使用されているユーザー時間。
 * stime - 現在のプロセスにより使用されているシステム時間。
 * cutime - 現在のプロセスおよび子プロセスにより使用されているユーザー時間。
 * cstime - 現在のプロセスおよび子プロセスにより使用されているシステム時間。
 */
function posix_times(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 制御する端末のパス名を得る
 * @link http://php.net/manual/ja/function.posix-ctermid.php
 * @return string 処理に成功した場合は、現在制御している端末のパス名を表す文字列を返します。
 * それ以外の場合は <b>FALSE</b> を返し、errno を設定します。
 * この値を調べるには <b>posix_get_last_error</b> を使用します。
 */
function posix_ctermid(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 端末のデバイス名を調べる
 * @link http://php.net/manual/ja/function.posix-ttyname.php
 * @param mixed $fd
 * @return string 成功した場合に <i>fd</i> の絶対パスを表す文字列、
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function posix_ttyname($fd): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイル記述子が対話型端末であるかどうかを定義する
 * @link http://php.net/manual/ja/function.posix-isatty.php
 * @param mixed $fd
 * @return bool <i>fd</i> がオープンされており、
 * かつ端末に接続されている場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function posix_isatty($fd): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のディレクトリのパス名
 * @link http://php.net/manual/ja/function.posix-getcwd.php
 * @return string 絶対パスを表す文字列を返します。
 * エラー時には <b>FALSE</b> を返し、errno を設定します。この値は
 * <b>posix_get_last_error</b> で取得することができます。
 */
function posix_getcwd(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * fifo スペシャルファイル(名前付きパイプ)を作成する
 * @link http://php.net/manual/ja/function.posix-mkfifo.php
 * @param string $pathname <p>
 * FIFO ファイルへのパス。
 * </p>
 * @param int $mode <p>
 * 2 番目のパラメータ <i>mode</i> は、8 進表記
 * (例: 0644)で指定する必要があります。新しく作成される
 * FIFO のパーミッションは、現在の
 * <b>umask</b> の設定にも依存します。
 * 作成されるファイルのパーミッションは (mode &#38;#38; ~umask)
 * となります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function posix_mkfifo(string $pathname, int $mode): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * スペシャルファイルあるいは通常のファイルを作成する (POSIX.1)
 * @link http://php.net/manual/ja/function.posix-mknod.php
 * @param string $pathname <p>
 * 作成するファイル。
 * </p>
 * @param int $mode <p>
 * このパラメータは、ファイル型(以下の定数
 * <b>POSIX_S_IFREG</b>、
 * <b>POSIX_S_IFCHR</b>、<b>POSIX_S_IFBLK</b>、
 * <b>POSIX_S_IFIFO</b> あるいは
 * <b>POSIX_S_IFSOCK</b> のうちのひとつ)
 * およびパーミッションの論理和で構成されます。
 * </p>
 * @param int $major [optional] <p>
 * メジャーデバイスカーネル ID
 * (<b>S_IFCHR</b> あるいは <b>S_IFBLK</b>
 * を使用している場合に渡す必要があります)。
 * </p>
 * @param int $minor [optional] <p>
 * マイナーデバイスカーネル ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function posix_mknod(string $pathname, int $mode, int $major = 0, int $minor = 0): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * ファイルのアクセス権限を判断する
 * @link http://php.net/manual/ja/function.posix-access.php
 * @param string $file <p>
 * 調べるファイルの名前。
 * </p>
 * @param int $mode [optional] <p>
 * <b>POSIX_F_OK</b>、<b>POSIX_R_OK</b>、
 * <b>POSIX_W_OK</b> および <b>POSIX_X_OK</b>
 * のうちのひとつあるいは複数からなるマスク。
 * </p>
 * <p>
 * <b>POSIX_R_OK</b>、<b>POSIX_W_OK</b> および
 * <b>POSIX_X_OK</b> は、ファイルが存在して読み込み/書き込み/
 * 実行の権限があるかどうかを調べます。
 * <b>POSIX_F_OK</b> は単にファイルが存在するかどうか
 * だけを調べます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function posix_access(string $file, int $mode = POSIX_F_OK): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した名前のグループに関する情報を返す
 * @link http://php.net/manual/ja/function.posix-getgrnam.php
 * @param string $name <p>グループの名前。</p>
 * @return array 以下の要素を持つ配列を返します。
 * <table>
 * グループ情報の配列
 * <tr valign="top">
 * <td>要素</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * グループ名。これは、16 文字以下の短い文字列からなる
 * 「ハンドル」であり、実際の完全な名前とは異なります。
 * グループ ID。この関数をコールする際に指定した
 * <i>name</i> と同じものになるので、冗長なデータです。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * グループのパスワードを暗号化したもの。
 * システムが「シャドー」パスワードを使用している場合は、
 * ここではアスタリスクが返されます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * グループ ID を表す数値。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>members</td>
 * <td>
 * このグループに属する全メンバーを表す文字列の配列。
 * </td>
 * </tr>
 * </table>
 */
function posix_getgrnam(string $name): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定したグループ ID を有するグループに関する情報を返す
 * @link http://php.net/manual/ja/function.posix-getgrgid.php
 * @param int $gid <p>
 * グループ ID。
 * </p>
 * @return array 以下の要素を持つ配列を返します。
 * <table>
 * グループ情報の配列
 * <tr valign="top">
 * <td>要素</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * グループ名。これは、16 文字以下の短い文字列からなる
 * 「ハンドル」であり、実際の完全な名前とは異なります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * グループのパスワードを暗号化したもの。
 * システムが「シャドー」パスワードを使用している場合は、
 * ここではアスタリスクが返されます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * グループ ID。この関数をコールする際に指定した
 * <i>gid</i> と同じものになるので、冗長なデータです。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>members</td>
 * <td>
 * このグループに属する全メンバーを表す文字列の配列。
 * </td>
 * </tr>
 * </table>
 */
function posix_getgrgid(int $gid): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した名前のユーザーに関する情報を返す
 * @link http://php.net/manual/ja/function.posix-getpwnam.php
 * @param string $username <p>
 * 英数字で表したユーザー名。
 * </p>
 * @return array 成功した場合は次の要素を持つ配列、それ以外の場合は
 * <b>FALSE</b> を返します。
 * <table>
 * ユーザー情報配列
 * <tr valign="top">
 * <td>要素</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * 要素 name はユーザー名を有しています。これは、通常、
 * 実際の完全な名前ではなく16文字未満のユーザーの"ハンドル名"となります。
 * この値はこの関数をコールした際に使用したパラメータ
 * <i>username</i>と同じとする必要があり、
 * このため冗長な定義となります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * 要素passwd には暗号化されたユーザーのパスワードが含まれます。
 * シャドウパスワードを使用しているシステムでは、アスタリスクが代わりに
 * 返されます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>uid</td>
 * <td>
 * 数値形式で表したユーザー ID。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * ユーザーのグループ ID。
 * 実際のグループ名を調べたりそのグループのメンバーの一覧を
 * 得るには関数 <b>posix_getgrgid</b> を使用してください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gecos</td>
 * <td>
 * GECOS は旧式の項であり、Honeywell バッチ処理プログラムの
 * finger 情報フィールドを参照します。
 * しかし、このフィールドはまだ生きており、その内容はPOSIXで
 * 規定されています。
 * このフィールドには、カンマで区切られた
 * ユーザーのフルネーム、オフィスの電話番号、家の電話番号に関する
 * リストが含まれています。多くのシステムでは、ユーザーのフルネーム
 * のみが利用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>dir</td>
 * <td>
 * この要素には、ユーザーのホームディレクトリへの絶対パスが含まれています。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>shell</td>
 * <td>
 * shell 要素には、ユーザーのデフォルトシェルの実行ファイルへの絶対パスが
 * 含まれています。
 * </td>
 * </tr>
 * </table>
 */
function posix_getpwnam(string $username): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定 ID のユーザーに関する情報を返す
 * @link http://php.net/manual/ja/function.posix-getpwuid.php
 * @param int $uid <p>
 * ユーザー ID。
 * </p>
 * @return array 返される連想配列の要素は次のようになります。
 * <table>
 * ユーザー情報配列
 * <tr valign="top">
 * <td>要素</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * 要素 name はユーザー名を有しています。これは、通常、
 * 実際の完全な名前ではなく16文字未満のユーザーの"ハンドル名"となります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * 要素passwd には暗号化されたユーザーのパスワードが含まれます。
 * シャドウパスワードを使用しているシステムでは、アスタリスクが代わりに
 * 返されます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>uid</td>
 * <td>
 * ユーザーID。これは、この関数をコールする際に使用するパラメータ
 * <i>uid</i>と同じとなり、このため冗長になります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * ユーザーのグループID。
 * 実際のグループ名を調べたりそのグループのメンバーの一覧を
 * 得るには関数<b>posix_getgrgid</b>を使用してください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gecos</td>
 * <td>
 * GECOS は旧式の項であり、Honeywell バッチ処理プログラムの
 * finger 情報フィールドを参照します。
 * しかし、このフィールドはまだ生きており、その内容はPOSIXで
 * 規定されています。
 * このフィールドには、カンマで区切られた
 * ユーザーのフルネーム、オフィスの電話番号、家の電話番号に関する
 * リストが含まれています。多くのシステムでは、ユーザーのフルネーム
 * のみが利用可能です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>dir</td>
 * <td>
 * この要素には、ユーザーのホームディレクトリへの絶対パスが含まれています。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>shell</td>
 * <td>
 * shell 要素には、ユーザーのデフォルトシェルの実行ファイルへの絶対パスが
 * 含まれています。
 * </td>
 * </tr>
 * </table>
 */
function posix_getpwuid(int $uid): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * システムリソース制限に関する情報を返す
 * @link http://php.net/manual/ja/function.posix-getrlimit.php
 * @return array 各リソースに関する制限値を含む連想配列を返します。
 * 個々のリミット値には、ソフトリミットとハードリミットがあります。
 * <table>
 * 返される制限の一覧
 * <tr valign="top">
 * <td>制限の名前</td>
 * <td>制限についての説明</td>
 * </tr>
 * <tr valign="top">
 * <td>core</td>
 * <td>
 * コアファイルの最大サイズ。0 の場合はコアファイルを作成しません。
 * コアファイルのサイズがこの値を超えると、
 * このサイズまで切り詰められます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>totalmem</td>
 * <td>
 * プロセスのメモリの最大サイズを表すバイト数。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>virtualmem</td>
 * <td>
 * プロセスの仮想メモリの最大サイズを表すバイト数。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>data</td>
 * <td>
 * プロセスのデータセグメントの最大サイズを表すバイト数。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>stack</td>
 * <td>
 * プロセスのスタックの最大サイズを表すバイト数。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>rss</td>
 * <td>
 * RAM 上の仮想ページの最大数。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>maxproc</td>
 * <td>
 * 呼び出し元のプロセスの実ユーザー ID で作成できるプロセスの最大数。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>memlock</td>
 * <td>
 * RAM 内にロックできるメモリの最大バイト数。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>cpu</td>
 * <td>
 * そのプロセスが使用できる CPU 時間。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>filesize</td>
 * <td>
 * そのプロセスが使用できるデータセグメントの最大サイズを表すバイト数。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>openfiles</td>
 * <td>
 * オープンできるファイル記述子の最大値よりひとつ大きい値。
 * </td>
 * </tr>
 * </table>
 */
function posix_getrlimit(): array {}

/**
 * (PHP 7)<br/>
 * システムリソース制限を設定
 * @link http://php.net/manual/ja/function.posix-setrlimit.php
 * @param int $resource <p>
 * 設定されるリミットに対応するリソースリミット定数です。
 * </p>
 * @param int $softlimit <p>
 * ソフトリミット、単位は、リソース制限が必要とする任意の単位です。または、
 * <b>POSIX_RLIMIT_INFINITY</b> です。
 * </p>
 * @param int $hardlimit <p>
 * ハードリミット、単位は、リソース制限が必要とする任意の単位です。または、
 * <b>POSIX_RLIMIT_INFINITY</b> です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function posix_setrlimit(int $resource, int $softlimit, int $hardlimit): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 直近で失敗した posix 関数が設定したエラー番号を取得する
 * @link http://php.net/manual/ja/function.posix-get-last-error.php
 * @return int 直近で失敗した posix 関数が設定した errno (エラー番号) を返します。
 * エラーが発生していない場合は 0 が返されます。
 */
function posix_get_last_error(): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * <b>posix_get_last_error</b> のエイリアス
 * @link http://php.net/manual/ja/function.posix-errno.php
 */
function posix_errno() {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 指定したエラー番号に対応するシステムのエラーメッセージを取得する
 * @link http://php.net/manual/ja/function.posix-strerror.php
 * @param int $errno <p>
 * <b>posix_get_last_error</b> が返す
 * POSIX エラー番号。0 に設定すると、文字列
 * "Success" が返されます。
 * </p>
 * @return string エラーメッセージを表す文字列を返します。
 */
function posix_strerror(int $errno): string {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * グループアクセスリストを求める
 * @link http://php.net/manual/ja/function.posix-initgroups.php
 * @param string $name <p>
 * リストを取得したいユーザー。
 * </p>
 * @param int $base_group_id <p>
 * パスワードファイルから取得したグループ番号。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function posix_initgroups(string $name, int $base_group_id): bool {}


/**
 * ファイルが存在するかどうかを調べます。
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_F_OK', 0);

/**
 * ファイルが存在し、実行が許可されているかどうかを調べます。
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_X_OK', 1);

/**
 * ファイルが存在し、書き込みが許可されているかどうかを調べます。
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_W_OK', 2);

/**
 * ファイルが存在し、読み込みが許可されているかどうかを調べます。
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_R_OK', 4);

/**
 * 通常のファイル。
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_S_IFREG', 32768);

/**
 * キャラクタスペシャルファイル。
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_S_IFCHR', 8192);

/**
 * ブロックスペシャルファイル。
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_S_IFBLK', 24576);

/**
 * FIFO (名前つきパイプ) スペシャルファイル。
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_S_IFIFO', 4096);

/**
 * ソケット。
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_S_IFSOCK', 49152);

/**
 * The maximum size of the process's address space in bytes. See also PHP's
 * memory_limit configuration
 * directive.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_AS', 9);

/**
 * The maximum size of a core file. If the limit is set to 0, no core file
 * will be generated.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_CORE', 4);

/**
 * The maximum amount of CPU time that the process can use, in seconds.
 * When the soft limit is hit, a SIGXCPU signal will be
 * sent, which can be caught with <b>pcntl_signal</b>.
 * Depending on the operating system, additional SIGXCPU
 * signals may be sent each second until the hard limit is hit, at which
 * point an uncatchable SIGKILL signal is sent.
 * See also <b>set_time_limit</b>.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_CPU', 0);

/**
 * The maximum size of the process's data segment, in bytes. It is
 * extremely unlikely that this will have any effect on the execution of
 * PHP unless an extension is in use that calls <b>brk</b> or
 * <b>sbrk</b>.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_DATA', 2);

/**
 * The maximum size of files that the process can create, in bytes.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_FSIZE', 1);

/**
 * The maximum number of locks that the process can create. This is only
 * supported on extremely old Linux kernels.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_LOCKS', 10);

/**
 * The maximum number of bytes that can be locked into memory.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_MEMLOCK', 8);

/**
 * The maximum number of bytes that can be allocated for POSIX message
 * queues. PHP does not ship with support for POSIX message queues, so this
 * limit will not have any effect unless you are using an extension that
 * implements that support.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_MSGQUEUE', 12);

/**
 * The maximum value to which the process can be
 * reniced to. The value
 * that will be used will be 20 - limit, as resource
 * limit values cannot be negative.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_NICE', 13);

/**
 * A value one greater than the maximum file descriptor number that can be
 * opened by this process.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_NOFILE', 7);

/**
 * The maximum number of processes (and/or threads, on some operating
 * systems) that can be created for the real user ID of the process.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_NPROC', 6);

/**
 * The maximum size of the process's resident set, in pages.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_RSS', 5);

/**
 * The maximum real time priority that can be set via the
 * <b>sched_setscheduler</b> and
 * <b>sched_setparam</b> system calls.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_RTPRIO', 14);

/**
 * The maximum amount of CPU time, in microseconds, that the process can
 * consume without making a blocking system call if it is using real time
 * scheduling.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_RTTIME', 15);

/**
 * The maximum number of signals that can be queued for the real user ID of
 * the process.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_SIGPENDING', 11);

/**
 * The maximum size of the process stack, in bytes.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_STACK', 3);

/**
 * Used to indicate an infinite value for a resource limit.
 * @link http://php.net/manual/ja/posix.constants.php
 */
define ('POSIX_RLIMIT_INFINITY', -1);

// End of posix v.7.0.19
?>
