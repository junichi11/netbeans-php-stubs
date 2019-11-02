<?php



namespace {

	/**
	 * <p>libxml がスローするエラーについてのさまざまな情報を含みます。エラーコードについての説明は、公式の » xmlError API ドキュメント をごらんください。</p>
	 * @link https://php.net/manual/ja/class.libxmlerror.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	class libXMLError {

		/**
		 * @var int <p>エラーの深刻度 (次の定数 <b><code>LIBXML_ERR_WARNING</code></b>、 <b><code>LIBXML_ERR_ERROR</code></b> あるいは <b><code>LIBXML_ERR_FATAL</code></b> のいずれか)。</p>
		 * @link https://php.net/manual/ja/class.libxmlerror.php#libxmlerror.props.level
		 */
		public $level;

		/**
		 * @var int <p>エラーコード。</p>
		 * @link https://php.net/manual/ja/class.libxmlerror.php#libxmlerror.props.code
		 */
		public $code;

		/**
		 * @var int <p>エラーが発生した列。</p>  <p><b>注意</b>:</p> <p>このプロパティは libxml で完全には実装されておらず、しばしば <i>0</i> が返されることがあります。</p>
		 * @link https://php.net/manual/ja/class.libxmlerror.php#libxmlerror.props.column
		 */
		public $column;

		/**
		 * @var string <p>エラーメッセージ (存在する場合)。</p>
		 * @link https://php.net/manual/ja/class.libxmlerror.php#libxmlerror.props.message
		 */
		public $message;

		/**
		 * @var string <p>ファイル名。XML を文字列から読み込んだ場合は空文字列。</p>
		 * @link https://php.net/manual/ja/class.libxmlerror.php#libxmlerror.props.file
		 */
		public $file;

		/**
		 * @var int <p>エラーが発生した行。</p>
		 * @link https://php.net/manual/ja/class.libxmlerror.php#libxmlerror.props.line
		 */
		public $line;
	}

	/**
	 * libxmlエラーハンドラをクリアする
	 * <p><b>libxml_clear_errors()</b>は、libxmlエラーバッファをクリアします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.libxml-clear-errors.php
	 * @see libxml_get_errors(), libxml_get_last_error()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function libxml_clear_errors(): void {}

	/**
	 * 外部エンティティの読み込み機能を無効にする
	 * <p>外部エンティティ読み込み機能の有効/無効を切り替えます。</p>
	 * @param bool $disable <p>libxml を使用する拡張モジュール (DOM、XMLWriter および XMLReader) で、外部エンティティの読み込み機能を 無効 (<b><code>TRUE</code></b>) あるいは有効 (<b><code>FALSE</code></b>) にします。</p>
	 * @return bool <p>変更前の値を返します。</p>
	 * @link https://php.net/manual/ja/function.libxml-disable-entity-loader.php
	 * @see libxml_use_internal_errors()
	 * @since PHP 5 >= 5.2.11, PHP 7
	 */
	function libxml_disable_entity_loader(bool $disable = TRUE): bool {}

	/**
	 * エラー配列を取得する
	 * <p>エラー配列を取得します。</p>
	 * @return array <p>エラーがバッファにある場合に <code>LibXMLError</code> オブジェクトの配列、 それ以外の場合に空の配列を返します。</p>
	 * @link https://php.net/manual/ja/function.libxml-get-errors.php
	 * @see libxml_get_last_error(), libxml_clear_errors()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function libxml_get_errors(): array {}

	/**
	 * libxmlから直近のエラーを取得する
	 * <p>libxmlから直近のエラーを取得します。</p>
	 * @return LibXMLError <p>エラーがバッファにある場合に<code>LibXMLError</code>オブジェクト、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.libxml-get-last-error.php
	 * @see libxml_get_errors(), libxml_clear_errors()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function libxml_get_last_error(): \LibXMLError {}

	/**
	 * デフォルトの外部エンティティローダーを変更する
	 * <p>デフォルトの外部エンティティローダーを変更します。</p>
	 * @param callable $resolver_function <p>三つの引数をとる <code>callable</code>。はじめの二つは文字列でそれぞれ パブリック ID とシステム ID で、残りの一つはコンテキスト (四つのキーを持つ配列) です。 このコールバックの返す値は、リソースまたはリソースをオープンできる文字列あるいは <b><code>NULL</code></b> でなければなりません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.libxml-set-external-entity-loader.php
	 * @see libxml_disable_entity_loader()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function libxml_set_external_entity_loader(callable $resolver_function): bool {}

	/**
	 * 次のlibxmlドキュメントの読込／書きこみのためにストリームコンテキストを設定する
	 * <p>次のlibxmlドキュメントの読込／書きこみのためにストリームコンテキストを設定します。</p>
	 * @param resource $streams_context <p>ストリームコンテキストリソース( <code>stream_context_create()</code>で作成)</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.libxml-set-streams-context.php
	 * @see stream_context_create()
	 * @since PHP 5, PHP 7
	 */
	function libxml_set_streams_context($streams_context): void {}

	/**
	 * libxmlエラーを無効にし、ユーザーが必要に応じてエラー情報を取得できるようにする
	 * <p><b>libxml_use_internal_errors()</b> により、 標準のlibxmlエラーを無効にし、ユーザーによるエラー処理を有効にすることができます。</p>
	 * @param bool $use_errors <p>ユーザーによるエラー処理を有効 (<b><code>TRUE</code></b>) または無効 (<b><code>FALSE</code></b>) にする。 無効にすると、既に存在する libxml のエラーもすべてクリアします。</p>
	 * @return bool <p>この関数は、 <code>use_errors</code>の前の値を返します。</p>
	 * @link https://php.net/manual/ja/function.libxml-use-internal-errors.php
	 * @see libxml_clear_errors(), libxml_get_errors()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function libxml_use_internal_errors(bool $use_errors = FALSE): bool {}

	/**
	 * 行数が 65535 を超えても正しく報告する   <p><b>注意</b>:</p> <p>PHP 7.0.0 以降で Libxml &gt;= 2.9.0 の場合のみ有効</p>
	 */
	define('LIBXML_BIGLINES', 4194304);

	/**
	 * 小さなノードを割り当てるように最適化する。アプリケーションの コードを変更することなしにスピードアップさせることができる   <p><b>注意</b>:</p> <p>Libxml &gt;= 2.6.21 でのみ有効</p>
	 */
	define('LIBXML_COMPACT', 65536);

	/**
	 * 2.6.5または2.6.17のようなlibxmlのバージョン
	 */
	define('LIBXML_DOTTED_VERSION', '2.9.4');

	/**
	 * デフォルトのDTD属性
	 */
	define('LIBXML_DTDATTR', 8);

	/**
	 * 外部サブセットをロードする
	 */
	define('LIBXML_DTDLOAD', 4);

	/**
	 * DTDで検証する
	 */
	define('LIBXML_DTDVALID', 16);

	/**
	 * 復帰可能なエラー
	 */
	define('LIBXML_ERR_ERROR', 2);

	/**
	 * 致命的なエラー
	 */
	define('LIBXML_ERR_FATAL', 3);

	/**
	 * エラーなし
	 */
	define('LIBXML_ERR_NONE', 0);

	/**
	 * 単純な警告
	 */
	define('LIBXML_ERR_WARNING', 1);

	/**
	 * HTML_PARSE_NODEFDTD フラグを設定する。 これは、doctype が見つからないときにデフォルトの doctype を追加しないようにする。   <p><b>注意</b>:</p> <p>Libxml &gt;= 2.7.8 (PHP &gt;= 5.4.0) でのみ有効</p>
	 */
	define('LIBXML_HTML_NODEFDTD', 4);

	/**
	 * HTML_PARSE_NOIMPLIED フラグを設定する。 これは、暗黙の html/body... 要素の自動追加を無効にする。   <p><b>注意</b>:</p> <p>Libxml &gt;= 2.7.7 (PHP &gt;= 5.4.0) でのみ有効</p>
	 */
	define('LIBXML_HTML_NOIMPLIED', 8192);

	/**
	 * 空白のノードを削除
	 */
	define('LIBXML_NOBLANKS', 256);

	/**
	 * CDATA をテキストノードとしてマージ
	 */
	define('LIBXML_NOCDATA', 16384);

	/**
	 * 空タグを拡張する（例 <i>&lt;br/&gt;</i> を <i>&lt;br&gt;&lt;/br&gt;</i> にする）   <p><b>注意</b>:</p> <p>このオプションは、現在 DOMDocument::save および DOMDocument::saveXML 関数でのみ有効です。</p>
	 */
	define('LIBXML_NOEMPTYTAG', 4);

	/**
	 * エンティティを置換
	 */
	define('LIBXML_NOENT', 2);

	/**
	 * エラー出力を抑制
	 */
	define('LIBXML_NOERROR', 32);

	/**
	 * ドキュメントロード時にネットワークアクセスを無効にする
	 */
	define('LIBXML_NONET', 2048);

	/**
	 * 警告出力を抑制する
	 */
	define('LIBXML_NOWARNING', 64);

	/**
	 * ドキュメントの保存時に XML 宣言を削除する   <p><b>注意</b>:</p> <p>Libxml &gt;= 2.6.21 でのみ有効</p>
	 */
	define('LIBXML_NOXMLDECL', 2);

	/**
	 * 冗長な名前空間宣言を削除する
	 */
	define('LIBXML_NSCLEAN', 8192);

	/**
	 * パーサでハードコーディングされたすべての制限を緩和するための XML_PARSE_HUGE フラグを設定する。 これは、ドキュメントやエンティティの再帰の最大数や テキストノードのサイズなどの制限に影響する。   <p><b>注意</b>:</p> <p>Libxml &gt;= 2.7.0 (PHP &gt;= 5.3.2 あるいは PHP &gt;= 5.2.12) でのみ有効</p>
	 */
	define('LIBXML_PARSEHUGE', 524288);

	/**
	 * XML_PARSE_PEDANTIC フラグを設定する。これは、より細かいエラー報告を出す。   <p><b>注意</b>:</p> <p>PHP &gt;= 5.4.0 でのみ有効</p>
	 */
	define('LIBXML_PEDANTIC', 128);

	/**
	 * XSD スキーマの検証時にデフォルト/固定の値ノードを作る   <p><b>注意</b>:</p> <p>Libxml &gt;= 2.6.14 (PHP &gt;= 5.5.2) 以降で利用可能</p>
	 */
	define('LIBXML_SCHEMA_CREATE', 1);

	/**
	 * 20605 や 20617 のような libxml のバージョン
	 */
	define('LIBXML_VERSION', 20904);

	/**
	 * XInclude 置換を実装する
	 */
	define('LIBXML_XINCLUDE', 1024);

}
