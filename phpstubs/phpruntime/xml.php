<?php



/**
 * UTF-8 エンコードされた ISO-8859-1 文字列をシングルバイトの ISO-8859-1 に変換する
 * <p>この関数は、文字列 <code>data</code> を <i>UTF-8</i> エンコードから <i>ISO-8859-1</i> へ変換します。 Bytes in the string which are not valid <i>UTF-8</i>, and <i>UTF-8</i> characters which do not exist in <i>ISO-8859-1</i> (that is, characters above <i>U+00FF</i>) are replaced with <i>&#63;</i>.</p><p><b>注意</b>:</p><p>Many web pages marked as using the <i>ISO-8859-1</i> character encoding actually use the similar <i>Windows-1252</i> encoding, and web browsers will interpret <i>ISO-8859-1</i> web pages as <i>Windows-1252</i>. <i>Windows-1252</i> features additional printable characters, such as the Euro sign (<i>&#63;</i>) and curly quotes (<i>“</i> <i>”</i>), instead of certain <i>ISO-8859-1</i> control characters. This function will not convert such <i>Windows-1252</i> characters correctly. Use a different function if <i>Windows-1252</i> conversion is required.</p>
 * @param string $data <p>UTF-8 エンコードされた文字列。</p>
 * @return string <p><code>data</code> を ISO-8859-1 に変換した結果を返します。</p>
 * @link http://php.net/manual/ja/function.utf8-decode.php
 * @see utf8_encode(), mb_convert_encoding(), iconv(), recode_string()
 * @since PHP 4, PHP 5, PHP 7
 */
function utf8_decode(string $data): string {}

/**
 * ISO-8859-1 文字列を UTF-8 にエンコードする
 * <p>この関数は、文字列 <code>data</code> を <i>ISO-8859-1</i> エンコードから <i>UTF-8</i> へ変換します。</p><p><b>注意</b>:</p><p>Many web pages marked as using the <i>ISO-8859-1</i> character encoding actually use the similar <i>Windows-1252</i> encoding, and web browsers will interpret <i>ISO-8859-1</i> web pages as <i>Windows-1252</i>. <i>Windows-1252</i> features additional printable characters, such as the Euro sign (<i>&#63;</i>) and curly quotes (<i>“</i> <i>”</i>), instead of certain <i>ISO-8859-1</i> control characters. This function will not convert such <i>Windows-1252</i> characters correctly. Use a different function if <i>Windows-1252</i> conversion is required.</p>
 * @param string $data <p>ISO-8859-1 形式の文字列。</p>
 * @return string <p><code>data</code> を UTF-8 に変換した結果を返します。</p>
 * @link http://php.net/manual/ja/function.utf8-encode.php
 * @see utf8_decode(), mb_convert_encoding(), iconv(), recode_string()
 * @since PHP 4, PHP 5, PHP 7
 */
function utf8_encode(string $data): string {}

/**
 * XML パーサのエラー文字列を得る
 * <p>エラーコード <code>code</code> の説明を有する文字列を 返します。</p>
 * @param int $code <p><code>xml_get_error_code()</code> からのエラーコード。</p>
 * @return string <p>エラーコード <code>code</code> の説明を有する文字列を 返します。説明がない場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-error-string.php
 * @see xml_get_error_code()
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_error_string(int $code): string {}

/**
 * XML パーサのカレントのバイトインデックスを得る
 * <p>指定した XML パーサのカレントのバイトインデックスを取得します。</p>
 * @param resource $parser <p>バイトインデックスを得る XML パーサへのリファレンス。</p>
 * @return int <p>この関数は、<code>parser</code> が有効なパーサを参照しない場合に <b><code>FALSE</code></b>、そうでない場合に データバッファにおいてパーサが現在処理中のバイトインデックス (先頭が 0) を返します。</p>
 * @link http://php.net/manual/ja/function.xml-get-current-byte-index.php
 * @see xml_get_current_column_number(), xml_get_current_line_number()
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_get_current_byte_index($parser): int {}

/**
 * XML パーサのカレントのカラム番号を取得する
 * <p>指定した XML パーサのカレントのカラム番号を取得します。</p>
 * @param resource $parser <p>カラム番号を得る XML パーサへのリファレンス。</p>
 * @return int <p>この関数は、<code>parser</code> が有効なパーサでない場合に <b><code>FALSE</code></b> を返します。それ以外の場合は、現在のパーサの (<code>xml_get_current_line_number()</code> で取得した) 現在の行のカラムを返します。</p>
 * @link http://php.net/manual/ja/function.xml-get-current-column-number.php
 * @see xml_get_current_byte_index(), xml_get_current_line_number()
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_get_current_column_number($parser): int {}

/**
 * XML パーサのカレントの行番号を得る
 * <p>指定した XML パーサのカレントの行番号を取得します。</p>
 * @param resource $parser <p>行番号を得る XML パーサへのリファレンス。</p>
 * @return int <p>この関数は、<code>parser</code> が有効なパーサでない場合に <b><code>FALSE</code></b>、それ以外の場合にデータバッファの中で 現在パーサが処理中の行番号を返します。</p>
 * @link http://php.net/manual/ja/function.xml-get-current-line-number.php
 * @see xml_get_current_column_number(), xml_get_current_byte_index()
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_get_current_line_number($parser): int {}

/**
 * XML パーサのエラーコードを得る
 * <p>XML パーサのエラーコードを取得します。</p>
 * @param resource $parser <p>エラーコードを得る XML パーサへのリファレンス。</p>
 * @return int <p>この関数は、<code>parser</code> が有効なパーサを参照していない 場合に <b><code>FALSE</code></b> を返します。その他の場合、 エラーコードセクション に 一覧が示されたエラーコードを返します。</p>
 * @link http://php.net/manual/ja/function.xml-get-error-code.php
 * @see xml_error_string()
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_get_error_code($parser): int {}

/**
 * XML ドキュメントの処理を開始する
 * <p><b>xml_parse()</b> は XML ドキュメントを処理します。 設定されているイベントのハンドラが、必要に応じてコールされます。</p>
 * @param resource $parser <p>使用する XML パーサへのリファレンス。</p>
 * @param string $data <p>処理するデータ。ドキュメントは、 <code>is_final</code> パラメータが設定され、 最後のデータが処理され <b><code>TRUE</code></b> になるまで、新規のデータに関して 複数回 <b>xml_parse()</b> をコールすることにより、 部分毎で処理することが可能です。</p>
 * @param bool $is_final <p><b><code>TRUE</code></b> が設定された場合、<code>data</code> は この処理の間に送られた最後のデータということになります。</p>
 * @return int <p>成功した場合に 1、失敗した場合に 0 を返します。</p><p>処理が成功しなかった場合、エラー情報を <code>xml_get_error_code()</code>, <code>xml_error_string()</code>, <code>xml_get_current_line_number()</code>, <code>xml_get_current_column_number()</code> および <code>xml_get_current_byte_index()</code> により取得可能です。</p> <p><b>注意</b>:</p> <p>エンティティのエラーが報告されるのは、ドキュメントの最後 つまり <code>is_final</code> が <b><code>TRUE</code></b> に設定されている場合です。</p>
 * @link http://php.net/manual/ja/function.xml-parse.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_parse($parser, string $data, bool $is_final = false): int {}

/**
 * 配列構造体に XML データを処理する
 * <p>この関数は、XML 文字列を処理し、2つの配列構造体に代入します。 ひとつめの配列 (<code>index</code>) は、配列 <code>values</code> にある適当な値の位置を指すポインタを保持しています。 これら最後の二つのパラメータは参照渡しとする必要があります。</p>
 * @param resource $parser <p>XML パーサへの参照。</p>
 * @param string $data <p>XML データを含む文字列。</p>
 * @param array $values <p>XML データの値を含む配列。</p>
 * @param array $index <p>$values 内の適切な値の場所をさすポインタの配列。</p>
 * @return int <p><b>xml_parse_into_struct()</b> は失敗した場合に 0、 成功した場合に 1 を返します。これは <b><code>FALSE</code></b> および <b><code>TRUE</code></b> とは 異なるものですので、=== のような演算子を使用する場合は注意しましょう。</p>
 * @link http://php.net/manual/ja/function.xml-parse-into-struct.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_parse_into_struct($parser, string $data, array &$values, array &$index = NULL): int {}

/**
 * XML パーサを作成する
 * <p><b>xml_parser_create()</b> は新しい XML パーサを作成し、 他の XML 関数が使用するハンドルを返します。</p>
 * @param string $encoding <p>PHP 4 では、オプションの <code>encoding</code> で入出力の エンコーディングを指定します。PHP 5 以降では入力のエンコーディングは 自動判定されるので、<code>encoding</code> パラメータは 出力のエンコーディングのみを指定することになります。PHP 4 では、 デフォルトの出力エンコーディングは入力の文字セットと同じです。 もし空の文字列が渡された場合、先頭の 3 あるいは 4 バイトの内容をもとに パーサがエンコーディングの判別を試みます。PHP 5.0.0 および 5.0.1 ではデフォルトの出力文字セットは ISO-8859-1 で、PHP 5.0.2 以降では UTF-8 です。サポートされるエンコーディングは <i>ISO-8859-1</i>、<i>UTF-8</i> および <i>US-ASCII</i> です。</p>
 * @return resource <p>新しい XML パーサのリソースハンドルを返します。</p>
 * @link http://php.net/manual/ja/function.xml-parser-create.php
 * @see xml_parser_create_ns(), xml_parser_free()
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_parser_create(string $encoding = NULL) {}

/**
 * 名前空間をサポートした XML パーサを生成する
 * <p><b>xml_parser_create_ns()</b> は XML 名前空間をサポートした 新しい XML パーサを作成し、他の XML 関数が使用するハンドルを返します。</p>
 * @param string $encoding <p>入力のエンコーディングは 自動判定されるので、<code>encoding</code> パラメータは 出力のエンコーディングのみを指定することになります。 PHP 5.0.0 および 5.0.1 ではデフォルトの出力文字セットは ISO-8859-1 で、PHP 5.0.2 以降では UTF-8 です。サポートされるエンコーディングは <i>ISO-8859-1</i>、<i>UTF-8</i> および <i>US-ASCII</i> です。</p>
 * @param string $separator <p>名前空間を含めたタグパラメータをハンドラ関数に渡す際には、 名前空間名とタグ名を文字列 <code>separator</code> でつなげたものが使用されます。</p>
 * @return resource <p>新しい XML パーサのリソースハンドルを返します。</p>
 * @link http://php.net/manual/ja/function.xml-parser-create-ns.php
 * @see xml_parser_create(), xml_parser_free()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function xml_parser_create_ns(string $encoding = NULL, string $separator = ":") {}

/**
 * XML パーサを解放する
 * <p>指定した XML パーサ <code>parser</code> を解放します。</p>
 * @param resource $parser 解放したい XML パーサへのリファレンス。
 * @return bool <p>この関数は、<code>parser</code> が有効なパーサを 参照しない場合に <b><code>FALSE</code></b>、それ以外の場合にパーサを解放し、<b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-parser-free.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_parser_free($parser): bool {}

/**
 * XML パーサからオプションを得る
 * <p>XML パーサからオプションの値を取得します。</p>
 * @param resource $parser オプションを取得する XML パーサへのリファレンス。
 * @param int $option 取得するオプション。<b><code>XML_OPTION_CASE_FOLDING</code></b> あるいは <b><code>XML_OPTION_TARGET_ENCODING</code></b> が使用可能です。 詳細は <code>xml_parser_set_option()</code> を参照ください。
 * @return mixed <p>この関数は、<code>parser</code> が有効なパーサを参照しないか、 <code>option</code> が不正な形式の場合に <b><code>FALSE</code></b> を返します (同時に <b><code>E_WARNING</code></b> を生成します)。 それ以外の場合、そのオプションの値が返されます。</p>
 * @link http://php.net/manual/ja/function.xml-parser-get-option.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_parser_get_option($parser, int $option) {}

/**
 * XML パーサのオプションを設定する
 * <p>XML パーサのオプションを設定します。</p>
 * @param resource $parser <p>オプションを設定する XML パーサへのリファレンス。</p>
 * @param int $option <p>設定するオプション。以下を参照してください。</p> <p>次のオプションが利用可能です。</p> <b>XML パーサオプション</b>   オプション定数 データ型 説明     <b><code>XML_OPTION_CASE_FOLDING</code></b> integer  XMLパーサの大文字変換  を有効にするかどうかを制御する。デフォルトで有効。    <b><code>XML_OPTION_SKIP_TAGSTART</code></b> integer  タグ名の最初の何文字を読み飛ばすかどうかを設定する。    <b><code>XML_OPTION_SKIP_WHITE</code></b> integer  空白文字からなる値を読み飛ばすかどうかを設定する。    <b><code>XML_OPTION_TARGET_ENCODING</code></b> string  XML パーサについてどの ターゲット エンコーディング を使用するかを設定する。デフォルトでは、 <code>xml_parser_create()</code> により使用されたソース エンコーディングと同じエンコーディングが設定されます。 サポートされるターゲットエンコーディングは、 <i>ISO-8859-1</i>, <i>US-ASCII</i>, <i>UTF-8</i> です。
 * @param mixed $value <p>そのオプションの新しい設定値。</p>
 * @return bool <p>この関数は、<code>parser</code> が有効なパーサを参照しないか、 オプションが設定出来なかった場合に <b><code>FALSE</code></b> を返します。 それ以外の場合、そのオプションが設定され、<b><code>TRUE</code></b> が返されます。</p>
 * @link http://php.net/manual/ja/function.xml-parser-set-option.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_parser_set_option($parser, int $option, $value): bool {}

/**
 * 文字データハンドラを設定する
 * <p>XML パーサ <code>parser</code> の文字データ用ハンドラ関数を設定します。</p>
 * @param resource $parser <p>文字データハンドラ関数を設定する XML パーサへの参照。</p>
 * @param callable $handler <p><code>handler</code> は、<code>parser</code> に関して <code>xml_parse()</code> がコールされた際に必要な関数の名前を有する文字列です。</p> <p><code>handler</code> という名前の関数は、次の 2 つのパラメータをとります。</p> handler ( resource <code>$parser</code> , string <code>$data</code> )   <code>parser</code>    最初のパラメータである parser は、 ハンドラをコールする XML パーサへのリファレンスです。    <code>data</code>    2番目のパラメータである <code>data</code> は、 文字データを文字列として有しています。    <p>文字データハンドラは、XML ドキュメントのすべてのテキストに対してコールされます。 (たとえば非 ASCII 文字列などで) ひとつのフラグメント内で複数回コールされることもあります。</p> <p>ハンドラ関数が空の文字列または、 <b><code>FALSE</code></b> に設定されている場合、そのハンドラは無効です。</p> <p><b>注意</b>: 関数名の代わりに、オブジェクトへの リファレンスを格納した配列とメソッド名を指定することもできます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-set-character-data-handler.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_set_character_data_handler($parser, callable $handler): bool {}

/**
 * デフォルトのハンドラを設定する
 * <p>XMLパーサ <code>parser</code> のデフォルトのハンドラ関数を設定します。</p>
 * @param resource $parser <p>デフォルトのハンドラ関数を設定する XML パーサへの参照。</p>
 * @param callable $handler <p><code>handler</code> は、 <code>parser</code> に関して <code>xml_parse()</code> がコールされた際に必要な関数の名前を有する文字列です。</p> <p><code>handler</code> という名前の関数は、 次の 2 つのパラメータをとる必要があります。</p> handler ( resource <code>$parser</code> , string <code>$data</code> )   <code>parser</code>    最初のパラメータである parser は、 ハンドラをコールした XML パーサへのリファレンスです。    <code>data</code>    2 番目のパラメータである <code>data</code> は、 文字データを有しています。これは、XML 宣言またはドキュメント型宣言、エンティティ、 他にハンドラがない別のデータとすることが可能です。    <p>ハンドラ関数が空の文字列または、<b><code>FALSE</code></b> に設定されている場合、そのハンドラは無効です。</p> <p><b>注意</b>: 関数名の代わりに、オブジェクトへの リファレンスを格納した配列とメソッド名を指定することもできます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-set-default-handler.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_set_default_handler($parser, callable $handler): bool {}

/**
 * 開始要素および終了要素のハンドラを設定する
 * <p>XML パーサ <code>parser</code> の要素ハンドラ関数を設定します。 <code>start_element_handler</code> および <code>end_element_handler</code> は、 <code>xml_parse()</code> が <code>parser</code> を コールした際に存在している必要がある関数の名前を有する文字列です。</p>
 * @param resource $parser <p>開始要素および終了要素のハンドラ関数を設定する XML パーサへの参照。</p>
 * @param callable $start_element_handler <p><code>start_element_handler</code> という名前の関数は、 次の 3 つのパラメータをとる必要があります。</p> start_element_handler ( resource <code>$parser</code> , string <code>$name</code> , array <code>$attribs</code> )   <code>parser</code>    最初のパラメータである parser は、 ハンドラをコールする XML パーサへのリファレンスです。    <code>name</code>    2 番目のパラメータである <code>name</code> は、 このハンドラがコールされた要素の名前を有しています。 大文字変換 がこのパーサに関して有効な場合、要素の名前は大文字になります。    <code>attribs</code>    第 3 のパラメータである <code>attribs</code> は、その要素の (全)属性に関する連想配列です。この配列のキーは属性の名前であり、 値は属性の値です。属性の名前は、要素名と同様に 大文字変換 となります。 属性の値は、大文字変換 <i>されません</i>。   この属性は、<code>each()</code> を使用して <code>attribs</code> を順次アクセスすることにより、 元の順序で取得することができます。 配列の最初のキーが最初の属性であり、後も同様です。    <p><b>注意</b>: 関数名の代わりに、オブジェクトへの リファレンスを格納した配列とメソッド名を指定することもできます。</p>
 * @param callable $end_element_handler <p><code>end_element_handler</code>という名前の関数は、 2 つのパラメータをとる必要があります。</p> end_element_handler ( resource <code>$parser</code> , string <code>$name</code> )   <code>parser</code>    最初のパラメータである parser は、 ハンドラをコールする XML パーサへのリファレンスです。    <code>name</code>    2 番目のパラメータである <code>name</code> は、 このハンドラがコールされた要素の名前を有しています。このパーサにおいて 大文字変換 が有効な場合、要素名は大文字になります。    <p>ハンドラ関数が空の文字列または <b><code>FALSE</code></b> に設定されている場合、そのハンドラは無効です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-set-element-handler.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_set_element_handler($parser, callable $start_element_handler, callable $end_element_handler): bool {}

/**
 * 名前空間終了ハンドラを設定する
 * <p>名前空間宣言のスコープを抜けるときにコールされるハンドラを設定します。 これがコールされるのは、各名前空間宣言において、 名前空間が宣言された要素の終了タグのハンドラがコールされた後のことです。</p><p>このイベントは libXML ではサポートされていません。 そのため、登録されたハンドラは呼ばれません。</p>
 * @param resource $parser <p>XML パーサへの参照。</p>
 * @param callable $handler <p><code>handler</code> には、関数名を文字列で指定します。 これは、<code>parser</code> に対して <code>xml_parse()</code> がコールされたときに存在しなければなりません。</p> <p><code>handler</code> で指定した関数は、 2 つのパラメータを受け取って整数値を返すものでなければなりません。 返り値が <b><code>FALSE</code></b> (何も値を返さなかったときもこれにあてはまります) の場合、XML パーサはパースを停止し、 <code>xml_get_error_code()</code> は <b><code>XML_ERROR_EXTERNAL_ENTITY_HANDLING</code></b> を返します。</p> handler ( resource <code>$parser</code> , string <code>$prefix</code> )   <code>parser</code>    最初のパラメータ parser は、ハンドラをコールした XML パーサへの参照です。    <code>prefix</code>    XML オブジェクト内の名前空間を参照する際に使う文字列。    <p>ハンドラ関数に空文字列や <b><code>FALSE</code></b> を設定すると、 そのハンドラは無効になります。</p> <p><b>注意</b>: 関数名の代わりに、オブジェクトへの リファレンスを格納した配列とメソッド名を指定することもできます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-set-end-namespace-decl-handler.php
 * @see xml_set_start_namespace_decl_handler()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function xml_set_end_namespace_decl_handler($parser, callable $handler): bool {}

/**
 * 外部エンティティリファレンスハンドラを設定する
 * <p>XML パーサ <code>parser</code> の外部エンティティ参照用ハンドラ関数を設定します。</p>
 * @param resource $parser <p>外部エンティティリファレンスハンドラ関数を設定する XML パーサへの参照。</p>
 * @param callable $handler <p><code>handler</code> は、 <code>parser</code> に関して <code>xml_parse()</code> がコールされた際に必要な関数の名前を有する文字列です。</p> <p><code>handler</code> という名前の関数は 5 つのパラメータをとり、 整数値を返す必要があります。ハンドラから返された値が <b><code>FALSE</code></b> の場合 (これは値が返されない場合に相当します)、XML パーサは処理を中断し、 <code>xml_get_error_code()</code> は <b><code>XML_ERROR_EXTERNAL_ENTITY_HANDLING</code></b> を返します。</p> handler ( resource <code>$parser</code> , string <code>$open_entity_names</code> , string <code>$base</code> , string <code>$system_id</code> , string <code>$public_id</code> )   <code>parser</code>    最初のパラメータ、parser は ハンドラをコールする XML パーサへのリファレンスです。    <code>open_entity_names</code>    2 番目のパラメータ、<code>open_entity_names</code> は、 エンティティの処理を行うためにオープンされたエンティティの 名前のスペース区切りのリストです (参照されるエンティティの名前を含みます)。    <code>base</code>    これは外部エンティティのシステム ID (<code>systemid</code>) を有しています。 現在このパラメータは常に空の文字列に設定されています。    <code>system_id</code>    4 番目のパラメータ、<code>systemId</code> は エンティティ宣言で指定されたシステム ID です。    <code>public_id</code>    5 番目のパラメータ <code>publicId</code> は、エンティティ宣言で 指定されたパブリック ID または指定されない場合は空の 文字列です。パブリック ID の中の空白文字は、XML 仕様で規定された 正規化を行っています。    <p>ハンドラ関数が空の文字列あるいは <b><code>FALSE</code></b> に設定されている場合、 そのハンドラは無効となります。</p> <p><b>注意</b>: 関数名の代わりに、オブジェクトへの リファレンスを格納した配列とメソッド名を指定することもできます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-set-external-entity-ref-handler.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_set_external_entity_ref_handler($parser, callable $handler): bool {}

/**
 * 表記法宣言ハンドラを設定する
 * <p>XML パーサ <code>parser</code> の表記法宣言用ハンドラ関数を設定します。</p><p>表記法の宣言は、ドキュメントの DTD の一部であり、 次のようなフォーマットとなります。</p>
 * @param resource $parser <p>表記法宣言ハンドラ関数を設定する XML パーサへの参照。</p>
 * @param callable $handler <p><code>handler</code> は、 <code>parser</code> に関して <code>xml_parse()</code> がコールされた際に必要な関数の名前を有する文字列です。</p> <p><code>handler</code> という名前の関数は、5つのパラメータをとる必要があります。</p> handler ( resource <code>$parser</code> , string <code>$notation_name</code> , string <code>$base</code> , string <code>$system_id</code> , string <code>$public_id</code> )   <code>parser</code>    最初のパラメータ、parser は ハンドラをコールする XML パーサへのリファレンスです。    <code>notation_name</code>    これは、前記の表記用フォーマットに示すように表記法の <code>名前</code> です。    <code>base</code>    外部エンティティのシステムID(<code>systemId</code>)を 取得する際の基本となります。現在、このパラメータは、常に空の 文字列に設定されています。    <code>system_id</code>    外部表記用宣言のシステム ID    <code>public_id</code>    外部表記用宣言のパブリック ID    <p>ハンドラ関数が空の文字列または <b><code>FALSE</code></b> に設定されていた場合、そのハンドラは無効となります。</p> <p><b>注意</b>: 関数名の代わりに、オブジェクトへの リファレンスを格納した配列とメソッド名を指定することもできます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-set-notation-decl-handler.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_set_notation_decl_handler($parser, callable $handler): bool {}

/**
 * オブジェクト内部で XML パーサを使用する
 * <p>この関数は、<code>object</code> の内部から <code>parser</code> を使用可能にします。 <code>xml_set_element_handler()</code> 等により設定される 全てのコールバック関数は、<code>object</code> のメソッドであると仮定されます。</p><p>PHP 7.0.0 以降では、パースを終えたときに <code>xml_parser_free()</code> を呼ぶだけでは不十分で、 <code>parser</code> への参照を明示的に解除する必要があります。 これは、メモリリークを回避するためです。</p>
 * @param resource $parser <p>オブジェクト内部で使う XML パーサへの参照。</p>
 * @param object $object <p>XML パーサを使うオブジェクト。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-set-object.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_set_object($parser, object &$object): bool {}

/**
 * 処理命令 (PI) 用ハンドラを設定する
 * <p>XML パーサ <code>parser</code>の処理命令 (PI) 用ハンドラ関数を設定します。</p><p>処理命令は、次のフォーマットを有しています。</p>
 * @param resource $parser <p>処理命令 (PI) ハンドラ関数を設定する XML パーサへの参照。</p>
 * @param callable $handler <p><code>handler</code> は、 <code>parser</code> に関して <code>xml_parse()</code> がコールされた際に必要な関数の名前を有する文字列です。</p> <p><code>handler</code> という名前の関数は、 次の 3 つのパラメータを引数とする必要があります。</p> handler ( resource <code>$parser</code> , string <code>$target</code> , string <code>$data</code> )   <code>parser</code>    最初のパラメータ、parser は ハンドラをコールする XML パーサへのリファレンスです。    <code>target</code>    第 2 のパラメータ、<code>target</code> は PI のターゲットを有しています。    <code>data</code>    第 3 のパラメータ、<code>data</code> は、 PI のデータを有しています。    <p>ハンドラ関数が空の文字列または、<b><code>FALSE</code></b> に設定されている場合、そのハンドラは無効となります。</p> <p><b>注意</b>: 関数名の代わりに、オブジェクトへの リファレンスを格納した配列とメソッド名を指定することもできます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-set-processing-instruction-handler.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_set_processing_instruction_handler($parser, callable $handler): bool {}

/**
 * 名前空間開始ハンドラを設定する
 * <p>名前空間を宣言したところでコールされるハンドラを設定します。 名前空間の宣言は、開始タグの中で行います。 しかし、名前空間宣言の開始ハンドラがコールされるのは、 その開始タグのハンドラがコールされるより前になります。</p>
 * @param resource $parser <p>XML パーサへの参照。</p>
 * @param callable $handler <p><code>handler</code> には、関数名を文字列で指定します。 これは、<code>parser</code> に対して <code>xml_parse()</code> がコールされたときに存在しなければなりません。</p> <p><code>handler</code> で指定した関数は、 3 つのパラメータを受け取って整数値を返すものでなければなりません。 返り値が <b><code>FALSE</code></b> (何も値を返さなかったときもこれにあてはまります) の場合、XML パーサはパースを停止し、 <code>xml_get_error_code()</code> は <b><code>XML_ERROR_EXTERNAL_ENTITY_HANDLING</code></b> を返します。</p> handler ( resource <code>$parser</code> , string <code>$prefix</code> , string <code>$uri</code> )   <code>parser</code>    最初のパラメータ parser は、ハンドラをコールした XML パーサへの参照です。    <code>prefix</code>    XML オブジェクト内の名前空間を参照する際に使う文字列。    <code>uri</code>    名前空間の URI。    <p>ハンドラ関数に空文字列や <b><code>FALSE</code></b> を設定すると、 そのハンドラは無効になります。</p> <p><b>注意</b>: 関数名の代わりに、オブジェクトへの リファレンスを格納した配列とメソッド名を指定することもできます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-set-start-namespace-decl-handler.php
 * @see xml_set_end_namespace_decl_handler()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function xml_set_start_namespace_decl_handler($parser, callable $handler): bool {}

/**
 * 処理されないエンティティ宣言用ハンドラを設定する
 * <p>XML パーサ <code>parser</code> の、 処理されないエンティティ宣言用ハンドラ関数を設定します。</p><p>このハンドラは、XML パーサが次のような NDATA 宣言を有する 外部エンティティ宣言を処理する際にコールされます。</p><p>外部エンティティ宣言の記述用定義に関しては、 » XML 1.0 仕様の 4.2.2 節を参照ください。</p>
 * @param resource $parser <p>処理されないエンティティ宣言用ハンドラ関数を設定する XML パーサへの参照。</p>
 * @param callable $handler <p><code>handler</code>は、 <code>parser</code> に関して <code>xml_parse()</code> がコールされた際に必要な関数の名前を有する文字列です。</p> <p><code>handler</code> という名前の関数は次のような 6 つのパラメータをとる必要があります。</p> handler ( resource <code>$parser</code> , string <code>$entity_name</code> , string <code>$base</code> , string <code>$system_id</code> , string <code>$public_id</code> , string <code>$notation_name</code> )   <code>parser</code>    最初のパラメータ、parser は ハンドラをコールする XML パーサへのリファレンスです。    <code>entity_name</code>    宣言しようとするエンティティの名前。    <code>base</code>    外部エンティティのシステム ID(<code>systemId</code>) を取得する際の基本となります。現在、このパラメータは、常に 空の文字列に設定されています。    <code>system_id</code>    外部エンティティのシステム ID。    <code>public_id</code>    外部エンティティのパブリック ID。    <code>notation_name</code>    このエンティティの表記法の名前 (<code>xml_set_notation_decl_handler()</code> を参照ください)。    <p>ハンドラ関数が空の文字列または <b><code>FALSE</code></b> に設定されていた場合、そのハンドラは無効となります。</p> <p><b>注意</b>: 関数名の代わりに、オブジェクトへの リファレンスを格納した配列とメソッド名を指定することもできます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.xml-set-unparsed-entity-decl-handler.php
 * @since PHP 4, PHP 5, PHP 7
 */
function xml_set_unparsed_entity_decl_handler($parser, callable $handler): bool {}

define('XML_ERROR_ASYNC_ENTITY', 13);

define('XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF', 16);

define('XML_ERROR_BAD_CHAR_REF', 14);

define('XML_ERROR_BINARY_ENTITY_REF', 15);

define('XML_ERROR_DUPLICATE_ATTRIBUTE', 8);

define('XML_ERROR_EXTERNAL_ENTITY_HANDLING', 21);

define('XML_ERROR_INCORRECT_ENCODING', 19);

define('XML_ERROR_INVALID_TOKEN', 4);

define('XML_ERROR_JUNK_AFTER_DOC_ELEMENT', 9);

define('XML_ERROR_MISPLACED_XML_PI', 17);

define('XML_ERROR_NO_ELEMENTS', 3);

define('XML_ERROR_NO_MEMORY', 1);

define('XML_ERROR_NONE', 0);

define('XML_ERROR_PARAM_ENTITY_REF', 10);

define('XML_ERROR_PARTIAL_CHAR', 6);

define('XML_ERROR_RECURSIVE_ENTITY_REF', 12);

define('XML_ERROR_SYNTAX', 2);

define('XML_ERROR_TAG_MISMATCH', 7);

define('XML_ERROR_UNCLOSED_CDATA_SECTION', 20);

define('XML_ERROR_UNCLOSED_TOKEN', 5);

define('XML_ERROR_UNDEFINED_ENTITY', 11);

define('XML_ERROR_UNKNOWN_ENCODING', 18);

define('XML_OPTION_CASE_FOLDING', 1);

define('XML_OPTION_SKIP_TAGSTART', 3);

define('XML_OPTION_SKIP_WHITE', 4);

define('XML_OPTION_TARGET_ENCODING', 2);

/**
 * SAX の実装方式を保持します。 <i>libxml</i> あるいは <i>expat</i> となります。
 */
define('XML_SAX_IMPL', 'libxml');

