<?php



/**
 * <p>Represents a connection between PHP and a Stomp compliant Message Broker.</p>
 * @link http://php.net/manual/ja/class.stomp.php
 * @since PECL stomp >= 0.1.0
 */
class Stomp {

	/**
	 * Opens a connection
	 * <p>オブジェクト指向型 (constructor):</p><p>手続き型:</p><p>Opens a connection to a stomp compliant Message Broker.</p>
	 * @param string $broker <p>The broker URI</p>
	 * @param string $username <p>The username.</p>
	 * @param string $password <p>The password.</p>
	 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
	 * @return self <p><b>注意</b>:</p> <p>トランザクションヘッダを指定し、そのメッセージがトランザクションの一部であることを示します。</p>
	 * @link http://php.net/manual/ja/stomp.construct.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function __construct(string $broker = 'ini_get("stomp.default_broker_uri")', string $username = NULL, string $password = NULL, array $headers = NULL) {}

	/**
	 * Closes stomp connection
	 * <p>オブジェクト指向型 (destructor):</p><p>手続き型:</p><p>Closes a previously opened connection.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/stomp.destruct.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function __destruct() {}

	/**
	 * Rolls back a transaction in progress
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Rolls back a transaction in progress.</p>
	 * @param string $transaction_id <p>The transaction to abort.</p>
	 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/stomp.abort.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function abort(string $transaction_id, array $headers = NULL): bool {}

	/**
	 * Acknowledges consumption of a message
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Acknowledges consumption of a message from a subscription using client acknowledgment.</p>
	 * @param mixed $msg <p>The message/messageId to be acknowledged.</p>
	 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/stomp.ack.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function ack($msg, array $headers = NULL): bool {}

	/**
	 * Starts a transaction
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Starts a transaction.</p>
	 * @param string $transaction_id <p>The transaction id.</p>
	 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/stomp.begin.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function begin(string $transaction_id, array $headers = NULL): bool {}

	/**
	 * Commits a transaction in progress
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Commits a transaction in progress.</p>
	 * @param string $transaction_id <p>The transaction id.</p>
	 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/stomp.commit.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function commit(string $transaction_id, array $headers = NULL): bool {}

	/**
	 * Gets the last stomp error
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Gets the last stomp error.</p>
	 * @return string <p>Returns an error string or <b><code>FALSE</code></b> if no error occurred.</p>
	 * @link http://php.net/manual/ja/stomp.error.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function error(): string {}

	/**
	 * Gets read timeout
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Gets read timeout</p>
	 * @return array <p>Returns an array with 2 elements: sec and usec.</p>
	 * @link http://php.net/manual/ja/stomp.getreadtimeout.php
	 * @since PECL stomp >= 0.3.0
	 */
	public function getReadTimeout(): array {}

	/**
	 * Gets the current stomp session ID
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Gets the current stomp session ID.</p>
	 * @return string <p><code>string</code> session id on success失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/stomp.getsessionid.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function getSessionId(): string {}

	/**
	 * Indicates whether or not there is a frame ready to read
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Indicates whether or not there is a frame ready to read.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if a frame is ready to read, or <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/stomp.hasframe.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function hasFrame(): bool {}

	/**
	 * Reads the next frame
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Reads the next frame. It is possible to instantiate an object of a specific class, and pass parameters to that class's constructor.</p>
	 * @param string $class_name <p>The name of the class to instantiate. If not specified, a stompFrame object is returned.</p>
	 * @return stompframe <p><b>注意</b>:</p> <p>トランザクションヘッダを指定し、そのメッセージがトランザクションの一部であることを示します。</p>
	 * @link http://php.net/manual/ja/stomp.readframe.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function readFrame(string $class_name = "stompFrame"): \stompframe {}

	/**
	 * Sends a message
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Sends a message to the Message Broker.</p>
	 * @param string $destination <p>Where to send the message</p>
	 * @param mixed $msg <p>Message to send.</p>
	 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/stomp.send.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function send(string $destination, $msg, array $headers = NULL): bool {}

	/**
	 * Sets read timeout
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Sets read timeout.</p>
	 * @param int $seconds <p>The seconds part of the timeout to be set.</p>
	 * @param int $microseconds <p>The microseconds part of the timeout to be set.</p>
	 * @return void
	 * @link http://php.net/manual/ja/stomp.setreadtimeout.php
	 * @since PECL stomp >= 0.3.0
	 */
	public function setReadTimeout(int $seconds, int $microseconds = NULL): void {}

	/**
	 * Registers to listen to a given destination
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Registers to listen to a given destination.</p>
	 * @param string $destination <p>Destination to subscribe to.</p>
	 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/stomp.subscribe.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function subscribe(string $destination, array $headers = NULL): bool {}

	/**
	 * Removes an existing subscription
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Removes an existing subscription.</p>
	 * @param string $destination <p>Subscription to remove.</p>
	 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/stomp.unsubscribe.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function unsubscribe(string $destination, array $headers = NULL): bool {}
}

/**
 * <p>Represents an error raised by the stomp extension. See Exceptions for more information about Exceptions in PHP.</p>
 * @link http://php.net/manual/ja/class.stompexception.php
 * @since PECL stomp >= 0.1.0
 */
class StompException extends \Exception {

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
	 * Get exception details
	 * <p>Get exception details.</p>
	 * @return string <p><code>string</code> containing the error details.</p>
	 * @link http://php.net/manual/ja/stomp.getdetails.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function getDetails(): string {}

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
 * <p>Represents a message which was sent or received from a Stomp compliant Message Broker.</p>
 * @link http://php.net/manual/ja/class.stompframe.php
 * @since PECL stomp >= 0.1.0
 */
class StompFrame {

	/**
	 * @var mixed <p>Frame command.</p>
	 * @link http://php.net/manual/ja/class.stompframe.php#stompframe.props.command
	 */
	public $command;

	/**
	 * @var mixed <p>Frame headers (<code>array</code>).</p>
	 * @link http://php.net/manual/ja/class.stompframe.php#stompframe.props.headers
	 */
	public $headers;

	/**
	 * @var mixed <p>Frame body.</p>
	 * @link http://php.net/manual/ja/class.stompframe.php#stompframe.props.body
	 */
	public $body;

	/**
	 * Constructor
	 * <p>Constructor.</p>
	 * @param string $command <p>Frame command</p>
	 * @param array $headers <p>Frame headers (<code>array</code>).</p>
	 * @param string $body <p>Frame body.</p>
	 * @return self
	 * @link http://php.net/manual/ja/stompframe.construct.php
	 * @since PECL stomp >= 0.1.0
	 */
	public function __construct(string $command = NULL, array $headers = NULL, string $body = NULL) {}
}

/**
 * Rolls back a transaction in progress
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Rolls back a transaction in progress.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @param string $transaction_id <p>The transaction to abort.</p>
 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/stomp.abort.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_abort($link, string $transaction_id, array $headers = NULL): bool {}

/**
 * Acknowledges consumption of a message
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Acknowledges consumption of a message from a subscription using client acknowledgment.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @param mixed $msg <p>The message/messageId to be acknowledged.</p>
 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/stomp.ack.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_ack($link, $msg, array $headers = NULL): bool {}

/**
 * Starts a transaction
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Starts a transaction.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @param string $transaction_id <p>The transaction id.</p>
 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/stomp.begin.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_begin($link, string $transaction_id, array $headers = NULL): bool {}

/**
 * Closes stomp connection
 * <p>オブジェクト指向型 (destructor):</p><p>手続き型:</p><p>Closes a previously opened connection.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/stomp.destruct.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_close($link): bool {}

/**
 * Commits a transaction in progress
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Commits a transaction in progress.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @param string $transaction_id <p>The transaction id.</p>
 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/stomp.commit.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_commit($link, string $transaction_id, array $headers = NULL): bool {}

/**
 * Opens a connection
 * <p>オブジェクト指向型 (constructor):</p><p>手続き型:</p><p>Opens a connection to a stomp compliant Message Broker.</p>
 * @param string $broker <p>The broker URI</p>
 * @param string $username <p>The username.</p>
 * @param string $password <p>The password.</p>
 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
 * @return resource <p><b>注意</b>:</p> <p>トランザクションヘッダを指定し、そのメッセージがトランザクションの一部であることを示します。</p>
 * @link http://php.net/manual/ja/stomp.construct.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_connect(string $broker = 'ini_get("stomp.default_broker_uri")', string $username = NULL, string $password = NULL, array $headers = NULL) {}

/**
 * Returns a string description of the last connect error
 * <p>Returns a string description of the last connect error.</p>
 * @return string <p>A string that describes the error, or <b><code>NULL</code></b> if no error occurred.</p>
 * @link http://php.net/manual/ja/function.stomp-connect-error.php
 * @since PECL stomp >= 0.3.0
 */
function stomp_connect_error(): string {}

/**
 * Gets the last stomp error
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Gets the last stomp error.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @return string <p>Returns an error string or <b><code>FALSE</code></b> if no error occurred.</p>
 * @link http://php.net/manual/ja/stomp.error.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_error($link): string {}

/**
 * Gets read timeout
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Gets read timeout</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @return array <p>Returns an array with 2 elements: sec and usec.</p>
 * @link http://php.net/manual/ja/stomp.getreadtimeout.php
 * @since PECL stomp >= 0.3.0
 */
function stomp_get_read_timeout($link): array {}

/**
 * Gets the current stomp session ID
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Gets the current stomp session ID.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @return string <p><code>string</code> session id on success失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/stomp.getsessionid.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_get_session_id($link): string {}

/**
 * Indicates whether or not there is a frame ready to read
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Indicates whether or not there is a frame ready to read.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @return bool <p>Returns <b><code>TRUE</code></b> if a frame is ready to read, or <b><code>FALSE</code></b> otherwise.</p>
 * @link http://php.net/manual/ja/stomp.hasframe.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_has_frame($link): bool {}

/**
 * Reads the next frame
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Reads the next frame. It is possible to instantiate an object of a specific class, and pass parameters to that class's constructor.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @return array <p><b>注意</b>:</p> <p>トランザクションヘッダを指定し、そのメッセージがトランザクションの一部であることを示します。</p>
 * @link http://php.net/manual/ja/stomp.readframe.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_read_frame($link): array {}

/**
 * Sends a message
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Sends a message to the Message Broker.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @param string $destination <p>Where to send the message</p>
 * @param mixed $msg <p>Message to send.</p>
 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/stomp.send.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_send($link, string $destination, $msg, array $headers = NULL): bool {}

/**
 * Sets read timeout
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Sets read timeout.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @param int $seconds <p>The seconds part of the timeout to be set.</p>
 * @param int $microseconds <p>The microseconds part of the timeout to be set.</p>
 * @return void
 * @link http://php.net/manual/ja/stomp.setreadtimeout.php
 * @since PECL stomp >= 0.3.0
 */
function stomp_set_read_timeout($link, int $seconds, int $microseconds = NULL): void {}

/**
 * Registers to listen to a given destination
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Registers to listen to a given destination.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @param string $destination <p>Destination to subscribe to.</p>
 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/stomp.subscribe.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_subscribe($link, string $destination, array $headers = NULL): bool {}

/**
 * Removes an existing subscription
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Removes an existing subscription.</p>
 * @param resource $link <p>手続き型のみ: <code>stomp_connect()</code> が返す stomp リンク ID。</p>
 * @param string $destination <p>Subscription to remove.</p>
 * @param array $headers <p>追加のヘッダ (例: receipt) を含む連想配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/stomp.unsubscribe.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_unsubscribe($link, string $destination, array $headers = NULL): bool {}

/**
 * Gets the current stomp extension version
 * <p>Returns a string containing the version of the current stomp extension.</p>
 * @return string <p>It returns the current stomp extension version</p>
 * @link http://php.net/manual/ja/function.stomp-version.php
 * @since PECL stomp >= 0.1.0
 */
function stomp_version(): string {}

