<?php

// Start of ctype v.7.0.19

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 英数字かどうかを調べる
 * @link http://php.net/manual/ja/function.ctype-alnum.php
 * @param string $text <p>
 * 調べる文字列。
 * </p>
 * @return bool <i>text</i> のすべての文字が英字または数字だった場合に
 * <b>TRUE</b> 、そうでない場合に <b>FALSE</b> を返します。
 */
function ctype_alnum(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 英字かどうかを調べる
 * @link http://php.net/manual/ja/function.ctype-alpha.php
 * @param string $text <p>
 * 調べる文字列。
 * </p>
 * @return bool <i>text</i> のすべての文字が英字だった場合に
 * <b>TRUE</b> 、そうでない場合に <b>FALSE</b> を返します。
 */
function ctype_alpha(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 制御文字かどうかを調べる
 * @link http://php.net/manual/ja/function.ctype-cntrl.php
 * @param string $text <p>
 * 調べる文字列。
 * </p>
 * @return bool <i>text</i> のすべての文字が現在のロケールの制御文字だった場合に
 * <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
 */
function ctype_cntrl(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 数字かどうかを調べる
 * @link http://php.net/manual/ja/function.ctype-digit.php
 * @param string $text <p>
 * 調べる文字列。
 * </p>
 * @return bool string <i>text</i> のすべての文字が 10 進数字だった場合に
 * <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
 */
function ctype_digit(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 小文字かどうかを調べる
 * @link http://php.net/manual/ja/function.ctype-lower.php
 * @param string $text <p>
 * 調べる文字列。
 * </p>
 * @return bool <i>text</i> のすべての文字がカレントのロケールで
 * 小文字だった場合に <b>TRUE</b> 、そうでない場合に <b>FALSE</b> を返します。
 */
function ctype_lower(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 空白以外の印字可能な文字かどうかを調べる
 * @link http://php.net/manual/ja/function.ctype-graph.php
 * @param string $text <p>
 * 調べる文字列。
 * </p>
 * @return bool <i>text</i> のすべての文字が印字可能で実際に目に見える
 * 出力を行う（空白でない）場合に <b>TRUE</b> 、そうでない場合に <b>FALSE</b> を返します。
 */
function ctype_graph(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 印字可能な文字かどうかを調べる
 * @link http://php.net/manual/ja/function.ctype-print.php
 * @param string $text <p>
 * 調べる文字列。
 * </p>
 * @return bool <i>text</i> のすべての文字が（空白を含めて）実際に
 * 出力を行う場合に <b>TRUE</b> 、<i>text</i> に制御文字
 * またはまったく出力も制御も行わない文字が含まれる場合に <b>FALSE</b>
 * を返します。
 */
function ctype_print(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 空白、英数字以外の出力可能な文字かどうかを調べる
 * @link http://php.net/manual/ja/function.ctype-punct.php
 * @param string $text <p>
 * 調べる文字列。
 * </p>
 * @return bool <i>text</i> のすべての文字が出力可能であり、
 * かつ文字でも数字でも空白でもなかった場合に
 * <b>TRUE</b> 、そうでない場合に <b>FALSE</b> を返します。
 */
function ctype_punct(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 空白文字かどうか調べる
 * @link http://php.net/manual/ja/function.ctype-space.php
 * @param string $text <p>
 * 調べる文字列。
 * </p>
 * @return bool <i>text</i> のすべての文字がなんらかの空白文字を
 * 生成する場合に <b>TRUE</b> 、そうでない場合に <b>FALSE</b> を返します。
 * 空白文字には、タブ・垂直タブ・改行・復帰・フォームフィード文字も
 * 含まれます。
 */
function ctype_space(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 大文字かどうか調べる
 * @link http://php.net/manual/ja/function.ctype-upper.php
 * @param string $text <p>
 * 調べる文字列。
 * </p>
 * @return bool <i>text</i> のすべての文字がカレントのロケールで
 * 大文字だった場合に <b>TRUE</b> 、そうでない場合に <b>FALSE</b> を返します。
 */
function ctype_upper(string $text): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 16 進数を表す文字かどうかを調べる
 * @link http://php.net/manual/ja/function.ctype-xdigit.php
 * @param string $text <p>
 * 調べる文字列。
 * </p>
 * @return bool <i>text</i> のすべての文字が 16 進の '数字'
 * つまり 10 進の数字または [A-Fa-f]
 * だった場合に <b>TRUE</b> 、そうでない場合に <b>FALSE</b> を返します。
 */
function ctype_xdigit(string $text): bool {}

// End of ctype v.7.0.19
?>
