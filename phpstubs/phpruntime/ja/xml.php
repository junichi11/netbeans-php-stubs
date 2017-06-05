<?php

// Start of xml v.7.0.19

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * XML パーサを作成する
 * @link http://php.net/manual/ja/function.xml-parser-create.php
 * @param string $encoding [optional] <p>
 * PHP 4 では、オプションの <i>encoding</i> で入出力の
 * エンコーディングを指定します。PHP 5 以降では入力のエンコーディングは
 * 自動判定されるので、<i>encoding</i> パラメータは
 * 出力のエンコーディングのみを指定することになります。PHP 4 では、
 * デフォルトの出力エンコーディングは入力の文字セットと同じです。
 * もし空の文字列が渡された場合、先頭の 3 あるいは 4 バイトの内容をもとに
 * パーサがエンコーディングの判別を試みます。PHP 5.0.0 および 5.0.1
 * ではデフォルトの出力文字セットは ISO-8859-1 で、PHP 5.0.2 以降では
 * UTF-8 です。サポートされるエンコーディングは
 * ISO-8859-1、UTF-8 および
 * US-ASCII です。
 * </p>
 * @return resource 新しい XML パーサのリソースハンドルを返します。
 */
function xml_parser_create(string $encoding = null) {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * 名前空間をサポートした XML パーサを生成する
 * @link http://php.net/manual/ja/function.xml-parser-create-ns.php
 * @param string $encoding [optional] <p>
 * 入力のエンコーディングは
 * 自動判定されるので、<i>encoding</i> パラメータは
 * 出力のエンコーディングのみを指定することになります。
 * PHP 5.0.0 および 5.0.1
 * ではデフォルトの出力文字セットは ISO-8859-1 で、PHP 5.0.2 以降では
 * UTF-8 です。サポートされるエンコーディングは
 * ISO-8859-1、UTF-8 および
 * US-ASCII です。
 * </p>
 * @param string $separator [optional] <p>
 * 名前空間を含めたタグパラメータをハンドラ関数に渡す際には、
 * 名前空間名とタグ名を文字列 <i>separator</i>
 * でつなげたものが使用されます。
 * </p>
 * @return resource 新しい XML パーサのリソースハンドルを返します。
 */
function xml_parser_create_ns(string $encoding = null, string $separator = ":") {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * オブジェクト内部で XML パーサを使用する
 * @link http://php.net/manual/ja/function.xml-set-object.php
 * @param resource $parser <p>
 * オブジェクト内部で使う XML パーサへの参照。
 * </p>
 * @param object $object <p>
 * XML パーサを使うオブジェクト。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xml_set_object($parser, &$object): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 開始要素および終了要素のハンドラを設定する
 * @link http://php.net/manual/ja/function.xml-set-element-handler.php
 * @param resource $parser <p>
 * 開始要素および終了要素のハンドラ関数を設定する XML パーサへの参照。
 * </p>
 * @param callable $start_element_handler <p>
 * <i>start_element_handler</i> という名前の関数は、
 * 次の 3 つのパラメータをとる必要があります。
 * <b>start_element_handler</b>
 * <b>resource<i>parser</i></b>
 * <b>string<i>name</i></b>
 * <b>array<i>attribs</i></b>
 * <i>parser</i>
 * 最初のパラメータである parser は、
 * ハンドラをコールする XML パーサへのリファレンスです。
 * @param callable $end_element_handler <p>
 * <i>end_element_handler</i>という名前の関数は、
 * 2 つのパラメータをとる必要があります。
 * <b>end_element_handler</b>
 * <b>resource<i>parser</i></b>
 * <b>string<i>name</i></b>
 * <i>parser</i>
 * 最初のパラメータである parser は、
 * ハンドラをコールする XML パーサへのリファレンスです。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xml_set_element_handler($parser, callable $start_element_handler, callable $end_element_handler): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字データハンドラを設定する
 * @link http://php.net/manual/ja/function.xml-set-character-data-handler.php
 * @param resource $parser <p>
 * 文字データハンドラ関数を設定する XML パーサへの参照。
 * </p>
 * @param callable $handler <p>
 * <i>handler</i> は、<i>parser</i> に関して
 * <b>xml_parse</b> がコールされた際に必要な関数の名前を有する文字列です。
 * </p>
 * <p>
 * <i>handler</i> という名前の関数は、次の 2 つのパラメータをとります。
 * <b>handler</b>
 * <b>resource<i>parser</i></b>
 * <b>string<i>data</i></b>
 * <i>parser</i>
 * 最初のパラメータである parser は、
 * ハンドラをコールする XML パーサへのリファレンスです。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xml_set_character_data_handler($parser, callable $handler): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 処理命令 (PI) 用ハンドラを設定する
 * @link http://php.net/manual/ja/function.xml-set-processing-instruction-handler.php
 * @param resource $parser <p>
 * 処理命令 (PI) ハンドラ関数を設定する XML パーサへの参照。
 * </p>
 * @param callable $handler <p>
 * <i>handler</i> は、
 * <i>parser</i> に関して
 * <b>xml_parse</b> がコールされた際に必要な関数の名前を有する文字列です。
 * </p>
 * <p>
 * <i>handler</i> という名前の関数は、
 * 次の 3 つのパラメータを引数とする必要があります。
 * <b>handler</b>
 * <b>resource<i>parser</i></b>
 * <b>string<i>target</i></b>
 * <b>string<i>data</i></b>
 * <i>parser</i>
 * 最初のパラメータ、parser は
 * ハンドラをコールする XML パーサへのリファレンスです。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xml_set_processing_instruction_handler($parser, callable $handler): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * デフォルトのハンドラを設定する
 * @link http://php.net/manual/ja/function.xml-set-default-handler.php
 * @param resource $parser <p>
 * デフォルトのハンドラ関数を設定する XML パーサへの参照。
 * </p>
 * @param callable $handler <p>
 * <i>handler</i> は、
 * <i>parser</i> に関して <b>xml_parse</b>
 * がコールされた際に必要な関数の名前を有する文字列です。
 * </p>
 * <p>
 * <i>handler</i> という名前の関数は、
 * 次の 2 つのパラメータをとる必要があります。
 * <b>handler</b>
 * <b>resource<i>parser</i></b>
 * <b>string<i>data</i></b>
 * <i>parser</i>
 * 最初のパラメータである parser は、
 * ハンドラをコールした XML パーサへのリファレンスです。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xml_set_default_handler($parser, callable $handler): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 処理されないエンティティ宣言用ハンドラを設定する
 * @link http://php.net/manual/ja/function.xml-set-unparsed-entity-decl-handler.php
 * @param resource $parser <p>
 * 処理されないエンティティ宣言用ハンドラ関数を設定する XML パーサへの参照。
 * </p>
 * @param callable $handler <p>
 * <i>handler</i>は、
 * <i>parser</i> に関して <b>xml_parse</b>
 * がコールされた際に必要な関数の名前を有する文字列です。
 * </p>
 * <p>
 * <i>handler</i> という名前の関数は次のような
 * 6 つのパラメータをとる必要があります。
 * <b>handler</b>
 * <b>resource<i>parser</i></b>
 * <b>string<i>entity_name</i></b>
 * <b>string<i>base</i></b>
 * <b>string<i>system_id</i></b>
 * <b>string<i>public_id</i></b>
 * <b>string<i>notation_name</i></b>
 * <i>parser</i>
 * 最初のパラメータ、parser は
 * ハンドラをコールする XML パーサへのリファレンスです。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xml_set_unparsed_entity_decl_handler($parser, callable $handler): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 表記法宣言ハンドラを設定する
 * @link http://php.net/manual/ja/function.xml-set-notation-decl-handler.php
 * @param resource $parser <p>
 * 表記法宣言ハンドラ関数を設定する XML パーサへの参照。
 * </p>
 * @param callable $handler <p>
 * <i>handler</i> は、
 * <i>parser</i> に関して <b>xml_parse</b>
 * がコールされた際に必要な関数の名前を有する文字列です。
 * </p>
 * <p>
 * <i>handler</i> という名前の関数は、5つのパラメータをとる必要があります。
 * <b>handler</b>
 * <b>resource<i>parser</i></b>
 * <b>string<i>notation_name</i></b>
 * <b>string<i>base</i></b>
 * <b>string<i>system_id</i></b>
 * <b>string<i>public_id</i></b>
 * <i>parser</i>
 * 最初のパラメータ、parser は
 * ハンドラをコールする XML パーサへのリファレンスです。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xml_set_notation_decl_handler($parser, callable $handler): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 外部エンティティリファレンスハンドラを設定する
 * @link http://php.net/manual/ja/function.xml-set-external-entity-ref-handler.php
 * @param resource $parser <p>
 * 外部エンティティリファレンスハンドラ関数を設定する XML パーサへの参照。
 * </p>
 * @param callable $handler <p>
 * <i>handler</i> は、
 * <i>parser</i> に関して <b>xml_parse</b>
 * がコールされた際に必要な関数の名前を有する文字列です。
 * </p>
 * <p>
 * <i>handler</i> という名前の関数は 5 つのパラメータをとり、
 * 整数値を返す必要があります。ハンドラから返された値が <b>FALSE</b> の場合
 * (これは値が返されない場合に相当します)、XML パーサは処理を中断し、
 * <b>xml_get_error_code</b> は
 * <b>XML_ERROR_EXTERNAL_ENTITY_HANDLING</b>
 * を返します。
 * <b>handler</b>
 * <b>resource<i>parser</i></b>
 * <b>string<i>open_entity_names</i></b>
 * <b>string<i>base</i></b>
 * <b>string<i>system_id</i></b>
 * <b>string<i>public_id</i></b>
 * <i>parser</i>
 * 最初のパラメータ、parser は
 * ハンドラをコールする XML パーサへのリファレンスです。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xml_set_external_entity_ref_handler($parser, callable $handler): bool {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * 名前空間開始ハンドラを設定する
 * @link http://php.net/manual/ja/function.xml-set-start-namespace-decl-handler.php
 * @param resource $parser <p>
 * XML パーサへの参照。
 * </p>
 * @param callable $handler <p>
 * <i>handler</i> には、関数名を文字列で指定します。
 * これは、<i>parser</i> に対して
 * <b>xml_parse</b> がコールされたときに存在しなければなりません。
 * </p>
 * <p>
 * <i>handler</i> で指定した関数は、
 * 3 つのパラメータを受け取って整数値を返すものでなければなりません。
 * 返り値が <b>FALSE</b> (何も値を返さなかったときもこれにあてはまります)
 * の場合、XML パーサはパースを停止し、
 * <b>xml_get_error_code</b> は
 * <b>XML_ERROR_EXTERNAL_ENTITY_HANDLING</b> を返します。
 * <b>handler</b>
 * <b>resource<i>parser</i></b>
 * <b>string<i>prefix</i></b>
 * <b>string<i>uri</i></b>
 * <i>parser</i>
 * 最初のパラメータ parser
 * は、ハンドラをコールした XML パーサへの参照です。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xml_set_start_namespace_decl_handler($parser, callable $handler): bool {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * 名前空間終了ハンドラを設定する
 * @link http://php.net/manual/ja/function.xml-set-end-namespace-decl-handler.php
 * @param resource $parser <p>
 * XML パーサへの参照。
 * </p>
 * @param callable $handler <p>
 * <i>handler</i> には、関数名を文字列で指定します。
 * これは、<i>parser</i> に対して
 * <b>xml_parse</b> がコールされたときに存在しなければなりません。
 * </p>
 * <p>
 * <i>handler</i> で指定した関数は、
 * 2 つのパラメータを受け取って整数値を返すものでなければなりません。
 * 返り値が <b>FALSE</b> (何も値を返さなかったときもこれにあてはまります)
 * の場合、XML パーサはパースを停止し、
 * <b>xml_get_error_code</b> は
 * <b>XML_ERROR_EXTERNAL_ENTITY_HANDLING</b> を返します。
 * <b>handler</b>
 * <b>resource<i>parser</i></b>
 * <b>string<i>prefix</i></b>
 * <i>parser</i>
 * 最初のパラメータ parser
 * は、ハンドラをコールした XML パーサへの参照です。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function xml_set_end_namespace_decl_handler($parser, callable $handler): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * XML ドキュメントの処理を開始する
 * @link http://php.net/manual/ja/function.xml-parse.php
 * @param resource $parser <p>
 * 使用する XML パーサへのリファレンス。
 * </p>
 * @param string $data <p>
 * 処理するデータ。ドキュメントは、
 * <i>is_final</i> パラメータが設定され、
 * 最後のデータが処理され <b>TRUE</b> になるまで、新規のデータに関して
 * 複数回 <b>xml_parse</b> をコールすることにより、
 * 部分毎で処理することが可能です。
 * </p>
 * @param bool $is_final [optional] <p>
 * <b>TRUE</b> が設定された場合、<i>data</i> は
 * この処理の間に送られた最後のデータということになります。
 * </p>
 * @return int 成功した場合に 1、失敗した場合に 0 を返します。
 * </p>
 * <p>
 * 処理が成功しなかった場合、エラー情報を
 * <b>xml_get_error_code</b>,
 * <b>xml_error_string</b>,
 * <b>xml_get_current_line_number</b>,
 * <b>xml_get_current_column_number</b> および
 * <b>xml_get_current_byte_index</b>
 * により取得可能です。
 * </p>
 * <p>
 * エンティティのエラーが報告されるのは、ドキュメントの最後
 * つまり <i>is_final</i> が <b>TRUE</b> に設定されている場合です。
 */
function xml_parse($parser, string $data, bool $is_final = false): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 配列構造体に XML データを処理する
 * @link http://php.net/manual/ja/function.xml-parse-into-struct.php
 * @param resource $parser <p>
 * XML パーサへの参照。
 * </p>
 * @param string $data <p>
 * XML データを含む文字列。
 * </p>
 * @param array $values <p>
 * XML データの値を含む配列。
 * </p>
 * @param array $index [optional] <p>
 * $values 内の適切な値の場所をさすポインタの配列。
 * </p>
 * @return int <b>xml_parse_into_struct</b> は失敗した場合に 0、
 * 成功した場合に 1 を返します。これは <b>FALSE</b> および <b>TRUE</b> とは
 * 異なるものですので、=== のような演算子を使用する場合は注意しましょう。
 */
function xml_parse_into_struct($parser, string $data, array &$values, array &$index = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * XML パーサのエラーコードを得る
 * @link http://php.net/manual/ja/function.xml-get-error-code.php
 * @param resource $parser <p>
 * エラーコードを得る XML パーサへのリファレンス。
 * </p>
 * @return int この関数は、<i>parser</i> が有効なパーサを参照していない
 * 場合に <b>FALSE</b> を返します。その他の場合、
 * エラーコードセクション に
 * 一覧が示されたエラーコードを返します。
 */
function xml_get_error_code($parser): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * XML パーサのエラー文字列を得る
 * @link http://php.net/manual/ja/function.xml-error-string.php
 * @param int $code <p>
 * <b>xml_get_error_code</b> からのエラーコード。
 * </p>
 * @return string エラーコード <i>code</i> の説明を有する文字列を
 * 返します。説明がない場合には <b>FALSE</b> を返します。
 */
function xml_error_string(int $code): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * XML パーサのカレントの行番号を得る
 * @link http://php.net/manual/ja/function.xml-get-current-line-number.php
 * @param resource $parser <p>
 * 行番号を得る XML パーサへのリファレンス。
 * </p>
 * @return int この関数は、<i>parser</i> が有効なパーサでない場合に
 * <b>FALSE</b>、それ以外の場合にデータバッファの中で
 * 現在パーサが処理中の行番号を返します。
 */
function xml_get_current_line_number($parser): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * XML パーサのカレントのカラム番号を取得する
 * @link http://php.net/manual/ja/function.xml-get-current-column-number.php
 * @param resource $parser <p>
 * カラム番号を得る XML パーサへのリファレンス。
 * </p>
 * @return int この関数は、<i>parser</i> が有効なパーサでない場合に
 * <b>FALSE</b> を返します。それ以外の場合は、現在のパーサの
 * (<b>xml_get_current_line_number</b> で取得した)
 * 現在の行のカラムを返します。
 */
function xml_get_current_column_number($parser): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * XML パーサのカレントのバイトインデックスを得る
 * @link http://php.net/manual/ja/function.xml-get-current-byte-index.php
 * @param resource $parser <p>
 * バイトインデックスを得る XML パーサへのリファレンス。
 * </p>
 * @return int この関数は、<i>parser</i> が有効なパーサを参照しない場合に
 * <b>FALSE</b>、そうでない場合に
 * データバッファにおいてパーサが現在処理中のバイトインデックス
 * (先頭が 0) を返します。
 */
function xml_get_current_byte_index($parser): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * XML パーサを解放する
 * @link http://php.net/manual/ja/function.xml-parser-free.php
 * @param resource $parser 解放したい XML パーサへのリファレンス。
 * @return bool この関数は、<i>parser</i> が有効なパーサを
 * 参照しない場合に <b>FALSE</b>、それ以外の場合にパーサを解放し、<b>TRUE</b> を返します。
 */
function xml_parser_free($parser): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * XML パーサのオプションを設定する
 * @link http://php.net/manual/ja/function.xml-parser-set-option.php
 * @param resource $parser <p>
 * オプションを設定する XML パーサへのリファレンス。
 * </p>
 * @param int $option <p>
 * 設定するオプション。以下を参照してください。
 * </p>
 * <p>
 * 次のオプションが利用可能です。
 * <table>
 * XML パーサオプション
 * <tr valign="top">
 * <td>オプション定数</td>
 * <td>データ型</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td><b>XML_OPTION_CASE_FOLDING</b></td>
 * <td>integer</td>
 * <td>
 * XMLパーサの大文字変換
 * を有効にするかどうかを制御する。デフォルトで有効。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>XML_OPTION_SKIP_TAGSTART</b></td>
 * <td>integer</td>
 * <td>
 * タグ名の最初の何文字を読み飛ばすかどうかを設定する。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>XML_OPTION_SKIP_WHITE</b></td>
 * <td>integer</td>
 * <td>
 * 空白文字からなる値を読み飛ばすかどうかを設定する。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>XML_OPTION_TARGET_ENCODING</b></td>
 * <td>string</td>
 * <td>
 * XML パーサについてどの ターゲット
 * エンコーディング を使用するかを設定する。デフォルトでは、
 * <b>xml_parser_create</b> により使用されたソース
 * エンコーディングと同じエンコーディングが設定されます。
 * サポートされるターゲットエンコーディングは、
 * ISO-8859-1, US-ASCII,
 * UTF-8 です。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param mixed $value <p>
 * そのオプションの新しい設定値。
 * </p>
 * @return bool この関数は、<i>parser</i> が有効なパーサを参照しないか、
 * オプションが設定出来なかった場合に <b>FALSE</b> を返します。
 * それ以外の場合、そのオプションが設定され、<b>TRUE</b> が返されます。
 */
function xml_parser_set_option($parser, int $option, $value): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * XML パーサからオプションを得る
 * @link http://php.net/manual/ja/function.xml-parser-get-option.php
 * @param resource $parser オプションを取得する XML パーサへのリファレンス。
 * @param int $option 取得するオプション。<b>XML_OPTION_CASE_FOLDING</b>
 * あるいは <b>XML_OPTION_TARGET_ENCODING</b> が使用可能です。
 * 詳細は <b>xml_parser_set_option</b> を参照ください。
 * @return mixed この関数は、<i>parser</i> が有効なパーサを参照しないか、
 * <i>option</i> が不正な形式の場合に <b>FALSE</b> を返します
 * (同時に <b>E_WARNING</b> を生成します)。
 * それ以外の場合、そのオプションの値が返されます。
 */
function xml_parser_get_option($parser, int $option) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ISO-8859-1 文字列を UTF-8 にエンコードする
 * @link http://php.net/manual/ja/function.utf8-encode.php
 * @param string $data <p>
 * ISO-8859-1 形式の文字列。
 * </p>
 * @return string <i>data</i> を UTF-8 に変換した結果を返します。
 */
function utf8_encode(string $data): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * UTF-8 エンコードされた ISO-8859-1 文字列をシングルバイトの ISO-8859-1 に変換する
 * @link http://php.net/manual/ja/function.utf8-decode.php
 * @param string $data <p>
 * UTF-8 エンコードされた文字列。
 * </p>
 * @return string <i>data</i> を ISO-8859-1 に変換した結果を返します。
 */
function utf8_decode(string $data): string {}

define ('XML_ERROR_NONE', 0);
define ('XML_ERROR_NO_MEMORY', 1);
define ('XML_ERROR_SYNTAX', 2);
define ('XML_ERROR_NO_ELEMENTS', 3);
define ('XML_ERROR_INVALID_TOKEN', 4);
define ('XML_ERROR_UNCLOSED_TOKEN', 5);
define ('XML_ERROR_PARTIAL_CHAR', 6);
define ('XML_ERROR_TAG_MISMATCH', 7);
define ('XML_ERROR_DUPLICATE_ATTRIBUTE', 8);
define ('XML_ERROR_JUNK_AFTER_DOC_ELEMENT', 9);
define ('XML_ERROR_PARAM_ENTITY_REF', 10);
define ('XML_ERROR_UNDEFINED_ENTITY', 11);
define ('XML_ERROR_RECURSIVE_ENTITY_REF', 12);
define ('XML_ERROR_ASYNC_ENTITY', 13);
define ('XML_ERROR_BAD_CHAR_REF', 14);
define ('XML_ERROR_BINARY_ENTITY_REF', 15);
define ('XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF', 16);
define ('XML_ERROR_MISPLACED_XML_PI', 17);
define ('XML_ERROR_UNKNOWN_ENCODING', 18);
define ('XML_ERROR_INCORRECT_ENCODING', 19);
define ('XML_ERROR_UNCLOSED_CDATA_SECTION', 20);
define ('XML_ERROR_EXTERNAL_ENTITY_HANDLING', 21);
define ('XML_OPTION_CASE_FOLDING', 1);
define ('XML_OPTION_TARGET_ENCODING', 2);
define ('XML_OPTION_SKIP_TAGSTART', 3);
define ('XML_OPTION_SKIP_WHITE', 4);

/**
 * SAX の実装方式を保持します。
 * libxml あるいは expat となります。
 * @link http://php.net/manual/ja/xml.constants.php
 */
define ('XML_SAX_IMPL', "libxml");

// End of xml v.7.0.19
?>
