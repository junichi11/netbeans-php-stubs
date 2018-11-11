<?php



/**
 * <p><b>ArithmeticError</b> は、数学的な操作でエラーが発生した場合にスローされます。 PHP 7.0 では、たとえばマイナスのビットシフトを行おうとした場合などに発生します。 また、結果が <code>integer</code> の範囲をこえてしまうのうな <code>intdiv()</code> の呼び出しの際にも発生します。</p>
 * @link http://php.net/manual/ja/class.arithmeticerror.php
 * @since PHP 7
 */
class ArithmeticError extends \Error {

	/**
	 * エラーをクローンする
	 * <p>エラーはクローンできないので、このメソッドは fatal エラーとなります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/error.clone.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	final private function __clone() {}

	/**
	 * String representation of the error
	 * <p>Returns the <code>string</code> representation of the error.</p>
	 * @return string <p>Returns the <code>string</code> representation of the error.</p>
	 * @link http://php.net/manual/ja/error.tostring.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function __toString(): string {}

	/**
	 * Gets the error code
	 * <p>Returns the error code.</p>
	 * @return mixed <p>Returns the error code as <code>integer</code></p>
	 * @link http://php.net/manual/ja/error.getcode.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	final public function getCode() {}

	/**
	 * Gets the file in which the error occurred
	 * <p>Get the name of the file the error occurred.</p>
	 * @return string <p>Returns the filename in which the error occurred.</p>
	 * @link http://php.net/manual/ja/error.getfile.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	final public function getFile(): string {}

	/**
	 * Gets the line in which the error occurred
	 * <p>Get line number where the error occurred.</p>
	 * @return int <p>Returns the line number where the error occurred.</p>
	 * @link http://php.net/manual/ja/error.getline.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	final public function getLine(): int {}

	/**
	 * エラーメッセージを取得する
	 * <p>エラーメッセージを返す。</p>
	 * @return string <p>エラーメッセージを文字列で返す。</p>
	 * @link http://php.net/manual/ja/error.getmessage.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	final public function getMessage(): string {}

	/**
	 * 直前の Throwable を返す
	 * <p>直前の Throwable（<code>Error::__construct()</code> の3番目の引数）を返す。</p>
	 * @return Throwable <p>直前の Throwable が利用可能であればそれを返し、 そうでなければ <b><code>NULL</code></b> を返す。</p>
	 * @link http://php.net/manual/ja/error.getprevious.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	final public function getPrevious(): \Throwable {}

	/**
	 * Gets the stack trace
	 * <p>Returns the stack trace.</p>
	 * @return array <p>Returns the stack trace as an <code>array</code>.</p>
	 * @link http://php.net/manual/ja/error.gettrace.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	final public function getTrace(): array {}

	/**
	 * Gets the stack trace as a string
	 * <p>Returns the stack trace as a string.</p>
	 * @return string <p>Returns the stack trace as a string.</p>
	 * @link http://php.net/manual/ja/error.gettraceasstring.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	final public function getTraceAsString(): string {}
}

