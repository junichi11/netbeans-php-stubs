<?php



/**
 * @link http://php.net/manual/ja/class.varnishadmin.php
 * @since PECL varnish >= 0.3
 */
class VarnishAdmin {

	/**
	 * VarnishAdmin のコンストラクタ
	 * @param array $args <p>設定用の引数。次のキーが使えます。</p> <pre>VARNISH_CONFIG_IDENT - ローカル varnish インスタンスの ident パス。 VARNISH_CONFIG_HOST - varnish インスタンスの IP アドレス。 VARNISH_CONFIG_PORT - varnish インスタンスのポート。 VARNISH_CONFIG_SECRET - varnish インスタンスの secret。 VARNISH_CONFIG_TIMEOUT - 接続の読み取りタイムアウト。 VARNISH_CONFIG_COMPAT - varnish メジャーバージョンの互換性。</pre>
	 * @return self
	 * @link http://php.net/manual/ja/varnishadmin.construct.php
	 * @since PECL varnish >= 0.3
	 */
	public function __construct(array $args = NULL) {}

	/**
	 * varnish インスタンス上で認証する
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.auth.php
	 * @since PECL varnish >= 0.3
	 */
	public function auth(): bool {}

	/**
	 * VCL の式を使って URL を禁止する
	 * @param string $vcl_regex <p>Varnish VCL の式。varnish の ban コマンドに基づくもの。</p>
	 * @return int <p>varnish のコマンドステータスを返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.ban.php
	 * @since PECL varnish >= 0.3
	 */
	public function ban(string $vcl_regex): int {}

	/**
	 * VCL の式を使って URL を禁止する
	 * @param string $vcl_regex <p>PCRE 互換形式で指定した、URL の正規表現。 varnish の ban.url コマンドに基づくもの。</p>
	 * @return int <p>varnish のコマンドステータスを返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.banurl.php
	 * @since PECL varnish >= 0.3
	 */
	public function banUrl(string $vcl_regex): int {}

	/**
	 * varnish インスタンスのパニックメッセージをクリアする
	 * @return int <p>varnish のコマンドステータスを返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.clearpanic.php
	 * @since PECL varnish >= 0.4
	 */
	public function clearPanic(): int {}

	/**
	 * varnish インスタンスの管理インターフェイスに接続する
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.connect.php
	 * @since PECL varnish >= 0.3
	 */
	public function connect(): bool {}

	/**
	 * varnish インスタンスの管理インターフェイスとの接続を切断する
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.disconnect.php
	 * @since PECL varnish >= 1.0.0
	 */
	public function disconnect(): bool {}

	/**
	 * varnish インスタンスの直近のパニックメッセージを取得する
	 * @return string <p>現在の varnish インスタンスの直近のパニックメッセージを返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.getpanic.php
	 * @since PECL varnish >= 0.4
	 */
	public function getPanic(): string {}

	/**
	 * 現在の varnish インスタンスの設定パラメータを取得する
	 * @return array <p>varnish 設定パラメータの配列を返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.getparams.php
	 * @since PECL varnish >= 0.4
	 */
	public function getParams(): array {}

	/**
	 * varnish のスレーブプロセスが現在実行中かどうかを調べる
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.isrunning.php
	 * @since PECL varnish >= 0.3
	 */
	public function isRunning(): bool {}

	/**
	 * クラスのオプション compat を設定する
	 * @param int $compat <p>Varnish の compat オプション。</p>
	 * @return void
	 * @link http://php.net/manual/ja/varnishadmin.setcompat.php
	 * @since PECL varnish >= 0.9.2
	 */
	public function setCompat(int $compat): void {}

	/**
	 * クラスのオプション host を設定する
	 * @param string $host <p>接続の host パラメータ。</p>
	 * @return void
	 * @link http://php.net/manual/ja/varnishadmin.sethost.php
	 * @since PECL varnish >= 0.8
	 */
	public function setHost(string $host): void {}

	/**
	 * クラスのオプション ident を設定する
	 * @param string $ident <p>接続の ident パラメータ。</p>
	 * @return void
	 * @link http://php.net/manual/ja/varnishadmin.setident.php
	 * @since PECL varnish >= 0.8
	 */
	public function setIdent(string $ident): void {}

	/**
	 * 現在の varnish インスタンスの構成パラメータを設定する
	 * @param string $name <p>Varnish のパラメータ名。</p>
	 * @param string|int $value <p>Varnish のパラメータの値。</p>
	 * @return int <p>varnish のコマンドステータスを返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.setparam.php
	 * @since PECL varnish >= 0.4
	 */
	public function setParam(string $name, $value): int {}

	/**
	 * クラスのオプション port を設定する
	 * @param int $port <p>接続の port パラメータ。</p>
	 * @return void
	 * @link http://php.net/manual/ja/varnishadmin.setport.php
	 * @since PECL varnish >= 0.8
	 */
	public function setPort(int $port): void {}

	/**
	 * クラスのオプション secret を設定する
	 * @param string $secret <p>接続の secret パラメータ。</p>
	 * @return void
	 * @link http://php.net/manual/ja/varnishadmin.setsecret.php
	 * @since PECL varnish >= 0.8
	 */
	public function setSecret(string $secret): void {}

	/**
	 * クラスのオプション timeout を設定する
	 * @param int $timeout <p>接続の timeout パラメータ。</p>
	 * @return void
	 * @link http://php.net/manual/ja/varnishadmin.settimeout.php
	 * @since PECL varnish >= 0.8
	 */
	public function setTimeout(int $timeout): void {}

	/**
	 * varnish ワーカープロセスを開始する
	 * @return int <p>varnish のコマンドステータスを返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.start.php
	 * @since PECL varnish >= 0.3
	 */
	public function start(): int {}

	/**
	 * varnish ワーカープロセスを停止する
	 * @return int <p>varnish のコマンドステータスを返します。</p>
	 * @link http://php.net/manual/ja/varnishadmin.stop.php
	 * @since PECL varnish >= 0.3
	 */
	public function stop(): int {}
}

/**
 * @link http://php.net/manual/ja/class.varnishlog.php
 * @since PECL varnish >= 0.6
 */
class VarnishLog {

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_Debug = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_Error = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_CLI = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_StatSess = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_ReqEnd = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_SessionOpen = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_SessionClose = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_BackendOpen = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_BackendXID = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_BackendReuse = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_BackendClose = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_HttpGarbage = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_Backend = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_Length = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_FetchError = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_RxRequest = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_RxResponse = 16;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_RxStatus = 17;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_RxURL = 18;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_RxProtocol = 19;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_RxHeader = 20;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_TxRequest = 21;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_TxResponse = 22;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_TxStatus = 23;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_TxURL = 24;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_TxProtocol = 25;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_TxHeader = 26;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_ObjRequest = 27;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_ObjResponse = 28;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_ObjStatus = 29;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_ObjURL = 30;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_ObjProtocol = 31;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_ObjHeader = 32;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_LostHeader = 33;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_TTL = 34;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_Fetch_Body = 35;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_VCL_acl = 36;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_VCL_call = 37;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_VCL_trace = 38;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_VCL_return = 39;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_VCL_error = 40;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_ReqStart = 41;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_Hit = 42;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_HitPass = 43;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_ExpBan = 44;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_ExpKill = 45;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_WorkThread = 46;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_ESI_xmlerror = 47;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_Hash = 48;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_Backend_health = 49;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_VCL_Log = 50;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.varnishlog.php
	 */
	const TAG_Gzip = 51;

	/**
	 * Varnishlog のコンストラクタ
	 * @param array $args <p>設定用の引数。次のキーが使えます。</p> <pre>VARNISH_CONFIG_IDENT - ローカル varnish インスタンスの ident パス。</pre>
	 * @return self
	 * @link http://php.net/manual/ja/varnishlog.construct.php
	 * @since PECL varnish >= 0.6
	 */
	public function __construct(array $args = NULL) {}

	/**
	 * ログの次の行を取得する
	 * @return array <p>ログの行のデータを配列で返します。</p>
	 * @link http://php.net/manual/ja/varnishlog.getline.php
	 * @since PECL varnish >= 0.6
	 */
	public function getLine(): array {}

	/**
	 * ログのタグ文字列を、インデックスから取得する
	 * @param int $index <p>ログのタグのインデックス。</p>
	 * @return string <p>ログのタグ名を文字列で返します。</p>
	 * @link http://php.net/manual/ja/varnishlog.gettagname.php
	 * @since PECL varnish >= 0.6
	 */
	public static function getTagName(int $index): string {}
}

/**
 * @link http://php.net/manual/ja/class.varnishstat.php
 * @since PECL varnish >= 0.3
 */
class VarnishStat {

	/**
	 * VarnishStat のコンストラクタ
	 * @param array $args <p>設定用の引数。次のキーが使えます。</p> <pre>VARNISH_CONFIG_IDENT - ローカル varnish インスタンスの ident パス。</pre>
	 * @return self
	 * @link http://php.net/manual/ja/varnishstat.construct.php
	 * @since PECL varnish >= 0.3
	 */
	public function __construct(array $args = NULL) {}

	/**
	 * 現在の varnish インスタンスの統計スナップショットを取得する
	 * @return array <p>varnish 統計のスナップショットを配列で返します。 配列のキーは varnishstat ツールと同じです。</p>
	 * @link http://php.net/manual/ja/varnishstat.getsnapshot.php
	 * @since PECL varnish >= 0.3
	 */
	public function getSnapshot(): array {}
}

define('VARNISH_COMPAT_2', null);

define('VARNISH_COMPAT_3', null);

define('VARNISH_CONFIG_COMPAT', null);

define('VARNISH_CONFIG_HOST', null);

define('VARNISH_CONFIG_IDENT', null);

define('VARNISH_CONFIG_PORT', null);

define('VARNISH_CONFIG_SECRET', null);

define('VARNISH_CONFIG_TIMEOUT', null);

define('VARNISH_STATUS_AUTH', null);

define('VARNISH_STATUS_CANT', null);

define('VARNISH_STATUS_CLOSE', null);

define('VARNISH_STATUS_COMMS', null);

define('VARNISH_STATUS_OK', null);

define('VARNISH_STATUS_PARAM', null);

define('VARNISH_STATUS_SYNTAX', null);

define('VARNISH_STATUS_TOOFEW', null);

define('VARNISH_STATUS_TOOMANY', null);

define('VARNISH_STATUS_UNIMPL', null);

define('VARNISH_STATUS_UNKNOWN', null);

