<?php



/**
 * <p>このクラスは、fileinfo 関数にオブジェクト指向のインターフェイスを提供します。</p>
 * @link http://php.net/manual/ja/class.finfo.php
 * @since PHP 5 >= 5.3.0, PHP 7, PECL fileinfo >= 0.1.0
 */
class finfo {

	/**
	 * finfo_open() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>finfo_open()</code></p>
	 * @param int $options <p>ひとつあるいは複数のFileinfo 定数の組み合わせ。</p>
	 * @param string $magic_file <p>magic データベースファイルの名前。通常は /path/to/magic.mime のようになります。 指定されなかった場合は、環境変数 <i>MAGIC</i> の値が使用されます。この環境変数も設定されていない場合は、 PHP の組み込みの magic データベースを使います。</p> <p><b><code>NULL</code></b> あるいは空文字列は、デフォルト値と同じ意味となります。</p>
	 * @return resource
	 * @link http://php.net/manual/ja/finfo.construct.php
	 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
	 */
	function __construct(int $options = FILEINFO_NONE, string $magic_file = NULL) {}

	/**
	 * finfo_buffer() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 finfo_buffer()</p>
	 * @link http://php.net/manual/ja/finfo.buffer.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL fileinfo >= 0.1.0
	 */
	function buffer() {}

	/**
	 * finfo_file() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 finfo_file()</p>
	 * @link http://php.net/manual/ja/finfo.file.php
	 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
	 */
	function file() {}

	/**
	 * finfo_set_flags() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 finfo_set_flags()</p>
	 * @link http://php.net/manual/ja/finfo.set-flags.php
	 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
	 */
	function set_flags() {}
}

/**
 * 文字列バッファの情報を返す
 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、バイナリデータの情報を文字列形式で返すために使用します。</p>
 * @param resource $finfo <p><code>finfo_open()</code> が返す fileinfo リソース。</p>
 * @param string $string <p>調べるファイルの内容。</p>
 * @param int $options <p>ひとつあるいは複数のFileinfo 定数の組み合わせ。</p>
 * @param resource $context
 * @return string <p><code>string</code> のテキスト表現、あるいはエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.finfo-buffer.php
 * @see finfo_file()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL fileinfo >= 0.1.0
 */
function finfo_buffer($finfo, string $string = NULL, int $options = FILEINFO_NONE, $context = NULL): string {}

/**
 * fileinfo リソースを閉じる
 * <p>この関数は、<code>finfo_open()</code> がオープンしたリソースを閉じます。</p>
 * @param resource $finfo <p><code>finfo_open()</code> が返す fileinfo リソース。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.finfo-close.php
 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
 */
function finfo_close($finfo): bool {}

/**
 * ファイルについての情報を返す
 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、ファイルについての情報を返すために使用します。</p>
 * @param resource $finfo <p><code>finfo_open()</code> が返す fileinfo リソース。</p>
 * @param string $file_name <p>調べるファイルの名前。</p>
 * @param int $options <p>ひとつあるいは複数のFileinfo 定数の組み合わせ。</p>
 * @param resource $context <p><i>contexts</i> の説明については、ストリーム 関数 を参照ください。</p>
 * @return string <p><code>file_name</code> のテキスト表現、あるいはエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.finfo-file.php
 * @see finfo_buffer()
 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
 */
function finfo_file($finfo, string $file_name = NULL, int $options = FILEINFO_NONE, $context = NULL): string {}

/**
 * 新しい fileinfo リソースを作成する
 * <p>手続き型</p><p>オブジェクト指向型 (コンストラクタ)</p><p>この関数は、magic データベースをオープンしてそのリソースを返します。</p>
 * @param int $options <p>ひとつあるいは複数のFileinfo 定数の組み合わせ。</p>
 * @param string $magic_file <p>magic データベースファイルの名前。通常は /path/to/magic.mime のようになります。 指定されなかった場合は、環境変数 <i>MAGIC</i> の値が使用されます。この環境変数も設定されていない場合は、 PHP の組み込みの magic データベースを使います。</p> <p><b><code>NULL</code></b> あるいは空文字列は、デフォルト値と同じ意味となります。</p>
 * @return resource <p>(手続き型の場合のみ) 成功した場合に magic データベースリソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.finfo-open.php
 * @see finfo_close()
 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
 */
function finfo_open(int $options = FILEINFO_NONE, string $magic_file = NULL) {}

/**
 * libmagic のオプションを設定する
 * <p>手続き型</p><p>オブジェクト指向型</p><p>この関数は、さまざまな Fileinfo オプションを設定します。 <code>finfo_open()</code> やその他の Fileinfo 関数で、 オプションを直接指定することも可能です。</p>
 * @param resource $finfo <p><code>finfo_open()</code> が返す fileinfo リソース。</p>
 * @param int $options <p>ひとつあるいは複数のFileinfo 定数の組み合わせ。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.finfo-set-flags.php
 * @since PHP >= 5.3.0, PECL fileinfo >= 0.1.0
 */
function finfo_set_flags($finfo, int $options): bool {}

/**
 * ファイルの MIME Content-type を検出する
 * <p>magic.mime ファイルの情報を用いて、 ファイルの MIME content type を返します。</p>
 * @param string $filename <p>調べるファイルへのパス。</p>
 * @return string <p>Content type を MIME 形式で返します。 たとえば <i>text/plain</i> あるいは <i>application/octet-stream</i> のような形式です。</p>
 * @link http://php.net/manual/ja/function.mime-content-type.php
 * @see finfo_file(), finfo_buffer()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function mime_content_type(string $filename): string {}

/**
 * 圧縮されたファイルを伸張します。   スレッドセーフに関連する問題のため、PHP 5.3.0 以降は無効化されています。
 */
define('FILEINFO_COMPRESS', null);

/**
 * 最初に見つかったものだけでなく、一致するものをすべて返します。
 */
define('FILEINFO_CONTINUE', 32);

/**
 * ブロックデバイスあるいはキャラクタデバイスの内容を探します。
 */
define('FILEINFO_DEVICES', 8);

/**
 * ファイルから検出した MIME タイプに対応する適切な拡張子を返します。 the file.   一般的な拡張子が複数存在するもの (たとえば <i>JPEG</i> 画像など) の場合は、複数の拡張子をスラッシュで連結した値 (<i>"jpeg/jpg/jpe/jfif"</i> など) を返します。 magic.mime データベースに存在しない MIME タイプの場合は <i>"&#63;&#63;&#63;"</i> を返します。   PHP 7.2.0 以降で使用可能です。
 */
define('FILEINFO_EXTENSION', 16777216);

/**
 * RFC 2045 で定義された mime タイプと mime エンコーディングを返します。
 */
define('FILEINFO_MIME', 1040);

/**
 * ファイルの mime エンコーディングを返します。   PHP 5.3.0 以降で使用可能です。
 */
define('FILEINFO_MIME_ENCODING', 1024);

/**
 * mime タイプを返します。   PHP 5.3.0 以降で使用可能です。
 */
define('FILEINFO_MIME_TYPE', 16);

/**
 * 特別な処理を行いません。
 */
define('FILEINFO_NONE', 0);

/**
 * 可能な限り、元の最終アクセス時刻を保持します。
 */
define('FILEINFO_PRESERVE_ATIME', 128);

/**
 * 表示できない文字を <i>\ooo</i> 形式の 8 進表現に変換しません。
 */
define('FILEINFO_RAW', 256);

/**
 * シンボリックリンクのリンク先をたどります。
 */
define('FILEINFO_SYMLINK', 2);

