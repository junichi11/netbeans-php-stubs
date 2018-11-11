<?php



/**
 * hw_api_attribute クラスのインスタンスを作成する
 * <p>指定した名前および値を使用して、hw_api_attribute の新しいインスタンスを作成します。</p>
 * @param string $name <p>属性の名前。</p>
 * @param string $value <p>属性の値。</p>
 * @return HW_API_Attribute <p><b>hw_api_attribute</b> のインスタンスを返します。</p>
 * @link http://php.net/manual/ja/function.hwapi-attribute-new.php
 * @since PHP 5 < 5.2.0
 */
function hwapi_attribute_new(string $name = NULL, string $value = NULL): \HW_API_Attribute {}

/**
 * hw_api_content クラスの新しいインスタンスを作成する
 * <p>文字列 <code>content</code> から新しいコンテンツオブジェクトを作成します。</p>
 * @param string $content
 * @param string $mimetype <p>コンテンツの mime タイプ。</p>
 * @return HW_API_Content
 * @link http://php.net/manual/ja/function.hwapi-content-new.php
 * @since PHP 5 < 5.2.0
 */
function hwapi_content_new(string $content, string $mimetype): \HW_API_Content {}

/**
 * hw_api クラスのオブジェクトを返す
 * <p>ホスト <code>hostname</code> 上の Hyperwave サーバーへの接続をオープンします。 プロトコルは HGCSP を使用します。</p>
 * @param string $hostname <p>ホスト名。</p>
 * @param int $port <p>ポート番号を渡さなかった場合は、418 が用いられます。</p>
 * @return HW_API <p><b>HW_API</b> のインスタンスを返します。</p>
 * @link http://php.net/manual/ja/function.hwapi-hgcsp.php
 * @since PHP 4, PHP 5 < 5.2.0, PECL hwapi SVN
 */
function hwapi_hgcsp(string $hostname, int $port = NULL): \HW_API {}

/**
 * hwapi_object_new クラスの新しいインスタンスを作成する
 * <p><b>hw_api_object</b> クラスの新しいインスタンスを作成します。</p>
 * @param array $parameter
 * @return hw_api_object
 * @link http://php.net/manual/ja/function.hwapi-object-new.php
 * @since PHP 5 < 5.2.0
 */
function hwapi_object_new(array $parameter): \hw_api_object {}

