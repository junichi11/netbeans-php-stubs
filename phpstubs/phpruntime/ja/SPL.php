<?php

// Start of SPL v.7.0.19

/**
 * プログラムのロジック内でのエラーを表す例外です。
 * この類の例外が出た場合は、自分が書いたコードを修正すべきです。
 * @link http://php.net/manual/ja/class.logicexception.php
 */
class LogicException extends Exception implements Throwable {
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
 * 未定義の関数をコールバックが参照したり、引数を指定しなかったりした場合にスローされる例外です。
 * @link http://php.net/manual/ja/class.badfunctioncallexception.php
 */
class BadFunctionCallException extends LogicException implements Throwable {
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
 * 未定義のメソッドをコールバックが参照したり、引数を指定しなかったりした場合にスローされる例外です。
 * @link http://php.net/manual/ja/class.badmethodcallexception.php
 */
class BadMethodCallException extends BadFunctionCallException implements Throwable {
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
 * 定義したデータドメインに値が従わないときにスローされる例外です。
 * @link http://php.net/manual/ja/class.domainexception.php
 */
class DomainException extends LogicException implements Throwable {
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
 * 引数の型が期待する型と一致しなかった場合にスローされる例外です。
 * @link http://php.net/manual/ja/class.invalidargumentexception.php
 */
class InvalidArgumentException extends LogicException implements Throwable {
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
 * 長さが無効な場合にスローされる例外です。
 * @link http://php.net/manual/ja/class.lengthexception.php
 */
class LengthException extends LogicException implements Throwable {
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
 * 無効なインデックスを要求した場合にスローされる例外です。
 * これは、コンパイル時に検出しなければなりません。
 * @link http://php.net/manual/ja/class.outofrangeexception.php
 */
class OutOfRangeException extends LogicException implements Throwable {
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
 * 実行時にだけ発生するようなエラーの際にスローされます。
 * @link http://php.net/manual/ja/class.runtimeexception.php
 */
class RuntimeException extends Exception implements Throwable {
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
 * 値が有効なキーでなかった場合にスローされる例外です。
 * これは、コンパイル時には検出できないエラーです。
 * @link http://php.net/manual/ja/class.outofboundsexception.php
 */
class OutOfBoundsException extends RuntimeException implements Throwable {
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
 * いっぱいになっているコンテナに要素を追加した場合にスローされる例外です。
 * @link http://php.net/manual/ja/class.overflowexception.php
 */
class OverflowException extends RuntimeException implements Throwable {
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
 * プログラムの実行時に範囲エラーが発生したことを示すときにスローされる例外です。
 * 通常は、アンダーフローやオーバーフロー以外の計算エラーが発生したことを意味します。
 * これは、実行時版の
 * <b>DomainException</b> です。
 * @link http://php.net/manual/ja/class.rangeexception.php
 */
class RangeException extends RuntimeException implements Throwable {
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
 * 空のコンテナ上で無効な操作 (要素の削除など) を試みたときにスローされる例外です。
 * @link http://php.net/manual/ja/class.underflowexception.php
 */
class UnderflowException extends RuntimeException implements Throwable {
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
 * いくつかの値のセットに一致しない値であった際にスローされる例外です。
 * これが発生する例としては、ある関数が別の関数をコールしていて、
 * その関数の返り値が特定の型や値である
 * (そして計算やバッファ関連のエラーがない) ことを想定している場合があります。
 * @link http://php.net/manual/ja/class.unexpectedvalueexception.php
 */
class UnexpectedValueException extends RuntimeException implements Throwable {
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
 * <b>RecursiveIterator</b> を実装したクラスは、
 * イテレータ群を再帰的に反復処理するときに使うことができます。
 * @link http://php.net/manual/ja/class.recursiveiterator.php
 */
interface RecursiveIterator extends Iterator, Traversable {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のエントリのイテレータを作れるかどうかを返す
	 * @link http://php.net/manual/ja/recursiveiterator.haschildren.php
	 * @return bool 現在のエントリが反復処理可能な場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	abstract public function hasChildren(): bool;

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のエントリのイテレータを返す
	 * @link http://php.net/manual/ja/recursiveiterator.getchildren.php
	 * @return RecursiveIterator 現在のエントリのイテレータを返します。
	 */
	abstract public function getChildren(): RecursiveIterator;

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
 * 再帰的なイテレータの反復処理に使用します。
 * @link http://php.net/manual/ja/class.recursiveiteratoriterator.php
 */
class RecursiveIteratorIterator implements Iterator, Traversable, OuterIterator {
	const LEAVES_ONLY = 0;
	const SELF_FIRST = 1;
	const CHILD_FIRST = 2;
	const CATCH_GET_CHILD = 16;


	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
	 * RecursiveIteratorIterator を作成する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.construct.php
	 * @param Traversable $iterator <p>
	 * 作成する元となるイテレータ。
	 * <b>RecursiveIterator</b> あるいは <b>IteratorAggregate</b>。
	 * </p>
	 * @param int $mode [optional] <p>
	 * オプションのモード。これらの値が指定できます。
	 * <b>RecursiveIteratorIterator::LEAVES_ONLY</b>
	 * - デフォルト。イテレーションで葉ノードだけを取り上げます。
	 * <b>RecursiveIteratorIterator::SELF_FIRST</b>
	 * - イテレーションで葉と親を (親から先に) 取り上げます。
	 * <b>RecursiveIteratorIterator::CHILD_FIRST</b>
	 * - イテレーションで葉と親を (葉から先に) 取り上げます。
	 * </p>
	 * @param int $flags [optional] <p>
	 * オプションのフラグ。指定できる値は <b>RecursiveIteratorIterator::CATCH_GET_CHILD</b>
	 * で、<b>RecursiveIteratorIterator::getChildren</b> のコール時にスローされた例外を無視します。
	 * </p>
	 */
	public function __construct(Traversable $iterator, int $mode = RecursiveIteratorIterator::LEAVES_ONLY, int $flags = 0) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * トップレベルの内部イテレータの先頭要素にイテレータを巻き戻す
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の位置が有効かどうかをチェックする
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.valid.php
	 * @return bool 現在の位置が有効な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在のキーにアクセスする
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.key.php
	 * @return mixed 現在のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の要素の値にアクセスする
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.current.php
	 * @return mixed 現在の要素の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 次の要素に移動する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 再帰的なイテレーションにおける現在の深さを取得する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.getdepth.php
	 * @return int 再帰的なイテレーションにおける現在の深さを返します。
	 */
	public function getDepth(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の有効なサブイテレータを取得する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.getsubiterator.php
	 * @param int $level [optional] <p>
	 * </p>
	 * @return RecursiveIterator 現在の有効なサブイテレータを返します。
	 */
	public function getSubIterator(int $level = null): RecursiveIterator {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.getinneriterator.php
	 * @return iterator 現在アクティブなサブイテレータを返します。
	 */
	public function getInnerIterator(): iterator {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 反復処理を開始する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.beginiteration.php
	 * @return void 値を返しません。
	 */
	public function beginIteration(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 反復処理を終了する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.enditeration.php
	 * @return void 値を返しません。
	 */
	public function endIteration(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 子を持つかどうかを調べる
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.callhaschildren.php
	 * @return bool 要素に子がある場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function callHasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 子を取得する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.callgetchildren.php
	 * @return RecursiveIterator <b>RecursiveIterator</b> を返します。
	 */
	public function callGetChildren(): RecursiveIterator {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 子を開始する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.beginchildren.php
	 * @return void 値を返しません。
	 */
	public function beginChildren(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 子を終了する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.endchildren.php
	 * @return void 値を返しません。
	 */
	public function endChildren(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 次の要素
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.nextelement.php
	 * @return void 値を返しません。
	 */
	public function nextElement(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 最大の深さを設定する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.setmaxdepth.php
	 * @param string $max_depth [optional] <p>
	 * 許可される最大の深さ。-1
	 * を指定すると無制限にできます。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setMaxDepth(string $max_depth = '-1'): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 最大の深さを取得する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.getmaxdepth.php
	 * @return mixed 許可される最大の深さ、あるいは無制限の場合に <b>FALSE</b> を返します。
	 */
	public function getMaxDepth() {}

}

/**
 * <b>OuterIterator</b> を実装したクラスは、
 * イテレータ群の反復処理に使うことができます。
 * @link http://php.net/manual/ja/class.outeriterator.php
 */
interface OuterIterator extends Iterator, Traversable {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のエントリの内部イテレータを返す
	 * @link http://php.net/manual/ja/outeriterator.getinneriterator.php
	 * @return Iterator 現在のエントリの内部イテレータを返します。
	 */
	abstract public function getInnerIterator(): Iterator;

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
 * このイテレータラッパーを使うと、
 * Traversable
 * なものなら何でもイテレータに変換することができます。
 * 注意すべきなのは、Iterator を実装していない大半のクラスにはそれなりの理由
 * (Iterator の機能群を完全には提供できないなど)
 * があるということです。
 * もしそうならば、誤使用を防ぐような方法を提供すべきです、
 * でなければ、例外や致命的なエラーが起こり得ます。
 * @link http://php.net/manual/ja/class.iteratoriterator.php
 */
class IteratorIterator implements Iterator, Traversable, OuterIterator {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * traversable な何かからイテレータを作成する
	 * @link http://php.net/manual/ja/iteratoriterator.construct.php
	 * @param Traversable $iterator <p>
	 * traversable なイテレータ。
	 * </p>
	 */
	public function __construct(Traversable $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 最初の要素に巻き戻す
	 * @link http://php.net/manual/ja/iteratoriterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータが有効かどうかを調べる
	 * @link http://php.net/manual/ja/iteratoriterator.valid.php
	 * @return bool イテレータが有効な場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素のキーを取得する
	 * @link http://php.net/manual/ja/iteratoriterator.key.php
	 * @return scalar 現在の要素のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の値を取得する
	 * @link http://php.net/manual/ja/iteratoriterator.current.php
	 * @return mixed 現在の要素の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 次の要素に移動する
	 * @link http://php.net/manual/ja/iteratoriterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/iteratoriterator.getinneriterator.php
	 * @return Traversable <b>IteratorIterator::__construct</b> に渡した内部イテレータを返します。
	 */
	public function getInnerIterator(): Traversable {}

}

/**
 * この抽象イテレータは、望まざる値をフィルタリングします。
 * 独自のイテレータフィルタを実装するには、このクラスを継承しなければなりません。
 * また、サブクラスでは <b>FilterIterator::accept</b>
 * を実装する必要があります。
 * @link http://php.net/manual/ja/class.filteriterator.php
 */
abstract class FilterIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * filterIterator を作成する
	 * @link http://php.net/manual/ja/filteriterator.construct.php
	 * @param Iterator $iterator <p>
	 * フィルタリングの対象となるイテレータ。
	 * </p>
	 */
	public function __construct(Iterator $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/filteriterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素が有効かどうかをチェックする
	 * @link http://php.net/manual/ja/filteriterator.valid.php
	 * @return bool 現在の要素が有効である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のキーを取得する
	 * @link http://php.net/manual/ja/filteriterator.key.php
	 * @return mixed 現在のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素の値を取得する
	 * @link http://php.net/manual/ja/filteriterator.current.php
	 * @return mixed 現在の要素の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを前に移動する
	 * @link http://php.net/manual/ja/filteriterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/filteriterator.getinneriterator.php
	 * @return Iterator 内部イテレータを返します。
	 */
	public function getInnerIterator(): Iterator {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータの現在の要素がフィルタを満たすかどうかを調べる
	 * @link http://php.net/manual/ja/filteriterator.accept.php
	 * @return bool 現在の要素が通過する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	abstract public function accept(): bool;

}

/**
 * この抽象イテレータは、不要な値を <b>RecursiveIterator</b> から取り除きます。
 * このクラスを継承して、独自のフィルタを実装することができます。
 * <b>RecursiveFilterIterator::accept</b> は、サブクラスで必ず実装しなければなりません。
 * @link http://php.net/manual/ja/class.recursivefilteriterator.php
 */
abstract class RecursiveFilterIterator extends FilterIterator implements Iterator, Traversable, OuterIterator, RecursiveIterator {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * RecursiveIterator から RecursiveFilterIterator を作成する
	 * @link http://php.net/manual/ja/recursivefilteriterator.construct.php
	 * @param RecursiveIterator $iterator <p>
	 * フィルタリングする <b>RecursiveIterator</b>。
	 * </p>
	 */
	public function __construct(RecursiveIterator $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータの現在の要素が子を持つかどうかを調べる
	 * @link http://php.net/manual/ja/recursivefilteriterator.haschildren.php
	 * @return bool 内部イテレータが子を持つ場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * RecursiveFilterIterator に含まれる内部イテレータの子を返す
	 * @link http://php.net/manual/ja/recursivefilteriterator.getchildren.php
	 * @return RecursiveFilterIterator <b>RecursiveFilterIterator</b> に含まれる内部イテレータの子を返します。
	 */
	public function getChildren(): RecursiveFilterIterator {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/filteriterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素が有効かどうかをチェックする
	 * @link http://php.net/manual/ja/filteriterator.valid.php
	 * @return bool 現在の要素が有効である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のキーを取得する
	 * @link http://php.net/manual/ja/filteriterator.key.php
	 * @return mixed 現在のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素の値を取得する
	 * @link http://php.net/manual/ja/filteriterator.current.php
	 * @return mixed 現在の要素の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを前に移動する
	 * @link http://php.net/manual/ja/filteriterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/filteriterator.getinneriterator.php
	 * @return Iterator 内部イテレータを返します。
	 */
	public function getInnerIterator(): Iterator {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータの現在の要素がフィルタを満たすかどうかを調べる
	 * @link http://php.net/manual/ja/filteriterator.accept.php
	 * @return bool 現在の要素が通過する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	abstract public function accept(): bool;

}

/**
 * @link http://php.net/manual/ja/class.callbackfilteriterator.php
 */
class CallbackFilterIterator extends FilterIterator implements Iterator, Traversable, OuterIterator {

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * フィルタリングしたイテレータを別のイテレータから作成する
	 * @link http://php.net/manual/ja/callbackfilteriterator.construct.php
	 * @param Iterator $iterator
	 * @param $callback
	 */
	public function __construct(Iterator $iterator, $callback) {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * 現在の値、現在のキー、そして内部イテレータを引数としてでコールバックを呼び出す
	 * @link http://php.net/manual/ja/callbackfilteriterator.accept.php
	 * @return string 現在のアイテムを受け付ける場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function accept(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/filteriterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素が有効かどうかをチェックする
	 * @link http://php.net/manual/ja/filteriterator.valid.php
	 * @return bool 現在の要素が有効である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のキーを取得する
	 * @link http://php.net/manual/ja/filteriterator.key.php
	 * @return mixed 現在のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素の値を取得する
	 * @link http://php.net/manual/ja/filteriterator.current.php
	 * @return mixed 現在の要素の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを前に移動する
	 * @link http://php.net/manual/ja/filteriterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/filteriterator.getinneriterator.php
	 * @return Iterator 内部イテレータを返します。
	 */
	public function getInnerIterator(): Iterator {}

}

/**
 * @link http://php.net/manual/ja/class.recursivecallbackfilteriterator.php
 */
class RecursiveCallbackFilterIterator extends CallbackFilterIterator implements OuterIterator, Traversable, Iterator, RecursiveIterator {

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * RecursiveIterator から RecursiveCallbackFilterIterator を作成する
	 * @link http://php.net/manual/ja/recursivecallbackfilteriterator.construct.php
	 * @param RecursiveIterator $iterator
	 * @param $callback
	 */
	public function __construct(RecursiveIterator $iterator, $callback) {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * 内部イテレータの現在の要素が子を持つかどうかを調べる
	 * @link http://php.net/manual/ja/recursivecallbackfilteriterator.haschildren.php
	 * @return bool 現在の要素が子を持つときに <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * RecursiveCallbackFilterIterator に含まれる内部イテレータの子を返す
	 * @link http://php.net/manual/ja/recursivecallbackfilteriterator.getchildren.php
	 * @return RecursiveCallbackFilterIterator 子を含む <b>RecursiveCallbackFilterIterator</b>
	 * を返します。
	 */
	public function getChildren(): RecursiveCallbackFilterIterator {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * 現在の値、現在のキー、そして内部イテレータを引数としてでコールバックを呼び出す
	 * @link http://php.net/manual/ja/callbackfilteriterator.accept.php
	 * @return string 現在のアイテムを受け付ける場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function accept(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/filteriterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素が有効かどうかをチェックする
	 * @link http://php.net/manual/ja/filteriterator.valid.php
	 * @return bool 現在の要素が有効である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のキーを取得する
	 * @link http://php.net/manual/ja/filteriterator.key.php
	 * @return mixed 現在のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素の値を取得する
	 * @link http://php.net/manual/ja/filteriterator.current.php
	 * @return mixed 現在の要素の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを前に移動する
	 * @link http://php.net/manual/ja/filteriterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/filteriterator.getinneriterator.php
	 * @return Iterator 内部イテレータを返します。
	 */
	public function getInnerIterator(): Iterator {}

}

/**
 * これは <b>FilterIterator</b> を継承したクラスで、
 * <b>RecursiveIteratorIterator</b>
 * を使った再帰的な反復処理をできるようにします。
 * ただし、子を持つ要素しか表示しません。
 * @link http://php.net/manual/ja/class.parentiterator.php
 */
class ParentIterator extends RecursiveFilterIterator implements RecursiveIterator, OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ParentIterator を作成する
	 * @link http://php.net/manual/ja/parentiterator.construct.php
	 * @param RecursiveIterator $iterator <p>
	 * 作成する元となるイテレータ。
	 * </p>
	 */
	public function __construct(RecursiveIterator $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 受け入れ可能かどうかを調べる
	 * @link http://php.net/manual/ja/parentiterator.accept.php
	 * @return bool 受け入れ可能な場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function accept(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータの現在の要素が子を持つかどうかを調べる
	 * @link http://php.net/manual/ja/recursivefilteriterator.haschildren.php
	 * @return bool 内部イテレータが子を持つ場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * RecursiveFilterIterator に含まれる内部イテレータの子を返す
	 * @link http://php.net/manual/ja/recursivefilteriterator.getchildren.php
	 * @return RecursiveFilterIterator <b>RecursiveFilterIterator</b> に含まれる内部イテレータの子を返します。
	 */
	public function getChildren(): RecursiveFilterIterator {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/filteriterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素が有効かどうかをチェックする
	 * @link http://php.net/manual/ja/filteriterator.valid.php
	 * @return bool 現在の要素が有効である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のキーを取得する
	 * @link http://php.net/manual/ja/filteriterator.key.php
	 * @return mixed 現在のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素の値を取得する
	 * @link http://php.net/manual/ja/filteriterator.current.php
	 * @return mixed 現在の要素の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを前に移動する
	 * @link http://php.net/manual/ja/filteriterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/filteriterator.getinneriterator.php
	 * @return Iterator 内部イテレータを返します。
	 */
	public function getInnerIterator(): Iterator {}

}

/**
 * <b>Countable</b> を実装したクラスは、
 * <b>count</b> 関数で使用することができます。
 * @link http://php.net/manual/ja/class.countable.php
 */
interface Countable  {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * オブジェクトの要素数を数える
	 * @link http://php.net/manual/ja/countable.count.php
	 * @return int 要素数を integer 型で返します。
	 * </p>
	 * <p>
	 * 返り値は integer 型にキャストされます。
	 */
	abstract public function count(): int;

}

/**
 * Seekable イテレータです。
 * @link http://php.net/manual/ja/class.seekableiterator.php
 */
interface SeekableIterator extends Iterator, Traversable {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 位置を移動する
	 * @link http://php.net/manual/ja/seekableiterator.seek.php
	 * @param int $position <p>
	 * 移動先の位置。
	 * </p>
	 * @return void 値を返しません。
	 */
	abstract public function seek(int $position): void;

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
 * <b>LimitIterator</b> クラスは、ある
 * <b>Iterator</b> 上の限られたサブセットに対する反復処理を行います。
 * @link http://php.net/manual/ja/class.limititerator.php
 */
class LimitIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * LimitIterator を作成する
	 * @link http://php.net/manual/ja/limititerator.construct.php
	 * @param Iterator $iterator <p>
	 * 制限したいイテレータ。
	 * </p>
	 * @param int $offset [optional] <p>
	 * オプションの開始位置。
	 * </p>
	 * @param int $count [optional] <p>
	 * オプションの要素数。
	 * </p>
	 */
	public function __construct(Iterator $iterator, int $offset = 0, int $count = -1) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを指定した開始オフセットに巻き戻す
	 * @link http://php.net/manual/ja/limititerator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素が有効かどうかをチェックする
	 * @link http://php.net/manual/ja/limititerator.valid.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のキーを取得する
	 * @link http://php.net/manual/ja/limititerator.key.php
	 * @return mixed 現在の要素のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素を取得する
	 * @link http://php.net/manual/ja/limititerator.current.php
	 * @return mixed 現在の要素、あるいは現在の要素がない場合は <b>NULL</b> を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを前に移動する
	 * @link http://php.net/manual/ja/limititerator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 与えられた位置に移動する
	 * @link http://php.net/manual/ja/limititerator.seek.php
	 * @param int $position <p>
	 * 移動したい位置。
	 * </p>
	 * @return int 移動後のオフセット位置を返します。
	 */
	public function seek(int $position): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の位置を返す
	 * @link http://php.net/manual/ja/limititerator.getposition.php
	 * @return int 現在の位置を返します。
	 */
	public function getPosition(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/limititerator.getinneriterator.php
	 * @return Iterator <b>LimitIterator::__construct</b> に渡された内部イテレータを返します。
	 */
	public function getInnerIterator(): Iterator {}

}

/**
 * このオブジェクトは、別のイテレータからキャッシュされた反復処理をサポートします。
 * @link http://php.net/manual/ja/class.cachingiterator.php
 */
class CachingIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator, ArrayAccess, Countable {
	const CALL_TOSTRING = 1;
	const CATCH_GET_CHILD = 16;
	const TOSTRING_USE_KEY = 2;
	const TOSTRING_USE_CURRENT = 4;
	const TOSTRING_USE_INNER = 8;
	const FULL_CACHE = 256;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい CachingIterator オブジェクトを作成する
	 * @link http://php.net/manual/ja/cachingiterator.construct.php
	 * @param Iterator $iterator <p>
	 * キャッシュしたいイテレータ。
	 * </p>
	 * @param int $flags [optional] <p>
	 * フラグのビットマスク。
	 * </p>
	 */
	public function __construct(Iterator $iterator, int $flags = self::CALL_TOSTRING) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/cachingiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の要素が有効かどうかをチェックする
	 * @link http://php.net/manual/ja/cachingiterator.valid.php
	 * @return void 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function valid(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の要素のキーを返す
	 * @link http://php.net/manual/ja/cachingiterator.key.php
	 * @return scalar
	 */
	public function key() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の要素を返す
	 * @link http://php.net/manual/ja/cachingiterator.current.php
	 * @return void Mixed
	 */
	public function current(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * イテレータを前方に移動する
	 * @link http://php.net/manual/ja/cachingiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 内部イテレータが有効な次の要素を持つかどうかをチェックする
	 * @link http://php.net/manual/ja/cachingiterator.hasnext.php
	 * @return void 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasNext(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の要素の文字列表現を返す
	 * @link http://php.net/manual/ja/cachingiterator.tostring.php
	 * @return void 現在の要素の文字列表現を返します。
	 */
	public function __toString(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 内部イテレータを返す
	 * @link http://php.net/manual/ja/cachingiterator.getinneriterator.php
	 * @return Iterator Iterator インターフェイスを実装したオブジェクトを返します。
	 */
	public function getInnerIterator(): Iterator {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 使用しているフラグを取得する
	 * @link http://php.net/manual/ja/cachingiterator.getflags.php
	 * @return int Description...
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * The setFlags purpose
	 * @link http://php.net/manual/ja/cachingiterator.setflags.php
	 * @param int $flags <p>
	 * 設定したいフラグのビットマスク。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * The offsetGet purpose
	 * @link http://php.net/manual/ja/cachingiterator.offsetget.php
	 * @param string $index <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function offsetGet(string $index): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * The offsetSet purpose
	 * @link http://php.net/manual/ja/cachingiterator.offsetset.php
	 * @param string $index <p>
	 * 設定したい要素のインデックス。
	 * </p>
	 * @param string $newval <p>
	 * <i>index</i> の新しい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet(string $index, string $newval): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * The offsetUnset purpose
	 * @link http://php.net/manual/ja/cachingiterator.offsetunset.php
	 * @param string $index <p>
	 * 設定を解除したい要素のインデックス。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetUnset(string $index): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * The offsetExists purpose
	 * @link http://php.net/manual/ja/cachingiterator.offsetexists.php
	 * @param string $index <p>
	 * 調べたいインデックス。
	 * </p>
	 * @return void そのオフセットがさすエントリが存在する場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function offsetExists(string $index): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * キャッシュの内容を取得する
	 * @link http://php.net/manual/ja/cachingiterator.getcache.php
	 * @return array キャッシュの内容を含む配列を返します。
	 */
	public function getCache(): array {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * イテレータ内の要素の数
	 * @link http://php.net/manual/ja/cachingiterator.count.php
	 * @return int イテレータ内の要素の数を返します。
	 */
	public function count(): int {}

}

/**
 * ...
 * @link http://php.net/manual/ja/class.recursivecachingiterator.php
 */
class RecursiveCachingIterator extends CachingIterator implements Countable, ArrayAccess, Iterator, Traversable, OuterIterator, RecursiveIterator {
	const CALL_TOSTRING = 1;
	const CATCH_GET_CHILD = 16;
	const TOSTRING_USE_KEY = 2;
	const TOSTRING_USE_CURRENT = 4;
	const TOSTRING_USE_INNER = 8;
	const FULL_CACHE = 256;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * コンストラクタ
	 * @link http://php.net/manual/ja/recursivecachingiterator.construct.php
	 * @param Iterator $iterator <p>
	 * 使用するイテレータ。
	 * </p>
	 * @param string $flags [optional] <p>
	 * フラグ。<b>CALL_TOSTRING</b> は
	 * <b>RecursiveCachingIterator::__toString</b>
	 * をすべての要素に対してコールします (デフォルト)。
	 * <b>CATCH_GET_CHILD</b> は
	 * 子を取得しようとしたときに発生する例外を捕捉します。
	 * </p>
	 */
	public function __construct(Iterator $iterator, string $flags = self::CALL_TOSTRING) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータの現在の要素が子を持つかどうかチェックする
	 * @link http://php.net/manual/ja/recursivecachingiterator.haschildren.php
	 * @return bool 内部イテレータが子を持つ場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function hasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータの子を RecursiveCachingIterator として返す
	 * @link http://php.net/manual/ja/recursivecachingiterator.getchildren.php
	 * @return RecursiveCachingIterator 内部イテレータの子を RecursiveCachingIterator として返します。
	 */
	public function getChildren(): RecursiveCachingIterator {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/cachingiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の要素が有効かどうかをチェックする
	 * @link http://php.net/manual/ja/cachingiterator.valid.php
	 * @return void 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function valid(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の要素のキーを返す
	 * @link http://php.net/manual/ja/cachingiterator.key.php
	 * @return scalar
	 */
	public function key() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の要素を返す
	 * @link http://php.net/manual/ja/cachingiterator.current.php
	 * @return void Mixed
	 */
	public function current(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * イテレータを前方に移動する
	 * @link http://php.net/manual/ja/cachingiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 内部イテレータが有効な次の要素を持つかどうかをチェックする
	 * @link http://php.net/manual/ja/cachingiterator.hasnext.php
	 * @return void 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasNext(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の要素の文字列表現を返す
	 * @link http://php.net/manual/ja/cachingiterator.tostring.php
	 * @return void 現在の要素の文字列表現を返します。
	 */
	public function __toString(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 内部イテレータを返す
	 * @link http://php.net/manual/ja/cachingiterator.getinneriterator.php
	 * @return Iterator Iterator インターフェイスを実装したオブジェクトを返します。
	 */
	public function getInnerIterator(): Iterator {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 使用しているフラグを取得する
	 * @link http://php.net/manual/ja/cachingiterator.getflags.php
	 * @return int Description...
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * The setFlags purpose
	 * @link http://php.net/manual/ja/cachingiterator.setflags.php
	 * @param int $flags <p>
	 * 設定したいフラグのビットマスク。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * The offsetGet purpose
	 * @link http://php.net/manual/ja/cachingiterator.offsetget.php
	 * @param string $index <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function offsetGet(string $index): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * The offsetSet purpose
	 * @link http://php.net/manual/ja/cachingiterator.offsetset.php
	 * @param string $index <p>
	 * 設定したい要素のインデックス。
	 * </p>
	 * @param string $newval <p>
	 * <i>index</i> の新しい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet(string $index, string $newval): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * The offsetUnset purpose
	 * @link http://php.net/manual/ja/cachingiterator.offsetunset.php
	 * @param string $index <p>
	 * 設定を解除したい要素のインデックス。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetUnset(string $index): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * The offsetExists purpose
	 * @link http://php.net/manual/ja/cachingiterator.offsetexists.php
	 * @param string $index <p>
	 * 調べたいインデックス。
	 * </p>
	 * @return void そのオフセットがさすエントリが存在する場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function offsetExists(string $index): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * キャッシュの内容を取得する
	 * @link http://php.net/manual/ja/cachingiterator.getcache.php
	 * @return array キャッシュの内容を含む配列を返します。
	 */
	public function getCache(): array {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * イテレータ内の要素の数
	 * @link http://php.net/manual/ja/cachingiterator.count.php
	 * @return int イテレータ内の要素の数を返します。
	 */
	public function count(): int {}

}

/**
 * このイテレータは巻き戻しできません。
 * @link http://php.net/manual/ja/class.norewinditerator.php
 */
class NoRewindIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * NoRewindIterator を作成する
	 * @link http://php.net/manual/ja/norewinditerator.construct.php
	 * @param Iterator $iterator <p>
	 * 使用するイテレータ。
	 * </p>
	 */
	public function __construct(Iterator $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータの巻き戻し操作を阻止する
	 * @link http://php.net/manual/ja/norewinditerator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータの有効性を検証する
	 * @link http://php.net/manual/ja/norewinditerator.valid.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のキーを取得する
	 * @link http://php.net/manual/ja/norewinditerator.key.php
	 * @return mixed 現在のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の値を取得する
	 * @link http://php.net/manual/ja/norewinditerator.current.php
	 * @return mixed 現在の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 次の要素に移動する
	 * @link http://php.net/manual/ja/norewinditerator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/norewinditerator.getinneriterator.php
	 * @return iterator <b>NoRewindIterator::__construct</b> で渡した内部イテレータを返します。
	 */
	public function getInnerIterator(): iterator {}

}

/**
 * 複数のイテレータをひとつひとつ処理するイテレータです。
 * @link http://php.net/manual/ja/class.appenditerator.php
 */
class AppendIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * AppendIterator を作成する
	 * @link http://php.net/manual/ja/appenditerator.construct.php
	 */
	public function __construct() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを追加する
	 * @link http://php.net/manual/ja/appenditerator.append.php
	 * @param Iterator $iterator <p>
	 * 追加するイテレータ。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function append(Iterator $iterator): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/appenditerator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素が有効かどうかを調べる
	 * @link http://php.net/manual/ja/appenditerator.valid.php
	 * @return bool 現在のイテレーションが有効な場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のキーを取得する
	 * @link http://php.net/manual/ja/appenditerator.key.php
	 * @return scalar 有効な状態の場合は現在のキー、それ以外の場合は <b>NULL</b> を返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の値を取得する
	 * @link http://php.net/manual/ja/appenditerator.current.php
	 * @return mixed 有効な状態の場合は現在の値、それ以外の場合は <b>NULL</b> を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 次の要素に移動する
	 * @link http://php.net/manual/ja/appenditerator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/appenditerator.getinneriterator.php
	 * @return Iterator 現在の内部イテレータを返します。存在しない場合は <b>NULL</b> を返します。
	 */
	public function getInnerIterator(): Iterator {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータのインデックスを取得する
	 * @link http://php.net/manual/ja/appenditerator.getiteratorindex.php
	 * @return int 現在の内部イテレータのインデックス (最初はゼロ) を整数値で返します。
	 */
	public function getIteratorIndex(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ArrayIterator を取得する
	 * @link http://php.net/manual/ja/appenditerator.getarrayiterator.php
	 * @return ArrayIterator 追加したイテレータを含む <b>ArrayIterator</b> を返します。
	 */
	public function getArrayIterator(): ArrayIterator {}

}

/**
 * <b>InfiniteIterator</b> は、
 * 他のイテレータを受け取って無限に反復させます。
 * 最後までたどり着いたときに手動で巻き戻す必要はありません。
 * @link http://php.net/manual/ja/class.infiniteiterator.php
 */
class InfiniteIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * InfiniteIterator を作成する
	 * @link http://php.net/manual/ja/infiniteiterator.construct.php
	 * @param Iterator $iterator <p>
	 * 無限に処理し続けるイテレータ。
	 * </p>
	 */
	public function __construct(Iterator $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを次に移動するか、巻き戻す
	 * @link http://php.net/manual/ja/infiniteiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 最初の要素に巻き戻す
	 * @link http://php.net/manual/ja/iteratoriterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータが有効かどうかを調べる
	 * @link http://php.net/manual/ja/iteratoriterator.valid.php
	 * @return bool イテレータが有効な場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素のキーを取得する
	 * @link http://php.net/manual/ja/iteratoriterator.key.php
	 * @return scalar 現在の要素のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の値を取得する
	 * @link http://php.net/manual/ja/iteratoriterator.current.php
	 * @return mixed 現在の要素の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/iteratoriterator.getinneriterator.php
	 * @return Traversable <b>IteratorIterator::__construct</b> に渡した内部イテレータを返します。
	 */
	public function getInnerIterator(): Traversable {}

}

/**
 * このイテレータを使うと、別のイテレータを正規表現でフィルタリングすることができます。
 * @link http://php.net/manual/ja/class.regexiterator.php
 */
class RegexIterator extends FilterIterator implements Iterator, Traversable, OuterIterator {
	const USE_KEY = 1;
	const INVERT_MATCH = 2;
	const MATCH = 0;
	const GET_MATCH = 1;
	const ALL_MATCHES = 2;
	const SPLIT = 3;
	const REPLACE = 4;

	public $replacement;


	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 新しい RegexIterator を作成する
	 * @link http://php.net/manual/ja/regexiterator.construct.php
	 * @param Iterator $iterator <p>
	 * この正規表現フィルタを適用するイテレータ。
	 * </p>
	 * @param string $regex <p>
	 * マッチさせる正規表現。
	 * </p>
	 * @param int $mode [optional] <p>
	 * 操作モード。モードの一覧は <b>RegexIterator::setMode</b>
	 * を参照ください。
	 * </p>
	 * @param int $flags [optional] <p>
	 * 特殊なフラグ。フラグの一覧は <b>RegexIterator::setFlags</b>
	 * を参照ください。
	 * </p>
	 * @param int $preg_flags [optional] <p>
	 * 正規表現フラグ。これらのフラグは操作モードに依存します。
	 * </p>
	 * <p>
	 * <table>
	 * <b>RegexIterator</b> preg_flags
	 * <tr valign="top">
	 * <td>操作モード</td>
	 * <td>使用可能なフラグ</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>RegexIterator::ALL_MATCHES</td>
	 * <td>
	 * <b>preg_match_all</b> を参照ください。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>RegexIterator::GET_MATCH</td>
	 * <td>
	 * <b>preg_match</b> を参照ください。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>RegexIterator::MATCH</td>
	 * <td>
	 * <b>preg_match</b> を参照ください。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>RegexIterator::REPLACE</td>
	 * <td>
	 * なし。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>RegexIterator::SPLIT</td>
	 * <td>
	 * <b>preg_split</b> を参照ください。
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 */
	public function __construct(Iterator $iterator, string $regex, int $mode = self::MATCH, int $flags = 0, int $preg_flags = 0) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 受け入れ状況を取得する
	 * @link http://php.net/manual/ja/regexiterator.accept.php
	 * @return bool マッチした場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function accept(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 操作モードを返す
	 * @link http://php.net/manual/ja/regexiterator.getmode.php
	 * @return int 操作モードを返します。
	 */
	public function getMode(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 操作モードを設定する
	 * @link http://php.net/manual/ja/regexiterator.setmode.php
	 * @param int $mode <p>
	 * 操作モード。
	 * </p>
	 * <p>
	 * 操作モードは次のとおりです。これらのモードの実際の意味については
	 * 定義済みの定数
	 * で説明します。
	 * <table>
	 * <b>RegexIterator</b> のモード
	 * <tr valign="top">
	 * <td>値</td>
	 * <td>定数</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>0</td>
	 * <td>
	 * RegexIterator::MATCH
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>
	 * RegexIterator::GET_MATCH
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>
	 * RegexIterator::ALL_MATCHES
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>3</td>
	 * <td>
	 * RegexIterator::SPLIT
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>4</td>
	 * <td>
	 * RegexIterator::REPLACE
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setMode(int $mode): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * フラグを取得する
	 * @link http://php.net/manual/ja/regexiterator.getflags.php
	 * @return int 設定されているフラグを返します。
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * フラグを設定する
	 * @link http://php.net/manual/ja/regexiterator.setflags.php
	 * @param int $flags <p>
	 * 設定するフラグ。クラス定数のビットマスクで指定します。
	 * </p>
	 * <p>
	 * 利用できるフラグは次のとおりです。これらのフラグの実際の意味については
	 * 定義済みの定数
	 * で説明します。
	 * <table>
	 * <b>RegexIterator</b> のフラグ
	 * <tr valign="top">
	 * <td>値</td>
	 * <td>定数</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>
	 * RegexIterator::USE_KEY
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 正規表現フラグを返す
	 * @link http://php.net/manual/ja/regexiterator.getpregflags.php
	 * @return int 正規表現フラグのビットマスクを返します。
	 */
	public function getPregFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 正規表現フラグを設定する
	 * @link http://php.net/manual/ja/regexiterator.setpregflags.php
	 * @param int $preg_flags <p>
	 * 正規表現フラグ。利用できるフラグの概要は
	 * <b>RegexIterator::__construct</b>
	 * を参照ください。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setPregFlags(int $preg_flags): void {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * 現在の正規表現を返す
	 * @link http://php.net/manual/ja/regexiterator.getregex.php
	 * @return string
	 */
	public function getRegex(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/filteriterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素が有効かどうかをチェックする
	 * @link http://php.net/manual/ja/filteriterator.valid.php
	 * @return bool 現在の要素が有効である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のキーを取得する
	 * @link http://php.net/manual/ja/filteriterator.key.php
	 * @return mixed 現在のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素の値を取得する
	 * @link http://php.net/manual/ja/filteriterator.current.php
	 * @return mixed 現在の要素の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを前に移動する
	 * @link http://php.net/manual/ja/filteriterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/filteriterator.getinneriterator.php
	 * @return Iterator 内部イテレータを返します。
	 */
	public function getInnerIterator(): Iterator {}

}

/**
 * この再帰イテレータは、別の再帰イテレータを正規表現でフィルタリングすることができます。
 * @link http://php.net/manual/ja/class.recursiveregexiterator.php
 */
class RecursiveRegexIterator extends RegexIterator implements OuterIterator, Traversable, Iterator, RecursiveIterator {
	const USE_KEY = 1;
	const INVERT_MATCH = 2;
	const MATCH = 0;
	const GET_MATCH = 1;
	const ALL_MATCHES = 2;
	const SPLIT = 3;
	const REPLACE = 4;

	public $replacement;


	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 新しい RecursiveRegexIterator を作成する
	 * @link http://php.net/manual/ja/recursiveregexiterator.construct.php
	 * @param RecursiveIterator $iterator <p>
	 * この正規表現フィルタを適用するイテレータ。
	 * </p>
	 * @param string $regex <p>
	 * マッチさせる正規表現。
	 * </p>
	 * @param int $mode [optional] <p>
	 * 操作モード。モードの一覧は <b>RegexIterator::setMode</b>
	 * を参照ください。
	 * </p>
	 * @param int $flags [optional] <p>
	 * 特殊なフラグ。フラグの一覧は <b>RegexIterator::setFlags</b>
	 * を参照ください。
	 * </p>
	 * @param int $preg_flags [optional] <p>
	 * 正規表現フラグ。これらのフラグは操作モードに依存します。
	 * </p>
	 * <p>
	 * <table>
	 * <b>RegexIterator</b> preg_flags
	 * <tr valign="top">
	 * <td>操作モード</td>
	 * <td>使用可能なフラグ</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>RecursiveRegexIterator::ALL_MATCHES</td>
	 * <td>
	 * <b>preg_match_all</b> を参照ください。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>RecursiveRegexIterator::GET_MATCH</td>
	 * <td>
	 * <b>preg_match</b> を参照ください。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>RecursiveRegexIterator::MATCH</td>
	 * <td>
	 * <b>preg_match</b> を参照ください。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>RecursiveRegexIterator::REPLACE</td>
	 * <td>
	 * なし。
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>RecursiveRegexIterator::SPLIT</td>
	 * <td>
	 * <b>preg_split</b> を参照ください。
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 */
	public function __construct(RecursiveIterator $iterator, string $regex, int $mode = self::MATCH, int $flags = 0, int $preg_flags = 0) {}

	public function accept() {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 現在のエントリのイテレータが取得可能かどうかを返す
	 * @link http://php.net/manual/ja/recursiveregexiterator.haschildren.php
	 * @return bool 現在のエントリのイテレータが取得可能な場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 現在のエントリのイテレータを返す
	 * @link http://php.net/manual/ja/recursiveregexiterator.getchildren.php
	 * @return RecursiveRegexIterator 内部イテレータで反復処理が可能な場合に、現在のエントリのイテレータを返します。
	 */
	public function getChildren(): RecursiveRegexIterator {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 操作モードを返す
	 * @link http://php.net/manual/ja/regexiterator.getmode.php
	 * @return int 操作モードを返します。
	 */
	public function getMode(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 操作モードを設定する
	 * @link http://php.net/manual/ja/regexiterator.setmode.php
	 * @param int $mode <p>
	 * 操作モード。
	 * </p>
	 * <p>
	 * 操作モードは次のとおりです。これらのモードの実際の意味については
	 * 定義済みの定数
	 * で説明します。
	 * <table>
	 * <b>RegexIterator</b> のモード
	 * <tr valign="top">
	 * <td>値</td>
	 * <td>定数</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>0</td>
	 * <td>
	 * RegexIterator::MATCH
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>
	 * RegexIterator::GET_MATCH
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>
	 * RegexIterator::ALL_MATCHES
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>3</td>
	 * <td>
	 * RegexIterator::SPLIT
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>4</td>
	 * <td>
	 * RegexIterator::REPLACE
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setMode(int $mode): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * フラグを取得する
	 * @link http://php.net/manual/ja/regexiterator.getflags.php
	 * @return int 設定されているフラグを返します。
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * フラグを設定する
	 * @link http://php.net/manual/ja/regexiterator.setflags.php
	 * @param int $flags <p>
	 * 設定するフラグ。クラス定数のビットマスクで指定します。
	 * </p>
	 * <p>
	 * 利用できるフラグは次のとおりです。これらのフラグの実際の意味については
	 * 定義済みの定数
	 * で説明します。
	 * <table>
	 * <b>RegexIterator</b> のフラグ
	 * <tr valign="top">
	 * <td>値</td>
	 * <td>定数</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>
	 * RegexIterator::USE_KEY
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 正規表現フラグを返す
	 * @link http://php.net/manual/ja/regexiterator.getpregflags.php
	 * @return int 正規表現フラグのビットマスクを返します。
	 */
	public function getPregFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 正規表現フラグを設定する
	 * @link http://php.net/manual/ja/regexiterator.setpregflags.php
	 * @param int $preg_flags <p>
	 * 正規表現フラグ。利用できるフラグの概要は
	 * <b>RegexIterator::__construct</b>
	 * を参照ください。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setPregFlags(int $preg_flags): void {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * 現在の正規表現を返す
	 * @link http://php.net/manual/ja/regexiterator.getregex.php
	 * @return string
	 */
	public function getRegex(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/filteriterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素が有効かどうかをチェックする
	 * @link http://php.net/manual/ja/filteriterator.valid.php
	 * @return bool 現在の要素が有効である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のキーを取得する
	 * @link http://php.net/manual/ja/filteriterator.key.php
	 * @return mixed 現在のキーを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素の値を取得する
	 * @link http://php.net/manual/ja/filteriterator.current.php
	 * @return mixed 現在の要素の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータを前に移動する
	 * @link http://php.net/manual/ja/filteriterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/filteriterator.getinneriterator.php
	 * @return Iterator 内部イテレータを返します。
	 */
	public function getInnerIterator(): Iterator {}

}

/**
 * 空のイテレータ用の EmptyIterator クラスです。
 * @link http://php.net/manual/ja/class.emptyiterator.php
 */
class EmptyIterator implements Iterator, Traversable {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * rewind() メソッド
	 * @link http://php.net/manual/ja/emptyiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * valid() メソッド
	 * @link http://php.net/manual/ja/emptyiterator.valid.php
	 * @return bool <b>FALSE</b>
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * key() メソッド
	 * @link http://php.net/manual/ja/emptyiterator.key.php
	 * @return scalar 値を返しません。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * current() メソッド
	 * @link http://php.net/manual/ja/emptyiterator.current.php
	 * @return mixed 値を返しません。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * next() メソッド
	 * @link http://php.net/manual/ja/emptyiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

}

/**
 * <b>RecursiveIterator</b> を反復処理し、ASCII グラフィックツリーを生成します。
 * @link http://php.net/manual/ja/class.recursivetreeiterator.php
 */
class RecursiveTreeIterator extends RecursiveIteratorIterator implements OuterIterator, Traversable, Iterator {
	const LEAVES_ONLY = 0;
	const SELF_FIRST = 1;
	const CHILD_FIRST = 2;
	const CATCH_GET_CHILD = 16;
	const BYPASS_CURRENT = 4;
	const BYPASS_KEY = 8;
	const PREFIX_LEFT = 0;
	const PREFIX_MID_HAS_NEXT = 1;
	const PREFIX_MID_LAST = 2;
	const PREFIX_END_HAS_NEXT = 3;
	const PREFIX_END_LAST = 4;
	const PREFIX_RIGHT = 5;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * RecursiveTreeIterator を作成する
	 * @link http://php.net/manual/ja/recursivetreeiterator.construct.php
	 * @param RecursiveIterator|IteratorAggregate $it <p>
	 * <b>RecursiveIterator</b> あるいは <b>IteratorAggregate</b>。
	 * </p>
	 * @param int $flags [optional] <p>
	 * フラグを指定して一部のメソッドの振る舞いを変更することができます。
	 * フラグの一覧は RecursiveTreeIterator の定義済み定数
	 * にあります。
	 * </p>
	 * @param int $cit_flags [optional]
	 * @param int $mode [optional] <p>
	 * 内部的に使う <b>RecursiveIteratorIterator</b> の振る舞いを変更するフラグ。
	 * </p>
	 */
	public function __construct($it, int $flags = RecursiveTreeIterator::BYPASS_KEY, int $cit_flags = CachingIterator::CATCH_GET_CHILD, int $mode = RecursiveIteratorIterator::SELF_FIRST) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータを巻き戻す
	 * @link http://php.net/manual/ja/recursivetreeiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 有効性を調べる
	 * @link http://php.net/manual/ja/recursivetreeiterator.valid.php
	 * @return bool 現在位置が有効な場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在の要素のキーを取得する
	 * @link http://php.net/manual/ja/recursivetreeiterator.key.php
	 * @return string 接頭辞と接尾辞をつけた現在のキーを返します。
	 */
	public function key(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在の要素を取得する
	 * @link http://php.net/manual/ja/recursivetreeiterator.current.php
	 * @return string 接頭辞と接尾辞をつけた現在の要素を返します。
	 */
	public function current(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次の要素に移動する
	 * @link http://php.net/manual/ja/recursivetreeiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 反復処理を開始する
	 * @link http://php.net/manual/ja/recursivetreeiterator.beginiteration.php
	 * @return RecursiveIterator <b>RecursiveIterator</b> を返します。
	 */
	public function beginIteration(): RecursiveIterator {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 反復処理を終了する
	 * @link http://php.net/manual/ja/recursivetreeiterator.enditeration.php
	 * @return void 値を返しません。
	 */
	public function endIteration(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 子を持っているかどうかを調べる
	 * @link http://php.net/manual/ja/recursivetreeiterator.callhaschildren.php
	 * @return bool 子がある場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function callHasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 子を取得する
	 * @link http://php.net/manual/ja/recursivetreeiterator.callgetchildren.php
	 * @return RecursiveIterator <b>RecursiveIterator</b> を返します。
	 */
	public function callGetChildren(): RecursiveIterator {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 子を開始する
	 * @link http://php.net/manual/ja/recursivetreeiterator.beginchildren.php
	 * @return void 値を返しません。
	 */
	public function beginChildren(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 子を終了する
	 * @link http://php.net/manual/ja/recursivetreeiterator.endchildren.php
	 * @return void 値を返しません。
	 */
	public function endChildren(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次の要素
	 * @link http://php.net/manual/ja/recursivetreeiterator.nextelement.php
	 * @return void 値を返しません。
	 */
	public function nextElement(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 接頭辞を取得する
	 * @link http://php.net/manual/ja/recursivetreeiterator.getprefix.php
	 * @return string 現在の要素の前に置く文字列を返します。
	 */
	public function getPrefix(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 接頭辞の部分を設定する
	 * @link http://php.net/manual/ja/recursivetreeiterator.setprefixpart.php
	 * @param int $part <p>
	 * RecursiveTreeIterator::PREFIX_* 定数のいずれか。
	 * </p>
	 * @param string $value <p>
	 * <i>part</i> で指定した接頭辞に代入する値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setPrefixPart(int $part, string $value): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のエントリを取得する
	 * @link http://php.net/manual/ja/recursivetreeiterator.getentry.php
	 * @return string 現在の要素から作ったツリーを返します。
	 */
	public function getEntry(): string {}

	public function setPostfix() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 接尾辞を取得する
	 * @link http://php.net/manual/ja/recursivetreeiterator.getpostfix.php
	 * @return void 現在の要素の後に置く文字列を返します。
	 */
	public function getPostfix(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 再帰的なイテレーションにおける現在の深さを取得する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.getdepth.php
	 * @return int 再帰的なイテレーションにおける現在の深さを返します。
	 */
	public function getDepth(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の有効なサブイテレータを取得する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.getsubiterator.php
	 * @param int $level [optional] <p>
	 * </p>
	 * @return RecursiveIterator 現在の有効なサブイテレータを返します。
	 */
	public function getSubIterator(int $level = null): RecursiveIterator {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 内部イテレータを取得する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.getinneriterator.php
	 * @return iterator 現在アクティブなサブイテレータを返します。
	 */
	public function getInnerIterator(): iterator {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 最大の深さを設定する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.setmaxdepth.php
	 * @param string $max_depth [optional] <p>
	 * 許可される最大の深さ。-1
	 * を指定すると無制限にできます。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setMaxDepth(string $max_depth = '-1'): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 最大の深さを取得する
	 * @link http://php.net/manual/ja/recursiveiteratoriterator.getmaxdepth.php
	 * @return mixed 許可される最大の深さ、あるいは無制限の場合に <b>FALSE</b> を返します。
	 */
	public function getMaxDepth() {}

}

/**
 * このクラスは、オブジェクトを配列として動作させます。
 * @link http://php.net/manual/ja/class.arrayobject.php
 */
class ArrayObject implements IteratorAggregate, Traversable, ArrayAccess, Serializable, Countable {
	const STD_PROP_LIST = 1;
	const ARRAY_AS_PROPS = 2;


	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 新規配列オブジェクトを生成する
	 * @link http://php.net/manual/ja/arrayobject.construct.php
	 * @param mixed $input [optional] <p>
	 * <i>input</i> には、
	 * 配列あるいはオブジェクトを指定することができます。
	 * </p>
	 * @param int $flags [optional] <p>
	 * <b>ArrayObject</b> オブジェクトの振る舞いを制御するフラグ。
	 * <b>ArrayObject::setFlags</b> を参照ください。
	 * </p>
	 * @param string $iterator_class [optional] <p>
	 * <b>ArrayObject</b> オブジェクトの反復処理に使用するクラスを指定します。
	 * </p>
	 */
	public function __construct($input = '[]', int $flags = 0, string $iterator_class = "ArrayIterator") {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 要求されたインデックスが存在するかどうかを返す
	 * @link http://php.net/manual/ja/arrayobject.offsetexists.php
	 * @param mixed $index <p>
	 * 調べたいインデックス。
	 * </p>
	 * @return bool 指定したインデックスが存在する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function offsetExists($index): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 指定したインデックスの値を返す
	 * @link http://php.net/manual/ja/arrayobject.offsetget.php
	 * @param mixed $index <p>
	 * 値のインデックス。
	 * </p>
	 * @return mixed 指定したインデックスの値、あるいは <b>NULL</b> を返します。
	 */
	public function offsetGet($index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 指定したインデックスに新しい値をセットする
	 * @link http://php.net/manual/ja/arrayobject.offsetset.php
	 * @param mixed $index <p>
	 * 設定したいインデックス。
	 * </p>
	 * @param mixed $newval <p>
	 * <i>index</i> の新しい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet($index, $newval): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 指定したインデックスの値を解除する
	 * @link http://php.net/manual/ja/arrayobject.offsetunset.php
	 * @param mixed $index <p>
	 * 解除したいインデックス。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetUnset($index): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 値を追加する
	 * @link http://php.net/manual/ja/arrayobject.append.php
	 * @param mixed $value <p>
	 * 追加する値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function append($value): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * ArrayObject のコピーを作成する
	 * @link http://php.net/manual/ja/arrayobject.getarraycopy.php
	 * @return array 配列のコピーを返します。<b>ArrayObject</b>
	 * がオブジェクトを参照している場合は、
	 * オブジェクトの public プロパティの配列を返します。
	 */
	public function getArrayCopy(): array {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * ArrayObject の public プロパティの数を取得する
	 * @link http://php.net/manual/ja/arrayobject.count.php
	 * @return int <b>ArrayObject</b> の public プロパティの数を返します。
	 * </p>
	 * <p>
	 * <b>ArrayObject</b> を配列から作成した場合は、すべてのプロパティが public となります。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 振る舞いのフラグを取得する
	 * @link http://php.net/manual/ja/arrayobject.getflags.php
	 * @return int ArrayObject の振る舞いのフラグを返します。
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 処理フラグを設定する
	 * @link http://php.net/manual/ja/arrayobject.setflags.php
	 * @param int $flags <p>
	 * 新たな ArrayObject の振る舞い。
	 * ビットマスクか、定数名で指定します。
	 * 将来のバージョンとの互換性のため、定数名での指定を強く推奨します。
	 * </p>
	 * <p>
	 * 利用可能なフラグの一覧を以下に示します。
	 * これらのフラグの実際の意味については
	 * 定義済みの定数
	 * を参照ください。
	 * <table>
	 * ArrayObject のフラグ
	 * <tr valign="top">
	 * <td>値</td>
	 * <td>定数</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>
	 * ArrayObject::STD_PROP_LIST
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>
	 * ArrayObject::ARRAY_AS_PROPS
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 値でエントリをソートする
	 * @link http://php.net/manual/ja/arrayobject.asort.php
	 * @return void 値を返しません。
	 */
	public function asort(): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * キーでエントリをソートする
	 * @link http://php.net/manual/ja/arrayobject.ksort.php
	 * @return void 値を返しません。
	 */
	public function ksort(): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ユーザー定義の比較関数でエントリをソートし、キーとの対応は保持する
	 * @link http://php.net/manual/ja/arrayobject.uasort.php
	 * @param callable $cmp_function <p>
	 * 関数 <i>cmp_function</i>
	 * は二つのパラメータを受け取ります。ここにはエントリのペアが渡されます。
	 * 比較関数の返り値は、最初の引数が二番目の引数より小さい場合に負の数、
	 * 等しい場合にゼロ、大きい場合に正の数となります。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function uasort(callable $cmp_function): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ユーザー定義の比較関数を使って、キーでエントリをソートする
	 * @link http://php.net/manual/ja/arrayobject.uksort.php
	 * @param callable $cmp_function <p>
	 * 比較コールバック関数。
	 * </p>
	 * <p>
	 * 関数 <i>cmp_function</i>
	 * は二つのパラメータを受け取ります。ここにはエントリのペアが渡されます。
	 * 比較関数の返り値は、最初の引数が二番目の引数より小さい場合に負の数、
	 * 等しい場合にゼロ、大きい場合に正の数となります。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function uksort(callable $cmp_function): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * "自然順" アルゴリズムでエントリをソートする
	 * @link http://php.net/manual/ja/arrayobject.natsort.php
	 * @return void 値を返しません。
	 */
	public function natsort(): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 大文字小文字を区別しない "自然順" アルゴリズムでエントリをソートする
	 * @link http://php.net/manual/ja/arrayobject.natcasesort.php
	 * @return void 値を返しません。
	 */
	public function natcasesort(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ArrayObject をアンシリアライズする
	 * @link http://php.net/manual/ja/arrayobject.unserialize.php
	 * @param string $serialized <p>
	 * シリアライズした <b>ArrayObject</b>。
	 * </p>
	 * @return void アンシリアライズした <b>ArrayObject</b> を返します。
	 */
	public function unserialize(string $serialized): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ArrayObject をシリアライズする
	 * @link http://php.net/manual/ja/arrayobject.serialize.php
	 * @return string <b>ArrayObject</b> をシリアライズしたものを返します。
	 */
	public function serialize(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * ArrayObject インスタンスから新規イテレータを生成する
	 * @link http://php.net/manual/ja/arrayobject.getiterator.php
	 * @return ArrayIterator <b>ArrayObject</b> からイテレータを返します。
	 */
	public function getIterator(): ArrayIterator {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 配列を別の配列と交換する
	 * @link http://php.net/manual/ja/arrayobject.exchangearray.php
	 * @param mixed $input <p>
	 * 現在の配列と交換する配列あるいはオブジェクト。
	 * </p>
	 * @return array 元の配列を返します。
	 */
	public function exchangeArray($input): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ArrayObject のイテレータクラス名を設定する
	 * @link http://php.net/manual/ja/arrayobject.setiteratorclass.php
	 * @param string $iterator_class <p>
	 * このオブジェクトの反復処理に使う配列イテレータのクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setIteratorClass(string $iterator_class): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ArrayObject のイテレータクラス名を取得する
	 * @link http://php.net/manual/ja/arrayobject.getiteratorclass.php
	 * @return string このオブジェクトの反復処理に使うイテレータのクラス名を返します。
	 */
	public function getIteratorClass(): string {}

}

/**
 * このイテレータは、配列やオブジェクトを反復処理する際に
 * 値やキーをリセットしたり修正したりすることができます。
 * @link http://php.net/manual/ja/class.arrayiterator.php
 */
class ArrayIterator implements Iterator, Traversable, ArrayAccess, SeekableIterator, Serializable, Countable {
	const STD_PROP_LIST = 1;
	const ARRAY_AS_PROPS = 2;


	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * ArrayIterator を作成する
	 * @link http://php.net/manual/ja/arrayiterator.construct.php
	 * @param mixed $array [optional] <p>
	 * 反復処理をする配列あるいはオブジェクト。
	 * </p>
	 * @param int $flags [optional] <p>
	 * <b>ArrayIterator</b> オブジェクトの振る舞いを制御するフラグ。
	 * <b>ArrayIterator::setFlags</b> を参照ください。
	 * </p>
	 */
	public function __construct($array = array(), int $flags = 0) {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * オフセットが存在するかどうかを調べる
	 * @link http://php.net/manual/ja/arrayiterator.offsetexists.php
	 * @param string $index <p>
	 * 調べたいオフセット。
	 * </p>
	 * @return void オフセットが存在する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function offsetExists(string $index): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * オフセットの値を取得する
	 * @link http://php.net/manual/ja/arrayiterator.offsetget.php
	 * @param string $index <p>
	 * 値を取得したいオフセット。
	 * </p>
	 * @return mixed オフセット <i>index</i> の値を返します。
	 */
	public function offsetGet(string $index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * オフセットの値を設定する
	 * @link http://php.net/manual/ja/arrayiterator.offsetset.php
	 * @param string $index <p>
	 * 設定したいインデックス。
	 * </p>
	 * @param string $newval <p>
	 * インデックスに格納する新しい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet(string $index, string $newval): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * オフセットの値を削除する
	 * @link http://php.net/manual/ja/arrayiterator.offsetunset.php
	 * @param string $index <p>
	 * 削除したいオフセット。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetUnset(string $index): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 要素を追加する
	 * @link http://php.net/manual/ja/arrayiterator.append.php
	 * @param mixed $value <p>
	 * 追加する値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function append($value): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 配列のコピーを取得する
	 * @link http://php.net/manual/ja/arrayiterator.getarraycopy.php
	 * @return array 配列のコピーを返します。
	 * ArrayIterator がオブジェクトを参照している場合は public プロパティの配列を返します。
	 */
	public function getArrayCopy(): array {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 要素を数える
	 * @link http://php.net/manual/ja/arrayiterator.count.php
	 * @return int 連想配列の場合は要素の数、オブジェクトの場合は public プロパティの数を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * フラグを取得する
	 * @link http://php.net/manual/ja/arrayiterator.getflags.php
	 * @return void 現在のフラグを返します。
	 */
	public function getFlags(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 振る舞いのフラグを設定する
	 * @link http://php.net/manual/ja/arrayiterator.setflags.php
	 * @param string $flags <p>
	 * 次のビットマスク。
	 * 0 = オブジェクトのプロパティがリストとして
	 * (var_dump, foreach などで) アクセスされたときに通常の機能を持たせるようにする。
	 * 1 = 配列のインデックスを、読み書き時にプロパティとしてアクセスできるようにする。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(string $flags): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 値で配列をソートする
	 * @link http://php.net/manual/ja/arrayiterator.asort.php
	 * @return void 値を返しません。
	 */
	public function asort(): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * キーで配列をソートする
	 * @link http://php.net/manual/ja/arrayiterator.ksort.php
	 * @return void 値を返しません。
	 */
	public function ksort(): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ユーザー定義のソート
	 * @link http://php.net/manual/ja/arrayiterator.uasort.php
	 * @param string $cmp_function <p>
	 * ソートに使う比較関数。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function uasort(string $cmp_function): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ユーザー定義のソート
	 * @link http://php.net/manual/ja/arrayiterator.uksort.php
	 * @param string $cmp_function <p>
	 * ソートに使う比較関数。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function uksort(string $cmp_function): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 自然順で配列をソートする
	 * @link http://php.net/manual/ja/arrayiterator.natsort.php
	 * @return void 値を返しません。
	 */
	public function natsort(): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 大文字小文字を区別せずに自然順で配列をソートする
	 * @link http://php.net/manual/ja/arrayiterator.natcasesort.php
	 * @return void 値を返しません。
	 */
	public function natcasesort(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * アンシリアライズする
	 * @link http://php.net/manual/ja/arrayiterator.unserialize.php
	 * @param string $serialized <p>
	 * シリアライズした ArrayIterator オブジェクト。
	 * </p>
	 * @return string <b>ArrayIterator</b> を返します。
	 */
	public function unserialize(string $serialized): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * シリアライズする
	 * @link http://php.net/manual/ja/arrayiterator.serialize.php
	 * @return string シリアライズした <b>ArrayIterator</b> を返します。
	 */
	public function serialize(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 配列を最初に巻き戻す
	 * @link http://php.net/manual/ja/arrayiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 現在の配列エントリを返す
	 * @link http://php.net/manual/ja/arrayiterator.current.php
	 * @return mixed 現在の配列エントリを返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 現在の配列キーを返す
	 * @link http://php.net/manual/ja/arrayiterator.key.php
	 * @return mixed この関数は、現在の配列キーを返します
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 次のエントリに移動する
	 * @link http://php.net/manual/ja/arrayiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 配列がまだエントリを持っているかどうかチェックする
	 * @link http://php.net/manual/ja/arrayiterator.valid.php
	 * @return bool イテレータが有効な場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 位置を移動する
	 * @link http://php.net/manual/ja/arrayiterator.seek.php
	 * @param int $position <p>
	 * 移動する位置。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function seek(int $position): void {}

}

/**
 * このイテレータは、ArrayIterator と同じように配列やオブジェクトを反復処理しつつ、
 * そのキーや値を消去したり書き換えたりすることができます。
 * さらに、現在のイテレータのエントリを反復処理することも可能です。
 * @link http://php.net/manual/ja/class.recursivearrayiterator.php
 */
class RecursiveArrayIterator extends ArrayIterator implements Countable, Serializable, SeekableIterator, ArrayAccess, Traversable, Iterator, RecursiveIterator {
	const CHILD_ARRAYS_ONLY = 4;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のエントリが配列あるいはオブジェクトであるかどうかを返す
	 * @link http://php.net/manual/ja/recursivearrayiterator.haschildren.php
	 * @return bool 現在のエントリが配列あるいはオブジェクトである場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のエントリが配列あるいはオブジェクトである場合に、そのイテレータを返す
	 * @link http://php.net/manual/ja/recursivearrayiterator.getchildren.php
	 * @return RecursiveArrayIterator 現在のエントリが配列あるいはオブジェクトである場合に、そのイテレータを返します。
	 */
	public function getChildren(): RecursiveArrayIterator {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * ArrayIterator を作成する
	 * @link http://php.net/manual/ja/arrayiterator.construct.php
	 * @param mixed $array [optional] <p>
	 * 反復処理をする配列あるいはオブジェクト。
	 * </p>
	 * @param int $flags [optional] <p>
	 * <b>ArrayIterator</b> オブジェクトの振る舞いを制御するフラグ。
	 * <b>ArrayIterator::setFlags</b> を参照ください。
	 * </p>
	 */
	public function __construct($array = array(), int $flags = 0) {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * オフセットが存在するかどうかを調べる
	 * @link http://php.net/manual/ja/arrayiterator.offsetexists.php
	 * @param string $index <p>
	 * 調べたいオフセット。
	 * </p>
	 * @return void オフセットが存在する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function offsetExists(string $index): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * オフセットの値を取得する
	 * @link http://php.net/manual/ja/arrayiterator.offsetget.php
	 * @param string $index <p>
	 * 値を取得したいオフセット。
	 * </p>
	 * @return mixed オフセット <i>index</i> の値を返します。
	 */
	public function offsetGet(string $index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * オフセットの値を設定する
	 * @link http://php.net/manual/ja/arrayiterator.offsetset.php
	 * @param string $index <p>
	 * 設定したいインデックス。
	 * </p>
	 * @param string $newval <p>
	 * インデックスに格納する新しい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet(string $index, string $newval): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * オフセットの値を削除する
	 * @link http://php.net/manual/ja/arrayiterator.offsetunset.php
	 * @param string $index <p>
	 * 削除したいオフセット。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetUnset(string $index): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 要素を追加する
	 * @link http://php.net/manual/ja/arrayiterator.append.php
	 * @param mixed $value <p>
	 * 追加する値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function append($value): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 配列のコピーを取得する
	 * @link http://php.net/manual/ja/arrayiterator.getarraycopy.php
	 * @return array 配列のコピーを返します。
	 * ArrayIterator がオブジェクトを参照している場合は public プロパティの配列を返します。
	 */
	public function getArrayCopy(): array {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 要素を数える
	 * @link http://php.net/manual/ja/arrayiterator.count.php
	 * @return int 連想配列の場合は要素の数、オブジェクトの場合は public プロパティの数を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * フラグを取得する
	 * @link http://php.net/manual/ja/arrayiterator.getflags.php
	 * @return void 現在のフラグを返します。
	 */
	public function getFlags(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 振る舞いのフラグを設定する
	 * @link http://php.net/manual/ja/arrayiterator.setflags.php
	 * @param string $flags <p>
	 * 次のビットマスク。
	 * 0 = オブジェクトのプロパティがリストとして
	 * (var_dump, foreach などで) アクセスされたときに通常の機能を持たせるようにする。
	 * 1 = 配列のインデックスを、読み書き時にプロパティとしてアクセスできるようにする。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(string $flags): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 値で配列をソートする
	 * @link http://php.net/manual/ja/arrayiterator.asort.php
	 * @return void 値を返しません。
	 */
	public function asort(): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * キーで配列をソートする
	 * @link http://php.net/manual/ja/arrayiterator.ksort.php
	 * @return void 値を返しません。
	 */
	public function ksort(): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ユーザー定義のソート
	 * @link http://php.net/manual/ja/arrayiterator.uasort.php
	 * @param string $cmp_function <p>
	 * ソートに使う比較関数。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function uasort(string $cmp_function): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ユーザー定義のソート
	 * @link http://php.net/manual/ja/arrayiterator.uksort.php
	 * @param string $cmp_function <p>
	 * ソートに使う比較関数。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function uksort(string $cmp_function): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 自然順で配列をソートする
	 * @link http://php.net/manual/ja/arrayiterator.natsort.php
	 * @return void 値を返しません。
	 */
	public function natsort(): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 大文字小文字を区別せずに自然順で配列をソートする
	 * @link http://php.net/manual/ja/arrayiterator.natcasesort.php
	 * @return void 値を返しません。
	 */
	public function natcasesort(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * アンシリアライズする
	 * @link http://php.net/manual/ja/arrayiterator.unserialize.php
	 * @param string $serialized <p>
	 * シリアライズした ArrayIterator オブジェクト。
	 * </p>
	 * @return string <b>ArrayIterator</b> を返します。
	 */
	public function unserialize(string $serialized): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * シリアライズする
	 * @link http://php.net/manual/ja/arrayiterator.serialize.php
	 * @return string シリアライズした <b>ArrayIterator</b> を返します。
	 */
	public function serialize(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 配列を最初に巻き戻す
	 * @link http://php.net/manual/ja/arrayiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 現在の配列エントリを返す
	 * @link http://php.net/manual/ja/arrayiterator.current.php
	 * @return mixed 現在の配列エントリを返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 現在の配列キーを返す
	 * @link http://php.net/manual/ja/arrayiterator.key.php
	 * @return mixed この関数は、現在の配列キーを返します
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 次のエントリに移動する
	 * @link http://php.net/manual/ja/arrayiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 配列がまだエントリを持っているかどうかチェックする
	 * @link http://php.net/manual/ja/arrayiterator.valid.php
	 * @return bool イテレータが有効な場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.0, PHP 7)<br/>
	 * 位置を移動する
	 * @link http://php.net/manual/ja/arrayiterator.seek.php
	 * @param int $position <p>
	 * 移動する位置。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function seek(int $position): void {}

}

/**
 * SplFileInfo クラスは、各ファイルの情報を取得するための上位レベルのオブジェクト指向インターフェイスです。
 * @link http://php.net/manual/ja/class.splfileinfo.php
 */
class SplFileInfo  {

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 新しい SplFileInfo オブジェクトを作成する
	 * @link http://php.net/manual/ja/splfileinfo.construct.php
	 * @param string $file_name <p>
	 * ファイルへのパス。
	 * </p>
	 */
	public function __construct(string $file_name) {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を除いたパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpath.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfilename.php
	 * @return string ファイル名を返します。
	 */
	public function getFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * ファイルの拡張子を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getextension.php
	 * @return string ファイルの拡張子を含む文字列を返します。
	 * 拡張子がないときは、空文字列を返します。
	 */
	public function getExtension(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルのベース名を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getbasename.php
	 * @param string $suffix [optional] <p>
	 * 返されるベース名から取り除きたい、オプションのサフィックス。
	 * </p>
	 * @return string パス情報を含まないベース名を返します。
	 */
	public function getBasename(string $suffix = null): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathname.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのパーミッションを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getperms.php
	 * @return int ファイルのパーミッションを返します。
	 */
	public function getPerms(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの inode を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getinode.php
	 * @return int ファイルシステムオブジェクトの inode 番号を返します。
	 */
	public function getInode(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルサイズを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getsize.php
	 * @return int ファイルサイズをバイト数で返します。
	 */
	public function getSize(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの所有者を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getowner.php
	 * @return int オーナー ID を数値形式で返します。
	 */
	public function getOwner(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのグループを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getgroup.php
	 * @return int グループ ID を数値形式で返します。
	 */
	public function getGroup(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの最終アクセス時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getatime.php
	 * @return int ファイルに最後にアクセスがあった時刻を返します。
	 */
	public function getATime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 最終変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getmtime.php
	 * @return int ファイルの最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getMTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * inode 変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getctime.php
	 * @return int 最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getCTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルタイプを取得する
	 * @link http://php.net/manual/ja/splfileinfo.gettype.php
	 * @return string このエントリの型を文字列で返します。file、link
	 * あるいは dir のいずれかとなります。
	 */
	public function getType(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * エントリが書き込み可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.iswritable.php
	 * @return bool 書き込み可能な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isWritable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが読み込み可能か調べる
	 * @link http://php.net/manual/ja/splfileinfo.isreadable.php
	 * @return bool 読み込み可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isReadable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが実行可能かどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isexecutable.php
	 * @return bool 実行可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isExecutable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isfile.php
	 * @return bool ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isFile(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがディレクトリかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isdir.php
	 * @return bool ディレクトリである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDir(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがリンクであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.islink.php
	 * @return bool ファイルがリンクである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isLink(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * リンク先を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getlinktarget.php
	 * @return string ファイルシステムのリンク先を返します。
	 */
	public function getLinkTarget(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルへの絶対パスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getrealpath.php
	 * @return string ファイルへのパスを返します。ファイルが存在しない場合は <b>FALSE</b> を返します。
	 */
	public function getRealPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo そのファイル用に作成した <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getFileInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * パスの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo ファイルの親のパスの <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getPathInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileObject オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * ファイルを開く際のモード。使用できるモードについての説明は
	 * <b>fopen</b> のドキュメントを参照ください。
	 * デフォルトは読み込み専用となります。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * <b>TRUE</b> に設定すると、このファイル名を
	 * include_path の中からも探します。
	 * </p>
	 * @param resource $context [optional] <p>
	 * コンテキスト についての説明は、
	 * マニュアルの コンテキスト の節を参照ください。
	 * </p>
	 * @return SplFileObject オープンしたファイルを <b>SplFileObject</b> オブジェクトで返します。
	 */
	public function openFile(string $open_mode = "r", bool $use_include_path = false, $context = null): SplFileObject {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::openFile</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::openFile</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFileClass(string $class_name = "SplFileObject"): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::getFileInfo</b> および <b>SplFileInfo::getPathInfo</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::getFileInfo</b> および
	 * <b>SplFileInfo::getPathInfo</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setInfoClass(string $class_name = "SplFileInfo"): void {}

	final public function _bad_state_ex() {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを文字列で返す
	 * @link http://php.net/manual/ja/splfileinfo.tostring.php
	 * @return void ファイルへのパスを返します。
	 */
	public function __toString(): void {}

}

/**
 * DirectoryIterator クラスは、
 * ファイルシステムのディレクトリを閲覧するためのシンプルなインターフェイスです。
 * @link http://php.net/manual/ja/class.directoryiterator.php
 */
class DirectoryIterator extends SplFileInfo implements Iterator, Traversable, SeekableIterator {

	/**
	 * (PHP 5, PHP 7)<br/>
	 * パスから新規ディレクトリイテレータを生成する
	 * @link http://php.net/manual/ja/directoryiterator.construct.php
	 * @param string $path <p>
	 * 処理したいディレクトリのパス。
	 * </p>
	 */
	public function __construct(string $path) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムのファイル名を返す
	 * @link http://php.net/manual/ja/directoryiterator.getfilename.php
	 * @return string 現在の <b>DirectoryIterator</b> アイテムのファイル名を返します。
	 */
	public function getFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * ファイルの拡張子を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getextension.php
	 * @return string ファイルの拡張子を文字列で返します。もし拡張しがない場合は空文字列を返します。
	 */
	public function getExtension(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * 現在の DirectoryIterator のアイテムのベース名を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getbasename.php
	 * @param string $suffix [optional] <p>
	 * ベース名が <i>suffix</i> で終わる場合は、これがカットされます。
	 * </p>
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのベース名を返します。
	 */
	public function getBasename(string $suffix = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムが '.' もしくは '..' であるかどうかを調べる
	 * @link http://php.net/manual/ja/directoryiterator.isdot.php
	 * @return bool エントリが . あるいは ..
	 * である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDot(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * DirectoryIterator を最初に巻き戻す
	 * @link http://php.net/manual/ja/directoryiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator の位置が有効なファイルであるかどうかチェックする
	 * @link http://php.net/manual/ja/directoryiterator.valid.php
	 * @return bool 有効な位置である場合は <b>TRUE</b>、それ以外の場合は <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムのキーを返す
	 * @link http://php.net/manual/ja/directoryiterator.key.php
	 * @return string 現在の <b>DirectoryIterator</b> アイテムのキーを返します。
	 */
	public function key(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムを返す
	 * @link http://php.net/manual/ja/directoryiterator.current.php
	 * @return DirectoryIterator 現在の <b>DirectoryIterator</b> アイテムを返します。
	 */
	public function current(): DirectoryIterator {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 次の DirectoryIterator アイテムに移動する
	 * @link http://php.net/manual/ja/directoryiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * DirectoryIterator のアイテムを移動する
	 * @link http://php.net/manual/ja/directoryiterator.seek.php
	 * @param int $position <p>
	 * 異動先を表す、ゼロから始まる位置。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function seek(int $position): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ファイル名を文字列として取得する
	 * @link http://php.net/manual/ja/directoryiterator.tostring.php
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのファイル名を返します。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を除いたパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpath.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathname.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのパーミッションを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getperms.php
	 * @return int ファイルのパーミッションを返します。
	 */
	public function getPerms(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの inode を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getinode.php
	 * @return int ファイルシステムオブジェクトの inode 番号を返します。
	 */
	public function getInode(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルサイズを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getsize.php
	 * @return int ファイルサイズをバイト数で返します。
	 */
	public function getSize(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの所有者を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getowner.php
	 * @return int オーナー ID を数値形式で返します。
	 */
	public function getOwner(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのグループを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getgroup.php
	 * @return int グループ ID を数値形式で返します。
	 */
	public function getGroup(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの最終アクセス時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getatime.php
	 * @return int ファイルに最後にアクセスがあった時刻を返します。
	 */
	public function getATime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 最終変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getmtime.php
	 * @return int ファイルの最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getMTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * inode 変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getctime.php
	 * @return int 最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getCTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルタイプを取得する
	 * @link http://php.net/manual/ja/splfileinfo.gettype.php
	 * @return string このエントリの型を文字列で返します。file、link
	 * あるいは dir のいずれかとなります。
	 */
	public function getType(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * エントリが書き込み可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.iswritable.php
	 * @return bool 書き込み可能な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isWritable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが読み込み可能か調べる
	 * @link http://php.net/manual/ja/splfileinfo.isreadable.php
	 * @return bool 読み込み可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isReadable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが実行可能かどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isexecutable.php
	 * @return bool 実行可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isExecutable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isfile.php
	 * @return bool ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isFile(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがディレクトリかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isdir.php
	 * @return bool ディレクトリである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDir(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがリンクであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.islink.php
	 * @return bool ファイルがリンクである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isLink(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * リンク先を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getlinktarget.php
	 * @return string ファイルシステムのリンク先を返します。
	 */
	public function getLinkTarget(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルへの絶対パスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getrealpath.php
	 * @return string ファイルへのパスを返します。ファイルが存在しない場合は <b>FALSE</b> を返します。
	 */
	public function getRealPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo そのファイル用に作成した <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getFileInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * パスの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo ファイルの親のパスの <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getPathInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileObject オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * ファイルを開く際のモード。使用できるモードについての説明は
	 * <b>fopen</b> のドキュメントを参照ください。
	 * デフォルトは読み込み専用となります。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * <b>TRUE</b> に設定すると、このファイル名を
	 * include_path の中からも探します。
	 * </p>
	 * @param resource $context [optional] <p>
	 * コンテキスト についての説明は、
	 * マニュアルの コンテキスト の節を参照ください。
	 * </p>
	 * @return SplFileObject オープンしたファイルを <b>SplFileObject</b> オブジェクトで返します。
	 */
	public function openFile(string $open_mode = "r", bool $use_include_path = false, $context = null): SplFileObject {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::openFile</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::openFile</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFileClass(string $class_name = "SplFileObject"): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::getFileInfo</b> および <b>SplFileInfo::getPathInfo</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::getFileInfo</b> および
	 * <b>SplFileInfo::getPathInfo</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setInfoClass(string $class_name = "SplFileInfo"): void {}

	final public function _bad_state_ex() {}

}

/**
 * Filesystem イテレータです。
 * @link http://php.net/manual/ja/class.filesystemiterator.php
 */
class FilesystemIterator extends DirectoryIterator implements SeekableIterator, Traversable, Iterator {
	const CURRENT_MODE_MASK = 240;
	const CURRENT_AS_PATHNAME = 32;
	const CURRENT_AS_FILEINFO = 0;
	const CURRENT_AS_SELF = 16;
	const KEY_MODE_MASK = 3840;
	const KEY_AS_PATHNAME = 0;
	const FOLLOW_SYMLINKS = 512;
	const KEY_AS_FILENAME = 256;
	const NEW_CURRENT_AND_KEY = 256;
	const OTHER_MODE_MASK = 12288;
	const SKIP_DOTS = 4096;
	const UNIX_PATHS = 8192;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 新しい filesystem イテレータを作成する
	 * @link http://php.net/manual/ja/filesystemiterator.construct.php
	 * @param string $path <p>
	 * 反復処理したいファイルシステム上のアイテムへのパス。
	 * </p>
	 * @param int $flags [optional] <p>
	 * フラグを指定すると、いくつかのメソッドの振る舞いを変更することができます。
	 * フラグの一覧は FilesystemIterator の定義済み定数
	 * を参照ください。これは、あとで <b>FilesystemIterator::setFlags</b> で設定することもできます。
	 * </p>
	 */
	public function __construct(string $path, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 先頭に巻き戻す
	 * @link http://php.net/manual/ja/filesystemiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のファイルに移動する
	 * @link http://php.net/manual/ja/filesystemiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のファイルのキーを取得する
	 * @link http://php.net/manual/ja/filesystemiterator.key.php
	 * @return string 設定されているフラグに応じてパス名あるいはファイル名を返します。
	 * FilesystemIterator の定数
	 * も参照ください。
	 */
	public function key(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のファイル
	 * @link http://php.net/manual/ja/filesystemiterator.current.php
	 * @return mixed 設定されているフラグに応じ、ファイル名、ファイル情報あるいは $this を返します。
	 * FilesystemIterator の定数
	 * を参照ください。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 処理フラグを取得する
	 * @link http://php.net/manual/ja/filesystemiterator.getflags.php
	 * @return int 設定されているフラグの値を返します。
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 処理フラグを設定する
	 * @link http://php.net/manual/ja/filesystemiterator.setflags.php
	 * @param int $flags [optional] <p>
	 * 設定する処理フラグ。
	 * FilesystemIterator の定数
	 * も参照ください。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags = null): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムのファイル名を返す
	 * @link http://php.net/manual/ja/directoryiterator.getfilename.php
	 * @return string 現在の <b>DirectoryIterator</b> アイテムのファイル名を返します。
	 */
	public function getFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * ファイルの拡張子を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getextension.php
	 * @return string ファイルの拡張子を文字列で返します。もし拡張しがない場合は空文字列を返します。
	 */
	public function getExtension(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * 現在の DirectoryIterator のアイテムのベース名を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getbasename.php
	 * @param string $suffix [optional] <p>
	 * ベース名が <i>suffix</i> で終わる場合は、これがカットされます。
	 * </p>
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのベース名を返します。
	 */
	public function getBasename(string $suffix = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムが '.' もしくは '..' であるかどうかを調べる
	 * @link http://php.net/manual/ja/directoryiterator.isdot.php
	 * @return bool エントリが . あるいは ..
	 * である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDot(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator の位置が有効なファイルであるかどうかチェックする
	 * @link http://php.net/manual/ja/directoryiterator.valid.php
	 * @return bool 有効な位置である場合は <b>TRUE</b>、それ以外の場合は <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * DirectoryIterator のアイテムを移動する
	 * @link http://php.net/manual/ja/directoryiterator.seek.php
	 * @param int $position <p>
	 * 異動先を表す、ゼロから始まる位置。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function seek(int $position): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ファイル名を文字列として取得する
	 * @link http://php.net/manual/ja/directoryiterator.tostring.php
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのファイル名を返します。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を除いたパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpath.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathname.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのパーミッションを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getperms.php
	 * @return int ファイルのパーミッションを返します。
	 */
	public function getPerms(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの inode を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getinode.php
	 * @return int ファイルシステムオブジェクトの inode 番号を返します。
	 */
	public function getInode(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルサイズを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getsize.php
	 * @return int ファイルサイズをバイト数で返します。
	 */
	public function getSize(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの所有者を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getowner.php
	 * @return int オーナー ID を数値形式で返します。
	 */
	public function getOwner(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのグループを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getgroup.php
	 * @return int グループ ID を数値形式で返します。
	 */
	public function getGroup(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの最終アクセス時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getatime.php
	 * @return int ファイルに最後にアクセスがあった時刻を返します。
	 */
	public function getATime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 最終変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getmtime.php
	 * @return int ファイルの最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getMTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * inode 変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getctime.php
	 * @return int 最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getCTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルタイプを取得する
	 * @link http://php.net/manual/ja/splfileinfo.gettype.php
	 * @return string このエントリの型を文字列で返します。file、link
	 * あるいは dir のいずれかとなります。
	 */
	public function getType(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * エントリが書き込み可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.iswritable.php
	 * @return bool 書き込み可能な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isWritable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが読み込み可能か調べる
	 * @link http://php.net/manual/ja/splfileinfo.isreadable.php
	 * @return bool 読み込み可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isReadable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが実行可能かどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isexecutable.php
	 * @return bool 実行可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isExecutable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isfile.php
	 * @return bool ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isFile(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがディレクトリかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isdir.php
	 * @return bool ディレクトリである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDir(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがリンクであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.islink.php
	 * @return bool ファイルがリンクである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isLink(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * リンク先を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getlinktarget.php
	 * @return string ファイルシステムのリンク先を返します。
	 */
	public function getLinkTarget(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルへの絶対パスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getrealpath.php
	 * @return string ファイルへのパスを返します。ファイルが存在しない場合は <b>FALSE</b> を返します。
	 */
	public function getRealPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo そのファイル用に作成した <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getFileInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * パスの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo ファイルの親のパスの <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getPathInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileObject オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * ファイルを開く際のモード。使用できるモードについての説明は
	 * <b>fopen</b> のドキュメントを参照ください。
	 * デフォルトは読み込み専用となります。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * <b>TRUE</b> に設定すると、このファイル名を
	 * include_path の中からも探します。
	 * </p>
	 * @param resource $context [optional] <p>
	 * コンテキスト についての説明は、
	 * マニュアルの コンテキスト の節を参照ください。
	 * </p>
	 * @return SplFileObject オープンしたファイルを <b>SplFileObject</b> オブジェクトで返します。
	 */
	public function openFile(string $open_mode = "r", bool $use_include_path = false, $context = null): SplFileObject {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::openFile</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::openFile</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFileClass(string $class_name = "SplFileObject"): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::getFileInfo</b> および <b>SplFileInfo::getPathInfo</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::getFileInfo</b> および
	 * <b>SplFileInfo::getPathInfo</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setInfoClass(string $class_name = "SplFileInfo"): void {}

	final public function _bad_state_ex() {}

}

/**
 * <b>RecursiveDirectoryIterator</b> は、
 * ファイルシステムのディレクトリを再帰的に反復処理するためのインターフェイスです。
 * @link http://php.net/manual/ja/class.recursivedirectoryiterator.php
 */
class RecursiveDirectoryIterator extends FilesystemIterator implements Iterator, Traversable, SeekableIterator, RecursiveIterator {
	const CURRENT_MODE_MASK = 240;
	const CURRENT_AS_PATHNAME = 32;
	const CURRENT_AS_FILEINFO = 0;
	const CURRENT_AS_SELF = 16;
	const KEY_MODE_MASK = 3840;
	const KEY_AS_PATHNAME = 0;
	const FOLLOW_SYMLINKS = 512;
	const KEY_AS_FILENAME = 256;
	const NEW_CURRENT_AND_KEY = 256;
	const OTHER_MODE_MASK = 12288;
	const SKIP_DOTS = 4096;
	const UNIX_PATHS = 8192;


	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * RecursiveDirectoryIterator を作成する
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.construct.php
	 * @param string $path <p>
	 * 反復処理の対象となるディレクトリのパス。
	 * </p>
	 * @param int $flags [optional] <p>
	 * フラグを指定して、いくつかのメソッドの振る舞いを変更することができます。
	 * フラグの一覧は
	 * FilesystemIterator の定義済み定数
	 * にあります。フラグは、あとから
	 * <b>FilesystemIterator::setFlags</b>
	 * で設定することもできます。
	 * </p>
	 */
	public function __construct(string $path, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在のエントリがディレクトリかつ '.' もしくは '..' でないかどうかを返す
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.haschildren.php
	 * @param bool $allow_links [optional] <p>
	 * </p>
	 * @return bool 現在のエントリが ('.' や '..' 以外の) ディレクトリであるかどうかを返します。
	 */
	public function hasChildren(bool $allow_links = false): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ディレクトリであれば、現在のエントリに対するイテレータを返す
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.getchildren.php
	 * @return mixed ファイル名、ファイル情報、あるいは $this のどれかを、
	 * 設定されているフラグによって返します。
	 * FilesystemIterator
	 * の定数 も参照ください。
	 */
	public function getChildren() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * サブパスを取得する
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.getsubpath.php
	 * @return string サブパス (サブディレクトリ) を返します。
	 */
	public function getSubPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * サブパスと名前を取得する
	 * @link http://php.net/manual/ja/recursivedirectoryiterator.getsubpathname.php
	 * @return string サブパス (サブディレクトリ) とファイル名を返します。
	 */
	public function getSubPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 先頭に巻き戻す
	 * @link http://php.net/manual/ja/filesystemiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のファイルに移動する
	 * @link http://php.net/manual/ja/filesystemiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のファイルのキーを取得する
	 * @link http://php.net/manual/ja/filesystemiterator.key.php
	 * @return string 設定されているフラグに応じてパス名あるいはファイル名を返します。
	 * FilesystemIterator の定数
	 * も参照ください。
	 */
	public function key(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のファイル
	 * @link http://php.net/manual/ja/filesystemiterator.current.php
	 * @return mixed 設定されているフラグに応じ、ファイル名、ファイル情報あるいは $this を返します。
	 * FilesystemIterator の定数
	 * を参照ください。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 処理フラグを取得する
	 * @link http://php.net/manual/ja/filesystemiterator.getflags.php
	 * @return int 設定されているフラグの値を返します。
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 処理フラグを設定する
	 * @link http://php.net/manual/ja/filesystemiterator.setflags.php
	 * @param int $flags [optional] <p>
	 * 設定する処理フラグ。
	 * FilesystemIterator の定数
	 * も参照ください。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags = null): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムのファイル名を返す
	 * @link http://php.net/manual/ja/directoryiterator.getfilename.php
	 * @return string 現在の <b>DirectoryIterator</b> アイテムのファイル名を返します。
	 */
	public function getFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * ファイルの拡張子を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getextension.php
	 * @return string ファイルの拡張子を文字列で返します。もし拡張しがない場合は空文字列を返します。
	 */
	public function getExtension(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * 現在の DirectoryIterator のアイテムのベース名を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getbasename.php
	 * @param string $suffix [optional] <p>
	 * ベース名が <i>suffix</i> で終わる場合は、これがカットされます。
	 * </p>
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのベース名を返します。
	 */
	public function getBasename(string $suffix = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムが '.' もしくは '..' であるかどうかを調べる
	 * @link http://php.net/manual/ja/directoryiterator.isdot.php
	 * @return bool エントリが . あるいは ..
	 * である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDot(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator の位置が有効なファイルであるかどうかチェックする
	 * @link http://php.net/manual/ja/directoryiterator.valid.php
	 * @return bool 有効な位置である場合は <b>TRUE</b>、それ以外の場合は <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * DirectoryIterator のアイテムを移動する
	 * @link http://php.net/manual/ja/directoryiterator.seek.php
	 * @param int $position <p>
	 * 異動先を表す、ゼロから始まる位置。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function seek(int $position): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ファイル名を文字列として取得する
	 * @link http://php.net/manual/ja/directoryiterator.tostring.php
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのファイル名を返します。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を除いたパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpath.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathname.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのパーミッションを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getperms.php
	 * @return int ファイルのパーミッションを返します。
	 */
	public function getPerms(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの inode を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getinode.php
	 * @return int ファイルシステムオブジェクトの inode 番号を返します。
	 */
	public function getInode(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルサイズを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getsize.php
	 * @return int ファイルサイズをバイト数で返します。
	 */
	public function getSize(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの所有者を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getowner.php
	 * @return int オーナー ID を数値形式で返します。
	 */
	public function getOwner(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのグループを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getgroup.php
	 * @return int グループ ID を数値形式で返します。
	 */
	public function getGroup(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの最終アクセス時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getatime.php
	 * @return int ファイルに最後にアクセスがあった時刻を返します。
	 */
	public function getATime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 最終変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getmtime.php
	 * @return int ファイルの最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getMTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * inode 変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getctime.php
	 * @return int 最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getCTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルタイプを取得する
	 * @link http://php.net/manual/ja/splfileinfo.gettype.php
	 * @return string このエントリの型を文字列で返します。file、link
	 * あるいは dir のいずれかとなります。
	 */
	public function getType(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * エントリが書き込み可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.iswritable.php
	 * @return bool 書き込み可能な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isWritable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが読み込み可能か調べる
	 * @link http://php.net/manual/ja/splfileinfo.isreadable.php
	 * @return bool 読み込み可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isReadable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが実行可能かどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isexecutable.php
	 * @return bool 実行可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isExecutable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isfile.php
	 * @return bool ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isFile(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがディレクトリかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isdir.php
	 * @return bool ディレクトリである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDir(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがリンクであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.islink.php
	 * @return bool ファイルがリンクである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isLink(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * リンク先を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getlinktarget.php
	 * @return string ファイルシステムのリンク先を返します。
	 */
	public function getLinkTarget(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルへの絶対パスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getrealpath.php
	 * @return string ファイルへのパスを返します。ファイルが存在しない場合は <b>FALSE</b> を返します。
	 */
	public function getRealPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo そのファイル用に作成した <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getFileInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * パスの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo ファイルの親のパスの <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getPathInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileObject オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * ファイルを開く際のモード。使用できるモードについての説明は
	 * <b>fopen</b> のドキュメントを参照ください。
	 * デフォルトは読み込み専用となります。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * <b>TRUE</b> に設定すると、このファイル名を
	 * include_path の中からも探します。
	 * </p>
	 * @param resource $context [optional] <p>
	 * コンテキスト についての説明は、
	 * マニュアルの コンテキスト の節を参照ください。
	 * </p>
	 * @return SplFileObject オープンしたファイルを <b>SplFileObject</b> オブジェクトで返します。
	 */
	public function openFile(string $open_mode = "r", bool $use_include_path = false, $context = null): SplFileObject {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::openFile</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::openFile</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFileClass(string $class_name = "SplFileObject"): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::getFileInfo</b> および <b>SplFileInfo::getPathInfo</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::getFileInfo</b> および
	 * <b>SplFileInfo::getPathInfo</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setInfoClass(string $class_name = "SplFileInfo"): void {}

	final public function _bad_state_ex() {}

}

/**
 * ファイルシステムで、<b>glob</b> と同じ形式の反復処理を行います。
 * @link http://php.net/manual/ja/class.globiterator.php
 */
class GlobIterator extends FilesystemIterator implements Iterator, Traversable, SeekableIterator, Countable {
	const CURRENT_MODE_MASK = 240;
	const CURRENT_AS_PATHNAME = 32;
	const CURRENT_AS_FILEINFO = 0;
	const CURRENT_AS_SELF = 16;
	const KEY_MODE_MASK = 3840;
	const KEY_AS_PATHNAME = 0;
	const FOLLOW_SYMLINKS = 512;
	const KEY_AS_FILENAME = 256;
	const NEW_CURRENT_AND_KEY = 256;
	const OTHER_MODE_MASK = 12288;
	const SKIP_DOTS = 4096;
	const UNIX_PATHS = 8192;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * glob を使うディレクトリを作成する
	 * @link http://php.net/manual/ja/globiterator.construct.php
	 * @param string $path <p>
	 * ディレクトリへのパス。
	 * </p>
	 * @param int $flags [optional] <p>
	 * オプションのフラグ。
	 * <b>FilesystemIterator</b> 定数のビットマスクとなります。
	 * </p>
	 */
	public function __construct(string $path, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ディレクトリやファイルの数を取得する
	 * @link http://php.net/manual/ja/globiterator.count.php
	 * @return int 返されたディレクトリやファイルの数を
	 * integer で返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 先頭に巻き戻す
	 * @link http://php.net/manual/ja/filesystemiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のファイルに移動する
	 * @link http://php.net/manual/ja/filesystemiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のファイルのキーを取得する
	 * @link http://php.net/manual/ja/filesystemiterator.key.php
	 * @return string 設定されているフラグに応じてパス名あるいはファイル名を返します。
	 * FilesystemIterator の定数
	 * も参照ください。
	 */
	public function key(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のファイル
	 * @link http://php.net/manual/ja/filesystemiterator.current.php
	 * @return mixed 設定されているフラグに応じ、ファイル名、ファイル情報あるいは $this を返します。
	 * FilesystemIterator の定数
	 * を参照ください。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 処理フラグを取得する
	 * @link http://php.net/manual/ja/filesystemiterator.getflags.php
	 * @return int 設定されているフラグの値を返します。
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 処理フラグを設定する
	 * @link http://php.net/manual/ja/filesystemiterator.setflags.php
	 * @param int $flags [optional] <p>
	 * 設定する処理フラグ。
	 * FilesystemIterator の定数
	 * も参照ください。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags = null): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムのファイル名を返す
	 * @link http://php.net/manual/ja/directoryiterator.getfilename.php
	 * @return string 現在の <b>DirectoryIterator</b> アイテムのファイル名を返します。
	 */
	public function getFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * ファイルの拡張子を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getextension.php
	 * @return string ファイルの拡張子を文字列で返します。もし拡張しがない場合は空文字列を返します。
	 */
	public function getExtension(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * 現在の DirectoryIterator のアイテムのベース名を取得する
	 * @link http://php.net/manual/ja/directoryiterator.getbasename.php
	 * @param string $suffix [optional] <p>
	 * ベース名が <i>suffix</i> で終わる場合は、これがカットされます。
	 * </p>
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのベース名を返します。
	 */
	public function getBasename(string $suffix = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator アイテムが '.' もしくは '..' であるかどうかを調べる
	 * @link http://php.net/manual/ja/directoryiterator.isdot.php
	 * @return bool エントリが . あるいは ..
	 * である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDot(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在の DirectoryIterator の位置が有効なファイルであるかどうかチェックする
	 * @link http://php.net/manual/ja/directoryiterator.valid.php
	 * @return bool 有効な位置である場合は <b>TRUE</b>、それ以外の場合は <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * DirectoryIterator のアイテムを移動する
	 * @link http://php.net/manual/ja/directoryiterator.seek.php
	 * @param int $position <p>
	 * 異動先を表す、ゼロから始まる位置。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function seek(int $position): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ファイル名を文字列として取得する
	 * @link http://php.net/manual/ja/directoryiterator.tostring.php
	 * @return string 現在の <b>DirectoryIterator</b> のアイテムのファイル名を返します。
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を除いたパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpath.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathname.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのパーミッションを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getperms.php
	 * @return int ファイルのパーミッションを返します。
	 */
	public function getPerms(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの inode を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getinode.php
	 * @return int ファイルシステムオブジェクトの inode 番号を返します。
	 */
	public function getInode(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルサイズを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getsize.php
	 * @return int ファイルサイズをバイト数で返します。
	 */
	public function getSize(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの所有者を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getowner.php
	 * @return int オーナー ID を数値形式で返します。
	 */
	public function getOwner(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのグループを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getgroup.php
	 * @return int グループ ID を数値形式で返します。
	 */
	public function getGroup(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの最終アクセス時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getatime.php
	 * @return int ファイルに最後にアクセスがあった時刻を返します。
	 */
	public function getATime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 最終変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getmtime.php
	 * @return int ファイルの最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getMTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * inode 変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getctime.php
	 * @return int 最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getCTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルタイプを取得する
	 * @link http://php.net/manual/ja/splfileinfo.gettype.php
	 * @return string このエントリの型を文字列で返します。file、link
	 * あるいは dir のいずれかとなります。
	 */
	public function getType(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * エントリが書き込み可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.iswritable.php
	 * @return bool 書き込み可能な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isWritable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが読み込み可能か調べる
	 * @link http://php.net/manual/ja/splfileinfo.isreadable.php
	 * @return bool 読み込み可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isReadable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが実行可能かどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isexecutable.php
	 * @return bool 実行可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isExecutable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isfile.php
	 * @return bool ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isFile(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがディレクトリかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isdir.php
	 * @return bool ディレクトリである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDir(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがリンクであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.islink.php
	 * @return bool ファイルがリンクである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isLink(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * リンク先を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getlinktarget.php
	 * @return string ファイルシステムのリンク先を返します。
	 */
	public function getLinkTarget(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルへの絶対パスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getrealpath.php
	 * @return string ファイルへのパスを返します。ファイルが存在しない場合は <b>FALSE</b> を返します。
	 */
	public function getRealPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo そのファイル用に作成した <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getFileInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * パスの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo ファイルの親のパスの <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getPathInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileObject オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * ファイルを開く際のモード。使用できるモードについての説明は
	 * <b>fopen</b> のドキュメントを参照ください。
	 * デフォルトは読み込み専用となります。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * <b>TRUE</b> に設定すると、このファイル名を
	 * include_path の中からも探します。
	 * </p>
	 * @param resource $context [optional] <p>
	 * コンテキスト についての説明は、
	 * マニュアルの コンテキスト の節を参照ください。
	 * </p>
	 * @return SplFileObject オープンしたファイルを <b>SplFileObject</b> オブジェクトで返します。
	 */
	public function openFile(string $open_mode = "r", bool $use_include_path = false, $context = null): SplFileObject {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::openFile</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::openFile</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFileClass(string $class_name = "SplFileObject"): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::getFileInfo</b> および <b>SplFileInfo::getPathInfo</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::getFileInfo</b> および
	 * <b>SplFileInfo::getPathInfo</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setInfoClass(string $class_name = "SplFileInfo"): void {}

	final public function _bad_state_ex() {}

}

/**
 * SplFileObject クラスはファイルのためのオブジェクト指向のインターフェイスを提供します。
 * @link http://php.net/manual/ja/class.splfileobject.php
 */
class SplFileObject extends SplFileInfo implements RecursiveIterator, Traversable, Iterator, SeekableIterator {
	const DROP_NEW_LINE = 1;
	const READ_AHEAD = 2;
	const SKIP_EMPTY = 4;
	const READ_CSV = 8;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 新しいファイルオブジェクトを作成する
	 * @link http://php.net/manual/ja/splfileobject.construct.php
	 * @param string $filename <p>
	 * 読み込むファイル。
	 * </p>
	 * fopen wrappers が有効の場合、この関数のファイル名として
	 * URL を使用することができます。ファイル名の指定方法に関する詳細は
	 * <b>fopen</b> を参照ください。
	 * には、さまざまなラッパーの機能やその使用法、
	 * 提供される定義済み変数などの情報がまとめられています。
	 * @param string $open_mode [optional] <p>
	 * ファイルをオープンするときのモード。許可されるモードのリストは <b>fopen</b> を参照。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * <i>filename</i> を探すのに include_path を探索するかどうか。
	 * </p>
	 * @param resource $context [optional] <p>
	 * <b>stream_context_create</b> で作られる有効なコンテキストリソース。
	 * </p>
	 */
	public function __construct(string $filename, string $open_mode = "r", bool $use_include_path = false, $context = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルポインタを先頭に巻き戻す
	 * @link http://php.net/manual/ja/splfileobject.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルの終端に到達しているか調べる
	 * @link http://php.net/manual/ja/splfileobject.eof.php
	 * @return bool ファイルが終端であれば <b>TRUE</b>、そうでなければ <b>FALSE</b> を返します。
	 */
	public function eof(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイル終端でないかチェックする
	 * @link http://php.net/manual/ja/splfileobject.valid.php
	 * @return bool ファイル終端に到達していなければ <b>TRUE</b>、そうでなければ <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルから 1 行取り出す
	 * @link http://php.net/manual/ja/splfileobject.fgets.php
	 * @return string ファイルから次の行を含む文字列、もしくはエラーのときは <b>FALSE</b> を返します。
	 */
	public function fgets(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルから行を取り出し CSV フィールドとして処理する
	 * @link http://php.net/manual/ja/splfileobject.fgetcsv.php
	 * @param string $delimiter [optional] <p>
	 * フィールドの区切り文字 (1 文字のみ)。デフォルトはカンマもしくは <b>SplFileObject::setCsvControl</b> を使ってセットされた値です。
	 * </p>
	 * @param string $enclosure [optional] <p>
	 * フィールド囲み文字 (1 文字のみ)。デフォルトはダブルクォートもしくは <b>SplFileObject::setCsvControl</b> を使ってセットされた値です。
	 * </p>
	 * @param string $escape [optional] <p>
	 * エスケープ文字 (1 文字のみ)。デフォルトはバックスラッシュ (\) もしくは <b>SplFileObject::setCsvControl</b> を使ってセットされた値です。
	 * </p>
	 * @return array 読み込まれたフィールドを含む数値添字配列もしくはエラーのときは <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * CSV ファイルの空白行は <b>SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE</b> を使わない限り単独の <b>NULL</b> フィールドで構成される配列として返され、この場合空白行は読み飛ばされます。
	 */
	public function fgetcsv(string $delimiter = ",", string $enclosure = "\"", string $escape = "\\"): array {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * フィールドの配列を CSV の行として書き出す
	 * @link http://php.net/manual/ja/splfileobject.fputcsv.php
	 * @param array $fields <p>
	 * 値の配列。
	 * </p>
	 * @param string $delimiter [optional] <p>
	 * オプションで指定する、フィールドの区切り文字
	 * (一文字のみ)。
	 * </p>
	 * @param string $enclosure [optional] <p>
	 * オプションで指定する。フィールドの囲み文字
	 * (一文字のみ)。
	 * </p>
	 * @param string $escape [optional] <p>
	 * オプションの <i>escape</i> は、エスケープ文字
	 * (一文字だけ) を指定します。
	 * </p>
	 * @return int 書き出した文字列の長さを返します。失敗した場合に <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * <i>delimiter</i> や <i>enclosure</i>
	 * が一文字でない場合は <b>FALSE</b> を返し、何もファイルに書き出しません。
	 */
	public function fputcsv(array $fields, string $delimiter = ",", string $enclosure = '"', string $escape = "\\"): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * CSV の区切り文字、囲み文字、エスケープ文字をセットする
	 * @link http://php.net/manual/ja/splfileobject.setcsvcontrol.php
	 * @param string $delimiter [optional] <p>
	 * フィールドの区切り文字 (1 文字のみ)。
	 * </p>
	 * @param string $enclosure [optional] <p>
	 * フィールドの囲み文字 (1 文字のみ)。
	 * </p>
	 * @param string $escape [optional] <p>
	 * フィールドのエスケープ文字 (1 文字のみ)。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setCsvControl(string $delimiter = ",", string $enclosure = "\"", string $escape = "\\"): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * CSV の区切り、囲み文字、エスケープ文字を取得する
	 * @link http://php.net/manual/ja/splfileobject.getcsvcontrol.php
	 * @return array 区切りと囲み文字とエスケープ文字を含む数字添字配列を返します。
	 */
	public function getCsvControl(): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 簡易なファイルロックを行う
	 * @link http://php.net/manual/ja/splfileobject.flock.php
	 * @param int $operation <p>
	 * <i>operation</i> は次のいずれかです:
	 * 共有ロック (読み手) にするには <b>LOCK_SH</b>。
	 * @param int $wouldblock [optional] <p>
	 * ロックがブロックされる場合 (errno が EWOULDBLOCK である)、<b>TRUE</b> にセットします。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function flock(int $operation, int &$wouldblock = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 出力をファイルにフラッシュする
	 * @link http://php.net/manual/ja/splfileobject.fflush.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function fflush(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルポインタの現在位置を返す
	 * @link http://php.net/manual/ja/splfileobject.ftell.php
	 * @return int ファイルポインタの位置を整数として、もしくはエラーのときは <b>FALSE</b> を返します。
	 */
	public function ftell(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルポインタを移動させる
	 * @link http://php.net/manual/ja/splfileobject.fseek.php
	 * @param int $offset <p>
	 * オフセットです。負の値はポインタを戻すために使うことができます。これは SEEK_END が <i>whence</i> の値として使われるときに便利です。
	 * </p>
	 * @param int $whence [optional] <p>
	 * <i>whence</i> の値は次のようなものになります:
	 * <b>SEEK_SET</b> - <i>offset</i> バイトに等しい位置にセットします。
	 * <b>SEEK_CUR</b> - 現在の位置に <i>offset</i> を加えた位置にセットします。
	 * <b>SEEK_END</b> - 終端に <i>offset</i> を加えた位置にセットします。
	 * </p>
	 * <p>
	 * <i>whence</i> が指定されない場合、<b>SEEK_SET</b> が前提になります。
	 * </p>
	 * @return int 探索が成功した場合は 0、そうでなければ -1 が返されます。終端より先の位置を探索してもエラーにならないことにご注意してください。
	 */
	public function fseek(int $offset, int $whence = SEEK_SET): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルから文字を取り出す
	 * @link http://php.net/manual/ja/splfileobject.fgetc.php
	 * @return string ファイルから読み込まれた 1 文字を含む文字列もしくは終端の場合は <b>FALSE</b> を返します。
	 */
	public function fgetc(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルポインタに残っているデータをすべて出力する
	 * @link http://php.net/manual/ja/splfileobject.fpassthru.php
	 * @return int <i>handle</i> から読み込まれ出力を通して渡された文字数を返します。
	 */
	public function fpassthru(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルから 1 行取り出し HTML タグを取り除く
	 * @link http://php.net/manual/ja/splfileobject.fgetss.php
	 * @param string $allowable_tags [optional] <p>
	 * オプションのパラメータで、取り除きたくないタグを指定します。
	 * </p>
	 * @return string HTML と PHP コードが取り除かれたファイルの次の行を含む文字列、もしくは <b>FALSE</b> を返します。
	 */
	public function fgetss(string $allowable_tags = null): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * フォーマットに従ってファイルからの入力をパースする
	 * @link http://php.net/manual/ja/splfileobject.fscanf.php
	 * @param string $format <p>
	 * 規定のフォーマットは <b>sprintf</b> のドキュメントで説明されています。
	 * </p>
	 * @param mixed $_ [optional] <p>
	 * オプションの割り当て値。
	 * </p>
	 * @return mixed このメソッドに渡される引数がひとつしかない場合、処理される値は配列として返されます。そうでなければ、オプションパラメータが渡される場合、メソッドは割り当て値の個数を返します。オプションパラメータは参照渡しでなければなりません。
	 */
	public function fscanf(string $format, &$_ = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルに書き込む
	 * @link http://php.net/manual/ja/splfileobject.fwrite.php
	 * @param string $str <p>
	 * ファイルに書き込まれる文字列。
	 * </p>
	 * @param int $length [optional] <p>
	 * <i>length</i> 引数が渡される場合、<i>length</i> バイト分だけ書き込まれた後もしくは <i>string</i> の終端に達するのどちらか早い方の後で書き込みが停止します。
	 * </p>
	 * @return int 書き込まれるバイト数、もしくはエラーの場合 <b>NULL</b> を返します。
	 */
	public function fwrite(string $str, int $length = null): int {}

	/**
	 * @param $length
	 */
	public function fread($length) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルの情報を得る
	 * @link http://php.net/manual/ja/splfileobject.fstat.php
	 * @return array ファイルの統計情報の配列を返します; 配列フォーマットの詳細は <b>stat</b> のマニュアルページを参照してください。
	 */
	public function fstat(): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルを指定した長さに丸める
	 * @link http://php.net/manual/ja/splfileobject.ftruncate.php
	 * @param int $size <p>
	 * 丸めるサイズ。
	 * </p>
	 * <p>
	 * <i>size</i> がファイルのサイズより大きい場合、ファイルは null バイトで拡大されます。
	 * </p>
	 * <p>
	 * <i>size</i> がファイルのサイズより小さい場合、余分なデータは失われます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function ftruncate(int $size): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルの現在の行を取得する
	 * @link http://php.net/manual/ja/splfileobject.current.php
	 * @return string|array ファイルの現在の行を取得します。<b>SplFileObject::READ_CSV</b> フラグがセットされている場合、このメソッドは CSV データとして処理された現在の行を格納している配列を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 行番号を取得する
	 * @link http://php.net/manual/ja/splfileobject.key.php
	 * @return int 現在の行番号を返します。
	 */
	public function key(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 次の行を読み出す
	 * @link http://php.net/manual/ja/splfileobject.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * SplFileObject のフラグをセットする
	 * @link http://php.net/manual/ja/splfileobject.setflags.php
	 * @param int $flags <p>
	 * セットするフラグのビットマスク。
	 * 利用可能なフラグは SplFileObject の定数 を参照してください。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * SplFileObject のフラグを取得する
	 * @link http://php.net/manual/ja/splfileobject.getflags.php
	 * @return int フラグを表す integer を返します。
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 読み込む行の最大バイト数をセットする
	 * @link http://php.net/manual/ja/splfileobject.setmaxlinelen.php
	 * @param int $max_len <p>
	 * 行の最大バイト数。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setMaxLineLen(int $max_len): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 行の最大バイト数を取得する
	 * @link http://php.net/manual/ja/splfileobject.getmaxlinelen.php
	 * @return int <b>SplFileObject::setMaxLineLen</b> でセットされる場合は行の最大バイト数を返します。デフォルトは 0 です。
	 */
	public function getMaxLineLen(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * SplFileObject は子を持ちません
	 * @link http://php.net/manual/ja/splfileobject.haschildren.php
	 * @return bool <b>FALSE</b>
	 */
	public function hasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 用途はなし
	 * @link http://php.net/manual/ja/splfileobject.getchildren.php
	 * @return void 値を返しません。
	 */
	public function getChildren(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルポインタを指定行に移動させる
	 * @link http://php.net/manual/ja/splfileobject.seek.php
	 * @param int $line_pos <p>
	 * ゼロを起点とした移動させる行数。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function seek(int $line_pos): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileObject::fgets</b> のエイリアス
	 * @link http://php.net/manual/ja/splfileobject.getcurrentline.php
	 */
	public function getCurrentLine() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * <b>SplFileObject::current</b> のエイリアス
	 * @link http://php.net/manual/ja/splfileobject.tostring.php
	 * @return void
	 */
	public function __toString(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を除いたパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpath.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfilename.php
	 * @return string ファイル名を返します。
	 */
	public function getFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * ファイルの拡張子を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getextension.php
	 * @return string ファイルの拡張子を含む文字列を返します。
	 * 拡張子がないときは、空文字列を返します。
	 */
	public function getExtension(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルのベース名を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getbasename.php
	 * @param string $suffix [optional] <p>
	 * 返されるベース名から取り除きたい、オプションのサフィックス。
	 * </p>
	 * @return string パス情報を含まないベース名を返します。
	 */
	public function getBasename(string $suffix = null): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathname.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのパーミッションを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getperms.php
	 * @return int ファイルのパーミッションを返します。
	 */
	public function getPerms(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの inode を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getinode.php
	 * @return int ファイルシステムオブジェクトの inode 番号を返します。
	 */
	public function getInode(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルサイズを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getsize.php
	 * @return int ファイルサイズをバイト数で返します。
	 */
	public function getSize(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの所有者を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getowner.php
	 * @return int オーナー ID を数値形式で返します。
	 */
	public function getOwner(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのグループを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getgroup.php
	 * @return int グループ ID を数値形式で返します。
	 */
	public function getGroup(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの最終アクセス時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getatime.php
	 * @return int ファイルに最後にアクセスがあった時刻を返します。
	 */
	public function getATime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 最終変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getmtime.php
	 * @return int ファイルの最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getMTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * inode 変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getctime.php
	 * @return int 最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getCTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルタイプを取得する
	 * @link http://php.net/manual/ja/splfileinfo.gettype.php
	 * @return string このエントリの型を文字列で返します。file、link
	 * あるいは dir のいずれかとなります。
	 */
	public function getType(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * エントリが書き込み可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.iswritable.php
	 * @return bool 書き込み可能な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isWritable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが読み込み可能か調べる
	 * @link http://php.net/manual/ja/splfileinfo.isreadable.php
	 * @return bool 読み込み可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isReadable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが実行可能かどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isexecutable.php
	 * @return bool 実行可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isExecutable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isfile.php
	 * @return bool ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isFile(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがディレクトリかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isdir.php
	 * @return bool ディレクトリである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDir(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがリンクであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.islink.php
	 * @return bool ファイルがリンクである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isLink(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * リンク先を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getlinktarget.php
	 * @return string ファイルシステムのリンク先を返します。
	 */
	public function getLinkTarget(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルへの絶対パスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getrealpath.php
	 * @return string ファイルへのパスを返します。ファイルが存在しない場合は <b>FALSE</b> を返します。
	 */
	public function getRealPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo そのファイル用に作成した <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getFileInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * パスの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo ファイルの親のパスの <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getPathInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileObject オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * ファイルを開く際のモード。使用できるモードについての説明は
	 * <b>fopen</b> のドキュメントを参照ください。
	 * デフォルトは読み込み専用となります。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * <b>TRUE</b> に設定すると、このファイル名を
	 * include_path の中からも探します。
	 * </p>
	 * @param resource $context [optional] <p>
	 * コンテキスト についての説明は、
	 * マニュアルの コンテキスト の節を参照ください。
	 * </p>
	 * @return SplFileObject オープンしたファイルを <b>SplFileObject</b> オブジェクトで返します。
	 */
	public function openFile(string $open_mode = "r", bool $use_include_path = false, $context = null): SplFileObject {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::openFile</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::openFile</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFileClass(string $class_name = "SplFileObject"): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::getFileInfo</b> および <b>SplFileInfo::getPathInfo</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::getFileInfo</b> および
	 * <b>SplFileInfo::getPathInfo</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setInfoClass(string $class_name = "SplFileInfo"): void {}

	final public function _bad_state_ex() {}

}

/**
 * SplTempFileObject クラスは一時ファイルのためのオブジェクト指向インターフェイスを提供します。
 * @link http://php.net/manual/ja/class.spltempfileobject.php
 */
class SplTempFileObject extends SplFileObject implements SeekableIterator, Iterator, Traversable, RecursiveIterator {
	const DROP_NEW_LINE = 1;
	const READ_AHEAD = 2;
	const SKIP_EMPTY = 4;
	const READ_CSV = 8;


	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 新しい一時ファイルオブジェクトを作成する
	 * @link http://php.net/manual/ja/spltempfileobject.construct.php
	 * @param int $max_memory [optional] <p>
	 * 一時ファイルに使うメモリの最大量(バイト単位、デフォルトは 2 MB)。
	 * 一時ファイルがこのサイズを越える場合、ファイルはシステムの一時ディレクトリに移動させられます。
	 * </p>
	 * <p>
	 * <i>max_memory</i> が負の値である場合、メモリだけが使われます。<i>max_memory</i> がゼロの場合、メモリは使われません。
	 * </p>
	 */
	public function __construct(int $max_memory = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルポインタを先頭に巻き戻す
	 * @link http://php.net/manual/ja/splfileobject.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルの終端に到達しているか調べる
	 * @link http://php.net/manual/ja/splfileobject.eof.php
	 * @return bool ファイルが終端であれば <b>TRUE</b>、そうでなければ <b>FALSE</b> を返します。
	 */
	public function eof(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイル終端でないかチェックする
	 * @link http://php.net/manual/ja/splfileobject.valid.php
	 * @return bool ファイル終端に到達していなければ <b>TRUE</b>、そうでなければ <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルから 1 行取り出す
	 * @link http://php.net/manual/ja/splfileobject.fgets.php
	 * @return string ファイルから次の行を含む文字列、もしくはエラーのときは <b>FALSE</b> を返します。
	 */
	public function fgets(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルから行を取り出し CSV フィールドとして処理する
	 * @link http://php.net/manual/ja/splfileobject.fgetcsv.php
	 * @param string $delimiter [optional] <p>
	 * フィールドの区切り文字 (1 文字のみ)。デフォルトはカンマもしくは <b>SplFileObject::setCsvControl</b> を使ってセットされた値です。
	 * </p>
	 * @param string $enclosure [optional] <p>
	 * フィールド囲み文字 (1 文字のみ)。デフォルトはダブルクォートもしくは <b>SplFileObject::setCsvControl</b> を使ってセットされた値です。
	 * </p>
	 * @param string $escape [optional] <p>
	 * エスケープ文字 (1 文字のみ)。デフォルトはバックスラッシュ (\) もしくは <b>SplFileObject::setCsvControl</b> を使ってセットされた値です。
	 * </p>
	 * @return array 読み込まれたフィールドを含む数値添字配列もしくはエラーのときは <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * CSV ファイルの空白行は <b>SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE</b> を使わない限り単独の <b>NULL</b> フィールドで構成される配列として返され、この場合空白行は読み飛ばされます。
	 */
	public function fgetcsv(string $delimiter = ",", string $enclosure = "\"", string $escape = "\\"): array {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * フィールドの配列を CSV の行として書き出す
	 * @link http://php.net/manual/ja/splfileobject.fputcsv.php
	 * @param array $fields <p>
	 * 値の配列。
	 * </p>
	 * @param string $delimiter [optional] <p>
	 * オプションで指定する、フィールドの区切り文字
	 * (一文字のみ)。
	 * </p>
	 * @param string $enclosure [optional] <p>
	 * オプションで指定する。フィールドの囲み文字
	 * (一文字のみ)。
	 * </p>
	 * @param string $escape [optional] <p>
	 * オプションの <i>escape</i> は、エスケープ文字
	 * (一文字だけ) を指定します。
	 * </p>
	 * @return int 書き出した文字列の長さを返します。失敗した場合に <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * <i>delimiter</i> や <i>enclosure</i>
	 * が一文字でない場合は <b>FALSE</b> を返し、何もファイルに書き出しません。
	 */
	public function fputcsv(array $fields, string $delimiter = ",", string $enclosure = '"', string $escape = "\\"): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * CSV の区切り文字、囲み文字、エスケープ文字をセットする
	 * @link http://php.net/manual/ja/splfileobject.setcsvcontrol.php
	 * @param string $delimiter [optional] <p>
	 * フィールドの区切り文字 (1 文字のみ)。
	 * </p>
	 * @param string $enclosure [optional] <p>
	 * フィールドの囲み文字 (1 文字のみ)。
	 * </p>
	 * @param string $escape [optional] <p>
	 * フィールドのエスケープ文字 (1 文字のみ)。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setCsvControl(string $delimiter = ",", string $enclosure = "\"", string $escape = "\\"): void {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * CSV の区切り、囲み文字、エスケープ文字を取得する
	 * @link http://php.net/manual/ja/splfileobject.getcsvcontrol.php
	 * @return array 区切りと囲み文字とエスケープ文字を含む数字添字配列を返します。
	 */
	public function getCsvControl(): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 簡易なファイルロックを行う
	 * @link http://php.net/manual/ja/splfileobject.flock.php
	 * @param int $operation <p>
	 * <i>operation</i> は次のいずれかです:
	 * 共有ロック (読み手) にするには <b>LOCK_SH</b>。
	 * @param int $wouldblock [optional] <p>
	 * ロックがブロックされる場合 (errno が EWOULDBLOCK である)、<b>TRUE</b> にセットします。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function flock(int $operation, int &$wouldblock = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 出力をファイルにフラッシュする
	 * @link http://php.net/manual/ja/splfileobject.fflush.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function fflush(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルポインタの現在位置を返す
	 * @link http://php.net/manual/ja/splfileobject.ftell.php
	 * @return int ファイルポインタの位置を整数として、もしくはエラーのときは <b>FALSE</b> を返します。
	 */
	public function ftell(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルポインタを移動させる
	 * @link http://php.net/manual/ja/splfileobject.fseek.php
	 * @param int $offset <p>
	 * オフセットです。負の値はポインタを戻すために使うことができます。これは SEEK_END が <i>whence</i> の値として使われるときに便利です。
	 * </p>
	 * @param int $whence [optional] <p>
	 * <i>whence</i> の値は次のようなものになります:
	 * <b>SEEK_SET</b> - <i>offset</i> バイトに等しい位置にセットします。
	 * <b>SEEK_CUR</b> - 現在の位置に <i>offset</i> を加えた位置にセットします。
	 * <b>SEEK_END</b> - 終端に <i>offset</i> を加えた位置にセットします。
	 * </p>
	 * <p>
	 * <i>whence</i> が指定されない場合、<b>SEEK_SET</b> が前提になります。
	 * </p>
	 * @return int 探索が成功した場合は 0、そうでなければ -1 が返されます。終端より先の位置を探索してもエラーにならないことにご注意してください。
	 */
	public function fseek(int $offset, int $whence = SEEK_SET): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルから文字を取り出す
	 * @link http://php.net/manual/ja/splfileobject.fgetc.php
	 * @return string ファイルから読み込まれた 1 文字を含む文字列もしくは終端の場合は <b>FALSE</b> を返します。
	 */
	public function fgetc(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルポインタに残っているデータをすべて出力する
	 * @link http://php.net/manual/ja/splfileobject.fpassthru.php
	 * @return int <i>handle</i> から読み込まれ出力を通して渡された文字数を返します。
	 */
	public function fpassthru(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルから 1 行取り出し HTML タグを取り除く
	 * @link http://php.net/manual/ja/splfileobject.fgetss.php
	 * @param string $allowable_tags [optional] <p>
	 * オプションのパラメータで、取り除きたくないタグを指定します。
	 * </p>
	 * @return string HTML と PHP コードが取り除かれたファイルの次の行を含む文字列、もしくは <b>FALSE</b> を返します。
	 */
	public function fgetss(string $allowable_tags = null): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * フォーマットに従ってファイルからの入力をパースする
	 * @link http://php.net/manual/ja/splfileobject.fscanf.php
	 * @param string $format <p>
	 * 規定のフォーマットは <b>sprintf</b> のドキュメントで説明されています。
	 * </p>
	 * @param mixed $_ [optional] <p>
	 * オプションの割り当て値。
	 * </p>
	 * @return mixed このメソッドに渡される引数がひとつしかない場合、処理される値は配列として返されます。そうでなければ、オプションパラメータが渡される場合、メソッドは割り当て値の個数を返します。オプションパラメータは参照渡しでなければなりません。
	 */
	public function fscanf(string $format, &$_ = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルに書き込む
	 * @link http://php.net/manual/ja/splfileobject.fwrite.php
	 * @param string $str <p>
	 * ファイルに書き込まれる文字列。
	 * </p>
	 * @param int $length [optional] <p>
	 * <i>length</i> 引数が渡される場合、<i>length</i> バイト分だけ書き込まれた後もしくは <i>string</i> の終端に達するのどちらか早い方の後で書き込みが停止します。
	 * </p>
	 * @return int 書き込まれるバイト数、もしくはエラーの場合 <b>NULL</b> を返します。
	 */
	public function fwrite(string $str, int $length = null): int {}

	/**
	 * @param $length
	 */
	public function fread($length) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルの情報を得る
	 * @link http://php.net/manual/ja/splfileobject.fstat.php
	 * @return array ファイルの統計情報の配列を返します; 配列フォーマットの詳細は <b>stat</b> のマニュアルページを参照してください。
	 */
	public function fstat(): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルを指定した長さに丸める
	 * @link http://php.net/manual/ja/splfileobject.ftruncate.php
	 * @param int $size <p>
	 * 丸めるサイズ。
	 * </p>
	 * <p>
	 * <i>size</i> がファイルのサイズより大きい場合、ファイルは null バイトで拡大されます。
	 * </p>
	 * <p>
	 * <i>size</i> がファイルのサイズより小さい場合、余分なデータは失われます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function ftruncate(int $size): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルの現在の行を取得する
	 * @link http://php.net/manual/ja/splfileobject.current.php
	 * @return string|array ファイルの現在の行を取得します。<b>SplFileObject::READ_CSV</b> フラグがセットされている場合、このメソッドは CSV データとして処理された現在の行を格納している配列を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 行番号を取得する
	 * @link http://php.net/manual/ja/splfileobject.key.php
	 * @return int 現在の行番号を返します。
	 */
	public function key(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 次の行を読み出す
	 * @link http://php.net/manual/ja/splfileobject.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * SplFileObject のフラグをセットする
	 * @link http://php.net/manual/ja/splfileobject.setflags.php
	 * @param int $flags <p>
	 * セットするフラグのビットマスク。
	 * 利用可能なフラグは SplFileObject の定数 を参照してください。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * SplFileObject のフラグを取得する
	 * @link http://php.net/manual/ja/splfileobject.getflags.php
	 * @return int フラグを表す integer を返します。
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 読み込む行の最大バイト数をセットする
	 * @link http://php.net/manual/ja/splfileobject.setmaxlinelen.php
	 * @param int $max_len <p>
	 * 行の最大バイト数。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setMaxLineLen(int $max_len): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 行の最大バイト数を取得する
	 * @link http://php.net/manual/ja/splfileobject.getmaxlinelen.php
	 * @return int <b>SplFileObject::setMaxLineLen</b> でセットされる場合は行の最大バイト数を返します。デフォルトは 0 です。
	 */
	public function getMaxLineLen(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * SplFileObject は子を持ちません
	 * @link http://php.net/manual/ja/splfileobject.haschildren.php
	 * @return bool <b>FALSE</b>
	 */
	public function hasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 用途はなし
	 * @link http://php.net/manual/ja/splfileobject.getchildren.php
	 * @return void 値を返しません。
	 */
	public function getChildren(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ファイルポインタを指定行に移動させる
	 * @link http://php.net/manual/ja/splfileobject.seek.php
	 * @param int $line_pos <p>
	 * ゼロを起点とした移動させる行数。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function seek(int $line_pos): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileObject::fgets</b> のエイリアス
	 * @link http://php.net/manual/ja/splfileobject.getcurrentline.php
	 */
	public function getCurrentLine() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * <b>SplFileObject::current</b> のエイリアス
	 * @link http://php.net/manual/ja/splfileobject.tostring.php
	 * @return void
	 */
	public function __toString(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を除いたパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpath.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイル名を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfilename.php
	 * @return string ファイル名を返します。
	 */
	public function getFilename(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * ファイルの拡張子を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getextension.php
	 * @return string ファイルの拡張子を含む文字列を返します。
	 * 拡張子がないときは、空文字列を返します。
	 */
	public function getExtension(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルのベース名を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getbasename.php
	 * @param string $suffix [optional] <p>
	 * 返されるベース名から取り除きたい、オプションのサフィックス。
	 * </p>
	 * @return string パス情報を含まないベース名を返します。
	 */
	public function getBasename(string $suffix = null): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルへのパスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathname.php
	 * @return string ファイルへのパスを返します。
	 */
	public function getPathname(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのパーミッションを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getperms.php
	 * @return int ファイルのパーミッションを返します。
	 */
	public function getPerms(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの inode を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getinode.php
	 * @return int ファイルシステムオブジェクトの inode 番号を返します。
	 */
	public function getInode(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルサイズを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getsize.php
	 * @return int ファイルサイズをバイト数で返します。
	 */
	public function getSize(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの所有者を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getowner.php
	 * @return int オーナー ID を数値形式で返します。
	 */
	public function getOwner(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルのグループを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getgroup.php
	 * @return int グループ ID を数値形式で返します。
	 */
	public function getGroup(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの最終アクセス時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getatime.php
	 * @return int ファイルに最後にアクセスがあった時刻を返します。
	 */
	public function getATime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * 最終変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getmtime.php
	 * @return int ファイルの最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getMTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * inode 変更時刻を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getctime.php
	 * @return int 最終変更時刻を Unix タイムスタンプで返します。
	 */
	public function getCTime(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルタイプを取得する
	 * @link http://php.net/manual/ja/splfileinfo.gettype.php
	 * @return string このエントリの型を文字列で返します。file、link
	 * あるいは dir のいずれかとなります。
	 */
	public function getType(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * エントリが書き込み可能であるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.iswritable.php
	 * @return bool 書き込み可能な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isWritable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが読み込み可能か調べる
	 * @link http://php.net/manual/ja/splfileinfo.isreadable.php
	 * @return bool 読み込み可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isReadable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルが実行可能かどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isexecutable.php
	 * @return bool 実行可能である場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isExecutable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * オブジェクトの参照先が通常のファイルであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isfile.php
	 * @return bool ファイルが存在してかつ (リンクではない) 通常のファイルである場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isFile(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがディレクトリかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.isdir.php
	 * @return bool ディレクトリである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isDir(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルがリンクであるかどうかを調べる
	 * @link http://php.net/manual/ja/splfileinfo.islink.php
	 * @return bool ファイルがリンクである場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function isLink(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * リンク先を取得する
	 * @link http://php.net/manual/ja/splfileinfo.getlinktarget.php
	 * @return string ファイルシステムのリンク先を返します。
	 */
	public function getLinkTarget(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ファイルへの絶対パスを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getrealpath.php
	 * @return string ファイルへのパスを返します。ファイルが存在しない場合は <b>FALSE</b> を返します。
	 */
	public function getRealPath(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo そのファイル用に作成した <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getFileInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * パスの SplFileInfo オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * 使用したい <b>SplFileInfo</b> 派生クラスの名前。
	 * </p>
	 * @return SplFileInfo ファイルの親のパスの <b>SplFileInfo</b> オブジェクトを返します。
	 */
	public function getPathInfo(string $class_name = null): SplFileInfo {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ファイルの SplFileObject オブジェクトを取得する
	 * @link http://php.net/manual/ja/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * ファイルを開く際のモード。使用できるモードについての説明は
	 * <b>fopen</b> のドキュメントを参照ください。
	 * デフォルトは読み込み専用となります。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * <b>TRUE</b> に設定すると、このファイル名を
	 * include_path の中からも探します。
	 * </p>
	 * @param resource $context [optional] <p>
	 * コンテキスト についての説明は、
	 * マニュアルの コンテキスト の節を参照ください。
	 * </p>
	 * @return SplFileObject オープンしたファイルを <b>SplFileObject</b> オブジェクトで返します。
	 */
	public function openFile(string $open_mode = "r", bool $use_include_path = false, $context = null): SplFileObject {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::openFile</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::openFile</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFileClass(string $class_name = "SplFileObject"): void {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * <b>SplFileInfo::getFileInfo</b> および <b>SplFileInfo::getPathInfo</b> で使用するクラスを設定する
	 * @link http://php.net/manual/ja/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * <b>SplFileInfo::getFileInfo</b> および
	 * <b>SplFileInfo::getPathInfo</b>
	 * がコールされた際に使用するクラス名。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setInfoClass(string $class_name = "SplFileInfo"): void {}

	final public function _bad_state_ex() {}

}

/**
 * SplDoublyLinkedList クラスは、双方向リンクリストの主要な機能を提供します。
 * @link http://php.net/manual/ja/class.spldoublylinkedlist.php
 */
class SplDoublyLinkedList implements Iterator, Traversable, Countable, ArrayAccess, Serializable {
	const IT_MODE_LIFO = 2;
	const IT_MODE_FIFO = 0;
	const IT_MODE_DELETE = 1;
	const IT_MODE_KEEP = 0;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの末尾からノードを取り出す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.pop.php
	 * @return mixed 取り出したノードの値を返します。
	 */
	public function pop() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの先頭からノードを取り出す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.shift.php
	 * @return mixed 取り出したノードの値を返します。
	 */
	public function shift() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの末尾に要素を追加する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.push.php
	 * @param mixed $value <p>
	 * 追加したい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function push($value): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの先頭に要素を追加する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.unshift.php
	 * @param mixed $value <p>
	 * 追加する値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function unshift($value): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの最後のノードを取得する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.top.php
	 * @return mixed 最後のノードの値を返します。
	 */
	public function top() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの最初のノードを取得する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.bottom.php
	 * @return mixed 最初のノードの値を返します。
	 */
	public function bottom() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストが空かどうかを調べる
	 * @link http://php.net/manual/ja/spldoublylinkedlist.isempty.php
	 * @return bool 双方向リンクリストが空かどうかを返します。
	 */
	public function isEmpty(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 反復処理のモードを設定する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.setiteratormode.php
	 * @param int $mode <p>
	 * 次の 2 種類の直交するモードを設定できます。
	 * </p>
	 * 反復処理の方向 (いずれかを選択)
	 * <b>SplDoublyLinkedList::IT_MODE_LIFO</b> (スタック方式)
	 * @return void 値を返しません。
	 */
	public function setIteratorMode(int $mode): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 反復処理のモードを返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.getiteratormode.php
	 * @return int 反復処理の才のモードおよびフラグを返します。
	 */
	public function getIteratorMode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの要素数を数える
	 * @link http://php.net/manual/ja/spldoublylinkedlist.count.php
	 * @return int 双方向リンクリストの要素数を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index が存在するかどうかを返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetexists.php
	 * @param mixed $index <p>
	 * 調べたいインデックス。
	 * </p>
	 * @return bool 指定した <i>index</i> が存在する場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function offsetExists($index): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index の値を返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetget.php
	 * @param mixed $index <p>
	 * 値を取得したいインデックス。
	 * </p>
	 * @return mixed 指定した <i>index</i> の値を返します。
	 */
	public function offsetGet($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index の値を $newval に設定する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetset.php
	 * @param mixed $index <p>
	 * 設定したいインデックス。
	 * </p>
	 * @param mixed $newval <p>
	 * <i>index</i> の新しい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet($index, $newval): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index の値を削除する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetunset.php
	 * @param mixed $index <p>
	 * 削除したいインデックス。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetUnset($index): void {}

	/**
	 * @param $index
	 * @param $newval
	 */
	public function add($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータを先頭に巻き戻す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在の配列の要素を返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.current.php
	 * @return mixed 現在のノードの値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のノードのインデックスを返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.key.php
	 * @return mixed 現在のノードのインデックスを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のエントリに移動する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 前のエントリに移動する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.prev.php
	 * @return void 値を返しません。
	 */
	public function prev(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストにまだノードがあるかどうかを調べる
	 * @link http://php.net/manual/ja/spldoublylinkedlist.valid.php
	 * @return bool 双方向リンクリストにまだノードが含まれる場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * ストレージをデシリアライズする
	 * @link http://php.net/manual/ja/spldoublylinkedlist.unserialize.php
	 * @param string $serialized <p>
	 * シリアライズした文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function unserialize(string $serialized): void {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * ストレージをシリアライズする
	 * @link http://php.net/manual/ja/spldoublylinkedlist.serialize.php
	 * @return string シリアライズした文字列を返します。
	 */
	public function serialize(): string {}

}

/**
 * SplQueue クラスは、キューの主要な機能を提供します。
 * 双方向リンクリストを使用して実装しています。
 * @link http://php.net/manual/ja/class.splqueue.php
 */
class SplQueue extends SplDoublyLinkedList implements Serializable, ArrayAccess, Countable, Traversable, Iterator {
	const IT_MODE_LIFO = 2;
	const IT_MODE_FIFO = 0;
	const IT_MODE_DELETE = 1;
	const IT_MODE_KEEP = 0;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 要素をキューに追加する
	 * @link http://php.net/manual/ja/splqueue.enqueue.php
	 * @param mixed $value <p>
	 * キューに追加する値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function enqueue($value): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * キューからノードを取り出す
	 * @link http://php.net/manual/ja/splqueue.dequeue.php
	 * @return mixed キューから取り出したノードの値を返します。
	 */
	public function dequeue() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの末尾からノードを取り出す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.pop.php
	 * @return mixed 取り出したノードの値を返します。
	 */
	public function pop() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの先頭からノードを取り出す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.shift.php
	 * @return mixed 取り出したノードの値を返します。
	 */
	public function shift() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの末尾に要素を追加する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.push.php
	 * @param mixed $value <p>
	 * 追加したい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function push($value): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの先頭に要素を追加する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.unshift.php
	 * @param mixed $value <p>
	 * 追加する値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function unshift($value): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの最後のノードを取得する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.top.php
	 * @return mixed 最後のノードの値を返します。
	 */
	public function top() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの最初のノードを取得する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.bottom.php
	 * @return mixed 最初のノードの値を返します。
	 */
	public function bottom() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストが空かどうかを調べる
	 * @link http://php.net/manual/ja/spldoublylinkedlist.isempty.php
	 * @return bool 双方向リンクリストが空かどうかを返します。
	 */
	public function isEmpty(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 反復処理のモードを設定する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.setiteratormode.php
	 * @param int $mode <p>
	 * 次の 2 種類の直交するモードを設定できます。
	 * </p>
	 * 反復処理の方向 (いずれかを選択)
	 * <b>SplDoublyLinkedList::IT_MODE_LIFO</b> (スタック方式)
	 * @return void 値を返しません。
	 */
	public function setIteratorMode(int $mode): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 反復処理のモードを返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.getiteratormode.php
	 * @return int 反復処理の才のモードおよびフラグを返します。
	 */
	public function getIteratorMode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの要素数を数える
	 * @link http://php.net/manual/ja/spldoublylinkedlist.count.php
	 * @return int 双方向リンクリストの要素数を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index が存在するかどうかを返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetexists.php
	 * @param mixed $index <p>
	 * 調べたいインデックス。
	 * </p>
	 * @return bool 指定した <i>index</i> が存在する場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function offsetExists($index): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index の値を返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetget.php
	 * @param mixed $index <p>
	 * 値を取得したいインデックス。
	 * </p>
	 * @return mixed 指定した <i>index</i> の値を返します。
	 */
	public function offsetGet($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index の値を $newval に設定する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetset.php
	 * @param mixed $index <p>
	 * 設定したいインデックス。
	 * </p>
	 * @param mixed $newval <p>
	 * <i>index</i> の新しい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet($index, $newval): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index の値を削除する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetunset.php
	 * @param mixed $index <p>
	 * 削除したいインデックス。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetUnset($index): void {}

	/**
	 * @param $index
	 * @param $newval
	 */
	public function add($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータを先頭に巻き戻す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在の配列の要素を返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.current.php
	 * @return mixed 現在のノードの値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のノードのインデックスを返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.key.php
	 * @return mixed 現在のノードのインデックスを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のエントリに移動する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 前のエントリに移動する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.prev.php
	 * @return void 値を返しません。
	 */
	public function prev(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストにまだノードがあるかどうかを調べる
	 * @link http://php.net/manual/ja/spldoublylinkedlist.valid.php
	 * @return bool 双方向リンクリストにまだノードが含まれる場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * ストレージをデシリアライズする
	 * @link http://php.net/manual/ja/spldoublylinkedlist.unserialize.php
	 * @param string $serialized <p>
	 * シリアライズした文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function unserialize(string $serialized): void {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * ストレージをシリアライズする
	 * @link http://php.net/manual/ja/spldoublylinkedlist.serialize.php
	 * @return string シリアライズした文字列を返します。
	 */
	public function serialize(): string {}

}

/**
 * SplStack クラスは、スタックの主要な機能を提供します。
 * 双方向リンクリストを使用して実装しています。
 * @link http://php.net/manual/ja/class.splstack.php
 */
class SplStack extends SplDoublyLinkedList implements Serializable, ArrayAccess, Countable, Traversable, Iterator {
	const IT_MODE_LIFO = 2;
	const IT_MODE_FIFO = 0;
	const IT_MODE_DELETE = 1;
	const IT_MODE_KEEP = 0;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの末尾からノードを取り出す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.pop.php
	 * @return mixed 取り出したノードの値を返します。
	 */
	public function pop() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの先頭からノードを取り出す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.shift.php
	 * @return mixed 取り出したノードの値を返します。
	 */
	public function shift() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの末尾に要素を追加する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.push.php
	 * @param mixed $value <p>
	 * 追加したい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function push($value): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの先頭に要素を追加する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.unshift.php
	 * @param mixed $value <p>
	 * 追加する値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function unshift($value): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの最後のノードを取得する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.top.php
	 * @return mixed 最後のノードの値を返します。
	 */
	public function top() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの最初のノードを取得する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.bottom.php
	 * @return mixed 最初のノードの値を返します。
	 */
	public function bottom() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストが空かどうかを調べる
	 * @link http://php.net/manual/ja/spldoublylinkedlist.isempty.php
	 * @return bool 双方向リンクリストが空かどうかを返します。
	 */
	public function isEmpty(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 反復処理のモードを設定する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.setiteratormode.php
	 * @param int $mode <p>
	 * 次の 2 種類の直交するモードを設定できます。
	 * </p>
	 * 反復処理の方向 (いずれかを選択)
	 * <b>SplDoublyLinkedList::IT_MODE_LIFO</b> (スタック方式)
	 * @return void 値を返しません。
	 */
	public function setIteratorMode(int $mode): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 反復処理のモードを返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.getiteratormode.php
	 * @return int 反復処理の才のモードおよびフラグを返します。
	 */
	public function getIteratorMode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストの要素数を数える
	 * @link http://php.net/manual/ja/spldoublylinkedlist.count.php
	 * @return int 双方向リンクリストの要素数を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index が存在するかどうかを返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetexists.php
	 * @param mixed $index <p>
	 * 調べたいインデックス。
	 * </p>
	 * @return bool 指定した <i>index</i> が存在する場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function offsetExists($index): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index の値を返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetget.php
	 * @param mixed $index <p>
	 * 値を取得したいインデックス。
	 * </p>
	 * @return mixed 指定した <i>index</i> の値を返します。
	 */
	public function offsetGet($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index の値を $newval に設定する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetset.php
	 * @param mixed $index <p>
	 * 設定したいインデックス。
	 * </p>
	 * @param mixed $newval <p>
	 * <i>index</i> の新しい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet($index, $newval): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した $index の値を削除する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.offsetunset.php
	 * @param mixed $index <p>
	 * 削除したいインデックス。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetUnset($index): void {}

	/**
	 * @param $index
	 * @param $newval
	 */
	public function add($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータを先頭に巻き戻す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在の配列の要素を返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.current.php
	 * @return mixed 現在のノードの値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のノードのインデックスを返す
	 * @link http://php.net/manual/ja/spldoublylinkedlist.key.php
	 * @return mixed 現在のノードのインデックスを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のエントリに移動する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 前のエントリに移動する
	 * @link http://php.net/manual/ja/spldoublylinkedlist.prev.php
	 * @return void 値を返しません。
	 */
	public function prev(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 双方向リンクリストにまだノードがあるかどうかを調べる
	 * @link http://php.net/manual/ja/spldoublylinkedlist.valid.php
	 * @return bool 双方向リンクリストにまだノードが含まれる場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * ストレージをデシリアライズする
	 * @link http://php.net/manual/ja/spldoublylinkedlist.unserialize.php
	 * @param string $serialized <p>
	 * シリアライズした文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function unserialize(string $serialized): void {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * ストレージをシリアライズする
	 * @link http://php.net/manual/ja/spldoublylinkedlist.serialize.php
	 * @return string シリアライズした文字列を返します。
	 */
	public function serialize(): string {}

}

/**
 * SplHeap クラスは、ヒープの主要な機能を提供します。
 * @link http://php.net/manual/ja/class.splheap.php
 */
abstract class SplHeap implements Iterator, Traversable, Countable {

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープの先頭からノードを取り出す
	 * @link http://php.net/manual/ja/splheap.extract.php
	 * @return mixed 取り出したノードの値を返します。
	 */
	public function extract() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープに要素を挿入する
	 * @link http://php.net/manual/ja/splheap.insert.php
	 * @param mixed $value <p>
	 * 挿入する値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function insert($value): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープの先頭のノードを取り出す
	 * @link http://php.net/manual/ja/splheap.top.php
	 * @return mixed 先頭のノードの値を返します。
	 */
	public function top() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープ内の要素数を数える
	 * @link http://php.net/manual/ja/splheap.count.php
	 * @return int ヒープ内の要素数を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープが空かどうかを調べる
	 * @link http://php.net/manual/ja/splheap.isempty.php
	 * @return bool ヒープが空かどうかを返します。
	 */
	public function isEmpty(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータを先頭に巻き戻す (何もしない)
	 * @link http://php.net/manual/ja/splheap.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータが指す現在のノードを返す
	 * @link http://php.net/manual/ja/splheap.current.php
	 * @return mixed 現在のノードの値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のノードのインデックスを返す
	 * @link http://php.net/manual/ja/splheap.key.php
	 * @return mixed 現在のノードのインデックスを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のノードに移動する
	 * @link http://php.net/manual/ja/splheap.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープにまだノードがあるかどうかを調べる
	 * @link http://php.net/manual/ja/splheap.valid.php
	 * @return bool ヒープにまだノードが含まれる場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 破壊されたヒープを復旧し、それ以降の操作をできるようにする
	 * @link http://php.net/manual/ja/splheap.recoverfromcorruption.php
	 * @return void 値を返しません。
	 */
	public function recoverFromCorruption(): void {}

	public function isCorrupted() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 要素を比較し、ヒープ内の適切な位置に置く
	 * @link http://php.net/manual/ja/splheap.compare.php
	 * @param mixed $value1 <p>
	 * 比較したい最初のノード。
	 * </p>
	 * @param mixed $value2 <p>
	 * 比較したい 2 番目のノード。
	 * </p>
	 * @return int 比較結果を返します。<i>value1</i> が <i>value2</i>
	 * より大きい場合は正の整数値、等しい場合は 0、
	 * 小さい場合は負の整数値となります。
	 * </p>
	 * <p>
	 * 同一の値を持つ複数の要素をヒープ内に保持することはおすすめしません。
	 * そうすると、ヒープ内の相対位置がはっきりしなくなってしまいます。
	 */
	abstract protected function compare($value1, $value2): int;

}

/**
 * SplMinHeap クラスは、ヒープの主要な機能を提供し、最小値を先頭に保ちます。
 * @link http://php.net/manual/ja/class.splminheap.php
 */
class SplMinHeap extends SplHeap implements Countable, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 要素を比較し、ヒープ内の適切な位置に置く
	 * @link http://php.net/manual/ja/splminheap.compare.php
	 * @param mixed $value1 <p>
	 * 比較したい最初のノード。
	 * </p>
	 * @param mixed $value2 <p>
	 * 比較したい 2 番目のノード。
	 * </p>
	 * @return int 比較結果を返します。<i>value1</i> が <i>value2</i>
	 * より大きい場合は正の整数値、等しい場合は 0、
	 * 小さい場合は負の整数値となります。
	 * </p>
	 * <p>
	 * 同一の値を持つ複数の要素をヒープ内に保持することはおすすめしません。
	 * そうすると、ヒープ内の相対位置がはっきりしなくなってしまいます。
	 */
	protected function compare($value1, $value2): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープの先頭からノードを取り出す
	 * @link http://php.net/manual/ja/splheap.extract.php
	 * @return mixed 取り出したノードの値を返します。
	 */
	public function extract() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープに要素を挿入する
	 * @link http://php.net/manual/ja/splheap.insert.php
	 * @param mixed $value <p>
	 * 挿入する値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function insert($value): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープの先頭のノードを取り出す
	 * @link http://php.net/manual/ja/splheap.top.php
	 * @return mixed 先頭のノードの値を返します。
	 */
	public function top() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープ内の要素数を数える
	 * @link http://php.net/manual/ja/splheap.count.php
	 * @return int ヒープ内の要素数を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープが空かどうかを調べる
	 * @link http://php.net/manual/ja/splheap.isempty.php
	 * @return bool ヒープが空かどうかを返します。
	 */
	public function isEmpty(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータを先頭に巻き戻す (何もしない)
	 * @link http://php.net/manual/ja/splheap.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータが指す現在のノードを返す
	 * @link http://php.net/manual/ja/splheap.current.php
	 * @return mixed 現在のノードの値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のノードのインデックスを返す
	 * @link http://php.net/manual/ja/splheap.key.php
	 * @return mixed 現在のノードのインデックスを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のノードに移動する
	 * @link http://php.net/manual/ja/splheap.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープにまだノードがあるかどうかを調べる
	 * @link http://php.net/manual/ja/splheap.valid.php
	 * @return bool ヒープにまだノードが含まれる場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 破壊されたヒープを復旧し、それ以降の操作をできるようにする
	 * @link http://php.net/manual/ja/splheap.recoverfromcorruption.php
	 * @return void 値を返しません。
	 */
	public function recoverFromCorruption(): void {}

	public function isCorrupted() {}

}

/**
 * SplMaxHeap クラスは、ヒープの主要な機能を提供し、最大値を先頭に保ちます。
 * @link http://php.net/manual/ja/class.splmaxheap.php
 */
class SplMaxHeap extends SplHeap implements Countable, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 要素を比較し、ヒープ内の適切な位置に置く
	 * @link http://php.net/manual/ja/splmaxheap.compare.php
	 * @param mixed $value1 <p>
	 * 比較したい最初のノード。
	 * </p>
	 * @param mixed $value2 <p>
	 * 比較したい 2 番目のノード。
	 * </p>
	 * @return int 比較結果を返します。<i>value1</i> が <i>value2</i>
	 * より大きい場合は正の整数値、等しい場合は 0、
	 * 小さい場合は負の整数値となります。
	 * </p>
	 * <p>
	 * 同一の値を持つ複数の要素をヒープ内に保持することはおすすめしません。
	 * そうすると、ヒープ内の相対位置がはっきりしなくなってしまいます。
	 */
	protected function compare($value1, $value2): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープの先頭からノードを取り出す
	 * @link http://php.net/manual/ja/splheap.extract.php
	 * @return mixed 取り出したノードの値を返します。
	 */
	public function extract() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープに要素を挿入する
	 * @link http://php.net/manual/ja/splheap.insert.php
	 * @param mixed $value <p>
	 * 挿入する値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function insert($value): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープの先頭のノードを取り出す
	 * @link http://php.net/manual/ja/splheap.top.php
	 * @return mixed 先頭のノードの値を返します。
	 */
	public function top() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープ内の要素数を数える
	 * @link http://php.net/manual/ja/splheap.count.php
	 * @return int ヒープ内の要素数を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープが空かどうかを調べる
	 * @link http://php.net/manual/ja/splheap.isempty.php
	 * @return bool ヒープが空かどうかを返します。
	 */
	public function isEmpty(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータを先頭に巻き戻す (何もしない)
	 * @link http://php.net/manual/ja/splheap.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータが指す現在のノードを返す
	 * @link http://php.net/manual/ja/splheap.current.php
	 * @return mixed 現在のノードの値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のノードのインデックスを返す
	 * @link http://php.net/manual/ja/splheap.key.php
	 * @return mixed 現在のノードのインデックスを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のノードに移動する
	 * @link http://php.net/manual/ja/splheap.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープにまだノードがあるかどうかを調べる
	 * @link http://php.net/manual/ja/splheap.valid.php
	 * @return bool ヒープにまだノードが含まれる場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 破壊されたヒープを復旧し、それ以降の操作をできるようにする
	 * @link http://php.net/manual/ja/splheap.recoverfromcorruption.php
	 * @return void 値を返しません。
	 */
	public function recoverFromCorruption(): void {}

	public function isCorrupted() {}

}

/**
 * SplPriorityQueue クラスは、優先順位つきキューの主要な機能を提供します。
 * 最大ヒープを使用して実装しています。
 * @link http://php.net/manual/ja/class.splpriorityqueue.php
 */
class SplPriorityQueue implements Iterator, Traversable, Countable {
	const EXTR_BOTH = 3;
	const EXTR_PRIORITY = 2;
	const EXTR_DATA = 1;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 要素の優先順位を比較し、ヒープ内の適切な位置に置く
	 * @link http://php.net/manual/ja/splpriorityqueue.compare.php
	 * @param mixed $priority1 <p>
	 * 比較したい最初のノードの優先順位。
	 * </p>
	 * @param mixed $priority2 <p>
	 * 比較したい 2 番目のノードの優先順位。
	 * </p>
	 * @return int 比較結果を返します。<i>priority1</i> が <i>priority2</i>
	 * より大きい場合は正の整数値、等しい場合は 0、
	 * 小さい場合は負の整数値となります。
	 * </p>
	 * <p>
	 * 同一の優先順位の要素が複数存在する場合は、
	 * キューから取り出す際の順序が不定となります。
	 */
	public function compare($priority1, $priority2): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * キューに要素を挿入する
	 * @link http://php.net/manual/ja/splpriorityqueue.insert.php
	 * @param mixed $value <p>
	 * 挿入する値。
	 * </p>
	 * @param mixed $priority <p>
	 * 関連づける優先順位。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function insert($value, $priority): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 取り出しモードを設定する
	 * @link http://php.net/manual/ja/splpriorityqueue.setextractflags.php
	 * @param int $flags <p>
	 * 何を取り出すのかを <b>SplPriorityQueue::current</b>、
	 * <b>SplPriorityQueue::top</b> および
	 * <b>SplPriorityQueue::extract</b> で指定します。
	 * </p>
	 * <b>SplPriorityQueue::EXTR_DATA</b> (0x00000001): データを取り出す
	 * @return void 値を返しません。
	 */
	public function setExtractFlags(int $flags): void {}

	public function getExtractFlags() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * キューの先頭のノードを取り出す
	 * @link http://php.net/manual/ja/splpriorityqueue.top.php
	 * @return mixed 先頭のノードの値あるいは優先順位 (あるいはその両方) を、抽出フラグの設定に応じて返します。
	 */
	public function top() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ヒープの先頭からノードを取り出す
	 * @link http://php.net/manual/ja/splpriorityqueue.extract.php
	 * @return mixed 取り出したノードの値あるいは優先順位 (あるいはその両方) を、抽出フラグの設定に応じて返します。
	 */
	public function extract() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * キュー内の要素数を数える
	 * @link http://php.net/manual/ja/splpriorityqueue.count.php
	 * @return int キュー内の要素数を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * キューが空かどうかを調べる
	 * @link http://php.net/manual/ja/splpriorityqueue.isempty.php
	 * @return bool キューが空かどうかを返します。
	 */
	public function isEmpty(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータを先頭に巻き戻す (何もしない)
	 * @link http://php.net/manual/ja/splpriorityqueue.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータが指す現在のノードを返す
	 * @link http://php.net/manual/ja/splpriorityqueue.current.php
	 * @return mixed 現在のノードの値あるいは優先順位 (あるいはその両方) を、抽出フラグの設定に応じて返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在のノードのインデックスを返す
	 * @link http://php.net/manual/ja/splpriorityqueue.key.php
	 * @return mixed 現在のノードのインデックスを返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のノードに移動する
	 * @link http://php.net/manual/ja/splpriorityqueue.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * キューにまだノードがあるかどうかを調べる
	 * @link http://php.net/manual/ja/splpriorityqueue.valid.php
	 * @return bool キューにまだノードが含まれる場合に <b>TRUE</b>、
	 * そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 破壊されたキューを復旧し、それ以降の操作をできるようにする
	 * @link http://php.net/manual/ja/splpriorityqueue.recoverfromcorruption.php
	 * @return void 値を返しません。
	 */
	public function recoverFromCorruption(): void {}

	public function isCorrupted() {}

}

/**
 * SplFixedArray クラスは配列の主要な機能を提供します。
 * SplFixedArray と通常の PHP の配列との主な違いは、
 * SplFixedArray は固定長であって、
 * 整数値で指定した範囲内の添字しか使用できないところです。
 * これにより、より高速な配列の実装が可能となりました。
 * @link http://php.net/manual/ja/class.splfixedarray.php
 */
class SplFixedArray implements Iterator, Traversable, ArrayAccess, Countable {

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 新しい固定長配列を作成する
	 * @link http://php.net/manual/ja/splfixedarray.construct.php
	 * @param int $size [optional] <p>
	 * 固定長配列のサイズ。
	 * 0 から <b>PHP_INT_MAX</b> までの数を指定します。
	 * </p>
	 */
	public function __construct(int $size = 0) {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * アンシリアライズ後に配列を再初期化する
	 * @link http://php.net/manual/ja/splfixedarray.wakeup.php
	 * @return void 値を返しません。
	 */
	public function __wakeup(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 配列のサイズを返す
	 * @link http://php.net/manual/ja/splfixedarray.count.php
	 * @return int 配列のサイズを返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 固定長配列から PHP の配列を返す
	 * @link http://php.net/manual/ja/splfixedarray.toarray.php
	 * @return array 固定長配列と同じ内容の PHP の配列を返します。
	 */
	public function toArray(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * PHP の配列を <b>SplFixedArray</b> インスタンスにインポートする
	 * @link http://php.net/manual/ja/splfixedarray.fromarray.php
	 * @param array $array <p>
	 * インポートする配列。
	 * </p>
	 * @param bool $save_indexes [optional] <p>
	 * 元の配列で使っている数値添字を保存しようと試みる。
	 * </p>
	 * @return SplFixedArray 配列の中身を含む <b>SplFixedArray</b>
	 * のインスタンスを返します。
	 */
	public static function fromArray(array $array, bool $save_indexes = true): SplFixedArray {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 配列のサイズを取得する
	 * @link http://php.net/manual/ja/splfixedarray.getsize.php
	 * @return int 配列のサイズを integer で返します。
	 */
	public function getSize(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 配列のサイズを変更する
	 * @link http://php.net/manual/ja/splfixedarray.setsize.php
	 * @param int $size <p>
	 * 新しい配列のサイズ。
	 * 0 から <b>PHP_INT_MAX</b> までの数を指定します。
	 * </p>
	 * @return int 値を返しません。
	 */
	public function setSize(int $size): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した添字が存在するかどうかを返す
	 * @link http://php.net/manual/ja/splfixedarray.offsetexists.php
	 * @param int $index <p>
	 * 調べたい添字。
	 * </p>
	 * @return bool 指定した添字が存在する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function offsetExists(int $index): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した添字の値を返す
	 * @link http://php.net/manual/ja/splfixedarray.offsetget.php
	 * @param int $index <p>
	 * 値を取得したい添字。
	 * </p>
	 * @return mixed <i>index</i> で指定した添字の値を返します。
	 */
	public function offsetGet(int $index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した添字の新しい値を設定する
	 * @link http://php.net/manual/ja/splfixedarray.offsetset.php
	 * @param int $index <p>
	 * 設定したい添字。
	 * </p>
	 * @param mixed $newval <p>
	 * <i>index</i> の新しい値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet(int $index, $newval): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した添字の値を消去する
	 * @link http://php.net/manual/ja/splfixedarray.offsetunset.php
	 * @param int $index <p>
	 * 消去したい添字。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetUnset(int $index): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータを先頭に巻き戻す
	 * @link http://php.net/manual/ja/splfixedarray.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在の配列の要素を返す
	 * @link http://php.net/manual/ja/splfixedarray.current.php
	 * @return mixed 現在の要素の値を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 現在の配列の添字を返す
	 * @link http://php.net/manual/ja/splfixedarray.key.php
	 * @return int 現在の配列の添字を返します。
	 */
	public function key(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 次のエントリに進む
	 * @link http://php.net/manual/ja/splfixedarray.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 配列にまだ要素があるかどうかを調べる
	 * @link http://php.net/manual/ja/splfixedarray.valid.php
	 * @return bool 配列にまだ要素がある場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

}

/**
 * <b>SplObserver</b> インターフェイスを
 * <b>SplSubject</b> とともに使うと、Observer パターンを実装することができます。
 * @link http://php.net/manual/ja/class.splobserver.php
 */
interface SplObserver  {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * subject の更新を受信する
	 * @link http://php.net/manual/ja/splobserver.update.php
	 * @param SplSubject $subject <p>
	 * observer に更新を通知する <b>SplSubject</b>。
	 * </p>
	 * @return void 値を返しません。
	 */
	abstract public function update(SplSubject $subject): void;

}

/**
 * <b>SplSubject</b> インターフェイスを
 * <b>SplObserver</b> とともに使うと、Observer パターンを実装することができます。
 * @link http://php.net/manual/ja/class.splsubject.php
 */
interface SplSubject  {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * SplObserver をアタッチする
	 * @link http://php.net/manual/ja/splsubject.attach.php
	 * @param SplObserver $observer <p>
	 * アタッチする <b>SplObserver</b>。
	 * </p>
	 * @return void 値を返しません。
	 */
	abstract public function attach(SplObserver $observer): void;

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * observer をデタッチする
	 * @link http://php.net/manual/ja/splsubject.detach.php
	 * @param SplObserver $observer <p>
	 * デタッチする <b>SplObserver</b>。
	 * </p>
	 * @return void 値を返しません。
	 */
	abstract public function detach(SplObserver $observer): void;

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * observer に通知する
	 * @link http://php.net/manual/ja/splsubject.notify.php
	 * @return void 値を返しません。
	 */
	abstract public function notify(): void;

}

/**
 * SplObjectStorage クラスは、オブジェクトをデータに対応させたり、
 * データを渡さずオブジェクトセットとして使用したりします。
 * これらはどちらも、オブジェクトを一意に特定したい場合に便利です。
 * @link http://php.net/manual/ja/class.splobjectstorage.php
 */
class SplObjectStorage implements Countable, Iterator, Traversable, Serializable, ArrayAccess {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * オブジェクトをストレージに追加する
	 * @link http://php.net/manual/ja/splobjectstorage.attach.php
	 * @param object $object <p>
	 * 追加したいオブジェクト。
	 * </p>
	 * @param mixed $data [optional] <p>
	 * object に関連づけるデータ。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function attach($object, $data = null): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * オブジェクトをストレージから取り除く
	 * @link http://php.net/manual/ja/splobjectstorage.detach.php
	 * @param object $object <p>
	 * 取り除きたいオブジェクト。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function detach($object): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ストレージに特定のオブジェクトが含まれるかどうかを調べる
	 * @link http://php.net/manual/ja/splobjectstorage.contains.php
	 * @param object $object <p>
	 * 探したいオブジェクト。
	 * </p>
	 * @return bool object がストレージに存在する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function contains($object): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 別のストレージからすべてのオブジェクトを追加する
	 * @link http://php.net/manual/ja/splobjectstorage.addall.php
	 * @param SplObjectStorage $storage <p>
	 * インポートしたいストレージ。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function addAll(SplObjectStorage $storage): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 別のストレージに含まれているオブジェクトを現在のストレージから取り除く
	 * @link http://php.net/manual/ja/splobjectstorage.removeall.php
	 * @param SplObjectStorage $storage <p>
	 * 取り除きたい要素を含むストレージ。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function removeAll(SplObjectStorage $storage): void {}

	/**
	 * (PHP 5 &gt;= 5.3.6, PHP 7)<br/>
	 * 別のストレージに含まれているもの以外のすべてのオブジェクトを現在のストレージから取り除く
	 * @link http://php.net/manual/ja/splobjectstorage.removeallexcept.php
	 * @param SplObjectStorage $storage <p>
	 * 現在のストレージに残しておきたい要素を含むストレージ。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function removeAllExcept(SplObjectStorage $storage): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータの現在のエントリに関連づけられたデータを返す
	 * @link http://php.net/manual/ja/splobjectstorage.getinfo.php
	 * @return mixed イテレータの現在の位置に関連づけられたデータを返します。
	 */
	public function getInfo() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータの現在のエントリに関連づけるデータを設定する
	 * @link http://php.net/manual/ja/splobjectstorage.setinfo.php
	 * @param mixed $data <p>
	 * 現在のイテレータのエントリに関連づけるデータ。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setInfo($data): void {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * 中に含むオブジェクトの一意な識別子を算出する
	 * @link http://php.net/manual/ja/splobjectstorage.gethash.php
	 * @param object $object <p>
	 * 識別子を算出したいオブジェクト。
	 * </p>
	 * @return string 算出した識別子を文字列で返します。
	 */
	public function getHash($object): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ストレージ内のオブジェクトの数を返す
	 * @link http://php.net/manual/ja/splobjectstorage.count.php
	 * @return int ストレージ内のオブジェクトの数を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータをストレージの最初の要素に巻き戻す
	 * @link http://php.net/manual/ja/splobjectstorage.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータの現在のエントリが有効かどうかを返す
	 * @link http://php.net/manual/ja/splobjectstorage.valid.php
	 * @return bool イテレータのエントリが有効な場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * イテレータの現在位置を返す
	 * @link http://php.net/manual/ja/splobjectstorage.key.php
	 * @return int イテレータの現在位置に対応するインデックスを返します。
	 */
	public function key(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のストレージの要素を返す
	 * @link http://php.net/manual/ja/splobjectstorage.current.php
	 * @return object 現在のイテレータの位置にあるオブジェクトを返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 次のエントリに移動する
	 * @link http://php.net/manual/ja/splobjectstorage.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ストレージの文字列表現をアンシリアライズする
	 * @link http://php.net/manual/ja/splobjectstorage.unserialize.php
	 * @param string $serialized <p>
	 * ストレージをシリアライズしたもの。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function unserialize(string $serialized): void {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * ストレージをシリアライズする
	 * @link http://php.net/manual/ja/splobjectstorage.serialize.php
	 * @return string ストレージの文字列表現を返します。
	 */
	public function serialize(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * オブジェクトがストレージ内に存在するかどうかを調べる
	 * @link http://php.net/manual/ja/splobjectstorage.offsetexists.php
	 * @param object $object <p>
	 * 探したいオブジェクト。
	 * </p>
	 * @return bool object がストレージ内に存在する場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function offsetExists($object): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ストレージ内のオブジェクトにデータを関連づける
	 * @link http://php.net/manual/ja/splobjectstorage.offsetset.php
	 * @param object $object <p>
	 * データを関連づけたいオブジェクト。
	 * </p>
	 * @param mixed $data [optional] <p>
	 * object に関連づけるデータ。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetSet($object, $data = null): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ストレージからオブジェクトを取り除く
	 * @link http://php.net/manual/ja/splobjectstorage.offsetunset.php
	 * @param object $object <p>
	 * 取り除きたいオブジェクト。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function offsetUnset($object): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * オブジェクトに関連づけられたデータを返す
	 * @link http://php.net/manual/ja/splobjectstorage.offsetget.php
	 * @param object $object <p>
	 * 探したいオブジェクト。
	 * </p>
	 * @return mixed ストレージ内のオブジェクトに関連づけられたデータを返します。
	 */
	public function offsetGet($object) {}

}

/**
 * アタッチしたすべてのイテレータを順に処理するイテレータです。
 * @link http://php.net/manual/ja/class.multipleiterator.php
 */
class MultipleIterator implements Iterator, Traversable {
	const MIT_NEED_ANY = 0;
	const MIT_NEED_ALL = 1;
	const MIT_KEYS_NUMERIC = 0;
	const MIT_KEYS_ASSOC = 2;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 新しい MultipleIterator を作成する
	 * @link http://php.net/manual/ja/multipleiterator.construct.php
	 * @param int $flags [optional] <p>
	 * 設定するフラグ。
	 * フラグ定数
	 * を参照ください。
	 * <b>MultipleIterator::MIT_NEED_ALL</b> あるいは <b>MultipleIterator::MIT_NEED_ANY</b>
	 * <b>MultipleIterator::MIT_KEYS_NUMERIC</b> あるいは <b>MultipleIterator::MIT_KEYS_ASSOC</b>
	 * </p>
	 * <p>デフォルトは <b>MultipleIterator::MIT_NEED_ALL</b>|<b>MultipleIterator::MIT_KEYS_NUMERIC</b> です。</p>
	 */
	public function __construct(int $flags = null) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * フラグの情報を取得する
	 * @link http://php.net/manual/ja/multipleiterator.getflags.php
	 * @return int フラグについての情報を integer で返します。
	 */
	public function getFlags(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * フラグを設定する
	 * @link http://php.net/manual/ja/multipleiterator.setflags.php
	 * @param int $flags <p>
	 * 設定するフラグ。
	 * フラグ定数
	 * を参照ください。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setFlags(int $flags): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータの情報をアタッチする
	 * @link http://php.net/manual/ja/multipleiterator.attachiterator.php
	 * @param Iterator $iterator <p>
	 * アタッチする新しいイテレータ。
	 * </p>
	 * @param string $infos [optional] <p>
	 * イテレータに関連する情報。
	 * integer、string あるいは <b>NULL</b> でなければなりません。
	 * </p>
	 * @return void
	 */
	public function attachIterator(Iterator $iterator, string $infos = null): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータをデタッチする
	 * @link http://php.net/manual/ja/multipleiterator.detachiterator.php
	 * @param Iterator $iterator <p>
	 * デタッチするイテレータ。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function detachIterator(Iterator $iterator): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * イテレータがアタッチされているかどうかを調べる
	 * @link http://php.net/manual/ja/multipleiterator.containsiterator.php
	 * @param Iterator $iterator <p>
	 * 調べたいイタレータ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function containsIterator(Iterator $iterator): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * アタッチされているイテレータインスタンスの数を取得する
	 * @link http://php.net/manual/ja/multipleiterator.countiterators.php
	 * @return int アタッチされているイテレータインスタンスの数を (integer で) 返します
	 */
	public function countIterators(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * アタッチしているすべてのイテレータインスタンスを巻き戻す
	 * @link http://php.net/manual/ja/multipleiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * サブイテレータの有効性を調べる
	 * @link http://php.net/manual/ja/multipleiterator.valid.php
	 * @return bool サブイテレータのひとつあるいはすべて (フラグによって異なります) が有効な場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 登録されているイテレータインスタンスを取得する
	 * @link http://php.net/manual/ja/multipleiterator.key.php
	 * @return array 登録されているイテレータインスタンスを取得しますの配列を返します。
	 * サブイテレータがアタッチされていない場合は <b>FALSE</b> を返します。
	 */
	public function key(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 登録されているイテレータインスタンスを取得する
	 * @link http://php.net/manual/ja/multipleiterator.current.php
	 * @return array アタッチされている各イテレータの現在の値を含む配列を返します。
	 * イテレータがアタッチされていない場合は <b>FALSE</b> を返します。
	 */
	public function current(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * アタッチしているすべてのイテレータインスタンスを次に移動させる
	 * @link http://php.net/manual/ja/multipleiterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

}

/**
 * (PHP 5, PHP 7)<br/>
 * 利用可能な SPL クラスを返す
 * @link http://php.net/manual/ja/function.spl-classes.php
 * @return array 現在利用可能な SPL クラスを配列で返します。
 */
function spl_classes(): array {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
 * __autoload() のデフォルト実装
 * @link http://php.net/manual/ja/function.spl-autoload.php
 * @param string $class_name <p>
 * インスタンスを作成する小文字のクラス名 (および名前空間名)。
 * </p>
 * @param string $file_extensions [optional] <p>
 * デフォルトでは、クラス名を小文字にして .inc および .php
 * を拡張子につけたファイル名のファイルが存在するかどうかを
 * すべてのインクルードパスから探します。
 * </p>
 * @return void 値を返しません。
 */
function spl_autoload(string $class_name, string $file_extensions = 'spl_autoload_extensions()'): void {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
 * spl_autoload 用のデフォルトの拡張子を登録し、それを返す
 * @link http://php.net/manual/ja/function.spl-autoload-extensions.php
 * @param string $file_extensions [optional] <p>
 * 引数なしでコールした場合は、現在の拡張子一覧をカンマ区切りで返します。
 * ファイル拡張子を変更するには、
 * 新しい拡張子一覧をカンマ区切り文字列で表したものを引数に指定して、
 * この関数を実行します。
 * </p>
 * @return string <b>spl_autoload</b>
 * のデフォルト拡張子の一覧をカンマ区切り形式で返します。
 */
function spl_autoload_extensions(string $file_extensions = null): string {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
 * 指定した関数を __autoload() の実装として登録する
 * @link http://php.net/manual/ja/function.spl-autoload-register.php
 * @param callable $autoload_function [optional] <p>
 * 登録したい autoload 関数。
 * パラメータが指定されなかった場合は、デフォルト実装である
 * <b>spl_autoload</b> が登録されます。
 * </p>
 * @param bool $throw [optional] <p>
 * このパラメータは、
 * <b>spl_autoload_register</b>
 * が <i>autoload_function</i>
 * を登録できなかったときに例外をスローするかどうかを指定します。
 * </p>
 * @param bool $prepend [optional] <p>
 * true の場合、<b>spl_autoload_register</b>
 * はキューの最後に追加するのではなく先頭に追加します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function spl_autoload_register(callable $autoload_function = null, bool $throw = true, bool $prepend = false): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
 * 指定した関数の、__autoload() の実装としての登録を解除する
 * @link http://php.net/manual/ja/function.spl-autoload-unregister.php
 * @param mixed $autoload_function <p>
 * 登録を解除したい autoload 関数。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function spl_autoload_unregister($autoload_function): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
 * すべての登録済み __autoload() 関数を返す
 * @link http://php.net/manual/ja/function.spl-autoload-functions.php
 * @return array すべての登録済み __autoload 関数を配列で返します。
 * autoload キューが有効になっていない場合は、<b>FALSE</b> が返されます。
 * 関数が何も登録されていない場合は、空の配列が返されます。
 */
function spl_autoload_functions(): array {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
 * 要求されたクラスを読み込むために、すべての登録済みの __autoload() 関数を試す
 * @link http://php.net/manual/ja/function.spl-autoload-call.php
 * @param string $class_name <p>
 * 探したいクラス名。
 * </p>
 * @return void 値を返しません。
 */
function spl_autoload_call(string $class_name): void {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 与えられたクラスの親クラスを返す
 * @link http://php.net/manual/ja/function.class-parents.php
 * @param mixed $class <p>
 * オブジェクトもしくはクラスの文字列を指定します。
 * </p>
 * @param bool $autoload [optional] <p>
 * <b>__autoload</b>
 * マジックメソッドを通じて、
 * この関数にクラスを自動的にロードさせるかどうかを指定します。
 * </p>
 * @return array 成功した場合に配列、エラー時に <b>FALSE</b> を返します。
 */
function class_parents($class, bool $autoload = true): array {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 与えられたクラスあるいはインターフェイスが実装しているインターフェイスを返す
 * @link http://php.net/manual/ja/function.class-implements.php
 * @param mixed $class <p>
 * オブジェクト (クラスのインスタンス)
 * もしくは文字列 (クラス名あるいはインターフェイス名) を指定します。
 * </p>
 * @param bool $autoload [optional] <p>
 * <b>__autoload</b>
 * マジックメソッドを通じて、
 * この関数にクラスを自動的にロードさせるかどうかを指定します。
 * </p>
 * @return array 成功した場合に配列、エラー時に <b>FALSE</b> を返します。
 */
function class_implements($class, bool $autoload = true): array {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * 指定したクラスが使っているトレイトを返す
 * @link http://php.net/manual/ja/function.class-uses.php
 * @param mixed $class <p>
 * オブジェクト (クラスのインスタンス) あるいは文字列 (クラス名)。
 * </p>
 * @param bool $autoload [optional] <p>
 * マジックメソッド
 * <b>__autoload</b>
 * で、この関数からクラスを自動的に読み込ませるかどうか。
 * </p>
 * @return array 成功した場合に配列、エラー時には <b>FALSE</b> を返します。
 */
function class_uses($class, bool $autoload = true): array {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 指定したオブジェクトのハッシュ ID を返す
 * @link http://php.net/manual/ja/function.spl-object-hash.php
 * @param object $obj
 * @return string 現在存在する各オブジェクトに固有で、同一オブジェクトに対しては常に同じ値となる文字列を返します。
 */
function spl_object_hash($obj): string {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * イテレータを配列にコピーする
 * @link http://php.net/manual/ja/function.iterator-to-array.php
 * @param Traversable $iterator <p>
 * コピーしたいイテレータ。
 * </p>
 * @param bool $use_keys [optional] <p>
 * イテレータの要素のキーをインデックスとして使用するかどうか。
 * </p>
 * <p>
 * PHP 5.5 以降では、キーが array あるいは object
 * のときに警告を発するようになりました。
 * キーが <b>NULL</b> の場合は空文字列に変換し、キーが double
 * の場合は integer 型になるよう切り詰めます。
 * キーが resource の場合は警告を発し、リソース ID に変換します。
 * また、キーが boolean の場合は整数値に変換します。
 * </p>
 * <p>
 * このパラメータを省略したり <b>TRUE</b> を指定したりした場合は、
 * 重複するキーは上書きされます。そのキーに対して最後にあらわれた値が
 * array で返されることになります。
 * このパラメータを <b>FALSE</b> にすると、重複があってもすべての値を返します。
 * </p>
 * @return array <i>iterator</i> の要素を含む配列を返します。
 */
function iterator_to_array(Traversable $iterator, bool $use_keys = true): array {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * イテレータにある要素をカウントする
 * @link http://php.net/manual/ja/function.iterator-count.php
 * @param Traversable $iterator <p>
 * カウントしたいイテレータ。
 * </p>
 * @return int <i>iterator</i> の要素数を返します。
 */
function iterator_count(Traversable $iterator): int {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * ユーザー関数をイテレータのすべての要素でコールする
 * @link http://php.net/manual/ja/function.iterator-apply.php
 * @param Traversable $iterator <p>
 * 順次処理したいクラス。
 * </p>
 * @param callable $function <p>
 * すべての要素に対してコールしたいコールバック関数。
 * <i>iterator</i> での処理を続けるために、
 * この関数は <b>TRUE</b> を返さなければなりません。
 * </p>
 * @param array $args [optional] <p>
 * コールバック関数に渡す引数。
 * </p>
 * @return int イテレータの要素数を返します。
 */
function iterator_apply(Traversable $iterator, callable $function, array $args = null): int {}

// End of SPL v.7.0.19
?>
