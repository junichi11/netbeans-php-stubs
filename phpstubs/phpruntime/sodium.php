<?php



namespace {

	/**
	 * Add large numbers
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $val
	 * @param string $addv
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.sodium-add.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_add(string &$val, string $addv): void {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $b64
	 * @param int $id
	 * @param string $ignore
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-base642bin.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_base642bin(string $b64, int $id, string $ignore = NULL): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $bin
	 * @param int $id
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-bin2base64.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_bin2base64(string $bin, int $id): string {}

	/**
	 * Encode to hexadecimal
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $bin
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-bin2hex.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_bin2hex(string $bin): string {}

	/**
	 * Compare large numbers
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $buf1
	 * @param string $buf2
	 * @return int
	 * @link https://php.net/manual/ja/function.sodium-compare.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_compare(string $buf1, string $buf2): int {}

	/**
	 * Decrypt in combined mode with precalculation
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $ciphertext
	 * @param string $ad
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-aes256gcm-decrypt.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_aes256gcm_decrypt(string $ciphertext, string $ad, string $nonce, string $key): string {}

	/**
	 * Encrypt in combined mode with precalculation
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $ad
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-aes256gcm-encrypt.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_aes256gcm_encrypt(string $msg, string $ad, string $nonce, string $key): string {}

	/**
	 * Check if hardware supports AES256-GCM
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-aes256gcm-is-available.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_aes256gcm_is_available(): bool {}

	/**
	 * Get random bytes for key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-aes256gcm-keygen.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_aes256gcm_keygen(): string {}

	/**
	 * Verify that the ciphertext includes a valid tag
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $ciphertext
	 * @param string $ad
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-chacha20poly1305-decrypt.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_chacha20poly1305_decrypt(string $ciphertext, string $ad, string $nonce, string $key): string {}

	/**
	 * Encrypt a message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $ad
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-chacha20poly1305-encrypt.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_chacha20poly1305_encrypt(string $msg, string $ad, string $nonce, string $key): string {}

	/**
	 * Verify that the ciphertext includes a valid tag
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $ciphertext
	 * @param string $ad
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-chacha20poly1305-ietf-decrypt.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_chacha20poly1305_ietf_decrypt(string $ciphertext, string $ad, string $nonce, string $key): string {}

	/**
	 * Encrypt a message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $ad
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-chacha20poly1305-ietf-encrypt.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_chacha20poly1305_ietf_encrypt(string $msg, string $ad, string $nonce, string $key): string {}

	/**
	 * Get random bytes for key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-chacha20poly1305-ietf-keygen.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_chacha20poly1305_ietf_keygen(): string {}

	/**
	 * Get random bytes for key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-chacha20poly1305-keygen.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_chacha20poly1305_keygen(): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $ciphertext
	 * @param string $ad
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-xchacha20poly1305-ietf-decrypt.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_xchacha20poly1305_ietf_decrypt(string $ciphertext, string $ad, string $nonce, string $key): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $ad
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-xchacha20poly1305-ietf-encrypt.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_xchacha20poly1305_ietf_encrypt(string $msg, string $ad, string $nonce, string $key): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-aead-xchacha20poly1305-ietf-keygen.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_aead_xchacha20poly1305_ietf_keygen(): string {}

	/**
	 * Compute a tag for the message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-auth.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_auth(string $msg, string $key): string {}

	/**
	 * Get random bytes for key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-auth-keygen.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_auth_keygen(): string {}

	/**
	 * Verifies that the tag is valid for the message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $signature
	 * @param string $msg
	 * @param string $key
	 * @return bool
	 * @link https://php.net/manual/ja/function.sodium-crypto-auth-verify.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_auth_verify(string $signature, string $msg, string $key): bool {}

	/**
	 * Encrypt a message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-box.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_box(string $msg, string $nonce, string $key): string {}

	/**
	 * Randomly generate a secret key and a corresponding public key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-box-keypair.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_box_keypair(): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $secret_key
	 * @param string $public_key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-box-keypair-from-secretkey-and-publickey.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_box_keypair_from_secretkey_and_publickey(string $secret_key, string $public_key): string {}

	/**
	 * Verify and decrypt a ciphertext
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $ciphertext
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-box-open.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_box_open(string $ciphertext, string $nonce, string $key): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-box-publickey.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_box_publickey(string $key): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-box-publickey-from-secretkey.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_box_publickey_from_secretkey(string $key): string {}

	/**
	 * Encrypt a message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-box-seal.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_box_seal(string $msg, string $key): string {}

	/**
	 * Decrypt the ciphertext
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $ciphertext
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-box-seal-open.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_box_seal_open(string $ciphertext, string $key): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-box-secretkey.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_box_secretkey(string $key): string {}

	/**
	 * Deterministically derive the key pair from a single key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-box-seed-keypair.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_box_seed_keypair(string $key): string {}

	/**
	 * Get a hash of the message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $key
	 * @param int $length
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-generichash.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_generichash(string $msg, string $key = NULL, int $length = SODIUM_CRYPTO_GENERICHASH_BYTES): string {}

	/**
	 * Complete the hash
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $state
	 * @param int $length
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-generichash-final.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_generichash_final(string &$state, int $length = SODIUM_CRYPTO_GENERICHASH_BYTES): string {}

	/**
	 * Initialize a hash
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @param int $length
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-generichash-init.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_generichash_init(string $key = NULL, int $length = SODIUM_CRYPTO_GENERICHASH_BYTES): string {}

	/**
	 * Get random bytes for key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-generichash-keygen.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_generichash_keygen(): string {}

	/**
	 * Add message to a hash
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $state
	 * @param string $msg
	 * @return bool
	 * @link https://php.net/manual/ja/function.sodium-crypto-generichash-update.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_generichash_update(string &$state, string $msg): bool {}

	/**
	 * Derive a subkey
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $subkey_len
	 * @param int $subkey_id
	 * @param string $context
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-kdf-derive-from-key.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_kdf_derive_from_key(int $subkey_len, int $subkey_id, string $context, string $key): string {}

	/**
	 * Get random bytes for key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-kdf-keygen.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_kdf_keygen(): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $client_keypair
	 * @param string $server_key
	 * @return array
	 * @link https://php.net/manual/ja/function.sodium-crypto-kx-client-session-keys.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_kx_client_session_keys(string $client_keypair, string $server_key): array {}

	/**
	 * Creates a new sodium keypair
	 * <p>Create a new sodium keypair consisting of the secret key (32 bytes) followed by the public key (32 bytes). The keys can be retrieved by calling <code>sodium_crypto_kx_secretkey()</code> and <code>sodium_crypto_kx_publickey()</code>, respectively.</p>
	 * @return string <p>Returns the new keypair on success; throws an exception otherwise.</p>
	 * @link https://php.net/manual/ja/function.sodium-crypto-kx-keypair.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_kx_keypair(): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-kx-publickey.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_kx_publickey(string $key): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-kx-secretkey.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_kx_secretkey(string $key): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $string
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-kx-seed-keypair.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_kx_seed_keypair(string $string): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $server_keypair
	 * @param string $client_key
	 * @return array
	 * @link https://php.net/manual/ja/function.sodium-crypto-kx-server-session-keys.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_kx_server_session_keys(string $server_keypair, string $client_key): array {}

	/**
	 * Derive a key from a password
	 * <p>This function provides low-level access to libsodium's crypto_pwhash key derivation function. Unless you have specific reason to use this function, you should use <code>sodium_crypto_pwhash_str()</code> or <code>password_hash()</code> functions instead.</p>
	 * @param int $length <p><code>integer</code>; The length of the password hash to generate, in bytes.</p>
	 * @param string $password <p><code>string</code>; The password to generate a hash for.</p>
	 * @param string $salt <p><code>string</code> A salt to add to the password before hashing. The salt should be unpredictable, ideally generated from a good random mumber source such as <code>random_bytes()</code>, and have a length of at least <b><code>SODIUM_CRYPTO_PWHASH_SALTBYTES</code></b> bytes.</p>
	 * @param int $opslimit <p>Represents a maximum amount of computations to perform. Raising this number will make the function require more CPU cycles to compute a key. There are some constants available to set the operations limit to appropriate values depending on intended use, in order of strength: <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE</code></b>, <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE</code></b> and <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE</code></b>.</p>
	 * @param int $memlimit <p>The maximum amount of RAM that the function will use, in bytes. There are constants to help you choose an appropriate value, in order of size: <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE</code></b>, <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE</code></b>, and <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE</code></b>. Typically these should be paired with the matching <code>opslimit</code> values.</p>
	 * @param int $alg <p><code>integer</code> A number indicating the hash algorithm to use. By default <b><code>SODIUM_CRYPTO_PWHASH_ALG_DEFAULT</code></b> (the currently recommended algorithm, which can change from one version of libsodium to another), or explicitly using <b><code>SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13</code></b>, representing the Argon2id algorithm version 1.3.</p>
	 * @return string <p>Returns the derived key, 失敗した場合に <b><code>FALSE</code></b> を返します. The return value is a binary string of the hash, not an ASCII-encoded representation, and does not contain additional information about the parameters used to create the hash, so you will need to keep that information if you are ever going to verify the password in future. Use <code>sodium_crypto_pwhash_str()</code> to avoid needing to do all that.</p>
	 * @link https://php.net/manual/ja/function.sodium-crypto-pwhash.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_pwhash(int $length, string $password, string $salt, int $opslimit, int $memlimit, int $alg = NULL): string {}

	/**
	 * Derives a key from a password
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $length
	 * @param string $password
	 * @param string $salt
	 * @param int $opslimit
	 * @param int $memlimit
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-pwhash-scryptsalsa208sha256.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_pwhash_scryptsalsa208sha256(int $length, string $password, string $salt, int $opslimit, int $memlimit): string {}

	/**
	 * Get an ASCII encoded hash
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $password
	 * @param int $opslimit
	 * @param int $memlimit
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-pwhash-scryptsalsa208sha256-str.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_pwhash_scryptsalsa208sha256_str(string $password, int $opslimit, int $memlimit): string {}

	/**
	 * Verify that the password is a valid password verification string
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $hash
	 * @param string $password
	 * @return bool
	 * @link https://php.net/manual/ja/function.sodium-crypto-pwhash-scryptsalsa208sha256-str-verify.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_pwhash_scryptsalsa208sha256_str_verify(string $hash, string $password): bool {}

	/**
	 * Get an ASCII-encoded hash
	 * <p>Uses a CPU- and memory-hard hash algorithm along with a randomly-generated salt, and memory and CPU limits to generate an ASCII-encoded hash suitable for password storage.</p>
	 * @param string $password <p><code>string</code>; The password to generate a hash for.</p>
	 * @param int $opslimit <p>Represents a maximum amount of computations to perform. Raising this number will make the function require more CPU cycles to compute a key. There are constants available to set the operations limit to appropriate values depending on intended use, in order of strength: <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE</code></b>, <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE</code></b> and <b><code>SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE</code></b>.</p>
	 * @param int $memlimit <p>The maximum amount of RAM that the function will use, in bytes. There are constants to help you choose an appropriate value, in order of size: <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE</code></b>, <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE</code></b>, and <b><code>SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE</code></b>. Typically these should be paired with the matching opslimit values.</p>
	 * @return string <p>Returns the hashed password, 失敗した場合に <b><code>FALSE</code></b> を返します.</p><p>In order to produce the same password hash from the same password, the same values for <code>opslimit</code> and <code>memlimit</code> must be used. These are embedded within the generated hash, so everything that's needed to verify the hash is included. This allows the <code>sodium_crypto_pwhash_str_verify()</code> function to verify the hash without needing separate storage for the other parameters.</p>
	 * @link https://php.net/manual/ja/function.sodium-crypto-pwhash-str.php
	 * @see sodium_crypto_pwhash_str_verify(), sodium_crypto_pwhash(), password_hash(), password_verify()
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_pwhash_str(string $password, int $opslimit, int $memlimit): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $password
	 * @param int $opslimit
	 * @param int $memlimit
	 * @return bool
	 * @link https://php.net/manual/ja/function.sodium-crypto-pwhash-str-needs-rehash.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_pwhash_str_needs_rehash(string $password, int $opslimit, int $memlimit): bool {}

	/**
	 * Verifies that a password matches a hash
	 * <p>Checks that a password hash created using <code>sodium_crypto_pwhash_str()</code> matches a given plain-text password. Note that the parameters are in the opposite order to the same parameters in the similar <code>password_hash()</code> function.</p>
	 * @param string $hash <p><code>password_hash()</code> が作ったハッシュ。</p>
	 * @param string $password <p>ユーザーのパスワード。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the password and hash match, or <b><code>FALSE</code></b> otherwise.</p>
	 * @link https://php.net/manual/ja/function.sodium-crypto-pwhash-str-verify.php
	 * @see sodium_crypto_pwhash_str(), password_hash(), password_verify()
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_pwhash_str_verify(string $hash, string $password): bool {}

	/**
	 * Compute a shared secret given a user's secret key and another user's public key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $n
	 * @param string $p
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-scalarmult.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_scalarmult(string $n, string $p): string {}

	/**
	 * のエイリアス sodium_crypto_box_publickey_from_secretkey()
	 * <p>この関数は次の関数のエイリアスです。 <code>sodium_crypto_box_publickey_from_secretkey()</code>.</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-scalarmult-base.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_scalarmult_base(string $key): string {}

	/**
	 * Encrypt a message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $string
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-secretbox.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_secretbox(string $string, string $nonce, string $key): string {}

	/**
	 * Get random bytes for key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-secretbox-keygen.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_secretbox_keygen(): string {}

	/**
	 * Verify and decrypt a ciphertext
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $ciphertext
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-secretbox-open.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_secretbox_open(string $ciphertext, string $nonce, string $key): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $header
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-secretstream-xchacha20poly1305-init-pull.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_init_pull(string $header, string $key): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return array
	 * @link https://php.net/manual/ja/function.sodium-crypto-secretstream-xchacha20poly1305-init-push.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_init_push(string $key): array {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-secretstream-xchacha20poly1305-keygen.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_keygen(): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $state
	 * @param string $c
	 * @param string $ad
	 * @return array
	 * @link https://php.net/manual/ja/function.sodium-crypto-secretstream-xchacha20poly1305-pull.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_pull(string &$state, string $c, string $ad = NULL): array {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $state
	 * @param string $msg
	 * @param string $ad
	 * @param int $tag
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-secretstream-xchacha20poly1305-push.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_push(string &$state, string $msg, string $ad = NULL, int $tag = NULL): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $state
	 * @return void
	 * @link https://php.net/manual/ja/function.sodium-crypto-secretstream-xchacha20poly1305-rekey.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_secretstream_xchacha20poly1305_rekey(string &$state): void {}

	/**
	 * Compute a fixed-size fingerprint for the message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-shorthash.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_shorthash(string $msg, string $key): string {}

	/**
	 * Get random bytes for key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-shorthash-keygen.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_shorthash_keygen(): string {}

	/**
	 * Sign a message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $secret_key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign(string $msg, string $secret_key): string {}

	/**
	 * Sign the message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $secretkey
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign-detached.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign_detached(string $msg, string $secretkey): string {}

	/**
	 * Convert an Ed25519 public key to a Curve25519 public key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign-ed25519-pk-to-curve25519.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign_ed25519_pk_to_curve25519(string $key): string {}

	/**
	 * Convert an Ed25519 secret key to a Curve25519 secret key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign-ed25519-sk-to-curve25519.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign_ed25519_sk_to_curve25519(string $key): string {}

	/**
	 * Randomly generate a secret key and a corresponding public key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign-keypair.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign_keypair(): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $secret_key
	 * @param string $public_key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign-keypair-from-secretkey-and-publickey.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign_keypair_from_secretkey_and_publickey(string $secret_key, string $public_key): string {}

	/**
	 * Check that the signed message has a valid signature
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $string
	 * @param string $public_key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign-open.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign_open(string $string, string $public_key): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $keypair
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign-publickey.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign_publickey(string $keypair): string {}

	/**
	 * Extract the public key from the secret key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign-publickey-from-secretkey.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign_publickey_from_secretkey(string $key): string {}

	/**
	 * Description
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign-secretkey.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign_secretkey(string $key): string {}

	/**
	 * Deterministically derive the key pair from a single key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign-seed-keypair.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign_seed_keypair(string $key): string {}

	/**
	 * Verify signature for the message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $signature
	 * @param string $msg
	 * @param string $public_key
	 * @return bool
	 * @link https://php.net/manual/ja/function.sodium-crypto-sign-verify-detached.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_sign_verify_detached(string $signature, string $msg, string $public_key): bool {}

	/**
	 * Generate a deterministic sequence of bytes from a seed
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $length
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-stream.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_stream(int $length, string $nonce, string $key): string {}

	/**
	 * Get random bytes for key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-stream-keygen.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_stream_keygen(): string {}

	/**
	 * Encrypt a message
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $msg
	 * @param string $nonce
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-crypto-stream-xor.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_crypto_stream_xor(string $msg, string $nonce, string $key): string {}

	/**
	 * Decodes a hexadecimally encoded binary string
	 * <p>Decodes a hexadecimally encoded binary string.</p><p>Like <code>sodium_bin2hex()</code>, <b>sodium_hex2bin()</b> is resistant to side-channel attacks while <code>hex2bin()</code> is not.</p>
	 * @param string $hex <p>Hexadecimal representation of data.</p>
	 * @param string $ignore <p>Optional string argument for characters to ignore.</p>
	 * @return string <p>Returns the binary representation of the given <code>hex</code> data.</p>
	 * @link https://php.net/manual/ja/function.sodium-hex2bin.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_hex2bin(string $hex, string $ignore = NULL): string {}

	/**
	 * Increment large number
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $val
	 * @return void
	 * @link https://php.net/manual/ja/function.sodium-increment.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_increment(string &$val): void {}

	/**
	 * Test for equality in constant-time
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $buf1
	 * @param string $buf2
	 * @return int
	 * @link https://php.net/manual/ja/function.sodium-memcmp.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_memcmp(string $buf1, string $buf2): int {}

	/**
	 * Overwrite buf with zeros
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $buf
	 * @return void
	 * @link https://php.net/manual/ja/function.sodium-memzero.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_memzero(string &$buf): void {}

	/**
	 * Add padding data
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $unpadded
	 * @param int $length
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-pad.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_pad(string $unpadded, int $length): string {}

	/**
	 * Remove padding data
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $padded
	 * @param int $length
	 * @return string
	 * @link https://php.net/manual/ja/function.sodium-unpad.php
	 * @since PHP 7 >= 7.2.0
	 */
	function sodium_unpad(string $padded, int $length): string {}

	define('SODIUM_CRYPTO_AEAD_AES256GCM_ABYTES', 16);

	define('SODIUM_CRYPTO_AEAD_AES256GCM_KEYBYTES', 32);

	define('SODIUM_CRYPTO_AEAD_AES256GCM_NPUBBYTES', 12);

	define('SODIUM_CRYPTO_AEAD_AES256GCM_NSECBYTES', 0);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_ABYTES', 16);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_ABYTES', 16);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_KEYBYTES', 32);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES', 12);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NSECBYTES', 0);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES', 32);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES', 8);

	define('SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES', 0);

	define('SODIUM_CRYPTO_AUTH_BYTES', 32);

	define('SODIUM_CRYPTO_AUTH_KEYBYTES', 32);

	define('SODIUM_CRYPTO_BOX_KEYPAIRBYTES', 64);

	define('SODIUM_CRYPTO_BOX_MACBYTES', 16);

	define('SODIUM_CRYPTO_BOX_NONCEBYTES', 24);

	define('SODIUM_CRYPTO_BOX_PUBLICKEYBYTES', 32);

	define('SODIUM_CRYPTO_BOX_SEALBYTES', 48);

	define('SODIUM_CRYPTO_BOX_SECRETKEYBYTES', 32);

	define('SODIUM_CRYPTO_BOX_SEEDBYTES', 32);

	define('SODIUM_CRYPTO_GENERICHASH_BYTES', 32);

	define('SODIUM_CRYPTO_GENERICHASH_BYTES_MAX', 64);

	define('SODIUM_CRYPTO_GENERICHASH_BYTES_MIN', 16);

	define('SODIUM_CRYPTO_GENERICHASH_KEYBYTES', 32);

	define('SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MAX', 64);

	define('SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MIN', 16);

	define('SODIUM_CRYPTO_KDF_BYTES_MAX', 64);

	define('SODIUM_CRYPTO_KDF_BYTES_MIN', 16);

	define('SODIUM_CRYPTO_KDF_CONTEXTBYTES', 8);

	define('SODIUM_CRYPTO_KDF_KEYBYTES', 32);

	define('SODIUM_CRYPTO_KX_KEYPAIRBYTES', 64);

	define('SODIUM_CRYPTO_KX_PUBLICKEYBYTES', 32);

	define('SODIUM_CRYPTO_KX_SECRETKEYBYTES', 32);

	define('SODIUM_CRYPTO_KX_SEEDBYTES', 32);

	define('SODIUM_CRYPTO_KX_SESSIONKEYBYTES', 32);

	define('SODIUM_CRYPTO_PWHASH_ALG_ARGON2I13', 1);

	define('SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13', 2);

	define('SODIUM_CRYPTO_PWHASH_ALG_DEFAULT', 2);

	define('SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE', 67108864);

	define('SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE', 268435456);

	define('SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE', 1073741824);

	define('SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE', 2);

	define('SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE', 3);

	define('SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE', 4);

	define('SODIUM_CRYPTO_PWHASH_SALTBYTES', 16);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE', 16777216);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE', 1073741824);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE', 524288);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE', 33554432);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES', 32);

	define('SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_STRPREFIX', '$7$');

	define('SODIUM_CRYPTO_PWHASH_STRPREFIX', '$argon2id$');

	define('SODIUM_CRYPTO_SCALARMULT_BYTES', 32);

	define('SODIUM_CRYPTO_SCALARMULT_SCALARBYTES', 32);

	define('SODIUM_CRYPTO_SECRETBOX_KEYBYTES', 32);

	define('SODIUM_CRYPTO_SECRETBOX_MACBYTES', 16);

	define('SODIUM_CRYPTO_SECRETBOX_NONCEBYTES', 24);

	define('SODIUM_CRYPTO_SHORTHASH_BYTES', 8);

	define('SODIUM_CRYPTO_SHORTHASH_KEYBYTES', 16);

	define('SODIUM_CRYPTO_SIGN_BYTES', 64);

	define('SODIUM_CRYPTO_SIGN_KEYPAIRBYTES', 96);

	define('SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES', 32);

	define('SODIUM_CRYPTO_SIGN_SECRETKEYBYTES', 64);

	define('SODIUM_CRYPTO_SIGN_SEEDBYTES', 32);

	define('SODIUM_CRYPTO_STREAM_KEYBYTES', 32);

	define('SODIUM_CRYPTO_STREAM_NONCEBYTES', 24);

	define('SODIUM_LIBRARY_MAJOR_VERSION', 10);

	define('SODIUM_LIBRARY_MINOR_VERSION', 1);

	define('SODIUM_LIBRARY_VERSION', '1.0.16');

}
