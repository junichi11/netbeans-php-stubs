<?php



namespace {

	/**
	 * <p>XMLReader 拡張モジュールは、プル型の XML パーサです。ドキュメント ストリーム内をカーソル風に進んでいき、その途中の各ノードで立ち止まります。</p>
	 * @link https://php.net/manual/ja/class.xmlreader.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class XMLReader {

		/**
		 * @var int <p>ノード型なし</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const NONE = 0;

		/**
		 * @var int <p>開始要素</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const ELEMENT = 1;

		/**
		 * @var int <p>属性ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const ATTRIBUTE = 2;

		/**
		 * @var int <p>テキストノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const TEXT = 3;

		/**
		 * @var int <p>CDATA ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const CDATA = 4;

		/**
		 * @var int <p>エンティティ参照ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const ENTITY_REF = 5;

		/**
		 * @var int <p>エンティティ宣言ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const ENTITY = 6;

		/**
		 * @var int <p>処理命令 (Processing Instruction) ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const PI = 7;

		/**
		 * @var int <p>コメントノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const COMMENT = 8;

		/**
		 * @var int <p>文書ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const DOC = 9;

		/**
		 * @var int <p>文書型ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const DOC_TYPE = 10;

		/**
		 * @var int <p>文書片ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const DOC_FRAGMENT = 11;

		/**
		 * @var int <p>記法ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const NOTATION = 12;

		/**
		 * @var int <p>Whitespace ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const WHITESPACE = 13;

		/**
		 * @var int <p>Significant Whitespace ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const SIGNIFICANT_WHITESPACE = 14;

		/**
		 * @var int <p>終了要素</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const END_ELEMENT = 15;

		/**
		 * @var int <p>終了エンティティ</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const END_ENTITY = 16;

		/**
		 * @var int <p>XML 宣言ノード</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const XML_DECLARATION = 17;

		/**
		 * @var int <p>DTD を読み込むが、妥当性は検証しない</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const LOADDTD = 1;

		/**
		 * @var int <p>DTD およびデフォルト属性を読み込むが、妥当性は検証しない</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const DEFAULTATTRS = 2;

		/**
		 * @var int <p>DTD を読み込み、パース時に妥当性を検証する</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const VALIDATE = 3;

		/**
		 * @var int <p>エンティティを参照で置き換える</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php
		 */
		const SUBST_ENTITIES = 4;

		/**
		 * @var int <p>ノード上の属性の数</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.attributecount
		 */
		public $attributeCount;

		/**
		 * @var string <p>ノードのベース URI</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.baseuri
		 */
		public $baseURI;

		/**
		 * @var int <p>ツリー内でのノードの階層 (0 から数える)</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.depth
		 */
		public $depth;

		/**
		 * @var bool <p>ノードが属性を保持しているかどうか</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.hasattributes
		 */
		public $hasAttributes;

		/**
		 * @var bool <p>ノードがテキストの値を保持しているかどうか</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.hasvalue
		 */
		public $hasValue;

		/**
		 * @var bool <p>属性が DTD のデフォルトかどうか</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.isdefault
		 */
		public $isDefault;

		/**
		 * @var bool <p>ノードが空要素のタグかどうか</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.isemptyelement
		 */
		public $isEmptyElement;

		/**
		 * @var string <p>ノードのローカル名</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.localname
		 */
		public $localName;

		/**
		 * @var string <p>ノードの限定名</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.name
		 */
		public $name;

		/**
		 * @var string <p>ノードに関連付けられた名前空間の URI</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.namespaceuri
		 */
		public $namespaceURI;

		/**
		 * @var int <p>ノードの型</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.nodetype
		 */
		public $nodeType;

		/**
		 * @var string <p>ノードに関連付けられた名前空間のプレフィックス</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.prefix
		 */
		public $prefix;

		/**
		 * @var string <p>ノードのテキスト値</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.value
		 */
		public $value;

		/**
		 * @var string <p>ノードが存在する xml:lang スコープ</p>
		 * @link https://php.net/manual/ja/class.xmlreader.php#xmlreader.props.xmllang
		 */
		public $xmlLang;

		/**
		 * パースする XML を含むデータを設定する
		 * <p>パースする XML を含むデータを設定します。</p>
		 * @param string $source <p>パースされる XML を含む文字列。</p>
		 * @param string $encoding <p>ドキュメントのエンコーディングあるいは <b><code>NULL</code></b>。</p>
		 * @param int $options <p>LIBXML_&#42; 定数のビットマスク。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 静的にコールされた場合には XMLReader を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
		 * @link https://php.net/manual/ja/xmlreader.xml.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function XML(string $source, string $encoding = NULL, int $options = 0): bool {}

		/**
		 * XMLReader の入力を閉じる
		 * <p>XMLReader オブジェクトが現在パースしている入力を閉じます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.close.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * 現在のノードのコピーを DOM オブジェクトとして返す
		 * <p>このメソッドは、現在のノードをコピーして適切な DOM オブジェクトを返します。</p>
		 * @param \DOMNode $basenode <p>DOM オブジェクトを作る対象の DOMDocument を示す DOMNode。</p>
		 * @return DOMNode <p>DOMNode か、エラー時には <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.expand.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function expand(\DOMNode $basenode = NULL): \DOMNode {}

		/**
		 * 名前をもとに、属性の値を取得する
		 * <p>指定した名前の属性の値を返します。属性が存在しなかったり 現在位置が要素ノードでなかったりした場合には <b><code>NULL</code></b> を返します。</p>
		 * @param string $name <p>属性の名前。</p>
		 * @return string <p>属性の値を返します。指定した名前 <code>name</code> の 属性が見つからなかったり、現在位置が要素ノードではなかったりした場合には <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.getattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getAttribute(string $name): string {}

		/**
		 * インデックスをもとに、属性の値を取得する
		 * <p>その位置をもとにして属性の値を返します。属性が存在しなかったり 現在位置が要素ノードでなかったりした場合には空の文字列を返します。</p>
		 * @param int $index <p>属性の位置。</p>
		 * @return string <p>属性の値を返します。指定した位置 <code>index</code> に 属性が見つからなかったり、現在位置が要素ではなかったりした場合には 空の文字列 (PHP 5.6 より前のバージョン) あるいは <b><code>NULL</code></b> (PHP 5.6 以降) を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.getattributeno.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getAttributeNo(int $index): string {}

		/**
		 * 名前および URI をもとに、属性の値を取得する
		 * <p>名前および名前空間 URI をもとにして属性の値を返します。 属性が存在しなかったり、現在位置が要素ノードでなかったりした場合には 空の文字列を返します。</p>
		 * @param string $localName <p>ローカルの名前。</p>
		 * @param string $namespaceURI <p>名前空間の URI。</p>
		 * @return string <p>属性の値を返します。指定した <code>localName</code> および <code>namespaceURI</code> に属性が見つからなかったり、 現在位置が要素ではなかったりした場合には空の文字列 (PHP 5.6 より前のバージョン) あるいは <b><code>NULL</code></b> (PHP 5.6 以降) を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.getattributens.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getAttributeNs(string $localName, string $namespaceURI): string {}

		/**
		 * 指定したプロパティが設定されているかどうかを示す
		 * <p>指定したプロパティが設定されているかどうかを示します。</p>
		 * @param int $property <p>パーサオプション定数 のうちのひとつ。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.getparserproperty.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getParserProperty(int $property): bool {}

		/**
		 * パースしているドキュメントの妥当性を示す
		 * <p>パースしているドキュメントが妥当なものであるかどうかを論理型で返します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.isvalid.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function isValid(): bool {}

		/**
		 * プレフィックスから、名前空間を検索する
		 * <p>指定したプレフィックスをもとに、スコープの名前空間を検索します。</p>
		 * @param string $prefix <p>プレフィックスを含む文字列。</p>
		 * @return string <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.lookupnamespace.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function lookupNamespace(string $prefix): string {}

		/**
		 * 指定した名前の属性にカーソルを移動する
		 * <p>指定した名前の属性にカーソルを移動します。</p>
		 * @param string $name <p>属性の名前。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.movetoattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToAttribute(string $name): bool {}

		/**
		 * 指定したインデックスの属性にカーソルを移動する
		 * <p>指定した位置の属性にカーソルを移動します。</p>
		 * @param int $index <p>属性の位置。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.movetoattributeno.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToAttributeNo(int $index): bool {}

		/**
		 * 指定した名前の属性にカーソルを移動する
		 * <p>指定した名前空間内で、指定した名前の属性にカーソルを移動します。</p>
		 * @param string $localName <p>ローカル名。</p>
		 * @param string $namespaceURI <p>名前空間の URI。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.movetoattributens.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToAttributeNs(string $localName, string $namespaceURI): bool {}

		/**
		 * 現在の属性の親要素にカーソルを移動する
		 * <p>現在の属性の親要素にカーソルを移動します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合、 あるいはメソッドがコールされた際の位置が属性ノードではなかった場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.movetoelement.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToElement(): bool {}

		/**
		 * 最初の属性にカーソルを移動する
		 * <p>最初の属性にカーソルを移動します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.movetofirstattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToFirstAttribute(): bool {}

		/**
		 * 次の属性にカーソルを移動する
		 * <p>現在位置が属性ノードの場合は次の属性にカーソルを移動します。 現在位置が要素ノードの場合は最初の属性にカーソルを移動します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.movetonextattribute.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function moveToNextAttribute(): bool {}

		/**
		 * すべてのサブツリーを飛ばして、次のノードにカーソルを移動する
		 * <p>すべてのサブツリーを飛ばして、カーソルを次のノードに移動します。</p>
		 * @param string $localname <p>移動先のノードの名前。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.next.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function next(string $localname = NULL): bool {}

		/**
		 * パースする XML を含む URI を設定する
		 * <p>パースされる XML ドキュメントを含む URI を設定します。</p>
		 * @param string $URI <p>ドキュメントを指す URI。</p>
		 * @param string $encoding <p>ドキュメントのエンコーディングあるいは <b><code>NULL</code></b>。</p>
		 * @param int $options <p>LIBXML_&#42; 定数のビットマスク。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 静的にコールされた場合には XMLReader を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
		 * @link https://php.net/manual/ja/xmlreader.open.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function open(string $URI, string $encoding = NULL, int $options = 0): bool {}

		/**
		 * ドキュメント内の次のノードに移動する
		 * <p>ドキュメント内の次のノードにカーソルを移動します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.read.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function read(): bool {}

		/**
		 * 現在のノードから XML を取得する
		 * <p>現在のノードの中身を、子ノードやマークアップも含めて読み込みます。</p>
		 * @return string <p>現在のノードの中身を文字列で返します。失敗した場合は空文字列を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.readinnerxml.php
		 * @see XMLReader::readString(), XMLReader::readOuterXML(), XMLReader::expand()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function readInnerXML(): string {}

		/**
		 * 現在のノードから自分自身も含めた XML を取得する
		 * <p>現在のノードの中身を、ノード自身も含めて読み込みます。</p>
		 * @return string <p>現在のノードの中身を、自分自身も含めて文字列で返します。失敗した場合は空文字列を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.readouterxml.php
		 * @see XMLReader::readString(), XMLReader::readInnerXML(), XMLReader::expand()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function readOuterXML(): string {}

		/**
		 * 現在のノードの内容を文字列で読み込む
		 * <p>現在のノードの内容を文字列で読み込みます。</p>
		 * @return string <p>現在のノードの内容を文字列で返します。失敗した場合は空文字列を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.readstring.php
		 * @see XMLReader::readOuterXML(), XMLReader::readInnerXML(), XMLReader::expand()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function readString(): string {}

		/**
		 * パーサのオプションを設定する
		 * <p>パーサのオプションを設定します。オプションは、 <code>XMLReader::open()</code> あるいは <code>XMLReader::xml()</code> がコールされた後で、かつ <code>XMLReader::read()</code> が最初にコールされる前に 設定する必要があります。</p>
		 * @param int $property <p>パーサオプション定数 のひとつ。</p>
		 * @param bool $value <p><b><code>TRUE</code></b> を設定するとオプションが有効になり、それ以外を設定すると 無効になります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.setparserproperty.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setParserProperty(int $property, bool $value): bool {}

		/**
		 * RelaxNG スキーマのファイル名あるいは URI を設定する
		 * <p>検証の際に使用する RelaxNG スキーマのファイル名あるいは URI を 設定します。</p>
		 * @param string $filename <p>RelaxNG スキーマを指すファイル名あるいは URI。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.setrelaxngschema.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setRelaxNGSchema(string $filename): bool {}

		/**
		 * RelaxNG スキーマを含むデータを設定する
		 * <p>検証の際に使用する RelaxNG スキーマを含むデータを設定します。</p>
		 * @param string $source <p>RelaxNG スキーマを含む文字列。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.setrelaxngschemasource.php
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function setRelaxNGSchemaSource(string $source): bool {}

		/**
		 * ドキュメントを XSD で検証する
		 * <p>W3C XSD スキーマを用いて、処理中のドキュメントを検証します。 最初の Read() の前にのみ実行可能です。</p>
		 * @param string $filename <p>XSD スキーマファイル名。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/xmlreader.setschema.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setSchema(string $filename): bool {}
	}

}
