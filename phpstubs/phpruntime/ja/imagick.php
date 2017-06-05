<?php

// Start of imagick v.@PACKAGE_VERSION@

class ImagickException extends Exception implements Throwable {
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

class ImagickDrawException extends Exception implements Throwable {
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

class ImagickPixelIteratorException extends Exception implements Throwable {
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

class ImagickPixelException extends Exception implements Throwable {
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

class ImagickKernelException extends Exception implements Throwable {
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
 * @method Imagick clone() (PECL imagick 2.0.0)<br/>Imagick オブジェクトの完全なコピーを作成する
 * @link http://php.net/manual/ja/class.imagick.php
 */
class Imagick implements Iterator, Traversable, Countable {
	const COLOR_BLACK = 11;
	const COLOR_BLUE = 12;
	const COLOR_CYAN = 13;
	const COLOR_GREEN = 14;
	const COLOR_RED = 15;
	const COLOR_YELLOW = 16;
	const COLOR_MAGENTA = 17;
	const COLOR_OPACITY = 18;
	const COLOR_ALPHA = 19;
	const COLOR_FUZZ = 20;
	const IMAGICK_EXTNUM = 30403;
	const IMAGICK_EXTVER = "@PACKAGE_VERSION@";
	const QUANTUM_RANGE = 65535;
	const USE_ZEND_MM = 0;
	const COMPOSITE_DEFAULT = 40;
	const COMPOSITE_UNDEFINED = 0;
	const COMPOSITE_NO = 1;
	const COMPOSITE_ADD = 2;
	const COMPOSITE_ATOP = 3;
	const COMPOSITE_BLEND = 4;
	const COMPOSITE_BUMPMAP = 5;
	const COMPOSITE_CLEAR = 7;
	const COMPOSITE_COLORBURN = 8;
	const COMPOSITE_COLORDODGE = 9;
	const COMPOSITE_COLORIZE = 10;
	const COMPOSITE_COPYBLACK = 11;
	const COMPOSITE_COPYBLUE = 12;
	const COMPOSITE_COPY = 13;
	const COMPOSITE_COPYCYAN = 14;
	const COMPOSITE_COPYGREEN = 15;
	const COMPOSITE_COPYMAGENTA = 16;
	const COMPOSITE_COPYOPACITY = 17;
	const COMPOSITE_COPYRED = 18;
	const COMPOSITE_COPYYELLOW = 19;
	const COMPOSITE_DARKEN = 20;
	const COMPOSITE_DSTATOP = 21;
	const COMPOSITE_DST = 22;
	const COMPOSITE_DSTIN = 23;
	const COMPOSITE_DSTOUT = 24;
	const COMPOSITE_DSTOVER = 25;
	const COMPOSITE_DIFFERENCE = 26;
	const COMPOSITE_DISPLACE = 27;
	const COMPOSITE_DISSOLVE = 28;
	const COMPOSITE_EXCLUSION = 29;
	const COMPOSITE_HARDLIGHT = 30;
	const COMPOSITE_HUE = 31;
	const COMPOSITE_IN = 32;
	const COMPOSITE_LIGHTEN = 33;
	const COMPOSITE_LUMINIZE = 35;
	const COMPOSITE_MINUS = 36;
	const COMPOSITE_MODULATE = 37;
	const COMPOSITE_MULTIPLY = 38;
	const COMPOSITE_OUT = 39;
	const COMPOSITE_OVER = 40;
	const COMPOSITE_OVERLAY = 41;
	const COMPOSITE_PLUS = 42;
	const COMPOSITE_REPLACE = 43;
	const COMPOSITE_SATURATE = 44;
	const COMPOSITE_SCREEN = 45;
	const COMPOSITE_SOFTLIGHT = 46;
	const COMPOSITE_SRCATOP = 47;
	const COMPOSITE_SRC = 48;
	const COMPOSITE_SRCIN = 49;
	const COMPOSITE_SRCOUT = 50;
	const COMPOSITE_SRCOVER = 51;
	const COMPOSITE_SUBTRACT = 52;
	const COMPOSITE_THRESHOLD = 53;
	const COMPOSITE_XOR = 54;
	const COMPOSITE_CHANGEMASK = 6;
	const COMPOSITE_LINEARLIGHT = 34;
	const COMPOSITE_DIVIDE = 55;
	const COMPOSITE_DISTORT = 56;
	const COMPOSITE_BLUR = 57;
	const COMPOSITE_PEGTOPLIGHT = 58;
	const COMPOSITE_VIVIDLIGHT = 59;
	const COMPOSITE_PINLIGHT = 60;
	const COMPOSITE_LINEARDODGE = 61;
	const COMPOSITE_LINEARBURN = 62;
	const COMPOSITE_MATHEMATICS = 63;
	const COMPOSITE_MODULUSADD = 2;
	const COMPOSITE_MODULUSSUBTRACT = 52;
	const COMPOSITE_MINUSDST = 36;
	const COMPOSITE_DIVIDEDST = 55;
	const COMPOSITE_DIVIDESRC = 64;
	const COMPOSITE_MINUSSRC = 65;
	const COMPOSITE_DARKENINTENSITY = 66;
	const COMPOSITE_LIGHTENINTENSITY = 67;
	const MONTAGEMODE_FRAME = 1;
	const MONTAGEMODE_UNFRAME = 2;
	const MONTAGEMODE_CONCATENATE = 3;
	const STYLE_NORMAL = 1;
	const STYLE_ITALIC = 2;
	const STYLE_OBLIQUE = 3;
	const STYLE_ANY = 4;
	const FILTER_UNDEFINED = 0;
	const FILTER_POINT = 1;
	const FILTER_BOX = 2;
	const FILTER_TRIANGLE = 3;
	const FILTER_HERMITE = 4;
	const FILTER_HANNING = 5;
	const FILTER_HAMMING = 6;
	const FILTER_BLACKMAN = 7;
	const FILTER_GAUSSIAN = 8;
	const FILTER_QUADRATIC = 9;
	const FILTER_CUBIC = 10;
	const FILTER_CATROM = 11;
	const FILTER_MITCHELL = 12;
	const FILTER_LANCZOS = 22;
	const FILTER_BESSEL = 13;
	const FILTER_SINC = 14;
	const FILTER_KAISER = 16;
	const FILTER_WELSH = 17;
	const FILTER_PARZEN = 18;
	const FILTER_LAGRANGE = 21;
	const FILTER_SENTINEL = 31;
	const FILTER_BOHMAN = 19;
	const FILTER_BARTLETT = 20;
	const FILTER_JINC = 13;
	const FILTER_SINCFAST = 15;
	const FILTER_ROBIDOUX = 26;
	const FILTER_LANCZOSSHARP = 23;
	const FILTER_LANCZOS2 = 24;
	const FILTER_LANCZOS2SHARP = 25;
	const FILTER_ROBIDOUXSHARP = 27;
	const FILTER_COSINE = 28;
	const FILTER_SPLINE = 29;
	const FILTER_LANCZOSRADIUS = 30;
	const IMGTYPE_UNDEFINED = 0;
	const IMGTYPE_BILEVEL = 1;
	const IMGTYPE_GRAYSCALE = 2;
	const IMGTYPE_GRAYSCALEMATTE = 3;
	const IMGTYPE_PALETTE = 4;
	const IMGTYPE_PALETTEMATTE = 5;
	const IMGTYPE_TRUECOLOR = 6;
	const IMGTYPE_TRUECOLORMATTE = 7;
	const IMGTYPE_COLORSEPARATION = 8;
	const IMGTYPE_COLORSEPARATIONMATTE = 9;
	const IMGTYPE_OPTIMIZE = 10;
	const IMGTYPE_PALETTEBILEVELMATTE = 11;
	const RESOLUTION_UNDEFINED = 0;
	const RESOLUTION_PIXELSPERINCH = 1;
	const RESOLUTION_PIXELSPERCENTIMETER = 2;
	const COMPRESSION_UNDEFINED = 0;
	const COMPRESSION_NO = 1;
	const COMPRESSION_BZIP = 2;
	const COMPRESSION_FAX = 6;
	const COMPRESSION_GROUP4 = 7;
	const COMPRESSION_JPEG = 8;
	const COMPRESSION_JPEG2000 = 9;
	const COMPRESSION_LOSSLESSJPEG = 10;
	const COMPRESSION_LZW = 11;
	const COMPRESSION_RLE = 12;
	const COMPRESSION_ZIP = 13;
	const COMPRESSION_DXT1 = 3;
	const COMPRESSION_DXT3 = 4;
	const COMPRESSION_DXT5 = 5;
	const COMPRESSION_ZIPS = 14;
	const COMPRESSION_PIZ = 15;
	const COMPRESSION_PXR24 = 16;
	const COMPRESSION_B44 = 17;
	const COMPRESSION_B44A = 18;
	const COMPRESSION_LZMA = 19;
	const COMPRESSION_JBIG1 = 20;
	const COMPRESSION_JBIG2 = 21;
	const PAINT_POINT = 1;
	const PAINT_REPLACE = 2;
	const PAINT_FLOODFILL = 3;
	const PAINT_FILLTOBORDER = 4;
	const PAINT_RESET = 5;
	const GRAVITY_NORTHWEST = 1;
	const GRAVITY_NORTH = 2;
	const GRAVITY_NORTHEAST = 3;
	const GRAVITY_WEST = 4;
	const GRAVITY_CENTER = 5;
	const GRAVITY_EAST = 6;
	const GRAVITY_SOUTHWEST = 7;
	const GRAVITY_SOUTH = 8;
	const GRAVITY_SOUTHEAST = 9;
	const GRAVITY_FORGET = 0;
	const GRAVITY_STATIC = 10;
	const STRETCH_NORMAL = 1;
	const STRETCH_ULTRACONDENSED = 2;
	const STRETCH_EXTRACONDENSED = 3;
	const STRETCH_CONDENSED = 4;
	const STRETCH_SEMICONDENSED = 5;
	const STRETCH_SEMIEXPANDED = 6;
	const STRETCH_EXPANDED = 7;
	const STRETCH_EXTRAEXPANDED = 8;
	const STRETCH_ULTRAEXPANDED = 9;
	const STRETCH_ANY = 10;
	const ALIGN_UNDEFINED = 0;
	const ALIGN_LEFT = 1;
	const ALIGN_CENTER = 2;
	const ALIGN_RIGHT = 3;
	const DECORATION_NO = 1;
	const DECORATION_UNDERLINE = 2;
	const DECORATION_OVERLINE = 3;
	const DECORATION_LINETROUGH = 4;
	const DECORATION_LINETHROUGH = 4;
	const NOISE_UNIFORM = 1;
	const NOISE_GAUSSIAN = 2;
	const NOISE_MULTIPLICATIVEGAUSSIAN = 3;
	const NOISE_IMPULSE = 4;
	const NOISE_LAPLACIAN = 5;
	const NOISE_POISSON = 6;
	const NOISE_RANDOM = 7;
	const CHANNEL_UNDEFINED = 0;
	const CHANNEL_RED = 1;
	const CHANNEL_GRAY = 1;
	const CHANNEL_CYAN = 1;
	const CHANNEL_GREEN = 2;
	const CHANNEL_MAGENTA = 2;
	const CHANNEL_BLUE = 4;
	const CHANNEL_YELLOW = 4;
	const CHANNEL_ALPHA = 8;
	const CHANNEL_OPACITY = 8;
	const CHANNEL_MATTE = 8;
	const CHANNEL_BLACK = 32;
	const CHANNEL_INDEX = 32;
	const CHANNEL_ALL = 134217727;
	const CHANNEL_DEFAULT = 134217719;
	const CHANNEL_RGBA = 15;
	const CHANNEL_TRUEALPHA = 64;
	const CHANNEL_RGBS = 128;
	const CHANNEL_GRAY_CHANNELS = 128;
	const CHANNEL_SYNC = 256;
	const CHANNEL_COMPOSITES = 47;
	const METRIC_UNDEFINED = 0;
	const METRIC_ABSOLUTEERRORMETRIC = 1;
	const METRIC_MEANABSOLUTEERROR = 2;
	const METRIC_MEANERRORPERPIXELMETRIC = 3;
	const METRIC_MEANSQUAREERROR = 4;
	const METRIC_PEAKABSOLUTEERROR = 5;
	const METRIC_PEAKSIGNALTONOISERATIO = 6;
	const METRIC_ROOTMEANSQUAREDERROR = 7;
	const METRIC_NORMALIZEDCROSSCORRELATIONERRORMETRIC = 8;
	const METRIC_FUZZERROR = 9;
	const PIXEL_CHAR = 1;
	const PIXEL_DOUBLE = 2;
	const PIXEL_FLOAT = 3;
	const PIXEL_INTEGER = 4;
	const PIXEL_LONG = 5;
	const PIXEL_QUANTUM = 6;
	const PIXEL_SHORT = 7;
	const EVALUATE_UNDEFINED = 0;
	const EVALUATE_ADD = 1;
	const EVALUATE_AND = 2;
	const EVALUATE_DIVIDE = 3;
	const EVALUATE_LEFTSHIFT = 4;
	const EVALUATE_MAX = 5;
	const EVALUATE_MIN = 6;
	const EVALUATE_MULTIPLY = 7;
	const EVALUATE_OR = 8;
	const EVALUATE_RIGHTSHIFT = 9;
	const EVALUATE_SET = 10;
	const EVALUATE_SUBTRACT = 11;
	const EVALUATE_XOR = 12;
	const EVALUATE_POW = 13;
	const EVALUATE_LOG = 14;
	const EVALUATE_THRESHOLD = 15;
	const EVALUATE_THRESHOLDBLACK = 16;
	const EVALUATE_THRESHOLDWHITE = 17;
	const EVALUATE_GAUSSIANNOISE = 18;
	const EVALUATE_IMPULSENOISE = 19;
	const EVALUATE_LAPLACIANNOISE = 20;
	const EVALUATE_MULTIPLICATIVENOISE = 21;
	const EVALUATE_POISSONNOISE = 22;
	const EVALUATE_UNIFORMNOISE = 23;
	const EVALUATE_COSINE = 24;
	const EVALUATE_SINE = 25;
	const EVALUATE_ADDMODULUS = 26;
	const EVALUATE_MEAN = 27;
	const EVALUATE_ABS = 28;
	const EVALUATE_EXPONENTIAL = 29;
	const EVALUATE_MEDIAN = 30;
	const EVALUATE_SUM = 31;
	const COLORSPACE_UNDEFINED = 0;
	const COLORSPACE_RGB = 1;
	const COLORSPACE_GRAY = 2;
	const COLORSPACE_TRANSPARENT = 3;
	const COLORSPACE_OHTA = 4;
	const COLORSPACE_LAB = 5;
	const COLORSPACE_XYZ = 6;
	const COLORSPACE_YCBCR = 7;
	const COLORSPACE_YCC = 8;
	const COLORSPACE_YIQ = 9;
	const COLORSPACE_YPBPR = 10;
	const COLORSPACE_YUV = 11;
	const COLORSPACE_CMYK = 12;
	const COLORSPACE_SRGB = 13;
	const COLORSPACE_HSB = 14;
	const COLORSPACE_HSL = 15;
	const COLORSPACE_HWB = 16;
	const COLORSPACE_REC601LUMA = 17;
	const COLORSPACE_REC709LUMA = 19;
	const COLORSPACE_LOG = 21;
	const COLORSPACE_CMY = 22;
	const COLORSPACE_LUV = 23;
	const COLORSPACE_HCL = 24;
	const COLORSPACE_LCH = 25;
	const COLORSPACE_LMS = 26;
	const COLORSPACE_LCHAB = 27;
	const COLORSPACE_LCHUV = 28;
	const COLORSPACE_SCRGB = 29;
	const COLORSPACE_HSI = 30;
	const COLORSPACE_HSV = 31;
	const COLORSPACE_HCLP = 32;
	const COLORSPACE_YDBDR = 33;
	const COLORSPACE_REC601YCBCR = 18;
	const COLORSPACE_REC709YCBCR = 20;
	const VIRTUALPIXELMETHOD_UNDEFINED = 0;
	const VIRTUALPIXELMETHOD_BACKGROUND = 1;
	const VIRTUALPIXELMETHOD_CONSTANT = 2;
	const VIRTUALPIXELMETHOD_EDGE = 4;
	const VIRTUALPIXELMETHOD_MIRROR = 5;
	const VIRTUALPIXELMETHOD_TILE = 7;
	const VIRTUALPIXELMETHOD_TRANSPARENT = 8;
	const VIRTUALPIXELMETHOD_MASK = 9;
	const VIRTUALPIXELMETHOD_BLACK = 10;
	const VIRTUALPIXELMETHOD_GRAY = 11;
	const VIRTUALPIXELMETHOD_WHITE = 12;
	const VIRTUALPIXELMETHOD_HORIZONTALTILE = 13;
	const VIRTUALPIXELMETHOD_VERTICALTILE = 14;
	const VIRTUALPIXELMETHOD_HORIZONTALTILEEDGE = 15;
	const VIRTUALPIXELMETHOD_VERTICALTILEEDGE = 16;
	const VIRTUALPIXELMETHOD_CHECKERTILE = 17;
	const PREVIEW_UNDEFINED = 0;
	const PREVIEW_ROTATE = 1;
	const PREVIEW_SHEAR = 2;
	const PREVIEW_ROLL = 3;
	const PREVIEW_HUE = 4;
	const PREVIEW_SATURATION = 5;
	const PREVIEW_BRIGHTNESS = 6;
	const PREVIEW_GAMMA = 7;
	const PREVIEW_SPIFF = 8;
	const PREVIEW_DULL = 9;
	const PREVIEW_GRAYSCALE = 10;
	const PREVIEW_QUANTIZE = 11;
	const PREVIEW_DESPECKLE = 12;
	const PREVIEW_REDUCENOISE = 13;
	const PREVIEW_ADDNOISE = 14;
	const PREVIEW_SHARPEN = 15;
	const PREVIEW_BLUR = 16;
	const PREVIEW_THRESHOLD = 17;
	const PREVIEW_EDGEDETECT = 18;
	const PREVIEW_SPREAD = 19;
	const PREVIEW_SOLARIZE = 20;
	const PREVIEW_SHADE = 21;
	const PREVIEW_RAISE = 22;
	const PREVIEW_SEGMENT = 23;
	const PREVIEW_SWIRL = 24;
	const PREVIEW_IMPLODE = 25;
	const PREVIEW_WAVE = 26;
	const PREVIEW_OILPAINT = 27;
	const PREVIEW_CHARCOALDRAWING = 28;
	const PREVIEW_JPEG = 29;
	const RENDERINGINTENT_UNDEFINED = 0;
	const RENDERINGINTENT_SATURATION = 1;
	const RENDERINGINTENT_PERCEPTUAL = 2;
	const RENDERINGINTENT_ABSOLUTE = 3;
	const RENDERINGINTENT_RELATIVE = 4;
	const INTERLACE_UNDEFINED = 0;
	const INTERLACE_NO = 1;
	const INTERLACE_LINE = 2;
	const INTERLACE_PLANE = 3;
	const INTERLACE_PARTITION = 4;
	const INTERLACE_GIF = 5;
	const INTERLACE_JPEG = 6;
	const INTERLACE_PNG = 7;
	const FILLRULE_UNDEFINED = 0;
	const FILLRULE_EVENODD = 1;
	const FILLRULE_NONZERO = 2;
	const PATHUNITS_UNDEFINED = 0;
	const PATHUNITS_USERSPACE = 1;
	const PATHUNITS_USERSPACEONUSE = 2;
	const PATHUNITS_OBJECTBOUNDINGBOX = 3;
	const LINECAP_UNDEFINED = 0;
	const LINECAP_BUTT = 1;
	const LINECAP_ROUND = 2;
	const LINECAP_SQUARE = 3;
	const LINEJOIN_UNDEFINED = 0;
	const LINEJOIN_MITER = 1;
	const LINEJOIN_ROUND = 2;
	const LINEJOIN_BEVEL = 3;
	const RESOURCETYPE_UNDEFINED = 0;
	const RESOURCETYPE_AREA = 1;
	const RESOURCETYPE_DISK = 2;
	const RESOURCETYPE_FILE = 3;
	const RESOURCETYPE_MAP = 4;
	const RESOURCETYPE_MEMORY = 5;
	const RESOURCETYPE_TIME = 7;
	const RESOURCETYPE_THROTTLE = 8;
	const RESOURCETYPE_THREAD = 6;
	const DISPOSE_UNRECOGNIZED = 0;
	const DISPOSE_UNDEFINED = 0;
	const DISPOSE_NONE = 1;
	const DISPOSE_BACKGROUND = 2;
	const DISPOSE_PREVIOUS = 3;
	const INTERPOLATE_UNDEFINED = 0;
	const INTERPOLATE_AVERAGE = 1;
	const INTERPOLATE_BICUBIC = 2;
	const INTERPOLATE_BILINEAR = 3;
	const INTERPOLATE_FILTER = 4;
	const INTERPOLATE_INTEGER = 5;
	const INTERPOLATE_MESH = 6;
	const INTERPOLATE_NEARESTNEIGHBOR = 7;
	const INTERPOLATE_SPLINE = 8;
	const LAYERMETHOD_UNDEFINED = 0;
	const LAYERMETHOD_COALESCE = 1;
	const LAYERMETHOD_COMPAREANY = 2;
	const LAYERMETHOD_COMPARECLEAR = 3;
	const LAYERMETHOD_COMPAREOVERLAY = 4;
	const LAYERMETHOD_DISPOSE = 5;
	const LAYERMETHOD_OPTIMIZE = 6;
	const LAYERMETHOD_OPTIMIZEPLUS = 8;
	const LAYERMETHOD_OPTIMIZETRANS = 9;
	const LAYERMETHOD_COMPOSITE = 12;
	const LAYERMETHOD_OPTIMIZEIMAGE = 7;
	const LAYERMETHOD_REMOVEDUPS = 10;
	const LAYERMETHOD_REMOVEZERO = 11;
	const LAYERMETHOD_TRIMBOUNDS = 16;
	const ORIENTATION_UNDEFINED = 0;
	const ORIENTATION_TOPLEFT = 1;
	const ORIENTATION_TOPRIGHT = 2;
	const ORIENTATION_BOTTOMRIGHT = 3;
	const ORIENTATION_BOTTOMLEFT = 4;
	const ORIENTATION_LEFTTOP = 5;
	const ORIENTATION_RIGHTTOP = 6;
	const ORIENTATION_RIGHTBOTTOM = 7;
	const ORIENTATION_LEFTBOTTOM = 8;
	const DISTORTION_UNDEFINED = 0;
	const DISTORTION_AFFINE = 1;
	const DISTORTION_AFFINEPROJECTION = 2;
	const DISTORTION_ARC = 9;
	const DISTORTION_BILINEAR = 6;
	const DISTORTION_PERSPECTIVE = 4;
	const DISTORTION_PERSPECTIVEPROJECTION = 5;
	const DISTORTION_SCALEROTATETRANSLATE = 3;
	const DISTORTION_POLYNOMIAL = 8;
	const DISTORTION_POLAR = 10;
	const DISTORTION_DEPOLAR = 11;
	const DISTORTION_BARREL = 14;
	const DISTORTION_SHEPARDS = 16;
	const DISTORTION_SENTINEL = 18;
	const DISTORTION_BARRELINVERSE = 15;
	const DISTORTION_BILINEARFORWARD = 6;
	const DISTORTION_BILINEARREVERSE = 7;
	const DISTORTION_RESIZE = 17;
	const DISTORTION_CYLINDER2PLANE = 12;
	const DISTORTION_PLANE2CYLINDER = 13;
	const LAYERMETHOD_MERGE = 13;
	const LAYERMETHOD_FLATTEN = 14;
	const LAYERMETHOD_MOSAIC = 15;
	const ALPHACHANNEL_ACTIVATE = 1;
	const ALPHACHANNEL_RESET = 7;
	const ALPHACHANNEL_SET = 8;
	const ALPHACHANNEL_UNDEFINED = 0;
	const ALPHACHANNEL_COPY = 3;
	const ALPHACHANNEL_DEACTIVATE = 4;
	const ALPHACHANNEL_EXTRACT = 5;
	const ALPHACHANNEL_OPAQUE = 6;
	const ALPHACHANNEL_SHAPE = 9;
	const ALPHACHANNEL_TRANSPARENT = 10;
	const SPARSECOLORMETHOD_UNDEFINED = 0;
	const SPARSECOLORMETHOD_BARYCENTRIC = 1;
	const SPARSECOLORMETHOD_BILINEAR = 7;
	const SPARSECOLORMETHOD_POLYNOMIAL = 8;
	const SPARSECOLORMETHOD_SPEPARDS = 16;
	const SPARSECOLORMETHOD_VORONOI = 18;
	const SPARSECOLORMETHOD_INVERSE = 19;
	const DITHERMETHOD_UNDEFINED = 0;
	const DITHERMETHOD_NO = 1;
	const DITHERMETHOD_RIEMERSMA = 2;
	const DITHERMETHOD_FLOYDSTEINBERG = 3;
	const FUNCTION_UNDEFINED = 0;
	const FUNCTION_POLYNOMIAL = 1;
	const FUNCTION_SINUSOID = 2;
	const ALPHACHANNEL_BACKGROUND = 2;
	const FUNCTION_ARCSIN = 3;
	const FUNCTION_ARCTAN = 4;
	const ALPHACHANNEL_FLATTEN = 11;
	const ALPHACHANNEL_REMOVE = 12;
	const STATISTIC_GRADIENT = 1;
	const STATISTIC_MAXIMUM = 2;
	const STATISTIC_MEAN = 3;
	const STATISTIC_MEDIAN = 4;
	const STATISTIC_MINIMUM = 5;
	const STATISTIC_MODE = 6;
	const STATISTIC_NONPEAK = 7;
	const STATISTIC_STANDARD_DEVIATION = 8;
	const MORPHOLOGY_CONVOLVE = 1;
	const MORPHOLOGY_CORRELATE = 2;
	const MORPHOLOGY_ERODE = 3;
	const MORPHOLOGY_DILATE = 4;
	const MORPHOLOGY_ERODE_INTENSITY = 5;
	const MORPHOLOGY_DILATE_INTENSITY = 6;
	const MORPHOLOGY_DISTANCE = 7;
	const MORPHOLOGY_OPEN = 8;
	const MORPHOLOGY_CLOSE = 9;
	const MORPHOLOGY_OPEN_INTENSITY = 10;
	const MORPHOLOGY_CLOSE_INTENSITY = 11;
	const MORPHOLOGY_SMOOTH = 12;
	const MORPHOLOGY_EDGE_IN = 13;
	const MORPHOLOGY_EDGE_OUT = 14;
	const MORPHOLOGY_EDGE = 15;
	const MORPHOLOGY_TOP_HAT = 16;
	const MORPHOLOGY_BOTTOM_HAT = 17;
	const MORPHOLOGY_HIT_AND_MISS = 18;
	const MORPHOLOGY_THINNING = 19;
	const MORPHOLOGY_THICKEN = 20;
	const MORPHOLOGY_VORONOI = 21;
	const MORPHOLOGY_ITERATIVE = 22;
	const KERNEL_UNITY = 1;
	const KERNEL_GAUSSIAN = 2;
	const KERNEL_DIFFERENCE_OF_GAUSSIANS = 3;
	const KERNEL_LAPLACIAN_OF_GAUSSIANS = 4;
	const KERNEL_BLUR = 5;
	const KERNEL_COMET = 6;
	const KERNEL_LAPLACIAN = 7;
	const KERNEL_SOBEL = 8;
	const KERNEL_FREI_CHEN = 9;
	const KERNEL_ROBERTS = 10;
	const KERNEL_PREWITT = 11;
	const KERNEL_COMPASS = 12;
	const KERNEL_KIRSCH = 13;
	const KERNEL_DIAMOND = 14;
	const KERNEL_SQUARE = 15;
	const KERNEL_RECTANGLE = 16;
	const KERNEL_OCTAGON = 17;
	const KERNEL_DISK = 18;
	const KERNEL_PLUS = 19;
	const KERNEL_CROSS = 20;
	const KERNEL_RING = 21;
	const KERNEL_PEAKS = 22;
	const KERNEL_EDGES = 23;
	const KERNEL_CORNERS = 24;
	const KERNEL_DIAGONALS = 25;
	const KERNEL_LINE_ENDS = 26;
	const KERNEL_LINE_JUNCTIONS = 27;
	const KERNEL_RIDGES = 28;
	const KERNEL_CONVEX_HULL = 29;
	const KERNEL_THIN_SE = 30;
	const KERNEL_SKELETON = 31;
	const KERNEL_CHEBYSHEV = 32;
	const KERNEL_MANHATTAN = 33;
	const KERNEL_OCTAGONAL = 34;
	const KERNEL_EUCLIDEAN = 35;
	const KERNEL_USER_DEFINED = 36;
	const KERNEL_BINOMIAL = 37;
	const DIRECTION_LEFT_TO_RIGHT = 2;
	const DIRECTION_RIGHT_TO_LEFT = 1;
	const NORMALIZE_KERNEL_NONE = 0;
	const NORMALIZE_KERNEL_VALUE = 8192;
	const NORMALIZE_KERNEL_CORRELATE = 65536;
	const NORMALIZE_KERNEL_PERCENT = 4096;


	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の繰り返し部分を削除して最適化する
	 * @link http://php.net/manual/ja/imagick.optimizeimagelayers.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function optimizeimagelayers(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 複数の画像の中で最大の境界範囲を返す
	 * @link http://php.net/manual/ja/imagick.compareimagelayers.php
	 * @param int $method <p>
	 * レイヤメソッド定数 のいずれか。
	 * </p>
	 * @return Imagick 成功した場合に <b>TRUE</b> を返します。
	 */
	public function compareimagelayers(int $method): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 手早く属性を取得する
	 * @link http://php.net/manual/ja/imagick.pingimageblob.php
	 * @param string $image <p>
	 * 画像を含む文字列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function pingimageblob(string $image): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の基本属性を手軽に取得する
	 * @link http://php.net/manual/ja/imagick.pingimagefile.php
	 * @param resource $filehandle <p>
	 * 開いている画像のファイルハンドル。
	 * </p>
	 * @param string $fileName [optional] <p>
	 * オプションで指定する、この画像のファイル名。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function pingimagefile($filehandle, string $fileName = null): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 垂直方向に反転させた画像を作成する
	 * @link http://php.net/manual/ja/imagick.transposeimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function transposeimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 水平方向に反転させた画像を作成する
	 * @link http://php.net/manual/ja/imagick.transverseimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function transverseimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の輪郭を削除する
	 * @link http://php.net/manual/ja/imagick.trimimage.php
	 * @param float $fuzz <p>
	 * デフォルトでは、対象の色は特定のピクセルの色とまったく同じでなければなりません。
	 * しかし、ふたつの色が微妙に異なることもよくあります。
	 * 画像の fuzz メンバは、どの程度の色を「同じ色」とみなすかを表します。
	 * このパラメータは、量の範囲の変化を表します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function trimimage(float $fuzz): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ウェーブフィルタを画像に適用する
	 * @link http://php.net/manual/ja/imagick.waveimage.php
	 * @param float $amplitude <p>
	 * 波の振幅。
	 * </p>
	 * @param float $length <p>
	 * 波長。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function waveimage(float $amplitude, float $length): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ビネットフィルタを画像に追加する
	 * @link http://php.net/manual/ja/imagick.vignetteimage.php
	 * @param float $blackPoint <p>
	 * 黒の点。
	 * </p>
	 * @param float $whitePoint <p>
	 * 白の点。
	 * </p>
	 * @param int $x <p>
	 * 楕円の X オフセット。
	 * </p>
	 * @param int $y <p>
	 * 楕円の Y オフセット。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function vignetteimage(float $blackPoint, float $whitePoint, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ある 1 色以外のすべての色のピクセルを削除する
	 * @link http://php.net/manual/ja/imagick.uniqueimagecolors.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function uniqueimagecolors(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像がマットチャネルを持っているかどうかを返す
	 * @link http://php.net/manual/ja/imagick.getimagematte.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getimagematte(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のマットチャネルを設定する
	 * @link http://php.net/manual/ja/imagick.setimagematte.php
	 * @param bool $matte <p>
	 * True にするとマットチャネルを有効にし、false の場合は無効にします。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagematte(bool $matte): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * データに依存する三角測量にもとづいて画像のサイズを変更する
	 * @link http://php.net/manual/ja/imagick.adaptiveresizeimage.php
	 * @param int $columns <p>
	 * 変更後の画像のカラム数。
	 * </p>
	 * @param int $rows <p>
	 * 変更後の画像の行数。
	 * </p>
	 * @param bool $bestfit [optional] <p>
	 * 画像の大きさをバウンディングボックスにあわせるかどうか。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function adaptiveresizeimage(int $columns, int $rows, bool $bestfit = false): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 鉛筆画をシミュレートする
	 * @link http://php.net/manual/ja/imagick.sketchimage.php
	 * @param float $radius <p>
	 * ガウス変換の半径 (ピクセル単位で中心のピクセルは数えない)。
	 * </p>
	 * @param float $sigma <p>
	 * ガウス変換の標準偏差 (ピクセル単位)。
	 * </p>
	 * @param float $angle <p>
	 * この角度で効果を適用します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function sketchimage(float $radius, float $sigma, float $angle): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 3D 効果を作成する
	 * @link http://php.net/manual/ja/imagick.shadeimage.php
	 * @param bool $gray <p>
	 * ゼロ以外の値で、各ピクセルに影をつけます。
	 * </p>
	 * @param float $azimuth <p>
	 * 光源の方向を定義します。
	 * </p>
	 * @param float $elevation <p>
	 * 光源の方向を定義します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function shadeimage(bool $gray, float $azimuth, float $elevation): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * サイズのオフセットを返す
	 * @link http://php.net/manual/ja/imagick.getsizeoffset.php
	 * @return int Imagick オブジェクトのサイズのオフセットを返します。
	 */
	public function getsizeoffset(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Imagick オブジェクトのサイズのオフセットを設定する
	 * @link http://php.net/manual/ja/imagick.setsizeoffset.php
	 * @param int $columns <p>
	 * 幅 (ピクセル単位)。
	 * </p>
	 * @param int $rows <p>
	 * 高さ (ピクセル単位)。
	 * </p>
	 * @param int $offset <p>
	 * 画像のオフセット。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setsizeoffset(int $columns, int $rows, int $offset): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * adaptive blur (順応性にじみ) フィルタを画像に追加する
	 * @link http://php.net/manual/ja/imagick.adaptiveblurimage.php
	 * @param float $radius <p>
	 * ガウス分布の半径。中心を含まないピクセル数。
	 * 0 を指定すると、半径を自動的に選択します。
	 * </p>
	 * @param float $sigma <p>
	 * ガウス分布の標準偏差 (ピクセル単位)。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのモードで有効なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数
	 * をビット演算子で組み合わせます。デフォルトは <b>Imagick::CHANNEL_DEFAULT</b> です。
	 * チャネル定数 の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function adaptiveblurimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * カラー画像のコントラストを強調する
	 * @link http://php.net/manual/ja/imagick.contraststretchimage.php
	 * @param float $black_point <p>
	 * 黒の点。
	 * </p>
	 * @param float $white_point <p>
	 * 白の点。
	 * </p>
	 * @param int $channel [optional] <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * デフォルトは <b>Imagick::CHANNEL_ALL</b> です。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function contraststretchimage(float $black_point, float $white_point, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 順応して画像をシャープにする
	 * @link http://php.net/manual/ja/imagick.adaptivesharpenimage.php
	 * @param float $radius <p>
	 * ガウス分布の半径。中心を含まないピクセル数。
	 * 0 を使用すると自動的に選択します。
	 * </p>
	 * @param float $sigma <p>
	 * ガウス分布の標準偏差 (ピクセル単位)。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのモードで有効なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数
	 * をビット演算子で組み合わせます。デフォルトは <b>Imagick::CHANNEL_DEFAULT</b> です。
	 * チャネル定数 の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function adaptivesharpenimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * コントラストの高い 2 色の画像を作成する
	 * @link http://php.net/manual/ja/imagick.randomthresholdimage.php
	 * @param float $low <p>
	 * 低い点。
	 * </p>
	 * @param float $high <p>
	 * 高い点。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのモードに対応した任意のチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数をビット演算子で連結します。
	 * この チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function randomthresholdimage(float $low, float $high, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * @param $xRounding
	 * @param $yRounding
	 * @param $strokeWidth [optional]
	 * @param $displace [optional]
	 * @param $sizeCorrection [optional]
	 */
	public function roundcornersimage($xRounding, $yRounding, $strokeWidth, $displace, $sizeCorrection) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の角を丸める
	 * @link http://php.net/manual/ja/imagick.roundcorners.php
	 * @param float $x_rounding <p>
	 * x 方向の丸め。
	 * </p>
	 * @param float $y_rounding <p>
	 * y 方向の丸め。
	 * </p>
	 * @param float $stroke_width [optional] <p>
	 * 線幅。
	 * </p>
	 * @param float $displace [optional] <p>
	 * image displace
	 * </p>
	 * @param float $size_correction [optional] <p>
	 * サイズ補正。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function roundcorners(float $x_rounding, float $y_rounding, float $stroke_width = 10, float $displace = 5, float $size_correction = -6): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * イテレータの位置を設定する
	 * @link http://php.net/manual/ja/imagick.setiteratorindex.php
	 * @param int $index <p>
	 * イテレータを設定する場所。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setiteratorindex(int $index): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在アクティブな画像のインデックスを取得する
	 * @link http://php.net/manual/ja/imagick.getiteratorindex.php
	 * @return int スタック内の画像のインデックスを含む整数値を返します。
	 */
	public function getiteratorindex(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 切り取るサイズと画像のジオメトリを設定する便利なメソッド
	 * @link http://php.net/manual/ja/imagick.transformimage.php
	 * @param string $crop <p>
	 * 切り取りジオメトリ文字列。
	 * このジオメトリで画像の一部の範囲を指定し、その部分を切り取ります。
	 * </p>
	 * @param string $geometry <p>
	 * 画像ジオメトリ文字列。このジオメトリで最終的な画像のサイズを指定します。
	 * </p>
	 * @return Imagick 変換語の画像を含む Imagick オブジェクトを返します。
	 */
	public function transformimage(string $crop, string $geometry): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の不透明度を設定する
	 * @link http://php.net/manual/ja/imagick.setimageopacity.php
	 * @param float $opacity <p>
	 * 透明度。1.0 が完全な不透明で、0.0 が完全な透明です。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageopacity(float $opacity): bool {}

	/**
	 * (PECL imagick 2.2.2)<br/>
	 * 配列ディザリングを行う
	 * @link http://php.net/manual/ja/imagick.orderedposterizeimage.php
	 * @param string $threshold_map <p>
	 * 使用するディザリング閾値マップを含む文字列。
	 * </p>
	 * @param int $channel [optional] <p>
	 * チャネルモードに応じたチャネル定数を指定します。
	 * 複数のチャネルに適用するには、定数をビット演算子で組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function orderedposterizeimage(string $threshold_map, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ポラロイド写真をシミュレートする
	 * @link http://php.net/manual/ja/imagick.polaroidimage.php
	 * @param ImagickDraw $properties <p>
	 * ポラロイドプロパティ。
	 * </p>
	 * @param float $angle <p>
	 * ポラロイド角度。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function polaroidimage(ImagickDraw $properties, float $angle): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定した名前の画像のプロパティを返す
	 * @link http://php.net/manual/ja/imagick.getimageproperty.php
	 * @param string $name <p>
	 * プロパティの名前 (たとえば Exif:DateTime)。
	 * </p>
	 * @return string 画像のプロパティを含む文字列を返します。
	 * 指定した名前のプロパティが存在しない場合に false を返します。
	 */
	public function getimageproperty(string $name): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のプロパティを設定する
	 * @link http://php.net/manual/ja/imagick.setimageproperty.php
	 * @param string $name
	 * @param string $value
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageproperty(string $name, string $value): bool {}

	/**
	 * @param $name
	 */
	public function deleteimageproperty($name) {}

	/**
	 * @param $embedText
	 */
	public function identifyformat($embedText) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のピクセル補間方式を設定する
	 * @link http://php.net/manual/ja/imagick.setimageinterpolatemethod.php
	 * @param int $method <p>
	 * <b>Imagick::INTERPOLATE_*</b> 定数のいずれか。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageinterpolatemethod(int $method): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の補間方式を返す
	 * @link http://php.net/manual/ja/imagick.getimageinterpolatemethod.php
	 * @return int 成功した場合に補間方式を返します。
	 */
	public function getimageinterpolatemethod(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の輝度を引き伸ばして飽和させる
	 * @link http://php.net/manual/ja/imagick.linearstretchimage.php
	 * @param float $blackPoint <p>
	 * 画像の黒の点。
	 * </p>
	 * @param float $whitePoint <p>
	 * 画像の白の点。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function linearstretchimage(float $blackPoint, float $whitePoint): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の長さをバイト数で取得する
	 * @link http://php.net/manual/ja/imagick.getimagelength.php
	 * @return int 現在の画像のサイズを整数値で返します。
	 */
	public function getimagelength(): int {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像のサイズを設定する
	 * @link http://php.net/manual/ja/imagick.extentimage.php
	 * @param int $width <p>
	 * 新しい幅。
	 * </p>
	 * @param int $height <p>
	 * 新しい高さ。
	 * </p>
	 * @param int $x <p>
	 * 新しいサイズの X 座標。
	 * </p>
	 * @param int $y <p>
	 * 新しいサイズの Y 座標。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function extentimage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の方向を取得する
	 * @link http://php.net/manual/ja/imagick.getimageorientation.php
	 * @return int 成功した場合に整数値を返します。
	 */
	public function getimageorientation(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の方向を設定する
	 * @link http://php.net/manual/ja/imagick.setimageorientation.php
	 * @param int $orientation <p>
	 * 方向定数 のいずれか。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageorientation(int $orientation): bool {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * 色にマッチするピクセルを変更する
	 * @link http://php.net/manual/ja/imagick.paintfloodfillimage.php
	 * @param mixed $fill <p>
	 * 塗りつぶし色を表す ImagickPixel オブジェクトあるいは文字列。
	 * </p>
	 * @param float $fuzz <p>
	 * fuzz の量。たとえば fuzz を 10 にすると、
	 * 強度 100 の赤と 102 の赤は同じ色とみなします。
	 * </p>
	 * @param mixed $bordercolor <p>
	 * 境界色を表す ImagickPixel オブジェクトあるいは文字列。
	 * </p>
	 * @param int $x <p>
	 * floodfill の開始位置の X 座標。
	 * </p>
	 * @param int $y <p>
	 * floodfill の開始位置の Y 座標。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのモードで有効なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数
	 * をビット演算子で組み合わせます。デフォルトは <b>Imagick::CHANNEL_DEFAULT</b> です。
	 * チャネル定数 の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function paintfloodfillimage($fill, float $fuzz, $bordercolor, int $x, int $y, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の色を置き換える
	 * @link http://php.net/manual/ja/imagick.clutimage.php
	 * @param Imagick $lookup_table <p>
	 * 色ルックアップテーブルを含む Imagick オブジェクト。
	 * </p>
	 * @param float $channel [optional] <p>
	 * チャネルタイプ 定数。
	 * 省略した場合はデフォルトチャネルが対象となります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function clutimage(Imagick $lookup_table, float $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のプロパティを返す
	 * @link http://php.net/manual/ja/imagick.getimageproperties.php
	 * @param string $pattern [optional] <p>
	 * プロパティ名のパターン。
	 * </p>
	 * @param bool $include_values [optional] <p>
	 * プロパティ名のみを返すかどうか。<b>FALSE</b> の場合は、プロファイル名のみを返します。
	 * </p>
	 * @return array 画像のプロパティあるいはプロパティ名を含む連想配列を返します。
	 */
	public function getimageproperties(string $pattern = "*", bool $include_values = true): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像プロファイルを返す
	 * @link http://php.net/manual/ja/imagick.getimageprofiles.php
	 * @param string $pattern [optional] <p>
	 * プロファイル名のパターン。
	 * </p>
	 * @param bool $include_values [optional] <p>
	 * プロファイル名のみを返すかどうか。<b>FALSE</b> の場合は、プロファイル名のみを返します。
	 * </p>
	 * @return array 画像のプロファイルあるいはプロファイル名を含む連想配列を返します。
	 */
	public function getimageprofiles(string $pattern = "*", bool $include_values = true): array {}

	/**
	 * (PECL imagick 2.0.1)<br/>
	 * さまざまな方式で画像を歪める
	 * @link http://php.net/manual/ja/imagick.distortimage.php
	 * @param int $method <p>
	 * 画像の歪め方式。
	 * 歪め定数
	 * を参照ください。
	 * </p>
	 * @param array $arguments <p>
	 * 歪め方式の引数。
	 * </p>
	 * @param bool $bestfit <p>
	 * 元画像のサイズを変更する。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function distortimage(int $method, array $arguments, bool $bestfit): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像をファイルハンドルに書き出す
	 * @link http://php.net/manual/ja/imagick.writeimagefile.php
	 * @param resource $filehandle <p>
	 * 画像を書き出すファイルハンドル。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function writeimagefile($filehandle): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * フレームをファイルハンドルに書き出す
	 * @link http://php.net/manual/ja/imagick.writeimagesfile.php
	 * @param resource $filehandle <p>
	 * 画像を書き出すファイルハンドル。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function writeimagesfile($filehandle): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像のページをリセットする
	 * @link http://php.net/manual/ja/imagick.resetimagepage.php
	 * @param string $page <p>
	 * ページ定義。たとえば 7168x5147+0+0 のようになります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function resetimagepage(string $page): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像のクリップマスクを設定する
	 * @link http://php.net/manual/ja/imagick.setimageclipmask.php
	 * @param Imagick $clip_mask <p>
	 * クリップマスクを含む Imagick オブジェクト。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageclipmask(Imagick $clip_mask): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像のクリップマスクを取得する
	 * @link http://php.net/manual/ja/imagick.getimageclipmask.php
	 * @return Imagick 画像のクリップマスクを含む Imagick オブジェクトを返します。
	 */
	public function getimageclipmask(): Imagick {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像を動かす
	 * @link http://php.net/manual/ja/imagick.animateimages.php
	 * @param string $x_server <p>
	 * X サーバーのアドレス。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function animateimages(string $x_server): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像の色を変更する
	 * @link http://php.net/manual/ja/imagick.recolorimage.php
	 * @param array $matrix <p>
	 * 色の値を含む行列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function recolorimage(array $matrix): bool {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * フォントを設定する
	 * @link http://php.net/manual/ja/imagick.setfont.php
	 * @param string $font <p>
	 * フォント名あるいはファイル名。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setfont(string $font): bool {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * フォントを取得する
	 * @link http://php.net/manual/ja/imagick.getfont.php
	 * @return string フォント名を表す文字列を返します。フォントが設定されていない場合は <b>FALSE</b> を返します。
	 */
	public function getfont(): string {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * ポイントサイズを設定する
	 * @link http://php.net/manual/ja/imagick.setpointsize.php
	 * @param float $point_size <p>
	 * ポイントサイズ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setpointsize(float $point_size): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * ポイントサイズを取得する
	 * @link http://php.net/manual/ja/imagick.getpointsize.php
	 * @return float ポイントサイズを表す float 型の値を返します。
	 */
	public function getpointsize(): float {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * 画像のレイヤーをマージする
	 * @link http://php.net/manual/ja/imagick.mergeimagelayers.php
	 * @param int $layer_method <p>
	 * <b>Imagick::LAYERMETHOD_*</b> 定数のいずれか。
	 * </p>
	 * @return Imagick マージした画像を含む Imagick オブジェクトを返します。
	 */
	public function mergeimagelayers(int $layer_method): Imagick {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像のアルファチャネルを設定する
	 * @link http://php.net/manual/ja/imagick.setimagealphachannel.php
	 * @param int $mode <p>
	 * <b>Imagick::ALPHACHANNEL_*</b> 定数のいずれか。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagealphachannel(int $mode): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 対象にマッチする任意のピクセルの値を変更する
	 * @link http://php.net/manual/ja/imagick.floodfillpaintimage.php
	 * @param mixed $fill <p>
	 * 塗りつぶし色を表す ImagickPixel オブジェクトあるいは文字列。
	 * </p>
	 * @param float $fuzz <p>
	 * あいまいさをあらわす量。たとえば、これを 10 に設定すると、
	 * 赤色の値が 100 の色と 102 の色は同じものとみなされます。
	 * </p>
	 * @param mixed $target <p>
	 * 対象の色を表す ImagickPixel オブジェクトあるいは文字列。
	 * </p>
	 * @param int $x <p>
	 * 開始位置の X 座標。
	 * </p>
	 * @param int $y <p>
	 * 開始位置の Y 座標。
	 * </p>
	 * @param bool $invert <p>
	 * <b>TRUE</b> の場合は、対象の色にマッチしない任意のピクセルをペイントします。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのモードで有効なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数
	 * をビット演算子で組み合わせます。デフォルトは <b>Imagick::CHANNEL_DEFAULT</b> です。
	 * チャネル定数 の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function floodfillpaintimage($fill, float $fuzz, $target, int $x, int $y, bool $invert, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 対象にマッチする任意のピクセルの色を変更する
	 * @link http://php.net/manual/ja/imagick.opaquepaintimage.php
	 * @param mixed $target <p>
	 * 変更したい色をあらわす ImagickPixel オブジェクトあるいは文字列。
	 * </p>
	 * @param mixed $fill <p>
	 * 置き換える色。
	 * </p>
	 * @param float $fuzz <p>
	 * あいまいさをあらわす量。たとえば、これを 10 に設定すると、
	 * 赤色の値が 100 の色と 102 の色は同じものとみなされます。
	 * </p>
	 * @param bool $invert <p>
	 * <b>TRUE</b> の場合は、対象の色にマッチしないピクセルを変更します。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのモードで有効なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数
	 * をビット演算子で組み合わせます。デフォルトは <b>Imagick::CHANNEL_DEFAULT</b> です。
	 * チャネル定数 の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function opaquepaintimage($target, $fill, float $fuzz, bool $invert, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * ピクセルを透過させる
	 * @link http://php.net/manual/ja/imagick.transparentpaintimage.php
	 * @param mixed $target <p>
	 * 対象となる色。
	 * </p>
	 * @param float $alpha <p>
	 * 透明度。1.0 は完全な不透明で 0.0 が完全な透明をあらわします。
	 * </p>
	 * @param float $fuzz <p>
	 * あいまいさをあらわす量。たとえば、これを 10 に設定すると、
	 * 赤色の値が 100 の色と 102 の色は同じものとみなされます。
	 * </p>
	 * @param bool $invert <p>
	 * <b>TRUE</b> の場合は、対象の色にマッチしないピクセルを変更します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function transparentpaintimage($target, float $alpha, float $fuzz, bool $invert): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像を動かす
	 * @link http://php.net/manual/ja/imagick.liquidrescaleimage.php
	 * @param int $width <p>
	 * 変更後のサイズの幅。
	 * </p>
	 * @param int $height <p>
	 * 変更後のサイズの高さ。
	 * </p>
	 * @param float $delta_x <p>
	 * seam が x 軸をどれだけ横切るか。
	 * 0 を渡すと seam が直線になります。
	 * </p>
	 * @param float $rigidity <p>
	 * 直線でない seam のバイアスを導入します。このパラメータは通常は 0 です。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function liquidrescaleimage(int $width, int $height, float $delta_x, float $rigidity): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像を暗号化する
	 * @link http://php.net/manual/ja/imagick.encipherimage.php
	 * @param string $passphrase <p>
	 * パスフレーズ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function encipherimage(string $passphrase): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像を復号する
	 * @link http://php.net/manual/ja/imagick.decipherimage.php
	 * @param string $passphrase <p>
	 * パスフレーズ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function decipherimage(string $passphrase): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * gravity を設定する
	 * @link http://php.net/manual/ja/imagick.setgravity.php
	 * @param int $gravity <p>
	 * gravity プロパティ。
	 * gravity 定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setgravity(int $gravity): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * gravity を取得する
	 * @link http://php.net/manual/ja/imagick.getgravity.php
	 * @return int gravity プロパティを返します。
	 * gravity 定数
	 * の一覧を参照ください。
	 */
	public function getgravity(): int {}

	/**
	 * (PECL imagick 2.2.1)<br/>
	 * チャネルの範囲を取得する
	 * @link http://php.net/manual/ja/imagick.getimagechannelrange.php
	 * @param int $channel <p>
	 * そのモードで有効なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数
	 * をビット演算子で組み合わせます。デフォルトは <b>Imagick::CHANNEL_DEFAULT</b> です。
	 * チャネル定数 の一覧を参照ください。
	 * </p>
	 * @return array チャネルの minima および maxima の値を含む配列を返します。
	 */
	public function getimagechannelrange(int $channel): array {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像のアルファチャネルを取得する
	 * @link http://php.net/manual/ja/imagick.getimagealphachannel.php
	 * @return int 現在のアルファチャネル値を表す定数を返します。
	 * アルファチャネル定数
	 * の一覧を参照ください。
	 */
	public function getimagealphachannel(): int {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * チャネルの歪みを取得する
	 * @link http://php.net/manual/ja/imagick.getimagechanneldistortions.php
	 * @param Imagick $reference <p>
	 * 比較する画像を含む Imagick オブジェクト。
	 * </p>
	 * @param int $metric <p>
	 * メトリック型定数
	 * の一覧を参照ください。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのモードで有効なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数
	 * をビット演算子で組み合わせます。デフォルトは <b>Imagick::CHANNEL_DEFAULT</b> です。
	 * チャネル定数 の一覧を参照ください。
	 * </p>
	 * @return float チャネルの歪みを表す double 型の値を返します。
	 */
	public function getimagechanneldistortions(Imagick $reference, int $metric, int $channel = Imagick::CHANNEL_DEFAULT): float {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像の gravity を設定する
	 * @link http://php.net/manual/ja/imagick.setimagegravity.php
	 * @param int $gravity <p>
	 * gravity プロパティ。
	 * gravity 定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setimagegravity(int $gravity): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像の gravity を取得する
	 * @link http://php.net/manual/ja/imagick.getimagegravity.php
	 * @return int 画像の property プロパティを返します。
	 * gravity 定数
	 * の一覧を参照ください。
	 */
	public function getimagegravity(): int {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像のピクセルをインポートする
	 * @link http://php.net/manual/ja/imagick.importimagepixels.php
	 * @param int $x <p>
	 * 画像の x 位置。
	 * </p>
	 * @param int $y <p>
	 * 画像の y 位置。
	 * </p>
	 * @param int $width <p>
	 * 画像の幅。
	 * </p>
	 * @param int $height <p>
	 * 画像の高さ。
	 * </p>
	 * @param string $map <p>
	 * ピクセルの並び順を表す文字列。たとえば RGB のようになります。以下の文字を任意の順で組み合わせることができます。
	 * R = red, G = green, B = blue, A = alpha (0 is transparent),
	 * O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad.
	 * </p>
	 * @param int $storage <p>
	 * ピクセルの格納方式。
	 * pixel 定数 の一覧を参照ください。
	 * </p>
	 * @param array $pixels <p>
	 * ピクセルの配列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function importimagepixels(int $x, int $y, int $width, int $height, string $map, int $storage, array $pixels): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 傾きを除去する
	 * @link http://php.net/manual/ja/imagick.deskewimage.php
	 * @param float $threshold <p>
	 * 傾き除去の閾値。
	 * </p>
	 * @return bool
	 */
	public function deskewimage(float $threshold): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像を分割する
	 * @link http://php.net/manual/ja/imagick.segmentimage.php
	 * @param int $COLORSPACE <p>
	 * COLORSPACE 定数 のいずれか。
	 * </p>
	 * @param float $cluster_threshold <p>
	 * 有効と見なされるために必要な、
	 * hexedra 内の最小ピクセル数を表すパーセンテージ。
	 * </p>
	 * @param float $smooth_threshold <p>
	 * ヒストグラムからノイズを除去する。
	 * </p>
	 * @param bool $verbose [optional] <p>
	 * 識別した区分についての詳細情報を出力するか否か。
	 * </p>
	 * @return bool
	 */
	public function segmentimage(int $COLORSPACE, float $cluster_threshold, float $smooth_threshold, bool $verbose = false): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 色を補間する
	 * @link http://php.net/manual/ja/imagick.sparsecolorimage.php
	 * @param int $SPARSE_METHOD <p>
	 * sparse method 定数 の一覧を参照ください。
	 * </p>
	 * @param array $arguments <p>
	 * 座標を含む配列。配列の書式は array(1,1, 2,45)
	 * のようになります。
	 * </p>
	 * @param int $channel [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function sparsecolorimage(int $SPARSE_METHOD, array $arguments, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像の色を再配置する
	 * @link http://php.net/manual/ja/imagick.remapimage.php
	 * @param Imagick $replacement <p>
	 * 置き換える色を含む Imagick オブジェクト。
	 * </p>
	 * @param int $DITHER <p>
	 * ディザメソッド定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function remapimage(Imagick $replacement, int $DITHER): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像の生のピクセルをエクスポートする
	 * @link http://php.net/manual/ja/imagick.exportimagepixels.php
	 * @param int $x <p>
	 * エクスポートする範囲の X 座標。
	 * </p>
	 * @param int $y <p>
	 * エクスポートする範囲の Y 座標。
	 * </p>
	 * @param int $width <p>
	 * エクスポートする範囲の幅。
	 * </p>
	 * @param int $height <p>
	 * エクスポートする範囲の高さ。
	 * </p>
	 * @param string $map <p>
	 * エクスポートするピクセルの順序。"RGB" など。
	 * map で使える文字は R, G, B, A, O, C, Y, M, K, I および P です。
	 * </p>
	 * @param int $STORAGE <p>
	 * ピクセル型定数 を参照ください。
	 * </p>
	 * @return array ピクセルの値を含む配列を返します。
	 */
	public function exportimagepixels(int $x, int $y, int $width, int $height, string $map, int $STORAGE): array {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * getImageChannelKurtosis
	 * @link http://php.net/manual/ja/imagick.getimagechannelkurtosis.php
	 * @param int $channel [optional] <p>
	 * そのモードで有効なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数
	 * をビット演算子で組み合わせます。デフォルトは <b>Imagick::CHANNEL_DEFAULT</b> です。
	 * チャネル定数 の一覧を参照ください。
	 * </p>
	 * @return array kurtosis と skewness
	 * を要素に持つ配列を返します。
	 */
	public function getimagechannelkurtosis(int $channel = Imagick::CHANNEL_DEFAULT): array {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像に関数を適用する
	 * @link http://php.net/manual/ja/imagick.functionimage.php
	 * @param int $function <p>
	 * 関数定数 の一覧を参照ください。
	 * </p>
	 * @param array $arguments <p>
	 * この関数に渡す引数の配列。
	 * </p>
	 * @param int $channel [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function functionimage(int $function, array $arguments, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * @param $COLORSPACE
	 */
	public function transformimagecolorspace($COLORSPACE) {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像内の色を置換する
	 * @link http://php.net/manual/ja/imagick.haldclutimage.php
	 * @param Imagick $clut <p>
	 * Hald ルックアップ画像を含む Imagick オブジェクト。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのモードで有効なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数
	 * をビット演算子で組み合わせます。デフォルトは <b>Imagick::CHANNEL_DEFAULT</b> です。
	 * チャネル定数 の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function haldclutimage(Imagick $clut, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * @param $CHANNEL [optional]
	 */
	public function autolevelimage($CHANNEL) {}

	/**
	 * @param $factor [optional]
	 */
	public function blueshiftimage($factor) {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像のアーチファクトを取得する
	 * @link http://php.net/manual/ja/imagick.getimageartifact.php
	 * @param string $artifact <p>
	 * アーチファクトの名前。
	 * </p>
	 * @return string 成功した場合にアーチファクトの値を返します。
	 */
	public function getimageartifact(string $artifact): string {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像のアーチファクトを設定する
	 * @link http://php.net/manual/ja/imagick.setimageartifact.php
	 * @param string $artifact <p>
	 * アーチファクトの名前。
	 * </p>
	 * @param string $value <p>
	 * アーチファクトの値。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageartifact(string $artifact, string $value): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像のアーチファクトを削除する
	 * @link http://php.net/manual/ja/imagick.deleteimageartifact.php
	 * @param string $artifact <p>
	 * 削除したいアーチファクトの名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function deleteimageartifact(string $artifact): bool {}

	/**
	 * (PECL imagick 0.9.10-0.9.9)<br/>
	 * 色空間を取得する
	 * @link http://php.net/manual/ja/imagick.getcolorspace.php
	 * @return int 整数値を返します。この値を
	 * COLORSPACE 定数 と比較することができます。
	 */
	public function getcolorspace(): int {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 色空間を設定する
	 * @link http://php.net/manual/ja/imagick.setcolorspace.php
	 * @param int $COLORSPACE <p>
	 * COLORSPACE 定数
	 * のひとつ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setcolorspace(int $COLORSPACE): bool {}

	/**
	 * @param $CHANNEL [optional]
	 */
	public function clampimage($CHANNEL) {}

	/**
	 * @param $stack
	 * @param $offset
	 */
	public function smushimages($stack, $offset) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Imagick のコンストラクタ
	 * @link http://php.net/manual/ja/imagick.construct.php
	 * @param mixed $files <p>
	 * 読み込みたい画像へのパス、あるいは複数のパスの配列。
	 * パスのファイル名にはワイルドカードを含めることができ、
	 * また URL を指定することもできます。
	 * </p>
	 */
	public function __construct($files) {}

	public function __tostring() {}

	/**
	 * @param $mode [optional]
	 */
	public function count($mode) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * MagickPixelIterator を返す
	 * @link http://php.net/manual/ja/imagick.getpixeliterator.php
	 * @return ImagickPixelIterator 成功した場合に ImagickPixelIterator を返します。
	 */
	public function getpixeliterator(): ImagickPixelIterator {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像セクションの ImagickPixelIterator を取得する
	 * @link http://php.net/manual/ja/imagick.getpixelregioniterator.php
	 * @param int $x <p>
	 * 範囲の x 座標。
	 * </p>
	 * @param int $y <p>
	 * 範囲の y 座標。
	 * </p>
	 * @param int $columns <p>
	 * 範囲の幅。
	 * </p>
	 * @param int $rows <p>
	 * 範囲の高さ。
	 * </p>
	 * @return ImagickPixelIterator 画像セクションの ImagickPixelIterator を返します。
	 */
	public function getpixelregioniterator(int $x, int $y, int $columns, int $rows): ImagickPixelIterator {}

	/**
	 * (PECL imagick 0.9.0-0.9.9)<br/>
	 * ファイルから画像を読み込む
	 * @link http://php.net/manual/ja/imagick.readimage.php
	 * @param string $filename
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function readimage(string $filename): bool {}

	/**
	 * @param $filenames
	 */
	public function readimages($filenames) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * バイナリ文字列から画像を読み込む
	 * @link http://php.net/manual/ja/imagick.readimageblob.php
	 * @param string $image
	 * @param string $filename [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function readimageblob(string $image, string $filename = null): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 特定の画像のフォーマットを設定する
	 * @link http://php.net/manual/ja/imagick.setimageformat.php
	 * @param string $format <p>
	 * 画像フォーマットを表す文字列。対応するフォーマットは、
	 * インストールされている ImageMagick に依存します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageformat(string $format): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のサイズを変更する
	 * @link http://php.net/manual/ja/imagick.scaleimage.php
	 * @param int $cols
	 * @param int $rows
	 * @param bool $bestfit [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function scaleimage(int $cols, int $rows, bool $bestfit = false): bool {}

	/**
	 * (PECL imagick 0.9.0-0.9.9)<br/>
	 * 指定した名前で画像を書き込む
	 * @link http://php.net/manual/ja/imagick.writeimage.php
	 * @param string $filename [optional] <p>
	 * 画像を書き出すファイル名。ファイルの拡張子で画像形式が決まります。
	 * "jpg:test.png" のようにプレフィックスをつけると、拡張子が何であっても特定の形式で保存できます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function writeimage(string $filename = NULL): bool {}

	/**
	 * (PECL imagick 0.9.0-0.9.9)<br/>
	 * 画像あるいは画像シーケンスを書き込む
	 * @link http://php.net/manual/ja/imagick.writeimages.php
	 * @param string $filename
	 * @param bool $adjoin
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function writeimages(string $filename, bool $adjoin): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * blur (にじみ) フィルタを画像に追加する
	 * @link http://php.net/manual/ja/imagick.blurimage.php
	 * @param float $radius <p>
	 * にじみの半径。
	 * </p>
	 * @param float $sigma <p>
	 * 標準偏差。
	 * </p>
	 * @param int $channel [optional] <p>
	 * チャネル 定数。
	 * 省略した場合は全チャネルが対象となります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function blurimage(float $radius, float $sigma, int $channel = null): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のサイズを変更する
	 * @link http://php.net/manual/ja/imagick.thumbnailimage.php
	 * @param int $columns <p>
	 * 画像の幅。
	 * </p>
	 * @param int $rows <p>
	 * 画像の高さ。
	 * </p>
	 * @param bool $bestfit [optional] <p>
	 * 最大値を強制的に使用するかどうか。
	 * </p>
	 * @param bool $fill [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function thumbnailimage(int $columns, int $rows, bool $bestfit = false, bool $fill = false): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 切り取ってサムネイルを作成する
	 * @link http://php.net/manual/ja/imagick.cropthumbnailimage.php
	 * @param int $width <p>
	 * サムネイルの幅。
	 * </p>
	 * @param int $height <p>
	 * サムネイルの高さ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function cropthumbnailimage(int $width, int $height): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * シーケンス内の特定の画像のファイル名を返す
	 * @link http://php.net/manual/ja/imagick.getimagefilename.php
	 * @return string 画像のファイル名を文字列で返します。
	 */
	public function getimagefilename(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 特定の画像のファイル名を設定する
	 * @link http://php.net/manual/ja/imagick.setimagefilename.php
	 * @param string $filename
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagefilename(string $filename): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * シーケンス内の特定の画像のフォーマットを返す
	 * @link http://php.net/manual/ja/imagick.getimageformat.php
	 * @return string 成功した場合は画像のフォーマットを文字列で返します。
	 */
	public function getimageformat(): string {}

	public function getimagemimetype() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像リストから画像を削除する
	 * @link http://php.net/manual/ja/imagick.removeimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function removeimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Imagick オブジェクトを破棄する
	 * @link http://php.net/manual/ja/imagick.destroy.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function destroy(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Imagick オブジェクトに関連付けられたすべてのリソースをクリアする
	 * @link http://php.net/manual/ja/imagick.clear.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function clear(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の長さをバイト数で返す
	 * @link http://php.net/manual/ja/imagick.getimagesize.php
	 * @return int 現在の画像のサイズをバイト数で返します。
	 */
	public function getimagesize(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像シーケンスを blob で返す
	 * @link http://php.net/manual/ja/imagick.getimageblob.php
	 * @return string 画像を含む文字列を返します。
	 */
	public function getimageblob(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * すべての画像シーケンスを blob で返す
	 * @link http://php.net/manual/ja/imagick.getimagesblob.php
	 * @return string 画像を文字列で返します。失敗した場合は
	 * ImagickException をスローします。
	 */
	public function getimagesblob(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Imagick イテレータを最初の画像に設定する
	 * @link http://php.net/manual/ja/imagick.setfirstiterator.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setfirstiterator(): bool {}

	/**
	 * (PECL imagick 2.0.1)<br/>
	 * Imagick イテレータを最後の画像に設定する
	 * @link http://php.net/manual/ja/imagick.setlastiterator.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setlastiterator(): bool {}

	public function resetiterator() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクト内の前の画像に移動する
	 * @link http://php.net/manual/ja/imagick.previousimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function previousimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 次の画像に移動する
	 * @link http://php.net/manual/ja/imagick.nextimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function nextimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトが前の画像を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/imagick.haspreviousimage.php
	 * @return bool リスト内で逆方向にひとつ進んだときにまだオブジェクトが画像を保持していれば
	 * <b>TRUE</b>、していなければ <b>FALSE</b> を返します。
	 */
	public function haspreviousimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトが次の画像を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/imagick.hasnextimage.php
	 * @return bool リスト内でひとつ先に進んだときにまだオブジェクトが画像を保持していれば
	 * <b>TRUE</b>、していなければ <b>FALSE</b> を返します。
	 */
	public function hasnextimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * イテレータの位置を設定する
	 * @link http://php.net/manual/ja/imagick.setimageindex.php
	 * @param int $index <p>
	 * イテレータを設定する位置。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageindex(int $index): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在アクティブな画像のインデックスを取得する
	 * @link http://php.net/manual/ja/imagick.getimageindex.php
	 * @return int スタック内の画像のインデックスを表す整数値を返します。
	 */
	public function getimageindex(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * コメントを画像に追加する
	 * @link http://php.net/manual/ja/imagick.commentimage.php
	 * @param string $comment <p>
	 * 追加するコメント。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function commentimage(string $comment): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の一部を抽出する
	 * @link http://php.net/manual/ja/imagick.cropimage.php
	 * @param int $width <p>
	 * 抽出する幅。
	 * </p>
	 * @param int $height <p>
	 * 抽出する高さ。
	 * </p>
	 * @param int $x <p>
	 * 抽出する領域の左上の X 座標。
	 * </p>
	 * @param int $y <p>
	 * 抽出する領域の左上の Y 座標。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function cropimage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ラベルを画像に追加する
	 * @link http://php.net/manual/ja/imagick.labelimage.php
	 * @param string $label <p>
	 * 追加するラベル。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function labelimage(string $label): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 幅と高さを連想配列で取得する
	 * @link http://php.net/manual/ja/imagick.getimagegeometry.php
	 * @return array 画像の幅と高さを表す配列を返します。
	 */
	public function getimagegeometry(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在の画像上の ImagickDraw オブジェクトをレンダリングする
	 * @link http://php.net/manual/ja/imagick.drawimage.php
	 * @param ImagickDraw $draw <p>
	 * 画像をレンダリングする描画操作。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function drawimage(ImagickDraw $draw): bool {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 画像の圧縮品質を設定する
	 * @link http://php.net/manual/ja/imagick.setimagecompressionquality.php
	 * @param int $quality <p>
	 * 画像の圧縮品質を表す整数値。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagecompressionquality(int $quality): bool {}

	/**
	 * (PECL imagick 2.2.2)<br/>
	 * 現在の画像の圧縮品質を取得する
	 * @link http://php.net/manual/ja/imagick.getimagecompressionquality.php
	 * @return int 画像の圧縮品質を表す整数値を返します。
	 */
	public function getimagecompressionquality(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の圧縮を設定する
	 * @link http://php.net/manual/ja/imagick.setimagecompression.php
	 * @param int $compression <p>
	 * <b>COMPRESSION</b> 定数のいずれか。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagecompression(int $compression): bool {}

	/**
	 * (PECL imagick 2.2.2)<br/>
	 * 現在の画像の圧縮形式を取得する
	 * @link http://php.net/manual/ja/imagick.getimagecompression.php
	 * @return int 圧縮形式を表す定数を返します。
	 */
	public function getimagecompression(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像にテキストによる注記を加える
	 * @link http://php.net/manual/ja/imagick.annotateimage.php
	 * @param ImagickDraw $draw_settings <p>
	 * テキスト描画設定を含む ImagickDraw オブジェクト。
	 * </p>
	 * @param float $x <p>
	 * テキストの左端の水平オフセットをあらわすピクセル数。
	 * </p>
	 * @param float $y <p>
	 * テキストのベースラインの垂直オフセットをあらわすピクセル数。
	 * </p>
	 * @param float $angle <p>
	 * テキストを書き出す角度。
	 * </p>
	 * @param string $text <p>
	 * 描画するテキスト。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function annotateimage(ImagickDraw $draw_settings, float $x, float $y, float $angle, string $text): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ある画像を別の画像に合成する
	 * @link http://php.net/manual/ja/imagick.compositeimage.php
	 * @param Imagick $composite_object <p>
	 * 合成する画像を保持する Imagick オブジェクト。
	 * </p>
	 * @param int $composite
	 * @param int $x <p>
	 * 合成する位置の列オフセット。
	 * </p>
	 * @param int $y <p>
	 * 合成する位置の行オフセット。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのチャネルモードで使用可能なチャネル定数を指定します。
	 * 複数のチャネルを指定するには、チャネル型定数をビット演算子で結合します。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function compositeimage(Imagick $composite_object, int $composite, int $x, int $y, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 明度、飽和度、色相を制御する
	 * @link http://php.net/manual/ja/imagick.modulateimage.php
	 * @param float $brightness
	 * @param float $saturation
	 * @param float $hue
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function modulateimage(float $brightness, float $saturation, float $hue): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像で使われている色の数を取得する
	 * @link http://php.net/manual/ja/imagick.getimagecolors.php
	 * @return int 成功した場合に <b>TRUE</b> を返します。
	 */
	public function getimagecolors(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 合成画像を作成する
	 * @link http://php.net/manual/ja/imagick.montageimage.php
	 * @param ImagickDraw $draw <p>
	 * フォント名、サイズ、色をこのオブジェクトから取得します。
	 * </p>
	 * @param string $tile_geometry <p>
	 * 行単位、ページ単位のタイル数 (例 6x4+0+0)。
	 * </p>
	 * @param string $thumbnail_geometry <p>
	 * 各サムネイルの画像サイズと枠線のサイズ (例 120x120+4+3>)。
	 * </p>
	 * @param int $mode <p>
	 * サムネイルのフレームモード。
	 * モンタージュモード定数
	 * を参照ください。
	 * </p>
	 * @param string $frame <p>
	 * 画像を枠線で囲みます (例 15x15+3+3)。
	 * 枠の色は、サムネイルのマット色となります。
	 * </p>
	 * @return Imagick 成功した場合に <b>TRUE</b> を返します。
	 */
	public function montageimage(ImagickDraw $draw, string $tile_geometry, string $thumbnail_geometry, int $mode, string $frame): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像を識別し、属性を取得する
	 * @link http://php.net/manual/ja/imagick.identifyimage.php
	 * @param bool $appendRawOutput [optional] <p>
	 * If <b>TRUE</b> then the raw output is appended to the array.
	 * </p>
	 * @return array 画像を識別し、属性を返します。属性には画像の幅や高さ、サイズなどが含まれます。
	 */
	public function identifyimage(bool $appendRawOutput = false): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 閾値にもとづいて個々のピクセルの値を変更する
	 * @link http://php.net/manual/ja/imagick.thresholdimage.php
	 * @param float $threshold
	 * @param int $channel [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function thresholdimage(float $threshold, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 輝度の範囲にもとづいて各ピクセルの閾値を選択する
	 * @link http://php.net/manual/ja/imagick.adaptivethresholdimage.php
	 * @param int $width <p>
	 * 周辺の幅。
	 * </p>
	 * @param int $height <p>
	 * 周辺の高さ。
	 * </p>
	 * @param int $offset <p>
	 * 平均オフセット。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function adaptivethresholdimage(int $width, int $height, int $offset): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 閾値に満たないすべてのピクセルを黒にする
	 * @link http://php.net/manual/ja/imagick.blackthresholdimage.php
	 * @param mixed $threshold <p>
	 * すべて黒にする閾値。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function blackthresholdimage($threshold): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 閾値に満たないすべてのピクセルを白にする
	 * @link http://php.net/manual/ja/imagick.whitethresholdimage.php
	 * @param mixed $threshold
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function whitethresholdimage($threshold): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像群を追加する
	 * @link http://php.net/manual/ja/imagick.appendimages.php
	 * @param bool $stack [optional] <p>
	 * 画像を垂直方向に積むかどうか。デフォルト (あるいは <b>FALSE</b> を指定した場合)
	 * は、画像を左から右に積みます。<i>stack</i> が <b>TRUE</b>
	 * の場合は、画像を上から下に積みます。
	 * </p>
	 * @return Imagick 成功した場合に Imagick インスタンスを返します。
	 */
	public function appendimages(bool $stack = false): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 木炭画をシミュレートする
	 * @link http://php.net/manual/ja/imagick.charcoalimage.php
	 * @param float $radius <p>
	 * ガウス分布の半径。中心を含まないピクセル数。
	 * </p>
	 * @param float $sigma <p>
	 * ガウス分布の標準偏差 (ピクセル単位)。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function charcoalimage(float $radius, float $sigma): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * カラー画像のコントラストを強調する
	 * @link http://php.net/manual/ja/imagick.normalizeimage.php
	 * @param int $channel [optional] <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function normalizeimage(int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 油絵をシミュレートする
	 * @link http://php.net/manual/ja/imagick.oilpaintimage.php
	 * @param float $radius <p>
	 * 近傍円の半径。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function oilpaintimage(float $radius): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定した色数まで画像を減色する
	 * @link http://php.net/manual/ja/imagick.posterizeimage.php
	 * @param int $levels
	 * @param bool $dither
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function posterizeimage(int $levels, bool $dither): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像にラジアルブラーを施す
	 * @link http://php.net/manual/ja/imagick.radialblurimage.php
	 * @param float $angle
	 * @param int $channel [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function radialblurimage(float $angle, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 三次元のボタン風の効果をシミュレートする
	 * @link http://php.net/manual/ja/imagick.raiseimage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @param bool $raise
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function raiseimage(int $width, int $height, int $x, int $y, bool $raise): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像を指定した解像度にリサンプリングする
	 * @link http://php.net/manual/ja/imagick.resampleimage.php
	 * @param float $x_resolution
	 * @param float $y_resolution
	 * @param int $filter
	 * @param float $blur
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function resampleimage(float $x_resolution, float $y_resolution, int $filter, float $blur): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のサイズを変更する
	 * @link http://php.net/manual/ja/imagick.resizeimage.php
	 * @param int $columns <p>
	 * 画像の幅。
	 * </p>
	 * @param int $rows <p>
	 * 画像の高さ。
	 * </p>
	 * @param int $filter <p>
	 * フィルタ定数
	 * の一覧を参照ください。
	 * </p>
	 * @param float $blur <p>
	 * blur 要素。&gt; 1 はぼやけた状態、&lt; 1 はシャープな状態を表します。
	 * </p>
	 * @param bool $bestfit [optional] <p>
	 * オプションの fit パラメータ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function resizeimage(int $columns, int $rows, int $filter, float $blur, bool $bestfit = false): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像を補正する
	 * @link http://php.net/manual/ja/imagick.rollimage.php
	 * @param int $x <p>
	 * X オフセット。
	 * </p>
	 * @param int $y <p>
	 * Y オフセット。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function rollimage(int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像を回転する
	 * @link http://php.net/manual/ja/imagick.rotateimage.php
	 * @param mixed $background <p>
	 * 背景色。
	 * </p>
	 * @param float $degrees <p>
	 * 画像を回転させる度数。時計回りに数えます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function rotateimage($background, float $degrees): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ピクセルのサンプリングによって画像の倍率を変更する
	 * @link http://php.net/manual/ja/imagick.sampleimage.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function sampleimage(int $columns, int $rows): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像にソラリゼーション効果を適用する
	 * @link http://php.net/manual/ja/imagick.solarizeimage.php
	 * @param int $threshold
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function solarizeimage(int $threshold): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の影をシミュレートする
	 * @link http://php.net/manual/ja/imagick.shadowimage.php
	 * @param float $opacity
	 * @param float $sigma
	 * @param int $x
	 * @param int $y
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function shadowimage(float $opacity, float $sigma, int $x, int $y): bool {}

	/**
	 * @param $key
	 * @param $value
	 */
	public function setimageattribute($key, $value) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の背景色を設定する
	 * @link http://php.net/manual/ja/imagick.setimagebackgroundcolor.php
	 * @param mixed $background
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagebackgroundcolor($background): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の合成演算子を設定する
	 * @link http://php.net/manual/ja/imagick.setimagecompose.php
	 * @param int $compose
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagecompose(int $compose): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の遅延を設定する
	 * @link http://php.net/manual/ja/imagick.setimagedelay.php
	 * @param int $delay <p>
	 * 画像を表示させる時間を 'ticks' で表した値。
	 * アニメーション GIF の場合は 1 秒間に 100 ticks なので、
	 * 20 を設定すると 20/100 秒つまり 1/5 秒ということになります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagedelay(int $delay): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の深度を設定する
	 * @link http://php.net/manual/ja/imagick.setimagedepth.php
	 * @param int $depth
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagedepth(int $depth): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のガンマを設定する
	 * @link http://php.net/manual/ja/imagick.setimagegamma.php
	 * @param float $gamma
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagegamma(float $gamma): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の反復を設定する
	 * @link http://php.net/manual/ja/imagick.setimageiterations.php
	 * @param int $iterations <p>
	 * 画像をループさせる回数。'0' を指定すると、ずっとループし続けます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageiterations(int $iterations): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のマット色を設定する
	 * @link http://php.net/manual/ja/imagick.setimagemattecolor.php
	 * @param mixed $matte
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagemattecolor($matte): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のページのジオメトリを設定する
	 * @link http://php.net/manual/ja/imagick.setimagepage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagepage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * @param $filename
	 */
	public function setimageprogressmonitor($filename) {}

	/**
	 * @param $callback
	 */
	public function setprogressmonitor($callback) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の解像度を設定する
	 * @link http://php.net/manual/ja/imagick.setimageresolution.php
	 * @param float $x_resolution
	 * @param float $y_resolution
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageresolution(float $x_resolution, float $y_resolution): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のシーンを設定する
	 * @link http://php.net/manual/ja/imagick.setimagescene.php
	 * @param int $scene
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagescene(int $scene): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の ticks-per-second を設定する
	 * @link http://php.net/manual/ja/imagick.setimagetickspersecond.php
	 * @param int $ticks_per_second <p>
	 * 画像を表示させる時間を ticks per second で表した値。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagetickspersecond(int $ticks_per_second): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の型を設定する
	 * @link http://php.net/manual/ja/imagick.setimagetype.php
	 * @param int $image_type
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagetype(int $image_type): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の解像度の単位を設定する
	 * @link http://php.net/manual/ja/imagick.setimageunits.php
	 * @param int $units
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageunits(int $units): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像をシャープにする
	 * @link http://php.net/manual/ja/imagick.sharpenimage.php
	 * @param float $radius
	 * @param float $sigma
	 * @param int $channel [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function sharpenimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の輪郭からピクセルを刈り取る
	 * @link http://php.net/manual/ja/imagick.shaveimage.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function shaveimage(int $columns, int $rows): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 平行四辺形を作成する
	 * @link http://php.net/manual/ja/imagick.shearimage.php
	 * @param mixed $background <p>
	 * 背景色。
	 * </p>
	 * @param float $x_shear <p>
	 * x 軸方向に押しつぶす角度。
	 * </p>
	 * @param float $y_shear <p>
	 * y 軸方向に押しつぶす角度。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function shearimage($background, float $x_shear, float $y_shear): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 無地の画像を作成する
	 * @link http://php.net/manual/ja/imagick.spliceimage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function spliceimage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の基本属性を取得する
	 * @link http://php.net/manual/ja/imagick.pingimage.php
	 * @param string $filename <p>
	 * 情報を読み込むファイル名。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function pingimage(string $filename): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オープンしているファイルハンドルから画像を読み込む
	 * @link http://php.net/manual/ja/imagick.readimagefile.php
	 * @param resource $filehandle
	 * @param string $fileName [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function readimagefile($filehandle, string $fileName = null): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像を表示する
	 * @link http://php.net/manual/ja/imagick.displayimage.php
	 * @param string $servername <p>
	 * X サーバーの名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function displayimage(string $servername): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像あるいは画像シーケンスを表示する
	 * @link http://php.net/manual/ja/imagick.displayimages.php
	 * @param string $servername <p>
	 * X サーバーの名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function displayimages(string $servername): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ブロック内の各ピクセルをランダムに移動する
	 * @link http://php.net/manual/ja/imagick.spreadimage.php
	 * @param float $radius
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function spreadimage(float $radius): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の中心から、ピクセルを渦巻状にする
	 * @link http://php.net/manual/ja/imagick.swirlimage.php
	 * @param float $degrees
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function swirlimage(float $degrees): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像からすべてのプロパティやコメントを除去する
	 * @link http://php.net/manual/ja/imagick.stripimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function stripimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Imagick がサポートするフォーマットを返す
	 * @link http://php.net/manual/ja/imagick.queryformats.php
	 * @param string $pattern [optional]
	 * @return array Imagick がサポートするフォーマットを含む配列を返します。
	 */
	public static function queryformats(string $pattern = "*"): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 設定したフォントを返す
	 * @link http://php.net/manual/ja/imagick.queryfonts.php
	 * @param string $pattern [optional] <p>
	 * クエリパターン。
	 * </p>
	 * @return array フォントを含む配列を返します。
	 */
	public static function queryfonts(string $pattern = "*"): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * フォントメトリクスを表す配列を返す
	 * @link http://php.net/manual/ja/imagick.queryfontmetrics.php
	 * @param ImagickDraw $properties <p>
	 * フォントのプロパティを含む ImagickDraw オブジェクト。
	 * </p>
	 * @param string $text <p>
	 * テキスト。
	 * </p>
	 * @param bool $multiline [optional] <p>
	 * マルチラインパラメータ。空にすると自動検出します。
	 * </p>
	 * @return array フォントメトリクスを表す、多次元配列を返します。
	 */
	public function queryfontmetrics(ImagickDraw $properties, string $text, bool $multiline = null): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * デジタル透かしを画像に埋め込む
	 * @link http://php.net/manual/ja/imagick.steganoimage.php
	 * @param Imagick $watermark_wand
	 * @param int $offset
	 * @return Imagick 成功した場合に <b>TRUE</b> を返します。
	 */
	public function steganoimage(Imagick $watermark_wand, int $offset): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ランダムなノイズを画像に追加する
	 * @link http://php.net/manual/ja/imagick.addnoiseimage.php
	 * @param int $noise_type <p>
	 * ノイズの形式。
	 * ノイズ定数
	 * の一覧を参照ください。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのモードで有効なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数
	 * をビット演算子で組み合わせます。デフォルトは <b>Imagick::CHANNEL_DEFAULT</b> です。
	 * チャネル定数 の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function addnoiseimage(int $noise_type, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * モーションブラーをシミュレートする
	 * @link http://php.net/manual/ja/imagick.motionblurimage.php
	 * @param float $radius <p>
	 * ガウス演算の半径。ピクセル単位で指定し、中心は計算に入れません。
	 * </p>
	 * @param float $sigma <p>
	 * ガウス演算の標準偏差。ピクセル単位で指定します。
	 * </p>
	 * @param float $angle <p>
	 * この角度で効果を適用します。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのチャンネルモードで使用可能な任意のチャンネル定数を指定します。
	 * 複数を指定する場合はビット演算子を使用します。
	 * チャンネル定数
	 * の一覧を参照ください。
	 * この引数が有効になるのは、ImageMagick バージョン 6.4.4
	 * 以降で Imagick をコンパイルした場合のみです。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function motionblurimage(float $radius, float $sigma, float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像からモザイクを作成する
	 * @link http://php.net/manual/ja/imagick.mosaicimages.php
	 * @return Imagick 成功した場合に <b>TRUE</b> を返します。
	 */
	public function mosaicimages(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 複数の画像をモーフィングする
	 * @link http://php.net/manual/ja/imagick.morphimages.php
	 * @param int $number_frames <p>
	 * 生成する中間画像の数。
	 * </p>
	 * @return Imagick このメソッドは、成功した場合に新しい Imagick オブジェクトを返します。
	 * エラー時に
	 * <b>ImagickException</b> をスローします。
	 */
	public function morphimages(int $number_frames): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像をその半分のサイズに比例縮小する
	 * @link http://php.net/manual/ja/imagick.minifyimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function minifyimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像を変換する
	 * @link http://php.net/manual/ja/imagick.affinetransformimage.php
	 * @param ImagickDraw $matrix <p>
	 * アフィン行列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function affinetransformimage(ImagickDraw $matrix): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像群を平均化する
	 * @link http://php.net/manual/ja/imagick.averageimages.php
	 * @return Imagick 成功した場合に Imagick インスタンスを返します。
	 */
	public function averageimages(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の周りを枠線で囲む
	 * @link http://php.net/manual/ja/imagick.borderimage.php
	 * @param mixed $bordercolor <p>
	 * 枠線の色を含む ImagickPixel オブジェクトあるいは文字列。
	 * </p>
	 * @param int $width <p>
	 * 枠線の幅。
	 * </p>
	 * @param int $height <p>
	 * 枠線の高さ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function borderimage($bordercolor, int $width, int $height): bool {}

	/**
	 * @param $orig_width
	 * @param $orig_height
	 * @param $desired_width
	 * @param $desired_height
	 * @param $legacy [optional]
	 */
	public static function calculatecrop($orig_width, $orig_height, $desired_width, $desired_height, $legacy) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の一部を取り除き、切り詰める
	 * @link http://php.net/manual/ja/imagick.chopimage.php
	 * @param int $width <p>
	 * 切り取る範囲の幅。
	 * </p>
	 * @param int $height <p>
	 * 切り取る範囲の高さ。
	 * </p>
	 * @param int $x <p>
	 * 切り取る範囲の X 座標。
	 * </p>
	 * @param int $y <p>
	 * 切り取る範囲の Y 座標。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function chopimage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 8BIM プロファイルの最初のパスにそって切り取る
	 * @link http://php.net/manual/ja/imagick.clipimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function clipimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 8BIM プロファイルの指定した名前のパスにそって切り取る
	 * @link http://php.net/manual/ja/imagick.clippathimage.php
	 * @param string $pathname <p>
	 * パスの名前。
	 * </p>
	 * @param bool $inside <p>
	 * true の場合は、その後の操作はクリップパスの内側に対して適用されます。
	 * それ以外の場合は、その後の操作はクリップパスの外側に対して適用されます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function clippathimage(string $pathname, bool $inside): bool {}

	/**
	 * @param $pathname
	 * @param $inside
	 */
	public function clipimagepath($pathname, $inside) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 複数の画像を合成する
	 * @link http://php.net/manual/ja/imagick.coalesceimages.php
	 * @return Imagick 成功した場合に新規 Imagick オブジェクトを返します。
	 */
	public function coalesceimages(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 対象にマッチする任意の点の色の値を変更する
	 * @link http://php.net/manual/ja/imagick.colorfloodfillimage.php
	 * @param mixed $fill <p>
	 * 塗りつぶし色を表す ImagickPixel オブジェクト。
	 * </p>
	 * @param float $fuzz <p>
	 * fuzz の量。たとえば fuzz を 10 に設定すると、
	 * 赤の輝度が 100 および 102 の点は同じ色とみなされます。
	 * </p>
	 * @param mixed $bordercolor <p>
	 * 枠線の色を表す ImagickPixel オブジェクト。
	 * </p>
	 * @param int $x <p>
	 * 開始位置の X 座標。
	 * </p>
	 * @param int $y <p>
	 * 開始位置の Y 座標。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function colorfloodfillimage($fill, float $fuzz, $bordercolor, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 塗りつぶし色と画像を混合する
	 * @link http://php.net/manual/ja/imagick.colorizeimage.php
	 * @param mixed $colorize <p>
	 * 色を表す ImagickPixel オブジェクトあるいは文字列。
	 * </p>
	 * @param mixed $opacity <p>
	 * 不透明度を表す ImagickPixel オブジェクトあるいは文字列。
	 * 1.0 は完全に不透明、0.0 は完全に透明であることを表します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function colorizeimage($colorize, $opacity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ひとつあるいは複数の画像の差を返す
	 * @link http://php.net/manual/ja/imagick.compareimagechannels.php
	 * @param Imagick $image <p>
	 * 比較する画像を含む Imagick オブジェクト。
	 * </p>
	 * @param int $channelType <p>
	 * そのチャネルモードで使用可能なチャネル定数を指定します。
	 * 複数のチャネルを指定するには、チャネル型定数をビット演算子で結合します。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @param int $metricType <p>
	 * メトリック型定数 のいずれか。
	 * </p>
	 * @return array new_wand と
	 * distortion を含む配列を返します。
	 */
	public function compareimagechannels(Imagick $image, int $channelType, int $metricType): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ある画像を再構築された画像と比較する
	 * @link http://php.net/manual/ja/imagick.compareimages.php
	 * @param Imagick $compare <p>
	 * 比較したい画像。
	 * </p>
	 * @param int $metric <p>
	 * メトリック定数を指定します。この
	 * メトリック定数
	 * の一覧を参照ください。
	 * </p>
	 * @return array an array containing a reconstructed image and the difference between images.
	 */
	public function compareimages(Imagick $compare, int $metric): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のコントラストを変更する
	 * @link http://php.net/manual/ja/imagick.contrastimage.php
	 * @param bool $sharpen <p>
	 * シャープ値。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function contrastimage(bool $sharpen): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ひとつあるいは複数の画像をひとつにまとめる
	 * @link http://php.net/manual/ja/imagick.combineimages.php
	 * @param int $channelType <p>
	 * そのチャネルモードで使用可能なチャネル定数のいずれか。
	 * 複数のチャネルを適用するには、channeltype 定数をビット演算子でまとめます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return Imagick 成功した場合に <b>TRUE</b> を返します。
	 */
	public function combineimages(int $channelType): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 独自の畳み込み関数を画像に適用する
	 * @link http://php.net/manual/ja/imagick.convolveimage.php
	 * @param array $kernel <p>
	 * 畳み込みの中心。
	 * </p>
	 * @param int $channel [optional] <p>
	 * そのチャネルモードで使用可能なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、定数をビット演算子で連結します。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function convolveimage(array $kernel, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のカラーマップを移動する
	 * @link http://php.net/manual/ja/imagick.cyclecolormapimage.php
	 * @param int $displace <p>
	 * カラーマップを移動させる量。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function cyclecolormapimage(int $displace): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像間の特定のピクセルの差を返す
	 * @link http://php.net/manual/ja/imagick.deconstructimages.php
	 * @return Imagick 成功した場合に新しい Imagick オブジェクトを返します。
	 */
	public function deconstructimages(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像内のスペックルノイズを軽減する
	 * @link http://php.net/manual/ja/imagick.despeckleimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function despeckleimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の輪郭を強調する
	 * @link http://php.net/manual/ja/imagick.edgeimage.php
	 * @param float $radius <p>
	 * 操作の半径。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function edgeimage(float $radius): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * グレースケール画像に三次元効果を施して返す
	 * @link http://php.net/manual/ja/imagick.embossimage.php
	 * @param float $radius <p>
	 * 効果の半径。
	 * </p>
	 * @param float $sigma <p>
	 * 効果のシグマ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function embossimage(float $radius, float $sigma): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ノイジーな画像の品質を向上させる
	 * @link http://php.net/manual/ja/imagick.enhanceimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function enhanceimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像ヒストグラムを均等化する
	 * @link http://php.net/manual/ja/imagick.equalizeimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function equalizeimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 式を画像に適用する
	 * @link http://php.net/manual/ja/imagick.evaluateimage.php
	 * @param int $op <p>
	 * 評価演算子。
	 * </p>
	 * @param float $constant <p>
	 * 演算子の値。
	 * </p>
	 * @param int $channel [optional] <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function evaluateimage(int $op, float $constant, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * @param $EVALUATE
	 */
	public function evaluateimages($EVALUATE) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像シーケンスをマージする
	 * @link http://php.net/manual/ja/imagick.flattenimages.php
	 * @return Imagick 成功した場合に <b>TRUE</b> を返します。
	 */
	public function flattenimages(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 垂直方向に反転した画像を作成する
	 * @link http://php.net/manual/ja/imagick.flipimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function flipimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 水平方向に反転した画像を作成する
	 * @link http://php.net/manual/ja/imagick.flopimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function flopimage(): bool {}

	/**
	 * @param $magnitude
	 */
	public function forwardfouriertransformimage($magnitude) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 三次元の枠線をシミュレートする
	 * @link http://php.net/manual/ja/imagick.frameimage.php
	 * @param mixed $matte_color <p>
	 * マット色を表す ImagickPixel オブジェクトあるいは文字列。
	 * </p>
	 * @param int $width <p>
	 * 枠の幅。
	 * </p>
	 * @param int $height <p>
	 * 枠の高さ。
	 * </p>
	 * @param int $inner_bevel <p>
	 * 内側の影の幅。
	 * </p>
	 * @param int $outer_bevel <p>
	 * 外側の影の幅。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function frameimage($matte_color, int $width, int $height, int $inner_bevel, int $outer_bevel): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 式を画像の各ピクセルに適用する
	 * @link http://php.net/manual/ja/imagick.fximage.php
	 * @param string $expression <p>
	 * 式。
	 * </p>
	 * @param int $channel [optional] <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return Imagick 成功した場合に <b>TRUE</b> を返します。
	 */
	public function fximage(string $expression, int $channel = Imagick::CHANNEL_ALL): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像をガンマ補正する
	 * @link http://php.net/manual/ja/imagick.gammaimage.php
	 * @param float $gamma <p>
	 * ガンマ補正の量。
	 * </p>
	 * @param int $channel [optional] <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function gammaimage(float $gamma, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像をぼかす
	 * @link http://php.net/manual/ja/imagick.gaussianblurimage.php
	 * @param float $radius <p>
	 * ガウス演算の半径。ピクセル単位で指定し、中心は計算に入れません。
	 * </p>
	 * @param float $sigma <p>
	 * ガウス演算の標準偏差。ピクセル単位で指定します。
	 * </p>
	 * @param int $channel [optional] <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function gaussianblurimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * @param $key
	 */
	public function getimageattribute($key) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の背景色を返す
	 * @link http://php.net/manual/ja/imagick.getimagebackgroundcolor.php
	 * @return ImagickPixel 画像の背景色を設定した ImagickPixel を返します。
	 */
	public function getimagebackgroundcolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 青が一番強い点を返す
	 * @link http://php.net/manual/ja/imagick.getimageblueprimary.php
	 * @return array "x" 座標および "y" 座標を含む配列を返します。
	 */
	public function getimageblueprimary(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の前景色を返す
	 * @link http://php.net/manual/ja/imagick.getimagebordercolor.php
	 * @return ImagickPixel 成功した場合に <b>TRUE</b> を返します。
	 */
	public function getimagebordercolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 特定の画像チャネルの深度を返す
	 * @link http://php.net/manual/ja/imagick.getimagechanneldepth.php
	 * @param int $channel <p>
	 * そのモードで有効なチャネル定数を指定します。
	 * 複数のチャネルを適用するには、チャネル定数
	 * をビット演算子で組み合わせます。デフォルトは <b>Imagick::CHANNEL_DEFAULT</b> です。
	 * チャネル定数 の一覧を参照ください。
	 * </p>
	 * @return int 成功した場合に <b>TRUE</b> を返します。
	 */
	public function getimagechanneldepth(int $channel): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のチャネルを再構築した画像と比較する
	 * @link http://php.net/manual/ja/imagick.getimagechanneldistortion.php
	 * @param Imagick $reference <p>
	 * 比較する Imagick オブジェクト。
	 * </p>
	 * @param int $channel <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @param int $metric <p>
	 * メトリック型定数
	 * のいずれか。
	 * </p>
	 * @return float 成功した場合に <b>TRUE</b> を返します。
	 */
	public function getimagechanneldistortion(Imagick $reference, int $channel, int $metric): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ひとつあるいは複数の画像チャネルの極値を取得する
	 * @link http://php.net/manual/ja/imagick.getimagechannelextrema.php
	 * @param int $channel <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return array 成功した場合に <b>TRUE</b> を返します。
	 */
	public function getimagechannelextrema(int $channel): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 平均値と標準偏差を取得する
	 * @link http://php.net/manual/ja/imagick.getimagechannelmean.php
	 * @param int $channel <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return array 成功した場合に <b>TRUE</b> を返します。
	 */
	public function getimagechannelmean(int $channel): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の各チャネルの統計情報を返す
	 * @link http://php.net/manual/ja/imagick.getimagechannelstatistics.php
	 * @return array 成功した場合に <b>TRUE</b> を返します。
	 */
	public function getimagechannelstatistics(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定したインデックスに対応する色マップ上の色を返す
	 * @link http://php.net/manual/ja/imagick.getimagecolormapcolor.php
	 * @param int $index <p>
	 * 画像の色マップ内のオフセット。
	 * </p>
	 * @return ImagickPixel 成功した場合に <b>TRUE</b> を返します。
	 */
	public function getimagecolormapcolor(int $index): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の色空間を取得する
	 * @link http://php.net/manual/ja/imagick.getimagecolorspace.php
	 * @return int an integer which can be compared against COLORSPACE constants.
	 */
	public function getimagecolorspace(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の合成演算子を返す
	 * @link http://php.net/manual/ja/imagick.getimagecompose.php
	 * @return int 成功した場合に <b>TRUE</b> を返します。
	 */
	public function getimagecompose(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の遅延を取得する
	 * @link http://php.net/manual/ja/imagick.getimagedelay.php
	 * @return int 画像の遅延を返します。
	 */
	public function getimagedelay(): int {}

	/**
	 * (PECL imagick 0.9.1-0.9.9)<br/>
	 * 画像の深度を取得する
	 * @link http://php.net/manual/ja/imagick.getimagedepth.php
	 * @return int 画像の深度を返します。
	 */
	public function getimagedepth(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ある画像と再構築した画像を比較する
	 * @link http://php.net/manual/ja/imagick.getimagedistortion.php
	 * @param MagickWand $reference <p>
	 * 比較する Imagick オブジェクト。
	 * </p>
	 * @param int $metric <p>
	 * メトリック型定数
	 * のいずれか。
	 * </p>
	 * @return float その画像で使用する歪み係数 (あるいはその推測値) を返します。
	 */
	public function getimagedistortion(MagickWand $reference, int $metric): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の極値を取得する
	 * @link http://php.net/manual/ja/imagick.getimageextrema.php
	 * @return array "min" および "max" というキーを持つ連想配列を返します。
	 */
	public function getimageextrema(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の配置方法を取得する
	 * @link http://php.net/manual/ja/imagick.getimagedispose.php
	 * @return int 成功した場合に配置方法を返します。
	 */
	public function getimagedispose(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のガンマを取得する
	 * @link http://php.net/manual/ja/imagick.getimagegamma.php
	 * @return float 成功した場合にガンマを返します。
	 */
	public function getimagegamma(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 緑が一番強い点を返す
	 * @link http://php.net/manual/ja/imagick.getimagegreenprimary.php
	 * @return array 成功した場合に "x" および "y" というキーを持つ配列を返します。
	 * 失敗した場合は ImagickException をスローします。
	 */
	public function getimagegreenprimary(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の高さを返す
	 * @link http://php.net/manual/ja/imagick.getimageheight.php
	 * @return int 画像の高さをピクセル数で返します。
	 */
	public function getimageheight(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のヒストグラムを取得する
	 * @link http://php.net/manual/ja/imagick.getimagehistogram.php
	 * @return array 画像のヒストグラムを ImagickPixel オブジェクトの配列で返します。
	 */
	public function getimagehistogram(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のインターレース手法を取得する
	 * @link http://php.net/manual/ja/imagick.getimageinterlacescheme.php
	 * @return int 成功した場合に画像のインターレース手法を返します。
	 * エラー時に
	 * <b>ImagickException</b> をスローします。
	 */
	public function getimageinterlacescheme(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の反復を取得する
	 * @link http://php.net/manual/ja/imagick.getimageiterations.php
	 * @return int 画像の反復を表す整数値を返します。
	 */
	public function getimageiterations(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のマット色を返す
	 * @link http://php.net/manual/ja/imagick.getimagemattecolor.php
	 * @return ImagickPixel 成功した場合に ImagickPixel オブジェクトを返します。
	 */
	public function getimagemattecolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ページのジオメトリを返す
	 * @link http://php.net/manual/ja/imagick.getimagepage.php
	 * @return array 画像のページジオメトリを配列で返します。配列のキーは
	 * "width"、"height"、"x" および "y" です。
	 */
	public function getimagepage(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定したピクセルの色を返す
	 * @link http://php.net/manual/ja/imagick.getimagepixelcolor.php
	 * @param int $x <p>
	 * ピクセルの x 座標。
	 * </p>
	 * @param int $y <p>
	 * ピクセルの y 座標。
	 * </p>
	 * @return ImagickPixel 指定した座標の色を表す ImagickPixel のインスタンスを返します。
	 */
	public function getimagepixelcolor(int $x, int $y): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定した名前の画像プロファイルを返す
	 * @link http://php.net/manual/ja/imagick.getimageprofile.php
	 * @param string $name <p>
	 * 返したいプロファイルの名前。
	 * </p>
	 * @return string 画像プロファイルを含む文字列を返します。
	 */
	public function getimageprofile(string $name): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 赤が一番強い点を返す
	 * @link http://php.net/manual/ja/imagick.getimageredprimary.php
	 * @return array 赤が一番強い点を "x" および "y" というキーを持つ配列で返します。
	 * エラー時に
	 * <b>ImagickException</b> をスローします。
	 */
	public function getimageredprimary(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のレンダリング方向を取得する
	 * @link http://php.net/manual/ja/imagick.getimagerenderingintent.php
	 * @return int 画像の レンダリング方向 を返します。
	 */
	public function getimagerenderingintent(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の X 方向と Y 方向の解像度を取得する
	 * @link http://php.net/manual/ja/imagick.getimageresolution.php
	 * @return array 解像度を配列で返します。
	 */
	public function getimageresolution(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のシーンを取得する
	 * @link http://php.net/manual/ja/imagick.getimagescene.php
	 * @return int 画像のシーンを返します。
	 */
	public function getimagescene(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * SHA-256 メッセージダイジェストを生成する
	 * @link http://php.net/manual/ja/imagick.getimagesignature.php
	 * @return string そのファイルの SHA-256 ハッシュを文字列で返します。
	 */
	public function getimagesignature(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の ticks-per-second を取得する
	 * @link http://php.net/manual/ja/imagick.getimagetickspersecond.php
	 * @return int 画像の ticks-per-second を返します。
	 */
	public function getimagetickspersecond(): int {}

	/**
	 * (PECL imagick 0.9.10-0.9.9)<br/>
	 * 画像の型を取得する
	 * @link http://php.net/manual/ja/imagick.getimagetype.php
	 * @return int 画像の型を返します。
	 * <b>imagick::IMGTYPE_UNDEFINED</b>
	 * <b>imagick::IMGTYPE_BILEVEL</b>
	 * <b>imagick::IMGTYPE_GRAYSCALE</b>
	 * <b>imagick::IMGTYPE_GRAYSCALEMATTE</b>
	 * <b>imagick::IMGTYPE_PALETTE</b>
	 * <b>imagick::IMGTYPE_PALETTEMATTE</b>
	 * <b>imagick::IMGTYPE_TRUECOLOR</b>
	 * <b>imagick::IMGTYPE_TRUECOLORMATTE</b>
	 * <b>imagick::IMGTYPE_COLORSEPARATION</b>
	 * <b>imagick::IMGTYPE_COLORSEPARATIONMATTE</b>
	 * <b>imagick::IMGTYPE_OPTIMIZE</b>
	 */
	public function getimagetype(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の解像度の単位を取得する
	 * @link http://php.net/manual/ja/imagick.getimageunits.php
	 * @return int 画像の解像度の単位を返します。
	 */
	public function getimageunits(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 仮想ピクセルメソッドを取得する
	 * @link http://php.net/manual/ja/imagick.getimagevirtualpixelmethod.php
	 * @return int 成功した場合に仮想ピクセルメソッドを返します。
	 */
	public function getimagevirtualpixelmethod(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 色度が白い点を返す
	 * @link http://php.net/manual/ja/imagick.getimagewhitepoint.php
	 * @return array 色度が白い点を返します。
	 * "x" および "y" というキーを持つ連想配列となります。
	 */
	public function getimagewhitepoint(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の幅を返す
	 * @link http://php.net/manual/ja/imagick.getimagewidth.php
	 * @return int 画像の幅を返します。
	 */
	public function getimagewidth(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクト内の画像の数を返す
	 * @link http://php.net/manual/ja/imagick.getnumberimages.php
	 * @return int Imagick オブジェクトに関連付けられている画像の数を返します。
	 */
	public function getnumberimages(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の総インク密度を取得する
	 * @link http://php.net/manual/ja/imagick.getimagetotalinkdensity.php
	 * @return float 画像の総インク密度を返します。
	 * エラー時に
	 * <b>ImagickException</b> をスローします。
	 */
	public function getimagetotalinkdensity(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の一部を抽出する
	 * @link http://php.net/manual/ja/imagick.getimageregion.php
	 * @param int $width <p>
	 * 抽出する範囲の幅。
	 * </p>
	 * @param int $height <p>
	 * 抽出する範囲の高さ。
	 * </p>
	 * @param int $x <p>
	 * 抽出する範囲の左上の X 座標。
	 * </p>
	 * @param int $y <p>
	 * 抽出する範囲の左上の Y 座標。
	 * </p>
	 * @return Imagick 画像の一部を抽出し、新しい wand として返します。
	 */
	public function getimageregion(int $width, int $height, int $x, int $y): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 新しい画像をコピーとして作成する
	 * @link http://php.net/manual/ja/imagick.implodeimage.php
	 * @param float $radius <p>
	 * 内破処理の半径。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function implodeimage(float $radius): bool {}

	/**
	 * @param $complement
	 * @param $magnitude
	 */
	public function inversefouriertransformimage($complement, $magnitude) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のレベルを調節する
	 * @link http://php.net/manual/ja/imagick.levelimage.php
	 * @param float $blackPoint <p>
	 * 画像の黒の点。
	 * </p>
	 * @param float $gamma <p>
	 * ガンマ値。
	 * </p>
	 * @param float $whitePoint <p>
	 * 画像の白の点。
	 * </p>
	 * @param int $channel [optional] <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function levelimage(float $blackPoint, float $gamma, float $whitePoint, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像を 2 倍に比例拡大する
	 * @link http://php.net/manual/ja/imagick.magnifyimage.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function magnifyimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の色を、参照画像の中の最も近い色に置き換える
	 * @link http://php.net/manual/ja/imagick.mapimage.php
	 * @param Imagick $map
	 * @param bool $dither
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function mapimage(Imagick $map, bool $dither): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 色の透明度を変更する
	 * @link http://php.net/manual/ja/imagick.mattefloodfillimage.php
	 * @param float $alpha <p>
	 * 不透明度レベル。1.0 は完全な不透明、0.0 は完全な透明を表します。
	 * </p>
	 * @param float $fuzz <p>
	 * 画像の fuzz 値。
	 * どの程度の色を「同じ色」とみなすかを表します。
	 * </p>
	 * @param mixed $bordercolor <p>
	 * 輪郭の色を表す <b>ImagickPixel</b> オブジェクトあるいは文字列。
	 * </p>
	 * @param int $x <p>
	 * 操作の開始位置の x 座標。
	 * </p>
	 * @param int $y <p>
	 * 操作の開始位置の y 座標。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function mattefloodfillimage(float $alpha, float $fuzz, $bordercolor, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * デジタルフィルタを適用する
	 * @link http://php.net/manual/ja/imagick.medianfilterimage.php
	 * @param float $radius <p>
	 * 近傍ピクセルの半径。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function medianfilterimage(float $radius): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の色を打ち消す
	 * @link http://php.net/manual/ja/imagick.negateimage.php
	 * @param bool $gray <p>
	 * 画像内のグレースケールのみを打ち消すのかどうか。
	 * </p>
	 * @param int $channel [optional] <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function negateimage(bool $gray, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 色にマッチするピクセルを変更する
	 * @link http://php.net/manual/ja/imagick.paintopaqueimage.php
	 * @param mixed $target <p>
	 * この対象色を変更すると、画像の塗りつぶし色が変わります。
	 * ImagickPixel オブジェクトあるいは文字列で対象色を指定します。
	 * </p>
	 * @param mixed $fill <p>
	 * 塗りつぶし色を表す ImagickPixel オブジェクトあるいは文字列。
	 * </p>
	 * @param float $fuzz <p>
	 * 画像の fuzz 値。
	 * どの程度の色を「同じ色」とみなすかを表します。
	 * </p>
	 * @param int $channel [optional] <p>
	 * チャネルモードに対応したチャネル定数を指定します。
	 * 複数のチャネルに適用するには、
	 * ビット演算子でチャネル型定数を組み合わせます。
	 * チャネル定数
	 * の一覧を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function paintopaqueimage($target, $fill, float $fuzz, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 色にマッチするピクセルを塗りつぶし色に変更する
	 * @link http://php.net/manual/ja/imagick.painttransparentimage.php
	 * @param mixed $target <p>
	 * この対象色を変更して、画像の不透明度を指定します。
	 * </p>
	 * @param float $alpha <p>
	 * 不透明度レベル。1.0 は完全な不透明、0.0 は完全な透明を表します。
	 * </p>
	 * @param float $fuzz <p>
	 * 画像の fuzz 値。
	 * どの程度の色を「同じ色」とみなすかを表します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function painttransparentimage($target, float $alpha, float $fuzz): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像処理用の適切なパラメータを手早く取得する
	 * @link http://php.net/manual/ja/imagick.previewimages.php
	 * @param int $preview <p>
	 * プレビュー形式。プレビュー形式の定数
	 * を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function previewimages(int $preview): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のプロファイルを追加あるいは削除する
	 * @link http://php.net/manual/ja/imagick.profileimage.php
	 * @param string $name
	 * @param string $profile
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function profileimage(string $name, string $profile): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 参照画像内の色を解析する
	 * @link http://php.net/manual/ja/imagick.quantizeimage.php
	 * @param int $numberColors
	 * @param int $colorspace
	 * @param int $treedepth
	 * @param bool $dither
	 * @param bool $measureError
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function quantizeimage(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像シーケンス内の色を解析する
	 * @link http://php.net/manual/ja/imagick.quantizeimages.php
	 * @param int $numberColors
	 * @param int $colorspace
	 * @param int $treedepth
	 * @param bool $dither
	 * @param bool $measureError
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function quantizeimages(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の輪郭をなめらかにする
	 * @link http://php.net/manual/ja/imagick.reducenoiseimage.php
	 * @param float $radius
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function reducenoiseimage(float $radius): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定した名前の画像プロファイルを削除してそれを返す
	 * @link http://php.net/manual/ja/imagick.removeimageprofile.php
	 * @param string $name
	 * @return string 画像のプロファイル名を返します。
	 */
	public function removeimageprofile(string $name): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像からチャネルを分離する
	 * @link http://php.net/manual/ja/imagick.separateimagechannel.php
	 * @param int $channel <p>
	 * どの「チャネル」を戻すか。RGB 以外の色空間の場合でも、定数
	 * CHANNEL_RED、CHANNEL_GREEN、CHANNEL_BLUE を使って第1、第2、第3チャネルを指定できます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function separateimagechannel(int $channel): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像をセピア調にする
	 * @link http://php.net/manual/ja/imagick.sepiatoneimage.php
	 * @param float $threshold
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function sepiatoneimage(float $threshold): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像を折りたたむ任意のメソッドについて画像のバイアスを設定する
	 * @link http://php.net/manual/ja/imagick.setimagebias.php
	 * @param float $bias
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagebias(float $bias): bool {}

	/**
	 * @param $bias
	 */
	public function setimagebiasquantum($bias) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 青が一番強い点を設定する
	 * @link http://php.net/manual/ja/imagick.setimageblueprimary.php
	 * @param float $x
	 * @param float $y
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageblueprimary(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の前景色を設定する
	 * @link http://php.net/manual/ja/imagick.setimagebordercolor.php
	 * @param mixed $border <p>
	 * 前景色。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagebordercolor($border): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 特定の画像チャネルの深度を設定する
	 * @link http://php.net/manual/ja/imagick.setimagechanneldepth.php
	 * @param int $channel
	 * @param int $depth
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagechanneldepth(int $channel, int $depth): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定した色マップインデックスの色を設定する
	 * @link http://php.net/manual/ja/imagick.setimagecolormapcolor.php
	 * @param int $index
	 * @param ImagickPixel $color
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagecolormapcolor(int $index, ImagickPixel $color): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の色空間を設定する
	 * @link http://php.net/manual/ja/imagick.setimagecolorspace.php
	 * @param int $colorspace <p>
	 * COLORSPACE 定数のいずれか。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagecolorspace(int $colorspace): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の配置方法を設定する
	 * @link http://php.net/manual/ja/imagick.setimagedispose.php
	 * @param int $dispose
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagedispose(int $dispose): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のサイズを設定する
	 * @link http://php.net/manual/ja/imagick.setimageextent.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageextent(int $columns, int $rows): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 緑が一番強い点を設定する
	 * @link http://php.net/manual/ja/imagick.setimagegreenprimary.php
	 * @param float $x
	 * @param float $y
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagegreenprimary(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のインターレース手法を設定する
	 * @link http://php.net/manual/ja/imagick.setimageinterlacescheme.php
	 * @param int $interlace_scheme
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageinterlacescheme(int $interlace_scheme): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定した名前の画像プロファイルを Imagick オブジェクトに追加する
	 * @link http://php.net/manual/ja/imagick.setimageprofile.php
	 * @param string $name
	 * @param string $profile
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageprofile(string $name, string $profile): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 赤が一番強い点を設定する
	 * @link http://php.net/manual/ja/imagick.setimageredprimary.php
	 * @param float $x
	 * @param float $y
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimageredprimary(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のレンダリング方向を設定する
	 * @link http://php.net/manual/ja/imagick.setimagerenderingintent.php
	 * @param int $rendering_intent
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagerenderingintent(int $rendering_intent): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の仮想ピクセルメソッドを設定する
	 * @link http://php.net/manual/ja/imagick.setimagevirtualpixelmethod.php
	 * @param int $method
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagevirtualpixelmethod(int $method): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の色度が白い点を設定する
	 * @link http://php.net/manual/ja/imagick.setimagewhitepoint.php
	 * @param float $x
	 * @param float $y
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimagewhitepoint(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のコントラストを調整する
	 * @link http://php.net/manual/ja/imagick.sigmoidalcontrastimage.php
	 * @param bool $sharpen <p>
	 * If true increase the contrast, if false decrease the contrast.
	 * </p>
	 * @param float $alpha <p>
	 * The amount of contrast to apply. 1 is very little, 5 is a significant amount, 20 is extreme.
	 * </p>
	 * @param float $beta <p>
	 * Where the midpoint of the gradient will be. This value should be in the range 0 to 1 - mutliplied by the quantum value for ImageMagick.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Which color channels the contrast will be applied to.
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function sigmoidalcontrastimage(bool $sharpen, float $alpha, float $beta, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ふたつの画像を合成する
	 * @link http://php.net/manual/ja/imagick.stereoimage.php
	 * @param Imagick $offset_wand
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function stereoimage(Imagick $offset_wand): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テクスチャ画像をタイル状に並べる
	 * @link http://php.net/manual/ja/imagick.textureimage.php
	 * @param Imagick $texture_wand <p>
	 * テクスチャ画像として使用する Imagick オブジェクト
	 * </p>
	 * @return Imagick a new Imagick object that has the repeated texture applied.
	 */
	public function textureimage(Imagick $texture_wand): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 色ベクトルを画像の各ピクセルに適用する
	 * @link http://php.net/manual/ja/imagick.tintimage.php
	 * @param mixed $tint
	 * @param mixed $opacity
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function tintimage($tint, $opacity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像をシャープにする
	 * @link http://php.net/manual/ja/imagick.unsharpmaskimage.php
	 * @param float $radius
	 * @param float $sigma
	 * @param float $amount
	 * @param float $threshold
	 * @param int $channel [optional]
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function unsharpmaskimage(float $radius, float $sigma, float $amount, float $threshold, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 新しい Imagick オブジェクトを返す
	 * @link http://php.net/manual/ja/imagick.getimage.php
	 * @return Imagick 現在の画像シーケンスを使用した新しい Imagick オブジェクトを返します。
	 */
	public function getimage(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 新しい画像を Imagick オブジェクトの画像リストに追加する
	 * @link http://php.net/manual/ja/imagick.addimage.php
	 * @param Imagick $source <p>
	 * 元の Imagick オブジェクト。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function addimage(Imagick $source): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクト内の画像を置き換える
	 * @link http://php.net/manual/ja/imagick.setimage.php
	 * @param Imagick $replace <p>
	 * 置き換える Imagick オブジェクト。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setimage(Imagick $replace): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 新しい画像を作成する
	 * @link http://php.net/manual/ja/imagick.newimage.php
	 * @param int $cols <p>
	 * 新しい画像のカラム数。
	 * </p>
	 * @param int $rows <p>
	 * 新しい画像の行数。
	 * </p>
	 * @param mixed $background <p>
	 * この画像で使用する背景色。
	 * </p>
	 * @param string $format [optional] <p>
	 * 画像フォーマット。このパラメータは Imagick バージョン 2.0.1
	 * で追加されました。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function newimage(int $cols, int $rows, $background, string $format = null): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 新しい画像を作成する
	 * @link http://php.net/manual/ja/imagick.newpseudoimage.php
	 * @param int $columns <p>
	 * 新しい画像のカラム数。
	 * </p>
	 * @param int $rows <p>
	 * 新しい画像の行数。
	 * </p>
	 * @param string $pseudoString <p>
	 * 疑似画像定義を含む文字列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function newpseudoimage(int $columns, int $rows, string $pseudoString): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの圧縮形式を取得する
	 * @link http://php.net/manual/ja/imagick.getcompression.php
	 * @return int 圧縮定数を返します。
	 */
	public function getcompression(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの圧縮品質を取得する
	 * @link http://php.net/manual/ja/imagick.getcompressionquality.php
	 * @return int 圧縮品質を表す整数値を返します。
	 */
	public function getcompressionquality(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ImageMagick API の著作権情報を文字列で返す
	 * @link http://php.net/manual/ja/imagick.getcopyright.php
	 * @return string Imagemagick および Magickwand C API の著作権情報を含む文字列を返します。
	 */
	public static function getcopyright(): string {}

	/**
	 * @param $pattern [optional]
	 */
	public static function getconfigureoptions($pattern) {}

	public static function getfeatures() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像シーケンスに関連付けられたファイル名を取得する
	 * @link http://php.net/manual/ja/imagick.getfilename.php
	 * @return string 成功した場合に文字列を返します。
	 */
	public function getfilename(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Imagick オブジェクトのフォーマットを取得する
	 * @link http://php.net/manual/ja/imagick.getformat.php
	 * @return string 画像フォーマットを返します。
	 */
	public function getformat(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ImageMagick のホーム URL を返す
	 * @link http://php.net/manual/ja/imagick.gethomeurl.php
	 * @return string imagemagick のホームページへのリンクを返します。
	 */
	public static function gethomeurl(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトのインターレース方式を取得する
	 * @link http://php.net/manual/ja/imagick.getinterlacescheme.php
	 * @return int インターレース方式
	 * を返します。
	 */
	public function getinterlacescheme(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定したキーに対応する値を返す
	 * @link http://php.net/manual/ja/imagick.getoption.php
	 * @param string $key <p>
	 * オプションの名前。
	 * </p>
	 * @return string 指定したキーに対応する値を返します。
	 */
	public function getoption(string $key): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ImageMagick パッケージ名を返す
	 * @link http://php.net/manual/ja/imagick.getpackagename.php
	 * @return string ImageMagick パッケージ名を文字列で返します。
	 */
	public static function getpackagename(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ページのジオメトリを返す
	 * @link http://php.net/manual/ja/imagick.getpage.php
	 * @return array Imagick オブジェクトに関連付けられたページのジオメトリを返します。
	 * "width"、"height"、"x" そして "y" というキーを持つ連想配列となります。
	 * エラー時に ImagickException をスローします。
	 */
	public function getpage(): array {}

	public static function getquantum() {}

	public static function gethdrienabled() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * quantum depth を取得する
	 * @link http://php.net/manual/ja/imagick.getquantumdepth.php
	 * @return array Imagick quantum depth を文字列で返します。
	 */
	public static function getquantumdepth(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Imagick quantum range を返す
	 * @link http://php.net/manual/ja/imagick.getquantumrange.php
	 * @return array quantum range を連想配列で返します。
	 * integer ("quantumRangeLong") と
	 * string ("quantumRangeString") が含まれます。
	 */
	public static function getquantumrange(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ImageMagick のリリース日を返す
	 * @link http://php.net/manual/ja/imagick.getreleasedate.php
	 * @return string ImageMagick のリリース日を文字列で返します。
	 */
	public static function getreleasedate(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定したリソースのメモリ使用状況を返す
	 * @link http://php.net/manual/ja/imagick.getresource.php
	 * @param int $type <p>
	 * リソース型定数
	 * の一覧を参照ください。
	 * </p>
	 * @return int 指定したリソースのメモリ使用状況をメガバイト単位で返します。
	 */
	public static function getresource(int $type): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定したリソースの制限を返す
	 * @link http://php.net/manual/ja/imagick.getresourcelimit.php
	 * @param int $type <p>
	 * リソース型定数
	 * の一覧を参照ください。
	 * </p>
	 * @return int 指定したリソースの制限をメガバイト単位で返します。
	 */
	public static function getresourcelimit(int $type): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 水平方向および垂直方向のサンプリング係数を取得する
	 * @link http://php.net/manual/ja/imagick.getsamplingfactors.php
	 * @return array 画像の水平方向および垂直方向のサンプリング係数を含む連想配列を返します。
	 */
	public function getsamplingfactors(): array {}

	public function getsize() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ImageMagick API のバージョンを返す
	 * @link http://php.net/manual/ja/imagick.getversion.php
	 * @return array ImageMagick API のバージョンを文字列と数値で返します。
	 */
	public static function getversion(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトのデフォルト背景色を設定する
	 * @link http://php.net/manual/ja/imagick.setbackgroundcolor.php
	 * @param mixed $background
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setbackgroundcolor($background): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトのデフォルトの圧縮方式を設定する
	 * @link http://php.net/manual/ja/imagick.setcompression.php
	 * @param int $compression
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setcompression(int $compression): bool {}

	/**
	 * (PECL imagick 0.9.10-0.9.9)<br/>
	 * オブジェクトのデフォルトの圧縮品質を設定する
	 * @link http://php.net/manual/ja/imagick.setcompressionquality.php
	 * @param int $quality
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setcompressionquality(int $quality): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像を読み書きする前にファイル名を設定する
	 * @link http://php.net/manual/ja/imagick.setfilename.php
	 * @param string $filename
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setfilename(string $filename): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Imagick オブジェクトのフォーマットを設定する
	 * @link http://php.net/manual/ja/imagick.setformat.php
	 * @param string $format
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setformat(string $format): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の圧縮を設定する
	 * @link http://php.net/manual/ja/imagick.setinterlacescheme.php
	 * @param int $interlace_scheme
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setinterlacescheme(int $interlace_scheme): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オプションを設定する
	 * @link http://php.net/manual/ja/imagick.setoption.php
	 * @param string $key
	 * @param string $value
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setoption(string $key, string $value): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Imagick オブジェクトのページジオメトリを設定する
	 * @link http://php.net/manual/ja/imagick.setpage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setpage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 特定のリソースの制限をメガバイト単位で設定する
	 * @link http://php.net/manual/ja/imagick.setresourcelimit.php
	 * @param int $type <p>
	 * リソースタイプ定数
	 * のリストを参照ください。
	 * </p>
	 * @param int $limit <p>
	 * リソースの制限。単位は、制限するリソースの種類によって異なります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public static function setresourcelimit(int $type, int $limit): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の解像度を設定する
	 * @link http://php.net/manual/ja/imagick.setresolution.php
	 * @param float $x_resolution <p>
	 * 水平方向の解像度。
	 * </p>
	 * @param float $y_resolution <p>
	 * 垂直方向の解像度。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setresolution(float $x_resolution, float $y_resolution): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像のサンプリング係数を設定する
	 * @link http://php.net/manual/ja/imagick.setsamplingfactors.php
	 * @param array $factors
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setsamplingfactors(array $factors): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Imagick オブジェクトのサイズを設定する
	 * @link http://php.net/manual/ja/imagick.setsize.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setsize(int $columns, int $rows): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像タイプ属性を設定する
	 * @link http://php.net/manual/ja/imagick.settype.php
	 * @param int $image_type
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function settype(int $image_type): bool {}

	public function key() {}

	public function next() {}

	public function rewind() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在のアイテムが有効かどうかを調べる
	 * @link http://php.net/manual/ja/imagick.valid.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在の Imagick オブジェクトへの参照を返す
	 * @link http://php.net/manual/ja/imagick.current.php
	 * @return Imagick 成功した場合に自分自身を返します。
	 */
	public function current(): Imagick {}

	/**
	 * @param $brightness
	 * @param $contrast
	 * @param $CHANNEL [optional]
	 */
	public function brightnesscontrastimage($brightness, $contrast, $CHANNEL) {}

	/**
	 * @param $color_matrix
	 */
	public function colormatriximage($color_matrix) {}

	/**
	 * @param $radius
	 * @param $sigma
	 * @param $threshold
	 * @param $CHANNEL
	 */
	public function selectiveblurimage($radius, $sigma, $threshold, $CHANNEL) {}

	/**
	 * @param $angle
	 * @param $CHANNEL [optional]
	 */
	public function rotationalblurimage($angle, $CHANNEL) {}

	/**
	 * @param $type
	 * @param $width
	 * @param $height
	 * @param $CHANNEL [optional]
	 */
	public function statisticimage($type, $width, $height, $CHANNEL) {}

	/**
	 * @param Imagick $Imagick
	 * @param $offset [optional]
	 * @param $similarity [optional]
	 * @param $similarity_threshold [optional]
	 * @param $metric [optional]
	 */
	public function subimagematch(Imagick $Imagick, &$offset, &$similarity, &$similarity_threshold, &$metric) {}

	/**
	 * @param Imagick $Imagick
	 * @param $offset [optional]
	 * @param $similarity [optional]
	 * @param $similarity_threshold [optional]
	 * @param $metric [optional]
	 */
	public function similarityimage(Imagick $Imagick, &$offset, &$similarity, &$similarity_threshold, &$metric) {}

	/**
	 * @param $key
	 * @param $value
	 */
	public static function setregistry($key, $value) {}

	/**
	 * @param $key
	 */
	public static function getregistry($key) {}

	public static function listregistry() {}

	/**
	 * @param $morphologyMethod
	 * @param $iterations
	 * @param ImagickKernel $ImagickKernel
	 * @param $CHANNEL [optional]
	 */
	public function morphology($morphologyMethod, $iterationsImagickKernel , $ImagickKernel, $CHANNEL) {}

	/**
	 * @param ImagickKernel $ImagickKernel
	 * @param $CHANNEL [optional]
	 */
	public function filter(ImagickKernel $ImagickKernel, $CHANNEL) {}

	/**
	 * @param $antialias
	 */
	public function setantialias($antialias) {}

	public function getantialias() {}

	/**
	 * @param $antialias
	 */
	public function colordecisionlistimage($antialias) {}

	/**
	 * @param $CHANNEL
	 */
	public function autogammaimage($CHANNEL) {}

}

/**
 * @method ImagickDraw clone() (PECL imagick 2.0.0)<br/>指定した ImagickDraw オブジェクトの完全なコピーを作成する
 * @link http://php.net/manual/ja/class.imagickdraw.php
 */
class ImagickDraw  {

	public function resetvectorgraphics() {}

	public function gettextkerning() {}

	/**
	 * @param $kerning
	 */
	public function settextkerning($kerning) {}

	public function gettextinterwordspacing() {}

	/**
	 * @param $spacing
	 */
	public function settextinterwordspacing($spacing) {}

	public function gettextinterlinespacing() {}

	/**
	 * @param $spacing
	 */
	public function settextinterlinespacing($spacing) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ImagickDraw コンストラクタ
	 * @link http://php.net/manual/ja/imagickdraw.construct.php
	 */
	public function __construct() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの塗りつぶしに使用する色を設定する
	 * @link http://php.net/manual/ja/imagickdraw.setfillcolor.php
	 * @param ImagickPixel $fill_pixel <p>
	 * 色を表す ImagickPixel。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setfillcolor(ImagickPixel $fill_pixel): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 色やテクスチャによる塗りつぶしの際の透過度を設定する
	 * @link http://php.net/manual/ja/imagickdraw.setfillalpha.php
	 * @param float $opacity <p>
	 * 塗りつぶしのアルファ値。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setfillalpha(float $opacity): bool {}

	/**
	 * @param $x_resolution
	 * @param $y_resolution
	 */
	public function setresolution($x_resolution, $y_resolution) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの縁取りに使用する色を設定する
	 * @link http://php.net/manual/ja/imagickdraw.setstrokecolor.php
	 * @param ImagickPixel $stroke_pixel <p>
	 * 縁取り色。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setstrokecolor(ImagickPixel $stroke_pixel): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの枠線の透明度を指定する
	 * @link http://php.net/manual/ja/imagickdraw.setstrokealpha.php
	 * @param float $opacity <p>
	 * 透明度。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setstrokealpha(float $opacity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの枠線の描画に使用する線の幅を設定する
	 * @link http://php.net/manual/ja/imagickdraw.setstrokewidth.php
	 * @param float $stroke_width <p>
	 * 線の幅。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setstrokewidth(float $stroke_width): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ImagickDraw をクリアする
	 * @link http://php.net/manual/ja/imagickdraw.clear.php
	 * @return bool ImagickDraw オブジェクトを返します。
	 */
	public function clear(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 円を描画する
	 * @link http://php.net/manual/ja/imagickdraw.circle.php
	 * @param float $ox <p>
	 * 原点の x 座標。
	 * </p>
	 * @param float $oy <p>
	 * 原点の y 座標。
	 * </p>
	 * @param float $px <p>
	 * 周囲の x 座標。
	 * </p>
	 * @param float $py <p>
	 * 周囲の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function circle(float $ox, float $oy, float $px, float $py): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像上にテキストを描画する
	 * @link http://php.net/manual/ja/imagickdraw.annotation.php
	 * @param float $x <p>
	 * テキストを描画する x 座標。
	 * </p>
	 * @param float $y <p>
	 * テキストを描画する y 座標。
	 * </p>
	 * @param string $text <p>
	 * 画像上に描画するテキスト。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function annotation(float $x, float $y, string $text): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストをアンチエイリアス処理するかどうかを制御する
	 * @link http://php.net/manual/ja/imagickdraw.settextantialias.php
	 * @param bool $antiAlias
	 * @return bool 値を返しません。
	 */
	public function settextantialias(bool $antiAlias): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストのコードセットを指定する
	 * @link http://php.net/manual/ja/imagickdraw.settextencoding.php
	 * @param string $encoding <p>
	 * エンコーディング名。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function settextencoding(string $encoding): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストによる注記を行う際に使用するフォントを設定する
	 * @link http://php.net/manual/ja/imagickdraw.setfont.php
	 * @param string $font_name
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setfont(string $font_name): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストによる注記を行う際に使用するフォントファミリーを設定する
	 * @link http://php.net/manual/ja/imagickdraw.setfontfamily.php
	 * @param string $font_family <p>
	 * フォントファミリー。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setfontfamily(string $font_family): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストによる注記を行う際に使用するフォントのポイント数を設定する
	 * @link http://php.net/manual/ja/imagickdraw.setfontsize.php
	 * @param float $pointsize <p>
	 * ポイント数。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setfontsize(float $pointsize): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストによる注記を行う際に使用するフォントのスタイルを設定する
	 * @link http://php.net/manual/ja/imagickdraw.setfontstyle.php
	 * @param int $style <p>
	 * STYLETYPE_ 定数。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setfontstyle(int $style): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * フォントの重さを設定する
	 * @link http://php.net/manual/ja/imagickdraw.setfontweight.php
	 * @param int $font_weight
	 * @return bool
	 */
	public function setfontweight(int $font_weight): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * フォントを返す
	 * @link http://php.net/manual/ja/imagickdraw.getfont.php
	 * @return string 成功した場合に文字列、フォントが設定されていない場合に false を返します。
	 */
	public function getfont(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * フォントファミリーを返す
	 * @link http://php.net/manual/ja/imagickdraw.getfontfamily.php
	 * @return string 現在選択されているフォントファミリー、
	 * あるいはフォントファミリーが設定されていない場合に false を返します。
	 */
	public function getfontfamily(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * フォントのポイント数を返す
	 * @link http://php.net/manual/ja/imagickdraw.getfontsize.php
	 * @return float 現在の ImagickDraw オブジェクトに関連付けられているフォントのサイズを返します。
	 */
	public function getfontsize(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * フォントのスタイルを返す
	 * @link http://php.net/manual/ja/imagickdraw.getfontstyle.php
	 * @return int ImagickDraw オブジェクトに関連付けられたフォントのスタイルを表す定数 (STYLE_)、
	 * あるいはスタイルが設定されていない場合に 0 を返します。
	 */
	public function getfontstyle(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * フォントの重さを返す
	 * @link http://php.net/manual/ja/imagickdraw.getfontweight.php
	 * @return int 成功した場合に整数値、重さが設定されていない場合に 0 を返します。
	 */
	public function getfontweight(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 関連付けられたすべてのリソースを開放する
	 * @link http://php.net/manual/ja/imagickdraw.destroy.php
	 * @return bool 値を返しません。
	 */
	public function destroy(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 矩形を描画する
	 * @link http://php.net/manual/ja/imagickdraw.rectangle.php
	 * @param float $x1 <p>
	 * 左上の角の x 座標。
	 * </p>
	 * @param float $y1 <p>
	 * 左上の角の y 座標。
	 * </p>
	 * @param float $x2 <p>
	 * 右下の角の x 座標。
	 * </p>
	 * @param float $y2 <p>
	 * 右下の角の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function rectangle(float $x1, float $y1, float $x2, float $y2): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 角が丸い矩形を描画する
	 * @link http://php.net/manual/ja/imagickdraw.roundrectangle.php
	 * @param float $x1 <p>
	 * 左上の角の x 座標。
	 * </p>
	 * @param float $y1 <p>
	 * 左上の角の y 座標。
	 * </p>
	 * @param float $x2 <p>
	 * 右下の角の x 座標。
	 * </p>
	 * @param float $y2 <p>
	 * 右下の角の y 座標。
	 * </p>
	 * @param float $rx <p>
	 * x 方向の丸め。
	 * </p>
	 * @param float $ry <p>
	 * y 方向の丸め。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function roundrectangle(float $x1, float $y1, float $x2, float $y2, float $rx, float $ry): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像上に楕円を描画する
	 * @link http://php.net/manual/ja/imagickdraw.ellipse.php
	 * @param float $ox
	 * @param float $oy
	 * @param float $rx
	 * @param float $ry
	 * @param float $start
	 * @param float $end
	 * @return bool 値を返しません。
	 */
	public function ellipse(float $ox, float $oy, float $rx, float $ry, float $start, float $end): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在の座標系を水平方向に傾ける
	 * @link http://php.net/manual/ja/imagickdraw.skewx.php
	 * @param float $degrees <p>
	 * 傾斜角。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function skewx(float $degrees): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在の座標系を垂直方向に傾ける
	 * @link http://php.net/manual/ja/imagickdraw.skewy.php
	 * @param float $degrees <p>
	 * 傾斜角。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function skewy(float $degrees): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在の座標系に変換を適用する
	 * @link http://php.net/manual/ja/imagickdraw.translate.php
	 * @param float $x <p>
	 * 水平方向の変換。
	 * </p>
	 * @param float $y <p>
	 * 垂直方向の変換。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function translate(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 直線を描画する
	 * @link http://php.net/manual/ja/imagickdraw.line.php
	 * @param float $sx <p>
	 * 開始位置の x 座標。
	 * </p>
	 * @param float $sy <p>
	 * 開始位置の y 座標。
	 * </p>
	 * @param float $ex <p>
	 * 終了位置の x 座標。
	 * </p>
	 * @param float $ey <p>
	 * 終了位置の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function line(float $sx, float $sy, float $ex, float $ey): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 円弧を描画する
	 * @link http://php.net/manual/ja/imagickdraw.arc.php
	 * @param float $sx <p>
	 * 矩形の開始位置の x 座標。
	 * </p>
	 * @param float $sy <p>
	 * 矩形の開始位置の y 座標。
	 * </p>
	 * @param float $ex <p>
	 * 矩形の終了位置の x 座標。
	 * </p>
	 * @param float $ey <p>
	 * 矩形の終了位置の y 座標。
	 * </p>
	 * @param float $sd <p>
	 * 開始位置の角度。
	 * </p>
	 * @param float $ed <p>
	 * 終了位置の角度。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function arc(float $sx, float $sy, float $ex, float $ey, float $sd, float $ed): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像の opacity チャネル上に描画する
	 * @link http://php.net/manual/ja/imagickdraw.matte.php
	 * @param float $x <p>
	 * マットの x 座標。
	 * </p>
	 * @param float $y <p>
	 * マットの y 座標。
	 * </p>
	 * @param int $paintMethod <p>
	 * PAINT_ 定数。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function matte(float $x, float $y, int $paintMethod): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 多角形を描画する
	 * @link http://php.net/manual/ja/imagickdraw.polygon.php
	 * @param array $coordinates <p>
	 * 多次元配列。 array( array( 'x' => 3, 'y' => 4 ),
	 * array( 'x' => 2, 'y' => 6 ) ); のような形式となります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function polygon(array $coordinates): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 点を描画する
	 * @link http://php.net/manual/ja/imagickdraw.point.php
	 * @param float $x <p>
	 * 点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function point(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストの装飾を返す
	 * @link http://php.net/manual/ja/imagickdraw.gettextdecoration.php
	 * @return int DECORATION_ 定数のいずれか、あるいは装飾が設定されていない場合に
	 * 0 を返します。
	 */
	public function gettextdecoration(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストによる注記の際に使用するコードセットを返す
	 * @link http://php.net/manual/ja/imagickdraw.gettextencoding.php
	 * @return string コードセットを表す文字列、
	 * あるいはエンコーディングが設定されていない場合に false を返します。
	 */
	public function gettextencoding(): string {}

	public function getfontstretch() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストによる注記を行う際に使用するフォントの伸縮を設定する
	 * @link http://php.net/manual/ja/imagickdraw.setfontstretch.php
	 * @param int $fontStretch <p>
	 * STRETCH_ 定数。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setfontstretch(int $fontStretch): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 縁取りの枠線をアンチエイリアス処理するかどうかを制御する
	 * @link http://php.net/manual/ja/imagickdraw.setstrokeantialias.php
	 * @param bool $stroke_antialias <p>
	 * アンチエイリアス設定。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setstrokeantialias(bool $stroke_antialias): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストの配置を指定する
	 * @link http://php.net/manual/ja/imagickdraw.settextalignment.php
	 * @param int $alignment <p>
	 * ALIGN_ 定数。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function settextalignment(int $alignment): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 装飾を指定する
	 * @link http://php.net/manual/ja/imagickdraw.settextdecoration.php
	 * @param int $decoration <p>
	 * DECORATION_ 定数。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function settextdecoration(int $decoration): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 背景の矩形の色を指定する
	 * @link http://php.net/manual/ja/imagickdraw.settextundercolor.php
	 * @param ImagickPixel $under_color <p>
	 * 背景色。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function settextundercolor(ImagickPixel $under_color): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * キャンバス全体の大きさを設定する
	 * @link http://php.net/manual/ja/imagickdraw.setviewbox.php
	 * @param int $x1 <p>
	 * 左の x 座標。
	 * </p>
	 * @param int $y1 <p>
	 * 左の y 座標。
	 * </p>
	 * @param int $x2 <p>
	 * 右の x 座標。
	 * </p>
	 * @param int $y2 <p>
	 * 右の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setviewbox(int $x1, int $y1, int $x2, int $y2): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在のアフィン変換行列を設定する
	 * @link http://php.net/manual/ja/imagickdraw.affine.php
	 * @param array $affine <p>
	 * アフィン行列のパラメータ。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function affine(array $affine): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ベジエ曲線を描画する
	 * @link http://php.net/manual/ja/imagickdraw.bezier.php
	 * @param array $coordinates <p>
	 * 多次元配列。array( array( 'x' => 1, 'y' => 2 ), array( 'x' => 3, 'y' => 4 ) )
	 * のような形式。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function bezier(array $coordinates): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在の画像上に別の画像を合成する
	 * @link http://php.net/manual/ja/imagickdraw.composite.php
	 * @param int $compose <p>
	 * 合成演算子。COMPOSITE_ 定数のいずれか。
	 * </p>
	 * @param float $x <p>
	 * 左上角の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 左上角の y 座標。
	 * </p>
	 * @param float $width <p>
	 * 合成する画像の幅。
	 * </p>
	 * @param float $height <p>
	 * 合成する画像の高さ。
	 * </p>
	 * @param Imagick $compositeWand <p>
	 * 合成する画像を取得する Imagick オブジェクト。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function composite(int $compose, float $x, float $y, float $width, float $height, Imagick $compositeWand): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 画像上に色を描画する
	 * @link http://php.net/manual/ja/imagickdraw.color.php
	 * @param float $x <p>
	 * 描画位置の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 描画位置の y 座標。
	 * </p>
	 * @param int $paintMethod <p>
	 * PAINT_ 定数のいずれか。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function color(float $x, float $y, int $paintMethod): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * コメントを追加する
	 * @link http://php.net/manual/ja/imagickdraw.comment.php
	 * @param string $comment <p>
	 * ベクター出力ストリームに追加するコメント文字列。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function comment(string $comment): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在のクリッピングパスの ID を取得する
	 * @link http://php.net/manual/ja/imagickdraw.getclippath.php
	 * @return string クリッピングパスの ID を含む文字列、あるいはパスが存在しない場合に false を返します。
	 */
	public function getclippath(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在の多角形塗りつぶしルールを返す
	 * @link http://php.net/manual/ja/imagickdraw.getcliprule.php
	 * @return int FILLRULE_ 定数のいずれかを返します。
	 */
	public function getcliprule(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * クリップパスの単位の解釈を返す
	 * @link http://php.net/manual/ja/imagickdraw.getclipunits.php
	 * @return int 成功した場合に整数値を返します。
	 */
	public function getclipunits(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 塗りつぶし色を返す
	 * @link http://php.net/manual/ja/imagickdraw.getfillcolor.php
	 * @return ImagickPixel ImagickPixel オブジェクトを返します。
	 */
	public function getfillcolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 描画時の透過度を返す
	 * @link http://php.net/manual/ja/imagickdraw.getfillopacity.php
	 * @return float 透過度を返します。
	 */
	public function getfillopacity(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 塗りつぶしルールを返す
	 * @link http://php.net/manual/ja/imagickdraw.getfillrule.php
	 * @return int FILLRULE_ 定数を返します。
	 */
	public function getfillrule(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストの配置時の gravity を返す
	 * @link http://php.net/manual/ja/imagickdraw.getgravity.php
	 * @return int 成功した場合に GRAVITY_ 定数、gravity が設定されていない場合に 0 を返します。
	 */
	public function getgravity(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在の縁取りのアンチエイリアス設定を返す
	 * @link http://php.net/manual/ja/imagickdraw.getstrokeantialias.php
	 * @return bool アンチエイリアスがオンの場合に <b>TRUE</b>、オフの場合に false を返します。
	 */
	public function getstrokeantialias(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの縁取りに使用する色を返す
	 * @link http://php.net/manual/ja/imagickdraw.getstrokecolor.php
	 * @return ImagickPixel 色を表す ImagickPixel オブジェクトを返します。
	 */
	public function getstrokecolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * パスの描画に使用する破線のパターンを表す配列を返す
	 * @link http://php.net/manual/ja/imagickdraw.getstrokedasharray.php
	 * @return array 成功した場合に配列、設定されていない場合は空の配列を返します。
	 */
	public function getstrokedasharray(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 破線パターンにおける破線の開始オフセットを返す
	 * @link http://php.net/manual/ja/imagickdraw.getstrokedashoffset.php
	 * @return float オフセットを表す float 値、あるいは設定されていない場合に 0 を返します。
	 */
	public function getstrokedashoffset(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 開かれたサブパスを描画する際に使用する端点の形状を返す
	 * @link http://php.net/manual/ja/imagickdraw.getstrokelinecap.php
	 * @return int LINECAP_ 定数のいずれか、あるいは設定されていない場合に 0 を返します。
	 */
	public function getstrokelinecap(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * パスの角を描画する際に使用する形状を返す
	 * @link http://php.net/manual/ja/imagickdraw.getstrokelinejoin.php
	 * @return int LINEJOIN_ 定数のいずれか、あるいは設定されていない場合に 0 を返します。
	 */
	public function getstrokelinejoin(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * マイターリミットを返す
	 * @link http://php.net/manual/ja/imagickdraw.getstrokemiterlimit.php
	 * @return int マイターリミットを表す整数値、あるいは
	 * マイターリミットが設定されていない場合に 0 を返します。
	 */
	public function getstrokemiterlimit(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの枠線の透明度を返す
	 * @link http://php.net/manual/ja/imagickdraw.getstrokeopacity.php
	 * @return float 透明度を表す double 値を返します。
	 */
	public function getstrokeopacity(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの枠線の描画に使用する線の幅を返す
	 * @link http://php.net/manual/ja/imagickdraw.getstrokewidth.php
	 * @return float 線幅を表す double 値を返します。
	 */
	public function getstrokewidth(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストの配置を返す
	 * @link http://php.net/manual/ja/imagickdraw.gettextalignment.php
	 * @return int ALIGN_ 定数のいずれか、あるいは設定されていない場合に 0 を返します。
	 */
	public function gettextalignment(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在のテキストのアンチエイリアス設定を返す
	 * @link http://php.net/manual/ja/imagickdraw.gettextantialias.php
	 * @return bool テキストをアンチエイリアス処理する場合に true、しない場合に false を返します。
	 */
	public function gettextantialias(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ベクターグラフィックを含む文字列を返す
	 * @link http://php.net/manual/ja/imagickdraw.getvectorgraphics.php
	 * @return string ベクターグラフィックを文字列で返します。
	 */
	public function getvectorgraphics(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストの背景色を返す
	 * @link http://php.net/manual/ja/imagickdraw.gettextundercolor.php
	 * @return ImagickPixel 色を表す ImagickPixel オブジェクトを返します。
	 */
	public function gettextundercolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * パス要素を現在のパスに追加する
	 * @link http://php.net/manual/ja/imagickdraw.pathclose.php
	 * @return bool 値を返しません。
	 */
	public function pathclose(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 三次ベジエ曲線を描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathcurvetoabsolute.php
	 * @param float $x1 <p>
	 * 最初の制御点の x 座標。
	 * </p>
	 * @param float $y1 <p>
	 * 最初の制御点の y 座標。
	 * </p>
	 * @param float $x2 <p>
	 * 2 番目の制御点の x 座標。
	 * </p>
	 * @param float $y2 <p>
	 * 2 番目の制御点の y 座標。
	 * </p>
	 * @param float $x <p>
	 * 終点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 終点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathcurvetoabsolute(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 三次ベジエ曲線を描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathcurvetorelative.php
	 * @param float $x1 <p>
	 * 開始制御点の x 座標。
	 * </p>
	 * @param float $y1 <p>
	 * 開始制御点の y 座標。
	 * </p>
	 * @param float $x2 <p>
	 * 終了制御点の x 座標。
	 * </p>
	 * @param float $y2 <p>
	 * 終了制御点の y 座標。
	 * </p>
	 * @param float $x <p>
	 * 終点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 終点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathcurvetorelative(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 二次ベジエ曲線を描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathcurvetoquadraticbezierabsolute.php
	 * @param float $x1 <p>
	 * 制御点の x 座標。
	 * </p>
	 * @param float $y1 <p>
	 * 制御点の y 座標。
	 * </p>
	 * @param float $x <p>
	 * 終点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 終点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathcurvetoquadraticbezierabsolute(float $x1, float $y1, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 二次ベジエ曲線を描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathcurvetoquadraticbezierrelative.php
	 * @param float $x1 <p>
	 * 始点の x 座標。
	 * </p>
	 * @param float $y1 <p>
	 * 始点の y 座標。
	 * </p>
	 * @param float $x <p>
	 * 終点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 終点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathcurvetoquadraticbezierrelative(float $x1, float $y1, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 二次ベジエ曲線を描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php
	 * @param float $x <p>
	 * 終点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 終点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathcurvetoquadraticbeziersmoothabsolute(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 二次ベジエ曲線を描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php
	 * @param float $x <p>
	 * 終点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 終点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathcurvetoquadraticbeziersmoothrelative(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 三次ベジエ曲線を描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathcurvetosmoothabsolute.php
	 * @param float $x2 <p>
	 * 2 番目の制御点の x 座標。
	 * </p>
	 * @param float $y2 <p>
	 * 2 番目の制御点の y 座標。
	 * </p>
	 * @param float $x <p>
	 * 終点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 終点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathcurvetosmoothabsolute(float $x2, float $y2, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 三次ベジエ曲線を描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathcurvetosmoothrelative.php
	 * @param float $x2 <p>
	 * 2 番目の制御点の x 座標。
	 * </p>
	 * @param float $y2 <p>
	 * 2 番目の制御点の y 座標。
	 * </p>
	 * @param float $x <p>
	 * 終点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 終点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathcurvetosmoothrelative(float $x2, float $y2, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 楕円弧を描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathellipticarcabsolute.php
	 * @param float $rx <p>
	 * x 方向の半径。
	 * </p>
	 * @param float $ry <p>
	 * y 方向の半径。
	 * </p>
	 * @param float $x_axis_rotation <p>
	 * x 軸の回転。
	 * </p>
	 * @param bool $large_arc_flag <p>
	 * large arc フラグ。
	 * </p>
	 * @param bool $sweep_flag <p>
	 * sweep フラグ。
	 * </p>
	 * @param float $x <p>
	 * x 座標。
	 * </p>
	 * @param float $y <p>
	 * y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathellipticarcabsolute(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 楕円弧を描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathellipticarcrelative.php
	 * @param float $rx <p>
	 * x 方向の半径。
	 * </p>
	 * @param float $ry <p>
	 * y 方向の半径。
	 * </p>
	 * @param float $x_axis_rotation <p>
	 * x 軸の回転。
	 * </p>
	 * @param bool $large_arc_flag <p>
	 * large arc フラグ。
	 * </p>
	 * @param bool $sweep_flag <p>
	 * sweep フラグ。
	 * </p>
	 * @param float $x <p>
	 * x 座標。
	 * </p>
	 * @param float $y <p>
	 * y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathellipticarcrelative(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在のパスを終了する
	 * @link http://php.net/manual/ja/imagickdraw.pathfinish.php
	 * @return bool 値を返しません。
	 */
	public function pathfinish(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 直線パスを描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathlinetoabsolute.php
	 * @param float $x <p>
	 * 始点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 終点の x 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathlinetoabsolute(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 直線パスを描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathlinetorelative.php
	 * @param float $x <p>
	 * 始点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 始点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathlinetorelative(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 水平直線パスを描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathlinetohorizontalabsolute.php
	 * @param float $x <p>
	 * x 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathlinetohorizontalabsolute(float $x): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 水平直線パスを描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathlinetohorizontalrelative.php
	 * @param float $x <p>
	 * x 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathlinetohorizontalrelative(float $x): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 垂直直線パスを描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathlinetoverticalabsolute.php
	 * @param float $y <p>
	 * y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathlinetoverticalabsolute(float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 垂直直線パスを描画する
	 * @link http://php.net/manual/ja/imagickdraw.pathlinetoverticalrelative.php
	 * @param float $y <p>
	 * y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathlinetoverticalrelative(float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 新しいサブパスを開始する
	 * @link http://php.net/manual/ja/imagickdraw.pathmovetoabsolute.php
	 * @param float $x <p>
	 * 始点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 始点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathmovetoabsolute(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 新しいサブパスを開始する
	 * @link http://php.net/manual/ja/imagickdraw.pathmovetorelative.php
	 * @param float $x <p>
	 * 始点の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 始点の y 座標。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pathmovetorelative(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * パス描画リストの開始を宣言する
	 * @link http://php.net/manual/ja/imagickdraw.pathstart.php
	 * @return bool 値を返しません。
	 */
	public function pathstart(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 線分群を描画する
	 * @link http://php.net/manual/ja/imagickdraw.polyline.php
	 * @param array $coordinates <p>
	 * x 座標および y 座標の配列。
	 * array( array( 'x' => 4, 'y' => 6 ), array( 'x' => 8, 'y' => 10 ) )
	 * のような形式となります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function polyline(array $coordinates): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * クリップパスの定義を終了する
	 * @link http://php.net/manual/ja/imagickdraw.popclippath.php
	 * @return bool 値を返しません。
	 */
	public function popclippath(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 定義リストを終了する
	 * @link http://php.net/manual/ja/imagickdraw.popdefs.php
	 * @return bool 値を返しません。
	 */
	public function popdefs(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * パターン定義を終了する
	 * @link http://php.net/manual/ja/imagickdraw.poppattern.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function poppattern(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * クリップパスの定義を開始する
	 * @link http://php.net/manual/ja/imagickdraw.pushclippath.php
	 * @param string $clip_mask_id <p>
	 * クリップマスク ID。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function pushclippath(string $clip_mask_id): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 後に続くコマンドが、処理の前に名前つき要素を作成することを示す
	 * @link http://php.net/manual/ja/imagickdraw.pushdefs.php
	 * @return bool 値を返しません。
	 */
	public function pushdefs(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 後に続く ImagickDraw::opPattern() までのコマンドが、名前付きパターンを構成することを示す
	 * @link http://php.net/manual/ja/imagickdraw.pushpattern.php
	 * @param string $pattern_id <p>
	 * パターン ID。
	 * </p>
	 * @param float $x <p>
	 * 左上の角の x 座標。
	 * </p>
	 * @param float $y <p>
	 * 左上の角の y 座標。
	 * </p>
	 * @param float $width <p>
	 * パターンの幅。
	 * </p>
	 * @param float $height <p>
	 * パターンの高さ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function pushpattern(string $pattern_id, float $x, float $y, float $width, float $height): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * これまでのすべての描画コマンドを画像上にレンダリングする
	 * @link http://php.net/manual/ja/imagickdraw.render.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function render(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定した回転を現在の座標空間に適用する
	 * @link http://php.net/manual/ja/imagickdraw.rotate.php
	 * @param float $degrees <p>
	 * 回転角度。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function rotate(float $degrees): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 倍率を調整する
	 * @link http://php.net/manual/ja/imagickdraw.scale.php
	 * @param float $x <p>
	 * 水平方向の拡大率。
	 * </p>
	 * @param float $y <p>
	 * 垂直方向の拡大率。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function scale(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定した名前のクリッピングパスを画像に関連付ける
	 * @link http://php.net/manual/ja/imagickdraw.setclippath.php
	 * @param string $clip_mask <p>
	 * クリッピングパスの名前。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setclippath(string $clip_mask): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * クリッピングパスで使用する多角形塗りつぶしルールを設定する
	 * @link http://php.net/manual/ja/imagickdraw.setcliprule.php
	 * @param int $fill_rule <p>
	 * FILLRULE_ 定数。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setcliprule(int $fill_rule): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * クリップパスの単位の解釈を設定する
	 * @link http://php.net/manual/ja/imagickdraw.setclipunits.php
	 * @param int $clip_units <p>
	 * クリップ単位の数。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setclipunits(int $clip_units): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 色やテクスチャによる塗りつぶしの際の透過度を設定する
	 * @link http://php.net/manual/ja/imagickdraw.setfillopacity.php
	 * @param float $fillOpacity <p>
	 * 塗りつぶしの透明度。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setfillopacity(float $fillOpacity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの塗りつぶしパターンとして使用する URL を設定する
	 * @link http://php.net/manual/ja/imagickdraw.setfillpatternurl.php
	 * @param string $fill_url <p>
	 * 塗りつぶしパターンを取得する URL。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setfillpatternurl(string $fill_url): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 多角形の描画時に使用する塗りつぶしルールを設定する
	 * @link http://php.net/manual/ja/imagickdraw.setfillrule.php
	 * @param int $fill_rule <p>
	 * FILLRULE_ 定数。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setfillrule(int $fill_rule): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * テキストの配置時の gravity を設定する
	 * @link http://php.net/manual/ja/imagickdraw.setgravity.php
	 * @param int $gravity <p>
	 * GRAVITY_ 定数。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setgravity(int $gravity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの枠線の描画に使用するパターンを設定する
	 * @link http://php.net/manual/ja/imagickdraw.setstrokepatternurl.php
	 * @param string $stroke_url <p>
	 * URL。
	 * </p>
	 * @return bool imagick.imagickdraw.return.success;
	 */
	public function setstrokepatternurl(string $stroke_url): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 破線パターンにおける破線の開始オフセットを指定する
	 * @link http://php.net/manual/ja/imagickdraw.setstrokedashoffset.php
	 * @param float $dash_offset <p>
	 * 破線のオフセット。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setstrokedashoffset(float $dash_offset): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 開かれたサブパスを描画する際に使用する端点の形状を指定する
	 * @link http://php.net/manual/ja/imagickdraw.setstrokelinecap.php
	 * @param int $linecap <p>
	 * LINECAP_ 定数。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setstrokelinecap(int $linecap): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * パスの角を描画する際に使用する形状を指定する
	 * @link http://php.net/manual/ja/imagickdraw.setstrokelinejoin.php
	 * @param int $linejoin <p>
	 * LINEJOIN_ 定数。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setstrokelinejoin(int $linejoin): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * マイターリミットを指定する
	 * @link http://php.net/manual/ja/imagickdraw.setstrokemiterlimit.php
	 * @param int $miterlimit <p>
	 * マイターリミット。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setstrokemiterlimit(int $miterlimit): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * オブジェクトの枠線の透明度を指定する
	 * @link http://php.net/manual/ja/imagickdraw.setstrokeopacity.php
	 * @param float $stroke_opacity <p>
	 * 枠線の透明度。1.0 は完全に不透明な状態です。
	 * </p>
	 * @return bool 値を返しません。
	 */
	public function setstrokeopacity(float $stroke_opacity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ベクターグラフィックを設定する
	 * @link http://php.net/manual/ja/imagickdraw.setvectorgraphics.php
	 * @param string $xml <p>
	 * ベクターグラフィックを表す xml。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setvectorgraphics(string $xml): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * スタック内の現在の ImagickDraw を破棄し、事前に push された ImagickDraw を返す
	 * @link http://php.net/manual/ja/imagickdraw.pop.php
	 * @return bool 成功した場合に <b>TRUE</b>、失敗した場合に false を返します。
	 */
	public function pop(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 現在の ImagickDraw をコピーしてスタックに格納する
	 * @link http://php.net/manual/ja/imagickdraw.push.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function push(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * パスの描画に使用する破線のパターンを指定する
	 * @link http://php.net/manual/ja/imagickdraw.setstrokedasharray.php
	 * @param array $dashArray <p>
	 * float の配列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setstrokedasharray(array $dashArray): bool {}

	public function getfontresolution() {}

	/**
	 * @param $x
	 * @param $y
	 */
	public function setfontresolution($x, $y) {}

	public function getbordercolor() {}

	/**
	 * @param $bordercolor
	 */
	public function setbordercolor($bordercolor) {}

}

/**
 * @link http://php.net/manual/ja/class.imagickpixeliterator.php
 */
class ImagickPixelIterator implements Iterator, Traversable {

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ImagickPixelIterator のコンストラクタ
	 * @link http://php.net/manual/ja/imagickpixeliterator.construct.php
	 * @param Imagick $wand
	 */
	public function __construct(Imagick $wand) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 新しい pixel iterator を返す
	 * @link http://php.net/manual/ja/imagickpixeliterator.newpixeliterator.php
	 * @param Imagick $wand
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 * ImagickPixelIteratorException をスローします。
	 */
	public function newpixeliterator(Imagick $wand): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 新しい pixel iterator を返す
	 * @link http://php.net/manual/ja/imagickpixeliterator.newpixelregioniterator.php
	 * @param Imagick $wand
	 * @param int $x
	 * @param int $y
	 * @param int $columns
	 * @param int $rows
	 * @return bool 成功した場合に新しい ImagickPixelIterator を返します。
	 * 失敗した場合は ImagickPixelIteratorException をスローします。
	 */
	public function newpixelregioniterator(Imagick $wand, int $x, int $y, int $columns, int $rows): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * pixel iterator の現在の行を返す
	 * @link http://php.net/manual/ja/imagickpixeliterator.getiteratorrow.php
	 * @return int pixel iterator の現在の行を返します。
	 * エラー時には ImagickPixelIteratorException をスローします。
	 */
	public function getiteratorrow(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * pixel iterator の行を設定する
	 * @link http://php.net/manual/ja/imagickpixeliterator.setiteratorrow.php
	 * @param int $row
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setiteratorrow(int $row): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * pixel iterator を最初の行に設定する
	 * @link http://php.net/manual/ja/imagickpixeliterator.setiteratorfirstrow.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setiteratorfirstrow(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * pixel iterator を最後の行に設定する
	 * @link http://php.net/manual/ja/imagickpixeliterator.setiteratorlastrow.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setiteratorlastrow(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 前の行を返す
	 * @link http://php.net/manual/ja/imagickpixeliterator.getpreviousiteratorrow.php
	 * @return array ImagickPixelIterator の前の行を、ImagickPixelWand
	 * オブジェクトの配列として返します。エラー時には
	 * ImagickPixelIteratorException をスローします。
	 */
	public function getpreviousiteratorrow(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ImagickPixel オブジェクトの現在の行を返す
	 * @link http://php.net/manual/ja/imagickpixeliterator.getcurrentiteratorrow.php
	 * @return array ImagickPixel オブジェクトの配列形式で行を返します。これを順次処理することが可能です。
	 */
	public function getcurrentiteratorrow(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * pixel iterator の次の行を返す
	 * @link http://php.net/manual/ja/imagickpixeliterator.getnextiteratorrow.php
	 * @return array 次の行を ImagickPixel オブジェクトの配列で返します。
	 * エラー時には ImagickPixelIteratorException をスローします。
	 */
	public function getnextiteratorrow(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * pixel iterator をリセットする
	 * @link http://php.net/manual/ja/imagickpixeliterator.resetiterator.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function resetiterator(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * pixel iterator を同期する
	 * @link http://php.net/manual/ja/imagickpixeliterator.synciterator.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function synciterator(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * PixelIterator に関連付けられているリソースの割り当てを解除する
	 * @link http://php.net/manual/ja/imagickpixeliterator.destroy.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function destroy(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * PixelIterator に関連付けられたリソースを消去する
	 * @link http://php.net/manual/ja/imagickpixeliterator.clear.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function clear(): bool {}

	/**
	 * @param Imagick $Imagick
	 */
	public static function getpixeliterator(Imagick $Imagick) {}

	/**
	 * @param Imagick $Imagick
	 * @param $x
	 * @param $y
	 * @param $columns
	 * @param $rows
	 */
	public static function getpixelregioniterator(Imagick $Imagick, $x, $y, $columns, $rows) {}

	public function key() {}

	public function next() {}

	public function rewind() {}

	public function current() {}

	public function valid() {}

}

/**
 * @method clone()
 * @link http://php.net/manual/ja/class.imagickpixel.php
 */
class ImagickPixel  {

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ImagickPixel オブジェクトの HSL カラーを正規化したものを返す
	 * @link http://php.net/manual/ja/imagickpixel.gethsl.php
	 * @return array HSL の値をそれぞれ "hue"、
	 * "saturation"、そして "luminosity" というキーに保持する配列を返します。
	 * 失敗した場合に ImagickPixelException をスローします。
	 */
	public function gethsl(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 正規化した HSL カラーを設定する
	 * @link http://php.net/manual/ja/imagickpixel.sethsl.php
	 * @param float $hue <p>
	 * 色相を正規化した値。これは、色相環上での位置
	 * (0 から 1 まで) を表します。ゼロは赤です。
	 * </p>
	 * @param float $saturation <p>
	 * 彩度を正規化した値。1 が最大です。
	 * </p>
	 * @param float $luminosity <p>
	 * 明度を正規化した値。黒が 0、白が 1 で、
	 * 0.5 にすると完全な HS 値が再現されます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function sethsl(float $hue, float $saturation, float $luminosity): bool {}

	/**
	 * @param $color
	 */
	public function getcolorvaluequantum($color) {}

	/**
	 * @param $color_value
	 */
	public function setcolorvaluequantum($color_value) {}

	public function getindex() {}

	/**
	 * @param $index
	 */
	public function setindex($index) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * ImagickPixel のコンストラクタ
	 * @link http://php.net/manual/ja/imagickpixel.construct.php
	 * @param string $color [optional] <p>
	 * このオブジェクトの初期化に使用する色を表すオプションの文字列。
	 * </p>
	 */
	public function __construct(string $color = null) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 色を設定する
	 * @link http://php.net/manual/ja/imagickpixel.setcolor.php
	 * @param string $color <p>
	 * ImagickPixel オブジェクトを初期化する際に使用する色。
	 * </p>
	 * @return bool 色が設定できた場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function setcolor(string $color): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定したチャネルの正規化した値を設定する
	 * @link http://php.net/manual/ja/imagickpixel.setcolorvalue.php
	 * @param int $color <p>
	 * Imagick 色チャネル定数のいずれか。\Imagick::COLOR_GREEN や \Imagick::COLOR_ALPHA など。
	 * </p>
	 * @param float $value <p>
	 * そのチャネルに設定する値。0 から 1 までとなります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function setcolorvalue(int $color, float $value): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 指定した色チャネルの値を正規化したものを取得する
	 * @link http://php.net/manual/ja/imagickpixel.getcolorvalue.php
	 * @param int $color <p>
	 * 調べたい色。Imagick の色定数で指定します。
	 * RGB カラー、CMYK カラー、アルファ値、透明度を指定できます (Imagick::COLOR_BLUE や Imagick::COLOR_MAGENTA など)。
	 * </p>
	 * @return float チャネルの値を正規化した浮動小数点数値を返します。
	 * エラー時には ImagickPixelException をスローします。
	 */
	public function getcolorvalue(int $color): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * このオブジェクトに関連付けられたリソースを消去する
	 * @link http://php.net/manual/ja/imagickpixel.clear.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function clear(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * このオブジェクトに関連付けられているリソースの割り当てを解除する
	 * @link http://php.net/manual/ja/imagickpixel.destroy.php
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function destroy(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * この色と別の色の差を調べる
	 * @link http://php.net/manual/ja/imagickpixel.issimilar.php
	 * @param ImagickPixel $color <p>
	 * このオブジェクトと比較したい ImagickPixel オブジェクト。
	 * </p>
	 * @param float $fuzz <p>
	 * 同じ色であるとみなす最大の誤差。
	 * 理論上の最大値は、3 の平方根 (1.732) となります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を返します。
	 */
	public function issimilar(ImagickPixel $color, float $fuzz): bool {}

	/**
	 * @param $color
	 * @param $fuzz [optional]
	 */
	public function ispixelsimilarquantum($color, $fuzz) {}

	/**
	 * @param $color
	 * @param $fuzz [optional]
	 */
	public function ispixelsimilar($color, $fuzz) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * 色を返す
	 * @link http://php.net/manual/ja/imagickpixel.getcolor.php
	 * @param bool $normalized [optional] <p>
	 * 色を正規化する。
	 * </p>
	 * @return array 各チャネルの値を配列で返します。パラメータに <b>TRUE</b>
	 * を指定した場合は、各値を正規化します。エラー時には
	 * ImagickPixelException をスローします。
	 */
	public function getcolor(bool $normalized = false): array {}

	public function getcolorquantum() {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * 色を文字列で返す
	 * @link http://php.net/manual/ja/imagickpixel.getcolorasstring.php
	 * @return string ImagickPixel オブジェクトの色を文字列で返します。
	 */
	public function getcolorasstring(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * この色に関連付けられている色カウントを返す
	 * @link http://php.net/manual/ja/imagickpixel.getcolorcount.php
	 * @return int 成功した場合に色カウントを返します。失敗した場合に
	 * ImagickPixelException をスローします。
	 */
	public function getcolorcount(): int {}

	/**
	 * @param $colorCount
	 */
	public function setcolorcount($colorCount) {}

}

class ImagickKernel  {

	private function __construct() {}

	/**
	 * @param $array
	 * @param $array [optional]
	 */
	public static function frommatrix($array, $array) {}

	/**
	 * @param $kerneltype
	 * @param $paramstring
	 */
	public static function frombuiltin($kerneltype, $paramstring) {}

	/**
	 * @param ImagickKernel $ImagickKernel
	 */
	public function addkernel(ImagickKernel $ImagickKernel) {}

	public function getmatrix() {}

	public function separate() {}

	public function scale() {}

	public function addunitykernel() {}

}
// End of imagick v.@PACKAGE_VERSION@
?>
