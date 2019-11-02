<?php



namespace {

	/**
	 * <p>これは V8Js 拡張モジュールのコアクラスです。 このクラスのインスタンスはそれぞれ個別のコンテキストを持ち、 その中ですべての JavaScript をコンパイルして実行します。</p>
	 * <p>詳細は <code>V8Js::__construct()</code> を参照ください。</p>
	 * @link https://php.net/manual/ja/class.v8js.php
	 * @since PECL v8js >= 0.1.0
	 */
	class V8Js {

		/**
		 * @var string <p>V8 Javascript Engine のバージョン。</p>
		 * @link https://php.net/manual/ja/class.v8js.php
		 */
		const V8_VERSION = null;

		/**
		 * @var integer <p>何もフラグが立っていません。</p>
		 * @link https://php.net/manual/ja/class.v8js.php
		 */
		const FLAG_NONE = 1;

		/**
		 * @var integer <p>すべての JS オブジェクトを PHP の連想配列にします。</p>
		 * @link https://php.net/manual/ja/class.v8js.php
		 */
		const FLAG_FORCE_ARRAY = 2;

		/**
		 * 新しい V8Js オブジェクトを作成する
		 * <p>新しい V8Js オブジェクトを作成します。</p>
		 * @param string $object_name <p>Javascript に渡すオブジェクトの名前。</p>
		 * @param array $variables <p>Javascript の中で使う PHP の変数のマップ。 <i>array("js で使うときの名前" =&gt; "php の変数名")</i> 形式の連想配列でなければなりません。デフォルトは空の配列です。</p>
		 * @param array $extensions <p><code>V8Js::registerExtension()</code> で登録した拡張の一覧。 作成した V8Js オブジェクトの Javascript コンテキストで利用可能なものでなければなりません。</p> <p><b>注意</b>:</p> <p>自動的に有効にするように登録した拡張については、この配列で指定する必要はありません。 また、ある登録が別の拡張に依存している場合も、依存している拡張は省略できます。デフォルトは空の配列です。</p>
		 * @param bool $report_uncaught_exceptions <p>キャッチできなかった Javascript の例外をその場ですぐに報告するかどうかを制御します。 デフォルトは <b><code>TRUE</code></b> です。<b><code>FALSE</code></b> にしたときは、キャッチできなかった例外へのアクセスには <code>V8Js::getPendingException()</code> を使います。</p>
		 * @return self <p>新しい V8Js コンテキストオブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/v8js.construct.php
		 * @since PECL v8js >= 0.1.0
		 */
		public function __construct(string $object_name = "PHP", array $variables = array(), array $extensions = array(), bool $report_uncaught_exceptions = TRUE) {}

		/**
		 * 文字列を Javascript のコードとして実行する
		 * <p><code>script</code> で渡した文字列を Javascript のコードとしてコンパイルし、実行します。</p>
		 * @param string $script <p>実行したいコード文字列。</p>
		 * @param string $identifier <p>実行するコードの識別子となる文字列。デバッグ時に使います。</p>
		 * @param int $flags <p>実行フラグ。 <i>V8Js::FLAG_&#42;</i> 定数のいずれかでなければならず、デフォルトは <b><code>V8Js::FLAG_NONE</code></b> です。</p><ul> <li> <p><b><code>V8Js::FLAG_NONE</code></b>: 何もフラグが立っていません。</p> </li> <li> <p><b><code>V8Js::FLAG_FORCE_ARRAY</code></b>: PHP に渡されるすべての JS オブジェクトを連想配列にします。</p> </li> </ul>
		 * @return mixed <p>Javascript のコード内で最後に生成された変数の値を PHP の変数の型に変換して返します。</p>
		 * @link https://php.net/manual/ja/v8js.executestring.php
		 * @since PECL v8js >= 0.1.0
		 */
		public function executeString(string $script, string $identifier = "V8Js::executeString()", int $flags = V8Js::FLAG_NONE) {}

		/**
		 * 登録された拡張の配列を返す
		 * <p>この関数は、<code>V8Js::registerExtension()</code> で登録された Javascript 拡張の配列を返します。</p>
		 * @return array <p>登録された拡張の配列を返します。何も登録されていない場合は空の配列を返します。</p>
		 * @link https://php.net/manual/ja/v8js.getextensions.php
		 * @since PECL v8js >= 0.1.0
		 */
		public static function getExtensions(): array {}

		/**
		 * キャッチされなかった Javascript 例外の中で未処理のものを返す
		 * <p><code>V8Js::executeString()</code> をコールしたときに発生した Javascript の例外の中で未処理のものを V8JsException で返します。</p>
		 * @return V8JsException <p>V8JsException あるいは <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/v8js.getpendingexception.php
		 * @since PECL v8js >= 0.1.0
		 */
		public function getPendingException(): \V8JsException {}

		/**
		 * V8Js で使う Javascript の拡張を登録する
		 * <p>渡された Javascript <code>script</code> を V8Js コンテキストで利用する拡張として登録します。</p>
		 * @param string $extension_name <p>登録する拡張の名前。</p>
		 * @param string $script <p>登録する Javascript コード。</p>
		 * @param array $dependencies <p>登録する拡張が依存している他の拡張の名前の配列。この拡張が読み込まれたときに、 これらの拡張も自動的に有効になります。</p> <p><b>注意</b>:</p> <p>拡張を使う V8Js を作成する前に、 その拡張自身と依存する拡張群をすべて登録しておかなければなりません。</p>
		 * @param bool $auto_enable <p><b><code>TRUE</code></b> にすると、この拡張がすべての V8Js コンテキストで自動的に有効となります。</p>
		 * @return bool <p>拡張の登録に成功した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/v8js.registerextension.php
		 * @since PECL v8js >= 0.1.0
		 */
		public static function registerExtension(string $extension_name, string $script, array $dependencies = array(), bool $auto_enable = FALSE): bool {}
	}

	/**
	 * @link https://php.net/manual/ja/class.v8jsexception.php
	 * @since PECL v8js >= 0.1.0
	 */
	class V8JsException extends \Exception {

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.v8jsexception.php#v8jsexception.props.jsfilename
		 */
		protected $JsFileName;

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.v8jsexception.php#v8jsexception.props.jslinenumber
		 */
		protected $JsLineNumber;

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.v8jsexception.php#v8jsexception.props.jssourceline
		 */
		protected $JsSourceLine;

		/**
		 * @var mixed
		 * @link https://php.net/manual/ja/class.v8jsexception.php#v8jsexception.props.jstrace
		 */
		protected $JsTrace;

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
		 * getJsFileName
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/v8jsexception.getjsfilename.php
		 * @since PECL v8js >= 0.1.0
		 */
		final public function getJsFileName(): string {}

		/**
		 * getJsLineNumber
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int
		 * @link https://php.net/manual/ja/v8jsexception.getjslinenumber.php
		 * @since PECL v8js >= 0.1.0
		 */
		final public function getJsLineNumber(): int {}

		/**
		 * getJsSourceLine
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/v8jsexception.getjssourceline.php
		 * @since PECL v8js >= 0.1.0
		 */
		final public function getJsSourceLine(): string {}

		/**
		 * getJsTrace
		 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return string
		 * @link https://php.net/manual/ja/v8jsexception.getjstrace.php
		 * @since PECL v8js >= 0.1.0
		 */
		final public function getJsTrace(): string {}

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

}
