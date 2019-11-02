<?php



namespace {

	/**
	 * ハッシュ値を計算する
	 * <p><b>mhash()</b> は、 <code>hash</code> で指定したハッシュ関数を <code>data</code> に適用します。</p>
	 * @param int $hash <p>ハッシュ ID。<b><code>MHASH_ハッシュ名</code></b> 定数のいずれかを指定します。</p>
	 * @param string $data <p>ユーザーが入力した文字列。</p>
	 * @param string $key <p>指定した場合は、この関数は結果の HMAC を返します。 HMAC は、メッセージ認証時のキーに基づくハッシュ、 あるいは指定したキーに基づく単なるメッセージダイジェストです。 mhash でサポートしている全てのアルゴリズムが HMAC モードで使用できるわけではありません。</p>
	 * @return string <p>結果のハッシュ (あるいはダイジェストとも言います) あるいは HMAC を表す文字列を返します。 エラー時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mhash.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mhash(int $hash, string $data, string $key = NULL): string {}

	/**
	 * 利用可能なハッシュ ID の最大値を得る
	 * <p>利用可能なハッシュ ID の最大値を取得します。</p>
	 * @return int <p>利用可能なハッシュ ID の最大値を返します。 ハッシュは、0 からこのハッシュ ID までの数字となります。</p>
	 * @link https://php.net/manual/ja/function.mhash-count.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mhash_count(): int {}

	/**
	 * 指定したハッシュのブロックサイズを得る
	 * <p>指定した <code>hash</code> のブロックサイズを取得します。</p>
	 * @param int $hash <p>ハッシュ ID。<b><code>MHASH_ハッシュ名</code></b> 定数のいずれかを指定します。</p>
	 * @return int <p>サイズをバイト数で返します。<code>hash</code> が存在しない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mhash-get-block-size.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mhash_get_block_size(int $hash): int {}

	/**
	 * 指定したハッシュの名前を得る
	 * <p>指定した <code>hash</code> の名前を取得します。</p>
	 * @param int $hash <p>ハッシュ ID。<b><code>MHASH_ハッシュ名</code></b> 定数のいずれかを指定します。</p>
	 * @return string <p>ハッシュの名前を返します。そのハッシュが存在しない場合は、<b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mhash-get-hash-name.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mhash_get_hash_name(int $hash): string {}

	/**
	 * キーを生成する
	 * <p><code>hash</code> にユーザーが指定した <code>password</code> を用いてキーを生成します。</p><p>OpenPGP のドキュメント (» RFC 2440) で規定されている、Salted S2k アルゴリズムを使用します。</p><p>ユーザーが指定したパスワードは、暗号化アルゴリズムのキーとしては 適切ではないということを覚えておきましょう。ユーザーが選択するのは、 通常はキーボードから入力可能なキーだからです。 これらのパスワードは、文字当たり 6 から 7 ビットのみ(もしくはそれ以下) しか使用していません。ユーザーの指定したキーに対して、 (この関数のような) ある種の変換を行うことを強く推奨します。</p>
	 * @param int $hash <p>キーの作成に使用するハッシュ ID。<b><code>MHASH_ハッシュ名</code></b> 定数のいずれかを指定します。</p>
	 * @param string $password <p>ユーザーが指定したパスワード。</p>
	 * @param string $salt <p>異なったキーを生成するため、キーを生成するたびに、 十分にランダムな異なる値となる必要があります。キーを調べる際に <code>salt</code> を知っている必要があるため、キーを salt に付加するというのは 良い発想です。salt は 8 バイト固定長で、これより少ない場合はゼロで 埋められます。</p>
	 * @param int $bytes <p>キーの長さをバイト数で指定します。</p>
	 * @return string <p>生成されたキーを表す文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.mhash-keygen-s2k.php
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function mhash_keygen_s2k(int $hash, string $password, string $salt, int $bytes): string {}

}
