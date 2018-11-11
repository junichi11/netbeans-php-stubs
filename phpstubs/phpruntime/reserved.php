<?php



define('DEFAULT_INCLUDE_PATH', '.:/usr/share/php');

define('E_ALL', 32767);

define('E_COMPILE_ERROR', 64);

define('E_COMPILE_WARNING', 128);

define('E_CORE_ERROR', 16);

define('E_CORE_WARNING', 32);

/**
 * PHP 5.3.0 以降で利用可能
 */
define('E_DEPRECATED', 8192);

/**
 * エラーを報告する定数
 */
define('E_ERROR', 1);

define('E_NOTICE', 8);

define('E_PARSE', 4);

define('E_STRICT', 2048);

/**
 * PHP 5.3.0 以降で利用可能
 */
define('E_USER_DEPRECATED', 16384);

define('E_USER_ERROR', 256);

define('E_USER_NOTICE', 1024);

define('E_USER_WARNING', 512);

define('E_WARNING', 2);

/**
 * Booleans も参照ください。
 */
define('FALSE', false);

/**
 * Null も参照ください。
 */
define('NULL', null);

define('PEAR_EXTENSION_DIR', '/usr/lib/php/20170718');

define('PEAR_INSTALL_DIR', '/usr/share/php');

/**
 * スクリプト実行時の PHP バイナリのパス。 PHP 5.4 以降で利用可能。
 */
define('PHP_BINARY', '/usr/bin/php7.2');

/**
 * バイナリのインストール先。
 */
define('PHP_BINDIR', '/usr/bin');

define('PHP_CONFIG_FILE_PATH', '/etc/php/7.2/cli');

define('PHP_CONFIG_FILE_SCAN_DIR', '/etc/php/7.2/cli/conf.d');

define('PHP_DATADIR', '/usr/share/php/7.2');

/**
 * PHP 5.2.7 以降で利用可能。
 */
define('PHP_DEBUG', 0);

/**
 * このプラットフォームの行末文字。 PHP 5.0.2 以降で利用可能。
 */
define('PHP_EOL', '
');

define('PHP_EXTENSION_DIR', '/usr/lib/php/20170718');

/**
 * 現在の PHP の追加バージョンを文字列で表したもの (たとえば、バージョンが "5.2.7-extra" の場合は '-extra' となる)。 ディストリビューションのベンダーが、パッケージのバージョンを示すために使うことが多い。 PHP 5.2.7 以降で利用可能。
 */
define('PHP_EXTRA_VERSION', '-0ubuntu0.18.04.1');

/**
 * select システムコール用のファイルディスクリプタの最大数。 PHP 7.1.0 以降で使用可能です。
 */
define('PHP_FD_SETSIZE', 1024);

/**
 * float への丸めやその逆操作の際に精度を維持できる数値の桁数。 PHP 7.2.0 以降で利用可能。
 */
define('PHP_FLOAT_DIG', 15);

/**
 * <i>x + 1.0 != 1.0</i> となる正の数 x のうちで、浮動小数点数値として表せる最小の数。 PHP 7.2.0 以降で利用可能。
 */
define('PHP_FLOAT_EPSILON', 2.2204460492503E-16);

/**
 * 浮動小数点数値として表せる最大の数。 PHP 7.2.0 以降で利用可能。
 */
define('PHP_FLOAT_MAX', 1.7976931348623E+308);

/**
 * 浮動小数点数値として表せる最小の数。 PHP 7.2.0 以降で利用可能。
 */
define('PHP_FLOAT_MIN', 2.2250738585072E-308);

/**
 * この PHP がサポートする整数型の最大値。通常は int(2147483647)。 PHP 5.0.5 以降で利用可能。
 */
define('PHP_INT_MAX', 9223372036854775807);

/**
 * この PHP がサポートする整数型の最小値。通常は、32ビットシステムなら int(-2147483648)、 64ビットシステムなら int(-9223372036854775808)。 PHP 7.0.0 以降で利用可能。 通常は PHP_INT_MIN === ~PHP_INT_MAX となる。
 */
define('PHP_INT_MIN', -9223372036854775808);

/**
 * この PHP ビルドにおける整数型のサイズ (バイト数)。 PHP 5.0.5 以降で利用可能。
 */
define('PHP_INT_SIZE', 8);

define('PHP_LIBDIR', '/usr/lib/php');

define('PHP_LOCALSTATEDIR', '/var');

/**
 * 現在の PHP のメジャーバージョンを整数値で表したもの (たとえば、バージョンが "5.2.7-extra" の場合は int(5) となる)。 PHP 5.2.7 以降で利用可能。
 */
define('PHP_MAJOR_VERSION', 7);

/**
 * man ページのインストール先。 PHP 5.3.7 以降で利用可能。
 */
define('PHP_MANDIR', '/usr/share/man');

/**
 * この PHP がサポートする、ファイル名の長さ (パスを含む) の最大値。 PHP 5.3.0 以降で利用可能。
 */
define('PHP_MAXPATHLEN', 4096);

/**
 * 現在の PHP のマイナーバージョンを整数値で表したもの (たとえば、バージョンが "5.2.7-extra" の場合は int(2) となる)。 PHP 5.2.7 以降で利用可能。
 */
define('PHP_MINOR_VERSION', 2);

/**
 * PHP がビルドされた OS。
 */
define('PHP_OS', 'Linux');

/**
 * The operating system family PHP was built for. Either of <i>'Windows'</i>, <i>'BSD'</i>, <i>'Darwin'</i>, <i>'Solaris'</i>, <i>'Linux'</i> or <i>'Unknown'</i>. PHP 7.2.0 以降で利用可能。
 */
define('PHP_OS_FAMILY', 'Linux');

/**
 * configure 時に設定された "--prefix" の値。
 */
define('PHP_PREFIX', '/usr');

/**
 * 現在の PHP のリリースバージョンを整数値で表したもの (たとえば、バージョンが "5.2.7-extra" の場合は int(7) となる)。 PHP 5.2.7 以降で利用可能。
 */
define('PHP_RELEASE_VERSION', 10);

/**
 * この PHP のサーバー API。 <code>php_sapi_name()</code> も参照ください。
 */
define('PHP_SAPI', 'cli');

/**
 * このプラットフォームの共有ライブラリの拡張子。"so" (多くの Unix 系 OS) や "dll" (Windows) など。
 */
define('PHP_SHLIB_SUFFIX', 'so');

define('PHP_SYSCONFDIR', '/etc');

/**
 * 現在の PHP のバージョンを "major.minor.release[extra]" 形式の文字列で表したもの。
 */
define('PHP_VERSION', '7.2.10-0ubuntu0.18.04.1');

/**
 * 現在の PHP のバージョンを整数値で表したもの。バージョンを比較する際に有用 (たとえば、バージョンが "5.2.7-extra" の場合は int(50207) となる)。 PHP 5.2.7 以降で利用可能。
 */
define('PHP_VERSION_ID', 70210);

/**
 * PHP 5.2.7 以降で利用可能。
 */
define('PHP_ZTS', 0);

/**
 * Booleans も参照ください。
 */
define('TRUE', true);

