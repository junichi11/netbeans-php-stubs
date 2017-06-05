<?php

// Start of xmlrpc v.7.0.19

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * PHP の値に関する XML を生成する
 * @link http://php.net/manual/ja/function.xmlrpc-encode.php
 * @param mixed $value
 * @return string
 */
function xmlrpc_encode($value): string {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * XML をネイティブな PHP 型にデコードする
 * @link http://php.net/manual/ja/function.xmlrpc-decode.php
 * @param string $xml <p>
 * XMLRPC メソッドが返す XML レスポンス。
 * </p>
 * @param string $encoding [optional] <p>
 * iconv がサポートする入力エンコーディング。
 * </p>
 * @return mixed XMLRPC メソッドのレスポンスをもとに作成した、
 * 配列あるいは整数、文字列、boolean 値を返します。
 */
function xmlrpc_decode(string $xml, string $encoding = "iso-8859-1") {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * XML をネイティブなPHP 型にデコードする
 * @link http://php.net/manual/ja/function.xmlrpc-decode-request.php
 * @param string $xml
 * @param string $method
 * @param string $encoding [optional]
 * @return mixed
 */
function xmlrpc_decode_request(string $xml, string &$method, string $encoding = null) {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * メソッドリクエスト用の XML を生成する
 * @link http://php.net/manual/ja/function.xmlrpc-encode-request.php
 * @param string $method <p>
 * コールするメソッドの名前。
 * </p>
 * @param mixed $params <p>
 * メソッドのシグネチャに対応したパラメータ。
 * </p>
 * @param array $output_options [optional] <p>
 * 出力オプションを指定する配列。以下の内容が指定できます
 * (強調してあるものがデフォルトです)。
 * <p>output_type: php, xml</p>
 * @return string リクエストを表す XML 文字列を返します。
 */
function xmlrpc_encode_request(string $method, $params, array $output_options = null): string {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * PHP の値に関する xmlrpc 型を取得する
 * @link http://php.net/manual/ja/function.xmlrpc-get-type.php
 * @param mixed $value <p>
 * PHP の値。
 * </p>
 * @return string XML-RPC の型を返します。
 */
function xmlrpc_get_type($value): string {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * PHP 文字列型用に xmlrpc 型、base64 または datetime を設定する
 * @link http://php.net/manual/ja/function.xmlrpc-set-type.php
 * @param string $value <p>
 * 型を設定する値。
 * </p>
 * @param string $type <p>
 * 'base64' あるいは 'datetime'。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * 成功した場合、<i>value</i> はオブジェクト型に変換されます。
 */
function xmlrpc_set_type(string &$value, string $type): bool {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 配列の値が XMLRPC の失敗であるかどうかを調べる
 * @link http://php.net/manual/ja/function.xmlrpc-is-fault.php
 * @param array $arg <p>
 * <b>xmlrpc_decode</b> が返す配列。
 * </p>
 * @return bool 引数が失敗を表す場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 * 失敗の内容は $arg["faultString"]、失敗のコードは
 * $arg["faultCode"] に格納されます。
 */
function xmlrpc_is_fault(array $arg): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * xmlrpc サーバーを作成する
 * @link http://php.net/manual/ja/function.xmlrpc-server-create.php
 * @return resource
 */
function xmlrpc_server_create() {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * サーバーリソースを破棄する
 * @link http://php.net/manual/ja/function.xmlrpc-server-destroy.php
 * @param resource $server
 * @return int
 */
function xmlrpc_server_destroy($server): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * メソッド名が一致するメソッドリソースに PHP 関数を登録する
 * @link http://php.net/manual/ja/function.xmlrpc-server-register-method.php
 * @param resource $server
 * @param string $method_name
 * @param string $function
 * @return bool
 */
function xmlrpc_server_register_method($server, string $method_name, string $function): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * XML リクエストをパースし、メソッドをコールする
 * @link http://php.net/manual/ja/function.xmlrpc-server-call-method.php
 * @param resource $server
 * @param string $xml
 * @param mixed $user_data
 * @param array $output_options [optional]
 * @return string
 */
function xmlrpc_server_call_method($server, string $xml, $user_data, array $output_options = null): string {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * XML を、メソッド説明のリストにデコードする
 * @link http://php.net/manual/ja/function.xmlrpc-parse-method-descriptions.php
 * @param string $xml
 * @return array
 */
function xmlrpc_parse_method_descriptions(string $xml): array {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * introspection ドキュメントを追加する
 * @link http://php.net/manual/ja/function.xmlrpc-server-add-introspection-data.php
 * @param resource $server
 * @param array $desc
 * @return int
 */
function xmlrpc_server_add_introspection_data($server, array $desc): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ドキュメントを生成する PHP 関数を登録する
 * @link http://php.net/manual/ja/function.xmlrpc-server-register-introspection-callback.php
 * @param resource $server
 * @param string $function
 * @return bool
 */
function xmlrpc_server_register_introspection_callback($server, string $function): bool {}

// End of xmlrpc v.7.0.19
?>
