<?php

// Start of pcre v.7.0.19

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 正規表現によるマッチングを行う
 * @link http://php.net/manual/ja/function.preg-match.php
 * @param string $pattern <p>
 * 検索するパターンを表す文字列。
 * </p>
 * @param string $subject <p>
 * 入力文字列。
 * </p>
 * @param array $matches [optional] <p>
 * <i>matches</i> を指定した場合、検索結果が代入されます。
 * $matches[0] にはパターン全体にマッチしたテキストが代入され、
 * $matches[1] には 1 番目のキャプチャ用サブパターンにマッチした
 * 文字列が代入され、といったようになります。
 * </p>
 * @param int $flags [optional] <p>
 * <i>flags</i> には以下のフラグを指定できます。
 * <b>PREG_OFFSET_CAPTURE</b>
 * <p>
 * このフラグを設定した場合、各マッチに対応する文字列のオフセットも返されます。
 * これは、<i>matches</i> の値を配列に変更することに注意してください。
 * その配列のすべての要素は、
 * オフセット 0 で一致した文字列、
 * およびその文字列のオフセット 1 での
 * <i>subject</i> へのオフセットからなります。
 * <code>
 * preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
 * print_r($matches);
 * </code>
 * 上の例の出力は以下となります。</p>
 * <pre>
 * Array
 * (
 * [0] => Array
 * (
 * [0] => foobarbaz
 * [1] => 0
 * )
 * [1] => Array
 * (
 * [0] => foo
 * [1] => 0
 * )
 * [2] => Array
 * (
 * [0] => bar
 * [1] => 3
 * )
 * [3] => Array
 * (
 * [0] => baz
 * [1] => 6
 * )
 * )
 * </pre>
 * </p>
 * @param int $offset [optional] <p>
 * 通常、検索は対象文字列の先頭から開始されます。
 * オプションのパラメータ <i>offset</i> を使用して
 * 検索の開始位置を (バイト単位で) 指定することも可能です。
 * </p>
 * <p>
 * <i>offset</i> を用いるのと、
 * substr($subject, $offset) を
 * <b>preg_match</b>の対象文字列として指定するのとは
 * 等価ではありません。
 * これは、<i>pattern</i> には、
 * ^, $ や
 * (?&lt;=x) のような言明を含めることができるためです。
 * 以下を比べてみてください。
 * <code>
 * $subject = "abcdef";
 * $pattern = '/^def/';
 * preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
 * print_r($matches);
 * </code>
 * 上の例の出力は以下となります。</p>
 * <pre>
 * Array
 * (
 * )
 * </pre>
 * <p>
 * 一方、この例を見てください。
 * </p>
 * <code>
 * $subject = "abcdef";
 * $pattern = '/^def/';
 * preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);
 * print_r($matches);
 * </code>
 * <p>
 * 出力は以下のようになります。
 * </p>
 * <pre>
 * Array
 * (
 * [0] => Array
 * (
 * [0] => def
 * [1] => 0
 * )
 * )
 * </pre>
 * </p>
 * @return int <b>preg_match</b> は、<i>pattern</i>
 * が指定した <i>subject</i> にマッチした場合に 1 を返します。
 * マッチしなかった場合は 0、エラーが発生した場合は <b>FALSE</b> を返します。
 */
function preg_match(string $pattern, string $subject, array &$matches = null, int $flags = 0, int $offset = 0): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 繰り返し正規表現検索を行う
 * @link http://php.net/manual/ja/function.preg-match-all.php
 * @param string $pattern <p>
 * 検索するパターンを表す文字列。
 * </p>
 * @param string $subject <p>
 * 入力文字列。
 * </p>
 * @param array $matches [optional] <p>
 * 通常、検索は対象文字列の先頭から開始されます。
 * オプションのパラメータ <i>offset</i> を使用して
 * 検索の開始位置を (バイト単位で) 指定することも可能です。
 * </p>
 * <p>
 * <i>offset</i> を用いるのと、
 * substr($subject, $offset) を
 * <b>preg_match_all</b>の対象文字列として指定するのとは
 * 等価ではありません。
 * これは、<i>pattern</i> には、
 * ^, $ や
 * (?&lt;=x) のような言明を含めることができるためです。
 * これに関する例については、
 * <b>preg_match</b> を参照してください。
 * </p>
 * @param int $flags [optional] <p>
 * 以下のフラグの組み合わせ
 * (<b>PREG_PATTERN_ORDER</b> を
 * <b>PREG_SET_ORDER</b> と組み合わせて使用することは
 * 無意味ですので注意してください)。
 * <b>PREG_PATTERN_ORDER</b>
 * <p>
 * $matches[0] はパターン全体にマッチした文字列の配列、
 * $matches[1] は第 1 のキャプチャ用サブパターンにマッチした文字列の配列、
 * といった順番となります。
 * </p>
 * <p>
 * <code>
 * preg_match_all("|]+>(.*)]+>|U",
 * "example: this is a test",
 * $out, PREG_PATTERN_ORDER);
 * echo $out[0][0] . ", " . $out[0][1] . "\n";
 * echo $out[1][0] . ", " . $out[1][1] . "\n";
 * </code>
 * 上の例の出力は以下となります。</p>
 * <pre>
 * example: , this is a test
 * example: , this is a test
 * </pre>
 * <p>
 * $out[0] はパターン全体にマッチした文字列の配列を有しており、
 * $out[1] はタグで囲まれた文字列の配列を有しています。
 * </p>
 * </p>
 * <p>
 * パターンに名前付きサブパターンが含まれる場合は、$matches
 * にはサブパターン名のキーも含まれるようになります。
 * </p>
 * <p>
 * サブパターンの名前が重複している場合は、いちばん右側のサブパターンだけが
 * $matches[NAME] に格納されます。
 * <code>
 * preg_match_all(
 * '/(?J)(?foo)|(?bar)/',
 * 'foo bar',
 * $matches,
 * PREG_PATTERN_ORDER
 * );
 * print_r($matches['match']);
 * </code>
 * 上の例の出力は以下となります。</p>
 * <pre>
 * Array
 * (
 * [0] =>
 * [1] => bar
 * )
 * </pre>
 * </p>
 * @param int $offset [optional]
 * @return int パターンがマッチした総数を返します（ゼロとなる可能性もあります）。
 * または、エラーが発生した場合に <b>FALSE</b> を返します。
 */
function preg_match_all(string $pattern, string $subject, array &$matches = null, int $flags = PREG_PATTERN_ORDER, int $offset = 0): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 正規表現検索および置換を行う
 * @link http://php.net/manual/ja/function.preg-replace.php
 * @param mixed $pattern <p>
 * 検索を行うパターン。文字列もしくは配列とすることができます。
 * </p>
 * <p>
 * PCRE 修飾子
 * も使えます。
 * </p>
 * @param mixed $replacement <p>
 * 置換を行う文字列もしくは文字列の配列。
 * この引数が文字列で、<i>pattern</i> 引数が配列の場合、
 * すべてのパターンがこの文字列に置換されます。
 * <i>pattern</i> および <i>replacement</i>
 * のいずれもが配列の場合、各 <i>pattern</i> は
 * 対応する <i>replacement</i> に置換されます。
 * もし、<i>replacement</i> 配列の要素の数が <i>pattern</i>
 * 配列よりも少ない場合は、余った <i>pattern</i> は
 * 空文字に置換されます。
 * </p>
 * <p>
 * <i>replacement</i> では、
 * \\n 形式または
 * $n
 * 形式で参照を指定することができます。
 * 後者の形式の方が好ましい形式です。各参照は、n
 * 番目のキャプチャ用サブパターンにマッチしたテキストにより置換されます。
 * n は 0 から 99 までとすることができ、
 * \\0 または $0 は
 * パターン全体にマッチするテキストを参照します。キャプチャ用サブパターンの番号
 * については、その左括弧が左から右に（1から）カウントされます。
 * 置換文字でバックスラッシュを使用する場合は、二重化する必要があります
 * (PHP の文字列 "\\\\" となります)。
 * </p>
 * <p>
 * 後方参照の直後に他の数字が続くような置換 (replacement) パターンを
 * 使用する場合（すなわち、マッチしたパターンの直後に数字リテラルを置く
 * 場合）、後方参照を行うために通常の \\1 表記を
 * 使用することができません。例えば、\\11　は、
 * 後方参照 \\1 の後にリテラル
 * 1 が続くのか、後方参照 \\11 で
 * その後には何も続かないのかが不明のため、
 * <b>preg_replace</b> を混乱させる可能性があります。
 * この場合、解決策は、${1}1 を使用することです。
 * こうすることで、1 はリテラルとなり、後方参照
 * $1 を明確に作成できます。
 * </p>
 * <p>
 * 非推奨の e 修飾子を使用する際に、
 * この関数は後方参照を置換する文字列のうちの特定の文字
 * (具体的には '、"、
 * \ および NULL) をエスケープします。
 * これは、後方参照をシングルクォートやダブルクォートを共用した場合
 * (たとえば 'strlen(\'$1\')+strlen("$2")')
 * に構文エラーが発生しないようにするためのものです。
 * PHP の 文字列構文 を意識し、
 * 文字列がどのように解釈されるのかを正確に知っておくようにしましょう。
 * </p>
 * @param mixed $subject <p>
 * 検索・置換対象となる文字列もしくは文字列の配列
 * </p>
 * <p>
 * <i>subject</i> が配列の場合、検索と置換は
 * <i>subject</i>
 * の各要素に対して行われ、返り値も配列となります。
 * </p>
 * @param int $limit [optional] <p>
 * <i>subject</i> 文字列において、各パターンによる
 * 置換を行う最大回数。デフォルトは
 * -1 (制限無し)。
 * </p>
 * @param int $count [optional] <p>
 * この引数が指定されると、置換回数が渡されます。
 * </p>
 * @return mixed <b>preg_replace</b> は、
 * <i>subject</i> 引数が配列の場合は配列を、
 * その他の場合は文字列を返します。
 * </p>
 * <p>
 * パターンがマッチした場合、〔置換が行われた〕新しい <i>subject</i>
 * を返します。マッチしなかった場合、<i>subject</i>
 * をそのまま返します。エラーが発生した場合、<b>NULL</b> を返します。
 */
function preg_replace($pattern, $replacement, $subject, int $limit = -1, int &$count = null) {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * 正規表現検索を行い、コールバック関数を使用して置換を行う
 * @link http://php.net/manual/ja/function.preg-replace-callback.php
 * @param mixed $pattern <p>
 * 検索するパターン。
 * 文字列あるいは文字列の配列のいずれかとなります。
 * </p>
 * @param callable $callback <p>
 * このコールバック関数は、検索対象文字列でマッチした要素の配列が指定されて
 * コールされます。このコールバック関数は、置換後の文字列を返す必要があります。
 * コールバックのシグネチャは、次のとおりです。
 * </p>
 * <p>
 * string<b>handler</b>
 * <b>array<i>matches</i></b>
 * </p>
 * <p>
 * <b>preg_replace_callback</b> 用の
 * <i>callback</i> 関数が、
 * ひとつの場所だけで必要となることがあります。
 * そんな場合は、
 * 無名関数
 * を使って宣言した無名関数を
 * <b>preg_replace_callback</b> のコール時に使用します。
 * このようにすることにより、コールに関するすべての情報を 1 ヶ所に集め、
 * 他の場所で使用されないコールバック関数名で関数の名前空間を
 * 汚染しないようにすることができます。
 * </p>
 * <p>
 * <b>preg_replace_callback</b> と無名関数
 * <code>
 * /* Unix 方式のコマンドラインフィルタです。
 * * 段落の冒頭の大文字を、小文字に変換します。* /
 * $fp = fopen("php://stdin", "r") or die("標準入力から読み込めません");
 * while (!feof($fp)) {
 * $line = fgets($fp);
 * $line = preg_replace_callback(
 * '|<p>\s*\w|',
 * function ($matches) {
 * return strtolower($matches[0]);
 * },
 * $line
 * );
 * echo $line;
 * }
 * fclose($fp);
 * </code>
 * </p>
 * @param mixed $subject <p>
 * 文字列あるいは文字列の配列で、
 * 検索および置換の対象となる文字列を指定します。
 * </p>
 * @param int $limit [optional] <p>
 * <i>subject</i> 文字列における
 * 各パターンの最大置換回数。デフォルトは
 * -1 (無制限) です。
 * </p>
 * @param int $count [optional] <p>
 * 指定した場合は、置換を行った回数がここに格納されます。
 * </p>
 * @return mixed <b>preg_replace_callback</b> は、
 * <i>subject</i> が配列の場合には配列を、
 * それ以外の場合は文字列を返します。
 * エラー時の返り値は <b>NULL</b> となります。
 * </p>
 * <p>
 * マッチするものが見つかった場合は新しい subject
 * を返し、それ以外の場合はもとの <i>subject</i>
 * をそのまま返します。
 */
function preg_replace_callback($pattern, callable $callback, $subject, int $limit = -1, int &$count = null) {}

/**
 * (PHP 7)<br/>
 * 正規表現検索を行い、コールバック関数を使用して置換を行う
 * @link http://php.net/manual/ja/function.preg-replace-callback-array.php
 * @param array $patterns_and_callbacks <p>
 * パターンをキーとし、コールバック関数を値とする連想配列です。
 * </p>
 * @param mixed $subject <p>
 * 文字列あるいは文字列の配列で、
 * 検索および置換の対象となる文字列を指定します。
 * </p>
 * @param int $limit [optional] <p>
 * <i>subject</i> 文字列における
 * 各パターンの最大置換回数。デフォルトは
 * -1 (無制限) です。
 * </p>
 * @param int $count [optional] <p>
 * 指定した場合は、置換を行った回数がここに格納されます。
 * </p>
 * @return mixed <b>preg_replace_callback_array</b> は、
 * <i>subject</i> が配列の場合には配列を、
 * それ以外の場合は文字列を返します。
 * エラー時の返り値は <b>NULL</b> となります。
 * </p>
 * <p>
 * マッチするものが見つかった場合は新しい subject
 * を返し、それ以外の場合はもとの <i>subject</i>
 * をそのまま返します。
 */
function preg_replace_callback_array(array $patterns_and_callbacks, $subject, int $limit = -1, int &$count = null) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 正規表現による検索と置換を行う
 * @link http://php.net/manual/ja/function.preg-filter.php
 * @param mixed $pattern
 * @param mixed $replacement
 * @param mixed $subject
 * @param int $limit [optional]
 * @param int $count [optional]
 * @return mixed <i>subject</i>
 * が配列の場合は配列を、それ以外の場合は文字列を返します。
 * </p>
 * <p>
 * マッチする結果が見つからなかったりエラーが発生したりした場合は、
 * <i>subject</i> が array なら空の配列を返し、そうでなければ
 * <b>NULL</b> を返します。
 */
function preg_filter($pattern, $replacement, $subject, int $limit = -1, int &$count = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 正規表現で文字列を分割する
 * @link http://php.net/manual/ja/function.preg-split.php
 * @param string $pattern <p>
 * 検索するパターンを表す文字列。
 * </p>
 * @param string $subject <p>
 * 入力文字列。
 * </p>
 * @param int $limit [optional] <p>
 * これを指定した場合、最大
 * <i>limit</i> 個の部分文字列を返します。
 * 残りの文字列は、最後の部分文字列に含めて返されます。
 * <i>limit</i> が -1、0 あるいは <b>NULL</b> の場合は「制限が無い」ことを意味します。
 * 制限を指定せずに
 * <i>flags</i> パラメータを指定したい場合などに <b>NULL</b> を使用します。
 * </p>
 * @param int $flags [optional] <p>
 * <i>flags</i> は、次のフラグを組み合わせたものとする
 * （ビット和演算子 | で組み合わせる）ことが可能です。
 * <b>PREG_SPLIT_NO_EMPTY</b>
 * このフラグを設定すると、空文字列でないものだけが
 * <b>preg_split</b> により返されます。
 * @return array <i>pattern</i> にマッチした境界で分割した
 * <i>subject</i> の部分文字列の配列を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function preg_split(string $pattern, string $subject, int $limit = -1, int $flags = 0): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 正規表現文字をクオートする
 * @link http://php.net/manual/ja/function.preg-quote.php
 * @param string $str <p>
 * 入力文字列。
 * </p>
 * @param string $delimiter [optional] <p>
 * オプションの <i>delimiter</i> を指定すると、
 * ここで指定した文字もエスケープされます。これは、PCRE 関数が使用する
 * デリミタをエスケープする場合に便利です。/ がデリミタとしては
 * 最も一般的に使用されています。
 * </p>
 * @return string クォートされた (エスケープした) 文字列を返します。
 */
function preg_quote(string $str, string $delimiter = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * パターンにマッチする配列の要素を返す
 * @link http://php.net/manual/ja/function.preg-grep.php
 * @param string $pattern <p>
 * 検索するパターンを表す文字列。
 * </p>
 * @param array $input <p>
 * 入力の配列。
 * </p>
 * @param int $flags [optional] <p>
 * <b>PREG_GREP_INVERT</b>
 * を設定すると、この関数は
 * 与えた <i>pattern</i> にマッチ しない
 * 要素を返します。
 * </p>
 * @return array <i>input</i> 配列のキーを使用した配列を返します。
 */
function preg_grep(string $pattern, array $input, int $flags = 0): array {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 直近の PCRE 正規表現処理のエラーコードを返す
 * @link http://php.net/manual/ja/function.preg-last-error.php
 * @return int 以下の定数のいずれかを返します (別のページで説明します)。
 * <b>PREG_NO_ERROR</b>
 * <b>PREG_INTERNAL_ERROR</b>
 * <b>PREG_BACKTRACK_LIMIT_ERROR</b> (pcre.backtrack_limit も参照ください)
 * <b>PREG_RECURSION_LIMIT_ERROR</b> (pcre.recursion_limit も参照ください)
 * <b>PREG_BAD_UTF8_ERROR</b>
 * <b>PREG_BAD_UTF8_OFFSET_ERROR</b> (PHP 5.3.0 以降)
 * <b>PREG_JIT_STACKLIMIT_ERROR</b> (PHP 7.0.0 以降)
 */
function preg_last_error(): int {}


/**
 * $matches[0] はパターン全体にマッチした文字列の配列、
 * $matches[1] は第 1 のキャプチャ用サブパターンにマッチした文字列の配列、
 * といったように結果の順序を指定します。
 * このフラグは、<b>preg_match_all</b> でのみ使用されます。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_PATTERN_ORDER', 1);

/**
 * $matches[0] は 1 回目のマッチングでキャプチャした値の配列、
 * $matches[1] は 2 回目のマッチングでキャプチャした値の配列、
 * といったように結果の順序を指定します。
 * このフラグは、<b>preg_match_all</b> でのみ使用されます。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_SET_ORDER', 2);

/**
 * <b>PREG_SPLIT_OFFSET_CAPTURE</b> の説明を参照してください。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_OFFSET_CAPTURE', 256);

/**
 * このフラグは、<b>preg_split</b> が、空文字列でないものだけ
 * を返すようにします。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_SPLIT_NO_EMPTY', 1);

/**
 * このフラグは、<b>preg_split</b> が
 * 文字列分割用のパターン中のカッコによるサブパターンでキャプチャされた値も
 * 同時に返すようにします。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_SPLIT_DELIM_CAPTURE', 2);

/**
 * このフラグを設定した場合、各マッチに対応する文字列のオフセットも返されます。
 * これにより、返り値は配列となり、配列の要素 0 はマッチした文字列、 要素 1
 * は対象文字列中におけるマッチした文字列のオフセット値となることに注意してください。
 * このフラグは
 * <b>preg_split</b> のみで使用されます。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_SPLIT_OFFSET_CAPTURE', 4);
define ('PREG_GREP_INVERT', 1);

/**
 * エラーが存在しなかった場合に
 * <b>preg_last_error</b> から返されます。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_NO_ERROR', 0);

/**
 * PCRE 内部エラーが発生した場合に
 * <b>preg_last_error</b> から返されます。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_INTERNAL_ERROR', 1);

/**
 * backtrack limit に達した場合に
 * <b>preg_last_error</b> から返されます。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_BACKTRACK_LIMIT_ERROR', 2);

/**
 * recursion limit に達した場合に
 * <b>preg_last_error</b> から返されます。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_RECURSION_LIMIT_ERROR', 3);

/**
 * 壊れている UTF8 データによって直近のエラーが発生した場合に
 * <b>preg_last_error</b> から返されます
 * (UTF-8 モード
 * で正規表現を実行した場合のみ)。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_BAD_UTF8_ERROR', 4);

/**
 * オフセットが妥当な UTF-8 コードポイントの開始位置に対応しない場合に
 * <b>preg_last_error</b> から返されます
 * (UTF-8 モード
 * で正規表現を実行した場合のみ)。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_BAD_UTF8_OFFSET_ERROR', 5);

/**
 * 直近の PCRE 関数の実行が JIT スタック空間の制限によって失敗した場合に
 * <b>preg_last_error</b> から返されます。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PREG_JIT_STACKLIMIT_ERROR', 6);

/**
 * PCRE のバージョンおよびリリース日 (例: "7.0 18-Dec-2006")。
 * @link http://php.net/manual/ja/pcre.constants.php
 */
define ('PCRE_VERSION', "8.38 2015-11-23");

// End of pcre v.7.0.19
?>
