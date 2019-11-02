<?php



namespace {

	/**
	 * 属性を終了する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在の属性を終了します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-end-attribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_attribute($xmlwriter): bool {}

	/**
	 * 現在の CDATA を終了する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在の CDATA セクションを終了します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-end-cdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_cdata($xmlwriter): bool {}

	/**
	 * コメントの終了部を作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在のコメントを終了します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-end-comment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_end_comment($xmlwriter): bool {}

	/**
	 * 現在のドキュメントを終了する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在のドキュメントを終了します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-end-document.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_document($xmlwriter): bool {}

	/**
	 * 現在の DTD を終了する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ドキュメントの DTD を終了します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-end-dtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd($xmlwriter): bool {}

	/**
	 * 現在の DTD 属性リストを終了する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在の DTD 属性リストを終了します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-end-dtd-attlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_attlist($xmlwriter): bool {}

	/**
	 * 現在の DTD 要素を終了する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在の DTD 要素を終了します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-end-dtd-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_element($xmlwriter): bool {}

	/**
	 * 現在の DTD エンティティを終了する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在の DTD エンティティを終了します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-end-dtd-entity.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_dtd_entity($xmlwriter): bool {}

	/**
	 * 現在の要素を終了する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在の要素を終了します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-end-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_element($xmlwriter): bool {}

	/**
	 * 現在の PI (処理命令) を終了する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在の処理命令を終了します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-end-pi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_end_pi($xmlwriter): bool {}

	/**
	 * 現在のバッファをフラッシュする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在のバッファをフラッシュします。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param bool $empty <p>バッファを空にするかどうか。デフォルトは <b><code>TRUE</code></b> です。</p>
	 * @return mixed <p>ライターをメモリにオープンした場合は、この関数は出来上がった XML バッファを返します。 そうではなく URI を使用している場合は、この関数はバッファを書き込み、 書き込んだバイト数を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-flush.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_flush($xmlwriter, bool $empty = TRUE) {}

	/**
	 * 現在の要素を終了する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在の xml 要素を終了します。要素が空であっても終了タグを書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-full-end-element.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
	 */
	function xmlwriter_full_end_element($xmlwriter): bool {}

	/**
	 * 文字列の出力にメモリを使用する新しい xmlwriter を作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列の出力にメモリを使用する新しい <b>XMLWriter</b> を作成します。</p>
	 * @return resource <p>オブジェクト指向型: 成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>手続き型: 成功した場合に、その後の xmlwriter 関数で使用するための新しい xmlwriter リソース、 エラーの場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-open-memory.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_open_memory() {}

	/**
	 * ソース URI を指定して新しい xmlwriter を作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>uri</code> を指定した新しい <b>XMLWriter</b> を作成します。</p>
	 * @param string $uri <p>出力するリソースの URI。</p>
	 * @return resource <p>オブジェクト指向型: 成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>手続き型: 成功した場合に、その後の xmlwriter 関数で使用するための新しい xmlwriter リソース、 エラーの場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-open-uri.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_open_uri(string $uri) {}

	/**
	 * 現在のバッファを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在のバッファを返します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param bool $flush <p>出力バッファをフラッシュするかどうか。デフォルトは <b><code>TRUE</code></b>。</p>
	 * @return string <p>現在のバッファを文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-output-memory.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_output_memory($xmlwriter, bool $flush = TRUE): string {}

	/**
	 * 字下げの on/off を切り替える
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>字下げの on/off を切り替えます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param bool $indent <p>字下げを有効にするかどうか。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-set-indent.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_set_indent($xmlwriter, bool $indent): bool {}

	/**
	 * 字下げに使用する文字列を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列を設定します。この文字を使用して、結果の xml の要素/属性 を字下げします。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $indentString <p>字下げ用の文字列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-set-indent-string.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_set_indent_string($xmlwriter, string $indentString): bool {}

	/**
	 * 属性を開始する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>属性を開始します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $name <p>属性の名前。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-attribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_attribute($xmlwriter, string $name): bool {}

	/**
	 * 名前空間つきの属性を開始する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>名前空間つきの属性を開始します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $prefix <p>名前空間プレフィックス。</p>
	 * @param string $name <p>属性の名前。</p>
	 * @param string $uri <p>名前空間 URI。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-attribute-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_attribute_ns($xmlwriter, string $prefix, string $name, string $uri): bool {}

	/**
	 * CDATA の開始タグを作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>CDATA を開始します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-cdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_cdata($xmlwriter): bool {}

	/**
	 * コメントを開始する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>コメントを開始します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-comment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 1.0.0
	 */
	function xmlwriter_start_comment($xmlwriter): bool {}

	/**
	 * ドキュメントタグを作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ドキュメントを開始します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $version <p>XML 宣言で使用するドキュメントのバージョン番号。</p>
	 * @param string $encoding <p>XML 宣言で使用するドキュメントのエンコーディング。</p>
	 * @param string $standalone <p><i>yes</i> あるいは <i>no</i>。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-document.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_document($xmlwriter, string $version = '1.0', string $encoding = NULL, string $standalone = NULL): bool {}

	/**
	 * DTD の開始タグを作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>DTD を開始します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $qualifiedName <p>作成するドキュメント型の修飾名。</p>
	 * @param string $publicId <p>外部サブセットの公開識別子。</p>
	 * @param string $systemId <p>外部サブセットのシステム識別子。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-dtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd($xmlwriter, string $qualifiedName, string $publicId = NULL, string $systemId = NULL): bool {}

	/**
	 * DTD 属性リストを開始する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>DTD 属性リストを開始します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $name <p>属性リストの名前。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-dtd-attlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_attlist($xmlwriter, string $name): bool {}

	/**
	 * DTD 要素を開始する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>DTD 要素を開始します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $qualifiedName <p>作成するドキュメント型の修飾名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-dtd-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_element($xmlwriter, string $qualifiedName): bool {}

	/**
	 * DTD エンティティを開始する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>DTD エンティティを開始します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $name <p>エンティティの名前。</p>
	 * @param bool $isparam
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-dtd-entity.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_dtd_entity($xmlwriter, string $name, bool $isparam): bool {}

	/**
	 * 要素の開始タグを作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>要素を開始します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $name <p>要素名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_element($xmlwriter, string $name): bool {}

	/**
	 * 名前空間つき要素の開始タグを作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>名前空間つき要素を開始します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $prefix <p>名前空間プレフィックス。</p>
	 * @param string $name <p>要素名。</p>
	 * @param string $uri <p>名前空間 URI。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-element-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_element_ns($xmlwriter, string $prefix, string $name, string $uri): bool {}

	/**
	 * PI (処理命令) の開始タグを作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>処理命令の開始タグを作成します。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $target <p>処理命令の対象。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-start-pi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_start_pi($xmlwriter, string $target): bool {}

	/**
	 * テキストを書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>テキストを書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $content <p>テキストの内容。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-text.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_text($xmlwriter, string $content): bool {}

	/**
	 * 属性全体を書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>属性全体を書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $name <p>属性の名前。</p>
	 * @param string $value <p>属性の値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-attribute.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_attribute($xmlwriter, string $name, string $value): bool {}

	/**
	 * 名前空間つき属性全体を書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>名前空間つき属性全体を書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $prefix <p>名前空間プレフィックス。</p>
	 * @param string $name <p>属性名。</p>
	 * @param string $uri <p>名前空間 URI。</p>
	 * @param string $content <p>属性の値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-attribute-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_attribute_ns($xmlwriter, string $prefix, string $name, string $uri, string $content): bool {}

	/**
	 * CDATA タグ全体を書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>CDATA 全体を書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $content <p>CDATA の内容。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-cdata.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_cdata($xmlwriter, string $content): bool {}

	/**
	 * コメントタグ全体を書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>コメント全体を書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $content <p>コメントの内容。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-comment.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_comment($xmlwriter, string $content): bool {}

	/**
	 * DTD タグ全体を書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>DTD 全体を書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $name <p>DTD 名。</p>
	 * @param string $publicId <p>外部サブセットの公開識別子。</p>
	 * @param string $systemId <p>外部サブセットのシステム識別子。</p>
	 * @param string $subset <p>DTD の内容。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-dtd.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd($xmlwriter, string $name, string $publicId = NULL, string $systemId = NULL, string $subset = NULL): bool {}

	/**
	 * DTD 属性リストタグ全体を書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>DTD 属性リストを書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $name <p>DTD 属性リストの名前。</p>
	 * @param string $content <p>DTD 属性リストの内容。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-dtd-attlist.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_attlist($xmlwriter, string $name, string $content): bool {}

	/**
	 * DTD 要素タグ全体を書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>DTD 要素全体を書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $name <p>DTD 要素の名前。</p>
	 * @param string $content <p>要素の内容。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-dtd-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_element($xmlwriter, string $name, string $content): bool {}

	/**
	 * DTD エンティティタグ全体を書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>DTD エンティティ全体を書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $name <p>エンティティの名前。</p>
	 * @param string $content <p>エンティティの内容。</p>
	 * @param bool $pe
	 * @param string $pubid
	 * @param string $sysid
	 * @param string $ndataid
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-dtd-entity.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_dtd_entity($xmlwriter, string $name, string $content, bool $pe, string $pubid, string $sysid, string $ndataid): bool {}

	/**
	 * 要素タグ全体を書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>要素タグ全体を書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $name <p>要素名。</p>
	 * @param string $content <p>要素の内容。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-element.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_element($xmlwriter, string $name, string $content = NULL): bool {}

	/**
	 * 名前空間つき要素タグ全体を書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>名前空間つき要素タグ全体を書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $prefix <p>名前空間プレフィックス。</p>
	 * @param string $name <p>要素名。</p>
	 * @param string $uri <p>名前空間 URI。</p>
	 * @param string $content <p>要素の内容。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-element-ns.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_element_ns($xmlwriter, string $prefix, string $name, string $uri, string $content = NULL): bool {}

	/**
	 * PI (処理命令) 書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>処理命令を書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $target <p>処理命令の対象。</p>
	 * @param string $content <p>処理命令の内容。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-pi.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL xmlwriter >= 0.1.0
	 */
	function xmlwriter_write_pi($xmlwriter, string $target, string $content): bool {}

	/**
	 * 生の XML テキストを書き込む
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>生の xml テキストを書き込みます。</p>
	 * @param resource $xmlwriter <p>手続き型のコールでのみ使用します。 変更される XMLWriter <code>resource</code> です。 このリソースは、<code>xmlwriter_open_uri()</code> あるいは <code>xmlwriter_open_memory()</code> のコールによって取得したものです。</p>
	 * @param string $content <p>書き込むテキスト文字列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.xmlwriter-write-raw.php
	 * @since PHP 5 >= 5.2.0, PHP 7, PECL xmlwriter >= 2.0.4
	 */
	function xmlwriter_write_raw($xmlwriter, string $content): bool {}

}
