<?php

// Start of fileinfo v.1.0.5

/**
 * このクラスは、fileinfo 関数にオブジェクト指向のインターフェイスを提供します。
 * @link http://php.net/manual/ja/class.finfo.php
 */
class finfo  {

	/**
	 * @param $options [optional]
	 * @param $arg [optional]
	 */
	public function finfo($options, $arg) {}

	/**
	 * (PHP &gt;= 5.3.0, PECL fileinfo &gt;= 0.1.0)<br/>
	 * libmagic のオプションを設定する
	 * @link http://php.net/manual/ja/function.finfo-set-flags.php
	 * @param int $options <p>
	 * ひとつあるいは複数のFileinfo
	 * 定数の組み合わせ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function set_flags(int $options): bool {}

	/**
	 * (PHP &gt;= 5.3.0, PECL fileinfo &gt;= 0.1.0)<br/>
	 * ファイルについての情報を返す
	 * @link http://php.net/manual/ja/function.finfo-file.php
	 * @param string $file_name [optional] <p>
	 * 調べるファイルの名前。
	 * </p>
	 * @param int $options [optional] <p>
	 * ひとつあるいは複数のFileinfo
	 * 定数の組み合わせ。
	 * </p>
	 * @param resource $context [optional] <p>
	 * contexts の説明については、 を参照ください。
	 * </p>
	 * @return string <i>file_name</i> のテキスト表現、あるいはエラーが発生した場合に
	 * <b>FALSE</b> を返します。
	 */
	public function file(string $file_name = null, int $options = FILEINFO_NONE, $context = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL fileinfo &gt;= 0.1.0)<br/>
	 * 文字列バッファの情報を返す
	 * @link http://php.net/manual/ja/function.finfo-buffer.php
	 * @param string $string [optional] <p>
	 * 調べるファイルの内容。
	 * </p>
	 * @param int $options [optional] <p>
	 * ひとつあるいは複数のFileinfo
	 * 定数の組み合わせ。
	 * </p>
	 * @param resource $context [optional]
	 * @return string <i>string</i> のテキスト表現、あるいはエラーが発生した場合に
	 * <b>FALSE</b> を返します。
	 */
	public function buffer(string $string = null, int $options = FILEINFO_NONE, $context = null): string {}

}

/**
 * (PHP &gt;= 5.3.0, PECL fileinfo &gt;= 0.1.0)<br/>
 * 新しい fileinfo リソースを作成する
 * @link http://php.net/manual/ja/function.finfo-open.php
 * @param int $options [optional] <p>
 * ひとつあるいは複数のFileinfo
 * 定数の組み合わせ。
 * </p>
 * @param string $magic_file [optional] <p>
 * magic データベースファイルの名前。通常は
 * /path/to/magic.mime のようになります。
 * 指定されなかった場合は、環境変数 MAGIC
 * の値が使用されます。この環境変数も設定されていない場合は、
 * PHP の組み込みの magic データベースを使います。
 * </p>
 * <p>
 * <b>NULL</b> あるいは空文字列は、デフォルト値と同じ意味となります。
 * </p>
 * @return mixed (手続き型の場合のみ) 成功した場合に magic データベースリソース、失敗した場合に <b>FALSE</b> を返します。
 */
function finfo_open(int $options = FILEINFO_NONE, string $magic_file = null) {}

/**
 * (PHP &gt;= 5.3.0, PECL fileinfo &gt;= 0.1.0)<br/>
 * fileinfo リソースを閉じる
 * @link http://php.net/manual/ja/function.finfo-close.php
 * @param $finfo
 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function finfo_close($finfo) {}

/**
 * (PHP &gt;= 5.3.0, PECL fileinfo &gt;= 0.1.0)<br/>
 * libmagic のオプションを設定する
 * @link http://php.net/manual/ja/function.finfo-set-flags.php
 * @param $finfo
 * @param $options
 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function finfo_set_flags($finfo, $options) {}

/**
 * (PHP &gt;= 5.3.0, PECL fileinfo &gt;= 0.1.0)<br/>
 * ファイルについての情報を返す
 * @link http://php.net/manual/ja/function.finfo-file.php
 * @param $finfo
 * @param $filename
 * @param $options [optional]
 * @param $context [optional]
 * @return mixed <i>file_name</i> のテキスト表現、あるいはエラーが発生した場合に
 * <b>FALSE</b> を返します。
 */
function finfo_file($finfo, $filename, $options, $context) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL fileinfo &gt;= 0.1.0)<br/>
 * 文字列バッファの情報を返す
 * @link http://php.net/manual/ja/function.finfo-buffer.php
 * @param $finfo
 * @param $string
 * @param $options [optional]
 * @param $context [optional]
 * @return mixed <i>string</i> のテキスト表現、あるいはエラーが発生した場合に
 * <b>FALSE</b> を返します。
 */
function finfo_buffer($finfo, $string, $options, $context) {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * ファイルの MIME Content-type を検出する
 * @link http://php.net/manual/ja/function.mime-content-type.php
 * @param string $filename <p>
 * 調べるファイルへのパス。
 * </p>
 * @return string Content type を MIME 形式で返します。
 * たとえば text/plain
 * あるいは application/octet-stream のような形式です。
 */
function mime_content_type(string $filename): string {}


/**
 * 特別な処理を行いません。
 * @link http://php.net/manual/ja/fileinfo.constants.php
 */
define ('FILEINFO_NONE', 0);

/**
 * シンボリックリンクのリンク先をたどります。
 * @link http://php.net/manual/ja/fileinfo.constants.php
 */
define ('FILEINFO_SYMLINK', 2);

/**
 * RFC 2045 で定義された mime タイプと mime エンコーディングを返します。
 * @link http://php.net/manual/ja/fileinfo.constants.php
 */
define ('FILEINFO_MIME', 1040);

/**
 * mime タイプを返します。
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/fileinfo.constants.php
 */
define ('FILEINFO_MIME_TYPE', 16);

/**
 * ファイルの mime エンコーディングを返します。
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/fileinfo.constants.php
 */
define ('FILEINFO_MIME_ENCODING', 1024);

/**
 * ブロックデバイスあるいはキャラクタデバイスの内容を探します。
 * @link http://php.net/manual/ja/fileinfo.constants.php
 */
define ('FILEINFO_DEVICES', 8);

/**
 * 最初に見つかったものだけでなく、一致するものをすべて返します。
 * @link http://php.net/manual/ja/fileinfo.constants.php
 */
define ('FILEINFO_CONTINUE', 32);

/**
 * 可能な限り、元の最終アクセス時刻を保持します。
 * @link http://php.net/manual/ja/fileinfo.constants.php
 */
define ('FILEINFO_PRESERVE_ATIME', 128);

/**
 * 表示できない文字を \ooo
 * 形式の 8 進表現に変換しません。
 * @link http://php.net/manual/ja/fileinfo.constants.php
 */
define ('FILEINFO_RAW', 256);

// End of fileinfo v.1.0.5
?>
