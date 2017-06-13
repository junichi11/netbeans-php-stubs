<?php

// Start of xmlwriter v.7.1.5

class XMLWriter  {

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * ソース URI を指定して新しい xmlwriter を作成する
	 * @link http://php.net/manual/ja/function.xmlwriter-open-uri.php
	 * @param string $uri <p>
	 * 出力するリソースの URI。
	 * </p>
	 * @return bool オブジェクト指向型: 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * 手続き型: 成功した場合に、その後の xmlwriter
	 * 関数で使用するための新しい xmlwriter リソース、
	 * エラーの場合に <b>FALSE</b> を返します。
	 */
	public function openUri(string $uri): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 文字列の出力にメモリを使用する新しい xmlwriter を作成する
	 * @link http://php.net/manual/ja/function.xmlwriter-open-memory.php
	 * @return bool オブジェクト指向型: 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * 手続き型: 成功した場合に、その後の xmlwriter
	 * 関数で使用するための新しい xmlwriter リソース、
	 * エラーの場合に <b>FALSE</b> を返します。
	 */
	public function openMemory(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 字下げの on/off を切り替える
	 * @link http://php.net/manual/ja/function.xmlwriter-set-indent.php
	 * @param bool $indent <p>
	 * 字下げを有効にするかどうか。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setIndent(bool $indent): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 字下げに使用する文字列を設定する
	 * @link http://php.net/manual/ja/function.xmlwriter-set-indent-string.php
	 * @param string $indentString <p>
	 * 字下げ用の文字列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setIndentString(string $indentString): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
	 * コメントを開始する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-comment.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startComment(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
	 * コメントの終了部を作成する
	 * @link http://php.net/manual/ja/function.xmlwriter-end-comment.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function endComment(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 属性を開始する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-attribute.php
	 * @param string $name <p>
	 * 属性の名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startAttribute(string $name): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 属性を終了する
	 * @link http://php.net/manual/ja/function.xmlwriter-end-attribute.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function endAttribute(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 属性全体を書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-attribute.php
	 * @param string $name <p>
	 * 属性の名前。
	 * </p>
	 * @param string $value <p>
	 * 属性の値。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writeAttribute(string $name, string $value): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 名前空間つきの属性を開始する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-attribute-ns.php
	 * @param string $prefix <p>
	 * 名前空間プレフィックス。
	 * </p>
	 * @param string $name <p>
	 * 属性の名前。
	 * </p>
	 * @param string $uri <p>
	 * 名前空間 URI。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startAttributeNs(string $prefix, string $name, string $uri): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 名前空間つき属性全体を書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-attribute-ns.php
	 * @param string $prefix <p>
	 * 名前空間プレフィックス。
	 * </p>
	 * @param string $name <p>
	 * 属性名。
	 * </p>
	 * @param string $uri <p>
	 * 名前空間 URI。
	 * </p>
	 * @param string $content <p>
	 * 属性の値。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writeAttributeNs(string $prefix, string $name, string $uri, string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 要素の開始タグを作成する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-element.php
	 * @param string $name <p>
	 * 要素名。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startElement(string $name): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 現在の要素を終了する
	 * @link http://php.net/manual/ja/function.xmlwriter-end-element.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function endElement(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL xmlwriter &gt;= 2.0.4)<br/>
	 * 現在の要素を終了する
	 * @link http://php.net/manual/ja/function.xmlwriter-full-end-element.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function fullEndElement(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 名前空間つき要素の開始タグを作成する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-element-ns.php
	 * @param string $prefix <p>
	 * 名前空間プレフィックス。
	 * </p>
	 * @param string $name <p>
	 * 要素名。
	 * </p>
	 * @param string $uri <p>
	 * 名前空間 URI。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startElementNs(string $prefix, string $name, string $uri): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 要素タグ全体を書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-element.php
	 * @param string $name <p>
	 * 要素名。
	 * </p>
	 * @param string $content [optional] <p>
	 * 要素の内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writeElement(string $name, string $content = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 名前空間つき要素タグ全体を書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-element-ns.php
	 * @param string $prefix <p>
	 * 名前空間プレフィックス。
	 * </p>
	 * @param string $name <p>
	 * 要素名。
	 * </p>
	 * @param string $uri <p>
	 * 名前空間 URI。
	 * </p>
	 * @param string $content [optional] <p>
	 * 要素の内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writeElementNs(string $prefix, string $name, string $uri, string $content = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * PI (処理命令) の開始タグを作成する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-pi.php
	 * @param string $target <p>
	 * 処理命令の対象。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startPi(string $target): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 現在の PI (処理命令) を終了する
	 * @link http://php.net/manual/ja/function.xmlwriter-end-pi.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function endPi(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * PI (処理命令) 書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-pi.php
	 * @param string $target <p>
	 * 処理命令の対象。
	 * </p>
	 * @param string $content <p>
	 * 処理命令の内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writePi(string $target, string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * CDATA の開始タグを作成する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-cdata.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startCdata(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 現在の CDATA を終了する
	 * @link http://php.net/manual/ja/function.xmlwriter-end-cdata.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function endCdata(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * CDATA タグ全体を書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-cdata.php
	 * @param string $content <p>
	 * CDATA の内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writeCdata(string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * テキストを書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-text.php
	 * @param string $content <p>
	 * テキストの内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function text(string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL xmlwriter &gt;= 2.0.4)<br/>
	 * 生の XML テキストを書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-raw.php
	 * @param string $content <p>
	 * 書き込むテキスト文字列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writeRaw(string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * ドキュメントタグを作成する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-document.php
	 * @param string $version [optional] <p>
	 * XML 宣言で使用するドキュメントのバージョン番号。
	 * </p>
	 * @param string $encoding [optional] <p>
	 * XML 宣言で使用するドキュメントのエンコーディング。
	 * </p>
	 * @param string $standalone [optional] <p>
	 * yes あるいは no。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startDocument(string $version = '1.0', string $encoding = null, string $standalone = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 現在のドキュメントを終了する
	 * @link http://php.net/manual/ja/function.xmlwriter-end-document.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function endDocument(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * コメントタグ全体を書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-comment.php
	 * @param string $content <p>
	 * コメントの内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writeComment(string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * DTD の開始タグを作成する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-dtd.php
	 * @param string $qualifiedName <p>
	 * 作成するドキュメント型の修飾名。
	 * </p>
	 * @param string $publicId [optional] <p>
	 * 外部サブセットの公開識別子。
	 * </p>
	 * @param string $systemId [optional] <p>
	 * 外部サブセットのシステム識別子。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startDtd(string $qualifiedName, string $publicId = null, string $systemId = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 現在の DTD を終了する
	 * @link http://php.net/manual/ja/function.xmlwriter-end-dtd.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function endDtd(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * DTD タグ全体を書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-dtd.php
	 * @param string $name <p>
	 * DTD 名。
	 * </p>
	 * @param string $publicId [optional] <p>
	 * 外部サブセットの公開識別子。
	 * </p>
	 * @param string $systemId [optional] <p>
	 * 外部サブセットのシステム識別子。
	 * </p>
	 * @param string $subset [optional] <p>
	 * DTD の内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writeDtd(string $name, string $publicId = null, string $systemId = null, string $subset = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * DTD 要素を開始する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-dtd-element.php
	 * @param string $qualifiedName <p>
	 * 作成するドキュメント型の修飾名。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startDtdElement(string $qualifiedName): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 現在の DTD 要素を終了する
	 * @link http://php.net/manual/ja/function.xmlwriter-end-dtd-element.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function endDtdElement(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * DTD 要素タグ全体を書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-dtd-element.php
	 * @param string $name <p>
	 * DTD 要素の名前。
	 * </p>
	 * @param string $content <p>
	 * 要素の内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writeDtdElement(string $name, string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * DTD 属性リストを開始する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-dtd-attlist.php
	 * @param string $name <p>
	 * 属性リストの名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startDtdAttlist(string $name): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 現在の DTD 属性リストを終了する
	 * @link http://php.net/manual/ja/function.xmlwriter-end-dtd-attlist.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function endDtdAttlist(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * DTD 属性リストタグ全体を書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-dtd-attlist.php
	 * @param string $name <p>
	 * DTD 属性リストの名前。
	 * </p>
	 * @param string $content <p>
	 * DTD 属性リストの内容。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writeDtdAttlist(string $name, string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * DTD エンティティを開始する
	 * @link http://php.net/manual/ja/function.xmlwriter-start-dtd-entity.php
	 * @param string $name <p>
	 * エンティティの名前。
	 * </p>
	 * @param bool $isparam
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function startDtdEntity(string $name, bool $isparam): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 現在の DTD エンティティを終了する
	 * @link http://php.net/manual/ja/function.xmlwriter-end-dtd-entity.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function endDtdEntity(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * DTD エンティティタグ全体を書き込む
	 * @link http://php.net/manual/ja/function.xmlwriter-write-dtd-entity.php
	 * @param string $name <p>
	 * エンティティの名前。
	 * </p>
	 * @param string $content <p>
	 * エンティティの内容。
	 * </p>
	 * @param bool $pe
	 * @param string $pubid
	 * @param string $sysid
	 * @param string $ndataid
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function writeDtdEntity(string $name, string $content, bool $pe, string $pubid, string $sysid, string $ndataid): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * 現在のバッファを返す
	 * @link http://php.net/manual/ja/function.xmlwriter-output-memory.php
	 * @param bool $flush [optional] <p>
	 * 出力バッファをフラッシュするかどうか。デフォルトは <b>TRUE</b>。
	 * </p>
	 * @return string 現在のバッファを文字列で返します。
	 */
	public function outputMemory(bool $flush = true): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
	 * 現在のバッファをフラッシュする
	 * @link http://php.net/manual/ja/function.xmlwriter-flush.php
	 * @param bool $empty [optional] <p>
	 * バッファを空にするかどうか。デフォルトは <b>TRUE</b> です。
	 * </p>
	 * @return mixed ライターをメモリにオープンした場合は、この関数は出来上がった XML バッファを返します。
	 * そうではなく URI を使用している場合は、この関数はバッファを書き込み、
	 * 書き込んだバイト数を返します。
	 */
	public function flush(bool $empty = true) {}

}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * ソース URI を指定して新しい xmlwriter を作成する
 * @link http://php.net/manual/ja/function.xmlwriter-open-uri.php
 * @param string $uri <p>
 * 出力するリソースの URI。
 * </p>
 * @return bool オブジェクト指向型: 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * 手続き型: 成功した場合に、その後の xmlwriter
 * 関数で使用するための新しい xmlwriter リソース、
 * エラーの場合に <b>FALSE</b> を返します。
 */
function xmlwriter_open_uri(string $uri): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 文字列の出力にメモリを使用する新しい xmlwriter を作成する
 * @link http://php.net/manual/ja/function.xmlwriter-open-memory.php
 * @return bool オブジェクト指向型: 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * 手続き型: 成功した場合に、その後の xmlwriter
 * 関数で使用するための新しい xmlwriter リソース、
 * エラーの場合に <b>FALSE</b> を返します。
 */
function xmlwriter_open_memory(): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 字下げの on/off を切り替える
 * @link http://php.net/manual/ja/function.xmlwriter-set-indent.php
 * @param bool $indent <p>
 * 字下げを有効にするかどうか。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_set_indent(bool $indent): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 字下げに使用する文字列を設定する
 * @link http://php.net/manual/ja/function.xmlwriter-set-indent-string.php
 * @param string $indentString <p>
 * 字下げ用の文字列。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_set_indent_string(string $indentString): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
 * コメントを開始する
 * @link http://php.net/manual/ja/function.xmlwriter-start-comment.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_comment($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
 * コメントの終了部を作成する
 * @link http://php.net/manual/ja/function.xmlwriter-end-comment.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_end_comment($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 属性を開始する
 * @link http://php.net/manual/ja/function.xmlwriter-start-attribute.php
 * @param string $name <p>
 * 属性の名前。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_attribute(string $name): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 属性を終了する
 * @link http://php.net/manual/ja/function.xmlwriter-end-attribute.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_end_attribute($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 属性全体を書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-attribute.php
 * @param string $name <p>
 * 属性の名前。
 * </p>
 * @param string $value <p>
 * 属性の値。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_attribute(string $name, string $value): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 名前空間つきの属性を開始する
 * @link http://php.net/manual/ja/function.xmlwriter-start-attribute-ns.php
 * @param string $prefix <p>
 * 名前空間プレフィックス。
 * </p>
 * @param string $name <p>
 * 属性の名前。
 * </p>
 * @param string $uri <p>
 * 名前空間 URI。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_attribute_ns(string $prefix, string $name, string $uri): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 名前空間つき属性全体を書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-attribute-ns.php
 * @param string $prefix <p>
 * 名前空間プレフィックス。
 * </p>
 * @param string $name <p>
 * 属性名。
 * </p>
 * @param string $uri <p>
 * 名前空間 URI。
 * </p>
 * @param string $content <p>
 * 属性の値。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_attribute_ns(string $prefix, string $name, string $uri, string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 要素の開始タグを作成する
 * @link http://php.net/manual/ja/function.xmlwriter-start-element.php
 * @param string $name <p>
 * 要素名。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_element(string $name): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 現在の要素を終了する
 * @link http://php.net/manual/ja/function.xmlwriter-end-element.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_end_element($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL xmlwriter &gt;= 2.0.4)<br/>
 * 現在の要素を終了する
 * @link http://php.net/manual/ja/function.xmlwriter-full-end-element.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_full_end_element($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 名前空間つき要素の開始タグを作成する
 * @link http://php.net/manual/ja/function.xmlwriter-start-element-ns.php
 * @param string $prefix <p>
 * 名前空間プレフィックス。
 * </p>
 * @param string $name <p>
 * 要素名。
 * </p>
 * @param string $uri <p>
 * 名前空間 URI。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_element_ns(string $prefix, string $name, string $uri): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 要素タグ全体を書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-element.php
 * @param string $name <p>
 * 要素名。
 * </p>
 * @param string $content [optional] <p>
 * 要素の内容。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_element(string $name, string $content = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 名前空間つき要素タグ全体を書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-element-ns.php
 * @param string $prefix <p>
 * 名前空間プレフィックス。
 * </p>
 * @param string $name <p>
 * 要素名。
 * </p>
 * @param string $uri <p>
 * 名前空間 URI。
 * </p>
 * @param string $content [optional] <p>
 * 要素の内容。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_element_ns(string $prefix, string $name, string $uri, string $content = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * PI (処理命令) の開始タグを作成する
 * @link http://php.net/manual/ja/function.xmlwriter-start-pi.php
 * @param string $target <p>
 * 処理命令の対象。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_pi(string $target): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 現在の PI (処理命令) を終了する
 * @link http://php.net/manual/ja/function.xmlwriter-end-pi.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_end_pi($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * PI (処理命令) 書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-pi.php
 * @param string $target <p>
 * 処理命令の対象。
 * </p>
 * @param string $content <p>
 * 処理命令の内容。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_pi(string $target, string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * CDATA の開始タグを作成する
 * @link http://php.net/manual/ja/function.xmlwriter-start-cdata.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_cdata($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 現在の CDATA を終了する
 * @link http://php.net/manual/ja/function.xmlwriter-end-cdata.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_end_cdata($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * CDATA タグ全体を書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-cdata.php
 * @param string $content <p>
 * CDATA の内容。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_cdata(string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * テキストを書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-text.php
 * @param string $content <p>
 * テキストの内容。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_text(string $content): bool {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL xmlwriter &gt;= 2.0.4)<br/>
 * 生の XML テキストを書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-raw.php
 * @param string $content <p>
 * 書き込むテキスト文字列。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_raw(string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * ドキュメントタグを作成する
 * @link http://php.net/manual/ja/function.xmlwriter-start-document.php
 * @param string $version [optional] <p>
 * XML 宣言で使用するドキュメントのバージョン番号。
 * </p>
 * @param string $encoding [optional] <p>
 * XML 宣言で使用するドキュメントのエンコーディング。
 * </p>
 * @param string $standalone [optional] <p>
 * yes あるいは no。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_document(string $version = '1.0', string $encoding = null, string $standalone = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 現在のドキュメントを終了する
 * @link http://php.net/manual/ja/function.xmlwriter-end-document.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_end_document($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * コメントタグ全体を書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-comment.php
 * @param string $content <p>
 * コメントの内容。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_comment(string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * DTD の開始タグを作成する
 * @link http://php.net/manual/ja/function.xmlwriter-start-dtd.php
 * @param string $qualifiedName <p>
 * 作成するドキュメント型の修飾名。
 * </p>
 * @param string $publicId [optional] <p>
 * 外部サブセットの公開識別子。
 * </p>
 * @param string $systemId [optional] <p>
 * 外部サブセットのシステム識別子。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_dtd(string $qualifiedName, string $publicId = null, string $systemId = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 現在の DTD を終了する
 * @link http://php.net/manual/ja/function.xmlwriter-end-dtd.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_end_dtd($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * DTD タグ全体を書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-dtd.php
 * @param string $name <p>
 * DTD 名。
 * </p>
 * @param string $publicId [optional] <p>
 * 外部サブセットの公開識別子。
 * </p>
 * @param string $systemId [optional] <p>
 * 外部サブセットのシステム識別子。
 * </p>
 * @param string $subset [optional] <p>
 * DTD の内容。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_dtd(string $name, string $publicId = null, string $systemId = null, string $subset = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * DTD 要素を開始する
 * @link http://php.net/manual/ja/function.xmlwriter-start-dtd-element.php
 * @param string $qualifiedName <p>
 * 作成するドキュメント型の修飾名。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_dtd_element(string $qualifiedName): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 現在の DTD 要素を終了する
 * @link http://php.net/manual/ja/function.xmlwriter-end-dtd-element.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_end_dtd_element($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * DTD 要素タグ全体を書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-dtd-element.php
 * @param string $name <p>
 * DTD 要素の名前。
 * </p>
 * @param string $content <p>
 * 要素の内容。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_dtd_element(string $name, string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * DTD 属性リストを開始する
 * @link http://php.net/manual/ja/function.xmlwriter-start-dtd-attlist.php
 * @param string $name <p>
 * 属性リストの名前。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_dtd_attlist(string $name): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 現在の DTD 属性リストを終了する
 * @link http://php.net/manual/ja/function.xmlwriter-end-dtd-attlist.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_end_dtd_attlist($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * DTD 属性リストタグ全体を書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-dtd-attlist.php
 * @param string $name <p>
 * DTD 属性リストの名前。
 * </p>
 * @param string $content <p>
 * DTD 属性リストの内容。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_dtd_attlist(string $name, string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * DTD エンティティを開始する
 * @link http://php.net/manual/ja/function.xmlwriter-start-dtd-entity.php
 * @param string $name <p>
 * エンティティの名前。
 * </p>
 * @param bool $isparam
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_start_dtd_entity(string $name, bool $isparam): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 現在の DTD エンティティを終了する
 * @link http://php.net/manual/ja/function.xmlwriter-end-dtd-entity.php
 * @param $xmlwriter
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_end_dtd_entity($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * DTD エンティティタグ全体を書き込む
 * @link http://php.net/manual/ja/function.xmlwriter-write-dtd-entity.php
 * @param string $name <p>
 * エンティティの名前。
 * </p>
 * @param string $content <p>
 * エンティティの内容。
 * </p>
 * @param bool $pe
 * @param string $pubid
 * @param string $sysid
 * @param string $ndataid
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xmlwriter_write_dtd_entity(string $name, string $content, bool $pe, string $pubid, string $sysid, string $ndataid): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * 現在のバッファを返す
 * @link http://php.net/manual/ja/function.xmlwriter-output-memory.php
 * @param bool $flush [optional] <p>
 * 出力バッファをフラッシュするかどうか。デフォルトは <b>TRUE</b>。
 * </p>
 * @return string 現在のバッファを文字列で返します。
 */
function xmlwriter_output_memory(bool $flush = true): string {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
 * 現在のバッファをフラッシュする
 * @link http://php.net/manual/ja/function.xmlwriter-flush.php
 * @param bool $empty [optional] <p>
 * バッファを空にするかどうか。デフォルトは <b>TRUE</b> です。
 * </p>
 * @return mixed ライターをメモリにオープンした場合は、この関数は出来上がった XML バッファを返します。
 * そうではなく URI を使用している場合は、この関数はバッファを書き込み、
 * 書き込んだバイト数を返します。
 */
function xmlwriter_flush(bool $empty = true) {}

// End of xmlwriter v.7.1.5
?>
