<?php



namespace {

	/**
	 * ある基底クラスを、他のクラスを継承させたクラスに変換する。親クラスの適切なメソッドを追加する
	 * @param string $classname <p>変換の対象となるクラス。</p>
	 * @param string $parentname <p>継承させる親クラス。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-class-adopt.php
	 * @see runkit_class_emancipate()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_class_adopt(string $classname, string $parentname): bool {}

	/**
	 * 他のクラスを継承しているクラスから継承関係を解消し、 親クラスから継承しているメソッドを取り除く
	 * @param string $classname <p>継承関係を解消するクラス。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-class-emancipate.php
	 * @see runkit_class_adopt()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_class_emancipate(string $classname): bool {}

	/**
	 * define() と同じだが、クラス定数も指定可能
	 * @param string $constname <p>定義する定数名。グローバル定数を表す文字列、あるいは <i>classname::constname</i> 形式でクラス定数を示す。</p>
	 * @param mixed $value <p>新しい定数に定義する値。 NULL, Bool, Long, Double, String, あるいは Resource のいずれかの型の値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-constant-add.php
	 * @see define(), runkit_constant_redefine(), runkit_constant_remove()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_constant_add(string $constname, $value): bool {}

	/**
	 * 定義済みの定数を再定義する
	 * @param string $constname <p>再定義する定数名。グローバル定数を表す文字列、あるいは <i>classname::constname</i> 形式でクラス定数を示す。</p>
	 * @param mixed $newvalue <p>定数に新しく設定する値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-constant-redefine.php
	 * @see runkit_constant_add(), runkit_constant_remove()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_constant_redefine(string $constname, $newvalue): bool {}

	/**
	 * 定義済みの定数を削除する
	 * @param string $constname <p>削除する定数名。グローバル定数を表す文字列、あるいは <i>classname::constname</i> 形式でクラス定数を示す。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-constant-remove.php
	 * @see define(), runkit_constant_add(), runkit_constant_redefine()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_constant_remove(string $constname): bool {}

	/**
	 * Add a new function, similar to create_function()
	 * @param string $funcname <p>Name of function to be created</p>
	 * @param string $arglist <p>Comma separated argument list</p>
	 * @param string $code <p>Code making up the function</p>
	 * @param bool $return_by_reference <p>Whether the function should return by reference.</p>
	 * @param string $doc_comment <p>The doc comment of the function.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-function-add.php
	 * @see create_function(), runkit_function_redefine(), runkit_function_copy(), runkit_function_rename(), runkit_function_remove(), runkit_method_add()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_function_add(string $funcname, string $arglist, string $code, bool $return_by_reference = NULL, string $doc_comment = NULL): bool {}

	/**
	 * 関数を別の名前でコピーする
	 * @param string $funcname <p>既存の関数の名前。</p>
	 * @param string $targetname <p>コピー後の新しい関数の名前。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-function-copy.php
	 * @see runkit_function_add(), runkit_function_redefine(), runkit_function_rename(), runkit_function_remove()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_function_copy(string $funcname, string $targetname): bool {}

	/**
	 * Replace a function definition with a new implementation
	 * <p><b>注意</b>: デフォルトでは、 削除・リネーム・変更が可能なのはユーザー定義関数だけです。組み込み関数を オーバーライドするには、php.ini で <i>runkit.internal_override</i> を有効にする必要があります。 </p>
	 * @param string $funcname <p>Name of function to redefine</p>
	 * @param string $arglist <p>New list of arguments to be accepted by function</p>
	 * @param string $code <p>New code implementation</p>
	 * @param bool $return_by_reference <p>Whether the function should return by reference.</p>
	 * @param string $doc_comment <p>The doc comment of the function.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-function-redefine.php
	 * @see runkit_function_add(), runkit_function_copy(), runkit_function_rename(), runkit_function_remove(), runkit_method_redefine()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_function_redefine(string $funcname, string $arglist, string $code, bool $return_by_reference = NULL, string $doc_comment = NULL): bool {}

	/**
	 * 関数の定義を削除する
	 * <p><b>注意</b>: デフォルトでは、 削除・リネーム・変更が可能なのはユーザー定義関数だけです。組み込み関数を オーバーライドするには、php.ini で <i>runkit.internal_override</i> を有効にする必要があります。 </p>
	 * @param string $funcname <p>削除する関数の名前。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-function-remove.php
	 * @see runkit_function_add(), runkit_function_copy(), runkit_function_redefine(), runkit_function_rename()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_function_remove(string $funcname): bool {}

	/**
	 * 関数名を変更する
	 * <p><b>注意</b>: デフォルトでは、 削除・リネーム・変更が可能なのはユーザー定義関数だけです。組み込み関数を オーバーライドするには、php.ini で <i>runkit.internal_override</i> を有効にする必要があります。 </p>
	 * @param string $funcname <p>現在の関数名。</p>
	 * @param string $newname <p>新しい関数名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-function-rename.php
	 * @see runkit_function_add(), runkit_function_copy(), runkit_function_redefine(), runkit_function_remove()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_function_rename(string $funcname, string $newname): bool {}

	/**
	 * ファイルから関数やクラスの定義を読み込み、必要に応じて書き換える
	 * <p><code>include</code> と似ていますが、関数やクラスの外部に あるコードは無視されます。 また、<code>flags</code> の設定により、 現在実行中の環境内の既存の関数やクラスを自動的に上書きします。</p>
	 * @param string $filename <p>関数やクラスの定義を読み込むファイル名。</p>
	 * @param int $flags <p><i>RUNKIT_IMPORT_&#42;</i> 系の定数の論理和。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-import.php
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_import(string $filename, int $flags = RUNKIT_IMPORT_CLASS_METHODS): bool {}

	/**
	 * 指定した PHP コードの文法をチェックする
	 * <p><b>runkit_lint()</b> 関数は、指定した PHP コードの 文法チェック（lint）を行い、スクリプトのエラーをチェックします。 これは、コマンドラインから php -l を実行するのと同じですが、 <b>runkit_lint()</b> はファイル名ではなくコードそのものを 受け付けます。</p><p><b>注意</b>:  サンドボックスのサポート (<b>runkit_lint()</b>, <code>runkit_lint_file()</code>, および <b>Runkit_Sandbox</b> クラスで使用)は、 PHP 5.1.0 以降または特別なパッチを適用した PHP 5.0 でのみ利用可能であり、スレッドセーフを有効にしておく必要があります。 詳細については、runkit パッケージに含まれる README ファイルを参照してください。</p>
	 * @param string $code <p>チェック対象の PHP コード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-lint.php
	 * @see runkit_lint_file()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_lint(string $code): bool {}

	/**
	 * 指定したファイルの PHP 文法をチェックする
	 * <p><b>runkit_lint_file()</b> 関数は、指定したファイルの 文法チェック（lint）を行い、スクリプトのエラーをチェックします。 これは、コマンドラインから php -l を実行するのと同じです。</p><p><b>注意</b>:  サンドボックスのサポート (<code>runkit_lint()</code>, <b>runkit_lint_file()</b>, および <b>Runkit_Sandbox</b> クラスで使用)は、 PHP 5.1.0 以降または特別なパッチを適用した PHP 5.0 でのみ利用可能であり、スレッドセーフを有効にしておく必要があります。 詳細については、runkit パッケージに含まれる README ファイルを参照してください。</p>
	 * @param string $filename <p>PHP コードを含む、チェック対象のファイル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-lint-file.php
	 * @see runkit_lint()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_lint_file(string $filename): bool {}

	/**
	 * Dynamically adds a new method to a given class
	 * @param string $classname <p>The class to which this method will be added</p>
	 * @param string $methodname <p>The name of the method to add</p>
	 * @param string $args <p>Comma-delimited list of arguments for the newly-created method</p>
	 * @param string $code <p>The code to be evaluated when <code>methodname</code> is called</p>
	 * @param int $flags <p>The type of method to create, can be <b><code>RUNKIT_ACC_PUBLIC</code></b>, <b><code>RUNKIT_ACC_PROTECTED</code></b> or <b><code>RUNKIT_ACC_PRIVATE</code></b> optionally combined via bitwise OR with <b><code>RUNKIT_ACC_STATIC</code></b> (since 1.0.1)</p>
	 * @param string $doc_comment <p>The doc comment of the function.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-method-add.php
	 * @see runkit_method_copy(), runkit_method_redefine(), runkit_method_remove(), runkit_method_rename(), runkit_function_add()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_method_add(string $classname, string $methodname, string $args, string $code, int $flags = RUNKIT_ACC_PUBLIC, string $doc_comment = NULL): bool {}

	/**
	 * あるクラスのメソッドを別のクラスにコピーする
	 * @param string $dClass <p>メソッドのコピー先のクラス。</p>
	 * @param string $dMethod <p>コピー先のメソッド名。</p>
	 * @param string $sClass <p>メソッドのコピー元のクラス。</p>
	 * @param string $sMethod <p>元のクラスからコピーするメソッドの名前。指定されなかった場合は <code>dMethod</code> と同じであるとみなされます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-method-copy.php
	 * @see runkit_method_add(), runkit_method_redefine(), runkit_method_remove(), runkit_method_rename(), runkit_function_copy()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_method_copy(string $dClass, string $dMethod, string $sClass, string $sMethod = NULL): bool {}

	/**
	 * Dynamically changes the code of the given method
	 * <p><b>注意</b>: この関数は、 現在実行中(もしくはチェーンド)のメソッドを操作することはできません。</p>
	 * @param string $classname <p>The class in which to redefine the method</p>
	 * @param string $methodname <p>The name of the method to redefine</p>
	 * @param string $args <p>Comma-delimited list of arguments for the redefined method</p>
	 * @param string $code <p>The new code to be evaluated when <code>methodname</code> is called</p>
	 * @param int $flags <p>The redefined method can be <b><code>RUNKIT_ACC_PUBLIC</code></b>, <b><code>RUNKIT_ACC_PROTECTED</code></b> or <b><code>RUNKIT_ACC_PRIVATE</code></b> optionally combined via bitwise OR with <b><code>RUNKIT_ACC_STATIC</code></b> (since 1.0.1)</p>
	 * @param string $doc_comment <p>The doc comment of the function.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-method-redefine.php
	 * @see runkit_method_add(), runkit_method_copy(), runkit_method_remove(), runkit_method_rename(), runkit_function_redefine()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_method_redefine(string $classname, string $methodname, string $args, string $code, int $flags = RUNKIT_ACC_PUBLIC, string $doc_comment = NULL): bool {}

	/**
	 * 指定したメソッドを動的に削除する
	 * <p><b>注意</b>: この関数は、 現在実行中(もしくはチェーンド)のメソッドを操作することはできません。</p>
	 * @param string $classname <p>メソッドを削除するクラス。</p>
	 * @param string $methodname <p>削除するメソッドの名前。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-method-remove.php
	 * @see runkit_method_add(), runkit_method_copy(), runkit_method_redefine(), runkit_method_rename(), runkit_function_remove()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_method_remove(string $classname, string $methodname): bool {}

	/**
	 * 指定したメソッドの名前を動的に変更する
	 * <p><b>注意</b>: この関数は、 現在実行中(もしくはチェーンド)のメソッドを操作することはできません。</p>
	 * @param string $classname <p>メソッド名を変更するクラス。</p>
	 * @param string $methodname <p>変更するメソッドの名前。</p>
	 * @param string $newname <p>変更後のメソッドの名前。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-method-rename.php
	 * @see runkit_method_add(), runkit_method_copy(), runkit_method_redefine(), runkit_method_remove(), runkit_function_rename()
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_method_rename(string $classname, string $methodname, string $newname): bool {}

	/**
	 * 現在の関数の返り値が使用されているかどうかを調べる
	 * @return bool <p>呼び出し元のスコープで関数の返り値が使用されている場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-return-value-used.php
	 * @since PECL runkit >= 0.8.0
	 */
	function runkit_return_value_used(): bool {}

	/**
	 * サンドボックス内での出力を取得・処理するための関数を指定する
	 * <p>通常、<code>echo</code> や <code>print</code> などのあらゆる出力は、親のスコープから出力しているかのように出力されます。 しかし、<b>runkit_sandbox_output_handler()</b> を使用すると サンドボックス内の出力（エラーを含む）をサンドボックス外で受け取ることが 可能です。</p><p><b>注意</b>:  サンドボックスのサポート (<code>runkit_lint()</code>, <code>runkit_lint_file()</code>, および <b>Runkit_Sandbox</b> クラスで使用)は、 PHP 5.1.0 以降または特別なパッチを適用した PHP 5.0 でのみ利用可能であり、スレッドセーフを有効にしておく必要があります。 詳細については、runkit パッケージに含まれる README ファイルを参照してください。</p><p><b>注意</b>: <b>非推奨</b><br></p><p>runkit バージョン 0.5 以降この関数は非推奨となっており、1.0 が リリースされるまでに削除される予定です。指定した Runkit_Sandbox インスタンスの出力ハンドラは、配列オフセット構文を使用して 取得/設定が可能です。この方法について、 Runkit_Sandbox のクラス定義で説明しています。</p>
	 * @param object $sandbox <p>出力の処理を設定する Runkit_Sandbox クラスのインスタンス。</p>
	 * @param mixed $callback <p>ひとつのパラメータを受け取る関数の名前。 <code>sandbox</code> による出力がこのコールバックに 渡されます。コールバックが返す値は通常通り表示されます。 このパラメータが渡されなかった場合、出力の操作方法は変わりません。 真でない値が渡された場合、出力の操作は無効となり直接表示されます。</p>
	 * @return mixed <p>前に定義されていた出力ハンドラコールバックの名前を返します。 ハンドラが定義されていなかった場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.runkit-sandbox-output-handler.php
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_sandbox_output_handler(object $sandbox, $callback = NULL) {}

	/**
	 * 登録されているスーパーグローバルを、数値添字の配列で返す
	 * @return array <p>登録されているスーパーグローバルを、数値添字の配列で返します。 スーパーグローバルとは、例えば _GET、_POST、_REQUEST、_COOKIE、_SESSION、_SERVER、_ENV、_FILES などです。</p>
	 * @link https://php.net/manual/ja/function.runkit-superglobals.php
	 * @since PECL runkit >= 0.7.0
	 */
	function runkit_superglobals(): array {}

	/**
	 * <code>classkit_import()</code> の PHP5 限定のフラグです。 classkit 互換モードが有効になっている場合にのみ定義されます。
	 */
	define('CLASSKIT_AGGREGATE_OVERRIDE', null);

	/**
	 * runkit パッケージのバージョンを定義します。 classkit 互換モードが有効になっている場合にのみ定義されます。
	 */
	define('CLASSKIT_VERSION', null);

	/**
	 * <code>runkit_method_add()</code> および <code>runkit_method_redefine()</code> の PHP5 限定のフラグです。
	 */
	define('RUNKIT_ACC_PRIVATE', null);

	/**
	 * <code>runkit_method_add()</code> および <code>runkit_method_redefine()</code> の PHP5 限定のフラグです。
	 */
	define('RUNKIT_ACC_PROTECTED', null);

	/**
	 * <code>runkit_method_add()</code> および <code>runkit_method_redefine()</code> の PHP5 限定のフラグです。
	 */
	define('RUNKIT_ACC_PUBLIC', null);

	/**
	 * <code>runkit_method_add()</code> および <code>runkit_method_redefine()</code> の PHP5 限定のフラグです。Runkit 1.0.1 以降で使用可能です。
	 */
	define('RUNKIT_ACC_STATIC', null);

	/**
	 * <code>runkit_import()</code> のフラグで、 指定したファイルからクラス定数が読み込まれることを示します。 このフラグは PHP のバージョン 5.1.0 以降でしか意味を持たないことに 注意しましょう。
	 */
	define('RUNKIT_IMPORT_CLASS_CONSTS', null);

	/**
	 * <code>runkit_import()</code> のフラグで、 指定したファイルからクラスメソッドが読み込まれることを示します。
	 */
	define('RUNKIT_IMPORT_CLASS_METHODS', null);

	/**
	 * <code>runkit_import()</code> のフラグで、 指定したファイルからクラスのプロパティが読み込まれることを示します。
	 */
	define('RUNKIT_IMPORT_CLASS_PROPS', null);

	/**
	 * <code>runkit_import()</code> のフラグで、 指定したファイルからクラスの static プロパティが読み込まれることを示します。 Runkit 1.0.1 以降で使用可能です。
	 */
	define('RUNKIT_IMPORT_CLASS_STATIC_PROPS', null);

	/**
	 * <code>runkit_import()</code> のフラグで、 <b><code>RUNKIT_IMPORT_CLASS_&#42;</code></b> の論理和（ビット OR）を表します。
	 */
	define('RUNKIT_IMPORT_CLASSES', null);

	/**
	 * <code>runkit_import()</code> のフラグで、 指定したファイルから通常の関数が読み込まれることを示します。
	 */
	define('RUNKIT_IMPORT_FUNCTIONS', null);

	/**
	 * <code>runkit_import()</code> のフラグで、 すでに存在する関数・メソッド・定数 あるいはプロパティが指定された場合に新しい定義で置き換えることを 示します。このフラグが設定されていない場合、すでに定義されている 内容については新しい定義は無視されます。
	 */
	define('RUNKIT_IMPORT_OVERRIDE', null);

	/**
	 * runkit パッケージのバージョンを定義します。
	 */
	define('RUNKIT_VERSION', null);

}
