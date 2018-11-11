<?php



/**
 * クラス名。 クラス名には、そのクラスが宣言されている名前空間も含みます (例 <i>Foo\Bar</i>)。 PHP 5.4 以降では、__CLASS__ がトレイトでも使えることに注意しましょう。トレイトのメソッド内で __CLASS__ を使うと、そのトレイトを use しているクラスの名前を返します。
 */
define('__CLASS__', null);

/**
 * そのファイルの存在するディレクトリ。include の中で使用すると、 インクルードされるファイルの存在するディレクトリを返します。 つまり、これは <i>dirname(__FILE__)</i> と同じ意味です。 ルートディレクトリである場合を除き、ディレクトリ名の末尾にスラッシュはつきません。
 */
define('__DIR__', null);

/**
 * ファイルのフルパスとファイル名 (シンボリックリンクを解決した後のもの)。 インクルードされるファイルの中で使用された場合、インクルードされるファイルの名前が返されます。
 */
define('__FILE__', null);

/**
 * 関数名。
 */
define('__FUNCTION__', null);

/**
 * ファイル上の現在の行番号。
 */
define('__LINE__', null);

/**
 * クラスのメソッド名。
 */
define('__METHOD__', null);

/**
 * 現在の名前空間の名前。
 */
define('__NAMESPACE__', null);

/**
 * トレイト名 トレイト名には、宣言された名前空間も含みます (例 <i>Foo\Bar</i>)。
 */
define('__TRAIT__', null);

