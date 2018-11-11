<?php



/**
 * 変数の boolean としての値を取得する
 * <p><code>var</code> の <code>boolean</code> としての値を返します。</p>
 * @param mixed $var <p><code>boolean</code> に変換したいスカラー値。</p>
 * @return bool <p><code>var</code> の <code>boolean</code> としての値を返します。</p>
 * @link http://php.net/manual/ja/function.boolval.php
 * @see floatval(), intval(), strval(), settype(), is_bool()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function boolval($var): bool {}

/**
 * 内部的な Zend の値を表す文字列をダンプする
 * <p>内部的な Zend の値を表す文字列をダンプします。</p>
 * @param mixed $variable <p>評価される変数</p>
 * @param mixed $_
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.debug-zval-dump.php
 * @see var_dump(), debug_backtrace()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function debug_zval_dump($variable, $_ = NULL): void {}

/**
 * floatval() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>floatval()</code>.</p>
 * @param mixed $var <p>あらゆるスカラ型を指定できます。オブジェクトに <b>floatval()</b> を使用することはできません。 その場合は <b><code>E_NOTICE</code></b> レベルのエラーを発して 1 を返します。</p>
 * @return float
 * @link http://php.net/manual/ja/function.doubleval.php
 * @since PHP 4, PHP 5, PHP 7
 */
function doubleval($var): float {}

/**
 * 変数の float 値を取得する
 * <p><code>var</code> の <code>float</code> 値を返します。</p>
 * @param mixed $var <p>あらゆるスカラ型を指定できます。オブジェクトに <b>floatval()</b> を使用することはできません。 その場合は <b><code>E_NOTICE</code></b> レベルのエラーを発して 1 を返します。</p>
 * @return float <p>指定した変数の float 値を返します。 空の配列の場合は 0、空でない配列の場合は 1 を返します。</p><p>文字列の場合、ほとんどは 0 を返しますが、先頭の文字が何であるかによってこれは変わります。 float 型へのキャスト と同じルールに従います。</p>
 * @link http://php.net/manual/ja/function.floatval.php
 * @see boolval(), intval(), strval(), settype()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function floatval($var): float {}

/**
 * 全ての定義済の変数を配列で返す
 * <p>この関数は、環境変数、サーバー変数、<b>get_defined_vars()</b> がコールされたスコープ内でユーザーが定義した変数を含む、全ての の定義済の変数のリストを有する多次元の配列を返します。</p>
 * @return array <p>すべての変数を含む多次元の配列を返します。</p>
 * @link http://php.net/manual/ja/function.get-defined-vars.php
 * @see isset(), get_defined_functions(), get_defined_constants()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function get_defined_vars(): array {}

/**
 * リソース型を返す
 * <p>この関数は、指定したリソースの型を取得します。</p>
 * @param resource $handle <p>評価されるリソースハンドル。</p>
 * @return string <p>指定された <code>handle</code> がリソースであった場合、 この関数はその型を表す文字列を返します。この関数で型が判別できなかった 場合は、返り値は文字列 <i>Unknown</i> となります。</p><p>もし <code>handle</code> がリソースでない場合、 この関数は <b><code>NULL</code></b> を返し、エラーを発生させます。</p>
 * @link http://php.net/manual/ja/function.get-resource-type.php
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function get_resource_type($handle): string {}

/**
 * 変数の型を取得する
 * <p>PHP 変数 <code>var</code> の型を返します。 型のチェックには、この関数ではなく <i>is_&#42;</i> 関数を使います。</p>
 * @param mixed $var <p>型を調べたい変数。</p>
 * @return string <p>返された文字列は、以下のいずれかの値を持ちます。</p><ul> <li>  "<code>boolean</code>"  </li> <li>  "<code>integer</code>"  </li> <li>  "<code>double</code>" (歴史的な理由により、<code>float</code> の場合には "double"が返されます。"float" とはなりません)  </li> <li>  "<code>string</code>"  </li> <li>  "<code>array</code>"  </li> <li>  "<code>object</code>"  </li> <li>  "<code>resource</code>"  </li> <li>  "resource (closed)" PHP 7.2.0から実装  </li> <li>  "<code>NULL</code>"  </li> <li>  "unknown type"  </li> </ul>
 * @link http://php.net/manual/ja/function.gettype.php
 * @see settype(), get_class(), is_array(), is_bool(), is_callable(), is_float(), is_int(), is_null(), is_numeric(), is_object(), is_resource(), is_scalar(), is_string(), function_exists(), method_exists()
 * @since PHP 4, PHP 5, PHP 7
 */
function gettype($var): string {}

/**
 * GET/POST/Cookie 変数をグローバルスコープにインポートする
 * <p>GET/POST/Cookie 変数をグローバルスコープにインポートします。 この関数は、register_globals を無効としているが、いくつかの変数をグローバルスコープで参照したいといった場合に有用です。</p><p>$_SERVER のような他の変数をグローバルスコープへインポートすることを考えている場合には、 <code>extract()</code> の使用を検討してください。</p><p>この関数は PHP 5.3.0 で <i>非推奨</i>となり、 PHP 5.4.0 で<i>削除</i>されました。</p>
 * @param string $types <p><code>types</code> パラメータを使用すると、インポートする リクエスト変数の種類を指定可能です。文字 'G'、'P'、'C' がそれぞれ GET、POST、Cookie を表します。これらは大文字小文字を区別しないため、 'g'、'p'、'c' の組み合せも使用することが可能です。 POST には、アップロードされたファイルに関する情報も含まれます。</p>  <p><b>注意</b>:</p> <p>文字の順番には注意してください。 "<i>GP</i>" とすると、POST 変数は同名の GET 変数を上書きします。GPC 以外の文字は無視されます。</p>
 * @param string $prefix <p>変数名の接頭辞として使用され、 グローバルスコープにインポートされる全ての変数名の前に付加されます。 このため、"<i>userid</i>" という名前の GET 値があり、 接頭辞 "<i>pref_</i>" を指定した場合、 $pref_userid という名前のグローバル変数が作成されます。</p>  <p><b>注意</b>:</p> <p><code>prefix</code> パラメータはオプションですが、 接頭辞を指定しないか接頭辞として空の文字列を指定した場合、 <b><code>E_NOTICE</code></b> レベルのエラーが発生します。 これは、セキュリティ上の問題を発生する可能性があります。 NOTICE レベルのエラーは、デフォルトの error reporting レベルでは表示されません。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.import-request-variables.php
 * @see extract()
 * @since PHP 4 >= 4.1.0, PHP 5 < 5.4.0
 */
function import_request_variables(string $types, string $prefix = NULL): bool {}

/**
 * 変数の整数としての値を取得する
 * <p>指定された値 <code>base</code> を基数（デフォルトは 10）とする、 <code>var</code> の <code>integer</code> としての値を返します。 オブジェクトに <b>intval()</b> を使用することはできません。 その場合は <b><code>E_NOTICE</code></b> レベルのエラーを発して 1 を返します。</p>
 * @param mixed $var <p>整数に変換するスカラー値</p>
 * @param int $base <p>変換のための基数</p>  <p><b>注意</b>:</p> <p><code>base</code> が 0 の場合は、 <code>var</code> のフォーマットに基づいて利用する基数を決めます。</p> <ul> <li>  文字列の先頭が "0x" (あるいは "0X") の場合は、基数を 16 (十六進数) とします。  </li> <li>  そうではなく、文字列の先頭が "0" の場合は、基数を 8 (八進数) とします。 otherwise,  </li> <li>  それ以外の場合は、基数を 10 (十進数) とします。  </li> </ul>
 * @return int <p>成功時は <code>var</code> の整数値、失敗時は 0。 空の配列の場合は 0、空でない配列の場合は 1 を返します。</p><p>最大値はシステムに依存します。32 ビットシステムでは、 最大の符号付き整数の範囲 -2147483648 ～ 2147483647 となります。 このため、そのようなシステムでは <i>intval('1000000000000')</i> は 2147483647 を返します。 64 ビットシステムにおける最大の符号付き整数は 9223372036854775807 となります。</p><p>文字列の場合、文字列の最左の文字に依存しますが、ほとんどの場合で 0 を返します。 整数への変換 の一般的なルールが適用されます。</p>
 * @link http://php.net/manual/ja/function.intval.php
 * @see boolval(), floatval(), strval(), settype(), is_numeric()
 * @since PHP 4, PHP 5, PHP 7
 */
function intval($var, int $base = 10): int {}

/**
 * 変数が配列かどうかを検査する
 * <p>与えられた変数が配列かどうかを検査します。</p>
 * @param mixed $var <p>評価する変数</p>
 * @return bool <p><code>var</code> が 配列型 の場合 <b><code>TRUE</code></b>、 そうでない場合 <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-array.php
 * @see is_float(), is_int(), is_string(), is_object()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_array($var): bool {}

/**
 * 変数が boolean であるかを調べる
 * <p>指定した変数が boolean であるかどうかを調べます。</p>
 * @param mixed $var <p>評価する変数。</p>
 * @return bool <p><code>var</code> が <code>boolean</code> である場合に <b><code>TRUE</code></b> 、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-bool.php
 * @see is_float(), is_int(), is_string(), is_object(), is_array()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_bool($var): bool {}

/**
 * 引数が、関数としてコール可能な構造であるかどうかを調べる
 * <p>引数の内容が、関数としてコール可能かどうかを調べます。 変数が有効な関数名かどうかを調べたり、配列の中に適切に エンコードされたオブジェクトと関数名が格納されているかどうかを 調べたりすることが可能です。</p>
 * @param mixed $var <p>チェックする値。</p>
 * @param bool $syntax_only <p><b><code>TRUE</code></b> の場合、この関数は単に <code>name</code> が関数またはメソッドであるかどうかだけを調べます。 文字列以外の型の変数や不正な形式の配列は、 引数として受け付けられません。有効な配列の形式は、 最初のエントリがオブジェクトあるいは文字列で、2 番目のエントリが文字列である 2 つのエントリからなるものです。</p>
 * @param string $callable_name <p>"呼び出し名" を受け取ります。下の例では "someClass::someMethod" です。これは someClass::SomeMethod() が static メソッドであるかのようにみえますが、 そうではないことに注意しましょう。</p>
 * @return bool <p><code>var</code> がコール可能な場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-callable.php
 * @see function_exists(), method_exists()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function is_callable($var, bool $syntax_only = FALSE, string &$callable_name = NULL): bool {}

/**
 * 引数が、数えられる値かどうかを調べる
 * <p>引数の内容が、<code>array</code> または Countable を実装したオブジェクトかどうかを調べます。</p>
 * @param mixed $var <p>チェックする値</p>
 * @return bool <p><code>var</code> が数えられる場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-countable.php
 * @see is_array(), is_object(), is_iterable(), is_bool()
 * @since PHP 7 >= 7.3.0
 */
function is_countable($var): bool {}

/**
 * is_float() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>is_float()</code>.</p>
 * @param mixed $var <p>評価する変数</p>
 * @return bool
 * @link http://php.net/manual/ja/function.is-double.php
 * @since PHP 4, PHP 5, PHP 7
 */
function is_double($var): bool {}

/**
 * 変数の型が float かどうか調べる
 * <p>与えられた変数の型が float かどうかを調べます。</p><p><b>注意</b>:</p><p>変数が数値もしくは数値形式の文字列の場合 (フォームからの入力の場合は 常に文字列となります) 、<code>is_numeric()</code> を使用する必要があります。</p>
 * @param mixed $var <p>評価する変数</p>
 * @return bool <p>もし <code>var</code> が float 型 の場合 <b><code>TRUE</code></b>、 そうでない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-float.php
 * @see is_bool(), is_int(), is_numeric(), is_string(), is_array(), is_object()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_float($var): bool {}

/**
 * 変数が整数型かどうかを検査する
 * <p>与えられた変数の型が整数型かどうかを検査します。</p><p><b>注意</b>:</p><p>変数が数値か数値形式の文字列かを判断したい場合 (フォームからの入力の場合は 常に文字列となります) 、<code>is_numeric()</code> を使用する必要があります。</p>
 * @param mixed $var <p>評価する変数</p>
 * @return bool <p>もし <code>var</code> が 整数型 の場合 <b><code>TRUE</code></b>、 そうでない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-int.php
 * @see is_bool(), is_float(), is_numeric(), is_string(), is_array(), is_object()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_int($var): bool {}

/**
 * is_int() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>is_int()</code>.</p>
 * @param mixed $var <p>評価する変数</p>
 * @return bool
 * @link http://php.net/manual/ja/function.is-integer.php
 * @since PHP 4, PHP 5, PHP 7
 */
function is_integer($var): bool {}

/**
 * 変数の内容が反復可能な値であることを確認する
 * <p>変数の内容が iterable 疑似型で許容されること、すなわち <code>array</code>、あるいは Traversable を実装したオブジェクトであることを確認する。</p>
 * @param mixed $var <p>チェックする値</p>
 * @return bool <p><code>var</code> が反復可能であれば <b><code>TRUE</code></b> を、そうでなければ <b><code>FALSE</code></b> を返す。</p>
 * @link http://php.net/manual/ja/function.is-iterable.php
 * @see is_array()
 * @since PHP 7 >= 7.1.0
 */
function is_iterable($var): bool {}

/**
 * is_int() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>is_int()</code>.</p>
 * @param mixed $var <p>評価する変数</p>
 * @return bool
 * @link http://php.net/manual/ja/function.is-long.php
 * @since PHP 4, PHP 5, PHP 7
 */
function is_long($var): bool {}

/**
 * 変数が NULL かどうか調べる
 * <p>指定した変数が <b><code>NULL</code></b> かどうかを調べます。</p>
 * @param mixed $var <p>評価する変数。</p>
 * @return bool <p><code>var</code> が <code>null</code> の場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-null.php
 * @see isset(), is_bool(), is_numeric(), is_float(), is_int(), is_string(), is_object(), is_array()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function is_null($var): bool {}

/**
 * 変数が数字または数値形式の文字列であるかを調べる
 * <p>指定した変数が数値であるかどうかを調べます。数値形式の文字列は以下の要素から なります。（オプションの）符号、任意の数の数字、（オプションの）小数部、 そして（オプションの）指数部。つまり、<i>+0123.45e6</i> は数値として有効な値です。十六進表記（<i>0xf4c3b00c</i> など) や二進表記 (<i>0b10100111001</i> など) は認められません。</p>
 * @param mixed $var <p>評価する変数。</p>
 * @return bool <p><code>var</code> が数値または数値形式の文字列である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-numeric.php
 * @see ctype_digit(), is_bool(), is_null(), is_float(), is_int(), is_string(), is_object(), is_array()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_numeric($var): bool {}

/**
 * 変数がオブジェクトかどうかを検査する
 * <p>与えられた変数がオブジェクトかどうかを調べます。</p>
 * @param mixed $var <p>評価する変数。</p>
 * @return bool <p>もし <code>var</code> が object 型 の場合 <b><code>TRUE</code></b>、 そうでない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-object.php
 * @see is_bool(), is_int(), is_float(), is_string(), is_array()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_object($var): bool {}

/**
 * is_float() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>is_float()</code>.</p>
 * @param mixed $var <p>評価する変数</p>
 * @return bool
 * @link http://php.net/manual/ja/function.is-real.php
 * @since PHP 4, PHP 5, PHP 7
 */
function is_real($var): bool {}

/**
 * 変数がリソースかどうかを調べる
 * <p>指定した変数がリソースかどうかを調べます。</p>
 * @param mixed $var <p>評価する変数。</p>
 * @return bool <p><code>var</code> が <code>resource</code> の場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-resource.php
 * @see get_resource_type()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_resource($var): bool {}

/**
 * 変数がスカラかどうかを調べる
 * <p>指定した変数がスカラかどうかを調べます。</p><p>スカラ変数には <code>integer</code>、<code>float</code>、<code>string</code> あるいは <code>boolean</code> が含まれます。 <code>array</code>、<code>object</code> および <code>resource</code> はスカラではありません。</p><p><b>注意</b>:</p><p>リソース型は現在整数に基づく抽象型であるため、 <b>is_scalar()</b> は <code>resource</code> 型の値を スカラ値と判定しません。この実装の詳細は変更される可能性があるため、 前堤にするべきではありません。</p><p><b>注意</b>:</p><p><b>is_scalar()</b> は、NULL をスカラとは見なしません。</p>
 * @param mixed $var <p>評価する変数。</p>
 * @return bool <p><code>var</code> がスカラの場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-scalar.php
 * @see is_float(), is_int(), is_numeric(), is_real(), is_string(), is_bool(), is_object(), is_array()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function is_scalar($var): bool {}

/**
 * 変数の型が文字列かどうかを調べる
 * <p>指定した変数の型が文字列かどうかを調べます。</p>
 * @param mixed $var <p>評価する変数。</p>
 * @return bool <p><code>var</code> の型が <code>string</code> である場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-string.php
 * @see is_float(), is_int(), is_bool(), is_object(), is_array()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_string($var): bool {}

/**
 * 指定した変数に関する情報を解りやすく出力する
 * <p><b>print_r()</b> は、 変数の値に関する情報を解り易い形式で表示します。</p><p><b>print_r()</b>、<code>var_dump()</code> および <code>var_export()</code> は、オブジェクトの protected および private のプロパティも表示します。 静的なクラスメンバーは表示されません。</p>
 * @param mixed $expression <p>表示したい式。</p>
 * @param bool $return <p><b>print_r()</b> の結果を取得したい場合には <code>return</code> 引数を使います。 この引数が <b><code>TRUE</code></b> の場合には、 <b>print_r()</b> は情報を表示するかわりに情報を返します。</p>
 * @return mixed <p><code>string</code>、<code>integer</code>, <code>float</code> を指定した場合はその値が出力されます。 <code>array</code> を指定した場合、キーと要素を表す形式で値が 表示されます。<code>object</code> に関しても同様の表示形式となります。</p><p><code>return</code> パラメータが <b><code>TRUE</code></b> の場合は、 この関数は <code>string</code> を返します。それ以外の場合の返り値は <b><code>TRUE</code></b> です。</p>
 * @link http://php.net/manual/ja/function.print-r.php
 * @see ob_start(), var_dump(), var_export()
 * @since PHP 4, PHP 5, PHP 7
 */
function print_r($expression, bool $return = FALSE) {}

/**
 * 値の保存可能な表現を生成する
 * <p>値の保存可能な表現を生成します。</p><p>型や構造を失わずに PHP の値を保存または渡す際に有用です。</p><p>シリアル化された文字列を PHP の値に戻すには、 <code>unserialize()</code> を使用してください。</p>
 * @param mixed $value <p>シリアル化する値。 <b>serialize()</b> は、<code>resource</code> 以外の全ての型を処理します。自分自身への参照を含む配列を <b>serialize()</b> することも可能です。 シリアル化した配列/オブジェクト内の 循環参照も保存されます。その他の参照は失われます。</p> <p>PHP は、シリアル化の前にまずメンバ関数 __sleep() のコールを試みます。ここで、シリアル化の前のオブジェクトの後始末処理 などを行います。同様に、<code>unserialize()</code> で オブジェクトを復元した際にはメンバ関数 __wakeup() がコールされます。</p>  <p><b>注意</b>:</p> <p>オブジェクトの private メンバは、メンバ名の前にクラス名がつきます。 また protected メンバはメンバ名の前に '&#42;' がつきます。 前に付加されるこれらの値の前後には null バイトがついています。</p>
 * @return string <p><code>value</code> の保存可能なバイトストリーム表現を含む文字列を返します。</p><p>これはバイナリ文字列であり、null バイトを含む可能性もあることに注意しましょう。 保存したり利用したりするときも、null バイトが含まれることを想定しておかないといけません。 たとえば、<b>serialize()</b> の出力をデータベースに格納するときには、 通常は CHAR 型や TEXT 型ではなく BLOB 型を使わないといけません。</p>
 * @link http://php.net/manual/ja/function.serialize.php
 * @see unserialize(), var_export(), json_encode()
 * @since PHP 4, PHP 5, PHP 7
 */
function serialize($value): string {}

/**
 * 変数の型をセットする
 * <p>変数 <code>var</code> の型を <code>type</code> にセットします。</p>
 * @param mixed $var <p>変換する変数。</p>
 * @param string $type <p><code>type</code> の値は以下の命令のいずれかです。</p><ul> <li>  "boolean" または "bool"  </li> <li>  "integer" または "int"  </li> <li>  "float" または "double"  </li> <li>  "string"  </li> <li>  "array"  </li> <li>  "object"  </li> <li>  "null"  </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.settype.php
 * @see gettype()
 * @since PHP 4, PHP 5, PHP 7
 */
function settype(&$var, string $type): bool {}

/**
 * 変数の文字列としての値を取得する
 * <p><code>var</code> の <code>string</code> としての値を 返します。文字列への変換の詳細については、<code>string</code> の ドキュメントを参照ください。</p><p>この関数は、返り値の書式設定は行いません。数値を文字列形式で書式設定したい場合は <code>sprintf()</code> あるいは <code>number_format()</code> を参照ください。</p>
 * @param mixed $var <p>文字列に変換したい変数。</p> <p><code>var</code> には、任意のスカラー型を指定できます。 また、__toString() メソッドを実装したオブジェクトを使うこともできます。 <b>strval()</b> は配列に対して使うことはできず、 __toString() メソッドを実装していないオブジェクトに対しても使うことはできません。</p>
 * @return string <p><code>var</code> の文字列値を返します。</p>
 * @link http://php.net/manual/ja/function.strval.php
 * @see boolval(), floatval(), intval(), settype(), sprintf(), number_format()
 * @since PHP 4, PHP 5, PHP 7
 */
function strval($var): string {}

/**
 * 保存用表現から PHP の値を生成する
 * <p><b>unserialize()</b> は、シリアル化された変数を PHP 変数値に戻す変換を行います。</p><p><i>allowed_classes</i> の <code>options</code> の値にかかわらず、 ユーザーからの入力をそのまま <b>unserialize()</b> に渡してはいけません。 アンシリアライズの時には、オブジェクトのインスタンス生成やオートローディングなどで コードが実行されることがあり、悪意のあるユーザーがこれを悪用するかもしれないからです。 シリアル化したデータをユーザーに渡す必要がある場合は、安全で標準的なデータ交換フォーマットである JSON などを使うようにしましょう。 <code>json_decode()</code> および <code>json_encode()</code> を利用します。</p><p>外部に保存されているシリアル化されたデータをアンシリアライズする必要がある場合は、 <code>hash_hmac()</code> を使ったデータの検証を検討しましょう。 他者によるデータの改ざんがないことを確かめるためです。</p>
 * @param string $str <p>シリアル化された文字列。</p> <p>もしアンシリアライズする変数がオブジェクトの場合、 オブジェクトが無事再作成された後、PHP は自動的にメンバ関数 __wakeup() (存在していれば) をコールしようとします。</p> <p></p> <p><b>注意</b>: <b>unserialize_callback_func ディレクティブ</b><br></p> <p>コールバック関数を設定することが可能です。(不完全な <code>object</code> "__PHP_Incomplete_Class"を得ることを防ぐため) コールバック関数は、非シリアル化する際に未定義のクラスをインスタ ンス化する必要がある場合にコールされます。 '<i>unserialize_callback_func</i>'を定義するためには、 php.ini, <code>ini_set()</code>, .htaccess を使用し てください。未定義のクラスをインスタンス化する度に、コールバック関 数がコールされます。この機能を無効とするには、 単純にこの設定を空にしてください。</p>
 * @param array $options <p><b>unserialize()</b> に連想配列で渡すオプション。</p>  <b>有効なオプション</b>   名前 型 説明     <i>allowed_classes</i> <code>mixed</code>   受け付けるクラス名の配列を指定します。あらゆるクラスを拒否する場合は <b><code>FALSE</code></b>、あらゆるクラスを受け付ける場合は <b><code>TRUE</code></b> を指定します。 このオプションを指定しているときに、もし <b>unserialize()</b> が受け付け対象外のクラスのオブジェクトに遭遇すると、 そのオブジェクトを <b>__PHP_Incomplete_Class</b> のインスタンスに変換します。   このオプションを省略すると、<b><code>TRUE</code></b> を指定したのと同じ意味になります。 つまり、PHP はあらゆるクラスのオブジェクトをインスタンス化しようとします。
 * @return mixed <p>変換された値が返されます。その値は、 <code>boolean</code>, <code>integer</code>, <code>float</code>, <code>string</code>, <code>array</code>, <code>object</code> のいずれかとなります。</p><p>渡された文字列が復元できなかった場合、<b><code>FALSE</code></b> を返して <b><code>E_NOTICE</code></b> を発生します。</p>
 * @link http://php.net/manual/ja/function.unserialize.php
 * @see json_encode(), json_decode(), hash_hmac(), serialize()
 * @since PHP 4, PHP 5, PHP 7
 */
function unserialize(string $str, array $options = NULL) {}

/**
 * 変数に関する情報をダンプする
 * <p>この関数は、指定した式に関してその型や値を含む構造化された情報を 返します。配列の場合、その構造を表示するために各値について再帰的に 探索されます。</p><p>オブジェクトのすべての public、private および protected なプロパティが出力されます。ただし、そのオブジェクトが __debugInfo() メソッド (PHP 5.6.0 で追加されました) を実装している場合は、その限りではありません。</p><p>ブラウザに直接結果を出力する すべてのものと同様に、出力制御関数 を使用してこの関数の出力をキャプチャーし、(例えば)文字列 (<code>string</code>)に保存することが可能です。</p>
 * @param mixed $expression <p>ダンプしたい変数。</p>
 * @param mixed $_
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.var-dump.php
 * @see print_r(), debug_zval_dump(), var_export()
 * @since PHP 4, PHP 5, PHP 7
 */
function var_dump($expression, $_ = NULL): void {}

/**
 * 変数の文字列表現を出力または返す
 * <p><b>var_export()</b> は、 渡された変数に関する構造化された情報を返します。この関数は <code>var_dump()</code> に似ていますが、 返される表現が有効な PHP コードであるところが異なります。</p>
 * @param mixed $expression <p>エクスポートしたい変数</p>
 * @param bool $return <p>使用されかつ <b><code>TRUE</code></b> に設定された場合、<b>var_export()</b> は変数表現を出力する代わりに返します。</p>
 * @return mixed <p><code>return</code> パラメータが使用され <b><code>TRUE</code></b> と評価される場合、 変数表現を返します。そうでない場合、この関数は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.var-export.php
 * @see print_r(), serialize(), var_dump()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function var_export($expression, bool $return = FALSE) {}

