<?php



namespace {

	/**
	 * <p>memcached サーバー群への接続を表します。</p>
	 * @link https://php.net/manual/ja/class.memcached.php
	 * @since PECL memcached >= 0.1.0
	 */
	class Memcached {

		/**
		 * @var integer <p>ペイロードの圧縮を有効あるいは無効にします。有効にすると、 一定の閾値 (現在は 100 バイト) を超える長さのアイテムは 格納時に圧縮され、取得時に伸長されます。この操作は透過的に行われます。</p> <p>型: <i>boolean</i>、デフォルト: <b><code>TRUE</code></b></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_COMPRESSION = -1001;

		/**
		 * @var integer <p>非スカラ値のシリアライズに使うシリアライザを指定します。 有効なシリアライザは <b><code>Memcached::SERIALIZER_PHP</code></b> あるいは <b><code>Memcached::SERIALIZER_IGBINARY</code></b> です。 後者のシリアライザをサポートするのは memcached の configure 時に <i>--enable-memcached-igbinary</i> オプションを指定して <i>igbinary</i> 拡張を読み込んだときだけです。</p> <p>型: <i>integer</i>、デフォルト: <b><code>Memcached::SERIALIZER_PHP</code></b></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_SERIALIZER = -1003;

		/**
		 * @var integer <p>デフォルトの PHP シリアライザ。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const SERIALIZER_PHP = 1;

		/**
		 * @var integer <p>» igbinary シリアライザ。 テキスト表現ではなく、PHP のデータ構造をコンパクトなバイナリ形式で格納します。 その結果、容量と時間を節約できます。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const SERIALIZER_IGBINARY = 2;

		/**
		 * @var integer <p>JSON シリアライザ。PHP 5.2.10 以降が必要です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const SERIALIZER_JSON = 3;

		/**
		 * @var integer <p>これを使うと、アイテムのキーに「ドメイン」を作成できます。 ここで指定した値がキーの名前の先頭に付きます。 <i>128</i> 文字より長くはできず、 ここで指定した値の分だけキーに指定できる長さが小さくなります。 プレフィックスが付くのはアイテムのキーだけであり、 サーバーのキーには付きません。</p> <p>型: <i>string</i>、デフォルト: <i>""</i></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_PREFIX_KEY = -1002;

		/**
		 * @var integer <p>アイテムのキーに使うハッシュアルゴリズムを指定します。 有効な値は、定数 <b><code>Memcached::HASH_&#42;</code></b> のいずれかです。 どのハッシュアルゴリズムにもそれぞれ利点や欠点があります。 よくわからない場合やあまり難しく考えたくない場合はデフォルトで進めましょう。</p> <p>型: <i>integer</i>、デフォルト: <b><code>Memcached::HASH_DEFAULT</code></b></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_HASH = 2;

		/**
		 * @var mixed <p>デフォルトのハッシュアルゴリズム (Jenkins one-at-a-time)。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HASH_DEFAULT = 0;

		/**
		 * @var integer <p>MD5 ハッシュアルゴリズム。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HASH_MD5 = 1;

		/**
		 * @var integer <p>CRC ハッシュアルゴリズム。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HASH_CRC = 2;

		/**
		 * @var integer <p>FNV1_64 ハッシュアルゴリズム。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HASH_FNV1_64 = 3;

		/**
		 * @var integer <p>FNV1_64A ハッシュアルゴリズム。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HASH_FNV1A_64 = 4;

		/**
		 * @var integer <p>FNV1_32 ハッシュアルゴリズム。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HASH_FNV1_32 = 5;

		/**
		 * @var integer <p>FNV1_32A ハッシュアルゴリズム。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HASH_FNV1A_32 = 6;

		/**
		 * @var integer <p>Hsieh ハッシュアルゴリズム。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HASH_HSIEH = 7;

		/**
		 * @var integer <p>Murmur ハッシュアルゴリズム。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HASH_MURMUR = 8;

		/**
		 * @var integer <p>アイテムのキーをサーバーに振り分ける方式を指定します。 現在サポートしている方式は、モジュロとコンシステント・ハッシュの二種類です。 コンシステント・ハッシュのほうがよりうまく分散させられ、 サーバーをクラスタに追加するときにもキャッシュのロスを最小限に抑えられます。</p> <p>型: <i>integer</i>、デフォルト: <b><code>Memcached::DISTRIBUTION_MODULA</code></b></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_DISTRIBUTION = 9;

		/**
		 * @var mixed <p>モジュロベースのキー分散アルゴリズム。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const DISTRIBUTION_MODULA = 0;

		/**
		 * @var integer <p>コンシステント・ハッシュを使ったキー分散アルゴリズム (libketama を利用)。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const DISTRIBUTION_CONSISTENT = 1;

		/**
		 * @var integer <p>libketama 風の挙動との互換性を有効あるいは無効にします。 有効にすると、アイテムのキーのハッシュアルゴリズムは MD5、 そして分散方式は重み付きコンシステント・ハッシュになります。 これを使うと、他の libketama ベースのクライアント (Python や Ruby など) を同じサーバー設定で使え、キーも透過的にアクセスできるようになるので有用です。</p>  <p><b>注意</b>:</p> <p>コンシステント・ハッシュを使うときは、このオプションを有効にしておくことを強く推奨します。 将来のリリースでは、これはデフォルトで有効になる予定です。</p>  <p>型: <i>boolean</i>、デフォルト: <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_LIBKETAMA_COMPATIBLE = 16;

		/**
		 * @var integer <p>バッファ入出力を有効あるいは無効にします。 バッファ入出力を有効にすると、ストレージへのコマンドを送信する代わりに 「バッファ」に向けるようになります。 データを取得するアクションを実行すると、このバッファをリモート接続に送信します。 接続を終了したり閉じたりしたときも、バッファに入ったデータをリモート接続に送信します。</p> <p>型: <i>boolean</i>、デフォルト: <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_BUFFER_WRITES = 10;

		/**
		 * @var integer <p>バイナリプロトコルを使えるようにします。 既に開いている接続ではこのオプションを切り替えられないことに注意しましょう。</p> <p>型: <i>boolean</i>、デフォルト: <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_BINARY_PROTOCOL = 18;

		/**
		 * @var mixed <p>非同期入出力を有効あるいは無効にします。 これは、ストレージ関数で使える転送の中でも最も高速なものです。</p> <p>型: <i>boolean</i>、デフォルト: <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_NO_BLOCK = 0;

		/**
		 * @var integer <p>ソケット接続用のno-delay機能 (環境によってはそのほうが高速化する) を有効あるいは無効にします。</p> <p>型: <i>boolean</i>、デフォルト: <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_TCP_NODELAY = 1;

		/**
		 * @var integer <p>バッファに送信するソケットの最大のバイト数。</p> <p>型: <i>integer</i>、デフォルト: プラットフォームやカーネルの設定によって異なる</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_SOCKET_SEND_SIZE = 4;

		/**
		 * @var integer <p>ソケットの受信バッファの最大のバイト数。</p> <p>The maximum socket receive buffer in bytes.</p> <p>型: <i>integer</i>、デフォルト: プラットフォームやカーネルの設定によって異なる</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_SOCKET_RECV_SIZE = 5;

		/**
		 * @var integer <p>非ブロックモードの場合、ここにはソケット接続のタイムアウト値をミリ秒単位で指定します。</p> <p>型: <i>integer</i>、デフォルト: <i>1000</i></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_CONNECT_TIMEOUT = 14;

		/**
		 * @var integer <p>接続に失敗したときに、どれだけ失敗するまで接続を再試行するかどうかを、秒数で表す。</p> <p>型: <i>integer</i>、デフォルト: <i>0</i></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_RETRY_TIMEOUT = 15;

		/**
		 * @var integer <p>ソケットの送信タイムアウトをマイクロ秒で指定します。 非ブロックモードの入出力を使えない場合でも、 これを使ってデータ送信のタイムアウトを指定できます。</p> <p>型: <i>integer</i>、デフォルト: <i>0</i></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_SEND_TIMEOUT = 19;

		/**
		 * @var integer <p>ソケットの読み込みタイムアウトをマイクロ秒で指定します。 非ブロックモードの入出力を使えない場合でも、 これを使ってデータ読み込みのタイムアウトを指定できます。</p> <p>型: <i>integer</i>、デフォルト: <i>0</i></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_RECV_TIMEOUT = 20;

		/**
		 * @var integer <p>接続をポーリングする際のタイムアウト時間をミリ秒単位で指定します。</p> <p>型: <i>integer</i>、デフォルト: <i>1000</i></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_POLL_TIMEOUT = 8;

		/**
		 * @var integer <p>DNS ルックアップのキャッシュを有効あるいは無効にします。</p> <p>型: <i>boolean</i>、デフォルト: <b><code>FALSE</code></b></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_CACHE_LOOKUPS = 6;

		/**
		 * @var integer <p>サーバーへの接続の最大試行回数を指定します。 指定した回数だけ接続の失敗が続くと、サーバーが削除されます。</p> <p>型: <i>integer</i>、デフォルト: <i>0</i></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const OPT_SERVER_FAILURE_LIMIT = 21;

		/**
		 * @var boolean <p>igbqinary シリアライザのサポートが有効かどうかを示します。</p> <p>型: <i>boolean</i></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HAVE_IGBINARY = 1;

		/**
		 * @var boolean <p>JSON シリアライザのサポートが有効かどうかを示します。</p> <p>型: <i>boolean</i></p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HAVE_JSON = 1;

		/**
		 * @var boolean <p>Indicates whether msgpack serializer support is available.</p> <p>Type: <i>boolean</i>.</p> <p>Memcached 3.0.0 以降で使用可能です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HAVE_MSGPACK = 1;

		/**
		 * @var boolean <p>Type: <i>boolean</i>.</p> <p>Memcached 3.0.0 以降で使用可能です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HAVE_SESSION = 1;

		/**
		 * @var boolean <p>Type: <i>boolean</i>.</p> <p>Memcached 3.0.0 以降で使用可能です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const HAVE_SASL = 1;

		/**
		 * @var integer <p>A flag for <code>Memcached::get()</code>, <code>Memcached::getMulti()</code> and <code>Memcached::getMultiByKey()</code> to ensure that the CAS token values are returned as well.</p> <p>Memcached 3.0.0 以降で使用可能です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const GET_EXTENDED = 2;

		/**
		 * @var integer <p><code>Memcached::getMulti()</code> や <code>Memcached::getMultiByKey()</code> のフラグで、 リクエストしたときと同じ順番でキーを返すことを示します。 存在しないキーを指定すると、デフォルト値の NULL を返します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const GET_PRESERVE_ORDER = 1;

		/**
		 * @var mixed <p>実行しようとした操作が成功したことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_SUCCESS = 0;

		/**
		 * @var integer <p>実行しようとした操作が何らかの点で失敗したことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_FAILURE = 1;

		/**
		 * @var integer <p>DNSの名前解決が失敗したことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_HOST_LOOKUP_FAILURE = 2;

		/**
		 * @var integer <p>ネットワーク経由でのデータの読み取りに失敗したことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_UNKNOWN_READ_FAILURE = 7;

		/**
		 * @var integer <p>memcached プロトコル内で不正なコマンドが実行されたことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_PROTOCOL_ERROR = 8;

		/**
		 * @var integer <p>クライアント側でエラーが起きたことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_CLIENT_ERROR = 9;

		/**
		 * @var integer <p>サーバー側でエラーが起きたことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_SERVER_ERROR = 10;

		/**
		 * @var integer <p>ネットワーク経由でのデータの書き込みに失敗したことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_WRITE_FAILURE = 5;

		/**
		 * @var integer <p>比較と交換に失敗したことを示します。格納しようとしたアイテムは、 最後に取得したあとで変更されています。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_DATA_EXISTS = 12;

		/**
		 * @var integer <p>アイテムが格納されなかったが、その原因はエラーではないということを示します。 これは通常、"add" や "replace" コマンドの要件を満たさなかったか あるいはアイテムが削除キューに入っていることを意味します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_NOTSTORED = 14;

		/**
		 * @var integer <p>このキーのアイテムが ("get" や "cas" の操作で) 見つからなかったことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_NOTFOUND = 16;

		/**
		 * @var integer <p>ネットワーク経由でのデータの読み取りが一部失敗したことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_PARTIAL_READ = 18;

		/**
		 * @var integer <p>multi-get を実行中にエラーが発生したことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_SOME_ERRORS = 19;

		/**
		 * @var integer <p>サーバーリストが空であることを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_NO_SERVERS = 20;

		/**
		 * @var integer <p>結果セットの末尾を示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_END = 21;

		/**
		 * @var integer <p>システムエラーを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_ERRNO = 26;

		/**
		 * @var integer <p>実行している操作がバッファリングされていることを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_BUFFERED = 32;

		/**
		 * @var integer <p>実行がタイムアウトしたことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_TIMEOUT = 31;

		/**
		 * @var integer <p>不正なキーを与えたことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_BAD_KEY_PROVIDED = 33;

		/**
		 * @var integer <p>ネットワークソケットの作成が失敗したことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_CONNECTION_SOCKET_CREATE_FAILURE = 11;

		/**
		 * @var integer <p>ペイロードに関するエラー: つまり、値を シリアライズ/復元 したり、圧縮/解凍 することができなかったことを示します。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_PAYLOAD_FAILURE = -1001;

		/**
		 * @var integer <p>Memcached 3.0.0 以降で使用可能です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_AUTH_PROBLEM = 40;

		/**
		 * @var integer <p>Memcached 3.0.0 以降で使用可能です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_AUTH_FAILURE = 41;

		/**
		 * @var integer <p>Memcached 3.0.0 以降で使用可能です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_AUTH_CONTINUE = 42;

		/**
		 * @var integer <p>Memcached 3.0.0 以降で使用可能です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_E2BIG = 37;

		/**
		 * @var integer <p>Memcached 3.0.0 以降で使用可能です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_KEY_TOO_BIG = 39;

		/**
		 * @var integer <p>Memcached 3.0.0 以降で使用可能です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_SERVER_TEMPORARILY_DISABLED = 47;

		/**
		 * @var integer <p>Memcached 3.0.0 以降で使用可能です。</p>
		 * @link https://php.net/manual/ja/memcached.constants.php
		 */
		const RES_SERVER_MEMORY_ALLOCATION_FAILURE = 48;

		/**
		 * Memcached のインスタンスを作成する
		 * <p>memcache サーバーとの接続を表す Memcached インスタンスを作成します。</p>
		 * @param string $persistent_id <p>デフォルトでは、Memcached のインスタンスはリクエストの終了時に破棄されます。 リクエスト間で持続するインスタンスを作成するには、 <code>persistent_id</code> でそのインスタンスの一意な ID を指定します。 同じ <code>persistent_id</code> で作られたすべてのインスタンスは同じ接続を共有します。</p>
		 * @return self <p>Memcached オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/memcached.construct.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function __construct(string $persistent_id = NULL) {}

		/**
		 * アイテムを新しいキーで追加する
		 * <p><b>Memcached::add()</b> は <code>Memcached::set()</code> と似ていますが、 <code>key</code> が既にサーバー上に存在する場合は失敗します。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param mixed $value <p>格納する値。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 キーが既に存在する場合は、<code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_NOTSTORED</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.add.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function add(string $key, $value, int $expiration = NULL): bool {}

		/**
		 * 指定したサーバーにアイテムを新しいキーで追加する
		 * <p><b>Memcached::addByKey()</b> は機能的に <code>Memcached::add()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。 これは、関連するキーを特定のサーバーに置き続けたいときなどに便利です。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param mixed $value <p>格納する値。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 キーが既に存在する場合は、<code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_NOTSTORED</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.addbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function addByKey(string $server_key, string $key, $value, int $expiration = NULL): bool {}

		/**
		 * サーバーをサーバープールに追加する
		 * <p><b>Memcached::addServer()</b> は、指定したサーバーをサーバープールに追加します。 この時点では、サーバーへの接続は確立されません。しかし、一貫性のあるキー分散オプションを (<b><code>Memcached::DISTRIBUTION_CONSISTENT</code></b> あるいは <b><code>Memcached::OPT_LIBKETAMA_COMPATIBLE</code></b> で) 指定した場合は、 内部データ構造のうちの一部が更新されます。 したがって、もし複数のサーバーを追加したい場合は、 <code>Memcached::addServers()</code> を使用するほうがよいでしょう。 その場合、更新は一度しか発生しません。</p><p>同じサーバーがサーバープール内で複数回あらわれることもあります。 重複チェックはしていないからです。これは望ましい状態ではありません。 その代わりに <code>weight</code> オプションを使用して、 このサーバーを選択する重みを増やします。</p>
		 * @param string $host <p>memcache サーバーのホスト名。ホスト名が無効な場合は、データ関連の操作の結果コードに <b><code>Memcached::RES_HOST_LOOKUP_FAILURE</code></b> が設定されます。 バージョン 2.0.0b1 以降では、このパラメータにソケットのパス (<i>/path/to/memcached.sock</i> など) を指定すると、 UNIX ドメインソケットを使えるようになりました。 このとき、<code>port</code> には <i>0</i> を設定する必要があります。</p>
		 * @param int $port <p>memcache が動作しているポート。通常、これは <i>11211</i> となります。 バージョン 2.0.0b1 以降では、UNIX ドメインソケットを利用する際には <i>0</i> を設定します。</p>
		 * @param int $weight <p>プール内の全サーバーにおけるそのサーバーの重み。 これで、何か操作をしたときにそのサーバーが選択される確率を制御します。 これは、一貫性のある分散オプションを使っている場合にのみ使用でき、 通常はそのサーバー上で memcache が使用できるメモリの量に対応したものとなります。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.addserver.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function addServer(string $host, int $port, int $weight = 0): bool {}

		/**
		 * 複数のサーバーをサーバープールに追加する
		 * <p><b>Memcached::addServers()</b> は、 <code>servers</code> をサーバープールに追加します。 <code>servers</code> の各エントリは、 個々のサーバーのホスト名、ポート、重み (オプション) を含む配列となります。 この時点では、サーバーへの接続は確立されません。</p><p>同じサーバーがサーバープール内で複数回あらわれることもあります。 重複チェックはしていないからです。これは望ましい状態ではありません。 その代わりに <code>weight</code> オプションを使用して、 このサーバーを選択する重みを増やします。</p>
		 * @param array $servers
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.addservers.php
		 * @since PECL memcached >= 0.1.1
		 */
		public function addServers(array $servers): bool {}

		/**
		 * データを既存のアイテムに追記する
		 * <p><b>Memcached::append()</b> は、指定した文字列 <code>value</code> を既存のアイテムの値として追記します。 <code>value</code> を文字列に強制変換する理由は、 異なる型を追記した場合の挙動が定義されていないからです。</p><p><b>注意</b>:</p><p><b><code>Memcached::OPT_COMPRESSION</code></b> が有効になっている場合は、 この操作は失敗して警告が発せられます。 すでに圧縮されている可能性のあるデータに圧縮したデータを追記することはできないからです。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param string $value <p>追記する文字列。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>Memcached::getResultCode()</code> は、キーが存在しない場合に <b><code>Memcached::RES_NOTSTORED</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.append.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function append(string $key, string $value): bool {}

		/**
		 * 指定したサーバーでデータを既存のアイテムに追記する
		 * <p><b>Memcached::appendByKey()</b> は機能的に <code>Memcached::append()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param string $value <p>追記する文字列。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>Memcached::getResultCode()</code> は、キーが存在しない場合に <b><code>Memcached::RES_NOTSTORED</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.appendbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function appendByKey(string $server_key, string $key, string $value): bool {}

		/**
		 * アイテムを比較して入れ替える
		 * <p><b>Memcached::cas()</b> は「チェックして設定」という操作を行います。 アイテムが格納されるのは、クライアントが最後にアイテムを取得して以降に 他のクライアントによるそのアイテムの更新がなかった場合のみです。 チェックは <code>cas_token</code> パラメータを使用して行います。 これは一意な 64 ビットの値で、既存のアイテムに対して memcache が割り当てます。 このトークンを取得する方法については <b>Memcached::get&#42;()</b> メソッドのドキュメントを参照ください。 PHP の integer 型の範囲を超えるため、トークンは double 型であらわされることに注意しましょう。</p>
		 * @param float $cas_token <p>既存のアイテムに割り当てたれた一意な値。memcache が生成します。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param mixed $value <p>格納する値。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 格納しようとしているアイテムが最後の取得以降に更新されている場合、 <code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_DATA_EXISTS</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.cas.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function cas(float $cas_token, string $key, $value, int $expiration = NULL): bool {}

		/**
		 * 指定したサーバーでアイテムを比較して入れ替える
		 * <p><b>Memcached::casByKey()</b> は機能的に <code>Memcached::cas()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。 これは、関連するキーを特定のサーバーに置き続けたいときなどに便利です。</p>
		 * @param float $cas_token <p>既存のアイテムに割り当てたれた一意な値。memcache が生成します。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param mixed $value <p>格納する値。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 格納しようとしているアイテムが最後の取得以降に更新されている場合、 <code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_DATA_EXISTS</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.casbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function casByKey(float $cas_token, string $server_key, string $key, $value, int $expiration = NULL): bool {}

		/**
		 * 数値アイテムの値を減らす
		 * <p><b>Memcached::decrement()</b> は、数値アイテムの値を <code>offset</code> で指定しただけ減らします。 アイテムの値が数値でない場合はエラーとなります。 操作後の値が 0 より小さくなる場合は、新しい値は 0 となります。 アイテムが存在しない場合、<b>Memcached::decrement()</b> は値を <code>initial_value</code> に設定します。</p>
		 * @param string $key <p>減らしたいアイテムのキー。</p>
		 * @param int $offset <p>値を減らしたい量。</p>
		 * @param int $initial_value <p>そのアイテムが存在しない場合に設定する値。</p>
		 * @param int $expiry <p>そのアイテムに設定する有効期限。</p>
		 * @return int <p>成功した場合にアイテムの新しい値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.decrement.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function decrement(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

		/**
		 * 指定したサーバー上にある数値アイテムの値を減らす
		 * <p><b>Memcached::decrementByKey()</b> は、数値アイテムの値を <code>offset</code> で指定しただけ減らします。 アイテムの値が数値でない場合はエラーとなります。 操作後の値が 0 より小さくなる場合は、新しい値は 0 となります。 アイテムが存在しない場合、<b>Memcached::decrementByKey()</b> は値を <code>initial_value</code> に設定します。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param string $key <p>減らしたいアイテムのキー。</p>
		 * @param int $offset <p>値を減らしたい量。</p>
		 * @param int $initial_value <p>そのアイテムが存在しない場合に設定する値。</p>
		 * @param int $expiry <p>そのアイテムに設定する有効期限。</p>
		 * @return int <p>成功した場合にアイテムの新しい値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.decrementbykey.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function decrementByKey(string $server_key, string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

		/**
		 * アイテムを削除する
		 * <p><b>Memcached::delete()</b> は、キー <code>key</code> をサーバーから削除します。 <code>time</code> パラメータは、このキーによる <i>add</i> コマンドや <i>replace</i> コマンドをサーバーに拒否させたい秒数 (あるいはいつまで拒否するかを表す Unix タイム) を指定します。 この時間までの間、アイテムは削除キューに入れられます。つまり、 <i>get</i> コマンドによる取得はできず、 <i>add</i> コマンドや <i>replace</i> コマンドでこのキーを指定した場合も失敗するということです (<i>set</i> コマンドは成功します)。 時間が経過したら、アイテムはサーバーのメモリ上から削除されます。 パラメータ <code>time</code> のデフォルトは 0 (アイテムは即時に削除され、それ以降の格納コマンドが成功するようになる) です。</p>
		 * @param string $key <p>削除したいキー。</p>
		 * @param int $time <p>サーバーがアイテムを削除するまでの待ち時間。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 キーが存在しない場合、 <code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_NOTFOUND</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.delete.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function delete(string $key, int $time = 0): bool {}

		/**
		 * 指定したサーバーからアイテムを削除する
		 * <p><b>Memcached::deleteByKey()</b> は機能的に <code>Memcached::delete()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param string $key <p>削除したいキー。</p>
		 * @param int $time <p>サーバーがアイテムを削除するまでの待ち時間。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 キーが存在しない場合、 <code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_NOTFOUND</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.deletebykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function deleteByKey(string $server_key, string $key, int $time = 0): bool {}

		/**
		 * 複数のアイテムを削除する
		 * <p><b>Memcached::deleteMulti()</b> は、キーの配列 <code>keys</code> をサーバーから削除します。 <code>time</code> パラメータは、このキーによる <i>add</i> コマンドや <i>replace</i> コマンドをサーバーに拒否させたい秒数 (あるいはいつまで拒否するかを表す Unix タイム) を指定します。 この時間までの間、アイテムは削除キューに入れられます。つまり、 <i>get</i> コマンドによる取得はできず、 <i>add</i> コマンドや <i>replace</i> コマンドでこのキーを指定した場合も失敗するということです (<i>set</i> コマンドは成功します)。 時間が経過したら、アイテムはサーバーのメモリ上から削除されます。 パラメータ <code>time</code> のデフォルトは 0 (アイテムは即時に削除され、それ以降の格納コマンドが成功するようになる) です。</p>
		 * @param array $keys <p>削除したいキー。</p>
		 * @param int $time <p>サーバーがアイテムを削除するまでの待ち時間。</p>
		 * @return array <p>Returns array indexed by <code>keys</code> and where values are indicating whether operation succeeded or not. キーが存在しない場合、 <code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_NOTFOUND</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.deletemulti.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function deleteMulti(array $keys, int $time = 0): array {}

		/**
		 * 指定したサーバーから複数のアイテムを削除する
		 * <p><b>Memcached::deleteMultiByKey()</b> は機能的に <code>Memcached::deleteMulti()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param array $keys <p>削除したいキー。</p>
		 * @param int $time <p>サーバーがアイテムを削除するまでの待ち時間。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 キーが存在しない場合、 <code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_NOTFOUND</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.deletemultibykey.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function deleteMultiByKey(string $server_key, array $keys, int $time = 0): bool {}

		/**
		 * 次の結果を取得する
		 * <p><b>Memcached::fetch()</b> は、直近のリクエストから次の結果を取得します。</p>
		 * @return array <p>次の結果、あるいは <b><code>FALSE</code></b> を返します。 結果セットをすべて処理し終えた場合、 <code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_END</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.fetch.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function fetch(): array {}

		/**
		 * 残りのすべての結果を取得する
		 * <p><b>Memcached::fetchAll()</b> は、 直近のリクエストで残っているすべての結果を返します。</p>
		 * @return array <p>結果、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.fetchall.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function fetchAll(): array {}

		/**
		 * キャッシュ内のすべてのアイテムを無効にする
		 * <p><b>Memcached::flush()</b> は、既存のキャッシュ内のすべてのアイテムを即時 (デフォルト) あるいは指定した <code>delay</code> の後に無効化します。 無効化した後は、取得系のコマンドには一切アイテムを返さなくなります (<b>Memcached::flush()</b> がアイテムを無効化したあとで同名のキーを改めて格納した場合は別です)。 既存のアイテムが確保していたメモリはその時点では開放されません。 新しいアイテムが格納されるたびに徐々に開放されていきます。</p>
		 * @param int $delay <p>アイテムの無効化までに待機する秒数。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.flush.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function flush(int $delay = 0): bool {}

		/**
		 * アイテムを取得する
		 * <p><b>Memcached::get()</b> は、キー <code>key</code> に格納されたアイテムを返します。 アイテムが存在して <code>flags</code> に <b><code>Memcached::GET_EXTENDED</code></b> が指定されていた場合には、 そのアイテムの CAS トークンの値も返します。CAS トークンの使用法は <code>Memcached::cas()</code> を参照ください。Read-through キャッシュコールバック は <code>cache_cb</code> パラメータで指定します。</p><p></p>
		 * @param string $key <p>取得したいアイテムのキー。</p>
		 * @param callable $cache_cb <p>Read-through キャッシュコールバック、あるいは <b><code>NULL</code></b>。</p>
		 * @param int $flags <p>返される結果を制御するフラグ。<b><code>Memcached::GET_EXTENDED</code></b> を指定すると、CAS トークンも返すようになります。</p>
		 * @return mixed <p>キャッシュに格納された値、あるいは <b><code>FALSE</code></b> を返します。 <code>flags</code> に <b><code>Memcached::GET_EXTENDED</code></b> が設定されている場合は、キャッシュに格納された値と CAS トークンを含む配列を返します。 キーが存在しない場合、 <code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_NOTFOUND</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.get.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function get(string $key, callable $cache_cb = NULL, int $flags = NULL) {}

		/**
		 * すべてのサーバーのキーを取得する
		 * <p><b>Memcached::getAllKeys()</b> は、 個々の memcache サーバーに問い合わせて、その時点で格納されているすべてのキーの配列を取得します。 これはアトミックな操作ではないので、ある時点でのすべてのキーのスナップショットを真の意味で取得したとは言えません。 また、memcache はすべてのキーを返すことを保証しないので、 すべてのキーを取得したものとみなすこともできません。</p>
		 * @return array <p>成功した場合は全サーバーに格納されているキー、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.getallkeys.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function getAllKeys(): array {}

		/**
		 * 指定したサーバーからアイテムを取得する
		 * <p><b>Memcached::getByKey()</b> は機能的に <code>Memcached::get()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param string $key <p>取得したいアイテムのキー。</p>
		 * @param callable $cache_cb <p>Read-through キャッシュコールバック、あるいは <b><code>NULL</code></b>。</p>
		 * @param int $flags <p>Flags to control the returned result. When value of <b><code>Memcached::GET_EXTENDED</code></b> is given will return the CAS token.</p>
		 * @return mixed <p>キャッシュに格納された値、あるいは <b><code>FALSE</code></b> を返します。 キーが存在しない場合、 <code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_NOTFOUND</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.getbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getByKey(string $server_key, string $key, callable $cache_cb = NULL, int $flags = NULL) {}

		/**
		 * 複数のアイテムを要求する
		 * <p><b>Memcached::getDelayed()</b> は、<code>keys</code> 配列で指定した複数のキーのアイテムに対するリクエストを memcache に発行します。 このメソッドはサーバーからの応答を待たずにすぐに結果を返します。 アイテムを使用したくなったときには <code>Memcached::fetch()</code> あるいは <code>Memcached::fetchAll()</code> をコールします。 <code>with_cas</code> が true の場合は CAS トークンの値もリクエストします。</p><p>結果を明示的に取得するのではなく、result コールバック を <code>value_cb</code> パラメータで指定することもできます。</p>
		 * @param array $keys <p>要求するキーの配列。</p>
		 * @param bool $with_cas <p>CAS トークンの値も要求するかどうか。</p>
		 * @param callable $value_cb <p>result コールバック、あるいは <b><code>NULL</code></b>。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.getdelayed.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getDelayed(array $keys, bool $with_cas = NULL, callable $value_cb = NULL): bool {}

		/**
		 * 指定したサーバーに複数のアイテムを要求する
		 * <p><b>Memcached::getDelayedByKey()</b> は機能的に <code>Memcached::getDelayed()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param array $keys <p>要求するキーの配列。</p>
		 * @param bool $with_cas <p>CAS トークンの値も要求するかどうか。</p>
		 * @param callable $value_cb <p>result コールバック、あるいは <b><code>NULL</code></b>。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.getdelayedbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getDelayedByKey(string $server_key, array $keys, bool $with_cas = NULL, callable $value_cb = NULL): bool {}

		/**
		 * 複数のアイテムを取得する
		 * <p><b>Memcached::getMulti()</b> は <code>Memcached::get()</code> と似ていますが、ひとつのキーのアイテムを取得するのではなく <code>keys</code> 配列で指定したキー群から複数のアイテムを取得します。</p><p><b>注意</b>:</p><p>v3.0 より前のバージョンでは、二番目のパラメータ <code>&amp;cas_tokens</code> が存在して、見つかったアイテムの CAS トークンが書き込まれるようになっていました。 この <code>&amp;cas_tokens</code> パラメータは memcached 拡張モジュールの v3.0 で削除されました。 その代わりに追加されたのが <b><code>Memcached::GET_EXTENDED</code></b> フラグで、 これを <code>flags</code> に指定すれば CAS トークンを得られます。</p><p><code>flags</code> パラメータを使用して、 <b>Memcached::getMulti()</b> 用の追加のオプションを設定します。 <b><code>Memcached::GET_PRESERVE_ORDER</code></b> は、要求したのと同じ順番でキーが返されることを保証します。 <b><code>Memcached::GET_EXTENDED</code></b> は、CAS トークンも含めて返すようにします。</p>
		 * @param array $keys <p>取得したいキーの配列。</p>
		 * @param int $flags <p>取得操作のオプション。</p>
		 * @return mixed <p>見つかったアイテムの配列、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.getmulti.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getMulti(array $keys, int $flags = NULL) {}

		/**
		 * 指定したサーバーから複数のアイテムを取得する
		 * <p><b>Memcached::getMultiByKey()</b> は機能的に <code>Memcached::getMulti()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param array $keys <p>取得したいキーの配列。</p>
		 * @param int $flags <p>取得操作のフラグ。</p>
		 * @return array <p>見つかったアイテムの配列、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.getmultibykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getMultiByKey(string $server_key, array $keys, int $flags = NULL): array {}

		/**
		 * Memcached のオプションの値を取得する
		 * <p>このメソッドは、Memcached のオプションの値を返します。 libmemcached で定義されているオプションに対応するものもあれば、 この拡張モジュールに固有のものもあります。詳細な情報は Memcached 定数 を参照ください。</p>
		 * @param int $option <p><i>Memcached::OPT_&#42;</i> 定数のいずれか。</p>
		 * @return mixed <p>要求されたオプションの値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.getoption.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getOption(int $option) {}

		/**
		 * 直近の操作の結果コードを返す
		 * <p><b>Memcached::getResultCode()</b> は <b><code>Memcached::RES_&#42;</code></b> 定数のいずれかを返します。 これは、直近に実行された Memcached メソッドの結果を表します。</p>
		 * @return int <p>直近の Memcached 操作の結果コードを返します。</p>
		 * @link https://php.net/manual/ja/memcached.getresultcode.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getResultCode(): int {}

		/**
		 * 最後に実行した操作の結果を説明したメッセージを返す。
		 * <p><b>Memcached::getResultMessage()</b>メソッドは、最後に実行した Memcached クラスのメソッドの結果コードの内容を説明した文字列を返します。</p>
		 * @return string <p>最後に実行した Memcached クラスの操作結果を説明したメッセージ</p>
		 * @link https://php.net/manual/ja/memcached.getresultmessage.php
		 * @since PECL memcached >= 1.0.0
		 */
		public function getResultMessage(): string {}

		/**
		 * キーとサーバーを関連付ける
		 * <p><b>Memcached::getServerByKey()</b> は、 <b>Memcached::&#42;ByKey()</b> 系の操作で指定された <code>server_key</code> に対応するサーバーを返します。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @return array <p>成功した場合に配列を返します。この配列には <i>host</i>、 <i>port</i> そして <i>weight</i> の三つのキーが含まれます。 失敗した場合は <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.getserverbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getServerByKey(string $server_key): array {}

		/**
		 * プール内のサーバーの一覧を取得する
		 * <p><b>Memcached::getServerList()</b> は、 サーバープール内のすべてのサーバーの一覧を返します。</p>
		 * @return array <p>サーバープール内のすべてのサーバーの一覧を返します。</p>
		 * @link https://php.net/manual/ja/memcached.getserverlist.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getServerList(): array {}

		/**
		 * サーバープールの統計情報を取得する
		 * <p><b>Memcached::getStats()</b> は、 すべての memcache サーバーの状態を含む配列を返します。 その詳細については、» memcache プロトコル の仕様を参照ください。</p>
		 * @return array <p>サーバーの統計情報の配列を返します。サーバーごとにひとつのエントリとなります。</p>
		 * @link https://php.net/manual/ja/memcached.getstats.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function getStats(): array {}

		/**
		 * サーバープールのバージョン情報を取得する
		 * <p><b>Memcached::getVersion()</b> は、全ての利用可能な memcached サーバーのバージョン情報を含んだ配列を返します。</p>
		 * @return array <p>memcached サーバーのバージョン情報の配列。サーバーひとつにつき配列の要素一つが割り当てられます。</p>
		 * @link https://php.net/manual/ja/memcached.getversion.php
		 * @since PECL memcached >= 0.1.5
		 */
		public function getVersion(): array {}

		/**
		 * 数値アイテムの値を増やす
		 * <p><b>Memcached::increment()</b> は、数値アイテムの値を <code>offset</code> で指定しただけ増やします。 アイテムの値が数値でない場合はエラーとなります。 アイテムが存在しない場合、<b>Memcached::increment()</b> は値を <code>initial_value</code> に設定します。</p>
		 * @param string $key <p>増やしたいアイテムのキー。</p>
		 * @param int $offset <p>値を増やしたい量。</p>
		 * @param int $initial_value <p>そのアイテムが存在しない場合に設定する値。</p>
		 * @param int $expiry <p>そのアイテムに設定する有効期限。</p>
		 * @return int <p>成功した場合にアイテムの新しい値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.increment.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function increment(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

		/**
		 * 指定したサーバー上にある数値アイテムの値を増やす
		 * <p><b>Memcached::incrementByKey()</b> は、数値アイテムの値を <code>offset</code> で指定しただけ増やします。 アイテムの値が数値でない場合はエラーとなります。 アイテムが存在しない場合、<b>Memcached::incrementByKey()</b> は値を <code>initial_value</code> に設定します。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param string $key <p>増やしたいアイテムのキー。</p>
		 * @param int $offset <p>値を増やしたい量。</p>
		 * @param int $initial_value <p>そのアイテムが存在しない場合に設定する値。</p>
		 * @param int $expiry <p>そのアイテムに設定する有効期限。</p>
		 * @return int <p>成功した場合にアイテムの新しい値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.incrementbykey.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function incrementByKey(string $server_key, string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int {}

		/**
		 * memcache への接続で持続的接続を使っているかどうかを調べる
		 * <p><b>Memcached::isPersistent()</b> は、 memcache サーバーへの接続が持続的接続かどうかを調べます。</p>
		 * @return bool <p>Memcache インスタンスが持続的接続を使っている場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.ispersistent.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function isPersistent(): bool {}

		/**
		 * 直近に作られたインスタンスかどうかを調べる
		 * <p><b>Memcached::isPristine()</b> は、その Memcache インスタンスが直近に作られたものかどうかを調べます。</p>
		 * @return bool <p>直近に作られたインスタンスである場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.ispristine.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function isPristine(): bool {}

		/**
		 * 既存のアイテムの前にデータを付加する
		 * <p><b>Memcached::prepend()</b> は、指定した文字列 <code>value</code> を既存のアイテムの前に付加します。 <code>value</code> を文字列に強制変換する理由は、 異なる型を付加した場合の挙動が定義されていないからです。</p><p><b>注意</b>:</p><p><b><code>Memcached::OPT_COMPRESSION</code></b> が有効になっている場合は、 この操作は失敗して警告が発せられます。 すでに圧縮されている可能性のあるデータの先頭に圧縮したデータを付加することはできないからです。</p>
		 * @param string $key <p>データを先頭に付加したいアイテムのキー。</p>
		 * @param string $value <p>先頭に付加する文字列。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>Memcached::getResultCode()</code> は、キーが存在しない場合に <b><code>Memcached::RES_NOTSTORED</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.prepend.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function prepend(string $key, string $value): bool {}

		/**
		 * 指定したサーバーで既存のアイテムの前にデータを付加する
		 * <p><b>Memcached::prependByKey()</b> は機能的に <code>Memcached::prepend()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param string $key <p>データを先頭に付加したいアイテムのキー。</p>
		 * @param string $value <p>先頭に付加する文字列。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>Memcached::getResultCode()</code> は、キーが存在しない場合に <b><code>Memcached::RES_NOTSTORED</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.prependbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function prependByKey(string $server_key, string $key, string $value): bool {}

		/**
		 * 開いている接続を閉じる
		 * <p><b>Memcached::quit()</b> は、memcache サーバーとの接続をすべて閉じます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.quit.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function quit(): bool {}

		/**
		 * 既存のキーのアイテムを入れ替える
		 * <p><b>Memcached::replace()</b> は <code>Memcached::set()</code> と同等ですが、キー <code>key</code> がサーバー上にない場合は失敗します。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param mixed $value <p>格納する値。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 キーが存在しない場合、 <code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_NOTSTORED</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.replace.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function replace(string $key, $value, int $expiration = NULL): bool {}

		/**
		 * 指定したサーバーで既存のキーのアイテムを入れ替える
		 * <p><b>Memcached::replaceByKey()</b> は機能的に <code>Memcached::replace()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。 これは、関連するキーを特定のサーバーに置き続けたいときなどに便利です。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param mixed $value <p>格納する値。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 キーが存在しない場合、 <code>Memcached::getResultCode()</code> は <b><code>Memcached::RES_NOTSTORED</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.replacebykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function replaceByKey(string $server_key, string $key, $value, int $expiration = NULL): bool {}

		/**
		 * サーバーリストからすべてのサーバーを消去する
		 * <p><b>Memcached::resetserverlist()</b> は、 サーバーリストからすべての memcache サーバーを削除し、サーバーリストを空にします。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.resetserverlist.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function resetServerList(): bool {}

		/**
		 * アイテムを格納する
		 * <p><b>Memcached::set()</b> は、 指定したキー <code>key</code> で memcache サーバー上に <code>value</code> を格納します。 <code>expiration</code> パラメータで、 この値をいつ有効期限切れにするのかを制御することができます。</p><p>値に指定できるのは、リソース型以外の PHP の任意の型です。 リソース型はシリアライズすることができないため、使用することができません。 <b><code>Memcached::OPT_COMPRESSION</code></b> オプションをオンにすると、 シリアライズしたデータを格納する前に圧縮を行います。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param mixed $value <p>格納する値。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.set.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function set(string $key, $value, int $expiration = NULL): bool {}

		/**
		 * 指定したサーバーにアイテムを格納する
		 * <p><b>Memcached::setByKey()</b> は機能的に <code>Memcached::set()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。 これは、関連するキーを特定のサーバーに置き続けたいときなどに便利です。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param mixed $value <p>格納する値。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.setbykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function setByKey(string $server_key, string $key, $value, int $expiration = NULL): bool {}

		/**
		 * 複数のアイテムを格納する
		 * <p><b>Memcached::setMulti()</b> は <code>Memcached::set()</code> と似ていますが、ひとつのキーのアイテムではなく <code>items</code> で設定した複数のアイテムに対して動作します。 有効期限 <code>expiration</code> は、すべてのアイテムに同時に適用されます。</p>
		 * @param array $items <p>サーバーに格納する キー/値 のペアの配列。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.setmulti.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function setMulti(array $items, int $expiration = NULL): bool {}

		/**
		 * 指定したサーバーで複数のアイテムを格納する
		 * <p><b>Memcached::setMultiByKey()</b> は機能的に <code>Memcached::setMulti()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。 これは、関連するキーを特定のサーバーに置き続けたいときなどに便利です。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param array $items <p>サーバーに格納する キー/値 のペアの配列。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.setmultibykey.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function setMultiByKey(string $server_key, array $items, int $expiration = NULL): bool {}

		/**
		 * Memcached のオプションの値を設定する
		 * <p>このメソッドは、Memcached のオプションの値を設定します。 libmemcached で定義されているオプションに対応するものもあれば、 この拡張モジュールに固有のものもあります。詳細な情報は Memcached 定数 を参照ください。</p><p>以下のオプションの値は、定数で指定する必要があります。</p><p><i>Memcached::OPT_HASH</i> には <i>Memcached::HASH_&#42;</i> の値を指定しなければなりません。</p><p><i>Memcached::OPT_DISTRIBUTION</i> には <i>Memcached::DISTRIBUTION_&#42;</i> の値を指定しなければなりません。</p>
		 * @param int $option
		 * @param mixed $value
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.setoption.php
		 * @since PECL memcached >= 0.1.0
		 */
		public function setOption(int $option, $value): bool {}

		/**
		 * Memcached のオプションの値を設定する
		 * <p><b>Memcached::setOptions()</b> は <code>Memcached::setOption()</code> と似ていますが、設定するオプションの配列を受け取ります。</p>
		 * @param array $options <p>オプションの連想配列。設定するオプションを連想配列のキーに、 そしてそのオプションの新しい値を連想配列の値に設定します。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/memcached.setoptions.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function setOptions(array $options): bool {}

		/**
		 * 認証用の資格情報を設定する
		 * <p><b>Memcached::setSaslAuthData()</b> は、ユーザー名とパスワードを設定します。 これらを、memcache サーバーでの SASL 認証に使います。</p><p><i>このメソッドを使えるのは、memcached 拡張モジュールを SASL サポートつきでビルドしたときだけです。</i> その方法については Memcached のインストール/設定 を参照ください。</p>
		 * @param string $username <p>認証で使うユーザー名。</p>
		 * @param string $password <p>認証で使うパスワード。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/memcached.setsaslauthdata.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function setSaslAuthData(string $username, string $password): void {}

		/**
		 * アイテムに新しい有効期限を設定する
		 * <p><b>Memcached::touch()</b> は、指定したキーに新しい有効期限を設定します。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.touch.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function touch(string $key, int $expiration): bool {}

		/**
		 * 指定したサーバー上のアイテムに新しい有効期限を設定する
		 * <p><b>Memcached::touchByKey()</b> は機能的に <code>Memcached::touch()</code> と同等です。しかし、自由形式の <code>server_key</code> を使用して、 <code>key</code> を特定のサーバーに関連付けることができます。</p>
		 * @param string $server_key <p>値を格納したりデータを取得したりするサーバーを表すキー。 アイテムの実際のキーをハッシュするかわりにサーバーのキーをハッシュして、どの memcached サーバーとやりとりするのか選びます。 これで、関連するアイテムを一つのサーバーにまとめられるようになり、マルチ操作の効率が上がります。</p>
		 * @param string $key <p>値の格納先のキー。</p>
		 * @param int $expiration <p>期限切れとなるまでの時間。デフォルトは 0。詳細な情報は有効期限 を参照ください。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 必要に応じて <code>Memcached::getResultCode()</code> を使用しましょう。</p>
		 * @link https://php.net/manual/ja/memcached.touchbykey.php
		 * @since PECL memcached >= 2.0.0
		 */
		public function touchByKey(string $server_key, string $key, int $expiration): bool {}
	}

	/**
	 * @link https://php.net/manual/ja/class.memcachedexception.php
	 * @since PECL memcached >= 0.1.0
	 */
	class MemcachedException extends \RuntimeException {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

}
