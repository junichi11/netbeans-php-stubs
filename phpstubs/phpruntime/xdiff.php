<?php



/**
 * 2 つのファイルのバイナリ diff を作成する
 * <p>ふたつのファイルのバイナリ diff を作成し、その結果をパッチファイルとして保存します。 この関数はテキストファイルとバイナリファイルの両方に適用可能です。 できあがったパッチファイルを後で適用するには <code>xdiff_file_bpatch()</code>/<code>xdiff_string_bpatch()</code> を使用します。</p>
 * @param string $old_file <p>最初のファイルへのパス。"旧" ファイルです。</p>
 * @param string $new_file <p>2 番目のファイルへのパス。"新" ファイルです。</p>
 * @param string $dest <p>結果のパッチファイルへのパス。 "旧" ファイルと "新" ファイルの差分がこのファイルの内容となります。 このファイルはバイナリフォーマットで、人間には読めない形式です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-file-bdiff.php
 * @see xdiff_file_bpatch()
 * @since PECL xdiff >= 1.5.0
 */
function xdiff_file_bdiff(string $old_file, string $new_file, string $dest): bool {}

/**
 * バイナリ diff を適用して作成するファイルのサイズを読み込む
 * <p>ファイル <code>file</code> のバイナリパッチを 元ファイルに適用して作成するファイルのサイズを返します。</p>
 * @param string $file <p><code>xdiff_string_bdiff()</code> 関数あるいは <code>xdiff_string_rabdiff()</code> 関数で作成したバイナリパッチファイルへのパス。</p>
 * @return int <p>作成されるファイルのサイズを返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-file-bdiff-size.php
 * @see xdiff_file_bdiff(), xdiff_file_rabdiff(), xdiff_file_bpatch()
 * @since PECL xdiff >= 1.5.0
 */
function xdiff_file_bdiff_size(string $file): int {}

/**
 * ファイルにバイナリ diff 形式のパッチを適用する
 * <p>ファイル <code>file</code> にバイナリ形式のパッチファイル <code>patch</code> を適用し、結果をファイル <code>dest</code> に保存します。 この関数は、<code>xdiff_file_bdiff()</code> 関数あるいは <code>xdiff_file_rabdiff()</code>、 そしてそれぞれの文字列版が作成したパッチを受け取ることができます。</p>
 * @param string $file <p>元のファイル。</p>
 * @param string $patch <p>バイナリのパッチファイル。</p>
 * @param string $dest <p>結果のファイルへのパス。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-file-bpatch.php
 * @see xdiff_file_bdiff(), xdiff_file_rabdiff()
 * @since PECL xdiff >= 1.5.0
 */
function xdiff_file_bpatch(string $file, string $patch, string $dest): bool {}

/**
 * 2 つのファイルの unified diff を作成する
 * <p><code>old_file</code> と <code>new_file</code> の差分を含む unified diff を作成し、ファイル <code>dest</code> に保存します。結果は可読形式のファイルとなります。 オプションのパラメータ <code>context</code> で、 変更部分の前後にどれだけの行を含めるかを指定します。 パラメータ <code>minimal</code> を true にすると、 できる限り短い長さのパッチファイルを出力します (長い時間がかかります)。</p>
 * @param string $old_file <p>最初のファイルへのパス。"旧" ファイルです。</p>
 * @param string $new_file <p>2 番目のファイルへのパス。"新" ファイルです。</p>
 * @param string $dest <p>結果のパッチファイルへのパス。</p>
 * @param int $context <p>diff の結果の前後に含める行の数を指定します。</p>
 * @param bool $minimal <p>このパラメータを <b><code>TRUE</code></b> にすると、結果のファイルが最小になります (長い時間がかかります)。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-file-diff.php
 * @see xdiff_file_patch()
 * @since PECL xdiff >= 0.2.0
 */
function xdiff_file_diff(string $old_file, string $new_file, string $dest, int $context = 3, bool $minimal = false): bool {}

/**
 * xiff_file_bdiff のエイリアス
 * <p>ふたつのファイルのバイナリ diff を作成し、その結果をパッチファイルとして保存します。 この関数はテキストファイルとバイナリファイルの両方に適用可能です。 できあがったパッチファイルを後で適用するには <code>xdiff_file_bpatch()</code>. を使用します。</p><p>バージョン 1.5.0 以降では、この関数は <code>xdiff_file_bdiff()</code> のエイリアスです。</p>
 * @link http://php.net/manual/ja/function.xdiff-file-diff-binary.php
 * @since PECL xdiff >= 0.2.0
 */
function xdiff_file_diff_binary() {}

/**
 * 3 つのファイルをひとつに統合する
 * <p>3 つのファイルをひとつに統合し、結果をファイル <code>dest</code> に保存します。 <code>old_file</code> が元のバージョンで、<code>new_file1</code> と <code>new_file2</code> が修正したバージョンとなります。</p>
 * @param string $old_file <p>最初のファイルへのパス。"旧" ファイルです。</p>
 * @param string $new_file1 <p>2 番目のファイルへのパス。<code>old_file</code> の修正版です。</p>
 * @param string $new_file2 <p>3 番目のファイルへのパス。<code>old_file</code> の修正版です。</p>
 * @param string $dest <p>結果のファイルへのパス。<code>new_file1</code> と <code>new_file2</code> の両方の変更点をマージした結果が保存されます。</p>
 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> 、もし拒否された部分がある場合にはその文字列、 内部エラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-file-merge3.php
 * @see xdiff_string_merge3()
 * @since PECL xdiff >= 0.2.0
 */
function xdiff_file_merge3(string $old_file, string $new_file1, string $new_file2, string $dest) {}

/**
 * ファイルに unified diff 形式のパッチを適用する
 * <p>ファイル <code>file</code> にパッチファイル <code>patch</code> を適用し、結果をファイルに保存します。 <code>patch</code> は、 <code>xdiff_file_diff()</code>/<code>xdiff_string_diff()</code> 関数で作成した unified diff 形式でなければなりません。 オプションのパラメータ <code>flags</code> で、操作モードを指定します。</p>
 * @param string $file <p>元のファイル。</p>
 * @param string $patch <p>unified 形式のパッチファイル。 <code>xdiff_string_diff()</code> 関数や <code>xdiff_file_diff()</code> 関数、 あるいは互換性のあるツールで作成したものでなければなりません。</p>
 * @param string $dest <p>結果のファイルへのパス。</p>
 * @param int $flags <p><b><code>XDIFF_PATCH_NORMAL</code></b>（デフォルト。通常のパッチ）あるいは <b><code>XDIFF_PATCH_REVERSE</code></b>（逆パッチ） のいずれか。</p> <p>バージョン 1.5.0 以降では、バイナリ OR を使用して <b><code>XDIFF_PATCH_IGNORESPACE</code></b> フラグを有効にすることもできます。</p>
 * @return mixed <p>内部エラーが発生した場合に <b><code>FALSE</code></b> を返します。 パッチの適用に失敗した場合はパッチが拒否された部分の文字列、 そして成功した場合は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-file-patch.php
 * @see xdiff_file_diff()
 * @since PECL xdiff >= 0.2.0
 */
function xdiff_file_patch(string $file, string $patch, string $dest, int $flags = DIFF_PATCH_NORMAL) {}

/**
 * xdiff_file_bpatch のエイリアス
 * <p>ファイル <code>file</code> にバイナリ形式のパッチファイル <code>patch</code> を適用し、結果をファイル <code>dest</code> に保存します。 この関数は、<code>xdiff_file_bdiff()</code> 関数あるいは <code>xdiff_file_rabdiff()</code>、 そしてそれぞれの文字列版が作成したパッチを受け取ることができます。</p><p>バージョン 1.5.0 以降、この関数は <code>xdiff_file_bpatch()</code> のエイリアスとなりました。</p>
 * @link http://php.net/manual/ja/function.xdiff-file-patch-binary.php
 * @since PECL xdiff >= 0.2.0
 */
function xdiff_file_patch_binary() {}

/**
 * 2 つのファイルのバイナリ diff を、Rabin の polynomial fingerprinting アルゴリズムで作成する
 * <p>ふたつのファイルのバイナリ diff を作成し、その結果をパッチファイルとして保存します。 この関数と <code>xdiff_file_bdiff()</code> との違いは、 使用するアルゴリズムです。この関数のほうが実行速度が速く、より小さな diff を生成します。 この関数はテキストファイルとバイナリファイルの両方に適用可能です。 できあがったパッチファイルを後で適用するには <code>xdiff_file_bpatch()</code>/<code>xdiff_string_bpatch()</code> を使用します。</p><p>アルゴリズムの違いについての詳細は、 » libxdiff のウェブサイトを参照ください。</p>
 * @param string $old_file <p>最初のファイルへのパス。"旧" ファイルです。</p>
 * @param string $new_file <p>2 番目のファイルへのパス。"新" ファイルです。</p>
 * @param string $dest <p>結果のパッチファイルへのパス。 "旧" ファイルと "新" ファイルの差分がこのファイルの内容となります。 このファイルはバイナリフォーマットで、人間には読めない形式です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-file-rabdiff.php
 * @see xdiff_file_bpatch()
 * @since PECL xdiff >= 1.5.0
 */
function xdiff_file_rabdiff(string $old_file, string $new_file, string $dest): bool {}

/**
 * 2 つの文字列のバイナリ diff を作成する
 * <p>ふたつの文字列のバイナリ diff を作成して結果を返します。 この関数はテキストファイルとバイナリファイルの両方に適用可能です。 できあがったパッチファイルを後で適用するには <code>xdiff_string_bpatch()</code>/<code>xdiff_file_bpatch()</code> を使用します。</p>
 * @param string $old_data <p>バイナリデータを含む最初の文字列。"旧" データです。</p>
 * @param string $new_data <p>バイナリデータを含む 2 番目の文字列。"新" データです。</p>
 * @return string <p>"旧" データと "新" データの差分を含むバイナリ diff 文字列、 あるいは内部エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-string-bdiff.php
 * @see xdiff_string_bpatch()
 * @since PECL xdiff >= 1.5.0
 */
function xdiff_string_bdiff(string $old_data, string $new_data): string {}

/**
 * バイナリ diff を適用して作成するファイルのサイズを読み込む
 * <p>バイナリパッチ <code>patch</code> を元ファイルに適用して作成するファイルのサイズを返します。</p>
 * @param string $patch <p><code>xdiff_string_bdiff()</code> 関数あるいは <code>xdiff_string_rabdiff()</code> 関数で作成したバイナリパッチ。</p>
 * @return int <p>作成されるファイルのサイズを返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-string-bdiff-size.php
 * @see xdiff_string_bdiff(), xdiff_string_rabdiff(), xdiff_string_bpatch()
 * @since PECL xdiff >= 1.5.0
 */
function xdiff_string_bdiff_size(string $patch): int {}

/**
 * 文字列にバイナリ diff 形式のパッチを適用する
 * <p>文字列 <code>str</code> に、バイナリ形式のパッチ <code>patch</code> を適用します。 この関数は、<code>xdiff_string_bdiff()</code> 関数あるいは <code>xdiff_string_rabdiff()</code> そしてそれぞれのファイル版が作成したパッチを受け取ることができます。</p>
 * @param string $str <p>元のバイナリ文字列。</p>
 * @param string $patch <p>バイナリパッチ文字列。</p>
 * @return string <p>パッチ適用後の文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-string-bpatch.php
 * @see xdiff_string_bdiff(), xdiff_string_rabdiff()
 * @since PECL xdiff >= 1.5.0
 */
function xdiff_string_bpatch(string $str, string $patch): string {}

/**
 * 2 つの文字列の unified diff を作成する
 * <p><code>old_data</code> 文字列と <code>new_data</code> 文字列の差分を含む unified diff を作成し、 結果を返します。結果は可読形式となります。 オプションのパラメータ <code>context</code> で、 変更部分の前後にどれだけの行を含めるかを指定します。 パラメータ <code>minimal</code> を true にすると、 できる限り短い長さのパッチファイルを出力します (長い時間がかかります)。</p>
 * @param string $old_data <p>データを含む最初の文字列。"旧" データです。</p>
 * @param string $new_data <p>データを含む 2 番目の文字列。"新" データです。</p>
 * @param int $context <p>diff の結果の前後に含める行の数を指定します。</p>
 * @param bool $minimal <p>このパラメータを <b><code>TRUE</code></b> にすると、結果のファイルが最小になります (非常に時間がかかります)。結果のファイルは可読形式となります。</p>
 * @return string <p>成功した場合はその結果の diff、内部エラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-string-diff.php
 * @see xdiff_string_patch()
 * @since PECL xdiff >= 0.2.0
 */
function xdiff_string_diff(string $old_data, string $new_data, int $context = 3, bool $minimal = false): string {}

/**
 * xdiff_string_bdiff のエイリアス
 * <p>ふたつの文字列のバイナリ diff を作成して結果を返します。 この関数はテキストファイルとバイナリファイルの両方に適用可能です。 できあがったパッチファイルを後で適用するには <code>xdiff_string_bpatch()</code>/<code>xdiff_file_bpatch()</code> を使用します。</p><p>バージョン 1.5.0 以降では、この関数は <code>xdiff_string_bdiff()</code> のエイリアスです。</p>
 * @link http://php.net/manual/ja/function.xdiff-string-diff-binary.php
 * @since PECL xdiff >= 0.2.0
 */
function xdiff_string_diff_binary() {}

/**
 * 3 つの文字列をひとつに統合する
 * <p>3 つの文字列をひとつに結合し、その結果を返します。 <code>old_data</code> が元のバージョンで、 <code>new_data1</code> と <code>new_data2</code> が修正したバージョンとなります。オプションの <code>error</code> を使用すると、結合時に拒否された部分がそこに渡されます。</p>
 * @param string $old_data <p>最初のデータ文字列。"旧" データです。</p>
 * @param string $new_data1 <p>2 番目のデータ文字列。<code>old_data</code> の修正版です。</p>
 * @param string $new_data2 <p>3 番目のデータ文字列。<code>old_data</code> の修正版です。</p>
 * @param string $error <p>指定した場合、パッチを拒否された部分がこの変数に保存されます。</p>
 * @return mixed <p>統合された文字列を返します。内部エラーが発生した場合は <b><code>FALSE</code></b>、 統合された文字列が空の文字列の場合は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-string-merge3.php
 * @see xdiff_file_merge3()
 * @since PECL xdiff >= 0.2.0
 */
function xdiff_string_merge3(string $old_data, string $new_data1, string $new_data2, string &$error = NULL) {}

/**
 * 文字列に unified diff 形式のパッチを適用する
 * <p>ある文字列 <code>str</code> に、unified 形式のパッチ文字列 <code>patch</code> を適用してその結果を返します。 <code>patch</code> は、 <code>xdiff_file_diff()</code>/<code>xdiff_string_diff()</code> 関数で作成した unified diff 形式でなければなりません。 オプションのパラメータ <code>flags</code> で、操作モードを指定します。パッチが拒否された部分については、 もし <code>error</code> を指定していればそこに保存されます。</p>
 * @param string $str <p>元の文字列。</p>
 * @param string $patch <p>unified 形式のパッチ文字列。 <code>xdiff_string_diff()</code> 関数や <code>xdiff_file_diff()</code> 関数、 あるいは互換性のあるツールで作成したものでなければなりません。</p>
 * @param int $flags <p><code>flags</code> は <b><code>XDIFF_PATCH_NORMAL</code></b> (デフォルト。通常のパッチ) あるいは <b><code>XDIFF_PATCH_REVERSE</code></b> (逆パッチ) のいずれかです。</p> <p>バージョン 1.5.0 以降では、バイナリ OR を使用して <b><code>XDIFF_PATCH_IGNORESPACE</code></b> フラグを有効にすることもできます。</p>
 * @param string $error <p>これを指定すると、パッチを拒否された部分がここに保存されます。</p>
 * @return string <p>パッチ適用後の文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-string-patch.php
 * @see xdiff_string_diff()
 * @since PECL xdiff >= 0.2.0
 */
function xdiff_string_patch(string $str, string $patch, int $flags = NULL, string &$error = NULL): string {}

/**
 * xdiff_string_bpatch のエイリアス
 * <p>文字列 <code>str</code> に、バイナリ形式のパッチ <code>patch</code> を適用します。 この関数は、<code>xdiff_string_bdiff()</code> 関数あるいは <code>xdiff_string_rabdiff()</code> そしてそれぞれのファイル版が作成したパッチを受け取ることができます。</p><p>バージョン 1.5.0 以降、この関数は <code>xdiff_string_bpatch()</code> のエイリアスとなりました。</p>
 * @link http://php.net/manual/ja/function.xdiff-string-patch-binary.php
 * @since PECL xdiff >= 0.2.0
 */
function xdiff_string_patch_binary() {}

/**
 * 2 つの文字列のバイナリ diff を、Rabin の polynomial fingerprinting アルゴリズムで作成する
 * <p>ふたつの文字列のバイナリ diff を作成して結果を返します。 この関数と <code>xdiff_string_bdiff()</code> との違いは、 使用するアルゴリズムです。この関数のほうが実行速度が速く、より小さな diff を生成します。 この関数はテキストファイルとバイナリファイルの両方に適用可能です。 できあがったパッチファイルを後で適用するには <code>xdiff_string_bpatch()</code>/<code>xdiff_file_bpatch()</code> を使用します。</p><p>アルゴリズムの違いについての詳細は、 » libxdiff のウェブサイトを参照ください。</p>
 * @param string $old_data <p>バイナリデータを含む最初の文字列。"旧" データです。</p>
 * @param string $new_data <p>バイナリデータを含む 2 番目の文字列。"新" データです。</p>
 * @return string <p>"旧" データと "新" データの差分を含むバイナリ diff 文字列、 あるいは内部エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xdiff-string-rabdiff.php
 * @see xdiff_string_bpatch()
 * @since PECL xdiff >= 1.5.0
 */
function xdiff_string_rabdiff(string $old_data, string $new_data): string {}

/**
 * このフラグは、<code>xdiff_string_patch()</code> 関数および <code>xdiff_file_patch()</code> 関数が元のファイルにパッチを適用して新しいバージョンのファイルを作成することを意味します。 デフォルトの操作モードです。
 */
define('XDIFF_PATCH_NORMAL', null);

/**
 * このフラグは、<code>xdiff_string_patch()</code> 関数および <code>xdiff_file_patch()</code> 関数がパッチを逆に適用し、新しいバージョンから元のバージョンを作成することを意味します。
 */
define('XDIFF_PATCH_REVERSE', null);

