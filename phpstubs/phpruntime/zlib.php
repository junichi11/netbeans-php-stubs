<?php



namespace {

	/**
	 * Incrementally deflate data
	 * <p>Incrementally deflates data in the specified context.</p>
	 * @param resource $context <p>A context created with <code>deflate_init()</code>.</p>
	 * @param string $data <p>A chunk of data to compress.</p>
	 * @param int $flush_mode <p>One of <b><code>ZLIB_BLOCK</code></b>, <b><code>ZLIB_NO_FLUSH</code></b>, <b><code>ZLIB_PARTIAL_FLUSH</code></b>, <b><code>ZLIB_SYNC_FLUSH</code></b> (default), <b><code>ZLIB_FULL_FLUSH</code></b>, <b><code>ZLIB_FINISH</code></b>. Normally you will want to set <b><code>ZLIB_NO_FLUSH</code></b> to maximize compression, and <b><code>ZLIB_FINISH</code></b> to terminate with the last chunk of data. See the » zlib manual for a detailed description of these constants.</p>
	 * @return string <p>Returns a chunk of compressed data, 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.deflate-add.php
	 * @see deflate_init()
	 * @since PHP 7
	 */
	function deflate_add($context, string $data, int $flush_mode = ZLIB_SYNC_FLUSH): string {}

	/**
	 * Initialize an incremental deflate context
	 * <p>Initializes an incremental deflate context using the specified <code>encoding</code>.</p><p>Note that the <i>window</i> option here only sets the window size of the algorithm, differently from the zlib filters where the same parameter also sets the encoding to use; the encoding must be set with the <code>encoding</code> parameter.</p><p>Limitation: there is currently no way to set the header information on a GZIP compressed stream, which are set as follows: GZIP signature (<i>\x1f\x8B</i>); compression method (<i>\x08</i> == DEFLATE); 6 zero bytes; the operating system set to the current system (<i>\x00</i> = Windows, <i>\x03</i> = Unix, etc.)</p>
	 * @param int $encoding <p>One of the <b><code>ZLIB_ENCODING_&#42;</code></b> constants.</p>
	 * @param array $options <p>An associative array which may contain the following elements:</p>  level   <p>The compression level in range -1..9; defaults to -1.</p>   memory   <p>The compression memory level in range 1..9; defaults to 8.</p>   window   <p>The zlib window size (logarithmic) in range 8..15; defaults to 15.</p>   strategy   <p>One of <b><code>ZLIB_FILTERED</code></b>, <b><code>ZLIB_HUFFMAN_ONLY</code></b>, <b><code>ZLIB_RLE</code></b>, <b><code>ZLIB_FIXED</code></b> or <b><code>ZLIB_DEFAULT_STRATEGY</code></b> (the default).</p>   dictionary   <p>A <code>string</code> or an <code>array</code> of strings of the preset dictionary (default: no preset dictionary).</p>
	 * @return resource <p>Returns a deflate context resource (<i>zlib.deflate</i>) on success, 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.deflate-init.php
	 * @see deflate_add(), inflate_init()
	 * @since PHP 7
	 */
	function deflate_init(int $encoding, array $options = array()) {}

	/**
	 * 開かれたgzファイルへのポインタを閉じる
	 * <p>与えられた gz ファイルへのポインタを閉じます。</p>
	 * @param resource $zp <p>gzファイルポインタ。有効なファイルポインタであり、かつ、 <code>gzopen()</code> によりオープンできたファイルを指している必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gzclose.php
	 * @see gzopen()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzclose($zp): bool {}

	/**
	 * 文字列を圧縮する
	 * <p>この関数は、<i>ZLIB</i> データフォーマットを用いて 与えられた文字列を圧縮します。</p><p>ZLIB 圧縮アルゴリズムについての詳細は、 "» ZLIB Compressed Data Format Specification version 3.3" (RFC 1950) を参照ください。</p><p><b>注意</b>:</p><p>これは、いくつかのヘッダデータを有する gzip 圧縮と同じでは <i>ありません</i>。 gzip圧縮については、<code>gzencode()</code>を参照ください。</p>
	 * @param string $data <p>圧縮するデータ</p>
	 * @param int $level <p>圧縮レベル。0 で圧縮無し、9 で最大限の圧縮を指定できます。</p> <p>-1 を指定すると、zlib ライブラリのデフォルトを使います。デフォルトは 6 です。</p>
	 * @param int $encoding <p>定数 <b><code>ZLIB_ENCODING_&#42;</code></b> のいずれか。</p>
	 * @return string <p>圧縮された文字列、もしくはエラーの場合 <b><code>FALSE</code></b> 。</p>
	 * @link https://php.net/manual/ja/function.gzcompress.php
	 * @see gzdeflate(), gzinflate(), gzuncompress(), gzencode()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function gzcompress(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_DEFLATE): string {}

	/**
	 * gzip 圧縮された文字列をデコードする
	 * <p>この関数は、入力された <code>data</code> をデコードしたものを返します。</p>
	 * @param string $data <p>デコードするデータ。これは <code>gzencode()</code> でエンコードされたものです。</p>
	 * @param int $length <p>デコードするデータの最大長。</p>
	 * @return string <p>デコードされた文字列、あるいはエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gzdecode.php
	 * @see gzencode()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function gzdecode(string $data, int $length = NULL): string {}

	/**
	 * 文字列を deflate 圧縮する
	 * <p>この関数は、<i>DEFLATE</i> データフォーマットを用いて 与えられた文字列を圧縮します。</p><p>DEFLATE 圧縮アルゴリズムについての詳細は、 "» DEFLATE Compressed Data Format Specification version 1.3" (RFC 1951) を参照ください。</p>
	 * @param string $data <p>収縮させるデータ</p>
	 * @param int $level <p>圧縮レベル。圧縮しない場合に0、最大限の圧縮をする場合に9を指定可能です。 指定しない場合、デフォルトの圧縮レベルは zlib ライブラリのデフォルト圧縮レベルになります。</p>
	 * @param int $encoding <p>定数 <b><code>ZLIB_ENCODING_&#42;</code></b> のいずれか。</p>
	 * @return string <p>収縮された文字列、もしくはエラーの場合 <b><code>FALSE</code></b> 。</p>
	 * @link https://php.net/manual/ja/function.gzdeflate.php
	 * @see gzinflate(), gzcompress(), gzuncompress(), gzencode()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gzdeflate(string $data, int $level = -1, int $encoding = ZLIB_ENCODING_RAW): string {}

	/**
	 * gzip 圧縮された文字列を作成する
	 * <p>この関数は、入力 <code>data</code>を <b>gzip</b> プログラムの出力と互換性のある形式で圧縮 して返します。</p><p>GZIPファイルフォーマットに関する詳細な情報については、次のドキュ メントを参照ください。 » GZIP file format specification version 4.3 (RFC 1952)</p>
	 * @param string $data <p>エンコードするデータを指定します</p>
	 * @param int $level <p>圧縮レベルを指定します。 圧縮をしない場合に 0、最大限の圧縮を行う場合に9を指定可能です。 指定されない場合のデフォルト圧縮レベルは、 zlib ライブラリのデフォルト圧縮レベルになります。</p>
	 * @param int $encoding_mode <p>エンコーディングモードを指定します。 <b><code>FORCE_GZIP</code></b> (デフォルト) もしくは <b><code>FORCE_DEFLATE</code></b> を指定可能です。</p> <p>PHP 5.4.0 より前のバージョンでは、<b><code>FORCE_DEFLATE</code></b> を使うと、gzip ファイルヘッダに続けて標準的な zlib 圧縮文字列 (zlib ヘッダ込み) を出力していました。しかし、その後の crc32 チェックサムはありませんでした。</p> <p>PHP 5.4.0 以降は、<b><code>FORCE_DEFLATE</code></b> が RFC 1950 準拠の出力を生成するようになりました。zlib ヘッダ、圧縮したデータ、 そして Adler チェックサムとなります。</p>
	 * @return string <p>エンコードされた文字列、もしくはエラー発生時に <b><code>FALSE</code></b></p>
	 * @link https://php.net/manual/ja/function.gzencode.php
	 * @see gzdecode(), gzdeflate(), gzinflate(), gzuncompress(), gzcompress()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gzencode(string $data, int $level = -1, int $encoding_mode = FORCE_GZIP): string {}

	/**
	 * gz ファイルポインタが EOF かどうか調べる
	 * <p>与えられた GZ ファイルポインタが EOF (ファイル終端) を指すかどうかを調べます。</p>
	 * @param resource $zp <p>gzファイルポインタは、有効なファイルポインタであり、かつ、 <code>gzopen()</code>によりオープンできたファイルを指している 必要があります。</p>
	 * @return int <p>gz ファイルポインタが EOF を指す、もしくはエラーが発生した場合 <b><code>TRUE</code></b>、 そうでなければ <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gzeof.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzeof($zp): int {}

	/**
	 * gzファイル全体を配列に読み込む
	 * <p>ファイルを配列にして返すこと以外は <code>readgzfile()</code> と同じです。</p>
	 * @param string $filename <p>ファイル名を指定します。</p>
	 * @param int $use_include_path <p>もし include_path にあるファイルも検索したい場合、 このオプションパラメータに <i>1</i> を設定することができます。</p>
	 * @return array <p>ファイルを含む配列で、要素毎に 1 行ずつ含んでいます。空行も含み、改行もついた状態です。</p>
	 * @link https://php.net/manual/ja/function.gzfile.php
	 * @see readgzfile(), gzopen()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzfile(string $filename, int $use_include_path = 0): array {}

	/**
	 * gz ファイルへのポインタから文字を得る
	 * <p>与えられた gz ファイルポインタから (非圧縮の) 1 文字を読み込み、これを含む 文字列を返します。</p>
	 * @param resource $zp <p>gz ファイルポインタを指定します。 これは有効なファイルポインタであり、かつ、 <code>gzopen()</code> によりオープンできたファイルを指している必要があります。</p>
	 * @return string <p>非圧縮の文字列、もしくは EOF (<code>gzeof()</code> とは異なる) の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gzgetc.php
	 * @see gzopen(), gzgets()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzgetc($zp): string {}

	/**
	 * ファイルポインタから 1 行を得る
	 * <p>与えられたファイルポインタから最大 length - 1 バイトの文字を読み込み、 これを含む (非圧縮の) 文字列を返します。 length - 1 バイトを読み込むか、改行または EOF になった場合、 (どれかが最初にきた時点で) 読み込みを終了します。</p>
	 * @param resource $zp <p>gz ファイルポインタを指定します。 これは有効なファイルポインタであり、かつ、 <code>gzopen()</code> によりオープンできたファイルを指している必要があります。</p>
	 * @param int $length <p>取得するデータ長を指定します。</p>
	 * @return string <p>非圧縮の文字列、もしくはエラー時に <b><code>FALSE</code></b></p>
	 * @link https://php.net/manual/ja/function.gzgets.php
	 * @see gzopen(), gzgetc(), gzwrite()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzgets($zp, int $length = NULL): string {}

	/**
	 * gzファイルへのポインタから1行を得て、HTMLタグを取り除く
	 * <p><b>gzgetss()</b>は読み込んだテキストから HTML および PHP タグを全て取り除こうとすることを除いて、 <code>gzgets()</code>と同じです。</p>
	 * @param resource $zp <p>gz ファイルポインタを指定します。 これは有効なファイルポインタであり、かつ、 <code>gzopen()</code> によりオープンできたファイルを指している必要があります。</p>
	 * @param int $length <p>取得するデータ長を指定します。</p>
	 * @param string $allowable_tags <p>このオプションパラメータにより、 取り除かないタグを指定することができます。</p>
	 * @return string <p>非圧縮かつタグが取り除かれた文字列、もしくはエラー時に <b><code>FALSE</code></b></p>
	 * @link https://php.net/manual/ja/function.gzgetss.php
	 * @see gzopen(), gzgets(), strip_tags()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzgetss($zp, int $length, string $allowable_tags = NULL): string {}

	/**
	 * deflate圧縮された文字列を解凍する
	 * <p>この関数は収縮された文字列を伸長します。</p>
	 * @param string $data <p><code>gzdeflate()</code> により圧縮されたデータを指定します</p>
	 * @param int $length <p>デコードする最大データ長を指定します</p>
	 * @return string <p>オリジナルの無圧縮なデータ、もしくはエラー時に <b><code>FALSE</code></b></p><p>この関数は、もし無圧縮なデータが圧縮された入力 <code>data</code> の 32768 倍、もしくはオプションのパラメータ <code>length</code> 以上の場合、エラーを返します。</p>
	 * @link https://php.net/manual/ja/function.gzinflate.php
	 * @see gzdeflate(), gzcompress(), gzuncompress(), gzencode()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function gzinflate(string $data, int $length = 0): string {}

	/**
	 * gz ファイルを開く
	 * <p>読み込みもしくは書き込みのために gzip (.gz) ファイルをオープンします。</p><p><b>gzopen()</b> は、gzip フォーマットでないファイルの読み込みについても使用することができます。 この場合、<code>gzread()</code>は、ファイルを解凍せずに直接読み 込まれます。</p>
	 * @param string $filename <p>ファイル名を指定します</p>
	 * @param string $mode <p><code>fopen()</code> と同じ (<i>rb</i> または <i>wb</i>) ですが、 圧縮レベル (<i>wb9</i>) または圧縮の方策、 つまり、<i>wb6f</i> のようにフィルターを通したデータを <i>f</i> で指定したり、<i>h</i> でハフマン圧縮のみを行うことを指定したりすることができます (方策に関するパラメータの詳細については、zlib.h の中の <i>deflateInit2</i> の説明を参照ください)。</p>
	 * @param int $use_include_path <p>このオプションパラメータを <i>1</i> にすることにより、 include_pathにあるファイルも 検索することができます。</p>
	 * @return resource <p>オープンしたファイルへのファイルポインタを返します。その後、 このファイルディスクプリタから読み込んだ全ては透過的に解凍され、 書き込んだものは圧縮されます。</p><p>オープンに失敗した場合、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gzopen.php
	 * @see gzclose()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzopen(string $filename, string $mode, int $use_include_path = 0) {}

	/**
	 * gzファイルへのポインタから残りのデータ全部を出力する
	 * <p>gz ファイルポインタについて現在位置から EOF までデータを読み込み、 標準出力に (伸長された) 結果を書き込みます。</p><p><b>注意</b>:</p><p>すでにデータをファイルに書き込んでいる場合、 ファイルポインタをファイルの先頭にセットするために <code>gzrewind()</code> をコールする必要があるかも知れません。</p><p>修正や特定のオフセットへの移動なしに ファイルの内容を出力バッファにダンプしたいだけの場合、 <code>readgzfile()</code> 関数を使用することもできます。 これにより、<code>gzopen()</code> をコールする手間を省くことができます。</p>
	 * @param resource $zp <p>gz ファイルポインタを指定します。これは有効なファイルポインタであり、 かつ、<code>gzopen()</code> によりオープンできたファイルを指している必要があります。</p>
	 * @return int <p><code>gz</code> から読み込んで解凍され、入力に渡された文字数。 もしくはエラー時に <b><code>FALSE</code></b> 。</p>
	 * @link https://php.net/manual/ja/function.gzpassthru.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzpassthru($zp): int {}

	/**
	 * gzwrite() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>gzwrite()</code>.</p>
	 * @param resource $zp <p>gz ファイルポインタを指定します。これは有効なファイルポインタであり、 かつ、<code>gzopen()</code> によりオープンできたファイルを指している必要があります。</p>
	 * @param string $string <p>書き込む文字列を指定します。</p>
	 * @param int $length <p>書き込む解凍されたバイト数を指定します。 もし指定された場合、 <code>length</code> バイトのデータが書き込まれたか、 <code>string</code> の終わりに達した時に 書き込みは終了します。</p>  <p><b>注意</b>:</p> <p>引数 <code>length</code> が指定された場合、 magic_quotes_runtime 設定オプションは無視されて <code>string</code> から スラッシュが取り除かれなくなることに注意してください。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.gzputs.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzputs($zp, string $string, int $length = NULL): int {}

	/**
	 * バイナリ対応のgzファイル読み込み
	 * <p><b>gzread()</b> は、最大 <code>length</code> バイトのデータを <code>zp</code> が指す gz ファイルポインタ から読み込みます。(伸長された) <code>length</code> バイトのデータが読み込まれたか、 EOF に達したとき、読み込みは終了します。</p>
	 * @param resource $zp <p>gz ファイルポインタを指定します。これは有効なファイルポインタであり、 かつ、<code>gzopen()</code> によりオープンできたファイルを指している必要があります。</p>
	 * @param int $length <p>読み込むバイト数を指定します。</p>
	 * @return string <p>読み込まれたデータ</p>
	 * @link https://php.net/manual/ja/function.gzread.php
	 * @see gzwrite(), gzopen(), gzgets(), gzgetss(), gzfile(), gzpassthru()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzread($zp, int $length): string {}

	/**
	 * gz ファイルポインタの示す位置を元に戻す
	 * <p>与えられた gz ファイルポインタが指すファイルのファイル位置記述子を、 ファイルストリームの先頭にセットします。</p>
	 * @param resource $zp <p>gz ファイルポインタを指定します。これは有効なファイルポインタであり、 かつ、<code>gzopen()</code> によりオープンできたファイルを指している必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gzrewind.php
	 * @see gzseek(), gztell()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzrewind($zp): bool {}

	/**
	 * gz ファイルポインタの位置を移動する
	 * <p>与えられたファイルポインタが指すファイルのファイル位置記述子を、 ファイルストリーム上の与えられた offset バイトにセットします。 <i>gzseek(zp, offset, SEEK_SET)</i> を (C 言語において) コールするのと同じです。</p><p>ファイルが読み込み用にオープンされた場合、この関数は、 エミュレーションされますが、極端に遅くなる可能性があります。 ファイルを書き込み用にオープンした場合、 前方への移動のみがサポートされます。この場合、<b>gzseek()</b> は、新しい開始位置までゼロの並びのデータを圧縮します。</p>
	 * @param resource $zp <p>gz ファイルポインタを指定します。これは有効なファイルポインタであり、 かつ、<code>gzopen()</code> によりオープンできたファイルを指している必要があります。</p>
	 * @param int $offset <p>移動するオフセットを指定します。</p>
	 * @param int $whence <p><code>whence</code> の値は次のいずれかです。</p><ul> <li> <b><code>SEEK_SET</code></b> - <code>offset</code> バイト目に設定します。</li> <li> <b><code>SEEK_CUR</code></b> - 現在位置から <code>offset</code> ぶん進んだ位置に設定します。</li> </ul> <p><code>whence</code> を省略した場合は <b><code>SEEK_SET</code></b> とみなします。</p>
	 * @return int <p>成功した場合、0を返します。それ以外の場合は、-1を返します。 移動がEOFを超える場合にもエラーは発生しないことに注意してください。</p>
	 * @link https://php.net/manual/ja/function.gzseek.php
	 * @see gztell(), gzrewind()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzseek($zp, int $offset, int $whence = SEEK_SET): int {}

	/**
	 * gz ファイルポインタの読み込み/書き込み位置を返します
	 * <p>与えられたファイルポインタが指す位置、つまり、 圧縮されていないファイルストリームにおけるオフセット値を返します。</p>
	 * @param resource $zp <p>gz ファイルポインタを指定します。これは有効なファイルポインタであり、 かつ、<code>gzopen()</code> によりオープンできたファイルを指している必要があります。</p>
	 * @return int <p>ファイルポインタの位置、もしくはエラーが発生した場合 <b><code>FALSE</code></b></p>
	 * @link https://php.net/manual/ja/function.gztell.php
	 * @see gzopen(), gzseek(), gzrewind()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gztell($zp): int {}

	/**
	 * 圧縮された文字列を解凍する
	 * <p>この関数は圧縮された文字列を解凍します。</p>
	 * @param string $data <p><code>gzcompress()</code> によって圧縮されたデータを指定します。</p>
	 * @param int $length <p>デコードするデータの最大長を指定します。</p>
	 * @return string <p>オリジナルの無圧縮なデータ、もしくはエラー時に <b><code>FALSE</code></b></p><p>この関数は、もし無圧縮なデータが圧縮された入力 <code>data</code> の 32768 倍、もしくはオプションのパラメータ <code>length</code> 以上の場合、エラーを返します。</p>
	 * @link https://php.net/manual/ja/function.gzuncompress.php
	 * @see gzcompress(), gzinflate(), gzdeflate(), gzencode()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function gzuncompress(string $data, int $length = 0): string {}

	/**
	 * バイナリセーフな gz ファイル書き込み
	 * <p><b>gzwrite()</b> は <code>string</code> の内容を与えられた gz ファイルに書き込みます。</p>
	 * @param resource $zp <p>gz ファイルポインタを指定します。これは有効なファイルポインタであり、 かつ、<code>gzopen()</code> によりオープンできたファイルを指している必要があります。</p>
	 * @param string $string <p>書き込む文字列を指定します。</p>
	 * @param int $length <p>書き込む解凍されたバイト数を指定します。 もし指定された場合、 <code>length</code> バイトのデータが書き込まれたか、 <code>string</code> の終わりに達した時に 書き込みは終了します。</p>  <p><b>注意</b>:</p> <p>引数 <code>length</code> が指定された場合、 magic_quotes_runtime 設定オプションは無視されて <code>string</code> から スラッシュが取り除かれなくなることに注意してください。</p>
	 * @return int <p>与えられた gz ファイルストリームに書き込まれた (解凍された) バイト数を返します。</p>
	 * @link https://php.net/manual/ja/function.gzwrite.php
	 * @see gzread(), gzopen()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gzwrite($zp, string $string, int $length = NULL): int {}

	/**
	 * Incrementally inflate encoded data
	 * <p>Incrementally inflates encoded data in the specified <code>context</code>.</p><p>Limitation: header information from GZIP compressed data are not made available.</p>
	 * @param resource $context <p>A context created with <code>inflate_init()</code>.</p>
	 * @param string $encoded_data <p>A chunk of compressed data.</p>
	 * @param int $flush_mode <p>One of <b><code>ZLIB_BLOCK</code></b>, <b><code>ZLIB_NO_FLUSH</code></b>, <b><code>ZLIB_PARTIAL_FLUSH</code></b>, <b><code>ZLIB_SYNC_FLUSH</code></b> (default), <b><code>ZLIB_FULL_FLUSH</code></b>, <b><code>ZLIB_FINISH</code></b>. Normally you will want to set <b><code>ZLIB_NO_FLUSH</code></b> to maximize compression, and <b><code>ZLIB_FINISH</code></b> to terminate with the last chunk of data. See the » zlib manual for a detailed description of these constants.</p>
	 * @return string <p>Returns a chunk of uncompressed data, 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.inflate-add.php
	 * @see inflate_init()
	 * @since PHP 7
	 */
	function inflate_add($context, string $encoded_data, int $flush_mode = ZLIB_SYNC_FLUSH): string {}

	/**
	 * Get number of bytes read so far
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $resource
	 * @return int <p>Returns number of bytes read so far失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.inflate-get-read-len.php
	 * @since PHP 7 >= 7.2.0
	 */
	function inflate_get_read_len($resource): int {}

	/**
	 * Get decompression status
	 * <p>Usually returns either <b><code>ZLIB_OK</code></b> or <b><code>ZLIB_STREAM_END</code></b>.</p>
	 * @param resource $resource
	 * @return int <p>Returns decompression status失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.inflate-get-status.php
	 * @since PHP 7 >= 7.2.0
	 */
	function inflate_get_status($resource): int {}

	/**
	 * Initialize an incremental inflate context
	 * <p>Initialize an incremental inflate context with the specified <code>encoding</code>.</p>
	 * @param int $encoding <p>One of the <b><code>ZLIB_ENCODING_&#42;</code></b> constants.</p>
	 * @param array $options <p>An associative array which may contain the following elements:</p>  level   <p>The compression level in range -1..9; defaults to -1.</p>   memory   <p>The compression memory level in range 1..9; defaults to 8.</p>   window   <p>The zlib window size (logarithmic) in range 8..15; defaults to 15.</p>   strategy   <p>One of <b><code>ZLIB_FILTERED</code></b>, <b><code>ZLIB_HUFFMAN_ONLY</code></b>, <b><code>ZLIB_RLE</code></b>, <b><code>ZLIB_FIXED</code></b> or <b><code>ZLIB_DEFAULT_STRATEGY</code></b> (the default).</p>   dictionary   <p>A <code>string</code> or an <code>array</code> of strings of the preset dictionary (default: no preset dictionary).</p>
	 * @return resource <p>Returns an inflate context resource (<i>zlib.inflate</i>) on success, 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.inflate-init.php
	 * @see inflate_add(), deflate_init()
	 * @since PHP 7
	 */
	function inflate_init(int $encoding, array $options = array()) {}

	/**
	 * gz ファイルを出力する
	 * <p>ファイルを読み込み、解凍し、標準出力に書き込みます。</p><p><b>readgzfile()</b>は、gzip フォーマットでないファイルの読込にも使用可能です。この場合、 <b>readgzfile()</b> はファイルを解凍せずに直接読込みます。</p>
	 * @param string $filename <p>ファイル名を指定します。このファイルはファイルシステムからオープンされ、 内容は標準出力に書き込まれます。</p>
	 * @param int $use_include_path <p>include_path にあるファイルも検索したい場合、このオプションパラメータを <i>1</i> に設定してください。</p>
	 * @return int <p>成功時は、ファイルから読み込んだ (解凍された) データのバイト数を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link https://php.net/manual/ja/function.readgzfile.php
	 * @see gzpassthru(), gzfile(), gzopen()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readgzfile(string $filename, int $use_include_path = 0): int {}

	/**
	 * raw/gzip/zlib で符号化されたデータを復元する
	 * <p>raw/gzip/zlib で符号化されたデータを復元します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $data
	 * @param string $max_decoded_len
	 * @return string <p>圧縮されていないデータを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.zlib-decode.php
	 * @see zlib_encode()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function zlib_decode(string $data, string $max_decoded_len = NULL): string {}

	/**
	 * 指定した符号化方式でデータを圧縮する
	 * <p>指定した符号化方式でデータを圧縮します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $data <p>圧縮するデータ。</p>
	 * @param int $encoding <p>圧縮アルゴリズム。 <b><code>ZLIB_ENCODING_RAW</code></b>、 <b><code>ZLIB_ENCODING_DEFLATE</code></b> または <b><code>ZLIB_ENCODING_GZIP</code></b> 。</p>
	 * @param int $level
	 * @return string
	 * @link https://php.net/manual/ja/function.zlib-encode.php
	 * @see zlib_decode()
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	function zlib_encode(string $data, int $encoding, int $level = -1): string {}

	/**
	 * 出力圧縮に使用されたコーディングの種類を返す
	 * <p>出力圧縮に使用されたコーディングの種類を返します。</p>
	 * @return string <p>返される値は <i>gzip</i>, <i>deflate</i>, もしくは <b><code>FALSE</code></b> です。</p>
	 * @link https://php.net/manual/ja/function.zlib-get-coding-type.php
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	function zlib_get_coding_type(): string {}

	define('FORCE_DEFLATE', 15);

	define('FORCE_GZIP', 31);

	/**
	 * PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_BLOCK', 5);

	/**
	 * PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_DEFAULT_STRATEGY', 0);

	/**
	 * RFC 1950 の ZLIB 圧縮アルゴリズム。PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_ENCODING_DEFLATE', 15);

	/**
	 * RFC 1952 の GZIP アルゴリズム。PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_ENCODING_GZIP', 31);

	/**
	 * RFC 1951 の DEFLATE アルゴリズム。PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_ENCODING_RAW', -15);

	/**
	 * PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_FILTERED', 1);

	/**
	 * PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_FINISH', 4);

	/**
	 * PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_FIXED', 4);

	/**
	 * PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_FULL_FLUSH', 3);

	/**
	 * PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_HUFFMAN_ONLY', 2);

	/**
	 * PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_NO_FLUSH', 0);

	/**
	 * PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_PARTIAL_FLUSH', 1);

	/**
	 * PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_RLE', 3);

	/**
	 * PHP 7.0.0 以降で利用可能です。
	 */
	define('ZLIB_SYNC_FLUSH', 2);

}
