<?php



namespace {

	/**
	 * MIME base64 方式によりエンコードされたデータをデコードする
	 * <p>base64 でエンコードされた <code>data</code> をデコードします。</p>
	 * @param string $data <p>デコードされるデータ。</p>
	 * @param bool $strict <p><code>strict</code> パラメータを <b><code>TRUE</code></b> に指定すると、 <b>base64_decode()</b> 関数は、 入力に base64 アルファベットの範囲外の文字が含まれる場合に <b><code>FALSE</code></b> を返します。 それ以外の場合は、base64 アルファベットの範囲外の文字を破棄したうえでデコードされます。</p>
	 * @return string <p>もとのデータを返します。失敗した場合に <b><code>FALSE</code></b> を返します。 返り値はバイナリになることもあります。</p>
	 * @link https://php.net/manual/ja/function.base64-decode.php
	 * @see base64_encode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function base64_decode(string $data, bool $strict = false): string {}

	/**
	 * MIME base64 方式でデータをエンコードする
	 * <p>指定した <code>data</code> を base64 でエンコードします。</p><p>このエンコードは、メールの本体のように 8 ビットクリーンではないトランスポート層を通じても、 バイナリデータが生き残れるように設計されています。</p><p>Base64 でエンコードされたデータは、エンコード前のデータにくらべて 33% 余計に容量が必要です。</p>
	 * @param string $data <p>エンコードするデータ。</p>
	 * @return string <p>エンコードされたデータを文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.base64-encode.php
	 * @see base64_decode(), chunk_split(), convert_uuencode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function base64_encode(string $data): string {}

	/**
	 * HTTP リクエストに対するレスポンス内で サーバーによって送出された全てのヘッダを取得する
	 * <p><b>get_headers()</b> は、HTTP リクエストに対するレスポンス内で サーバーによって送出されたヘッダの配列を返します。</p>
	 * @param string $url <p>対象となる URL。</p>
	 * @param int $format <p>オプションの <code>format</code> パラメータが ゼロ以外にセットされた場合、<b>get_headers()</b> はレスポンスをパースし、配列のキーをセットします。</p>
	 * @return array <p>数値添字配列あるいは連想配列でヘッダを返します。 失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.get-headers.php
	 * @see apache_request_headers()
	 * @since PHP 5, PHP 7
	 */
	function get_headers(string $url, int $format = 0): array {}

	/**
	 * ファイル上のすべてのメタタグ情報を配列に展開する
	 * <p><code>filename</code> 内の各行をパースし &lt;meta&gt; タグ内の情報を配列として返します。 <i>&lt;/head&gt;</i> でパースを終了します。</p>
	 * @param string $filename <p>HTML ファイルへのパスを表す文字列。 ローカルファイルのほか URL も指定できます。</p> <p></p> <p><b>例1 <b>get_meta_tags()</b> が何をパースするのか</b></p>   <pre>&lt;meta name="author" content="name"&gt; &lt;meta name="keywords" content="php documentation"&gt; &lt;meta name="DESCRIPTION" content="a php manual"&gt; &lt;meta name="geo.position" content="49.33;-86.59"&gt; &lt;/head&gt; &lt;!-- ここでパースを終了します --&gt;</pre>    (改行コードに注意してください。PHP は入力をパースするためにネイティブ関数を使用するため、 Macintosh のファイルは Unix 上では動作しません)。
	 * @param bool $use_include_path <p><code>use_include_path</code> を <b><code>TRUE</code></b> に指定すると、 include_path ディレクティブの内容にしたがってファイルを探します。 これはローカルファイルにのみ有効で、URL の場合は使用できません。</p>
	 * @return array <p>パースされたメタタグを含む配列を返します。</p><p>name 属性の値が配列のキーとなります。content 属性の値が配列の要素となります。 標準の配列関数を利用することでこれらの値に簡単にアクセスすることができます。 name 属性で特別な文字が使われている場合は '_' で代用されます。 それ以外は小文字に変換されます。もしも同じ名前のメタタグがある場合には 最後のもののみが返されます。</p>
	 * @link https://php.net/manual/ja/function.get-meta-tags.php
	 * @see htmlentities(), urlencode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function get_meta_tags(string $filename, bool $use_include_path = FALSE): array {}

	/**
	 * URL エンコードされたクエリ文字列を生成する
	 * <p>与えられた連想配列 (もしくは添字配列) から URL エンコードされたクエリ文字列を生成します。</p>
	 * @param mixed $query_data <p>プロパティを含む配列もしくはオブジェクト。</p> <p><code>query_data</code> が配列の場合の形式は、 単純な一次元構造か あるいは配列の配列 (言い換えると、他の配列を含む配列) となります。</p> <p><code>query_data</code> がオブジェクトの場合、 public プロパティだけが結果に含められます。</p>
	 * @param string $numeric_prefix <p>情報源となる配列 (<code>query_data</code> で指定した配列) に数値インデックスが使われていて、しかも <code>numeric_prefix</code> が指定された場合、数値のインデックスを持つ要素に関してのみインデックスの前に <code>numeric_prefix</code> で指定した値が付加されます。</p> <p>これは、後で PHP や他の CGI アプリケーションによってデータがデコードされる際、 正当な変数名になるよう考慮したものです。</p>
	 * @param string $arg_separator <p>arg_separator.output が区分のためのセパレータとして使用されます。ただし、 このパラメータが指定されていた場合は それが使用されます。</p>
	 * @param int $enc_type <p>デフォルトは <b><code>PHP_QUERY_RFC1738</code></b> です。</p> <p><code>enc_type</code> が <b><code>PHP_QUERY_RFC1738</code></b> の場合は » RFC 1738 に従ってエンコードされ、メディアタイプは <i>application/x-www-form-urlencoded</i> となります。 つまり、スペースはプラス記号 (<i>+</i>) にエンコードされるということです。</p> <p><code>enc_type</code> が <b><code>PHP_QUERY_RFC3986</code></b> の場合は » RFC 3986 に従ってエンコードされ、 スペースはパーセント形式 (<i>%20</i>) となります。</p>
	 * @return string <p>URL エンコードされた文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.http-build-query.php
	 * @see parse_str(), parse_url(), urlencode(), array_walk()
	 * @since PHP 5, PHP 7
	 */
	function http_build_query($query_data, string $numeric_prefix = NULL, string $arg_separator = NULL, int $enc_type = PHP_QUERY_RFC1738): string {}

	/**
	 * URL を解釈し、その構成要素を返す
	 * <p>この関数は、URL の様々な構成要素のうち特定できるものに関して 連想配列にして返します。</p><p>この関数は、指定された URL が有効かどうかを調べるためのもの <i>ではなく</i>、単に URL を上で示した 要素に分解するだけのものです。不完全な URL であっても受け入れられますし、 そのような場合でも <b>parse_url()</b> は可能な限り 正しく解析しようとします。</p>
	 * @param string $url <p>パースする URL。無効な文字は <i>_</i> に置換されます。</p>
	 * @param int $component
	 * @return mixed <p>完全におかしな形式の URL については、<b>parse_url()</b> は <b><code>FALSE</code></b> を返します。</p><p><code>component</code> を省略した場合は、連想配列を返します。 連想配列の中には少なくともひとつの要素が含まれます。 この配列に含まれる可能性のある要素は次のとおりです。</p><ul> <li>  scheme - 例: http  </li> <li>  host  </li> <li>  port  </li> <li>  user  </li> <li>  pass  </li> <li>  path  </li> <li>  query - クエスチョンマーク <i>&#63;</i> 以降  </li> <li>  fragment - ハッシュマーク <i>#</i> 以降  </li> </ul><p><code>component</code> が指定されている場合、 <b>parse_url()</b> は配列ではなく文字列 (<b><code>PHP_URL_PORT</code></b> の場合は整数値) を返します。 要求したコンポーネントが指定した URL の中にない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.parse-url.php
	 * @see pathinfo(), parse_str(), http_build_query(), dirname(), basename()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function parse_url(string $url, int $component = -1) {}

	/**
	 * URL エンコードされた文字列をデコードする
	 * <p>文字列の中にパーセント記号 (<i>%</i>) に続いて 2 つの 16 進数があるような表現形式を、文字定数に置き換えて返します。</p>
	 * @param string $str <p>デコードする URL。</p>
	 * @return string <p>デコードされた URL を文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.rawurldecode.php
	 * @see rawurlencode(), urldecode(), urlencode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function rawurldecode(string $str): string {}

	/**
	 * RFC 3986 に基づき URL エンコードを行う
	 * <p>指定した文字列を » RFC 3986 にもとづいてエンコードします。</p>
	 * @param string $str <p>エンコードする URL。</p>
	 * @return string <p><i>-_.~</i> を除くすべての非アルファベット文字をパーセント 記号 (<i>%</i>)に続いて 2 つの 16 進数がある表現形式に 置き換えた文字列を返します。これは、文字定数が特殊な URL デリミタと して解釈されたり、URL デリミタが(いくつかの電子メールシステムのような) 転送メディアにより文字変換されて失われてしまったりすることが ないように、» RFC 3986 で定められたエンコーディング方法です。</p> <p><b>注意</b>:</p> <p>PHP 5.3.0 より前のバージョンでは、rawurlencode はチルダ (<i>~</i>) もエンコードしていました。これは » RFC 1738 で定められた方法です。</p>
	 * @link https://php.net/manual/ja/function.rawurlencode.php
	 * @see rawurldecode(), urldecode(), urlencode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function rawurlencode(string $str): string {}

	/**
	 * URL エンコードされた文字列をデコードする
	 * <p>与えられた文字列中のあらゆるエンコード文字 <i>%##</i> をデコードします。 プラス記号 ('<i>+</i>') は、スペース文字にデコードします。</p>
	 * @param string $str <p>デコードする文字列。</p>
	 * @return string <p>デコードした文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.urldecode.php
	 * @see urlencode(), rawurlencode(), rawurldecode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function urldecode(string $str): string {}

	/**
	 * 文字列を URL エンコードする
	 * <p>この関数は、URL の問い合わせ部分に使用する文字列のエンコードや 次のページへ変数を渡す際に便利です。</p>
	 * @param string $str <p>エンコードする文字列。</p>
	 * @return string <p><i>-_.</i> を除くすべての非英数文字が % 記号 (<i>%</i>)に続く二桁の数字で置き換えられ、 空白は + 記号(<i>+</i>)にエンコードされます。 同様の方法で、WWW のフォームからポストされたデータはエンコードされ、 <i>application/x-www-form-urlencoded</i> メディア型も同様です。歴史的な理由により、この関数は » RFC 3986 エンコード( <code>rawurlencode()</code> を参照してください) とは異なり、 空白を + 記号にエンコードします。</p>
	 * @link https://php.net/manual/ja/function.urlencode.php
	 * @see urldecode(), htmlentities(), rawurlencode(), rawurldecode()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function urlencode(string $str): string {}

	/**
	 * » RFC 1738 と <i>application/x-www-form-urlencoded</i> メディアタイプに基づくエンコーディングを行います。 つまり、スペースはプラス記号 (<i>+</i>) にエンコードされます。
	 */
	define('PHP_QUERY_RFC1738', 1);

	/**
	 * » RFC 3986 に基づくエンコーディングを行います。 スペースはパーセントエンコードされて、<i>%20</i> となります。
	 */
	define('PHP_QUERY_RFC3986', 2);

	/**
	 * パースした URL のフラグメント (# 以降の文字列) を出力します。
	 */
	define('PHP_URL_FRAGMENT', 7);

	/**
	 * パースした URL のホスト名を出力します。
	 */
	define('PHP_URL_HOST', 1);

	/**
	 * パースした URL のパスワードを出力します。
	 */
	define('PHP_URL_PASS', 4);

	/**
	 * パースした URL のパスを出力します。
	 */
	define('PHP_URL_PATH', 5);

	/**
	 * パースした URL のポート番号を出力します。
	 */
	define('PHP_URL_PORT', 2);

	/**
	 * パースした URL のクエリ文字列を出力します。
	 */
	define('PHP_URL_QUERY', 6);

	define('PHP_URL_SCHEME', 0);

	/**
	 * パースした URL のユーザー名を出力します。
	 */
	define('PHP_URL_USER', 3);

}
