<?php



/**
 * <p>OAuth 拡張モジュールは、データプロバイダとやりとりするためのシンプルなインターフェイスを提供します。 OAuth HTTP 仕様を用いることで、プライベートなリソースを保護します。</p>
 * @link http://php.net/manual/ja/class.oauth.php
 * @since PECL OAuth >= 0.99.1
 */
class OAuth {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.oauth.php#oauth.props.debug
	 */
	public $debug;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.oauth.php#oauth.props.sslchecks
	 */
	public $sslChecks;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.oauth.php#oauth.props.debuginfo
	 */
	public $debugInfo;

	/**
	 * 新しい OAuth オブジェクトを作成する
	 * <p>新しい OAuth オブジェクトを作成します。</p>
	 * @param string $consumer_key <p>サービスプロバイダが提供する consumer key。</p>
	 * @param string $consumer_secret <p>サービスプロバイダが提供する consumer secret。</p>
	 * @param string $signature_method <p>このオプションのパラメータで、使用する署名方式を定義します。 デフォルトは <b><code>OAUTH_SIG_METHOD_HMACSHA1</code></b> (HMAC-SHA1) です。</p>
	 * @param int $auth_type <p>このオプションのパラメータで、OAuth パラメータをコンシューマに渡す方法を定義します。 デフォルトは <b><code>OAUTH_AUTH_TYPE_AUTHORIZATION</code></b> (<i>Authorization</i> ヘッダを使用する) です。</p>
	 * @return self
	 * @link http://php.net/manual/ja/oauth.construct.php
	 * @since PECL OAuth >= 0.99.1
	 */
	public function __construct(string $consumer_key, string $consumer_secret, string $signature_method = 'OAUTH_SIG_METHOD_HMACSHA1', int $auth_type = 0) {}

	/**
	 * デストラクタ
	 * <p>デストラクタです。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/oauth.destruct.php
	 * @since PECL OAuth >= 0.99.9
	 */
	public function __destruct() {}

	/**
	 * デバッグを無効にする
	 * <p>冗長なリクエスト情報を無効にします (デフォルトは無効です)。 あるいは、debug プロパティに <b><code>FALSE</code></b> を設定することによってもデバッグを無効にできます。</p>
	 * @return bool <p><b><code>TRUE</code></b></p>
	 * @link http://php.net/manual/ja/oauth.disabledebug.php
	 * @since PECL OAuth >= 0.99.3
	 */
	public function disableDebug(): bool {}

	/**
	 * リダイレクトを無効にする
	 * <p>リダイレクト先を自動的にたどる機能を無効にし、リクエストを手動でリダイレクトできるようにします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool <p><b><code>TRUE</code></b></p>
	 * @link http://php.net/manual/ja/oauth.disableredirects.php
	 * @since PECL OAuth >= 0.99.9
	 */
	public function disableRedirects(): bool {}

	/**
	 * SSL チェックを無効にする
	 * <p>通常の SSL ピア証明書およびホストのチェックを無効にします。 これは実運用に使うものではありません。 あるいは、<code>sslChecks</code> メンバーに <b><code>FALSE</code></b> を設定することによっても SSL チェックを無効にできます。</p>
	 * @return bool <p><b><code>TRUE</code></b></p>
	 * @link http://php.net/manual/ja/oauth.disablesslchecks.php
	 * @since PECL OAuth >= 0.99.5
	 */
	public function disableSSLChecks(): bool {}

	/**
	 * デバッグを有効にする
	 * <p>デバッグに使用できる、冗長なリクエスト情報の出力を有効にします。 デバッグ情報は <code>debugInfo</code> メンバーに格納されます。 あるいは、<code>debug</code> メンバーに <b><code>FALSE</code></b> 以外の値を設定することによってもデバッグを有効にできます。</p>
	 * @return bool <p><b><code>TRUE</code></b></p>
	 * @link http://php.net/manual/ja/oauth.enabledebug.php
	 * @since PECL OAuth >= 0.99.3
	 */
	public function enableDebug(): bool {}

	/**
	 * リダイレクトを有効にする
	 * <p>自動的にリダイレクトをたどりまず。デフォルトで有効となっています。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool <p><b><code>TRUE</code></b></p>
	 * @link http://php.net/manual/ja/oauth.enableredirects.php
	 * @since PECL OAuth >= 0.99.9
	 */
	public function enableRedirects(): bool {}

	/**
	 * SSL チェックを有効にする
	 * <p>通常の SSL ピア証明書およびホストのチェックを有効にします (デフォルトは有効です)。 あるいは、<code>sslChecks</code> メンバーに <b><code>FALSE</code></b> 以外の値を設定することによっても SSL チェックを有効にできます。</p>
	 * @return bool <p><b><code>TRUE</code></b></p>
	 * @link http://php.net/manual/ja/oauth.enablesslchecks.php
	 * @since PECL OAuth >= 0.99.5
	 */
	public function enableSSLChecks(): bool {}

	/**
	 * OAuth で保護されたリソースを取得する
	 * <p>リソースを取得します。</p>
	 * @param string $protected_resource_url <p>OAuth で保護されたリソースへの URL。</p>
	 * @param array $extra_parameters <p>リソースへのリクエストとともに送信する追加パラメータ。</p>
	 * @param string $http_method <p><b><code>OAUTH_HTTP_METHOD_&#42;</code></b> OAUTH 定数 のいずれか。 GET、POST、PUT、HEAD そして DELETE があります。</p> <p>HEAD (<b><code>OAUTH_HTTP_METHOD_HEAD</code></b>) は、 実際のリクエストの前に (OAuth 認証情報が <i>Authorization</i> ヘッダにあるかどうかなどの) 情報を取得するときに有用です。</p>
	 * @param array $http_headers <p>HTTP クライアントヘッダ (User-Agent や Accept など)。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauth.fetch.php
	 * @since PECL OAuth >= 0.99.1
	 */
	public function fetch(string $protected_resource_url, array $extra_parameters = NULL, string $http_method = NULL, array $http_headers = NULL) {}

	/**
	 * シグネチャを生成する
	 * <p>最後の HTTP メソッド、URL そしてパラメータ文字列あるいは配列にもとづいてシグネチャを生成します。</p>
	 * @param string $http_method <p>リクエストの HTTP メソッド。</p>
	 * @param string $url <p>リクエストの URL。</p>
	 * @param mixed $extra_parameters <p>パラメータ文字列あるいは配列。</p>
	 * @return string <p>生成されたシグネチャを文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/oauth.generatesignature.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function generateSignature(string $http_method, string $url, $extra_parameters = NULL): string {}

	/**
	 * アクセストークンを取得する
	 * <p>アクセストークン、secret そして追加のレスポンスパラメータをサービスプロバイダから取得します。</p>
	 * @param string $access_token_url <p>アクセストークン API の URL。</p>
	 * @param string $verifier_token <p>1.0a をサポートするサービスプロバイダでは、リクエストトークンとアクセストークンを交換する際に <code>verifier_token</code> を渡す必要があります。 <code>verifier_token</code> が <code>$_GET</code> あるいは <code>$_POST</code> に存在する場合は自動的にそれが渡され、 呼び出し側が <code>verifier_token</code> を指定する必要はありません (通常、アクセストークンを oauth_callback URL で交換する場合はこのようになります)。 詳細な情報は » ScalableOAuth を参照ください。</p>
	 * @param string $http_method <p>利用する HTTP メソッド。<i>GET</i> や <i>POST</i> など。</p>
	 * @return array <p>成功した場合は OAuth レスポンスをパースした配列、失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauth.getaccesstoken.php
	 * @since PECL OAuth >= 0.99.1
	 */
	public function getAccessToken(string $access_token_url, string $verifier_token = NULL, string $http_method = NULL): array {}

	/**
	 * CA 情報を取得する
	 * <p>認証局の情報を取得します。ここには、 <code>OAuth::setCaPath()</code> で設定した ca_path や ca_info が含まれます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>認証局の情報を含む配列を返します。返される連想配列のキーには <i>ca_path</i> と <i>ca_info</i> が含まれます。</p>
	 * @link http://php.net/manual/ja/oauth.getcapath.php
	 * @since PECL OAuth >= 0.99.8
	 */
	public function getCAPath(): array {}

	/**
	 * 直近のレスポンスを取得する
	 * <p>直近のリクエストに対するレスポンスをそのままの形式で取得します。</p>
	 * @return string <p>直近のレスポンスを含む文字列を返します。</p>
	 * @link http://php.net/manual/ja/oauth.getlastresponse.php
	 * @since PECL OAuth >= 0.99.1
	 */
	public function getLastResponse(): string {}

	/**
	 * 最後のレスポンスのヘッダを取得する
	 * <p>最後のレスポンスのヘッダを取得します。</p>
	 * @return string <p>最後のレスポンスのヘッダを文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/oauth.getlastresponseheaders.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function getLastResponseHeaders(): string {}

	/**
	 * 直近のレスポンスの HTTP 情報を取得する
	 * <p>直近のレスポンスに関する HTTP 情報を取得します。</p>
	 * @return array <p>直近のリクエストに対するレスポンスの情報を含む配列を返します。 <code>curl_getinfo()</code> の定数が使われます。</p>
	 * @link http://php.net/manual/ja/oauth.getlastresponseinfo.php
	 * @since PECL OAuth >= 0.99.1
	 */
	public function getLastResponseInfo(): array {}

	/**
	 * OAuth ヘッダ文字列シグネチャを生成する
	 * <p>最後の HTTP メソッド、URL そしてパラメータ文字列あるいは配列にもとづいて OAuth ヘッダ文字列シグネチャを生成します。</p>
	 * @param string $http_method <p>リクエストの HTTP メソッド。</p>
	 * @param string $url <p>リクエストの URL。</p>
	 * @param mixed $extra_parameters <p>パラメータ文字列あるいは配列。</p>
	 * @return string <p>生成されたリクエストヘッダを文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/oauth.getrequestheader.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function getRequestHeader(string $http_method, string $url, $extra_parameters = NULL): string {}

	/**
	 * リクエストトークンを取得する
	 * <p>リクエストトークン、secret そして追加のレスポンスパラメータをサービスプロバイダから取得します。</p>
	 * @param string $request_token_url <p>リクエストトークン API の URL。</p>
	 * @param string $callback_url <p>OAuth コールバック URL。<code>callback_url</code> に空の値を渡すと、"oob" に設定されて OAuth 2009.1 advisory を指すことになります。</p>
	 * @param string $http_method <p>利用する HTTP メソッド。<i>GET</i> や <i>POST</i> など。</p>
	 * @return array <p>成功した場合は OAuth レスポンスをパースした配列、失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauth.getrequesttoken.php
	 * @since PECL OAuth >= 0.99.1
	 */
	public function getRequestToken(string $request_token_url, string $callback_url = NULL, string $http_method = NULL): array {}

	/**
	 * 認証方式を設定する
	 * <p>OAuth パラメータをどこで渡すかを設定します。</p>
	 * @param int $auth_type <p><code>auth_type</code> は、次のフラグ (OAuth 1.0 section 5.2 において優先度の高い順) のいずれかです。</p>  <b><code>OAUTH_AUTH_TYPE_AUTHORIZATION</code></b>    OAuth パラメータを HTTP <i>Authorization</i> ヘッダで渡します。    <b><code>OAUTH_AUTH_TYPE_FORM</code></b>    OAuth パラメータを HTTP POST リクエストの本文に追加します。    <b><code>OAUTH_AUTH_TYPE_URI</code></b>    OAuth パラメータをリクエスト URI に追加します。    <b><code>OAUTH_AUTH_TYPE_NONE</code></b>    何もなし。
	 * @return mixed <p>パラメータを正しく設定した場合に <b><code>TRUE</code></b> を返します。 それ以外の場合 (無効な <code>auth_type</code> を渡した場合など) は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauth.setauthtype.php
	 * @since PECL OAuth >= 0.99.1
	 */
	public function setAuthType(int $auth_type) {}

	/**
	 * CA パスおよび情報を設定する
	 * <p>認証局 (CA) のパスと情報を設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $ca_path <p>設定したい CA パス。</p>
	 * @param string $ca_info <p>設定したい CA 情報。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を返します。<code>ca_path</code> あるいは <code>ca_info</code> が無効な形式の場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauth.setcapath.php
	 * @since PECL OAuth >= 0.99.8
	 */
	public function setCAPath(string $ca_path = NULL, string $ca_info = NULL) {}

	/**
	 * 続くリクエスト用のノンスを設定する
	 * <p>それ以降のすべてのリクエスト用のノンスを設定します。</p>
	 * @param string $nonce <p>oauth_nonce の値。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を返します。 <code>nonce</code> が無効な場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauth.setnonce.php
	 * @since PECL OAuth >= 0.99.1
	 */
	public function setNonce(string $nonce) {}

	/**
	 * RSA 証明書を設定する
	 * <p>RSA 証明書を設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $cert <p>RSA 証明書。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合 (RSA 証明書がパースできなかった場合はど) に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauth.setrsacertificate.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function setRSACertificate(string $cert) {}

	/**
	 * setRequestEngine
	 * <p>HTTP リクエストの送信に使うリクエストエンジンを設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $reqengine <p>使いたいリクエストエンジン。<b><code>OAUTH_REQENGINE_STREAMS</code></b> は PHP のストリームを使い、<b><code>OAUTH_REQENGINE_CURL</code></b> は Curl を使います。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/oauth.setrequestengine.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function setRequestEngine(int $reqengine): void {}

	/**
	 * リクエストに固有の SSL チェックを調整する
	 * <p>リクエストに固有の SSL チェックを調整します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $sslcheck
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauth.setsslchecks.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function setSSLChecks(int $sslcheck): bool {}

	/**
	 * タイムスタンプを設定する
	 * <p>それ以降のリクエスト用の OAuth タイムスタンプを設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $timestamp <p>タイムスタンプ。</p>
	 * @return mixed <p><b><code>TRUE</code></b> を返します。 <code>timestamp</code> が無効な形式の場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauth.settimestamp.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function setTimestamp(string $timestamp) {}

	/**
	 * トークンと secret を設定する
	 * <p>それ以降のリクエスト用のトークンと secret を設定します。</p>
	 * @param string $token <p>OAuth トークン。</p>
	 * @param string $token_secret <p>OAuth トークン secret。</p>
	 * @return bool <p><b><code>TRUE</code></b></p>
	 * @link http://php.net/manual/ja/oauth.settoken.php
	 * @since PECL OAuth >= 0.99.1
	 */
	public function setToken(string $token, string $token_secret): bool {}

	/**
	 * OAuth のバージョンを設定する
	 * <p>それ以降のリクエスト用の OAuth のバージョンを設定します。</p>
	 * @param string $version <p>OAuth のバージョン。デフォルトは常に "1.0"。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauth.setversion.php
	 * @since PECL OAuth >= 0.99.1
	 */
	public function setVersion(string $version): bool {}
}

/**
 * <p>この例外は、OAuth 拡張モジュールの使用中に例外エラーが発生したときにスローされます。 デバッグに有用な情報が含まれています。</p>
 * @link http://php.net/manual/ja/class.oauthexception.php
 * @since PECL OAuth >= 0.99.1
 */
class OAuthException extends \Exception {

	/**
	 * @var mixed <p>発生した例外のレスポンス (存在する場合)。</p>
	 * @link http://php.net/manual/ja/class.oauthexception.php#oauthexception.props.lastresponse
	 */
	public $lastResponse;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.oauthexception.php#oauthexception.props.debuginfo
	 */
	public $debugInfo;

	/**
	 * @var string <p>例外メッセージ</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.message
	 */
	protected $message;

	/**
	 * @var int <p>例外コード</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.code
	 */
	protected $code;

	/**
	 * @var string <p>例外が作られたファイル名</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.file
	 */
	protected $file;

	/**
	 * @var int <p>例外が作られた行</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.line
	 */
	protected $line;

	/**
	 * 例外をコピーする
	 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @since PHP 5, PHP 7
	 */
	final private function __clone() {}

	/**
	 * 例外の文字列表現
	 * <p>例外を文字列で表現したものを返します。</p>
	 * @return string <p>例外を文字列で表現したものを返します。</p>
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @since PHP 5, PHP 7
	 */
	public function __toString(): string {}

	/**
	 * 例外コードを取得する
	 * <p>例外コードを返します。</p>
	 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
	 * @link http://php.net/manual/ja/exception.getcode.php
	 * @since PHP 5, PHP 7
	 */
	final public function getCode() {}

	/**
	 * 例外が作られたファイルを取得する
	 * <p>例外が作られたファイルの名前を取得します。</p>
	 * @return string <p>例外が作られたファイルの名前を返します。</p>
	 * @link http://php.net/manual/ja/exception.getfile.php
	 * @since PHP 5, PHP 7
	 */
	final public function getFile(): string {}

	/**
	 * 例外が作られた行を取得する
	 * <p>例外が作られた行番号を取得します。</p>
	 * @return int <p>例外が作られた行番号を返します。</p>
	 * @link http://php.net/manual/ja/exception.getline.php
	 * @since PHP 5, PHP 7
	 */
	final public function getLine(): int {}

	/**
	 * 例外メッセージを取得する
	 * <p>例外メッセージを返します。</p>
	 * @return string <p>例外メッセージ文字列を返します。</p>
	 * @link http://php.net/manual/ja/exception.getmessage.php
	 * @since PHP 5, PHP 7
	 */
	final public function getMessage(): string {}

	/**
	 * 前の例外を返す
	 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
	 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/exception.getprevious.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	final public function getPrevious(): \Exception {}

	/**
	 * スタックトレースを取得する
	 * <p>例外のスタックトレースを返します。</p>
	 * @return array <p>例外のスタックトレースを配列で返します。</p>
	 * @link http://php.net/manual/ja/exception.gettrace.php
	 * @since PHP 5, PHP 7
	 */
	final public function getTrace(): array {}

	/**
	 * スタックトレースを文字列で取得する
	 * <p>例外のスタックトレースを文字列で返します。</p>
	 * @return string <p>例外のスタックトレースを文字列で返します。</p>
	 * @link http://php.net/manual/ja/exception.gettraceasstring.php
	 * @since PHP 5, PHP 7
	 */
	final public function getTraceAsString(): string {}
}

/**
 * <p>OAuth プロバイダを管理するクラスです。</p>
 * <p>別のサイトで公開されている詳細なチュートリアル » Writing an OAuth Provider Service には、このサービスを作成する方法がハンズオン形式で公開されています。 OAuth 拡張モジュールのソースの中には » OAuth プロバイダのサンプル もあります。</p>
 * @link http://php.net/manual/ja/class.oauthprovider.php
 * @since PECL OAuth >= 1.0.0
 */
class OAuthProvider {

	/**
	 * 新しい OAuthProvider オブジェクトを作る
	 * <p>新しい OAuthProvider オブジェクトのインスタンスを作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param array $params_array <p>これらのオプションパラメータを設定できるのは CLI SAPI のみです。</p>
	 * @return self <p>OAuthProvider オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/oauthprovider.construct.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function __construct(array $params_array = NULL) {}

	/**
	 * 必須パラメータを追加する
	 * <p>oauth プロバイダの必須パラメータを追加します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $req_params <p>必須パラメータ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauthprovider.addrequiredparameter.php
	 * @since PECL OAuth >= 1.0.0
	 */
	final public function addRequiredParameter(string $req_params): bool {}

	/**
	 * timestampNonceHandler コールバックをコールする
	 * <p>タイムスタンプハンドラコールバックとして登録した関数をコールします。この関数は <code>OAuthProvider::timestampNonceHandler()</code> で登録します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/oauthprovider.calltimestampnoncehandler.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function callTimestampNonceHandler(): void {}

	/**
	 * consumerNonceHandler コールバックをコールする
	 * <p>コンシューマハンドラコールバックとして登録した関数をコールします。この関数は <code>OAuthProvider::consumerHandler()</code> で登録します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/oauthprovider.callconsumerhandler.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function callconsumerHandler(): void {}

	/**
	 * tokenNonceHandler コールバックをコールする
	 * <p>トークンハンドラコールバックとして登録した関数をコールします。この関数は <code>OAuthProvider::tokenHandler()</code> でコールします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/oauthprovider.calltokenhandler.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function calltokenHandler(): void {}

	/**
	 * oauth リクエストをチェックする
	 * <p>OAuth リクエストをチェックします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $uri <p>オプションの URI、あるいはエンドポイント。</p>
	 * @param string $method <p>HTTP メソッド。 <b><code>OAUTH_HTTP_METHOD_&#42;</code></b> OAuth 定数 のいずれかをオプションで渡します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/oauthprovider.checkoauthrequest.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function checkOAuthRequest(string $uri = NULL, string $method = NULL): void {}

	/**
	 * consumerHandler コールバックを設定する
	 * <p>コンシューマハンドラコールバックを設定します。これは <code>OAuthProvider::callConsumerHandler()</code> でコールされる関数です。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param callable $callback_function <p><code>callable</code> 関数名。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/oauthprovider.consumerhandler.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function consumerHandler(callable $callback_function): void {}

	/**
	 * ランダムなトークンを生成する
	 * <p>擬似乱数を使ってランダムなバイトの文字列を生成します。</p>
	 * @param int $size <p>トークンの長さ。バイト単位で指定します。</p>
	 * @param bool $strong <p><b><code>TRUE</code></b> に設定すると、エントロピーとして <i>/dev/random</i> を使います。 それ以外の場合は、ブロックされることのない <i>/dev/urandom</i> を使います。 このパラメータは、Windows では無視されます。</p>
	 * @return string <p>生成されたトークンをバイト文字列で返します。</p>
	 * @link http://php.net/manual/ja/oauthprovider.generatetoken.php
	 * @see openssl_random_pseudo_bytes(), mcrypt_create_iv()
	 * @since PECL OAuth >= 1.0.0
	 */
	final public static function generateToken(int $size, bool $strong = false): string {}

	/**
	 * is2LeggedEndpoint
	 * <p>2-legged フローあるいはリクエストの署名。トークンは不要です。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param mixed $params_array
	 * @return void <p>OAuthProvider オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/oauthprovider.is2leggedendpoint.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function is2LeggedEndpoint($params_array): void {}

	/**
	 * isRequestTokenEndpoint を設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param bool $will_issue_request_token <p>リクエストトークンを発行するか否かを設定します。つまり <code>OAuthProvider::tokenHandler()</code> がコールされる必要があるかどうかを決めるということです。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/oauthprovider.isrequesttokenendpoint.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function isRequestTokenEndpoint(bool $will_issue_request_token): void {}

	/**
	 * 必須パラメータを削除する
	 * <p>必須パラメータを削除します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $req_params <p>削除したい必須パラメータ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauthprovider.removerequiredparameter.php
	 * @since PECL OAuth >= 1.0.0
	 */
	final public function removeRequiredParameter(string $req_params): bool {}

	/**
	 * 問題を報告する
	 * <p>問題を、OAuthException 形式で渡します。設定できる問題については OAuth 定数 のセクションを参照ください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $oauthexception <p>OAuthException。</p>
	 * @param bool $send_headers
	 * @return string <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/oauthprovider.reportproblem.php
	 * @since PECL OAuth >= 1.0.0
	 */
	final public static function reportProblem(string $oauthexception, bool $send_headers = true): string {}

	/**
	 * パラメータを設定する
	 * <p>パラメータを設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $param_key <p>パラメータのキー。</p>
	 * @param mixed $param_val <p>パラメータの値。</p> <p>パラメータをシグネチャの検証から除外するには、この値を <b><code>NULL</code></b> にします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oauthprovider.setparam.php
	 * @since PECL OAuth >= 1.0.0
	 */
	final public function setParam(string $param_key, $param_val = NULL): bool {}

	/**
	 * リクエストトークンのパスを設定する
	 * <p>リクエストトークンのパスを設定します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $path <p>パス。</p>
	 * @return bool <p><b><code>TRUE</code></b></p>
	 * @link http://php.net/manual/ja/oauthprovider.setrequesttokenpath.php
	 * @since PECL OAuth >= 1.0.0
	 */
	final public function setRequestTokenPath(string $path): bool {}

	/**
	 * timestampNonceHandler コールバックを設定する
	 * <p>タイムスタンプ ノンス ハンドラコールバックを設定します。これは <code>OAuthProvider::callTimestampNonceHandler()</code> でコールされる関数です。タイムスタンプやノンスに関するエラーはこのコールバックにスローされます。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param callable $callback_function <p><code>callable</code> 関数名。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/oauthprovider.timestampnoncehandler.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function timestampNonceHandler(callable $callback_function): void {}

	/**
	 * tokenHandler コールバックを設定する
	 * <p>トークンハンドラコールバックを設定します。これは <code>OAuthProvider::callTokenHandler()</code> でコールされる関数です。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param callable $callback_function <p><code>callable</code> 関数名。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/oauthprovider.tokenhandler.php
	 * @since PECL OAuth >= 1.0.0
	 */
	public function tokenHandler(callable $callback_function): void {}
}

/**
 * SBSを生成する
 * <p>pecl/oauth に関するSBSを生成します</p>
 * @param string $http_method <p>HTTPメソッド</p>
 * @param string $uri <p>エンコードするURI</p>
 * @param array $request_parameters <p>リクエストパラメータの配列</p>
 * @return string <p>SBSを返します</p>
 * @link http://php.net/manual/ja/function.oauth-get-sbs.php
 * @since PECL OAuth >=0.99.7
 */
function oauth_get_sbs(string $http_method, string $uri, array $request_parameters = NULL): string {}

/**
 * URI を RFC 3686 形式でエンコードする
 * <p>URI を » RFC 3686 形式でエンコードします。</p>
 * @param string $uri <p>エンコードしたい URI。</p>
 * @return string <p>» RFC 3686 形式でエンコードした文字列を返します。</p>
 * @link http://php.net/manual/ja/function.oauth-urlencode.php
 * @since PECL OAuth >=0.99.2
 */
function oauth_urlencode(string $uri): string {}

/**
 * <p>この定数は、OAuth パラメータを <i>Authorization</i> ヘッダ内に記述することを表します。</p>
 */
define('OAUTH_AUTH_TYPE_AUTHORIZATION', null);

/**
 * <p>この定数は、OAuth パラメータを HTTP POST の本文の一部として記述することを表します。</p>
 */
define('OAUTH_AUTH_TYPE_FORM', null);

/**
 * <p>この定数は、NoAuth OAuth リクエストを表します。</p>
 */
define('OAUTH_AUTH_TYPE_NONE', null);

/**
 * <p>この定数は、OAuth パラメータをリクエスト URI に記述することを表します。</p>
 */
define('OAUTH_AUTH_TYPE_URI', null);

/**
 * <i>oauth_nonce</i> の値が前のリクエストで使われたものなので、 このリクエストでは使えません。
 */
define('OAUTH_BAD_NONCE', null);

/**
 * <i>oauth_timestamp</i> の値がサービスプロバイダに受け入れられませんでした。 この場合、レスポンスには <i>oauth_acceptable_timestamps</i> パラメータが含まれていなければなりません。
 */
define('OAUTH_BAD_TIMESTAMP', null);

/**
 * コンシューマキーが拒否されました。
 */
define('OAUTH_CONSUMER_KEY_REFUSED', null);

/**
 * <i>oauth_consumer_key</i> が、一時的にサービスプロバイダに受け入れられませんでした。 プロバイダ側でコンシューマに制限をかけているなどの可能性が考えられます。
 */
define('OAUTH_CONSUMER_KEY_UNKNOWN', null);

/**
 * DELETE メソッドを OAuth リクエストで使用します。
 */
define('OAUTH_HTTP_METHOD_DELETE', null);

/**
 * <p>GET メソッドを OAuth リクエストで使用します。</p>
 */
define('OAUTH_HTTP_METHOD_GET', null);

/**
 * <p>HEAD メソッドを OAuth リクエストで使用します。</p>
 */
define('OAUTH_HTTP_METHOD_HEAD', null);

/**
 * <p>POST メソッドを OAuth リクエストで使用します。</p>
 */
define('OAUTH_HTTP_METHOD_POST', null);

/**
 * <p>PUT メソッドを OAuth リクエストで使用します。</p>
 */
define('OAUTH_HTTP_METHOD_PUT', null);

/**
 * <i>oauth_signature</i> が無効です。 サービスプロバイダが算出したシグネチャとマッチしません。
 */
define('OAUTH_INVALID_SIGNATURE', null);

/**
 * 無事に生きています。
 */
define('OAUTH_OK', null);

/**
 * 必須パラメータが含まれていません。 この場合、レスポンスには <i>oauth_parameters_absent</i> パラメータが含まれていなければなりません。
 */
define('OAUTH_PARAMETER_ABSENT', null);

/**
 * <code>OAuth::setRequestEngine()</code> で使用するもので、 エンジンを Curl に設定します。 PHP streams を使う場合は <b><code>OAUTH_REQENGINE_STREAMS</code></b> を用います。
 */
define('OAUTH_REQENGINE_CURL', null);

/**
 * <code>OAuth::setRequestEngine()</code> で使用するもので、 エンジンを PHP ストリーム に設定します。 Curl を使う場合は <b><code>OAUTH_REQENGINE_CURL</code></b> を用います。
 */
define('OAUTH_REQENGINE_STREAMS', null);

/**
 * <p>OAuth <i>HMAC-SHA1</i> 署名方式。</p>
 */
define('OAUTH_SIG_METHOD_HMACSHA1', null);

/**
 * OAuth <i>HMAC-SHA256</i> 署名方式。
 */
define('OAUTH_SIG_METHOD_HMACSHA256', null);

/**
 * OAuth <i>RSA-SHA1</i> 署名方式。
 */
define('OAUTH_SIG_METHOD_RSASHA1', null);

/**
 * <i>oauth_signature_method</i> がサービスプロバイダに受け入れられませんでした。
 */
define('OAUTH_SIGNATURE_METHOD_REJECTED', null);

/**
 * <i>oauth_token</i> の有効期限が切れました。
 */
define('OAUTH_TOKEN_EXPIRED', null);

/**
 * <i>oauth_token</i> がサービスプロバイダに受け入れられませんでした。 理由は不明ですが、 トークンが発行されていない・すでに使用済みである・プロバイダ側で忘れられてしまった といった原因が考えられます。
 */
define('OAUTH_TOKEN_REJECTED', null);

/**
 * <i>oauth_token</i> が無効になりました。もう使えません。
 */
define('OAUTH_TOKEN_REVOKED', null);

/**
 * <i>oauth_token</i> が使用済みです。 これまでのリクエストで既に使用済みであるため、もう使うことはできません。
 */
define('OAUTH_TOKEN_USED', null);

/**
 * <i>oauth_verifier</i> が無効です。
 */
define('OAUTH_VERIFIER_INVALID', null);

