<?php



namespace {

	/**
	 * このリクエストの後にApacheプロセスを終了する
	 * <p><b>apache_child_terminate()</b> は、カレントのPHPリク エストを実行しているApacheプロセスをリクエスト終了時点で終了しま す。この関数は、メモリ消費量が大きなスクリプトを実行した後プロセ スを使用するために使用することが可能です。これは、メモリは通常内 部的にのみ解放され、オペレーティングシステムに戻されないためです。</p>
	 * @return bool <p>もし PHP が Apache 1 モジュールとして実行している場合、<b><code>TRUE</code></b> を返します。 この Apache バージョンはマルチスレッドバージョンではなく、 child_terminate PHP ディレクティブは有効です (デフォルトは無効) 。 もしこれらの条件に適合しない場合 <b><code>FALSE</code></b> が返され、エラーレベル <b><code>E_WARNING</code></b> が発生します。</p>
	 * @link https://php.net/manual/ja/function.apache-child-terminate.php
	 * @see exit()
	 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
	 */
	function apache_child_terminate(): bool {}

	/**
	 * ロードされた Apache モジュールのリストを取得する
	 * <p>ロードされた Apache モジュールのリストを取得します。</p>
	 * @return array <p>ロードされた Apache モジュールの配列 <code>array</code> を返します。</p>
	 * @link https://php.net/manual/ja/function.apache-get-modules.php
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	function apache_get_modules(): array {}

	/**
	 * Apache のバージョンを取得する
	 * <p>Apache のバージョンを取得します。</p>
	 * @return string <p>成功時は Apache のバージョン、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apache-get-version.php
	 * @see phpinfo()
	 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
	 */
	function apache_get_version(): string {}

	/**
	 * Apache の subprocess_env 変数を取得する
	 * <p><code>variable</code> で指定された Apache 環境変数を取得します。</p><p>この関数は Apache 2 を必要とします。それ以外では定義されていません。</p>
	 * @param string $variable <p>Apache の環境変数を指定します。</p>
	 * @param bool $walk_to_top <p>全ての Apache レイヤについてのトップレベル変数を取得するかどうか を指定します。</p>
	 * @return string <p>成功時は Apache 環境変数の値、失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apache-getenv.php
	 * @see apache_setenv(), getenv()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function apache_getenv(string $variable, bool $walk_to_top = FALSE): string {}

	/**
	 * リクエストの一部を指定したURIに対して行い、全ての情報を返す
	 * <p>この関数は、URIにリクエストの一部を行います。このリクエストは指定した リソースに関する全ての重要な情報を得るのに十分なものです。</p><p>この関数は、 PHP が apache モジュールあるいは Netscape/iPlanet/SunONE ウェブサーバーの NSAPI サーバーモジュール としてインストールされた場合のみサポートされます。</p>
	 * @param string $filename <p>リクエストされているファイル名 (URI)。</p>
	 * @return object <p>URI に関する情報のオブジェクトです。返される <code>object</code> のプロパティは次のようなものです。</p><ul> <li>status</li> <li>the_request</li> <li>status_line</li> <li>method</li> <li>content_type</li> <li>handler</li> <li>uri</li> <li>filename</li> <li>path_info</li> <li>args</li> <li>boundary</li> <li>no_cache</li> <li>no_local_copy</li> <li>allowed</li> <li>send_bodyct</li> <li>bytes_sent</li> <li>byterange</li> <li>clength</li> <li>unparsed_uri</li> <li>mtime</li> <li>request_time</li> </ul>
	 * @link https://php.net/manual/ja/function.apache-lookup-uri.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function apache_lookup_uri(string $filename): object {}

	/**
	 * Apacheリクエスト記号(note)を取得/設定する
	 * <p>この関数は、Apache の <i>table_get</i> および <i>table_set</i> のラッパーです。 リクエスト中に存在する note のテーブルを編集します。 このテーブルは、Apache モジュール間の通信に用いるものです。</p><p><b>apache_note()</b> の主な使用法は、 同一リクエスト内でのモジュール間の情報のやりとりです。</p>
	 * @param string $note_name <p>記号の名前</p>
	 * @param string $note_value <p>記号の値</p>
	 * @return string <p>引数が1つだけ指定されてコールされた場合、 現在の記号の値<i>note_name</i>が返されます。 引数が2つ指定されてコールされた場合、記号<i>note_name</i> の値を<i>note_value</i>にセットし、前の記号 <i>note_name</i>の値を返します。 もし記号が処理できない場合、<b><code>FALSE</code></b> が返されます。</p>
	 * @link https://php.net/manual/ja/function.apache-note.php
	 * @see virtual()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function apache_note(string $note_name, string $note_value = ""): string {}

	/**
	 * すべての HTTP リクエストヘッダを取得する
	 * <p>現在のリクエストにおけるすべての HTTP リクエストヘッダを取得します。</p>
	 * @return array <p>現在のリクエストにおけるすべての HTTP ヘッダの連想配列、 あるいは失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apache-request-headers.php
	 * @see apache_response_headers()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function apache_request_headers(): array {}

	/**
	 * Apache の書き込みタイマーをリセットする
	 * <p><b>apache_reset_timeout()</b> は Apache の書き込みタイマーをリセットします。デフォルトは 300 秒です。 <i>set_time_limit(0); ignore_user_abort(true)</i> と定期的な <b>apache_reset_timeout()</b> をコールすることで、 理論的に Apache を永遠に実行することができます。</p><p>この関数は Apache 1 を必要とします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apache-reset-timeout.php
	 * @see set_time_limit(), ignore_user_abort()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function apache_reset_timeout(): bool {}

	/**
	 * HTTPレスポンスヘッダを全て取得する
	 * <p>全てのApacheレスポンスヘッダを配列として取得します。</p>
	 * @return array <p>全てのApacheレスポンスヘッダの配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apache-response-headers.php
	 * @see apache_request_headers(), headers_sent(), headers_list()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function apache_response_headers(): array {}

	/**
	 * Apacheサブプロセスの環境変数を設定する
	 * <p><b>apache_setenv()</b> は <code>variable</code> で指定された Apache 環境変数の値を設定します。</p><p><b>注意</b>:</p><p>Apache 環境変数を設定しても、対応する $_SERVER の値は変更されません。</p>
	 * @param string $variable <p>設定する環境変数</p>
	 * @param string $value <p><code>variable</code> の新しい値</p>
	 * @param bool $walk_to_top <p>全ての Apache レイヤに対して有効なトップレベルの変数を設定するかどうか</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apache-setenv.php
	 * @see apache_getenv()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function apache_setenv(string $variable, string $value, bool $walk_to_top = FALSE): bool {}

	/**
	 * 全てのHTTPリクエストヘッダを取得する
	 * <p>すべての HTTP ヘッダを現在のリクエストから取得します。</p><p>この関数は、 <code>apache_request_headers()</code>のエイリアスです。 この関数は、カレントのリクエストにおける全てのHTTPヘッダーを有する 連想配列を返します。この関数の動作に関する詳細については、 <code>apache_request_headers()</code>のドキュメントを参照して ください。</p>
	 * @return array <p>全てのHTTPリクエストヘッダの連想配列、もしくは失敗時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.getallheaders.php
	 * @see apache_response_headers()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function getallheaders(): array {}

	/**
	 * Apache サブリクエストを実行する
	 * <p><b>virtual()</b> は、<i>mod_include</i> の <i>&lt;!--#include virtual...--&gt;</i> と似ている Apache 用関数です。 この関数は、Apache サブリクエストを実行します。 CGI スクリプトまたは .shtml ファイル、Apache を通して解釈を行う 他のものがある場合にこの関数は有用です。 CGI スクリプトの場合、そのスクリプトは、有効な CGI ヘッダを生成する 必要があることに注意してください。 最低でも、<i>Content-Type</i> ヘッダを生成する必要があります。</p><p>サブリクエストを実行するには、全てのバッファを終了、ブラウザへフラッシュし、 待機状態のヘッダも送信しておきます。</p><p>この関数は、 PHP が apache モジュールあるいは Netscape/iPlanet/SunONE ウェブサーバーの NSAPI サーバーモジュール としてインストールされた場合のみサポートされます。</p>
	 * @param string $filename <p>virtual コマンドが実行されるファイル</p>
	 * @return bool <p>成功時は virtual コマンドの実行、失敗時は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.virtual.php
	 * @see apache_note()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function virtual(string $filename): bool {}

}
