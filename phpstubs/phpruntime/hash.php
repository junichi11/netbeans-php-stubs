<?php



namespace {

	/**
	 * @link https://php.net/manual/ja/class.hashcontext.php
	 * @since PHP 7 >= 7.2.0
	 */
	class HashContext {

		/**
		 * Private constructor to disallow direct instantiation
		 * @return self
		 * @link https://php.net/manual/ja/hashcontext.construct.php
		 * @since PHP 7 >= 7.2.0
		 */
		private function __construct() {}
	}

	/**
	 * ハッシュ値 (メッセージダイジェスト) を生成する
	 * @param string $algo <p>選択したアルゴリズムの名前 (すなわち "md5"、"sha256"、"haval160,4" など…)。</p>
	 * @param string $data <p>ハッシュするメッセージ。</p>
	 * @param bool $raw_output <p><b><code>TRUE</code></b> を設定すると、生のバイナリデータを出力します。 <b><code>FALSE</code></b> の場合は小文字の 16 進数値となります。</p>
	 * @return string <p><code>raw_output</code> が true に設定されていない場合は、 メッセージダイジェストの計算結果を小文字の 16 進数値形式の文字列で 返します。もし true に設定されていた場合は、メッセージダイジェストが そのままのバイナリ形式で返されます。</p>
	 * @link https://php.net/manual/ja/function.hash.php
	 * @see hash_file(), hash_hmac(), hash_init(), md5(), sha1()
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
	 */
	function hash(string $algo, string $data, bool $raw_output = FALSE): string {}

	/**
	 * 登録されているハッシュアルゴリズムの一覧を返す
	 * @return array <p>サポートされているハッシュアルゴリズムの一覧を、数値添字の 配列として返します。</p>
	 * @link https://php.net/manual/ja/function.hash-algos.php
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
	 */
	function hash_algos(): array {}

	/**
	 * ハッシュコンテキストをコピーする
	 * @param resource $context <p><code>hash_init()</code> が返すハッシュコンテキスト。</p>
	 * @return resource <p>ハッシュコンテキストリソースのコピーを返します。</p>
	 * @link https://php.net/manual/ja/function.hash-copy.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function hash_copy($context) {}

	/**
	 * タイミング攻撃に対して安全な文字列比較
	 * <p>2つの文字列が等しいかどうか、同じ長さの時間で比較します。</p><p>この関数は、タイミング攻撃を緩和するために使われるべきです。 たとえば <code>crypt()</code> によるパスワードのハッシュを検証する場合などです。</p>
	 * @param string $known_string <p>比較対象とする既知の長さの文字列</p>
	 * @param string $user_string <p>ユーザー指定の文字列</p>
	 * @return bool <p>2つの文字列が等しい場合は <b><code>TRUE</code></b> を返し、そうでない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.hash-equals.php
	 * @since PHP 5 >= 5.6.0, PHP 7
	 */
	function hash_equals(string $known_string, string $user_string): bool {}

	/**
	 * ファイルの内容から、ハッシュ値を生成する
	 * @param string $algo <p>選択したアルゴリズムの名前 (すなわち "md5"、"sha256"、"haval160,4" など…)。</p>
	 * @param string $filename <p>ハッシュ対象となるファイルの位置を示す URL。 fopen ラッパーをサポートしています。</p>
	 * @param bool $raw_output <p><b><code>TRUE</code></b> を設定すると、生のバイナリデータを出力します。 <b><code>FALSE</code></b> の場合は小文字の 16 進数値となります。</p>
	 * @return string <p><code>raw_output</code> が true に設定されていない場合は、 メッセージダイジェストの計算結果を小文字の 16 進数値形式の文字列で 返します。もし true に設定されていた場合は、メッセージダイジェストが そのままのバイナリ形式で返されます。</p>
	 * @link https://php.net/manual/ja/function.hash-file.php
	 * @see hash(), hash_hmac_file(), hash_update_file(), md5_file(), sha1_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
	 */
	function hash_file(string $algo, string $filename, bool $raw_output = FALSE): string {}

	/**
	 * 段階的なハッシュ処理を終了し、出来上がったダイジェストを返す
	 * @param resource $context <p><code>hash_init()</code> が返すハッシュコンテキスト。</p>
	 * @param bool $raw_output <p><b><code>TRUE</code></b> を設定すると、生のバイナリデータを出力します。 <b><code>FALSE</code></b> の場合は小文字の 16 進数値となります。</p>
	 * @return string <p><code>raw_output</code> が true に設定されていない場合は、 メッセージダイジェストの計算結果を小文字の 16 進数値形式の文字列で 返します。もし true に設定されていた場合は、メッセージダイジェストが そのままのバイナリ形式で返されます。</p>
	 * @link https://php.net/manual/ja/function.hash-final.php
	 * @see hash_init(), hash_update(), hash_update_stream(), hash_update_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
	 */
	function hash_final($context, bool $raw_output = false): string {}

	/**
	 * Generate a HKDF key derivation of a supplied key input
	 * @param string $algo <p>Name of selected hashing algorithm (i.e. "sha256", "sha512", "haval160,4", etc..) See <code>hash_algos()</code> for a list of supported algorithms.</p> <p><b>注意</b>:</p> <p>Non-cryptographic hash functions are not allowed.</p>
	 * @param string $ikm <p>Input keying material (raw binary). Cannot be empty.</p>
	 * @param int $length <p>Desired output length in bytes. Cannot be greater than 255 times the chosen hash function size.</p> <p>If <code>length</code> is <i>0</i>, the output length will default to the chosen hash function size.</p>
	 * @param string $info <p>Application/context-specific info string.</p>
	 * @param string $salt <p>Salt to use during derivation.</p> <p>While optional, adding random salt significantly improves the strength of HKDF.</p>
	 * @return string <p>Returns a string containing a raw binary representation of the derived key (also known as output keying material - OKM); or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/ja/function.hash-hkdf.php
	 * @see hash_pbkdf2()
	 * @since PHP 7 >= 7.1.2
	 */
	function hash_hkdf(string $algo, string $ikm, int $length = 0, string $info = '', string $salt = ''): string {}

	/**
	 * HMAC 方式を使用してハッシュ値を生成する
	 * @param string $algo <p>選択したアルゴリズムの名前 (すなわち "md5"、"sha256"、"haval160,4" など…)。 サポートするアルゴリズムの一覧は <code>hash_algos()</code> を参照ください。</p>
	 * @param string $data <p>ハッシュするメッセージ。</p>
	 * @param string $key <p>HMAC 方式でのメッセージダイジェストを生成するために使用する 共有の秘密鍵。</p>
	 * @param bool $raw_output <p><b><code>TRUE</code></b> を設定すると、生のバイナリデータを出力します。 <b><code>FALSE</code></b> の場合は小文字の 16 進数値となります。</p>
	 * @return string <p><code>raw_output</code> が true に設定されていない場合は、 メッセージダイジェストの計算結果を小文字の 16 進数値形式の文字列で 返します。もし true に設定されていた場合は、メッセージダイジェストが そのままのバイナリ形式で返されます。 <code>algo</code> が未知の場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.hash-hmac.php
	 * @see hash(), hash_algos(), hash_init(), hash_hmac_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
	 */
	function hash_hmac(string $algo, string $data, string $key, bool $raw_output = false): string {}

	/**
	 * Return a list of registered hashing algorithms suitable for hash_hmac
	 * @return array <p>Returns a numerically indexed array containing the list of supported hashing algorithms suitable for <code>hash_hmac()</code>.</p>
	 * @link https://php.net/manual/ja/function.hash-hmac-algos.php
	 * @see hash_hmac(), hash_algos()
	 * @since PHP 7 >= 7.2.0
	 */
	function hash_hmac_algos(): array {}

	/**
	 * HMAC 方式を使用して、指定されたファイルの内容からハッシュ値を生成する
	 * @param string $algo <p>選択したアルゴリズムの名前 (すなわち "md5"、"sha256"、"haval160,4" など…)。 サポートするアルゴリズムの一覧は <code>hash_algos()</code> を参照ください。</p>
	 * @param string $filename <p>ハッシュ対象となるファイルの位置を示す URL。 fopen ラッパーをサポートしています。</p>
	 * @param string $key <p>HMAC 方式でのメッセージダイジェストを生成するために使用する 共有の秘密鍵。</p>
	 * @param bool $raw_output <p><b><code>TRUE</code></b> を設定すると、生のバイナリデータを出力します。 <b><code>FALSE</code></b> の場合は小文字の 16 進数値となります。</p>
	 * @return string <p><code>raw_output</code> が true に設定されていない場合は、 メッセージダイジェストの計算結果を小文字の 16 進数値形式の文字列で 返します。もし true に設定されていた場合は、メッセージダイジェストが そのままのバイナリ形式で返されます。</p>
	 * @link https://php.net/manual/ja/function.hash-hmac-file.php
	 * @see hash_algos(), hash_hmac(), hash_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
	 */
	function hash_hmac_file(string $algo, string $filename, string $key, bool $raw_output = false): string {}

	/**
	 * 段階的なハッシュコンテキストを初期化する
	 * @param string $algo <p>選択したアルゴリズムの名前 (すなわち "md5"、"sha256"、"haval160,4" など…)。 サポートされているアルゴリズムの一覧については、<code>hash_algos()</code> を参照してください。</p>
	 * @param int $options <p>ハッシュ生成の際に使用するオプションで、現在は、ただひとつ <b><code>HASH_HMAC</code></b> のみをサポートしています。これが 指定された場合、<code>key</code> を <i>必ず</i>指定しなければなりません。</p>
	 * @param string $key <p><code>options</code> に <b><code>HASH_HMAC</code></b> が指定された場合に、HMAC 形式のハッシュで使用される共有の秘密鍵を 設定する必要があります。</p>
	 * @return resource <p><code>hash_update()</code>、 <code>hash_update_stream()</code>、<code>hash_update_file()</code> および <code>hash_final()</code> で使用するハッシュコンテキストリソースを 返します。</p>
	 * @link https://php.net/manual/ja/function.hash-init.php
	 * @see hash(), hash_algos(), hash_file(), hash_hmac(), hash_hmac_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
	 */
	function hash_init(string $algo, int $options = 0, string $key = NULL) {}

	/**
	 * PBKDF2 を使ってパスワードからキーを生成する
	 * @param string $algo <p>ハッシュアルゴリズムの名前 (たとえば <i>md5</i>, <i>sha256</i>, <i>haval160,4</i> など)。サポートされるアルゴリズムの一覧は <code>hash_algos()</code> をご参照ください。</p>
	 * @param string $password <p>派生に使うパスワード</p>
	 * @param string $salt <p>派生に使うソルト。ランダムに生成した値でなければいけません。</p>
	 * @param int $iterations <p>派生の実行の際の内部の反復回数</p>
	 * @param int $length <p>出力する文字列の長さ。<code>raw_output</code> が <b><code>TRUE</code></b> の場合、これは派生キーのバイト長になります。 <code>raw_output</code> が <b><code>FALSE</code></b> の場合、 これは派生キーのバイト長の二倍になります (キーの全バイトが十六進二桁で返されるからです)。</p>
	 * @param bool $raw_output <p><b><code>TRUE</code></b> にセットされている場合、名前のバイナリデータが出力されます。<b><code>FALSE</code></b> の場合、小文字の16進数が出力されます。</p>
	 * @return string <p>小文字の16進数を含む文字列が返されます。<code>raw_output</code> が <b><code>TRUE</code></b> の場合、派生キーの生のバイナリ表現が返されます。</p>
	 * @link https://php.net/manual/ja/function.hash-pbkdf2.php
	 * @see crypt(), password_hash(), hash(), hash_algos(), hash_init(), hash_hmac(), hash_hmac_file(), openssl_pbkdf2()
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function hash_pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0, bool $raw_output = FALSE): string {}

	/**
	 * アクティブなハッシュコンテキストにデータを投入する
	 * @param resource $context <p><code>hash_init()</code> が返すハッシュコンテキスト。</p>
	 * @param string $data <p>ハッシュダイジェストに含めるメッセージ。</p>
	 * @return bool <p><b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.hash-update.php
	 * @see hash_init(), hash_update_file(), hash_update_stream(), hash_final()
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
	 */
	function hash_update($context, string $data): bool {}

	/**
	 * アクティブなハッシュコンテキストに、ファイルからデータを投入する
	 * @param resource $hcontext <p><code>hash_init()</code> が返すハッシュコンテキスト。</p>
	 * @param string $filename <p>ハッシュ対象となるファイルの位置を示す URL。 fopen ラッパーをサポートしています。</p>
	 * @param resource $scontext <p><code>stream_context_create()</code> が返す ストリームコンテキスト。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.hash-update-file.php
	 * @see hash_init(), hash_update(), hash_update_stream(), hash_final(), hash(), hash_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
	 */
	function hash_update_file($hcontext, string $filename, $scontext = NULL): bool {}

	/**
	 * アクティブなハッシュコンテキストに、オープンしているストリームから データを投入する
	 * @param resource $context <p><code>hash_init()</code> が返すハッシュコンテキスト。</p>
	 * @param resource $handle <p>ストリーム作成用の関数が返す、オープンしているファイルハンドル。</p>
	 * @param int $length <p><code>handle</code> からハッシュコンテキストにコピーする 最大文字数。</p>
	 * @return int <p><code>handle</code> からハッシュコンテキストに追加された 実際のバイト数を返します。</p>
	 * @link https://php.net/manual/ja/function.hash-update-stream.php
	 * @see hash_init(), hash_update(), hash_final(), hash(), hash_file()
	 * @since PHP 5 >= 5.1.2, PHP 7, PECL hash >= 1.1
	 */
	function hash_update_stream($context, $handle, int $length = -1): int {}

	/**
	 * <code>hash_init()</code> のオプションのフラグです。 現在のハッシュコンテキストに対して HMAC digest-keying アルゴリズムが適用されることを示します。
	 */
	define('HASH_HMAC', 1);

}
