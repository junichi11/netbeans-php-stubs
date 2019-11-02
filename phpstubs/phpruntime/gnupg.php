<?php



namespace {

	/**
	 * 復号のためのキーを追加する
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $fingerprint <p>フィンガープリントキー。</p>
	 * @param string $passphrase <p>パスフレーズ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-adddecryptkey.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_adddecryptkey($identifier, string $fingerprint, string $passphrase): bool {}

	/**
	 * 暗号化のためのキーを追加する
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $fingerprint <p>フィンガープリントキー。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-addencryptkey.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_addencryptkey($identifier, string $fingerprint): bool {}

	/**
	 * 署名のためのキーを追加する
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $fingerprint <p>フィンガープリントキー。</p>
	 * @param string $passphrase <p>パスフレーズ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-addsignkey.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_addsignkey($identifier, string $fingerprint, string $passphrase = NULL): bool {}

	/**
	 * 事前に復号のために設定されたすべてのキーを削除する
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-cleardecryptkeys.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_cleardecryptkeys($identifier): bool {}

	/**
	 * 事前に暗号化のために設定されたすべてのキーを削除する
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-clearencryptkeys.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_clearencryptkeys($identifier): bool {}

	/**
	 * 事前に署名のために設定されたすべてのキーを削除する
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-clearsignkeys.php
	 * @since PECL gnupg >= 0.5
	 */
	function gnupg_clearsignkeys($identifier): bool {}

	/**
	 * 指定されたテキストを復号する
	 * <p>事前に gnupg_adddecryptkey で設定されたキーを使用し、指定されたテキストを復号します。</p>
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $text <p>復号したいテキスト。</p>
	 * @return string <p>成功した場合、この関数は復号されたテキストを返します。 失敗した場合、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-decrypt.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_decrypt($identifier, string $text): string {}

	/**
	 * 指定されたテキストを復号し、検証する
	 * <p>指定したテキストを復号・検証し、署名の情報を返します。</p>
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $text <p>復号したいテキスト。</p>
	 * @param string $plaintext <p><code>plaintext</code> には復号したテキストが格納されます。</p>
	 * @return array <p>成功した場合、この関数は署名の情報を返し、復号されたテキストを <code>plaintext</code> に保存します。 失敗した場合、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-decryptverify.php
	 * @since PECL gnupg >= 0.2
	 */
	function gnupg_decryptverify($identifier, string $text, string &$plaintext): array {}

	/**
	 * 指定したテキストを暗号化する
	 * <p>事前に gnupg_addencryptkey で設定したキーを使用し、指定されたテキストを暗号化します。暗号化された テキストを返します。</p>
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $plaintext <p>暗号化したいテキスト。</p>
	 * @return string <p>成功した場合、この関数は暗号化されたテキストを返します。 失敗した場合、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-encrypt.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_encrypt($identifier, string $plaintext): string {}

	/**
	 * 指定したテキストを暗号化し、署名する
	 * <p>事前に gnupg_addsignkey および gnupg_addencryptkey で設定したキーを使用し、指定した <code>plaintext</code> を暗号化・署名します。暗号化・署名済みのテキストを返します。</p>
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $plaintext <p>暗号化したいテキスト。</p>
	 * @return string <p>成功した場合、この関数は暗号化されて署名されたテキストを返します。 失敗した場合、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-encryptsign.php
	 * @since PECL gnupg >= 0.2
	 */
	function gnupg_encryptsign($identifier, string $plaintext): string {}

	/**
	 * キーをエクスポートする
	 * <p>キーの <code>fingerprint</code> をエクスポートします。</p>
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $fingerprint <p>フィンガープリントキー。</p>
	 * @return string <p>成功した場合、この関数はキーのデータを返します。 失敗した場合、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-export.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_export($identifier, string $fingerprint): string {}

	/**
	 * 関数が失敗した場合にエラー文字列を返す
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @return string <p>エラーが発生した場合にエラー文字列、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-geterror.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_geterror($identifier): string {}

	/**
	 * すべての操作で現在アクティブなプロトコルを返す
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @return int <p>現在アクティブなプロトコルを返します。結果は <b><code>GNUPG_PROTOCOL_OpenPGP</code></b> あるいは <b><code>GNUPG_PROTOCOL_CMS</code></b> のいずれかとなります。</p>
	 * @link https://php.net/manual/ja/function.gnupg-getprotocol.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_getprotocol($identifier): int {}

	/**
	 * キーをインポートする
	 * <p>キー <code>keydata</code> をインポートし、インポート処理に ついての情報を配列で返します。</p>
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $keydata <p>インポートしたいキーのデータ。</p>
	 * @return array <p>成功した場合、この関数はインポート処理の情報を配列で返します。 失敗した場合、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-import.php
	 * @since PECL gnupg >= 0.3
	 */
	function gnupg_import($identifier, string $keydata): array {}

	/**
	 * 接続を初期化する
	 * @return resource <p>GnuPG 接続リソースを返します。これを他の GnuPG 関数で使用します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-init.php
	 * @since PECL gnupg >= 0.4
	 */
	function gnupg_init() {}

	/**
	 * 指定したパターンに一致するすべてのキーについての情報を配列で返す
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $pattern <p>キーに対してチェックを行いたいパターン。</p>
	 * @return array <p>指定したパターンに一致するすべてのキーについての情報を配列で返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-keyinfo.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_keyinfo($identifier, string $pattern): array {}

	/**
	 * armor 形式を切り替える
	 * <p>armor 形式の出力を切り替えます。</p>
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param int $armor <p>ゼロ以外の整数値をこの関数に渡すと、armor 形式の出力を有効にします (デフォルト)。 0 を渡すと、armor 形式の出力を無効にします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-setarmor.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_setarmor($identifier, int $armor): bool {}

	/**
	 * エラー報告モードを設定する
	 * <p>error_reporting のモードを設定します。</p>
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param int $errormode <p>エラー形式。</p> <p><code>errormode</code> には、 使用するエラー報告形式を表す定数を指定します。 <b><code>GNUPG_ERROR_WARNING</code></b>、 <b><code>GNUPG_ERROR_EXCEPTION</code></b> および <b><code>GNUPG_ERROR_SILENT</code></b> が使用可能です。 デフォルトでは <b><code>GNUPG_ERROR_SILENT</code></b> が使用されます。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.gnupg-seterrormode.php
	 * @since PECL gnupg >= 0.6
	 */
	function gnupg_seterrormode($identifier, int $errormode): void {}

	/**
	 * 署名方式を設定する
	 * <p>署名方式を設定します。</p>
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param int $signmode
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-setsignmode.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_setsignmode($identifier, int $signmode): bool {}

	/**
	 * 指定したテキストに署名する
	 * <p>事前に gnupg_addsignkey で設定したキーを使用して <code>plaintext</code> に署名し、 gnupg_setsignmode の設定に応じて署名済みテキストあるいは署名を返します。</p>
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $plaintext <p>署名したい平文テキスト。</p>
	 * @return string <p>成功した場合、この関数は署名済みテキストあるいは署名を返します。 失敗した場合、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-sign.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_sign($identifier, string $plaintext): string {}

	/**
	 * 署名済みテキストを検証する
	 * <p>指定した <code>signed_text</code> を検証し、署名についての情報を返します。</p>
	 * @param resource $identifier <p><code>gnupg_init()</code> あるいは <b>gnupg</b> のコールで得られた gnupg ID。</p>
	 * @param string $signed_text <p>The signed text.</p>
	 * @param string $signature <p>署名。clearsign で署名されたテキストを検証するには、 signature に <b><code>FALSE</code></b> を設定します。</p>
	 * @param string $plaintext <p>平文テキスト。 このオプションのパラメータを渡すと、 復号されたテキストがそこに保存されます。</p>
	 * @return array <p>成功した場合、この関数は署名についての情報を返します。 失敗した場合、この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.gnupg-verify.php
	 * @since PECL gnupg >= 0.1
	 */
	function gnupg_verify($identifier, string $signed_text, string $signature, string &$plaintext = NULL): array {}

	define('GNUPG_ERROR_EXCEPTION', null);

	define('GNUPG_ERROR_SILENT', null);

	define('GNUPG_ERROR_WARNING', null);

	define('GNUPG_PROTOCOL_CMS', null);

	define('GNUPG_PROTOCOL_OpenPGP', null);

	define('GNUPG_SIG_MODE_CLEAR', null);

	define('GNUPG_SIG_MODE_DETACH', null);

	define('GNUPG_SIG_MODE_NORMAL', null);

	define('GNUPG_SIGSUM_BAD_POLICY', null);

	define('GNUPG_SIGSUM_CRL_MISSING', null);

	define('GNUPG_SIGSUM_CRL_TOO_OLD', null);

	define('GNUPG_SIGSUM_GREEN', null);

	define('GNUPG_SIGSUM_KEY_EXPIRED', null);

	define('GNUPG_SIGSUM_KEY_MISSING', null);

	define('GNUPG_SIGSUM_KEY_REVOKED', null);

	define('GNUPG_SIGSUM_RED', null);

	define('GNUPG_SIGSUM_SIG_EXPIRED', null);

	define('GNUPG_SIGSUM_SYS_ERROR', null);

	define('GNUPG_SIGSUM_VALID', null);

	define('GNUPG_VALIDITY_FULL', null);

	define('GNUPG_VALIDITY_MARGINAL', null);

	define('GNUPG_VALIDITY_NEVER', null);

	define('GNUPG_VALIDITY_ULTIMATE', null);

	define('GNUPG_VALIDITY_UNDEFINED', null);

	define('GNUPG_VALIDITY_UNKNOWN', null);

}
