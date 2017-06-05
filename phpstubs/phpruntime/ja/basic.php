<?php


/**
 * ファイルのフルパスとファイル名 (シンボリックリンクを解決した後のもの)。
 * インクルードされるファイルの中で使用された場合、インクルードされるファイルの名前が返されます。
 * @link http://php.net/manual/ja/language.constants.php
 */
define ('__FILE__', null);

/**
 * ファイル上の現在の行番号。
 * @link http://php.net/manual/ja/language.constants.php
 */
define ('__LINE__', null);

/**
 * クラス名。
 * クラス名には、そのクラスが宣言されている名前空間も含みます
 * (例 Foo\Bar)。
 * PHP 5.4 以降では、__CLASS__ がトレイトでも使えることに注意しましょう。トレイトのメソッド内で
 * __CLASS__ を使うと、そのトレイトを use しているクラスの名前を返します。
 * @link http://php.net/manual/ja/language.constants.php
 */
define ('__CLASS__', null);

/**
 * <b>__FILE__</b> に常に絶対パスを含め、シンボリックリンクも解決するようになりました。
 * これより前のバージョンでは、場合によっては相対パスが含まれていることもありました。
 * @link http://php.net/manual/ja/language.constants.php
 */
define ('__FUNCTION__', null);

/**
 * これより前のバージョンでは、マジック定数のうちのいくつかが、常に小文字化されていました。
 * このバージョン以降は、すべて大文字小文字を区別する (宣言したとおりに設定される) ようになります。
 * @link http://php.net/manual/ja/language.constants.php
 */
define ('__METHOD__', null);

/**
 * <b>__DIR__</b> と <b>__NAMESPACE__</b> が追加されました。
 * @link http://php.net/manual/ja/language.constants.php
 */
define ('__TRAIT__', null);

/**
 * そのファイルの存在するディレクトリ。include の中で使用すると、
 * インクルードされるファイルの存在するディレクトリを返します。
 * つまり、これは dirname(__FILE__) と同じ意味です。
 * ルートディレクトリである場合を除き、ディレクトリ名の末尾にスラッシュはつきません。
 * @link http://php.net/manual/ja/language.constants.php
 */
define ('__DIR__', null);

/**
 * 現在の名前空間の名前。
 * @link http://php.net/manual/ja/language.constants.php
 */
define ('__NAMESPACE__', null);
?>
