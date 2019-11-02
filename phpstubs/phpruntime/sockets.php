<?php



namespace {

	/**
	 * ソケットへの接続を許可する
	 * <p><code>socket_create()</code> を使用してソケット <code>socket</code> を作成した後、 <code>socket_bind()</code> で名前に関連付け、 <code>socket_listen()</code> で接続をモニタします。この関数は、 このソケットへの接続を許可します。接続に成功すると、新規の ソケット記述子が返されます。この記述子は通信の際に使用されます。 ソケット上に複数の接続がキューで待っている場合、最初の接続が使用 されます。接続待ちがない場合、<b>socket_accept()</b> は接続が存在するまでブロックされます。 <code>socket</code> が <code>socket_set_blocking()</code> または <code>socket_set_nonblock()</code> により非ブロックモードで 作成された場合、<b><code>FALSE</code></b> が返されます。</p><p><b>socket_accept()</b> により返されたソケットリソースは、 新規接続を許可するために使用することはできません。この場合でも 元の接続待ちのソケット <code>socket</code> は オープンされたままであり、再使用可能です。</p>
	 * @param resource $socket <p><code>socket_create()</code> で作成したソケットリソース。</p>
	 * @return resource <p>成功した場合に新規ソケットリソースを、エラー時に <b><code>FALSE</code></b> を返します。 実際のエラーコードは、<code>socket_last_error()</code> を コールすることで取得可能です。このコードを <code>socket_strerror()</code> に渡すことで、 エラーの内容を文字列で取得することが可能です。</p>
	 * @link https://php.net/manual/ja/function.socket-accept.php
	 * @see socket_connect(), socket_listen(), socket_create(), socket_bind(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_accept($socket) {}

	/**
	 * Create and bind to a socket from a given addrinfo
	 * <p>Create a Socket resource, and bind it to the provided AddrInfo resource. The return value of this function may be used with <code>socket_listen()</code>.</p>
	 * @param resource $addr <p>Resource created from <b>socket_addrinfo_lookup()()</b>.</p>
	 * @return resource <p>Returns a Socket resource on success or <b><code>NULL</code></b> on failure.</p>
	 * @link https://php.net/manual/ja/function.socket-addrinfo-bind.php
	 * @see socket_addrinfo_connect(), socket_addrinfo_explain(), socket_addrinfo_lookup(), socket_listen()
	 * @since PHP 7 >= 7.2.0
	 */
	function socket_addrinfo_bind($addr) {}

	/**
	 * Create and connect to a socket from a given addrinfo
	 * <p>Create a Socket resource, and connect it to the provided AddrInfo resource. The return value of this function may be used with the rest of the socket functions.</p>
	 * @param resource $addr <p>Resource created from <b>socket_addrinfo_lookup()()</b></p>
	 * @return resource <p>Returns a Socket resource on success or <b><code>NULL</code></b> on failure.</p>
	 * @link https://php.net/manual/ja/function.socket-addrinfo-connect.php
	 * @see socket_addrinfo_bind(), socket_addrinfo_explain(), socket_addrinfo_lookup()
	 * @since PHP 7 >= 7.2.0
	 */
	function socket_addrinfo_connect($addr) {}

	/**
	 * Get information about addrinfo
	 * <p><b>socket_addrinfo_explain()()</b> exposed the underlying <i>addrinfo</i> structure.</p>
	 * @param resource $addr <p>Resource created from <b>socket_addrinfo_lookup()()</b></p>
	 * @return array <p>Returns an array containing the fields in the <i>addrinfo</i> structure.</p>
	 * @link https://php.net/manual/ja/function.socket-addrinfo-explain.php
	 * @see socket_addrinfo_bind(), socket_addrinfo_connect(), socket_addrinfo_lookup()
	 * @since PHP 7 >= 7.2.0
	 */
	function socket_addrinfo_explain($addr): array {}

	/**
	 * Get array with contents of getaddrinfo about the given hostname
	 * <p>Lookup different ways we can connect to <code>host</code>. The returned array contains a set of resources that we can bind to using <code>socket_addrinfo_bind()</code>.</p>
	 * @param string $host <p>Hostname to search.</p>
	 * @param string $service <p>The service to connect to. If service is a name, it is translated to the corresponding port number.</p>
	 * @param array $hints <p>Hints provide criteria for selecting addresses returned. You may specify the hints as defined by getadrinfo.</p>
	 * @return array <p>Returns an array of AddrInfo resource handles that can be used with the other socket_addrinfo functions.</p>
	 * @link https://php.net/manual/ja/function.socket-addrinfo-lookup.php
	 * @see socket_addrinfo_bind(), socket_addrinfo_connect(), socket_addrinfo_explain()
	 * @since PHP 7 >= 7.2.0
	 */
	function socket_addrinfo_lookup(string $host, string $service = NULL, array $hints = NULL): array {}

	/**
	 * ソケットに名前をバインドする
	 * <p><code>address</code> で指定した名前を <code>socket</code> で指定したソケットにバインドします。 これは、<code>socket_connect()</code> あるいは <code>socket_listen()</code> を使用して接続が確立される前に行われます。</p>
	 * @param resource $socket <p><code>socket_create()</code> で作成した有効なソケット記述子。</p>
	 * @param string $address <p>ソケットの種類が <b><code>AF_INET</code></b> の場合、 <code>address</code> はドットで 4 つに区切られた表記 （例: <i>127.0.0.1</i>）の IP アドレス。</p> <p>ソケットの種類が <b><code>AF_UNIX</code></b> の場合、 <code>address</code> は Unix ドメインソケット （例: /tmp/my.sock）。</p>
	 * @param int $port
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>エラーコードは <code>socket_last_error()</code> により取得できます。 このコードを <code>socket_strerror()</code> に渡すことにより、 エラー内容を表すテキストを得ることができます。</p>
	 * @link https://php.net/manual/ja/function.socket-bind.php
	 * @see socket_connect(), socket_listen(), socket_create(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_bind($socket, string $address, int $port = 0): bool {}

	/**
	 * ソケットのエラーまたは直近のエラーコードをクリアする
	 * <p>この関数は、指定したソケットまたは直近のグローバルなソケットエラー のエラーコードをクリアします。</p><p>この関数により、 ソケットまたは直近のグローバルな拡張エラーコードとなる エラーコードの値を明示的にリセットすることが可能になります。 これは、エラーが発生したかどうかをアプリケーション内で検出する際に有用です。</p>
	 * @param resource $socket <p><code>socket_create()</code> で作成したソケットリソース。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.socket-clear-error.php
	 * @see socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function socket_clear_error($socket = NULL): void {}

	/**
	 * ソケットリソースを閉じる
	 * <p><b>socket_close()</b> は、 <code>socket</code> で指定したソケットリソースを閉じます。 この関数はソケット専用であり、その他のリソースに対しては用いることができません。</p>
	 * @param resource $socket <p><code>socket_create()</code> あるいは <code>socket_accept()</code> で作成したソケットリソース。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.socket-close.php
	 * @see socket_bind(), socket_listen(), socket_create(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_close($socket): void {}

	/**
	 * メッセージバッファサイズを計算する
	 * <p>付随データを受信するために確保するバッファのサイズを計算します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $level
	 * @param int $type
	 * @return int
	 * @link https://php.net/manual/ja/function.socket-cmsg-space.php
	 * @see socket_recvmsg(), socket_sendmsg()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function socket_cmsg_space(int $level, int $type): int {}

	/**
	 * ソケット上の接続を初期化する
	 * <p>ソケットリソース <code>socket</code> を用いて、 <code>address</code> への接続を初期化します。 このリソースは、<code>socket_create()</code> で作成した有効なソケットリソースである必要があります。</p>
	 * @param resource $socket
	 * @param string $address <p>パラメータ <code>address</code> には、 <code>socket</code> の種類が <b><code>AF_INET</code></b> の場合はドット区切り表記の IPv4 アドレス (例: <i>127.0.0.1</i>)、 IPv6 サポートが有効で <code>socket</code> の種類が <b><code>AF_INET6</code></b> の場合は IPv6 アドレス (例: <i>::1</i>)、 <b><code>AF_UNIX</code></b> の場合は Unix ドメインソケットのパス名を指定します。</p>
	 * @param int $port <p>パラメータ <code>port</code> は <b><code>AF_INET</code></b> ソケット あるいは <b><code>AF_INET6</code></b> に接続する場合にのみ必須となり、 接続するリモートホストのポートを指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 エラーコードは、 <code>socket_last_error()</code> により取得できます。 このコードを <code>socket_strerror()</code> に渡すことにより、 エラー内容を表すテキストを得ることができます。</p> <p><b>注意</b>:</p> <p>ソケットが非ブロッキングモードの場合、この関数は <b><code>FALSE</code></b> を返し、エラー <i>Operation now in progress</i> を発生させます。</p>
	 * @link https://php.net/manual/ja/function.socket-connect.php
	 * @see socket_bind(), socket_listen(), socket_create(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_connect($socket, string $address, int $port = 0): bool {}

	/**
	 * ソケット（通信時の終端）を作成する
	 * <p>通信のエンドポイント(終端)と呼ばれることもあるソケットのリソースを作成し、 返します。典型的なネットワーク接続は、2つのソケットから成り立ちます。 このとき、片方はクライアント、もう片方はサーバーの役割をします。</p>
	 * @param int $domain <p>パラメータ <code>domain</code> には、 ソケットが利用するプロトコルファミリーを指定します。</p>  <b>指定可能なアドレス/プロトコルファミリーの一覧</b>   ドメイン 説明     <b><code>AF_INET</code></b>  IPv4 インターネットプロトコル。 このプロトコルファミリーに属するプロトコルとしてよく知られているのは、 TCP や UDP です。    <b><code>AF_INET6</code></b>  IPv6 インターネットプロトコル。TCP と UDP が、このプロトコルファミリーで一般的なプロトコルです。    <b><code>AF_UNIX</code></b>  ローカルでのコミュニケーションに用いられるプロトコルファミリーです。 高い効率と低いオーバーヘッドを誇るため、IPC (プロセス間通信) でよく使われます。
	 * @param int $type <p><code>type</code> パラメータは、 ソケットが利用する通信方式を指定します。</p>  <b>利用できるソケットのタイプ</b>   タイプ 説明     <b><code>SOCK_STREAM</code></b>  このタイプでは、時系列的、高信頼性、全二重、接続型のバイトストリームが利用できます。 帯域外のデータ転送メカニズムがサポートされている場合もあります。 TCP プロトコルは、このソケットタイプに基づきます。    <b><code>SOCK_DGRAM</code></b>  このタイプでは、データグラム(非接続型で、信頼性の高くない 固定バイト長のメッセージ) がサポートされます。 UDP プロトコルは、このソケットタイプに基づきます。    <b><code>SOCK_SEQPACKET</code></b>  このタイプでは、時系列的な、信頼性のある、 双方向の接続指向型の固定長データグラム転送が利用できます。 パケットを消費する側は、一つのパケット全部を一度の read コールで読み込む必要があります。    <b><code>SOCK_RAW</code></b>  このタイプでは、素のネットワークプロトコルを操作できます。 この特殊なソケットを使って、どのタイプのプロトコルでもユーザーの手で構築することができます。 よくある使い方として、(ping のような) ICMP リクエストの作成があります。    <b><code>SOCK_RDM</code></b>  このタイプでは、信頼に足る、非時系列的なデータグラム転送が利用できます。 ほとんどのオペレーティングシステムでは実装されていないでしょう。
	 * @param int $protocol <p><code>protocol</code> は、ソケット上の通信で使われる <code>domain</code> で指定されたファミリーに属するプロトコルを指定します。 正しい値は、<code>getprotobyname()</code> を使うことで取得できます。利用したいプロトコルが、TCP または UDP の場合は、定数 <b><code>SOL_TCP</code></b> と <b><code>SOL_UDP</code></b> を指定することもできます。</p>  <b>一般的なプロトコルの一覧</b>   名称 説明     icmp  Internet Control Message Protocol は、主にゲートウェイやホストが、 データグラム通信におけるエラーを報告するのに使われます。 "ping" コマンド (最近のほとんどのオペーレーティングシステムに 搭載されています) が ICMP アプリケーションの一例です。    udp  User Datagram Protocol は、非接続指向の、信頼性の高くない、 固定のレコード長を用いるプロトコルです。このような側面のおかげで、 UDP はプロトコルとして最小限のオーバーへッドしか要求しません。    tcp  Transmission Control Protocol は、信頼性の高い、接続指向かつ ストリーム指向の全二重通信プロトコルです。TCP は、 すべてのパケットが、送信された順序で(時系列的に)受信されることを 保証します。もし、何らかの理由でパケットが通信中に失われた場合、 TCP では、送信先から通知があるまで、パケットが再送信されるように なっています。信頼性とパフォーマンス上の理由から、TCP の実装は、 下層にあるデータグラム通信レイヤーのオクテット幅を 適当な長さに決定します。このため、TCP アプリケーションは、 レコードの全部が一度に転送されない場合も考慮しなければなりません。
	 * @return resource <p><b>socket_create()</b> は、 成功時にソケットリソース、失敗時に <b><code>FALSE</code></b> を返します。 実際のエラーコードは、<code>socket_last_error()</code> を コールすることにより取得できます。このエラーコードをさらに <code>socket_strerror()</code>に渡すことにより、 エラーの内容を文字列で取得することが可能です。</p>
	 * @link https://php.net/manual/ja/function.socket-create.php
	 * @see socket_accept(), socket_bind(), socket_connect(), socket_listen(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_create(int $domain, int $type, int $protocol) {}

	/**
	 * 接続を受けつけるためにポートにソケットをオープンする
	 * <p><b>socket_create_listen()</b> は、 <b><code>AF_INET</code></b> 型で <i>すべての</i> ローカルインターフェイスの指定したポート上で新規接続を待ち受ける 新規ソケットリソースを作成します。</p><p>この関数は、新規接続のみを受け入れるソケットを作成しやすくするためのものです。</p>
	 * @param int $port <p>すべてのインターフェイスで待ち受けるポート。</p>
	 * @param int $backlog <p><code>backlog</code> パラメータは、 接続の順番待ちのキューをどれだけの長さまで保持するかを定義します。 <b><code>SOMAXCONN</code></b> を <code>backlog</code> パラメータに渡します。詳細な情報は <code>socket_listen()</code> を参照ください。</p>
	 * @return resource <p><b>socket_create_listen()</b> は、 成功した場合に新規ソケットリソースを、エラー時に <b><code>FALSE</code></b> を返します。エラーコードは <code>socket_last_error()</code> で取得可能です。このコードを <code>socket_strerror()</code> に渡すと、エラーの詳細が文字列で取得可能です。</p>
	 * @link https://php.net/manual/ja/function.socket-create-listen.php
	 * @see socket_create(), socket_create_pair(), socket_bind(), socket_listen(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_create_listen(int $port, int $backlog = 128) {}

	/**
	 * 区別できないソケットの組を作成し、配列に保存する
	 * <p><b>socket_create_pair()</b> は、接続されており区別できない 2 つのソケットを作成し、それを <code>fd</code> に保存します。 この関数は、一般に IPC（InterProcess Communication: プロセス間通信） で使用します。</p>
	 * @param int $domain <p><code>domain</code> は、ソケットで使用するプロトコルの種類を指定します。 完全な一覧は <code>socket_create()</code> を参照ください。</p>
	 * @param int $type <p><code>type</code> では、ソケットが使用する通信の形式を選択します。 完全な一覧は <code>socket_create()</code> を参照ください。</p>
	 * @param int $protocol <p><code>protocol</code> は、指定した <code>domain</code> の中の特定のプロトコルを指定します。これは、返されるソケットとの通信に使用されます。 使用可能な値の名前は <code>getprotobyname()</code> で取得可能です。もし要求されるプロトコルが TCP あるいは UDP の場合、 対応する定数 <b><code>SOL_TCP</code></b> および <b><code>SOL_UDP</code></b> も使用可能です。</p> <p>サポートするプロトコルの完全な一覧は <code>socket_create()</code> を参照ください。</p>
	 * @param array $fd <p>2 つのソケットリソースが格納される配列への参照。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-create-pair.php
	 * @see socket_create(), socket_create_listen(), socket_bind(), socket_listen(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_create_pair(int $domain, int $type, int $protocol, array &$fd): bool {}

	/**
	 * Export a socket extension resource into a stream that encapsulates a socket
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $socket
	 * @return resource <p>Return resource失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.socket-export-stream.php
	 * @since PHP 7 >= 7.0.7
	 */
	function socket_export_stream($socket) {}

	/**
	 * ソケットのオプションを取得する
	 * <p><b>socket_get_option()</b> 関数は、ソケット <code>socket</code> のオプション <code>optname</code> の値を取得します。<b>socket_get_option()</b> は、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @param resource $socket <p><code>socket_create()</code> あるいは <code>socket_accept()</code> で作成したソケットリソース。</p>
	 * @param int $level <p><code>level</code> パラメータは、オプションのプロトコルレベルを指定します。 例えば、オプションをソケットレベルで取得するには <code>level</code> パラメータに <b><code>SOL_SOCKET</code></b> を指定します。 <b><code>TCP</code></b> のようなそれ以外のレベルの場合、そのレベルのプロトコル番号を指定します。 プロトコル番号は <code>getprotobyname()</code> 関数を使用して取得可能です。</p>
	 * @param int $optname <b>使用可能なソケットオプション</b>   オプション 説明 型     <b><code>SO_DEBUG</code></b>  デバッグ情報を記録するかどうかを報告します。   <code>int</code>    <b><code>SO_BROADCAST</code></b>  ブロードキャストメッセージの送信がサポートされているかどうかを報告します。   <code>int</code>    <b><code>SO_REUSEADDR</code></b>  ローカルアドレスが再使用可能するかどうかを報告します。   <code>int</code>    <b><code>SO_KEEPALIVE</code></b>  定期的なメッセージの送信によって接続がアクティブになっているかどうかを報告します。 もしソケットがこれらのメッセージに応答できなかった場合、 接続は崩壊し、ソケットへの書き込みを行うと SIGPIPE シグナルを受け取ります。   <code>int</code>    <b><code>SO_LINGER</code></b>  <p>データがまだ残っているうちに <code>socket_close()</code> をコールした場合に、<code>socket</code> を残存させるかどうかを報告します。 デフォルトでは、ソケットが閉じられる際には未送信のデータをすべて送信しようとします。 接続ベースのソケットでは、 <code>socket_close()</code> は接続先がデータを認識するまで閉じるのを待ちます。</p> <p>l_onoff が非ゼロで l_linger がゼロの場合は、 その時点で未送信のデータはすべて破棄されます。 接続ベースのソケットの場合、接続先には RST (リセット) を送信します。</p> <p>一方 l_onoff が非ゼロで l_linger も非ゼロの場合は、 <code>socket_close()</code> は 全データを送信し終えるか l_linger で指定した時間が経過するまで処理をブロックします。 ソケットが非ブロックモードの場合は、 <code>socket_close()</code> は失敗してエラーを返します。</p>   <code>array</code>。配列に含まれるキーは l_onoff および l_linger のふたつ。    <b><code>SO_OOBINLINE</code></b>  <code>socket</code> が帯域外のデータをインラインに残し続けるかを報告します。   <code>int</code>    <b><code>SO_SNDBUF</code></b>  送信バッファのサイズを報告します。   <code>int</code>    <b><code>SO_RCVBUF</code></b>  受信バッファのサイズを報告します。   <code>int</code>    <b><code>SO_ERROR</code></b>  エラーステータスに関する情報を報告し、それをクリアします。   <code>int</code> (<code>socket_set_option()</code> で設定することはできません)    <b><code>SO_TYPE</code></b>  <code>socket</code> の型 (たとえば <b><code>SOCK_STREAM</code></b>) を報告します。   <code>int</code> (<code>socket_set_option()</code> で設定することはできません)    <b><code>SO_DONTROUTE</code></b>  送信メッセージがルータを越えるかどうかを報告します。   <code>int</code>    <b><code>SO_RCVLOWAT</code></b>  <code>socket</code> の入力操作を行う際の最小バイト数を報告します。   <code>int</code>    <b><code>SO_RCVTIMEO</code></b>  入力操作のタイムアウト値を報告します。   <code>array</code>。配列に含まれるキーはふたつ。 sec はタイムアウトの秒単位の部分で、 usec はタイムアウトのマイクロ秒位の部分。    <b><code>SO_SNDTIMEO</code></b>  出力関数がフロー制御のためにブロックするタイムアウト値を報告します。   <code>array</code>。配列に含まれるキーはふたつ。 sec はタイムアウトの秒単位の部分で、 usec はタイムアウトのマイクロ秒位の部分。    <b><code>SO_SNDLOWAT</code></b>  <code>socket</code> の出力操作を行う際の最小バイト数を報告します。   <code>int</code>    <b><code>TCP_NODELAY</code></b>  Nagle TCP アルゴリズムが無効になっているかどうかを報告します。   <code>int</code>    <b><code>MCAST_JOIN_GROUP</code></b>  マルチキャストグループに参加します (PHP 5.4 で追加)。   二つのキー <i>"group"</i> と <i>"interface"</i> を含む配列。<i>"group"</i> には IPv4 あるいは IPv6 のマルチキャストアドレスを文字列で指定します。 <i>"interface"</i> には、インターフェイス番号 (整数値) あるいは <i>"eth0"</i> などのインターフェイス名 (文字列) を指定します。 <i>0</i> を指定すると、ルーティングテーブルを使ってインターフェイスを選択します (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>MCAST_LEAVE_GROUP</code></b>  マルチキャストグループから離れます (PHP 5.4 で追加)。   配列。詳細は <b><code>MCAST_JOIN_GROUP</code></b> を参照ください (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>MCAST_BLOCK_SOURCE</code></b>  特定のソースから、そのマルチキャストグループにやってくるパケットをブロックします。 そのマルチキャストグループに事前に参加しておく必要があります (PHP 5.4 で追加)。   <b><code>MCAST_JOIN_GROUP</code></b> と同じキーを含み、さらに追加でもうひとつのキーを含む配列。 追加のキーは <i>source</i> で、 ブロック対象となるソースの IPv4 アドレスあるいは IPv6 アドレスを文字列で指定します (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>MCAST_UNBLOCK_SOURCE</code></b>  特定のソースから、そのマルチキャストグループにやってくるパケットのブロックを解除 (そして、受信を再開) します。 そのマルチキャストグループに事前に参加しておく必要があります (PHP 5.4 で追加)。   <b><code>MCAST_BLOCK_SOURCE</code></b> と同じ形式の配列 (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>MCAST_JOIN_SOURCE_GROUP</code></b>  特定の値にマッチするソースアドレスからそのマルチキャストグループにやってきたパケットを受信します (PHP 5.4 で追加)。   <b><code>MCAST_BLOCK_SOURCE</code></b> と同じ形式の配列 (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>MCAST_LEAVE_SOURCE_GROUP</code></b>  特定の値にマッチするソースアドレスからそのマルチキャストグループにやってきたパケットの受信を停止します (PHP 5.4 で追加)。   <b><code>MCAST_BLOCK_SOURCE</code></b> と同じ形式の配列 (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>IP_MULTICAST_IF</code></b>  IPv4 マルチキャストパケットの送信インターフェイス (PHP 5.4 で追加)。   インターフェイス番号を表す整数値か、インターフェイス名を表す <i>eth0</i> のような文字列。 0 を指定すると、ルーティングテーブルを使ってインターフェイスを選択します。 <b>socket_get_option()</b> 関数の返り値は、インターフェイスのインデックスとなります。 注意すべき点は、C の API とは違ってこのオプションには IP アドレスを渡せないということです。 そのため、 <b><code>IP_MULTICAST_IF</code></b> と <b><code>IPV6_MULTICAST_IF</code></b> のインターフェイスの相違はなくなります。    <b><code>IPV6_MULTICAST_IF</code></b>  IPv6 マルチキャストパケットの送信インターフェイス (PHP 5.4 で追加)。   <b><code>IP_MULTICAST_IF</code></b> と同じ。    <b><code>IP_MULTICAST_LOOP</code></b>  IPv4 パケットのマルチキャストループバックポリシー。 このソケットが送信したマルチキャストパケットが、 このソケットが使う送信インターフェイス上の同一マルチキャストグループに属する 同一ホスト上の受信者にも届くかどうかを示します。 これはデフォルトの動作です (PHP 5.4 で追加)。   整数値 (<i>0</i> あるいは <i>1</i>)。<code>socket_set_option()</code> では任意の値を受け付けますが、通常の PHP のルールに従ってそれを boolean 値に変換します。    <b><code>IPV6_MULTICAST_LOOP</code></b>  <b><code>IP_MULTICAST_LOOP</code></b> の IPv6 版 (PHP 5.4 で追加)。   整数値。<b><code>IP_MULTICAST_LOOP</code></b> を参照ください。    <b><code>IP_MULTICAST_TTL</code></b>  IPv4 送信パケットの有効期間。0 (このインターフェイスから離れない) から 255 までの値を指定しなければなりません。デフォルトは 1 (ローカルネットワークにだけ到達する) です (PHP 5.4 で追加)。   0 から 255 までの整数値。    <b><code>IPV6_MULTICAST_HOPS</code></b>  <b><code>IP_MULTICAST_TTL</code></b> の IPv6 版。 値として -1 を指定することもでき、これはデフォルトのルートを使うことを意味します (PHP 5.4 で追加)。   -1 から 255 までの整数値。
	 * @return mixed <p>指定したオプションの値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-get-option.php
	 * @see socket_create_listen(), socket_set_option()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function socket_get_option($socket, int $level, int $optname) {}

	/**
	 * socket_get_option() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>socket_get_option()</code></p>
	 * @param resource $socket <p><code>socket_create()</code> あるいは <code>socket_accept()</code> で作成したソケットリソース。</p>
	 * @param int $level <p><code>level</code> パラメータは、オプションのプロトコルレベルを指定します。 例えば、オプションをソケットレベルで取得するには <code>level</code> パラメータに <b><code>SOL_SOCKET</code></b> を指定します。 <b><code>TCP</code></b> のようなそれ以外のレベルの場合、そのレベルのプロトコル番号を指定します。 プロトコル番号は <code>getprotobyname()</code> 関数を使用して取得可能です。</p>
	 * @param int $optname <b>使用可能なソケットオプション</b>   オプション 説明 型     <b><code>SO_DEBUG</code></b>  デバッグ情報を記録するかどうかを報告します。   <code>int</code>    <b><code>SO_BROADCAST</code></b>  ブロードキャストメッセージの送信がサポートされているかどうかを報告します。   <code>int</code>    <b><code>SO_REUSEADDR</code></b>  ローカルアドレスが再使用可能するかどうかを報告します。   <code>int</code>    <b><code>SO_KEEPALIVE</code></b>  定期的なメッセージの送信によって接続がアクティブになっているかどうかを報告します。 もしソケットがこれらのメッセージに応答できなかった場合、 接続は崩壊し、ソケットへの書き込みを行うと SIGPIPE シグナルを受け取ります。   <code>int</code>    <b><code>SO_LINGER</code></b>  <p>データがまだ残っているうちに <code>socket_close()</code> をコールした場合に、<code>socket</code> を残存させるかどうかを報告します。 デフォルトでは、ソケットが閉じられる際には未送信のデータをすべて送信しようとします。 接続ベースのソケットでは、 <code>socket_close()</code> は接続先がデータを認識するまで閉じるのを待ちます。</p> <p>l_onoff が非ゼロで l_linger がゼロの場合は、 その時点で未送信のデータはすべて破棄されます。 接続ベースのソケットの場合、接続先には RST (リセット) を送信します。</p> <p>一方 l_onoff が非ゼロで l_linger も非ゼロの場合は、 <code>socket_close()</code> は 全データを送信し終えるか l_linger で指定した時間が経過するまで処理をブロックします。 ソケットが非ブロックモードの場合は、 <code>socket_close()</code> は失敗してエラーを返します。</p>   <code>array</code>。配列に含まれるキーは l_onoff および l_linger のふたつ。    <b><code>SO_OOBINLINE</code></b>  <code>socket</code> が帯域外のデータをインラインに残し続けるかを報告します。   <code>int</code>    <b><code>SO_SNDBUF</code></b>  送信バッファのサイズを報告します。   <code>int</code>    <b><code>SO_RCVBUF</code></b>  受信バッファのサイズを報告します。   <code>int</code>    <b><code>SO_ERROR</code></b>  エラーステータスに関する情報を報告し、それをクリアします。   <code>int</code> (<code>socket_set_option()</code> で設定することはできません)    <b><code>SO_TYPE</code></b>  <code>socket</code> の型 (たとえば <b><code>SOCK_STREAM</code></b>) を報告します。   <code>int</code> (<code>socket_set_option()</code> で設定することはできません)    <b><code>SO_DONTROUTE</code></b>  送信メッセージがルータを越えるかどうかを報告します。   <code>int</code>    <b><code>SO_RCVLOWAT</code></b>  <code>socket</code> の入力操作を行う際の最小バイト数を報告します。   <code>int</code>    <b><code>SO_RCVTIMEO</code></b>  入力操作のタイムアウト値を報告します。   <code>array</code>。配列に含まれるキーはふたつ。 sec はタイムアウトの秒単位の部分で、 usec はタイムアウトのマイクロ秒位の部分。    <b><code>SO_SNDTIMEO</code></b>  出力関数がフロー制御のためにブロックするタイムアウト値を報告します。   <code>array</code>。配列に含まれるキーはふたつ。 sec はタイムアウトの秒単位の部分で、 usec はタイムアウトのマイクロ秒位の部分。    <b><code>SO_SNDLOWAT</code></b>  <code>socket</code> の出力操作を行う際の最小バイト数を報告します。   <code>int</code>    <b><code>TCP_NODELAY</code></b>  Nagle TCP アルゴリズムが無効になっているかどうかを報告します。   <code>int</code>    <b><code>MCAST_JOIN_GROUP</code></b>  マルチキャストグループに参加します (PHP 5.4 で追加)。   二つのキー <i>"group"</i> と <i>"interface"</i> を含む配列。<i>"group"</i> には IPv4 あるいは IPv6 のマルチキャストアドレスを文字列で指定します。 <i>"interface"</i> には、インターフェイス番号 (整数値) あるいは <i>"eth0"</i> などのインターフェイス名 (文字列) を指定します。 <i>0</i> を指定すると、ルーティングテーブルを使ってインターフェイスを選択します (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>MCAST_LEAVE_GROUP</code></b>  マルチキャストグループから離れます (PHP 5.4 で追加)。   配列。詳細は <b><code>MCAST_JOIN_GROUP</code></b> を参照ください (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>MCAST_BLOCK_SOURCE</code></b>  特定のソースから、そのマルチキャストグループにやってくるパケットをブロックします。 そのマルチキャストグループに事前に参加しておく必要があります (PHP 5.4 で追加)。   <b><code>MCAST_JOIN_GROUP</code></b> と同じキーを含み、さらに追加でもうひとつのキーを含む配列。 追加のキーは <i>source</i> で、 ブロック対象となるソースの IPv4 アドレスあるいは IPv6 アドレスを文字列で指定します (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>MCAST_UNBLOCK_SOURCE</code></b>  特定のソースから、そのマルチキャストグループにやってくるパケットのブロックを解除 (そして、受信を再開) します。 そのマルチキャストグループに事前に参加しておく必要があります (PHP 5.4 で追加)。   <b><code>MCAST_BLOCK_SOURCE</code></b> と同じ形式の配列 (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>MCAST_JOIN_SOURCE_GROUP</code></b>  特定の値にマッチするソースアドレスからそのマルチキャストグループにやってきたパケットを受信します (PHP 5.4 で追加)。   <b><code>MCAST_BLOCK_SOURCE</code></b> と同じ形式の配列 (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>MCAST_LEAVE_SOURCE_GROUP</code></b>  特定の値にマッチするソースアドレスからそのマルチキャストグループにやってきたパケットの受信を停止します (PHP 5.4 で追加)。   <b><code>MCAST_BLOCK_SOURCE</code></b> と同じ形式の配列 (<code>socket_set_option()</code> でのみ利用可能)。    <b><code>IP_MULTICAST_IF</code></b>  IPv4 マルチキャストパケットの送信インターフェイス (PHP 5.4 で追加)。   インターフェイス番号を表す整数値か、インターフェイス名を表す <i>eth0</i> のような文字列。 0 を指定すると、ルーティングテーブルを使ってインターフェイスを選択します。 <b>socket_get_option()</b> 関数の返り値は、インターフェイスのインデックスとなります。 注意すべき点は、C の API とは違ってこのオプションには IP アドレスを渡せないということです。 そのため、 <b><code>IP_MULTICAST_IF</code></b> と <b><code>IPV6_MULTICAST_IF</code></b> のインターフェイスの相違はなくなります。    <b><code>IPV6_MULTICAST_IF</code></b>  IPv6 マルチキャストパケットの送信インターフェイス (PHP 5.4 で追加)。   <b><code>IP_MULTICAST_IF</code></b> と同じ。    <b><code>IP_MULTICAST_LOOP</code></b>  IPv4 パケットのマルチキャストループバックポリシー。 このソケットが送信したマルチキャストパケットが、 このソケットが使う送信インターフェイス上の同一マルチキャストグループに属する 同一ホスト上の受信者にも届くかどうかを示します。 これはデフォルトの動作です (PHP 5.4 で追加)。   整数値 (<i>0</i> あるいは <i>1</i>)。<code>socket_set_option()</code> では任意の値を受け付けますが、通常の PHP のルールに従ってそれを boolean 値に変換します。    <b><code>IPV6_MULTICAST_LOOP</code></b>  <b><code>IP_MULTICAST_LOOP</code></b> の IPv6 版 (PHP 5.4 で追加)。   整数値。<b><code>IP_MULTICAST_LOOP</code></b> を参照ください。    <b><code>IP_MULTICAST_TTL</code></b>  IPv4 送信パケットの有効期間。0 (このインターフェイスから離れない) から 255 までの値を指定しなければなりません。デフォルトは 1 (ローカルネットワークにだけ到達する) です (PHP 5.4 で追加)。   0 から 255 までの整数値。    <b><code>IPV6_MULTICAST_HOPS</code></b>  <b><code>IP_MULTICAST_TTL</code></b> の IPv6 版。 値として -1 を指定することもでき、これはデフォルトのルートを使うことを意味します (PHP 5.4 で追加)。   -1 から 255 までの整数値。
	 * @return mixed
	 * @link https://php.net/manual/ja/function.socket-getopt.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_getopt($socket, int $level, int $optname) {}

	/**
	 * 指定したソケットのリモート側に問い合わせ、その型に応じてホスト/ポート、あるいは Unix ファイルシステムのパスを返す
	 * <p>指定したソケットのリモート側に問い合わせ、 その型に応じてホスト/ポート、あるいは Unix ファイルシステムのパスを返します。</p>
	 * @param resource $socket <p><code>socket_create()</code> あるいは <code>socket_accept()</code> で作成したソケットリソース。</p>
	 * @param string $address <p>指定されたソケットの型が <b><code>AF_INET</code></b> あるいは <b><code>AF_INET6</code></b> であった場合、<b>socket_getpeername()</b> はピア（リモート）の <i>IP アドレス</i> を適切な書式（例: <i>127.0.0.1</i> あるいは <i>fe80::1</i>）に したものを <code>address</code> パラメータに、そしてもし オプションの <code>port</code> パラメータが指定されていれば そこにポートを格納します。</p> <p>指定されたソケットの型が <b><code>AF_UNIX</code></b> であった場合、 <b>socket_getpeername()</b> は Unix ファイルシステムの パス（例: <i>/var/run/daemon.sock</i>）を <code>address</code> パラメータに格納します。</p>
	 * @param int $port <p>指定した場合は、 <code>address</code> に関連付けるポートを保持します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <b>socket_getpeername()</b> は、 ソケットの型が <b><code>AF_INET</code></b>、 <b><code>AF_INET6</code></b> あるいは <b><code>AF_UNIX</code></b> のいずれでもない場合にも <b><code>FALSE</code></b> を返します。この場合には、 直近のソケットエラーコードは更新<i>されません</i>。</p>
	 * @link https://php.net/manual/ja/function.socket-getpeername.php
	 * @see socket_getsockname(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_getpeername($socket, string &$address, int &$port = NULL): bool {}

	/**
	 * 指定したソケットのローカル側に問い合わせ、その型に応じてホスト/ポート、あるいは Unix ファイルシステムのパスを返す
	 * <p><b>注意</b>:  <b>socket_getsockname()</b> は、 <code>socket_accept()</code> で作成した <b><code>AF_UNIX</code></b> ソケットとともに使用することはできません。意味のある値が返されるのは、 <code>socket_accept()</code> で作成したソケットか <code>socket_bind()</code> に続くプライマリサーバーソケットのみです。 </p>
	 * @param resource $socket <p><code>socket_create()</code> あるいは <code>socket_accept()</code> で作成したソケットリソース。</p>
	 * @param string $addr <p>指定されたソケットの型が <b><code>AF_INET</code></b> あるいは <b><code>AF_INET6</code></b> であった場合、<b>socket_getsockname()</b> はローカルの <i>IP アドレス</i> を適切な書式（例: <i>127.0.0.1</i> あるいは <i>fe80::1</i>）に したものを <code>address</code> パラメータに、そしてもし オプションの <code>port</code> パラメータが指定されていれば そこにポートを格納します。</p> <p>指定されたソケットの型が <b><code>AF_UNIX</code></b> であった場合、 <code>socket_getpeername()</code> は Unix ファイルシステムのパス （例: <i>/var/run/daemon.sock</i>）を <code>address</code> パラメータに格納します。</p>
	 * @param int $port <p>指定した場合は、関連付けるポートを保持します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <b>socket_getsockname()</b> は、 ソケットの型が <b><code>AF_INET</code></b>、 <b><code>AF_INET6</code></b> あるいは <b><code>AF_UNIX</code></b> のいずれでもない場合にも <b><code>FALSE</code></b> を返します。この場合には、 直近のソケットエラーコードは更新<i>されません</i>。</p>
	 * @link https://php.net/manual/ja/function.socket-getsockname.php
	 * @see socket_getpeername(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_getsockname($socket, string &$addr, int &$port = NULL): bool {}

	/**
	 * ストリームをインポートする
	 * <p>ストリームをインポートし、ソケットをソケットリソースにカプセル化します。</p>
	 * @param resource $stream <p>インポートするストリームリソース。</p>
	 * @return resource <p><b><code>FALSE</code></b> を返します。失敗した場合は <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-import-stream.php
	 * @see stream_socket_server()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function socket_import_stream($stream) {}

	/**
	 * ソケットの直近のエラーを返す
	 * <p>ソケットリソースがこの関数に渡された場合、この特定のソケットに発生した 直近のエラーが返されます。ソケットリソースが省略された場合、 直近にエラーを発生したソケット関数のエラーコードが返されます。 後者は、失敗した場合にソケットを返さない <code>socket_create()</code> のような関数や 特定のソケットに直接関係ない理由で失敗する可能性がある <code>socket_select()</code> で特に有用です。 このエラーコードは、指定したエラーコードを表す文字列を得るために <code>socket_strerror()</code> に渡すものとしても適しています。</p><p>エラーが発生していない場合や <code>socket_clear_error()</code> でクリアされた後である場合は、 この関数は <i>0</i> を返します。</p>
	 * @param resource $socket <p><code>socket_create()</code> で作成したソケットリソース。</p>
	 * @return int <p>この関数は、ソケットのエラーコードを返します。</p>
	 * @link https://php.net/manual/ja/function.socket-last-error.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_last_error($socket = NULL): int {}

	/**
	 * ソケット上で接続待ち(listen)する
	 * <p>ソケット <code>socket</code> が <code>socket_create()</code> を用いて作成され、 <code>socket_bind()</code> で名前が付けられた後、 <code>socket</code> 上の接続要求を待つための通信ができるようになります。</p><p><b>socket_listen()</b> は、ソケットが <i>SOCK_STREAM</i> 型または <i>SOCK_SEQPACKET</i> 型の場合のみ利用可能です。</p>
	 * @param resource $socket <p><code>socket_create()</code> で作成したソケットリソース。</p>
	 * @param int $backlog <p>最大 <code>backlog</code> 個の接続を処理用の キューで待ち受けることが可能です。もし待ちうけ用のキューが いっぱいになった場合、クライアントでは <i>ECONNREFUSED</i> の通知とともにエラーが発生します。あるいは、もし基盤となるプロトコルが リクエストの再送をサポートしている場合、再試行が成功するまで リクエストは無視されます。</p>  <p><b>注意</b>:</p> <p><code>backlog</code> パラメータに指定できる値の最大値は プラットフォームに大きく依存します。Linux では、最大値は <b><code>SOMAXCONN</code></b> に切り詰められます。win32 では、 もし <b><code>SOMAXCONN</code></b> を渡した場合、backlog の 最大値を<i>適切な</i>値に設定する責任はサービスの 提供側が負います。 このプラットフォームでは、実際の backlog の値を見つける標準的な 手段が提供されていません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 エラーコードは <code>socket_last_error()</code> で取得可能で、このコードを <code>socket_strerror()</code> に指定することにより エラーの内容を文字列として取得可能です。</p>
	 * @link https://php.net/manual/ja/function.socket-listen.php
	 * @see socket_accept(), socket_bind(), socket_connect(), socket_create(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_listen($socket, int $backlog = 0): bool {}

	/**
	 * ソケットから最大バイト長まで読みこむ
	 * <p>関数 <b>socket_read()</b> は、関数 <code>socket_create()</code> または <code>socket_accept()</code> により作成されたソケット リソース <code>socket</code> から読み込みます。</p>
	 * @param resource $socket <p><code>socket_create()</code> あるいは <code>socket_accept()</code> で作成したソケットリソース。</p>
	 * @param int $length <p>読み込まれる最大バイト長は、<code>length</code> パラメータで 指定します。 読み込みを終了するために <b><code>\r</code></b>、<b><code>\n</code></b>、 <b><code>\0</code></b> を使用することが可能です (これは、以下に示す <code>type</code> に依存します)。</p>
	 * @param int $type <p>オプションのパラメータ <code>type</code> は、名前のある定数です。</p><ul> <li>  <b><code>PHP_BINARY_READ</code></b> (デフォルト) - システムの <i>recv()</i> 関数を 使用します。バイナリデータ読み込みに関して安全です。  </li> <li>  <b><code>PHP_NORMAL_READ</code></b> - 読み込みは、<i>\n</i> あるいは <i>\r</i> で中断されます。  </li> </ul>
	 * @return string <p><b>socket_read()</b> は、成功時に文字列としてデータを返し、 エラー時 (リモートホストが接続をクローズした場合を含みます) に <b><code>FALSE</code></b> を返します。 エラーコードは <code>socket_last_error()</code> で取得可能であり、 このコードは、エラー文字列を取得するために <code>socket_strerror()</code> に渡すことができます。</p> <p><b>注意</b>:</p> <p><b>socket_read()</b> は、読み込むデータがもう存在しない 場合に長さゼロの文字列("")を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-read.php
	 * @see socket_accept(), socket_bind(), socket_connect(), socket_listen(), socket_last_error(), socket_strerror(), socket_write()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_read($socket, int $length, int $type = PHP_BINARY_READ): string {}

	/**
	 * 接続したソケットからデータを受信する
	 * <p><b>socket_recv()</b> 関数は、 <code>socket</code> から <code>len</code> バイトのデータを受信して <code>buf</code> に格納します。 <b>socket_recv()</b> を使うと、 接続したソケットからデータを収集することができます。 さらに、フラグを指定して関数の挙動を変更することもできます。</p><p><code>buf</code> は参照渡しなので、 引数リストには変数で渡さなければなりません。 <code>socket</code> から <b>socket_recv()</b> で読み込んだデータが <code>buf</code> に入ります。</p>
	 * @param resource $socket <p><code>socket</code> は、事前に socket_create() で作成したソケットリソースでなければなりません。</p>
	 * @param string $buf <p>受信したデータが、 <code>buf</code> で指定した変数に格納されます。 エラーが発生したり接続がリセットされたりデータが存在しなかったりした場合は、 <code>buf</code> には <b><code>NULL</code></b> が設定されます。</p>
	 * @param int $len <p>最大 <code>len</code> バイトまでをリモートホストから取得します。</p>
	 * @param int $flags <p><code>flags</code> の値は、次のフラグを論理 OR (<i>|</i>) 演算子で組み合わせたものとなります。</p>  <b><code>flags</code> のとりうる値</b>   フラグ 説明     <b><code>MSG_OOB</code></b>  out-of-band を処理します。    <b><code>MSG_PEEK</code></b>  受信キューの先頭からデータを取得し、受信したデータをキューから削除しません。    <b><code>MSG_WAITALL</code></b>  最低 <code>len</code> バイト受信するまでブロックします。 しかし、シグナルを受け取ったりリモートホストが接続を切断したりした場合は、 この関数が返すデータがそれより少なくなる可能性があります。    <b><code>MSG_DONTWAIT</code></b>  このフラグを設定すると、正常にブロックされている状態でも関数が結果を返します。
	 * @return int <p><b>socket_recv()</b> は、受信したバイト数を返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。 実際のエラーコードを取得するには <code>socket_last_error()</code> をコールします。 このエラーコードを <code>socket_strerror()</code> に渡すと、エラーに関する説明テキストを取得することができます。</p>
	 * @link https://php.net/manual/ja/function.socket-recv.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_recv($socket, string &$buf, int $len, int $flags): int {}

	/**
	 * 接続しているかどうかによらず、ソケットからデータを受信する
	 * <p><b>socket_recvfrom()</b> 関数は、 ポート <code>port</code> (<b><code>AF_UNIX</code></b> 型のソケットである場合を除く) 上の <code>name</code> から受信した <code>len</code> バイトのデータを <code>buf</code> に格納します。 <b>socket_recvfrom()</b> は、 接続済みのソケットだけでなく接続していないソケットに対しても使用可能です。 さらに、フラグを指定することでこの関数の挙動を設定できます。</p><p><code>name</code> と <code>port</code> は参照渡しとしなければなりません。接続していないソケットの場合は、 <code>name</code> はリモートホストの IP アドレスか UNIX ソケットへのパスとなります。接続済みのソケットの場合は、 <code>name</code> は <b><code>NULL</code></b> とします。 また、<b><code>AF_INET</code></b> あるいは <b><code>AF_INET6</code></b> 形式のまだ接続していないソケットの場合、 <code>port</code> にはリモートホストのポート番号を指定します。</p>
	 * @param resource $socket <p><code>socket</code> には、 socket_create() で作成したソケットリソースを指定します。</p>
	 * @param string $buf <p>受信したデータが <code>buf</code> に格納されます。</p>
	 * @param int $len <p>最大 <code>len</code> バイトまでのデータをリモートホストから取得します。</p>
	 * @param int $flags <p><code>flags</code> の値は、以下のフラグの任意の組み合わせを 論理 OR 演算子 (<i>|</i>) で連結したものとなります。</p>  <b><code>flags</code> に使用できる値</b>   フラグ 説明     <b><code>MSG_OOB</code></b>  帯域外 (out-of-band) のデータを処理する。    <b><code>MSG_PEEK</code></b>  受信キューの先頭にあるデータを受信し、 そのデータをそのままキューに残しておく。    <b><code>MSG_WAITALL</code></b>  少なくとも <code>len</code> バイト受信するまではブロックする。 しかし、もし何らかのシグナルを受信したりリモートホストとの接続が切断された場合は これより少ないバイト数を返す可能性がある。    <b><code>MSG_DONTWAIT</code></b>  通常はブロックする場面であってもそのまま return する。
	 * @param string $name <p><b><code>AF_UNIX</code></b> 型のソケットの場合は、 <code>name</code> はファイルへのパスとなります。 それ以外の場合は、未接続のソケットの場合には <code>name</code> はリモートホストの IP アドレスとなります。 接続済みソケットの場合は <b><code>NULL</code></b> となります。</p>
	 * @param int $port <p>この引数は <b><code>AF_INET</code></b> 型あるいは <b><code>AF_INET6</code></b> 型のソケットに対してのみ適用され、 データを受信するリモートホストのポートを指定します。 接続済みソケットの場合は <code>port</code> は <b><code>NULL</code></b> となります。</p>
	 * @return int <p><b>socket_recvfrom()</b> は、受信したバイト数を返します。 あるいはエラー時には <b><code>FALSE</code></b> を返します。 エラーコードを取得するには <code>socket_last_error()</code> をコールします。取得したエラーコードを <code>socket_strerror()</code> に渡すと、 そのエラーについての説明を得ることができます。</p>
	 * @link https://php.net/manual/ja/function.socket-recvfrom.php
	 * @see socket_recv(), socket_send(), socket_sendto(), socket_create()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_recvfrom($socket, string &$buf, int $len, int $flags, string &$name, int &$port = NULL): int {}

	/**
	 * メッセージを読む
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $socket
	 * @param string $message
	 * @param int $flags
	 * @return int
	 * @link https://php.net/manual/ja/function.socket-recvmsg.php
	 * @see socket_sendmsg(), socket_cmsg_space()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function socket_recvmsg($socket, string $message, int $flags = NULL): int {}

	/**
	 * 与えられたソケットの配列に対し、指定した有効時間で select() システムコールを実行する
	 * <p><b>socket_select()</b> はソケットの配列を受け取り、 それらの状態が変化するまで待ちます。BSD のソケットについての知識がある方なら、 これらのソケットの配列が、いわゆるファイル記述子セットであることがご理解いただけるでしょう。 3 つの独立した配列でソケットリソースを監視します。</p>
	 * @param array $read <p>配列 <code>read</code> に挙げられたソケットでは、 文字が読み込み可能になっているかどうか（厳密に言うと、読み込みが ブロックされていないかどうか - 実際には、ソケット記述子はファイルの 終端でも有効です。そのような場合、<code>socket_read()</code> は長さゼロの文字列を返します）を監視します。</p>
	 * @param array $write <p>配列 <code>write</code> に挙げられたソケットでは、 書き込みがブロックされていないかどうかを監視します。</p>
	 * @param array $except <p>配列 <code>except</code> に挙げられたソケットでは、 例外を監視します。</p>
	 * @param int $tv_sec <p><code>tv_sec</code> および <code>tv_usec</code> は、ともに<i>タイムアウト</i>を指定するパラメータです。 <i>タイムアウト</i>は、<b>socket_select()</b> が結果を返すまでの経過時間の最大値です。 <code>tv_sec</code> はゼロにすることも可能で、そうすると <b>socket_select()</b> は結果をすぐに返します。 これはポーリングをする際に有用です。<code>tv_sec</code> に <b><code>NULL</code></b>（タイムアウトしない）を指定すると、 <b>socket_select()</b> は無期限にブロックします。</p>
	 * @param int $tv_usec
	 * @return int <p>成功した場合は、<b>socket_select()</b> は配列内で 変化のあったソケットリソースの数を返します。もし何かがおこる前に タイムアウト時間が経過した場合は、ゼロを返すことになります。 エラー時には <b><code>FALSE</code></b> が返されます。エラーコードは <code>socket_last_error()</code> で取得可能です。</p> <p><b>注意</b>:</p> <p>エラーかどうかを調べる際には、必ず <i>===</i> 演算子を 使用するようにしましょう。<b>socket_select()</b> は 0 を返す場合もあり、このような場合に <i>==</i> を用いて比較すると、エラーと判定されてしまいます。</p>  <p><b>例2 <b>socket_select()</b> の返す結果を知る</b></p>  <code> &lt;&#63;php<br>$e = NULL;<br>if (false === socket_select($r, $w, $e, 0)) {<br>    echo "socket_select() は失敗しました。原因: " .<br>        socket_strerror(socket_last_error()) . "\n";<br>}<br>&#63;&gt;  </code>
	 * @link https://php.net/manual/ja/function.socket-select.php
	 * @see socket_read(), socket_write(), socket_last_error(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_select(array &$read, array &$write, array &$except, int $tv_sec, int $tv_usec = 0): int {}

	/**
	 * 接続したソケットにデータを送信する
	 * <p>関数 <b>socket_send()</b> は、 <code>buf</code> からソケット <code>socket</code> に <code>len</code> バイトのデータを送信します。</p>
	 * @param resource $socket <p><code>socket_create()</code> あるいは <code>socket_accept()</code> が作成したソケットリソース。</p>
	 * @param string $buf <p>リモートホストに送信するデータを含むバッファ。</p>
	 * @param int $len <p><code>buf</code> からリモートホストに送信するバイト数。</p>
	 * @param int $flags <p><code>flags</code> の値は、以下のフラグの任意の組み合わせを 論理 OR 演算子 (<i>|</i>) で連結したものとなります。</p> <b><code>flags</code> がとりうる値</b>   <b><code>MSG_OOB</code></b>  OOB（out-of-band: 帯域外）データを送信します。    <b><code>MSG_EOR</code></b>  レコードにマークをつけます。 レコードでデータがそろいます。    <b><code>MSG_EOF</code></b>  ソケットの送信側を閉じ、そのことを知らせる通知を送信データの最後に付加します。 トランザクションでデータがそろいます。    <b><code>MSG_DONTROUTE</code></b>  ルータを使用せず、直接つながっているインターフェイスのみを使用します。
	 * @return int <p><b>socket_send()</b> は、送信したバイト数あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-send.php
	 * @see socket_sendto()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_send($socket, string $buf, int $len, int $flags): int {}

	/**
	 * メッセージを送信する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $socket
	 * @param array $message
	 * @param int $flags
	 * @return int <p>送信したバイト数を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-sendmsg.php
	 * @see socket_recvmsg(), socket_cmsg_space()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function socket_sendmsg($socket, array $message, int $flags): int {}

	/**
	 * 接続しているかどうかによらずソケットにメッセージを送信する
	 * <p>関数 <b>socket_sendto()</b> は、 アドレス <code>addr</code> の <code>port</code> を使用し、 <code>buf</code> からソケット <code>socket</code> に <code>len</code> バイトのデータを送信します。</p>
	 * @param resource $socket <p><code>socket_create()</code> で作成したソケットリソース。</p>
	 * @param string $buf <p>送信するデータが、<code>buf</code> から取り出されます。</p>
	 * @param int $len <p><code>buf</code> から <code>len</code> バイト分のデータが送信されます。</p>
	 * @param int $flags <p><code>flags</code> の値は、以下のフラグの任意の組み合わせを 論理 OR 演算子 (<i>|</i>) で連結したものとなります。</p> <b><code>flags</code> がとりうる値</b>   <b><code>MSG_OOB</code></b>  OOB（out-of-band: 帯域外）データを送信します。    <b><code>MSG_EOR</code></b>  レコードにマークをつけます。 レコードでデータがそろいます。    <b><code>MSG_EOF</code></b>  ソケットの送信側を閉じ、そのことを知らせる通知を送信データの最後に付加します。 トランザクションでデータがそろいます。    <b><code>MSG_DONTROUTE</code></b>  ルータを使用せず、直接つながっているインターフェイスのみを使用します。
	 * @param string $addr <p>リモートホストの IP アドレス。</p>
	 * @param int $port <p><code>port</code> は、 データの送信先となるリモートホストのポート番号です。</p>
	 * @return int <p><b>socket_sendto()</b> は、リモートホストに送信したバイト数を返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-sendto.php
	 * @see socket_send()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_sendto($socket, string $buf, int $len, int $flags, string $addr, int $port = 0): int {}

	/**
	 * ソケットリソースをブロックモードに設定する
	 * <p><b>socket_set_block()</b> 関数は、 <code>socket</code> パラメータで指定したソケットから <b><code>O_NONBLOCK</code></b> フラグを取り除きます。</p><p>受信や送信、接続、待機といった操作をブロックモードのソケットに対して行うと、 その処理が完了するか何らかのシグナルを受信するまではスクリプトを停止します。</p>
	 * @param resource $socket <p><code>socket_create()</code> あるいは <code>socket_accept()</code> で作成したソケットリソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-set-block.php
	 * @see socket_set_nonblock(), socket_set_option()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function socket_set_block($socket): bool {}

	/**
	 * ソケットリソースを非ブロックモードに設定する
	 * <p><b>socket_set_nonblock()</b> 関数は、 <code>socket</code> パラメータで指定したソケットに <b><code>O_NONBLOCK</code></b> フラグを設定します。</p><p>受信や送信、接続、待機といった操作を非ブロックモードのソケットに対して行うと、 その処理が完了するか何らかのシグナルを受信するまではスクリプトは停止しません。 また、その操作がブロックされると、呼び出し元の関数は失敗します。</p>
	 * @param resource $socket <p><code>socket_create()</code> あるいは <code>socket_accept()</code> で作成したソケットリソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-set-nonblock.php
	 * @see socket_set_block(), socket_set_option(), stream_set_blocking()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_set_nonblock($socket): bool {}

	/**
	 * ソケットのオプションを設定する
	 * <p><b>socket_set_option()</b> 関数は、<code>level</code> が指すプロトコルレベルでソケット <code>socket</code> のオプション <code>optname</code> に値 <code>optval</code> を設定します。</p>
	 * @param resource $socket <p><code>socket_create()</code> あるいは <code>socket_accept()</code> で作成したソケットリソース。</p>
	 * @param int $level <p><code>level</code> パラメータは、オプションのプロトコルレベルを指定します。 例えば、オプションをソケットレベルで取得するには <code>level</code> パラメータに SOL_SOCKET を指定します。 TCP のようなそれ以外のレベルの場合、そのレベルのプロトコル番号を指定します。 プロトコル番号は <code>getprotobyname()</code> 関数を使用して取得可能です。</p>
	 * @param int $optname <p>使用可能なソケットオプションは <code>socket_get_option()</code> 関数と同じです。</p>
	 * @param mixed $optval <p>オプションの値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-set-option.php
	 * @see socket_create(), socket_bind(), socket_strerror(), socket_last_error(), socket_get_option()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function socket_set_option($socket, int $level, int $optname, $optval): bool {}

	/**
	 * socket_set_option() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>socket_set_option()</code></p>
	 * @param resource $socket <p><code>socket_create()</code> あるいは <code>socket_accept()</code> で作成したソケットリソース。</p>
	 * @param int $level <p><code>level</code> パラメータは、オプションのプロトコルレベルを指定します。 例えば、オプションをソケットレベルで取得するには <code>level</code> パラメータに SOL_SOCKET を指定します。 TCP のようなそれ以外のレベルの場合、そのレベルのプロトコル番号を指定します。 プロトコル番号は <code>getprotobyname()</code> 関数を使用して取得可能です。</p>
	 * @param int $optname <p>使用可能なソケットオプションは <code>socket_get_option()</code> 関数と同じです。</p>
	 * @param mixed $optval <p>オプションの値。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.socket-setopt.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_setopt($socket, int $level, int $optname, $optval): bool {}

	/**
	 * 受信、送信、または送受信用のソケットをシャットダウンする
	 * <p><b>socket_shutdown()</b> 関数は、<code>socket</code> から送られてくる受信、送信あるいはすべて（デフォルト）のデータを停止します。</p><p><b>注意</b>:</p><p>関連するバッファの内容は、空になるかもしれないしならないかもしれません。</p>
	 * @param resource $socket <p><code>socket_create()</code> で作成したソケットリソース。</p>
	 * @param int $how <p><code>how</code> の値は以下のうちのひとつです。</p> <b><code>how</code> のとりうる値</b>   <i>0</i>  ソケットの読み込みを停止します。    <i>1</i>  ソケットの書き込みを停止します。    <i>2</i>  ソケットの読み込み・書き込みを停止します。
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-shutdown.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_shutdown($socket, int $how = 2): bool {}

	/**
	 * ソケットエラーの内容を文字列として返す
	 * <p><b>socket_strerror()</b> は、パラメータ <code>errno</code> に <code>socket_last_error()</code> の返すソケットエラーコードを受け取り、 対応する内容を文字列で返します。</p><p><b>注意</b>:</p><p>socket 拡張モジュールが出すエラーメッセージは英語ですが、 この関数から取得したシステムメッセージは現在のロケール (<b><code>LC_MESSAGES</code></b>) にあわせた表示となります。</p>
	 * @param int $errno <p>ソケットのエラー番号。たいていは <code>socket_last_error()</code> が返したものとなるでしょう。</p>
	 * @return string <p><code>errno</code> パラメータに対応するエラーメッセージを返します。</p>
	 * @link https://php.net/manual/ja/function.socket-strerror.php
	 * @see socket_accept(), socket_bind(), socket_connect(), socket_listen(), socket_create()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_strerror(int $errno): string {}

	/**
	 * ソケットに書き込む
	 * <p>関数 <b>socket_write()</b> は、 <code>buffer</code> の内容をソケット <code>socket</code> に書き込みます。</p>
	 * @param resource $socket
	 * @param string $buffer <p>書き込まれるバッファ。</p>
	 * @param int $length <p>オプションのパラメータ <code>length</code> で、 ソケットに書き込むバイト数を指定することが可能です。 この値がバッファの長さより大きい場合、自動的にバッファのサイズに切り詰められます。</p>
	 * @return int <p>ソケットへの書き込みに成功したデータのバイト数を返します。失敗した場合に <b><code>FALSE</code></b> を返します。 エラーコードは <code>socket_last_error()</code> を用いて取得することができ、この値を <code>socket_strerror()</code> に渡すことでエラー情報を文字列で取得可能です。</p> <p><b>注意</b>:</p> <p><b>socket_write()</b> がゼロを返すことも十分ありえます。 これは、書き込むデータが存在しなかったことを意味します。 エラーをチェックするために <b><code>FALSE</code></b> かどうかを調べる際には、必ず <i>===</i> 演算子を使用しましょう。</p>
	 * @link https://php.net/manual/ja/function.socket-write.php
	 * @see socket_accept(), socket_bind(), socket_connect(), socket_listen(), socket_read(), socket_strerror()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function socket_write($socket, string $buffer, int $length = 0): int {}

	/**
	 * Exports the WSAPROTOCOL_INFO Structure
	 * <p>Exports the <i>WSAPROTOCOL_INFO</i> structure into shared memory and returns an identifier to be used with <code>socket_wsaprotocol_info_import()</code>. The exported ID is only valid for the given <code>target_pid</code>.</p>
	 * @param resource $socket <p>A valid socket resource.</p>
	 * @param int $target_pid <p>The ID of the process which will import the socket.</p>
	 * @return string <p>Returns an identifier to be used for the import, 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link https://php.net/manual/ja/function.socket-wsaprotocol-info-export.php
	 * @see socket_wsaprotocol_info_import(), socket_wsaprotocol_info_release()
	 * @since PHP 7 >= 7.3.0
	 */
	function socket_wsaprotocol_info_export($socket, int $target_pid): string {}

	/**
	 * Imports a Socket from another Process
	 * <p>Imports a socket which has formerly been exported from another process.</p>
	 * @param string $info_id <p>The ID which has been returned by a former call to <code>socket_wsaprotocol_info_export()</code>.</p>
	 * @return resource <p>Returns the socket resource, 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link https://php.net/manual/ja/function.socket-wsaprotocol-info-import.php
	 * @see socket_wsaprotocol_info_export()
	 * @since PHP 7 >= 7.3.0
	 */
	function socket_wsaprotocol_info_import(string $info_id) {}

	/**
	 * Releases an exported WSAPROTOCOL_INFO Structure
	 * <p>Releases the shared memory corresponding to the given <code>info_id</code>.</p>
	 * @param string $info_id <p>The ID which has been returned by a former call to <code>socket_wsaprotocol_info_export()</code>.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.socket-wsaprotocol-info-release.php
	 * @see socket_wsaprotocol_info_export()
	 * @since PHP 7 >= 7.3.0
	 */
	function socket_wsaprotocol_info_release(string $info_id): bool {}

	define('AF_INET', 2);

	/**
	 * IPv6 サポートつきでコンパイルした場合にのみ使用可能です。
	 */
	define('AF_INET6', 10);

	define('AF_UNIX', 1);

	define('MSG_DONTROUTE', 4);

	/**
	 * Windows プラットフォームでは使用できません。
	 */
	define('MSG_EOF', 512);

	/**
	 * Windows プラットフォームでは使用できません。
	 */
	define('MSG_EOR', 128);

	define('MSG_OOB', 1);

	define('MSG_PEEK', 2);

	define('MSG_WAITALL', 256);

	define('PHP_BINARY_READ', 2);

	define('PHP_NORMAL_READ', 1);

	define('SO_BROADCAST', 6);

	define('SO_DEBUG', 1);

	define('SO_DONTROUTE', 5);

	define('SO_ERROR', 4);

	define('SO_KEEPALIVE', 9);

	define('SO_LINGER', 13);

	define('SO_OOBINLINE', 10);

	define('SO_RCVBUF', 8);

	define('SO_RCVLOWAT', 18);

	define('SO_RCVTIMEO', 20);

	define('SO_REUSEADDR', 2);

	/**
	 * この定数は、PHP 5.4.10 以降でかつソケットオプション <b><code>SO_REUSEPORT</code></b> に対応したプラットフォーム上でだけ使えます。 MacOS や FreeBSD などはこのソケットオプションに対応していますが、 Linux や Windows は対応していません。
	 */
	define('SO_REUSEPORT', 15);

	define('SO_SNDBUF', 7);

	define('SO_SNDLOWAT', 19);

	define('SO_SNDTIMEO', 21);

	define('SO_TYPE', 3);

	define('SOCK_DGRAM', 2);

	define('SOCK_RAW', 3);

	define('SOCK_RDM', 4);

	define('SOCK_SEQPACKET', 5);

	define('SOCK_STREAM', 1);

	/**
	 * Address already in use.
	 */
	define('SOCKET_ADDRINUSE', null);

	/**
	 * Arg list too long.
	 */
	define('SOCKET_E2BIG', 7);

	/**
	 * Permission denied.
	 */
	define('SOCKET_EACCES', 13);

	define('SOCKET_EADDRINUSE', 98);

	/**
	 * Cannot assign requested address.
	 */
	define('SOCKET_EADDRNOTAVAIL', 99);

	/**
	 * Advertise error.
	 */
	define('SOCKET_EADV', 68);

	/**
	 * Address family not supported by protocol.
	 */
	define('SOCKET_EAFNOSUPPORT', 97);

	/**
	 * Try again.
	 */
	define('SOCKET_EAGAIN', 11);

	/**
	 * Operation already in progress.
	 */
	define('SOCKET_EALREADY', 114);

	/**
	 * Invalid exchange.
	 */
	define('SOCKET_EBADE', 52);

	/**
	 * Bad file number.
	 */
	define('SOCKET_EBADF', 9);

	/**
	 * File descriptor in bad state.
	 */
	define('SOCKET_EBADFD', 77);

	/**
	 * Not a data message.
	 */
	define('SOCKET_EBADMSG', 74);

	/**
	 * Invalid request descriptor.
	 */
	define('SOCKET_EBADR', 53);

	/**
	 * Invalid request code.
	 */
	define('SOCKET_EBADRQC', 56);

	/**
	 * Invalid slot.
	 */
	define('SOCKET_EBADSLT', 57);

	/**
	 * Device or resource busy.
	 */
	define('SOCKET_EBUSY', 16);

	/**
	 * Channel number out of range.
	 */
	define('SOCKET_ECHRNG', 44);

	/**
	 * Communication error on send.
	 */
	define('SOCKET_ECOMM', 70);

	/**
	 * Software caused connection abort.
	 */
	define('SOCKET_ECONNABORTED', 103);

	/**
	 * Connection refused.
	 */
	define('SOCKET_ECONNREFUSED', 111);

	/**
	 * Connection reset by peer.
	 */
	define('SOCKET_ECONNRESET', 104);

	/**
	 * Destination address required.
	 */
	define('SOCKET_EDESTADDRREQ', 89);

	define('SOCKET_EDISCON', null);

	/**
	 * Quota exceeded.
	 */
	define('SOCKET_EDQUOT', 122);

	define('SOCKET_EDUOT', null);

	/**
	 * File exists.
	 */
	define('SOCKET_EEXIST', 17);

	/**
	 * Bad address.
	 */
	define('SOCKET_EFAULT', 14);

	/**
	 * Host is down.
	 */
	define('SOCKET_EHOSTDOWN', 112);

	/**
	 * No route to host.
	 */
	define('SOCKET_EHOSTUNREACH', 113);

	/**
	 * Identifier removed.
	 */
	define('SOCKET_EIDRM', 43);

	/**
	 * Operation now in progress.
	 */
	define('SOCKET_EINPROGRESS', 115);

	/**
	 * Interrupted system call.
	 */
	define('SOCKET_EINTR', 4);

	/**
	 * Invalid argument.
	 */
	define('SOCKET_EINVAL', 22);

	/**
	 * I/O error.
	 */
	define('SOCKET_EIO', 5);

	/**
	 * Transport endpoint is already connected.
	 */
	define('SOCKET_EISCONN', 106);

	/**
	 * Is a directory.
	 */
	define('SOCKET_EISDIR', 21);

	/**
	 * Is a named type file.
	 */
	define('SOCKET_EISNAM', 120);

	/**
	 * Level 2 halted.
	 */
	define('SOCKET_EL2HLT', 51);

	/**
	 * Level 2 not synchronized.
	 */
	define('SOCKET_EL2NSYNC', 45);

	/**
	 * Level 3 halted.
	 */
	define('SOCKET_EL3HLT', 46);

	/**
	 * Level 3 reset.
	 */
	define('SOCKET_EL3RST', 47);

	/**
	 * Link number out of range.
	 */
	define('SOCKET_ELNRNG', 48);

	/**
	 * Too many symbolic links encountered.
	 */
	define('SOCKET_ELOOP', 40);

	/**
	 * Wrong medium type.
	 */
	define('SOCKET_EMEDIUMTYPE', 124);

	/**
	 * Too many open files.
	 */
	define('SOCKET_EMFILE', 24);

	/**
	 * Too many links.
	 */
	define('SOCKET_EMLINK', 31);

	/**
	 * Message too long.
	 */
	define('SOCKET_EMSGSIZE', 90);

	/**
	 * Multihop attempted.
	 */
	define('SOCKET_EMULTIHOP', 72);

	/**
	 * File name too long.
	 */
	define('SOCKET_ENAMETOOLONG', 36);

	/**
	 * Network is down.
	 */
	define('SOCKET_ENETDOWN', 100);

	/**
	 * Network dropped connection because of reset.
	 */
	define('SOCKET_ENETRESET', 102);

	/**
	 * Network is unreachable.
	 */
	define('SOCKET_ENETUNREACH', 101);

	/**
	 * File table overflow.
	 */
	define('SOCKET_ENFILE', 23);

	/**
	 * No anode.
	 */
	define('SOCKET_ENOANO', 55);

	/**
	 * No buffer space available.
	 */
	define('SOCKET_ENOBUFS', 105);

	/**
	 * No CSI structure available.
	 */
	define('SOCKET_ENOCSI', 50);

	/**
	 * No data available.
	 */
	define('SOCKET_ENODATA', 61);

	/**
	 * No such device.
	 */
	define('SOCKET_ENODEV', 19);

	/**
	 * No such file or directory.
	 */
	define('SOCKET_ENOENT', 2);

	/**
	 * No record locks available.
	 */
	define('SOCKET_ENOLCK', 37);

	/**
	 * Link has been severed.
	 */
	define('SOCKET_ENOLINK', 67);

	/**
	 * No medium found.
	 */
	define('SOCKET_ENOMEDIUM', 123);

	/**
	 * Out of memory.
	 */
	define('SOCKET_ENOMEM', 12);

	/**
	 * No message of desired type.
	 */
	define('SOCKET_ENOMSG', 42);

	/**
	 * Machine is not on the network.
	 */
	define('SOCKET_ENONET', 64);

	define('SOCKET_ENOPROTOOPT', 92);

	/**
	 * No space left on device.
	 */
	define('SOCKET_ENOSPC', 28);

	/**
	 * Out of streams resources.
	 */
	define('SOCKET_ENOSR', 63);

	/**
	 * Device not a stream.
	 */
	define('SOCKET_ENOSTR', 60);

	/**
	 * Function not implemented.
	 */
	define('SOCKET_ENOSYS', 38);

	/**
	 * Block device required.
	 */
	define('SOCKET_ENOTBLK', 15);

	/**
	 * Transport endpoint is not connected.
	 */
	define('SOCKET_ENOTCONN', 107);

	/**
	 * Not a directory.
	 */
	define('SOCKET_ENOTDIR', 20);

	/**
	 * Directory not empty.
	 */
	define('SOCKET_ENOTEMPTY', 39);

	/**
	 * Socket operation on non-socket.
	 */
	define('SOCKET_ENOTSOCK', 88);

	/**
	 * Not a typewriter.
	 */
	define('SOCKET_ENOTTY', 25);

	/**
	 * Name not unique on network.
	 */
	define('SOCKET_ENOTUNIQ', 76);

	/**
	 * No such device or address.
	 */
	define('SOCKET_ENXIO', 6);

	/**
	 * Operation not supported on transport endpoint.
	 */
	define('SOCKET_EOPNOTSUPP', 95);

	/**
	 * Operation not permitted.
	 */
	define('SOCKET_EPERM', 1);

	/**
	 * Protocol family not supported.
	 */
	define('SOCKET_EPFNOSUPPORT', 96);

	/**
	 * Broken pipe.
	 */
	define('SOCKET_EPIPE', 32);

	define('SOCKET_EPROCLIM', null);

	/**
	 * Protocol error.
	 */
	define('SOCKET_EPROTO', 71);

	/**
	 * Protocol not supported.
	 */
	define('SOCKET_EPROTONOSUPPORT', 93);

	/**
	 * Protocol not available.
	 */
	define('SOCKET_EPROTOOPT', null);

	/**
	 * Protocol wrong type for socket.
	 */
	define('SOCKET_EPROTOTYPE', 91);

	/**
	 * Remote address changed.
	 */
	define('SOCKET_EREMCHG', 78);

	/**
	 * Object is remote.
	 */
	define('SOCKET_EREMOTE', 66);

	/**
	 * Remote I/O error.
	 */
	define('SOCKET_EREMOTEIO', 121);

	/**
	 * Interrupted system call should be restarted.
	 */
	define('SOCKET_ERESTART', 85);

	/**
	 * Read-only file system.
	 */
	define('SOCKET_EROFS', 30);

	/**
	 * Cannot send after transport endpoint shutdown.
	 */
	define('SOCKET_ESHUTDOWN', 108);

	/**
	 * Socket type not supported.
	 */
	define('SOCKET_ESOCKTNOSUPPORT', 94);

	/**
	 * Illegal seek.
	 */
	define('SOCKET_ESPIPE', 29);

	/**
	 * Srmount error.
	 */
	define('SOCKET_ESRMNT', 69);

	define('SOCKET_ESTALE', null);

	/**
	 * Streams pipe error.
	 */
	define('SOCKET_ESTRPIPE', 86);

	/**
	 * Timer expired.
	 */
	define('SOCKET_ETIME', 62);

	/**
	 * Connection timed out.
	 */
	define('SOCKET_ETIMEDOUT', 110);

	/**
	 * Too many references: cannot splice.
	 */
	define('SOCKET_ETOOMANYREFS', 109);

	define('SOCKET_ETOOMYREFS', null);

	/**
	 * Protocol driver not attached.
	 */
	define('SOCKET_EUNATCH', 49);

	/**
	 * Too many users.
	 */
	define('SOCKET_EUSERS', 87);

	/**
	 * Operation would block.
	 */
	define('SOCKET_EWOULDBLOCK', 11);

	/**
	 * Cross-device link.
	 */
	define('SOCKET_EXDEV', 18);

	/**
	 * Exchange full.
	 */
	define('SOCKET_EXFULL', 54);

	define('SOCKET_HOST_NOT_FOUND', null);

	define('SOCKET_NO_ADDRESS', null);

	define('SOCKET_NO_DATA', null);

	define('SOCKET_NO_RECOVERY', null);

	define('SOCKET_NOTINITIALISED', null);

	define('SOCKET_SYSNOTREADY', null);

	define('SOCKET_TRY_AGAIN', null);

	define('SOCKET_VERNOTSUPPORTED', null);

	define('SOL_SOCKET', 1);

	define('SOL_TCP', 6);

	define('SOL_UDP', 17);

	/**
	 * Nagle TCP アルゴリズムを無効にするために使用します。 PHP 5.2.7 で追加されました。
	 */
	define('TCP_NODELAY', 1);

}
