<?php



namespace {

	/**
	 * 新規に仮想 Web サーバーを作成する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $path
	 * @param string $comment
	 * @param string $server_ip
	 * @param int $port
	 * @param string $host_name
	 * @param int $rights
	 * @param int $start_server
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-add-server.php
	 * @since PECL iisfunc SVN
	 */
	function iis_add_server(string $path, string $comment, string $server_ip, int $port, string $host_name, int $rights, int $start_server): int {}

	/**
	 * ディレクトリのセキュリティを取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-get-dir-security.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_dir_security(int $server_instance, string $virtual_path): int {}

	/**
	 * 指定した拡張子に関して仮想ディレクトリにおけるスクリプトマッピングを取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @param string $script_extension
	 * @return string
	 * @link https://php.net/manual/ja/function.iis-get-script-map.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_script_map(int $server_instance, string $virtual_path, string $script_extension): string {}

	/**
	 * 指定したコメントのインスタンス番号を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $comment
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-get-server-by-comment.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_server_by_comment(string $comment): int {}

	/**
	 * 指定したパスのインスタンス番号を返す
	 * <p>IIS の各仮想サーバーには、インスタンス番号が付けられています。 <b>iis_get_server_by_path()</b> は、ルートディレクトリへの 実際のパスからインスタンス番号を検索します。</p>
	 * @param string $path <p>ルートディレクトリへのパス。</p>
	 * @return int <p>サーバーのインスタンス番号を返します。</p>
	 * @link https://php.net/manual/ja/function.iis-get-server-by-path.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_server_by_path(string $path): int {}

	/**
	 * サーバーの権限を取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-get-server-rights.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_server_rights(int $server_instance, string $virtual_path): int {}

	/**
	 * サービス ID で指定したサービスの状態を取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $service_id
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-get-service-state.php
	 * @since PECL iisfunc SVN
	 */
	function iis_get_service_state(string $service_id): int {}

	/**
	 * サーバーインスタンスで指定した仮想 Web サーバーを削除する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $server_instance
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-remove-server.php
	 * @since PECL iisfunc SVN
	 */
	function iis_remove_server(int $server_instance): int {}

	/**
	 * 仮想ディレクトリでのアプリケーションスコープを作成する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @param string $application_scope
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-set-app-settings.php
	 * @since PECL iisfunc SVN
	 */
	function iis_set_app_settings(int $server_instance, string $virtual_path, string $application_scope): int {}

	/**
	 * ディレクトリのセキュリティを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @param int $directory_flags
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-set-dir-security.php
	 * @since PECL iisfunc SVN
	 */
	function iis_set_dir_security(int $server_instance, string $virtual_path, int $directory_flags): int {}

	/**
	 * 仮想ディレクトリにスクリプトマッピングを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @param string $script_extension
	 * @param string $engine_path
	 * @param int $allow_scripting
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-set-script-map.php
	 * @since PECL iisfunc SVN
	 */
	function iis_set_script_map(int $server_instance, string $virtual_path, string $script_extension, string $engine_path, int $allow_scripting): int {}

	/**
	 * サーバーの権限を設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $server_instance
	 * @param string $virtual_path
	 * @param int $directory_flags
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-set-server-rights.php
	 * @since PECL iisfunc SVN
	 */
	function iis_set_server_rights(int $server_instance, string $virtual_path, int $directory_flags): int {}

	/**
	 * 仮想 Web サーバーを起動する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $server_instance
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-start-server.php
	 * @since PECL iisfunc SVN
	 */
	function iis_start_server(int $server_instance): int {}

	/**
	 * サービス ID で指定したサービスを起動する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $service_id
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-start-service.php
	 * @since PECL iisfunc SVN
	 */
	function iis_start_service(string $service_id): int {}

	/**
	 * 仮想 Web サーバーを停止する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $server_instance
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-stop-server.php
	 * @since PECL iisfunc SVN
	 */
	function iis_stop_server(int $server_instance): int {}

	/**
	 * サービス ID で指定したサービスを停止する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $service_id
	 * @return int
	 * @link https://php.net/manual/ja/function.iis-stop-service.php
	 * @since PECL iisfunc SVN
	 */
	function iis_stop_service(string $service_id): int {}

	define('IIS_ANONYMOUS', null);

	define('IIS_BASIC', null);

	define('IIS_EXECUTE', null);

	define('IIS_NTLM', null);

	define('IIS_PAUSED', null);

	define('IIS_READ', null);

	define('IIS_RUNNING', null);

	define('IIS_SCRIPT', null);

	define('IIS_STARTING', null);

	define('IIS_STOPPED', null);

	define('IIS_WRITE', null);

}
