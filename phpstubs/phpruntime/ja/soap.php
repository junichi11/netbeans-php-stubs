<?php

// Start of soap v.7.0.19

/**
 * SoapClient クラスは SOAP 1.1、SOAP 1.2 サーバー用のクライアントとなります。
 * WSDL モードあるいは non-WSDL モードで動作します。
 * @link http://php.net/manual/ja/class.soapclient.php
 */
class SoapClient  {

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SoapClient コンストラクタ
	 * @link http://php.net/manual/ja/soapclient.soapclient.php
	 * @param mixed $wsdl <p>
	 * WSDL ファイルの URI もしくは
	 * 非 WSDL モードの場合 <b>NULL</b>
	 * </p>
	 * <p>
	 * 開発中は、WSDL のキャッシュを <i>php.ini</i> の
	 * soap.wsdl_cache_ttl で無効にしておくとよいでしょう。
	 * そうしないと、WSDL を変更しても
	 * soap.wsdl_cache_ttl で設定した時間が経過するまで
	 * それが反映されなくなります。
	 * </p>
	 * @param array $options [optional] <p>
	 * オプションの配列。もし WSDL モードで動作させる場合、
	 * このパラメータはオプションです。非 WSDL モードで動作させる場合、
	 * location と uri
	 * オプションを指定する必要があります。ここで、
	 * location はリクエストの送り先である SOAP サーバーの URL、
	 * uri は SOAP サービスのターゲット名前空間です。
	 * </p>
	 * <p>
	 * style および use
	 * オプション は非 WSDL モードでのみ動作します。
	 * WSDL モードでは、これらは WSDL ファイルで指定されます。
	 * </p>
	 * <p>
	 * soap_version オプションは、
	 * <b>SOAP_1_1</b> あるいは <b>SOAP_1_2</b>
	 * のどちらかを指定しなければいけません。それぞれ SOAP 1.2、SOAP 1.2 を表します。
	 * 省略した場合は 1.1 を使います。
	 * </p>
	 * <p>
	 * HTTP 認証用として、login および
	 * password オプションが使用可能です。
	 * プロキシサーバー経由で HTTP 接続を確立する場合は、
	 * proxy_host,
	 * proxy_port, proxy_login
	 * および proxy_password
	 * の各オプションを使用してください。
	 * HTTPS クライアント証明書による認証には
	 * local_cert と passphrase
	 * を使用します。認証情報は authentication
	 * オプションで指定します。認証方式は
	 * <b>SOAP_AUTHENTICATION_BASIC</b> (デフォルト) あるいは
	 * <b>SOAP_AUTHENTICATION_DIGEST</b> のいずれかとなります。
	 * </p>
	 * <p>
	 * compression オプションにより、
	 * HTTP SOAP リクエストやレスポンスの圧縮を行うことができます。
	 * </p>
	 * <p>
	 * encoding
	 * オプションは内部的な文字エンコーディングを定義します。
	 * このオプションは SOAP リクエストのエンコーディング (常に utf-8)
	 * を変更しませんが、その中の文字列を変換します。
	 * </p>
	 * <p>
	 * trace オプションはリクエストのトレースを有効にします。
	 * 失敗したときにバックトレースが可能となります。
	 * デフォルトは <b>FALSE</b> です。
	 * </p>
	 * <p>
	 * classmap オプションは WSDL 型を PHP
	 * クラスにマッピングするために使用可能です。
	 * このオプションには、キーとしてWSDL 型、値として PHP
	 * クラスの名前を持つ配列を指定する必要があります。
	 * </p>
	 * <p>
	 * boolean のオプション trace を設定すると、
	 * SoapClient->__getLastRequest、
	 * SoapClient->__getLastRequestHeaders、
	 * SoapClient->__getLastResponse および
	 * SoapClient->__getLastResponseHeaders
	 * といったメソッドが使用できるようになります。
	 * </p>
	 * <p>
	 * exceptions オプションは boolean 値で、soap のエラー時に
	 * SoapFault 型の例外をスローさせるかどうかを設定します。
	 * </p>
	 * <p>
	 * connection_timeout オプションは、SOAP
	 * サービスに接続する際のタイムアウト秒数を指定します。
	 * これを使用しても、レスポンスが遅いサービスのタイムアウトを定義することはできません。
	 * サービスのコールが完了するまでの待ち時間を制限するには、設定項目
	 * default_socket_timeout
	 * を使用します。
	 * </p>
	 * <p>
	 * typemap オプションは、型マッピングの配列です。
	 * この配列のキーは type_name、
	 * type_ns (名前空間 URI)、from_xml
	 * (引数として文字列をひとつ受け取るコールバック) そして to_xml
	 * (引数としてオブジェクトをひとつ受け取るコールバック) です。
	 * </p>
	 * <p>
	 * cache_wsdl オプションは
	 * <b>WSDL_CACHE_NONE</b>、
	 * <b>WSDL_CACHE_DISK</b>、
	 * <b>WSDL_CACHE_MEMORY</b> あるいは
	 * <b>WSDL_CACHE_BOTH</b> のいずれかです。
	 * </p>
	 * <p>
	 * user_agent オプションは、
	 * User-Agent ヘッダで使用する文字列を指定します。
	 * </p>
	 * <p>
	 * stream_context オプションは、
	 * context 用のリソースです。
	 * </p>
	 * <p>
	 * features オプションは
	 * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>、
	 * <b>SOAP_USE_XSI_ARRAY_TYPE</b>、
	 * <b>SOAP_WAIT_ONE_WAY_CALLS</b> のビットマスクです。
	 * </p>
	 * <p>
	 * keep_alive オプションは boolean 値で、
	 * Connection: Keep-Alive ヘッダーと
	 * Connection: close ヘッダーのどちらを送信するかを決めます。
	 * </p>
	 * <p>
	 * ssl_method オプションは
	 * <b>SOAP_SSL_METHOD_TLS</b> か
	 * <b>SOAP_SSL_METHOD_SSLv2</b>、
	 * <b>SOAP_SSL_METHOD_SSLv3</b>、あるいは
	 * <b>SOAP_SSL_METHOD_SSLv23</b> のいずれかです。
	 * </p>
	 */
	public function SoapClient($wsdl, array $options = null) {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SOAP 関数をコールする (非推奨)
	 * @link http://php.net/manual/ja/soapclient.call.php
	 * @param string $function_name
	 * @param string $arguments
	 * @return mixed
	 */
	public function __call(string $function_name, string $arguments) {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SOAP 関数をコールする
	 * @link http://php.net/manual/ja/soapclient.soapcall.php
	 * @param string $function_name <p>
	 * コールしたい SOAP 関数の名前。
	 * </p>
	 * @param array $arguments <p>
	 * 関数に渡す引数の配列。これは、数値添字配列あるいは連想配列のどちらの形式でもかまいません。
	 * たいていの SOAP サーバーは、パラメータ名を指定しないといけないことに注意しましょう。
	 * そんな場合は、連想配列でないといけません。
	 * </p>
	 * @param array $options [optional] <p>
	 * クライアントに渡すオプションの連想配列。
	 * </p>
	 * <p>
	 * location はリモートウェブサービスの URL です。
	 * </p>
	 * <p>
	 * uri は SOAP サービスのターゲット名前空間です。
	 * </p>
	 * <p>
	 * soapaction はコールしたいアクションです。
	 * </p>
	 * @param mixed $input_headers [optional] <p>
	 * SOAP リクエストで送信するヘッダの配列。
	 * </p>
	 * @param array $output_headers [optional] <p>
	 * 指定すると、この配列に SOAP レスポンスのヘッダが書き込まれます。
	 * </p>
	 * @return mixed SOAP 関数は、一つまたは複数の値を返す可能性があります。
	 * SOAP 関数によって返される値が 1 つだけの場合、__soapCall
	 * の返す値は単純な値 (例えば、整数型、文字列など) になります。
	 * 複数の値が返される場合、__soapCall
	 * は出力パラメータの名前を連想配列として返します。
	 * </p>
	 * <p>
	 * エラーの場合は、SoapClient オブジェクトの作成時に exceptions
	 * オプションが <b>FALSE</b> となっていれば SoapFault オブジェクトを返します。
	 */
	public function __soapCall(string $function_name, array $arguments, array $options = null, $input_headers = null, array &$output_headers = null) {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 直近の SOAP リクエストを返す
	 * @link http://php.net/manual/ja/soapclient.getlastrequest.php
	 * @return string 直近の SOAP リクエストを XML 文字列で返します。
	 */
	public function __getLastRequest(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 直近の SOAP レスポンスを返す
	 * @link http://php.net/manual/ja/soapclient.getlastresponse.php
	 * @return string 直近の SOAP レスポンスを XML 文字列で返します。
	 */
	public function __getLastResponse(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 直近の SOAP リクエストヘッダを返す
	 * @link http://php.net/manual/ja/soapclient.getlastrequestheaders.php
	 * @return string 直近の SOAP リクエストヘッダ
	 */
	public function __getLastRequestHeaders(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 直近の SOAP レスポンスヘッダを返す
	 * @link http://php.net/manual/ja/soapclient.getlastresponseheaders.php
	 * @return string 直近の SOAP レスポンスヘッダ
	 */
	public function __getLastResponseHeaders(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SOAP 関数の一覧を返す
	 * @link http://php.net/manual/ja/soapclient.getfunctions.php
	 * @return array SOAP 関数のプロトタイプ、返り値の型、関数名、型ヒントつきパラメータの配列を返します。
	 */
	public function __getFunctions(): array {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SOAP 型の一覧を返す
	 * @link http://php.net/manual/ja/soapclient.gettypes.php
	 * @return array SOAP 型の配列を返します。すべての構造や型が含まれています。
	 */
	public function __getTypes(): array {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SOAP リクエストを実行する
	 * @link http://php.net/manual/ja/soapclient.dorequest.php
	 * @param string $request <p>
	 * XML SOAP リクエスト
	 * </p>
	 * @param string $location <p>
	 * リクエスト先の URL
	 * </p>
	 * @param string $action <p>
	 * SOAP アクション
	 * </p>
	 * @param int $version <p>
	 * SOAP バージョン
	 * </p>
	 * @param int $one_way [optional] <p>
	 * one_way に 1 を設定すると、このメソッドは何も返しません。
	 * レスポンスが不要なときにこれを使用します。
	 * </p>
	 * @return string XML SOAP レスポンス
	 */
	public function __doRequest(string $request, string $location, string $action, int $version, int $one_way = 0): string {}

	/**
	 * (PHP 5 &gt;= 5.0.4, PHP 7)<br/>
	 * SOAP リクエストと共に送信されるクッキーを設定する
	 * @link http://php.net/manual/ja/soapclient.setcookie.php
	 * @param string $name <p>
	 * クッキーの名前
	 * </p>
	 * @param string $value [optional] <p>
	 * クッキーの値。指定されない場合、クッキーは削除されます。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function __setCookie(string $name, string $value = null): void {}

	public function __getCookies() {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 使用するウェブサービスの場所を設定する
	 * @link http://php.net/manual/ja/soapclient.setlocation.php
	 * @param string $new_location [optional] <p>
	 * 新しいエンドポイント URL。
	 * </p>
	 * @return string それまでのエンドポイント URL を返します。
	 */
	public function __setLocation(string $new_location = null): string {}

	/**
	 * (PHP 5 &gt;= 5.0.5, PHP 7)<br/>
	 * 以降のコール用の SOAP ヘッダを設定する
	 * @link http://php.net/manual/ja/soapclient.setsoapheaders.php
	 * @param mixed $soapheaders [optional] <p>
	 * 設定したいヘッダ。<b>SoapHeader</b>
	 * オブジェクト、あるいは <b>SoapHeader</b> オブジェクトの配列です。
	 * 省略したり <b>NULL</b> を設定したりした場合はヘッダが削除されます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function __setSoapHeaders($soapheaders = null): bool {}

}

/**
 * SOAP サービスが使用する変数やオブジェクトをあらわします。
 * @link http://php.net/manual/ja/class.soapvar.php
 */
class SoapVar  {

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SoapVar コンストラクタ
	 * @link http://php.net/manual/ja/soapvar.soapvar.php
	 * @param mixed $data <p>
	 * 渡すもしくは返すデータ
	 * </p>
	 * @param string $encoding <p>
	 * エンコーディング ID。XSD_... 定数のうちの一つ。
	 * </p>
	 * @param string $type_name [optional] <p>
	 * 型名
	 * </p>
	 * @param string $type_namespace [optional] <p>
	 * 型の名前空間
	 * </p>
	 * @param string $node_name [optional] <p>
	 * XML ノードの名前
	 * </p>
	 * @param string $node_namespace [optional] <p>
	 * XML ノードの名前空間
	 * </p>
	 */
	public function SoapVar($data, string $encoding, string $type_name = null, string $type_namespace = null, string $node_name = null, string $node_namespace = null) {}

}

/**
 * SoapServer クラスは SOAP 1.1 および SOAP 1.2 プロトコル用のサーバーとなります。
 * WSDL サービス記述を使用することもしないこともできます。
 * @link http://php.net/manual/ja/class.soapserver.php
 */
class SoapServer  {

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SoapServer コンストラクタ
	 * @link http://php.net/manual/ja/soapserver.soapserver.php
	 * @param mixed $wsdl <p>
	 * WSDL モードの場合、これに WSDL ファイルの URI を指定する必要があります。
	 * その他の場合、<b>NULL</b> を指定し、uri
	 * オプションを設定する必要があります。
	 * </p>
	 * @param array $options [optional] <p>
	 * デフォルトの SOAP バージョン (soap_version),
	 * 内部の文字エンコーディング (encoding),
	 * アクターの URI (actor) を指定することができます。
	 * </p>
	 * <p>
	 * classmap オプションにより、WSDL 型を PHP
	 * のクラスにマッピングすることが可能です。
	 * このオプションには、キーとしてWSDL 型、値として PHP
	 * クラスの名前を持つ配列を指定する必要があります。
	 * </p>
	 * <p>
	 * typemap オプションは、型マッピングの配列です。
	 * この配列のキーは type_name、
	 * type_ns (名前空間 URI)、from_xml
	 * (引数として文字列をひとつ受け取るコールバック) そして to_xml
	 * (引数としてオブジェクトをひとつ受け取るコールバック) です。
	 * </p>
	 * <p>
	 * cache_wsdl オプションは、
	 * <b>WSDL_CACHE_NONE</b>、
	 * <b>WSDL_CACHE_DISK</b>、
	 * <b>WSDL_CACHE_MEMORY</b> あるいは
	 * <b>WSDL_CACHE_BOTH</b> のいずれかです。
	 * </p>
	 * <p>
	 * その他には features というオプションもあり、
	 * <b>SOAP_WAIT_ONE_WAY_CALLS</b>、
	 * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>、
	 * <b>SOAP_USE_XSI_ARRAY_TYPE</b> を設定することができます。
	 * </p>
	 * <p>
	 * send_errors オプションを <b>FALSE</b> にすると、
	 * 個別のエラーメッセージではなく汎用的なメッセージ ("Internal error") を送信できます。
	 * </p>
	 */
	public function SoapServer($wsdl, array $options = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * SoapServer の持続モードを設定する
	 * @link http://php.net/manual/ja/soapserver.setpersistence.php
	 * @param int $mode <p>
	 * SOAP_PERSISTENCE_XXX 定数のうちの一つ
	 * </p>
	 * <p>
	 * <b>SOAP_PERSISTENCE_REQUEST</b> - SoapServer のデータはリクエスト間で持続しません。
	 * これは、SoapServer オブジェクトで setClass をコールした直後のデフォルトの挙動です。
	 * </p>
	 * <p>
	 * <b>SOAP_PERSISTENCE_SESSION</b> - SoapServer のデータをリクエスト間で持続させます。
	 * これを実現するために、SoapServer クラスのデータをシリアライズして
	 * $_SESSION['_bogus_session_name'] に格納します。
	 * そのため、このモードを設定する前に
	 * <b>session_start</b> をコールしておく必要があります。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setPersistence(int $mode): void {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SOAP リクエストを処理するクラスを設定する
	 * @link http://php.net/manual/ja/soapserver.setclass.php
	 * @param string $class_name <p>
	 * エクスポートするクラス名
	 * </p>
	 * @param mixed $args [optional] <p>
	 * これらのオプションパラメータは、
	 * オブジェクト作成時にデフォルトのクラスコンストラクタに渡されます。
	 * </p>
	 * @param mixed $_ [optional]
	 * @return void 値を返しません。
	 */
	public function setClass(string $class_name, $args = null, $_ = null): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * SOAP リクエストの処理に使用するオブジェクトを設定する
	 * @link http://php.net/manual/ja/soapserver.setobject.php
	 * @param object $object <p>
	 * リクエストを処理するオブジェクト。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setObject($object): void {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SOAP リクエストによって処理される単一もしくはいくつかの関数を追加する
	 * @link http://php.net/manual/ja/soapserver.addfunction.php
	 * @param mixed $functions <p>
	 * 単一の関数をエクスポートするには、
	 * このパラメータに文字列として関数名を渡してください。
	 * </p>
	 * <p>
	 * いくつかの関数をエクスポートするには、関数名の配列を渡してください。
	 * </p>
	 * <p>
	 * 全ての関数をエクスポートする場合、特別な定数
	 * <b>SOAP_FUNCTIONS_ALL</b>
	 * を渡してください。
	 * </p>
	 * <p>
	 * <i>functions</i> は、全ての入力引数を
	 * WSDL ファイルで定義されている順序と同じ順序で受け取る必要があり
	 * (これらの関数は出力パラメータを引数として受け取ることはありません)
	 * 、一つまたは複数の値を返す必要があります。
	 * 複数の値を返すには、名前付き出力パラメータの配列を返す必要があります。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function addFunction($functions): void {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 定義されている関数の一覧を返す
	 * @link http://php.net/manual/ja/soapserver.getfunctions.php
	 * @return array 定義されている関数の配列を返します。
	 */
	public function getFunctions(): array {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SOAP リクエストを処理する
	 * @link http://php.net/manual/ja/soapserver.handle.php
	 * @param string $soap_request [optional] <p>
	 * SOAP リクエスト。もし引数が省略された場合、
	 * HTTP リクエストで POST されたデータの中にリクエストがあるとみなします。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function handle(string $soap_request = null): void {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * エラーを示す SoapServer フォールト を発行する
	 * @link http://php.net/manual/ja/soapserver.fault.php
	 * @param string $code <p>
	 * 返したいエラーコード。
	 * </p>
	 * @param string $string <p>
	 * エラーについての簡単な説明。
	 * </p>
	 * @param string $actor [optional] <p>
	 * フォールトを引き起こしたアクターをあらわす文字列。
	 * </p>
	 * @param string $details [optional] <p>
	 * フォールトについての詳細。
	 * </p>
	 * @param string $name [optional] <p>
	 * フォールトの名前。これは WSDL ファイルにある名前を使うことができます。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function fault(string $code, string $string, string $actor = null, string $details = null, string $name = null): void {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SOAP ヘッダをレスポンスに追加する
	 * @link http://php.net/manual/ja/soapserver.addsoapheader.php
	 * @param SoapHeader $object <p>
	 * 返すヘッダ。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function addSoapHeader(SoapHeader $object): void {}

}

/**
 * SOAP fault をあらわします。
 * @link http://php.net/manual/ja/class.soapfault.php
 */
class SoapFault extends Exception implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SoapFault コンストラクタ
	 * @link http://php.net/manual/ja/soapfault.soapfault.php
	 * @param string $faultcode <p>
	 * <b>SoapFault</b> のエラーコード
	 * </p>
	 * @param string $faultstring <p>
	 * <b>SoapFault</b> のエラーメッセージ
	 * </p>
	 * @param string $faultactor [optional] <p>
	 * エラーの原因となったアクターを識別する文字列
	 * </p>
	 * @param string $detail [optional] <p>
	 * エラーの原因についての詳細な情報
	 * </p>
	 * @param string $faultname [optional] <p>
	 * WSDL からの厳密なフォールトエンコーディングを取得するために利用可能
	 * </p>
	 * @param string $headerfault [optional] <p>
	 * レスポンスヘッダにおいて SOAP
	 * ハンドラがエラーの報告処理を行っている間に利用可能
	 * </p>
	 */
	public function SoapFault(string $faultcode, string $faultstring, string $faultactor = null, string $detail = null, string $faultname = null, string $headerfault = null) {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SoapFault の文字列表現を取得する
	 * @link http://php.net/manual/ja/soapfault.tostring.php
	 * @return string SoapFault を文字列であらわした内容を返します。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外をコピーする
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外を作成する
	 * @link http://php.net/manual/ja/exception.construct.php
	 * @param string $message [optional] <p>
	 * スローする例外メッセージ。
	 * </p>
	 * @param int $code [optional] <p>
	 * 例外コード。
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * 以前に使われた例外。例外の連結に使用します。
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外メッセージを取得する
	 * @link http://php.net/manual/ja/exception.getmessage.php
	 * @return string 例外メッセージ文字列を返します。
	 */
	final public function getMessage(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外コードを取得する
	 * @link http://php.net/manual/ja/exception.getcode.php
	 * @return mixed 例外コードを整数値で返します。しかし、
	 * <b>Exception</b> クラスを継承したクラスでは、違う型を返すこともあります
	 * (たとえば <b>PDOException</b> は文字列を返します)。
	 */
	final public function getCode() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られたファイルを取得する
	 * @link http://php.net/manual/ja/exception.getfile.php
	 * @return string 例外が作られたファイルの名前を返します。
	 */
	final public function getFile(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られた行を取得する
	 * @link http://php.net/manual/ja/exception.getline.php
	 * @return int 例外が作られた行番号を返します。
	 */
	final public function getLine(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを取得する
	 * @link http://php.net/manual/ja/exception.gettrace.php
	 * @return array 例外のスタックトレースを配列で返します。
	 */
	final public function getTrace(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 前の例外を返す
	 * @link http://php.net/manual/ja/exception.getprevious.php
	 * @return Exception 前に発生した <b>Throwable</b>、あるいはそれが存在しない場合は <b>NULL</b> を返します。
	 */
	final public function getPrevious(): Exception {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを文字列で取得する
	 * @link http://php.net/manual/ja/exception.gettraceasstring.php
	 * @return string 例外のスタックトレースを文字列で返します。
	 */
	final public function getTraceAsString(): string {}

}

/**
 * SOAP コールのパラメータをあらわします。
 * @link http://php.net/manual/ja/class.soapparam.php
 */
class SoapParam  {

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SoapParam コンストラクタ
	 * @link http://php.net/manual/ja/soapparam.soapparam.php
	 * @param mixed $data <p>
	 * 渡すもしくは返すデータ。 PHP
	 * の値としてこのパラメータを直接渡すことができますが、この場合、
	 * paramN という名前が付けられますので SOAP
	 * サービスがこれを理解しないかも知れません。
	 * </p>
	 * @param string $name <p>
	 * パラメータの名前
	 * </p>
	 */
	public function SoapParam($data, string $name) {}

}

/**
 * SOAP ヘッダをあらわします。
 * @link http://php.net/manual/ja/class.soapheader.php
 */
class SoapHeader  {

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SoapHeader コンストラクタ
	 * @link http://php.net/manual/ja/soapheader.soapheader.php
	 * @param string $namespace <p>
	 * SOAP ヘッダ要素の名前空間
	 * </p>
	 * @param string $name <p>
	 * SOAP ヘッダ要素の名前
	 * </p>
	 * @param mixed $data [optional] <p>
	 * SOAP ヘッダの内容。PHP の値もしくは
	 * <b>SoapVar</b> オブジェクトです。
	 * </p>
	 * @param bool $mustunderstand [optional]
	 * @param string $actor [optional] <p>
	 * SOAP ヘッダ要素の actor 属性の値
	 * </p>
	 */
	public function SoapHeader(string $namespace, string $name, $data = null, bool $mustunderstand = false, string $actor = null) {}

}

/**
 * (Unknown)<br/>
 * SOAP エラーハンドラを使用するかどうかを設定する
 * @link http://php.net/manual/ja/function.use-soap-error-handler.php
 * @param bool $handler [optional] <p>
 * <b>TRUE</b> に設定すると、エラーの詳細をクライアントに送信します。
 * </p>
 * @return bool 元の値を返します。
 */
function use_soap_error_handler(bool $handler = true): bool {}

/**
 * (Unknown)<br/>
 * SOAP コールが失敗したかどうかを調べる
 * @link http://php.net/manual/ja/function.is-soap-fault.php
 * @param mixed $object <p>
 * 検査するオブジェクト
 * </p>
 * @return bool エラー時に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function is_soap_fault($object): bool {}

define ('SOAP_1_1', 1);
define ('SOAP_1_2', 2);
define ('SOAP_PERSISTENCE_SESSION', 1);
define ('SOAP_PERSISTENCE_REQUEST', 2);
define ('SOAP_FUNCTIONS_ALL', 999);
define ('SOAP_ENCODED', 1);
define ('SOAP_LITERAL', 2);
define ('SOAP_RPC', 1);
define ('SOAP_DOCUMENT', 2);
define ('SOAP_ACTOR_NEXT', 1);
define ('SOAP_ACTOR_NONE', 2);
define ('SOAP_ACTOR_UNLIMATERECEIVER', 3);
define ('SOAP_COMPRESSION_ACCEPT', 32);
define ('SOAP_COMPRESSION_GZIP', 0);
define ('SOAP_COMPRESSION_DEFLATE', 16);
define ('SOAP_AUTHENTICATION_BASIC', 0);
define ('SOAP_AUTHENTICATION_DIGEST', 1);
define ('UNKNOWN_TYPE', 999998);
define ('XSD_STRING', 101);
define ('XSD_BOOLEAN', 102);
define ('XSD_DECIMAL', 103);
define ('XSD_FLOAT', 104);
define ('XSD_DOUBLE', 105);
define ('XSD_DURATION', 106);
define ('XSD_DATETIME', 107);
define ('XSD_TIME', 108);
define ('XSD_DATE', 109);
define ('XSD_GYEARMONTH', 110);
define ('XSD_GYEAR', 111);
define ('XSD_GMONTHDAY', 112);
define ('XSD_GDAY', 113);
define ('XSD_GMONTH', 114);
define ('XSD_HEXBINARY', 115);
define ('XSD_BASE64BINARY', 116);
define ('XSD_ANYURI', 117);
define ('XSD_QNAME', 118);
define ('XSD_NOTATION', 119);
define ('XSD_NORMALIZEDSTRING', 120);
define ('XSD_TOKEN', 121);
define ('XSD_LANGUAGE', 122);
define ('XSD_NMTOKEN', 123);
define ('XSD_NAME', 124);
define ('XSD_NCNAME', 125);
define ('XSD_ID', 126);
define ('XSD_IDREF', 127);
define ('XSD_IDREFS', 128);
define ('XSD_ENTITY', 129);
define ('XSD_ENTITIES', 130);
define ('XSD_INTEGER', 131);
define ('XSD_NONPOSITIVEINTEGER', 132);
define ('XSD_NEGATIVEINTEGER', 133);
define ('XSD_LONG', 134);
define ('XSD_INT', 135);
define ('XSD_SHORT', 136);
define ('XSD_BYTE', 137);
define ('XSD_NONNEGATIVEINTEGER', 138);
define ('XSD_UNSIGNEDLONG', 139);
define ('XSD_UNSIGNEDINT', 140);
define ('XSD_UNSIGNEDSHORT', 141);
define ('XSD_UNSIGNEDBYTE', 142);
define ('XSD_POSITIVEINTEGER', 143);
define ('XSD_NMTOKENS', 144);
define ('XSD_ANYTYPE', 145);
define ('XSD_ANYXML', 147);
define ('APACHE_MAP', 200);
define ('SOAP_ENC_OBJECT', 301);
define ('SOAP_ENC_ARRAY', 300);
define ('XSD_1999_TIMEINSTANT', 401);
define ('XSD_NAMESPACE', "http://www.w3.org/2001/XMLSchema");
define ('XSD_1999_NAMESPACE', "http://www.w3.org/1999/XMLSchema");
define ('SOAP_SINGLE_ELEMENT_ARRAYS', 1);
define ('SOAP_WAIT_ONE_WAY_CALLS', 2);
define ('SOAP_USE_XSI_ARRAY_TYPE', 4);
define ('WSDL_CACHE_NONE', 0);
define ('WSDL_CACHE_DISK', 1);
define ('WSDL_CACHE_MEMORY', 2);
define ('WSDL_CACHE_BOTH', 3);

/**
 * PHP 5.5.0 以降
 * @link http://php.net/manual/ja/soap.constants.php
 */
define ('SOAP_SSL_METHOD_TLS', 0);

/**
 * PHP 5.5.0 以降
 * @link http://php.net/manual/ja/soap.constants.php
 */
define ('SOAP_SSL_METHOD_SSLv2', 1);

/**
 * PHP 5.5.0 以降
 * @link http://php.net/manual/ja/soap.constants.php
 */
define ('SOAP_SSL_METHOD_SSLv3', 2);

/**
 * PHP 5.5.0 以降
 * @link http://php.net/manual/ja/soap.constants.php
 */
define ('SOAP_SSL_METHOD_SSLv23', 3);

// End of soap v.7.0.19
?>
