<?php



/**
 * <p>A GMP number. These objects support overloaded arithmetic, bitwise and comparison operators.</p>
 * <p><b>注意</b>:</p>
 * <p><b>GMP</b> オブジェクトを操作するオブジェクト指向インターフェイスは用意されていません。 手続き型の GMP API を使いましょう。</p>
 * @link http://php.net/manual/ja/class.gmp.php
 * @since PHP 5 >= 5.6.0, PHP 7
 */
class GMP implements \Serializable {
}

/**
 * 絶対値
 * <p>ある数の絶対値を返します。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p><code>a</code> の絶対値を GMP 数で返します。</p>
 * @link http://php.net/manual/ja/function.gmp-abs.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_abs(\GMP $a): \GMP {}

/**
 * 数値を加算する
 * <p>2 つの数を加算します。</p>
 * @param \GMP $a <p>足される数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p>足す数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>加算の結果を GMP 数で返します。</p>
 * @link http://php.net/manual/ja/function.gmp-add.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_add(\GMP $a, \GMP $b): \GMP {}

/**
 * ビット AND を計算する
 * <p>2 つの GMP 数のビット AND を計算します。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>ビット <i>AND</i> 演算の結果を GMP 数で返します。</p>
 * @link http://php.net/manual/ja/function.gmp-and.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_and(\GMP $a, \GMP $b): \GMP {}

/**
 * Calculates binomial coefficient
 * <p>Calculates the binomial coefficient C(n, k).</p>
 * @param mixed $n <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $k
 * @return GMP <p>Returns the binomial coefficient C(n, k), 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.gmp-binomial.php
 * @since PHP 7 >= 7.3.0
 */
function gmp_binomial($n, int $k): \GMP {}

/**
 * ビットをクリアする
 * <p><code>a</code> のビット <code>index</code> をクリア (0 に設定) します。index は 0 から始まります。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $index <p>クリアするビットのインデックス。0 が最下位ビットを表します。</p>
 * @return void <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-clrbit.php
 * @see gmp_setbit(), gmp_testbit()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_clrbit(\GMP $a, int $index): void {}

/**
 * 数を比較する
 * <p>ふたつの数を比較します。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return int <p><i>a &gt; b</i> の場合に正の値、<i>a = b</i> の場合にゼロ、<i>a &lt; b</i> の場合に負の値を返します。</p>
 * @link http://php.net/manual/ja/function.gmp-cmp.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_cmp(\GMP $a, \GMP $b): int {}

/**
 * 1 の補数を計算する
 * <p><code>a</code> について、1 の補数を返します。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p><code>a</code> についての 1 の補数を GMP 数で返します。</p>
 * @link http://php.net/manual/ja/function.gmp-com.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_com(\GMP $a): \GMP {}

/**
 * gmp_div_q() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>gmp_div_q()</code>.</p>
 * @param \GMP $a <p>割られる数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p><code>a</code> を割る数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $round <p>結果の丸め方は <code>round</code> で指定し、次の値を指定可能です。</p><ul> <li>  <code>GMP_ROUND_ZERO</code>: 結果は 0 の方に丸められます。  </li> <li>  <code>GMP_ROUND_PLUSINF</code>: 結果は、 <i>+infinity</i> の方に丸められます。  </li> <li>  <code>GMP_ROUND_MINUSINF</code>: 結果は、 <i>-infinity</i> の方に丸められます。  </li> </ul> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP
 * @link http://php.net/manual/ja/function.gmp-div.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_div(\GMP $a, \GMP $b, int $round = GMP_ROUND_ZERO): \GMP {}

/**
 * 数値を除算する
 * <p><code>a</code> を <code>b</code> で割り、 結果を整数で返します。</p>
 * @param \GMP $a <p>割られる数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p><code>a</code> を割る数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $round <p>結果の丸め方は <code>round</code> で指定し、次の値を指定可能です。</p><ul> <li>  <code>GMP_ROUND_ZERO</code>: 結果は 0 の方に丸められます。  </li> <li>  <code>GMP_ROUND_PLUSINF</code>: 結果は、 <i>+infinity</i> の方に丸められます。  </li> <li>  <code>GMP_ROUND_MINUSINF</code>: 結果は、 <i>-infinity</i> の方に丸められます。  </li> </ul> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-div-q.php
 * @see gmp_div_r(), gmp_div_qr()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_div_q(\GMP $a, \GMP $b, int $round = GMP_ROUND_ZERO): \GMP {}

/**
 * 除算を行い、商と余りを得る
 * <p>この関数は、<code>n</code> を <code>d</code> で割ります。</p>
 * @param \GMP $n <p>割られる数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $d <p><code>n</code> を割る数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $round <p>引数 <code>round</code> の説明については、 <code>gmp_div_q()</code> 関数を参照ください。</p>
 * @return array <p>配列を返します。配列の最初の要素は <i>[n/d]</i> (割算の結果の整数値)、2 番目の要素は <i>(n - [n/d] &#42; d)</i> (割算の余り) です。</p>
 * @link http://php.net/manual/ja/function.gmp-div-qr.php
 * @see gmp_div_q(), gmp_div_r()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_div_qr(\GMP $n, \GMP $d, int $round = GMP_ROUND_ZERO): array {}

/**
 * 除算の余りを計算する
 * <p><code>n</code> を <code>d</code> で整数として割った際の余りを計算します。余りは、引数 <code>n</code> がゼロでないばあいに、これと同じ符号を有します。</p>
 * @param \GMP $n <p>割られる数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $d <p><code>n</code> を割る数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $round <p>引数 <code>round</code> の説明については、関数 <code>gmp_div_q()</code> を参照ください。</p>
 * @return resource <p>余りを GMP 数で返します。</p>
 * @link http://php.net/manual/ja/function.gmp-div-r.php
 * @see gmp_div_q(), gmp_div_qr()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_div_r(\GMP $n, \GMP $d, int $round = GMP_ROUND_ZERO) {}

/**
 * 正確な除算
 * <p>高速な "exact division" アルゴリズムを使用して <code>n</code> を <code>d</code> で割ります。 この関数は、<code>n</code> が <code>d</code> で割り切れることがわかっている場合にのみ正確な結果を出力します。</p>
 * @param \GMP $n <p>割られる数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $d <p><code>a</code> を割る数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-divexact.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_divexact(\GMP $n, \GMP $d): \GMP {}

/**
 * Export to a binary string
 * <p>Export a GMP number to a binary string</p>
 * @param \GMP $gmpnumber <p>The GMP number being exported</p>
 * @param int $word_size <p>Default value is 1. The number of bytes in each chunk of binary data. This is mainly used in conjunction with the options parameter.</p>
 * @param int $options <p>Default value is GMP_MSW_FIRST | GMP_NATIVE_ENDIAN.</p>
 * @return string <p>Returns a string失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.gmp-export.php
 * @see gmp_import()
 * @since PHP 5 >= 5.6.1, PHP 7
 */
function gmp_export(\GMP $gmpnumber, int $word_size = 1, int $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): string {}

/**
 * 階乗
 * <p><code>a</code> の階乗 (<i>a!</i>) を計算します。</p>
 * @param mixed $a <p>階乗を求める数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-fact.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_fact($a): \GMP {}

/**
 * 最大公約数を計算する
 * <p><code>a</code> と <code>b</code> の最大公約数を計算します。 引数のどちらかまたは両方が負の場合でも結果は常に正となります。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p><code>a</code> と <code>b</code> の両方を割り切ることができる正の数を GMP 数で返します。</p>
 * @link http://php.net/manual/ja/function.gmp-gcd.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_gcd(\GMP $a, \GMP $b): \GMP {}

/**
 * 最大公約数と乗数を計算する
 * <p><i>a&#42;s + b&#42;t = g = gcd(a,b)</i> となるような g, s, t を計算します。ただし、gcd は最大公約数です。g, s, t を要素とする配列を返します。</p><p>この関数は、2 変数の線形不定方程式 (linear Diophantine equations) を解く際に使用することが可能です。 この方程式は、<i>a&#42;x + b&#42;y = c</i> のような形式で、 整数のみを解とするものです。 詳細な情報は、» MathWorld の "Diophantine Equation" についてのページを参照ください。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return array <p>GMP 数の配列を返します。</p>
 * @link http://php.net/manual/ja/function.gmp-gcdext.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_gcdext(\GMP $a, \GMP $b): array {}

/**
 * ハミング距離
 * <p><code>a</code> と <code>b</code> の間のハミング距離を返します。オペランドは共に非負とする必要があります。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p> <p>正の数である必要があります。</p>
 * @param \GMP $b <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p> <p>正の数である必要があります。</p>
 * @return int <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-hamdist.php
 * @see gmp_popcount(), gmp_xor()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_hamdist(\GMP $a, \GMP $b): int {}

/**
 * Import from a binary string
 * <p>Import a GMP number from a binary string</p>
 * @param string $data <p>The binary string being imported</p>
 * @param int $word_size <p>Default value is 1. The number of bytes in each chunk of binary data. This is mainly used in conjunction with the options parameter.</p>
 * @param int $options <p>Default value is GMP_MSW_FIRST | GMP_NATIVE_ENDIAN.</p>
 * @return GMP <p>Returns a GMP number失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.gmp-import.php
 * @see gmp_export()
 * @since PHP 5 >= 5.6.1, PHP 7
 */
function gmp_import(string $data, int $word_size = 1, int $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): \GMP {}

/**
 * GMP 数を作成する
 * <p>整数または文字列から GMP 数を生成します。</p>
 * @param mixed $number <p>整数値あるいは文字列。文字列表現には、 十進数か十六進数、あるいは八進数を使用可能です。</p>
 * @param int $base <p>基数。</p> <p>基数には 2 から 36 までの値を指定することができます。 基数を 0 (デフォルト値) にすると、最初の文字に応じて実際の基数を決定します。 最初の二文字が <i>0x</i> あるいは <i>0X</i> の場合は十六進数、それ以外で最初の文字が "0" の場合は八進数、 それ以外の場合は十進数となります。</p>
 * @return GMP <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-init.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_init($number, int $base = 0): \GMP {}

/**
 * GMP 数を整数に変換する
 * <p>この関数は、GMP 数を PHP ネイティブの整数に変換します。</p>
 * @param \GMP $gmpnumber <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return int <p><code>gmpnumber</code> を整数に変換した結果を返します。</p>
 * @link http://php.net/manual/ja/function.gmp-intval.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_intval(\GMP $gmpnumber): int {}

/**
 * 法による逆
 * <p><code>b</code> を法とした <code>a</code> の逆を計算します。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>成功した場合に GMP 数、逆が存在しない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.gmp-invert.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_invert(\GMP $a, \GMP $b): \GMP {}

/**
 * ヤコビ記号
 * <p><code>a</code> および <code>p</code> の » ヤコビ記号 を計算します。<code>p</code> は正の奇数である必要があります。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $p <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p> <p>正の奇数でなければなりません。</p>
 * @return int <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-jacobi.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_jacobi(\GMP $a, \GMP $p): int {}

/**
 * ルジェンドル記号
 * <p><code>a</code> と <code>p</code> の » ルジェンドル記号 を計算します。<code>p</code> は、正の奇数である必要があります。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $p <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p> <p>正の奇数でなければなりません。</p>
 * @return int <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-legendre.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_legendre(\GMP $a, \GMP $p): int {}

/**
 * モジュロ演算
 * <p><code>d</code> を法として <code>n</code> を計算します。結果は常に非負であり、 <code>d</code> の符号は無視されます。</p>
 * @param \GMP $n <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $d <p>法として使用する値。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-mod.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_mod(\GMP $n, \GMP $d): \GMP {}

/**
 * 数値を乗算する
 * <p><code>a</code> と <code>b</code> をかけ、 結果を返します。</p>
 * @param \GMP $a <p><code>b</code> を掛けられる数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p><code>a</code> に掛ける数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-mul.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_mul(\GMP $a, \GMP $b): \GMP {}

/**
 * 符号を反転する
 * <p>ある数の符号を反転したものを返します。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>-<code>a</code> を GMP 数で返します。</p>
 * @link http://php.net/manual/ja/function.gmp-neg.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_neg(\GMP $a): \GMP {}

/**
 * 次の素数を見つける
 * <p>次の素数を見つけます。</p>
 * @param int $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p><code>a</code> より大きい次の素数を GMP 数として返します。</p>
 * @link http://php.net/manual/ja/function.gmp-nextprime.php
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function gmp_nextprime(int $a): \GMP {}

/**
 * ビット OR を計算する
 * <p>2 つの GMP 数のビット OR を計算します。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-or.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_or(\GMP $a, \GMP $b): \GMP {}

/**
 * 平方数かどうかを調べる
 * <p>その数が平方数であるかどうかを調べます。</p>
 * @param \GMP $a <p>平方数かどうかを調べたい数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return bool <p><code>a</code> が平方数の場合に <b><code>TRUE</code></b>、その他の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.gmp-perfect-square.php
 * @see gmp_sqrt(), gmp_sqrtrem()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_perfect_square(\GMP $a): bool {}

/**
 * セットされているビットの数
 * <p>セットされているビットの数を返します。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return int <p><code>a</code> にセットされているビットの数を返します。</p>
 * @link http://php.net/manual/ja/function.gmp-popcount.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_popcount(\GMP $a): int {}

/**
 * べき乗を計算する
 * <p><code>base</code> の <code>exp</code> 乗を計算します。</p>
 * @param \GMP $base <p>もととなる数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $exp <p>正の数で、<code>base</code> を何乗するかを指定します。</p>
 * @return GMP <p>べき乗の結果を GMP 数で返します。 <i>0^0</i> は 1 となります。</p>
 * @link http://php.net/manual/ja/function.gmp-pow.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_pow(\GMP $base, int $exp): \GMP {}

/**
 * べき乗とモジュロを計算する
 * <p><code>mod</code> を法として (<code>base</code> の <code>exp</code> 乗) を計算します。 <code>exp</code> が負の場合、結果は未定義(undefined) となります。</p>
 * @param \GMP $base <p>もととなる数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $exp <p>正の数で、<code>base</code> を何乗するかを指定します。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $mod <p>モジュロ。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>結果を GMP 数で返します。</p>
 * @link http://php.net/manual/ja/function.gmp-powm.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_powm(\GMP $base, \GMP $exp, \GMP $mod): \GMP {}

/**
 * 数が"おそらく素数"であるかどうかを調べる
 * <p>この関数は、Miller-Rabin の確率的テストを使用して、 その数が素数かどうかを調べます。</p>
 * @param \GMP $a <p>素数かどうかを調べたい数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $reps <p><code>reps</code> の合理的な値は 5 から 10 くらいまで変動します (デフォルトは 10 です)。より大きい値を指定すると、素数でない数を 「おそらく素数である」と誤認識する可能性が小さくなります。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return int <p>この関数が 0 を返す場合、<code>a</code> は確実に素数ではありません。 1 を返す場合、<code>a</code> は「おそらく」 素数です。2 を返す場合、<code>a</code> は確実に素数です。</p>
 * @link http://php.net/manual/ja/function.gmp-prob-prime.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_prob_prime(\GMP $a, int $reps = 10): int {}

/**
 * 乱数を生成する
 * <p>乱数を生成します。乱数の範囲は、ゼロから <code>limiter</code> &#42; limb のビット数となります。 <code>limiter</code> が負の場合、 負の数が生成されます。</p><p>limb は GMP の内部機構です。limb のビット数は固定ではなく、 システムによって変化します。一般的には limb は 16 あるいは 32 ビットですが、それが保証されているわけではありません。</p>
 * @param int $limiter <p>リミッタ。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>ランダムな GMP 数を返します。</p>
 * @link http://php.net/manual/ja/function.gmp-random.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_random(int $limiter = 20): \GMP {}

/**
 * Random number
 * <p>Generate a random number. The number will be between 0 and (2 &#42;&#42; <code>bits</code>) - 1.</p><p><code>bits</code> must greater than 0, and the maximum value is restricted by available memory.</p>
 * @param int $bits <p>The number of bits.</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>A random GMP number.</p>
 * @link http://php.net/manual/ja/function.gmp-random-bits.php
 * @since PHP 5 >= 5.6.3, PHP 7
 */
function gmp_random_bits(int $bits): \GMP {}

/**
 * Random number
 * <p>Generate a random number. The number will be between <code>min</code> and <code>max</code>.</p><p><code>min</code> and <code>max</code> can both be negative but <code>min</code> must always be less than <code>max</code>.</p>
 * @param \GMP $min <p>A GMP number representing the lower bound for the random number</p>
 * @param \GMP $max <p>A GMP number representing the upper bound for the random number</p>
 * @return GMP <p>A random GMP number.</p>
 * @link http://php.net/manual/ja/function.gmp-random-range.php
 * @since PHP 5 >= 5.6.3, PHP 7
 */
function gmp_random_range(\GMP $min, \GMP $max): \GMP {}

/**
 * Sets the RNG seed
 * @param mixed $seed <p>The seed to be set for the <code>gmp_random()</code>, <code>gmp_random_bits()</code>, and <code>gmp_random_range()</code> functions.</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return void <p>成功した場合に <b><code>NULL</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.gmp-random-seed.php
 * @see gmp_init(), gmp_random(), gmp_random_bits(), gmp_random_range()
 * @since PHP 7
 */
function gmp_random_seed($seed): void {}

/**
 * Take the integer part of nth root
 * <p>Takes the <code>nth</code> root of <code>a</code> and returns the integer component of the result.</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $nth <p>The positive root to take of <code>a</code>.</p>
 * @return GMP <p>The integer component of the resultant root, as a GMP number.</p>
 * @link http://php.net/manual/ja/function.gmp-root.php
 * @since PHP 5 >= 5.6.0, PHP 7
 */
function gmp_root(\GMP $a, int $nth): \GMP {}

/**
 * Take the integer part and remainder of nth root
 * <p>Takes the <code>nth</code> root of <code>a</code> and returns the integer component and remainder of the result.</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $nth <p>The positive root to take of <code>a</code>.</p>
 * @return array <p>A two element array, where the first element is the integer component of the root, and the second element is the remainder, both represented as GMP numbers.</p>
 * @link http://php.net/manual/ja/function.gmp-rootrem.php
 * @since PHP 5 >= 5.6.0, PHP 7
 */
function gmp_rootrem(\GMP $a, int $nth): array {}

/**
 * 0 を探す
 * <p>ビット <code>start</code> から最上位ビットの方に、 最初のクリアビットが見付かるまで <code>a</code> をスキャンします。</p>
 * @param \GMP $a <p>スキャンする数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $start <p>開始するビット。</p>
 * @return int <p>ビットが見つかった場所のインデックスを整数値で返します。 インデックスは 0 から始まります。</p>
 * @link http://php.net/manual/ja/function.gmp-scan0.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_scan0(\GMP $a, int $start): int {}

/**
 * 1 を探す
 * <p>ビット <code>start</code> から最上位ビットの方に、 セットされているビットが最初に見付かるまで <code>a</code> をスキャンします。</p>
 * @param \GMP $a <p>スキャンする数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $start <p>開始するビット。</p>
 * @return int <p>ビットが見つかった場所のインデックスを整数値で返します。 セットされているビットが存在しない場合には -1 を返します。</p>
 * @link http://php.net/manual/ja/function.gmp-scan1.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_scan1(\GMP $a, int $start): int {}

/**
 * ビットを設定する
 * <p><code>a</code> のビット <code>index</code> を設定します。</p>
 * @param \GMP $a <p>変更したい値。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $index <p>設定するビットのインデックス。0 は最下位ビットを表します。</p>
 * @param bool $bit_on <p>true にするとそのビットを設定し (値を 1/on にし)、 false にするとそのビットをクリアします (値を 0/off にします)。</p>
 * @return void <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-setbit.php
 * @see gmp_clrbit(), gmp_testbit()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_setbit(\GMP &$a, int $index, bool $bit_on = true): void {}

/**
 * 数の符号
 * <p>数の符号を調べます。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return int <p><code>a</code> が正の場合に 1、 <code>a</code> が負の場合に -1、そして <code>a</code> がゼロの場合に 0 を返します。</p>
 * @link http://php.net/manual/ja/function.gmp-sign.php
 * @see gmp_abs(), abs()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_sign(\GMP $a): int {}

/**
 * 平方根を計算する
 * <p><code>a</code> の平方根を計算します。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>平方根の整数部分を GMP 数で返します。</p>
 * @link http://php.net/manual/ja/function.gmp-sqrt.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_sqrt(\GMP $a): \GMP {}

/**
 * 余りつきの平方根
 * <p>ある数の平方根を余りつきで計算します。</p>
 * @param \GMP $a <p>平方根を計算したい数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return array <p>最初の要素が <code>a</code> の整数平方根 (<code>gmp_sqrt()</code>も参照ください)、2 番目の要素が余り (すなわち、<code>a</code> と最初の要素の 2 乗の差) であるような配列を返します。</p>
 * @link http://php.net/manual/ja/function.gmp-sqrtrem.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_sqrtrem(\GMP $a): array {}

/**
 * GMP 数を文字列に変換する
 * <p>GMP 数を <code>base</code> を基数とする文字列表現に変換します。 デフォルトの基数は 10 です。</p>
 * @param \GMP $gmpnumber <p>文字列の変換したい GMP 数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $base <p>返り値の基数。デフォルトは 10 です。 基数として使用可能な値は 2 から 62 までおよび -2 から -36 までです。</p>
 * @return string <p>数を文字列で表したものを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-strval.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_strval(\GMP $gmpnumber, int $base = 10): string {}

/**
 * 数値の減算
 * <p><code>a</code> から <code>b</code> を引いた結果を返します。</p>
 * @param \GMP $a <p>引かれる数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p><code>a</code> から引く数。</p> <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-sub.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_sub(\GMP $a, \GMP $b): \GMP {}

/**
 * ビットが設定されているかどうかを調べる
 * <p>指定したビットが設定されているかどうかを調べます。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param int $index <p>調べたいビット。</p>
 * @return bool <p>リソース <code>$a</code> にビットが設定されている場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.gmp-testbit.php
 * @see gmp_setbit(), gmp_clrbit()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function gmp_testbit(\GMP $a, int $index): bool {}

/**
 * ビット XOR を計算する
 * <p>2 つの GMP 数のビット排他的論理和 (XOR) を計算します。</p>
 * @param \GMP $a <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @param \GMP $b <p>PHP 5.5 以前での GMP 数リソース、PHP 5.6 以降での GMP オブジェクト、あるいは数値に変換可能な数値形式の文字列。</p>
 * @return GMP <p>PHP 5.5 以前は GMP 数リソースを、そして PHP 5.6 以降は GMP オブジェクトを返します。</p>
 * @link http://php.net/manual/ja/function.gmp-xor.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function gmp_xor(\GMP $a, \GMP $b): \GMP {}

define('GMP_BIG_ENDIAN', null);

define('GMP_LITTLE_ENDIAN', null);

define('GMP_LSW_FIRST', null);

define('GMP_MSW_FIRST', null);

define('GMP_NATIVE_ENDIAN', null);

define('GMP_ROUND_MINUSINF', null);

define('GMP_ROUND_PLUSINF', null);

define('GMP_ROUND_ZERO', null);

/**
 * GMP ライブラリのバージョン。
 */
define('GMP_VERSION', null);

