<?php



namespace {

	/**
	 * エラーカウントを加算し、直近のエラーメッセージを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $error_level
	 * @param string $error_message
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-pgsql-add-error.php
	 * @see session_pgsql_get_error()
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_add_error(int $error_level, string $error_message = NULL): bool {}

	/**
	 * Returns number of errors and last error message
	 * <p>Get the number of errors and optional the error messages.</p>
	 * @param bool $with_error_message <p>Set to <b><code>TRUE</code></b> the literal error message for each error is also returned.</p>
	 * @return array <p>The number of errors are returned as <code>array</code>.</p>
	 * @link https://php.net/manual/ja/function.session-pgsql-get-error.php
	 * @see session_pgsql_add_error()
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_get_error(bool $with_error_message = FALSE): array {}

	/**
	 * カスタムフィールドの値を取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.session-pgsql-get-field.php
	 * @see session_pgsql_set_field()
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_get_field(): string {}

	/**
	 * セッションデータベースサーバーとの接続をリセットする
	 * <p>セッションデータベースサーバーとの接続をリセットします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-pgsql-reset.php
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_reset(): bool {}

	/**
	 * カスタムフィールドの値を設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $value
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.session-pgsql-set-field.php
	 * @see session_pgsql_get_field()
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_set_field(string $value): bool {}

	/**
	 * 現在の保存ハンドラの状態を得る
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array
	 * @link https://php.net/manual/ja/function.session-pgsql-status.php
	 * @since PECL session_pgsql SVN
	 */
	function session_pgsql_status(): array {}

}
