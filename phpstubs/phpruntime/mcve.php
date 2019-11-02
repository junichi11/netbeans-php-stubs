<?php



namespace {

	/**
	 * トランザクションが完了したかどうかを確かめる
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @return int
	 * @link https://php.net/manual/ja/function.m-checkstatus.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_checkstatus($conn, int $identifier): int {}

	/**
	 * キューの中の認証済み件数を数え、その ID の配列を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $array <p>Its description</p>
	 * @return int <p>What the function returns, first on success, then on failure. See also the &amp;return.success; entity</p>
	 * @link https://php.net/manual/ja/function.m-completeauthorizations.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_completeauthorizations($conn, int &$array): int {}

	/**
	 * MCVE との接続を確立する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.m-connect.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_connect($conn): int {}

	/**
	 * 接続が失敗した理由をテキストで取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.m-connectionerror.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_connectionerror($conn): string {}

	/**
	 * MCVE_CONN 構造体から、指定したトランザクションを削除する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @return bool
	 * @link https://php.net/manual/ja/function.m-deletetrans.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_deletetrans($conn, int $identifier): bool {}

	/**
	 * 接続および MCVE_CONN 構造体を破壊する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @return bool <p><b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.m-destroyconn.php
	 * @see m_initconn()
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_destroyconn($conn): bool {}

	/**
	 * IP/SSL 接続に関連付けられたメモリを開放する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.m-destroyengine.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_destroyengine(): void {}

	/**
	 * カンマ区切りの応答から、カラム名を指定してセルを取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @param string $column
	 * @param int $row
	 * @return string
	 * @link https://php.net/manual/ja/function.m-getcell.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_getcell($conn, int $identifier, string $column, int $row): string {}

	/**
	 * カンマ区切りの応答から、カラム番号を指定してセルを取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @param int $column
	 * @param int $row
	 * @return string
	 * @link https://php.net/manual/ja/function.m-getcellbynum.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_getcellbynum($conn, int $identifier, int $column, int $row): string {}

	/**
	 * MCVE が返すデータを、もとのカンマ区切り形式のままで取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @return string
	 * @link https://php.net/manual/ja/function.m-getcommadelimited.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_getcommadelimited($conn, int $identifier): string {}

	/**
	 * カンマ区切りの応答から、カラム名を取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @param int $column_num
	 * @return string
	 * @link https://php.net/manual/ja/function.m-getheader.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_getheader($conn, int $identifier, int $column_num): string {}

	/**
	 * MCVE_CONN 構造体を作成し、初期化する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return resource <p>MCVE_CONN リソースを返します。</p>
	 * @link https://php.net/manual/ja/function.m-initconn.php
	 * @see m_destroyconn()
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_initconn() {}

	/**
	 * IP/SSL 通信のためのクライアントの準備をする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $location
	 * @return int
	 * @link https://php.net/manual/ja/function.m-initengine.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_initengine(string $location): int {}

	/**
	 * 応答がカンマ区切りかどうかを調べる
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @return int
	 * @link https://php.net/manual/ja/function.m-iscommadelimited.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_iscommadelimited($conn, int $identifier): int {}

	/**
	 * API が MCVE への接続を試みる時間の最大値
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $secs
	 * @return bool
	 * @link https://php.net/manual/ja/function.m-maxconntimeout.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_maxconntimeout($conn, int $secs): bool {}

	/**
	 * MCVE との通信 (データの送受信) を非ブロックモードで行う
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.m-monitor.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_monitor($conn): int {}

	/**
	 * カンマ区切りの応答の中のカラム数を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @return int
	 * @link https://php.net/manual/ja/function.m-numcolumns.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_numcolumns($conn, int $identifier): int {}

	/**
	 * カンマ区切りの応答の中の行数を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @return int
	 * @link https://php.net/manual/ja/function.m-numrows.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_numrows($conn, int $identifier): int {}

	/**
	 * カンマ区切りの応答をパースし、m_getcell などが動作するようにする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @return int
	 * @link https://php.net/manual/ja/function.m-parsecommadelimited.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_parsecommadelimited($conn, int $identifier): int {}

	/**
	 * このトランザクションの応答パラメータとして使用することが可能な キーを表す文字列の配列を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @return array
	 * @link https://php.net/manual/ja/function.m-responsekeys.php
	 * @since PHP 5 >= 5.0.5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_responsekeys($conn, int $identifier): array {}

	/**
	 * カスタム応答パラメータを取得する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @param string $key
	 * @return string
	 * @link https://php.net/manual/ja/function.m-responseparam.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_responseparam($conn, int $identifier, string $key): string {}

	/**
	 * トランザクションが成功したかどうかを確かめる
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @return int
	 * @link https://php.net/manual/ja/function.m-returnstatus.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_returnstatus($conn, int $identifier): int {}

	/**
	 * 接続モードを、ブロックモードあるいは非ブロックモードに設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $tf
	 * @return int
	 * @link https://php.net/manual/ja/function.m-setblocking.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setblocking($conn, int $tf): int {}

	/**
	 * Drop-File への接続方法を設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param string $directory
	 * @return int
	 * @link https://php.net/manual/ja/function.m-setdropfile.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setdropfile($conn, string $directory): int {}

	/**
	 * IP での接続方法を設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param string $host
	 * @param int $port
	 * @return int
	 * @link https://php.net/manual/ja/function.m-setip.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setip($conn, string $host, int $port): int {}

	/**
	 * SSL での接続方法を設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param string $host
	 * @param int $port
	 * @return int
	 * @link https://php.net/manual/ja/function.m-setssl.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setssl($conn, string $host, int $port): int {}

	/**
	 * サーバー証明書を検証するための SSL CA (Certificate Authority) ファイルを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param string $cafile
	 * @return int
	 * @link https://php.net/manual/ja/function.m-setssl-cafile.php
	 * @since PHP 5 >= 5.0.5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setssl_cafile($conn, string $cafile): int {}

	/**
	 * サーバーがクライアント証明書による検証を要求している場合に、証明書のキーファイルを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param string $sslkeyfile
	 * @param string $sslcertfile
	 * @return int
	 * @link https://php.net/manual/ja/function.m-setssl-files.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_setssl_files($conn, string $sslkeyfile, string $sslcertfile): int {}

	/**
	 * (トランザクション単位の) 最大の時間を設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $seconds
	 * @return int
	 * @link https://php.net/manual/ja/function.m-settimeout.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_settimeout($conn, int $seconds): int {}

	/**
	 * SSL クライアント証明書の検証のためのハッシュを作成する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $filename
	 * @return string
	 * @link https://php.net/manual/ja/function.m-sslcert-gen-hash.php
	 * @since PECL mcve >= 5.2.0
	 */
	function m_sslcert_gen_hash(string $filename): string {}

	/**
	 * 送信バッファが空かどうかを確かめる
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.m-transactionssent.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_transactionssent($conn): int {}

	/**
	 * クライアントキューの中のトランザクション数を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.m-transinqueue.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_transinqueue($conn): int {}

	/**
	 * トランザクションにキー/値のペアを追加する。transparam() の代替関数
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @param string $key
	 * @param string $value
	 * @return int
	 * @link https://php.net/manual/ja/function.m-transkeyval.php
	 * @since PHP 5 >= 5.0.5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_transkeyval($conn, int $identifier, string $key, string $value): int {}

	/**
	 * 新しいトランザクションを開始する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.m-transnew.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_transnew($conn): int {}

	/**
	 * トランザクションを終了し、送信する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $identifier
	 * @return int
	 * @link https://php.net/manual/ja/function.m-transsend.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_transsend($conn, int $identifier): int {}

	/**
	 * x マイクロ秒だけ待つ
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $microsecs
	 * @return int
	 * @link https://php.net/manual/ja/function.m-uwait.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_uwait(int $microsecs): int {}

	/**
	 * 指定したトランザクションについて、ID の検証を行うかどうか
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $tf
	 * @return int
	 * @link https://php.net/manual/ja/function.m-validateidentifier.php
	 * @since PHP 5 >= 5.0.5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_validateidentifier($conn, int $tf): int {}

	/**
	 * 接続の検証を行うために PING を行うかどうかを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $tf
	 * @return bool
	 * @link https://php.net/manual/ja/function.m-verifyconnection.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_verifyconnection($conn, int $tf): bool {}

	/**
	 * サーバーの ssl 証明書を検証するかどうかを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $conn <p><code>m_initengine()</code> が返す MCVE_CONN リソース。</p>
	 * @param int $tf
	 * @return bool
	 * @link https://php.net/manual/ja/function.m-verifysslcert.php
	 * @since PHP 4 >= 4.3.9, PHP 5 < 5.1.0, PECL mcve >= 1.0.0
	 */
	function m_verifysslcert($conn, int $tf): bool {}

	define('M_DONE', null);

	define('M_ERROR', null);

	define('M_FAIL', null);

	define('M_PENDING', null);

	define('M_SUCCESS', null);

}
