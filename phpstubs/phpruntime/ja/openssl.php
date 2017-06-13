<?php

// Start of openssl v.7.1.5

function openssl_get_cert_locations() {}

/**
 * @param $privkey
 * @param $challenge
 * @param $algo [optional]
 */
function openssl_spki_new($privkey, $challenge, $algo) {}

/**
 * @param $spki
 */
function openssl_spki_verify($spki) {}

/**
 * @param $spki
 */
function openssl_spki_export($spki) {}

/**
 * @param $spki
 */
function openssl_spki_export_challenge($spki) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 秘密鍵を開放する
 * @link http://php.net/manual/ja/function.openssl-pkey-free.php
 * @param resource $key <p>
 * キーを保持するリソース。
 * </p>
 * @return void 値を返しません。
 */
function openssl_pkey_free($key): void {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 新規に秘密鍵を生成する
 * @link http://php.net/manual/ja/function.openssl-pkey-new.php
 * @param array $configargs [optional] <p>
 * 鍵の作成方法の詳細（ビット数など）を指定するには、
 * <i>configargs</i> を使用します。
 * <i>configargs</i> の詳細な情報については
 * <b>openssl_csr_new</b> を参照ください。
 * </p>
 * @return resource 成功した場合に秘密鍵のリソース ID、
 * エラー時に <b>FALSE</b> を返します。
 */
function openssl_pkey_new(array $configargs = null) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * エクスポート可能な形式で、キーを文字列に取得する
 * @link http://php.net/manual/ja/function.openssl-pkey-export.php
 * @param mixed $key
 * @param string $out
 * @param string $passphrase [optional] <p>
 * オプションで <i>passphrase</i>
 * を使用してキーを保護することが可能です。
 * </p>
 * @param array $configargs [optional] <p>
 * <i>configargs</i> により openssl 設定ファイルの設定を
 * 追加したり上書きしたりすることで、エクスポート処理の詳細設定が可能です。
 * <i>configargs</i> についての詳細な情報は
 * <b>openssl_csr_new</b> を参照ください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_pkey_export($key, string &$out, string $passphrase = null, array $configargs = null): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * エクスポート可能な形式で、キーをファイルに取得する
 * @link http://php.net/manual/ja/function.openssl-pkey-export-to-file.php
 * @param mixed $key
 * @param string $outfilename <p>
 * 出力ファイルへのパス。
 * </p>
 * @param string $passphrase [optional] <p>
 * オプションで
 * <i>passphrase</i> を使用してキーを保護することが可能です。
 * </p>
 * @param array $configargs [optional] <p>
 * <i>configargs</i> により openssl 設定ファイルの設定を
 * 追加したり上書きしたりすることで、エクスポート処理の詳細設定が可能です。
 * <i>configargs</i> についての詳細な情報は
 * <b>openssl_csr_new</b> を参照ください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_pkey_export_to_file($key, string $outfilename, string $passphrase = null, array $configargs = null): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 秘密鍵を取得する
 * @link http://php.net/manual/ja/function.openssl-pkey-get-private.php
 * @param mixed $key <p>
 * <i>key</i> は以下のいずれかです。
 * file://path/to/file.pem 形式の文字列。
 * このファイルは、PEM エンコードされた証明書/秘密鍵である必要が
 * あります（両方を含むことも可能です）。
 * @param string $passphrase [optional] <p>
 * 指定されたキーが（パスフレーズを用いて）暗号化されている場合は、
 * オプションのパラメータ <i>passphrase</i> を使用する必要があります。
 * </p>
 * @return resource 成功した場合に正のキーリソース ID、エラー時に <b>FALSE</b> を返します。
 */
function openssl_pkey_get_private($key, string $passphrase = "") {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 証明書から公開鍵を抽出し、使用できるようにする
 * @link http://php.net/manual/ja/function.openssl-pkey-get-public.php
 * @param mixed $certificate <p>
 * <i>certificate</i> は以下のいずれかです。
 * an X.509 証明書リソース
 * @return resource 成功した場合に正のキーリソース ID、エラー時に <b>FALSE</b> を返します。
 */
function openssl_pkey_get_public($certificate) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * キーの詳細の配列を返す
 * @link http://php.net/manual/ja/function.openssl-pkey-get-details.php
 * @param resource $key <p>
 * キーを保持する配列。
 * </p>
 * @return array 成功した場合にキーの詳細を含む配列、失敗した場合に <b>FALSE</b> を返します。
 * 返される配列のキーは bits (ビット数)、
 * key (公開鍵を表す文字列) および
 * type (キーの種類。
 * <b>OPENSSL_KEYTYPE_RSA</b>、
 * <b>OPENSSL_KEYTYPE_DSA</b>、
 * <b>OPENSSL_KEYTYPE_DH</b>、
 * <b>OPENSSL_KEYTYPE_EC</b> のいずれか。あるいは不明な場合は -1)
 * となります。
 * </p>
 * <p>
 * 使っているキーの型によって、さらに詳細が返されます。
 * 常に存在するわけではない要素もあることに注意しましょう。
 */
function openssl_pkey_get_details($key): array {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * キーリソースを開放する
 * @link http://php.net/manual/ja/function.openssl-free-key.php
 * @param resource $key_identifier
 * @return void 値を返しません。
 */
function openssl_free_key($key_identifier): void {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * <b>openssl_pkey_get_private</b> のエイリアス
 * @link http://php.net/manual/ja/function.openssl-get-privatekey.php
 * @param $key
 * @param $passphrase [optional]
 */
function openssl_get_privatekey($key, $passphrase) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * <b>openssl_pkey_get_public</b> のエイリアス
 * @link http://php.net/manual/ja/function.openssl-get-publickey.php
 * @param $cert
 */
function openssl_get_publickey($cert) {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * X.509 証明書をパースし、リソース ID を返す
 * @link http://php.net/manual/ja/function.openssl-x509-read.php
 * @param mixed $x509certdata
 * @return resource 成功した場合にリソース ID、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_x509_read($x509certdata) {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 証明書リソースを開放する
 * @link http://php.net/manual/ja/function.openssl-x509-free.php
 * @param resource $x509cert
 * @return void 値を返しません。
 */
function openssl_x509_free($x509cert): void {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * X509 証明書をパースし、配列として情報を返す
 * @link http://php.net/manual/ja/function.openssl-x509-parse.php
 * @param mixed $x509cert
 * @param bool $shortnames [optional] <p>
 * <i>shortnames</i> は、配列中でのデータの添字付けの
 * 方法を設定します。<i>shortnames</i> が <b>TRUE</b> の場合
 * (デフォルト)、フィールドは短縮型で添字が付けられます。そうでない場合、
 * 長い名前が使用されます。例えば、CN は commonName の短縮型です。
 * </p>
 * @return array 返されるデータの構造については（わざと）まだ文書化していません。
 * これは、今後もデータの構造が変更される可能性があるためです。
 */
function openssl_x509_parse($x509cert, bool $shortnames = true): array {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 証明書が特定の目的に使用可能かどうか確認する
 * @link http://php.net/manual/ja/function.openssl-x509-checkpurpose.php
 * @param mixed $x509cert <p>
 * 調べたい証明書。
 * </p>
 * @param int $purpose <p>
 * <table>
 * <b>openssl_x509_checkpurpose</b> の目的
 * <tr valign="top">
 * <td>定数</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_SSL_CLIENT</td>
 * <td>
 * この証明書を SSL 接続のクライアント側で使用できるか?
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_SSL_SERVER</td>
 * <td>
 * この証明書を SSL 接続のサーバー側で使用できるか?
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_NS_SSL_SERVER</td>
 * <td>この証明書を Netscape SSL サーバーで使用できるか?</td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_SMIME_SIGN</td>
 * <td>この証明書を S/MIME email で使用できるか?</td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_SMIME_ENCRYPT</td>
 * <td>この証明書を S/MIME email の暗号化で使用できるか?</td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_CRL_SIGN</td>
 * <td>
 * この証明書を証明書取消リスト(CRL)にサインをする際に使用できるか?
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>X509_PURPOSE_ANY</td>
 * <td>この証明書をあらゆる用途に使用できるか?</td>
 * </tr>
 * </table>
 * これらのオプションはビットフィールドではありません。
 * 指定できるのは一つだけです!
 * </p>
 * @param array $cainfo [optional] <p>
 * <i>cainfo</i> は、証明書の認証
 * で説明したような信頼できる CA ファイル/ディレクトリの配列です。
 * </p>
 * @param string $untrustedfile [optional] <p>
 * 指定した場合は、これが証明書を含むPEMエンコードされたファイルの名前になります。
 * この証明書は、検証と証明を簡単化するために使用されます。
 * そのファイル内にある証明書は、信頼されない(untrusted)証明書とみなされます。
 * </p>
 * @return int 証明書が意図した目的に使用可能である場合に <b>TRUE</b>、使用できない場合に
 * <b>FALSE</b> 、エラーの場合に -1 を返します。
 */
function openssl_x509_checkpurpose($x509cert, int $purpose, array $cainfo = array(), string $untrustedfile = null): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 秘密鍵が証明書に対応するかを確認する
 * @link http://php.net/manual/ja/function.openssl-x509-check-private-key.php
 * @param mixed $cert <p>
 * 証明書。
 * </p>
 * @param mixed $key <p>
 * 秘密鍵。
 * </p>
 * @return bool <i>key</i> が
 * <i>cert</i> に対応する秘密鍵の場合に
 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function openssl_x509_check_private_key($cert, $key): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 証明書を文字列としてエクスポートする
 * @link http://php.net/manual/ja/function.openssl-x509-export.php
 * @param mixed $x509
 * @param string $output <p>
 * 成功した場合に、ここに PEM が格納されます。
 * </p>
 * @param bool $notext [optional] オプションのパラメータ <i>notext</i>
 * を設定すると、出力内容の冗長性が変化します。<b>FALSE</b> を指定すると、
 * 人間が読むための追加情報が出力に含まれるようになります。
 * <i>notext</i> のデフォルト値は <b>TRUE</b> です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_x509_export($x509, string &$output, bool $notext = true): bool {}

/**
 * @param $x509
 * @param $method [optional]
 * @param $raw_output [optional]
 */
function openssl_x509_fingerprint($x509, $method, $raw_output) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 証明書をファイルにエクスポートする
 * @link http://php.net/manual/ja/function.openssl-x509-export-to-file.php
 * @param mixed $x509
 * @param string $outfilename <p>
 * 出力ファイルへのパス。
 * </p>
 * @param bool $notext [optional] オプションのパラメータ <i>notext</i>
 * を設定すると、出力内容の冗長性が変化します。<b>FALSE</b> を指定すると、
 * 人間が読むための追加情報が出力に含まれるようになります。
 * <i>notext</i> のデフォルト値は <b>TRUE</b> です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_x509_export_to_file($x509, string $outfilename, bool $notext = true): bool {}

/**
 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
 * PKCS#12 互換の証明書保存ファイルを変数にエクスポートする
 * @link http://php.net/manual/ja/function.openssl-pkcs12-export.php
 * @param mixed $x509
 * @param string $out <p>
 * 成功した場合に、ここに PKCS#12 が保存されます。
 * </p>
 * @param mixed $priv_key <p>
 * PKCS#12 ファイルのプライベートキーコンポーネント。
 * </p>
 * @param string $pass <p>
 * PKCS#12 ファイルのロックを解除するためのパスワード。
 * </p>
 * @param array $args [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_pkcs12_export($x509, string &$out, $priv_key, string $pass, array $args = null): bool {}

/**
 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
 * PKCS#12 互換の証明書保存ファイルをエクスポートする
 * @link http://php.net/manual/ja/function.openssl-pkcs12-export-to-file.php
 * @param mixed $x509
 * @param string $filename <p>
 * 出力ファイルへのパス。
 * </p>
 * @param mixed $priv_key <p>
 * PKCS#12 ファイルのプライベートキーコンポーネント。
 * </p>
 * @param string $pass <p>
 * PKCS#12 ファイルのロックを解除するためのパスワード。
 * </p>
 * @param array $args [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_pkcs12_export_to_file($x509, string $filename, $priv_key, string $pass, array $args = null): bool {}

/**
 * (PHP 5 &gt;= 5.2.2, PHP 7)<br/>
 * PKCS#12 認証ストアをパースして配列形式にする
 * @link http://php.net/manual/ja/function.openssl-pkcs12-read.php
 * @param string $pkcs12 <p>
 * 認証ストアの内容。ファイル名ではありません。
 * </p>
 * @param array $certs <p>
 * 成功した場合に、ここに認証ストアデータが格納されます。
 * </p>
 * @param string $pass <p>
 * PKCS#12 ファイルのロックを解除するためのパスワード。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_pkcs12_read(string $pkcs12, array &$certs, string $pass): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * CSR を作成する
 * @link http://php.net/manual/ja/function.openssl-csr-new.php
 * @param array $dn <p>
 * 証明書で使用される識別名。
 * </p>
 * @param resource $privkey <p>
 * <i>privkey</i> には、事前に <b>openssl_pkey_new</b>
 * （あるいはその他の openssl_pkey 系の関数）で作成した秘密鍵を設定します。
 * これに対応する公開鍵が、CSR への署名に使用されます。
 * </p>
 * @param array $configargs [optional] <p>
 * デフォルトでは、システムの openssl.conf の設定に
 * したがってリクエストが初期化されます。<i>configargs</i>
 * のキー config_section_section を設定することで、この
 * デフォルト項目を変更することが可能です。また、キー config
 * に別の openssl 設定ファイルを指定することで別の設定を使用することも可能です。
 * もし <i>configargs</i> に以下の表のキーが存在すれば、それらは
 * openssl.conf の対応する項目と同じ働きをします。
 * <table>
 * 設定の上書き
 * <tr valign="top">
 * <td><i>configargs</i> のキー</td>
 * <td>型</td>
 * <td>openssl.conf で同等の意味を持つ項目</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>digest_alg</td>
 * <td>string</td>
 * <td>default_md</td>
 * <td>使用するダイジェストメソッドを選択します</td>
 * </tr>
 * <tr valign="top">
 * <td>x509_extensions</td>
 * <td>string</td>
 * <td>x509_extensions</td>
 * <td>x509 証明書を作成する際に使用する拡張モジュールを選択します</td>
 * </tr>
 * <tr valign="top">
 * <td>req_extensions</td>
 * <td>string</td>
 * <td>req_extensions</td>
 * <td>CSR を作成する際に使用する拡張モジュールを選択します</td>
 * </tr>
 * <tr valign="top">
 * <td>private_key_bits</td>
 * <td>integer</td>
 * <td>default_bits</td>
 * <td>秘密鍵を作成する際に使用するビット数を指定します</td>
 * </tr>
 * <tr valign="top">
 * <td>private_key_type</td>
 * <td>integer</td>
 * <td>none</td>
 * <td>作成する秘密鍵の型を指定します。以下の定数
 * <b>OPENSSL_KEYTYPE_DSA</b>、
 * <b>OPENSSL_KEYTYPE_DH</b> あるいは
 * <b>OPENSSL_KEYTYPE_RSA</b> からひとつ選択します。
 * デフォルト値は <b>OPENSSL_KEYTYPE_RSA</b> で、
 * 現時点でサポートしているのはこの型のみです。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>encrypt_key</td>
 * <td>boolean</td>
 * <td>encrypt_key</td>
 * <td>（パスフレーズとともに）エクスポートされるキーを暗号化するか?</td>
 * </tr>
 * <tr valign="top">
 * <td>encrypt_key_cipher</td>
 * <td>integer</td>
 * <td>none</td>
 * <td>
 * 暗号定数のうちの一つ。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param array $extraattribs [optional] <p>
 * <i>extraattribs</i> は、CSR に関する追加の設定情報を
 * 設定するために使用します。<i>dn</i> および
 * <i>extraattribs</i> はどちらも連想配列で、それらの
 * キーが OID に変換されたうえでリクエストの関連する部分に適用されます。
 * </p>
 * @return mixed CSR を返します。
 */
function openssl_csr_new(array $dn, &$privkey, array $configargs = null, array $extraattribs = null) {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * CSR を文字列としてエクスポートする
 * @link http://php.net/manual/ja/function.openssl-csr-export.php
 * @param resource $csr
 * @param string $out
 * @param bool $notext [optional] オプションのパラメータ <i>notext</i>
 * を設定すると、出力内容の冗長性が変化します。<b>FALSE</b> を指定すると、
 * 人間が読むための追加情報が出力に含まれるようになります。
 * <i>notext</i> のデフォルト値は <b>TRUE</b> です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_csr_export($csr, string &$out, bool $notext = true): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * CSR をファイルにエクスポートする
 * @link http://php.net/manual/ja/function.openssl-csr-export-to-file.php
 * @param resource $csr
 * @param string $outfilename <p>
 * 出力ファイルへのパス。
 * </p>
 * @param bool $notext [optional] オプションのパラメータ <i>notext</i>
 * を設定すると、出力内容の冗長性が変化します。<b>FALSE</b> を指定すると、
 * 人間が読むための追加情報が出力に含まれるようになります。
 * <i>notext</i> のデフォルト値は <b>TRUE</b> です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_csr_export_to_file($csr, string $outfilename, bool $notext = true): bool {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 他の CERT（あるいは自分自身）で証明書をサインする
 * @link http://php.net/manual/ja/function.openssl-csr-sign.php
 * @param mixed $csr <p>
 * <b>openssl_csr_new</b> で作成した CSR。
 * file://path/to/csr 、あるいは
 * <b>openssl_csr_export</b> で生成した文字列で指定した場合は
 * PEM エンコードされた CSR も使用可能です。
 * </p>
 * @param mixed $cacert <p>
 * 作成された証明書は <i>cacert</i> で署名されます。
 * <i>cacert</i> が <b>NULL</b> の場合は、自己署名の証明書となります。
 * </p>
 * @param mixed $priv_key <p>
 * <i>priv_key</i> は
 * <i>cacert</i> に対応する秘密鍵です。
 * </p>
 * @param int $days <p>
 * <i>days</i> は、作成された証明書の有効期限を日数で指定します。
 * </p>
 * @param array $configargs [optional] <p>
 * <i>configargs</i> で証明書の詳細設定が可能です。
 * <i>configargs</i> についての詳細な情報は
 * <b>openssl_csr_new</b> を参照ください。
 * </p>
 * @param int $serial [optional] <p>
 * 発行される証明書のシリアル番号を、オプションで指定します。
 * 省略した場合のデフォルトは 0 です。
 * </p>
 * @return resource 成功した場合に x509 証明書リソース、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_csr_sign($csr, $cacert, $priv_key, int $days, array $configargs = null, int $serial = 0) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * CERT の subject を返す
 * @link http://php.net/manual/ja/function.openssl-csr-get-subject.php
 * @param mixed $csr
 * @param bool $use_shortnames [optional]
 * @return array
 */
function openssl_csr_get_subject($csr, bool $use_shortnames = true): array {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * CERT の公開鍵を返す
 * @link http://php.net/manual/ja/function.openssl-csr-get-public-key.php
 * @param mixed $csr
 * @param bool $use_shortnames [optional]
 * @return resource
 */
function openssl_csr_get_public_key($csr, bool $use_shortnames = true) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * ダイジェストを計算
 * @link http://php.net/manual/ja/function.openssl-digest.php
 * @param string $data <p>
 * データ
 * </p>
 * @param string $method <p>
 * ダイジェスト・メソッド
 * </p>
 * @param bool $raw_output [optional] <p>
 * <b>TRUE</b> に設定すると未加工の出力データとして返します。
 * そうでなければ binhex エンコードされた値を返します。
 * </p>
 * @return string 成功した場合ダイジェスト・ハッシュ値、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_digest(string $data, string $method, bool $raw_output = false): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * データを暗号化
 * @link http://php.net/manual/ja/function.openssl-encrypt.php
 * @param string $data <p>
 * データ
 * </p>
 * @param string $method <p>
 * 暗号メソッド。
 * 使用可能なメソッドの一覧を取得するには、<b>openssl_get_cipher_methods</b> を用います。
 * </p>
 * @param string $key <p>
 * キー
 * </p>
 * @param int $options [optional] <p>
 * <b>OPENSSL_RAW_DATA</b> と
 * <b>OPENSSL_ZERO_PADDING</b> のビット OR。
 * </p>
 * @param string $iv [optional] <p>
 * NULL ではない初期化ベクター。
 * </p>
 * @param string $tag [optional] <p>
 * The authentication tag passed by reference when using AEAD cipher mode (GCM or CCM).
 * </p>
 * @param string $aad [optional] <p>
 * Additional authentication data.
 * </p>
 * @param int $tag_length [optional] <p>
 * The length of the authentication <i>tag</i>. Its value can be between 4 and 16 for GCM mode.
 * </p>
 * @return string 成功した場合暗号化された文字列、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_encrypt(string $data, string $method, string $key, int $options = 0, string $iv = "", string &$tag = NULL, string $aad = "", int $tag_length = 16): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * データを復号
 * @link http://php.net/manual/ja/function.openssl-decrypt.php
 * @param string $data <p>
 * データ
 * </p>
 * @param string $method <p>
 * 暗号メソッド
 * </p>
 * @param string $key <p>
 * キー
 * </p>
 * @param int $options [optional] <p>
 * <b>OPENSSL_RAW_DATA</b> あるいは
 * <b>OPENSSL_ZERO_PADDING</b> のいずれか。
 * </p>
 * @param string $iv [optional] <p>
 * NULL ではない初期化ベクター。
 * </p>
 * @param string $tag [optional] <p>
 * The authentication tag in AEAD cipher mode. If it is incorrect, the authentication fails and the function returns <b>FALSE</b>.
 * </p>
 * @param string $aad [optional] <p>
 * Additional authentication data.
 * </p>
 * @return string 成功した場合復号された文字列、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_decrypt(string $data, string $method, string $key, int $options = 0, string $iv = "", string $tag = "", string $aad = ""): string {}

/**
 * (PHP 5 &gt;= PHP 5.3.3, PHP 7)<br/>
 * 暗号 iv の長さを取得
 * @link http://php.net/manual/ja/function.openssl-cipher-iv-length.php
 * @param string $method <p>
 * 暗号化方式。指定できる値は <b>openssl_get_cipher_methods</b> を参照ください。
 * </p>
 * @return int 成功した場合は暗号の長さ、失敗した場合には <b>FALSE</b> を返します。
 */
function openssl_cipher_iv_length(string $method): int {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 署名を生成する
 * @link http://php.net/manual/ja/function.openssl-sign.php
 * @param string $data <p>
 * 署名したいデータの文字列。
 * </p>
 * @param string $signature <p>
 * 成功した場合、署名が <i>signature</i> に格納されます。
 * </p>
 * @param mixed $priv_key_id <p>
 * resource - <b>openssl_get_privatekey</b> が返す鍵。
 * </p>
 * <p>
 * string - PEM フォーマットの鍵。
 * </p>
 * @param mixed $signature_alg [optional] <p>
 * int - いずれかの 署名アルゴリズム。
 * </p>
 * <p>
 * string - <b>openssl_get_md_methods</b> が返す文字列 ("sha256WithRSAEncryption" や "sha384" など)。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_sign(string $data, string &$signature, $priv_key_id, $signature_alg = OPENSSL_ALGO_SHA1): bool {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 署名を検証する
 * @link http://php.net/manual/ja/function.openssl-verify.php
 * @param string $data <p>
 * 署名を作成するときに使ったデータの文字列。
 * </p>
 * @param string $signature <p>
 * 生のバイナリ文字列。<b>openssl_sign</b> もしくはそれと同等の手段を使って生成したもの。
 * </p>
 * @param mixed $pub_key_id <p>
 * resource - <b>openssl_get_publickey</b> が返す鍵。
 * </p>
 * <p>
 * string - PEM フォーマットの鍵 ("-----BEGIN PUBLIC KEY-----
 * MIIBCgK..." など)。
 * </p>
 * @param mixed $signature_alg [optional] <p>
 * int - いずれかの 署名アルゴリズム。
 * </p>
 * <p>
 * string - <b>openssl_get_md_methods</b> が返す文字列 ("sha1WithRSAEncryption" や "sha512" など)。
 * </p>
 * @return int 署名 (signature) が正しい場合に 1、正しくない場合に 0、
 * エラーの場合に -1 を返します。
 */
function openssl_verify(string $data, string $signature, $pub_key_id, $signature_alg = OPENSSL_ALGO_SHA1): int {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * データをシール(暗号化)する
 * @link http://php.net/manual/ja/function.openssl-seal.php
 * @param string $data <p>
 * シールするデータ。
 * </p>
 * @param string $sealed_data <p>
 * シール済みのデータ。
 * </p>
 * @param array $env_keys <p>
 * 暗号化したキーの配列。
 * </p>
 * @param array $pub_key_ids <p>
 * 公開鍵リソース ID の配列。
 * </p>
 * @param string $method [optional] <p>
 * 暗号化の手法。
 * </p>
 * @return int 成功時にシール(暗号化)されたデータの長さ、エラー時に <b>FALSE</b>
 * を返します。成功時には、暗号化されたデータが
 * <i>sealed_data</i> に、エンベロープキーが
 * <i>env_keys</i> に返されます。
 */
function openssl_seal(string $data, string &$sealed_data, array &$env_keys, array $pub_key_ids, string $method = "RC4"): int {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * シール(暗号化)されたデータをオープン(復号)する
 * @link http://php.net/manual/ja/function.openssl-open.php
 * @param string $sealed_data
 * @param string $open_data <p>
 * 成功した場合、オープンしたデータをここに返します。
 * </p>
 * @param string $env_key
 * @param mixed $priv_key_id
 * @param string $method [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_open(string $sealed_data, string &$open_data, string $env_key, $priv_key_id, string $method = null): bool {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * PKCS5 v2 の PBKDF2 文字列を生成する。デフォルトは SHA-1
 * @link http://php.net/manual/ja/function.openssl-pbkdf2.php
 * @param string $password <p>
 * </p>
 * @param string $salt <p>
 * </p>
 * @param int $key_length <p>
 * </p>
 * @param int $iterations <p>
 * </p>
 * @param string $digest_algorithm [optional] <p>
 * </p>
 * @return string 文字列を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_pbkdf2(string $password, string $salt, int $key_length, int $iterations, string $digest_algorithm = null): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * S/MIME でサインされたメッセージの署名を検証する
 * @link http://php.net/manual/ja/function.openssl-pkcs7-verify.php
 * @param string $filename <p>
 * メッセージへのパス。
 * </p>
 * @param int $flags <p>
 * <i>flags</i> により署名の検証方法を指定することが可能です。
 * 詳細については、PKCS7 定数 を参照ください。
 * </p>
 * @param string $outfilename [optional] <p>
 * <i>outfilename</i> を指定する場合、
 * メッセージに署名した人の証明書が PEM
 * 形式で保存されたファイルの名前をこの変数に指定する必要があります。
 * </p>
 * @param array $cainfo [optional] <p>
 * <i>cainfo</i> が指定された場合、
 * 検証処理で使用するために認証済みの
 * CA 証明書に関する情報を保持する必要があります。
 * このパラメータに関するより詳細な情報については、
 * 証明書の検証
 * を参照ください。
 * </p>
 * @param string $extracerts [optional] <p>
 * <i>extracerts</i> が指定された場合、
 * これは未認証の CA として一連の証明書を使用するためのファイルの名前となります。
 * </p>
 * @param string $content [optional] <p>
 * ファイル名とともに <i>content</i>
 * を指定すると、検証したデータがここに格納されます。
 * 格納する際に、署名情報は除去されます。
 * </p>
 * @return mixed 署名が検証された場合は <b>TRUE</b>、正しくない場合
 * (メッセージが改暫されたか署名に用いられた証明書が無効) は <b>FALSE</b>、
 * エラーの場合に -1 を返します。
 */
function openssl_pkcs7_verify(string $filename, int $flags, string $outfilename = null, array $cainfo = null, string $extracerts = null, string $content = null) {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * S/MIME 暗号化されたメッセージを復号する
 * @link http://php.net/manual/ja/function.openssl-pkcs7-decrypt.php
 * @param string $infilename
 * @param string $outfilename <p>
 * 復号したメッセージは、<i>outfilename</i>
 * で指定したファイルに出力されます。
 * </p>
 * @param mixed $recipcert
 * @param mixed $recipkey [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_pkcs7_decrypt(string $infilename, string $outfilename, $recipcert, $recipkey = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * S/MIME メッセージにサインする
 * @link http://php.net/manual/ja/function.openssl-pkcs7-sign.php
 * @param string $infilename
 * @param string $outfilename
 * @param mixed $signcert
 * @param mixed $privkey
 * @param array $headers <p>
 * <i>headers</i> は、ヘッダの配列です。このヘッダは、
 * サインされた後でデータの前に付加されます (このパラメータの形式の詳細については
 * <b>openssl_pkcs7_encrypt</b> を参照ください)。
 * </p>
 * @param int $flags [optional] <p>
 * <i>flags</i> を出力を変更するために使用することが可能です。
 * PKCS7 定数
 * を参照ください。
 * </p>
 * @param string $extracerts [optional] <p>
 * <i>extracerts</i> には、
 * サインに含めるための他の一連の証明書を記述したファイル名を指定します。
 * これは、例えば送信者が使用した証明書を受信者が検証しやすくするために使用することが可能です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_pkcs7_sign(string $infilename, string $outfilename, $signcert, $privkey, array $headers, int $flags = PKCS7_DETACHED, string $extracerts = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * S/MIME メッセージを暗号化する
 * @link http://php.net/manual/ja/function.openssl-pkcs7-encrypt.php
 * @param string $infile
 * @param string $outfile
 * @param mixed $recipcerts <p>
 * X.509 証明書または X.509 証明書の配列。
 * </p>
 * @param array $headers <p>
 * <i>headers</i> は、
 * 暗号化された後にデータの前に付加されるヘッダの配列です。
 * </p>
 * <p>
 * <i>headers</i>
 * はヘッダ名をキーとする連想配列または添字配列であり、
 * 各要素には、各ヘッダ行が一行ずつ含まれています。
 * </p>
 * @param int $flags [optional] <p>
 * <i>flags</i> は
 * オプションとして使用可能であり、エンコード処理を変更するために指定します。
 * PKCS7 定数 を参照ください。
 * </p>
 * @param int $cipherid [optional] <p>
 * 暗号定数のうちの一つ。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_pkcs7_encrypt(string $infile, string $outfile, $recipcerts, array $headers, int $flags = 0, int $cipherid = OPENSSL_CIPHER_RC2_40): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 秘密鍵でデータを暗号化する
 * @link http://php.net/manual/ja/function.openssl-private-encrypt.php
 * @param string $data
 * @param string $crypted
 * @param mixed $key
 * @param int $padding [optional] <p>
 * <i>padding</i> には
 * <b>OPENSSL_PKCS1_PADDING</b> あるいは
 * <b>OPENSSL_NO_PADDING</b> が指定可能です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_private_encrypt(string $data, string &$crypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 秘密鍵でデータを復号する
 * @link http://php.net/manual/ja/function.openssl-private-decrypt.php
 * @param string $data
 * @param string $decrypted
 * @param mixed $key <p>
 * <i>key</i> は、
 * データの暗号化に使用したものに対応する秘密鍵である必要があります。
 * </p>
 * @param int $padding [optional] <p>
 * <i>padding</i> には、
 * <b>OPENSSL_PKCS1_PADDING</b>、
 * <b>OPENSSL_SSLV23_PADDING</b>、
 * <b>OPENSSL_PKCS1_OAEP_PADDING</b>、
 * <b>OPENSSL_NO_PADDING</b> が指定可能です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_private_decrypt(string $data, string &$decrypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 公開鍵でデータを暗号化する
 * @link http://php.net/manual/ja/function.openssl-public-encrypt.php
 * @param string $data
 * @param string $crypted <p>
 * 暗号化した結果がここに格納されます。
 * </p>
 * @param mixed $key <p>
 * 公開鍵。
 * </p>
 * @param int $padding [optional] <p>
 * <i>padding</i> には
 * <b>OPENSSL_PKCS1_PADDING</b>、
 * <b>OPENSSL_SSLV23_PADDING</b>、
 * <b>OPENSSL_PKCS1_OAEP_PADDING</b>、
 * <b>OPENSSL_NO_PADDING</b> が指定可能です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_public_encrypt(string $data, string &$crypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 公開鍵でデータを復号する
 * @link http://php.net/manual/ja/function.openssl-public-decrypt.php
 * @param string $data
 * @param string $decrypted
 * @param mixed $key <p>
 * <i>key</i> は、
 * データの暗号化に使用したものに対応する公開鍵である必要があります。
 * </p>
 * @param int $padding [optional] <p>
 * <i>padding</i> には
 * <b>OPENSSL_PKCS1_PADDING</b> あるいは
 * <b>OPENSSL_NO_PADDING</b> が指定可能です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_public_decrypt(string $data, string &$decrypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 利用可能なダイジェスト・メソッドを取得
 * @link http://php.net/manual/ja/function.openssl-get-md-methods.php
 * @param bool $aliases [optional] <p>
 * 返される array にダイジェストのエイリアスを含めるべき場合、
 * <b>TRUE</b> に設定します
 * </p>
 * @return array 利用可能なダイジェスト・メソッドの array
 */
function openssl_get_md_methods(bool $aliases = false): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 利用可能な暗号メソッドを取得
 * @link http://php.net/manual/ja/function.openssl-get-cipher-methods.php
 * @param bool $aliases [optional] <p>
 * 返される array に暗号のエイリアスを含めるべき場合、
 * <b>TRUE</b> に設定します
 * </p>
 * @return array 利用可能な暗号メソッドの array
 */
function openssl_get_cipher_methods(bool $aliases = false): array {}

function openssl_get_curve_names() {}

/**
 * (PHP 5 &gt;= 5.3.11, PHP 7)<br/>
 * リモート DH キー及びローカル DH キーの公開値に関して、共有される秘密を計算
 * @link http://php.net/manual/ja/function.openssl-dh-compute-key.php
 * @param string $pub_key <p>
 * 公開鍵
 * </p>
 * @param resource $dh_key <p>
 * DH キー
 * </p>
 * @return string 成功した場合計算されたキー、失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_dh_compute_key(string $pub_key, $dh_key): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 疑似乱数のバイト文字列を生成する
 * @link http://php.net/manual/ja/function.openssl-random-pseudo-bytes.php
 * @param int $length <p>
 * 希望するバイト長。正の整数でなければなりません。PHP は、
 * このパラメータを非 null の整数値にキャストして利用します。
 * </p>
 * @param bool $crypto_strong [optional] <p>
 * これを渡しておくと、使ったアルゴリズムが暗号学的に強いものであるかどうかを表す
 * boolean 値が格納されます。「強い」とは、
 * GPG やパスワードなどに使っても安全であるという意味です。強い場合は
 * <b>TRUE</b>、そうでない場合は <b>FALSE</b> となります。
 * </p>
 * @return string 成功した場合は指定したバイト長の string を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function openssl_random_pseudo_bytes(int $length, bool &$crypto_strong = null): string {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * OpenSSL エラーメッセージを返す
 * @link http://php.net/manual/ja/function.openssl-error-string.php
 * @return string エラーメッセージ文字列を返します。
 * エラーメッセージがもうない場合は、<b>FALSE</b> を返します。
 */
function openssl_error_string(): string {}

define ('OPENSSL_VERSION_TEXT', "OpenSSL 1.0.2g  1 Mar 2016");
define ('OPENSSL_VERSION_NUMBER', 268443775);
define ('X509_PURPOSE_SSL_CLIENT', 1);
define ('X509_PURPOSE_SSL_SERVER', 2);
define ('X509_PURPOSE_NS_SSL_SERVER', 3);
define ('X509_PURPOSE_SMIME_SIGN', 4);
define ('X509_PURPOSE_SMIME_ENCRYPT', 5);
define ('X509_PURPOSE_CRL_SIGN', 6);
define ('X509_PURPOSE_ANY', 7);

/**
 * <b>openssl_sign</b> および
 * <b>openssl_verify</b>
 * のデフォルトアルゴリズムとして用いられます。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('OPENSSL_ALGO_SHA1', 1);
define ('OPENSSL_ALGO_MD5', 2);
define ('OPENSSL_ALGO_MD4', 3);
define ('OPENSSL_ALGO_DSS1', 5);
define ('OPENSSL_ALGO_SHA224', 6);
define ('OPENSSL_ALGO_SHA256', 7);
define ('OPENSSL_ALGO_SHA384', 8);
define ('OPENSSL_ALGO_SHA512', 9);
define ('OPENSSL_ALGO_RMD160', 10);

/**
 * メッセージにサインをする際、MIME型 "multipart/signed"
 * を指定してクリアテキストでサインを行います。これは、
 * <b>openssl_pkcs7_sign</b> において
 * フラグを指定しなかった場合の <i>flags</i>
 * パラメータのデフォルトです。このオプションをオフにした場合、
 * メッセージは不透明なサインによりサインされます。これは、
 * メールリレイによる変換に対してより耐性がありますが、S/MIME を
 * サポートしないメールエージェントでは読むことはできません。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('PKCS7_DETACHED', 64);

/**
 * text/plain content type ヘッダを暗号化/署名されたメッセージに
 * 追加します。復号化または認証を行う際には、このヘッダは出力から
 * 取り除かれます。復号化または認証されたメッセージがMIME
 * 型 text/plain でない場合、エラーとなります。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('PKCS7_TEXT', 1);

/**
 * メッセージを認証する際に、通常、メッセージに含まれる証明書が
 * 証明書にサインする際に検索されます。
 * このオプションでは、
 * <b>openssl_pkcs7_verify</b> の
 * <i>extracerts</i> パラメータで指定した証明書
 * のみが使用されます。しかし、指定された証明書を信頼されていな
 * い CA として使用することも可能です。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('PKCS7_NOINTERN', 16);

/**
 * サインつきメッセージをサインした証明書の署名について
 * 検証しません。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('PKCS7_NOVERIFY', 32);

/**
 * サインを行った側の証明書の認証の連鎖を行いません。
 * この場合、サイン付きのメッセージにある証明書を未認証の CA
 * として使用しません。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('PKCS7_NOCHAIN', 8);

/**
 * メッセージにサインする際、通常はサインをする人の証明書が挿入
 * されますが、このオプションを指定した場合はそうなりません。これに
 * よりサイン付きのメッセージのサイズは小さくなりますが、認証
 * 側が（例えば、<b>openssl_pkcs7_verify</b> の
 * <i>extracerts</i> を用いて渡すことにより）
 * サインをした人の証明書のコピーをローカルに用意する必要があります。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('PKCS7_NOCERTS', 2);

/**
 * 通常、メッセージがサインされる時、サインした時間やサポートされる
 * 対象アルゴリズムを含む一連の属性が付加されます。このオプションを
 * 指定した場合、それらの属性は付加されません。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('PKCS7_NOATTR', 256);

/**
 * 通常は、入力されたメッセージは CR および LF を行端として使用した
 * 「正規化」された形式に変換されます。こらは、S/MIME の規格に
 * 基づくものです。このオプションが指定された場合、変換は行われません。
 * この機能は、MIME 形式でないバイナリデータを処理する際に
 * 便利です。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('PKCS7_BINARY', 128);

/**
 * メッセージにサインや認証を試みません。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('PKCS7_NOSIGS', 4);
define ('OPENSSL_PKCS1_PADDING', 1);
define ('OPENSSL_SSLV23_PADDING', 2);
define ('OPENSSL_NO_PADDING', 3);
define ('OPENSSL_PKCS1_OAEP_PADDING', 4);
define ('OPENSSL_DEFAULT_STREAM_CIPHERS', "ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES256-GCM-SHA384:DHE-RSA-AES128-GCM-SHA256:DHE-DSS-AES128-GCM-SHA256:kEDH+AESGCM:ECDHE-RSA-AES128-SHA256:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA:ECDHE-ECDSA-AES128-SHA:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA:ECDHE-ECDSA-AES256-SHA:DHE-RSA-AES128-SHA256:DHE-RSA-AES128-SHA:DHE-DSS-AES128-SHA256:DHE-RSA-AES256-SHA256:DHE-DSS-AES256-SHA:DHE-RSA-AES256-SHA:AES128-GCM-SHA256:AES256-GCM-SHA384:AES128:AES256:HIGH:!SSLv2:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!RC4:!ADH");
define ('OPENSSL_CIPHER_RC2_40', 0);
define ('OPENSSL_CIPHER_RC2_128', 1);
define ('OPENSSL_CIPHER_RC2_64', 2);
define ('OPENSSL_CIPHER_DES', 3);
define ('OPENSSL_CIPHER_3DES', 4);
define ('OPENSSL_CIPHER_AES_128_CBC', 5);
define ('OPENSSL_CIPHER_AES_192_CBC', 6);
define ('OPENSSL_CIPHER_AES_256_CBC', 7);
define ('OPENSSL_KEYTYPE_RSA', 0);
define ('OPENSSL_KEYTYPE_DSA', 1);
define ('OPENSSL_KEYTYPE_DH', 2);

/**
 * この定数が使えるのは、PHP をコンパイルする際に OpenSSL 0.9.8 以降を使ったときだけです。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('OPENSSL_KEYTYPE_EC', 3);
define ('OPENSSL_RAW_DATA', 1);
define ('OPENSSL_ZERO_PADDING', 2);

/**
 * SNI サポートが有効か否か。
 * @link http://php.net/manual/ja/openssl.constants.php
 */
define ('OPENSSL_TLSEXT_SERVER_NAME', 1);

// End of openssl v.7.1.5
?>
