<?php



/**
 * @link http://php.net/manual/ja/class.xsltprocessor.php
 * @since PHP 5, PHP 7
 */
class XSLTProcessor {

	/**
	 * パラメータの値を取得する
	 * <p>パラメータがあらかじめ <code>XSLTProcessor::setParameter()</code> で設定されている場合、 それを取得します。</p>
	 * @param string $namespaceURI <p>XSLT パラメータの名前空間 URI を指定します。</p>
	 * @param string $localName <p>XSLT パラメータのローカル名を指定します。</p>
	 * @return string <p>パラメータの値 (文字列)、あるいは設定されていない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.getparameter.php
	 * @see XSLTProcessor::setParameter(), XSLTProcessor::removeParameter()
	 * @since PHP 5, PHP 7
	 */
	public function getParameter(string $namespaceURI, string $localName): string {}

	/**
	 * セキュリティ設定を取得する
	 * <p>セキュリティ設定を取得します。</p>
	 * @return int <p><b><code>XSL_SECPREF_READ_FILE</code></b>、 <b><code>XSL_SECPREF_WRITE_FILE</code></b>、 <b><code>XSL_SECPREF_CREATE_DIRECTORY</code></b>、 <b><code>XSL_SECPREF_READ_NETWORK</code></b>、 <b><code>XSL_SECPREF_WRITE_NETWORK</code></b> を含むビットマスクを返します。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.getsecurityprefs.php
	 * @since PHP >= 5.4.0
	 */
	public function getSecurityPrefs(): int {}

	/**
	 * PHP が EXSLT をサポートしているかどうかを判定する
	 * <p>このメソッドは PHP が » EXSLT library と共にビルドされたかどうかを判定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.hasexsltsupport.php
	 * @since PHP 5 >= 5.0.4, PHP 7
	 */
	public function hasExsltSupport(): bool {}

	/**
	 * スタイルシートを取り込む
	 * <p>このメソッドは XSLTProcessor に変換のためのスタイルシートを取り込みます。</p>
	 * @param object $stylesheet <p>取り込まれるスタイルシートを DOMDocument オブジェクトあるいは SimpleXMLElement オブジェクトとして指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.importstylesheet.php
	 * @since PHP 5, PHP 7
	 */
	public function importStylesheet(object $stylesheet): bool {}

	/**
	 * PHP 関数を XSLT 関数として利用できるようにする
	 * <p>このメソッドは、PHP 関数を XSL スタイルシートでの XSLT 関数として利用できるようにします。</p>
	 * @param mixed $restrict <p>このパラメータは、XSLT からコールされる信頼できる関数のみを許可します。</p> <p>このパラメータには文字列 (関数名) あるいは関数の配列のいずれかを指定します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.registerphpfunctions.php
	 * @since PHP 5 >= 5.0.4, PHP 7
	 */
	public function registerPHPFunctions($restrict = NULL): void {}

	/**
	 * パラメータを削除する
	 * <p>もしパラメータが設定されていれば削除します。これにより、 プロセッサはスタイルシートで指定されるようなパラメータに デフォルト値を使用します。</p>
	 * @param string $namespaceURI <p>XSLT パラメータの名前空間 URI を指定します。</p>
	 * @param string $localName <p>XSLT パラメータのローカル名を指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.removeparameter.php
	 * @see XSLTProcessor::setParameter(), XSLTProcessor::getParameter()
	 * @since PHP 5, PHP 7
	 */
	public function removeParameter(string $namespaceURI, string $localName): bool {}

	/**
	 * パラメータの値を設定する
	 * <p>XSLTProcessor を使った変換のための 1 つあるいは多くのパラメータの値を設定します。 もしパラメータがスタイルシートに存在しない場合、無視されます。</p>
	 * @param string $namespace <p>XSLT パラメータの名前空間 URI を指定します。</p>
	 * @param string $name <p>XSLT パラメータのローカル名を指定します。</p>
	 * @param string $value <p>XSLT パラメータの新しい値を指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.setparameter.php
	 * @see XSLTProcessor::getParameter(), XSLTProcessor::removeParameter()
	 * @since PHP 5, PHP 7
	 */
	public function setParameter(string $namespace, string $name, string $value): bool {}

	/**
	 * プロファイル情報の出力ファイルを設定する
	 * <p>スタイルシート処理時のプロファイル情報を出力するファイルを設定します。</p>
	 * @param string $filename <p>プロファイル情報を出力するファイルへのパス。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.setprofiling.php
	 * @since PHP >= 5.3.0
	 */
	public function setProfiling(string $filename): bool {}

	/**
	 * セキュリティ設定を指定する
	 * <p>セキュリティ設定を指定します。</p>
	 * @param int $securityPrefs <p>新しいセキュリティ設定。以下の定数を OR で指定できます。 <b><code>XSL_SECPREF_READ_FILE</code></b>、 <b><code>XSL_SECPREF_WRITE_FILE</code></b>、 <b><code>XSL_SECPREF_CREATE_DIRECTORY</code></b>、 <b><code>XSL_SECPREF_READ_NETWORK</code></b>、 <b><code>XSL_SECPREF_WRITE_NETWORK</code></b>。あるいは <b><code>XSL_SECPREF_NONE</code></b> や <b><code>XSL_SECPREF_DEFAULT</code></b> を渡すこともできます。</p>
	 * @return int <p>元のセキュリティ設定を返します。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.setsecurityprefs.php
	 * @since PHP >= 5.4.0
	 */
	public function setSecurityPrefs(int $securityPrefs): int {}

	/**
	 * DOMDocument に変換する
	 * <p><code>XSLTProcessor::importStylesheet()</code> メソッドで与えられたスタイルシートを適用し、 ソースノードを DOMDocument に変換します。</p>
	 * @param \DOMNode $doc <p>変換されるノードを指定します。</p>
	 * @return DOMDocument <p>結果の DOMDocument 。 エラーが発生した場合は <b><code>FALSE</code></b> 。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.transformtodoc.php
	 * @see XSLTProcessor::transformToUri(), XSLTProcessor::transformToXml()
	 * @since PHP 5, PHP 7
	 */
	public function transformToDoc(\DOMNode $doc): \DOMDocument {}

	/**
	 * URI に変換する
	 * <p><code>XSLTProcessor::importStylesheet()</code> メソッドで与えられたスタイルシートを適用し、 ソースノードを URI に変換します。</p>
	 * @param \DOMDocument $doc <p>変換する文章を指定します。</p>
	 * @param string $uri <p>変換先の URI。</p>
	 * @return int <p>書き込まれたバイト数。エラーが発生した場合は <b><code>FALSE</code></b> 。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.transformtouri.php
	 * @see XSLTProcessor::transformToDoc(), XSLTProcessor::transformToXml()
	 * @since PHP 5, PHP 7
	 */
	public function transformToUri(\DOMDocument $doc, string $uri): int {}

	/**
	 * XML に変換する
	 * <p><code>xsltprocessor::importStylesheet()</code> メソッドで与えられたスタイルシートを適用し、 ソースノードを文字列に変換します。</p>
	 * @param object $doc <p>変換対象となる、<code>DOMDocument</code> オブジェクトあるいは <code>SimpleXMLElement</code> オブジェクトを指定します。</p>
	 * @return string <p>変換結果の文字列。エラーが発生した場合は <b><code>FALSE</code></b> 。</p>
	 * @link http://php.net/manual/ja/xsltprocessor.transformtoxml.php
	 * @see XSLTProcessor::transformToDoc(), XSLTProcessor::transformToUri()
	 * @since PHP 5, PHP 7
	 */
	public function transformToXML(object $doc): string {}
}

/**
 * libexslt のバージョンを 1.1.17 のように表します。PHP 5.1.2 以降で使用可能です。
 */
define('LIBEXSLT_DOTTED_VERSION', '1.1.29');

/**
 * libexslt のバージョンを 813 のように表します。PHP 5.1.2 以降で使用可能です。
 */
define('LIBEXSLT_VERSION', 817);

/**
 * libxslt のバージョンを 1.1.17 のように表します。PHP 5.1.2 以降で使用可能です。
 */
define('LIBXSLT_DOTTED_VERSION', '1.1.29');

/**
 * libxslt のバージョンを 10117 のように表します。PHP 5.1.2 以降で使用可能です。
 */
define('LIBXSLT_VERSION', 10129);

define('XSL_CLONE_ALWAYS', 1);

define('XSL_CLONE_AUTO', 0);

define('XSL_CLONE_NEVER', -1);

/**
 * ディレクトリの作成を拒否します。
 */
define('XSL_SECPREF_CREATE_DIRECTORY', 8);

/**
 * すべての書き込みアクセスを拒否します。つまり、 <b><code>XSL_SECPREF_WRITE_NETWORK</code></b> | <b><code>XSL_SECPREF_CREATE_DIRECTORY</code></b> | <b><code>XSL_SECPREF_WRITE_FILE</code></b> と同等です。
 */
define('XSL_SECPREF_DEFAULT', 44);

/**
 * セキュリティに関する制限をすべて無効化します。
 */
define('XSL_SECPREF_NONE', 0);

/**
 * ファイルの読み込みを拒否します。
 */
define('XSL_SECPREF_READ_FILE', 2);

/**
 * ネットワークファイルの読み込みを拒否します。
 */
define('XSL_SECPREF_READ_NETWORK', 16);

/**
 * ファイルへの書き込みを拒否します。
 */
define('XSL_SECPREF_WRITE_FILE', 4);

/**
 * ネットワークファイルへの書き込みを拒否します。
 */
define('XSL_SECPREF_WRITE_NETWORK', 32);

