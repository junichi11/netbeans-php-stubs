<?php



/**
 * 正規表現によるマッチングを行う
 * <p><code>pattern</code> で指定した正規表現 により、大文字小文字を区別して <code>string</code> を検索します。</p>
 * @param string $pattern <p>大文字小文字を区別する正規表現。</p>
 * @param string $string <p>入力文字列。</p>
 * @param array $regs <p><code>pattern</code> の括弧でくくられた部分文字列に マッチし、かつこの関数が 3 番目の引数 <code>regs</code> を 指定してコールされた場合、マッチした部分が配列 <code>regs</code> に格納されます。</p> <p>$regs[1] は最初の左括弧が始まる部分文字列を保持、 $regs[2] は二番目の左括弧が始まる部分文字列を保持、 といったようになっています。$regs[0] は マッチした文字列全体のコピーを保持しています。</p>
 * @return int <p><code>string</code> の中で <code>pattern</code> がマッチした場合にはマッチした文字列の長さを返し、マッチしなかった場合 またはエラーとなった場合は <b><code>FALSE</code></b> を返します。</p><p>オプションのパラメータ <code>regs</code> が渡されなかったり マッチした文字列の長さが <i>0</i> だったりした場合は、この関数は <i>1</i> を返します。</p>
 * @link http://php.net/manual/ja/function.ereg.php
 * @see eregi(), ereg_replace(), eregi_replace(), preg_match(), strpos(), strstr(), quotemeta()
 * @since PHP 4, PHP 5
 */
function ereg(string $pattern, string $string, array &$regs = NULL): int {}

/**
 * 正規表現による置換を行う
 * <p>この関数は、<code>string</code> をスキャンして <code>pattern</code> にマッチするものを探し、 マッチしたテキストを <code>replacement</code> で置換します。</p>
 * @param string $pattern <p>POSIX 拡張正規表現。</p>
 * @param string $replacement <p><code>pattern</code> の中に括弧でくくられた部分 文字列が含まれている場合、<code>replacement</code> の中に <i>\数字</i> のような部分文字列を埋め込むこともできます。この部分は、 「数字」番目の括弧でくくられた部分文字列にマッチする文字列に 置き換えられます。また、<i>\0</i> は文字列全体を 指します。9 個までの部分文字列を使うことができます。括弧は 入れ子になっていても構いません。この場合は開き括弧 '(' が 最大 9 個まで使用可能です。</p>
 * @param string $string <p>入力文字列。</p>
 * @return string <p>置換後の文字列を返します。 マッチしなかった場合は、元の文字列をそのまま返します。</p>
 * @link http://php.net/manual/ja/function.ereg-replace.php
 * @see ereg(), eregi(), eregi_replace(), str_replace(), preg_replace(), quotemeta()
 * @since PHP 4, PHP 5
 */
function ereg_replace(string $pattern, string $replacement, string $string): string {}

/**
 * 大文字小文字を区別せずに正規表現によるマッチングを行う
 * <p>この関数は、アルファベット文字をマッチングさせる際に 大文字小文字の区別をしないこと以外は <code>ereg()</code> と同じです。</p>
 * @param string $pattern <p>大文字小文字を区別しない正規表現。</p>
 * @param string $string <p>入力文字列。</p>
 * @param array $regs <p><code>pattern</code> の括弧でくくられた部分文字列に マッチし、かつこの関数が 3 番目の引数 <code>regs</code> を 指定してコールされた場合、マッチした部分が配列 <code>regs</code> に格納されます。</p> <p>$regs[1] は最初の左括弧が始まる部分文字列を保持、 $regs[2] は二番目の左括弧が始まる部分文字列を保持、 といったようになっています。$regs[0] は マッチした文字列全体のコピーを保持しています。</p>
 * @return int <p><code>string</code> の中で <code>pattern</code> がマッチした場合にはマッチした文字列の長さを返し、マッチしなかった場合 またはエラーとなった場合は <b><code>FALSE</code></b> を返します。</p><p>オプションのパラメータ <code>regs</code> が渡されなかったり マッチした文字列の長さが <i>0</i> だったりした場合は、この関数は <i>1</i> を返します。</p>
 * @link http://php.net/manual/ja/function.eregi.php
 * @see ereg(), ereg_replace(), eregi_replace(), preg_match(), stripos(), stristr(), quotemeta()
 * @since PHP 4, PHP 5
 */
function eregi(string $pattern, string $string, array &$regs = NULL): int {}

/**
 * 大文字小文字を区別せずに正規表現による置換を行う
 * <p>この関数は、アルファベット文字をマッチングさせる際に大文字 小文字の区別をしないこと以外は <code>ereg_replace()</code> と同じです。</p>
 * @param string $pattern <p>POSIX 拡張正規表現。</p>
 * @param string $replacement <p><code>pattern</code> の中に括弧でくくられた部分 文字列が含まれている場合、<code>replacement</code> の中に <i>\数字</i> のような部分文字列を埋め込むこともできます。この部分は、 「数字」番目の括弧でくくられた部分文字列にマッチする文字列に 置き換えられます。また、<i>\0</i> は文字列全体を 指します。9 個までの部分文字列を使うことができます。括弧は 入れ子になっていても構いません。この場合は開き括弧 '(' が 最大 9 個まで使用可能です。</p>
 * @param string $string <p>入力文字列。</p>
 * @return string <p>置換後の文字列を返します。 マッチしなかった場合は、元の文字列をそのまま返します。</p>
 * @link http://php.net/manual/ja/function.eregi-replace.php
 * @see ereg(), eregi(), ereg_replace(), preg_replace(), quotemeta()
 * @since PHP 4, PHP 5
 */
function eregi_replace(string $pattern, string $replacement, string $string): string {}

/**
 * 正規表現により文字列を分割し、配列に格納する
 * <p><code>string</code> を、正規表現によって配列に分割します。</p>
 * @param string $pattern <p>大文字小文字を区別する正規表現。</p> <p>正規表現で特殊文字とみなされる文字を分割したい場合、それらを まずエスケープする必要があります。<b>split()</b> (または他の正規表現関数に関して)の動作が何か変であると感じたならば、 PHP 配布ファイルの regex/ サブディレクトリにあるファイル regex.7 を読んでください。このファイルは man ページ形式となっており、読むには <b>man /usr/local/src/regex/regex.7</b> のようにします。</p>
 * @param string $string <p>入力文字列。</p>
 * @param int $limit <p><code>limit</code> が指定された場合、返される配列には 最大 <code>limit</code> の要素が含まれます。この場合、 最後の要素には <code>string</code> の残りの部分が全て 入っています。</p>
 * @return array <p>文字列の配列を返します。配列の各要素は、大文字小文字を区別する正規表現 <code>pattern</code> により区切られた <code>string</code> 中の部分文字列です。</p><p><code>pattern</code> が n 回 現れる場合、返される配列には、 <i>n+1</i> 個のアイテムが 含まれます。例えば、<code>pattern</code> が現れない場合、 1 個の要素のみを有する配列が返されます。もちろん、これは エラーを生じた場合、<b>split()</b> は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.split.php
 * @see preg_split(), spliti(), str_split(), explode(), implode(), chunk_split(), wordwrap()
 * @since PHP 4, PHP 5
 */
function split(string $pattern, string $string, int $limit = -1): array {}

/**
 * 大文字小文字を区別しない正規表現により文字列を分割し、配列に格納する
 * <p><code>string</code> を、正規表現によって配列に分割します。</p><p>この関数は、アルファベット文字にマッチさせる際に大文字小文字を 区別しないこと以外は、<code>split()</code> と同じです。</p>
 * @param string $pattern <p>大文字小文字を区別しない正規表現。</p> <p>正規表現で特殊文字とみなされる文字を分割したい場合、それらを まずエスケープする必要があります。<b>spliti()</b> (または他の正規表現関数に関して)の動作が何か変であると感じたならば、 PHP 配布ファイルの regex/ サブディレクトリにあるファイル regex.7 を読んでください。このファイルは man ページ形式となっており、読むには <b>man /usr/local/src/regex/regex.7</b> のようにします。</p>
 * @param string $string <p>入力文字列。</p>
 * @param int $limit <p><code>limit</code> が指定された場合、返される配列には 最大 <code>limit</code> の要素が含まれます。この場合、 最後の要素には <code>string</code> の残りの部分が全て 入っています。</p>
 * @return array <p>文字列の配列を返します。配列の各要素は、大文字小文字を区別する正規表現 <code>pattern</code> により区切られた <code>string</code> 中の部分文字列です。</p><p><code>pattern</code> が n 回 現れる場合、返される配列には、 <i>n+1</i> 個のアイテムが 含まれます。例えば、<code>pattern</code> が現れない場合、 1 個の要素のみを有する配列が返されます。もちろん、これは <code>string</code> が空の場合でも有効です。 エラーを生じた場合、<b>spliti()</b> は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.spliti.php
 * @see preg_split(), split(), explode(), implode()
 * @since PHP 4 >= 4.0.1, PHP 5
 */
function spliti(string $pattern, string $string, int $limit = -1): array {}

/**
 * 大文字小文字を区別しないマッチングのための正規表現を作成する
 * <p>大文字小文字を区別しないマッチングのための正規表現を作成します。</p>
 * @param string $string <p>入力文字列。</p>
 * @return string <p>大文字小文字を区別せず <code>string</code>にマッチする、 有効な正規表現式を返します。この表現式は、<code>string </code> の中の個々のアルファベットを '[]' 表現に変換したものです。 この '[]' 表現は、大文字と小文字がそれぞれ含まれます。 アルファベット以外の文字の場合は、元々の文字がそのまま残ります。</p>
 * @link http://php.net/manual/ja/function.sql-regcase.php
 * @since PHP 4, PHP 5
 */
function sql_regcase(string $string): string {}

