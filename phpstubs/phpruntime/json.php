<?php



namespace {

	/**
	 * <p>Exception thrown if <b><code>JSON_THROW_ON_ERROR</code></b> option is set for <code>json_encode()</code> or <code>json_decode()</code>. code contains the error type, for possible values see <code>json_last_error()</code>.</p>
	 * @link https://php.net/manual/ja/class.jsonexception.php
	 * @since PHP 7 >= 7.3.0
	 */
	class JsonException extends \Exception {

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

	/**
	 * <p><b>JsonSerializable</b> を実装したオブジェクトは、 <code>json_encode()</code> を呼んで処理されたときの自身の JSON 表現をカスタマイズできます。</p>
	 * @link https://php.net/manual/ja/class.jsonserializable.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	interface JsonSerializable {

		/**
		 * JSON にシリアライズしたいデータを指定する
		 * <p>オブジェクトをシリアライズして、 <code>json_encode()</code> がネイティブにシリアライズできる値にします。</p>
		 * @return mixed <p><code>json_encode()</code> でシリアライズするデータを返します。 <code>resource</code> 型以外の任意の型になります。</p>
		 * @link https://php.net/manual/ja/jsonserializable.jsonserialize.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function jsonSerialize();
	}

	/**
	 * JSON 文字列をデコードする
	 * <p>JSON エンコードされた文字列を受け取り、それを PHP の変数に変換します。</p>
	 * @param string $json <p>デコード対象となる <code>json</code> 文字列。</p> <p>この関数は UTF-8 でエンコードされた文字列でのみ動作します。</p>  <p><b>注意</b>:</p> <p>PHP の実装は、 » RFC 7159 の JSON のスーパーセットです。</p>
	 * @param bool $assoc <p><b><code>TRUE</code></b> の場合、返されるオブジェクトは連想配列形式になります。</p>
	 * @param int $depth <p>ユーザー指定の再帰の深さ。</p>
	 * @param int $options <p>JSON デコードオプションのビットマスクです。 Currently there are two supported options. The first is <b><code>JSON_BIGINT_AS_STRING</code></b> that allows casting big integers to string instead of floats which is the default. The second option is <b><code>JSON_OBJECT_AS_ARRAY</code></b> that has the same effect as setting <code>assoc</code> to <b><code>TRUE</code></b>.</p>
	 * @return mixed <p><code>json</code> でエンコードされたデータを、適切な PHP の型として返します。 <i>true</i>、<i>false</i> および <i>null</i> はそれぞれ <b><code>TRUE</code></b>、<b><code>FALSE</code></b> そして <b><code>NULL</code></b> として返されます。 <code>json</code> のデコードに失敗したり エンコードされたデータが再帰制限を超えているなどの場合、<b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.json-decode.php
	 * @see json_encode(), json_last_error()
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL json >= 1.2.0
	 */
	function json_decode(string $json, bool $assoc = false, int $depth = 512, int $options = 0) {}

	/**
	 * 値を JSON 形式にして返す
	 * <p>与えられた <code>value</code> を JSON 形式にした文字列を返します。</p><p>The encoding is affected by the supplied <code>options</code> and additionally the encoding of float values depends on the value of serialize_precision.</p>
	 * @param mixed $value <p>エンコードする値。 <code>resource</code> 型以外の任意の型を指定できます。</p> <p>すべての文字列データは、UTF-8 エンコードされていなければいけません。</p>  <p><b>注意</b>:</p> <p>PHP の実装は、 » RFC 7159 の JSON のスーパーセットです。</p>
	 * @param int $options <p><b><code>JSON_HEX_QUOT</code></b>, <b><code>JSON_HEX_TAG</code></b>, <b><code>JSON_HEX_AMP</code></b>, <b><code>JSON_HEX_APOS</code></b>, <b><code>JSON_NUMERIC_CHECK</code></b>, <b><code>JSON_PRETTY_PRINT</code></b>, <b><code>JSON_UNESCAPED_SLASHES</code></b>, <b><code>JSON_FORCE_OBJECT</code></b>, <b><code>JSON_PRESERVE_ZERO_FRACTION</code></b>, <b><code>JSON_UNESCAPED_UNICODE</code></b>, <b><code>JSON_PARTIAL_OUTPUT_ON_ERROR</code></b> からなるビットマスク。 各定数の意味については JSON 定数のページ に説明があります。</p>
	 * @param int $depth <p>最大の深さを設定します。正の数でなければいけません。</p>
	 * @return string <p>成功した場合に、JSON エンコードされた文字列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.json-encode.php
	 * @see json_decode(), json_last_error(), serialize()
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL json >= 1.2.0
	 */
	function json_encode($value, int $options = 0, int $depth = 512): string {}

	/**
	 * 直近に発生したエラーを返す
	 * <p>直近の JSON エンコード/デコード処理中に発生したエラー (もし存在すれば) を返します。</p>
	 * @return int <p>整数値を返します。これは、次の定数のいずれかとなります。</p> <b>JSON error codes</b>   定数 意味 使用可能     <b><code>JSON_ERROR_NONE</code></b> エラーは発生しませんでした     <b><code>JSON_ERROR_DEPTH</code></b> スタックの深さの最大値を超えました     <b><code>JSON_ERROR_STATE_MISMATCH</code></b> JSON の形式が無効、あるいは壊れています     <b><code>JSON_ERROR_CTRL_CHAR</code></b> 制御文字エラー。おそらくエンコーディングが違います     <b><code>JSON_ERROR_SYNTAX</code></b> 構文エラー     <b><code>JSON_ERROR_UTF8</code></b> 正しくエンコードされていないなど、不正な形式の UTF-8 文字 PHP 5.3.3   <b><code>JSON_ERROR_RECURSION</code></b> エンコード対象の値に再帰参照が含まれています PHP 5.5.0   <b><code>JSON_ERROR_INF_OR_NAN</code></b>  エンコード対象の値に <b><code>NAN</code></b> あるいは <b><code>INF</code></b> が含まれています。  PHP 5.5.0   <b><code>JSON_ERROR_UNSUPPORTED_TYPE</code></b> エンコード不可能な型の値が渡されました PHP 5.5.0   <b><code>JSON_ERROR_INVALID_PROPERTY_NAME</code></b> A property name that cannot be encoded was given PHP 7.0.0   <b><code>JSON_ERROR_UTF16</code></b> Malformed UTF-16 characters, possibly incorrectly encoded PHP 7.0.0
	 * @link https://php.net/manual/ja/function.json-last-error.php
	 * @see json_last_error_msg(), json_decode(), json_encode()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function json_last_error(): int {}

	/**
	 * 直近の json_encode() や json_decode() の呼び出しのエラー文字列を返す
	 * <p>呼び出しで <b><code>JSON_THROW_ON_ERROR</code></b> を指定しなかった場合、 直近の <code>json_encode()</code> または <code>json_decode()</code> 呼び出しの エラー文字列を返します。</p>
	 * @return string <p>成功した場合にエラーメッセージ、エラーが発生しなかった場合は <i>"No error"</i>、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.json-last-error-msg.php
	 * @see json_last_error()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function json_last_error_msg(): string {}

	/**
	 * 大きな整数値を、文字列型でエンコードします。 PHP 5.4.0 以降で使用可能です。
	 */
	define('JSON_BIGINT_AS_STRING', 2);

	/**
	 * 制御文字エラー。おそらくエンコードが間違っています。 この定数は PHP 5.3.0 以降で使用可能です。
	 */
	define('JSON_ERROR_CTRL_CHAR', 3);

	/**
	 * スタックの深さが最大に達しました。 この定数は PHP 5.3.0 以降で使用可能です。
	 */
	define('JSON_ERROR_DEPTH', 1);

	/**
	 * <p><code>json_encode()</code> に渡した値の中に <b><code>NAN</code></b> あるいは <b><code>INF</code></b> が含まれています。 <b><code>JSON_PARTIAL_OUTPUT_ON_ERROR</code></b> オプションを指定した場合は、 これらの特殊な数値を <i>0</i> にエンコードします。</p> <p>この定数は PHP 5.5.0 以降で使用可能です。</p>
	 */
	define('JSON_ERROR_INF_OR_NAN', 7);

	/**
	 * エラーが発生しませんでした。 この定数は PHP 5.3.0 以降で使用可能です。
	 */
	define('JSON_ERROR_NONE', 0);

	/**
	 * <p><code>json_encode()</code> に渡した配列やオブジェクトに再帰参照が含まれており、エンコードできません。 <b><code>JSON_PARTIAL_OUTPUT_ON_ERROR</code></b> オプションを指定した場合は、 再帰参照の部分を <b><code>NULL</code></b> にエンコードします。</p> <p>この定数は PHP 5.5.0 以降で使用可能です。</p>
	 */
	define('JSON_ERROR_RECURSION', 6);

	/**
	 * アンダーフローあるいはモードの不一致が発生しました。 この定数は PHP 5.3.0 以降で使用可能です。
	 */
	define('JSON_ERROR_STATE_MISMATCH', 2);

	/**
	 * 構文エラー。 この定数は PHP 5.3.0 以降で使用可能です。
	 */
	define('JSON_ERROR_SYNTAX', 4);

	/**
	 * <p><code>json_encode()</code> が対応していない型、たとえば <code>resource</code> などが渡されました。 <b><code>JSON_PARTIAL_OUTPUT_ON_ERROR</code></b> オプションを指定した場合は、 これらを <b><code>NULL</code></b> にエンコードします。</p> <p>この定数は PHP 5.5.0 以降で使用可能です。</p>
	 */
	define('JSON_ERROR_UNSUPPORTED_TYPE', 8);

	/**
	 * 正しくエンコードされていないなど、不正な形式の UTF-8 文字。 この定数は PHP 5.3.3 以降で使用可能です。
	 */
	define('JSON_ERROR_UTF8', 5);

	/**
	 * 非連想配列を使用した場合に、配列ではなくオブジェクトを出力します。 出力を受け取る側がオブジェクトを期待しており、配列が空っぽである場合などに特に便利です。 この定数は PHP 5.3.0 以降で使用可能です。
	 */
	define('JSON_FORCE_OBJECT', 16);

	/**
	 * すべての &amp; を \u0026 に変換します。 この定数は PHP 5.3.0 以降で使用可能です。
	 */
	define('JSON_HEX_AMP', 2);

	/**
	 * すべての ' を \u0027 に変換します。 この定数は PHP 5.3.0 以降で使用可能です。
	 */
	define('JSON_HEX_APOS', 4);

	/**
	 * すべての " を \u0022 に変換します。 この定数は PHP 5.3.0 以降で使用可能です。
	 */
	define('JSON_HEX_QUOT', 8);

	/**
	 * すべての &lt; および &gt; をそれぞれ \u003C および \u003E に変換します。 この定数は PHP 5.3.0 以降で使用可能です。
	 */
	define('JSON_HEX_TAG', 1);

	/**
	 * 数値形式の文字列を数値としてエンコードします。 PHP 5.3.3 以降で使用可能です。
	 */
	define('JSON_NUMERIC_CHECK', 32);

	/**
	 * エンコード不可能な値は代替値に置き換え、処理を続行します。 PHP 5.5.0 以降で使用可能です。
	 */
	define('JSON_PARTIAL_OUTPUT_ON_ERROR', 512);

	/**
	 * <code>float</code> 型の値を常に float 値としてエンコードするようにします。 PHP 5.6.6 以降で使用可能です。
	 */
	define('JSON_PRESERVE_ZERO_FRACTION', 1024);

	/**
	 * 返される結果の書式を、スペースを使って整えます。 PHP 5.4.0 以降で使用可能です。
	 */
	define('JSON_PRETTY_PRINT', 128);

	/**
	 * <i>/</i> をエスケープしません。 PHP 5.4.0 以降で使用可能です。
	 */
	define('JSON_UNESCAPED_SLASHES', 64);

	/**
	 * マルチバイト Unicode 文字をそのままの形式で扱います (デフォルトでは \uXXXX にエスケープします)。 PHP 5.4.0 以降で使用可能です。
	 */
	define('JSON_UNESCAPED_UNICODE', 256);

}
