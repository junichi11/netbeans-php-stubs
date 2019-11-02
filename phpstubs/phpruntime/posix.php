<?php



namespace {

	/**
	 * ファイルのアクセス権限を判断する
	 * <p><b>posix_access()</b> は、ファイルに対するユーザーの アクセス権限を調べます。</p>
	 * @param string $file <p>調べるファイルの名前。</p>
	 * @param int $mode <p><b><code>POSIX_F_OK</code></b>、<b><code>POSIX_R_OK</code></b>、 <b><code>POSIX_W_OK</code></b> および <b><code>POSIX_X_OK</code></b> のうちのひとつあるいは複数からなるマスク。</p> <p><b><code>POSIX_R_OK</code></b>、<b><code>POSIX_W_OK</code></b> および <b><code>POSIX_X_OK</code></b> は、ファイルが存在して読み込み/書き込み/ 実行の権限があるかどうかを調べます。 <b><code>POSIX_F_OK</code></b> は単にファイルが存在するかどうか だけを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-access.php
	 * @see posix_get_last_error(), posix_strerror()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function posix_access(string $file, int $mode = POSIX_F_OK): bool {}

	/**
	 * 制御する端末のパス名を得る
	 * <p>そのプロセスで現在制御している端末のパス名を表す文字列を作成します。 エラーが発生した場合は errno を設定します。この値を調べるには <code>posix_get_last_error()</code> を使用します。</p>
	 * @return string <p>処理に成功した場合は、現在制御している端末のパス名を表す文字列を返します。 それ以外の場合は <b><code>FALSE</code></b> を返し、errno を設定します。 この値を調べるには <code>posix_get_last_error()</code> を使用します。</p>
	 * @link https://php.net/manual/ja/function.posix-ctermid.php
	 * @see posix_ttyname(), posix_get_last_error()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_ctermid(): string {}

	/**
	 * posix_get_last_error() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>posix_get_last_error()</code>.</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.posix-errno.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function posix_errno(): int {}

	/**
	 * 直近で失敗した posix 関数が設定したエラー番号を取得する
	 * <p>直近で失敗した posix 関数が設定したエラー番号を取得します。 エラー番号に対応するエラーメッセージを取得するには <code>posix_strerror()</code> を使用します。</p>
	 * @return int <p>直近で失敗した posix 関数が設定した errno (エラー番号) を返します。 エラーが発生していない場合は 0 が返されます。</p>
	 * @link https://php.net/manual/ja/function.posix-get-last-error.php
	 * @see posix_strerror()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function posix_get_last_error(): int {}

	/**
	 * 現在のディレクトリのパス名
	 * <p>スクリプトの現在の実行ディレクトリのパスを、絶対パスで取得します。 エラー時には errno を設定します。この値は <code>posix_get_last_error()</code> で取得することができます。</p>
	 * @return string <p>絶対パスを表す文字列を返します。 エラー時には <b><code>FALSE</code></b> を返し、errno を設定します。この値は <code>posix_get_last_error()</code> で取得することができます。</p>
	 * @link https://php.net/manual/ja/function.posix-getcwd.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getcwd(): string {}

	/**
	 * 現在のプロセスの有効なグループ ID を返す
	 * <p>現在のプロセスの有効なグループ ID を返します。</p>
	 * @return int <p>実効グループ ID を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-getegid.php
	 * @see posix_getgrgid(), posix_getgid(), posix_setgid()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getegid(): int {}

	/**
	 * 現在のプロセスの有効なユーザー ID を返す
	 * <p>現在のプロセスの有効なユーザー ID を返します。 使用可能なユーザー名に変換する方法に関する情報については、 <code>posix_getpwuid()</code> も参照ください。</p>
	 * @return int <p>ユーザー ID を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-geteuid.php
	 * @see posix_getpwuid(), posix_getuid(), posix_setuid()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_geteuid(): int {}

	/**
	 * 現在のプロセスの実際のグループ ID を返す
	 * <p>現在のプロセスの実際のグループ ID を返します。</p>
	 * @return int <p>実際のグループ ID を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-getgid.php
	 * @see posix_getgrgid(), posix_getegid(), posix_setgid()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getgid(): int {}

	/**
	 * 指定したグループ ID を有するグループに関する情報を返す
	 * <p>指定した ID のグループに関する情報を取得します。</p>
	 * @param int $gid <p>グループ ID。</p>
	 * @return array <p>以下の要素を持つ配列を返します。</p> <b>グループ情報の配列</b>   要素 説明     name  グループ名。これは、16 文字以下の短い文字列からなる 「ハンドル」であり、実際の完全な名前とは異なります。    passwd  グループのパスワードを暗号化したもの。 システムが「シャドー」パスワードを使用している場合は、 ここではアスタリスクが返されます。    gid  グループ ID。この関数をコールする際に指定した <code>gid</code> と同じものになるので、冗長なデータです。    members  このグループに属する全メンバーを表す文字列の配列。
	 * @link https://php.net/manual/ja/function.posix-getgrgid.php
	 * @see posix_getegid(), posix_getgrnam(), filegroup(), stat()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getgrgid(int $gid): array {}

	/**
	 * 指定した名前のグループに関する情報を返す
	 * <p>指定した名前のグループに関する情報を取得します。</p>
	 * @param string $name <p>グループの名前。</p>
	 * @return array <p>以下の要素を持つ配列を返します。</p> <b>グループ情報の配列</b>   要素 説明     name  グループ名。これは、16 文字以下の短い文字列からなる 「ハンドル」であり、実際の完全な名前とは異なります。 グループ ID。この関数をコールする際に指定した <code>name</code> と同じものになるので、冗長なデータです。    passwd  グループのパスワードを暗号化したもの。 システムが「シャドー」パスワードを使用している場合は、 ここではアスタリスクが返されます。    gid  グループ ID を表す数値。    members  このグループに属する全メンバーを表す文字列の配列。
	 * @link https://php.net/manual/ja/function.posix-getgrnam.php
	 * @see posix_getegid(), posix_getgrgid(), filegroup(), stat()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getgrnam(string $name): array {}

	/**
	 * 現在のプロセスのグループセットを返す
	 * <p>現在のプロセスのグループセットを取得します。</p>
	 * @return array <p>現在のプロセスのグループセットについて、 グループ ID を表す整数値を含む配列を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-getgroups.php
	 * @see posix_getgrgid()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getgroups(): array {}

	/**
	 * ログイン名を返す
	 * <p>現在のプロセスを所有するユーザーのログイン名を返します。</p>
	 * @return string <p>ユーザーのログイン名を文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.posix-getlogin.php
	 * @see posix_getpwnam()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getlogin(): string {}

	/**
	 * ジョブ制御のプロセスグループ ID を得る
	 * <p>プロセス <code>pid</code> のプロセスグループ ID を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @param int $pid <p>プロセス ID。</p>
	 * @return int <p>ID を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-getpgid.php
	 * @see posix_getppid()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getpgid(int $pid): int {}

	/**
	 * 現在のプロセスのグループ ID を返す
	 * <p>現在のプロセスのグループ ID を返します。</p>
	 * @return int <p>ID を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-getpgrp.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getpgrp(): int {}

	/**
	 * 現在のプロセス ID を返す
	 * <p>現在のプロセスのプロセス ID を返します。</p>
	 * @return int <p>ID を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-getpid.php
	 * @see posix_kill()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getpid(): int {}

	/**
	 * 親プロセスの ID を返す
	 * <p>現在のプロセスの親プロセスの ID を返します。</p>
	 * @return int <p>ID を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-getppid.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getppid(): int {}

	/**
	 * 指定した名前のユーザーに関する情報を返す
	 * <p>指定したユーザーに関する情報を配列で返します。</p>
	 * @param string $username <p>英数字で表したユーザー名。</p>
	 * @return array <p>成功した場合は次の要素を持つ配列、それ以外の場合は <b><code>FALSE</code></b> を返します。</p> <b>ユーザー情報配列</b>   要素 説明     name  要素 name はユーザー名を有しています。これは、通常、 実際の完全な名前ではなく16文字未満のユーザーの"ハンドル名"となります。 この値はこの関数をコールした際に使用したパラメータ <code>username</code>と同じとする必要があり、 このため冗長な定義となります。    passwd  要素passwd には暗号化されたユーザーのパスワードが含まれます。 シャドウパスワードを使用しているシステムでは、アスタリスクが代わりに 返されます。    uid  数値形式で表したユーザー ID。    gid  ユーザーのグループ ID。 実際のグループ名を調べたりそのグループのメンバーの一覧を 得るには関数 <code>posix_getgrgid()</code> を使用してください。    gecos  GECOS は旧式の項であり、Honeywell バッチ処理プログラムの finger 情報フィールドを参照します。 しかし、このフィールドはまだ生きており、その内容はPOSIXで 規定されています。 このフィールドには、カンマで区切られた ユーザーのフルネーム、オフィスの電話番号、家の電話番号に関する リストが含まれています。多くのシステムでは、ユーザーのフルネーム のみが利用可能です。    dir  この要素には、ユーザーのホームディレクトリへの絶対パスが含まれています。    shell  shell 要素には、ユーザーのデフォルトシェルの実行ファイルへの絶対パスが 含まれています。
	 * @link https://php.net/manual/ja/function.posix-getpwnam.php
	 * @see posix_getpwuid()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getpwnam(string $username): array {}

	/**
	 * 指定 ID のユーザーに関する情報を返す
	 * <p>指定したユーザー ID のユーザーについての情報を配列で返します。</p>
	 * @param int $uid <p>ユーザー ID。</p>
	 * @return array <p>返される連想配列の要素は次のようになります。</p> <b>ユーザー情報配列</b>   要素 説明     name  要素 name はユーザー名を有しています。これは、通常、 実際の完全な名前ではなく16文字未満のユーザーの"ハンドル名"となります。    passwd  要素passwd には暗号化されたユーザーのパスワードが含まれます。 シャドウパスワードを使用しているシステムでは、アスタリスクが代わりに 返されます。    uid  ユーザーID。これは、この関数をコールする際に使用するパラメータ <code>uid</code>と同じとなり、このため冗長になります。    gid  ユーザーのグループID。 実際のグループ名を調べたりそのグループのメンバーの一覧を 得るには関数<code>posix_getgrgid()</code>を使用してください。    gecos  GECOS は旧式の項であり、Honeywell バッチ処理プログラムの finger 情報フィールドを参照します。 しかし、このフィールドはまだ生きており、その内容はPOSIXで 規定されています。 このフィールドには、カンマで区切られた ユーザーのフルネーム、オフィスの電話番号、家の電話番号に関する リストが含まれています。多くのシステムでは、ユーザーのフルネーム のみが利用可能です。    dir  この要素には、ユーザーのホームディレクトリへの絶対パスが含まれています。    shell  shell 要素には、ユーザーのデフォルトシェルの実行ファイルへの絶対パスが 含まれています。
	 * @link https://php.net/manual/ja/function.posix-getpwuid.php
	 * @see posix_getpwnam()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getpwuid(int $uid): array {}

	/**
	 * システムリソース制限に関する情報を返す
	 * <p><b>posix_getrlimit()</b> は、 現在のリソースにおけるソフトリミットおよびハードリミットを配列で返します。</p><p>各リソースには、それぞれソフトリミットとハードリミットがあります。 ソフトリミットとは、そのリソースに対してカーネルが課す制限値のことです。 ハードリミットとは、ソフトリミットの上限値のことです。 特権を持たないプロセスは、ソフトリミットの値を 0 からハードリミット値の間で設定することが可能です。 また、ハードリミットの値を下げることもできます。</p>
	 * @return array <p>各リソースに関する制限値を含む連想配列を返します。 個々のリミット値には、ソフトリミットとハードリミットがあります。</p> <b>返される制限の一覧</b>   制限の名前 制限についての説明     core  コアファイルの最大サイズ。0 の場合はコアファイルを作成しません。 コアファイルのサイズがこの値を超えると、 このサイズまで切り詰められます。    totalmem  プロセスのメモリの最大サイズを表すバイト数。    virtualmem  プロセスの仮想メモリの最大サイズを表すバイト数。    data  プロセスのデータセグメントの最大サイズを表すバイト数。    stack  プロセスのスタックの最大サイズを表すバイト数。    rss  RAM 上の仮想ページの最大数。    maxproc  呼び出し元のプロセスの実ユーザー ID で作成できるプロセスの最大数。    memlock  RAM 内にロックできるメモリの最大バイト数。    cpu  そのプロセスが使用できる CPU 時間。    filesize  そのプロセスが使用できるデータセグメントの最大サイズを表すバイト数。    openfiles  オープンできるファイル記述子の最大値よりひとつ大きい値。
	 * @link https://php.net/manual/ja/function.posix-getrlimit.php
	 * @see posix_setrlimit()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getrlimit(): array {}

	/**
	 * プロセスの現在の sid を得る
	 * <p>プロセス <code>pid</code> のセッション ID を返します。 プロセスのセッション ID とは、セッションリーダーのプロセスグループ ID のことです。</p>
	 * @param int $pid <p>プロセス ID。0 を指定すると、現在のプロセスとみなされます。</p>
	 * @return int <p>ID を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-getsid.php
	 * @see posix_getpgid(), posix_setsid()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getsid(int $pid): int {}

	/**
	 * 現在のプロセスの実際のユーザー ID を返す
	 * <p>現在のプロセスの実際のユーザー ID を返します。</p>
	 * @return int <p>ID を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-getuid.php
	 * @see posix_getpwuid()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_getuid(): int {}

	/**
	 * グループアクセスリストを求める
	 * <p>指定した名前のユーザーについてのグループアクセスリストを求めます。</p>
	 * @param string $name <p>リストを取得したいユーザー。</p>
	 * @param int $base_group_id <p>パスワードファイルから取得したグループ番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-initgroups.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function posix_initgroups(string $name, int $base_group_id): bool {}

	/**
	 * ファイル記述子が対話型端末であるかどうかを定義する
	 * <p>ファイル記述子 <code>fd</code> が、 有効な端末デバイスを指しているかどうかを調べます。</p>
	 * @param mixed $fd <p>ファイル記述子。ファイルリソースか、あるいは <code>integer</code> で指定します。 <code>integer</code> を指定した場合は、システムコールにそのまま渡せるファイル記述子だとみなします。</p> <p>たいていの場合は、ファイルリソースで指定することになるでしょう。</p>
	 * @return bool <p><code>fd</code> がオープンされており、 かつ端末に接続されている場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-isatty.php
	 * @see posix_ttyname(), stream_isatty()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_isatty($fd): bool {}

	/**
	 * プロセスにシグナルを送信する
	 * <p>シグナル <code>sig</code> をプロセス ID <code>pid</code> のプロセスに送信します。</p>
	 * @param int $pid <p>プロセス ID。</p>
	 * @param int $sig <p>PCNTL シグナル定数 のいずれか。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-kill.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_kill(int $pid, int $sig): bool {}

	/**
	 * fifo スペシャルファイル(名前付きパイプ)を作成する
	 * <p><b>posix_mkfifo()</b> は、 <i>FIFO</i> スペシャルファイルを作成します。 これはファイルシステム内に存在し、プロセス間の双方向通信の末端として 動作します。</p>
	 * @param string $pathname <p><i>FIFO</i> ファイルへのパス。</p>
	 * @param int $mode <p>2 番目のパラメータ <code>mode</code> は、8 進表記 (例: 0644)で指定する必要があります。新しく作成される <i>FIFO</i> のパーミッションは、現在の <code>umask()</code> の設定にも依存します。 作成されるファイルのパーミッションは (mode &amp; ~umask) となります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-mkfifo.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_mkfifo(string $pathname, int $mode): bool {}

	/**
	 * スペシャルファイルあるいは通常のファイルを作成する (POSIX.1)
	 * <p>スペシャルファイルあるいは通常のファイルを作成します。</p>
	 * @param string $pathname <p>作成するファイル。</p>
	 * @param int $mode <p>このパラメータは、ファイル型(以下の定数 <b><code>POSIX_S_IFREG</code></b>、 <b><code>POSIX_S_IFCHR</code></b>、<b><code>POSIX_S_IFBLK</code></b>、 <b><code>POSIX_S_IFIFO</code></b> あるいは <b><code>POSIX_S_IFSOCK</code></b> のうちのひとつ) およびパーミッションの論理和で構成されます。</p>
	 * @param int $major <p>メジャーデバイスカーネル ID (<b><code>S_IFCHR</code></b> あるいは <b><code>S_IFBLK</code></b> を使用している場合に渡す必要があります)。</p>
	 * @param int $minor <p>マイナーデバイスカーネル ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-mknod.php
	 * @see posix_mkfifo()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function posix_mknod(string $pathname, int $mode, int $major = 0, int $minor = 0): bool {}

	/**
	 * 現在のプロセスの実効 GID を設定する
	 * <p>現在のプロセスの実効グループ ID を設定します。 この関数は特権関数であり、実行するにはシステム上において適当な権限 (通常は root) が必要です。</p>
	 * @param int $gid <p>グループ ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-setegid.php
	 * @see posix_getgrgid(), posix_getgid(), posix_setgid()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function posix_setegid(int $gid): bool {}

	/**
	 * 現在のプロセスの実効 UID を設定する
	 * <p>現在のプロセスの実効ユーザー ID を設定します。 この関数は特権関数であり、実行するにはシステム上において適当な権限 (通常は root) が必要です。</p>
	 * @param int $uid <p>ユーザー ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-seteuid.php
	 * @see posix_geteuid(), posix_setgid(), posix_getuid()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function posix_seteuid(int $uid): bool {}

	/**
	 * 現在のプロセスの GID を設定する
	 * <p>現在のプロセスのグループ ID を設定します。 この関数は特権関数であり、実行するにはシステム上において適当な権限 (通常は root) が必要です。 <b>posix_setgid()</b> を最初に、 <code>posix_setuid()</code> を最後にコールするのが、 関数コールの正しい順序となります。</p><p><b>注意</b>:</p><p>コール元がスーバーユーザーの場合は、実効グループ ID も設定します。</p>
	 * @param int $gid <p>グループ ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-setgid.php
	 * @see posix_getgrgid(), posix_getgid()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_setgid(int $gid): bool {}

	/**
	 * ジョブ制御のプロセスグループ ID を設定する
	 * <p>プロセス <code>pid</code> をプロセスグループ <code>pgid</code> に加えます。</p>
	 * @param int $pid <p>プロセス ID。</p>
	 * @param int $pgid <p>プロセスグループ ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-setpgid.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_setpgid(int $pid, int $pgid): bool {}

	/**
	 * システムリソース制限を設定
	 * <p><b>posix_setrlimit()</b> は、 指定されたシステムリソースに対してソフトリミットおよびハードリミットを設定します。</p><p>各リソースには、それぞれソフトリミットとハードリミットがあります。 ソフトリミットとは、そのリソースに対してカーネルが課す制限値のことです。 ハードリミットとは、ソフトリミットの上限値のことです。 特権を持たないプロセスは、ソフトリミットの値を 0 からハードリミット値の間で設定することが可能です。 また、ハードリミットの値を下げることもできます。</p>
	 * @param int $resource <p>設定されるリミットに対応するリソースリミット定数です。</p>
	 * @param int $softlimit <p>ソフトリミット、単位は、リソース制限が必要とする任意の単位です。または、 <b><code>POSIX_RLIMIT_INFINITY</code></b> です。</p>
	 * @param int $hardlimit <p>ハードリミット、単位は、リソース制限が必要とする任意の単位です。または、 <b><code>POSIX_RLIMIT_INFINITY</code></b> です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-setrlimit.php
	 * @see posix_getrlimit()
	 * @since PHP 7
	 */
	function posix_setrlimit(int $resource, int $softlimit, int $hardlimit): bool {}

	/**
	 * 現在のプロセスをセッションリーダーにする
	 * <p>現在のプロセスをセッションリーダーにします。</p>
	 * @return int <p>セッション ID、あるいはエラー時に -1 を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-setsid.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_setsid(): int {}

	/**
	 * 現在のプロセスの UID を設定する
	 * <p>現在のプロセスの実際のユーザー ID を設定します。 この関数は特権関数であり、実行するにはシステム上において適当な権限 (通常は root) が必要です。</p>
	 * @param int $uid <p>ユーザー ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-setuid.php
	 * @see posix_setgid(), posix_seteuid(), posix_getuid(), posix_geteuid()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_setuid(int $uid): bool {}

	/**
	 * 指定したエラー番号に対応するシステムのエラーメッセージを取得する
	 * <p>指定したエラー番号 <code>errno</code> に対応する POSIX システムエラーメッセージを返します。 <code>errno</code> を取得するには、 <code>posix_get_last_error()</code> をコールします。</p>
	 * @param int $errno <p><code>posix_get_last_error()</code> が返す POSIX エラー番号。0 に設定すると、文字列 "Success" が返されます。</p>
	 * @return string <p>エラーメッセージを表す文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-strerror.php
	 * @see posix_get_last_error()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function posix_strerror(int $errno): string {}

	/**
	 * プロセス時間を得る
	 * <p>現在の CPU 使用状況についての情報を取得します。</p>
	 * @return array <p>現在のプロセスの CPU 使用状況に関する情報を表す文字列を連想配列 として返します。連想配列のキーは次のようになります。</p><ul> <li>  ticks - リブートからの経過クロック数。  </li> <li>  utime - 現在のプロセスにより使用されているユーザー時間。  </li> <li>  stime - 現在のプロセスにより使用されているシステム時間。  </li> <li>  cutime - 現在のプロセスおよび子プロセスにより使用されているユーザー時間。  </li> <li>  cstime - 現在のプロセスおよび子プロセスにより使用されているシステム時間。  </li> </ul>
	 * @link https://php.net/manual/ja/function.posix-times.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_times(): array {}

	/**
	 * 端末のデバイス名を調べる
	 * <p>ファイル記述子 <code>fd</code> 上でオープンしている現在の端末デバイスへの絶対パスを文字列で返します。</p>
	 * @param mixed $fd <p>ファイル記述子。ファイルリソースか、あるいは <code>integer</code> で指定します。 <code>integer</code> を指定した場合は、システムコールにそのまま渡せるファイル記述子だとみなします。</p> <p>たいていの場合は、ファイルリソースで指定することになるでしょう。</p>
	 * @return string <p>成功した場合に <code>fd</code> の絶対パスを表す文字列、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.posix-ttyname.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_ttyname($fd): string {}

	/**
	 * システム名を得る
	 * <p>システムについての情報を取得します。</p><p>POSIX では、値のフォーマットに関して何の仮定も設けないことを規定しています。 例えば、バージョン番号が 3 桁の数字であることや、 この関数により返されるその他のものに依存してはいけません。</p>
	 * @return array <p>システムに関する情報を文字列の連想配列として返します。 連想配列のキーは、次のようになります。</p><ul> <li> sysname - オペレーティングシステムの名前 (例 Linux) </li> <li> nodename - システムの名前 (例 valiant) </li> <li> release - オペレーティングシステムのリリース (例 2.2.10) </li> <li> version - オペレーティングシステムのバージョン (例 #4 Tue Jul 20 17:01:36 MEST 1999) </li> <li> machine - システムアーキテクチャ (例 i586) </li> <li> domainname - DNS ドメイン名 (例 example.com) </li> </ul><p>domainname は、GNU の拡張機能で POSIX.1 には含まれていません。 このため、このフィールドは GNU システム上または GNU libc を使用している場合にのみ使用可能です。</p>
	 * @link https://php.net/manual/ja/function.posix-uname.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function posix_uname(): array {}

}
