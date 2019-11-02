<?php



namespace {

	/**
	 * <p>SoapClient クラスは » SOAP 1.1、» SOAP 1.2 サーバー用のクライアントとなります。 WSDL モードあるいは non-WSDL モードで動作します。</p>
	 * @link https://php.net/manual/ja/class.soapclient.php
	 * @since PHP 5, PHP 7
	 */
	class SoapClient {

		/**
		 * SoapClient コンストラクタ
		 * <p>このコンストラクタは、<i>WSDL</i> モードもしくは <i>非 WSDL</i> モードで SoapClient オブジェクトを生成します。</p>
		 * @param mixed $wsdl <p><i>WSDL</i> ファイルの URI もしくは <i>非 WSDL</i> モードの場合 <b><code>NULL</code></b></p>  <p><b>注意</b>:</p> <p>開発中は、WSDL のキャッシュを php.ini の <i>soap.wsdl_cache_ttl</i> で無効にしておくとよいでしょう。 そうしないと、WSDL を変更しても <i>soap.wsdl_cache_ttl</i> で設定した時間が経過するまで それが反映されなくなります。</p>
		 * @param array $options <p>オプションの配列。もし WSDL モードで動作させる場合、 このパラメータはオプションです。非 WSDL モードで動作させる場合、 <i>location</i> と <i>uri</i> オプションを指定する必要があります。ここで、 <i>location</i> はリクエストの送り先である SOAP サーバーの URL、 <i>uri</i> は SOAP サービスのターゲット名前空間です。</p> <p><i>style</i> および <i>use</i> オプション は非 WSDL モードでのみ動作します。 WSDL モードでは、これらは WSDL ファイルで指定されます。</p> <p><i>soap_version</i> オプションは、 <b><code>SOAP_1_1</code></b> あるいは <b><code>SOAP_1_2</code></b> のどちらかを指定しなければいけません。それぞれ SOAP 1.1、SOAP 1.2 を表します。 省略した場合は 1.1 を使います。</p> <p>HTTP 認証用として、<i>login</i> および <i>password</i> オプションが使用可能です。 プロキシサーバー経由で HTTP 接続を確立する場合は、 <i>proxy_host</i>, <i>proxy_port</i>, <i>proxy_login</i> および <i>proxy_password</i> の各オプションを使用してください。 HTTPS クライアント証明書による認証には <i>local_cert</i> と <i>passphrase</i> を使用します。認証情報は <i>authentication</i> オプションで指定します。認証方式は <b><code>SOAP_AUTHENTICATION_BASIC</code></b> (デフォルト) あるいは <b><code>SOAP_AUTHENTICATION_DIGEST</code></b> のいずれかとなります。</p> <p><i>compression</i> オプションにより、 HTTP SOAP リクエストやレスポンスの圧縮を行うことができます。</p> <p><i>encoding</i> オプションは内部的な文字エンコーディングを定義します。 このオプションは SOAP リクエストのエンコーディング (常に utf-8) を変更しませんが、その中の文字列を変換します。</p> <p><i>trace</i> オプションはリクエストのトレースを有効にします。 失敗したときにバックトレースが可能となります。 デフォルトは <b><code>FALSE</code></b> です。</p> <p><i>classmap</i> オプションは WSDL 型を PHP クラスにマッピングするために使用可能です。 このオプションには、キーとしてWSDL 型、値として PHP クラスの名前を持つ配列を指定する必要があります。</p> <p>boolean のオプション <i>trace</i> を設定すると、  SoapClient-&gt;__getLastRequest、  SoapClient-&gt;__getLastRequestHeaders、  SoapClient-&gt;__getLastResponse および  SoapClient-&gt;__getLastResponseHeaders といったメソッドが使用できるようになります。</p> <p><i>exceptions</i> オプションは boolean 値で、soap のエラー時に  SoapFault 型の例外をスローさせるかどうかを設定します。</p> <p><i>connection_timeout</i> オプションは、SOAP サービスに接続する際のタイムアウト秒数を指定します。 これを使用しても、レスポンスが遅いサービスのタイムアウトを定義することはできません。 サービスのコールが完了するまでの待ち時間を制限するには、設定項目 default_socket_timeout を使用します。</p> <p><i>typemap</i> オプションは、型マッピングの配列です。 この配列のキーは <i>type_name</i>、 <i>type_ns</i> (名前空間 URI)、<i>from_xml</i> (引数として文字列をひとつ受け取るコールバック) そして <i>to_xml</i> (引数としてオブジェクトをひとつ受け取るコールバック) です。</p> <p><i>cache_wsdl</i> オプションは <b><code>WSDL_CACHE_NONE</code></b>、 <b><code>WSDL_CACHE_DISK</code></b>、 <b><code>WSDL_CACHE_MEMORY</code></b> あるいは <b><code>WSDL_CACHE_BOTH</code></b> のいずれかです。</p> <p><i>user_agent</i> オプションは、 <i>User-Agent</i> ヘッダで使用する文字列を指定します。</p> <p><i>stream_context</i> オプションは、 context 用のリソースです。</p> <p><i>features</i> オプションは <b><code>SOAP_SINGLE_ELEMENT_ARRAYS</code></b>、 <b><code>SOAP_USE_XSI_ARRAY_TYPE</code></b>、 <b><code>SOAP_WAIT_ONE_WAY_CALLS</code></b> のビットマスクです。</p> <p><i>keep_alive</i> オプションは boolean 値で、 <i>Connection: Keep-Alive</i> ヘッダーと <i>Connection: close</i> ヘッダーのどちらを送信するかを決めます。</p> <p><i>ssl_method</i> オプションは <b><code>SOAP_SSL_METHOD_TLS</code></b> か <b><code>SOAP_SSL_METHOD_SSLv2</code></b>、 <b><code>SOAP_SSL_METHOD_SSLv3</code></b>、あるいは <b><code>SOAP_SSL_METHOD_SSLv23</code></b> のいずれかです。</p>
		 * @return self
		 * @link https://php.net/manual/ja/soapclient.soapclient.php
		 * @since PHP 5, PHP 7
		 */
		public function SoapClient($wsdl, array $options = NULL) {}

		/**
		 * SOAP 関数をコールする (非推奨)
		 * <p>このメソッドを直接呼ぶのは推奨しません。 通常、SOAP の関数は SoapClient オブジェクトのメソッドとして呼べるようになっています。 それができない場合、あるいは追加オプションを指定する必要がある場合は、 <code>SoapClient::__soapCall()</code> を使いましょう。</p>
		 * @param string $function_name
		 * @param array $arguments
		 * @return mixed
		 * @link https://php.net/manual/ja/soapclient.call.php
		 * @since PHP 5, PHP 7
		 */
		public function __call(string $function_name, array $arguments) {}

		/**
		 * SoapClient constructor
		 * <p>この関数は次の関数のエイリアスです。 <code>SoapClient::SoapClient()</code></p>
		 * @link https://php.net/manual/ja/soapclient.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}

		/**
		 * SOAP リクエストを実行する
		 * <p>HTTP 上で SOAP リクエストを実行します。</p><p>異なるトランスポート層や追加の XML を処理する、もしくは他の目的のために サブクラスでこのメソッドをオーバーライドする事ができます。</p>
		 * @param string $request <p>XML SOAP リクエスト</p>
		 * @param string $location <p>リクエスト先の URL</p>
		 * @param string $action <p>SOAP アクション</p>
		 * @param int $version <p>SOAP バージョン</p>
		 * @param int $one_way <p><i>one_way</i> に 1 を設定すると、このメソッドは何も返しません。 レスポンスが不要なときにこれを使用します。</p>
		 * @return string <p>XML SOAP レスポンス</p>
		 * @link https://php.net/manual/ja/soapclient.dorequest.php
		 * @since PHP 5, PHP 7
		 */
		public function __doRequest(string $request, string $location, string $action, int $version, int $one_way = 0): string {}

		/**
		 * Get list of cookies
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return array
		 * @link https://php.net/manual/ja/soapclient.getcookies.php
		 * @since PHP 5 >= 5.4.30, PHP 7
		 */
		public function __getCookies(): array {}

		/**
		 * SOAP 関数の一覧を返す
		 * <p>ウェブサービスの WSDL に記述されている関数の配列を返します。</p><p><b>注意</b>:</p><p>この関数は WSDL モードでのみ動作します。</p>
		 * @return array <p>SOAP 関数のプロトタイプ、返り値の型、関数名、型ヒントつきパラメータの配列を返します。</p>
		 * @link https://php.net/manual/ja/soapclient.getfunctions.php
		 * @since PHP 5, PHP 7
		 */
		public function __getFunctions(): array {}

		/**
		 * 直近の SOAP リクエストを返す
		 * <p>直近の SOAP リクエストで送信された XML を返します。</p><p><b>注意</b>:</p><p>このメソッドは、オプション <i>trace</i> を指定して SoapClient が作成されている場合のみ使用可能です。</p>
		 * @return string <p>直近の SOAP リクエストを XML 文字列で返します。</p>
		 * @link https://php.net/manual/ja/soapclient.getlastrequest.php
		 * @since PHP 5, PHP 7
		 */
		public function __getLastRequest(): string {}

		/**
		 * 直近の SOAP リクエストヘッダを返す
		 * <p>直近の SOAP リクエストヘッダを返します。</p><p><b>注意</b>:</p><p>このメソッドは、オプション <i>trace</i> を指定して SoapClient が作成されている場合のみ使用可能です。</p>
		 * @return string <p>直近の SOAP リクエストヘッダ</p>
		 * @link https://php.net/manual/ja/soapclient.getlastrequestheaders.php
		 * @since PHP 5, PHP 7
		 */
		public function __getLastRequestHeaders(): string {}

		/**
		 * 直近の SOAP レスポンスを返す
		 * <p>直近の SOAP レスポンスで受信した XML を返します。</p><p><b>注意</b>:</p><p>このメソッドは、オプション <i>trace</i> を指定して SoapClient が作成されている場合のみ使用可能です。</p>
		 * @return string <p>直近の SOAP レスポンスを XML 文字列で返します。</p>
		 * @link https://php.net/manual/ja/soapclient.getlastresponse.php
		 * @since PHP 5, PHP 7
		 */
		public function __getLastResponse(): string {}

		/**
		 * 直近の SOAP レスポンスヘッダを返す
		 * <p>直近の SOAP レスポンスヘッダを返します。</p><p><b>注意</b>:</p><p>このメソッドは、オプション <i>trace</i> を指定して SoapClient が作成されている場合のみ使用可能です。</p>
		 * @return string <p>直近の SOAP レスポンスヘッダ</p>
		 * @link https://php.net/manual/ja/soapclient.getlastresponseheaders.php
		 * @since PHP 5, PHP 7
		 */
		public function __getLastResponseHeaders(): string {}

		/**
		 * SOAP 型の一覧を返す
		 * <p>ウェブサービスの WSDL で定義されている型の配列を返します。</p><p><b>注意</b>:</p><p>この関数は WSDL モードでのみ動作します。</p>
		 * @return array <p>SOAP 型の配列を返します。すべての構造や型が含まれています。</p>
		 * @link https://php.net/manual/ja/soapclient.gettypes.php
		 * @since PHP 5, PHP 7
		 */
		public function __getTypes(): array {}

		/**
		 * SOAP リクエストと共に送信されるクッキーを設定する
		 * <p>SOAP リクエストと共に送信されるクッキーを定義します。</p><p><b>注意</b>:</p><p>このメソッドをコールすることで、その後のすべての SoapClient メソッドコール に影響します。</p>
		 * @param string $name <p>クッキーの名前</p>
		 * @param string $value <p>クッキーの値。指定されない場合、クッキーは削除されます。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/soapclient.setcookie.php
		 * @since PHP 5 >= 5.0.4, PHP 7
		 */
		public function __setCookie(string $name, string $value = NULL): void {}

		/**
		 * 使用するウェブサービスの場所を設定する
		 * <p>それ以降の SOAP リクエストで使用するエンドポイント URL を設定します。 これは、SoapClient を作成する際に <i>location</i> オプションを指定するのと同じことです。</p><p><b>注意</b>:</p><p>このメソッドのコールは必須ではありません。SoapClient は、デフォルトで WSDL ファイルから取得したエンドポイントを使用します。</p>
		 * @param string $new_location <p>新しいエンドポイント URL。</p>
		 * @return string <p>それまでのエンドポイント URL を返します。</p>
		 * @link https://php.net/manual/ja/soapclient.setlocation.php
		 * @since PHP 5 >= 5.0.4, PHP 7
		 */
		public function __setLocation(string $new_location = NULL): string {}

		/**
		 * 以降のコール用の SOAP ヘッダを設定する
		 * <p>SOAP リクエストで送信するヘッダを定義します。</p><p><b>注意</b>:</p><p>このメソッドをコールすると、それまでの値はすべて上書きされます。</p>
		 * @param mixed $soapheaders <p>設定したいヘッダ。SoapHeader オブジェクト、あるいは SoapHeader オブジェクトの配列です。 省略したり <b><code>NULL</code></b> を設定したりした場合はヘッダが削除されます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/soapclient.setsoapheaders.php
		 * @since PHP 5 >= 5.0.5, PHP 7
		 */
		public function __setSoapHeaders($soapheaders = NULL): bool {}

		/**
		 * SOAP 関数をコールする
		 * <p>本メソッドは、SOAP コールを行う低レベル API 関数です。 通常、WSDL モードでは、SOAP 関数を SoapClient のメソッドとして簡単にコールすることができます。 本メソッドは、<i>soapaction</i> が不明な場合や、 <i>uri</i> がデフォルトと異なっていたり、 SOAP ヘッダを送受信したい場合に、非 WSDL モードを使用する際に有用です。</p><p>エラーの場合、SOAP 関数のコールは、PHP 例外または、例外が無効な場合に SoapFault オブジェクトが返されます。 この関数コールが失敗したかどうかを調べるには、 SoapFault 例外をキャッチするか、</p>
		 * @param string $function_name <p>コールしたい SOAP 関数の名前。</p>
		 * @param array $arguments <p>関数に渡す引数の配列。これは、数値添字配列あるいは連想配列のどちらの形式でもかまいません。 たいていの SOAP サーバーは、パラメータ名を指定しないといけないことに注意しましょう。 そんな場合は、連想配列でないといけません。</p>
		 * @param array $options <p>クライアントに渡すオプションの連想配列。</p> <p><i>location</i> はリモートウェブサービスの URL です。</p> <p><i>uri</i> は SOAP サービスのターゲット名前空間です。</p> <p><i>soapaction</i> はコールしたいアクションです。</p>
		 * @param mixed $input_headers <p>SOAP リクエストで送信するヘッダの配列。</p>
		 * @param array $output_headers <p>指定すると、この配列に SOAP レスポンスのヘッダが書き込まれます。</p>
		 * @return mixed <p>SOAP 関数は、一つまたは複数の値を返す可能性があります。 SOAP 関数によって返される値が 1 つだけの場合、<i>__soapCall</i> の返す値は単純な値 (例えば、整数型、文字列など) になります。 複数の値が返される場合、<i>__soapCall</i> は出力パラメータの名前を連想配列として返します。</p><p>エラーの場合は、SoapClient オブジェクトの作成時に <i>exceptions</i> オプションが <b><code>FALSE</code></b> となっていれば SoapFault オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/soapclient.soapcall.php
		 * @see is_soap_fault()
		 * @since PHP 5, PHP 7
		 */
		public function __soapCall(string $function_name, array $arguments, array $options = NULL, $input_headers = NULL, array &$output_headers = NULL) {}
	}

	/**
	 * <p>SOAP fault をあらわします。</p>
	 * @link https://php.net/manual/ja/class.soapfault.php
	 * @since PHP 5, PHP 7
	 */
	class SoapFault extends \Exception {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * SoapFault コンストラクタ
		 * <p>このクラスは、PHP ハンドラから SOAP フォールトレスポンスを送信した場合に有用です。 <code>faultcode</code>, <code>faultstring</code>, <code>faultactor</code> および <code>detail</code> は SOAP フォールトの標準的な要素です。</p>
		 * @param string $faultcode <p>SoapFault のエラーコード</p>
		 * @param string $faultstring <p>SoapFault のエラーメッセージ</p>
		 * @param string $faultactor <p>エラーの原因となったアクターを識別する文字列</p>
		 * @param string $detail <p>エラーの原因についての詳細な情報</p>
		 * @param string $faultname <p>WSDL からの厳密なフォールトエンコーディングを取得するために利用可能</p>
		 * @param string $headerfault <p>レスポンスヘッダにおいて SOAP ハンドラがエラーの報告処理を行っている間に利用可能</p>
		 * @return self
		 * @link https://php.net/manual/ja/soapfault.soapfault.php
		 * @see is_soap_fault()
		 * @since PHP 5, PHP 7
		 */
		public function SoapFault(string $faultcode, string $faultstring, string $faultactor = NULL, string $detail = NULL, string $faultname = NULL, string $headerfault = NULL) {}

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * SoapFault コンストラクタ
		 * <p>この関数は次の関数のエイリアスです。 <code>SoapFault::SoapFault()</code></p>
		 * @link https://php.net/manual/ja/soapfault.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}

		/**
		 * SoapFault の文字列表現を取得する
		 * <p>SoapFault の文字列表現を返します。</p>
		 * @return string <p>SoapFault を文字列であらわした内容を返します。</p>
		 * @link https://php.net/manual/ja/soapfault.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * <p>SOAP ヘッダをあらわします。</p>
	 * @link https://php.net/manual/ja/class.soapheader.php
	 * @since PHP 5, PHP 7
	 */
	class SoapHeader {

		/**
		 * SoapHeader コンストラクタ
		 * <p>新規 SoapHeader オブジェクトを生成します。</p>
		 * @param string $namespace <p>SOAP ヘッダ要素の名前空間</p>
		 * @param string $name <p>SOAP ヘッダ要素の名前</p>
		 * @param mixed $data <p>SOAP ヘッダの内容。PHP の値もしくは SoapVar オブジェクトです。</p>
		 * @param bool $mustunderstand
		 * @param string $actor <p>SOAP ヘッダ要素の <i>actor</i> 属性の値</p>
		 * @return self
		 * @link https://php.net/manual/ja/soapheader.soapheader.php
		 * @since PHP 5, PHP 7
		 */
		public function SoapHeader(string $namespace, string $name, $data = NULL, bool $mustunderstand = FALSE, string $actor = NULL) {}

		/**
		 * SoapHeader コンストラクタ
		 * <p>この関数は次の関数のエイリアスです。 <code>SoapHeader::SoapHeader()</code></p>
		 * @link https://php.net/manual/ja/soapheader.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}
	}

	/**
	 * <p>SOAP コールのパラメータをあらわします。</p>
	 * @link https://php.net/manual/ja/class.soapparam.php
	 * @since PHP 5, PHP 7
	 */
	class SoapParam {

		/**
		 * SoapParam コンストラクタ
		 * <p>新規 SoapParam オブジェクトを生成します。</p>
		 * @param mixed $data <p>渡すもしくは返すデータ。 PHP の値としてこのパラメータを直接渡すことができますが、この場合、 <i>paramN</i> という名前が付けられますので SOAP サービスがこれを理解しないかも知れません。</p>
		 * @param string $name <p>パラメータの名前</p>
		 * @return self
		 * @link https://php.net/manual/ja/soapparam.soapparam.php
		 * @since PHP 5, PHP 7
		 */
		public function SoapParam($data, string $name) {}

		/**
		 * SoapParam コンストラクタ
		 * <p>この関数は次の関数のエイリアスです。 <code>SoapParam::SoapParam()</code></p>
		 * @link https://php.net/manual/ja/soapparam.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}
	}

	/**
	 * <p>SoapServer クラスは » SOAP 1.1 および » SOAP 1.2 プロトコル用のサーバーとなります。 WSDL サービス記述を使用することもしないこともできます。</p>
	 * @link https://php.net/manual/ja/class.soapserver.php
	 * @since PHP 5, PHP 7
	 */
	class SoapServer {

		/**
		 * SoapServer コンストラクタ
		 * <p>このコンストラクタにより SoapServer オブジェクトを WSDL または非 WSDL モードで作成することが可能です。</p>
		 * @param mixed $wsdl <p>WSDL モードの場合、これに WSDL ファイルの URI を指定する必要があります。 その他の場合、<b><code>NULL</code></b> を指定し、<i>uri</i> オプションを設定する必要があります。</p>
		 * @param array $options <p>デフォルトの SOAP バージョン (<i>soap_version</i>), 内部の文字エンコーディング (<i>encoding</i>), アクターの URI (<i>actor</i>) を指定することができます。</p> <p><i>classmap</i> オプションにより、WSDL 型を PHP のクラスにマッピングすることが可能です。 このオプションには、キーとしてWSDL 型、値として PHP クラスの名前を持つ配列を指定する必要があります。</p> <p><i>typemap</i> オプションは、型マッピングの配列です。 この配列のキーは <i>type_name</i>、 <i>type_ns</i> (名前空間 URI)、<i>from_xml</i> (引数として文字列をひとつ受け取るコールバック) そして <i>to_xml</i> (引数としてオブジェクトをひとつ受け取るコールバック) です。</p> <p><i>cache_wsdl</i> オプションは、 <b><code>WSDL_CACHE_NONE</code></b>、 <b><code>WSDL_CACHE_DISK</code></b>、 <b><code>WSDL_CACHE_MEMORY</code></b> あるいは <b><code>WSDL_CACHE_BOTH</code></b> のいずれかです。</p> <p>その他には <i>features</i> というオプションもあり、 <b><code>SOAP_WAIT_ONE_WAY_CALLS</code></b>、 <b><code>SOAP_SINGLE_ELEMENT_ARRAYS</code></b>、 <b><code>SOAP_USE_XSI_ARRAY_TYPE</code></b> を設定することができます。</p> <p><i>send_errors</i> オプションを <b><code>FALSE</code></b> にすると、 個別のエラーメッセージではなく汎用的なメッセージ ("Internal error") を送信できます。</p>
		 * @return self
		 * @link https://php.net/manual/ja/soapserver.soapserver.php
		 * @since PHP 5, PHP 7
		 */
		public function SoapServer($wsdl, array $options = NULL) {}

		/**
		 * SoapServer コンストラクタ
		 * <p>この関数は次の関数のエイリアスです。 <code>SoapServer::SoapServer()</code></p>
		 * @link https://php.net/manual/ja/soapserver.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}

		/**
		 * SOAP リクエストによって処理される単一もしくはいくつかの関数を追加する
		 * <p>リモートクライアント用に単一もしくは複数の関数をエクスポートします。</p>
		 * @param mixed $functions <p>単一の関数をエクスポートするには、 このパラメータに文字列として関数名を渡してください。</p> <p>いくつかの関数をエクスポートするには、関数名の配列を渡してください。</p> <p>全ての関数をエクスポートする場合、特別な定数 <b><code>SOAP_FUNCTIONS_ALL</code></b> を渡してください。</p>  <p><b>注意</b>:</p> <p><code>functions</code> は、全ての入力引数を WSDL ファイルで定義されている順序と同じ順序で受け取る必要があり (これらの関数は出力パラメータを引数として受け取ることはありません) 、一つまたは複数の値を返す必要があります。 複数の値を返すには、名前付き出力パラメータの配列を返す必要があります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/soapserver.addfunction.php
		 * @since PHP 5, PHP 7
		 */
		public function addFunction($functions): void {}

		/**
		 * SOAP ヘッダをレスポンスに追加する
		 * <p>現在のリクエストから返されるレスポンスに SOAP ヘッダを追加します。</p>
		 * @param \SoapHeader $object <p>返すヘッダ。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/soapserver.addsoapheader.php
		 * @since PHP 5 >= 5.1.3, PHP 7
		 */
		public function addSoapHeader(\SoapHeader $object): void {}

		/**
		 * エラーを示す SoapServer フォールト を発行する
		 * <p>現在のリクエストに対するレスポンスとして、エラーを表す内容をクライアントに送信します。</p><p><b>注意</b>:</p><p>これは、リクエストを処理する際にのみコールされます。</p>
		 * @param string $code <p>返したいエラーコード。</p>
		 * @param string $string <p>エラーについての簡単な説明。</p>
		 * @param string $actor <p>フォールトを引き起こしたアクターをあらわす文字列。</p>
		 * @param string $details <p>フォールトについての詳細。</p>
		 * @param string $name <p>フォールトの名前。これは WSDL ファイルにある名前を使うことができます。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/soapserver.fault.php
		 * @since PHP 5, PHP 7
		 */
		public function fault(string $code, string $string, string $actor = NULL, string $details = NULL, string $name = NULL): void {}

		/**
		 * 定義されている関数の一覧を返す
		 * <p>SoapServer オブジェクトで定義されている関数の一覧を返します。 このメソッドは、 <code>SoapServer::addFunction()</code> もしくは <code>SoapServer::setClass()</code> で追加された全ての関数の一覧を返します。</p>
		 * @return array <p>定義されている関数の配列を返します。</p>
		 * @link https://php.net/manual/ja/soapserver.getfunctions.php
		 * @since PHP 5, PHP 7
		 */
		public function getFunctions(): array {}

		/**
		 * SOAP リクエストを処理する
		 * <p>SOAP リクエストを処理し、必要な関数をコールし、レスポンスを返送します。</p>
		 * @param string $soap_request <p>SOAP リクエスト。もし引数が省略された場合、 HTTP リクエストで POST されたデータの中にリクエストがあるとみなします。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/soapserver.handle.php
		 * @since PHP 5, PHP 7
		 */
		public function handle(string $soap_request = NULL): void {}

		/**
		 * SOAP リクエストを処理するクラスを設定する
		 * <p>指定されたクラスから全てのメソッドをエクスポートします。</p><p>このオブジェクトは <code>SoapServer::setPersistence()</code> メソッドにより指定した PHP セッションに関するリクエストをまたがる 持続性を持たせることができます</p>
		 * @param string $class_name <p>エクスポートするクラス名</p>
		 * @param mixed $_ <p>これらのオプションパラメータは、 オブジェクト作成時にデフォルトのクラスコンストラクタに渡されます。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/soapserver.setclass.php
		 * @since PHP 5, PHP 7
		 */
		public function setClass(string $class_name, $_ = NULL): void {}

		/**
		 * SOAP リクエストの処理に使用するオブジェクトを設定する
		 * <p>SOAP リクエストを処理するハンドラとして、<code>SoapServer::setClass()</code> のような単なるクラスではなく特定のオブジェクトを設定します。</p>
		 * @param object $object <p>リクエストを処理するオブジェクト。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/soapserver.setobject.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setObject(object $object): void {}

		/**
		 * SoapServer の持続モードを設定する
		 * <p>この関数により、SoapServer オブジェクトの永続状態をリクエスト間で変更できるようになります。 この関数は、リクエスト間でのデータの保存に PHP のセッションを使います。 このメソッドが SoapServer に影響を及ぼすのは、<code>SoapServer::setClass()</code> を使って関数をエクスポートした後となります。</p><p><b>注意</b>:</p><p>持続モード <b><code>SOAP_PERSISTENCE_SESSION</code></b> は、そのクラスのオブジェクトについてのみ持続させます。 クラスのスタティックなデータについては対象となりません。 self::$bar ではなく $this-&gt;bar を使用しましょう。</p><p><b>注意</b>:</p><p><b><code>SOAP_PERSISTENCE_SESSION</code></b> は、クラスのオブジェクト上のデータもリクエスト間でシリアライズします。 リソース (PDO など) を適切に扱うには、マジックメソッド __wakeup() および __sleep() を使う必要があります。</p>
		 * @param int $mode <p><i>SOAP_PERSISTENCE_XXX</i> 定数のうちの一つ</p> <p><b><code>SOAP_PERSISTENCE_REQUEST</code></b> - SoapServer のデータはリクエスト間で持続しません。 これは、SoapServer オブジェクトで setClass をコールした直後のデフォルトの挙動です。</p> <p><b><code>SOAP_PERSISTENCE_SESSION</code></b> - SoapServer のデータをリクエスト間で持続させます。 これを実現するために、SoapServer クラスのデータをシリアライズして $_SESSION['_bogus_session_name'] に格納します。 そのため、このモードを設定する前に <code>session_start()</code> をコールしておく必要があります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/soapserver.setpersistence.php
		 * @since PHP 5, PHP 7
		 */
		public function setPersistence(int $mode): void {}
	}

	/**
	 * <p>SOAP サービスが使用する変数やオブジェクトをあらわします。</p>
	 * @link https://php.net/manual/ja/class.soapvar.php
	 * @since PHP 5, PHP 7
	 */
	class SoapVar {

		/**
		 * SoapVar コンストラクタ
		 * <p>新規 SoapVar オブジェクトを生成します。</p>
		 * @param mixed $data <p>渡すもしくは返すデータ</p>
		 * @param string $encoding <p>エンコーディング ID。<i>XSD_...</i> 定数のうちの一つ。</p>
		 * @param string $type_name <p>型名</p>
		 * @param string $type_namespace <p>型の名前空間</p>
		 * @param string $node_name <p>XML ノードの名前</p>
		 * @param string $node_namespace <p>XML ノードの名前空間</p>
		 * @return self
		 * @link https://php.net/manual/ja/soapvar.soapvar.php
		 * @since PHP 5, PHP 7
		 */
		public function SoapVar($data, string $encoding, string $type_name = NULL, string $type_namespace = NULL, string $node_name = NULL, string $node_namespace = NULL) {}

		/**
		 * SoapVar コンストラクタ
		 * <p>この関数は次の関数のエイリアスです。 <code>SoapVar::SoapVar()</code></p>
		 * @link https://php.net/manual/ja/soapvar.construct.php
		 * @since PHP 5, PHP 7
		 */
		function __construct() {}
	}

	/**
	 * SOAP コールが失敗したかどうかを調べる
	 * <p>この関数は、SOAP コールが失敗したかどうかを調べたいが、例外を使用したくない 場合に有用です。 この関数を使用するには、オプション <i>exceptions</i> に ゼロまたは <b><code>FALSE</code></b> を指定して SoapClient オブジェクトを作成する必要があります。 この場合、SOAP メソッドは、特別な SoapFault オブジェクトを返します。 このオブジェクトには、フォルトの詳細 (faultcode, faultstring, faultactor および faultdetails) が含まれています。</p><p><i>exceptions</i> が設定されていない場合、 SOAPコールは、エラー時に例外を投げます。 <b>is_soap_fault()</b> は指定したパラメータ SoapFault オブジェクトであるかどうかを調べます。</p>
	 * @param mixed $object <p>検査するオブジェクト</p>
	 * @return bool <p>エラー時に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.is-soap-fault.php
	 * @since PHP 5, PHP 7
	 */
	function is_soap_fault($object): bool {}

	/**
	 * SOAP エラーハンドラを使用するかどうかを設定する
	 * <p>この関数は、SOAP サーバーで SOAP エラーハンドラを使用するかどうかを設定します。 それまでに設定されていた値を返します。 <b><code>TRUE</code></b> に設定すると、 SoapServer アプリケーションでのエラーの詳細が SOAP フォールトメッセージとしてクライアントに送信されます。 <b><code>FALSE</code></b> の場合は PHP の標準エラーハンドラを使います。 デフォルトは、エラーを SOAP フォールトメッセージとしてクライアントに送信します。</p>
	 * @param bool $handler <p><b><code>TRUE</code></b> に設定すると、エラーの詳細をクライアントに送信します。</p>
	 * @return bool <p>元の値を返します。</p>
	 * @link https://php.net/manual/ja/function.use-soap-error-handler.php
	 * @see set_error_handler(), set_exception_handler()
	 * @since PHP 5, PHP 7
	 */
	function use_soap_error_handler(bool $handler = TRUE): bool {}

	/**
	 * 200
	 */
	define('APACHE_MAP', null);

	/**
	 * 1
	 */
	define('SOAP_1_1', null);

	/**
	 * 2
	 */
	define('SOAP_1_2', null);

	/**
	 * 1
	 */
	define('SOAP_ACTOR_NEXT', null);

	/**
	 * 2
	 */
	define('SOAP_ACTOR_NONE', null);

	/**
	 * 3
	 */
	define('SOAP_ACTOR_UNLIMATERECEIVER', null);

	define('SOAP_AUTHENTICATION_BASIC', null);

	/**
	 * 1
	 */
	define('SOAP_AUTHENTICATION_DIGEST', null);

	/**
	 * 32
	 */
	define('SOAP_COMPRESSION_ACCEPT', null);

	/**
	 * 16
	 */
	define('SOAP_COMPRESSION_DEFLATE', null);

	define('SOAP_COMPRESSION_GZIP', null);

	/**
	 * 2
	 */
	define('SOAP_DOCUMENT', null);

	/**
	 * 300
	 */
	define('SOAP_ENC_ARRAY', null);

	/**
	 * 301
	 */
	define('SOAP_ENC_OBJECT', null);

	/**
	 * 1
	 */
	define('SOAP_ENCODED', null);

	/**
	 * 999
	 */
	define('SOAP_FUNCTIONS_ALL', null);

	/**
	 * 2
	 */
	define('SOAP_LITERAL', null);

	/**
	 * 2
	 */
	define('SOAP_PERSISTENCE_REQUEST', null);

	/**
	 * 1
	 */
	define('SOAP_PERSISTENCE_SESSION', null);

	/**
	 * 1
	 */
	define('SOAP_RPC', null);

	/**
	 * 1
	 */
	define('SOAP_SINGLE_ELEMENT_ARRAYS', null);

	/**
	 * PHP 5.5.0 以降
	 */
	define('SOAP_SSL_METHOD_SSLv2', null);

	/**
	 * PHP 5.5.0 以降
	 */
	define('SOAP_SSL_METHOD_SSLv23', null);

	/**
	 * PHP 5.5.0 以降
	 */
	define('SOAP_SSL_METHOD_SSLv3', null);

	/**
	 * PHP 5.5.0 以降
	 */
	define('SOAP_SSL_METHOD_TLS', null);

	/**
	 * 4
	 */
	define('SOAP_USE_XSI_ARRAY_TYPE', null);

	/**
	 * 2
	 */
	define('SOAP_WAIT_ONE_WAY_CALLS', null);

	/**
	 * 999998
	 */
	define('UNKNOWN_TYPE', null);

	/**
	 * 3
	 */
	define('WSDL_CACHE_BOTH', null);

	/**
	 * 1
	 */
	define('WSDL_CACHE_DISK', null);

	/**
	 * 2
	 */
	define('WSDL_CACHE_MEMORY', null);

	define('WSDL_CACHE_NONE', null);

	/**
	 * http://www.w3.org/1999/XMLSchema
	 */
	define('XSD_1999_NAMESPACE', null);

	/**
	 * 401
	 */
	define('XSD_1999_TIMEINSTANT', null);

	/**
	 * 145
	 */
	define('XSD_ANYTYPE', null);

	/**
	 * 117
	 */
	define('XSD_ANYURI', null);

	/**
	 * 147
	 */
	define('XSD_ANYXML', null);

	/**
	 * 116
	 */
	define('XSD_BASE64BINARY', null);

	/**
	 * 102
	 */
	define('XSD_BOOLEAN', null);

	/**
	 * 137
	 */
	define('XSD_BYTE', null);

	/**
	 * 109
	 */
	define('XSD_DATE', null);

	/**
	 * 107
	 */
	define('XSD_DATETIME', null);

	/**
	 * 103
	 */
	define('XSD_DECIMAL', null);

	/**
	 * 105
	 */
	define('XSD_DOUBLE', null);

	/**
	 * 106
	 */
	define('XSD_DURATION', null);

	/**
	 * 130
	 */
	define('XSD_ENTITIES', null);

	/**
	 * 129
	 */
	define('XSD_ENTITY', null);

	/**
	 * 104
	 */
	define('XSD_FLOAT', null);

	/**
	 * 113
	 */
	define('XSD_GDAY', null);

	/**
	 * 114
	 */
	define('XSD_GMONTH', null);

	/**
	 * 112
	 */
	define('XSD_GMONTHDAY', null);

	/**
	 * 111
	 */
	define('XSD_GYEAR', null);

	/**
	 * 110
	 */
	define('XSD_GYEARMONTH', null);

	/**
	 * 115
	 */
	define('XSD_HEXBINARY', null);

	/**
	 * 126
	 */
	define('XSD_ID', null);

	/**
	 * 127
	 */
	define('XSD_IDREF', null);

	/**
	 * 128
	 */
	define('XSD_IDREFS', null);

	/**
	 * 135
	 */
	define('XSD_INT', null);

	/**
	 * 131
	 */
	define('XSD_INTEGER', null);

	/**
	 * 122
	 */
	define('XSD_LANGUAGE', null);

	/**
	 * 134
	 */
	define('XSD_LONG', null);

	/**
	 * 124
	 */
	define('XSD_NAME', null);

	/**
	 * http://www.w3.org/2001/XMLSchema
	 */
	define('XSD_NAMESPACE', null);

	/**
	 * 125
	 */
	define('XSD_NCNAME', null);

	/**
	 * 133
	 */
	define('XSD_NEGATIVEINTEGER', null);

	/**
	 * 123
	 */
	define('XSD_NMTOKEN', null);

	/**
	 * 144
	 */
	define('XSD_NMTOKENS', null);

	/**
	 * 138
	 */
	define('XSD_NONNEGATIVEINTEGER', null);

	/**
	 * 132
	 */
	define('XSD_NONPOSITIVEINTEGER', null);

	/**
	 * 120
	 */
	define('XSD_NORMALIZEDSTRING', null);

	/**
	 * 119
	 */
	define('XSD_NOTATION', null);

	/**
	 * 143
	 */
	define('XSD_POSITIVEINTEGER', null);

	/**
	 * 118
	 */
	define('XSD_QNAME', null);

	/**
	 * 136
	 */
	define('XSD_SHORT', null);

	/**
	 * 101
	 */
	define('XSD_STRING', null);

	/**
	 * 108
	 */
	define('XSD_TIME', null);

	/**
	 * 121
	 */
	define('XSD_TOKEN', null);

	/**
	 * 142
	 */
	define('XSD_UNSIGNEDBYTE', null);

	/**
	 * 140
	 */
	define('XSD_UNSIGNEDINT', null);

	/**
	 * 139
	 */
	define('XSD_UNSIGNEDLONG', null);

	/**
	 * 141
	 */
	define('XSD_UNSIGNEDSHORT', null);

}
