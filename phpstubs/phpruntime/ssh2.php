<?php



namespace {

	/**
	 * SSH の認証を、ssh agent を使って行う
	 * <p>SSH の認証を、ssh agent を使って行います。</p><p><b>注意</b>:  <b>ssh2_auth_agent()</b> 関数が使えるのは、 ssh2 拡張モジュールのコンパイルに libssh &gt;= 1.2.3 を使った場合だけです。 </p>
	 * @param resource $session <p>SSH 接続リンク ID。 <code>ssh2_connect()</code> を呼んで取得したもの。</p>
	 * @param string $username <p>リモートのユーザー名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-auth-agent.php
	 * @since PECL ssh2 >= 0.12
	 */
	function ssh2_auth_agent($session, string $username): bool {}

	/**
	 * ホスト公開鍵を使用して認証を行う
	 * <p>ファイルから読み込まれたホスト公開鍵を使用して認証を行います。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @param string $username
	 * @param string $hostname
	 * @param string $pubkeyfile
	 * @param string $privkeyfile
	 * @param string $passphrase <p>もし <code>privkeyfile</code> が暗号化されている (そのはずです) 場合、パスフレーズを渡す必要があります。</p>
	 * @param string $local_username <p>もし <code>local_username</code> を省略した場合、 <code>username</code> の値を使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-auth-hostbased-file.php
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_auth_hostbased_file($session, string $username, string $hostname, string $pubkeyfile, string $privkeyfile, string $passphrase = NULL, string $local_username = NULL): bool {}

	/**
	 * "none" として認証する
	 * <p>通常失敗する（そしてそうあるべき）"none" 認証を試みます。 失敗の一環として、サーバーは可能な認証メソッドの一覧を返します。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @param string $username <p>リモートのユーザー名。</p>
	 * @return mixed <p>もしサーバーが <code>username</code> に対する認証メソッドとして "none" を受け入れる場合、この関数は単純に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-auth-none.php
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_auth_none($session, string $username) {}

	/**
	 * SSH 上でプレーンなパスワードを使用した認証を行う
	 * <p>SSH 上でプレーンなパスワードを使用した認証を行います。 バージョン 0.12 以降、この関数は keyboard_interactive 方式にも対応するようになりました。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @param string $username <p>リモートのユーザー名。</p>
	 * @param string $password <p><code>username</code> のパスワード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-auth-password.php
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_auth_password($session, string $username, string $password): bool {}

	/**
	 * 公開鍵を使用した認証を行う
	 * <p>ファイルから読み込んだ公開鍵を使用した認証を行います。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @param string $username
	 * @param string $pubkeyfile <p>公開鍵ファイル。OpenSSH 形式で表す必要があり、たとえば次のようになります。</p> <p>ssh-rsa AAAAB3NzaC1yc2EAAA....NX6sqSnHA8= rsa-key-20121110</p>
	 * @param string $privkeyfile
	 * @param string $passphrase <p>もし、<code>privkeyfile</code> が暗号化されている (そうあるべきです) 場合、パスフレーズも引数に渡す必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-auth-pubkey-file.php
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_auth_pubkey_file($session, string $username, string $pubkeyfile, string $privkeyfile, string $passphrase = NULL): bool {}

	/**
	 * SSH サーバーに接続する
	 * <p>リモートの SSH サーバーとの接続を確立します。</p><p>一度接続すると、クライアントは <code>ssh2_fingerprint()</code> を使用してサーバーのホスト鍵を検証し、 パスワードもしくは公開鍵を使用して認証します。</p>
	 * @param string $host
	 * @param int $port
	 * @param array $methods <p><code>methods</code> は以下に示された4つのパラメータを持つ連想配列です。</p> <p></p> <b><code>methods</code> は以下のパラメータのいくつかあるいは全てを含む連想配列</b>   インデックス 意味 サポートする値&#42;     kex  通知する鍵交換メソッドのリスト。優先する順にカンマ区切りにする。   <i>diffie-hellman-group1-sha1</i>、 <i>diffie-hellman-group14-sha1</i> および <i>diffie-hellman-group-exchange-sha1</i>    hostkey  通知するホスト鍵メソッドのリスト。優先する順にカンマ区切りにする。   <i>ssh-rsa</i> および <i>ssh-dss</i>    client_to_server  クライアントからサーバーに送信されるメッセージのために優先する暗号化、 圧縮、メッセージ認証コード (MAC) メソッドを含む連想配列。      server_to_client  サーバーからクライアントに送信されるメッセージのために優先する暗号化、 圧縮、メッセージ認証コード (MAC) メソッドを含む連想配列。       <p>&#42; - サポートする値は、 構成するライブラリがサポートしているメソッドに依存します。 追加情報については » libssh2 ドキュメントを参照ください。</p> <p></p> <b> <code>client_to_server</code> と <code>server_to_client</code> は以下のパラメータのいくつかあるいは全てを含む連想配列 </b>   インデックス 意味 サポートする値&#42;     crypt 通知する暗号化メソッドのリスト。 優先する順にカンマ区切りにする。  <i>rijndael-cbc@lysator.liu.se</i>、 <i>aes256-cbc</i>、 <i>aes192-cbc</i>、 <i>aes128-cbc</i>、 <i>3des-cbc</i>、 <i>blowfish-cbc</i>、 <i>cast128-cbc</i>、 <i>arcfour</i> および <i>none&#42;&#42;</i>    comp 通知する圧縮メソッドのリスト。 優先する順にカンマ区切りにする。  <i>zlib</i> および <i>none</i>    mac 通知する MAC メソッドのリスト。 優先する順にカンマ区切りにする。  <i>hmac-sha1</i>、 <i>hmac-sha1-96</i>、 <i>hmac-ripemd160</i>、 <i>hmac-ripemd160@openssh.com</i> および <i>none&#42;&#42;</i>     <p></p> <p><b>注意</b>: <b>暗号化、MAC メソッドの "<i>none</i>"</b><br></p> <p>セキュリティ上の問題で、<i>none</i> は ビルド時に適切な ./configure オプションを使用して明示的に有効にしない限り、構成している » libssh2 によって無効にされます。 詳細は構成するライブラリのドキュメントを参照ください。</p>
	 * @param array $callbacks <p><code>callbacks</code> は以下のパラメータのいくつかあるいは全てを含む連想配列</p> <b> コールバックパラメータ </b>   インデックス 意味 プロトタイプ     ignore  <b><code>SSH2_MSG_IGNORE</code></b> パケットを受信したときにコールする関数名  void ignore_cb($message)   debug  <b><code>SSH2_MSG_DEBUG</code></b> パケットを受信したときにコールする関数名  void debug_cb($message, $language, $always_display)   macerror  パケットを受信したがメッセージ認証コードに失敗した場合にコールされる関数名。 もしコールバックが <b><code>TRUE</code></b> を返す場合、不整合は無視されます。 そうでない場合、接続は終了します。  bool macerror_cb($packet)   disconnect  <b><code>SSH2_MSG_DISCONNECT</code></b> パケットを受信したときにコールする関数名  void disconnect_cb($reason, $message, $language)
	 * @return resource <p>成功した場合にリソース、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-connect.php
	 * @see ssh2_fingerprint(), ssh2_auth_none(), ssh2_auth_password(), ssh2_auth_pubkey_file(), ssh2_disconnect()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_connect(string $host, int $port = 22, array $methods = NULL, array $callbacks = NULL) {}

	/**
	 * Close a connection to a remote SSH server
	 * <p>Close a connection to a remote SSH server.</p>
	 * @param resource $session <p>An SSH connection link identifier, obtained from a call to <code>ssh2_connect()</code>.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-disconnect.php
	 * @see ssh2_connect()
	 * @since PECL ssh2 >= 1.0
	 */
	function ssh2_disconnect($session): bool {}

	/**
	 * リモートサーバー上でコマンドを実行する
	 * <p>コマンドをリモートエンドで実行し、チャネルを割り当てます。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @param string $command
	 * @param string $pty
	 * @param array $env <p><code>env</code> には、 対象となる環境で設定する名前/値のペアを連想配列で渡します。</p>
	 * @param int $width <p>仮想端末の幅。</p>
	 * @param int $height <p>仮想端末の高さ。</p>
	 * @param int $width_height_type <p><code>width_height_type</code> は、 <b><code>SSH2_TERM_UNIT_CHARS</code></b> あるいは <b><code>SSH2_TERM_UNIT_PIXELS</code></b> のいずれかです。</p>
	 * @return resource <p>成功時にストリームを返し、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-exec.php
	 * @see ssh2_connect(), ssh2_shell(), ssh2_tunnel()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_exec($session, string $command, string $pty = NULL, array $env = NULL, int $width = 80, int $height = 25, int $width_height_type = SSH2_TERM_UNIT_CHARS) {}

	/**
	 * 拡張データストリームを取得する
	 * <p>SSH2 チャネルストリームと関連付けられたサブストリームを取得します。 SSH2 プロトコルは現在ただ 1 つのサブストリーム STDERR を定義しています。これはサブストリーム ID として <b><code>SSH2_STREAM_STDERR</code></b> (1 として定義) を持ちます。</p>
	 * @param resource $channel
	 * @param int $streamid <p>SSH2 チャネルストリーム。</p>
	 * @return resource <p>ストリームリソースを返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-fetch-stream.php
	 * @see ssh2_shell(), ssh2_exec(), ssh2_connect()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_fetch_stream($channel, int $streamid) {}

	/**
	 * リモートサーバーのフィンガープリントを処理する
	 * <p>アクティブなセッションからサーバーホスト鍵のハッシュを返します。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @param int $flags <p><code>flags</code> は <b><code>SSH2_FINGERPRINT_MD5</code></b>、 <b><code>SSH2_FINGERPRINT_HEX</code></b> で論理和された <b><code>SSH2_FINGERPRINT_SHA1</code></b>、 <b><code>SSH2_FINGERPRINT_RAW</code></b> のいずれかです。</p>
	 * @return string <p>ホストキーのハッシュを文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-fingerprint.php
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_fingerprint($session, int $flags = SSH2_FINGERPRINT_MD5 | SSH2_FINGERPRINT_HEX): string {}

	/**
	 * ネゴシエートされたメソッドのリストを返す
	 * <p>ネゴシエートされたメソッドのリストを返します。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @return array
	 * @link https://php.net/manual/ja/function.ssh2-methods-negotiated.php
	 * @see ssh2_connect()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_methods_negotiated($session): array {}

	/**
	 * 認証済み公開鍵を追加する
	 * <p><b>注意</b>:  この公開鍵サブシステムは、クライアントが認証 <i>済</i> の 公開鍵をサーバー上で管理するために使用されます。 公開鍵認証によりリモートシステムで認証を行うには、かわりに <code>ssh2_auth_pubkey_file()</code> 関数を使用してください。</p>
	 * @param resource $pkey <p><code>ssh2_publickey_init()</code> が作成した、 公開鍵サブシステムのリソース。</p>
	 * @param string $algoname <p>公開鍵のアルゴリズム。例: ssh-dss、ssh-rsa</p>
	 * @param string $blob <p>生のバイナリデータとしての blob 形式の公開鍵。</p>
	 * @param bool $overwrite <p>指定したキーがすでに存在する場合に、それを上書きしますか&#63;</p>
	 * @param array $attributes <p>この公開鍵に代入する属性の連想配列。サポートされる属性の一覧は、 ietf-secsh-publickey-subsystem を参照ください。 必須属性を設定するには、属性名の先頭にアスタリスクをつけてください。 サーバーが必須属性をサポートしていない場合、追加処理は異常終了します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-publickey-add.php
	 * @see ssh2_publickey_init(), ssh2_publickey_remove(), ssh2_publickey_list()
	 * @since PECL ssh2 >= 0.10
	 */
	function ssh2_publickey_add($pkey, string $algoname, string $blob, bool $overwrite = FALSE, array $attributes = NULL): bool {}

	/**
	 * 公開鍵サブシステムを初期化する
	 * <p>すでに接続している SSH2 サーバーから、公開鍵サブシステムを要求します。</p><p>公開鍵サブシステムを使用すると、 すでに接続・認証済みのクライアントが、 対象のサーバーに保存されている認証済み公開鍵の一覧を管理できるようになります。 管理方法は、サーバーの実装に依存しません。 リモートサーバーが公開鍵サブシステムをサポートしていない場合、 <b>ssh2_publickey_init()</b> 関数は <b><code>FALSE</code></b> を返します。</p>
	 * @param resource $session
	 * @return resource <p>他のすべての ssh2_publickey_&#42;() メソッドで使用する、 <i>SSH2 公開鍵サブシステム</i>リソースを返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-publickey-init.php
	 * @see ssh2_publickey_add(), ssh2_publickey_remove(), ssh2_publickey_list()
	 * @since PECL ssh2 >= 0.10
	 */
	function ssh2_publickey_init($session) {}

	/**
	 * 現在認証済みの公開鍵の一覧を表示する
	 * <p>現在認証済みの公開鍵の一覧を表示します。</p>
	 * @param resource $pkey <p>公開鍵サブシステムのリソース。</p>
	 * @return array <p>鍵を、数値添字の配列で返します。 個々の要素は連想配列となっており、その内容は name、blob、および attrs です。</p> <b>公開鍵の要素</b>   配列のキー 意味     name  この公開鍵で使用しているアルゴリズムの名前。例: <i>ssh-dss</i> あるいは <i>ssh-rsa</i>。    blob 生のバイナリデータとしての blob 形式の公開鍵。   attrs  この公開鍵に割り当てる属性。 もっとも一般的な属性であり、バージョン 1 の公開鍵サーバーが唯一サポートしている属性は <i>comment</i> です。これは任意の書式の文字列です。
	 * @link https://php.net/manual/ja/function.ssh2-publickey-list.php
	 * @see ssh2_publickey_init(), ssh2_publickey_add(), ssh2_publickey_remove()
	 * @since PECL ssh2 >= 0.10
	 */
	function ssh2_publickey_list($pkey): array {}

	/**
	 * 認証済み公開鍵を取り除く
	 * <p>認証済み公開鍵を取り除きます。</p>
	 * @param resource $pkey <p>公開鍵サブシステムのリソース。</p>
	 * @param string $algoname <p>公開鍵のアルゴリズム。例: ssh-dss、ssh-rsa</p>
	 * @param string $blob <p>生のバイナリデータとしての blob 形式の公開鍵。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-publickey-remove.php
	 * @see ssh2_publickey_init(), ssh2_publickey_add(), ssh2_publickey_list()
	 * @since PECL ssh2 >= 0.10
	 */
	function ssh2_publickey_remove($pkey, string $algoname, string $blob): bool {}

	/**
	 * SCP 経由でファイルを要求する
	 * <p>リモートサーバーからローカルファイルシステムに SCP プロトコルを使用してコピーします。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @param string $remote_file <p>リモートファイルへのパス。</p>
	 * @param string $local_file <p>ローカルファイルへのパス。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-scp-recv.php
	 * @see ssh2_scp_send(), copy()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_scp_recv($session, string $remote_file, string $local_file): bool {}

	/**
	 * SCP 経由でファイルを送信する
	 * <p>ローカルファイルシステムからリモートサーバーに SCP プロトコルを使用してコピーします。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @param string $local_file <p>ローカルファイルへのパス。</p>
	 * @param string $remote_file <p>リモートファイルへのパス。</p>
	 * @param int $create_mode <p>ファイルは <code>create_mode</code> で指定されたモードで作成されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-scp-send.php
	 * @see ssh2_scp_recv(), copy()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_scp_send($session, string $local_file, string $remote_file, int $create_mode = 0644): bool {}

	/**
	 * SFTP サブシステムを初期化する
	 * <p>すでに接続された SSH2 サーバーから SFTP サブシステムを要求します。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @return resource <p>このメソッドは全ての他の ssh2_sftp_&#42;() や ssh2.sftp:// fopen ラッパーで使用する <i>SSH2 SFTP</i> リソースを返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link https://php.net/manual/ja/function.ssh2-sftp.php
	 * @see ssh2_scp_recv(), ssh2_scp_send()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp($session) {}

	/**
	 * ファイルのモードを変更する
	 * <p>指定したファイルのモードの <code>mode</code> への変更を試みます。</p>
	 * @param resource $sftp <p>SSH2 SFTP リソース。<code>ssh2_sftp()</code> で開いたもの。</p>
	 * @param string $filename <p>ファイルへのパス。</p>
	 * @param int $mode <p>ファイルのパーミッション。このパラメータの詳細は <code>chmod()</code> を参照ください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-sftp-chmod.php
	 * @see chmod(), ssh2_sftp(), ssh2_connect()
	 * @since PECL ssh2 >= 0.12
	 */
	function ssh2_sftp_chmod($sftp, string $filename, int $mode): bool {}

	/**
	 * シンボリックリンクの情報を取得する
	 * <p>リンクを辿ら<i>ない</i>で リモートファイルシステムのシンボリックリンクの情報を取得します。</p><p>PHP 5 では、この関数は ssh2.sftp:// ラッパーを使用した場合の <code>lstat()</code> 関数と同様です。 返り値も同じです。</p>
	 * @param resource $sftp <p><code>ssh2_sftp()</code> でオープンした SSH2 SFTP リソース。</p>
	 * @param string $path <p>リモートのシンボリックリンクへのパス。</p>
	 * @return array <p>返り値の詳細については <code>stat()</code> のドキュメントを参照ください。</p>
	 * @link https://php.net/manual/ja/function.ssh2-sftp-lstat.php
	 * @see ssh2_sftp_stat(), lstat(), stat()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_lstat($sftp, string $path): array {}

	/**
	 * ディレクトリを作成する
	 * <p>リモートファイルサーバーに <code>mode</code> で指定された権限でディレクトリを作成します。</p><p>この関数は ssh2.sftp:// ラッパーを使用した場合の <code>mkdir()</code> と同様です。</p>
	 * @param resource $sftp <p><code>ssh2_sftp()</code> でオープンした SSH2 SFTP リソース。</p>
	 * @param string $dirname <p>新しいディレクトリへのパス。</p>
	 * @param int $mode <p>新しいディレクトリのパーミッション。</p>
	 * @param bool $recursive <p>もし <code>recursive</code> が <b><code>TRUE</code></b> の場合、 <code>dirname</code> に必要とされる全ての親ディレクトリは自動的に作成されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-sftp-mkdir.php
	 * @see mkdir(), ssh2_sftp_rmdir()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_mkdir($sftp, string $dirname, int $mode = 0777, bool $recursive = FALSE): bool {}

	/**
	 * シンボリックリンクのターゲットを返す
	 * <p>シンボリックリンクのターゲットを返します。</p>
	 * @param resource $sftp <p><code>ssh2_sftp()</code> でオープンした SSH2 SFTP リソース。</p>
	 * @param string $link <p>シンボリックリンクへのパス。</p>
	 * @return string <p>シンボリックリンク <code>link</code> のターゲットを返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-sftp-readlink.php
	 * @see readlink(), ssh2_sftp_symlink()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_readlink($sftp, string $link): string {}

	/**
	 * 指定されたパス文字列の実パスを解決する
	 * <p><code>filename</code> をリモートファイルシステム上の有効な実パスに変換します。</p>
	 * @param resource $sftp <p><code>ssh2_sftp()</code> でオープンした SSH2 SFTP リソース。</p>
	 * @param string $filename
	 * @return string <p>実際のパスを表す文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-sftp-realpath.php
	 * @see realpath(), ssh2_sftp_symlink(), ssh2_sftp_readlink()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_realpath($sftp, string $filename): string {}

	/**
	 * リモートファイルを改名する
	 * <p>リモートファイルシステム上のファイルを改名します。</p>
	 * @param resource $sftp <p><code>ssh2_sftp()</code> でオープンした SSH2 SFTP リソース。</p>
	 * @param string $from <p>名前を変更したいファイル。</p>
	 * @param string $to <p><code>from</code> のかわりに新しく使用したいファイル名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-sftp-rename.php
	 * @see rename()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_rename($sftp, string $from, string $to): bool {}

	/**
	 * ディレクトリを削除する
	 * <p>リモートのファイルサーバーからディレクトリを削除します。</p><p>この関数は ssh2.sftp:// ラッパーを使用した場合の <code>rmdir()</code> と同様です。</p>
	 * @param resource $sftp <p><code>ssh2_sftp()</code> でオープンした SSH2 SFTP リソース。</p>
	 * @param string $dirname
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-sftp-rmdir.php
	 * @see rmdir(), ssh2_sftp_mkdir()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_rmdir($sftp, string $dirname): bool {}

	/**
	 * リモートファイルシステム上のファイルの情報を取得する
	 * <p>シンボリックリンクを辿って リモートファイルシステム上のファイルの情報を取得します。</p><p>PHP 5 では、この関数は ssh2.sftp:// ラッパーを使用した場合の <code>stat()</code> 関数と同様です。 返される値も同じです。</p>
	 * @param resource $sftp <p><code>ssh2_sftp()</code> でオープンした SSH2 SFTP リソース。</p>
	 * @param string $path
	 * @return array <p>どのような値が返されるのかについての詳細は、 <code>stat()</code> を参照ください。</p>
	 * @link https://php.net/manual/ja/function.ssh2-sftp-stat.php
	 * @see ssh2_sftp_lstat(), lstat(), stat()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_stat($sftp, string $path): array {}

	/**
	 * シンボリックリンクを作成する
	 * <p>リモートファイルシステム上に <code>target</code> を指す <code>link</code> という名称のシンボリックリンクを作成します。</p>
	 * @param resource $sftp <p><code>ssh2_sftp()</code> でオープンした SSH2 SFTP リソース。</p>
	 * @param string $target <p>シンボリックリンクのリンク対象。</p>
	 * @param string $link
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-sftp-symlink.php
	 * @see ssh2_sftp_readlink(), symlink()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_symlink($sftp, string $target, string $link): bool {}

	/**
	 * ファイルを削除する
	 * <p>リモートファイルシステム上のファイルを削除します。</p>
	 * @param resource $sftp <p><code>ssh2_sftp()</code> でオープンした SSH2 SFTP リソース。</p>
	 * @param string $filename
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ssh2-sftp-unlink.php
	 * @see unlink()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_sftp_unlink($sftp, string $filename): bool {}

	/**
	 * 対話式のシェルを要求する
	 * <p>リモートエンド上のシェルをオープンし、そのためのストリームを割り当てます。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @param string $term_type <p><code>term_type</code> は対象システムの <i>/etc/termcap</i> に記載されたエントリの一つに相当します。</p>
	 * @param array $env <p><code>env</code> には、 対象の環境に設定する名前/値の組の連想配列を渡すことができます。</p>
	 * @param int $width <p>仮想端末の幅。</p>
	 * @param int $height <p>仮想端末の高さ。</p>
	 * @param int $width_height_type <p><code>width_height_type</code> は <b><code>SSH2_TERM_UNIT_CHARS</code></b> あるいは <b><code>SSH2_TERM_UNIT_PIXELS</code></b> のいずれかです。</p>
	 * @return resource
	 * @link https://php.net/manual/ja/function.ssh2-shell.php
	 * @see ssh2_exec(), ssh2_tunnel(), ssh2_fetch_stream()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_shell($session, string $term_type = "vanilla", array $env = NULL, int $width = 80, int $height = 25, int $width_height_type = SSH2_TERM_UNIT_CHARS) {}

	/**
	 * リモートサーバーを経由するトンネルをオープンする
	 * <p>現在接続している SSH サーバーを経由して、 任意のホスト/ポートへのソケットストリームをオープンします。</p>
	 * @param resource $session <p><code>ssh2_connect()</code> のコールによって取得した SSH 接続リンク ID。</p>
	 * @param string $host
	 * @param int $port
	 * @return resource
	 * @link https://php.net/manual/ja/function.ssh2-tunnel.php
	 * @see ssh2_connect(), fsockopen()
	 * @since PECL ssh2 >= 0.9.0
	 */
	function ssh2_tunnel($session, string $host, int $port) {}

	/**
	 * <code>ssh2_shell()</code> で要求されるデフォルトのターミナル高さ
	 */
	define('SSH2_DEFAULT_TERM_HEIGHT', null);

	/**
	 * <code>ssh2_shell()</code> で要求されるデフォルトのターミナル単位
	 */
	define('SSH2_DEFAULT_TERM_UNIT', null);

	/**
	 * <code>ssh2_shell()</code> で要求されるデフォルトのターミナル幅
	 */
	define('SSH2_DEFAULT_TERM_WIDTH', null);

	/**
	 * <code>ssh2_shell()</code> によって要求される デフォルトのターミナル型 (例えば vt102, ansi, xterm, vanilla)
	 */
	define('SSH2_DEFAULT_TERMINAL', null);

	/**
	 * ホスト鍵のフィンガープリントを 16 進法の文字列として要求する <code>ssh2_fingerprint()</code> 用フラグ
	 */
	define('SSH2_FINGERPRINT_HEX', null);

	/**
	 * ホスト鍵のフィンガープリントを MD5 ハッシュとして要求する <code>ssh2_fingerprint()</code> 用フラグ
	 */
	define('SSH2_FINGERPRINT_MD5', null);

	/**
	 * ホスト鍵のフィンガープリントを 8 ビットキャラクタの文字列として要求する <code>ssh2_fingerprint()</code> 用フラグ
	 */
	define('SSH2_FINGERPRINT_RAW', null);

	/**
	 * ホスト鍵のフィンガープリントを SHA1 ハッシュとして要求する <code>ssh2_fingerprint()</code> 用フラグ
	 */
	define('SSH2_FINGERPRINT_SHA1', null);

	/**
	 * STDERR サブチャネルを要求する <code>ssh2_fetch_stream()</code> 用フラグ
	 */
	define('SSH2_STREAM_STDERR', null);

	/**
	 * STDIO サブチャネルを要求する <code>ssh2_fetch_stream()</code> 用フラグ
	 */
	define('SSH2_STREAM_STDIO', null);

	/**
	 * 文字単位で <code>幅</code> と <code>高さ</code> を指定するための <code>ssh2_shell()</code> 用フラグ
	 */
	define('SSH2_TERM_UNIT_CHARS', null);

	/**
	 * ピクセル単位で <code>幅</code> と <code>高さ</code> を指定するための <code>ssh2_shell()</code> 用フラグ
	 */
	define('SSH2_TERM_UNIT_PIXELS', null);

}
