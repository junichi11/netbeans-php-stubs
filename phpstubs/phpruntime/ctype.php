<?php



namespace {

	/**
	 * 英数字かどうかを調べる
	 * <p>与えられた文字列 <code>text</code> のすべての文字が英字または 数字であるかどうかを調べます。</p>
	 * @param string $text <p>調べる文字列。</p>
	 * @return bool <p><code>text</code> のすべての文字が英字または数字だった場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ctype-alnum.php
	 * @see ctype_alpha(), ctype_digit(), setlocale()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_alnum(string $text): bool {}

	/**
	 * 英字かどうかを調べる
	 * <p>与えられた文字列 <code>text</code> のすべての文字が 英字であるかどうかを調べます。 標準の <i>C</i> ロケールの場合、文字は <i>[A-Za-z]</i> で、<b>ctype_alpha()</b> は $text が一文字のみの場合の <i>(ctype_upper($text) || ctype_lower($text))</i> と等価です。 しかし、他の言語には大文字でも小文字でもない文字が含まれています。</p>
	 * @param string $text <p>調べる文字列。</p>
	 * @return bool <p><code>text</code> のすべての文字が英字だった場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ctype-alpha.php
	 * @see ctype_upper(), ctype_lower(), setlocale()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_alpha(string $text): bool {}

	/**
	 * 制御文字かどうかを調べる
	 * <p>与えられた文字列 <code>text</code> のすべての文字が制御文字であるかどうかを調べます。 制御文字とは、例えばラインフィードやタブ、エスケープなどです。</p>
	 * @param string $text <p>調べる文字列。</p>
	 * @return bool <p><code>text</code> のすべての文字が現在のロケールの制御文字だった場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ctype-cntrl.php
	 * @see ctype_print()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_cntrl(string $text): bool {}

	/**
	 * 数字かどうかを調べる
	 * <p>与えられた文字列 <code>text</code> のすべての文字が 数字であるかどうかを調べます。</p>
	 * @param string $text <p>調べる文字列。</p>
	 * @return bool <p><code>string</code> <code>text</code> のすべての文字が 10 進数字だった場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ctype-digit.php
	 * @see ctype_alnum(), ctype_xdigit(), is_numeric(), is_int(), is_string()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_digit(string $text): bool {}

	/**
	 * 空白以外の印字可能な文字かどうかを調べる
	 * <p>与えられた文字列 <code>text</code> のすべての文字が 実際に目に見える出力を行うかどうかを調べます。</p>
	 * @param string $text <p>調べる文字列。</p>
	 * @return bool <p><code>text</code> のすべての文字が印字可能で実際に目に見える 出力を行う（空白でない）場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ctype-graph.php
	 * @see ctype_alnum(), ctype_print(), ctype_punct()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_graph(string $text): bool {}

	/**
	 * 小文字かどうかを調べる
	 * <p><code>text</code> のすべての文字が小文字だった場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @param string $text <p>調べる文字列。</p>
	 * @return bool <p><code>text</code> のすべての文字がカレントのロケールで 小文字だった場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ctype-lower.php
	 * @see ctype_alpha(), ctype_upper(), setlocale()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_lower(string $text): bool {}

	/**
	 * 印字可能な文字かどうかを調べる
	 * <p>与えられた文字列 <code>text</code> のすべての文字が 印字可能な文字であるかどうかを調べます。</p>
	 * @param string $text <p>調べる文字列。</p>
	 * @return bool <p><code>text</code> のすべての文字が（空白を含めて）実際に 出力を行う場合に <b><code>TRUE</code></b> 、<code>text</code> に制御文字 またはまったく出力も制御も行わない文字が含まれる場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ctype-print.php
	 * @see ctype_cntrl(), ctype_graph(), ctype_punct()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_print(string $text): bool {}

	/**
	 * 空白、英数字以外の出力可能な文字かどうかを調べる
	 * <p>与えられた文字列 <code>text</code> のすべての文字が 句読点であるかどうかを調べます。</p>
	 * @param string $text <p>調べる文字列。</p>
	 * @return bool <p><code>text</code> のすべての文字が出力可能であり、 かつ文字でも数字でも空白でもなかった場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ctype-punct.php
	 * @see ctype_cntrl(), ctype_graph()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_punct(string $text): bool {}

	/**
	 * 空白文字かどうか調べる
	 * <p>与えられた文字列 <code>text</code> のすべての文字が 空白文字であるかどうかを調べます。</p>
	 * @param string $text <p>調べる文字列。</p>
	 * @return bool <p><code>text</code> のすべての文字がなんらかの空白文字を 生成する場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。 空白文字には、タブ・垂直タブ・改行・復帰・フォームフィード文字も 含まれます。</p>
	 * @link https://php.net/manual/ja/function.ctype-space.php
	 * @see ctype_cntrl(), ctype_graph(), ctype_punct()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_space(string $text): bool {}

	/**
	 * 大文字かどうか調べる
	 * <p>与えられた文字列 <code>text</code> のすべての文字が 大文字であるかどうかを調べます。</p>
	 * @param string $text <p>調べる文字列。</p>
	 * @return bool <p><code>text</code> のすべての文字がカレントのロケールで 大文字だった場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ctype-upper.php
	 * @see ctype_alpha(), ctype_lower(), setlocale()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_upper(string $text): bool {}

	/**
	 * 16 進数を表す文字かどうかを調べる
	 * <p>与えられた文字列 <code>text</code> のすべての文字が 16 進の '数字' であるかどうかを調べます。</p>
	 * @param string $text <p>調べる文字列。</p>
	 * @return bool <p><code>text</code> のすべての文字が 16 進の '数字' つまり 10 進の数字または <i>[A-Fa-f]</i> だった場合に <b><code>TRUE</code></b> 、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ctype-xdigit.php
	 * @see ctype_digit()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ctype_xdigit(string $text): bool {}

}
