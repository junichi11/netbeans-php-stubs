<?php

// Start of xmlreader v.7.1.5

/**
 * XMLReader 拡張モジュールは、プル型の XML パーサです。ドキュメント
 * ストリーム内をカーソル風に進んでいき、その途中の各ノードで立ち止まります。
 * @link http://php.net/manual/ja/class.xmlreader.php
 */
class XMLReader  {
	const NONE = 0;
	const ELEMENT = 1;
	const ATTRIBUTE = 2;
	const TEXT = 3;
	const CDATA = 4;
	const ENTITY_REF = 5;
	const ENTITY = 6;
	const PI = 7;
	const COMMENT = 8;
	const DOC = 9;
	const DOC_TYPE = 10;
	const DOC_FRAGMENT = 11;
	const NOTATION = 12;
	const WHITESPACE = 13;
	const SIGNIFICANT_WHITESPACE = 14;
	const END_ELEMENT = 15;
	const END_ENTITY = 16;
	const XML_DECLARATION = 17;
	const LOADDTD = 1;
	const DEFAULTATTRS = 2;
	const VALIDATE = 3;
	const SUBST_ENTITIES = 4;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * XMLReader の入力を閉じる
	 * @link http://php.net/manual/ja/xmlreader.close.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function close(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 名前をもとに、属性の値を取得する
	 * @link http://php.net/manual/ja/xmlreader.getattribute.php
	 * @param string $name <p>
	 * 属性の名前。
	 * </p>
	 * @return string 属性の値を返します。指定した名前 <i>name</i> の
	 * 属性が見つからなかったり、現在位置が要素ノードではなかったりした場合には
	 * <b>NULL</b> を返します。
	 */
	public function getAttribute(string $name): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * インデックスをもとに、属性の値を取得する
	 * @link http://php.net/manual/ja/xmlreader.getattributeno.php
	 * @param int $index <p>
	 * 属性の位置。
	 * </p>
	 * @return string 属性の値を返します。指定した位置 <i>index</i> に
	 * 属性が見つからなかったり、現在位置が要素ではなかったりした場合には
	 * 空の文字列 (PHP 5.6 より前のバージョン) あるいは <b>NULL</b> (PHP 5.6 以降) を返します。
	 */
	public function getAttributeNo(int $index): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 名前および URI をもとに、属性の値を取得する
	 * @link http://php.net/manual/ja/xmlreader.getattributens.php
	 * @param string $localName <p>
	 * ローカルの名前。
	 * </p>
	 * @param string $namespaceURI <p>
	 * 名前空間の URI。
	 * </p>
	 * @return string 属性の値を返します。指定した <i>localName</i>
	 * および <i>namespaceURI</i> に属性が見つからなかったり、
	 * 現在位置が要素ではなかったりした場合には空の文字列
	 * (PHP 5.6 より前のバージョン) あるいは <b>NULL</b> (PHP 5.6 以降) を返します。
	 */
	public function getAttributeNs(string $localName, string $namespaceURI): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 指定したプロパティが設定されているかどうかを示す
	 * @link http://php.net/manual/ja/xmlreader.getparserproperty.php
	 * @param int $property <p>
	 * パーサオプション定数
	 * のうちのひとつ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getParserProperty(int $property): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * パースしているドキュメントの妥当性を示す
	 * @link http://php.net/manual/ja/xmlreader.isvalid.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isValid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * プレフィックスから、名前空間を検索する
	 * @link http://php.net/manual/ja/xmlreader.lookupnamespace.php
	 * @param string $prefix <p>
	 * プレフィックスを含む文字列。
	 * </p>
	 * @return string 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function lookupNamespace(string $prefix): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 指定したインデックスの属性にカーソルを移動する
	 * @link http://php.net/manual/ja/xmlreader.movetoattributeno.php
	 * @param int $index <p>
	 * 属性の位置。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function moveToAttributeNo(int $index): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 指定した名前の属性にカーソルを移動する
	 * @link http://php.net/manual/ja/xmlreader.movetoattribute.php
	 * @param string $name <p>
	 * 属性の名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function moveToAttribute(string $name): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 指定した名前の属性にカーソルを移動する
	 * @link http://php.net/manual/ja/xmlreader.movetoattributens.php
	 * @param string $localName <p>
	 * ローカル名。
	 * </p>
	 * @param string $namespaceURI <p>
	 * 名前空間の URI。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function moveToAttributeNs(string $localName, string $namespaceURI): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の属性の親要素にカーソルを移動する
	 * @link http://php.net/manual/ja/xmlreader.movetoelement.php
	 * @return bool 成功した場合に <b>TRUE</b>、失敗した場合、
	 * あるいはメソッドがコールされた際の位置が属性ノードではなかった場合に
	 * <b>FALSE</b> を返します。
	 */
	public function moveToElement(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 最初の属性にカーソルを移動する
	 * @link http://php.net/manual/ja/xmlreader.movetofirstattribute.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function moveToFirstAttribute(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 次の属性にカーソルを移動する
	 * @link http://php.net/manual/ja/xmlreader.movetonextattribute.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function moveToNextAttribute(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * パースする XML を含む URI を設定する
	 * @link http://php.net/manual/ja/xmlreader.open.php
	 * @param string $URI <p>
	 * ドキュメントを指す URI。
	 * </p>
	 * @param string $encoding [optional] <p>
	 * ドキュメントのエンコーディングあるいは <b>NULL</b>。
	 * </p>
	 * @param int $options [optional] <p>
	 * LIBXML_* 定数のビットマスク。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 静的にコールされた場合には <b>XMLReader</b> を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function open(string $URI, string $encoding = null, int $options = 0): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * ドキュメント内の次のノードに移動する
	 * @link http://php.net/manual/ja/xmlreader.read.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function read(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * すべてのサブツリーを飛ばして、次のノードにカーソルを移動する
	 * @link http://php.net/manual/ja/xmlreader.next.php
	 * @param string $localname [optional] <p>
	 * 移動先のノードの名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function next(string $localname = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 現在のノードから XML を取得する
	 * @link http://php.net/manual/ja/xmlreader.readinnerxml.php
	 * @return string 現在のノードの中身を文字列で返します。失敗した場合は空文字列を返します。
	 */
	public function readInnerXml(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 現在のノードから自分自身も含めた XML を取得する
	 * @link http://php.net/manual/ja/xmlreader.readouterxml.php
	 * @return string 現在のノードの中身を、自分自身も含めて文字列で返します。失敗した場合は空文字列を返します。
	 */
	public function readOuterXml(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 現在のノードの内容を文字列で読み込む
	 * @link http://php.net/manual/ja/xmlreader.readstring.php
	 * @return string 現在のノードの内容を文字列で返します。失敗した場合は空文字列を返します。
	 */
	public function readString(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ドキュメントを XSD で検証する
	 * @link http://php.net/manual/ja/xmlreader.setschema.php
	 * @param string $filename <p>
	 * XSD スキーマファイル名。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setSchema(string $filename): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * パーサのオプションを設定する
	 * @link http://php.net/manual/ja/xmlreader.setparserproperty.php
	 * @param int $property <p>
	 * パーサオプション定数
	 * のひとつ。
	 * </p>
	 * @param bool $value <p>
	 * <b>TRUE</b> を設定するとオプションが有効になり、それ以外を設定すると
	 * 無効になります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setParserProperty(int $property, bool $value): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * RelaxNG スキーマのファイル名あるいは URI を設定する
	 * @link http://php.net/manual/ja/xmlreader.setrelaxngschema.php
	 * @param string $filename <p>
	 * RelaxNG スキーマを指すファイル名あるいは URI。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setRelaxNGSchema(string $filename): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * RelaxNG スキーマを含むデータを設定する
	 * @link http://php.net/manual/ja/xmlreader.setrelaxngschemasource.php
	 * @param string $source <p>
	 * RelaxNG スキーマを含む文字列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setRelaxNGSchemaSource(string $source): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * パースする XML を含むデータを設定する
	 * @link http://php.net/manual/ja/xmlreader.xml.php
	 * @param string $source <p>
	 * パースされる XML を含む文字列。
	 * </p>
	 * @param string $encoding [optional] <p>
	 * ドキュメントのエンコーディングあるいは <b>NULL</b>。
	 * </p>
	 * @param int $options [optional] <p>
	 * LIBXML_* 定数のビットマスク。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 静的にコールされた場合には <b>XMLReader</b> を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function XML(string $source, string $encoding = null, int $options = 0): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のノードのコピーを DOM オブジェクトとして返す
	 * @link http://php.net/manual/ja/xmlreader.expand.php
	 * @param DOMNode $basenode [optional] <p>
	 * DOM オブジェクトを作る対象の <b>DOMDocument</b> を示す <b>DOMNode</b>。
	 * </p>
	 * @return DOMNode <b>DOMNode</b> か、エラー時には <b>FALSE</b> を返します。
	 */
	public function expand(DOMNode $basenode = null): DOMNode {}

}
// End of xmlreader v.7.1.5
?>
