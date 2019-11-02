<?php



namespace {

	/**
	 * 最初の引数で指定したコールバック関数をコールする
	 * <p>パラメータ <code>callback</code> で指定したユーザー定義のコールバック関数をコールします。</p>
	 * @param callable $callback <p>コールする <code>callable</code>。</p>
	 * @param mixed $parameter <p>コールバック関数に渡す、ゼロ個以上のパラメータ。</p>  <p><b>注意</b>:</p> <p><b>call_user_func()</b> のパラメータは 参照渡しではないことに注意しましょう。</p>  <p><b>例1 <b>call_user_func()</b> の例と参照</b></p>  <code> &lt;&#63;php<br>error_reporting(E_ALL);<br>function increment(&amp;$var)<br>{<br>    $var++;<br>}<br><br>$a = 0;<br>call_user_func('increment', $a);<br>echo $a."\n";<br><br>// このようにしてもかまいません<br>call_user_func_array('increment', array(&amp;$a));<br>echo $a."\n";<br>&#63;&gt;  </code>  <p>上の例の出力は以下となります。</p>  <pre> 0 1 </pre>
	 * @param mixed $_
	 * @return mixed <p>コールバック関数の結果を返します。</p>
	 * @link https://php.net/manual/ja/function.call-user-func.php
	 * @see call_user_func_array(), is_callable()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function call_user_func(callable $callback, $parameter = NULL, $_ = NULL) {}

	/**
	 * パラメータの配列を指定してコールバック関数をコールする
	 * <p><code>param_arr</code> にパラメータを指定して、 <code>callback</code> で指定したユーザー定義関数をコールします。</p>
	 * @param callable $callback <p>コールする<code>callable</code>。</p>
	 * @param array $param_arr <p>コールバック関数に渡すパラメータを指定する配列。</p>
	 * @return mixed <p>コールバック関数の結果、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.call-user-func-array.php
	 * @see call_user_func()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function call_user_func_array(callable $callback, array $param_arr) {}

	/**
	 * 匿名関数 (ラムダ形式) を作成する
	 * <p>指定したパラメータにより匿名関数を作成し、その関数のユニークな名前を返します。</p><p>この関数は、内部的に <code>eval()</code> を実行しているので、 <code>eval()</code> と同様にセキュリティ上のリスクがあります。 さらに、パフォーマンスやメモリ使用効率の面でも問題があります。</p><p>PHP 5.3.0 以降を使っている場合は、この関数ではなく、ネイティブの 無名関数 を使うべきです。</p>
	 * @param string $args <p>関数の引数。</p>
	 * @param string $code <p>関数のコード。</p>
	 * @return string <p>一意な関数名を表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.create-function.php
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function create_function(string $args, string $code): string {}

	/**
	 * 静的メソッドをコールする
	 * <p><code>function</code> パラメータで指定したユーザー定義の関数あるいはメソッドを、 それに続く引数を指定してコールします。この関数はメソッドのコンテキストでコールしなければなりません。 クラスの外部で使用することはできません。 この関数は 遅延静的束縛 を使います。</p>
	 * @param callable $function <p>コールしたい関数あるいはメソッド。このパラメータは、 クラス名とメソッド名を指定した配列あるいは関数名を指定した文字列となります。</p>
	 * @param mixed $_ <p>関数に渡したいパラメータ。</p>
	 * @return mixed <p>関数の結果、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.forward-static-call.php
	 * @see forward_static_call_array(), call_user_func_array(), call_user_func(), is_callable()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function forward_static_call(callable $function, $_ = NULL) {}

	/**
	 * 静的メソッドをコールし、引数を配列で渡す
	 * <p><code>function</code> パラメータで指定したユーザー定義の関数あるいはメソッドをコールします。 この関数はメソッドのコンテキストでコールしなければなりません。 クラスの外部で使用することはできません。 この関数は 遅延静的束縛 を使います。 転送先のメソッドへのすべての引数は値渡しで、 <code>call_user_func_array()</code> と同様に配列で指定します。</p>
	 * @param callable $function <p>コールしたい関数あるいはメソッド。このパラメータは、 クラス名とメソッド名を指定した配列あるいは関数名を指定した文字列となります。</p>
	 * @param array $parameters
	 * @return mixed <p>関数の結果、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.forward-static-call-array.php
	 * @see forward_static_call(), call_user_func(), call_user_func_array(), is_callable()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function forward_static_call_array(callable $function, array $parameters) {}

	/**
	 * 引数のリストから要素をひとつ返す
	 * <p>ユーザーが定義した関数の引数リストから、指定した引数を取得します。</p><p>この関数は、 <code>func_num_args()</code>および <code>func_get_args()</code>と組み合わせて使用され、これにより ユーザー定義の関数が可変長の引数リストをとることができるようになります。</p>
	 * @param int $arg_num <p>引数の位置。関数の引数はゼロから数え始めます。</p>
	 * @return mixed <p>指定した引数、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.func-get-arg.php
	 * @see func_get_args(), func_num_args()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function func_get_arg(int $arg_num) {}

	/**
	 * 関数の引数リストを配列として返す
	 * <p>関数の引数リストを配列で取得します。</p><p>この関数は <code>func_num_args()</code> および <code>func_get_arg()</code> と組み合わせて使用され、 これによりユーザー定義の章において可変長の引数リストを使用することができるようになります。</p>
	 * @return array <p>配列を返します。この配列の各要素は、 現在のユーザー定義関数の引数リストにおける対応するメンバのコピーとなります。</p>
	 * @link https://php.net/manual/ja/function.func-get-args.php
	 * @see func_get_arg(), func_num_args()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function func_get_args(): array {}

	/**
	 * 関数に渡された引数の数を返す
	 * <p>関数に渡された引数の数を取得します。</p><p>この関数は <code>func_get_arg()</code> および <code>func_get_args()</code> と組み合わせて使用され、 ユーザー定義関数において可変長の引数リストを使用することができるようになります。</p>
	 * @return int <p>現在のユーザー定義関数に渡された引数の数を返します。</p>
	 * @link https://php.net/manual/ja/function.func-num-args.php
	 * @see func_get_arg(), func_get_args()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function func_num_args(): int {}

	/**
	 * 指定した関数が定義されている場合に TRUE を返す
	 * <p>組み込みの内部関数およびユーザー定義関数の中から、 <code>function_name</code> で指定した名前の関数を探します。</p>
	 * @param string $function_name <p>関数名を表す文字列。</p>
	 * @return bool <p><code>function_name</code> が存在し、関数である場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>この関数は、 <code>include_once</code> や <code>echo</code> のような言語構造については <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.function-exists.php
	 * @see method_exists(), is_callable(), get_defined_functions(), class_exists(), extension_loaded()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function function_exists(string $function_name): bool {}

	/**
	 * 定義済みの全ての関数を配列で返す
	 * <p>すべての定義済み関数を配列で返します。</p>
	 * @param bool $exclude_disabled <p>Whether disabled functions should be excluded from the return value.</p>
	 * @return array <p>この関数は、組込 (内部) 関数およびユーザー定義関数を共に含む定義済み の全ての関数のリストを有する多次元配列を返します。内部関数は、 $arr["internal"]、ユーザー定義関数は $arr["user"] によりアクセス可能となります (以下の例を参照ください)。</p>
	 * @link https://php.net/manual/ja/function.get-defined-functions.php
	 * @see function_exists(), get_defined_vars(), get_defined_constants(), get_declared_classes()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function get_defined_functions(bool $exclude_disabled = FALSE): array {}

	/**
	 * シャットダウン時に実行する関数を登録する
	 * <p>スクリプト処理が完了したとき、あるいは <code>exit()</code> がコールされたときに実行するコールバック関数を登録します。</p><p><b>register_shutdown_function()</b> は複数回コールする ことが可能で、登録された順に関数がコールされます。 登録した関数内で <code>exit()</code> をコールした場合、 処理はそこで終了してその他のシャットダウン関数はコールされません。</p>
	 * @param callable $callback <p>登録するコールバック。</p> <p>シャットダウン時のコールバックは、リクエストの一部として実行されます。 したがって、コールバック関数からも出力を送信できるし、出力バッファにもアクセスできます。</p>
	 * @param mixed $_
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.register-shutdown-function.php
	 * @see exit()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function register_shutdown_function(callable $callback, $_ = NULL): void {}

	/**
	 * 各 tick で実行する関数を登録する
	 * <p>tick がコールされた際に実行される <code>func</code> という名前の関数を登録します。</p>
	 * @param callable $function <p>関数名を表す文字列、あるいはオブジェクトとメソッドを指定した配列。</p>
	 * @param mixed $arg
	 * @param mixed $_
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.register-tick-function.php
	 * @see unregister_tick_function()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function register_tick_function(callable $function, $arg = NULL, $_ = NULL): bool {}

	/**
	 * 各 tick の実行用の関数の登録を解除する
	 * <p><code>function_name</code> という名前の関数の登録を解除します。 これにより、tick がコールされた 場合でもこの関数は実行されなくなります。</p>
	 * @param string $function_name <p>関数名を表す文字列。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.unregister-tick-function.php
	 * @see register_tick_function()
	 * @since PHP 4 >= 4.0.3, PHP 5, PHP 7
	 */
	function unregister_tick_function(string $function_name): void {}

}
