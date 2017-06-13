<?php

// Start of mbstring v.7.0.19

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 文字列に対してケースフォルディングを行う
 * @link http://php.net/manual/ja/function.mb-convert-case.php
 * @param string $str <p>
 * 変換される文字列。
 * </p>
 * @param int $mode <p>
 * 変換モード。
 * <b>MB_CASE_UPPER</b>、
 * <b>MB_CASE_LOWER</b> あるいは
 * <b>MB_CASE_TITLE</b> のいずれかです。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return string <i>mode</i>
 * で指定された方法で <i>string</i>
 * に対してケースフォルディングを行った結果を返します。
 */
function mb_convert_case(string $str, int $mode, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 文字列を大文字にする
 * @link http://php.net/manual/ja/function.mb-strtoupper.php
 * @param string $str <p>
 * 大文字に変換したい文字列。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return string <i>str</i> のすべてのアルファベットを大文字にしたものを返します。
 */
function mb_strtoupper(string $str, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 文字列を小文字にする
 * @link http://php.net/manual/ja/function.mb-strtolower.php
 * @param string $str <p>
 * 小文字にしたい文字列。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return string <i>str</i> のすべてのアルファベットを小文字にしたものを返します。
 */
function mb_strtolower(string $str, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 現在の言語を設定あるいは取得する
 * @link http://php.net/manual/ja/function.mb-language.php
 * @param string $language [optional] <p>
 * e-mail メッセージのエンコーディングとして使用します。有効な言語は、"Japanese",
 * "ja","English","en", "uni" (UTF-8) です。
 * <b>mb_send_mail</b> は、e-mail
 * をエンコードする際にこの設定を使用します。
 * </p>
 * <p>
 * 言語とその設定は、Japanese の場合は ISO-2022-JP/Base64、uni の場合は
 * UTF-8/Base64、English の場合は ISO-8859-1/quoted printable です。
 * </p>
 * @return mixed <i>language</i> が設定され、
 * <i>language</i> が有効な場合、<b>TRUE</b>が返されます。
 * そうでない場合、<b>FALSE</b>が返されます。
 * <i>language</i> が省略された場合、
 * 言語の名前が文字列として返されます。事前に言語が設定されていない場合、
 * <b>FALSE</b> が返されます。
 */
function mb_language(string $language = 'mb_language()') {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 内部文字エンコーディングを設定あるいは取得する
 * @link http://php.net/manual/ja/function.mb-internal-encoding.php
 * @param string $encoding [optional] <p>
 * <i>encoding</i> は、HTTP 入力文字エンコーディング変換、
 * HTTP 出力文字エンコーディング変換および
 * mbstring モジュールの文字列関数においてデフォルトの文字エンコーディングとして使用されます。
 * マルチバイト正規表現用のエンコーディングは、ここで扱う内部文字エンコーディングとは別であることに注意してください。
 * </p>
 * @return mixed <i>encoding</i> が設定された場合、
 * 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * このとき、マルチバイト正規表現用のエンコーディングは変更されません。
 * <i>encoding</i> が省略された場合、
 * 現在の内部文字エンコーディング名を返します。
 */
function mb_internal_encoding(string $encoding = 'mb_internal_encoding()') {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * HTTP 入力文字エンコーディングを検出する
 * @link http://php.net/manual/ja/function.mb-http-input.php
 * @param string $type [optional] <p>
 * HTTP 入力の型を表す文字列を入力してください。
 * GET の場合は "G"、POST の場合は "P"、
 * COOKIE の場合は "C"、文字列の場合は "S" 、
 * リストの場合は "L" 、リスト全体（array を返す）
 * の場合は "I" です。 <i>type</i> が省略された場合、
 * 直近に処理された入力型が返されます。
 * </p>
 * @return mixed <i>type</i> の文字エンコーディング名を返します。
 * <b>mb_http_input</b>
 * が指定した HTTP 入力の処理を行っていない場合、<b>FALSE</b> を返します。
 */
function mb_http_input(string $type = "") {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * HTTP 出力文字エンコーディングを設定あるいは取得する
 * @link http://php.net/manual/ja/function.mb-http-output.php
 * @param string $encoding [optional] <p>
 * <i>encoding</i> が設定された場合、
 * <b>mb_http_output</b> は
 * HTTP 出力文字エンコーディングを
 * <i>encoding</i>に設定します。
 * </p>
 * <p>
 * <i>encoding</i> が省略された場合、
 * <b>mb_http_output</b>
 * は現在の HTTP 出力文字エンコーディングを返します。
 * </p>
 * @return mixed <i>encoding</i> が省略された場合、
 * <b>mb_http_output</b>
 * は現在の HTTP 出力文字エンコーディングを返します。それ以外の場合、
 * 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mb_http_output(string $encoding = 'mb_http_output()') {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 文字エンコーディング検出順序を設定あるいは取得する
 * @link http://php.net/manual/ja/function.mb-detect-order.php
 * @param mixed $encoding_list [optional] <p>
 * <i>encoding_list</i> は、
 * 配列またはカンマ区切りの文字エンコーディングのリストです。サポートされる文字エンコーディングを参照ください。
 * </p>
 * <p>
 * <i>encoding_list</i> が省略された場合は、
 * 現在の文字エンコーディング検出順を配列で返します。
 * </p>
 * <p>
 * この設定は、<b>mb_detect_encoding</b> および
 * <b>mb_send_mail</b> に影響します。
 * </p>
 * <p>
 * mbstring が現在実装しているのは、
 * 以下のエンコーディングを検出するフィルタです。
 * 以下のエンコーディングにおいて無効なバイトシーケンスがあった場合、
 * エンコーディング検出は失敗します。
 * </p>
 * UTF-8, UTF-7,
 * ASCII,
 * EUC-JP,SJIS,
 * eucJP-win, SJIS-win,
 * JIS, ISO-2022-JP
 * <p>
 * ISO-8859-*の場合、mbstring
 * は常に ISO-8859-* として検出します。
 * </p>
 * <p>
 * UTF-16, UTF-32,
 * UCS2, UCS4 の場合、
 * エンコーディング検出は常に失敗します。
 * </p>
 * @return mixed 検出順序を設定する場合は、成功した場合に <b>TRUE</b> を返し、失敗したときに <b>FALSE</b> を返します。
 * </p>
 * <p>
 * 検出順序を取得する場合は、エンコーディングの配列を返します。
 */
function mb_detect_order($encoding_list = 'mb_detect_order()') {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 置換文字を設定あるいは取得する
 * @link http://php.net/manual/ja/function.mb-substitute-character.php
 * @param mixed $substrchar [optional] <p>
 * Unicode 値の整数または文字列を以下のように指定します。
 * "none": 出力しない
 * @return mixed <i>substchar</i> が設定された場合、成功時に
 * <b>TRUE</b>、そうでない場合に
 * <b>FALSE</b> を返します。
 * <i>substchar</i> が設定されない場合は、現在の設定を返します。
 */
function mb_substitute_character($substrchar = 'mb_substitute_character()') {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * GET/POST/COOKIE データをパースし、グローバル変数を設定する
 * @link http://php.net/manual/ja/function.mb-parse-str.php
 * @param string $encoded_string <p>
 * URL エンコードされたデータ。
 * </p>
 * @param array $result [optional] <p>
 * デコードされ、文字エンコーディング変換された文字列が含まれます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mb_parse_str(string $encoded_string, array &$result = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 出力バッファ内で文字エンコーディングを変換するコールバック関数
 * @link http://php.net/manual/ja/function.mb-output-handler.php
 * @param string $contents <p>
 * 出力バッファの中身。
 * </p>
 * @param int $status <p>
 * 出力バッファの状態。
 * </p>
 * @return string 変換後の文字列を返します。
 */
function mb_output_handler(string $contents, int $status): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * MIME 文字設定を文字列で得る
 * @link http://php.net/manual/ja/function.mb-preferred-mime-name.php
 * @param string $encoding <p>
 * 調べるエンコーディング。
 * </p>
 * @return string 文字エンコーディング <i>encoding</i> 用の
 * MIME charset 文字列を返します。
 */
function mb_preferred_mime_name(string $encoding): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 文字列の長さを得る
 * @link http://php.net/manual/ja/function.mb-strlen.php
 * @param string $str <p>
 * 長さを調べたい文字列。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return mixed 文字エンコーディング
 * <i>encoding</i> の文字列
 * <i>str</i> の文字数を返します。
 * マルチバイト文字の一文字は1個として数えられます。
 * </p>
 * <p>
 * 無効な <i>encoding</i> を指定した場合は <b>FALSE</b> を返します。
 */
function mb_strlen(string $str, string $encoding = 'mb_internal_encoding()') {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 文字列の中に指定した文字列が最初に現れる位置を見つける
 * @link http://php.net/manual/ja/function.mb-strpos.php
 * @param string $haystack <p>
 * 調べたい文字列。
 * </p>
 * @param string $needle <p>
 * <i>haystack</i> の中から探す文字列。
 * <b>strpos</b> とは違い、
 * 数値を指定しても文字コードの値と見なされることはありません。
 * </p>
 * @param int $offset [optional] <p>
 * 検索オフセット。
 * 指定されない場合は、0 が使用されます。
 * 負のオフセットは、文字列の末尾からのオフセットと解釈されます。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return int 文字列 <i>haystack</i> の中で
 * <i>needle</i> が最初に現れる位置を数字で返します。
 * <i>needle</i> が見付からなかった場合、<b>FALSE</b>
 * を返します。
 */
function mb_strpos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 文字列の中に指定した文字列が最後に現れる位置を見つける
 * @link http://php.net/manual/ja/function.mb-strrpos.php
 * @param string $haystack <p>
 * <i>needle</i> が最後に登場する場所を調べたい文字列。
 * </p>
 * @param string $needle <p>
 * <i>haystack</i> の中で見つけたい文字列。
 * </p>
 * @param int $offset [optional] 指定すると、文字列中の任意の文字位置から検索を開始することができます。
 * 負の値を指定すると、文字の終端より前の任意の位置で検索を終了します。
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return int 文字列 <i>haystack</i> の中で
 * <i>needle</i> が最後に現れる位置を数字で返します。
 * <i>needle</i> が見付からなかった場合、<b>FALSE</b>
 * を返します。
 */
function mb_strrpos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 大文字小文字を区別せず、
文字列の中で指定した文字列が最初に現れる位置を探す
 * @link http://php.net/manual/ja/function.mb-stripos.php
 * @param string $haystack <p>
 * <i>needle</i> が最初に現れる位置を見つける文字列。
 * </p>
 * @param string $needle <p>
 * <i>haystack</i> の中で探す文字列。
 * </p>
 * @param int $offset [optional] <p>
 * <i>haystack</i> の中で、検索を開始する位置。
 * 負のオフセットは、文字列の末尾からのオフセットと解釈されます。
 * </p>
 * @param string $encoding [optional] <p>
 * 使用する文字エンコーディング名。
 * 省略した場合は内部文字エンコーディングが用いられます。
 * </p>
 * @return int <i>needle</i> が <i>haystack</i>
 * の中で最初に現れる位置を返します。<i>needle</i>
 * が見つからない場合は <b>FALSE</b> を返します。
 */
function mb_stripos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 大文字小文字を区別せず、
文字列の中で指定した文字列が最後に現れる位置を探す
 * @link http://php.net/manual/ja/function.mb-strripos.php
 * @param string $haystack <p>
 * <i>needle</i> が最後に現れる位置を見つける文字列。
 * </p>
 * @param string $needle <p>
 * <i>haystack</i> の中で探す文字列。
 * </p>
 * @param int $offset [optional] <p>
 * <i>haystack</i> の中で、検索を開始する位置。
 * </p>
 * @param string $encoding [optional] <p>
 * 使用する文字エンコーディング名。
 * 省略した場合は内部文字エンコーディングが用いられます。
 * </p>
 * @return int <i>needle</i> が <i>haystack</i>
 * の中で最後に現れる位置を返します。<i>needle</i>
 * が見つからない場合は <b>FALSE</b> を返します。
 */
function mb_strripos(string $haystack, string $needle, int $offset = 0, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 文字列の中で、指定した文字列が最初に現れる位置を見つける
 * @link http://php.net/manual/ja/function.mb-strstr.php
 * @param string $haystack <p>
 * <i>needle</i> が最初に現れる位置を見つける文字列。
 * </p>
 * @param string $needle <p>
 * <i>haystack</i> の中で探す文字列。
 * </p>
 * @param bool $before_needle [optional] <p>
 * この関数が <i>haystack</i> のどの部分を返すのかを指定します。
 * <b>TRUE</b> の場合は、<i>haystack</i> の先頭から
 * <i>needle</i> が最初に現れる位置までを返します (needle を含めません)。
 * <b>FALSE</b> の場合は、<i>needle</i> が最初に現れる位置から
 * <i>haystack</i> の最後までを返します (needle を含めます)。
 * </p>
 * @param string $encoding [optional] <p>
 * 使用する文字エンコーディング名。
 * 省略した場合は内部文字エンコーディングが用いられます。
 * </p>
 * @return string <i>haystack</i> の部分文字列を返します。
 * <i>needle</i> が見つからない場合は <b>FALSE</b> を返します。
 */
function mb_strstr(string $haystack, string $needle, bool $before_needle = false, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 別の文字列の中で、ある文字が最後に現れる場所を見つける
 * @link http://php.net/manual/ja/function.mb-strrchr.php
 * @param string $haystack <p>
 * <i>needle</i> が最後に現れる位置を探す文字列。
 * </p>
 * @param string $needle <p>
 * <i>haystack</i> の中で探す文字列。
 * </p>
 * @param bool $part [optional] <p>
 * この関数が <i>haystack</i> のどの部分を返すのかを指定します。
 * <b>TRUE</b> の場合は、<i>haystack</i> の先頭から
 * <i>needle</i> が最後に現れる位置までを返します。
 * <b>FALSE</b> の場合は、<i>needle</i> が最後に現れる位置から
 * <i>haystack</i> の最後までを返します。
 * </p>
 * @param string $encoding [optional] <p>
 * 使用する文字エンコーディングの名前。
 * 省略した場合は内部文字エンコーディングを使用します。
 * </p>
 * @return string <i>haystack</i> の部分文字列を返します。
 * <i>needle</i> が見つからない場合は <b>FALSE</b> を返します。
 */
function mb_strrchr(string $haystack, string $needle, bool $part = false, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 大文字小文字を区別せず、
文字列の中で指定した文字列が最初に現れる位置を探す
 * @link http://php.net/manual/ja/function.mb-stristr.php
 * @param string $haystack <p>
 * <i>needle</i> が最初に現れる位置を見つける文字列。
 * </p>
 * @param string $needle <p>
 * <i>haystack</i> の中で探す文字列。
 * </p>
 * @param bool $before_needle [optional] <p>
 * この関数が <i>haystack</i> のどの部分を返すのかを指定します。
 * <b>TRUE</b> の場合は、<i>haystack</i> の先頭から
 * <i>needle</i> が最初に現れる位置までを返します (needle を含めません)。
 * <b>FALSE</b> の場合は、<i>needle</i> が最初に現れる位置から
 * <i>haystack</i> の最後までを返します (needle を含めます)。
 * </p>
 * @param string $encoding [optional] <p>
 * 使用する文字エンコーディング名。
 * 省略した場合は内部文字エンコーディングが用いられます。
 * </p>
 * @return string <i>haystack</i> の部分文字列を返します。
 * <i>needle</i> が見つからない場合は <b>FALSE</b> を返します。
 */
function mb_stristr(string $haystack, string $needle, bool $before_needle = false, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 大文字小文字を区別せず、
別の文字列の中である文字が最後に現れる場所を探す
 * @link http://php.net/manual/ja/function.mb-strrichr.php
 * @param string $haystack <p>
 * <i>needle</i> が最後に現れる位置を探す文字列。
 * </p>
 * @param string $needle <p>
 * <i>haystack</i> の中で探す文字列。
 * </p>
 * @param bool $part [optional] <p>
 * この関数が <i>haystack</i> のどの部分を返すのかを指定します。
 * <b>TRUE</b> の場合は、<i>haystack</i> の先頭から
 * <i>needle</i> が最後に現れる位置までを返します。
 * <b>FALSE</b> の場合は、<i>needle</i> が最後に現れる位置から
 * <i>haystack</i> の最後までを返します。
 * </p>
 * @param string $encoding [optional] <p>
 * 使用する文字エンコーディングの名前。
 * 省略した場合は内部文字エンコーディングを使用します。
 * </p>
 * @return string <i>haystack</i> の部分文字列を返します。
 * <i>needle</i> が見つからない場合は <b>FALSE</b> を返します。
 */
function mb_strrichr(string $haystack, string $needle, bool $part = false, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 部分文字列の出現回数を数える
 * @link http://php.net/manual/ja/function.mb-substr-count.php
 * @param string $haystack <p>
 * 調べたい文字列。
 * </p>
 * @param string $needle <p>
 * 見つける文字列。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return int 文字列
 * <i>haystack</i> の中での部分文字列
 * <i>needle</i> の出現回数を返します。
 */
function mb_substr_count(string $haystack, string $needle, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 文字列の一部を得る
 * @link http://php.net/manual/ja/function.mb-substr.php
 * @param string $str <p>
 * 部分文字列を取り出したい文字列。
 * </p>
 * @param int $start <p>
 * <i>start</i> が非負である場合に返される文字列は、
 * <i>str</i> の <i>start</i> バイト目以降の文字列となります (ゼロから数えます)。
 * たとえば、文字列 'abcdef' の
 * 0 バイト目は 'a' で、
 * 2 バイト目は 'c' のようになります。
 * </p>
 * <p>
 * <i>start</i> が負の数の場合に返される文字列は、
 * <i>str</i> の後ろから数えて <i>start</i> バイト目以降となります。
 * </p>
 * @param int $length [optional] <p>
 * <i>str</i> の中から取り出す最大文字数。
 * 省略したり NULL を渡したりした場合は、
 * 文字列の最後までの全バイトを取り出します。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return string <b>mb_substr</b> は、<i>start</i>
 * および <i>length</i> パラメータで指定した
 * <i>str</i> の一部を返します。
 */
function mb_substr(string $str, int $start, int $length = NULL, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 文字列の一部を得る
 * @link http://php.net/manual/ja/function.mb-strcut.php
 * @param string $str <p>
 * 取り出しの対象となる文字列。
 * </p>
 * @param int $start <p>
 * <i>start</i> が非負である場合に返される文字列は、
 * <i>str</i> の <i>start</i> バイト目以降の文字列となります (ゼロから数えます)。
 * たとえば、文字列 'abcdef' の
 * 0 バイト目は 'a' で、
 * 2 バイト目は 'c' のようになります。
 * </p>
 * <p>
 * <i>start</i> が負の数の場合に返される文字列は、
 * <i>str</i> の後ろから数えて <i>start</i> バイト目以降となります。
 * </p>
 * @param int $length [optional] <p>
 * バイト単位での長さ。
 * 省略したり NULL を指定したりした場合は、
 * 文字列の最後までの全バイトを取り出します。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return string <b>mb_strcut</b> は、
 * <i>start</i> および
 * <i>length</i> パラメータで指定した
 * <i>str</i> の一部を返します。
 */
function mb_strcut(string $str, int $start, int $length = NULL, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 文字列の幅を返す
 * @link http://php.net/manual/ja/function.mb-strwidth.php
 * @param string $str <p>
 * 幅を取得したい文字列。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return int 文字列 <i>str</i> の幅を返します。
 */
function mb_strwidth(string $str, string $encoding = 'mb_internal_encoding()'): int {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 指定した幅で文字列を丸める
 * @link http://php.net/manual/ja/function.mb-strimwidth.php
 * @param string $str <p>
 * 丸めたい文字列。
 * </p>
 * @param int $start <p>
 * 開始位置のオフセット。文字列の始めからの文字数 (最初の文字は 0) です。
 * 負のオフセットは、文字列の末尾からのオフセットと解釈されます。
 * </p>
 * @param int $width <p>
 * 丸める幅。負の値は、文字列の末尾からの幅を数えます。
 * </p>
 * @param string $trimmarker [optional] <p>
 * 丸めた後にその文字列の最後に追加される文字列。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return string 丸められた文字列を返します。
 * <i>trimmarker</i> が設定された場合、
 * <i>width</i> にマッチする最後の文字を <i>trimmarker</i> で置き換えます。
 */
function mb_strimwidth(string $str, int $start, int $width, string $trimmarker = '', string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 文字エンコーディングを変換する
 * @link http://php.net/manual/ja/function.mb-convert-encoding.php
 * @param string $str <p>
 * 変換する文字列。
 * </p>
 * @param string $to_encoding <p>
 * <i>str</i> の変換後の文字エンコーディング。
 * </p>
 * @param mixed $from_encoding [optional] <p>
 * 変換前の文字エンコーディング名を指定します。
 * これは、配列またはカンマ区切りの文字列とすることが可能です。
 * <i>from_encoding</i>
 * を指定しなかった場合は、内部文字エンコーディングを使用します。
 * </p>
 * <p>
 * サポートされる文字エンコーディングを参照ください。
 * </p>
 * @return string 変換後の文字列を返します。
 */
function mb_convert_encoding(string $str, string $to_encoding, $from_encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 文字エンコーディングを検出する
 * @link http://php.net/manual/ja/function.mb-detect-encoding.php
 * @param string $str <p>
 * 検出する文字列。
 * </p>
 * @param mixed $encoding_list [optional] <p>
 * <i>encoding_list</i> は文字エンコーディングのリストで、
 * エンコーディング検出の順番を配列またはカンマ区切りのリストで指定します。
 * </p>
 * <p>
 * <i>encoding_list</i> が省略された場合、
 * detect_order が使用されます。
 * </p>
 * @param bool $strict [optional] <p>
 * <i>strict</i> は、
 * 厳格なエンコーディング検出を行うかどうかを指定します。
 * デフォルトは <b>FALSE</b> です。
 * </p>
 * @return string 検出した文字エンコーディングを返します。
 * 指定した文字列からエンコーディングを検出できなかった場合は <b>FALSE</b> を返します。
 */
function mb_detect_encoding(string $str, $encoding_list = 'mb_detect_order()', bool $strict = false): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * サポートするすべてのエンコーディングの配列を返す
 * @link http://php.net/manual/ja/function.mb-list-encodings.php
 * @return array 数値添字の配列を返します。
 */
function mb_list_encodings(): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 既知のエンコーディング・タイプのエイリアスを取得
 * @link http://php.net/manual/ja/function.mb-encoding-aliases.php
 * @param string $encoding <p>
 * エイリアスに関してチェックするエンコーディングタイプ。
 * </p>
 * @return array 成功した場合、数値で索引がつけられたエンコーディング・エイリアスの配列を返し、
 * 失敗した場合に <b>FALSE</b> を返します
 */
function mb_encoding_aliases(string $encoding): array {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * カナを("全角かな"、"半角かな"等に)変換する
 * @link http://php.net/manual/ja/function.mb-convert-kana.php
 * @param string $str <p>
 * 変換される文字列。
 * </p>
 * @param string $option [optional] <p>
 * 変換オプション。
 * </p>
 * <p>
 * 以下のオプションを組み合わせて指定します。
 * <table>
 * 使用可能な変換オプション
 * <tr valign="top">
 * <td>オプション</td>
 * <td>意味</td>
 * </tr>
 * <tr valign="top">
 * <td>r</td>
 * <td>
 * 「全角」英字を「半角」に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>R</td>
 * <td>
 * 「半角」英字を「全角」に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>n</td>
 * <td>
 * 「全角」数字を「半角」に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>N</td>
 * <td>
 * 「半角」数字を「全角」に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>a</td>
 * <td>
 * 「全角」英数字を「半角」に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>A</td>
 * <td>
 * 「半角」英数字を「全角」に変換します
 * （"a", "A" オプションに含まれる文字は、U+0022, U+0027, U+005C,
 * U+007Eを除く U+0021 - U+007E の範囲です）。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>s</td>
 * <td>
 * 「全角」スペースを「半角」に変換します（U+3000 -> U+0020）。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>S</td>
 * <td>
 * 「半角」スペースを「全角」に変換します（U+0020 -> U+3000）。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>k</td>
 * <td>
 * 「全角カタカナ」を「半角カタカナ」に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>K</td>
 * <td>
 * 「半角カタカナ」を「全角カタカナ」に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>h</td>
 * <td>
 * 「全角ひらがな」を「半角カタカナ」に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>H</td>
 * <td>
 * 「半角カタカナ」を「全角ひらがな」に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>c</td>
 * <td>
 * 「全角カタカナ」を「全角ひらがな」に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>C</td>
 * <td>
 * 「全角ひらがな」を「全角カタカナ」に変換します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>V</td>
 * <td>
 * 濁点付きの文字を一文字に変換します。"K", "H" と共に使用します。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return string 変換後の文字列を返します。
 */
function mb_convert_kana(string $str, string $option = "KV", string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * MIMEヘッダの文字列をエンコードする
 * @link http://php.net/manual/ja/function.mb-encode-mimeheader.php
 * @param string $str <p>
 * エンコードする文字列。
 * <b>mb_internal_encoding</b> と同じエンコーディングにしなければいけません。
 * </p>
 * @param string $charset [optional] <p>
 * <i>charset</i> は、<i>str</i>
 * の変換後の文字セット名です。デフォルトは、現在の NLS 設定
 * (mbstring.language) によって決まります。
 * </p>
 * @param string $transfer_encoding [optional] <p>
 * <i>transfer_encoding</i> は MIME エンコーディングの
 * 方式を指定します。"B" (Base64) または
 * "Q" (Quoted-Printable) のどちらかでなければなりません。
 * デフォルトは "B" です。
 * </p>
 * @param string $linefeed [optional] <p>
 * <i>linefeed</i> は EOL (行末) のマーカで、
 * <b>mb_encode_mimeheader</b> が行を折りたたむ
 * (RFC 用語で、
 * ある一定より長い行を複数行に分割することを言います。
 * 分割する長さは、現在 74 文字に固定されています) 際に利用します。
 * デフォルトは "\r\n" (CRLF) です。
 * </p>
 * @param int $indent [optional] <p>
 * 最初の行の字下げ (ヘッダで
 * <i>str</i> の前におく文字数)。
 * </p>
 * @return string 文字列を ASCII 表現に変換したものを返します。
 */
function mb_encode_mimeheader(string $str, string $charset = 'mb_language() によって決まる値', string $transfer_encoding = B, string $linefeed = '\r\n', int $indent = 0): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * MIME ヘッダフィールドの文字列をデコードする
 * @link http://php.net/manual/ja/function.mb-decode-mimeheader.php
 * @param string $str <p>
 * デコードする文字列。
 * </p>
 * @return string 内部文字エンコーディングでデコードされた文字列を返します。
 */
function mb_decode_mimeheader(string $str): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 変数の文字コードを変換する
 * @link http://php.net/manual/ja/function.mb-convert-variables.php
 * @param string $to_encoding <p>
 * 文字列の変換後のエンコーディング。
 * </p>
 * @param mixed $from_encoding <p>
 * <i>from_encoding</i> には配列またはカンマ区切りの文字列を指定し、
 * <i>from-coding</i> からエンコーディングの検出を試みます。
 * <i>from_encoding</i>
 * が省略された場合、detect_order を使用します。
 * </p>
 * @param mixed $vars <p>
 * <i>vars</i)<3番目以降の引数)は、変換する変数への
 * リファレンスです。文字列、配列、オブジェクトを指定することが可能です。
 * <b>mb_convert_variables</b> は全てのパラメータが
 * 同じエンコーディングを有することを仮定します。
 * </p>
 * @param mixed $_ [optional] <p>
 * 追加の変数。
 * </p>
 * @return string 成功時に変換前の文字エンコーディングを返し、失敗した場合に <b>FALSE</b> を返します。
 */
function mb_convert_variables(string $to_encoding, $from_encoding, &$vars, &$_ = null): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 文字を HTML 数値エンティティにエンコードする
 * @link http://php.net/manual/ja/function.mb-encode-numericentity.php
 * @param string $str <p>
 * エンコードする文字列。
 * </p>
 * @param array $convmap <p>
 * <i>convmap</i> は、変換するコード領域を指定する配列です。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @param bool $is_hex [optional]
 * @return string 変換後の文字列を返します。
 */
function mb_encode_numericentity(string $str, array $convmap, string $encoding = 'mb_internal_encoding()', bool $is_hex = FALSE): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * HTML 数値エンティティを文字にデコードする
 * @link http://php.net/manual/ja/function.mb-decode-numericentity.php
 * @param string $str <p>
 * デコードする文字列。
 * </p>
 * @param array $convmap <p>
 * <i>convmap</i>
 * は変換するコード領域を指定する配列です。
 * </p>
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return string 変換された文字列を返します。
 */
function mb_decode_numericentity(string $str, array $convmap, string $encoding = 'mb_internal_encoding()'): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * エンコード変換を行ってメールを送信する
 * @link http://php.net/manual/ja/function.mb-send-mail.php
 * @param string $to <p>
 * 送信先のメールアドレス。
 * 各アドレスをカンマで区切ると、複数の宛先を
 * <i>to</i> に指定できます。
 * このパラメータは、自動的にはエンコードされません。
 * </p>
 * @param string $subject <p>
 * メールの件名。
 * </p>
 * @param string $message <p>
 * メールの本文。
 * </p>
 * @param string $additional_headers [optional] <p>
 * メールヘッダの最後に挿入される文字列。
 * </p>
 * <p>
 * 通常、これは追加のヘッダ（From、Cc、Bcc）のために用いられます。
 * 複数のヘッダを追加する場合は CRLF（\r\n）で区切ります。
 * Validate parameter not to be injected unwanted headers by attackers.
 * </p>
 * <p>
 * メールを送信する際には、必ず
 * From ヘッダが含まれていなければなりません。
 * <i>additional_headers</i> パラメータで指定するか、
 * あるいは <i>php.ini</i> にデフォルト値を指定します。
 * </p>
 * <p>
 * 指定しなかった場合は、以下のようなエラーメッセージが返ります
 * Warning: mail(): "sendmail_from" not
 * set in php.ini or custom "From:" header missing 。
 * Windows では、From ヘッダを設定すると
 * Return-Path も設定されます。
 * </p>
 * <p>
 * メッセージが受信されなかった場合には、LF（\n）のみを使ってみてください。
 * Unix の MTA の中には、自動的に LF を CRLF に変換してしまう
 * もの (有名なところでは、qmail など)
 * があります（もし CRLF を利用していた場合、CR が重複してしまいます）。
 * ただし、これは最後の手段です。というのも、これは
 * RFC 2822 に違反しているからです。
 * </p>
 * @param string $additional_parameter [optional] <p>
 * <i>additional_parameter</i> は、MTA へ渡す
 * コマンドライン引数です。sendmail を利用する際に正しい Return-Path
 * を設定するためなどに利用すると便利です。
 * </p>
 * <p>
 * このパラメータはコマンドの実行を防止するために内部的に <b>escapeshellcmd</b>
 * によってエスケープされます。 <b>escapeshellcmd</b> はコマンドの実行を防止しますが、
 * 別のパラメータを追加することは許してしまいます。セキュリティ上の理由から、
 * このパラメータは検証されるべきです。
 * </p>
 * <p>
 * <b>escapeshellcmd</b> が自動的に適用されるため、
 * インターネット RFC でメールアドレスとして許可さているいくつかの文字を使用することができません。
 * これらの文字を使用することが必須であるプログラムでは <b>mail</b>
 * を使うことはできません。
 * </p>
 * <p>
 * この方法でエンベロープの sender ヘッダ（-f）を設定する際は、
 * 'X-Warning' ヘッダが付加されないように Web サーバーの実行ユーザーを
 * sendmail 設定に追加しておく必要があるかもしれません。
 * sendmail を利用している場合、これは /etc/mail/trusted-users
 * で設定します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mb_send_mail(string $to, string $subject, string $message, string $additional_headers = null, string $additional_parameter = null): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * mbstring の内部設定値を取得する
 * @link http://php.net/manual/ja/function.mb-get-info.php
 * @param string $type [optional] <p>
 * <i>type</i> が指定されない場合または "all"
 * が指定された場合、"internal_encoding", "http_output", "http_input",
 * "func_overload", "mail_charset", "mail_header_encoding",
 * "mail_body_encoding" の設定値を有する連想配列が返されます。
 * </p>
 * <p>
 * <i>type</i> に "http_output",
 * "http_input", "internal_encoding", "func_overload" が指定された場合、
 * 指定された設定パラメータが返されます。
 * </p>
 * @return mixed <i>type</i> が指定されていない場合は型情報を含む配列、
 * それ以外の場合は指定した <i>type</i> の値を返します。
 */
function mb_get_info(string $type = "all") {}

/**
 * (PHP 4 &gt;= 4.4.3, PHP 5 &gt;= 5.1.3, PHP 7)<br/>
 * 文字列が、指定したエンコーディングで有効なものかどうかを調べる
 * @link http://php.net/manual/ja/function.mb-check-encoding.php
 * @param string $var [optional] <p>
 * 調べるバイトストリーム。省略した場合は、
 * リクエスト開始時からのすべての入力が対象となります。
 * </p>
 * @param string $encoding [optional] <p>
 * 期待するエンコーディング。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function mb_check_encoding(string $var = null, string $encoding = 'mb_internal_encoding()'): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 現在のマルチバイト正規表現用のエンコーディングを取得または設定する
 * @link http://php.net/manual/ja/function.mb-regex-encoding.php
 * @param string $encoding [optional] <i>encoding</i>
 * パラメータには文字エンコーディングを指定します。省略した場合は、
 * 内部文字エンコーディングを使用します。</p>
 * @return mixed
 */
function mb_regex_encoding(string $encoding = 'mb_regex_encoding()') {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * マルチバイト正規表現関数のデフォルトオプションを取得または設定する
 * @link http://php.net/manual/ja/function.mb-regex-set-options.php
 * @param string $options [optional] <p>
 * 設定するオプション。文字列で設定し、各文字がオプションを表します。
 * モードを設定する際には、モード文字は最後に指定しなければなりません。
 * オプションは複数指定できますが、モードはひとつしか指定できません。
 * </p>
 * <table>
 * Regex のオプション
 * <tr valign="top">
 * <td>オプション</td>
 * <td>意味</td>
 * </tr>
 * <tr valign="top">
 * <td>i</td>
 * <td>曖昧なマッチをオンにする</td>
 * </tr>
 * <tr valign="top">
 * <td>x</td>
 * <td>拡張パターン形式を有効にする</td>
 * </tr>
 * <tr valign="top">
 * <td>m</td>
 * <td>'.' が改行にマッチする</td>
 * </tr>
 * <tr valign="top">
 * <td>s</td>
 * <td>'^' -> '\A', '$' -> '\Z'</td>
 * </tr>
 * <tr valign="top">
 * <td>p</td>
 * <td>m と s を両方指定するのと同じ</td>
 * </tr>
 * <tr valign="top">
 * <td>l</td>
 * <td>最も長くマッチするものを探す</td>
 * </tr>
 * <tr valign="top">
 * <td>n</td>
 * <td>空のマッチを無視する</td>
 * </tr>
 * <tr valign="top">
 * <td>e</td>
 * <td>結果のコードを <b>eval</b> する</td>
 * </tr>
 * </table>
 * <table>
 * Regex 構文モード
 * <tr valign="top">
 * <td>モード</td>
 * <td>意味</td>
 * </tr>
 * <tr valign="top">
 * <td>j</td>
 * <td>Java (Sun java.util.regex)</td>
 * </tr>
 * <tr valign="top">
 * <td>u</td>
 * <td>GNU regex</td>
 * </tr>
 * <tr valign="top">
 * <td>g</td>
 * <td>grep</td>
 * </tr>
 * <tr valign="top">
 * <td>c</td>
 * <td>Emacs</td>
 * </tr>
 * <tr valign="top">
 * <td>r</td>
 * <td>Ruby</td>
 * </tr>
 * <tr valign="top">
 * <td>z</td>
 * <td>Perl</td>
 * </tr>
 * <tr valign="top">
 * <td>b</td>
 * <td>POSIX Basic regex</td>
 * </tr>
 * <tr valign="top">
 * <td>d</td>
 * <td>POSIX Extended regex</td>
 * </tr>
 * </table>
 * @return string 以前設定されていたオプション文字列を返します。
 * <i>options</i> を省略した場合は、
 * 現在設定されているオプションを返します。
 */
function mb_regex_set_options(string $options = 'mb_regex_set_options()'): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * Regular expression match with multibyte support
 * @link http://php.net/manual/ja/function.mb-ereg.php
 * @param string $pattern <p>
 * The search pattern.
 * </p>
 * @param string $string <p>
 * The search string.
 * </p>
 * @param array $regs [optional] <p>
 * If matches are found for parenthesized substrings of
 * <i>pattern</i> and the function is called with the
 * third argument <i>regs</i>, the matches will be stored
 * in the elements of the array <i>regs</i>.
 * If no matches are found, <i>regs</i> is set to an empty
 * array.
 * </p>
 * <p>
 * $regs[1] will contain the substring which starts at
 * the first left parenthesis; $regs[2] will contain
 * the substring starting at the second, and so on.
 * $regs[0] will contain a copy of the complete string
 * matched.
 * </p>
 * @return int the byte length of the matched string if a match for
 * <i>pattern</i> was found in <i>string</i>,
 * or <b>FALSE</b> if no matches were found or an error occurred.
 * </p>
 * <p>
 * If the optional parameter <i>regs</i> was not passed or
 * the length of the matched string is 0, this function returns 1.
 */
function mb_ereg(string $pattern, string $string, array &$regs = null): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * Regular expression match ignoring case with multibyte support
 * @link http://php.net/manual/ja/function.mb-eregi.php
 * @param string $pattern <p>
 * The regular expression pattern.
 * </p>
 * @param string $string <p>
 * The string being searched.
 * </p>
 * @param array $regs [optional] <p>
 * If matches are found for parenthesized substrings of
 * <i>pattern</i> and the function is called with the
 * third argument <i>regs</i>, the matches will be stored
 * in the elements of the array <i>regs</i>.
 * If no matches are found, <i>regs</i> is set to an empty
 * array.
 * </p>
 * <p>
 * $regs[1] will contain the substring which starts at
 * the first left parenthesis; $regs[2] will contain
 * the substring starting at the second, and so on.
 * $regs[0] will contain a copy of the complete string
 * matched.
 * </p>
 * @return int the byte length of the matched string if a match for
 * <i>pattern</i> was found in <i>string</i>,
 * or <b>FALSE</b> if no matches were found or an error occurred.
 * </p>
 * <p>
 * If the optional parameter <i>regs</i> was not passed or
 * the length of the matched string is 0, this function returns 1.
 */
function mb_eregi(string $pattern, string $string, array &$regs = null): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * マルチバイト文字列に正規表現による置換を行う
 * @link http://php.net/manual/ja/function.mb-ereg-replace.php
 * @param string $pattern <p>
 * 正規表現パターン。
 * </p>
 * <p>
 * マルチバイト文字を <i>pattern</i>
 * で使用することができます。
 * </p>
 * @param string $replacement <p>
 * 置換文字列。
 * </p>
 * @param string $string <p>
 * 調べたい文字列。
 * </p>
 * @param string $option [optional] <i>option</i>
 * パラメータで、マッチングの動作を変更可能です。
 * i を指定した場合、大文字・小文字が
 * 区別されなくなります。
 * x を指定した場合、空白が無視されます。
 * m を指定した場合、マルチラインモードとなり、
 * 改行文字も "." に含まれるようになります。
 * p を指定した場合、POSIX モードとなり、
 * 改行も通常文字とみなされるようになります。
 * e を指定した場合、文字列 <i>replacement</i>
 * がPHPの式として評価されます。
 * @return string 成功した場合に結果の文字列、エラー時に <b>FALSE</b> を返します。
 */
function mb_ereg_replace(string $pattern, string $replacement, string $string, string $option = "msr"): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * マルチバイト文字列に大文字小文字を区別せずに正規表現による置換を行う
 * @link http://php.net/manual/ja/function.mb-eregi-replace.php
 * @param string $pattern <p>
 * 正規表現パターン。マルチバイト文字を使用できます。
 * 大文字小文字は区別しません。
 * </p>
 * @param string $replace <p>
 * 置換する文字列。
 * </p>
 * @param string $string <p>
 * 検索対象となる文字列。
 * </p>
 * @param string $option [optional] <i>option</i>
 * の意味は、<b>mb_ereg_replace</b> の場合と同じです。
 * @return string 結果の文字列、あるいはエラー時に <b>FALSE</b> を返します。
 */
function mb_eregi_replace(string $pattern, string $replace, string $string, string $option = "msri"): string {}

/**
 * (PHP 5 &gt;= 5.4.1, PHP 7)<br/>
 * マルチバイト文字列にコールバック関数を用いた正規表現による置換を行う
 * @link http://php.net/manual/ja/function.mb-ereg-replace-callback.php
 * @param string $pattern <p>
 * 正規表現パターン。
 * </p>
 * <p>
 * <i>pattern</i>ではマルチバイト文字列を使用可能です。
 * </p>
 * @param callable $callback <p>
 * コールバック関数で、
 * <i>subject</i>文字列で一致した要素を配列で
 * 指定してコールされます。
 * このコールバック関数は、置換した文字列を返す必要があります。
 * </p>
 * <p>
 * しばしば、
 * <b>mb_ereg_replace_callback</b>の
 * <i>callback</i>関数が必要となるのは一度だけである
 * 場合があります。
 * この場合、
 * <b>mb_ereg_replace_callback</b>をコールする際の
 * コールバックに
 * 匿名関数
 * を使用することができます。
 * このようにすることで、
 * コールに関する全ての情報を一つの場所に集約し、
 * 他のどこでも使用されないコールバック関数の名前を
 * 関数の名前空間にばらまかないですみます。
 * </p>
 * @param string $string <p>
 * チェックされるstring。
 * </p>
 * @param string $option [optional] <p>
 * <i>option</i>
 * パラメータにより検索条件を指定できます。このパラメータに
 * iが指定された場合、 大文字/小文字が無視されます。
 * x が指定された場合、
 * 空白文字が無視されます。
 * mが指定された場合、
 * 検索はマルチラインモードで行われ、改行文字が'.'に含まれるようになります。
 * p が指定された場合、 POSIXモードで検索が
 * 行われ、 改行文字は通常の文字とみなされます。
 * eは
 * <b>mb_ereg_replace_callback</b>では使用できないことに
 * 注意してください。
 * </p>
 * @return string 成功した際に string、 そうでない場合はエラー時に <b>FALSE</b> を
 * 返します。
 */
function mb_ereg_replace_callback(string $pattern, callable $callback, string $string, string $option = "msr"): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * マルチバイト文字列を正規表現により分割する
 * @link http://php.net/manual/ja/function.mb-split.php
 * @param string $pattern <p>
 * 正規表現パターン。
 * </p>
 * @param string $string <p>
 * 分割する文字列。
 * </p>
 * @param int $limit [optional] オプションの引数 <i>limit</i> を指定した場合は、
 * 最大 <i>limit</i> 個の要素に分割されます。
 * @return array 結果を配列で返します。
 */
function mb_split(string $pattern, string $string, int $limit = -1): array {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * マルチバイト文字列が正規表現に一致するか調べる
 * @link http://php.net/manual/ja/function.mb-ereg-match.php
 * @param string $pattern <p>
 * 正規表現パターン。
 * </p>
 * @param string $string <p>
 * 評価する文字列。
 * </p>
 * @param string $option [optional] <p>
 * </p>
 * @return bool
 */
function mb_ereg_match(string $pattern, string $string, string $option = "msr"): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 指定したマルチバイト文字列が正規表現に一致するか調べる
 * @link http://php.net/manual/ja/function.mb-ereg-search.php
 * @param string $pattern [optional] <p>
 * 検索パターン。
 * </p>
 * @param string $option [optional] <p>
 * 検索オプション。
 * </p>
 * @return bool
 */
function mb_ereg_search(string $pattern = null, string $option = "ms"): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 指定したマルチバイト文字列が正規表現に一致する部分の位置と長さを返す
 * @link http://php.net/manual/ja/function.mb-ereg-search-pos.php
 * @param string $pattern [optional] <p>
 * 検索パターン。
 * </p>
 * @param string $option [optional] <p>
 * 検索オプション。
 * </p>
 * @return array
 */
function mb_ereg_search_pos(string $pattern = null, string $option = "ms"): array {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 指定したマルチバイト文字列が正規表現に一致する部分を取得する
 * @link http://php.net/manual/ja/function.mb-ereg-search-regs.php
 * @param string $pattern [optional] <p>
 * 検索パターン。
 * </p>
 * @param string $option [optional] <p>
 * 検索オプション。
 * </p>
 * @return array
 */
function mb_ereg_search_regs(string $pattern = null, string $option = "ms"): array {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * マルチバイト正規表現検索用の文字列と正規表現を設定する
 * @link http://php.net/manual/ja/function.mb-ereg-search-init.php
 * @param string $string <p>
 * 検索文字列。
 * </p>
 * @param string $pattern [optional] <p>
 * 検索パターン。
 * </p>
 * @param string $option [optional] <p>
 * 検索オプション。
 * </p>
 * @return bool
 */
function mb_ereg_search_init(string $string, string $pattern = null, string $option = "msr"): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * マルチバイト文字列が正規表現に一致する部分があるか調べる
 * @link http://php.net/manual/ja/function.mb-ereg-search-getregs.php
 * @return array
 */
function mb_ereg_search_getregs(): array {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 次の正規表現検索を開始する位置を取得する
 * @link http://php.net/manual/ja/function.mb-ereg-search-getpos.php
 * @return int
 */
function mb_ereg_search_getpos(): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 次の正規表現検索を開始する位置を設定する
 * @link http://php.net/manual/ja/function.mb-ereg-search-setpos.php
 * @param int $position <p>
 * 設定する位置。負の値を指定すると、文字列の末尾から数えます。
 * </p>
 * @return bool
 */
function mb_ereg_search_setpos(int $position): bool {}

/**
 * @param $encoding [optional]
 */
function mbregex_encoding($encoding) {}

/**
 * @param $pattern
 * @param $string
 * @param $registers [optional]
 */
function mbereg($pattern, $string, &$registers) {}

/**
 * @param $pattern
 * @param $string
 * @param $registers [optional]
 */
function mberegi($pattern, $string, &$registers) {}

/**
 * @param $pattern
 * @param $replacement
 * @param $string
 * @param $option [optional]
 */
function mbereg_replace($pattern, $replacement, $string, $option) {}

/**
 * @param $pattern
 * @param $replacement
 * @param $string
 */
function mberegi_replace($pattern, $replacement, $string) {}

/**
 * @param $pattern
 * @param $string
 * @param $limit [optional]
 */
function mbsplit($pattern, $string, $limit) {}

/**
 * @param $pattern
 * @param $string
 * @param $option [optional]
 */
function mbereg_match($pattern, $string, $option) {}

/**
 * @param $pattern [optional]
 * @param $option [optional]
 */
function mbereg_search($pattern, $option) {}

/**
 * @param $pattern [optional]
 * @param $option [optional]
 */
function mbereg_search_pos($pattern, $option) {}

/**
 * @param $pattern [optional]
 * @param $option [optional]
 */
function mbereg_search_regs($pattern, $option) {}

/**
 * @param $string
 * @param $pattern [optional]
 * @param $option [optional]
 */
function mbereg_search_init($string, $pattern, $option) {}

function mbereg_search_getregs() {}

function mbereg_search_getpos() {}

/**
 * @param $position
 */
function mbereg_search_setpos($position) {}

define ('MB_OVERLOAD_MAIL', 1);
define ('MB_OVERLOAD_STRING', 2);
define ('MB_OVERLOAD_REGEX', 4);
define ('MB_CASE_UPPER', 0);
define ('MB_CASE_LOWER', 1);
define ('MB_CASE_TITLE', 2);

// End of mbstring v.7.0.19
?>
