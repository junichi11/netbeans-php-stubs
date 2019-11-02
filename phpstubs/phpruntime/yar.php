<?php



namespace {

	/**
	 * @link https://php.net/manual/ja/class.yar-client.php
	 * @since No version information available, might only be in Git
	 */
	class Yar_Client {

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.yar-client.php#yar-client.props.protocol
		 */
		protected $_protocol;

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.yar-client.php#yar-client.props.uri
		 */
		protected $_uri;

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.yar-client.php#yar-client.props.options
		 */
		protected $_options;

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.yar-client.php#yar-client.props.running
		 */
		protected $_running;

		/**
		 * Call service
		 * <p>Issue a call to remote RPC method.</p>
		 * @param string $method <p>Remote RPC method name.</p>
		 * @param array $parameters <p>Parameters.</p>
		 * @return void
		 * @link https://php.net/manual/ja/yar-client.call.php
		 * @since PECL yar >= 1.0.0
		 */
		public function __call(string $method, array $parameters): void {}

		/**
		 * Create a client
		 * <p>Create a Yar_Client to a Yar_Server.</p>
		 * @param string $url <p>Yar Server URL.</p>
		 * @param array $options
		 * @return self <p>Yar_Client instance.</p>
		 * @link https://php.net/manual/ja/yar-client.construct.php
		 * @since PECL yar >= 1.0.0
		 */
		final public function __construct(string $url, array $options = NULL) {}

		/**
		 * Set calling contexts
		 * @param int $name <p>it can be: YAR_OPT_PACKAGER, YAR_OPT_PERSISTENT (Need server support), YAR_OPT_TIMEOUT, YAR_OPT_CONNECT_TIMEOUT YAR_OPT_HEADER (Since 2.0.4)</p>
		 * @param mixed $value
		 * @return Yar_Client <p>Returns $this on success失敗した場合に <b><code>FALSE</code></b> を返します.</p>
		 * @link https://php.net/manual/ja/yar-client.setopt.php
		 * @since PECL yar >= 1.0.0
		 */
		public function setOpt(int $name, $value): \Yar_Client {}
	}

	/**
	 * @link https://php.net/manual/ja/class.yar-client-exception.php
	 * @since No version information available, might only be in Git
	 */
	class Yar_Client_Exception extends \Exception {

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
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

		/**
		 * Retrieve exception's type
		 * @return string <p>Returns <i>"Yar_Exception_Client"</i>.</p>
		 * @link https://php.net/manual/ja/yar-client-exception.gettype.php
		 * @since PECL yar >= 1.0.0
		 */
		public function getType(): string {}
	}

	/**
	 * @link https://php.net/manual/ja/class.yar-concurrent-client.php
	 * @since No version information available, might only be in Git
	 */
	class Yar_Concurrent_Client {

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.yar-concurrent-client.php#yar-concurrent-client.props.callstack
		 */
		static $_callstack;

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.yar-concurrent-client.php#yar-concurrent-client.props.callback
		 */
		static $_callback;

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.yar-concurrent-client.php#yar-concurrent-client.props.error-callback
		 */
		static $_error_callback;

		/**
		 * Register a concurrent call
		 * <p>Register a RPC call, but won't sent it immediately, it will be send while further call to <code>Yar_Concurrent_Client::loop()</code></p>
		 * @param string $uri <p>The RPC server URI(http, tcp)</p>
		 * @param string $method <p>Service name(aka the method name)</p>
		 * @param array $parameters <p>Parameters</p>
		 * @param callable $callback <p>A function callback, which will be called while the response return.</p>
		 * @param callable $error_callback
		 * @param array $options
		 * @return int <p>An unique id, can be used to identified which call it is.</p>
		 * @link https://php.net/manual/ja/yar-concurrent-client.call.php
		 * @since PECL yar >= 1.0.0
		 */
		public static function call(string $uri, string $method, array $parameters = NULL, callable $callback = NULL, callable $error_callback = NULL, array $options = NULL): int {}

		/**
		 * Send all calls
		 * <p>Send all registed remote RPC calls.</p>
		 * @param callable $callback <p>If this callback is set, then Yar will call this callback after all calls are sent and before any response return, with a $callinfo NULL.</p> <p>Then, if user didn't specify callback when registering concurrent call, this callback will be used to handle response, otherwise, the callback specified while registering will be used.</p>
		 * @param callable $error_callback <p>If this callback is set, then Yar will call this callback while error occurred.</p>
		 * @return bool
		 * @link https://php.net/manual/ja/yar-concurrent-client.loop.php
		 * @since PECL yar >= 1.0.0
		 */
		public static function loop(callable $callback = NULL, callable $error_callback = NULL): bool {}

		/**
		 * Clean all registered calls
		 * <p>Clean all registered calls</p>
		 * @return bool
		 * @link https://php.net/manual/ja/yar-concurrent-client.reset.php
		 * @since PECL yar >= 1.2.4
		 */
		public static function reset(): bool {}
	}

	/**
	 * @link https://php.net/manual/ja/class.yar-server.php
	 * @since No version information available, might only be in Git
	 */
	class Yar_Server {

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.yar-server.php#yar-server.props.executor
		 */
		protected $_executor;

		/**
		 * Register a server
		 * <p>Set up a Yar HTTP RPC Server, All the public methods of $obj will be register as a RPC service.</p>
		 * @param Object $obj <p>An Object, all public methods of its will be registered as RPC services.</p>
		 * @return self <p>An instance of Yar_Server.</p>
		 * @link https://php.net/manual/ja/yar-server.construct.php
		 * @since PECL yar >= 1.0.0
		 */
		final public function __construct(Object $obj) {}

		/**
		 * Start RPC Server
		 * <p>Start a RPC HTTP server, and ready for accpet RPC requests.</p><p><b>注意</b>:</p><p>Usual RPC calls will be issued as HTTP POST requests. If a HTTP GET request is issued to the uri, the service information (commented section above) will be printed on the page</p>
		 * @return bool <p>boolean</p>
		 * @link https://php.net/manual/ja/yar-server.handle.php
		 * @since PECL yar >= 1.0.0
		 */
		public function handle(): bool {}
	}

	/**
	 * <p>If service threw exceptions, A Yar_Server_Exception will be threw in client side.</p>
	 * @link https://php.net/manual/ja/class.yar-server-exception.php
	 * @since No version information available, might only be in Git
	 */
	class Yar_Server_Exception extends \Exception {

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.yar-server-exception.php#yar-server-exception.props.type
		 */
		protected $_type;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
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

		/**
		 * Retrieve exception's type
		 * <p>Get the exception original type threw by server</p>
		 * @return string <p>string</p>
		 * @link https://php.net/manual/ja/yar-server-exception.gettype.php
		 * @since PECL yar >= 1.0.0
		 */
		public function getType(): string {}
	}

	define('YAR_CLIENT_PROTOCOL_HTTP', null);

	define('YAR_ERR_EXCEPTION', null);

	define('YAR_ERR_OKEY', null);

	define('YAR_ERR_OUTPUT', null);

	define('YAR_ERR_PACKAGER', null);

	define('YAR_ERR_PROTOCOL', null);

	define('YAR_ERR_REQUEST', null);

	define('YAR_ERR_TRANSPORT', null);

	define('YAR_OPT_CONNECT_TIMEOUT', null);

	/**
	 * 2.0.4 以降
	 */
	define('YAR_OPT_HEADER', null);

	define('YAR_OPT_PACKAGER', null);

	define('YAR_OPT_TIMEOUT', null);

	define('YAR_PACKAGER_JSON', null);

	define('YAR_PACKAGER_PHP', null);

	define('YAR_VERSION', null);

}
