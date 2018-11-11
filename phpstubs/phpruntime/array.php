<?php



/**
 * 配列のすべてのキーの大文字小文字を変更する
 * <p><code>array</code> のすべてのキーを小文字あるいは大文字にした配列を返します。 数値添字はそのままとなります。</p>
 * @param array $array <p>処理を行う配列。</p>
 * @param int $case <p><b><code>CASE_UPPER</code></b> あるいは <b><code>CASE_LOWER</code></b> (デフォルト)。</p>
 * @return array <p>すべてのキーを小文字あるいは大文字にした配列を返します。 <code>array</code> が配列でない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.array-change-key-case.php
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function array_change_key_case(array $array, int $case = CASE_LOWER): array {}

/**
 * 配列を分割する
 * <p>配列を、要素数が <code>size</code> の配列に分割します。 最後の部分の要素数は <code>size</code> より小さくなることもあります。</p>
 * @param array $array <p>処理を行う配列。</p>
 * @param int $size <p>各部分のサイズ。</p>
 * @param bool $preserve_keys <p><b><code>TRUE</code></b> の場合はキーをそのまま保持します。 デフォルトは <b><code>FALSE</code></b> で、各部分のキーをあらためて数字で振りなおします。</p>
 * @return array <p>数値添字の多次元配列を返します。添え字はゼロから始まり、 各次元の要素数が <code>size</code> となります。</p>
 * @link http://php.net/manual/ja/function.array-chunk.php
 * @see array_slice()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function array_chunk(array $array, int $size, bool $preserve_keys = FALSE): array {}

/**
 * 入力配列から単一のカラムの値を返す
 * <p><b>array_column()</b> は、 配列 <code>input</code> の中から <code>column_key</code> で指定した単一のカラムの値を返します。 オプションで <code>index_key</code> も指定できます。これを指定すると、 入力配列内のカラム <code>index_key</code> の値に基づいて結果を並べ替えます。</p>
 * @param array $input <p>値を取り出したい多次元配列 (あるいはオブジェクトの配列)。 オブジェクトの配列を指定した場合は、public プロパティはそのまま取得できます。 protected や private なプロパティを取得したい場合は、そのクラスがマジックメソッド <b>__get()</b> および <b>__isset()</b> を実装している必要があります。</p>
 * @param mixed $column_key <p>値を返したいカラム。 取得したいカラムの番号を整数値で指定することもできるし、 連想配列のキーやプロパティの名前を指定することもできます。 <b><code>NULL</code></b> を指定すると、配列やオブジェクト全体を返します (<code>index_key</code> との組み合わせで、配列の並べ替えをするときに便利です)。</p>
 * @param mixed $index_key <p>返す配列のインデックスとして使うカラム。 カラム番号を表す整数値、あるいはキーの名前を表す文字列になります。</p>
 * @return array <p>入力配列の単一のカラムを表す値の配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-column.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function array_column(array $input, $column_key, $index_key = NULL): array {}

/**
 * 一方の配列をキーとして、もう一方の配列を値として、ひとつの配列を生成する
 * <p><code>keys</code> 配列の値をキーとして、また <code>values</code> 配列の値を対応する値として生成した 配列 を作成します。</p>
 * @param array $keys <p>キーとして使用する配列。無効な値を渡すと文字列に変換されます。</p>
 * @param array $values <p>値として使用する配列。</p>
 * @return array <p>作成した配列を返します。 互いの配列の要素の数が合致しない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.array-combine.php
 * @see array_merge(), array_walk(), array_values()
 * @since PHP 5, PHP 7
 */
function array_combine(array $keys, array $values): array {}

/**
 * 配列の値の数を数える
 * <p><b>array_count_values()</b> は、 配列 <code>array</code> の値をキーとし、 <code>array</code> におけるその値の出現回数を値とした配列を返します。</p>
 * @param array $array <p>値を数える配列。</p>
 * @return array <p><code>array</code> のキーとその登場回数を組み合わせた連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-count-values.php
 * @see count(), array_unique(), array_values(), count_chars()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_count_values(array $array): array {}

/**
 * 配列の差を計算する
 * <p><code>array1</code> を他の配列と比較し、 <code>array1</code> の要素の中で他の配列には存在しないものだけを返します。</p>
 * @param array $array1 <p>比較元の配列。</p>
 * @param array $array2 <p>比較対象の配列。</p>
 * @param array $_ <p>さらに比較したい配列。</p>
 * @return array <p><code>array1</code> のエントリのうち、他のどの配列にも含まれない要素のみを含む配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-diff.php
 * @see array_diff_assoc(), array_intersect(), array_intersect_assoc()
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function array_diff(array $array1, array $array2, array $_ = NULL): array {}

/**
 * 追加された添字の確認を含めて配列の差を計算する
 * <p><code>array1</code> を <code>array2</code> と比較し、 その差を返します。<code>array_diff()</code> とは異なり、 配列のキーも用いて比較を行います。</p>
 * @param array $array1 <p>比較元の配列。</p>
 * @param array $array2 <p>比較する対象となる配列。</p>
 * @param array $_ <p>さらに比較する対象となる配列。</p>
 * @return array <p><code>array1</code> の要素のうち、 その他の配列のいずれにも含まれないものだけを残した配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-diff-assoc.php
 * @see array_diff(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_intersect(), array_intersect_assoc()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function array_diff_assoc(array $array1, array $array2, array $_ = NULL): array {}

/**
 * キーを基準にして配列の差を計算する
 * <p><code>array1</code> のキーを <code>array2</code> のキーと比較し、その差を返します。 この関数は <code>array_diff()</code> に似ていますが、 値ではなくキーを用いて比較するという点が異なります。</p>
 * @param array $array1 <p>比較元の配列。</p>
 * @param array $array2 <p>比較する対象となる配列。</p>
 * @param array $_ <p>さらに比較する対象となる配列。</p>
 * @return array <p><code>array1</code> の要素のうち、 その他の配列のいずれにも含まれないキーのものだけを残した配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-diff-key.php
 * @see array_diff(), array_udiff(), array_diff_assoc(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_diff_ukey(), array_intersect(), array_intersect_assoc(), array_intersect_uassoc(), array_intersect_key(), array_intersect_ukey()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function array_diff_key(array $array1, array $array2, array $_ = NULL): array {}

/**
 * ユーザーが指定したコールバック関数を利用し、 追加された添字の確認を含めて配列の差を計算する
 * <p><code>array1</code> のキーを <code>array2</code> のキーと比較し、その差を返します。 この関数は <code>array_diff()</code> に似ていますが、 配列のキーを用いて比較するという点が異なります。</p><p><code>array_diff_assoc()</code> とは異なり、 内部関数ではなくユーザーが指定したコールバック関数を用いて添字を比較します。</p>
 * @param array $array1 <p>比較元の配列。</p>
 * @param array $array2 <p>比較する対象となる配列。</p>
 * @param array $_ <p>さらに比較する対象となる配列。</p>
 * @param callable $key_compare_func <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )
 * @return array <p><code>array1</code> の要素のうち、 その他の配列のいずれにも含まれないものだけを残した配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-diff-uassoc.php
 * @see array_diff(), array_diff_assoc(), array_udiff(), array_udiff_assoc(), array_udiff_uassoc(), array_intersect(), array_intersect_assoc(), array_uintersect(), array_uintersect_assoc(), array_uintersect_uassoc()
 * @since PHP 5, PHP 7
 */
function array_diff_uassoc(array $array1, array $array2, array $_ = NULL, callable $key_compare_func): array {}

/**
 * キーを基準にし、コールバック関数を用いて配列の差を計算する
 * <p><code>array1</code> のキーを <code>array2</code> のキーと比較し、その差を返します。 この関数は <code>array_diff()</code> に似ていますが、 値ではなくキーを用いて比較するという点が異なります。</p><p><code>array_diff_key()</code> とは異なり、 内部関数ではなくユーザーが指定したコールバック関数を用いて添字を比較します。</p>
 * @param array $array1 <p>比較元の配列。</p>
 * @param array $array2 <p>比較する対象となる配列。</p>
 * @param array $_ <p>さらに比較する対象となる配列。</p>
 * @param callable $key_compare_func <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )
 * @return array <p><code>array1</code> の要素のうち、 その他の配列のいずれにも含まれないものだけを残した配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-diff-ukey.php
 * @see array_diff(), array_udiff(), array_diff_assoc(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_diff_key(), array_intersect(), array_intersect_assoc(), array_intersect_uassoc(), array_intersect_key(), array_intersect_ukey()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function array_diff_ukey(array $array1, array $array2, array $_ = NULL, callable $key_compare_func): array {}

/**
 * 配列を指定した値で埋める
 * <p>パラメータ <code>value</code> を値とする <code>num</code> 個のエントリからなる配列を埋めます。 この際、キーは、<code>start_index</code> パラメータから開始します。</p>
 * @param int $start_index <p>返される配列の最初のインデックス。</p> <p><code>start_index</code> が負の場合は、 返される配列の最初のインデックスが <code>start_index</code> となり、それ以降のインデックスはゼロから始まります (例を参照ください)。</p>
 * @param int $num <p>挿入する要素数。 ゼロ以上の数でなければなりません。</p>
 * @param mixed $value <p>要素に使用する値。</p>
 * @return array <p>値を埋めた配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-fill.php
 * @see array_fill_keys(), str_repeat(), range()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function array_fill(int $start_index, int $num, $value): array {}

/**
 * キーを指定して、配列を値で埋める
 * <p>パラメータ <code>value</code> で指定した値で配列を埋めます。 キーとして、配列 <code>keys</code> で指定した値を使用します。</p>
 * @param array $keys <p>キーとして使用する値の配列。キーとして無効な値は <code>string</code> に変換されます。</p>
 * @param mixed $value <p>埋めたい値。</p>
 * @return array <p>値を埋めた配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-fill-keys.php
 * @see array_fill(), array_combine()
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function array_fill_keys(array $keys, $value): array {}

/**
 * コールバック関数を使用して、配列の要素をフィルタリングする
 * <p><code>callback</code> 関数によりフィルタ処理が行われた <code>array</code> の全ての要素を含む配列を返します。 <code>callback</code> 関数が true を返した場合、 <code>array</code> の現在の値が結果の配列に入ります。 配列のキーは保存されます。</p>
 * @param array $array <p>処理する配列。</p>
 * @param callable $callback <p>使用するコールバック関数。</p> <p>コールバック関数が与えられなかった場合、 <code>array</code> のエントリの中で <b><code>FALSE</code></b> と等しいもの (boolean への変換 を参照ください) がすべて削除されます。</p>
 * @param int $flag <p>引数として、何を <code>callback</code> に送るのかを決めるフラグ。</p><ul> <li> <b><code>ARRAY_FILTER_USE_KEY</code></b> - 値ではなく、キーだけを <code>callback</code> の引数として渡す </li> <li> <b><code>ARRAY_FILTER_USE_BOTH</code></b> - 値だけではなく、値とキーの両方を <code>callback</code> の引数として渡す </li> </ul>
 * @return array <p>フィルタリングされた結果の配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-filter.php
 * @see array_map(), array_reduce(), array_walk()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function array_filter(array $array, callable $callback = NULL, int $flag = 0): array {}

/**
 * 配列のキーと値を反転する
 * <p><b>array_flip()</b> は、配列を反転して返します。 すなわち、<code>array</code> のキーが値となり、 <code>array</code> の値がキーとなります。</p><p><code>array</code> の値は有効なキーを必要とすることに注意してください。 すなわち、キーは、<code>integer</code> または <code>string</code> である必要があります。ある値が間違った型である場合、 警告が出力され、問題のこのキー/値の組は結果には含まれません。</p><p>ある値が複数回出現した場合、最後のキーがその値として使用され、 その他の値は失われます。</p>
 * @param array $array <p>反転を行うキー/値の組。</p>
 * @return array <p>成功した場合に反転した配列、失敗した場合に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.array-flip.php
 * @see array_values(), array_keys(), array_reverse()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_flip(array $array): array {}

/**
 * 配列の共通項を計算する
 * <p><b>array_intersect()</b> は、他の全ての引数に存在する <code>array1</code> の値を全て有する配列を返します。 キーと値の関係は維持されることに注意してください。</p>
 * @param array $array1 <p>値を調べるもととなる配列。</p>
 * @param array $array2 <p>値を比較する対象となる配列。</p>
 * @param array $_ <p>さらにそれ以外の配列。</p>
 * @return array <p><code>array1</code> の値のうち、 すべての引数に存在する値のものを含む連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-intersect.php
 * @see array_intersect_assoc(), array_diff(), array_diff_assoc()
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function array_intersect(array $array1, array $array2, array $_ = NULL): array {}

/**
 * 追加された添字の確認も含めて配列の共通項を確認する
 * <p><b>array_intersect_assoc()</b> は、全ての引数に現れる <code>array1</code> の全ての値を含む配列を返します。 <code>array_intersect()</code> と異なり、 キーも比較に使用されることに注意してください。</p>
 * @param array $array1 <p>値を調べるもととなる配列。</p>
 * @param array $array2 <p>値を比較する対象となる配列。</p>
 * @param array $_ <p>さらにそれ以外の配列。</p>
 * @return array <p><code>array1</code> の値のうち、すべての引数に存在するものを含む連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-intersect-assoc.php
 * @see array_intersect(), array_uintersect_assoc(), array_intersect_uassoc(), array_uintersect_uassoc(), array_diff(), array_diff_assoc()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function array_intersect_assoc(array $array1, array $array2, array $_ = NULL): array {}

/**
 * キーを基準にして配列の共通項を計算する
 * <p><b>array_intersect_key()</b> は、 <code>array1</code> のエントリのうち、 その他のすべての引数の中に共通して存在するキーと一致するキーの値からなる配列を返します。</p>
 * @param array $array1 <p>値を調べるもととなる配列。</p>
 * @param array $array2 <p>値を比較する対象となる配列。</p>
 * @param array $_ <p>さらにそれ以外の配列。</p>
 * @return array <p><code>array1</code> のエントリのうち、 すべての引数に存在するキーのものを含む連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-intersect-key.php
 * @see array_diff(), array_udiff(), array_diff_assoc(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_diff_key(), array_diff_ukey(), array_intersect(), array_intersect_assoc(), array_intersect_uassoc(), array_intersect_ukey()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function array_intersect_key(array $array1, array $array2, array $_ = NULL): array {}

/**
 * 追加された添字の確認も含め、コールバック関数を用いて 配列の共通項を確認する
 * <p><b>array_intersect_uassoc()</b> は、全ての引数に現れる <code>array1</code> の全ての値を含む配列を返します。 <code>array_intersect()</code> と異なり、 キーが比較に使用されることに注意してください。</p>
 * @param array $array1 <p>比較元となる最初の配列。</p>
 * @param array $array2 <p>キーを比較する対象となる最初の配列。</p>
 * @param array $_ <p>キーを比較する対象となる配列の、可変リスト。</p>
 * @param callable $key_compare_func <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )
 * @return array <p><code>array1</code> の値のうち、 すべての引数に存在するもののみを返します。</p>
 * @link http://php.net/manual/ja/function.array-intersect-uassoc.php
 * @see array_intersect(), array_intersect_assoc(), array_uintersect_assoc(), array_uintersect_uassoc(), array_intersect_key(), array_intersect_ukey()
 * @since PHP 5, PHP 7
 */
function array_intersect_uassoc(array $array1, array $array2, array $_ = NULL, callable $key_compare_func): array {}

/**
 * キーを基準にし、コールバック関数を用いて 配列の共通項を計算する
 * <p><b>array_intersect_ukey()</b> は、他の全ての引数に存在する <code>array1</code> の値を全て有する配列を返します。</p>
 * @param array $array1 <p>比較元となる最初の配列。</p>
 * @param array $array2 <p>キーを比較する対象となる最初の配列。</p>
 * @param array $_ <p>キーを比較する対象となる配列の、可変リスト。</p>
 * @param callable $key_compare_func <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )
 * @return array <p><code>array1</code> の値のうち、 すべての引数に存在するキーのものを含む連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-intersect-ukey.php
 * @see array_diff(), array_udiff(), array_diff_assoc(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_diff_key(), array_diff_ukey(), array_intersect(), array_intersect_assoc(), array_intersect_uassoc(), array_intersect_key()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function array_intersect_ukey(array $array1, array $array2, array $_ = NULL, callable $key_compare_func): array {}

/**
 * 指定したキーまたは添字が配列にあるかどうかを調べる
 * <p>指定した <code>key</code> が配列に設定されている場合、 <b>array_key_exists()</b> は <b><code>TRUE</code></b> を返します。 <code>key</code> は配列添字として使用できる全ての値を使用可能です。</p>
 * @param mixed $key <p>調べる値。</p>
 * @param array $array <p>キーが存在するかどうかを調べたい配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p><b>array_key_exists()</b> は、最初のレベルのキーだけを捜します。 多次元配列のネストされたキーは、この関数では見つけられません。</p>
 * @link http://php.net/manual/ja/function.array-key-exists.php
 * @see isset(), array_keys(), in_array(), property_exists()
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 */
function array_key_exists($key, array $array): bool {}

/**
 * Gets the first key of an array
 * <p>Get the first key of the given <code>array</code> without affecting the internal array pointer.</p>
 * @param array $array <p>An array.</p>
 * @return mixed <p>Returns the first key of <code>array</code> if the array is not empty; <b><code>NULL</code></b> otherwise.</p>
 * @link http://php.net/manual/ja/function.array-key-first.php
 * @see array_key_last(), reset()
 * @since PHP 7 >= 7.3.0
 */
function array_key_first(array $array) {}

/**
 * Gets the last key of an array
 * <p>Get the last key of the given <code>array</code> without affecting the internal array pointer.</p>
 * @param array $array <p>An array.</p>
 * @return mixed <p>Returns the last key of <code>array</code> if the array is not empty; <b><code>NULL</code></b> otherwise.</p>
 * @link http://php.net/manual/ja/function.array-key-last.php
 * @see array_key_first(), end()
 * @since PHP 7 >= 7.3.0
 */
function array_key_last(array $array) {}

/**
 * 配列のキーすべて、あるいはその一部を返す
 * <p><b>array_keys()</b> は、配列 <code>array</code> から全てのキー (数値および文字列) を返します。</p><p>オプション <code>search_value</code> が指定された場合、 指定した値に関するキーのみが返されます。指定されない場合は、 <code>array</code> から全てのキーが返されます。</p>
 * @param array $array <p>返すキーを含む配列。</p>
 * @param mixed $search_value <p>指定した場合は、これらの値を含むキーのみを返します。</p>
 * @param bool $strict <p>検索時に厳密な比較 (===) を行うかどうか。</p>
 * @return array <p><code>array</code> のすべてのキーを配列で返します。</p>
 * @link http://php.net/manual/ja/function.array-keys.php
 * @see array_values(), array_combine(), array_key_exists(), array_search()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_keys(array $array, $search_value = NULL, bool $strict = FALSE): array {}

/**
 * 指定した配列の要素にコールバック関数を適用する
 * <p><b>array_map()</b> は、<code>array1</code> の各要素に <code>callback</code> 関数を適用した後、 その全ての要素を含む配列を返します。 <code>callback</code> 関数が受け付けるパラメータの数は、 <b>array_map()</b> に渡される配列の数に一致している必要があります。</p>
 * @param callable $callback <p>配列の各要素に適用するコールバック関数。</p>
 * @param array $array1 <p>コールバック関数を適用する配列。</p>
 * @param array $_ <p>コールバック関数に渡す引数を指定する配列の可変リスト。</p>
 * @return array <p><code>array1</code> の各要素に <code>callback</code> 関数を適用した後、 その全ての要素を含む配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-map.php
 * @see array_filter(), array_reduce(), array_walk()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function array_map(callable $callback, array $array1, array $_ = NULL): array {}

/**
 * ひとつまたは複数の配列をマージする
 * <p>前の配列の後ろに配列を追加することにより、 ひとつまたは複数の配列の要素をマージし、得られた配列を返します。</p><p>入力配列が同じキー文字列を有していた場合、そのキーに関する後に指定された値が、 前の値を上書きします。しかし、配列が同じ添字番号を有していても 値は追記されるため、このようなことは起きません。</p><p>入力配列の中にある数値添字要素の添字の数値は、 結果の配列ではゼロから始まる連続した数値に置き換えられます。</p>
 * @param array $array1 <p>最初の配列。</p>
 * @param array $_ <p>マージしていく任意の数の配列のリスト。</p>
 * @return array <p>結果の配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-merge.php
 * @see array_merge_recursive(), array_replace(), array_combine()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_merge(array $array1, array $_ = NULL): array {}

/**
 * 二つ以上の配列を再帰的にマージする
 * <p><b>array_merge_recursive()</b> は、 一つ以上の配列の要素をマージし、 前の配列の最後にもう一つの配列の値を追加します。 マージした後の配列を返します。</p><p>入力配列が同じ文字列のキーを有している場合、 マージした後の配列ではこれらのキーの値がひとつにまとめられます。 この処理は再帰的に行われます。 このため、値の一つが配列自体を指している場合、 この関数は別の配列の対応するエントリもマージします。 しかし、配列が同じ数値キーを有している場合、 後の値は元の値を上書せず、追加されます。</p>
 * @param array $array1 <p>マージするもとの配列。</p>
 * @param array $_ <p>再帰的にマージしていく配列の可変リスト。</p>
 * @return array <p>すべての引数の配列をマージした結果の配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-merge-recursive.php
 * @see array_merge(), array_replace_recursive()
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function array_merge_recursive(array $array1, array $_ = NULL): array {}

/**
 * 複数または多次元の配列をソートする
 * <p><b>array_multisort()</b> は、複数の配列を一度に、 または、多次元の配列をその次元の一つでソートする際に使用可能です。</p><p>連想配列のキー (<code>string</code>) は不変ですが、 数値添字は再度振り直されます。</p><p><b>注意</b>:</p><p>比較結果が等しくなる二つの要素があった場合、ソートした配列におけるそれらの並び順は不定となります。</p>
 * @param array $array1 <p>ソートしたい配列。</p>
 * @param mixed $array1_sort_order <p>先ほどの引数 <code>array</code> のソート順。 <b><code>SORT_ASC</code></b> はアイテムを昇順にソートし、 <b><code>SORT_DESC</code></b> はアイテムを降順にソートします。</p> <p>この引数は、<code>array1_sort_flags</code> と入れ替えることもできるし、完全に省略することもできます。 省略した場合は <b><code>SORT_ASC</code></b> とみなします。</p>
 * @param mixed $array1_sort_flags <p>先ほどの引数 <code>array</code> のソート方法。</p> <p>これらのフラグが使えます。</p><ul> <li> <b><code>SORT_REGULAR</code></b> - アイテムを通常通り比較します (型を変更しません)。 </li> <li> <b><code>SORT_NUMERIC</code></b> - アイテムを数値として比較します。 </li> <li> <b><code>SORT_STRING</code></b> - アイテムを文字列として比較します。 </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - 現在のロケールを考慮して、アイテムを文字列として比較します。利用するロケールは <code>setlocale()</code> で変更できます。  </li> <li>  <b><code>SORT_NATURAL</code></b> - <code>natsort()</code> と同様の「自然順」で、アイテムを文字列として比較します。  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - <b><code>SORT_STRING</code></b> や <b><code>SORT_NATURAL</code></b> と (ビット OR で) 組み合わせて、 大文字小文字を区別しない文字列のソートを指定します。  </li> </ul> <p>この引数は、<code>array1_sort_order</code> と入れ替えることもできるし、完全に省略することもできます。 省略した場合は <b><code>SORT_REGULAR</code></b> とみなします。</p>
 * @param mixed $_ <p>追加の配列。オプションで並び順やフラグが続きます。 前の配列の比較結果が等しい要素に対応する要素群だけを比較します。 要するに、辞書的 (lexicographical) なソートを行うということです。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.array-multisort.php
 * @see usort()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_multisort(array &$array1, $array1_sort_order = SORT_ASC, $array1_sort_flags = SORT_REGULAR, $_ = NULL): bool {}

/**
 * 指定長、指定した値で配列を埋める
 * <p><b>array_pad()</b> は、<code>size</code> で指定した長さになるように値 <code>value</code> で埋めて <code>array</code> のコピーを返します。 <code>size</code> が正の場合、配列の右側が埋められます。 負の場合、配列の左側が埋められます。 <code>size</code> の絶対値が <code>array</code> の長さ以下の場合、埋める処理は行われません。 一度に追加できる要素の最大数は 1048576 です。</p>
 * @param array $array <p>値を埋めるもととなる配列。</p>
 * @param int $size <p>新しい配列のサイズ。</p>
 * @param mixed $value <p><code>array</code> が <code>size</code> より小さいときに、 埋めるために使用する値。</p>
 * @return array <p><code>size</code> で指定した長さになるように値 <code>value</code> で埋めて <code>array</code> のコピーを返します。 <code>size</code> が正の場合、配列の右側が埋められます。 負の場合、配列の左側が埋められます。 <code>size</code> の絶対値が <code>array</code> の長さ以下の場合、埋める処理は行われません。</p>
 * @link http://php.net/manual/ja/function.array-pad.php
 * @see array_fill(), range()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_pad(array $array, int $size, $value): array {}

/**
 * 配列の末尾から要素を取り除く
 * <p><b>array_pop()</b> は配列 <code>array</code> の最後の値を取り出して返します。 配列 <code>array</code> は、要素一つ分短くなります。</p><p><b>注意</b>: この関数は、 入力配列のポインタを、使用した後にリセット (<code>reset()</code>) します。</p>
 * @param array $array <p>値を取り出す配列。</p>
 * @return mixed <p>配列 <code>array</code> の最後の値を取り出して返します。 <code>array</code> が空 (または、配列でない) の場合、 <b><code>NULL</code></b> が返されます。</p>
 * @link http://php.net/manual/ja/function.array-pop.php
 * @see array_push(), array_shift(), array_unshift()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_pop(array &$array) {}

/**
 * 配列の値の積を計算する
 * <p><b>array_product()</b> は、配列の値の積を計算します。</p>
 * @param array $array <p>配列。</p>
 * @return number <p>積を、integer あるいは float で返します。</p>
 * @link http://php.net/manual/ja/function.array-product.php
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function array_product(array $array) {}

/**
 * 一つ以上の要素を配列の最後に追加する
 * <p><b>array_push()</b>は、<code>array</code> をスタックとして処理し、渡された変数を <code>array</code> の最後に加えます。配列 <code>array</code> の長さは渡された変数の数だけ増加します。 各 <code>value1</code> 毎に以下を繰り返すことと同じ効果があります。</p><p><b>注意</b>:  もし配列にひとつの要素を加えるために <b>array_push()</b> を使用するなら、 関数を呼ぶオーバーヘッドがないので、<i>$array[] = </i> を使用するほうがいいです。 </p><p><b>注意</b>:  最初の引数が配列でない場合、<b>array_push()</b> は警告を発生させます。これは新規配列を生成する場合における <i>$var[]</i> の動作と異なります。 </p>
 * @param array $array <p>入力の配列。</p>
 * @param mixed $_ <p><code>array</code> の最後に追加する値。</p>
 * @return int <p>処理後の配列の中の要素の数を返します。</p>
 * @link http://php.net/manual/ja/function.array-push.php
 * @see array_pop(), array_shift(), array_unshift()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_push(array &$array, $_ = NULL): int {}

/**
 * 配列から一つ以上の要素をランダムに取得する
 * <p>一つ以上のランダムなエントリを配列から取り出し、 取り出したエントリのキーを返します。 この関数が使う疑似乱数生成器は、暗号学的な使い方には適していません。</p>
 * @param array $array <p>入力の配列。</p>
 * @param int $num <p>取得するエントリの数を指定します。</p>
 * @return mixed <p>エントリを一つだけ取得する場合、 <b>array_rand()</b> はランダムなエントリのキーを返します。 その他の場合は、ランダムなエントリのキーの配列を返します。 これにより、ランダムな値だけではなくランダムなキーも配列から取得できるようになります。 配列の中にある要素数より多くの要素を取り出そうとすると <b><code>E_WARNING</code></b> レベルのエラーが発生し、NULL を返します。</p>
 * @link http://php.net/manual/ja/function.array-rand.php
 * @see shuffle()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_rand(array $array, int $num = 1) {}

/**
 * コールバック関数を用いて配列を普通の値に変更することにより、配列を再帰的に減らす
 * <p><b>array_reduce()</b> は、配列 <code>array</code> の各要素に <code>callback</code> 関数を繰り返し適用し、 配列を一つの値に減らします。</p>
 * @param array $array <p>入力の配列。</p>
 * @param callable $callback <code>mixed</code> callback ( <code>mixed</code> <code>$carry</code> , <code>mixed</code> <code>$item</code> )   <code>carry</code>   <p>前回の反復処理の結果を保持します。最初の反復処理のときには、 <code>initial</code> の値を保持しています。</p>   <code>item</code>   <p>現在の反復処理の値を保持します。</p>
 * @param mixed $initial <p>オプションの <code>intial</code> が利用可能な場合、処理の最初で使用されたり、 配列が空の場合の最終結果として使用されます。</p>
 * @return mixed <p>結果の値を返します。</p><p>配列が空で <code>initial</code> が渡されなかった場合は、 <b>array_reduce()</b> は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.array-reduce.php
 * @see array_filter(), array_map(), array_unique(), array_count_values()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function array_reduce(array $array, callable $callback, $initial = NULL) {}

/**
 * 渡された配列の要素を置き換える
 * <p><b>array_replace()</b> は、 最初の配列の値をそれ以降の配列の同じ要素の値で置き換えます。 最初の配列のキーと同じキーが 2 番目の配列にあれば、 2 番目の配列の値が最初の配列の値を上書きします。 2 番目の配列に存在するキーが最初の配列に存在しなければ、 そのキーが新たに最初の配列内に作られます。 最初の配列にしか存在しないキーについては何も変わりません。 置き換え用の配列が複数渡された場合は渡した順に処理を行い、 後から渡した配列の値のほうが優先されます。</p><p><b>array_replace()</b> は再起的な処理を行いません。 2 番目の配列の値がどんな型であっても、最初の配列の値を置き換えます。</p>
 * @param array $array1 <p>要素を置き換えたい配列。</p>
 * @param array $array2 <p>置き換えたい要素を含む配列。</p>
 * @param array $_ <p>置き換えたい要素を含む、さらに別の配列。 後から渡した配列の値のほうが優先されます。</p>
 * @return array <p>配列を返します。エラーが発生した場合は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.array-replace.php
 * @see array_replace_recursive(), array_merge()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function array_replace(array $array1, array $array2, array $_ = NULL): array {}

/**
 * 渡された配列の要素を再帰的に置き換える
 * <p><b>array_replace_recursive()</b> は、 最初の配列の値をそれ以降の配列の同じ要素の値で置き換えます。 最初の配列のキーと同じキーが 2 番目の配列にあれば、 2 番目の配列の値が最初の配列の値を上書きします。 2 番目の配列に存在するキーが最初の配列に存在しなければ、 そのキーが新たに最初の配列内に作られます。 最初の配列にしか存在しないキーについては何も変わりません。 置き換え用の配列が複数渡された場合は渡した順に処理を行い、 後から渡した配列の値のほうが優先されます。</p><p><b>array_replace_recursive()</b> は再帰的な処理を行います。 配列を再帰的にたどり、内部の値に対しても同じ手順で処理します。</p><p><code>array1</code> の値がスカラーの場合は、 <code>array2</code> の値がスカラーであるか配列であるかにかかわらずそれで置き換えられます。 <code>array1</code> の値と <code>array2</code> の値が両方配列である場合は、<b>array_replace_recursive()</b> が対応する値を再帰的に処理します。</p>
 * @param array $array1 <p>要素を置き換えたい配列。</p>
 * @param array $array2 <p>置き換えたい要素を含む配列。</p>
 * @param array $_ <p>オプション。置き換えたい要素を含む、さらに別の配列。</p>
 * @return array <p>配列を返します。エラーが発生した場合は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.array-replace-recursive.php
 * @see array_replace(), array_merge_recursive()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function array_replace_recursive(array $array1, array $array2, array $_ = NULL): array {}

/**
 * 要素を逆順にした配列を返す
 * <p>配列を受け取って、要素の順番を逆にした新しい配列を返します。</p>
 * @param array $array <p>入力の配列。</p>
 * @param bool $preserve_keys <p><b><code>TRUE</code></b> の場合は数値のキーを保持します。 非数値のキーは、この設定にかかわらず常に保持されます。</p>
 * @return array <p>逆転させた配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-reverse.php
 * @see array_flip()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_reverse(array $array, bool $preserve_keys = FALSE): array {}

/**
 * 指定した値を配列で検索し、見つかった場合に対応する最初のキーを返す
 * <p><code>haystack</code> において <code>needle</code> を検索します。</p>
 * @param mixed $needle <p>検索したい値。</p>  <p><b>注意</b>:</p> <p><code>needle</code> が文字列の場合、 大文字小文字を区別して比較が行われます。</p>
 * @param array $haystack <p>配列。</p>
 * @param bool $strict <p>オプションの3番目のパラメータ <code>strict</code> に <b><code>TRUE</code></b> が指定された場合、 <b>array_search()</b> は <i>identical</i> 要素を <code>haystack</code> から探します。 つまり、<code>haystack</code> の中で <code>needle</code> の厳密な型比較を実行します。 およびオブジェクトが同一のインスタンスであるかどうかも確認します。</p>
 * @return mixed <p><code>needle</code> が見つかった場合に配列のキー、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p><p>もし <code>haystack</code> に 1 つ以上の <code>needle</code> に見つかった場合、 最初にマッチしたキーが返されます。全てのマッチした値に対するキーを返すためには、代わりに <code>array_keys()</code> にパラメータ <code>search_value</code> を付けて使用してください。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.array-search.php
 * @see array_keys(), array_values(), array_key_exists(), in_array()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function array_search($needle, array $haystack, bool $strict = FALSE) {}

/**
 * 配列の先頭から要素を一つ取り出す
 * <p><b>array_shift()</b> は、<code>array</code> の最初の値を取り出して返します。配列 <code>array</code> は、要素一つ分だけ短くなり、全ての要素は前にずれます。 数値添字の配列のキーはゼロから順に新たに振りなおされますが、 リテラルのキーはそのままになります。</p><p><b>注意</b>: この関数は、 入力配列のポインタを、使用した後にリセット (<code>reset()</code>) します。</p>
 * @param array $array <p>入力の配列。</p>
 * @return mixed <p>取り出した値を返します。<code>array</code> が空の場合や配列でない場合は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.array-shift.php
 * @see array_unshift(), array_push(), array_pop()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_shift(array &$array) {}

/**
 * 配列の一部を展開する
 * <p><b>array_slice()</b>は、<code>array</code> から引数 <code>offset</code> および <code>length</code> で指定された連続する要素を返します。</p>
 * @param array $array <p>入力の配列。</p>
 * @param int $offset <p><code>offset</code> が負の値ではない場合、要素位置の計算は、 配列 <code>array</code> の offset から始められます。 <code>offset</code> が負の場合、要素位置の計算は <code>array</code> の最後から行われます。</p>
 * @param int $length <p><code>length</code>が指定され、正の場合、 配列の要素の中から最大でその数までの要素を返します。 配列の要素数が <code>length</code> より少ない場合は、 配列から取得できる要素だけを返します。<code>length</code> が指定され、負の場合、配列の末尾から連続する複数の要素が返されます。 省略された場合、<code>offset</code> から配列の最後までの全ての要素が返されます。</p>
 * @param bool $preserve_keys <p><b>array_slice()</b> はデフォルトで配列の数値キーを並べなおし、 リセットすることに注意してください。 <code>preserve_keys</code> を <b><code>TRUE</code></b> にする事でこの動作を変更することができます。</p>
 * @return array <p>切り取った部分を返します。オフセットが配列のサイズより大きい場合は、空の配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-slice.php
 * @see array_splice(), unset(), array_chunk()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_slice(array $array, int $offset, int $length = NULL, bool $preserve_keys = FALSE): array {}

/**
 * 配列の一部を削除し、他の要素で置換する
 * <p>配列 <code>input</code> から <code>offset</code> および <code>length</code> で指定された要素を削除し、配列 <code>replacement</code> でそれを置換します。</p><p><code>input</code> の配列の数値添字は保存されないことに注意しましょう。</p><p><b>注意</b>:  <code>replacement</code> が配列でない場合は、 型変換 を行います (つまり <code>(array) $replacement</code> とします)。 たとえば <code>replacement</code> にオブジェクトや <b><code>NULL</code></b> などを指定した場合に、 予期せぬ動きをする可能性があります。 </p>
 * @param array $input <p>入力の配列。</p>
 * @param int $offset <p><code>offset</code> が正の場合、削除される部分は 配列 <code>input</code> の最初から指定オフセットの ぶんだけ進んだ位置からとなります。 <code>offset</code> が負の場合、削除される部分は、 <code>input</code> の末尾から数えた位置からとなります。</p>
 * @param int $length <p><code>length</code> が省略された場合、 <code>offset</code> から配列の最後までが全て削除されます。 <code>length</code> が指定され、正の場合、複数の要素が削除されます。 負の <code>length</code> が指定された場合、削除される部分の末尾の位置は配列の末尾を基準にして計算されます。 <code>length</code> にゼロを指定した場合は、どの要素も削除しません。 ヒント: <code>replacement</code> も指定した場合に <code>offset</code> から配列の最後まで全てを削除するには、 <code>length</code> を求めるために <i>count($input) </i> を使用してください。</p>
 * @param mixed $replacement <p>配列 <code>replacement</code> が指定された場合、 削除された要素は、この配列の要素で置換されます。</p> <p><code>offset</code> および <code>length</code> で何も削除しないと指定した場合、配列 <code>replacement</code> の要素は <code>offset</code> で指定された位置に挿入されます。 置換される配列のキーは保存されないことに注意してください。</p> <p>もし <code>replacement</code> に一つしか要素がない場合、 要素そのものが配列やオブジェクトあるいは <b><code>NULL</code></b> でない限り、<i>array()</i> で括る必要はありません。</p>
 * @return array <p>抽出された要素を含む配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-splice.php
 * @see array_slice(), unset(), array_merge()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_splice(array &$input, int $offset, int $length  = 'count($input)', $replacement = array()): array {}

/**
 * 配列の中の値の合計を計算する
 * <p><b>array_sum()</b> は、配列の中の値の合計を整数または float として返します。</p>
 * @param array $array <p>入力の配列。</p>
 * @return number <p>値の合計を整数または float として返します。 <code>array</code> が空の場合は <i>0</i> を返します。</p>
 * @link http://php.net/manual/ja/function.array-sum.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function array_sum(array $array) {}

/**
 * データの比較にコールバック関数を用い、配列の差を計算する
 * <p>データの比較にコールバック関数を用い、配列の差を計算します。 この関数は <code>array_diff()</code> と異なり、 データの比較に内部関数を利用します。</p>
 * @param array $array1 <p>最初の配列。</p>
 * @param array $array2 <p>2 番目の配列。</p>
 * @param array $_
 * @param callable $value_compare_func <p>比較用のコールバック関数。</p> <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )
 * @return array <p>他の引数のいずれにも存在しない <code>array1</code> の値の全てを有する配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-udiff.php
 * @see array_diff(), array_diff_assoc(), array_diff_uassoc(), array_udiff_assoc(), array_udiff_uassoc(), array_intersect(), array_intersect_assoc(), array_uintersect(), array_uintersect_assoc(), array_uintersect_uassoc()
 * @since PHP 5, PHP 7
 */
function array_udiff(array $array1, array $array2, array $_ = NULL, callable $value_compare_func): array {}

/**
 * データの比較にコールバック関数を用い、 追加された添字の確認を含めて配列の差を計算する
 * <p>データの比較にコールバック関数を用い、 追加された添字の確認を含めて配列の差を計算します。</p><p><b>注意</b>:  この関数は n 次元配列の一つの次元しかチェックしないことに注意してください。 もちろん、<i>array_udiff_assoc($array1[0], $array2[0], "some_comparison_func");</i> のようにすることでより深い次元でのチェックもできます。 </p>
 * @param array $array1 <p>最初の配列。</p>
 * @param array $array2 <p>2 番目の配列。</p>
 * @param array $_
 * @param callable $value_compare_func <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )
 * @return array <p><b>array_udiff_assoc()</b> は、 <code>array1</code> から他の引数の配列の中に現れない全ての値を含む <code>array</code> を返します。 <code>array_diff()</code> や <code>array_udiff()</code> と異なり、キーが比較に使用されることに注意してください。 配列のデータの比較は、ユーザーが指定したコールバックを用いて行われます。 この点で、<code>array_diff_assoc()</code> は反対の動作、つまり 内部関数を利用した比較を行います。</p>
 * @link http://php.net/manual/ja/function.array-udiff-assoc.php
 * @see array_diff(), array_diff_assoc(), array_diff_uassoc(), array_udiff(), array_udiff_uassoc(), array_intersect(), array_intersect_assoc(), array_uintersect(), array_uintersect_assoc(), array_uintersect_uassoc()
 * @since PHP 5, PHP 7
 */
function array_udiff_assoc(array $array1, array $array2, array $_ = NULL, callable $value_compare_func): array {}

/**
 * データと添字の比較にコールバック関数を用い、 追加された添字の確認を含めて配列の差を計算する
 * <p>データと添字の比較にコールバック関数を用い、 追加された添字の確認を含めて配列の差を計算します。</p><p><code>array_diff()</code> や <code>array_udiff()</code> と異なり、キーが比較に使用されることに注意してください。</p>
 * @param array $array1 <p>最初の配列。</p>
 * @param array $array2 <p>2 番目の配列。</p>
 * @param array $_
 * @param callable $value_compare_func <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )
 * @param callable $key_compare_func <p>キー（添字）の比較は、コールバック関数 <code>key_compare_func</code> で行われます。 <code>array_udiff_assoc()</code> では後者の比較が内部関数で 行われるという点で、この関数とは異なります。</p>
 * @return array <p><code>array1</code> から他の引数の配列の中に現れない全ての 値を含む<code>array</code> を返します。</p>
 * @link http://php.net/manual/ja/function.array-udiff-uassoc.php
 * @see array_diff(), array_diff_assoc(), array_udiff(), array_udiff_assoc(), array_intersect(), array_intersect_assoc(), array_uintersect(), array_uintersect_assoc(), array_uintersect_uassoc()
 * @since PHP 5, PHP 7
 */
function array_udiff_uassoc(array $array1, array $array2, array $_ = NULL, callable $value_compare_func, callable $key_compare_func): array {}

/**
 * データの比較にコールバック関数を用い、配列の共通項を計算する
 * <p>データの比較にコールバック関数を用い、配列の共通項を計算します。</p>
 * @param array $array1 <p>最初の配列。</p>
 * @param array $array2 <p>2 番目の配列。</p>
 * @param array $_
 * @param callable $value_compare_func <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )
 * @return array <p>他の全ての引数に存在する <code>array1</code> の値を全て有する配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-uintersect.php
 * @see array_intersect(), array_intersect_assoc(), array_uintersect_assoc(), array_uintersect_uassoc()
 * @since PHP 5, PHP 7
 */
function array_uintersect(array $array1, array $array2, array $_ = NULL, callable $value_compare_func): array {}

/**
 * データの比較にコールバック関数を用い、 追加された添字の確認も含めて配列の共通項を計算する
 * <p>データの比較にコールバック関数を用い、 追加された添字の確認も含めて配列の共通項を計算します。</p><p><code>array_uintersect()</code>と異なり、キーが比較に使用される ことに注意してください。データはコールバック関数を用いて比較されます。</p>
 * @param array $array1 <p>最初の配列。</p>
 * @param array $array2 <p>2 番目の配列。</p>
 * @param array $_
 * @param callable $value_compare_func <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )
 * @return array <p>全ての引数に現れる <code>array1</code> の全ての値を含む配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-uintersect-assoc.php
 * @see array_uintersect(), array_intersect_assoc(), array_intersect_uassoc(), array_uintersect_uassoc()
 * @since PHP 5, PHP 7
 */
function array_uintersect_assoc(array $array1, array $array2, array $_ = NULL, callable $value_compare_func): array {}

/**
 * データと添字の比較に個別のコールバック関数を用い、 追加された添字の確認も含めて配列の共通項を計算する
 * <p>データと添字の比較にそれぞれ別のコールバック関数を用い、 追加された添字の確認も含めて配列の共通項を計算します。</p>
 * @param array $array1 <p>最初の配列。</p>
 * @param array $array2 <p>2 番目の配列。</p>
 * @param array $_
 * @param callable $value_compare_func <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )
 * @param callable $key_compare_func <p>キーの比較用のコールバック関数。</p>
 * @return array <p>全ての引数に現れる <code>array1</code> の全ての値を含む配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-uintersect-uassoc.php
 * @see array_uintersect(), array_intersect_assoc(), array_intersect_uassoc(), array_uintersect_assoc()
 * @since PHP 5, PHP 7
 */
function array_uintersect_uassoc(array $array1, array $array2, array $_ = NULL, callable $value_compare_func, callable $key_compare_func): array {}

/**
 * 配列から重複した値を削除する
 * <p><code>array</code> を入力とし、値に重複のない新規配列を返します。</p><p>キーは保持されることに注意してください。 If multiple elements compare equal under the given <code>sort_flags</code>, then the key and value of the first equal element will be retained.</p><p><b>注意</b>:  <i>(string) $elem1 === (string) $elem2</i> の場合のみ二つの要素は等しいとみなされます。 つまり、文字列表現が同じである場合は、最初の要素を使用します。 </p>
 * @param array $array <p>入力の配列。</p>
 * @param int $sort_flags <p>オプションの 2 番目のパラメータ <code>sort_flags</code> にこれらの値を使用して、ソートの挙動を変更します。</p> <p>ソート形式のフラグは次のとおりです。</p><ul> <li> <b><code>SORT_REGULAR</code></b> - 通常の比較 (型変換をしない) を行います </li> <li> <b><code>SORT_NUMERIC</code></b> - 数値として比較します </li> <li> <b><code>SORT_STRING</code></b> - 文字列として比較します </li> <li> <b><code>SORT_LOCALE_STRING</code></b> - 現在のロケールにもとづいて文字列として比較します。  </li> </ul>
 * @return array <p>処理済の配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-unique.php
 * @see array_count_values()
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function array_unique(array $array, int $sort_flags = SORT_STRING): array {}

/**
 * 一つ以上の要素を配列の最初に加える
 * <p><b>array_unshift()</b> は、<code>array</code> の先頭に指定された要素を加えます。リストの要素は全体として加えられるため、 加えられた要素の順番は変わらないことに注意してください。 配列の数値添字はすべて新たにゼロから振りなおされます。 リテラルのキーについては変更されません。</p>
 * @param array $array <p>入力の配列。</p>
 * @param mixed $_ <p>加える値。</p>
 * @return int <p>処理後の <code>array</code> の要素の数を返します。</p>
 * @link http://php.net/manual/ja/function.array-unshift.php
 * @see array_shift(), array_push(), array_pop()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_unshift(array &$array, $_ = NULL): int {}

/**
 * 配列の全ての値を返す
 * <p><b>array_values()</b> は、配列 <code>array</code> から全ての値を取り出し、数値添字をつけた配列を返します。</p>
 * @param array $array <p>配列。</p>
 * @return array <p>数値添字の値の配列を返します。</p>
 * @link http://php.net/manual/ja/function.array-values.php
 * @see array_keys(), array_combine()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_values(array $array): array {}

/**
 * 配列の全ての要素にユーザー定義の関数を適用する
 * <p><code>array</code> 配列の各要素にユーザー定義関数 <code>callback</code> を適用します。</p><p><b>array_walk()</b> は <code>array</code> の内部配列ポインタに影響されません。<b>array_walk()</b> はポインタの位置に関わらず配列の全てに渡って適用されます。</p>
 * @param array $array <p>入力の配列。</p>
 * @param callable $callback <p>通常、 <code>callback</code> は引数を二つとります。 <code>array</code> パラメータの値が最初の引数、 キー/添字は二番目の引数となります。</p>  <p><b>注意</b>:</p> <p><code>callback</code> により配列の値そのものを変更する必要がある場合、 <code>callback</code> の最初の引数は 参照 として渡す必要があります。この場合、配列の要素に加えた変更は、 配列自体に対して行われます。</p>   <p><b>注意</b>:</p> <p>内部関数の多く (たとえば <code>strtolower()</code>) は、 期待しているよりも多い引数を受け取ると警告が発生します。 そのため、<code>callback</code> に直接指定することはできません。</p>  <p>変更される可能性があるのは配列の値だけであり、 その構造を変更することはできません。つまり、 プログラマは要素の追加や削除そして並べ替えなどができないということです。 コールバック関数がこの条件を満たさない場合は、 この関数の動作は未定義で予期せぬ結果を得ることになります。</p>
 * @param mixed $userdata <p>オプションの <code>userdata</code> パラメータが指定された場合、 コールバック関数 <code>callback</code> への三番目の引数として渡されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.array-walk.php
 * @see array_walk_recursive(), iterator_apply(), list(), each(), call_user_func_array(), array_map()
 * @since PHP 4, PHP 5, PHP 7
 */
function array_walk(array &$array, callable $callback, $userdata = NULL): bool {}

/**
 * 配列の全ての要素に、ユーザー関数を再帰的に適用する
 * <p><code>array</code> 配列の各要素にユーザー定義関数 <code>callback</code>を適用します。 この関数は配列の要素内を再帰的にたどっていきます。</p>
 * @param array $array <p>入力の配列。</p>
 * @param callable $callback <p>通常、 <code>callback</code> は引数を二つとります。 <code>array</code> パラメータの値が最初の引数、 キー/添字は二番目の引数となります。</p>  <p><b>注意</b>:</p> <p><code>callback</code> により配列の値そのものを変更する必要がある場合、 <code>callback</code> の最初の引数は 参照 として渡す必要があります。この場合、配列の要素に加えた変更は、 配列自体に対して行われます。</p>
 * @param mixed $userdata <p>オプションの <code>userdata</code> パラメータが指定された場合、 コールバック関数 <code>callback</code> への三番目の引数として渡されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.array-walk-recursive.php
 * @see array_walk()
 * @since PHP 5, PHP 7
 */
function array_walk_recursive(array &$array, callable $callback, $userdata = NULL): bool {}

/**
 * 連想キーと要素との関係を維持しつつ配列を逆順にソートする
 * <p>この関数は、連想配列において各配列のキーと要素との関係を維持しつつソートを行います。</p><p>この関数は、主に実際の要素の並び方が重要である連想配列をソートするために使われます。</p><p><b>注意</b>:</p><p>比較結果が等しくなる二つの要素があった場合、ソートした配列におけるそれらの並び順は不定となります。</p>
 * @param array $array <p>入力の配列。</p>
 * @param int $sort_flags <p>オプションのパラメータ <code>sort_flags</code> によりソートの動作を修正可能です。詳細については、 <code>sort()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.arsort.php
 * @see asort()
 * @since PHP 4, PHP 5, PHP 7
 */
function arsort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * 連想キーと要素との関係を維持しつつ配列をソートする
 * <p>この関数は、 連想配列において各配列のキーと要素との関係を維持しつつ配列をソートします。 この関数は、 主に実際の要素の並び方が重要である連想配列をソートするために使われます。</p><p><b>注意</b>:</p><p>比較結果が等しくなる二つの要素があった場合、ソートした配列におけるそれらの並び順は不定となります。</p>
 * @param array $array <p>入力の配列。</p>
 * @param int $sort_flags <p>オプションのパラメータ <code>sort_flags</code> によりソートの動作を修正可能です。 詳細については、<code>sort()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.asort.php
 * @see arsort()
 * @since PHP 4, PHP 5, PHP 7
 */
function asort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * 変数名とその値から配列を作成する
 * <p>変数名とその値から配列を作成します。</p><p>各引数について、<b>compact()</b> は現在のシンボルテーブルにおいてその名前を有する変数を探し、 変数名がキー、変数の値がそのキーに関する値となるように追加します。 端的に言うと、<code>extract()</code> の逆の動作をします。</p><p>設定されていない全ての文字列は、単にスキップされます。</p>
 * @param mixed $varname1 <p><b>compact()</b> がとるパラメータの数は可変です。 各パラメータは、変数名を値とする文字列か、 変数名の配列のどちらかとすることができます。 配列は、変数名を値とする別の配列を持つことができます。 <b>compact()</b>はこれを再帰的に処理します。</p>
 * @param mixed $_
 * @return array <p>追加された全ての変数を値とする出力配列を返します。</p>
 * @link http://php.net/manual/ja/function.compact.php
 * @see extract()
 * @since PHP 4, PHP 5, PHP 7
 */
function compact($varname1, $_ = NULL): array {}

/**
 * 変数に含まれるすべての要素、 あるいはオブジェクトに含まれる何かの数を数える
 * <p>変数に含まれるすべての要素、 あるいはオブジェクトに含まれる何かの数を数えます。</p><p>オブジェクトに対して、もし SPL がインストールされている場合、インターフェイス Countable を実装することで <b>count()</b> にフックすることができます。このインターフェイスには 1 つのメソッド <code>Countable::count()</code> があり、<b>count()</b> 関数に対する値を返します。</p><p>配列の実装やPHPでの使用法に関する詳細な説明については、マニュアルの 配列のセクションを参照ください。</p>
 * @param mixed $array_or_countable <p>配列あるいは Countable オブジェクト。</p>
 * @param int $mode <p>オプションの<code>mode</code> 引数が <b><code>COUNT_RECURSIVE</code></b> (または 1) にセットされた場合、<b>count()</b> は再帰的に配列をカウントします。 これは多次元配列の全ての要素をカウントするといった場合に特に有効です。</p>  <b>警告</b> <p><b>count()</b> は、再帰を検出して無限ループを回避するようになっています。 しかしその場合 (配列の中に自分自身が複数回登場する場合) は毎回 <b><code>E_WARNING</code></b> を発行し、期待する結果より大きい数を返します。</p>
 * @return int <p><code>array_or_countable</code> に含まれる要素の数を返します。 もしパラメータが配列でもなく Countable インターフェイスを 実装したオブジェクトでもない場合、<i>1</i> が返されます。 ひとつ例外があり、<code>array_or_countable</code> が <b><code>NULL</code></b> の場合、 <i>0</i> が返されます。</p> <b>警告</b> <p><b>count()</b> は、セットされていない変数に関して 0 を返しますが、変数が空の配列として初期化されている場合にも 0 を返します。 ある変数がセットされているかどうかを調べるには、 <code>isset()</code> を使用してください。</p>
 * @link http://php.net/manual/ja/function.count.php
 * @see is_array(), isset(), empty(), strlen()
 * @since PHP 4, PHP 5, PHP 7
 */
function count($array_or_countable, int $mode = COUNT_NORMAL): int {}

/**
 * 配列内の現在の要素を返す
 * <p>各配列は、"カレント"の要素へのポインタを有しています。 このポインタは、その配列の最初の要素を指すように初期化されます。</p>
 * @param array $array <p>配列。</p>
 * @return mixed <p><b>current()</b> 関数は、 単に内部ポインタが現在指している配列要素の値を返します。 この関数は、ポインタを全く移動しません。 内部ポインタが最終要素の次を指していたり 配列が空だったりした場合、 <b>current()</b> は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.current.php
 * @see end(), key(), each(), prev(), reset(), next()
 * @since PHP 4, PHP 5, PHP 7
 */
function current(array $array) {}

/**
 * 配列から現在のキーと値のペアを返して、カーソルを進める
 * <p>配列から現在のキーと値のペアを返して、カーソルを進めます。</p><p><b>each()</b> を実行した後、配列カーソルは、 配列の次の要素に移動します。配列の最終要素にカーソルがある場合は、 最終要素にとどまります。再度 each を使用して配列を走査するには、 <code>reset()</code> を使用する必要があります。</p>
 * @param array $array <p>入力の配列。</p>
 * @return array <p>配列 <code>array</code> から現在のキーと値のペアを返します。 このペアは 4 つの要素を持つ配列で、 それぞれの要素は <i>0</i>, <i>1</i>, <i>key</i>, <i>value</i> というキーを有しています。 要素 <i>0</i>と<i>key</i> の各々は配列要素のキー名称を保持しており、<i>1</i> と <i>value</i> の各々はそのデータを保持しています。</p><p>配列の内部ポインタが配列の最終要素以降を指す場合、 <b>each()</b> は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.each.php
 * @see key(), list(), current(), reset(), next(), prev()
 * @since PHP 4, PHP 5, PHP 7
 */
function each(array &$array): array {}

/**
 * 配列の内部ポインタを最終要素にセットする
 * <p><b>end()</b> は <code>array</code> の内部ポインタを最後の要素まで進め、その値を返します。</p>
 * @param array $array <p>配列。この配列は参照渡しとなります。関数内で配列の中身を変更するからです。 つまり、ここには配列そのものを渡さなければならず、 配列を返す関数を指定することはできません。 参照渡しできるのは、実際の変数だけだからです。</p>
 * @return mixed <p>最後の要素の値、あるいは空の配列の場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.end.php
 * @see current(), each(), prev(), reset(), next()
 * @since PHP 4, PHP 5, PHP 7
 */
function end(array &$array) {}

/**
 * 配列からシンボルテーブルに変数をインポートする
 * <p>配列からシンボルテーブルに変数をインポートします。</p><p>各キーについて変数名として有効であるかどうか、 そして、シンボルテーブルの既存の変数と衝突しないかどうかを確認します。</p><p>ユーザーの入力、例えば $_GET や $_FILES のような、 信頼できないデータに <b>extract()</b> を使用しないでください。</p>
 * @param array $array <p>この関数は連想配列 <code>var_array</code> を引数とし、そのキーを変数名、値を変数の値として処理します。 各キー/値の組に関して、<code>flags</code> および <code>prefix</code> パラメータに基づき、 現在のシンボルテーブルに変数を一つ作成します。</p> <p>連想配列を使用する必要があります。<b><code>EXTR_PREFIX_ALL</code></b> または <b><code>EXTR_PREFIX_INVALID</code></b> を使用しない限り、 数値添字の配列には結果は出力されません。</p>
 * @param int $flags <p>無効または数値キーおよび衝突に関する対処法は、 <code>flags</code> で定義されます。 これは以下の値のどれかとなります。</p>  <b><code>EXTR_OVERWRITE</code></b>    衝突があった場合、存在する変数が上書きされます。    <b><code>EXTR_SKIP</code></b>    衝突があった場合、存在する変数は上書きされません。    <b><code>EXTR_PREFIX_SAME</code></b>    衝突があった場合、<code>prefix</code> を前につけた新しい変数となります。    <b><code>EXTR_PREFIX_ALL</code></b>    全ての変数の前に <code>prefix</code> を付けます。    <b><code>EXTR_PREFIX_INVALID</code></b>    無効または数値の変数名のみに接頭辞 <code>prefix</code> を付けます。    <b><code>EXTR_IF_EXISTS</code></b>    現在のシンボルテーブルに既に存在する場合にのみ上書きします。 例えば $_REQUEST 以外にあなたが定義した変数のみを展開し 有効な変数としたいような場合に有用です。    <b><code>EXTR_PREFIX_IF_EXISTS</code></b>    同じ変数だが接頭辞をつけていないバージョンの変数が 現在のシンボルテーブルに存在する場合にのみ 変数を生成します。    <b><code>EXTR_REFS</code></b>    変数を参照として展開します。 これはインポート済みの変数が、 <code>array</code> パラメータの値に常に参照付けられることを意味します。 このフラグを単独で使用するか、 あるいは<code>flags</code>と和算することにより、 他のフラグとそれを組み合わせることができます。    <p><code>flags</code> が指定されない場合、 <b><code>EXTR_OVERWRITE</code></b> とみなされます。</p>
 * @param string $prefix <p><code>prefix</code> は、 <code>flags</code> が <b><code>EXTR_PREFIX_SAME</code></b>、<b><code>EXTR_PREFIX_ALL</code></b>、 <b><code>EXTR_PREFIX_INVALID</code></b> あるいは <b><code>EXTR_PREFIX_IF_EXISTS</code></b> の場合にのみ必要であることに注意してください。 接頭辞を付けた変数名が有効な変数名でない場合、 この変数はシンボルテーブルにインポートされません。接頭辞は、 アンダースコア文字で配列のキーから自動的に分割されます。</p>
 * @return int <p>シンボルテーブルにインポートした変数の数を返します。</p>
 * @link http://php.net/manual/ja/function.extract.php
 * @see compact(), list()
 * @since PHP 4, PHP 5, PHP 7
 */
function extract(array &$array, int $flags = EXTR_OVERWRITE, string $prefix = NULL): int {}

/**
 * 配列に値があるかチェックする
 * <p><code>needle</code> で <code>haystack</code> を検索します。 <code>strict</code> が設定されていない限りは型の比較は行いません。</p>
 * @param mixed $needle <p>探す値。</p>  <p><b>注意</b>:</p> <p><code>needle</code> が文字列の場合、 比較の際に大文字小文字は区別されます。</p>
 * @param array $haystack <p>配列。</p>
 * @param bool $strict <p>三番目のパラメータ <code>strict</code> が <b><code>TRUE</code></b> に設定された場合、 <b>in_array()</b> は、<code>haystack</code> の中の <code>needle</code> の 型も確認します。</p>
 * @return bool <p>配列で <code>needle</code> が見つかった場合に <b><code>TRUE</code></b>、それ以外の場合は、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.in-array.php
 * @see array_search(), isset(), array_key_exists()
 * @since PHP 4, PHP 5, PHP 7
 */
function in_array($needle, array $haystack, bool $strict = FALSE): bool {}

/**
 * 配列からキーを取り出す
 * <p><b>key()</b> は、 現在の配列位置における連想配列要素のキーを返します。</p>
 * @param array $array <p>配列。</p>
 * @return mixed <p><b>key()</b> 関数は、内部ポインタが現在指している配列要素のキーを返します。 ポインタを移動することはありません。内部ポインタが要素リストの末尾にいる場合や配列が空の場合は <b>key()</b> は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.key.php
 * @see current(), next()
 * @since PHP 4, PHP 5, PHP 7
 */
function key(array $array) {}

/**
 * array_key_exists() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>array_key_exists()</code></p>
 * @param mixed $key <p>調べる値。</p>
 * @param array $array <p>キーが存在するかどうかを調べたい配列。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.key-exists.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function key_exists($key, array $array): bool {}

/**
 * 配列をキーで逆順にソートする
 * <p>配列をキーにより逆順にソートします。キーとデータとの関係は維持されます。 この関数は主に連想配列の場合に有用です。</p>
 * @param array $array <p>入力の配列。</p>
 * @param int $sort_flags <p>オプションのパラメータ <code>sort_flags</code> によりソートの動作を修正可能です。詳細については、 <code>sort()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.krsort.php
 * @see arsort(), ksort()
 * @since PHP 4, PHP 5, PHP 7
 */
function krsort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * 配列をキーでソートする
 * <p>キーとデータの関係を維持しつつ、配列をキーでソートします。 この関数は、主として連想配列において有用です。</p>
 * @param array $array <p>入力の配列。</p>
 * @param int $sort_flags <p>オプションのパラメータ <code>sort_flags</code> によりソートの動作を修正可能です。詳細については、 <code>sort()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ksort.php
 * @see asort()
 * @since PHP 4, PHP 5, PHP 7
 */
function ksort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * 大文字小文字を区別しない"自然順"アルゴリズムを用いて配列をソートする
 * <p><b>natcasesort()</b> は、大文字小文字を区別しないバージョンの <code>natsort()</code> です。</p><p>この関数は、人間が行うような手法でアルファベットまたは数字の文字列の順番を キー/値の関係を保持したままソートします。 これは、"自然順(natural ordering)"と呼ばれているものです。</p><p><b>注意</b>:</p><p>比較結果が等しくなる二つの要素があった場合、ソートした配列におけるそれらの並び順は不定となります。</p>
 * @param array $array <p>入力の配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.natcasesort.php
 * @see natsort(), strnatcmp(), strnatcasecmp()
 * @since PHP 4, PHP 5, PHP 7
 */
function natcasesort(array &$array): bool {}

/**
 * "自然順"アルゴリズムで配列をソートする
 * <p>この関数は、人間が行うような手法でアルファベットまたは数字の文字列の順番を キー/値の関係を保持したままソートします。 これは、"自然順(natural ordering)"と呼ばれているものです。 このアルゴリズムと (<code>sort()</code> を用いた) 通常のコンピュータ文字列ソートアルゴリズムの違いを示す例を以下に示します。</p><p><b>注意</b>:</p><p>比較結果が等しくなる二つの要素があった場合、ソートした配列におけるそれらの並び順は不定となります。</p>
 * @param array $array <p>入力の配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.natsort.php
 * @see natcasesort(), strnatcmp(), strnatcasecmp()
 * @since PHP 4, PHP 5, PHP 7
 */
function natsort(array &$array): bool {}

/**
 * 配列の内部ポインタを進める
 * <p><b>next()</b> は、ひとつの違いを除いて <code>current()</code> と同じです。 <b>next()</b> は要素を返す前に内部配列ポインタをひとつ先に進めます。 つまり、次の配列要素を返すとともに内部配列ポインタをひとつ進めるということです。</p>
 * @param array $array <p>対象となる配列。</p>
 * @return mixed <p>内部配列ポインタが指す場所の次の場所の値を返します。 それ以上要素がない場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.next.php
 * @see current(), end(), prev(), reset(), each()
 * @since PHP 4, PHP 5, PHP 7
 */
function next(array &$array) {}

/**
 * current() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>current()</code></p>
 * @param array $array <p>配列。</p>
 * @return mixed
 * @link http://php.net/manual/ja/function.pos.php
 * @since PHP 4, PHP 5, PHP 7
 */
function pos(array $array) {}

/**
 * 内部の配列ポインタをひとつ前に戻す
 * <p>内部の配列ポインタをひとつ前に戻します。</p><p><b>prev()</b> は、 内部の配列ポインタを進めるのではなく戻すということを除けば <code>next()</code> と同じです。</p>
 * @param array $array <p>入力の配列。</p>
 * @return mixed <p>内部の配列ポインタが指している前の場所の配列値を返します。 もう要素がない場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.prev.php
 * @see current(), end(), next(), reset(), each()
 * @since PHP 4, PHP 5, PHP 7
 */
function prev(array &$array) {}

/**
 * ある範囲の整数を有する配列を作成する
 * <p>ある範囲の整数を有する配列を作成します。</p>
 * @param mixed $start <p>シーケンスの最初の値。</p>
 * @param mixed $end <p>値が <code>end</code> に達するまでシーケンスが続きます。</p>
 * @param number $step <p><code>step</code> が指定されている場合、それは 要素毎の増加数となります。<code>step</code> は正の数でなければなりません。デフォルトは 1 です。</p>
 * @return array <p><code>start</code> から <code>end</code> までの整数の配列を返します。</p>
 * @link http://php.net/manual/ja/function.range.php
 * @see shuffle(), array_fill()
 * @since PHP 4, PHP 5, PHP 7
 */
function range($start, $end, $step = 1): array {}

/**
 * 配列の内部ポインタを先頭の要素にセットする
 * <p><b>reset()</b> は、<code>array</code> の内部ポインタの先頭の要素に戻し、配列の最初の要素の値を返します。</p>
 * @param array $array <p>入力の配列。</p>
 * @return mixed <p>配列の最初の要素の値を返します。 配列が空の場合 <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.reset.php
 * @see current(), each(), end(), next(), prev()
 * @since PHP 4, PHP 5, PHP 7
 */
function reset(array &$array) {}

/**
 * 配列を逆順にソートする
 * <p>この関数は、配列を逆順に(高位から低位に)ソートします。</p><p><b>注意</b>:</p><p>比較結果が等しくなる二つの要素があった場合、ソートした配列におけるそれらの並び順は不定となります。</p>
 * @param array $array <p>入力の配列。</p>
 * @param int $sort_flags <p>オプションのパラメータ <code>sort_flags</code> によりソートの動作を修正可能です。詳細については、 <code>sort()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.rsort.php
 * @see arsort(), krsort()
 * @since PHP 4, PHP 5, PHP 7
 */
function rsort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * 配列をシャッフルする
 * <p>この関数は、配列をシャッフル (要素の順番をランダムに) します。 この関数が使う疑似乱数生成器は、暗号学的な使い方には適していません。</p><p><b>注意</b>:</p><p>比較結果が等しくなる二つの要素があった場合、ソートした配列におけるそれらの並び順は不定となります。</p>
 * @param array $array <p>配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.shuffle.php
 * @see array_rand()
 * @since PHP 4, PHP 5, PHP 7
 */
function shuffle(array &$array): bool {}

/**
 * count() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>count()</code>.</p>
 * @param mixed $array_or_countable <p>配列あるいは Countable オブジェクト。</p>
 * @param int $mode <p>オプションの<code>mode</code> 引数が <b><code>COUNT_RECURSIVE</code></b> (または 1) にセットされた場合、<b>count()</b> は再帰的に配列をカウントします。 これは多次元配列の全ての要素をカウントするといった場合に特に有効です。</p>  <b>警告</b> <p><b>count()</b> は、再帰を検出して無限ループを回避するようになっています。 しかしその場合 (配列の中に自分自身が複数回登場する場合) は毎回 <b><code>E_WARNING</code></b> を発行し、期待する結果より大きい数を返します。</p>
 * @return int
 * @link http://php.net/manual/ja/function.sizeof.php
 * @since PHP 4, PHP 5, PHP 7
 */
function sizeof($array_or_countable, int $mode = COUNT_NORMAL): int {}

/**
 * 配列をソートする
 * <p>この関数は配列をソートします。この関数が正常に終了すると、 各要素が小さい順に並び変わった状態になります。</p><p><b>注意</b>:</p><p>比較結果が等しくなる二つの要素があった場合、ソートした配列におけるそれらの並び順は不定となります。</p>
 * @param array $array <p>入力の配列。</p>
 * @param int $sort_flags <p>オプションの 2 番目のパラメータ <code>sort_flags</code> は、以下の値によりソートの動作を修正するために使用することが可能です。</p> <p>ソート型のフラグ:</p><ul> <li> <b><code>SORT_REGULAR</code></b> - 通常通りに項目を比較 (型は変更しません) </li> <li> <b><code>SORT_NUMERIC</code></b> - 数値的に項目を比較 </li> <li> <b><code>SORT_STRING</code></b> - 文字列として項目を比較 </li> <li>  <b><code>SORT_LOCALE_STRING</code></b> - は、現在のロケールに基づいて比較します。 比較に使うロケールは、<code>setlocale()</code> で変更できます。  </li> <li>  <b><code>SORT_NATURAL</code></b> - 要素の比較を文字列として行い、 <code>natsort()</code> と同様の「自然順」で比較します。  </li> <li>  <b><code>SORT_FLAG_CASE</code></b> - <b><code>SORT_STRING</code></b> や <b><code>SORT_NATURAL</code></b> と (ビット OR で) 組み合わせて使い、 文字列のソートで大文字小文字を区別しないようにします。  </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.sort.php
 * @see asort(), rsort()
 * @since PHP 4, PHP 5, PHP 7
 */
function sort(array &$array, int $sort_flags = SORT_REGULAR): bool {}

/**
 * ユーザー定義の比較関数で配列をソートし、連想インデックスを保持する
 * <p>この関数は、インデックスとそれに対応する要素を関連づけた配列をソートします。 ソートには、ユーザー定義の比較関数を使います。</p><p>主に実際の配列の順序に意味がある連想配列をソートするためにこの関数は使用されます。</p><p><b>注意</b>:</p><p>比較結果が等しくなる二つの要素があった場合、ソートした配列におけるそれらの並び順は不定となります。</p>
 * @param array $array <p>入力の配列。</p>
 * @param callable $value_compare_func <p>ユーザー定義の比較関数の例については、 <code>usort()</code> および <code>uksort()</code> を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.uasort.php
 * @see usort()
 * @since PHP 4, PHP 5, PHP 7
 */
function uasort(array &$array, callable $value_compare_func): bool {}

/**
 * ユーザー定義の比較関数を用いて、キーで配列をソートする
 * <p><b>uksort()</b> は、 ユーザー定義の比較関数を用いて配列のキーをソートします。 ソートしたい配列を複雑な基準でソートする必要がある場合には、 この関数を使う必要があります。</p><p><b>注意</b>:</p><p>比較結果が等しくなる二つの要素があった場合、ソートした配列におけるそれらの並び順は不定となります。</p>
 * @param array $array <p>入力の配列。</p>
 * @param callable $key_compare_func <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.uksort.php
 * @see usort()
 * @since PHP 4, PHP 5, PHP 7
 */
function uksort(array &$array, callable $key_compare_func): bool {}

/**
 * ユーザー定義の比較関数を使用して、配列を値でソートする
 * <p>この関数は、ユーザー定義の比較関数により配列をその値でソートします。 ソートしたい配列を複雑な基準でソートする必要がある場合、 この関数を使用するべきです。</p><p><b>注意</b>:</p><p>比較結果が等しくなる二つの要素があった場合、ソートした配列におけるそれらの並び順は不定となります。</p><p><b>注意</b>: この関数は、 <code>array</code> パラメータの要素に対して新しいキーを割り当てます。 その際、単純にキーを並べ替える代わりに、 すでに割り当てられている既存のキーを削除してしまいます。</p>
 * @param array $array <p>入力の配列。</p>
 * @param callable $value_compare_func <p>比較関数は、最初の引数と二番目の引数の比較結果を返します。最初の引数のほうが二番目の引数より大きい場合は正の数を、二番目の引数と等しい場合はゼロを、そして二番目の引数より小さい場合は負の数を返す必要があります。PHP 7.0.0 より前のバージョンでは、この整数が -2147483648 から 2147483647 までの範囲におさまる必要がありました。</p>  int callback ( <code>mixed</code> <code>$a</code>, <code>mixed</code> <code>$b</code> )  <b>警告</b> <p><code>float</code> のような非整数を比較関数が返すと、 その返り値を内部的に <code>integer</code> にキャストして使います。 つまり、0.99 や 0.1 といった値は整数値 0 にキャストされ、 値が等しいとみなされます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.usort.php
 * @see uasort()
 * @since PHP 4, PHP 5, PHP 7
 */
function usort(array &$array, callable $value_compare_func): bool {}

/**
 * <b><code>ARRAY_FILTER_USE_BOTH</code></b> は <code>array_filter()</code> で使うもので、 値とキーの両方をコールバック関数の引数として渡すよう指示します。 PHP 5.6.0 で追加されました。
 */
define('ARRAY_FILTER_USE_BOTH', 1);

/**
 * <b><code>ARRAY_FILTER_USE_KEY</code></b> は <code>array_filter()</code> で使うもので、 各キーをコールバック関数の最初の引数として渡すよう指示します。 PHP 5.6.0 で追加されました。
 */
define('ARRAY_FILTER_USE_KEY', 2);

/**
 * <b><code>CASE_LOWER</code></b>は、 <code>array_change_key_case()</code>で使用され、 配列のキーを小文字に変換するために使用されます。小文字は、 <code>array_change_key_case()</code>のデフォルトのケースで もあります。
 */
define('CASE_LOWER', 0);

/**
 * <b><code>CASE_UPPER</code></b>は、 <code>array_change_key_case()</code>で使用され、配列のキー を大文字に変換するために使用されます。
 */
define('CASE_UPPER', 1);

define('COUNT_NORMAL', 0);

define('COUNT_RECURSIVE', 1);

define('EXTR_IF_EXISTS', 6);

define('EXTR_OVERWRITE', 0);

define('EXTR_PREFIX_ALL', 3);

define('EXTR_PREFIX_IF_EXISTS', 5);

define('EXTR_PREFIX_INVALID', 4);

define('EXTR_PREFIX_SAME', 2);

define('EXTR_REFS', 256);

define('EXTR_SKIP', 1);

/**
 * <b><code>SORT_ASC</code></b>は、 <code>array_multisort()</code>でソート順を昇順にするために 使用されます。
 */
define('SORT_ASC', 4);

/**
 * <b><code>SORT_DESC</code></b>は、 <code>array_multisort()</code>でソート順を降順にするために 使用されます。
 */
define('SORT_DESC', 3);

/**
 * <b><code>SORT_FLAG_CASE</code></b> は <b><code>SORT_STRING</code></b> や <b><code>SORT_NATURAL</code></b> と (ビット OR で) 組み合わせて使い、 文字列のソートで大文字小文字を区別しないようにします。PHP 5.4.0 で追加されました。
 */
define('SORT_FLAG_CASE', 8);

/**
 * <b><code>SORT_LOCALE_STRING</code></b>は現在のロケールに基づいた 文字列として比較を行うために使用されます。 PHP 5.0.2で追加 されました。
 */
define('SORT_LOCALE_STRING', 5);

/**
 * <b><code>SORT_NATURAL</code></b> は、要素の比較を文字列として行い、 <code>natsort()</code> と同様の「自然順」で比較します。 PHP 5.4.0 で追加されました。
 */
define('SORT_NATURAL', 6);

/**
 * <b><code>SORT_NUMERIC</code></b>は数値で比較を行うために使用さ れます。
 */
define('SORT_NUMERIC', 1);

/**
 * <b><code>SORT_REGULAR</code></b>は通常の比較するために使用され ます。
 */
define('SORT_REGULAR', 0);

/**
 * <b><code>SORT_STRING</code></b>は文字列として比較を行うために使 用されます。
 */
define('SORT_STRING', 2);

