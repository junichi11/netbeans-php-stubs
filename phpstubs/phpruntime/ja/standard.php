<?php

// Start of standard v.7.0.19

class __PHP_Incomplete_Class  {
}

class php_user_filter  {
	public $filtername;
	public $params;


	/**
	 * @param $in
	 * @param $out
	 * @param $consumed
	 * @param $closing
	 */
	public function filter($in, $out, &$consumed, $closing) {}

	public function onCreate() {}

	public function onClose() {}

}

class Directory  {
	/**
	 * <p style="margin-top:0;">
	 * &#12458;&#12540;&#12503;&#12531;&#12373;&#12428;&#12383;&#12487;&#12451;&#12524;&#12463;&#12488;&#12522;&#12290;
	 * </p>
	 * @var string
	 */
	public $path;
	/**
	 * <p style="margin-top:0;">
	 * <b>readdir()</b> &#12420; <b>rewinddir()</b>&#12289;
	 * <b>closedir()</b> &#12394;&#12393;&#12398;&#12487;&#12451;&#12524;&#12463;&#12488;&#12522;&#38306;&#25968;&#12391;&#20351;&#12356;&#12414;&#12377;&#12290;
	 * </p>
	 * @var resource
	 */
	public $handle;


	/**
	 * @param $dir_handle [optional]
	 */
	public function close($dir_handle) {}

	/**
	 * @param $dir_handle [optional]
	 */
	public function rewind($dir_handle) {}

	/**
	 * @param $dir_handle [optional]
	 */
	public function read($dir_handle) {}

}

/**
 * <b>AssertionError</b>
 * は、<b>assert</b> によるアサーションが失敗したときにスローされます。
 * @link http://php.net/manual/ja/class.assertionerror.php
 */
class AssertionError extends Error implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	final private function __clone() {}

	/**
	 * @param $message [optional]
	 * @param $code [optional]
	 * @param $previous [optional]
	 */
	public function __construct($message, $code, $previous) {}

	public function __wakeup() {}

	final public function getMessage() {}

	final public function getCode() {}

	final public function getFile() {}

	final public function getLine() {}

	final public function getTrace() {}

	final public function getPrevious() {}

	final public function getTraceAsString() {}

	public function __toString() {}

}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 定数の値を返す
 * @link http://php.net/manual/ja/function.constant.php
 * @param string $name <p>
 * 定数名。
 * </p>
 * @return mixed 定数の値、あるいはその定数が定義されていない場合に <b>NULL</b> を返します。
 */
function constant(string $name) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * バイナリのデータを16進表現に変換する
 * @link http://php.net/manual/ja/function.bin2hex.php
 * @param string $str <p>
 * 文字列。
 * </p>
 * @return string 指定した文字列を16進表現に変換したものを返します。
 */
function bin2hex(string $str): string {}

/**
 * (PHP &gt;= 5.4.0)<br/>
 * 16進エンコードされたバイナリ文字列をデコードする
 * @link http://php.net/manual/ja/function.hex2bin.php
 * @param string $data <p>
 * 16進表現のデータ。
 * </p>
 * @return string 指定したデータを2進表現に変換したものを返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function hex2bin(string $data): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 実行を遅延させる
 * @link http://php.net/manual/ja/function.sleep.php
 * @param int $seconds <p>
 * 秒単位の停止時間。
 * </p>
 * @return int 成功した場合にゼロ、エラーが発生した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * シグナルで中断した場合、<b>sleep</b> はゼロ以外の値を返します。
 * Windows では、この値は常に
 * 192 (Windows API の定数
 * <b>WAIT_IO_COMPLETION</b> の値) です。
 * その他のプラットフォームでは、残りの遅延秒数を返します。
 */
function sleep(int $seconds): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * マイクロ秒単位で実行を遅延する
 * @link http://php.net/manual/ja/function.usleep.php
 * @param int $micro_seconds <p>
 * 実行を停止するマイクロ秒数。マイクロ秒とは、一秒の百万分の一です。
 * </p>
 * @return void 値を返しません。
 */
function usleep(int $micro_seconds): void {}

/**
 * (PHP 5, PHP 7)<br/>
 * 秒およびナノ秒単位で実行を遅延する
 * @link http://php.net/manual/ja/function.time-nanosleep.php
 * @param int $seconds <p>
 * 非負の整数である必要があります。
 * </p>
 * @param int $nanoseconds <p>
 * 十億よりも小さい非負の整数である必要があります。
 * </p>
 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * シグナルによって遅延処理が中断された場合、以下の要素からなる連想配列を返します。
 * seconds - 残りの秒数
 * nanoseconds - 残りのナノ秒数
 */
function time_nanosleep(int $seconds, int $nanoseconds) {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 指定した時刻まで実行を遅延する
 * @link http://php.net/manual/ja/function.time-sleep-until.php
 * @param float $timestamp <p>
 * スクリプトが再開する時刻。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function time_sleep_until(float $timestamp): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * <b>strftime</b> が生成した日付/時刻をパースする
 * @link http://php.net/manual/ja/function.strptime.php
 * @param string $date <p>
 * パースする文字列（例: <b>strftime</b> の返り値）。
 * </p>
 * @param string $format <p>
 * <i>date</i> で使用されているフォーマット
 * （例: <b>strftime</b> で使用されていたものと同じ）。
 * <b>strftime</b> で使えるオプションの中には、
 * <b>strptime</b> では何の影響を及ぼさないものがあることに注意しましょう。
 * 実際にサポートする範囲がどのようになるのかは、
 * 使っている OS と C ライブラリに依存します。
 * </p>
 * <p>
 * フォーマットオプションについての詳細は
 * <b>strftime</b> のページを参照ください。
 * </p>
 * @return array 成功した場合は配列、失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <table>
 * 配列で返されるパラメータ
 * <tr valign="top">
 * <td>パラメータ</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_sec"</td>
 * <td>分未満の秒数 (0-61)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_min"</td>
 * <td>時間未満の分数 (0-59)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_hour"</td>
 * <td>0 時以降の時間数 (0-23)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_mday"</td>
 * <td>月内の日数 (1-31)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_mon"</td>
 * <td>1 月から数えた月数 (0-11)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_year"</td>
 * <td>1900 年以降の年</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_wday"</td>
 * <td>日曜日からの日数 (0-6)</td>
 * </tr>
 * <tr valign="top">
 * <td>"tm_yday"</td>
 * <td>1 月 1 日からの日数 (0-365)</td>
 * </tr>
 * <tr valign="top">
 * <td>"unparsed"</td>
 * <td><i>date</i> の中で、指定された
 * <i>format</i> で判断できなかった部分</td>
 * </tr>
 * </table>
 */
function strptime(string $date, string $format): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * システム出力バッファをフラッシュする
 * @link http://php.net/manual/ja/function.flush.php
 * @return void 値を返しません。
 */
function flush(): void {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 指定した文字数で文字列を分割する
 * @link http://php.net/manual/ja/function.wordwrap.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @param int $width [optional] <p>
 * 文字列を分割するときの文字数。
 * </p>
 * @param string $break [optional] <p>
 * オプションのパラメータ
 * <i>break</i> を用いて行を分割します。
 * </p>
 * @param bool $cut [optional] <p>
 * <i>cut</i> を <b>TRUE</b> に設定すると、
 * 文字列は常に指定した <i>width</i> でラップされます。このため、
 * 指定した幅よりも長い単語がある場合には、分割されます (2 番目の例を参照ください)。
 * <b>FALSE</b> にすると、たとえ <i>width</i> が単語の長さより短かった場合でも、その単語を分割しません。
 * </p>
 * @return string 受け取った文字列を指定した長さで分割したものを返します。
 */
function wordwrap(string $str, int $width = 75, string $break = "\n", bool $cut = false): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 特殊文字を HTML エンティティに変換する
 * @link http://php.net/manual/ja/function.htmlspecialchars.php
 * @param string $string <p>
 * 変換される文字列。
 * </p>
 * @param int $flags [optional] <p>
 * 以下のフラグを組み合わせたビットマスクです。
 * クォートや無効な符号単位シーケンス、そして文書型の扱いを指定します。
 * デフォルトは ENT_COMPAT | ENT_HTML401 です。
 * <table>
 * 利用可能な <i>flags</i> 定数
 * <tr valign="top">
 * <td>定数名</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_COMPAT</b></td>
 * <td>ダブルクオートは変換しますがシングルクオートは変換しません。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_QUOTES</b></td>
 * <td>シングルクオートとダブルクオートを共に変換します。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_NOQUOTES</b></td>
 * <td>シングルクオートとダブルクオートは共に変換されません。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_IGNORE</b></td>
 * <td>
 * 無効な符号単位シーケンスを含む文字列を渡したときに、
 * 空の文字列を返すのではなく無効な部分を切り捨てるようになります。
 * このフラグは使わないようにしましょう。
 * セキュリティの問題が発生する可能性があります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_SUBSTITUTE</b></td>
 * <td>
 * 無効な符号単位シーケンスを含む文字列を渡したときに、
 * 空の文字列を返すのではなく Unicode の置換文字に置き換えます。
 * UTF-8 の場合は U+FFFD、それ以外の場合は &#38;#38;#xFFFD; となります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_DISALLOWED</b></td>
 * <td>
 * 指定した文書型において無効な符号位置を、Unicode の代替文字である
 * U+FFFD (UTF-8) あるいは &#38;#38;#xFFFD; で置き換えます。
 * これを設定しなければ、無効な符号位置をそのまま残します。
 * これは、外部コンテンツを埋め込んだ XML 文書を整形式に保つために有用です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_HTML401</b></td>
 * <td>
 * コードを HTML 4.01 として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_XML1</b></td>
 * <td>
 * コードを XML 1 として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_XHTML</b></td>
 * <td>
 * コードを XHTML として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_HTML5</b></td>
 * <td>
 * コードを HTML 5 として処理します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $encoding [optional] オプションの引数。文字を変換するときに使うエンコーディングを定義します。
 * </p>
 * 省略した場の <i>encoding</i> のデフォルト値は、varies
 * PHP のバージョンによって異なります。
 * PHP 5.6.0 以降では、デフォルト値として default_charset
 * の値を使います。PHP 5.4 と PHP 5.5 のデフォルト値は、
 * UTF-8 で、それより前のバージョンの PHP のデフォルト値は
 * ISO-8859-1 でした。
 * </p>
 * 技術的にはこの引数を省略可能ですが、PHP 5.5 以前のバージョンを使っている場合や、
 * default_charset
 * の指定が入力とは違う文字セットになっている場合は、
 * 適切な値を指定しておくことを強く推奨します。
 * </p>
 * <p>
 * この関数を使ううえでは
 * ISO-8859-1 と ISO-8859-15、
 * UTF-8、cp866、
 * cp1251、cp1252 そして
 * KOI8-R は事実上同等です。
 * <i>string</i> 自体がそのエンコーディングにおける有効な文字列である限り、
 * これらのエンコーディングでは
 * <b>htmlspecialchars</b> の影響が及ぶ文字がみな同じ位置にあるからです。
 * </p>
 * @param bool $double_encode [optional] <p>
 * <i>double_encode</i> をオフにすると、PHP
 * は既存の html エンティティをエンコードしません。
 * デフォルトでは、既存のエンティティも含めてすべてを変換します。
 * </p>
 * @return string 変換後の文字列を返します。
 * </p>
 * <p>
 * 入力の <i>string</i> の中に
 * エンコーディング <i>encoding</i> における無効なコードユニットシーケンスが含まれており、
 * かつ <b>ENT_IGNORE</b> フラグが設定されていなければ、
 * <b>htmlspecialchars</b> は空文字列を返します。
 */
function htmlspecialchars(string $string, int $flags = ENT_COMPAT | ENT_HTML401, string $encoding = 'ini_get("default_charset")', bool $double_encode = true): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 適用可能な文字を全て HTML エンティティに変換する
 * @link http://php.net/manual/ja/function.htmlentities.php
 * @param string $string <p>
 * 入力文字列。
 * </p>
 * @param int $flags [optional] <p>
 * 以下のフラグを組み合わせたビットマスクです。
 * クォートや無効な符号単位シーケンス、そして文書型の扱いを指定します。
 * デフォルトは ENT_COMPAT | ENT_HTML401 です。
 * <table>
 * 利用可能な <i>flags</i> 定数
 * <tr valign="top">
 * <td>定数名</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_COMPAT</b></td>
 * <td>ダブルクオートは変換しますがシングルクオートは変換しません。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_QUOTES</b></td>
 * <td>シングルクオートとダブルクオートを共に変換します。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_NOQUOTES</b></td>
 * <td>シングルクオートとダブルクオートは共に変換されません。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_IGNORE</b></td>
 * <td>
 * 無効な符号単位シーケンスを含む文字列を渡したときに、
 * 空の文字列を返すのではなく無効な部分を切り捨てるようになります。
 * このフラグは使わないようにしましょう。
 * セキュリティの問題が発生する可能性があります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_SUBSTITUTE</b></td>
 * <td>
 * 無効な符号単位シーケンスを含む文字列を渡したときに、
 * 空の文字列を返すのではなく Unicode の置換文字に置き換えます。
 * UTF-8 の場合は U+FFFD、それ以外の場合は &#38;#38;#FFFD; となります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_DISALLOWED</b></td>
 * <td>
 * 指定した文書型において無効な符号位置を、Unicode の代替文字である
 * U+FFFD (UTF-8) あるいは &#38;#38;#FFFD; で置き換えます。
 * これを設定しなければ、無効な符号位置をそのまま残します。
 * これは、外部コンテンツを埋め込んだ XML 文書を整形式に保つために有用です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_HTML401</b></td>
 * <td>
 * コードを HTML 4.01 として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_XML1</b></td>
 * <td>
 * コードを XML 1 として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_XHTML</b></td>
 * <td>
 * コードを XHTML として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_HTML5</b></td>
 * <td>
 * コードを HTML 5 として処理します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $encoding [optional] オプションの引数。文字を変換するときに使うエンコーディングを定義します。
 * </p>
 * 省略した場の <i>encoding</i> のデフォルト値は、varies
 * PHP のバージョンによって異なります。
 * PHP 5.6.0 以降では、デフォルト値として default_charset
 * の値を使います。PHP 5.4 と PHP 5.5 のデフォルト値は、
 * UTF-8 で、それより前のバージョンの PHP のデフォルト値は
 * ISO-8859-1 でした。
 * </p>
 * 技術的にはこの引数を省略可能ですが、PHP 5.5 以前のバージョンを使っている場合や、
 * default_charset
 * の指定が入力とは違う文字セットになっている場合は、
 * 適切な値を指定しておくことを強く推奨します。
 * </p>
 * @param bool $double_encode [optional] <p>
 * <i>double_encode</i> をオフにすると、PHP
 * は既存の html エンティティをエンコードしません。
 * デフォルトでは、既存のエンティティも含めてすべてを変換します。
 * </p>
 * @return string エンコードした文字列を返します。
 * </p>
 * <p>
 * 入力文字列の中に、指定した <i>encoding</i> で無効な符号単位シーケンスが含まれる場合は、
 * <b>ENT_IGNORE</b> あるいは
 * <b>ENT_SUBSTITUTE</b> フラグが設定されていない限りは空文字列を返します。
 */
function htmlentities(string $string, int $flags = ENT_COMPAT | ENT_HTML401, string $encoding = 'ini_get("default_charset")', bool $double_encode = true): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * HTML エンティティを適切な文字に変換する
 * @link http://php.net/manual/ja/function.html-entity-decode.php
 * @param string $string <p>
 * 入力文字列。
 * </p>
 * @param int $flags [optional] <p>
 * 以下のフラグのビットマスクによる組み合わせで、クォートの扱いやドキュメントの形式を指定します。
 * デフォルトは ENT_COMPAT | ENT_HTML401 です。
 * <table>
 * 使用可能な <i>flags</i> 定数
 * <tr valign="top">
 * <td>定数名</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_COMPAT</b></td>
 * <td>ダブルクォートを変換し、シングルクォートはそのままにします。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_QUOTES</b></td>
 * <td>ダブルクォート、シングルクォートの両方を変換します。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_NOQUOTES</b></td>
 * <td>ダブルクォート、シングルクォートの両方とも変換しません。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_HTML401</b></td>
 * <td>
 * コードを HTML 4.01 として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_XML1</b></td>
 * <td>
 * コードを XML 1 として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_XHTML</b></td>
 * <td>
 * コードを XHTML として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_HTML5</b></td>
 * <td>
 * コードを HTML 5 として処理します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $encoding [optional] オプションの引数。文字を変換するときに使うエンコーディングを定義します。
 * </p>
 * 省略した場の <i>encoding</i> のデフォルト値は、varies
 * PHP のバージョンによって異なります。
 * PHP 5.6.0 以降では、デフォルト値として default_charset
 * の値を使います。PHP 5.4 と PHP 5.5 のデフォルト値は、
 * UTF-8 で、それより前のバージョンの PHP のデフォルト値は
 * ISO-8859-1 でした。
 * </p>
 * 技術的にはこの引数を省略可能ですが、PHP 5.5 以前のバージョンを使っている場合や、
 * default_charset
 * の指定が入力とは違う文字セットになっている場合は、
 * 適切な値を指定しておくことを強く推奨します。
 * </p>
 * @return string デコードされた文字列を返します。
 */
function html_entity_decode(string $string, int $flags = ENT_COMPAT | ENT_HTML401, string $encoding = 'ini_get("default_charset")'): string {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 特殊な HTML エンティティを文字に戻す
 * @link http://php.net/manual/ja/function.htmlspecialchars-decode.php
 * @param string $string <p>
 * デコードする文字列。
 * </p>
 * @param int $flags [optional] <p>
 * 以下のフラグのビットマスクによる組み合わせで、クォートの扱いやドキュメントの形式を指定します。
 * デフォルトは ENT_COMPAT | ENT_HTML401 です。
 * <table>
 * 使用可能な <i>flags</i> 定数
 * <tr valign="top">
 * <td>定数名</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_COMPAT</b></td>
 * <td>ダブルクォートを変換し、シングルクォートはそのままにします。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_QUOTES</b></td>
 * <td>ダブルクォート、シングルクォートの両方を変換します。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_NOQUOTES</b></td>
 * <td>ダブルクォート、シングルクォートの両方をそのままにします。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_HTML401</b></td>
 * <td>
 * コードを HTML 4.01 として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_XML1</b></td>
 * <td>
 * コードを XML 1 として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_XHTML</b></td>
 * <td>
 * コードを XHTML として処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_HTML5</b></td>
 * <td>
 * コードを HTML 5 として処理します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return string デコードされた文字列を返します。
 */
function htmlspecialchars_decode(string $string, int $flags = ENT_COMPAT | ENT_HTML401): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>htmlspecialchars</b> および <b>htmlentities</b> で使用される変換テーブルを返す
 * @link http://php.net/manual/ja/function.get-html-translation-table.php
 * @param int $table [optional] <p>
 * どちらのテーブルを返すか。<b>HTML_ENTITIES</b> あるいは
 * <b>HTML_SPECIALCHARS</b>。
 * </p>
 * @param int $flags [optional] <p>
 * 以下のフラグのビットマスクによる組み合わせで、
 * どのクォートをテーブルに含めるのか、そしてどのドキュメント形式用のテーブルにするのかを指定します。
 * デフォルトは ENT_COMPAT | ENT_HTML401 です。
 * <table>
 * 使用可能な <i>flags</i> 定数
 * <tr valign="top">
 * <td>定数名</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_COMPAT</b></td>
 * <td>テーブルにダブルクォート用のエンティティを含めますが、シングルクォート用は含めません。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_QUOTES</b></td>
 * <td>テーブルにダブルクォート用、シングルクォート用の両方のエンティティを含めます。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_NOQUOTES</b></td>
 * <td>テーブルにダブルクォート用、シングルクォート用のどちらのエンティティも含めません。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_HTML401</b></td>
 * <td>HTML 4.01 用のテーブル。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_XML1</b></td>
 * <td>XML 1 用のテーブル。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_XHTML</b></td>
 * <td>XHTML 用のテーブル。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ENT_HTML5</b></td>
 * <td>HTML 5 用のテーブル。</td>
 * </tr>
 * </table>
 * </p>
 * @param string $encoding [optional] <p>
 * 使用するエンコーディング。省略した場合のデフォルト値は、
 * PHP 5.4.0 より前のバージョンでは ISO-8859-1、そして
 * PHP 5.4.0 以降では UTF-8 となります。
 * </p>
 * @return array 変換テーブルを配列で返します。元の文字がキー、そしてエンティティが値となります。
 */
function get_html_translation_table(int $table = HTML_SPECIALCHARS, int $flags = ENT_COMPAT | ENT_HTML401, string $encoding = "UTF-8"): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 文字列の sha1 ハッシュを計算する
 * @link http://php.net/manual/ja/function.sha1.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @param bool $raw_output [optional] <p>
 * オプションの <i>raw_output</i> に <b>TRUE</b>
 * が指定された場合、sha1 ダイジェストは 20 バイト長のバイナリ形式で返されます。
 * それ以外の場合は、返り値は 40 文字の 16 進数となります。
 * </p>
 * @return string sha1 ハッシュを文字列で返します。
 */
function sha1(string $str, bool $raw_output = false): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ファイルの sha1 ハッシュを計算する
 * @link http://php.net/manual/ja/function.sha1-file.php
 * @param string $filename <p>
 * ハッシュしたいファイルのファイル名。
 * </p>
 * @param bool $raw_output [optional] <p>
 * <b>TRUE</b> を指定すると、長さ 20 のバイナリフォーマットで
 * ダイジェストを返します。
 * </p>
 * @return string 成功した場合に文字列、それ以外の場合に <b>FALSE</b> を返します。
 */
function sha1_file(string $filename, bool $raw_output = false): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列のmd5ハッシュ値を計算する
 * @link http://php.net/manual/ja/function.md5.php
 * @param string $str <p>
 * 文字列。
 * </p>
 * @param bool $raw_output [optional] <p>
 * オプションの<i>raw_output</i> に <b>TRUE</b> が指定された場合、
 * md5 ダイジェストが 16 バイト長のバイナリ形式で返されます。
 * </p>
 * @return string 32 文字の 16 進数からなるハッシュを返します。
 */
function md5(string $str, bool $raw_output = false): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 指定したファイルのMD5ハッシュ値を計算する
 * @link http://php.net/manual/ja/function.md5-file.php
 * @param string $filename <p>
 * ファイル名
 * </p>
 * @param bool $raw_output [optional] <p>
 * <b>TRUE</b> の場合、長さ 16 の生のバイナリフォーマットで
 * ダイジェストを返します。
 * </p>
 * @return string 成功時は文字列、そうでなければ <b>FALSE</b>
 */
function md5_file(string $filename, bool $raw_output = false): string {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 文字列の crc32 多項式計算を行う
 * @link http://php.net/manual/ja/function.crc32.php
 * @param string $str <p>
 * データ。
 * </p>
 * @return int <i>str</i> の crc32 チェックサムを整数値で返します。
 */
function crc32(string $str): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * バイナリの IPTC ブロックのタグをパースする
 * @link http://php.net/manual/ja/function.iptcparse.php
 * @param string $iptcblock <p>
 * バイナリ IPTC ブロック。
 * </p>
 * @return array タグマーカーをインデックスとし、その値を保持する配列を返します。
 * エラー時や IPTC データが見つからなかったときは <b>FALSE</b> を返します。
 */
function iptcparse(string $iptcblock): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * バイナリ IPTC データを JPEG イメージに埋めこむ
 * @link http://php.net/manual/ja/function.iptcembed.php
 * @param string $iptcdata <p>
 * 書き込むデータ。
 * </p>
 * @param string $jpeg_file_name <p>
 * JPEG 画像へのパス。
 * </p>
 * @param int $spool [optional] <p>
 * Spool フラグ。このフラグが 2 より小さい場合は、JPEG
 * が文字列として返されます。そうでない場合は、JPEG を STDOUT に出力します。
 * </p>
 * @return mixed 成功し、かつ <i>spool</i> が 2 より小さい場合は、JPEG を返します。
 * 失敗した場合に <b>FALSE</b> を返します。<i>spool</i> が 2 以上の場合は、成功した場合に <b>TRUE</b> を返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function iptcembed(string $iptcdata, string $jpeg_file_name, int $spool = 0) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 画像の大きさを取得する
 * @link http://php.net/manual/ja/function.getimagesize.php
 * @param string $filename <p>
 * このパラメータは、情報を取得したいファイルの名前を指定します。
 * ローカルファイルへの参照、あるいは (設定で許可されているなら)
 * ストリームを用いたリモートファイルへの参照を指定できます。
 * </p>
 * @param array $imageinfo [optional] <p>
 * オプションのパラメータで、
 * 画像ファイルから何らかの拡張情報を引き出すことが可能です。
 * 現在、この変数にはJPGファイルについて
 * 異なった複数のAPPマーカーが連想配列として返されます。いくつかのプログラムは、
 * これらのAPPマーカーを画像の中の埋込テキストの情報として使用します。
 * 最も一般的な例は、マーカーAPPl3に埋込IPTC
 * http://www.iptc.org/情報が返されることです。
 * バイナリ形式のマーカーAPP13を読むことができるよう処理するために
 * <b>iptcparse</b> 関数を使用することができます。
 * </p>
 * @return array 最大 7 つの要素からなる配列を返します。画像の形式によっては、
 * channels や bits は含まれないことがあります。
 * </p>
 * <p>
 * 0 番目および 1 番目の要素は、それぞれ画像の幅と高さを表します。
 * </p>
 * <p>
 * 形式によっては、画像を含まないものや複数の画像を含むものがあります。
 * これらの場合、<b>getimagesize</b>
 * は画像のサイズを適切に決定することができません。このような場合、
 * <b>getimagesize</b> が返す幅と高さはいずれもゼロとなります。
 * </p>
 * <p>
 * 2 番目の要素は IMAGETYPE_XXX constants 定数のひとつで、
 * 画像の形式を表します。
 * </p>
 * <p>
 * 3 番目の要素は IMG タグで直接利用できる文字列
 * height="yyy" width="xxx"
 * です。
 * </p>
 * <p>
 * mimeは画像のMIMEタイプに一致します。この情報は
 * 画像とともに正しい HTTP Content-type
 * ヘッダを転送するために使用できます。
 * <b>getimagesize</b> および MIME 型
 * <code>
 * $size = getimagesize($filename);
 * $fp = fopen($filename, "rb");
 * if ($size && $fp) {
 * header("Content-type: {$size['mime']}");
 * fpassthru($fp);
 * exit;
 * } else {
 * // エラー
 * }
 * </code>
 * </p>
 * <p>
 * channels は RGB 画像の場合に 3、CMYK 画像の場合に 4 です。
 * </p>
 * <p>
 * bits は個々の色のビット数です。
 * </p>
 * <p>
 * 画像の形式によっては、channels や
 * bits の値の存在は混乱の元です。
 * たとえば、GIF は常に 1 ピクセルあたり
 * 3 チャンネルを使用しますが、グローバルカラーテーブルを使ったアニメーション GIF
 * のピクセルあたりのビット数を計算することはできません。
 * </p>
 * <p>
 * 失敗した場合には <b>FALSE</b> を返します。
 */
function getimagesize(string $filename, array &$imageinfo = null): array {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * 画像の大きさを文字列から取得する
 * @link http://php.net/manual/ja/function.getimagesizefromstring.php
 * @param string $imagedata <p>
 * 文字列で表した画像データ。
 * </p>
 * @param array $imageinfo [optional] <p>
 * <b>getimagesize</b> を参照ください。
 * </p>
 * @return array <b>getimagesize</b> を参照ください。
 */
function getimagesizefromstring(string $imagedata, array &$imageinfo = null): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * getimagesize, exif_read_data, exif_thumbnail, exif_imagetypeから返される
画像形式のMIMEタイプを取得する
 * @link http://php.net/manual/ja/function.image-type-to-mime-type.php
 * @param int $imagetype <p>
 * IMAGETYPE_XXX 定数のいずれか。
 * </p>
 * @return string 戻り値は次のとおりです。
 * <table>
 * 戻り値の定数
 * <tr valign="top">
 * <td><i>imagetype</i></td>
 * <td>戻り値</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_GIF</b></td>
 * <td>image/gif</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_JPEG</b></td>
 * <td>image/jpeg</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_PNG</b></td>
 * <td>image/png</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_SWF</b></td>
 * <td>application/x-shockwave-flash</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_PSD</b></td>
 * <td>image/psd</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_BMP</b></td>
 * <td>image/bmp</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_TIFF_II</b> (intel byte order)</td>
 * <td>image/tiff</td>
 * </tr>
 * <tr valign="top">
 * <td>
 * <b>IMAGETYPE_TIFF_MM</b> (motorola byte order)
 * </td>
 * <td>image/tiff</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_JPC</b></td>
 * <td>application/octet-stream</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_JP2</b></td>
 * <td>image/jp2</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_JPX</b></td>
 * <td>application/octet-stream</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_JB2</b></td>
 * <td>application/octet-stream</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_SWC</b></td>
 * <td>application/x-shockwave-flash</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_IFF</b></td>
 * <td>image/iff</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_WBMP</b></td>
 * <td>image/vnd.wap.wbmp</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_XBM</b></td>
 * <td>image/xbm</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_ICO</b></td>
 * <td>image/vnd.microsoft.icon</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMAGETYPE_WEBP</b></td>
 * <td>image/webp</td>
 * </tr>
 * </table>
 */
function image_type_to_mime_type(int $imagetype): string {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 画像形式からファイルの拡張子を取得する
 * @link http://php.net/manual/ja/function.image-type-to-extension.php
 * @param int $imagetype <p>
 * IMAGETYPE_XXX 定数のいずれかひとつ。
 * </p>
 * @param bool $include_dot [optional] <p>
 * 拡張子の前にドットをつけるかどうか。デフォルトは <b>TRUE</b>。
 * </p>
 * @return string 指定した型に対応する拡張子を文字列で返します。
 */
function image_type_to_extension(int $imagetype, bool $include_dot = true): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * PHP の設定情報を出力する
 * @link http://php.net/manual/ja/function.phpinfo.php
 * @param int $what [optional] <p>
 * 以下にあるconstantsビット値をひとつまたは
 * 複数個を加算して、オプションの<i>what</i>引数に
 * 渡すことによって出力をカスタマイズできます。
 * それぞれの定数やビット値をor演算子
 * で結んで渡すこともできます。
 * </p>
 * <p>
 * <table>
 * <b>phpinfo</b> のオプション
 * <tr valign="top">
 * <td>名前(定数)</td>
 * <td>値</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_GENERAL</td>
 * <td>1</td>
 * <td>
 * configure オプション、<i>php.ini</i> の場所、ビルド日時、
 * Web サーバー、オペレーティングシステム等。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_CREDITS</td>
 * <td>2</td>
 * <td>
 * PHP クレジット。<b>phpcredits</b> も参照ください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_CONFIGURATION</td>
 * <td>4</td>
 * <td>
 * ローカルおよびマスタの、現在の PHP ディレクティブの値。
 * <b>ini_get</b> も参照ください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_MODULES</td>
 * <td>8</td>
 * <td>
 * ロードされているモジュールと、それぞれの設定。
 * <b>get_loaded_extensions</b> も参照ください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_ENVIRONMENT</td>
 * <td>16</td>
 * <td>
 * $_ENV で取得できる環境変数の情報。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_VARIABLES</td>
 * <td>32</td>
 * <td>
 * EGPCS（環境変数・GET・POST・クッキー・サーバー変数）から
 * すべての
 * 定義済みの変数を表示します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_LICENSE</td>
 * <td>64</td>
 * <td>
 * PHP ライセンス情報。ライセンス FAQ も参照ください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>INFO_ALL</td>
 * <td>-1</td>
 * <td>
 * 上記のすべてを表示します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function phpinfo(int $what = INFO_ALL): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在の PHP バージョンを取得する
 * @link http://php.net/manual/ja/function.phpversion.php
 * @param string $extension [optional] <p>
 * オプションで指定する拡張モジュール名。
 * </p>
 * @return string オプションの <i>extension</i>
 * パラメータが指定されている場合、<b>phpversion</b>
 * はその拡張モジュールのバージョンを返します。
 * 関連するバージョン情報が存在しない場合、
 * あるいは拡張モジュールが有効でない場合は <b>FALSE</b> を返します。
 */
function phpversion(string $extension = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * PHP に関するクレジットを出力する
 * @link http://php.net/manual/ja/function.phpcredits.php
 * @param int $flag [optional] <p>
 * 独自のクレジットページを出力したい場合に <i>flag</i>
 * を利用するとよいでしょう。
 * </p>
 * <p>
 * <table>
 * 定義済みの <b>phpcredits</b> フラグ
 * <tr valign="top">
 * <td>名前</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_ALL</td>
 * <td>
 * すべてのクレジットを含めます。
 * <b>CREDITS_DOCS</b> + <b>CREDITS_GENERAL</b> +
 * <b>CREDITS_GROUP</b> + <b>CREDITS_MODULES</b> + <b>CREDITS_FULLPAGE</b>
 * と同等です。これは、適切なタグを含んだ
 * それ単体で成立する HTML ページを生成します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_DOCS</td>
 * <td>ドキュメントチームのクレジット</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_FULLPAGE</td>
 * <td>
 * 通常、他のフラグと組み合わせて使用します。
 * 他のフラグで指定した情報を含む、それ単体で完全に独立した
 * HTML ページを出力することを指定します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_GENERAL</td>
 * <td>
 * 一般的なクレジット: 言語の設計およびコンセプト、PHP
 * 作者、SAPIモジュール
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_GROUP</td>
 * <td>コア開発者のリスト</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_MODULES</td>
 * <td>PHPの拡張モジュール、およびその作者のリスト</td>
 * </tr>
 * <tr valign="top">
 * <td>CREDITS_SAPI</td>
 * <td>PHP のサーバー API モジュールとその作者のリスト</td>
 * </tr>
 * </table>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function phpcredits(int $flag = CREDITS_ALL): bool {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * ウェブサーバーと PHP の間のインターフェイスの型を返す
 * @link http://php.net/manual/ja/function.php-sapi-name.php
 * @return string インターフェイスの型を小文字の文字列で返します。
 * </p>
 * <p>
 * これがすべてではありませんが、以下のような値が返されます。
 * aolserver, apache,
 * apache2filter, apache2handler,
 * caudium, cgi (PHP 5.3 まで),
 * cgi-fcgi, cli, cli-server,
 * continuity, embed, fpm-fcgi,
 * isapi, litespeed,
 * milter, nsapi,
 * phttpd, pi3web, roxen,
 * thttpd, tux そして webjames
 */
function php_sapi_name(): string {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * PHP が稼動しているオペレーティングシステムに関する情報を返す
 * @link http://php.net/manual/ja/function.php-uname.php
 * @param string $mode [optional] <p>
 * <i>mode</i> は、どのような情報を返すのかを一文字で指定します:
 * 'a': デフォルトです。すべてのモードを
 * "s n r v m" の順で返します。
 * @return string 説明を文字列で返します。
 */
function php_uname(string $mode = "a"): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 追加の ini ディレクトリにある .ini ファイルのリストを取得する
 * @link http://php.net/manual/ja/function.php-ini-scanned-files.php
 * @return string 成功すると、.iniファイルをカンマ区切りにした文字列が返されます。
 * --with-config-file-scan-dir
 * がセットされておらず、かつ環境変数 PHP_INI_SCAN_DIR
 * も設定されていない場合は
 * <b>FALSE</b>を返します。指定されたディレクトリが空であれば、
 * 空文字列が返されます。ファイルが認識できないものであれば、
 * そのファイルは文字列には含まれますが同時にPHPがエラーを起こします。
 * このエラーはコンパイルの時と、<b>php_ini_scanned_files</b>
 * 関数を使用したときの両方で発生します。
 */
function php_ini_scanned_files(): string {}

/**
 * (PHP 5 &gt;= 5.2.4, PHP 7)<br/>
 * 読み込まれた php.ini ファイルのパスを取得する
 * @link http://php.net/manual/ja/function.php-ini-loaded-file.php
 * @return string 読み込まれている <i>php.ini</i> のパス、
 * あるいは読み込まれていない場合に <b>FALSE</b> を返します。
 */
function php_ini_loaded_file(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * "自然順"アルゴリズムにより文字列比較を行う
 * @link http://php.net/manual/ja/function.strnatcmp.php
 * @param string $str1 <p>
 * 最初の文字列。
 * </p>
 * @param string $str2 <p>
 * 次の文字列。
 * </p>
 * @return int 他の文字列比較関数と同様に、この関数は、
 * <i>str1</i> が <i>str2</i>
 * より小さいに場合に &lt; 0、<i>str1</i> が
 * <i>str2</i> より大きい場合に &gt; 0 、等しい場合に
 * 0 を返します。
 */
function strnatcmp(string $str1, string $str2): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * "自然順"アルゴリズムにより大文字小文字を区別しない文字列比較を行う
 * @link http://php.net/manual/ja/function.strnatcasecmp.php
 * @param string $str1 <p>
 * 最初の文字列。
 * </p>
 * @param string $str2 <p>
 * 次の文字列。
 * </p>
 * @return int 他の文字列比較関数と同様に、この関数は、
 * <i>str1</i>が<i>str2</i>
 * より小さい場合に &lt; 0、<i>str1</i>が
 * <i>str2</i>より大きい場合に &gt; 0 、等しい場合に
 * 0 を返します。
 */
function strnatcasecmp(string $str1, string $str2): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 副文字列の出現回数を数える
 * @link http://php.net/manual/ja/function.substr-count.php
 * @param string $haystack <p>
 * 検索対象の文字列
 * </p>
 * @param string $needle <p>
 * 検索する副文字列
 * </p>
 * @param int $offset [optional] <p>
 * 開始位置のオフセット。
 * 負の数を指定すると、文字列の末尾から数えます。
 * </p>
 * @param int $length [optional] <p>
 * 指定したオフセット以降に副文字列で検索する最大長。
 * オフセットと長さの総和が <i>haystack</i>
 * の長さよりも長い場合、警告が発生します。
 * 負の数を指定すると、<i>haystack</i> の末尾から数えます。
 * </p>
 * @return int この関数は 整数 を返します。
 */
function substr_count(string $haystack, string $needle, int $offset = 0, int $length = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定したマスク内に含まれる文字からなる文字列の最初のセグメントの長さを探す
 * @link http://php.net/manual/ja/function.strspn.php
 * @param string $subject <p>
 * 調べたい文字列。
 * </p>
 * @param string $mask <p>
 * 許可する文字の一覧。
 * </p>
 * @param int $start [optional] <p>
 * <i>subject</i> の中で調べ始める位置。
 * </p>
 * <p>
 * <i>start</i> に非負の値を指定すると、
 * <b>strspn</b> は
 * <i>subject</i> の
 * <i>start</i> 番目の位置から調査を始めます。
 * たとえば、文字列 'abcdef' において
 * 0 番目の位置にある文字は 'a'
 * で 2 番目の位置にある文字は
 * 'c' のようになります。
 * </p>
 * <p>
 * <i>start</i> に負の値を指定すると、
 * <b>strspn</b> は
 * <i>subject</i> の最後から
 * <i>start</i> 番目の位置から調査を始めます。
 * </p>
 * @param int $length [optional] <p>
 * <i>subject</i> 内で調べる部分の長さ。
 * </p>
 * <p>
 * <i>length</i> に非負の値を指定すると、
 * <i>subject</i> の開始位置から
 * <i>length</i> 文字ぶんの範囲を調査します。
 * </p>
 * <p>
 * <i>length</i> に負の値を指定すると、
 * <i>subject</i> の調査範囲は
 * 開始位置から始まって <i>subject</i>
 * の最後から <i>length</i> だけさかのぼったところまでとなります。
 * </p>
 * @return int <i>subject</i> の中で、全て
 * <i>mask</i> の中の文字からなる最初のセグメントの長さを返します。
 * </p>
 * <p>
 * <i>start</i> パラメータを設定した場合は、返される長さはその位置からのものとなります。
 * <i>subject</i> の先頭からの長さではありません。
 */
function strspn(string $subject, string $mask, int $start = null, int $length = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * マスクにマッチしない最初のセグメントの長さを返す
 * @link http://php.net/manual/ja/function.strcspn.php
 * @param string $subject <p>
 * 調べたい文字列。
 * </p>
 * @param string $mask <p>
 * 許可しない文字をすべて含む文字列。
 * </p>
 * @param int $start [optional] <p>
 * <i>subject</i> の中で調べ始める位置。
 * </p>
 * <p>
 * <i>start</i> に非負の値を指定した場合は、
 * <b>strcspn</b> は、
 * <i>subject</i> の
 * <i>start</i> 番目の文字から調べ始めます。
 * たとえば 'abcdef' という文字列があったとすると、
 * 0 番目の文字が 'a' で
 * 2 番目の文字は 'c' のようになります。
 * </p>
 * <p>
 * <i>start</i> に負の値を指定した場合は、
 * <b>strcspn</b> は、
 * <i>subject</i> の後ろから
 * <i>start</i> 番目の文字から調べ始めます。
 * </p>
 * @param int $length [optional] <p>
 * <i>subject</i> の中での調べるセグメントの長さ。
 * </p>
 * <p>
 * <i>length</i> に非負の値を指定した場合は、
 * <i>subject</i> の開始位置から
 * <i>length</i> 文字ぶんだけ調べます。
 * </p>
 * <p>
 * <i>length</i> に負の値を指定した場合は、
 * <i>subject</i> の開始位置から調べ始めて、
 * <i>subject</i> の末尾から
 * <i>length</i> 文字目のところまで調べます。
 * </p>
 * @return int <i>subject</i> の中で、
 * <i>mask</i> の文字をまったく含まない
 * 最初のセグメントの長さを返します。
 * </p>
 * <p>
 * <i>start</i> を指定した場合は、その位置から長さを数え始めます。
 * <i>subject</i> の先頭から数えるわけではありません。
 */
function strcspn(string $subject, string $mask, int $start = null, int $length = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列をトークンに分割する
 * @link http://php.net/manual/ja/function.strtok.php
 * @param string $str <p>
 * より小さい文字列 (トークン) に分割する文字列。
 * </p>
 * @param string $token <p>
 * <i>str</i> を分割する際に使用する区切り文字。
 * </p>
 * @return string 文字列トークンを返します。
 */
function strtok(string $str, string $token): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列を大文字にする
 * @link http://php.net/manual/ja/function.strtoupper.php
 * @param string $string <p>
 * 入力文字列。
 * </p>
 * @return string 大文字にした文字列を返します。
 */
function strtoupper(string $string): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列を小文字にする
 * @link http://php.net/manual/ja/function.strtolower.php
 * @param string $string <p>
 * 入力文字列。
 * </p>
 * @return string 小文字に変換した文字列を返します。
 */
function strtolower(string $string): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列内の部分文字列が最初に現れる場所を見つける
 * @link http://php.net/manual/ja/function.strpos.php
 * @param string $haystack <p>
 * 検索を行う文字列。
 * </p>
 * @param mixed $needle <p>
 * <i>needle</i> が文字列でない場合は、
 * それを整数に変換し、その番号に対応する文字として扱います。
 * </p>
 * @param int $offset [optional] <p>
 * 指定すると、文字列内での検索開始位置がその位置になります。
 * 負の数を指定すると、文字列の末尾からこの数だけ戻った場所から検索を開始します。
 * </p>
 * @return mixed needle が見つかった位置を、
 * <i>haystack</i> 文字列の先頭 (offset の値とは無関係) からの相対位置で返します。
 * 文字列の開始位置は 0 であり、1 ではないことに注意しましょう。
 * </p>
 * <p>
 * needle が見つからない場合は <b>FALSE</b> を返します。
 */
function strpos(string $haystack, $needle, int $offset = 0) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 大文字小文字を区別せずに文字列が最初に現れる位置を探す
 * @link http://php.net/manual/ja/function.stripos.php
 * @param string $haystack <p>
 * 検索を行う文字列。
 * </p>
 * @param string $needle <p>
 * <i>needle</i> は、
 * ひとつまたは複数の文字であることに注意しましょう。
 * </p>
 * <p>
 * <i>needle</i> が文字列でない場合は、
 * それを整数に変換し、その番号に対応する文字として扱います。
 * </p>
 * @param int $offset [optional] <p>
 * 指定すると、文字列内での検索開始位置がその位置になります。
 * 負の数を指定すると、文字列の末尾からこの数だけ戻った場所から検索を開始します。
 * </p>
 * @return mixed needle が見つかった位置を、
 * <i>haystack</i> 文字列の先頭 (offset の値とは無関係) からの相対位置で返します。
 * 文字列の開始位置は 0 であり、1 ではないことに注意しましょう。
 * </p>
 * <p>
 * needle が見つからない場合は <b>FALSE</b> を返します。
 */
function stripos(string $haystack, string $needle, int $offset = 0) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列中に、ある部分文字列が最後に現れる場所を探す
 * @link http://php.net/manual/ja/function.strrpos.php
 * @param string $haystack <p>
 * 検索を行う文字列。
 * </p>
 * @param string $needle <p>
 * <i>needle</i> が文字列でない場合は、
 * それを整数に変換し、その番号に対応する文字として扱います。
 * </p>
 * @param int $offset [optional] <p>
 * 指定すると、文字列の開始位置からこの文字数だけ進んだところで検索を中止します。
 * 負の値を指定すると、文字列の最後からこの文字数だけ戻ったところから逆向きに検索を開始します。
 * </p>
 * @return int needle が見つかった位置を、
 * <i>haystack</i> 文字列の先頭 (offset の値とは無関係) からの相対位置で返します。
 * 文字列の開始位置は 0 であり、1 ではないことに注意しましょう。
 * </p>
 * <p>
 * needle が見つからない場合は <b>FALSE</b> を返します。
 */
function strrpos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 文字列中で、特定の(大文字小文字を区別しない)文字列が最後に現れた位置を探す
 * @link http://php.net/manual/ja/function.strripos.php
 * @param string $haystack <p>
 * 検索を行う文字列。
 * </p>
 * @param string $needle <p>
 * <i>needle</i> が文字列でない場合は、
 * それを整数に変換し、その番号に対応する文字として扱います。
 * </p>
 * @param int $offset [optional] <p>
 * 指定すると、文字列の開始位置からこの文字数だけ進んだところで検索を中止します。
 * 負の値を指定すると、文字列の最後からこの文字数だけ戻ったところから逆向きに検索を開始します。
 * </p>
 * @return int needle が見つかった位置を、
 * <i>haystack</i> 文字列の先頭 (offset の値とは無関係) からの相対位置で返します。
 * 文字列の開始位置は 0 であり、1 ではないことに注意しましょう。
 * </p>
 * <p>
 * needle が見つからない場合は <b>FALSE</b> を返します。
 */
function strripos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列を逆順にする
 * @link http://php.net/manual/ja/function.strrev.php
 * @param string $string <p>
 * 逆順にしたい文字列。
 * </p>
 * @return string 逆順にした文字列を返します。
 */
function strrev(string $string): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 論理表記のヘブライ語を物理表記に変換する
 * @link http://php.net/manual/ja/function.hebrev.php
 * @param string $hebrew_text <p>
 * ヘブライ語の入力文字列。
 * </p>
 * @param int $max_chars_per_line [optional] <p>
 * このオプションのパラメータは、
 * 出力される行毎の最大文字数を返します。
 * </p>
 * @return string 物理表記の文字列を返します。
 */
function hebrev(string $hebrew_text, int $max_chars_per_line = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 論理表記のヘブライ語を、改行の変換も含めて物理表記に変換する
 * @link http://php.net/manual/ja/function.hebrevc.php
 * @param string $hebrew_text <p>
 * ヘブライ語の入力文字列。
 * </p>
 * @param int $max_chars_per_line [optional] <p>
 * このオプションのパラメータは、
 * 出力される行毎の最大文字数を返します。
 * </p>
 * @return string 物理表記の文字列を返します。
 */
function hebrevc(string $hebrew_text, int $max_chars_per_line = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 改行文字の前に HTML の改行タグを挿入する
 * @link http://php.net/manual/ja/function.nl2br.php
 * @param string $string <p>
 * 入力文字列。
 * </p>
 * @param bool $is_xhtml [optional] <p>
 * XHTML 準拠の改行を使うか否か。
 * </p>
 * @return string 変更後の文字列を返します。
 */
function nl2br(string $string, bool $is_xhtml = true): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * パスの最後にある名前の部分を返す
 * @link http://php.net/manual/ja/function.basename.php
 * @param string $path <p>
 * パス。
 * </p>
 * <p>
 * Windows では、スラッシュ(/) とバックスラッシュ
 * (\) の両方がディレクトリ区切り文字として使われます。
 * その他の環境ではスラッシュ(/)になります。
 * </p>
 * @param string $suffix [optional] <p>
 * 名前の部分が
 * <i>suffix</i> で終了する場合、
 * この部分もカットされます。
 * </p>
 * @return string 指定した <i>path</i> のベース名を返します。
 */
function basename(string $path, string $suffix = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 親ディレクトリのパスを返す
 * @link http://php.net/manual/ja/function.dirname.php
 * @param string $path <p>
 * パス。
 * </p>
 * <p>
 * Windows では、スラッシュ(/)とバックスラッシュ
 * (\)の両方がディレクトリ区切り文字として使われます。
 * その他の環境ではスラッシュ(/)になります。
 * </p>
 * @param int $levels [optional] <p>
 * 親ディレクトリをどこまでさかのぼるか。
 * </p>
 * <p>
 * 正の整数でなければいけません。
 * </p>
 * @return string 親ディレクトリのパスを返します。
 * <i>path</i> にスラッシュが無い場合は、
 * カレントディレクトリを示すドット ('.')
 * を返します。それ以外の場合は、スラッシュ以降の
 * /component 部分を取り除いた
 * <i>path</i> を返します。
 */
function dirname(string $path, int $levels = 1): string {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * ファイルパスに関する情報を返す
 * @link http://php.net/manual/ja/function.pathinfo.php
 * @param string $path <p>
 * 調べたいパス。
 * </p>
 * @param int $options [optional] <p>
 * 指定する場合は、どの要素を返すのかを
 * <b>PATHINFO_DIRNAME</b>、
 * <b>PATHINFO_BASENAME</b>、
 * <b>PATHINFO_EXTENSION</b> あるいは
 * <b>PATHINFO_FILENAME</b>
 * のいずれかで指定します。
 * </p>
 * <p>
 * <i>options</i> を省略した場合はすべての要素を返します。
 * </p>
 * @return mixed <i>options</i> パラメータを渡さなかった場合は、次の要素を含む連想配列を返します。
 * dirname、basename、
 * extension (存在すれば)、そして filename。
 * </p>
 * <p>
 * <i>path</i> に複数の拡張子が含まれる場合は、
 * <b>PATHINFO_EXTENSION</b> は最後の拡張子だけを返します。また、
 * <b>PATHINFO_FILENAME</b> は最後の拡張子だけを取り除きます
 * (最初のサンプルを参照ください)。
 * </p>
 * <p>
 * <i>path</i> に拡張子がない場合は、
 * extension 要素は返されません
 * (以下の二番目の例を参照ください)。
 * </p>
 * <p>
 * <i>path</i> の basename
 * がドットで始まる場合は、それに続く文字は
 * extension とみなされます。そして filename
 * は空文字列となります (以下の三番目の例を参照ください)。
 * </p>
 * <p>
 * <i>options</i> を指定すると、
 * 要求した要素を文字列で返します。
 */
function pathinfo(string $path, int $options = PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_EXTENSION | PATHINFO_FILENAME) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * クォートされた文字列のクォート部分を取り除く
 * @link http://php.net/manual/ja/function.stripslashes.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @return string バックスラッシュが取り除かれた文字列を返します(\'
 * が ' になるなど)。
 * 2 つ並んだバックスラッシュ (\\)
 * は 1 つのバックスラッシュ (\) になります。
 */
function stripslashes(string $str): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>addcslashes</b> でクォートされた文字列をアンクォートする
 * @link http://php.net/manual/ja/function.stripcslashes.php
 * @param string $str <p>
 * 元に戻したい文字列。
 * </p>
 * @return string 元に戻した文字列を返します。
 */
function stripcslashes(string $str): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列が最初に現れる位置を見つける
 * @link http://php.net/manual/ja/function.strstr.php
 * @param string $haystack <p>
 * 入力文字列。
 * </p>
 * @param mixed $needle <p>
 * <i>needle</i> が文字列でない場合は、
 * それを整数に変換し、その番号に対応する文字として扱います。
 * </p>
 * @param bool $before_needle [optional] <p>
 * <b>TRUE</b> にすると、<b>strstr</b>
 * の返り値は、<i>haystack</i> の中で最初に
 * <i>needle</i> があらわれる箇所より前の部分となります (needle は含めません)。
 * </p>
 * @return string 部分文字列を返します。
 * <i>needle</i> が見つからない場合は <b>FALSE</b> を返します。
 */
function strstr(string $haystack, $needle, bool $before_needle = false): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 大文字小文字を区別しない <b>strstr</b>
 * @link http://php.net/manual/ja/function.stristr.php
 * @param string $haystack <p>
 * 検索を行う文字列。
 * </p>
 * @param mixed $needle <p>
 * <i>needle</i> が文字列でない場合は、
 * それを整数に変換し、その番号に対応する文字として扱います。
 * </p>
 * @param bool $before_needle [optional] <p>
 * <b>TRUE</b> にすると、<b>stristr</b>
 * の返り値は、<i>haystack</i> の中で最初に
 * <i>needle</i> があらわれる箇所より前の部分となります (needle は含めません)。
 * </p>
 * @return string マッチした部分文字列を返します。<i>needle</i>
 * が見つからない場合は <b>FALSE</b> を返します。
 */
function stristr(string $haystack, $needle, bool $before_needle = false): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列中に文字が最後に現れる場所を取得する
 * @link http://php.net/manual/ja/function.strrchr.php
 * @param string $haystack <p>
 * 検索を行う文字列。
 * </p>
 * @param mixed $needle <p>
 * <i>needle</i> がひとつ以上の文字を含んでいる場合は、
 * 最初のもののみが使われます。この動作は、
 * <b>strstr</b>
 * とは異なります。
 * </p>
 * <p>
 * <i>needle</i> が文字列でない場合は、
 * それを整数に変換し、その番号に対応する文字として扱います。
 * </p>
 * @return string この関数は、部分文字列を返します。
 * <i>needle</i> が見つからない場合は <b>FALSE</b> を返します。
 */
function strrchr(string $haystack, $needle): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 文字列をランダムにシャッフルする
 * @link http://php.net/manual/ja/function.str-shuffle.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @return string シャッフルされた文字列を返します。
 */
function str_shuffle(string $str): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 文字列に使用されている単語についての情報を返す
 * @link http://php.net/manual/ja/function.str-word-count.php
 * @param string $string <p>
 * 文字列。
 * </p>
 * @param int $format [optional] <p>
 * この関数の戻り値を設定します。現在サポートされている値は
 * 以下のとおりです。
 * 0 - 見つかった単語の数を返します。
 * @param string $charlist [optional] <p>
 * '単語' とみなされる文字に追加する文字のリスト。
 * </p>
 * @return mixed 選択した <i>format</i> に応じて、配列あるいは整数を返します。
 */
function str_word_count(string $string, int $format = 0, string $charlist = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 文字列を配列に変換する
 * @link http://php.net/manual/ja/function.str-split.php
 * @param string $string <p>
 * 入力文字列。
 * </p>
 * @param int $split_length [optional] <p>
 * 分割した部分の最大長。
 * </p>
 * @return array オプションのパラメータ
 * <i>split_length</i> が指定されている場合、
 * 返される配列の各要素は、<i>split_length</i>
 * の長さとなります。それ以外の場合、1 文字ずつ分割された配列となります。
 * </p>
 * <p>
 * <i>split_length</i> が 1 より小さい場合に
 * <b>FALSE</b> を返します。<i>split_length</i> が
 * <i>string</i> の長さより大きい場合、文字列全体が
 * 最初の(そして唯一の)要素となる配列を返します。
 */
function str_split(string $string, int $split_length = 1): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * 文字列の中から任意の文字を探す
 * @link http://php.net/manual/ja/function.strpbrk.php
 * @param string $haystack <p>
 * <i>char_list</i> を探す文字列。
 * </p>
 * @param string $char_list <p>
 * このパラメータは大文字小文字を区別します。
 * </p>
 * @return string 見つかった文字から始まる文字列、あるいは見つからなかった場合に
 * <b>FALSE</b> を返します。
 */
function strpbrk(string $haystack, string $char_list): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 指定した位置から指定した長さの 2 つの文字列について、バイナリ対応で比較する
 * @link http://php.net/manual/ja/function.substr-compare.php
 * @param string $main_str <p>
 * 比較したい最初の文字列。
 * </p>
 * @param string $str <p>
 * 比較したい二番目の文字列。
 * </p>
 * @param int $offset <p>
 * 比較を開始する位置。
 * 負の値を指定した場合は、文字列の最後から数えます。
 * </p>
 * @param int $length [optional] <p>
 * 比較する長さ。デフォルト値は、
 * <i>main_str</i> の長さから <i>offset</i> を引いたものと
 * <i>str</i> の長さのうち、長いほうです。
 * </p>
 * @param bool $case_insensitivity [optional] <p>
 * <i>case_insensitivity</i> が <b>TRUE</b> の場合、
 * 大文字小文字を区別せずに比較します。
 * </p>
 * @return int <i>main_str</i> の <i>offset</i>
 * 以降が <i>str</i> より小さい場合に負の数、
 * <i>str</i> より大きい場合に正の数、
 * 等しい場合に 0 を返します。<i>offset</i> が
 * <i>main_str</i> の長さ以上であるか、あるいは <i>length</i>
 * が設定されていて 1 未満である場合 (PHP 5.5.11 より前のバージョン)、<b>substr_compare</b>
 * は警告を表示して <b>FALSE</b> を返します。
 */
function substr_compare(string $main_str, string $str, int $offset, int $length = null, bool $case_insensitivity = false): int {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * ロケールに基づく文字列比較
 * @link http://php.net/manual/ja/function.strcoll.php
 * @param string $str1 <p>
 * 最初の文字列。
 * </p>
 * @param string $str2 <p>
 * 次の文字列。
 * </p>
 * @return int <i>str1</i> が <i>str2</i>
 * より小さい場合に 0 未満の値、<i>str1</i> が
 * <i>str2</i> より大きい場合に 0 より大きな値、
 * 両者が等しい場合に 0 を返します。
 */
function strcoll(string $str1, string $str2): int {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 数値を金額文字列にフォーマットする
 * @link http://php.net/manual/ja/function.money-format.php
 * @param string $format <p>
 * フォーマット指定の書式は以下の順になります。
 * <p>% 文字</p>
 * @param float $number <p>
 * フォーマットする数値。
 * </p>
 * @return string フォーマットした文字列を返します。
 * フォーマット文字列の前後の文字は、そのまま返されます。
 * <i>number</i> が非数値の場合は <b>NULL</b> を返し、
 * <b>E_WARNING</b> を発行します。
 */
function money_format(string $format, float $number): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の一部分を返す
 * @link http://php.net/manual/ja/function.substr.php
 * @param string $string <p>
 * 入力文字列。最低 1 文字以上を指定しなければなりません。
 * </p>
 * @param int $start <p>
 * <i>start</i> が正の場合、返される文字列は、
 * <i>string</i> の 0 から数えて
 * <i>start</i>番目から始まる文字列となります。
 * 例えば、文字列'abcdef'において位置
 * 0にある文字は、'a'であり、
 * 位置2には'c'があります。
 * </p>
 * <p>
 * <i>start</i> が負の場合、返される文字列は、
 * <i>string</i>の後ろから数えて
 * <i>start</i>番目から始まる文字列となります。
 * </p>
 * <p>
 * <i>string</i> の長さが
 * <i>start</i> 文字より短い場合は <b>FALSE</b> が返されます。
 * </p>
 * <p>
 * 負の <i>start</i> の使用
 * <code>
 * $rest = substr("abcdef", -1); // "f" を返す
 * $rest = substr("abcdef", -2); // "ef" を返す
 * $rest = substr("abcdef", -3, 1); // "d" を返す
 * </code>
 * </p>
 * @param int $length [optional] <p>
 * <i>length</i> が指定され、かつ正である場合、
 * 返される文字列は <i>start</i>
 * (<i>string</i> の長さに依存します)
 * から数えて<i>length</i>文字数分となります。
 * </p>
 * <p>
 * <i>length</i> が指定され、かつ負である場合、
 * <i>string</i> の終端からその文字数分の文字が省略されます
 * (<i>start</i> が負の場合は、
 * 開始位置を算出したあとで)。
 * もし <i>start</i> が切り出し位置を超える場合、
 * <b>FALSE</b> が返されます。
 * </p>
 * <p>
 * <i>length</i> が指定され、かつ 0、<b>NULL</b>、もしくは <b>FALSE</b> であれば、空の文字が返されます。
 * </p>
 * <p>
 * <i>length</i> を省略した場合は、
 * <i>start</i> の位置から文字列の最後までの部分文字列を返します。
 * </p>
 * 負の <i>length</i> の使用
 * <code>
 * $rest = substr("abcdef", 0, -1); // "abcde" を返す
 * $rest = substr("abcdef", 2, -1); // "cde" を返す
 * $rest = substr("abcdef", 4, -4); // false を返す
 * $rest = substr("abcdef", -3, -1); // "de" を返す
 * </code>
 * @return string <i>string</i> の一部を返します。失敗した場合に <b>FALSE</b> を返します。あるいは空文字列を返します。
 */
function substr(string $string, int $start, int $length = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の一部を置換する
 * @link http://php.net/manual/ja/function.substr-replace.php
 * @param mixed $string <p>
 * 入力文字列。
 * </p>
 * <p>
 * 文字列の配列を指定することもでき、各文字列について順に置換を行います。
 * この場合、他のパラメータ <i>replacement</i>、<i>start</i>
 * および <i>length</i> がスカラ値なら
 * それを各入力文字列に順次適用し、配列なら各入力文字列に対応する要素の値を適用します。
 * </p>
 * @param mixed $replacement <p>
 * 置換する文字列。
 * </p>
 * @param mixed $start <p>
 * <i>start</i> が負ではない場合、置換は
 * <i>string</i> で <i>start</i>
 * 番目の文字から始まります。
 * </p>
 * <p>
 * <i>start</i> が負の場合、置換は
 * <i>string</i> の終端から
 * <i>start</i> 番目の文字から始まります。
 * </p>
 * @param mixed $length [optional] <p>
 * 正の値を指定した場合、
 * <i>string</i> の置換される部分の長さを表します。
 * 負の場合、置換を停止する位置が <i>string</i>
 * の終端から何文字目であるかを表します。このパラメータが省略された場合、
 * デフォルト値は strlen(<i>string</i>)、すなわち、
 * <i>string</i> の終端まで置換することになります。
 * 当然、もし <i>length</i> がゼロだったら、
 * この関数は <i>string</i> の最初から
 * <i>start</i> の位置に
 * <i>replacement</i> を挿入するということになります。
 * </p>
 * @return mixed 結果の文字列を返します。もし、<i>string</i>
 * が配列の場合、配列が返されます。
 */
function substr_replace($string, $replacement, $start, $length = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * メタ文字をクォートする
 * @link http://php.net/manual/ja/function.quotemeta.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @return string メタ文字をクォートした文字列を返します。
 * 空文字を <i>str</i> に渡した場合は <b>FALSE</b> を返します。
 */
function quotemeta(string $str): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の最初の文字を大文字にする
 * @link http://php.net/manual/ja/function.ucfirst.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @return string 変換後の文字列を返します。
 */
function ucfirst(string $str): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 文字列の最初の文字を小文字にする
 * @link http://php.net/manual/ja/function.lcfirst.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @return string 変換後の文字列を返します。
 */
function lcfirst(string $str): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の各単語の最初の文字を大文字にする
 * @link http://php.net/manual/ja/function.ucwords.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @param string $delimiters [optional] <p>
 * オプションの <i>delimiters</i> で、単語の区切り文字を指定します。
 * </p>
 * @return string 変更後の文字列を返します。
 */
function ucwords(string $str, string $delimiters = " \t\r\n\f\v"): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字の変換あるいは部分文字列の置換を行う
 * @link http://php.net/manual/ja/function.strtr.php
 * @param string $str <p>
 * 変換する文字列。
 * </p>
 * @param string $from <p>
 * <i>to</i> に変換される文字列。
 * </p>
 * @param string $to <p>
 * <i>from</i> を置換する文字列。
 * </p>
 * @return string 変換後の文字列を返します。
 * </p>
 * <p>
 * <i>replace_pairs</i> の中に空文字列
 * ("") のキーがある場合は
 * <b>FALSE</b> を返します。
 * <i>str</i> がスカラー値でない場合は文字列への変換をせず、
 * 警告を発して <b>NULL</b> を返します。
 */
function strtr(string $str, string $from, string $to): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列をスラッシュでクォートする
 * @link http://php.net/manual/ja/function.addslashes.php
 * @param string $str <p>
 * エスケープしたい文字列。
 * </p>
 * @return string エスケープされた文字列を返します。
 */
function addslashes(string $str): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * C 言語と同様にスラッシュで文字列をクォートする
 * @link http://php.net/manual/ja/function.addcslashes.php
 * @param string $str <p>
 * エスケープしたい文字列。
 * </p>
 * @param string $charlist <p>
 * エスケープの対象となる文字を並べたもの。
 * <i>charlist</i>
 * が \n, \r 等の文字を含んでいる場合、
 * C言語と同様の手法によりエスケープされます。
 * アスキーコードが32未満または126より大きい文字は、8進表現に変換されます。
 * </p>
 * <p>
 * charlist 引数の文字の列びを定義する際には、
 * 範囲の最初と最後で指定する文字集合に含まれる文字の種類を把握するようにしてください。
 * <code>
 * echo addcslashes('foo[ ]', 'A..z');
 * // 出力: \f\o\o\[ \]
 * // 全ての大文字と小文字はエスケープされます。
 * // ... しかし、[\]^_` もエスケープされてしまいます。
 * </code>
 * また、ある範囲を指定する最初の文字がその範囲の2番目の文字よりも大きな
 * ASCII 値を有している場合、範囲は定義されません。
 * 最初と最後の文字とピリオド文字のみがエスケープされます。
 * ある文字の ASCII 値を見つけるには、
 * <b>ord</b> 関数を使用してください。
 * <code>
 * echo addcslashes("zoo['.']", 'z..A');
 * // 出力: \zoo['\.']
 * </code>
 * </p>
 * <p>
 * 0, a, b, f, n, r, t そして v といった文字をエスケープするときには注意しましょう。
 * 変換結果はそれぞれ \0, \a, \b, \f, \n, \r, \t そして \v となりますが、
 * これらはすべて、C 言語では定義済みのエスケープシーケンスです。
 * その多くは C 言語に由来する他の言語でもエスケープシーケンスとして定義されており、
 * PHP も例外ではありません。つまり、<i>charlist</i> にこれらの文字を定義した状態で
 * <b>addcslashes</b> を使って他の言語のコードを生成したときに、
 * 期待通りの結果が得られない可能性があるということです。
 * </p>
 * @return string エスケープされた文字列を返します。
 */
function addcslashes(string $str, string $charlist): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の最後から空白 (もしくはその他の文字) を取り除く
 * @link http://php.net/manual/ja/function.rtrim.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @param string $character_mask [optional] <p>
 * <i>character_mask</i> パラメータにより、
 * 削除する文字を指定することも可能です。
 * 削除したい全ての文字をリストにしてください。..
 * を文字の範囲を指定する際に使用可能です。
 * </p>
 * @return string 変更後の文字列を返します。
 */
function rtrim(string $str, string $character_mask = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 検索文字列に一致したすべての文字列を置換する
 * @link http://php.net/manual/ja/function.str-replace.php
 * @param mixed $search <p>
 * 探したい値。needle (針) と呼ばれることもあります。
 * 配列を使えば、複数の値を指定することもできます。
 * </p>
 * @param mixed $replace <p>
 * 見つかった <i>search</i> を置き換える値。
 * 配列を使えば、複数の値を指定することもできます。
 * </p>
 * @param mixed $subject <p>
 * 検索・置換の対象となる文字列あるいは配列。
 * haystack (干し草の山) と呼ばれることもあります。
 * </p>
 * <p>
 * <i>subject</i> が配列の場合、
 * <i>subject</i> の各エントリについて検索と置換が行われ、
 * 返り値は同様に配列となります。
 * </p>
 * @param int $count [optional] <p>
 * 指定した場合は、マッチして置換が行われた箇所の個数がここに格納されます。
 * </p>
 * @return mixed この関数は、置換後の文字列あるいは配列を返します。
 */
function str_replace($search, $replace, $subject, int &$count = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 大文字小文字を区別しない <b>str_replace</b>
 * @link http://php.net/manual/ja/function.str-ireplace.php
 * @param mixed $search <p>
 * 探したい値。needle (針) と呼ばれることもあります。
 * 配列を使えば、複数の値を指定することもできます。
 * </p>
 * @param mixed $replace <p>
 * 見つかった <i>search</i> を置き換える値。
 * 配列を使えば、複数の値を指定することもできます。
 * </p>
 * @param mixed $subject <p>
 * 検索・置換の対象となる文字列あるいは配列。
 * haystack (干し草の山) と呼ばれることもあります。
 * </p>
 * <p>
 * <i>subject</i> が配列の場合は、そのすべての要素に
 * 対して検索と置換が行われ、返される結果も配列となります。
 * </p>
 * @param int $count [optional] <p>
 * 指定した場合は、マッチして置換が行われた箇所の個数がここに格納されます。
 * </p>
 * @return mixed 置換した文字列あるいは配列を返します。
 */
function str_ireplace($search, $replace, $subject, int &$count = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列を反復する
 * @link http://php.net/manual/ja/function.str-repeat.php
 * @param string $input <p>
 * 繰り返す文字列。
 * </p>
 * @param int $multiplier <p>
 * <i>input</i> を繰り返す回数。
 * </p>
 * <p>
 * <i>multiplier</i> は 0 以上でなければなりません。
 * <i>multiplier</i> が
 * 0 に設定された場合、この関数は空文字を返します。
 * </p>
 * @return string 繰り返した文字列を返します。
 */
function str_repeat(string $input, int $multiplier): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列で使用されている文字に関する情報を返す
 * @link http://php.net/manual/ja/function.count-chars.php
 * @param string $string <p>
 * 調べたい文字列。
 * </p>
 * @param int $mode [optional] <p>
 * 返り値を参照ください。
 * </p>
 * @return mixed <i>mode</i> の値により、
 * <b>count_chars</b> は以下の値のどれかを返します。
 * 0 - 各バイト値をキー、各バイトの出現回数を値とする配列。
 * 1 - 0と同じですが、各バイト値の出現回数がゼロより大きいものの一覧となります。
 * 2 - 0と同じですが、各バイト値の出現回数がゼロであるものの一覧となります。
 * 3 - すべての一意な文字を含む文字列を返します。
 * 4 - 使用されていない全ての文字を含む文字列を返します。
 */
function count_chars(string $string, int $mode = 0) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列をより小さな部分に分割する
 * @link http://php.net/manual/ja/function.chunk-split.php
 * @param string $body <p>
 * 分割したい文字列。
 * </p>
 * @param int $chunklen [optional] <p>
 * 各部分の長さ。
 * </p>
 * @param string $end [optional] <p>
 * 行末の区切り。
 * </p>
 * @return string 分割した文字列を返します。
 */
function chunk_split(string $body, int $chunklen = 76, string $end = "\r\n"): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の先頭および末尾にあるホワイトスペースを取り除く
 * @link http://php.net/manual/ja/function.trim.php
 * @param string $str <p>
 * ホワイトスペースを取り除く string
 * </p>
 * @param string $character_mask [optional] <p>
 * <i>character_mask</i>パラメータにより、削除する
 * 文字を指定することも可能です。削除したい全ての文字をリストに
 * してください。..を文字の範囲を指定する際に
 * 使用可能です。
 * </p>
 * @return string ホワイトスペースを取り除いた文字列
 */
function trim(string $str, string $character_mask = " \t\n\r\0\x0B"): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の最初から空白 (もしくはその他の文字) を取り除く
 * @link http://php.net/manual/ja/function.ltrim.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @param string $character_mask [optional] <p>
 * <i>character_mask</i>パラメータにより、削除する
 * 文字を指定することも可能です。削除したい全ての文字をリストに
 * してください。..を文字の範囲を指定する際に
 * 使用可能です。
 * </p>
 * @return string この関数は文字列の最初から空白文字を取り除き、
 * 取り除かれた文字列を返します。2番目のパラメータを指定しない場合、
 * <b>ltrim</b>は以下の文字を削除します。
 * " " (ASCII 32
 * (0x20)), 通常の空白。
 * "\t" (ASCII 9
 * (0x09)), タブ。
 * "\n" (ASCII 10
 * (0x0A)), 改行。
 * "\r" (ASCII 13
 * (0x0D)), 復帰。
 * "\0" (ASCII 0
 * (0x00)), NUL バイト。
 * "\x0B" (ASCII 11
 * (0x0B)), 垂直タブ。
 */
function ltrim(string $str, string $character_mask = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列から HTML および PHP タグを取り除く
 * @link http://php.net/manual/ja/function.strip-tags.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @param string $allowable_tags [optional] <p>
 * オプションの2番目の引数により、取り除かないタグを指定できます。
 * </p>
 * <p>
 * HTML コメントや PHP タグも削除されるようになりました。この機能はハードコードされており、
 * <i>allowable_tags</i> で変更することはできません。
 * </p>
 * <p>
 * PHP 5.3.4 以降では、<i>allowable_tags</i> で使えるのは自己終了型でない XHTML タグだけになりました。
 * 自己終了型の XHTML タグは無視されます。たとえば、
 * &lt;br&gt; と
 * &lt;br/&gt; の両方を許可したい場合は、以下のようにしなければいけません。
 * </p>
 * <code>
 * strip_tags($input, '');
 * </code>
 * @return string タグを除去した文字列を返します。
 */
function strip_tags(string $str, string $allowable_tags = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 二つの文字列の間の類似性を計算する
 * @link http://php.net/manual/ja/function.similar-text.php
 * @param string $first <p>
 * 最初の文字列。
 * </p>
 * @param string $second <p>
 * 次の文字列。
 * </p>
 * @param float $percent [optional] <p>
 * 3 番目の引数としてリファレンスを渡すことにより、
 * <b>similar_text</b> は類似性をパーセントで計算します。
 * </p>
 * @return int 両方の文字列でマッチした文字の数を返します。
 */
function similar_text(string $first, string $second, float &$percent = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列を文字列により分割する
 * @link http://php.net/manual/ja/function.explode.php
 * @param string $delimiter <p>
 * 区切り文字列。
 * </p>
 * @param string $string <p>
 * 入力文字列。
 * </p>
 * @param int $limit [optional] <p>
 * <i>limit</i> に正の値が指定された場合、返される配列には
 * 最大 <i>limit</i> の要素が含まれ、その最後の要素には
 * <i>string</i> の残りの部分が全て含まれます。
 * </p>
 * <p>
 * もし <i>limit</i> パラメータが負の場合、
 * 最後の -<i>limit</i> 個の要素を除く全ての構成要素が返されます。
 * </p>
 * <p>
 * <i>limit</i> パラメータがゼロの場合は、1 を指定したものとみなされます。
 * </p>
 * @return array <i>string</i> の内容を
 * <i>delimiter</i> で分割した文字列の配列を返します。
 * </p>
 * <p>
 * 空の文字列 ("") が <i>delimiter</i> として使用された場合、
 * <b>explode</b> は <b>FALSE</b>
 * を返します。<i>delimiter</i> に引数
 * <i>string</i> に含まれていない値が含まれている場合は、
 * <i>limit</i> が負の値なら空の配列、そうでなければ
 * 引数 <i>string</i> を含む配列を返します。
 */
function explode(string $delimiter, string $string, int $limit = PHP_INT_MAX): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列要素を文字列により連結する
 * @link http://php.net/manual/ja/function.implode.php
 * @param string $glue <p>
 * デフォルトは空文字列です。
 * </p>
 * @param array $pieces <p>
 * 連結したい文字列の配列。
 * </p>
 * @return string すべての配列要素の順序を変えずに、各要素間に
 * <i>glue</i> 文字列をはさんで 1 つの文字列にして返します。
 */
function implode(string $glue, array $pieces): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>implode</b> のエイリアス
 * @link http://php.net/manual/ja/function.join.php
 * @param $glue
 * @param $pieces
 */
function join($glue, $pieces) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ロケール情報を設定する
 * @link http://php.net/manual/ja/function.setlocale.php
 * @param int $category <p>
 * <i>category</i>は、名前付きの定数(または文字列)であり、
 * ロケール設定により影響を受ける関数のカテゴリを指定します。
 * <b>LC_ALL</b> 以下のものすべて
 * @param string $locale <p>
 * <i>locale</i>が <b>NULL</b> もしくは空の文字列
 * ""
 * の場合、ロケール名は上記のカテゴリと同じ名前の環境変数の値、
 * または環境変数 "LANG" からセットされます。
 * </p>
 * <p>
 * <i>locale</i> が "0" の場合、
 * ロケール設定は適用されず、単に現在の設定が返されます。
 * </p>
 * <p>
 * <i>locale</i> が配列もしくは追加のパラメータが続く場合、
 * それぞれの配列要素もしくはパラメータは成功するまで新規ロケールとしてセットされます。
 * これは、ロケールが異なるシステムで異なる名前を持っている、
 * もしくはロケールが利用できない場合のフォールバックを提供するといった場合に有用です。
 * </p>
 * @param string $_ [optional] <p>
 * (オプションの文字列あるいは配列で、ロケール設定が成功するまで続けます)
 * </p>
 * @return string 現在の新しいロケールを返します。ロケール機能が未実装、
 * 指定されたロケールが存在しない、カテゴリ名が無効などの場合は
 * <b>FALSE</b> を返します。
 * </p>
 * <p>
 * また、カテゴリ名が無効の場合は警告メッセージが発生します。
 * カテゴリやロケール名は、
 * RFC 1766
 * や ISO 639 にあります。
 * ロケールの命名方式は、システムによって異なります。
 * </p>
 * <p>
 * <b>setlocale</b> の戻り値は、
 * PHP が実行されているシステムに依存します。
 * システムの setlocale 関数が返す値を返すためです。
 */
function setlocale(int $category, string $locale, string $_ = null): string {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * 数値に関するフォーマット情報を得る
 * @link http://php.net/manual/ja/function.localeconv.php
 * @return array <b>localeconv</b> は、
 * <b>setlocale</b> で設定された現在のロケールに基づきデータを返します。
 * 返される連想配列は、次のフィールドを有します。
 * <tr valign="top">
 * <td>配列要素</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>decimal_point</td>
 * <td>小数点文字</td>
 * </tr>
 * <tr valign="top">
 * <td>thousands_sep</td>
 * <td>千毎の区切り文字</td>
 * </tr>
 * <tr valign="top">
 * <td>grouping</td>
 * <td>数値集合を有する配列</td>
 * </tr>
 * <tr valign="top">
 * <td>int_curr_symbol</td>
 * <td>国際通貨記号 (すなわち、USD)</td>
 * </tr>
 * <tr valign="top">
 * <td>currency_symbol</td>
 * <td>ローカルな通貨記号 (すなわち、$)</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_decimal_point</td>
 * <td>通貨用の小数点文字</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_thousands_sep</td>
 * <td>通貨用の千毎の区切り文字</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_grouping</td>
 * <td>通貨集合を有する配列</td>
 * </tr>
 * <tr valign="top">
 * <td>positive_sign</td>
 * <td>正の値を表す記号</td>
 * </tr>
 * <tr valign="top">
 * <td>negative_sign</td>
 * <td>負の値を表す記号</td>
 * </tr>
 * <tr valign="top">
 * <td>int_frac_digits</td>
 * <td>国際分割桁</td>
 * </tr>
 * <tr valign="top">
 * <td>frac_digits</td>
 * <td>ローカルな分割桁</td>
 * </tr>
 * <tr valign="top">
 * <td>p_cs_precedes</td>
 * <td>
 * currency_symbol が正の値を前に置く場合に<b>TRUE</b>、後に置く場合に
 * <b>FALSE</b>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>p_sep_by_space</td>
 * <td>
 * 正の値から currency_symbol を1文字の空白で区切る場合に<b>TRUE</b>、
 * そうでない場合に<b>FALSE</b>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>n_cs_precedes</td>
 * <td>
 * currency_symbol が負の値を前に置く場合に<b>TRUE</b>、後に置く場合に
 * <b>FALSE</b>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>n_sep_by_space</td>
 * <td>
 * 負の値から currency_symbol を1文字の空白で区切る場合に<b>TRUE</b>、
 * そうでない場合に<b>FALSE</b>
 * </td>
 * </tr>
 * <td>p_sign_posn</td>
 * <td>
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列
 * </td>
 * </tr>
 * <td>n_sign_posn</td>
 * <td>
 * 0 - 量および通貨記号を括る括弧
 * 1 - 量および通貨記号の前に置く符号文字列
 * 2 - 量および通貨記号の後に置く符号文字列
 * 3 - 通貨記号の直前に置く符号文字列
 * 4 - 通貨記号の直後に置く符号文字列
 * </td>
 * </tr>
 * </p>
 * <p>
 * n_sign_posn や n_sign_posn
 * は、フォーマッタオプションの文字列を含みます。それぞれの数字は
 * 上に一覧されている条件の 1 つを表します。
 * </p>
 * <p>
 * groupingフィールドには、グループ化する方法を表す数字を定義する配
 * 列が含まれます。例えば、nl_NL ロケール用の通貨 groupingフィールド
 * (UTF-8 モードでのユーロ記号) には、
 * 3、3を値とする要素数2の配列が含まれます。この配列のより高い添字に
 * は、より左側のグループに関するものが含まれます。
 * ある配列要素が、<b>CHAR_MAX</b> に等しい場合、
 * さらにグループは行われません。配列要素が0に等しい場合、
 * 前の要素が使用されています。
 */
function localeconv(): array {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 言語およびロケール情報を検索する
 * @link http://php.net/manual/ja/function.nl-langinfo.php
 * @param int $item <p>
 * <i>item</i> は要素の整数値、もしくは要素の定数名です。
 * 以下は、使用される <i>item</i>
 * に対する定数名と説明の一覧です。
 * これらの定数のいくつかは特定のロケールに対して未定義、
 * もしくは値がありません。
 * <table>
 * nl_langinfo 定数
 * <tr valign="top">
 * <td>定数</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * LC_TIME カテゴリの定数</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ABDAY_(1-7)</b></td>
 * <td>一週間中の n 番目の曜日名の略式表記</td>
 * </tr>
 * <tr valign="top">
 * <td><b>DAY_(1-7)</b></td>
 * <td>一週間中の n 番目の曜日名 (DAY_1 = 日曜日)</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ABMON_(1-12)</b></td>
 * <td>n 番目の月の名前の略式表記</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MON_(1-12)</b></td>
 * <td>n 番目の月の名前</td>
 * </tr>
 * <tr valign="top">
 * <td><b>AM_STR</b></td>
 * <td>午前を表す文字列</td>
 * </tr>
 * <tr valign="top">
 * <td><b>PM_STR</b></td>
 * <td>午後を表す文字列</td>
 * </tr>
 * <tr valign="top">
 * <td><b>D_T_FMT</b></td>
 * <td><b>strftime</b> で日時を表すためのフォーマット文字列として使用することが可能な文字列</td>
 * </tr>
 * <tr valign="top">
 * <td><b>D_FMT</b></td>
 * <td><b>strftime</b> で日付を表すためのフォーマット文字列として使用することが可能な文字列</td>
 * </tr>
 * <tr valign="top">
 * <td><b>T_FMT</b></td>
 * <td><b>strftime</b> で時刻を表すためのフォーマット文字列として使用することが可能な文字列</td>
 * </tr>
 * <tr valign="top">
 * <td><b>T_FMT_AMPM</b></td>
 * <td><b>strftime</b> でAM/PM付き 12 時間表記を表すためのフォーマット文字列として使用することが可能な文字列</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ERA</b></td>
 * <td>ロケール固有の元号付きフォーマット</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ERA_YEAR</b></td>
 * <td>ロケール固有の元号付きフォーマットでの年</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ERA_D_T_FMT</b></td>
 * <td>ロケール固有の元号付きフォーマットでの日時 (<b>strftime</b> で使用可能な文字列)</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ERA_D_FMT</b></td>
 * <td>ロケール固有の元号付きフォーマットでの日付 (<b>strftime</b> で使用可能な文字列)</td>
 * </tr>
 * <tr valign="top">
 * <td><b>ERA_T_FMT</b></td>
 * <td>ロケール固有の元号付きフォーマットでの時刻 (<b>strftime</b> で使用可能な文字列)</td>
 * </tr>
 * <tr valign="top">
 * LC_MONETARY カテゴリの定数</td>
 * </tr>
 * <tr valign="top">
 * <td><b>INT_CURR_SYMBOL</b></td>
 * <td>国際通貨記号</td>
 * </tr>
 * <tr valign="top">
 * <td><b>CURRENCY_SYMBOL</b></td>
 * <td>地域通貨記号</td>
 * </tr>
 * <tr valign="top">
 * <td><b>CRNCYSTR</b></td>
 * <td><b>CURRENCY_SYMBOL</b> と同じ値</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MON_DECIMAL_POINT</b></td>
 * <td>小数点文字</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MON_THOUSANDS_SEP</b></td>
 * <td>1000 単位桁区切り (3 桁ごとのグループ化) の区切り文字</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MON_GROUPING</b></td>
 * <td>'grouping' と同じ</td>
 * </tr>
 * <tr valign="top">
 * <td><b>POSITIVE_SIGN</b></td>
 * <td>正値の表示に使用される記号</td>
 * </tr>
 * <tr valign="top">
 * <td><b>NEGATIVE_SIGN</b></td>
 * <td>負値の表示に使用される記号</td>
 * </tr>
 * <tr valign="top">
 * <td><b>INT_FRAC_DIGITS</b></td>
 * <td>国際的な方法で表現する際の小数点以下の桁数</td>
 * </tr>
 * <tr valign="top">
 * <td><b>FRAC_DIGITS</b></td>
 * <td>地域的な方法で表現する際の小数点以下の桁数</td>
 * </tr>
 * <tr valign="top">
 * <td><b>P_CS_PRECEDES</b></td>
 * <td><b>CURRENCY_SYMBOL</b> の前に正値がある場合 1 を返す</td>
 * </tr>
 * <tr valign="top">
 * <td><b>P_SEP_BY_SPACE</b></td>
 * <td><b>CURRENCY_SYMBOL</b> と正値がスペースで区切られる場合 1 を返す</td>
 * </tr>
 * <tr valign="top">
 * <td><b>N_CS_PRECEDES</b></td>
 * <td><b>CURRENCY_SYMBOL</b> の前に負値がある場合 1 を返す</td>
 * </tr>
 * <tr valign="top">
 * <td><b>N_SEP_BY_SPACE</b></td>
 * <td><b>CURRENCY_SYMBOL</b> と負値がスペースで区切られる場合 1 を返す</td>
 * </tr>
 * <tr valign="top">
 * <td><b>P_SIGN_POSN</b></td>
 * 量および <b>CURRENCY_SYMBOL</b> を括弧で括る場合、0 を返す
 * @return string 要素を文字列で返します。<i>item</i>
 * が有効でない場合は <b>FALSE</b> を返します。
 */
function nl_langinfo(int $item): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の soundex キーを計算する
 * @link http://php.net/manual/ja/function.soundex.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @return string soundex キーを文字列で返します。
 */
function soundex(string $str): string {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 二つの文字列のレーベンシュタイン距離を計算する
 * @link http://php.net/manual/ja/function.levenshtein.php
 * @param string $str1 <p>
 * レーベンシュタイン距離を計算する文字列のひとつ。
 * </p>
 * @param string $str2 <p>
 * レーベンシュタイン距離を計算する文字列のひとつ。
 * </p>
 * @return int この関数は、引数で指定した二つの文字列のレーベンシュタイン距離を返します。
 * 引数文字列の一つが 255 文字の制限より長い場合に -1 を返します。
 */
function levenshtein(string $str1, string $str2): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 特定の文字を返す
 * @link http://php.net/manual/ja/function.chr.php
 * @param int $ascii <p>
 * 拡張 ASCII コード。
 * </p>
 * <p>
 * 妥当な範囲 (0..255) 外の値を渡した場合は、255 とのビット AND を行います。
 * この処理は、以下のコードと同様のアルゴリズムです。
 * <pre>
 * while ($ascii < 0) {
 * $ascii += 256;
 * }
 * $ascii %= 256;
 * </pre>
 * </p>
 * @return string 指定した文字を返します。
 */
function chr(int $ascii): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字の ASCII 値を返す
 * @link http://php.net/manual/ja/function.ord.php
 * @param string $string <p>
 * 文字。
 * </p>
 * @return int ASCII 値を返します。
 */
function ord(string $string): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列を処理し、変数に代入する
 * @link http://php.net/manual/ja/function.parse-str.php
 * @param string $encoded_string <p>
 * 入力文字列。
 * </p>
 * @param array $result [optional] <p>
 * 2 番目の引数
 * <i>result</i> が指定された場合、
 * 変数は、代わりに配列の要素としてこの変数に保存されます。
 * </p>
 * <p>
 * Using this function without the <i>result</i> parameter is highly
 * DISCOURAGED and DEPRECATED as of PHP 7.2.
 * </p>
 * <p>
 * Dynamically setting variables in function's scope suffers from exactly same problems
 * as register_globals.
 * </p>
 * <p>
 * Read section on security of Using Register Globals
 * explaining why it is dangerous.
 * </p>
 * @return void 値を返しません。
 */
function parse_str(string $encoded_string, array &$result = null): void {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * CSV 文字列をパースして配列に格納する
 * @link http://php.net/manual/ja/function.str-getcsv.php
 * @param string $input <p>
 * パースする文字列。
 * </p>
 * @param string $delimiter [optional] <p>
 * フィールド区切り文字 (1 文字のみ)。
 * </p>
 * @param string $enclosure [optional] <p>
 * フィールド囲み文字 (1 文字のみ)。
 * </p>
 * @param string $escape [optional] <p>
 * エスケープ文字 (1 文字のみ)。デフォルトはバックスラッシュ
 * (\)。
 * </p>
 * @return array 読み込んだフィールドの内容を配列で返します。
 */
function str_getcsv(string $input, string $delimiter = ",", string $enclosure = '"', string $escape = "\\"): array {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 文字列を固定長の他の文字列で埋める
 * @link http://php.net/manual/ja/function.str-pad.php
 * @param string $input <p>
 * 入力文字列。
 * </p>
 * @param int $pad_length <p>
 * <i>pad_length</i> の値が負、
 * または入力文字列の長さ以下である場合、埋める操作は行われません。
 * <i>input</i> をそのまま返します。
 * </p>
 * @param string $pad_string [optional] <p>
 * 必要とされる埋める文字数が <i>pad_string</i>
 * の長さで均等に分割できない場合、<i>pad_string</i>
 * は切り捨てられます。
 * </p>
 * @param int $pad_type [optional] <p>
 * オプションの引数 <i>pad_type</i> には、
 * <b>STR_PAD_RIGHT</b>, <b>STR_PAD_LEFT</b>,
 * <b>STR_PAD_BOTH</b>
 * を指定可能です。
 * <i>pad_type</i>が指定されない場合、
 * <b>STR_PAD_RIGHT</b>
 * を仮定します。
 * </p>
 * @return string 埋めた後の文字列を返します。
 */
function str_pad(string $input, int $pad_length, string $pad_string = " ", int $pad_type = STR_PAD_RIGHT): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>rtrim</b> のエイリアス
 * @link http://php.net/manual/ja/function.chop.php
 * @param $str
 * @param $character_mask [optional]
 */
function chop($str, $character_mask) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>strstr</b> のエイリアス
 * @link http://php.net/manual/ja/function.strchr.php
 * @param $haystack
 * @param $needle
 * @param $part [optional]
 */
function strchr($haystack, $needle, $part) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * フォーマットされた文字列を返す
 * @link http://php.net/manual/ja/function.sprintf.php
 * @param string $format <p>
 * フォーマット文字列は 0 個以上のディレクティブ（指示子）
 * により構成されます。ディレクティブには、そのまま結果にコピーされる
 * (% を除く) 通常の文字と変換指定子
 * (conversion specifications) があり、
 * 取り出される際はどちらもそれ自身がパラメータとなります。このことは
 * <b>sprintf</b> の場合だけでなく <b>printf</b>
 * の場合も同様です。
 * </p>
 * <p>
 * 各変換指定子は、パーセント記号 (%) の後に
 * これらの要素が一つ以上続いたものになります。
 * オプションの符号指定子。これは、
 * 数値で符号 (- あるいは +) を使用するよう指定します。
 * デフォルトでは、数値が負の場合の - 符号のみが使用されます。
 * この指定子により、正の数にも強制的に + 符号をつけることができます。
 * @param mixed $args [optional]
 * @param mixed $_ [optional]
 * @return string フォーマット文字列 <i>format</i>
 * に基づき生成された文字列を返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function sprintf(string $format, $args = null, $_ = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * フォーマット済みの文字列を出力する
 * @link http://php.net/manual/ja/function.printf.php
 * @param string $format <p>
 * <i>format</i> についての説明は
 * <b>sprintf</b> を参照ください。
 * </p>
 * @param mixed $args [optional]
 * @param mixed $_ [optional]
 * @return int 出力した文字列の長さを返します。
 */
function printf(string $format, $args = null, $_ = null): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * フォーマットされた文字列を出力する
 * @link http://php.net/manual/ja/function.vprintf.php
 * @param string $format <p>
 * <i>format</i> についての説明は
 * <b>sprintf</b> を参照ください。
 * </p>
 * @param array $args
 * @return int 出力された文字列の長さを返します。
 */
function vprintf(string $format, array $args): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * フォーマットされた文字列を返す
 * @link http://php.net/manual/ja/function.vsprintf.php
 * @param string $format <p>
 * <i>format</i> についての説明は
 * <b>sprintf</b> を参照ください。
 * </p>
 * @param array $args
 * @return string (<b>sprintf</b>のドキュメントに記述された)
 * <i>format</i> に基づきフォーマットされた文字列として配列値を返します。
 */
function vsprintf(string $format, array $args): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * フォーマットされた文字列をストリームに書き込む
 * @link http://php.net/manual/ja/function.fprintf.php
 * @param resource $handle <b>fopen</b>
 * を使用して作成したファイルシステムポインタリソース。</p>
 * @param string $format <p>
 * <i>format</i> については、
 * <b>sprintf</b> のドキュメントで説明されています。
 * </p>
 * @param mixed $args [optional]
 * @param mixed $_ [optional]
 * @return int 書き込まれた文字列の長さを返します。
 */
function fprintf($handle, string $format, $args = null, $_ = null): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * フォーマットされた文字列をストリームに書き込む
 * @link http://php.net/manual/ja/function.vfprintf.php
 * @param resource $handle
 * @param string $format <p>
 * <i>format</i> については、
 * <b>sprintf</b> のドキュメントで説明されています。
 * </p>
 * @param array $args
 * @return int 出力された文字列の長さを返します。
 */
function vfprintf($handle, string $format, array $args): int {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * フォーマット文字列に基づき入力を処理する
 * @link http://php.net/manual/ja/function.sscanf.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @param string $format <p>
 * <i>str</i> を解釈するフォーマット。
 * <b>sprintf</b> のドキュメントにある説明と比べて、以下の違いがあります。
 * ロケールに対応していません。
 * F、g、G および
 * b はサポートしていません。
 * D は十進数値を表します。
 * i は基数検出つきの整数値を表します。
 * n は処理する文字数を表します。
 * s stops reading at any whitespace character.
 * </p>
 * @param mixed $_ [optional] <p>
 * オプションで指定する参照渡しの変数に、
 * パースされた値が格納されます。
 * </p>
 * @return mixed この関数のパラメータが二つだけの場合、処理された値は配列として返されます。
 * それ以外の場合は、もしオプションのパラメータが渡されればこの関数は
 * 割り当てられた値の数を返します。オプションのパラメータは
 * 参照渡しにする必要があります。
 * </p>
 * <p>
 * <i>format</i> で期待する部分文字列のほうが
 * 実際に <i>str</i> に存在するものより多い場合は
 * -1 を返します。
 */
function sscanf(string $str, string $format, &$_ = null) {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * フォーマットに基づきファイルからの入力を処理する
 * @link http://php.net/manual/ja/function.fscanf.php
 * @param resource $handle <b>fopen</b>
 * を使用して作成したファイルシステムポインタリソース。</p>
 * @param string $format <p>
 * <b>sprintf</b> のドキュメントに説明されているフォーマット。
 * </p>
 * @param mixed $_ [optional] <p>
 * オプションで代入する値。
 * </p>
 * @return mixed この関数のパラメータが二つだけの場合、処理された値は配列として返されます。
 * 他方、オプションのパラメータが指定された場合、
 * この関数は、代入された値の数を返します。
 * オプション引数は参照渡しとする必要があります。
 */
function fscanf($handle, string $format, &$_ = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * URL を解釈し、その構成要素を返す
 * @link http://php.net/manual/ja/function.parse-url.php
 * @param string $url <p>
 * パースする URL。無効な文字は
 * _ に置換されます。
 * </p>
 * @param int $component [optional] <p>
 * <b>PHP_URL_SCHEME</b>、
 * <b>PHP_URL_HOST</b>、<b>PHP_URL_PORT</b>、
 * <b>PHP_URL_USER</b>、<b>PHP_URL_PASS</b>、
 * <b>PHP_URL_PATH</b>、<b>PHP_URL_QUERY</b>
 * あるいは <b>PHP_URL_FRAGMENT</b> のうちのいずれかを指定し、
 * 特定の URL コンポーネントのみを文字列
 * (<b>PHP_URL_PORT</b> を指定した場合だけは整数値)
 * で取得するようにします。
 * </p>
 * @return mixed 完全におかしな形式の URL については、<b>parse_url</b> は
 * <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <i>component</i> を省略した場合は、連想配列を返します。
 * 連想配列の中には少なくともひとつの要素が含まれます。
 * この配列に含まれる可能性のある要素は次のとおりです。
 * scheme - 例: http
 * host
 * port
 * user
 * pass
 * path
 * query - クエスチョンマーク ? 以降
 * fragment - ハッシュマーク # 以降
 * </p>
 * <p>
 * <i>component</i> が指定されている場合、
 * <b>parse_url</b> は配列ではなく文字列
 * (<b>PHP_URL_PORT</b> の場合は整数値) を返します。
 * 要求したコンポーネントが指定した URL の中にない場合は
 * <b>NULL</b> を返します。
 */
function parse_url(string $url, int $component = -1) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列を URL エンコードする
 * @link http://php.net/manual/ja/function.urlencode.php
 * @param string $str <p>
 * エンコードする文字列。
 * </p>
 * @return string -_. を除くすべての非英数文字が % 記号
 * (%)に続く二桁の数字で置き換えられ、
 * 空白は + 記号(+)にエンコードされます。
 * 同様の方法で、WWW のフォームからポストされたデータはエンコードされ、
 * application/x-www-form-urlencoded
 * メディア型も同様です。歴史的な理由により、この関数は RFC 3986 エンコード(
 * <b>rawurlencode</b> を参照してください) とは異なり、
 * 空白を + 記号にエンコードします。
 */
function urlencode(string $str): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * URL エンコードされた文字列をデコードする
 * @link http://php.net/manual/ja/function.urldecode.php
 * @param string $str <p>
 * デコードする文字列。
 * </p>
 * @return string デコードした文字列を返します。
 */
function urldecode(string $str): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * RFC 3986 に基づき URL エンコードを行う
 * @link http://php.net/manual/ja/function.rawurlencode.php
 * @param string $str <p>
 * エンコードする URL。
 * </p>
 * @return string -_.~ を除くすべての非アルファベット文字をパーセント
 * 記号 (%)に続いて 2 つの 16 進数がある表現形式に
 * 置き換えた文字列を返します。これは、文字定数が特殊な URL デリミタと
 * して解釈されたり、URL デリミタが(いくつかの電子メールシステムのような)
 * 転送メディアにより文字変換されて失われてしまったりすることが
 * ないように、RFC 3986
 * で定められたエンコーディング方法です。
 * <p>
 * PHP 5.3.0 より前のバージョンでは、rawurlencode はチルダ (~)
 * もエンコードしていました。これは
 * RFC 1738 で定められた方法です。
 * </p>
 */
function rawurlencode(string $str): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * URL エンコードされた文字列をデコードする
 * @link http://php.net/manual/ja/function.rawurldecode.php
 * @param string $str <p>
 * デコードする URL。
 * </p>
 * @return string デコードされた URL を文字列で返します。
 */
function rawurldecode(string $str): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * URL エンコードされたクエリ文字列を生成する
 * @link http://php.net/manual/ja/function.http-build-query.php
 * @param mixed $query_data <p>
 * プロパティを含む配列もしくはオブジェクト。
 * </p>
 * <p>
 * <i>query_data</i> が配列の場合の形式は、
 * 単純な一次元構造か
 * あるいは配列の配列 (言い換えると、他の配列を含む配列) となります。
 * </p>
 * <p>
 * <i>query_data</i> がオブジェクトの場合、
 * public プロパティだけが結果に含められます。
 * </p>
 * @param string $numeric_prefix [optional] <p>
 * 情報源となる配列 (<i>query_data</i> で指定した配列)
 * に数値インデックスが使われていて、しかも <i>numeric_prefix</i>
 * が指定された場合、数値のインデックスを持つ要素に関してのみインデックスの前に
 * <i>numeric_prefix</i> で指定した値が付加されます。
 * </p>
 * <p>
 * これは、後で PHP や他の CGI
 * アプリケーションによってデータがデコードされる際、
 * 正当な変数名になるよう考慮したものです。
 * </p>
 * @param string $arg_separator [optional] <p>
 * arg_separator.output
 * が区分のためのセパレータとして使用されます。ただし、
 * このパラメータが指定されていた場合は
 * それが使用されます。
 * </p>
 * @param int $enc_type [optional] <p>
 * デフォルトは <b>PHP_QUERY_RFC1738</b> です。
 * </p>
 * <p>
 * <i>enc_type</i> が
 * <b>PHP_QUERY_RFC1738</b> の場合は
 * RFC 1738 に従ってエンコードされ、メディアタイプは
 * application/x-www-form-urlencoded となります。
 * つまり、スペースはプラス記号 (+) にエンコードされるということです。
 * </p>
 * <p>
 * <i>enc_type</i> が
 * <b>PHP_QUERY_RFC3986</b> の場合は
 * RFC 3986 に従ってエンコードされ、
 * スペースはパーセント形式 (%20) となります。
 * </p>
 * @return string URL エンコードされた文字列を返します。
 */
function http_build_query($query_data, string $numeric_prefix = null, string $arg_separator = null, int $enc_type = PHP_QUERY_RFC1738): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * シンボリックリンク先を返す
 * @link http://php.net/manual/ja/function.readlink.php
 * @param string $path <p>
 * シンボリックリンクのパス。
 * </p>
 * @return string シンボリックリンク・パスの内容を返します。エラーの場合は
 * <b>FALSE</b> を返します。
 */
function readlink(string $path): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * リンクに関する情報を取得する
 * @link http://php.net/manual/ja/function.linkinfo.php
 * @param string $path <p>
 * リンクへのパス。
 * </p>
 * @return int <b>linkinfo</b>は、lstat
 * システムコールで返された
 * Unix C 言語の stat 構造体の st_dev
 * フィールドを返します。
 * 0 を返し、エラーの場合に
 * <b>FALSE</b> を返します。
 */
function linkinfo(string $path): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * シンボリックリンクを作成する
 * @link http://php.net/manual/ja/function.symlink.php
 * @param string $target <p>
 * リンクの対象。
 * </p>
 * @param string $link <p>
 * リンクの名前。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function symlink(string $target, string $link): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ハードリンクを作成する
 * @link http://php.net/manual/ja/function.link.php
 * @param string $target <p>
 * リンクの対象。
 * </p>
 * @param string $link <p>
 * リンクの名前。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function link(string $target, string $link): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルを削除する
 * @link http://php.net/manual/ja/function.unlink.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @param resource $context [optional] コンテキストのサポートは、
 * PHP 5.0.0 で追加されました。contexts の説明に関しては、
 * を参照してください。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function unlink(string $filename, $context = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 外部プログラムを実行する
 * @link http://php.net/manual/ja/function.exec.php
 * @param string $command <p>
 * 実行するコマンド
 * </p>
 * @param array $output [optional] <p>
 * 引数 <i>output</i> が存在する場合、指定した配列は、
 * コマンドからの出力の各行で埋められます。
 * \n のような後に続く空白は、この配列には含まれません。
 * 配列に既に何らかの要素が
 * 含まれる場合は、<b>exec</b> は配列の最後に追加される
 * ことに注意してください。関数が要素を追加することを望まないのなら、
 * それが <b>exec</b> に渡される前に、配列の
 * <b>unset</b> を呼び出してください。
 * </p>
 * @param int $return_var [optional] <p>
 * 引数<i>return_var</i>が、引数
 * <i>output</i> と共に存在する場合、実行したコマンドの
 * ステータスがこの変数に書かれます。
 * </p>
 * @return string コマンド結果の最後の行を返します。コマンドを実行し、
 * 一切干渉を受けずに直接コマンドから全てのデータを受けとる必要が
 * あるならば、<b>PassThru</b> 関数を使ってください。
 * </p>
 * <p>
 * 実行されたコマンドの出力を取得するには、必ず <i>output</i>
 * パラメータを設定・使用してください。
 */
function exec(string $command, array &$output = null, int &$return_var = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 外部プログラムを実行し、出力を表示する
 * @link http://php.net/manual/ja/function.system.php
 * @param string $command <p>
 * 実行するコマンド。
 * </p>
 * @param int $return_var [optional] <p>
 * 引数 <i>return_var</i> が存在する場合、
 * 実行したコマンドの返すステータスがこの変数に書かれます。
 * </p>
 * @return string 成功時はコマンド出力の最後の行を返し、失敗時は <b>FALSE</b> を返します。
 */
function system(string $command, int &$return_var = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * シェルのメタ文字をエスケープする
 * @link http://php.net/manual/ja/function.escapeshellcmd.php
 * @param string $command <p>
 * エスケープされるコマンド
 * </p>
 * @return string エスケープされた文字列
 */
function escapeshellcmd(string $command): string {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * シェル引数として使用される文字列をエスケープする
 * @link http://php.net/manual/ja/function.escapeshellarg.php
 * @param string $arg <p>
 * エスケープされる引数
 * </p>
 * @return string エスケープされた文字列
 */
function escapeshellarg(string $arg): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 外部プログラムを実行し、未整形の出力を表示する
 * @link http://php.net/manual/ja/function.passthru.php
 * @param string $command <p>
 * 実行するコマンド
 * </p>
 * @param int $return_var [optional] <p>
 * 引数<i>return_var</i>が存在する場合、
 * Unix コマンドのステータスがこの変数に書かれます。
 * </p>
 * @return void 値を返しません。
 */
function passthru(string $command, int &$return_var = null): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * シェルによりコマンドを実行し、文字列として出力全体を返す
 * @link http://php.net/manual/ja/function.shell-exec.php
 * @param string $cmd <p>
 * 実行するコマンド
 * </p>
 * @return string 実行されたコマンドからの出力を返します。
 * エラーが発生した場合やコマンドが何も出力しなかった場合は <b>NULL</b> を返します。
 * </p>
 * <p>
 * この関数は、エラーが発生した場合だけでなくプログラムが何も出力しなかった場合にも <b>NULL</b> を返します。
 * そのため、実行に失敗したノかどうかをこの関数では判断できません。
 * プログラムの終了コードを調べる必要があるときには <b>exec</b> を使いましょう。
 */
function shell_exec(string $cmd): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * コマンドを実行し、入出力用にファイルポインタを開く
 * @link http://php.net/manual/ja/function.proc-open.php
 * @param string $cmd <p>
 * 実行されるコマンド。
 * </p>
 * @param array $descriptorspec <p>
 * 数値添字の配列で、ディスクリプタ番号をキーとし、PHP がその
 * ディスクリプタをどのように子プロセスに渡すかを表すのが
 * 対応する値となります。
 * 0 が標準入力 (stdin)、1 が標準出力 (stdout) で、
 * 2 が標準エラー出力 (stderr) となります。
 * </p>
 * <p>
 * 各要素は、次のようになります。
 * プロセスに渡すパイプをあらわす配列。
 * 最初の要素はディスクリプタの型で、2 番目の要素がその型に対応するオプションとなります。
 * 使用できる型は pipe (2 番目の要素は、
 * プロセスにパイプの読み込み側を渡すのなら r、
 * 書き込み側を渡すのなら w)
 * および file (2 番目の要素はファイル名)
 * です。
 * 実際のファイルディスクリプタ (オープンしたファイルやソケット、
 * <b>STDIN</b> など) をあらわすストリームリソース。
 * </p>
 * <p>
 * ファイルディスクリプタの番号は、特に 0, 1, 2 に限られているわけでは
 * ありません。有効であるどのようなファイルディスクリプタの番号も指定でき、
 * それは子プロセスに渡されます。これにより、あるスクリプトと、
 * 子プロセスとして起動している別のスクリプトとの間で通信ができます。
 * 特に、これは PGP や GPG、openssl といったプログラムにパスフレーズを
 * より安全な方法で渡したいとき威力を発揮します。
 * 補助的なファイルディスクリプタを介して、そのようなプログラムの
 * 状態を取得するのにも便利です。
 * </p>
 * @param array $pipes <p>
 * PHP 側で生成されたパイプの終端にあたる
 * ファイルポインタの配列。
 * </p>
 * @param string $cwd [optional] <p>
 * コマンドの初期作業ディレクトリ。
 * 完全パスである必要があります。
 * デフォルト値 (現在の PHP プロセスの作業ディレクトリ) を使用したい場合は
 * <b>NULL</b> を指定します。
 * </p>
 * @param array $env [optional] <p>
 * 実行するコマンドのための環境変数の配列。
 * 現在の PHP プロセスと同じ環境変数を使用する場合は
 * <b>NULL</b> を指定します。
 * </p>
 * @param array $other_options [optional] <p>
 * その他の追加オプションを指定することが可能です。
 * 現在サポートされているオプションは次の通りです。
 * suppress_errors (windows のみ):
 * <b>TRUE</b> にすると、この関数が出力するエラーを抑制します。
 * bypass_shell (windows のみ):
 * <b>TRUE</b> にすると、cmd.exe シェルをバイパスします。
 * </p>
 * @return resource プロセスを表すリソースを返します。このリソースは、使用し終えた際に
 * <b>proc_close</b> を使用して開放する必要があります。
 * 失敗した場合は <b>FALSE</b> を返します。
 */
function proc_open(string $cmd, array $descriptorspec, array &$pipes, string $cwd = null, array $env = null, array $other_options = null) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * <b>proc_open</b> で開かれたプロセスを閉じ、
そのプロセスの終了コードを返す
 * @link http://php.net/manual/ja/function.proc-close.php
 * @param resource $process <p>
 * 閉じられる <b>proc_open</b> リソース
 * </p>
 * @return int 実行していたプロセスの終了状態を返します。
 * エラーが発生した場合は -1 を返します。
 */
function proc_close($process): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * proc_open でオープンされたプロセスを強制終了する
 * @link http://php.net/manual/ja/function.proc-terminate.php
 * @param resource $process <p>
 * 終了させる <b>proc_open</b> リソース。
 * </p>
 * @param int $signal [optional] <p>
 * このオプションパラメータは POSIX
 * オペレーティングシステムでのみ有用です。
 * kill(2) システムコールを使用して、
 * プロセスに送信するシグナルを指定することができます。
 * デフォルトは SIGTERM です。
 * </p>
 * @return bool 実行していたプロセスの終了状態を返します。
 */
function proc_terminate($process, int $signal = 15): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * <b>proc_open</b>
で開かれたプロセスに関する情報を取得する
 * @link http://php.net/manual/ja/function.proc-get-status.php
 * @param resource $process <p>
 * 評価される <b>proc_open</b> リソース
 * </p>
 * @return array 成功時は集められた情報の配列、失敗時は <b>FALSE</b> 。
 * 返される配列は次のような要素を持ちます:
 * </p>
 * <p>
 * <tr valign="top"><td>要素</td><td>型</td><td>説明</td></tr>
 * <tr valign="top">
 * <td>command</td>
 * <td>string</td>
 * <td>
 * <b>proc_open</b> に指定されたコマンド文字列。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>pid</td>
 * <td>int</td>
 * <td>プロセス ID</td>
 * </tr>
 * <tr valign="top">
 * <td>running</td>
 * <td>bool</td>
 * <td>
 * もしプロセスがまだ動いている場合は、<b>TRUE</b> 、すでに終了している場合は
 * <b>FALSE</b>。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>signaled</td>
 * <td>bool</td>
 * <td>
 * 子プロセスが、キャッチされていないシグナルにより終了した場合に
 * <b>TRUE</b> となります。Windows では常に <b>FALSE</b> にセットされます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>stopped</td>
 * <td>bool</td>
 * <td>
 * 子プロセスが、シグナルにより停止した時に <b>TRUE</b> となります。
 * Windows では常に <b>FALSE</b> にセットされます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>exitcode</td>
 * <td>int</td>
 * <td>
 * プロセスが返した終了コード
 * (running が <b>FALSE</b> の時のみ意味を持ちます)。
 * 正しい値を返すのは関数を最初にコールした時のみで、次に
 * コールした際には -1 を返します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>termsig</td>
 * <td>int</td>
 * <td>
 * プロセスを終了させたシグナルの番号です (signaled が
 * <b>TRUE</b> の時のみ意味を持ちます)。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>stopsig</td>
 * <td>int</td>
 * <td>
 * プロセスを停止させたシグナルの番号です (stopped が
 * <b>TRUE</b> の時のみ意味を持ちます)。
 * </td>
 * </tr>
 */
function proc_get_status($process): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * 現在のプロセスの優先度を変更する
 * @link http://php.net/manual/ja/function.proc-nice.php
 * @param int $increment <p>
 * The new priority value, the value of this may differ on platforms.
 * </p>
 * <p>
 * on Unix, a low value, such as -20 means high priority
 * wheras a positive value have a lower priority.
 * </p>
 * <p>
 * For Windows the <i>increment</i> parameter have the
 * following meanings:
 * </p>
 * <tr valign="top">
 * Priority class</td>
 * Possible values</td>
 * </tr>
 * <tr valign="top">
 * High priority</td>
 * <i>increment</i> &lt; -9
 * </td>
 * </tr>
 * <tr valign="top">
 * Above normal priority</td>
 * <i>increment</i> &lt; -4
 * </td>
 * </tr>
 * <tr valign="top">
 * Normal priority</td>
 * <i>increment</i> &lt; 5 &#38;#38;
 * <i>increment</i> &gt; -5
 * </td>
 * </tr>
 * <tr valign="top">
 * Below normal priority</td>
 * <i>increment</i> &gt; 5
 * </td>
 * </tr>
 * <tr valign="top">
 * Idle priority</td>
 * <i>increment</i> &gt; 9
 * </td>
 * </tr>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * ユーザーが優先度を変更する権限を持っていないなど、
 * エラーが発生した場合は <b>E_WARNING</b>
 * レベルのエラーも発行されます。
 */
function proc_nice(int $increment): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 乱数を生成する
 * @link http://php.net/manual/ja/function.rand.php
 * @param $min [optional]
 * @param $max [optional]
 * @return int <i>min</i> (あるいは 0)
 * から <i>max</i> (あるいは <b>getrandmax</b>、それぞれ端点を含む)
 * までの間の疑似乱数値を返します。
 */
function rand($min, $max): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 乱数生成器を初期化する
 * @link http://php.net/manual/ja/function.srand.php
 * @param int $seed [optional] <p>
 * 任意の整数値で指定するシード値。
 * </p>
 * @return void 値を返しません。
 */
function srand(int $seed = null): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 乱数の最大値を取得する
 * @link http://php.net/manual/ja/function.getrandmax.php
 * @return int <b>rand</b> が返す乱数の最大値を返します。
 */
function getrandmax(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * メルセンヌ・ツイスター乱数生成器を介して乱数値を生成する
 * @link http://php.net/manual/ja/function.mt-rand.php
 * @param $min [optional]
 * @param $max [optional]
 * @return int <i>min</i> (あるいは 0)
 * から <i>max</i> (あるいは <b>mt_getrandmax</b>、それぞれ端点を含む)
 * までの間のランダムな整数値を返します。
 * <i>max</i> が <i>min</i> より小さい場合は
 * <b>FALSE</b> を返します。
 */
function mt_rand($min, $max): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * メルセンヌ・ツイスター乱数生成器にシードを指定する
 * @link http://php.net/manual/ja/function.mt-srand.php
 * @param int $seed [optional] <p>
 * 任意の整数値で指定するシード値。
 * </p>
 * @param int $mode [optional] <p>
 * 以下のいずれかの定数を使用して、使用するアルゴリズムの実装を指定します。
 * <tr valign="top">
 * <td>定数</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MT_RAND_MT19937</b></td>
 * <td>
 * Uses the fixed, correct, メルセンヌ・ツイスター実装, available as of PHP 7.1.0.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MT_RAND_PHP</b></td>
 * <td>
 * Uses an incorrect メルセンヌ・ツイスター実装 which was used as the default up till PHP 7.1.0.
 * このモードは、下位互換性の目的で使用可能です。
 * </td>
 * </tr>
 * </p>
 * @return void 値を返しません。
 */
function mt_srand(int $seed = null, int $mode = MT_RAND_MT19937): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 乱数値の最大値を表示する
 * @link http://php.net/manual/ja/function.mt-getrandmax.php
 * @return int <b>mt_rand</b> を引数なしでコールしたときに取得できる乱数の最大値を返します。
 * <b>mt_rand</b> の <i>max</i>
 * に指定する値をこの値以下にしておけば、結果がスケールアップされて無作為性が低下することを避けられます。
 */
function mt_getrandmax(): int {}

/**
 * @param $length [optional]
 */
function random_bytes($length) {}

/**
 * @param $min [optional]
 * @param $max [optional]
 */
function random_int($min, $max) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * インターネットサービスおよびプロトコルが関連するポート番号を取得する
 * @link http://php.net/manual/ja/function.getservbyname.php
 * @param string $service <p>
 * インターネットサービス名を表す文字列。
 * </p>
 * @param string $protocol <p>
 * <i>protocol</i> は "tcp"
 * あるいは "udp" (小文字) のいずれかです。
 * </p>
 * @return int ポート番号を返します。 <i>service</i> あるいは
 * <i>protocol</i> が見つからない場合は
 * <b>FALSE</b> を返します。
 */
function getservbyname(string $service, string $protocol): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ポートおよびプロトコルに対応するインターネットサービスを得る
 * @link http://php.net/manual/ja/function.getservbyport.php
 * @param int $port <p>
 * ポート番号。
 * </p>
 * @param string $protocol <p>
 * <i>protocol</i> は "tcp"
 * あるいは "udp" (小文字) のいずれかです。
 * </p>
 * @return string インターネットサービス名を文字列で返します。
 */
function getservbyport(int $port, string $protocol): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * プロトコル名のプロトコル番号を得る
 * @link http://php.net/manual/ja/function.getprotobyname.php
 * @param string $name <p>
 * プロトコル名。
 * </p>
 * @return int プロトコル番号を返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function getprotobyname(string $name): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * プロトコル番号が指すプロトコル名を取得する
 * @link http://php.net/manual/ja/function.getprotobynumber.php
 * @param int $number <p>
 * プロトコル番号。
 * </p>
 * @return string プロトコル名を文字列で返します。失敗した場合に <b>FALSE</b> を返します。
 */
function getprotobynumber(int $number): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * PHP スクリプト所有者のユーザー ID を取得する
 * @link http://php.net/manual/ja/function.getmyuid.php
 * @return int 現在のスクリプトのユーザー ID を返し、エラーの場合は <b>FALSE</b> を返します。
 */
function getmyuid(): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * PHP スクリプトの所有者の GID を得る
 * @link http://php.net/manual/ja/function.getmygid.php
 * @return int 現在のスクリプトのグループ ID を返します。またはエラー時に
 * <b>FALSE</b> を返します。
 */
function getmygid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * PHP のプロセス ID を取得する
 * @link http://php.net/manual/ja/function.getmypid.php
 * @return int 現在の PHP のプロセス ID を返し、エラーの場合は <b>FALSE</b> を返します。
 */
function getmypid(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のスクリプトの inode を取得する
 * @link http://php.net/manual/ja/function.getmyinode.php
 * @return int 現在のスクリプトの inode を表す整数値、あるいはエラーの場合は
 * <b>FALSE</b> を返します。
 */
function getmyinode(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 最終更新時刻を取得する
 * @link http://php.net/manual/ja/function.getlastmod.php
 * @return int 現在のページの最終更新時刻を返します。
 * この値は Unix のタイムスタンプで、そのまま <b>date
 * </b>に渡す事ができます。エラーの場合は <b>FALSE</b> を返します。
 */
function getlastmod(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * MIME base64 方式によりエンコードされたデータをデコードする
 * @link http://php.net/manual/ja/function.base64-decode.php
 * @param string $data <p>
 * デコードされるデータ。
 * </p>
 * @param bool $strict [optional] <p>
 * If the <i>strict</i> parameter is set to <b>TRUE</b> then
 * <b>base64_decode</b> 関数は、
 * 入力に base64 アルファベットの範囲外の文字が含まれる場合に <b>FALSE</b> を返します。
 * Otherwise invalid characters will be silently discarded.
 * </p>
 * @return string もとのデータを返します。失敗した場合に <b>FALSE</b> を返します。
 * 返り値はバイナリになることもあります。
 */
function base64_decode(string $data, bool $strict = false): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * MIME base64 方式でデータをエンコードする
 * @link http://php.net/manual/ja/function.base64-encode.php
 * @param string $data <p>
 * エンコードするデータ。
 * </p>
 * @return string エンコードされたデータを文字列で返します。失敗した場合に <b>FALSE</b> を返します。
 */
function base64_encode(string $data): string {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * パスワードハッシュを作る
 * @link http://php.net/manual/ja/function.password-hash.php
 * @param string $password <p>
 * ユーザーのパスワード。
 * </p>
 * <p>
 * <b>PASSWORD_BCRYPT</b> をアルゴリズムに指定すると、
 * <i>password</i> が最大 72 文字までに切り詰められます。
 * </p>
 * @param integer $algo <p>
 * パスワードのハッシュに使うアルゴリズムを表す
 * パスワードアルゴリズム定数。
 * </p>
 * @param array $options [optional] <p>
 * オプションを含む連想配列。各アルゴリズムがサポートするオプションについては、
 * パスワードアルゴリズム定数
 * のページを参照ください。
 * </p>
 * <p>
 * 省略した場合は、ランダムな salt を生成してデフォルトのコストを使います。
 * </p>
 * @return string ハッシュしたパスワードを返します。失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * 使ったアルゴリズムやコスト、そしてソフトもハッシュの一部として返されます。
 * つまり、ハッシュを検証するために必要な情報は、すべてそこに含まれているということです。
 * そのため、<b>password_verify</b> でハッシュを検証するときに、
 * ソルトやアルゴリズムの情報を別に保存する必要はありません。
 */
function password_hash(string $password, integer $algo, array $options = null): string {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 指定したハッシュに関する情報を返す
 * @link http://php.net/manual/ja/function.password-get-info.php
 * @param string $hash <p>
 * <b>password_hash</b> が作ったハッシュ。
 * </p>
 * @return array 三つの要素を持つ連想配列を返します。
 * algo には、そのハッシュの
 * パスワードアルゴリズム定数
 * が含まれます。
 * algoName には、そのアルゴリズムの名前が含まれます。
 * options には、
 * <b>password_hash</b> を呼んだときのオプションが含まれます。
 */
function password_get_info(string $hash): array {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 指定したハッシュがオプションにマッチするかどうかを調べる
 * @link http://php.net/manual/ja/function.password-needs-rehash.php
 * @param string $hash <p>
 * <b>password_hash</b> が作ったハッシュ。
 * </p>
 * @param integer $algo <p>
 * パスワードのハッシュに使うアルゴリズムを表す
 * パスワードアルゴリズム定数。
 * </p>
 * @param array $options [optional] <p>
 * オプションを含む連想配列。各アルゴリズムがサポートするオプションについては、
 * パスワードアルゴリズム定数
 * のページを参照ください。
 * </p>
 * @return boolean 指定した <i>algo</i> と <i>options</i>
 * にマッチするためにハッシュの再計算が必要な場合は <b>TRUE</b>、
 * それ以外の場合は <b>FALSE</b> を返します。
 */
function password_needs_rehash(string $hash, integer $algo, array $options = null): bool {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * パスワードがハッシュにマッチするかどうかを調べる
 * @link http://php.net/manual/ja/function.password-verify.php
 * @param string $password <p>
 * ユーザーのパスワード。
 * </p>
 * @param string $hash <p>
 * <b>password_hash</b> が作ったハッシュ。
 * </p>
 * @return boolean パスワードとハッシュがマッチする場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function password_verify(string $password, string $hash): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 文字列を uuencode する
 * @link http://php.net/manual/ja/function.convert-uuencode.php
 * @param string $data <p>
 * エンコードしたいデータ。
 * </p>
 * @return string uuencode されたデータを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function convert_uuencode(string $data): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * uuencode された文字列をデコードする
 * @link http://php.net/manual/ja/function.convert-uudecode.php
 * @param string $data <p>
 * uuencode されたデータ。
 * </p>
 * @return string デコードしたデータを文字列で返します。失敗した場合に <b>FALSE</b> を返します。
 */
function convert_uudecode(string $data): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 絶対値
 * @link http://php.net/manual/ja/function.abs.php
 * @param mixed $number <p>
 * 処理する数値。
 * </p>
 * @return number <i>number</i> の絶対値を返します。もし
 * <i>number</i> の型が float であった場合、
 * 返り値の型も float となります。それ以外の場合は
 * 返り値の型は integer となります（float は、
 * integer の最大値より大きい値をとることがありえるからです）。
 */
function abs($number) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 端数の切り上げ
 * @link http://php.net/manual/ja/function.ceil.php
 * @param float $value <p>
 * 丸める値。
 * </p>
 * @return float <i>value</i> の次に大きい整数値を返します。
 * <b>ceil</b> の返り値は float 型と
 * なります。これは、float 値の範囲は通常 int
 * よりも広いためです。
 */
function ceil(float $value): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 端数の切り捨て
 * @link http://php.net/manual/ja/function.floor.php
 * @param float $value <p>
 * 丸める数値。
 * </p>
 * @return mixed <i>value</i> をこえない最大の整数の値を返します。
 * <b>floor</b> の返り値は float
 * 型のままとなります。これは、
 * float の範囲が int よりも広いためです。
 * 配列を渡した場合など、エラーが発生したときには FALSE を返します。
 */
function floor(float $value) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 浮動小数点数を丸める
 * @link http://php.net/manual/ja/function.round.php
 * @param float $val <p>
 * 丸める値。
 * </p>
 * @param int $precision [optional] <p>
 * オプションで指定する、丸める桁数。
 * </p>
 * @param int $mode [optional] <p>
 * 次の定数のいずれかを使って、丸めのモードを指定します。
 * <tr valign="top">
 * <td>定数</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>PHP_ROUND_HALF_UP</b></td>
 * <td>
 * <i>val</i> が小数点第 <i>precision</i> 位の値になるように、
 * ゼロから離れる方向に丸めます。1.5 は 2 に、そして -1.5 は -2 になります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>PHP_ROUND_HALF_DOWN</b></td>
 * <td>
 * <i>val</i> が小数点第 <i>precision</i> 位の値になるように、
 * ゼロに近づく方向に丸めます。1.5 は 1 に、そして -1.5 は -1 になります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>PHP_ROUND_HALF_EVEN</b></td>
 * <td>
 * <i>val</i> が小数点第 <i>precision</i> 位の値になるように、
 * 次の偶数に丸めます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>PHP_ROUND_HALF_ODD</b></td>
 * <td>
 * <i>val</i> が小数点第 <i>precision</i> 位の値になるように、
 * 次の奇数に丸めます。
 * </td>
 * </tr>
 * </p>
 * @return float 丸めた値を返します。
 */
function round(float $val, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 正弦（サイン）
 * @link http://php.net/manual/ja/function.sin.php
 * @param float $arg <p>
 * ラジアンで表した値。
 * </p>
 * @return float <i>arg</i> のサインを返します。
 */
function sin(float $arg): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 余弦（コサイン）
 * @link http://php.net/manual/ja/function.cos.php
 * @param float $arg <p>
 * ラジアンで表した角度。
 * </p>
 * @return float <i>arg</i> のコサインを返します。
 */
function cos(float $arg): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 正接（タンジェント）
 * @link http://php.net/manual/ja/function.tan.php
 * @param float $arg <p>
 * 処理する引数をラジアンで表したもの。
 * </p>
 * @return float <i>arg</i> のタンジェントを返します。
 */
function tan(float $arg): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 逆正弦（アークサイン）
 * @link http://php.net/manual/ja/function.asin.php
 * @param float $arg <p>
 * 処理する角度。
 * </p>
 * @return float <i>arg</i> のアークサインをラジアンで返します。
 */
function asin(float $arg): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 逆余弦（アークコサイン）
 * @link http://php.net/manual/ja/function.acos.php
 * @param float $arg <p>
 * 処理する角度。
 * </p>
 * @return float <i>arg</i> のアークコサインをラジアンで返します。
 */
function acos(float $arg): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 逆正接（アークタンジェント）
 * @link http://php.net/manual/ja/function.atan.php
 * @param float $arg <p>
 * 処理する引数。
 * </p>
 * @return float <i>arg</i> のアークタンジェントをラジアンで返します。
 */
function atan(float $arg): float {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 逆双曲線正接（アークハイパボリックタンジェント）
 * @link http://php.net/manual/ja/function.atanh.php
 * @param float $arg <p>
 * 処理する引数。
 * </p>
 * @return float <i>arg</i> のアークハイパボリックタンジェントを返します。
 */
function atanh(float $arg): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 2 変数のアークタンジェント
 * @link http://php.net/manual/ja/function.atan2.php
 * @param float $y <p>
 * 被除数。
 * </p>
 * @param float $x <p>
 * 除数。
 * </p>
 * @return float <i>y</i>/<i>x</i>
 * のアークタンジェントをラジアンで返します。
 */
function atan2(float $y, float $x): float {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 双曲線正弦（ハイパボリックサイン）
 * @link http://php.net/manual/ja/function.sinh.php
 * @param float $arg <p>
 * 処理する引数。
 * </p>
 * @return float <i>arg</i> のハイパボリックサインを返します。
 */
function sinh(float $arg): float {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 双曲線余弦（ハイパボリックコサイン）
 * @link http://php.net/manual/ja/function.cosh.php
 * @param float $arg <p>
 * 処理する引数。
 * </p>
 * @return float <i>arg</i> のハイパボリックコサインを返します。
 */
function cosh(float $arg): float {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 双曲線正接（ハイパボリックタンジェント）
 * @link http://php.net/manual/ja/function.tanh.php
 * @param float $arg <p>
 * 処理する引数。
 * </p>
 * @return float <i>arg</i> のハイパボリックタンジェントを返します。
 */
function tanh(float $arg): float {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 逆双曲線正弦（アークハイパボリックサイン）
 * @link http://php.net/manual/ja/function.asinh.php
 * @param float $arg <p>
 * 処理する角度。
 * </p>
 * @return float <i>arg</i> のアークハイパボリックサインを返します。
 */
function asinh(float $arg): float {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 逆双曲線余弦（アークハイパボリックコサイン）
 * @link http://php.net/manual/ja/function.acosh.php
 * @param float $arg <p>
 * 処理する値。
 * </p>
 * @return float <i>arg</i> のアークハイパボリックコサインを返します。
 */
function acosh(float $arg): float {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 値がゼロに近い時にでも精度を保つために exp(number) - 1 を返す
 * @link http://php.net/manual/ja/function.expm1.php
 * @param float $arg <p>
 * 処理する引数。
 * </p>
 * @return float 'e' の <i>arg</i> 乗から 1 を引いた値を返します。
 */
function expm1(float $arg): float {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 値がゼロに近い時にでも精度を保つ方法で計算した log(1 + number) を返す
 * @link http://php.net/manual/ja/function.log1p.php
 * @param float $number <p>
 * 処理する引数。
 * </p>
 * @return float log(1 + <i>number</i>) を返します。
 */
function log1p(float $number): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 円周率の値を得る
 * @link http://php.net/manual/ja/function.pi.php
 * @return float 円周率の値を不動小数点数で返します。
 */
function pi(): float {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 値が有限の数値であるかどうかを判定する
 * @link http://php.net/manual/ja/function.is-finite.php
 * @param float $val <p>
 * 調べる値。
 * </p>
 * @return bool <i>val</i> が このプラットフォーム上の PHP の
 * float 型で有効な範囲内の数である場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function is_finite(float $val): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 値が数値でないかどうかを判定する
 * @link http://php.net/manual/ja/function.is-nan.php
 * @param float $val <p>
 * 調べる値。
 * </p>
 * @return bool <i>val</i> が '非数値 (not a number)'
 * の場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
 */
function is_nan(float $val): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 値が無限大であるかどうかを判定する
 * @link http://php.net/manual/ja/function.is-infinite.php
 * @param float $val <p>
 * 調べる値。
 * </p>
 * @return bool <i>val</i> が無限大である場合に <b>TRUE</b>、
 * そうでない場合に <b>FALSE</b> を返します。
 */
function is_infinite(float $val): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指数表現
 * @link http://php.net/manual/ja/function.pow.php
 * @param number $base <p>
 * 使用する基数。
 * </p>
 * @param number $exp <p>
 * 指数。
 * </p>
 * @return number <i>base</i> の <i>exp</i> 乗を返します。
 * 両方の引数が非負の整数で、かつ結果が integer 型の範囲に収まる場合は、結果を integer 型で返します。
 * それ以外の場合は結果を float 型で返します。
 */
function pow($base, $exp) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>e</b> の累乗を計算する
 * @link http://php.net/manual/ja/function.exp.php
 * @param float $arg <p>
 * 処理する引数。
 * </p>
 * @return float 'e' の <i>arg</i> 乗を返します。
 */
function exp(float $arg): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 自然対数
 * @link http://php.net/manual/ja/function.log.php
 * @param float $arg <p>
 * 対数を計算する値。
 * </p>
 * @param float $base [optional] <p>
 * オプションで指定する、底
 * (デフォルトは 'e' で、これは自然対数となります)。
 * </p>
 * @return float <i>base</i> を指定した場合はそれを底とする
 * <i>arg</i> の対数、指定しない場合は自然対数を返します。
 */
function log(float $arg, float $base = M_E): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 底が 10 の対数
 * @link http://php.net/manual/ja/function.log10.php
 * @param float $arg <p>
 * 処理する引数。
 * </p>
 * @return float 底を 10 とする <i>arg</i> の対数を返します。
 */
function log10(float $arg): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 平方根
 * @link http://php.net/manual/ja/function.sqrt.php
 * @param float $arg <p>
 * 処理する引数。
 * </p>
 * @return float <i>arg</i> の平方根を返します。
 * 負の数を指定した場合は、特別な値 NAN を返します。
 */
function sqrt(float $arg): float {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 直角三角形の斜辺の長さを計算する
 * @link http://php.net/manual/ja/function.hypot.php
 * @param float $x <p>
 * 最初の辺の長さ。
 * </p>
 * @param float $y <p>
 * 二番目の辺の長さ。
 * </p>
 * @return float 斜辺の長さを返します。
 */
function hypot(float $x, float $y): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 度単位の数値をラジアン単位に変換する
 * @link http://php.net/manual/ja/function.deg2rad.php
 * @param float $number <p>
 * 度で表した角度。
 * </p>
 * @return float <i>number</i> と同等な値をラジアンで表したものを返します。
 */
function deg2rad(float $number): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ラジアン単位の数値を度単位に変換する
 * @link http://php.net/manual/ja/function.rad2deg.php
 * @param float $number <p>
 * ラジアン値。
 * </p>
 * @return float <i>number</i> と同等な値を度で表したものを返します。
 */
function rad2deg(float $number): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 2 進数 を 10 進数に変換する
 * @link http://php.net/manual/ja/function.bindec.php
 * @param string $binary_string <p>
 * 変換したい 2 進数文字列。
 * </p>
 * @return number <i>binary_string</i> を 10 進に変換した値を返します。
 */
function bindec(string $binary_string) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 16 進数を 10 進数に変換する
 * @link http://php.net/manual/ja/function.hexdec.php
 * @param string $hex_string <p>
 * 変換したい 16 進文字列。
 * </p>
 * @return number <i>hex_string</i> を 10 進で表した値を返します。
 */
function hexdec(string $hex_string) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 8 進数を 10 進数に変換する
 * @link http://php.net/manual/ja/function.octdec.php
 * @param string $octal_string <p>
 * 変換したい 8 進文字列。
 * </p>
 * @return number <i>octal_string</i> を 8 進で表した値を返します。
 */
function octdec(string $octal_string) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 10 進数を 2 進数に変換する
 * @link http://php.net/manual/ja/function.decbin.php
 * @param int $number <p>
 * 変換したい 10 進数値。
 * </p>
 * <table>
 * 32 ビットマシンでの入力の範囲
 * <tr valign="top">
 * <td>正の <i>number</i></td>
 * <td>負の <i>number</i></td>
 * <td>返り値</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td></td>
 * <td>0</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td></td>
 * <td>1</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td></td>
 * <td>10</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483646</td>
 * <td></td>
 * <td>1111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483647 (符号付き integer の最大値)</td>
 * <td></td>
 * <td>1111111111111111111111111111111 (1 が 31 個)</td>
 * </tr>
 * <tr valign="top">
 * <td>2147483648</td>
 * <td>-2147483648</td>
 * <td>10000000000000000000000000000000</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>4294967294</td>
 * <td>-2</td>
 * <td>11111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>4294967295 (符号なし integer の最大値)</td>
 * <td>-1</td>
 * <td>11111111111111111111111111111111 (1 が 32 個)</td>
 * </tr>
 * </table>
 * <table>
 * 64 ビットマシンでの入力の範囲
 * <tr valign="top">
 * <td>正の <i>number</i></td>
 * <td>負の <i>number</i></td>
 * <td>返り値</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td></td>
 * <td>0</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td></td>
 * <td>1</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td></td>
 * <td>10</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td>9223372036854775806</td>
 * <td></td>
 * <td>111111111111111111111111111111111111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td>9223372036854775807 (符号付き integer の最大値)</td>
 * <td></td>
 * <td>111111111111111111111111111111111111111111111111111111111111111 (1 が 63 個)</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-9223372036854775808</td>
 * <td>1000000000000000000000000000000000000000000000000000000000000000</td>
 * </tr>
 * <tr valign="top">
 * ... normal progression ...</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-2</td>
 * <td>1111111111111111111111111111111111111111111111111111111111111110</td>
 * </tr>
 * <tr valign="top">
 * <td></td>
 * <td>-1</td>
 * <td>1111111111111111111111111111111111111111111111111111111111111111 (1 が 64 個)</td>
 * </tr>
 * </table>
 * @return string <i>binary_string</i> を 2 進文字列で表した値を返します。
 */
function decbin(int $number): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 10 進数を 8 進数に変換する
 * @link http://php.net/manual/ja/function.decoct.php
 * @param int $number <p>
 * 変換したい 10 進数値。
 * </p>
 * @return string <i>number</i> を 8 進文字列で表した値を返します。
 */
function decoct(int $number): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 10 進数を 16 進数に変換する
 * @link http://php.net/manual/ja/function.dechex.php
 * @param int $number <p>
 * 変換したい 10 進数値。
 * </p>
 * <p>
 * PHP の integer は符号付き整数ですが、
 * <b>dechex</b> ではこれを符号なし整数として扱います。
 * つまり、負の整数を渡しても、それを符号なし整数として処理します。
 * </p>
 * @return string <i>number</i> を 16 進文字列で表した値を返します。
 */
function dechex(int $number): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 数値の基数を任意に変換する
 * @link http://php.net/manual/ja/function.base-convert.php
 * @param string $number <p>
 * 変換する数値。
 * 無効な文字が含まれている場合は、何もエラーを出さずにただ無視します。
 * </p>
 * @param int $frombase <p>
 * 返還前の <i>number</i> の基数。
 * </p>
 * @param int $tobase <p>
 * 変換後の <i>number</i> の基数。
 * </p>
 * @return string <i>number</i> を基数 <i>tobase</i>
 * で表した値を返します。
 */
function base_convert(string $number, int $frombase, int $tobase): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 数字を千位毎にグループ化してフォーマットする
 * @link http://php.net/manual/ja/function.number-format.php
 * @param float $number <p>
 * フォーマットする数値。
 * </p>
 * @param int $decimals [optional] <p>
 * 小数点以下の桁数。
 * </p>
 * @param string $dec_point [optional] <p>
 * 小数点を表す区切り文字。
 * </p>
 * @param string $thousands_sep [optional] <p>
 * 千位毎の区切り文字。
 * </p>
 * @return string <i>number</i> をフォーマットした結果を返します。
 */
function number_format(float $number, int $decimals = 0, string $dec_point = ".", string $thousands_sep = ","): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 引数で除算をした際の剰余を返す
 * @link http://php.net/manual/ja/function.fmod.php
 * @param float $x <p>
 * 被除数。
 * </p>
 * @param float $y <p>
 * 除数。
 * </p>
 * @return float <i>x</i>/<i>y</i> の剰余を返します。
 */
function fmod(float $x, float $y): float {}

/**
 * @param $dividend
 * @param $divisor
 */
function intdiv($dividend, $divisor) {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * パックされたインターネットアドレスを、人間が読める形式に変換する
 * @link http://php.net/manual/ja/function.inet-ntop.php
 * @param string $in_addr <p>
 * 32 ビット IPv4、あるいは 128b ビット IPv6 形式のアドレス。
 * </p>
 * @return string アドレスを文字列で表したものを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function inet_ntop(string $in_addr): string {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 人間が読める形式の IP アドレスを、パックされた in_addr 形式に変換する
 * @link http://php.net/manual/ja/function.inet-pton.php
 * @param string $address <p>
 * 可読形式の IPv4 アドレスあるいは IPv6 アドレス。
 * </p>
 * @return string 指定した <i>address</i> を
 * in_addr 形式で表したものを返します。
 * 構文的に無効な <i>address</i>
 * (ドットのない IPv4 アドレスやコロンのない IPv6 アドレスなど)
 * を指定した場合は <b>FALSE</b> を返します。
 */
function inet_pton(string $address): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ドット表記の (IPv4) IP アドレスを、長整数表現に変換する
 * @link http://php.net/manual/ja/function.ip2long.php
 * @param string $ip_address <p>
 * 標準形式のアドレス。
 * </p>
 * @return int 長整数値、あるいは <i>ip_address</i>
 * が不正な形式の場合に <b>FALSE</b> を返します。
 */
function ip2long(string $ip_address): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 長整数評言のインターネットアドレスを (IPv4) インターネット標準ドット表記に変換する
 * @link http://php.net/manual/ja/function.long2ip.php
 * @param string $proper_address <p>
 * 長整数で表した、正しい形式のアドレス。
 * </p>
 * @return string インターネットの IP アドレスを表す文字列を返します。
 */
function long2ip(string $proper_address): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 環境変数の値を取得する
 * @link http://php.net/manual/ja/function.getenv.php
 * @param string $varname <p>
 * 変数の名前。
 * </p>
 * @param bool $local_only [optional] <p>
 * Set to true to only return local environment variables (set by the operating system or putenv).
 * </p>
 * @return string <i>varname</i> が示す環境変数の値を返し、
 * 環境変数 <i>varname</i> が存在しない場合は<b>FALSE</b>を返します。
 */
function getenv(string $varname, bool $local_only = false): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 環境変数の値を設定する
 * @link http://php.net/manual/ja/function.putenv.php
 * @param string $setting <p>
 * "FOO=BAR" 形式の設定。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function putenv(string $setting): bool {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * コマンドライン引数のリストからオプションを取得する
 * @link http://php.net/manual/ja/function.getopt.php
 * @param string $options この文字列の各文字をオプション文字として使用し、
 * スクリプトにハイフンひとつ (-)
 * で始まるオプションとして渡された内容とマッチさせます。
 * たとえば、オプション文字列 "x" は
 * -x というオプションを認識します。
 * a-z、A-Z および 0-9 のみを認識します。
 * @param array $longopts [optional] オプションの配列。
 * この配列の各要素をオプション文字列として使用し、
 * スクリプトにハイフンふたつ (--)
 * で始まるオプションとして渡された内容とマッチさせます。
 * たとえば、longopts の要素 "opt" は
 * --opt というオプションを認識します。
 * @param int $optind [optional] If the <i>optind</i> parameter is present, then the
 * index where argument parsing stopped will be written to this variable.
 * @return array この関数はオプション/引数のペアを連想配列で返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * オプション以外のものが見つかった時点でオプションのパースは終了し、
 * それ以降の内容は破棄されます。
 */
function getopt(string $options, array $longopts = null, int &$optind = null): array {}

/**
 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
 * システムの平均負荷を取得する
 * @link http://php.net/manual/ja/function.sys-getloadavg.php
 * @return array (過去 1、5、15 分間の) 三つの値を array で返します。
 */
function sys_getloadavg(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在の Unix タイムスタンプをマイクロ秒まで返す
 * @link http://php.net/manual/ja/function.microtime.php
 * @param bool $get_as_float [optional] <p>
 * <b>TRUE</b> を指定すると、<b>microtime</b> は文字列ではなく
 * float を返すようになります。詳細は、返り値の説明を参照ください。
 * </p>
 * @return mixed デフォルトでは、<b>microtime</b> は "msec sec"
 * 形式の文字列を返します。ただし、sec は Unix エポック (1970 年 1 月 1 日 0:00:00 GMT)
 * からの経過秒数、msec は sec
 * から経過したマイクロ秒数を秒単位で表したものです。
 * </p>
 * <p>
 * <i>get_as_float</i> を
 * <b>TRUE</b> に設定すると、<b>microtime</b> は Unixエポック からの経過秒数を
 * マイクロ秒で正確になるように float で表したものを返します。
 */
function microtime(bool $get_as_float = false) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在の時間を得る
 * @link http://php.net/manual/ja/function.gettimeofday.php
 * @param bool $return_float [optional] <p>
 * <b>TRUE</b> を指定すると、配列ではなく float で返します。
 * </p>
 * @return mixed デフォルトでは配列を返します。<i>return_float</i>
 * が設定されている場合は float を返します。
 * </p>
 * <p>
 * 配列のキー:
 * "sec" - UNIX エポックからの秒
 * "usec" - マイクロ秒
 * "minuteswest" - グリニッジ基準の分
 * "dsttime" - 夏時間補正の型
 */
function gettimeofday(bool $return_float = false) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のリソース使用状況を取得する
 * @link http://php.net/manual/ja/function.getrusage.php
 * @param int $who [optional] <p>
 * <i>who</i> が 1 の場合、getrusage は <b>RUSAGE_CHILDREN</b>
 * を付けてコールされます。
 * </p>
 * @return array システムコールから返されたデータを含む連想配列を返します。
 * すべてのエントリは、記述されたフィールド名を用いてアクセス可能です。
 */
function getrusage(int $who = 0): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 一意な ID を生成する
 * @link http://php.net/manual/ja/function.uniqid.php
 * @param string $prefix [optional] <p>
 * これが有用なのは、たとえば複数ホストで同時に ID
 * を生成するような場合です。このような場合、同じマイクロ秒で同じ ID
 * が生成されてしまう可能性があります。
 * </p>
 * <p>
 * 空の <i>prefix</i> を指定すると、
 * 返される文字列は 13 文字となります。
 * <i>more_entropy</i> が <b>TRUE</b> の場合は
 * 23 文字となります。
 * </p>
 * @param bool $more_entropy [optional] <p>
 * <b>TRUE</b> にすると、<b>uniqid</b> は
 * 返り値の最後にさらに別のエントロピーを
 * (線形合同法を使用して) 追加します。これにより、結果が一意になる可能性を高めます。
 * </p>
 * @return string タイムスタンプにもとづいた一意な識別子を文字列で返します。
 * </p>
 * <p>
 * This function tries to create 一意な識別子, but it does not
 * guarantee 100% uniqueness of return value.
 */
function uniqid(string $prefix = "", bool $more_entropy = false): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * quoted-printable 文字列を 8 ビット文字列に変換する
 * @link http://php.net/manual/ja/function.quoted-printable-decode.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @return string 8 ビットバイナリ文字列を返します。
 */
function quoted_printable_decode(string $str): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 8 ビット文字列を quoted-printable 文字列に変換する
 * @link http://php.net/manual/ja/function.quoted-printable-encode.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @return string エンコードされた文字列を返します。
 */
function quoted_printable_encode(string $str): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * キリル文字セットを他のものに変換する
 * @link http://php.net/manual/ja/function.convert-cyr-string.php
 * @param string $str <p>
 * 変換したい文字列。
 * </p>
 * @param string $from <p>
 * 変換元のキリル文字セットを一文字で表したもの。
 * </p>
 * @param string $to <p>
 * 変換先のキリル文字セットを一文字で表したもの。
 * </p>
 * @return string 変換した文字列を返します。
 */
function convert_cyr_string(string $str, string $from, string $to): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在の PHP スクリプトの所有者の名前を取得する
 * @link http://php.net/manual/ja/function.get-current-user.php
 * @return string ユーザー名を表す文字列。
 */
function get_current_user(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 実行時間の最大値を制限する
 * @link http://php.net/manual/ja/function.set-time-limit.php
 * @param int $seconds <p>
 * 最大実行時間を表す秒数。ゼロを設定すると、時間制限を行いません。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b>、失敗した場合に <b>FALSE</b> を返します。
 */
function set_time_limit(int $seconds): bool {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * ヘッダ用の関数を登録する
 * @link http://php.net/manual/ja/function.header-register-callback.php
 * @param callable $callback <p>
 * ヘッダを送信する前にコールする関数。パラメータは受け取らず、返り値も無視されます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function header_register_callback(callable $callback): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * PHP 設定オプションの値を取得する
 * @link http://php.net/manual/ja/function.get-cfg-var.php
 * @param string $option <p>
 * 設定オプションの名前。
 * </p>
 * @return string <i>option</i> で指定された PHP 設定オプションの現在の値を返し、
 * エラーの場合は <b>FALSE</b> を返します。
 */
function get_cfg_var(string $option): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * magic_quotes_gpc の現在の設定を得る
 * @link http://php.net/manual/ja/function.get-magic-quotes-gpc.php
 * @return bool magic_quotes_gpc がオフの場合に 0、そうでない場合に 1 を返します。
 * PHP 5.4.0 以降は、常に <b>FALSE</b> を返します。
 */
function get_magic_quotes_gpc(): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * magic_quotes_runtime の現在アクティブな設定値を取得する
 * @link http://php.net/manual/ja/function.get-magic-quotes-runtime.php
 * @return bool magic_quotes_runtime がオフの場合に 0、そうでない場合に 1 を返します。
 * PHP 5.4.0 以降は、常に <b>FALSE</b> を返します。
 */
function get_magic_quotes_runtime(): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 定義されたエラー処理ルーチンにエラーメッセージを送信する
 * @link http://php.net/manual/ja/function.error-log.php
 * @param string $message <p>
 * ログに記録されるエラーメッセージ。
 * </p>
 * @param int $message_type [optional] <p>
 * メッセージをどこに送るのかを指定します。以下の中から指定できます。
 * </p>
 * <p>
 * <table>
 * <b>error_log</b> ログタイプ
 * <tr valign="top">
 * <td>0</td>
 * <td>
 * <i>message</i> は、オペレーティング・システム
 * のシステムログのメカニズムまたはファイルのいずれかを使って
 * PHP のシステム・ロガーに送られます。どちらが使われるかは、
 * 設定ディレクティブ error_log
 * の内容により決定されます。これはデフォルトのオプションです。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>
 * <i>message</i> は、<i>destination
 * </i> パラメータで指定されたアドレスに、電子メール
 * により送られます。このメッセージタイプの場合にのみ、
 * 4 番目のパラメータである <i>extra_headers</i>
 * が使われます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>
 * このオプションは存在しません。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>
 * <i>message</i> は <i>destination
 * </i> で指定されたファイルに追加されます。
 * 明示的に指定しない限り、<i>message</i> の
 * 最後には改行文字は追加されません。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>4</td>
 * <td>
 * <i>message</i> は、直接 SAPI
 * のログ出力ハンドラに送信されます。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $destination [optional] <p>
 * メッセージの送信先。その設定は、上で説明している
 * <i>message_type</i> パラメータの値によります。
 * </p>
 * @param string $extra_headers [optional] <p>
 * 追加のヘッダ。<i>message_type</i> パラメータが
 * 1 に設定される場合に利用されます。
 * このメッセージタイプは、<b>mail</b> と同様に
 * 内部関数を利用します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function error_log(string $message, int $message_type = 0, string $destination = null, string $extra_headers = null): bool {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 最後に発生したエラーを取得する
 * @link http://php.net/manual/ja/function.error-get-last.php
 * @return array 最後に発生したエラーについての情報を連想配列で返します。連想配列のキーは
 * "type"、"message"、"file" および "line" となります。
 * PHP の内部関数で発生したエラーの場合は、
 * "message" の先頭に関数名が含まれています。
 * エラーが発生していない場合は <b>NULL</b> を返します。
 */
function error_get_last(): array {}

/**
 * (PHP 7)<br/>
 * 最も最近のエラーをクリア
 * @link http://php.net/manual/ja/function.error-clear-last.php
 * @return void 最も最近のエラーをクリアーし、
 * <b>error_get_last</b> で取得できないようにします。
 */
function error_clear_last(): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 最初の引数で指定したコールバック関数をコールする
 * @link http://php.net/manual/ja/function.call-user-func.php
 * @param callable $callback <p>
 * コールする callable。
 * </p>
 * @param mixed $parameter [optional] <p>
 * コールバック関数に渡す、ゼロ個以上のパラメータ。
 * </p>
 * <p>
 * <b>call_user_func</b> のパラメータは
 * 参照渡しではないことに注意しましょう。
 * <b>call_user_func</b> の例と参照
 * <code>
 * error_reporting(E_ALL);
 * function increment(&$var)
 * {
 * $var++;
 * }
 * $a = 0;
 * call_user_func('increment', $a);
 * echo $a."\n";
 * // このようにしてもかまいません
 * call_user_func_array('increment', array(
 * echo $a."\n";
 * </code>
 * 上の例の出力は以下となります。</p>
 * <pre>
 * 0
 * 1
 * </pre>
 * </p>
 * @param mixed $_ [optional]
 * @return mixed コールバック関数の結果を返します。
 */
function call_user_func(callable $callback, $parameter = null, $_ = null) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * パラメータの配列を指定してコールバック関数をコールする
 * @link http://php.net/manual/ja/function.call-user-func-array.php
 * @param callable $callback <p>
 * コールするcallable。
 * </p>
 * @param array $param_arr <p>
 * コールバック関数に渡すパラメータを指定する配列。
 * </p>
 * @return mixed コールバック関数の結果、あるいはエラー時に <b>FALSE</b> を返します。
 */
function call_user_func_array(callable $callback, array $param_arr) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 静的メソッドをコールする
 * @link http://php.net/manual/ja/function.forward-static-call.php
 * @param callable $function <p>
 * コールしたい関数あるいはメソッド。このパラメータは、
 * クラス名とメソッド名を指定した配列あるいは関数名を指定した文字列となります。
 * </p>
 * @param mixed $parameter [optional] <p>
 * 関数に渡したいパラメータ。
 * </p>
 * @param mixed $_ [optional]
 * @return mixed 関数の結果、あるいはエラー時に <b>FALSE</b> を返します。
 */
function forward_static_call(callable $function, $parameter = null, $_ = null) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 静的メソッドをコールし、引数を配列で渡す
 * @link http://php.net/manual/ja/function.forward-static-call-array.php
 * @param callable $function <p>
 * コールしたい関数あるいはメソッド。このパラメータは、
 * クラス名とメソッド名を指定した配列あるいは関数名を指定した文字列となります。
 * </p>
 * @param array $parameters
 * @return mixed 関数の結果、あるいはエラー時に <b>FALSE</b> を返します。
 */
function forward_static_call_array(callable $function, array $parameters) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 値の保存可能な表現を生成する
 * @link http://php.net/manual/ja/function.serialize.php
 * @param mixed $value <p>
 * シリアル化する値。
 * <b>serialize</b> は、resource
 * 以外の全ての型を処理します。自分自身への参照を含む配列を
 * <b>serialize</b> することも可能です。
 * シリアル化した配列/オブジェクト内の
 * 循環参照も保存されます。その他の参照は失われます。
 * </p>
 * <p>
 * PHP は、シリアル化の前にまずメンバ関数 __sleep()
 * のコールを試みます。ここで、シリアル化の前のオブジェクトの後始末処理
 * などを行います。同様に、<b>unserialize</b> で
 * オブジェクトを復元した際にはメンバ関数
 * __wakeup() がコールされます。
 * </p>
 * <p>
 * オブジェクトの private メンバは、メンバ名の前にクラス名がつきます。
 * また protected メンバはメンバ名の前に '*' がつきます。
 * 前に付加されるこれらの値の前後には null バイトがついています。
 * </p>
 * @return string <i>value</i>
 * の保存可能なバイトストリーム表現を含む文字列を返します。
 * </p>
 * <p>
 * これはバイナリ文字列であり、null バイトを含む可能性もあることに注意しましょう。
 * 保存したり利用したりするときも、null バイトが含まれることを想定しておかないといけません。
 * たとえば、<b>serialize</b> の出力をデータベースに格納するときには、
 * 通常は CHAR 型や TEXT 型ではなく BLOB 型を使わないといけません。
 */
function serialize($value): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 保存用表現から PHP の値を生成する
 * @link http://php.net/manual/ja/function.unserialize.php
 * @param string $str <p>
 * シリアル化された文字列。
 * </p>
 * <p>
 * もしアンシリアライズする変数がオブジェクトの場合、
 * オブジェクトが無事再作成された後、PHP は自動的にメンバ関数
 * __wakeup()
 * (存在していれば) をコールしようとします。
 * </p>
 * <p>
 * unserialize_callback_func ディレクティブ
 * <p>
 * コールバック関数を設定することが可能です。(不完全な
 * object "__PHP_Incomplete_Class"を得ることを防ぐため)
 * コールバック関数は、非シリアル化する際に未定義のクラスをインスタ
 * ンス化する必要がある場合にコールされます。
 * 'unserialize_callback_func'を定義するためには、
 * <i>php.ini</i>, <b>ini_set</b>, .htaccess を使用し
 * てください。未定義のクラスをインスタンス化する度に、コールバック関
 * 数がコールされます。この機能を無効とするには、
 * 単純にこの設定を空にしてください。
 * </p>
 * </p>
 * @param array $options [optional] <p>
 * <b>unserialize</b> に連想配列で渡すオプション。
 * </p>
 * <table>
 * 有効なオプション
 * <tr valign="top">
 * <td>名前</td>
 * <td>型</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>allowed_classes</td>
 * <td>mixed</td>
 * <td>
 * 受け付けるクラス名の配列を指定します。あらゆるクラスを拒否する場合は
 * <b>FALSE</b>、あらゆるクラスを受け付ける場合は <b>TRUE</b> を指定します。
 * このオプションを指定しているときに、もし
 * <b>unserialize</b> が受け付け対象外のクラスのオブジェクトに遭遇すると、
 * そのオブジェクトを
 * <b>__PHP_Incomplete_Class</b> のインスタンスに変換します。
 * このオプションを省略すると、<b>TRUE</b> を指定したのと同じ意味になります。
 * つまり、PHP はあらゆるクラスのオブジェクトをインスタンス化しようとします。
 * </td>
 * </tr>
 * </table>
 * @return mixed 変換された値が返されます。その値は、
 * boolean, integer, float,
 * string, array, object
 * のいずれかとなります。
 * </p>
 * <p>
 * 渡された文字列が復元できなかった場合、<b>FALSE</b> を返して
 * <b>E_NOTICE</b> を発生します。
 */
function unserialize(string $str, array $options = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数に関する情報をダンプする
 * @link http://php.net/manual/ja/function.var-dump.php
 * @param mixed $expression <p>
 * ダンプしたい変数。
 * </p>
 * @param mixed $_ [optional]
 * @return void 値を返しません。
 */
function var_dump($expression, $_ = null): void {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 変数の文字列表現を出力または返す
 * @link http://php.net/manual/ja/function.var-export.php
 * @param mixed $expression <p>
 * エクスポートしたい変数
 * </p>
 * @param bool $return [optional] <p>
 * 使用されかつ <b>TRUE</b> に設定された場合、<b>var_export</b>
 * は変数表現を出力する代わりに返します。
 * </p>
 * @return mixed <i>return</i> パラメータが使用され <b>TRUE</b> と評価される場合、
 * 変数表現を返します。そうでない場合、この関数は <b>NULL</b> を返します。
 */
function var_export($expression, bool $return = false) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 内部的な Zend の値を表す文字列をダンプする
 * @link http://php.net/manual/ja/function.debug-zval-dump.php
 * @param mixed $variable <p>
 * 評価される変数
 * </p>
 * @param mixed $_ [optional]
 * @return void 値を返しません。
 */
function debug_zval_dump($variable, $_ = null): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した変数に関する情報を解りやすく出力する
 * @link http://php.net/manual/ja/function.print-r.php
 * @param mixed $expression <p>
 * 表示したい式。
 * </p>
 * @param bool $return [optional] <p>
 * <b>print_r</b> の結果を取得したい場合には
 * <i>return</i> 引数を使います。
 * この引数が <b>TRUE</b> の場合には、
 * <b>print_r</b> は情報を表示するかわりに情報を返します。
 * </p>
 * @return mixed string、integer,
 * float を指定した場合はその値が出力されます。
 * array を指定した場合、キーと要素を表す形式で値が
 * 表示されます。object に関しても同様の表示形式となります。
 * </p>
 * <p>
 * <i>return</i> パラメータが <b>TRUE</b> の場合は、
 * この関数は string を返します。それ以外の場合の返り値は <b>TRUE</b> です。
 */
function print_r($expression, bool $return = false) {}

/**
 * (PHP 4 &gt;= 4.3.2, PHP 5, PHP 7)<br/>
 * PHP に割り当てられたメモリの量を返す
 * @link http://php.net/manual/ja/function.memory-get-usage.php
 * @param bool $real_usage [optional] <p>
 * これを <b>TRUE</b> に設定すると、システムが割り当てた実際のメモリの大きさ (未使用のページも含むもの) を取得します。
 * 省略したり <b>FALSE</b> を設定したりすると、使用したモリのみを報告します。
 * </p>
 * @return int メモリの量をバイト単位で返します。
 */
function memory_get_usage(bool $real_usage = false): int {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * PHP によって割り当てられたメモリの最大値を返す
 * @link http://php.net/manual/ja/function.memory-get-peak-usage.php
 * @param bool $real_usage [optional] <p>
 * これを <b>TRUE</b> に設定すると、システムが割り当てた実際のメモリの大きさを取得します。
 * 省略したり <b>FALSE</b> を設定したりすると、
 * emalloc() が使用するメモリのみを報告します。
 * </p>
 * @return int メモリの最大値をバイト数で返します。
 */
function memory_get_peak_usage(bool $real_usage = false): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * シャットダウン時に実行する関数を登録する
 * @link http://php.net/manual/ja/function.register-shutdown-function.php
 * @param callable $callback <p>
 * 登録するコールバック。
 * </p>
 * <p>
 * シャットダウン時のコールバックは、リクエストの一部として実行されます。
 * したがって、コールバック関数からも出力を送信できるし、出力バッファにもアクセスできます。
 * </p>
 * @param mixed $parameter [optional] <p>
 * シャットダウン関数にパラメータを渡すには、ここで追加のパラメータを渡します。
 * </p>
 * @param mixed $_ [optional]
 * @return void 値を返しません。
 */
function register_shutdown_function(callable $callback, $parameter = null, $_ = null): void {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * 各 tick で実行する関数を登録する
 * @link http://php.net/manual/ja/function.register-tick-function.php
 * @param callable $function <p>
 * 関数名を表す文字列、あるいはオブジェクトとメソッドを指定した配列。
 * </p>
 * @param mixed $arg [optional]
 * @param mixed $_ [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function register_tick_function(callable $function, $arg = null, $_ = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * 各 tick の実行用の関数の登録を解除する
 * @link http://php.net/manual/ja/function.unregister-tick-function.php
 * @param string $function_name <p>
 * 関数名を表す文字列。
 * </p>
 * @return void 値を返しません。
 */
function unregister_tick_function(string $function_name): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルの構文ハイライト表示
 * @link http://php.net/manual/ja/function.highlight-file.php
 * @param string $filename <p>
 * ハイライト表示する PHP ファイルへのパス。
 * </p>
 * @param bool $return [optional] <p>
 * このパラメータを <b>TRUE</b> にすると、この関数はハイライトされたコードを返します。
 * </p>
 * @return mixed <i>return</i> が <b>TRUE</b> の場合は、
 * ハイライトされたコードを文字列として返し、表示しません。
 * それ以外の場合は、成功した場合に <b>TRUE</b>、
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function highlight_file(string $filename, bool $return = false) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>highlight_file</b> のエイリアス
 * @link http://php.net/manual/ja/function.show-source.php
 * @param $file_name
 * @param $return [optional]
 */
function show_source($file_name, $return) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の構文ハイライト表示
 * @link http://php.net/manual/ja/function.highlight-string.php
 * @param string $str <p>
 * ハイライト表示する PHP コード。開始タグを含む必要があります。
 * </p>
 * @param bool $return [optional] <p>
 * このパラメータを <b>TRUE</b> にすると、この関数はハイライトされたコードを返します。
 * </p>
 * @return mixed <i>return</i> が <b>TRUE</b> の場合は、
 * ハイライトされたコードを文字列として返し、表示しません。
 * それ以外の場合は、成功した場合に <b>TRUE</b>、
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function highlight_string(string $str, bool $return = false) {}

/**
 * (PHP 5, PHP 7)<br/>
 * コメントと空白文字を取り除いたソースを返す
 * @link http://php.net/manual/ja/function.php-strip-whitespace.php
 * @param string $filename <p>
 * PHP ファイルへのパス。
 * </p>
 * @return string 成功した場合に処理済みのソースコード、失敗した場合に空の文字列を返します。
 * </p>
 * <p>
 * This function respects the value of the
 * short_open_tag
 * ini directive.
 * </p>
 * <p>
 * PHP 5.0.1 以降、この関数は記述どおりに動作するようになりました。
 * それまでは単に空の文字列を返すだけでした。このバグについての詳細な情報は、
 * バグ番号 29606 を参照ください。
 */
function php_strip_whitespace(string $filename): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 設定オプションの値を得る
 * @link http://php.net/manual/ja/function.ini-get.php
 * @param string $varname <p>
 * 設定オプションの名前。
 * </p>
 * @return string 成功した場合に設定オプションの値、
 * null 値の場合は空の文字列を返します。
 * その設定オプションが存在しない場合は <b>FALSE</b> を返します。
 */
function ini_get(string $varname): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * すべての設定オプションを得る
 * @link http://php.net/manual/ja/function.ini-get-all.php
 * @param string $extension [optional] <p>
 * オプションで指定する拡張モジュール名。指定した場合は、
 * その拡張モジュールに関するオプションのみを返します。
 * </p>
 * @param bool $details [optional] <p>
 * 詳細な設定を取得するか、あるいは各設定の現在の値のみを取得するか。
 * デフォルトは <b>TRUE</b> (詳細情報を取得する) です。
 * </p>
 * @return array ディレクティブ名をキーとする連想配列を返します。
 * </p>
 * <p>
 * <i>details</i> が <b>TRUE</b> (デフォルト) の場合、
 * 配列の値は、
 * global_value (<i>php.ini</i>で設定されている)、
 * local_value (おそらく<b>ini_set</b>または
 * .htaccessでセットされている)、access (アクセスレベル)
 * を含む配列となります。
 * </p>
 * <p>
 * <i>details</i> が <b>FALSE</b> の場合、
 * 配列の値はそのオプションの現在の値となります。
 * </p>
 * <p>
 * アクセスレベルの意味についてはマニュアルを参照ください。
 * </p>
 * <p>
 * ひとつのディレクティブに複数のアクセスレベルを設定することができます。
 * access がビットマスク値となっているのはそのためです。
 */
function ini_get_all(string $extension = null, bool $details = true): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 設定オプションの値を設定する
 * @link http://php.net/manual/ja/function.ini-set.php
 * @param string $varname <p>
 * </p>
 * <p>
 * 全てのオプションが <b>ini_set</b> を使用して変更することが
 * 可能なわけではありません。有効なオプションの完全な一覧は
 * 付録 を参照ください。
 * </p>
 * @param string $newvalue <p>
 * オプションの新しい値。
 * </p>
 * @return string 成功した場合に元の値、失敗した場合に <b>FALSE</b> を返します。
 */
function ini_set(string $varname, string $newvalue): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>ini_set</b> のエイリアス
 * @link http://php.net/manual/ja/function.ini-alter.php
 * @param $varname
 * @param $newvalue
 */
function ini_alter($varname, $newvalue) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 設定オプションの値を元に戻す
 * @link http://php.net/manual/ja/function.ini-restore.php
 * @param string $varname <p>
 * 設定オプションの名前。
 * </p>
 * @return void 値を返しません。
 */
function ini_restore(string $varname): void {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 現在の include_path 設定オプションを取得する
 * @link http://php.net/manual/ja/function.get-include-path.php
 * @return string パスを表す文字列を返します。
 */
function get_include_path(): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * include_path 設定オプションをセットする
 * @link http://php.net/manual/ja/function.set-include-path.php
 * @param string $new_include_path <p>
 * include_path
 * の新しい値。
 * </p>
 * @return string 成功した場合に元の include_path
 * の値、失敗した場合に <b>FALSE</b> を返します。
 */
function set_include_path(string $new_include_path): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * include_path 設定オプションの値を元に戻す
 * @link http://php.net/manual/ja/function.restore-include-path.php
 * @return void 値を返しません。
 */
function restore_include_path(): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * クッキーを送信する
 * @link http://php.net/manual/ja/function.setcookie.php
 * @param string $name <p>
 * クッキーの名前。
 * </p>
 * @param string $value [optional] <p>
 * クッキーの値。この値はクライアントのコンピュータに保存されますので、
 * 重要な情報は格納しないでください。
 * <i>name</i> が 'cookiename' だとすると、
 * その値は $_COOKIE['cookiename'] で取得することができます。
 * </p>
 * @param int $expire [optional] <p>
 * クッキーの有効期限。これは Unix タイムスタンプなので
 * Epoch（1970 年 1 月 1 日）からの経過秒数となります。
 * <b>time</b> または
 * <b>mktime</b> 関数により
 * 返された現在のUNIX標準時に、期限としたい必要な秒数を加算したものを
 * 利用することができるでしょう。
 * time()+60*60*24*30
 * はクッキーの有効期限を 30 日後にセットします。
 * 0 を設定したり省略したりした場合は、クッキーはセッションの最後
 * (つまりブラウザを閉じるとき) が有効期限となります。
 * </p>
 * <p>
 * <p>
 * <i>expire</i> パラメータには、Wdy, DD-Mon-YYYY
 * HH:MM:SS GMT といった形式ではなく Unix
 * タイムスタンプを渡していることにお気づきでしょうか。
 * これは、PHP の内部で自動的に変換を行っているからです。
 * </p>
 * </p>
 * @param string $path [optional] <p>
 * サーバー上での、クッキーを有効としたいパス
 * '/' をセットすると、クッキーは
 * <i>domain</i> 配下の全てで有効となります。
 * '/foo/' をセットすると、クッキーは
 * /foo/ ディレクトリとそのサブディレクトリ配下
 * (例えば /foo/bar/) で有効となります。
 * デフォルト値は、クッキーがセットされたときのカレントディレクトリです。
 * </p>
 * @param string $domain [optional] <p>
 * クッキーが有効な (サブ) ドメイン。これを
 * 'www.example.com' などのサブドメインに設定すると、
 * www サブドメインおよびそれ自身のすべてのサブドメイン (w2.www.example.com など) でクッキーが使えるようになります。
 * サブドメインを含むドメイン全体でクッキーを有効にしたければ、そのドメイン自体
 * (この場合は 'example.com') を設定します。
 * </p>
 * <p>
 * 古いブラウザの中には、非推奨になった
 * RFC 2109 を実装しているものが未だに残っているかもしれません。
 * そのようなブラウザでは、すべてのサブドメインにマッチさせるためには先頭に
 * . が必要となります。
 * </p>
 * @param bool $secure [optional] <p>
 * クライアントからのセキュアな HTTPS 接続の場合にのみクッキーが送信されるようにします。
 * <b>TRUE</b> を設定すると、セキュアな接続が存在する場合にのみクッキーを設定します。
 * サーバー側では、このようにセキュアな接続の場合にのみクッキーを送信するという処理は
 * プログラマの責任で行うことになります
 * (たとえば $_SERVER["HTTPS"] の内容を使用します)。
 * </p>
 * @param bool $httponly [optional] <p>
 * <b>TRUE</b> を設定すると、HTTP を通してのみクッキーにアクセスできるようになります。
 * つまり、JavaScript のようなスクリプト言語からはアクセスできなくなるということです。
 * この設定を使用すると、XSS 攻撃によって ID を盗まれる危険性を減らせる
 * (が、すべてのブラウザがこの設定をサポートしているというわけではありません)
 * と言われていますが、これはしばしば議論の対象となります。
 * PHP 5.2.0 で追加されました。
 * <b>TRUE</b> あるいは <b>FALSE</b> で指定します。
 * </p>
 * @return bool もしもこの関数をコールする前に何らかの出力がある場合には、
 * <b>setcookie</b> は失敗し <b>FALSE</b> を返します。
 * <b>setcookie</b> が正常に実行されると、<b>TRUE</b> を返します。
 * この関数では、ユーザーがクッキーを受け入れたかどうかを判断することはできません。
 */
function setcookie(string $name, string $value = "", int $expire = 0, string $path = "", string $domain = "", bool $secure = false, bool $httponly = false): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 値を URL エンコードせずにクッキーを送信する
 * @link http://php.net/manual/ja/function.setrawcookie.php
 * @param string $name
 * @param string $value [optional]
 * @param int $expire [optional]
 * @param string $path [optional]
 * @param string $domain [optional]
 * @param bool $secure [optional]
 * @param bool $httponly [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function setrawcookie(string $name, string $value = null, int $expire = 0, string $path = null, string $domain = null, bool $secure = false, bool $httponly = false): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 生の HTTP ヘッダを送信する
 * @link http://php.net/manual/ja/function.header.php
 * @param string $string <p>
 * ヘッダ文字列。
 * </p>
 * <p>
 * 特殊な header コールが 2 種類あります。最初のものは、
 * 文字列 "HTTP/"
 * から始まる全てのヘッダ (大文字・小文字は区別されません) です。
 * このヘッダは、送信する HTTP ステータスコードを示すために使用されます。
 * 例えば、存在しないファイルへのリクエストを処理するためにある PHP
 * スクリプトを使用するよう (ErrorDocument
 * ディレクティブにより) Apache を設定する場合、
 * そのスクリプトが正しいステータスコードを返すようにする必要があります。
 * </p>
 * <p>
 * <code>
 * header("HTTP/1.0 404 Not Found");
 * </code>
 * </p>
 * <p>
 * 2 番目の特別なヘッダは、"Location:"
 * ヘッダです。このヘッダがブラウザに返されるだけではなく、
 * ブラウザに REDIRECT (302) ステータスコードを返します
 * (201 や 3xx
 * ステータスコードが既に送信されていない場合にのみ)。
 * </p>
 * <p>
 * <code>
 * header("Location: http://www.example.com/"); /* ブラウザをリダイレクトします * /
 * /* リダイレクトする際に、これ以降のコードが実行されないことを確認してください * /
 * exit;
 * </code>
 * </p>
 * @param bool $replace [optional] <p>
 * オプションのパラメータ <i>replace</i> は、ヘッダが
 * 前に送信された類似のヘッダを置換するか、または、同じ形式の二番目の
 * ヘッダを追加するかどうかを指定します。デフォルトでは、この関数は
 * 置換を行ないますが、二番目の引数に <b>FALSE</b> を指定すると、同じ型の
 * 複数のヘッダを強制的に生成します。例えば、
 * </p>
 * <p>
 * <code>
 * header('WWW-Authenticate: Negotiate');
 * header('WWW-Authenticate: NTLM', false);
 * </code>
 * </p>
 * @param int $http_response_code [optional] <p>
 * HTTP レスポンスコードを強制的に指定の値にします。このパラメータが意味をなすのは
 * <i>string</i> が空文字列でないときだけであることに注意しましょう。
 * </p>
 * @return void 値を返しません。
 */
function header(string $string, bool $replace = true, int $http_response_code = null): void {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 以前に設定したHTTPヘッダを削除する
 * @link http://php.net/manual/ja/function.header-remove.php
 * @param string $name [optional] <p>
 * 削除するヘッダの名前
 * </p>
 * このパラメータは大文字小文字を区別しません
 * @return void 値を返しません。
 */
function header_remove(string $name = null): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ヘッダが既に送信されているかどうかを調べる
 * @link http://php.net/manual/ja/function.headers-sent.php
 * @param string $file [optional] <p>
 * オプション引数の <i>file</i> と
 * <i>line</i> がセットされている場合、
 * PHP のソースファイル名と出力が開始された行番号が、それぞれ
 * <i>file</i> と <i>line</i>
 * に格納されます。
 * </p>
 * @param int $line [optional] <p>
 * 出力を開始した行番号。
 * </p>
 * @return bool <b>headers_sent</b>
 * は、HTTP ヘッダがまだ送信されていない場合に <b>FALSE</b>、
 * そうでないでない場合に <b>TRUE</b> を返します。
 */
function headers_sent(string &$file = null, int &$line = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 送信した (もしくは送信される予定の) レスポンスヘッダの一覧を返す
 * @link http://php.net/manual/ja/function.headers-list.php
 * @return array ヘッダを、数値添字の配列で返します。
 */
function headers_list(): array {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * HTTP レスポンスコードを取得または設定
 * @link http://php.net/manual/ja/function.http-response-code.php
 * @param int $response_code [optional] <p>
 * オプションの <i>response_code</i> は、レスポンスコードを設定します。
 * </p>
 * @return mixed <i>response_code</i> を指定した場合は、変更前に設定されていたステータスコードを返します。
 * <i>response_code</i> を省略した場合は、現在のステータスコードを返します。
 * どちらの場合でも、Web サーバー環境におけるデフォルトのステータスコードは
 * 200 です。
 * </p>
 * <p>
 * <i>response_code</i> が省略されており、
 * かつ Web サーバー環境以外 (CLI アプリケーションなど) で実行した場合には、<b>FALSE</b> を返します。
 * <i>response_code</i> を指定して、
 * かつ Web サーバー環境以外 (CLI アプリケーションなど) で実行した場合
 * (ただし、事前にレスポンスのステータスが設定されていない場合に限る) には、<b>TRUE</b> を返します。
 */
function http_response_code(int $response_code = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * クライアントとの接続が切断されているかどうかを調べる
 * @link http://php.net/manual/ja/function.connection-aborted.php
 * @return int クライアントとの接続が切断されている場合に 1、それ以外の場合に 0 を返します。
 */
function connection_aborted(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 接続ステータスのビットフィールドを返す
 * @link http://php.net/manual/ja/function.connection-status.php
 * @return int 接続ステータスのビットフィールドを返します。これを定数
 * CONNECTION_XXX と比較することで、接続の状態を判断できます。
 */
function connection_status(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * クライアントの接続が切断された際にスクリプトの実行を終了するかどうかを設定する
 * @link http://php.net/manual/ja/function.ignore-user-abort.php
 * @param bool $value [optional] <p>
 * 指定すると、この関数は ini 項目 ignore_user_abort
 * に <i>value</i> の値を設定します。
 * 省略した場合、この関数は前の設定をそのまま返し、何も変更しません。
 * </p>
 * @return int 以前の設定を表す integer 値を返します。
 */
function ignore_user_abort(bool $value = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 設定ファイルをパースする
 * @link http://php.net/manual/ja/function.parse-ini-file.php
 * @param string $filename <p>
 * パースしたい ini ファイルのファイル名。
 * </p>
 * @param bool $process_sections [optional] <p>
 * <i>process_sections</i> パラメータに <b>TRUE</b>
 * を設定すると、セクション名と設定が含まれた多次元の配列を得ることができます。
 * デフォルトでは、<i>process_sections</i> は <b>FALSE</b> です。
 * </p>
 * @param int $scanner_mode [optional] <p>
 * <b>INI_SCANNER_NORMAL</b> (デフォルト) あるいは
 * <b>INI_SCANNER_RAW</b>。<b>INI_SCANNER_RAW</b>
 * を指定すると、オプションの値はパースされません。
 * </p>
 * PHP 5.6.1 以降では <b>INI_SCANNER_TYPED</b> も指定できるようになりました。
 * このモードでは、boolean や null そして integer の型を、可能な限り維持します。
 * 文字列 "true"、"on" そして "yes"
 * は <b>TRUE</b> に変換されます。"false"、"off"、"no"
 * そして "none" は <b>FALSE</b> だとみなされます。このモードでは、"null" は <b>NULL</b>
 * に変換されます。また数値形式の文字列も、可能な限り integer 型に変換されます。
 * </p>
 * @return array 成功した場合に設定を連想配列形式で返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function parse_ini_file(string $filename, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 設定文字列をパースする
 * @link http://php.net/manual/ja/function.parse-ini-string.php
 * @param string $ini <p>
 * パースしたい ini ファイルの内容。
 * </p>
 * @param bool $process_sections [optional] <p>
 * <i>process_sections</i>
 * を <b>TRUE</b> に設定すると、セクション名と設定を含む多次元配列を返します。
 * <i>process_sections</i> のデフォルトは <b>FALSE</b> です。
 * </p>
 * @param int $scanner_mode [optional] <p>
 * <b>INI_SCANNER_NORMAL</b> (デフォルト) あるいは
 * <b>INI_SCANNER_RAW</b>。<b>INI_SCANNER_RAW</b>
 * を指定すると、オプションの値はパースされません。
 * </p>
 * PHP 5.6.1 以降では <b>INI_SCANNER_TYPED</b> も指定できるようになりました。
 * このモードでは、boolean や null そして integer の型を、可能な限り維持します。
 * 文字列 "true"、"on" そして "yes"
 * は <b>TRUE</b> に変換されます。"false"、"off"、"no"
 * そして "none" は <b>FALSE</b> だとみなされます。このモードでは、"null" は <b>NULL</b>
 * に変換されます。また数値形式の文字列も、可能な限り integer 型に変換されます。
 * </p>
 * @return array 成功した場合に設定を連想配列形式で返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function parse_ini_string(string $ini, bool $process_sections = false, int $scanner_mode = INI_SCANNER_NORMAL): array {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * HTTP POST でアップロードされたファイルかどうかを調べる
 * @link http://php.net/manual/ja/function.is-uploaded-file.php
 * @param string $filename <p>
 * 調べたいファイル名。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function is_uploaded_file(string $filename): bool {}

/**
 * (PHP 4 &gt;= 4.0.3, PHP 5, PHP 7)<br/>
 * アップロードされたファイルを新しい位置に移動する
 * @link http://php.net/manual/ja/function.move-uploaded-file.php
 * @param string $filename <p>
 * アップロードしたファイルのファイル名。
 * </p>
 * @param string $destination <p>
 * ファイルの移動先。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を返します。
 * </p>
 * <p>
 * <i>filename</i> が有効なアップロードファイルでない場合、
 * 処理は行われず、<b>move_uploaded_file</b> は
 * <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <i>filename</i> が有効なアップロードファイルであるが、
 * 何らかの理由により、移動できない場合、処理は行われず、
 * <b>move_uploaded_file</b> は
 * <b>FALSE</b> を返します。加えて、警告が出力されます。
 */
function move_uploaded_file(string $filename, string $destination): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した IP アドレスに対応するインターネットホスト名を取得する
 * @link http://php.net/manual/ja/function.gethostbyaddr.php
 * @param string $ip_address <p>
 * ホストの IP アドレス。
 * </p>
 * @return string 成功した場合はホスト名を返します。
 * 失敗した場合は、そのままの形の
 * <i>ip_address</i> を文字列で返します。
 * 入力が壊れている場合は <b>FALSE</b> を返します。
 */
function gethostbyaddr(string $ip_address): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * インターネットホスト名に対応するIPv4アドレスを取得する
 * @link http://php.net/manual/ja/function.gethostbyname.php
 * @param string $hostname <p>
 * ホスト名。
 * </p>
 * @return string IPv4 アドレスを返します。失敗した場合は、そのままの形の
 * <i>hostname</i> を文字列で返します。
 */
function gethostbyname(string $hostname): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定したインターネットホスト名に対応するIPv4アドレスのリストを取得する
 * @link http://php.net/manual/ja/function.gethostbynamel.php
 * @param string $hostname <p>
 * ホスト名。
 * </p>
 * @return array IPv4 アドレスの配列を返します。
 * もし <i>hostname</i> が解決できなかった場合は
 * <b>FALSE</b> を返します。
 */
function gethostbynamel(string $hostname): array {}

/**
 * (PHP &gt;= 5.3.0)<br/>
 * ホスト名を取得する
 * @link http://php.net/manual/ja/function.gethostname.php
 * @return string 成功時にはホスト名を示す文字列。失敗時には <b>FALSE</b> を返します
 */
function gethostname(): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * <b>checkdnsrr</b> のエイリアス
 * @link http://php.net/manual/ja/function.dns-check-record.php
 * @param $host
 * @param $type [optional]
 */
function dns_check_record($host, $type) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定したインターネットホスト名もしくは IP アドレスに対応する DNS レコードを検索する
 * @link http://php.net/manual/ja/function.checkdnsrr.php
 * @param string $host <p>
 * <i>host</i>は、ドットで 4 つに分けられた形式の
 * IP アドレスか、あるいはホスト名です。
 * </p>
 * @param string $type [optional] <p>
 * <i>type</i>は、A, MX, NS, SOA, PTR, CNAME, AAAA, A6,
 * SRV, NAPTR, ANY のどれか一つです。
 * </p>
 * @return bool レコードが見つかった場合に <b>TRUE</b>、
 * 何も見つからないかエラーが発生した場合に <b>FALSE</b> を返します。
 */
function checkdnsrr(string $host, string $type = "MX"): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * <b>getmxrr</b> のエイリアス
 * @link http://php.net/manual/ja/function.dns-get-mx.php
 * @param $hostname
 * @param $mxhosts
 * @param $weight [optional]
 */
function dns_get_mx($hostname, &$mxhosts, &$weight) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定したインターネットホスト名に対応する MX レコードを取得する
 * @link http://php.net/manual/ja/function.getmxrr.php
 * @param string $hostname <p>
 * インターネットホスト名。
 * </p>
 * @param array $mxhosts <p>
 * 見つかった MX レコードのリストが、配列
 * <i>mxhosts</i> に格納されます。
 * </p>
 * @param array $weight [optional] <p>
 * 配列 <i>weight</i> を指定すると、
 * そこに重み情報が格納されます。
 * </p>
 * @return bool 何かレコードが見つかった場合に <b>TRUE</b>、
 * 何も見つからないかエラーが発生した場合に <b>FALSE</b> を返します。
 */
function getmxrr(string $hostname, array &$mxhosts, array &$weight = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * ホスト名に関連する DNS リソースレコードを取得する
 * @link http://php.net/manual/ja/function.dns-get-record.php
 * @param string $hostname <p>
 * <i>hostname</i> は、正しい DNS ホスト名、すなわち
 * "www.example.com" のようなものでなければなりません。
 * in-addr.arpa 形式の表記を用いた逆引き検索は可能ですが、
 * たいていは <b>gethostbyaddr</b> を用いるほうが適当です。
 * </p>
 * <p>
 * DNS の標準規格により、メールアドレスは user.host 形式で渡されます
 * （たとえば、hostmaster.example.com が hostmaster@example.com
 * の代わりとなります）。
 * この値をしっかり確認し、<b>mail</b> のような関数で
 * 利用する前には必要なら変更を加えることを忘れないようにしてください。
 * </p>
 * @param int $type [optional] <p>
 * デフォルトでは、<b>dns_get_record</b> は
 * <i>hostname</i> に関連するすべてのリソースレコードを検索します。
 * これを制限するには、オプションの
 * <i>type</i> パラメータを指定してください。
 * <i>type</i> は以下のうちのいずれかです。
 * <b>DNS_A</b>, <b>DNS_CNAME</b>,
 * <b>DNS_HINFO</b>, <b>DNS_CAA</b>,
 * <b>DNS_MX</b>, <b>DNS_NS</b>,
 * <b>DNS_PTR</b>, <b>DNS_SOA</b>,
 * <b>DNS_TXT</b>, <b>DNS_AAAA</b>,
 * <b>DNS_SRV</b>, <b>DNS_NAPTR</b>,
 * <b>DNS_A6</b>, <b>DNS_ALL</b>
 * または <b>DNS_ANY</b>。
 * </p>
 * <p>
 * プラットフォーム依存の libresolv のおかしな挙動のせいで、
 * <b>DNS_ANY</b> が常にすべてのレコードを返すとは
 * 限りません。速度は遅くなりますが、<b>DNS_ALL</b>
 * のほうがより確実にすべてのレコードを取得できます。
 * </p>
 * @param array $authns [optional] <p>
 * 参照で渡し、
 * Authoritative Name Servers
 * のリソースレコードが格納されます。
 * </p>
 * @param array $addtl [optional] <p>
 * 参照で渡し、
 * Additional Records
 * が格納されます。
 * </p>
 * @param bool $raw [optional] <p>
 * raw モードでは、各タイプをループするのではなく、
 * リクエストしたタイプだけを問い合わせて追加情報に移ります。
 * </p>
 * @return array この関数は、連想配列を要素にもつ配列を返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 * それぞれの連想配列には
 * 少なくとも 以下のキーが含まれています:
 * <table>
 * 基本 DNS 属性
 * <tr valign="top">
 * <td>属性</td>
 * <td>意味</td>
 * </tr>
 * <tr valign="top">
 * <td>host</td>
 * <td>
 * これ以降の関連するデータが参照する DNS 名。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>class</td>
 * <td>
 * <b>dns_get_record</b> は
 * Internet クラスのレコードのみを返すので、このパラメータは常に
 * IN を返します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>type</td>
 * <td>
 * レコード型を表す文字列。type の値に応じて、
 * 結果の配列には追加の属性が含まれます。以下の表を参照ください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ttl</td>
 * <td>
 * このレコードの"有効期限 (Time To Live)"。レコードの本来の ttl と一致するとは
 * 限りません。むしろ、
 * ネームサーバーへのクエリにかかった時間をそこから引いたものに一致します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * <table>
 * 'type' に応じて連想配列に追加される項目
 * <tr valign="top">
 * <td>レコード型</td>
 * <td>追加項目</td>
 * </tr>
 * <tr valign="top">
 * <td>A</td>
 * <td>
 * ip: ドット区切り 10 進数形式の IPv4 アドレス。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>MX</td>
 * <td>
 * pri: メールエクスチェンジャの優先度。
 * 数字が小さいほど優先度が高い。
 * target: メールエクスチェンジャの FQDN 。
 * <b>dns_get_mx</b> も参照ください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CNAME</td>
 * <td>
 * target: レコードのエイリアスの対象となっている場所の FQDN 。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>NS</td>
 * <td>
 * target: このホスト名に対する権威をもっているネームサーバーの FQDN 。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>PTR</td>
 * <td>
 * target: レコードが指している、DNS 名前空間内の場所
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>TXT</td>
 * <td>
 * txt: このレコードに関連付けられている任意の文字列。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>HINFO</td>
 * <td>
 * cpu: このレコードが参照しているマシンの CPU を識別する IANA 番号。
 * os: このレコードが参照しているマシン上の OS を識別する IANA 番号。
 * これらの値の意味については、IANA の
 * Operating System Names
 * を参照ください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>CAA</td>
 * <td>
 * flags: A one-byte bitfield; currently only bit 0 is defined,
 * meaning 'critical'; other bits are reserved and should be ignored.
 * tag: CAA タグの名前 (alphanumeric ASCII string).
 * value: CAA タグの値 (binary string, may use subformats).
 * 詳細は、RFC 6844 を参照ください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>SOA</td>
 * <td>
 * mname: リソースレコードの元となるマシンの FQDN 。
 * rname: このドメインの管理責任者の Email アドレス。
 * serial: ドメインのシリアル番号。
 * refresh:
 * セカンダリネームサーバーがこのドメインのコピーを更新する際に参照するリフレッシュ間隔（秒単位）。
 * retry: リフレッシュが失敗した際に
 * 2 度目のリフレッシュを試みるまでの間隔（秒単位）
 * expire: セカンダリネームサーバーが、ゾーンデータの
 * リフレッシュに失敗した場合にコピーのデータを破棄せず持ち続ける期間
 * （秒単位）。
 * minimum-ttl: クライアントが、
 * 一度取得したデータを再リクエストすることなしに利用できる最小期間（秒単位）。
 * 個々のリソースレコードによって上書きが可能。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>AAAA</td>
 * <td>
 * ipv6: IPv6 アドレス。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>A6(PHP &gt;= 5.1.0)</td>
 * <td>
 * masklen: <i>chain</i>
 * で指定された対象から引き継ぐビット長。
 * ipv6: <i>chain</i>
 * とマージするためのこのレコードのアドレス。
 * chain: <i>ipv6</i>
 * データとマージするための親レコード。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>SRV</td>
 * <td>
 * pri: (Priority) 値が小さいものが優先されます。
 * weight: 同じ優先順位の
 * <i>targets</i> からランダムに選択する際の重み。
 * target および port:
 * リクエストされたサービスが存在するホスト名とポート。
 * 詳細は RFC 2782 を参照ください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>NAPTR</td>
 * <td>
 * order および pref: 上の
 * <i>pri</i> および <i>weight</i> と同じ。
 * flags, services, regex,
 * および replacement:
 * RFC 2915 で定義されるパラメータ。
 * </td>
 * </tr>
 * </table>
 */
function dns_get_record(string $hostname, int $type = DNS_ANY, array &$authns = null, array &$addtl = null, bool $raw = false): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数の整数としての値を取得する
 * @link http://php.net/manual/ja/function.intval.php
 * @param mixed $var <p>
 * 整数に変換するスカラー値
 * </p>
 * @param int $base [optional] <p>
 * 変換のための基数
 * </p>
 * <p>
 * <i>base</i> が 0 の場合は、
 * <i>var</i> のフォーマットに基づいて利用する基数を決めます。
 * 文字列の先頭が "0x" (あるいは "0X") の場合は、基数を 16 (十六進数) とします。
 * @return int 成功時は <i>var</i> の整数値、失敗時は 0。
 * 空の配列の場合は 0、空でない配列の場合は
 * 1 を返します。
 * </p>
 * <p>
 * 最大値はシステムに依存します。32 ビットシステムでは、
 * 最大の符号付き整数の範囲 -2147483648 ～ 2147483647 となります。
 * このため、そのようなシステムでは intval('1000000000000')
 * は 2147483647 を返します。
 * 64 ビットシステムにおける最大の符号付き整数は 9223372036854775807
 * となります。
 * </p>
 * <p>
 * 文字列の場合、文字列の最左の文字に依存しますが、ほとんどの場合で 0
 * を返します。
 * 整数への変換
 * の一般的なルールが適用されます。
 */
function intval($var, int $base = 10): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 変数の float 値を取得する
 * @link http://php.net/manual/ja/function.floatval.php
 * @param mixed $var <p>
 * あらゆるスカラ型を指定できます。オブジェクトに
 * <b>floatval</b> を使用することはできません。
 * その場合は <b>E_NOTICE</b> レベルのエラーを発して 1 を返します。
 * </p>
 * @return float 指定した変数の float 値を返します。
 * 空の配列の場合は 0、空でない配列の場合は 1 を返します。
 * </p>
 * <p>
 * 文字列の場合、ほとんどは 0 を返しますが、先頭の文字が何であるかによってこれは変わります。
 * float 型へのキャスト
 * と同じルールに従います。
 */
function floatval($var): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>floatval</b> のエイリアス
 * @link http://php.net/manual/ja/function.doubleval.php
 * @param $var
 */
function doubleval($var) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数の文字列としての値を取得する
 * @link http://php.net/manual/ja/function.strval.php
 * @param mixed $var <p>
 * 文字列に変換したい変数。
 * </p>
 * <p>
 * <i>var</i> には、任意のスカラー型を指定できます。
 * また、__toString()
 * メソッドを実装したオブジェクトを使うこともできます。
 * <b>strval</b> は配列に対して使うことはできず、
 * __toString()
 * メソッドを実装していないオブジェクトに対しても使うことはできません。
 * </p>
 * @return string <i>var</i> の文字列値を返します。
 */
function strval($var): string {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 変数の boolean としての値を取得する
 * @link http://php.net/manual/ja/function.boolval.php
 * @param mixed $var <p>
 * boolean に変換したいスカラー値。
 * </p>
 * @return boolean <i>var</i> の boolean としての値を返します。
 */
function boolval($var): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数の型を取得する
 * @link http://php.net/manual/ja/function.gettype.php
 * @param mixed $var <p>
 * 型を調べたい変数。
 * </p>
 * @return string 返された文字列は、以下のいずれかの値を持ちます。
 * "boolean"
 * "integer"
 * "double" (歴史的な理由により、float
 * の場合には "double"が返されます。"float" とはなりません)
 * "string"
 * "array"
 * "object"
 * "resource"
 * "NULL"
 * "unknown type"
 */
function gettype($var): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数の型をセットする
 * @link http://php.net/manual/ja/function.settype.php
 * @param mixed $var <p>
 * 変換する変数。
 * </p>
 * @param string $type <p>
 * <i>type</i> の値は以下の命令のいずれかです。
 * "boolean" または "bool"
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function settype(&$var, string $type): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 変数が <b>NULL</b> かどうか調べる
 * @link http://php.net/manual/ja/function.is-null.php
 * @param mixed $var <p>
 * 評価する変数。
 * </p>
 * @return bool <i>var</i> が null の場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function is_null($var): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数がリソースかどうかを調べる
 * @link http://php.net/manual/ja/function.is-resource.php
 * @param mixed $var <p>
 * 評価する変数。
 * </p>
 * @return bool <i>var</i> が resource の場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function is_resource($var): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数が boolean であるかを調べる
 * @link http://php.net/manual/ja/function.is-bool.php
 * @param mixed $var <p>
 * 評価する変数。
 * </p>
 * @return bool <i>var</i> が boolean である場合に
 * <b>TRUE</b> 、それ以外の場合に <b>FALSE</b> を返します。
 */
function is_bool($var): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数が整数型かどうかを検査する
 * @link http://php.net/manual/ja/function.is-int.php
 * @param mixed $var <p>
 * 評価する変数
 * </p>
 * @return bool もし <i>var</i> が 整数型 の場合 <b>TRUE</b>、
 * そうでない場合は <b>FALSE</b> を返します。
 */
function is_int($var): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数の型が float かどうか調べる
 * @link http://php.net/manual/ja/function.is-float.php
 * @param mixed $var <p>
 * 評価する変数
 * </p>
 * @return bool もし <i>var</i> が float 型 の場合 <b>TRUE</b>、
 * そうでない場合は <b>FALSE</b> を返します。
 */
function is_float($var): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>is_int</b> のエイリアス
 * @link http://php.net/manual/ja/function.is-integer.php
 * @param $var
 */
function is_integer($var) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>is_int</b> のエイリアス
 * @link http://php.net/manual/ja/function.is-long.php
 * @param $var
 */
function is_long($var) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>is_float</b> のエイリアス
 * @link http://php.net/manual/ja/function.is-double.php
 * @param $var
 */
function is_double($var) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>is_float</b> のエイリアス
 * @link http://php.net/manual/ja/function.is-real.php
 * @param $var
 */
function is_real($var) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数が数字または数値形式の文字列であるかを調べる
 * @link http://php.net/manual/ja/function.is-numeric.php
 * @param mixed $var <p>
 * 評価する変数。
 * </p>
 * @return bool <i>var</i> が数値または数値形式の文字列である場合に
 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function is_numeric($var): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数の型が文字列かどうかを調べる
 * @link http://php.net/manual/ja/function.is-string.php
 * @param mixed $var <p>
 * 評価する変数。
 * </p>
 * @return bool <i>var</i> の型が string である場合に
 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function is_string($var): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数が配列かどうかを検査する
 * @link http://php.net/manual/ja/function.is-array.php
 * @param mixed $var <p>
 * 評価する変数
 * </p>
 * @return bool <i>var</i> が 配列型 の場合 <b>TRUE</b>、
 * そうでない場合 <b>FALSE</b> を返します。
 */
function is_array($var): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数がオブジェクトかどうかを検査する
 * @link http://php.net/manual/ja/function.is-object.php
 * @param mixed $var <p>
 * 評価する変数。
 * </p>
 * @return bool もし <i>var</i> が object 型 の場合 <b>TRUE</b>、
 * そうでない場合は <b>FALSE</b> を返します。
 */
function is_object($var): bool {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * 変数がスカラかどうかを調べる
 * @link http://php.net/manual/ja/function.is-scalar.php
 * @param mixed $var <p>
 * 評価する変数。
 * </p>
 * @return bool <i>var</i> がスカラの場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function is_scalar($var): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 引数が、関数としてコール可能な構造であるかどうかを調べる
 * @link http://php.net/manual/ja/function.is-callable.php
 * @param mixed $var <p>
 * チェックする値。
 * </p>
 * @param bool $syntax_only [optional] <p>
 * <b>TRUE</b> の場合、この関数は単に <i>name</i>
 * が関数またはメソッドであるかどうかだけを調べます。
 * 文字列以外の型の変数や不正な形式の配列は、
 * 引数として受け付けられません。有効な配列の形式は、
 * 最初のエントリがオブジェクトあるいは文字列で、2 番目のエントリが文字列である
 * 2 つのエントリからなるものです。
 * </p>
 * @param string $callable_name [optional] <p>
 * "呼び出し名" を受け取ります。下の例では "someClass::someMethod"
 * です。これは someClass::SomeMethod() が static メソッドであるかのようにみえますが、
 * そうではないことに注意しましょう。
 * </p>
 * @return bool <i>var</i> がコール可能な場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function is_callable($var, bool $syntax_only = false, string &$callable_name = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * プロセスのファイルポインタをクローズする
 * @link http://php.net/manual/ja/function.pclose.php
 * @param resource $handle <p>
 * ファイルポインタは有効なものでなければならず、また
 * <b>popen</b> で正常にオープンされたものである必要があります。
 * </p>
 * @return int 実行していたプロセスの終了ステータスを返します。
 * エラーが発生した場合は -1 を返します。
 */
function pclose($handle): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * プロセスへのファイルポインタをオープンする
 * @link http://php.net/manual/ja/function.popen.php
 * @param string $command <p>
 * コマンド。
 * </p>
 * @param string $mode <p>
 * モード。
 * </p>
 * @return resource <b>fopen</b>
 * により返されたファイルポインタと同様のものを返しますが、
 * それは(読み書きのいずれか一方でのみ使われる)片方向ストリームであり、
 * <b>pclose</b>
 * によりクローズされなければならないところが異なります。
 * このポインタは、<b>fgets</b>、<b>fgetss</b>
 * および <b>fwrite</b> のいずれかで使うことができます。
 * モードが 'r' のときは、返されるファイルポインタは
 * そのコマンドの STDOUT と等しくなります。また、モードが
 * 'w' のときは、返されるファイルポインタは
 * そのコマンドの STDIN と等しくなります。
 * </p>
 * <p>
 * エラーが発生した場合は <b>FALSE</b> を返します。
 */
function popen(string $command, string $mode) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルを出力する
 * @link http://php.net/manual/ja/function.readfile.php
 * @param string $filename <p>
 * 読み込もうとするファイルの名前。
 * </p>
 * @param bool $use_include_path [optional] <p>
 * オプションの2番目の引数を使用して、これに<b>TRUE</b>を設定することにより、
 * include_path
 * のファイルの検索も行うことができます。
 * </p>
 * @param resource $context [optional] <p>
 * コンテキストストリームリソース。
 * </p>
 * @return int ファイルから読み込んだバイト数を返します。エラーが起こると
 * <b>FALSE</b>を返し、また@<b>readfile</b>という名前でコールされない限り、
 * エラーメッセージが表示されます。
 */
function readfile(string $filename, bool $use_include_path = false, $context = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルポインタの位置を先頭に戻す
 * @link http://php.net/manual/ja/function.rewind.php
 * @param resource $handle <p>
 * ファイルポインタは有効なものでなければならず、
 * また <b>fopen</b>
 * で正常にオープンされたファイルを指している必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function rewind($handle): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ディレクトリを削除する
 * @link http://php.net/manual/ja/function.rmdir.php
 * @param string $dirname <p>
 * ディレクトリへのパス。
 * </p>
 * @param resource $context [optional] コンテキストのサポートは、
 * PHP 5.0.0 で追加されました。contexts の説明に関しては、
 * を参照してください。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function rmdir(string $dirname, $context = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在の umask を変更する
 * @link http://php.net/manual/ja/function.umask.php
 * @param int $mask [optional] <p>
 * 新しい umask。
 * </p>
 * @return int <b>umask</b>を引数無しで実行すると、単に現在の
 * umask値を返します。
 */
function umask(int $mask = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * オープンされたファイルポインタをクローズする
 * @link http://php.net/manual/ja/function.fclose.php
 * @param resource $handle <p>
 * ファイルポインタは有効なものでなければならず、また
 * <b>fopen</b>または<b>fsockopen</b>
 * で正常にオープンされたファイルを指している必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function fclose($handle): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルポインタがファイル終端に達しているかどうか調べる
 * @link http://php.net/manual/ja/function.feof.php
 * @param resource $handle ファイルポインタは、有効なファイルポインタである必要があり、
 * <b>fopen</b> または <b>fsockopen</b> で正常にオープンされた
 * （そしてまだ <b>fclose</b> でクローズされていない）
 * ファイルを指している必要があります。</p>
 * @return bool ファイルポインタが EOF に達しているかまたはエラー
 * (ソケットタイムアウトを含みます) の場合に <b>TRUE</b> 、
 * その他の場合に <b>FALSE</b> を返します。
 */
function feof($handle): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルポインタから1文字取り出す
 * @link http://php.net/manual/ja/function.fgetc.php
 * @param resource $handle ファイルポインタは、有効なファイルポインタである必要があり、
 * <b>fopen</b> または <b>fsockopen</b> で正常にオープンされた
 * （そしてまだ <b>fclose</b> でクローズされていない）
 * ファイルを指している必要があります。</p>
 * @return string <i>handle</i>が指すファイルポインタから 1 文字読み出し、
 * その文字からなる文字列を返します。EOF の場合に <b>FALSE</b> を返します。
 */
function fgetc($handle): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルポインタから 1 行取得する
 * @link http://php.net/manual/ja/function.fgets.php
 * @param resource $handle ファイルポインタは、有効なファイルポインタである必要があり、
 * <b>fopen</b> または <b>fsockopen</b> で正常にオープンされた
 * （そしてまだ <b>fclose</b> でクローズされていない）
 * ファイルを指している必要があります。</p>
 * @param int $length [optional] <p>
 * 読み出しは、<i>length</i> - 1
 * バイト読み出したか、(返り値に含まれる)
 * 改行文字を検出したか、EOF に達したかのいずれかが起こった時点で終了します。
 * length が指定されない場合は、行末に達するまで読み続けます。
 * </p>
 * <p>
 * PHP 4.3.0 より前のバージョンでは、もしこのパラメータが省略された場合、
 * 行の長さを 1024 と仮定していました。
 * もしもファイル内の行の多くが 8KB を超えている場合は、
 * 行の最大長を指定するとスクリプトのリソース効率がよくなります。
 * </p>
 * @return string <i>handle</i> で指定したファイルポインタから最大
 * <i>length</i> - 1 バイト読み出し、
 * その文字列を返します。ファイルポインタから読み込むデータがもうない場合は
 * <b>FALSE</b> を返します。
 * </p>
 * <p>
 * エラーが起こった場合、<b>FALSE</b> を返します。
 */
function fgets($handle, int $length = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルポインタから 1 行取り出し、HTML タグを取り除く
 * @link http://php.net/manual/ja/function.fgetss.php
 * @param resource $handle ファイルポインタは、有効なファイルポインタである必要があり、
 * <b>fopen</b> または <b>fsockopen</b> で正常にオープンされた
 * （そしてまだ <b>fclose</b> でクローズされていない）
 * ファイルを指している必要があります。</p>
 * @param int $length [optional] <p>
 * 取得したいデータの長さ。
 * </p>
 * @param string $allowable_tags [optional] <p>
 * オプションの 3 番目の引数を使用して、
 * 取り除く必要がないタグを指定することができます。
 * See <b>strip_tags</b> for details regarding
 * <i>allowable_tags</i>.
 * </p>
 * @return string <i>handle</i> で指定したファイルポインタから最大
 * <i>length</i> - 1 バイト読み出し、
 * HTML や PHP コードを取り除いた文字列を返します。
 * </p>
 * <p>
 * エラーが発生した場合は <b>FALSE</b> を返します。
 */
function fgetss($handle, int $length = null, string $allowable_tags = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * バイナリセーフなファイルの読み込み
 * @link http://php.net/manual/ja/function.fread.php
 * @param resource $handle <b>fopen</b>
 * を使用して作成したファイルシステムポインタリソース。</p>
 * @param int $length <p>
 * 最大 <i>length</i> バイトまで読み込む。
 * </p>
 * @return string 読み込んだ文字列を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function fread($handle, int $length): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルまたは URL をオープンする
 * @link http://php.net/manual/ja/function.fopen.php
 * @param string $filename <p>
 * <i>filename</i> が "スキーム://..." の形式である場合、
 * それは URL とみなされ、PHP はそのプロトコルのハンドラ
 * (ラッパーともいいます) を探します。
 * もしもそのプロトコルに対するラッパーが登録されていない場合、
 * PHP はスクリプトに潜在的な問題があることを示す NOTICE を発行したうえで、
 * <i>filename</i> を通常のファイルとみなしてオープンすることを試みます。
 * </p>
 * <p>
 * PHP は、<i>filename</i> がローカルのファイルを示しているとみなすと、
 * そのファイルへのストリームをオープンします。
 * そのファイルはPHPからアクセスできるものでなければなりません。
 * ファイルのパーミッションが (パラメータで指定された)
 * アクセスを許可されているかどうか確認する必要があります。
 * セーフモード または open_basedir
 * を有効にしている場合は更なるアクセス制限が加えられることがあります。
 * </p>
 * <p>
 * <i>filename</i> が登録されているプロトコルを示していると
 * PHP が判断し、かつそのプロトコルがネットワーク URL として登録されていれば、
 * PHP は allow_url_fopen
 * が有効となっているかどうかチェックします。
 * もしこれがオフになっていると、PHP は warning を発行し fopen は失敗します。
 * </p>
 * <p>
 * サポートされているプロトコルのリストは にあります。
 * いくつかのプロトコル (wrappersにも関連する) は
 * context かつ/または <i>php.ini</i> のオプションをサポートします。
 * 使用するプロトコルについてセットされるオプションのリストについては、
 * それぞれのページを見てください (例えば、 <i>php.ini</i> 上の
 * user_agent の値は
 * http ラッパーが使用します)。
 * </p>
 * <p>
 * Windows 環境では、ファイルパスで用いる全てのバックスラッシュを
 * エスケープするかフォワードスラッシュを使用することに注意してください。
 * <code>
 * $handle = fopen("c:\\folder\\resource.txt", "r");
 * </code>
 * </p>
 * @param string $mode <p>
 * パラメータ <i>mode</i> は、
 * そのストリームに要するアクセス形式を指定します。
 * この指定は、下表のうちのどれかとなります。
 * <table>
 * <b>fopen</b> で使用可能な
 * <i>mode</i> のリスト
 * <tr valign="top">
 * <td><i>mode</i></td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>'r'</td>
 * <td>
 * 読み込みのみでオープンします。ファイルポインタをファイルの先頭に置きます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'r+'</td>
 * <td>
 * 読み込み／書き出し用にオープンします。
 * ファイルポインタをファイルの先頭に置きます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'w'</td>
 * <td>
 * 書き出しのみでオープンします。ファイルポインタをファイルの先頭に置き、
 * ファイルサイズをゼロにします。ファイルが存在しない場合には、
 * 作成を試みます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'w+'</td>
 * <td>
 * 読み込み／書き出し用でオープンします。
 * ファイルポインタをファイルの先頭に置き、
 * ファイルサイズをゼロにします。
 * ファイルが存在しない場合には、作成を試みます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'a'</td>
 * <td>
 * 書き出し用のみでオープンします。ファイルポインタをファイルの終端に置きます。
 * ファイルが存在しない場合には、作成を試みます。
 * このモードは、<b>fseek</b> では何の効果もありません。
 * 書き込みは、常に追記となります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'a+'</td>
 * <td>
 * 読み込み／書き出し用でオープンします。
 * ファイルポインタをファイルの終端に置きます。
 * ファイルが存在しない場合には、作成を試みます。
 * このモードは、<b>fseek</b> では読み込み位置のみに影響します。
 * 書き込みは、常に追記となります。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'x'</td>
 * <td>
 * 書き込みのみでオープンします。ファイルポインタをファイルの先頭に置きます。
 * ファイルが既に存在する場合には <b>fopen</b> は失敗し、
 * <b>E_WARNING</b> レベルのエラーを発行します。
 * ファイルが存在しない場合には新規作成を試みます。
 * これは open(2) システムコールにおける
 * O_EXCL|O_CREAT フラグの指定と等価です。
 * このオプションはPHP4.3.2以降でサポートされ、また、
 * ローカルファイルに対してのみ有効です。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'x+'</td>
 * <td>
 * 読み込み／書き出し用でオープンします。
 * それ以外のふるまいは 'x' と同じです。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'c'</td>
 * <td>
 * 書き込みのみでオープンします。ファイルが存在しない場合には新規作成を試みます。
 * ファイルが既に存在する場合でもそれを ('w' のように) 切り詰めたりせず、
 * また ('x' のように) 関数のコールが失敗することもありません。
 * ファイルポインタをファイルの先頭に置きます。これは、アドバイザリ・ロック
 * (<b>flock</b> を参照ください) を確保してからファイルを変更したい場合に便利です。
 * 'w' を使うと、ロックを取得する前にファイルを切り詰めてしまいます
 * (もしファイルを切り詰めたいのなら、ロックを要求した後で
 * <b>ftruncate</b> を使うこともできます)。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'c+'</td>
 * <td>
 * 読み込み／書き出し用でオープンします。
 * それ以外のふるまいは 'c' と同じです。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>'e'</td>
 * <td>
 * Set close-on-exec flag on the opened file descriptor. Only
 * available in PHP compiled on POSIX.1-2008 conform systems.
 * </td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * オペレーティングシステムファミリが異なると行末も異なります。
 * テキストファイルに書き出し、そこに改行を加えたいとき、
 * オペレーティングシステムにあわせた正しい改行コードを使用する必要があります。
 * Unix ベースのシステムでは改行に \n キャラクタを使用します。
 * Windows ベースのシステムでは \r\n を使用します。
 * マッキントッシュベースのシステムでは \r を使用します。
 * </p>
 * <p>
 * 間違った改行コードでファイルに書き込むと、
 * 他のアプリケーション上でそのファイルを開いた際に変な風に見えてしまいます。
 * </p>
 * <p>
 * Windows上では、\nを\r\nに透過的に変換する
 * text-mode変換フラグ('t')が提供されます。
 * それに対し、'b'を使って強制的にバイナリモードにすることもできます。
 * その場合データの変換はされません。
 * このフラグを使用するには、'b' または 't'を
 * <i>mode</i>引数の最後に追加してください。
 * </p>
 * <p>
 * デフォルトの変換モードは SAPI と使用している PHP のバージョンによって異なります。
 * したがって、互換性の意味から、常に適切なフラグを指定することが推奨されます。
 * plain-text ファイルを使用する場合には 't' モードを指定すべきであり、
 * 改行に \n を使用すると、
 * メモ帳のようなアプリケーションで読めることを期待できます。
 * それ以外のケースでは 'b' を使うべきです。
 * </p>
 * <p>
 * バイナリファイルを扱っている際に
 * 'b' フラグを指定しなかった場合、
 * 画像ファイルが壊れたり、\r\n
 * キャラクタがおかしくなる等の問題を抱えてしまうでしょう。
 * </p>
 * <p>
 * 互換性維持のために、<b>fopen</b> でファイルをオープンする際は
 * 常に 'b' フラグを指定することが強く推奨されます。
 * </p>
 * <p>
 * 互換性維持のために、't'
 * モードを使用または依存しているコードを書き直し、
 * 正しい改行コードと 'b' モードを代わりに使用することが、
 * 強く推奨されます。
 * </p>
 * @param bool $use_include_path [optional] <p>
 * オプションの３番目の引数<i>use_include_path</i>に'1'又は
 * <b>TRUE</b> を設定することにより、include_path
 * のファイルの検索も行うこともできます。
 * </p>
 * @param resource $context [optional] コンテキストのサポートは、
 * PHP 5.0.0 で追加されました。contexts の説明に関しては、
 * を参照してください。
 * @return resource 成功した場合にファイルポインタリソース、エラー時に <b>FALSE</b> を返します。
 */
function fopen(string $filename, string $mode, bool $use_include_path = false, $context = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルポインタ上に残っているすべてのデータを出力する
 * @link http://php.net/manual/ja/function.fpassthru.php
 * @param resource $handle ファイルポインタは、有効なファイルポインタである必要があり、
 * <b>fopen</b> または <b>fsockopen</b> で正常にオープンされた
 * （そしてまだ <b>fclose</b> でクローズされていない）
 * ファイルを指している必要があります。</p>
 * @return int エラーが起こった場合、<b>fpassthru</b> は <b>FALSE</b> を返します。
 * それ以外の場合、<b>fpassthru</b> は <i>handle</i>
 * から読み込んだ文字の数を返し、出力へ渡します。
 */
function fpassthru($handle): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルを指定した長さに丸める
 * @link http://php.net/manual/ja/function.ftruncate.php
 * @param resource $handle <p>
 * ファイルポインタ。
 * </p>
 * <p>
 * <i>handle</i> は書き込みモードでオープンする必要があります。
 * </p>
 * @param int $size <p>
 * 丸める大きさ。
 * </p>
 * <p>
 * <i>size</i> がファイルのサイズより大きい場合は、
 * null バイトを用いてファイルを拡大します。
 * </p>
 * <p>
 * <i>size</i> がファイルのサイズより小さい場合は、
 * 余分なデータは失われます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ftruncate($handle, int $size): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * オープンしたファイルポインタからファイルに関する情報を取得する
 * @link http://php.net/manual/ja/function.fstat.php
 * @param resource $handle <b>fopen</b>
 * を使用して作成したファイルシステムポインタリソース。</p>
 * @return array ファイルの統計情報の配列を返します。配列のフォーマットについては
 * <b>stat</b>のマニュアルをご覧ください。
 */
function fstat($handle): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルポインタを移動する
 * @link http://php.net/manual/ja/function.fseek.php
 * @param resource $handle <b>fopen</b>
 * を使用して作成したファイルシステムポインタリソース。</p>
 * @param int $offset <p>
 * オフセット。
 * </p>
 * <p>
 * ファイルの終端から数えた位置に移動するには、負の値を
 * <i>offset</i> に渡して
 * <i>whence</i> を
 * <b>SEEK_END</b> に設定しなければなりません。
 * </p>
 * @param int $whence [optional] <p>
 * <i>whence</i> の値は以下のようになります。
 * <b>SEEK_SET</b> - 位置を <i>offset</i> バイト目に設定する
 * <b>SEEK_CUR</b> - 現在の位置に <i>offset</i> を加えた位置に設定する
 * <b>SEEK_END</b> - ファイル終端に <i>offset</i> を加えた位置に設定する
 * </p>
 * @return int 成功すると 0 を返し、そうでなければ -1 を返します。
 */
function fseek($handle, int $offset, int $whence = SEEK_SET): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルの読み書き用ポインタの現在位置を返す
 * @link http://php.net/manual/ja/function.ftell.php
 * @param resource $handle <p>
 * ファイルポインタは有効なものでなければならず、また
 * <b>fopen</b>、<b>popen</b>
 * で正常にオープンされたファイルを指している必要があります。
 * <b>ftell</b> は、("a" フラグ付きでオープンされた)
 * 追加のみ可能なストリームに対する結果も未定義です。
 * </p>
 * @return int <i>handle</i> が示すファイルポインタの位置、
 * すなわちファイル・ストリーム上のオフセットを整数値で返します。
 * </p>
 * <p>
 * エラーが起こった場合 <b>FALSE</b> を返します。
 */
function ftell($handle): int {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 出力をファイルにフラッシュする
 * @link http://php.net/manual/ja/function.fflush.php
 * @param resource $handle ファイルポインタは、有効なファイルポインタである必要があり、
 * <b>fopen</b> または <b>fsockopen</b> で正常にオープンされた
 * （そしてまだ <b>fclose</b> でクローズされていない）
 * ファイルを指している必要があります。</p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function fflush($handle): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * バイナリセーフなファイル書き込み処理
 * @link http://php.net/manual/ja/function.fwrite.php
 * @param resource $handle <b>fopen</b>
 * を使用して作成したファイルシステムポインタリソース。</p>
 * @param string $string <p>
 * 書き込む文字列。
 * </p>
 * @param int $length [optional] <p>
 * <i>length</i>パラメータが与えられている場合、
 * <i>length</i>バイト数分の書き込みが完了したか、
 * <i>string</i>が終わりに達したかのいずれか早い方の
 * 事象により書き込みは中止されます。
 * </p>
 * <p>
 * <i>length</i> パラメータが指定されている場合、
 * magic_quotes_runtime
 * 構成オプションは無視され、<i>string</i>からの
 * スラッシュ文字の取り除きは行われないことに注意してください。
 * </p>
 * @return int
 */
function fwrite($handle, string $string, int $length = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>fwrite</b> のエイリアス
 * @link http://php.net/manual/ja/function.fputs.php
 * @param $fp
 * @param $str
 * @param $length [optional]
 */
function fputs($fp, $str, $length) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ディレクトリを作る
 * @link http://php.net/manual/ja/function.mkdir.php
 * @param string $pathname <p>
 * ディレクトリのパス。
 * </p>
 * @param int $mode [optional] <p>
 * モードは 0777 がデフォルトです。
 * これは最も緩やかなアクセス制限を意味します。
 * モードに関する詳細は <b>chmod</b> をご覧ください。
 * </p>
 * <p>
 * Windows では <i>mode</i> は無視されます。
 * </p>
 * <p>
 * モードを八進数で指定したくなることもあるかもしれません。
 * その場合は先頭にゼロをつける必要があります。
 * また、モードは、現在設定されている umask の影響も受けます。
 * umask を変更するには <b>umask</b> を使用します。
 * </p>
 * @param bool $recursive [optional] <p>
 * <i>pathname</i> で、入れ子構造のディレクトリの作成を許可します。
 * </p>
 * @param resource $context [optional] コンテキストのサポートは、
 * PHP 5.0.0 で追加されました。contexts の説明に関しては、
 * を参照してください。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mkdir(string $pathname, int $mode = 0777, bool $recursive = false, $context = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルをリネームする
 * @link http://php.net/manual/ja/function.rename.php
 * @param string $oldname <p>
 * 変更前の名前。
 * </p>
 * <p>
 * <i>oldname</i> で使用されるラッパーは、
 * <i>newname</i> で使用するラッパーと適合
 * している必要があります 。
 * </p>
 * @param string $newname <p>
 * 変更後の名前。
 * </p>
 * @param resource $context [optional] コンテキストのサポートは、
 * PHP 5.0.0 で追加されました。contexts の説明に関しては、
 * を参照してください。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function rename(string $oldname, string $newname, $context = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルをコピーする
 * @link http://php.net/manual/ja/function.copy.php
 * @param string $source <p>
 * コピー元ファイルへのパス。
 * </p>
 * @param string $dest <p>
 * コピー先のパス。<i>dest</i> が URL の場合、
 * 既存ファイルへの上書きをラッパーがサポートしていない場合にはコピーが失敗します。
 * </p>
 * <p>
 * コピー先のファイルが既に存在する場合、上書きされます。
 * </p>
 * @param resource $context [optional] <p>
 * <b>stream_context_create</b>
 * で作成した有効なコンテキストリソース。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function copy(string $source, string $dest, $context = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 一意なファイル名を生成する
 * @link http://php.net/manual/ja/function.tempnam.php
 * @param string $dir <p>
 * テンポラリファイルを作成したいディレクトリ。
 * </p>
 * @param string $prefix <p>
 * 作成されるテンポラリファイルのプレフィックス。
 * </p>
 * Windows では、プレフィックスの最初の 3 文字のみを使用します。
 * @return string 新しいテンポラリファイル名 (パスを含む) を返し、失敗した場合には <b>FALSE</b> を返します。
 */
function tempnam(string $dir, string $prefix): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * テンポラリファイルを作成する
 * @link http://php.net/manual/ja/function.tmpfile.php
 * @return resource ファイルのハンドルを返します。
 * これは、 <b>fopen</b>
 * により返されるハンドルと同じものです。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function tmpfile() {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイル全体を読み込んで配列に格納する
 * @link http://php.net/manual/ja/function.file.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * fopen wrappers が有効の場合、この関数のファイル名として
 * URL を使用することができます。ファイル名の指定方法に関する詳細は
 * <b>fopen</b> を参照ください。
 * には、さまざまなラッパーの機能やその使用法、
 * 提供される定義済み変数などの情報がまとめられています。
 * @param int $flags [optional] <p>
 * オプションのパラメータ <i>flags</i>
 * は、以下の定数のうちのひとつ、あるいは複数の組み合わせとなります。
 * <b>FILE_USE_INCLUDE_PATH</b>
 * include_path のファイルを探します。
 * @param resource $context [optional] <p>
 * <b>stream_context_create</b> 関数で作成したコンテキストリソース。
 * </p>
 * <p>
 * コンテキストのサポートは、
 * PHP 5.0.0 で追加されました。contexts の説明に関しては、
 * を参照してください。
 * </p>
 * @return array ファイルを配列に入れて返します。
 * 配列の各要素はファイルの各行に対応します。改行記号はついたままとなります。
 * 失敗すると <b>file</b> は <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <b>FILE_IGNORE_NEW_LINES</b> を指定しない限り、
 * 配列に取り込まれた各行は行末文字も含みます。
 * 行末文字を取り除きたい場合には <b>rtrim</b> を使用する必要があります。
 */
function file(string $filename, int $flags = 0, $context = null): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ファイルの内容を全て文字列に読み込む
 * @link http://php.net/manual/ja/function.file-get-contents.php
 * @param string $filename <p>
 * データを読み込みたいファイルの名前。
 * </p>
 * @param bool $use_include_path [optional] <p>
 * PHP 5 以降では、定数 <b>FILE_USE_INCLUDE_PATH</b>
 * を使用して インクルードパス
 * から探すことができます。
 * </p>
 * @param resource $context [optional] <p>
 * <b>stream_context_create</b> で作成したコンテキストリソース。
 * 独自のコンテキストを使用する必要がない場合は、このパラメータに
 * <b>NULL</b> を指定します。
 * </p>
 * @param int $offset [optional] <p>
 * 元のストリーム上で、読み込みを開始するオフセット位置。
 * 負のオフセットは、ストリームの末尾からのオフセットと解釈されます。
 * </p>
 * <p>
 * リモートファイルに対するシーク (<i>offset</i> 指定) はサポートしていません。
 * オフセットが小さい場合はリモートファイルでのシークがうまくいくこともありますが、
 * これはバッファリングされたストリーム上で動作しているだけのことです。
 * </p>
 * @param int $maxlen [optional] <p>
 * 読み込むデータの最大バイト数。
 * デフォルトは、ファイル終端に達するまで読み込みます。
 * このパラメータは、フィルタが処理した後のストリームに適用されることに注意しましょう。
 * </p>
 * @return string 読み込んだデータを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function file_get_contents(string $filename, bool $use_include_path = false, $context = null, int $offset = 0, int $maxlen = null): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 文字列をファイルに書き込む
 * @link http://php.net/manual/ja/function.file-put-contents.php
 * @param string $filename <p>
 * データを書き込むファイルへのパス。
 * </p>
 * @param mixed $data <p>
 * 書き込むデータ。文字列, 配列
 * もしくは ストリーム リソースのいずれかを指定可能です。
 * </p>
 * <p>
 * <i>data</i> が ストリーム リソースの場合は、
 * ストリームのバッファに残っている内容が指定したファイルにコピーされます。
 * これは、<b>stream_copy_to_stream</b> の挙動と似ています。
 * </p>
 * <p>
 * <i>data</i> に一次元の配列を指定することもできます。この場合は
 * file_put_contents($filename, implode('', $array))
 * と同じ意味になります。
 * </p>
 * @param int $flags [optional] <p>
 * <i>flags</i> の値は、以下のフラグを組み合わせたものとなります
 * 組み合わせる際には、論理 OR
 * (|) 演算子で連結します。
 * </p>
 * <p>
 * <table>
 * 使用できるフラグ
 * <tr valign="top">
 * <td>フラグ</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>
 * <b>FILE_USE_INCLUDE_PATH</b>
 * </td>
 * <td>
 * <i>filename</i> をインクルードディレクトリから探します。
 * 詳細な情報は include_path を参照ください。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>
 * <b>FILE_APPEND</b>
 * </td>
 * <td>
 * <i>filename</i> がすでに存在する場合に、
 * データをファイルに上書きするするのではなく追記します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>
 * <b>LOCK_EX</b>
 * </td>
 * <td>
 * 書き込み処理中に、ファイルに対する排他ロックを確保します。
 * つまり、<b>fopen</b> の呼び出しから
 * <b>fwrite</b> の呼び出しまでの間に
 * <b>flock</b> の呼び出しが発生するということです。
 * これは、モード "x" で
 * <b>fopen</b> を呼び出すことと同等ではありません。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param resource $context [optional] <p>
 * <b>stream_context_create</b>
 * で作成したコンテキストリソース。
 * </p>
 * @return int この関数はファイルに書き込まれたバイト数を返します。
 * あるいは失敗した場合には <b>FALSE</b> を返します。
 */
function file_put_contents(string $filename, $data, int $flags = 0, $context = null): int {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * select() システムコールと同等の操作を、
ストリームの配列に対して tv_sec と tv_usec で指定されたタイムアウト時間をもって行う
 * @link http://php.net/manual/ja/function.stream-select.php
 * @param array $read <p>
 * <i>read</i> 配列に列挙されたストリームに対しては、
 * 何らかのデータがそのストリーム内で読み出せる状態にあるかどうか
 * 監視が行われます
 * (より正確にいえば、ブロックしないで読み出せる状態かどうか -
 * 特にストリームが EOF に達したかどうか、です。このとき、
 * <b>fread</b> は長さ 0 の文字列を返します)。
 * </p>
 * @param array $write <p>
 * <i>write</i> 配列に列挙されたストリームに対しては、
 * ブロックしないで書き込みができるかどうかの監視が行われます。
 * </p>
 * @param array $except <p>
 * <i>except</i> 配列に列挙されたストリームに対しては、
 * 重大な例外（"帯域外の"）データが発生したかどうかの監視が行われます。
 * </p>
 * <p>
 * <b>stream_select</b> の終了時には、
 * どのストリームの状態が実際に変化したのかが分かるよう、
 * 配列 <i>read</i>、<i>write</i> および
 * <i>except</i> に変更が加えられます。
 * </p>
 * <b>stream_select</b> のすべてのパラメータに配列を
 * 渡す必要はありません。代わりに
 * そのままにしておくことも、空の配列を渡すことも、<b>NULL</b> を渡すことも
 * できます。このとき、それらの変数は参照渡しで渡されるため、
 * <b>stream_select</b> から戻った時点で変更されている
 * 可能性があることに注意してください。
 * @param int $tv_sec <p>
 * <i>tv_sec</i> と <i>tv_usec</i>
 * は、一体となって、timeout パラメータを表現します。
 * <i>tv_sec</i> は秒数を指定し、一方
 * <i>tv_usec</i> はマイクロ秒数を指定します。
 * timeout は、<b>stream_select</b>
 * の実行から戻るまでの時間の上限です。
 * <i>tv_sec</i> および <i>tv_usec</i>
 * の両方に 0 を指定すると
 * <b>stream_select</b> はデータを待たずに一瞬で戻ります。
 * これは現在のストリームの状態を示します。
 * </p>
 * <p>
 * <i>tv_sec</i> が <b>NULL</b> (タイムアウトなし) の場合、
 * <b>stream_select</b> はブロックしつづけ、調べている
 * ストリームのひとつでイベントが発生する（あるいはシグナルがシステム
 * コールを中断する）まで終了しません。
 * </p>
 * <p>
 * タイムアウト値に 0 を指定すると、ストリームの
 * 状態を即時に取得することが可能です。しかし、ループ内でタイムアウト
 * 0 を指定するのは良い考えではありません。
 * そうすると大量の CPU 時間を消費してしまいます。
 * </p>
 * <p>
 * タイムアウト値を数秒にするとかなりましになります。しかし、どうしても
 * 他のコードを同時に実行させながらチェックをする必要がある場合には、
 * 少なくとも 200000 マイクロ秒以上のタイムアウトを
 * 設定するようにしましょう。これであなたのスクリプトの CPU 使用量を
 * 抑えることができます。
 * </p>
 * <p>
 * タイムアウト値は、あくまでも経過時間の最大値であることを覚えておきましょう。
 * <b>stream_select</b> は、指定したストリームが使用可能に
 * なるとすぐに結果を返します。
 * </p>
 * @param int $tv_usec [optional] <p>
 * <i>tv_sec</i> の説明を参照ください。
 * </p>
 * @return int 成功した場合 <b>stream_select</b> は、変更された
 * 配列に何個のストリームリソースが格納されたかを示す数を返します。
 * もしタイムアウトの時間内に何も規定された事象が起こらなかった場合は
 * 0 になることもあります。エラーの際は <b>FALSE</b> を返し、警告を発生させます
 * （システムコールが別のシグナルによって中断された場合などに起こりえます）。
 */
function stream_select(array &$read, array &$write, array &$except, int $tv_sec, int $tv_usec = 0): int {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ストリームコンテキストを作成する
 * @link http://php.net/manual/ja/function.stream-context-create.php
 * @param array $options [optional] <p>
 * 次のような形式の連想配列からなる連想配列でなくてはなりません。
 * $arr['wrapper']['option'] = $value
 * 使用可能はラッパーやオプションの一覧は コンテキストオプション を参照ください。
 * </p>
 * <p>
 * デフォルトは空の配列です。
 * </p>
 * @param array $params [optional] <p>
 * $arr['parameter'] = $value
 * 形式の連想配列でなくてばなりません。
 * 標準のストリームパラメータについては
 * コンテキストパラメータ を参照ください。
 * </p>
 * @return resource ストリームコンテキストリソースを返します。
 */
function stream_context_create(array $options = null, array $params = null) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ストリーム / ラッパー / コンテキストのパラメータを設定する
 * @link http://php.net/manual/ja/function.stream-context-set-params.php
 * @param resource $stream_or_context <p>
 * パラメータを適用したいストリームあるいはコンテキスト。
 * </p>
 * @param array $params <p>
 * 設定するパラメータ。
 * </p>
 * <p>
 * <i>params</i> は、次のような形式の連想配列でなくてはなりません:
 * $params['paramname'] = "paramvalue";
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function stream_context_set_params($stream_or_context, array $params): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * コンテキストのパラメータを取得する
 * @link http://php.net/manual/ja/function.stream-context-get-params.php
 * @param resource $stream_or_context <p>
 * ストリームリソースあるいは
 * コンテキストリソース。
 * </p>
 * @return array すべてのコンテキストオプションおよびパラメータを含む連想配列を返します。
 */
function stream_context_get_params($stream_or_context): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ストリーム / ラッパー / コンテキストのオプションを設定する
 * @link http://php.net/manual/ja/function.stream-context-set-option.php
 * @param resource $stream_or_context <p>
 * オプションを適用したいストリームあるいはコンテキストリソース。
 * </p>
 * @param string $wrapper
 * @param string $option
 * @param mixed $value
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function stream_context_set_option($stream_or_context, string $wrapper, string $option, $value): bool {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ストリーム / ラッパー / コンテキストに設定されているオプションを取得する
 * @link http://php.net/manual/ja/function.stream-context-get-options.php
 * @param resource $stream_or_context <p>
 * オプションを取得したいストリームあるいはコンテキスト。
 * </p>
 * @return array オプションを連想配列で返します。
 */
function stream_context_get_options($stream_or_context): array {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * デフォルトのストリームコンテキストを取得する
 * @link http://php.net/manual/ja/function.stream-context-get-default.php
 * @param array $options [optional] <i>options</i> は、
 * $arr['wrapper']['option'] = $value
 * のような形式の、連想配列の連想配列である必要があります。
 * <p>
 * PHP 5.3.0 以降では、<b>stream_context_set_default</b>
 * 関数でデフォルトのコンテキストを設定することが可能です。
 * </p>
 * @return resource ストリームコンテキストリソースを返します。
 */
function stream_context_get_default(array $options = null) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * デフォルトのストリームコンテキストを設定する
 * @link http://php.net/manual/ja/function.stream-context-set-default.php
 * @param array $options <p>
 * デフォルトコンテキストに設定するオプション。
 * </p>
 * <p>
 * <i>options</i> は、
 * $arr['wrapper']['option'] = $value
 * のような形式の、連想配列の連想配列である必要があります。
 * </p>
 * @return resource デフォルトのストリームコンテキストを返します。
 */
function stream_context_set_default(array $options) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * フィルタをストリームに付加する
 * @link http://php.net/manual/ja/function.stream-filter-prepend.php
 * @param resource $stream <p>
 * 対象となるストリーム。
 * </p>
 * @param string $filtername <p>
 * フィルタ名。
 * </p>
 * @param int $read_write [optional] <p>
 * デフォルトでは、 <b>stream_filter_prepend</b> は
 * ストリームが読み込み用に開かれている場合は (つまり、オープンモードが
 * r あるいは + を伴う場合は)、
 * フィルタを リードフィルタチェイン に追加し、
 * ストリームが書き出し用に開かれている場合は(つまり、オープンモードが
 * w か aか、あるいは+ を伴う場合は)、
 * ライトフィルターチェィンにも追加します。
 * <b>STREAM_FILTER_READ</b>・
 * <b>STREAM_FILTER_WRITE</b>・
 * <b>STREAM_FILTER_ALL</b> を <i>read_write</i>パラメータに渡すことで、この挙動を変えることができます。
 * このパラメータを使った例については、
 * <b>stream_filter_append</b> を参照ください。
 * </p>
 * @param mixed $params [optional] <p>
 * このフィルタは、指定された <i>params</i> と共に、
 * リストの先頭に追加され、ストリームに対する操作の中で最初に呼び出されます。
 * フィルタをリストの末尾に加えたいときは、<b>stream_filter_append</b>
 * を使ってください。
 * </p>
 * @return resource 成功した場合にリソース、失敗した場合に <b>FALSE</b> を返します。
 * このリソースは、<b>stream_filter_remove</b>
 * をコールする際にこのフィルタインスタンスを参照するために使用可能です。
 * </p>
 * <p>
 * <b>FALSE</b> が返されるのは、<i>stream</i> がリソースではない場合や
 * <i>filtername</i> が見つからない場合です。
 */
function stream_filter_prepend($stream, string $filtername, int $read_write = null, $params = null) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ストリームにフィルタを付加する
 * @link http://php.net/manual/ja/function.stream-filter-append.php
 * @param resource $stream <p>
 * 対象となるストリーム。
 * </p>
 * @param string $filtername <p>
 * フィルタ名。
 * </p>
 * @param int $read_write [optional] <p>
 * デフォルトでは、 <b>stream_filter_append</b> は
 * ストリームが読み込み用に開かれている場合は (つまり、オープンモードが
 * r あるいは + を伴う場合は)、
 * フィルタを リードフィルタチェイン に追加し、
 * ストリームが書き出し用に開かれている場合は(つまり、オープンモードが
 * w か aか、あるいは+ を伴う場合は)、
 * ライトフィルターチェィンにも追加します。
 * <b>STREAM_FILTER_READ</b>・
 * <b>STREAM_FILTER_WRITE</b>・
 * <b>STREAM_FILTER_ALL</b> を <i>read_write</i>パラメータに渡すことで、この挙動を変えることができます。
 * </p>
 * @param mixed $params [optional] <p>
 * このフィルタは、指定された <i>params</i> と共に、
 * リストの末尾に追加され、ストリームに対する操作の中で最後に呼び出されます。
 * フィルタをリストの先頭に加えたいときは、<b>stream_filter_prepend</b>
 * を使ってください。
 * </p>
 * @return resource 成功した場合にリソース、失敗した場合に <b>FALSE</b> を返します。
 * このリソースは、<b>stream_filter_remove</b>
 * をコールする際にこのフィルタインスタンスを参照するために使用可能です。
 * </p>
 * <p>
 * <b>FALSE</b> が返されるのは、<i>stream</i> がリソースではない場合や
 * <i>filtername</i> が見つからない場合です。
 */
function stream_filter_append($stream, string $filtername, int $read_write = null, $params = null) {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * ストリームからフィルタを取り除く
 * @link http://php.net/manual/ja/function.stream-filter-remove.php
 * @param resource $stream_filter <p>
 * 削除するストリームフィルタ。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function stream_filter_remove($stream_filter): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * インターネットドメインまたは Unix ドメインのソケット接続を開く
 * @link http://php.net/manual/ja/function.stream-socket-client.php
 * @param string $remote_socket <p>
 * 接続するソケットのアドレス。
 * </p>
 * @param int $errno [optional] <p>
 * 接続に失敗した場合にシステムレベルのエラー番号が設定されます。
 * </p>
 * @param string $errstr [optional] <p>
 * 接続に失敗した場合にシステムレベルのエラーメッセージが設定されます。
 * </p>
 * @param float $timeout [optional] <p>
 * connect() システムコールがタイムアウトとなるまでの秒数。
 * このパラメータが適用されるのは、非同期通信を試みていない場合のみです。
 * <p>
 * ソケット上のデータの読み書きに関してタイムアウトを設定する必要がある場合は、
 * <b>stream_set_timeout</b> を使ってください。
 * <b>stream_socket_client</b> に渡される
 * <i>timeout</i> は、ソケットの接続時にのみ適用されます。
 * </p>
 * </p>
 * @param int $flags [optional] <p>
 * 接続設定フラグの任意の組み合わせを指定できるビットフィールドです。
 * 現在、接続設定フラグとして選択できる値は、
 * <b>STREAM_CLIENT_CONNECT</b>（デフォルト）、
 * <b>STREAM_CLIENT_ASYNC_CONNECT</b> と
 * <b>STREAM_CLIENT_PERSISTENT</b> のみです。
 * </p>
 * @param resource $context [optional] <p>
 * <b>stream_context_create</b> で作成した有効なコンテキストリソース。
 * </p>
 * @return resource 成功した場合に、
 * <b>fgets</b>, <b>fgetss</b>,
 * <b>fwrite</b>, <b>fclose</b>,
 * <b>feof</b> といった、ファイル関数と共に使うことのできるストリームリソースを返します。
 */
function stream_socket_client(string $remote_socket, int &$errno = null, string &$errstr = null, float $timeout = 'ini_get("default_socket_timeout")', int $flags = STREAM_CLIENT_CONNECT, $context = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * インターネットドメインまたは Unix ドメインのサーバーソケットを作成する
 * @link http://php.net/manual/ja/function.stream-socket-server.php
 * @param string $local_socket <p>
 * 作成されるソケットのタイプは、[トランスポート]://[ターゲット]
 * という形式の URL フォーマットによって指定された
 * トランスポートによって決定されます:
 * </p>
 * <p>
 * TCP や UDP といったインターネットドメインのソケット (<b>AF_INET</b>)
 * には、<i>remote_socket</i> パラメータの
 * ターゲット の部分は、ホスト名または IP アドレスと、
 * それに続くコロンで区切られたポート番号から構成されていなければなりません。
 * Unix ドメインのソケットの場合は、<i>ターゲット</i>
 * の部分は、ファイルシステムにおけるソケットのファイルを指定しなくては
 * いけません。
 * </p>
 * <p>
 * システムの種類によって、Unix ドメインのソケットが利用できない場合があります。
 * 利用できるトランスポートの種類は、<b>stream_get_transports</b>
 * によって知ることができます。
 * 組み込みのトランスポートのリストは、
 * を参照ください。
 * </p>
 * @param int $errno [optional] <p>
 * オプションの
 * <i>errno</i> と <i>errstr</i>
 * パラメータが存在するときは、そこにシステムレベルの
 * socket()、bind() および
 * listen() のコールにおいて発生した
 * 実際のシステムレベルのエラーを返します。
 * もし、<i>errno</i> に返された値が 0
 * で、かつ <b>FALSE</b> が返された場合、bind()
 * コールを行う前にエラーが発生したことを示しており、これは多くの場合
 * ソケットの初期化に失敗したことを示しています。
 * <i>errno</i> と <i>errstr</i>
 * パラメータは常に参照渡しとなることに留意してください。
 * </p>
 * @param string $errstr [optional] <p>
 * <i>errno</i> の説明を参照ください。
 * </p>
 * @param int $flags [optional] <p>
 * ソケット作成フラグの任意の組み合わせを指定できるビットフィールドです。
 * </p>
 * <p>
 * UDP ソケットに対しては、<b>STREAM_SERVER_BIND</b> を
 * <i>flags</i> パラメータとして使用する必要があります。
 * </p>
 * @param resource $context [optional]
 * @return resource 作成したストリーム、あるいはエラー時に <b>FALSE</b> を返します。
 */
function stream_socket_server(string $local_socket, int &$errno = null, string &$errstr = null, int $flags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN, $context = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * <b>stream_socket_server</b> で作られたソケットの接続を受け入れる
 * @link http://php.net/manual/ja/function.stream-socket-accept.php
 * @param resource $server_socket <p>
 * 接続元からの接続を受け付けるサーバーソケット。
 * </p>
 * @param float $timeout [optional] <p>
 * デフォルトのソケット接続待ちタイムアウトを上書きします。
 * 時間は秒単位で指定します。
 * </p>
 * @param string $peername [optional] <p>
 * 接続元のクライアントの名前 (アドレス) が含まれていて、
 * 選択したトランスポートで有効であった場合に、それを設定します。
 * </p>
 * <p>
 * 後で
 * <b>stream_socket_get_name</b>
 * を使用して指定することもできます。
 * </p>
 * @return resource 受け付けたソケット接続へのストリームを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function stream_socket_accept($server_socket, float $timeout = 'ini_get("default_socket_timeout")', string &$peername = null) {}

/**
 * (PHP 5, PHP 7)<br/>
 * ローカルまたはリモートのソケットの名前を取得する
 * @link http://php.net/manual/ja/function.stream-socket-get-name.php
 * @param resource $handle <p>
 * 名前を取得したいソケット。
 * </p>
 * @param bool $want_peer <p>
 * <b>TRUE</b> に設定するとリモートでのソケットの名前を返し、
 * <b>FALSE</b> に設定するとローカルでのソケットの名前を返します。
 * </p>
 * @return string ソケットの名前を返します。
 */
function stream_socket_get_name($handle, bool $want_peer): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 接続されているかどうかにかかわらず、ソケットからのデータを受信する
 * @link http://php.net/manual/ja/function.stream-socket-recvfrom.php
 * @param resource $socket <p>
 * リモートソケット。
 * </p>
 * @param int $length <p>
 * <i>socket</i> から受信するバイト数。
 * </p>
 * @param int $flags [optional] <p>
 * <i>flags</i> は以下の値の組み合わせです。
 * <table>
 * <i>flags</i> でとりうる値
 * <tr valign="top">
 * <td><b>STREAM_OOB</b></td>
 * <td>
 * OOB (out-of-band) データを処理します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>STREAM_PEEK</b></td>
 * <td>
 * ソケットからデータを取得しますが、バッファを消費しません。
 * <b>fread</b> あるいは
 * <b>stream_socket_recvfrom</b> を続けてコールした
 * 際には、同じデータが読み込まれます。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $address [optional] <p>
 * <i>address</i> が指定された場合、
 * そこにはリモートソケットのアドレスが保存されます。
 * </p>
 * @return string 読み込んだデータを文字列で返します。
 */
function stream_socket_recvfrom($socket, int $length, int $flags = 0, string &$address = null): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 接続されているかどうかにかかわらず、ソケットにデータを送信する
 * @link http://php.net/manual/ja/function.stream-socket-sendto.php
 * @param resource $socket <p>
 * <i>data</i> を送信するソケット。
 * </p>
 * @param string $data <p>
 * 送りたいデータ。
 * </p>
 * @param int $flags [optional] <p>
 * <i>flags</i> は以下の値の組み合わせです。
 * <table>
 * <i>flags</i> でとりうる値
 * <tr valign="top">
 * <td><b>STREAM_OOB</b></td>
 * <td>
 * OOB (out-of-band) データを処理します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $address [optional] <p>
 * <i>address</i> で別のアドレスが指定されていない限り、
 * ソケットストリームが作成された際のアドレスを使用します。
 * </p>
 * <p>
 * 指定する場合は、ドットで 4 つに区切った形式 (あるいは IPv6 形式) でなければなりません。
 * </p>
 * @return int 結果コードを整数値で返します。
 */
function stream_socket_sendto($socket, string $data, int $flags = 0, string $address = null): int {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 接続済みのソケットについて暗号化の on/off を切り替える
 * @link http://php.net/manual/ja/function.stream-socket-enable-crypto.php
 * @param resource $stream <p>
 * ストリームリソース。
 * </p>
 * @param bool $enable <p>
 * ストリームの暗号化を有効にするか無効にするか。
 * </p>
 * @param int $crypto_type [optional] <p>
 * ストリームの暗号化の設定。以下の方法が使用できます。
 * <b>STREAM_CRYPTO_METHOD_SSLv2_CLIENT</b>
 * @param resource $session_stream [optional] <p>
 * ストリームで <i>session_stream</i> からの設定を送信します。
 * </p>
 * @return mixed 成功した場合に <b>TRUE</b>、ネゴシエーションに失敗した場合に <b>FALSE</b>、
 * 十分なデータがないために再試行が必要な場合（非ブロックモード時のみ）
 * に 0 を返します。
 */
function stream_socket_enable_crypto($stream, bool $enable, int $crypto_type = null, $session_stream = null) {}

/**
 * (PHP 5 &gt;= 5.2.1, PHP 7)<br/>
 * 全二重接続を終了する
 * @link http://php.net/manual/ja/function.stream-socket-shutdown.php
 * @param resource $stream <p>
 * オープンしているストリーム (たとえば <b>stream_socket_client</b>
 * でオープンしたものなど)。
 * </p>
 * @param int $how <p>
 * 以下の定数のいずれか。<b>STREAM_SHUT_RD</b>
 * (それ以降の受信を無効にする)、<b>STREAM_SHUT_WR</b>
 * (それ以降の送信を無効にする) あるいは
 * <b>STREAM_SHUT_RDWR</b> (それ以降の送受信を無効にする)。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function stream_socket_shutdown($stream, int $how): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 接続された、区別できないソケットストリームの組を作成する
 * @link http://php.net/manual/ja/function.stream-socket-pair.php
 * @param int $domain <p>
 * 使用するプロトコルファミリー。<b>STREAM_PF_INET</b>、
 * <b>STREAM_PF_INET6</b> あるいは
 * <b>STREAM_PF_UNIX</b>
 * </p>
 * @param int $type <p>
 * 使用する接続の型。
 * <b>STREAM_SOCK_DGRAM</b>、
 * <b>STREAM_SOCK_RAW</b>、
 * <b>STREAM_SOCK_RDM</b>、
 * <b>STREAM_SOCK_SEQPACKET</b> あるいは
 * <b>STREAM_SOCK_STREAM</b>
 * </p>
 * @param int $protocol <p>
 * 使用するプロトコル。<b>STREAM_IPPROTO_ICMP</b>、
 * <b>STREAM_IPPROTO_IP</b>、
 * <b>STREAM_IPPROTO_RAW</b>、
 * <b>STREAM_IPPROTO_TCP</b> あるいは
 * <b>STREAM_IPPROTO_UDP</b>
 * </p>
 * @return array 成功した場合に 2 つのソケットリソースの配列、失敗した場合に <b>FALSE</b> を返します。
 */
function stream_socket_pair(int $domain, int $type, int $protocol): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * データをあるストリームから別のストリームにコピーする
 * @link http://php.net/manual/ja/function.stream-copy-to-stream.php
 * @param resource $source <p>
 * コピー元のストリーム。
 * </p>
 * @param resource $dest <p>
 * コピー先のストリーム。
 * </p>
 * @param int $maxlength [optional] <p>
 * コピーする最大バイト数。
 * </p>
 * @param int $offset [optional] <p>
 * コピーを開始する位置。
 * </p>
 * @return int コピーされたバイト数を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function stream_copy_to_stream($source, $dest, int $maxlength = -1, int $offset = 0): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 残りのストリームを文字列に読み込む
 * @link http://php.net/manual/ja/function.stream-get-contents.php
 * @param resource $handle <p>
 * ストリームリソース（例: <b>fopen</b> の返す値）。
 * </p>
 * @param int $maxlength [optional] <p>
 * 読み込む最大バイト数。デフォルトは -1
 * （バッファの残りのデータをすべて読み込む）。
 * </p>
 * @param int $offset [optional] <p>
 * 読み込みを開始する前に移動する位置。負の数を指定した場合は移動が発生せず、
 * 現在位置から読み込みを開始します。
 * </p>
 * @return string 文字列を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function stream_get_contents($handle, int $maxlength = -1, int $offset = -1): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * ストリームがロックをサポートしているかどうかを調べる
 * @link http://php.net/manual/ja/function.stream-supports-lock.php
 * @param resource $stream <p>
 * 調べたいストリーム。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function stream_supports_lock($stream): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルポインタから行を取得し、CSVフィールドを処理する
 * @link http://php.net/manual/ja/function.fgetcsv.php
 * @param resource $handle <p>
 * ファイルポインタは有効なものでなければならず、また
 * <b>fopen</b>,
 * <b>popen</b>, もしくは <b>fsockopen</b>
 * で正常にオープンされたファイルを指している必要があります。
 * </p>
 * @param int $length [optional] <p>
 * (行末文字を考慮して) CSV
 * ファイルにある最も長い行よりも大きい必要があります。
 * そうでない場合は、ひとつの行が <i>length</i>
 * 文字ずつのチャンクに分割されてしまいます。
 * ただし、フィールド囲いこみ文字の内部では、この分割は発生しません。
 * </p>
 * <p>
 * このパラメータを省略 (もしくは PHP 5.1.0 以降で 0 を設定) すると、
 * 最大行長は制限されません。この場合、若干動作が遅くなります。
 * </p>
 * @param string $delimiter [optional] <p>
 * オプションの <i>delimiter</i> パラメータで、フィールドのデリミタ (1 文字のみ) を設定します。
 * </p>
 * @param string $enclosure [optional] <p>
 * オプションの <i>enclosure</i> パラメータで、フィールド囲いこみ文字 (1 文字のみ) を設定します。
 * </p>
 * @param string $escape [optional] <p>
 * オプションの <i>escape</i> パラメータで、エスケープ文字 (1 文字のみ) を設定します。
 * </p>
 * @return array 読み込んだフィールドの内容を含む数値添字配列を返します。
 * </p>
 * <p>
 * CSV ファイルの空行は null
 * フィールドを一つだけ含む配列として返され、
 * エラーにはなりません。
 * </p>
 * マッキントッシュコンピュータ上で作成されたファイルを読み込む際に、
 * PHP が行末を認識できないという問題が発生した場合、
 * 実行時の設定オプションauto_detect_line_endings を有効にする必要が生じるかもしれません。
 * <p>
 * <b>fgetcsv</b> は、無効な <i>handle</i>
 * を受け取った場合に <b>NULL</b> を返します。
 * また、ファイルの終端に達した場合を含めたその他のエラー時には <b>FALSE</b> を返します。
 */
function fgetcsv($handle, int $length = 0, string $delimiter = ",", string $enclosure = '"', string $escape = "\\"): array {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 行を CSV 形式にフォーマットし、ファイルポインタに書き込む
 * @link http://php.net/manual/ja/function.fputcsv.php
 * @param resource $handle ファイルポインタは、有効なファイルポインタである必要があり、
 * <b>fopen</b> または <b>fsockopen</b> で正常にオープンされた
 * （そしてまだ <b>fclose</b> でクローズされていない）
 * ファイルを指している必要があります。</p>
 * @param array $fields <p>
 * 値の配列。
 * </p>
 * @param string $delimiter [optional] <p>
 * オプションの <i>delimiter</i> はフィールド区切り文字
 * (一文字だけ) を指定します。
 * </p>
 * @param string $enclosure [optional] <p>
 * オプションの <i>enclosure</i> はフィールドを囲む文字
 * (一文字だけ) を指定します。
 * </p>
 * @param string $escape_char [optional] <p>
 * オプションの <i>escape_char</i> は、エスケープ文字
 * (一文字だけ) を指定します。
 * </p>
 * @return int 書き込んだ文字列の長さを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function fputcsv($handle, array $fields, string $delimiter = ",", string $enclosure = '"', string $escape_char = "\\"): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 汎用のファイルロックを行う
 * @link http://php.net/manual/ja/function.flock.php
 * @param resource $handle <b>fopen</b>
 * を使用して作成したファイルシステムポインタリソース。</p>
 * @param int $operation <p>
 * <i>operation</i> は以下のいずれかとなります。
 * 共有ロック(読み手)とするには
 * <b>LOCK_SH</b>
 * をセットします。
 * @param int $wouldblock [optional] <p>
 * ロックがブロックされた (errno が EWOULDBLOCK となった)
 * 場合に、オプションの 3 番目の引数に 1 が設定されます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function flock($handle, int $operation, int &$wouldblock = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイル上のすべてのメタタグ情報を配列に展開する
 * @link http://php.net/manual/ja/function.get-meta-tags.php
 * @param string $filename <p>
 * HTML ファイルへのパスを表す文字列。
 * ローカルファイルのほか URL も指定できます。
 * </p>
 * <p>
 * <b>get_meta_tags</b> が何をパースするのか
 * <pre>
 * </pre>
 * (改行コードに注意してください。PHP は入力をパースするためにネイティブ関数を使用するため、
 * Macintosh のファイルは Unix 上では動作しません)。
 * </p>
 * @param bool $use_include_path [optional] <p>
 * <i>use_include_path</i> を <b>TRUE</b> に指定すると、
 * include_path
 * ディレクティブの内容にしたがってファイルを探します。
 * これはローカルファイルにのみ有効で、URL の場合は使用できません。
 * </p>
 * @return array パースされたメタタグを含む配列を返します。
 * </p>
 * <p>
 * name 属性の値が配列のキーとなります。content 属性の値が配列の要素となります。
 * 標準の配列関数を利用することでこれらの値に簡単にアクセスすることができます。
 * name 属性で特別な文字が使われている場合は '_' で代用されます。
 * それ以外は小文字に変換されます。もしも同じ名前のメタタグがある場合には
 * 最後のもののみが返されます。
 */
function get_meta_tags(string $filename, bool $use_include_path = false): array {}

/**
 * (PHP 5 &gt;= 5.3.3, PHP 7)<br/>
 * 指定したストリームのファイル読み込みバッファリングを有効にする
 * @link http://php.net/manual/ja/function.stream-set-read-buffer.php
 * @param resource $stream <p>
 * ファイルポインタ。
 * </p>
 * @param int $buffer <p>
 * バッファのバイト数。
 * <i>buffer</i> が 0 であれば、読み込み操作はバッファされなくなります。
 * これにより、<b>fread</b> による読み込み操作が完了するまでは
 * 他のプロセスが同じ入力ストリームから読み込み操作をできないことが保証されます。
 * </p>
 * @return int 成功時に 0 を、要求通りに設定できなかった場合はそれ以外の値を返します。
 */
function stream_set_read_buffer($stream, int $buffer): int {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 指定されたストリームのファイル書き込みバッファリングを有効にする
 * @link http://php.net/manual/ja/function.stream-set-write-buffer.php
 * @param resource $stream <p>
 * ファイルポインタ。
 * </p>
 * @param int $buffer <p>
 * バッファのバイト数。
 * <i>buffer</i> が 0 であれば、書き込み操作はバッファされなくなります。
 * これにより、<b>fwrite</b> による書き込み操作が、他の
 * プロセスが同じ出力ストリームに対して何らかの書き込み操作を行う前に
 * 完了することが保証されます。
 * </p>
 * @return int 成功時に 0 を、要求通りに設定できなかった場合はそれ以外の値を返します。
 */
function stream_set_write_buffer($stream, int $buffer): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>stream_set_write_buffer</b> のエイリアス
 * @link http://php.net/manual/ja/function.set-file-buffer.php
 * @param $fp
 * @param $buffer
 */
function set_file_buffer($fp, $buffer) {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * ストリームのチャンクサイズを設定する
 * @link http://php.net/manual/ja/function.stream-set-chunk-size.php
 * @param resource $fp <p>
 * 対象のストリーム。
 * </p>
 * @param int $chunk_size <p>
 * 設定したいチャンクサイズ。
 * </p>
 * @return int 成功した場合に、変更前の設定値を返します。
 * </p>
 * <p>
 * <i>chunk_size</i> が 1 より小さいか、あるいは
 * <b>PHP_INT_MAX</b> より大きい場合には <b>FALSE</b> を返します。
 */
function stream_set_chunk_size($fp, int $chunk_size): int {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ストリームのブロックモードを有効にする / 解除する
 * @link http://php.net/manual/ja/function.stream-set-blocking.php
 * @param resource $stream <p>
 * ストリーム。
 * </p>
 * @param bool $mode <p>
 * <i>mode</i> が <b>FALSE</b> の時、ストリームは
 * 非ブロックモードに切り替えられ、<b>TRUE</b> の場合は、
 * ブロックモードに切り替えられます。このモードの違いは、
 * <b>fgets</b> や <b>fread</b>
 * といった、ストリームからデータを読む関数に影響します。
 * 非ブロックモードにおいては <b>fgets</b> を呼び出すと
 * どんな場合でもただちに呼び出し元に戻りますが、ブロックモードの場合では、
 * ストリームがデータを読み出せる状態になるまで待ちつづけます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function stream_set_blocking($stream, bool $mode): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>stream_set_blocking</b> のエイリアス
 * @link http://php.net/manual/ja/function.socket-set-blocking.php
 * @param $socket
 * @param $mode
 */
function socket_set_blocking($socket, $mode) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ヘッダーあるいはメタデータをストリームまたはファイルポインタから取得する
 * @link http://php.net/manual/ja/function.stream-get-meta-data.php
 * @param resource $stream <p>
 * ストリームは <b>fopen</b> か、
 * <b>fsockopen</b> か、<b>pfsockopen</b> で
 * 作成されたいずれのものも指定できます。
 * </p>
 * @return array 結果の配列は次のような項目を含みます。
 * </p>
 * <p>
 * timed_out (bool) - 最後に
 * <b>fread</b> または <b>fgets</b>
 * でデータを待っている時にタイムアウトした場合 <b>TRUE</b> を返します。
 * </p>
 * <p>
 * blocked (bool) -
 * ストリームがブロック I/O モードの場合に <b>TRUE</b> となります。
 * <b>stream_set_blocking</b> を参照ください。
 * </p>
 * <p>
 * eof (bool) - ストリームが EOF に
 * 達した時 <b>TRUE</b> となります。
 * ストリームがソケットベースの場合、このメンバーは、
 * たとえ unread_bytes が 0 でなくても
 * <b>TRUE</b> になる場合があることに注意してください。
 * まだデータがあるかどうかを調べるには、このパラメータではなく、
 * <b>feof</b> を使ってください。
 * </p>
 * <p>
 * unread_bytes (int) - PHP の
 * 内部バッファにあるデータのバイト数。
 * </p>
 * スクリプト中でこの値を使用してはいけません。
 * <p>
 * stream_type (string) -
 * ストリームの下層にある実装を表すラベル
 * </p>
 * <p>
 * wrapper_type (string) -
 * ストリームを覆うプロトコルラッパーを表すラベル。
 * ラッパーについては を参照ください。
 * </p>
 * <p>
 * wrapper_data (mixed) -
 * ストリームに付随しているラッパーの固有のデータ。
 * ラッパーとその固有の情報については、
 * を参照ください。
 * </p>
 * <p>
 * mode (string) - このストリームに要求される
 * アクセスモード（fopen()
 * リファレンスの表 1 を参照ください）。
 * </p>
 * <p>
 * seekable (bool) - 現在のストリーム内で
 * 移動が可能かどうか。
 * </p>
 * <p>
 * uri (string) - このストリームに関連付けられた
 * URI / ファイル名。
 */
function stream_get_meta_data($stream): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * 指定されたデリミタの位置までのデータを一行分としてストリームから読み込む
 * @link http://php.net/manual/ja/function.stream-get-line.php
 * @param resource $handle <p>
 * 有効なファイルハンドル。
 * </p>
 * @param int $length <p>
 * ハンドルから読み込むバイト数。
 * </p>
 * @param string $ending [optional] <p>
 * オプションのデリミタ文字列。
 * </p>
 * @return string 最大 <i>length</i> バイトの、
 * <i>handle</i> で指定されたリソースから読み込んだデータを返します。
 * </p>
 * <p>
 * エラーが発生した際には、<b>FALSE</b> を返します。
 */
function stream_get_line($handle, int $length, string $ending = null): string {}

/**
 * (PHP 4 &gt;= 4.3.2, PHP 5, PHP 7)<br/>
 * PHP のクラスとして実装された URL ラッパーを登録する
 * @link http://php.net/manual/ja/function.stream-wrapper-register.php
 * @param string $protocol <p>
 * 登録したいラッパー名。
 * </p>
 * @param string $classname <p>
 * <i>protocol</i> を実装したクラス名。
 * </p>
 * @param int $flags [optional] <p>
 * <i>protocol</i> が URL プロトコルである場合は
 * <b>STREAM_IS_URL</b> を設定しなければなりません。
 * デフォルトは 0 で、ローカルストリームを意味します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <b>stream_wrapper_register</b> は、
 * <i>protocol</i> というハンドラが既にある場合、
 * <b>FALSE</b> を返します。
 */
function stream_wrapper_register(string $protocol, string $classname, int $flags = null): bool {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * <b>stream_wrapper_register</b> のエイリアス
 * @link http://php.net/manual/ja/function.stream-register-wrapper.php
 * @param $protocol
 * @param $classname
 * @param $flags [optional]
 */
function stream_register_wrapper($protocol, $classname, $flags) {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * URL ラッパーの登録を解除する
 * @link http://php.net/manual/ja/function.stream-wrapper-unregister.php
 * @param string $protocol
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function stream_wrapper_unregister(string $protocol): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 事前に登録を解除された組み込みラッパーを復元する
 * @link http://php.net/manual/ja/function.stream-wrapper-restore.php
 * @param string $protocol
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function stream_wrapper_restore(string $protocol): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 登録されているストリームのラッパーのリストを取得する
 * @link http://php.net/manual/ja/function.stream-get-wrappers.php
 * @return array スクリプトを走らせているシステム上で使うことのできるすべてのストリーム
 * ラッパーの名前を配列の形で返します。
 */
function stream_get_wrappers(): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * 登録されたソケットのトランスポートの一覧を取得する
 * @link http://php.net/manual/ja/function.stream-get-transports.php
 * @return array ソケットのトランスポート名の配列を返します。
 */
function stream_get_transports(): array {}

/**
 * (PHP 5 &gt;= 5.3.2, PHP 7)<br/>
 * インクルードパスに対してファイル名を解決する
 * @link http://php.net/manual/ja/function.stream-resolve-include-path.php
 * @param string $filename <p>
 * 解決するファイル名。
 * </p>
 * @param resource $context [optional] <p>
 * <b>stream_context_create</b> で作成したコンテキストリソース。
 * </p>
 * @return string 解決したファイル名を含む文字列を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function stream_resolve_include_path(string $filename, $context = null): string {}

/**
 * (PHP 5 &gt;= 5.2.4, PHP 7)<br/>
 * ローカルストリームかどうかを調べる
 * @link http://php.net/manual/ja/function.stream-is-local.php
 * @param mixed $stream_or_url <p>
 * 調べたいストリームリソースあるいは URL。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function stream_is_local($stream_or_url): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * HTTP リクエストに対するレスポンス内で
サーバーによって送出された全てのヘッダを取得する
 * @link http://php.net/manual/ja/function.get-headers.php
 * @param string $url <p>
 * 対象となる URL。
 * </p>
 * @param int $format [optional] <p>
 * オプションの <i>format</i> パラメータが
 * ゼロ以外にセットされた場合、<b>get_headers</b>
 * はレスポンスをパースし、配列のキーをセットします。
 * </p>
 * @return array 数値添字配列あるいは連想配列でヘッダを返します。
 * 失敗した場合は <b>FALSE</b> を返します。
 */
function get_headers(string $url, int $format = 0): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ストリームにタイムアウトを設定する
 * @link http://php.net/manual/ja/function.stream-set-timeout.php
 * @param resource $stream <p>
 * 対象となるストリーム。
 * </p>
 * @param int $seconds <p>
 * 設定したいタイムアウトの秒数部分。
 * </p>
 * @param int $microseconds [optional] <p>
 * 設定したいタイムアウトのマイクロ秒数部分。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function stream_set_timeout($stream, int $seconds, int $microseconds = 0): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>stream_set_timeout</b> のエイリアス
 * @link http://php.net/manual/ja/function.socket-set-timeout.php
 * @param $stream
 * @param $seconds
 * @param $microseconds [optional]
 */
function socket_set_timeout($stream, $seconds, $microseconds) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>stream_get_meta_data</b> のエイリアス
 * @link http://php.net/manual/ja/function.socket-get-status.php
 * @param $fp
 */
function socket_get_status($fp) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 正規化された絶対パス名を返す
 * @link http://php.net/manual/ja/function.realpath.php
 * @param string $path <p>
 * 調べたいパス。
 * </p>
 * <p>
 * path の指定は必須ですが、空白や <b>NULL</b> を指定することもできます。
 * その場合はカレントディレクトリを指定したものとみなします。
 * </p>
 * @return string 成功した場合は、正規化された絶対パス名を返します。
 * 返されるパスはシンボリックリンクや「/./」「/../」要素を含みません。
 * パスの末尾の区切り文字 (\ や / など) は削除されます。
 * </p>
 * <p>
 * <b>realpath</b> は、
 * たとえばファイルが存在しないなどの失敗時に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * 指定した階層にあるすべてのディレクトリに対して、
 * 実行中のスクリプトからの実行権限が必要です。もし権限がなければ
 * <b>realpath</b> は <b>FALSE</b> を返します。
 * </p>
 * <p>
 * 大文字小文字を区別しないファイルシステムの場合は、<b>realpath</b>
 * が大文字小文字をどちらかにそろえるかもしれないし、そろえないかもしれません。
 */
function realpath(string $path): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ファイル名がパターンにマッチするか調べる
 * @link http://php.net/manual/ja/function.fnmatch.php
 * @param string $pattern <p>
 * シェルのワイルドカードパターン。
 * </p>
 * @param string $string <p>
 * 調べたい文字列。この機能は特にファイル名のマッチに便利ですが、
 * 通常の文字列に関しても使用できます。
 * </p>
 * <p>
 * 一般的なユーザーにとって、シェルパターンやあるいは少なくとも
 * '?'と'*'によるワイルドカードのほうが
 * 慣れていると思われます。そのため、
 * <b>preg_match</b>
 * の代わりに <b>fnmatch</b>
 * をフロントエンドの検索表現として使うことは、
 * プログラマではないユーザーにとってより便利でしょう。
 * </p>
 * @param int $flags [optional] <p>
 * <i>flags</i> の値は、以下のフラグを
 * 論理 OR (|) 演算子
 * で連結した任意の組み合わせです。
 * <table>
 * <b>fnmatch</b> で使えるフラグ
 * <tr valign="top">
 * <td><i>フラグ</i></td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>FNM_NOESCAPE</b></td>
 * <td>
 * バックスラッシュのエスケープを無効にする。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>FNM_PATHNAME</b></td>
 * <td>
 * 文字列内のスラッシュは、指定したパターン内のスラッシュにのみマッチする。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>FNM_PERIOD</b></td>
 * <td>
 * 文字列の先頭のピリオドは、指定したパターン内のピリオドにマッチしなければならない。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>FNM_CASEFOLD</b></td>
 * <td>
 * 大文字小文字を区別しないマッチ。GNU 拡張の一部。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return bool マッチした場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function fnmatch(string $pattern, string $string, int $flags = 0): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * インターネット接続もしくは Unix ドメインソケット接続をオープンする
 * @link http://php.net/manual/ja/function.fsockopen.php
 * @param string $hostname <p>
 * OpenSSL サポートが インストール
 * されている場合、
 * <i>hostname</i> の前に ssl:// または
 * tls:// を付加することにより、TCP/IP
 * 経由でリモートホストに接続する際に SSL または
 * TLS クライアント接続を使用することができます。
 * </p>
 * @param int $port [optional] <p>
 * ポート番号。
 * unix:// のようにポートを使わないトランスポートの場合は、
 * -1 で無視してスキップさせることができます。
 * </p>
 * @param int $errno [optional] <p>
 * 指定した場合は、システムコール connect()
 * で発生したエラーのエラー番号が格納されます。
 * </p>
 * <p>
 * <i>errno</i> は 0 なのに関数が
 * <b>FALSE</b> を返す場合、connect()
 * をコールする前にエラーを発生したことを示します。
 * この場合、おそらくはソケットの初期化に原因があります。
 * </p>
 * @param string $errstr [optional] <p>
 * エラーメッセージを表す文字列。
 * </p>
 * @param float $timeout [optional] <p>
 * 接続タイムアウト秒数。
 * </p>
 * <p>
 * ソケット経由でデータを読み書きする際のタイムアウトを設定する必要がある場合、
 * <b>fsockopen</b> の <i>timeout</i> パラメータは、
 * ソケットに接続する間にだけ適用されるため、
 * <b>socket_set_timeout</b> を使用してください。
 * </p>
 * @return resource <b>fsockopen</b>は、ファイルポインタを返します。
 * このファイルポインタは、
 * (<b>fgets</b>, <b>fgetss</b>,
 * <b>fputs</b>, <b>fclose</b>,
 * <b>feof</b> のような)
 * 他のファイル関数で使用可能です。
 * 失敗した場合は <b>FALSE</b> を返します。
 */
function fsockopen(string $hostname, int $port = -1, int &$errno = null, string &$errstr = null, float $timeout = 'ini_get("default_socket_timeout")') {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 持続的な Internet または Unix ドメインソケット接続をオープンする
 * @link http://php.net/manual/ja/function.pfsockopen.php
 * @param string $hostname
 * @param int $port [optional]
 * @param int $errno [optional]
 * @param string $errstr [optional]
 * @param float $timeout [optional]
 * @return resource
 */
function pfsockopen(string $hostname, int $port = -1, int &$errno = null, string &$errstr = null, float $timeout = 'ini_get("default_socket_timeout")') {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * データをバイナリ文字列にパックする
 * @link http://php.net/manual/ja/function.pack.php
 * @param string $format <p>
 * フォーマット文字列は、
 * フォーマットコードの後にオプションの反復指定用引数が続く形式と
 * なっています。反復指定用引数として整数値、または入力データの最後まで
 * 反復を意味する * のどちらかを指定することができます。
 * a, A, h, H の場合、
 * 反復数はそのデータ引数が取得する文字の数を指定します。反復数が @ の場合、
 * 次のデータを置く場所の絶対位置を表します。その他の場合、反復数は
 * データ引数が使われる数を指定し、結果のバイナリ文字列にパックされます。
 * </p>
 * <p>
 * 現在、実装されているものを以下に示します。
 * <table>
 * <b>pack</b> の書式文字
 * <tr valign="top">
 * <td>コード</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>a</td>
 * <td>NUL で埋めた文字列</td>
 * </tr>
 * <tr valign="top">
 * <td>A</td>
 * <td>空白で埋めた文字列</td></tr>
 * <tr valign="top">
 * <td>h</td>
 * <td>十六進文字列、下位ニブルが先</td></tr>
 * <tr valign="top">
 * <td>H</td>
 * <td>十六進文字列、上位ニブルが先</td></tr>
 * <tr valign="top"><td>c</td><td>signed char</td></tr>
 * <tr valign="top">
 * <td>C</td>
 * <td>unsigned char</td></tr>
 * <tr valign="top">
 * <td>s</td>
 * <td>signed short (常に 16 ビット、マシンのバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>S</td>
 * <td>unsigned short (常に 16 ビット、マシンのバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>n</td>
 * <td>unsigned short (常に 16 ビット、ビッグエンディアンバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>v</td>
 * <td>unsigned short (常に 16 ビット、リトルエンディアンバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>i</td>
 * <td>signed integer (サイズおよびバイトオーダーはマシン依存)</td>
 * </tr>
 * <tr valign="top">
 * <td>I</td>
 * <td>unsigned integer (サイズおよびバイトオーダーはマシン依存)</td>
 * </tr>
 * <tr valign="top">
 * <td>l</td>
 * <td>signed long (常に 32 ビット、マシンのバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>L</td>
 * <td>unsigned long (常に 32 ビット、マシンのバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>N</td>
 * <td>unsigned long (常に 32 ビット、ビッグエンディアンバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>V</td>
 * <td>unsigned long (常に 32 ビット、リトルエンディアンバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>q</td>
 * <td>signed long long (常に 64 ビット、マシンのバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>Q</td>
 * <td>unsigned long long (常に 64 ビット、マシンのバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>J</td>
 * <td>unsigned long long (常に 64 ビット、ビッグエンディアンバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>P</td>
 * <td>unsigned long long (常に 64 ビット、リトルエンディアンバイトオーダー)</td>
 * </tr>
 * <tr valign="top">
 * <td>f</td>
 * <td>float (サイズおよび表現はマシン依存)</td>
 * </tr>
 * <tr valign="top">
 * <td>d</td>
 * <td>double (サイズおよび表現はマシン依存)</td>
 * </tr>
 * <tr valign="top">
 * <td>x</td>
 * <td>NUL バイト</td>
 * </tr>
 * <tr valign="top">
 * <td>X</td>
 * <td>1 バイト戻る</td>
 * </tr>
 * <tr valign="top">
 * <td>Z</td>
 * <td>NUL 埋め文字列 (PHP 5.5 以降)</td>
 * </tr>
 * <tr valign="top">
 * <td>@</td>
 * <td>絶対位置まで NUL で埋める</td>
 * </tr>
 * </table>
 * </p>
 * @param mixed $args [optional]
 * @param mixed $_ [optional]
 * @return string バイナリ文字列を含むデータを返します。
 */
function pack(string $format, $args = null, $_ = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * バイナリ文字列からデータを切り出す
 * @link http://php.net/manual/ja/function.unpack.php
 * @param string $format <p>
 * 書式コードの説明は <b>pack</b> を参照ください。
 * </p>
 * @param string $data <p>
 * パックされたデータ。
 * </p>
 * @return array バイナリ文字列を切り出した要素を含む連想配列を返します。
 */
function unpack(string $format, string $data): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユーザーのブラウザの機能を取得する
 * @link http://php.net/manual/ja/function.get-browser.php
 * @param string $user_agent [optional] <p>
 * 処理するユーザーエージェント。デフォルトでは、HTTP の User-Agent
 * ヘッダの内容を使用します。しかし、このパラメータを渡すことでこれを変更する
 * (別のブラウザの情報を取得する) ことが可能です。
 * </p>
 * <p>
 * このパラメータを処理しないようにするには <b>NULL</b> 値を渡します。
 * </p>
 * @param bool $return_array [optional] <p>
 * <b>TRUE</b> を指定すると、この関数はオブジェクトでなく配列を返します。
 * </p>
 * @return mixed 情報は、オブジェクトあるいは配列形式で返されます。
 * たとえばブラウザのメジャーバージョン番号、マイナーバージョン番号や
 * ID 文字列といったさまざまなデータが含まれています。また、
 * フレームや JavaScript、クッキーといった機能についての
 * <b>TRUE</b>/<b>FALSE</b> 値も含んでいます。
 * </p>
 * <p>
 * cookies の値は、単にそのブラウザがクッキーを扱う機能を
 * 有していることを示すだけであり、ユーザーがクッキーを受け入れる設定に
 * しているかどうかを表すものではありません。それをチェックする唯一の方法は、
 * いったん <b>setcookie</b> でクッキーを設定してからリロードし、
 * その値を調べることです。
 */
function get_browser(string $user_agent = null, bool $return_array = false) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の一方向のハッシュ化を行う
 * @link http://php.net/manual/ja/function.crypt.php
 * @param string $str <p>
 * ハッシュしたい文字列。
 * </p>
 * <p>
 * <b>CRYPT_BLOWFISH</b> を使うと、
 * <i>str</i> が最大 72 文字までに切り詰められます。
 * </p>
 * @param string $salt [optional] <p>
 * ハッシュのもととなる salt 文字列。省略した場合の挙動は
 * アルゴリズムの実装によって決まるので、予期せぬ結果となることがあり得ます。
 * </p>
 * @return string ハッシュした文字列を返します。
 * 失敗した場合は、salt とは異なることが保証されている 13 文字未満の文字列を返します。
 */
function crypt(string $str, string $salt = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ディレクトリハンドルをオープンする
 * @link http://php.net/manual/ja/function.opendir.php
 * @param string $path <p>
 * オープンするディレクトリのパス。
 * </p>
 * @param resource $context [optional] <p>
 * <i>context</i> パラメータの詳細については
 * マニュアルのストリーム
 * を参照ください。
 * </p>
 * @return resource 成功した場合にディレクトリハンドルの resource 、
 * 失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <i>path</i> が有効なディレクトリでないかまたは権限が
 * 制限されているかファイルシステムのエラーによりディレクトリが
 * オープンできない場合、<b>opendir</b> は <b>FALSE</b> を返し、
 * E_WARNING エラーが発行されます。
 * <b>opendir</b> のこのエラー出力は、
 * 関数名の前に '@'
 * を付けることにより抑制できます。
 */
function opendir(string $path, $context = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ディレクトリハンドルをクローズする
 * @link http://php.net/manual/ja/function.closedir.php
 * @param resource $dir_handle [optional] <p>
 * <b>opendir</b> が事前にオープンした
 * ディレクトリハンドルリソース。
 * ディレクトリハンドルを指定しなかった場合は、
 * <b>opendir</b> が最後にオープンしたものを使用します。
 * </p>
 * @return void
 */
function closedir($dir_handle = null): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ディレクトリを変更する
 * @link http://php.net/manual/ja/function.chdir.php
 * @param string $directory <p>
 * 新しいカレントディレクトリ
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function chdir(string $directory): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * カレントのワーキングディレクトリを取得する
 * @link http://php.net/manual/ja/function.getcwd.php
 * @return string 成功時はカレントのワーキングディレクトリを返します。
 * 失敗時は <b>FALSE</b> を返します。
 * </p>
 * <p>
 * いくつかの UNIX の派生系では、親ディレクトリが読み込めない、
 * もしくは検索モードが設定されている場合、カレントディレクトリが可能だとしても
 * <b>getcwd</b> は <b>FALSE</b> を返します。
 * モードと権限についての詳細は、<b>chmod</b> を参照ください。
 */
function getcwd(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ディレクトリハンドルを元に戻す
 * @link http://php.net/manual/ja/function.rewinddir.php
 * @param resource $dir_handle [optional] <p>
 * <b>opendir</b> が事前にオープンした
 * ディレクトリハンドルリソース。
 * ディレクトリハンドルを指定しなかった場合は、
 * <b>opendir</b> が最後にオープンしたものを使用します。
 * </p>
 * @return void
 */
function rewinddir($dir_handle = null): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ディレクトリハンドルからエントリを読み込む
 * @link http://php.net/manual/ja/function.readdir.php
 * @param resource $dir_handle [optional] <p>
 * <b>opendir</b> が事前にオープンした
 * ディレクトリハンドルリソース。
 * ディレクトリハンドルを指定しなかった場合は、
 * <b>opendir</b> が最後にオープンしたものを使用します。
 * </p>
 * @return string 成功した場合にエントリ名、失敗した場合に <b>FALSE</b> を返します。
 */
function readdir($dir_handle = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ディレクトリクラスのインスタンスを返す
 * @link http://php.net/manual/ja/function.dir.php
 * @param string $directory <p>
 * オープンするディレクトリ。
 * </p>
 * @param resource $context [optional] <p>
 * コンテキストのサポートは、
 * PHP 5.0.0 で追加されました。contexts の説明に関しては、
 * を参照してください。
 * </p>
 * @return Directory <b>Directory</b> のインスタンスを返します。
 * パラメータが間違っている場合は <b>NULL</b>、それ以外のエラーの場合は
 * <b>FALSE</b> を返します。
 */
function dir(string $directory, $context = null): Directory {}

/**
 * (PHP 5, PHP 7)<br/>
 * 指定されたパスのファイルとディレクトリのリストを取得する
 * @link http://php.net/manual/ja/function.scandir.php
 * @param string $directory <p>
 * 調べるディレクトリ。
 * </p>
 * @param int $sorting_order [optional] <p>
 * デフォルトでは、ソート順はアルファベット昇順です。
 * オプションの <i>sorting_order</i>
 * に <b>SCANDIR_SORT_DESCENDING</b> を設定した場合、
 * ソート順はアルファベット降順になります。
 * <b>SCANDIR_SORT_NONE</b> を設定すると、
 * 結果をソートせずに返します。
 * </p>
 * @param resource $context [optional] <p>
 * <i>context</i> パラメータの説明については、
 * マニュアルのストリーム
 * を参照ください。
 * </p>
 * @return array 成功した場合にファイル名の配列、失敗した場合に <b>FALSE</b> を返します。
 * <i>directory</i> がディレクトリではない場合は、
 * <b>FALSE</b> を返し、<b>E_WARNING</b> レベルのエラーを
 * 発行します。
 */
function scandir(string $directory, int $sorting_order = SCANDIR_SORT_ASCENDING, $context = null): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * パターンにマッチするパス名を探す
 * @link http://php.net/manual/ja/function.glob.php
 * @param string $pattern <p>
 * パターン。チルダの展開やパラメータ置換は行いません。
 * </p>
 * @param int $flags [optional] <p>
 * 有効なフラグは次のとおりです。
 * <b>GLOB_MARK</b> - 各ディレクトリにスラッシュを追加します
 * @return array マッチするファイル／ディレクトリを含む配列を返します。
 * マッチするファイルがなかった場合には空の配列、
 * そして失敗した場合には <b>FALSE</b> を返します。
 * </p>
 * <p>
 * システムによっては、何もマッチしなかった場合とエラーが発生した場合を区別できないものもあります。
 */
function glob(string $pattern, int $flags = 0): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルの最終アクセス時刻を取得する
 * @link http://php.net/manual/ja/function.fileatime.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return int ファイルの最終アクセス時刻を返し、失敗した場合に <b>FALSE</b> を返します。
 * 時間は Unix タイムスタンプとして返されます。
 */
function fileatime(string $filename): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルの inode 変更時刻を取得する
 * @link http://php.net/manual/ja/function.filectime.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return int ファイルの最終更新時刻を返し、失敗した場合に <b>FALSE</b> を返します。
 * 時間は Unix タイムスタンプとして返されます。
 */
function filectime(string $filename): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルのグループを取得する
 * @link http://php.net/manual/ja/function.filegroup.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return int ファイルの所有者のグループ ID を返し、エラーの場合は <b>FALSE</b> を返します。
 * グループ ID は数値で返されます。グループ名に変換するには
 * <b>posix_getgrgid</b> を使用してください。
 * 失敗すると <b>FALSE</b> を返します。
 */
function filegroup(string $filename): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルの inode を取得する
 * @link http://php.net/manual/ja/function.fileinode.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return int ファイルの inode 番号を返し、失敗した場合に <b>FALSE</b> を返します。
 */
function fileinode(string $filename): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルの更新時刻を取得する
 * @link http://php.net/manual/ja/function.filemtime.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return int ファイルの最終更新時刻を返し、失敗した場合に <b>FALSE</b> を返します
 * 時間は Unix タイムスタンプとして返されます。
 * この関数の結果は <b>date</b> 等で使用できます。
 */
function filemtime(string $filename): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルの所有者を取得する
 * @link http://php.net/manual/ja/function.fileowner.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return int ファイルの所有者のユーザー ID を返し、失敗した場合に <b>FALSE</b> を返します。
 * ユーザー ID は数値で返されます。ユーザー名に変換するには
 * <b>posix_getpwuid</b> を使用してください。
 */
function fileowner(string $filename): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルのパーミッションを取得する
 * @link http://php.net/manual/ja/function.fileperms.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return int ファイルのパーミッションを数値モードで返します。このモードの下位ビットは
 * <b>chmod</b> に渡すのと同じ形式です。
 * しかし、大半のプラットフォームでは、それだけではなく
 * <i>filename</i> のファイル形式に関する情報も含まれます。
 * 以下の例で示すのは、ファイルのパーミッションやファイル形式を
 * POSIX システム (Linux や Mac OS X など) で調べる方法です。
 * </p>
 * <p>
 * ローカルファイルの場合、その返り値は C ライブラリ関数 <b>stat</b>
 * が返す構造体の st_mode メンバーの値となります。
 * どのビットがセットされるかはプラットフォームによって異なるので、
 * パーミッション部分以外のビットをパースしたい場合は各プラットフォームのドキュメントを参照することをおすすめします。
 */
function fileperms(string $filename): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルのサイズを取得する
 * @link http://php.net/manual/ja/function.filesize.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return int ファイルのサイズを返し、エラーの場合は <b>FALSE</b> を返します
 * (また <b>E_WARNING</b> レベルのエラーを発生させます) 。
 */
function filesize(string $filename): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルタイプを取得する
 * @link http://php.net/manual/ja/function.filetype.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return string ファイルのタイプを返します。返される値は fifo、char、dir、
 * block、link、file、socket および unknown のいずれかです。
 * </p>
 * <p>
 * エラーが発生すると <b>FALSE</b> を返します。
 * また <b>filetype</b> は stat コールに失敗したり、
 * 未知のファイルタイプであったりした場合に
 * <b>E_NOTICE</b> メッセージを発行します。
 */
function filetype(string $filename): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルまたはディレクトリが存在するかどうか調べる
 * @link http://php.net/manual/ja/function.file-exists.php
 * @param string $filename <p>
 * ファイルあるいはディレクトリへのパス。
 * </p>
 * <p>
 * Windows 上でネットワーク共有上のファイルを調べるには、
 * //computername/share/filename または
 * \\computername\share\filename のように指定してください。
 * </p>
 * @return bool <i>filename</i> で指定したファイルまたはディレクトリが存在すれば
 * <b>TRUE</b> を返し、そうでなければ <b>FALSE</b> を返します。
 * </p>
 * <p>
 * この関数は、シンボリックリンクの指す先のファイルが存在しない場合は
 * <b>FALSE</b> を返します。
 * </p>
 * <p>
 * この関数は セーフモード
 * の制限のためファイルにアクセスできない場合 <b>FALSE</b> を返します。
 * しかし safe_mode_include_dir
 * で指定されたディレクトリに存在する場合は
 * include
 * することができます。
 * </p>
 * <p>
 * チェックは、実効ユーザーではなく実ユーザーの UID/GID
 * で行います。
 */
function file_exists(string $filename): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルが書き込み可能かどうかを調べる
 * @link http://php.net/manual/ja/function.is-writable.php
 * @param string $filename <p>
 * 調べたいファイル名。
 * </p>
 * @return bool <i>filename</i> が存在して書き込み可能な場合に
 * <b>TRUE</b> を返します。
 */
function is_writable(string $filename): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>is_writable</b> のエイリアス
 * @link http://php.net/manual/ja/function.is-writeable.php
 * @param $filename
 */
function is_writeable($filename) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルが存在し、読み込み可能であるかどうかを知る
 * @link http://php.net/manual/ja/function.is-readable.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return bool <i>filename</i>
 * で指定したファイルあるいはディレクトリが存在し、
 * それが読み込み可能であれば <b>TRUE</b>、それ以外の場合に
 * <b>FALSE</b> を返します。
 */
function is_readable(string $filename): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルが実行可能かどうかを調べる
 * @link http://php.net/manual/ja/function.is-executable.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return bool ファイルが存在し、かつそれが実行可能な場合に <b>TRUE</b>、
 * エラー時に <b>FALSE</b> を返します。
 */
function is_executable(string $filename): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 通常ファイルかどうかを調べる
 * @link http://php.net/manual/ja/function.is-file.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return bool ファイルが存在し、かつそれが通常のファイルである場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function is_file(string $filename): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルがディレクトリかどうかを調べる
 * @link http://php.net/manual/ja/function.is-dir.php
 * @param string $filename <p>
 * ファイルへのパス。<i>filename</i>
 * が相対パスの場合は、現在の作業ディレクトリからの相対パスとして処理します。
 * <i>filename</i> がシンボリックリンクあるいはハードリンクの場合は、
 * リンク先を解決して処理します。セーフモード あるいは
 * open_basedir を有効にすると、
 * さらに制限がかかるでしょう。
 * </p>
 * @return bool ファイルが存在して、かつそれがディレクトリであれば
 * <b>TRUE</b>、それ以外の場合は <b>FALSE</b> を返します。
 */
function is_dir(string $filename): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルがシンボリックリンクかどうかを調べる
 * @link http://php.net/manual/ja/function.is-link.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return bool filename が存在し、かつシンボリックリンクであれば <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function is_link(string $filename): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルに関する情報を取得する
 * @link http://php.net/manual/ja/function.stat.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @return array <table>
 * <b>stat</b> と <b>fstat</b>
 * の結果のフォーマット
 * <tr valign="top">
 * <td>数値</td>
 * <td>連想配列</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td>dev</td>
 * <td>デバイス番号</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>ino</td>
 * <td>inode 番号(*)</td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>mode</td>
 * <td>inode プロテクトモード</td>
 * </tr>
 * <tr valign="top">
 * <td>3</td>
 * <td>nlink</td>
 * <td>リンク数</td>
 * </tr>
 * <tr valign="top">
 * <td>4</td>
 * <td>uid</td>
 * <td>所有者のユーザー ID(*)</td>
 * </tr>
 * <tr valign="top">
 * <td>5</td>
 * <td>gid</td>
 * <td>所有者のグループ ID(*)</td>
 * </tr>
 * <tr valign="top">
 * <td>6</td>
 * <td>rdev</td>
 * <td>inode デバイス の場合、デバイスの種類</td>
 * </tr>
 * <tr valign="top">
 * <td>7</td>
 * <td>size</td>
 * <td>バイト単位のサイズ</td>
 * </tr>
 * <tr valign="top">
 * <td>8</td>
 * <td>atime</td>
 * <td>最終アクセス時間 (Unix タイムスタンプ)</td>
 * </tr>
 * <tr valign="top">
 * <td>9</td>
 * <td>mtime</td>
 * <td>最終修正時間 (Unix タイムスタンプ)</td>
 * </tr>
 * <tr valign="top">
 * <td>10</td>
 * <td>ctime</td>
 * <td>最終 inode 変更時間 (Unix タイムスタンプ)</td>
 * </tr>
 * <tr valign="top">
 * <td>11</td>
 * <td>blksize</td>
 * <td>ファイル IO のブロックサイズ(**)</td>
 * </tr>
 * <tr valign="top">
 * <td>12</td>
 * <td>blocks</td>
 * <td>512 バイトのブロックの確保数(**)</td>
 * </tr>
 * </table>
 * * Windows では常に 0 となります。
 * </p>
 * <p>
 * ** st_blksize タイプをサポートするシステムでのみ有効です。
 * その他のシステム(例えば Windows)では -1 を返します。
 * </p>
 * <p>
 * <b>stat</b> はエラーの場合 <b>FALSE</b> を返します。
 */
function stat(string $filename): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルあるいはシンボリックリンクの情報を取得する
 * @link http://php.net/manual/ja/function.lstat.php
 * @param string $filename <p>
 * ファイルあるいはシンボリックリンクへのパス。
 * </p>
 * @return array <b>lstat</b> が返す配列の内容については
 * <b>stat</b> のマニュアルをご覧ください。
 * この関数の動作は <b>stat</b> 関数と同じですが、
 * パラメータ <i>filename</i>
 * がシンボリックリンクであった場合に、
 * シンボリック先のファイルのステータスではなく、
 * シンボリックリンクのステータスが返されるところが異なります。
 */
function lstat(string $filename): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルの所有者を変更する
 * @link http://php.net/manual/ja/function.chown.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @param mixed $user <p>
 * ユーザー名あるいはユーザー番号。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function chown(string $filename, $user): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルのグループを変更する
 * @link http://php.net/manual/ja/function.chgrp.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @param mixed $group <p>
 * グループ名あるいはグループ番号。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function chgrp(string $filename, $group): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
 * シンボリックリンクの所有者を変更する
 * @link http://php.net/manual/ja/function.lchown.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @param mixed $user <p>
 * ユーザー名あるいはユーザー番号。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function lchown(string $filename, $user): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
 * シンボリックリンクのグループ所有権を変更する
 * @link http://php.net/manual/ja/function.lchgrp.php
 * @param string $filename <p>
 * シンボリックリンクへのパス。
 * </p>
 * @param mixed $group <p>
 * グループ名あるいはグループ番号。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function lchgrp(string $filename, $group): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルのモードを変更する
 * @link http://php.net/manual/ja/function.chmod.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @param int $mode <p>
 * <i>mode</i>
 * は自動的には 8 進数と見なされないので注意してください。
 * 意図した操作を行うには、<i>mode</i>
 * の前にゼロ(0)を付ける必要があります。
 * "g+w" のような文字列は正常に動作しません。
 * </p>
 * <p>
 * <code>
 * chmod("/somedir/somefile", 755); // 10 進数; おそらく間違い
 * chmod("/somedir/somefile", "u+rwx,go+rx"); // 文字列; 正しくない
 * chmod("/somedir/somefile", 0755); // 8 進数; 正しいモードの値
 * </code>
 * </p>
 * <p>
 * <i>mode</i> 引数は 3 つの 8 進法による数値で構成され、
 * 所有者自身、所有者が属するグループ、その他のユーザーの順で
 * アクセス制限を設定します。一つ一つの数字はそのターゲットに対し
 * 許可を与えます。1 は実行権限、2 はファイルに対する書き込み権限、
 * 4 はファイルに対する読み込み権限を与えます。
 * 必要な権限にあわせ数値を加算してください。
 * 許可モードに関する詳細は Unix システムの
 * 「man 1 chmod」や「man 2 chmod」をご覧ください。
 * </p>
 * <p>
 * <code>
 * // 所有者に読み込み、書き込みの権限を与え、その他には何も許可しない。
 * chmod("/somedir/somefile", 0600);
 * // 所有者に読み込み、書き込みの権限を与え、その他には読み込みだけ許可する。
 * chmod("/somedir/somefile", 0644);
 * // 所有者に全ての権限を与え、その他には読み込みと実行を許可する。
 * chmod("/somedir/somefile", 0755);
 * // 所有者に全ての権限を与え、所有者が属するグループに読み込みと実行を許可する。
 * chmod("/somedir/somefile", 0750);
 * </code>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function chmod(string $filename, int $mode): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルの最終アクセス時刻および最終更新日をセットする
 * @link http://php.net/manual/ja/function.touch.php
 * @param string $filename <p>
 * 処理したいファイルの名前。
 * </p>
 * @param int $time [optional] <p>
 * 設定する時刻。
 * <i>time</i> を省略した場合は、
 * 現在時刻を使用します。
 * </p>
 * @param int $atime [optional] <p>
 * 指定されたファイルの最終アクセス時刻が存在する場合は、
 * その値が <i>atime</i> にセットされます。
 * 存在しない場合は <i>time</i> に渡した値となります。
 * どちらも存在しない場合は、現在のシステム時刻を使います。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function touch(string $filename, int $time = 'time()', int $atime = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルのステータスのキャッシュをクリアする
 * @link http://php.net/manual/ja/function.clearstatcache.php
 * @param bool $clear_realpath_cache [optional] <p>
 * realpath キャッシュをクリアするか否か。
 * </p>
 * @param string $filename [optional] <p>
 * realpath キャッシュと stat キャッシュを特定のファイル名だけに対してクリアする。
 * <i>clear_realpath_cache</i> が <b>TRUE</b>
 * の場合にのみ使用。
 * </p>
 * @return void 値を返しません。
 */
function clearstatcache(bool $clear_realpath_cache = false, string $filename = null): void {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ファイルシステムあるいはディスクパーティションの全体サイズを返す
 * @link http://php.net/manual/ja/function.disk-total-space.php
 * @param string $directory <p>
 * ファイルシステムのディレクトリあるいはディスクパーティション。
 * </p>
 * @return float 総バイト数を float 型で返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function disk_total_space(string $directory): float {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ファイルシステムあるいはディスクパーティション上で利用可能な領域を返す
 * @link http://php.net/manual/ja/function.disk-free-space.php
 * @param string $directory <p>
 * ファイルシステムのディレクトリあるいはディスクパーティション。
 * </p>
 * <p>
 * ディレクトリのかわりにファイル名を指定したときの挙動は未定義です。
 * OS や PHP のバージョンによって結果は異なります。
 * </p>
 * @return float 利用可能なバイト数を float 型で返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function disk_free_space(string $directory): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>disk_free_space</b> のエイリアス
 * @link http://php.net/manual/ja/function.diskfreespace.php
 * @param $path
 */
function diskfreespace($path) {}

/**
 * (PHP 5 &gt;= 5.3.2, PHP 7)<br/>
 * realpath キャッシュサイズを取得
 * @link http://php.net/manual/ja/function.realpath-cache-size.php
 * @return int realpath キャッシュが使用中のメモリ量を返します。
 */
function realpath_cache_size(): int {}

/**
 * (PHP 5 &gt;= 5.3.2, PHP 7)<br/>
 * realpath キャッシュ・エントリーを取得
 * @link http://php.net/manual/ja/function.realpath-cache-get.php
 * @return array realpath キャッシュ・エントリーの配列を返します。キーは元のパス・エントリーで、
 * 値はデータ項目の配列です。それには、解決されたパス、失効日、キャッシュに保持されるその他のオプションを含みます。
 */
function realpath_cache_get(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * メールを送信する
 * @link http://php.net/manual/ja/function.mail.php
 * @param string $to <p>
 * メールの受信者。
 * </p>
 * <p>
 * RFC 2822 を満たす書式でなければ
 * なりません。例えば以下のようなものです。
 * user@example.com
 * user@example.com, anotheruser@example.com
 * User &lt;user@example.com&gt;
 * User &lt;user@example.com&gt;, Another User &lt;anotheruser@example.com&gt;
 * </p>
 * @param string $subject <p>
 * 送信するメールの表題。
 * </p>
 * <p>
 * 表題は RFC 2047
 * を満たすものでなければなりません。
 * </p>
 * @param string $message <p>
 * 送信するメッセージ。
 * </p>
 * <p>
 * 改行コードは CRLF (\r\n) となります。各行の長さは 70 文字を超えては
 * いけません。
 * </p>
 * <p>
 * （Windows のみ）PHP が SMTP サーバーと直接通信をする際、ピリオドから
 * 始まる行は無視されます。これを防ぐには、行頭のピリオドを
 * ピリオド 2 つに置き換えてください。
 * <code>
 * $text = str_replace("\n.", "\n..", $text);
 * </code>
 * </p>
 * @param string $additional_headers [optional] <p>
 * メールヘッダの最後に挿入される文字列。
 * </p>
 * <p>
 * 通常、これは追加のヘッダ（From、Cc、Bcc）のために用いられます。
 * 複数のヘッダを追加する場合は CRLF（\r\n）で区切ります。
 * 外部からのデータを用いてヘッダを組み立てる際には、想定外のヘッダが注入されることを防ぐための処理が必要です。
 * </p>
 * <p>
 * <i>additional_headers</i> は、メールヘッダインジェクション対策を行っていません。
 * したがって、指定したヘッダが安全なものであり、ヘッダ以外のものを含まないようにするのはユーザー側の役目となります。
 * 複数の改行文字を置くことでメール本文を始めたりしてはいけません。
 * </p>
 * <p>
 * メールを送信する際には、必ず
 * From ヘッダが含まれていなければなりません。
 * <i>additional_headers</i> パラメータで指定するか、
 * あるいは <i>php.ini</i> にデフォルト値を指定します。
 * </p>
 * <p>
 * 指定しなかった場合は、以下のようなエラーメッセージが返ります
 * Warning: mail(): "sendmail_from" not
 * set in php.ini or custom "From:" header missing 。
 * Windows では、From ヘッダを設定すると
 * Return-Path も設定されます。
 * </p>
 * <p>
 * メッセージが受信されなかった場合には、LF（\n）のみを使ってみてください。
 * Unix の MTA の中には、自動的に LF を CRLF に変換してしまう
 * もの (有名なところでは、qmail など)
 * があります（もし CRLF を利用していた場合、CR が重複してしまいます）。
 * ただし、これは最後の手段です。というのも、これは
 * RFC 2822 に違反しているからです。
 * </p>
 * @param string $additional_parameters [optional] <p>
 * パラメータ <i>additional_parameters</i> は、
 * 追加のフラグをコマンドラインオプションとしてメール送信プログラムに渡す際に使用可能です。
 * メール送信プログラムは、設定オプション
 * sendmail_path により設定されます。例えば、
 * sendmail を使用する際に -f オプションを使って
 * エンベロープの sender アドレスを設定する際に使用できます。
 * </p>
 * <p>
 * このパラメータはコマンドの実行を防止するために内部的に <b>escapeshellcmd</b>
 * によってエスケープされます。 <b>escapeshellcmd</b> はコマンドの実行を防止しますが、
 * 別のパラメータを追加することは許してしまいます。セキュリティ上の理由から、
 * シェルコマンドへの望ましくないパラメータの追加を避けるために、
 * ユーザーはこのパラメータを適切に処理することが推奨されます。
 * </p>
 * <p>
 * <b>escapeshellcmd</b> が自動的に適用されるため、
 * インターネット RFC でメールアドレスとして許可さているいくつかの文字を使用することができません。
 * <b>mail</b> はそうした文字を許可しないため、プログラム中でそうした文字の使用が必須である場合、
 * メール送信の代替手段（フレームワークやライブラリの使用など）が推奨されます。
 * </p>
 * <p>
 * この方法でエンベロープの sender ヘッダ（-f）を設定する際は、
 * 'X-Warning' ヘッダが付加されないように Web サーバーの実行ユーザーを
 * sendmail 設定に追加しておく必要があるかもしれません。
 * sendmail を利用している場合、これは /etc/mail/trusted-users
 * で設定します。
 * </p>
 * @return bool メール送信が受け入れられた場合に <b>TRUE</b> 、それ以外の場合に <b>FALSE</b>
 * を返します。
 * </p>
 * <p>
 * メールの配送が受け入れられたかどうかが基準であることに注意しましょう。
 * メールが実際にあて先に届いたかどうかでは「ありません」。
 */
function mail(string $to, string $subject, string $message, string $additional_headers = null, string $additional_parameters = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * EZMLM で必要なハッシュ値を計算する
 * @link http://php.net/manual/ja/function.ezmlm-hash.php
 * @param string $addr <p>
 * ハッシュ値を計算する email アドレス。
 * </p>
 * @return int <i>addr</i> のハッシュ値を返します。
 */
function ezmlm_hash(string $addr): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * システムのロガーへの接続をオープンする
 * @link http://php.net/manual/ja/function.openlog.php
 * @param string $ident <p>
 * 文字列 <i>ident</i> が、各メッセージに追加されます。
 * </p>
 * @param int $option <p>
 * <i>option</i> 引数は、
 * ログメッセージの生成時に使用されるロギング用オプションを指定します。
 * <table>
 * <b>openlog</b> のオプション
 * <tr valign="top">
 * <td>定数</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_CONS</b></td>
 * <td>
 * システムロガーにデータが送信される間にエラーが発生した場合、
 * 直接、システムコンソールに書き込まれます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_NDELAY</b></td>
 * <td>
 * 直ちにロガーへの接続をオープンします。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_ODELAY</b></td>
 * <td>
 * (デフォルト) 最初のメッセージがロギングされるまで接続のオープンを遅延します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_PERROR</b></td>
 * <td>標準エラー出力にもログメッセージを出力します。</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_PID</b></td>
 * <td>各メッセージに PID も含めます。</td>
 * </tr>
 * </table>
 * このオプションを一つまたは複数設定することが可能です。
 * 複数のオプションを使用する場合、その論理和を指定します。
 * つまり、直ちに接続をオープンし、コンソールに書き込み、
 * 各メッセージに PID を含めるには、
 * LOG_CONS | LOG_NDELAY | LOG_PID
 * とします。
 * </p>
 * @param int $facility <p>
 * 引数 <i>facility</i> には、
 * ロギングを行う際のメッセージ型を指定します。これにより、
 * (使用するシステムの syslog の設定に関して) 異なった facility
 * を有するメッセージをどのように処理するかを指定できるようになります。
 * <table>
 * <b>openlog</b> の機能
 * <tr valign="top">
 * <td>定数</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_AUTH</b></td>
 * <td>
 * セキュリティ/認証用メッセージ
 * (定数 <b>LOG_AUTHPRIV</b>
 * が定義されているシステムでは、代わりにそれを使用してください)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_AUTHPRIV</b></td>
 * <td>セキュリティ/認証 メッセージ (プライベート)</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_CRON</b></td>
 * <td>クロックデーモン (cron や at)</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_DAEMON</b></td>
 * <td>他のシステムデーモン</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_KERN</b></td>
 * <td>カーネルメッセージ</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_LOCAL0</b> ... <b>LOG_LOCAL7</b></td>
 * <td>ローカルでの使用のために確保されているもので、Windows では使用できません</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_LPR</b></td>
 * <td>ラインプリンタサブシステム</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_MAIL</b></td>
 * <td>メールサブシステム</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_NEWS</b></td>
 * <td>USENET ニュース サブシステム</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_SYSLOG</b></td>
 * <td>syslogd で内部的に生成されたメッセージ</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_USER</b></td>
 * <td>一般的なユーザーレベルのメッセージ</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_UUCP</b></td>
 * <td>UUCP サブシステム</td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * Windows 環境で使用できるのは LOG_USER だけです。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openlog(string $ident, int $option, int $facility): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * システムログのメッセージを生成する
 * @link http://php.net/manual/ja/function.syslog.php
 * @param int $priority <p>
 * <i>priority</i> は、容易さ (facility)
 * とレベル (level) の組み合わせです。以下の値が使用できます。
 * <table>
 * <b>syslog</b> の優先順位 (降順)
 * <tr valign="top">
 * <td>定数</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_EMERG</b></td>
 * <td>システムは使用不可</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_ALERT</b></td>
 * <td>アクションを直ちにおこす必要がある</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_CRIT</b></td>
 * <td>致命的な条件</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_ERR</b></td>
 * <td>エラーを発生する条件</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_WARNING</b></td>
 * <td>警告を発生する条件</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_NOTICE</b></td>
 * <td>通常の動作だが、特徴的な条件</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_INFO</b></td>
 * <td>情報を与えるメッセージ</td>
 * </tr>
 * <tr valign="top">
 * <td><b>LOG_DEBUG</b></td>
 * <td>デバッグ用のメッセージ</td>
 * </tr>
 * </table>
 * </p>
 * @param string $message <p>
 * 残りの引数は送信するメッセージです。ただし、文字 %m
 * は、errno
 * の値に対応するエラーメッセージ文字列 (strerror) に置換されます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function syslog(int $priority, string $message): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * システムログへの接続を閉じる
 * @link http://php.net/manual/ja/function.closelog.php
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function closelog(): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 複合線形合同法
 * @link http://php.net/manual/ja/function.lcg-value.php
 * @return float (0, 1) の範囲の疑似乱数を、浮動小数点数で返します。
 */
function lcg_value(): float {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列の metaphone キーを計算する
 * @link http://php.net/manual/ja/function.metaphone.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @param int $phonemes [optional] <p>
 * このパラメータは、返される metaphone キーの長さを最大
 * <i>phonemes</i> 文字までに制限します。
 * デフォルト値の 0 は、無制限であることを意味します。
 * </p>
 * @return string metaphone キーを文字列で返します。失敗した場合に <b>FALSE</b> を返します。
 */
function metaphone(string $str, int $phonemes = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 出力のバッファリングを有効にする
 * @link http://php.net/manual/ja/function.ob-start.php
 * @param callable $output_callback [optional] <p>
 * オプションの引数 <i>output_callback</i>
 * 関数を指定することが可能です。この関数は、パラメータとして文字列をとり、
 * 文字列を返します。このコールバック関数は、
 * 出力バッファがフラッシュ (送信) あるいは消去
 * (<b>ob_flush</b>, <b>ob_clean</b>
 * あるいは同等の関数で) された場合、
 * またはリクエストの最後にブラウザに出力をフラッシュする際にコールされます。
 * <i>output_callback</i> がコールされた際に、
 * この関数は出力バッファの内容をパラメータとして受け取ります。このコールバック関数は、
 * 新規の出力バッファを実際に出力される結果として返す必要があり、
 * この結果はブラウザに送信されます。
 * <i>output_callback</i> がコール可能な関数ではない場合は
 * <b>FALSE</b> を返します。
 * コールバックのシグネチャは、次のとおりです。
 * </p>
 * <p>
 * string<b>handler</b>
 * <b>string<i>buffer</i></b>
 * <b>int<i>phase</i></b>
 * <i>buffer</i>
 * 出力バッファの内容。
 * @param int $chunk_size [optional] <p>
 * オプションのパラメータ <i>chunk_size</i> が渡された場合、
 * バッファの長さが <i>chunk_size</i> バイトを超えるたびに、
 * 出力の後でバッファがフラッシュされます。
 * デフォルト値は 0 で、これは出力関数がコールされるのが
 * 出力バッファが閉じたときだけであることを意味します。
 * </p>
 * <p>
 * PHP 5.4.0 より前のバージョンでは、1 にも特別な意味があり、
 * これを指定するとチャンクサイズが 4096 バイトになります。
 * </p>
 * @param int $flags [optional] <p>
 * <i>flags</i> はビットマスクで、出力バッファ上でどんな操作ができるのかを制御します。
 * デフォルトでは、出力バッファのクリーン、フラッシュ、削除がすべてできるようになっています。
 * これは、明示的に
 * <b>PHP_OUTPUT_HANDLER_CLEANABLE</b> |
 * <b>PHP_OUTPUT_HANDLER_FLUSHABLE</b> |
 * <b>PHP_OUTPUT_HANDLER_REMOVABLE</b> と設定したり、あるいは短縮形で
 * <b>PHP_OUTPUT_HANDLER_STDFLAGS</b> と設定したりするのと同じです。
 * </p>
 * <p>
 * 各フラグが、次の表のように関数へのアクセスを制御します。
 * <tr valign="top">
 * <td>定数</td>
 * <td>関数</td>
 * </tr>
 * <tr valign="top">
 * <td><b>PHP_OUTPUT_HANDLER_CLEANABLE</b></td>
 * <td>
 * <b>ob_clean</b>、
 * <b>ob_end_clean</b> および
 * <b>ob_get_clean</b>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>PHP_OUTPUT_HANDLER_FLUSHABLE</b></td>
 * <td>
 * <b>ob_end_flush</b>、
 * <b>ob_flush</b> および
 * <b>ob_get_flush</b>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>PHP_OUTPUT_HANDLER_REMOVABLE</b></td>
 * <td>
 * <b>ob_end_clean</b>、
 * <b>ob_end_flush</b> および
 * <b>ob_get_flush</b>
 * </td>
 * </tr>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ob_start(callable $output_callback = null, int $chunk_size = 0, int $flags = PHP_OUTPUT_HANDLER_STDFLAGS): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 出力バッファをフラッシュ(送信)する
 * @link http://php.net/manual/ja/function.ob-flush.php
 * @return void 値を返しません。
 */
function ob_flush(): void {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 出力バッファをクリア(消去)する
 * @link http://php.net/manual/ja/function.ob-clean.php
 * @return void 値を返しません。
 */
function ob_clean(): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 出力用バッファをフラッシュ(送信)し、出力のバッファリングをオフにする
 * @link http://php.net/manual/ja/function.ob-end-flush.php
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * 失敗する原因は、まず、アクティブなバッファ以外に対してこの
 * 関数をコールしたか、あるいは何らかの理由により
 * バッファを消去することができなかった場合です（特殊なバッファ等）。
 */
function ob_end_flush(): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 出力用バッファをクリア(消去)し、出力のバッファリングをオフにする
 * @link http://php.net/manual/ja/function.ob-end-clean.php
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * 失敗する原因は、まず、アクティブなバッファ以外に対して
 * この関数をコールしたか、あるいは何らかの理由により
 * バッファを消去することができなかった場合です（特殊なバッファ等）。
 */
function ob_end_clean(): bool {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 出力バッファをフラッシュし、その内容を文字列として返した後で出力バッファリングを終了する
 * @link http://php.net/manual/ja/function.ob-get-flush.php
 * @return string 出力バッファを返します。バッファリングが開始されていない場合は
 * <b>FALSE</b> を返します。
 */
function ob_get_flush(): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 現在のバッファの内容を取得し、出力バッファを削除する
 * @link http://php.net/manual/ja/function.ob-get-clean.php
 * @return string 出力バッファの内容を返した後で出力のバッファリングを終了します。
 * 出力バッファリングが開始されていない場合は <b>FALSE</b> が返されます。
 */
function ob_get_clean(): string {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 出力バッファの長さを返す
 * @link http://php.net/manual/ja/function.ob-get-length.php
 * @return int 出力バッファの内容の長さをバイト単位で返します。
 * 出力のバッファリングがアクティブでない場合には、<b>FALSE</b> を返します。
 */
function ob_get_length(): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 出力バッファリング機構のネストレベルを返す
 * @link http://php.net/manual/ja/function.ob-get-level.php
 * @return int 出力バッファリングハンドラのネストレベルを返します。
 * バッファリングがアクティブでない場合はゼロを返します。
 */
function ob_get_level(): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 出力バッファのステータスを取得する
 * @link http://php.net/manual/ja/function.ob-get-status.php
 * @param bool $full_status [optional] <p>
 * <b>TRUE</b> を指定すると、すべてのアクティブな出力バッファを返します。
 * <b>FALSE</b> を指定した場合、あるいは省略した場合は、
 * トップレベルの出力バッファのみを返します。
 * </p>
 * @return array パラメータ <i>full_status</i> を指定していなかったり
 * <i>full_status</i> = <b>FALSE</b> としていた場合は、
 * 以下の要素を保持する配列が返されます。
 * <pre>
 * Array
 * (
 * [level] => 2
 * [type] => 0
 * [status] => 0
 * [name] => URL-Rewriter
 * [del] => 1
 * )
 * </pre>
 * 単純な <b>ob_get_status</b> の出力結果
 * キー値
 * level出力階層レベル
 * typePHP_OUTPUT_HANDLER_INTERNAL (0) あるいは PHP_OUTPUT_HANDLER_USER (1)
 * statusPHP_OUTPUT_HANDLER_START (0)、PHP_OUTPUT_HANDLER_CONT (1) あるいは PHP_OUTPUT_HANDLER_END (2) のいずれか
 * nameアクティブな出力ハンドラの名前、あるいは設定されていない場合は ' default output handler'
 * del<b>ob_start</b> が設定した削除フラグ
 * </p>
 * <p>
 * <i>full_status</i> = <b>TRUE</b> を指定してコールした場合、
 * 出力バッファごとにひとつの要素を保持する配列が返されます。
 * 出力レベルが配列のキーとして使用され、対応する値として
 * 各出力レベルのステータス情報を配列として保持します。
 * <pre>
 * Array
 * (
 * [0] => Array
 * (
 * [chunk_size] => 0
 * [size] => 40960
 * [block_size] => 10240
 * [type] => 1
 * [status] => 0
 * [name] => default output handler
 * [del] => 1
 * )
 * [1] => Array
 * (
 * [chunk_size] => 0
 * [size] => 40960
 * [block_size] => 10240
 * [type] => 0
 * [buffer_size] => 0
 * [status] => 0
 * [name] => URL-Rewriter
 * [del] => 1
 * )
 * )
 * </pre>
 * </p>
 * <p>
 * 完全な出力には、追加項目として以下の要素が含まれます。
 * 完全な <b>ob_get_status</b> の出力結果
 * キー値
 * chunk_size<b>ob_start</b> で設定したチャンクの大きさ
 * size...
 * blocksize...
 */
function ob_get_status(bool $full_status = null): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 出力用バッファの内容を返す
 * @link http://php.net/manual/ja/function.ob-get-contents.php
 * @return string 出力用バッファの内容を返します。
 * 出力のバッファリングがアクティブでない場合には <b>FALSE</b> を返します。
 */
function ob_get_contents(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 自動フラッシュをオンまたはオフにする
 * @link http://php.net/manual/ja/function.ob-implicit-flush.php
 * @param int $flag [optional] <p>
 * <b>TRUE</b> で自動フラッシュをオンに、<b>FALSE</b> でオフにします。
 * </p>
 * @return void 値を返しません。
 */
function ob_implicit_flush(int $flag = true): void {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 使用中の出力ハンドラの一覧を取得する
 * @link http://php.net/manual/ja/function.ob-list-handlers.php
 * @return array これは、使用中の出力ハンドラを（もし存在すれば）配列で返します。もし
 * output_buffering が
 * 有効になっているか、あるいは <b>ob_start</b> で
 * 無名関数が使用されている場合、<b>ob_list_handlers</b>
 * は "default output handler" を返します。
 */
function ob_list_handlers(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列をキーでソートする
 * @link http://php.net/manual/ja/function.ksort.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param int $sort_flags [optional] <p>
 * オプションのパラメータ <i>sort_flags</i>
 * によりソートの動作を修正可能です。詳細については、
 * <b>sort</b> を参照ください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function ksort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列をキーで逆順にソートする
 * @link http://php.net/manual/ja/function.krsort.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param int $sort_flags [optional] <p>
 * オプションのパラメータ <i>sort_flags</i>
 * によりソートの動作を修正可能です。詳細については、
 * <b>sort</b> を参照ください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function krsort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * "自然順"アルゴリズムで配列をソートする
 * @link http://php.net/manual/ja/function.natsort.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function natsort(array &$array): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 大文字小文字を区別しない"自然順"アルゴリズムを用いて配列をソートする
 * @link http://php.net/manual/ja/function.natcasesort.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function natcasesort(array &$array): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 連想キーと要素との関係を維持しつつ配列をソートする
 * @link http://php.net/manual/ja/function.asort.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param int $sort_flags [optional] <p>
 * オプションのパラメータ <i>sort_flags</i>
 * によりソートの動作を修正可能です。
 * 詳細については、<b>sort</b> を参照ください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function asort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 連想キーと要素との関係を維持しつつ配列を逆順にソートする
 * @link http://php.net/manual/ja/function.arsort.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param int $sort_flags [optional] <p>
 * オプションのパラメータ <i>sort_flags</i>
 * によりソートの動作を修正可能です。詳細については、
 * <b>sort</b> を参照ください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function arsort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列をソートする
 * @link http://php.net/manual/ja/function.sort.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param int $sort_flags [optional] <p>
 * オプションの 2 番目のパラメータ <i>sort_flags</i>
 * は、以下の値によりソートの動作を修正するために使用することが可能です。
 * </p>
 * <p>
 * ソート型のフラグ:
 * <b>SORT_REGULAR</b> - 通常通りに項目を比較
 * (型は変更しません)
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function sort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列を逆順にソートする
 * @link http://php.net/manual/ja/function.rsort.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param int $sort_flags [optional] <p>
 * オプションのパラメータ <i>sort_flags</i>
 * によりソートの動作を修正可能です。詳細については、
 * <b>sort</b> を参照ください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function rsort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユーザー定義の比較関数を使用して、配列を値でソートする
 * @link http://php.net/manual/ja/function.usort.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param callable $value_compare_func <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * <p>
 * float のような非整数を比較関数が返すと、
 * その返り値を内部的に integer にキャストして使います。
 * つまり、0.99 や 0.1 といった値は整数値 0 にキャストされ、
 * 値が等しいとみなされます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function usort(array &$array, callable $value_compare_func): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユーザー定義の比較関数で配列をソートし、連想インデックスを保持する
 * @link http://php.net/manual/ja/function.uasort.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param callable $value_compare_func <p>
 * ユーザー定義の比較関数の例については、
 * <b>usort</b> および <b>uksort</b>
 * を参照ください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function uasort(array &$array, callable $value_compare_func): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユーザー定義の比較関数を用いて、キーで配列をソートする
 * @link http://php.net/manual/ja/function.uksort.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param callable $key_compare_func <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function uksort(array &$array, callable $key_compare_func): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列をシャッフルする
 * @link http://php.net/manual/ja/function.shuffle.php
 * @param array $array <p>
 * 配列。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function shuffle(array &$array): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列の全ての要素にユーザー定義の関数を適用する
 * @link http://php.net/manual/ja/function.array-walk.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param callable $callback <p>
 * 通常、
 * <i>callback</i> は引数を二つとります。
 * <i>array</i> パラメータの値が最初の引数、
 * キー/添字は二番目の引数となります。
 * </p>
 * <p>
 * <i>callback</i> により配列の値そのものを変更する必要がある場合、
 * <i>callback</i> の最初の引数は
 * 参照
 * として渡す必要があります。この場合、配列の要素に加えた変更は、
 * 配列自体に対して行われます。
 * </p>
 * <p>
 * 内部関数の多く (たとえば <b>strtolower</b>) は、
 * 期待しているよりも多い引数を受け取ると警告が発生します。
 * そのため、<i>callback</i>
 * に直接指定することはできません。
 * </p>
 * <p>
 * 変更される可能性があるのは配列の値だけであり、
 * その構造を変更することはできません。つまり、
 * プログラマは要素の追加や削除そして並べ替えなどができないということです。
 * コールバック関数がこの条件を満たさない場合は、
 * この関数の動作は未定義で予期せぬ結果を得ることになります。
 * </p>
 * @param mixed $userdata [optional] <p>
 * オプションの <i>userdata</i> パラメータが指定された場合、
 * コールバック関数 <i>callback</i>
 * への三番目の引数として渡されます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function array_walk(array &$array, callable $callback, $userdata = null): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 配列の全ての要素に、ユーザー関数を再帰的に適用する
 * @link http://php.net/manual/ja/function.array-walk-recursive.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param callable $callback <p>
 * 通常、
 * <i>callback</i> は引数を二つとります。
 * <i>array</i> パラメータの値が最初の引数、
 * キー/添字は二番目の引数となります。
 * </p>
 * <p>
 * <i>callback</i> により配列の値そのものを変更する必要がある場合、
 * <i>callback</i> の最初の引数は
 * 参照
 * として渡す必要があります。この場合、配列の要素に加えた変更は、
 * 配列自体に対して行われます。
 * </p>
 * @param mixed $userdata [optional] <p>
 * オプションの <i>userdata</i> パラメータが指定された場合、
 * コールバック関数 <i>callback</i> への三番目の引数として渡されます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function array_walk_recursive(array &$array, callable $callback, $userdata = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数に含まれるすべての要素、
あるいはオブジェクトに含まれる何かの数を数える
 * @link http://php.net/manual/ja/function.count.php
 * @param mixed $array_or_countable <p>
 * 配列あるいは <b>Countable</b> オブジェクト。
 * </p>
 * @param int $mode [optional] <p>
 * オプションの<i>mode</i> 引数が <b>COUNT_RECURSIVE</b>
 * (または 1) にセットされた場合、<b>count</b>
 * は再帰的に配列をカウントします。
 * これは多次元配列の全ての要素をカウントするといった場合に特に有効です。
 * </p>
 * <p>
 * <b>count</b> は、再帰を検出して無限ループを回避するようになっています。
 * しかしその場合 (配列の中に自分自身が複数回登場する場合) は毎回 <b>E_WARNING</b>
 * を発行し、期待する結果より大きい数を返します。
 * </p>
 * @return int <i>array_or_countable</i> に含まれる要素の数を返します。
 * もしパラメータが配列もしくは
 * <b>Countable</b> インターフェイスを実装したオブジェクトではない場合、
 * 1 が返されます。
 * ひとつ例外があり、<i>array_or_countable</i> が <b>NULL</b> の場合、
 * 0 が返されます。
 * </p>
 * <p>
 * <b>count</b> は、セットされていない変数に関して 0
 * を返しますが、変数が空の配列として初期化されている場合にも 0 を返します。
 * ある変数がセットされているかどうかを調べるには、
 * <b>isset</b> を使用してください。
 */
function count($array_or_countable, int $mode = COUNT_NORMAL): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列の内部ポインタを最終要素にセットする
 * @link http://php.net/manual/ja/function.end.php
 * @param array $array <p>
 * 配列。この配列は参照渡しとなります。関数内で配列の中身を変更するからです。
 * つまり、ここには配列そのものを渡さなければならず、
 * 配列を返す関数を指定することはできません。
 * 参照渡しできるのは、実際の変数だけだからです。
 * </p>
 * @return mixed 最後の要素の値、あるいは空の配列の場合は <b>FALSE</b> を返します。
 */
function end(array &$array) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 内部の配列ポインタをひとつ前に戻す
 * @link http://php.net/manual/ja/function.prev.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @return mixed 内部の配列ポインタが指している前の場所の配列値を返します。
 * もう要素がない場合は <b>FALSE</b> を返します。
 */
function prev(array &$array) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列の内部ポインタを進める
 * @link http://php.net/manual/ja/function.next.php
 * @param array $array <p>
 * 対象となる配列。
 * </p>
 * @return mixed 内部配列ポインタが指す場所の次の場所の値を返します。
 * それ以上要素がない場合は <b>FALSE</b> を返します。
 */
function next(array &$array) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列の内部ポインタを先頭の要素にセットする
 * @link http://php.net/manual/ja/function.reset.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @return mixed 配列の最初の要素の値を返します。
 * 配列が空の場合 <b>FALSE</b> を返します。
 */
function reset(array &$array) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列内の現在の要素を返す
 * @link http://php.net/manual/ja/function.current.php
 * @param array $array <p>
 * 配列。
 * </p>
 * @return mixed <b>current</b> 関数は、
 * 単に内部ポインタが現在指している配列要素の値を返します。
 * この関数は、ポインタを全く移動しません。
 * 内部ポインタが最終要素の次を指していたり
 * 配列が空だったりした場合、
 * <b>current</b> は <b>FALSE</b> を返します。
 */
function current(array &$array) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列からキーを取り出す
 * @link http://php.net/manual/ja/function.key.php
 * @param array $array <p>
 * 配列。
 * </p>
 * @return mixed <b>key</b> 関数は、内部ポインタが現在指している配列要素のキーを返します。
 * ポインタを移動することはありません。内部ポインタが要素リストの末尾にいる場合や配列が空の場合は
 * <b>key</b> は <b>NULL</b> を返します。
 */
function key(array &$array) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 最小値を返す
 * @link http://php.net/manual/ja/function.min.php
 * @param array $values <p>
 * 値を含む配列。
 * </p>
 * @return mixed <b>min</b> は、パラメータとして渡した値の中で、標準の比較ルールに従って最小になるものを返します。
 * 異なる型で同じ値と評価される複数の値 (0 と 'abc' など)
 * があった場合は、関数に最初に渡されたほうを返します。
 * </p>
 * <p>
 * 空の配列を渡した場合は <b>FALSE</b> を返し、
 * <b>E_WARNING</b> が発生します。
 */
function min(array $values) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 最大値を返す
 * @link http://php.net/manual/ja/function.max.php
 * @param array $values <p>
 * 値を含む配列。
 * </p>
 * @return mixed <b>max</b> は、パラメータとして渡した値の中で、標準の比較ルールに従って最大になるものを返します。
 * 異なる型で同じ値と評価される複数の値 (0 と 'abc' など)
 * があった場合は、関数に最初に渡されたほうを返します。
 * </p>
 * <p>
 * 空の配列を渡した場合は <b>FALSE</b> を返し、
 * <b>E_WARNING</b> が発生します。
 */
function max(array $values) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列に値があるかチェックする
 * @link http://php.net/manual/ja/function.in-array.php
 * @param mixed $needle <p>
 * 探す値。
 * </p>
 * <p>
 * <i>needle</i> が文字列の場合、
 * 比較の際に大文字小文字は区別されます。
 * </p>
 * @param array $haystack <p>
 * 配列。
 * </p>
 * @param bool $strict [optional] <p>
 * 三番目のパラメータ <i>strict</i> が
 * <b>TRUE</b> に設定された場合、
 * <b>in_array</b> は、<i>haystack</i>
 * の中の <i>needle</i> の
 * 型も確認します。
 * </p>
 * @return bool 配列で <i>needle</i> が見つかった場合に
 * <b>TRUE</b>、それ以外の場合は、<b>FALSE</b> を返します。
 */
function in_array($needle, array $haystack, bool $strict = false): bool {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * 指定した値を配列で検索し、見つかった場合に対応する最初のキーを返す
 * @link http://php.net/manual/ja/function.array-search.php
 * @param mixed $needle <p>
 * 検索したい値。
 * </p>
 * <p>
 * <i>needle</i> が文字列の場合、
 * 大文字小文字を区別して比較が行われます。
 * </p>
 * @param array $haystack <p>
 * 配列。
 * </p>
 * @param bool $strict [optional] <p>
 * オプションの3番目のパラメータ <i>strict</i> に <b>TRUE</b> が指定された場合、
 * <b>array_search</b> は identical 要素を <i>haystack</i> から探します。
 * つまり、<i>haystack</i> の中で <i>needle</i> の厳密な型比較を実行します。
 * およびオブジェクトが同一のインスタンスであるかどうかも確認します。
 * </p>
 * @return mixed <i>needle</i> が見つかった場合に配列のキー、
 * それ以外の場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * もし <i>haystack</i> に 1 つ以上の
 * <i>needle</i> に見つかった場合、
 * 最初にマッチしたキーが返されます。全てのマッチした値に対するキーを返すためには、代わりに <b>array_keys</b> にパラメータ <i>search_value</i> を付けて使用してください。
 */
function array_search($needle, array $haystack, bool $strict = false) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列からシンボルテーブルに変数をインポートする
 * @link http://php.net/manual/ja/function.extract.php
 * @param array $array <p>
 * <i>prefix</i> は、
 * <i>flags</i> が
 * <b>EXTR_PREFIX_SAME</b>、<b>EXTR_PREFIX_ALL</b>、
 * <b>EXTR_PREFIX_INVALID</b> あるいは
 * <b>EXTR_PREFIX_IF_EXISTS</b> の場合にのみ必要であることに注意してください。
 * 接頭辞を付けた変数名が有効な変数名でない場合、
 * この変数はシンボルテーブルにインポートされません。接頭辞は、
 * アンダースコア文字で配列のキーから自動的に分割されます。
 * </p>
 * @param int $flags [optional] <p>
 * 無効または数値キーおよび衝突に関する対処法は、
 * <i>flags</i> で定義されます。
 * これは以下の値のどれかとなります。
 * <b>EXTR_OVERWRITE</b>
 * 衝突があった場合、存在する変数が上書きされます。
 * @param string $prefix [optional] 現在のシンボルテーブルに既に存在する場合にのみ上書きします。
 * 例えば $_REQUEST 以外にあなたが定義した変数のみを展開し
 * 有効な変数としたいような場合に有用です。
 * @return int シンボルテーブルにインポートした変数の数を返します。
 */
function extract(array &$array, int $flags = EXTR_OVERWRITE, string $prefix = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数名とその値から配列を作成する
 * @link http://php.net/manual/ja/function.compact.php
 * @param mixed $varname1 <p>
 * <b>compact</b> がとるパラメータの数は可変です。
 * 各パラメータは、変数名を値とする文字列か、
 * 変数名の配列のどちらかとすることができます。
 * 配列は、変数名を値とする別の配列を持つことができます。
 * <b>compact</b>はこれを再帰的に処理します。
 * </p>
 * @param mixed $_ [optional]
 * @return array 追加された全ての変数を値とする出力配列を返します。
 */
function compact($varname1, $_ = null): array {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 配列を指定した値で埋める
 * @link http://php.net/manual/ja/function.array-fill.php
 * @param int $start_index <p>
 * 返される配列の最初のインデックス。
 * </p>
 * <p>
 * <i>start_index</i> が負の場合は、
 * 返される配列の最初のインデックスが
 * <i>start_index</i>
 * となり、それ以降のインデックスはゼロから始まります
 * (例を参照ください)。
 * </p>
 * @param int $num <p>
 * 挿入する要素数。
 * ゼロ以上の数でなければなりません。
 * </p>
 * @param mixed $value <p>
 * 要素に使用する値。
 * </p>
 * @return array 値を埋めた配列を返します。
 */
function array_fill(int $start_index, int $num, $value): array {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * キーを指定して、配列を値で埋める
 * @link http://php.net/manual/ja/function.array-fill-keys.php
 * @param array $keys <p>
 * キーとして使用する値の配列。キーとして無効な値は
 * string に変換されます。
 * </p>
 * @param mixed $value <p>
 * 埋めたい値。
 * </p>
 * @return array 値を埋めた配列を返します。
 */
function array_fill_keys(array $keys, $value): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ある範囲の整数を有する配列を作成する
 * @link http://php.net/manual/ja/function.range.php
 * @param mixed $start <p>
 * シーケンスの最初の値。
 * </p>
 * @param mixed $end <p>
 * 値が <i>end</i> に達するまでシーケンスが続きます。
 * </p>
 * @param number $step [optional] <p>
 * <i>step</i> が指定されている場合、それは
 * 要素毎の増加数となります。<i>step</i>
 * は正の数でなければなりません。デフォルトは 1 です。
 * </p>
 * @return array <i>start</i> から
 * <i>end</i> までの整数の配列を返します。
 */
function range($start, $end, $step = 1): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 複数または多次元の配列をソートする
 * @link http://php.net/manual/ja/function.array-multisort.php
 * @param array $array1 <p>
 * ソートしたい配列。
 * </p>
 * @param mixed $array1_sort_order [optional] <p>
 * 先ほどの引数 array のソート順。
 * <b>SORT_ASC</b> はアイテムを昇順にソートし、
 * <b>SORT_DESC</b> はアイテムを降順にソートします。
 * </p>
 * <p>
 * この引数は、<i>array1_sort_flags</i> と入れ替えることもできるし、完全に省略することもできます。
 * 省略した場合は <b>SORT_ASC</b> とみなします。
 * </p>
 * @param mixed $array1_sort_flags [optional] <p>
 * 先ほどの引数 array のソート方法。
 * </p>
 * <p>
 * これらのフラグが使えます。
 * <b>SORT_REGULAR</b> - アイテムを通常通り比較します (型を変更しません)。
 * @param mixed $_ [optional] <p>
 * 追加の配列。オプションで並び順やフラグが続きます。
 * 前の配列の比較結果が等しい要素に対応する要素群だけを比較します。
 * 要するに、辞書的 (lexicographical) なソートを行うということです。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function array_multisort(array &$array1, $array1_sort_order = SORT_ASC, $array1_sort_flags = SORT_REGULAR, $_ = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 一つ以上の要素を配列の最後に追加する
 * @link http://php.net/manual/ja/function.array-push.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param mixed $value1 <p>
 * <i>array</i> の最後に追加する値。
 * </p>
 * @param mixed $_ [optional]
 * @return int 処理後の配列の中の要素の数を返します。
 */
function array_push(array &$array, $value1, $_ = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列の末尾から要素を取り除く
 * @link http://php.net/manual/ja/function.array-pop.php
 * @param array $array <p>
 * 値を取り出す配列。
 * </p>
 * @return mixed 配列 <i>array</i>
 * の最後の値を取り出して返します。
 * <i>array</i> が空 (または、配列でない) の場合、
 * <b>NULL</b> が返されます。
 */
function array_pop(array &$array) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列の先頭から要素を一つ取り出す
 * @link http://php.net/manual/ja/function.array-shift.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @return mixed 取り出した値を返します。<i>array</i>
 * が空の場合や配列でない場合は <b>NULL</b> を返します。
 */
function array_shift(array &$array) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 一つ以上の要素を配列の最初に加える
 * @link http://php.net/manual/ja/function.array-unshift.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param mixed $value1 <p>
 * 加える最初の値。
 * </p>
 * @param mixed $_ [optional]
 * @return int 処理後の <i>array</i> の要素の数を返します。
 */
function array_unshift(array &$array, $value1, $_ = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列の一部を削除し、他の要素で置換する
 * @link http://php.net/manual/ja/function.array-splice.php
 * @param array $input <p>
 * 入力の配列。
 * </p>
 * @param int $offset <p>
 * <i>offset</i> が正の場合、削除される部分は
 * 配列 <i>input</i> の最初から指定オフセットの
 * ぶんだけ進んだ位置からとなります。
 * <i>offset</i> が負の場合、削除される部分は、
 * <i>input</i> の末尾から数えた位置からとなります。
 * </p>
 * @param int $length [optional] <p>
 * <i>length</i> が省略された場合、
 * <i>offset</i> から配列の最後までが全て削除されます。
 * <i>length</i> が指定され、正の場合、複数の要素が削除されます。
 * 負の <i>length</i> が指定された場合、削除される部分の末尾の位置は配列の末尾を基準にして計算されます。
 * <i>length</i> にゼロを指定した場合は、どの要素も削除しません。
 * ヒント: <i>replacement</i> も指定した場合に
 * <i>offset</i> から配列の最後まで全てを削除するには、
 * <i>length</i> を求めるために count($input)
 * を使用してください。
 * </p>
 * @param mixed $replacement [optional] <p>
 * 配列 <i>replacement</i> が指定された場合、
 * 削除された要素は、この配列の要素で置換されます。
 * </p>
 * <p>
 * <i>offset</i> および <i>length</i>
 * で何も削除しないと指定した場合、配列 <i>replacement</i>
 * の要素は <i>offset</i> で指定された位置に挿入されます。
 * 置換される配列のキーは保存されないことに注意してください。
 * </p>
 * <p>
 * もし <i>replacement</i> に一つしか要素がない場合、
 * 要素そのものが配列やオブジェクトあるいは <b>NULL</b> でない限り、array()
 * で括る必要はありません。
 * </p>
 * @return array 抽出された要素を含む配列を返します。
 */
function array_splice(array &$input, int $offset, int $length = 'count($input)', $replacement = array()): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列の一部を展開する
 * @link http://php.net/manual/ja/function.array-slice.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param int $offset <p>
 * <i>offset</i> が負の値ではない場合、要素位置の計算は、
 * 配列 <i>array</i> の offset から始められます。
 * <i>offset</i> が負の場合、要素位置の計算は
 * <i>array</i> の最後から行われます。
 * </p>
 * @param int $length [optional] <p>
 * <i>length</i>が指定され、正の場合、
 * 配列の要素の中から最大でその数までの要素を返します。
 * 配列の要素数が <i>length</i> より少ない場合は、
 * 配列から取得できる要素だけを返します。<i>length</i>
 * が指定され、負の場合、配列の末尾から連続する複数の要素が返されます。
 * 省略された場合、<i>offset</i>
 * から配列の最後までの全ての要素が返されます。
 * </p>
 * @param bool $preserve_keys [optional] <p>
 * <b>array_slice</b> はデフォルトで配列の数値キーを並べなおし、
 * リセットすることに注意してください。
 * <i>preserve_keys</i> を <b>TRUE</b>
 * にする事でこの動作を変更することができます。
 * </p>
 * @return array 切り取った部分を返します。オフセットが配列のサイズより大きい場合は、空の配列を返します。
 */
function array_slice(array $array, int $offset, int $length = null, bool $preserve_keys = false): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ひとつまたは複数の配列をマージする
 * @link http://php.net/manual/ja/function.array-merge.php
 * @param array $array1 <p>
 * 最初の配列。
 * </p>
 * @param array $_ [optional] <p>
 * マージしていく任意の数の配列のリスト。
 * </p>
 * @return array 結果の配列を返します。
 */
function array_merge(array $array1, array $_ = null): array {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 二つ以上の配列を再帰的にマージする
 * @link http://php.net/manual/ja/function.array-merge-recursive.php
 * @param array $array1 <p>
 * マージするもとの配列。
 * </p>
 * @param array $_ [optional] <p>
 * 再帰的にマージしていく配列の可変リスト。
 * </p>
 * @return array すべての引数の配列をマージした結果の配列を返します。
 */
function array_merge_recursive(array $array1, array $_ = null): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 渡された配列の要素を置き換える
 * @link http://php.net/manual/ja/function.array-replace.php
 * @param array $array1 <p>
 * 要素を置き換えたい配列。
 * </p>
 * @param array $array2 <p>
 * 置き換えたい要素を含む配列。
 * </p>
 * @param array $_ [optional] <p>
 * 置き換えたい要素を含む、さらに別の配列。
 * 後から渡した配列の値のほうが優先されます。
 * </p>
 * @return array 配列を返します。エラーが発生した場合は <b>NULL</b> を返します。
 */
function array_replace(array $array1, array $array2, array $_ = null): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 渡された配列の要素を再帰的に置き換える
 * @link http://php.net/manual/ja/function.array-replace-recursive.php
 * @param array $array1 <p>
 * 要素を置き換えたい配列。
 * </p>
 * @param array $array2 <p>
 * 置き換えたい要素を含む配列。
 * </p>
 * @param array $_ [optional] <p>
 * オプション。置き換えたい要素を含む、さらに別の配列。
 * </p>
 * @return array 配列を返します。エラーが発生した場合は <b>NULL</b> を返します。
 */
function array_replace_recursive(array $array1, array $array2, array $_ = null): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列のキーすべて、あるいはその一部を返す
 * @link http://php.net/manual/ja/function.array-keys.php
 * @param array $array <p>
 * 返すキーを含む配列。
 * </p>
 * @param mixed $search_value [optional] <p>
 * 指定した場合は、これらの値を含むキーのみを返します。
 * </p>
 * @param bool $strict [optional] <p>
 * 検索時に厳密な比較 (===) を行うかどうか。
 * </p>
 * @return array <i>array</i> のすべてのキーを配列で返します。
 */
function array_keys(array $array, $search_value = null, bool $strict = false): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列の全ての値を返す
 * @link http://php.net/manual/ja/function.array-values.php
 * @param array $array <p>
 * 配列。
 * </p>
 * @return array 数値添字の値の配列を返します。
 */
function array_values(array $array): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列の値の数を数える
 * @link http://php.net/manual/ja/function.array-count-values.php
 * @param array $array <p>
 * 値を数える配列。
 * </p>
 * @return array <i>array</i> のキーとその登場回数を組み合わせた連想配列を返します。
 */
function array_count_values(array $array): array {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 入力配列から単一のカラムの値を返す
 * @link http://php.net/manual/ja/function.array-column.php
 * @param array $input <p>
 * 値を取り出したい多次元配列 (あるいはオブジェクトの配列)。
 * オブジェクトの配列を指定した場合は、public プロパティはそのまま取得できます。
 * protected や private なプロパティを取得したい場合は、そのクラスがマジックメソッド
 * <b>__get</b> および <b>__isset</b>
 * を実装している必要があります。
 * </p>
 * @param mixed $column_key <p>
 * 値を返したいカラム。
 * 取得したいカラムの番号を整数値で指定することもできるし、
 * 連想配列のキーやプロパティの名前を指定することもできます。
 * <b>NULL</b> を指定すると、配列やオブジェクト全体を返します
 * (<i>index_key</i> との組み合わせで、配列の並べ替えをするときに便利です)。
 * </p>
 * @param mixed $index_key [optional] <p>
 * 返す配列のインデックスとして使うカラム。
 * カラム番号を表す整数値、あるいはキーの名前を表す文字列になります。
 * </p>
 * @return array 入力配列の単一のカラムを表す値の配列を返します。
 */
function array_column(array $input, $column_key, $index_key = null): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 要素を逆順にした配列を返す
 * @link http://php.net/manual/ja/function.array-reverse.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param bool $preserve_keys [optional] <p>
 * <b>TRUE</b> の場合は数値のキーを保持します。
 * 非数値のキーは、この設定にかかわらず常に保持されます。
 * </p>
 * @return array 逆転させた配列を返します。
 */
function array_reverse(array $array, bool $preserve_keys = false): array {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * コールバック関数を用いて配列を普通の値に変更することにより、配列を再帰的に減らす
 * @link http://php.net/manual/ja/function.array-reduce.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param callable $callback mixed<b>callback</b>
 * <b>mixed<i>carry</i></b>
 * <b>mixed<i>item</i></b>
 * <i>carry</i>
 * <p>
 * 前回の反復処理の結果を保持します。最初の反復処理のときには、
 * <i>initial</i> の値を保持しています。
 * </p>
 * @param mixed $initial [optional] <p>
 * オプションの <i>intial</i>
 * が利用可能な場合、処理の最初で使用されたり、
 * 配列が空の場合の最終結果として使用されます。
 * </p>
 * @return mixed 結果の値を返します。
 * </p>
 * <p>
 * 配列が空で <i>initial</i> が渡されなかった場合は、
 * <b>array_reduce</b> は <b>NULL</b> を返します。
 */
function array_reduce(array $array, callable $callback, $initial = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定長、指定した値で配列を埋める
 * @link http://php.net/manual/ja/function.array-pad.php
 * @param array $array <p>
 * 値を埋めるもととなる配列。
 * </p>
 * @param int $size <p>
 * 新しい配列のサイズ。
 * </p>
 * @param mixed $value <p>
 * <i>array</i> が
 * <i>size</i> より小さいときに、
 * 埋めるために使用する値。
 * </p>
 * @return array <i>size</i>
 * で指定した長さになるように値 <i>value</i> で埋めて
 * <i>array</i> のコピーを返します。
 * <i>size</i> が正の場合、配列の右側が埋められます。
 * 負の場合、配列の左側が埋められます。
 * <i>size</i> の絶対値が
 * <i>array</i> の長さ以下の場合、埋める処理は行われません。
 */
function array_pad(array $array, int $size, $value): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列のキーと値を反転する
 * @link http://php.net/manual/ja/function.array-flip.php
 * @param array $array <p>
 * 反転を行うキー/値の組。
 * </p>
 * @return array 成功した場合に反転した配列、失敗した場合に <b>NULL</b> を返します。
 */
function array_flip(array $array): array {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 配列のすべてのキーの大文字小文字を変更する
 * @link http://php.net/manual/ja/function.array-change-key-case.php
 * @param array $array <p>
 * 処理を行う配列。
 * </p>
 * @param int $case [optional] <p>
 * <b>CASE_UPPER</b> あるいは
 * <b>CASE_LOWER</b> (デフォルト)。
 * </p>
 * @return array すべてのキーを小文字あるいは大文字にした配列を返します。
 * <i>array</i> が配列でない場合は <b>FALSE</b> を返します。
 */
function array_change_key_case(array $array, int $case = CASE_LOWER): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列から一つ以上の要素をランダムに取得する
 * @link http://php.net/manual/ja/function.array-rand.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param int $num [optional] <p>
 * 取得するエントリの数を指定します。
 * </p>
 * @return mixed エントリを一つだけ取得する場合、
 * <b>array_rand</b> はランダムなエントリのキーを返します。
 * その他の場合は、ランダムなエントリのキーの配列を返します。
 * これにより、ランダムな値だけではなくランダムなキーも配列から取得できるようになります。
 * 配列の中にある要素数より多くの要素を取り出そうとすると
 * <b>E_WARNING</b> レベルのエラーが発生し、NULL を返します。
 */
function array_rand(array $array, int $num = 1) {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 配列から重複した値を削除する
 * @link http://php.net/manual/ja/function.array-unique.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @param int $sort_flags [optional] <p>
 * オプションの 2 番目のパラメータ <i>sort_flags</i>
 * にこれらの値を使用して、ソートの挙動を変更します。
 * </p>
 * <p>
 * ソート形式のフラグは次のとおりです。
 * <b>SORT_REGULAR</b> - 通常の比較
 * (型変換をしない) を行います
 * @return array 処理済の配列を返します。
 */
function array_unique(array $array, int $sort_flags = SORT_STRING): array {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 配列の共通項を計算する
 * @link http://php.net/manual/ja/function.array-intersect.php
 * @param array $array1 <p>
 * 値を調べるもととなる配列。
 * </p>
 * @param array $array2 <p>
 * 値を比較する対象となる配列。
 * </p>
 * @param array $_ [optional] <p>
 * さらにそれ以外の配列。
 * </p>
 * @return array <i>array1</i> の値のうち、
 * すべての引数に存在する値のものを含む連想配列を返します。
 */
function array_intersect(array $array1, array $array2, array $_ = null): array {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * キーを基準にして配列の共通項を計算する
 * @link http://php.net/manual/ja/function.array-intersect-key.php
 * @param array $array1 <p>
 * 値を調べるもととなる配列。
 * </p>
 * @param array $array2 <p>
 * 値を比較する対象となる配列。
 * </p>
 * @param array $_ [optional] <p>
 * さらにそれ以外の配列。
 * </p>
 * @return array <i>array1</i> のエントリのうち、
 * すべての引数に存在するキーのものを含む連想配列を返します。
 */
function array_intersect_key(array $array1, array $array2, array $_ = null): array {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * キーを基準にし、コールバック関数を用いて
配列の共通項を計算する
 * @link http://php.net/manual/ja/function.array-intersect-ukey.php
 * @param array $array1 <p>
 * 比較元となる最初の配列。
 * </p>
 * @param array $array2 <p>
 * キーを比較する対象となる最初の配列。
 * </p>
 * @param array $_ [optional] <p>
 * キーを比較する対象となる配列の、可変リスト。
 * </p>
 * @param callable $key_compare_func <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * @return array <i>array1</i> の値のうち、
 * すべての引数に存在するキーのものを含む連想配列を返します。
 */
function array_intersect_ukey(array $array1, array $array2, array $_ = null, callable $key_compare_func): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * データの比較にコールバック関数を用い、配列の共通項を計算する
 * @link http://php.net/manual/ja/function.array-uintersect.php
 * @param array $array1 <p>
 * 最初の配列。
 * </p>
 * @param array $array2 <p>
 * 2 番目の配列。
 * </p>
 * @param array $_ [optional]
 * @param callable $value_compare_func <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * @return array 他の全ての引数に存在する
 * <i>array1</i> の値を全て有する配列を返します。
 */
function array_uintersect(array $array1, array $array2, array $_ = null, callable $value_compare_func): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 追加された添字の確認も含めて配列の共通項を確認する
 * @link http://php.net/manual/ja/function.array-intersect-assoc.php
 * @param array $array1 <p>
 * 値を調べるもととなる配列。
 * </p>
 * @param array $array2 <p>
 * 値を比較する対象となる配列。
 * </p>
 * @param array $_ [optional] <p>
 * さらにそれ以外の配列。
 * </p>
 * @return array <i>array1</i> の値のうち、すべての引数に存在するものを含む連想配列を返します。
 */
function array_intersect_assoc(array $array1, array $array2, array $_ = null): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * データの比較にコールバック関数を用い、
追加された添字の確認も含めて配列の共通項を計算する
 * @link http://php.net/manual/ja/function.array-uintersect-assoc.php
 * @param array $array1 <p>
 * 最初の配列。
 * </p>
 * @param array $array2 <p>
 * 2 番目の配列。
 * </p>
 * @param array $_ [optional]
 * @param callable $value_compare_func <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * @return array 全ての引数に現れる
 * <i>array1</i> の全ての値を含む配列を返します。
 */
function array_uintersect_assoc(array $array1, array $array2, array $_ = null, callable $value_compare_func): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * 追加された添字の確認も含め、コールバック関数を用いて
配列の共通項を確認する
 * @link http://php.net/manual/ja/function.array-intersect-uassoc.php
 * @param array $array1 <p>
 * 比較元となる最初の配列。
 * </p>
 * @param array $array2 <p>
 * キーを比較する対象となる最初の配列。
 * </p>
 * @param array $_ [optional] <p>
 * キーを比較する対象となる配列の、可変リスト。
 * </p>
 * @param callable $key_compare_func <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * @return array <i>array1</i> の値のうち、
 * すべての引数に存在するもののみを返します。
 */
function array_intersect_uassoc(array $array1, array $array2, array $_ = null, callable $key_compare_func): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * データと添字の比較に個別のコールバック関数を用い、
追加された添字の確認も含めて配列の共通項を計算する
 * @link http://php.net/manual/ja/function.array-uintersect-uassoc.php
 * @param array $array1 <p>
 * 最初の配列。
 * </p>
 * @param array $array2 <p>
 * 2 番目の配列。
 * </p>
 * @param array $_ [optional]
 * @param callable $value_compare_func <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * @param callable $key_compare_func <p>
 * キーの比較用のコールバック関数。
 * </p>
 * @return array 全ての引数に現れる
 * <i>array1</i> の全ての値を含む配列を返します。
 */
function array_uintersect_uassoc(array $array1, array $array2, array $_ = null, callable $value_compare_func, callable $key_compare_func): array {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 配列の差を計算する
 * @link http://php.net/manual/ja/function.array-diff.php
 * @param array $array1 <p>
 * 比較元の配列。
 * </p>
 * @param array $array2 <p>
 * 比較対象の配列。
 * </p>
 * @param array $_ [optional] <p>
 * さらに比較したい配列。
 * </p>
 * @return array <i>array1</i>
 * のエントリのうち、他のどの配列にも含まれない要素のみを含む配列を返します。
 */
function array_diff(array $array1, array $array2, array $_ = null): array {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * キーを基準にして配列の差を計算する
 * @link http://php.net/manual/ja/function.array-diff-key.php
 * @param array $array1 <p>
 * 比較元の配列。
 * </p>
 * @param array $array2 <p>
 * 比較する対象となる配列。
 * </p>
 * @param array $_ [optional] <p>
 * さらに比較する対象となる配列。
 * </p>
 * @return array <i>array1</i> の要素のうち、
 * その他の配列のいずれにも含まれないキーのものだけを残した配列を返します。
 */
function array_diff_key(array $array1, array $array2, array $_ = null): array {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * キーを基準にし、コールバック関数を用いて配列の差を計算する
 * @link http://php.net/manual/ja/function.array-diff-ukey.php
 * @param array $array1 <p>
 * 比較元の配列。
 * </p>
 * @param array $array2 <p>
 * 比較する対象となる配列。
 * </p>
 * @param array $_ [optional] <p>
 * さらに比較する対象となる配列。
 * </p>
 * @param callable $key_compare_func <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * @return array <i>array1</i> の要素のうち、
 * その他の配列のいずれにも含まれないものだけを残した配列を返します。
 */
function array_diff_ukey(array $array1, array $array2, array $_ = null, callable $key_compare_func): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * データの比較にコールバック関数を用い、配列の差を計算する
 * @link http://php.net/manual/ja/function.array-udiff.php
 * @param array $array1 <p>
 * 最初の配列。
 * </p>
 * @param array $array2 <p>
 * 2 番目の配列。
 * </p>
 * @param array $_ [optional]
 * @param callable $value_compare_func <p>
 * 比較用のコールバック関数。
 * </p>
 * <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * @return array 他の引数のいずれにも存在しない
 * <i>array1</i> の値の全てを有する配列を返します。
 */
function array_udiff(array $array1, array $array2, array $_ = null, callable $value_compare_func): array {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 追加された添字の確認を含めて配列の差を計算する
 * @link http://php.net/manual/ja/function.array-diff-assoc.php
 * @param array $array1 <p>
 * 比較元の配列。
 * </p>
 * @param array $array2 <p>
 * 比較する対象となる配列。
 * </p>
 * @param array $_ [optional] <p>
 * さらに比較する対象となる配列。
 * </p>
 * @return array <i>array1</i> の要素のうち、
 * その他の配列のいずれにも含まれないものだけを残した配列を返します。
 */
function array_diff_assoc(array $array1, array $array2, array $_ = null): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * データの比較にコールバック関数を用い、
追加された添字の確認を含めて配列の差を計算する
 * @link http://php.net/manual/ja/function.array-udiff-assoc.php
 * @param array $array1 <p>
 * 最初の配列。
 * </p>
 * @param array $array2 <p>
 * 2 番目の配列。
 * </p>
 * @param array $_ [optional]
 * @param callable $value_compare_func <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * @return array <b>array_udiff_assoc</b> は、
 * <i>array1</i> から他の引数の配列の中に現れない全ての値を含む
 * array を返します。
 * <b>array_diff</b> や <b>array_udiff</b>
 * と異なり、キーが比較に使用されることに注意してください。
 * 配列のデータの比較は、ユーザーが指定したコールバックを用いて行われます。
 * この点で、<b>array_diff_assoc</b> は反対の動作、つまり
 * 内部関数を利用した比較を行います。
 */
function array_udiff_assoc(array $array1, array $array2, array $_ = null, callable $value_compare_func): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * ユーザーが指定したコールバック関数を利用し、
追加された添字の確認を含めて配列の差を計算する
 * @link http://php.net/manual/ja/function.array-diff-uassoc.php
 * @param array $array1 <p>
 * 比較元の配列。
 * </p>
 * @param array $array2 <p>
 * 比較する対象となる配列。
 * </p>
 * @param array $_ [optional] <p>
 * さらに比較する対象となる配列。
 * </p>
 * @param callable $key_compare_func <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * @return array <i>array1</i> の要素のうち、
 * その他の配列のいずれにも含まれないものだけを残した配列を返します。
 */
function array_diff_uassoc(array $array1, array $array2, array $_ = null, callable $key_compare_func): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * データと添字の比較にコールバック関数を用い、
追加された添字の確認を含めて配列の差を計算する
 * @link http://php.net/manual/ja/function.array-udiff-uassoc.php
 * @param array $array1 <p>
 * 最初の配列。
 * </p>
 * @param array $array2 <p>
 * 2 番目の配列。
 * </p>
 * @param array $_ [optional]
 * @param callable $value_compare_func <p>
 * 比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。
 * </p>
 * int<b>callback</b><b>mixed<i>a</i></b><b>mixed<i>b</i></b>
 * @param callable $key_compare_func <p>
 * キー（添字）の比較は、コールバック関数
 * <i>key_compare_func</i> で行われます。
 * <b>array_udiff_assoc</b> では後者の比較が内部関数で
 * 行われるという点で、この関数とは異なります。
 * </p>
 * @return array <i>array1</i> から他の引数の配列の中に現れない全ての
 * 値を含むarray を返します。
 */
function array_udiff_uassoc(array $array1, array $array2, array $_ = null, callable $value_compare_func, callable $key_compare_func): array {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 配列の中の値の合計を計算する
 * @link http://php.net/manual/ja/function.array-sum.php
 * @param array $array <p>
 * 入力の配列。
 * </p>
 * @return number 値の合計を整数または
 * float として返します。
 * <i>array</i> が空の場合は 0 を返します。
 */
function array_sum(array $array) {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 配列の値の積を計算する
 * @link http://php.net/manual/ja/function.array-product.php
 * @param array $array <p>
 * 配列。
 * </p>
 * @return number 積を、integer あるいは float で返します。
 */
function array_product(array $array) {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * コールバック関数を使用して、配列の要素をフィルタリングする
 * @link http://php.net/manual/ja/function.array-filter.php
 * @param array $array <p>
 * 処理する配列。
 * </p>
 * @param callable $callback [optional] <p>
 * 使用するコールバック関数。
 * </p>
 * <p>
 * コールバック関数が与えられなかった場合、
 * <i>array</i> のエントリの中で <b>FALSE</b> と等しいもの
 * (boolean
 * への変換 を参照ください) がすべて削除されます。
 * </p>
 * @param int $flag [optional] <p>
 * 引数として、何を <i>callback</i> に送るのかを決めるフラグ。
 * <b>ARRAY_FILTER_USE_KEY</b> - 値ではなく、キーだけを
 * <i>callback</i> の引数として渡す
 * @return array フィルタリングされた結果の配列を返します。
 */
function array_filter(array $array, callable $callback = null, int $flag = 0): array {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 指定した配列の要素にコールバック関数を適用する
 * @link http://php.net/manual/ja/function.array-map.php
 * @param callable $callback <p>
 * 配列の各要素に適用するコールバック関数。
 * </p>
 * @param array $array1 <p>
 * コールバック関数を適用する配列。
 * </p>
 * @param array $_ [optional] <p>
 * コールバック関数に渡す引数を指定する配列の可変リスト。
 * </p>
 * @return array <i>array1</i>
 * の各要素に <i>callback</i> 関数を適用した後、
 * その全ての要素を含む配列を返します。
 */
function array_map(callable $callback, array $array1, array $_ = null): array {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 配列を分割する
 * @link http://php.net/manual/ja/function.array-chunk.php
 * @param array $array <p>
 * 処理を行う配列。
 * </p>
 * @param int $size <p>
 * 各部分のサイズ。
 * </p>
 * @param bool $preserve_keys [optional] <p>
 * <b>TRUE</b> の場合はキーをそのまま保持します。
 * デフォルトは <b>FALSE</b> で、各部分のキーをあらためて数字で振りなおします。
 * </p>
 * @return array 数値添字の多次元配列を返します。添え字はゼロから始まり、
 * 各次元の要素数が <i>size</i> となります。
 */
function array_chunk(array $array, int $size, bool $preserve_keys = false): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * 一方の配列をキーとして、もう一方の配列を値として、ひとつの配列を生成する
 * @link http://php.net/manual/ja/function.array-combine.php
 * @param array $keys <p>
 * キーとして使用する配列。無効な値を渡すと文字列に変換されます。
 * </p>
 * @param array $values <p>
 * 値として使用する配列。
 * </p>
 * @return array 作成した配列を返します。
 * 互いの配列の要素の数が合致しない場合に
 * <b>FALSE</b> を返します。
 */
function array_combine(array $keys, array $values): array {}

/**
 * (PHP 4 &gt;= 4.0.7, PHP 5, PHP 7)<br/>
 * 指定したキーまたは添字が配列にあるかどうかを調べる
 * @link http://php.net/manual/ja/function.array-key-exists.php
 * @param mixed $key <p>
 * 調べる値。
 * </p>
 * @param array $array <p>
 * キーが存在するかどうかを調べたい配列。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <b>array_key_exists</b> は、最初のレベルのキーだけを捜します。
 * 多次元配列のネストされたキーは、この関数では見つけられません。
 */
function array_key_exists($key, array $array): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>current</b> のエイリアス
 * @link http://php.net/manual/ja/function.pos.php
 * @param $arg
 */
function pos($arg) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>count</b> のエイリアス
 * @link http://php.net/manual/ja/function.sizeof.php
 * @param $var
 * @param $mode [optional]
 */
function sizeof($var, $mode) {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * <b>array_key_exists</b> のエイリアス
 * @link http://php.net/manual/ja/function.key-exists.php
 * @param $key
 * @param $search
 */
function key_exists($key, $search) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * assertion が <b>FALSE</b> であるかどうかを調べる
 * @link http://php.net/manual/ja/function.assert.php
 * @param mixed $assertion <p>
 * アサーション。
 * PHP 5 では、評価対象の文字列か、あるいは
 * boolean 値しか指定できませんでした。
 * PHP 7 ではそれ以外にも、値を返すあらゆる式を指定できます。
 * この式を実行した結果を用いて、アサーションに成功したか否かを判断します。
 * </p>
 * <p>
 * Using string as the <i>assertion</i> is
 * DEPRECATED as of PHP 7.2.
 * </p>
 * @param string $description [optional] <p>
 * オプションの説明で、
 * <i>assertion</i> が失敗したときのメッセージにこれを含めます。
 * </p>
 * @return bool アサーションが false となった場合に <b>FALSE</b>、それ以外の場合に <b>TRUE</b> を返します。
 */
function assert($assertion, string $description = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 様々な assert フラグを設定/取得する
 * @link http://php.net/manual/ja/function.assert-options.php
 * @param int $what <p>
 * <table>
 * assert オプション
 * <tr valign="top">
 * <td>オプション</td>
 * <td>INI 設定</td>
 * <td>デフォルト値</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>ASSERT_ACTIVE</td>
 * <td>assert.active</td>
 * <td>1</td>
 * <td><b>assert</b> による評価を有効にする</td>
 * </tr>
 * <tr valign="top">
 * <td>ASSERT_WARNING</td>
 * <td>assert.warning</td>
 * <td>1</td>
 * <td>assersion に失敗した場合に PHP 警告を発生する</td>
 * </tr>
 * <tr valign="top">
 * <td>ASSERT_BAIL</td>
 * <td>assert.bail</td>
 * <td>0</td>
 * <td>assersion に失敗した場合に実行を終了する</td>
 * </tr>
 * <tr valign="top">
 * <td>ASSERT_QUIET_EVAL</td>
 * <td>assert.quiet_eval</td>
 * <td>0</td>
 * <td>
 * assersion 式については error_reporting を無効にする
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>ASSERT_CALLBACK</td>
 * <td>assert.callback</td>
 * <td)<<b>NULL</b>)</td>
 * <td>assertion に失敗した場合にコールされるコールバック</td>
 * </tr>
 * </table>
 * </p>
 * @param mixed $value [optional] <p>
 * オプションに指定する新しい値。
 * </p>
 * @return mixed そのオプションの元の値、あるいはエラー時に <b>FALSE</b> を返します。
 */
function assert_options(int $what, $value = null) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ふたつの "PHP 標準" バージョン番号文字列を比較する
 * @link http://php.net/manual/ja/function.version-compare.php
 * @param string $version1 <p>
 * 最初のバージョン番号。
 * </p>
 * @param string $version2 <p>
 * ふたつめのバージョン番号。
 * </p>
 * @param string $operator [optional] <p>
 * 三番目のオプション引数 <i>operator</i> を指定した場合、
 * 特定の関係を調べることが可能です。指定可能な演算子を以下に示します。
 * &lt;, lt,
 * &lt;=, le, &gt;,
 * gt, &gt;=, ge,
 * ==, =, eq,
 * !=, &lt;&gt;, ne
 * </p>
 * <p>
 * このパラメータは大文字小文字を区別するので、すべて小文字で指定しなければなりません。
 * </p>
 * @return mixed デフォルトでは、<b>version_compare</b> の返り値は
 * 最初のバージョンが 2 番目のバージョンより小さい場合に -1、
 * 同じ場合に 0、そして 2 番目のバージョンのほうが小さい場合に
 * 1 となります。
 * </p>
 * <p>
 * オプションの引数 <i>operator</i> を使用すると、
 * 指定した演算子による関係を満たす場合に <b>TRUE</b>、それ以外の場合に
 * <b>FALSE</b> を返すようになります。
 */
function version_compare(string $version1, string $version2, string $operator = null) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * パス名とプロジェクト ID を、System V IPC キーに変換する
 * @link http://php.net/manual/ja/function.ftok.php
 * @param string $pathname <p>
 * アクセ宇可能なファイルへのパス。
 * </p>
 * @param string $proj <p>
 * プロジェクト ID。一文字からなる文字列でなければなりません。
 * </p>
 * @return int 成功した場合には作成されたキーの値を、それ以外の場合には
 * -1 を返します。
 */
function ftok(string $pathname, string $proj): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 文字列に rot13 変換を行う
 * @link http://php.net/manual/ja/function.str-rot13.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @return string 指定した文字列を ROT13 変換した結果を返します。
 */
function str_rot13(string $str): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 登録されているフィルタのリストを取得する
 * @link http://php.net/manual/ja/function.stream-get-filters.php
 * @return array 使用可能なすべてのストリームフィルタの名前を含む配列を返します。
 */
function stream_get_filters(): array {}

/**
 * (PHP 5, PHP 7)<br/>
 * ユーザー定義のストリームフィルタを登録する
 * @link http://php.net/manual/ja/function.stream-filter-register.php
 * @param string $filtername <p>
 * 登録するフィルタ名。
 * </p>
 * @param string $classname <p>
 * フィルタを実装するには、まず、<b>php_user_filter</b>
 * を継承したクラスのメンバ関数を実装しなくてはなりません。
 * PHP は、書き込みまたは読み出し操作を
 * カスタムフィルタの付加されたストリームに対して行う際に、まず
 * データをそのフィルタに(そして、付加されている他のすべてのフィルタにも)
 * 渡し、指示どおりストリームのデータが変更されるようにします。
 * メソッドの実装は、<b>php_user_filter</b> の説明の通りにしなければなりません。
 * さもないと、定義されていない動作をします。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <b>stream_filter_register</b> は、
 * 指定された <i>filtername</i> がすでに定義されている場合、
 * <b>FALSE</b> を返します。
 */
function stream_filter_register(string $filtername, string $classname): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 操作する brigade から bucket オブジェクトを返す
 * @link http://php.net/manual/ja/function.stream-bucket-make-writeable.php
 * @param resource $brigade
 * @return object
 */
function stream_bucket_make_writeable($brigade) {}

/**
 * (PHP 5, PHP 7)<br/>
 * bucket を brigade の先頭に追加する
 * @link http://php.net/manual/ja/function.stream-bucket-prepend.php
 * @param resource $brigade <p>
 * <i>brigade</i> は bucket brigade
 * を指すリソースで、ここにはひとつあるいは複数の
 * bucket オブジェクトが含まれます。
 * </p>
 * @param object $bucket <p>
 * bucket オブジェクト。
 * </p>
 * @return void 値を返しません。
 */
function stream_bucket_prepend($brigade, $bucket): void {}

/**
 * (PHP 5, PHP 7)<br/>
 * bucket を brigade に追加する
 * @link http://php.net/manual/ja/function.stream-bucket-append.php
 * @param resource $brigade
 * @param object $bucket
 * @return void
 */
function stream_bucket_append($brigade, $bucket): void {}

/**
 * (PHP 5, PHP 7)<br/>
 * 現在のストリームで使用する新しい bucket を作成する
 * @link http://php.net/manual/ja/function.stream-bucket-new.php
 * @param resource $stream
 * @param string $buffer
 * @return object
 */
function stream_bucket_new($stream, string $buffer) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * URL リライタの値を追加する
 * @link http://php.net/manual/ja/function.output-add-rewrite-var.php
 * @param string $name <p>
 * 変数名。
 * </p>
 * @param string $value <p>
 * 変数の値。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function output_add_rewrite_var(string $name, string $value): bool {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * URL リライタの値をリセットする
 * @link http://php.net/manual/ja/function.output-reset-rewrite-vars.php
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function output_reset_rewrite_vars(): bool {}

/**
 * (PHP 5 &gt;= 5.2.1, PHP 7)<br/>
 * 一時ファイル用に使用されるディレクトリのパスを返す
 * @link http://php.net/manual/ja/function.sys-get-temp-dir.php
 * @return string 一時ディレクトリのパスを返します。
 */
function sys_get_temp_dir(): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 実行時に PHP 拡張モジュールをロードする
 * @link http://php.net/manual/ja/function.dl.php
 * @param string $library <p>
 * このパラメータに指定できるのは拡張モジュールの
 * ファイル名だけであり、それはプラットフォームに依存します。
 * 例えば、Unix プラットフォームでは
 * sockets 拡張モジュール
 * (共有モジュールとしてコンパイルされていれば。デフォルトでは有りません!)
 * は sockets.so と呼ばれていますし、一方 Windows
 * プラットフォームでは php_sockets.dll と呼ばれます。
 * </p>
 * <p>
 * 拡張モジュールを読み込むディレクトリは、プラットフォームによって異なります。
 * </p>
 * <p>
 * Windows - <i>php.ini</i> に明記されていない場合、デフォルトでは
 * 拡張モジュールは、C:\php5\ からロードされます。
 * </p>
 * <p>
 * Unix - <i>php.ini</i> に明記されていない場合、デフォルトでは
 * 以下に依存します。
 * PHP をビルドする際に --enable-debug を指定しているか否か
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * 拡張モジュールのロード機能が無効だったり、あるいは
 * 無効化されている(enable_dl でオフにされているか
 * または <i>php.ini</i> で セーフモード が有効になっている)場合は、
 * <b>E_ERROR</b> を発行して実行は停止されます。
 * 指定されたライブラリをロードできず <b>dl</b> が
 * 失敗した場合、<b>FALSE</b> に加えて <b>E_WARNING</b> メッセージが
 * 発行されます。
 */
function dl(string $library): bool {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * プロセスのタイトルを設定する
 * @link http://php.net/manual/ja/function.cli-set-process-title.php
 * @param string $title <p>
 * 新しいタイトル。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function cli_set_process_title(string $title): bool {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 現在のプロセスのタイトルを返す
 * @link http://php.net/manual/ja/function.cli-get-process-title.php
 * @return string 現在のプロセスのタイトルを文字列で返します。エラー時には <b>NULL</b> を返します。
 */
function cli_get_process_title(): string {}

define ('CONNECTION_ABORTED', 1);
define ('CONNECTION_NORMAL', 0);
define ('CONNECTION_TIMEOUT', 2);
define ('INI_USER', 1);
define ('INI_PERDIR', 2);
define ('INI_SYSTEM', 4);
define ('INI_ALL', 7);

/**
 * 通常の INI スキャナモード (PHP 5.3 以降)。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('INI_SCANNER_NORMAL', 0);

/**
 * 生の INI スキャナモード (PHP 5.3 以降)。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('INI_SCANNER_RAW', 1);

/**
 * 型つきの INI スキャナモード (PHP 5.6.1 以降)。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('INI_SCANNER_TYPED', 2);
define ('PHP_URL_SCHEME', 0);

/**
 * パースした URL のホスト名を出力します。
 * @link http://php.net/manual/ja/url.constants.php
 */
define ('PHP_URL_HOST', 1);

/**
 * パースした URL のポート番号を出力します。
 * @link http://php.net/manual/ja/url.constants.php
 */
define ('PHP_URL_PORT', 2);

/**
 * パースした URL のユーザー名を出力します。
 * @link http://php.net/manual/ja/url.constants.php
 */
define ('PHP_URL_USER', 3);

/**
 * パースした URL のパスワードを出力します。
 * @link http://php.net/manual/ja/url.constants.php
 */
define ('PHP_URL_PASS', 4);

/**
 * パースした URL のパスを出力します。
 * @link http://php.net/manual/ja/url.constants.php
 */
define ('PHP_URL_PATH', 5);

/**
 * パースした URL のクエリ文字列を出力します。
 * @link http://php.net/manual/ja/url.constants.php
 */
define ('PHP_URL_QUERY', 6);

/**
 * パースした URL のフラグメント (# 以降の文字列) を出力します。
 * @link http://php.net/manual/ja/url.constants.php
 */
define ('PHP_URL_FRAGMENT', 7);

/**
 * RFC 1738 と
 * application/x-www-form-urlencoded メディアタイプに基づくエンコーディングを行います。
 * つまり、スペースはプラス記号 (+) にエンコードされます。
 * @link http://php.net/manual/ja/url.constants.php
 */
define ('PHP_QUERY_RFC1738', 1);

/**
 * RFC 3986 に基づくエンコーディングを行います。
 * スペースはパーセントエンコードされて、%20 となります。
 * @link http://php.net/manual/ja/url.constants.php
 */
define ('PHP_QUERY_RFC3986', 2);
define ('M_E', 2.718281828459);
define ('M_LOG2E', 1.442695040889);
define ('M_LOG10E', 0.43429448190325);
define ('M_LN2', 0.69314718055995);
define ('M_LN10', 2.302585092994);

/**
 * 端数を切り上げる
 * @link http://php.net/manual/ja/math.constants.php
 */
define ('M_PI', 3.1415926535898);
define ('M_PI_2', 1.5707963267949);
define ('M_PI_4', 0.78539816339745);
define ('M_1_PI', 0.31830988618379);
define ('M_2_PI', 0.63661977236758);
define ('M_SQRTPI', 1.7724538509055);
define ('M_2_SQRTPI', 1.1283791670955);
define ('M_LNPI', 1.1447298858494);
define ('M_EULER', 0.57721566490153);
define ('M_SQRT2', 1.4142135623731);
define ('M_SQRT1_2', 0.70710678118655);
define ('M_SQRT3', 1.7320508075689);
define ('INF', INF);
define ('NAN', NAN);
define ('PHP_ROUND_HALF_UP', 1);

/**
 * 端数を切り捨てる
 * @link http://php.net/manual/ja/math.constants.php
 */
define ('PHP_ROUND_HALF_DOWN', 2);

/**
 * 端数を偶数に丸める
 * @link http://php.net/manual/ja/math.constants.php
 */
define ('PHP_ROUND_HALF_EVEN', 3);

/**
 * 端数を奇数に丸める
 * @link http://php.net/manual/ja/math.constants.php
 */
define ('PHP_ROUND_HALF_ODD', 4);
define ('INFO_GENERAL', 1);

/**
 * PHP クレジット。<b>phpcredits</b>も参照してください。
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('INFO_CREDITS', 2);

/**
 * PHPディレクティブの現在のローカルおよびマスター値。
 * <b>ini_get</b>も参照してください。
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('INFO_CONFIGURATION', 4);

/**
 * ロードされているモジュールとそれぞれの設定。
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('INFO_MODULES', 8);

/**
 * 環境変数に関する情報で、$_ENVでも入手可能です。
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('INFO_ENVIRONMENT', 16);

/**
 * EGPCS (Environment, GET, POST, Cookie, Server)から定義済の変数を表示します。
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('INFO_VARIABLES', 32);

/**
 * PHPライセンス情報。license
 * faqも参照してください。
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('INFO_LICENSE', 64);

/**
 * 未使用
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('INFO_ALL', 4294967295);

/**
 * コア開発者のリスト
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('CREDITS_GROUP', 1);

/**
 * 一般的なクレジット: 言語設計とコンセプト、PHP と
 * PHP SAPIモジュールの作者。
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('CREDITS_GENERAL', 2);

/**
 * PHPのサーバーAPIモジュールとその作者の一覧。
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('CREDITS_SAPI', 4);

/**
 * PHPの拡張モジュールとその作者の一覧。
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('CREDITS_MODULES', 8);

/**
 * ドキュメント作成チームのクレジット
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('CREDITS_DOCS', 16);

/**
 * 通常、他のフラグと組み合わせて使用されます。
 * 他のフラグで示される情報を含む完全に独立したHTMLページを出力する
 * ことを指定します。
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('CREDITS_FULLPAGE', 32);

/**
 * 品質管理チームのクレジット
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('CREDITS_QA', 64);

/**
 * configureオプション、<i>php.ini</i> の場所、構築日、Webサーバー、システム等。
 * @link http://php.net/manual/ja/info.constants.php
 */
define ('CREDITS_ALL', 4294967295);
define ('HTML_SPECIALCHARS', 0);
define ('HTML_ENTITIES', 1);
define ('ENT_COMPAT', 2);
define ('ENT_QUOTES', 3);
define ('ENT_NOQUOTES', 0);
define ('ENT_IGNORE', 4);
define ('ENT_SUBSTITUTE', 8);
define ('ENT_DISALLOWED', 128);
define ('ENT_HTML401', 0);
define ('ENT_XML1', 16);
define ('ENT_XHTML', 32);
define ('ENT_HTML5', 48);
define ('STR_PAD_LEFT', 0);
define ('STR_PAD_RIGHT', 1);
define ('STR_PAD_BOTH', 2);
define ('PATHINFO_DIRNAME', 1);
define ('PATHINFO_BASENAME', 2);
define ('PATHINFO_EXTENSION', 4);

/**
 * PHP 5.2.0 以降。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('PATHINFO_FILENAME', 8);
define ('CHAR_MAX', 127);
define ('LC_CTYPE', 0);
define ('LC_NUMERIC', 1);
define ('LC_TIME', 2);
define ('LC_COLLATE', 3);
define ('LC_MONETARY', 4);
define ('LC_ALL', 6);
define ('LC_MESSAGES', 5);
define ('SEEK_SET', 0);
define ('SEEK_CUR', 1);
define ('SEEK_END', 2);
define ('LOCK_SH', 1);
define ('LOCK_EX', 2);
define ('LOCK_UN', 3);
define ('LOCK_NB', 4);

/**
 * 外部のリソースへの接続が確立されたことを示します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_CONNECT', 2);

/**
 * 指定されたリソースにアクセスするためには、さらに認証情報が必要です。
 * 通常に、<b>STREAM_NOTIFY_SEVERITY_ERR</b> の
 * <i>severity</i> (深刻度) と共に通知されます。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_AUTH_REQUIRED', 3);

/**
 * 認証が完了した(成功または失敗した)ことを示します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_AUTH_RESULT', 10);

/**
 * リソースの mime タイプ が確認されました。
 * どのタイプと判定されたかについては、<i>message</i>
 * を見てください。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_MIME_TYPE_IS', 4);

/**
 * 確認されたリソースのサイズを表します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_FILE_SIZE_IS', 5);

/**
 * 外部リソースへのアクセスは、別の場所にリダイレクトされました。
 * 詳細を知るには、<i>message</i> を調べてみてください。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_REDIRECTED', 6);

/**
 * ストリームにおける転送の進捗が、
 * <i>bytes_transferred</i> または、場合によっては
 * <i>bytes_max</i> に現れていることを示します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_PROGRESS', 7);

/**
 * ストリームにおいて一般的なエラーが発生したことを示します。
 * エラーの詳細については、
 * <i>message</i> と <i>message_code</i>
 * を調べてみてください。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_FAILURE', 9);

/**
 * これ以上ストリームにデータがないことを示します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_COMPLETED', 8);

/**
 * 該当するストリームにおいて、リクエストされたリモートのドメイン名の
 * 解決に成功したか、失敗したことを示します。
 * このとき、何が起こっているかについては、
 * <i>severity</i> を参照ください。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_RESOLVE', 1);

/**
 * 正常な状態における、エラーでない通知があることを示します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_SEVERITY_INFO', 0);

/**
 * 致命的でないエラーが発生したことを示します。処理は継続されます。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_SEVERITY_WARN', 1);

/**
 * 致命的なエラーが発生したことを示します。処理は中断されます。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_NOTIFY_SEVERITY_ERR', 2);

/**
 * <b>stream_filter_append</b> または
 * <b>stream_filter_prepend</b> と共に使われます。
 * 指定されたフィルタが 読み込みのときのみ
 * 適用されることを示します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_FILTER_READ', 1);

/**
 * <b>stream_filter_append</b> または
 * <b>stream_filter_prepend</b> と共に使われます。
 * 指定されたフィルタが 書き込みのときのみ
 * 適用されることを示します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_FILTER_WRITE', 2);

/**
 * この定数は右の値と等価です:
 * STREAM_FILTER_READ |
 * STREAM_FILTER_WRITE
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_FILTER_ALL', 3);

/**
 * <b>stream_socket_client</b>を使って
 * 開かれたソケットが、セッションをまたいでも保持されるよう
 * 指示します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_CLIENT_PERSISTENT', 1);

/**
 * 非同期的にソケットを開きます。このオプションは、
 * <b>STREAM_CLIENT_CONNECT</b> フラグとともに使用する
 * 必要があります。
 * <b>stream_socket_client</b> と共に使われます。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_CLIENT_ASYNC_CONNECT', 2);

/**
 * クライアントソケット接続を開きます。クライアントソケットは
 * 常にこのフラグを含んでいる必要があります。
 * <b>stream_socket_client</b> と共に使われます。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_CLIENT_CONNECT', 4);
define ('STREAM_CRYPTO_METHOD_ANY_CLIENT', 63);
define ('STREAM_CRYPTO_METHOD_SSLv2_CLIENT', 3);
define ('STREAM_CRYPTO_METHOD_SSLv3_CLIENT', 5);
define ('STREAM_CRYPTO_METHOD_SSLv23_CLIENT', 57);
define ('STREAM_CRYPTO_METHOD_TLS_CLIENT', 9);
define ('STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT', 9);
define ('STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT', 17);
define ('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT', 33);
define ('STREAM_CRYPTO_METHOD_ANY_SERVER', 62);
define ('STREAM_CRYPTO_METHOD_SSLv2_SERVER', 2);
define ('STREAM_CRYPTO_METHOD_SSLv3_SERVER', 4);
define ('STREAM_CRYPTO_METHOD_SSLv23_SERVER', 56);
define ('STREAM_CRYPTO_METHOD_TLS_SERVER', 8);
define ('STREAM_CRYPTO_METHOD_TLSv1_0_SERVER', 8);
define ('STREAM_CRYPTO_METHOD_TLSv1_1_SERVER', 16);
define ('STREAM_CRYPTO_METHOD_TLSv1_2_SERVER', 32);

/**
 * <b>stream_socket_shutdown</b> で使用し、
 * それ以降の受信を無効にします。
 * PHP 5.2.1 で追加されました。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_SHUT_RD', 0);

/**
 * <b>stream_socket_shutdown</b> で使用し、
 * それ以降の送信を無効にします。
 * PHP 5.2.1 で追加されました。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_SHUT_WR', 1);

/**
 * <b>stream_socket_shutdown</b> で使用し、
 * それ以降の送受信を無効にします。
 * PHP 5.2.1 で追加されました。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_SHUT_RDWR', 2);

/**
 * Internet Protocol バージョン 4（IPv4）です。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_PF_INET', 2);

/**
 * Internet Protocol バージョン 6（IPv6）です。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_PF_INET6', 10);

/**
 * Unix システムの内部プロトコルです。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_PF_UNIX', 1);

/**
 * IP ソケットを提供します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_IPPROTO_IP', 0);

/**
 * TCP ソケットを提供します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_IPPROTO_TCP', 6);

/**
 * UDP ソケットを提供します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_IPPROTO_UDP', 17);

/**
 * ICMP ソケットを提供します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_IPPROTO_ICMP', 1);

/**
 * RAW ソケットを提供します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_IPPROTO_RAW', 255);

/**
 * 帯域外データを転送するための、シーケンシャルで双方向の
 * バイトストリーム（例: TCP）を提供します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_SOCK_STREAM', 1);

/**
 * データグラムを提供します。これはコネクションレスのメッセージ
 * （例: UDP）です。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_SOCK_DGRAM', 2);

/**
 * raw ソケットを提供します。これは内部のネットワークプロトコルや
 * インターフェイスへのアクセス機能を提供します。通常、この形式の
 * ソケットは root ユーザーが使用します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_SOCK_RAW', 3);

/**
 * シーケンシャルパケットストリームソケットを提供します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_SOCK_SEQPACKET', 5);

/**
 * RDM（Reliably-delivered messages）ソケットを提供します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_SOCK_RDM', 4);
define ('STREAM_PEEK', 2);
define ('STREAM_OOB', 1);

/**
 * <b>stream_socket_server</b> で開かれたソケットが
 * 特定のターゲットに関連付けられることを示します。
 * サーバーソケットには常にこのフラグが与えられているはずです。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_SERVER_BIND', 4);

/**
 * <b>stream_socket_server</b> で開かれ、
 * <b>STREAM_SERVER_BIND</b> によってターゲットに
 * 関連付けられたストリームに、ソケットに対して接続待ちを開始するよう
 * 指示します。
 * 接続指向の転送（TCP のような）はこのフラグを使用する必要があります。
 * それ以外の場合はサーバーソケットが有効になりません。
 * このフラグを非接続指向の転送（UDP のような）に使用するとエラーになります。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_SERVER_LISTEN', 8);

/**
 * <i>filename</i> を
 * include_path
 * から探します (PHP 5 以降)。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('FILE_USE_INCLUDE_PATH', 1);

/**
 * EOL (行末) 文字を取り除きます (PHP 5 以降)。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('FILE_IGNORE_NEW_LINES', 2);

/**
 * 空行を読み飛ばします (PHP 5 以降)。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('FILE_SKIP_EMPTY_LINES', 4);

/**
 * 既存のファイルに追記します。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('FILE_APPEND', 8);
define ('FILE_NO_DEFAULT_CONTEXT', 16);

/**
 * <p>
 * テキストモード (PHP 5.2.7 以降)。
 * <p>
 * この定数は何の効果もありません。
 * 前方互換性 のためだけに用意されています。
 * </p>
 * </p>
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('FILE_TEXT', 0);

/**
 * <p>
 * バイナリモード (PHP 5.2.7 以降)。
 * <p>
 * この定数は何の効果もありません。
 * 前方互換性 のためだけに用意されています。
 * </p>
 * </p>
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('FILE_BINARY', 0);

/**
 * バックスラッシュのエスケープを無効にする。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('FNM_NOESCAPE', 2);

/**
 * 文字列中のスラッシュが、指定したパターン内のスラッシュにのみマッチする。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('FNM_PATHNAME', 1);

/**
 * 文字列の先頭のピリオドが、指定したパターン内のピリオドにのみマッチする。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('FNM_PERIOD', 4);

/**
 * 大文字小文字を区別しないマッチを行う。GNU 拡張の一部。
 * @link http://php.net/manual/ja/filesystem.constants.php
 */
define ('FNM_CASEFOLD', 16);

/**
 * 返値: ユーザー空間のフィルタが
 * バケットを <i>$out</i> に返したことを
 * 示します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('PSFS_PASS_ON', 2);

/**
 * 返値: ユーザー空間のフィルタが
 * <i>$out</i> にバケットを返さなかったことを
 * 示します。(つまり、変換されたデータを返す用意ができていないという
 * ことです。)
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('PSFS_FEED_ME', 1);

/**
 * 返値: ユーザー空間のフィルタにおいて、
 * 復旧不可能なエラーが発生したことを示します。
 * (つまり、不正なデータを受け取ったということです。)
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('PSFS_ERR_FATAL', 0);

/**
 * 通常の読み書き。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('PSFS_FLAG_NORMAL', 0);

/**
 * インクリメンタルなフラッシュ。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('PSFS_FLAG_FLUSH_INC', 1);

/**
 * 最後に閉じる前にフラッシュ。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('PSFS_FLAG_FLUSH_CLOSE', 2);

/**
 * <p>
 * アルゴリズムを指定しなかったときのデフォルトとして使うアルゴリズム。
 * PHP のバージョンが上がるときに、
 * その時点でより強力なハッシュアルゴリズムに対応していればデフォルトが変わる可能性があります。
 * </p>
 * <p>
 * この定数の値は、今後変わる可能性がある (きっと変わる) ことに注意しましょう。
 * つまり、生成されるハッシュの長さも変わる可能性があるということです。
 * したがって、<b>PASSWORD_DEFAULT</b> を使う場合は、
 * ハッシュの格納先は 60 文字以上でも格納できるようにしておく必要があります
 * (255 文字程度にしておくことをおすすめします)。
 * </p>
 * <p>
 * この定数の値
 * </p>
 * PHP 5.5.0 - <b>PASSWORD_BCRYPT</b>
 * @link http://php.net/manual/ja/password.constants.php
 */
define ('PASSWORD_DEFAULT', 1);

/**
 * <p>
 * <b>PASSWORD_BCRYPT</b> を使うと、
 * <b>CRYPT_BLOWFISH</b> アルゴリズムで新たなパスワードハッシュを作ります。
 * </p>
 * <p>
 * これは常に、"$2y$" crypt フォーマットを使ったハッシュになります。
 * 長さは常に 60 文字です。
 * </p>
 * <p>
 * サポートするオプション
 * </p>
 * <p>
 * salt - パスワードのハッシュに使うソルトを手動で設定します。
 * これは、自動生成されたソルトを上書きすることに注意しましょう。
 * </p>
 * <p>
 * 省略した場合は、パスワードをハッシュするたびに <b>password_hash</b>
 * がランダムなソルトを自動生成します。これは意図したとおりの操作モードです。
 * および PHP 7.0.0 以降でソルト・オプションは非推奨になりました。
 * </p>
 * @link http://php.net/manual/ja/password.constants.php
 */
define ('PASSWORD_BCRYPT', 1);
define ('PASSWORD_BCRYPT_DEFAULT_COST', 10);
define ('ABDAY_1', 131072);
define ('ABDAY_2', 131073);
define ('ABDAY_3', 131074);
define ('ABDAY_4', 131075);
define ('ABDAY_5', 131076);
define ('ABDAY_6', 131077);
define ('ABDAY_7', 131078);
define ('DAY_1', 131079);
define ('DAY_2', 131080);
define ('DAY_3', 131081);
define ('DAY_4', 131082);
define ('DAY_5', 131083);
define ('DAY_6', 131084);
define ('DAY_7', 131085);
define ('ABMON_1', 131086);
define ('ABMON_2', 131087);
define ('ABMON_3', 131088);
define ('ABMON_4', 131089);
define ('ABMON_5', 131090);
define ('ABMON_6', 131091);
define ('ABMON_7', 131092);
define ('ABMON_8', 131093);
define ('ABMON_9', 131094);
define ('ABMON_10', 131095);
define ('ABMON_11', 131096);
define ('ABMON_12', 131097);
define ('MON_1', 131098);
define ('MON_2', 131099);
define ('MON_3', 131100);
define ('MON_4', 131101);
define ('MON_5', 131102);
define ('MON_6', 131103);
define ('MON_7', 131104);
define ('MON_8', 131105);
define ('MON_9', 131106);
define ('MON_10', 131107);
define ('MON_11', 131108);
define ('MON_12', 131109);
define ('AM_STR', 131110);
define ('PM_STR', 131111);
define ('D_T_FMT', 131112);
define ('D_FMT', 131113);
define ('T_FMT', 131114);
define ('T_FMT_AMPM', 131115);
define ('ERA', 131116);
define ('ERA_D_T_FMT', 131120);
define ('ERA_D_FMT', 131118);
define ('ERA_T_FMT', 131121);
define ('ALT_DIGITS', 131119);
define ('CRNCYSTR', 262159);
define ('RADIXCHAR', 65536);
define ('THOUSEP', 65537);
define ('YESEXPR', 327680);
define ('NOEXPR', 327681);
define ('CODESET', 14);
define ('CRYPT_SALT_LENGTH', 123);
define ('CRYPT_STD_DES', 1);
define ('CRYPT_EXT_DES', 1);
define ('CRYPT_MD5', 1);
define ('CRYPT_BLOWFISH', 1);
define ('CRYPT_SHA256', 1);
define ('CRYPT_SHA512', 1);
define ('DIRECTORY_SEPARATOR', "/");

/**
 * Windows の場合はセミコロン、それ以外の場合はコロンとなります。
 * @link http://php.net/manual/ja/dir.constants.php
 */
define ('PATH_SEPARATOR', ":");

/**
 * PHP 5.4.0 以降で使用可能です。
 * @link http://php.net/manual/ja/dir.constants.php
 */
define ('SCANDIR_SORT_ASCENDING', 0);

/**
 * PHP 5.4.0 以降で使用可能です。
 * @link http://php.net/manual/ja/dir.constants.php
 */
define ('SCANDIR_SORT_DESCENDING', 1);

/**
 * PHP 5.4.0 以降で使用可能です。
 * @link http://php.net/manual/ja/dir.constants.php
 */
define ('SCANDIR_SORT_NONE', 2);
define ('GLOB_BRACE', 1024);
define ('GLOB_MARK', 2);
define ('GLOB_NOSORT', 4);
define ('GLOB_NOCHECK', 16);
define ('GLOB_NOESCAPE', 64);
define ('GLOB_ERR', 1);
define ('GLOB_ONLYDIR', 8192);
define ('GLOB_AVAILABLE_FLAGS', 9303);

/**
 * システムは使用不可
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_EMERG', 0);

/**
 * アクションを直ちに起こすことが必要
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_ALERT', 1);

/**
 * 危機的な条件
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_CRIT', 2);

/**
 * エラー条件
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_ERR', 3);

/**
 * 警告条件
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_WARNING', 4);

/**
 * 正常、しかし、注意すべき条件
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_NOTICE', 5);

/**
 * 情報メッセージ
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_INFO', 6);

/**
 * デバッグレベルメッセージ
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_DEBUG', 7);

/**
 * カーネルメッセージ
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_KERN', 0);

/**
 * 一般ユーザーレベルのメッセージ
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_USER', 8);

/**
 * メールサブシステム
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_MAIL', 16);

/**
 * その他のシステムデーモン
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_DAEMON', 24);

/**
 * セキュリティ/認証メッセージ（<b>LOG_AUTHPRIV</b>が定義されているシステムであれば
 * 代わりにそれを使用してください）
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_AUTH', 32);

/**
 * syslogdによって内部で生成されたメッセージ
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_SYSLOG', 40);

/**
 * ラインプリンタサブシステム
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_LPR', 48);

/**
 * USENETニュースサブシステム
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_NEWS', 56);

/**
 * UUCPサブシステム
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_UUCP', 64);

/**
 * 時刻デーモン (cron and at)
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_CRON', 72);

/**
 * セキュリティ/認証メッセージ (private)
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_AUTHPRIV', 80);
define ('LOG_LOCAL0', 128);
define ('LOG_LOCAL1', 136);
define ('LOG_LOCAL2', 144);
define ('LOG_LOCAL3', 152);
define ('LOG_LOCAL4', 160);
define ('LOG_LOCAL5', 168);
define ('LOG_LOCAL6', 176);
define ('LOG_LOCAL7', 184);

/**
 * 各メッセージにプロセスIDを含める
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_PID', 1);

/**
 * システムロガーにデータを送信する際にエラーが発生した場合、
 * システムコンソールに直接書き込む。
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_CONS', 2);

/**
 * (デフォルト) 最初のメッセージが記録されるまで接続のオープンを
 * 遅延させる。
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_ODELAY', 4);

/**
 * ロガーにただちに接続をオープンする。
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_NDELAY', 8);
define ('LOG_NOWAIT', 16);

/**
 * 標準エラー出力にもログメッセージを出力する
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('LOG_PERROR', 32);
define ('EXTR_OVERWRITE', 0);
define ('EXTR_SKIP', 1);
define ('EXTR_PREFIX_SAME', 2);
define ('EXTR_PREFIX_ALL', 3);
define ('EXTR_PREFIX_INVALID', 4);
define ('EXTR_PREFIX_IF_EXISTS', 5);
define ('EXTR_IF_EXISTS', 6);
define ('EXTR_REFS', 256);

/**
 * <b>SORT_ASC</b>は、
 * <b>array_multisort</b>でソート順を昇順にするために
 * 使用されます。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('SORT_ASC', 4);

/**
 * <b>SORT_DESC</b>は、
 * <b>array_multisort</b>でソート順を降順にするために
 * 使用されます。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('SORT_DESC', 3);

/**
 * <b>SORT_REGULAR</b>は通常の比較するために使用され
 * ます。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('SORT_REGULAR', 0);

/**
 * <b>SORT_NUMERIC</b>は数値で比較を行うために使用さ
 * れます。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('SORT_NUMERIC', 1);

/**
 * <b>SORT_STRING</b>は文字列として比較を行うために使
 * 用されます。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('SORT_STRING', 2);

/**
 * <b>SORT_LOCALE_STRING</b>は現在のロケールに基づいた
 * 文字列として比較を行うために使用されます。 PHP 5.0.2で追加
 * されました。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('SORT_LOCALE_STRING', 5);

/**
 * <b>SORT_NATURAL</b> は、要素の比較を文字列として行い、
 * <b>natsort</b> と同様の「自然順」で比較します。
 * PHP 5.4.0 で追加されました。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('SORT_NATURAL', 6);

/**
 * <b>SORT_FLAG_CASE</b> は
 * <b>SORT_STRING</b> や
 * <b>SORT_NATURAL</b> と (ビット OR で) 組み合わせて使い、
 * 文字列のソートで大文字小文字を区別しないようにします。PHP 5.4.0 で追加されました。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('SORT_FLAG_CASE', 8);

/**
 * <b>CASE_LOWER</b>は、
 * <b>array_change_key_case</b>で使用され、
 * 配列のキーを小文字に変換するために使用されます。小文字は、
 * <b>array_change_key_case</b>のデフォルトのケースで
 * もあります。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('CASE_LOWER', 0);

/**
 * <b>CASE_UPPER</b>は、
 * <b>array_change_key_case</b>で使用され、配列のキー
 * を大文字に変換するために使用されます。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('CASE_UPPER', 1);
define ('COUNT_NORMAL', 0);
define ('COUNT_RECURSIVE', 1);

/**
 * <b>ARRAY_FILTER_USE_BOTH</b> は
 * <b>array_filter</b> で使うもので、
 * 値とキーの両方をコールバック関数の引数として渡すよう指示します。
 * PHP 5.6.0 で追加されました。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('ARRAY_FILTER_USE_BOTH', 1);

/**
 * <b>ARRAY_FILTER_USE_KEY</b> は
 * <b>array_filter</b> で使うもので、
 * 各キーをコールバック関数の最初の引数として渡すよう指示します。
 * PHP 5.6.0 で追加されました。
 * @link http://php.net/manual/ja/array.constants.php
 */
define ('ARRAY_FILTER_USE_KEY', 2);
define ('ASSERT_ACTIVE', 1);
define ('ASSERT_CALLBACK', 2);
define ('ASSERT_BAIL', 3);
define ('ASSERT_WARNING', 4);
define ('ASSERT_QUIET_EVAL', 5);
define ('ASSERT_EXCEPTION', 6);

/**
 * フラグ: stream が
 * include_path を使ったかどうかを示します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_USE_PATH', 1);
define ('STREAM_IGNORE_URL', 2);

/**
 * フラグ: ストリームを開く際に、
 * ユーザー空間にある wrapper の側で、
 * <b>trigger_error</b> を使ってエラーを発生させるかどうかを
 * 示します。もし、このフラグがセットされていない場合は、
 * ユーザーの側でエラーを投げてはいけません。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_REPORT_ERRORS', 8);

/**
 * このフラグは、拡張モジュール内で、本当にストリームをランダムにシーク
 * する必要があるときに有用です。
 * いくつかの種類のストリームはそのままの形ではシークができないことが
 * あるので、このフラグをセットしておくと、ストリーム API は、
 * まず開かれたストリームがシーク可能かどうかを調べ、シークできない場合は、
 * ストリームのデータをシーク可能な一時的なストレージ (テンポラリファイル
 * あるいはメモリーストリーム) にコピーします。
 * このフラグは、ストリームに対してシーク動作を行ってから書き込みを行うような
 * 場合には適していません。アクセス対象のストリームは当初アクセスを要求した
 * リソースに必ずしも関連付けられているとは限らないからです。
 * もし、要求されたリソースがネットワークベースであった場合、
 * この関数は、すべてのデータが読み込まれるまでブロックします。
 * @link http://php.net/manual/ja/internals2.ze1.streams.constants.php
 */
define ('STREAM_MUST_SEEK', 16);
define ('STREAM_URL_STAT_LINK', 1);
define ('STREAM_URL_STAT_QUIET', 2);
define ('STREAM_MKDIR_RECURSIVE', 1);
define ('STREAM_IS_URL', 1);
define ('STREAM_OPTION_BLOCKING', 1);
define ('STREAM_OPTION_READ_TIMEOUT', 4);
define ('STREAM_OPTION_READ_BUFFER', 2);
define ('STREAM_OPTION_WRITE_BUFFER', 3);
define ('STREAM_BUFFER_NONE', 0);
define ('STREAM_BUFFER_LINE', 1);
define ('STREAM_BUFFER_FULL', 2);

/**
 * <b>stream_cast</b>
 * が他からコールされた (上記参照) 場合のストリームのキャスト。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_CAST_AS_STREAM', 0);

/**
 * <b>stream_select</b> が
 * <b>stream_cast</b> をコールしている場合のストリームのキャスト。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_CAST_FOR_SELECT', 3);

/**
 * <b>stream_metadata</b> と組み合わせて使い、<b>touch</b> のコールを指定します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_META_TOUCH', 1);

/**
 * <b>stream_metadata</b> と組み合わせて使い、<b>chown</b> のコールを指定します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_META_OWNER', 3);

/**
 * <b>stream_metadata</b> と組み合わせて使い、<b>chown</b> のコールを指定します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_META_OWNER_NAME', 2);

/**
 * <b>stream_metadata</b> と組み合わせて使い、<b>chgrp</b> のコールを指定します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_META_GROUP', 5);

/**
 * <b>stream_metadata</b> と組み合わせて使い、<b>chgrp</b> のコールを指定します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_META_GROUP_NAME', 4);

/**
 * <b>stream_metadata</b> と組み合わせて使い、<b>chmod</b> のコールを指定します。
 * @link http://php.net/manual/ja/stream.constants.php
 */
define ('STREAM_META_ACCESS', 6);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_GIF', 1);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_JPEG', 2);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_PNG', 3);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_SWF', 4);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_PSD', 5);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_BMP', 6);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_TIFF_II', 7);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_TIFF_MM', 8);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_JPC', 9);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_JP2', 10);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_JPX', 11);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_JB2', 12);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_SWC', 13);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_IFF', 14);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_WBMP', 15);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_JPEG2000', 9);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_XBM', 16);

/**
 * 画像タイプ定数。<b>image_type_to_mime_type</b>
 * や <b>image_type_to_extension</b> 関数で使用します。
 * (PHP 5.3.0 以降で利用可能)
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMAGETYPE_ICO', 17);
define ('IMAGETYPE_UNKNOWN', 0);
define ('IMAGETYPE_COUNT', 18);

/**
 * IPv4アドレスリソース
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('DNS_A', 1);

/**
 * Authoritative Name Serverリソース
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('DNS_NS', 2);

/**
 * エイリアス(Canonical Name)リソース
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('DNS_CNAME', 16);

/**
 * 認証リソースの開始
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('DNS_SOA', 32);

/**
 * ポインタリソース
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('DNS_PTR', 2048);

/**
 * ホスト情報リソース（これらの値の意味については、IANA の
 * Operating System Names
 * を参照ください）
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('DNS_HINFO', 4096);
define ('DNS_CAA', 8192);

/**
 * Mail Exchangerリソース
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('DNS_MX', 16384);

/**
 * テキストリソース
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('DNS_TXT', 32768);
define ('DNS_SRV', 33554432);
define ('DNS_NAPTR', 67108864);

/**
 * IPv6アドレスリソース
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('DNS_AAAA', 134217728);
define ('DNS_A6', 16777216);

/**
 * 全てのリソースレコード。多くのシステムでは、
 * これは、全てのリソースレコードを返します。
 * しかし、危機的な状況には対応できません。代わりに
 * <b>DNS_ALL</b> を試してください。
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('DNS_ANY', 268435456);

/**
 * 利用可能なレコード型毎のネームサーバーへの反復クエリ。
 * @link http://php.net/manual/ja/network.constants.php
 */
define ('DNS_ALL', 251721779);

// End of standard v.7.0.19
?>
