<?php



/**
 * 新しいクラスメソッドの定義をファイルから読み込む
 * <p><b>注意</b>: この関数により現在実行中 (もしくはチェーンド)のメソッドを操作することはできません。</p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
 * @param string $filename <p>クラスメソッドが定義されているファイルの名前。</p>
 * @return array <p>読み込まれたメソッドの連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.classkit-import.php
 * @see classkit_method_add(), classkit_method_copy()
 * @since PECL classkit >= 0.3
 */
function classkit_import(string $filename): array {}

/**
 * 指定したクラスに、新しいメソッドを動的に追加する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
 * @param string $classname <p>メソッドを追加するクラスの名前。</p>
 * @param string $methodname <p>追加するメソッドの名前。</p>
 * @param string $args <p>カンマで区切った、新しいメソッドの引数。</p>
 * @param string $code <p><code>methodname</code> がコールされた際に 評価されるコード。</p>
 * @param int $flags <p>作成するメソッドの型。 <b><code>CLASSKIT_ACC_PUBLIC</code></b>、 <b><code>CLASSKIT_ACC_PROTECTED</code></b> あるいは <b><code>CLASSKIT_ACC_PRIVATE</code></b> のいずれか。</p>  <p><b>注意</b>:</p> <p>このパラメータは PHP 5 以降でのみ使用されます。なぜなら、それ以前の バージョンでは全てのメソッドが public だからです。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.classkit-method-add.php
 * @see classkit_method_copy(), classkit_method_redefine(), classkit_method_remove(), classkit_method_rename(), create_function()
 * @since PECL classkit >= 0.1
 */
function classkit_method_add(string $classname, string $methodname, string $args, string $code, int $flags = CLASSKIT_ACC_PUBLIC): bool {}

/**
 * あるクラスのメソッドを別のクラスにコピーする
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
 * @param string $dClass <p>メソッドのコピー先のクラス。</p>
 * @param string $dMethod <p>コピー先のメソッド名。</p>
 * @param string $sClass <p>メソッドのコピー元のクラス。</p>
 * @param string $sMethod <p>元のクラスからコピーするメソッドの名前。指定されなかった場合は <code>dMethod</code> と同じであるとみなされます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.classkit-method-copy.php
 * @see classkit_method_add(), classkit_method_redefine(), classkit_method_remove(), classkit_method_rename()
 * @since PECL classkit >= 0.2
 */
function classkit_method_copy(string $dClass, string $dMethod, string $sClass, string $sMethod = NULL): bool {}

/**
 * 指定されたメソッドのコードを動的に変更する
 * <p><b>注意</b>: この関数により現在実行中 (もしくはチェーンド)のメソッドを操作することはできません。</p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
 * @param string $classname <p>メソッドを再定義するクラス。</p>
 * @param string $methodname <p>再定義するメソッドの名前。</p>
 * @param string $args <p>カンマで区切られた、再定義後のメソッドの引数。</p>
 * @param string $code <p><code>methodname</code> がコールされた際に 評価される、新しいコード。</p>
 * @param int $flags <p>再定義するメソッドの型。 <b><code>CLASSKIT_ACC_PUBLIC</code></b>、 <b><code>CLASSKIT_ACC_PROTECTED</code></b> あるいは <b><code>CLASSKIT_ACC_PRIVATE</code></b> のいずれか。</p>  <p><b>注意</b>:</p> <p>このパラメータは PHP 5 以降でのみ使用されます。なぜなら、それ以前の バージョンでは全てのメソッドが public だからです。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.classkit-method-redefine.php
 * @see classkit_method_add(), classkit_method_copy(), classkit_method_remove(), classkit_method_rename()
 * @since PECL classkit >= 0.1
 */
function classkit_method_redefine(string $classname, string $methodname, string $args, string $code, int $flags = CLASSKIT_ACC_PUBLIC): bool {}

/**
 * 指定したメソッドを動的に削除する
 * <p><b>注意</b>: この関数により現在実行中 (もしくはチェーンド)のメソッドを操作することはできません。</p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
 * @param string $classname <p>メソッドを削除するクラス。</p>
 * @param string $methodname <p>削除するメソッドの名前。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.classkit-method-remove.php
 * @see classkit_method_add(), classkit_method_copy(), classkit_method_redefine(), classkit_method_rename()
 * @since PECL classkit >= 0.1
 */
function classkit_method_remove(string $classname, string $methodname): bool {}

/**
 * 指定したメソッドの名前を動的に変更する
 * <p><b>注意</b>: この関数により現在実行中 (もしくはチェーンド)のメソッドを操作することはできません。</p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
 * @param string $classname <p>メソッド名を変更するクラス。</p>
 * @param string $methodname <p>変更するメソッドの名前。</p>
 * @param string $newname <p>変更後のメソッドの名前。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.classkit-method-rename.php
 * @see classkit_method_add(), classkit_method_copy(), classkit_method_redefine(), classkit_method_remove()
 * @since PECL classkit >= 0.1
 */
function classkit_method_rename(string $classname, string $methodname, string $newname): bool {}

/**
 * メソッドを <i>private</i> としてマークする
 */
define('CLASSKIT_ACC_PRIVATE', null);

/**
 * メソッドを <i>protected</i> としてマークする
 */
define('CLASSKIT_ACC_PROTECTED', null);

/**
 * メソッドを <i>public</i> としてマークする
 */
define('CLASSKIT_ACC_PUBLIC', null);

