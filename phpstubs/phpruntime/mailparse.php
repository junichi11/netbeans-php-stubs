<?php



/**
 * 最も適したエンコーディングを取得する
 * <p>ファイルポインタから内容を読み込む際に最も適したエンコーディングを調べます。</p>
 * @param resource $fp <p>有効なファイルポインタ。これはシーク可能である必要があります。</p>
 * @return string <p>mbstring モジュールがサポートする文字エンコーディングのいずれかを返します。</p>
 * @link http://php.net/manual/ja/function.mailparse-determine-best-xfer-encoding.php
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_determine_best_xfer_encoding($fp): string {}

/**
 * mime メールリソースを作成する
 * <p><i>MIME</i> メールリソースを作成します。</p>
 * @return resource <p>メッセージのパースに使用するハンドルを返します。</p>
 * @link http://php.net/manual/ja/function.mailparse-msg-create.php
 * @see mailparse_msg_free(), mailparse_msg_parse_file()
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_msg_create() {}

/**
 * メッセージセクションを展開/デコードする
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $mimemail <p>有効な <i>MIME</i> リソース。</p>
 * @param string $msgbody
 * @param callable $callbackfunc
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.mailparse-msg-extract-part.php
 * @see mailparse_msg_extract_part_file(), mailparse_msg_extract_whole_part_file()
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_msg_extract_part($mimemail, string $msgbody, callable $callbackfunc = NULL): void {}

/**
 * メッセージセクションを展開/デコードする
 * <p>指定したファイル名のメッセージセクションを展開/デコードします。</p><p>セクションの内容は、transfer encoding に応じて適切にデコードされます。 base64、quoted-printable および uuencode 形式をサポートしています。</p>
 * @param resource $mimemail <p><code>mailparse_msg_create()</code> で作成した <i>MIME</i> リソース。</p>
 * @param mixed $filename <p>ファイル名あるいは有効なストリームリソース。</p>
 * @param callable $callbackfunc <p>展開されたセクションに渡されるコールバック関数、あるいは <b><code>NULL</code></b> を指定すると、この関数は展開したセクションを返します。</p> <p>省略した場合は標準出力に出力されます。</p>
 * @return string <p><code>callbackfunc</code> が <b><code>NULL</code></b> でない場合は、 成功時に <b><code>TRUE</code></b> を返します。</p><p><code>callbackfunc</code> が <b><code>NULL</code></b> の場合は、 展開したセクションを文字列で返します。</p><p>エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mailparse-msg-extract-part-file.php
 * @see mailparse_msg_extract_part(), mailparse_msg_extract_whole_part_file()
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_msg_extract_part_file($mimemail, $filename, callable $callbackfunc = NULL): string {}

/**
 * ヘッダを含むメッセージセクションを、transfer encoding をデコードせずに展開する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $mimemail <p>有効な <i>MIME</i> リソース。</p>
 * @param string $filename
 * @param callable $callbackfunc
 * @return string
 * @link http://php.net/manual/ja/function.mailparse-msg-extract-whole-part-file.php
 * @see mailparse_msg_extract_part(), mailparse_msg_extract_part_file()
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_msg_extract_whole_part_file($mimemail, string $filename, callable $callbackfunc = NULL): string {}

/**
 * MIME リソースを解放する
 * <p><i>MIME</i> リソースを解放します。</p>
 * @param resource $mimemail <p><code>mailparse_msg_create()</code> あるいは <code>mailparse_msg_parse_file()</code> が割り当てた 有効な <i>MIME</i> リソース。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mailparse-msg-free.php
 * @see mailparse_msg_create(), mailparse_msg_parse_file()
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_msg_free($mimemail): bool {}

/**
 * MIME メッセージの指定したセクションに関するハンドルを返す
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $mimemail <p>有効な <i>MIME</i> リソース。</p>
 * @param string $mimesection
 * @return resource
 * @link http://php.net/manual/ja/function.mailparse-msg-get-part.php
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_msg_get_part($mimemail, string $mimesection) {}

/**
 * メッセージに関する情報の連想配列を返す
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $mimemail <p>有効な <i>MIME</i> リソース。</p>
 * @return array
 * @link http://php.net/manual/ja/function.mailparse-msg-get-part-data.php
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_msg_get_part_data($mimemail): array {}

/**
 * 指定したメッセージ内の MIME セクション名の配列を返す
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $mimemail <p>有効な <i>MIME</i> リソース。</p>
 * @return array
 * @link http://php.net/manual/ja/function.mailparse-msg-get-structure.php
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_msg_get_structure($mimemail): array {}

/**
 * データをパースし、バッファに追加する
 * <p>データを順にパースし、指定した mime メールリソースに格納します。</p><p>この関数により、ファイル全体を読み込んでからパースするのではなく 読み込んだ部分から順に処理していくことができます。</p>
 * @param resource $mimemail <p>有効な <i>MIME</i> リソース。</p>
 * @param string $data
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mailparse-msg-parse.php
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_msg_parse($mimemail, string $data): bool {}

/**
 * ファイルをパースする
 * <p>ファイルをパースします。 ディスク上にあるメールファイルをパースするための最良の方法です。</p>
 * @param string $filename <p>メッセージを保持するファイルへのパス。 このファイルがオープンされ、ストリームとしてパーサに流し込まれます。</p>
 * @return resource <p>構造を表す <i>MIME</i> リソース、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mailparse-msg-parse-file.php
 * @see mailparse_msg_free(), mailparse_msg_create()
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_msg_parse_file(string $filename) {}

/**
 * RFC 822 準拠のアドレスをパースする
 * <p>» RFC 822 準拠の受信者リスト、 たとえば <i>To:</i> ヘッダの内容などをパースします。</p>
 * @param string $addresses <p>アドレスを含む文字列。たとえば <i>Wez Furlong &lt;wez@example.com&gt;, doe@example.com</i> のようになります。</p>  <p><b>注意</b>:</p> <p>この文字列にはヘッダ名を含めてはいけません。</p>
 * @return array <p>各受信者について以下のキーをもつ連想配列の配列を返します。</p>   <i>display</i>  表示用の受信者名。この部分が設定されていない場合は、 <i>address</i> と同じ値となります。    <i>address</i> メールアドレス。   <i>is_group</i> 受信者がニュースグループである場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b>。
 * @link http://php.net/manual/ja/function.mailparse-rfc822-parse-addresses.php
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_rfc822_parse_addresses(string $addresses): array {}

/**
 * ソースファイルポインタからストリームデータを取得し、 エンコーディングを適用し、出力ファイルポインタに書き込む
 * <p>ソースファイルポインタからストリームデータを取得し、 <code>encoding</code> を適用して それを出力ファイルポインタに書き込みます。</p>
 * @param resource $sourcefp <p>有効なファイルハンドル。このファイルからのストリームがパーサに流し込まれます。</p>
 * @param resource $destfp <p>エンコードしたデータを書き込むファイルハンドル。</p>
 * @param string $encoding <p>mbstring モジュールがサポートする文字エンコーディングのいずれか。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.mailparse-stream-encode.php
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_stream_encode($sourcefp, $destfp, string $encoding): bool {}

/**
 * ファイルポインタからデータをスキャンし、uuencode されたファイルを展開する
 * <p>指定したファイルポインタからのデータを読み込み、 uuencode されたファイルを一時ファイルに展開します。</p>
 * @param resource $fp <p>有効なファイルポインタ。</p>
 * @return array <p>ファイル名の情報を含む連想配列の配列を返します。</p>   <i>filename</i> 作成された一時ファイルへのパス。   <i>origfilename</i> もとのファイル名。uuencode されたパートにのみ存在します。    最初の filename エントリがメッセージ本文、次のエントリがデコードされた uuencode ファイルとなります。
 * @link http://php.net/manual/ja/function.mailparse-uudecode-all.php
 * @since PECL mailparse >= 0.9.0
 */
function mailparse_uudecode_all($fp): array {}

define('MAILPARSE_EXTRACT_OUTPUT', null);

define('MAILPARSE_EXTRACT_RETURN', null);

define('MAILPARSE_EXTRACT_STREAM', null);

