<?php



namespace {

	/**
	 * bzip2 ファイルを閉じる
	 * <p>与えられた bzip2 ファイルポインタを閉じます。</p>
	 * @param resource $bz <p>ファイルポインタ。これは有効である必要があり、 <code>bzopen()</code> によりオープンされたファイルを指している必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.bzclose.php
	 * @see bzopen()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzclose($bz): bool {}

	/**
	 * 文字列をbzip2形式のデータに圧縮する
	 * <p><b>bzcompress()</b> は、与えられた文字列を圧縮し、 bzip2 形式のデータとして返します。</p>
	 * @param string $source <p>圧縮する文字列</p>
	 * @param int $blocksize <p>圧縮時のブロック長を指定します。 1 から 9 の数とする必要があります。この場合、9 の圧縮度が最大ですが、リソースの消費量も最大となります。</p>
	 * @param int $workfactor <p>繰り返しが多い、最悪の入力データの場合の圧縮処理の動作を制御します。 この値は、0 から 250 までとなり、0 は特別な場合です。</p> <p><code>workfactor</code> によらず、 生成される出力は同じになります。</p>
	 * @return mixed <p>圧縮された文字列、もしくはエラー時はエラー数</p>
	 * @link https://php.net/manual/ja/function.bzcompress.php
	 * @see bzdecompress()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzcompress(string $source, int $blocksize = 4, int $workfactor = 0) {}

	/**
	 * bzip2 形式のデータを解凍する
	 * <p><b>bzdecompress()</b> は、bzip2 形式のデータを含む文字列を解凍します。</p>
	 * @param string $source <p>解凍する文字列</p>
	 * @param int $small <p><b><code>TRUE</code></b> の場合、よりメモリの消 費量が少ない (所要メモリは最大2300K程度まで少なくなります) 別の圧縮アルゴリズムが使用されますが、速度は約半分になってしまいます。</p> <p>この機能に関する詳細については、» bzip2 ドキュメント を参照ください。</p>
	 * @return mixed <p>解凍された文字列列、もしくはエラー時はエラー数</p>
	 * @link https://php.net/manual/ja/function.bzdecompress.php
	 * @see bzcompress()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzdecompress(string $source, int $small = 0) {}

	/**
	 * bzip2 エラー番号を返す
	 * <p>与えられたファイルポインタから返された bzip2 エラーのエラー番号を返します。</p>
	 * @param resource $bz <p>ファイルポインタ。これは有効である必要があり、 <code>bzopen()</code> によりオープンされたファイルを指してい る必要があります。</p>
	 * @return int <p>整数としてのエラー番号を返します。</p>
	 * @link https://php.net/manual/ja/function.bzerrno.php
	 * @see bzerror(), bzerrstr()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzerrno($bz): int {}

	/**
	 * bzip2 エラー番号とエラー文字列を配列で返す
	 * <p>与えられたファイルポインタから返された bzip2 エラーのエラー番号とエラー文字列を返します。</p>
	 * @param resource $bz <p>ファイルポインタ。これは有効である必要があり、 <code>bzopen()</code> によりオープンされたファイルを指してい る必要があります。</p>
	 * @return array <p><i>errno</i> エントリにエラーコード、<i>errstr</i> エントリにエラーメッセージを持つ連想配列を返します。</p>
	 * @link https://php.net/manual/ja/function.bzerror.php
	 * @see bzerrno(), bzerrstr()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzerror($bz): array {}

	/**
	 * bzip2 エラー文字列を返す
	 * <p>与えられたファイルポインタから返された bzip2 エラーのエラーの文字列を返します。</p>
	 * @param resource $bz <p>ファイルポインタ。これは有効である必要があり、 <code>bzopen()</code> によりオープンされたファイルを指してい る必要があります。</p>
	 * @return string <p>エラーメッセージを含む文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.bzerrstr.php
	 * @see bzerrno(), bzerror()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzerrstr($bz): string {}

	/**
	 * 全てのバッファリングされたデータを強制的に書き込む
	 * <p>バッファリングされた全ての bzip2 データをファイルポインタ <code>bz</code> に書き込みます。</p>
	 * @param resource $bz <p>ファイルポインタ。これは有効である必要があり、 <code>bzopen()</code> によりオープンされたファイルを指してい る必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.bzflush.php
	 * @see bzread(), bzwrite()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzflush($bz): bool {}

	/**
	 * bzip2 圧縮されたファイルをオープンする
	 * <p><b>bzopen()</b> は、 bzip2 (.bz2) ファイルを読み書き用にオープンします。</p>
	 * @param mixed $file <p>オープンするファイル名、あるいは既存のストリームリソース</p>
	 * @param string $mode <p>'r' (読み込み) と 'w' (書き込み) だけをサポートしています。 それ以外を指定すると <b>bzopen()</b> は <b><code>FALSE</code></b> を返します。</p>
	 * @return resource <p>オープンできなかった場合、<b>bzopen()</b> は <b><code>FALSE</code></b> を返します。それ以外の場合は、 新規にオープンされたファイルへのポインタが返されます。</p>
	 * @link https://php.net/manual/ja/function.bzopen.php
	 * @see bzclose()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzopen($file, string $mode) {}

	/**
	 * バイナリ対応の bzip2 ファイル読み込み
	 * <p><b>bzread()</b> は、与えられた bzip2 ファイルポインタから読み込みます。</p><p>読み込みは、(圧縮前の状態で) <code>length</code> バイトが読み込まれたか、EOF に達したかのどちらか最初に来た方で終了します。</p>
	 * @param resource $bz <p>ファイルポインタ。これは有効である必要があり、 <code>bzopen()</code> によりオープンされたファイルを指してい る必要があります。</p>
	 * @param int $length <p>指定されない場合、<b>bzread()</b> は一度に (圧縮前の状態で) 1024バイト読み込みます。 最大で 8192 バイト (圧縮前) までを一度に読み込みます。</p>
	 * @return string <p>非圧縮データ、もしくはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.bzread.php
	 * @see bzwrite(), feof(), bzopen()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzread($bz, int $length = 1024): string {}

	/**
	 * バイナリ対応の bzip2 ファイルへの書き込み
	 * <p><b>bzwrite()</b> は、文字列を与えられた bzip2 ファイルストリームに書き込みます。</p>
	 * @param resource $bz <p>ファイルポインタ。これは有効である必要があり、 <code>bzopen()</code> によりオープンされたファイルを指してい る必要があります。</p>
	 * @param string $data <p>書き込むデータ</p>
	 * @param int $length <p>指定した場合、 (圧縮前の) <code>length</code> バイト分の書き込みが終ったか、 <code>data</code> の終端に達したかで書き込みは終了します。</p>
	 * @return int <p>書き込んだバイト数、もしくはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.bzwrite.php
	 * @see bzread(), bzopen()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function bzwrite($bz, string $data, int $length = NULL): int {}

}
