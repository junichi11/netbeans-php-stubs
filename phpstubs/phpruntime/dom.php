<?php



/**
 * <p>DOMNode を継承します。<b>DOMAttr</b> は、DOMElement オブジェクトの属性を表します。</p>
 * @link http://php.net/manual/ja/class.domattr.php
 * @since PHP 5, PHP 7
 */
class DOMAttr extends \DOMNode {

	/**
	 * @var string <p>属性の名前</p>
	 * @link http://php.net/manual/ja/class.domattr.php#domattr.props.name
	 */
	public $name;

	/**
	 * @var DOMElement <p>属性を保持する要素</p>
	 * @link http://php.net/manual/ja/class.domattr.php#domattr.props.ownerelement
	 */
	public $ownerElement;

	/**
	 * @var bool <p>未実装です。常に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/class.domattr.php#domattr.props.schematypeinfo
	 */
	public $schemaTypeInfo;

	/**
	 * @var bool <p>未実装です。常に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/class.domattr.php#domattr.props.specified
	 */
	public $specified;

	/**
	 * @var string <p>属性の値</p>
	 * @link http://php.net/manual/ja/class.domattr.php#domattr.props.value
	 */
	public $value;

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 新しい DOMAttr オブジェクトを作成する
	 * <p>新しい DOMAttr オブジェクトを作成します。 このオブジェクトは読み込み専用です。このオブジェクトはドキュメントに 追加することができますが、さらに追加のノードを付け加えるためには ノードをドキュメントに関連付ける必要があります。書き込み可能な ノードを作成するには、 DOMDocument::createAttribute を使用します。</p>
	 * @param string $name <p>属性のタグ名。</p>
	 * @param string $value <p>属性の値。</p>
	 * @return self
	 * @link http://php.net/manual/ja/domattr.construct.php
	 * @since PHP 5, PHP 7
	 */
	public function __construct(string $name, string $value = NULL) {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 属性が定義済みの ID かどうかを調べる
	 * <p>この関数は、属性が定義済みの ID かどうかを調べます。</p><p>DOM 標準規格によると、DTD では ID 型の属性 ID が定義されていなければ なりません。この関数を使用する前には、 DOMDocument::validate あるいは <i>DOMDocument::validateOnParse</i> を使用して ドキュメントを検証する必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domattr.isid.php
	 * @since PHP 5, PHP 7
	 */
	public function isId(): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
}

/**
 * <p><b>DOMCdataSection</b> は DOMText を継承したクラスで、 CData のテキスト表現に使います。</p>
 * @link http://php.net/manual/ja/class.domcdatasection.php
 * @since PHP 5, PHP 7
 */
class DOMCdataSection extends \DOMText {

	/**
	 * 新しい DOMCdataSection オブジェクトを作成する
	 * <p>新しい CDATA ノードを作成します。これは、DOMText クラスと同じように動作します。</p>
	 * @param string $value <p>CDATA ノードの値。省略した場合は、空の CDATA ノードを作成します。</p>
	 * @return self
	 * @link http://php.net/manual/ja/domcdatasection.construct.php
	 * @since PHP 5, PHP 7
	 */
	public function __construct(string $value) {}

	/**
	 * Returns whether this text node contains whitespace in element content
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domtext.iselementcontentwhitespace.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function isElementContentWhitespace(): bool {}

	/**
	 * このテキストノードが空白を含むかどうかを示す
	 * <p>このテキストノードが空白のみを含む（あるいは空である）かどうかを示します。 このテキストノードが要素の内容に空白を含むかどうかは、 ドキュメントの読み込み時に決定されます。</p>
	 * @return bool <p>ノードにゼロ個以上の空白文字だけが含まれる場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domtext.iswhitespaceinelementcontent.php
	 * @since PHP 5, PHP 7
	 */
	public function isWhitespaceInElementContent(): bool {}

	/**
	 * 指定したオフセットでノードを 2 つに分割する
	 * <p>指定したオフセット <code>offset</code> でノードを 2 つに分割します。分割したノードのツリー内での位置関係は、兄弟となります。</p><p>分割した後は、このノードは <code>offset</code> 位置までの 内容を保持するようになります。元のノードが親ノードを保持している場合、 新しいノードは元のノードの兄弟として元のノードの次の位置に挿入されます。 <code>offset</code> がこのノードの長さに等しい場合は、 新しいノードにはデータが含まれません。</p>
	 * @param int $offset <p>分割する位置を示すオフセット。0 から始まります。</p>
	 * @return DOMText <p>同じ型の新しいノードを返します。<code>offset</code> 以降の内容をデータとして保持します。</p>
	 * @link http://php.net/manual/ja/domtext.splittext.php
	 * @since PHP 5, PHP 7
	 */
	public function splitText(int $offset): \DOMText {}
}

/**
 * <p>文字データノードを表します。このクラスに直接対応するノードはなく、 他のノードがこれを継承します。</p>
 * @link http://php.net/manual/ja/class.domcharacterdata.php
 * @since PHP 5, PHP 7
 */
class DOMCharacterData extends \DOMNode {

	/**
	 * @var string <p>ノードの内容。</p>
	 * @link http://php.net/manual/ja/class.domcharacterdata.php#domcharacterdata.props.data
	 */
	public $data;

	/**
	 * @var int <p>内容の長さ。</p>
	 * @link http://php.net/manual/ja/class.domcharacterdata.php#domcharacterdata.props.length
	 */
	public $length;

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードの文字データの最後に文字列を追加する
	 * <p>ノードの文字データの最後に文字列 <code>data</code> を追加します。</p>
	 * @param string $data <p>追加する文字列。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domcharacterdata.appenddata.php
	 * @since PHP 5, PHP 7
	 */
	public function appendData(string $data): void {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * 指定した範囲の文字列をノードから削除する
	 * <p><code>offset</code> で指定した位置から <code>count</code> 文字ぶんの文字を削除します。</p>
	 * @param int $offset <p>削除開始位置のオフセット。</p>
	 * @param int $count <p>削除する文字の数。 <code>offset</code> と <code>count</code> の和が文字列の長さをこえている場合、データ末尾までのすべての データが削除されます。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domcharacterdata.deletedata.php
	 * @since PHP 5, PHP 7
	 */
	public function deleteData(int $offset, int $count): void {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した 16 ビット単位のオフセットに、文字列を挿入する
	 * <p><code>offset</code> の位置に、文字列 <code>data</code> を挿入します。</p>
	 * @param int $offset <p>挿入する場所の文字オフセット。</p>
	 * @param string $data <p>挿入する文字列。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domcharacterdata.insertdata.php
	 * @since PHP 5, PHP 7
	 */
	public function insertData(int $offset, string $data): void {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}

	/**
	 * DOMCharacterData ノードの文字列の一部を置換する
	 * <p>位置 <code>offset</code> から <code>count</code> 文字ぶんのデータを、<code>data</code> に置換します。</p>
	 * @param int $offset <p>置換開始位置のオフセット。</p>
	 * @param int $count <p>置換する文字の数。 <code>offset</code> と <code>count</code> の和が文字列の長さをこえている場合、データ末尾までのすべての データが置換されます。</p>
	 * @param string $data <p>置換する文字列。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domcharacterdata.replacedata.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceData(int $offset, int $count, string $data): void {}

	/**
	 * ノードから指定した範囲のデータを抽出する
	 * <p>指定した部分文字列を返します。</p>
	 * @param int $offset <p>部分文字列の抽出開始位置のオフセット。</p>
	 * @param int $count <p>抽出する文字数。</p>
	 * @return string <p>指定された部分文字列を返します。 <code>offset</code> と <code>count</code> の和が文字列の長さをこえている場合、データの末尾までのすべての 16 ビット単位が返されます。</p>
	 * @link http://php.net/manual/ja/domcharacterdata.substringdata.php
	 * @since PHP 5, PHP 7
	 */
	public function substringData(int $offset, int $count): string {}
}

/**
 * <p>コメントノード、つまり <code>&lt;!--</code> と <code>--&gt;</code> で囲まれた文字を表します。</p>
 * @link http://php.net/manual/ja/class.domcomment.php
 * @since PHP 5, PHP 7
 */
class DOMComment extends \DOMCharacterData {

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 新しい DOMComment オブジェクトを作成する
	 * <p>新しい DOMComment オブジェクトを作成します。 このオブジェクトは読み込み専用です。このオブジェクトをドキュメントに 追加することが可能ですが、ノードがドキュメントと関連付けられるまでは ノードを追加することはできません。書き込み可能なノードを作成するには、 DOMDocument::createComment を使用します。</p>
	 * @param string $value <p>コメントの値。</p>
	 * @return self
	 * @link http://php.net/manual/ja/domcomment.construct.php
	 * @since PHP 5, PHP 7
	 */
	public function __construct(string $value = NULL) {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードの文字データの最後に文字列を追加する
	 * <p>ノードの文字データの最後に文字列 <code>data</code> を追加します。</p>
	 * @param string $data <p>追加する文字列。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domcharacterdata.appenddata.php
	 * @since PHP 5, PHP 7
	 */
	public function appendData(string $data): void {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * 指定した範囲の文字列をノードから削除する
	 * <p><code>offset</code> で指定した位置から <code>count</code> 文字ぶんの文字を削除します。</p>
	 * @param int $offset <p>削除開始位置のオフセット。</p>
	 * @param int $count <p>削除する文字の数。 <code>offset</code> と <code>count</code> の和が文字列の長さをこえている場合、データ末尾までのすべての データが削除されます。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domcharacterdata.deletedata.php
	 * @since PHP 5, PHP 7
	 */
	public function deleteData(int $offset, int $count): void {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した 16 ビット単位のオフセットに、文字列を挿入する
	 * <p><code>offset</code> の位置に、文字列 <code>data</code> を挿入します。</p>
	 * @param int $offset <p>挿入する場所の文字オフセット。</p>
	 * @param string $data <p>挿入する文字列。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domcharacterdata.insertdata.php
	 * @since PHP 5, PHP 7
	 */
	public function insertData(int $offset, string $data): void {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}

	/**
	 * DOMCharacterData ノードの文字列の一部を置換する
	 * <p>位置 <code>offset</code> から <code>count</code> 文字ぶんのデータを、<code>data</code> に置換します。</p>
	 * @param int $offset <p>置換開始位置のオフセット。</p>
	 * @param int $count <p>置換する文字の数。 <code>offset</code> と <code>count</code> の和が文字列の長さをこえている場合、データ末尾までのすべての データが置換されます。</p>
	 * @param string $data <p>置換する文字列。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domcharacterdata.replacedata.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceData(int $offset, int $count, string $data): void {}

	/**
	 * ノードから指定した範囲のデータを抽出する
	 * <p>指定した部分文字列を返します。</p>
	 * @param int $offset <p>部分文字列の抽出開始位置のオフセット。</p>
	 * @param int $count <p>抽出する文字数。</p>
	 * @return string <p>指定された部分文字列を返します。 <code>offset</code> と <code>count</code> の和が文字列の長さをこえている場合、データの末尾までのすべての 16 ビット単位が返されます。</p>
	 * @link http://php.net/manual/ja/domcharacterdata.substringdata.php
	 * @since PHP 5, PHP 7
	 */
	public function substringData(int $offset, int $count): string {}
}

/**
 * <p>HTML ドキュメントあるいは XML ドキュメント全体を表し、 ドキュメントツリーのルートとなります。</p>
 * @link http://php.net/manual/ja/class.domdocument.php
 * @since PHP 5, PHP 7
 */
class DOMDocument extends \DOMNode {

	/**
	 * @var string <p><i>非推奨</i>。ドキュメントの実際のエンコーディング。 読み込み専用で、 encoding と同等の内容です。</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.actualencoding
	 */
	public $actualEncoding;

	/**
	 * @var DOMConfiguration <p><i>非推奨</i>。 <code>DOMDocument::normalizeDocument()</code> を実行する際に使用する設定。</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.config
	 */
	public $config;

	/**
	 * @var DOMDocumentType <p>このドキュメントに関連付けられた文書型宣言</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.doctype
	 */
	public $doctype;

	/**
	 * @var DOMElement <p>ドキュメントの子ノードであるドキュメント要素に対し、 直接アクセスするために便利な属性</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.documentelement
	 */
	public $documentElement;

	/**
	 * @var string <p>ドキュメントの位置。未定義の場合は <b><code>NULL</code></b></p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.documenturi
	 */
	public $documentURI;

	/**
	 * @var string <p>XML 宣言で指定したドキュメントのエンコーディング。 この属性は、DOM Level 3 の最終的な仕様には存在しません。 しかし、この実装で XML ドキュメントのエンコーディングを扱うにはこれを使用するしかありません。</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.encoding
	 */
	public $encoding;

	/**
	 * @var bool <p>字下げや空白を考慮してきれいに整形した出力を行う。</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.formatoutput
	 */
	public $formatOutput;

	/**
	 * @var DOMImplementation <p>このドキュメントを処理する DOMImplementation オブジェクト</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.implementation
	 */
	public $implementation;

	/**
	 * @var bool <p>余分な空白を取り除かない。デフォルトは <b><code>TRUE</code></b></p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.preservewhitespace
	 */
	public $preserveWhiteSpace = true;

	/**
	 * @var bool <p><i>プロプライエタリ</i>。 リカバリーモードを有効にし、整形式でないドキュメントのパースを試みます。 この属性は DOM の仕様にはなく、libxml に固有のものです。</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.recover
	 */
	public $recover;

	/**
	 * @var bool <p>文書型宣言で外部エンティティを読み込む際に <b><code>TRUE</code></b> を設定する。 XML ドキュメントに文字エンティティを含める際に便利です。</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.resolveexternals
	 */
	public $resolveExternals;

	/**
	 * @var bool <p><i>非推奨</i>。 そのドキュメントがスタンドアローンかどうかを XML 宣言で指定したもの。 xmlStandalone に対応します。</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.standalone
	 */
	public $standalone;

	/**
	 * @var bool <p>エラー時に DOMException をスローする。デフォルトは <b><code>TRUE</code></b></p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.stricterrorchecking
	 */
	public $strictErrorChecking = true;

	/**
	 * @var bool <p><i>プロプライエタリ</i>。 エンティティの置換を行うかどうか。 この属性は DOM の仕様にはなく、libxml に固有のものです。</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.substituteentities
	 */
	public $substituteEntities;

	/**
	 * @var bool <p>DTD を読み込んで検証する。デフォルトは <b><code>FALSE</code></b></p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.validateonparse
	 */
	public $validateOnParse = false;

	/**
	 * @var string <p><i>非推奨</i>。 XML のバージョン。 xmlVersion に対応します。</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.version
	 */
	public $version;

	/**
	 * @var string <p>XML 宣言の一部として、このドキュメントのエンコーディングを 指定する属性。指定されていない場合や不明な場合 (たとえば ドキュメントがメモリ上に存在する場合など) は <b><code>NULL</code></b></p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.xmlencoding
	 */
	public $xmlEncoding;

	/**
	 * @var bool <p>XML 宣言の一部として、このドキュメントがスタンドアローンか どうかを指定する。指定されていない場合は <b><code>FALSE</code></b></p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.xmlstandalone
	 */
	public $xmlStandalone;

	/**
	 * @var string <p>XML 宣言の一部として、このドキュメントのバージョン番号を指定する。 バージョン番号が定義されておらず、ドキュメントが "XML" の機能を サポートしている場合は、値は "1.0"</p>
	 * @link http://php.net/manual/ja/class.domdocument.php#domdocument.props.xmlversion
	 */
	public $xmlVersion;

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 新しい DOMDocument オブジェクトを作成する
	 * <p>新しい DOMDocument オブジェクトを作成します。</p>
	 * @param string $version <p>XML 宣言の一部である、ドキュメントのバージョン番号。</p>
	 * @param string $encoding <p>XML 宣言の一部である、ドキュメントのエンコーディング。</p>
	 * @return self
	 * @link http://php.net/manual/ja/domdocument.construct.php
	 * @since PHP 5, PHP 7
	 */
	public function __construct(string $version = NULL, string $encoding = NULL) {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * 新しい属性を作成する
	 * <p>この関数は、DOMAttr クラスの新しいインスタンスを作成します。 このノードは、( <code>DOMNode::appendChild()</code> などで) 挿入されない限り、ドキュメント内にあらわれません。</p>
	 * @param string $name <p>属性の名前。</p>
	 * @return DOMAttr <p>新しい DOMAttr、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.createattribute.php
	 * @since PHP 5, PHP 7
	 */
	public function createAttribute(string $name): \DOMAttr {}

	/**
	 * 関連付けられた名前空間に新しい属性を作成する
	 * <p>この関数は、DOMAttr クラスの新しいインスタンスを作成します。 このノードは、( <code>DOMNode::appendChild()</code> などで) 挿入されない限り、ドキュメント内にあらわれません。</p>
	 * @param string $namespaceURI <p>名前空間の URI。</p>
	 * @param string $qualifiedName <p>属性のタグ名とプレフィックスを、<i>prefix:tagname</i> のような形式で指定する。</p>
	 * @return DOMAttr <p>新しい DOMAttr、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.createattributens.php
	 * @since PHP 5, PHP 7
	 */
	public function createAttributeNS(string $namespaceURI, string $qualifiedName): \DOMAttr {}

	/**
	 * 新しい cdata ノードを作成する
	 * <p>この関数は、DOMCDATASection クラスの新しいインスタンスを作成します。このノードは、( <code>DOMNode::appendChild()</code> などで) 挿入されない限り、ドキュメント内にあらわれません。</p>
	 * @param string $data <p>cdata の内容。</p>
	 * @return DOMCDATASection <p>新しい DOMCDATASection、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.createcdatasection.php
	 * @since PHP 5, PHP 7
	 */
	public function createCDATASection(string $data): \DOMCDATASection {}

	/**
	 * 新しい comment ノードを作成する
	 * <p>この関数は、DOMComment クラスの新しいインスタンスを作成します。このノードは、( <code>DOMNode::appendChild()</code> などで) 挿入されない限り、ドキュメント内にあらわれません。</p>
	 * @param string $data <p>コメントの内容。</p>
	 * @return DOMComment <p>新しい DOMComment、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.createcomment.php
	 * @since PHP 5, PHP 7
	 */
	public function createComment(string $data): \DOMComment {}

	/**
	 * 新しい文書片を作成する
	 * <p>この関数は、DOMDocumentFragment クラスの新しいインスタンスを作成します。このノードは、( <code>DOMNode::appendChild()</code> などで) 挿入されない限り、ドキュメント内にあらわれません。</p>
	 * @return DOMDocumentFragment <p>新しい DOMDocumentFragment、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.createdocumentfragment.php
	 * @since PHP 5, PHP 7
	 */
	public function createDocumentFragment(): \DOMDocumentFragment {}

	/**
	 * 新しい要素ノードを作成する
	 * <p>この関数は、DOMElement クラスの新しいインスタンスを作成します。 このノードは、( <code>DOMNode::appendChild()</code> などで) 挿入されない限り、ドキュメント内にあらわれません。</p>
	 * @param string $name <p>要素のタグ名。</p>
	 * @param string $value <p>要素の値。デフォルトでは、空の要素が作成されます。 その後に DOMElement::$nodeValue で値を設定することも可能です。</p> <p>指定した値はすべてそのまま用いますが、エンティティ参照 &lt; と &gt; だけはエスケープします。&amp; は手動でエスケープする必要があることに注意しましょう。 そうしないと、エンティティ参照の開始とみなされてしまいます。また、" はエスケープされません。</p>
	 * @return DOMElement <p>新しい DOMElement クラスの新しいインスタンス、 あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.createelement.php
	 * @since PHP 5, PHP 7
	 */
	public function createElement(string $name, string $value = NULL): \DOMElement {}

	/**
	 * 関連付けられた名前空間に新しい要素を作成する
	 * <p>この関数は、関連付けられた名前空間に新しい要素を作成します。 このノードは、( <code>DOMNode::appendChild()</code> などで) 挿入されない限り、ドキュメント内にあらわれません。</p>
	 * @param string $namespaceURI <p>名前空間の URI。</p>
	 * @param string $qualifiedName <p>要素名を、<i>prefix:tagname</i> のような形式で指定する。</p>
	 * @param string $value <p>要素の値。デフォルトでは、空の要素が作成されます。 その後に DOMElement::$nodeValue で値を設定することも可能です。</p>
	 * @return DOMElement <p>新しい DOMElement、 あるいはエラーが発生した場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.createelementns.php
	 * @since PHP 5, PHP 7
	 */
	public function createElementNS(string $namespaceURI, string $qualifiedName, string $value = NULL): \DOMElement {}

	/**
	 * 新しいエンティティ参照ノードを作成する
	 * <p>この関数は、DOMEntityReference クラスの新しいインスタンスを作成します。このノードは、( <code>DOMNode::appendChild()</code> などで) 挿入されない限り、ドキュメント内にあらわれません。</p>
	 * @param string $name <p>エンティティ参照の内容、つまり、エンティティ参照から 先頭の <i>&amp;</i> および末尾の <i>;</i> を取り除いたもの。</p>
	 * @return DOMEntityReference <p>新しい DOMEntityReference、 あるいはエラーが発生した場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.createentityreference.php
	 * @since PHP 5, PHP 7
	 */
	public function createEntityReference(string $name): \DOMEntityReference {}

	/**
	 * 新しい PI ノードを作成する
	 * <p>この関数は、DOMProcessingInstruction クラスの新しいインスタンスを作成します。このノードは、( <code>DOMNode::appendChild()</code> などで) 挿入されない限り、ドキュメント内にあらわれません。</p>
	 * @param string $target <p>処理命令の対象。</p>
	 * @param string $data <p>処理命令の内容。</p>
	 * @return DOMProcessingInstruction <p>新しい DOMProcessingInstruction、 あるいはエラーが発生した場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.createprocessinginstruction.php
	 * @since PHP 5, PHP 7
	 */
	public function createProcessingInstruction(string $target, string $data = NULL): \DOMProcessingInstruction {}

	/**
	 * 新しいテキストノードを作成する
	 * <p>この関数は、DOMText クラスの新しいインスタンスを作成します。このノードは、( <code>DOMNode::appendChild()</code> などで) 挿入されない限り、ドキュメント内にあらわれません。</p>
	 * @param string $content <p>テキストの内容。</p>
	 * @return DOMText <p>新しい DOMText、 あるいがエラーが発生した場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.createtextnode.php
	 * @since PHP 5, PHP 7
	 */
	public function createTextNode(string $content): \DOMText {}

	/**
	 * id に対応する要素を検索する
	 * <p>この関数は、 DOMDocument::getElementsByTagName と同じですが、指定した ID から要素を検索する点が違います。</p><p>この関数を動作させるには、何らかの ID 属性を DOMElement::setIdAttribute で設定するか、あるいは DTD で ID 型の属性を定義する必要があります。 後者の場合は、 DOMDocument::validate あるいは DOMDocument::$validateOnParse を使用してドキュメントを検証する必要があります。</p>
	 * @param string $elementId <p>要素の ID。</p>
	 * @return DOMElement <p>DOMElement、 あるいは要素が見つからなかった場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.getelementbyid.php
	 * @since PHP 5, PHP 7
	 */
	public function getElementById(string $elementId): \DOMElement {}

	/**
	 * 指定したローカルタグ名に対応するすべての要素を検索する
	 * <p>この関数は、指定したローカルタグ名のすべての要素を含む DOMNodeList クラスの新しいインスタンスを返します。</p>
	 * @param string $name <p>タグのローカル名 (名前空間を除いたもの) に一致する名前。<i>&#42;</i> はすべてのタグに一致します。</p>
	 * @return DOMNodeList <p>一致するすべての要素を含む、新しい DOMNodeList オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/domdocument.getelementsbytagname.php
	 * @since PHP 5, PHP 7
	 */
	public function getElementsByTagName(string $name): \DOMNodeList {}

	/**
	 * 指定した名前空間で、タグ名に対応するすべての要素を検索する
	 * <p>指定したローカル名および名前空間 URI に一致するすべての要素の DOMNodeList を返します。</p>
	 * @param string $namespaceURI <p>条件に一致する要素の名前空間 URI。 <i>&#42;</i> はすべての名前空間に一致します。</p>
	 * @param string $localName <p>条件に一致する要素のローカル名。 <i>&#42;</i> はすべてのローカル名に一致します。</p>
	 * @return DOMNodeList <p>一致するすべての要素を含む、新しい DOMNodeList オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/domdocument.getelementsbytagnamens.php
	 * @since PHP 5, PHP 7
	 */
	public function getElementsByTagNameNS(string $namespaceURI, string $localName): \DOMNodeList {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 現在のドキュメントにノードをインポートする
	 * <p>この関数は、インポートするノードのコピーを返し、 それを現在のドキュメントに関連付けます。</p>
	 * @param \DOMNode $importedNode <p>インポートするノード。</p>
	 * @param bool $deep <p><b><code>TRUE</code></b> の場合、このメソッドは <code>importedNode</code> 以下のサブツリーも再帰的にインポートします。</p>  <p><b>注意</b>:</p> <p>ノードの属性をコピーするには <code>deep</code> を <b><code>TRUE</code></b> に設定しなければなりません。</p>
	 * @return DOMNode <p>コピーされたノードを返します。 コピーできなかった場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.importnode.php
	 * @since PHP 5, PHP 7
	 */
	public function importNode(\DOMNode $importedNode, bool $deep = NULL): \DOMNode {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * ファイルから XML を読み込む
	 * <p>XML ドキュメントをファイルから読み込みます。</p><p>Unix 風のパス (スラッシュを使った方式) を Windows 上で使用すると、 パフォーマンスが著しく低下します。そんな場合は <code>realpath()</code> をコールしましょう。</p>
	 * @param string $filename <p>XML ドキュメントへのパス。</p>
	 * @param int $options <p>libxml オプション定数 を ビット <i>OR</i> で連結したもの。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 静的にコールされた場合には DOMDocument を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domdocument.load.php
	 * @since PHP 5, PHP 7
	 */
	public function load(string $filename, int $options = 0) {}

	/**
	 * 文字列から HTML を読み込む
	 * <p>この関数は、文字列 <code>source</code> に含まれる HTML を パースします。XML を読み込む場合とは異なり、妥当な HTML でなくても 読み込むことができます。この関数をスタティックにコールすると、 読み込んだ内容をもとに DOMDocument オブジェクトを作成します。 読み込み前に DOMDocument のプロパティを 設定する必要がない場合に、スタティックに実行することがあるでしょう。</p>
	 * @param string $source <p>HTML 文字列。</p>
	 * @param int $options <p>PHP 5.4.0 と Libxml 2.6.0 以降では、 <code>options</code> パラメータで Libxml の追加パラメータ を指定できます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 静的にコールされた場合には DOMDocument を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domdocument.loadhtml.php
	 * @since PHP 5, PHP 7
	 */
	public function loadHTML(string $source, int $options = 0): bool {}

	/**
	 * ファイルから HTML を読み込む
	 * <p>この関数は、<code>filename</code> という名前のファイルから 読み込んだ HTML ドキュメントをパースします。 XML を読み込む場合とは異なり、妥当な HTML でなくても 読み込むことができます。</p>
	 * @param string $filename <p>HTML ファイルへのパス。</p>
	 * @param int $options <p>PHP 5.4.0 と Libxml 2.6.0 以降では、 <code>options</code> パラメータで Libxml の追加パラメータ を指定できます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 静的にコールされた場合には DOMDocument を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domdocument.loadhtmlfile.php
	 * @since PHP 5, PHP 7
	 */
	public function loadHTMLFile(string $filename, int $options = 0): bool {}

	/**
	 * 文字列から XML を読み込む
	 * <p>XML ドキュメントを文字列から読み込みます。</p>
	 * @param string $source <p>XML を含む文字列。</p>
	 * @param int $options <p>libxml オプション定数 を ビット <i>OR</i> で連結したもの。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 静的にコールされた場合には DOMDocument を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domdocument.loadxml.php
	 * @since PHP 5, PHP 7
	 */
	public function loadXML(string $source, int $options = 0) {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * ドキュメントを正規化する
	 * <p>このメソッドは、まるでドキュメントを一度保存してから読み込みなおしたかのように動作し、 ドキュメントを "正規化された" 形式にします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domdocument.normalizedocument.php
	 * @since PHP 5, PHP 7
	 */
	public function normalizeDocument(): void {}

	/**
	 * 基底ノード型を作成する際に使用する拡張クラスを登録する
	 * <p>このメソッドにより、独自に拡張した DOM クラスを登録することができます。 これを、後で PHP DOM 拡張モジュールで使用します。</p><p>このメソッドは、DOM の標準にはないものです。</p>
	 * @param string $baseclass <p>拡張したい DOM クラス。クラス名の一覧は、 この章の導入部にあります。</p>
	 * @param string $extendedclass <p>拡張したクラスの名前。<b><code>NULL</code></b> を渡した場合は、 それまでに <code>baseclass</code> を拡張して作成したすべてのクラスが削除されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.registernodeclass.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function registerNodeClass(string $baseclass, string $extendedclass): bool {}

	/**
	 * ドキュメントを relaxNG で検証する
	 * <p>指定した RNG スキーマに基づいて、ドキュメントを » relaxNG で検証します。</p>
	 * @param string $filename <p>RNG ファイル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.relaxngvalidate.php
	 * @since PHP 5, PHP 7
	 */
	public function relaxNGValidate(string $filename): bool {}

	/**
	 * ドキュメントを relaxNG で検証する
	 * <p>指定した RNG ソースに基づいて、ドキュメントを » relaxNG で検証します。</p>
	 * @param string $source <p>RNG スキーマを含む文字列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.relaxngvalidatesource.php
	 * @since PHP 5, PHP 7
	 */
	public function relaxNGValidateSource(string $source): bool {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}

	/**
	 * 内部の XML ツリーをファイルに出力する
	 * <p>DOM 表現から XML ドキュメントを作成します。この関数は、通常は以下の例のように DOM ドキュメントを新しく作成した後にコールされます。</p>
	 * @param string $filename <p>保存された XML ドキュメントへのパス。</p>
	 * @param int $options <p>追加のオプション。現在は LIBXML_NOEMPTYTAG のみが サポートされています。</p>
	 * @return int <p>書き込んだバイト数、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.save.php
	 * @since PHP 5, PHP 7
	 */
	public function save(string $filename, int $options = NULL): int {}

	/**
	 * 内部のドキュメントを HTML 形式の文字列として出力する
	 * <p>DOM 表現から HTML ドキュメントを作成します。この関数は、通常は以下の例のように DOM ドキュメントを新しく作成した後にコールされます。</p>
	 * @param \DOMNode $node <p>ドキュメントのサブセットを出力するオプションのパラメータ。</p>
	 * @return string <p>HTML、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.savehtml.php
	 * @since PHP 5, PHP 7
	 */
	public function saveHTML(\DOMNode $node = NULL): string {}

	/**
	 * 内部のドキュメントを HTML 形式でファイルに出力する
	 * <p>DOM 表現から HTML ドキュメントを作成します。この関数は、通常は以下の例のように DOM ドキュメントを新しく作成した後にコールされます。</p>
	 * @param string $filename <p>保存された HTML ドキュメントへのパス。</p>
	 * @return int <p>書き込んだバイト数、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.savehtmlfile.php
	 * @since PHP 5, PHP 7
	 */
	public function saveHTMLFile(string $filename): int {}

	/**
	 * 内部の XML ツリーを文字列として出力する
	 * <p>DOM 表現から XML ドキュメントを作成します。この関数は、通常は以下の例のように DOM ドキュメントを新しく作成した後にコールされます。</p>
	 * @param \DOMNode $node <p>ドキュメント全体ではなく、XML 宣言以外の特定のノードだけを 出力したい場合にこのパラメータを使用します。</p>
	 * @param int $options <p>追加のオプション。現在は LIBXML_NOEMPTYTAG のみが サポートされています。</p>
	 * @return string <p>XML、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.savexml.php
	 * @since PHP 5, PHP 7
	 */
	public function saveXML(\DOMNode $node = NULL, int $options = NULL): string {}

	/**
	 * スキーマに基づいてドキュメントを検証する
	 * <p>指定されたスキーマファイルに基づいてドキュメントを検証します。</p>
	 * @param string $filename <p>スキーマへのパス。</p>
	 * @param int $flags <p>Libxml のスキーマ検証フラグのビットマスク。現在サポートしている値は LIBXML_SCHEMA_CREATE だけです。PHP 5.5.2 および Libxml 2.6.14 以降で使えます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.schemavalidate.php
	 * @since PHP 5, PHP 7
	 */
	public function schemaValidate(string $filename, int $flags = NULL): bool {}

	/**
	 * スキーマに基づいてドキュメントを検証する
	 * <p>指定した文字列に定義されているスキーマに基づいてドキュメントを検証します。</p>
	 * @param string $source <p>スキーマを含む文字列。</p>
	 * @param int $flags <p>Libxml のスキーマ検証フラグのビットマスク。現在サポートしている値は LIBXML_SCHEMA_CREATE だけです。PHP 5.5.2 および Libxml 2.6.14 以降で使えます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.schemavalidatesource.php
	 * @since PHP 5, PHP 7
	 */
	public function schemaValidateSource(string $source, int $flags = NULL): bool {}

	/**
	 * DTD に基づいてドキュメントを検証する
	 * <p>DTD に基づいてドキュメントを検証します。</p><p>DTD による検証を行うには、DOMDocument の <i>validateOnParse</i> プロパティを使用することも可能です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 ドキュメントに DTD が添付されていない場合は、このメソッドは <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.validate.php
	 * @since PHP 5, PHP 7
	 */
	public function validate(): bool {}

	/**
	 * DOMDocument オブジェクト内の XIncludes を置換する
	 * <p>このメソッドは、DOMDocument オブジェクト内の » XIncludes を置換します。</p><p><b>注意</b>:</p><p>include される XML ファイルに DTD が添付されている場合は libxml2 が自動的にエンティティを解決するため、 このメソッドは予期せぬ結果を引き起こすことがあります。</p>
	 * @param int $options <p>libxml のパラメータ。 PHP 5.1.0 および Libxml 2.6.7 以降で使用可能です。</p>
	 * @return int <p>ドキュメント内の XIncludes の数を返します。 何かの処理に失敗した場合は -1、 置換が発生しなかった場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocument.xinclude.php
	 * @since PHP 5, PHP 7
	 */
	public function xinclude(int $options = NULL): int {}
}

/**
 * @link http://php.net/manual/ja/class.domdocumentfragment.php
 * @since PHP 5, PHP 7
 */
class DOMDocumentFragment extends \DOMNode {

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * 生の XML データを追加する
	 * <p>生の XML データを DOMDocumentFragment に追加します。</p><p>このメソッドは、DOM の標準にはないものです。 これは、XML DocumentFragment を DOMDocument に簡単に追加できるように作成されました。</p><p>標準に従いたい場合は、まずテンポラリの DOMDocument をダミーのルートで作成し、 追加したい XML データのルートの子ノードを順にループする必要があります。</p>
	 * @param string $data <p>追加する XML。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domdocumentfragment.appendxml.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	public function appendXML(string $data): bool {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
}

/**
 * <p>各 DOMDocument は <i>doctype</i> 属性を保持しており、その値は <b><code>NULL</code></b> あるいは <b>DOMDocumentType</b> オブジェクトです。</p>
 * @link http://php.net/manual/ja/class.domdocumenttype.php
 * @since PHP 5, PHP 7
 */
class DOMDocumentType extends \DOMNode {

	/**
	 * @var string <p>外部サブセットの公開 ID。</p>
	 * @link http://php.net/manual/ja/class.domdocumenttype.php#domdocumenttype.props.publicid
	 */
	public $publicId;

	/**
	 * @var string <p>外部サブセットのシステム ID。完全 URI である場合とそうでない場合がある。</p>
	 * @link http://php.net/manual/ja/class.domdocumenttype.php#domdocumenttype.props.systemid
	 */
	public $systemId;

	/**
	 * @var string <p>DTD の名前。すなわち、<i>DOCTYPE</i> キーワードに続く値。</p>
	 * @link http://php.net/manual/ja/class.domdocumenttype.php#domdocumenttype.props.name
	 */
	public $name;

	/**
	 * @var DOMNamedNodeMap <p>DTD で宣言されている一般エンティティ (外部・内部とも) を含む DOMNamedNodeMap。</p>
	 * @link http://php.net/manual/ja/class.domdocumenttype.php#domdocumenttype.props.entities
	 */
	public $entities;

	/**
	 * @var DOMNamedNodeMap <p>DTD で宣言されている記法を含む DOMNamedNodeMap。</p>
	 * @link http://php.net/manual/ja/class.domdocumenttype.php#domdocumenttype.props.notations
	 */
	public $notations;

	/**
	 * @var string <p>内部サブセットを文字列として取得する。存在しない場合は null となる。区切りの角括弧は含まない。</p>
	 * @link http://php.net/manual/ja/class.domdocumenttype.php#domdocumenttype.props.internalsubset
	 */
	public $internalSubset;

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
}

/**
 * @link http://php.net/manual/ja/class.domelement.php
 * @since PHP 5, PHP 7
 */
class DOMElement extends \DOMNode {

	/**
	 * @var bool <p>未実装。常に <b><code>NULL</code></b> を返す。</p>
	 * @link http://php.net/manual/ja/class.domelement.php#domelement.props.schematypeinfo
	 */
	public $schemaTypeInfo;

	/**
	 * @var string <p>要素名</p>
	 * @link http://php.net/manual/ja/class.domelement.php#domelement.props.tagname
	 */
	public $tagName;

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 新しい DOMElement オブジェクトを作成する
	 * <p>新しい DOMElement オブジェクトを作成します。 このオブジェクトは読み込み専用です。このオブジェクトをドキュメントに 追加することが可能ですが、ノードがドキュメントに関連付けられるまでは ノードを追加することはできません。書き込み可能なノードを作成するには、 DOMDocument::createElement あるいは DOMDocument::createElementNS を使用します。</p>
	 * @param string $name <p>要素のタグ名。namespaceURI をともに指定した場合、 この URI に関連付けられたプレフィックスが与えられます。</p>
	 * @param string $value <p>要素の値。</p>
	 * @param string $namespaceURI <p>指定した名前空間の中で要素を作成するための 名前空間 URI。</p>
	 * @return self
	 * @link http://php.net/manual/ja/domelement.construct.php
	 * @since PHP 5, PHP 7
	 */
	public function __construct(string $name, string $value = NULL, string $namespaceURI = NULL) {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * 属性の値を返す
	 * <p>現在のノードから、名前が <code>name</code> である属性の値を取得します。</p>
	 * @param string $name <p>属性の名前。</p>
	 * @return string <p>属性の値、あるいは <code>name</code> に対応する属性が 見つからなかった場合には空の文字列を返します。</p>
	 * @link http://php.net/manual/ja/domelement.getattribute.php
	 * @since PHP 5, PHP 7
	 */
	public function getAttribute(string $name): string {}

	/**
	 * 属性の値を返す
	 * <p>現在のノードから、名前空間 <code>namespaceURI</code> における <code>localName</code> というローカル名の属性の値を取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @param string $localName <p>ローカル名。</p>
	 * @return string <p>属性の値、あるいは <code>localName</code> および <code>namespaceURI</code> に対応する属性が 見つからなかった場合には空の文字列を返します。</p>
	 * @link http://php.net/manual/ja/domelement.getattributens.php
	 * @since PHP 5, PHP 7
	 */
	public function getAttributeNS(string $namespaceURI, string $localName): string {}

	/**
	 * 属性ノードを返す
	 * <p>現在の要素の、<code>name</code> という名前の属性ノードを返します。</p>
	 * @param string $name <p>属性の名前。</p>
	 * @return DOMAttr <p>属性ノードを返します。 Note that for XML namespace declarations (<i>xmlns</i> and <i>xmlns:&#42;</i> attributes) an instance of <b>DOMNameSpaceNode</b> is returned instead of a DOMAttr.</p>
	 * @link http://php.net/manual/ja/domelement.getattributenode.php
	 * @since PHP 5, PHP 7
	 */
	public function getAttributeNode(string $name): \DOMAttr {}

	/**
	 * 属性ノードを返す
	 * <p>現在のノードの、名前空間 <code>namespaceURI</code>における <code>localName</code> というローカル名の属性ノードを返します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @param string $localName <p>ローカル名。</p>
	 * @return DOMAttr <p>属性ノードを返します。 Note that for XML namespace declarations (<i>xmlns</i> and <i>xmlns:&#42;</i> attributes) an instance of <b>DOMNameSpaceNode</b> is returned instead of a DOMAttr.</p>
	 * @link http://php.net/manual/ja/domelement.getattributenodens.php
	 * @since PHP 5, PHP 7
	 */
	public function getAttributeNodeNS(string $namespaceURI, string $localName): \DOMAttr {}

	/**
	 * タグ名から要素を取得する
	 * <p>この関数は、指定した名前 <code>name</code> のタグを持つ すべての子孫要素からなるクラス DOMNodeList の新しいインスタンスを返します。要素は、ツリーをたどっていく際に 見つかった順に並べられます。</p>
	 * @param string $name <p>タグ名。ツリー内のすべての要素を返すには <i>&#42;</i> を使用します。</p>
	 * @return DOMNodeList <p>この関数は、一致したすべての要素からなる DOMNodeList クラスのインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/domelement.getelementsbytagname.php
	 * @since PHP 5, PHP 7
	 */
	public function getElementsByTagName(string $name): \DOMNodeList {}

	/**
	 * 名前空間 URI とローカル名から要素を取得する
	 * <p>この関数は、指定した名前 <code>localName</code> および <code>namespaceURI</code> のタグを持つ すべての子孫要素を取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @param string $localName <p>ローカル名。ツリー内のすべての要素を返すには <i>&#42;</i> を使用します。</p>
	 * @return DOMNodeList <p>この関数は、一致したすべての要素からなる DOMNodeList クラスのインスタンスを返します。 各要素は、ツリー内の探索時に見つかった順で並べられます。</p>
	 * @link http://php.net/manual/ja/domelement.getelementsbytagnamens.php
	 * @since PHP 5, PHP 7
	 */
	public function getElementsByTagNameNS(string $namespaceURI, string $localName): \DOMNodeList {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * 属性が存在するかどうかを調べる
	 * <p>要素のメンバとして <code>name</code> という名前の属性が 存在するかどうかを示します。</p>
	 * @param string $name <p>要素名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domelement.hasattribute.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttribute(string $name): bool {}

	/**
	 * 属性が存在するかどうかを調べる
	 * <p>要素のメンバとして <code>localName</code> という名前の属性が 名前空間 <code>namespaceURI</code> に存在するかどうかを示します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @param string $localName <p>ローカル名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domelement.hasattributens.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributeNS(string $namespaceURI, string $localName): bool {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 属性を削除する
	 * <p><code>name</code> という名前の属性を要素から削除します。</p>
	 * @param string $name <p>属性の名前。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domelement.removeattribute.php
	 * @since PHP 5, PHP 7
	 */
	public function removeAttribute(string $name): bool {}

	/**
	 * 属性を削除する
	 * <p>名前空間 <code>namespaceURI</code> にある <code>localName</code> という名前の属性を 要素から削除します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @param string $localName <p>ローカル名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domelement.removeattributens.php
	 * @since PHP 5, PHP 7
	 */
	public function removeAttributeNS(string $namespaceURI, string $localName): bool {}

	/**
	 * 属性を削除する
	 * <p>属性 <code>oldnode</code> を要素から削除します。</p>
	 * @param \DOMAttr $oldnode <p>属性ノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domelement.removeattributenode.php
	 * @since PHP 5, PHP 7
	 */
	public function removeAttributeNode(\DOMAttr $oldnode): bool {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}

	/**
	 * 新しい属性を追加する
	 * <p><code>name</code> という名前の属性を、指定した値に設定します。 属性が存在しない場合は、作成されます。</p>
	 * @param string $name <p>属性の名前。</p>
	 * @param string $value <p>属性の値。</p>
	 * @return DOMAttr <p>新しい DOMAttr、 あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domelement.setattribute.php
	 * @since PHP 5, PHP 7
	 */
	public function setAttribute(string $name, string $value): \DOMAttr {}

	/**
	 * 新しい属性を追加する
	 * <p>名前空間 <code>namespaceURI</code> にある <code>localName</code> という名前の属性を、指定した値に設定します。 属性が存在しない場合は、作成されます。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @param string $qualifiedName <p><i>prefix:tagname</i> 形式で表した属性名。</p>
	 * @param string $value <p>属性の値。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domelement.setattributens.php
	 * @since PHP 5, PHP 7
	 */
	public function setAttributeNS(string $namespaceURI, string $qualifiedName, string $value): void {}

	/**
	 * 新しい属性ノードを要素に追加する
	 * <p>新しい属性ノード <code>attr</code> を要素に追加します。</p>
	 * @param \DOMAttr $attr <p>属性ノード。</p>
	 * @return DOMAttr <p>属性が置換された場合は置換前のノード、そうでない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domelement.setattributenode.php
	 * @since PHP 5, PHP 7
	 */
	public function setAttributeNode(\DOMAttr $attr): \DOMAttr {}

	/**
	 * 新しい属性ノードを要素に追加する
	 * <p>新しい属性ノード <code>attr</code> を要素に追加します。</p>
	 * @param \DOMAttr $attr <p>属性ノード。</p>
	 * @return DOMAttr <p>属性が置換された場合は置換前のノードを返します。</p>
	 * @link http://php.net/manual/ja/domelement.setattributenodens.php
	 * @since PHP 5, PHP 7
	 */
	public function setAttributeNodeNS(\DOMAttr $attr): \DOMAttr {}

	/**
	 * ID 型の属性を名前で宣言する
	 * <p>ID 型となる属性を <code>name</code> で宣言します。</p>
	 * @param string $name <p>属性の名前。</p>
	 * @param bool $isId <p><code>name</code> を ID 型にしたい場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を設定します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domelement.setidattribute.php
	 * @since PHP 5, PHP 7
	 */
	public function setIdAttribute(string $name, bool $isId): void {}

	/**
	 * ID 型の属性をローカル名および名前空間 URI で宣言する
	 * <p>ID 型となる属性を <code>localName</code> および <code>namespaceURI</code> で宣言します。</p>
	 * @param string $namespaceURI <p>属性の名前空間 URI。</p>
	 * @param string $localName <p>属性のローカル名。<i>prefix:tagname</i> 形式。</p>
	 * @param bool $isId <p><code>name</code> を ID 型にしたい場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を設定します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domelement.setidattributens.php
	 * @since PHP 5, PHP 7
	 */
	public function setIdAttributeNS(string $namespaceURI, string $localName, bool $isId): void {}

	/**
	 * ID 型の属性をノードで宣言する
	 * <p>ID 型となる属性 <code>attr</code> を宣言します。</p>
	 * @param \DOMAttr $attr <p>属性ノード。</p>
	 * @param bool $isId <p><code>name</code> を ID 型にしたい場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を設定します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domelement.setidattributenode.php
	 * @since PHP 5, PHP 7
	 */
	public function setIdAttributeNode(\DOMAttr $attr, bool $isId): void {}
}

/**
 * <p>このインターフェイスは、XML ドキュメント内の既知のエンティティを表します。 パース済みかどうかは関係ありません。</p>
 * @link http://php.net/manual/ja/class.domentity.php
 * @since PHP 5, PHP 7
 */
class DOMEntity extends \DOMNode {

	/**
	 * @var string <p>エンティティに関連付けられているパブリック ID が存在すればその値、 それ以外の場合は <b><code>NULL</code></b></p>
	 * @link http://php.net/manual/ja/class.domentity.php#domentity.props.publicid
	 */
	public $publicId;

	/**
	 * @var string <p>エンティティに関連付けられているシステム ID が存在すればその値、 それ以外の場合は <b><code>NULL</code></b>。これは完全な URI かもしれないし、 そうでないかもしれない。</p>
	 * @link http://php.net/manual/ja/class.domentity.php#domentity.props.systemid
	 */
	public $systemId;

	/**
	 * @var string <p>パースされていないエンティティの場合はそのエンティティの名前、 パース済みのエンティティの場合は <b><code>NULL</code></b></p>
	 * @link http://php.net/manual/ja/class.domentity.php#domentity.props.notationname
	 */
	public $notationName;

	/**
	 * @var string <p>外部でパースされたエンティティの場合は、このエンティティの パース時に使用されたエンコーディングを指定する属性。 内部サブセットからのエンティティであったり未知のエンティティで あった場合は <b><code>NULL</code></b></p>
	 * @link http://php.net/manual/ja/class.domentity.php#domentity.props.actualencoding
	 */
	public $actualEncoding;

	/**
	 * @var string <p>外部でパースされたエンティティの場合は、テキスト宣言の一部として このエンティティのエンコーディングを指定する属性。それ以外の場合は <b><code>NULL</code></b></p>
	 * @link http://php.net/manual/ja/class.domentity.php#domentity.props.encoding
	 */
	public $encoding;

	/**
	 * @var string <p>外部でパースされたエンティティの場合は、テキスト宣言の一部として このエンティティのバージョン番号を指定する属性。それ以外の場合は <b><code>NULL</code></b></p>
	 * @link http://php.net/manual/ja/class.domentity.php#domentity.props.version
	 */
	public $version;

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
}

/**
 * @link http://php.net/manual/ja/class.domentityreference.php
 * @since PHP 5, PHP 7
 */
class DOMEntityReference extends \DOMNode {

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 新しい DOMEntityReference オブジェクトを作成する
	 * <p>新しい DOMEntityReference オブジェクトを作成します。</p>
	 * @param string $name <p>エンティティ参照の名前。</p>
	 * @return self
	 * @link http://php.net/manual/ja/domentityreference.construct.php
	 * @since PHP 5, PHP 7
	 */
	public function __construct(string $name) {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
}

/**
 * <p>しかるべき状況、すなわち論理的に不可能な操作を行った際などの場合に DOM 操作は例外を発生させます。</p>
 * <p>例外(exceptions) も参照ください。</p>
 * @link http://php.net/manual/ja/class.domexception.php
 * @since PHP 5, PHP 7
 */
class DOMException extends \Exception {

	/**
	 * @var int <p>発生したエラーの型を示す整数値</p>
	 * @link http://php.net/manual/ja/class.domexception.php#domexception.props.code
	 */
	public $code;

	/**
	 * 例外をコピーする
	 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @since PHP 5, PHP 7
	 */
	final private function __clone() {}

	/**
	 * 例外の文字列表現
	 * <p>例外を文字列で表現したものを返します。</p>
	 * @return string <p>例外を文字列で表現したものを返します。</p>
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @since PHP 5, PHP 7
	 */
	public function __toString(): string {}

	/**
	 * 例外コードを取得する
	 * <p>例外コードを返します。</p>
	 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
	 * @link http://php.net/manual/ja/exception.getcode.php
	 * @since PHP 5, PHP 7
	 */
	final public function getCode() {}

	/**
	 * 例外が作られたファイルを取得する
	 * <p>例外が作られたファイルの名前を取得します。</p>
	 * @return string <p>例外が作られたファイルの名前を返します。</p>
	 * @link http://php.net/manual/ja/exception.getfile.php
	 * @since PHP 5, PHP 7
	 */
	final public function getFile(): string {}

	/**
	 * 例外が作られた行を取得する
	 * <p>例外が作られた行番号を取得します。</p>
	 * @return int <p>例外が作られた行番号を返します。</p>
	 * @link http://php.net/manual/ja/exception.getline.php
	 * @since PHP 5, PHP 7
	 */
	final public function getLine(): int {}

	/**
	 * 例外メッセージを取得する
	 * <p>例外メッセージを返します。</p>
	 * @return string <p>例外メッセージ文字列を返します。</p>
	 * @link http://php.net/manual/ja/exception.getmessage.php
	 * @since PHP 5, PHP 7
	 */
	final public function getMessage(): string {}

	/**
	 * 前の例外を返す
	 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
	 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/exception.getprevious.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	final public function getPrevious(): \Exception {}

	/**
	 * スタックトレースを取得する
	 * <p>例外のスタックトレースを返します。</p>
	 * @return array <p>例外のスタックトレースを配列で返します。</p>
	 * @link http://php.net/manual/ja/exception.gettrace.php
	 * @since PHP 5, PHP 7
	 */
	final public function getTrace(): array {}

	/**
	 * スタックトレースを文字列で取得する
	 * <p>例外のスタックトレースを文字列で返します。</p>
	 * @return string <p>例外のスタックトレースを文字列で返します。</p>
	 * @link http://php.net/manual/ja/exception.gettraceasstring.php
	 * @since PHP 5, PHP 7
	 */
	final public function getTraceAsString(): string {}
}

/**
 * <p><b>DOMImplementation</b> インターフェイスは、 個々のドキュメントオブジェクトモデルのインスタンス独自の操作を行うためのメソッド群を提供します。</p>
 * @link http://php.net/manual/ja/class.domimplementation.php
 * @since PHP 5, PHP 7
 */
class DOMImplementation {

	/**
	 * 新しい DOMImplementation オブジェクトを作成する
	 * <p>新しい DOMImplementation オブジェクトを作成します。</p>
	 * @return self
	 * @link http://php.net/manual/ja/domimplementation.construct.php
	 * @since PHP 5, PHP 7
	 */
	public function __construct() {}

	/**
	 * 指定した型とドキュメント要素の DOMDocument オブジェクトを作成する
	 * <p>指定した型とドキュメント要素の DOMDocument オブジェクトを作成します。</p>
	 * @param string $namespaceURI <p>作成するドキュメント要素の名前空間 URI。</p>
	 * @param string $qualifiedName <p>作成するドキュメント要素の修飾名。</p>
	 * @param \DOMDocumentType $doctype <p>作成するドキュメントの型、あるいは <b><code>NULL</code></b>。</p>
	 * @return DOMDocument <p>新しい DOMDocument オブジェクトを返します。 <code>namespaceURI</code>、<code>qualifiedName</code> および <code>doctype</code> が null の場合は、 ドキュメント要素を含まない空の DOMDocument を返します。</p>
	 * @link http://php.net/manual/ja/domimplementation.createdocument.php
	 * @since PHP 5, PHP 7
	 */
	public function createDocument(string $namespaceURI = NULL, string $qualifiedName = NULL, \DOMDocumentType $doctype = NULL): \DOMDocument {}

	/**
	 * 空の DOMDocumentType オブジェクトを作成する
	 * <p>空の DOMDocumentType オブジェクトを作成します。 エンティティ宣言および記法は使用可能にはなりません。エンティティ参照の 展開やデフォルト属性の追加は発生しません。</p>
	 * @param string $qualifiedName <p>作成されるドキュメント型の修飾名。</p>
	 * @param string $publicId <p>外部サブセットの公開 ID。</p>
	 * @param string $systemId <p>外部サブセットのシステム ID。</p>
	 * @return DOMDocumentType <p><i>ownerDocument</i> を <b><code>NULL</code></b> に設定した 新しい DOMDocumentType ノードを返します。</p>
	 * @link http://php.net/manual/ja/domimplementation.createdocumenttype.php
	 * @since PHP 5, PHP 7
	 */
	public function createDocumentType(string $qualifiedName = NULL, string $publicId = NULL, string $systemId = NULL): \DOMDocumentType {}

	/**
	 * DOM 実装が、指定した機能を実装しているかどうかを調べる
	 * <p>DOM 実装が、指定した機能 <code>feature</code> を実装しているかどうかを調べます。</p><p>DOM 仕様の » Conformance の節に、すべての機能の一覧があります。</p>
	 * @param string $feature <p>調べる機能。</p>
	 * @param string $version <p>調べる <code>feature</code> のバージョン番号。 DOM level 2 においては、これは <i>2.0</i> あるいは <i>1.0</i> のいずれかです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domimplementation.hasfeature.php
	 * @since PHP 5, PHP 7
	 */
	public function hasFeature(string $feature, string $version): bool {}
}

/**
 * @link http://php.net/manual/ja/class.domnamednodemap.php
 * @since PHP 5, PHP 7
 */
class DOMNamedNodeMap implements \Traversable {

	/**
	 * @var int <p>マップ内のノードの数。子ノードのインデックスとして有効な範囲は <i>0</i> から <i>length - 1</i> まで (両端を含む) です。</p>
	 * @link http://php.net/manual/ja/class.domnamednodemap.php#domnamednodemap.props.length
	 */
	public $length;

	/**
	 * 名前で指定されたノードを取得する
	 * <p><i>nodeName</i> で指定されたノードを取得します。</p>
	 * @param string $name <p>取得するノードの名前。</p>
	 * @return DOMNode <p>指定した (任意の型の) <i>nodeName</i> のノード、 あるいはノードが見つからなかった場合には <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnamednodemap.getnameditem.php
	 * @since PHP 5, PHP 7
	 */
	public function getNamedItem(string $name): \DOMNode {}

	/**
	 * ローカル名および名前空間 URI で指定したノードを取得する
	 * <p><code>localName</code> および <code>namespaceURI</code> で指定したノードを取得します。</p>
	 * @param string $namespaceURI <p>取得するノードの名前空間 URI。</p>
	 * @param string $localName <p>取得するノードのローカル名。</p>
	 * @return DOMNode <p>指定した (任意の型の) ローカル名および名前空間 URI のノード、 あるいはノードが見つからなかった場合には <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnamednodemap.getnameditemns.php
	 * @since PHP 5, PHP 7
	 */
	public function getNamedItemNS(string $namespaceURI, string $localName): \DOMNode {}

	/**
	 * インデックスで指定したノードを取得する
	 * <p>DOMNamedNodeMap オブジェクトから、 <code>index</code> で指定したノードを取得します。</p>
	 * @param int $index <p>マップ内のインデックス。</p>
	 * @return DOMNode <p>マップ内の <code>index</code> 番目の位置にあるノード、 あるいはインデックスが不正な形式 (マップ内の要素数以上) の場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnamednodemap.item.php
	 * @since PHP 5, PHP 7
	 */
	public function item(int $index): \DOMNode {}
}

/**
 * @link http://php.net/manual/ja/class.domnode.php
 * @since PHP 5, PHP 7
 */
class DOMNode {

	/**
	 * @var string <p>現在のノード型の正確な名前を返す</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.nodename
	 */
	public $nodeName;

	/**
	 * @var string <p>その型に応じてノードの値を返す。 W3C の仕様とは異なり、 DOMElement ノードの値は <b><code>NULL</code></b> ではなく DOMNode::textContent と等しくなる。</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.nodevalue
	 */
	public $nodeValue;

	/**
	 * @var int <p>ノードの型を、定義済みの定数 XML_xxx_NODE のいずれかで返す</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.nodetype
	 */
	public $nodeType;

	/**
	 * @var DOMNode <p>このノードの親 (存在しない場合は <b><code>NULL</code></b>) を返す</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.parentnode
	 */
	public $parentNode;

	/**
	 * @var DOMNodeList <p>このノードのすべての子を含む DOMNodeList。 子が存在しない場合は、空の DOMNodeList</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.childnodes
	 */
	public $childNodes;

	/**
	 * @var DOMNode <p>このノードの最初の子。存在しない場合は <b><code>NULL</code></b> を返す</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.firstchild
	 */
	public $firstChild;

	/**
	 * @var DOMNode <p>このノードの最後の子。存在しない場合は <b><code>NULL</code></b> を返す</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.lastchild
	 */
	public $lastChild;

	/**
	 * @var DOMNode <p>このノードの直前のノード。存在しない場合は <b><code>NULL</code></b> を返す</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.previoussibling
	 */
	public $previousSibling;

	/**
	 * @var DOMNode <p>このノードの直後のノード。存在しない場合は <b><code>NULL</code></b> を返す</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.nextsibling
	 */
	public $nextSibling;

	/**
	 * @var DOMNamedNodeMap <p>このノードが DOMElement の場合は ノードの属性を含む DOMNamedNodeMap、 それ以外の場合は <b><code>NULL</code></b></p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.attributes
	 */
	public $attributes;

	/**
	 * @var DOMDocument <p>このノードに関連付けられている DOMDocument オブジェクト</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.ownerdocument
	 */
	public $ownerDocument;

	/**
	 * @var string <p>このノードの名前空間 URI。指定されていない場合は <b><code>NULL</code></b></p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.namespaceuri
	 */
	public $namespaceURI;

	/**
	 * @var string <p>このノードの名前空間プレフィックス。指定されていない場合は <b><code>NULL</code></b></p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.prefix
	 */
	public $prefix;

	/**
	 * @var string <p>このノードの名前のローカル部分を返す</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.localname
	 */
	public $localName;

	/**
	 * @var string <p>このノードの完全なベース URI。もし実装が完全な URL を できなかった場合は <b><code>NULL</code></b></p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.baseuri
	 */
	public $baseURI;

	/**
	 * @var string <p>このノードとその子孫ノードのテキスト</p>
	 * @link http://php.net/manual/ja/class.domnode.php#domnode.props.textcontent
	 */
	public $textContent;

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
}

/**
 * @link http://php.net/manual/ja/class.domnodelist.php
 * @since PHP 5, PHP 7
 */
class DOMNodeList implements \Traversable {

	/**
	 * @var int <p>リスト内のノードの数。有効な子ノードのインデックスの範囲は 0 以上 <i>length - 1</i> 以下</p>
	 * @link http://php.net/manual/ja/class.domnodelist.php#domnodelist.props.length
	 */
	public $length;

	/**
	 * Get number of nodes in the list
	 * @return int <p>Returns number of nodes in the list失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/domnodelist.count.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function count(): int {}

	/**
	 * インデックスで指定したノードを取得する
	 * <p>DOMNodeList オブジェクトから、 <code>index</code> で指定したノードを取得します。</p><p>コレクション内のノードの数を知るには、 DOMNodeList オブジェクトの <i>length</i> プロパティを使用します。</p>
	 * @param int $index <p>コレクション内のノードのインデックス。</p>
	 * @return DOMElement <p>DOMNodeList 内の <code>index</code> 番目の位置にあるノード、あるいはインデックスが不正な形式の場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnodelist.item.php
	 * @since PHP 5, PHP 7
	 */
	public function item(int $index): \DOMElement {}
}

/**
 * @link http://php.net/manual/ja/class.domnotation.php
 * @since PHP 5, PHP 7
 */
class DOMNotation extends \DOMNode {

	/**
	 * @var string
	 * @link http://php.net/manual/ja/class.domnotation.php#domnotation.props.publicid
	 */
	public $publicId;

	/**
	 * @var string
	 * @link http://php.net/manual/ja/class.domnotation.php#domnotation.props.systemid
	 */
	public $systemId;

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
}

/**
 * @link http://php.net/manual/ja/class.domprocessinginstruction.php
 * @since PHP 5, PHP 7
 */
class DOMProcessingInstruction extends \DOMNode {

	/**
	 * @var string
	 * @link http://php.net/manual/ja/class.domprocessinginstruction.php#domprocessinginstruction.props.target
	 */
	public $target;

	/**
	 * @var string
	 * @link http://php.net/manual/ja/class.domprocessinginstruction.php#domprocessinginstruction.props.data
	 */
	public $data;

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 新しい DOMProcessingInstruction オブジェクトを作成する
	 * <p>新しい DOMProcessingInstruction オブジェクトを 作成します。このオブジェクトは読み込み専用です。このオブジェクトを ドキュメントに追加することは可能ですが、ノードをドキュメントに 関連付けるまではこのノードに別のノードを追加することはできません。 書き込み可能なノードを作成するには、 DOMDocument::createProcessingInstruction を使用してください。</p>
	 * @param string $name <p>処理命令のタグ名。</p>
	 * @param string $value <p>処理命令の値。</p>
	 * @return self
	 * @link http://php.net/manual/ja/domprocessinginstruction.construct.php
	 * @since PHP 5, PHP 7
	 */
	public function __construct(string $name, string $value = NULL) {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}
}

/**
 * <p><b>DOMText</b> クラスは DOMCharacterData を継承しており、 DOMElement あるいは DOMAttr の中身のテキストを表します。</p>
 * @link http://php.net/manual/ja/class.domtext.php
 * @since PHP 5, PHP 7
 */
class DOMText extends \DOMCharacterData {

	/**
	 * @var string <p>論理的に隣接した (要素やコメント、処理命令などで分割されていない) テキストノードの全テキストを保持します。</p>
	 * @link http://php.net/manual/ja/class.domtext.php#domtext.props.wholetext
	 */
	public $wholeText;

	/**
	 * ノードを文字列に正規化する
	 * <p>ノードを文字列に正規化します。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return string <p>正規化したノードを文字列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14n.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14N(bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): string {}

	/**
	 * ノードをファイルに正規化する
	 * <p>ノードをファイルに正規化します。</p>
	 * @param string $uri <p>出力を書き出すパス。</p>
	 * @param bool $exclusive <p>指定した xpath あるいは名前空間プレフィックスにマッチするノードだけを対象としたパースを有効にする。</p>
	 * @param bool $with_comments <p>コメントを残して出力する。</p>
	 * @param array $xpath <p>ノードを絞り込むための <i>xpath</i> の配列。</p>
	 * @param array $ns_prefixes <p>ノードを絞り込むための名前空間プレフィックスの配列。</p>
	 * @return int <p>書き込んだバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/domnode.c14nfile.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function C14NFile(string $uri, bool $exclusive = NULL, bool $with_comments = NULL, array $xpath = NULL, array $ns_prefixes = NULL): int {}

	/**
	 * 新しい DOMText オブジェクトを作成する
	 * <p>新しい DOMText オブジェクトを作成します。</p>
	 * @param string $value <p>text ノードの値。指定しなかった場合は空の text ノードが作成されます。</p>
	 * @return self
	 * @link http://php.net/manual/ja/domtext.construct.php
	 * @since PHP 5, PHP 7
	 */
	public function __construct(string $value = NULL) {}

	/**
	 * 子要素群の最後に新しい子要素を追加する
	 * <p>この関数は、既存の子要素のリストに新しい子要素を追加するか、 あるいは新しい子要素リストを作成します。子要素の作成には <code>DOMDocument::createElement()</code>、 <code>DOMDocument::createTextNode()</code> などを使用するか、単に別のノードを使用します。</p>
	 * @param \DOMNode $newnode <p>追加する子要素。</p>
	 * @return DOMNode <p>追加したノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.appendchild.php
	 * @since PHP 5, PHP 7
	 */
	public function appendChild(\DOMNode $newnode): \DOMNode {}

	/**
	 * ノードを複製する
	 * <p>ノードのコピーを作成します。</p>
	 * @param bool $deep <p>子孫要素を含めてコピーするかどうかを指定します。 このパラメータのデフォルト値は <b><code>FALSE</code></b> です。</p>
	 * @return DOMNode <p>複製されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.clonenode.php
	 * @since PHP 5, PHP 7
	 */
	public function cloneNode(bool $deep = NULL): \DOMNode {}

	/**
	 * ノードが存在する行の番号を取得します。
	 * <p>ノードが定義された行の番号を取得します。</p>
	 * @return int <p>常にノードが定義された行の番号を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getlineno.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function getLineNo(): int {}

	/**
	 * ノードの XPath を取得する
	 * <p>ノードの XPath ロケーションパスを取得します。</p>
	 * @return string <p>XPath を含む文字列、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.getnodepath.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	public function getNodePath(): string {}

	/**
	 * ノードが属性を保持しているかどうかを調べる
	 * <p>このメソッドは、ノードが属性を保持しているかどうかを調べます。 調べるノードは <b><code>XML_ELEMENT_NODE</code></b> である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.hasattributes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasAttributes(): bool {}

	/**
	 * ノードが子を保持しているかどうかを調べる
	 * <p>この関数は、ノードが子を保持しているかどうかを調べます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.haschildnodes.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildNodes(): bool {}

	/**
	 * 参照しているノードの前に新しい子を追加する
	 * <p>この関数は、参照しているノードの直前に新しいノードを挿入します。 追加するノードに対して変更を加えたい場合は、この関数から返される ノードを使用します。</p>
	 * @param \DOMNode $newnode <p>新しいノード。</p>
	 * @param \DOMNode $refnode <p>参照ノード。指定されなかった場合は、<code>newnode</code> が子要素として追加されます。</p>
	 * @return DOMNode <p>挿入されたノードを返します。</p>
	 * @link http://php.net/manual/ja/domnode.insertbefore.php
	 * @since PHP 5, PHP 7
	 */
	public function insertBefore(\DOMNode $newnode, \DOMNode $refnode = NULL): \DOMNode {}

	/**
	 * 指定した namespaceURI がデフォルトの名前空間かどうかを調べる
	 * <p><code>namespaceURI</code> がデフォルトの名前空間であるかどうかを調べます。</p>
	 * @param string $namespaceURI <p>調べる名前空間 URI。</p>
	 * @return bool <p><code>namespaceURI</code> がデフォルトの名前空間である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.isdefaultnamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function isDefaultNamespace(string $namespaceURI): bool {}

	/**
	 * Returns whether this text node contains whitespace in element content
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domtext.iselementcontentwhitespace.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function isElementContentWhitespace(): bool {}

	/**
	 * 2 つのノードが等しいかどうかを調べる
	 * <p>この関数は、2 つのノードが等しいかどうかを調べます。この比較は、 その内容に基づくものでは<i>ありません</i>。</p>
	 * @param \DOMNode $node <p>比較対象となるノード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issamenode.php
	 * @since PHP 5, PHP 7
	 */
	public function isSameNode(\DOMNode $node): bool {}

	/**
	 * 指定したバージョンで機能がサポートされているかどうかを調べる
	 * <p>指定したバージョン <code>version</code> で、機能 <code>feature</code> がサポートされているかどうかを調べます。</p>
	 * @param string $feature <p>調べる機能。機能の一覧については <code>DOMImplementation::hasFeature()</code> の例を参照ください。</p>
	 * @param string $version <p>調べる機能 <code>feature</code> のバージョン番号。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.issupported.php
	 * @since PHP 5, PHP 7
	 */
	public function isSupported(string $feature, string $version): bool {}

	/**
	 * このテキストノードが空白を含むかどうかを示す
	 * <p>このテキストノードが空白のみを含む（あるいは空である）かどうかを示します。 このテキストノードが要素の内容に空白を含むかどうかは、 ドキュメントの読み込み時に決定されます。</p>
	 * @return bool <p>ノードにゼロ個以上の空白文字だけが含まれる場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domtext.iswhitespaceinelementcontent.php
	 * @since PHP 5, PHP 7
	 */
	public function isWhitespaceInElementContent(): bool {}

	/**
	 * プレフィックスに基づいて、ノードの名前空間 URI を取得する
	 * <p><code>prefix</code> に基づいて、 ノードの名前空間 URI を取得します。</p>
	 * @param string $prefix <p>名前空間のプレフィックス。</p>
	 * @return string <p>ノードの名前空間 URI を返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupnamespaceuri.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupNamespaceURI(string $prefix): string {}

	/**
	 * 名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得する
	 * <p>名前空間 URI に基づいて、ノードの名前空間プレフィックスを取得します。</p>
	 * @param string $namespaceURI <p>名前空間 URI。</p>
	 * @return string <p>名前空間のプレフィックスを返します。</p>
	 * @link http://php.net/manual/ja/domnode.lookupprefix.php
	 * @since PHP 5, PHP 7
	 */
	public function lookupPrefix(string $namespaceURI): string {}

	/**
	 * ノードを正規化する
	 * <p>空のテキストノードを削除し、このノードに隣接するテキストノードとそのすべての子をマージします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domnode.normalize.php
	 * @since PHP 5, PHP 7
	 */
	public function normalize(): void {}

	/**
	 * 子要素群から子要素を削除する
	 * <p>この関数は、子要素群から子要素を削除します。</p>
	 * @param \DOMNode $oldnode <p>削除する子要素。</p>
	 * @return DOMNode <p>子要素の削除に成功した場合に、削除した要素を返します。</p>
	 * @link http://php.net/manual/ja/domnode.removechild.php
	 * @since PHP 5, PHP 7
	 */
	public function removeChild(\DOMNode $oldnode): \DOMNode {}

	/**
	 * 子を置き換える
	 * <p>この関数は、子要素 <code>oldnode</code> を新しいノードに 置き換えます。もし <code>newnode</code> がすでに子要素であった場合は、 それがふたたび追加されることはありません。置き換えに成功すると、 置き換え前のノードが返されます。</p>
	 * @param \DOMNode $newnode <p>新しいノード。対象ドキュメントのメンバ、 すなわち、DOMDocument-&gt;createXXX() メソッドのひとつで作成されたものか DOMDocument::importNode で ドキュメントにインポートされたものである必要があります。</p>
	 * @param \DOMNode $oldnode <p>古いノード。</p>
	 * @return DOMNode <p>古いノード、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domnode.replacechild.php
	 * @since PHP 5, PHP 7
	 */
	public function replaceChild(\DOMNode $newnode, \DOMNode $oldnode): \DOMNode {}

	/**
	 * 指定したオフセットでノードを 2 つに分割する
	 * <p>指定したオフセット <code>offset</code> でノードを 2 つに分割します。分割したノードのツリー内での位置関係は、兄弟となります。</p><p>分割した後は、このノードは <code>offset</code> 位置までの 内容を保持するようになります。元のノードが親ノードを保持している場合、 新しいノードは元のノードの兄弟として元のノードの次の位置に挿入されます。 <code>offset</code> がこのノードの長さに等しい場合は、 新しいノードにはデータが含まれません。</p>
	 * @param int $offset <p>分割する位置を示すオフセット。0 から始まります。</p>
	 * @return DOMText <p>同じ型の新しいノードを返します。<code>offset</code> 以降の内容をデータとして保持します。</p>
	 * @link http://php.net/manual/ja/domtext.splittext.php
	 * @since PHP 5, PHP 7
	 */
	public function splitText(int $offset): \DOMText {}
}

/**
 * <p>XPath 1.0 をサポートします。</p>
 * @link http://php.net/manual/ja/class.domxpath.php
 * @since PHP 5, PHP 7
 */
class DOMXPath {

	/**
	 * @var DOMDocument
	 * @link http://php.net/manual/ja/class.domxpath.php#domxpath.props.document
	 */
	public $document;

	/**
	 * 新しい DOMXPath オブジェクトを作成する
	 * <p>新しい DOMXPath オブジェクトを作成します。</p>
	 * @param \DOMDocument $doc <p>DOMXPath に関連付けられた DOMDocument。</p>
	 * @return self
	 * @link http://php.net/manual/ja/domxpath.construct.php
	 * @since PHP 5, PHP 7
	 */
	public function __construct(\DOMDocument $doc) {}

	/**
	 * 与えられた XPath 式を評価し、可能であれば結果を返す
	 * <p>与えられた XPath 式 <code>expression</code> を実行し、 可能であれば型付けされた結果を返します。</p>
	 * @param string $expression <p>実行する XPath 式。</p>
	 * @param \DOMNode $contextnode <p>相対 XPath クエリを実行する場合に、オプションで基準ノードを指定することが可能です。 デフォルトでは、クエリは root 要素に対する相対パスとなります。</p>
	 * @param bool $registerNodeNS <p>オプションの <code>registerNodeNS</code> で、 コンテキストノードの自動登録を無効にすることができます。</p>
	 * @return mixed <p>可能であれば型付けされた結果、あるいは指定された XPath 式 <code>expression</code> にマッチするすべてのノードを含む DOMNodeList を返します。</p><p><code>expression</code> が不正な形式な場合や <code>contextnode</code> が無効な場合は、 <b>DOMXPath::evaluate()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domxpath.evaluate.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	public function evaluate(string $expression, \DOMNode $contextnode = NULL, bool $registerNodeNS = true) {}

	/**
	 * 与えられた XPath 式を評価する
	 * <p>与えられた XPath 式 <code>expression</code> を評価します。</p>
	 * @param string $expression <p>実行する XPath 式。</p>
	 * @param \DOMNode $contextnode <p>相対 XPath クエリを実行する場合に、オプションで基準ノードを指定することが可能です。 デフォルトでは、クエリは root 要素に対する相対パスとなります。</p>
	 * @param bool $registerNodeNS <p>オプションの <code>registerNodeNS</code> で、 コンテキストノードの自動登録を無効にすることができます。</p>
	 * @return DOMNodeList <p>与えられた XPath 式 <code>expression</code> にマッチする すべてのノードを含む DOMNodeList を返します。 ノードを返さない式の場合は、空の DOMNodeList を返します。</p><p><code>expression</code> が不正な形式な場合や <code>contextnode</code> が無効な場合は、 <b>DOMXPath::query()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domxpath.query.php
	 * @since PHP 5, PHP 7
	 */
	public function query(string $expression, \DOMNode $contextnode = NULL, bool $registerNodeNS = true): \DOMNodeList {}

	/**
	 * DOMXPath オブジェクトの名前空間を登録する
	 * <p>DOMXPath オブジェクトに、 <code>namespaceURI</code> および <code>prefix</code> を登録します。</p>
	 * @param string $prefix <p>プレフィックス。</p>
	 * @param string $namespaceURI <p>名前空間の URI。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/domxpath.registernamespace.php
	 * @since PHP 5, PHP 7
	 */
	public function registerNamespace(string $prefix, string $namespaceURI): bool {}

	/**
	 * PHP の関数を XPath 関数として登録する
	 * <p>このメソッドは、PHP の関数を XPath 式の中で使えるようにします。</p>
	 * @param mixed $restrict <p>このパラメータを使って、特定の関数のみを XPath からコールできるように制限することができます。</p> <p>このパラメータには、文字列 (関数名) あるいは関数名の配列を指定します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/domxpath.registerphpfunctions.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function registerPhpFunctions($restrict = NULL): void {}
}

/**
 * SimpleXMLElement オブジェクトから DOMElement オブジェクトを取得する
 * <p>この関数は、SimpleXML クラスの ノード <code>node</code> を受け取り、それを DOMElement ノードに変換します。新しいオブジェクトは、 DOMElement ノードとして使用可能です。</p>
 * @param \SimpleXMLElement $node <p>SimpleXMLElement ノード。</p>
 * @return DOMElement <p>追加された DOMElement ノード、あるいは 何らかのエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.dom-import-simplexml.php
 * @see simplexml_import_dom()
 * @since PHP 5, PHP 7
 */
function dom_import_simplexml(\SimpleXMLElement $node): \DOMElement {}

/**
 * そのノードが所属できない場所に挿入されました。
 */
define('DOM_HIERARCHY_REQUEST_ERR', 3);

/**
 * インデックスあるいはサイズが負です。または上限を超えています。
 */
define('DOM_INDEX_SIZE_ERR', 1);

/**
 * 別の場所で使用中の属性を追加しようとしました。
 */
define('DOM_INUSE_ATTRIBUTE_ERR', 10);

/**
 * パラメータや操作は基底オブジェクトではサポートされていません。
 */
define('DOM_INVALID_ACCESS_ERR', 15);

/**
 * 名前などで、不正な文字が指定されました。
 */
define('DOM_INVALID_CHARACTER_ERR', 5);

/**
 * 基底オブジェクトの型を変更しようとしました。
 */
define('DOM_INVALID_MODIFICATION_ERR', 13);

/**
 * 現在使用できない、あるいは使用できなくなったオブジェクトを 使用しようとしました。
 */
define('DOM_INVALID_STATE_ERR', 11);

/**
 * 名前空間に存在しないオブジェクトを作成または変更しようとしました。
 */
define('DOM_NAMESPACE_ERR', 14);

/**
 * データをサポートしていないノードでデータが指定されました。
 */
define('DOM_NO_DATA_ALLOWED_ERR', 6);

/**
 * 変更が許可されていないオブジェクトを変更しようとしました。
 */
define('DOM_NO_MODIFICATION_ALLOWED_ERR', 7);

/**
 * 存在しないノードを参照しようとしました。
 */
define('DOM_NOT_FOUND_ERR', 8);

/**
 * 指定した型のオブジェクトや操作は、この実装ではサポートしていません。
 */
define('DOM_NOT_SUPPORTED_ERR', 9);

/**
 * DOM の仕様にないエラーコードです。PHP のエラーを意味します。
 */
define('DOM_PHP_ERR', 0);

/**
 * 不正な文字列が指定されました。
 */
define('DOM_SYNTAX_ERR', 12);

/**
 * insertBefore や removeChild のようなメソッドのコールによってノードの 「部分的な妥当性」が満たされなくなった際にこの例外が発生し、操作は 行われません。
 */
define('DOM_VALIDATION_ERR', 16);

/**
 * ノードが、もともと作成されたのと別のドキュメントで使用されました。
 */
define('DOM_WRONG_DOCUMENT_ERR', 4);

/**
 * 指定したテキストは <b>DOMString</b> 内に収まりません。
 */
define('DOMSTRING_SIZE_ERR', 2);

/**
 * 1
 */
define('XML_ATTRIBUTE_CDATA', 1);

/**
 * 16
 */
define('XML_ATTRIBUTE_DECL_NODE', 16);

/**
 * 5
 */
define('XML_ATTRIBUTE_ENTITY', 6);

/**
 * 9
 */
define('XML_ATTRIBUTE_ENUMERATION', 9);

/**
 * 2
 */
define('XML_ATTRIBUTE_ID', 2);

/**
 * 3
 */
define('XML_ATTRIBUTE_IDREF', 3);

/**
 * 4
 */
define('XML_ATTRIBUTE_IDREFS', 4);

/**
 * 7
 */
define('XML_ATTRIBUTE_NMTOKEN', 7);

/**
 * 8
 */
define('XML_ATTRIBUTE_NMTOKENS', 8);

/**
 * ノードは DOMAttr です。
 */
define('XML_ATTRIBUTE_NODE', 2);

/**
 * 10
 */
define('XML_ATTRIBUTE_NOTATION', 10);

/**
 * ノードは DOMCharacterData です。
 */
define('XML_CDATA_SECTION_NODE', 4);

/**
 * ノードは DOMComment です。
 */
define('XML_COMMENT_NODE', 8);

/**
 * ノードは DOMDocumentFragment です。
 */
define('XML_DOCUMENT_FRAG_NODE', 11);

/**
 * ノードは DOMDocument です。
 */
define('XML_DOCUMENT_NODE', 9);

/**
 * ノードは DOMDocumentType です。
 */
define('XML_DOCUMENT_TYPE_NODE', 10);

/**
 * 14
 */
define('XML_DTD_NODE', 14);

/**
 * 15
 */
define('XML_ELEMENT_DECL_NODE', 15);

/**
 * ノードは DOMElement です。
 */
define('XML_ELEMENT_NODE', 1);

/**
 * 17
 */
define('XML_ENTITY_DECL_NODE', 17);

/**
 * ノードは DOMEntity です。
 */
define('XML_ENTITY_NODE', 6);

/**
 * ノードは DOMEntityReference です。
 */
define('XML_ENTITY_REF_NODE', 5);

/**
 * 13
 */
define('XML_HTML_DOCUMENT_NODE', 13);

/**
 * 18
 */
define('XML_NAMESPACE_DECL_NODE', 18);

/**
 * ノードは DOMNotation です。
 */
define('XML_NOTATION_NODE', 12);

/**
 * ノードは DOMProcessingInstruction です。
 */
define('XML_PI_NODE', 7);

/**
 * ノードは DOMText です。
 */
define('XML_TEXT_NODE', 3);

