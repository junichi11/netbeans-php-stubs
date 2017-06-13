<?php

// Start of libxml v.7.1.5

/**
 * libxml がスローするエラーについてのさまざまな情報を含みます。エラーコードについての説明は、公式の
 * xmlError API ドキュメント
 * をごらんください。
 * @link http://php.net/manual/ja/class.libxmlerror.php
 */
class LibXMLError  {
	/**
	 * <p style="margin-top:0;">
	 * &#12456;&#12521;&#12540;&#12398;&#28145;&#21051;&#24230; (&#27425;&#12398;&#23450;&#25968;
	 * <b><code>LIBXML_ERR_WARNING</code></b>&#12289;
	 * <b><code>LIBXML_ERR_ERROR</code></b> &#12354;&#12427;&#12356;&#12399;
	 * <b><code>LIBXML_ERR_FATAL</code></b> &#12398;&#12356;&#12378;&#12428;&#12363;)&#12290;
	 * </p>
	 * @var int
	 */
	public $level;
	/**
	 * <p style="margin-top:0;">
	 * &#12456;&#12521;&#12540;&#12467;&#12540;&#12489;&#12290;
	 * </p>
	 * @var int
	 */
	public $code;
	/**
	 * <p style="margin-top:0;">
	 * &#12456;&#12521;&#12540;&#12364;&#30330;&#29983;&#12375;&#12383;&#21015;&#12290;
	 * </p>
	 * <p><b>&#27880;&#24847;</b>:
	 * </p><p>
	 * &#12371;&#12398;&#12503;&#12525;&#12497;&#12486;&#12451;&#12399; libxml &#12391;&#23436;&#20840;&#12395;&#12399;&#23455;&#35013;&#12373;&#12428;&#12390;&#12362;&#12425;&#12378;&#12289;&#12375;&#12400;&#12375;&#12400;
	 * 0 &#12364;&#36820;&#12373;&#12428;&#12427;&#12371;&#12392;&#12364;&#12354;&#12426;&#12414;&#12377;&#12290;
	 * </p>
	 * @var int
	 */
	public $column;
	/**
	 * <p style="margin-top:0;">
	 * &#12456;&#12521;&#12540;&#12513;&#12483;&#12475;&#12540;&#12472; (&#23384;&#22312;&#12377;&#12427;&#22580;&#21512;)&#12290;
	 * </p>
	 * @var string
	 */
	public $message;
	/**
	 * <p style="margin-top:0;">&#12501;&#12449;&#12452;&#12523;&#21517;&#12290;XML &#12434;&#25991;&#23383;&#21015;&#12363;&#12425;&#35501;&#12415;&#36796;&#12435;&#12384;&#22580;&#21512;&#12399;&#31354;&#25991;&#23383;&#21015;&#12290;</p>
	 * @var string
	 */
	public $file;
	/**
	 * <p style="margin-top:0;">
	 * &#12456;&#12521;&#12540;&#12364;&#30330;&#29983;&#12375;&#12383;&#34892;&#12290;
	 * </p>
	 * @var int
	 */
	public $line;

}

/**
 * (PHP 5, PHP 7)<br/>
 * 次のlibxmlドキュメントの読込／書きこみのためにストリームコンテキストを設定する
 * @link http://php.net/manual/ja/function.libxml-set-streams-context.php
 * @param resource $streams_context <p>
 * ストリームコンテキストリソース(
 * <b>stream_context_create</b>で作成)
 * </p>
 * @return void 値を返しません。
 */
function libxml_set_streams_context($streams_context): void {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * libxmlエラーを無効にし、ユーザーが必要に応じてエラー情報を取得できるようにする
 * @link http://php.net/manual/ja/function.libxml-use-internal-errors.php
 * @param bool $use_errors [optional] <p>
 * ユーザーによるエラー処理を有効 (<b>TRUE</b>) または無効 (<b>FALSE</b>) にする。
 * 無効にすると、既に存在する libxml のエラーもすべてクリアします。
 * </p>
 * @return bool この関数は、
 * <i>use_errors</i>の前の値を返します。
 */
function libxml_use_internal_errors(bool $use_errors = false): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * libxmlから直近のエラーを取得する
 * @link http://php.net/manual/ja/function.libxml-get-last-error.php
 * @return LibXMLError エラーがバッファにある場合にLibXMLErrorオブジェクト、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function libxml_get_last_error(): LibXMLError {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * libxmlエラーハンドラをクリアする
 * @link http://php.net/manual/ja/function.libxml-clear-errors.php
 * @return void 値を返しません。
 */
function libxml_clear_errors(): void {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * エラー配列を取得する
 * @link http://php.net/manual/ja/function.libxml-get-errors.php
 * @return array エラーがバッファにある場合に LibXMLError オブジェクトの配列、
 * それ以外の場合に空の配列を返します。
 */
function libxml_get_errors(): array {}

/**
 * (PHP 5 &gt;= 5.2.11, PHP 7)<br/>
 * 外部エンティティの読み込み機能を無効にする
 * @link http://php.net/manual/ja/function.libxml-disable-entity-loader.php
 * @param bool $disable [optional] <p>
 * libxml を使用する拡張モジュール
 * (、
 * および ) で、外部エンティティの読み込み機能を
 * 無効 (<b>TRUE</b>) あるいは有効 (<b>FALSE</b>) にします。
 * </p>
 * @return bool 変更前の値を返します。
 */
function libxml_disable_entity_loader(bool $disable = true): bool {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * デフォルトの外部エンティティローダーを変更する
 * @link http://php.net/manual/ja/function.libxml-set-external-entity-loader.php
 * @param callable $resolver_function <p>
 * 三つの引数をとる callable。はじめの二つは文字列でそれぞれ
 * パブリック ID とシステム ID で、残りの一つはコンテキスト (四つのキーを持つ配列) です。
 * このコールバックの返す値は、リソースまたはリソースをオープンできる文字列あるいは
 * <b>NULL</b> でなければなりません。
 * </p>
 * @return void 値を返しません。
 */
function libxml_set_external_entity_loader(callable $resolver_function): void {}


/**
 * 20605 や 20617 のような libxml のバージョン
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_VERSION', 20903);

/**
 * 2.6.5または2.6.17のようなlibxmlのバージョン
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_DOTTED_VERSION', "2.9.3");
define ('LIBXML_LOADED_VERSION', 20903);

/**
 * エンティティを置換
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_NOENT', 2);

/**
 * 外部サブセットをロードする
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_DTDLOAD', 4);

/**
 * デフォルトのDTD属性
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_DTDATTR', 8);

/**
 * DTDで検証する
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_DTDVALID', 16);

/**
 * エラー出力を抑制
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_NOERROR', 32);

/**
 * 警告出力を抑制する
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_NOWARNING', 64);

/**
 * 空白のノードを削除
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_NOBLANKS', 256);

/**
 * XInclude 置換を実装する
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_XINCLUDE', 1024);

/**
 * 冗長な名前空間宣言を削除する
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_NSCLEAN', 8192);

/**
 * CDATA をテキストノードとしてマージ
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_NOCDATA', 16384);

/**
 * ドキュメントロード時にネットワークアクセスを無効にする
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_NONET', 2048);

/**
 * XML_PARSE_PEDANTIC フラグを設定する。これは、より細かいエラー報告を出す。
 * <p>
 * PHP &gt;= 5.4.0 でのみ有効
 * </p>
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_PEDANTIC', 128);

/**
 * 小さなノードを割り当てるように最適化する。アプリケーションの
 * コードを変更することなしにスピードアップさせることができる
 * <p>
 * Libxml &gt;= 2.6.21 でのみ有効
 * </p>
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_COMPACT', 65536);

/**
 * ドキュメントの保存時に XML 宣言を削除する
 * <p>
 * Libxml &gt;= 2.6.21 でのみ有効
 * </p>
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_NOXMLDECL', 2);

/**
 * パーサでハードコーディングされたすべての制限を緩和するための
 * XML_PARSE_HUGE フラグを設定する。
 * これは、ドキュメントやエンティティの再帰の最大数や
 * テキストノードのサイズなどの制限に影響する。
 * <p>
 * Libxml &gt;= 2.7.0 (PHP &gt;= 5.3.2 あるいは PHP &gt;= 5.2.12) でのみ有効
 * </p>
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_PARSEHUGE', 524288);

/**
 * 行数が 65535 を超えても正しく報告する
 * <p>
 * PHP 7.0.0 以降で Libxml &gt;= 2.9.0 の場合のみ有効
 * </p>
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_BIGLINES', 4194304);

/**
 * 空タグを拡張する（例 &lt;br/&gt; を
 * &lt;br&gt;&lt;/br&gt; にする）
 * <p>
 * このオプションは、現在
 * および
 * 関数でのみ有効です。
 * </p>
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_NOEMPTYTAG', 4);

/**
 * XSD スキーマの検証時にデフォルト/固定の値ノードを作る
 * <p>
 * Libxml &gt;= 2.6.14 (PHP &gt;= 5.5.2) 以降で利用可能
 * </p>
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_SCHEMA_CREATE', 1);

/**
 * HTML_PARSE_NOIMPLIED フラグを設定する。
 * これは、暗黙の html/body... 要素の自動追加を無効にする。
 * <p>
 * Libxml &gt;= 2.7.7 (PHP &gt;= 5.4.0) でのみ有効
 * </p>
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_HTML_NOIMPLIED', 8192);

/**
 * HTML_PARSE_NODEFDTD フラグを設定する。
 * これは、doctype が見つからないときにデフォルトの doctype を追加しないようにする。
 * <p>
 * Libxml &gt;= 2.7.8 (PHP &gt;= 5.4.0) でのみ有効
 * </p>
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_HTML_NODEFDTD', 4);

/**
 * エラーなし
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_ERR_NONE', 0);

/**
 * 単純な警告
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_ERR_WARNING', 1);

/**
 * 復帰可能なエラー
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_ERR_ERROR', 2);

/**
 * 致命的なエラー
 * @link http://php.net/manual/ja/libxml.constants.php
 */
define ('LIBXML_ERR_FATAL', 3);

// End of libxml v.7.1.5
?>
