<?php



namespace {

	/**
	 * <p>HTML ファイル中の HTML ノードで、tidy が検出したものです。</p>
	 * @link https://php.net/manual/ja/class.tidy.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	class tidy {

		/**
		 * 指定したドキュメントのパースで発生した警告とエラーを返す
		 * <p>オブジェクト指向型 (プロパティ):</p><p>手続き型:</p><p>指定したドキュメントのパースで発生した警告とエラーを返します。</p>
		 * @var string <p>エラーバッファを文字列で返します。</p>
		 * @link https://php.net/manual/ja/tidy.props.errorbuffer.php
		 * @see tidy_access_count(), tidy_error_count(), tidy_warning_count()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public $errorBuffer;

		/**
		 * 新しい tidy オブジェクトを作成する
		 * <p>新しい tidy オブジェクトを作成します。</p>
		 * @param string $filename <p>もし <code>filename</code> パラメータが与えられた場合、 この関数はファイルを読み込み、<code>tidy_parse_file()</code> のように実行してファイルに基づいたオブジェクトを初期化します。</p>
		 * @param mixed $config <p><code>config</code> には配列あるいは文字列を渡します。 文字列を渡した場合は設定ファイルの名前、 それ以外の場合は設定そのものとして解釈されます。</p> <p>オプションについての説明は » http://tidy.sourceforge.net/docs/quickref.html を参照ください。</p>
		 * @param string $encoding <p><code>encoding</code> は入出力ドキュメントのエンコーディングを設定します。 指定できるエンコーディング名は <i>ascii</i>、<i>latin0</i>、<i>latin1</i>、 <i>raw</i>、<i>utf8</i>、<i>iso2022</i>、 <i>mac</i>、<i>win1252</i>、<i>ibm858</i>、 <i>utf16</i>、<i>utf16le</i>、<i>utf16be</i>、 <i>big5</i> および <i>shiftjis</i> です。</p>
		 * @param bool $use_include_path <p>include_path からファイルを探します。</p>
		 * @return self <p>新しい tidy インスタンスを返します。</p>
		 * @link https://php.net/manual/ja/tidy.construct.php
		 * @see tidy::parseFile(), tidy::parseString()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function __construct(string $filename = NULL, $config = NULL, string $encoding = NULL, bool $use_include_path = NULL) {}

		/**
		 * Tidy パースツリーの  タグから始まる tidyNode オブジェクトを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>Tidy パースツリーの &lt;body&gt; タグから始まる tidyNode オブジェクトを返します。</p>
		 * @return tidyNode <p>tidy パースツリーの &lt;body&gt; タグから始まる tidyNode オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/tidy.body.php
		 * @see tidy::head(), tidy::html()
		 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0
		 */
		public function body(): \tidyNode {}

		/**
		 * パースされたマークアップに設定に基く誤りの修正を行う
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、与えられた Tidy オブジェクト <code>object</code> を修正します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidy.cleanrepair.php
		 * @see tidy::repairFile(), tidy::repairString()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function cleanRepair(): bool {}

		/**
		 * パース、修正されたマークアップの診断を行う
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>与えられた Tidy オブジェクト <code>object</code> に対して診断テストを実行し、 エラーバッファにドキュメントについての情報を追加します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidy.diagnose.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function diagnose(): bool {}

		/**
		 * 現在の Tidy の設定を取得する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>与えられた Tidy オブジェクト <code>object</code> で使用されている設定オプションを配列で返します。</p>
		 * @return array <p>設定オプションの配列を返します。</p><p>それぞれのオプションの説明については、» http://tidy.sourceforge.net/docs/quickref.html を参照ください。</p>
		 * @link https://php.net/manual/ja/tidy.getconfig.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
		 */
		public function getConfig(): array {}

		/**
		 * 指定したドキュメントで検出された HTML バージョンを取得する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した Tidy オブジェクト <code>object</code> で検出された HTML バージョンを返します。</p>
		 * @return int <p>出された HTML バージョンを返します。</p> <b>警告</b> <p>この関数は Tidylib 自体でまだ実装されていません。そのため常に <i>0</i> を返します。</p>
		 * @link https://php.net/manual/ja/tidy.gethtmlver.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function getHtmlVer(): int {}

		/**
		 * Tidy ドキュメントについて指定した設定オプションの値を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>Tidy オブジェクト <code>object</code> について指定した設定オプション <code>option</code> の値を返します。</p>
		 * @param string $option <p>それぞれの設定オプションと型の一覧は、» http://tidy.sourceforge.net/docs/quickref.html にあります。</p>
		 * @return mixed <p>指定した設定オプション <code>option</code> の値を返します。 返される型は、設定オプションの型に依存します。</p>
		 * @link https://php.net/manual/ja/tidy.getopt.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function getOpt(string $option) {}

		/**
		 * 与えられたオプション名に対するドキュメントを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>tidy_get_opt_doc()</b> は、 与えられたオプション名に対するドキュメントを返します。</p><p><b>注意</b>:</p><p>この関数を有効にするには、少なくとも2005年4月25日以降の libtidy が必要です。</p>
		 * @param string $optname <p>オプション名。</p>
		 * @return string <p>オプションが存在し、かつドキュメントが利用可能であれば、文字列を返します。 その他の場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidy.getoptdoc.php
		 * @see tidy::getconfig(), tidy::getopt()
		 * @since PHP 5 >= 5.1.0, PHP 7
		 */
		public function getOptDoc(string $optname): string {}

		/**
		 * Tidy ライブラリのリリース日 (バージョン) を取得する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>Tidy ライブラリのリリース日を取得します。</p>
		 * @return string <p>Tidy ライブラリのリリース日を文字列で返します。</p>
		 * @link https://php.net/manual/ja/tidy.getrelease.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function getRelease(): string {}

		/**
		 * 指定したドキュメントのステータスを取得する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した Tidy オブジェクト <code>object</code> のステータスを返します。</p>
		 * @return int <p>エラー/警告が発生しなかった場合は 0、 警告やアクセイシビリティエラーの場合は 1、 エラーの場合は 2 を返します。</p>
		 * @link https://php.net/manual/ja/tidy.getstatus.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function getStatus(): int {}

		/**
		 * Tidy パースツリーの  タグから始まる tidyNode オブジェクトを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>Tidy パースツリーの &lt;head&gt; タグから始まる tidyNode オブジェクトを返します。</p>
		 * @return tidyNode <p>tidyNode オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/tidy.head.php
		 * @see tidy::body(), tidy::html()
		 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
		 */
		public function head(): \tidyNode {}

		/**
		 * Tidy パースツリーの  タグから始まる tidyNode オブジェクトを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は Tidy パースツリーの &lt;html&gt; タグから始まる tidyNode オブジェクトを返します。</p>
		 * @return tidyNode <p>tidyNode オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/tidy.php.php
		 * @see tidy::body(), tidy::head()
		 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
		 */
		public function html(): \tidyNode {}

		/**
		 * ドキュメントが XHTML ドキュメントかどうかを示す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>ドキュメントが XHTML ドキュメントであるかどうかを調べます。</p>
		 * @return bool <p>指定した Tidy オブジェクト <code>object</code> が XHTML ドキュメントの場合、この関数は <b><code>TRUE</code></b> を返します。 その他の場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b> <p>この関数はまだ Tidylib 自身に実装されていません。 なので、常に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidy.isxhtml.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function isXhtml(): bool {}

		/**
		 * ドキュメントが一般的な XML ドキュメント (非 HTML/XHTML) かどうかを示す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>ドキュメントが一般的な XML ドキュメント (非 HTML/XHTML) かどうかを調べます。</p>
		 * @return bool <p>指定した Tidy オブジェクト <code>object</code> が一般的な XML ドキュメント (非 HTML/XHTML) の場合、 この関数は <b><code>TRUE</code></b> を返します。 その他の場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b> <p>この関数はまだ Tidylib 自身に実装されていません。 なので、常に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidy.isxml.php
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function isXml(): bool {}

		/**
		 * ファイルまたは URI にあるマークアップをパースする
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>与えられたファイルをパースします。</p>
		 * @param string $filename <p>もし <code>filename</code> パラメータが与えられた場合、 この関数はファイルを読み込み、<b>tidy_parse_file()</b> のように実行してファイルに基づいたオブジェクトを初期化します。</p>
		 * @param mixed $config <p><code>config</code> には配列あるいは文字列を渡します。 文字列を渡した場合は設定ファイルの名前、 それ以外の場合は設定そのものとして解釈されます。</p> <p>オプションについての説明は » http://tidy.sourceforge.net/docs/quickref.html を参照ください。</p>
		 * @param string $encoding <p><code>encoding</code> は入出力ドキュメントのエンコーディングを設定します。 指定できるエンコーディング名は <i>ascii</i>、<i>latin0</i>、<i>latin1</i>、 <i>raw</i>、<i>utf8</i>、<i>iso2022</i>、 <i>mac</i>、<i>win1252</i>、<i>ibm858</i>、 <i>utf16</i>、<i>utf16le</i>、<i>utf16be</i>、 <i>big5</i> および <i>shiftjis</i> です。</p>
		 * @param bool $use_include_path <p>include_path からファイルを探します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidy.parsefile.php
		 * @see tidy::parsestring(), tidy::repairfile(), tidy::repairstring()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function parseFile(string $filename, $config = NULL, string $encoding = NULL, bool $use_include_path = FALSE): bool {}

		/**
		 * 文字列にストアされたドキュメントをパースする
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列にストアされたドキュメントをパースします。</p>
		 * @param string $input <p>パースするデータ。</p>
		 * @param mixed $config <p><code>config</code> には配列あるいは文字列を渡します。 文字列を渡した場合は設定ファイルの名前、 それ以外の場合は設定そのものとして解釈されます。</p> <p>オプションについての説明は » http://tidy.sourceforge.net/docs/quickref.html を参照ください。</p>
		 * @param string $encoding <p><code>encoding</code> は入出力ドキュメントのエンコーディングを設定します。 指定できるエンコーディング名は <i>ascii</i>、<i>latin0</i>、<i>latin1</i>、 <i>raw</i>、<i>utf8</i>、<i>iso2022</i>、 <i>mac</i>、<i>win1252</i>、<i>ibm858</i>、 <i>utf16</i>、<i>utf16le</i>、<i>utf16be</i>、 <i>big5</i> および <i>shiftjis</i> です。</p>
		 * @return bool <p>新しい tidy インスタンスを返します。</p>
		 * @link https://php.net/manual/ja/tidy.parsestring.php
		 * @see tidy::parseFile(), tidy::repairFile(), tidy::repairString()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
		 */
		public function parseString(string $input, $config = NULL, string $encoding = NULL): bool {}

		/**
		 * ファイルを修正し、それを文字列として返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>与えられたファイルを修正し、それを文字列として返します。</p>
		 * @param string $filename <p>修正するファイル。</p>
		 * @param mixed $config <p><code>config</code> には配列あるいは文字列を渡します。 文字列を渡した場合は設定ファイルの名前、 それ以外の場合は設定そのものとして解釈されます。</p> <p>オプションについての説明は http://tidy.sourceforge.net/docs/quickref.html を参照ください。</p>
		 * @param string $encoding <p><code>encoding</code> は入出力ドキュメントのエンコーディングを設定します。 指定できるエンコーディング名は <i>ascii</i>、<i>latin0</i>、<i>latin1</i>、 <i>raw</i>、<i>utf8</i>、<i>iso2022</i>、 <i>mac</i>、<i>win1252</i>、<i>ibm858</i>、 <i>utf16</i>、<i>utf16le</i>、<i>utf16be</i>、 <i>big5</i> および <i>shiftjis</i> です。</p>
		 * @param bool $use_include_path <p>include_path からファイルを探します。</p>
		 * @return string <p>修正した内容を文字列で返します。</p>
		 * @link https://php.net/manual/ja/tidy.repairfile.php
		 * @see tidy::parseFile(), tidy::parseString(), tidy::repairString()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
		 */
		public function repairFile(string $filename, $config = NULL, string $encoding = NULL, bool $use_include_path = FALSE): string {}

		/**
		 * 別途提供される設定ファイルを使用して文字列を修正する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>与えられた文字列を修正します。</p>
		 * @param string $data <p>修正するデータ。</p>
		 * @param mixed $config <p><code>config</code> には配列あるいは文字列を渡します。 文字列を渡した場合は設定ファイルの名前、 それ以外の場合は設定そのものとして解釈されます。</p> <p>オプションについての説明は » http://tidy.sourceforge.net/docs/quickref.html を参照ください。</p>
		 * @param string $encoding <p><code>encoding</code> は入出力ドキュメントのエンコーディングを設定します。 指定できるエンコーディング名は <i>ascii</i>、<i>latin0</i>、<i>latin1</i>、 <i>raw</i>、<i>utf8</i>、<i>iso2022</i>、 <i>mac</i>、<i>win1252</i>、<i>ibm858</i>、 <i>utf16</i>、<i>utf16le</i>、<i>utf16be</i>、 <i>big5</i> および <i>shiftjis</i> です。</p>
		 * @return string <p>修正した文字列を返します。</p>
		 * @link https://php.net/manual/ja/tidy.repairstring.php
		 * @see tidy::parseFile(), tidy::parseString(), tidy::repairFile()
		 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
		 */
		public function repairString(string $data, $config = NULL, string $encoding = NULL): string {}

		/**
		 * Tidy パースツリーのルートを表す tidyNode を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>Tidy パースツリーのルートを表す tidyNode を返します。</p>
		 * @return tidyNode <p>tidyNode オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/tidy.root.php
		 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
		 */
		public function root(): \tidyNode {}
	}

	/**
	 * <p>HTML ファイル中の HTML ノードで、tidy が検出したものです。</p>
	 * @link https://php.net/manual/ja/class.tidynode.php
	 * @since PHP 5, PHP 7
	 */
	class tidyNode {

		/**
		 * @var string <p>まわりのタグも含む、ノードの HTML 表現</p>
		 * @link https://php.net/manual/ja/class.tidynode.php#tidynode.props.value
		 */
		public $value;

		/**
		 * @var string <p>HTML ノードの名前</p>
		 * @link https://php.net/manual/ja/class.tidynode.php#tidynode.props.name
		 */
		public $name;

		/**
		 * @var int <p>タグの型 (上の定数のひとつで、たとえば <b><code>TIDY_NODETYPE_PHP</code></b>)</p>
		 * @link https://php.net/manual/ja/class.tidynode.php#tidynode.props.type
		 */
		public $type;

		/**
		 * @var int <p>ファイル内でそのタグが存在する行番号</p>
		 * @link https://php.net/manual/ja/class.tidynode.php#tidynode.props.line
		 */
		public $line;

		/**
		 * @var int <p>ファイル内でそのタグが存在するカラム番号</p>
		 * @link https://php.net/manual/ja/class.tidynode.php#tidynode.props.column
		 */
		public $column;

		/**
		 * @var bool <p>そのノードが独自タグであるかどうかを表す</p>
		 * @link https://php.net/manual/ja/class.tidynode.php#tidynode.props.proprietary
		 */
		public $proprietary;

		/**
		 * @var int <p>タグの ID (上の定数のひとつで、たとえば <b><code>TIDY_TAG_FRAME</code></b>)</p>
		 * @link https://php.net/manual/ja/class.tidynode.php#tidynode.props.id
		 */
		public $id;

		/**
		 * @var array <p>現在のノードの属性名 (キー) を表す文字列の配列</p>
		 * @link https://php.net/manual/ja/class.tidynode.php#tidynode.props.attribute
		 */
		public $attribute;

		/**
		 * @var array <p>現在のノードの子を表す <b>tidyNode</b> の配列</p>
		 * @link https://php.net/manual/ja/class.tidynode.php#tidynode.props.child
		 */
		public $child;

		/**
		 * カレントノードの親ノードを返す
		 * <p>カレントノードの親ノードを返します。</p>
		 * @return tidyNode <p>そのノードが親を持っている場合に <code>tidyNode</code>、 それ以外の場合に <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidynode.getparent.php
		 * @since PHP 5 >= 5.2.2, PHP 7
		 */
		public function getParent(): \tidyNode {}

		/**
		 * ノードが子を持つかどうかを調べる
		 * <p>ノードが子を持つかどうかを調べます。</p>
		 * @return bool <p>ノードが子を持つ場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidynode.haschildren.php
		 * @since PHP 5, PHP 7
		 */
		public function hasChildren(): bool {}

		/**
		 * このノードが兄弟ノードを持つかどうかを調べる
		 * <p>ノードが兄弟ノードを持つかどうかを調べます。</p>
		 * @return bool <p>兄弟ノードを持つ場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidynode.hassiblings.php
		 * @since PHP 5, PHP 7
		 */
		public function hasSiblings(): bool {}

		/**
		 * このノードが ASP かどうかを調べる
		 * <p>現在のノードが ASP かどうかを調べます。</p>
		 * @return bool <p>ノードが ASP の場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidynode.isasp.php
		 * @since PHP 5, PHP 7
		 */
		public function isAsp(): bool {}

		/**
		 * このノードがコメントを表すものかどうかを調べる
		 * <p>このノードがコメントであるかどうかを調べます。</p>
		 * @return bool <p>このノードがコメントである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidynode.iscomment.php
		 * @since PHP 5, PHP 7
		 */
		public function isComment(): bool {}

		/**
		 * このノードが HTML ドキュメントであるかどうかを調べる
		 * <p>このノードが HTML ドキュメントの一部であるかどうかを調べます。</p>
		 * @return bool <p>ノードが HTML ドキュメントの一部である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidynode.ishtml.php
		 * @since PHP 5, PHP 7
		 */
		public function isHtml(): bool {}

		/**
		 * このノードが JSTE であるかどうかを調べる
		 * <p>このノードが JSTE であるかどうかを調べます。</p>
		 * @return bool <p>ノードが JSTE である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidynode.isjste.php
		 * @since PHP 5, PHP 7
		 */
		public function isJste(): bool {}

		/**
		 * このノードが PHP であるかどうかを調べる
		 * <p>このノードが PHP であるかどうかを調べます。</p>
		 * @return bool <p>ノードが PHP コードである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidynode.isphp.php
		 * @since PHP 5, PHP 7
		 */
		public function isPhp(): bool {}

		/**
		 * このノードが (マークアップでない) テキストであるかどうかを調べる
		 * <p>このノードが (マークアップされていない) テキストであるかどうかを調べます。</p>
		 * @return bool <p>ノードがテキストを著す場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tidynode.istext.php
		 * @since PHP 5, PHP 7
		 */
		public function isText(): bool {}
	}

	/**
	 * バッファを修正するための ob_start コールバック関数
	 * <p>バッファを修正するための <code>ob_start()</code> コールバック関数です。</p>
	 * @param string $input <p>バッファ。</p>
	 * @param int $mode <p>バッファのモード。</p>
	 * @return string <p>修正したバッファを返します。</p>
	 * @link https://php.net/manual/ja/function.ob-tidyhandler.php
	 * @see ob_start()
	 * @since PHP 5, PHP 7
	 */
	function ob_tidyhandler(string $input, int $mode = NULL): string {}

	/**
	 * 指定したドキュメントについて発生したTidyアクセシビリティ警告の数を返す
	 * <p><b>tidy_access_count()</b> は、 指定したドキュメントについて発生した Tidy アクセシビリティ警告の数を返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return int <p>警告の数を返します。</p>
	 * @link https://php.net/manual/ja/function.tidy-access-count.php
	 * @see tidy_error_count(), tidy_warning_count()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_access_count(\tidy $object): int {}

	/**
	 * パースされたマークアップに設定に基く誤りの修正を行う
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、与えられた Tidy オブジェクト <code>object</code> を修正します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/tidy.cleanrepair.php
	 * @see tidy::repairFile(), tidy::repairString()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_clean_repair(\tidy $object): bool {}

	/**
	 * 指定したドキュメントについて発生した Tidy 設定エラーの数を返す
	 * <p>指定した Tidy オブジェクト <code>object</code> の設定時に発生した Tidy エラーの数を返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return int <p>エラーの数を返します。</p>
	 * @link https://php.net/manual/ja/function.tidy-config-count.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_config_count(\tidy $object): int {}

	/**
	 * パース、修正されたマークアップの診断を行う
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>与えられた Tidy オブジェクト <code>object</code> に対して診断テストを実行し、 エラーバッファにドキュメントについての情報を追加します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/tidy.diagnose.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_diagnose(\tidy $object): bool {}

	/**
	 * 指定したドキュメントについて発生した Tidy エラーの数を返す
	 * <p>指定したドキュメントについて発生した Tidy エラーの数を返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return int <p>エラーの数を返します。</p>
	 * @link https://php.net/manual/ja/function.tidy-error-count.php
	 * @see tidy_access_count(), tidy_warning_count()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_error_count(\tidy $object): int {}

	/**
	 * Tidy パースツリーの  タグから始まる tidyNode オブジェクトを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Tidy パースツリーの &lt;body&gt; タグから始まる tidyNode オブジェクトを返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return tidyNode <p>tidy パースツリーの &lt;body&gt; タグから始まる tidyNode オブジェクトを返します。</p>
	 * @link https://php.net/manual/ja/tidy.body.php
	 * @see tidy::head(), tidy::html()
	 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0
	 */
	function tidy_get_body(\tidy $object): \tidyNode {}

	/**
	 * 現在の Tidy の設定を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>与えられた Tidy オブジェクト <code>object</code> で使用されている設定オプションを配列で返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return array <p>設定オプションの配列を返します。</p><p>それぞれのオプションの説明については、» http://tidy.sourceforge.net/docs/quickref.html を参照ください。</p>
	 * @link https://php.net/manual/ja/tidy.getconfig.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
	 */
	function tidy_get_config(\tidy $object): array {}

	/**
	 * 指定したドキュメントのパースで発生した警告とエラーを返す
	 * <p>オブジェクト指向型 (プロパティ):</p><p>手続き型:</p><p>指定したドキュメントのパースで発生した警告とエラーを返します。</p>
	 * @param \tidy $tidy <p>Tidy オブジェクト。</p>
	 * @return string <p>エラーバッファを文字列で返します。</p>
	 * @link https://php.net/manual/ja/tidy.props.errorbuffer.php
	 * @see tidy_access_count(), tidy_error_count(), tidy_warning_count()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_get_error_buffer(\tidy $tidy): string {}

	/**
	 * Tidy パースツリーの  タグから始まる tidyNode オブジェクトを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Tidy パースツリーの &lt;head&gt; タグから始まる tidyNode オブジェクトを返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return tidyNode <p>tidyNode オブジェクトを返します。</p>
	 * @link https://php.net/manual/ja/tidy.head.php
	 * @see tidy::body(), tidy::html()
	 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
	 */
	function tidy_get_head(\tidy $object): \tidyNode {}

	/**
	 * Tidy パースツリーの  タグから始まる tidyNode オブジェクトを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は Tidy パースツリーの &lt;html&gt; タグから始まる tidyNode オブジェクトを返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return tidyNode <p>tidyNode オブジェクトを返します。</p>
	 * @link https://php.net/manual/ja/tidy.php.php
	 * @see tidy::body(), tidy::head()
	 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
	 */
	function tidy_get_html(\tidy $object): \tidyNode {}

	/**
	 * 指定したドキュメントで検出された HTML バージョンを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した Tidy オブジェクト <code>object</code> で検出された HTML バージョンを返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return int <p>出された HTML バージョンを返します。</p> <b>警告</b> <p>この関数は Tidylib 自体でまだ実装されていません。そのため常に <i>0</i> を返します。</p>
	 * @link https://php.net/manual/ja/tidy.gethtmlver.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_get_html_ver(\tidy $object): int {}

	/**
	 * 与えられたオプション名に対するドキュメントを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><b>tidy_get_opt_doc()</b> は、 与えられたオプション名に対するドキュメントを返します。</p><p><b>注意</b>:</p><p>この関数を有効にするには、少なくとも2005年4月25日以降の libtidy が必要です。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @param string $optname <p>オプション名。</p>
	 * @return string <p>オプションが存在し、かつドキュメントが利用可能であれば、文字列を返します。 その他の場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/tidy.getoptdoc.php
	 * @see tidy::getconfig(), tidy::getopt()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function tidy_get_opt_doc(\tidy $object, string $optname): string {}

	/**
	 * パースされた Tidy マークアップを表す文字列を返す
	 * <p>修正された HTML を文字列で返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return string <p>修正された HTML を文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.tidy-get-output.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_get_output(\tidy $object): string {}

	/**
	 * Tidy ライブラリのリリース日 (バージョン) を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Tidy ライブラリのリリース日を取得します。</p>
	 * @return string <p>Tidy ライブラリのリリース日を文字列で返します。</p>
	 * @link https://php.net/manual/ja/tidy.getrelease.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_get_release(): string {}

	/**
	 * Tidy パースツリーのルートを表す tidyNode を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Tidy パースツリーのルートを表す tidyNode を返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return tidyNode <p>tidyNode オブジェクトを返します。</p>
	 * @link https://php.net/manual/ja/tidy.root.php
	 * @since PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0
	 */
	function tidy_get_root(\tidy $object): \tidyNode {}

	/**
	 * 指定したドキュメントのステータスを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した Tidy オブジェクト <code>object</code> のステータスを返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return int <p>エラー/警告が発生しなかった場合は 0、 警告やアクセイシビリティエラーの場合は 1、 エラーの場合は 2 を返します。</p>
	 * @link https://php.net/manual/ja/tidy.getstatus.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_get_status(\tidy $object): int {}

	/**
	 * Tidy ドキュメントについて指定した設定オプションの値を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Tidy オブジェクト <code>object</code> について指定した設定オプション <code>option</code> の値を返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @param string $option <p>それぞれの設定オプションと型の一覧は、» http://tidy.sourceforge.net/docs/quickref.html にあります。</p>
	 * @return mixed <p>指定した設定オプション <code>option</code> の値を返します。 返される型は、設定オプションの型に依存します。</p>
	 * @link https://php.net/manual/ja/tidy.getopt.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_getopt(\tidy $object, string $option) {}

	/**
	 * ドキュメントが XHTML ドキュメントかどうかを示す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ドキュメントが XHTML ドキュメントであるかどうかを調べます。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return bool <p>指定した Tidy オブジェクト <code>object</code> が XHTML ドキュメントの場合、この関数は <b><code>TRUE</code></b> を返します。 その他の場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b> <p>この関数はまだ Tidylib 自身に実装されていません。 なので、常に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/tidy.isxhtml.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_is_xhtml(\tidy $object): bool {}

	/**
	 * ドキュメントが一般的な XML ドキュメント (非 HTML/XHTML) かどうかを示す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ドキュメントが一般的な XML ドキュメント (非 HTML/XHTML) かどうかを調べます。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return bool <p>指定した Tidy オブジェクト <code>object</code> が一般的な XML ドキュメント (非 HTML/XHTML) の場合、 この関数は <b><code>TRUE</code></b> を返します。 その他の場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b> <p>この関数はまだ Tidylib 自身に実装されていません。 なので、常に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/tidy.isxml.php
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_is_xml(\tidy $object): bool {}

	/**
	 * ファイルまたは URI にあるマークアップをパースする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>与えられたファイルをパースします。</p>
	 * @param string $filename <p>もし <code>filename</code> パラメータが与えられた場合、 この関数はファイルを読み込み、<b>tidy_parse_file()</b> のように実行してファイルに基づいたオブジェクトを初期化します。</p>
	 * @param mixed $config <p><code>config</code> には配列あるいは文字列を渡します。 文字列を渡した場合は設定ファイルの名前、 それ以外の場合は設定そのものとして解釈されます。</p> <p>オプションについての説明は » http://tidy.sourceforge.net/docs/quickref.html を参照ください。</p>
	 * @param string $encoding <p><code>encoding</code> は入出力ドキュメントのエンコーディングを設定します。 指定できるエンコーディング名は <i>ascii</i>、<i>latin0</i>、<i>latin1</i>、 <i>raw</i>、<i>utf8</i>、<i>iso2022</i>、 <i>mac</i>、<i>win1252</i>、<i>ibm858</i>、 <i>utf16</i>、<i>utf16le</i>、<i>utf16be</i>、 <i>big5</i> および <i>shiftjis</i> です。</p>
	 * @param bool $use_include_path <p>include_path からファイルを探します。</p>
	 * @return tidy <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/tidy.parsefile.php
	 * @see tidy::parsestring(), tidy::repairfile(), tidy::repairstring()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_parse_file(string $filename, $config = NULL, string $encoding = NULL, bool $use_include_path = FALSE): \tidy {}

	/**
	 * 文字列にストアされたドキュメントをパースする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列にストアされたドキュメントをパースします。</p>
	 * @param string $input <p>パースするデータ。</p>
	 * @param mixed $config <p><code>config</code> には配列あるいは文字列を渡します。 文字列を渡した場合は設定ファイルの名前、 それ以外の場合は設定そのものとして解釈されます。</p> <p>オプションについての説明は » http://tidy.sourceforge.net/docs/quickref.html を参照ください。</p>
	 * @param string $encoding <p><code>encoding</code> は入出力ドキュメントのエンコーディングを設定します。 指定できるエンコーディング名は <i>ascii</i>、<i>latin0</i>、<i>latin1</i>、 <i>raw</i>、<i>utf8</i>、<i>iso2022</i>、 <i>mac</i>、<i>win1252</i>、<i>ibm858</i>、 <i>utf16</i>、<i>utf16le</i>、<i>utf16be</i>、 <i>big5</i> および <i>shiftjis</i> です。</p>
	 * @return tidy <p>新しい tidy インスタンスを返します。</p>
	 * @link https://php.net/manual/ja/tidy.parsestring.php
	 * @see tidy::parseFile(), tidy::repairFile(), tidy::repairString()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_parse_string(string $input, $config = NULL, string $encoding = NULL): \tidy {}

	/**
	 * ファイルを修正し、それを文字列として返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>与えられたファイルを修正し、それを文字列として返します。</p>
	 * @param string $filename <p>修正するファイル。</p>
	 * @param mixed $config <p><code>config</code> には配列あるいは文字列を渡します。 文字列を渡した場合は設定ファイルの名前、 それ以外の場合は設定そのものとして解釈されます。</p> <p>オプションについての説明は http://tidy.sourceforge.net/docs/quickref.html を参照ください。</p>
	 * @param string $encoding <p><code>encoding</code> は入出力ドキュメントのエンコーディングを設定します。 指定できるエンコーディング名は <i>ascii</i>、<i>latin0</i>、<i>latin1</i>、 <i>raw</i>、<i>utf8</i>、<i>iso2022</i>、 <i>mac</i>、<i>win1252</i>、<i>ibm858</i>、 <i>utf16</i>、<i>utf16le</i>、<i>utf16be</i>、 <i>big5</i> および <i>shiftjis</i> です。</p>
	 * @param bool $use_include_path <p>include_path からファイルを探します。</p>
	 * @return string <p>修正した内容を文字列で返します。</p>
	 * @link https://php.net/manual/ja/tidy.repairfile.php
	 * @see tidy::parseFile(), tidy::parseString(), tidy::repairString()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
	 */
	function tidy_repair_file(string $filename, $config = NULL, string $encoding = NULL, bool $use_include_path = FALSE): string {}

	/**
	 * 別途提供される設定ファイルを使用して文字列を修正する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>与えられた文字列を修正します。</p>
	 * @param string $data <p>修正するデータ。</p>
	 * @param mixed $config <p><code>config</code> には配列あるいは文字列を渡します。 文字列を渡した場合は設定ファイルの名前、 それ以外の場合は設定そのものとして解釈されます。</p> <p>オプションについての説明は » http://tidy.sourceforge.net/docs/quickref.html を参照ください。</p>
	 * @param string $encoding <p><code>encoding</code> は入出力ドキュメントのエンコーディングを設定します。 指定できるエンコーディング名は <i>ascii</i>、<i>latin0</i>、<i>latin1</i>、 <i>raw</i>、<i>utf8</i>、<i>iso2022</i>、 <i>mac</i>、<i>win1252</i>、<i>ibm858</i>、 <i>utf16</i>、<i>utf16le</i>、<i>utf16be</i>、 <i>big5</i> および <i>shiftjis</i> です。</p>
	 * @return string <p>修正した文字列を返します。</p>
	 * @link https://php.net/manual/ja/tidy.repairstring.php
	 * @see tidy::parseFile(), tidy::parseString(), tidy::repairFile()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.7.0
	 */
	function tidy_repair_string(string $data, $config = NULL, string $encoding = NULL): string {}

	/**
	 * 指定したドキュメントについて発生した Tidy 警告の数を返す
	 * <p>指定したドキュメントについて発生した Tidy 警告の数を返します。</p>
	 * @param \tidy $object <p>Tidy オブジェクト。</p>
	 * @return int <p>警告の数を返します。</p>
	 * @link https://php.net/manual/ja/function.tidy-warning-count.php
	 * @see tidy_error_count(), tidy_access_count()
	 * @since PHP 5, PHP 7, PECL tidy >= 0.5.2
	 */
	function tidy_warning_count(\tidy $object): int {}

	/**
	 * <b><code>TIDY_ATTR_ABBR</code></b>
	 */
	define('TIDY_ATTR_ABBR', null);

	/**
	 * <b><code>TIDY_ATTR_ACCEPT</code></b>
	 */
	define('TIDY_ATTR_ACCEPT', null);

	/**
	 * <b><code>TIDY_ATTR_ACCEPT_CHARSET</code></b>
	 */
	define('TIDY_ATTR_ACCEPT_CHARSET', null);

	/**
	 * <b><code>TIDY_ATTR_ACCESSKEY</code></b>
	 */
	define('TIDY_ATTR_ACCESSKEY', null);

	/**
	 * <b><code>TIDY_ATTR_ACTION</code></b>
	 */
	define('TIDY_ATTR_ACTION', null);

	/**
	 * <b><code>TIDY_ATTR_ADD_DATE</code></b>
	 */
	define('TIDY_ATTR_ADD_DATE', null);

	/**
	 * <b><code>TIDY_ATTR_ALIGN</code></b>
	 */
	define('TIDY_ATTR_ALIGN', null);

	/**
	 * <b><code>TIDY_ATTR_ALINK</code></b>
	 */
	define('TIDY_ATTR_ALINK', null);

	/**
	 * <b><code>TIDY_ATTR_ALT</code></b>
	 */
	define('TIDY_ATTR_ALT', null);

	/**
	 * <b><code>TIDY_ATTR_ARCHIVE</code></b>
	 */
	define('TIDY_ATTR_ARCHIVE', null);

	/**
	 * <b><code>TIDY_ATTR_AXIS</code></b>
	 */
	define('TIDY_ATTR_AXIS', null);

	/**
	 * <b><code>TIDY_ATTR_BACKGROUND</code></b>
	 */
	define('TIDY_ATTR_BACKGROUND', null);

	/**
	 * <b><code>TIDY_ATTR_BGCOLOR</code></b>
	 */
	define('TIDY_ATTR_BGCOLOR', null);

	/**
	 * <b><code>TIDY_ATTR_BGPROPERTIES</code></b>
	 */
	define('TIDY_ATTR_BGPROPERTIES', null);

	/**
	 * <b><code>TIDY_ATTR_BORDER</code></b>
	 */
	define('TIDY_ATTR_BORDER', null);

	/**
	 * <b><code>TIDY_ATTR_BORDERCOLOR</code></b>
	 */
	define('TIDY_ATTR_BORDERCOLOR', null);

	/**
	 * <b><code>TIDY_ATTR_BOTTOMMARGIN</code></b>
	 */
	define('TIDY_ATTR_BOTTOMMARGIN', null);

	/**
	 * <b><code>TIDY_ATTR_CELLPADDING</code></b>
	 */
	define('TIDY_ATTR_CELLPADDING', null);

	/**
	 * <b><code>TIDY_ATTR_CELLSPACING</code></b>
	 */
	define('TIDY_ATTR_CELLSPACING', null);

	/**
	 * <b><code>TIDY_ATTR_CHAR</code></b>
	 */
	define('TIDY_ATTR_CHAR', null);

	/**
	 * <b><code>TIDY_ATTR_CHAROFF</code></b>
	 */
	define('TIDY_ATTR_CHAROFF', null);

	/**
	 * <b><code>TIDY_ATTR_CHARSET</code></b>
	 */
	define('TIDY_ATTR_CHARSET', null);

	/**
	 * <b><code>TIDY_ATTR_CHECKED</code></b>
	 */
	define('TIDY_ATTR_CHECKED', null);

	/**
	 * <b><code>TIDY_ATTR_CITE</code></b>
	 */
	define('TIDY_ATTR_CITE', null);

	/**
	 * <b><code>TIDY_ATTR_CLASS</code></b>
	 */
	define('TIDY_ATTR_CLASS', null);

	/**
	 * <b><code>TIDY_ATTR_CLASSID</code></b>
	 */
	define('TIDY_ATTR_CLASSID', null);

	/**
	 * <b><code>TIDY_ATTR_CLEAR</code></b>
	 */
	define('TIDY_ATTR_CLEAR', null);

	/**
	 * <b><code>TIDY_ATTR_CODE</code></b>
	 */
	define('TIDY_ATTR_CODE', null);

	/**
	 * <b><code>TIDY_ATTR_CODEBASE</code></b>
	 */
	define('TIDY_ATTR_CODEBASE', null);

	/**
	 * <b><code>TIDY_ATTR_CODETYPE</code></b>
	 */
	define('TIDY_ATTR_CODETYPE', null);

	/**
	 * <b><code>TIDY_ATTR_COLOR</code></b>
	 */
	define('TIDY_ATTR_COLOR', null);

	/**
	 * <b><code>TIDY_ATTR_COLS</code></b>
	 */
	define('TIDY_ATTR_COLS', null);

	/**
	 * <b><code>TIDY_ATTR_COLSPAN</code></b>
	 */
	define('TIDY_ATTR_COLSPAN', null);

	/**
	 * <b><code>TIDY_ATTR_COMPACT</code></b>
	 */
	define('TIDY_ATTR_COMPACT', null);

	/**
	 * <b><code>TIDY_ATTR_CONTENT</code></b>
	 */
	define('TIDY_ATTR_CONTENT', null);

	/**
	 * <b><code>TIDY_ATTR_COORDS</code></b>
	 */
	define('TIDY_ATTR_COORDS', null);

	/**
	 * <b><code>TIDY_ATTR_DATA</code></b>
	 */
	define('TIDY_ATTR_DATA', null);

	/**
	 * <b><code>TIDY_ATTR_DATAFLD</code></b>
	 */
	define('TIDY_ATTR_DATAFLD', null);

	/**
	 * <b><code>TIDY_ATTR_DATAPAGESIZE</code></b>
	 */
	define('TIDY_ATTR_DATAPAGESIZE', null);

	/**
	 * <b><code>TIDY_ATTR_DATASRC</code></b>
	 */
	define('TIDY_ATTR_DATASRC', null);

	/**
	 * <b><code>TIDY_ATTR_DATETIME</code></b>
	 */
	define('TIDY_ATTR_DATETIME', null);

	/**
	 * <b><code>TIDY_ATTR_DECLARE</code></b>
	 */
	define('TIDY_ATTR_DECLARE', null);

	/**
	 * <b><code>TIDY_ATTR_DEFER</code></b>
	 */
	define('TIDY_ATTR_DEFER', null);

	/**
	 * <b><code>TIDY_ATTR_DIR</code></b>
	 */
	define('TIDY_ATTR_DIR', null);

	/**
	 * <b><code>TIDY_ATTR_DISABLED</code></b>
	 */
	define('TIDY_ATTR_DISABLED', null);

	/**
	 * <b><code>TIDY_ATTR_ENCODING</code></b>
	 */
	define('TIDY_ATTR_ENCODING', null);

	/**
	 * <b><code>TIDY_ATTR_ENCTYPE</code></b>
	 */
	define('TIDY_ATTR_ENCTYPE', null);

	/**
	 * <b><code>TIDY_ATTR_FACE</code></b>
	 */
	define('TIDY_ATTR_FACE', null);

	/**
	 * <b><code>TIDY_ATTR_FOR</code></b>
	 */
	define('TIDY_ATTR_FOR', null);

	/**
	 * <b><code>TIDY_ATTR_FRAME</code></b>
	 */
	define('TIDY_ATTR_FRAME', null);

	/**
	 * <b><code>TIDY_ATTR_FRAMEBORDER</code></b>
	 */
	define('TIDY_ATTR_FRAMEBORDER', null);

	/**
	 * <b><code>TIDY_ATTR_FRAMESPACING</code></b>
	 */
	define('TIDY_ATTR_FRAMESPACING', null);

	/**
	 * <b><code>TIDY_ATTR_GRIDX</code></b>
	 */
	define('TIDY_ATTR_GRIDX', null);

	/**
	 * <b><code>TIDY_ATTR_GRIDY</code></b>
	 */
	define('TIDY_ATTR_GRIDY', null);

	/**
	 * <b><code>TIDY_ATTR_HEADERS</code></b>
	 */
	define('TIDY_ATTR_HEADERS', null);

	/**
	 * <b><code>TIDY_ATTR_HEIGHT</code></b>
	 */
	define('TIDY_ATTR_HEIGHT', null);

	/**
	 * <b><code>TIDY_ATTR_HREF</code></b>
	 */
	define('TIDY_ATTR_HREF', null);

	/**
	 * <b><code>TIDY_ATTR_HREFLANG</code></b>
	 */
	define('TIDY_ATTR_HREFLANG', null);

	/**
	 * <b><code>TIDY_ATTR_HSPACE</code></b>
	 */
	define('TIDY_ATTR_HSPACE', null);

	/**
	 * <b><code>TIDY_ATTR_HTTP_EQUIV</code></b>
	 */
	define('TIDY_ATTR_HTTP_EQUIV', null);

	/**
	 * <b><code>TIDY_ATTR_ID</code></b>
	 */
	define('TIDY_ATTR_ID', null);

	/**
	 * <b><code>TIDY_ATTR_ISMAP</code></b>
	 */
	define('TIDY_ATTR_ISMAP', null);

	/**
	 * <b><code>TIDY_ATTR_LABEL</code></b>
	 */
	define('TIDY_ATTR_LABEL', null);

	/**
	 * <b><code>TIDY_ATTR_LANG</code></b>
	 */
	define('TIDY_ATTR_LANG', null);

	/**
	 * <b><code>TIDY_ATTR_LANGUAGE</code></b>
	 */
	define('TIDY_ATTR_LANGUAGE', null);

	/**
	 * <b><code>TIDY_ATTR_LAST_MODIFIED</code></b>
	 */
	define('TIDY_ATTR_LAST_MODIFIED', null);

	/**
	 * <b><code>TIDY_ATTR_LAST_VISIT</code></b>
	 */
	define('TIDY_ATTR_LAST_VISIT', null);

	/**
	 * <b><code>TIDY_ATTR_LEFTMARGIN</code></b>
	 */
	define('TIDY_ATTR_LEFTMARGIN', null);

	/**
	 * <b><code>TIDY_ATTR_LINK</code></b>
	 */
	define('TIDY_ATTR_LINK', null);

	/**
	 * <b><code>TIDY_ATTR_LONGDESC</code></b>
	 */
	define('TIDY_ATTR_LONGDESC', null);

	/**
	 * <b><code>TIDY_ATTR_LOWSRC</code></b>
	 */
	define('TIDY_ATTR_LOWSRC', null);

	/**
	 * <b><code>TIDY_ATTR_MARGINHEIGHT</code></b>
	 */
	define('TIDY_ATTR_MARGINHEIGHT', null);

	/**
	 * <b><code>TIDY_ATTR_MARGINWIDTH</code></b>
	 */
	define('TIDY_ATTR_MARGINWIDTH', null);

	/**
	 * <b><code>TIDY_ATTR_MAXLENGTH</code></b>
	 */
	define('TIDY_ATTR_MAXLENGTH', null);

	/**
	 * <b><code>TIDY_ATTR_MEDIA</code></b>
	 */
	define('TIDY_ATTR_MEDIA', null);

	/**
	 * <b><code>TIDY_ATTR_METHOD</code></b>
	 */
	define('TIDY_ATTR_METHOD', null);

	/**
	 * <b><code>TIDY_ATTR_MULTIPLE</code></b>
	 */
	define('TIDY_ATTR_MULTIPLE', null);

	/**
	 * <b><code>TIDY_ATTR_NAME</code></b>
	 */
	define('TIDY_ATTR_NAME', null);

	/**
	 * <b><code>TIDY_ATTR_NOHREF</code></b>
	 */
	define('TIDY_ATTR_NOHREF', null);

	/**
	 * <b><code>TIDY_ATTR_NORESIZE</code></b>
	 */
	define('TIDY_ATTR_NORESIZE', null);

	/**
	 * <b><code>TIDY_ATTR_NOSHADE</code></b>
	 */
	define('TIDY_ATTR_NOSHADE', null);

	/**
	 * <b><code>TIDY_ATTR_NOWRAP</code></b>
	 */
	define('TIDY_ATTR_NOWRAP', null);

	/**
	 * <b><code>TIDY_ATTR_OBJECT</code></b>
	 */
	define('TIDY_ATTR_OBJECT', null);

	/**
	 * <b><code>TIDY_ATTR_OnAFTERUPDATE</code></b>
	 */
	define('TIDY_ATTR_OnAFTERUPDATE', null);

	/**
	 * <b><code>TIDY_ATTR_OnBEFOREUNLOAD</code></b>
	 */
	define('TIDY_ATTR_OnBEFOREUNLOAD', null);

	/**
	 * <b><code>TIDY_ATTR_OnBEFOREUPDATE</code></b>
	 */
	define('TIDY_ATTR_OnBEFOREUPDATE', null);

	/**
	 * <b><code>TIDY_ATTR_OnBLUR</code></b>
	 */
	define('TIDY_ATTR_OnBLUR', null);

	/**
	 * <b><code>TIDY_ATTR_OnCHANGE</code></b>
	 */
	define('TIDY_ATTR_OnCHANGE', null);

	/**
	 * <b><code>TIDY_ATTR_OnCLICK</code></b>
	 */
	define('TIDY_ATTR_OnCLICK', null);

	/**
	 * <b><code>TIDY_ATTR_OnDATAAVAILABLE</code></b>
	 */
	define('TIDY_ATTR_OnDATAAVAILABLE', null);

	/**
	 * <b><code>TIDY_ATTR_OnDATASETCHANGED</code></b>
	 */
	define('TIDY_ATTR_OnDATASETCHANGED', null);

	/**
	 * <b><code>TIDY_ATTR_OnDATASETCOMPLETE</code></b>
	 */
	define('TIDY_ATTR_OnDATASETCOMPLETE', null);

	/**
	 * <b><code>TIDY_ATTR_OnDBLCLICK</code></b>
	 */
	define('TIDY_ATTR_OnDBLCLICK', null);

	/**
	 * <b><code>TIDY_ATTR_OnERRORUPDATE</code></b>
	 */
	define('TIDY_ATTR_OnERRORUPDATE', null);

	/**
	 * <b><code>TIDY_ATTR_OnFOCUS</code></b>
	 */
	define('TIDY_ATTR_OnFOCUS', null);

	/**
	 * <b><code>TIDY_ATTR_OnKEYDOWN</code></b>
	 */
	define('TIDY_ATTR_OnKEYDOWN', null);

	/**
	 * <b><code>TIDY_ATTR_OnKEYPRESS</code></b>
	 */
	define('TIDY_ATTR_OnKEYPRESS', null);

	/**
	 * <b><code>TIDY_ATTR_OnKEYUP</code></b>
	 */
	define('TIDY_ATTR_OnKEYUP', null);

	/**
	 * <b><code>TIDY_ATTR_OnLOAD</code></b>
	 */
	define('TIDY_ATTR_OnLOAD', null);

	/**
	 * <b><code>TIDY_ATTR_OnMOUSEDOWN</code></b>
	 */
	define('TIDY_ATTR_OnMOUSEDOWN', null);

	/**
	 * <b><code>TIDY_ATTR_OnMOUSEMOVE</code></b>
	 */
	define('TIDY_ATTR_OnMOUSEMOVE', null);

	/**
	 * <b><code>TIDY_ATTR_OnMOUSEOUT</code></b>
	 */
	define('TIDY_ATTR_OnMOUSEOUT', null);

	/**
	 * <b><code>TIDY_ATTR_OnMOUSEOVER</code></b>
	 */
	define('TIDY_ATTR_OnMOUSEOVER', null);

	/**
	 * <b><code>TIDY_ATTR_OnMOUSEUP</code></b>
	 */
	define('TIDY_ATTR_OnMOUSEUP', null);

	/**
	 * <b><code>TIDY_ATTR_OnRESET</code></b>
	 */
	define('TIDY_ATTR_OnRESET', null);

	/**
	 * <b><code>TIDY_ATTR_OnROWENTER</code></b>
	 */
	define('TIDY_ATTR_OnROWENTER', null);

	/**
	 * <b><code>TIDY_ATTR_OnROWEXIT</code></b>
	 */
	define('TIDY_ATTR_OnROWEXIT', null);

	/**
	 * <b><code>TIDY_ATTR_OnSELECT</code></b>
	 */
	define('TIDY_ATTR_OnSELECT', null);

	/**
	 * <b><code>TIDY_ATTR_OnSUBMIT</code></b>
	 */
	define('TIDY_ATTR_OnSUBMIT', null);

	/**
	 * <b><code>TIDY_ATTR_OnUNLOAD</code></b>
	 */
	define('TIDY_ATTR_OnUNLOAD', null);

	/**
	 * <b><code>TIDY_ATTR_PROFILE</code></b>
	 */
	define('TIDY_ATTR_PROFILE', null);

	/**
	 * <b><code>TIDY_ATTR_PROMPT</code></b>
	 */
	define('TIDY_ATTR_PROMPT', null);

	/**
	 * <b><code>TIDY_ATTR_RBSPAN</code></b>
	 */
	define('TIDY_ATTR_RBSPAN', null);

	/**
	 * <b><code>TIDY_ATTR_READONLY</code></b>
	 */
	define('TIDY_ATTR_READONLY', null);

	/**
	 * <b><code>TIDY_ATTR_REL</code></b>
	 */
	define('TIDY_ATTR_REL', null);

	/**
	 * <b><code>TIDY_ATTR_REV</code></b>
	 */
	define('TIDY_ATTR_REV', null);

	/**
	 * <b><code>TIDY_ATTR_RIGHTMARGIN</code></b>
	 */
	define('TIDY_ATTR_RIGHTMARGIN', null);

	/**
	 * <b><code>TIDY_ATTR_ROWS</code></b>
	 */
	define('TIDY_ATTR_ROWS', null);

	/**
	 * <b><code>TIDY_ATTR_ROWSPAN</code></b>
	 */
	define('TIDY_ATTR_ROWSPAN', null);

	/**
	 * <b><code>TIDY_ATTR_RULES</code></b>
	 */
	define('TIDY_ATTR_RULES', null);

	/**
	 * <b><code>TIDY_ATTR_SCHEME</code></b>
	 */
	define('TIDY_ATTR_SCHEME', null);

	/**
	 * <b><code>TIDY_ATTR_SCOPE</code></b>
	 */
	define('TIDY_ATTR_SCOPE', null);

	/**
	 * <b><code>TIDY_ATTR_SCROLLING</code></b>
	 */
	define('TIDY_ATTR_SCROLLING', null);

	/**
	 * <b><code>TIDY_ATTR_SELECTED</code></b>
	 */
	define('TIDY_ATTR_SELECTED', null);

	/**
	 * <b><code>TIDY_ATTR_SHAPE</code></b>
	 */
	define('TIDY_ATTR_SHAPE', null);

	/**
	 * <b><code>TIDY_ATTR_SHOWGRID</code></b>
	 */
	define('TIDY_ATTR_SHOWGRID', null);

	/**
	 * <b><code>TIDY_ATTR_SHOWGRIDX</code></b>
	 */
	define('TIDY_ATTR_SHOWGRIDX', null);

	/**
	 * <b><code>TIDY_ATTR_SHOWGRIDY</code></b>
	 */
	define('TIDY_ATTR_SHOWGRIDY', null);

	/**
	 * <b><code>TIDY_ATTR_SIZE</code></b>
	 */
	define('TIDY_ATTR_SIZE', null);

	/**
	 * <b><code>TIDY_ATTR_SPAN</code></b>
	 */
	define('TIDY_ATTR_SPAN', null);

	/**
	 * <b><code>TIDY_ATTR_SRC</code></b>
	 */
	define('TIDY_ATTR_SRC', null);

	/**
	 * <b><code>TIDY_ATTR_STANDBY</code></b>
	 */
	define('TIDY_ATTR_STANDBY', null);

	/**
	 * <b><code>TIDY_ATTR_START</code></b>
	 */
	define('TIDY_ATTR_START', null);

	/**
	 * <b><code>TIDY_ATTR_STYLE</code></b>
	 */
	define('TIDY_ATTR_STYLE', null);

	/**
	 * <b><code>TIDY_ATTR_SUMMARY</code></b>
	 */
	define('TIDY_ATTR_SUMMARY', null);

	/**
	 * <b><code>TIDY_ATTR_TABINDEX</code></b>
	 */
	define('TIDY_ATTR_TABINDEX', null);

	/**
	 * <b><code>TIDY_ATTR_TARGET</code></b>
	 */
	define('TIDY_ATTR_TARGET', null);

	/**
	 * <b><code>TIDY_ATTR_TEXT</code></b>
	 */
	define('TIDY_ATTR_TEXT', null);

	/**
	 * <b><code>TIDY_ATTR_TITLE</code></b>
	 */
	define('TIDY_ATTR_TITLE', null);

	/**
	 * <b><code>TIDY_ATTR_TOPMARGIN</code></b>
	 */
	define('TIDY_ATTR_TOPMARGIN', null);

	/**
	 * <b><code>TIDY_ATTR_TYPE</code></b>
	 */
	define('TIDY_ATTR_TYPE', null);

	/**
	 * <b><code>TIDY_ATTR_UNKNOWN</code></b>
	 */
	define('TIDY_ATTR_UNKNOWN', null);

	/**
	 * <b><code>TIDY_ATTR_USEMAP</code></b>
	 */
	define('TIDY_ATTR_USEMAP', null);

	/**
	 * <b><code>TIDY_ATTR_VALIGN</code></b>
	 */
	define('TIDY_ATTR_VALIGN', null);

	/**
	 * <b><code>TIDY_ATTR_VALUE</code></b>
	 */
	define('TIDY_ATTR_VALUE', null);

	/**
	 * <b><code>TIDY_ATTR_VALUETYPE</code></b>
	 */
	define('TIDY_ATTR_VALUETYPE', null);

	/**
	 * <b><code>TIDY_ATTR_VERSION</code></b>
	 */
	define('TIDY_ATTR_VERSION', null);

	/**
	 * <b><code>TIDY_ATTR_VLINK</code></b>
	 */
	define('TIDY_ATTR_VLINK', null);

	/**
	 * <b><code>TIDY_ATTR_VSPACE</code></b>
	 */
	define('TIDY_ATTR_VSPACE', null);

	/**
	 * <b><code>TIDY_ATTR_WIDTH</code></b>
	 */
	define('TIDY_ATTR_WIDTH', null);

	/**
	 * <b><code>TIDY_ATTR_WRAP</code></b>
	 */
	define('TIDY_ATTR_WRAP', null);

	/**
	 * <b><code>TIDY_ATTR_XML_LANG</code></b>
	 */
	define('TIDY_ATTR_XML_LANG', null);

	/**
	 * <b><code>TIDY_ATTR_XML_SPACE</code></b>
	 */
	define('TIDY_ATTR_XML_SPACE', null);

	/**
	 * <b><code>TIDY_ATTR_XMLNS</code></b>
	 */
	define('TIDY_ATTR_XMLNS', null);

	/**
	 * ASP コード
	 */
	define('TIDY_NODETYPE_ASP', null);

	/**
	 * CDATA
	 */
	define('TIDY_NODETYPE_CDATA', null);

	/**
	 * HTML コメント
	 */
	define('TIDY_NODETYPE_COMMENT', null);

	/**
	 * 文章型
	 */
	define('TIDY_NODETYPE_DOCTYPE', null);

	/**
	 * 終了タグ
	 */
	define('TIDY_NODETYPE_END', null);

	/**
	 * JSTE コード
	 */
	define('TIDY_NODETYPE_JSTE', null);

	/**
	 * PHP コード
	 */
	define('TIDY_NODETYPE_PHP', null);

	/**
	 * 処理命令
	 */
	define('TIDY_NODETYPE_PROCINS', null);

	/**
	 * ルートノード
	 */
	define('TIDY_NODETYPE_ROOT', null);

	/**
	 * XML セクション
	 */
	define('TIDY_NODETYPE_SECTION', null);

	/**
	 * 開始タグ
	 */
	define('TIDY_NODETYPE_START', null);

	/**
	 * 空タグ
	 */
	define('TIDY_NODETYPE_STARTEND', null);

	/**
	 * テキスト
	 */
	define('TIDY_NODETYPE_TEXT', null);

	/**
	 * XML 宣言
	 */
	define('TIDY_NODETYPE_XMLDECL', null);

	/**
	 * <b><code>TIDY_TAG_A</code></b>
	 */
	define('TIDY_TAG_A', null);

	/**
	 * <b><code>TIDY_TAG_ABBR</code></b>
	 */
	define('TIDY_TAG_ABBR', null);

	/**
	 * <b><code>TIDY_TAG_ACRONYM</code></b>
	 */
	define('TIDY_TAG_ACRONYM', null);

	/**
	 * <b><code>TIDY_TAG_ALIGN</code></b>
	 */
	define('TIDY_TAG_ALIGN', null);

	/**
	 * <b><code>TIDY_TAG_APPLET</code></b>
	 */
	define('TIDY_TAG_APPLET', null);

	/**
	 * <b><code>TIDY_TAG_AREA</code></b>
	 */
	define('TIDY_TAG_AREA', null);

	/**
	 * <b><code>TIDY_TAG_B</code></b>
	 */
	define('TIDY_TAG_B', null);

	/**
	 * <b><code>TIDY_TAG_BASE</code></b>
	 */
	define('TIDY_TAG_BASE', null);

	/**
	 * <b><code>TIDY_TAG_BASEFONT</code></b>
	 */
	define('TIDY_TAG_BASEFONT', null);

	/**
	 * <b><code>TIDY_TAG_BDO</code></b>
	 */
	define('TIDY_TAG_BDO', null);

	/**
	 * <b><code>TIDY_TAG_BGSOUND</code></b>
	 */
	define('TIDY_TAG_BGSOUND', null);

	/**
	 * <b><code>TIDY_TAG_BIG</code></b>
	 */
	define('TIDY_TAG_BIG', null);

	/**
	 * <b><code>TIDY_TAG_BLINK</code></b>
	 */
	define('TIDY_TAG_BLINK', null);

	/**
	 * <b><code>TIDY_TAG_BLOCKQUOTE</code></b>
	 */
	define('TIDY_TAG_BLOCKQUOTE', null);

	/**
	 * <b><code>TIDY_TAG_BODY</code></b>
	 */
	define('TIDY_TAG_BODY', null);

	/**
	 * <b><code>TIDY_TAG_BR</code></b>
	 */
	define('TIDY_TAG_BR', null);

	/**
	 * <b><code>TIDY_TAG_BUTTON</code></b>
	 */
	define('TIDY_TAG_BUTTON', null);

	/**
	 * <b><code>TIDY_TAG_CAPTION</code></b>
	 */
	define('TIDY_TAG_CAPTION', null);

	/**
	 * <b><code>TIDY_TAG_CENTER</code></b>
	 */
	define('TIDY_TAG_CENTER', null);

	/**
	 * <b><code>TIDY_TAG_CITE</code></b>
	 */
	define('TIDY_TAG_CITE', null);

	/**
	 * <b><code>TIDY_TAG_CODE</code></b>
	 */
	define('TIDY_TAG_CODE', null);

	/**
	 * <b><code>TIDY_TAG_COL</code></b>
	 */
	define('TIDY_TAG_COL', null);

	/**
	 * <b><code>TIDY_TAG_COLGROUP</code></b>
	 */
	define('TIDY_TAG_COLGROUP', null);

	/**
	 * <b><code>TIDY_TAG_COMMENT</code></b>
	 */
	define('TIDY_TAG_COMMENT', null);

	/**
	 * <b><code>TIDY_TAG_DD</code></b>
	 */
	define('TIDY_TAG_DD', null);

	/**
	 * <b><code>TIDY_TAG_DEL</code></b>
	 */
	define('TIDY_TAG_DEL', null);

	/**
	 * <b><code>TIDY_TAG_DFN</code></b>
	 */
	define('TIDY_TAG_DFN', null);

	/**
	 * <b><code>TIDY_TAG_DIR</code></b>
	 */
	define('TIDY_TAG_DIR', null);

	/**
	 * <b><code>TIDY_TAG_DIV</code></b>
	 */
	define('TIDY_TAG_DIV', null);

	/**
	 * <b><code>TIDY_TAG_DL</code></b>
	 */
	define('TIDY_TAG_DL', null);

	/**
	 * <b><code>TIDY_TAG_DT</code></b>
	 */
	define('TIDY_TAG_DT', null);

	/**
	 * <b><code>TIDY_TAG_EM</code></b>
	 */
	define('TIDY_TAG_EM', null);

	/**
	 * <b><code>TIDY_TAG_EMBED</code></b>
	 */
	define('TIDY_TAG_EMBED', null);

	/**
	 * <b><code>TIDY_TAG_FIELDSET</code></b>
	 */
	define('TIDY_TAG_FIELDSET', null);

	/**
	 * <b><code>TIDY_TAG_FONT</code></b>
	 */
	define('TIDY_TAG_FONT', null);

	/**
	 * <b><code>TIDY_TAG_FORM</code></b>
	 */
	define('TIDY_TAG_FORM', null);

	/**
	 * <b><code>TIDY_TAG_FRAME</code></b>
	 */
	define('TIDY_TAG_FRAME', null);

	/**
	 * <b><code>TIDY_TAG_FRAMESET</code></b>
	 */
	define('TIDY_TAG_FRAMESET', null);

	/**
	 * <b><code>TIDY_TAG_H1</code></b>
	 */
	define('TIDY_TAG_H1', null);

	/**
	 * <b><code>TIDY_TAG_H2</code></b>
	 */
	define('TIDY_TAG_H2', null);

	/**
	 * <b><code>TIDY_TAG_H3</code></b>
	 */
	define('TIDY_TAG_H3', null);

	/**
	 * <b><code>TIDY_TAG_H4</code></b>
	 */
	define('TIDY_TAG_H4', null);

	/**
	 * <b><code>TIDY_TAG_H5</code></b>
	 */
	define('TIDY_TAG_H5', null);

	/**
	 * <b><code>TIDY_TAG_H6</code></b>
	 */
	define('TIDY_TAG_H6', null);

	/**
	 * <b><code>TIDY_TAG_HEAD</code></b>
	 */
	define('TIDY_TAG_HEAD', null);

	/**
	 * <b><code>TIDY_TAG_HR</code></b>
	 */
	define('TIDY_TAG_HR', null);

	/**
	 * <b><code>TIDY_TAG_HTML</code></b>
	 */
	define('TIDY_TAG_HTML', null);

	/**
	 * <b><code>TIDY_TAG_I</code></b>
	 */
	define('TIDY_TAG_I', null);

	/**
	 * <b><code>TIDY_TAG_IFRAME</code></b>
	 */
	define('TIDY_TAG_IFRAME', null);

	/**
	 * <b><code>TIDY_TAG_ILAYER</code></b>
	 */
	define('TIDY_TAG_ILAYER', null);

	/**
	 * <b><code>TIDY_TAG_IMG</code></b>
	 */
	define('TIDY_TAG_IMG', null);

	/**
	 * <b><code>TIDY_TAG_INPUT</code></b>
	 */
	define('TIDY_TAG_INPUT', null);

	/**
	 * <b><code>TIDY_TAG_INS</code></b>
	 */
	define('TIDY_TAG_INS', null);

	/**
	 * <b><code>TIDY_TAG_ISINDEX</code></b>
	 */
	define('TIDY_TAG_ISINDEX', null);

	/**
	 * <b><code>TIDY_TAG_KBD</code></b>
	 */
	define('TIDY_TAG_KBD', null);

	/**
	 * <b><code>TIDY_TAG_KEYGEN</code></b>
	 */
	define('TIDY_TAG_KEYGEN', null);

	/**
	 * <b><code>TIDY_TAG_LABEL</code></b>
	 */
	define('TIDY_TAG_LABEL', null);

	/**
	 * <b><code>TIDY_TAG_LAYER</code></b>
	 */
	define('TIDY_TAG_LAYER', null);

	/**
	 * <b><code>TIDY_TAG_LEGEND</code></b>
	 */
	define('TIDY_TAG_LEGEND', null);

	/**
	 * <b><code>TIDY_TAG_LI</code></b>
	 */
	define('TIDY_TAG_LI', null);

	/**
	 * <b><code>TIDY_TAG_LINK</code></b>
	 */
	define('TIDY_TAG_LINK', null);

	/**
	 * <b><code>TIDY_TAG_LISTING</code></b>
	 */
	define('TIDY_TAG_LISTING', null);

	/**
	 * <b><code>TIDY_TAG_MAP</code></b>
	 */
	define('TIDY_TAG_MAP', null);

	/**
	 * <b><code>TIDY_TAG_MARQUEE</code></b>
	 */
	define('TIDY_TAG_MARQUEE', null);

	/**
	 * <b><code>TIDY_TAG_MENU</code></b>
	 */
	define('TIDY_TAG_MENU', null);

	/**
	 * <b><code>TIDY_TAG_META</code></b>
	 */
	define('TIDY_TAG_META', null);

	/**
	 * <b><code>TIDY_TAG_MULTICOL</code></b>
	 */
	define('TIDY_TAG_MULTICOL', null);

	/**
	 * <b><code>TIDY_TAG_NOBR</code></b>
	 */
	define('TIDY_TAG_NOBR', null);

	/**
	 * <b><code>TIDY_TAG_NOEMBED</code></b>
	 */
	define('TIDY_TAG_NOEMBED', null);

	/**
	 * <b><code>TIDY_TAG_NOFRAMES</code></b>
	 */
	define('TIDY_TAG_NOFRAMES', null);

	/**
	 * <b><code>TIDY_TAG_NOLAYER</code></b>
	 */
	define('TIDY_TAG_NOLAYER', null);

	/**
	 * <b><code>TIDY_TAG_NOSAVE</code></b>
	 */
	define('TIDY_TAG_NOSAVE', null);

	/**
	 * <b><code>TIDY_TAG_NOSCRIPT</code></b>
	 */
	define('TIDY_TAG_NOSCRIPT', null);

	/**
	 * <b><code>TIDY_TAG_OBJECT</code></b>
	 */
	define('TIDY_TAG_OBJECT', null);

	/**
	 * <b><code>TIDY_TAG_OL</code></b>
	 */
	define('TIDY_TAG_OL', null);

	/**
	 * <b><code>TIDY_TAG_OPTGROUP</code></b>
	 */
	define('TIDY_TAG_OPTGROUP', null);

	/**
	 * <b><code>TIDY_TAG_OPTION</code></b>
	 */
	define('TIDY_TAG_OPTION', null);

	/**
	 * <b><code>TIDY_TAG_P</code></b>
	 */
	define('TIDY_TAG_P', null);

	/**
	 * <b><code>TIDY_TAG_PARAM</code></b>
	 */
	define('TIDY_TAG_PARAM', null);

	/**
	 * <b><code>TIDY_TAG_PLAINTEXT</code></b>
	 */
	define('TIDY_TAG_PLAINTEXT', null);

	/**
	 * <b><code>TIDY_TAG_PRE</code></b>
	 */
	define('TIDY_TAG_PRE', null);

	/**
	 * <b><code>TIDY_TAG_Q</code></b>
	 */
	define('TIDY_TAG_Q', null);

	/**
	 * <b><code>TIDY_TAG_RP</code></b>
	 */
	define('TIDY_TAG_RP', null);

	/**
	 * <b><code>TIDY_TAG_RT</code></b>
	 */
	define('TIDY_TAG_RT', null);

	/**
	 * <b><code>TIDY_TAG_RTC</code></b>
	 */
	define('TIDY_TAG_RTC', null);

	/**
	 * <b><code>TIDY_TAG_RUBY</code></b>
	 */
	define('TIDY_TAG_RUBY', null);

	/**
	 * <b><code>TIDY_TAG_S</code></b>
	 */
	define('TIDY_TAG_S', null);

	/**
	 * <b><code>TIDY_TAG_SAMP</code></b>
	 */
	define('TIDY_TAG_SAMP', null);

	/**
	 * <b><code>TIDY_TAG_SCRIPT</code></b>
	 */
	define('TIDY_TAG_SCRIPT', null);

	/**
	 * <b><code>TIDY_TAG_SELECT</code></b>
	 */
	define('TIDY_TAG_SELECT', null);

	/**
	 * <b><code>TIDY_TAG_SERVER</code></b>
	 */
	define('TIDY_TAG_SERVER', null);

	/**
	 * <b><code>TIDY_TAG_SERVLET</code></b>
	 */
	define('TIDY_TAG_SERVLET', null);

	/**
	 * <b><code>TIDY_TAG_SMALL</code></b>
	 */
	define('TIDY_TAG_SMALL', null);

	/**
	 * <b><code>TIDY_TAG_SPACER</code></b>
	 */
	define('TIDY_TAG_SPACER', null);

	/**
	 * <b><code>TIDY_TAG_SPAN</code></b>
	 */
	define('TIDY_TAG_SPAN', null);

	/**
	 * <b><code>TIDY_TAG_STRIKE</code></b>
	 */
	define('TIDY_TAG_STRIKE', null);

	/**
	 * <b><code>TIDY_TAG_STRONG</code></b>
	 */
	define('TIDY_TAG_STRONG', null);

	/**
	 * <b><code>TIDY_TAG_STYLE</code></b>
	 */
	define('TIDY_TAG_STYLE', null);

	/**
	 * <b><code>TIDY_TAG_SUB</code></b>
	 */
	define('TIDY_TAG_SUB', null);

	/**
	 * <b><code>TIDY_TAG_TABLE</code></b>
	 */
	define('TIDY_TAG_TABLE', null);

	/**
	 * <b><code>TIDY_TAG_TBODY</code></b>
	 */
	define('TIDY_TAG_TBODY', null);

	/**
	 * <b><code>TIDY_TAG_TD</code></b>
	 */
	define('TIDY_TAG_TD', null);

	/**
	 * <b><code>TIDY_TAG_TEXTAREA</code></b>
	 */
	define('TIDY_TAG_TEXTAREA', null);

	/**
	 * <b><code>TIDY_TAG_TFOOT</code></b>
	 */
	define('TIDY_TAG_TFOOT', null);

	/**
	 * <b><code>TIDY_TAG_TH</code></b>
	 */
	define('TIDY_TAG_TH', null);

	/**
	 * <b><code>TIDY_TAG_THEAD</code></b>
	 */
	define('TIDY_TAG_THEAD', null);

	/**
	 * <b><code>TIDY_TAG_TITLE</code></b>
	 */
	define('TIDY_TAG_TITLE', null);

	/**
	 * <b><code>TIDY_TAG_TR</code></b>
	 */
	define('TIDY_TAG_TR', null);

	/**
	 * <b><code>TIDY_TAG_TT</code></b>
	 */
	define('TIDY_TAG_TT', null);

	/**
	 * <b><code>TIDY_TAG_U</code></b>
	 */
	define('TIDY_TAG_U', null);

	/**
	 * <b><code>TIDY_TAG_UL</code></b>
	 */
	define('TIDY_TAG_UL', null);

	/**
	 * <b><code>TIDY_TAG_UNKNOWN</code></b>
	 */
	define('TIDY_TAG_UNKNOWN', null);

	/**
	 * <b><code>TIDY_TAG_VAR</code></b>
	 */
	define('TIDY_TAG_VAR', null);

	/**
	 * <b><code>TIDY_TAG_WBR</code></b>
	 */
	define('TIDY_TAG_WBR', null);

	/**
	 * <b><code>TIDY_TAG_XMP</code></b>
	 */
	define('TIDY_TAG_XMP', null);

}
