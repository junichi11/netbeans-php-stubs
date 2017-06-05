<?php

// Start of dom v.20031129

/**
 * しかるべき状況、すなわち論理的に不可能な操作を行った際などの場合に
 * DOM 操作は例外を発生させます。
 * @link http://php.net/manual/ja/class.domexception.php
 */
final class DOMException extends Exception implements Throwable {
	protected $message;
	protected $file;
	protected $line;
	public $code;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外をコピーする
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外を作成する
	 * @link http://php.net/manual/ja/exception.construct.php
	 * @param string $message [optional] <p>
	 * スローする例外メッセージ。
	 * </p>
	 * @param int $code [optional] <p>
	 * 例外コード。
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * 以前に使われた例外。例外の連結に使用します。
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外メッセージを取得する
	 * @link http://php.net/manual/ja/exception.getmessage.php
	 * @return string 例外メッセージ文字列を返します。
	 */
	final public function getMessage(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外コードを取得する
	 * @link http://php.net/manual/ja/exception.getcode.php
	 * @return mixed 例外コードを整数値で返します。しかし、
	 * <b>Exception</b> クラスを継承したクラスでは、違う型を返すこともあります
	 * (たとえば <b>PDOException</b> は文字列を返します)。
	 */
	final public function getCode() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られたファイルを取得する
	 * @link http://php.net/manual/ja/exception.getfile.php
	 * @return string 例外が作られたファイルの名前を返します。
	 */
	final public function getFile(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られた行を取得する
	 * @link http://php.net/manual/ja/exception.getline.php
	 * @return int 例外が作られた行番号を返します。
	 */
	final public function getLine(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを取得する
	 * @link http://php.net/manual/ja/exception.gettrace.php
	 * @return array 例外のスタックトレースを配列で返します。
	 */
	final public function getTrace(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 前の例外を返す
	 * @link http://php.net/manual/ja/exception.getprevious.php
	 * @return Exception 前に発生した <b>Throwable</b>、あるいはそれが存在しない場合は <b>NULL</b> を返します。
	 */
	final public function getPrevious(): Exception {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを文字列で取得する
	 * @link http://php.net/manual/ja/exception.gettraceasstring.php
	 * @return string 例外のスタックトレースを文字列で返します。
	 */
	final public function getTraceAsString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外の文字列表現
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @return string 例外を文字列で表現したものを返します。
	 */
	public function __toString(): string {}

}

class DOMStringList  {

	/**
	 * @param $index
	 */
	public function item($index) {}

}

/**
 * @link http://php.net/manual/ja/book.dom.php
 */
class DOMNameList  {

	/**
	 * @param $index
	 */
	public function getName($index) {}

	/**
	 * @param $index
	 */
	public function getNamespaceURI($index) {}

}

class DOMImplementationList  {

	/**
	 * @param $index
	 */
	public function item($index) {}

}

class DOMImplementationSource  {

	/**
	 * @param $features
	 */
	public function getDomimplementation($features) {}

	/**
	 * @param $features
	 */
	public function getDomimplementations($features) {}

}

/**
 * <b>DOMImplementation</b> インターフェイスは、
 * 個々のドキュメントオブジェクトモデルのインスタンス独自の操作を行うためのメソッド群を提供します。
 * @link http://php.net/manual/ja/class.domimplementation.php
 */
class DOMImplementation  {

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * DOM 実装が、指定した機能を実装しているかどうかを調べる
	 * @link http://php.net/manual/ja/domimplementation.hasfeature.php
	 * @param string $feature <p>
	 * 調べる機能。
	 * </p>
	 * @param string $version <p>
	 * 調べる <i>feature</i> のバージョン番号。
	 * DOM level 2 においては、これは 2.0 あるいは
	 * 1.0 のいずれかです。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasFeature(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 空の DOMDocumentType オブジェクトを作成する
	 * @link http://php.net/manual/ja/domimplementation.createdocumenttype.php
	 * @param string $qualifiedName [optional] <p>
	 * 作成されるドキュメント型の修飾名。
	 * </p>
	 * @param string $publicId [optional] <p>
	 * 外部サブセットの公開 ID。
	 * </p>
	 * @param string $systemId [optional] <p>
	 * 外部サブセットのシステム ID。
	 * </p>
	 * @return DOMDocumentType ownerDocument を <b>NULL</b> に設定した
	 * 新しい <b>DOMDocumentType</b> ノードを返します。
	 */
	public function createDocumentType(string $qualifiedName = null, string $publicId = null, string $systemId = null): DOMDocumentType {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した型とドキュメント要素の DOMDocument オブジェクトを作成する
	 * @link http://php.net/manual/ja/domimplementation.createdocument.php
	 * @param string $namespaceURI [optional] <p>
	 * 作成するドキュメント要素の名前空間 URI。
	 * </p>
	 * @param string $qualifiedName [optional] <p>
	 * 作成するドキュメント要素の修飾名。
	 * </p>
	 * @param DOMDocumentType $doctype [optional] <p>
	 * 作成するドキュメントの型、あるいは <b>NULL</b>。
	 * </p>
	 * @return DOMDocument 新しい <b>DOMDocument</b> オブジェクトを返します。
	 * <i>namespaceURI</i>、<i>qualifiedName</i>
	 * および <i>doctype</i> が null の場合は、
	 * ドキュメント要素を含まない空の <b>DOMDocument</b>
	 * を返します。
	 */
	public function createDocument(string $namespaceURI = null, string $qualifiedName = null, DOMDocumentType $doctype = null): DOMDocument {}

}

/**
 * @link http://php.net/manual/ja/class.domnode.php
 */
class DOMNode  {
	/**
	 * <p style="margin-top:0;">&#29694;&#22312;&#12398;&#12494;&#12540;&#12489;&#22411;&#12398;&#27491;&#30906;&#12394;&#21517;&#21069;&#12434;&#36820;&#12377;</p>
	 * @var string
	 */
	public $nodeName;
	/**
	 * <p style="margin-top:0;">
	 * &#12381;&#12398;&#22411;&#12395;&#24540;&#12376;&#12390;&#12494;&#12540;&#12489;&#12398;&#20516;&#12434;&#36820;&#12377;&#12290;
	 * W3C &#12398;&#20181;&#27096;&#12392;&#12399;&#30064;&#12394;&#12426;&#12289;
	 * <b>DOMElement</b> &#12494;&#12540;&#12489;&#12398;&#20516;&#12399; <b><code>NULL</code></b> &#12391;&#12399;&#12394;&#12367; <b>DOMNode::textContent</b> &#12392;&#31561;&#12375;&#12367;&#12394;&#12427;&#12290;
	 * </p>
	 * @var string
	 */
	public $nodeValue;
	/**
	 * <p style="margin-top:0;">&#12494;&#12540;&#12489;&#12398;&#22411;&#12434;&#12289;&#23450;&#32681;&#28168;&#12415;&#12398;&#23450;&#25968; <b>XML_xxx_NODE</b> &#12398;&#12356;&#12378;&#12428;&#12363;&#12391;&#36820;&#12377;</p>
	 * @var int
	 */
	public $nodeType;
	/**
	 * <p style="margin-top:0;">&#12371;&#12398;&#12494;&#12540;&#12489;&#12398;&#35242; (&#23384;&#22312;&#12375;&#12394;&#12356;&#22580;&#21512;&#12399; <b><code>NULL</code></b>) &#12434;&#36820;&#12377;</p>
	 * @var DOMNode
	 */
	public $parentNode;
	/**
	 * <p style="margin-top:0;">
	 * &#12371;&#12398;&#12494;&#12540;&#12489;&#12398;&#12377;&#12409;&#12390;&#12398;&#23376;&#12434;&#21547;&#12416; <b>DOMNodeList</b>&#12290;
	 * &#23376;&#12364;&#23384;&#22312;&#12375;&#12394;&#12356;&#22580;&#21512;&#12399;&#12289;&#31354;&#12398; <b>DOMNodeList</b>
	 * </p>
	 * @var DOMNodeList
	 */
	public $childNodes;
	/**
	 * <p style="margin-top:0;">
	 * &#12371;&#12398;&#12494;&#12540;&#12489;&#12398;&#26368;&#21021;&#12398;&#23376;&#12290;&#23384;&#22312;&#12375;&#12394;&#12356;&#22580;&#21512;&#12399; <b><code>NULL</code></b> &#12434;&#36820;&#12377;
	 * </p>
	 * @var DOMNode
	 */
	public $firstChild;
	/**
	 * <p style="margin-top:0;">&#12371;&#12398;&#12494;&#12540;&#12489;&#12398;&#26368;&#24460;&#12398;&#23376;&#12290;&#23384;&#22312;&#12375;&#12394;&#12356;&#22580;&#21512;&#12399; <b><code>NULL</code></b> &#12434;&#36820;&#12377;</p>
	 * @var DOMNode
	 */
	public $lastChild;
	/**
	 * <p style="margin-top:0;">
	 * &#12371;&#12398;&#12494;&#12540;&#12489;&#12398;&#30452;&#21069;&#12398;&#12494;&#12540;&#12489;&#12290;&#23384;&#22312;&#12375;&#12394;&#12356;&#22580;&#21512;&#12399; <b><code>NULL</code></b> &#12434;&#36820;&#12377;
	 * </p>
	 * @var DOMNode
	 */
	public $previousSibling;
	/**
	 * <p style="margin-top:0;">
	 * &#12371;&#12398;&#12494;&#12540;&#12489;&#12398;&#30452;&#24460;&#12398;&#12494;&#12540;&#12489;&#12290;&#23384;&#22312;&#12375;&#12394;&#12356;&#22580;&#21512;&#12399; <b><code>NULL</code></b> &#12434;&#36820;&#12377;
	 * </p>
	 * @var DOMNode
	 */
	public $nextSibling;
	/**
	 * <p style="margin-top:0;">
	 * &#12371;&#12398;&#12494;&#12540;&#12489;&#12364; <b>DOMElement</b> &#12398;&#22580;&#21512;&#12399;
	 * &#12494;&#12540;&#12489;&#12398;&#23646;&#24615;&#12434;&#21547;&#12416; <b>DOMNamedNodeMap</b>&#12289;
	 * &#12381;&#12428;&#20197;&#22806;&#12398;&#22580;&#21512;&#12399; <b><code>NULL</code></b>
	 * </p>
	 * @var DOMNamedNodeMap
	 */
	public $attributes;
	/**
	 * <p style="margin-top:0;">&#12371;&#12398;&#12494;&#12540;&#12489;&#12395;&#38306;&#36899;&#20184;&#12369;&#12425;&#12428;&#12390;&#12356;&#12427; <b>DOMDocument</b> &#12458;&#12502;&#12472;&#12455;&#12463;&#12488;</p>
	 * @var DOMDocument
	 */
	public $ownerDocument;
	/**
	 * <p style="margin-top:0;">&#12371;&#12398;&#12494;&#12540;&#12489;&#12398;&#21517;&#21069;&#31354;&#38291; URI&#12290;&#25351;&#23450;&#12373;&#12428;&#12390;&#12356;&#12394;&#12356;&#22580;&#21512;&#12399; <b><code>NULL</code></b></p>
	 * @var string
	 */
	public $namespaceURI;
	/**
	 * <p style="margin-top:0;">&#12371;&#12398;&#12494;&#12540;&#12489;&#12398;&#21517;&#21069;&#31354;&#38291;&#12503;&#12524;&#12501;&#12451;&#12483;&#12463;&#12473;&#12290;&#25351;&#23450;&#12373;&#12428;&#12390;&#12356;&#12394;&#12356;&#22580;&#21512;&#12399; <b><code>NULL</code></b></p>
	 * @var string
	 */
	public $prefix;
	/**
	 * <p style="margin-top:0;">&#12371;&#12398;&#12494;&#12540;&#12489;&#12398;&#21517;&#21069;&#12398;&#12525;&#12540;&#12459;&#12523;&#37096;&#20998;&#12434;&#36820;&#12377;</p>
	 * @var string
	 */
	public $localName;
	/**
	 * <p style="margin-top:0;">
	 * &#12371;&#12398;&#12494;&#12540;&#12489;&#12398;&#23436;&#20840;&#12394;&#12505;&#12540;&#12473; URI&#12290;&#12418;&#12375;&#23455;&#35013;&#12364;&#23436;&#20840;&#12394; URL &#12434;
	 * &#12391;&#12365;&#12394;&#12363;&#12387;&#12383;&#22580;&#21512;&#12399; <b><code>NULL</code></b>
	 * </p>
	 * @var string
	 */
	public $baseURI;
	/**
	 * <p style="margin-top:0;">&#12371;&#12398;&#12494;&#12540;&#12489;&#12392;&#12381;&#12398;&#23376;&#23403;&#12494;&#12540;&#12489;&#12398;&#12486;&#12461;&#12473;&#12488;</p>
	 * @var string
	 */
	public $textContent;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

class DOMNameSpaceNode  {
}

/**
 * @link http://php.net/manual/ja/class.domdocumentfragment.php
 */
class DOMDocumentFragment extends DOMNode  {

	public function __construct() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 生の XML データを追加する
	 * @link http://php.net/manual/ja/domdocumentfragment.appendxml.php
	 * @param string $data <p>
	 * 追加する XML。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function appendXML(string $data): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

/**
 * HTML ドキュメントあるいは XML ドキュメント全体を表し、
 * ドキュメントツリーのルートとなります。
 * @link http://php.net/manual/ja/class.domdocument.php
 */
class DOMDocument extends DOMNode  {
	/**
	 * <p style="margin-top:0;">
	 * &#38750;&#25512;&#22888;&#12290;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12398;&#23455;&#38555;&#12398;&#12456;&#12531;&#12467;&#12540;&#12487;&#12451;&#12531;&#12464;&#12290;
	 * &#35501;&#12415;&#36796;&#12415;&#23554;&#29992;&#12391;&#12289;
	 * encoding
	 * &#12392;&#21516;&#31561;&#12398;&#20869;&#23481;&#12391;&#12377;&#12290;
	 * </p>
	 * @var string
	 */
	public $actualEncoding;
	/**
	 * <p style="margin-top:0;">
	 * &#38750;&#25512;&#22888;&#12290;
	 * <b>DOMDocument::normalizeDocument()</b>
	 * &#12434;&#23455;&#34892;&#12377;&#12427;&#38555;&#12395;&#20351;&#29992;&#12377;&#12427;&#35373;&#23450;&#12290;
	 * </p>
	 * @var DOMConfiguration
	 */
	public $config;
	/**
	 * <p style="margin-top:0;">&#12371;&#12398;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12395;&#38306;&#36899;&#20184;&#12369;&#12425;&#12428;&#12383;&#25991;&#26360;&#22411;&#23459;&#35328;</p>
	 * @var DOMDocumentType
	 */
	public $doctype;
	/**
	 * <p style="margin-top:0;">
	 * &#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12398;&#23376;&#12494;&#12540;&#12489;&#12391;&#12354;&#12427;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#35201;&#32032;&#12395;&#23550;&#12375;&#12289;
	 * &#30452;&#25509;&#12450;&#12463;&#12475;&#12473;&#12377;&#12427;&#12383;&#12417;&#12395;&#20415;&#21033;&#12394;&#23646;&#24615;
	 * </p>
	 * @var DOMElement
	 */
	public $documentElement;
	/**
	 * <p style="margin-top:0;">&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12398;&#20301;&#32622;&#12290;&#26410;&#23450;&#32681;&#12398;&#22580;&#21512;&#12399; <b><code>NULL</code></b></p>
	 * @var string
	 */
	public $documentURI;
	/**
	 * <p style="margin-top:0;">
	 * XML &#23459;&#35328;&#12391;&#25351;&#23450;&#12375;&#12383;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12398;&#12456;&#12531;&#12467;&#12540;&#12487;&#12451;&#12531;&#12464;&#12290;
	 * &#12371;&#12398;&#23646;&#24615;&#12399;&#12289;DOM Level 3 &#12398;&#26368;&#32066;&#30340;&#12394;&#20181;&#27096;&#12395;&#12399;&#23384;&#22312;&#12375;&#12414;&#12379;&#12435;&#12290;
	 * &#12375;&#12363;&#12375;&#12289;&#12371;&#12398;&#23455;&#35013;&#12391; XML &#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12398;&#12456;&#12531;&#12467;&#12540;&#12487;&#12451;&#12531;&#12464;&#12434;&#25201;&#12358;&#12395;&#12399;&#12371;&#12428;&#12434;&#20351;&#29992;&#12377;&#12427;&#12375;&#12363;&#12354;&#12426;&#12414;&#12379;&#12435;&#12290;
	 * </p>
	 * @var string
	 */
	public $encoding;
	/**
	 * <p style="margin-top:0;">&#23383;&#19979;&#12370;&#12420;&#31354;&#30333;&#12434;&#32771;&#24942;&#12375;&#12390;&#12365;&#12428;&#12356;&#12395;&#25972;&#24418;&#12375;&#12383;&#20986;&#21147;&#12434;&#34892;&#12358;&#12290;</p>
	 * @var bool
	 */
	public $formatOutput;
	/**
	 * <p style="margin-top:0;">
	 * &#12371;&#12398;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12434;&#20966;&#29702;&#12377;&#12427;
	 * <b>DOMImplementation</b> &#12458;&#12502;&#12472;&#12455;&#12463;&#12488;
	 * </p>
	 * @var DOMImplementation
	 */
	public $implementation;
	/**
	 * <p style="margin-top:0;">&#20313;&#20998;&#12394;&#31354;&#30333;&#12434;&#21462;&#12426;&#38500;&#12363;&#12394;&#12356;&#12290;&#12487;&#12501;&#12457;&#12523;&#12488;&#12399; <b><code>TRUE</code></b></p>
	 * @var bool
	 */
	public $preserveWhiteSpace;
	/**
	 * <p style="margin-top:0;">
	 * &#12503;&#12525;&#12503;&#12521;&#12452;&#12456;&#12479;&#12522;&#12290;
	 * &#12522;&#12459;&#12496;&#12522;&#12540;&#12514;&#12540;&#12489;&#12434;&#26377;&#21177;&#12395;&#12375;&#12289;&#25972;&#24418;&#24335;&#12391;&#12394;&#12356;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12398;&#12497;&#12540;&#12473;&#12434;&#35430;&#12415;&#12414;&#12377;&#12290;
	 * &#12371;&#12398;&#23646;&#24615;&#12399; DOM &#12398;&#20181;&#27096;&#12395;&#12399;&#12394;&#12367;&#12289;libxml &#12395;&#22266;&#26377;&#12398;&#12418;&#12398;&#12391;&#12377;&#12290;
	 * </p>
	 * @var bool
	 */
	public $recover;
	/**
	 * <p style="margin-top:0;">
	 * &#25991;&#26360;&#22411;&#23459;&#35328;&#12391;&#22806;&#37096;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12434;&#35501;&#12415;&#36796;&#12416;&#38555;&#12395; <b><code>TRUE</code></b> &#12434;&#35373;&#23450;&#12377;&#12427;&#12290;
	 * XML &#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12395;&#25991;&#23383;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12434;&#21547;&#12417;&#12427;&#38555;&#12395;&#20415;&#21033;&#12391;&#12377;&#12290;
	 * </p>
	 * @var bool
	 */
	public $resolveExternals;
	/**
	 * <p style="margin-top:0;">
	 * &#38750;&#25512;&#22888;&#12290;
	 * &#12381;&#12398;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12364;&#12473;&#12479;&#12531;&#12489;&#12450;&#12525;&#12540;&#12531;&#12363;&#12393;&#12358;&#12363;&#12434; XML &#23459;&#35328;&#12391;&#25351;&#23450;&#12375;&#12383;&#12418;&#12398;&#12290;
	 * xmlStandalone
	 * &#12395;&#23550;&#24540;&#12375;&#12414;&#12377;&#12290;
	 * </p>
	 * @var bool
	 */
	public $standalone;
	/**
	 * <p style="margin-top:0;">&#12456;&#12521;&#12540;&#26178;&#12395; <b>DOMException</b> &#12434;&#12473;&#12525;&#12540;&#12377;&#12427;&#12290;&#12487;&#12501;&#12457;&#12523;&#12488;&#12399; <b><code>TRUE</code></b></p>
	 * @var bool
	 */
	public $strictErrorChecking;
	/**
	 * <p style="margin-top:0;">
	 * &#12503;&#12525;&#12503;&#12521;&#12452;&#12456;&#12479;&#12522;&#12290;
	 * &#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12398;&#32622;&#25563;&#12434;&#34892;&#12358;&#12363;&#12393;&#12358;&#12363;&#12290;
	 * &#12371;&#12398;&#23646;&#24615;&#12399; DOM &#12398;&#20181;&#27096;&#12395;&#12399;&#12394;&#12367;&#12289;libxml &#12395;&#22266;&#26377;&#12398;&#12418;&#12398;&#12391;&#12377;&#12290;
	 * </p>
	 * @var bool
	 */
	public $substituteEntities;
	/**
	 * <p style="margin-top:0;">DTD &#12434;&#35501;&#12415;&#36796;&#12435;&#12391;&#26908;&#35388;&#12377;&#12427;&#12290;&#12487;&#12501;&#12457;&#12523;&#12488;&#12399; <b><code>FALSE</code></b></p>
	 * @var bool
	 */
	public $validateOnParse;
	/**
	 * <p style="margin-top:0;">
	 * &#38750;&#25512;&#22888;&#12290;
	 * XML &#12398;&#12496;&#12540;&#12472;&#12519;&#12531;&#12290;
	 * xmlVersion
	 * &#12395;&#23550;&#24540;&#12375;&#12414;&#12377;&#12290;
	 * </p>
	 * @var string
	 */
	public $version;
	/**
	 * <p style="margin-top:0;">
	 * XML &#23459;&#35328;&#12398;&#19968;&#37096;&#12392;&#12375;&#12390;&#12289;&#12371;&#12398;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12398;&#12456;&#12531;&#12467;&#12540;&#12487;&#12451;&#12531;&#12464;&#12434;
	 * &#25351;&#23450;&#12377;&#12427;&#23646;&#24615;&#12290;&#25351;&#23450;&#12373;&#12428;&#12390;&#12356;&#12394;&#12356;&#22580;&#21512;&#12420;&#19981;&#26126;&#12394;&#22580;&#21512; (&#12383;&#12392;&#12360;&#12400;
	 * &#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12364;&#12513;&#12514;&#12522;&#19978;&#12395;&#23384;&#22312;&#12377;&#12427;&#22580;&#21512;&#12394;&#12393;) &#12399; <b><code>NULL</code></b>
	 * </p>
	 * @var string
	 */
	public $xmlEncoding;
	/**
	 * <p style="margin-top:0;">
	 * XML &#23459;&#35328;&#12398;&#19968;&#37096;&#12392;&#12375;&#12390;&#12289;&#12371;&#12398;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12364;&#12473;&#12479;&#12531;&#12489;&#12450;&#12525;&#12540;&#12531;&#12363;
	 * &#12393;&#12358;&#12363;&#12434;&#25351;&#23450;&#12377;&#12427;&#12290;&#25351;&#23450;&#12373;&#12428;&#12390;&#12356;&#12394;&#12356;&#22580;&#21512;&#12399;  <b><code>FALSE</code></b>
	 * </p>
	 * @var bool
	 */
	public $xmlStandalone;
	/**
	 * <p style="margin-top:0;">
	 * XML &#23459;&#35328;&#12398;&#19968;&#37096;&#12392;&#12375;&#12390;&#12289;&#12371;&#12398;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12398;&#12496;&#12540;&#12472;&#12519;&#12531;&#30058;&#21495;&#12434;&#25351;&#23450;&#12377;&#12427;&#12290;
	 * &#12496;&#12540;&#12472;&#12519;&#12531;&#30058;&#21495;&#12364;&#23450;&#32681;&#12373;&#12428;&#12390;&#12362;&#12425;&#12378;&#12289;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12364; "XML" &#12398;&#27231;&#33021;&#12434;
	 * &#12469;&#12509;&#12540;&#12488;&#12375;&#12390;&#12356;&#12427;&#22580;&#21512;&#12399;&#12289;&#20516;&#12399; "1.0"
	 * </p>
	 * @var string
	 */
	public $xmlVersion;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい要素ノードを作成する
	 * @link http://php.net/manual/ja/domdocument.createelement.php
	 * @param string $name <p>
	 * 要素のタグ名。
	 * </p>
	 * @param string $value [optional] <p>
	 * 要素の値。デフォルトでは、空の要素が作成されます。
	 * その後に DOMElement::$nodeValue
	 * で値を設定することも可能です。
	 * </p>
	 * <p>
	 * 指定した値はすべてそのまま用いますが、エンティティ参照 &lt; と &gt;
	 * だけはエスケープします。&#38;#38; は手動でエスケープする必要があることに注意しましょう。
	 * そうしないと、エンティティ参照の開始とみなされてしまいます。また、" はエスケープされません。
	 * </p>
	 * @return DOMElement 新しい <b>DOMElement</b> クラスの新しいインスタンス、
	 * あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function createElement(string $name, string $value = null): DOMElement {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい文書片を作成する
	 * @link http://php.net/manual/ja/domdocument.createdocumentfragment.php
	 * @return DOMDocumentFragment 新しい <b>DOMDocumentFragment</b>、あるいはエラーが発生した場合は
	 * <b>FALSE</b> を返します。
	 */
	public function createDocumentFragment(): DOMDocumentFragment {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しいテキストノードを作成する
	 * @link http://php.net/manual/ja/domdocument.createtextnode.php
	 * @param string $content <p>
	 * テキストの内容。
	 * </p>
	 * @return DOMText 新しい <b>DOMText</b>、
	 * あるいがエラーが発生した場合には <b>FALSE</b> を返します。
	 */
	public function createTextNode(string $content): DOMText {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい comment ノードを作成する
	 * @link http://php.net/manual/ja/domdocument.createcomment.php
	 * @param string $data <p>
	 * コメントの内容。
	 * </p>
	 * @return DOMComment 新しい <b>DOMComment</b>、あるいはエラーが発生した場合は
	 * <b>FALSE</b> を返します。
	 */
	public function createComment(string $data): DOMComment {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい cdata ノードを作成する
	 * @link http://php.net/manual/ja/domdocument.createcdatasection.php
	 * @param string $data <p>
	 * cdata の内容。
	 * </p>
	 * @return DOMCDATASection 新しい <b>DOMCDATASection</b>、あるいはエラーが発生した場合は
	 * <b>FALSE</b> を返します。
	 */
	public function createCDATASection(string $data): DOMCDATASection {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい PI ノードを作成する
	 * @link http://php.net/manual/ja/domdocument.createprocessinginstruction.php
	 * @param string $target <p>
	 * 処理命令の対象。
	 * </p>
	 * @param string $data [optional] <p>
	 * 処理命令の内容。
	 * </p>
	 * @return DOMProcessingInstruction 新しい <b>DOMProcessingInstruction</b>、
	 * あるいはエラーが発生した場合には <b>FALSE</b> を返します。
	 */
	public function createProcessingInstruction(string $target, string $data = null): DOMProcessingInstruction {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい属性を作成する
	 * @link http://php.net/manual/ja/domdocument.createattribute.php
	 * @param string $name <p>
	 * 属性の名前。
	 * </p>
	 * @return DOMAttr 新しい <b>DOMAttr</b>、あるいはエラーが発生した場合は
	 * <b>FALSE</b> を返します。
	 */
	public function createAttribute(string $name): DOMAttr {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しいエンティティ参照ノードを作成する
	 * @link http://php.net/manual/ja/domdocument.createentityreference.php
	 * @param string $name <p>
	 * エンティティ参照の内容、つまり、エンティティ参照から
	 * 先頭の &#38;#38; および末尾の
	 * ; を取り除いたもの。
	 * </p>
	 * @return DOMEntityReference 新しい <b>DOMEntityReference</b>、
	 * あるいはエラーが発生した場合には <b>FALSE</b> を返します。
	 */
	public function createEntityReference(string $name): DOMEntityReference {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したローカルタグ名に対応するすべての要素を検索する
	 * @link http://php.net/manual/ja/domdocument.getelementsbytagname.php
	 * @param string $name <p>
	 * タグのローカル名 (名前空間を除いたもの) に一致する名前。* はすべてのタグに一致します。
	 * </p>
	 * @return DOMNodeList 一致するすべての要素を含む、新しい <b>DOMNodeList</b>
	 * オブジェクトを返します。
	 */
	public function getElementsByTagName(string $name): DOMNodeList {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 現在のドキュメントにノードをインポートする
	 * @link http://php.net/manual/ja/domdocument.importnode.php
	 * @param DOMNode $importedNode <p>
	 * インポートするノード。
	 * </p>
	 * @param bool $deep [optional] <p>
	 * <b>TRUE</b> の場合、このメソッドは <i>importedNode</i>
	 * 以下のサブツリーも再帰的にインポートします。
	 * </p>
	 * <p>
	 * ノードの属性をコピーするには <i>deep</i> を <b>TRUE</b> に設定しなければなりません。
	 * </p>
	 * @return DOMNode コピーされたノードを返します。
	 * コピーできなかった場合は <b>FALSE</b> を返します。
	 */
	public function importNode(DOMNode $importedNode, bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 関連付けられた名前空間に新しい要素を作成する
	 * @link http://php.net/manual/ja/domdocument.createelementns.php
	 * @param string $namespaceURI <p>
	 * 名前空間の URI。
	 * </p>
	 * @param string $qualifiedName <p>
	 * 要素名を、prefix:tagname
	 * のような形式で指定する。
	 * </p>
	 * @param string $value [optional] <p>
	 * 要素の値。デフォルトでは、空の要素が作成されます。
	 * その後に DOMElement::$nodeValue
	 * で値を設定することも可能です。
	 * </p>
	 * @return DOMElement 新しい <b>DOMElement</b>、
	 * あるいはエラーが発生した場合には <b>FALSE</b> を返します。
	 */
	public function createElementNS(string $namespaceURI, string $qualifiedName, string $value = null): DOMElement {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 関連付けられた名前空間に新しい属性を作成する
	 * @link http://php.net/manual/ja/domdocument.createattributens.php
	 * @param string $namespaceURI <p>
	 * 名前空間の URI。
	 * </p>
	 * @param string $qualifiedName <p>
	 * 属性のタグ名とプレフィックスを、prefix:tagname
	 * のような形式で指定する。
	 * </p>
	 * @return DOMAttr 新しい <b>DOMAttr</b>、あるいはエラーが発生した場合は
	 * <b>FALSE</b> を返します。
	 */
	public function createAttributeNS(string $namespaceURI, string $qualifiedName): DOMAttr {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した名前空間で、タグ名に対応するすべての要素を検索する
	 * @link http://php.net/manual/ja/domdocument.getelementsbytagnamens.php
	 * @param string $namespaceURI <p>
	 * 条件に一致する要素の名前空間 URI。
	 * * はすべての名前空間に一致します。
	 * </p>
	 * @param string $localName <p>
	 * 条件に一致する要素のローカル名。
	 * * はすべてのローカル名に一致します。
	 * </p>
	 * @return DOMNodeList 一致するすべての要素を含む、新しい <b>DOMNodeList</b>
	 * オブジェクトを返します。
	 */
	public function getElementsByTagNameNS(string $namespaceURI, string $localName): DOMNodeList {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * id に対応する要素を検索する
	 * @link http://php.net/manual/ja/domdocument.getelementbyid.php
	 * @param string $elementId <p>
	 * 要素の ID。
	 * </p>
	 * @return DOMElement <b>DOMElement</b>、
	 * あるいは要素が見つからなかった場合は <b>NULL</b> を返します。
	 */
	public function getElementById(string $elementId): DOMElement {}

	/**
	 * @param DOMNode $source
	 */
	public function adoptNode(DOMNode $source) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ドキュメントを正規化する
	 * @link http://php.net/manual/ja/domdocument.normalizedocument.php
	 * @return void 値を返しません。
	 */
	public function normalizeDocument(): void {}

	/**
	 * @param DOMNode $node
	 * @param $namespaceURI
	 * @param $qualifiedName
	 */
	public function renameNode(DOMNode $node, $namespaceURI, $qualifiedName) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ファイルから XML を読み込む
	 * @link http://php.net/manual/ja/domdocument.load.php
	 * @param string $filename <p>
	 * XML ドキュメントへのパス。
	 * </p>
	 * @param int $options [optional] <p>
	 * libxml オプション定数
	 * を
	 * ビット OR
	 * で連結したもの。
	 * </p>
	 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 静的にコールされた場合には <b>DOMDocument</b> を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function load(string $filename, int $options = 0) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 内部の XML ツリーをファイルに出力する
	 * @link http://php.net/manual/ja/domdocument.save.php
	 * @param string $filename <p>
	 * 保存された XML ドキュメントへのパス。
	 * </p>
	 * @param int $options [optional] <p>
	 * 追加のオプション。現在は LIBXML_NOEMPTYTAG のみが
	 * サポートされています。
	 * </p>
	 * @return int 書き込んだバイト数、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function save(string $filename, int $options = null): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 文字列から XML を読み込む
	 * @link http://php.net/manual/ja/domdocument.loadxml.php
	 * @param string $source <p>
	 * XML を含む文字列。
	 * </p>
	 * @param int $options [optional] <p>
	 * libxml オプション定数
	 * を
	 * ビット OR
	 * で連結したもの。
	 * </p>
	 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 静的にコールされた場合には <b>DOMDocument</b> を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function loadXML(string $source, int $options = 0) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 内部の XML ツリーを文字列として出力する
	 * @link http://php.net/manual/ja/domdocument.savexml.php
	 * @param DOMNode $node [optional] <p>
	 * ドキュメント全体ではなく、XML 宣言以外の特定のノードだけを
	 * 出力したい場合にこのパラメータを使用します。
	 * </p>
	 * @param int $options [optional] <p>
	 * 追加のオプション。現在は LIBXML_NOEMPTYTAG のみが
	 * サポートされています。
	 * </p>
	 * @return string XML、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function saveXML(DOMNode $node = null, int $options = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい DOMDocument オブジェクトを作成する
	 * @link http://php.net/manual/ja/domdocument.construct.php
	 * @param string $version [optional] <p>
	 * XML 宣言の一部である、ドキュメントのバージョン番号。
	 * </p>
	 * @param string $encoding [optional] <p>
	 * XML 宣言の一部である、ドキュメントのエンコーディング。
	 * </p>
	 */
	public function __construct(string $version = null, string $encoding = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * DTD に基づいてドキュメントを検証する
	 * @link http://php.net/manual/ja/domdocument.validate.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * ドキュメントに DTD が添付されていない場合は、このメソッドは <b>FALSE</b> を返します。
	 */
	public function validate(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * DOMDocument オブジェクト内の XIncludes を置換する
	 * @link http://php.net/manual/ja/domdocument.xinclude.php
	 * @param int $options [optional] <p>
	 * libxml のパラメータ。
	 * PHP 5.1.0 および Libxml 2.6.7 以降で使用可能です。
	 * </p>
	 * @return int ドキュメント内の XIncludes の数を返します。
	 * 何かの処理に失敗した場合は -1、
	 * 置換が発生しなかった場合は <b>FALSE</b> を返します。
	 */
	public function xinclude(int $options = null): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 文字列から HTML を読み込む
	 * @link http://php.net/manual/ja/domdocument.loadhtml.php
	 * @param string $source <p>
	 * HTML 文字列。
	 * </p>
	 * @param int $options [optional] <p>
	 * PHP 5.4.0 と Libxml 2.6.0 以降では、
	 * <i>options</i> パラメータで Libxml の追加パラメータ
	 * を指定できます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 静的にコールされた場合には <b>DOMDocument</b> を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function loadHTML(string $source, int $options = 0): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ファイルから HTML を読み込む
	 * @link http://php.net/manual/ja/domdocument.loadhtmlfile.php
	 * @param string $filename <p>
	 * HTML ファイルへのパス。
	 * </p>
	 * @param int $options [optional] <p>
	 * PHP 5.4.0 と Libxml 2.6.0 以降では、
	 * <i>options</i> パラメータで Libxml の追加パラメータ
	 * を指定できます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 静的にコールされた場合には <b>DOMDocument</b> を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function loadHTMLFile(string $filename, int $options = 0): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 内部のドキュメントを HTML 形式の文字列として出力する
	 * @link http://php.net/manual/ja/domdocument.savehtml.php
	 * @param DOMNode $node [optional] <p>
	 * ドキュメントのサブセットを出力するオプションのパラメータ。
	 * </p>
	 * @return string HTML、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function saveHTML(DOMNode $node = NULL): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 内部のドキュメントを HTML 形式でファイルに出力する
	 * @link http://php.net/manual/ja/domdocument.savehtmlfile.php
	 * @param string $filename <p>
	 * 保存された HTML ドキュメントへのパス。
	 * </p>
	 * @return int 書き込んだバイト数、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function saveHTMLFile(string $filename): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * スキーマに基づいてドキュメントを検証する
	 * @link http://php.net/manual/ja/domdocument.schemavalidate.php
	 * @param string $filename <p>
	 * スキーマへのパス。
	 * </p>
	 * @param int $flags [optional] <p>
	 * Libxml のスキーマ検証フラグのビットマスク。現在サポートしている値は LIBXML_SCHEMA_CREATE だけです。PHP 5.5.2 および Libxml 2.6.14 以降で使えます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function schemaValidate(string $filename, int $flags = null): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * スキーマに基づいてドキュメントを検証する
	 * @link http://php.net/manual/ja/domdocument.schemavalidatesource.php
	 * @param string $source <p>
	 * スキーマを含む文字列。
	 * </p>
	 * @param int $flags [optional] <p>
	 * Libxml のスキーマ検証フラグのビットマスク。現在サポートしている値は LIBXML_SCHEMA_CREATE だけです。PHP 5.5.2 および Libxml 2.6.14 以降で使えます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function schemaValidateSource(string $source, int $flags = null): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ドキュメントを relaxNG で検証する
	 * @link http://php.net/manual/ja/domdocument.relaxngvalidate.php
	 * @param string $filename <p>
	 * RNG ファイル。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function relaxNGValidate(string $filename): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ドキュメントを relaxNG で検証する
	 * @link http://php.net/manual/ja/domdocument.relaxngvalidatesource.php
	 * @param string $source <p>
	 * RNG スキーマを含む文字列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function relaxNGValidateSource(string $source): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 基底ノード型を作成する際に使用する拡張クラスを登録する
	 * @link http://php.net/manual/ja/domdocument.registernodeclass.php
	 * @param string $baseclass <p>
	 * 拡張したい DOM クラス。クラス名の一覧は、
	 * この章の導入部にあります。
	 * </p>
	 * @param string $extendedclass <p>
	 * 拡張したクラスの名前。<b>NULL</b> を渡した場合は、
	 * それまでに <i>baseclass</i>
	 * を拡張して作成したすべてのクラスが削除されます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function registerNodeClass(string $baseclass, string $extendedclass): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

/**
 * @link http://php.net/manual/ja/class.domnodelist.php
 */
class DOMNodeList implements Traversable {
	/**
	 * <p style="margin-top:0;">
	 * &#12522;&#12473;&#12488;&#20869;&#12398;&#12494;&#12540;&#12489;&#12398;&#25968;&#12290;&#26377;&#21177;&#12394;&#23376;&#12494;&#12540;&#12489;&#12398;&#12452;&#12531;&#12487;&#12483;&#12463;&#12473;&#12398;&#31684;&#22258;&#12399;
	 * 0 &#20197;&#19978; length - 1 &#20197;&#19979;
	 * </p>
	 * @var int
	 */
	public $length;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * インデックスで指定したノードを取得する
	 * @link http://php.net/manual/ja/domnodelist.item.php
	 * @param int $index <p>
	 * コレクション内のノードのインデックス。
	 * </p>
	 * @return DOMElement <b>DOMNodeList</b> 内の <i>index</i>
	 * 番目の位置にあるノード、あるいはインデックスが不正な形式の場合は
	 * <b>NULL</b> を返します。
	 */
	public function item(int $index): DOMElement {}

}

/**
 * @link http://php.net/manual/ja/class.domnamednodemap.php
 */
class DOMNamedNodeMap implements Traversable {
	/**
	 * <p style="margin-top:0;">
	 * &#12510;&#12483;&#12503;&#20869;&#12398;&#12494;&#12540;&#12489;&#12398;&#25968;&#12290;&#23376;&#12494;&#12540;&#12489;&#12398;&#12452;&#12531;&#12487;&#12483;&#12463;&#12473;&#12392;&#12375;&#12390;&#26377;&#21177;&#12394;&#31684;&#22258;&#12399;
	 * 0 &#12363;&#12425; length - 1 &#12414;&#12391; (&#20001;&#31471;&#12434;&#21547;&#12416;) &#12391;&#12377;&#12290;
	 * </p>
	 * @var int
	 */
	public $length;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前で指定されたノードを取得する
	 * @link http://php.net/manual/ja/domnamednodemap.getnameditem.php
	 * @param string $name <p>
	 * 取得するノードの名前。
	 * </p>
	 * @return DOMNode 指定した (任意の型の) nodeName のノード、
	 * あるいはノードが見つからなかった場合には <b>NULL</b> を返します。
	 */
	public function getNamedItem(string $name): DOMNode {}

	/**
	 * @param DOMNode $arg
	 */
	public function setNamedItem(DOMNode $arg) {}

	/**
	 * @param $name [optional]
	 */
	public function removeNamedItem($name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * インデックスで指定したノードを取得する
	 * @link http://php.net/manual/ja/domnamednodemap.item.php
	 * @param int $index <p>
	 * マップ内のインデックス。
	 * </p>
	 * @return DOMNode マップ内の <i>index</i> 番目の位置にあるノード、
	 * あるいはインデックスが不正な形式 (マップ内の要素数以上) の場合は
	 * <b>NULL</b> を返します。
	 */
	public function item(int $index): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ローカル名および名前空間 URI で指定したノードを取得する
	 * @link http://php.net/manual/ja/domnamednodemap.getnameditemns.php
	 * @param string $namespaceURI <p>
	 * 取得するノードの名前空間 URI。
	 * </p>
	 * @param string $localName <p>
	 * 取得するノードのローカル名。
	 * </p>
	 * @return DOMNode 指定した (任意の型の) ローカル名および名前空間 URI のノード、
	 * あるいはノードが見つからなかった場合には <b>NULL</b> を返します。
	 */
	public function getNamedItemNS(string $namespaceURI, string $localName): DOMNode {}

	/**
	 * @param DOMNode $arg [optional]
	 */
	public function setNamedItemNS(DOMNode $arg) {}

	/**
	 * @param $namespaceURI [optional]
	 * @param $localName [optional]
	 */
	public function removeNamedItemNS($namespaceURI, $localName) {}

}

/**
 * 文字データノードを表します。このクラスに直接対応するノードはなく、
 * 他のノードがこれを継承します。
 * @link http://php.net/manual/ja/class.domcharacterdata.php
 */
class DOMCharacterData extends DOMNode  {
	/**
	 * <p style="margin-top:0;">&#12494;&#12540;&#12489;&#12398;&#20869;&#23481;&#12290;</p>
	 * @var string
	 */
	public $data;
	/**
	 * <p style="margin-top:0;">&#20869;&#23481;&#12398;&#38263;&#12373;&#12290;</p>
	 * @var int
	 */
	public $length;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードから指定した範囲のデータを抽出する
	 * @link http://php.net/manual/ja/domcharacterdata.substringdata.php
	 * @param int $offset <p>
	 * 部分文字列の抽出開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 抽出する文字数。
	 * </p>
	 * @return string 指定された部分文字列を返します。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データの末尾までのすべての
	 * 16 ビット単位が返されます。
	 */
	public function substringData(int $offset, int $count): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードの文字データの最後に文字列を追加する
	 * @link http://php.net/manual/ja/domcharacterdata.appenddata.php
	 * @param string $data <p>
	 * 追加する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function appendData(string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した 16 ビット単位のオフセットに、文字列を挿入する
	 * @link http://php.net/manual/ja/domcharacterdata.insertdata.php
	 * @param int $offset <p>
	 * 挿入する場所の文字オフセット。
	 * </p>
	 * @param string $data <p>
	 * 挿入する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function insertData(int $offset, string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した範囲の文字列をノードから削除する
	 * @link http://php.net/manual/ja/domcharacterdata.deletedata.php
	 * @param int $offset <p>
	 * 削除開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 削除する文字の数。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データ末尾までのすべての
	 * データが削除されます。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function deleteData(int $offset, int $count): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * DOMCharacterData ノードの文字列の一部を置換する
	 * @link http://php.net/manual/ja/domcharacterdata.replacedata.php
	 * @param int $offset <p>
	 * 置換開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 置換する文字の数。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データ末尾までのすべての
	 * データが置換されます。
	 * </p>
	 * @param string $data <p>
	 * 置換する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function replaceData(int $offset, int $count, string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

/**
 * <b>DOMNode</b> を継承します。<b>DOMAttr</b>
 * は、<b>DOMElement</b> オブジェクトの属性を表します。
 * @link http://php.net/manual/ja/class.domattr.php
 */
class DOMAttr extends DOMNode  {
	/**
	 * <p style="margin-top:0;">&#23646;&#24615;&#12398;&#21517;&#21069;</p>
	 * @var string
	 */
	public $name;
	/**
	 * <p style="margin-top:0;">&#23646;&#24615;&#12434;&#20445;&#25345;&#12377;&#12427;&#35201;&#32032;</p>
	 * @var DOMElement
	 */
	public $ownerElement;
	/**
	 * <p style="margin-top:0;">&#26410;&#23455;&#35013;&#12391;&#12377;&#12290;&#24120;&#12395; <b><code>NULL</code></b> &#12434;&#36820;&#12375;&#12414;&#12377;&#12290;</p>
	 * @var bool
	 */
	public $schemaTypeInfo;
	/**
	 * <p style="margin-top:0;">&#26410;&#23455;&#35013;&#12391;&#12377;&#12290;&#24120;&#12395; <b><code>NULL</code></b> &#12434;&#36820;&#12375;&#12414;&#12377;&#12290;</p>
	 * @var bool
	 */
	public $specified;
	/**
	 * <p style="margin-top:0;">&#23646;&#24615;&#12398;&#20516;</p>
	 * @var string
	 */
	public $value;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 属性が定義済みの ID かどうかを調べる
	 * @link http://php.net/manual/ja/domattr.isid.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isId(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい <b>DOMAttr</b> オブジェクトを作成する
	 * @link http://php.net/manual/ja/domattr.construct.php
	 * @param string $name <p>
	 * 属性のタグ名。
	 * </p>
	 * @param string $value [optional] <p>
	 * 属性の値。
	 * </p>
	 */
	public function __construct(string $name, string $value = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

/**
 * @link http://php.net/manual/ja/class.domelement.php
 */
class DOMElement extends DOMNode  {
	/**
	 * <p style="margin-top:0;">&#26410;&#23455;&#35013;&#12290;&#24120;&#12395; <b><code>NULL</code></b> &#12434;&#36820;&#12377;&#12290;</p>
	 * @var bool
	 */
	public $schemaTypeInfo;
	/**
	 * <p style="margin-top:0;">&#35201;&#32032;&#21517;</p>
	 * @var string
	 */
	public $tagName;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 属性の値を返す
	 * @link http://php.net/manual/ja/domelement.getattribute.php
	 * @param string $name <p>
	 * 属性の名前。
	 * </p>
	 * @return string 属性の値、あるいは <i>name</i> に対応する属性が
	 * 見つからなかった場合には空の文字列を返します。
	 */
	public function getAttribute(string $name): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい属性を追加する
	 * @link http://php.net/manual/ja/domelement.setattribute.php
	 * @param string $name <p>
	 * 属性の名前。
	 * </p>
	 * @param string $value <p>
	 * 属性の値。
	 * </p>
	 * @return DOMAttr 新しい <b>DOMAttr</b>、
	 * あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function setAttribute(string $name, string $value): DOMAttr {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 属性を削除する
	 * @link http://php.net/manual/ja/domelement.removeattribute.php
	 * @param string $name <p>
	 * 属性の名前。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function removeAttribute(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 属性ノードを返す
	 * @link http://php.net/manual/ja/domelement.getattributenode.php
	 * @param string $name <p>
	 * 属性の名前。
	 * </p>
	 * @return DOMAttr 属性ノードを返します。
	 * Note that for XML namespace declarations
	 * (xmlns and xmlns:* attributes) an
	 * instance of <b>DOMNameSpaceNode</b> is returned instead of a
	 * <b>DOMAttr</b>.
	 */
	public function getAttributeNode(string $name): DOMAttr {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい属性ノードを要素に追加する
	 * @link http://php.net/manual/ja/domelement.setattributenode.php
	 * @param DOMAttr $attr <p>
	 * 属性ノード。
	 * </p>
	 * @return DOMAttr 属性が置換された場合は置換前のノード、そうでない場合は <b>NULL</b>
	 * を返します。
	 */
	public function setAttributeNode(DOMAttr $attr): DOMAttr {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 属性を削除する
	 * @link http://php.net/manual/ja/domelement.removeattributenode.php
	 * @param DOMAttr $oldnode <p>
	 * 属性ノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function removeAttributeNode(DOMAttr $oldnode): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * タグ名から要素を取得する
	 * @link http://php.net/manual/ja/domelement.getelementsbytagname.php
	 * @param string $name <p>
	 * タグ名。ツリー内のすべての要素を返すには
	 * * を使用します。
	 * </p>
	 * @return DOMNodeList この関数は、一致したすべての要素からなる
	 * <b>DOMNodeList</b> クラスのインスタンスを返します。
	 */
	public function getElementsByTagName(string $name): DOMNodeList {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 属性の値を返す
	 * @link http://php.net/manual/ja/domelement.getattributens.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @param string $localName <p>
	 * ローカル名。
	 * </p>
	 * @return string 属性の値、あるいは <i>localName</i> および
	 * <i>namespaceURI</i> に対応する属性が
	 * 見つからなかった場合には空の文字列を返します。
	 */
	public function getAttributeNS(string $namespaceURI, string $localName): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい属性を追加する
	 * @link http://php.net/manual/ja/domelement.setattributens.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @param string $qualifiedName <p>
	 * prefix:tagname 形式で表した属性名。
	 * </p>
	 * @param string $value <p>
	 * 属性の値。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setAttributeNS(string $namespaceURI, string $qualifiedName, string $value): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 属性を削除する
	 * @link http://php.net/manual/ja/domelement.removeattributens.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @param string $localName <p>
	 * ローカル名。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function removeAttributeNS(string $namespaceURI, string $localName): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 属性ノードを返す
	 * @link http://php.net/manual/ja/domelement.getattributenodens.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @param string $localName <p>
	 * ローカル名。
	 * </p>
	 * @return DOMAttr 属性ノードを返します。
	 * Note that for XML namespace declarations
	 * (xmlns and xmlns:* attributes) an
	 * instance of <b>DOMNameSpaceNode</b> is returned instead of a
	 * <b>DOMAttr</b>.
	 */
	public function getAttributeNodeNS(string $namespaceURI, string $localName): DOMAttr {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい属性ノードを要素に追加する
	 * @link http://php.net/manual/ja/domelement.setattributenodens.php
	 * @param DOMAttr $attr <p>
	 * 属性ノード。
	 * </p>
	 * @return DOMAttr 属性が置換された場合は置換前のノードを返します。
	 */
	public function setAttributeNodeNS(DOMAttr $attr): DOMAttr {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI とローカル名から要素を取得する
	 * @link http://php.net/manual/ja/domelement.getelementsbytagnamens.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @param string $localName <p>
	 * ローカル名。ツリー内のすべての要素を返すには *
	 * を使用します。
	 * </p>
	 * @return DOMNodeList この関数は、一致したすべての要素からなる
	 * <b>DOMNodeList</b> クラスのインスタンスを返します。
	 * 各要素は、ツリー内の探索時に見つかった順で並べられます。
	 */
	public function getElementsByTagNameNS(string $namespaceURI, string $localName): DOMNodeList {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 属性が存在するかどうかを調べる
	 * @link http://php.net/manual/ja/domelement.hasattribute.php
	 * @param string $name <p>
	 * 要素名。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttribute(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 属性が存在するかどうかを調べる
	 * @link http://php.net/manual/ja/domelement.hasattributens.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @param string $localName <p>
	 * ローカル名。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributeNS(string $namespaceURI, string $localName): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ID 型の属性を名前で宣言する
	 * @link http://php.net/manual/ja/domelement.setidattribute.php
	 * @param string $name <p>
	 * 属性の名前。
	 * </p>
	 * @param bool $isId <p>
	 * <i>name</i> を ID 型にしたい場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を設定します。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setIdAttribute(string $name, bool $isId): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ID 型の属性をローカル名および名前空間 URI で宣言する
	 * @link http://php.net/manual/ja/domelement.setidattributens.php
	 * @param string $namespaceURI <p>
	 * 属性の名前空間 URI。
	 * </p>
	 * @param string $localName <p>
	 * 属性のローカル名。prefix:tagname 形式。
	 * </p>
	 * @param bool $isId <p>
	 * <i>name</i> を ID 型にしたい場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を設定します。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setIdAttributeNS(string $namespaceURI, string $localName, bool $isId): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ID 型の属性をノードで宣言する
	 * @link http://php.net/manual/ja/domelement.setidattributenode.php
	 * @param DOMAttr $attr <p>
	 * 属性ノード。
	 * </p>
	 * @param bool $isId <p>
	 * <i>name</i> を ID 型にしたい場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を設定します。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function setIdAttributeNode(DOMAttr $attr, bool $isId): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい DOMElement オブジェクトを作成する
	 * @link http://php.net/manual/ja/domelement.construct.php
	 * @param string $name <p>
	 * 要素のタグ名。namespaceURI をともに指定した場合、
	 * この URI に関連付けられたプレフィックスが与えられます。
	 * </p>
	 * @param string $value [optional] <p>
	 * 要素の値。
	 * </p>
	 * @param string $namespaceURI [optional] <p>
	 * 指定した名前空間の中で要素を作成するための
	 * 名前空間 URI。
	 * </p>
	 */
	public function __construct(string $name, string $value = null, string $namespaceURI = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

/**
 * <b>DOMText</b> クラスは
 * <b>DOMCharacterData</b> を継承しており、
 * <b>DOMElement</b> あるいは
 * <b>DOMAttr</b> の中身のテキストを表します。
 * @link http://php.net/manual/ja/class.domtext.php
 */
class DOMText extends DOMCharacterData  {
	/**
	 * <p style="margin-top:0;">
	 * &#35542;&#29702;&#30340;&#12395;&#38563;&#25509;&#12375;&#12383; (&#35201;&#32032;&#12420;&#12467;&#12513;&#12531;&#12488;&#12289;&#20966;&#29702;&#21629;&#20196;&#12394;&#12393;&#12391;&#20998;&#21106;&#12373;&#12428;&#12390;&#12356;&#12394;&#12356;)
	 * &#12486;&#12461;&#12473;&#12488;&#12494;&#12540;&#12489;&#12398;&#20840;&#12486;&#12461;&#12473;&#12488;&#12434;&#20445;&#25345;&#12375;&#12414;&#12377;&#12290;
	 * </p>
	 * @var string
	 */
	public $wholeText;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したオフセットでノードを 2 つに分割する
	 * @link http://php.net/manual/ja/domtext.splittext.php
	 * @param int $offset <p>
	 * 分割する位置を示すオフセット。0 から始まります。
	 * </p>
	 * @return DOMText 同じ型の新しいノードを返します。<i>offset</i>
	 * 以降の内容をデータとして保持します。
	 */
	public function splitText(int $offset): DOMText {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * このテキストノードが空白を含むかどうかを示す
	 * @link http://php.net/manual/ja/domtext.iswhitespaceinelementcontent.php
	 * @return bool ノードにゼロ個以上の空白文字だけが含まれる場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isWhitespaceInElementContent(): bool {}

	public function isElementContentWhitespace() {}

	/**
	 * @param $content
	 */
	public function replaceWholeText($content) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい <b>DOMText</b> オブジェクトを作成する
	 * @link http://php.net/manual/ja/domtext.construct.php
	 * @param $value [optional]
	 */
	public function __construct($value) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードから指定した範囲のデータを抽出する
	 * @link http://php.net/manual/ja/domcharacterdata.substringdata.php
	 * @param int $offset <p>
	 * 部分文字列の抽出開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 抽出する文字数。
	 * </p>
	 * @return string 指定された部分文字列を返します。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データの末尾までのすべての
	 * 16 ビット単位が返されます。
	 */
	public function substringData(int $offset, int $count): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードの文字データの最後に文字列を追加する
	 * @link http://php.net/manual/ja/domcharacterdata.appenddata.php
	 * @param string $data <p>
	 * 追加する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function appendData(string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した 16 ビット単位のオフセットに、文字列を挿入する
	 * @link http://php.net/manual/ja/domcharacterdata.insertdata.php
	 * @param int $offset <p>
	 * 挿入する場所の文字オフセット。
	 * </p>
	 * @param string $data <p>
	 * 挿入する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function insertData(int $offset, string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した範囲の文字列をノードから削除する
	 * @link http://php.net/manual/ja/domcharacterdata.deletedata.php
	 * @param int $offset <p>
	 * 削除開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 削除する文字の数。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データ末尾までのすべての
	 * データが削除されます。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function deleteData(int $offset, int $count): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * DOMCharacterData ノードの文字列の一部を置換する
	 * @link http://php.net/manual/ja/domcharacterdata.replacedata.php
	 * @param int $offset <p>
	 * 置換開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 置換する文字の数。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データ末尾までのすべての
	 * データが置換されます。
	 * </p>
	 * @param string $data <p>
	 * 置換する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function replaceData(int $offset, int $count, string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

/**
 * コメントノード、つまり &lt;!--
 * と --&gt; で囲まれた文字を表します。
 * @link http://php.net/manual/ja/class.domcomment.php
 */
class DOMComment extends DOMCharacterData  {

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい DOMComment オブジェクトを作成する
	 * @link http://php.net/manual/ja/domcomment.construct.php
	 * @param string $value [optional] <p>
	 * コメントの値。
	 * </p>
	 */
	public function __construct(string $value = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードから指定した範囲のデータを抽出する
	 * @link http://php.net/manual/ja/domcharacterdata.substringdata.php
	 * @param int $offset <p>
	 * 部分文字列の抽出開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 抽出する文字数。
	 * </p>
	 * @return string 指定された部分文字列を返します。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データの末尾までのすべての
	 * 16 ビット単位が返されます。
	 */
	public function substringData(int $offset, int $count): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードの文字データの最後に文字列を追加する
	 * @link http://php.net/manual/ja/domcharacterdata.appenddata.php
	 * @param string $data <p>
	 * 追加する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function appendData(string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した 16 ビット単位のオフセットに、文字列を挿入する
	 * @link http://php.net/manual/ja/domcharacterdata.insertdata.php
	 * @param int $offset <p>
	 * 挿入する場所の文字オフセット。
	 * </p>
	 * @param string $data <p>
	 * 挿入する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function insertData(int $offset, string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した範囲の文字列をノードから削除する
	 * @link http://php.net/manual/ja/domcharacterdata.deletedata.php
	 * @param int $offset <p>
	 * 削除開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 削除する文字の数。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データ末尾までのすべての
	 * データが削除されます。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function deleteData(int $offset, int $count): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * DOMCharacterData ノードの文字列の一部を置換する
	 * @link http://php.net/manual/ja/domcharacterdata.replacedata.php
	 * @param int $offset <p>
	 * 置換開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 置換する文字の数。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データ末尾までのすべての
	 * データが置換されます。
	 * </p>
	 * @param string $data <p>
	 * 置換する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function replaceData(int $offset, int $count, string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

class DOMTypeinfo  {
}

class DOMUserDataHandler  {

	public function handle() {}

}

class DOMDomError  {
}

class DOMErrorHandler  {

	/**
	 * @param DOMDomError $error
	 */
	public function handleError(DOMDomError $error) {}

}

class DOMLocator  {
}

class DOMConfiguration  {

	/**
	 * @param $name
	 * @param $value
	 */
	public function setParameter($name, $value) {}

	/**
	 * @param $name [optional]
	 */
	public function getParameter($name) {}

	/**
	 * @param $name [optional]
	 * @param $value [optional]
	 */
	public function canSetParameter($name, $value) {}

}

/**
 * <b>DOMCdataSection</b> は
 * <b>DOMText</b> を継承したクラスで、
 * CData のテキスト表現に使います。
 * @link http://php.net/manual/ja/class.domcdatasection.php
 */
class DOMCdataSection extends DOMText  {

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい DOMCdataSection オブジェクトを作成する
	 * @link http://php.net/manual/ja/domcdatasection.construct.php
	 * @param string $value <p>
	 * CDATA ノードの値。省略した場合は、空の CDATA ノードを作成します。
	 * </p>
	 */
	public function __construct(string $value) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したオフセットでノードを 2 つに分割する
	 * @link http://php.net/manual/ja/domtext.splittext.php
	 * @param int $offset <p>
	 * 分割する位置を示すオフセット。0 から始まります。
	 * </p>
	 * @return DOMText 同じ型の新しいノードを返します。<i>offset</i>
	 * 以降の内容をデータとして保持します。
	 */
	public function splitText(int $offset): DOMText {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * このテキストノードが空白を含むかどうかを示す
	 * @link http://php.net/manual/ja/domtext.iswhitespaceinelementcontent.php
	 * @return bool ノードにゼロ個以上の空白文字だけが含まれる場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isWhitespaceInElementContent(): bool {}

	public function isElementContentWhitespace() {}

	/**
	 * @param $content
	 */
	public function replaceWholeText($content) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードから指定した範囲のデータを抽出する
	 * @link http://php.net/manual/ja/domcharacterdata.substringdata.php
	 * @param int $offset <p>
	 * 部分文字列の抽出開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 抽出する文字数。
	 * </p>
	 * @return string 指定された部分文字列を返します。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データの末尾までのすべての
	 * 16 ビット単位が返されます。
	 */
	public function substringData(int $offset, int $count): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードの文字データの最後に文字列を追加する
	 * @link http://php.net/manual/ja/domcharacterdata.appenddata.php
	 * @param string $data <p>
	 * 追加する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function appendData(string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した 16 ビット単位のオフセットに、文字列を挿入する
	 * @link http://php.net/manual/ja/domcharacterdata.insertdata.php
	 * @param int $offset <p>
	 * 挿入する場所の文字オフセット。
	 * </p>
	 * @param string $data <p>
	 * 挿入する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function insertData(int $offset, string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した範囲の文字列をノードから削除する
	 * @link http://php.net/manual/ja/domcharacterdata.deletedata.php
	 * @param int $offset <p>
	 * 削除開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 削除する文字の数。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データ末尾までのすべての
	 * データが削除されます。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function deleteData(int $offset, int $count): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * DOMCharacterData ノードの文字列の一部を置換する
	 * @link http://php.net/manual/ja/domcharacterdata.replacedata.php
	 * @param int $offset <p>
	 * 置換開始位置のオフセット。
	 * </p>
	 * @param int $count <p>
	 * 置換する文字の数。
	 * <i>offset</i> と <i>count</i>
	 * の和が文字列の長さをこえている場合、データ末尾までのすべての
	 * データが置換されます。
	 * </p>
	 * @param string $data <p>
	 * 置換する文字列。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function replaceData(int $offset, int $count, string $data): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

/**
 * 各 <b>DOMDocument</b> は
 * doctype 属性を保持しており、その値は <b>NULL</b> あるいは
 * <b>DOMDocumentType</b> オブジェクトです。
 * @link http://php.net/manual/ja/class.domdocumenttype.php
 */
class DOMDocumentType extends DOMNode  {
	/**
	 * <p style="margin-top:0;">&#22806;&#37096;&#12469;&#12502;&#12475;&#12483;&#12488;&#12398;&#20844;&#38283; ID&#12290;</p>
	 * @var string
	 */
	public $publicId;
	/**
	 * <p style="margin-top:0;">
	 * &#22806;&#37096;&#12469;&#12502;&#12475;&#12483;&#12488;&#12398;&#12471;&#12473;&#12486;&#12512; ID&#12290;&#23436;&#20840; URI &#12391;&#12354;&#12427;&#22580;&#21512;&#12392;&#12381;&#12358;&#12391;&#12394;&#12356;&#22580;&#21512;&#12364;&#12354;&#12427;&#12290;
	 * </p>
	 * @var string
	 */
	public $systemId;
	/**
	 * <p style="margin-top:0;">
	 * DTD &#12398;&#21517;&#21069;&#12290;&#12377;&#12394;&#12431;&#12385;&#12289;DOCTYPE &#12461;&#12540;&#12527;&#12540;&#12489;&#12395;&#32154;&#12367;&#20516;&#12290;
	 * </p>
	 * @var string
	 */
	public $name;
	/**
	 * <p style="margin-top:0;">
	 * DTD &#12391;&#23459;&#35328;&#12373;&#12428;&#12390;&#12356;&#12427;&#19968;&#33324;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451; (&#22806;&#37096;&#12539;&#20869;&#37096;&#12392;&#12418;) &#12434;&#21547;&#12416;
	 * <b>DOMNamedNodeMap</b>&#12290;
	 * </p>
	 * @var DOMNamedNodeMap
	 */
	public $entities;
	/**
	 * <p style="margin-top:0;">
	 * DTD &#12391;&#23459;&#35328;&#12373;&#12428;&#12390;&#12356;&#12427;&#35352;&#27861;&#12434;&#21547;&#12416;
	 * <b>DOMNamedNodeMap</b>&#12290;
	 * </p>
	 * @var DOMNamedNodeMap
	 */
	public $notations;
	/**
	 * <p style="margin-top:0;">
	 * &#20869;&#37096;&#12469;&#12502;&#12475;&#12483;&#12488;&#12434;&#25991;&#23383;&#21015;&#12392;&#12375;&#12390;&#21462;&#24471;&#12377;&#12427;&#12290;&#23384;&#22312;&#12375;&#12394;&#12356;&#22580;&#21512;&#12399; null
	 * &#12392;&#12394;&#12427;&#12290;&#21306;&#20999;&#12426;&#12398;&#35282;&#25324;&#24359;&#12399;&#21547;&#12414;&#12394;&#12356;&#12290;
	 * </p>
	 * @var string
	 */
	public $internalSubset;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

/**
 * @link http://php.net/manual/ja/class.domnotation.php
 */
class DOMNotation extends DOMNode  {
	/**
	 * <p></p>
	 * @var string
	 */
	public $publicId;
	/**
	 * <p></p>
	 * @var string
	 */
	public $systemId;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

/**
 * このインターフェイスは、XML ドキュメント内の既知のエンティティを表します。
 * パース済みかどうかは関係ありません。
 * @link http://php.net/manual/ja/class.domentity.php
 */
class DOMEntity extends DOMNode  {
	/**
	 * <p style="margin-top:0;">
	 * &#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12395;&#38306;&#36899;&#20184;&#12369;&#12425;&#12428;&#12390;&#12356;&#12427;&#12497;&#12502;&#12522;&#12483;&#12463; ID &#12364;&#23384;&#22312;&#12377;&#12428;&#12400;&#12381;&#12398;&#20516;&#12289;
	 * &#12381;&#12428;&#20197;&#22806;&#12398;&#22580;&#21512;&#12399; <b><code>NULL</code></b>
	 * </p>
	 * @var string
	 */
	public $publicId;
	/**
	 * <p style="margin-top:0;">
	 * &#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12395;&#38306;&#36899;&#20184;&#12369;&#12425;&#12428;&#12390;&#12356;&#12427;&#12471;&#12473;&#12486;&#12512; ID &#12364;&#23384;&#22312;&#12377;&#12428;&#12400;&#12381;&#12398;&#20516;&#12289;
	 * &#12381;&#12428;&#20197;&#22806;&#12398;&#22580;&#21512;&#12399; <b><code>NULL</code></b>&#12290;&#12371;&#12428;&#12399;&#23436;&#20840;&#12394; URI &#12363;&#12418;&#12375;&#12428;&#12394;&#12356;&#12375;&#12289;
	 * &#12381;&#12358;&#12391;&#12394;&#12356;&#12363;&#12418;&#12375;&#12428;&#12394;&#12356;&#12290;
	 * </p>
	 * @var string
	 */
	public $systemId;
	/**
	 * <p style="margin-top:0;">
	 * &#12497;&#12540;&#12473;&#12373;&#12428;&#12390;&#12356;&#12394;&#12356;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12398;&#22580;&#21512;&#12399;&#12381;&#12398;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12398;&#21517;&#21069;&#12289;
	 * &#12497;&#12540;&#12473;&#28168;&#12415;&#12398;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12398;&#22580;&#21512;&#12399; <b><code>NULL</code></b>
	 * </p>
	 * @var string
	 */
	public $notationName;
	/**
	 * <p style="margin-top:0;">
	 * &#22806;&#37096;&#12391;&#12497;&#12540;&#12473;&#12373;&#12428;&#12383;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12398;&#22580;&#21512;&#12399;&#12289;&#12371;&#12398;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12398;
	 * &#12497;&#12540;&#12473;&#26178;&#12395;&#20351;&#29992;&#12373;&#12428;&#12383;&#12456;&#12531;&#12467;&#12540;&#12487;&#12451;&#12531;&#12464;&#12434;&#25351;&#23450;&#12377;&#12427;&#23646;&#24615;&#12290;
	 * &#20869;&#37096;&#12469;&#12502;&#12475;&#12483;&#12488;&#12363;&#12425;&#12398;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12391;&#12354;&#12387;&#12383;&#12426;&#26410;&#30693;&#12398;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12391;
	 * &#12354;&#12387;&#12383;&#22580;&#21512;&#12399; <b><code>NULL</code></b>
	 * </p>
	 * @var string
	 */
	public $actualEncoding;
	/**
	 * <p style="margin-top:0;">
	 * &#22806;&#37096;&#12391;&#12497;&#12540;&#12473;&#12373;&#12428;&#12383;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12398;&#22580;&#21512;&#12399;&#12289;&#12486;&#12461;&#12473;&#12488;&#23459;&#35328;&#12398;&#19968;&#37096;&#12392;&#12375;&#12390;
	 * &#12371;&#12398;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12398;&#12456;&#12531;&#12467;&#12540;&#12487;&#12451;&#12531;&#12464;&#12434;&#25351;&#23450;&#12377;&#12427;&#23646;&#24615;&#12290;&#12381;&#12428;&#20197;&#22806;&#12398;&#22580;&#21512;&#12399;
	 * <b><code>NULL</code></b>
	 * </p>
	 * @var string
	 */
	public $encoding;
	/**
	 * <p style="margin-top:0;">
	 * &#22806;&#37096;&#12391;&#12497;&#12540;&#12473;&#12373;&#12428;&#12383;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12398;&#22580;&#21512;&#12399;&#12289;&#12486;&#12461;&#12473;&#12488;&#23459;&#35328;&#12398;&#19968;&#37096;&#12392;&#12375;&#12390;
	 * &#12371;&#12398;&#12456;&#12531;&#12486;&#12451;&#12486;&#12451;&#12398;&#12496;&#12540;&#12472;&#12519;&#12531;&#30058;&#21495;&#12434;&#25351;&#23450;&#12377;&#12427;&#23646;&#24615;&#12290;&#12381;&#12428;&#20197;&#22806;&#12398;&#22580;&#21512;&#12399;
	 * <b><code>NULL</code></b>
	 * </p>
	 * @var string
	 */
	public $version;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

/**
 * @link http://php.net/manual/ja/class.domentityreference.php
 */
class DOMEntityReference extends DOMNode  {

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい DOMEntityReference オブジェクトを作成する
	 * @link http://php.net/manual/ja/domentityreference.construct.php
	 * @param string $name <p>
	 * エンティティ参照の名前。
	 * </p>
	 */
	public function __construct(string $name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

/**
 * @link http://php.net/manual/ja/class.domprocessinginstruction.php
 */
class DOMProcessingInstruction extends DOMNode  {
	/**
	 * <p></p>
	 * @var string
	 */
	public $target;
	/**
	 * <p></p>
	 * @var string
	 */
	public $data;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい <b>DOMProcessingInstruction</b> オブジェクトを作成する
	 * @link http://php.net/manual/ja/domprocessinginstruction.construct.php
	 * @param string $name <p>
	 * 処理命令のタグ名。
	 * </p>
	 * @param string $value [optional] <p>
	 * 処理命令の値。
	 * </p>
	 */
	public function __construct(string $name, string $value = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 参照しているノードの前に新しい子を追加する
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * 参照ノード。指定されなかった場合は、<i>newnode</i>
	 * が子要素として追加されます。
	 * </p>
	 * @return DOMNode 挿入されたノードを返します。
	 */
	public function insertBefore(DOMNode $newnode, DOMNode $refnode = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子を置き換える
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * 新しいノード。対象ドキュメントのメンバ、
	 * すなわち、DOMDocument->createXXX() メソッドのひとつで作成されたものか
	 * で
	 * ドキュメントにインポートされたものである必要があります。
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * 古いノード。
	 * </p>
	 * @return DOMNode 古いノード、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群から子要素を削除する
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * 削除する子要素。
	 * </p>
	 * @return DOMNode 子要素の削除に成功した場合に、削除した要素を返します。
	 */
	public function removeChild(DOMNode $oldnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 子要素群の最後に新しい子要素を追加する
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * 追加する子要素。
	 * </p>
	 * @return DOMNode 追加したノードを返します。
	 */
	public function appendChild(DOMNode $newnode): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが子を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasChildNodes(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを複製する
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * 子孫要素を含めてコピーするかどうかを指定します。
	 * このパラメータのデフォルト値は <b>FALSE</b> です。
	 * </p>
	 * @return DOMNode 複製されたノードを返します。
	 */
	public function cloneNode(bool $deep = null): DOMNode {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードを正規化する
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @return void 値を返しません。
	 */
	public function normalize(): void {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @param string $feature <p>
	 * 調べる機能。機能の一覧については
	 * <b>DOMImplementation::hasFeature</b>
	 * の例を参照ください。
	 * </p>
	 * @param string $version <p>
	 * 調べる機能 <i>feature</i> のバージョン番号。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * ノードが属性を保持しているかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function hasAttributes(): bool {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition(DOMNode $other) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 2 つのノードが等しいかどうかを調べる
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * 比較対象となるノード。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function isSameNode(DOMNode $node): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * 名前空間 URI。
	 * </p>
	 * @return string 名前空間のプレフィックスを返します。
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * 調べる名前空間 URI。
	 * </p>
	 * @return bool <i>namespaceURI</i> がデフォルトの名前空間である場合に
	 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * 名前空間のプレフィックス。
	 * </p>
	 * @return string ノードの名前空間 URI を返します。
	 */
	public function lookupNamespaceUri(string $prefix): string {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode(DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData($key) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードの XPath を取得する
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @return string XPath を含む文字列、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public function getNodePath(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ノードが存在する行の番号を取得します。
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @return int 常にノードが定義された行の番号を返します。
	 */
	public function getLineNo(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードを文字列に正規化する
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return string 正規化したノードを文字列で返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14N(bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ノードをファイルに正規化する
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @param string $uri <p>
	 * 出力を書き出すパス。
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * 指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * コメントを残して出力する。
	 * </p>
	 * @param array $xpath [optional] <p>
	 * ノードを絞り込むための xpath の配列。
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * ノードを絞り込むための名前空間プレフィックスの配列。
	 * </p>
	 * @return int 書き込んだバイト数を返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function C14NFile(string $uri, bool $exclusive = null, bool $with_comments = null, array $xpath = null, array $ns_prefixes = null): int {}

}

class DOMStringExtend  {

	/**
	 * @param $offset32
	 */
	public function findOffset16($offset32) {}

	/**
	 * @param $offset16
	 */
	public function findOffset32($offset16) {}

}

/**
 * XPath 1.0 をサポートします。
 * @link http://php.net/manual/ja/class.domxpath.php
 */
class DOMXPath  {
	/**
	 * <p></p>
	 * @var DOMDocument
	 */
	public $document;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * 新しい <b>DOMXPath</b> オブジェクトを作成する
	 * @link http://php.net/manual/ja/domxpath.construct.php
	 * @param DOMDocument $doc <p>
	 * <b>DOMXPath</b> に関連付けられた
	 * <b>DOMDocument</b>。
	 * </p>
	 */
	public function __construct(DOMDocument $doc) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * <b>DOMXPath</b> オブジェクトの名前空間を登録する
	 * @link http://php.net/manual/ja/domxpath.registernamespace.php
	 * @param string $prefix <p>
	 * プレフィックス。
	 * </p>
	 * @param string $namespaceURI <p>
	 * 名前空間の URI。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function registerNamespace(string $prefix, string $namespaceURI): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * 与えられた XPath 式を評価する
	 * @link http://php.net/manual/ja/domxpath.query.php
	 * @param string $expression <p>
	 * 実行する XPath 式。
	 * </p>
	 * @param DOMNode $contextnode [optional] <p>
	 * 相対 XPath クエリを実行する場合に、オプションで基準ノードを指定することが可能です。
	 * デフォルトでは、クエリは root 要素に対する相対パスとなります。
	 * </p>
	 * @param bool $registerNodeNS [optional] <p>
	 * オプションの <i>registerNodeNS</i> で、
	 * コンテキストノードの自動登録を無効にすることができます。
	 * </p>
	 * @return DOMNodeList 与えられた XPath 式 <i>expression</i> にマッチする
	 * すべてのノードを含む <b>DOMNodeList</b> を返します。
	 * ノードを返さない式の場合は、空の <b>DOMNodeList</b>
	 * を返します。
	 * </p>
	 * <p>
	 * <i>expression</i> が不正な形式な場合や
	 * <i>contextnode</i> が無効な場合は、
	 * <b>DOMXPath::query</b> は <b>FALSE</b> を返します。
	 */
	public function query(string $expression, DOMNode $contextnode = null, bool $registerNodeNS = true): DOMNodeList {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 与えられた XPath 式を評価し、可能であれば結果を返す
	 * @link http://php.net/manual/ja/domxpath.evaluate.php
	 * @param string $expression <p>
	 * 実行する XPath 式。
	 * </p>
	 * @param DOMNode $contextnode [optional] <p>
	 * 相対 XPath クエリを実行する場合に、オプションで基準ノードを指定することが可能です。
	 * デフォルトでは、クエリは root 要素に対する相対パスとなります。
	 * </p>
	 * @param bool $registerNodeNS [optional] <p>
	 * オプションの <i>registerNodeNS</i> で、
	 * コンテキストノードの自動登録を無効にすることができます。
	 * </p>
	 * @return mixed 可能であれば型付けされた結果、あるいは指定された XPath 式
	 * <i>expression</i> にマッチするすべてのノードを含む
	 * <b>DOMNodeList</b> を返します。
	 * </p>
	 * <p>
	 * <i>expression</i> が不正な形式な場合や
	 * <i>contextnode</i> が無効な場合は、
	 * <b>DOMXPath::evaluate</b> は <b>FALSE</b> を返します。
	 */
	public function evaluate(string $expression, DOMNode $contextnode = null, bool $registerNodeNS = true) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * PHP の関数を XPath 関数として登録する
	 * @link http://php.net/manual/ja/domxpath.registerphpfunctions.php
	 * @param mixed $restrict [optional] <p>
	 * このパラメータを使って、特定の関数のみを XPath からコールできるように制限することができます。
	 * </p>
	 * <p>
	 * このパラメータには、文字列 (関数名) あるいは関数名の配列を指定します。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function registerPhpFunctions($restrict = null): void {}

}

/**
 * (PHP 5, PHP 7)<br/>
 * <b>SimpleXMLElement</b> オブジェクトから <b>DOMElement</b> オブジェクトを取得する
 * @link http://php.net/manual/ja/function.dom-import-simplexml.php
 * @param SimpleXMLElement $node <p>
 * <b>SimpleXMLElement</b> ノード。
 * </p>
 * @return DOMElement 追加された <b>DOMElement</b> ノード、あるいは
 * 何らかのエラーが発生した場合は <b>FALSE</b> を返します。
 */
function dom_import_simplexml(SimpleXMLElement $node): DOMElement {}


/**
 * ノードは <b>DOMElement</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_ELEMENT_NODE', 1);

/**
 * ノードは <b>DOMAttr</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_ATTRIBUTE_NODE', 2);

/**
 * ノードは <b>DOMText</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_TEXT_NODE', 3);

/**
 * ノードは <b>DOMCharacterData</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_CDATA_SECTION_NODE', 4);

/**
 * ノードは <b>DOMEntityReference</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_ENTITY_REF_NODE', 5);

/**
 * ノードは <b>DOMEntity</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_ENTITY_NODE', 6);

/**
 * ノードは <b>DOMProcessingInstruction</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_PI_NODE', 7);

/**
 * ノードは <b>DOMComment</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_COMMENT_NODE', 8);

/**
 * ノードは <b>DOMDocument</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_DOCUMENT_NODE', 9);

/**
 * ノードは <b>DOMDocumentType</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_DOCUMENT_TYPE_NODE', 10);

/**
 * ノードは <b>DOMDocumentFragment</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_DOCUMENT_FRAG_NODE', 11);

/**
 * ノードは <b>DOMNotation</b> です。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('XML_NOTATION_NODE', 12);
define ('XML_HTML_DOCUMENT_NODE', 13);
define ('XML_DTD_NODE', 14);
define ('XML_ELEMENT_DECL_NODE', 15);
define ('XML_ATTRIBUTE_DECL_NODE', 16);
define ('XML_ENTITY_DECL_NODE', 17);
define ('XML_NAMESPACE_DECL_NODE', 18);
define ('XML_LOCAL_NAMESPACE', 18);
define ('XML_ATTRIBUTE_CDATA', 1);
define ('XML_ATTRIBUTE_ID', 2);
define ('XML_ATTRIBUTE_IDREF', 3);
define ('XML_ATTRIBUTE_IDREFS', 4);
define ('XML_ATTRIBUTE_ENTITY', 6);
define ('XML_ATTRIBUTE_NMTOKEN', 7);
define ('XML_ATTRIBUTE_NMTOKENS', 8);
define ('XML_ATTRIBUTE_ENUMERATION', 9);
define ('XML_ATTRIBUTE_NOTATION', 10);

/**
 * DOM の仕様にないエラーコードです。PHP のエラーを意味します。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_PHP_ERR', 0);

/**
 * インデックスあるいはサイズが負です。または上限を超えています。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_INDEX_SIZE_ERR', 1);

/**
 * 指定したテキストは
 * <b>DOMString</b> 内に収まりません。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOMSTRING_SIZE_ERR', 2);

/**
 * そのノードが所属できない場所に挿入されました。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_HIERARCHY_REQUEST_ERR', 3);

/**
 * ノードが、もともと作成されたのと別のドキュメントで使用されました。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_WRONG_DOCUMENT_ERR', 4);

/**
 * 名前などで、不正な文字が指定されました。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_INVALID_CHARACTER_ERR', 5);

/**
 * データをサポートしていないノードでデータが指定されました。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_NO_DATA_ALLOWED_ERR', 6);

/**
 * 変更が許可されていないオブジェクトを変更しようとしました。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_NO_MODIFICATION_ALLOWED_ERR', 7);

/**
 * 存在しないノードを参照しようとしました。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_NOT_FOUND_ERR', 8);

/**
 * 指定した型のオブジェクトや操作は、この実装ではサポートしていません。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_NOT_SUPPORTED_ERR', 9);

/**
 * 別の場所で使用中の属性を追加しようとしました。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_INUSE_ATTRIBUTE_ERR', 10);

/**
 * 現在使用できない、あるいは使用できなくなったオブジェクトを
 * 使用しようとしました。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_INVALID_STATE_ERR', 11);

/**
 * 不正な文字列が指定されました。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_SYNTAX_ERR', 12);

/**
 * 基底オブジェクトの型を変更しようとしました。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_INVALID_MODIFICATION_ERR', 13);

/**
 * 名前空間に存在しないオブジェクトを作成または変更しようとしました。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_NAMESPACE_ERR', 14);

/**
 * パラメータや操作は基底オブジェクトではサポートされていません。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_INVALID_ACCESS_ERR', 15);

/**
 * insertBefore や removeChild のようなメソッドのコールによってノードの
 * 「部分的な妥当性」が満たされなくなった際にこの例外が発生し、操作は
 * 行われません。
 * @link http://php.net/manual/ja/dom.constants.php
 */
define ('DOM_VALIDATION_ERR', 16);

// End of dom v.20031129
?>
