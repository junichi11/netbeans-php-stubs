<?php



/**
 * <p>XML ドキュメントの要素をあらわします。</p>
 * @link http://php.net/manual/ja/class.simplexmlelement.php
 * @since PHP 5, PHP 7
 */
class SimpleXMLElement implements \Traversable {

	/**
	 * 新しい SimpleXMLElement オブジェクトを作成する
	 * <p>新しい SimpleXMLElement オブジェクトを作成します。</p>
	 * @param string $data <p>整形式 XML 文字列。 もし <code>data_is_url</code> が <b><code>TRUE</code></b> の場合には、XML ドキュメントへのパスあるいは URL。</p>
	 * @param int $options <p>オプションで、追加の Libxml パラメータを指定するために使用します。</p>  <p><b>注意</b>:</p> <p>深くネストされた XML や巨大なテキストノードを処理する際には <b><code>LIBXML_PARSEHUGE</code></b> を指定することになるでしょう。</p>
	 * @param bool $data_is_url <p>デフォルトでは <code>data_is_url</code> は <b><code>FALSE</code></b> です。 <code>data</code> が、文字列データではなく XML ドキュメントへのパスあるいは URL である場合に <b><code>TRUE</code></b> を使用します。</p>
	 * @param string $ns <p>名前空間プレフィックスあるいは URI。</p>
	 * @param bool $is_prefix <p><code>ns</code> がプレフィックスの場合は <b><code>TRUE</code></b>、 URI の場合は <b><code>FALSE</code></b>。デフォルトは <b><code>FALSE</code></b>。</p>
	 * @return self <p><code>data</code> を表す <code>SimpleXMLElement</code> オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.construct.php
	 * @see simplexml_load_string(), simplexml_load_file(), libxml_use_internal_errors()
	 * @since PHP 5, PHP 7
	 */
	final public function __construct(string $data, int $options = 0, bool $data_is_url = false, string $ns = "", bool $is_prefix = false) {}

	/**
	 * Returns the string content
	 * <p>Returns text content that is directly in this element. Does not return text content that is inside this element's children.</p>
	 * @return string <p>Returns the string content on success or an empty string on failure.</p>
	 * @link http://php.net/manual/ja/simplexmlelement.tostring.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function __toString(): string {}

	/**
	 * SimpleXML 要素に属性を追加する
	 * <p>SimpleXML 要素に属性を追加します。</p>
	 * @param string $name <p>追加する属性の名前。</p>
	 * @param string $value <p>属性の値。</p>
	 * @param string $namespace <p>指定されている場合は、その属性が所属する名前空間。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.addattribute.php
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	public function addAttribute(string $name, string $value = NULL, string $namespace = NULL): void {}

	/**
	 * XML ノードに子要素を追加する
	 * <p>ノードに子要素を追加し、子要素の SimpleXMLElement を返します。</p>
	 * @param string $name <p>追加する子要素の名前。</p>
	 * @param string $value <p>指定されている場合は、子要素の値。</p>
	 * @param string $namespace <p>指定されている場合は、その子要素が所属する名前空間。</p>
	 * @return SimpleXMLElement <p><i>addChild</i> メソッドは、 XML ノードに追加した子要素を表す <code>SimpleXMLElement</code> オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.addchild.php
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	public function addChild(string $name, string $value = NULL, string $namespace = NULL): \SimpleXMLElement {}

	/**
	 * SimpleXML 要素に基づき整形式の XML 文字列を返す
	 * <p><i>asXML</i> メソッドは、親オブジェクトのデータを XML version 1.0 形式にフォーマットします。</p>
	 * @param string $filename <p>指定した場合、データを返すかわりにファイルにデータを書き込みます。</p>
	 * @return mixed <p><code>filename</code> が指定されていない場合、この関数は 成功時に <code>string</code> 、エラー時に <b><code>FALSE</code></b> を返します。 パラメータが指定されていた場合は、ファイルが正常に書き込めたときに <b><code>TRUE</code></b> 、そうでないときに <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.asxml.php
	 * @since PHP 5, PHP 7
	 */
	public function asXML(string $filename = NULL) {}

	/**
	 * 要素の属性を定義する
	 * <p>この関数は、XMLタグの中で定義された属性とその値を取得します。</p><p><b>注意</b>:  SimpleXML では、ほとんどのメソッドに反復処理を追加するための手順が定義されています。 これらは、<code>var_dump()</code> やオブジェクトを評価する他の手段で 見ることはできません。</p>
	 * @param string $ns <p>オプションで指定する、取得した属性の名前空間。</p>
	 * @param bool $is_prefix <p>デフォルトは <b><code>FALSE</code></b>。</p>
	 * @return SimpleXMLElement <p>SimpleXMLElement オブジェクトを返します。 これを反復処理すれば、そのタグの属性を順に処理することができます。</p><p>タグではなく属性を指している SimpleXMLElement に対してコールした場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.attributes.php
	 * @since PHP 5, PHP 7
	 */
	public function attributes(string $ns = NULL, bool $is_prefix = false): \SimpleXMLElement {}

	/**
	 * 指定したノードの子ノードを見付ける
	 * <p>このメソッドは、指定した要素の子を見つけます。 結果は、通常の反復子により取得できます。</p><p><b>注意</b>:  SimpleXML では、ほとんどのメソッドに反復処理を追加するための手順が定義されています。 これらは、<code>var_dump()</code> やオブジェクトを評価する他の手段で 見ることはできません。</p>
	 * @param string $ns <p>XML 名前空間。</p>
	 * @param bool $is_prefix <p><code>is_prefix</code> が <b><code>TRUE</code></b> の場合は <code>ns</code> をプレフィックスとして扱います。<b><code>FALSE</code></b> の場合は <code>ns</code> を名前空間 URL として扱います。</p>
	 * @return SimpleXMLElement <p>ノードが子を持つかどうかにかかわらず SimpleXMLElement 要素を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.children.php
	 * @see count()
	 * @since PHP 5, PHP 7
	 */
	public function children(string $ns = NULL, bool $is_prefix = false): \SimpleXMLElement {}

	/**
	 * 子要素を数える
	 * <p>このメソッドは、子要素を数えます。</p>
	 * @return int <p>子要素の数を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.count.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function count(): int {}

	/**
	 * ドキュメントで宣言されている名前空間を返す
	 * <p>ドキュメントで宣言されている名前空間を返します。</p>
	 * @param bool $recursive <p>指定されている場合は、親ノードおよび子ノードで宣言されている全ての名前空間を返します。 されていない場合は、ルートノードで宣言されている名前空間のみを返します。</p>
	 * @param bool $from_root <p>XML 文書のルートノードからでなく、子ノードの配下の名前空間を再帰的にチェックできるようにします。</p>
	 * @return array <p><i>getDocNamespaces</i> メソッドは、 名前空間名および関連付けられた URI を配列で返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.getdocnamespaces.php
	 * @since PHP 5 >= 5.1.2, PHP 7
	 */
	public function getDocNamespaces(bool $recursive = false, bool $from_root = true): array {}

	/**
	 * XML 要素の名前を取得する
	 * <p>XML 要素の名前を取得します。</p>
	 * @return string <p><i>getName</i> メソッドは、 SimpleXMLElement オブジェクトが参照している XML タグの名前を <code>string</code> で返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.getname.php
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	public function getName(): string {}

	/**
	 * ドキュメントで使用している名前空間を返す
	 * <p>ドキュメントで使用している名前空間を返します。</p>
	 * @param bool $recursive <p>指定されている場合は、親ノードおよび子ノードで使用している全ての名前空間を返します。 されていない場合は、ルートノードで使用している名前空間のみを返します。</p>
	 * @return array <p><i>getNamespaces</i> メソッドは、 名前空間名および関連付けられた URI を配列で返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.getnamespaces.php
	 * @since PHP 5 >= 5.1.2, PHP 7
	 */
	public function getNamespaces(bool $recursive = false): array {}

	/**
	 * 次の XPath クエリ用の prefix/ns コンテキストを作成する
	 * <p>次の XPath クエリ用の prefix/ns コンテキストを作成します。特にこれが有用なのは、 XML ドキュメントの提供者が名前空間プレフィックスを変更したような場合です。 <i>registerXPathNamespace</i> はプレフィックスを作成して名前空間に関連付け、 そのプレフィックスで名前空間のノードにアクセスできるようにします。 提供者側がプレフィックスを変更したとしても、コードを書き換える必要はありません。</p>
	 * @param string $prefix <p><code>ns</code> で指定した名前空間への XPath クエリで使用する、 名前空間プレフィックス。</p>
	 * @param string $ns <p>XPath クエリで使用する名前空間。 これは XML ドキュメントで使用している名前空間と一致していなければなりません。 一致していない場合、<code>prefix</code> を使用した XPath クエリは何も結果を返しません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.registerxpathnamespace.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	public function registerXPathNamespace(string $prefix, string $ns): bool {}

	/**
	 * XML データに Xpath クエリを実行する
	 * <p><i>xpath</i>メソッドは、 XPath <code>path</code>にマッチする SimpleXML ノードを検索します。</p>
	 * @param string $path <p>XPath パス。</p>
	 * @return array <p>SimpleXMLElement オブジェクトの配列を返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.xpath.php
	 * @since PHP 5, PHP 7
	 */
	public function xpath(string $path): array {}
}

/**
 * <p>SimpleXMLIterator は、SimpleXMLElement オブジェクトのすべてのノードに対する再帰的な反復処理を提供します。</p>
 * @link http://php.net/manual/ja/class.simplexmliterator.php
 * @since PHP 5 >= 5.1.3, PHP 7
 */
class SimpleXMLIterator extends \SimpleXMLElement implements \RecursiveIterator, \Countable {

	/**
	 * 新しい SimpleXMLElement オブジェクトを作成する
	 * <p>新しい SimpleXMLElement オブジェクトを作成します。</p>
	 * @param string $data <p>整形式 XML 文字列。 もし <code>data_is_url</code> が <b><code>TRUE</code></b> の場合には、XML ドキュメントへのパスあるいは URL。</p>
	 * @param int $options <p>オプションで、追加の Libxml パラメータを指定するために使用します。</p>  <p><b>注意</b>:</p> <p>深くネストされた XML や巨大なテキストノードを処理する際には <b><code>LIBXML_PARSEHUGE</code></b> を指定することになるでしょう。</p>
	 * @param bool $data_is_url <p>デフォルトでは <code>data_is_url</code> は <b><code>FALSE</code></b> です。 <code>data</code> が、文字列データではなく XML ドキュメントへのパスあるいは URL である場合に <b><code>TRUE</code></b> を使用します。</p>
	 * @param string $ns <p>名前空間プレフィックスあるいは URI。</p>
	 * @param bool $is_prefix <p><code>ns</code> がプレフィックスの場合は <b><code>TRUE</code></b>、 URI の場合は <b><code>FALSE</code></b>。デフォルトは <b><code>FALSE</code></b>。</p>
	 * @return self <p><code>data</code> を表す <code>SimpleXMLElement</code> オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.construct.php
	 * @see simplexml_load_string(), simplexml_load_file(), libxml_use_internal_errors()
	 * @since PHP 5, PHP 7
	 */
	final public function __construct(string $data, int $options = 0, bool $data_is_url = false, string $ns = "", bool $is_prefix = false) {}

	/**
	 * Returns the string content
	 * <p>Returns text content that is directly in this element. Does not return text content that is inside this element's children.</p>
	 * @return string <p>Returns the string content on success or an empty string on failure.</p>
	 * @link http://php.net/manual/ja/simplexmlelement.tostring.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function __toString(): string {}

	/**
	 * SimpleXML 要素に属性を追加する
	 * <p>SimpleXML 要素に属性を追加します。</p>
	 * @param string $name <p>追加する属性の名前。</p>
	 * @param string $value <p>属性の値。</p>
	 * @param string $namespace <p>指定されている場合は、その属性が所属する名前空間。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.addattribute.php
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	public function addAttribute(string $name, string $value = NULL, string $namespace = NULL): void {}

	/**
	 * XML ノードに子要素を追加する
	 * <p>ノードに子要素を追加し、子要素の SimpleXMLElement を返します。</p>
	 * @param string $name <p>追加する子要素の名前。</p>
	 * @param string $value <p>指定されている場合は、子要素の値。</p>
	 * @param string $namespace <p>指定されている場合は、その子要素が所属する名前空間。</p>
	 * @return SimpleXMLElement <p><i>addChild</i> メソッドは、 XML ノードに追加した子要素を表す <code>SimpleXMLElement</code> オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.addchild.php
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	public function addChild(string $name, string $value = NULL, string $namespace = NULL): \SimpleXMLElement {}

	/**
	 * SimpleXML 要素に基づき整形式の XML 文字列を返す
	 * <p><i>asXML</i> メソッドは、親オブジェクトのデータを XML version 1.0 形式にフォーマットします。</p>
	 * @param string $filename <p>指定した場合、データを返すかわりにファイルにデータを書き込みます。</p>
	 * @return mixed <p><code>filename</code> が指定されていない場合、この関数は 成功時に <code>string</code> 、エラー時に <b><code>FALSE</code></b> を返します。 パラメータが指定されていた場合は、ファイルが正常に書き込めたときに <b><code>TRUE</code></b> 、そうでないときに <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.asxml.php
	 * @since PHP 5, PHP 7
	 */
	public function asXML(string $filename = NULL) {}

	/**
	 * 要素の属性を定義する
	 * <p>この関数は、XMLタグの中で定義された属性とその値を取得します。</p><p><b>注意</b>:  SimpleXML では、ほとんどのメソッドに反復処理を追加するための手順が定義されています。 これらは、<code>var_dump()</code> やオブジェクトを評価する他の手段で 見ることはできません。</p>
	 * @param string $ns <p>オプションで指定する、取得した属性の名前空間。</p>
	 * @param bool $is_prefix <p>デフォルトは <b><code>FALSE</code></b>。</p>
	 * @return SimpleXMLElement <p>SimpleXMLElement オブジェクトを返します。 これを反復処理すれば、そのタグの属性を順に処理することができます。</p><p>タグではなく属性を指している SimpleXMLElement に対してコールした場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.attributes.php
	 * @since PHP 5, PHP 7
	 */
	public function attributes(string $ns = NULL, bool $is_prefix = false): \SimpleXMLElement {}

	/**
	 * 指定したノードの子ノードを見付ける
	 * <p>このメソッドは、指定した要素の子を見つけます。 結果は、通常の反復子により取得できます。</p><p><b>注意</b>:  SimpleXML では、ほとんどのメソッドに反復処理を追加するための手順が定義されています。 これらは、<code>var_dump()</code> やオブジェクトを評価する他の手段で 見ることはできません。</p>
	 * @param string $ns <p>XML 名前空間。</p>
	 * @param bool $is_prefix <p><code>is_prefix</code> が <b><code>TRUE</code></b> の場合は <code>ns</code> をプレフィックスとして扱います。<b><code>FALSE</code></b> の場合は <code>ns</code> を名前空間 URL として扱います。</p>
	 * @return SimpleXMLElement <p>ノードが子を持つかどうかにかかわらず SimpleXMLElement 要素を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.children.php
	 * @see count()
	 * @since PHP 5, PHP 7
	 */
	public function children(string $ns = NULL, bool $is_prefix = false): \SimpleXMLElement {}

	/**
	 * 子要素を数える
	 * <p>このメソッドは、子要素を数えます。</p>
	 * @return int <p>子要素の数を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.count.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	public function count(): int {}

	/**
	 * 現在の SimpleXML エントリを返す
	 * <p>このメソッドは、現在の要素の SimpleXMLIterator オブジェクトあるいは <b><code>NULL</code></b> を返します。</p>
	 * @return mixed <p>現在の要素を SimpleXMLIterator オブジェクトで返します。 失敗した場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmliterator.current.php
	 * @since PHP 5, PHP 7
	 */
	public function current() {}

	/**
	 * 現在の要素の子要素を返す
	 * <p>このメソッドは、現在の SimpleXMLIterator 要素の子要素を含む SimpleXMLIterator オブジェクトを返します。</p>
	 * @return SimpleXMLIterator <p>現在の要素の子要素を含む SimpleXMLIterator オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/simplexmliterator.getchildren.php
	 * @since PHP 5, PHP 7
	 */
	public function getChildren(): \SimpleXMLIterator {}

	/**
	 * ドキュメントで宣言されている名前空間を返す
	 * <p>ドキュメントで宣言されている名前空間を返します。</p>
	 * @param bool $recursive <p>指定されている場合は、親ノードおよび子ノードで宣言されている全ての名前空間を返します。 されていない場合は、ルートノードで宣言されている名前空間のみを返します。</p>
	 * @param bool $from_root <p>XML 文書のルートノードからでなく、子ノードの配下の名前空間を再帰的にチェックできるようにします。</p>
	 * @return array <p><i>getDocNamespaces</i> メソッドは、 名前空間名および関連付けられた URI を配列で返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.getdocnamespaces.php
	 * @since PHP 5 >= 5.1.2, PHP 7
	 */
	public function getDocNamespaces(bool $recursive = false, bool $from_root = true): array {}

	/**
	 * XML 要素の名前を取得する
	 * <p>XML 要素の名前を取得します。</p>
	 * @return string <p><i>getName</i> メソッドは、 SimpleXMLElement オブジェクトが参照している XML タグの名前を <code>string</code> で返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.getname.php
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	public function getName(): string {}

	/**
	 * ドキュメントで使用している名前空間を返す
	 * <p>ドキュメントで使用している名前空間を返します。</p>
	 * @param bool $recursive <p>指定されている場合は、親ノードおよび子ノードで使用している全ての名前空間を返します。 されていない場合は、ルートノードで使用している名前空間のみを返します。</p>
	 * @return array <p><i>getNamespaces</i> メソッドは、 名前空間名および関連付けられた URI を配列で返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.getnamespaces.php
	 * @since PHP 5 >= 5.1.2, PHP 7
	 */
	public function getNamespaces(bool $recursive = false): array {}

	/**
	 * 現在の要素が子要素を持つかどうかを調べる
	 * <p>このメソッドは、現在の SimpleXMLIterator 要素が子要素を持つかどうかを調べます。</p>
	 * @return bool <p>現在の要素が子要素を持つ場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmliterator.haschildren.php
	 * @since PHP 5, PHP 7
	 */
	public function hasChildren(): bool {}

	/**
	 * 現在のキーを返す
	 * <p>このメソッドは、現在の要素の XML タグ名を取得します。</p>
	 * @return mixed <p>現在の SimpleXMLIterator オブジェクトが参照する要素の XML タグ名、あるいは <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmliterator.key.php
	 * @since PHP 5, PHP 7
	 */
	public function key() {}

	/**
	 * 次の要素に移動する
	 * <p>このメソッドは、SimpleXMLIterator を次の要素に移動します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/simplexmliterator.next.php
	 * @since PHP 5, PHP 7
	 */
	public function next(): void {}

	/**
	 * 次の XPath クエリ用の prefix/ns コンテキストを作成する
	 * <p>次の XPath クエリ用の prefix/ns コンテキストを作成します。特にこれが有用なのは、 XML ドキュメントの提供者が名前空間プレフィックスを変更したような場合です。 <i>registerXPathNamespace</i> はプレフィックスを作成して名前空間に関連付け、 そのプレフィックスで名前空間のノードにアクセスできるようにします。 提供者側がプレフィックスを変更したとしても、コードを書き換える必要はありません。</p>
	 * @param string $prefix <p><code>ns</code> で指定した名前空間への XPath クエリで使用する、 名前空間プレフィックス。</p>
	 * @param string $ns <p>XPath クエリで使用する名前空間。 これは XML ドキュメントで使用している名前空間と一致していなければなりません。 一致していない場合、<code>prefix</code> を使用した XPath クエリは何も結果を返しません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.registerxpathnamespace.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	public function registerXPathNamespace(string $prefix, string $ns): bool {}

	/**
	 * 最初の要素に巻き戻す
	 * <p>このメソッドは、SimpleXMLIterator を最初の要素に巻き戻します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/simplexmliterator.rewind.php
	 * @since PHP 5, PHP 7
	 */
	public function rewind(): void {}

	/**
	 * 現在の要素が有効かどうかを調べる
	 * <p>このメソッドは、現在の要素が <code>SimpleXMLIterator::rewind()</code> あるいは <code>SimpleXMLIterator::next()</code> をコールした後で有効かどうかを調べます。</p>
	 * @return bool <p>現在の要素が有効な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmliterator.valid.php
	 * @since PHP 5, PHP 7
	 */
	public function valid(): bool {}

	/**
	 * XML データに Xpath クエリを実行する
	 * <p><i>xpath</i>メソッドは、 XPath <code>path</code>にマッチする SimpleXML ノードを検索します。</p>
	 * @param string $path <p>XPath パス。</p>
	 * @return array <p>SimpleXMLElement オブジェクトの配列を返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/simplexmlelement.xpath.php
	 * @since PHP 5, PHP 7
	 */
	public function xpath(string $path): array {}
}

/**
 * DOM ノードから SimpleXMLElement オブジェクトを取得する
 * <p>この関数は、DOM ドキュメントのノードを引数とし、 SimpleXML ノードを作成します。この新しいオブジェクトは、 この後、通常の SimpleXML 要素として使用できます。</p>
 * @param \DOMNode $node <p>DOM 要素ノード。</p>
 * @param string $class_name <p>このオプションパラメータを使用すると、 <b>simplexml_import_dom()</b> は指定したクラスのオブジェクトを返します。このクラスは <code>SimpleXMLElement</code> を継承していなければなりません。</p>
 * @return SimpleXMLElement <p><code>SimpleXMLElement</code> を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.simplexml-import-dom.php
 * @see dom_import_simplexml()
 * @since PHP 5, PHP 7
 */
function simplexml_import_dom(\DOMNode $node, string $class_name = "SimpleXMLElement"): \SimpleXMLElement {}

/**
 * XMLファイルをパースし、オブジェクトに代入する
 * <p>指定したファイルの中の整形式 XML ドキュメントをオブジェクトに変換します。</p>
 * @param string $filename <p>XML ファイルへのパス。</p>  <p><b>注意</b>:</p> <p>Libxml 2 は URI をエスケープしませんので、例えば URI パラメータ <i>a</i> に <i>b&amp;c</i> を渡したい場合、 <i>simplexml_load_file(rawurlencode('http://example.com/&#63;a=' . urlencode('b&amp;c')))</i> をしてコールする必要があります。PHP 5.1.0 以降では、これをする必要は ありません。PHP が自動的に行います。</p>
 * @param string $class_name <p><b>simplexml_load_file()</b> が指定されたクラスのオブジェクトを返すようにするために、 このオプションのパラメータを使用します。 このクラスは、<code>SimpleXMLElement</code> クラスを継承していなければなりません。</p>
 * @param int $options <p>PHP 5.1.0 と Libxml 2.6.0 から、追加の Libxml パラメータ を指定するために <code>options</code> を使用することもできます。</p>
 * @param string $ns <p>名前空間プレフィックスあるいは URI。</p>
 * @param bool $is_prefix <p><code>ns</code> がプレフィックスである場合に <b><code>TRUE</code></b>、 URI である場合に <b><code>FALSE</code></b>。デフォルトは <b><code>FALSE</code></b> です。</p>
 * @return SimpleXMLElement <p><code>SimpleXMLElement</code> クラスのオブジェクトを返します。 XML ドキュメント内のデータをプロパティに含みます。 失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.simplexml-load-file.php
 * @see simplexml_load_string(), libxml_use_internal_errors()
 * @since PHP 5, PHP 7
 */
function simplexml_load_file(string $filename, string $class_name = "SimpleXMLElement", int $options = 0, string $ns = "", bool $is_prefix = false): \SimpleXMLElement {}

/**
 * XML 文字列をオブジェクトに代入する
 * <p>整形式 XML 文字列をオブジェクトとして返します。</p>
 * @param string $data <p>整形式 XML 文字列。</p>
 * @param string $class_name <p>このオプションのパラメータを使用して、 <code>simplexml_load_file()</code> が指定されたクラスのオブジェクトを返すようにします。 このクラスは、<code>SimpleXMLElement</code> クラスを継承していなければなりません。</p>
 * @param int $options <p>PHP 5.1.0 と Libxml 2.6.0 から、追加の Libxml パラメータ を指定するために <code>options</code> を使用することもできます。</p>
 * @param string $ns <p>名前空間プレフィックスあるいは URI。</p>
 * @param bool $is_prefix <p><code>ns</code> がプレフィックスである場合に <b><code>TRUE</code></b>、 URI である場合に <b><code>FALSE</code></b>。デフォルトは <b><code>FALSE</code></b> です。</p>
 * @return SimpleXMLElement <p><code>SimpleXMLElement</code> クラスのオブジェクトを返します。 XML ドキュメント内のデータをプロパティに含みます。 失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.simplexml-load-string.php
 * @see simplexml_load_file(), libxml_use_internal_errors()
 * @since PHP 5, PHP 7
 */
function simplexml_load_string(string $data, string $class_name = "SimpleXMLElement", int $options = 0, string $ns = NULL, bool $is_prefix = false): \SimpleXMLElement {}

