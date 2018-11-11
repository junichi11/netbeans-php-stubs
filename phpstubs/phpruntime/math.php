<?php



/**
 * 絶対値
 * <p><code>number</code> の絶対値を返します。</p>
 * @param mixed $number <p>処理する数値。</p>
 * @return number <p><code>number</code> の絶対値を返します。もし <code>number</code> の型が <code>float</code> であった場合、 返り値の型も <code>float</code> となります。それ以外の場合は 返り値の型は <code>integer</code> となります（<code>float</code> は、 <code>integer</code> の最大値より大きい値をとることがありえるからです）。</p>
 * @link http://php.net/manual/ja/function.abs.php
 * @see gmp_abs(), gmp_sign()
 * @since PHP 4, PHP 5, PHP 7
 */
function abs($number) {}

/**
 * 逆余弦（アークコサイン）
 * <p><code>arg</code> のアークコサインをラジアンで返します。 <b>acos()</b> は <code>cos()</code> の逆関数で、 <b>acos()</b> がとりうる範囲内のすべての a について <i>a==cos(acos(a))</i> が成立します。</p>
 * @param float $arg <p>処理する角度。</p>
 * @return float <p><code>arg</code> のアークコサインをラジアンで返します。</p>
 * @link http://php.net/manual/ja/function.acos.php
 * @see cos(), acosh(), asin(), atan()
 * @since PHP 4, PHP 5, PHP 7
 */
function acos(float $arg): float {}

/**
 * 逆双曲線余弦（アークハイパボリックコサイン）
 * <p><code>arg</code> のアークハイパボリックコサインを返します。 つまり、ハイパボリックコサインが <code>arg</code> となる値です。</p>
 * @param float $arg <p>処理する値。</p>
 * @return float <p><code>arg</code> のアークハイパボリックコサインを返します。</p>
 * @link http://php.net/manual/ja/function.acosh.php
 * @see cosh(), acos(), atanh()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function acosh(float $arg): float {}

/**
 * 逆正弦（アークサイン）
 * <p><code>arg</code> のアークサインをラジアンで返します。 <b>asin()</b> は <code>sin()</code> の逆関数で、 <b>asin()</b> がとりうる範囲内のすべての a について <i>a==sin(asin(a))</i> が成立します。</p>
 * @param float $arg <p>処理する角度。</p>
 * @return float <p><code>arg</code> のアークサインをラジアンで返します。</p>
 * @link http://php.net/manual/ja/function.asin.php
 * @see sin(), asinh(), acos(), atan()
 * @since PHP 4, PHP 5, PHP 7
 */
function asin(float $arg): float {}

/**
 * 逆双曲線正弦（アークハイパボリックサイン）
 * <p><code>arg</code> のアークハイパボリックサインを返します。 つまり、ハイパボリックサインが <code>arg</code> となる値です。</p>
 * @param float $arg <p>処理する角度。</p>
 * @return float <p><code>arg</code> のアークハイパボリックサインを返します。</p>
 * @link http://php.net/manual/ja/function.asinh.php
 * @see sinh(), asin(), acosh(), atanh()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function asinh(float $arg): float {}

/**
 * 逆正接（アークタンジェント）
 * <p><code>arg</code> のアークタンジェントをラジアンで返します。 <b>atan()</b> is the は <code>tan()</code> の逆関数で、 <b>atan()</b> がとりうる範囲内のすべての a について <i>a==tan(atan(a))</i> が成立します。</p>
 * @param float $arg <p>処理する引数。</p>
 * @return float <p><code>arg</code> のアークタンジェントをラジアンで返します。</p>
 * @link http://php.net/manual/ja/function.atan.php
 * @see tan(), atanh(), asin(), acos()
 * @since PHP 4, PHP 5, PHP 7
 */
function atan(float $arg): float {}

/**
 * 2 変数のアークタンジェント
 * <p>この関数は、2 つの変数 <code>x</code> および <code>y</code> のアークタンジェントを計算します。 <code>y</code> / <code>x</code> のアークタンジェントを計算するのに似ていますが、 2 つの引数の符号を用いて結果の象限を定義することが異なっています。</p><p>この関数は、結果を -PI から PI の間(両端を含む)のラジアンで返します。</p>
 * @param float $y <p>被除数。</p>
 * @param float $x <p>除数。</p>
 * @return float <p><code>y</code>/<code>x</code> のアークタンジェントをラジアンで返します。</p>
 * @link http://php.net/manual/ja/function.atan2.php
 * @see atan()
 * @since PHP 4, PHP 5, PHP 7
 */
function atan2(float $y, float $x): float {}

/**
 * 逆双曲線正接（アークハイパボリックタンジェント）
 * <p><code>arg</code> のアークハイパボリックタンジェントを返します。 つまり、ハイパボリックタンジェントが <code>arg</code> となる値です。</p>
 * @param float $arg <p>処理する引数。</p>
 * @return float <p><code>arg</code> のアークハイパボリックタンジェントを返します。</p>
 * @link http://php.net/manual/ja/function.atanh.php
 * @see tanh(), asinh(), acosh()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function atanh(float $arg): float {}

/**
 * 数値の基数を任意に変換する
 * <p><code>number</code> を基数 <code>tobase</code> で表した文字列を返します。 <code>number</code> の基数は、 <code>frombase</code> で指定します。 <code>frombase</code> および <code>tobase</code> は、ともに 2 から 36 までである必要があります。 10 より大きな基数を有する数の各桁は、文字 a-z で表されます。 この場合、a は 10、b は 11、z は 35 を意味します。 <code>number</code> は、大文字小文字を区別せずに扱います。</p><p>大きな数値で <b>base_convert()</b> を使用すると、 精度が失われてしまうことがあります。これは、内部で使用している "double" や "float" の性質によるものです。詳細な情報や制限については マニュアルの浮動小数点数 のセクションを参照ください。</p>
 * @param string $number <p>変換する数値。 無効な文字が含まれている場合は、何もエラーを出さずにただ無視します。</p>
 * @param int $frombase <p>変換前の <code>number</code> の基数。</p>
 * @param int $tobase <p>変換後の <code>number</code> の基数。</p>
 * @return string <p><code>number</code> を基数 <code>tobase</code> で表した値を返します。</p>
 * @link http://php.net/manual/ja/function.base-convert.php
 * @see intval()
 * @since PHP 4, PHP 5, PHP 7
 */
function base_convert(string $number, int $frombase, int $tobase): string {}

/**
 * 2 進数 を 10 進数に変換する
 * <p>引数 <code>binary_string</code> により指定された 2 進数と等価な 10 進数を返します。</p><p><b>bindec()</b> は、2 進数を <code>integer</code> に変換します。 サイズの問題により、必要に応じて <code>float</code> となることもあります。</p><p><b>bindec()</b> は、すべての <code>binary_string</code> 値を符号なし整数として扱います。 これは、<b>bindec()</b> が最上位ビットを 符号ビットではなく別の桁とみなすからです。</p>
 * @param string $binary_string <p>変換したい 2 進数文字列。</p>
 * @return number <p><code>binary_string</code> を 10 進に変換した値を返します。</p>
 * @link http://php.net/manual/ja/function.bindec.php
 * @see decbin(), octdec(), hexdec(), base_convert()
 * @since PHP 4, PHP 5, PHP 7
 */
function bindec(string $binary_string) {}

/**
 * 端数の切り上げ
 * <p><code>value</code> の次に大きい整数値を返します。</p>
 * @param float $value <p>丸める値。</p>
 * @return float <p><code>value</code> の次に大きい整数値を返します。 <b>ceil()</b> の返り値は <code>float</code> 型と なります。これは、<code>float</code> 値の範囲は通常 <code>int</code> よりも広いためです。</p>
 * @link http://php.net/manual/ja/function.ceil.php
 * @see floor(), round()
 * @since PHP 4, PHP 5, PHP 7
 */
function ceil(float $value): float {}

/**
 * 余弦（コサイン）
 * <p><b>cos()</b> は、<code>arg</code> のコサインを 返します。<code>arg</code> はラジアンです。</p>
 * @param float $arg <p>ラジアンで表した角度。</p>
 * @return float <p><code>arg</code> のコサインを返します。</p>
 * @link http://php.net/manual/ja/function.cos.php
 * @see acos(), sin(), tan(), deg2rad()
 * @since PHP 4, PHP 5, PHP 7
 */
function cos(float $arg): float {}

/**
 * 双曲線余弦（ハイパボリックコサイン）
 * <p><code>arg</code> のハイパボリックコサインを返します。 これは、<i>(exp(arg) + exp(-arg))/2</i> で定義されます。</p>
 * @param float $arg <p>処理する引数。</p>
 * @return float <p><code>arg</code> のハイパボリックコサインを返します。</p>
 * @link http://php.net/manual/ja/function.cosh.php
 * @see cos(), acosh(), sinh()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function cosh(float $arg): float {}

/**
 * 10 進数を 2 進数に変換する
 * <p>引数 <code>number</code> を 2 進数表現した文字列を返します。</p>
 * @param int $number <p>変換したい 10 進数値。</p>  <b>32 ビットマシンでの入力の範囲</b>      正の <code>number</code>  負の <code>number</code>  返り値     0   0   1   1   2   10   ... normal progression ...   2147483646   1111111111111111111111111111110   2147483647 (符号付き integer の最大値)   1111111111111111111111111111111 (1 が 31 個)   2147483648 -2147483648 10000000000000000000000000000000   ... normal progression ...   4294967294 -2 11111111111111111111111111111110   4294967295 (符号なし integer の最大値) -1 11111111111111111111111111111111 (1 が 32 個)     <b>64 ビットマシンでの入力の範囲</b>      正の <code>number</code>  負の <code>number</code>  返り値     0   0   1   1   2   10   ... normal progression ...   9223372036854775806   111111111111111111111111111111111111111111111111111111111111110   9223372036854775807 (符号付き integer の最大値)   111111111111111111111111111111111111111111111111111111111111111 (1 が 63 個)     -9223372036854775808 1000000000000000000000000000000000000000000000000000000000000000   ... normal progression ...     -2 1111111111111111111111111111111111111111111111111111111111111110     -1 1111111111111111111111111111111111111111111111111111111111111111 (1 が 64 個)
 * @return string <p><code>binary_string</code> を 2 進文字列で表した値を返します。</p>
 * @link http://php.net/manual/ja/function.decbin.php
 * @see bindec(), decoct(), dechex(), base_convert(), printf(), sprintf()
 * @since PHP 4, PHP 5, PHP 7
 */
function decbin(int $number): string {}

/**
 * 10 進数を 16 進数に変換する
 * <p><code>number</code> で指定した符号なし整数値を 16 進数表現した文字列を返します。</p><p>変換できる最大の数字は、32 ビットプラットフォームの場合は <b><code>PHP_INT_MAX</code></b><i> &#42; 2 + 1</i> (<i>-1</i>) です。これは 10 進数で表すと <i>4294967295</i> であり、 <b>dechex()</b> が返す結果は <i>ffffffff</i> になります。</p>
 * @param int $number <p>変換したい 10 進数値。</p> <p>PHP の <code>integer</code> は符号付き整数ですが、 <b>dechex()</b> ではこれを符号なし整数として扱います。 つまり、負の整数を渡しても、それを符号なし整数として処理します。</p>
 * @return string <p><code>number</code> を 16 進文字列で表した値を返します。</p>
 * @link http://php.net/manual/ja/function.dechex.php
 * @see hexdec(), decbin(), decoct(), base_convert()
 * @since PHP 4, PHP 5, PHP 7
 */
function dechex(int $number): string {}

/**
 * 10 進数を 8 進数に変換する
 * <p>引数 <code>number</code> を 8 進数表現した文字列を返します。 変換出来る最大の数字はプラットフォームによって異なります。 32 ビットプラットフォームでは、通常は十進数の <i>4294967295</i> であり、 これは <i>37777777777</i> を返します。 64 ビットプラットフォームでは、通常は十進数の <i>9223372036854775807</i> であり、これは <i>777777777777777777777</i> を返します。</p>
 * @param int $number <p>変換したい 10 進数値。</p>
 * @return string <p><code>number</code> を 8 進文字列で表した値を返します。</p>
 * @link http://php.net/manual/ja/function.decoct.php
 * @see octdec(), decbin(), dechex(), base_convert()
 * @since PHP 4, PHP 5, PHP 7
 */
function decoct(int $number): string {}

/**
 * 度単位の数値をラジアン単位に変換する
 * <p>この関数は、<code>number</code> の単位を度からラジアンに変換します。</p>
 * @param float $number <p>度で表した角度。</p>
 * @return float <p><code>number</code> と同等な値をラジアンで表したものを返します。</p>
 * @link http://php.net/manual/ja/function.deg2rad.php
 * @see rad2deg()
 * @since PHP 4, PHP 5, PHP 7
 */
function deg2rad(float $number): float {}

/**
 * e の累乗を計算する
 * <p><b><code>e</code></b> を <code>arg</code> 乗した値を返します。</p><p><b>注意</b>:</p><p>'<b><code>e</code></b>' は自然対数の底で、およそ 2.718282 です。</p>
 * @param float $arg <p>処理する引数。</p>
 * @return float <p>'e' の <code>arg</code> 乗を返します。</p>
 * @link http://php.net/manual/ja/function.exp.php
 * @see log(), pow()
 * @since PHP 4, PHP 5, PHP 7
 */
function exp(float $arg): float {}

/**
 * 値がゼロに近い時にでも精度を保つために exp(number) - 1 を返す
 * <p><b>expm1()</b> は、 'exp(<code>number</code>) - 1' の値を返します。 <code>number</code> がゼロに近く、 'exp (<code>number</code>) - 1' が引き算時の桁落ちのために 不正確となるような場合でも正確な値が計算できる方法を使用します。</p>
 * @param float $arg <p>処理する引数。</p>
 * @return float <p>'e' の <code>arg</code> 乗から 1 を引いた値を返します。</p>
 * @link http://php.net/manual/ja/function.expm1.php
 * @see log1p(), exp()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function expm1(float $arg): float {}

/**
 * 端数の切り捨て
 * <p>必要に応じて <code>value</code> を丸めることにより、 <code>value</code> をこえない最大の整数の値を (float 型で) 返します。</p>
 * @param float $value <p>丸める数値。</p>
 * @return mixed <p><code>value</code> をこえない最大の整数の値を返します。 <b>floor()</b> の返り値は <code>float</code> 型のままとなります。これは、 <code>float</code> の範囲が <code>int</code> よりも広いためです。 配列を渡した場合など、エラーが発生したときには FALSE を返します。</p>
 * @link http://php.net/manual/ja/function.floor.php
 * @see ceil(), round()
 * @since PHP 4, PHP 5, PHP 7
 */
function floor(float $value) {}

/**
 * 引数で除算をした際の剰余を返す
 * <p>被除数（<code>x</code>）を除数（<code>y</code>） で割った余りを返します。余り（r）は、 整数 i を使用して x = i &#42; y + r で定義されます。 <code>y</code> がゼロ以外の場合はr は <code>x</code> と同符号で、絶対値は <code>y</code> より小さくなります。</p>
 * @param float $x <p>被除数。</p>
 * @param float $y <p>除数。</p>
 * @return float <p><code>x</code>/<code>y</code> の剰余を返します。</p>
 * @link http://php.net/manual/ja/function.fmod.php
 * @see intdiv()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function fmod(float $x, float $y): float {}

/**
 * 乱数の最大値を取得する
 * <p><code>rand()</code> をコールすることにより得られる最大の値を返します。</p>
 * @return int <p><code>rand()</code> が返す乱数の最大値を返します。</p>
 * @link http://php.net/manual/ja/function.getrandmax.php
 * @see rand(), srand(), mt_getrandmax()
 * @since PHP 4, PHP 5, PHP 7
 */
function getrandmax(): int {}

/**
 * 16 進数を 10 進数に変換する
 * <p>引数 <code>hex_string</code> により指定された 16 進数に 等価な 10 進数を返します。<b>hexdec()</b> は、16 進数を 表す文字列を 10 進数に変換します。</p><p><b>hexdec()</b> は、16 進数以外の文字を一切無視します。</p>
 * @param string $hex_string <p>変換したい 16 進文字列。</p>
 * @return number <p><code>hex_string</code> を 10 進で表した値を返します。</p>
 * @link http://php.net/manual/ja/function.hexdec.php
 * @see dechex(), bindec(), octdec(), base_convert()
 * @since PHP 4, PHP 5, PHP 7
 */
function hexdec(string $hex_string) {}

/**
 * 直角三角形の斜辺の長さを計算する
 * <p><b>hypot()</b> は、直角をはさむ 2 辺の長さが <code>x</code> および <code>y</code> である 直角三角形の斜辺の長さ、すなわち原点と (<code>x</code>, <code>y</code>) との距離を返します。 これは <i>sqrt(x&#42;x + y&#42;y)</i> と等価です。</p>
 * @param float $x <p>最初の辺の長さ。</p>
 * @param float $y <p>二番目の辺の長さ。</p>
 * @return float <p>斜辺の長さを返します。</p>
 * @link http://php.net/manual/ja/function.hypot.php
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function hypot(float $x, float $y): float {}

/**
 * 整数値の除算
 * <p><code>dividend</code> を <code>divisor</code> で割った整数商を返します。</p>
 * @param int $dividend <p>割られる数。</p>
 * @param int $divisor <p><code>dividend</code> を割る数。</p>
 * @return int <p><code>dividend</code> を <code>divisor</code> で割った整数商。</p>
 * @link http://php.net/manual/ja/function.intdiv.php
 * @see fmod()
 * @since PHP 7
 */
function intdiv(int $dividend, int $divisor): int {}

/**
 * 値が有限の数値であるかどうかを判定する
 * <p><code>val</code> が このプラットフォーム上で有効な有限値であるかどうかを調べます。</p>
 * @param float $val <p>調べる値。</p>
 * @return bool <p><code>val</code> が このプラットフォーム上の PHP の float 型で有効な範囲内の数である場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-finite.php
 * @see is_infinite(), is_nan()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function is_finite(float $val): bool {}

/**
 * 値が無限大であるかどうかを判定する
 * <p><code>val</code> が（正または負の）無限大である場合に <b><code>TRUE</code></b> を返します。たとえば <i>log(0)</i> の結果、 あるいはこのプラットフォーム上で扱える float の範囲を超えた数などが あてはまります。</p>
 * @param float $val <p>調べる値。</p>
 * @return bool <p><code>val</code> が無限大である場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-infinite.php
 * @see is_finite(), is_nan()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function is_infinite(float $val): bool {}

/**
 * 値が数値でないかどうかを判定する
 * <p><code>val</code> が '非数値 (not a number)' であるかどうかを調べます。たとえば <i>acos(1.01)</i> の結果などがこれにあたります。</p>
 * @param float $val <p>調べる値。</p>
 * @return bool <p><code>val</code> が '非数値 (not a number)' の場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-nan.php
 * @see is_finite(), is_infinite()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function is_nan(float $val): bool {}

/**
 * 複合線形合同法
 * <p><b>lcg_value()</b> は、(0, 1)の範囲の疑似乱数を返します。 この関数は、周期が 2^31 - 85 および 2^31 - 249 の 2 つの CG を組み合わせます。 この関数の周期はこれら 2 つの素数の積と等価です。</p><p>この関数が生成する値は、暗号学的に安全ではありません。そのため、これを暗号として使ってはいけません。暗号学的に安全な値が必要な場合は、<code>random_int()</code> か <code>random_bytes()</code> あるいは <code>openssl_random_pseudo_bytes()</code> を使いましょう。</p>
 * @return float <p>(0, 1) の範囲の疑似乱数を、浮動小数点数で返します。</p>
 * @link http://php.net/manual/ja/function.lcg-value.php
 * @see rand(), mt_rand()
 * @since PHP 4, PHP 5, PHP 7
 */
function lcg_value(): float {}

/**
 * 自然対数
 * <p>オプションの <code>base</code> パラメータを指定した場合は <b>log()</b> は logbase <code>arg</code> を返します。それ以外の場合は <b>log()</b> は <code>arg</code> の自然対数を返します。</p>
 * @param float $arg <p>対数を計算する値。</p>
 * @param float $base <p>オプションで指定する、底 (デフォルトは 'e' で、これは自然対数となります)。</p>
 * @return float <p><code>base</code> を指定した場合はそれを底とする <code>arg</code> の対数、指定しない場合は自然対数を返します。</p>
 * @link http://php.net/manual/ja/function.log.php
 * @see log10(), exp(), pow()
 * @since PHP 4, PHP 5, PHP 7
 */
function log(float $arg, float $base = M_E): float {}

/**
 * 底が 10 の対数
 * <p>底を 10 とする <code>arg</code> の対数を返します。</p>
 * @param float $arg <p>処理する引数。</p>
 * @return float <p>底を 10 とする <code>arg</code> の対数を返します。</p>
 * @link http://php.net/manual/ja/function.log10.php
 * @see log()
 * @since PHP 4, PHP 5, PHP 7
 */
function log10(float $arg): float {}

/**
 * 値がゼロに近い時にでも精度を保つ方法で計算した log(1 + number) を返す
 * <p><b>log1p()</b> は、 log(1 + <code>number</code>) の値を返します。 <code>number</code> がゼロに近い場合でも正確な値が 計算できる方法を使用します。 <code>log()</code> は、このような場合には 精度の問題で log(1) の値を返してしまいます。</p>
 * @param float $number <p>処理する引数。</p>
 * @return float <p>log(1 + <code>number</code>) を返します。</p>
 * @link http://php.net/manual/ja/function.log1p.php
 * @see expm1(), log(), log10()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function log1p(float $number): float {}

/**
 * 最大値を返す
 * <p>パラメータとして配列をひとつだけ渡した場合は、<b>max()</b> は配列の中で最も大きい数値を返します。 ふたつ以上のパラメータを指定した場合は、<b>max()</b> はそれらの中で最も大きいものを返します。</p><p><b>注意</b>:</p><p>異なる型の値を比較する際には、 標準の比較ルールに従います。 たとえば、数値形式でない <code>string</code> を <code>integer</code> と比較するときには、数値 <i>0</i> と評価します。 しかし、数値形式でない <code>string</code> どうしを比較するときには、アルファベット順で評価します。 返される値は、何も変換をしていない、元の型の値となります。</p><p>異なる型の値を引数として渡す際には注意しましょう。 <b>max()</b> が予期せぬ結果を返す可能性があるからです。</p>
 * @param array $values <p>値を含む配列。</p>
 * @return mixed <p><b>max()</b> は、パラメータとして渡した値の中で、標準の比較ルールに従って最大になるものを返します。 異なる型で同じ値と評価される複数の値 (<i>0</i> と <i>'abc'</i> など) があった場合は、関数に最初に渡されたほうを返します。</p><p>空の配列を渡した場合は <b><code>FALSE</code></b> を返し、 <b><code>E_WARNING</code></b> が発生します。</p>
 * @link http://php.net/manual/ja/function.max.php
 * @see min(), count()
 * @since PHP 4, PHP 5, PHP 7
 */
function max(array $values) {}

/**
 * 最小値を返す
 * <p>パラメータとして配列をひとつだけ渡した場合は、 <b>min()</b> は配列の中で最も小さい数値を返します。 ふたつ以上のパラメータを指定した場合は、<b>min()</b> はそれらの中で最も小さいものを返します。</p><p><b>注意</b>:</p><p>異なる型の値を比較する際には、 標準の比較ルールに従います。 たとえば、数値形式でない <code>string</code> を <code>integer</code> と比較するときには、数値 <i>0</i> と評価します。 しかし、数値形式でない <code>string</code> どうしを比較するときには、アルファベット順で評価します。 返される値は、何も変換をしていない、元の型の値となります。</p><p>異なる型の値を引数として渡す際には注意しましょう。 <b>min()</b> が予期せぬ結果を返す可能性があるからです。</p>
 * @param array $values <p>値を含む配列。</p>
 * @return mixed <p><b>min()</b> は、パラメータとして渡した値の中で、標準の比較ルールに従って最小になるものを返します。 異なる型で同じ値と評価される複数の値 (<i>0</i> と <i>'abc'</i> など) があった場合は、関数に最初に渡されたほうを返します。</p><p>空の配列を渡した場合は <b><code>FALSE</code></b> を返し、 <b><code>E_WARNING</code></b> が発生します。</p>
 * @link http://php.net/manual/ja/function.min.php
 * @see max(), count()
 * @since PHP 4, PHP 5, PHP 7
 */
function min(array $values) {}

/**
 * 乱数値の最大値を表示する
 * <p><code>mt_rand()</code> のコールにより返される最大の値を返します。</p>
 * @return int <p><code>mt_rand()</code> を引数なしでコールしたときに取得できる乱数の最大値を返します。 <code>mt_rand()</code> の <code>max</code> に指定する値をこの値以下にしておけば、結果がスケールアップされて無作為性が低下することを避けられます。</p>
 * @link http://php.net/manual/ja/function.mt-getrandmax.php
 * @see mt_rand(), mt_srand(), getrandmax()
 * @since PHP 4, PHP 5, PHP 7
 */
function mt_getrandmax(): int {}

/**
 * メルセンヌ・ツイスター乱数生成器を介して乱数値を生成する
 * <p>この関数が生成する値は、暗号学的に安全ではありません。そのため、これを暗号として使ってはいけません。暗号学的に安全な値が必要な場合は、<code>random_int()</code> か <code>random_bytes()</code> あるいは <code>openssl_random_pseudo_bytes()</code> を使いましょう。</p><p>古い libc の多くの乱数発生器は、怪しげであるか特性が不明であったりし、 また低速でした。 <b>mt_rand()</b> 関数は、古い <code>rand()</code> の代替品となるものです。 この関数は、その特性が既知の乱数生成器 »  メルセンヌ・ツイスター を使用し、 平均的な libc の rand()よりも 4 倍以上高速に乱数を生成します。</p><p>オプションの引数 <code>min</code>,<code>max</code> を付けずに コールした場合、<b>mt_rand()</b> は 0 から <code>mt_getrandmax()</code> の間の擬似乱数値を返します。 例えば、5 から 15 まで(端点を含む)の間の乱数値を得たい場合には <i>mt_rand(5, 15)</i> としてください。</p>
 * @return int <p><code>min</code> (あるいは 0) から <code>max</code> (あるいは <code>mt_getrandmax()</code>、それぞれ端点を含む) までの間のランダムな整数値を返します。 <code>max</code> が <code>min</code> より小さい場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mt-rand.php
 * @see mt_srand(), mt_getrandmax(), random_int(), random_bytes(), openssl_random_pseudo_bytes(), rand()
 * @since PHP 4, PHP 5, PHP 7
 */
function mt_rand(): int {}

/**
 * メルセンヌ・ツイスター乱数生成器にシードを指定する
 * <p><code>seed</code> により乱数生成器にシードを指定します。 <code>seed</code> を指定しなかった場合は、 ランダムな値を設定します。</p><p><b>注意</b>:  <code>srand()</code> または <b>mt_srand()</b> によりランダム数生成器にシードを与える必要はありません。 これは、この処理が自動的に行われるためです。</p>
 * @param int $seed <p>任意の整数値で指定するシード値。</p>
 * @param int $mode <p>以下のいずれかの定数を使用して、使用するアルゴリズムの実装を指定します。</p>   定数 説明     <b><code>MT_RAND_MT19937</code></b>  Uses the fixed, correct, メルセンヌ・ツイスター実装, available as of PHP 7.1.0.    <b><code>MT_RAND_PHP</code></b>  Uses an incorrect メルセンヌ・ツイスター実装 which was used as the default up till PHP 7.1.0. このモードは、下位互換性の目的で使用可能です。
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.mt-srand.php
 * @see mt_rand(), mt_getrandmax(), srand()
 * @since PHP 4, PHP 5, PHP 7
 */
function mt_srand(int $seed = NULL, int $mode = MT_RAND_MT19937): void {}

/**
 * 8 進数を 10 進数に変換する
 * <p><code>octal_string</code> により指定された 8 進数を 10 進数表現した数値を返します。</p>
 * @param string $octal_string <p>変換したい 8 進文字列。</p>
 * @return number <p><code>octal_string</code> を 8 進で表した値を返します。</p>
 * @link http://php.net/manual/ja/function.octdec.php
 * @see decoct(), bindec(), hexdec(), base_convert()
 * @since PHP 4, PHP 5, PHP 7
 */
function octdec(string $octal_string) {}

/**
 * 円周率の値を得る
 * <p>円周率の近似値を返します。返される <code>float</code> 値の小数点以下の 桁数は、php.ini の precision ディレクティブに依存します。デフォルトは <i>14</i> です。 また、定数 <b><code>M_PI</code></b> を使用することで <b>pi()</b> とまったく同じ結果を取得することも可能です。</p>
 * @return float <p>円周率の値を不動小数点数で返します。</p>
 * @link http://php.net/manual/ja/function.pi.php
 * @since PHP 4, PHP 5, PHP 7
 */
function pi(): float {}

/**
 * 指数表現
 * <p><code>base</code> の <code>exp</code> 乗を返します。</p><p><b>注意</b>:</p><p>PHP 5.6 以降では、 &#42;&#42; 演算子も使えます。</p>
 * @param number $base <p>使用する基数。</p>
 * @param number $exp <p>指数。</p>
 * @return number <p><code>base</code> の <code>exp</code> 乗を返します。 両方の引数が非負の整数で、かつ結果が <code>integer</code> 型の範囲に収まる場合は、結果を <code>integer</code> 型で返します。 それ以外の場合は結果を <code>float</code> 型で返します。</p>
 * @link http://php.net/manual/ja/function.pow.php
 * @see exp(), sqrt(), bcpow(), gmp_pow()
 * @since PHP 4, PHP 5, PHP 7
 */
function pow($base, $exp) {}

/**
 * ラジアン単位の数値を度単位に変換する
 * <p>この関数は、<code>number</code> の単位をラジアンから度に変換します。</p>
 * @param float $number <p>ラジアン値。</p>
 * @return float <p><code>number</code> と同等な値を度で表したものを返します。</p>
 * @link http://php.net/manual/ja/function.rad2deg.php
 * @see deg2rad()
 * @since PHP 4, PHP 5, PHP 7
 */
function rad2deg(float $number): float {}

/**
 * 乱数を生成する
 * <p>オプションの引数 <code>min</code>,<code>max</code> を省略してコールした場合、<b>rand()</b> は 0 と <code>getrandmax()</code> の間の擬似乱数(整数)を返します。 例えば、5 から 15 まで（両端を含む）の乱数を得たい場合、 <i>rand(5, 15)</i> とします。</p><p>この関数が生成する値は、暗号学的に安全ではありません。そのため、これを暗号として使ってはいけません。暗号学的に安全な値が必要な場合は、<code>random_int()</code> か <code>random_bytes()</code> あるいは <code>openssl_random_pseudo_bytes()</code> を使いましょう。</p><p><b>注意</b>:  （Windows のような）いくつかのプラットフォームでは、<code>getrandmax()</code> は 32767 と小さな値となっています。 32767 より広い範囲にしたい場合、 <code>min</code> および <code>max</code> を指定することで、 これより大きな範囲の乱数を生成することができます。 もしくは、 <code>mt_rand()</code> をかわりに使用してみてください。 </p><p><b>注意</b>:  PHP 7.1.0 以降、<b>rand()</b> は、 <code>mt_rand()</code> と同じ乱数生成器を使います。 下位互換性を保持するために、<b>rand()</b> allows <code>max</code> to be smaller than <code>min</code> as opposed to returning <b><code>FALSE</code></b> as <code>mt_rand()</code>. </p>
 * @return int <p><code>min</code> (あるいは 0) から <code>max</code> (あるいは <code>getrandmax()</code>、それぞれ端点を含む) までの間の疑似乱数値を返します。</p>
 * @link http://php.net/manual/ja/function.rand.php
 * @see srand(), getrandmax(), mt_rand(), random_int(), random_bytes(), openssl_random_pseudo_bytes()
 * @since PHP 4, PHP 5, PHP 7
 */
function rand(): int {}

/**
 * 浮動小数点数を丸める
 * <p><code>val</code> を、指定した <code>precision</code>(小数点以下の桁数)に丸めた値を 返します。<code>precision</code> を負またはゼロ(デフォルト) とすることも可能です。</p><p></p><p><b>注意</b>:  PHP は、デフォルトでは <i>"12,300.2"</i> のような 文字列を正しく処理しません。文字列からの変換 を参照ください。 </p>
 * @param float $val <p>丸める値。</p>
 * @param int $precision <p>オプションで指定する、丸める桁数。</p>
 * @param int $mode <p>次の定数のいずれかを使って、丸めのモードを指定します。</p>   定数 説明     <b><code>PHP_ROUND_HALF_UP</code></b>  <code>val</code> が小数点第 <code>precision</code> 位の値になるように、 ゼロから離れる方向に丸めます。1.5 は 2 に、そして -1.5 は -2 になります。    <b><code>PHP_ROUND_HALF_DOWN</code></b>  <code>val</code> が小数点第 <code>precision</code> 位の値になるように、 ゼロに近づく方向に丸めます。1.5 は 1 に、そして -1.5 は -1 になります。    <b><code>PHP_ROUND_HALF_EVEN</code></b>  <code>val</code> が小数点第 <code>precision</code> 位の値になるように、 次の偶数に丸めます。    <b><code>PHP_ROUND_HALF_ODD</code></b>  <code>val</code> が小数点第 <code>precision</code> 位の値になるように、 次の奇数に丸めます。
 * @return float <p>丸めた値を返します。</p>
 * @link http://php.net/manual/ja/function.round.php
 * @see ceil(), floor(), number_format()
 * @since PHP 4, PHP 5, PHP 7
 */
function round(float $val, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float {}

/**
 * 正弦（サイン）
 * <p><b>sin()</b> は、<code>arg</code> のサインを 返します。<code>arg</code> はラジアンです。</p>
 * @param float $arg <p>ラジアンで表した値。</p>
 * @return float <p><code>arg</code> のサインを返します。</p>
 * @link http://php.net/manual/ja/function.sin.php
 * @see asin(), sinh(), cos(), tan(), deg2rad()
 * @since PHP 4, PHP 5, PHP 7
 */
function sin(float $arg): float {}

/**
 * 双曲線正弦（ハイパボリックサイン）
 * <p><code>arg</code> のハイパボリックサインを返します。 これは、<i>(exp(arg) - exp(-arg))/2</i> で定義されます。</p>
 * @param float $arg <p>処理する引数。</p>
 * @return float <p><code>arg</code> のハイパボリックサインを返します。</p>
 * @link http://php.net/manual/ja/function.sinh.php
 * @see sin(), asinh(), cosh(), tanh()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function sinh(float $arg): float {}

/**
 * 平方根
 * <p><code>arg</code> の平方根を返します。</p>
 * @param float $arg <p>処理する引数。</p>
 * @return float <p><code>arg</code> の平方根を返します。 負の数を指定した場合は、特別な値 <i>NAN</i> を返します。</p>
 * @link http://php.net/manual/ja/function.sqrt.php
 * @see pow()
 * @since PHP 4, PHP 5, PHP 7
 */
function sqrt(float $arg): float {}

/**
 * 乱数生成器を初期化する
 * <p>シード <code>seed</code> で乱数生成器を初期化します。 <code>seed</code> を省略した場合はランダムな値が設定されます。</p><p><b>注意</b>:  <b>srand()</b> または <code>mt_srand()</code> によりランダム数生成器にシードを与える必要はありません。 これは、この処理が自動的に行われるためです。</p><p><b>注意</b>:  PHP 7.1.0 以降、<b>srand()</b> は、<code>mt_srand()</code> のエイリアスになりました。 </p>
 * @param int $seed <p>任意の整数値で指定するシード値。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.srand.php
 * @see rand(), getrandmax(), mt_srand()
 * @since PHP 4, PHP 5, PHP 7
 */
function srand(int $seed = NULL): void {}

/**
 * 正接（タンジェント）
 * <p><b>tan()</b> は、<code>arg</code> のタンジェントを 返します。<code>arg</code> はラジアンです。</p>
 * @param float $arg <p>処理する引数をラジアンで表したもの。</p>
 * @return float <p><code>arg</code> のタンジェントを返します。</p>
 * @link http://php.net/manual/ja/function.tan.php
 * @see atan(), atan2(), sin(), cos(), tanh(), deg2rad()
 * @since PHP 4, PHP 5, PHP 7
 */
function tan(float $arg): float {}

/**
 * 双曲線正接（ハイパボリックタンジェント）
 * <p><code>arg</code> のハイパボリックタンジェントを返します。 これは <i>sinh(arg)/cosh(arg)</i> で定義されます。</p>
 * @param float $arg <p>処理する引数。</p>
 * @return float <p><code>arg</code> のハイパボリックタンジェントを返します。</p>
 * @link http://php.net/manual/ja/function.tanh.php
 * @see tan(), atanh(), sinh(), cosh()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function tanh(float $arg): float {}

/**
 * 無限
 */
define('INF', INF);

/**
 * 1/pi
 */
define('M_1_PI', 0.31830988618379);

/**
 * 2/pi
 */
define('M_2_PI', 0.63661977236758);

/**
 * 2/sqrt(pi)
 */
define('M_2_SQRTPI', 1.1283791670955);

/**
 * e（自然対数の底）
 */
define('M_E', 2.718281828459);

/**
 * PHP 5.2.0
 */
define('M_EULER', 0.57721566490153);

/**
 * log_e 10
 */
define('M_LN10', 2.302585092994);

/**
 * log_e 2
 */
define('M_LN2', 0.69314718055995);

/**
 * PHP 5.2.0
 */
define('M_LNPI', 1.1447298858494);

/**
 * log_10 e
 */
define('M_LOG10E', 0.43429448190325);

/**
 * log_2 e
 */
define('M_LOG2E', 1.442695040889);

/**
 * パイ（円周率）
 */
define('M_PI', 3.1415926535898);

/**
 * pi/2
 */
define('M_PI_2', 1.5707963267949);

/**
 * pi/4
 */
define('M_PI_4', 0.78539816339745);

/**
 * 1/sqrt(2)
 */
define('M_SQRT1_2', 0.70710678118655);

/**
 * sqrt(2)
 */
define('M_SQRT2', 1.4142135623731);

/**
 * PHP 5.2.0
 */
define('M_SQRT3', 1.7320508075689);

/**
 * PHP 5.2.0
 */
define('M_SQRTPI', 1.7724538509055);

/**
 * 非数値
 */
define('NAN', NAN);

/**
 * PHP 5.3.0
 */
define('PHP_ROUND_HALF_DOWN', 2);

/**
 * PHP 5.3.0
 */
define('PHP_ROUND_HALF_EVEN', 3);

/**
 * PHP 5.3.0
 */
define('PHP_ROUND_HALF_ODD', 4);

/**
 * PHP 5.3.0
 */
define('PHP_ROUND_HALF_UP', 1);

