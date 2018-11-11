<?php



/**
 * bz 圧縮されたファイルを読み込み、クラスを生成する
 * <p>bzip 圧縮されたファイルを読み込み、バイトコードからクラスを生成します。</p>
 * @param string $filename <p>bzcompress されたファイルのパスを表す文字列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-load.php
 * @see bcompiler_load_exe()
 * @since PECL bcompiler >= 0.4
 */
function bcompiler_load(string $filename): bool {}

/**
 * bcompiler の exe ファイルを読み込み、クラスを生成する
 * <p>bcompiler の exe ファイルからデータを読み込み、バイトコードからクラスを生成します。</p>
 * @param string $filename <p>exe ファイルのパスを表す文字列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-load-exe.php
 * @see bcompiler_load()
 * @since PECL bcompiler >= 0.4
 */
function bcompiler_load_exe(string $filename): bool {}

/**
 * クラスのバイトコードを読み込み、ユーザー関数をコールする
 * <p>クラスのバイトコードを読み込み、ユーザー関数をコールします。</p>
 * @param string $class <p>クラス名を表す文字列。</p>
 * @param string $callback
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-parse-class.php
 * @since PECL bcompiler >= 0.4
 */
function bcompiler_parse_class(string $class, string $callback): bool {}

/**
 * ファイルハンドルを読み込み、クラスを生成する
 * <p>開いているファイルハンドルからデータを読み込み、バイトコードからクラスを生成します。</p>
 * @param resource $filehandle <p><code>fopen()</code> が返すファイルハンドル。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-read.php
 * @since PECL bcompiler >= 0.4
 */
function bcompiler_read($filehandle): bool {}

/**
 * 定義したクラスをバイトコードとして書き込む
 * <p>この関数は、PHP から既存のクラスをバイトコードとして読み込み、 開かれているファイルハンドルに書き込みます。</p>
 * @param resource $filehandle <p><code>fopen()</code> が返すファイルハンドル。</p>
 * @param string $className <p>クラス名を表す文字列。</p>
 * @param string $extends
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-write-class.php
 * @see bcompiler_write_header(), bcompiler_write_footer()
 * @since PECL bcompiler >= 0.4
 */
function bcompiler_write_class($filehandle, string $className, string $extends = NULL): bool {}

/**
 * 定義した定数をバイトコードとして書き込む
 * <p>この関数は、PHP から既存の定数をバイトコードとして読み込み、 開かれているファイルハンドルに書き込みます。</p>
 * @param resource $filehandle <p><code>fopen()</code> が返すファイルハンドル。</p>
 * @param string $constantName <p>定義済みの定数名を表す文字列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-write-constant.php
 * @see bcompiler_write_header(), bcompiler_write_footer()
 * @since PECL bcompiler >= 0.5
 */
function bcompiler_write_constant($filehandle, string $constantName): bool {}

/**
 * 開始位置および exe 形式ファイルのフッタを書き込む
 * <p>EXE (あるいは実行可能) ファイルは、三つの部分からできています。</p><p>bcompiler の CVS 上で examples/embed ディレクトリにある、 php_embed ベースのスタブ phpe.c をコンパイルすることで 適切なスタブが取得できます。</p>
 * @param resource $filehandle <p><code>fopen()</code> が返すファイルハンドル。</p>
 * @param int $startpos <p>ファイル内でのバイトコードの開始位置。 ftell($fh) を使用して取得することが可能です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-write-exe-footer.php
 * @see bcompiler_write_header(), bcompiler_write_class(), bcompiler_write_footer()
 * @since PECL bcompiler >= 0.4
 */
function bcompiler_write_exe_footer($filehandle, int $startpos): bool {}

/**
 * php ソースファイルをバイトコードとして書き込む
 * <p>この関数は、指定したソースファイルをバイトコードにコンパイルし、 開かれているファイルハンドルに書き込みます。</p>
 * @param resource $filehandle <p><code>fopen()</code> が返すファイルハンドル。</p>
 * @param string $filename <p>ソースファイルのパスを表す文字列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-write-file.php
 * @see bcompiler_write_header(), bcompiler_write_footer()
 * @since PECL bcompiler >= 0.6
 */
function bcompiler_write_file($filehandle, string $filename): bool {}

/**
 * コンパイルされたデータの終了を示す文字 \x00 を書き込む
 * <p>コンパイルされたデータの終了を示す文字 <i>\x00</i> を書き込みます。</p>
 * @param resource $filehandle <p><code>fopen()</code> が返すファイルハンドル。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-write-footer.php
 * @see bcompiler_write_header()
 * @since PECL bcompiler >= 0.4
 */
function bcompiler_write_footer($filehandle): bool {}

/**
 * 定義した関数をバイトコードとして書き込む
 * <p>この関数は、PHP から既存の関数をバイトコードとして読み込み、 開かれているファイルハンドルに書き込みます。書き込む順序を気にする 必要はありません (例えば、関数 b が関数 a を使用している場合に 下の例のようにコンパイルしたとしても正常に動作します)。</p>
 * @param resource $filehandle <p><code>fopen()</code> が返すファイルハンドル。</p>
 * @param string $functionName <p>関数名を表す文字列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-write-function.php
 * @see bcompiler_write_header(), bcompiler_write_footer()
 * @since PECL bcompiler >= 0.5
 */
function bcompiler_write_function($filehandle, string $functionName): bool {}

/**
 * ファイル内で定義されているすべての関数をバイトコードとして書き込む
 * <p>指定したファイル内で定義されているすべての関数を検索し、 対応するバイトコードを、 開かれているファイルハンドルに書き込みます。</p>
 * @param resource $filehandle <p><code>fopen()</code> が返すファイルハンドル。</p>
 * @param string $fileName <p>コンパイルしたいファイル。 コンパイルしたいファイルを include/require することを忘れないでください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-write-functions-from-file.php
 * @see bcompiler_write_header(), bcompiler_write_footer()
 * @since PECL bcompiler >= 0.5
 */
function bcompiler_write_functions_from_file($filehandle, string $fileName): bool {}

/**
 * bcompiler のヘッダを書き込む
 * <p>bcompiler ファイルのヘッダを書き込みます。</p>
 * @param resource $filehandle <p><code>fopen()</code> が返すファイルハンドル。</p>
 * @param string $write_ver <p>以前に使われていたフォーマットでバイトコードを書き込む際に使用します。 これにより、古いバージョンの bcompiler でバイトコードを使用することが可能となります。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-write-header.php
 * @see bcompiler_write_footer()
 * @since PECL bcompiler >= 0.3
 */
function bcompiler_write_header($filehandle, string $write_ver = NULL): bool {}

/**
 * インクルードされたファイルをバイトコードとして書き込む
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $filehandle
 * @param string $filename
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.bcompiler-write-included-filename.php
 * @since PECL bcompiler >= 0.5
 */
function bcompiler_write_included_filename($filehandle, string $filename): bool {}

