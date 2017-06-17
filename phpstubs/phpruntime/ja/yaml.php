<?php

// Start of yaml v.2.0.0

/**
 * (PECL yaml &gt;= 0.4.0)<br/>
 * YAML ストリームをパースする
 * @link http://php.net/manual/ja/function.yaml-parse.php
 * @param string $input <p>
 * YAML ドキュメントストリームとしてパースする文字列。
 * </p>
 * @param int $pos [optional] <p>
 * ストリームから取り出すドキュメント (-1
 * はすべてのドキュメント、0 は最初のドキュメント、...)。
 * </p>
 * @param int $ndocs [optional] <p>
 * <i>ndocs</i> を渡すと、
 * ストリーム内で見つかったドキュメントの数がそこに格納されます。
 * </p>
 * @param array $callbacks [optional] <p>
 * YAML ノードのコンテンツハンドラ。
 * YAML タグ =&gt; callable 形式の連想配列となります。
 * 詳細はパースコールバック
 * を参照ください。
 * </p>
 * @return mixed 適切な PHP の型に変換した結果を返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 * <i>pos</i> が -1 の場合は配列を返します。
 * 配列の各要素が、ストリーム内で見つかった個々のドキュメントとなります。
 */
function yaml_parse(string $input, int $pos = 0, int &$ndocs = null, array $callbacks = null) {}

/**
 * (PECL yaml &gt;= 0.4.0)<br/>
 * ファイルからの YAML ストリームをパースする
 * @link http://php.net/manual/ja/function.yaml-parse-file.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @param int $pos [optional] <p>
 * ストリームから取り出すドキュメント (-1
 * はすべてのドキュメント、0 は最初のドキュメント、...)。
 * </p>
 * @param int $ndocs [optional] <p>
 * <i>ndocs</i> を渡すと、
 * ストリーム内で見つかったドキュメントの数がそこに格納されます。
 * </p>
 * @param array $callbacks [optional] <p>
 * YAML ノードのコンテンツハンドラ。
 * YAML タグ =&gt; callable 形式の連想配列となります。
 * 詳細はパースコールバック
 * を参照ください。
 * </p>
 * @return mixed 適切な PHP の型に変換した結果を返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 * <i>pos</i> が -1 の場合は配列を返します。
 * 配列の各要素が、ストリーム内で見つかった個々のドキュメントとなります。
 */
function yaml_parse_file(string $filename, int $pos = 0, int &$ndocs = null, array $callbacks = null) {}

/**
 * (PECL yaml &gt;= 0.4.0)<br/>
 * URL からの YAML ストリームをパースする
 * @link http://php.net/manual/ja/function.yaml-parse-url.php
 * @param string $url <p>
 * <i>url</i> は "scheme://..." 形式でなければなりません。
 * PHP は、このスキームを見てプロトコルハンドラ (ラッパー) を探します。
 * 対応するラッパーが登録されていない場合は notice を発し、
 * そのまま通常のファイルとみなして処理を続けます。
 * </p>
 * @param int $pos [optional] <p>
 * ストリームから取り出すドキュメント (-1
 * はすべてのドキュメント、0 は最初のドキュメント、...)。
 * </p>
 * @param int $ndocs [optional] <p>
 * <i>ndocs</i> を渡すと、
 * ストリーム内で見つかったドキュメントの数がそこに格納されます。
 * </p>
 * @param array $callbacks [optional] <p>
 * YAML ノードのコンテンツハンドラ。
 * YAML タグ =&gt; callable 形式の連想配列となります。
 * 詳細はパースコールバック
 * を参照ください。
 * </p>
 * @return mixed 適切な PHP の型に変換した結果を返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 * <i>pos</i> が -1 の場合は配列を返します。
 * 配列の各要素が、ストリーム内で見つかった個々のドキュメントとなります。
 */
function yaml_parse_url(string $url, int $pos = 0, int &$ndocs = null, array $callbacks = null) {}

/**
 * (PECL yaml &gt;= 0.5.0)<br/>
 * YAML 形式にした値を返す
 * @link http://php.net/manual/ja/function.yaml-emit.php
 * @param mixed $data <p>
 * エンコードしたいデータ。リソース型以外の任意の型が使えます。
 * </p>
 * @param int $encoding [optional] <p>
 * 出力時の文字エンコーディング。
 * <b>YAML_ANY_ENCODING</b>、
 * <b>YAML_UTF8_ENCODING</b>、
 * <b>YAML_UTF16LE_ENCODING</b>、
 * <b>YAML_UTF16BE_ENCODING</b> のいずれか。
 * </p>
 * @param int $linebreak [optional] <p>
 * 出力時の改行形式。
 * <b>YAML_ANY_BREAK</b>、
 * <b>YAML_CR_BREAK</b>、
 * <b>YAML_LN_BREAK</b>、
 * <b>YAML_CRLN_BREAK</b> のいずれか。
 * </p>
 * @param array $callbacks [optional] <p>
 * YAML ノードの発行用のコンテンツハンドラ。
 * クラス名 =&gt; callable 形式の連想配列となります。
 * 詳細は発行コールバック
 * を参照ください。
 * </p>
 * @return string 成功した場合に YAML 形式の文字列を返します。
 */
function yaml_emit($data, int $encoding = YAML_ANY_ENCODING, int $linebreak = YAML_ANY_BREAK, array $callbacks = null): string {}

/**
 * (PECL yaml &gt;= 0.5.0)<br/>
 * YAML 形式にした値をファイルに送る
 * @link http://php.net/manual/ja/function.yaml-emit-file.php
 * @param string $filename <p>
 * ファイルへのパス。
 * </p>
 * @param mixed $data <p>
 * エンコードしたいデータ。リソース型以外の任意の型が使えます。
 * </p>
 * @param int $encoding [optional] <p>
 * 出力時の文字エンコーディング。
 * <b>YAML_ANY_ENCODING</b>、
 * <b>YAML_UTF8_ENCODING</b>、
 * <b>YAML_UTF16LE_ENCODING</b>、
 * <b>YAML_UTF16BE_ENCODING</b> のいずれか。
 * </p>
 * @param int $linebreak [optional] <p>
 * 出力時の改行形式。
 * <b>YAML_ANY_BREAK</b>、
 * <b>YAML_CR_BREAK</b>、
 * <b>YAML_LN_BREAK</b>、
 * <b>YAML_CRLN_BREAK</b> のいずれか。
 * </p>
 * @param array $callbacks [optional] <p>
 * YAML ノードの発行用のコンテンツハンドラ。
 * クラス名 =&gt; callable 形式の連想配列となります。
 * 詳細は発行コールバック
 * を参照ください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を返します。
 */
function yaml_emit_file(string $filename, $data, int $encoding = YAML_ANY_ENCODING, int $linebreak = YAML_ANY_BREAK, array $callbacks = null): bool {}

define ('YAML_ANY_SCALAR_STYLE', 0);
define ('YAML_PLAIN_SCALAR_STYLE', 1);
define ('YAML_SINGLE_QUOTED_SCALAR_STYLE', 2);
define ('YAML_DOUBLE_QUOTED_SCALAR_STYLE', 3);
define ('YAML_LITERAL_SCALAR_STYLE', 4);
define ('YAML_FOLDED_SCALAR_STYLE', 5);

/**
 * "tag:yaml.org,2002:null"
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_NULL_TAG', "tag:yaml.org,2002:null");

/**
 * "tag:yaml.org,2002:bool"
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_BOOL_TAG', "tag:yaml.org,2002:bool");

/**
 * "tag:yaml.org,2002:str"
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_STR_TAG', "tag:yaml.org,2002:str");

/**
 * "tag:yaml.org,2002:int"
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_INT_TAG', "tag:yaml.org,2002:int");

/**
 * "tag:yaml.org,2002:float"
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_FLOAT_TAG', "tag:yaml.org,2002:float");

/**
 * "tag:yaml.org,2002:timestamp"
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_TIMESTAMP_TAG', "tag:yaml.org,2002:timestamp");

/**
 * "tag:yaml.org,2002:seq"
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_SEQ_TAG', "tag:yaml.org,2002:seq");

/**
 * "tag:yaml.org,2002:map"
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_MAP_TAG', "tag:yaml.org,2002:map");

/**
 * "!php/object"
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_PHP_TAG', "!php/object");
define ('YAML_MERGE_TAG', "tag:yaml.org,2002:merge");
define ('YAML_BINARY_TAG', "tag:yaml.org,2002:binary");

/**
 * エミッターにエンコードを判断させます。
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_ANY_ENCODING', 0);

/**
 * UTF8 としてエンコードします。
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_UTF8_ENCODING', 1);

/**
 * UTF16LE としてエンコードします。
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_UTF16LE_ENCODING', 2);

/**
 * UTF16BE としてエンコードします。
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_UTF16BE_ENCODING', 3);

/**
 * エミッターに改行文字を判断させます。
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_ANY_BREAK', 0);

/**
 * 改行文字に \r を使います (Mac 形式)。
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_CR_BREAK', 1);

/**
 * 改行文字に \n を使います (Unix 形式)。
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_LN_BREAK', 2);

/**
 * 改行文字に \r\n を使います (DOS 形式)。
 * @link http://php.net/manual/ja/yaml.constants.php
 */
define ('YAML_CRLN_BREAK', 3);

// End of yaml v.2.0.0
?>
