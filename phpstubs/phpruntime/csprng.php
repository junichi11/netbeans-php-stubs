<?php



namespace {

	/**
	 * Generates cryptographically secure pseudo-random bytes
	 * <p>Generates an arbitrary length string of cryptographic random bytes that are suitable for cryptographic use, such as when generating salts, keys or initialization vectors.</p><p>この関数が使う不規則性のソースはつぎのとおりです。</p><p><b>注意</b>:  この関数は PHP 7.0 で追加されたものですが、PHP 5.2 から 5.6 までのバージョンで使える » ユーザーランドの実装 も公開されています。 </p>
	 * @param int $length <p>The length of the random string that should be returned in bytes.</p>
	 * @return string <p>Returns a string containing the requested number of cryptographically secure random bytes.</p>
	 * @link https://php.net/manual/ja/function.random-bytes.php
	 * @see random_int(), openssl_random_pseudo_bytes(), bin2hex()
	 * @since PHP 7
	 */
	function random_bytes(int $length): string {}

	/**
	 * Generates cryptographically secure pseudo-random integers
	 * <p>Generates cryptographic random integers that are suitable for use where unbiased results are critical, such as when shuffling a deck of cards for a poker game.</p><p>この関数が使う不規則性のソースはつぎのとおりです。</p><p><b>注意</b>:  この関数は PHP 7.0 で追加されたものですが、PHP 5.2 から 5.6 までのバージョンで使える » ユーザーランドの実装 も公開されています。 </p>
	 * @param int $min <p>The lowest value to be returned, which must be <b><code>PHP_INT_MIN</code></b> or higher.</p>
	 * @param int $max <p>The highest value to be returned, which must be less than or equal to <b><code>PHP_INT_MAX</code></b>.</p>
	 * @return int <p>Returns a cryptographically secure random integer in the range <code>min</code> to <code>max</code>, inclusive.</p>
	 * @link https://php.net/manual/ja/function.random-int.php
	 * @see random_bytes()
	 * @since PHP 7
	 */
	function random_int(int $min, int $max): int {}

}
