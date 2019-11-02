<?php



namespace {

	/**
	 * インタプリタの処理を停止し、ソケットからの CR を待つ
	 * <p>スクリプトの実行を停止し、接続しているソケットからの応答を待ち受ける ために使用します。プログラムのステップ実行を行うには、Enter キーを押す (空行を送る) あるいは実行したい PHP コマンドを入力します。</p>
	 * @param int $debug_level <p><i>XXX_TRACE</i> 定数の組み合わせによる整数値。</p> <p><b><code>MEMORY_TRACE</code></b> を用いることは推奨しません。 これは非常に低速で、またあまり正確ではないようだからです。 <b><code>ASSIGNMENT_TRACE</code></b> は、まだ実装されていません。</p> <p>すべての機能 (TIMING, FUNCTIONS, ARGS SUMMARY (strace -c のようなもの)) のトレースを有効にするには、値 99 を指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apd-breakpoint.php
	 * @since PECL apd >= 0.2
	 */
	function apd_breakpoint(int $debug_level): bool {}

	/**
	 * 現在のコールスタックを配列で返す
	 * <p>現在のコールスタックを配列形式で返します。</p>
	 * @return array <p>現在のコールスタックを含む配列を返します。</p>
	 * @link https://php.net/manual/ja/function.apd-callstack.php
	 * @since PECL apd 0.2-0.4
	 */
	function apd_callstack(): array {}

	/**
	 * 警告とコールスタックをスローする
	 * <p>perl の <i>Carp::cluck</i> と同じように動作します。警告とコールバックをスローします。 デフォルトの行区切り文字は "&lt;BR /&gt;\n" です。</p>
	 * @param string $warning <p>スローする警告。</p>
	 * @param string $delimiter <p>区切り文字。デフォルトは <i>&lt;BR /&gt;</i>。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.apd-clunk.php
	 * @see apd_croak()
	 * @since PECL apd 0.2-0.4
	 */
	function apd_clunk(string $warning, string $delimiter = "<BR />"): void {}

	/**
	 * インタプリタを再開する
	 * <p>インタプリタを再開するために、一般的にはソケット経由で送信します。</p>
	 * @param int $debug_level <p><i>XXX_TRACE</i> 定数の組み合わせによる整数値。</p> <p><b><code>MEMORY_TRACE</code></b> を用いることは推奨しません。 これは非常に低速で、またあまり正確ではないようだからです。 <b><code>ASSIGNMENT_TRACE</code></b> は、まだ実装されていません。</p> <p>すべての機能 (TIMING, FUNCTIONS, ARGS SUMMARY (strace -c のようなもの)) のトレースを有効にするには、値 99 を指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apd-continue.php
	 * @since PECL apd >= 0.2
	 */
	function apd_continue(int $debug_level): bool {}

	/**
	 * エラーとコールスタックをスローし、終了する
	 * <p>perl の <i>Carp::croak</i> と同じように動作します。エラーとコールバックをスローし、 終了します。</p>
	 * @param string $warning <p>スローする警告。</p>
	 * @param string $delimiter <p>区切り文字。デフォルトは <i>&lt;BR /&gt;</i>。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.apd-croak.php
	 * @see apd_clunk()
	 * @since PECL apd 0.2-0.4
	 */
	function apd_croak(string $warning, string $delimiter = "<BR />"): void {}

	/**
	 * 現在の関数テーブルを出力する
	 * <p>現在の関数テーブルを出力します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.apd-dump-function-table.php
	 * @since Unknown
	 */
	function apd_dump_function_table(): void {}

	/**
	 * すべての持続的なリソースを配列で返す
	 * <p>すべての持続的なリソースを配列で返します。</p>
	 * @return array <p>現在の持続的なリソースを含む配列を返します。</p>
	 * @link https://php.net/manual/ja/function.apd-dump-persistent-resources.php
	 * @see apd_dump_regular_resources()
	 * @since PECL apd 0.2-0.4
	 */
	function apd_dump_persistent_resources(): array {}

	/**
	 * 現在のすべての一般リソースを配列で返す
	 * <p>現在のすべての一般リソースを配列で返します。</p>
	 * @return array <p>現在の一般リソースを含む配列を返します。</p>
	 * @link https://php.net/manual/ja/function.apd-dump-regular-resources.php
	 * @see apd_dump_persistent_resources()
	 * @since PECL apd 0.2-0.4
	 */
	function apd_dump_regular_resources(): array {}

	/**
	 * デバッグ用ソケットに表示する
	 * <p>実行中のスクリプトに関する情報を、 一般的にはソケット経由でリクエストします。</p>
	 * @param string $output <p>デバッグされた変数。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apd-echo.php
	 * @since PECL apd >= 0.2
	 */
	function apd_echo(string $output): bool {}

	/**
	 * ローカルスコープ内の現在の変数名を配列で取得する
	 * <p>アクティブなスコープ内で定義されているすべての変数名を返します (変数の値ではありません)。</p>
	 * @return array <p>すべての変数を含む多次元配列を返します。</p>
	 * @link https://php.net/manual/ja/function.apd-get-active-symbols.php
	 * @since PECL apd 0.2
	 */
	function apd_get_active_symbols(): array {}

	/**
	 * セッションのデバッグを開始する
	 * <p>ダンプディレクトリの pprof_{process_id} へのデバッグを開始します。</p>
	 * @param string $dump_directory <p>プロファイルのダンプファイルを書き込むディレクトリ。 指定しない場合は、php.ini の設定 <b>apd.dumpdir</b> を使用します。</p>
	 * @param string $fragment
	 * @return string <p>対象となるファイルへのパスを返します。</p>
	 * @link https://php.net/manual/ja/function.apd-set-pprof-trace.php
	 * @see apd_set_session_trace()
	 * @since PECL apd >= 0.2
	 */
	function apd_set_pprof_trace(string $dump_directory = 'ini_get("apd.dumpdir")', string $fragment = "pprof"): string {}

	/**
	 * 現在のデバッグレベルを変更あるいは設定する
	 * <p>アプリケーション内で、場所によってデバッグのレベルを増減する際に使用可能です。</p>
	 * @param int $debug_level <p><i>XXX_TRACE</i> 定数の組み合わせによる整数値。</p> <p><b><code>MEMORY_TRACE</code></b> を用いることは推奨しません。 これは非常に低速で、またあまり正確ではないようだからです。 <b><code>ASSIGNMENT_TRACE</code></b> は、まだ実装されていません。</p> <p>すべての機能 (TIMING, FUNCTIONS, ARGS SUMMARY (strace -c のようなもの)) のトレースを有効にするには、値 99 を指定します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.apd-set-session.php
	 * @since PECL apd 0.2-0.4
	 */
	function apd_set_session(int $debug_level): void {}

	/**
	 * セッションのデバッグを開始する
	 * <p>ダンプディレクトリの apd_dump_{process_id} へのデバッグを開始します。</p>
	 * @param int $debug_level <p><i>XXX_TRACE</i> 定数の組み合わせによる整数値。</p> <p><b><code>MEMORY_TRACE</code></b> を用いることは推奨しません。 これは非常に低速で、またあまり正確ではないようだからです。 <b><code>ASSIGNMENT_TRACE</code></b> は、まだ実装されていません。</p> <p>すべての機能 (TIMING, FUNCTIONS, ARGS SUMMARY (strace -c のようなもの)) のトレースを有効にするには、値 99 を指定します。</p>
	 * @param string $dump_directory <p>プロファイルのダンプファイルを書き込むディレクトリ。 指定しない場合は、php.ini の設定 <i>apd.dumpdir</i> を使用します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.apd-set-session-trace.php
	 * @since PECL apd 0.2-0.4
	 */
	function apd_set_session_trace(int $debug_level, string $dump_directory = 'ini_get("apd.dumpdir")'): void {}

	/**
	 * リモートセッションのデバッグを開始する
	 * <p>指定した <code>tcp_server</code> (<i>tcplisten</i> など) に接続し、 デバッグデータをソケットに送信します。</p>
	 * @param string $tcp_server <p>TCP サーバーの IP あるいは Unix ドメインソケット (ファイルなど)。</p>
	 * @param int $socket_type <p>ファイルベースのソケットなら <b><code>AF_UNIX</code></b>、 標準の tcp/ip なら <b><code>APD_AF_INET</code></b>。</p>
	 * @param int $port <p>任意のポートを使用できますが、できるだけ大きめの数を使用するほうがいいでしょう。 小さい数は他のシステムサービスが使っている可能性があります。</p>
	 * @param int $debug_level <p><i>XXX_TRACE</i> 定数の組み合わせによる整数値。</p> <p><b><code>MEMORY_TRACE</code></b> を用いることは推奨しません。 これは非常に低速で、またあまり正確ではないようだからです。 <b><code>ASSIGNMENT_TRACE</code></b> は、まだ実装されていません。</p> <p>すべての機能 (TIMING, FUNCTIONS, ARGS SUMMARY (strace -c のようなもの)) のトレースを有効にするには、値 99 を指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apd-set-session-trace-socket.php
	 * @since PECL apd >= 0.2
	 */
	function apd_set_session_trace_socket(string $tcp_server, int $socket_type, int $port, int $debug_level): bool {}

	/**
	 * 組み込みの関数を上書きする
	 * <p>シンボルテーブルを書き換えることで、組み込みの関数を上書きします</p>
	 * @param string $function_name <p>上書きする関数。</p>
	 * @param string $function_args <p>関数への引数をカンマ区切りの文字列で指定します。</p> <p>通常は、このパラメータだけでなく <code>function_code</code> パラメータも (シングルクォート区切りの文字列で) 指定することでしょう。シングルクォートで囲んだ文字列を使用する理由は、 変数名がパースされないようにするためです。 ダブルクォートを使用するなら、変数名をエスケープして \$your_var のようにしなければなりません。</p>
	 * @param string $function_code <p>関数の新しいコード。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.override-function.php
	 * @since PECL apd >= 0.2
	 */
	function override_function(string $function_name, string $function_args, string $function_code): bool {}

	/**
	 * グローバルの関数テーブルで関数名を変更する
	 * <p>グローバルの関数テーブルで関数名を変更します。 一時的に組み込み関数を上書きする際に有用です。</p>
	 * @param string $original_name <p>もとの関数名。</p>
	 * @param string $new_name <p>関数 <code>original_name</code> の新しい名前。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.rename-function.php
	 * @since PECL apd >= 0.2
	 */
	function rename_function(string $original_name, string $new_name): bool {}

	/**
	 * 例: <i>1.0.2-dev</i>
	 */
	define('APD_VERSION', null);

	/**
	 * 2
	 */
	define('ARGS_TRACE', null);

	/**
	 * 4
	 */
	define('ASSIGNMENT_TRACE', null);

	/**
	 * 128
	 */
	define('ERROR_TRACE', null);

	/**
	 * 1
	 */
	define('FUNCTION_TRACE', null);

	/**
	 * 16
	 */
	define('MEMORY_TRACE', null);

	/**
	 * 256
	 */
	define('PROF_TRACE', null);

	/**
	 * 8
	 */
	define('STATEMENT_TRACE', null);

	/**
	 * 64
	 */
	define('SUMMARY_TRACE', null);

	/**
	 * 32
	 */
	define('TIMING_TRACE', null);

}
