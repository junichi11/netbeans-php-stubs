<?php



/**
 * 未定義のクラスのロードを試みる
 * <p>この関数を定義すれば、クラスのオートローディング を有効にできます。</p>
 * @param string $class <p>ロードするクラスの名前。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.autoload.php
 * @see spl_autoload_register()
 * @since PHP 5, PHP 7
 */
function __autoload(string $class): void {}

/**
 * 指定したオブジェクトのユーザーメソッドをコールする
 * @param string $method_name <p>コールするメソッド名。</p>
 * @param object $obj <p>コールする <code>method_name</code> があるオブジェクト。</p>
 * @param mixed $parameter <p>オプションのパラメータ。</p>
 * @param mixed $_
 * @return mixed
 * @link http://php.net/manual/ja/function.call-user-method.php
 * @see call_user_func_array(), call_user_func()
 * @since PHP 4, PHP 5
 */
function call_user_method(string $method_name, object &$obj, $parameter = NULL, $_ = NULL) {}

/**
 * パラメータの配列を指定してユーザーメソッドをコールする
 * @param string $method_name <p>コールするメソッド名。</p>
 * @param object $obj <p>コールする <code>method_name</code> があるオブジェクト。</p>
 * @param array $params <p>パラメータの配列。</p>
 * @return mixed
 * @link http://php.net/manual/ja/function.call-user-method-array.php
 * @see call_user_func_array(), call_user_func()
 * @since PHP 4 >= 4.0.5, PHP 5
 */
function call_user_method_array(string $method_name, object &$obj, array $params) {}

/**
 * クラスのエイリアスを作成する
 * <p><code>alias</code> という名前のエイリアスを、 ユーザー定義のクラス <code>original</code> に対して作成します。 エイリアスは、元のクラスとまったく同一のものとなります。</p>
 * @param string $original <p>元となるクラス。</p>
 * @param string $alias <p>クラスのエイリアス名。</p>
 * @param bool $autoload <p>元のクラスが見つからない場合にオートロードするかどうか。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.class-alias.php
 * @see get_parent_class(), is_subclass_of()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function class_alias(string $original, string $alias, bool $autoload = TRUE): bool {}

/**
 * クラスが定義済みかどうかを確認する
 * <p>この関数は指定したクラスが定義されているかどうかを調べます。</p>
 * @param string $class_name <p>クラス名。大文字小文字は区別しません。</p>
 * @param bool $autoload <p>デフォルトで __autoload をコールするかしないか。</p>
 * @return bool <p>クラス <code>class_name</code> が定義されている場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.class-exists.php
 * @see function_exists(), interface_exists(), get_declared_classes()
 * @since PHP 4, PHP 5, PHP 7
 */
function class_exists(string $class_name, bool $autoload = TRUE): bool {}

/**
 * "静的遅延束縛" のクラス名
 * <p>静的メソッドのコール元のクラス名を取得します。</p>
 * @return string <p>クラス名を返します。クラスの外部からコールされた場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.get-called-class.php
 * @see get_parent_class(), get_class(), is_subclass_of()
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function get_called_class(): string {}

/**
 * オブジェクトのクラス名を返す
 * <p>指定した <code>object</code> のクラス名を取得します。</p>
 * @param object $object <p>調べるオブジェクト。クラスの内部ではこのパラメータを省略することもできます。</p> <p><b>注意</b>:  Explicitly passing <b><code>NULL</code></b> as the <code>object</code> is no longer allowed as of PHP 7.2.0.   The parameter is still optional and calling <b>get_class()</b> without a parameter from inside a class will work, but passing <b><code>NULL</code></b> now emits an <b><code>E_WARNING</code></b> notice. </p>
 * @return string <p>オブジェクト <code>object</code> がインスタンス であるクラスの名前を返します。<code>object</code> がオブジェクトでない場合には<b><code>FALSE</code></b>が返されます。</p><p>クラスの内部で <code>object</code> を省略すると、 そのクラスの名前を返します。</p><p>If the <code>object</code> is an instance of a class which exists in a namespace, the qualified namespaced name of that class is returned.</p>
 * @link http://php.net/manual/ja/function.get-class.php
 * @see get_called_class(), get_parent_class(), gettype(), is_subclass_of()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_class(object $object = NULL): string {}

/**
 * クラスメソッドの名前を取得する
 * <p>クラスメソッドの名前を取得します。</p>
 * @param mixed $class_name <p>オブジェクトのインスタンスのクラス名。</p>
 * @return array <p>この関数は、指定したクラス <code>class_name</code> についてメソッドの名前を配列として返します。 エラー時には <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.get-class-methods.php
 * @see get_class(), get_class_vars(), get_object_vars()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_class_methods($class_name): array {}

/**
 * クラスのデフォルトプロパティを取得する
 * <p>指定したクラスのデフォルトプロパティを取得します。</p>
 * @param string $class_name <p>クラス名。</p>
 * @return array <p>宣言されているプロパティのうち、現在のスコープから見えるものとそのデフォルト値を連想配列で返します。 返される配列要素は、<code>変数名 =&gt; 値</code> の形式となります。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.get-class-vars.php
 * @see get_class_methods(), get_object_vars()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_class_vars(string $class_name): array {}

/**
 * 定義済のクラスの名前を配列として返す
 * <p>Gets the declared classes.</p>
 * @return array <p>この関数は、現在のスクリプトで宣言されたクラスの名前の配列を返します。</p> <p><b>注意</b>:</p> <p>PHP にコンパイル時に組み込んだり読み込んだりしている拡張モジュールの種類に依存して、 他のクラスも存在する可能性があることに注意しましょう。 これは、自作のクラスをそれらと同じ名前で作成できないことを意味します。 定義済みのクラスについては付録の定義済みクラスのセクションを 参照してください。</p>
 * @link http://php.net/manual/ja/function.get-declared-classes.php
 * @see class_exists(), get_declared_interfaces(), get_defined_functions()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_declared_classes(): array {}

/**
 * 宣言されている全てのインターフェイスの配列を返す
 * <p>宣言されているインターフェイスを取得します。</p>
 * @return array <p>現在のスクリプトで宣言されているインターフェイス名の配列を返します。</p>
 * @link http://php.net/manual/ja/function.get-declared-interfaces.php
 * @see interface_exists(), get_declared_classes(), class_implements()
 * @since PHP 5, PHP 7
 */
function get_declared_interfaces(): array {}

/**
 * 宣言されているすべてのトレイトの配列を返す
 * @return array <p>宣言されているすべてのトレイトの名前を値に持つ配列を返します。 失敗した場合は <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.get-declared-traits.php
 * @see class_uses(), trait_exists()
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function get_declared_traits(): array {}

/**
 * 指定したオブジェクトのプロパティを取得する
 * <p>指定した <code>object</code> について、 そのスコープ内でアクセス可能な非 static プロパティを取得します。</p>
 * @param object $object <p>オブジェクトのインスタンス。</p>
 * @return array <p>指定したオブジェクト <code>object</code> について、 そのスコープ内でアクセス可能な非 static プロパティを連想配列として返します。 プロパティに値が設定されていない場合は、<b><code>NULL</code></b> 値が返されます。</p>
 * @link http://php.net/manual/ja/function.get-object-vars.php
 * @see get_class_methods(), get_class_vars()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_object_vars(object $object): array {}

/**
 * オブジェクトの親クラスの名前を取得する
 * <p>オブジェクトあるいはクラスの親クラスの名前を取得します。</p>
 * @param mixed $object <p>調べたいオブジェクトあるいはクラスの名前。 オブジェクトのメソッドからコールされた場合、このパラメータはオプションとなります。</p>
 * @return string <p><code>object</code> がインスタンスあるいは名前であるクラスの親クラス名を返します。</p> <p><b>注意</b>:</p> <p>オブジェクトが親を持たない場合や指定したクラスが存在しない場合は <b><code>FALSE</code></b> を返します。</p> <p>オブジェクトの外部からこのパラメータを省略してコールすると、 この関数は <b><code>FALSE</code></b> を返します</p>
 * @link http://php.net/manual/ja/function.get-parent-class.php
 * @see get_class(), is_subclass_of(), class_parents()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_parent_class($object = NULL): string {}

/**
 * インターフェイスが宣言されているかどうかを確認する
 * <p>指定したインターフェイスが定義されているかどうかを調べます。</p>
 * @param string $interface_name <p>インターフェイス名。</p>
 * @param bool $autoload <p>デフォルトで __autoload をコールするかどうか。</p>
 * @return bool <p><code>interface_name</code> で与えられたインターフェイスが宣言されていれば <b><code>TRUE</code></b> を返します。 そうでなければ <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.interface-exists.php
 * @see get_declared_interfaces(), class_implements(), class_exists()
 * @since PHP 5 >= 5.0.2, PHP 7
 */
function interface_exists(string $interface_name, bool $autoload = TRUE): bool {}

/**
 * オブジェクトがこのクラスのものであるか、このクラスをその親クラスのひとつとしているかどうかを調べる
 * <p>指定した <code>object</code> がこのクラスのものであるか、 あるいはこのクラスをその親クラスのひとつとしているかどうかを調べます。</p>
 * @param object $object <p>調べたいオブジェクト。</p>
 * @param string $class_name <p>クラス名。</p>
 * @param bool $allow_string <p>このパラメータを <b><code>FALSE</code></b> にすると、 クラス名を表す文字列を <code>object</code> に指定できなくなります。 そして、クラスが存在しない場合のオートローダーの呼び出しもしなくなります。</p>
 * @return bool <p>オブジェクトがこのクラスのものであるか、 あるいはこのクラスをその親クラスのひとつとしている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-a.php
 * @see get_class(), get_parent_class(), is_subclass_of()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function is_a(object $object, string $class_name, bool $allow_string = FALSE): bool {}

/**
 * あるオブジェクトが指定したクラスのサブクラスに属するか (あるいは指定したインターフェイスを実装しているか) どうかを調べる
 * <p>指定した <code>object</code> が、その親のひとつに <code>class_name</code> を持つか (あるいは <code>class_name</code> を実装しているか) どうかを調べます。</p>
 * @param mixed $object <p>クラス名あるいはオブジェクトのインスタンス。 そのクラスが存在しなくても、エラーにはなりません。</p>
 * @param string $class_name <p>クラス名。</p>
 * @param bool $allow_string <p>このパラメータを false にすると、 クラス名を表す文字列を <code>object</code> に指定できなくなります。 そして、クラスが存在しない場合のオートローダーの呼び出しもしなくなります。</p>
 * @return bool <p>この関数は、オブジェクト <code>object</code> が <code>superclass</code> のサブクラスであるクラスに属する場合に <b><code>TRUE</code></b>、その他の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.is-subclass-of.php
 * @see get_class(), get_parent_class(), is_a(), class_parents()
 * @since PHP 4, PHP 5, PHP 7
 */
function is_subclass_of($object, string $class_name, bool $allow_string = TRUE): bool {}

/**
 * クラスメソッドが存在するかどうかを確認する
 * <p>指定した <code>object</code> にクラスメソッドが存在するかどうかを調べます。</p>
 * @param mixed $object <p>オブジェクトのインスタンス、あるいはクラス名。</p>
 * @param string $method_name <p>メソッドの名前。</p>
 * @return bool <p><code>method_name</code> で指定したメソッドが 指定した <code>object</code> において定義されている場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.method-exists.php
 * @see function_exists(), is_callable(), class_exists()
 * @since PHP 4, PHP 5, PHP 7
 */
function method_exists($object, string $method_name): bool {}

/**
 * オブジェクトもしくはクラスにプロパティが存在するかどうかを調べる
 * <p>この関数は、与えられたプロパティ <code>property</code> が 指定されたクラスに存在するかどうかを確認します。</p><p><b>注意</b>:</p><p><code>isset()</code> とは対照的に、 プロパティの値が <b><code>NULL</code></b> の場合でも <b>property_exists()</b> は <b><code>TRUE</code></b> を返します。</p>
 * @param mixed $class <p>確認するクラス名、もしくはクラスのオブジェクトを指定します。</p>
 * @param string $property <p>プロパティ名を指定します。</p>
 * @return bool <p>プロパティが存在している場合は <b><code>TRUE</code></b>、存在していない場合に <b><code>FALSE</code></b>、 エラー時には <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.property-exists.php
 * @see method_exists()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function property_exists($class, string $property): bool {}

/**
 * トレイトが存在するかどうかを調べる
 * @param string $traitname <p>調べたいトレイトの名前。</p>
 * @param bool $autoload <p>まだロードされていない場合にオートロードするかどうか。</p>
 * @return bool <p>トレイトが存在する場合に <b><code>TRUE</code></b>、存在しない場合に <b><code>FALSE</code></b>、エラーが発生した場合に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.trait-exists.php
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function trait_exists(string $traitname, bool $autoload = NULL): bool {}

