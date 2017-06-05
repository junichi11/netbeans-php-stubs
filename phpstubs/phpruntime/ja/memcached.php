<?php

// Start of memcached v.3.0.0b1

/**
 * memcached サーバー群への接続を表します。
 * @link http://php.net/manual/ja/class.memcached.php
 */
class Memcached  {
	const LIBMEMCACHED_VERSION_HEX = 16777240;

	/**
	 * <p>ペイロードの圧縮を有効あるいは無効にします。有効にすると、
	 * 有効にすると、一定の閾値 (現在は 100 バイト) を超える長さのアイテムは
	 * 格納時に圧縮され、取得時に伸長されます。この操作は透過的に行われます。
	 * </p>
	 * <p>型: boolean、デフォルト: <b>TRUE</b></p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_COMPRESSION = -1001;
	const OPT_COMPRESSION_TYPE = -1004;

	/**
	 * <p>これを使うと、アイテムのキーに「ドメイン」を作成できます。
	 * ここで指定した値がキーの名前の先頭に付きます。
	 * 128 文字より長くはできず、
	 * ここで指定した値の分だけキーに指定できる長さが小さくなります。
	 * プレフィックスが付くのはアイテムのキーだけであり、
	 * サーバーのキーには付きません。</p>
	 * <p>型: string、デフォルト: ""</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_PREFIX_KEY = -1002;

	/**
	 * <p>
	 * 非スカラ値のシリアライズに使うシリアライザを指定します。
	 * 有効なシリアライザは <b>Memcached::SERIALIZER_PHP</b>
	 * あるいは <b>Memcached::SERIALIZER_IGBINARY</b> です。
	 * 後者のシリアライザをサポートするのは memcached の configure 時に
	 * --enable-memcached-igbinary オプションを指定して
	 * igbinary 拡張を読み込んだときだけです。
	 * </p>
	 * <p>型: integer、デフォルト: <b>Memcached::SERIALIZER_PHP</b></p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_SERIALIZER = -1003;
	const OPT_USER_FLAGS = -1006;
	const OPT_STORE_RETRY_COUNT = -1005;

	/**
	 * <p>igbqinary シリアライザのサポートが有効かどうかを示します。</p>
	 * <p>型: boolean</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const HAVE_IGBINARY = 0;

	/**
	 * <p>JSON シリアライザのサポートが有効かどうかを示します。</p>
	 * <p>型: boolean</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const HAVE_JSON = 0;
	const HAVE_MSGPACK = 0;
	const HAVE_SESSION = 1;
	const HAVE_SASL = 0;

	/**
	 * <p>アイテムのキーに使うハッシュアルゴリズムを指定します。
	 * 有効な値は、定数 <b>Memcached::HASH_*</b> のいずれかです。
	 * どのハッシュアルゴリズムにもそれぞれ利点や欠点があります。
	 * よくわからない場合やあまり難しく考えたくない場合はデフォルトで進めましょう。
	 * </p>
	 * <p>型: integer、デフォルト: <b>Memcached::HASH_DEFAULT</b></p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_HASH = 2;

	/**
	 * <p>デフォルトのハッシュアルゴリズム (Jenkins one-at-a-time)。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const HASH_DEFAULT = 0;

	/**
	 * <p>MD5 ハッシュアルゴリズム。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const HASH_MD5 = 1;

	/**
	 * <p>CRC ハッシュアルゴリズム。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const HASH_CRC = 2;

	/**
	 * <p>FNV1_64 ハッシュアルゴリズム。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const HASH_FNV1_64 = 3;

	/**
	 * <p>FNV1_64A ハッシュアルゴリズム。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const HASH_FNV1A_64 = 4;

	/**
	 * <p>FNV1_32 ハッシュアルゴリズム。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const HASH_FNV1_32 = 5;

	/**
	 * <p>FNV1_32A ハッシュアルゴリズム。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const HASH_FNV1A_32 = 6;

	/**
	 * <p>Hsieh ハッシュアルゴリズム。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const HASH_HSIEH = 7;

	/**
	 * <p>Murmur ハッシュアルゴリズム。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const HASH_MURMUR = 8;

	/**
	 * <p>アイテムのキーをサーバーに振り分ける方式を指定します。
	 * 現在サポートしている方式は、モジュロとコンシステント・ハッシュの二種類です。
	 * コンシステント・ハッシュのほうがよりうまく分散させられ、
	 * サーバーをクラスタに追加するときにもキャッシュのロスを最小限に抑えられます。</p>
	 * <p>型: integer、デフォルト: <b>Memcached::DISTRIBUTION_MODULA</b></p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_DISTRIBUTION = 9;

	/**
	 * <p>モジュロベースのキー分散アルゴリズム。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const DISTRIBUTION_MODULA = 0;

	/**
	 * <p>コンシステント・ハッシュを使ったキー分散アルゴリズム (libketama を利用)。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const DISTRIBUTION_CONSISTENT = 1;
	const DISTRIBUTION_VIRTUAL_BUCKET = 6;

	/**
	 * <p>libketama 風の挙動との互換性を有効あるいは無効にします。
	 * 有効にすると、アイテムのキーのハッシュアルゴリズムは MD5、
	 * そして分散方式は重み付きコンシステント・ハッシュになります。
	 * これを使うと、他の libketama ベースのクライアント (Python や Ruby など)
	 * を同じサーバー設定で使え、キーも透過的にアクセスできるようになるので有用です。
	 * </p>
	 * <p>
	 * コンシステント・ハッシュを使うときは、このオプションを有効にしておくことを強く推奨します。
	 * 将来のリリースでは、これはデフォルトで有効になる予定です。
	 * </p>
	 * <p>型: boolean、デフォルト: <b>FALSE</b></p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_LIBKETAMA_COMPATIBLE = 16;
	const OPT_LIBKETAMA_HASH = 17;
	const OPT_TCP_KEEPALIVE = 32;

	/**
	 * <p>バッファ入出力を有効あるいは無効にします。
	 * バッファ入出力を有効にすると、ストレージへのコマンドを送信する代わりに
	 * 「バッファ」に向けるようになります。
	 * データを取得するアクションを実行すると、このバッファをリモート接続に送信します。
	 * 接続を終了したり閉じたりしたときも、バッファに入ったデータをリモート接続に送信します。</p>
	 * <p>型: boolean、デフォルト: <b>FALSE</b></p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_BUFFER_WRITES = 10;

	/**
	 * <p>バイナリプロトコルを使えるようにします。
	 * 既に開いている接続ではこのオプションを切り替えられないことに注意しましょう。</p>
	 * <p>型: boolean、デフォルト: <b>FALSE</b></p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_BINARY_PROTOCOL = 18;

	/**
	 * <p>非同期入出力を有効あるいは無効にします。
	 * これは、ストレージ関数で使える転送の中でも最も高速なものです。</p>
	 * <p>型: boolean、デフォルト: <b>FALSE</b></p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_NO_BLOCK = 0;

	/**
	 * <p>ソケット接続用のno-delay機能
	 * (環境によってはそのほうが高速化する) を有効あるいは無効にします。</p>
	 * <p>型: boolean、デフォルト: <b>FALSE</b></p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_TCP_NODELAY = 1;

	/**
	 * <p>バッファに送信するソケットの最大のバイト数。</p>
	 * <p>型: integer、デフォルト: プラットフォームやカーネルの設定によって異なる</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_SOCKET_SEND_SIZE = 4;

	/**
	 * <p>ソケットの受信バッファの最大のバイト数。</p>
	 * <p>The maximum socket receive buffer in bytes.</p>
	 * <p>型: integer、デフォルト: プラットフォームやカーネルの設定によって異なる</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_SOCKET_RECV_SIZE = 5;

	/**
	 * <p>非ブロックモードの場合、ここにはソケット接続のタイムアウト値をミリ秒単位で指定します。</p>
	 * <p>型: integer、デフォルト: 1000</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_CONNECT_TIMEOUT = 14;

	/**
	 * <p>接続に失敗したときに、どれだけ失敗するまで接続を再試行するかどうかを、秒数で表す。</p>
	 * <p>型: integer、デフォルト: 0</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_RETRY_TIMEOUT = 15;
	const OPT_DEAD_TIMEOUT = 36;

	/**
	 * <p>ソケットの送信タイムアウトをマイクロ秒で指定します。
	 * 非ブロックモードの入出力を使えない場合でも、
	 * これを使ってデータ送信のタイムアウトを指定できます。</p>
	 * <p>型: integer、デフォルト: 0</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_SEND_TIMEOUT = 19;

	/**
	 * <p>ソケットの読み込みタイムアウトをマイクロ秒で指定します。
	 * 非ブロックモードの入出力を使えない場合でも、
	 * これを使ってデータ読み込みのタイムアウトを指定できます。</p>
	 * <p>型: integer、デフォルト: 0</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_RECV_TIMEOUT = 20;

	/**
	 * <p>接続をポーリングする際のタイムアウト時間をミリ秒単位で指定します。</p>
	 * <p>型: integer、デフォルト: 1000</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_POLL_TIMEOUT = 8;

	/**
	 * <p>DNS ルックアップのキャッシュを有効あるいは無効にします。</p>
	 * <p>型: boolean、デフォルト: <b>FALSE</b></p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_CACHE_LOOKUPS = 6;

	/**
	 * <p>サーバーへの接続の最大試行回数を指定します。
	 * 指定した回数だけ接続の失敗が続くと、サーバーが削除されます。</p>
	 * <p>型: integer、デフォルト: 0</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const OPT_SERVER_FAILURE_LIMIT = 21;
	const OPT_AUTO_EJECT_HOSTS = 28;
	const OPT_HASH_WITH_PREFIX_KEY = 25;
	const OPT_NOREPLY = 26;
	const OPT_SORT_HOSTS = 12;
	const OPT_VERIFY_KEY = 13;
	const OPT_USE_UDP = 27;
	const OPT_NUMBER_OF_REPLICAS = 29;
	const OPT_RANDOMIZE_REPLICA_READ = 30;
	const OPT_REMOVE_FAILED_SERVERS = 35;
	const OPT_SERVER_TIMEOUT_LIMIT = 37;

	/**
	 * <p>実行しようとした操作が成功したことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_SUCCESS = 0;

	/**
	 * <p>実行しようとした操作が何らかの点で失敗したことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_FAILURE = 1;

	/**
	 * <p>DNSの名前解決が失敗したことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_HOST_LOOKUP_FAILURE = 2;

	/**
	 * <p>ネットワーク経由でのデータの読み取りに失敗したことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_UNKNOWN_READ_FAILURE = 7;

	/**
	 * <p>memcached プロトコル内で不正なコマンドが実行されたことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_PROTOCOL_ERROR = 8;

	/**
	 * <p>クライアント側でエラーが起きたことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_CLIENT_ERROR = 9;

	/**
	 * <p>サーバー側でエラーが起きたことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_SERVER_ERROR = 10;

	/**
	 * <p>ネットワーク経由でのデータの書き込みに失敗したことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_WRITE_FAILURE = 5;

	/**
	 * <p>比較と交換に失敗したことを示します。格納しようとしたアイテムは、
	 * 最後に取得したあとで変更されています。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_DATA_EXISTS = 12;

	/**
	 * <p>アイテムが格納されなかったが、その原因はエラーではないということを示します。
	 * これは通常、"add" や "replace" コマンドの要件を満たさなかったか
	 * あるいはアイテムが削除キューに入っていることを意味します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_NOTSTORED = 14;

	/**
	 * <p>このキーのアイテムが ("get" や "cas"
	 * の操作で) 見つからなかったことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_NOTFOUND = 16;

	/**
	 * <p>ネットワーク経由でのデータの読み取りが一部失敗したことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_PARTIAL_READ = 18;

	/**
	 * <p>multi-get を実行中にエラーが発生したことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_SOME_ERRORS = 19;

	/**
	 * <p>サーバーリストが空であることを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_NO_SERVERS = 20;

	/**
	 * <p>結果セットの末尾を示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_END = 21;

	/**
	 * <p>システムエラーを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_ERRNO = 26;

	/**
	 * <p>実行している操作がバッファリングされていることを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_BUFFERED = 32;

	/**
	 * <p>実行がタイムアウトしたことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_TIMEOUT = 31;

	/**
	 * <p>不正なキーを与えたことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_BAD_KEY_PROVIDED = 33;
	const RES_STORED = 15;
	const RES_DELETED = 22;
	const RES_STAT = 24;
	const RES_ITEM = 25;
	const RES_NOT_SUPPORTED = 28;
	const RES_FETCH_NOTFINISHED = 30;
	const RES_SERVER_MARKED_DEAD = 35;
	const RES_UNKNOWN_STAT_KEY = 36;
	const RES_INVALID_HOST_PROTOCOL = 34;
	const RES_MEMORY_ALLOCATION_FAILURE = 17;

	/**
	 * <p>ネットワークソケットの作成が失敗したことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_CONNECTION_SOCKET_CREATE_FAILURE = 11;
	const RES_E2BIG = 37;
	const RES_KEY_TOO_BIG = 39;
	const RES_SERVER_TEMPORARILY_DISABLED = 47;
	const RES_SERVER_MEMORY_ALLOCATION_FAILURE = 48;

	/**
	 * <p>ペイロードに関するエラー: つまり、値を シリアライズ/復元 したり、圧縮/解凍 することができなかったことを示します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const RES_PAYLOAD_FAILURE = -1001;

	/**
	 * <p>デフォルトの PHP シリアライザ。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const SERIALIZER_PHP = 1;

	/**
	 * <p>igbinary シリアライザ。
	 * テキスト表現ではなく、PHP のデータ構造をコンパクトなバイナリ形式で格納します。
	 * その結果、容量と時間を節約できます。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const SERIALIZER_IGBINARY = 2;

	/**
	 * <p>JSON シリアライザ。PHP 5.2.10 以降が必要です。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const SERIALIZER_JSON = 3;
	const SERIALIZER_JSON_ARRAY = 4;
	const SERIALIZER_MSGPACK = 5;
	const COMPRESSION_FASTLZ = 2;
	const COMPRESSION_ZLIB = 1;

	/**
	 * <p><b>Memcached::getMulti</b> や
	 * <b>Memcached::getMultiByKey</b> のフラグで、
	 * リクエストしたときと同じ順番でキーを返すことを示します。
	 * 存在しないキーを指定すると、デフォルト値の NULL を返します。</p>
	 * @link http://php.net/manual/ja/memcached.constants.php
	 */
	const GET_PRESERVE_ORDER = 1;
	const GET_EXTENDED = 2;
	const GET_ERROR_RETURN_VALUE = false;


	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Memcached のインスタンスを作成する
	 * @link http://php.net/manual/ja/memcached.construct.php
	 * @param string $persistent_id [optional] <p>
	 * デフォルトでは、Memcached のインスタンスはリクエストの終了時に破棄されます。
	 * リクエスト間で持続するインスタンスを作成するには、
	 * <i>persistent_id</i> でそのインスタンスの一意な ID を指定します。
	 * 同じ <i>persistent_id</i> で作られたすべてのインスタンスは同じ接続を共有します。
	 * </p>
	 */
	public function __construct(string $persistent_id = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 直近の操作の結果コードを返す
	 * @link http://php.net/manual/ja/memcached.getresultcode.php
	 * @return int 直近の Memcached 操作の結果コードを返します。
	 */
	public function getResultCode(): int {}

	/**
	 * (PECL memcached &gt;= 1.0.0)<br/>
	 * 最後に実行した操作の結果を説明したメッセージを返す。
	 * @link http://php.net/manual/ja/memcached.getresultmessage.php
	 * @return string 最後に実行した Memcached クラスの操作結果を説明したメッセージ
	 */
	public function getResultMessage(): string {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * アイテムを取得する
	 * @link http://php.net/manual/ja/memcached.get.php
	 * @param string $key <p>
	 * 取得したいアイテムのキー。
	 * </p>
	 * @param callable $cache_cb [optional] <p>
	 * Read-through キャッシュコールバック、あるいは <b>NULL</b>。
	 * </p>
	 * @param float $cas_token [optional] <p>
	 * CAS トークンを格納する変数。
	 * </p>
	 * @return mixed キャッシュに格納された値、あるいは <b>FALSE</b> を返します。
	 * キーが存在しない場合、
	 * <b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_NOTFOUND</b> を返します。
	 */
	public function get(string $key, callable $cache_cb = null, float &$cas_token = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 指定したサーバーからアイテムを取得する
	 * @link http://php.net/manual/ja/memcached.getbykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param string $key <p>
	 * 取得したいアイテムのキー。
	 * </p>
	 * @param callable $cache_cb [optional] <p>
	 * Read-through キャッシュコールバック、あるいは <b>NULL</b>。
	 * </p>
	 * @param float $cas_token [optional] <p>
	 * CAS トークンを格納する変数。
	 * </p>
	 * @return mixed キャッシュに格納された値、あるいは <b>FALSE</b> を返します。
	 * キーが存在しない場合、
	 * <b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_NOTFOUND</b> を返します。
	 */
	public function getByKey(string $server_key, string $key, callable $cache_cb = null, float &$cas_token = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 複数のアイテムを取得する
	 * @link http://php.net/manual/ja/memcached.getmulti.php
	 * @param array $keys <p>
	 * 取得したいキーの配列。
	 * </p>
	 * @param array $cas_tokens [optional] <p>
	 * 見つかったアイテムの CAS トークンを格納する変数。
	 * </p>
	 * @param int $flags [optional] <p>
	 * 取得操作のオプション。
	 * </p>
	 * @return mixed 見つかったアイテムの配列、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function getMulti(array $keys, array &$cas_tokens = null, int $flags = null) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 指定したサーバーから複数のアイテムを取得する
	 * @link http://php.net/manual/ja/memcached.getmultibykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param array $keys <p>
	 * 取得したいキーの配列。
	 * </p>
	 * @param string $cas_tokens [optional] <p>
	 * 見つかったアイテムの CAS トークンを格納する変数。
	 * </p>
	 * @param int $flags [optional] <p>
	 * 取得操作のフラグ。
	 * </p>
	 * @return array 見つかったアイテムの配列、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function getMultiByKey(string $server_key, array $keys, string &$cas_tokens = null, int $flags = null): array {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 複数のアイテムを要求する
	 * @link http://php.net/manual/ja/memcached.getdelayed.php
	 * @param array $keys <p>
	 * 要求するキーの配列。
	 * </p>
	 * @param bool $with_cas [optional] <p>
	 * CAS トークンの値も要求するかどうか。
	 * </p>
	 * @param callable $value_cb [optional] <p>
	 * result コールバック、あるいは <b>NULL</b>。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function getDelayed(array $keys, bool $with_cas = null, callable $value_cb = null): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 指定したサーバーに複数のアイテムを要求する
	 * @link http://php.net/manual/ja/memcached.getdelayedbykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param array $keys <p>
	 * 要求するキーの配列。
	 * </p>
	 * @param bool $with_cas [optional] <p>
	 * CAS トークンの値も要求するかどうか。
	 * </p>
	 * @param callable $value_cb [optional] <p>
	 * result コールバック、あるいは <b>NULL</b>。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function getDelayedByKey(string $server_key, array $keys, bool $with_cas = null, callable $value_cb = null): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 次の結果を取得する
	 * @link http://php.net/manual/ja/memcached.fetch.php
	 * @return array 次の結果、あるいは <b>FALSE</b> を返します。
	 * 結果セットをすべて処理し終えた場合、
	 * <b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_END</b> を返します。
	 */
	public function fetch(): array {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 残りのすべての結果を取得する
	 * @link http://php.net/manual/ja/memcached.fetchall.php
	 * @return array 結果、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function fetchAll(): array {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * アイテムを格納する
	 * @link http://php.net/manual/ja/memcached.set.php
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param mixed $value <p>
	 * 格納する値。
	 * </p>
	 * @param int $expiration [optional] <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function set(string $key, $value, int $expiration = null): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 指定したサーバーにアイテムを格納する
	 * @link http://php.net/manual/ja/memcached.setbykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param mixed $value <p>
	 * 格納する値。
	 * </p>
	 * @param int $expiration [optional] <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function setByKey(string $server_key, string $key, $value, int $expiration = null): bool {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * アイテムに新しい有効期限を設定する
	 * @link http://php.net/manual/ja/memcached.touch.php
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param int $expiration <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function touch(string $key, int $expiration): bool {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * 指定したサーバー上のアイテムに新しい有効期限を設定する
	 * @link http://php.net/manual/ja/memcached.touchbykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param int $expiration <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function touchByKey(string $server_key, string $key, int $expiration): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 複数のアイテムを格納する
	 * @link http://php.net/manual/ja/memcached.setmulti.php
	 * @param array $items <p>
	 * サーバーに格納する キー/値 のペアの配列。
	 * </p>
	 * @param int $expiration [optional] <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function setMulti(array $items, int $expiration = null): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 指定したサーバーで複数のアイテムを格納する
	 * @link http://php.net/manual/ja/memcached.setmultibykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param array $items <p>
	 * サーバーに格納する キー/値 のペアの配列。
	 * </p>
	 * @param int $expiration [optional] <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function setMultiByKey(string $server_key, array $items, int $expiration = null): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * アイテムを比較して入れ替える
	 * @link http://php.net/manual/ja/memcached.cas.php
	 * @param float $cas_token <p>
	 * 既存のアイテムに割り当てたれた一意な値。memcache が生成します。
	 * </p>
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param mixed $value <p>
	 * 格納する値。
	 * </p>
	 * @param int $expiration [optional] <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 格納しようとしているアイテムが最後の取得以降に更新されている場合、
	 * <b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_DATA_EXISTS</b> を返します。
	 */
	public function cas(float $cas_token, string $key, $value, int $expiration = null): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 指定したサーバーでアイテムを比較して入れ替える
	 * @link http://php.net/manual/ja/memcached.casbykey.php
	 * @param float $cas_token <p>
	 * 既存のアイテムに割り当てたれた一意な値。memcache が生成します。
	 * </p>
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param mixed $value <p>
	 * 格納する値。
	 * </p>
	 * @param int $expiration [optional] <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 格納しようとしているアイテムが最後の取得以降に更新されている場合、
	 * <b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_DATA_EXISTS</b> を返します。
	 */
	public function casByKey(float $cas_token, string $server_key, string $key, $value, int $expiration = null): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * アイテムを新しいキーで追加する
	 * @link http://php.net/manual/ja/memcached.add.php
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param mixed $value <p>
	 * 格納する値。
	 * </p>
	 * @param int $expiration [optional] <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * キーが既に存在する場合は、<b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_NOTSTORED</b> を返します。
	 */
	public function add(string $key, $value, int $expiration = null): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 指定したサーバーにアイテムを新しいキーで追加する
	 * @link http://php.net/manual/ja/memcached.addbykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param mixed $value <p>
	 * 格納する値。
	 * </p>
	 * @param int $expiration [optional] <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * キーが既に存在する場合は、<b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_NOTSTORED</b> を返します。
	 */
	public function addByKey(string $server_key, string $key, $value, int $expiration = null): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * データを既存のアイテムに追記する
	 * @link http://php.net/manual/ja/memcached.append.php
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param string $value <p>
	 * 追記する文字列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * <b>Memcached::getResultCode</b> は、キーが存在しない場合に
	 * <b>Memcached::RES_NOTSTORED</b> を返します。
	 */
	public function append(string $key, string $value): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 指定したサーバーでデータを既存のアイテムに追記する
	 * @link http://php.net/manual/ja/memcached.appendbykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param string $value <p>
	 * 追記する文字列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * <b>Memcached::getResultCode</b> は、キーが存在しない場合に
	 * <b>Memcached::RES_NOTSTORED</b> を返します。
	 */
	public function appendByKey(string $server_key, string $key, string $value): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 既存のアイテムの前にデータを付加する
	 * @link http://php.net/manual/ja/memcached.prepend.php
	 * @param string $key <p>
	 * データを先頭に付加したいアイテムのキー。
	 * </p>
	 * @param string $value <p>
	 * 先頭に付加する文字列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * <b>Memcached::getResultCode</b> は、キーが存在しない場合に
	 * <b>Memcached::RES_NOTSTORED</b> を返します。
	 */
	public function prepend(string $key, string $value): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 指定したサーバーで既存のアイテムの前にデータを付加する
	 * @link http://php.net/manual/ja/memcached.prependbykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param string $key <p>
	 * データを先頭に付加したいアイテムのキー。
	 * </p>
	 * @param string $value <p>
	 * 先頭に付加する文字列。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * <b>Memcached::getResultCode</b> は、キーが存在しない場合に
	 * <b>Memcached::RES_NOTSTORED</b> を返します。
	 */
	public function prependByKey(string $server_key, string $key, string $value): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 既存のキーのアイテムを入れ替える
	 * @link http://php.net/manual/ja/memcached.replace.php
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param mixed $value <p>
	 * 格納する値。
	 * </p>
	 * @param int $expiration [optional] <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * キーが存在しない場合、
	 * <b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_NOTSTORED</b> を返します。
	 */
	public function replace(string $key, $value, int $expiration = null): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 指定したサーバーで既存のキーのアイテムを入れ替える
	 * @link http://php.net/manual/ja/memcached.replacebykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param string $key <p>
	 * 値の格納先のキー。
	 * </p>
	 * @param mixed $value <p>
	 * 格納する値。
	 * </p>
	 * @param int $expiration [optional] <p>
	 * 期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * キーが存在しない場合、
	 * <b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_NOTSTORED</b> を返します。
	 */
	public function replaceByKey(string $server_key, string $key, $value, int $expiration = null): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * アイテムを削除する
	 * @link http://php.net/manual/ja/memcached.delete.php
	 * @param string $key <p>
	 * 削除したいキー。
	 * </p>
	 * @param int $time [optional] <p>
	 * サーバーがアイテムを削除するまでの待ち時間。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * キーが存在しない場合、
	 * <b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_NOTFOUND</b> を返します。
	 */
	public function delete(string $key, int $time = 0): bool {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * 複数のアイテムを削除する
	 * @link http://php.net/manual/ja/memcached.deletemulti.php
	 * @param array $keys <p>
	 * 削除したいキー。
	 * </p>
	 * @param int $time [optional] <p>
	 * サーバーがアイテムを削除するまでの待ち時間。
	 * </p>
	 * @return array array indexed by <i>keys</i> and where values are indicating whether operation succeeded or not.
	 * キーが存在しない場合、
	 * <b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_NOTFOUND</b> を返します。
	 */
	public function deleteMulti(array $keys, int $time = 0): array {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 指定したサーバーからアイテムを削除する
	 * @link http://php.net/manual/ja/memcached.deletebykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param string $key <p>
	 * 削除したいキー。
	 * </p>
	 * @param int $time [optional] <p>
	 * サーバーがアイテムを削除するまでの待ち時間。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * キーが存在しない場合、
	 * <b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_NOTFOUND</b> を返します。
	 */
	public function deleteByKey(string $server_key, string $key, int $time = 0): bool {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * 指定したサーバーから複数のアイテムを削除する
	 * @link http://php.net/manual/ja/memcached.deletemultibykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param array $keys <p>
	 * 削除したいキー。
	 * </p>
	 * @param int $time [optional] <p>
	 * サーバーがアイテムを削除するまでの待ち時間。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * キーが存在しない場合、
	 * <b>Memcached::getResultCode</b> は
	 * <b>Memcached::RES_NOTFOUND</b> を返します。
	 */
	public function deleteMultiByKey(string $server_key, array $keys, int $time = 0): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 数値アイテムの値を増やす
	 * @link http://php.net/manual/ja/memcached.increment.php
	 * @param string $key <p>
	 * 増やしたいアイテムのキー。
	 * </p>
	 * @param int $offset [optional] <p>
	 * 値を増やしたい量。
	 * </p>
	 * @param int $initial_value [optional] <p>
	 * そのアイテムが存在しない場合に設定する値。
	 * </p>
	 * @param int $expiry [optional] <p>
	 * そのアイテムに設定する有効期限。
	 * </p>
	 * @return int 成功した場合にアイテムの新しい値、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function increment(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * 数値アイテムの値を減らす
	 * @link http://php.net/manual/ja/memcached.decrement.php
	 * @param string $key <p>
	 * 減らしたいアイテムのキー。
	 * </p>
	 * @param int $offset [optional] <p>
	 * 値を減らしたい量。
	 * </p>
	 * @param int $initial_value [optional] <p>
	 * そのアイテムが存在しない場合に設定する値。
	 * </p>
	 * @param int $expiry [optional] <p>
	 * そのアイテムに設定する有効期限。
	 * </p>
	 * @return int 成功した場合にアイテムの新しい値、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function decrement(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * 指定したサーバー上にある数値アイテムの値を増やす
	 * @link http://php.net/manual/ja/memcached.incrementbykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param string $key <p>
	 * 増やしたいアイテムのキー。
	 * </p>
	 * @param int $offset [optional] <p>
	 * 値を増やしたい量。
	 * </p>
	 * @param int $initial_value [optional] <p>
	 * そのアイテムが存在しない場合に設定する値。
	 * </p>
	 * @param int $expiry [optional] <p>
	 * そのアイテムに設定する有効期限。
	 * </p>
	 * @return int 成功した場合にアイテムの新しい値、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function incrementByKey(string $server_key, string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * 指定したサーバー上にある数値アイテムの値を減らす
	 * @link http://php.net/manual/ja/memcached.decrementbykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @param string $key <p>
	 * 減らしたいアイテムのキー。
	 * </p>
	 * @param int $offset [optional] <p>
	 * 値を減らしたい量。
	 * </p>
	 * @param int $initial_value [optional] <p>
	 * そのアイテムが存在しない場合に設定する値。
	 * </p>
	 * @param int $expiry [optional] <p>
	 * そのアイテムに設定する有効期限。
	 * </p>
	 * @return int 成功した場合にアイテムの新しい値、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function decrementByKey(string $server_key, string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * サーバーをサーバープールに追加する
	 * @link http://php.net/manual/ja/memcached.addserver.php
	 * @param string $host <p>
	 * memcache サーバーのホスト名。ホスト名が無効な場合は、データ関連の操作の結果コードに
	 * <b>Memcached::RES_HOST_LOOKUP_FAILURE</b> が設定されます。
	 * バージョン 2.0.0b1 以降では、このパラメータにソケットのパス
	 * (/path/to/memcached.sock など) を指定すると、
	 * UNIX ドメインソケットを使えるようになりました。
	 * このとき、<i>port</i> には
	 * 0 を設定する必要があります。
	 * </p>
	 * @param int $port <p>
	 * memcache が動作しているポート。通常、これは
	 * 11211 となります。
	 * バージョン 2.0.0b1 以降では、UNIX ドメインソケットを利用する際には
	 * 0 を設定します。
	 * </p>
	 * @param int $weight [optional] <p>
	 * プール内の全サーバーにおけるそのサーバーの重み。
	 * これで、何か操作をしたときにそのサーバーが選択される確率を制御します。
	 * これは、一貫性のある分散オプションを使っている場合にのみ使用でき、
	 * 通常はそのサーバー上で memcache が使用できるメモリの量に対応したものとなります。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function addServer(string $host, int $port, int $weight = 0): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.1)<br/>
	 * 複数のサーバーをサーバープールに追加する
	 * @link http://php.net/manual/ja/memcached.addservers.php
	 * @param array $servers
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function addServers(array $servers): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * プール内のサーバーの一覧を取得する
	 * @link http://php.net/manual/ja/memcached.getserverlist.php
	 * @return array サーバープール内のすべてのサーバーの一覧を返します。
	 */
	public function getServerList(): array {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * キーとサーバーを関連付ける
	 * @link http://php.net/manual/ja/memcached.getserverbykey.php
	 * @param string $server_key <p>
	 * 値を格納したりデータを取得したりするサーバーを表すキー。
	 * アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。
	 * これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。
	 * </p>
	 * @return array 成功した場合に配列を返します。この配列には host、
	 * port そして weight の三つのキーが含まれます。
	 * 失敗した場合は <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function getServerByKey(string $server_key): array {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * サーバーリストからすべてのサーバーを消去する
	 * @link http://php.net/manual/ja/memcached.resetserverlist.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function resetServerList(): bool {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * 開いている接続を閉じる
	 * @link http://php.net/manual/ja/memcached.quit.php
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function quit(): bool {}

	public function flushBuffers() {}

	public function getLastErrorMessage() {}

	public function getLastErrorCode() {}

	public function getLastErrorErrno() {}

	public function getLastDisconnectedServer() {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * サーバープールの統計情報を取得する
	 * @link http://php.net/manual/ja/memcached.getstats.php
	 * @return array サーバーの統計情報の配列を返します。サーバーごとにひとつのエントリとなります。
	 */
	public function getStats(): array {}

	/**
	 * (PECL memcached &gt;= 0.1.5)<br/>
	 * サーバープールのバージョン情報を取得する
	 * @link http://php.net/manual/ja/memcached.getversion.php
	 * @return array memcached サーバーのバージョン情報の配列。サーバーひとつにつき配列の要素一つが割り当てられます。
	 */
	public function getVersion(): array {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * すべてのサーバーのキーを取得する
	 * @link http://php.net/manual/ja/memcached.getallkeys.php
	 * @return array 成功した場合は全サーバーに格納されているキー、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getAllKeys(): array {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * キャッシュ内のすべてのアイテムを無効にする
	 * @link http://php.net/manual/ja/memcached.flush.php
	 * @param int $delay [optional] <p>
	 * アイテムの無効化までに待機する秒数。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 必要に応じて <b>Memcached::getResultCode</b> を使用しましょう。
	 */
	public function flush(int $delay = 0): bool {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Memcached のオプションの値を取得する
	 * @link http://php.net/manual/ja/memcached.getoption.php
	 * @param int $option <p>
	 * Memcached::OPT_* 定数のいずれか。
	 * </p>
	 * @return mixed 要求されたオプションの値、あるいはエラー時に <b>FALSE</b> を返します。
	 */
	public function getOption(int $option) {}

	/**
	 * (PECL memcached &gt;= 0.1.0)<br/>
	 * Memcached のオプションの値を設定する
	 * @link http://php.net/manual/ja/memcached.setoption.php
	 * @param int $option
	 * @param mixed $value
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setOption(int $option, $value): bool {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * Memcached のオプションの値を設定する
	 * @link http://php.net/manual/ja/memcached.setoptions.php
	 * @param array $options <p>
	 * オプションの連想配列。設定するオプションを連想配列のキーに、
	 * そしてそのオプションの新しい値を連想配列の値に設定します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setOptions(array $options): bool {}

	/**
	 * @param $host_map
	 * @param $forward_map
	 * @param $replicas
	 */
	public function setBucket($host_map, $forward_map, $replicas) {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * memcache への接続で持続的接続を使っているかどうかを調べる
	 * @link http://php.net/manual/ja/memcached.ispersistent.php
	 * @return bool Memcache インスタンスが持続的接続を使っている場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isPersistent(): bool {}

	/**
	 * (PECL memcached &gt;= 2.0.0)<br/>
	 * 直近に作られたインスタンスかどうかを調べる
	 * @link http://php.net/manual/ja/memcached.ispristine.php
	 * @return bool 直近に作られたインスタンスである場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
	 */
	public function isPristine(): bool {}

}

/**
 * @link http://php.net/manual/ja/class.memcachedexception.php
 */
class MemcachedException extends RuntimeException implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外をコピーする
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @return void 値を返しません。
	 */
	final private function __clone(): void {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外を作成する
	 * @link http://php.net/manual/ja/exception.construct.php
	 * @param string $message [optional] <p>
	 * スローする例外メッセージ。
	 * </p>
	 * @param int $code [optional] <p>
	 * 例外コード。
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * 以前に使われた例外。例外の連結に使用します。
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外メッセージを取得する
	 * @link http://php.net/manual/ja/exception.getmessage.php
	 * @return string 例外メッセージ文字列を返します。
	 */
	final public function getMessage(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外コードを取得する
	 * @link http://php.net/manual/ja/exception.getcode.php
	 * @return mixed 例外コードを整数値で返します。しかし、
	 * <b>Exception</b> クラスを継承したクラスでは、違う型を返すこともあります
	 * (たとえば <b>PDOException</b> は文字列を返します)。
	 */
	final public function getCode() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られたファイルを取得する
	 * @link http://php.net/manual/ja/exception.getfile.php
	 * @return string 例外が作られたファイルの名前を返します。
	 */
	final public function getFile(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外が作られた行を取得する
	 * @link http://php.net/manual/ja/exception.getline.php
	 * @return int 例外が作られた行番号を返します。
	 */
	final public function getLine(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを取得する
	 * @link http://php.net/manual/ja/exception.gettrace.php
	 * @return array 例外のスタックトレースを配列で返します。
	 */
	final public function getTrace(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 前の例外を返す
	 * @link http://php.net/manual/ja/exception.getprevious.php
	 * @return Exception 前に発生した <b>Throwable</b>、あるいはそれが存在しない場合は <b>NULL</b> を返します。
	 */
	final public function getPrevious(): Exception {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * スタックトレースを文字列で取得する
	 * @link http://php.net/manual/ja/exception.gettraceasstring.php
	 * @return string 例外のスタックトレースを文字列で返します。
	 */
	final public function getTraceAsString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * 例外の文字列表現
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @return string 例外を文字列で表現したものを返します。
	 */
	public function __toString(): string {}

}
// End of memcached v.3.0.0b1
?>
