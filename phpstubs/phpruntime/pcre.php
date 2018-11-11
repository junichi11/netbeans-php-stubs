<?php



/**
 * 正規表現による検索と置換を行う
 * <p><b>preg_filter()</b> は <code>preg_replace()</code> と似ていますが、マッチした結果 (を変換したもの) のみを返します。 この関数の挙動の詳細については <code>preg_replace()</code> のドキュメントを参照ください。</p>
 * @param mixed $pattern
 * @param mixed $replacement
 * @param mixed $subject
 * @param int $limit
 * @param int $count
 * @return mixed <p><code>subject</code> が配列の場合は配列を、それ以外の場合は文字列を返します。</p><p>マッチする結果が見つからなかったりエラーが発生したりした場合は、 <code>subject</code> が <code>array</code> なら空の配列を返し、そうでなければ <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.preg-filter.php
 * @see preg_quote(), preg_replace(), preg_replace_callback(), preg_grep(), preg_last_error()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function preg_filter($pattern, $replacement, $subject, int $limit = -1, int &$count = NULL) {}

/**
 * パターンにマッチする配列の要素を返す
 * <p><code>input</code> 配列の要素のうち、 指定した <code>pattern</code> にマッチするものを要素とする配列を返します。</p>
 * @param string $pattern <p>検索するパターンを表す文字列。</p>
 * @param array $input <p>入力の配列。</p>
 * @param int $flags <p><b><code>PREG_GREP_INVERT</code></b> を設定すると、この関数は 与えた <code>pattern</code> にマッチ <i>しない</i> 要素を返します。</p>
 * @return array <p><code>input</code> 配列のキーを使用した配列を返します。</p>
 * @link http://php.net/manual/ja/function.preg-grep.php
 * @see preg_quote(), preg_match_all(), preg_filter(), preg_last_error()
 * @since PHP 4, PHP 5, PHP 7
 */
function preg_grep(string $pattern, array $input, int $flags = 0): array {}

/**
 * 直近の PCRE 正規表現処理のエラーコードを返す
 * <p>直近の PCRE 正規表現処理のエラーコードを返します。</p><p></p><p><b>例1 <b>preg_last_error()</b> の例</b></p><p>上の例の出力は以下となります。</p>
 * @return int <p>以下の定数のいずれかを返します (別のページで説明します)。</p><ul> <li><b><code>PREG_NO_ERROR</code></b></li> <li><b><code>PREG_INTERNAL_ERROR</code></b></li> <li> <b><code>PREG_BACKTRACK_LIMIT_ERROR</code></b> (pcre.backtrack_limit も参照ください)</li> <li> <b><code>PREG_RECURSION_LIMIT_ERROR</code></b> (pcre.recursion_limit も参照ください)</li> <li><b><code>PREG_BAD_UTF8_ERROR</code></b></li> <li> <b><code>PREG_BAD_UTF8_OFFSET_ERROR</code></b> (PHP 5.3.0 以降)</li> <li> <b><code>PREG_JIT_STACKLIMIT_ERROR</code></b> (PHP 7.0.0 以降)</li> </ul>
 * @link http://php.net/manual/ja/function.preg-last-error.php
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function preg_last_error(): int {}

/**
 * 正規表現によるマッチングを行う
 * <p><code>pattern</code> で指定した正規表現により <code>subject</code> を検索します。</p>
 * @param string $pattern <p>検索するパターンを表す文字列。</p>
 * @param string $subject <p>入力文字列。</p>
 * @param array $matches <p><code>matches</code> を指定した場合、検索結果が代入されます。 $matches[0] にはパターン全体にマッチしたテキストが代入され、 $matches[1] には 1 番目のキャプチャ用サブパターンにマッチした 文字列が代入され、といったようになります。</p>
 * @param int $flags <p><code>flags</code> には以下のフラグを指定できます。</p>  <b><code>PREG_OFFSET_CAPTURE</code></b>   <p>このフラグを設定した場合、各マッチに対応する文字列のオフセットも返されます。 これは、<code>matches</code> の値を配列に変更することに注意してください。 その配列のすべての要素は、 オフセット <i>0</i> で一致した文字列、 およびその文字列のオフセット <i>1</i> での <code>subject</code> へのオフセットからなります。</p>   <code> &lt;&#63;php<br>preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);<br>print_r($matches);<br>&#63;&gt;  </code>  <p>上の例の出力は以下となります。</p>  <pre> Array ( [0] =&gt; Array ( [0] =&gt; foobarbaz [1] =&gt; 0 ) [1] =&gt; Array ( [0] =&gt; foo [1] =&gt; 0 ) [2] =&gt; Array ( [0] =&gt; bar [1] =&gt; 3 ) [3] =&gt; Array ( [0] =&gt; baz [1] =&gt; 6 ) ) </pre>
 * @param int $offset <p>通常、検索は対象文字列の先頭から開始されます。 オプションのパラメータ <code>offset</code> を使用して 検索の開始位置を (バイト単位で) 指定することも可能です。</p>  <p><b>注意</b>:</p> <p><code>offset</code> を用いるのと、 <i>substr($subject, $offset)</i> を <b>preg_match()</b>の対象文字列として指定するのとは 等価ではありません。 これは、<code>pattern</code> には、 <i>^</i>, <i>$</i> や <i>(&#63;&lt;=x)</i> のような言明を含めることができるためです。 以下を比べてみてください。</p>   <code> &lt;&#63;php<br>$subject = "abcdef";<br>$pattern = '/^def/';<br>preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);<br>print_r($matches);<br>&#63;&gt;  </code>  <p>上の例の出力は以下となります。</p>  <pre> Array ( ) </pre>  <p>一方、この例を見てください。</p>  <code> &lt;&#63;php<br>$subject = "abcdef";<br>$pattern = '/^def/';<br>preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);<br>print_r($matches);<br>&#63;&gt;  </code>  <p>出力は以下のようになります。</p>  <pre> Array ( [0] =&gt; Array ( [0] =&gt; def [1] =&gt; 0 ) ) </pre>
 * @return int <p><b>preg_match()</b> は、<code>pattern</code> が指定した <code>subject</code> にマッチした場合に 1 を返します。 マッチしなかった場合は 0、エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.preg-match.php
 * @see preg_quote(), preg_match_all(), preg_replace(), preg_split(), preg_last_error()
 * @since PHP 4, PHP 5, PHP 7
 */
function preg_match(string $pattern, string $subject, array &$matches = NULL, int $flags = 0, int $offset = 0): int {}

/**
 * 繰り返し正規表現検索を行う
 * <p><code>subject</code> を検索し、 <code>pattern</code> に指定した正規表現にマッチした すべての文字列を、<code>flags</code> で指定した 順番で、<code>matches</code> に代入します。</p><p>正規表現にマッチすると、そのマッチした文字列の後から 検索が続行されます。</p>
 * @param string $pattern <p>検索するパターンを表す文字列。</p>
 * @param string $subject <p>入力文字列。</p>
 * @param array $matches <p>マッチしたすべての内容を含む、 <code>flags</code> で指定した形式の多次元配列。</p>
 * @param int $flags <p>以下のフラグの組み合わせ (<b><code>PREG_PATTERN_ORDER</code></b> を <b><code>PREG_SET_ORDER</code></b> と組み合わせて使用することは 無意味ですので注意してください)。</p>  <b><code>PREG_PATTERN_ORDER</code></b>   <p>$matches[0] はパターン全体にマッチした文字列の配列、 $matches[1] は第 1 のキャプチャ用サブパターンにマッチした文字列の配列、 といった順番となります。</p> <p></p>   <code> &lt;&#63;php<br>preg_match_all("|&lt;[^&gt;]+&gt;(.&#42;)&lt;/[^&gt;]+&gt;|U",<br>    "&lt;b&gt;example: &lt;/b&gt;&lt;div align=left&gt;this is a test&lt;/div&gt;",<br>    $out, PREG_PATTERN_ORDER);<br>echo $out[0][0] . ", " . $out[0][1] . "\n";<br>echo $out[1][0] . ", " . $out[1][1] . "\n";<br>&#63;&gt;  </code>  <p>上の例の出力は以下となります。</p>  <pre> &lt;b&gt;example: &lt;/b&gt;, &lt;div align=left&gt;this is a test&lt;/div&gt; example: , this is a test </pre>  <p>$out[0] はパターン全体にマッチした文字列の配列を有しており、 $out[1] はタグで囲まれた文字列の配列を有しています。</p>  <p>パターンに名前付きサブパターンが含まれる場合は、$matches にはサブパターン名のキーも含まれるようになります。</p> <p>サブパターンの名前が重複している場合は、いちばん右側のサブパターンだけが $matches[NAME] に格納されます。</p>   <code> &lt;&#63;php<br>preg_match_all(<br>    '/(&#63;J)(&#63;&lt;match&gt;foo)|(&#63;&lt;match&gt;bar)/',<br>    'foo bar',<br>    $matches,<br>    PREG_PATTERN_ORDER<br>);<br>print_r($matches['match']);<br>&#63;&gt;  </code>  <p>上の例の出力は以下となります。</p>  <pre> Array ( [0] =&gt; [1] =&gt; bar ) </pre>     <b><code>PREG_SET_ORDER</code></b>   <p>$matches[0] は 1 回目のマッチングでキャプチャした値の配列、 $matches[1] は 2 回目のマッチングでキャプチャした値の配列、 といった順序となります。</p>   <code> &lt;&#63;php<br>preg_match_all("|&lt;[^&gt;]+&gt;(.&#42;)&lt;/[^&gt;]+&gt;|U",<br>    "&lt;b&gt;example: &lt;/b&gt;&lt;div align=\"left\"&gt;this is a test&lt;/div&gt;",<br>    $out, PREG_SET_ORDER);<br>echo $out[0][0] . ", " . $out[0][1] . "\n";<br>echo $out[1][0] . ", " . $out[1][1] . "\n";<br>&#63;&gt;  </code>  <p>上の例の出力は以下となります。</p>  <pre> &lt;b&gt;example: &lt;/b&gt;, example: &lt;div align="left"&gt;this is a test&lt;/div&gt;, this is a test </pre>     <b><code>PREG_OFFSET_CAPTURE</code></b>   <p>このフラグを設定した場合、各マッチに対応する文字列のオフセットも返されます。 これは、<code>matches</code> の値を配列の配列に変更することに注意してください。 その配列のすべての要素は、 オフセット <i>0</i> で一致した文字列 およびその文字列のオフセット <i>1</i> での <code>subject</code> へのオフセットからなります。</p>   <code> &lt;&#63;php<br>preg_match_all('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);<br>print_r($matches);<br>&#63;&gt;  </code>  <p>上の例の出力は以下となります。</p>  <pre> Array ( [0] =&gt; Array ( [0] =&gt; Array ( [0] =&gt; foobarbaz [1] =&gt; 0 ) ) [1] =&gt; Array ( [0] =&gt; Array ( [0] =&gt; foo [1] =&gt; 0 ) ) [2] =&gt; Array ( [0] =&gt; Array ( [0] =&gt; bar [1] =&gt; 3 ) ) [3] =&gt; Array ( [0] =&gt; Array ( [0] =&gt; baz [1] =&gt; 6 ) ) ) </pre>     <p><code>flags</code> を指定しない場合は、 <b><code>PREG_PATTERN_ORDER</code></b> が指定されたことになります。</p>
 * @param int $offset <p>通常、検索は対象文字列の先頭から開始されます。 オプションのパラメータ <code>offset</code> を使用して 検索の開始位置を (バイト単位で) 指定することも可能です。</p>  <p><b>注意</b>:</p> <p><code>offset</code> を用いるのと、 <i>substr($subject, $offset)</i> を <b>preg_match_all()</b>の対象文字列として指定するのとは 等価ではありません。 これは、<code>pattern</code> には、 <i>^</i>, <i>$</i> や <i>(&#63;&lt;=x)</i> のような言明を含めることができるためです。 これに関する例については、 <code>preg_match()</code> を参照してください。</p>
 * @return int <p>パターンがマッチした総数を返します（ゼロとなる可能性もあります）。 または、エラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.preg-match-all.php
 * @see preg_quote(), preg_match(), preg_replace(), preg_split(), preg_last_error()
 * @since PHP 4, PHP 5, PHP 7
 */
function preg_match_all(string $pattern, string $subject, array &$matches = NULL, int $flags = PREG_PATTERN_ORDER, int $offset = 0): int {}

/**
 * 正規表現文字をクオートする
 * <p><b>preg_quote()</b> は、<code>str</code> を引数とし、正規表現構文の特殊文字の前にバックスラッシュを挿入します。 この関数は、実行時に生成される文字列をパターンとしてマッチングを行う必要があり、 その文字列には正規表現の特殊文字が含まれているかも知れない場合に有用です。</p><p>正規表現の特殊文字は、次のものです。 <i>. \ + &#42; &#63; [ ^ ] $ ( ) { } = ! &lt; &gt; | : -</i></p><p><i>/</i> は正規表現の特殊文字ではないことに注意しましょう。</p><p><b>注意</b>:</p><p><b>preg_quote()</b> は、 <code>preg_replace()</code> などにおける $replacement 文字列に使うことを想定したものではありません。</p>
 * @param string $str <p>入力文字列。</p>
 * @param string $delimiter <p>オプションの <code>delimiter</code> を指定すると、 ここで指定した文字もエスケープされます。これは、PCRE 関数が使用する デリミタをエスケープする場合に便利です。<i>/</i> がデリミタとしては 最も一般的に使用されています。</p>
 * @return string <p>クォートされた (エスケープした) 文字列を返します。</p>
 * @link http://php.net/manual/ja/function.preg-quote.php
 * @see escapeshellcmd()
 * @since PHP 4, PHP 5, PHP 7
 */
function preg_quote(string $str, string $delimiter = NULL): string {}

/**
 * 正規表現検索および置換を行う
 * <p><code>subject</code> に関して <code>pattern</code> を用いて検索を行い、 <code>replacement</code> に置換します。</p>
 * @param mixed $pattern <p>検索を行うパターン。文字列もしくは配列とすることができます。</p> <p>PCRE 修飾子 も使えます。</p>
 * @param mixed $replacement <p>置換を行う文字列もしくは文字列の配列。 この引数が文字列で、<code>pattern</code> 引数が配列の場合、 すべてのパターンがこの文字列に置換されます。 <code>pattern</code> および <code>replacement</code> のいずれもが配列の場合、各 <code>pattern</code> は 対応する <code>replacement</code> に置換されます。 もし、<code>replacement</code> 配列の要素の数が <code>pattern</code> 配列よりも少ない場合は、余った <code>pattern</code> は 空文字に置換されます。</p> <p><code>replacement</code> では、 <i>\\n</i> 形式または <i>$n</i> 形式で参照を指定することができます。 後者の形式の方が好ましい形式です。各参照は、n 番目のキャプチャ用サブパターンにマッチしたテキストにより置換されます。 n は 0 から 99 までとすることができ、 <i>\\0</i> または <i>$0</i> は パターン全体にマッチするテキストを参照します。キャプチャ用サブパターンの番号 については、その左括弧が左から右に（1から）カウントされます。 置換文字でバックスラッシュを使用する場合は、二重化する必要があります (PHP の文字列 <i>"\\\\"</i> となります)。</p> <p>後方参照の直後に他の数字が続くような置換 (replacement) パターンを 使用する場合（すなわち、マッチしたパターンの直後に数字リテラルを置く 場合）、後方参照を行うために通常の <i>\\1</i> 表記を 使用することができません。例えば、<i>\\11</i>　は、 後方参照 <i>\\1</i> の後にリテラル <i>1</i> が続くのか、後方参照 <i>\\11</i> で その後には何も続かないのかが不明のため、 <b>preg_replace()</b> を混乱させる可能性があります。 この場合、解決策は、<i>${1}1</i> を使用することです。 こうすることで、<i>1</i> はリテラルとなり、後方参照 <i>$1</i> を明確に作成できます。</p> <p>非推奨の <i>e</i> 修飾子を使用する際に、 この関数は後方参照を置換する文字列のうちの特定の文字 (具体的には <i>'</i>、<i>"</i>、 <i>\</i> および NULL) をエスケープします。 これは、後方参照をシングルクォートやダブルクォートを共用した場合 (たとえば <i>'strlen(\'$1\')+strlen("$2")'</i>) に構文エラーが発生しないようにするためのものです。 PHP の 文字列構文 を意識し、 文字列がどのように解釈されるのかを正確に知っておくようにしましょう。</p>
 * @param mixed $subject <p>検索・置換対象となる文字列もしくは文字列の配列</p> <p><code>subject</code> が配列の場合、検索と置換は <code>subject</code> の各要素に対して行われ、返り値も配列となります。</p>
 * @param int $limit <p><code>subject</code> 文字列において、各パターンによる 置換を行う最大回数。デフォルトは <i>-1</i> (制限無し)。</p>
 * @param int $count <p>この引数が指定されると、置換回数が渡されます。</p>
 * @return mixed <p><b>preg_replace()</b> は、 <code>subject</code> 引数が配列の場合は配列を、 その他の場合は文字列を返します。</p><p>パターンがマッチした場合、〔置換が行われた〕新しい <code>subject</code> を返します。マッチしなかった場合、<code>subject</code> をそのまま返します。エラーが発生した場合、<b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.preg-replace.php
 * @see preg_quote(), preg_filter(), preg_match(), preg_replace_callback(), preg_split(), preg_last_error()
 * @since PHP 4, PHP 5, PHP 7
 */
function preg_replace($pattern, $replacement, $subject, int $limit = -1, int &$count = NULL) {}

/**
 * 正規表現検索を行い、コールバック関数を使用して置換を行う
 * <p>この関数の動作は、ほぼ <code>preg_replace()</code> と同じですが、 <code>replacement</code> の代わりに <code>callback</code> を指定するところが異なります。</p>
 * @param mixed $pattern <p>検索するパターン。 文字列あるいは文字列の配列のいずれかとなります。</p>
 * @param callable $callback <p>このコールバック関数は、検索対象文字列でマッチした要素の配列が指定されて コールされます。このコールバック関数は、置換後の文字列を返す必要があります。 コールバックのシグネチャは、次のとおりです。</p> <p></p> string handler ( array <code>$matches</code> ) <p><b>preg_replace_callback()</b> 用の <code>callback</code> 関数が、 ひとつの場所だけで必要となることがあります。 そんな場合は、 無名関数 を使って宣言した無名関数を <b>preg_replace_callback()</b> のコール時に使用します。 このようにすることにより、コールに関するすべての情報を 1 ヶ所に集め、 他の場所で使用されないコールバック関数名で関数の名前空間を 汚染しないようにすることができます。</p> <p></p> <p><b>例1 <b>preg_replace_callback()</b> と無名関数 </b></p>  <code> &lt;&#63;php<br>/&#42; Unix 方式のコマンドラインフィルタです。<br> &#42; 段落の冒頭の大文字を、小文字に変換します。&#42;/<br>$fp = fopen("php://stdin", "r") or die("標準入力から読み込めません");<br>while (!feof($fp)) {<br>    $line = fgets($fp);<br>    $line = preg_replace_callback(<br>        '|&lt;p&gt;\s&#42;\w|',<br>        function ($matches) {<br>            return strtolower($matches[0]);<br>        },<br>        $line<br>    );<br>    echo $line;<br>}<br>fclose($fp);<br>&#63;&gt;  </code>
 * @param mixed $subject <p>文字列あるいは文字列の配列で、 検索および置換の対象となる文字列を指定します。</p>
 * @param int $limit <p><code>subject</code> 文字列における 各パターンの最大置換回数。デフォルトは <i>-1</i> (無制限) です。</p>
 * @param int $count <p>指定した場合は、置換を行った回数がここに格納されます。</p>
 * @return mixed <p><b>preg_replace_callback()</b> は、 <code>subject</code> が配列の場合には配列を、 それ以外の場合は文字列を返します。 エラー時の返り値は <b><code>NULL</code></b> となります。</p><p>マッチするものが見つかった場合は新しい subject を返し、それ以外の場合はもとの <code>subject</code> をそのまま返します。</p>
 * @link http://php.net/manual/ja/function.preg-replace-callback.php
 * @see preg_replace_callback_array(), preg_quote(), preg_replace(), preg_last_error()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function preg_replace_callback($pattern, callable $callback, $subject, int $limit = -1, int &$count = NULL) {}

/**
 * 正規表現検索を行い、コールバック関数を使用して置換を行う
 * <p>この関数の動作は、<code>preg_replace_callback()</code> に似ていますが、 コールバック関数が、パターン単位ペースで実行されるところが異なります。</p>
 * @param array $patterns_and_callbacks <p>パターンをキーとし、コールバック関数を値とする連想配列です。</p>
 * @param mixed $subject <p>文字列あるいは文字列の配列で、 検索および置換の対象となる文字列を指定します。</p>
 * @param int $limit <p><code>subject</code> 文字列における 各パターンの最大置換回数。デフォルトは <i>-1</i> (無制限) です。</p>
 * @param int $count <p>指定した場合は、置換を行った回数がここに格納されます。</p>
 * @return mixed <p><b>preg_replace_callback_array()</b> は、 <code>subject</code> が配列の場合には配列を、 それ以外の場合は文字列を返します。 エラー時の返り値は <b><code>NULL</code></b> となります。</p><p>マッチするものが見つかった場合は新しい subject を返し、それ以外の場合はもとの <code>subject</code> をそのまま返します。</p>
 * @link http://php.net/manual/ja/function.preg-replace-callback-array.php
 * @see preg_replace_callback(), preg_quote(), preg_replace(), preg_last_error()
 * @since PHP 7
 */
function preg_replace_callback_array(array $patterns_and_callbacks, $subject, int $limit = -1, int &$count = NULL) {}

/**
 * 正規表現で文字列を分割する
 * <p>指定した文字列を、正規表現で分割します。</p>
 * @param string $pattern <p>検索するパターンを表す文字列。</p>
 * @param string $subject <p>入力文字列。</p>
 * @param int $limit <p>これを指定した場合、最大 <code>limit</code> 個の部分文字列を返します。 残りの文字列は、最後の部分文字列に含めて返されます。 <code>limit</code> が -1 あるいは 0 の場合は「制限が無い」ことを意味します。 制限を指定せずに <code>flags</code> パラメータを指定したい場合などに <b><code>NULL</code></b> を使用します。</p>
 * @param int $flags <p><code>flags</code> は、次のフラグを組み合わせたものとする （ビット和演算子 <i>|</i> で組み合わせる）ことが可能です。</p>  <b><code>PREG_SPLIT_NO_EMPTY</code></b>    このフラグを設定すると、空文字列でないものだけが <b>preg_split()</b> により返されます。    <b><code>PREG_SPLIT_DELIM_CAPTURE</code></b>    このフラグを設定すると、文字列分割用のパターン中の カッコによるサブパターンでキャプチャされた値も同時に返されます。    <b><code>PREG_SPLIT_OFFSET_CAPTURE</code></b>   <p>このフラグを設定した場合、各マッチに対応する文字列のオフセットも返されます。 これにより、返り値は配列となり、配列の要素 <i>0</i> はマッチした文字列、 要素 <i>1</i> は <code>subject</code> におけるマッチした文字列のオフセット値となることに 注意してください。</p>
 * @return array <p><code>pattern</code> にマッチした境界で分割した <code>subject</code> の部分文字列の配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.preg-split.php
 * @see preg_quote(), implode(), preg_match(), preg_match_all(), preg_replace(), preg_last_error()
 * @since PHP 4, PHP 5, PHP 7
 */
function preg_split(string $pattern, string $subject, int $limit = -1, int $flags = 0): array {}

/**
 * 5.2.4
 */
define('PCRE_VERSION', '8.39 2016-06-14');

/**
 * 5.2.0
 */
define('PREG_BACKTRACK_LIMIT_ERROR', 2);

/**
 * 5.2.0
 */
define('PREG_BAD_UTF8_ERROR', 4);

/**
 * 5.3.0
 */
define('PREG_BAD_UTF8_OFFSET_ERROR', 5);

/**
 * 5.2.0
 */
define('PREG_INTERNAL_ERROR', 1);

/**
 * 7.0.0
 */
define('PREG_JIT_STACKLIMIT_ERROR', 6);

/**
 * 5.2.0
 */
define('PREG_NO_ERROR', 0);

/**
 * 4.3.0
 */
define('PREG_OFFSET_CAPTURE', 256);

/**
 * $matches[0] はパターン全体にマッチした文字列の配列、 $matches[1] は第 1 のキャプチャ用サブパターンにマッチした文字列の配列、 といったように結果の順序を指定します。 このフラグは、<code>preg_match_all()</code> でのみ使用されます。
 */
define('PREG_PATTERN_ORDER', 1);

/**
 * 5.2.0
 */
define('PREG_RECURSION_LIMIT_ERROR', 3);

/**
 * $matches[0] は 1 回目のマッチングでキャプチャした値の配列、 $matches[1] は 2 回目のマッチングでキャプチャした値の配列、 といったように結果の順序を指定します。 このフラグは、<code>preg_match_all()</code> でのみ使用されます。
 */
define('PREG_SET_ORDER', 2);

/**
 * 4.0.5
 */
define('PREG_SPLIT_DELIM_CAPTURE', 2);

/**
 * このフラグは、<code>preg_split()</code> が、空文字列でないものだけ を返すようにします。
 */
define('PREG_SPLIT_NO_EMPTY', 1);

/**
 * 4.3.0
 */
define('PREG_SPLIT_OFFSET_CAPTURE', 4);

/**
 * 7.2.0
 */
define('PREG_UNMATCHED_AS_NULL', 512);

