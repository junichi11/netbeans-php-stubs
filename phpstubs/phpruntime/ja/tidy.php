<?php

// Start of tidy v.7.0.19

/**
 * HTML ファイル中の HTML ノードで、tidy が検出したものです。
 * @link http://php.net/manual/ja/class.tidy.php
 */
class tidy  {
	/**
	 * @var string
	 */
	public $errorBuffer;


	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
	 * Tidy ドキュメントについて指定した設定オプションの値を返す
	 * @link http://php.net/manual/ja/tidy.getopt.php
	 * @param string $option <p>
	 * それぞれの設定オプションと型の一覧は、http://tidy.sourceforge.net/docs/quickref.html
	 * にあります。
	 * </p>
	 * @return mixed 指定した設定オプション <i>option</i>
	 * の値を返します。
	 * 返される型は、設定オプションの型に依存します。
	 */
	public function getOpt(string $option) {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
	 * パースされたマークアップに設定に基く誤りの修正を行う
	 * @link http://php.net/manual/ja/tidy.cleanrepair.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function cleanRepair(): bool {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
	 * ファイルまたは URI にあるマークアップをパースする
	 * @link http://php.net/manual/ja/tidy.parsefile.php
	 * @param string $filename <p>
	 * もし <i>filename</i> パラメータが与えられた場合、
	 * この関数はファイルを読み込み、<b>tidy_parse_file</b>
	 * のように実行してファイルに基づいたオブジェクトを初期化します。
	 * </p>
	 * @param mixed $config [optional] <p>
	 * <i>config</i> には配列あるいは文字列を渡します。
	 * 文字列を渡した場合は設定ファイルの名前、
	 * それ以外の場合は設定そのものとして解釈されます。
	 * </p>
	 * <p>
	 * オプションについての説明は http://tidy.sourceforge.net/docs/quickref.html
	 * を参照ください。
	 * </p>
	 * @param string $encoding [optional] <p>
	 * <i>encoding</i> は入出力ドキュメントのエンコーディングを設定します。
	 * 指定できるエンコーディング名は
	 * ascii、latin0、latin1、
	 * raw、utf8、iso2022、
	 * mac、win1252、ibm858、
	 * utf16、utf16le、utf16be、
	 * big5 および shiftjis です。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * include_path からファイルを探します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function parseFile(string $filename, $config = null, string $encoding = null, bool $use_include_path = false): bool {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
	 * 文字列にストアされたドキュメントをパースする
	 * @link http://php.net/manual/ja/tidy.parsestring.php
	 * @param string $input <p>
	 * パースするデータ。
	 * </p>
	 * @param mixed $config [optional] <p>
	 * <i>config</i> には配列あるいは文字列を渡します。
	 * 文字列を渡した場合は設定ファイルの名前、
	 * それ以外の場合は設定そのものとして解釈されます。
	 * </p>
	 * <p>
	 * オプションについての説明は http://tidy.sourceforge.net/docs/quickref.html
	 * を参照ください。
	 * </p>
	 * @param string $encoding [optional] <p>
	 * <i>encoding</i> は入出力ドキュメントのエンコーディングを設定します。
	 * 指定できるエンコーディング名は
	 * ascii、latin0、latin1、
	 * raw、utf8、iso2022、
	 * mac、win1252、ibm858、
	 * utf16、utf16le、utf16be、
	 * big5 および shiftjis です。
	 * </p>
	 * @return bool 新しい <b>tidy</b> インスタンスを返します。
	 */
	public function parseString(string $input, $config = null, string $encoding = null): bool {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.7.0)<br/>
	 * 別途提供される設定ファイルを使用して文字列を修正する
	 * @link http://php.net/manual/ja/tidy.repairstring.php
	 * @param string $data <p>
	 * 修正するデータ。
	 * </p>
	 * @param mixed $config [optional] <p>
	 * <i>config</i> には配列あるいは文字列を渡します。
	 * 文字列を渡した場合は設定ファイルの名前、
	 * それ以外の場合は設定そのものとして解釈されます。
	 * </p>
	 * <p>
	 * オプションについての説明は
	 * http://tidy.sourceforge.net/docs/quickref.html
	 * を参照ください。
	 * </p>
	 * @param string $encoding [optional] <p>
	 * <i>encoding</i> は入出力ドキュメントのエンコーディングを設定します。
	 * 指定できるエンコーディング名は
	 * ascii、latin0、latin1、
	 * raw、utf8、iso2022、
	 * mac、win1252、ibm858、
	 * utf16、utf16le、utf16be、
	 * big5 および shiftjis です。
	 * </p>
	 * @return string 修正した文字列を返します。
	 */
	public function repairString(string $data, $config = null, string $encoding = null): string {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.7.0)<br/>
	 * ファイルを修正し、それを文字列として返す
	 * @link http://php.net/manual/ja/tidy.repairfile.php
	 * @param string $filename <p>
	 * 修正するファイル。
	 * </p>
	 * @param mixed $config [optional] <p>
	 * <i>config</i> には配列あるいは文字列を渡します。
	 * 文字列を渡した場合は設定ファイルの名前、
	 * それ以外の場合は設定そのものとして解釈されます。
	 * </p>
	 * <p>
	 * オプションについての説明は
	 * http://tidy.sourceforge.net/docs/quickref.html
	 * を参照ください。
	 * </p>
	 * @param string $encoding [optional] <p>
	 * <i>encoding</i> は入出力ドキュメントのエンコーディングを設定します。
	 * 指定できるエンコーディング名は
	 * ascii、latin0、latin1、
	 * raw、utf8、iso2022、
	 * mac、win1252、ibm858、
	 * utf16、utf16le、utf16be、
	 * big5 および shiftjis です。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * include_path からファイルを探します。
	 * </p>
	 * @return string 修正した内容を文字列で返します。
	 */
	public function repairFile(string $filename, $config = null, string $encoding = null, bool $use_include_path = false): string {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
	 * パース、修正されたマークアップの診断を行う
	 * @link http://php.net/manual/ja/tidy.diagnose.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function diagnose(): bool {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
	 * Tidy ライブラリのリリース日 (バージョン) を取得する
	 * @link http://php.net/manual/ja/tidy.getrelease.php
	 * @return string Tidy ライブラリのリリース日を文字列で返します。
	 */
	public function getRelease(): string {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.7.0)<br/>
	 * 現在の Tidy の設定を取得する
	 * @link http://php.net/manual/ja/tidy.getconfig.php
	 * @return array 設定オプションの配列を返します。
	 * </p>
	 * <p>
	 * それぞれのオプションの説明については、http://tidy.sourceforge.net/docs/quickref.html を参照ください。
	 */
	public function getConfig(): array {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
	 * 指定したドキュメントのステータスを取得する
	 * @link http://php.net/manual/ja/tidy.getstatus.php
	 * @return int エラー/警告が発生しなかった場合は 0、
	 * 警告やアクセイシビリティエラーの場合は 1、
	 * エラーの場合は 2 を返します。
	 */
	public function getStatus(): int {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
	 * 指定したドキュメントで検出された HTML バージョンを取得する
	 * @link http://php.net/manual/ja/tidy.gethtmlver.php
	 * @return int 出された HTML バージョンを返します。
	 * </p>
	 * <p>
	 * この関数は Tidylib 自体でまだ実装されていません。そのため常に
	 * 0 を返します。
	 */
	public function getHtmlVer(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 与えられたオプション名に対するドキュメントを返す
	 * @link http://php.net/manual/ja/tidy.getoptdoc.php
	 * @param string $optname <p>
	 * オプション名。
	 * </p>
	 * @return string オプションが存在し、かつドキュメントが利用可能であれば、文字列を返します。
	 * その他の場合は <b>FALSE</b> を返します。
	 */
	public function getOptDoc(string $optname): string {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
	 * ドキュメントが XHTML ドキュメントかどうかを示す
	 * @link http://php.net/manual/ja/tidy.isxhtml.php
	 * @return bool 指定した Tidy オブジェクト <i>object</i>
	 * が XHTML ドキュメントの場合、この関数は <b>TRUE</b> を返します。
	 * その他の場合は <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * この関数はまだ Tidylib 自身に実装されていません。
	 * なので、常に <b>FALSE</b> を返します。
	 */
	public function isXhtml(): bool {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
	 * ドキュメントが一般的な XML ドキュメント (非 HTML/XHTML) かどうかを示す
	 * @link http://php.net/manual/ja/tidy.isxml.php
	 * @return bool 指定した Tidy オブジェクト <i>object</i>
	 * が一般的な XML ドキュメント (非 HTML/XHTML) の場合、
	 * この関数は <b>TRUE</b> を返します。
	 * その他の場合は <b>FALSE</b> を返します。
	 * </p>
	 * <p>
	 * この関数はまだ Tidylib 自身に実装されていません。
	 * なので、常に <b>FALSE</b> を返します。
	 */
	public function isXml(): bool {}

	/**
	 * (PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0)<br/>
	 * Tidy パースツリーのルートを表す <b>tidyNode</b> を返す
	 * @link http://php.net/manual/ja/tidy.root.php
	 * @return tidyNode <b>tidyNode</b> オブジェクトを返します。
	 */
	public function root(): tidyNode {}

	/**
	 * (PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0)<br/>
	 * Tidy パースツリーの &lt;head&gt; タグから始まる <b>tidyNode</b> オブジェクトを返す
	 * @link http://php.net/manual/ja/tidy.head.php
	 * @return tidyNode <b>tidyNode</b> オブジェクトを返します。
	 */
	public function head(): tidyNode {}

	/**
	 * (PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0)<br/>
	 * Tidy パースツリーの &lt;html&gt; タグから始まる <b>tidyNode</b> オブジェクトを返す
	 * @link http://php.net/manual/ja/tidy.html.php
	 * @return tidyNode <b>tidyNode</b> オブジェクトを返します。
	 */
	public function html(): tidyNode {}

	/**
	 * (PHP 5, PHP 7, PECL tidy 0.5.2-1.0)<br/>
	 * Tidy パースツリーの &lt;body&gt; タグから始まる <b>tidyNode</b> オブジェクトを返す
	 * @link http://php.net/manual/ja/tidy.body.php
	 * @return tidyNode tidy パースツリーの &lt;body&gt; タグから始まる <b>tidyNode</b> オブジェクトを返します。
	 */
	public function body(): tidyNode {}

	/**
	 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
	 * 新しい <b>tidy</b> オブジェクトを作成する
	 * @link http://php.net/manual/ja/tidy.construct.php
	 * @param string $filename [optional] <p>
	 * もし <i>filename</i> パラメータが与えられた場合、
	 * この関数はファイルを読み込み、<b>tidy_parse_file</b>
	 * のように実行してファイルに基づいたオブジェクトを初期化します。
	 * </p>
	 * @param mixed $config [optional] <p>
	 * <i>config</i> には配列あるいは文字列を渡します。
	 * 文字列を渡した場合は設定ファイルの名前、
	 * それ以外の場合は設定そのものとして解釈されます。
	 * </p>
	 * <p>
	 * オプションについての説明は http://tidy.sourceforge.net/docs/quickref.html
	 * を参照ください。
	 * </p>
	 * @param string $encoding [optional] <p>
	 * <i>encoding</i> は入出力ドキュメントのエンコーディングを設定します。
	 * 指定できるエンコーディング名は
	 * ascii、latin0、latin1、
	 * raw、utf8、iso2022、
	 * mac、win1252、ibm858、
	 * utf16、utf16le、utf16be、
	 * big5 および shiftjis です。
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * include_path からファイルを探します。
	 * </p>
	 */
	public function __construct(string $filename = null, $config = null, string $encoding = null, bool $use_include_path = null) {}

}

/**
 * HTML ファイル中の HTML ノードで、tidy が検出したものです。
 * @link http://php.net/manual/ja/class.tidynode.php
 */
final class tidyNode  {
	/**
	 * <p style="margin-top:0;">&#12414;&#12431;&#12426;&#12398;&#12479;&#12464;&#12418;&#21547;&#12416;&#12289;&#12494;&#12540;&#12489;&#12398; HTML &#34920;&#29694;</p>
	 * @var string
	 */
	public $value;
	/**
	 * <p style="margin-top:0;">HTML &#12494;&#12540;&#12489;&#12398;&#21517;&#21069;</p>
	 * @var string
	 */
	public $name;
	/**
	 * <p style="margin-top:0;">&#12479;&#12464;&#12398;&#22411; (&#19978;&#12398;&#23450;&#25968;&#12398;&#12402;&#12392;&#12388;&#12391;&#12289;&#12383;&#12392;&#12360;&#12400; <b><code>TIDY_NODETYPE_PHP</code></b>)</p>
	 * @var int
	 */
	public $type;
	/**
	 * <p style="margin-top:0;">&#12501;&#12449;&#12452;&#12523;&#20869;&#12391;&#12381;&#12398;&#12479;&#12464;&#12364;&#23384;&#22312;&#12377;&#12427;&#34892;&#30058;&#21495;</p>
	 * @var int
	 */
	public $line;
	/**
	 * <p style="margin-top:0;">&#12501;&#12449;&#12452;&#12523;&#20869;&#12391;&#12381;&#12398;&#12479;&#12464;&#12364;&#23384;&#22312;&#12377;&#12427;&#12459;&#12521;&#12512;&#30058;&#21495;</p>
	 * @var int
	 */
	public $column;
	/**
	 * <p style="margin-top:0;">&#12381;&#12398;&#12494;&#12540;&#12489;&#12364;&#29420;&#33258;&#12479;&#12464;&#12391;&#12354;&#12427;&#12363;&#12393;&#12358;&#12363;&#12434;&#34920;&#12377;</p>
	 * @var bool
	 */
	public $proprietary;
	/**
	 * <p style="margin-top:0;">&#12479;&#12464;&#12398; ID (&#19978;&#12398;&#23450;&#25968;&#12398;&#12402;&#12392;&#12388;&#12391;&#12289;&#12383;&#12392;&#12360;&#12400; <b><code>TIDY_TAG_FRAME</code></b>)</p>
	 * @var int
	 */
	public $id;
	/**
	 * <p style="margin-top:0;">
	 * &#29694;&#22312;&#12398;&#12494;&#12540;&#12489;&#12398;&#23646;&#24615;&#21517; (&#12461;&#12540;) &#12434;&#34920;&#12377;&#25991;&#23383;&#21015;&#12398;&#37197;&#21015;
	 * </p>
	 * @var array
	 */
	public $attribute;
	/**
	 * <p style="margin-top:0;">
	 * &#29694;&#22312;&#12398;&#12494;&#12540;&#12489;&#12398;&#23376;&#12434;&#34920;&#12377; <b>tidyNode</b> &#12398;&#37197;&#21015;
	 * </p>
	 * @var array
	 */
	public $child;


	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * ノードが子を持つかどうかを調べる
	 * @link http://php.net/manual/ja/tidynode.haschildren.php
	 * @return bool ノードが子を持つ場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasChildren(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * このノードが兄弟ノードを持つかどうかを調べる
	 * @link http://php.net/manual/ja/tidynode.hassiblings.php
	 * @return bool 兄弟ノードを持つ場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function hasSiblings(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * このノードがコメントを表すものかどうかを調べる
	 * @link http://php.net/manual/ja/tidynode.iscomment.php
	 * @return bool このノードがコメントである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isComment(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * このノードが HTML ドキュメントであるかどうかを調べる
	 * @link http://php.net/manual/ja/tidynode.ishtml.php
	 * @return bool ノードが HTML ドキュメントの一部である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isHtml(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * このノードが (マークアップでない) テキストであるかどうかを調べる
	 * @link http://php.net/manual/ja/tidynode.istext.php
	 * @return bool ノードがテキストを著す場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isText(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * このノードが JSTE であるかどうかを調べる
	 * @link http://php.net/manual/ja/tidynode.isjste.php
	 * @return bool ノードが JSTE である場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isJste(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * このノードが ASP かどうかを調べる
	 * @link http://php.net/manual/ja/tidynode.isasp.php
	 * @return bool ノードが ASP の場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isAsp(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.1, PHP 7)<br/>
	 * このノードが PHP であるかどうかを調べる
	 * @link http://php.net/manual/ja/tidynode.isphp.php
	 * @return bool ノードが PHP コードである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isPhp(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
	 * カレントノードの親ノードを返す
	 * @link http://php.net/manual/ja/tidynode.getparent.php
	 * @return tidyNode そのノードが親を持っている場合に tidyNode、
	 * それ以外の場合に <b>NULL</b> を返します。
	 */
	public function getParent(): tidyNode {}

	private function __construct() {}

}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * Tidy ドキュメントについて指定した設定オプションの値を返す
 * @link http://php.net/manual/ja/tidy.getopt.php
 * @param string $option <p>
 * それぞれの設定オプションと型の一覧は、http://tidy.sourceforge.net/docs/quickref.html
 * にあります。
 * </p>
 * @return mixed 指定した設定オプション <i>option</i>
 * の値を返します。
 * 返される型は、設定オプションの型に依存します。
 */
function tidy_getopt(string $option) {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * 文字列にストアされたドキュメントをパースする
 * @link http://php.net/manual/ja/tidy.parsestring.php
 * @param string $input <p>
 * パースするデータ。
 * </p>
 * @param mixed $config [optional] <p>
 * <i>config</i> には配列あるいは文字列を渡します。
 * 文字列を渡した場合は設定ファイルの名前、
 * それ以外の場合は設定そのものとして解釈されます。
 * </p>
 * <p>
 * オプションについての説明は http://tidy.sourceforge.net/docs/quickref.html
 * を参照ください。
 * </p>
 * @param string $encoding [optional] <p>
 * <i>encoding</i> は入出力ドキュメントのエンコーディングを設定します。
 * 指定できるエンコーディング名は
 * ascii、latin0、latin1、
 * raw、utf8、iso2022、
 * mac、win1252、ibm858、
 * utf16、utf16le、utf16be、
 * big5 および shiftjis です。
 * </p>
 * @return bool 新しい <b>tidy</b> インスタンスを返します。
 */
function tidy_parse_string(string $input, $config = null, string $encoding = null): bool {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * ファイルまたは URI にあるマークアップをパースする
 * @link http://php.net/manual/ja/tidy.parsefile.php
 * @param string $filename <p>
 * もし <i>filename</i> パラメータが与えられた場合、
 * この関数はファイルを読み込み、<b>tidy_parse_file</b>
 * のように実行してファイルに基づいたオブジェクトを初期化します。
 * </p>
 * @param mixed $config [optional] <p>
 * <i>config</i> には配列あるいは文字列を渡します。
 * 文字列を渡した場合は設定ファイルの名前、
 * それ以外の場合は設定そのものとして解釈されます。
 * </p>
 * <p>
 * オプションについての説明は http://tidy.sourceforge.net/docs/quickref.html
 * を参照ください。
 * </p>
 * @param string $encoding [optional] <p>
 * <i>encoding</i> は入出力ドキュメントのエンコーディングを設定します。
 * 指定できるエンコーディング名は
 * ascii、latin0、latin1、
 * raw、utf8、iso2022、
 * mac、win1252、ibm858、
 * utf16、utf16le、utf16be、
 * big5 および shiftjis です。
 * </p>
 * @param bool $use_include_path [optional] <p>
 * include_path からファイルを探します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function tidy_parse_file(string $filename, $config = null, string $encoding = null, bool $use_include_path = false): bool {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * パースされた Tidy マークアップを表す文字列を返す
 * @link http://php.net/manual/ja/function.tidy-get-output.php
 * @param tidy $object <p>
 * <b>Tidy</b> オブジェクト。
 * </p>
 * @return string 修正された HTML を文字列で返します。
 */
function tidy_get_output(tidy $object): string {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * 指定したドキュメントのパースで発生した警告とエラーを返す
 * @link http://php.net/manual/ja/tidy.props.errorbuffer.php
 * @return mixed エラーバッファを文字列で返します。
 */
function tidy_get_error_buffer() {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * パースされたマークアップに設定に基く誤りの修正を行う
 * @link http://php.net/manual/ja/tidy.cleanrepair.php
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function tidy_clean_repair(): bool {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.7.0)<br/>
 * 別途提供される設定ファイルを使用して文字列を修正する
 * @link http://php.net/manual/ja/tidy.repairstring.php
 * @param string $data <p>
 * 修正するデータ。
 * </p>
 * @param mixed $config [optional] <p>
 * <i>config</i> には配列あるいは文字列を渡します。
 * 文字列を渡した場合は設定ファイルの名前、
 * それ以外の場合は設定そのものとして解釈されます。
 * </p>
 * <p>
 * オプションについての説明は
 * http://tidy.sourceforge.net/docs/quickref.html
 * を参照ください。
 * </p>
 * @param string $encoding [optional] <p>
 * <i>encoding</i> は入出力ドキュメントのエンコーディングを設定します。
 * 指定できるエンコーディング名は
 * ascii、latin0、latin1、
 * raw、utf8、iso2022、
 * mac、win1252、ibm858、
 * utf16、utf16le、utf16be、
 * big5 および shiftjis です。
 * </p>
 * @return string 修正した文字列を返します。
 */
function tidy_repair_string(string $data, $config = null, string $encoding = null): string {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.7.0)<br/>
 * ファイルを修正し、それを文字列として返す
 * @link http://php.net/manual/ja/tidy.repairfile.php
 * @param string $filename <p>
 * 修正するファイル。
 * </p>
 * @param mixed $config [optional] <p>
 * <i>config</i> には配列あるいは文字列を渡します。
 * 文字列を渡した場合は設定ファイルの名前、
 * それ以外の場合は設定そのものとして解釈されます。
 * </p>
 * <p>
 * オプションについての説明は
 * http://tidy.sourceforge.net/docs/quickref.html
 * を参照ください。
 * </p>
 * @param string $encoding [optional] <p>
 * <i>encoding</i> は入出力ドキュメントのエンコーディングを設定します。
 * 指定できるエンコーディング名は
 * ascii、latin0、latin1、
 * raw、utf8、iso2022、
 * mac、win1252、ibm858、
 * utf16、utf16le、utf16be、
 * big5 および shiftjis です。
 * </p>
 * @param bool $use_include_path [optional] <p>
 * include_path からファイルを探します。
 * </p>
 * @return string 修正した内容を文字列で返します。
 */
function tidy_repair_file(string $filename, $config = null, string $encoding = null, bool $use_include_path = false): string {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * パース、修正されたマークアップの診断を行う
 * @link http://php.net/manual/ja/tidy.diagnose.php
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function tidy_diagnose(): bool {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * Tidy ライブラリのリリース日 (バージョン) を取得する
 * @link http://php.net/manual/ja/tidy.getrelease.php
 * @return string Tidy ライブラリのリリース日を文字列で返します。
 */
function tidy_get_release(): string {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.7.0)<br/>
 * 現在の Tidy の設定を取得する
 * @link http://php.net/manual/ja/tidy.getconfig.php
 * @return array 設定オプションの配列を返します。
 * </p>
 * <p>
 * それぞれのオプションの説明については、http://tidy.sourceforge.net/docs/quickref.html を参照ください。
 */
function tidy_get_config(): array {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * 指定したドキュメントのステータスを取得する
 * @link http://php.net/manual/ja/tidy.getstatus.php
 * @return int エラー/警告が発生しなかった場合は 0、
 * 警告やアクセイシビリティエラーの場合は 1、
 * エラーの場合は 2 を返します。
 */
function tidy_get_status(): int {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * 指定したドキュメントで検出された HTML バージョンを取得する
 * @link http://php.net/manual/ja/tidy.gethtmlver.php
 * @return int 出された HTML バージョンを返します。
 * </p>
 * <p>
 * この関数は Tidylib 自体でまだ実装されていません。そのため常に
 * 0 を返します。
 */
function tidy_get_html_ver(): int {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * ドキュメントが XHTML ドキュメントかどうかを示す
 * @link http://php.net/manual/ja/tidy.isxhtml.php
 * @return bool 指定した Tidy オブジェクト <i>object</i>
 * が XHTML ドキュメントの場合、この関数は <b>TRUE</b> を返します。
 * その他の場合は <b>FALSE</b> を返します。
 * </p>
 * <p>
 * この関数はまだ Tidylib 自身に実装されていません。
 * なので、常に <b>FALSE</b> を返します。
 */
function tidy_is_xhtml(): bool {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * ドキュメントが一般的な XML ドキュメント (非 HTML/XHTML) かどうかを示す
 * @link http://php.net/manual/ja/tidy.isxml.php
 * @return bool 指定した Tidy オブジェクト <i>object</i>
 * が一般的な XML ドキュメント (非 HTML/XHTML) の場合、
 * この関数は <b>TRUE</b> を返します。
 * その他の場合は <b>FALSE</b> を返します。
 * </p>
 * <p>
 * この関数はまだ Tidylib 自身に実装されていません。
 * なので、常に <b>FALSE</b> を返します。
 */
function tidy_is_xml(): bool {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * 指定したドキュメントについて発生した Tidy エラーの数を返す
 * @link http://php.net/manual/ja/function.tidy-error-count.php
 * @param tidy $object <p>
 * <b>Tidy</b> オブジェクト。
 * </p>
 * @return int エラーの数を返します。
 */
function tidy_error_count(tidy $object): int {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * 指定したドキュメントについて発生した Tidy 警告の数を返す
 * @link http://php.net/manual/ja/function.tidy-warning-count.php
 * @param tidy $object <p>
 * <b>Tidy</b> オブジェクト。
 * </p>
 * @return int 警告の数を返します。
 */
function tidy_warning_count(tidy $object): int {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * 指定したドキュメントについて発生したTidyアクセシビリティ警告の数を返す
 * @link http://php.net/manual/ja/function.tidy-access-count.php
 * @param tidy $object <p>
 * <b>Tidy</b> オブジェクト。
 * </p>
 * @return int 警告の数を返します。
 */
function tidy_access_count(tidy $object): int {}

/**
 * (PHP 5, PHP 7, PECL tidy &gt;= 0.5.2)<br/>
 * 指定したドキュメントについて発生した Tidy 設定エラーの数を返す
 * @link http://php.net/manual/ja/function.tidy-config-count.php
 * @param tidy $object <p>
 * <b>Tidy</b> オブジェクト。
 * </p>
 * @return int エラーの数を返します。
 */
function tidy_config_count(tidy $object): int {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 与えられたオプション名に対するドキュメントを返す
 * @link http://php.net/manual/ja/tidy.getoptdoc.php
 * @param string $optname <p>
 * オプション名。
 * </p>
 * @return string オプションが存在し、かつドキュメントが利用可能であれば、文字列を返します。
 * その他の場合は <b>FALSE</b> を返します。
 */
function tidy_get_opt_doc(string $optname): string {}

/**
 * (PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0)<br/>
 * Tidy パースツリーのルートを表す <b>tidyNode</b> を返す
 * @link http://php.net/manual/ja/tidy.root.php
 * @return tidyNode <b>tidyNode</b> オブジェクトを返します。
 */
function tidy_get_root(): tidyNode {}

/**
 * (PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0)<br/>
 * Tidy パースツリーの &lt;head&gt; タグから始まる <b>tidyNode</b> オブジェクトを返す
 * @link http://php.net/manual/ja/tidy.head.php
 * @return tidyNode <b>tidyNode</b> オブジェクトを返します。
 */
function tidy_get_head(): tidyNode {}

/**
 * (PHP 5, PHP 7, PECL tidy 0.5.2-1.0.0)<br/>
 * Tidy パースツリーの &lt;html&gt; タグから始まる <b>tidyNode</b> オブジェクトを返す
 * @link http://php.net/manual/ja/tidy.html.php
 * @return tidyNode <b>tidyNode</b> オブジェクトを返します。
 */
function tidy_get_html(): tidyNode {}

/**
 * (PHP 5, PHP 7, PECL tidy 0.5.2-1.0)<br/>
 * Tidy パースツリーの &lt;body&gt; タグから始まる <b>tidyNode</b> オブジェクトを返す
 * @link http://php.net/manual/ja/tidy.body.php
 * @param $tidy
 * @return tidyNode tidy パースツリーの &lt;body&gt; タグから始まる <b>tidyNode</b> オブジェクトを返します。
 */
function tidy_get_body($tidy): tidyNode {}


/**
 * 説明
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_TAG_UNKNOWN', 0);
define ('TIDY_TAG_A', 1);
define ('TIDY_TAG_ABBR', 2);
define ('TIDY_TAG_ACRONYM', 3);
define ('TIDY_TAG_ADDRESS', 4);
define ('TIDY_TAG_ALIGN', 5);
define ('TIDY_TAG_APPLET', 6);
define ('TIDY_TAG_AREA', 7);
define ('TIDY_TAG_B', 8);
define ('TIDY_TAG_BASE', 9);
define ('TIDY_TAG_BASEFONT', 10);
define ('TIDY_TAG_BDO', 11);
define ('TIDY_TAG_BGSOUND', 12);
define ('TIDY_TAG_BIG', 13);
define ('TIDY_TAG_BLINK', 14);
define ('TIDY_TAG_BLOCKQUOTE', 15);
define ('TIDY_TAG_BODY', 16);
define ('TIDY_TAG_BR', 17);
define ('TIDY_TAG_BUTTON', 18);
define ('TIDY_TAG_CAPTION', 19);
define ('TIDY_TAG_CENTER', 20);
define ('TIDY_TAG_CITE', 21);
define ('TIDY_TAG_CODE', 22);
define ('TIDY_TAG_COL', 23);
define ('TIDY_TAG_COLGROUP', 24);
define ('TIDY_TAG_COMMENT', 25);
define ('TIDY_TAG_DD', 26);
define ('TIDY_TAG_DEL', 27);
define ('TIDY_TAG_DFN', 28);
define ('TIDY_TAG_DIR', 29);
define ('TIDY_TAG_DIV', 30);
define ('TIDY_TAG_DL', 31);
define ('TIDY_TAG_DT', 32);
define ('TIDY_TAG_EM', 33);
define ('TIDY_TAG_EMBED', 34);
define ('TIDY_TAG_FIELDSET', 35);
define ('TIDY_TAG_FONT', 36);
define ('TIDY_TAG_FORM', 37);
define ('TIDY_TAG_FRAME', 38);
define ('TIDY_TAG_FRAMESET', 39);
define ('TIDY_TAG_H1', 40);
define ('TIDY_TAG_H2', 41);
define ('TIDY_TAG_H3', 42);
define ('TIDY_TAG_H4', 43);
define ('TIDY_TAG_H5', 44);
define ('TIDY_TAG_H6', 45);
define ('TIDY_TAG_HEAD', 46);
define ('TIDY_TAG_HR', 47);
define ('TIDY_TAG_HTML', 48);
define ('TIDY_TAG_I', 49);
define ('TIDY_TAG_IFRAME', 50);
define ('TIDY_TAG_ILAYER', 51);
define ('TIDY_TAG_IMG', 52);
define ('TIDY_TAG_INPUT', 53);
define ('TIDY_TAG_INS', 54);
define ('TIDY_TAG_ISINDEX', 55);
define ('TIDY_TAG_KBD', 56);
define ('TIDY_TAG_KEYGEN', 57);
define ('TIDY_TAG_LABEL', 58);
define ('TIDY_TAG_LAYER', 59);
define ('TIDY_TAG_LEGEND', 60);
define ('TIDY_TAG_LI', 61);
define ('TIDY_TAG_LINK', 62);
define ('TIDY_TAG_LISTING', 63);
define ('TIDY_TAG_MAP', 64);
define ('TIDY_TAG_MARQUEE', 65);
define ('TIDY_TAG_MENU', 66);
define ('TIDY_TAG_META', 67);
define ('TIDY_TAG_MULTICOL', 68);
define ('TIDY_TAG_NOBR', 69);
define ('TIDY_TAG_NOEMBED', 70);
define ('TIDY_TAG_NOFRAMES', 71);
define ('TIDY_TAG_NOLAYER', 72);
define ('TIDY_TAG_NOSAVE', 73);
define ('TIDY_TAG_NOSCRIPT', 74);
define ('TIDY_TAG_OBJECT', 75);
define ('TIDY_TAG_OL', 76);
define ('TIDY_TAG_OPTGROUP', 77);
define ('TIDY_TAG_OPTION', 78);
define ('TIDY_TAG_P', 79);
define ('TIDY_TAG_PARAM', 80);
define ('TIDY_TAG_PLAINTEXT', 81);
define ('TIDY_TAG_PRE', 82);
define ('TIDY_TAG_Q', 83);
define ('TIDY_TAG_RB', 84);
define ('TIDY_TAG_RBC', 85);
define ('TIDY_TAG_RP', 86);
define ('TIDY_TAG_RT', 87);
define ('TIDY_TAG_RTC', 88);
define ('TIDY_TAG_RUBY', 89);
define ('TIDY_TAG_S', 90);
define ('TIDY_TAG_SAMP', 91);
define ('TIDY_TAG_SCRIPT', 92);
define ('TIDY_TAG_SELECT', 93);
define ('TIDY_TAG_SERVER', 94);
define ('TIDY_TAG_SERVLET', 95);
define ('TIDY_TAG_SMALL', 96);
define ('TIDY_TAG_SPACER', 97);
define ('TIDY_TAG_SPAN', 98);
define ('TIDY_TAG_STRIKE', 99);
define ('TIDY_TAG_STRONG', 100);
define ('TIDY_TAG_STYLE', 101);
define ('TIDY_TAG_SUB', 102);
define ('TIDY_TAG_SUP', 103);
define ('TIDY_TAG_TABLE', 104);
define ('TIDY_TAG_TBODY', 105);
define ('TIDY_TAG_TD', 106);
define ('TIDY_TAG_TEXTAREA', 107);
define ('TIDY_TAG_TFOOT', 108);
define ('TIDY_TAG_TH', 109);
define ('TIDY_TAG_THEAD', 110);
define ('TIDY_TAG_TITLE', 111);
define ('TIDY_TAG_TR', 112);
define ('TIDY_TAG_TT', 113);
define ('TIDY_TAG_U', 114);
define ('TIDY_TAG_UL', 115);
define ('TIDY_TAG_VAR', 116);
define ('TIDY_TAG_WBR', 117);
define ('TIDY_TAG_XMP', 118);

/**
 * ルートノード
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_ROOT', 0);

/**
 * 文章型
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_DOCTYPE', 1);

/**
 * HTML コメント
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_COMMENT', 2);

/**
 * 処理命令
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_PROCINS', 3);

/**
 * テキスト
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_TEXT', 4);

/**
 * 開始タグ
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_START', 5);

/**
 * 終了タグ
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_END', 6);

/**
 * 空タグ
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_STARTEND', 7);

/**
 * CDATA
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_CDATA', 8);

/**
 * XML セクション
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_SECTION', 9);

/**
 * ASP コード
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_ASP', 10);

/**
 * JSTE コード
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_JSTE', 11);

/**
 * PHP コード
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_PHP', 12);

/**
 * XML 宣言
 * @link http://php.net/manual/ja/tidy.constants.php
 */
define ('TIDY_NODETYPE_XMLDECL', 13);

// End of tidy v.7.0.19
?>
