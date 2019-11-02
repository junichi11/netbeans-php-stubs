<?php



namespace {

	/**
	 * Translate a gopher formatted directory entry into an associative array
	 * <p><b>gopher_parsedir()</b> parses a gopher formatted directory entry into an associative array.</p><p>While gopher returns <i>text/plain</i> documents for actual document requests. A request to a directory (such as /) will return specially encoded series of lines with each line being one directory entry or information line.</p>
	 * @param string $dirent <p>The directory entry.</p>
	 * @return array <p>Returns an associative array whose components are:</p><ul> <li>  <i>type</i> - One of the <i>GOPHER_XXX</i> constants.  </li> <li>  <i>title</i> - The name of the resource.  </li> <li>  <i>path</i> - The path of the resource.  </li> <li>  <i>host</i> - The domain name of the host that has this document (or directory).  </li> <li>  <i>port</i> - The port at which to connect on <i>host</i>.  </li> </ul><p>Upon failure, the additional <i>data</i> entry of the returned array will hold the parsed line.</p>
	 * @link https://php.net/manual/ja/function.gopher-parsedir.php
	 * @since PECL net_gopher >= 0.1
	 */
	function gopher_parsedir(string $dirent): array {}

	/**
	 * 一般的なバイナリファイル。
	 */
	define('GOPHER_BINARY', null);

	/**
	 * BinHex エンコードされたバイナリファイル。
	 */
	define('GOPHER_BINHEX', null);

	/**
	 * gopher フォーマットのディレクトリ一覧を含むリソース。
	 */
	define('GOPHER_DIRECTORY', null);

	/**
	 * 標準的な <i>text/plain</i> ドキュメント。
	 */
	define('GOPHER_DOCUMENT', null);

	/**
	 * DOS フォーマットのバイナリアーカイブ。
	 */
	define('GOPHER_DOSBINARY', null);

	/**
	 * HTTP リソースへの参照。
	 */
	define('GOPHER_HTTP', null);

	/**
	 * 情報エントリ。
	 */
	define('GOPHER_INFO', null);

	/**
	 * 特定のカテゴリにあてはまらないエントリ。
	 */
	define('GOPHER_UNKNOWN', null);

	/**
	 * UUEncode されたファイル。
	 */
	define('GOPHER_UUENCODED', null);

}
