<?php



/**
 * <p><b>Exception</b> は、PHP 5 ではすべての例外の基底クラスです。 PHP 7 では、すべてのユーザー例外の基底クラスとなります。</p>
 * <p>PHP 7 では、<b>Exception</b> は Throwable インターフェイスを実装しています。</p>
 * @link http://php.net/manual/ja/class.exception.php
 * @since PHP 5, PHP 7
 */
class Exception {

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
	 * 例外を作成する
	 * <p>例外を作成します。</p>
	 * @param string $message <p>スローする例外メッセージ。</p>
	 * @param int $code <p>例外コード。</p>
	 * @param \Throwable $previous <p>以前に使われた例外。例外の連結に使用します。</p>
	 * @return self
	 * @link http://php.net/manual/ja/exception.construct.php
	 * @since PHP 5, PHP 7
	 */
	public function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL) {}

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

