<?php

// Start of bz2 v.7.0.19

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * bzip2 圧縮されたファイルをオープンする
 * @link http://php.net/manual/ja/function.bzopen.php
 * @param mixed $file <p>
 * オープンするファイル名、あるいは既存のストリームリソース
 * </p>
 * @param string $mode <p>
 * 'r' (読み込み) と 'w' (書き込み) だけをサポートしています。
 * それ以外を指定すると <b>bzopen</b> は <b>FALSE</b> を返します。
 * </p>
 * @return resource オープンできなかった場合、<b>bzopen</b> は <b>FALSE</b>
 * を返します。それ以外の場合は、
 * 新規にオープンされたファイルへのポインタが返されます。
 */
function bzopen($file, string $mode) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * バイナリ対応の bzip2 ファイル読み込み
 * @link http://php.net/manual/ja/function.bzread.php
 * @param resource $bz <p>
 * ファイルポインタ。これは有効である必要があり、
 * <b>bzopen</b> によりオープンされたファイルを指してい
 * る必要があります。
 * </p>
 * @param int $length [optional] <p>
 * 指定されない場合、<b>bzread</b>
 * は一度に (圧縮前の状態で) 1024バイト読み込みます。
 * 最大で 8192 バイト (圧縮前) までを一度に読み込みます。
 * </p>
 * @return string 非圧縮データ、もしくはエラー時に <b>FALSE</b> を返します。
 */
function bzread($bz, int $length = 1024): string {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * バイナリ対応の bzip2 ファイルへの書き込み
 * @link http://php.net/manual/ja/function.bzwrite.php
 * @param resource $bz <p>
 * ファイルポインタ。これは有効である必要があり、
 * <b>bzopen</b> によりオープンされたファイルを指してい
 * る必要があります。
 * </p>
 * @param string $data <p>
 * 書き込むデータ
 * </p>
 * @param int $length [optional] <p>
 * 指定した場合、
 * (圧縮前の) <i>length</i> バイト分の書き込みが終ったか、
 * <i>data</i> の終端に達したかで書き込みは終了します。
 * </p>
 * @return int 書き込んだバイト数、もしくはエラー時に <b>FALSE</b> を返します。
 */
function bzwrite($bz, string $data, int $length = null): int {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 全てのバッファリングされたデータを強制的に書き込む
 * @link http://php.net/manual/ja/function.bzflush.php
 * @param resource $bz <p>
 * ファイルポインタ。これは有効である必要があり、
 * <b>bzopen</b> によりオープンされたファイルを指してい
 * る必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function bzflush($bz): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * bzip2 ファイルを閉じる
 * @link http://php.net/manual/ja/function.bzclose.php
 * @param resource $bz <p>
 * ファイルポインタ。これは有効である必要があり、
 * <b>bzopen</b> によりオープンされたファイルを指してい
 * る必要があります。
 * </p>
 * @return int 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function bzclose($bz): int {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * bzip2 エラー番号を返す
 * @link http://php.net/manual/ja/function.bzerrno.php
 * @param resource $bz <p>
 * ファイルポインタ。これは有効である必要があり、
 * <b>bzopen</b> によりオープンされたファイルを指してい
 * る必要があります。
 * </p>
 * @return int 整数としてのエラー番号を返します。
 */
function bzerrno($bz): int {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * bzip2 エラー文字列を返す
 * @link http://php.net/manual/ja/function.bzerrstr.php
 * @param resource $bz <p>
 * ファイルポインタ。これは有効である必要があり、
 * <b>bzopen</b> によりオープンされたファイルを指してい
 * る必要があります。
 * </p>
 * @return string エラーメッセージを含む文字列を返します。
 */
function bzerrstr($bz): string {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * bzip2 エラー番号とエラー文字列を配列で返す
 * @link http://php.net/manual/ja/function.bzerror.php
 * @param resource $bz <p>
 * ファイルポインタ。これは有効である必要があり、
 * <b>bzopen</b> によりオープンされたファイルを指してい
 * る必要があります。
 * </p>
 * @return array errno エントリにエラーコード、errstr
 * エントリにエラーメッセージを持つ連想配列を返します。
 */
function bzerror($bz): array {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 文字列をbzip2形式のデータに圧縮する
 * @link http://php.net/manual/ja/function.bzcompress.php
 * @param string $source <p>
 * 圧縮する文字列
 * </p>
 * @param int $blocksize [optional] <p>
 * 圧縮時のブロック長を指定します。
 * 1 から 9 の数とする必要があります。この場合、9
 * の圧縮度が最大ですが、リソースの消費量も最大となります。
 * </p>
 * @param int $workfactor [optional] <p>
 * 繰り返しが多い、最悪の入力データの場合の圧縮処理の動作を制御します。
 * この値は、0 から 250 までとなり、0 は特別な場合です。
 * </p>
 * <p>
 * <i>workfactor</i> によらず、
 * 生成される出力は同じになります。
 * </p>
 * @return mixed 圧縮された文字列、もしくはエラー時はエラー数
 */
function bzcompress(string $source, int $blocksize = 4, int $workfactor = 0) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * bzip2 形式のデータを解凍する
 * @link http://php.net/manual/ja/function.bzdecompress.php
 * @param string $source <p>
 * 解凍する文字列
 * </p>
 * @param int $small [optional] <p>
 * <b>TRUE</b> の場合、よりメモリの消
 * 費量が少ない (所要メモリは最大2300K程度まで少なくなります)
 * 別の圧縮アルゴリズムが使用されますが、速度は約半分になってしまいます。
 * </p>
 * <p>
 * この機能に関する詳細については、bzip2
 * ドキュメント を参照ください。
 * </p>
 * @return mixed 解凍された文字列列、もしくはエラー時はエラー数
 */
function bzdecompress(string $source, int $small = 0) {}

// End of bz2 v.7.0.19
?>
