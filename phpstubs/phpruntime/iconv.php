<?php



namespace {

	/**
	 * 文字列を指定した文字エンコーディングに変換する
	 * <p>文字列 <code>str</code> の文字セットを <code>in_charset</code> から <code>out_charset</code> に変換します。</p>
	 * @param string $in_charset <p>入力文字セット。</p>
	 * @param string $out_charset <p>出力文字セット。</p> <p>文字列 <i>//TRANSLIT</i> を <code>out_charset</code> に追加すると、翻字機能が有効になります。これは、指定された文字集合で 表せない文字を、見た目の似ている別の文字に置き換える機能です。 文字列 <i>//IGNORE</i> を追加すると、指定された文字集合で 表せない文字は黙って切り捨てられます。 それ以外の場合は <b><code>E_NOTICE</code></b> が発生し、この関数は <b><code>FALSE</code></b> を返します。</p>  <b>警告</b> <p>If and how <i>//TRANSLIT</i> works exactly depends on the system's iconv() implementation (cf. <b><code>ICONV_IMPL</code></b>). Some implementations are known to ignore <i>//TRANSLIT</i>, so the conversion is likely to fail for characters which are illegal for the <code>out_charset</code>.</p>
	 * @param string $str <p>変換する文字列。</p>
	 * @return string <p>変換された文字列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.iconv.php
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function iconv(string $in_charset, string $out_charset, string $str): string {}

	/**
	 * iconv 拡張モジュールの内部設定変数を取得する
	 * <p>iconv 拡張モジュールの内部設定変数を取得します。</p>
	 * @param string $type <p>オプション <code>type</code> の値は以下のどれかとすることができます。</p><ul> <li>all</li> <li>input_encoding</li> <li>output_encoding</li> <li>internal_encoding</li> </ul>
	 * @return mixed <p>成功時に内部設定変数の現在の設定、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><code>type</code> が省略されるか、"all"が指定された場合、 <b>iconv_get_encoding()</b> は上記変数全てを格納した 配列を返します。</p>
	 * @link https://php.net/manual/ja/function.iconv-get-encoding.php
	 * @see iconv_set_encoding(), ob_iconv_handler()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function iconv_get_encoding(string $type = "all") {}

	/**
	 * MIME ヘッダフィールドをデコードする
	 * <p><i>MIME</i> ヘッダフィールドをデコードします。</p>
	 * @param string $encoded_header <p>エンコードされたヘッダを表す文字列。</p>
	 * @param int $mode <p><code>mode</code> は、<b>iconv_mime_decode()</b> が不正な形式の <i>MIME</i> ヘッダフィールドに遭遇した場合の 振る舞いを定義します。以下のビットマスクの組み合わせで指定が可能です。</p> <b><b>iconv_mime_decode()</b> で指定できるビットマスク</b>   値 定数名 説明     1 ICONV_MIME_DECODE_STRICT  指定すると、ヘッダは » RFC2047 で定義されている標準に完全準拠する形式でデコードされます。 このオプションはデフォルトでは無効になっています。なぜなら、世の中には おかしなメールソフトが多く存在し、それらは規格に従わずに間違った <i>MIME</i> ヘッダを生成するからです。    2 ICONV_MIME_DECODE_CONTINUE_ON_ERROR  指定すると、<code>iconv_mime_decode_headers()</code> は文法的なエラーを無視し、デコード作業を継続します。
	 * @param string $charset <p>オプションの <code>charset</code> パラメータは、結果の 文字セットを指定します。指定されなかった場合は iconv.internal_encoding が用いられます。</p>
	 * @return string <p>成功した場合はデコードされた <i>MIME</i> フィールドを、 デコード中にエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.iconv-mime-decode.php
	 * @see iconv_mime_decode_headers(), mb_decode_mimeheader(), imap_mime_header_decode(), imap_base64(), imap_qprint()
	 * @since PHP 5, PHP 7
	 */
	function iconv_mime_decode(string $encoded_header, int $mode = 0, string $charset = 'ini_get("iconv.internal_encoding")'): string {}

	/**
	 * 複数の MIME ヘッダフィールドを一度にデコードする
	 * <p>複数の <i>MIME</i> ヘッダフィールドを一度にデコードします。</p>
	 * @param string $encoded_headers <p>エンコードされたヘッダを表す文字列。</p>
	 * @param int $mode <p><code>mode</code> は、<b>iconv_mime_decode_headers()</b> が不正な形式の <i>MIME</i> ヘッダフィールドに遭遇した場合の 振る舞いを定義します。以下のビットマスクの組み合わせで指定が可能です。</p> <b><b>iconv_mime_decode_headers()</b> で指定できるビットマスク</b>   値 定数名 説明     1 ICONV_MIME_DECODE_STRICT  指定すると、ヘッダは » RFC2047 で定義されている標準に完全準拠する形式でデコードされます。 このオプションはデフォルトでは無効になっています。なぜなら、世の中には おかしなメールソフトが多く存在し、それらは規格に従わずに間違った <i>MIME</i> ヘッダを生成するからです。    2 ICONV_MIME_DECODE_CONTINUE_ON_ERROR  指定すると、<b>iconv_mime_decode_headers()</b> は文法的なエラーを無視し、デコード作業を継続します。
	 * @param string $charset <p>オプションの <code>charset</code> パラメータは、結果の 文字セットを指定します。指定されなかった場合は iconv.internal_encoding が用いられます。</p>
	 * @return array <p>成功した場合は連想配列を返します。その中身には <code>encoded_headers</code> で指定した <i>MIME</i> ヘッダフィールドがすべて含まれています。 デコード中にエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p><p>連想配列の個々のキーがフィールド名を表し、対応する要素がフィールドの 値を表します。同じ名前のフィールドが複数存在する場合は、 <b>iconv_mime_decode_headers()</b> が自動的に連番つきの 配列をつくり、出現順にその配列に入れられます。</p>
	 * @link https://php.net/manual/ja/function.iconv-mime-decode-headers.php
	 * @see iconv_mime_decode(), mb_decode_mimeheader(), imap_mime_header_decode(), imap_base64(), imap_qprint()
	 * @since PHP 5, PHP 7
	 */
	function iconv_mime_decode_headers(string $encoded_headers, int $mode = 0, string $charset = 'ini_get("iconv.internal_encoding")'): array {}

	/**
	 * MIME ヘッダフィールドを作成する
	 * <p>有効な <i>MIME</i> ヘッダフィールドを作成し、返します。 これは以下のような形式になります。</p>
	 * @param string $field_name <p>フィールド名。</p>
	 * @param string $field_value <p>フィールドの値。</p>
	 * @param array $preferences <p><b>iconv_mime_encode()</b> の振る舞いを変更するには、 ここで設定項目を含む連想配列を指定します。 <b>iconv_mime_encode()</b> でサポートされている項目は 以下のとおりです。項目名の大文字・小文字は区別されることに注意してください。</p> <b><b>iconv_mime_encode()</b> でサポートされる設定項目</b>   項目 型 説明 デフォルト値 例     scheme <code>string</code>  フィールドの値のエンコード方法を指定します。"B" か "Q" の どちらかを指定することになるでしょう。"B" は <i>base64</i> エンコードを、また "Q" は <i>quoted-printable</i> エンコードを表します。  B B   input-charset <code>string</code>  第 1 パラメータ <code>field_name</code> と第 2 パラメータ <code>field_value</code> の文字セットを指定します。 指定されなかった場合は、<b>iconv_mime_encode()</b> は ini 設定 iconv.internal_encoding であると仮定します。   iconv.internal_encoding  ISO-8859-1   output-charset <code>string</code>  <i>MIME</i> ヘッダを作成する文字セットを指定します。   iconv.internal_encoding  UTF-8   line-length <code>integer</code>  ヘッダ行の長さの最大値を指定します。もし結果がこの値より 長くなった場合は、 » RFC2822 - Internet Message Format に基づいてヘッダを "折りたたんで" 複数行に分割します。 指定されなかった場合は、長さは 76 文字に限定されます。  76 996   line-break-chars <code>string</code>  長いヘッダフィールドに対して "折りたたみ" 処理が行われる場合に 個々の行の後ろに付加される文字列を指定します。 指定されなかった場合は、"\r\n" （<i>CR</i> <i>LF</i>）が用いられます。 このパラメータは、<i>input-charset</i> の値にかかわらず 常に ASCII 文字列として扱われることに注意してください。  \r\n \n
	 * @return string <p>成功した場合はエンコードした <i>MIME</i> フィールド、 エンコード時にエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.iconv-mime-encode.php
	 * @see imap_binary(), mb_encode_mimeheader(), imap_8bit(), quoted_printable_encode()
	 * @since PHP 5, PHP 7
	 */
	function iconv_mime_encode(string $field_name, string $field_value, array $preferences = NULL): string {}

	/**
	 * 文字エンコーディング変換用の設定を行なう
	 * <p><code>type</code> で指定された内部設定変数の値を、 <code>charset</code> に変更します。</p>
	 * @param string $type <p><code>type</code> には以下の値のどれかを指定できます。</p><ul> <li>input_encoding</li> <li>output_encoding</li> <li>internal_encoding</li> </ul>
	 * @param string $charset <p>文字セット。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.iconv-set-encoding.php
	 * @see iconv_get_encoding(), ob_iconv_handler()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function iconv_set_encoding(string $type, string $charset): bool {}

	/**
	 * 文字列の文字数を返す
	 * <p><code>strlen()</code> とは違い、<b>iconv_strlen()</b> は与えられたバイト列 <code>str</code> 中に現れる文字の数を 指定された文字セットに基づいて数えます。この結果は、必ずしも文字列の バイト数と一致するとは限りません。</p>
	 * @param string $str <p>文字列。</p>
	 * @param string $charset <p><code>charset</code> パラメータが指定されなかった場合、 <code>str</code> のエンコードは iconv.internal_encoding であると判断されます。</p>
	 * @return int <p><code>str</code> の文字数を返します。</p>
	 * @link https://php.net/manual/ja/function.iconv-strlen.php
	 * @see grapheme_strlen(), mb_strlen(), strlen()
	 * @since PHP 5, PHP 7
	 */
	function iconv_strlen(string $str, string $charset = 'ini_get("iconv.internal_encoding")'): int {}

	/**
	 * 文字列が最初に現れる場所を見つける
	 * <p><code>needle</code> が <code>haystack</code> の中で最初に現れる位置を探します。</p><p><code>strpos()</code> の返り値は needle が見つかった位置の 先頭からのバイト数でしたが、それとは異なり <b>iconv_strpos()</b> の返り値は needle が見つかった 位置の先頭からの文字数となります。文字数は <code>charset</code> で指定された文字セットに基づいて 数えられます。</p>
	 * @param string $haystack <p>文字列全体。</p>
	 * @param string $needle <p>検索する文字列。</p>
	 * @param int $offset <p>オプションの <code>offset</code> パラメータは 検索を開始する位置を指定します。 負のオフセットは、文字列の末尾からのオフセットと解釈されます。</p>
	 * @param string $charset <p><code>charset</code> パラメータが指定されなかった場合、 <code>string</code> のエンコードは iconv.internal_encoding であると判断されます。</p>
	 * @return int <p><code>needle</code> が <code>haystack</code> の中で最初に現れる位置を探します。</p><p>もし <code>needle</code> が見つからなかった場合、 <b>iconv_strpos()</b> は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
	 * @link https://php.net/manual/ja/function.iconv-strpos.php
	 * @see strpos(), iconv_strrpos(), mb_strpos()
	 * @since PHP 5, PHP 7
	 */
	function iconv_strpos(string $haystack, string $needle, int $offset = 0, string $charset = 'ini_get("iconv.internal_encoding")'): int {}

	/**
	 * 文字列が最後に現れる場所を見つける
	 * <p><code>needle</code> が <code>haystack</code> の中で最後に現れる位置を探します。</p><p><code>strrpos()</code> の返り値は needle が見つかった位置の 先頭からのバイト数でしたが、それとは異なり <b>iconv_strrpos()</b> の返り値は needle が見つかった 位置の先頭からの文字数となります。 文字数は <code>charset</code> で指定された文字セットに基づいて数えられます。</p>
	 * @param string $haystack <p>文字列全体。</p>
	 * @param string $needle <p>検索する文字列。</p>
	 * @param string $charset <p><code>charset</code> パラメータが指定されなかった場合、 <code>string</code> のエンコードは iconv.internal_encoding であると判断されます。</p>
	 * @return int <p>文字列 <code>haystack</code> の中で、 <code>needle</code> が最後に現れた位置を数字で返します。</p><p>もし <code>needle</code> が見つからなかった場合、 <b>iconv_strrpos()</b> は <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
	 * @link https://php.net/manual/ja/function.iconv-strrpos.php
	 * @see strrpos(), iconv_strpos(), mb_strrpos()
	 * @since PHP 5, PHP 7
	 */
	function iconv_strrpos(string $haystack, string $needle, string $charset = 'ini_get("iconv.internal_encoding")'): int {}

	/**
	 * 文字列の一部を切り出す
	 * <p>文字列 <code>str</code> の、 <code>offset</code> と <code>length</code> で指定された一部を返します。</p>
	 * @param string $str <p>元の文字列。</p>
	 * @param int $offset <p><code>offset</code> が負でない場合、 <b>iconv_substr()</b> は <code>str</code> の <code>offset</code> 番目の文字（ゼロから数えて）から切り出します。</p> <p><code>offset</code> が負の場合、 <b>iconv_substr()</b> は <code>str</code> の最後から数えて <code>offset</code> 番目の文字から切り出します。</p>
	 * @param int $length <p><code>length</code> が指定され、かつ正である場合、 返される文字列は <code>offset</code> から数えて最大 <code>length</code> 文字数分となります (<code>string</code> の長さに依存します)。</p> <p>もし負の <code>length</code> が渡された場合に <b>iconv_substr()</b> が切り出す文字列は、 <code>str</code> の <code>offset</code> 番目の文字からはじまり、文字列の最後から数えて <code>length</code> 文字分戻ったところまでとなります。 <code>offset</code> も負の場合、開始位置は 上で説明した方式で計算されます。</p>
	 * @param string $charset <p><code>charset</code> が指定されなかった場合、文字セットは ini 設定 iconv.internal_encoding で定義された値とみなされます。</p> <p><code>offset</code> や <code>length</code> のパラメータは、常に <code>charset</code> で定義された 文字セットにおける文字数と判断されることに注意してください。 一方、<code>substr()</code> の場合はこれらの値を常に バイト数として判断します。</p>
	 * @return string <p>文字列 <code>str</code> の、 <code>offset</code> と <code>length</code> で指定された一部を返します。</p><p>もし <code>str</code> が <code>offset</code> の文字列長より短い場合は、<b><code>FALSE</code></b> が返されます。 If <code>str</code> is exactly <code>offset</code> characters long, an empty string will be returned.</p>
	 * @link https://php.net/manual/ja/function.iconv-substr.php
	 * @see substr(), mb_substr(), mb_strcut()
	 * @since PHP 5, PHP 7
	 */
	function iconv_substr(string $str, int $offset, int $length  = 'iconv_strlen($str, $charset)', string $charset = 'ini_get("iconv.internal_encoding")'): string {}

	/**
	 * 出力バッファハンドラとして文字エンコーディングを変換する
	 * <p><code>internal_encoding</code> でエンコードされた文字列を <code>output_encoding</code>に変換します。</p><p><code>internal_encoding</code> および <code>output_encoding</code> は、 <code>iconv_set_encoding()</code> または設定ファイル php.ini で定義されている必要があります。</p>
	 * @param string $contents
	 * @param int $status
	 * @return string <p>このハンドラの返り値についての情報は <code>ob_start()</code> を参照ください。</p>
	 * @link https://php.net/manual/ja/function.ob-iconv-handler.php
	 * @see iconv_get_encoding(), iconv_set_encoding()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function ob_iconv_handler(string $contents, int $status): string {}

	/**
	 * 実装の名前
	 */
	define('ICONV_IMPL', 'glibc');

	/**
	 * <code>iconv_mime_decode()</code>で使用されるビットマスク
	 */
	define('ICONV_MIME_DECODE_CONTINUE_ON_ERROR', 2);

	/**
	 * <code>iconv_mime_decode()</code>で使用されるビットマスク
	 */
	define('ICONV_MIME_DECODE_STRICT', 1);

	/**
	 * 実装のバージョン
	 */
	define('ICONV_VERSION', 2.27);

}
