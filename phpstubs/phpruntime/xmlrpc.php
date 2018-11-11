<?php



/**
 * XML をネイティブな PHP 型にデコードする
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
 * @param string $xml <p>XMLRPC メソッドが返す XML レスポンス。</p>
 * @param string $encoding <p>iconv がサポートする入力エンコーディング。</p>
 * @return mixed <p>XMLRPC メソッドのレスポンスをもとに作成した、 配列あるいは整数、文字列、boolean 値を返します。</p>
 * @link http://php.net/manual/ja/function.xmlrpc-decode.php
 * @see xmlrpc_encode_request(), xmlrpc_is_fault()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_decode(string $xml, string $encoding = "iso-8859-1") {}

/**
 * XML をネイティブなPHP 型にデコードする
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $xml
 * @param string $method
 * @param string $encoding
 * @return mixed
 * @link http://php.net/manual/ja/function.xmlrpc-decode-request.php
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_decode_request(string $xml, string &$method, string $encoding = NULL) {}

/**
 * PHP の値に関する XML を生成する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param mixed $value
 * @return string
 * @link http://php.net/manual/ja/function.xmlrpc-encode.php
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_encode($value): string {}

/**
 * メソッドリクエスト用の XML を生成する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
 * @param string $method <p>コールするメソッドの名前。</p>
 * @param mixed $params <p>メソッドのシグネチャに対応したパラメータ。</p>
 * @param array $output_options <p>出力オプションを指定する配列。以下の内容が指定できます (強調してあるものがデフォルトです)。</p><ul> <li><p>output_type: php, <i>xml</i></p></li> <li><p>verbosity: no_white_space, newlines_only, <i>pretty</i></p></li> <li><p>escaping: cdata, <i>non-ascii, non-print, markup</i> (単一の値を表す文字列、あるいは複数の値の配列となります)</p></li> <li><p>version: simple, <i>xmlrpc</i>, soap 1.1, auto</p></li> <li><p>encoding: <i>iso-8859-1</i>, その他 iconv がサポートする文字セット</p></li> </ul>
 * @return string <p>リクエストを表す XML 文字列を返します。</p>
 * @link http://php.net/manual/ja/function.xmlrpc-encode-request.php
 * @see stream_context_create(), file_get_contents(), xmlrpc_decode()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_encode_request(string $method, $params, array $output_options = NULL): string {}

/**
 * PHP の値に関する xmlrpc 型を取得する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は特に base64 及び datetime 文字列で有用です。</p>
 * @param mixed $value <p>PHP の値。</p>
 * @return string <p>XML-RPC の型を返します。</p>
 * @link http://php.net/manual/ja/function.xmlrpc-get-type.php
 * @see xmlrpc_set_type()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_get_type($value): string {}

/**
 * 配列の値が XMLRPC の失敗であるかどうかを調べる
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
 * @param array $arg <p><code>xmlrpc_decode()</code> が返す配列。</p>
 * @return bool <p>引数が失敗を表す場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。 失敗の内容は <i>$arg["faultString"]</i>、失敗のコードは <i>$arg["faultCode"]</i> に格納されます。</p>
 * @link http://php.net/manual/ja/function.xmlrpc-is-fault.php
 * @see xmlrpc_decode()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function xmlrpc_is_fault(array $arg): bool {}

/**
 * XML を、メソッド説明のリストにデコードする
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $xml
 * @return array
 * @link http://php.net/manual/ja/function.xmlrpc-parse-method-descriptions.php
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_parse_method_descriptions(string $xml): array {}

/**
 * introspection ドキュメントを追加する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $server
 * @param array $desc
 * @return int
 * @link http://php.net/manual/ja/function.xmlrpc-server-add-introspection-data.php
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_server_add_introspection_data($server, array $desc): int {}

/**
 * XML リクエストをパースし、メソッドをコールする
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $server
 * @param string $xml
 * @param mixed $user_data
 * @param array $output_options
 * @return string
 * @link http://php.net/manual/ja/function.xmlrpc-server-call-method.php
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_server_call_method($server, string $xml, $user_data, array $output_options = NULL): string {}

/**
 * xmlrpc サーバーを作成する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return resource
 * @link http://php.net/manual/ja/function.xmlrpc-server-create.php
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_server_create() {}

/**
 * サーバーリソースを破棄する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $server
 * @return int
 * @link http://php.net/manual/ja/function.xmlrpc-server-destroy.php
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_server_destroy($server): int {}

/**
 * ドキュメントを生成する PHP 関数を登録する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $server
 * @param string $function
 * @return bool
 * @link http://php.net/manual/ja/function.xmlrpc-server-register-introspection-callback.php
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_server_register_introspection_callback($server, string $function): bool {}

/**
 * メソッド名が一致するメソッドリソースに PHP 関数を登録する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $server
 * @param string $method_name
 * @param string $function
 * @return bool
 * @link http://php.net/manual/ja/function.xmlrpc-server-register-method.php
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_server_register_method($server, string $method_name, string $function): bool {}

/**
 * PHP 文字列型用に xmlrpc 型、base64 または datetime を設定する
 * <p>PHP の文字列用の xmlrpc 型を、base64 あるいは datetime に設定します。</p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
 * @param string $value <p>型を設定する値。</p>
 * @param string $type <p>'base64' あるいは 'datetime'。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 成功した場合、<code>value</code> はオブジェクト型に変換されます。</p>
 * @link http://php.net/manual/ja/function.xmlrpc-set-type.php
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function xmlrpc_set_type(string &$value, string $type): bool {}

