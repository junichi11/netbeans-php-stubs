<?php

// Start of xsl v.7.1.5

/**
 * @link http://php.net/manual/ja/class.xsltprocessor.php
 */
class XSLTProcessor  {

	/**
	 * (PHP 5, PHP 7)<br/>
	 * スタイルシートを取り込む
	 * @link http://php.net/manual/ja/xsltprocessor.importstylesheet.php
	 * @param object $stylesheet <p>
	 * 取り込まれるスタイルシートを <b>DOMDocument</b>
	 * オブジェクトあるいは <b>SimpleXMLElement</b>
	 * オブジェクトとして指定します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function importStylesheet($stylesheet): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * DOMDocument に変換する
	 * @link http://php.net/manual/ja/xsltprocessor.transformtodoc.php
	 * @param DOMNode $doc <p>
	 * 変換されるノードを指定します。
	 * </p>
	 * @return DOMDocument 結果の <b>DOMDocument</b> 。
	 * エラーが発生した場合は <b>FALSE</b> 。
	 */
	public function transformToDoc(DOMNode $doc): DOMDocument {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * URI に変換する
	 * @link http://php.net/manual/ja/xsltprocessor.transformtouri.php
	 * @param DOMDocument $doc <p>
	 * 変換する文章を指定します。
	 * </p>
	 * @param string $uri <p>
	 * 変換先の URI。
	 * </p>
	 * @return int 書き込まれたバイト数。エラーが発生した場合は <b>FALSE</b> 。
	 */
	public function transformToUri(DOMDocument $doc, string $uri): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * XML に変換する
	 * @link http://php.net/manual/ja/xsltprocessor.transformtoxml.php
	 * @param object $doc <p>
	 * 変換対象となる、DOMDocument オブジェクトあるいは
	 * SimpleXMLElement オブジェクトを指定します。
	 * </p>
	 * @return string 変換結果の文字列。エラーが発生した場合は <b>FALSE</b> 。
	 */
	public function transformToXml($doc): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * パラメータの値を設定する
	 * @link http://php.net/manual/ja/xsltprocessor.setparameter.php
	 * @param string $namespace <p>
	 * XSLT パラメータの名前空間 URI を指定します。
	 * </p>
	 * @param string $name <p>
	 * XSLT パラメータのローカル名を指定します。
	 * </p>
	 * @param string $value <p>
	 * XSLT パラメータの新しい値を指定します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setParameter(string $namespace, string $name, string $value): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * パラメータの値を取得する
	 * @link http://php.net/manual/ja/xsltprocessor.getparameter.php
	 * @param string $namespaceURI <p>
	 * XSLT パラメータの名前空間 URI を指定します。
	 * </p>
	 * @param string $localName <p>
	 * XSLT パラメータのローカル名を指定します。
	 * </p>
	 * @return string パラメータの値 (文字列)、あるいは設定されていない場合は <b>FALSE</b> を返します。
	 */
	public function getParameter(string $namespaceURI, string $localName): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * パラメータを削除する
	 * @link http://php.net/manual/ja/xsltprocessor.removeparameter.php
	 * @param string $namespaceURI <p>
	 * XSLT パラメータの名前空間 URI を指定します。
	 * </p>
	 * @param string $localName <p>
	 * XSLT パラメータのローカル名を指定します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function removeParameter(string $namespaceURI, string $localName): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.4, PHP 7)<br/>
	 * PHP が EXSLT をサポートしているかどうかを判定する
	 * @link http://php.net/manual/ja/xsltprocessor.hasexsltsupport.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasExsltSupport(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.4, PHP 7)<br/>
	 * PHP 関数を XSLT 関数として利用できるようにする
	 * @link http://php.net/manual/ja/xsltprocessor.registerphpfunctions.php
	 * @param mixed $restrict [optional] <p>
	 * このパラメータは、XSLT からコールされる信頼できる関数のみを許可します。
	 * </p>
	 * <p>
	 * このパラメータには文字列 (関数名)
	 * あるいは関数の配列のいずれかを指定します。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function registerPHPFunctions($restrict = null): void {}

	/**
	 * (PHP &gt;= 5.3.0)<br/>
	 * プロファイル情報の出力ファイルを設定する
	 * @link http://php.net/manual/ja/xsltprocessor.setprofiling.php
	 * @param string $filename <p>
	 * プロファイル情報を出力するファイルへのパス。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setProfiling(string $filename): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * セキュリティ設定を指定する
	 * @link http://php.net/manual/ja/xsltprocessor.setsecurityprefs.php
	 * @param int $securityPrefs <p>
	 * 新しいセキュリティ設定。以下の定数を OR で指定できます。
	 * <b>XSL_SECPREF_READ_FILE</b>、
	 * <b>XSL_SECPREF_WRITE_FILE</b>、
	 * <b>XSL_SECPREF_CREATE_DIRECTORY</b>、
	 * <b>XSL_SECPREF_READ_NETWORK</b>、
	 * <b>XSL_SECPREF_WRITE_NETWORK</b>。あるいは
	 * <b>XSL_SECPREF_NONE</b> や
	 * <b>XSL_SECPREF_DEFAULT</b> を渡すこともできます。
	 * </p>
	 * @return int 元のセキュリティ設定を返します。
	 */
	public function setSecurityPrefs(int $securityPrefs): int {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * セキュリティ設定を取得する
	 * @link http://php.net/manual/ja/xsltprocessor.getsecurityprefs.php
	 * @return int <b>XSL_SECPREF_READ_FILE</b>、
	 * <b>XSL_SECPREF_WRITE_FILE</b>、
	 * <b>XSL_SECPREF_CREATE_DIRECTORY</b>、
	 * <b>XSL_SECPREF_READ_NETWORK</b>、
	 * <b>XSL_SECPREF_WRITE_NETWORK</b> を含むビットマスクを返します。
	 */
	public function getSecurityPrefs(): int {}

}
define ('XSL_CLONE_AUTO', 0);
define ('XSL_CLONE_NEVER', -1);
define ('XSL_CLONE_ALWAYS', 1);

/**
 * セキュリティに関する制限をすべて無効化します。
 * @link http://php.net/manual/ja/xsl.constants.php
 */
define ('XSL_SECPREF_NONE', 0);

/**
 * ファイルの読み込みを拒否します。
 * @link http://php.net/manual/ja/xsl.constants.php
 */
define ('XSL_SECPREF_READ_FILE', 2);

/**
 * ファイルへの書き込みを拒否します。
 * @link http://php.net/manual/ja/xsl.constants.php
 */
define ('XSL_SECPREF_WRITE_FILE', 4);

/**
 * ディレクトリの作成を拒否します。
 * @link http://php.net/manual/ja/xsl.constants.php
 */
define ('XSL_SECPREF_CREATE_DIRECTORY', 8);

/**
 * ネットワークファイルの読み込みを拒否します。
 * @link http://php.net/manual/ja/xsl.constants.php
 */
define ('XSL_SECPREF_READ_NETWORK', 16);

/**
 * ネットワークファイルへの書き込みを拒否します。
 * @link http://php.net/manual/ja/xsl.constants.php
 */
define ('XSL_SECPREF_WRITE_NETWORK', 32);

/**
 * すべての書き込みアクセスを拒否します。つまり、
 * <b>XSL_SECPREF_WRITE_NETWORK</b> |
 * <b>XSL_SECPREF_CREATE_DIRECTORY</b> |
 * <b>XSL_SECPREF_WRITE_FILE</b> と同等です。
 * @link http://php.net/manual/ja/xsl.constants.php
 */
define ('XSL_SECPREF_DEFAULT', 44);

/**
 * libxslt のバージョンを 10117 のように表します。PHP 5.1.2 以降で使用可能です。
 * @link http://php.net/manual/ja/xsl.constants.php
 */
define ('LIBXSLT_VERSION', 10128);

/**
 * libxslt のバージョンを 1.1.17 のように表します。PHP 5.1.2 以降で使用可能です。
 * @link http://php.net/manual/ja/xsl.constants.php
 */
define ('LIBXSLT_DOTTED_VERSION', "1.1.28");

/**
 * libexslt のバージョンを 813 のように表します。PHP 5.1.2 以降で使用可能です。
 * @link http://php.net/manual/ja/xsl.constants.php
 */
define ('LIBEXSLT_VERSION', 817);

/**
 * libexslt のバージョンを 1.1.17 のように表します。PHP 5.1.2 以降で使用可能です。
 * @link http://php.net/manual/ja/xsl.constants.php
 */
define ('LIBEXSLT_DOTTED_VERSION', "1.1.28");

// End of xsl v.7.1.5
?>
