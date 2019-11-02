<?php



namespace {

	/**
	 * プリンシパルのパスワードを変更する
	 * <p><b>kadm5_chpass_principal()</b> は、 <code>principal</code> の新しいパスワードを <code>password</code> に設定します。</p>
	 * @param resource $handle <p>KADM5 ハンドル。</p>
	 * @param string $principal <p>プリンシパル。</p>
	 * @param string $password <p>新しいパスワード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.kadm5-chpass-principal.php
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_chpass_principal($handle, string $principal, string $password): bool {}

	/**
	 * 指定したパラメータで、kerberos のプリンシパルを作成する
	 * <p>指定した <code>password</code> で <code>principal</code> を作成します。</p>
	 * @param resource $handle <p>KADM5 ハンドル。</p>
	 * @param string $principal <p>プリンシパル。</p>
	 * @param string $password <p><code>password</code> を指定しなかったり <b><code>NULL</code></b> を指定した場合は、ランダムなキーが生成されます。</p>
	 * @param array $options <p>配列 <code>options</code> にオプションのパラメータを 指定することができます。指定可能なオプションは以下のとおりです。 <b><code>KADM5_PRINC_EXPIRE_TIME</code></b>, <b><code>KADM5_PW_EXPIRATION</code></b>, <b><code>KADM5_ATTRIBUTES</code></b>, <b><code>KADM5_MAX_LIFE</code></b>, <b><code>KADM5_KVNO</code></b>, <b><code>KADM5_POLICY</code></b>, <b><code>KADM5_CLEARPOLICY</code></b>, <b><code>KADM5_MAX_RLIFE</code></b>.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.kadm5-create-principal.php
	 * @see kadm5_modify_principal(), kadm5_delete_principal()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_create_principal($handle, string $principal, string $password = NULL, array $options = NULL): bool {}

	/**
	 * kerberos プリンシパルを削除する
	 * <p>Kerberos データベースから <code>principal</code> を削除します。</p>
	 * @param resource $handle <p>KADM5 ハンドル。</p>
	 * @param string $principal <p>削除するプリンシパル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.kadm5-delete-principal.php
	 * @see kadm5_modify_principal(), kadm5_create_principal()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_delete_principal($handle, string $principal): bool {}

	/**
	 * 管理サーバーへの接続を閉じ、関連するすべてのリソースを開放する
	 * <p>管理サーバーへの接続を閉じ、関連するすべてのリソースを開放します。</p>
	 * @param resource $handle <p>KADM5 ハンドル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.kadm5-destroy.php
	 * @see kadm5_init_with_password()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_destroy($handle): bool {}

	/**
	 * Kerberos データベースに対するすべての変更を取り消す
	 * <p>Kerberos データベースに対するすべての変更を取り消し、 Kerberos 管理サーバーとの接続はオープンしたままにします。</p>
	 * @param resource $handle <p>KADM5 ハンドル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.kadm5-flush.php
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_flush($handle): bool {}

	/**
	 * Kerberos データベースから、すべてのポリシーを取得する
	 * <p>ポリシー名を含む配列を取得します。</p>
	 * @param resource $handle <p>KADM5 ハンドル。</p>
	 * @return array <p>成功した場合はポリシーの配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.kadm5-get-policies.php
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_get_policies($handle): array {}

	/**
	 * Kerberos データベースから、プリンシパルのエントリを取得する
	 * <p>Kerberos データベースから、プリンシパルのエントリを取得します。</p>
	 * @param resource $handle <p>KADM5 ハンドル。</p>
	 * @param string $principal <p>プリンシパル。</p>
	 * @return array <p>成功した場合は、以下のキーを含む連想配列を返します。 KADM5_PRINCIPAL、KADM5_PRINC_EXPIRE_TIME、 KADM5_PW_EXPIRATION、KADM5_ATTRIBUTES、KADM5_MAX_LIFE、KADM5_MOD_NAME、 KADM5_MOD_TIME、KADM5_KVNO、KADM5_POLICY、KADM5_MAX_RLIFE、 KADM5_LAST_SUCCESS、KADM5_LAST_FAILED、KADM5_FAIL_AUTH_COUNT 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.kadm5-get-principal.php
	 * @see kadm5_get_principals()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_get_principal($handle, string $principal): array {}

	/**
	 * Kerberos データベースから、すべてのプリンシパルを取得する
	 * <p><b>kadm5_get_principals()</b> は、プリンシパルの名前を含む 配列を返します。</p>
	 * @param resource $handle <p>KADM5 ハンドル。</p>
	 * @return array <p>成功した場合はプリンシパルの配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.kadm5-get-principals.php
	 * @see kadm5_get_principal()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_get_principals($handle): array {}

	/**
	 * KADM5 ライブラリへの接続をオープンし、必要なステータス情報を初期化する
	 * <p><code>principal</code> および指定した <code>password</code> を使用して KADM5 ライブラリとの接続をオープンし、 <code>admin_server</code> から証明書を取得します。</p>
	 * @param string $admin_server <p>サーバー。</p>
	 * @param string $realm <p>この接続の認証領域を定義します。</p>
	 * @param string $principal <p>プリンシパル。</p>
	 * @param string $password <p><code>password</code> を省略したり <b><code>NULL</code></b> を指定したりすると、 ランダムなキーを生成します。</p>
	 * @return resource <p>成功した場合は KADM5 ハンドル、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.kadm5-init-with-password.php
	 * @see kadm5_destroy()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_init_with_password(string $admin_server, string $realm, string $principal, string $password) {}

	/**
	 * kerberos プリンシパルを、指定したパラメータで変更する
	 * <p>指定した <code>options</code> に基づいて <code>principal</code> を変更します。</p>
	 * @param resource $handle <p>KADM5 ハンドル。</p>
	 * @param string $principal <p>プリンシパル。</p>
	 * @param array $options <p>オプションのパラメータを、配列 <code>options</code> で指定することができます。指定できるオプションは以下のとおりです。 <b><code>KADM5_PRINC_EXPIRE_TIME</code></b>, <b><code>KADM5_PW_EXPIRATION</code></b>, <b><code>KADM5_ATTRIBUTES</code></b>, <b><code>KADM5_MAX_LIFE</code></b>, <b><code>KADM5_KVNO</code></b>, <b><code>KADM5_POLICY</code></b>, <b><code>KADM5_CLEARPOLICY</code></b>, <b><code>KADM5_MAX_RLIFE</code></b>. <b><code>KADM5_FAIL_AUTH_COUNT</code></b>.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.kadm5-modify-principal.php
	 * @see kadm5_create_principal(), kadm5_delete_principal()
	 * @since PECL kadm5 >= 0.2.3
	 */
	function kadm5_modify_principal($handle, string $principal, array $options): bool {}

}
