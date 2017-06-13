<?php

// Start of zlib v.7.1.5

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * gz ファイルを出力する
 * @link http://php.net/manual/ja/function.readgzfile.php
 * @param string $filename <p>
 * ファイル名を指定します。このファイルはファイルシステムからオープンされ、
 * 内容は標準出力に書き込まれます。
 * </p>
 * @param int $use_include_path [optional] <p>
 * include_path
 * にあるファイルも検索したい場合、このオプションパラメータを
 * 1 に設定してください。
 * </p>
 * @return int ファイルから読み込んだ (解凍された) データのバイト数を返します。
 * エラーが発生した場合、<b>FALSE</b> が返され、@readgzfile
 * としてコールされている場合を除き、エラーメッセージが出力されます。
 */
function readgzfile(string $filename, int $use_include_path = 0): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * gz ファイルポインタの示す位置を元に戻す
 * @link http://php.net/manual/ja/function.gzrewind.php
 * @param resource $zp <p>
 * gz ファイルポインタを指定します。これは有効なファイルポインタであり、
 * かつ、<b>gzopen</b>
 * によりオープンできたファイルを指している必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function gzrewind($zp): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 開かれたgzファイルへのポインタを閉じる
 * @link http://php.net/manual/ja/function.gzclose.php
 * @param resource $zp <p>
 * gzファイルポインタ。有効なファイルポインタであり、かつ、
 * <b>gzopen</b>
 * によりオープンできたファイルを指している必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function gzclose($zp): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * gz ファイルポインタが EOF かどうか調べる
 * @link http://php.net/manual/ja/function.gzeof.php
 * @param resource $zp <p>
 * gzファイルポインタは、有効なファイルポインタであり、かつ、
 * <b>gzopen</b>によりオープンできたファイルを指している
 * 必要があります。
 * </p>
 * @return int gz ファイルポインタが EOF を指す、もしくはエラーが発生した場合 <b>TRUE</b>、
 * そうでなければ <b>FALSE</b> を返します。
 */
function gzeof($zp): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * gz ファイルへのポインタから文字を得る
 * @link http://php.net/manual/ja/function.gzgetc.php
 * @param resource $zp <p>
 * gz ファイルポインタを指定します。
 * これは有効なファイルポインタであり、かつ、
 * <b>gzopen</b>
 * によりオープンできたファイルを指している必要があります。
 * </p>
 * @return string 非圧縮の文字列、もしくは EOF (<b>gzeof</b> とは異なる)
 * の場合に <b>FALSE</b> を返します。
 */
function gzgetc($zp): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ファイルポインタから 1 行を得る
 * @link http://php.net/manual/ja/function.gzgets.php
 * @param resource $zp <p>
 * gz ファイルポインタを指定します。
 * これは有効なファイルポインタであり、かつ、
 * <b>gzopen</b>
 * によりオープンできたファイルを指している必要があります。
 * </p>
 * @param int $length [optional] <p>
 * 取得するデータ長を指定します。
 * </p>
 * @return string 非圧縮の文字列、もしくはエラー時に <b>FALSE</b>
 */
function gzgets($zp, int $length = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * gzファイルへのポインタから1行を得て、HTMLタグを取り除く
 * @link http://php.net/manual/ja/function.gzgetss.php
 * @param resource $zp <p>
 * gz ファイルポインタを指定します。
 * これは有効なファイルポインタであり、かつ、
 * <b>gzopen</b>
 * によりオープンできたファイルを指している必要があります。
 * </p>
 * @param int $length <p>
 * 取得するデータ長を指定します。
 * </p>
 * @param string $allowable_tags [optional] <p>
 * このオプションパラメータにより、
 * 取り除かないタグを指定することができます。
 * </p>
 * @return string 非圧縮かつタグが取り除かれた文字列、もしくはエラー時に <b>FALSE</b>
 */
function gzgetss($zp, int $length, string $allowable_tags = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * バイナリ対応のgzファイル読み込み
 * @link http://php.net/manual/ja/function.gzread.php
 * @param resource $zp <p>
 * gz ファイルポインタを指定します。これは有効なファイルポインタであり、
 * かつ、<b>gzopen</b>
 * によりオープンできたファイルを指している必要があります。
 * </p>
 * @param int $length <p>
 * 読み込むバイト数を指定します。
 * </p>
 * @return string 読み込まれたデータ
 */
function gzread($zp, int $length): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * gz ファイルを開く
 * @link http://php.net/manual/ja/function.gzopen.php
 * @param string $filename <p>
 * ファイル名を指定します
 * </p>
 * @param string $mode <p>
 * <b>fopen</b> と同じ (rb または
 * wb) ですが、
 * 圧縮レベル (wb9) または圧縮の方策、
 * つまり、wb6f のようにフィルターを通したデータを
 * f で指定したり、h
 * でハフマン圧縮のみを行うことを指定したりすることができます
 * (方策に関するパラメータの詳細については、zlib.h
 * の中の deflateInit2 の説明を参照ください)。
 * </p>
 * @param int $use_include_path [optional] <p>
 * このオプションパラメータを 1 にすることにより、
 * include_pathにあるファイルも
 * 検索することができます。
 * </p>
 * @return resource オープンしたファイルへのファイルポインタを返します。その後、
 * このファイルディスクプリタから読み込んだ全ては透過的に解凍され、
 * 書き込んだものは圧縮されます。
 * </p>
 * <p>
 * オープンに失敗した場合、この関数は <b>FALSE</b> を返します。
 */
function gzopen(string $filename, string $mode, int $use_include_path = 0) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * gzファイルへのポインタから残りのデータ全部を出力する
 * @link http://php.net/manual/ja/function.gzpassthru.php
 * @param resource $zp <p>
 * gz ファイルポインタを指定します。これは有効なファイルポインタであり、
 * かつ、<b>gzopen</b>
 * によりオープンできたファイルを指している必要があります。
 * </p>
 * @return int <i>gz</i> から読み込んで解凍され、入力に渡された文字数。
 * もしくはエラー時に <b>FALSE</b> 。
 */
function gzpassthru($zp): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * gz ファイルポインタの位置を移動する
 * @link http://php.net/manual/ja/function.gzseek.php
 * @param resource $zp <p>
 * gz ファイルポインタを指定します。これは有効なファイルポインタであり、
 * かつ、<b>gzopen</b>
 * によりオープンできたファイルを指している必要があります。
 * </p>
 * @param int $offset <p>
 * 移動するオフセットを指定します。
 * </p>
 * @param int $whence [optional] <p>
 * <i>whence</i> の値は次のいずれかです。
 * <b>SEEK_SET</b> - <i>offset</i> バイト目に設定します。
 * <b>SEEK_CUR</b> - 現在位置から <i>offset</i> ぶん進んだ位置に設定します。
 * </p>
 * <p>
 * <i>whence</i> を省略した場合は
 * <b>SEEK_SET</b> とみなします。
 * </p>
 * @return int 成功した場合、0を返します。それ以外の場合は、-1を返します。
 * 移動がEOFを超える場合にもエラーは発生しないことに注意してください。
 */
function gzseek($zp, int $offset, int $whence = SEEK_SET): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * gz ファイルポインタの読み込み/書き込み位置を返します
 * @link http://php.net/manual/ja/function.gztell.php
 * @param resource $zp <p>
 * gz ファイルポインタを指定します。これは有効なファイルポインタであり、
 * かつ、<b>gzopen</b>
 * によりオープンできたファイルを指している必要があります。
 * </p>
 * @return int ファイルポインタの位置、もしくはエラーが発生した場合 <b>FALSE</b>
 */
function gztell($zp): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * バイナリセーフな gz ファイル書き込み
 * @link http://php.net/manual/ja/function.gzwrite.php
 * @param resource $zp <p>
 * gz ファイルポインタを指定します。これは有効なファイルポインタであり、
 * かつ、<b>gzopen</b>
 * によりオープンできたファイルを指している必要があります。
 * </p>
 * @param string $string <p>
 * 書き込む文字列を指定します。
 * </p>
 * @param int $length [optional] <p>
 * 書き込む解凍されたバイト数を指定します。
 * もし指定された場合、
 * <i>length</i> バイトのデータが書き込まれたか、
 * <i>string</i> の終わりに達した時に
 * 書き込みは終了します。
 * </p>
 * <p>
 * 引数 <i>length</i> が指定された場合、
 * magic_quotes_runtime
 * 設定オプションは無視されて <i>string</i> から
 * スラッシュが取り除かれなくなることに注意してください。
 * </p>
 * @return int 与えられた gz ファイルストリームに書き込まれた (解凍された)
 * バイト数を返します。
 */
function gzwrite($zp, string $string, int $length = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>gzwrite</b> のエイリアス
 * @link http://php.net/manual/ja/function.gzputs.php
 * @param $fp
 * @param $str
 * @param $length [optional]
 */
function gzputs($fp, $str, $length) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * gzファイル全体を配列に読み込む
 * @link http://php.net/manual/ja/function.gzfile.php
 * @param string $filename <p>
 * ファイル名を指定します。
 * </p>
 * @param int $use_include_path [optional] <p>
 * もし include_path
 * にあるファイルも検索したい場合、
 * このオプションパラメータに 1
 * を設定することができます。
 * </p>
 * @return array ファイルを含む配列で、要素毎に 1 行ずつ含んでいます。空行も含み、改行もついた状態です。
 */
function gzfile(string $filename, int $use_include_path = 0): array {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 文字列を圧縮する
 * @link http://php.net/manual/ja/function.gzcompress.php
 * @param string $data <p>
 * 圧縮するデータ
 * </p>
 * @param int $level [optional] <p>
 * 圧縮レベル。0 で圧縮無し、9 で最大限の圧縮を指定できます。
 * </p>
 * <p>
 * -1 を指定すると、zlib ライブラリのデフォルトを使います。デフォルトは 6 です。
 * </p>
 * @param int $encoding [optional] <p>
 * 定数 <b>ZLIB_ENCODING_*</b> のいずれか。
 * </p>
 * @return string 圧縮された文字列、もしくはエラーの場合 <b>FALSE</b> 。
 */
function gzcompress(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_DEFLATE): string {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 圧縮された文字列を解凍する
 * @link http://php.net/manual/ja/function.gzuncompress.php
 * @param string $data <p>
 * <b>gzcompress</b> によって圧縮されたデータを指定します。
 * </p>
 * @param int $length [optional] <p>
 * デコードするデータの最大長を指定します。
 * </p>
 * @return string オリジナルの無圧縮なデータ、もしくはエラー時に <b>FALSE</b>
 * </p>
 * <p>
 * この関数は、もし無圧縮なデータが圧縮された入力 <i>data</i>
 * の 32768 倍、もしくはオプションのパラメータ <i>length</i>
 * 以上の場合、エラーを返します。
 */
function gzuncompress(string $data, int $length = 0): string {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 文字列を deflate 圧縮する
 * @link http://php.net/manual/ja/function.gzdeflate.php
 * @param string $data <p>
 * 収縮させるデータ
 * </p>
 * @param int $level [optional] <p>
 * 圧縮レベル。圧縮しない場合に0、最大限の圧縮をする場合に9を指定可能です。
 * 指定しない場合、デフォルトの圧縮レベルは zlib
 * ライブラリのデフォルト圧縮レベルになります。
 * </p>
 * @param int $encoding [optional] <p>
 * 定数 <b>ZLIB_ENCODING_*</b> のいずれか。
 * </p>
 * @return string 収縮された文字列、もしくはエラーの場合 <b>FALSE</b> 。
 */
function gzdeflate(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_RAW): string {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * deflate圧縮された文字列を解凍する
 * @link http://php.net/manual/ja/function.gzinflate.php
 * @param string $data <p>
 * <b>gzdeflate</b> により圧縮されたデータを指定します
 * </p>
 * @param int $length [optional] <p>
 * デコードする最大データ長を指定します
 * </p>
 * @return string オリジナルの無圧縮なデータ、もしくはエラー時に <b>FALSE</b>
 * </p>
 * <p>
 * この関数は、もし無圧縮なデータが圧縮された入力 <i>data</i>
 * の 32768 倍、もしくはオプションのパラメータ <i>length</i>
 * 以上の場合、エラーを返します。
 */
function gzinflate(string $data, int $length = 0): string {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * gzip 圧縮された文字列を作成する
 * @link http://php.net/manual/ja/function.gzencode.php
 * @param string $data <p>
 * エンコードするデータを指定します
 * </p>
 * @param int $level [optional] <p>
 * 圧縮レベルを指定します。
 * 圧縮をしない場合に 0、最大限の圧縮を行う場合に9を指定可能です。
 * 指定されない場合のデフォルト圧縮レベルは、
 * zlib ライブラリのデフォルト圧縮レベルになります。
 * </p>
 * @param int $encoding_mode [optional] <p>
 * エンコーディングモードを指定します。
 * <b>FORCE_GZIP</b> (デフォルト) もしくは
 * <b>FORCE_DEFLATE</b> を指定可能です。
 * </p>
 * <p>
 * PHP 5.4.0 より前のバージョンでは、<b>FORCE_DEFLATE</b>
 * を使うと、gzip ファイルヘッダに続けて標準的な zlib 圧縮文字列
 * (zlib ヘッダ込み) を出力していました。しかし、その後の crc32
 * チェックサムはありませんでした。
 * </p>
 * <p>
 * PHP 5.4.0 以降は、<b>FORCE_DEFLATE</b> が
 * RFC 1950 準拠の出力を生成するようになりました。zlib ヘッダ、圧縮したデータ、
 * そして Adler チェックサムとなります。
 * </p>
 * @return string エンコードされた文字列、もしくはエラー発生時に <b>FALSE</b>
 */
function gzencode(string $data, int $level = -1, int $encoding_mode = FORCE_GZIP): string {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * gzip 圧縮された文字列をデコードする
 * @link http://php.net/manual/ja/function.gzdecode.php
 * @param string $data <p>
 * デコードするデータ。これは <b>gzencode</b>
 * でエンコードされたものです。
 * </p>
 * @param int $length [optional] <p>
 * デコードするデータの最大長。
 * </p>
 * @return string デコードされた文字列、あるいはエラーが発生した場合に <b>FALSE</b>
 * を返します。
 */
function gzdecode(string $data, int $length = null): string {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * 指定した符号化方式でデータを圧縮する
 * @link http://php.net/manual/ja/function.zlib-encode.php
 * @param string $data <p>
 * 圧縮するデータ。
 * </p>
 * @param string $encoding <p>
 * 圧縮アルゴリズム。
 * <b>ZLIB_ENCODING_RAW</b>、
 * <b>ZLIB_ENCODING_DEFLATE</b>
 * または
 * <b>ZLIB_ENCODING_GZIP</b>
 * 。
 * </p>
 * @param string $level [optional] <p>
 * </p>
 * @return string
 */
function zlib_encode(string $data, string $encoding, string $level = '-1'): string {}

/**
 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
 * raw/gzip/zlib で符号化されたデータを復元する
 * @link http://php.net/manual/ja/function.zlib-decode.php
 * @param string $data <p>
 * </p>
 * @param string $max_decoded_len [optional] <p>
 * </p>
 * @return string 圧縮されていないデータを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function zlib_decode(string $data, string $max_decoded_len = null): string {}

/**
 * (PHP 4 &gt;= 4.3.2, PHP 5, PHP 7)<br/>
 * 出力圧縮に使用されたコーディングの種類を返す
 * @link http://php.net/manual/ja/function.zlib-get-coding-type.php
 * @return string 返される値は gzip, deflate,
 * もしくは <b>FALSE</b> です。
 */
function zlib_get_coding_type(): string {}

/**
 * @param $encoding
 * @param $level [optional]
 */
function deflate_init($encoding, $level) {}

/**
 * @param $resource
 * @param $add
 * @param $flush_behavior [optional]
 */
function deflate_add($resource, $add, $flush_behavior) {}

/**
 * @param $encoding
 */
function inflate_init($encoding) {}

/**
 * @param $resource
 * @param $flush_behavior
 */
function inflate_add($resource, $flush_behavior) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 出力バッファを gzip 圧縮するための ob_start コールバック関数
 * @link http://php.net/manual/ja/function.ob-gzhandler.php
 * @param string $buffer
 * @param int $mode
 * @return string
 */
function ob_gzhandler(string $buffer, int $mode): string {}

define ('FORCE_GZIP', 31);
define ('FORCE_DEFLATE', 15);

/**
 * RFC 1951 の DEFLATE アルゴリズム。PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_ENCODING_RAW', -15);

/**
 * RFC 1952 の GZIP アルゴリズム。PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_ENCODING_GZIP', 31);

/**
 * RFC 1950 の ZLIB 圧縮アルゴリズム。PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_ENCODING_DEFLATE', 15);

/**
 * PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_NO_FLUSH', 0);

/**
 * PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_PARTIAL_FLUSH', 1);

/**
 * PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_SYNC_FLUSH', 2);

/**
 * PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_FULL_FLUSH', 3);

/**
 * PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_BLOCK', 5);

/**
 * PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_FINISH', 4);

/**
 * PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_FILTERED', 1);

/**
 * PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_HUFFMAN_ONLY', 2);

/**
 * PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_RLE', 3);

/**
 * PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_FIXED', 4);

/**
 * PHP 7.0.0 以降で利用可能です。
 * @link http://php.net/manual/ja/zlib.constants.php
 */
define ('ZLIB_DEFAULT_STRATEGY', 0);
define ('ZLIB_VERSION', "1.2.8");
define ('ZLIB_VERNUM', 4736);

// End of zlib v.7.1.5
?>
