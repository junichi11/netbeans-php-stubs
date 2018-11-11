<?php



/**
 * <p>ラージバイナリ (BLOB) および キャラクタオブジェクト (CLOB) に対する OCI8 ラージオブジェクト (LOB) 機能です。</p>
 * @link http://php.net/manual/ja/class.OCI-Lob.php
 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
 */
class OCI_Lob {

	/**
	 * ラージオブジェクトのデータを他のラージオブジェクトに追加する
	 * <p>ラージオブジェクトのデータを他のラージオブジェクトに追加します。</p><p>前もってバッファリングが有効になっている場合、 <b>OCI-Lob-&gt;append()</b> を使ったラージオブジェクトの書き込みは失敗するでしょう。 追加の前にバッファリングを無効にしなければなりません。 バッファリングを無効にする前に、 OCI-Lob::flush によってバッファをフラッシュする必要があるかも知れません。</p>
	 * @param \OCI_Lob $lob_from <p>コピーする LOB。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.append.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function append(\OCI_Lob $lob_from): bool {}

	/**
	 * LOB ディスクリプタを閉じる
	 * <p><b>OCI-Lob-&gt;close()</b> は LOB あるいは FILE のディスクリプタを閉じます。この関数は OCI-Lob::writeTemporary を併用した場合のみ使用されるべきです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.close.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function close(): bool {}

	/**
	 * ラージオブジェクトのディスクリプタが EOF かどうかを調べる
	 * <p>ラージオブジェクトの内部ポインタが LOB の最後にあるかどうかを調べます。</p>
	 * @return bool <p>もし、ラージオブジェクトの内部ポインタが LOB の最後にあるとき、 <b><code>TRUE</code></b> を返します。その他の場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.eof.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function eof(): bool {}

	/**
	 * 内部 LOB データの特定の位置を消去する
	 * <p>指定された <code>offset</code> から始まる内部 LOB データの特定の位置を消去します。 パラメータなしでコールすると、すべての LOB データを消去します。</p><p>BLOB の場合、消去するということは存在する LOB の値が 0 バイトで上書きされる、ということを意味します。 CLOB の場合、存在する LOB の値はスペースで上書きされる、ということです。</p>
	 * @param int $offset
	 * @param int $length
	 * @return int <p>消去された実際の文字数あるいはバイト数、失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/oci-lob.erase.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function erase(int $offset = NULL, int $length = NULL): int {}

	/**
	 * LOB の内容をファイルに出力する
	 * <p>LOB の内容をファイルに出力します。</p>
	 * @param string $filename <p>ファイルへのパス。</p>
	 * @param int $start <p>出力を開始する位置。</p>
	 * @param int $length <p>出力するデータの長さ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.export.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function export(string $filename, int $start = NULL, int $length = NULL): bool {}

	/**
	 * LOB のバッファをサーバーにフラッシュする、あるいは書き込む
	 * <p><b>OCI-Lob::flush()</b> は実際にサーバーにデータを書き込みます。</p>
	 * @param int $flag <p>デフォルトではリソースは解放されませんが、フラグ <b><code>OCI_LOB_BUFFER_FREE</code></b> を使用することで明示的に行うことができます。 あなたが何をしようとしているかを理解しておいてください - 次に LOB の同じ箇所に読み書きしようとする場合、 サーバーへのラウンドトリップを伴い、 新しいバッファリソースが初期化されるでしょう。 もはや LOB に対して何も行わない場合のみ、 <b><code>OCI_LOB_BUFFER_FREE</code></b> フラグを使用することが推奨されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>バッファリングが有効でない、あるいはエラーが発生した場合、 <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.flush.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function flush(int $flag = NULL): bool {}

	/**
	 * LOB ディスクリプタに関連付けられたりソースを解放する
	 * <p>事前に <code>oci_new_descriptor()</code> を使用して割り当てられた ディスクリプタに関連付けられたりソースを解放します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.free.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function free(): bool {}

	/**
	 * ラージオブジェクトに対する現在のバッファリングの状態を返す
	 * <p>ラージオブジェクトに対するバッファリングが有効か無効かを調べます。</p>
	 * @return bool <p>もしラージオブジェクトに対するバッファリングが無効な場合は <b><code>FALSE</code></b>、 有効な場合は <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.getbuffering.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function getBuffering(): bool {}

	/**
	 * ファイルデータを LOB にインポートする
	 * <p><code>filename</code> からのデータをラージオブジェクトの現在の位置に書き込みます。</p>
	 * @param string $filename <p>ファイルへのパス。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.import.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function import(string $filename): bool {}

	/**
	 * ラージオブジェクトの内容を返す
	 * <p>ラージオブジェクトの内容を返します。 memory_limit に達した場合、 スクリプトの実行が終了されますので、 LOB がこの制限を超えないことを確認してください。 多くの場合、代わりに OCI-Lob::read を使用することが推奨されます。</p>
	 * @return string <p>オブジェクトの内容、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.load.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function load(): string {}

	/**
	 * ラージオブジェクトの一部を読み込む
	 * <p>LOB の内部ポインタの現在位置から <code>length</code> バイト読み込みます。</p><p><code>length</code> バイトが読み込まれた、 あるいはラージオブジェクトの終わりに達したとき、読み込みを停止します。 ラージオブジェクトの内部ポインタは、 読み込まれたバイト数分だけシフトされます。</p>
	 * @param int $length <p>読み込むバイト数。大きな値を指定すると、1 MB に切り捨てられます。</p>
	 * @return string <p>読み込んだ内容を表す文字列、失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/oci-lob.read.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function read(int $length): string {}

	/**
	 * 内部ポインタをラージオブジェクトの先頭に移動する
	 * <p>内部ポインタをラージオブジェクトの先頭にセットします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.rewind.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function rewind(): bool {}

	/**
	 * データをラージオブジェクトに保存する
	 * <p><code>data</code> をラージオブジェクトに保存します。</p>
	 * @param string $data <p>保存するデータ。</p>
	 * @param int $offset <p>ラージオブジェクトの先頭からのオフセットを指定するために利用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.save.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function save(string $data, int $offset = NULL): bool {}

	/**
	 * ラージオブジェクトの内部ポインタをセットする
	 * <p>ラージオブジェクトの内部ポインタをセットします。</p>
	 * @param int $offset <p>内部ポインタを <code>whence</code> で示された位置から移動させるバイト数を表します。</p>
	 * @param int $whence <p>以下のいずれかです。</p><ul> <li> <b><code>OCI_SEEK_SET</code></b> - <code>offset</code> と等しい位置にセットします </li> <li> <b><code>OCI_SEEK_CUR</code></b> - 現在の位置に <code>offset</code> バイト追加します </li> <li> <b><code>OCI_SEEK_END</code></b> - ラージオブジェクトの終端に <code>offset</code> バイト追加します (ラージオブジェクトの終端より前の位置に移動するには負の値を指定します) </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.seek.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function seek(int $offset, int $whence = OCI_SEEK_SET): bool {}

	/**
	 * 現在のラージオブジェクト用のバッファリング状態を変更する
	 * <p>ラージオブジェクト用のバッファリングを <code>on_off</code> パラメータの値で設定します。</p><p>この関数を使用することで、LOB の細かな読み込みや書き込みがバッファリングされことにより ネットワークのラウンドトリップや LOB バージョニングの回数が低減され、 パフォーマンスが改善されます。 <code>OCI-Lob::flush()</code> はラージオブジェクトの処理が完了した際、 バッファをフラッシュするために使用します。</p>
	 * @param bool $on_off <p><b><code>TRUE</code></b> は有効、<b><code>FALSE</code></b> は無効を表します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 同じフラグで繰り返しコールすると <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.setbuffering.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function setBuffering(bool $on_off): bool {}

	/**
	 * ラージオブジェクトのサイズを返す
	 * <p>ラージオブジェクトのサイズを取得します。</p>
	 * @return int <p>ラージオブジェクトのサイズを返します。 失敗した場合に <b><code>FALSE</code></b> を返します。 空のオブジェクトは長さ 0 となります。</p>
	 * @link http://php.net/manual/ja/oci-lob.size.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function size(): int {}

	/**
	 * ラージオブジェクトの内部ポインタの現在位置を返す
	 * <p>LOB の内部ポインタの現在位置を取得します。</p>
	 * @return int <p>LOB の内部ポインタの現在位置を返します。 エラーの場合、<b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.tell.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function tell(): int {}

	/**
	 * ラージオブジェクトを切りつめる
	 * <p>LOB を切りつめます。</p>
	 * @param int $length <p>指定した場合は、このメソッドはラージオブジェクトを <code>length</code> バイトに切りつめます。 そうでない場合は、LOB を完全に消去します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.truncate.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function truncate(int $length = 0): bool {}

	/**
	 * データをラージオブジェクトに書き込む
	 * <p>パラメータ <code>data</code> からのデータを LOB の内部ポインタの現在位置に書き込みます。</p>
	 * @param string $data <p>LOB に書き込むデータ。</p>
	 * @param int $length <p>このパラメータを指定すると、 <code>length</code> バイト書き込むか <code>data</code> の終端に達するか、 いずれか早い方の後に書き込みが停止します。</p>
	 * @return int <p>書き込んだバイト数、失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link http://php.net/manual/ja/oci-lob.write.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function write(string $data, int $length = NULL): int {}

	/**
	 * 一時的なラージオブジェクトを書き込む
	 * <p>一時的なラージオブジェクトを生成し、 <code>data</code> を書き込みます。</p><p>オブジェクトの使用後、OCI-Lob::close を使用するべきです。</p>
	 * @param string $data <p>書き込むデータ。</p>
	 * @param int $lob_type <p>以下のいずれかです。</p><ul> <li> <b><code>OCI_TEMP_BLOB</code></b> が一時的な BLOB を生成するために使われます </li> <li> <b><code>OCI_TEMP_CLOB</code></b> が一時的な CLOB を生成するために使われます </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/oci-lob.writetemporary.php
	 * @since PHP 5, PHP 7, PECL OCI8 >= 1.1.0
	 */
	public function writeTemporary(string $data, int $lob_type = OCI_TEMP_CLOB): bool {}
}

