<?php



namespace {

	/**
	 * CBC モードでデータを暗号化/復号する
	 * <p>最初のプロトタイプは libmcrypt 2.2.x とリンクした場合、2 番目は、 libmcrypt 2.4.x とリンクした場合のものです。 <code>mode</code> は <b><code>MCRYPT_ENCRYPT</code></b> あるいは <b><code>MCRYPT_DECRYPT</code></b> のいずれかです。</p>
	 * @param int $cipher
	 * @param string $key
	 * @param string $data
	 * @param int $mode
	 * @param string $iv
	 * @return string
	 * @link https://php.net/manual/ja/function.mcrypt-cbc.php
	 * @since PHP 4, PHP 5
	 */
	function mcrypt_cbc(int $cipher, string $key, string $data, int $mode, string $iv = NULL): string {}

	/**
	 * CFB モードでデータを暗号化/復号する
	 * <p>最初のプロトタイプは libmcrypt 2.2.x とリンクした場合、2 番目は、 libmcrypt 2.4.x とリンクした場合のものです。 <code>mode</code> は <b><code>MCRYPT_ENCRYPT</code></b> あるいは <b><code>MCRYPT_DECRYPT</code></b> のいずれかです。</p>
	 * @param int $cipher
	 * @param string $key
	 * @param string $data
	 * @param int $mode
	 * @param string $iv
	 * @return string
	 * @link https://php.net/manual/ja/function.mcrypt-cfb.php
	 * @since PHP 4, PHP 5
	 */
	function mcrypt_cfb(int $cipher, string $key, string $data, int $mode, string $iv): string {}

	/**
	 * Creates an initialization vector (IV) from a random source
	 * <p>Creates an initialization vector (IV) from a random source.</p><p>The IV is only meant to give an alternative seed to the encryption routines. This IV does not need to be secret at all, though it can be desirable. You even can send it along with your ciphertext without losing security.</p>
	 * @param int $size <p>The size of the IV.</p>
	 * @param int $source <p>The source of the IV. The source can be <b><code>MCRYPT_RAND</code></b> (system random number generator), <b><code>MCRYPT_DEV_RANDOM</code></b> (read data from /dev/random) and <b><code>MCRYPT_DEV_URANDOM</code></b> (read data from /dev/urandom). Prior to 5.3.0, <b><code>MCRYPT_RAND</code></b> was the only one supported on Windows.</p> <p>Note that the default value of this parameter was <b><code>MCRYPT_DEV_RANDOM</code></b> prior to PHP 5.6.0.</p> <p><b>注意</b>:  Note that <b><code>MCRYPT_DEV_RANDOM</code></b> may block until more entropy is available. </p>
	 * @return string <p>Returns the initialization vector, or <b><code>FALSE</code></b> on error.</p>
	 * @link https://php.net/manual/ja/function.mcrypt-create-iv.php
	 * @see random_bytes()
	 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_create_iv(int $size, int $source = MCRYPT_DEV_URANDOM): string {}

	/**
	 * Decrypts crypttext with given parameters
	 * <p>Decrypts the <code>data</code> and returns the unencrypted data.</p>
	 * @param string $cipher <p><b><code>MCRYPT_暗号名</code></b> 定数のいずれか、 あるいはアルゴリズム名をあらわす文字列。</p>
	 * @param string $key <p>The key with which the data was encrypted. If the provided key size is not supported by the cipher, the function will emit a warning and return <b><code>FALSE</code></b></p>
	 * @param string $data <p>The data that will be decrypted with the given <code>cipher</code> and <code>mode</code>. If the size of the data is not n &#42; blocksize, the data will be padded with '<i>\0</i>'.</p>
	 * @param string $mode <p>定数 <b><code>MCRYPT_MODE_モード名</code></b>、あるいは文字列 "ecb", "cbc", "cfb", "ofb", "nofb" ,"stream" のいずれか。</p>
	 * @param string $iv <p>CBC, CFB, OFB モードおよび STREAM モードのいくつかのアルゴリズムの初期化の際に使用されます。 指定した IV のサイズがそのモードでサポートされていない場合、 あるいは IV を必要とするモードで IV が指定されなかった場合は、 この関数は警告を発して <b><code>FALSE</code></b> を返します。</p>
	 * @return string <p>Returns the decrypted data as a string 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.mcrypt-decrypt.php
	 * @see mcrypt_encrypt()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_decrypt(string $cipher, string $key, string $data, string $mode, string $iv = NULL): string {}

	/**
	 * 非推奨: ECB モードでデータを暗号化/復号する
	 * <p>最初のプロトタイプは libmcrypt 2.2.x とリンクした場合、2 番目は libmcrypt 2.4.x とリンクした場合です。 <code>mode</code> は <b><code>MCRYPT_ENCRYPT</code></b> あるいは <b><code>MCRYPT_DECRYPT</code></b> のいずれかとなります。</p>
	 * @param int $cipher
	 * @param string $key
	 * @param string $data
	 * @param int $mode
	 * @return string
	 * @link https://php.net/manual/ja/function.mcrypt-ecb.php
	 * @since PHP 4, PHP 5
	 */
	function mcrypt_ecb(int $cipher, string $key, string $data, int $mode): string {}

	/**
	 * Returns the name of the opened algorithm
	 * <p>This function returns the name of the algorithm.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return string <p>Returns the name of the opened algorithm as a string.</p>
	 * @link https://php.net/manual/ja/function.mcrypt-enc-get-algorithms-name.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_algorithms_name($td): string {}

	/**
	 * Returns the blocksize of the opened algorithm
	 * <p>Gets the blocksize of the opened algorithm.</p>
	 * @param resource $td <p>The encryption descriptor.</p>
	 * @return int <p>Returns the block size of the specified algorithm in bytes.</p>
	 * @link https://php.net/manual/ja/function.mcrypt-enc-get-block-size.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_block_size($td): int {}

	/**
	 * オープンされたアルゴリズムの IV の大きさを返す
	 * <p>この関数は、暗号化記述子で指定したアルゴリズムの iv の大きさを バイト単位で返します。IV は、cbc、cfb、ofbモード およびストリームモードのいくつかのアルゴリズムで使用されます。</p>
	 * @param resource $td <p>暗号化記述子。</p>
	 * @return int <p>この関数は、暗号化記述子で指定したアルゴリズムの iv の大きさを バイト単位で返します。 この関数が '0' を返す場合、IV は そのアルゴリズムでは無視されます。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-enc-get-iv-size.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_iv_size($td): int {}

	/**
	 * オープンされたモードでサポートされる最大キー長を返す
	 * <p>そのアルゴリズムでサポートされる最大キー長をバイト単位で返します。</p>
	 * @param resource $td <p>暗号化記述子。</p>
	 * @return int <p>そのアルゴリズムでサポートされる最大キー長をバイト単位で返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-enc-get-key-size.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_key_size($td): int {}

	/**
	 * オープンされたモードの名前を返す
	 * <p>この関数はモード名を返します。</p>
	 * @param resource $td <p>暗号化記述子。</p>
	 * @return string <p>名前を表す文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-enc-get-modes-name.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_modes_name($td): string {}

	/**
	 * オープンされたアルゴリズムでサポートされるキー長を配列にして返す
	 * <p>オープンしたアルゴリズムでサポートするキーの長さを取得します。</p>
	 * @param resource $td <p>暗号化記述子。</p>
	 * @return array <p>暗号化記述子で指定したアルゴリズムでサポートされるキー長を配列と して返します。返された配列が空の場合、1 と <code>mcrypt_enc_get_key_size()</code> の値の間のすべての キー長がアルゴリズムでサポートされます。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-enc-get-supported-key-sizes.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_get_supported_key_sizes($td): array {}

	/**
	 * オープンされたモードの暗号がブロックアルゴリズムであるかどうかを調べる
	 * <p>オープンされたモードの暗号がブロックアルゴリズムであるかどうかを調べます。</p>
	 * @param resource $td <p>暗号化記述子。</p>
	 * @return bool <p>アルゴリズムがブロックアルゴリズムである場合に <b><code>TRUE</code></b>、 ストリームアルゴリズムである場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-enc-is-block-algorithm.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_is_block_algorithm($td): bool {}

	/**
	 * オープンされたモードの暗号がブロックモードで動作するかどうかを調べる
	 * <p>オープンされているモードがブロックモードで動作するかどうかを調べます (たとえばストリームでは <b><code>FALSE</code></b>、cbc や cfb、ofb では <b><code>TRUE</code></b>)。</p>
	 * @param resource $td <p>暗号化記述子。</p>
	 * @return bool <p>モードがブロックアルゴリズムを使用している場合に <b><code>TRUE</code></b>、 その他の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-enc-is-block-algorithm-mode.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_is_block_algorithm_mode($td): bool {}

	/**
	 * オープンされたモードがブロック出力を行うかどうかを調べる
	 * <p>オープンされたモードがブロック出力を行うかどうかを調べます (例: cbc と ecb の場合に <b><code>TRUE</code></b>、cfb と stream の場合に <b><code>FALSE</code></b>)。</p>
	 * @param resource $td <p>暗号化記述子。</p>
	 * @return bool <p>バイトブロックを出力するモードの場合に <b><code>TRUE</code></b>、 バイト出力を行うモードの場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-enc-is-block-mode.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_is_block_mode($td): bool {}

	/**
	 * オープンしたモジュールのセルフテストを実行する
	 * <p>この関数は、記述子 <code>td</code> で指定したアルゴリズムの セルフテストを実行します。</p>
	 * @param resource $td <p>暗号化記述子。</p>
	 * @return int <p>セルフテストが成功した場合は <b><code>FALSE</code></b> を返します。エラーの場合は <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-enc-self-test.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_enc_self_test($td): int {}

	/**
	 * 指定したパラメータでプレーンテキストを暗号化する
	 * <p>データを暗号化して、それを返します。</p>
	 * @param string $cipher <p><b><code>MCRYPT_暗号名</code></b> 定数のいずれか、 あるいはアルゴリズム名をあらわす文字列。</p>
	 * @param string $key <p>データを暗号化する際のキー。 指定した暗号化方式に対応していないサイズのキーを渡された場合は、 警告を発して <b><code>FALSE</code></b> を返します。</p>
	 * @param string $data <p>指定した <code>cipher</code> および <code>mode</code> で暗号化するデータ。 データの大きさが n &#42; blocksize でない場合、データは、 '<i>\0</i>'で埋められます。</p> <p>返される暗号化されたテキストは、<code>data</code> で指定したデータの大きさよりも大きくなる可能性があります。</p>
	 * @param string $mode <p>定数 <b><code>MCRYPT_MODE_モード名</code></b>、あるいは文字列 "ecb", "cbc", "cfb", "ofb", "nofb" ,"stream" のいずれか。</p>
	 * @param string $iv <p>CBC, CFB, OFB モードおよび STREAM モードのいくつかのアルゴリズムの初期化の際に使用されます。 指定した IV のサイズがそのモードでサポートされていない場合、 あるいは IV を必要とするモードで IV が指定されなかった場合は、 この関数は警告を発して <b><code>FALSE</code></b> を返します。</p>
	 * @return string <p>暗号化されたデータを文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-encrypt.php
	 * @see mcrypt_decrypt(), mcrypt_module_open()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_encrypt(string $cipher, string $key, string $data, string $mode, string $iv = NULL): string {}

	/**
	 * データを暗号化する
	 * <p>この関数は、データを暗号化します。データ長を n &#42; blocksize とする ために、データは "<i>\0</i>" で埋められます。 この関数は、暗号化されたデータを返します。 データのパディングが行われるため、返される文字列の長さは 入力よりも長いことがあることに注意してください。</p><p>暗号化したデータをデータベースに格納する場合は、mcrypt_generic が返す文字列全てを格納することを忘れないでください。さもないと、 文字列を適切に復号できなくなります。もとの文字列が 10 文字で ブロックサイズが 8 (ブロックサイズを調べるには <code>mcrypt_enc_get_block_size()</code> を使用します) だった場合、データベースのフィールドには少なくとも 16 文字が 必要です。<code>mdecrypt_generic()</code> が返す文字列も 16 文字となることに注意しましょう。埋められた文字を取り除くには... rtrim($str, "\0") を使用します。</p><p>もし MySQL データベースにデータを格納する場合は、 varchar フィールドに値を挿入する際に末尾のスペースが取り除かれることを 覚えておきましょう。暗号化されたデータの最後にスペース(ASCII 32)が 含まれていた場合、この処理によってデータが破壊されてしまいます。 かわりに tinyblob/tinytext (あるいはより大きな) フィールドを 使用してください。</p>
	 * @param resource $td <p>暗号化記述子。</p> <p>この関数をコールする前には、常にキーと IV を用いて <code>mcrypt_generic_init()</code> で暗号化ハンドルを 初期化しておくべきです。暗号化が終了したら、 <code>mcrypt_generic_deinit()</code> をコールして 暗号化バッファを開放すべきです。使用例は <code>mcrypt_module_open()</code> を参照ください。</p>
	 * @param string $data <p>暗号化するデータ。</p>
	 * @return string <p>暗号化したデータを返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-generic.php
	 * @see mdecrypt_generic(), mcrypt_generic_init(), mcrypt_generic_deinit()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_generic($td, string $data): string {}

	/**
	 * 暗号化モジュールを終了する
	 * <p>この関数は、暗号化記述子(<code>td</code>)で指定した 暗号化を終了します。すべてのバッファを消去しますが、モジュールは 閉じません。<code>mcrypt_module_close()</code> をコールする 必要があります(しかし、スクリプトの終了時に PHP が自動でこれを 行います)。</p>
	 * @param resource $td <p>暗号化記述子。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-generic-deinit.php
	 * @see mcrypt_module_open(), mcrypt_generic_init()
	 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_generic_deinit($td): bool {}

	/**
	 * 暗号処理を終了する
	 * <p></p><p><code>mcrypt_generic_deinit()</code> を使用してください。 <code>mcrypt_module_close()</code> とともに使用すると、 複数バッファの開放によりクラッシュを引き起こすことがあります。</p><p>この関数は、暗号化記述子(td) で指定した暗号化処理を終了します。 この関数は全てのバッファをクリアし、使用した全てのモジュールを クローズします。エラーの場合に <b><code>FALSE</code></b>、成功時に <b><code>TRUE</code></b> を返します。</p>
	 * @param resource $td
	 * @return bool
	 * @link https://php.net/manual/ja/function.mcrypt-generic-end.php
	 * @since PHP 4 >= 4.0.2, PHP 5
	 */
	function mcrypt_generic_end($td): bool {}

	/**
	 * 暗号化に必要な全てのバッファを初期化する
	 * <p><code>mcrypt_generic()</code> または <code>mdecrypt_generic()</code> をコールする前に、 常にこの関数をコールする必要があります。</p>
	 * @param resource $td <p>暗号化記述子。</p>
	 * @param string $key <p>キーの最大長は、<code>mcrypt_enc_get_key_size()</code> を コールした際に得られるキー長であり、この値より小さな値は全て有効です。</p>
	 * @param string $iv <p>IV は通常そのアルゴリズムのブロック長と同じ大きさですが、 <code>mcrypt_enc_get_iv_size()</code> をコールする ことにより、その大きさを得る必要があります。IV は ECB では 無視されます。IV は CFB、CBC、STREAM、nOFB では必須です。 IV はランダムで一意である必要があります(しかし、秘密ではある必要は ありません)。暗号化と復号で同じ IV を使用する必要があります。 IV を使用したくない場合にはゼロに設定しますが、これは推奨されません。</p>
	 * @return int <p>この関数は、エラー時に負の値を返します。キー長が不正な場合に -3、メモリの確保に問題があった場合に -4、そしてそれ以外の返り値は その他のエラーとなります。エラーが警告を発生させた場合、それが 表示されます。間違ったパラメータが渡された場合には <b><code>FALSE</code></b> が返されます。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-generic-init.php
	 * @see mcrypt_module_open()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_generic_init($td, string $key, string $iv): int {}

	/**
	 * 指定した暗号のブロックサイズを得る
	 * <p>最初のプロトタイプは libmcrypt 2.2.x とリンクした場合であり、2 番目 のものは libmcrypt 2.4.x あるいは 2.5.x とリンクした場合です。</p><p><b>mcrypt_get_block_size()</b>は、指定した <code>cipher</code> のブロック長を返します (暗号化モードと組み合わせます)。</p><p><code>mcrypt_enc_get_block_size()</code> 関数のほうがより有用です。というのもこちらの関数は <code>mcrypt_module_open()</code> が返すリソースを使用するからです。</p>
	 * @param int $cipher <p><b><code>MCRYPT_暗号名</code></b> 定数のいずれか、 あるいはアルゴリズム名をあらわす文字列。</p>
	 * @return int <p>アルゴリズムのブロックサイズをバイト数で返します。失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.mcrypt-get-block-size.php
	 * @see mcrypt_get_key_size(), mcrypt_enc_get_block_size(), mcrypt_encrypt()
	 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_get_block_size(int $cipher): int {}

	/**
	 * 指定した暗号の名前を得る
	 * <p><b>mcrypt_get_cipher_name()</b> は、指定した暗号(cipher) の名前を得るために使用されます。</p><p><b>mcrypt_get_cipher_name()</b> は、暗号の番号 (libmcrypt 2.2.x)または暗号名(libmcrypt 2.4.x 以降)を引数とし、 暗号名を返します。指定した暗号が存在しない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @param int $cipher <p><b><code>MCRYPT_暗号名</code></b> 定数のいずれか、 あるいはアルゴリズム名をあらわす文字列。</p>
	 * @return string <p>暗号の名前、あるいは暗号が存在しない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-get-cipher-name.php
	 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_get_cipher_name(int $cipher): string {}

	/**
	 * 指定した暗号/モードの組み合わせに属する IV の大きさを返す
	 * <p>指定した <code>cipher</code>/<code>mode</code> の組み合わせにおける IV の大きさを取得します。</p><p><code>mcrypt_enc_get_iv_size()</code> 関数を使用するほうが より有用です。これは <code>mcrypt_module_open()</code> が返すリソースを使用します。</p>
	 * @param string $cipher <p><b><code>MCRYPT_暗号名</code></b> 定数のいずれか、 あるいはアルゴリズム名をあらわす文字列。</p>
	 * @param string $mode <p>定数 <b><code>MCRYPT_MODE_モード名</code></b>、あるいは文字列 "ecb", "cbc", "cfb", "ofb", "nofb" ,"stream" のいずれか。</p> <p>ECB モードでは IV は要求されないため、IV は無視されます。 暗号化と復号の際には、同じ IV(開始位置)を必要とします。さもないと 暗号化処理は失敗します。</p>
	 * @return int <p>初期化ベクトル(IV)の大きさをバイト数で返します。 エラーの際には <b><code>FALSE</code></b> を返します。IV が指定した暗号/モードで無視される場合には、ゼロを返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-get-iv-size.php
	 * @see mcrypt_get_block_size(), mcrypt_enc_get_iv_size(), mcrypt_create_iv()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_get_iv_size(string $cipher, string $mode): int {}

	/**
	 * 指定した暗号のキーの長さを得る
	 * <p>最初のプロトタイプは libmcrypt 2.2.x とリンクした場合であり、2 番目の ものは libmcrypt 2.4.x あるいは 2.5.x とリンクした場合です。</p><p><b>mcrypt_get_key_size()</b> は、 <code>cipher</code> で(暗号化モードとあわせて)指定した キーの長さを得るために使用されます。</p><p><code>mcrypt_enc_get_key_size()</code> 関数を使用するほうが より有用です。これは <code>mcrypt_module_open()</code> が返すリソースを使用します。</p>
	 * @param int $cipher <p><b><code>MCRYPT_暗号名</code></b> 定数のいずれか、 あるいはアルゴリズム名をあらわす文字列。</p>
	 * @return int <p>そのアルゴリズムでサポートする最長のキーサイズをバイト数で返します。 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.mcrypt-get-key-size.php
	 * @see mcrypt_get_block_size(), mcrypt_enc_get_key_size(), mcrypt_encrypt()
	 * @since PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_get_key_size(int $cipher): int {}

	/**
	 * サポートされる全ての暗号を配列として取得する
	 * <p><code>lib_dir</code> パラメータにあるサポートするすべてのアルゴリズムの一覧を取得します。</p>
	 * @param string $lib_dir <p>すべてのアルゴリズムが存在するディレクトリを指定します。 指定しない場合は、php.ini の <i>mcrypt.algorithms_dir</i> ディレクティブを使用します。</p>
	 * @return array <p>サポートするすべてのアルゴリズムを配列で返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-list-algorithms.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_list_algorithms(string $lib_dir = 'ini_get("mcrypt.algorithms_dir")'): array {}

	/**
	 * サポートされる全てのモードの配列を取得する
	 * <p><code>lib_dir</code> にあるすべてのサポートするモードの一覧を取得します。</p>
	 * @param string $lib_dir <p>すべてのモードが存在するディレクトリを指定します。 指定しない場合は、 php.ini ディレクティブ <i>mcrypt.modes_dir</i> を使用します。</p>
	 * @return array <p>サポートするすべてのモードを配列で返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-list-modes.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_list_modes(string $lib_dir = 'ini_get("mcrypt.modes_dir")'): array {}

	/**
	 * mcrypt モジュールを閉じる
	 * <p>指定した暗号化ハンドルを閉じます。</p>
	 * @param resource $td <p>暗号化記述子。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-module-close.php
	 * @see mcrypt_module_open()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_close($td): bool {}

	/**
	 * 指定したアルゴリズムのブロック長を返す
	 * <p>指定したアルゴリズムのブロック長を取得します。</p>
	 * @param string $algorithm <p>アルゴリズム名。</p>
	 * @param string $lib_dir <p>オプションのパラメータで、 システム上でのモードモジュールの位置を指定することが可能です。</p>
	 * @return int <p>指定したアルゴリズムでサポートされるブロック長をバイト単位で返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-module-get-algo-block-size.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_get_algo_block_size(string $algorithm, string $lib_dir = NULL): int {}

	/**
	 * オープンされたモードでサポートされる最大キー長を返す
	 * <p>オープンされたモードでサポートされる最大キー長を取得します。</p>
	 * @param string $algorithm <p>アルゴリズム名。</p>
	 * @param string $lib_dir <p>オプションのパラメータで、 システム上でのモードモジュールの位置を指定することが可能です。</p>
	 * @return int <p>この関数は、指定したアルゴリズムでサポートされる最大キー長をバイト単位で返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-module-get-algo-key-size.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_get_algo_key_size(string $algorithm, string $lib_dir = NULL): int {}

	/**
	 * オープンされたアルゴリズムでサポートされるキーのサイズを配列として返す
	 * <p>指定したアルゴリズムでサポートされるキーのサイズを配列で返します。 この関数が空の配列を返した場合、1 から <code>mcrypt_module_get_algo_key_size()</code> の返り値の間のすべてのサイズのキーがアルゴリズムでサポートされます。</p>
	 * @param string $algorithm <p>使用するアルゴリズム。</p>
	 * @param string $lib_dir <p>オプションのパラメータ <code>lib_dir</code> により、 システムでアルゴリズムモジュールがある場所を指定することが可能です。</p>
	 * @return array <p>指定したアルゴリズムでサポートするキーサイズの配列を返します。 空の配列を返した場合は、そのアルゴリズムでは 1 から <code>mcrypt_module_get_algo_key_size()</code> までのすべてのキーサイズをサポートすることになります。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-module-get-supported-key-sizes.php
	 * @see mcrypt_enc_get_supported_key_sizes()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_get_supported_key_sizes(string $algorithm, string $lib_dir = NULL): array {}

	/**
	 * 指定したアルゴリズムがブロックアルゴリズムであるかを調べる
	 * <p>この関数は、指定したアルゴリズムがブロックアルゴリズムの場合に <b><code>TRUE</code></b>、ストリームアルゴリズムの場合に <b><code>FALSE</code></b> を返します。</p>
	 * @param string $algorithm <p>調べたいアルゴリズム。</p>
	 * @param string $lib_dir <p>オプションのパラメータ <code>lib_dir</code> により、 システム上での algorithm モジュールの位置を指定することが可能です。</p>
	 * @return bool <p>この関数は、指定したアルゴリズムがブロックアルゴリズムの場合に <b><code>TRUE</code></b>、ストリームアルゴリズムの場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-module-is-block-algorithm.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_is_block_algorithm(string $algorithm, string $lib_dir = NULL): bool {}

	/**
	 * 指定したモジュールがブロックアルゴリズムであるかどうかを返す
	 * <p>この関数は、mode がブロックアルゴリズムを使用する場合に <b><code>TRUE</code></b>、 その他の場合に <b><code>FALSE</code></b> を返します。(例: stream の場合に <b><code>FALSE</code></b>、 cbc、cfb、ofb の場合に <b><code>TRUE</code></b>)</p>
	 * @param string $mode <p>調べたいモード。</p>
	 * @param string $lib_dir <p>オプションのパラメータ <code>lib_dir</code> により、 システム上での mode モジュールの位置を指定することが可能です。</p>
	 * @return bool <p>この関数は、mode がブロックアルゴリズムを使用する場合に <b><code>TRUE</code></b>、 その他の場合に <b><code>FALSE</code></b> を返します。(例: stream の場合に <b><code>FALSE</code></b>、 cbc、cfb、ofb の場合に <b><code>TRUE</code></b>)</p>
	 * @link https://php.net/manual/ja/function.mcrypt-module-is-block-algorithm-mode.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_is_block_algorithm_mode(string $mode, string $lib_dir = NULL): bool {}

	/**
	 * 指定したモードがブロック出力を行うかどうかを返す
	 * <p>この関数は、ブロック出力を行うモードの場合に <b><code>TRUE</code></b>、バイトのみを 出力する場合に <b><code>FALSE</code></b> を返します(例: cbc と ecb の場合に <b><code>TRUE</code></b>、 cfb と streamの場合に <b><code>FALSE</code></b>)。</p>
	 * @param string $mode <p>定数 <b><code>MCRYPT_MODE_モード名</code></b>、あるいは文字列 "ecb", "cbc", "cfb", "ofb", "nofb" ,"stream" のいずれか。</p>
	 * @param string $lib_dir <p>オプションのパラメータ <code>lib_dir</code> により、システム上での mode モジュールの 位置を指定することが可能です。</p>
	 * @return bool <p>この関数は、ブロック出力を行うモードの場合に <b><code>TRUE</code></b>、バイトのみを 出力する場合に <b><code>FALSE</code></b> を返します(例: cbc と ecb の場合に <b><code>TRUE</code></b>、 cfb と streamの場合に <b><code>FALSE</code></b>)。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-module-is-block-mode.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_is_block_mode(string $mode, string $lib_dir = NULL): bool {}

	/**
	 * 使用するアルゴリズムおよびモードのモジュールをオープンする
	 * <p>この関数は、使用するアルゴリズムおよびモードのモジュールをオープン します。アルゴリズム名は、たとえば "<i>twofish</i>" のように名前で指定するか定数 <b><code>MCRYPT_暗号名</code></b> のいずれかを使用して指定します。 ライブラリは <code>mcrypt_module_close()</code> をコールする ことによりクローズされます。</p>
	 * @param string $algorithm <p><b><code>MCRYPT_暗号名</code></b> 定数のいずれか、 あるいはアルゴリズム名をあらわす文字列。</p>
	 * @param string $algorithm_directory <p>暗号化モジュールの位置を指定する際には <code>algorithm_directory</code> を使います。 ディレクトリ名を指定した場合には、これが使用されます。 これらの一つに空の文字列(<i>""</i>)を指定した場合、php.ini ディレクティブ <code>mcrypt.algorithms_dir</code> に設定された値を使います。 これらが設定されていない場合、libmcrypt をコンパイルした際の デフォルトのディレクトリ (通常は/usr/local/lib/libmcrypt) を使います。</p>
	 * @param string $mode <p>定数 <b><code>MCRYPT_MODE_モード名</code></b>、あるいは文字列 "ecb", "cbc", "cfb", "ofb", "nofb" ,"stream" のいずれか。</p>
	 * @param string $mode_directory <p>暗号化モジュールの位置を指定する際には <code>mode_directory</code> を使います。 ディレクトリ名を指定した場合には、これが使用されます。 これらの一つに空の文字列(<i>""</i>)を指定した場合、php.ini ディレクティブ <i>mcrypt.modes_dir</i> に設定された値を使います。 これらが設定されていない場合、libmcrypt をコンパイルした際の デフォルトのディレクトリ (通常は/usr/local/lib/libmcrypt) を使います。</p>
	 * @return resource <p>通常は暗号化記述子を返します。エラー時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-module-open.php
	 * @see mcrypt_module_close(), mcrypt_generic(), mdecrypt_generic(), mcrypt_generic_init(), mcrypt_generic_deinit()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_open(string $algorithm, string $algorithm_directory, string $mode, string $mode_directory) {}

	/**
	 * 指定したモジュールのセルフテストを実行する
	 * <p>この関数は、指定したアルゴリズムのセルフテストを実行します。</p>
	 * @param string $algorithm <p><b><code>MCRYPT_暗号名</code></b> 定数のいずれか、 あるいはアルゴリズム名をあらわす文字列。</p>
	 * @param string $lib_dir <p>オプションのパラメータ <code>lib_dir</code> により、 システム上での algorithm モジュールの位置を指定することが可能です。</p>
	 * @return bool <p>成功した場合 <i>0</i>、失敗した場合に負の <code>integer</code> を返します。</p>
	 * @link https://php.net/manual/ja/function.mcrypt-module-self-test.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mcrypt_module_self_test(string $algorithm, string $lib_dir = NULL): bool {}

	/**
	 * OFB モードでデータを暗号化/復号する
	 * <p>最初のプロトタイプは libmcrypt 2.2.x とリンクした場合、2 番目は libmcrypt 2.4.x 以降とリンクした場合です。 <code>mode</code> は、 <b><code>MCRYPT_ENCRYPT</code></b> あるいは <b><code>MCRYPT_DECRYPT</code></b> のいずれかです。</p>
	 * @param int $cipher
	 * @param string $key
	 * @param string $data
	 * @param int $mode
	 * @param string $iv
	 * @return string
	 * @link https://php.net/manual/ja/function.mcrypt-ofb.php
	 * @since PHP 4, PHP 5
	 */
	function mcrypt_ofb(int $cipher, string $key, string $data, int $mode, string $iv): string {}

	/**
	 * データを復号する
	 * <p>この関数は、データを復号します。データのパディングが行われるため、 返される文字列の長さは暗号化前の文字列よりも長くなる可能性があることに 注意してください。</p>
	 * @param resource $td <p><code>mcrypt_module_open()</code> が返す暗号化記述子。</p>
	 * @param string $data <p>暗号化されたデータ。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.mdecrypt-generic.php
	 * @see mcrypt_generic(), mcrypt_generic_init(), mcrypt_generic_deinit()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0
	 */
	function mdecrypt_generic($td, string $data): string {}

	define('MCRYPT_DECRYPT', null);

	define('MCRYPT_DEV_RANDOM', null);

	define('MCRYPT_DEV_URANDOM', null);

	define('MCRYPT_ENCRYPT', null);

	define('MCRYPT_RAND', null);

}
