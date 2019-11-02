<?php



namespace {

	/**
	 * 課金用の Radius ハンドルを作成する
	 * @return resource <p>成功した場合にハンドル、エラー時に <b><code>FALSE</code></b> を返します。 この関数が失敗するのは、無効なメモリを使用した場合のみです。</p>
	 * @link https://php.net/manual/ja/function.radius-acct-open.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_acct_open() {}

	/**
	 * サーバーを追加する
	 * <p><b>radius_add_server()</b> は複数回コールされることも ありえます。また、<code>radius_config()</code> とともに 使用されることでしょう。最大で 10 までのサーバーを指定できます。 複数のサーバーが指定されると、有効なレスポンスを受信するか あるいは各サーバーへの接続回数が <code>max_tries</code> をこえるまでラウンドロビン形式でのアクセスを試みます。</p>
	 * @param resource $radius_handle
	 * @param string $hostname <p><code>hostname</code> はサーバーのホストを FQDN あるいはドット区切りの IP アドレス形式で指定します。</p>
	 * @param int $port <p><code>port</code> は、サーバーとの接続に使用する UDP ポートを指定します。0 を指定すると、このライブラリは ネットワークサービスデータベースから <code>radius/udp</code> あるいは <code>radacct/udp</code> サービスを 検索し、見つかったポートを使用します。見つからなかった場合は 標準の Radius ポート、すなわち認証には 1812、 課金には 1813 を使用します。</p>
	 * @param string $secret <p><code>secret</code> パラメータには、サーバーホストに 対する共有秘密鍵が渡されます。Radius プロトコルは、共有秘密鍵の 最初の 128 バイト以外を無視します。</p>
	 * @param int $timeout <p><code>timeout</code> パラメータには、サーバーから 応答を受信する際のタイムアウトを秒単位で指定します。</p>
	 * @param int $max_tries <p>結果が返ってこなかった場合に最大何回までリクエストを繰り返すかを <code>max_tries</code> に指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-add-server.php
	 * @see radius_config()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_add_server($radius_handle, string $hostname, int $port, string $secret, int $timeout, int $max_tries): bool {}

	/**
	 * 認証用の Radius ハンドルを作成する
	 * @return resource <p>成功した場合にハンドル、エラー時に <b><code>FALSE</code></b> を返します。 この関数が失敗するのは、無効なメモリを使用した場合のみです。</p>
	 * @link https://php.net/manual/ja/function.radius-auth-open.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_auth_open() {}

	/**
	 * すべてのリソースを開放する
	 * <p>各リクエストの終了時に PHP がすべてのリソースを開放するので、 この関数をコールする必要はありません。</p>
	 * @param resource $radius_handle
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-close.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_close($radius_handle): bool {}

	/**
	 * 指定した設定ファイルをライブラリに読み込ませる
	 * <p>Radius リクエストを発行する前には、ライブラリが接続可能なサーバーを 知っている必要があります。ライブラリを設定するいちばん簡単な方法は <b>radius_config()</b> をコールすることです。 <b>radius_config()</b> は、ライブラリに » radius.conf 形式のファイルを読み込ませます。</p>
	 * @param resource $radius_handle
	 * @param string $file <p>設定ファイルへのパスを、引数として <b>radius_config()</b> に渡します。 <code>radius_add_server()</code> をコールすることで、 プログラム上でライブラリの設定をすることも可能です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-config.php
	 * @see radius_add_server()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_config($radius_handle, string $file): bool {}

	/**
	 * 課金あるいは認証のリクエストを作成する
	 * <p>Radius リクエストには、リクエストの種類を指定するコードおよび 追加情報を指定するゼロ個以上の属性が含まれます。新しいリクエストを 作成するには、<b>radius_create_request()</b> をコールします。</p><p><b>注意</b>:  注意: 属性を設定する前にこの関数をコールする必要があります。 </p>
	 * @param resource $radius_handle
	 * @param int $type <p><b><code>RADIUS_ACCESS_REQUEST</code></b> あるいは <b><code>RADIUS_ACCOUNTING_REQUEST</code></b> のいずれか。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-create-request.php
	 * @see radius_send_request()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_create_request($radius_handle, int $type): bool {}

	/**
	 * 生データを IP アドレスに変換する
	 * @param string $data
	 * @return string
	 * @link https://php.net/manual/ja/function.radius-cvt-addr.php
	 * @see radius_cvt_int(), radius_cvt_string()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_cvt_addr(string $data): string {}

	/**
	 * 生データを整数に変換する
	 * @param string $data
	 * @return int
	 * @link https://php.net/manual/ja/function.radius-cvt-int.php
	 * @see radius_cvt_addr(), radius_cvt_string()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_cvt_int(string $data): int {}

	/**
	 * 生データを文字列に変換する
	 * @param string $data
	 * @return string
	 * @link https://php.net/manual/ja/function.radius-cvt-string.php
	 * @see radius_cvt_addr(), radius_cvt_int()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_cvt_string(string $data): string {}

	/**
	 * データを復元する
	 * <p>セキュリティ上の理由により、(パスワード、MS-CHAPv1 MPPE キーなど) いくつかのデータは変形されます。それを使用する際には事前に復元する 必要があります。</p>
	 * @param resource $radius_handle
	 * @param string $mangled
	 * @return string <p>復元した文字列、あるいはエラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-demangle.php
	 * @since PECL radius >= 1.2.0
	 */
	function radius_demangle($radius_handle, string $mangled): string {}

	/**
	 * 変形されたデータから mppe キーを得る
	 * <p>MS-CHAPv2 で MPPE を使用している場合には、送信キーおよび受信キーが 変形されます (» RFC 2548 を参照ください)。しかしこの関数は無意味です。なぜなら PHP では PPTP-MPPE は実装されていないし、今後も実装されるとは思えないからです。</p>
	 * @param resource $radius_handle
	 * @param string $mangled
	 * @return string <p>復元したデータ、あるいはエラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-demangle-mppe-key.php
	 * @since PECL radius >= 1.2.0
	 */
	function radius_demangle_mppe_key($radius_handle, string $mangled): string {}

	/**
	 * 属性を取得する
	 * <p>Radius リクエストと同様、各レスポンスもゼロ個以上の属性を含んでいます。 <code>radius_send_request()</code> でレスポンスを受け取ったら、 <b>radius_get_attr()</b> を使用して各属性を抽出することが できます。<b>radius_get_attr()</b> がコールされるたびに、 現在のレスポンスから次の属性を取得します。</p>
	 * @param resource $radius_handle
	 * @return mixed <p>属性の型とデータを含む連想配列、あるいは 0 以上の エラー番号を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-get-attr.php
	 * @see radius_put_attr(), radius_get_vendor_attr(), radius_put_vendor_attr(), radius_send_request()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_get_attr($radius_handle) {}

	/**
	 * Extracts the data from a tagged attribute
	 * <p>If a tagged attribute has been returned from <code>radius_get_attr()</code>, <b>radius_get_tagged_attr_data()</b> will return the data from the attribute.</p>
	 * @param string $data <p>The tagged attribute to be decoded.</p>
	 * @return string <p>Returns the data from the tagged attribute 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.radius-get-tagged-attr-data.php
	 * @see radius_get_attr(), radius_get_tagged_attr_tag()
	 * @since PECL radius >= 1.3.0
	 */
	function radius_get_tagged_attr_data(string $data): string {}

	/**
	 * Extracts the tag from a tagged attribute
	 * <p>If a tagged attribute has been returned from <code>radius_get_attr()</code>, <code>radius_get_tagged_attr_data()</code> will return the tag from the attribute.</p>
	 * @param string $data <p>The tagged attribute to be decoded.</p>
	 * @return int <p>Returns the tag from the tagged attribute 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.radius-get-tagged-attr-tag.php
	 * @see radius_get_attr(), radius_get_tagged_attr_data()
	 * @since PECL radius >= 1.3.0
	 */
	function radius_get_tagged_attr_tag(string $data): int {}

	/**
	 * ベンダ固有の属性を取得する
	 * <p><code>radius_get_attr()</code> が <b><code>RADIUS_VENDOR_SPECIFIC</code></b> を返す場合に、 ベンダを特定するために <b>radius_get_vendor_attr()</b> をコールします。</p>
	 * @param string $data
	 * @return array <p>属性の型、ベンダおよびデータを含む連想配列か、エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-get-vendor-attr.php
	 * @see radius_get_attr(), radius_put_vendor_attr()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_get_vendor_attr(string $data): array {}

	/**
	 * IP アドレス属性を設定する
	 * <p>IP アドレス属性を、現在の RADIUS リクエストにアタッチします。</p><p><b>注意</b>:</p><p>リクエストを <code>radius_create_request()</code> で作ってからでないと、この関数は呼べません。</p>
	 * @param resource $radius_handle <p>RADIUS リソース。</p>
	 * @param int $type <p>属性の型。</p>
	 * @param string $addr <p>IPv4 アドレスを表す文字列。 <i>10.0.0.1</i> など。</p>
	 * @param int $options <p>属性のオプションのビットマスク。使えるオプションには、<b><code>RADIUS_OPTION_TAGGED</code></b> や <b><code>RADIUS_OPTION_SALT</code></b> があります。</p>
	 * @param int $tag <p>属性のタグ。<b><code>RADIUS_OPTION_TAGGED</code></b> が設定されていない限り、このパラメータは無視されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-put-addr.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_addr($radius_handle, int $type, string $addr, int $options = 0, int $tag = NULL): bool {}

	/**
	 * バイナリ属性を設定する
	 * <p>バイナリ属性を、現在の RADIUS リクエストにアタッチします。</p><p><b>注意</b>:</p><p>リクエストを <code>radius_create_request()</code> で作ってからでないと、この関数は呼べません。</p>
	 * @param resource $radius_handle <p>RADIUS リソース。</p>
	 * @param int $type <p>属性の型。</p>
	 * @param string $value <p>属性の値。バイナリ文字列として扱われます。</p>
	 * @param int $options <p>属性のオプションのビットマスク。使えるオプションには、<b><code>RADIUS_OPTION_TAGGED</code></b> や <b><code>RADIUS_OPTION_SALT</code></b> があります。</p>
	 * @param int $tag <p>属性のタグ。<b><code>RADIUS_OPTION_TAGGED</code></b> が設定されていない限り、このパラメータは無視されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-put-attr.php
	 * @see radius_get_attr(), radius_get_vendor_attr(), radius_put_vendor_attr()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_attr($radius_handle, int $type, string $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * 整数属性を設定する
	 * <p>整数属性を、現在の RADIUS リクエストにアタッチします。</p><p><b>注意</b>:</p><p>リクエストを <code>radius_create_request()</code> で作ってからでないと、この関数は呼べません。</p>
	 * @param resource $radius_handle <p>RADIUS リソース。</p>
	 * @param int $type <p>属性の型。</p>
	 * @param int $value <p>属性の値。</p>
	 * @param int $options <p>属性のオプションのビットマスク。使えるオプションには、<b><code>RADIUS_OPTION_TAGGED</code></b> や <b><code>RADIUS_OPTION_SALT</code></b> があります。</p>
	 * @param int $tag <p>属性のタグ。<b><code>RADIUS_OPTION_TAGGED</code></b> が設定されていない限り、このパラメータは無視されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-put-int.php
	 * @see radius_put_string(), radius_put_vendor_int(), radius_put_vendor_string()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_int($radius_handle, int $type, int $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * 文字列属性を設定する
	 * <p>文字列属性を、現在の RADIUS リクエストにアタッチします。 一般に、文字列属性をアタッチするには <code>radius_put_attr()</code> のほうがより便利です。 というのも、こちらのほうはバイナリセーフだからです。</p><p><b>注意</b>:</p><p>リクエストを <code>radius_create_request()</code> で作ってからでないと、この関数は呼べません。</p>
	 * @param resource $radius_handle <p>RADIUS リソース。</p>
	 * @param int $type <p>属性の型。</p>
	 * @param string $value <p>属性の値。 これはヌル終端であることが期待されています。つまり、このパラメータはバイナリセーフではないということです。</p>
	 * @param int $options <p>属性のオプションのビットマスク。使えるオプションには、<b><code>RADIUS_OPTION_TAGGED</code></b> や <b><code>RADIUS_OPTION_SALT</code></b> があります。</p>
	 * @param int $tag <p>属性のタグ。<b><code>RADIUS_OPTION_TAGGED</code></b> が設定されていない限り、このパラメータは無視されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-put-string.php
	 * @see radius_put_int(), radius_put_vendor_int(), radius_put_vendor_string()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_string($radius_handle, int $type, string $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * ベンダー固有の IP アドレス属性を設定する
	 * <p>ベンダー固有の IP アドレス属性を、現在の RADIUS リクエストにアタッチします。</p><p><b>注意</b>:</p><p>リクエストを <code>radius_create_request()</code> で作ってからでないと、この関数は呼べません。</p>
	 * @param resource $radius_handle <p>RADIUS リソース。</p>
	 * @param int $vendor <p>ベンダー ID。</p>
	 * @param int $type <p>属性の型。</p>
	 * @param string $addr <p>文字列形式の IPv4 アドレス。 <i>10.0.0.1</i> など。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-put-vendor-addr.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_vendor_addr($radius_handle, int $vendor, int $type, string $addr): bool {}

	/**
	 * ベンダー固有のバイナリ属性を設定する
	 * <p>ベンダー固有のバイナリ属性を、現在の RADIUS リクエストにアタッチします。</p><p><b>注意</b>:</p><p>リクエストを <code>radius_create_request()</code> で作ってからでないと、この関数は呼べません。</p>
	 * @param resource $radius_handle <p>RADIUS リソース。</p>
	 * @param int $vendor <p>ベンダー ID。</p>
	 * @param int $type <p>属性の型。</p>
	 * @param string $value <p>属性の値。バイナリ文字列として扱われます。</p>
	 * @param int $options <p>属性のオプションのビットマスク。使えるオプションには、<b><code>RADIUS_OPTION_TAGGED</code></b> や <b><code>RADIUS_OPTION_SALT</code></b> があります。</p>
	 * @param int $tag <p>属性のタグ。<b><code>RADIUS_OPTION_TAGGED</code></b> が設定されていない限り、このパラメータは無視されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-put-vendor-attr.php
	 * @see radius_get_vendor_attr()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_vendor_attr($radius_handle, int $vendor, int $type, string $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * ベンダー固有の整数属性を設定する
	 * <p>ベンダー固有の整数属性を、現在の RADIUS リクエストにアタッチします。</p><p><b>注意</b>:</p><p>リクエストを <code>radius_create_request()</code> で作ってからでないと、この関数は呼べません。</p>
	 * @param resource $radius_handle <p>RADIUS リソース。</p>
	 * @param int $vendor <p>ベンダー ID。</p>
	 * @param int $type <p>属性の型。</p>
	 * @param int $value <p>属性の値。</p>
	 * @param int $options <p>属性のオプションのビットマスク。使えるオプションには、<b><code>RADIUS_OPTION_TAGGED</code></b> や <b><code>RADIUS_OPTION_SALT</code></b> があります。</p>
	 * @param int $tag <p>属性のタグ。<b><code>RADIUS_OPTION_TAGGED</code></b> が設定されていない限り、このパラメータは無視されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-put-vendor-int.php
	 * @see radius_put_vendor_string()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_vendor_int($radius_handle, int $vendor, int $type, int $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * ベンダー固有の文字列属性を設定する
	 * <p>ベンダー固有の文字列属性を、現在の RADIUS リクエストにアタッチします。 一般に、文字列属性をアタッチするには <code>radius_put_vendor_attr()</code> のほうがより便利です。 というのも、こちらのほうはバイナリセーフだからです。</p><p><b>注意</b>:</p><p>リクエストを <code>radius_create_request()</code> で作ってからでないと、この関数は呼べません。</p>
	 * @param resource $radius_handle <p>RADIUS リソース。</p>
	 * @param int $vendor <p>ベンダー ID。</p>
	 * @param int $type <p>属性の型。</p>
	 * @param string $value <p>属性の値。 これはヌル終端であることが期待されています。つまり、このパラメータはバイナリセーフではないということです。</p>
	 * @param int $options <p>属性のオプションのビットマスク。使えるオプションには、<b><code>RADIUS_OPTION_TAGGED</code></b> や <b><code>RADIUS_OPTION_SALT</code></b> があります。</p>
	 * @param int $tag <p>属性のタグ。<b><code>RADIUS_OPTION_TAGGED</code></b> が設定されていない限り、このパラメータは無視されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-put-vendor-string.php
	 * @see radius_put_vendor_int()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_put_vendor_string($radius_handle, int $vendor, int $type, string $value, int $options = 0, int $tag = NULL): bool {}

	/**
	 * リクエスト認証子を返す
	 * <p>パスワードや暗号化キーのような加工されたデータを復元する際には リクエスト認証子が必要となります。</p>
	 * @param resource $radius_handle
	 * @return string <p>リクエスト認証子を文字列で返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-request-authenticator.php
	 * @see radius_demangle()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_request_authenticator($radius_handle): string {}

	/**
	 * Salt-encrypts a value
	 * <p>Applies the RADIUS salt-encryption algorithm to the given value.</p><p>In general, this is achieved automatically by providing the <b><code>RADIUS_OPTION_SALT</code></b> option to an attribute setter function, but this function can be used if low-level request construction is required.</p>
	 * @param resource $radius_handle
	 * @param string $data <p>The data to be salt-encrypted.</p>
	 * @return string <p>Returns the salt-encrypted data 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.radius-salt-encrypt-attr.php
	 * @see radius_put_addr(), radius_put_attr(), radius_put_int(), radius_put_string()
	 * @since PECL radius >= 1.3.0
	 */
	function radius_salt_encrypt_attr($radius_handle, string $data): string {}

	/**
	 * リクエストを送信し、応答を待つ
	 * <p>Radius リクエストを作成した後は、 <b>radius_send_request()</b> でそれを送信します。</p><p><b>radius_send_request()</b> 関数は、リクエストを送信して 応答を待ちます。定義されているサーバー間で、必要に応じてラウンドロビン 形式で再試行します。</p>
	 * @param resource $radius_handle
	 * @return int <p>有効な応答を受信したら、<b>radius_send_request()</b> は応答の型を示す Radius コードを返します。一般的なコードは <b><code>RADIUS_ACCESS_ACCEPT</code></b>、 <b><code>RADIUS_ACCESS_REJECT</code></b> あるいは <b><code>RADIUS_ACCESS_CHALLENGE</code></b> です。 有効な応答を受信できなかった場合は、 <b>radius_send_request()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-send-request.php
	 * @see radius_create_request()
	 * @since PECL radius >= 1.1.0
	 */
	function radius_send_request($radius_handle): int {}

	/**
	 * 共有秘密鍵を返す
	 * <p>パスワードや暗号化キーのような加工されたデータを復元する際の SALT として、共有秘密鍵が必要となります。</p>
	 * @param resource $radius_handle
	 * @return string <p>サーバーの共有秘密鍵を文字列で返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.radius-server-secret.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_server_secret($radius_handle): string {}

	/**
	 * エラーメッセージを返す
	 * <p>Radius 関数が失敗した場合にはエラーメッセージが記録されます。 この関数により、エラーメッセージを取得することが可能となります。</p>
	 * @param resource $radius_handle
	 * @return string <p>失敗した radius 関数からのエラーメッセージを文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.radius-strerror.php
	 * @since PECL radius >= 1.1.0
	 */
	function radius_strerror($radius_handle): string {}

	/**
	 * The maximum length of MPPE keys.
	 */
	define('RADIUS_MPPE_KEY_LEN', null);

}
