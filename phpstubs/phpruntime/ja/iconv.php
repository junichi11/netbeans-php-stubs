<?php

// Start of iconv v.7.1.5

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * 文字列を指定した文字エンコーディングに変換する
 * @link http://php.net/manual/ja/function.iconv.php
 * @param string $in_charset <p>
 * 入力文字セット。
 * </p>
 * @param string $out_charset <p>
 * 出力文字セット。
 * </p>
 * <p>
 * 文字列 //TRANSLIT を <i>out_charset</i>
 * に追加すると、翻字機能が有効になります。これは、指定された文字集合で
 * 表せない文字を、見た目の似ている別の文字に置き換える機能です。
 * 文字列 //IGNORE を追加すると、指定された文字集合で
 * 表せない文字は黙って切り捨てられます。
 * それ以外の場合は <b>E_NOTICE</b> が発生し、この関数は <b>FALSE</b> を返します。
 * </p>
 * <p>
 * If and how //TRANSLIT works exactly depends on the
 * system's iconv() implementation (cf. <b>ICONV_IMPL</b>).
 * Some implementations are known to ignore //TRANSLIT,
 * so the conversion is likely to fail for characters which are illegal for
 * the <i>out_charset</i>.
 * </p>
 * @param string $str <p>
 * 変換する文字列。
 * </p>
 * @return string 変換された文字列、失敗した場合に <b>FALSE</b> を返します。
 */
function iconv(string $in_charset, string $out_charset, string $str): string {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * iconv 拡張モジュールの内部設定変数を取得する
 * @link http://php.net/manual/ja/function.iconv-get-encoding.php
 * @param string $type [optional] <p>
 * オプション <i>type</i> の値は以下のどれかとすることができます。
 * all
 * input_encoding
 * output_encoding
 * internal_encoding
 * </p>
 * @return mixed 成功時に内部設定変数の現在の設定、失敗した場合に <b>FALSE</b> を返します。
 * </p>
 * <p>
 * <i>type</i> が省略されるか、"all"が指定された場合、
 * <b>iconv_get_encoding</b> は上記変数全てを格納した
 * 配列を返します。
 */
function iconv_get_encoding(string $type = "all") {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * 文字エンコーディング変換用の設定を行なう
 * @link http://php.net/manual/ja/function.iconv-set-encoding.php
 * @param string $type <p>
 * <i>type</i> には以下の値のどれかを指定できます。
 * input_encoding
 * output_encoding
 * internal_encoding
 * </p>
 * @param string $charset <p>
 * 文字セット。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function iconv_set_encoding(string $type, string $charset): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 文字列の文字数を返す
 * @link http://php.net/manual/ja/function.iconv-strlen.php
 * @param string $str <p>
 * 文字列。
 * </p>
 * @param string $charset [optional] <p>
 * <i>charset</i> パラメータが指定されなかった場合、
 * <i>str</i> のエンコードは
 * iconv.internal_encoding
 * であると判断されます。
 * </p>
 * @return int <i>str</i> の文字数を返します。
 */
function iconv_strlen(string $str, string $charset = 'ini_get("iconv.internal_encoding")'): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 文字列の一部を切り出す
 * @link http://php.net/manual/ja/function.iconv-substr.php
 * @param string $str <p>
 * 元の文字列。
 * </p>
 * @param int $offset <p>
 * <i>offset</i> が負でない場合、
 * <b>iconv_substr</b> は
 * <i>str</i> の <i>offset</i>
 * 番目の文字（ゼロから数えて）から切り出します。
 * </p>
 * <p>
 * <i>offset</i> が負の場合、
 * <b>iconv_substr</b> は
 * <i>str</i> の最後から数えて
 * <i>offset</i> 番目の文字から切り出します。
 * </p>
 * @param int $length [optional] <p>
 * <i>length</i> が指定され、かつ正である場合、
 * 返される文字列は <i>offset</i>
 * から数えて最大 <i>length</i> 文字数分となります
 * (<i>string</i> の長さに依存します)。
 * </p>
 * <p>
 * もし負の <i>length</i> が渡された場合に
 * <b>iconv_substr</b> が切り出す文字列は、
 * <i>str</i> の <i>offset</i>
 * 番目の文字からはじまり、文字列の最後から数えて
 * <i>length</i> 文字分戻ったところまでとなります。
 * <i>offset</i> も負の場合、開始位置は
 * 上で説明した方式で計算されます。
 * </p>
 * @param string $charset [optional] <p>
 * <i>charset</i> が指定されなかった場合、文字セットは
 * ini 設定 iconv.internal_encoding
 * で定義された値とみなされます。
 * </p>
 * <p>
 * <i>offset</i> や <i>length</i>
 * のパラメータは、常に <i>charset</i> で定義された
 * 文字セットにおける文字数と判断されることに注意してください。
 * 一方、<b>substr</b> の場合はこれらの値を常に
 * バイト数として判断します。
 * </p>
 * @return string 文字列 <i>str</i> の、
 * <i>offset</i> と <i>length</i>
 * で指定された一部を返します。
 * </p>
 * <p>
 * もし <i>str</i> が <i>offset</i>
 * の文字列長より短い場合は、<b>FALSE</b> が返されます。
 * If <i>str</i> is exactly <i>offset</i>
 * characters long, an empty string will be returned.
 */
function iconv_substr(string $str, int $offset, int $length = 'iconv_strlen($str, $charset)', string $charset = 'ini_get("iconv.internal_encoding")'): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 文字列が最初に現れる場所を見つける
 * @link http://php.net/manual/ja/function.iconv-strpos.php
 * @param string $haystack <p>
 * 文字列全体。
 * </p>
 * @param string $needle <p>
 * 検索する文字列。
 * </p>
 * @param int $offset [optional] <p>
 * オプションの <i>offset</i> パラメータは
 * 検索を開始する位置を指定します。
 * 負のオフセットは、文字列の末尾からのオフセットと解釈されます。
 * </p>
 * @param string $charset [optional] <p>
 * <i>charset</i> パラメータが指定されなかった場合、
 * <i>string</i> のエンコードは
 * iconv.internal_encoding
 * であると判断されます。
 * </p>
 * @return int <i>needle</i> が
 * <i>haystack</i> の中で最初に現れる位置を探します。
 * </p>
 * <p>
 * もし <i>needle</i> が見つからなかった場合、
 * <b>iconv_strpos</b> は <b>FALSE</b> を返します。
 */
function iconv_strpos(string $haystack, string $needle, int $offset = 0, string $charset = 'ini_get("iconv.internal_encoding")'): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 文字列が最後に現れる場所を見つける
 * @link http://php.net/manual/ja/function.iconv-strrpos.php
 * @param string $haystack <p>
 * 文字列全体。
 * </p>
 * @param string $needle <p>
 * 検索する文字列。
 * </p>
 * @param string $charset [optional] <p>
 * <i>charset</i> パラメータが指定されなかった場合、
 * <i>string</i> のエンコードは
 * iconv.internal_encoding
 * であると判断されます。
 * </p>
 * @return int 文字列 <i>haystack</i> の中で、
 * <i>needle</i> が最後に現れた位置を数字で返します。
 * </p>
 * <p>
 * もし <i>needle</i> が見つからなかった場合、
 * <b>iconv_strrpos</b> は <b>FALSE</b> を返します。
 */
function iconv_strrpos(string $haystack, string $needle, string $charset = 'ini_get("iconv.internal_encoding")'): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * MIME ヘッダフィールドを作成する
 * @link http://php.net/manual/ja/function.iconv-mime-encode.php
 * @param string $field_name <p>
 * フィールド名。
 * </p>
 * @param string $field_value <p>
 * フィールドの値。
 * </p>
 * @param array $preferences [optional] <p>
 * <b>iconv_mime_encode</b> の振る舞いを変更するには、
 * ここで設定項目を含む連想配列を指定します。
 * <b>iconv_mime_encode</b> でサポートされている項目は
 * 以下のとおりです。項目名の大文字・小文字は区別されることに注意してください。
 * <table>
 * <b>iconv_mime_encode</b> でサポートされる設定項目
 * <tr valign="top">
 * <td>項目</td>
 * <td>型</td>
 * <td>説明</td>
 * <td>デフォルト値</td>
 * <td>例</td>
 * </tr>
 * <tr valign="top">
 * <td>scheme</td>
 * <td>string</td>
 * <td>
 * フィールドの値のエンコード方法を指定します。"B" か "Q" の
 * どちらかを指定することになるでしょう。"B" は
 * base64 エンコードを、また "Q" は
 * quoted-printable エンコードを表します。
 * </td>
 * <td>B</td>
 * <td>B</td>
 * </tr>
 * <tr valign="top">
 * <td>input-charset</td>
 * <td>string</td>
 * <td>
 * 第 1 パラメータ <i>field_name</i> と第 2 パラメータ
 * <i>field_value</i> の文字セットを指定します。
 * 指定されなかった場合は、<b>iconv_mime_encode</b>
 * は ini 設定
 * iconv.internal_encoding
 * であると仮定します。
 * </td>
 * <td>
 * iconv.internal_encoding
 * </td>
 * <td>ISO-8859-1</td>
 * </tr>
 * <tr valign="top">
 * <td>output-charset</td>
 * <td>string</td>
 * <td>
 * MIME ヘッダを作成する文字セットを指定します。
 * </td>
 * <td>
 * iconv.internal_encoding
 * </td>
 * <td>UTF-8</td>
 * </tr>
 * <tr valign="top">
 * <td>line-length</td>
 * <td>integer</td>
 * <td>
 * ヘッダ行の長さの最大値を指定します。もし結果がこの値より
 * 長くなった場合は、
 * RFC2822 - Internet Message Format
 * に基づいてヘッダを "折りたたんで" 複数行に分割します。
 * 指定されなかった場合は、長さは 76 文字に限定されます。
 * </td>
 * <td>76</td>
 * <td>996</td>
 * </tr>
 * <tr valign="top">
 * <td>line-break-chars</td>
 * <td>string</td>
 * <td>
 * 長いヘッダフィールドに対して "折りたたみ" 処理が行われる場合に
 * 個々の行の後ろに付加される文字列を指定します。
 * 指定されなかった場合は、"\r\n"
 * （CR LF）が用いられます。
 * このパラメータは、input-charset の値にかかわらず
 * 常に ASCII 文字列として扱われることに注意してください。
 * </td>
 * <td>\r\n</td>
 * <td>\n</td>
 * </tr>
 * </table>
 * </p>
 * @return string 成功した場合はエンコードした MIME フィールド、
 * エンコード時にエラーが発生した場合は <b>FALSE</b> を返します。
 */
function iconv_mime_encode(string $field_name, string $field_value, array $preferences = null): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * MIME ヘッダフィールドをデコードする
 * @link http://php.net/manual/ja/function.iconv-mime-decode.php
 * @param string $encoded_header <p>
 * エンコードされたヘッダを表す文字列。
 * </p>
 * @param int $mode [optional] <p>
 * <i>mode</i> は、<b>iconv_mime_decode</b>
 * が不正な形式の MIME ヘッダフィールドに遭遇した場合の
 * 振る舞いを定義します。以下のビットマスクの組み合わせで指定が可能です。
 * <table>
 * <b>iconv_mime_decode</b> で指定できるビットマスク
 * <tr valign="top">
 * <td>値</td>
 * <td>定数名</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>ICONV_MIME_DECODE_STRICT</td>
 * <td>
 * 指定すると、ヘッダは RFC2047
 * で定義されている標準に完全準拠する形式でデコードされます。
 * このオプションはデフォルトでは無効になっています。なぜなら、世の中には
 * おかしなメールソフトが多く存在し、それらは規格に従わずに間違った
 * MIME ヘッダを生成するからです。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>ICONV_MIME_DECODE_CONTINUE_ON_ERROR</td>
 * <td>
 * 指定すると、<b>iconv_mime_decode_headers</b>
 * は文法的なエラーを無視し、デコード作業を継続します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $charset [optional] <p>
 * オプションの <i>charset</i> パラメータは、結果の
 * 文字セットを指定します。指定されなかった場合は
 * iconv.internal_encoding
 * が用いられます。
 * </p>
 * @return string 成功した場合はデコードされた MIME フィールドを、
 * デコード中にエラーが発生した場合は <b>FALSE</b> を返します。
 */
function iconv_mime_decode(string $encoded_header, int $mode = 0, string $charset = 'ini_get("iconv.internal_encoding")'): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 複数の MIME ヘッダフィールドを一度にデコードする
 * @link http://php.net/manual/ja/function.iconv-mime-decode-headers.php
 * @param string $encoded_headers <p>
 * エンコードされたヘッダを表す文字列。
 * </p>
 * @param int $mode [optional] <p>
 * <i>mode</i> は、<b>iconv_mime_decode_headers</b>
 * が不正な形式の MIME ヘッダフィールドに遭遇した場合の
 * 振る舞いを定義します。以下のビットマスクの組み合わせで指定が可能です。
 * <table>
 * <b>iconv_mime_decode_headers</b> で指定できるビットマスク
 * <tr valign="top">
 * <td>値</td>
 * <td>定数名</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>ICONV_MIME_DECODE_STRICT</td>
 * <td>
 * 指定すると、ヘッダは RFC2047
 * で定義されている標準に完全準拠する形式でデコードされます。
 * このオプションはデフォルトでは無効になっています。なぜなら、世の中には
 * おかしなメールソフトが多く存在し、それらは規格に従わずに間違った
 * MIME ヘッダを生成するからです。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>ICONV_MIME_DECODE_CONTINUE_ON_ERROR</td>
 * <td>
 * 指定すると、<b>iconv_mime_decode_headers</b>
 * は文法的なエラーを無視し、デコード作業を継続します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $charset [optional] <p>
 * オプションの <i>charset</i> パラメータは、結果の
 * 文字セットを指定します。指定されなかった場合は
 * iconv.internal_encoding
 * が用いられます。
 * </p>
 * @return array 成功した場合は連想配列を返します。その中身には
 * <i>encoded_headers</i> で指定した
 * MIME ヘッダフィールドがすべて含まれています。
 * デコード中にエラーが発生した場合は <b>FALSE</b> を返します。
 * </p>
 * <p>
 * 連想配列の個々のキーがフィールド名を表し、対応する要素がフィールドの
 * 値を表します。同じ名前のフィールドが複数存在する場合は、
 * <b>iconv_mime_decode_headers</b> が自動的に連番つきの
 * 配列をつくり、出現順にその配列に入れられます。
 */
function iconv_mime_decode_headers(string $encoded_headers, int $mode = 0, string $charset = 'ini_get("iconv.internal_encoding")'): array {}


/**
 * string
 * @link http://php.net/manual/ja/iconv.constants.php
 */
define ('ICONV_IMPL', "glibc");

/**
 * string
 * @link http://php.net/manual/ja/iconv.constants.php
 */
define ('ICONV_VERSION', 2.23);

/**
 * integer
 * @link http://php.net/manual/ja/iconv.constants.php
 */
define ('ICONV_MIME_DECODE_STRICT', 1);

/**
 * integer
 * @link http://php.net/manual/ja/iconv.constants.php
 */
define ('ICONV_MIME_DECODE_CONTINUE_ON_ERROR', 2);

// End of iconv v.7.1.5
?>
