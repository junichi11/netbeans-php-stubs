<?php



namespace {

	/**
	 * 暗号 iv の長さを取得
	 * <p>暗号初期化ベクトル (iv) の長さを取得。</p>
	 * @param string $method <p>暗号化方式。指定できる値は <code>openssl_get_cipher_methods()</code> を参照ください。</p>
	 * @return int <p>成功した場合は暗号の長さ、失敗した場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-cipher-iv-length.php
	 * @since PHP 5 >= 5.3.3, PHP 7
	 */
	function openssl_cipher_iv_length(string $method): int {}

	/**
	 * CSR を文字列としてエクスポートする
	 * <p><b>openssl_csr_export()</b> は、Certificate Signing Request <code>csr</code> を受け取り、 それを <code>out</code> に ASCII テキストとして保存します。 このパラメータは参照で渡されます。</p>
	 * @param resource $csr
	 * @param string $out
	 * @param bool $notext <p>オプションのパラメータ <code>notext</code> を設定すると、出力内容の冗長性が変化します。<b><code>FALSE</code></b> を指定すると、 人間が読むための追加情報が出力に含まれるようになります。 <code>notext</code> のデフォルト値は <b><code>TRUE</code></b> です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-csr-export.php
	 * @see openssl_csr_export_to_file(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_csr_export($csr, string &$out, bool $notext = true): bool {}

	/**
	 * CSR をファイルにエクスポートする
	 * <p><b>openssl_csr_export_to_file()</b> は、Certificate Signing Request <code>csr</code> を受け取り、 それを <code>outfilename</code> という名前のファイルに ASCII テキストとして保存します。</p>
	 * @param resource $csr
	 * @param string $outfilename <p>出力ファイルへのパス。</p>
	 * @param bool $notext <p>オプションのパラメータ <code>notext</code> を設定すると、出力内容の冗長性が変化します。<b><code>FALSE</code></b> を指定すると、 人間が読むための追加情報が出力に含まれるようになります。 <code>notext</code> のデフォルト値は <b><code>TRUE</code></b> です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-csr-export-to-file.php
	 * @see openssl_csr_export(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_csr_export_to_file($csr, string $outfilename, bool $notext = true): bool {}

	/**
	 * Returns the public key of a CSR
	 * <p><b>openssl_csr_get_public_key()</b> extracts the public key from <code>csr</code> and prepares it for use by other functions.</p>
	 * @param mixed $csr <p>使用できる値の一覧は CSR パラメータ を参照ください。</p>
	 * @param bool $use_shortnames <b>警告</b> <p>This parameter is ignored</p>
	 * @return resource <p>Returns a positive key resource identifier on success, or FALSE on error.</p>
	 * @link https://php.net/manual/ja/function.openssl-csr-get-public-key.php
	 * @see openssl_csr_get_subject(), openssl_csr_new(), openssl_pkey_get_details(), openssl_pkey_export_to_file(), openssl_pkey_export()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function openssl_csr_get_public_key($csr, bool $use_shortnames = TRUE) {}

	/**
	 * Returns the subject of a CSR
	 * <p><b>openssl_csr_get_subject()</b> returns subject distinguished name information encoded in the <code>csr</code> including fields commonName (CN), organizationName (O), countryName (C) etc.</p>
	 * @param mixed $csr <p>使用できる値の一覧は CSR パラメータ を参照ください。</p>
	 * @param bool $use_shortnames <p><code>shortnames</code> controls how the data is indexed in the array - if <code>shortnames</code> is <b><code>TRUE</code></b> (the default) then fields will be indexed with the short name form, otherwise, the long name form will be used - e.g.: CN is the shortname form of commonName.</p>
	 * @return array <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-csr-get-subject.php
	 * @see openssl_csr_new(), openssl_csr_get_public_key(), openssl_x509_parse()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function openssl_csr_get_subject($csr, bool $use_shortnames = TRUE): array {}

	/**
	 * CSR を作成する
	 * <p><b>openssl_csr_new()</b> は、新しい CSR (Certificate Signing Request) を <code>dn</code> の情報に基づいて作成します。dn は、証明書で使用される識別名です。</p><p><b>注意</b>:  この関数を正しく動作させるには、正しい形式の openssl.cnf をインストールしておく必要があります。 詳細な情報は、インストールについてのセクション を参照ください。 </p>
	 * @param array $dn <p>証明書で使用される識別名。</p>
	 * @param resource $privkey <p><code>privkey</code> には、事前に <code>openssl_pkey_new()</code> （あるいはその他の openssl_pkey 系の関数）で作成した秘密鍵を設定します。 これに対応する公開鍵が、CSR への署名に使用されます。</p>
	 * @param array $configargs <p>デフォルトでは、システムの <i>openssl.conf</i> の設定に したがってリクエストが初期化されます。<code>configargs</code> のキー <i>config_section_section</i> を設定することで、この デフォルト項目を変更することが可能です。また、キー <i>config</i> に別の openssl 設定ファイルを指定することで別の設定を使用することも可能です。 もし <code>configargs</code> に以下の表のキーが存在すれば、それらは <i>openssl.conf</i> の対応する項目と同じ働きをします。</p> <b>設定の上書き</b>    <code>configargs</code> のキー 型  <i>openssl.conf</i> で同等の意味を持つ項目 説明     digest_alg <code>string</code> default_md 使用するダイジェストメソッドを選択します   x509_extensions <code>string</code> x509_extensions x509 証明書を作成する際に使用する拡張モジュールを選択します   req_extensions <code>string</code> req_extensions CSR を作成する際に使用する拡張モジュールを選択します   private_key_bits <code>integer</code> default_bits 秘密鍵を作成する際に使用するビット数を指定します   private_key_type <code>integer</code> none 作成する秘密鍵の型を指定します。以下の定数 <b><code>OPENSSL_KEYTYPE_DSA</code></b>、 <b><code>OPENSSL_KEYTYPE_DH</code></b> あるいは <b><code>OPENSSL_KEYTYPE_RSA</code></b> からひとつ選択します。 デフォルト値は <b><code>OPENSSL_KEYTYPE_RSA</code></b> で、 現時点でサポートしているのはこの型のみです。    encrypt_key <code>boolean</code> encrypt_key （パスフレーズとともに）エクスポートされるキーを暗号化するか&#63;   encrypt_key_cipher <code>integer</code> none  暗号定数のうちの一つ。
	 * @param array $extraattribs <p><code>extraattribs</code> は、CSR に関する追加の設定情報を 設定するために使用します。<code>dn</code> および <code>extraattribs</code> はどちらも連想配列で、それらの キーが OID に変換されたうえでリクエストの関連する部分に適用されます。</p>
	 * @return mixed <p>CSR を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-csr-new.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_csr_new(array $dn, &$privkey, array $configargs = NULL, array $extraattribs = NULL) {}

	/**
	 * CSRに他の証明書（あるいは自分自身）で署名して証明書を作成する
	 * <p><b>openssl_csr_sign()</b> は、 指定した CSR を用いて x509 証明書リソースを作成します。</p><p><b>注意</b>:  この関数を正しく動作させるには、正しい形式の openssl.cnf をインストールしておく必要があります。 詳細な情報は、インストールについてのセクション を参照ください。 </p>
	 * @param mixed $csr <p>事前に <code>openssl_csr_new()</code> で作成した CSR。 file://path/to/csr のように指定された PEM エンコードされた CSR へのパス、 あるいは <code>openssl_csr_export()</code> で生成した文字列も使用可能です。</p>
	 * @param mixed $cacert <p>作成された証明書は <code>cacert</code> で署名されます。 <code>cacert</code> が <b><code>NULL</code></b> の場合は、自己署名の証明書となります。</p>
	 * @param mixed $priv_key <p><code>priv_key</code> は <code>cacert</code> に対応する秘密鍵です。</p>
	 * @param int $days <p><code>days</code> は、作成された証明書の有効期限を日数で指定します。</p>
	 * @param array $configargs <p><code>configargs</code> で証明書の詳細設定が可能です。 <code>configargs</code> についての詳細な情報は <code>openssl_csr_new()</code> を参照ください。</p>
	 * @param int $serial <p>発行される証明書のシリアル番号を、オプションで指定します。 省略した場合のデフォルトは 0 です。</p>
	 * @return resource <p>成功した場合に x509 証明書リソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-csr-sign.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_csr_sign($csr, $cacert, $priv_key, int $days, array $configargs = NULL, int $serial = 0) {}

	/**
	 * データを復号
	 * <p>未加工の、または base64 エンコードされた文字列を受け入れて、 与えられたメソッドとキーを使って文字列を復号します。</p>
	 * @param string $data <p>復号化する暗号化メッセージ。</p>
	 * @param string $method <p>暗号方式。利用可能な暗号方式のリストについては、 <code>openssl_get_cipher_methods()</code> を使用してください。</p>
	 * @param string $key <p>キー</p>
	 * @param int $options <p><b><code>OPENSSL_RAW_DATA</code></b> あるいは <b><code>OPENSSL_ZERO_PADDING</code></b> のいずれか。</p>
	 * @param string $iv <p>NULL ではない初期化ベクター。</p>
	 * @param string $tag <p>AEAD 暗号モードの認証タグ。 正しくない場合、認証は失敗し、関数は <b><code>FALSE</code></b> を返します。</p>
	 * @param string $aad <p>追加の認証データ。</p>
	 * @return string <p>成功した場合復号された文字列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-decrypt.php
	 * @see openssl_encrypt()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function openssl_decrypt(string $data, string $method, string $key, int $options = 0, string $iv = "", string $tag = "", string $aad = ""): string {}

	/**
	 * リモート DH キー及びローカル DH キーの公開値に関して、共有される秘密を計算
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $pub_key <p>公開鍵</p>
	 * @param resource $dh_key <p>DH キー</p>
	 * @return string <p>成功した場合計算されたキー、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-dh-compute-key.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function openssl_dh_compute_key(string $pub_key, $dh_key): string {}

	/**
	 * ダイジェストを計算
	 * <p>与えられたメソッドを使って、与えられたデータに対するダイジェスト・ハッシュ値を計算し、 未加工の、または binhex エンコードされた文字列を返します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $data <p>データ</p>
	 * @param string $method <p>ダイジェスト・メソッド</p>
	 * @param bool $raw_output <p><b><code>TRUE</code></b> に設定すると未加工の出力データとして返します。 そうでなければ binhex エンコードされた値を返します。</p>
	 * @return string <p>成功した場合ダイジェスト・ハッシュ値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-digest.php
	 * @see openssl_get_md_methods()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function openssl_digest(string $data, string $method, bool $raw_output = false): string {}

	/**
	 * データを暗号化
	 * <p>与えられた文字列を与えられたメソッドとキーで暗号化して、 未加工の、または base64 エンコードされた文字列を返します。</p>
	 * @param string $data <p>データ</p>
	 * @param string $method <p>暗号メソッド。 使用可能なメソッドの一覧を取得するには、<code>openssl_get_cipher_methods()</code> を用います。</p>
	 * @param string $key <p>キー</p>
	 * @param int $options <p><b><code>OPENSSL_RAW_DATA</code></b> と <b><code>OPENSSL_ZERO_PADDING</code></b> のビット OR。</p>
	 * @param string $iv <p>NULL ではない初期化ベクター。</p>
	 * @param string $tag <p>The authentication tag passed by reference when using AEAD cipher mode (GCM or CCM).</p>
	 * @param string $aad <p>Additional authentication data.</p>
	 * @param int $tag_length <p>The length of the authentication <code>tag</code>. Its value can be between 4 and 16 for GCM mode.</p>
	 * @return string <p>成功した場合暗号化された文字列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-encrypt.php
	 * @see openssl_decrypt()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function openssl_encrypt(string $data, string $method, string $key, int $options = 0, string $iv = "", string &$tag = NULL, string $aad = "", int $tag_length = 16): string {}

	/**
	 * OpenSSL エラーメッセージを返す
	 * <p><b>openssl_error_string()</b> は、 OpenSSL ライブラリから直近のエラーを返します。 エラーメッセージはキューに格納されるので、 すべての情報を集めるにはこの関数を複数回コールする必要があります。 最後のエラーが、いちばん最近に発生したエラーとなります。</p>
	 * @return string <p>エラーメッセージ文字列を返します。 エラーメッセージがもうない場合は、<b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-error-string.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_error_string(): string {}

	/**
	 * キーリソースを開放する
	 * <p><b>openssl_free_key()</b> は、指定した <code>key_identifier</code> が指すキーをメモリから開放します。</p>
	 * @param resource $key_identifier
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.openssl-free-key.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function openssl_free_key($key_identifier): void {}

	/**
	 * 有効な証明書の格納場所を検索する
	 * <p><b>openssl_get_cert_locations()</b> は SSL 証明書の検出された有効な証明書の格納場所についての 情報の配列を返します。</p>
	 * @return array <p>有効な証明書の格納場所の配列を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-get-cert-locations.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function openssl_get_cert_locations(): array {}

	/**
	 * 利用可能な暗号メソッドを取得
	 * <p>利用可能な暗号メソッドの一覧を取得します。</p>
	 * @param bool $aliases <p>返される <code>array</code> に暗号のエイリアスを含めるべき場合、 <b><code>TRUE</code></b> に設定します</p>
	 * @return array <p>利用可能な暗号メソッドの <code>array</code></p>
	 * @link https://php.net/manual/ja/function.openssl-get-cipher-methods.php
	 * @see openssl_get_md_methods()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function openssl_get_cipher_methods(bool $aliases = false): array {}

	/**
	 * Gets list of available curve names for ECC
	 * <p>Gets the list of available curve names for use in Elliptic curve cryptography (ECC) for public/private key operations. The two most widely standardized/supported curves are <i>prime256v1</i> (NIST P-256) and <i>secp384r1</i> (NIST P-384).</p>
	 * @return array <p>An <code>array</code> of available curve names.</p>
	 * @link https://php.net/manual/ja/function.openssl-get-curve-names.php
	 * @since PHP 7 >= 7.1.0
	 */
	function openssl_get_curve_names(): array {}

	/**
	 * 利用可能なダイジェスト・メソッドを取得
	 * <p>利用可能なダイジェスト・メソッドの一覧を取得します。</p>
	 * @param bool $aliases <p>返される <code>array</code> にダイジェストのエイリアスを含めるべき場合、 <b><code>TRUE</code></b> に設定します</p>
	 * @return array <p>利用可能なダイジェスト・メソッドの <code>array</code></p>
	 * @link https://php.net/manual/ja/function.openssl-get-md-methods.php
	 * @see openssl_digest(), openssl_get_cipher_methods()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function openssl_get_md_methods(bool $aliases = FALSE): array {}

	/**
	 * openssl_pkey_get_private() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>openssl_pkey_get_private()</code>.</p>
	 * @param mixed $key <p><code>key</code> は以下のいずれかです。</p><ol> <li>  file://path/to/file.pem 形式の文字列。 このファイルは、PEM エンコードされた証明書/秘密鍵である必要が あります（両方を含むことも可能です）。  </li> <li>PEM フォーマットの秘密鍵。</li> </ol>
	 * @param string $passphrase <p>指定されたキーが（パスフレーズを用いて）暗号化されている場合は、 オプションのパラメータ <code>passphrase</code> を使用する必要があります。</p>
	 * @return resource
	 * @link https://php.net/manual/ja/function.openssl-get-privatekey.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function openssl_get_privatekey($key, string $passphrase = "") {}

	/**
	 * openssl_pkey_get_public() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>openssl_pkey_get_public()</code>.</p>
	 * @param mixed $certificate <p><code>certificate</code> は以下のいずれかです。</p><ol> <li>an X.509 証明書リソース</li> <li>  file://path/to/file.pem 形式の文字列。 このファイルは、PEM エンコードされた証明書/公開鍵である必要が あります（両方を含むことも可能です）。  </li> <li>PEM フォーマットの公開鍵。</li> </ol>
	 * @return resource
	 * @link https://php.net/manual/ja/function.openssl-get-publickey.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function openssl_get_publickey($certificate) {}

	/**
	 * シール(暗号化)されたデータをオープン(復号)する
	 * <p><b>openssl_open()</b> は、キー ID <code>priv_key_id</code> およびエンベロープキー <code>env_key</code> に関連する公開鍵を使用して、 <code>sealed_data</code> をオープン(復号)します。 エンベロープキーは、データがシール(暗号化)された際に生成され、特定の 一つの公開鍵でのみ使用することが可能です。詳細な情報については、 <code>openssl_seal()</code> を参照ください。</p>
	 * @param string $sealed_data
	 * @param string $open_data <p>成功した場合、オープンしたデータをここに返します。</p>
	 * @param string $env_key
	 * @param mixed $priv_key_id
	 * @param string $method <p>暗号方式。</p>
	 * @param string $iv <p>初期化ベクター。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-open.php
	 * @see openssl_seal()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function openssl_open(string $sealed_data, string &$open_data, string $env_key, $priv_key_id, string $method = "RC4", string $iv = NULL): bool {}

	/**
	 * PKCS5 v2 の PBKDF2 文字列を生成する。デフォルトは SHA-1
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $password
	 * @param string $salt
	 * @param int $key_length
	 * @param int $iterations
	 * @param string $digest_algorithm
	 * @return string <p>文字列を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pbkdf2.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function openssl_pbkdf2(string $password, string $salt, int $key_length, int $iterations, string $digest_algorithm = NULL): string {}

	/**
	 * PKCS#12 互換の証明書保存ファイルを変数にエクスポートする
	 * <p><b>openssl_pkcs12_export()</b> は、 <code>x509</code> を PKCS#12 ファイルフォーマットにしたものを <code>out</code> で指定した文字列に格納します。</p>
	 * @param mixed $x509 <p>使用できる値の一覧は キー/証明書パラメータ を参照ください。</p>
	 * @param string $out <p>成功した場合に、ここに PKCS#12 が保存されます。</p>
	 * @param mixed $priv_key <p>PKCS#12 ファイルのプライベートキーコンポーネント。</p>
	 * @param string $pass <p>PKCS#12 ファイルのロックを解除するためのパスワード。</p>
	 * @param array $args
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkcs12-export.php
	 * @since PHP 5 >= 5.2.2, PHP 7
	 */
	function openssl_pkcs12_export($x509, string &$out, $priv_key, string $pass, array $args = NULL): bool {}

	/**
	 * PKCS#12 互換の証明書保存ファイルをエクスポートする
	 * <p><b>openssl_pkcs12_export_to_file()</b> は、 <code>x509</code> をファイル <code>filename</code> に PKCS#12 フォーマットで保存します。</p>
	 * @param mixed $x509 <p>使用できる値の一覧は キー/証明書パラメータ を参照ください。</p>
	 * @param string $filename <p>出力ファイルへのパス。</p>
	 * @param mixed $priv_key <p>PKCS#12 ファイルのプライベートキーコンポーネント。</p>
	 * @param string $pass <p>PKCS#12 ファイルのロックを解除するためのパスワード。</p>
	 * @param array $args
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkcs12-export-to-file.php
	 * @since PHP 5 >= 5.2.2, PHP 7
	 */
	function openssl_pkcs12_export_to_file($x509, string $filename, $priv_key, string $pass, array $args = NULL): bool {}

	/**
	 * PKCS#12 認証ストアをパースして配列形式にする
	 * <p><b>openssl_pkcs12_read()</b> は、 <code>pkcs12</code> で指定した PKCS#12 認証ストアをパースして <code>certs</code> で指定した配列に格納します。</p>
	 * @param string $pkcs12 <p>認証ストアの内容。ファイル名ではありません。</p>
	 * @param array $certs <p>成功した場合に、ここに認証ストアデータが格納されます。</p>
	 * @param string $pass <p>PKCS#12 ファイルのロックを解除するためのパスワード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkcs12-read.php
	 * @since PHP 5 >= 5.2.2, PHP 7
	 */
	function openssl_pkcs12_read(string $pkcs12, array &$certs, string $pass): bool {}

	/**
	 * S/MIME 暗号化されたメッセージを復号する
	 * <p><code>infilename</code> で指定したファイル中の S/MIME 暗号化されたメッセージを、 <code>recipcert</code> と <code>recipkey</code> で 指定した証明書とそれに関連付けられた秘密鍵を用いて復号します。</p>
	 * @param string $infilename
	 * @param string $outfilename <p>復号したメッセージは、<code>outfilename</code> で指定したファイルに出力されます。</p>
	 * @param mixed $recipcert
	 * @param mixed $recipkey
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkcs7-decrypt.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_pkcs7_decrypt(string $infilename, string $outfilename, $recipcert, $recipkey = NULL): bool {}

	/**
	 * S/MIME メッセージを暗号化する
	 * <p><b>openssl_pkcs7_encrypt()</b> は、 <code>infile</code> という名前のファイルの内容を RC2 40 ビット暗号により暗号化します。この内容は、 <code>recipcerts</code> で指定した意図する受信者によってのみ読むことが可能です。</p>
	 * @param string $infile
	 * @param string $outfile
	 * @param mixed $recipcerts <p>X.509 証明書または X.509 証明書の配列。</p>
	 * @param array $headers <p><code>headers</code> は、 暗号化された後にデータの前に付加されるヘッダの配列です。</p> <p><code>headers</code> はヘッダ名をキーとする連想配列または添字配列であり、 各要素には、各ヘッダ行が一行ずつ含まれています。</p>
	 * @param int $flags <p><code>flags</code> は オプションとして使用可能であり、エンコード処理を変更するために指定します。 PKCS7 定数 を参照ください。</p>
	 * @param int $cipherid <p>暗号定数のうちの一つ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkcs7-encrypt.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_pkcs7_encrypt(string $infile, string $outfile, $recipcerts, array $headers, int $flags = 0, int $cipherid = OPENSSL_CIPHER_RC2_40): bool {}

	/**
	 * Export the PKCS7 file to an array of PEM certificates
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $infilename
	 * @param array $certs
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkcs7-read.php
	 * @since PHP 7 >= 7.2.0
	 */
	function openssl_pkcs7_read(string $infilename, array &$certs): bool {}

	/**
	 * S/MIME メッセージに署名する
	 * <p><b>openssl_pkcs7_sign()</b> は <code>infilename</code> という名前のファイルの内容を取得し、 パラメータ <code>signcert</code> と <code>privkey</code>で 指定した証明書とそれに対応する秘密鍵を用いて署名します。</p>
	 * @param string $infilename <p>The input file you are intending to digitally sign.</p>
	 * @param string $outfilename <p>The file which the digital signature will be written to.</p>
	 * @param mixed $signcert <p>The X.509 certificate used to digitally sign infilename. See Key/Certificate parameters for a list of valid values.</p>
	 * @param mixed $privkey <p><code>privkey</code> is the private key corresponding to signcert. See Public/Private Key parameters for a list of valid values.</p>
	 * @param array $headers <p><code>headers</code> は、ヘッダの配列です。このヘッダは、 署名された後でデータの前に付加されます (このパラメータの形式の詳細については <code>openssl_pkcs7_encrypt()</code> を参照ください)。</p>
	 * @param int $flags <p><code>flags</code> を出力を変更するために使用することが可能です。 PKCS7 定数 を参照ください。</p>
	 * @param string $extracerts <p><code>extracerts</code> には、 署名に含めるための他の一連の証明書を記述したファイル名を指定します。 これは、例えば送信者が使用した証明書を受信者が検証しやすくするために使用することが可能です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkcs7-sign.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_pkcs7_sign(string $infilename, string $outfilename, $signcert, $privkey, array $headers, int $flags = PKCS7_DETACHED, string $extracerts = NULL): bool {}

	/**
	 * S/MIME で署名されたメッセージの署名を検証する
	 * <p><b>openssl_pkcs7_verify()</b> は、 指定したファイルの S/MIME メッセージを読み込み、デジタル署名を検証します。</p>
	 * @param string $filename <p>メッセージへのパス。</p>
	 * @param int $flags <p><code>flags</code> により署名の検証方法を指定することが可能です。 詳細については、PKCS7 定数 を参照ください。</p>
	 * @param string $outfilename <p><code>outfilename</code> が指定された場合、 メッセージに署名した人の証明書が PEM 形式で保存された ファイルの名前を含む文字列でなければなりません。</p>
	 * @param array $cainfo <p><code>cainfo</code> が指定された場合、 検証に使用する信頼された CA 証明書に関する情報を適用する必要があります。 このパラメータに関するより詳細な情報については、 証明書の検証 を参照ください。</p>
	 * @param string $extracerts <p><code>extracerts</code> が指定された場合、 これは信頼されていない CA と見なす一連の証明書を含んだ ファイルの名前となります。</p>
	 * @param string $content <p>ファイル名とともに <code>content</code> を指定すると、検証したデータがここに格納されます。 格納する際に、署名情報は除去されます。</p>
	 * @param string $p7bfilename
	 * @return mixed <p>署名が検証された場合は <b><code>TRUE</code></b>、正しくない場合 (メッセージが改暫されたか署名に用いられた証明書が無効) は <b><code>FALSE</code></b>、 エラーの場合に -1 を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkcs7-verify.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_pkcs7_verify(string $filename, int $flags, string $outfilename = NULL, array $cainfo = NULL, string $extracerts = NULL, string $content = NULL, string $p7bfilename = NULL) {}

	/**
	 * エクスポート可能な形式で、キーを文字列に取得する
	 * <p><b>openssl_pkey_export()</b> は、 <code>key</code> を PEM エンコードした文字列として取得し、 <code>out</code>（参照渡し）に格納します。</p><p><b>注意</b>:  この関数を正しく動作させるには、正しい形式の openssl.cnf をインストールしておく必要があります。 詳細な情報は、インストールについてのセクション を参照ください。 </p>
	 * @param mixed $key
	 * @param string $out
	 * @param string $passphrase <p>オプションで <code>passphrase</code> を使用してキーを保護することが可能です。</p>
	 * @param array $configargs <p><code>configargs</code> により openssl 設定ファイルの設定を 追加したり上書きしたりすることで、エクスポート処理の詳細設定が可能です。 <code>configargs</code> についての詳細な情報は <code>openssl_csr_new()</code> を参照ください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkey-export.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_pkey_export($key, string &$out, string $passphrase = NULL, array $configargs = NULL): bool {}

	/**
	 * エクスポート可能な形式で、キーをファイルに取得する
	 * <p><b>openssl_pkey_export_to_file()</b> は、ASCII 変換された (PEM エンコードされた) <code>key</code> を <code>outfilename</code> のファイルに保存します。</p><p><b>注意</b>:  この関数を正しく動作させるには、正しい形式の openssl.cnf をインストールしておく必要があります。 詳細な情報は、インストールについてのセクション を参照ください。 </p>
	 * @param mixed $key
	 * @param string $outfilename <p>出力ファイルへのパス。</p>
	 * @param string $passphrase <p>オプションで <code>passphrase</code> を使用してキーを保護することが可能です。</p>
	 * @param array $configargs <p><code>configargs</code> により openssl 設定ファイルの設定を 追加したり上書きしたりすることで、エクスポート処理の詳細設定が可能です。 <code>configargs</code> についての詳細な情報は <code>openssl_csr_new()</code> を参照ください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkey-export-to-file.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_pkey_export_to_file($key, string $outfilename, string $passphrase = NULL, array $configargs = NULL): bool {}

	/**
	 * 秘密鍵を開放する
	 * <p>この関数は、<code>openssl_pkey_new()</code> で作成した秘密鍵を開放します。</p>
	 * @param resource $key <p>キーを保持するリソース。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkey-free.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_pkey_free($key): void {}

	/**
	 * キーの詳細の配列を返す
	 * <p>この関数は、キーの詳細 (bits, key, type) を返します。</p>
	 * @param resource $key <p>キーを保持する配列。</p>
	 * @return array <p>成功した場合にキーの詳細を含む配列、失敗した場合に <b><code>FALSE</code></b> を返します。 返される配列のキーは <i>bits</i> (ビット数)、 <i>key</i> (公開鍵を表す文字列) および <i>type</i> (キーの種類。 <b><code>OPENSSL_KEYTYPE_RSA</code></b>、 <b><code>OPENSSL_KEYTYPE_DSA</code></b>、 <b><code>OPENSSL_KEYTYPE_DH</code></b>、 <b><code>OPENSSL_KEYTYPE_EC</code></b> のいずれか。あるいは不明な場合は -1) となります。</p><p>使っているキーの型によって、さらに詳細が返されます。 常に存在するわけではない要素もあることに注意しましょう。</p><ul> <li>  <b><code>OPENSSL_KEYTYPE_RSA</code></b> の場合は <i>"rsa"</i> というキーがあり、キーのデータが返されます。     キー 説明     <i>"n"</i>     <i>"e"</i>     <i>"d"</i>     <i>"p"</i>     <i>"q"</i>     <i>"dmp1"</i>     <i>"dmq1"</i>     <i>"iqmp"</i>      </li> <li>  <b><code>OPENSSL_KEYTYPE_DSA</code></b> の場合は <i>"dsa"</i> というキーがあり、キーのデータが返されます。     キー 説明     <i>"p"</i>     <i>"q"</i>     <i>"g"</i>     <i>"priv_key"</i>     <i>"pub_key"</i>      </li> <li>  <b><code>OPENSSL_KEYTYPE_DH</code></b> の場合は <i>"dh"</i> というキーがあり、キーのデータが返されます。     キー 説明     <i>"p"</i>     <i>"g"</i>     <i>"priv_key"</i>     <i>"pub_key"</i>      </li> </ul>
	 * @link https://php.net/manual/ja/function.openssl-pkey-get-details.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function openssl_pkey_get_details($key): array {}

	/**
	 * 秘密鍵を取得する
	 * <p><code>openssl_get_privatekey()</code> は <code>key</code> をパースし、他の関数で使用できるよう準備します。</p>
	 * @param mixed $key <p><code>key</code> は以下のいずれかです。</p><ol> <li>  file://path/to/file.pem 形式の文字列。 このファイルは、PEM エンコードされた証明書/秘密鍵である必要が あります（両方を含むことも可能です）。  </li> <li>PEM フォーマットの秘密鍵。</li> </ol>
	 * @param string $passphrase <p>指定されたキーが（パスフレーズを用いて）暗号化されている場合は、 オプションのパラメータ <code>passphrase</code> を使用する必要があります。</p>
	 * @return resource <p>成功した場合に正のキーリソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkey-get-private.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_pkey_get_private($key, string $passphrase = "") {}

	/**
	 * 証明書から公開鍵を抽出し、使用できるようにする
	 * <p><code>openssl_get_publickey()</code> は公開鍵を <code>certificate</code> から抽出し、 他の関数で使用できるよう準備します。</p>
	 * @param mixed $certificate <p><code>certificate</code> は以下のいずれかです。</p><ol> <li>an X.509 証明書リソース</li> <li>  file://path/to/file.pem 形式の文字列。 このファイルは、PEM エンコードされた証明書/公開鍵である必要が あります（両方を含むことも可能です）。  </li> <li>PEM フォーマットの公開鍵。</li> </ol>
	 * @return resource <p>成功した場合に正のキーリソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkey-get-public.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_pkey_get_public($certificate) {}

	/**
	 * 新規に秘密鍵を生成する
	 * <p><b>openssl_pkey_new()</b> は、 新しい秘密鍵と公開鍵の鍵ペアを作成します。鍵の公開部は、 <code>openssl_pkey_get_public()</code> を使用して取得可能です。</p><p><b>注意</b>:  この関数を正しく動作させるには、正しい形式の openssl.cnf をインストールしておく必要があります。 詳細な情報は、インストールについてのセクション を参照ください。 </p>
	 * @param array $configargs <p>鍵の作成方法の詳細（ビット数など）を指定するには、 <code>configargs</code> を使用します。 <code>configargs</code> の詳細な情報については <code>openssl_csr_new()</code> を参照ください。</p>
	 * @return resource <p>成功した場合に秘密鍵のリソース ID、 エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-pkey-new.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_pkey_new(array $configargs = NULL) {}

	/**
	 * 秘密鍵でデータを復号する
	 * <p><b>openssl_private_decrypt()</b> は、事前に <code>openssl_public_encrypt()</code> で暗号化された <code>data</code> を復号し、それを <code>decrypted</code> に格納します。</p><p>これを使用するのは、例えばあなたにのみ送られてきたデータを復号する場合です。</p>
	 * @param string $data
	 * @param string $decrypted
	 * @param mixed $key <p><code>key</code> は、 データの暗号化に使用したものに対応する秘密鍵である必要があります。</p>
	 * @param int $padding <p><code>padding</code> には、 <b><code>OPENSSL_PKCS1_PADDING</code></b>、 <b><code>OPENSSL_SSLV23_PADDING</code></b>、 <b><code>OPENSSL_PKCS1_OAEP_PADDING</code></b>、 <b><code>OPENSSL_NO_PADDING</code></b> が指定可能です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-private-decrypt.php
	 * @see openssl_public_encrypt(), openssl_public_decrypt()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_private_decrypt(string $data, string &$decrypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

	/**
	 * 秘密鍵でデータを暗号化する
	 * <p><b>openssl_private_encrypt()</b> は、<code>data</code> を秘密鍵 <code>key</code> で暗号化し、それを <code>crypted</code> に格納します。暗号化されたデータは、 <code>openssl_public_decrypt()</code> を用いて復号可能です。</p><p>この関数を使用するのは、例えばデータ（あるいはその一部）に署名をし、 それが他人によって書かれたものでないことを証明する場合です。</p>
	 * @param string $data
	 * @param string $crypted
	 * @param mixed $key
	 * @param int $padding <p><code>padding</code> には <b><code>OPENSSL_PKCS1_PADDING</code></b> あるいは <b><code>OPENSSL_NO_PADDING</code></b> が指定可能です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-private-encrypt.php
	 * @see openssl_public_encrypt(), openssl_public_decrypt()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_private_encrypt(string $data, string &$crypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

	/**
	 * 公開鍵でデータを復号する
	 * <p><b>openssl_public_decrypt()</b> は、事前に <code>openssl_private_encrypt()</code> で暗号化された <code>data</code> を復号し、それを <code>decrypted</code> に格納します。</p><p>これを使用するのは、例えばメッセージの作者が秘密鍵の所有者であるかどうかを調べる場合です。</p>
	 * @param string $data
	 * @param string $decrypted
	 * @param mixed $key <p><code>key</code> は、 データの暗号化に使用したものに対応する公開鍵である必要があります。</p>
	 * @param int $padding <p><code>padding</code> には <b><code>OPENSSL_PKCS1_PADDING</code></b> あるいは <b><code>OPENSSL_NO_PADDING</code></b> が指定可能です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-public-decrypt.php
	 * @see openssl_private_encrypt(), openssl_private_decrypt()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_public_decrypt(string $data, string &$decrypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

	/**
	 * 公開鍵でデータを暗号化する
	 * <p><b>openssl_public_encrypt()</b> は、<code>data</code> を公開鍵 <code>key</code> で暗号化し、それを <code>crypted</code> に格納します。暗号化されたデータは <code>openssl_private_decrypt()</code> を用いて復号可能です。</p><p>この関数を使用するのは、例えば秘密鍵の所有者にのみ読めるようにメッセージを暗号化する場合です。 また、データベースに格納するデータを安全な形式にするためにも使用されます。</p>
	 * @param string $data
	 * @param string $crypted <p>暗号化した結果がここに格納されます。</p>
	 * @param mixed $key <p>公開鍵。</p>
	 * @param int $padding <p><code>padding</code> には <b><code>OPENSSL_PKCS1_PADDING</code></b>、 <b><code>OPENSSL_SSLV23_PADDING</code></b>、 <b><code>OPENSSL_PKCS1_OAEP_PADDING</code></b>、 <b><code>OPENSSL_NO_PADDING</code></b> が指定可能です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-public-encrypt.php
	 * @see openssl_private_encrypt(), openssl_private_decrypt()
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_public_encrypt(string $data, string &$crypted, $key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

	/**
	 * 疑似乱数のバイト文字列を生成する
	 * <p>疑似乱数のバイト文字列を生成します。長さは <code>length</code> パラメータで指定します。</p><p>暗号学的に強いアルゴリズムを使って疑似乱数を生成したかどうかを知ることもできます。 オプションのパラメータ <code>crypto_strong</code> を使います。 これが <b><code>FALSE</code></b> になることはまずないでしょうが、 古いシステムなどではそうなることもあります。</p>
	 * @param int $length <p>希望するバイト長。正の整数でなければなりません。PHP は、 このパラメータを非 null の整数値にキャストして利用します。</p>
	 * @param bool $crypto_strong <p>これを渡しておくと、使ったアルゴリズムが暗号学的に強いものであるかどうかを表す <code>boolean</code> 値が格納されます。「強い」とは、 GPG やパスワードなどに使っても安全であるという意味です。強い場合は <b><code>TRUE</code></b>、そうでない場合は <b><code>FALSE</code></b> となります。</p>
	 * @return string <p>成功した場合は指定したバイト長の <code>string</code> を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-random-pseudo-bytes.php
	 * @see random_bytes(), bin2hex(), crypt(), mt_rand(), uniqid()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function openssl_random_pseudo_bytes(int $length, bool &$crypto_strong = NULL): string {}

	/**
	 * データをシール(暗号化)する
	 * <p><b>openssl_seal()</b> は、ランダムに生成された秘密鍵 および指定した <code>method</code> を使用して <code>data</code> をシール(暗号化) します。このキーは、<code>pub_key_ids</code> を ID とする 公開鍵で暗号化されます。これは、暗号化されたデータを複数の受信者に 送信できることを意味します（この際、各受信者は送信側に公開鍵を 提供します）。各受信者は、暗号化されたデータとその受信者の 公開鍵で暗号化されたエンベロープキーを受け取る必要があります。</p>
	 * @param string $data <p>シールするデータ。</p>
	 * @param string $sealed_data <p>シール済みのデータ。</p>
	 * @param array $env_keys <p>暗号化したキーの配列。</p>
	 * @param array $pub_key_ids <p>公開鍵リソース ID の配列。</p>
	 * @param string $method <p>暗号方式。</p>
	 * @param string $iv <p>初期化ベクター。</p>
	 * @return int <p>成功時にシール(暗号化)されたデータの長さ、エラー時に <b><code>FALSE</code></b> を返します。成功時には、暗号化されたデータが <code>sealed_data</code> に、エンベロープキーが <code>env_keys</code> に返されます。</p>
	 * @link https://php.net/manual/ja/function.openssl-seal.php
	 * @see openssl_open()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function openssl_seal(string $data, string &$sealed_data, array &$env_keys, array $pub_key_ids, string $method = "RC4", string &$iv = NULL): int {}

	/**
	 * 署名を生成する
	 * <p><b>openssl_sign()</b> は、指定した <code>data</code> の署名を作ります。 <code>priv_key_id</code> で指定した秘密鍵を使用して、暗号のデジタル署名を生成します。 data 自体は暗号化されないことに注意してください。</p>
	 * @param string $data <p>署名したいデータの文字列。</p>
	 * @param string $signature <p>成功した場合、署名が <code>signature</code> に格納されます。</p>
	 * @param mixed $priv_key_id <p><code>resource</code> - <code>openssl_get_privatekey()</code> が返す鍵。</p> <p><code>string</code> - PEM フォーマットの鍵。</p>
	 * @param mixed $signature_alg <p><code>int</code> - いずれかの 署名アルゴリズム。</p> <p><code>string</code> - <code>openssl_get_md_methods()</code> が返す文字列 ("sha256WithRSAEncryption" や "sha384" など)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-sign.php
	 * @see openssl_verify()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function openssl_sign(string $data, string &$signature, $priv_key_id, $signature_alg = OPENSSL_ALGO_SHA1): bool {}

	/**
	 * Exports a valid PEM formatted public key signed public key and challenge
	 * <p>Exports PEM formatted public key from encoded signed public key and challenge</p>
	 * @param string $spkac <p>Expects a valid signed public key and challenge</p>
	 * @return string <p>Returns the associated PEM formatted public key or NULL on failure.</p>
	 * @link https://php.net/manual/ja/function.openssl-spki-export.php
	 * @see openssl_spki_new(), openssl_spki_verify(), openssl_spki_export_challenge(), openssl_get_md_methods(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function openssl_spki_export(string &$spkac): string {}

	/**
	 * Exports the challenge assoicated with a signed public key and challenge
	 * <p>Exports challenge from encoded signed public key and challenge</p>
	 * @param string $spkac <p>Expects a valid signed public key and challenge</p>
	 * @return string <p>Returns the associated challenge string or NULL on failure.</p>
	 * @link https://php.net/manual/ja/function.openssl-spki-export-challenge.php
	 * @see openssl_spki_new(), openssl_spki_verify(), openssl_spki_export(), openssl_get_md_methods(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function openssl_spki_export_challenge(string &$spkac): string {}

	/**
	 * 署名された公開鍵とチャレンジを新規に作成する
	 * <p>指定されたハッシュアルゴリズムを用いて、署名された公開鍵とチャレンジを新規に作成します。</p>
	 * @param resource $privkey <p><code>privkey</code> には、事前に <code>openssl_pkey_new()</code> で作成した （もしくは他の openssl_pkey 関数で得た）秘密鍵を 設定しなければなりません。鍵の対応する公開部分は、 CSR に署名するために使用されます。</p>
	 * @param string $challenge <p>チャレンジは SPKAC と関連付けられます。</p>
	 * @param int $algorithm <p>ダイジェストアルゴリズム。<b>openssl_get_md_method()</b> を参照ください。</p>
	 * @return string <p>署名された公開鍵とチャレンジ文字列を返し、失敗したときはNULLを返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-spki-new.php
	 * @see openssl_spki_verify(), openssl_spki_export_challenge(), openssl_spki_export(), openssl_get_md_methods(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function openssl_spki_new(&$privkey, string &$challenge, int $algorithm = 0): string {}

	/**
	 * Verifies a signed public key and challenge
	 * <p>Validates the supplied signed public key and challenge</p>
	 * @param string $spkac <p>Expects a valid signed public key and challenge</p>
	 * @return string <p>Returns a boolean on success or failure.</p>
	 * @link https://php.net/manual/ja/function.openssl-spki-verify.php
	 * @see openssl_spki_new(), openssl_spki_export_challenge(), openssl_spki_export(), openssl_get_md_methods(), openssl_csr_new(), openssl_csr_sign()
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function openssl_spki_verify(string &$spkac): string {}

	/**
	 * 署名を検証する
	 * <p><b>openssl_verify()</b> は、 <code>pub_key_id</code> が指す公開鍵を使用し、 指定した <code>data</code> に関して <code>signature</code> が正しいことを確認します。 署名が正しいと判定されるためには、 その公開鍵が署名の際に使用した秘密鍵に対応していることを必要とします。</p>
	 * @param string $data <p>署名を作成するときに使ったデータの文字列。</p>
	 * @param string $signature <p>生のバイナリ文字列。<code>openssl_sign()</code> もしくはそれと同等の手段を使って生成したもの。</p>
	 * @param mixed $pub_key_id <p><code>resource</code> - <code>openssl_get_publickey()</code> が返す鍵。</p> <p><code>string</code> - PEM フォーマットの鍵 ("-----BEGIN PUBLIC KEY----- MIIBCgK..." など)。</p>
	 * @param mixed $signature_alg <p><code>int</code> - いずれかの 署名アルゴリズム。</p> <p><code>string</code> - <code>openssl_get_md_methods()</code> が返す文字列 ("sha1WithRSAEncryption" や "sha512" など)。</p>
	 * @return int <p>署名 (signature) が正しい場合に 1、正しくない場合に 0、 エラーの場合に -1 を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-verify.php
	 * @see openssl_sign()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function openssl_verify(string $data, string $signature, $pub_key_id, $signature_alg = OPENSSL_ALGO_SHA1): int {}

	/**
	 * 秘密鍵が証明書に対応するかを確認する
	 * <p><code>key</code> が <code>cert</code> に対応する秘密鍵かどうかを調べます。</p>
	 * @param mixed $cert <p>証明書。</p>
	 * @param mixed $key <p>秘密鍵。</p>
	 * @return bool <p><code>key</code> が <code>cert</code> に対応する秘密鍵の場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-x509-check-private-key.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_x509_check_private_key($cert, $key): bool {}

	/**
	 * 証明書が特定の目的に使用可能かどうか確認する
	 * <p><b>openssl_x509_checkpurpose()</b> は証明書を調べ、 <code>purpose</code> で指定した目的に使用可能であるかどうかを確認します。</p>
	 * @param mixed $x509cert <p>調べたい証明書。</p>
	 * @param int $purpose <p></p> <b><b>openssl_x509_checkpurpose()</b> の目的</b>   定数 説明     X509_PURPOSE_SSL_CLIENT  この証明書を SSL 接続のクライアント側で使用できるか&#63;    X509_PURPOSE_SSL_SERVER  この証明書を SSL 接続のサーバー側で使用できるか&#63;    X509_PURPOSE_NS_SSL_SERVER この証明書を Netscape SSL サーバーで使用できるか&#63;   X509_PURPOSE_SMIME_SIGN この証明書を S/MIME email で使用できるか&#63;   X509_PURPOSE_SMIME_ENCRYPT この証明書を S/MIME email の暗号化で使用できるか&#63;   X509_PURPOSE_CRL_SIGN  この証明書を証明書取消リスト(CRL)にサインをする際に使用できるか&#63;    X509_PURPOSE_ANY この証明書をあらゆる用途に使用できるか&#63;    これらのオプションはビットフィールドではありません。 指定できるのは一つだけです!
	 * @param array $cainfo <p><code>cainfo</code> は、証明書の認証 で説明したような信頼できる CA ファイル/ディレクトリの配列です。</p>
	 * @param string $untrustedfile <p>指定した場合は、これが証明書を含むPEMエンコードされたファイルの名前になります。 この証明書は、検証と証明を簡単化するために使用されます。 そのファイル内にある証明書は、信頼されない(untrusted)証明書とみなされます。</p>
	 * @return int <p>証明書が意図した目的に使用可能である場合に <b><code>TRUE</code></b>、使用できない場合に <b><code>FALSE</code></b> 、エラーの場合に -1 を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-x509-checkpurpose.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_x509_checkpurpose($x509cert, int $purpose, array $cainfo = array(), string $untrustedfile = NULL): int {}

	/**
	 * 証明書を文字列としてエクスポートする
	 * <p><b>openssl_x509_export()</b> は、 PEM エンコード形式の <code>x509</code> を文字列 <code>output</code> に保存します。</p>
	 * @param mixed $x509 <p>使用できる値の一覧は キー/証明書パラメータ を参照ください。</p>
	 * @param string $output <p>成功した場合に、ここに PEM が格納されます。</p>
	 * @param bool $notext <p>オプションのパラメータ <code>notext</code> を設定すると、出力内容の冗長性が変化します。<b><code>FALSE</code></b> を指定すると、 人間が読むための追加情報が出力に含まれるようになります。 <code>notext</code> のデフォルト値は <b><code>TRUE</code></b> です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-x509-export.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_x509_export($x509, string &$output, bool $notext = TRUE): bool {}

	/**
	 * 証明書をファイルにエクスポートする
	 * <p><b>openssl_x509_export_to_file()</b> は、 PEM エンコード形式の <code>x509</code> をファイル <code>outfilename</code> に保存します。</p>
	 * @param mixed $x509 <p>使用できる値の一覧は キー/証明書パラメータ を参照ください。</p>
	 * @param string $outfilename <p>出力ファイルへのパス。</p>
	 * @param bool $notext <p>オプションのパラメータ <code>notext</code> を設定すると、出力内容の冗長性が変化します。<b><code>FALSE</code></b> を指定すると、 人間が読むための追加情報が出力に含まれるようになります。 <code>notext</code> のデフォルト値は <b><code>TRUE</code></b> です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-x509-export-to-file.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function openssl_x509_export_to_file($x509, string $outfilename, bool $notext = TRUE): bool {}

	/**
	 * 与えられた X.509 証明書のフィンガープリントあるいはダイジェストを計算する
	 * <p><b>openssl_x509_fingerprint()</b> は <code>x509</code> のダイジェストを文字列で返します。</p>
	 * @param mixed $x509 <p>使用できる値の一覧は キー/証明書パラメータ を参照ください。</p>
	 * @param string $hash_algorithm <p>"md5" や "sha1" といったハッシュアルゴリズム。</p>
	 * @param bool $raw_output <p><b><code>TRUE</code></b> が設定された場合、生のバイナリデータを出力します。<b><code>FALSE</code></b> では小文字の8進数を出力します。</p>
	 * @return bool <p><code>raw_output</code> が <b><code>TRUE</code></b> に設定されていない場合、小文字の8進数として計算された証明書のフィンガープリントを含む文字列を返します。 <code>raw_output</code> が <b><code>TRUE</code></b> に設定されている場合、メッセージダイジェストの生のバイナリ表現が返されます。</p><p>失敗したときは <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-x509-fingerprint.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function openssl_x509_fingerprint($x509, string $hash_algorithm = "sha1", bool $raw_output = FALSE): bool {}

	/**
	 * 証明書リソースを開放する
	 * <p><b>openssl_x509_free()</b> は、メモリから指定した <code>x509cert</code> リソースに関連した証明書を開放します。</p>
	 * @param resource $x509cert
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.openssl-x509-free.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_x509_free($x509cert): void {}

	/**
	 * X509 証明書をパースし、配列として情報を返す
	 * <p><b>openssl_x509_parse()</b> は、指定した <code>x509cert</code> に関する情報を返します。この情報には 題名、発行者名、目的、発効日および有効期限等が含まれます。</p>
	 * @param mixed $x509cert
	 * @param bool $shortnames <p><code>shortnames</code> は、配列中でのデータの添字付けの 方法を設定します。<code>shortnames</code> が <b><code>TRUE</code></b> の場合 (デフォルト)、フィールドは短縮型で添字が付けられます。そうでない場合、 長い名前が使用されます。例えば、CN は commonName の短縮型です。</p>
	 * @return array <p>返されるデータの構造については（わざと）まだ文書化していません。 これは、今後もデータの構造が変更される可能性があるためです。</p>
	 * @link https://php.net/manual/ja/function.openssl-x509-parse.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_x509_parse($x509cert, bool $shortnames = TRUE): array {}

	/**
	 * X.509 証明書をパースし、リソース ID を返す
	 * <p><b>openssl_x509_read()</b> は、 <code>x509certdata</code> で指定した証明書をパースし、 その証明書用のリソースIDを返します。</p>
	 * @param mixed $x509certdata
	 * @return resource <p>成功した場合にリソース ID、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.openssl-x509-read.php
	 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
	 */
	function openssl_x509_read($x509certdata) {}

}
