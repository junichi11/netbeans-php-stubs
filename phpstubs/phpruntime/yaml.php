<?php



namespace {

	/**
	 * YAML 形式にした値を返す
	 * <p><code>data</code> で渡したデータを YAML 形式にして返します。</p>
	 * @param mixed $data <p>エンコードしたいデータ。リソース型以外の任意の型が使えます。</p>
	 * @param int $encoding <p>出力時の文字エンコーディング。 <b><code>YAML_ANY_ENCODING</code></b>、 <b><code>YAML_UTF8_ENCODING</code></b>、 <b><code>YAML_UTF16LE_ENCODING</code></b>、 <b><code>YAML_UTF16BE_ENCODING</code></b> のいずれか。</p>
	 * @param int $linebreak <p>出力時の改行形式。 <b><code>YAML_ANY_BREAK</code></b>、 <b><code>YAML_CR_BREAK</code></b>、 <b><code>YAML_LN_BREAK</code></b>、 <b><code>YAML_CRLN_BREAK</code></b> のいずれか。</p>
	 * @param array $callbacks <p>YAML ノードの発行用のコンテンツハンドラ。 クラス名 =&gt; <code>callable</code> 形式の連想配列となります。 詳細は発行コールバック を参照ください。</p>
	 * @return string <p>成功した場合に YAML 形式の文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.yaml-emit.php
	 * @see yaml_emit_file(), yaml_parse()
	 * @since PECL yaml >= 0.5.0
	 */
	function yaml_emit($data, int $encoding = YAML_ANY_ENCODING, int $linebreak = YAML_ANY_BREAK, array $callbacks = NULL): string {}

	/**
	 * YAML 形式にした値をファイルに送る
	 * <p><code>data</code> で渡したデータを YAML 形式にして <code>filename</code> に書き込みます。</p>
	 * @param string $filename <p>ファイルへのパス。</p>
	 * @param mixed $data <p>エンコードしたいデータ。リソース型以外の任意の型が使えます。</p>
	 * @param int $encoding <p>出力時の文字エンコーディング。 <b><code>YAML_ANY_ENCODING</code></b>、 <b><code>YAML_UTF8_ENCODING</code></b>、 <b><code>YAML_UTF16LE_ENCODING</code></b>、 <b><code>YAML_UTF16BE_ENCODING</code></b> のいずれか。</p>
	 * @param int $linebreak <p>出力時の改行形式。 <b><code>YAML_ANY_BREAK</code></b>、 <b><code>YAML_CR_BREAK</code></b>、 <b><code>YAML_LN_BREAK</code></b>、 <b><code>YAML_CRLN_BREAK</code></b> のいずれか。</p>
	 * @param array $callbacks <p>YAML ノードの発行用のコンテンツハンドラ。 クラス名 =&gt; <code>callable</code> 形式の連想配列となります。 詳細は発行コールバック を参照ください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.yaml-emit-file.php
	 * @see yaml_emit(), yaml_parse()
	 * @since PECL yaml >= 0.5.0
	 */
	function yaml_emit_file(string $filename, $data, int $encoding = YAML_ANY_ENCODING, int $linebreak = YAML_ANY_BREAK, array $callbacks = NULL): bool {}

	/**
	 * YAML ストリームをパースする
	 * <p>YAML ドキュメントストリーム全体あるいはその一部を、PHP の変数に変換します。</p>
	 * @param string $input <p>YAML ドキュメントストリームとしてパースする文字列。</p>
	 * @param int $pos <p>ストリームから取り出すドキュメント (<i>-1</i> はすべてのドキュメント、<i>0</i> は最初のドキュメント、...)。</p>
	 * @param int $ndocs <p><code>ndocs</code> を渡すと、 ストリーム内で見つかったドキュメントの数がそこに格納されます。</p>
	 * @param array $callbacks <p>YAML ノードのコンテンツハンドラ。 YAML タグ =&gt; <code>callable</code> 形式の連想配列となります。 詳細はパースコールバック を参照ください。</p>
	 * @return mixed <p>適切な PHP の型に変換した結果を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。 <code>pos</code> が <i>-1</i> の場合は配列を返します。 配列の各要素が、ストリーム内で見つかった個々のドキュメントとなります。</p>
	 * @link https://php.net/manual/ja/function.yaml-parse.php
	 * @see yaml_parse_file(), yaml_parse_url(), yaml_emit()
	 * @since PECL yaml >= 0.4.0
	 */
	function yaml_parse(string $input, int $pos = 0, int &$ndocs = NULL, array $callbacks = NULL) {}

	/**
	 * ファイルからの YAML ストリームをパースする
	 * <p>指定したファイルから読み込んだ YAML ドキュメントストリーム全体あるいはその一部を、PHP の変数に変換します。</p>
	 * @param string $filename <p>ファイルへのパス。</p>
	 * @param int $pos <p>ストリームから取り出すドキュメント (<i>-1</i> はすべてのドキュメント、<i>0</i> は最初のドキュメント、...)。</p>
	 * @param int $ndocs <p><code>ndocs</code> を渡すと、 ストリーム内で見つかったドキュメントの数がそこに格納されます。</p>
	 * @param array $callbacks <p>YAML ノードのコンテンツハンドラ。 YAML タグ =&gt; <code>callable</code> 形式の連想配列となります。 詳細はパースコールバック を参照ください。</p>
	 * @return mixed <p>適切な PHP の型に変換した結果を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。 <code>pos</code> が <i>-1</i> の場合は配列を返します。 配列の各要素が、ストリーム内で見つかった個々のドキュメントとなります。</p>
	 * @link https://php.net/manual/ja/function.yaml-parse-file.php
	 * @see yaml_parse(), yaml_parse_url(), yaml_emit()
	 * @since PECL yaml >= 0.4.0
	 */
	function yaml_parse_file(string $filename, int $pos = 0, int &$ndocs = NULL, array $callbacks = NULL) {}

	/**
	 * URL からの YAML ストリームをパースする
	 * <p>指定した URL から読み込んだ YAML ドキュメントストリーム全体あるいはその一部を、PHP の変数に変換します。</p>
	 * @param string $url <p><code>url</code> は "scheme://..." 形式でなければなりません。 PHP は、このスキームを見てプロトコルハンドラ (ラッパー) を探します。 対応するラッパーが登録されていない場合は notice を発し、 そのまま通常のファイルとみなして処理を続けます。</p>
	 * @param int $pos <p>ストリームから取り出すドキュメント (<i>-1</i> はすべてのドキュメント、<i>0</i> は最初のドキュメント、...)。</p>
	 * @param int $ndocs <p><code>ndocs</code> を渡すと、 ストリーム内で見つかったドキュメントの数がそこに格納されます。</p>
	 * @param array $callbacks <p>YAML ノードのコンテンツハンドラ。 YAML タグ =&gt; <code>callable</code> 形式の連想配列となります。 詳細はパースコールバック を参照ください。</p>
	 * @return mixed <p>適切な PHP の型に変換した結果を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。 <code>pos</code> が <i>-1</i> の場合は配列を返します。 配列の各要素が、ストリーム内で見つかった個々のドキュメントとなります。</p>
	 * @link https://php.net/manual/ja/function.yaml-parse-url.php
	 * @see yaml_parse(), yaml_parse_file(), yaml_emit()
	 * @since PECL yaml >= 0.4.0
	 */
	function yaml_parse_url(string $url, int $pos = 0, int &$ndocs = NULL, array $callbacks = NULL) {}

	/**
	 * エミッターに改行文字を判断させます。
	 */
	define('YAML_ANY_BREAK', null);

	/**
	 * エミッターにエンコードを判断させます。
	 */
	define('YAML_ANY_ENCODING', null);

	define('YAML_ANY_SCALAR_STYLE', null);

	/**
	 * "tag:yaml.org,2002:bool"
	 */
	define('YAML_BOOL_TAG', null);

	/**
	 * 改行文字に <i>\r</i> を使います (Mac 形式)。
	 */
	define('YAML_CR_BREAK', null);

	/**
	 * 改行文字に <i>\r\n</i> を使います (DOS 形式)。
	 */
	define('YAML_CRLN_BREAK', null);

	define('YAML_DOUBLE_QUOTED_SCALAR_STYLE', null);

	/**
	 * "tag:yaml.org,2002:float"
	 */
	define('YAML_FLOAT_TAG', null);

	define('YAML_FOLDED_SCALAR_STYLE', null);

	/**
	 * "tag:yaml.org,2002:int"
	 */
	define('YAML_INT_TAG', null);

	define('YAML_LITERAL_SCALAR_STYLE', null);

	/**
	 * 改行文字に <i>\n</i> を使います (Unix 形式)。
	 */
	define('YAML_LN_BREAK', null);

	/**
	 * "tag:yaml.org,2002:map"
	 */
	define('YAML_MAP_TAG', null);

	/**
	 * "tag:yaml.org,2002:null"
	 */
	define('YAML_NULL_TAG', null);

	/**
	 * "!php/object"
	 */
	define('YAML_PHP_TAG', null);

	define('YAML_PLAIN_SCALAR_STYLE', null);

	/**
	 * "tag:yaml.org,2002:seq"
	 */
	define('YAML_SEQ_TAG', null);

	define('YAML_SINGLE_QUOTED_SCALAR_STYLE', null);

	/**
	 * "tag:yaml.org,2002:str"
	 */
	define('YAML_STR_TAG', null);

	/**
	 * "tag:yaml.org,2002:timestamp"
	 */
	define('YAML_TIMESTAMP_TAG', null);

	/**
	 * UTF16BE としてエンコードします。
	 */
	define('YAML_UTF16BE_ENCODING', null);

	/**
	 * UTF16LE としてエンコードします。
	 */
	define('YAML_UTF16LE_ENCODING', null);

	/**
	 * UTF8 としてエンコードします。
	 */
	define('YAML_UTF8_ENCODING', null);

}
