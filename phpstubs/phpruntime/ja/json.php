<?php

// Start of json v.1.4.0

/**
 * JsonSerializable を実装したオブジェクトは、
 * <b>json_encode</b> を呼んで処理されたときの自身の
 * JSON 表現をカスタマイズできます。
 * @link http://php.net/manual/ja/class.jsonserializable.php
 */
interface JsonSerializable  {

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * JSON にシリアライズしたいデータを指定する
	 * @link http://php.net/manual/ja/jsonserializable.jsonserialize.php
	 * @return mixed <b>json_encode</b> でシリアライズするデータを返します。
	 * resource 型以外の任意の型になります。
	 */
	abstract public function jsonSerialize();

}

/**
 * (PHP 5 &gt;= 5.2.0, PECL json &gt;= 1.2.0, PHP 7)<br/>
 * 値を JSON 形式にして返す
 * @link http://php.net/manual/ja/function.json-encode.php
 * @param mixed $value <p>
 * エンコードする値。
 * resource 型以外の任意の型を指定できます。
 * </p>
 * <p>
 * すべての文字列データは、UTF-8 エンコードされたいなければいけません。
 * </p>
 * <p>
 * PHP の実装は、
 * RFC 7159 の JSON のスーパーセットです。
 * </p>
 * @param int $options [optional] <p>
 * <b>JSON_HEX_QUOT</b>,
 * <b>JSON_HEX_TAG</b>,
 * <b>JSON_HEX_AMP</b>,
 * <b>JSON_HEX_APOS</b>,
 * <b>JSON_NUMERIC_CHECK</b>,
 * <b>JSON_PRETTY_PRINT</b>,
 * <b>JSON_UNESCAPED_SLASHES</b>,
 * <b>JSON_FORCE_OBJECT</b>,
 * <b>JSON_PRESERVE_ZERO_FRACTION</b>,
 * <b>JSON_UNESCAPED_UNICODE</b>,
 * <b>JSON_PARTIAL_OUTPUT_ON_ERROR</b>
 * からなるビットマスク。
 * 各定数の意味については
 * JSON 定数のページ
 * に説明があります。
 * </p>
 * @param int $depth [optional] <p>
 * 最大の深さを設定します。正の数でなければいけません。
 * </p>
 * @return string 成功した場合に、JSON エンコードされた文字列を返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function json_encode($value, int $options = 0, int $depth = 512): string {}

/**
 * (PHP 5 &gt;= 5.2.0, PECL json &gt;= 1.2.0, PHP 7)<br/>
 * JSON 文字列をデコードする
 * @link http://php.net/manual/ja/function.json-decode.php
 * @param string $json <p>
 * デコード対象となる <i>json</i> 文字列。
 * </p>
 * <p>
 * この関数は UTF-8 でエンコードされた文字列でのみ動作します。
 * </p>
 * <p>
 * PHP の実装は、
 * RFC 7159 の JSON のスーパーセットです。
 * </p>
 * @param bool $assoc [optional] <p>
 * <b>TRUE</b> の場合、返されるオブジェクトは連想配列形式になります。
 * </p>
 * @param int $depth [optional] <p>
 * ユーザー指定の再帰の深さ。
 * </p>
 * @param int $options [optional] <p>
 * JSON デコードオプションのビットマスクです。
 * Currently there are two supported
 * options. The first is <b>JSON_BIGINT_AS_STRING</b> that
 * allows casting big integers to string instead of floats which is the
 * default. The second option is <b>JSON_OBJECT_AS_ARRAY</b>
 * that has the same effect as setting <i>assoc</i> to
 * <b>TRUE</b>.
 * </p>
 * @return mixed <i>json</i> でエンコードされたデータを、適切な PHP の型として返します。
 * true、false および
 * null はそれぞれ <b>TRUE</b>、<b>FALSE</b>
 * そして <b>NULL</b> として返されます。
 * <i>json</i> のデコードに失敗したり
 * エンコードされたデータが再帰制限を超えているなどの場合、<b>NULL</b> を返します。
 */
function json_decode(string $json, bool $assoc = false, int $depth = 512, int $options = 0) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 直近に発生したエラーを返す
 * @link http://php.net/manual/ja/function.json-last-error.php
 * @return int 整数値を返します。これは、次の定数のいずれかとなります。
 */
function json_last_error(): int {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 直近の json_encode() や json_decode() の呼び出しのエラー文字列を返すl
 * @link http://php.net/manual/ja/function.json-last-error-msg.php
 * @return string 成功した場合にエラーメッセージ、エラーが発生しなかった場合は "No Error"、
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function json_last_error_msg(): string {}


/**
 * すべての &lt; および &gt; をそれぞれ \u003C および \u003E に変換します。
 * この定数は PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_HEX_TAG', 1);

/**
 * すべての &#38;#38; を \u0026 に変換します。
 * この定数は PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_HEX_AMP', 2);

/**
 * すべての ' を \u0027 に変換します。
 * この定数は PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_HEX_APOS', 4);

/**
 * すべての " を \u0022 に変換します。
 * この定数は PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_HEX_QUOT', 8);

/**
 * 非連想配列を使用した場合に、配列ではなくオブジェクトを出力します。
 * 出力を受け取る側がオブジェクトを期待しており、配列が空っぽである場合などに特に便利です。
 * この定数は PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_FORCE_OBJECT', 16);

/**
 * 数値形式の文字列を数値としてエンコードします。
 * PHP 5.3.3 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_NUMERIC_CHECK', 32);

/**
 * / をエスケープしません。
 * PHP 5.4.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_UNESCAPED_SLASHES', 64);

/**
 * 返される結果の書式を、スペースを使って整えます。
 * PHP 5.4.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_PRETTY_PRINT', 128);

/**
 * マルチバイト Unicode 文字をそのままの形式で扱います (デフォルトでは \uXXXX にエスケープします)。
 * PHP 5.4.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_UNESCAPED_UNICODE', 256);

/**
 * エンコード不可能な値は代替値に置き換え、処理を続行します。
 * PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_PARTIAL_OUTPUT_ON_ERROR', 512);

/**
 * float 型の値を常に float 値としてエンコードするようにします。
 * PHP 5.6.6 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_PRESERVE_ZERO_FRACTION', 1024);

/**
 * Decodes JSON objects as PHP array. This option can be added automatically
 * by calling <b>json_decode</b> with the second parameter
 * equal to <b>TRUE</b>.
 * Available since PHP 5.4.0.
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_OBJECT_AS_ARRAY', 1);

/**
 * 大きな整数値を、文字列型でエンコードします。
 * PHP 5.4.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_BIGINT_AS_STRING', 2);

/**
 * エラーが発生しませんでした。
 * この定数は PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_ERROR_NONE', 0);

/**
 * スタックの深さが最大に達しました。
 * この定数は PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_ERROR_DEPTH', 1);

/**
 * アンダーフローあるいはモードの不一致が発生しました。
 * この定数は PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_ERROR_STATE_MISMATCH', 2);

/**
 * 制御文字エラー。おそらくエンコードが間違っています。
 * この定数は PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_ERROR_CTRL_CHAR', 3);

/**
 * 構文エラー。
 * この定数は PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_ERROR_SYNTAX', 4);

/**
 * 正しくエンコードされていないなど、不正な形式の UTF-8 文字。
 * この定数は PHP 5.3.3 以降で使用可能です。
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_ERROR_UTF8', 5);

/**
 * <p>
 * <b>json_encode</b> に渡した配列やオブジェクトに再帰参照が含まれており、エンコードできません。
 * <b>JSON_PARTIAL_OUTPUT_ON_ERROR</b> オプションを指定した場合は、
 * 再帰参照の部分を <b>NULL</b> にエンコードします。
 * </p>
 * <p>
 * この定数は PHP 5.5.0 以降で使用可能です。
 * </p>
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_ERROR_RECURSION', 6);

/**
 * <p>
 * <b>json_encode</b> に渡した値の中に
 * <b>NAN</b>
 * あるいは <b>INF</b> が含まれています。
 * <b>JSON_PARTIAL_OUTPUT_ON_ERROR</b> オプションを指定した場合は、
 * これらの特殊な数値を 0 にエンコードします。
 * </p>
 * <p>
 * この定数は PHP 5.5.0 以降で使用可能です。
 * </p>
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_ERROR_INF_OR_NAN', 7);

/**
 * <p>
 * <b>json_encode</b> が対応していない型、たとえば resource などが渡されました。
 * <b>JSON_PARTIAL_OUTPUT_ON_ERROR</b> オプションを指定した場合は、
 * これらを <b>NULL</b> にエンコードします。
 * </p>
 * <p>
 * この定数は PHP 5.5.0 以降で使用可能です。
 * </p>
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_ERROR_UNSUPPORTED_TYPE', 8);

/**
 * Single unpaired UTF-16 surrogate in unicode escape contained in the
 * JSON string passed to <b>json_encode</b>.
 * Available since PHP 7.0.0.
 * @link http://php.net/manual/ja/json.constants.php
 */
define ('JSON_ERROR_INVALID_PROPERTY_NAME', 9);
define ('JSON_ERROR_UTF16', 10);

// End of json v.1.4.0
?>
