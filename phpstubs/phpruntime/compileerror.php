<?php



namespace {

	/**
	 * <p><b>CompileError</b> is thrown for some compilation errors, which formerly issued a fatal error.</p>
	 * @link https://php.net/manual/ja/class.compileerror.php
	 * @since PHP 7 > 7.3.0
	 */
	class CompileError extends \Error {

		/**
		 * @var string <p>エラーメッセージ</p>
		 * @link https://php.net/manual/ja/class.error.php#error.props.message
		 */
		protected $message;

		/**
		 * @var int <p>エラーコード</p>
		 * @link https://php.net/manual/ja/class.error.php#error.props.code
		 */
		protected $code;

		/**
		 * @var string <p>エラーが発生したファイル名</p>
		 * @link https://php.net/manual/ja/class.error.php#error.props.file
		 */
		protected $file;

		/**
		 * @var int <p>エラーが発生した行番号</p>
		 * @link https://php.net/manual/ja/class.error.php#error.props.line
		 */
		protected $line;

		/**
		 * エラーをクローンする
		 * <p>エラーはクローンできないので、このメソッドは fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/error.clone.php
		 * @since No version information available, might only be in Git
		 */
		final private function __clone() {}

		/**
		 * String representation of the error
		 * <p>Returns the <code>string</code> representation of the error.</p>
		 * @return string <p>Returns the <code>string</code> representation of the error.</p>
		 * @link https://php.net/manual/ja/error.tostring.php
		 * @since No version information available, might only be in Git
		 */
		public function __toString(): string {}

		/**
		 * Gets the error code
		 * <p>Returns the error code.</p>
		 * @return mixed <p>Returns the error code as <code>integer</code></p>
		 * @link https://php.net/manual/ja/error.getcode.php
		 * @since No version information available, might only be in Git
		 */
		final public function getCode() {}

		/**
		 * Gets the file in which the error occurred
		 * <p>Get the name of the file the error occurred.</p>
		 * @return string <p>Returns the filename in which the error occurred.</p>
		 * @link https://php.net/manual/ja/error.getfile.php
		 * @since No version information available, might only be in Git
		 */
		final public function getFile(): string {}

		/**
		 * Gets the line in which the error occurred
		 * <p>Get line number where the error occurred.</p>
		 * @return int <p>Returns the line number where the error occurred.</p>
		 * @link https://php.net/manual/ja/error.getline.php
		 * @since No version information available, might only be in Git
		 */
		final public function getLine(): int {}

		/**
		 * エラーメッセージを取得する
		 * <p>エラーメッセージを返す。</p>
		 * @return string <p>エラーメッセージを文字列で返す。</p>
		 * @link https://php.net/manual/ja/error.getmessage.php
		 * @since No version information available, might only be in Git
		 */
		final public function getMessage(): string {}

		/**
		 * 直前の Throwable を返す
		 * <p>直前の Throwable（<code>Error::__construct()</code> の3番目の引数）を返す。</p>
		 * @return Throwable <p>直前の Throwable が利用可能であればそれを返し、 そうでなければ <b><code>NULL</code></b> を返す。</p>
		 * @link https://php.net/manual/ja/error.getprevious.php
		 * @since No version information available, might only be in Git
		 */
		final public function getPrevious(): \Throwable {}

		/**
		 * Gets the stack trace
		 * <p>Returns the stack trace.</p>
		 * @return array <p>Returns the stack trace as an <code>array</code>.</p>
		 * @link https://php.net/manual/ja/error.gettrace.php
		 * @since No version information available, might only be in Git
		 */
		final public function getTrace(): array {}

		/**
		 * Gets the stack trace as a string
		 * <p>Returns the stack trace as a string.</p>
		 * @return string <p>Returns the stack trace as a string.</p>
		 * @link https://php.net/manual/ja/error.gettraceasstring.php
		 * @since No version information available, might only be in Git
		 */
		final public function getTraceAsString(): string {}
	}

}
