<?php



/**
 * 2つの任意精度の数値を加算する
 * <p><code>left_operand</code> を <code>right_operand</code> に加算します。</p>
 * @param string $left_operand <p>左オペランドを表す文字列。</p>
 * @param string $right_operand <p>右オペランドを表す文字列。</p>
 * @param int $scale <p>このオプションパラメータを使用して、 結果の小数点以下の桁数を指定します。省略した場合は、<code>bcscale()</code> 関数でグローバルに設定した桁数をデフォルトとして使用します。それも設定されていない場合は <i>0</i> を使用します。</p>
 * @return string <p>二つの数の和を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.bcadd.php
 * @see bcsub()
 * @since PHP 4, PHP 5, PHP 7
 */
function bcadd(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * 2 つの任意精度数値を比較する
 * <p><code>left_operand</code> と <code>right_operand</code> を比較し、 結果を整数値で返します。</p>
 * @param string $left_operand <p>左オペランドを表す文字列。</p>
 * @param string $right_operand <p>右オペランドを表す文字列。</p>
 * @param int $scale <p>オプションの <code>scale</code> パラメータで、 小数点以下の桁数を指定します。ここまでを使用して比較を行います。</p>
 * @return int <p>ふたつのオペランドが等しければ 0、 <code>left_operand</code> が <code>right_operand</code> より大きければ返り値は 1、小さければ -1 を返します。</p>
 * @link http://php.net/manual/ja/function.bccomp.php
 * @since PHP 4, PHP 5, PHP 7
 */
function bccomp(string $left_operand, string $right_operand, int $scale = 0): int {}

/**
 * 2つの任意精度数値で除算を行う
 * <p><code>left_operand</code> を <code>right_operand</code> で除算します。</p>
 * @param string $left_operand <p>左オペランドを表す文字列。</p>
 * @param string $right_operand <p>右オペランドを表す文字列。</p>
 * @param int $scale <p>このオプションパラメータを使用して、 結果の小数点以下の桁数を指定します。省略した場合は、<code>bcscale()</code> 関数でグローバルに設定した桁数をデフォルトとして使用します。それも設定されていない場合は <i>0</i> を使用します。</p>
 * @return string <p>除算結果を文字列で返します。 <code>right_operand</code> が 0 の場合は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcdiv.php
 * @see bcmul()
 * @since PHP 4, PHP 5, PHP 7
 */
function bcdiv(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * 2 つの任意精度数値の剰余を取得する
 * <p><code>left_operand</code> の、 <code>modulus</code> を法とする剰余を取得します。</p>
 * @param string $left_operand <p>左オペランドを表す文字列。</p>
 * @param string $modulus <p>法を表す文字列。</p>
 * @return string <p>剰余を文字列で返します。 <code>modulus</code> が 0 の場合は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcmod.php
 * @see bcdiv()
 * @since PHP 4, PHP 5, PHP 7
 */
function bcmod(string $left_operand, string $modulus): string {}

/**
 * 2つの任意精度数値の乗算を行う
 * <p><code>left_operand</code> に <code>right_operand</code> を掛けます。</p>
 * @param string $left_operand <p>左オペランドを表す文字列。</p>
 * @param string $right_operand <p>右オペランドを表す文字列。</p>
 * @param int $scale <p>このオプションパラメータを使用して、 結果の小数点以下の桁数を指定します。省略した場合は、<code>bcscale()</code> 関数でグローバルに設定した桁数をデフォルトとして使用します。それも設定されていない場合は <i>0</i> を使用します。</p>
 * @return string <p>結果を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.bcmul.php
 * @see bcdiv()
 * @since PHP 4, PHP 5, PHP 7
 */
function bcmul(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * 任意精度数値をべき乗する
 * <p><code>left_operand</code> の <code>right_operand</code> 乗を求めます。</p>
 * @param string $left_operand <p>左オペランドを表す文字列。</p>
 * @param string $right_operand <p>右オペランドを表す文字列。</p>
 * @param int $scale <p>このオプションパラメータを使用して、 結果の小数点以下の桁数を指定します。省略した場合は、<code>bcscale()</code> 関数でグローバルに設定した桁数をデフォルトとして使用します。それも設定されていない場合は <i>0</i> を使用します。</p>
 * @return string <p>結果を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.bcpow.php
 * @see bcpowmod(), bcsqrt()
 * @since PHP 4, PHP 5, PHP 7
 */
function bcpow(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * 任意精度数値のべき乗の、指定した数値による剰余
 * <p><code>modulus</code> で割った余りを求めることを考慮して、 <code>left_operand</code> の <code>right_operand</code> 乗を高速に計算します。</p>
 * @param string $left_operand <p>左オペランドを表す文字列。</p>
 * @param string $right_operand <p>右オペランドを表す文字列。</p>
 * @param string $modulus <p>法を表す文字列。</p>
 * @param int $scale <p>このオプションパラメータを使用して、 結果の小数点以下の桁数を指定します。省略した場合は、<code>bcscale()</code> 関数でグローバルに設定した桁数をデフォルトとして使用します。それも設定されていない場合は <i>0</i> を使用します。</p>
 * @return string <p>結果を文字列で返します。<code>modulus</code> が 0 の場合は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcpowmod.php
 * @see bcpow(), bcmod()
 * @since PHP 5, PHP 7
 */
function bcpowmod(string $left_operand, string $right_operand, string $modulus, int $scale = 0): string {}

/**
 * すべての BC 演算関数におけるデフォルトのスケールを設定する
 * <p>デフォルトのスケールを設定します。これ以降、 BC 演算関数で明示的にスケールを指定しなかった場合にこの値を使用します。</p>
 * @param int $scale <p>スケール。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcscale.php
 * @since PHP 4, PHP 5, PHP 7
 */
function bcscale(int $scale): bool {}

/**
 * 任意精度数値の平方根を取得する
 * <p><code>operand</code> の平方根を返します。</p>
 * @param string $operand <p>オペランドを表す文字列。</p>
 * @param int $scale <p>このオプションパラメータを使用して、 結果の小数点以下の桁数を指定します。省略した場合は、<code>bcscale()</code> 関数でグローバルに設定した桁数をデフォルトとして使用します。それも設定されていない場合は <i>0</i> を使用します。</p>
 * @return string <p>平方根を文字列で返します。 <code>operand</code> が負の場合は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcsqrt.php
 * @see bcpow()
 * @since PHP 4, PHP 5, PHP 7
 */
function bcsqrt(string $operand, int $scale = 0): string {}

/**
 * 任意精度数値の減算を行う
 * <p><code>left_operand</code> から <code>right_operand</code> を引きます。</p>
 * @param string $left_operand <p>左オペランドを表す文字列。</p>
 * @param string $right_operand <p>右オペランドを表す文字列。</p>
 * @param int $scale <p>このオプションパラメータを使用して、 結果の小数点以下の桁数を指定します。省略した場合は、<code>bcscale()</code> 関数でグローバルに設定した桁数をデフォルトとして使用します。それも設定されていない場合は <i>0</i> を使用します。</p>
 * @return string <p>減算の結果を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.bcsub.php
 * @see bcadd()
 * @since PHP 4, PHP 5, PHP 7
 */
function bcsub(string $left_operand, string $right_operand, int $scale = 0): string {}

