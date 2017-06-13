<?php

// Start of SimpleXML v.7.1.5

/**
 * XML ドキュメントの要素をあらわします。
 * @link http://php.net/manual/ja/class.simplexmlelement.php
 */
class SimpleXMLElement implements Traversable {

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 新しい SimpleXMLElement オブジェクトを作成する
	 * @link http://php.net/manual/ja/simplexmlelement.construct.php
	 * @param string $data <p>
	 * 整形式 XML 文字列。
	 * もし <i>data_is_url</i> が <b>TRUE</b>
	 * の場合には、XML ドキュメントへのパスあるいは URL。
	 * </p>
	 * @param int $options [optional] <p>
	 * オプションで、追加の
	 * Libxml パラメータを指定するために使用します。
	 * </p>
	 * <p>
	 * 深くネストされた XML や巨大なテキストノードを処理する際には
	 * <b>LIBXML_PARSEHUGE</b>
	 * を指定することになるでしょう。
	 * </p>
	 * @param bool $data_is_url [optional] <p>
	 * デフォルトでは <i>data_is_url</i> は <b>FALSE</b> です。
	 * <i>data</i> が、文字列データではなく
	 * XML ドキュメントへのパスあるいは URL である場合に
	 * <b>TRUE</b> を使用します。
	 * </p>
	 * @param string $ns [optional] <p>
	 * 名前空間プレフィックスあるいは URI。
	 * </p>
	 * @param bool $is_prefix [optional] <p>
	 * <i>ns</i> がプレフィックスの場合は <b>TRUE</b>、
	 * URI の場合は <b>FALSE</b>。デフォルトは <b>FALSE</b>。
	 * </p>
	 */
	final public function __construct(string $data, int $options = 0, bool $data_is_url = false, string $ns = "", bool $is_prefix = false) {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SimpleXML 要素に基づき整形式の XML 文字列を返す
	 * @link http://php.net/manual/ja/simplexmlelement.asxml.php
	 * @param string $filename [optional] <p>
	 * 指定した場合、データを返すかわりにファイルにデータを書き込みます。
	 * </p>
	 * @return mixed <i>filename</i> が指定されていない場合、この関数は
	 * 成功時に string 、エラー時に <b>FALSE</b> を返します。
	 * パラメータが指定されていた場合は、ファイルが正常に書き込めたときに
	 * <b>TRUE</b> 、そうでないときに <b>FALSE</b> を返します。
	 */
	public function asXML(string $filename = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * <b>SimpleXMLElement::asXML</b> のエイリアス
	 * @link http://php.net/manual/ja/simplexmlelement.savexml.php
	 * @param $filename [optional]
	 */
	public function saveXML($filename) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * XML データに Xpath クエリを実行する
	 * @link http://php.net/manual/ja/simplexmlelement.xpath.php
	 * @param string $path <p>
	 * XPath パス。
	 * </p>
	 * @return array SimpleXMLElement オブジェクトの配列を返します。
	 * エラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function xpath(string $path): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 次の XPath クエリ用の prefix/ns コンテキストを作成する
	 * @link http://php.net/manual/ja/simplexmlelement.registerxpathnamespace.php
	 * @param string $prefix <p>
	 * <i>ns</i> で指定した名前空間への XPath クエリで使用する、
	 * 名前空間プレフィックス。
	 * </p>
	 * @param string $ns <p>
	 * XPath クエリで使用する名前空間。
	 * これは XML ドキュメントで使用している名前空間と一致していなければなりません。
	 * 一致していない場合、<i>prefix</i>
	 * を使用した XPath クエリは何も結果を返しません。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function registerXPathNamespace(string $prefix, string $ns): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 要素の属性を定義する
	 * @link http://php.net/manual/ja/simplexmlelement.attributes.php
	 * @param string $ns [optional] <p>
	 * オプションで指定する、取得した属性の名前空間。
	 * </p>
	 * @param bool $is_prefix [optional] <p>
	 * デフォルトは <b>FALSE</b>。
	 * </p>
	 * @return SimpleXMLElement <b>SimpleXMLElement</b> オブジェクトを返します。
	 * これを反復処理すれば、そのタグの属性を順に処理することができます。
	 * </p>
	 * <p>
	 * タグではなく属性を指している <b>SimpleXMLElement</b>
	 * に対してコールした場合は <b>NULL</b> を返します。
	 */
	public function attributes(string $ns = null, bool $is_prefix = false): SimpleXMLElement {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 指定したノードの子ノードを見付ける
	 * @link http://php.net/manual/ja/simplexmlelement.children.php
	 * @param string $ns [optional] <p>
	 * XML 名前空間。
	 * </p>
	 * @param bool $is_prefix [optional] <p>
	 * <i>is_prefix</i> が <b>TRUE</b> の場合は
	 * <i>ns</i> をプレフィックスとして扱います。<b>FALSE</b> の場合は
	 * <i>ns</i> を名前空間 URL として扱います。
	 * </p>
	 * @return SimpleXMLElement ノードが子を持つかどうかにかかわらず
	 * <b>SimpleXMLElement</b> 要素を返します。
	 */
	public function children(string $ns = null, bool $is_prefix = false): SimpleXMLElement {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ドキュメントで使用している名前空間を返す
	 * @link http://php.net/manual/ja/simplexmlelement.getnamespaces.php
	 * @param bool $recursive [optional] <p>
	 * 指定されている場合は、親ノードおよび子ノードで使用している全ての名前空間を返します。
	 * されていない場合は、ルートノードで使用している名前空間のみを返します。
	 * </p>
	 * @return array getNamespaces メソッドは、
	 * 名前空間名および関連付けられた URI を配列で返します。
	 */
	public function getNamespaces(bool $recursive = false): array {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ドキュメントで宣言されている名前空間を返す
	 * @link http://php.net/manual/ja/simplexmlelement.getdocnamespaces.php
	 * @param bool $recursive [optional] <p>
	 * 指定されている場合は、親ノードおよび子ノードで宣言されている全ての名前空間を返します。
	 * されていない場合は、ルートノードで宣言されている名前空間のみを返します。
	 * </p>
	 * @param bool $from_root [optional] <p>
	 * XML 文書のルートノードからでなく、子ノードの配下の名前空間を再帰的にチェックできるようにします。
	 * </p>
	 * @return array getDocNamespaces メソッドは、
	 * 名前空間名および関連付けられた URI を配列で返します。
	 */
	public function getDocNamespaces(bool $recursive = false, bool $from_root = true): array {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
	 * XML 要素の名前を取得する
	 * @link http://php.net/manual/ja/simplexmlelement.getname.php
	 * @return string getName メソッドは、
	 * SimpleXMLElement オブジェクトが参照している XML タグの名前を
	 * string で返します。
	 */
	public function getName(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
	 * XML ノードに子要素を追加する
	 * @link http://php.net/manual/ja/simplexmlelement.addchild.php
	 * @param string $name <p>
	 * 追加する子要素の名前。
	 * </p>
	 * @param string $value [optional] <p>
	 * 指定されている場合は、子要素の値。
	 * </p>
	 * @param string $namespace [optional] <p>
	 * 指定されている場合は、その子要素が所属する名前空間。
	 * </p>
	 * @return SimpleXMLElement addChild メソッドは、
	 * XML ノードに追加した子要素を表す
	 * SimpleXMLElement オブジェクトを返します。
	 */
	public function addChild(string $name, string $value = null, string $namespace = null): SimpleXMLElement {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
	 * SimpleXML 要素に属性を追加する
	 * @link http://php.net/manual/ja/simplexmlelement.addattribute.php
	 * @param string $name <p>
	 * 追加する属性の名前。
	 * </p>
	 * @param string $value [optional] <p>
	 * 属性の値。
	 * </p>
	 * @param string $namespace [optional] <p>
	 * 指定されている場合は、その属性が所属する名前空間。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function addAttribute(string $name, string $value = null, string $namespace = null): void {}

	public function __toString() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 子要素を数える
	 * @link http://php.net/manual/ja/simplexmlelement.count.php
	 * @return int 子要素の数を返します。
	 */
	public function count(): int {}

}

/**
 * SimpleXMLIterator は、<b>SimpleXMLElement</b> オブジェクトのすべてのノードに対する再帰的な反復処理を提供します。
 * @link http://php.net/manual/ja/class.simplexmliterator.php
 */
class SimpleXMLIterator extends SimpleXMLElement implements Traversable, RecursiveIterator, Iterator, Countable {

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 最初の要素に巻き戻す
	 * @link http://php.net/manual/ja/simplexmliterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素が有効かどうかを調べる
	 * @link http://php.net/manual/ja/simplexmliterator.valid.php
	 * @return bool 現在の要素が有効な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
	 */
	public function valid(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の SimpleXML エントリを返す
	 * @link http://php.net/manual/ja/simplexmliterator.current.php
	 * @return mixed 現在の要素を <b>SimpleXMLIterator</b> オブジェクトで返します。
	 * 失敗した場合は <b>NULL</b> を返します。
	 */
	public function current() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在のキーを返す
	 * @link http://php.net/manual/ja/simplexmliterator.key.php
	 * @return mixed 現在の <b>SimpleXMLIterator</b> オブジェクトが参照する要素の XML
	 * タグ名、あるいは <b>FALSE</b> を返します。
	 */
	public function key() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 次の要素に移動する
	 * @link http://php.net/manual/ja/simplexmliterator.next.php
	 * @return void 値を返しません。
	 */
	public function next(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素が子要素を持つかどうかを調べる
	 * @link http://php.net/manual/ja/simplexmliterator.haschildren.php
	 * @return bool 現在の要素が子要素を持つ場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 現在の要素の子要素を返す
	 * @link http://php.net/manual/ja/simplexmliterator.getchildren.php
	 * @return SimpleXMLIterator 現在の要素の子要素を含む <b>SimpleXMLIterator</b>
	 * オブジェクトを返します。
	 */
	public function getChildren(): SimpleXMLIterator {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 新しい SimpleXMLElement オブジェクトを作成する
	 * @link http://php.net/manual/ja/simplexmlelement.construct.php
	 * @param string $data <p>
	 * 整形式 XML 文字列。
	 * もし <i>data_is_url</i> が <b>TRUE</b>
	 * の場合には、XML ドキュメントへのパスあるいは URL。
	 * </p>
	 * @param int $options [optional] <p>
	 * オプションで、追加の
	 * Libxml パラメータを指定するために使用します。
	 * </p>
	 * <p>
	 * 深くネストされた XML や巨大なテキストノードを処理する際には
	 * <b>LIBXML_PARSEHUGE</b>
	 * を指定することになるでしょう。
	 * </p>
	 * @param bool $data_is_url [optional] <p>
	 * デフォルトでは <i>data_is_url</i> は <b>FALSE</b> です。
	 * <i>data</i> が、文字列データではなく
	 * XML ドキュメントへのパスあるいは URL である場合に
	 * <b>TRUE</b> を使用します。
	 * </p>
	 * @param string $ns [optional] <p>
	 * 名前空間プレフィックスあるいは URI。
	 * </p>
	 * @param bool $is_prefix [optional] <p>
	 * <i>ns</i> がプレフィックスの場合は <b>TRUE</b>、
	 * URI の場合は <b>FALSE</b>。デフォルトは <b>FALSE</b>。
	 * </p>
	 */
	final public function __construct(string $data, int $options = 0, bool $data_is_url = false, string $ns = "", bool $is_prefix = false) {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * SimpleXML 要素に基づき整形式の XML 文字列を返す
	 * @link http://php.net/manual/ja/simplexmlelement.asxml.php
	 * @param string $filename [optional] <p>
	 * 指定した場合、データを返すかわりにファイルにデータを書き込みます。
	 * </p>
	 * @return mixed <i>filename</i> が指定されていない場合、この関数は
	 * 成功時に string 、エラー時に <b>FALSE</b> を返します。
	 * パラメータが指定されていた場合は、ファイルが正常に書き込めたときに
	 * <b>TRUE</b> 、そうでないときに <b>FALSE</b> を返します。
	 */
	public function asXML(string $filename = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * <b>SimpleXMLElement::asXML</b> のエイリアス
	 * @link http://php.net/manual/ja/simplexmlelement.savexml.php
	 * @param $filename [optional]
	 */
	public function saveXML($filename) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * XML データに Xpath クエリを実行する
	 * @link http://php.net/manual/ja/simplexmlelement.xpath.php
	 * @param string $path <p>
	 * XPath パス。
	 * </p>
	 * @return array SimpleXMLElement オブジェクトの配列を返します。
	 * エラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function xpath(string $path): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 次の XPath クエリ用の prefix/ns コンテキストを作成する
	 * @link http://php.net/manual/ja/simplexmlelement.registerxpathnamespace.php
	 * @param string $prefix <p>
	 * <i>ns</i> で指定した名前空間への XPath クエリで使用する、
	 * 名前空間プレフィックス。
	 * </p>
	 * @param string $ns <p>
	 * XPath クエリで使用する名前空間。
	 * これは XML ドキュメントで使用している名前空間と一致していなければなりません。
	 * 一致していない場合、<i>prefix</i>
	 * を使用した XPath クエリは何も結果を返しません。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function registerXPathNamespace(string $prefix, string $ns): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 要素の属性を定義する
	 * @link http://php.net/manual/ja/simplexmlelement.attributes.php
	 * @param string $ns [optional] <p>
	 * オプションで指定する、取得した属性の名前空間。
	 * </p>
	 * @param bool $is_prefix [optional] <p>
	 * デフォルトは <b>FALSE</b>。
	 * </p>
	 * @return SimpleXMLElement <b>SimpleXMLElement</b> オブジェクトを返します。
	 * これを反復処理すれば、そのタグの属性を順に処理することができます。
	 * </p>
	 * <p>
	 * タグではなく属性を指している <b>SimpleXMLElement</b>
	 * に対してコールした場合は <b>NULL</b> を返します。
	 */
	public function attributes(string $ns = null, bool $is_prefix = false): SimpleXMLElement {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * 指定したノードの子ノードを見付ける
	 * @link http://php.net/manual/ja/simplexmlelement.children.php
	 * @param string $ns [optional] <p>
	 * XML 名前空間。
	 * </p>
	 * @param bool $is_prefix [optional] <p>
	 * <i>is_prefix</i> が <b>TRUE</b> の場合は
	 * <i>ns</i> をプレフィックスとして扱います。<b>FALSE</b> の場合は
	 * <i>ns</i> を名前空間 URL として扱います。
	 * </p>
	 * @return SimpleXMLElement ノードが子を持つかどうかにかかわらず
	 * <b>SimpleXMLElement</b> 要素を返します。
	 */
	public function children(string $ns = null, bool $is_prefix = false): SimpleXMLElement {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ドキュメントで使用している名前空間を返す
	 * @link http://php.net/manual/ja/simplexmlelement.getnamespaces.php
	 * @param bool $recursive [optional] <p>
	 * 指定されている場合は、親ノードおよび子ノードで使用している全ての名前空間を返します。
	 * されていない場合は、ルートノードで使用している名前空間のみを返します。
	 * </p>
	 * @return array getNamespaces メソッドは、
	 * 名前空間名および関連付けられた URI を配列で返します。
	 */
	public function getNamespaces(bool $recursive = false): array {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
	 * ドキュメントで宣言されている名前空間を返す
	 * @link http://php.net/manual/ja/simplexmlelement.getdocnamespaces.php
	 * @param bool $recursive [optional] <p>
	 * 指定されている場合は、親ノードおよび子ノードで宣言されている全ての名前空間を返します。
	 * されていない場合は、ルートノードで宣言されている名前空間のみを返します。
	 * </p>
	 * @param bool $from_root [optional] <p>
	 * XML 文書のルートノードからでなく、子ノードの配下の名前空間を再帰的にチェックできるようにします。
	 * </p>
	 * @return array getDocNamespaces メソッドは、
	 * 名前空間名および関連付けられた URI を配列で返します。
	 */
	public function getDocNamespaces(bool $recursive = false, bool $from_root = true): array {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
	 * XML 要素の名前を取得する
	 * @link http://php.net/manual/ja/simplexmlelement.getname.php
	 * @return string getName メソッドは、
	 * SimpleXMLElement オブジェクトが参照している XML タグの名前を
	 * string で返します。
	 */
	public function getName(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
	 * XML ノードに子要素を追加する
	 * @link http://php.net/manual/ja/simplexmlelement.addchild.php
	 * @param string $name <p>
	 * 追加する子要素の名前。
	 * </p>
	 * @param string $value [optional] <p>
	 * 指定されている場合は、子要素の値。
	 * </p>
	 * @param string $namespace [optional] <p>
	 * 指定されている場合は、その子要素が所属する名前空間。
	 * </p>
	 * @return SimpleXMLElement addChild メソッドは、
	 * XML ノードに追加した子要素を表す
	 * SimpleXMLElement オブジェクトを返します。
	 */
	public function addChild(string $name, string $value = null, string $namespace = null): SimpleXMLElement {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
	 * SimpleXML 要素に属性を追加する
	 * @link http://php.net/manual/ja/simplexmlelement.addattribute.php
	 * @param string $name <p>
	 * 追加する属性の名前。
	 * </p>
	 * @param string $value [optional] <p>
	 * 属性の値。
	 * </p>
	 * @param string $namespace [optional] <p>
	 * 指定されている場合は、その属性が所属する名前空間。
	 * </p>
	 * @return void 値を返しません。
	 */
	public function addAttribute(string $name, string $value = null, string $namespace = null): void {}

	public function __toString() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 子要素を数える
	 * @link http://php.net/manual/ja/simplexmlelement.count.php
	 * @return int 子要素の数を返します。
	 */
	public function count(): int {}

}

/**
 * (PHP 5, PHP 7)<br/>
 * XMLファイルをパースし、オブジェクトに代入する
 * @link http://php.net/manual/ja/function.simplexml-load-file.php
 * @param string $filename <p>
 * XML ファイルへのパス。
 * </p>
 * <p>
 * Libxml 2 は URI をエスケープしませんので、例えば URI パラメータ
 * a に b&#38;#38;c を渡したい場合、
 * simplexml_load_file(rawurlencode('http://example.com/?a=' .
 * urlencode('b&#38;#38;c')))
 * をしてコールする必要があります。PHP 5.1.0 以降では、これをする必要は
 * ありません。PHP が自動的に行います。
 * </p>
 * @param string $class_name [optional] <p>
 * <b>simplexml_load_file</b>
 * が指定されたクラスのオブジェクトを返すようにするために、
 * このオプションのパラメータを使用します。
 * このクラスは、SimpleXMLElement
 * クラスを継承していなければなりません。
 * </p>
 * @param int $options [optional] <p>
 * PHP 5.1.0 と Libxml 2.6.0 から、追加の Libxml パラメータ
 * を指定するために <i>options</i>
 * を使用することもできます。
 * </p>
 * @param string $ns [optional] <p>
 * 名前空間プレフィックスあるいは URI。
 * </p>
 * @param bool $is_prefix [optional] <p>
 * <i>ns</i> がプレフィックスである場合に <b>TRUE</b>、
 * URI である場合に <b>FALSE</b>。デフォルトは <b>FALSE</b> です。
 * </p>
 * @return SimpleXMLElement SimpleXMLElement クラスのオブジェクトを返します。
 * XML ドキュメント内のデータをプロパティに含みます。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function simplexml_load_file(string $filename, string $class_name = "SimpleXMLElement", int $options = 0, string $ns = "", bool $is_prefix = false): SimpleXMLElement {}

/**
 * (PHP 5, PHP 7)<br/>
 * XML 文字列をオブジェクトに代入する
 * @link http://php.net/manual/ja/function.simplexml-load-string.php
 * @param string $data <p>
 * 整形式 XML 文字列。
 * </p>
 * @param string $class_name [optional] <p>
 * このオプションのパラメータを使用して、
 * <b>simplexml_load_file</b>
 * が指定されたクラスのオブジェクトを返すようにします。
 * このクラスは、SimpleXMLElement
 * クラスを継承していなければなりません。
 * </p>
 * @param int $options [optional] <p>
 * PHP 5.1.0 と Libxml 2.6.0 から、追加の Libxml パラメータ
 * を指定するために <i>options</i>
 * を使用することもできます。
 * </p>
 * @param string $ns [optional] <p>
 * 名前空間プレフィックスあるいは URI。
 * </p>
 * @param bool $is_prefix [optional] <p>
 * <i>ns</i> がプレフィックスである場合に <b>TRUE</b>、
 * URI である場合に <b>FALSE</b>。デフォルトは <b>FALSE</b> です。
 * </p>
 * @return SimpleXMLElement SimpleXMLElement クラスのオブジェクトを返します。
 * XML ドキュメント内のデータをプロパティに含みます。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function simplexml_load_string(string $data, string $class_name = "SimpleXMLElement", int $options = 0, string $ns = null, bool $is_prefix = false): SimpleXMLElement {}

/**
 * (PHP 5, PHP 7)<br/>
 * DOM ノードから SimpleXMLElement オブジェクトを取得する
 * @link http://php.net/manual/ja/function.simplexml-import-dom.php
 * @param DOMNode $node <p>
 * DOM 要素ノード。
 * </p>
 * @param string $class_name [optional] <p>
 * このオプションパラメータを使用すると、
 * <b>simplexml_import_dom</b>
 * は指定したクラスのオブジェクトを返します。このクラスは
 * SimpleXMLElement を継承していなければなりません。
 * </p>
 * @return SimpleXMLElement SimpleXMLElement を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function simplexml_import_dom(DOMNode $node, string $class_name = "SimpleXMLElement"): SimpleXMLElement {}

// End of SimpleXML v.7.1.5
?>
