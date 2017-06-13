<?php

// Start of sockets v.7.1.5

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 与えられたソケットの配列に対し、指定した有効時間で select() システムコールを実行する
 * @link http://php.net/manual/ja/function.socket-select.php
 * @param array $read <p>
 * 配列 <i>read</i> に挙げられたソケットでは、
 * 文字が読み込み可能になっているかどうか（厳密に言うと、読み込みが
 * ブロックされていないかどうか - 実際には、ソケット記述子はファイルの
 * 終端でも有効です。そのような場合、<b>socket_read</b>
 * は長さゼロの文字列を返します）を監視します。
 * </p>
 * @param array $write <p>
 * 配列 <i>write</i> に挙げられたソケットでは、
 * 書き込みがブロックされていないかどうかを監視します。
 * </p>
 * @param array $except <p>
 * 配列 <i>except</i> に挙げられたソケットでは、
 * 例外を監視します。
 * </p>
 * @param int $tv_sec <p>
 * <i>tv_sec</i> および <i>tv_usec</i>
 * は、ともにタイムアウトを指定するパラメータです。
 * タイムアウトは、<b>socket_select</b>
 * が結果を返すまでの経過時間の最大値です。
 * <i>tv_sec</i> はゼロにすることも可能で、そうすると
 * <b>socket_select</b> は結果をすぐに返します。
 * これはポーリングをする際に有用です。<i>tv_sec</i>
 * に <b>NULL</b>（タイムアウトしない）を指定すると、
 * <b>socket_select</b> は無期限にブロックします。
 * </p>
 * @param int $tv_usec [optional]
 * @return int 成功した場合は、<b>socket_select</b> は配列内で
 * 変化のあったソケットリソースの数を返します。もし何かがおこる前に
 * タイムアウト時間が経過した場合は、ゼロを返すことになります。
 * エラー時には <b>FALSE</b> が返されます。エラーコードは
 * <b>socket_last_error</b> で取得可能です。
 * </p>
 * <p>
 * エラーかどうかを調べる際には、必ず === 演算子を
 * 使用するようにしましょう。<b>socket_select</b> は
 * 0 を返す場合もあり、このような場合に ==
 * を用いて比較すると、エラーと判定されてしまいます。
 * <b>socket_select</b> の返す結果を知る
 * <code>
 * $e = NULL;
 * if (false === socket_select($r, $w, $e, 0)) {
 * echo "socket_select() は失敗しました。原因: " .
 * socket_strerror(socket_last_error()) . "\n";
 * }
 * </code>
 */
function socket_select(array &$read, array &$write, array &$except, int $tv_sec, int $tv_usec = 0): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ソケット（通信時の終端）を作成する
 * @link http://php.net/manual/ja/function.socket-create.php
 * @param int $domain <p>
 * パラメータ <i>domain</i> には、
 * ソケットが利用するプロトコルファミリーを指定します。
 * </p>
 * <table>
 * 指定可能なアドレス/プロトコルファミリーの一覧
 * <tr valign="top">
 * <td>ドメイン</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>AF_INET</b></td>
 * <td>
 * IPv4 インターネットプロトコル。
 * このプロトコルファミリーに属するプロトコルとしてよく知られているのは、
 * TCP や UDP です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>AF_INET6</b></td>
 * <td>
 * IPv6 インターネットプロトコル。TCP と UDP
 * が、このプロトコルファミリーで一般的なプロトコルです。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>AF_UNIX</b></td>
 * <td>
 * ローカルでのコミュニケーションに用いられるプロトコルファミリーです。
 * 高い効率と低いオーバーヘッドを誇るため、IPC (プロセス間通信)
 * でよく使われます。
 * </td>
 * </tr>
 * </table>
 * @param int $type <p>
 * <i>type</i> パラメータは、
 * ソケットが利用する通信方式を指定します。
 * </p>
 * <table>
 * 利用できるソケットのタイプ
 * <tr valign="top">
 * <td>タイプ</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>SOCK_STREAM</b></td>
 * <td>
 * このタイプでは、時系列的、高信頼性、全二重、接続型のバイトストリームが利用できます。
 * 帯域外のデータ転送メカニズムがサポートされている場合もあります。
 * TCP プロトコルは、このソケットタイプに基づきます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SOCK_DGRAM</b></td>
 * <td>
 * このタイプでは、データグラム(非接続型で、信頼性の高くない
 * 固定バイト長のメッセージ) がサポートされます。
 * UDP プロトコルは、このソケットタイプに基づきます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SOCK_SEQPACKET</b></td>
 * <td>
 * このタイプでは、時系列的な、信頼性のある、
 * 双方向の接続指向型の固定長データグラム転送が利用できます。
 * パケットを消費する側は、一つのパケット全部を一度の
 * read コールで読み込む必要があります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SOCK_RAW</b></td>
 * <td>
 * このタイプでは、素のネットワークプロトコルを操作できます。
 * この特殊なソケットを使って、どのタイプのプロトコルでもユーザーの手で構築することができます。
 * よくある使い方として、(ping のような) ICMP リクエストの作成があります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SOCK_RDM</b></td>
 * <td>
 * このタイプでは、信頼に足る、非時系列的なデータグラム転送が利用できます。
 * ほとんどのオペレーティングシステムでは実装されていないでしょう。
 * </td>
 * </tr>
 * </table>
 * @param int $protocol <p>
 * <i>protocol</i> は、ソケット上の通信で使われる
 * <i>domain</i> で指定されたファミリーに属するプロトコルを指定します。
 * 正しい値は、<b>getprotobyname</b>
 * を使うことで取得できます。利用したいプロトコルが、TCP または UDP
 * の場合は、定数 <b>SOL_TCP</b> と
 * <b>SOL_UDP</b> を指定することもできます。
 * </p>
 * <table>
 * 一般的なプロトコルの一覧
 * <tr valign="top">
 * <td>名称</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>icmp</td>
 * <td>
 * Internet Control Message Protocol は、主にゲートウェイやホストが、
 * データグラム通信におけるエラーを報告するのに使われます。
 * "ping" コマンド (最近のほとんどのオペーレーティングシステムに
 * 搭載されています) が ICMP アプリケーションの一例です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>udp</td>
 * <td>
 * User Datagram Protocol は、非接続指向の、信頼性の高くない、
 * 固定のレコード長を用いるプロトコルです。このような側面のおかげで、
 * UDP はプロトコルとして最小限のオーバーへッドしか要求しません。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>tcp</td>
 * <td>
 * Transmission Control Protocol は、信頼性の高い、接続指向かつ
 * ストリーム指向の全二重通信プロトコルです。TCP は、
 * すべてのパケットが、送信された順序で(時系列的に)受信されることを
 * 保証します。もし、何らかの理由でパケットが通信中に失われた場合、
 * TCP では、送信先から通知があるまで、パケットが再送信されるように
 * なっています。信頼性とパフォーマンス上の理由から、TCP の実装は、
 * 下層にあるデータグラム通信レイヤーのオクテット幅を
 * 適当な長さに決定します。このため、TCP アプリケーションは、
 * レコードの全部が一度に転送されない場合も考慮しなければなりません。
 * </td>
 * </tr>
 * </table>
 * @return resource <b>socket_create</b> は、
 * 成功時にソケットリソース、失敗時に <b>FALSE</b> を返します。
 * 実際のエラーコードは、<b>socket_last_error</b> を
 * コールすることにより取得できます。このエラーコードをさらに
 * <b>socket_strerror</b>に渡すことにより、
 * エラーの内容を文字列で取得することが可能です。
 */
function socket_create(int $domain, int $type, int $protocol) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 接続を受けつけるためにポートにソケットをオープンする
 * @link http://php.net/manual/ja/function.socket-create-listen.php
 * @param int $port <p>
 * すべてのインターフェイスで待ち受けるポート。
 * </p>
 * @param int $backlog [optional] <p>
 * <i>backlog</i> パラメータは、
 * 接続の順番待ちのキューをどれだけの長さまで保持するかを定義します。
 * <b>SOMAXCONN</b> を
 * <i>backlog</i> パラメータに渡します。詳細な情報は
 * <b>socket_listen</b> を参照ください。
 * </p>
 * @return resource <b>socket_create_listen</b> は、
 * 成功した場合に新規ソケットリソースを、エラー時に <b>FALSE</b> を返します。エラーコードは
 * <b>socket_last_error</b> で取得可能です。このコードを
 * <b>socket_strerror</b> に渡すと、エラーの詳細が文字列で取得可能です。
 */
function socket_create_listen(int $port, int $backlog = 128) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 区別できないソケットの組を作成し、配列に保存する
 * @link http://php.net/manual/ja/function.socket-create-pair.php
 * @param int $domain <p>
 * <i>domain</i> は、ソケットで使用するプロトコルの種類を指定します。
 * 完全な一覧は <b>socket_create</b> を参照ください。
 * </p>
 * @param int $type <p>
 * <i>type</i> では、ソケットが使用する通信の形式を選択します。
 * 完全な一覧は <b>socket_create</b> を参照ください。
 * </p>
 * @param int $protocol <p>
 * <i>protocol</i> は、指定した <i>domain</i>
 * の中の特定のプロトコルを指定します。これは、返されるソケットとの通信に使用されます。
 * 使用可能な値の名前は <b>getprotobyname</b>
 * で取得可能です。もし要求されるプロトコルが TCP あるいは UDP の場合、
 * 対応する定数 <b>SOL_TCP</b> および <b>SOL_UDP</b>
 * も使用可能です。
 * </p>
 * <p>
 * サポートするプロトコルの完全な一覧は <b>socket_create</b> を参照ください。
 * </p>
 * @param array $fd <p>
 * 2 つのソケットリソースが格納される配列への参照。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function socket_create_pair(int $domain, int $type, int $protocol, array &$fd): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ソケットへの接続を許可する
 * @link http://php.net/manual/ja/function.socket-accept.php
 * @param resource $socket <p>
 * <b>socket_create</b> で作成したソケットリソース。
 * </p>
 * @return resource 成功した場合に新規ソケットリソースを、エラー時に <b>FALSE</b> を返します。
 * 実際のエラーコードは、<b>socket_last_error</b> を
 * コールすることで取得可能です。このコードを
 * <b>socket_strerror</b> に渡すことで、
 * エラーの内容を文字列で取得することが可能です。
 */
function socket_accept($socket) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ソケットリソースを非ブロックモードに設定する
 * @link http://php.net/manual/ja/function.socket-set-nonblock.php
 * @param resource $socket <p>
 * <b>socket_create</b> あるいは <b>socket_accept</b>
 * で作成したソケットリソース。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function socket_set_nonblock($socket): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ソケットリソースをブロックモードに設定する
 * @link http://php.net/manual/ja/function.socket-set-block.php
 * @param resource $socket <p>
 * <b>socket_create</b> あるいは <b>socket_accept</b>
 * で作成したソケットリソース。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function socket_set_block($socket): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ソケット上で接続待ち(listen)する
 * @link http://php.net/manual/ja/function.socket-listen.php
 * @param resource $socket <p>
 * <b>socket_create</b> で作成したソケットリソース。
 * </p>
 * @param int $backlog [optional] <p>
 * 最大 <i>backlog</i> 個の接続を処理用の
 * キューで待ち受けることが可能です。もし待ちうけ用のキューが
 * いっぱいになった場合、クライアントでは ECONNREFUSED
 * の通知とともにエラーが発生します。あるいは、もし基盤となるプロトコルが
 * リクエストの再送をサポートしている場合、再試行が成功するまで
 * リクエストは無視されます。
 * </p>
 * <p>
 * <i>backlog</i> パラメータに指定できる値の最大値は
 * プラットフォームに大きく依存します。Linux では、最大値は
 * <b>SOMAXCONN</b> に切り詰められます。win32 では、
 * もし <b>SOMAXCONN</b> を渡した場合、backlog の
 * 最大値を適切な値に設定する責任はサービスの
 * 提供側が負います。
 * このプラットフォームでは、実際の backlog の値を見つける標準的な
 * 手段が提供されていません。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。 エラーコードは <b>socket_last_error</b>
 * で取得可能で、このコードを
 * <b>socket_strerror</b> に指定することにより
 * エラーの内容を文字列として取得可能です。
 */
function socket_listen($socket, int $backlog = 0): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ソケットリソースを閉じる
 * @link http://php.net/manual/ja/function.socket-close.php
 * @param resource $socket <p>
 * <b>socket_create</b> あるいは <b>socket_accept</b>
 * で作成したソケットリソース。
 * </p>
 * @return void 値を返しません。
 */
function socket_close($socket): void {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ソケットに書き込む
 * @link http://php.net/manual/ja/function.socket-write.php
 * @param resource $socket
 * @param string $buffer <p>
 * 書き込まれるバッファ。
 * </p>
 * @param int $length [optional] <p>
 * オプションのパラメータ <i>length</i> で、
 * ソケットに書き込むバイト数を指定することが可能です。
 * この値がバッファの長さより大きい場合、自動的にバッファのサイズに切り詰められます。
 * </p>
 * @return int ソケットへの書き込みに成功したデータのバイト数を返します。失敗した場合に <b>FALSE</b> を返します。
 * エラーコードは <b>socket_last_error</b>
 * を用いて取得することができ、この値を <b>socket_strerror</b>
 * に渡すことでエラー情報を文字列で取得可能です。
 * </p>
 * <p>
 * <b>socket_write</b> がゼロを返すことも十分ありえます。
 * これは、書き込むデータが存在しなかったことを意味します。
 * エラーをチェックするために <b>FALSE</b> かどうかを調べる際には、必ず
 * === 演算子を使用しましょう。
 */
function socket_write($socket, string $buffer, int $length = null): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ソケットから最大バイト長まで読みこむ
 * @link http://php.net/manual/ja/function.socket-read.php
 * @param resource $socket <p>
 * <b>socket_create</b> あるいは <b>socket_accept</b>
 * で作成したソケットリソース。
 * </p>
 * @param int $length <p>
 * 読み込まれる最大バイト長は、<i>length</i> パラメータで
 * 指定します。
 * 読み込みを終了するために
 * <b>&#92;r</b>、<b>&#92;n</b>、
 * <b>&#92;0</b> を使用することが可能です
 * (これは、以下に示す <i>type</i> に依存します)。
 * </p>
 * @param int $type [optional] <p>
 * オプションのパラメータ <i>type</i> は、名前のある定数です。
 * <b>PHP_BINARY_READ</b> (デフォルト) -
 * システムの recv() 関数を
 * 使用します。バイナリデータ読み込みに関して安全です。
 * @return string <b>socket_read</b> は、成功時に文字列としてデータを返し、
 * エラー時 (リモートホストが接続をクローズした場合を含みます)
 * に <b>FALSE</b> を返します。
 * エラーコードは <b>socket_last_error</b> で取得可能であり、
 * このコードは、エラー文字列を取得するために
 * <b>socket_strerror</b> に渡すことができます。
 * </p>
 * <p>
 * <b>socket_read</b> は、読み込むデータがもう存在しない
 * 場合に長さゼロの文字列("")を返します。
 */
function socket_read($socket, int $length, int $type = PHP_BINARY_READ): string {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 指定したソケットのローカル側に問い合わせ、その型に応じてホスト/ポート、あるいは Unix ファイルシステムのパスを返す
 * @link http://php.net/manual/ja/function.socket-getsockname.php
 * @param resource $socket <p>
 * <b>socket_create</b> あるいは <b>socket_accept</b>
 * で作成したソケットリソース。
 * </p>
 * @param string $addr <p>
 * 指定されたソケットの型が <b>AF_INET</b> あるいは
 * <b>AF_INET6</b> であった場合、<b>socket_getsockname</b>
 * はローカルの IP アドレス を適切な書式（例:
 * 127.0.0.1 あるいは fe80::1）に
 * したものを <i>address</i> パラメータに、そしてもし
 * オプションの <i>port</i> パラメータが指定されていれば
 * そこにポートを格納します。
 * </p>
 * <p>
 * 指定されたソケットの型が <b>AF_UNIX</b> であった場合、
 * <b>socket_getpeername</b> は Unix ファイルシステムのパス
 * （例: /var/run/daemon.sock）を
 * <i>address</i> パラメータに格納します。
 * </p>
 * @param int $port [optional] <p>
 * 指定した場合は、関連付けるポートを保持します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。 <b>socket_getsockname</b> は、
 * ソケットの型が <b>AF_INET</b>、
 * <b>AF_INET6</b> あるいは <b>AF_UNIX</b>
 * のいずれでもない場合にも <b>FALSE</b> を返します。この場合には、
 * 直近のソケットエラーコードは更新されません。
 */
function socket_getsockname($socket, string &$addr, int &$port = null): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 指定したソケットのリモート側に問い合わせ、その型に応じてホスト/ポート、あるいは Unix ファイルシステムのパスを返す
 * @link http://php.net/manual/ja/function.socket-getpeername.php
 * @param resource $socket <p>
 * <b>socket_create</b> あるいは <b>socket_accept</b>
 * で作成したソケットリソース。
 * </p>
 * @param string $address <p>
 * 指定されたソケットの型が <b>AF_INET</b> あるいは
 * <b>AF_INET6</b> であった場合、<b>socket_getpeername</b>
 * はピア（リモート）の IP アドレス を適切な書式（例:
 * 127.0.0.1 あるいは fe80::1）に
 * したものを <i>address</i> パラメータに、そしてもし
 * オプションの <i>port</i> パラメータが指定されていれば
 * そこにポートを格納します。
 * </p>
 * <p>
 * 指定されたソケットの型が <b>AF_UNIX</b> であった場合、
 * <b>socket_getpeername</b> は Unix ファイルシステムの
 * パス（例: /var/run/daemon.sock）を
 * <i>address</i> パラメータに格納します。
 * </p>
 * @param int $port [optional] <p>
 * 指定した場合は、
 * <i>address</i> に関連付けるポートを保持します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。 <b>socket_getpeername</b> は、
 * ソケットの型が <b>AF_INET</b>、
 * <b>AF_INET6</b> あるいは <b>AF_UNIX</b>
 * のいずれでもない場合にも <b>FALSE</b> を返します。この場合には、
 * 直近のソケットエラーコードは更新されません。
 */
function socket_getpeername($socket, string &$address, int &$port = null): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ソケット上の接続を初期化する
 * @link http://php.net/manual/ja/function.socket-connect.php
 * @param resource $socket
 * @param string $address <p>
 * パラメータ <i>address</i> には、
 * <i>socket</i> の種類が <b>AF_INET</b> の場合はドット区切り表記の
 * IPv4 アドレス (例: 127.0.0.1)、
 * IPv6 サポートが有効で <i>socket</i> の種類が
 * <b>AF_INET6</b> の場合は
 * IPv6 アドレス (例: ::1)、
 * <b>AF_UNIX</b> の場合は Unix ドメインソケットのパス名を指定します。
 * </p>
 * @param int $port [optional] <p>
 * パラメータ <i>port</i> は
 * <b>AF_INET</b> ソケット
 * あるいは <b>AF_INET6</b> に接続する場合にのみ必須となり、
 * 接続するリモートホストのポートを指定します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。 エラーコードは、
 * <b>socket_last_error</b> により取得できます。
 * このコードを <b>socket_strerror</b> に渡すことにより、
 * エラー内容を表すテキストを得ることができます。
 * </p>
 * <p>
 * ソケットが非ブロッキングモードの場合、この関数は
 * <b>FALSE</b> を返し、エラー
 * Operation now in progress を発生させます。
 */
function socket_connect($socket, string $address, int $port = 0): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ソケットエラーの内容を文字列として返す
 * @link http://php.net/manual/ja/function.socket-strerror.php
 * @param int $errno <p>
 * ソケットのエラー番号。たいていは
 * <b>socket_last_error</b> が返したものとなるでしょう。
 * </p>
 * @return string <i>errno</i> パラメータに対応するエラーメッセージを返します。
 */
function socket_strerror(int $errno): string {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ソケットに名前をバインドする
 * @link http://php.net/manual/ja/function.socket-bind.php
 * @param resource $socket <p>
 * <b>socket_create</b> で作成した有効なソケット記述子。
 * </p>
 * @param string $address <p>
 * ソケットの種類が <b>AF_INET</b> の場合、
 * <i>address</i> はドットで 4 つに区切られた表記
 * （例: 127.0.0.1）の IP アドレス。
 * </p>
 * <p>
 * ソケットの種類が <b>AF_UNIX</b> の場合、
 * <i>address</i> は Unix ドメインソケット
 * （例: /tmp/my.sock）。
 * </p>
 * @param int $port [optional] <p>
 * パラメータ <i>port</i> は
 * <b>AF_INET</b> ソケットにバインドする場合にのみ使用され、
 * 接続するリモートホストのポートを指定します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * エラーコードは <b>socket_last_error</b> により取得できます。
 * このコードを <b>socket_strerror</b> に渡すことにより、
 * エラー内容を表すテキストを得ることができます。
 */
function socket_bind($socket, string $address, int $port = 0): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 接続したソケットからデータを受信する
 * @link http://php.net/manual/ja/function.socket-recv.php
 * @param resource $socket <p>
 * <i>socket</i> は、事前に
 * socket_create() で作成したソケットリソースでなければなりません。
 * </p>
 * @param string $buf <p>
 * 受信したデータが、
 * <i>buf</i> で指定した変数に格納されます。
 * エラーが発生したり接続がリセットされたりデータが存在しなかったりした場合は、
 * <i>buf</i> には <b>NULL</b> が設定されます。
 * </p>
 * @param int $len <p>
 * 最大 <i>len</i> バイトまでをリモートホストから取得します。
 * </p>
 * @param int $flags <p>
 * <i>flags</i> の値は、次のフラグを論理 OR
 * (|) 演算子で組み合わせたものとなります。
 * </p>
 * <table>
 * <i>flags</i> のとりうる値
 * <tr valign="top">
 * <td>フラグ</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_OOB</b></td>
 * <td>
 * out-of-band を処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_PEEK</b></td>
 * <td>
 * 受信キューの先頭からデータを取得し、受信したデータをキューから削除しません。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_WAITALL</b></td>
 * <td>
 * 最低 <i>len</i> バイト受信するまでブロックします。
 * しかし、シグナルを受け取ったりリモートホストが接続を切断したりした場合は、
 * この関数が返すデータがそれより少なくなる可能性があります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_DONTWAIT</b></td>
 * <td>
 * このフラグを設定すると、正常にブロックされている状態でも関数が結果を返します。
 * </td>
 * </tr>
 * </table>
 * @return int <b>socket_recv</b> は、受信したバイト数を返します。
 * エラーが発生した場合は <b>FALSE</b> を返します。
 * 実際のエラーコードを取得するには
 * <b>socket_last_error</b> をコールします。
 * このエラーコードを <b>socket_strerror</b>
 * に渡すと、エラーに関する説明テキストを取得することができます。
 */
function socket_recv($socket, string &$buf, int $len, int $flags): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 接続したソケットにデータを送信する
 * @link http://php.net/manual/ja/function.socket-send.php
 * @param resource $socket <p>
 * <b>socket_create</b> あるいは <b>socket_accept</b>
 * が作成したソケットリソース。
 * </p>
 * @param string $buf <p>
 * リモートホストに送信するデータを含むバッファ。
 * </p>
 * @param int $len <p>
 * <i>buf</i> からリモートホストに送信するバイト数。
 * </p>
 * @param int $flags <p>
 * <i>flags</i> の値は、以下のフラグの任意の組み合わせを
 * 論理 OR 演算子 (|) で連結したものとなります。
 * <table>
 * <i>flags</i> がとりうる値
 * <tr valign="top">
 * <td><b>MSG_OOB</b></td>
 * <td>
 * OOB（out-of-band: 帯域外）データを送信します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_EOR</b></td>
 * <td>
 * レコードにマークをつけます。
 * レコードでデータがそろいます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_EOF</b></td>
 * <td>
 * ソケットの送信側を閉じ、そのことを知らせる通知を送信データの最後に付加します。
 * トランザクションでデータがそろいます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_DONTROUTE</b></td>
 * <td>
 * ルータを使用せず、直接つながっているインターフェイスのみを使用します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return int <b>socket_send</b> は、送信したバイト数あるいはエラー時に <b>FALSE</b> を返します。
 */
function socket_send($socket, string $buf, int $len, int $flags): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 接続しているかどうかによらず、ソケットからデータを受信する
 * @link http://php.net/manual/ja/function.socket-recvfrom.php
 * @param resource $socket <p>
 * <i>socket</i> には、
 * socket_create() で作成したソケットリソースを指定します。
 * </p>
 * @param string $buf <p>
 * 受信したデータが
 * <i>buf</i> に格納されます。
 * </p>
 * @param int $len <p>
 * 最大 <i>len</i> バイトまでのデータをリモートホストから取得します。
 * </p>
 * @param int $flags <p>
 * <i>flags</i> の値は、以下のフラグの任意の組み合わせを
 * 論理 OR 演算子 (|) で連結したものとなります。
 * </p>
 * <table>
 * <i>flags</i> に使用できる値
 * <tr valign="top">
 * <td>フラグ</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_OOB</b></td>
 * <td>
 * 帯域外 (out-of-band) のデータを処理する。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_PEEK</b></td>
 * <td>
 * 受信キューの先頭にあるデータを受信し、
 * そのデータをそのままキューに残しておく。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_WAITALL</b></td>
 * <td>
 * 少なくとも <i>len</i> バイト受信するまではブロックする。
 * しかし、もし何らかのシグナルを受信したりリモートホストとの接続が切断された場合は
 * これより少ないバイト数を返す可能性がある。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_DONTWAIT</b></td>
 * <td>
 * 通常はブロックする場面であってもそのまま return する。
 * </td>
 * </tr>
 * </table>
 * @param string $name <p>
 * <b>AF_UNIX</b> 型のソケットの場合は、
 * <i>name</i> はファイルへのパスとなります。
 * それ以外の場合は、未接続のソケットの場合には
 * <i>name</i> はリモートホストの IP アドレスとなります。
 * 接続済みソケットの場合は <b>NULL</b> となります。
 * </p>
 * @param int $port [optional] <p>
 * この引数は <b>AF_INET</b> 型あるいは
 * <b>AF_INET6</b> 型のソケットに対してのみ適用され、
 * データを受信するリモートホストのポートを指定します。
 * 接続済みソケットの場合は
 * <i>port</i> は <b>NULL</b> となります。
 * </p>
 * @return int <b>socket_recvfrom</b> は、受信したバイト数を返します。
 * あるいはエラー時には <b>FALSE</b> を返します。
 * エラーコードを取得するには <b>socket_last_error</b>
 * をコールします。取得したエラーコードを
 * <b>socket_strerror</b> に渡すと、
 * そのエラーについての説明を得ることができます。
 */
function socket_recvfrom($socket, string &$buf, int $len, int $flags, string &$name, int &$port = null): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 接続しているかどうかによらずソケットにメッセージを送信する
 * @link http://php.net/manual/ja/function.socket-sendto.php
 * @param resource $socket <p>
 * <b>socket_create</b> で作成したソケットリソース。
 * </p>
 * @param string $buf <p>
 * 送信するデータが、<i>buf</i> から取り出されます。
 * </p>
 * @param int $len <p>
 * <i>buf</i> から
 * <i>len</i> バイト分のデータが送信されます。
 * </p>
 * @param int $flags <p>
 * <i>flags</i> の値は、以下のフラグの任意の組み合わせを
 * 論理 OR 演算子 (|) で連結したものとなります。
 * <table>
 * <i>flags</i> がとりうる値
 * <tr valign="top">
 * <td><b>MSG_OOB</b></td>
 * <td>
 * OOB（out-of-band: 帯域外）データを送信します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_EOR</b></td>
 * <td>
 * レコードにマークをつけます。
 * レコードでデータがそろいます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_EOF</b></td>
 * <td>
 * ソケットの送信側を閉じ、そのことを知らせる通知を送信データの最後に付加します。
 * トランザクションでデータがそろいます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_DONTROUTE</b></td>
 * <td>
 * ルータを使用せず、直接つながっているインターフェイスのみを使用します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $addr <p>
 * リモートホストの IP アドレス。
 * </p>
 * @param int $port [optional] <p>
 * <i>port</i> は、
 * データの送信先となるリモートホストのポート番号です。
 * </p>
 * @return int <b>socket_sendto</b> は、リモートホストに送信したバイト数を返します。
 * エラーが発生した場合は <b>FALSE</b> を返します。
 */
function socket_sendto($socket, string $buf, int $len, int $flags, string $addr, int $port = 0): int {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ソケットのオプションを取得する
 * @link http://php.net/manual/ja/function.socket-get-option.php
 * @param resource $socket <p>
 * <b>socket_create</b> あるいは <b>socket_accept</b>
 * で作成したソケットリソース。
 * </p>
 * @param int $level <p>
 * <i>level</i> パラメータは、オプションのプロトコルレベルを指定します。
 * 例えば、オプションをソケットレベルで取得するには
 * <i>level</i> パラメータに <b>SOL_SOCKET</b> を指定します。
 * <b>TCP</b> のようなそれ以外のレベルの場合、そのレベルのプロトコル番号を指定します。
 * プロトコル番号は <b>getprotobyname</b>
 * 関数を使用して取得可能です。
 * </p>
 * @param int $optname <table>
 * 使用可能なソケットオプション
 * <tr valign="top">
 * <td>オプション</td>
 * <td>説明</td>
 * <td>型</td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_DEBUG</b></td>
 * <td>
 * デバッグ情報を記録するかどうかを報告します。
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_BROADCAST</b></td>
 * <td>
 * ブロードキャストメッセージの送信がサポートされているかどうかを報告します。
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_REUSEADDR</b></td>
 * <td>
 * ローカルアドレスが再使用可能するかどうかを報告します。
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_KEEPALIVE</b></td>
 * <td>
 * 定期的なメッセージの送信によって接続がアクティブになっているかどうかを報告します。
 * もしソケットがこれらのメッセージに応答できなかった場合、
 * 接続は崩壊し、ソケットへの書き込みを行うと SIGPIPE シグナルを受け取ります。
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_LINGER</b></td>
 * <td>
 * <p>
 * データがまだ残っているうちに <b>socket_close</b>
 * をコールした場合に、<i>socket</i> を残存させるかどうかを報告します。
 * デフォルトでは、ソケットが閉じられる際には未送信のデータをすべて送信しようとします。
 * 接続ベースのソケットでは、
 * <b>socket_close</b> は接続先がデータを認識するまで閉じるのを待ちます。
 * </p>
 * <p>
 * l_onoff が非ゼロで
 * l_linger がゼロの場合は、
 * その時点で未送信のデータはすべて破棄されます。
 * 接続ベースのソケットの場合、接続先には RST (リセット)
 * を送信します。
 * </p>
 * <p>
 * 一方 l_onoff が非ゼロで
 * l_linger も非ゼロの場合は、
 * <b>socket_close</b> は
 * 全データを送信し終えるか l_linger
 * で指定した時間が経過するまで処理をブロックします。
 * ソケットが非ブロックモードの場合は、
 * <b>socket_close</b> は失敗してエラーを返します。
 * </p>
 * </td>
 * <td>
 * array。配列に含まれるキーは
 * l_onoff および
 * l_linger のふたつ。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_OOBINLINE</b></td>
 * <td>
 * <i>socket</i>
 * が帯域外のデータをインラインに残し続けるかを報告します。
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_SNDBUF</b></td>
 * <td>
 * 送信バッファのサイズを報告します。
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_RCVBUF</b></td>
 * <td>
 * 受信バッファのサイズを報告します。
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_ERROR</b></td>
 * <td>
 * エラーステータスに関する情報を報告し、それをクリアします。
 * </td>
 * <td>
 * int (<b>socket_set_option</b> で設定することはできません)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_TYPE</b></td>
 * <td>
 * <i>socket</i> の型 (たとえば <b>SOCK_STREAM</b>) を報告します。
 * </td>
 * <td>
 * int (<b>socket_set_option</b> で設定することはできません)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_DONTROUTE</b></td>
 * <td>
 * 送信メッセージがルータを越えるかどうかを報告します。
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_RCVLOWAT</b></td>
 * <td>
 * <i>socket</i> の入力操作を行う際の最小バイト数を報告します。
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_RCVTIMEO</b></td>
 * <td>
 * 入力操作のタイムアウト値を報告します。
 * </td>
 * <td>
 * array。配列に含まれるキーはふたつ。
 * sec はタイムアウトの秒単位の部分で、
 * usec はタイムアウトのマイクロ秒位の部分。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_SNDTIMEO</b></td>
 * <td>
 * 出力関数がフロー制御のためにブロックするタイムアウト値を報告します。
 * </td>
 * <td>
 * array。配列に含まれるキーはふたつ。
 * sec はタイムアウトの秒単位の部分で、
 * usec はタイムアウトのマイクロ秒位の部分。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_SNDLOWAT</b></td>
 * <td>
 * <i>socket</i>
 * の出力操作を行う際の最小バイト数を報告します。
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>TCP_NODELAY</b></td>
 * <td>
 * Nagle TCP アルゴリズムが無効になっているかどうかを報告します。
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_JOIN_GROUP</b></td>
 * <td>
 * マルチキャストグループに参加します (PHP 5.4 で追加)。
 * </td>
 * <td>
 * 二つのキー "group" と "interface"
 * を含む配列。"group" には IPv4 あるいは IPv6
 * のマルチキャストアドレスを文字列で指定します。
 * "interface" には、インターフェイス番号 (整数値)
 * あるいは "eth0" などのインターフェイス名 (文字列) を指定します。
 * 0 を指定すると、ルーティングテーブルを使ってインターフェイスを選択します
 * (<b>socket_set_option</b> でのみ利用可能)。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_LEAVE_GROUP</b></td>
 * <td>
 * マルチキャストグループから離れます (PHP 5.4 で追加)。
 * </td>
 * <td>
 * 配列。詳細は <b>MCAST_JOIN_GROUP</b> を参照ください
 * (<b>socket_set_option</b> でのみ利用可能)。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_BLOCK_SOURCE</b></td>
 * <td>
 * 特定のソースから、そのマルチキャストグループにやってくるパケットをブロックします。
 * そのマルチキャストグループに事前に参加しておく必要があります
 * (PHP 5.4 で追加)。
 * </td>
 * <td>
 * <b>MCAST_JOIN_GROUP</b> と同じキーを含み、さらに追加でもうひとつのキーを含む配列。
 * 追加のキーは source で、
 * ブロック対象となるソースの IPv4 アドレスあるいは IPv6 アドレスを文字列で指定します
 * (<b>socket_set_option</b> でのみ利用可能)。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_UNBLOCK_SOURCE</b></td>
 * <td>
 * 特定のソースから、そのマルチキャストグループにやってくるパケットのブロックを解除 (そして、受信を再開) します。
 * そのマルチキャストグループに事前に参加しておく必要があります
 * (PHP 5.4 で追加)。
 * </td>
 * <td>
 * <b>MCAST_BLOCK_SOURCE</b> と同じ形式の配列
 * (<b>socket_set_option</b> でのみ利用可能)。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_JOIN_SOURCE_GROUP</b></td>
 * <td>
 * 特定の値にマッチするソースアドレスからそのマルチキャストグループにやってきたパケットを受信します
 * (PHP 5.4 で追加)。
 * </td>
 * <td>
 * <b>MCAST_BLOCK_SOURCE</b> と同じ形式の配列
 * (<b>socket_set_option</b> でのみ利用可能)。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_LEAVE_SOURCE_GROUP</b></td>
 * <td>
 * 特定の値にマッチするソースアドレスからそのマルチキャストグループにやってきたパケットの受信を停止します
 * (PHP 5.4 で追加)。
 * </td>
 * <td>
 * <b>MCAST_BLOCK_SOURCE</b> と同じ形式の配列
 * (<b>socket_set_option</b> でのみ利用可能)。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IP_MULTICAST_IF</b></td>
 * <td>
 * IPv4 マルチキャストパケットの送信インターフェイス
 * (PHP 5.4 で追加)。
 * </td>
 * <td>
 * インターフェイス番号を表す整数値か、インターフェイス名を表す
 * eth0 のような文字列。
 * 0 を指定すると、ルーティングテーブルを使ってインターフェイスを選択します。
 * <b>socket_get_option</b> 関数の返り値は、インターフェイスのインデックスとなります。
 * 注意すべき点は、C の API とは違ってこのオプションには IP アドレスを渡せないということです。
 * そのため、
 * <b>IP_MULTICAST_IF</b> と
 * <b>IPV6_MULTICAST_IF</b> のインターフェイスの相違はなくなります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IPV6_MULTICAST_IF</b></td>
 * <td>
 * IPv6 マルチキャストパケットの送信インターフェイス
 * (PHP 5.4 で追加)。
 * </td>
 * <td>
 * <b>IP_MULTICAST_IF</b> と同じ。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IP_MULTICAST_LOOP</b></td>
 * <td>
 * IPv4 パケットのマルチキャストループバックポリシー。
 * このソケットが送信したマルチキャストパケットが、
 * このソケットが使う送信インターフェイス上の同一マルチキャストグループに属する
 * 同一ホスト上の受信者にも届くかどうかを示します。
 * これはデフォルトの動作です
 * (PHP 5.4 で追加)。
 * </td>
 * <td>
 * 整数値 (0 あるいは
 * 1)。<b>socket_set_option</b>
 * では任意の値を受け付けますが、通常の PHP のルールに従ってそれを
 * boolean 値に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IPV6_MULTICAST_LOOP</b></td>
 * <td>
 * <b>IP_MULTICAST_LOOP</b> の IPv6 版
 * (PHP 5.4 で追加)。
 * </td>
 * <td>
 * 整数値。<b>IP_MULTICAST_LOOP</b> を参照ください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IP_MULTICAST_TTL</b></td>
 * <td>
 * IPv4 送信パケットの有効期間。0 (このインターフェイスから離れない)
 * から 255 までの値を指定しなければなりません。デフォルトは
 * 1 (ローカルネットワークにだけ到達する) です
 * (PHP 5.4 で追加)。
 * </td>
 * <td>
 * 0 から 255 までの整数値。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IPV6_MULTICAST_HOPS</b></td>
 * <td>
 * <b>IP_MULTICAST_TTL</b> の IPv6 版。
 * 値として -1 を指定することもでき、これはデフォルトのルートを使うことを意味します
 * (PHP 5.4 で追加)。
 * </td>
 * <td>
 * -1 から 255 までの整数値。
 * </td>
 * </tr>
 * </table>
 * @return mixed 指定したオプションの値、あるいはエラー時に <b>FALSE</b> を返します。
 */
function socket_get_option($socket, int $level, int $optname) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ソケットのオプションを設定する
 * @link http://php.net/manual/ja/function.socket-set-option.php
 * @param resource $socket <p>
 * <b>socket_create</b> あるいは <b>socket_accept</b>
 * で作成したソケットリソース。
 * </p>
 * @param int $level <p>
 * <i>level</i> パラメータは、オプションのプロトコルレベルを指定します。
 * 例えば、オプションをソケットレベルで取得するには
 * <i>level</i> パラメータに SOL_SOCKET を指定します。
 * TCP のようなそれ以外のレベルの場合、そのレベルのプロトコル番号を指定します。
 * プロトコル番号は <b>getprotobyname</b>
 * 関数を使用して取得可能です。
 * </p>
 * @param int $optname <p>
 * 使用可能なソケットオプションは <b>socket_get_option</b>
 * 関数と同じです。
 * </p>
 * @param mixed $optval <p>
 * オプションの値。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function socket_set_option($socket, int $level, int $optname, $optval): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 受信、送信、または送受信用のソケットをシャットダウンする
 * @link http://php.net/manual/ja/function.socket-shutdown.php
 * @param resource $socket <p>
 * <b>socket_create</b> で作成したソケットリソース。
 * </p>
 * @param int $how [optional] <p>
 * <i>how</i> の値は以下のうちのひとつです。
 * <table>
 * <i>how</i> のとりうる値
 * <tr valign="top">
 * <td>0</td>
 * <td>
 * ソケットの読み込みを停止します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>
 * ソケットの書き込みを停止します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>
 * ソケットの読み込み・書き込みを停止します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function socket_shutdown($socket, int $how = 2): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ソケットの直近のエラーを返す
 * @link http://php.net/manual/ja/function.socket-last-error.php
 * @param resource $socket [optional] <p>
 * <b>socket_create</b> で作成したソケットリソース。
 * </p>
 * @return int この関数は、ソケットのエラーコードを返します。
 */
function socket_last_error($socket = null): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * ソケットのエラーまたは直近のエラーコードをクリアする
 * @link http://php.net/manual/ja/function.socket-clear-error.php
 * @param resource $socket [optional] <p>
 * <b>socket_create</b> で作成したソケットリソース。
 * </p>
 * @return void 値を返しません。
 */
function socket_clear_error($socket = null): void {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * ストリームをインポートする
 * @link http://php.net/manual/ja/function.socket-import-stream.php
 * @param resource $stream <p>
 * インポートするストリームリソース。
 * </p>
 * @return resource <b>FALSE</b> を返します。失敗した場合は <b>NULL</b> を返します。
 */
function socket_import_stream($stream) {}

/**
 * @param $socket
 */
function socket_export_stream($socket) {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * メッセージを送信する
 * @link http://php.net/manual/ja/function.socket-sendmsg.php
 * @param resource $socket
 * @param array $message
 * @param int $flags
 * @return int 送信したバイト数を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function socket_sendmsg($socket, array $message, int $flags): int {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * メッセージを読む
 * @link http://php.net/manual/ja/function.socket-recvmsg.php
 * @param resource $socket
 * @param string $message
 * @param int $flags [optional]
 * @return int
 */
function socket_recvmsg($socket, string $message, int $flags = null): int {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * メッセージバッファサイズを計算する
 * @link http://php.net/manual/ja/function.socket-cmsg-space.php
 * @param int $level
 * @param int $type
 * @return int
 */
function socket_cmsg_space(int $level, int $type): int {}

/**
 * @param $socket
 * @param $level
 * @param $optname
 */
function socket_getopt($socket, $level, $optname) {}

/**
 * @param $socket
 * @param $level
 * @param $optname
 * @param $optval
 */
function socket_setopt($socket, $level, $optname, $optval) {}

define ('AF_UNIX', 1);
define ('AF_INET', 2);

/**
 * IPv6 サポートつきでコンパイルした場合にのみ使用可能です。
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('AF_INET6', 10);
define ('SOCK_STREAM', 1);
define ('SOCK_DGRAM', 2);
define ('SOCK_RAW', 3);
define ('SOCK_SEQPACKET', 5);
define ('SOCK_RDM', 4);
define ('MSG_OOB', 1);
define ('MSG_WAITALL', 256);
define ('MSG_CTRUNC', 8);
define ('MSG_TRUNC', 32);
define ('MSG_PEEK', 2);
define ('MSG_DONTROUTE', 4);

/**
 * Windows プラットフォームでは使用できません。
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('MSG_EOR', 128);

/**
 * Windows プラットフォームでは使用できません。
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('MSG_EOF', 512);
define ('MSG_CONFIRM', 2048);
define ('MSG_ERRQUEUE', 8192);
define ('MSG_NOSIGNAL', 16384);
define ('MSG_DONTWAIT', 64);
define ('MSG_MORE', 32768);
define ('MSG_WAITFORONE', 65536);
define ('MSG_CMSG_CLOEXEC', 1073741824);
define ('SO_DEBUG', 1);
define ('SO_REUSEADDR', 2);

/**
 * この定数は、PHP 5.4.10 以降でかつソケットオプション
 * <b>SO_REUSEPORT</b> に対応したプラットフォーム上でだけ使えます。
 * Mac OS X や FreeBSD などはこのソケットオプションに対応していますが、
 * Linux や Windows は対応していません。
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SO_REUSEPORT', 15);
define ('SO_KEEPALIVE', 9);
define ('SO_DONTROUTE', 5);
define ('SO_LINGER', 13);
define ('SO_BROADCAST', 6);
define ('SO_OOBINLINE', 10);
define ('SO_SNDBUF', 7);
define ('SO_RCVBUF', 8);
define ('SO_SNDLOWAT', 19);
define ('SO_RCVLOWAT', 18);
define ('SO_SNDTIMEO', 21);
define ('SO_RCVTIMEO', 20);
define ('SO_TYPE', 3);
define ('SO_ERROR', 4);
define ('SO_BINDTODEVICE', 25);
define ('SOL_SOCKET', 1);
define ('SOMAXCONN', 128);

/**
 * Nagle TCP アルゴリズムを無効にするために使用します。
 * PHP 5.2.7 で追加されました。
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('TCP_NODELAY', 1);
define ('PHP_NORMAL_READ', 1);
define ('PHP_BINARY_READ', 2);
define ('MCAST_JOIN_GROUP', 42);
define ('MCAST_LEAVE_GROUP', 45);
define ('MCAST_BLOCK_SOURCE', 43);
define ('MCAST_UNBLOCK_SOURCE', 44);
define ('MCAST_JOIN_SOURCE_GROUP', 46);
define ('MCAST_LEAVE_SOURCE_GROUP', 47);
define ('IP_MULTICAST_IF', 32);
define ('IP_MULTICAST_TTL', 33);
define ('IP_MULTICAST_LOOP', 34);
define ('IPV6_MULTICAST_IF', 17);
define ('IPV6_MULTICAST_HOPS', 18);
define ('IPV6_MULTICAST_LOOP', 19);
define ('IPV6_V6ONLY', 26);

/**
 * Operation not permitted.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EPERM', 1);

/**
 * No such file or directory.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOENT', 2);

/**
 * Interrupted system call.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EINTR', 4);

/**
 * I/O error.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EIO', 5);

/**
 * No such device or address.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENXIO', 6);

/**
 * Arg list too long.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_E2BIG', 7);

/**
 * Bad file number.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EBADF', 9);

/**
 * Try again.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EAGAIN', 11);

/**
 * Out of memory.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOMEM', 12);

/**
 * Permission denied.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EACCES', 13);

/**
 * Bad address.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EFAULT', 14);

/**
 * Block device required.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOTBLK', 15);

/**
 * Device or resource busy.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EBUSY', 16);

/**
 * File exists.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EEXIST', 17);

/**
 * Cross-device link.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EXDEV', 18);

/**
 * No such device.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENODEV', 19);

/**
 * Not a directory.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOTDIR', 20);

/**
 * Is a directory.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EISDIR', 21);

/**
 * Invalid argument.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EINVAL', 22);

/**
 * File table overflow.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENFILE', 23);

/**
 * Too many open files.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EMFILE', 24);

/**
 * Not a typewriter.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOTTY', 25);

/**
 * No space left on device.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOSPC', 28);

/**
 * Illegal seek.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ESPIPE', 29);

/**
 * Read-only file system.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EROFS', 30);

/**
 * Too many links.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EMLINK', 31);

/**
 * Broken pipe.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EPIPE', 32);

/**
 * File name too long.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENAMETOOLONG', 36);

/**
 * No record locks available.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOLCK', 37);

/**
 * Function not implemented.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOSYS', 38);

/**
 * Directory not empty.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOTEMPTY', 39);

/**
 * Too many symbolic links encountered.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ELOOP', 40);

/**
 * Operation would block.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EWOULDBLOCK', 11);

/**
 * No message of desired type.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOMSG', 42);

/**
 * Identifier removed.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EIDRM', 43);

/**
 * Channel number out of range.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ECHRNG', 44);

/**
 * Level 2 not synchronized.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EL2NSYNC', 45);

/**
 * Level 3 halted.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EL3HLT', 46);

/**
 * Level 3 reset.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EL3RST', 47);

/**
 * Link number out of range.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ELNRNG', 48);

/**
 * Protocol driver not attached.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EUNATCH', 49);

/**
 * No CSI structure available.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOCSI', 50);

/**
 * Level 2 halted.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EL2HLT', 51);

/**
 * Invalid exchange.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EBADE', 52);

/**
 * Invalid request descriptor.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EBADR', 53);

/**
 * Exchange full.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EXFULL', 54);

/**
 * No anode.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOANO', 55);

/**
 * Invalid request code.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EBADRQC', 56);

/**
 * Invalid slot.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EBADSLT', 57);

/**
 * Device not a stream.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOSTR', 60);

/**
 * No data available.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENODATA', 61);

/**
 * Timer expired.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ETIME', 62);

/**
 * Out of streams resources.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOSR', 63);

/**
 * Machine is not on the network.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENONET', 64);

/**
 * Object is remote.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EREMOTE', 66);

/**
 * Link has been severed.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOLINK', 67);

/**
 * Advertise error.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EADV', 68);

/**
 * Srmount error.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ESRMNT', 69);

/**
 * Communication error on send.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ECOMM', 70);

/**
 * Protocol error.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EPROTO', 71);

/**
 * Multihop attempted.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EMULTIHOP', 72);

/**
 * Not a data message.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EBADMSG', 74);

/**
 * Name not unique on network.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOTUNIQ', 76);

/**
 * File descriptor in bad state.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EBADFD', 77);

/**
 * Remote address changed.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EREMCHG', 78);

/**
 * Interrupted system call should be restarted.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ERESTART', 85);

/**
 * Streams pipe error.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ESTRPIPE', 86);

/**
 * Too many users.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EUSERS', 87);

/**
 * Socket operation on non-socket.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOTSOCK', 88);

/**
 * Destination address required.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EDESTADDRREQ', 89);

/**
 * Message too long.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EMSGSIZE', 90);

/**
 * Protocol wrong type for socket.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EPROTOTYPE', 91);
define ('SOCKET_ENOPROTOOPT', 92);

/**
 * Protocol not supported.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EPROTONOSUPPORT', 93);

/**
 * Socket type not supported.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ESOCKTNOSUPPORT', 94);

/**
 * Operation not supported on transport endpoint.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EOPNOTSUPP', 95);

/**
 * Protocol family not supported.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EPFNOSUPPORT', 96);

/**
 * Address family not supported by protocol.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EAFNOSUPPORT', 97);
define ('SOCKET_EADDRINUSE', 98);

/**
 * Cannot assign requested address.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EADDRNOTAVAIL', 99);

/**
 * Network is down.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENETDOWN', 100);

/**
 * Network is unreachable.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENETUNREACH', 101);

/**
 * Network dropped connection because of reset.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENETRESET', 102);

/**
 * Software caused connection abort.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ECONNABORTED', 103);

/**
 * Connection reset by peer.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ECONNRESET', 104);

/**
 * No buffer space available.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOBUFS', 105);

/**
 * Transport endpoint is already connected.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EISCONN', 106);

/**
 * Transport endpoint is not connected.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOTCONN', 107);

/**
 * Cannot send after transport endpoint shutdown.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ESHUTDOWN', 108);

/**
 * Too many references: cannot splice.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ETOOMANYREFS', 109);

/**
 * Connection timed out.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ETIMEDOUT', 110);

/**
 * Connection refused.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ECONNREFUSED', 111);

/**
 * Host is down.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EHOSTDOWN', 112);

/**
 * No route to host.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EHOSTUNREACH', 113);

/**
 * Operation already in progress.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EALREADY', 114);

/**
 * Operation now in progress.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EINPROGRESS', 115);

/**
 * Is a named type file.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EISNAM', 120);

/**
 * Remote I/O error.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EREMOTEIO', 121);

/**
 * Quota exceeded.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EDQUOT', 122);

/**
 * No medium found.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_ENOMEDIUM', 123);

/**
 * Wrong medium type.
 * @link http://php.net/manual/ja/sockets.constants.php
 */
define ('SOCKET_EMEDIUMTYPE', 124);
define ('IPPROTO_IP', 0);
define ('IPPROTO_IPV6', 41);
define ('SOL_TCP', 6);
define ('SOL_UDP', 17);
define ('IPV6_UNICAST_HOPS', 16);
define ('IPV6_RECVPKTINFO', 49);
define ('IPV6_PKTINFO', 50);
define ('IPV6_RECVHOPLIMIT', 51);
define ('IPV6_HOPLIMIT', 52);
define ('IPV6_RECVTCLASS', 66);
define ('IPV6_TCLASS', 67);
define ('SCM_RIGHTS', 1);
define ('SCM_CREDENTIALS', 2);
define ('SO_PASSCRED', 16);

// End of sockets v.7.1.5
?>
