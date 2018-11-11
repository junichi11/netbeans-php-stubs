<?php



/**
 * 指定したインターネットホスト名もしくは IP アドレスに対応する DNS レコードを検索する
 * <p><code>host</code> に対応する <code>type</code> 型のレコードを DNS から探します。</p>
 * @param string $host <p><code>host</code>は、ドットで 4 つに分けられた形式の IP アドレスか、あるいはホスト名です。</p>
 * @param string $type <p><code>type</code>は、A, MX, NS, SOA, PTR, CNAME, AAAA, A6, SRV, NAPTR, ANY のどれか一つです。</p>
 * @return bool <p>レコードが見つかった場合に <b><code>TRUE</code></b>、 何も見つからないかエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.checkdnsrr.php
 * @see dns_get_record(), getmxrr(), gethostbyaddr(), gethostbyname(), gethostbynamel()
 * @since PHP 4, PHP 5, PHP 7
 */
function checkdnsrr(string $host, string $type = "MX"): bool {}

/**
 * システムログへの接続を閉じる
 * <p><b>closelog()</b> はシステムログへの書きこみに使用されているデスクプリタを閉じます。 <b>closelog()</b> の使用はオプションです。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.closelog.php
 * @see syslog(), openlog()
 * @since PHP 4, PHP 5, PHP 7
 */
function closelog(): bool {}

/**
 * syslog に関係する全ての定数を初期化する
 * <p>syslog 関数で使用される全ての定数を初期化します。</p>
 * @return void <p>値を返しません。</p> <b>Syslog 変数</b>   変数 同等な定数 意味 注意     $LOG_EMERG <b><code>LOG_EMERG</code></b> システムが使用不能     $LOG_ALERT <b><code>LOG_ALERT</code></b> 即時の対応が必要     $LOG_CRIT <b><code>LOG_CRIT</code></b> 致命的な状態     $LOG_ERR <b><code>LOG_ERR</code></b>       $LOG_WARNING <b><code>LOG_WARNING</code></b>       $LOG_NOTICE <b><code>LOG_NOTICE</code></b>       $LOG_INFO <b><code>LOG_INFO</code></b>       $LOG_DEBUG <b><code>LOG_DEBUG</code></b>       $LOG_KERN <b><code>LOG_KERN</code></b>       $LOG_USER <b><code>LOG_USER</code></b> 一般的なユーザーレベル     $LOG_MAIL <b><code>LOG_MAIL</code></b> ログをメールで送信     $LOG_DAEMON <b><code>LOG_DAEMON</code></b> 他のシステムデーモン     $LOG_AUTH <b><code>LOG_AUTH</code></b>       $LOG_SYSLOG <b><code>LOG_SYSLOG</code></b>   Netware では使用不能   $LOG_LPR <b><code>LOG_LPR</code></b>       $LOG_NEWS <b><code>LOG_NEWS</code></b> Usenet ニュース HP-UX では利用できません   $LOG_CRON <b><code>LOG_CRON</code></b>   すべてのプラットフォームで利用できません   $LOG_AUTHPRIV <b><code>LOG_AUTHPRIV</code></b>   AIX では利用できません   $LOG_LOCAL0 <b><code>LOG_LOCAL0</code></b>   Windows および Netware では利用できません   $LOG_LOCAL1 <b><code>LOG_LOCAL1</code></b>   Windows および Netware では利用できません   $LOG_LOCAL2 <b><code>LOG_LOCAL2</code></b>   Windows および Netware では利用できません   $LOG_LOCAL3 <b><code>LOG_LOCAL3</code></b>   Windows および Netware では利用できません   $LOG_LOCAL4 <b><code>LOG_LOCAL4</code></b>   Windows および Netware では利用できません   $LOG_LOCAL5 <b><code>LOG_LOCAL5</code></b>   Windows および Netware では利用できません   $LOG_LOCAL6 <b><code>LOG_LOCAL6</code></b>   Windows および Netware では利用できません   $LOG_LOCAL7 <b><code>LOG_LOCAL7</code></b>   Windows および Netware では利用できません   $LOG_PID <b><code>LOG_PID</code></b>       $LOG_CONS <b><code>LOG_CONS</code></b>       $LOG_ODELAY <b><code>LOG_ODELAY</code></b>       $LOG_NDELAY <b><code>LOG_NDELAY</code></b>       $LOG_NOWAIT <b><code>LOG_NOWAIT</code></b>   BeOS では利用できません   $LOG_PERROR <b><code>LOG_PERROR</code></b>   AIX では利用できません    <b>警告</b><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
 * @link http://php.net/manual/ja/function.define-syslog-variables.php
 * @see openlog(), syslog(), closelog()
 * @since PHP 4, PHP 5 < 5.4.0
 */
function define_syslog_variables(): void {}

/**
 * checkdnsrr() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>checkdnsrr()</code>.</p>
 * @param string $host <p><code>host</code>は、ドットで 4 つに分けられた形式の IP アドレスか、あるいはホスト名です。</p>
 * @param string $type <p><code>type</code>は、A, MX, NS, SOA, PTR, CNAME, AAAA, A6, SRV, NAPTR, ANY のどれか一つです。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.dns-check-record.php
 * @since PHP 5, PHP 7
 */
function dns_check_record(string $host, string $type = "MX"): bool {}

/**
 * getmxrr() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>getmxrr()</code>.</p>
 * @param string $hostname <p>インターネットホスト名。</p>
 * @param array $mxhosts <p>見つかった MX レコードのリストが、配列 <code>mxhosts</code> に格納されます。</p>
 * @param array $weight <p>配列 <code>weight</code> を指定すると、 そこに重み情報が格納されます。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.dns-get-mx.php
 * @since PHP 5, PHP 7
 */
function dns_get_mx(string $hostname, array &$mxhosts, array &$weight = NULL): bool {}

/**
 * ホスト名に関連する DNS リソースレコードを取得する
 * <p>指定した <code>hostname</code> に関連づけられた DNS リソースレコードを取得します。</p>
 * @param string $hostname <p><code>hostname</code> は、正しい DNS ホスト名、すなわち "<i>www.example.com</i>" のようなものでなければなりません。 <i>in-addr.arpa</i> 形式の表記を用いた逆引き検索は可能ですが、 たいていは <code>gethostbyaddr()</code> を用いるほうが適当です。</p>  <p><b>注意</b>:</p> <p>DNS の標準規格により、メールアドレスは <i>user.host</i> 形式で渡されます （たとえば、<i>hostmaster.example.com</i> が <i>hostmaster@example.com</i> の代わりとなります）。 この値をしっかり確認し、<code>mail()</code> のような関数で 利用する前には必要なら変更を加えることを忘れないようにしてください。</p>
 * @param int $type <p>デフォルトでは、<b>dns_get_record()</b> は <code>hostname</code> に関連するすべてのリソースレコードを検索します。 これを制限するには、オプションの <code>type</code> パラメータを指定してください。 <code>type</code> は以下のうちのいずれかです。 <b><code>DNS_A</code></b>, <b><code>DNS_CNAME</code></b>, <b><code>DNS_HINFO</code></b>, <b><code>DNS_CAA</code></b>, <b><code>DNS_MX</code></b>, <b><code>DNS_NS</code></b>, <b><code>DNS_PTR</code></b>, <b><code>DNS_SOA</code></b>, <b><code>DNS_TXT</code></b>, <b><code>DNS_AAAA</code></b>, <b><code>DNS_SRV</code></b>, <b><code>DNS_NAPTR</code></b>, <b><code>DNS_A6</code></b>, <b><code>DNS_ALL</code></b> または <b><code>DNS_ANY</code></b>。</p>  <p><b>注意</b>:</p> <p>プラットフォーム依存の libresolv のおかしな挙動のせいで、 <b><code>DNS_ANY</code></b> が常にすべてのレコードを返すとは 限りません。速度は遅くなりますが、<b><code>DNS_ALL</code></b> のほうがより確実にすべてのレコードを取得できます。</p>
 * @param array $authns <p>参照で渡し、 <i>Authoritative Name Servers</i> のリソースレコードが格納されます。</p>
 * @param array $addtl <p>参照で渡し、 <i>Additional Records</i> が格納されます。</p>
 * @param bool $raw <p>raw モードでは、各タイプをループするのではなく、 リクエストしたタイプだけを問い合わせて追加情報に移ります。</p>
 * @return array <p>この関数は、連想配列を要素にもつ配列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。 それぞれの連想配列には <i>少なくとも</i> 以下のキーが含まれています:</p> <b>基本 DNS 属性</b>   属性 意味     host  これ以降の関連するデータが参照する DNS 名。    class  <b>dns_get_record()</b> は Internet クラスのレコードのみを返すので、このパラメータは常に <i>IN</i> を返します。    type  レコード型を表す文字列。type の値に応じて、 結果の配列には追加の属性が含まれます。以下の表を参照ください。    ttl  このレコードの<i>"有効期限 (Time To Live)"</i>。レコードの本来の ttl と一致するとは <i>限りません</i>。むしろ、 ネームサーバーへのクエリにかかった時間をそこから引いたものに一致します。     <b>'type' に応じて連想配列に追加される項目</b>   レコード型 追加項目     <i>A</i>  <i>ip</i>: ドット区切り 10 進数形式の IPv4 アドレス。    <i>MX</i>  <i>pri</i>: メールエクスチェンジャの優先度。 数字が小さいほど優先度が高い。 <i>target</i>: メールエクスチェンジャの FQDN 。 <code>dns_get_mx()</code> も参照ください。    <i>CNAME</i>  <i>target</i>: レコードのエイリアスの対象となっている場所の FQDN 。    <i>NS</i>  <i>target</i>: このホスト名に対する権威をもっているネームサーバーの FQDN 。    <i>PTR</i>  <i>target</i>: レコードが指している、DNS 名前空間内の場所    <i>TXT</i>  <i>txt</i>: このレコードに関連付けられている任意の文字列。    <i>HINFO</i>  <i>cpu</i>: このレコードが参照しているマシンの CPU を識別する IANA 番号。 <i>os</i>: このレコードが参照しているマシン上の OS を識別する IANA 番号。 これらの値の意味については、IANA の » <i>Operating System Names</i> を参照ください。    <i>CAA</i>  <i>flags</i>: A one-byte bitfield; currently only bit 0 is defined, meaning 'critical'; other bits are reserved and should be ignored. <i>tag</i>: CAA タグの名前 (alphanumeric ASCII string). <i>value</i>: CAA タグの値 (binary string, may use subformats). 詳細は、» RFC 6844 を参照ください。    <i>SOA</i>  <i>mname</i>: リソースレコードの元となるマシンの FQDN 。 <i>rname</i>: このドメインの管理責任者の Email アドレス。 <i>serial</i>: ドメインのシリアル番号。 <i>refresh</i>: セカンダリネームサーバーがこのドメインのコピーを更新する際に参照するリフレッシュ間隔（秒単位）。 <i>retry</i>: リフレッシュが失敗した際に 2 度目のリフレッシュを試みるまでの間隔（秒単位） <i>expire</i>: セカンダリネームサーバーが、ゾーンデータの リフレッシュに失敗した場合にコピーのデータを破棄せず持ち続ける期間 （秒単位）。 <i>minimum-ttl</i>: クライアントが、 一度取得したデータを再リクエストすることなしに利用できる最小期間（秒単位）。 個々のリソースレコードによって上書きが可能。    <i>AAAA</i>  <i>ipv6</i>: IPv6 アドレス。     <i>A6</i>(PHP &gt;= 5.1.0)  <i>masklen</i>: <code>chain</code> で指定された対象から引き継ぐビット長。 <i>ipv6</i>: <code>chain</code> とマージするためのこのレコードのアドレス。 <i>chain</i>: <code>ipv6</code> データとマージするための親レコード。    <i>SRV</i>  <i>pri</i>: (Priority) 値が小さいものが優先されます。 <i>weight</i>: 同じ優先順位の <code>targets</code> からランダムに選択する際の重み。 <i>target</i> および <i>port</i>: リクエストされたサービスが存在するホスト名とポート。 詳細は » RFC 2782 を参照ください。    <i>NAPTR</i>  <i>order</i> および <i>pref</i>: 上の <code>pri</code> および <code>weight</code> と同じ。 <i>flags</i>, <i>services</i>, <i>regex</i>, および <i>replacement</i>: » RFC 2915 で定義されるパラメータ。
 * @link http://php.net/manual/ja/function.dns-get-record.php
 * @see dns_get_mx(), dns_check_record()
 * @since PHP 5, PHP 7
 */
function dns_get_record(string $hostname, int $type = DNS_ANY, array &$authns = NULL, array &$addtl = NULL, bool $raw = FALSE): array {}

/**
 * インターネット接続もしくは Unix ドメインソケット接続をオープンする
 * <p><code>hostname</code> で指定したリソースへのソケット接続を開始します。</p><p>サポートされるソケットトランスポートのリスト に記述されているように、PHP は Internet ドメインまたは Unix ドメインをサポートします。 サポートされるトランスポートのリストは、<code>stream_get_transports()</code> を使って取得することもできます。</p><p>ソケットはデフォルトでブロックモードで開かれます。 <code>socket_set_blocking()</code> を使用して、 非ブロックモードに切換えることができます。</p><p><code>stream_socket_client()</code> 関数もこれと似ていますがより豊富なオプションを持っており、 非ブロック接続をしたりストリームコンテキストを提供したりする機能があります。</p>
 * @param string $hostname <p>OpenSSL サポートが インストール されている場合、 <code>hostname</code> の前に <i>ssl://</i> または <i>tls://</i> を付加することにより、TCP/IP 経由でリモートホストに接続する際に SSL または TLS クライアント接続を使用することができます。</p>
 * @param int $port <p>ポート番号。 <i>unix://</i> のようにポートを使わないトランスポートの場合は、 <i>-1</i> で無視してスキップさせることができます。</p>
 * @param int $errno <p>指定した場合は、システムコール <i>connect()</i> で発生したエラーのエラー番号が格納されます。</p> <p><code>errno</code> は <i>0</i> なのに関数が <b><code>FALSE</code></b> を返す場合、<i>connect()</i> をコールする前にエラーを発生したことを示します。 この場合、おそらくはソケットの初期化に原因があります。</p>
 * @param string $errstr <p>エラーメッセージを表す文字列。</p>
 * @param float $timeout <p>接続タイムアウト秒数。</p>  <p><b>注意</b>:</p> <p>ソケット経由でデータを読み書きする際のタイムアウトを設定する必要がある場合、 <b>fsockopen()</b> の <code>timeout</code> パラメータは、 ソケットに接続する間にだけ適用されるため、 <code>socket_set_timeout()</code> を使用してください。</p>
 * @return resource <p><b>fsockopen()</b>は、ファイルポインタを返します。 このファイルポインタは、 (<code>fgets()</code>, <code>fgetss()</code>, <code>fputs()</code>, <code>fclose()</code>, <code>feof()</code> のような) 他のファイル関数で使用可能です。 失敗した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.fsockopen.php
 * @see pfsockopen(), stream_socket_client(), stream_set_blocking(), stream_set_timeout(), fgets(), fgetss(), fwrite(), fclose(), feof(), socket_connect()
 * @since PHP 4, PHP 5, PHP 7
 */
function fsockopen(string $hostname, int $port = -1, int &$errno = NULL, string &$errstr = NULL, float $timeout  = 'ini_get("default_socket_timeout")') {}

/**
 * 指定した IP アドレスに対応するインターネットホスト名を取得する
 * <p><code>ip_address</code> で指定したインターネットホストのホスト名を返します。</p>
 * @param string $ip_address <p>ホストの IP アドレス。</p>
 * @return string <p>成功した場合はホスト名を返します。 失敗した場合は、そのままの形の <code>ip_address</code> を文字列で返します。 入力が壊れている場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.gethostbyaddr.php
 * @see gethostbyname(), gethostbynamel()
 * @since PHP 4, PHP 5, PHP 7
 */
function gethostbyaddr(string $ip_address): string {}

/**
 * インターネットホスト名に対応するIPv4アドレスを取得する
 * <p><code>hostname</code> で指定したインターネットホストの IPv4 アドレスを返します。</p>
 * @param string $hostname <p>ホスト名。</p>
 * @return string <p>IPv4 アドレスを返します。失敗した場合は、そのままの形の <code>hostname</code> を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.gethostbyname.php
 * @see gethostbyaddr(), gethostbynamel(), inet_pton(), inet_ntop()
 * @since PHP 4, PHP 5, PHP 7
 */
function gethostbyname(string $hostname): string {}

/**
 * 指定したインターネットホスト名に対応するIPv4アドレスのリストを取得する
 * <p><code>hostname</code> で指定したインターネットホストを検索して得られた IPv4 アドレスのリストを返します。</p>
 * @param string $hostname <p>ホスト名。</p>
 * @return array <p>IPv4 アドレスの配列を返します。 もし <code>hostname</code> が解決できなかった場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.gethostbynamel.php
 * @see gethostbyname(), gethostbyaddr(), checkdnsrr(), getmxrr()
 * @since PHP 4, PHP 5, PHP 7
 */
function gethostbynamel(string $hostname): array {}

/**
 * ホスト名を取得する
 * <p><b>gethostname()</b> 関数は、ローカルのマシンに設定されている標準的なホスト名を取得します。</p>
 * @return string <p>成功時にはホスト名を示す文字列。失敗時には <b><code>FALSE</code></b> を返します</p>
 * @link http://php.net/manual/ja/function.gethostname.php
 * @see gethostbyname(), gethostbyaddr(), php_uname()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function gethostname(): string {}

/**
 * 指定したインターネットホスト名に対応する MX レコードを取得する
 * <p><code>hostname</code> に対応する MX レコードを DNS から探します。</p>
 * @param string $hostname <p>インターネットホスト名。</p>
 * @param array $mxhosts <p>見つかった MX レコードのリストが、配列 <code>mxhosts</code> に格納されます。</p>
 * @param array $weight <p>配列 <code>weight</code> を指定すると、 そこに重み情報が格納されます。</p>
 * @return bool <p>何かレコードが見つかった場合に <b><code>TRUE</code></b>、 何も見つからないかエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.getmxrr.php
 * @see checkdnsrr(), dns_get_record(), gethostbyname(), gethostbynamel(), gethostbyaddr()
 * @since PHP 4, PHP 5, PHP 7
 */
function getmxrr(string $hostname, array &$mxhosts, array &$weight = NULL): bool {}

/**
 * プロトコル名のプロトコル番号を得る
 * <p><b>getprotobyname()</b>は、プロトコル <code>name</code> のプロトコル番号を /etc/protocols から取得して返します。</p>
 * @param string $name <p>プロトコル名。</p>
 * @return int <p>プロトコル番号を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.getprotobyname.php
 * @see getprotobynumber()
 * @since PHP 4, PHP 5, PHP 7
 */
function getprotobyname(string $name): int {}

/**
 * プロトコル番号が指すプロトコル名を取得する
 * <p><b>getprotobynumber()</b> は、 /etc/protocols に基づき プロトコル番号 <code>number</code> が指すプロトコル名を返します。</p>
 * @param int $number <p>プロトコル番号。</p>
 * @return string <p>プロトコル名を文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.getprotobynumber.php
 * @see getprotobyname()
 * @since PHP 4, PHP 5, PHP 7
 */
function getprotobynumber(int $number): string {}

/**
 * インターネットサービスおよびプロトコルが関連するポート番号を取得する
 * <p><b>getservbyname()</b> は、 /etc/services に基づき 指定したプロトコル <code>protocol</code> に関して <code>service</code> に対応するインターネットポートを返します。</p>
 * @param string $service <p>インターネットサービス名を表す文字列。</p>
 * @param string $protocol <p><code>protocol</code> は <i>"tcp"</i> あるいは <i>"udp"</i> (小文字) のいずれかです。</p>
 * @return int <p>ポート番号を返します。 <code>service</code> あるいは <code>protocol</code> が見つからない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.getservbyname.php
 * @see getservbyport()
 * @since PHP 4, PHP 5, PHP 7
 */
function getservbyname(string $service, string $protocol): int {}

/**
 * ポートおよびプロトコルに対応するインターネットサービスを得る
 * <p><b>getservbyport()</b> は、 /etc/services に基づき 指定したプロトコル <code>protocol</code> に関してポート <code>port</code> に関連するインターネットサービスを返します。</p>
 * @param int $port <p>ポート番号。</p>
 * @param string $protocol <p><code>protocol</code> は <i>"tcp"</i> あるいは <i>"udp"</i> (小文字) のいずれかです。</p>
 * @return string <p>インターネットサービス名を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.getservbyport.php
 * @see getservbyname()
 * @since PHP 4, PHP 5, PHP 7
 */
function getservbyport(int $port, string $protocol): string {}

/**
 * 生の HTTP ヘッダを送信する
 * <p><b>header()</b> は、生の HTTP ヘッダを送信するために使用されます。 HTTP ヘッダについての詳細な情報は » HTTP/1.1 仕様 を参照ください。</p><p>覚えておいて頂きたいのは、<b>header()</b> 関数は、 通常の HTML タグまたは PHP からの出力にかかわらず、すべての実際の 出力の前にコールする必要があることです。 頻出するエラーとして、<code>include</code> または <code>require</code> 関数、他のファイルをアクセスする関数に 空白または空行があり、<b>header()</b> の前に出力が 行われてしまうというものがあります。同じ問題は、単一の PHP/HTML ファイルを使用している場合でも存在します。</p>
 * @param string $header <p>ヘッダ文字列。</p> <p>特殊な header コールが 2 種類あります。最初のものは、 文字列 "<i>HTTP/</i>" から始まる全てのヘッダ (大文字・小文字は区別されません) です。 このヘッダは、送信する HTTP ステータスコードを示すために使用されます。 例えば、存在しないファイルへのリクエストを処理するためにある PHP スクリプトを使用するよう (<i>ErrorDocument</i> ディレクティブにより) Apache を設定する場合、 そのスクリプトが正しいステータスコードを返すようにする必要があります。</p> <p></p>  <code> &lt;&#63;php<br>header("HTTP/1.0 404 Not Found");<br>&#63;&gt;  </code>   <p>2 番目の特別なヘッダは、"Location:" ヘッダです。このヘッダがブラウザに返されるだけではなく、 ブラウザに <i>REDIRECT</i> (302) ステータスコードを返します (<i>201</i> や <i>3xx</i> ステータスコードが既に送信されていない場合にのみ)。</p> <p></p>  <code> &lt;&#63;php<br>header("Location: http://www.example.com/"); /&#42; ブラウザをリダイレクトします &#42;/<br><br>/&#42; リダイレクトする際に、これ以降のコードが実行されないことを確認してください &#42;/<br>exit;<br>&#63;&gt;  </code>
 * @param bool $replace <p>オプションのパラメータ <code>replace</code> は、ヘッダが 前に送信された類似のヘッダを置換するか、または、同じ形式の二番目の ヘッダを追加するかどうかを指定します。デフォルトでは、この関数は 置換を行ないますが、二番目の引数に <b><code>FALSE</code></b> を指定すると、同じ型の 複数のヘッダを強制的に生成します。例えば、</p> <p></p>  <code> &lt;&#63;php<br>header('WWW-Authenticate: Negotiate');<br>header('WWW-Authenticate: NTLM', false);<br>&#63;&gt;  </code>
 * @param int $http_response_code <p>HTTP レスポンスコードを強制的に指定の値にします。このパラメータが意味をなすのは <code>header</code> が空文字列でないときだけであることに注意しましょう。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.header.php
 * @see headers_sent(), setcookie(), http_response_code(), header_remove()
 * @since PHP 4, PHP 5, PHP 7
 */
function header(string $header, bool $replace = TRUE, int $http_response_code = NULL): void {}

/**
 * ヘッダ用の関数を登録する
 * <p>PHP が出力を送信しはじめるときにコールする関数を登録します。</p><p><code>callback</code> が実行されるのは、 PHP がすべてのヘッダを送出し終えてからその他の出力を始めるまでの間です。 ここで、送信する前のヘッダを操作できます。</p>
 * @param callable $callback <p>ヘッダを送信する前にコールする関数。パラメータは受け取らず、返り値も無視されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.header-register-callback.php
 * @see headers_list(), header_remove(), header()
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function header_register_callback(callable $callback): bool {}

/**
 * 以前に設定したHTTPヘッダを削除する
 * <p><code>header()</code>関数を使って以前に設定したHTTPヘッダを削除します。</p>
 * @param string $name <p>削除するヘッダの名前</p> <p><b>注意</b>:  このパラメータは大文字小文字を区別しません </p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.header-remove.php
 * @see header(), headers_sent()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function header_remove(string $name = NULL): void {}

/**
 * 送信した (もしくは送信される予定の) レスポンスヘッダの一覧を返す
 * <p><b>headers_list()</b> はブラウザもしくはクライアントに送信されるヘッダの数値配列を返します。 これらのヘッダが送信されたかどうかを判断するためには <code>headers_sent()</code> を使用します。</p>
 * @return array <p>ヘッダを、数値添字の配列で返します。</p>
 * @link http://php.net/manual/ja/function.headers-list.php
 * @see headers_sent(), header(), setcookie(), apache_response_headers(), http_response_code()
 * @since PHP 5, PHP 7
 */
function headers_list(): array {}

/**
 * ヘッダが既に送信されているかどうかを調べる
 * <p>ヘッダがすでに送信されているかどうかを調べます。</p><p>ヘッダブロックがいったん送信されてしまった後で <code>header()</code> 関数を使って新たなヘッダ行を送信することはできません。 この関数を使うには、少なくとも HTTP ヘッダ関連のエラーを予防する必要があります。 あるいは、出力バッファリング を使う方法もあります。</p>
 * @param string $file <p>オプション引数の <code>file</code> と <code>line</code> がセットされている場合、 PHP のソースファイル名と出力が開始された行番号が、それぞれ <code>file</code> と <code>line</code> に格納されます。</p>
 * @param int $line <p>出力を開始した行番号。</p>
 * @return bool <p><b>headers_sent()</b> は、HTTP ヘッダがまだ送信されていない場合に <b><code>FALSE</code></b>、 そうでないでない場合に <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.headers-sent.php
 * @see ob_start(), trigger_error(), headers_list(), header()
 * @since PHP 4, PHP 5, PHP 7
 */
function headers_sent(string &$file = NULL, int &$line = NULL): bool {}

/**
 * HTTP レスポンスコードを取得または設定
 * <p>HTTP レスポンスのステータスコードを取得したり設定したりします。</p>
 * @param int $response_code <p>オプションの <code>response_code</code> は、レスポンスコードを設定します。</p>
 * @return mixed <p><code>response_code</code> を指定した場合は、変更前に設定されていたステータスコードを返します。 <code>response_code</code> を省略した場合は、現在のステータスコードを返します。 どちらの場合でも、Web サーバー環境におけるデフォルトのステータスコードは <i>200</i> です。</p><p><code>response_code</code> が省略されており、 かつ Web サーバー環境以外 (CLI アプリケーションなど) で実行した場合には、<b><code>FALSE</code></b> を返します。 <code>response_code</code> を指定して、 かつ Web サーバー環境以外 (CLI アプリケーションなど) で実行した場合 (ただし、事前にレスポンスのステータスが設定されていない場合に限る) には、<b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.http-response-code.php
 * @see header(), headers_list()
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function http_response_code(int $response_code = NULL) {}

/**
 * パックされたインターネットアドレスを、人間が読める形式に変換する
 * <p>この関数は 32 ビット IPv4 形式あるいは 128 ビット IPv6 形式 (PHP が IPv6 サポートを有効にしてビルドされている場合) のアドレスを文字列表現のアドレスに変換します。</p>
 * @param string $in_addr <p>32 ビット IPv4、あるいは 128b ビット IPv6 形式のアドレス。</p>
 * @return string <p>アドレスを文字列で表したものを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.inet-ntop.php
 * @see long2ip(), ip2long(), inet_pton()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function inet_ntop(string $in_addr): string {}

/**
 * 人間が読める形式の IP アドレスを、パックされた in_addr 形式に変換する
 * <p>この関数は、人間が読める形式の IPv4 あるいは IPv6 (PHP が IPv6 サポートを有効にしてビルドされている場合) のアドレスを 32 ビットあるいは 128 ビットのバイナリ形式に変換します。</p>
 * @param string $address <p>可読形式の IPv4 アドレスあるいは IPv6 アドレス。</p>
 * @return string <p>指定した <code>address</code> を <i>in_addr</i> 形式で表したものを返します。 構文的に無効な <code>address</code> (ドットのない IPv4 アドレスやコロンのない IPv6 アドレスなど) を指定した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.inet-pton.php
 * @see ip2long(), long2ip(), inet_ntop()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function inet_pton(string $address): string {}

/**
 * ドット表記の (IPv4) IP アドレスを、長整数表現に変換する
 * <p>関数 <b>ip2long()</b> は、インターネット標準形式 (ドット表記の文字列) 表現から、長整数表現の IPv4 インターネットネットアドレスを生成します。</p><p><b>ip2long()</b> は不完全な形式の IP アドレスに対しても動作します。詳しい情報は » http://publibn.boulder.ibm.com/doc_link/en_US/a_doc_lib/libs/commtrf2/inet_addr.htm を参照ください。</p>
 * @param string $ip_address <p>標準形式のアドレス。</p>
 * @return int <p>長整数値、あるいは <code>ip_address</code> が不正な形式の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ip2long.php
 * @see long2ip(), sprintf()
 * @since PHP 4, PHP 5, PHP 7
 */
function ip2long(string $ip_address): int {}

/**
 * 長整数評言のインターネットアドレスを (IPv4) インターネット標準ドット表記に変換する
 * <p>関数<b>long2ip()</b> は、長整数表現のアドレスからドット表記 (例:aaa.bbb.ccc.ddd)のインターネットアドレスを生成します。</p>
 * @param int $proper_address <p>長整数で表した、正しい形式のアドレス。</p>
 * @return string <p>インターネットの IP アドレスを表す文字列を返します。</p>
 * @link http://php.net/manual/ja/function.long2ip.php
 * @see ip2long()
 * @since PHP 4, PHP 5, PHP 7
 */
function long2ip(int $proper_address): string {}

/**
 * システムのロガーへの接続をオープンする
 * <p><b>openlog()</b> は、プログラムによるシステムロガーへの接続をオープンします。</p><p><b>openlog()</b> の使用は必須ではありません。この関数は、 必要に応じて <code>syslog()</code> により自動的に呼び出されます。 この場合、<code>ident</code> のデフォルト値は <b><code>FALSE</code></b> となります。</p>
 * @param string $ident <p>文字列 <code>ident</code> が、各メッセージに追加されます。</p>
 * @param int $option <p><code>option</code> 引数は、 ログメッセージの生成時に使用されるロギング用オプションを指定します。</p> <b><b>openlog()</b> のオプション</b>   定数 説明     <b><code>LOG_CONS</code></b>  システムロガーにデータが送信される間にエラーが発生した場合、 直接、システムコンソールに書き込まれます。    <b><code>LOG_NDELAY</code></b>  直ちにロガーへの接続をオープンします。    <b><code>LOG_ODELAY</code></b>  (デフォルト) 最初のメッセージがロギングされるまで接続のオープンを遅延します。    <b><code>LOG_PERROR</code></b> 標準エラー出力にもログメッセージを出力します。   <b><code>LOG_PID</code></b> 各メッセージに PID も含めます。    このオプションを一つまたは複数設定することが可能です。 複数のオプションを使用する場合、その論理和を指定します。 つまり、直ちに接続をオープンし、コンソールに書き込み、 各メッセージに PID を含めるには、 <i>LOG_CONS | LOG_NDELAY | LOG_PID</i> とします。
 * @param int $facility <p>引数 <code>facility</code> には、 ロギングを行う際のメッセージ型を指定します。これにより、 (使用するシステムの syslog の設定に関して) 異なった facility を有するメッセージをどのように処理するかを指定できるようになります。</p> <b><b>openlog()</b> の機能</b>   定数 説明     <b><code>LOG_AUTH</code></b>  セキュリティ/認証用メッセージ (定数 <b><code>LOG_AUTHPRIV</code></b> が定義されているシステムでは、代わりにそれを使用してください)    <b><code>LOG_AUTHPRIV</code></b> セキュリティ/認証 メッセージ (プライベート)   <b><code>LOG_CRON</code></b> クロックデーモン (cron や at)   <b><code>LOG_DAEMON</code></b> 他のシステムデーモン   <b><code>LOG_KERN</code></b> カーネルメッセージ    <b><code>LOG_LOCAL0</code></b> ... <b><code>LOG_LOCAL7</code></b>  ローカルでの使用のために確保されているもので、Windows では使用できません   <b><code>LOG_LPR</code></b> ラインプリンタサブシステム   <b><code>LOG_MAIL</code></b> メールサブシステム   <b><code>LOG_NEWS</code></b> USENET ニュース サブシステム   <b><code>LOG_SYSLOG</code></b> syslogd で内部的に生成されたメッセージ   <b><code>LOG_USER</code></b> 一般的なユーザーレベルのメッセージ   <b><code>LOG_UUCP</code></b> UUCP サブシステム     <p><b>注意</b>:</p> <p>Windows 環境で使用できるのは <i>LOG_USER</i> だけです。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.openlog.php
 * @see syslog(), closelog()
 * @since PHP 4, PHP 5, PHP 7
 */
function openlog(string $ident, int $option, int $facility): bool {}

/**
 * 持続的な Internet または Unix ドメインソケット接続をオープンする
 * <p>この関数は、<code>fsockopen()</code> と全く同様に動作します。 ただし、この関数による接続はリクエストが終了した後でも閉じられないという違いがあります。 この関数は、<code>fsockopen()</code> の持続的接続版です。</p>
 * @param string $hostname
 * @param int $port
 * @param int $errno
 * @param string $errstr
 * @param float $timeout
 * @return resource
 * @link http://php.net/manual/ja/function.pfsockopen.php
 * @see fsockopen()
 * @since PHP 4, PHP 5, PHP 7
 */
function pfsockopen(string $hostname, int $port = -1, int &$errno = NULL, string &$errstr = NULL, float $timeout  = 'ini_get("default_socket_timeout")') {}

/**
 * クッキーを送信する
 * <p><b>setcookie()</b> は、その他のヘッダ情報と共に 送信するクッキーを定義します。 ほかのヘッダ情報と同様に、 クッキーは、スクリプトによる他のあらゆる出力よりも<i>前に</i> 送信される必要があります（これはHTTPプロトコルの制約です）。 <i>&lt;html&gt;</i> や <i>&lt;head&gt;</i> タグはもちろん 空白も含め、あらゆる出力よりも前にこの関数をコールするようにしなければなりません。</p><p>一度クッキーが送信されると、次のページのロードからは $_COOKIE 配列によってクッキーにアクセスできます。 クッキーの値は $_REQUEST 配列からもアクセスできるかもしれません。</p>
 * @param string $name <p>クッキーの名前。</p>
 * @param string $value <p>クッキーの値。この値はクライアントのコンピュータに保存されますので、 重要な情報は格納しないでください。 <code>name</code> が <i>'cookiename'</i> だとすると、 その値は $_COOKIE['cookiename'] で取得することができます。</p>
 * @param int $expire <p>クッキーの有効期限。これは Unix タイムスタンプなので Epoch（1970 年 1 月 1 日）からの経過秒数となります。 <code>time()</code> または <code>mktime()</code> 関数により 返された現在のUNIX標準時に、期限としたい必要な秒数を加算したものを 利用することができるでしょう。 <i>time()+60&#42;60&#42;24&#42;30</i> はクッキーの有効期限を 30 日後にセットします。 0 を設定したり省略したりした場合は、クッキーはセッションの最後 (つまりブラウザを閉じるとき) が有効期限となります。</p> <p></p> <p><b>注意</b>:</p> <p><code>expire</code> パラメータには、<i>Wdy, DD-Mon-YYYY HH:MM:SS GMT</i> といった形式ではなく Unix タイムスタンプを渡していることにお気づきでしょうか。 これは、PHP の内部で自動的に変換を行っているからです。</p>
 * @param string $path <p>サーバー上での、クッキーを有効としたいパス <i>'/'</i> をセットすると、クッキーは <code>domain</code> 配下の全てで有効となります。 <i>'/foo/'</i> をセットすると、クッキーは <i>/foo/</i> ディレクトリとそのサブディレクトリ配下 (例えば <i>/foo/bar/</i>) で有効となります。 デフォルト値は、クッキーがセットされたときのカレントディレクトリです。</p>
 * @param string $domain <p>クッキーが有効な (サブ) ドメイン。これを <i>'www.example.com'</i> などのサブドメインに設定すると、 <i>www</i> サブドメインおよびそれ自身のすべてのサブドメイン (w2.www.example.com など) でクッキーが使えるようになります。 サブドメインを含むドメイン全体でクッキーを有効にしたければ、そのドメイン自体 (この場合は <i>'example.com'</i>) を設定します。</p> <p>古いブラウザの中には、非推奨になった » RFC 2109 を実装しているものが未だに残っているかもしれません。 そのようなブラウザでは、すべてのサブドメインにマッチさせるためには先頭に <i>.</i> が必要となります。</p>
 * @param bool $secure <p>クライアントからのセキュアな HTTPS 接続の場合にのみクッキーが送信されるようにします。 <b><code>TRUE</code></b> を設定すると、セキュアな接続が存在する場合にのみクッキーを設定します。 サーバー側では、このようにセキュアな接続の場合にのみクッキーを送信するという処理は プログラマの責任で行うことになります (たとえば $_SERVER["HTTPS"] の内容を使用します)。</p>
 * @param bool $httponly <p><b><code>TRUE</code></b> を設定すると、HTTP を通してのみクッキーにアクセスできるようになります。 つまり、JavaScript のようなスクリプト言語からはアクセスできなくなるということです。 この設定を使用すると、XSS 攻撃によって ID を盗まれる危険性を減らせる (が、すべてのブラウザがこの設定をサポートしているというわけではありません) と言われていますが、これはしばしば議論の対象となります。 PHP 5.2.0 で追加されました。 <b><code>TRUE</code></b> あるいは <b><code>FALSE</code></b> で指定します。</p>
 * @return bool <p>もしもこの関数をコールする前に何らかの出力がある場合には、 <b>setcookie()</b> は失敗し <b><code>FALSE</code></b> を返します。 <b>setcookie()</b> が正常に実行されると、<b><code>TRUE</code></b> を返します。 この関数では、ユーザーがクッキーを受け入れたかどうかを判断することはできません。</p>
 * @link http://php.net/manual/ja/function.setcookie.php
 * @see header(), setrawcookie()
 * @since PHP 4, PHP 5, PHP 7
 */
function setcookie(string $name, string $value = "", int $expire = 0, string $path = "", string $domain = "", bool $secure = FALSE, bool $httponly = FALSE): bool {}

/**
 * 値を URL エンコードせずにクッキーを送信する
 * <p><b>setrawcookie()</b> は、 ブラウザに送信される際クッキーの値が自動的に URL エンコードされないことを除き、 <code>setcookie()</code> と等価です。</p>
 * @param string $name
 * @param string $value
 * @param int $expire
 * @param string $path
 * @param string $domain
 * @param bool $secure
 * @param bool $httponly
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.setrawcookie.php
 * @see setcookie()
 * @since PHP 5, PHP 7
 */
function setrawcookie(string $name, string $value = NULL, int $expire = 0, string $path = NULL, string $domain = NULL, bool $secure = FALSE, bool $httponly = FALSE): bool {}

/**
 * stream_get_meta_data() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>stream_get_meta_data()</code>.</p>
 * @param resource $stream <p>ストリームは <code>fopen()</code> か、 <code>fsockopen()</code> か、<code>pfsockopen()</code> で 作成されたいずれのものも指定できます。</p>
 * @return array
 * @link http://php.net/manual/ja/function.socket-get-status.php
 * @since PHP 4, PHP 5, PHP 7
 */
function socket_get_status($stream): array {}

/**
 * stream_set_blocking() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>stream_set_blocking()</code>.</p>
 * @param resource $stream <p>ストリーム。</p>
 * @param bool $mode <p><code>mode</code> が <b><code>FALSE</code></b> の時、ストリームは 非ブロックモードに切り替えられ、<b><code>TRUE</code></b> の場合は、 ブロックモードに切り替えられます。このモードの違いは、 <code>fgets()</code> や <code>fread()</code> といった、ストリームからデータを読む関数に影響します。 非ブロックモードにおいては <code>fgets()</code> を呼び出すと どんな場合でもただちに呼び出し元に戻りますが、ブロックモードの場合では、 ストリームがデータを読み出せる状態になるまで待ちつづけます。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.socket-set-blocking.php
 * @since PHP 4, PHP 5, PHP 7
 */
function socket_set_blocking($stream, bool $mode): bool {}

/**
 * stream_set_timeout() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>stream_set_timeout()</code>.</p>
 * @param resource $stream <p>対象となるストリーム。</p>
 * @param int $seconds <p>設定したいタイムアウトの秒数部分。</p>
 * @param int $microseconds <p>設定したいタイムアウトのマイクロ秒数部分。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.socket-set-timeout.php
 * @since PHP 4, PHP 5, PHP 7
 */
function socket_set_timeout($stream, int $seconds, int $microseconds = 0): bool {}

/**
 * システムログのメッセージを生成する
 * <p><b>syslog()</b> はシステムログが出力するログメッセージを生成します。</p><p>ユーザー定義のログハンドラの設定に関する情報については、Unix マニュアルの syslog.conf (5) を参照ください。 syslog の facility と option に関するより詳細な情報は、 Unix マシンの syslog (3) にあります。</p>
 * @param int $priority <p><code>priority</code> は、容易さ (facility) とレベル (level) の組み合わせです。以下の値が使用できます。</p> <b><b>syslog()</b> の優先順位 (降順)</b>   定数 説明     <b><code>LOG_EMERG</code></b> システムは使用不可   <b><code>LOG_ALERT</code></b> アクションを直ちにおこす必要がある   <b><code>LOG_CRIT</code></b> 致命的な条件   <b><code>LOG_ERR</code></b> エラーを発生する条件   <b><code>LOG_WARNING</code></b> 警告を発生する条件   <b><code>LOG_NOTICE</code></b> 通常の動作だが、特徴的な条件   <b><code>LOG_INFO</code></b> 情報を与えるメッセージ   <b><code>LOG_DEBUG</code></b> デバッグ用のメッセージ
 * @param string $message <p>残りの引数は送信するメッセージです。ただし、文字 <i>%m</i> は、errno の値に対応するエラーメッセージ文字列 (strerror) に置換されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.syslog.php
 * @see openlog(), closelog()
 * @since PHP 4, PHP 5, PHP 7
 */
function syslog(int $priority, string $message): bool {}

/**
 * IPv4アドレスリソース
 */
define('DNS_A', 1);

/**
 * IPv6アドレスリソース
 */
define('DNS_AAAA', 134217728);

/**
 * 利用可能なレコード型毎のネームサーバーへの反復クエリ。
 */
define('DNS_ALL', 251721779);

/**
 * 全てのリソースレコード。多くのシステムでは、 これは、全てのリソースレコードを返します。 しかし、危機的な状況には対応できません。代わりに <b><code>DNS_ALL</code></b> を試してください。
 */
define('DNS_ANY', 268435456);

/**
 * Certification Authority Authorizationリソース (PHP 7.0.16 および 7.1.2 以降で使用可能)
 */
define('DNS_CAA', 8192);

/**
 * エイリアス(Canonical Name)リソース
 */
define('DNS_CNAME', 16);

/**
 * ホスト情報リソース（これらの値の意味については、IANA の » <i>Operating System Names</i> を参照ください）
 */
define('DNS_HINFO', 4096);

/**
 * Mail Exchangerリソース
 */
define('DNS_MX', 16384);

/**
 * Authoritative Name Serverリソース
 */
define('DNS_NS', 2);

/**
 * ポインタリソース
 */
define('DNS_PTR', 2048);

/**
 * 認証リソースの開始
 */
define('DNS_SOA', 32);

/**
 * テキストリソース
 */
define('DNS_TXT', 32768);

/**
 * アクションを直ちに起こすことが必要
 */
define('LOG_ALERT', 1);

/**
 * セキュリティ/認証メッセージ（<b><code>LOG_AUTHPRIV</code></b>が定義されているシステムであれば 代わりにそれを使用してください）
 */
define('LOG_AUTH', 32);

/**
 * セキュリティ/認証メッセージ (private)
 */
define('LOG_AUTHPRIV', 80);

/**
 * システムロガーにデータを送信する際にエラーが発生した場合、 システムコンソールに直接書き込む。
 */
define('LOG_CONS', 2);

/**
 * 危機的な条件
 */
define('LOG_CRIT', 2);

/**
 * 時刻デーモン (cron and at)
 */
define('LOG_CRON', 72);

/**
 * その他のシステムデーモン
 */
define('LOG_DAEMON', 24);

/**
 * デバッグレベルメッセージ
 */
define('LOG_DEBUG', 7);

/**
 * システムは使用不可
 */
define('LOG_EMERG', 0);

/**
 * エラー条件
 */
define('LOG_ERR', 3);

/**
 * 情報メッセージ
 */
define('LOG_INFO', 6);

/**
 * カーネルメッセージ
 */
define('LOG_KERN', 0);

define('LOG_LOCAL0', 128);

/**
 * ラインプリンタサブシステム
 */
define('LOG_LPR', 48);

/**
 * メールサブシステム
 */
define('LOG_MAIL', 16);

/**
 * ロガーにただちに接続をオープンする。
 */
define('LOG_NDELAY', 8);

/**
 * USENETニュースサブシステム
 */
define('LOG_NEWS', 56);

/**
 * 正常、しかし、注意すべき条件
 */
define('LOG_NOTICE', 5);

define('LOG_NOWAIT', 16);

/**
 * (デフォルト) 最初のメッセージが記録されるまで接続のオープンを 遅延させる。
 */
define('LOG_ODELAY', 4);

/**
 * 標準エラー出力にもログメッセージを出力する
 */
define('LOG_PERROR', 32);

/**
 * 各メッセージにプロセスIDを含める
 */
define('LOG_PID', 1);

/**
 * syslogdによって内部で生成されたメッセージ
 */
define('LOG_SYSLOG', 40);

/**
 * 一般ユーザーレベルのメッセージ
 */
define('LOG_USER', 8);

/**
 * UUCPサブシステム
 */
define('LOG_UUCP', 64);

/**
 * 警告条件
 */
define('LOG_WARNING', 4);

