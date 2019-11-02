<?php



namespace {

	/**
	 * HTTP リクエストヘッダを全て取得する
	 * <p><b>nsapi_request_headers()</b> は、カレントの リクエストの HTTP ヘッダを連想配列で返します。 この関数は、PHP を NSAPI モジュールとして 実行している場合にのみサポートされます。</p><p><b>注意</b>:</p><p>NSAPI モジュールを使用している場合、<code>getallheaders()</code> は <b>nsapi_request_headers()</b> へのエイリアスとなります。</p><p><b>注意</b>:</p><p>$_SERVER スーパーグローバル変数を使うことによって Common CGI 変数を取得することも可能です。この変数は PHP を NSAPI モジュールとして実行しているか どうかにかかわらず利用できます。</p>
	 * @return array <p>HTTP ヘッダを連想配列で返します。</p>
	 * @link https://php.net/manual/ja/function.nsapi-request-headers.php
	 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
	 */
	function nsapi_request_headers(): array {}

	/**
	 * すべての HTTP レスポンスヘッダを取得する
	 * <p>Gets all the NSAPI response headers.</p>
	 * @return array <p>すべての NSAPI レスポンスヘッダの連想配列を返します。</p>
	 * @link https://php.net/manual/ja/function.nsapi-response-headers.php
	 * @see nsapi_request_headers(), headers_sent()
	 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
	 */
	function nsapi_response_headers(): array {}

	/**
	 * NSAPI サブリクエストを発行する
	 * <p><b>nsapi_virtual()</b> は NSAPI 特有の関数です。 SSI (.shtml ファイル) における <i>&lt;!--#include virtual...--&gt;</i> と等価で、NSAPI サブリクエストを実行します。 CGI スクリプトや .shtmlファイル、 あるいはその他ウェブサーバー上でパースするものを include するのに有用でしょう。</p><p>サブリクエストを実行するには、全てのバッファリングを中断し ブラウザにフラッシュする必要があります。 ペンディング状態のヘッダも送出する必要があります。</p><p>この関数を使って他の PHP スクリプトに再帰的なリクエストをすることはできません。 PHP スクリプトをインクルードしたい場合には、<code>include</code> または <code>require</code> を使用してください。</p><p><b>注意</b>:</p><p>この関数は、Netscape/iPlanet/Sun ウェブサーバーのドキュメント化されていない機構に依存してます。 この関数が有効かどうか確かめるには <code>phpinfo()</code> を使用してください。Unix 環境では常に作動するでしょう。Windows 環境では、 ns-httpdXX.dll ファイルの名称に依存します。</p><p>もしこの問題に遭遇した場合には NSAPI セクションのサブリクエスト （UNIX、Windows） の項をご覧ください。</p>
	 * @param string $uri <p>スクリプトの URI 。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.nsapi-virtual.php
	 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
	 */
	function nsapi_virtual(string $uri): bool {}

}
