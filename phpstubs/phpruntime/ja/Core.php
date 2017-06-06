<?php

// Start of Core v.7.0.19

class stdClass  {
}

/**
 * そのクラスの中身が foreach を使用してたどれるかどうかを検出するインターフェイスです。
 * @link http://php.net/manual/ja/class.traversable.php
 */
interface Traversable  {
}

/**
 * 外部イテレータを作成するためのインターフェイスです。
 * @link http://php.net/manual/ja/class.iteratoraggregate.php
 */
interface IteratorAggregate extends Traversable {

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 外部イテレータを取得する
	 * @link http://php.net/manual/ja/iteratoraggregate.getiterator.php
	 * @return Traversable <b>Iterator</b> あるいは
	 * <b>Traversable</b> を実装したオブジェクトのインスタンスを返します。
	 */
	abstract public function getIterator(): Traversable;

}

/**
 * 外部のイテレータあるいはオブジェクト自身から反復処理を行うためのインターフェイスです。
 * @link http://php.net/manual/ja/class.iterator.php
 */
interface Iterator extends Traversable {

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 現在の要素を返す
	 * @link http://php.net/manual/ja/iterator.current.php
	 * @return mixed あらゆる型を返すことが可能です。
	 */
	abstract public function current();

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 次の要素に進む
	 * @link http://php.net/manual/ja/iterator.next.php
	 * @return void 返り値は無視されます。
	 */
	abstract public function next(): void;

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 現在の要素のキーを返す
	 * @link http://php.net/manual/ja/iterator.key.php
	 * @return scalar 成功した場合にスカラー型、失敗した場合に
	 * <b>NULL</b> を返します。
	 */
	abstract public function key();

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 現在位置が有効かどうかを調べる
	 * @link http://php.net/manual/ja/iterator.valid.php
	 * @return boolean 返り値は boolean にキャストして評価されます。
	 * 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	abstract public function valid(): bool;

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * イテレータの最初の要素に巻き戻す
	 * @link http://php.net/manual/ja/iterator.rewind.php
	 * @return void 返り値は無視されます。
	 */
	abstract public function rewind(): void;

}

/**
 * 配列としてオブジェクトにアクセスするための機能のインターフェイスです。
 * @link http://php.net/manual/ja/class.arrayaccess.php
 */
interface ArrayAccess  {

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * オフセットが存在するかどうか
	 * @link http://php.net/manual/ja/arrayaccess.offsetexists.php
	 * @param mixed $offset <p>
	 * 調べたいオフセット。
	 * </p>
	 * @return boolean 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * 非 boolean 値が返された場合は boolean にキャストして返します。
	 */
	abstract public function offsetExists($offset): bool;

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * オフセットを取得する
	 * @link http://php.net/manual/ja/arrayaccess.offsetget.php
	 * @param mixed $offset <p>
	 * 取得したいオフセット。
	 * </p>
	 * @return mixed すべての型の値を返すことができます。
	 */
	abstract public function offsetGet($offset);

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 指定したオフセットに値を設定する
	 * @link http://php.net/manual/ja/arrayaccess.offsetset.php
	 * @param mixed $offset <p>
	 * 値を代入したいオフセット。
	 * </p>
	 * @param mixed $value <p>
	 * 設定したい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	abstract public function offsetSet($offset, $value): void;

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * オフセットの設定を解除する
	 * @link http://php.net/manual/ja/arrayaccess.offsetunset.php
	 * @param mixed $offset <p>
	 * 設定解除したいオフセット。
	 * </p>
	 * @return void 値を返しません。
	 */
	abstract public function offsetUnset($offset): void;

}

/**
 * 独自のシリアライズ用のインターフェイスです。
 * @link http://php.net/manual/ja/class.serializable.php
 */
interface Serializable  {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * オブジェクトの文字列表現
	 * @link http://php.net/manual/ja/serializable.serialize.php
	 * @return string オブジェクトの文字列表現、あるいは <b>NULL</b> を返します。
	 */
	abstract public function serialize(): string;

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * オブジェクトを作成する
	 * @link http://php.net/manual/ja/serializable.unserialize.php
	 * @param string $serialized <p>
	 * オブジェクトの文字列表現。
	 * </p>
	 * @return void このメソッドの返り値は無視されます。
	 */
	abstract public function unserialize(string $serialized): void;

}

/**
 * <b>Throwable</b>
 * は、PHP 7 の throw 文でスロー可能なあらゆるオブジェクトが実装する基底インターフェイスです。
 * <b>Error</b> や <b>Exception</b>
 * も、これを実装しています。
 * @link http://php.net/manual/ja/class.throwable.php
 */
interface Throwable  {

	/**
	 * (PHP 7)<br/>
	 * メッセージを取得する
	 * @link http://php.net/manual/ja/throwable.getmessage.php
	 * @return string スローされたオブジェクトに関連づけられたメッセージを返します。
	 */
	abstract public function getMessage(): string;

	/**
	 * (PHP 7)<br/>
	 * 例外コードを取得する
	 * @link http://php.net/manual/ja/throwable.getcode.php
	 * @return int 例外コードを返します。
	 * <b>Exception</b> の場合は integer ですが、
	 * その派生クラスでは別の型かもしれません
	 * (たとえば <b>PDOException</b> の場合は string です)。
	 */
	abstract public function getCode(): int;

	/**
	 * (PHP 7)<br/>
	 * 例外が作られたファイル名を取得する
	 * @link http://php.net/manual/ja/throwable.getfile.php
	 * @return string 例外が作られたファイル名を返します。
	 */
	abstract public function getFile(): string;

	/**
	 * (PHP 7)<br/>
	 * オブジェクトのインスタンスが作られた行番号を取得する
	 * @link http://php.net/manual/ja/throwable.getline.php
	 * @return int スローされたオブジェクトのインスタンスが作られた行番号を返します。
	 */
	abstract public function getLine(): int;

	/**
	 * (PHP 7)<br/>
	 * スタックトレースを取得する
	 * @link http://php.net/manual/ja/throwable.gettrace.php
	 * @return array スタックトレースの配列を返します。その書式は
	 * <b>debug_backtrace</b> と同じです。
	 */
	abstract public function getTrace(): array;

	/**
	 * (PHP 7)<br/>
	 * ひとつ前の Throwable を返す
	 * @link http://php.net/manual/ja/throwable.getprevious.php
	 * @return Throwable ひとつ前の <b>Throwable</b> が存在すればそれを返します。
	 * 存在しない場合は <b>NULL</b> を返します。
	 */
	abstract public function getPrevious(): Throwable;

	/**
	 * (PHP 7)<br/>
	 * スタックトレースを文字列として取得する
	 * @link http://php.net/manual/ja/throwable.gettraceasstring.php
	 * @return string スタックトレースを文字列として返します。
	 */
	abstract public function getTraceAsString(): string;

	/**
	 * (PHP 7)<br/>
	 * スローされたオブジェクトの文字列表現を取得する
	 * @link http://php.net/manual/ja/throwable.tostring.php
	 * @return string スローされたオブジェクトの文字列表現を返します。
	 */
	abstract public function __toString(): string;

}

/**
 * <b>Exception</b>
 * は、PHP 5 ではすべての例外の基底クラスです。
 * PHP 7 では、すべてのユーザー例外の基底クラスとなります。
 * @link http://php.net/manual/ja/class.exception.php
 */
class Exception implements Throwable {
	protected $message;
	private $string;
	protected $code;
	protected $file;
	protected $line;
	private $trace;
	private $previous;


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

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外の文字列表現
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @return string 例外を文字列で表現したものを返します。
	 */
	public function __toString(): string {}

}

/**
 * エラー例外です。
 * @link http://php.net/manual/ja/class.errorexception.php
 */
class ErrorException extends Exception implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;
	protected $severity;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外を作成する
	 * @link http://php.net/manual/ja/errorexception.construct.php
	 * @param string $message [optional] <p>
	 * スローする例外メッセージ。
	 * </p>
	 * @param int $code [optional] <p>
	 * 例外コード。
	 * </p>
	 * @param int $severity [optional] <p>
	 * 例外の深刻度。
	 * </p>
	 * <p>
	 * 任意の integer を設定できますが、ここでは
	 * エラー定数 を用いることを想定しています。
	 * </p>
	 * @param string $filename [optional] <p>
	 * 例外がスローされたファイル名。
	 * </p>
	 * @param int $lineno [optional] <p>
	 * 例外がスローされた行番号。
	 * </p>
	 * @param Exception $previous [optional] <p>
	 * ひとつ前の例外。例外の連結に使います。
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, int $severity = E_ERROR, string $filename = __FILE__, int $lineno = __LINE__, Exception $previous = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外の深刻度を取得する
	 * @link http://php.net/manual/ja/errorexception.getseverity.php
	 * @return int 例外の深刻度レベルを返します。
	 */
	final public function getSeverity(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外をコピーする
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

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

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外の文字列表現
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @return string 例外を文字列で表現したものを返します。
	 */
	public function __toString(): string {}

}

/**
 * <b>Error</b>
 * は、PHP のすべての内部エラーの基底クラスです。
 * @link http://php.net/manual/ja/class.error.php
 */
class Error implements Throwable {
	protected $message;
	private $string;
	protected $code;
	protected $file;
	protected $line;
	private $trace;
	private $previous;


	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Clone the error
	 * @link http://php.net/manual/ja/error.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Construct the error object
	 * @link http://php.net/manual/ja/error.construct.php
	 * @param string $message [optional] <p>
	 * The error message.
	 * </p>
	 * @param int $code [optional] <p>
	 * The error code.
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * The previous throwable used for the exception chaining.
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the error message
	 * @link http://php.net/manual/ja/error.getmessage.php
	 * @return string the error message as a string.
	 */
	final public function getMessage(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the error code
	 * @link http://php.net/manual/ja/error.getcode.php
	 * @return mixed the error code as integer
	 */
	final public function getCode() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the file in which the error occurred
	 * @link http://php.net/manual/ja/error.getfile.php
	 * @return string the filename in which the error occurred.
	 */
	final public function getFile(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the line in which the error occurred
	 * @link http://php.net/manual/ja/error.getline.php
	 * @return int the line number where the error occurred.
	 */
	final public function getLine(): int {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the stack trace
	 * @link http://php.net/manual/ja/error.gettrace.php
	 * @return array the stack trace as an array.
	 */
	final public function getTrace(): array {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Returns previous Throwable
	 * @link http://php.net/manual/ja/error.getprevious.php
	 * @return Throwable the previous <b>Throwable</b> if available
	 * or <b>NULL</b> otherwise.
	 */
	final public function getPrevious(): Throwable {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the stack trace as a string
	 * @link http://php.net/manual/ja/error.gettraceasstring.php
	 * @return string the stack trace as a string.
	 */
	final public function getTraceAsString(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * String representation of the error
	 * @link http://php.net/manual/ja/error.tostring.php
	 * @return string the string representation of the error.
	 */
	public function __toString(): string {}

}

/**
 * <b>ParseError</b>
 * は、<b>eval</b> を呼んだときなどの PHP コードのパースに失敗した場合にスローされます。
 * @link http://php.net/manual/ja/class.parseerror.php
 */
class ParseError extends Error implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Clone the error
	 * @link http://php.net/manual/ja/error.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Construct the error object
	 * @link http://php.net/manual/ja/error.construct.php
	 * @param string $message [optional] <p>
	 * The error message.
	 * </p>
	 * @param int $code [optional] <p>
	 * The error code.
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * The previous throwable used for the exception chaining.
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the error message
	 * @link http://php.net/manual/ja/error.getmessage.php
	 * @return string the error message as a string.
	 */
	final public function getMessage(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the error code
	 * @link http://php.net/manual/ja/error.getcode.php
	 * @return mixed the error code as integer
	 */
	final public function getCode() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the file in which the error occurred
	 * @link http://php.net/manual/ja/error.getfile.php
	 * @return string the filename in which the error occurred.
	 */
	final public function getFile(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the line in which the error occurred
	 * @link http://php.net/manual/ja/error.getline.php
	 * @return int the line number where the error occurred.
	 */
	final public function getLine(): int {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the stack trace
	 * @link http://php.net/manual/ja/error.gettrace.php
	 * @return array the stack trace as an array.
	 */
	final public function getTrace(): array {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Returns previous Throwable
	 * @link http://php.net/manual/ja/error.getprevious.php
	 * @return Throwable the previous <b>Throwable</b> if available
	 * or <b>NULL</b> otherwise.
	 */
	final public function getPrevious(): Throwable {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the stack trace as a string
	 * @link http://php.net/manual/ja/error.gettraceasstring.php
	 * @return string the stack trace as a string.
	 */
	final public function getTraceAsString(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * String representation of the error
	 * @link http://php.net/manual/ja/error.tostring.php
	 * @return string the string representation of the error.
	 */
	public function __toString(): string {}

}

/**
 * <b>TypeError</b> がスローされるのは、以下の三つの場合です。
 * まず、関数に渡された引数の型が、関数の宣言時に指定された型と一致しない場合。
 * 次に、関数の戻り値の型が、関数の宣言時に指定された型と一致しない場合。
 * そして、PHP 組み込みの関数に渡す引数の数を間違えた場合 (これは、strict モードの場合に限ります)。
 * @link http://php.net/manual/ja/class.typeerror.php
 */
class TypeError extends Error implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Clone the error
	 * @link http://php.net/manual/ja/error.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Construct the error object
	 * @link http://php.net/manual/ja/error.construct.php
	 * @param string $message [optional] <p>
	 * The error message.
	 * </p>
	 * @param int $code [optional] <p>
	 * The error code.
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * The previous throwable used for the exception chaining.
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the error message
	 * @link http://php.net/manual/ja/error.getmessage.php
	 * @return string the error message as a string.
	 */
	final public function getMessage(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the error code
	 * @link http://php.net/manual/ja/error.getcode.php
	 * @return mixed the error code as integer
	 */
	final public function getCode() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the file in which the error occurred
	 * @link http://php.net/manual/ja/error.getfile.php
	 * @return string the filename in which the error occurred.
	 */
	final public function getFile(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the line in which the error occurred
	 * @link http://php.net/manual/ja/error.getline.php
	 * @return int the line number where the error occurred.
	 */
	final public function getLine(): int {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the stack trace
	 * @link http://php.net/manual/ja/error.gettrace.php
	 * @return array the stack trace as an array.
	 */
	final public function getTrace(): array {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Returns previous Throwable
	 * @link http://php.net/manual/ja/error.getprevious.php
	 * @return Throwable the previous <b>Throwable</b> if available
	 * or <b>NULL</b> otherwise.
	 */
	final public function getPrevious(): Throwable {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the stack trace as a string
	 * @link http://php.net/manual/ja/error.gettraceasstring.php
	 * @return string the stack trace as a string.
	 */
	final public function getTraceAsString(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * String representation of the error
	 * @link http://php.net/manual/ja/error.tostring.php
	 * @return string the string representation of the error.
	 */
	public function __toString(): string {}

}

/**
 * <b>ArithmeticError</b>
 * は、数学的な操作でエラーが発生した場合にスローされます。
 * PHP 7.0 では、たとえばマイナスのビットシフトを行おうとした場合などに発生します。
 * また、結果が integer の範囲をこえてしまうのうな
 * <b>intdiv</b> の呼び出しの際にも発生します。
 * @link http://php.net/manual/ja/class.arithmeticerror.php
 */
class ArithmeticError extends Error implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Clone the error
	 * @link http://php.net/manual/ja/error.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Construct the error object
	 * @link http://php.net/manual/ja/error.construct.php
	 * @param string $message [optional] <p>
	 * The error message.
	 * </p>
	 * @param int $code [optional] <p>
	 * The error code.
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * The previous throwable used for the exception chaining.
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the error message
	 * @link http://php.net/manual/ja/error.getmessage.php
	 * @return string the error message as a string.
	 */
	final public function getMessage(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the error code
	 * @link http://php.net/manual/ja/error.getcode.php
	 * @return mixed the error code as integer
	 */
	final public function getCode() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the file in which the error occurred
	 * @link http://php.net/manual/ja/error.getfile.php
	 * @return string the filename in which the error occurred.
	 */
	final public function getFile(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the line in which the error occurred
	 * @link http://php.net/manual/ja/error.getline.php
	 * @return int the line number where the error occurred.
	 */
	final public function getLine(): int {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the stack trace
	 * @link http://php.net/manual/ja/error.gettrace.php
	 * @return array the stack trace as an array.
	 */
	final public function getTrace(): array {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Returns previous Throwable
	 * @link http://php.net/manual/ja/error.getprevious.php
	 * @return Throwable the previous <b>Throwable</b> if available
	 * or <b>NULL</b> otherwise.
	 */
	final public function getPrevious(): Throwable {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the stack trace as a string
	 * @link http://php.net/manual/ja/error.gettraceasstring.php
	 * @return string the stack trace as a string.
	 */
	final public function getTraceAsString(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * String representation of the error
	 * @link http://php.net/manual/ja/error.tostring.php
	 * @return string the string representation of the error.
	 */
	public function __toString(): string {}

}

/**
 * <b>DivisionByZeroError</b>
 * は、数値をゼロで割ろうとした場合にスローされます。
 * @link http://php.net/manual/ja/class.divisionbyzeroerror.php
 */
class DivisionByZeroError extends ArithmeticError implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Clone the error
	 * @link http://php.net/manual/ja/error.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Construct the error object
	 * @link http://php.net/manual/ja/error.construct.php
	 * @param string $message [optional] <p>
	 * The error message.
	 * </p>
	 * @param int $code [optional] <p>
	 * The error code.
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * The previous throwable used for the exception chaining.
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the error message
	 * @link http://php.net/manual/ja/error.getmessage.php
	 * @return string the error message as a string.
	 */
	final public function getMessage(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the error code
	 * @link http://php.net/manual/ja/error.getcode.php
	 * @return mixed the error code as integer
	 */
	final public function getCode() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the file in which the error occurred
	 * @link http://php.net/manual/ja/error.getfile.php
	 * @return string the filename in which the error occurred.
	 */
	final public function getFile(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the line in which the error occurred
	 * @link http://php.net/manual/ja/error.getline.php
	 * @return int the line number where the error occurred.
	 */
	final public function getLine(): int {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the stack trace
	 * @link http://php.net/manual/ja/error.gettrace.php
	 * @return array the stack trace as an array.
	 */
	final public function getTrace(): array {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Returns previous Throwable
	 * @link http://php.net/manual/ja/error.getprevious.php
	 * @return Throwable the previous <b>Throwable</b> if available
	 * or <b>NULL</b> otherwise.
	 */
	final public function getPrevious(): Throwable {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Gets the stack trace as a string
	 * @link http://php.net/manual/ja/error.gettraceasstring.php
	 * @return string the stack trace as a string.
	 */
	final public function getTraceAsString(): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * String representation of the error
	 * @link http://php.net/manual/ja/error.tostring.php
	 * @return string the string representation of the error.
	 */
	public function __toString(): string {}

}

/**
 * 無名関数 を表すために使うクラスです。
 * @link http://php.net/manual/ja/class.closure.php
 */
final class Closure  {

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * インスタンス作成を無効化したコンストラクタ
	 * @link http://php.net/manual/ja/closure.construct.php
	 */
	private function __construct() {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * バインドされたオブジェクトとクラスのスコープでクロージャを複製する
	 * @link http://php.net/manual/ja/closure.bind.php
	 * @param Closure $closure <p>
	 * バインドする無名関数。
	 * </p>
	 * @param object $newthis <p>
	 * 指定した無名関数をバインドするオブジェクト。クロージャのバインドを解除するには
	 * <b>NULL</b> を指定します。
	 * </p>
	 * @param mixed $newscope [optional] <p>
	 * クロージャを関連づけるクラススコープ、あるいは 'static' で現在のスコープを維持します。
	 * オブジェクトを渡した場合は、そのオブジェクトの型をその代わりに使います。
	 * これは、バインドしたオブジェクトの protected メソッドや private
	 * メソッドの可視性を決めます。
	 * このパラメータに、内部クラスのオブジェクトを渡すことはできません。
	 * </p>
	 * @return Closure 新しい <b>Closure</b> オブジェクトを返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public static function bind(Closure $closure, $newthis, $newscope = null): Closure {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * 新しくバインドしたオブジェクトとクラスのスコープで、クロージャを複製する
	 * @link http://php.net/manual/ja/closure.bindto.php
	 * @param object $newthis <p>
	 * 指定した無名関数をバインドするオブジェクト。クロージャのバインドを解除するには
	 * <b>NULL</b> を指定します。
	 * </p>
	 * @param mixed $newscope [optional] <p>
	 * クロージャを関連づけるクラススコープ、あるいは 'static' で現在のスコープを維持します。
	 * オブジェクトを渡した場合は、そのオブジェクトの型をその代わりに使います。
	 * これは、バインドしたオブジェクトの protected メソッドや private
	 * メソッドの可視性を決めます。
	 * It is not allowed to pass (an object of) an internal class as this parameter.
	 * </p>
	 * @return Closure 新しい <b>Closure</b> オブジェクトを返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function bindTo($newthis, $newscope = null): Closure {}

	/**
	 * (PHP 7)<br/>
	 * クロージャを束縛して呼び出す
	 * @link http://php.net/manual/ja/closure.call.php
	 * @param object $newthis <p>
	 * この呼び出しの間だけクロージャを束縛するオブジェクト。
	 * </p>
	 * @param mixed $_ [optional] <p>
	 * クロージャに渡すパラメータがある場合は、ここで指定します。
	 * </p>
	 * @return mixed クロージャの戻り値を返します。
	 */
	public function call($newthis, $_ = null) {}

}

/**
 * <b>Generator</b> は ジェネレータ が返すオブジェクトです。
 * @method mixed throw(Throwable $exception) (PHP 5 &gt;= 5.5.0, PHP 7)<br/>例外をジェネレータにスローする
 * @link http://php.net/manual/ja/class.generator.php
 */
final class Generator implements Iterator, Traversable {

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/generator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * イテレータが終了したかどうかを調べる
	 * @link http://php.net/manual/ja/generator.valid.php
	 * @return bool イテレータが終了した場合に <b>FALSE</b> を返します。まだ終了していない場合は <b>TRUE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * yield した値を取得する
	 * @link http://php.net/manual/ja/generator.current.php
	 * @return mixed yield した値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * yield したキーを取得する
	 * @link http://php.net/manual/ja/generator.key.php
	 * @return mixed yield したキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * ジェネレータを続行する
	 * @link http://php.net/manual/ja/generator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * 値をジェネレータに送る
	 * @link http://php.net/manual/ja/generator.send.php
	 * @param mixed $value <p>
	 * ジェネレータに送り込む値。この値が、ジェネレータが現在指している yield 式の戻り値になります。
	 * </p>
	 * @return mixed yield した値を返します。
	 */
	public function send($value) {}

	public function getReturn() {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * シリアライズのコールバック
	 * @link http://php.net/manual/ja/generator.wakeup.php
	 * @return void 値を返しません。
	 */
	public function __wakeup(): void {}

}

class ClosedGeneratorException extends Exception implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


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

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外の文字列表現
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @return string 例外を文字列で表現したものを返します。
	 */
	public function __toString(): string {}

}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在の Zend Engine のバージョンを取得する
 * @link http://php.net/manual/ja/function.zend-version.php
 * @return string Zend Engine のバージョン番号を文字列で返します。
 */
function zend_version(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 関数に渡された引数の数を返す
 * @link http://php.net/manual/ja/function.func-num-args.php
 * @return int 現在のユーザー定義関数に渡された引数の数を返します。
 */
function func_num_args(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 引数のリストから要素をひとつ返す
 * @link http://php.net/manual/ja/function.func-get-arg.php
 * @param int $arg_num <p>
 * 引数の位置。関数の引数はゼロから数え始めます。
 * </p>
 * @return mixed 指定した引数、あるいはエラー時に <b>FALSE</b> を返します。
 */
function func_get_arg(int $arg_num) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 関数の引数リストを配列として返す
 * @link http://php.net/manual/ja/function.func-get-args.php
 * @return array 配列を返します。この配列の各要素は、
 * 現在のユーザー定義関数の引数リストにおける対応するメンバのコピーとなります。
 */
function func_get_args(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の長さを得る
 * @link http://php.net/manual/ja/function.strlen.php
 * @param string $string <p>
 * 長さを調べる文字列。
 * </p>
 * @return int 成功した場合に <i>string</i> の長さ、
 * <i>string</i> が空の文字列だった場合に
 * 0 を返します。
 */
function strlen(string $string): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * バイナリセーフな文字列比較
 * @link http://php.net/manual/ja/function.strcmp.php
 * @param string $str1 <p>
 * 最初の文字列。
 * </p>
 * @param string $str2 <p>
 * 次の文字列。
 * </p>
 * @return int <i>str1</i> が <i>str2</i>
 * よりも小さければ &lt; 0 を、<i>str1</i>が
 * <i>str2</i>よりも大きければ &gt; 0 を、
 * 等しければ 0 を返します。
 */
function strcmp(string $str1, string $str2): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 最初の n 文字についてバイナリセーフな文字列比較を行う
 * @link http://php.net/manual/ja/function.strncmp.php
 * @param string $str1 <p>
 * 最初の文字列。
 * </p>
 * @param string $str2 <p>
 * 次の文字列。
 * </p>
 * @param int $len <p>
 * 比較する文字数。
 * </p>
 * @return int <i>str1</i> が <i>str2</i>
 * より小さい場合に &lt; 0、<i>str1</i> が
 * <i>str2</i> より大きい場合に &gt; 0 、等しい場合に
 * 0 を返します。
 */
function strncmp(string $str1, string $str2, int $len): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 大文字小文字を区別しないバイナリセーフな文字列比較を行う
 * @link http://php.net/manual/ja/function.strcasecmp.php
 * @param string $str1 <p>
 * 最初の文字列。
 * </p>
 * @param string $str2 <p>
 * 次の文字列。
 * </p>
 * @return int <i>str1</i> が <i>str2</i>
 * より小さい場合は負、<i>str1</i> が
 * <i>str2</i> より大きい場合は正、等しい場合は 0
 * を返します。
 */
function strcasecmp(string $str1, string $str2): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * バイナリセーフで大文字小文字を区別しない文字列比較を、最初の n 文字について行う
 * @link http://php.net/manual/ja/function.strncasecmp.php
 * @param string $str1 <p>
 * 最初の文字列。
 * </p>
 * @param string $str2 <p>
 * 次の文字列。
 * </p>
 * @param int $len <p>
 * 比較する文字列の長さ。
 * </p>
 * @return int <i>str1</i> が <i>str2</i>
 * より短い場合に &lt; 0 を返し、<i>str1</i> が
 * <i>str2</i> より大きい場合に &gt; 0、等しい場合に
 * 0 を返します。
 */
function strncasecmp(string $str1, string $str2, int $len): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列から現在のキーと値のペアを返して、カーソルを進める
 * @link http://php.net/manual/ja/function.each.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @return array 配列 <i>array</i> から現在のキーと値のペアを返します。
 * このペアは 4 つの要素を持つ配列で、
 * それぞれの要素は 0, 1,
 * key, value というキーを有しています。
 * 要素 0とkey
 * の各々は配列要素のキー名称を保持しており、1
 * と value の各々はそのデータを保持しています。
 * </p>
 * <p>
 * 配列の内部ポインタが配列の最終要素以降を指す場合、
 * <b>each</b> は <b>FALSE</b> を返します。
 */
function each(array &$array): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 出力する PHP エラーの種類を設定する
 * @link http://php.net/manual/ja/function.error-reporting.php
 * @param int $level [optional] <p>
 * 新しい error_reporting
 * レベル。ビットマスクまたは名前つき定数のどちらかです。将来の
 * バージョンとの互換性を保証するために、名前つき定数の使用が
 * 強く推奨されています。エラーレベルが追加されると、整数の幅は増加します。
 * そのため、以前の整数を使用するエラーレベルは常に期待通りに動作するとは
 * 限りません。
 * </p>
 * <p>
 * 利用可能なエラーレベル定数とその実際の意味は、
 * 定義済みの定数に
 * 記述されています。
 * </p>
 * @return int 変更前の error_reporting
 * レベルを返します。<i>level</i>
 * パラメータを指定しなかった場合は、現在のレベルを返します。
 */
function error_reporting(int $level = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 名前を指定して定数を定義する
 * @link http://php.net/manual/ja/function.define.php
 * @param string $name <p>
 * 定数の名前。
 * </p>
 * @param mixed $value <p>
 * 定数の値。PHP 5 では、<i>value</i> は
 * スカラー値 (integer、
 * float、string、boolean あるいは
 * <b>NULL</b>) でなければいけません。PHP 7 では配列を使うこともできます。
 * </p>
 * <p>
 * リソース型の定数を定義することもできますが、
 * 推奨できません。予期せぬ振る舞いをする可能性があります。
 * </p>
 * @param bool $case_insensitive [optional] <p>
 * <b>TRUE</b> を指定すると、定数は大文字小文字を区別しないようになります。
 * デフォルトでは大文字小文字を区別します。つまり
 * CONSTANT と Constant
 * は別の値を表すわけです。
 * </p>
 * <p>
 * 大文字小文字を区別しないときは、定数は小文字で格納されます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function define(string $name, $value, bool $case_insensitive = false): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した名前の定数が存在するかどうかを調べる
 * @link http://php.net/manual/ja/function.defined.php
 * @param string $name <p>
 * 定数名。
 * </p>
 * @return bool <i>name</i> で指定した名前の定数が定義されている
 * 場合に <b>TRUE</b>、その他の場合に<b>FALSE</b>を返します。
 */
function defined(string $name): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * オブジェクトのクラス名を返す
 * @link http://php.net/manual/ja/function.get-class.php
 * @param object $object [optional] <p>
 * 調べるオブジェクト。クラスの内部ではこのパラメータを省略することもできます。
 * </p>
 * Explicitly passing <b>NULL</b> as the <i>object</i> is no
 * longer allowed as of PHP 7.2.0.
 * The parameter is still optional and calling <b>get_class</b>
 * without a parameter from inside a class will work, but passing <b>NULL</b> now
 * emits an <b>E_WARNING</b> notice.
 * @return string オブジェクト <i>object</i> がインスタンス
 * であるクラスの名前を返します。<i>object</i>
 * がオブジェクトでない場合には<b>FALSE</b>が返されます。
 * </p>
 * <p>
 * クラスの内部で <i>object</i> を省略すると、
 * そのクラスの名前を返します。
 * </p>
 * <p>
 * If the <i>object</i> is an instance of a class which exists
 * in a namespace, the qualified namespaced name of that class is returned.
 */
function get_class($object = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * "静的遅延束縛" のクラス名
 * @link http://php.net/manual/ja/function.get-called-class.php
 * @return string クラス名を返します。クラスの外部からコールされた場合は <b>FALSE</b> を返します。
 */
function get_called_class(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * オブジェクトの親クラスの名前を取得する
 * @link http://php.net/manual/ja/function.get-parent-class.php
 * @param mixed $object [optional] <p>
 * 調べたいオブジェクトあるいはクラスの名前。
 * オブジェクトのメソッドからコールされた場合、このパラメータはオプションとなります。
 * </p>
 * @return string <i>object</i>
 * がインスタンスあるいは名前であるクラスの親クラス名を返します。
 * </p>
 * <p>
 * オブジェクトが親を持たない場合や指定したクラスが存在しない場合は <b>FALSE</b> を返します。
 * </p>
 * <p>
 * オブジェクトの外部からこのパラメータを省略してコールすると、
 * この関数は <b>FALSE</b> を返します
 */
function get_parent_class($object = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * クラスメソッドが存在するかどうかを確認する
 * @link http://php.net/manual/ja/function.method-exists.php
 * @param mixed $object <p>
 * オブジェクトのインスタンス、あるいはクラス名。
 * </p>
 * @param string $method_name <p>
 * メソッドの名前。
 * </p>
 * @return bool <i>method_name</i> で指定したメソッドが
 * 指定した <i>object</i> において定義されている場合に
 * <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
 */
function method_exists($object, string $method_name): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * オブジェクトもしくはクラスにプロパティが存在するかどうかを調べる
 * @link http://php.net/manual/ja/function.property-exists.php
 * @param mixed $class <p>
 * 確認するクラス名、もしくはクラスのオブジェクトを指定します。
 * </p>
 * @param string $property <p>
 * プロパティ名を指定します。
 * </p>
 * @return bool プロパティが存在している場合は <b>TRUE</b>、存在していない場合に <b>FALSE</b>、
 * エラー時には <b>NULL</b> を返します。
 */
function property_exists($class, string $property): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * クラスが定義済みかどうかを確認する
 * @link http://php.net/manual/ja/function.class-exists.php
 * @param string $class_name <p>
 * クラス名。大文字小文字は区別しません。
 * </p>
 * @param bool $autoload [optional] <p>
 * デフォルトで __autoload をコールするかしないか。
 * </p>
 * @return bool クラス <i>class_name</i> が定義されている場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function class_exists(string $class_name, bool $autoload = true): bool {}

/**
 * (PHP 5 &gt;= 5.0.2, PHP 7)<br/>
 * インターフェイスが宣言されているかどうかを確認する
 * @link http://php.net/manual/ja/function.interface-exists.php
 * @param string $interface_name <p>
 * インターフェイス名。
 * </p>
 * @param bool $autoload [optional] <p>
 * デフォルトで __autoload をコールするかどうか。
 * </p>
 * @return bool <i>interface_name</i>
 * で与えられたインターフェイスが宣言されていれば <b>TRUE</b> を返します。
 * そうでなければ <b>FALSE</b> を返します。
 */
function interface_exists(string $interface_name, bool $autoload = true): bool {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * トレイトが存在するかどうかを調べる
 * @link http://php.net/manual/ja/function.trait-exists.php
 * @param string $traitname <p>
 * 調べたいトレイトの名前。
 * </p>
 * @param bool $autoload [optional] <p>
 * まだロードされていない場合にオートロードするかどうか。
 * </p>
 * @return bool トレイトが存在する場合に <b>TRUE</b>、存在しない場合に <b>FALSE</b>、エラーが発生した場合に <b>NULL</b> を返します。
 */
function trait_exists(string $traitname, bool $autoload = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した関数が定義されている場合に <b>TRUE</b> を返す
 * @link http://php.net/manual/ja/function.function-exists.php
 * @param string $function_name <p>
 * 関数名を表す文字列。
 * </p>
 * @return bool <i>function_name</i> が存在し、関数である場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * この関数は、
 * <b>include_once</b> や <b>echo</b>
 * のような言語構造については <b>FALSE</b> を返します。
 */
function function_exists(string $function_name): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * クラスのエイリアスを作成する
 * @link http://php.net/manual/ja/function.class-alias.php
 * @param string $original <p>
 * 元となるクラス。
 * </p>
 * @param string $alias <p>
 * クラスのエイリアス名。
 * </p>
 * @param bool $autoload [optional] <p>
 * 元のクラスが見つからない場合にオートロードするかどうか。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function class_alias(string $original, string $alias, bool $autoload = true): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * include または require で読み込まれたファイルの名前を配列として返す
 * @link http://php.net/manual/ja/function.get-included-files.php
 * @return array すべてのファイル名を含む配列を返します。
 * </p>
 * <p>
 * 最初にコールされたスクリプトは "include されたファイル" という扱いに
 * なります。そのため、
 * <b>include</b> やその仲間たちにより
 * 読み込まれたファイルの一覧に含めて表示されます。
 * </p>
 * <p>
 * 複数回読み込まれているファイルも、
 * 返される配列には一度しかあらわれません。
 */
function get_included_files(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>get_included_files</b> のエイリアス
 * @link http://php.net/manual/ja/function.get-required-files.php
 */
function get_required_files() {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * あるオブジェクトが指定したクラスのサブクラスに属するか (あるいは指定したインターフェイスを実装しているか) どうかを調べる
 * @link http://php.net/manual/ja/function.is-subclass-of.php
 * @param mixed $object <p>
 * クラス名あるいはオブジェクトのインスタンス。
 * そのクラスが存在しなくても、エラーにはなりません。
 * </p>
 * @param string $class_name <p>
 * クラス名。
 * </p>
 * @param bool $allow_string [optional] <p>
 * このパラメータを false にすると、
 * クラス名を表す文字列を <i>object</i> に指定できなくなります。
 * そして、クラスが存在しない場合のオートローダーの呼び出しもしなくなります。
 * </p>
 * @return bool この関数は、オブジェクト <i>object</i>
 * が <i>superclass</i> のサブクラスであるクラスに属する場合に
 * <b>TRUE</b>、その他の場合に <b>FALSE</b> を返します。
 */
function is_subclass_of($object, string $class_name, bool $allow_string = true): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * オブジェクトがこのクラスのものであるか、このクラスをその親クラスのひとつとしているかどうかを調べる
 * @link http://php.net/manual/ja/function.is-a.php
 * @param object $object <p>
 * 調べたいオブジェクト。
 * </p>
 * @param string $class_name <p>
 * クラス名。
 * </p>
 * @param bool $allow_string [optional] <p>
 * このパラメータを <b>FALSE</b> にすると、
 * クラス名を表す文字列を <i>object</i> に指定できなくなります。
 * そして、クラスが存在しない場合のオートローダーの呼び出しもしなくなります。
 * </p>
 * @return bool オブジェクトがこのクラスのものであるか、
 * あるいはこのクラスをその親クラスのひとつとしている場合に
 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function is_a($object, string $class_name, bool $allow_string = false): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * クラスのデフォルトプロパティを取得する
 * @link http://php.net/manual/ja/function.get-class-vars.php
 * @param string $class_name <p>
 * クラス名。
 * </p>
 * @return array 宣言されているプロパティのうち、現在のスコープから見えるものとそのデフォルト値を連想配列で返します。
 * 返される配列要素は、<i>変数名 => 値</i> の形式となります。
 * エラーが発生した場合は <b>FALSE</b> を返します。
 */
function get_class_vars(string $class_name): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定したオブジェクトのプロパティを取得する
 * @link http://php.net/manual/ja/function.get-object-vars.php
 * @param object $object <p>
 * オブジェクトのインスタンス。
 * </p>
 * @return array 指定したオブジェクト <i>object</i> について、
 * そのスコープ内でアクセス可能な非 static プロパティを連想配列として返します。
 * プロパティに値が設定されていない場合は、<b>NULL</b> 値が返されます。
 */
function get_object_vars($object): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * クラスメソッドの名前を取得する
 * @link http://php.net/manual/ja/function.get-class-methods.php
 * @param mixed $class_name <p>
 * オブジェクトのインスタンスのクラス名。
 * </p>
 * @return array この関数は、指定したクラス <i>class_name</i>
 * についてメソッドの名前を配列として返します。
 * エラー時には <b>NULL</b> を返します。
 */
function get_class_methods($class_name): array {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * ユーザーレベルのエラー/警告/通知メッセージを生成する
 * @link http://php.net/manual/ja/function.trigger-error.php
 * @param string $error_msg <p>
 * このエラーに割り当てられたメッセージ。長さは最大 1024 バイトまでです。1024 バイトを超える部分は切り捨てられます。
 * </p>
 * @param int $error_type [optional] <p>
 * このエラーに割り当てられたエラー型です。E_USER 関連の定数のみが指定可能で、デフォルトは <b>E_USER_NOTICE</b> です。
 * </p>
 * @return bool この関数は、間違った <i>error_type</i> が指定された場合に <b>FALSE</b> を、それ以外の場合に <b>TRUE</b> を返します。
 */
function trigger_error(string $error_msg, int $error_type = E_USER_NOTICE): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>trigger_error</b> のエイリアス
 * @link http://php.net/manual/ja/function.user-error.php
 * @param $message
 * @param $error_type [optional]
 */
function user_error($message, $error_type) {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * ユーザー定義のエラーハンドラ関数を設定する
 * @link http://php.net/manual/ja/function.set-error-handler.php
 * @param callable $error_handler <p>
 * 次のシグネチャに従うコールバック。
 * <b>NULL</b> を渡すと、ハンドラをデフォルトの状態に戻せます。
 * 関数名のかわりにオブジェクトへのリファレンスとメソッド名を含む配列を指定することもできます。
 * </p>
 * <p>
 * bool<b>handler</b>
 * <b>int<i>errno</i></b>
 * <b>string<i>errstr</i></b>
 * <b>string<i>errfile</i></b>
 * <b>int<i>errline</i></b>
 * <b>array<i>errcontext</i></b>
 * <i>errno</i>
 * 最初のパラメータ <i>errno</i> は、発生させる
 * エラーのレベルを整数で格納します。
 * @param int $error_types [optional] <p>
 * 設定パラメータ
 * error_reporting
 * で表示するエラーを制御するのと全く同様に、
 * <i>error_handler</i> の起動を制御する際に
 * 使用可能です。
 * このマスクを指定しない場合、
 * <i>error_handler</i> は
 * error_reporting の設定によらず
 * 全てのエラーに関してコールされます。
 * </p>
 * @return mixed 前に定義されたエラーハンドラ(ある場合)を含む文字列を返します。
 * 組み込みのエラーハンドラを使用している場合は <b>NULL</b> を返します。
 * また、無効なコールバックなどでエラーとなった場合も <b>NULL</b> を返します。
 * 前に定義されたハンドラがクラスメソッドの場合、この関数は、
 * クラスとメソッド名からなる添字配列を返します。
 */
function set_error_handler(callable $error_handler, int $error_types = E_ALL | E_STRICT) {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 以前のエラーハンドラ関数を回復する
 * @link http://php.net/manual/ja/function.restore-error-handler.php
 * @return bool この関数は常に <b>TRUE</b> を返します。
 */
function restore_error_handler(): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * ユーザー定義の例外ハンドラ関数を設定する
 * @link http://php.net/manual/ja/function.set-exception-handler.php
 * @param callable $exception_handler <p>
 * キャッチされない例外が発生した際にコールされる関数の名前。
 * このハンドラ関数は、パラメータをひとつとる必要があります。
 * このパラメータは、スローされた例外オブジェクトとなります。
 * PHP 7 より前のバージョンでは、ハンドラのシグネチャは、次のようになります。
 * </p>
 * <p>
 * void<b>handler</b>
 * <b>Exception<i>ex</i></b>
 * </p>
 * <p>
 * PHP 7 からは、大半のエラーが <b>Error</b> 例外として報告されるようになりました。
 * これらもこのハンドラで扱うことになるでしょう。<b>Error</b> と
 * <b>Exception</b> は、どちらも <b>Throwable</b> インターフェイスを実装しています。
 * PHP 7 以降のハンドラのシグネチャは、次のようになります。
 * </p>
 * <p>
 * void<b>handler</b>
 * <b>Throwable<i>ex</i></b>
 * </p>
 * <p>
 * <b>NULL</b> を渡すと、このハンドラをデフォルトの状態に戻せます。
 * </p>
 * <p>
 * コールバックの <i>ex</i> パラメータにタイプヒントとして
 * <b>Exception</b> を明示すると、
 * PHP 7 での例外の階層の変更に伴う問題が発生することに注意しましょう。
 * </p>
 * @return callable 前に定義された例外ハンドラの名前、またはエラー発生時に <b>NULL</b> を返します。
 * 前にハンドラが定義されていない場合にも <b>NULL</b> が返されます。
 */
function set_exception_handler(callable $exception_handler): callable {}

/**
 * (PHP 5, PHP 7)<br/>
 * 以前の例外ハンドラ関数を回復する
 * @link http://php.net/manual/ja/function.restore-exception-handler.php
 * @return bool この関数は常に <b>TRUE</b> を返します。
 */
function restore_exception_handler(): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 定義済のクラスの名前を配列として返す
 * @link http://php.net/manual/ja/function.get-declared-classes.php
 * @return array この関数は、現在のスクリプトで宣言されたクラスの名前の配列を返します。
 * </p>
 * <p>
 * PHP にコンパイル時に組み込んだり読み込んだりしている拡張モジュールの種類に依存して、
 * 他のクラスも存在する可能性があることに注意しましょう。
 * これは、自作のクラスをそれらと同じ名前で作成できないことを意味します。
 * 定義済みのクラスについては付録の定義済みクラスのセクションを
 * 参照してください。
 */
function get_declared_classes(): array {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * 宣言されているすべてのトレイトの配列を返す
 * @link http://php.net/manual/ja/function.get-declared-traits.php
 * @return array 宣言されているすべてのトレイトの名前を値に持つ配列を返します。
 * 失敗した場合は <b>NULL</b> を返します。
 */
function get_declared_traits(): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * 宣言されている全てのインターフェイスの配列を返す
 * @link http://php.net/manual/ja/function.get-declared-interfaces.php
 * @return array 現在のスクリプトで宣言されているインターフェイス名の配列を返します。
 */
function get_declared_interfaces(): array {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 定義済みの全ての関数を配列で返す
 * @link http://php.net/manual/ja/function.get-defined-functions.php
 * @param bool $exclude_disabled [optional] <p>
 * Whether disabled functions should be excluded from the return value.
 * </p>
 * @return array この関数は、組込 (内部) 関数およびユーザー定義関数を共に含む定義済み
 * の全ての関数のリストを有する多次元配列を返します。内部関数は、
 * $arr["internal"]、ユーザー定義関数は
 * $arr["user"] によりアクセス可能となります
 * (以下の例を参照ください)。
 */
function get_defined_functions(bool $exclude_disabled = false): array {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 全ての定義済の変数を配列で返す
 * @link http://php.net/manual/ja/function.get-defined-vars.php
 * @return array すべての変数を含む多次元の配列を返します。
 */
function get_defined_vars(): array {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 匿名関数 (ラムダ形式) を作成する
 * @link http://php.net/manual/ja/function.create-function.php
 * @param string $args <p>
 * 関数の引数。
 * </p>
 * @param string $code <p>
 * 関数のコード。
 * </p>
 * @return string 一意な関数名を表す文字列、あるいはエラー時に <b>FALSE</b> を返します。
 */
function create_function(string $args, string $code): string {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * リソース型を返す
 * @link http://php.net/manual/ja/function.get-resource-type.php
 * @param resource $handle <p>
 * 評価されるリソースハンドル。
 * </p>
 * @return string 指定された <i>handle</i> がリソースであった場合、
 * この関数はその型を表す文字列を返します。この関数で型が判別できなかった
 * 場合は、返り値は文字列 Unknown となります。
 * </p>
 * <p>
 * もし <i>handle</i> がリソースでない場合、
 * この関数は <b>NULL</b> を返し、エラーを発生させます。
 */
function get_resource_type($handle): string {}

/**
 * (PHP 7)<br/>
 * アクティブなリソースを返す
 * @link http://php.net/manual/ja/function.get-resources.php
 * @param string $type [optional] <p>
 * 定義された場合、<b>get_resources</b> は、指定された型のリソースのみを返すようになります。
 * リソース型の一覧が使用できます。
 * </p>
 * <p>
 * string Unknown が型として指定された場合、
 * 不明な型のリソースのみが返されます。
 * </p>
 * <p>
 * 省略した場合、すべてのリソースが返されます。
 * </p>
 * @return array 現在アクティブなリソースの array を返します。
 * リソース番号でインデックス付けされます。
 */
function get_resources(string $type = null): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * コンパイル/ロードされている全てのモジュールの名前を配列として返す
 * @link http://php.net/manual/ja/function.get-loaded-extensions.php
 * @param bool $zend_extensions [optional] <p>
 * Zend 拡張モジュールのみを返します。指定しない場合は、
 * mysqli のような通常の拡張モジュールを返します。デフォルトは
 * <b>FALSE</b> (通常の拡張モジュールを返す) です。
 * </p>
 * @return array モジュール名の配列を返します。
 */
function get_loaded_extensions(bool $zend_extensions = false): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ある拡張機能がロードされているかどうかを調べる
 * @link http://php.net/manual/ja/function.extension-loaded.php
 * @param string $name <p>
 * 拡張モジュールの名前。大文字小文字を区別します。
 * </p>
 * <p>
 * <b>phpinfo</b>を使って種々の拡張モジュールの
 * 名前を見ることができます。PHP の
 * CGIまたはCLIバージョン
 * を使っている場合には -m スイッチで、
 * 使用できる全ての拡張モジュールのリストを得ることができます:
 * <pre>
 * $ php -m
 * [PHP Modules]
 * xml
 * tokenizer
 * standard
 * sockets
 * session
 * posix
 * pcre
 * overload
 * mysql
 * mbstring
 * ctype
 * [Zend Modules]
 * </pre>
 * </p>
 * @return bool <i>name</i> で指定する拡張機能がロードされている場合に
 * <b>TRUE</b> を返します。さもなければ <b>FALSE</b> を返します。
 */
function extension_loaded(string $name): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * あるモジュールの関数名を配列として返す
 * @link http://php.net/manual/ja/function.get-extension-funcs.php
 * @param string $module_name <p>
 * モジュール名。
 * </p>
 * <p>
 * このパラメータは 小文字
 * でなければなりません。
 * </p>
 * @return array すべての関数を含む配列を返します。
 * <i>module_name</i> が拡張モジュールでない場合は
 * <b>FALSE</b> を返します。
 */
function get_extension_funcs(string $module_name): array {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * すべての定数の名前とその値を連想配列として返す
 * @link http://php.net/manual/ja/function.get-defined-constants.php
 * @param bool $categorize [optional] <p>
 * これを渡すと、この関数は多次元の配列を返すようになります。
 * 最初の次元のキーがカテゴリとなり、
 * そのカテゴリ内の定数とその値が下位レベルに格納されます。
 * <code>
 * define("MY_CONSTANT", 1);
 * print_r(get_defined_constants(true));
 * </code>
 * 上の例の出力は、
 * たとえば以下のようになります。</p>
 * <pre>
 * Array
 * (
 * [Core] => Array
 * (
 * [E_ERROR] => 1
 * [E_WARNING] => 2
 * [E_PARSE] => 4
 * [E_NOTICE] => 8
 * [E_CORE_ERROR] => 16
 * [E_CORE_WARNING] => 32
 * [E_COMPILE_ERROR] => 64
 * [E_COMPILE_WARNING] => 128
 * [E_USER_ERROR] => 256
 * [E_USER_WARNING] => 512
 * [E_USER_NOTICE] => 1024
 * [E_ALL] => 2047
 * [TRUE] => 1
 * )
 * [pcre] => Array
 * (
 * [PREG_PATTERN_ORDER] => 1
 * [PREG_SET_ORDER] => 2
 * [PREG_OFFSET_CAPTURE] => 256
 * [PREG_SPLIT_NO_EMPTY] => 1
 * [PREG_SPLIT_DELIM_CAPTURE] => 2
 * [PREG_SPLIT_OFFSET_CAPTURE] => 4
 * [PREG_GREP_INVERT] => 1
 * )
 * [user] => Array
 * (
 * [MY_CONSTANT] => 1
 * )
 * )
 * </pre>
 * </p>
 * @return array 定数名 => 定数値 の配列の配列を返します。
 * オプションで、その定数を定義している拡張モジュール名ごとにグループ化することもできます。
 */
function get_defined_constants(bool $categorize = false): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * バックトレースを生成する
 * @link http://php.net/manual/ja/function.debug-backtrace.php
 * @param int $options [optional] <p>
 * PHP 5.3.6 以降、このパラメータは次のオプションのビットマスクとなります。
 * <table>
 * <b>debug_backtrace</b> のオプション
 * <tr valign="top">
 * <td>DEBUG_BACKTRACE_PROVIDE_OBJECT</td>
 * <td>
 * "object" インデックスを埋めるかどうか。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>DEBUG_BACKTRACE_IGNORE_ARGS</td>
 * <td>
 * "args" インデックスを無視してすべての関数/メソッドの引数をメモリに格納するかどうか。
 * </td>
 * </tr>
 * </table>
 * 5.3.6 より前のバージョンでは <b>TRUE</b> あるいは <b>FALSE</b> しか指定できませんでした。これは
 * <b>DEBUG_BACKTRACE_PROVIDE_OBJECT</b> オプションを指定するかしないかを意味します。
 * </p>
 * @param int $limit [optional] <p>
 * 5.4.0 以降、このパラメータを使ってスタックフレームの数を制限できるようになりました。
 * デフォルト (<i>limit</i>=0) は、すべてのスタックフレームを返します。
 * </p>
 * @return array 連想配列の配列を返します。連想配列の要素として返される可能性があるものは以下のとおりです。
 * </p>
 * <p>
 * <table>
 * <b>debug_backtrace</b> から返される可能性がある要素
 * <tr valign="top">
 * <td>名前</td>
 * <td>型</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>function</td>
 * <td>string</td>
 * <td>
 * カレントの関数名。
 * __FUNCTION__
 * も参照してください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>line</td>
 * <td>integer</td>
 * <td>
 * カレントの行番号。
 * __LINE__
 * も参照してください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>file</td>
 * <td>string</td>
 * <td>
 * カレントのファイル名。
 * __FILE__
 * も参照してください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>class</td>
 * <td>string</td>
 * <td>
 * カレントのクラス名。
 * __CLASS__
 * も参照してください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>object</td>
 * <td>object</td>
 * <td>
 * カレントのオブジェクト。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>type</td>
 * <td>string</td>
 * <td>
 * カレントのコール方式。メソッド呼び出しの場合は "->"、
 * 静的なメソッド呼び出しの場合は "::" が返されます。
 * 関数呼び出しの場合は何も返されません。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>args</td>
 * <td>array</td>
 * <td>
 * 関数の内部の場合、関数の引数のリストとなります。
 * インクルードされたファイル内では、
 * 読み込まれたファイルの名前となります。
 * </td>
 * </tr>
 * </table>
 */
function debug_backtrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * バックトレースを表示する
 * @link http://php.net/manual/ja/function.debug-print-backtrace.php
 * @param int $options [optional] <p>
 * PHP 5.3.6 の時点では、このパラメータは次のオプションのビットマスクとなります。
 * <table>
 * <b>debug_print_backtrace</b> のオプション
 * <tr valign="top">
 * <td>DEBUG_BACKTRACE_IGNORE_ARGS</td>
 * <td>
 * "args" インデックスを無視してすべての関数/メソッドの引数をメモリに格納するかどうか。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param int $limit [optional] <p>
 * 5.4.0 以降、このパラメータを使ってスタックフレームの数を制限できるようになりました。
 * デフォルト (<i>limit</i>=0) は、すべてのスタックフレームを表示します。
 * </p>
 * @return void 値を返しません。
 */
function debug_print_backtrace(int $options = 0, int $limit = 0): void {}

/**
 * (PHP 7)<br/>
 * Zend Engine のメモリーマネージャによって使用されたメモリーを再利用する
 * @link http://php.net/manual/ja/function.gc-mem-caches.php
 * @return int 解放されたバイト数を返します。
 */
function gc_mem_caches(): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * すべての既存ガベージサイクルを強制的に収集する
 * @link http://php.net/manual/ja/function.gc-collect-cycles.php
 * @return int 収集したサイクルの数を返します。
 */
function gc_collect_cycles(): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 循環参照コレクタの状態を返す
 * @link http://php.net/manual/ja/function.gc-enabled.php
 * @return bool ガベージコレクタが有効な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
 */
function gc_enabled(): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 循環参照コレクタを有効にする
 * @link http://php.net/manual/ja/function.gc-enable.php
 * @return void 値を返しません。
 */
function gc_enable(): void {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 循環参照コレクタを無効にする
 * @link http://php.net/manual/ja/function.gc-disable.php
 * @return void 値を返しません。
 */
function gc_disable(): void {}


/**
 * 重大な実行時エラー。これは、メモリ確保に関する問題のように復帰で
 * きないエラーを示します。スクリプトの実行は中断されます。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_ERROR', 1);

/**
 * キャッチできる致命的なエラー。危険なエラーが発生したが、
 * エンジンが不安定な状態になるほどではないことを表す。
 * ユーザー定義のハンドラでエラーがキャッチされなかった場合
 * (<b>set_error_handler</b> も参照ください) は、
 * <b>E_ERROR</b> として異常終了する。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_RECOVERABLE_ERROR', 4096);

/**
 * 実行時の警告 (致命的なエラーではない)。スクリプトの実行は中断さ
 * れません。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_WARNING', 2);

/**
 * コンパイル時のパースエラー。パースエラーはパーサでのみ生成されま
 * す。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_PARSE', 4);

/**
 * 実行時の警告。エラーを発しうる状況に遭遇したことを示す。
 * ただし通常のスクリプト実行の場合にもこの警告を発することがありうる。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_NOTICE', 8);

/**
 * コードの相互運用性や互換性を維持するために
 * PHP がコードの変更を提案する。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_STRICT', 2048);

/**
 * 実行時の注意。これを有効にすると、
 * 将来のバージョンで動作しなくなるコードについての警告を受け取ることができる。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_DEPRECATED', 8192);

/**
 * PHPの初期始動時点での致命的なエラー。<b>E_ERROR</b>に
 * 似ているがPHPのコアによって発行される点が違う。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_CORE_ERROR', 16);

/**
 * （致命的ではない）警告。PHPの初期始動時に発生する。
 * <b>E_WARNING</b>に似ているがPHPのコアによって発行される
 * 点が違う。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_CORE_WARNING', 32);

/**
 * コンパイル時の致命的なエラー。<b>E_ERROR</b>に
 * 似ているがZendスクリプティングエンジンによって発行される点が違う。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_COMPILE_ERROR', 64);

/**
 * コンパイル時の警告（致命的ではない）。<b>E_WARNING</b>に
 * 似ているがZendスクリプティングエンジンによって発行される点が違う。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_COMPILE_WARNING', 128);

/**
 * ユーザーによって発行されるエラーメッセージ。<b>E_ERROR</b>
 * に似ているがPHPコード上で<b>trigger_error</b>関数を
 * 使用した場合に発行される点が違う。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_USER_ERROR', 256);

/**
 * ユーザーによって発行される警告メッセージ。<b>E_WARNING</b>
 * に似ているがPHPコード上で<b>trigger_error</b>関数を
 * 使用した場合に発行される点が違う。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_USER_WARNING', 512);

/**
 * ユーザーによって発行される注意メッセージ。<b>E_NOTICE</b>に
 * に似ているがPHPコード上で<b>trigger_error</b>関数を
 * 使用した場合に発行される点が違う。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_USER_NOTICE', 1024);

/**
 * ユーザー定義の警告メッセージ。これは
 * <b>E_DEPRECATED</b> と同等だが、
 * PHP のコード上で関数 <b>trigger_error</b>
 * によって作成されるという点が異なる。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_USER_DEPRECATED', 16384);

/**
 * サポートされる全てのエラーと警告。
 * PHP 5.4.0 より前のバージョンでは、<b>E_STRICT</b> レベルのエラーは除く。
 * @link http://php.net/manual/ja/errorfunc.constants.php
 */
define ('E_ALL', 32767);
define ('DEBUG_BACKTRACE_PROVIDE_OBJECT', 1);
define ('DEBUG_BACKTRACE_IGNORE_ARGS', 2);
define ('TRUE', true);
define ('FALSE', false);
define ('ZEND_THREAD_SAFE', false);
define ('ZEND_DEBUG_BUILD', false);
define ('NULL', null);
define ('PHP_VERSION', "7.0.19");
define ('PHP_MAJOR_VERSION', 7);
define ('PHP_MINOR_VERSION', 0);
define ('PHP_RELEASE_VERSION', 19);
define ('PHP_EXTRA_VERSION', "");
define ('PHP_VERSION_ID', 70019);
define ('PHP_ZTS', 0);
define ('PHP_DEBUG', 0);
define ('PHP_OS', "Linux");
define ('PHP_SAPI', "cli");
define ('DEFAULT_INCLUDE_PATH', ".:/usr/share/php");
define ('PEAR_INSTALL_DIR', "/usr/share/php");
define ('PEAR_EXTENSION_DIR', "/usr/lib/php/20151012");
define ('PHP_EXTENSION_DIR', "/usr/lib/php/20151012");
define ('PHP_PREFIX', "/usr");
define ('PHP_BINDIR', "/usr/bin");
define ('PHP_MANDIR', "/usr/share/man");
define ('PHP_LIBDIR', "/usr/lib/php");
define ('PHP_DATADIR', "/usr/share/php/7.0");
define ('PHP_SYSCONFDIR', "/etc");
define ('PHP_LOCALSTATEDIR', "/var");
define ('PHP_CONFIG_FILE_PATH', "/etc/php/7.0/cli");
define ('PHP_CONFIG_FILE_SCAN_DIR', "/etc/php/7.0/cli/conf.d");
define ('PHP_SHLIB_SUFFIX', "so");
define ('PHP_EOL', "\n");
define ('PHP_MAXPATHLEN', 4096);
define ('PHP_INT_MAX', 9223372036854775807);
define ('PHP_INT_MIN', -9223372036854775808);
define ('PHP_INT_SIZE', 8);
define ('PHP_BINARY', "/usr/bin/php7.0");

/**
 * <p>
 * 出力バッファリングが始まったことを表します。
 * </p>
 * @link http://php.net/manual/ja/outcontrol.constants.php
 */
define ('PHP_OUTPUT_HANDLER_START', 1);

/**
 * <p>
 * 出力バッファがフラッシュされ、データが出力されたことを表します。
 * </p>
 * <p>
 * PHP 5.4 以降で利用可能です。
 * </p>
 * @link http://php.net/manual/ja/outcontrol.constants.php
 */
define ('PHP_OUTPUT_HANDLER_WRITE', 0);

/**
 * <p>
 * バッファがフラッシュされたことを表します。
 * </p>
 * <p>
 * PHP 5.4 以降で利用可能です。
 * </p>
 * @link http://php.net/manual/ja/outcontrol.constants.php
 */
define ('PHP_OUTPUT_HANDLER_FLUSH', 4);

/**
 * <p>
 * 出力バッファが消去されたことを表します。
 * </p>
 * <p>
 * PHP 5.4 以降で利用可能です。
 * </p>
 * @link http://php.net/manual/ja/outcontrol.constants.php
 */
define ('PHP_OUTPUT_HANDLER_CLEAN', 2);

/**
 * <p>
 * 出力バッファリングの最終操作であることを表します。
 * </p>
 * <p>
 * PHP 5.4 以降で利用可能です。
 * </p>
 * @link http://php.net/manual/ja/outcontrol.constants.php
 */
define ('PHP_OUTPUT_HANDLER_FINAL', 8);

/**
 * <p>
 * バッファはフラッシュされたけれども、出力バッファリングはまだ続くことを表します。
 * </p>
 * <p>
 * PHP 5.4 の時点では、これは
 * <b>PHP_OUTPUT_HANDLER_WRITE</b>
 * のエイリアスです。
 * </p>
 * @link http://php.net/manual/ja/outcontrol.constants.php
 */
define ('PHP_OUTPUT_HANDLER_CONT', 0);

/**
 * <p>
 * 出力バッファリングが終わったことを表します。
 * </p>
 * <p>
 * PHP 5.4 の時点では、これは
 * <b>PHP_OUTPUT_HANDLER_FINAL</b>
 * のエイリアスです。
 * </p>
 * @link http://php.net/manual/ja/outcontrol.constants.php
 */
define ('PHP_OUTPUT_HANDLER_END', 8);

/**
 * <p>
 * <b>ob_start</b> が作る出力バッファをクリーンできるかどうかを設定します。
 * </p>
 * <p>
 * PHP 5.4 以降で利用可能です。
 * </p>
 * @link http://php.net/manual/ja/outcontrol.constants.php
 */
define ('PHP_OUTPUT_HANDLER_CLEANABLE', 16);

/**
 * <p>
 * <b>ob_start</b> が作る出力バッファをフラッシュできるかどうかを設定します。
 * </p>
 * <p>
 * PHP 5.4 以降で利用可能です。
 * </p>
 * @link http://php.net/manual/ja/outcontrol.constants.php
 */
define ('PHP_OUTPUT_HANDLER_FLUSHABLE', 32);

/**
 * <p>
 * <b>ob_start</b> が作る出力バッファをスクリプトの終了前に削除できるかどうかを設定します。
 * </p>
 * <p>
 * PHP 5.4 以降で利用可能です。
 * </p>
 * @link http://php.net/manual/ja/outcontrol.constants.php
 */
define ('PHP_OUTPUT_HANDLER_REMOVABLE', 64);

/**
 * <p>
 * 出力バッファのフラグのデフォルト設定。
 * <b>PHP_OUTPUT_HANDLER_CLEANABLE</b> |
 * <b>PHP_OUTPUT_HANDLER_FLUSHABLE</b> |
 * <b>PHP_OUTPUT_HANDLER_REMOVABLE</b> と同等です。
 * </p>
 * <p>
 * PHP 5.4 以降で利用可能です。
 * </p>
 * @link http://php.net/manual/ja/outcontrol.constants.php
 */
define ('PHP_OUTPUT_HANDLER_STDFLAGS', 112);
define ('PHP_OUTPUT_HANDLER_STARTED', 4096);
define ('PHP_OUTPUT_HANDLER_DISABLED', 8192);
define ('UPLOAD_ERR_OK', 0);
define ('UPLOAD_ERR_INI_SIZE', 1);
define ('UPLOAD_ERR_FORM_SIZE', 2);
define ('UPLOAD_ERR_PARTIAL', 3);
define ('UPLOAD_ERR_NO_FILE', 4);
define ('UPLOAD_ERR_NO_TMP_DIR', 6);
define ('UPLOAD_ERR_CANT_WRITE', 7);
define ('UPLOAD_ERR_EXTENSION', 8);
define ('STDIN', "Resource id #1");
define ('STDOUT', "Resource id #2");
define ('STDERR', "Resource id #3");

// End of Core v.7.0.19
?>
