<?php



namespace {

	/**
	 * <p>MongoDB と PHP を接続します。</p>
	 * <p>このクラスは MongoClient を継承したもので、 いくつかの非推奨のメソッドが使えるようになります。</p>
	 * <p>過去との互換性のために、コンストラクタの <i>"w"</i> 引数のデフォルトを <i>0</i> にしており、書き込み操作のときにサーバー側での確認を必要としません。 詳細な情報は <code>MongoClient::__construct()</code> を参照ください。</p>
	 * <p>このクラスはバージョン 1.3.0 で <i>非推奨</i> になりました。 このクラスの機能に頼ってはいけません。代わりに MongoClient を使いましょう。</p>
	 * @link https://php.net/manual/ja/class.mongo.php
	 * @since PECL mongo >=0.9.0
	 */
	class Mongo extends \MongoClient {

		/**
		 * データベースを取得する
		 * <p>これは、データベースを取得するための一番すっきりとした方法です。 データベース名に特殊文字が含まれている場合は <b>Mongo::selectDB()</b> を使う必要があります。しかし、ほとんどの場合はこれで十分でしょう。</p>
		 * @param string $dbname <p>データベース名。</p>
		 * @return MongoDB <p>新しいデータベースオブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/mongo.get.php
		 * @since No version information available, might only be in Git
		 */
		public function __get(string $dbname): \MongoDB {}

		/**
		 * この接続の文字列表現
		 * @return string <p>この接続のホスト名とポートを返します。</p>
		 * @link https://php.net/manual/ja/mongo.tostring.php
		 * @since No version information available, might only be in Git
		 */
		public function __toString(): string {}

		/**
		 * 接続を閉じる
		 * <p><b>Mongo::close()</b> メソッドは、 データベースとの接続を強制的に閉じます。持続的接続を使っていても同じです。 通常は、<i>決して</i> このメソッドを使う必要はありません。</p>
		 * @param bool|string $connection <p>指定しなかったり <b><code>FALSE</code></b> を渡したりした場合は、 書き込み用に選ばれた接続を閉じます。単一ノード構成の場合はすべての接続を閉じることになりますが、 レプリカセットに接続している場合は、close() とするとプライマリサーバーへの接続 <i>だけ</i> を閉じることになります。</p> <p><b><code>TRUE</code></b> を渡すと、コネクションマネージャーが把握しているすべての接続を閉じます。 つまり、close を呼んだオブジェクトを作ったときの接続文字列に含まれていない接続も、 閉じる対象になる可能性があります。</p> <p>文字列を渡すと、このハッシュが指す接続だけを閉じます。 ハッシュとは接続の識別子のことで、<b>Mongo::getConnections()</b> を呼ぶと取得できます。</p>
		 * @return bool <p>接続を閉じるのに成功したかどうかを返します。</p>
		 * @link https://php.net/manual/ja/mongo.close.php
		 * @since No version information available, might only be in Git
		 */
		public function close($connection = NULL): bool {}

		/**
		 * データベースサーバーに接続する
		 * @return bool <p>接続に成功したかどうかを返します。</p>
		 * @link https://php.net/manual/ja/mongo.connect.php
		 * @since No version information available, might only be in Git
		 */
		public function connect(): bool {}

		/**
		 * データベースサーバーに接続する
		 * <p>これは内部的な関数であり、<i>決して</i> 自分で呼んではいけません。</p>
		 * @return bool <p>接続に成功したかどうかを返します。</p>
		 * @link https://php.net/manual/ja/mongo.connectutil.php
		 * @since PECL mongo >=0.9.0
		 */
		protected function connectUtil(): bool {}

		/**
		 * Drops a database [deprecated]
		 * <p>Use <code>MongoDB::drop()</code> instead.</p>
		 * @param mixed $db <p>The database to drop. Can be a MongoDB object or the name of the database.</p>
		 * @return array <p>Returns the database response.</p>
		 * @link https://php.net/manual/ja/mongoclient.dropdb.php
		 * @since PECL mongo >=1.3.0
		 */
		public function dropDB($db): array {}

		/**
		 * 開いているすべての接続の情報を返す
		 * <p>開いているすべての接続と、それぞれのサーバーの情報を配列で返します。</p>
		 * @return array <p>開いている接続に関する配列を返します。</p>
		 * @link https://php.net/manual/ja/mongoclient.getconnections.php
		 * @since PECL mongo >=1.3.0
		 */
		public static function getConnections(): array {}

		/**
		 * 関連づけられたすべてのホストの状態を更新する
		 * <p>このメソッドは、レプリカセットへの接続に対してのみ使えます。 レプリカセット内のすべてのホストの状態を返します。 レプリカセットがなければ、接続中のホストを含むひとつの要素だけを持つ配列を返します。</p><p>読み込みのセカンダリへの分散についての情報は、このマニュアルの 問い合わせの節 を参照ください。</p>
		 * @return array <p>セット内のホストに関する情報の配列を返します。 各ホストのホスト名、健康状態 (1 が最高)、状態 (1 はプライマリ、2 はセカンダリ、 0 はそれ以外)、サーバーへの ping にかかる時間、 そして最後に ping したのはいつなのかが含まれます。 たとえば、ローカルで稼働しているメンバ 3 台のレプリカセットだとこのようになります。</p>  <pre>array(2) { ["A:27017"]=&gt; array(4) { ["host"]=&gt; "A" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(2) ["ping"]=&gt; int(369) ["lastPing"]=&gt; int(1309470644) } ["B:27017"]=&gt; array(4) { ["host"]=&gt; "B" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(1) ["ping"]=&gt; int(139) ["lastPing"]=&gt; int(1309470644) } ["C:27017"]=&gt; array(4) { ["host"]=&gt; "C" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(2) ["ping"]=&gt; int(1012) ["lastPing"]=&gt; int(1309470644) } }</pre>
		 * @link https://php.net/manual/ja/mongo.gethosts.php
		 * @since No version information available, might only be in Git
		 */
		public function getHosts(): array {}

		/**
		 * 接続プールのサイズを取得する
		 * <p>この機能は、バージョン 1.2.3 からは<i>非推奨</i>となります。 この機能に依存してはいけません。かわりに <code>MongoPool::getSize()</code> を使いましょう。</p>
		 * @return int <p>現在のプールのサイズを返します。</p>
		 * @link https://php.net/manual/ja/mongo.getpoolsize.php
		 * @see Mongo::setPoolSize(), Mongo::poolDebug()
		 * @since PECL mongo >=1.2.0
		 */
		public static function getPoolSize(): int {}

		/**
		 * この接続の優先読み込みを取得する
		 * @return array <p>この関数は、優先読み込みに関する配列を返します。配列に含まれる内容は、<i>type</i> (優先読み込みモードを表す文字列。MongoClient の定数に対応)、そして <i>tagsets</i> (すべてのタグセット条件のリスト) です。タグセットを指定しなかった場合は、<i>tagsets</i> は存在しません。</p>
		 * @link https://php.net/manual/ja/mongoclient.getreadpreference.php
		 * @see MongoClient::setReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function getReadPreference(): array {}

		/**
		 * slaveOkay の読み込みに使われているアドレスを返す
		 * <p>これは、現在読み込みに使っているセカンダリのアドレスを探します。 このメソッドは読み込み専用です。オブジェクトの内部状態は一切変更しません。</p><p>データベースへの接続を作成した時点では、 ドライバはまだどのセカンダリを使うのかを決めていません。 したがって、接続後にこの関数を実行したときには、たとえ利用可能なセカンダリがあったとしても <b><code>NULL</code></b> を返します。slaveOkay を設定したクエリを初めて実行したときに、 ドライバがこの接続で使うセカンダリを選びます。 それ以降は、この関数は選択したセカンダリを返すようになります。</p><p>読み込みのセカンダリへの分散についての情報は、このマニュアルの 問い合わせの節 を参照ください。</p>
		 * @return string <p>この接続が読み込みに使っているセカンダリのアドレスを返します。</p><p>レプリカセットへの接続ではない場合や接続がまだ初期化されていない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongo.getslave.php
		 * @see MongoCursor::info()
		 * @since PECL mongo >=1.1.0
		 */
		public function getSlave(): string {}

		/**
		 * この接続の slaveOkay 設定を取得する
		 * <p>読み込みのセカンダリへの分散についての情報は、このマニュアルの 問い合わせの節 を参照ください。</p>
		 * @return bool <p>このインスタンスの slaveOkay の値を返します。</p>
		 * @link https://php.net/manual/ja/mongo.getslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function getSlaveOkay(): bool {}

		/**
		 * Get the write concern for this connection
		 * @return array <p>この関数は、書き込み確認を表す配列を返します。<i>w</i> の値はサーバーの台数を表す整数値かモードを表す文字列、そして <i>wtimeout</i> の値はサーバーが書き込み確認を待つ最大ミリ秒数です。</p>
		 * @link https://php.net/manual/ja/mongoclient.getwriteconcern.php
		 * @see MongoClient::setWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function getWriteConcern(): array {}

		/**
		 * サーバー上の指定したカーソルを削除する
		 * <p>サーバー上の、特定のカーソルを削除したくなることがあります。 通常は、未使用のまま 10 分が経過するとカーソルはタイムアウトします。 しかし、<code>MongoCursor::immortal()</code> を使って不死身のカーソルも作ることができ、 このカーソルは決してタイムアウトしません。 不死身のカーソルを削除できるようにするには、 <code>MongoCursor::info()</code> で得た情報を使ってこのメソッドを呼びます。</p>
		 * @param string $server_hash <p>カーソルの情報を持つ、サーバーのハッシュ。これは <code>MongoCursor::info()</code> で取得できます。</p>
		 * @param int|\MongoInt64 $id <p>削除したいカーソルの ID。64 ビットの整数か、あるいは MongoInt64 クラスのオブジェクトを指定します。 32 ビットプラットフォーム (および Windows) では、 MongoInt64 クラスのオブジェクトでしか指定できません。</p>
		 * @return bool <p>カーソルの削除処理を実行した場合に <b><code>TRUE</code></b>、 引数に何か問題があった場合 (<code>server_hash</code> が間違っている場合など) に <b><code>FALSE</code></b> を返します。 この返り値は、実際にカーソルが削除されたかどうかを表すもの<i>ではありません</i>。 サーバーからは、カーソルの削除に成功したかどうかの情報を得られないからです。</p>
		 * @link https://php.net/manual/ja/mongoclient.killcursor.php
		 * @since PECL mongo >=1.5.0
		 */
		public function killCursor(string $server_hash, $id): bool {}

		/**
		 * Lists all of the databases available
		 * @return array <p>Returns an associative array containing three fields. The first field is <i>databases</i>, which in turn contains an array. Each element of the array is an associative array corresponding to a database, giving th database's name, size, and if it's empty. The other two fields are <i>totalSize</i> (in bytes) and <i>ok</i>, which is 1 if this method ran successfully.</p>
		 * @link https://php.net/manual/ja/mongoclient.listdbs.php
		 * @since PECL mongo >=1.3.0
		 */
		public function listDBs(): array {}

		/**
		 * Returns information about all connection pools
		 * <p>This feature has been <i>DEPRECATED</i> as of version 1.2.3. Relying on this feature is highly discouraged. Please use <code>MongoPool::info()</code> instead.</p><p>Returns an array of information about all connection pools.</p>
		 * @return array <p>Each connection pool has an identifier, which starts with the host. For each pool, this function shows the following fields:</p>  <code>in use</code>   <p>The number of connections currently being used by MongoClient instances.</p>   <code>in pool</code>   <p>The number of connections currently in the pool (not being used).</p>   <code>remaining</code>   <p>The number of connections that could be created by this pool. For example, suppose a pool had 5 connections remaining and 3 connections in the pool. We could create 8 new instances of MongoClient before we exhausted this pool (assuming no instances of MongoClient went out of scope, returning their connections to the pool).</p> <p>A negative number means that this pool will spawn unlimited connections.</p> <p>Before a pool is created, you can change the max number of connections by calling <code>Mongo::setPoolSize()</code>. Once a pool is showing up in the output of this function, its size cannot be changed.</p>   <code>timeout</code>   <p>The socket timeout for connections in this pool. This is how long connections in this pool will attempt to connect to a server before giving up.</p>
		 * @link https://php.net/manual/ja/mongo.pooldebug.php
		 * @since PECL mongo >=1.2.0
		 */
		public function poolDebug(): array {}

		/**
		 * Gets a database collection
		 * @param string $db <p>The database name.</p>
		 * @param string $collection <p>The collection name.</p>
		 * @return MongoCollection <p>Returns a new collection object.</p>
		 * @link https://php.net/manual/ja/mongoclient.selectcollection.php
		 * @since PECL mongo >=1.3.0
		 */
		public function selectCollection(string $db, string $collection): \MongoCollection {}

		/**
		 * Gets a database
		 * @param string $name <p>The database name.</p>
		 * @return MongoDB <p>Returns a new database object.</p>
		 * @link https://php.net/manual/ja/mongoclient.selectdb.php
		 * @since PECL mongo >=1.3.0
		 */
		public function selectDB(string $name): \MongoDB {}

		/**
		 * Set the size for future connection pools
		 * <p>This method has been <i>DEPRECATED</i> as of version 1.2.3. Relying on this feature is highly discouraged. Please use <code>MongoPool::setSize()</code> instead.</p><p>Sets the max number of connections new pools will be able to create.</p>
		 * @param int $size <p>The max number of connections future pools will be able to create. Negative numbers mean that the pool will spawn an infinite number of connections.</p>
		 * @return bool <p>Returns the former value of pool size.</p>
		 * @link https://php.net/manual/ja/mongo.setpoolsize.php
		 * @see Mongo::getPoolSize(), Mongo::poolDebug()
		 * @since PECL mongo >=1.2.0
		 */
		public static function setPoolSize(int $size): bool {}

		/**
		 * この接続の優先読み込みを設定する
		 * @param string $read_preference <p>読み込みの優先モード。<b><code>MongoClient::RP_PRIMARY</code></b>、<b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>、<b><code>MongoClient::RP_SECONDARY</code></b>、<b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b> あるいは <b><code>MongoClient::RP_NEAREST</code></b> のいずれか。</p>
		 * @param array $tags <p>ゼロ個以上のタグセットの配列。各タグセット自体も配列で、レプリカセットのメンバーのタグにマッチさせる条件として使います。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongoclient.setreadpreference.php
		 * @see MongoClient::getReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): bool {}

		/**
		 * Change slaveOkay setting for this connection
		 * <p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @param bool $ok <p>If reads should be sent to secondary members of a replica set for all possible queries using this MongoClient instance.</p>
		 * @return bool <p>Returns the former value of slaveOkay for this instance.</p>
		 * @link https://php.net/manual/ja/mongo.setslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function setSlaveOkay(bool $ok = TRUE): bool {}

		/**
		 * Set the write concern for this connection
		 * @param mixed $w <p>書き込み確認。何台のサーバーに書き込めたら成功とみなすのかを表す整数値、あるいは文字列 ("majority" など) でモードを指定します。</p>
		 * @param int $wtimeout <p>サーバーが書き込み確認を待つ最大ミリ秒数。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongoclient.setwriteconcern.php
		 * @see MongoClient::getWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function setWriteConcern($w, int $wtimeout = NULL): bool {}

		/**
		 * slaveOkay 読み込み用の新しいセカンダリを選ぶ
		 * <p>これは、読み込み用に使う新しいセカンダリをランダムに選びます。 ドライバから自動的にコールされるので、このメソッドを使う必要はありません。このメソッドは <code>Mongo::getHosts()</code> (ホストの状態を更新) および <code>Mongo::getSlave()</code> (返り値を取得) をコールします。</p><p>読み込みのセカンダリへの分散についての情報は、このマニュアルの 問い合わせの節 を参照ください。</p>
		 * @return string <p>この接続が読み込みに使っているセカンダリのアドレスを返します。 アドレスはランダムに選ばれるので、前と同じアドレスになることもあります。 稼働中のセカンダリが 1 台だけ (あるいはプライマリだけ) の場合はひとつのアドレスしか返しません。</p><p>たとえば、プライマリ・セカンダリ・アービター (調停者) の 3 台からなるレプリカセットの場合、 このメソッドは常にセカンダリのアドレスを返します。セカンダリがダウンしているときは、 このメソッドは常にプライマリのアドレスを返します。プライマリもダウンしたときは このメソッドは例外をスローします。アービターが読み込みを処理できないからです。</p>
		 * @link https://php.net/manual/ja/mongo.switchslave.php
		 * @since PECL mongo >=1.1.0
		 */
		public function switchSlave(): string {}
	}

	/**
	 * <p>データベースからのバイナリデータを保存したり取得したりする際に使用するオブジェクトです。</p>
	 * <p>データベースに挿入できるひとつのオブジェクトの最大サイズは 16MB です。 それよりも大きいデータ (動画や音楽、キッシンジャーの自伝など) の場合は MongoGridFS を使います。16MB より小さなデータの場合は、 <b>MongoBinData</b> を使ってドキュメントに埋め込むほうが簡単でしょう。</p>
	 * <p>たとえば画像をドキュメントに埋め込むには、このようにします。</p>
	 * <p>このクラスには type フィールドがありますが、 現時点ではこのフィールドはドライバやデータベースに対して何の効果も及ぼしません。 7 種類の型が定義済み (以下のクラス定数を参照ください) です。 過去のバージョンとの互換性のため、デフォルトは <b><code>MongoBinData::BYTE_ARRAY</code></b> となっていますが、将来のバージョンでは <b><code>MongoBinData::GENERIC</code></b> に変わるかもしれません。 <code>MongoBinData::__construct()</code> できちんと型を定義するようにしましょう。</p>
	 * @link https://php.net/manual/ja/class.mongobindata.php
	 * @since PECL mongo >= 0.8.1
	 */
	class MongoBinData {

		/**
		 * @var int 汎用的なバイナリデータ。
		 * @link https://php.net/manual/ja/class.mongobindata.php
		 */
		const GENERIC = 0;

		/**
		 * @var int 関数。
		 * @link https://php.net/manual/ja/class.mongobindata.php
		 */
		const FUNC = 1;

		/**
		 * @var int 汎用的なバイナリデータ (非推奨。かわりに <b><code>MongoBinData::GENERIC</code></b> を使いましょう)。
		 * @link https://php.net/manual/ja/class.mongobindata.php
		 */
		const BYTE_ARRAY = 2;

		/**
		 * @var int 全体で一意な識別子 (非推奨。かわりに <b><code>MongoBinData::UUID_RFC4122</code></b> を使いましょう)。
		 * @link https://php.net/manual/ja/class.mongobindata.php
		 */
		const UUID = 3;

		/**
		 * @var int 全体で一意な識別子 (» RFC 4122 準拠)。
		 * @link https://php.net/manual/ja/class.mongobindata.php
		 */
		const UUID_RFC4122 = 4;

		/**
		 * @var int MD5。
		 * @link https://php.net/manual/ja/class.mongobindata.php
		 */
		const MD5 = 5;

		/**
		 * @var int ユーザー定義型。
		 * @link https://php.net/manual/ja/class.mongobindata.php
		 */
		const CUSTOM = 128;

		public $bin;

		public $type = 2;

		/**
		 * Creates a new binary data object
		 * <p>Creates a new binary data object.</p><p>There are seven types of binary data currently recognized by the BSON spec, which are defined as class constants. For backwards compatibility, the PHP driver uses <b><code>MongoBinData::BYTE_ARRAY</code></b> as the default; however, this may change to <b><code>MongoBinData::GENERIC</code></b> in the future. Users are encouraged to specify a type instead of relying on the default.</p>
		 * @param string $data <p>Binary data.</p>
		 * @param int $type <p>Data type.</p>
		 * @return self <p>Returns a new binary data object.</p>
		 * @link https://php.net/manual/ja/mongobindata.construct.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __construct(string $data, int $type = 0) {}

		/**
		 * The string representation of this binary data object
		 * @return string <p>Returns the string "&lt;Mongo Binary Data&gt;". To access the contents of a MongoBinData, use the <i>bin</i> field.</p>
		 * @link https://php.net/manual/ja/mongobindata.tostring.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>PHP と MongoDB の接続を管理します。</p>
	 * <p>このクラスを使って、接続を作ったり管理したりします。典型的な使いかたは、このようになります。</p>
	 * <p><b>例1 <b>MongoClient</b> の基本的な使いかた</b></p>
	 * <p>接続の作成に関する詳細な情報は、 <code>MongoClient::__construct()</code> および 接続 のセクションを参照ください。</p>
	 * @link https://php.net/manual/ja/class.mongoclient.php
	 * @since PECL mongo >=1.3.0
	 */
	class MongoClient {

		/**
		 * @var string PHP ドライバのバージョン。中間バージョンの場合は最後に "dev" や "+"、そして "-" がつくことがあります。
		 * @link https://php.net/manual/ja/class.mongoclient.php
		 */
		const VERSION = null;

		/**
		 * @var string ホストを指定しない場合に接続するホスト。
		 * @link https://php.net/manual/ja/class.mongoclient.php
		 */
		const DEFAULT_HOST = "localhost";

		/**
		 * @var int ポートを指定しない場合に接続するポート。
		 * @link https://php.net/manual/ja/class.mongoclient.php
		 */
		const DEFAULT_PORT = 27017;

		/**
		 * @var string プライマリのレプリカセットメンバーを 優先読み込み する。
		 * @link https://php.net/manual/ja/class.mongoclient.php
		 */
		const RP_PRIMARY = "primary";

		/**
		 * @var string プライマリのレプリカセットメンバーのほうを優先して 優先読み込み する。
		 * @link https://php.net/manual/ja/class.mongoclient.php
		 */
		const RP_PRIMARY_PREFERRED = "primaryPreferred";

		/**
		 * @var string セカンダリのレプリカセットメンバーを 優先読み込み する。
		 * @link https://php.net/manual/ja/class.mongoclient.php
		 */
		const RP_SECONDARY = "secondary";

		/**
		 * @var string セカンダリのレプリカセットメンバーの方を優先して 優先読み込み する。
		 * @link https://php.net/manual/ja/class.mongoclient.php
		 */
		const RP_SECONDARY_PREFERRED = "secondaryPreferred";

		/**
		 * @var string 最も近いレプリカセットメンバーを 優先読み込み する。
		 * @link https://php.net/manual/ja/class.mongoclient.php
		 */
		const RP_NEAREST = "nearest";

		/**
		 * @var boolean <p>このプロパティに <b><code>TRUE</code></b> が設定されるのは、データベース接続がオープンしている場合です。 それ以外の場合は <b><code>FALSE</code></b> が設定されます。 レプリカセットへの接続の場合は、現在の優先読み込みにマッチするノードに接続している場合にのみ <b><code>TRUE</code></b> となります。 このプロパティは、認証を考慮しません。</p> <p>このプロパティは、バージョン 1.5.0 以降で <i>非推奨</i> となりました。</p>
		 * @link https://php.net/manual/ja/class.mongoclient.php#mongoclient.props.connected
		 */
		public $connected = FALSE;

		/**
		 * @var string <p>このプロパティはもう使われておらず、値は <b><code>NULL</code></b> に設定されます。 バージョン 1.1.x より前のドライバでは、持続的接続を使う場合にここに文字列 (<i>"recycled"</i> や <i>"new"</i> など) が設定されていました。</p> <p>このプロパティは、バージョン 1.5.0 以降で <i>非推奨</i> となりました。</p>
		 * @link https://php.net/manual/ja/class.mongoclient.php#mongoclient.props.status
		 */
		public $status = NULL;

		protected $server = NULL;

		protected $persistent = NULL;

		/**
		 * Creates a new database connection object
		 * <p>If no parameters are passed, this connects to "localhost:27017" (or whatever was specified in php.ini for mongo.default_host and mongo.default_port).</p><p><code>server</code> should have the form:</p><p>The connection string always starts with <i>mongodb://</i>, to indicate it is a connection string in this form.</p><p>If <i>username</i> and <i>password</i> are specified, the constructor will attempt to authenticate the connection with the database before returning. Username and password are optional and must be followed by an <i>@</i>, if specified.</p><p>At least one host must be given (port optional, always defaulting to 27017) and as many hosts as desired may be connected to. Host names are comma-separated and the constructor will return successfully if it connected to at least one host. If it could not connect to any of the hosts, it will throw a MongoConnectionException. Please see the Replica Sets section for information on how to connect to Replica Sets.</p><p>If you specified a username and password, you may specify a database to authenticate with. If <i>db</i> is not specified, "admin" will be used.</p><p>An optional query string may be used to specify extra options. The same options are supported through the <code>options</code> array as well, and are therefore redescribed there. See the examples below on how to set those options.</p><p>One part of the options governs how the driver reads from secondary nodes in a replica set environment. Extra information on how these read preferences work is available as well through the read preferences documentation page.</p>
		 * @param string $server <p>The server name.</p>
		 * @param array $options <p>An array of options for the connection. Currently available options include:</p><ul> <li> <p><i>"authMechanism"</i></p> <p>Available mechanisms are:</p>    authMechanism Description Availability     MONGODB-CR Authenticate using Challenge Response mechanism. This is the default value. All MongoDB versions   MONGODB-X509 Authenticates using X509 certificates MongoDB 2.6. Only available when OpenSSL is enabled   PLAIN Authenticates using unencrypted plain username+password. Must be used over SSL connections. Generally used by MongoDB to login via 3rd party LDAP server MongoDB Enterprise 2.4. The Driver must be compiled against CyrusSASL2   GSSAPI Authenticates via kerberos systems MongoDB Enterprise 2.4. The Driver must be compiled against CyrusSASL2   SCRAM-SHA-1 Authenticates using SCRAM-SHA-1 MongoDB 3.0.    </li> <li> <p><i>"authSource"</i></p> <p>Should be set to the database name where the user is defined it.</p> </li> <li> <p><i>"connect"</i></p> <p>If the constructor should connect before returning. Default is <b><code>TRUE</code></b>. When set to <b><code>FALSE</code></b> the driver will <i>automatically</i> connect to the server whenever it is necessary to do a query. Alternatively, you can run <b>MongoClient::connect()</b> manually.</p>  <b>警告</b> <p>This option is not supported through the connection string.</p>  </li> <li> <p><i>"connectTimeoutMS"</i></p> <p>How long a connection can take to be opened before timing out in milliseconds. Defaults to <i>60000</i> (60 seconds).</p> <p>If <i>-1</i> is specified, no connection timeout will be applied and PHP will use default_socket_timeout.</p> </li> <li> <p><i>"db"</i></p> <p>The database to authenticate against can be specified here, instead of including it in the host list. This overrides a database given in the host list.</p> </li> <li> <p><i>"fsync"</i></p> <p>When <i>"fsync"</i> is set, all write operations will block until the database has flushed the changes to disk. This makes the write operations slower, but it guarantees that writes have succeeded and that the operations can be recovered in case of total system failure.</p> <p>If the MongoDB server has journaling enabled, this option is identical to <i>"journal"</i>. If journaling is not enabled, this option ensures that write operations will be synced to database files on disk.</p> <p><b>注意</b>:  If journaling is enabled, users are strongly encouraged to use the <i>"journal"</i> option instead of <i>"fsync"</i>. Do not use <i>"fsync"</i> and <i>"journal"</i> simultaneously, as that will result in an error. </p> </li> <li> <p><i>"journal"</i></p> <p>When <i>"journal"</i> is set, all write operations will block until the database has flushed the changes to the journal on disk. This makes the write operations slower, but it guarantees that writes have succeeded and that the operations can be recovered in case of total system failure.</p> <p><b>注意</b>:  If this option is used and journaling is disabled, MongoDB 2.6+ will raise an error and the write will fail; older server versions will simply ignore the option. </p> </li> <li> <p><i>"gssapiServiceName"</i></p> <p>Sets the » Kerberos service principal. Only applicable when authMechanism=GSSAPI. Defaults to "mongodb".</p> </li> <li> <p><i>"password"</i></p> <p>The password can be specified here, instead of including it in the host list. This is especially useful if a password has a "@" in it. This overrides a password set in the host list.</p> </li> <li> <p><i>"readPreference"</i></p> <p>Specifies the read preference type. Read preferences provide you with control from which secondaries data can be read from.</p> <p>Allowed values are: <b><code>MongoClient::RP_PRIMARY</code></b>, <b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>, <b><code>MongoClient::RP_SECONDARY</code></b>, <b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b> and <b><code>MongoClient::RP_NEAREST</code></b>.</p> <p>See the documentation on read preferences for more information.</p> </li> <li> <p><i>"readPreferenceTags"</i></p> <p>Specifies the read preference tags as an array of strings. Tags can be used in combination with the <i>readPreference</i> option to further control which secondaries data might be read from.</p> <p>See the documentation on read preferences for more information.</p> </li> <li> <p><i>"replicaSet"</i></p> <p>The name of the replica set to connect to. If this is given, the primary will be automatically be determined. This means that the driver may end up connecting to a server that was not even listed. See the replica set example below for details.</p> </li> <li> <p><i>"secondaryAcceptableLatencyMS"</i></p> <p>When reading from a secondary (using ReadPreferences), do not read from secondaries known to be more then <i>secondaryAcceptableLatencyMS</i> away from us. Defaults to <i>15</i></p> </li> <li> <p><i>"socketTimeoutMS"</i></p> <p>How long a socket operation (read or write) can take before timing out in milliseconds. Defaults to <i>30000</i> (30 seconds).</p> <p>If <i>-1</i> is specified, socket operations may block indefinitely. This option may also be set on a per-operation basis using <code>MongoCursor::timeout()</code> for queries or the <i>"socketTimeoutMS"</i> option for write methods.</p> <p><b>注意</b>:  This is a client-side timeout. If a write operation times out, there is no way to know if the server actually handled the write or not, as a MongoCursorTimeoutException will be thrown in lieu of returning a write result. </p> </li> <li> <p><i>"ssl"</i></p> <p>A boolean to specify whether you want to enable SSL for the connections to MongoDB. Extra options such as certificates can be set with SSL コンテキストオプション.</p> </li> <li> <p><i>"username"</i></p> <p>The username can be specified here, instead of including it in the host list. This is especially useful if a username has a ":" in it. This overrides a username set in the host list.</p> </li> <li> <p><i>"w"</i></p> <p>The <i>w</i> option specifies the Write Concern for the driver, which determines how long the driver blocks when writing. The default value is <i>1</i>.</p> <p>This option is applicable when connecting to both single servers and replica sets. A positive value controls how <i>many</i> nodes must acknowledge the write instruction before the driver continues. A value of <i>1</i> would require the single server or primary (in a replica set) to acknowledge the write operation. A value of <i>3</i> would cause the driver to block until the write has been applied to the primary as well as two secondary servers (in a replica set).</p> <p>A string value is used to control which tag sets are taken into account for write concerns. <i>"majority"</i> is special and ensures that the write operation has been applied to the majority (more than 50%) of the participating nodes.</p> </li> <li> <p><i>"wTimeoutMS"</i></p> <p>This option specifies the time limit, in milliseconds, for write concern acknowledgement. It is only applicable for write operations where <i>"w"</i> is greater than <i>1</i>, as the timeout pertains to replication. If the write concern is not satisfied within the time limit, a MongoCursorException will be thrown. A value of <i>0</i> may be specified to block indefinitely. The default value is <i>10000</i> (ten seconds).</p> </li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li> <p><i>"slaveOkay"</i></p> <p>Deprecated. Please use the read preference options.</p> </li> <li> <p><i>"timeout"</i></p> <p>Deprecated alias for <i>"connectTimeoutMS"</i>.</p> </li> <li> <p><i>"wTimeout"</i></p> <p>Deprecated alias for <i>"wTimeoutMS"</i>.</p> </li> </ul>
		 * @param array $driver_options <p>An array of options for the MongoDB driver. Options include setting connection context options for SSL or logging callbacks.</p><ul> <li> <p><i>"context"</i></p> <p>The Stream Context to attach to all new connections. This allows you for example to configure SSL certificates and are described at SSL context options. See the Connecting over SSL tutorial.</p> </li> </ul>
		 * @return self <p>Returns a new database connection object.</p>
		 * @link https://php.net/manual/ja/mongoclient.construct.php
		 * @since PECL mongo >=1.3.0
		 */
		public function __construct(string $server = "mongodb://localhost:27017", array $options  = 'array("connect" => TRUE)', array $driver_options = NULL) {}

		/**
		 * データベースを取得する
		 * <p>これは、データベースを取得するための一番すっきりとした方法です。 データベース名に特殊文字が含まれている場合は <b>Mongo::selectDB()</b> を使う必要があります。しかし、ほとんどの場合はこれで十分でしょう。</p>
		 * @param string $dbname <p>データベース名。</p>
		 * @return MongoDB <p>新しいデータベースオブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/mongo.get.php
		 * @since No version information available, might only be in Git
		 */
		public function __get(string $dbname): \MongoDB {}

		/**
		 * この接続の文字列表現
		 * @return string <p>この接続のホスト名とポートを返します。</p>
		 * @link https://php.net/manual/ja/mongo.tostring.php
		 * @since No version information available, might only be in Git
		 */
		public function __toString(): string {}

		/**
		 * 接続を閉じる
		 * <p><b>Mongo::close()</b> メソッドは、 データベースとの接続を強制的に閉じます。持続的接続を使っていても同じです。 通常は、<i>決して</i> このメソッドを使う必要はありません。</p>
		 * @param bool|string $connection <p>指定しなかったり <b><code>FALSE</code></b> を渡したりした場合は、 書き込み用に選ばれた接続を閉じます。単一ノード構成の場合はすべての接続を閉じることになりますが、 レプリカセットに接続している場合は、close() とするとプライマリサーバーへの接続 <i>だけ</i> を閉じることになります。</p> <p><b><code>TRUE</code></b> を渡すと、コネクションマネージャーが把握しているすべての接続を閉じます。 つまり、close を呼んだオブジェクトを作ったときの接続文字列に含まれていない接続も、 閉じる対象になる可能性があります。</p> <p>文字列を渡すと、このハッシュが指す接続だけを閉じます。 ハッシュとは接続の識別子のことで、<b>Mongo::getConnections()</b> を呼ぶと取得できます。</p>
		 * @return bool <p>接続を閉じるのに成功したかどうかを返します。</p>
		 * @link https://php.net/manual/ja/mongo.close.php
		 * @since No version information available, might only be in Git
		 */
		public function close($connection = NULL): bool {}

		/**
		 * データベースサーバーに接続する
		 * @return bool <p>接続に成功したかどうかを返します。</p>
		 * @link https://php.net/manual/ja/mongo.connect.php
		 * @since No version information available, might only be in Git
		 */
		public function connect(): bool {}

		/**
		 * Drops a database [deprecated]
		 * <p>Use <code>MongoDB::drop()</code> instead.</p>
		 * @param mixed $db <p>The database to drop. Can be a MongoDB object or the name of the database.</p>
		 * @return array <p>Returns the database response.</p>
		 * @link https://php.net/manual/ja/mongoclient.dropdb.php
		 * @since PECL mongo >=1.3.0
		 */
		public function dropDB($db): array {}

		/**
		 * 開いているすべての接続の情報を返す
		 * <p>開いているすべての接続と、それぞれのサーバーの情報を配列で返します。</p>
		 * @return array <p>開いている接続に関する配列を返します。</p>
		 * @link https://php.net/manual/ja/mongoclient.getconnections.php
		 * @since PECL mongo >=1.3.0
		 */
		public static function getConnections(): array {}

		/**
		 * 関連づけられたすべてのホストの状態を更新する
		 * <p>このメソッドは、レプリカセットへの接続に対してのみ使えます。 レプリカセット内のすべてのホストの状態を返します。 レプリカセットがなければ、接続中のホストを含むひとつの要素だけを持つ配列を返します。</p><p>読み込みのセカンダリへの分散についての情報は、このマニュアルの 問い合わせの節 を参照ください。</p>
		 * @return array <p>セット内のホストに関する情報の配列を返します。 各ホストのホスト名、健康状態 (1 が最高)、状態 (1 はプライマリ、2 はセカンダリ、 0 はそれ以外)、サーバーへの ping にかかる時間、 そして最後に ping したのはいつなのかが含まれます。 たとえば、ローカルで稼働しているメンバ 3 台のレプリカセットだとこのようになります。</p>  <pre>array(2) { ["A:27017"]=&gt; array(4) { ["host"]=&gt; "A" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(2) ["ping"]=&gt; int(369) ["lastPing"]=&gt; int(1309470644) } ["B:27017"]=&gt; array(4) { ["host"]=&gt; "B" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(1) ["ping"]=&gt; int(139) ["lastPing"]=&gt; int(1309470644) } ["C:27017"]=&gt; array(4) { ["host"]=&gt; "C" ["port"]=&gt; 27017 ["health"]=&gt; int(1) ["state"]=&gt; int(2) ["ping"]=&gt; int(1012) ["lastPing"]=&gt; int(1309470644) } }</pre>
		 * @link https://php.net/manual/ja/mongo.gethosts.php
		 * @since No version information available, might only be in Git
		 */
		public function getHosts(): array {}

		/**
		 * この接続の優先読み込みを取得する
		 * @return array <p>この関数は、優先読み込みに関する配列を返します。配列に含まれる内容は、<i>type</i> (優先読み込みモードを表す文字列。MongoClient の定数に対応)、そして <i>tagsets</i> (すべてのタグセット条件のリスト) です。タグセットを指定しなかった場合は、<i>tagsets</i> は存在しません。</p>
		 * @link https://php.net/manual/ja/mongoclient.getreadpreference.php
		 * @see MongoClient::setReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function getReadPreference(): array {}

		/**
		 * Get the write concern for this connection
		 * @return array <p>この関数は、書き込み確認を表す配列を返します。<i>w</i> の値はサーバーの台数を表す整数値かモードを表す文字列、そして <i>wtimeout</i> の値はサーバーが書き込み確認を待つ最大ミリ秒数です。</p>
		 * @link https://php.net/manual/ja/mongoclient.getwriteconcern.php
		 * @see MongoClient::setWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function getWriteConcern(): array {}

		/**
		 * サーバー上の指定したカーソルを削除する
		 * <p>サーバー上の、特定のカーソルを削除したくなることがあります。 通常は、未使用のまま 10 分が経過するとカーソルはタイムアウトします。 しかし、<code>MongoCursor::immortal()</code> を使って不死身のカーソルも作ることができ、 このカーソルは決してタイムアウトしません。 不死身のカーソルを削除できるようにするには、 <code>MongoCursor::info()</code> で得た情報を使ってこのメソッドを呼びます。</p>
		 * @param string $server_hash <p>カーソルの情報を持つ、サーバーのハッシュ。これは <code>MongoCursor::info()</code> で取得できます。</p>
		 * @param int|\MongoInt64 $id <p>削除したいカーソルの ID。64 ビットの整数か、あるいは MongoInt64 クラスのオブジェクトを指定します。 32 ビットプラットフォーム (および Windows) では、 MongoInt64 クラスのオブジェクトでしか指定できません。</p>
		 * @return bool <p>カーソルの削除処理を実行した場合に <b><code>TRUE</code></b>、 引数に何か問題があった場合 (<code>server_hash</code> が間違っている場合など) に <b><code>FALSE</code></b> を返します。 この返り値は、実際にカーソルが削除されたかどうかを表すもの<i>ではありません</i>。 サーバーからは、カーソルの削除に成功したかどうかの情報を得られないからです。</p>
		 * @link https://php.net/manual/ja/mongoclient.killcursor.php
		 * @since PECL mongo >=1.5.0
		 */
		public function killCursor(string $server_hash, $id): bool {}

		/**
		 * Lists all of the databases available
		 * @return array <p>Returns an associative array containing three fields. The first field is <i>databases</i>, which in turn contains an array. Each element of the array is an associative array corresponding to a database, giving th database's name, size, and if it's empty. The other two fields are <i>totalSize</i> (in bytes) and <i>ok</i>, which is 1 if this method ran successfully.</p>
		 * @link https://php.net/manual/ja/mongoclient.listdbs.php
		 * @since PECL mongo >=1.3.0
		 */
		public function listDBs(): array {}

		/**
		 * Gets a database collection
		 * @param string $db <p>The database name.</p>
		 * @param string $collection <p>The collection name.</p>
		 * @return MongoCollection <p>Returns a new collection object.</p>
		 * @link https://php.net/manual/ja/mongoclient.selectcollection.php
		 * @since PECL mongo >=1.3.0
		 */
		public function selectCollection(string $db, string $collection): \MongoCollection {}

		/**
		 * Gets a database
		 * @param string $name <p>The database name.</p>
		 * @return MongoDB <p>Returns a new database object.</p>
		 * @link https://php.net/manual/ja/mongoclient.selectdb.php
		 * @since PECL mongo >=1.3.0
		 */
		public function selectDB(string $name): \MongoDB {}

		/**
		 * この接続の優先読み込みを設定する
		 * @param string $read_preference <p>読み込みの優先モード。<b><code>MongoClient::RP_PRIMARY</code></b>、<b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>、<b><code>MongoClient::RP_SECONDARY</code></b>、<b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b> あるいは <b><code>MongoClient::RP_NEAREST</code></b> のいずれか。</p>
		 * @param array $tags <p>ゼロ個以上のタグセットの配列。各タグセット自体も配列で、レプリカセットのメンバーのタグにマッチさせる条件として使います。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongoclient.setreadpreference.php
		 * @see MongoClient::getReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): bool {}

		/**
		 * Set the write concern for this connection
		 * @param mixed $w <p>書き込み確認。何台のサーバーに書き込めたら成功とみなすのかを表す整数値、あるいは文字列 ("majority" など) でモードを指定します。</p>
		 * @param int $wtimeout <p>サーバーが書き込み確認を待つ最大ミリ秒数。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongoclient.setwriteconcern.php
		 * @see MongoClient::getWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function setWriteConcern($w, int $wtimeout = NULL): bool {}
	}

	/**
	 * <p>データベース用の JavaScript コードを表します。</p>
	 * <p>MongoCode オブジェクトはふたつの部分からなります。 コード文字列、そしてオプションのスコープです。 コード文字列は JavaScript として正しい形式でなければなりません。 スコープは、変数名とその値のペアからなる連想配列です。</p>
	 * @link https://php.net/manual/ja/class.mongocode.php
	 * @since PECL mongo >=0.8.3
	 */
	class MongoCode {

		/**
		 * 新しいコードオブジェクトを作成する
		 * @param string $code <p>コード文字列。</p>
		 * @param array $scope <p>このコードで使用するスコープ。</p>
		 * @return self <p>新しいコードオブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/mongocode.construct.php
		 * @since PECL mongo >= 0.8.3
		 */
		public function __construct(string $code, array $scope = array()) {}

		/**
		 * このコードを文字列で返す
		 * @return string <p>このコードを返します。スコープは返しません。</p>
		 * @link https://php.net/manual/ja/mongocode.tostring.php
		 * @since PECL mongo >= 0.8.3
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>MongoDB のコレクションを表します。</p>
	 * <p>コレクション名は ASCII セット内の任意の文字を使用できます。たとえば ""、"..."、"my collection" そして "&#42;&amp;#@" といった名前をつけることができます。</p>
	 * <p>ユーザー定義のコレクション名には $ 記号を含めることができません。システムコレクションの中には $ を名前に使うものがあります (local.oplog.$main など) が、 これは予約文字です。名前に $ を含むコレクションを作ったり使ったりしようとすると、 MongoDB が assert を出します。</p>
	 * @link https://php.net/manual/ja/class.mongocollection.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoCollection {

		/**
		 * @var int ソートやインデックス作成時に使用する「昇順」。
		 * @link https://php.net/manual/ja/class.mongocollection.php
		 */
		const ASCENDING = 1;

		/**
		 * @var int ソートやインデックス作成時に使用する「降順」。
		 * @link https://php.net/manual/ja/class.mongocollection.php
		 */
		const DESCENDING = -1;

		/**
		 * @var MongoDB <p>このコレクションの "親" データベース。</p>
		 * @link https://php.net/manual/ja/class.mongocollection.php#mongocollection.props.db
		 */
		public $db = NULL;

		/**
		 * @var integer <p>成功を返す前に変更をレプリケートするサーバーの数。 この値は親データベースから引き継ぎます。 MongoDB クラスのマニュアルに、 <i>w</i> の挙動についてのより詳細な説明があります。</p>
		 * @link https://php.net/manual/ja/class.mongocollection.php#mongocollection.props.w
		 */
		public $w;

		/**
		 * @var integer <p><i>$this-&gt;w</i> のレプリケーションが完了するまでに待つミリ秒数。 この値は親データベースから引き継ぎます。 MongoDB クラスのマニュアルに、 <i>wtimeout</i> の挙動についてのより詳細な説明があります。</p>
		 * @link https://php.net/manual/ja/class.mongocollection.php#mongocollection.props.wtimeout
		 */
		public $wtimeout;

		/**
		 * 新しいコレクションを作成する
		 * @param \MongoDB $db
		 * @param string $name
		 * @return self <p>新しいコレクションオブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoDB $db, string $name) {}

		/**
		 * コレクションを取得する
		 * <p>ドット区切りの名前でコレクションを取得する簡潔な構文です。 コレクション名に特殊な文字が含まれている場合は <code>MongoDB::selectCollection()</code> を使います。</p>
		 * @param string $name <p>コレクション名の中の次の文字列。</p>
		 * @return MongoCollection <p>コレクションを返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.get.php
		 * @since PECL mongo >=1.0.2
		 */
		public function __get(string $name): \MongoCollection {}

		/**
		 * このコレクションの文字列表現
		 * @return string <p>このコレクションの完全な名前を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.--tostring.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __toString(): string {}

		/**
		 * aggregation フレームワークを使って集約する
		 * <p>MongoDB の » aggregation フレームワーク を使うと、値を集約するときに MapReduce を使わずに済ませることができます。 MapReduce は強力な手段ですが、単にフィールドの合計や平均を調べたいだけといった単純な集約に使うには ちょっと大げさすぎることもあります。</p><p>このメソッドには、任意の数のパイプライン演算子を指定することもできるし、 パイプラインを構成する演算子の配列を一つだけ渡すこともできます。</p>
		 * @param array $pipeline <p>パイプライン演算子の配列。</p>
		 * @param array $options <p>集約コマンドのオプション。以下のオプションが使えます。</p> <ul> <li> <p><i>"allowDiskUse"</i></p> <p>集約時に、テンポラリファイルへの書き込みを許可します。</p> </li> <li> <p><i>"cursor"</i></p> <p>カーソルオブジェクトの作成を制御するオプション。 このオプションは、コマンドの実行結果として返されるドキュメントを、 MongoCommandCursor を作るのに適した形式にします。 このオプションを使う必要がある場合は、 <code>MongoCollection::aggregateCursor()</code> を使うことを検討しましょう。</p> </li> <li> <p><i>"explain"</i></p> <p>パイプライン処理の情報を返します。</p> </li> <li> <p><i>"maxTimeMS"</i></p> <p>サーバー上で操作を行う累積時間の制限 (アイドル時間を含まない) を、ミリ秒単位で指定します。この時間内にサーバー側の操作が完了しなければ、MongoExecutionTimeoutException をスローします。</p> </li> </ul>
		 * @return array <p>集約の結果を配列で返します。成功した場合は ok が <i>1</i> になり、失敗した場合は <i>0</i> になります。</p>
		 * @link https://php.net/manual/ja/mongocollection.aggregate.php
		 * @since PECL mongo >=1.3.0
		 */
		public function aggregate(array $pipeline, array $options = NULL): array {}

		/**
		 * Execute an aggregation pipeline command and retrieve results through a cursor
		 * <p>With this method you can execute Aggregation Framework pipelines and retrieve the results through a cursor, instead of getting just one document back as you would with <code>MongoCollection::aggregate()</code>. This method returns a MongoCommandCursor object. This cursor object implements the Iterator interface just like the MongoCursor objects that are returned by the <code>MongoCollection::find()</code> method.</p><p><b>注意</b>:  The resulting MongoCommandCursor will inherit this collection's read preference. <code>MongoCommandCursor::setReadPreference()</code> may be used to change the read preference before iterating on the cursor. </p>
		 * @param array $command
		 * @param array $options <p>Options for the aggregation command. Valid options include:</p> <ul> <li> <p><i>"allowDiskUse"</i></p> <p>Allow aggregation stages to write to temporary files</p> </li> <li> <p><i>"cursor"</i></p> <p>It is possible to configure how many initial documents the server should return with the first result set. The default initial batch size is <i>101</i>. You can change it by adding the <i>batchSize</i> option:</p>  <code> &lt;&#63;php<br>$collection-&gt;aggregateCursor( <br>    $pipeline,<br>    [ "cursor" =&gt; [ "batchSize" =&gt; 4 ] ]<br>);  </code>  <p>This option only configures the size of the first batch. To configure the size of future batches, please use the <code>MongoCommandCursor::batchSize()</code> method on the returned MongoCommandCursor object.</p> </li> <li> <p><i>"explain"</i></p> <p>Return information on the processing of the pipeline. This option may cause the command to return a result document that is unsuitable for constructing a MongoCommandCursor. If you need to use this option, you should consider using <code>MongoCollection::aggregate()</code>.</p> </li> <li> <p><i>"maxTimeMS"</i></p> <p>サーバー上で操作を行う累積時間の制限 (アイドル時間を含まない) を、ミリ秒単位で指定します。この時間内にサーバー側の操作が完了しなければ、MongoExecutionTimeoutException をスローします。</p> </li> </ul>
		 * @return MongoCommandCursor <p>Returns a MongoCommandCursor object. Because this implements the Iterator interface you can iterate over each of the results as returned by the command query. The MongoCommandCursor also implements the MongoCursorInterface interface which adds the <code>MongoCommandCursor::batchSize()</code>, <code>MongoCommandCursor::dead()</code>, <code>MongoCommandCursor::info()</code> methods.</p>
		 * @link https://php.net/manual/ja/mongocollection.aggregatecursor.php
		 * @since PECL mongo >=1.5.0
		 */
		public function aggregateCursor(array $command, array $options = NULL): \MongoCommandCursor {}

		/**
		 * 複数のドキュメントをコレクションに追加する
		 * @param array $a <p>配列の配列あるいはオブジェクト。オブジェクトを使う場合は、 protected や private のプロパティは保持できません。</p>  <p><b>注意</b>:</p> <p>追加するドキュメントが <i>_id</i> のキーあるいはプロパティを持たない場合は、 新しい MongoId インスタンスを作ってそれを代入します。 この挙動に関する詳しい情報は <code>MongoCollection::insert()</code> を参照ください。</p>
		 * @param array $options <p>追加操作群についてのオプションの配列。 現在利用可能なオプションは、以下のとおりです。</p><ul> <li> <p><i>"continueOnError"</i></p> <p>boolean で、デフォルトは <b><code>FALSE</code></b> です。 これを設定すると、(ID の重複などが原因で) 一括インサートが失敗したときにもデータベースは処理を続行します。 その結果、一括インサート処理の挙動が一件ごとのインサートを繰り返したときと同じになります。 ただし、<code>MongoDB::lastError()</code> をコールすると、 直近の操作が失敗していなくても何か失敗があればエラーが設定されています。 複数のエラーが発生したときには、 <code>MongoDB::lastError()</code> が返すのは最後に発生したエラーだけとなります。</p>  <p><b>注意</b>:</p> <p><i>continueOnError</i> は、あくまでもデータベース側のエラーにしか影響を及ぼさないことに注意しましょう。 ドキュメントそのものに問題があるもの (キーの名前が空になっているなど) をインサートしようとすると、 ドライバーがこのエラーを検出してデータベースへの送信を止めてしまうので、処理はそこで終わってしまいます。 ドライバー側で検出されるドキュメントのエラーに関しては、 <i>continueOnError</i> は何もできません。</p>  </li> <li> <p><i>"fsync"</i></p> <p>Boolean 型で、デフォルトは <b><code>FALSE</code></b> です。 ジャーナリングが有効な場合、これは <i>"j"</i> とまったく同じ動きをします。 ジャーナリングが有効でない場合は、追加をディスク上のデータベースファイルに同期させるまで成功したと見なさないようになります。 <b><code>TRUE</code></b> にすると確認つき書き込みが暗黙のうちに設定され、<i>"w"</i> の値を <i>0</i> にします。</p> <p><b>注意</b>: ジャーナリングが有効な場合は、<i>"fsync"</i> のかわりに <i>"j"</i> を使いましょう。 <i>"fsync"</i> と <i>"j"</i> を同時に指定すると、エラーになります。 </p> </li> <li> <p><i>"j"</i></p> <p>デフォルトは <b><code>FALSE</code></b> です。これを指定すると、追加をジャーナルに同期させるまで成功したと見なさないようになります。<b><code>TRUE</code></b> にすると確認付き書き込みと見なされ、<i>"w"</i> の設定を <i>0</i> に上書きします。</p> <p><b>注意</b>: このオプションを使っているときにジャーナリングを無効にすると、MongoDB 2.6 以降ではエラーが発生して書き込みに失敗します。古いバージョンのサーバーでは、単純にオプションの指定を無視します。</p> </li> <li> <p><i>"socketTimeoutMS"</i></p> <p>このオプションは、ソケット通信の制限時間を、ミリ秒単位で指定します。この時間内にサーバーからの反応がなければ、MongoCursorTimeoutException をスローします。この場合、サーバー側で書き込み処理が行われたのかどうかを判断できなくなります。<i>-1</i> を指定すると、永遠にブロックします。MongoClient のデフォルト値は <i>30000</i> (30 秒) です。</p> </li> <li> <p><i>"w"</i></p> <p>WriteConcerns を参照ください。MongoClient でのデフォルト値は <i>1</i> です。</p> </li> <li> <p><i>"wTimeoutMS"</i></p> <p>このオプションは、書き込み確認を待つ制限時間をミリ秒単位で指定します。これが書き込み操作に適用されるのは、<i>"w"</i> が <i>1</i> より大きい場合のみです。というのも、タイムアウトはレプリケーションに関する機能だからです。この時間内に書き込み確認ができなかった場合は MongoCursorException をスローします。<i>0</i> を指定すると、永遠にブロックし続けます。MongoClient でのデフォルトは <i>10000</i> ミリ秒 (10 秒) です。</p> </li> </ul> <p>以下のオプションは廃止予定です。使ってはいけません。</p><ul> <li> <p><i>"safe"</i></p> <p>非推奨。write concern の <i>w</i> オプションを使いましょう。</p> </li> <li> <p><i>"timeout"</i></p> <p>非推奨。<i>"socketTimeoutMS"</i> のエイリアス。</p> </li> <li> <p><i>"wtimeout"</i></p> <p>廃止予定。<i>"wTimeoutMS"</i> のエイリアスです。</p> </li> </ul>
		 * @return mixed <p><i>w</i> を設定して書き込みの確認をするようにしている場合は、 追加の状況 ("ok") と発生したエラー ("err") を連想配列で返します。設定されていないときは、一括追加の送信に成功すれば <b><code>TRUE</code></b>、失敗すれば <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.batchinsert.php
		 * @see MongoCollection::insert(), MongoCollection::update(), MongoCollection::find(), MongoCollection::remove()
		 * @since PECL mongo >=0.9.0
		 */
		public function batchInsert(array $a, array $options = array()) {}

		/**
		 * コレクション内のドキュメント数を数える
		 * @param array $query <p>マッチさせるフィールドを持つ連想配列あるいはオブジェクト。</p>
		 * @param array $options <p>インデックス作成用のオプションの配列。現在使えるオプションは、以下のとおりです。</p>   名前 型 説明     hint <code>mixed</code>  <p>クエリに用いるインデックス。文字列を渡すと、インデックス名として扱います。 配列やオブジェクトを渡した場合は、インデックスの作成に使う仕様 (<code>MongoCollection::createIndex()</code> の最初の引数) に対応します。</p> このオプションは、MongoDB 2.6 以降で使えます。    limit <code>integer</code> マッチしたドキュメントを返す件数の上限。   maxTimeMS <code>integer</code>  <p>累積処理時間 (待ち時間は含まない) の上限を、ミリ秒単位で指定します。 この時間内に処理が完了しなかった場合は、 MongoExecutionTimeoutException をスローします。</p> このオプションは、MongoDB 2.6 以降で使えます。    skip <code>integer</code> マッチしたドキュメントのうち、結果を返す前に読み飛ばすドキュメントの数。
		 * @return int <p>query にマッチするドキュメントの数を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.count.php
		 * @since PECL mongo >=0.9.0
		 */
		public function count(array $query = array(), array $options = array()): int {}

		/**
		 * データベースへの参照を作成する
		 * @param mixed $document_or_id <p>配列あるいはオブジェクトを渡した場合は、その <i>_id</i> フィールドを参照 ID として利用します。 MongoId あるいはスカラーを渡した場合は、 それ自体を参照 ID として利用します。</p>
		 * @return array <p>データベース参照配列を返します。</p><p><i>_id</i> フィールドがない配列を <i>document_or_id</i> に渡した場合は、<b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.createdbref.php
		 * @since PECL mongo >=0.9.0
		 */
		public function createDBRef($document_or_id): array {}

		/**
		 * Creates an index on the specified field(s) if it does not already exist
		 * <p>Creates an index on the specified field(s) if it does not already exist. Fields may be indexed with a direction (e.g. ascending or descending) or a special type (e.g. text, geospatial, hashed).</p><p><b>注意</b>:</p><p>This method will use the » createIndexes database command when communicating with MongoDB 2.6+. For previous database versions, the method will perform an insert operation on the special <i>system.indexes</i> collection.</p>
		 * @param array $keys <p>An array specifying the index's fields as its keys. For each field, the value is either the index direction or » index type. If specifying direction, specify <i>1</i> for ascending or <i>-1</i> for descending.</p>
		 * @param array $options <p>An array of options for the index creation. We pass all given options straight to the server, but a non-exhaustive list of currently available options include:</p><ul> <li> <p><i>"unique"</i></p> <p><b><code>TRUE</code></b> を指定すると、一意なインデックスを作ります。デフォルト値は <b><code>FALSE</code></b> です。このオプションを使えるのは、昇順もしくは降順のインデックスだけです。</p>  <p><b>注意</b>:</p> <p>MongoDB がフィールドをインデックスするとき、もしそのフィールドに値を含まないドキュメントがあれば、<b><code>NULL</code></b> 値をインデックスします。このフィールドを含まないドキュメントが複数あった場合、一意なインデックスは、最初に出現したドキュメント以外を受け付けません。これを防ぐには <i>"sparse"</i> オプションを使います。このオプションを指定すれば、インデックス対象のフィールドが存在しないドキュメントはインデックスしなくなります。</p>  </li> <li> <p><i>"sparse"</i></p> <p><b><code>TRUE</code></b> を指定すると、疎なインデックスを作ります。これは、指定したフィールドを含むドキュメントだけをインデックスします。デフォルト値は <b><code>FALSE</code></b> です。</p> </li> <li> <p><i>"expireAfterSeconds"</i></p> <p>このオプションの値に指定するのは、ドキュメントを有効期限切れとみなしてコレクションから自動削除するまでの秒数です。このオプションが使えるのは、単一フィールドインデックスで、フィールドに MongoDate の値を含む場合のみです。</p>  <p><b>注意</b>:</p> <p>この機能が使えるのは、MongoDB 2.2 以降です。詳細は » Expire Data from Collections by Setting TTL を参照ください。</p>  </li> <li> <p><i>"name"</i></p> <p>オプションの、インデックスを一意に特定するための名前。</p>  <p><b>注意</b>:</p> <p>ドライバーがデフォルトで生成するインデックス名は、インデックスのフィールドと、並び順あるいは型に基づくものです。たとえば、複合インデックス <i>array("x" =&gt; 1, "y" =&gt; -1)</i> の名前は <i>"x_1_y_-1"</i> であり、地理空間インデックス <i>array("loc" =&gt; "2dsphere")</i> の名前は <i>"loc_2dsphere"</i> となります。多数のフィールドからなるインデックスの場合、自動生成される名前が MongoDB の » インデックス名の制限 を超えてしまう可能性があります。<i>"name"</i> オプションは、そんな場合に短い名前を用意するときなどに使えます。</p>  </li> <li> <p><i>"background"</i></p> <p>Builds the index in the background so that building an index does <i>not</i> block other database activities. Specify <b><code>TRUE</code></b> to build in the background. The default value is <b><code>FALSE</code></b>.</p>  <b>警告</b><p>Prior to MongoDB 2.6.0, index builds on secondaries were executed as foreground operations, irrespective of this option. See » Building Indexes with Replica Sets for more information.</p>  </li> <li> <p><i>"socketTimeoutMS"</i></p> <p>このオプションは、ソケット通信の制限時間を、ミリ秒単位で指定します。この時間内にサーバーからの反応がなければ、MongoCursorTimeoutException をスローします。この場合、サーバー側で書き込み処理が行われたのかどうかを判断できなくなります。<i>-1</i> を指定すると、永遠にブロックします。MongoClient のデフォルト値は <i>30000</i> (30 秒) です。</p> </li> </ul> <p>The following option may be used with MongoDB 2.6+:</p><ul> <li> <p><i>"maxTimeMS"</i></p> <p>サーバー上で操作を行う累積時間の制限 (アイドル時間を含まない) を、ミリ秒単位で指定します。この時間内にサーバー側の操作が完了しなければ、MongoExecutionTimeoutException をスローします。</p> </li> </ul> <p>The following options may be used with MongoDB versions before 2.8:</p><ul> <li> <p><i>"dropDups"</i></p> <p><b><code>TRUE</code></b> を指定すると、一意なインデックスを強制的に作成します。このとき、コレクション内でキーの値が重複してしまう可能性があります。MongoDB は最初に出現したキーをインデックスし、それ以降に出現する同じキーのすべてのドキュメントを削除します。デフォルト値は <b><code>FALSE</code></b> です。</p>  <b>警告</b><p><i>"dropDups"</i> はデータベースのデータを削除することがあるので、使う際には十分な注意が必要です。</p>   <p><b>注意</b>:</p> <p>このオプションは、MongoDB 2.8 以降には対応していません。コレクションに値の重複がある場合は、インデックスの作成に失敗します。</p>  </li> </ul> <p>The following options may be used with MongoDB versions before 2.6:</p><ul> <li> <p><i>"w"</i></p> <p>WriteConcerns を参照ください。MongoClient でのデフォルト値は <i>1</i> です。</p> </li> <li> <p><i>"wTimeoutMS"</i></p> <p>このオプションは、書き込み確認を待つ制限時間をミリ秒単位で指定します。これが書き込み操作に適用されるのは、<i>"w"</i> が <i>1</i> より大きい場合のみです。というのも、タイムアウトはレプリケーションに関する機能だからです。この時間内に書き込み確認ができなかった場合は MongoCursorException をスローします。<i>0</i> を指定すると、永遠にブロックし続けます。MongoClient でのデフォルトは <i>10000</i> ミリ秒 (10 秒) です。</p> </li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li> <p><i>"safe"</i></p> <p>非推奨。write concern の <i>w</i> オプションを使いましょう。</p> </li> <li> <p><i>"timeout"</i></p> <p>非推奨。<i>"socketTimeoutMS"</i> のエイリアス。</p> </li> <li> <p><i>"wtimeout"</i></p> <p>廃止予定。<i>"wTimeoutMS"</i> のエイリアスです。</p> </li> </ul>
		 * @return bool <p>Returns an array containing the status of the index creation. The array contains whether the operation succeeded (<i>"ok"</i>), the number of indexes before and after the operation (<i>"numIndexesBefore"</i> and <i>"numIndexesAfter"</i>), and whether the collection that the index belongs to has been created (<i>"createdCollectionAutomatically"</i>). If the index already existed and did not need to be created, a <i>"note"</i> field may be present in lieu of <i>"numIndexesAfter"</i>.</p><p>With MongoDB 2.4 and earlier, a status document is only returned if the write concern is at least <i>1</i>. Otherwise, <b><code>TRUE</code></b> is returned. The fields in the status document are different, except for the <i>"ok"</i> field, which signals whether the index creation was successful. Additional fields are described in the documentation for <code>MongoCollection::insert()</code>.</p>
		 * @link https://php.net/manual/ja/mongocollection.createindex.php
		 * @since PECL mongo >=1.5.0
		 */
		public function createIndex(array $keys, array $options = array()): bool {}

		/**
		 * コレクションからインデックスを削除する
		 * <p>このメソッドは、以下と同等です。</p><p>インデックスの作成時に、一意な名前が与えられます。この名前は一般に、 キーの名前や方向の組み合わせからドライバが自動生成します。しかし自分で名前をつけることも可能で、 その場合は <code>MongoCollection::createIndex()</code> の <i>"name"</i> オプションを利用します。</p><p>残念ながら、<b>MongoCollection::deleteIndex()</b> は、 独自に名前を設定したインデックスを削除できません。過去のバージョンとの互換性の問題があるからです。 文字列を指定した場合はフィールド名とみなされ、そのフィールドの昇順と解釈されます。 つまり、引数が <i>"x"</i> だった場合は <i>"x_1"</i> という名前を利用します。 配列やオブジェクトを指定した場合は、 <code>MongoCollection::createIndex()</code> に同じものを渡した場合と同様にして名前を生成します。</p><p>自分で名前を設定したインデックスを削除するには、 データベースコマンド <i>deleteIndexes</i> を使う必要があります。 たとえば、"myIndex" というインデックスを PHP ドライバで削除するには、次のようにします。</p><p>PHP ドライバで使うインデックスの名前を調べるには、データベースの <i>system.indexes</i> コレクションを検索して、結果の <i>"name"</i> フィールドを調べます。 <i>"ns"</i> フィールドは、そのインデックスが属するコレクションを表します。</p>
		 * @param string|array $keys <p>インデックスのフィールドをキーとする配列。 各フィールドの値は、インデックスの方向あるいは » インデックスの型 を表します。 方向を指定する場合は、<i>1</i> が昇順で <i>-1</i> が降順を表します。</p> <p>文字列を指定した場合はフィールド名とみなされ、そのフィールドの昇順と解釈されます。</p>
		 * @return array <p>データベースからの応答を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.deleteindex.php
		 * @since PECL mongo >=0.9.0
		 */
		public function deleteIndex($keys): array {}

		/**
		 * コレクションのすべてのインデックスを削除する
		 * @return array <p>データベースの応答を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.deleteindexes.php
		 * @since PECL mongo >=0.9.0
		 */
		public function deleteIndexes(): array {}

		/**
		 * Retrieve a list of distinct values for the given key across a collection
		 * <p>The distinct command returns a list of distinct values for the given key across a collection.</p>
		 * @param string $key <p>The key to use.</p>
		 * @param array $query <p>An optional query parameters</p>
		 * @return array <p>Returns an array of distinct values, 失敗した場合に <b><code>FALSE</code></b> を返します</p>
		 * @link https://php.net/manual/ja/mongocollection.distinct.php
		 * @since PECL mongo >=1.2.11
		 */
		public function distinct(string $key, array $query = NULL): array {}

		/**
		 * コレクションを削除する
		 * <p>コレクションと、そのインデックスを削除します。</p>
		 * @return array <p>データベースの応答を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.drop.php
		 * @since PECL mongo >=0.9.0
		 */
		public function drop(): array {}

		/**
		 * Creates an index on the specified field(s) if it does not already exist
		 * <p>This method is deprecated since version 1.5.0. Please use <code>MongoCollection::createIndex()</code> instead.</p><p>Creates an index on the specified field(s) if it does not already exist. Fields may be indexed with a direction (e.g. ascending or descending) or a special type (e.g. text, geospatial, hashed).</p><p><b>注意</b>:</p><p>This method will use the » createIndexes database command when communicating with MongoDB 2.6+. For previous database versions, the method will perform an insert operation on the special <i>system.indexes</i> collection.</p>
		 * @param string|array $keys <p>An array specifying the index's fields as its keys. For each field, the value is either the index direction or » index type. If specifying direction, specify <i>1</i> for ascending or <i>-1</i> for descending.</p>
		 * @param array $options <p>An array of options for the index creation. Currently available options include:</p><ul> <li> <p><i>"unique"</i></p> <p><b><code>TRUE</code></b> を指定すると、一意なインデックスを作ります。デフォルト値は <b><code>FALSE</code></b> です。このオプションを使えるのは、昇順もしくは降順のインデックスだけです。</p>  <p><b>注意</b>:</p> <p>MongoDB がフィールドをインデックスするとき、もしそのフィールドに値を含まないドキュメントがあれば、<b><code>NULL</code></b> 値をインデックスします。このフィールドを含まないドキュメントが複数あった場合、一意なインデックスは、最初に出現したドキュメント以外を受け付けません。これを防ぐには <i>"sparse"</i> オプションを使います。このオプションを指定すれば、インデックス対象のフィールドが存在しないドキュメントはインデックスしなくなります。</p>  </li> <li> <p><i>"sparse"</i></p> <p><b><code>TRUE</code></b> を指定すると、疎なインデックスを作ります。これは、指定したフィールドを含むドキュメントだけをインデックスします。デフォルト値は <b><code>FALSE</code></b> です。</p> </li> <li> <p><i>"expireAfterSeconds"</i></p> <p>このオプションの値に指定するのは、ドキュメントを有効期限切れとみなしてコレクションから自動削除するまでの秒数です。このオプションが使えるのは、単一フィールドインデックスで、フィールドに MongoDate の値を含む場合のみです。</p>  <p><b>注意</b>:</p> <p>この機能が使えるのは、MongoDB 2.2 以降です。詳細は » Expire Data from Collections by Setting TTL を参照ください。</p>  </li> <li> <p><i>"name"</i></p> <p>オプションの、インデックスを一意に特定するための名前。</p>  <p><b>注意</b>:</p> <p>ドライバーがデフォルトで生成するインデックス名は、インデックスのフィールドと、並び順あるいは型に基づくものです。たとえば、複合インデックス <i>array("x" =&gt; 1, "y" =&gt; -1)</i> の名前は <i>"x_1_y_-1"</i> であり、地理空間インデックス <i>array("loc" =&gt; "2dsphere")</i> の名前は <i>"loc_2dsphere"</i> となります。多数のフィールドからなるインデックスの場合、自動生成される名前が MongoDB の » インデックス名の制限 を超えてしまう可能性があります。<i>"name"</i> オプションは、そんな場合に短い名前を用意するときなどに使えます。</p>  </li> <li> <p><i>"background"</i></p> <p>Builds the index in the background so that building an index does <i>not</i> block other database activities. Specify <b><code>TRUE</code></b> to build in the background. The default value is <b><code>FALSE</code></b>.</p>  <b>警告</b><p>Prior to MongoDB 2.6.0, index builds on secondaries were executed as foreground operations, irrespective of this option. See » Building Indexes with Replica Sets for more information.</p>  </li> <li> <p><i>"socketTimeoutMS"</i></p> <p>このオプションは、ソケット通信の制限時間を、ミリ秒単位で指定します。この時間内にサーバーからの反応がなければ、MongoCursorTimeoutException をスローします。この場合、サーバー側で書き込み処理が行われたのかどうかを判断できなくなります。<i>-1</i> を指定すると、永遠にブロックします。MongoClient のデフォルト値は <i>30000</i> (30 秒) です。</p> </li> </ul> <p>The following option may be used with MongoDB 2.6+:</p><ul> <li> <p><i>"maxTimeMS"</i></p> <p>サーバー上で操作を行う累積時間の制限 (アイドル時間を含まない) を、ミリ秒単位で指定します。この時間内にサーバー側の操作が完了しなければ、MongoExecutionTimeoutException をスローします。</p> </li> </ul> <p>The following options may be used with MongoDB versions before 2.8:</p><ul> <li> <p><i>"dropDups"</i></p> <p><b><code>TRUE</code></b> を指定すると、一意なインデックスを強制的に作成します。このとき、コレクション内でキーの値が重複してしまう可能性があります。MongoDB は最初に出現したキーをインデックスし、それ以降に出現する同じキーのすべてのドキュメントを削除します。デフォルト値は <b><code>FALSE</code></b> です。</p>  <b>警告</b><p><i>"dropDups"</i> はデータベースのデータを削除することがあるので、使う際には十分な注意が必要です。</p>   <p><b>注意</b>:</p> <p>このオプションは、MongoDB 2.8 以降には対応していません。コレクションに値の重複がある場合は、インデックスの作成に失敗します。</p>  </li> </ul> <p>The following options may be used with MongoDB versions before 2.6:</p><ul> <li> <p><i>"w"</i></p> <p>WriteConcerns を参照ください。MongoClient でのデフォルト値は <i>1</i> です。</p> </li> <li> <p><i>"wTimeoutMS"</i></p> <p>このオプションは、書き込み確認を待つ制限時間をミリ秒単位で指定します。これが書き込み操作に適用されるのは、<i>"w"</i> が <i>1</i> より大きい場合のみです。というのも、タイムアウトはレプリケーションに関する機能だからです。この時間内に書き込み確認ができなかった場合は MongoCursorException をスローします。<i>0</i> を指定すると、永遠にブロックし続けます。MongoClient でのデフォルトは <i>10000</i> ミリ秒 (10 秒) です。</p> </li> </ul> <p>The following options are deprecated and should no longer be used:</p><ul> <li> <p><i>"safe"</i></p> <p>非推奨。write concern の <i>w</i> オプションを使いましょう。</p> </li> <li> <p><i>"timeout"</i></p> <p>非推奨。<i>"socketTimeoutMS"</i> のエイリアス。</p> </li> <li> <p><i>"wtimeout"</i></p> <p>廃止予定。<i>"wTimeoutMS"</i> のエイリアスです。</p> </li> </ul>
		 * @return bool <p>Returns an array containing the status of the index creation. The array contains whether the operation succeeded (<i>"ok"</i>), the number of indexes before and after the operation (<i>"numIndexesBefore"</i> and <i>"numIndexesAfter"</i>), and whether the collection that the index belongs to has been created (<i>"createdCollectionAutomatically"</i>). If the index already existed and did not need to be created, a <i>"note"</i> field may be present in lieu of <i>"numIndexesAfter"</i>.</p><p>With MongoDB 2.4 and earlier, a status document is only returned if the write concern is at least <i>1</i>. Otherwise, <b><code>TRUE</code></b> is returned. The fields in the status document are different, except for the <i>"ok"</i> field, which signals whether the index creation was successful. Additional fields are described in the documentation for <code>MongoCollection::insert()</code>.</p>
		 * @link https://php.net/manual/ja/mongocollection.ensureindex.php
		 * @since PECL mongo >=0.9.0
		 */
		public function ensureIndex($keys, array $options = array()): bool {}

		/**
		 * コレクションに問い合わせ、結果セットの MongoCursor を返す
		 * @param array $query <p>検索したいフィールド。 MongoDB のクエリ言語は極めて幅広いものです。 PHP ドライバはほとんどの場合クエリをそのままサーバーに流すので、 MongoDB コアドキュメントの » find を読むといいでしょう。</p>  <b>警告</b> <p>クエリの特別な演算子 (<i>$</i> ではじまるもの) は、すべてシングルクォートで囲まなければならないことに注意しましょう。 <i>"$exists"</i> などとすると、PHP がそれを変数 <i>$exists</i> の値で置き換えてしまいます。</p>
		 * @param array $fields <p>返される結果のフィールド。配列の形式は <i>array('fieldname' =&gt; true, 'fieldname2' =&gt; true)</i> のようになります。<i>_id</i> フィールドは常に返されます。</p>
		 * @return MongoCursor <p>検索結果のカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.find.php
		 * @see MongoCollection::findOne(), MongoCollection::insert()
		 * @since PECL mongo >=0.9.0
		 */
		public function find(array $query = array(), array $fields = array()): \MongoCursor {}

		/**
		 * ドキュメントを更新して返す
		 * <p>findAndModify コマンドは、単一のドキュメントをアトミックに変更して返します。 デフォルトでは、返されるドキュメントには、この更新による変更内容が含まれません。 更新で変更した結果のドキュメントを返すには、new オプションを使います。</p>
		 * @param array $query <p>クエリの検索条件。</p>
		 * @param array $update <p>更新条件。</p>
		 * @param array $fields <p>オプションで、返すフィールドを絞り込めます。</p>
		 * @param array $options <p>適用するオプションの配列。マッチしたドキュメントを DB から削除してから返すなどのオプションを指定できます。</p>   オプション 説明      sort <code>array</code>   クエリが複数のドキュメントを選択したときに、どのドキュメントを変更するかを決めます。 findAndModify が変更するのは、この引数で指定した並び順で最初にあるドキュメントだけです。     remove <code>boolean</code>   update フィールドが存在するときは必須ではありません。 <b><code>TRUE</code></b> にすると、選択したドキュメントを削除します。デフォルトは <b><code>FALSE</code></b> です。     update <code>array</code>   remove フィールドが存在するときは必須ではありません。 選択したドキュメントを更新します。     new <code>boolean</code>   必須ではありません。<b><code>TRUE</code></b> にすると、変更前のドキュメントではなく変更後のドキュメントを返します。 findAndModify メソッドは、remove 操作のときには new オプションを無視します。 デフォルトは <b><code>FALSE</code></b> です。     upsert <code>boolean</code>   必須ではありません。update と組み合わせて使います。 <b><code>TRUE</code></b> にすると、クエリがドキュメントを返さないときに findAndModify コマンドが新しいドキュメントを作ります。 デフォルトは <b><code>FALSE</code></b> です。MongoDB 2.2 では、upsert が <b><code>TRUE</code></b> のときに findAndModify コマンドは <b><code>NULL</code></b> を返します。
		 * @return array <p>元のドキュメントを返します。 new が設定されている場合は変更後のドキュメントを返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.findandmodify.php
		 * @since PECL mongo >=1.3.0
		 */
		public function findAndModify(array $query, array $update = NULL, array $fields = NULL, array $options = NULL): array {}

		/**
		 * コレクションに問い合わせ、単一の要素を返す
		 * <p><code>MongoCollection::find()</code> とは対照的に、このメソッドは結果セットの <i>最初の</i>結果だけを返します。 MongoCursor を返すのではないので、その後の反復処理はできません。</p>
		 * @param array $query <p>検索したいフィールド。 MongoDB のクエリ言語は極めて幅広いものです。 PHP ドライバはほとんどの場合クエリをそのままサーバーに流すので、 MongoDB コアドキュメントの » find を読むといいでしょう。</p>  <b>警告</b> <p>クエリの特別な演算子 (<i>$</i> ではじまるもの) は、すべてシングルクォートで囲まなければならないことに注意しましょう。 <i>"$exists"</i> などとすると、PHP がそれを変数 <i>$exists</i> の値で置き換えてしまいます。</p>
		 * @param array $fields <p>返される結果のフィールド。配列の形式は <i>array('fieldname' =&gt; true, 'fieldname2' =&gt; true)</i> のようになります。<i>_id</i> フィールドは常に返されます。</p>
		 * @param array $options <p><i>array("name" =&gt; &lt;value&gt;, ...)</i> 形式の連想配列。 現在サポートしているオプションは、以下のとおりです。</p> <ul> <li> <p><i>"maxTimeMS"</i></p> <p>サーバー上で操作を行う累積時間の制限 (アイドル時間を含まない) を、ミリ秒単位で指定します。この時間内にサーバー側の操作が完了しなければ、MongoExecutionTimeoutException をスローします。</p> </li> </ul>
		 * @return array <p>検索にマッチしたレコード、あるいは <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.findone.php
		 * @see MongoCollection::find(), MongoCollection::insert()
		 * @since PECL mongo >=0.9.0
		 */
		public function findOne(array $query = array(), array $fields = array(), array $options = array()): array {}

		/**
		 * データベース参照が指すドキュメントを取得する
		 * @param array $ref <p>データベース参照。</p>
		 * @return array <p>参照が指し示すデータベースドキュメントを返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.getdbref.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getDBRef(array $ref): array {}

		/**
		 * このコレクションのインデックスについての情報を返す
		 * @return array <p>この関数は、配列を返します。配列の各要素が、それぞれインデックスを表します。 その要素には、インデックス名を表す <i>name</i> や名前空間 (データベース名とコレクション名の組み合わせ) を表す <i>ns</i>、すべてのキーとそのソート順 (インデックスを作るもの) を表す <i>key</i> があります。 また、それ以外の値も特別なインデックスに含まれるかもしれません。 <i>unique</i> や <i>sparse</i> などです。</p>
		 * @link https://php.net/manual/ja/mongocollection.getindexinfo.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getIndexInfo(): array {}

		/**
		 * コレクションの名前を返す
		 * @return string <p>コレクションの名前を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.getname.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getName(): string {}

		/**
		 * このコレクションの優先読み込みを取得する
		 * @return array <p>この関数は、優先読み込みに関する配列を返します。配列に含まれる内容は、<i>type</i> (優先読み込みモードを表す文字列。MongoClient の定数に対応)、そして <i>tagsets</i> (すべてのタグセット条件のリスト) です。タグセットを指定しなかった場合は、<i>tagsets</i> は存在しません。</p>
		 * @link https://php.net/manual/ja/mongocollection.getreadpreference.php
		 * @see MongoCollection::setReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function getReadPreference(): array {}

		/**
		 * このコレクションの slaveOkay 設定を取得する
		 * <p>読み込みのセカンダリへの分散についての情報は、このマニュアルの 問い合わせの節 を参照ください。</p>
		 * @return bool <p>このインスタンスの slaveOkay の値を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.getslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function getSlaveOkay(): bool {}

		/**
		 * Get the write concern for this collection
		 * @return array <p>この関数は、書き込み確認を表す配列を返します。<i>w</i> の値はサーバーの台数を表す整数値かモードを表す文字列、そして <i>wtimeout</i> の値はサーバーが書き込み確認を待つ最大ミリ秒数です。</p>
		 * @link https://php.net/manual/ja/mongocollection.getwriteconcern.php
		 * @see MongoCollection::setWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function getWriteConcern(): array {}

		/**
		 * SQL の GROUP BY コマンドと似た処理を行う
		 * @param mixed $keys <p>group by したいフィールド。 配列あるいは非コードオブジェクトが渡された場合は、 結果をグループ化するキーとして扱います。</p> <p>1.0.4+: <code>keys</code> が MongoCode のインスタンスである場合は、 <code>keys</code> はグループ化のキーを返す関数であると見なします (下の例 "<code>keys</code> へ関数を渡す" を参照ください)。</p>
		 * @param array $initial <p>集約カウンタオブジェクトの初期値。</p>
		 * @param \MongoCode $reduce <p>ふたつの引数 (現在のドキュメント、 そして集約する点) を受け取って集約をする関数。</p>
		 * @param array $options <p>group コマンドへのオプションのパラメータ。次のオプションが使えます。</p> <ul> <li> <p><i>"condition"</i></p> <p>集約処理に含めるドキュメントの条件。</p> </li> <li> <p><i>"finalize"</i></p> <p>一意なキーごとに一度だけコールされる関数。 reduce 関数の最後の出力を受け取ります。</p> </li> <li> <p><i>"maxTimeMS"</i></p> <p>サーバー上で操作を行う累積時間の制限 (アイドル時間を含まない) を、ミリ秒単位で指定します。この時間内にサーバー側の操作が完了しなければ、MongoExecutionTimeoutException をスローします。</p> </li> </ul>
		 * @return array <p>結果を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.group.php
		 * @since PECL mongo >=0.9.2
		 */
		public function group($keys, array $initial, \MongoCode $reduce, array $options = array()): array {}

		/**
		 * ドキュメントをコレクションに追加する
		 * <p>データベースに送信する文字列は UTF-8 でなければなりません。 UTF-8 以外の文字列を送信した場合は MongoException がスローされます。非 UTF-8 文字列を追加 (あるいは問い合わせ) するには MongoBinData を使います。</p>
		 * @param array|object $document <p>配列あるいはオブジェクト。オブジェクトを使う場合は、 protected や private のプロパティは保持できません。</p>  <p><b>注意</b>:</p> <p><i>_id</i> のキーあるいはプロパティを持たない場合は、 新しい MongoId インスタンスを作ってそれを代入します。 ただし、パラメータを参照で渡した場合は別です。</p>
		 * @param array $options <p>追加操作についてのオプションの配列。 現在利用可能なオプションは、以下のとおりです。</p><ul> <li> <p><i>"fsync"</i></p> <p>Boolean 型で、デフォルトは <b><code>FALSE</code></b> です。 ジャーナリングが有効な場合、これは <i>"j"</i> とまったく同じ動きをします。 ジャーナリングが有効でない場合は、追加をディスク上のデータベースファイルに同期させるまで成功したと見なさないようになります。 <b><code>TRUE</code></b> にすると確認つき書き込みが暗黙のうちに設定され、<i>"w"</i> の値を <i>0</i> にします。</p> <p><b>注意</b>: ジャーナリングが有効な場合は、<i>"fsync"</i> のかわりに <i>"j"</i> を使いましょう。 <i>"fsync"</i> と <i>"j"</i> を同時に指定すると、エラーになります。 </p> </li> <li> <p><i>"j"</i></p> <p>デフォルトは <b><code>FALSE</code></b> です。これを指定すると、追加をジャーナルに同期させるまで成功したと見なさないようになります。<b><code>TRUE</code></b> にすると確認付き書き込みと見なされ、<i>"w"</i> の設定を <i>0</i> に上書きします。</p> <p><b>注意</b>: このオプションを使っているときにジャーナリングを無効にすると、MongoDB 2.6 以降ではエラーが発生して書き込みに失敗します。古いバージョンのサーバーでは、単純にオプションの指定を無視します。</p> </li> <li> <p><i>"socketTimeoutMS"</i></p> <p>このオプションは、ソケット通信の制限時間を、ミリ秒単位で指定します。この時間内にサーバーからの反応がなければ、MongoCursorTimeoutException をスローします。この場合、サーバー側で書き込み処理が行われたのかどうかを判断できなくなります。<i>-1</i> を指定すると、永遠にブロックします。MongoClient のデフォルト値は <i>30000</i> (30 秒) です。</p> </li> <li> <p><i>"w"</i></p> <p>WriteConcerns を参照ください。MongoClient でのデフォルト値は <i>1</i> です。</p> </li> <li> <p><i>"wTimeoutMS"</i></p> <p>このオプションは、書き込み確認を待つ制限時間をミリ秒単位で指定します。これが書き込み操作に適用されるのは、<i>"w"</i> が <i>1</i> より大きい場合のみです。というのも、タイムアウトはレプリケーションに関する機能だからです。この時間内に書き込み確認ができなかった場合は MongoCursorException をスローします。<i>0</i> を指定すると、永遠にブロックし続けます。MongoClient でのデフォルトは <i>10000</i> ミリ秒 (10 秒) です。</p> </li> </ul> <p>以下のオプションは廃止予定です。使ってはいけません。</p><ul> <li> <p><i>"safe"</i></p> <p>非推奨。write concern の <i>w</i> オプションを使いましょう。</p> </li> <li> <p><i>"timeout"</i></p> <p>非推奨。<i>"socketTimeoutMS"</i> のエイリアス。</p> </li> <li> <p><i>"wtimeout"</i></p> <p>廃止予定。<i>"wTimeoutMS"</i> のエイリアスです。</p> </li> </ul>
		 * @return bool|array <p><i>"w"</i> オプションが設定されている場合は、 追加の状況を含む配列を返します。 設定されていない場合は、 もし追加された配列が空でない場合に <b><code>TRUE</code></b> を返します (追加された配列が空の場合は MongoException をスローします)。</p><p>配列が返された場合、その中に含まれる要素は次のようになります。</p>  <code>ok</code>   <p>これはほぼ常に 1 です (ただし last_error 自体が失敗した場合は除く)。</p>   <code>err</code>   <p>このフィールドに null 以外の値が入っている場合は、直前の操作でエラーが発生しています。 このフィールドが設定されている場合、その内容は発生したエラーを表す文字列となります。</p>   <code>code</code>   <p>データベースのエラーが発生した場合に、そのエラーコードをクライアントに戻します。</p>   <code>errmsg</code>   <p>このフィールドが設定されるのは、データベースコマンドで何か問題が発生したときです。 <i>ok</i> を 0 にすることと組み合わせて使います。 たとえば、もし <i>w</i> が設定されているときにタイムアウトが発生すると、 errmsg は "timed out waiting for slaves" そして <i>ok</i> は 0 になります。 このフィールドが設定されている場合、その内容は発生したエラーを表す文字列となります。</p>   <code>n</code>   <p>直近の操作が insert、update あるいは remove だった場合に、影響を受けたドキュメントの数を返します。 追加操作の場合は、この値は常に <i>0</i> です。</p>   <code>wtimeout</code>   <p>直近の操作がレプリケーション待ちでタイムアウトしたかどうか。</p>   <code>waited</code>   <p>操作がタイムアウトするまでにどれだか待ったか。</p>   <code>wtime</code>   <p><i>w</i> を設定して、かつ操作が成功した場合に、 <i>w</i> サーバーへのレプリケートにかかった時間。</p>   <code>upserted</code>   <p>upsert が発生した場合は、このフィールドに新しいレコードの <i>_id</i> が格納されます。upsert の場合は、このフィールドあるいは <i>updatedExisting</i> のいずれかが (エラーが発生しない限り) 必ず存在します。</p>   <code>updatedExisting</code>   <p>upsert が既存の要素を更新した場合に、このフィールドが true となります。 <i>_id</i> が格納されます。upsert の場合は、このフィールドあるいは upsearted のいずれかが (エラーが発生しない限り) 必ず存在します。</p>
		 * @link https://php.net/manual/ja/mongocollection.insert.php
		 * @see MongoCollection::batchInsert(), MongoCollection::update(), MongoCollection::find(), MongoCollection::remove()
		 * @since PECL mongo >=0.9.0
		 */
		public function insert($document, array $options = array()) {}

		/**
		 * Returns an array of cursors to iterator over a full collection in parallel
		 * <p>This method returns an array of a maximum of <i>num_cursors</i> cursors. An iteration over one of the returned cursors results in a partial set of documents for a collection. Iteration over all the returned cursors results in getting every document back from the collection.</p><p>This method is a wrapper for the <i>parallelCollectionScan</i> MongoDB command.</p>
		 * @param int $num_cursors <p>The number of cursors to request from the server. Please note, that the server can return less cursors than you requested.</p>
		 * @return array[MongoCommandCursor] <p>Returns an array of MongoCommandCursor objects.</p>
		 * @link https://php.net/manual/ja/mongocollection.parallelcollectionscan.php
		 * @since PECL mongo >=1.5.0
		 */
		public function parallelCollectionScan(int $num_cursors): array {}

		/**
		 * レコードをコレクションから削除する
		 * @param array $criteria <p>削除したいレコードの条件。</p>
		 * @param array $options <p>削除時のオプションの配列。 現在利用可能なオプションは、以下のとおりです。</p><ul> <li> <p><i>"w"</i></p> <p>WriteConcerns を参照ください。MongoClient でのデフォルト値は <i>1</i> です。</p> </li> <li> <p><i>"justOne"</i></p> <p><b><code>TRUE</code></b> を指定すると、条件にマッチするレコードを 1 件だけ削除します。 <b><code>FALSE</code></b> を指定したり省略したりした場合は、条件にマッチするすべてのレコードを削除します。</p> </li> <li> <p><i>"fsync"</i></p> <p>Boolean 型で、デフォルトは <b><code>FALSE</code></b> です。 ジャーナリングが有効な場合、これは <i>"j"</i> とまったく同じ動きをします。 ジャーナリングが有効でない場合は、追加をディスク上のデータベースファイルに同期させるまで成功したと見なさないようになります。 <b><code>TRUE</code></b> にすると確認つき書き込みが暗黙のうちに設定され、<i>"w"</i> の値を <i>0</i> にします。</p> <p><b>注意</b>: ジャーナリングが有効な場合は、<i>"fsync"</i> のかわりに <i>"j"</i> を使いましょう。 <i>"fsync"</i> と <i>"j"</i> を同時に指定すると、エラーになります。 </p> </li> <li> <p><i>"j"</i></p> <p>デフォルトは <b><code>FALSE</code></b> です。これを指定すると、追加をジャーナルに同期させるまで成功したと見なさないようになります。<b><code>TRUE</code></b> にすると確認付き書き込みと見なされ、<i>"w"</i> の設定を <i>0</i> に上書きします。</p> <p><b>注意</b>: このオプションを使っているときにジャーナリングを無効にすると、MongoDB 2.6 以降ではエラーが発生して書き込みに失敗します。古いバージョンのサーバーでは、単純にオプションの指定を無視します。</p> </li> <li> <p><i>"socketTimeoutMS"</i></p> <p>このオプションは、ソケット通信の制限時間を、ミリ秒単位で指定します。この時間内にサーバーからの反応がなければ、MongoCursorTimeoutException をスローします。この場合、サーバー側で書き込み処理が行われたのかどうかを判断できなくなります。<i>-1</i> を指定すると、永遠にブロックします。MongoClient のデフォルト値は <i>30000</i> (30 秒) です。</p> </li> <li> <p><i>"w"</i></p> <p>WriteConcerns を参照ください。MongoClient でのデフォルト値は <i>1</i> です。</p> </li> <li> <p><i>"wTimeoutMS"</i></p> <p>このオプションは、書き込み確認を待つ制限時間をミリ秒単位で指定します。これが書き込み操作に適用されるのは、<i>"w"</i> が <i>1</i> より大きい場合のみです。というのも、タイムアウトはレプリケーションに関する機能だからです。この時間内に書き込み確認ができなかった場合は MongoCursorException をスローします。<i>0</i> を指定すると、永遠にブロックし続けます。MongoClient でのデフォルトは <i>10000</i> ミリ秒 (10 秒) です。</p> </li> </ul> <p>以下のオプションは廃止予定です。使ってはいけません。</p><ul> <li> <p><i>"safe"</i></p> <p>非推奨。write concern の <i>w</i> オプションを使いましょう。</p> </li> <li> <p><i>"timeout"</i></p> <p>非推奨。<i>"socketTimeoutMS"</i> のエイリアス。</p> </li> <li> <p><i>"wtimeout"</i></p> <p>廃止予定。<i>"wTimeoutMS"</i> のエイリアスです。</p> </li> </ul>
		 * @return bool|array <p><i>"w"</i> が設定されていれば、削除の状態を表す配列を返します。 それ以外の場合は <b><code>TRUE</code></b> を返します。</p><p>状態を表す配列のフィールドについては <code>MongoCollection::insert()</code> のドキュメントを参照ください。</p>
		 * @link https://php.net/manual/ja/mongocollection.remove.php
		 * @see MongoCollection::insert(), MongoCollection::update()
		 * @since PECL mongo >=0.9.0
		 */
		public function remove(array $criteria = array(), array $options = array()) {}

		/**
		 * ドキュメントをコレクションに保存する
		 * <p>データベースから取得したオブジェクトの場合はデータベース上の既存のオブジェクトを更新し、 それ以外の場合はオブジェクトを追加します。</p>
		 * @param array|object $document <p>保存したい配列あるいはオブジェクト。オブジェクトを使う場合は、 protected や private のプロパティは保持できません。</p>  <p><b>注意</b>:</p> <p><i>_id</i> のキーあるいはプロパティを持たない場合は、 新しい MongoId インスタンスを作ってそれを代入します。 この挙動に関する詳しい情報は <code>MongoCollection::insert()</code> を参照ください。</p>
		 * @param array $options <p>保存時のオプション。</p><ul> <li> <p><i>"fsync"</i></p> <p>Boolean 型で、デフォルトは <b><code>FALSE</code></b> です。 ジャーナリングが有効な場合、これは <i>"j"</i> とまったく同じ動きをします。 ジャーナリングが有効でない場合は、追加をディスク上のデータベースファイルに同期させるまで成功したと見なさないようになります。 <b><code>TRUE</code></b> にすると確認つき書き込みが暗黙のうちに設定され、<i>"w"</i> の値を <i>0</i> にします。</p> <p><b>注意</b>: ジャーナリングが有効な場合は、<i>"fsync"</i> のかわりに <i>"j"</i> を使いましょう。 <i>"fsync"</i> と <i>"j"</i> を同時に指定すると、エラーになります。 </p> </li> <li> <p><i>"j"</i></p> <p>デフォルトは <b><code>FALSE</code></b> です。これを指定すると、追加をジャーナルに同期させるまで成功したと見なさないようになります。<b><code>TRUE</code></b> にすると確認付き書き込みと見なされ、<i>"w"</i> の設定を <i>0</i> に上書きします。</p> <p><b>注意</b>: このオプションを使っているときにジャーナリングを無効にすると、MongoDB 2.6 以降ではエラーが発生して書き込みに失敗します。古いバージョンのサーバーでは、単純にオプションの指定を無視します。</p> </li> <li> <p><i>"socketTimeoutMS"</i></p> <p>このオプションは、ソケット通信の制限時間を、ミリ秒単位で指定します。この時間内にサーバーからの反応がなければ、MongoCursorTimeoutException をスローします。この場合、サーバー側で書き込み処理が行われたのかどうかを判断できなくなります。<i>-1</i> を指定すると、永遠にブロックします。MongoClient のデフォルト値は <i>30000</i> (30 秒) です。</p> </li> <li> <p><i>"w"</i></p> <p>WriteConcerns を参照ください。MongoClient でのデフォルト値は <i>1</i> です。</p> </li> <li> <p><i>"wtimeout"</i></p> <p>廃止予定。<i>"wTimeoutMS"</i> のエイリアスです。</p> </li> <li> <p><i>"wTimeoutMS"</i></p> <p>このオプションは、書き込み確認を待つ制限時間をミリ秒単位で指定します。これが書き込み操作に適用されるのは、<i>"w"</i> が <i>1</i> より大きい場合のみです。というのも、タイムアウトはレプリケーションに関する機能だからです。この時間内に書き込み確認ができなかった場合は MongoCursorException をスローします。<i>0</i> を指定すると、永遠にブロックし続けます。MongoClient でのデフォルトは <i>10000</i> ミリ秒 (10 秒) です。</p> </li> <li> <p><i>"safe"</i></p> <p>非推奨。write concern の <i>w</i> オプションを使いましょう。</p> </li> <li> <p><i>"timeout"</i></p> <p>非推奨。<i>"socketTimeoutMS"</i> のエイリアス。</p> </li> </ul>
		 * @return mixed <p><code>w</code> が設定されている場合は、 保存結果を含む配列を返します。設定されていない場合は、 配列が空でなかったかどうかをあらわす boolean 値を返します (空の配列は追加されません)。</p>
		 * @link https://php.net/manual/ja/mongocollection.save.php
		 * @since PECL mongo >=0.9.0
		 */
		public function save($document, array $options = array()) {}

		/**
		 * このコレクションの優先読み込みを設定する
		 * @param string $read_preference <p>読み込みの優先モード。<b><code>MongoClient::RP_PRIMARY</code></b>、<b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>、<b><code>MongoClient::RP_SECONDARY</code></b>、<b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b> あるいは <b><code>MongoClient::RP_NEAREST</code></b> のいずれか。</p>
		 * @param array $tags <p>ゼロ個以上のタグセットの配列。各タグセット自体も配列で、レプリカセットのメンバーのタグにマッチさせる条件として使います。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.setreadpreference.php
		 * @see MongoCollection::getReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): bool {}

		/**
		 * Change slaveOkay setting for this collection
		 * <p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @param bool $ok <p>If reads should be sent to secondary members of a replica set for all possible queries using this MongoCollection instance.</p>
		 * @return bool <p>Returns the former value of slaveOkay for this instance.</p>
		 * @link https://php.net/manual/ja/mongocollection.setslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function setSlaveOkay(bool $ok = TRUE): bool {}

		/**
		 * Set the write concern for this database
		 * @param mixed $w <p>書き込み確認。何台のサーバーに書き込めたら成功とみなすのかを表す整数値、あるいは文字列 ("majority" など) でモードを指定します。</p>
		 * @param int $wtimeout <p>サーバーが書き込み確認を待つ最大ミリ秒数。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.setwriteconcern.php
		 * @see MongoCollection::getWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function setWriteConcern($w, int $wtimeout = NULL): bool {}

		/**
		 * インデックスを指定するキーを、インデックスを指す文字列に変換する
		 * <p>このメソッドは、バージョン 1.5.0 以降は非推奨となりました。</p>
		 * @param mixed $keys <p>指し示す文字列に変換したいフィールド。</p>
		 * @return string <p>インデックスを表す文字列を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.toindexstring.php
		 * @since PECL mongo >=0.9.0
		 */
		static protected function toIndexString($keys): string {}

		/**
		 * 指定した条件にもとづいてレコードを更新する
		 * @param array $criteria <p>更新したいオブジェクトの条件。</p>
		 * @param array $new_object <p>マッチするレコードを更新するオブジェクト。 更新演算子を含めたり (特定のフィールドだけの更新用)、 ドキュメント全体を上書きしたりできます。</p>
		 * @param array $options <p>更新時のオプションの配列。 現在利用可能なオプションは、以下のとおりです。</p><ul> <li> <p><i>"upsert"</i></p> <p><code>$criteria</code> にマッチするレコードが見つからない場合に 新しいドキュメントを追加します。</p> <p>新しいドキュメントを追加するときに <code>$new_object</code> にアトミックな修正子 (<i>$</i> 演算子) が含まれていれば、この操作を <code>$criteria</code> パラメータに適用して新しいドキュメントを作ります。 <code>$new_object</code> がアトミックな修正子を含まない場合は、 そのままの形式で新しいドキュメントに使います。 詳細は、以下の upsert の例を参照ください。</p> </li> <li> <p><i>"multiple"</i></p> <p>$criteria にマッチするすべてのドキュメントを更新します。 <b>MongoCollection::update()</b> は <code>MongoCollection::remove()</code> と正反対の動きをします。 デフォルトでは、マッチするすべてのドキュメントではなく ひとつのドキュメントだけを更新するのです。 <i>複数ドキュメントを更新したいのかそうでないのかは、 常に指定しておくことを推奨します。</i> 将来、データベースのデフォルトの挙動が変わる可能性があるからです。</p> </li> <li> <p><i>"fsync"</i></p> <p>Boolean 型で、デフォルトは <b><code>FALSE</code></b> です。 ジャーナリングが有効な場合、これは <i>"j"</i> とまったく同じ動きをします。 ジャーナリングが有効でない場合は、追加をディスク上のデータベースファイルに同期させるまで成功したと見なさないようになります。 <b><code>TRUE</code></b> にすると確認つき書き込みが暗黙のうちに設定され、<i>"w"</i> の値を <i>0</i> にします。</p> <p><b>注意</b>: ジャーナリングが有効な場合は、<i>"fsync"</i> のかわりに <i>"j"</i> を使いましょう。 <i>"fsync"</i> と <i>"j"</i> を同時に指定すると、エラーになります。 </p> </li> <li> <p><i>"j"</i></p> <p>デフォルトは <b><code>FALSE</code></b> です。これを指定すると、追加をジャーナルに同期させるまで成功したと見なさないようになります。<b><code>TRUE</code></b> にすると確認付き書き込みと見なされ、<i>"w"</i> の設定を <i>0</i> に上書きします。</p> <p><b>注意</b>: このオプションを使っているときにジャーナリングを無効にすると、MongoDB 2.6 以降ではエラーが発生して書き込みに失敗します。古いバージョンのサーバーでは、単純にオプションの指定を無視します。</p> </li> <li> <p><i>"socketTimeoutMS"</i></p> <p>このオプションは、ソケット通信の制限時間を、ミリ秒単位で指定します。この時間内にサーバーからの反応がなければ、MongoCursorTimeoutException をスローします。この場合、サーバー側で書き込み処理が行われたのかどうかを判断できなくなります。<i>-1</i> を指定すると、永遠にブロックします。MongoClient のデフォルト値は <i>30000</i> (30 秒) です。</p> </li> <li> <p><i>"w"</i></p> <p>WriteConcerns を参照ください。MongoClient でのデフォルト値は <i>1</i> です。</p> </li> <li> <p><i>"wTimeoutMS"</i></p> <p>このオプションは、書き込み確認を待つ制限時間をミリ秒単位で指定します。これが書き込み操作に適用されるのは、<i>"w"</i> が <i>1</i> より大きい場合のみです。というのも、タイムアウトはレプリケーションに関する機能だからです。この時間内に書き込み確認ができなかった場合は MongoCursorException をスローします。<i>0</i> を指定すると、永遠にブロックし続けます。MongoClient でのデフォルトは <i>10000</i> ミリ秒 (10 秒) です。</p> </li> </ul> <p>以下のオプションは廃止予定です。使ってはいけません。</p><ul> <li> <p><i>"safe"</i></p> <p>非推奨。write concern の <i>w</i> オプションを使いましょう。</p> </li> <li> <p><i>"timeout"</i></p> <p>非推奨。<i>"socketTimeoutMS"</i> のエイリアス。</p> </li> <li> <p><i>"wtimeout"</i></p> <p>廃止予定。<i>"wTimeoutMS"</i> のエイリアスです。</p> </li> </ul>
		 * @return bool|array <p><i>"w"</i> が設定されていれば、更新の状態を表す配列を返します。 それ以外の場合は <b><code>TRUE</code></b> を返します。</p><p>状態を表す配列のフィールドについては <code>MongoCollection::insert()</code> のドキュメントを参照ください。</p>
		 * @link https://php.net/manual/ja/mongocollection.update.php
		 * @since PECL mongo >=0.9.0
		 */
		public function update(array $criteria, array $new_object, array $options = array()) {}

		/**
		 * コレクションを検証する
		 * @param bool $scan_data <p>インデックスの検証のみを行い、コレクションは検証しない。</p>
		 * @return array <p>このオブジェクトをデータベースで評価した結果を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.validate.php
		 * @since PECL mongo >=0.9.0
		 */
		public function validate(bool $scan_data = FALSE): array {}
	}

	/**
	 * <p>A command cursor is similar to a MongoCursor except that you use it for iterating through the results of a database command instead of a normal query. Command cursors are useful for iterating over large result sets that might exceed the document size limit (currently 16MB) of a single <code>MongoDB::command()</code> response.</p>
	 * <p>While you can create command cursors using <code>MongoCommandCursor::__construct()</code> or the <code>MongoCommandCursor::createFromDocument()</code> factory method, you will generally want to use command-specific helpers such as <code>MongoCollection::aggregateCursor()</code>.</p>
	 * <p>Note that the cursor does not "contain" the database command's results; it just manages iteration through them. Thus, if you print a cursor (f.e. with <code>var_dump()</code> or <code>print_r()</code>), you will see the cursor object but not the result documents.</p>
	 * @link https://php.net/manual/ja/class.mongocommandcursor.php
	 * @since PECL mongo >=1.5.0
	 */
	class MongoCommandCursor implements \MongoCursorInterface, \Iterator {

		/**
		 * Create a new command cursor
		 * <p>Generally, you should not have to construct a MongoCommandCursor manually, as there are helper functions such as <code>MongoCollection::aggregateCursor()</code> and <code>MongoCollection::parallelCollectionScan()</code>; however, if the server introduces new commands that can return cursors, this constructor will be useful in the absence of specific helper methods. You may also consider using <code>MongoCommandCursor::createFromDocument()</code>.</p>
		 * @param \MongoClient $connection <p>Database connection.</p>
		 * @param string $ns <p>Full name of the database and collection (e.g. <i>"test.foo"</i>)</p>
		 * @param array $command <p>Database command.</p>
		 * @return self <p>Returns the new cursor.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.construct.php
		 * @see MongoCommandCursor::createFromDocument(), MongoCollection::aggregateCursor(), MongoCollection::parallelCollectionScan()
		 * @since PECL mongo >=1.5.0
		 */
		public function __construct(\MongoClient $connection, string $ns, array $command = array()) {}

		/**
		 * Execute an aggregation pipeline command and retrieve results through a cursor
		 * <p>With this method you can execute Aggregation Framework pipelines and retrieve the results through a cursor, instead of getting just one document back as you would with <code>MongoCollection::aggregate()</code>. This method returns a MongoCommandCursor object. This cursor object implements the Iterator interface just like the MongoCursor objects that are returned by the <code>MongoCollection::find()</code> method.</p><p><b>注意</b>:  The resulting MongoCommandCursor will inherit this collection's read preference. <code>MongoCommandCursor::setReadPreference()</code> may be used to change the read preference before iterating on the cursor. </p>
		 * @param array $command
		 * @param array $options <p>Options for the aggregation command. Valid options include:</p> <ul> <li> <p><i>"allowDiskUse"</i></p> <p>Allow aggregation stages to write to temporary files</p> </li> <li> <p><i>"cursor"</i></p> <p>It is possible to configure how many initial documents the server should return with the first result set. The default initial batch size is <i>101</i>. You can change it by adding the <i>batchSize</i> option:</p>  <code> &lt;&#63;php<br>$collection-&gt;aggregateCursor( <br>    $pipeline,<br>    [ "cursor" =&gt; [ "batchSize" =&gt; 4 ] ]<br>);  </code>  <p>This option only configures the size of the first batch. To configure the size of future batches, please use the <code>MongoCommandCursor::batchSize()</code> method on the returned MongoCommandCursor object.</p> </li> <li> <p><i>"explain"</i></p> <p>Return information on the processing of the pipeline. This option may cause the command to return a result document that is unsuitable for constructing a MongoCommandCursor. If you need to use this option, you should consider using <code>MongoCollection::aggregate()</code>.</p> </li> <li> <p><i>"maxTimeMS"</i></p> <p>サーバー上で操作を行う累積時間の制限 (アイドル時間を含まない) を、ミリ秒単位で指定します。この時間内にサーバー側の操作が完了しなければ、MongoExecutionTimeoutException をスローします。</p> </li> </ul>
		 * @return MongoCommandCursor <p>Returns a MongoCommandCursor object. Because this implements the Iterator interface you can iterate over each of the results as returned by the command query. The MongoCommandCursor also implements the MongoCursorInterface interface which adds the <code>MongoCommandCursor::batchSize()</code>, <code>MongoCommandCursor::dead()</code>, <code>MongoCommandCursor::info()</code> methods.</p>
		 * @link https://php.net/manual/ja/mongocollection.aggregatecursor.php
		 * @since PECL mongo >=1.5.0
		 */
		public function aggregateCursor(array $command, array $options = NULL): \MongoCommandCursor {}

		/**
		 * Limits the number of elements returned in one batch
		 * <p>A cursor typically fetches a batch of result objects and store them locally. This method sets the batchSize value to configure the amount of documents retrieved from the server in one round trip.</p>
		 * @param int $batchSize <p>The number of results to return per batch. Each batch requires a round-trip to the server.</p> <p>This cannot override MongoDB's limit on the amount of data it will return to the client (i.e., if you set batch size to 1,000,000,000, MongoDB will still only return 4-16MB of results per batch).</p>
		 * @return MongoCommandCursor <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.batchsize.php
		 * @since PECL mongo >=1.5.0
		 */
		public function batchSize(int $batchSize): \MongoCommandCursor {}

		/**
		 * データベースコマンドを実行する
		 * <p>CRUD 操作以外のほとんどすべての操作は、データベースコマンドで行います。 データベースのバージョンを知りたい&#63; それ用のコマンドがあります。 集約が必要ですって&#63; そのためのコマンドがあります。 ログを記録したい&#63; もちろん可能です。</p><p>このメソッドは、次のような関数と同じ働きをします。</p>
		 * @param array $command <p>送信したいクエリ。</p>
		 * @param array $options <p>インデックスを作るオプションの配列です。現在サポートするオプションは次のとおりです。</p><ul> <li> <p><i>"socketTimeoutMS"</i></p> <p>このオプションは、ソケット通信の制限時間を、ミリ秒単位で指定します。この時間内にサーバーからの反応がなければ、MongoCursorTimeoutException をスローします。この場合、サーバー側で書き込み処理が行われたのかどうかを判断できなくなります。<i>-1</i> を指定すると、永遠にブロックします。MongoClient のデフォルト値は <i>30000</i> (30 秒) です。</p> </li> </ul> <p>以下のオプションは非推奨で、使ってはいけません。</p><ul> <li> <p><i>"timeout"</i></p> <p>非推奨。<i>"socketTimeoutMS"</i> のエイリアス。</p> </li> </ul>
		 * @param string $hash <p>コマンドを実行するサーバーの接続ハッシュを設定します。 コマンドの結果が MongoCommandCursor の作成に適したものである場合、このハッシュは <code>MongoCommandCursor::createFromDocument()</code> に渡されます。</p> <p>このハッシュは、 <code>MongoClient::getConnections()</code> が返す接続に対応しています。</p>
		 * @return array <p>データベースの応答を返します。データベースの応答はすべて、 最大で 1 件のドキュメントになります。つまり、データベースへのコマンドの結果は決して 16MB を超えないということです。結果のドキュメントの構造はコマンドによって異なりますが、 大半の結果には <i>ok</i> フィールドがあって、これが成功したか失敗したかを表します。 また、同じく大半の結果には <i>results</i> フィールドもあって、 ここにドキュメントの配列が含まれます。</p>
		 * @link https://php.net/manual/ja/mongodb.command.php
		 * @since PECL mongo >=0.9.2
		 */
		public function command(array $command, array $options = array(), string &$hash = NULL): array {}

		/**
		 * Create a new command cursor from an existing command response document
		 * <p>Use this method if you have a raw command result with cursor information in it. Note that cursors created with this method cannot be iterated multiple times, as they will lack the original command necessary for re-execution.</p>
		 * @param \MongoClient $connection <p>Database connection.</p>
		 * @param string $hash <p>The connection hash, as obtained through the third by-reference argument to <code>MongoDB::command()</code>.</p>
		 * @param array $document <p>Document with cursor information in it. This document needs to contain the <i>id</i>, <i>ns</i> and <i>firstBatch</i> fields. Such a document is obtained by calling the <code>MongoDB::command()</code> with appropriate arguments to return a cursor, and not just an inline result. See the example below.</p>
		 * @return MongoCommandCursor <p>Returns the new cursor.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.createfromdocument.php
		 * @see MongoCommandCursor::__construct()
		 * @since PECL mongo >=1.5.0
		 */
		public static function createFromDocument(\MongoClient $connection, string $hash, array $document): \MongoCommandCursor {}

		/**
		 * Returns the current element
		 * <p>This returns <b><code>NULL</code></b> until <code>MongoCommandCursor::rewind()</code> is called.</p>
		 * @return array <p>The current result document as an associative array. <b><code>NULL</code></b> will be returned if there is no result.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.current.php
		 * @since PECL mongo >=1.5.0
		 */
		public function current(): array {}

		/**
		 * Checks if there are results that have not yet been sent from the database
		 * <p>This method checks whether the MongoCommandCursor cursor has been exhausted and the database has no more results to send to the client. A cursor being "dead" does not necessarily mean that there are no more results available for iteration.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if there are more results that have not yet been sent to the client, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.dead.php
		 * @since PECL mongo >=1.5.0
		 */
		public function dead(): bool {}

		/**
		 * Get the read preference for this command
		 * @return array <p>この関数は、優先読み込みに関する配列を返します。配列に含まれる内容は、<i>type</i> (優先読み込みモードを表す文字列。MongoClient の定数に対応)、そして <i>tagsets</i> (すべてのタグセット条件のリスト) です。タグセットを指定しなかった場合は、<i>tagsets</i> は存在しません。</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.getreadpreference.php
		 * @see MongoCommandCursor::setReadPreference(), MongoCursorInterface::getReadPreference()
		 * @since PECL mongo >=1.6.0
		 */
		public function getReadPreference(): array {}

		/**
		 * Gets information about the cursor's creation and iteration
		 * <p>This can be called before or after the cursor has started iterating.</p>
		 * @return array <p>Returns the namespace, batch size, limit, skip, flags, query, and projected fields for this cursor. If the cursor has started iterating, additional information about iteration and the connection will be included.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.info.php
		 * @since PECL mongo >=1.5.0
		 */
		public function info(): array {}

		/**
		 * Returns the current result's index within the result set
		 * @return int <p>The current result's index within the result set.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.key.php
		 * @since PECL mongo >=1.5.0
		 */
		public function key(): int {}

		/**
		 * Advances the cursor to the next result
		 * @return void <p><b><code>NULL</code></b>.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.next.php
		 * @since PECL mongo >=1.5.0
		 */
		public function next(): void {}

		/**
		 * Executes the command and resets the cursor to the start of the result set
		 * <p>If the cursor has already started iteration, the command will be re-executed.</p>
		 * @return array <p>The raw server result document.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.rewind.php
		 * @since PECL mongo >=1.5.0
		 */
		public function rewind(): array {}

		/**
		 * Set the read preference for this command
		 * @param string $read_preference <p>読み込みの優先モード。<b><code>MongoClient::RP_PRIMARY</code></b>、<b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>、<b><code>MongoClient::RP_SECONDARY</code></b>、<b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b> あるいは <b><code>MongoClient::RP_NEAREST</code></b> のいずれか。</p>
		 * @param array $tags <p>ゼロ個以上のタグセットの配列。各タグセット自体も配列で、レプリカセットのメンバーのタグにマッチさせる条件として使います。</p>
		 * @return MongoCommandCursor <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.setreadpreference.php
		 * @see MongoCommandCursor::getReadPreference(), MongoCursorInterface::setReadPreference()
		 * @since PECL mongo >=1.6.0
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): \MongoCommandCursor {}

		/**
		 * Sets a client-side timeout for this command
		 * <p>A timeout can be set at any time and will affect subsequent data retrieval associated with this cursor, including fetching more results from the database.</p>
		 * @param int $ms <p>The number of milliseconds for the cursor to wait for a response. Use <i>-1</i> to wait forever. By default, the cursor will wait 30000 milliseconds (30 seconds).</p>
		 * @return MongoCommandCursor <p>This cursor.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.timeout.php
		 * @see MongoCollection::aggregateCursor(), MongoClient::__construct()
		 * @since PECL mongo >=1.6.0
		 */
		public function timeout(int $ms): \MongoCommandCursor {}

		/**
		 * Checks if the cursor is reading a valid result
		 * @return bool <p><b><code>TRUE</code></b> if the current result is not null, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongocommandcursor.valid.php
		 * @since PECL mongo >=1.5.0
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>ドライバがデータベースへの接続に失敗した場合にスローします。</p>
	 * <p>エラーメッセージにはさまざまなものがあり、 接続時にどんな問題が発生したのかを調べるために役立ちます。 以下にエラーメッセージの例を示します。</p>
	 * <p><i>No candidate servers found</i></p>
	 * <p>MongoDB への接続の確立 (優先読み込みを指定している場合はそれを反映したもの) ができなかった場合に発生します。</p>
	 * <p><i>No server name given.</i></p>
	 * <p>このエラーが発生するのは、サーバー名に "" を渡した場合です。 考えられる原因は、文字列中での変数展開用の変数の書き間違い (たとえば "$server" とすべきところを "$servr" にした) などです。</p>
	 * <p><i> failed to get host [hostname] or port [portnum] from [server]. </i></p>
	 * <p>このエラーがあらわすのは、サーバー文字列が不正な形式であるということです。 "[hostname]" および "[portnum]" の部分が、 ドライバがなんとかそれを判読した結果を示しています。</p>
	 * <p><i>Operation in progress</i></p>
	 * <p>データベースへの接続がタイムアウトしました。</p>
	 * <p><i>Transport endpoint is not connected</i></p>
	 * <p>一般的には、接続文字列が間違っていて ドライバがデータベースサーバーを見つけられなかったことを意味します。</p>
	 * <p><i>couldn't determine master</i></p>
	 * <p>レプリカセット接続の中に、プライマリなサーバーがありません。</p>
	 * <p><i>couldn't get host info for [server]</i></p>
	 * <p>これがあらわすのは、指定したサーバーアドレスを DNS が解決できなかったということです。 打ち間違い ("$server" と書くべきところを "server" とするなど) があると容易にこのエラーが発生します。</p>
	 * <p><i>Invalid Argument</i></p>
	 * <p>これは、マシン自体は立ち上がっているもののデータベースは稼動していないマシンに接続しようとした場合などに発生します。 接続前に、データベースサーバーが起動しているかどうか確認しておきましょう。</p>
	 * <p><i>Permission denied</i></p>
	 * <p>権限に関する問題があってソケットをオープンできなかったことをあらわします。 Red Hat 系の OS のデフォルト設定では Apache からネットワーク接続を作成できないようになっているので、 デフォルトでこれが発生します。この設定を書き換えるには、</p>
	 * <p>これら以外のメッセージが出た場合、おそらくそれは C のソケットからのエラーです。 主な原因についてはウェブを検索して調べましょう。</p>
	 * @link https://php.net/manual/ja/class.mongoconnectionexception.php
	 * @since PECL mongo >= 1.0.0
	 */
	class MongoConnectionException extends \MongoException {
	}

	/**
	 * <p>カーソルは、データベースクエリの結果を反復処理するときに使います。 たとえば、データベースに問い合わせたすべての結果を見るには次のようにします。</p>
	 * <p><b>例1 <b>MongoCursor</b> の基本的な使いかた</b></p>
	 * <p>一般に、カーソルを作るときに <b>MongoCursor</b> のコンストラクタを使うことはありません。 新しいカーソルを作るには、(上の例のように) <code>MongoCollection::find()</code> をコールします。</p>
	 * <p>上の例で、仮に <i>$collection</i> が 50GB のコレクションだったとしましょう。そんなときに、 結果をすべて一度にメモリに読み込もうとは思わないでしょう。 そんなときのためにカーソルが存在します。 カーソルを使えば、クライアント側から少しずつコレクションにアクセスできるのです。</p>
	 * <p>結果セットが大規模になっても、それを反復処理して 一度にメモリに取り込むデータ量を数メガバイト程度にすることができます。 たとえばこのようにします。</p>
	 * <p><b>例2 <b>MongoCursor</b> の反復処理</b></p>
	 * <p>カーソルにデータベースの結果が "含まれている" わけではないことに注意しましょう。 カーソルは単に結果を管理するだけのものです。つまり、 (<code>var_dump()</code> や <code>print_r()</code> で) カーソルの内容を出力してもドキュメントは見えません。 単にカーソルオブジェクトが表示されるだけです。 ドキュメント自身を取得するには、上のメソッドのいずれかを使います。</p>
	 * @link https://php.net/manual/ja/class.mongocursor.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoCursor implements \MongoCursorInterface, \Iterator {

		/**
		 * @var boolean <p>クエリに "slaveOkay" フラグが設定されていると、セカンダリ側での読み込みを許可します (セカンダリは、デフォルトでは単なるバックアップ用であり読み込みはできません)。 <code>MongoCursor::slaveOkay()</code> で上書きすることができます。</p> <p>この機能は <i>非推奨</i> です。かわりに 優先読み込み を使いましょう。</p>
		 * @link https://php.net/manual/ja/class.mongocursor.php#mongocursor.props.slaveokay
		 */
		static $slaveOkay = FALSE;

		/**
		 * @var integer <p>データベースからのすべての応答に対するタイムアウトをミリ秒単位で設定します。 ずっと待ち続ける場合は <i>-1</i> を指定します。 <code>MongoCursor::timeout()</code> で上書きすることができます。 これは MongoDB サーバーに対する操作をキャンセルするわけではなく、 単にドライバ側で応答を待つのをやめて MongoCursorTimeoutException をスローするだけです。</p>
		 * @link https://php.net/manual/ja/class.mongocursor.php#mongocursor.props.timeout
		 */
		static $timeout = 30000;

		/**
		 * 新しいカーソルを作成する
		 * @param \MongoClient $connection <p>データベース接続。</p>
		 * @param string $ns <p>データベースおよびコレクションのフルネーム。</p>
		 * @param array $query <p>データベースクエリ。</p>
		 * @param array $fields <p>返すフィールド。</p>
		 * @return self <p>新しいカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoClient $connection, string $ns, array $query = array(), array $fields = array()) {}

		/**
		 * トップレベルの キー/値 のペアをクエリに追加する
		 * <p>これは高度な関数なので、今何をしているのかをわかっている人以外は使ってはいけません。</p><p>ソートやヒントなどの他のオプションを指定する場合は、クエリを "query" フィールドに書くこともできます。 たとえばソートを追加した場合は、 クエリは次のようにサブフィールドのひとつとなります。</p><p>このメソッドは、トップレベルのフィールドをクエリに追加します。 クエリにサブオブジェクトを作成 (まだ存在しない場合) し、 指定した キー/値 のペアをトップレベルに追加します。</p><p>クエリにその場で条件を追加するという目的で使うことはできません。たとえば、 これは正しく動作<i>しません</i>。</p>
		 * @param string $key <p>追加したいフィールド名。</p>
		 * @param mixed $value <p>追加したい値。</p>
		 * @return MongoCursor <p>このカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.addoption.php
		 * @since PECL mongo >=1.0.4
		 */
		public function addOption(string $key, $value): \MongoCursor {}

		/**
		 * Sets whether this cursor will wait for a while for a tailable cursor to return more data
		 * <p>This method is to be used with tailable cursors. If we are at the end of the data, block for a while rather than returning no data. After a timeout period, we do return as normal.</p>
		 * @param bool $wait <p>If the cursor should wait for more data to become available.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocursor.awaitdata.php
		 * @see MongoCursor::tailable()
		 * @since PECL mongo >=1.2.11
		 */
		public function awaitData(bool $wait = TRUE): \MongoCursor {}

		/**
		 * Limits the number of elements returned in one batch
		 * <p>A cursor typically fetches a batch of result objects and store them locally. This method sets the batchSize value to configure the amount of documents retrieved from the server in one round trip. However, it will never return more documents than fit in the max batch size limit (usually 4MB).</p>
		 * @param int $batchSize <p>The number of results to return per batch. Each batch requires a round-trip to the server.</p> <p>If <code>batchSize</code> is <i>2 or more</i>, it represents the size of each batch of objects retrieved. It can be adjusted to optimize performance and limit data transfer.</p> <p>If <code>batchSize</code> is <i>1</i> or negative, it will limit of number returned documents to the absolute value of batchSize, and the cursor will be closed. For example if batchSize is <i>-10</i>, then the server will return a maximum of 10 documents and as many as can fit in 4MB, then close the cursor.</p>  <b>警告</b> <p>A <code>batchSize</code> of <i>1</i> is special, and means the same as <i>-1</i>, i.e. a value of <i>1</i> makes the cursor only capable of returning <i>one</i> document.</p>  <p>Note that this feature is different from <code>MongoCursor::limit()</code> in that documents must fit within a maximum size, and it removes the need to send a request to close the cursor server-side. The batch size can be changed even after a cursor is iterated, in which case the setting will apply on the next batch retrieval.</p> <p>This cannot override MongoDB's limit on the amount of data it will return to the client (i.e., if you set batch size to 1,000,000,000, MongoDB will still only return 4-16MB of results per batch).</p> <p>To ensure consistent behavior, the rules of <b>MongoCursor::batchSize()</b> and <code>MongoCursor::limit()</code> behave a little complex but work "as expected". The rules are: hard limits override soft limits with preference given to <code>MongoCursor::limit()</code> over <b>MongoCursor::batchSize()</b>. After that, whichever is set and lower than the other will take precedence. See below. section for some examples.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocursor.batchsize.php
		 * @see MongoCursor::limit()
		 * @since PECL mongo >=1.0.11
		 */
		public function batchSize(int $batchSize): \MongoCursor {}

		/**
		 * このクエリの結果の数を数える
		 * <p>このメソッドはカーソルの状態には何の影響も及ぼしません。 もしまだクエリを実行していないのなら、limit や skip を適用することもできます。 結果の反復処理が始まっている場合は、このメソッドを実行してもカーソルの現在位置は変わりません。 カーソルの最後まで達している場合は、このメソッドを実行してもカーソルをリセットしません。</p>
		 * @param bool $foundOnly <p>カーソルの limit を送信し、制限に達した場合に count 関数への情報の送信をスキップします。</p>
		 * @return int <p>このカーソルのクエリが返すドキュメントの数を返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.count.php
		 * @since PECL mongo >=0.9.2
		 */
		public function count(bool $foundOnly = FALSE): int {}

		/**
		 * 現在の要素を返す
		 * <p><code>MongoCursor::next()</code> がコールされるまでは、これは <b><code>NULL</code></b> を返します。</p>
		 * @return array <p>現在の結果を連想配列で返します。 結果がない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.current.php
		 * @since PECL mongo >=0.9.0
		 */
		public function current(): array {}

		/**
		 * まだデータベースから送信されていないドキュメントがあるかどうかを調べる
		 * <p>データベースは、一回の応答で最大 4MB までのドキュメントをひとまとめにして送信します。 このメソッドは、まだ送信されていないまとまりがあるか もう結果セットはなくなったのかを調べます。</p><p>カーソルが "死んでいる" というのは <code>MongoCursor::hasNext()</code> が <b><code>FALSE</code></b> を返すという意味ではなく、 単にデータベースがクライアントに結果を送信し終えたという意味です。 クライアント側では、 <code>MongoCursor::hasNext()</code> が <b><code>FALSE</code></b> になるまで反復処理を続けなければなりません。</p>
		 * @return bool <p>クライアントにまだ送られていない結果が残っている場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.dead.php
		 * @since PECL mongo >=0.9.6
		 */
		public function dead(): bool {}

		/**
		 * Execute the query
		 * <p>Please do not use me.</p><p>This function actually queries the database. All queries and commands go through this function. Thus, this function can be overridden to provide custom query handling.</p><p>This handles serializing your query, sending it to the database, receiving a response, and deserializing it. Thus, if you are planning to override this, your code should probably call out to the original to use the existing functionality (see the example below).</p>
		 * @return void <p><b><code>NULL</code></b>.</p>
		 * @link https://php.net/manual/ja/mongocursor.doquery.php
		 * @since PECL mongo >=0.9.0 <1.6.0
		 */
		protected function doQuery(): void {}

		/**
		 * 最適化やデバッグの際に有効な、クエリの explain を返す
		 * @return array <p>クエリの explain を返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.explain.php
		 * @since PECL mongo >=0.9.2
		 */
		public function explain(): array {}

		/**
		 * クエリのフィールドを設定する
		 * <p>フィールドは <i>"fieldname" : bool</i> 形式で指定します。 <b><code>TRUE</code></b> はそのフィールドを返すこと、そして <b><code>FALSE</code></b> はそのフィールドを返さないことを意味します。 1 および 0 を、それぞれ <b><code>TRUE</code></b> および <b><code>FALSE</code></b> のかわりに使うこともできます。</p><p>"summary" フィールドだけを返すようにするには次のようにします。</p><p>"hidden" 以外のすべてのフィールドを返すには次のようにします。</p>
		 * @param array $f <p>返したい (あるいは返したくない) フィールド。</p>
		 * @return MongoCursor <p>このカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.fields.php
		 * @since PECL mongo >=1.0.6
		 */
		public function fields(array $f): \MongoCursor {}

		/**
		 * カーソルを次の結果に進めてその結果を返す
		 * <p><b>注意</b>:</p><p><b>MongoCursor::getNext()</b> は <code>MongoCursor::next()</code> のエイリアスです。</p>
		 * @return array
		 * @link https://php.net/manual/ja/mongocursor.getnext.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getNext(): array {}

		/**
		 * このクエリの優先読み込みを取得する
		 * @return array <p>この関数は、優先読み込みに関する配列を返します。配列に含まれる内容は、<i>type</i> (優先読み込みモードを表す文字列。MongoClient の定数に対応)、そして <i>tagsets</i> (すべてのタグセット条件のリスト) です。タグセットを指定しなかった場合は、<i>tagsets</i> は存在しません。</p>
		 * @link https://php.net/manual/ja/mongocursor.getreadpreference.php
		 * @see MongoCursor::setReadPreference(), MongoCursorInterface::getReadPreference()
		 * @since PECL mongo >=1.3.3
		 */
		public function getReadPreference(): array {}

		/**
		 * このカーソルにまだ要素があるかどうかを調べる
		 * @return bool <p>まだ要素があるかどうかを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.hasnext.php
		 * @since PECL mongo >=0.9.0
		 */
		public function hasNext(): bool {}

		/**
		 * クエリについてのヒントをデータベースに与える
		 * @param mixed $index <p>クエリで使用するインデックス。 文字列を渡した場合は、インデックス名として扱います。 配列あるいはオブジェクトを渡した場合は、それに基づいてインデックスを組み立てます (<code>MongoCollection::ensureIndex()</code> の最初の引数のようになります)。</p>
		 * @return MongoCursor <p>このカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.hint.php
		 * @since PECL mongo >=0.9.0
		 */
		public function hint($index): \MongoCursor {}

		/**
		 * Sets whether this cursor will timeout
		 * <p>After remaining idle on the server for some amount of time, cursors, by default, "die." This is generally the behavior one wants. The database cleans up a cursor once all of its results have been sent to the client, but if the client doesn't request all of the results, the cursor will languish there, taking up resources. Thus, after a few minutes, the cursor "times out" and the database assumes the client has gotten everything it needs and cleans up its the cursor's resources.</p><p>If, for some reason, you need a cursor to hang around for a long time, you can prevent the database from cleaning it up by using this method. However, if you make a cursor immortal, you need to iterate through all of its results (or at least until <code>MongoCursor::dead()</code> returns <b><code>TRUE</code></b>) or the cursor will hang around the database <i>forever</i>, taking up resources.</p>
		 * @param bool $liveForever <p>If the cursor should be immortal.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocursor.immortal.php
		 * @since PECL mongo >=1.0.1
		 */
		public function immortal(bool $liveForever = TRUE): \MongoCursor {}

		/**
		 * カーソルの作成と走査に関する情報を取得する
		 * <p>これは、カーソルの反復処理が始まる前でも後でもコールすることができます。</p>
		 * @return array <p>このカーソルの namespace、batch size、limit、skip、flags、query そして fields を返します。 カーソルの反復処理が始まっている場合は、接続などの追加情報も含まれます。</p>
		 * @link https://php.net/manual/ja/mongocursor.info.php
		 * @since PECL mongo >=1.0.5
		 */
		public function info(): array {}

		/**
		 * 現在の結果の _id、あるいは結果セット内のインデックスを返す
		 * @return string|int <p>現在の結果の <i>_id</i> を文字列で返します。 結果に <i>_id</i> が含まれない場合は、結果セット内の数値インデックスを表す整数値を返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.key.php
		 * @since PECL mongo >=0.9.0
		 */
		public function key() {}

		/**
		 * 返す結果の数を制限する
		 * @param int $num <p>返したい結果の数。</p>
		 * @return MongoCursor <p>このカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.limit.php
		 * @see MongoCursor::batchSize()
		 * @since PECL mongo >=0.9.0
		 */
		public function limit(int $num): \MongoCursor {}

		/**
		 * Sets a server-side timeout for this query
		 * <p>Specifies a cumulative time limit in milliseconds to be allowed by the server for processing operations on the cursor.</p>
		 * @param int $ms <p>Specifies a cumulative time limit in milliseconds to be allowed by the server for processing operations on the cursor.</p>
		 * @return MongoCursor <p>This cursor.</p>
		 * @link https://php.net/manual/ja/mongocursor.maxtimems.php
		 * @since PECL mongo >=1.5.0
		 */
		public function maxTimeMS(int $ms): \MongoCursor {}

		/**
		 * カーソルを次の結果に進めてその結果を返す
		 * @return array <p>次のドキュメントを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.next.php
		 * @since PECL mongo >=0.9.0
		 */
		public function next(): array {}

		/**
		 * If this query should fetch partial results from mongos if a shard is down
		 * <p>This option allows <i>mongos</i> to send partial query results if a shard is unreachable. This is only applicable when running a sharded MongoDB cluster and connecting to a <i>mongos</i>.</p><p>If a shard goes down and a query needs to be sent to that shard, <i>mongos</i> will return the results (if any) from shards it already contacted, then an error message that it could not reach the shard (a MongoCursorException in PHP). If you would like to get whatever results <i>mongos</i> can provide and no exception, you can use this method. Note that this means that you won't have an indication that a shard is down in your query response.</p><p>This has no effect on the query if all shards are reachable. This flag was implemented in MongoDB version 1.7.5, so will only work with that version and higher.</p>
		 * @param bool $okay <p>If receiving partial results is okay.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocursor.partial.php
		 * @since PECL mongo >=1.2.0
		 */
		public function partial(bool $okay = TRUE): \MongoCursor {}

		/**
		 * カーソルを消去する
		 * @return void <p><b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.reset.php
		 * @since PECL mongo >=0.9.0
		 */
		public function reset(): void {}

		/**
		 * カーソルを結果セットの先頭に戻す
		 * <p>これは、次の関数と同等です。</p>
		 * @return void <p><b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.rewind.php
		 * @since PECL mongo >=0.9.0
		 */
		public function rewind(): void {}

		/**
		 * Sets arbitrary flags in case there is no method available the specific flag
		 * <p>The MongoCursor class has several methods for setting flags on the query object. This method is available in case the MongoDB wire protocol has acquired a new flag, and the driver has not been updated with a method for this new flag. In all other cases, the method should be used. See the "See also" section for available methods.</p>
		 * @param int $flag <p>Which flag to set. You can not set flag 6 (EXHAUST) as the driver does not know how to handle them. You will get a warning if you try to use this flag. For available flags, please refer to the wire protocol » documentation.</p>
		 * @param bool $set <p>Whether the flag should be set (<b><code>TRUE</code></b>) or unset (<b><code>FALSE</code></b>).</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocursor.setflag.php
		 * @see MongoCursor::tailable(), MongoCursor::immortal(), MongoCursor::awaitData(), MongoCursor::partial()
		 * @since PECL mongo >=1.2.11
		 */
		public function setFlag(int $flag, bool $set = TRUE): \MongoCursor {}

		/**
		 * このクエリの優先読み込みを設定する
		 * @param string $read_preference <p>読み込みの優先モード。<b><code>MongoClient::RP_PRIMARY</code></b>、<b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>、<b><code>MongoClient::RP_SECONDARY</code></b>、<b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b> あるいは <b><code>MongoClient::RP_NEAREST</code></b> のいずれか。</p>
		 * @param array $tags <p>ゼロ個以上のタグセットの配列。各タグセット自体も配列で、レプリカセットのメンバーのタグにマッチさせる条件として使います。</p>
		 * @return MongoCursor <p>このカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.setreadpreference.php
		 * @see MongoCursor::getReadPreference(), MongoCursorInterface::setReadPreference()
		 * @since PECL mongo >=1.3.3
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): \MongoCursor {}

		/**
		 * 結果をスキップする
		 * @param int $num <p>スキップしたい結果の数。</p>
		 * @return MongoCursor <p>このカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.skip.php
		 * @since PECL mongo >=0.9.0
		 */
		public function skip(int $num): \MongoCursor {}

		/**
		 * Sets whether this query can be done on a secondary [deprecated]
		 * <p>This method is deprecated since version 1.5.0. Instead, please use <code>MongoCursor::setReadPreference()</code> and 優先読み込み.</p><p>Calling this will make the driver route reads to secondaries if:</p><p>Note that you should use this function even if you do not use the automatic routing to secondaries. If you connect directly to a secondary in a replica set, you still need to call this function, which basically tells the database that you are aware that you might be getting older data and you're okay with that. If you do not call this, you'll get "not master" errors when you try to query.</p><p>This method will override the static class variable MongoCursor::$slaveOkay. It will also override <code>Mongo::setSlaveOkay()</code>, <code>MongoDB::setSlaveOkay()</code> and <code>MongoCollection::setSlaveOkay()</code>.</p>
		 * @param bool $okay <p>If it is okay to query the secondary.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocursor.slaveokay.php
		 * @since PECL mongo >=0.9.4
		 */
		public function slaveOkay(bool $okay = TRUE): \MongoCursor {}

		/**
		 * このクエリでスナップショットモードを使う
		 * <p>このクエリでスナップショットモードを使います。 スナップショットモードでは、途中に書き込み操作が混ざった場合にも 同じドキュメントが複数回返されないことを保証します。 カーソルの生存期間中に追加されたり削除されたりしたドキュメントが返されるかどうかは、 スナップショットモードかどうかには関わらず、返されることもあれば返されないこともあります。</p><p>短い (1MB 未満の) クエリの応答は、常に事実上スナップショットになることに注意しましょう。</p><p>ソートや明示的なヒントを指定している場合、あるいは共有コレクションに対するクエリの場合は、 スナップショットモードは用いられません。</p>
		 * @return MongoCursor <p>このカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.snapshot.php
		 * @since PECL mongo >=0.9.4
		 */
		public function snapshot(): \MongoCursor {}

		/**
		 * 指定したフィールドで結果をソートする
		 * @param array $fields <p>ソートするフィールドの配列。配列のキーがフィールド名、そして値には昇順なら <i>1</i>、降順なら <i>-1</i> を指定します。</p> <p>個々の結果は、まず配列内の最初のフィールドでソートされ、次に (もしあれば) 二番目のフィールドでソートされ…というようになります。つまり、 <code>fields</code> 配列でのフィールドを指定する順番が重要になるということです。 サンプルも参照ください。</p>
		 * @return MongoCursor <p>このカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.sort.php
		 * @since PECL mongo >=0.9.0
		 */
		public function sort(array $fields): \MongoCursor {}

		/**
		 * Sets whether this cursor will be left open after fetching the last results
		 * <p>Mongo has a feature known as tailable cursors which are similar to the Unix "tail -f" command.</p><p>Tailable means cursor is not closed when the last data is retrieved. Rather, the cursor marks the final object's position. you can resume using the cursor later, from where it was located, if more data were received.</p><p>Like any "latent cursor", the cursor may become invalid at some point -- for example if that final object it references were deleted. Thus, you should be prepared to requery if the cursor is <code>MongoCursor::dead()</code>.</p>
		 * @param bool $tail <p>If the cursor should be tailable.</p>
		 * @return MongoCursor <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocursor.tailable.php
		 * @see MongoCursor::awaitData()
		 * @since PECL mongo >=0.9.4
		 */
		public function tailable(bool $tail = TRUE): \MongoCursor {}

		/**
		 * このクエリのクライアント側のタイムアウトを設定する
		 * <p>タイムアウトはいつでも設定可能で、同じカーソルでのそれ以降のクエリに影響を及ぼします。 また、データベースからのさらなる結果の取得にもこれは影響します。</p>
		 * @param int $ms <p>カーソルがレスポンスを待つミリ秒数。 ずっと待ち続ける場合は <i>-1</i> を指定します。 デフォルトでは、30000 ミリ秒 (30 秒) だけ待ちます。</p>
		 * @return MongoCursor <p>このカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongocursor.timeout.php
		 * @see MongoClient::__construct()
		 * @since PECL mongo >=1.0.3
		 */
		public function timeout(int $ms): \MongoCursor {}

		/**
		 * Checks if the cursor is reading a valid result
		 * @return bool <p><b><code>TRUE</code></b> if the current result is not null, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongocursor.valid.php
		 * @since PECL mongo >=0.9.0
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>カーソルへの不正なアクセスや応答を受け取る際のエラーが原因です。 このエラーが発生するのは、単なるクエリではなく結果を受け取るリクエストであることに注意しましょう。 書き込みやコマンド、あるいはその他何らかの情報をデータベースに送って結果を待つ操作では <b>MongoCursorException</b> をスローすることがあります。 唯一の例外は <i>new MongoClient()</i> (新しい接続の作成) で、これは MongoConnectionException しかスローしません。</p>
	 * <p>このクラスはエラーメッセージを返します。 このメッセージを見れば、問題の調査の助けになり、 エラーコードに関連付けられた原因もわかります。</p>
	 * <p>たとえば、次のように同じ _id のドキュメントを 2 件追加してみましょう。</p>
	 * <p>よくあるエラーとそのコード、そして原因をまとめました。</p>
	 * <p><i>cannot modify cursor after beginning iteration</i></p>
	 * <p>コード: 0</p>
	 * <p>クエリを実行した後で、クエリの設定を変えるメソッドをコールしました。 いったんカーソルをリセットしてからやりなおしてください。</p>
	 * <p>An example:</p>
	 * <p>Get next batch send errors</p>
	 * <p>コード: 1</p>
	 * <p>クエリをデータベースに送信できませんでした。 データベースが立ち上がっていることとネットワークが正常であることを確認してください。</p>
	 * <p><i>cursor not found</i></p>
	 * <p>コード: 2</p>
	 * <p>ドライバがデータベースから結果を取得しようとしましたが、 データベース側にクエリが残っていませんでした。 たいていは、カーソルがサーバー側でタイムアウトしたことを意味します。 やりとりがない状況が数秒続くと、データベースはカーソルを消します (これを防ぐための方法は <code>MongoCursor::immortal()</code> を参照ください)。</p>
	 * <p>例を示します。</p>
	 * <p><i>cursor-&gt;buf.pos is null</i></p>
	 * <p>コード: 3</p>
	 * <p>これは、RAM から外れてしまったか、 その他の異常な状況になったことを意味します。</p>
	 * <p><i>couldn't get response header</i></p>
	 * <p>コード: 4</p>
	 * <p>データベースあるいはネットワークがダウンしているときによく出るエラーです。 ドライバが接続からの応答を受け取れなかったことを意味します。</p>
	 * <p><i>no db response</i></p>
	 * <p>コード: 5</p>
	 * <p>これはエラーではないかもしれません。たとえば、データベースの "shutdown" コマンドは何も応答を返しません。 しかし、もし何らかの応答を得ることを期待していたのにこのエラーになったのなら、 データベースがその応答を返さなかったことを意味します。</p>
	 * <p><i>bad response length: %d, did the db assert&#63;</i></p>
	 * <p>コード: 6</p>
	 * <p>これは、データベースの応答が 0 未満であることを意味します。 このエラーの原因は、おそらくネットワーク障害かデータベースの破損です。</p>
	 * <p><i>incomplete header</i></p>
	 * <p>コード: 7</p>
	 * <p>めったにありませんが、 データベースの応答が正常にはじまったけれど途中で終わってしまった場合に発生します。 おそらくネットワークの問題でしょう。</p>
	 * <p><i>incomplete response</i></p>
	 * <p>コード: 8</p>
	 * <p>めったにありませんが、 データベースの応答が正常にはじまったけれど途中で終わってしまった場合に発生します。 おそらくネットワークの問題でしょう。</p>
	 * <p><i>couldn't find a response</i></p>
	 * <p>コード: 9</p>
	 * <p>キャッシュされていたレスポンスが見つけられませんでした。</p>
	 * <p><i>error getting socket</i></p>
	 * <p>コード: 10</p>
	 * <p>ソケットが閉じられたか、エラーが発生しました。 ドライバは、(もし可能なら) 次の操作時に自動的に再接続しなければなりません。</p>
	 * <p><i>couldn't find reply, please try again</i></p>
	 * <p>コード: 11</p>
	 * <p>ドライバは、リクエストに直接はマッチしないデータベースからの応答を保存します。 この例外が発生するのは、ドライバがすでにリクエストに対する応答を返した後で、 キャッシュ内に応答を見つけられなかったときです。</p>
	 * <p><i>error getting database response: errstr</i></p>
	 * <p><i>WSA error getting database response: errstr</i></p>
	 * <p>"errstr" は、C のソケットから直接返ってきた入出力エラーです。 Windows では、エラーメッセージの先頭に "WSA" がつきます。</p>
	 * <p><i>Timeout error</i></p>
	 * <p>コード: 13</p>
	 * <p>クエリが完了するのを待つ間に何かエラーが発生しました。</p>
	 * <p><i>couldn't send query: &lt;various&gt;</i></p>
	 * <p>コード: 14</p>
	 * <p>送信時に C のソケットエラーが発生しました。</p>
	 * <p><i>max number of retries exhausted, couldn't send query</i></p>
	 * <p>Code: 19</p>
	 * <p>最初の実行が何らかの原因で失敗したときに、ドライバは自動的に 「プレーンな」クエリ (コマンドではないもの) を何度か再送します。 これは、レプリカセットのフェイルオーバー時の例外の発生を減らし (それでも少しは発生しますが)、 一時的なネットワーク障害を取り繕うためです。</p>
	 * <p>これは、何度実行しても結局データベースに再接続できなかったとき (たとえば、データベースにつながらないときなど) に発生します。</p>
	 * <p>バージョン 1.2.2 で追加されました。</p>
	 * @link https://php.net/manual/ja/class.mongocursorexception.php
	 * @since PECL mongo >= 1.0.0
	 */
	class MongoCursorException extends \MongoException {
	}

	/**
	 * <p>Interface for cursors, which can be used to iterate through results of a database query or command. This interface is implemented by the MongoCursor and MongoCommandCursor classes.</p>
	 * <p><b>注意</b>:  Similar to Traversable, this interface cannot be implemented in PHP scripts. </p>
	 * @link https://php.net/manual/ja/class.mongocursorinterface.php
	 * @since PECL mongo >=1.5.0
	 */
	class MongoCursorInterface extends \Iterator {

		/**
		 * Limits the number of elements returned in one batch
		 * <p>A cursor typically fetches a batch of result objects and stores them locally. This method sets the batch size value to configure the amount of documents retrieved from the server in one round trip.</p>
		 * @param int $batchSize <p>The number of results to return per batch.</p>
		 * @return MongoCursorInterface <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocursorinterface.batchsize.php
		 * @since PECL mongo >=1.5.0
		 */
		abstract public function batchSize(int $batchSize): \MongoCursorInterface;

		/**
		 * 現在の要素を返す
		 * <p>現在の要素を返します。</p>
		 * @return mixed <p>あらゆる型を返すことが可能です。</p>
		 * @link https://php.net/manual/ja/iterator.current.php
		 * @since PHP 5, PHP 7
		 */
		abstract public function current();

		/**
		 * Checks if there are results that have not yet been sent from the database
		 * <p>This method checks whether the cursor has been exhausted and the database has no more results to send to the client. A cursor being "dead" does not necessarily mean that there are no more results available for iteration.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if there are more results that have not yet been sent to the client, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongocursorinterface.dead.php
		 * @since PECL mongo >=1.5.0
		 */
		abstract public function dead(): bool;

		/**
		 * Get the read preference for this query
		 * @return array <p>この関数は、優先読み込みに関する配列を返します。配列に含まれる内容は、<i>type</i> (優先読み込みモードを表す文字列。MongoClient の定数に対応)、そして <i>tagsets</i> (すべてのタグセット条件のリスト) です。タグセットを指定しなかった場合は、<i>tagsets</i> は存在しません。</p>
		 * @link https://php.net/manual/ja/mongocursorinterface.getreadpreference.php
		 * @see MongoCursorInterface::setReadPreference()
		 * @since PECL mongo >=1.6.0
		 */
		abstract public function getReadPreference(): array;

		/**
		 * Gets information about the cursor's creation and iteration
		 * <p>Returns information about the cursor's creation and iteration. This can be called before or after the cursor has started iterating.</p>
		 * @return array <p>Returns the namespace, batch size, limit, skip, flags, query, and projected fields for this cursor. If the cursor has started iterating, additional information about iteration and the connection will be included.</p>
		 * @link https://php.net/manual/ja/mongocursorinterface.info.php
		 * @since PECL mongo >=1.5.0
		 */
		abstract public function info(): array;

		/**
		 * 現在の要素のキーを返す
		 * <p>現在の要素のキーを返します。</p>
		 * @return scalar <p>成功した場合にスカラー型、失敗した場合に <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/iterator.key.php
		 * @since PHP 5, PHP 7
		 */
		abstract public function key(): \scalar;

		/**
		 * 次の要素に進む
		 * <p>現在位置を次の要素に移動します。</p><p><b>注意</b>:</p><p>このメソッドは、各 foreach ループの <i>後</i> にコールされます。</p>
		 * @return void <p>返り値は無視されます。</p>
		 * @link https://php.net/manual/ja/iterator.next.php
		 * @since PHP 5, PHP 7
		 */
		abstract public function next(): void;

		/**
		 * イテレータの最初の要素に巻き戻す
		 * <p>イテレータの最初の要素に巻き戻します。</p><p><b>注意</b>:</p><p>これは、foreach ループの開始時に <i>最初</i> にコールされるメソッドです。 foreach ループの <i>後</i> には実行 <i>されません</i>。</p>
		 * @return void <p>返り値は無視されます。</p>
		 * @link https://php.net/manual/ja/iterator.rewind.php
		 * @since PHP 5, PHP 7
		 */
		abstract public function rewind(): void;

		/**
		 * Set the read preference for this query
		 * @param string $read_preference <p>読み込みの優先モード。<b><code>MongoClient::RP_PRIMARY</code></b>、<b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>、<b><code>MongoClient::RP_SECONDARY</code></b>、<b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b> あるいは <b><code>MongoClient::RP_NEAREST</code></b> のいずれか。</p>
		 * @param array $tags <p>ゼロ個以上のタグセットの配列。各タグセット自体も配列で、レプリカセットのメンバーのタグにマッチさせる条件として使います。</p>
		 * @return MongoCursorInterface <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocursorinterface.setreadpreference.php
		 * @see MongoCursorInterface::getReadPreference()
		 * @since PECL mongo >=1.6.0
		 */
		abstract public function setReadPreference(string $read_preference, array $tags = NULL): \MongoCursorInterface;

		/**
		 * Sets a client-side timeout for this query
		 * <p>A timeout can be set at any time and will affect subsequent data retrieval associated with this cursor, including fetching more results from the database.</p>
		 * @param int $ms <p>The number of milliseconds for the cursor to wait for a response. Use <i>-1</i> to wait forever. By default, the cursor will wait 30000 milliseconds (30 seconds).</p>
		 * @return MongoCursorInterface <p>Returns this cursor.</p>
		 * @link https://php.net/manual/ja/mongocursorinterface.timeout.php
		 * @see MongoClient::__construct()
		 * @since PECL mongo >=1.5.0
		 */
		abstract public function timeout(int $ms): \MongoCursorInterface;

		/**
		 * 現在位置が有効かどうかを調べる
		 * <p>このメソッドは <code>Iterator::rewind()</code> および <code>Iterator::next()</code> の後にコールされ、 現在の位置が有効化どうかを調べます。</p>
		 * @return bool <p>返り値は <code>boolean</code> にキャストして評価されます。 成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/iterator.valid.php
		 * @since PHP 5, PHP 7
		 */
		abstract public function valid(): bool;
	}

	/**
	 * <p>クエリのタイムアウトで発生します。 この例外がスローされるようになるまでの時間の長さを設定することができます。 そのためには、<code>MongoCursor::timeout()</code> をカーソルで実行するか、 あるいは <i>MongoCursor::$timeout</i> を設定します。 静的変数を設定する方法は、データベースコマンドや <code>MongoCollection::findOne()</code> のようなクエリで便利です。 これらはどちらもカーソルの内部で暗黙的に使うからです。</p>
	 * @link https://php.net/manual/ja/class.mongocursortimeoutexception.php
	 * @since PECL mongo >= 1.0.0
	 */
	class MongoCursorTimeoutException extends \MongoCursorException {
	}

	/**
	 * <p>データベースの日付オブジェクトを表します。日付をデータベースに保存したり、 日付を問い合わせたりするときにはこのクラスを使わなければなりません。 次のように使います。</p>
	 * <p><b>例1 <b>MongoDate</b> による日付の保存</b></p>
	 * <p>MongoDB は、日付データをエポックからの経過ミリ秒数で格納します。 つまり、日付にはタイムゾーンの情報が <i>含まれない</i>ということです。 タイムゾーンが必要なら、別のフィールドを用意する必要があります。 また、データベースとの間でドキュメントをやりとりすると、 ミリ秒より細かい単位の情報は失われてしまいます。</p>
	 * @link https://php.net/manual/ja/class.mongodate.php
	 * @since PECL mongo >=0.8.1
	 */
	class MongoDate {

		public $sec;

		public $usec;

		/**
		 * Creates a new date
		 * <p>Creates a new date. If no parameters are given, the current time is used.</p>
		 * @param int $sec <p>Number of seconds since the epoch (i.e. 1 Jan 1970 00:00:00.000 UTC).</p>
		 * @param int $usec <p>Microseconds. Please be aware though that MongoDB's resolution is <i>milliseconds</i> and not microseconds, which means this value will be truncated to millisecond resolution.</p>
		 * @return self <p>Returns this new date.</p>
		 * @link https://php.net/manual/ja/mongodate.construct.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __construct(int $sec  = 'time()', int $usec = 0) {}

		/**
		 * Returns a string representation of this date
		 * <p>Returns a string representation of this date, similar to the representation returned by <code>microtime()</code>.</p>
		 * @return string <p>This date.</p>
		 * @link https://php.net/manual/ja/mongodate.tostring.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __toString(): string {}

		/**
		 * Returns a DateTime object representing this date
		 * <p>Returns the DateTime representation of this date. The returned DateTime will use the UTC time zone.</p>
		 * @return DateTime <p>This date as a DateTime object.</p>
		 * @link https://php.net/manual/ja/mongodate.todatetime.php
		 * @since PECL mongo >= 1.6.0
		 */
		public function toDateTime(): \DateTime {}
	}

	/**
	 * <p>このクラスのインスタンスを使用してデータベースとのやりとりを行います。 データベースを取得するには、このようにします。</p>
	 * <p><b>例1 データベースの選択</b></p>
	 * <p>あまり一般的ではありませんが、 "null"、"[x,y]"、"3"、"\""、"/" などは正しい形式のデータベース名です。</p>
	 * <p>コレクション名とは異なり、データベース名には "$" を含めてもかまいません。</p>
	 * @link https://php.net/manual/ja/class.mongodb.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoDB {

		/**
		 * @var int プロファイリングをオフにします。
		 * @link https://php.net/manual/ja/class.mongodb.php
		 */
		const PROFILING_OFF = 0;

		/**
		 * @var int 襲い接続 (&gt;100 ms) に対するプロファイリングをオンにします。
		 * @link https://php.net/manual/ja/class.mongodb.php
		 */
		const PROFILING_SLOW = 1;

		/**
		 * @var int すべての操作に対するプロファイリングをオンにします。
		 * @link https://php.net/manual/ja/class.mongodb.php
		 */
		const PROFILING_ON = 2;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.mongodb.php#mongodb.props.w
		 */
		public $w = 1;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.mongodb.php#mongodb.props.wtimeout
		 */
		public $wtimeout = 10000;

		/**
		 * 新しいデータベースを作成する
		 * <p>このメソッドは、直接コールすることを想定したものではありません。 MongoDB のインスタンスを作成するための方法としておすすめするのは <b>MongoClient::__get()</b> あるいは <code>MongoClient::selectDB()</code> です。</p><p>上の説明を読んだうえで、それでも直接コールするつもりなら、このようにします。</p><p>でも、こっちのほうがずっとよいでしょう。</p>
		 * @param \MongoClient $conn
		 * @param string $name <p>データベース名。</p>
		 * @return self <p>データベースを返します。</p>
		 * @link https://php.net/manual/ja/mongodb.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoClient $conn, string $name) {}

		/**
		 * コレクションを取得する
		 * <p>データベースオブジェクトからコレクションを取得するための最も簡単な方法です。 コレクション名に特殊な文字が含まれている場合は、かわりに <code>MongoDB::selectCollection()</code> を使います。</p>
		 * @param string $name <p>コレクションの名前。</p>
		 * @return MongoCollection <p>コレクションを返します。</p>
		 * @link https://php.net/manual/ja/mongodb.get.php
		 * @since PECL mongo >=1.0.2
		 */
		public function __get(string $name): \MongoCollection {}

		/**
		 * このデータベースの名前
		 * @return string <p>このデータベースの名前を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.--tostring.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __toString(): string {}

		/**
		 * このデータベースにログインする
		 * <p>このメソッドは、接続を認証済みの状態にします。 データベースサーバーで認証を有効にしていると (デフォルトでは有効になっていません)、 ログインするまでは何もすることができません。</p><p>一般に認証は、このメソッドを使うよりも <code>MongoClient::__construct()</code> に組み込むことを推奨します。 接続時に認証を済ませておけば、接続が中断されて再接続したときにも自動的に認証をやり直します。 このメソッドで後から認証した場合は、 接続が中断されて再接続したらまたこのメソッドをコールし直さなければなりません。</p><p>このメソッドは、次のコードを実行するのと同じ意味です。</p><p>いったん認証を済ませた後、認証前の状態に戻すには データベースの "logout" コマンドを実行します。</p>
		 * @param string $username <p>ユーザー名。</p>
		 * @param string $password <p>パスワード (プレーンテキスト)。</p>
		 * @return array <p>データベースからの応答を返します。ログインに成功すると、次のようになります。</p> <code> &lt;&#63;php<br>array("ok" =&gt; 1);<br>&#63;&gt;  </code>  何かが失敗した場合は、次のようになります。  <code> &lt;&#63;php<br>array("ok" =&gt; 0, "errmsg" =&gt; "auth fails");<br>&#63;&gt;  </code>  ("auth fails" は別のメッセージかもしれません。 データベースのバージョンや問題の原因によって変わります)。
		 * @link https://php.net/manual/ja/mongodb.authenticate.php
		 * @since PECL mongo >=1.0.1
		 */
		public function authenticate(string $username, string $password): array {}

		/**
		 * データベースコマンドを実行する
		 * <p>CRUD 操作以外のほとんどすべての操作は、データベースコマンドで行います。 データベースのバージョンを知りたい&#63; それ用のコマンドがあります。 集約が必要ですって&#63; そのためのコマンドがあります。 ログを記録したい&#63; もちろん可能です。</p><p>このメソッドは、次のような関数と同じ働きをします。</p>
		 * @param array $command <p>送信したいクエリ。</p>
		 * @param array $options <p>インデックスを作るオプションの配列です。現在サポートするオプションは次のとおりです。</p><ul> <li> <p><i>"socketTimeoutMS"</i></p> <p>このオプションは、ソケット通信の制限時間を、ミリ秒単位で指定します。この時間内にサーバーからの反応がなければ、MongoCursorTimeoutException をスローします。この場合、サーバー側で書き込み処理が行われたのかどうかを判断できなくなります。<i>-1</i> を指定すると、永遠にブロックします。MongoClient のデフォルト値は <i>30000</i> (30 秒) です。</p> </li> </ul> <p>以下のオプションは非推奨で、使ってはいけません。</p><ul> <li> <p><i>"timeout"</i></p> <p>非推奨。<i>"socketTimeoutMS"</i> のエイリアス。</p> </li> </ul>
		 * @param string $hash <p>コマンドを実行するサーバーの接続ハッシュを設定します。 コマンドの結果が MongoCommandCursor の作成に適したものである場合、このハッシュは <code>MongoCommandCursor::createFromDocument()</code> に渡されます。</p> <p>このハッシュは、 <code>MongoClient::getConnections()</code> が返す接続に対応しています。</p>
		 * @return array <p>データベースの応答を返します。データベースの応答はすべて、 最大で 1 件のドキュメントになります。つまり、データベースへのコマンドの結果は決して 16MB を超えないということです。結果のドキュメントの構造はコマンドによって異なりますが、 大半の結果には <i>ok</i> フィールドがあって、これが成功したか失敗したかを表します。 また、同じく大半の結果には <i>results</i> フィールドもあって、 ここにドキュメントの配列が含まれます。</p>
		 * @link https://php.net/manual/ja/mongodb.command.php
		 * @since PECL mongo >=0.9.2
		 */
		public function command(array $command, array $options = array(), string &$hash = NULL): array {}

		/**
		 * コレクションを作成する
		 * <p>このメソッドを使って、固定サイズのコレクションや 特別なオプションを要するその他のコレクションを作成します。 これは、次の操作と同じ意味です。</p>
		 * @param string $name <p>コレクションの名前。</p>
		 * @param array $options <p>コレクションのオプションを含む配列。個々のオプション用の要素がこの配列に用意されており、 以下に挙げるオプション名が配列のキーになります。サポートするオプションは、 MongoDB サーバーのバージョンやストレージエンジンによって変わります。 また，ドライバーは、受け取ったオプションをすべてそのままサーバーに渡します。 現時点でサポートするオプションの一部を以下に示します。すべてのオプションの一覧は、 MongoDB コアドキュメントの » createCollection を参照ください。</p> <p></p>  <code>capped</code>   <p>コレクションが固定サイズかどうか。</p>   <code>size</code>   <p>コレクションが固定サイズの場合にそのバイト数を指定します。</p>   <code>max</code>   <p>コレクションが固定サイズの場合に、コレクション内に格納できる要素の最大数。</p>   <code>autoIndexId</code>   <p>capped が <b><code>TRUE</code></b> のときにこれを <b><code>FALSE</code></b> にすると、<i>_id</i> フィールド上での自動的なインデックス作成を無効化できます。 MongoDB 2.2 より前のバージョンでは、 <i>autoIndexId</i> のデフォルト値は <b><code>FALSE</code></b> でした。</p>
		 * @return MongoCollection <p>新しいコレクションをあらわすコレクションオブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/mongodb.createcollection.php
		 * @since PECL mongo >=0.9.0
		 */
		public function createCollection(string $name, array $options = NULL): \MongoCollection {}

		/**
		 * データベース参照を作成する
		 * <p>このメソッドは、データベース参照を作るための柔軟なインターフェイスです (MongoDBRef を参照ください)。</p>
		 * @param string $collection <p>データベース参照が指すコレクション。</p>
		 * @param mixed $document_or_id <p>配列あるいはオブジェクトを渡した場合は、その <i>_id</i> フィールドを参照 ID として利用します。 MongoId あるいはスカラーを渡した場合は、 それ自体を参照 ID として利用します。</p>
		 * @return array <p>データベース参照配列を返します。</p><p><i>_id</i> フィールドがない配列を <i>document_or_id</i> に渡した場合は、<b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.createdbref.php
		 * @since PECL mongo >=0.9.0
		 */
		public function createDBRef(string $collection, $document_or_id): array {}

		/**
		 * このデータベースを削除する
		 * <p>これは、現在使っているデータベースを削除します。</p><p>次のコードと同じ意味です。</p>
		 * @return array <p>データベースの応答を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.drop.php
		 * @since PECL mongo >=0.9.0
		 */
		public function drop(): array {}

		/**
		 * コレクションを削除する [非推奨]
		 * <p>かわりに <code>MongoCollection::drop()</code> を使ってください。</p><p><i> この関数は、バージョン 1.0.7 以前ではメモリリークが発生します! </i></p>
		 * @param mixed $coll <p>削除したい MongoCollection あるいはコレクション名。</p>
		 * @return array <p>データベースの応答を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.dropcollection.php
		 * @since PECL mongo >=0.9.0
		 */
		public function dropCollection($coll): array {}

		/**
		 * JavaScript コードをデータベースサーバー上で実行する [非推奨]
		 * <p>このメソッドが実行する » eval コマンドは、 MongoDB 3.0+ では非推奨となりました。</p><p>Mongo データベースサーバーは JavaScript エンジンを持っています。 このメソッドを使うと、任意の JavaScript をデータベース上で実行することができます。 大量のコレクションの操作を軽量に行ったり、 結果に対する何らかの処理をデータベース側で行うことでクライアント側への送信量を減らしたり といった際に有用です。</p><p>データベース内での JavaScript の実行時には書き込みロックを取得します。 つまり、他の操作をブロックするということです。長いスクリプトを実行する前にはこのことを考慮しましょう。</p><p>これは、データベースコマンド » eval のラッパーで、次のコードと同じ意味です。</p><p>MongoDB は、ひとつの文を一行に書くと return 文があるものとみなします。 これは、あまり直感的でない振る舞いのもととなります。 たとえば、これは "foo" を返します。</p><p>しかし、これらはどちらも <b><code>NULL</code></b> を返します。</p><p>この驚くべき振る舞いを回避するには、何を返すのかを MongoDB に決めさせるのではなく return する値を明示しておけばよいでしょう。 先ほどの例では、このように書き換えることができます。</p><p>これで、最初の文は "foo" を返して 二番目の文は "foo" コレクションの数を返すようになります。</p>
		 * @param mixed $code <p>実行したい MongoCode あるいは文字列。</p>
		 * @param array $args <p><i>code</i> に渡す引数。</p>
		 * @return array <p>評価した結果を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.execute.php
		 * @since PECL mongo >=0.9.3
		 */
		public function execute($code, array $args = array()): array {}

		/**
		 * データベースのエラーを作成する
		 * <p>MongoDB を普通に使っている限り、このメソッドはあまり有用ではありません。 このメソッドは、データベースにエラーを起こさせます。つまり、このコマンドを実行した後は、 <code>MongoDB::lastError()</code> が一般的なデータベースエラーを返すということです。</p><p>このコマンドは、次のコードと同じ意味です。</p>
		 * @return bool <p>データベースからの応答を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.forceerror.php
		 * @since PECL mongo >=0.9.5
		 */
		public function forceError(): bool {}

		/**
		 * Returns information about collections in this database
		 * <p>Gets a list of all collections in the database and returns them as an array of documents, which contain their names and options.</p><p><b>注意</b>: このメソッドは、MongoDB 2.8 以降と通信する際に、データベースコマンド » listCollections を利用します。以前のバージョンのデータベースの場合は、特別なコレクション <i>system.namespaces</i> を問い合わせます。</p>
		 * @param array $options <p>An array of options for listing the collections. Currently available options include:</p><ul> <li> <p><i>"filter"</i></p> <p>オプションの問い合わせ条件。これを指定すると、結果に含まれるコレクションをその条件でフィルタリングします。</p> <p>問い合わせの対象となる関連フィールドには、<i>"name"</i> (コレクション名を表す文字列。データベース名のプレフィックスは含まない) や <i>"options"</i> (コレクションを作成するために用いるオプションを含むオブジェクト) があります。</p> <p><b>注意</b>: MongoDB 2.6 以前のバージョンでは、<i>"name"</i> の条件指定には文字列しか使えませんでした (一致する文字列だけに絞り込むなど)。これは、ドライバが <i>system.namespaces</i> コレクションに問い合わせるときに、その値をデータベース名の先頭に付加する必要があったからです。最新版の MongoDB にはこの制約がなくなりました。listCollections コマンドを使うようになったからです。</p> </li> <li> <p><i>"includeSystemCollections"</i></p> <p>Boolean で、デフォルトは <b><code>FALSE</code></b> です。system コレクションを結果に含めるかどうかを指定します。</p> </li> </ul> <p>The following option may be used with MongoDB 2.8+:</p><ul> <li> <p><i>"maxTimeMS"</i></p> <p>サーバー上で操作を行う累積時間の制限 (アイドル時間を含まない) を、ミリ秒単位で指定します。この時間内にサーバー側の操作が完了しなければ、MongoExecutionTimeoutException をスローします。</p> </li> </ul>
		 * @return array <p>This function returns an array where each element is an array describing a collection. Elements will contain a <i>name</i> key denoting the name of the collection, and optionally contain an <i>options</i> key denoting an array of objects used to create the collection. For example, capped collections will include <i>capped</i> and <i>size</i> options.</p>
		 * @link https://php.net/manual/ja/mongodb.getcollectioninfo.php
		 * @see MongoDB::getCollectionNames(), MongoDB::listCollections()
		 * @since PECL mongo >=1.6.0
		 */
		public function getCollectionInfo(array $options = array()): array {}

		/**
		 * このデータベースのすべてのコレクション名の配列を取得する
		 * <p>指定したデータベースのすべてのコレクションのリストを取得し、その名前を文字列の配列で返します。</p><p><b>注意</b>: このメソッドは、MongoDB 2.8 以降と通信する際に、データベースコマンド » listCollections を利用します。以前のバージョンのデータベースの場合は、特別なコレクション <i>system.namespaces</i> を問い合わせます。</p>
		 * @param array $options <p>コレクションの一覧を取得する際のオプションの配列。現在利用可能なオプションは、以下のとおりです。</p><ul> <li> <p><i>"filter"</i></p> <p>オプションの問い合わせ条件。これを指定すると、結果に含まれるコレクションをその条件でフィルタリングします。</p> <p>問い合わせの対象となる関連フィールドには、<i>"name"</i> (コレクション名を表す文字列。データベース名のプレフィックスは含まない) や <i>"options"</i> (コレクションを作成するために用いるオプションを含むオブジェクト) があります。</p> <p><b>注意</b>: MongoDB 2.6 以前のバージョンでは、<i>"name"</i> の条件指定には文字列しか使えませんでした (一致する文字列だけに絞り込むなど)。これは、ドライバが <i>system.namespaces</i> コレクションに問い合わせるときに、その値をデータベース名の先頭に付加する必要があったからです。最新版の MongoDB にはこの制約がなくなりました。listCollections コマンドを使うようになったからです。</p> </li> <li> <p><i>"includeSystemCollections"</i></p> <p>Boolean で、デフォルトは <b><code>FALSE</code></b> です。system コレクションを結果に含めるかどうかを指定します。</p> </li> </ul> <p>以下のオプションは、MongoDB 2.8 以降で利用可能です。</p><ul> <li> <p><i>"maxTimeMS"</i></p> <p>サーバー上で操作を行う累積時間の制限 (アイドル時間を含まない) を、ミリ秒単位で指定します。この時間内にサーバー側の操作が完了しなければ、MongoExecutionTimeoutException をスローします。</p> </li> </ul>
		 * @return array <p>コレクションの名前を文字列の配列で返します。</p>
		 * @link https://php.net/manual/ja/mongodb.getcollectionnames.php
		 * @see MongoDB::listCollections(), MongoDB::getCollectionInfo()
		 * @since PECL mongo >=1.3.0
		 */
		public function getCollectionNames(array $options = array()): array {}

		/**
		 * データベース参照が指すドキュメントを取得する
		 * @param array $ref <p>データベース参照。</p>
		 * @return array <p>参照が指すドキュメントを返します。</p>
		 * @link https://php.net/manual/ja/mongodb.getdbref.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getDBRef(array $ref): array {}

		/**
		 * このデータベースに格納されているファイルを扱うためのツールキットを取得する
		 * @param string $prefix
		 * @return MongoGridFS <p>このデータベースの新しい gridfs オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/mongodb.getgridfs.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getGridFS(string $prefix = "fs"): \MongoGridFS {}

		/**
		 * このデータベースのプロファイリングレベルを取得する
		 * <p>現在のデータベースのプロファイリングレベルを返します。</p><p>データベースプロファイラは、クエリの実行時間を調べます。これを (<code>MongoDB::setProfilingLevel()</code> やシェルを使って) 有効にすると、 指定したミリ秒を超える時間がかかったクエリの数や 全クエリの実行時間を取得できます。</p><p>プロファイリングを実行するとクエリの所要時間が長くなるので、 実行速度が重要なアプリケーションでは開発時やテスト時に使うことをおすすめします。</p><p>この関数は、以下のコードと同じ意味です。</p>
		 * @return int <p>プロファイリングレベルを返します。</p>
		 * @link https://php.net/manual/ja/mongodb.getprofilinglevel.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getProfilingLevel(): int {}

		/**
		 * このデータベースの優先読み込みを取得する
		 * @return array <p>この関数は、優先読み込みに関する配列を返します。配列に含まれる内容は、<i>type</i> (優先読み込みモードを表す文字列。MongoClient の定数に対応)、そして <i>tagsets</i> (すべてのタグセット条件のリスト) です。タグセットを指定しなかった場合は、<i>tagsets</i> は存在しません。</p>
		 * @link https://php.net/manual/ja/mongodb.getreadpreference.php
		 * @see MongoDB::setReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function getReadPreference(): array {}

		/**
		 * このデータベースの slaveOkay 設定を取得する
		 * <p>読み込みのセカンダリへの分散についての情報は、このマニュアルの 問い合わせの節 を参照ください。</p>
		 * @return bool <p>このインスタンスの slaveOkay の値を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.getslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function getSlaveOkay(): bool {}

		/**
		 * Get the write concern for this database
		 * @return array <p>この関数は、書き込み確認を表す配列を返します。<i>w</i> の値はサーバーの台数を表す整数値かモードを表す文字列、そして <i>wtimeout</i> の値はサーバーが書き込み確認を待つ最大ミリ秒数です。</p>
		 * @link https://php.net/manual/ja/mongodb.getwriteconcern.php
		 * @see MongoDB::setWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function getWriteConcern(): array {}

		/**
		 * 直近のデータベース操作でエラーが発生したかどうかを調べる
		 * <p>このメソッドは次のコードと同じ意味です。</p>
		 * @return array <p>エラーがあった場合はそれを返します。</p>
		 * @link https://php.net/manual/ja/mongodb.lasterror.php
		 * @since PECL mongo >=0.9.5
		 */
		public function lastError(): array {}

		/**
		 * このデータベース内のすべてのコレクションの MongoCollection オブジェクトの配列を取得する
		 * <p>データベース内のすべてのコレクションのリストを取得し、 MongoCollection オブジェクトの配列で返します。</p><p><b>注意</b>: このメソッドは、MongoDB 2.8 以降と通信する際に、データベースコマンド » listCollections を利用します。以前のバージョンのデータベースの場合は、特別なコレクション <i>system.namespaces</i> を問い合わせます。</p>
		 * @param array $options <p>コレクションの一覧を取得する際のオプションの配列。現在利用可能なオプションは、以下のとおりです。</p><ul> <li> <p><i>"filter"</i></p> <p>オプションの問い合わせ条件。これを指定すると、結果に含まれるコレクションをその条件でフィルタリングします。</p> <p>問い合わせの対象となる関連フィールドには、<i>"name"</i> (コレクション名を表す文字列。データベース名のプレフィックスは含まない) や <i>"options"</i> (コレクションを作成するために用いるオプションを含むオブジェクト) があります。</p> <p><b>注意</b>: MongoDB 2.6 以前のバージョンでは、<i>"name"</i> の条件指定には文字列しか使えませんでした (一致する文字列だけに絞り込むなど)。これは、ドライバが <i>system.namespaces</i> コレクションに問い合わせるときに、その値をデータベース名の先頭に付加する必要があったからです。最新版の MongoDB にはこの制約がなくなりました。listCollections コマンドを使うようになったからです。</p> </li> <li> <p><i>"includeSystemCollections"</i></p> <p>Boolean で、デフォルトは <b><code>FALSE</code></b> です。system コレクションを結果に含めるかどうかを指定します。</p> </li> </ul> <p>以下のオプションは、MongoDB 2.8 以降で利用可能です。</p><ul> <li> <p><i>"maxTimeMS"</i></p> <p>サーバー上で操作を行う累積時間の制限 (アイドル時間を含まない) を、ミリ秒単位で指定します。この時間内にサーバー側の操作が完了しなければ、MongoExecutionTimeoutException をスローします。</p> </li> </ul>
		 * @return array <p>MongoCollection オブジェクトの配列を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.listcollections.php
		 * @see MongoDB::getCollectionNames(), MongoDB::getCollectionInfo()
		 * @since PECL mongo >=0.9.0
		 */
		public function listCollections(array $options = array()): array {}

		/**
		 * データベース操作中の直近に発生したエラーを調べる
		 * <p><code>MongoDB::lastError()</code> のほうが通常はおすすめです。 このメソッドは、直近に発生したデータベースエラーと、 それが何回前の操作で発生したのかを返します。廃止予定です。</p>
		 * @return array <p>エラーと、それが何回前の操作で発生したかを返します。</p>
		 * @link https://php.net/manual/ja/mongodb.preverror.php
		 * @since PECL mongo >=0.9.5
		 */
		public function prevError(): array {}

		/**
		 * このデータベースを修復・圧縮する
		 * <p>これは、データベースのすべてのデータの最新コピーを作成します。 壊れたデータは削除し、データを圧縮して空き領域を拡大します。 大きなデータベースでは非常に長い時間がかかります。</p><p>通常はシェルやコマンドラインから実行し、ドライバから実行することはありません。</p><p>これは、次の関数と同じ意味です。</p>
		 * @param bool $preserve_cloned_files <p>修復に失敗した場合に、コピーしたファイルを保持します。</p>
		 * @param bool $backup_original_files <p>元ファイルをバックアップするかどうか。</p>
		 * @return array <p>データベースの応答を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.repair.php
		 * @since PECL mongo >=0.9.0
		 */
		public function repair(bool $preserve_cloned_files = FALSE, bool $backup_original_files = FALSE): array {}

		/**
		 * データベースで発生したすべてのエラーをクリアする
		 * <p>通常の操作では、このメソッドは使いません。このメソッドは、データベースのエラートラッカーをリセットします (<code>MongoDB::forceError()</code> で増やすことができますが、このメソッドも通常は使いません)。</p><p>これは、次のコードと同じ意味です。</p>
		 * @return array <p>データベースからの応答を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.reseterror.php
		 * @since PECL mongo >=0.9.5
		 */
		public function resetError(): array {}

		/**
		 * コレクションを取得する
		 * @param string $name <p>コレクションの名前。</p>
		 * @return MongoCollection <p>コレクションを返します。</p>
		 * @link https://php.net/manual/ja/mongodb.selectcollection.php
		 * @since PECL mongo >=0.9.0
		 */
		public function selectCollection(string $name): \MongoCollection {}

		/**
		 * このデータベースのプロファイリングレベルを設定する
		 * <p>現在のデータベースのプロファイリングレベルを変更します。</p><p>この関数は、次のコードと同じ意味です。</p><p>level に指定できる値は 0 (off)、1 (100ms を超えるクエリ) および 2 (すべてのクエリ) です。 別の時間を指定してそれを超える所要時間のクエリを調べるには、データベースのコマンドを使って 二番目のオプションにミリ秒数を指定します。 たとえば、所要時間が 1 秒より長いクエリをすべて調べるには次のようにします。</p><p>プロファイルされたクエリは、このデータベースの <i>system.profile</i> コレクションに入ります。</p>
		 * @param int $level <p>プロファイリングレベル。</p>
		 * @return int <p>前に設定されていたプロファイリングレベルを返します。</p>
		 * @link https://php.net/manual/ja/mongodb.setprofilinglevel.php
		 * @since PECL mongo >=0.9.0
		 */
		public function setProfilingLevel(int $level): int {}

		/**
		 * このデータベースの優先読み込みを設定する
		 * @param string $read_preference <p>読み込みの優先モード。<b><code>MongoClient::RP_PRIMARY</code></b>、<b><code>MongoClient::RP_PRIMARY_PREFERRED</code></b>、<b><code>MongoClient::RP_SECONDARY</code></b>、<b><code>MongoClient::RP_SECONDARY_PREFERRED</code></b> あるいは <b><code>MongoClient::RP_NEAREST</code></b> のいずれか。</p>
		 * @param array $tags <p>ゼロ個以上のタグセットの配列。各タグセット自体も配列で、レプリカセットのメンバーのタグにマッチさせる条件として使います。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.setreadpreference.php
		 * @see MongoDB::getReadPreference()
		 * @since PECL mongo >=1.3.0
		 */
		public function setReadPreference(string $read_preference, array $tags = NULL): bool {}

		/**
		 * Change slaveOkay setting for this database
		 * <p>See the query section of this manual for information on distributing reads to secondaries.</p>
		 * @param bool $ok <p>If reads should be sent to secondary members of a replica set for all possible queries using this MongoDB instance.</p>
		 * @return bool <p>Returns the former value of slaveOkay for this instance.</p>
		 * @link https://php.net/manual/ja/mongodb.setslaveokay.php
		 * @since PECL mongo >=1.1.0
		 */
		public function setSlaveOkay(bool $ok = TRUE): bool {}

		/**
		 * Set the write concern for this database
		 * @param mixed $w <p>書き込み確認。何台のサーバーに書き込めたら成功とみなすのかを表す整数値、あるいは文字列 ("majority" など) でモードを指定します。</p>
		 * @param int $wtimeout <p>サーバーが書き込み確認を待つ最大ミリ秒数。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongodb.setwriteconcern.php
		 * @see MongoDB::getWriteConcern()
		 * @since PECL mongo >=1.5.0
		 */
		public function setWriteConcern($w, int $wtimeout = NULL): bool {}
	}

	/**
	 * <p>このクラスを使用して、別々のコレクション内にあるオブジェクト間の軽量なリンクを作成します。</p>
	 * <p><i>動機</i>: 別のコレクションにあるドキュメントを参照する必要が出てきたとしましょう。 いちばん簡単な方法は、現在のドキュメントにフィールドを作ることです。 たとえば、"people" コレクションと "addresses" コレクションがあるときに 人物のドキュメントと住所のドキュメントをリンクさせたいことがあるでしょう。</p>
	 * <p><b>例1 ドキュメントのリンク</b></p>
	 * <p>そうすれば、誰かの住所を知りたくなったときには、 "people" コレクションに保存した MongoId を使って "addresses" コレクションを検索することができます。</p>
	 * <p>もう少し一般化してみましょう。参照したいドキュメントがどのコレクション (あるいはどのデータベース) にあるかわからない場合です。こんな場合に <b>MongoDBRef</b> が使えます。 これは共通のフォーマットであり、すべてのドライバやデータベースが理解できるからです。</p>
	 * <p>各個人が「好きなもの」リストを持っており、それはいろいろなコレクション ("hobbies", "sports", "books" など) にあるとしましょう。 <b>MongoDBRef</b> を使えば、それぞれがどのコレクションからのものかを管理できます。</p>
	 * <p><b>例2 MongoDBRef リンクの作成</b></p>
	 * <p>データベース参照は、ハイパーリンクのようなものととらえることができます。 別のドキュメントに関する一意なアドレスを提供しますが、 それを読み込んだり自動的にリンク先/参照先をたどったりはしません。</p>
	 * <p>データベース参照は単なる連想配列であり、 <b>MongoDBRef</b> のインスタンスではありません。 そのため、このクラスは他のデータ型クラスとは多少異なります。 このクラスに含まれているのは、 データベース参照を操作するための静的メソッドだけです。</p>
	 * @link https://php.net/manual/ja/class.mongodbref.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoDBRef {

		/**
		 * 新しいデータベース参照を作成する
		 * <p>データベースを指定しない場合は、現在のデータベースを使います。</p>
		 * @param string $collection <p>コレクションの名前 (データベース名を除く)。</p>
		 * @param mixed $id <p>リンクするオブジェクトの _id フィールド。</p>
		 * @param string $database <p>データベースの名前。</p>
		 * @return array <p>参照を返します。</p>
		 * @link https://php.net/manual/ja/mongodbref.create.php
		 * @since PECL mongo >= 0.9.0
		 */
		public static function create(string $collection, $id, string $database = NULL): array {}

		/**
		 * 参照が指すオブジェクトを取得する
		 * @param \MongoDB $db <p>使用するデータベース。</p>
		 * @param array $ref <p>取得したい参照。</p>
		 * @return array <p>参照が指すドキュメントを返します。ドキュメントが存在しない (参照が壊れている) 場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongodbref.get.php
		 * @since PECL mongo >= 0.9.0
		 */
		public static function get(\MongoDB $db, array $ref): array {}

		/**
		 * 配列がデータベース参照か否かを調べる
		 * <p>このメソッドは実際に参照先をたどることはありません。そのため、参照が壊れているかどうかは判断できません。 単に、<code>ref</code> が正しいデータベース参照形式 (オブジェクトあるいは配列で、$ref フィールドおよび $id フィールドを持つ) であるかどうかを調べるだけです。</p>
		 * @param mixed $ref <p>調べたい配列あるいはオブジェクト。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongodbref.isref.php
		 * @since PECL mongo >= 0.9.0
		 */
		public static function isRef($ref): bool {}
	}

	/**
	 * <p>Constructs a batch of DELETE operations. See MongoWriteBatch.</p>
	 * @link https://php.net/manual/ja/class.mongodeletebatch.php
	 * @since PECL mongo >=1.5.0
	 */
	class MongoDeleteBatch extends \MongoWriteBatch {

		/**
		 * Description
		 * <p>Constructs a batch of DELETE operations. See MongoWriteBatch.</p>
		 * @param \MongoCollection $collection <p>バッチを実行する MongoCollection。確認付き書き込み をコピーして、デフォルトとして使います。<code>$write_options</code> で指定したり、<code>MongoWriteBatch::execute()</code> で指定したりすることもできます。</p>
		 * @param array $write_options <p>書き込みオプションの配列。</p>   キー 値     w (int|string)  WriteConcern の値   wtimeout (int) レプリケーションを待つ時間の最大値   ordered MongoDB にこのバッチを順番どおりに実行させるのかどうかを指定する。順番どおりの書き込みはシリアルに (一度に一行ずつ) 実行され、最初にエラーが発生した時点で実行は中断する。順番どおりでない書き込みはパラレルに実行され、エラーが発生しても処理は中断しない。デフォルトは <b><code>TRUE</code></b>    j (bool) プライマリーへのジャーナリングを待つかどうか。これは非推奨なので、かわりに確認付き書き込みを使うこと   fsync (bool) プライマリーへの fsync を待つかどうか。これは非推奨なので、かわりに確認付き書き込みを使うこと
		 * @return self <p>A new MongoDeleteBatch.</p>
		 * @link https://php.net/manual/ja/mongodeletebatch.construct.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function __construct(\MongoCollection $collection, array $write_options = NULL) {}

		/**
		 * Adds a write operation to a batch
		 * <p>Adds a write operation to the batch.</p><p>If <code>$item</code> causes the batch to exceed the <i>maxWriteBatchSize</i> or <i>maxBsonObjectSize</i> limits, the driver will internally split the batches into multiple write commands upon calling <code>MongoWriteBatch::execute()</code>.</p>
		 * @param array $item <p>An array that describes a write operation. The structure of this value depends on the batch's operation type.</p>   Batch type Argument expectation     <b><code>MongoWriteBatch::COMMAND_INSERT</code></b>  The document to add.    <b><code>MongoWriteBatch::COMMAND_UPDATE</code></b>  <p>Raw update operation.</p> <p>Required keys are <i>"q"</i> and <i>"u"</i>, which correspond to the <code>$criteria</code> and <code>$new_object</code> parameters of <code>MongoCollection::update()</code>, respectively.</p> <p>Optional keys are <i>"multi"</i> and <i>"upsert"</i>, which correspond to the <i>"multiple"</i> and <i>"upsert"</i> options for <code>MongoCollection::update()</code>, respectively. If unspecified, both options default to <b><code>FALSE</code></b>.</p>    <b><code>MongoWriteBatch::COMMAND_DELETE</code></b>  <p>Raw delete operation.</p> <p>Required keys are: <i>"q"</i> and <i>"limit"</i>, which correspond to the <code>$criteria</code> parameter and <i>"justOne"</i> option of <code>MongoCollection::remove()</code>, respectively.</p> <p>The <i>"limit"</i> option is an <code>integer</code>; however, MongoDB only supports <i>0</i> (i.e. remove all matching documents) and <i>1</i> (i.e. remove at most one matching document) at this time.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/mongowritebatch.add.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function add(array $item): bool {}

		/**
		 * Executes a batch of write operations
		 * <p>Executes the batch of write operations.</p>
		 * @param array $write_options <p>See MongoWriteBatch::__construct.</p>
		 * @return array <p>Returns an array containing statistical information for the full batch. If the batch had to be split into multiple batches, the return value will aggregate the values from individual batches and return only the totals.</p><p>If the batch was empty, an array containing only the 'ok' field is returned (as <b><code>TRUE</code></b>) although nothing will be shipped over the wire (NOOP).</p>   Array key Value meaning Returned for batch type     nInserted Number of inserted documents MongoWriteBatch::COMMAND_INSERT batch   nMatched Number of documents matching the query criteria MongoWriteBatch::COMMAND_UPDATE batch   nModified Number of documents actually needed to be modied MongoWriteBatch::COMMAND_UPDATE batch   nUpserted Number of upserted documents MongoWriteBatch::COMMAND_UPDATE batch   nRemoved Number of documents removed MongoWriteBatch::COMMAND_DELETE batch   ok Command success indicator All
		 * @link https://php.net/manual/ja/mongowritebatch.execute.php
		 * @since PECL mongo >= 1.5.0
		 */
		final public function execute(array $write_options): array {}
	}

	/**
	 * <p>Thrown when attempting to insert a document into a collection which already contains the same values for the unique keys.</p>
	 * @link https://php.net/manual/ja/class.mongoduplicatekeyexception.php
	 * @since PECL mongo >= 1.5.0
	 */
	class MongoDuplicateKeyException extends \MongoWriteConcernException {

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
		 * Get the error document
		 * <p>Returns the actual response from the server that was interperated as an error.</p>
		 * @return array <p>A MongoDB document, if available, as an array.</p>
		 * @link https://php.net/manual/ja/mongowriteconcernexception.getdocument.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function getDocument(): array {}
	}

	/**
	 * <p>Mongo のデフォルトの例外です。</p>
	 * <p>さまざまなエラー条件を扱います。最終的にはより詳細な例外にたどり着きますが、 それらもすべて <b>MongoException</b> を継承しています。</p>
	 * <p><i>The MongoSomething object has not been correctly initialized by its constructor</i></p>
	 * <p>コード: 0</p>
	 * <p>おそらく、Mongo オブジェクトがデータベースに接続していないものと思われます。</p>
	 * <p><i>zero-length keys are not allowed, did you use $ with double quotes&#63;</i></p>
	 * <p>コード: 1</p>
	 * <p>キーとして "" を使おうとしました。一般的に、これはしていはいけないことです。 "" を使うとサブオブジェクトへのアクセスが煩雑になり、またこのキーは MongoDB が内部的に使ってもいます。しかし、どうしても使いたい場合は、php.ini ファイルで mongo.allow_empty_keys に true を設定すればこのチェックを回避できます。 回避するよう設定した場合は、エラーチェックをより厳密に行って 文字列書き込みエラーを防ぐことを推奨します。</p>
	 * <p><i>'.' not allowed in key: &lt;key&gt;</i></p>
	 * <p>コード: 2</p>
	 * <p>'.' を含むキーに書き込もうとしました。これは禁じられています。</p>
	 * <p><i>insert too large: &lt;size&gt;, max: &lt;max&gt;</i></p>
	 * <p>コード: 3</p>
	 * <p>長すぎるデータをデータベースに一度に送ろうとしました。データベースがデータの追加を受け付けるのは、 ある特定の大きさ (現在は 16 MB) までです。</p>
	 * <p><i>no elements in doc</i></p>
	 * <p>コード: 4</p>
	 * <p>フィールドを持たないドキュメントを保存しようとしました。</p>
	 * <p><i>size of BSON doc is &lt;size&gt; bytes, max &lt;max&gt;MB</i></p>
	 * <p>コード: 5</p>
	 * <p>MongoDB で保存可能な長さを超えるドキュメントを保存しようとしました。</p>
	 * <p><i>no documents given</i></p>
	 * <p>コード: 6</p>
	 * <p>空のドキュメントの配列を一括追加しようとしました。</p>
	 * <p><i>MongoCollection::group takes an array, object, or MongoCode key</i></p>
	 * <p>コード: 7</p>
	 * <p>間違った型パラメータを <code>MongoCollection::group()</code> に送信しました。</p>
	 * <p><i>field names must be strings</i></p>
	 * <p>コード: 8</p>
	 * <p>フィールドセレクタの書式は <i>array("field1" =&gt; 1, "field2" =&gt; 1, ..., "fieldN" =&gt; 1)</i> としなければなりません。</p>
	 * <p><i>invalid regex</i></p>
	 * <p>コード: 9</p>
	 * <p>MongoRegex に渡した正規表現が正しい形式ではありません。</p>
	 * <p><i>MongoDBRef::get: $ref field must be a string</i></p>
	 * <p>コード: 10</p>
	 * <p><i>MongoDBRef::get: $db field must be a string</i></p>
	 * <p>コード: 11</p>
	 * <p><i>non-utf8 string: &lt;str&gt;</i></p>
	 * <p>コード: 12</p>
	 * <p>このエラーが発生するのは、非 utf8 文字列をデータベースに送信しようとしたときです。 データベースに送る文字列はすべて UTF8 でなければなりません。 この例外を発生させなくする移行用オプションは、php.ini のオプションを参照ください。</p>
	 * <p><i>mutex error: &lt;err&gt;</i></p>
	 * <p>コード: 13</p>
	 * <p>マルチスレッド環境では、ドライバはリクエストとレスポンスの同期にミューテックスを使います。 これはきわめて深刻なエラーで、スタックトレースもないかもしれません。 めったに発生しないエラーなので、システムの情報と可能な限りの再現手順を添えてメンテナに報告しましょう。</p>
	 * <p><i>index name too long: &lt;len&gt;, max &lt;max&gt; characters</i></p>
	 * <p>コード: 14</p>
	 * <p>128 文字を超える名前のインデックスは作れません。このエラーが発生した場合は、 <code>MongoCollection::ensureIndex()</code> の "name" オプションを使って短いインデックス名をつけなければなりません。</p>
	 * @link https://php.net/manual/ja/class.mongoexception.php
	 * @since PECL mongo >= 1.0.0
	 */
	class MongoException extends \Exception {
	}

	/**
	 * <p>Thrown when a operation times out server side (i.e. in MongoDB).</p>
	 * <p>To configure the operation timeout threshold, use <code>MongoCursor::maxTimeMS()</code> or the <i>"maxTimeMS"</i> command option.</p>
	 * @link https://php.net/manual/ja/class.mongoexecutiontimeoutexception.php
	 * @since PECL mongo >= 1.5.0
	 */
	class MongoExecutionTimeoutException extends \MongoException {

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
		 * Sets a server-side timeout for this query
		 * <p>Specifies a cumulative time limit in milliseconds to be allowed by the server for processing operations on the cursor.</p>
		 * @param int $ms <p>Specifies a cumulative time limit in milliseconds to be allowed by the server for processing operations on the cursor.</p>
		 * @return MongoCursor <p>This cursor.</p>
		 * @link https://php.net/manual/ja/mongocursor.maxtimems.php
		 * @since PECL mongo >=1.5.0
		 */
		public function maxTimeMS(int $ms): \MongoCursor {}
	}

	/**
	 * <p>データベースにファイルを格納したり、データベースからファイルを取得したりするためのユーティリティです。</p>
	 * <p>GridFS はストレージの仕様で、すべてのドライバがこれを実装しています。 基本的に、これはふたつのコレクションを定義しています。 ファイルのメタデータ用の <i>files</i>、 そしてファイルの中身用の <i>chunks</i> です。 大きなファイルの場合は自動的に小さなチャンクに分割し、 各チャンクが chunks コレクションのドキュメントとして保存されます。</p>
	 * <p>files コレクション内の各ドキュメントには、ファイル名とアップロードした日付、 そして md5 ハッシュが含まれています。 また、一意な <i>_id</i> フィールドも持っており、 これを使ってそのファイルの中身がある chunks コレクションを探すことができます。 chunks コレクション内の各ドキュメントには、バイナリデータのチャンクの他に そのファイルの <i>_id</i> フィールドにマッチする <i>files_id</i> フィールドが含まれ、さらに ファイル全体の中でそのチャンクがどの位置にあるのかという情報も含まれます。</p>
	 * <p>files ドキュメントの内容は、たとえばこのようになります。</p>
	 * @link https://php.net/manual/ja/class.mongogridfs.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoGridFS extends \MongoCollection {

		public $chunks = NULL;

		protected $filesName = NULL;

		protected $chunksName = NULL;

		/**
		 * 新しいファイルコレクションを作成する
		 * <p>ファイルはふたつのコレクションにまたがって格納されます。 最初のコレクションにはファイルのメタ情報が、 そしてふたつめのコレクションには実際のファイルのチャンクが含まれます。 デフォルトでは、fs.files および fs.chunks は使用するコレクション名となります。</p><p>"fs" 以外のプレフィックスを使用するには引数をひとつ使用します。</p>
		 * @param \MongoDB $db <p>データベース。</p>
		 * @param string $prefix
		 * @param mixed $chunks
		 * @return self
		 * @link https://php.net/manual/ja/mongogridfs.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoDB $db, string $prefix = "fs", $chunks = "fs") {}

		/**
		 * ファイルとそのチャンクをデータベースから削除する
		 * <p><b>注意</b>:</p><p><b>MongoGridFS::delete()</b> は利便性のためのメソッドで、 <code>MongoGridFS::remove()</code> に特定の <code>criteria</code> を指定して、デフォルトの <code>options</code> で呼び出すのと同じ動きをします。</p>
		 * @param mixed $id <p>削除したいファイルの <i>_id</i>。</p>
		 * @return bool|array <p>書き込み確認 を適用している場合は、配列を返します。 この配列には、削除が成功したかどうか (<i>files</i> コレクションを尊重したもの) を含みます。 それ以外の場合は <b><code>TRUE</code></b> を返します。</p><p>配列の各フィールドの意味については、 <code>MongoCollection::insert()</code> のドキュメントを参照ください。</p>
		 * @link https://php.net/manual/ja/mongogridfs.delete.php
		 * @since PECL mongo >=1.0.8
		 */
		public function delete($id) {}

		/**
		 * ファイルコレクションおよびチャンクコレクションを削除する
		 * @return array <p>データベースの応答を返します。</p>
		 * @link https://php.net/manual/ja/mongogridfs.drop.php
		 * @since PECL mongo >=0.9.0
		 */
		public function drop(): array {}

		/**
		 * ファイルを問い合わせる
		 * @param array $query <p>クエリ。</p>
		 * @param array $fields <p>返したいフィールド。</p>
		 * @return MongoGridFSCursor <p>MongoGridFSCursor を返します。</p>
		 * @link https://php.net/manual/ja/mongogridfs.find.php
		 * @since PECL mongo >=0.9.0
		 */
		public function find(array $query = array(), array $fields = array()): \MongoGridFSCursor {}

		/**
		 * 条件にマッチする単一のファイルを返す
		 * @param mixed $query <p>探したいファイル名あるいは条件。</p>
		 * @param mixed $fields
		 * @return MongoGridFSFile <p>MongoGridFSFile、あるいは <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongogridfs.findone.php
		 * @since PECL mongo >=0.9.0
		 */
		public function findOne($query = array(), $fields = array()): \MongoGridFSFile {}

		/**
		 * ファイルをデータベースから取得する
		 * @param mixed $id <p>探したいファイルの <i>_id</i>。</p>
		 * @return MongoGridFSFile <p>見つかった場合はそのファイル、見つからない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongogridfs.get.php
		 * @since PECL mongo >=1.0.8
		 */
		public function get($id): \MongoGridFSFile {}

		/**
		 * ファイルをデータベースに格納する
		 * <p><b>注意</b>:</p><p><b>MongoGridFS::put()</b> は、<code>MongoGridFS::storeFile()</code> のエイリアスです。</p>
		 * @param string $filename <p>格納するファイルの名前。</p>
		 * @param array $metadata <p>格納するファイルに含めるその他のメタデータフィールド。</p>  <p><b>注意</b>:</p> <p>これらのフィールドは、ドライバが自動生成したフィールドも上書きします。詳しい説明は、MongoDB コアドキュメントの » files collection を参照ください。この挙動の現実的な使い道としては、ファイルの <i>chunkSize</i> や <i>_id</i> を独自に指定する場合などがあります。</p>
		 * @param array $options <p><i>chunks</i> および <i>files</i> コレクションに対して追加操作を実行するときの、オプションの配列。 オプションの意味については、<code>MongoCollection::insert()</code> を参照ください。</p>
		 * @return mixed <p>格納したファイルドキュメントの <i>_id</i> を返します。<code>metadata</code> パラメータで <i>_id</i> を明示的に指定していない場合は、自動生成した MongoId となります。</p>
		 * @link https://php.net/manual/ja/mongogridfs.put.php
		 * @see MongoGridFS::storeBytes(), MongoGridFS::storeFile(), MongoGridFS::storeUpload()
		 * @since PECL mongo >=1.0.8
		 */
		public function put(string $filename, array $metadata = array(), array $options = array()) {}

		/**
		 * ファイルとそのチャンクをデータベースから削除する
		 * @param array $criteria <p>探したいファイル名あるいは条件。</p>
		 * @param array $options <p><i>chunks</i> および <i>files</i> コレクションに対して削除操作を実行するときの、オプションの配列。 オプションの意味については、<code>MongoCollection::remove()</code> を参照ください。</p>
		 * @return bool|array <p><i>"w"</i> オプションを設定している場合は、配列を返します。 この配列には、削除が成功したかどうか (<i>files</i> コレクションを尊重したもの) を含みます。 それ以外の場合は <b><code>TRUE</code></b> を返します。</p><p>配列の各フィールドの意味については、 <code>MongoCollection::insert()</code> のドキュメントを参照ください。</p>
		 * @link https://php.net/manual/ja/mongogridfs.remove.php
		 * @since PECL mongo >=0.9.0
		 */
		public function remove(array $criteria = array(), array $options = array()) {}

		/**
		 * バイト列をデータベースに格納する
		 * @param string $bytes <p>格納したいバイト列。</p>
		 * @param array $metadata <p>格納するファイルに含めるその他のメタデータフィールド。</p>  <p><b>注意</b>:</p> <p>これらのフィールドは、ドライバが自動生成したフィールドも上書きします。詳しい説明は、MongoDB コアドキュメントの » files collection を参照ください。この挙動の現実的な使い道としては、ファイルの <i>chunkSize</i> や <i>_id</i> を独自に指定する場合などがあります。</p>
		 * @param array $options <p><i>chunks</i> および <i>files</i> コレクションに対して追加操作を実行するときの、オプションの配列。 オプションの意味については、<code>MongoCollection::insert()</code> を参照ください。</p>
		 * @return mixed <p>格納したファイルドキュメントの <i>_id</i> を返します。<code>metadata</code> パラメータで <i>_id</i> を明示的に指定していない場合は、自動生成した MongoId となります。</p>
		 * @link https://php.net/manual/ja/mongogridfs.storebytes.php
		 * @see MongoGridFS::put(), MongoGridFS::storeFile(), MongoGridFS::storeUpload()
		 * @since PECL mongo >=0.9.2
		 */
		public function storeBytes(string $bytes, array $metadata = array(), array $options = array()) {}

		/**
		 * ファイルをデータベースに格納する
		 * @param string|resource $filename <p>格納するファイルの名前、あるいは読み込み可能なストリーム。</p>
		 * @param array $metadata <p>格納するファイルに含めるその他のメタデータフィールド。</p>  <p><b>注意</b>:</p> <p>これらのフィールドは、ドライバが自動生成したフィールドも上書きします。詳しい説明は、MongoDB コアドキュメントの » files collection を参照ください。この挙動の現実的な使い道としては、ファイルの <i>chunkSize</i> や <i>_id</i> を独自に指定する場合などがあります。</p>
		 * @param array $options <p><i>chunks</i> および <i>files</i> コレクションに対して追加操作を実行するときの、オプションの配列。 オプションの意味については、<code>MongoCollection::insert()</code> を参照ください。</p>
		 * @return mixed <p>格納したファイルドキュメントの <i>_id</i> を返します。<code>metadata</code> パラメータで <i>_id</i> を明示的に指定していない場合は、自動生成した MongoId となります。</p>
		 * @link https://php.net/manual/ja/mongogridfs.storefile.php
		 * @see MongoGridFS::put(), MongoGridFS::storeBytes(), MongoGridFS::storeUpload()
		 * @since PECL mongo >=0.9.0
		 */
		public function storeFile($filename, array $metadata = array(), array $options = array()) {}

		/**
		 * アップロードされたファイルをデータベースに格納する
		 * @param string $name <p>アップロードされたファイルの name フィールド。 これは、HTML フォームの file フィールドの <i>name</i> 属性と同じでなければいけません。</p>
		 * @param array $metadata <p>格納するファイルに含めるその他のメタデータフィールド。</p>  <p><b>注意</b>:</p> <p>これらのフィールドは、ドライバが自動生成したフィールドも上書きします。詳しい説明は、MongoDB コアドキュメントの » files collection を参照ください。この挙動の現実的な使い道としては、ファイルの <i>chunkSize</i> や <i>_id</i> を独自に指定する場合などがあります。</p>   <p><b>注意</b>:</p> <p><i>filename</i> フィールドには、クライアントのファイル名 (<i>$_FILES['foo']['name']</i> など) が入ります。</p>
		 * @return mixed <p>格納したファイルドキュメントの <i>_id</i> を返します。<code>metadata</code> パラメータで <i>_id</i> を明示的に指定していない場合は、自動生成した MongoId となります。</p> <p><b>注意</b>:</p> <p>複数のファイルを同じフィールド名でアップロード した場合は、このメソッドは何も返しません。 しかし、ファイル自体の処理はそのまま行われます。</p>
		 * @link https://php.net/manual/ja/mongogridfs.storeupload.php
		 * @see MongoGridFS::put(), MongoGridFS::storeBytes(), MongoGridFS::storeFile()
		 * @since PECL mongo >=0.9.0
		 */
		public function storeUpload(string $name, array $metadata = NULL) {}
	}

	/**
	 * <p>データベースからのファイル用のカーソルです。</p>
	 * @link https://php.net/manual/ja/class.mongogridfscursor.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoGridFSCursor extends \MongoCursor {

		protected $gridfs = NULL;

		/**
		 * 新しいカーソルを作成する
		 * @param \MongoGridFS $gridfs <p>関連する GridFS コレクション。</p>
		 * @param resource $connection <p>データベース接続。</p>
		 * @param string $ns <p>データベースおよびコレクションのフルネーム。</p>
		 * @param array $query <p>データベースクエリ。</p>
		 * @param array $fields <p>返したいフィールド。</p>
		 * @return self <p>新しいカーソルを返します。</p>
		 * @link https://php.net/manual/ja/mongogridfscursor.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoGridFS $gridfs, $connection, string $ns, array $query, array $fields) {}

		/**
		 * 現在のファイルを返す
		 * @return MongoGridFSFile <p>現在のファイルを返します。</p>
		 * @link https://php.net/manual/ja/mongogridfscursor.current.php
		 * @since PECL mongo >=0.9.0
		 */
		public function current(): \MongoGridFSFile {}

		/**
		 * カーソルが指す次のファイルを返し、カーソルを進める
		 * @return MongoGridFSFile <p>次のファイルを返します。</p>
		 * @link https://php.net/manual/ja/mongogridfscursor.getnext.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getNext(): \MongoGridFSFile {}

		/**
		 * 現在の結果のファイル名を返す
		 * @return string <p>現在の結果の _id を文字列で返します。</p>
		 * @link https://php.net/manual/ja/mongogridfscursor.key.php
		 * @since PECL mongo >=0.9.0
		 */
		public function key(): string {}
	}

	/**
	 * <p>データベースのファイルの読み書きでエラーが発生した場合にスローします。</p>
	 * @link https://php.net/manual/ja/class.mongogridfsexception.php
	 * @since PECL mongo >= 1.0.0
	 */
	class MongoGridFSException extends \MongoException {
	}

	/**
	 * <p>データベースファイルオブジェクト。</p>
	 * @link https://php.net/manual/ja/class.mongogridfsfile.php
	 * @since PECL mongo >=0.9.0
	 */
	class MongoGridFSFile {

		public $file = NULL;

		protected $gridfs = NULL;

		/**
		 * 新しい GridFS ファイルを作成する
		 * @param \MongoGridFS $gridfs <p>親の MongoGridFS インスタンス。</p>
		 * @param array $file <p>データベースからのファイル。</p>
		 * @return self <p>新しい MongoGridFSFile を返します。</p>
		 * @link https://php.net/manual/ja/mongogridfsfile.construct.php
		 * @since PECL mongo >=0.9.0
		 */
		public function __construct(\MongoGridFS $gridfs, array $file) {}

		/**
		 * このファイルの内容をバイト文字列で返す
		 * <p>これはファイルをメモリに読み込みます。 ファイルのサイズがメモリの量より大きい場合は問題が発生することに注意しましょう。</p>
		 * @return string <p>ファイルの内容をバイト文字列で返します。</p>
		 * @link https://php.net/manual/ja/mongogridfsfile.getbytes.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getBytes(): string {}

		/**
		 * このファイルのファイル名を返す
		 * @return string <p>ファイル名を返します。</p>
		 * @link https://php.net/manual/ja/mongogridfsfile.getfilename.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getFilename(): string {}

		/**
		 * 格納されたファイルを読むために使うリソースを返す
		 * <p>このメソッドが返すストリームリソースを、PHP のすべてのファイル操作関数群 (ファイルを読み込む関数) で使えます。 ファイルの中身を MongoDB からその場で取り出せるので、 わざわざファイル全体をメモリに読み込む必要がありません。</p><p>メモリ内に読み込まれるのは、最大でも二つまでの GridFSFile チャンクです。</p>
		 * @return resource <p>ファイルを読み込むために使うリソースを返します。</p>
		 * @link https://php.net/manual/ja/mongogridfsfile.getresource.php
		 * @since PECL mongo >=1.3.0
		 */
		public function getResource() {}

		/**
		 * このファイルのサイズを返す
		 * @return int <p>このファイルのサイズを返します。</p>
		 * @link https://php.net/manual/ja/mongogridfsfile.getsize.php
		 * @since PECL mongo >=0.9.0
		 */
		public function getSize(): int {}

		/**
		 * このファイルをファイルシステムに書き込む
		 * @param string $filename <p>ファイルの書き込み先。指定しなかった場合は、 格納されているファイル名を使用します。</p>
		 * @return int <p>書き込んだバイト数を返します。</p>
		 * @link https://php.net/manual/ja/mongogridfsfile.write.php
		 * @since PECL mongo >=0.9.0
		 */
		public function write(string $filename = NULL): int {}
	}

	/**
	 * <p>A unique identifier created for database objects. If an object is inserted into the database without an _id field, an _id field will be added to it with a <b>MongoId</b> instance as its value. If the data has a naturally occuring unique field (e.g. username or timestamp) it is fine to use this as the _id field instead, and it will not be replaced with a <b>MongoId</b>.</p>
	 * <p>Instances of the <b>MongoId</b> class fulfill the role that autoincrementing does in a relational database: to provide a unique key if the data does not naturally have one. Autoincrementing does not work well with a sharded database, as it is difficult to determine the next number in the sequence. This class fulfills the constraints of quickly generating a value that is unique across shards.</p>
	 * <p>Each MongoId is 12 bytes (making its string form 24 hexadecimal characters). The first four bytes are a timestamp, the next three are a hash of the client machine's hostname, the next two are the two least significant bytes of the process id running the script, and the last three bytes are an incrementing value.</p>
	 * <p><b>MongoId</b>s are serializable/unserializable. Their serialized form is similar to their string form:</p>
	 * @link https://php.net/manual/ja/class.mongoid.php
	 * @since PECL mongo >=0.8.0
	 */
	class MongoId {

		/**
		 * @var string This field contains the string representation of this object.  <p><b>注意</b>:  The property name begins with a <i>$</i> character. It may be accessed using complex variable parsed syntax (e.g. <i>$mongoId-&gt;{'$id'}</i>). </p>
		 * @link https://php.net/manual/ja/class.mongoid.php#mongoid.props.id
		 */
		public $id = NULL;

		/**
		 * Creates a new id
		 * @param string|\MongoId $id <p>A string (must be 24 hexadecimal characters) or a MongoId instance.</p>
		 * @return self <p>Returns a new id.</p>
		 * @link https://php.net/manual/ja/mongoid.construct.php
		 * @since PECL mongo >= 0.8.0
		 */
		public function __construct($id = NULL) {}

		/**
		 * ダミー MongoId を作成する
		 * <p>この関数は PHP が内部的に使うためだけのもので、 ユーザーがコールする必要はありません。</p><p>これは、次の関数と同じ意味です。</p>
		 * @param array $props <p>理論上は、新しい id を作るときに使うプロパティの配列です。 しかし、MongoId のインスタンスにはプロパティがないので、これは使いません。</p>
		 * @return MongoId <p>値 "000000000000000000000000" を持つ新しい id を返します。</p>
		 * @link https://php.net/manual/ja/mongoid.set-state.php
		 * @since PECL mongo >= 1.0.8
		 */
		public static function __set_state(array $props): \MongoId {}

		/**
		 * Returns a hexidecimal representation of this id
		 * @return string <p>This id.</p>
		 * @link https://php.net/manual/ja/mongoid.tostring.php
		 * @since PECL mongo >= 0.8.0
		 */
		public function __toString(): string {}

		/**
		 * このマシンの id に使うホスト名を取得する
		 * <p>MongoId が一意な id を作るために使うホスト名を返します。 これは <code>gethostname()</code> の返り値と同じものとなります。</p><p>これは、次の関数と同じ意味です。</p>
		 * @return string <p>ホスト名を返します。</p>
		 * @link https://php.net/manual/ja/mongoid.gethostname.php
		 * @since PECL mongo >= 1.0.8
		 */
		public static function getHostname(): string {}

		/**
		 * この id を作るためにインクリメントされた値を取得する
		 * @return int <p>この MongoId を作るためにインクリメントされた値を返します。</p>
		 * @link https://php.net/manual/ja/mongoid.getinc.php
		 * @since PECL mongo >= 1.0.11
		 */
		public function getInc(): int {}

		/**
		 * プロセス ID を取得する
		 * <p>Mongo ID から pid を取り出します。</p>
		 * @return int <p>MongoId の PID を返します。</p>
		 * @link https://php.net/manual/ja/mongoid.getpid.php
		 * @since PECL mongo >= 1.0.11
		 */
		public function getPID(): int {}

		/**
		 * この id が作られたときのエポックからの経過秒数を取得する
		 * <p>これは、id が作られたときに <code>time()</code> を実行した結果と同じものを返します。</p>
		 * @return int <p>この id が作られたときのエポックからの経過秒数を返します。 タイムスタンプの格納領域は 4 バイトしかないので、実際の時刻や幅広い時間を格納するには MongoDate のほうが適しています。</p>
		 * @link https://php.net/manual/ja/mongoid.gettimestamp.php
		 * @since PECL mongo >= 1.0.1
		 */
		public function getTimestamp(): int {}

		/**
		 * Check if a value is a valid ObjectId
		 * <p>This method may be used to check a variable before passing it as an argument to <code>MongoId::__construct()</code>.</p>
		 * @param mixed $value <p>The value to check for validity.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>value</code> is a MongoId instance or a string consisting of exactly 24 hexadecimal characters; otherwise, <b><code>FALSE</code></b> is returned.</p>
		 * @link https://php.net/manual/ja/mongoid.isvalid.php
		 * @since PECL mongo >= 1.5.0
		 */
		public static function isValid($value): bool {}
	}

	/**
	 * <p>Constructs a batch of INSERT operations. See MongoWriteBatch.</p>
	 * @link https://php.net/manual/ja/class.mongoinsertbatch.php
	 * @since PECL mongo >=1.5.0
	 */
	class MongoInsertBatch extends \MongoWriteBatch {

		/**
		 * Description
		 * <p>Constructs a batch of INSERT operations. See MongoWriteBatch.</p>
		 * @param \MongoCollection $collection <p>バッチを実行する MongoCollection。確認付き書き込み をコピーして、デフォルトとして使います。<code>$write_options</code> で指定したり、<code>MongoWriteBatch::execute()</code> で指定したりすることもできます。</p>
		 * @param array $write_options <p>書き込みオプションの配列。</p>   キー 値     w (int|string)  WriteConcern の値   wtimeout (int) レプリケーションを待つ時間の最大値   ordered MongoDB にこのバッチを順番どおりに実行させるのかどうかを指定する。順番どおりの書き込みはシリアルに (一度に一行ずつ) 実行され、最初にエラーが発生した時点で実行は中断する。順番どおりでない書き込みはパラレルに実行され、エラーが発生しても処理は中断しない。デフォルトは <b><code>TRUE</code></b>    j (bool) プライマリーへのジャーナリングを待つかどうか。これは非推奨なので、かわりに確認付き書き込みを使うこと   fsync (bool) プライマリーへの fsync を待つかどうか。これは非推奨なので、かわりに確認付き書き込みを使うこと
		 * @return self <p>A new MongoInsertBatch.</p>
		 * @link https://php.net/manual/ja/mongoinsertbatch.construct.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function __construct(\MongoCollection $collection, array $write_options = NULL) {}

		/**
		 * Adds a write operation to a batch
		 * <p>Adds a write operation to the batch.</p><p>If <code>$item</code> causes the batch to exceed the <i>maxWriteBatchSize</i> or <i>maxBsonObjectSize</i> limits, the driver will internally split the batches into multiple write commands upon calling <code>MongoWriteBatch::execute()</code>.</p>
		 * @param array $item <p>An array that describes a write operation. The structure of this value depends on the batch's operation type.</p>   Batch type Argument expectation     <b><code>MongoWriteBatch::COMMAND_INSERT</code></b>  The document to add.    <b><code>MongoWriteBatch::COMMAND_UPDATE</code></b>  <p>Raw update operation.</p> <p>Required keys are <i>"q"</i> and <i>"u"</i>, which correspond to the <code>$criteria</code> and <code>$new_object</code> parameters of <code>MongoCollection::update()</code>, respectively.</p> <p>Optional keys are <i>"multi"</i> and <i>"upsert"</i>, which correspond to the <i>"multiple"</i> and <i>"upsert"</i> options for <code>MongoCollection::update()</code>, respectively. If unspecified, both options default to <b><code>FALSE</code></b>.</p>    <b><code>MongoWriteBatch::COMMAND_DELETE</code></b>  <p>Raw delete operation.</p> <p>Required keys are: <i>"q"</i> and <i>"limit"</i>, which correspond to the <code>$criteria</code> parameter and <i>"justOne"</i> option of <code>MongoCollection::remove()</code>, respectively.</p> <p>The <i>"limit"</i> option is an <code>integer</code>; however, MongoDB only supports <i>0</i> (i.e. remove all matching documents) and <i>1</i> (i.e. remove at most one matching document) at this time.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/mongowritebatch.add.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function add(array $item): bool {}

		/**
		 * Executes a batch of write operations
		 * <p>Executes the batch of write operations.</p>
		 * @param array $write_options <p>See MongoWriteBatch::__construct.</p>
		 * @return array <p>Returns an array containing statistical information for the full batch. If the batch had to be split into multiple batches, the return value will aggregate the values from individual batches and return only the totals.</p><p>If the batch was empty, an array containing only the 'ok' field is returned (as <b><code>TRUE</code></b>) although nothing will be shipped over the wire (NOOP).</p>   Array key Value meaning Returned for batch type     nInserted Number of inserted documents MongoWriteBatch::COMMAND_INSERT batch   nMatched Number of documents matching the query criteria MongoWriteBatch::COMMAND_UPDATE batch   nModified Number of documents actually needed to be modied MongoWriteBatch::COMMAND_UPDATE batch   nUpserted Number of upserted documents MongoWriteBatch::COMMAND_UPDATE batch   nRemoved Number of documents removed MongoWriteBatch::COMMAND_DELETE batch   ok Command success indicator All
		 * @link https://php.net/manual/ja/mongowritebatch.execute.php
		 * @since PECL mongo >= 1.5.0
		 */
		final public function execute(array $write_options): array {}
	}

	/**
	 * <p>このクラスを使うと、32 ビット整数値を 64 ビットシステム上のデータベースに保存することができます。</p>
	 * @link https://php.net/manual/ja/class.mongoint32.php
	 * @since PECL mongo >=1.0.9
	 */
	class MongoInt32 {

		/**
		 * @var string 32 ビット数値を文字列で表した値。たとえば 123 の value は "123" となります。
		 * @link https://php.net/manual/ja/class.mongoint32.php#mongoint32.props.value
		 */
		public $value;

		/**
		 * Creates a new 32-bit integer
		 * <p>Creates a new 32-bit number with the given value.</p>
		 * @param string $value <p>A number.</p>
		 * @return self <p>Returns a new integer.</p>
		 * @link https://php.net/manual/ja/mongoint32.construct.php
		 * @since PECL mongo >= 1.0.9
		 */
		public function __construct(string $value) {}

		/**
		 * Returns the string representation of this 32-bit integer
		 * @return string <p>Returns the string representation of this integer.</p>
		 * @link https://php.net/manual/ja/mongoint32.tostring.php
		 * @since PECL mongo >= 1.0.9
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>このクラスを使うと、64 ビット整数値を 32 ビットシステム上のデータベースに保存することができます。</p>
	 * @link https://php.net/manual/ja/class.mongoint64.php
	 * @since PECL mongo >=1.0.9
	 */
	class MongoInt64 {

		/**
		 * @var string 64 ビット数値を文字列で表した値。たとえば 123 の value は "123" となります。
		 * @link https://php.net/manual/ja/class.mongoint64.php#mongoint64.props.value
		 */
		public $value;

		/**
		 * Creates a new 64-bit integer
		 * <p>Creates a new 64-bit number with the given value.</p>
		 * @param string $value <p>A number.</p>
		 * @return self <p>Returns a new integer.</p>
		 * @link https://php.net/manual/ja/mongoint64.construct.php
		 * @since PECL mongo >= 1.0.9
		 */
		public function __construct(string $value) {}

		/**
		 * Returns the string representation of this 64-bit integer
		 * @return string <p>Returns the string representation of this integer.</p>
		 * @link https://php.net/manual/ja/mongoint64.tostring.php
		 * @since PECL mongo >= 1.0.9
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>ログ機能を使うと、ドライバが何をしているのかに関する詳細な情報を取得できます。 ログ機能はデフォルトでは無効になっています。しかし、このクラスを使うと、 ドライバの特定の部分について指定したレベルでのログ出力を有効にできます。 たとえば次のように使います。</p>
	 * <p><b>注意</b>:</p>
	 * <p>デフォルトでは、MongoLog はすべてのログメッセージを PHP の notice として発行します。 利用する SAPI によって、 このメッセージが <i>stderr</i> に送られる (CLI の場合) こともあれば、ウェブサーバーのエラーログに書き出されることもあります、 MongoLog を設定したのにログメッセージが期待通りに出力されない場合は、 error_reporting の設定に <b><code>E_NOTICE</code></b> が含まれているかどうかと、 display_errors が on になっているかどうかを確認しましょう。</p>
	 * @link https://php.net/manual/ja/class.mongolog.php
	 * @since PECL mongo >=1.2.3
	 */
	class MongoLog {

		/**
		 * @var int ログ出力を無効にする。
		 * @link https://php.net/manual/ja/class.mongolog.php
		 */
		const NONE = 0;

		/**
		 * @var int すべてをログ出力する。
		 * @link https://php.net/manual/ja/class.mongolog.php
		 */
		const ALL = 31;

		/**
		 * @var int これは、何かおかしいけれども例外を発生させるほどではないできごと (復旧可能な接続エラーなど) を記録します。
		 * @link https://php.net/manual/ja/class.mongolog.php
		 */
		const WARNING = 1;

		/**
		 * @var int 管理者にとっては有用だと思われるが 特に注目には値しないできごと (オプションのパース、認証処理など) を記録します。
		 * @link https://php.net/manual/ja/class.mongolog.php
		 */
		const INFO = 2;

		/**
		 * @var int ドライバの動作における大半のできごと (サーバーの選択やソケット通信など) を記録します。記録対象のモジュールにもよりますが、 ログがノイズまみれになる可能性もあります。主な用途はデバッグです。
		 * @link https://php.net/manual/ja/class.mongolog.php
		 */
		const FINE = 4;

		/**
		 * @var int レプリカセットの活動を記録します。フェイルオーバーや、 優先読み込みの選択などです。
		 * @link https://php.net/manual/ja/class.mongolog.php
		 */
		const RS = 1;

		/**
		 * @var int かつては接続プールの活動を記録していました。今は非推奨で、 <b><code>MongoLog::RS</code></b> のエイリアスとなっています。
		 * @link https://php.net/manual/ja/class.mongolog.php
		 */
		const POOL = 1;

		/**
		 * @var int 接続のアクティビティを記録します。 新規接続の作成、認証、ping、タイムアウトなどです。
		 * @link https://php.net/manual/ja/class.mongolog.php
		 */
		const CON = 2;

		/**
		 * @var int データベースとのトラフィックを記録します。 ちょっとした小物プログラムでない限り、 これを有効にすると大量のログメッセージが記録されます。
		 * @link https://php.net/manual/ja/class.mongolog.php
		 */
		const IO = 4;

		/**
		 * @var int かつてはサーバーの状態の変更を記録していました。今は非推奨で、 <b><code>MongoLog::RS</code></b> のエイリアスとなっています。
		 * @link https://php.net/manual/ja/class.mongolog.php
		 */
		const SERVER = 8;

		/**
		 * @var int MongoClient を作成するときの、 接続文字列やオプションのパースを記録します。
		 * @link https://php.net/manual/ja/class.mongolog.php
		 */
		const PARSE = 16;

		private static $callback;

		private static $level;

		private static $module;

		/**
		 * 以前に設定されたコールバック関数の名前を取得する
		 * <p>コールバック関数を取得します。</p>
		 * @return callable <p>コールバック関数を返します。まだ設定されていない場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongolog.getcallback.php
		 * @since PECL mongo >= 1.3.0
		 */
		public static function getCallback(): callable {}

		/**
		 * 現在記録されているログレベルを取得する
		 * <p>この関数を使うと、現在有効になっているログのレベルを調べることができます。 返される整数値をビット演算子で MongoLog レベル定数 と比較すると、ログレベルを判断できます。</p>
		 * @return int <p>現在記録されているログレベルを返します。</p>
		 * @link https://php.net/manual/ja/mongolog.getlevel.php
		 * @since PECL mongo >= 1.2.3
		 */
		public static function getLevel(): int {}

		/**
		 * 現在ログを記録しているモジュールを取得する
		 * <p>この関数を使って、どのドライバモジュールをログに記録しているのかを調べます。 返される整数値をビット演算子で MongoLog モジュール定数 と比較すると、特定のモジュールのログが記録されているかどうかを判断できます。</p>
		 * @return int <p>現在ログを記録しているモジュールを返します。</p>
		 * @link https://php.net/manual/ja/mongolog.getmodule.php
		 * @since PECL mongo >= 1.2.3
		 */
		public static function getModule(): int {}

		/**
		 * イベントに対応して呼ばれるコールバック関数を設定する
		 * <p>この関数は、コールバック関数を設定します。これは、 のイベントに対応して、警告を発する代わりに呼ばれるものです。</p>
		 * @param callable $log_function <p>イベントに対応して呼ばれるコールバック関数。 関数のプロトタイプは、次のようになります。</p> <p></p> log_function ( int <code>$module</code> , int <code>$level</code> , string <code>$message</code> )   <code>module</code>    MongoLog モジュール定数 のいずれか。    <code>level</code>    MongoLog レベル定数 のいずれか。    <code>message</code>    ログメッセージ。
		 * @return void <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongolog.setcallback.php
		 * @since PECL mongo >= 1.3.0
		 */
		public static function setCallback(callable $log_function): void {}

		/**
		 * 記録するログレベルを設定する
		 * <p>この関数で、どの程度の冗長性でログを記録するかとどんな活動を記録するかを設定します。 MongoLog レベル定数 をビット演算子でつなぐと、複数のレベルを指定できます。</p><p><code>MongoLog::setModule()</code> を使って、 ドライバのどの部分をログに記録するのかを選ばなければならないことに注意しましょう。</p>
		 * @param int $level <p>記録したいログのレベル。</p>
		 * @return void
		 * @link https://php.net/manual/ja/mongolog.setlevel.php
		 * @since PECL mongo >= 1.2.3
		 */
		public static function setLevel(int $level): void {}

		/**
		 * ログに記録するモジュールを設定する
		 * <p>この関数を使って、どのドライバモジュールをログに記録するのかを設定します。 MongoLog モジュール定数 をビット演算子でつなぐと、複数のモジュールを指定できます。</p><p>ログの記録を有効にするには <code>MongoLog::setLevel()</code> もコールする必要があることに注意しましょう。</p>
		 * @param int $module <p>ログを記録するモジュール。</p>
		 * @return void
		 * @link https://php.net/manual/ja/mongolog.setmodule.php
		 * @since PECL mongo >= 1.2.3
		 */
		public static function setModule(int $module): void {}
	}

	/**
	 * <p><b>MongoMaxKey</b> はデータベースが使う特別な型で、 他のどんな BSON 型よりも大きいと評価されます。したがって、 特定のフィールドの昇順でクエリを並べ替えると、値が <b>MongoMaxKey</b> であるドキュメントが最後となります。</p>
	 * <p><b>MongoMaxKey</b> にはフィールドやメソッド、定数はありません。 データベースに追加するときに使う、単なる "いちばん大きい" 値です。</p>
	 * <p><b>注意</b>:  <b>MongoMaxKey</b> は、インデックス作成やシャーディングのために、MongoDB が内部的に利用するものです。 一般に、アプリケーション内でこのクラスを使う理由はありません。 </p>
	 * @link https://php.net/manual/ja/class.mongomaxkey.php
	 * @since PECL mongo >= 1.0.2
	 */
	class MongoMaxKey {
	}

	/**
	 * <p><b>MongoMinKey</b> はデータベースが使う特別な型で、 他のどんな BSON 型よりも小さいと評価されます。したがって、 特定のフィールドの昇順でクエリを並べ替えると、値が <b>MongoMinKey</b> であるドキュメントが最初となります。</p>
	 * <p><b>MongoMinKey</b> にはフィールドやメソッド、定数はありません。 データベースに追加するときに使う、単なる "いちばん小さい" 値です。</p>
	 * <p><b>注意</b>:  <b>MongoMinKey</b> は、インデックス作成やシャーディングのために、MongoDB が内部的に利用するものです。 一般に、アプリケーション内でこのクラスを使う理由はありません。 </p>
	 * @link https://php.net/manual/ja/class.mongominkey.php
	 * @since PECL mongo >= 1.0.2
	 */
	class MongoMinKey {
	}

	/**
	 * <p>現在のリリース (1.3.0 以降) のドライバは、プーリングを実装しなくなりました。 このクラスやメソッドは廃止予定であり、使ってはいけません。</p>
	 * @link https://php.net/manual/ja/class.mongopool.php
	 * @since PECL mongo >= 1.2.3
	 */
	class MongoPool {

		/**
		 * Get pool size for connection pools
		 * @return int <p>Returns the current pool size.</p>
		 * @link https://php.net/manual/ja/mongopool.getsize.php
		 * @see MongoPool::setSize(), MongoPool::info()
		 * @since PECL mongo >= 1.2.3
		 */
		public static function getSize(): int {}

		/**
		 * Returns information about all connection pools
		 * <p>Returns an array of information about all connection pools.</p>
		 * @return array <p>Each connection pool has an identifier, which starts with the host. For each pool, this function shows the following fields:</p>  <code>in use</code>   <p>The number of connections currently being used by Mongo instances.</p>   <code>in pool</code>   <p>The number of connections currently in the pool (not being used).</p>   <code>remaining</code>   <p>The number of connections that could be created by this pool. For example, suppose a pool had 5 connections remaining and 3 connections in the pool. We could create 8 new instances of MongoClient before we exhausted this pool (assuming no instances of MongoClient went out of scope, returning their connections to the pool).</p> <p>A negative number means that this pool will spawn unlimited connections.</p> <p>Before a pool is created, you can change the max number of connections by calling <code>Mongo::setPoolSize()</code>. Once a pool is showing up in the output of this function, its size cannot be changed.</p>   <code>total</code>   <p>The total number of connections allowed for this pool. This should be greater than or equal to "in use" + "in pool" (or -1).</p>   <code>timeout</code>   <p>The socket timeout for connections in this pool. This is how long connections in this pool will attempt to connect to a server before giving up.</p>   <code>waiting</code>   <p>If you have capped the pool size, workers requesting connections from the pool may block until other workers return their connections. This field shows how many milliseconds workers have blocked for connections to be released. If this number keeps increasing, you may want to use <code>MongoPool::setSize()</code> to add more connections to your pool.</p>
		 * @link https://php.net/manual/ja/mongopool.info.php
		 * @since PECL mongo >= 1.2.3
		 */
		public function info(): array {}

		/**
		 * Set the size for future connection pools
		 * <p>Sets the max number of connections new pools will be able to create.</p>
		 * @param int $size <p>The max number of connections future pools will be able to create. Negative numbers mean that the pool will spawn an infinite number of connections.</p>
		 * @return bool <p>Returns the former value of pool size.</p>
		 * @link https://php.net/manual/ja/mongopool.setsize.php
		 * @see MongoPool::getSize(), MongoPool::info()
		 * @since PECL mongo >= 1.2.3
		 */
		public static function setSize(int $size): bool {}
	}

	/**
	 * <p>When talking to MongoDB 2.6.0, and later, certain operations (such as writes) may throw MongoProtocolException when the response from the server did not make sense - for example during network failure (we could read the entire response) or data corruption.</p>
	 * <p>This exception is also thrown when attempting to talk newer protocols then the server supports, for example using the MongoWriteBatch when talking to a MongoDB server prior to 2.6.0.</p>
	 * @link https://php.net/manual/ja/class.mongoprotocolexception.php
	 * @since PECL mongo >= 1.5.0
	 */
	class MongoProtocolException extends \MongoException {

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
	}

	/**
	 * <p>このクラスを使うと正規表現を作ることができます。 典型的な使い道は、データベースへの問い合わせでマッチする文字列を検索することです。 それ以外に、正規表現をデータベースに格納したりデータベースから取得したりすることもできます。</p>
	 * <p>正規表現は、四つの部分で構成されています。最初は区切り文字の <i>/</i>、 そしてその後にパターンが続き、さらにもう一度区切り文字の <i>/</i>、 そして最後がフラグを表す文字です。</p>
	 * <p><b>例1 正規表現のパターン</b></p>
	 * <p>Mongo は 6 つの正規表現フラグに対応しています。</p>
	 * <p><i>i</i>: 大文字小文字を区別しない</p>
	 * <p><i>m</i>: 複数行</p>
	 * <p><i>x</i>: コメントを含めることができる</p>
	 * <p><i>l</i>: ロケール</p>
	 * <p><i>s</i>: "." が、改行を含むすべてにマッチする</p>
	 * <p><i>u</i>: unicode にマッチする</p>
	 * @link https://php.net/manual/ja/class.mongoregex.php
	 * @since PECL mongo >=0.8.1
	 */
	class MongoRegex {

		public $regex;

		public $flags;

		/**
		 * 新しい正規表現を作成する
		 * <p>新しい正規表現を作成します。</p>
		 * @param string $regex <p>正規表現 (<i>/expr/flags</i> 形式の文字列)。</p>
		 * @return self <p>新しい正規表現を返します。</p>
		 * @link https://php.net/manual/ja/mongoregex.construct.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __construct(string $regex) {}

		/**
		 * この正規表現の文字列表現
		 * <p>この正規表現の文字列表現を返します。</p>
		 * @return string <p>正規表現を "/expr/flags" 形式で返します。</p>
		 * @link https://php.net/manual/ja/mongoregex.tostring.php
		 * @since PECL mongo >= 0.8.1
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>MongoResultException は (<code>MongoCollection::findAndModify()</code> など) いくつかのコマンドヘルパーで、失敗した場合にスローする例外です。 元の結果ドキュメントは <code>MongoResultException::getDocument()</code> で取得できます。</p>
	 * @link https://php.net/manual/ja/class.mongoresultexception.php
	 * @since PECL mongo >=1.3.0
	 */
	class MongoResultException extends \MongoException {

		/**
		 * @var mixed <p>生の結果ドキュメントの配列。</p>
		 * @link https://php.net/manual/ja/class.mongoresultexception.php#mongoresultexception.props.document
		 */
		public $document;

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
		 * ドキュメントを更新して返す
		 * <p>findAndModify コマンドは、単一のドキュメントをアトミックに変更して返します。 デフォルトでは、返されるドキュメントには、この更新による変更内容が含まれません。 更新で変更した結果のドキュメントを返すには、new オプションを使います。</p>
		 * @param array $query <p>クエリの検索条件。</p>
		 * @param array $update <p>更新条件。</p>
		 * @param array $fields <p>オプションで、返すフィールドを絞り込めます。</p>
		 * @param array $options <p>適用するオプションの配列。マッチしたドキュメントを DB から削除してから返すなどのオプションを指定できます。</p>   オプション 説明      sort <code>array</code>   クエリが複数のドキュメントを選択したときに、どのドキュメントを変更するかを決めます。 findAndModify が変更するのは、この引数で指定した並び順で最初にあるドキュメントだけです。     remove <code>boolean</code>   update フィールドが存在するときは必須ではありません。 <b><code>TRUE</code></b> にすると、選択したドキュメントを削除します。デフォルトは <b><code>FALSE</code></b> です。     update <code>array</code>   remove フィールドが存在するときは必須ではありません。 選択したドキュメントを更新します。     new <code>boolean</code>   必須ではありません。<b><code>TRUE</code></b> にすると、変更前のドキュメントではなく変更後のドキュメントを返します。 findAndModify メソッドは、remove 操作のときには new オプションを無視します。 デフォルトは <b><code>FALSE</code></b> です。     upsert <code>boolean</code>   必須ではありません。update と組み合わせて使います。 <b><code>TRUE</code></b> にすると、クエリがドキュメントを返さないときに findAndModify コマンドが新しいドキュメントを作ります。 デフォルトは <b><code>FALSE</code></b> です。MongoDB 2.2 では、upsert が <b><code>TRUE</code></b> のときに findAndModify コマンドは <b><code>NULL</code></b> を返します。
		 * @return array <p>元のドキュメントを返します。 new が設定されている場合は変更後のドキュメントを返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.findandmodify.php
		 * @since PECL mongo >=1.3.0
		 */
		public function findAndModify(array $query, array $update = NULL, array $fields = NULL, array $options = NULL): array {}

		/**
		 * 結果ドキュメントを取得する
		 * <p>すべてのエラー結果ドキュメントを取得します。</p>
		 * @return array <p>すべての結果ドキュメントを配列で返します。部分的なデータや追加のキーがあれば、それも含まれます。</p>
		 * @link https://php.net/manual/ja/mongoresultexception.getdocument.php
		 * @since PECL mongo >=1.3.0
		 */
		public function getDocument(): array {}
	}

	/**
	 * <p><b>MongoTimestamp</b> は、MongoDB がレプリケーションやシャーディングで使う内部的な型です。 タイムスタンプ (エポックからの経過秒数) 4 バイトと増分 4 で構成されています。 この型は、時刻や日付の値を (ドキュメントの "createdAt" フィールドなどに) 格納するために使うものではありません。</p>
	 * <p><b>注意</b>:  MongoDB のレプリケーション oplog やシャーディングにかかわる書き込みをしているのでなければ、さっさと MongoDate のほうに行きましょう。 このクラスはあなたの求めているものではありません。 </p>
	 * @link https://php.net/manual/ja/class.mongotimestamp.php
	 * @since PECL mongo >=1.0.1
	 */
	class MongoTimestamp {

		public $sec = 0;

		public $inc = 0;

		/**
		 * Creates a new timestamp
		 * <p>Creates a new timestamp. If no parameters are given, the current time is used and the increment is automatically provided. The increment is set to 0 when the module is loaded and is incremented every time this constructor is called (without the $inc parameter passed in).</p>
		 * @param int $sec <p>Number of seconds since the epoch (i.e. 1 Jan 1970 00:00:00.000 UTC).</p>
		 * @param int $inc <p>Increment.</p>
		 * @return self <p>Returns this new timestamp.</p>
		 * @link https://php.net/manual/ja/mongotimestamp.construct.php
		 * @since PECL mongo >= 1.0.1
		 */
		public function __construct(int $sec  = 'time()', int $inc = NULL) {}

		/**
		 * Returns a string representation of this timestamp
		 * <p>Returns the "sec" field of this timestamp.</p>
		 * @return string <p>The seconds since epoch represented by this timestamp.</p>
		 * @link https://php.net/manual/ja/mongotimestamp.tostring.php
		 * @since PECL mongo >= 1.0.1
		 */
		public function __toString(): string {}
	}

	/**
	 * <p>Constructs a batch of UPDATE operations. See MongoWriteBatch.</p>
	 * @link https://php.net/manual/ja/class.mongoupdatebatch.php
	 * @since PECL mongo >=1.5.0
	 */
	class MongoUpdateBatch extends \MongoWriteBatch {

		/**
		 * Description
		 * <p>Constructs a batch of UPDATE operations. See MongoWriteBatch.</p>
		 * @param \MongoCollection $collection <p>バッチを実行する MongoCollection。確認付き書き込み をコピーして、デフォルトとして使います。<code>$write_options</code> で指定したり、<code>MongoWriteBatch::execute()</code> で指定したりすることもできます。</p>
		 * @param array $write_options <p>書き込みオプションの配列。</p>   キー 値     w (int|string)  WriteConcern の値   wtimeout (int) レプリケーションを待つ時間の最大値   ordered MongoDB にこのバッチを順番どおりに実行させるのかどうかを指定する。順番どおりの書き込みはシリアルに (一度に一行ずつ) 実行され、最初にエラーが発生した時点で実行は中断する。順番どおりでない書き込みはパラレルに実行され、エラーが発生しても処理は中断しない。デフォルトは <b><code>TRUE</code></b>    j (bool) プライマリーへのジャーナリングを待つかどうか。これは非推奨なので、かわりに確認付き書き込みを使うこと   fsync (bool) プライマリーへの fsync を待つかどうか。これは非推奨なので、かわりに確認付き書き込みを使うこと
		 * @return self <p>A new MongoUpdateBatch.</p>
		 * @link https://php.net/manual/ja/mongoupdatebatch.construct.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function __construct(\MongoCollection $collection, array $write_options = NULL) {}

		/**
		 * Adds a write operation to a batch
		 * <p>Adds a write operation to the batch.</p><p>If <code>$item</code> causes the batch to exceed the <i>maxWriteBatchSize</i> or <i>maxBsonObjectSize</i> limits, the driver will internally split the batches into multiple write commands upon calling <code>MongoWriteBatch::execute()</code>.</p>
		 * @param array $item <p>An array that describes a write operation. The structure of this value depends on the batch's operation type.</p>   Batch type Argument expectation     <b><code>MongoWriteBatch::COMMAND_INSERT</code></b>  The document to add.    <b><code>MongoWriteBatch::COMMAND_UPDATE</code></b>  <p>Raw update operation.</p> <p>Required keys are <i>"q"</i> and <i>"u"</i>, which correspond to the <code>$criteria</code> and <code>$new_object</code> parameters of <code>MongoCollection::update()</code>, respectively.</p> <p>Optional keys are <i>"multi"</i> and <i>"upsert"</i>, which correspond to the <i>"multiple"</i> and <i>"upsert"</i> options for <code>MongoCollection::update()</code>, respectively. If unspecified, both options default to <b><code>FALSE</code></b>.</p>    <b><code>MongoWriteBatch::COMMAND_DELETE</code></b>  <p>Raw delete operation.</p> <p>Required keys are: <i>"q"</i> and <i>"limit"</i>, which correspond to the <code>$criteria</code> parameter and <i>"justOne"</i> option of <code>MongoCollection::remove()</code>, respectively.</p> <p>The <i>"limit"</i> option is an <code>integer</code>; however, MongoDB only supports <i>0</i> (i.e. remove all matching documents) and <i>1</i> (i.e. remove at most one matching document) at this time.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/mongowritebatch.add.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function add(array $item): bool {}

		/**
		 * Executes a batch of write operations
		 * <p>Executes the batch of write operations.</p>
		 * @param array $write_options <p>See MongoWriteBatch::__construct.</p>
		 * @return array <p>Returns an array containing statistical information for the full batch. If the batch had to be split into multiple batches, the return value will aggregate the values from individual batches and return only the totals.</p><p>If the batch was empty, an array containing only the 'ok' field is returned (as <b><code>TRUE</code></b>) although nothing will be shipped over the wire (NOOP).</p>   Array key Value meaning Returned for batch type     nInserted Number of inserted documents MongoWriteBatch::COMMAND_INSERT batch   nMatched Number of documents matching the query criteria MongoWriteBatch::COMMAND_UPDATE batch   nModified Number of documents actually needed to be modied MongoWriteBatch::COMMAND_UPDATE batch   nUpserted Number of upserted documents MongoWriteBatch::COMMAND_UPDATE batch   nRemoved Number of documents removed MongoWriteBatch::COMMAND_DELETE batch   ok Command success indicator All
		 * @link https://php.net/manual/ja/mongowritebatch.execute.php
		 * @since PECL mongo >= 1.5.0
		 */
		final public function execute(array $write_options): array {}
	}

	/**
	 * <p>MongoWriteBatch is the base class for the MongoInsertBatch, MongoUpdateBatch and MongoDeleteBatch classes.</p>
	 * <p>MongoWriteBatch allows you to "batch up" multiple operations (of same type) and shipping them all to MongoDB at the same time. This can be especially useful when operating on many documents at the same time to reduce roundtrips.</p>
	 * <p>Prior to version 1.5.0 of the driver it was possible to use <code>MongoCollection::batchInsert()</code>, however, as of 1.5.0 that method is now discouraged.</p>
	 * <p>Note: This class is only available when talking to MongoDB 2.6.0 (and later) servers. It will throw MongoProtocolException if attempting to use it on older MongoDB servers.</p>
	 * @link https://php.net/manual/ja/class.mongowritebatch.php
	 * @since PECL mongo >=1.5.0
	 */
	class MongoWriteBatch {

		/**
		 * @var int <p>Create an Insert Write Batch</p>
		 * @link https://php.net/manual/ja/class.mongowritebatch.php
		 */
		const COMMAND_INSERT = 1;

		/**
		 * @var int <p>Create an Update Write Batch</p>
		 * @link https://php.net/manual/ja/class.mongowritebatch.php
		 */
		const COMMAND_UPDATE = 2;

		/**
		 * @var int <p>Create an Delete Write Batch</p>
		 * @link https://php.net/manual/ja/class.mongowritebatch.php
		 */
		const COMMAND_DELETE = 3;

		/**
		 * Creates a new batch of write operations
		 * <p>Constructs a new MongoWriteBatch.</p><p><b>注意</b>:</p><p>This is a protected constructor. Please use one of the classes inheriting MongoWriteBatch.</p>
		 * @param \MongoCollection $collection <p>バッチを実行する MongoCollection。確認付き書き込み をコピーして、デフォルトとして使います。<code>$write_options</code> で指定したり、<code>MongoWriteBatch::execute()</code> で指定したりすることもできます。</p>
		 * @param string $batch_type <p>One of:</p><ul> <li> <i>0</i> - make an MongoWriteBatch::COMMAND_INSERT batch</li> <li> <i>1</i> - make an MongoWriteBatch::COMMAND_UPDATE batch</li> <li> <i>2</i> - make a MongoWriteBatch::COMMAND_DELETE batch</li> </ul>
		 * @param array $write_options <p>書き込みオプションの配列。</p>   キー 値     w (int|string)  WriteConcern の値   wtimeout (int) レプリケーションを待つ時間の最大値   ordered MongoDB にこのバッチを順番どおりに実行させるのかどうかを指定する。順番どおりの書き込みはシリアルに (一度に一行ずつ) 実行され、最初にエラーが発生した時点で実行は中断する。順番どおりでない書き込みはパラレルに実行され、エラーが発生しても処理は中断しない。デフォルトは <b><code>TRUE</code></b>    j (bool) プライマリーへのジャーナリングを待つかどうか。これは非推奨なので、かわりに確認付き書き込みを使うこと   fsync (bool) プライマリーへの fsync を待つかどうか。これは非推奨なので、かわりに確認付き書き込みを使うこと
		 * @return self <p>A new MongoWriteBatch of type <code>batch_type</code>.</p>
		 * @link https://php.net/manual/ja/mongowritebatch.construct.php
		 * @since PECL mongo >= 1.5.0
		 */
		protected function __construct(\MongoCollection $collection, string $batch_type = NULL, array $write_options = NULL) {}

		/**
		 * Adds a write operation to a batch
		 * <p>Adds a write operation to the batch.</p><p>If <code>$item</code> causes the batch to exceed the <i>maxWriteBatchSize</i> or <i>maxBsonObjectSize</i> limits, the driver will internally split the batches into multiple write commands upon calling <code>MongoWriteBatch::execute()</code>.</p>
		 * @param array $item <p>An array that describes a write operation. The structure of this value depends on the batch's operation type.</p>   Batch type Argument expectation     <b><code>MongoWriteBatch::COMMAND_INSERT</code></b>  The document to add.    <b><code>MongoWriteBatch::COMMAND_UPDATE</code></b>  <p>Raw update operation.</p> <p>Required keys are <i>"q"</i> and <i>"u"</i>, which correspond to the <code>$criteria</code> and <code>$new_object</code> parameters of <code>MongoCollection::update()</code>, respectively.</p> <p>Optional keys are <i>"multi"</i> and <i>"upsert"</i>, which correspond to the <i>"multiple"</i> and <i>"upsert"</i> options for <code>MongoCollection::update()</code>, respectively. If unspecified, both options default to <b><code>FALSE</code></b>.</p>    <b><code>MongoWriteBatch::COMMAND_DELETE</code></b>  <p>Raw delete operation.</p> <p>Required keys are: <i>"q"</i> and <i>"limit"</i>, which correspond to the <code>$criteria</code> parameter and <i>"justOne"</i> option of <code>MongoCollection::remove()</code>, respectively.</p> <p>The <i>"limit"</i> option is an <code>integer</code>; however, MongoDB only supports <i>0</i> (i.e. remove all matching documents) and <i>1</i> (i.e. remove at most one matching document) at this time.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> on success and throws an exception on failure.</p>
		 * @link https://php.net/manual/ja/mongowritebatch.add.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function add(array $item): bool {}

		/**
		 * 複数のドキュメントをコレクションに追加する
		 * @param array $a <p>配列の配列あるいはオブジェクト。オブジェクトを使う場合は、 protected や private のプロパティは保持できません。</p>  <p><b>注意</b>:</p> <p>追加するドキュメントが <i>_id</i> のキーあるいはプロパティを持たない場合は、 新しい MongoId インスタンスを作ってそれを代入します。 この挙動に関する詳しい情報は <code>MongoCollection::insert()</code> を参照ください。</p>
		 * @param array $options <p>追加操作群についてのオプションの配列。 現在利用可能なオプションは、以下のとおりです。</p><ul> <li> <p><i>"continueOnError"</i></p> <p>boolean で、デフォルトは <b><code>FALSE</code></b> です。 これを設定すると、(ID の重複などが原因で) 一括インサートが失敗したときにもデータベースは処理を続行します。 その結果、一括インサート処理の挙動が一件ごとのインサートを繰り返したときと同じになります。 ただし、<code>MongoDB::lastError()</code> をコールすると、 直近の操作が失敗していなくても何か失敗があればエラーが設定されています。 複数のエラーが発生したときには、 <code>MongoDB::lastError()</code> が返すのは最後に発生したエラーだけとなります。</p>  <p><b>注意</b>:</p> <p><i>continueOnError</i> は、あくまでもデータベース側のエラーにしか影響を及ぼさないことに注意しましょう。 ドキュメントそのものに問題があるもの (キーの名前が空になっているなど) をインサートしようとすると、 ドライバーがこのエラーを検出してデータベースへの送信を止めてしまうので、処理はそこで終わってしまいます。 ドライバー側で検出されるドキュメントのエラーに関しては、 <i>continueOnError</i> は何もできません。</p>  </li> <li> <p><i>"fsync"</i></p> <p>Boolean 型で、デフォルトは <b><code>FALSE</code></b> です。 ジャーナリングが有効な場合、これは <i>"j"</i> とまったく同じ動きをします。 ジャーナリングが有効でない場合は、追加をディスク上のデータベースファイルに同期させるまで成功したと見なさないようになります。 <b><code>TRUE</code></b> にすると確認つき書き込みが暗黙のうちに設定され、<i>"w"</i> の値を <i>0</i> にします。</p> <p><b>注意</b>: ジャーナリングが有効な場合は、<i>"fsync"</i> のかわりに <i>"j"</i> を使いましょう。 <i>"fsync"</i> と <i>"j"</i> を同時に指定すると、エラーになります。 </p> </li> <li> <p><i>"j"</i></p> <p>デフォルトは <b><code>FALSE</code></b> です。これを指定すると、追加をジャーナルに同期させるまで成功したと見なさないようになります。<b><code>TRUE</code></b> にすると確認付き書き込みと見なされ、<i>"w"</i> の設定を <i>0</i> に上書きします。</p> <p><b>注意</b>: このオプションを使っているときにジャーナリングを無効にすると、MongoDB 2.6 以降ではエラーが発生して書き込みに失敗します。古いバージョンのサーバーでは、単純にオプションの指定を無視します。</p> </li> <li> <p><i>"socketTimeoutMS"</i></p> <p>このオプションは、ソケット通信の制限時間を、ミリ秒単位で指定します。この時間内にサーバーからの反応がなければ、MongoCursorTimeoutException をスローします。この場合、サーバー側で書き込み処理が行われたのかどうかを判断できなくなります。<i>-1</i> を指定すると、永遠にブロックします。MongoClient のデフォルト値は <i>30000</i> (30 秒) です。</p> </li> <li> <p><i>"w"</i></p> <p>WriteConcerns を参照ください。MongoClient でのデフォルト値は <i>1</i> です。</p> </li> <li> <p><i>"wTimeoutMS"</i></p> <p>このオプションは、書き込み確認を待つ制限時間をミリ秒単位で指定します。これが書き込み操作に適用されるのは、<i>"w"</i> が <i>1</i> より大きい場合のみです。というのも、タイムアウトはレプリケーションに関する機能だからです。この時間内に書き込み確認ができなかった場合は MongoCursorException をスローします。<i>0</i> を指定すると、永遠にブロックし続けます。MongoClient でのデフォルトは <i>10000</i> ミリ秒 (10 秒) です。</p> </li> </ul> <p>以下のオプションは廃止予定です。使ってはいけません。</p><ul> <li> <p><i>"safe"</i></p> <p>非推奨。write concern の <i>w</i> オプションを使いましょう。</p> </li> <li> <p><i>"timeout"</i></p> <p>非推奨。<i>"socketTimeoutMS"</i> のエイリアス。</p> </li> <li> <p><i>"wtimeout"</i></p> <p>廃止予定。<i>"wTimeoutMS"</i> のエイリアスです。</p> </li> </ul>
		 * @return mixed <p><i>w</i> を設定して書き込みの確認をするようにしている場合は、 追加の状況 ("ok") と発生したエラー ("err") を連想配列で返します。設定されていないときは、一括追加の送信に成功すれば <b><code>TRUE</code></b>、失敗すれば <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/mongocollection.batchinsert.php
		 * @see MongoCollection::insert(), MongoCollection::update(), MongoCollection::find(), MongoCollection::remove()
		 * @since PECL mongo >=0.9.0
		 */
		public function batchInsert(array $a, array $options = array()) {}

		/**
		 * Executes a batch of write operations
		 * <p>Executes the batch of write operations.</p>
		 * @param array $write_options <p>See MongoWriteBatch::__construct.</p>
		 * @return array <p>Returns an array containing statistical information for the full batch. If the batch had to be split into multiple batches, the return value will aggregate the values from individual batches and return only the totals.</p><p>If the batch was empty, an array containing only the 'ok' field is returned (as <b><code>TRUE</code></b>) although nothing will be shipped over the wire (NOOP).</p>   Array key Value meaning Returned for batch type     nInserted Number of inserted documents MongoWriteBatch::COMMAND_INSERT batch   nMatched Number of documents matching the query criteria MongoWriteBatch::COMMAND_UPDATE batch   nModified Number of documents actually needed to be modied MongoWriteBatch::COMMAND_UPDATE batch   nUpserted Number of upserted documents MongoWriteBatch::COMMAND_UPDATE batch   nRemoved Number of documents removed MongoWriteBatch::COMMAND_DELETE batch   ok Command success indicator All
		 * @link https://php.net/manual/ja/mongowritebatch.execute.php
		 * @since PECL mongo >= 1.5.0
		 */
		final public function execute(array $write_options): array {}
	}

	/**
	 * <p>MongoWriteConcernException is thrown when a write fails. See Write Concerns for how to set failure thresholds.</p>
	 * <p>Prior to MongoDB 2.6.0, the » getLastError command would determine whether a write failed.</p>
	 * @link https://php.net/manual/ja/class.mongowriteconcernexception.php
	 * @since PECL mongo >= 1.5.0
	 */
	class MongoWriteConcernException extends \MongoCursorException {

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
		 * Get the error document
		 * <p>Returns the actual response from the server that was interperated as an error.</p>
		 * @return array <p>A MongoDB document, if available, as an array.</p>
		 * @link https://php.net/manual/ja/mongowriteconcernexception.getdocument.php
		 * @since PECL mongo >= 1.5.0
		 */
		public function getDocument(): array {}

		/**
		 * エラーが発生したサーバーのホスト名を取得する
		 * <p>クエリの送信先サーバーのホスト名を返します。</p>
		 * @return string <p>ホスト名を返します。ホスト名が不明な場合は <code>NULL</code> を返します。</p>
		 * @link https://php.net/manual/ja/mongocursorexception.gethost.php
		 * @since PECL mongo >= 1.0.0
		 */
		public function getHost(): string {}
	}

	/**
	 * BSON オブジェクトを PHP の配列に復元する
	 * <p>この関数はまさにベータ版であり、99% のユーザーにとっては使い道のないものです。 この関数を使うとすれば、PHP ドライバ上でさらに自前のドライバを書くなど よっぽど変わったことをしている人だけです。</p>
	 * @param string $bson <p>復元したい BSON。</p>
	 * @return array <p>BSON オブジェクトを復元したものを返します。</p>
	 * @link https://php.net/manual/ja/function.bson-decode.php
	 * @since PECL mongo >=1.0.1
	 */
	function bson_decode(string $bson): array {}

	/**
	 * PHP の変数を BSON 文字列に変換する
	 * <p>この関数はまさにベータ版であり、99% のユーザーにとっては使い道のないものです。 この関数を使うとすれば、PHP ドライバ上でさらに自前のドライバを書くなど よっぽど変わったことをしている人だけです。</p>
	 * @param mixed $anything <p>変換したい変数。</p>
	 * @return string <p>変換した文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.bson-encode.php
	 * @since PECL mongo >=1.0.1
	 */
	function bson_encode($anything): string {}

	define('localhost', null);

	define('nearest', null);

	define('primary', null);

	define('primaryPreferred', null);

	define('secondary', null);

	define('secondaryPreferred', null);

	/**
	 * プロファイリングをオフにします。
	 */
	define('0', null);

	/**
	 * 汎用的なバイナリデータ。
	 */
	define('0x00', null);

	/**
	 * 関数。
	 */
	define('0x01', null);

	/**
	 * 汎用的なバイナリデータ (非推奨。かわりに <b><code>MongoBinData::GENERIC</code></b> を使いましょう)。
	 */
	define('0x02', null);

	/**
	 * 全体で一意な識別子 (非推奨。かわりに <b><code>MongoBinData::UUID_RFC4122</code></b> を使いましょう)。
	 */
	define('0x03', null);

	/**
	 * 全体で一意な識別子 (» RFC 4122 準拠)。
	 */
	define('0x04', null);

	/**
	 * MD5。
	 */
	define('0x05', null);

	/**
	 * ユーザー定義型。
	 */
	define('0x80', null);

	/**
	 * ソートやインデックス作成時に使用する「昇順」。
	 */
	define('1', null);

	/**
	 * すべての操作に対するプロファイリングをオンにします。
	 */
	define('2', null);

	/**
	 * ポートを指定しない場合に接続するポート。
	 */
	define('27017', null);

	/**
	 * ソートやインデックス作成時に使用する「降順」。
	 */
	define('_1', null);

	define('MONGO_STREAM_NOTIFY_IO_COMPLETED', null);

	define('MONGO_STREAM_NOTIFY_IO_PROGRESS', null);

	define('MONGO_STREAM_NOTIFY_IO_READ', null);

	define('MONGO_STREAM_NOTIFY_IO_WRITE', null);

	define('MONGO_STREAM_NOTIFY_LOG_BATCHINSERT', null);

	define('MONGO_STREAM_NOTIFY_LOG_CMD_DELETE', null);

	define('MONGO_STREAM_NOTIFY_LOG_CMD_INSERT', null);

	define('MONGO_STREAM_NOTIFY_LOG_CMD_UPDATE', null);

	define('MONGO_STREAM_NOTIFY_LOG_DELETE', null);

	define('MONGO_STREAM_NOTIFY_LOG_GETMORE', null);

	define('MONGO_STREAM_NOTIFY_LOG_INSERT', null);

	define('MONGO_STREAM_NOTIFY_LOG_KILLCURSOR', null);

	define('MONGO_STREAM_NOTIFY_LOG_QUERY', null);

	define('MONGO_STREAM_NOTIFY_LOG_RESPONSE_HEADER', null);

	define('MONGO_STREAM_NOTIFY_LOG_UPDATE', null);

	define('MONGO_STREAM_NOTIFY_LOG_WRITE_BATCH', null);

	define('MONGO_STREAM_NOTIFY_LOG_WRITE_REPLY', null);

	define('MONGO_STREAM_NOTIFY_TYPE_IO_INIT', null);

	define('MONGO_STREAM_NOTIFY_TYPE_LOG', null);

	/**
	 * Alias of <b><code>MONGO_SUPPORTS_STREAMS</code></b>
	 */
	define('MONGO_STREAMS', null);

	/**
	 * 1 when GSSAPI authentication is compiled in.
	 */
	define('MONGO_SUPPORTS_AUTH_MECHANISM_GSSAPI', null);

	/**
	 * 1 when MongoDB-Challenge/Reponse authentication is compiled in.
	 */
	define('MONGO_SUPPORTS_AUTH_MECHANISM_MONGODB_CR', null);

	/**
	 * 1 when x.509 authentication is compiled in.
	 */
	define('MONGO_SUPPORTS_AUTH_MECHANISM_MONGODB_X509', null);

	/**
	 * 1 when PLAIN authentication is compiled in.
	 */
	define('MONGO_SUPPORTS_AUTH_MECHANISM_PLAIN', null);

	/**
	 * 1 when OpenSSL is enabled and available.
	 */
	define('MONGO_SUPPORTS_SSL', null);

	/**
	 * 1 when compiled against PHP Streams (default since 1.4.0).
	 */
	define('MONGO_SUPPORTS_STREAMS', null);

	/**
	 * Current stability (alpha/beta/stable)
	 */
	define('MONGODB_STABILITY', null);

	/**
	 * x.y.z style version number of the extension
	 */
	define('MONGODB_VERSION', null);

}

namespace MongoDB\BSON {

	/**
	 * <p>BSON type for binary data (i.e. array of bytes). Binary values also have a subtype, which is used to indicate what kind of data is in the byte array. Subtypes from zero to 127 are predefined or reserved. Subtypes from 128-255 are user-defined.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-binary.php
	 * @since mongodb >=1.0.0
	 */
	final class Binary implements \MongoDB\BSON\BinaryInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * @var integer <p>Generic binary data.</p>
		 * @link https://php.net/manual/ja/class.mongodb-bson-binary.php
		 */
		const TYPE_GENERIC = 0;

		/**
		 * @var integer <p>Function.</p>
		 * @link https://php.net/manual/ja/class.mongodb-bson-binary.php
		 */
		const TYPE_FUNCTION = 1;

		/**
		 * @var integer <p>Generic binary data (deprecated in favor of <b><code>MongoDB\BSON\Binary::TYPE_GENERIC</code></b>).</p>
		 * @link https://php.net/manual/ja/class.mongodb-bson-binary.php
		 */
		const TYPE_OLD_BINARY = 2;

		/**
		 * @var integer <p>Universally unique identifier (deprecated in favor of <b><code>MongoDB\BSON\Binary::TYPE_UUID</code></b>). When using this type, the Binary's data should be 16 bytes in length.</p> <p>Historically, other drivers encoded values with this type based on their language conventions (e.g. varying endianness), which makes it non-portable. The PHP driver applies no special handling for encoding or decoding data with this type.</p>
		 * @link https://php.net/manual/ja/class.mongodb-bson-binary.php
		 */
		const TYPE_OLD_UUID = 3;

		/**
		 * @var integer <p>Universally unique identifier. When using this type, the Binary's data should be 16 bytes in length and encoded according to » RFC 4122.</p>
		 * @link https://php.net/manual/ja/class.mongodb-bson-binary.php
		 */
		const TYPE_UUID = 4;

		/**
		 * @var integer <p>MD5 hash. When using this type, the Binary's data should be 16 bytes in length.</p>
		 * @link https://php.net/manual/ja/class.mongodb-bson-binary.php
		 */
		const TYPE_MD5 = 5;

		/**
		 * @var integer <p>User-defined type. While types between 0 and 127 are predefined or reserved, types between 128 and 255 are user-defined and may be used for anything.</p>
		 * @link https://php.net/manual/ja/class.mongodb-bson-binary.php
		 */
		const TYPE_USER_DEFINED = 128;

		/**
		 * Construct a new Binary
		 * @param string $data <p>Binary data.</p>
		 * @param int $type <p>Unsigned 8-bit integer denoting the data's type.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-binary.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $data, int $type) {}

		/**
		 * Returns the Binary's data
		 * <p>このメソッドは次のメソッドのエイリアスです。 <code>MongoDB\BSON\Binary::getData()</code>.</p>
		 * @return string <p>Returns the Binary's data.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-binary.tostring.php
		 * @since mongodb >=1.2.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the Binary's data
		 * @return string <p>Returns the Binary's data.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-binary.getdata.php
		 * @since mongodb >=1.0.0
		 */
		final public function getData(): string {}

		/**
		 * Returns the Binary's type
		 * @return int <p>Returns the Binary's type.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-binary.gettype.php
		 * @since mongodb >=1.0.0
		 */
		final public function getType(): int {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Binary.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-binary.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Binary
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Binary.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-binary.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Binary
		 * @param string $serialized <p>The serialized MongoDB\BSON\Binary.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Binary.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-binary.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\Binary but may also be used for type-hinting and userland classes.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-binaryinterface.php
	 * @since mongodb >=1.3.0
	 */
	class BinaryInterface {

		/**
		 * Returns the BinaryInterface's data
		 * <p>このメソッドは次のメソッドのエイリアスです。 <code>MongoDB\BSON\BinaryInterface::getData()</code>.</p>
		 * @return string <p>Returns the BinaryInterface's data.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-binaryinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function __toString(): string;

		/**
		 * Returns the BinaryInterface's data
		 * @return string <p>Returns the BinaryInterface's data.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-binaryinterface.getdata.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function getData(): string;

		/**
		 * Returns the BinaryInterface's type
		 * @return int <p>Returns the BinaryInterface's type.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-binaryinterface.gettype.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function getType(): int;
	}

	/**
	 * <p>BSON type for the "DBPointer" type. This BSON type is deprecated, and this class can not be instantiated. It will be created from a BSON DBPointer type while converting BSON to PHP, and can also be converted back into BSON while storing documents in the database.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-dbpointer.php
	 * @since mongodb >=1.4.0
	 */
	final class DBPointer implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new DBPointer (unused)
		 * <p>MongoDB\BSON\DBPointer objects are created through conversion from a deprecated BSON type and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-dbpointer.construct.php
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Returns an empty string
		 * @return string <p>Returns an empty string.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-dbpointer.tostring.php
		 * @since mongodb >=1.4.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\DBPointer.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-dbpointer.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.4.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a DBPointer
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\DBPointer.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-dbpointer.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.4.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a DBPointer
		 * @param string $serialized <p>The serialized MongoDB\BSON\DBPointer.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\DBPointer.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-dbpointer.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.4.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>BSON type for the » Decimal128 floating-point format, which supports numbers with up to 34 decimal digits (i.e. significant digits) and an exponent range of −6143 to +6144.</p>
	 * <p>Unlike the double BSON type (i.e. <code>float</code> in PHP), which only stores an approximation of the decimal values, the decimal data type stores the exact value. For example, <i>MongoDB\BSON\Decimal128('9.99')</i> has a precise value of 9.99 where as a double 9.99 would have an approximate value of 9.9900000000000002131628….</p>
	 * <p><b>注意</b>:  <b>MongoDB\BSON\Decimal128</b> は、 MongoDB 3.4 以降でしか使えません。それより前のバージョンの MongoDB の BSON 型でこれを使おうとすると、エラーが発生します。 </p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-decimal128.php
	 * @since mongodb >=1.2.0
	 */
	final class Decimal128 implements \MongoDB\BSON\Decimal128Interface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Decimal128
		 * <p><b>注意</b>:  MongoDB\BSON\Decimal128 は、 MongoDB 3.4 以降でしか使えません。それより前のバージョンの MongoDB の BSON 型でこれを使おうとすると、エラーが発生します。 </p>
		 * @param string $value <p>A decimal string.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-decimal128.construct.php
		 * @since mongodb >=1.2.0
		 */
		final public function __construct(string $value = NULL) {}

		/**
		 * Returns the string representation of this Decimal128
		 * @return string <p>Returns the string representation of this Decimal128.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-decimal128.tostring.php
		 * @since mongodb >=1.2.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Decimal128.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-decimal128.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Decimal128
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Decimal128.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-decimal128.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Decimal128
		 * @param string $serialized <p>The serialized MongoDB\BSON\Decimal128.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Decimal128.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-decimal128.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\Decimal128 but may also be used for type-hinting and userland classes.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-decimal128interface.php
	 * @since mongodb >=1.3.0
	 */
	class Decimal128Interface {

		/**
		 * Returns the string representation of this Decimal128Interface
		 * @return string <p>Returns the string representation of this Decimal128Interface.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-decimal128interface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function __toString(): string;
	}

	/**
	 * <p>BSON type for a 64-bit integer. This class cannot be instantiated and is only created during BSON decoding when a 64-bit integer cannot be represented as a PHP integer on a 32-bit platform. Versions of the driver before 1.5.0 would throw an exception when attempting to decode a 64-bit integer on a 32-bit platform.</p>
	 * <p>During BSON encoding, objects of this class will convert back to a 64-bit integer type. This allows 64-bit integers to be roundtripped through a 32-bit PHP environment without any loss of precision. The __toString() method allows the 64-bit integer value to be accessed as a string.</p>
	 * <p><b>注意</b>:  This class exists purely for 32-bit platforms. Applications on 64-bit platforms (i.e. <b><code>PHP_INT_SIZE</code></b> is 8) should never encounter this class during normal operation. </p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-int64.php
	 * @since mongodb >=1.5.0
	 */
	final class Int64 implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Int64 (unused)
		 * <p>MongoDB\BSON\Int64 objects are created through conversion from a 64-bit integer BSON type on a 32-bit platform and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-int64.construct.php
		 * @since mongodb >=1.5.0
		 */
		final private function __construct() {}

		/**
		 * Returns the string representation of this Int64
		 * @return string <p>Returns the string representation of this Int64.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-int64.tostring.php
		 * @since mongodb >=1.5.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Int64.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toCanonicalExtendedJSON()</code> function, which uses the » canonical extended JSON format. This differs from other BSON classes, which use the driver-specific legacy extended JSON format (<code>MongoDB\BSON\toJSON()</code>), in order to ensure that the 64-bit integer value is correctly represented on 32-bit platforms. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-int64.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.5.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize an Int64
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Int64.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-int64.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.5.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize an Int64
		 * @param string $serialized <p>The serialized MongoDB\BSON\Int64.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Int64.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-int64.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.5.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>BSON type for Javascript code. An optional scope document may be specified that maps identifiers to values and defines the scope in which the code should be evaluated by the server.</p>
	 * <p><b>注意</b>:  This BSON type is mainly used when executing database commands that take a Javascript function as a parameter, such as » mapReduce. </p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-javascript.php
	 * @since mongodb >=1.0.0
	 */
	final class Javascript implements \MongoDB\BSON\JavascriptInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Javascript
		 * @param string $code <p>Javascript code.</p>
		 * @param array|object $scope
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-javascript.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $code, $scope = NULL) {}

		/**
		 * Returns the Javascript's code
		 * <p>このメソッドは次のメソッドのエイリアスです。 <code>MongoDB\BSON\Javascript::getCode()</code>.</p>
		 * @return string <p>Returns the Javascript's code.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-javascript.tostring.php
		 * @since mongodb >=1.2.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the Javascript's code
		 * @return string <p>Returns the Javascript's code.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-javascript.getcode.php
		 * @since mongodb >=1.2.0
		 */
		final public function getCode(): string {}

		/**
		 * Returns the Javascript's scope document
		 * @return object|null <p>Returns the Javascript's scope document.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-javascript.getscope.php
		 * @since mongodb >=1.2.0
		 */
		final public function getScope() {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Javascript.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-javascript.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Javascript
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Javascript.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-javascript.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Javascript
		 * @param string $serialized <p>The serialized MongoDB\BSON\Javascript.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Javascript.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-javascript.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\Javascript but may also be used for type-hinting and userland classes.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-javascriptinterface.php
	 * @since mongodb >=1.3.0
	 */
	class JavascriptInterface {

		/**
		 * Returns the JavascriptInterface's code
		 * <p>このメソッドは次のメソッドのエイリアスです。 <code>MongoDB\BSON\JavascriptInterface::getCode()</code>.</p>
		 * @return string <p>Returns the JavascriptInterface's code.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-javascriptinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function __toString(): string;

		/**
		 * Returns the JavascriptInterface's code
		 * @return string <p>Returns the JavascriptInterface's code.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-javascriptinterface.getcode.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function getCode(): string;

		/**
		 * Returns the JavascriptInterface's scope document
		 * @return object|null <p>Returns the JavascriptInterface's scope document.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-javascriptinterface.getscope.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function getScope();
	}

	/**
	 * <p>Special BSON type which compares higher than all other possible BSON element values.</p>
	 * <p><b>注意</b>:  This is an internal MongoDB type used for indexing and sharding. </p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-maxkey.php
	 * @since mongodb >=1.0.0
	 */
	final class MaxKey implements \MongoDB\BSON\MaxKeyInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new MaxKey
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-maxkey.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct() {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\MaxKey.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-maxkey.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a MaxKey
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\MaxKey.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-maxkey.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a MaxKey
		 * @param string $serialized <p>The serialized MongoDB\BSON\MaxKey.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\MaxKey.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-maxkey.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\MaxKey but may also be used for type-hinting and userland classes.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-maxkeyinterface.php
	 * @since mongodb >=1.3.0
	 */
	class MaxKeyInterface {
	}

	/**
	 * <p>Special BSON type which compares lower than all other possible BSON element values.</p>
	 * <p><b>注意</b>:  This is an internal MongoDB type used for indexing and sharding. </p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-minkey.php
	 * @since mongodb >=1.0.0
	 */
	final class MinKey implements \MongoDB\BSON\MinKeyInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new MinKey
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-minkey.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct() {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\MinKey.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-minkey.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a MinKey
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\MinKey.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-minkey.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a MinKey
		 * @param string $serialized <p>The serialized MongoDB\BSON\MinKey.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\MinKey.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-minkey.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\MinKey but may also be used for type-hinting and userland classes.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-minkeyinterface.php
	 * @since mongodb >=1.3.0
	 */
	class MinKeyInterface {
	}

	/**
	 * <p>BSON type for an » ObjectId. The value consists of 12 bytes, where the first four bytes are a timestamp that reflect the ObjectId's creation. Specifically, the value consists of:</p>
	 * <p>In MongoDB, each document stored in a collection requires a unique <i>_id</i> field that acts as a primary key. If an inserted document omits the <i>_id</i> field, the driver automatically generates an ObjectId for the <i>_id</i> field.</p>
	 * <p>Using ObjectIds for the <i>_id</i> field provides the following additional benefits:</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-objectid.php
	 * @since mongodb >=1.0.0
	 */
	final class ObjectId implements \MongoDB\BSON\ObjectIdInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new ObjectId
		 * @param string $id <p>A 24-character hexadecimal string. If not provided, the driver will generate an ObjectId.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-objectid.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $id = NULL) {}

		/**
		 * Returns the hexidecimal representation of this ObjectId
		 * @return string <p>Returns the hexidecimal representation of this ObjectId.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-objectid.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the timestamp component of this ObjectId
		 * <p>The timestamp component of an ObjectId is its most significant 32 bits, which denotes the number of seconds since the Unix epoch. This value is read as an unsigned 32-bit integer with big-endian byte order.</p><p><b>注意</b>:  Because PHP's integer type is signed, some values returned by this method may appear as negative integers on 32-bit platforms. The <i>"%u"</i> formatter of <code>sprintf()</code> may be used to obtain a string representation of the unsigned decimal value. </p>
		 * @return int <p>Returns the timestamp component of this ObjectId.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-objectid.gettimestamp.php
		 * @since mongodb >=1.2.0
		 */
		final public function getTimestamp(): int {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\ObjectId.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-objectid.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize an ObjectId
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\ObjectId.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-objectid.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize an ObjectId
		 * @param string $serialized <p>The serialized MongoDB\BSON\ObjectId.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\ObjectId.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-objectid.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\ObjectId but may also be used for type-hinting and userland classes.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-objectidinterface.php
	 * @since mongodb >=1.3.0
	 */
	class ObjectIdInterface {

		/**
		 * Returns the hexidecimal representation of this ObjectIdInterface
		 * @return string <p>Returns the hexidecimal representation of this ObjectIdInterface.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-objectidinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function __toString(): string;

		/**
		 * Returns the timestamp component of this ObjectIdInterface
		 * @return int <p>Returns the timestamp component of this ObjectIdInterface.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-objectidinterface.gettimestamp.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function getTimestamp(): int;
	}

	/**
	 * <p>Classes may implement this interface to take advantage of automatic ODM (object document mapping) behavior in the driver. During serialization, the driver will inject a __pclass property containing the PHP class name into the data returned by <code>MongoDB\BSON\Serializable::bsonSerialize()</code>. During unserialization, the same __pclass property will then be used to infer the PHP class (independent of any type map configuration) to be constructed before <code>MongoDB\BSON\Unserializable::bsonUnserialize()</code> is invoked. See Persisting Data for additional information.</p>
	 * <p><b>注意</b>:  Even if <code>MongoDB\BSON\Serializable::bsonSerialize()</code> would return a sequential array, injection of the __pclass property will cause the object to be serialized as a BSON document. </p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-persistable.php
	 * @since mongodb >=1.0.0
	 */
	interface Persistable {

		/**
		 * Provides an array or document to serialize as BSON
		 * <p>Called during serialization of the object to BSON. The method must return an <code>array</code> or <b>stdClass</b>.</p><p>Root documents (e.g. a <code>MongoDB\BSON\Serializable</code> passed to <code>MongoDB\BSON\fromPHP()</code>) will always be serialized as a BSON document. For field values, associative arrays and <b>stdClass</b> instances will be serialized as a BSON document and sequential arrays (i.e. sequential, numeric indexes starting at <i>0</i>) will be serialized as a BSON array.</p><p>Users are encouraged to include an _id property (e.g. a MongoDB\BSON\ObjectId initialized in your constructor) when returning data for a BSON root document; otherwise, the driver or database will need to generate a MongoDB\BSON\ObjectId when inserting or upserting the document, respectively.</p>
		 * @return array|object <p>An <code>array</code> or <b>stdClass</b> to be serialized as a BSON array or document.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-serializable.bsonserialize.php
		 * @see MongoDB\BSON\Unserializable::bsonUnserialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonSerialize();

		/**
		 * Constructs the object from a BSON array or document
		 * <p>Called during unserialization of the object from BSON. The properties of the BSON array or document will be passed to the method as an <code>array</code>.</p><p>Remember to check for an _id property when handling data from a BSON document.</p><p><b>注意</b>:  This method acts as the constructor of the object. The __construct() method will <i>not</i> be called after this method. </p>
		 * @param array $data <p>Properties within the BSON array or document.</p>
		 * @return void <p>The return value from this method is ignored.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-unserializable.bsonunserialize.php
		 * @see MongoDB\BSON\Serializable::bsonSerialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonUnserialize(array $data): void;
	}

	/**
	 * <p>BSON type for a regular expression pattern and optional » flags.</p>
	 * <p><b>注意</b>:  This BSON type is mainly used when querying the database. Alternatively, the » $regex query operator may be used. </p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-regex.php
	 * @since mongodb >=1.0.0
	 */
	final class Regex implements \MongoDB\BSON\RegexInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Regex
		 * @param string $pattern <p>The regular expression pattern.</p> <p><b>注意</b>:  The pattern should not be wrapped with delimiter characters. </p>
		 * @param string $flags <p>The » regular expression flags. Characters in this argument will be sorted alphabetically.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-regex.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $pattern, string $flags = "") {}

		/**
		 * Returns the string representation of this Regex
		 * @return string <p>Returns the string representation of this Regex.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-regex.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the Regex's flags
		 * @return string <p>Returns the Regex's flags.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-regex.getflags.php
		 * @since mongodb >=1.0.0
		 */
		final public function getFlags(): string {}

		/**
		 * Returns the Regex's pattern
		 * @return string <p>Returns the Regex's pattern.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-regex.getpattern.php
		 * @since mongodb >=1.0.0
		 */
		final public function getPattern(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Regex.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-regex.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Regex
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Regex.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-regex.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Regex
		 * @param string $serialized <p>The serialized MongoDB\BSON\Regex.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Regex.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-regex.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\Regex but may also be used for type-hinting and userland classes.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-regexinterface.php
	 * @since mongodb >=1.3.0
	 */
	class RegexInterface {

		/**
		 * Returns the string representation of this RegexInterface
		 * @return string <p>Returns the string representation of this RegexInterface.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-regexinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function __toString(): string;

		/**
		 * Returns the RegexInterface's flags
		 * @return string <p>Returns the RegexInterface's flags.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-regexinterface.getflags.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function getFlags(): string;

		/**
		 * Returns the RegexInterface's pattern
		 * @return string <p>Returns the RegexInterface's pattern.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-regexinterface.getpattern.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function getPattern(): string;
	}

	/**
	 * <p>Classes that implement this interface may return data to be serialized as a BSON array or document in lieu of the object's public properties.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-serializable.php
	 * @since mongodb >=1.0.0
	 */
	interface Serializable {

		/**
		 * Provides an array or document to serialize as BSON
		 * <p>Called during serialization of the object to BSON. The method must return an <code>array</code> or <b>stdClass</b>.</p><p>Root documents (e.g. a <code>MongoDB\BSON\Serializable</code> passed to <code>MongoDB\BSON\fromPHP()</code>) will always be serialized as a BSON document. For field values, associative arrays and <b>stdClass</b> instances will be serialized as a BSON document and sequential arrays (i.e. sequential, numeric indexes starting at <i>0</i>) will be serialized as a BSON array.</p><p>Users are encouraged to include an _id property (e.g. a MongoDB\BSON\ObjectId initialized in your constructor) when returning data for a BSON root document; otherwise, the driver or database will need to generate a MongoDB\BSON\ObjectId when inserting or upserting the document, respectively.</p>
		 * @return array|object <p>An <code>array</code> or <b>stdClass</b> to be serialized as a BSON array or document.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-serializable.bsonserialize.php
		 * @see MongoDB\BSON\Unserializable::bsonUnserialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonSerialize();
	}

	/**
	 * <p>BSON type for the "Symbol" type. This BSON type is deprecated, and this class can not be instantiated. It will be created from a BSON symbol type while converting BSON to PHP, and can also be converted back into BSON while storing documents in the database.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-symbol.php
	 * @since mongodb >=1.4.0
	 */
	final class Symbol implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Symbol (unused)
		 * <p>MongoDB\BSON\Symbol objects are created through conversion from a deprecated BSON type and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-symbol.construct.php
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Returns the Symbol as a string
		 * @return string <p>Returns the string representation of this Symbol.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-symbol.tostring.php
		 * @since mongodb >=1.4.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Symbol.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-symbol.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.4.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Symbol
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Symbol.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-symbol.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.4.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Symbol
		 * @param string $serialized <p>The serialized MongoDB\BSON\Symbol.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Symbol.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-symbol.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.4.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>Represents a » BSON timestamp, The value consists of a 4-byte timestamp (i.e. seconds since the epoch) and a 4-byte increment.</p>
	 * <p><b>注意</b>:  This is an internal MongoDB type used for replication and sharding. It is not intended for general date storage (MongoDB\BSON\UTCDateTime should be used instead). </p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-timestamp.php
	 * @since mongodb >=1.0.0
	 */
	final class Timestamp implements \MongoDB\BSON\TimestampInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Timestamp
		 * @param int $increment <p>32-bit integer denoting the incrementing ordinal for operations within a given second.</p>
		 * @param int $timestamp <p>32-bit integer denoting seconds since the Unix epoch.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-timestamp.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(int $increment, int $timestamp) {}

		/**
		 * Returns the string representation of this Timestamp
		 * @return string <p>Returns the string representation of this Timestamp.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-timestamp.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns the increment component of this Timestamp
		 * <p>The increment component of a Timestamp is its least significant 32 bits, whichs denotes the incrementing ordinal for operations within a given second. This value is read as an unsigned 32-bit integer with big-endian byte order.</p><p><b>注意</b>:  Because PHP's integer type is signed, some values returned by this method may appear as negative integers on 32-bit platforms. The <i>"%u"</i> formatter of <code>sprintf()</code> may be used to obtain a string representation of the unsigned decimal value. </p>
		 * @return int <p>Returns the increment component of this Timestamp.</p> <b>警告</b> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-timestamp.getincrement.php
		 * @since mongodb >=1.3.0
		 */
		final public function getIncrement(): int {}

		/**
		 * Returns the timestamp component of this Timestamp
		 * <p>The timestamp component of a Timestamp is its most significant 32 bits, which denotes the number of seconds since the Unix epoch. This value is read as an unsigned 32-bit integer with big-endian byte order.</p><p><b>注意</b>:  Because PHP's integer type is signed, some values returned by this method may appear as negative integers on 32-bit platforms. The <i>"%u"</i> formatter of <code>sprintf()</code> may be used to obtain a string representation of the unsigned decimal value. </p>
		 * @return int <p>Returns the timestamp component of this Timestamp.</p> <b>警告</b> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-timestamp.gettimestamp.php
		 * @since mongodb >=1.3.0
		 */
		final public function getTimestamp(): int {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Timestamp.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-timestamp.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Timestamp
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Timestamp.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-timestamp.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Timestamp
		 * @param string $serialized <p>The serialized MongoDB\BSON\Timestamp.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Timestamp.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-timestamp.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\Timestamp but may also be used for type-hinting and userland classes.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-timestampinterface.php
	 * @since mongodb >=1.3.0
	 */
	class TimestampInterface {

		/**
		 * Returns the string representation of this TimestampInterface
		 * @return string <p>Returns the string representation of this TimestampInterface.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-timestampinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function __toString(): string;

		/**
		 * Returns the increment component of this TimestampInterface
		 * @return int <p>Returns the increment component of this TimestampInterface.</p> <b>警告</b> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-timestampinterface.getincrement.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function getIncrement(): int;

		/**
		 * Returns the timestamp component of this TimestampInterface
		 * @return int <p>Returns the timestamp component of this TimestampInterface.</p> <b>警告</b> <p>On 32-bit systems this method may return a negative number. Although the increment and timestamp parts of the BSON timestamp type consists of two unsigned 32-bit values, PHP can not represent these on 32-bit platforms.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-timestampinterface.gettimestamp.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function getTimestamp(): int;
	}

	/**
	 * <p>Abstract base interface that should not be implemented directly.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-type.php
	 * @since mongodb >=1.0.0
	 */
	interface Type {
	}

	/**
	 * <p>BSON type for the "Undefined" type. This BSON type is deprecated, and this class can not be instantiated. It will be created from a BSON undefined type while converting BSON to PHP, and can also be converted back into BSON while storing documents in the database.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-undefined.php
	 * @since mongodb >=1.4.0
	 */
	final class Undefined implements \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new Undefined (unused)
		 * <p>MongoDB\BSON\Undefined objects are created through conversion from a deprecated BSON type and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-undefined.construct.php
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Returns an empty string
		 * @return string <p>Returns an empty string.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-undefined.tostring.php
		 * @since mongodb >=1.4.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\Undefined.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-undefined.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.4.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a Undefined
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\Undefined.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-undefined.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.4.0
		 */
		final public function serialize(): string {}

		/**
		 * Unserialize a Undefined
		 * @param string $serialized <p>The serialized MongoDB\BSON\Undefined.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\Undefined.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-undefined.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.4.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>Classes that implement this interface may be specified in a type map for unserializing BSON arrays and documents (both root and embedded).</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-unserializable.php
	 * @since mongodb >=1.0.0
	 */
	interface Unserializable {

		/**
		 * Constructs the object from a BSON array or document
		 * <p>Called during unserialization of the object from BSON. The properties of the BSON array or document will be passed to the method as an <code>array</code>.</p><p>Remember to check for an _id property when handling data from a BSON document.</p><p><b>注意</b>:  This method acts as the constructor of the object. The __construct() method will <i>not</i> be called after this method. </p>
		 * @param array $data <p>Properties within the BSON array or document.</p>
		 * @return void <p>The return value from this method is ignored.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-unserializable.bsonunserialize.php
		 * @see MongoDB\BSON\Serializable::bsonSerialize()
		 * @since mongodb >=1.0.0
		 */
		public function bsonUnserialize(array $data): void;
	}

	/**
	 * <p>Represents a » BSON date. The value is a 64-bit integer that represents the number of milliseconds since the Unix epoch (Jan 1, 1970). Negative values represent dates before 1970.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-utcdatetime.php
	 * @since mongodb >=1.0.0
	 */
	final class UTCDateTime implements \MongoDB\BSON\UTCDateTimeInterface, \MongoDB\BSON\Type, \Serializable, \JsonSerializable {

		/**
		 * Construct a new UTCDateTime
		 * @param int|float|string|\DateTimeInterface $milliseconds
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-bson-utcdatetime.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct($milliseconds = NULL) {}

		/**
		 * Returns the string representation of this UTCDateTime
		 * @return string <p>Returns the string representation of this UTCDateTime.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-utcdatetime.tostring.php
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}

		/**
		 * Returns a representation that can be converted to JSON
		 * @return mixed <p>Returns data which can be serialized by <code>json_encode()</code> to produce an extended JSON representation of the MongoDB\BSON\UTCDateTime.</p><p><b>注意</b>:  The output is consistent with the <code>MongoDB\BSON\toJSON()</code> function, which uses the driver-specific legacy extended JSON format. This does not necessarily match the » relaxed or » canonical extended JSON representations used by <code>MongoDB\BSON\toRelaxedExtendedJSON()</code> and <code>MongoDB\BSON\toCanonicalExtendedJSON()</code>, respectively. </p>
		 * @link https://php.net/manual/ja/mongodb-bson-utcdatetime.jsonserialize.php
		 * @see json_encode(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
		 * @since mongodb >=1.2.0
		 */
		final public function jsonSerialize() {}

		/**
		 * Serialize a UTCDateTime
		 * @return string <p>Returns the serialized representation of the MongoDB\BSON\UTCDateTime.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-utcdatetime.serialize.php
		 * @see serialize()
		 * @since mongodb >=1.2.0
		 */
		final public function serialize(): string {}

		/**
		 * Returns the DateTime representation of this UTCDateTime
		 * @return DateTime <p>Returns the DateTime representation of this UTCDateTime. The returned DateTime will use the UTC time zone.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-utcdatetime.todatetime.php
		 * @since mongodb >=1.0.0
		 */
		final public function toDateTime(): \DateTime {}

		/**
		 * Unserialize a UTCDateTime
		 * @param string $serialized <p>The serialized MongoDB\BSON\UTCDateTime.</p>
		 * @return void <p>Returns the unserialized MongoDB\BSON\UTCDateTime.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-utcdatetime.unserialize.php
		 * @see unserialize()
		 * @since mongodb >=1.2.0
		 */
		final public function unserialize(string $serialized): void {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\BSON\UTCDateTime but may also be used for type-hinting and userland classes.</p>
	 * @link https://php.net/manual/ja/class.mongodb-bson-utcdatetimeinterface.php
	 * @since mongodb >=1.3.0
	 */
	class UTCDateTimeInterface {

		/**
		 * Returns the string representation of this UTCDateTimeInterface
		 * @return string <p>Returns the string representation of this UTCDateTimeInterface.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-utcdatetimeinterface.tostring.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function __toString(): string;

		/**
		 * Returns the DateTime representation of this UTCDateTimeInterface
		 * @return DateTime <p>Returns the DateTime representation of this UTCDateTimeInterface. The returned DateTime should use the UTC time zone.</p>
		 * @link https://php.net/manual/ja/mongodb-bson-utcdatetimeinterface.todatetime.php
		 * @since mongodb >=1.3.0
		 */
		abstract public function toDateTime(): \DateTime;
	}

}

namespace MongoDB\Driver {

	/**
	 * <p>The <b>MongoDB\Driver\BulkWrite</b> collects one or more write operations that should be sent to the server. After adding any number of insert, update, and delete operations, the collection may be executed via <code>MongoDB\Driver\Manager::executeBulkWrite()</code>.</p>
	 * <p>Write operations may either be ordered (default) or unordered. Ordered write operations are sent to the server, in the order provided, for serial execution. If a write fails, any remaining operations will be aborted. Unordered operations are sent to the server in an arbitrary order where they may be executed in parallel. Any errors that occur are reported after all operations have been attempted.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-bulkwrite.php
	 * @since mongodb >=1.0.0
	 */
	final class BulkWrite implements \Countable {

		/**
		 * Create a new BulkWrite
		 * <p>Constructs a new MongoDB\Driver\BulkWrite, which is a mutable object to which one or more write operations may be added. The write(s) may then be executed with <code>MongoDB\Driver\Manager::executeBulkWrite()</code>.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description Default     bypassDocumentValidation <code>boolean</code>  <p>If <b><code>TRUE</code></b>, allows insert and update operations to circumvent document level validation.</p> <p>This option is available in MongoDB 3.2+ and is ignored for older server versions, which do not support document level validation.</p>  <b><code>FALSE</code></b>   ordered <code>boolean</code>  Ordered operations (<b><code>TRUE</code></b>) are executed serially on the MongoDB server, while unordered operations (<b><code>FALSE</code></b>) are sent to the server in an arbitrary order and may be executed in parallel.  <b><code>TRUE</code></b>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-driver-bulkwrite.construct.php
		 * @since mongodb >=1.0.0
		 */
		public function __construct(array $options = NULL) {}

		/**
		 * Count number of write operations in the bulk
		 * <p>Returns the number of write operations added to the MongoDB\Driver\BulkWrite object.</p>
		 * @return int <p>Returns number of write operations added to the MongoDB\Driver\BulkWrite object.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-bulkwrite.count.php
		 * @since mongodb >=1.0.0
		 */
		public function count(): int {}

		/**
		 * Add a delete operation to the bulk
		 * <p>Adds a delete operation to the MongoDB\Driver\BulkWrite.</p>
		 * @param array|object $filter
		 * @param array $deleteOptions <p></p> <b>deleteOptions</b>   Option Type Description Default     collation <code>array|object</code>  <p>» Collation は、文字列比較の際の言語固有のルールを指定するものです。たとえば、大文字小文字やアクセント記号の扱いを指定できます。 collation を指定するときには <i>"locale"</i> フィールドが必須となります。それ以外の collation フィールドはすべて任意指定です。 各フィールドについての説明は » Collation のドキュメント を参照ください。</p> <p>collation が未指定で collection のデフォルトの collation が設定されている場合は、コレクションが持っている collation を用いて操作を実行します。 コレクションや操作にも collation が指定されていない場合は、MongoDB は単純にバイナリ比較を行います。 これは、今までのバージョンでの文字列比較と同じ方法です。</p> <p>このオプションは MongoDB 3.4 以降で使用可能です。それより前のバージョンのサーバー上で指定すると、実行時に例外が発生します。</p>    limit <code>boolean</code> Delete all matching documents (<b><code>FALSE</code></b>), or only the first matching document (<b><code>TRUE</code></b>) <b><code>FALSE</code></b>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-bulkwrite.delete.php
		 * @since mongodb >=1.0.0
		 */
		public function delete($filter, array $deleteOptions = NULL): void {}

		/**
		 * Execute one or more write operations
		 * <p>Executes one or more write operations on the primary server.</p><p>A MongoDB\Driver\BulkWrite can be constructed with one or more write operations of varying types (e.g. updates, deletes, and inserts). The driver will attempt to send operations of the same type to the server in as few requests as possible to optimize round trips.</p>
		 * @param string $namespace <p>完全修飾形式の名前空間 (<i>"databaseName.collectionName"</i>)。</p>
		 * @param \MongoDB\Driver\BulkWrite $bulk <p>実行する書き込み。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>
		 * @return MongoDB\Driver\WriteResult <p>成功した場合に MongoDB\Driver\WriteResult を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.executebulkwrite.php
		 * @see MongoDB\Driver\Server::executeBulkWrite()
		 * @since mongodb >=1.0.0
		 */
		final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulk, array $options = array()): \MongoDB\Driver\WriteResult {}

		/**
		 * Add an insert operation to the bulk
		 * <p>Adds an insert operation to the MongoDB\Driver\BulkWrite.</p>
		 * @param array|object $document
		 * @return mixed <p>Returns the <i>_id</i> of the inserted document. If the <code>document</code> did not have an <i>_id</i>, the MongoDB\BSON\ObjectId generated for the insert will be returned.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-bulkwrite.insert.php
		 * @since mongodb >=1.0.0
		 */
		public function insert($document) {}

		/**
		 * Add an update operation to the bulk
		 * <p>Adds an update operation to the MongoDB\Driver\BulkWrite.</p>
		 * @param array|object $filter
		 * @param array|object $newObj
		 * @param array $updateOptions <p></p> <b>updateOptions</b>   Option Type Description Default     arrayFilters <code>array|object</code>  <p>An array of filter documents that determines which array elements to modify for an update operation on an array field. See » Specify arrayFilters for Array Update Operations in the MongoDB manual for more information.</p> <p>This option is available in MongoDB 3.6+ and will result in an exception at execution time if specified for an older server version.</p>    collation <code>array|object</code>  <p>» Collation は、文字列比較の際の言語固有のルールを指定するものです。たとえば、大文字小文字やアクセント記号の扱いを指定できます。 collation を指定するときには <i>"locale"</i> フィールドが必須となります。それ以外の collation フィールドはすべて任意指定です。 各フィールドについての説明は » Collation のドキュメント を参照ください。</p> <p>collation が未指定で collection のデフォルトの collation が設定されている場合は、コレクションが持っている collation を用いて操作を実行します。 コレクションや操作にも collation が指定されていない場合は、MongoDB は単純にバイナリ比較を行います。 これは、今までのバージョンでの文字列比較と同じ方法です。</p> <p>このオプションは MongoDB 3.4 以降で使用可能です。それより前のバージョンのサーバー上で指定すると、実行時に例外が発生します。</p>    multi <code>boolean</code>  Update only the first matching document if <b><code>FALSE</code></b>, or all matching documents <b><code>TRUE</code></b>. This option cannot be <b><code>TRUE</code></b> if <code>newObj</code> is a replacement document.  <b><code>FALSE</code></b>   upsert <code>boolean</code>  If <code>filter</code> does not match an existing document, insert a <i>single</i> document. The document will be created from <code>newObj</code> if it is a replacement document (i.e. no update operators); otherwise, the operators in <code>newObj</code> will be applied to <code>filter</code> to create the new document.  <b><code>FALSE</code></b>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-bulkwrite.update.php
		 * @since mongodb >=1.0.0
		 */
		public function update($filter, $newObj, array $updateOptions = NULL): void {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Command</b> class is a value object that represents a database command.</p>
	 * <p>To provide Command Helpers the <b>MongoDB\Driver\Command</b> object should be composed.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-command.php
	 * @since mongodb >=1.0.0
	 */
	final class Command {

		/**
		 * Create a new Command
		 * <p>Constructs a new MongoDB\Driver\Command, which is an immutable value object that represents a database command. The command may then be executed with <code>MongoDB\Driver\Manager::executeCommand()</code>.</p><p>The complete command document, which includes the command name and its options, should be expressed in the <code>document</code> parameter. The <code>commandOptions</code> parameter is only used to specify options related to the execution of the command and the resulting MongoDB\Driver\Cursor.</p>
		 * @param array|object $document <p>The complete command document, which will be sent to the server.</p>
		 * @param array $commandOptions <p><b>注意</b>:  Do not use this parameter to specify options described in the command's reference in the MongoDB manual. This parameter should only be used for the options explicitly listed below. </p> <p></p> <b>commandOptions</b>   Option Type Description     maxAwaitTimeMS <code>integer</code>  <p>Positive integer denoting the time limit in milliseconds for the server to block a getMore operation if no data is available. This option should only be used in conjunction with commands that return a tailable cursor (e.g. » Change Streams).</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-driver-command.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct($document, array $commandOptions = NULL) {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Cursor</b> class encapsulates the results of a MongoDB command or query and may be returned by <code>MongoDB\Driver\Manager::executeCommand()</code> or <code>MongoDB\Driver\Manager::executeQuery()</code>, respectively.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-cursor.php
	 * @since mongodb >=1.0.0
	 */
	final class Cursor implements \MongoDB\Driver\CursorInterface {

		/**
		 * Create a new Cursor (not used)
		 * <p>MongoDB\Driver\Cursor objects are returned as the result of an executed command or query and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-driver-cursor.construct.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeQuery(), MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeQuery()
		 * @since mongodb >=1.0.0
		 */
		final private function __construct() {}

		/**
		 * Execute a database command
		 * <p>Selects a server according to the <i>"readPreference"</i> option and executes the command on that server. By default, the read preference from the MongoDB Connection URI will be used.</p><p>This method applies no special logic to the command. Although this method accepts <i>"readConcern"</i> and <i>"writeConcern"</i> options, which will be incorporated into the command document, those options will not default to corresponding values from the MongoDB Connection URI nor will the MongoDB server version be taken into account. Users are therefore encouraged to use specific read and/or write command methods if possible.</p>
		 * @param string $db <p>コマンドを実行するデータベースの名前。</p>
		 * @param \MongoDB\Driver\Command $command <p>実行するコマンド。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>      <b>警告</b> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.executecommand.php
		 * @see MongoDB\Driver\Manager::executeReadCommand(), MongoDB\Driver\Manager::executeReadWriteCommand(), MongoDB\Driver\Manager::executeWriteCommand(), MongoDB\Driver\Server::executeCommand()
		 * @since mongodb >=1.0.0
		 */
		final public function executeCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database query
		 * <p>Selects a server according to the <i>"readPreference"</i> option and executes the query on that server. By default, the read preference from the MongoDB Connection URI will be used.</p>
		 * @param string $namespace <p>完全修飾形式の名前空間 (<i>"databaseName.collectionName"</i>)。</p>
		 * @param \MongoDB\Driver\Query $query <p>実行するクエリ。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.executequery.php
		 * @see MongoDB\Driver\Server::executeQuery()
		 * @since mongodb >=1.0.0
		 */
		final public function executeQuery(string $namespace, \MongoDB\Driver\Query $query, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Returns the ID for this cursor
		 * <p>Returns the MongoDB\Driver\CursorId associated with this cursor. A cursor ID uniquely identifies the cursor on the server.</p>
		 * @return MongoDB\Driver\CursorId <p>Returns the MongoDB\Driver\CursorId for this cursor.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-cursor.getid.php
		 * @see MongoDB\Driver\CursorId::__toString()
		 * @since mongodb >=1.0.0
		 */
		final public function getId(): \MongoDB\Driver\CursorId {}

		/**
		 * Returns the server associated with this cursor
		 * <p>Returns the MongoDB\Driver\Server associated with this cursor. This is the server that executed the MongoDB\Driver\Query or MongoDB\Driver\Command.</p>
		 * @return MongoDB\Driver\Server <p>Returns the MongoDB\Driver\Server associated with this cursor.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-cursor.getserver.php
		 * @since mongodb >=1.0.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}

		/**
		 * Checks if the cursor may have additional results
		 * <p>Checks whether the cursor may have additional results available to read. A cursor is initially "alive" but may become "dead" for any of the following reasons:</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if additional results are not available, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-cursor.isdead.php
		 * @since mongodb >=1.0.0
		 */
		final public function isDead(): bool {}

		/**
		 * Sets a type map to use for BSON unserialization
		 * <p>Sets the type map configuration to use when unserializing the BSON results into PHP values.</p>
		 * @param array $typemap
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-cursor.settypemap.php
		 * @since mongodb >=1.0.0
		 */
		final public function setTypeMap(array $typemap): void {}

		/**
		 * Returns an array containing all results for this cursor
		 * <p>Iterates the cursor and returns its results in an array. <code>MongoDB\Driver\Cursor::setTypeMap()</code> may be used to control how documents are unserialized into PHP values.</p>
		 * @return array <p>Returns an <code>array</code> containing all results for this cursor.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-cursor.toarray.php
		 * @see MongoDB\Driver\Cursor::setTypeMap()
		 * @since mongodb >=1.0.0
		 */
		final public function toArray(): array {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\CursorID</b> class is a value object that represents a cursor ID. Instances of this class are returned by <code>MongoDB\Driver\Cursor::getId()</code>.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-cursorid.php
	 * @since mongodb >=1.0.0
	 */
	final class CursorId {

		/**
		 * Create a new CursorId (not used)
		 * <p>MongoDB\Driver\CursorId objects are returned from <code>MongoDB\Driver\Cursor::getId()</code> and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-driver-cursorid.construct.php
		 * @see MongoDB\Driver\Cursor::getId()
		 * @since mongodb >=1.0.0
		 */
		final private function __construct() {}

		/**
		 * String representation of the cursor ID
		 * <p>Returns the <code>string</code> representation of the cursor ID.</p>
		 * @return string <p>Returns the <code>string</code> representation of the cursor ID.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-cursorid.tostring.php
		 * @see MongoDB\Driver\Cursor::getId()
		 * @since mongodb >=1.0.0
		 */
		final public function __toString(): string {}
	}

	/**
	 * <p>This interface is implemented by MongoDB\Driver\Cursor but may also be used for type-hinting and userland classes.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-cursorinterface.php
	 * @since mongodb >=1.6.0
	 */
	class CursorInterface implements \Traversable {

		/**
		 * Returns the ID for this cursor
		 * <p>Returns the MongoDB\Driver\CursorId associated with this cursor. A cursor ID uniquely identifies the cursor on the server.</p>
		 * @return MongoDB\Driver\CursorId <p>Returns the MongoDB\Driver\CursorId for this cursor.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-cursorinterface.getid.php
		 * @see MongoDB\Driver\CursorId::__toString()
		 * @since mongodb >=1.6.0
		 */
		abstract public function getId(): \MongoDB\Driver\CursorId;

		/**
		 * Returns the server associated with this cursor
		 * <p>Returns the MongoDB\Driver\Server associated with this cursor. This is the server that executed the MongoDB\Driver\Query or MongoDB\Driver\Command.</p>
		 * @return MongoDB\Driver\Server <p>Returns the MongoDB\Driver\Server associated with this cursor.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-cursorinterface.getserver.php
		 * @since mongodb >=1.6.0
		 */
		abstract public function getServer(): \MongoDB\Driver\Server;

		/**
		 * Checks if the cursor may have additional results
		 * <p>Checks whether the cursor may have additional results available to read. A cursor is initially "alive" but may become "dead" for any of the following reasons:</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if additional results are not available, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-cursorinterface.isdead.php
		 * @since mongodb >=1.6.0
		 */
		abstract public function isDead(): bool;

		/**
		 * Sets a type map to use for BSON unserialization
		 * <p>Sets the type map configuration to use when unserializing the BSON results into PHP values.</p>
		 * @param array $typemap
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-cursorinterface.settypemap.php
		 * @since mongodb >=1.6.0
		 */
		abstract public function setTypeMap(array $typemap): void;

		/**
		 * Returns an array containing all results for this cursor
		 * <p>Iterates the cursor and returns its results in an array. <code>MongoDB\Driver\CursorInterface::setTypeMap()</code> may be used to control how documents are unserialized into PHP values.</p>
		 * @return array <p>Returns an <code>array</code> containing all results for this cursor.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-cursorinterface.toarray.php
		 * @see MongoDB\Driver\CursorInterface::setTypeMap()
		 * @since mongodb >=1.6.0
		 */
		abstract public function toArray(): array;
	}

}

namespace MongoDB\Driver\Exception {

	/**
	 * <p>Thrown when the driver fails to authenticate with the server.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-authenticationexception.php
	 * @since mongodb >= 1.0.0
	 */
	class AuthenticationException extends \MongoDB\Driver\Exception\ConnectionException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

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

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when a bulk write operation fails.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-bulkwriteexception.php
	 * @since mongodb >= 1.0.0
	 */
	class BulkWriteException extends \MongoDB\Driver\Exception\WriteException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var MongoDB\Driver\WriteResult <p>The MongoDB\Driver\WriteResult associated with the failed write operation.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-writeexception.php#mongodb-driver-exception-writeexception.props.writeresult
		 */
		protected $writeResult;

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

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

		/**
		 * Returns the WriteResult for the failed write operation
		 * <p>Returns the MongoDB\Driver\WriteResult for the failed write operation. The <code>MongoDB\Driver\WriteResult::getWriteErrors()</code> and <code>MongoDB\Driver\WriteResult::getWriteConcernError()</code> methods may be used to get more details about the failure.</p>
		 * @return MongoDB\Driver\WriteResult <p>The MongoDB\Driver\WriteResult for the failed write operation.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeexception.getwriteresult.php
		 * @see MongoDB\Driver\Manager::executeBulkWrite()
		 * @since mongodb >= 1.0.0
		 */
		final public function getWriteResult(): \MongoDB\Driver\WriteResult {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when a command fails.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-commandexception.php
	 * @since mongodb >= 1.5.0
	 */
	class CommandException extends \MongoDB\Driver\Exception\ServerException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var object <p>The result document associated with the failed command.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-commandexception.php#mongodb-driver-exception-commandexception.props.resultdocument
		 */
		protected $resultDocument;

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

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
		 * Returns the result document for the failed command
		 * <p>Returns the result document for the failed command.</p>
		 * @return object <p>The result document for the failed command.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-commandexception.getresultdocument.php
		 * @see MongoDB\Driver\Manager::executeCommand()
		 * @since mongodb >= 1.5.0
		 */
		final public function getResultDocument(): object {}

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

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Base class for exceptions thrown when the driver fails to establish a database connection.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-connectionexception.php
	 * @since mongodb >= 1.0.0
	 */
	class ConnectionException extends \MongoDB\Driver\Exception\RuntimeException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

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

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when the driver fails to establish a database connection within a specified time limit (connectTimeoutMS) or server selection fails (serverSelectionTimeoutMS).</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-connectiontimeoutexception.php
	 * @since mongodb >= 1.0.0
	 */
	final class ConnectionTimeoutException extends \MongoDB\Driver\Exception\ConnectionException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

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

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Common interface for all driver exceptions. This may be used to catch only exceptions originating from the driver itself.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-exception.php
	 * @since mongodb >= 1.0.0
	 */
	class Exception {
	}

	/**
	 * <p>Thrown when a query or command fails to complete within a specified time limit (e.g. » maxTimeMS).</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-executiontimeoutexception.php
	 * @since mongodb >= 1.0.0
	 */
	final class ExecutionTimeoutException extends \MongoDB\Driver\Exception\ServerException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

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

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when a driver method is given invalid arguments (e.g. invalid option types).</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-invalidargumentexception.php
	 * @since mongodb >= 1.0.0
	 */
	class InvalidArgumentException extends \InvalidArgumentException implements \MongoDB\Driver\Exception\Exception {

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

	/**
	 * <p>Thrown when the driver is incorrectly used (e.g. rewinding a cursor).</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-logicexception.php
	 * @since mongodb >= 1.0.0
	 */
	class LogicException extends \LogicException implements \MongoDB\Driver\Exception\Exception {

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

	/**
	 * <p>Thrown when the driver encounters a runtime error (e.g. internal error from » libmongoc).</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-runtimeexception.php
	 * @since mongodb >= 1.0.0
	 */
	class RuntimeException extends \RuntimeException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

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

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Base class for exceptions thrown by the server. The code of this exception and its subclasses will correspond to the original error code from the server.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-serverexception.php
	 * @since mongodb >= 1.5.0
	 */
	class ServerException extends \MongoDB\Driver\Exception\RuntimeException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

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

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when the driver fails to establish an SSL connection with the server.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-sslconnectionexception.php
	 * @since mongodb >= 1.0.0
	 */
	final class SSLConnectionException extends \MongoDB\Driver\Exception\ConnectionException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

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

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

	/**
	 * <p>Thrown when the driver encounters an unexpected value (e.g. during BSON serialization or deserialization).</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-unexpectedvalueexception.php
	 * @since mongodb >= 1.0.0
	 */
	class UnexpectedValueException extends \UnexpectedValueException implements \MongoDB\Driver\Exception\Exception {

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

	/**
	 * <p>Base class for exceptions thrown by a failed write operation. The exception encapsulates a MongoDB\Driver\WriteResult object.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-exception-writeexception.php
	 * @since mongodb >= 1.0.0
	 */
	abstract class WriteException extends \MongoDB\Driver\Exception\ServerException implements \MongoDB\Driver\Exception\Exception {

		/**
		 * @var MongoDB\Driver\WriteResult <p>The MongoDB\Driver\WriteResult associated with the failed write operation.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-writeexception.php#mongodb-driver-exception-writeexception.props.writeresult
		 */
		protected $writeResult;

		/**
		 * @var bool <p>Contains an array of error labels to go with an exception. For example, error labels can be used to detect whether a transaction can be retried safely if the <i>TransientTransactionError</i> label is present. The existence of a specific error label should be tested for with the <code>MongoDB\Driver\Exception\RuntimeException::hasErrorLabel()</code>, instead of interpreting this <i>errorLabels</i> property manually.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-exception-runtimeexception.php#mongodb-driver-exception-runtimeexception.props.errorlabels
		 */
		protected $errorLabels;

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

		/**
		 * Returns the WriteResult for the failed write operation
		 * <p>Returns the MongoDB\Driver\WriteResult for the failed write operation. The <code>MongoDB\Driver\WriteResult::getWriteErrors()</code> and <code>MongoDB\Driver\WriteResult::getWriteConcernError()</code> methods may be used to get more details about the failure.</p>
		 * @return MongoDB\Driver\WriteResult <p>The MongoDB\Driver\WriteResult for the failed write operation.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeexception.getwriteresult.php
		 * @see MongoDB\Driver\Manager::executeBulkWrite()
		 * @since mongodb >= 1.0.0
		 */
		final public function getWriteResult(): \MongoDB\Driver\WriteResult {}

		/**
		 * Returns whether an error label is associated with an exception
		 * <p>Returns whether the <code>errorLabel</code> has been set for this exception. Error labels are set by either the server or the driver to indicated specific situations on which you might want to decide on how you want to handle a specific exception. A common situation might be to find out whether you can safely retry a transaction that failed due to a transient error (like a networking issue, or a transaction conflict). Examples of error labels are <i>TransientTransactionError</i> and <i>UnknownTransactionCommitResult</i>.</p>
		 * @param string $errorLabel <p>The name of the <i>errorLabel</i> to test for.</p>
		 * @return bool <p>Whether the given <i>errorLabel</i> is associated with this exception.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-runtimeexception.haserrorlabel.php
		 * @see MongoDB\Driver\Session::commitTransaction()
		 * @since mongodb >= 1.6.0
		 */
		final public function hasErrorLabel(string $errorLabel): bool {}
	}

}

namespace MongoDB\Driver {

	/**
	 * <p>The <b>MongoDB\Driver\Manager</b> is the main entry point to the extension. It is responsible for maintaining connections to MongoDB (be it standalone server, replica set, or sharded cluster).</p>
	 * <p>No connection to MongoDB is made upon instantiating the Manager. This means the <b>MongoDB\Driver\Manager</b> can always be constructed, even though one or more MongoDB servers are down.</p>
	 * <p>Any write or query can throw connection exceptions as connections are created lazily. A MongoDB server may also become unavailable during the life time of the script. It is therefore important that all actions on the Manager to be wrapped in try/catch statements.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-manager.php
	 * @since mongodb >=1.0.0
	 */
	final class Manager {

		/**
		 * Create new MongoDB Manager
		 * <p>Constructs a new MongoDB\Driver\Manager object with the specified options.</p><p><b>注意</b>:  Per the » Server Discovery and Monitoring Specification, this constructor performs no I/O. Connections will be initialized on demand, when the first operation is executed. </p><p><b>注意</b>:  Unix プラットフォームの MongoDB ドライバーは、 exec() システムコールを呼ばすに fork() システムコールを使っているスクリプトの影響を受けます。 MongoDB\Driver\Manager のインスタンスを、 フォークした子プロセスで再利用しないことをおすすめします。 </p>
		 * @param string $uri <p>A » mongodb:// connection URI:</p>  <pre>mongodb://[username:password@]host1[:port1][,host2[:port2],...[,hostN[:portN]]][/[database][&#63;options]]</pre>   <p>For details on supported options, see » Connection String Options in the MongoDB manual. » Connection pool options are not supported, as the PHP driver does not implement connection pools.</p> <p>The <code>uri</code> is a URL, hence any special characters in its components need to be URL encoded according to » RFC 3986. This is particularly relevant to the username and password, which can often include special characters such as <i>@</i>, <i>:</i>, or <i>%</i>. When connecting via a Unix domain socket, the socket path may contain special characters such as slashes and must be encoded. The <code>rawurlencode()</code> function may be used to encode constituent parts of the URI.</p>
		 * @param array $uriOptions <p>Additional » connection string options, which will overwrite any options with the same name in the <code>uri</code> parameter.</p> <p></p> <b>uriOptions</b>   Option Type Description     appname <code>string</code>  <p>MongoDB 3.4+ has the ability to annotate connections with metadata provided by the connecting client. This metadata is included in the server's logs upon establishing a connection and also recorded in slow query logs when database profiling is enabled.</p> <p>This option may be used to specify an application name, which will be included in the metadata. The value cannot exceed 128 characters in length.</p>    authMechanism <code>string</code>  <p>The authentication mechanism that MongoDB will use to authenticate the connection. For additional details and a list of supported values, see » Authentication Options in the MongoDB manual.</p>    authMechanismProperties <code>array</code>  <p>Properties for the selected authentication mechanism. For additional details and a list of supported properties, see the » Driver Authentication Specification.</p> <p><b>注意</b>:  When not specified in the URI string, this option is expressed as an array of key/value pairs. The keys and values in this array should be strings. </p>    authSource <code>string</code>  <p>The database name associated with the user's credentials. Defaults to the database component of the connection URI.</p> <p>For authentication mechanisms that delegate credential storage to other services (e.g. GSSAPI), this should be <i>"$external"</i>.</p>    canonicalizeHostname <code>boolean</code>  <p>If <b><code>TRUE</code></b>, the driver will resolve the real hostname for the server IP address before authenticating via SASL. Some underlying GSSAPI layers already do this, but the functionality may be disabled in their config (e.g. <i>krb.conf</i>). Defaults to <b><code>FALSE</code></b>.</p> <p>This option is a deprecated alias for the <i>"CANONICALIZE_HOST_NAME"</i> property of the <i>"authMechanismProperties"</i> URI option.</p>    compressors <code>string</code>  <p>A prioritized, comma-delimited list of compressors that the client wants to use. Messages are only compressed if the client and server share any compressors in common, and the compressor used in each direction will depend on the individual configuration of the server or driver. See the » Driver Compression Specification for more information.</p>    connectTimeoutMS <code>integer</code>  <p>The time in milliseconds to attempt a connection before timing out. Defaults to 10,000 milliseconds.</p>    gssapiServiceName <code>string</code>  <p>Set the Kerberos service name when connecting to Kerberized MongoDB instances. This value must match the service name set on MongoDB instances (i.e. » saslServiceName server parameter). Defaults to <i>"mongodb"</i>.</p> <p>This option is a deprecated alias for the <i>"SERVICE_NAME"</i> property of the <i>"authMechanismProperties"</i> URI option.</p>    heartbeatFrequencyMS <code>integer</code>  <p>Specifies the interval in milliseconds between the driver's checks of the MongoDB topology, counted from the end of the previous check until the beginning of the next one. Defaults to 60,000 milliseconds.</p> <p>Per the » Server Discovery and Monitoring Specification, this value cannot be less than 500 milliseconds.</p>    journal <code>boolean</code>  <p>Corresponds to the default write concern's <code>journal</code> parameter. If <b><code>TRUE</code></b>, writes will require acknowledgement from MongoDB that the operation has been written to the journal. For details, see MongoDB\Driver\WriteConcern.</p>    localThresholdMS <code>integer</code>  <p>The size in milliseconds of the latency window for selecting among multiple suitable MongoDB instances while resolving a read preference. Defaults to 15 milliseconds.</p>    maxStalenessSeconds <code>integer</code>  <p>Corresponds to the read preference's <i>"maxStalenessSeconds"</i>. Specifies, in seconds, how stale a secondary can be before the client stops using it for read operations. By default, there is no maximum staleness and clients will not consider a secondary’s lag when choosing where to direct a read operation. For details, see MongoDB\Driver\ReadPreference.</p> <p>If specified, the max staleness must be a signed 32-bit integer greater than or equal to <b><code>MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS</code></b> (i.e. 90 seconds).</p>    password <code>string</code>  The password for the user being authenticated. This option is useful if the password contains special characters, which would otherwise need to be URL encoded for the connection URI.    readConcernLevel <code>string</code>  Corresponds to the read concern's <code>level</code> parameter. Specifies the level of read isolation. For details, see MongoDB\Driver\ReadConcern.    readPreference <code>string</code>  <p>Corresponds to the read preference's <code>mode</code> parameter. Defaults to <i>"primary"</i>. For details, see MongoDB\Driver\ReadPreference.</p>    readPreferenceTags <code>array</code>  <p>Corresponds to the read preference's <code>tagSets</code> parameter. Tag sets allow you to target read operations to specific members of a replica set. For details, see MongoDB\Driver\ReadPreference.</p> <p><b>注意</b>:  When not specified in the URI string, this option is expressed as an array consistent with the format expected by <code>MongoDB\Driver\ReadPreference::__construct()</code>. </p>    replicaSet <code>string</code>  <p>Specifies the name of the replica set.</p>    retryReads <code>boolean</code>  <p>Specifies whether or not the driver should automatically retry certain read operations that fail due to transient network errors or replica set elections. This functionality requires MongoDB 3.6+. Defaults to <b><code>TRUE</code></b>.</p> <p>See the » Retryable Reads Specification for more information.</p>    retryWrites <code>boolean</code>  <p>Specifies whether or not the driver should automatically retry certain write operations that fail due to transient network errors or replica set elections. This functionality requires MongoDB 3.6+. Defaults to <b><code>TRUE</code></b>.</p> <p>See » Retryable Writes in the MongoDB manual for more information.</p>    safe <code>boolean</code>  <p>If <b><code>TRUE</code></b>, specifies <i>1</i> for the default write concern's <code>w</code> parameter. If <b><code>FALSE</code></b>, <i>0</i> is specified. For details, see MongoDB\Driver\WriteConcern.</p> <p>This option is deprecated and should not be used.</p>    serverSelectionTimeoutMS <code>integer</code>  <p>Specifies how long in milliseconds to block for server selection before throwing an exception. Defaults to 30,000 milliseconds.</p>    serverSelectionTryOnce <code>boolean</code>  <p>When <b><code>TRUE</code></b>, instructs the driver to scan the MongoDB deployment exactly once after server selection fails and then either select a server or raise an error. When <b><code>FALSE</code></b>, the driver blocks and searches for a server up to the <i>"serverSelectionTimeoutMS"</i> value. Defaults to <b><code>TRUE</code></b>.</p>    slaveOk <code>boolean</code>  <p>Specifies <i>"secondaryPreferred"</i> for the read preference mode if <b><code>TRUE</code></b>. For details, see MongoDB\Driver\ReadPreference.</p> <p>This option is deprecated and should not be used.</p>    socketCheckIntervalMS <code>integer</code>  <p>If a socket has not been used recently, the driver must check it via an <i>isMaster</i> command before using it for any operation. Defaults to 5,000 milliseconds.</p>    socketTimeoutMS <code>integer</code>  <p>The time in milliseconds to attempt a send or receive on a socket before timing out. Defaults to 300,000 milliseconds (i.e. five minutes).</p>    ssl <code>boolean</code>  <p>Initiates the connection with TLS/SSL if <b><code>TRUE</code></b>. Defaults to <b><code>FALSE</code></b>.</p> <p>This option is a deprecated alias for the <i>"tls"</i> URI option.</p>    tls <code>boolean</code>  <p>Initiates the connection with TLS/SSL if <b><code>TRUE</code></b>. Defaults to <b><code>FALSE</code></b>.</p>    tlsAllowInvalidCertificates <code>boolean</code>  <p>Specifies whether or not the driver should error when the server's TLS certificate is invalid. Defaults to <b><code>FALSE</code></b>.</p>  <b>警告</b> <p>Disabling certificate validation creates a vulnerability.</p>     tlsAllowInvalidHostnames <code>boolean</code>  <p>Specifies whether or not the driver should error when there is a mismatch between the server's hostname and the hostname specified by the TLS certificate. Defaults to <b><code>FALSE</code></b>.</p>  <b>警告</b> <p>Disabling certificate validation creates a vulnerability. Allowing invalid hostnames may expose the driver to a » man-in-the-middle attack.</p>     tlsCAFile <code>string</code>  <p>Path to file with either a single or bundle of certificate authorities to be considered trusted when making a TLS connection. The system certificate store will be used by default.</p>    tlsCertificateKeyFile <code>string</code>  <p>Path to the client certificate file or the client private key file; in the case that they both are needed, the files should be concatenated.</p>    tlsCertificateKeyFilePassword <code>string</code>  <p>Password to decrypt the client private key (i.e. <i>"tlsCertificateKeyFile"</i> URI option) to be used for TLS connections.</p>    tlsInsecure <code>boolean</code>  <p>Relax TLS constraints as much as possible. Specifying <b><code>TRUE</code></b> for this option has the same effect as specifying <b><code>TRUE</code></b> for both the <i>tlsAllowInvalidCertificates</i> and <i>"tlsAllowInvalidHostnames"</i> URI options. Defaults to <b><code>FALSE</code></b>.</p>  <b>警告</b> <p>Disabling certificate validation creates a vulnerability. Allowing invalid hostnames may expose the driver to a » man-in-the-middle attack.</p>     username <code>string</code>  The username for the user being authenticated. This option is useful if the username contains special characters, which would otherwise need to be URL encoded for the connection URI.    w integer|string  <p>Corresponds to the default write concern's <code>w</code> parameter. For details, see MongoDB\Driver\WriteConcern.</p>    wTimeoutMS integer|string  <p>Corresponds to the default write concern's <code>wtimeout</code> parameter. Specifies a time limit, in milliseconds, for the write concern. For details, see MongoDB\Driver\WriteConcern.</p> <p>If specified, <i>wTimeoutMS</i> must be a signed 32-bit integer greater than or equal to zero.</p>    zlibCompressionLevel <code>integer</code>  <p>Specifies the compression level to use for the zlib compressor. This option has no effect if <i>zlib</i> is not included in the <i>"compressors"</i> URI option. See the » Driver Compression Specification for more information.</p>
		 * @param array $driverOptions <p></p> <b>driverOptions</b>   Option Type Description     allow_invalid_hostname <code>boolean</code>  <p>Disables hostname validation if <b><code>TRUE</code></b>. Defaults to <b><code>FALSE</code></b>.</p> <p>Allowing invalid hostnames may expose the driver to a » man-in-the-middle attack.</p> <p>This option is a deprecated alias for the <i>"tlsAllowInvalidHostnames"</i> URI option.</p>    ca_dir <code>string</code>  <p>Path to a correctly hashed certificate directory. The system certificate store will be used by default.</p>    ca_file <code>string</code>  <p>Path to file with either a single or bundle of certificate authorities to be considered trusted when making a TLS connection. The system certificate store will be used by default.</p> <p>This option is a deprecated alias for the <i>"tlsCAFile"</i> URI option.</p>    context <code>resource</code>  <p>SSL context options to be used as fallbacks if a driver option or its equivalent URI option, if any, is not specified. Note that the driver does not consult the default stream context (i.e. <code>stream_context_get_default()</code>). The following context options are supported:</p>  <b>SSL context option fallbacks</b>   Driver option Context option (fallback)     ca_dir capath   ca_file cafile   pem_file local_cert   pem_pwd passphrase   weak_cert_validation allow_self_signed    <p>This option is supported for backwards compatibility, but should be considered deprecated.</p>    crl_file <code>string</code> Path to a certificate revocation list file.   pem_file <code>string</code>  <p>Path to a PEM encoded certificate to use for client authentication.</p> <p>This option is a deprecated alias for the <i>"tlsCertificateKeyFile"</i> URI option.</p>    pem_pwd <code>string</code>  <p>Passphrase for the PEM encoded certificate (if applicable).</p> <p>This option is a deprecated alias for the <i>"tlsCertificateKeyFilePassword"</i> URI option.</p>    weak_cert_validation <code>boolean</code>  <p>Disables certificate validation if <b><code>TRUE</code></b>. Defaults to <b><code>FALSE</code></b></p> <p>This option is a deprecated alias for the <i>"tlsAllowInvalidHostnames"</i> URI option.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-driver-manager.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $uri = "mongodb://127.0.0.1/", array $uriOptions = array(), array $driverOptions = array()) {}

		/**
		 * Execute one or more write operations
		 * <p>Executes one or more write operations on the primary server.</p><p>A MongoDB\Driver\BulkWrite can be constructed with one or more write operations of varying types (e.g. updates, deletes, and inserts). The driver will attempt to send operations of the same type to the server in as few requests as possible to optimize round trips.</p>
		 * @param string $namespace <p>完全修飾形式の名前空間 (<i>"databaseName.collectionName"</i>)。</p>
		 * @param \MongoDB\Driver\BulkWrite $bulk <p>実行する書き込み。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>
		 * @return MongoDB\Driver\WriteResult <p>成功した場合に MongoDB\Driver\WriteResult を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.executebulkwrite.php
		 * @see MongoDB\Driver\Server::executeBulkWrite()
		 * @since mongodb >=1.0.0
		 */
		final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulk, array $options = array()): \MongoDB\Driver\WriteResult {}

		/**
		 * Execute a database command
		 * <p>Selects a server according to the <i>"readPreference"</i> option and executes the command on that server. By default, the read preference from the MongoDB Connection URI will be used.</p><p>This method applies no special logic to the command. Although this method accepts <i>"readConcern"</i> and <i>"writeConcern"</i> options, which will be incorporated into the command document, those options will not default to corresponding values from the MongoDB Connection URI nor will the MongoDB server version be taken into account. Users are therefore encouraged to use specific read and/or write command methods if possible.</p>
		 * @param string $db <p>コマンドを実行するデータベースの名前。</p>
		 * @param \MongoDB\Driver\Command $command <p>実行するコマンド。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>      <b>警告</b> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.executecommand.php
		 * @see MongoDB\Driver\Manager::executeReadCommand(), MongoDB\Driver\Manager::executeReadWriteCommand(), MongoDB\Driver\Manager::executeWriteCommand(), MongoDB\Driver\Server::executeCommand()
		 * @since mongodb >=1.0.0
		 */
		final public function executeCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database query
		 * <p>Selects a server according to the <i>"readPreference"</i> option and executes the query on that server. By default, the read preference from the MongoDB Connection URI will be used.</p>
		 * @param string $namespace <p>完全修飾形式の名前空間 (<i>"databaseName.collectionName"</i>)。</p>
		 * @param \MongoDB\Driver\Query $query <p>実行するクエリ。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.executequery.php
		 * @see MongoDB\Driver\Server::executeQuery()
		 * @since mongodb >=1.0.0
		 */
		final public function executeQuery(string $namespace, \MongoDB\Driver\Query $query, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads
		 * <p>Selects a server according to the <i>"readPreference"</i> option and executes the command on that server. By default, the read preference from the MongoDB Connection URI will be used.</p><p>This method will apply logic that is specific to commands that read (e.g. » count) and take the MongoDB server version into account. The <i>"readConcern"</i> option will default to the corresponding value from the MongoDB Connection URI.</p>
		 * @param string $db <p>コマンドを実行するデータベースの名前。</p>
		 * @param \MongoDB\Driver\Command $command <p>実行するコマンド。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>      <b>警告</b> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.executereadcommand.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeReadWriteCommand(), MongoDB\Driver\Manager::executeWriteCommand(), MongoDB\Driver\Server::executeReadCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads and writes
		 * <p>Executes the command on the primary server.</p><p>This method will apply logic that is specific to commands that read and write (e.g. » findAndModify) and take the MongoDB server version into account. The <i>"readConcern"</i> and <i>"writeConcern"</i> options will default to the corresponding values from the MongoDB Connection URI.</p>
		 * @param string $db <p>コマンドを実行するデータベースの名前。</p>
		 * @param \MongoDB\Driver\Command $command <p>実行するコマンド。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>      <b>警告</b> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.executereadwritecommand.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeReadCommand(), MongoDB\Driver\Manager::executeWriteCommand(), MongoDB\Driver\Server::executeReadWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that writes
		 * <p>Executes the command on the primary server.</p><p>This method will apply logic that is specific to commands that write (e.g. » drop) and take the MongoDB server version into account. The <i>"writeConcern"</i> option will default to the corresponding value from the MongoDB Connection URI.</p><p><b>注意</b>:  This method is not intended to be used to execute » insert, » update, or » delete commands. Users are encouraged to use <code>MongoDB\Driver\Manager::executeBulkWrite()</code> for those commands. </p>
		 * @param string $db <p>コマンドを実行するデータベースの名前。</p>
		 * @param \MongoDB\Driver\Command $command <p>実行するコマンド。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>      <b>警告</b> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.executewritecommand.php
		 * @see MongoDB\Driver\Manager::executeCommand(), MongoDB\Driver\Manager::executeReadCommand(), MongoDB\Driver\Manager::executeReadWriteCommand(), MongoDB\Driver\Server::executeWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Return the ReadConcern for the Manager
		 * <p>Returns the MongoDB\Driver\ReadConcern for the Manager, which is derived from its URI options. This is the default read concern for queries and commands executed on the Manager.</p>
		 * @return MongoDB\Driver\ReadConcern <p>The MongoDB\Driver\ReadConcern for the Manager.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.getreadconcern.php
		 * @see MongoDB\Driver\Manager::__construct()
		 * @since mongodb >=1.1.0
		 */
		final public function getReadConcern(): \MongoDB\Driver\ReadConcern {}

		/**
		 * Return the ReadPreference for the Manager
		 * <p>Returns the MongoDB\Driver\ReadPreference for the Manager, which is derived from its URI options. This is the default read preference for queries and commands executed on the Manager.</p>
		 * @return MongoDB\Driver\ReadPreference <p>The MongoDB\Driver\ReadPreference for the Manager.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.getreadpreference.php
		 * @see MongoDB\Driver\Manager::__construct()
		 * @since mongodb >=1.0.0
		 */
		final public function getReadPreference(): \MongoDB\Driver\ReadPreference {}

		/**
		 * Return the servers to which this manager is connected
		 * <p>Returns an <code>array</code> of MongoDB\Driver\Server instances to which this manager is connected.</p><p><b>注意</b>:  Since the driver connects to the database lazily, this method may return an empty <code>array</code> if called before executing an operation on the MongoDB\Driver\Manager. </p>
		 * @return array <p>Returns an <code>array</code> of MongoDB\Driver\Server instances to which this manager is connected.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.getservers.php
		 * @see MongoDB\Driver\Manager::selectServer()
		 * @since mongodb >=1.0.0
		 */
		final public function getServers(): array {}

		/**
		 * Return the WriteConcern for the Manager
		 * <p>Returns the MongoDB\Driver\WriteConcern for the Manager, which is derived from its URI options. This is the default write concern for writes and commands executed on the Manager.</p>
		 * @return MongoDB\Driver\WriteConcern <p>The MongoDB\Driver\WriteConcern for the Manager.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.getwriteconcern.php
		 * @see MongoDB\Driver\Manager::__construct()
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteConcern(): \MongoDB\Driver\WriteConcern {}

		/**
		 * Select a server matching a read preference
		 * <p>Selects a MongoDB\Driver\Server matching <code>readPreference</code>. This may be used to preselect a server in order to perform version checking before executing an operation.</p><p><b>注意</b>:  Unlike <code>MongoDB\Driver\Manager::getServers()</code>, this method will initialize database connections and perform server discovery if necessary. See the » Server Selection Specification for additional information. </p>
		 * @param \MongoDB\Driver\ReadPreference $readPreference <p>The read preference to use for selecting a server.</p>
		 * @return MongoDB\Driver\Server <p>Returns a MongoDB\Driver\Server matching the read preference.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.selectserver.php
		 * @see MongoDB\Driver\Manager::getServers()
		 * @since mongodb >=1.0.0
		 */
		final public function selectServer(\MongoDB\Driver\ReadPreference $readPreference): \MongoDB\Driver\Server {}

		/**
		 * Start a new client session for use with this client
		 * <p>Creates a MongoDB\Driver\Session for the given options. The session may then be specified when executing commands, queries, and write operations.</p><p><b>注意</b>:  A MongoDB\Driver\Session can only be used with the MongoDB\Driver\Manager from which it was created. </p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description Default     causalConsistency <code>boolean</code>  <p>Configure causal consistency in a session. If <b><code>TRUE</code></b>, each operation in the session will be causally ordered after the previous read or write operation. Set to <b><code>FALSE</code></b> to disable causal consistency.</p> <p>See » Casual Consistency in the MongoDB manual for more information.</p>  <b><code>TRUE</code></b>   defaultTransactionOptions <code>array</code>  <p>Default options to apply to newly created transactions. These options are used unless they are overridden when a transaction is started with different value for each option.</p> <p></p>  <b>options</b>   Option Type Description     maxCommitTimeMS integer  <p>The maximum amount of time in milliseconds to allow a single <i>commitTransaction</i> command to run.</p> <p>If specified, <i>maxCommitTimeMS</i> must be a signed 32-bit integer greater than or equal to zero.</p>    readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>     <p>This option is available in MongoDB 4.0+.</p>  <i>[]</i>
		 * @return MongoDB\Driver\Session <p>Returns a MongoDB\Driver\Session.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.startsession.php
		 * @since mongodb >=1.4.0
		 */
		final public function startSession(array $options = NULL): \MongoDB\Driver\Session {}
	}

}

namespace MongoDB\Driver\Monitoring {

	/**
	 * <p>The <b>MongoDB\Driver\Monitoring\CommandFailedEvent</b> class encapsulates information about a failed command.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-monitoring-commandfailedevent.php
	 * @since mongodb >=1.3.0
	 */
	final class CommandFailedEvent {

		/**
		 * Returns the command name
		 * <p>Returns the command name (e.g. <i>"find"</i>, <i>"aggregate"</i>).</p>
		 * @return string <p>Returns the command name.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandfailedevent.getcommandname.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommandName(): string {}

		/**
		 * Returns the command's duration in microseconds
		 * <p>The command's duration is a calculated value that includes the time to send the message and receive the reply from the server.</p>
		 * @return int <p>Returns the command's duration in microseconds.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandfailedevent.getdurationmicros.php
		 * @since mongodb >=1.3.0
		 */
		final public function getDurationMicros(): int {}

		/**
		 * Returns the Exception associated with the failed command
		 * @return Exception <p>Returns the Exception associated with the failed command.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandfailedevent.geterror.php
		 * @since mongodb >=1.3.0
		 */
		final public function getError(): \Exception {}

		/**
		 * Returns the command's operation ID
		 * <p>The operation ID is generated by the driver and may be used to link events together such as bulk write operations, which may have been split across several commands at the protocol level.</p><p><b>注意</b>:  Since multiple commands may share the same operation ID, it is not reliable to use this value to associate event objects with each other. The request ID returned by <code>MongoDB\Driver\Monitoring\CommandFailedEvent::getRequestId()</code> should be used instead. </p>
		 * @return string <p>Returns the command's operation ID.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandfailedevent.getoperationid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getOperationId(): string {}

		/**
		 * Returns the command reply document
		 * <p>The reply document will be converted from BSON to PHP using the default deserialization rules (e.g. BSON documents will be converted to stdClass).</p>
		 * @return object <p>Returns the command reply document as a <b>stdClass</b> object.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandfailedevent.getreply.php
		 * @since mongodb >=1.5.0
		 */
		final public function getReply(): object {}

		/**
		 * Returns the command's request ID
		 * <p>The request ID is generated by the driver and may be used to associate this MongoDB\Driver\Monitoring\CommandFailedEvent with a previous MongoDB\Driver\Monitoring\CommandStartedEvent.</p>
		 * @return string <p>Returns the command's request ID.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandfailedevent.getrequestid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getRequestId(): string {}

		/**
		 * Returns the Server on which the command was executed
		 * <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @return MongoDB\Driver\Server <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandfailedevent.getserver.php
		 * @since mongodb >=1.3.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Monitoring\CommandStartedEvent</b> class encapsulates information about a started command.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-monitoring-commandstartedevent.php
	 * @since mongodb >=1.3.0
	 */
	final class CommandStartedEvent {

		/**
		 * Returns the command document
		 * <p>The reply document will be converted from BSON to PHP using the default deserialization rules (e.g. BSON documents will be converted to stdClass).</p>
		 * @return object <p>Returns the command document as a <b>stdClass</b> object.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandstartedevent.getcommand.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommand(): object {}

		/**
		 * Returns the command name
		 * <p>Returns the command name (e.g. <i>"find"</i>, <i>"aggregate"</i>).</p>
		 * @return string <p>Returns the command name.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandstartedevent.getcommandname.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommandName(): string {}

		/**
		 * Returns the database on which the command was executed
		 * @return string <p>Returns the database on which the command was executed.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandstartedevent.getdatabasename.php
		 * @since mongodb >=1.3.0
		 */
		final public function getDatabaseName(): string {}

		/**
		 * Returns the command's operation ID
		 * <p>The operation ID is generated by the driver and may be used to link events together such as bulk write operations, which may have been split across several commands at the protocol level.</p><p><b>注意</b>:  Since multiple commands may share the same operation ID, it is not reliable to use this value to associate event objects with each other. The request ID returned by <code>MongoDB\Driver\Monitoring\CommandStartedEvent::getRequestId()</code> should be used instead. </p>
		 * @return string <p>Returns the command's operation ID.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandstartedevent.getoperationid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getOperationId(): string {}

		/**
		 * Returns the command's request ID
		 * <p>The request ID is generated by the driver and may be used to associate this MongoDB\Driver\Monitoring\CommandStartedEvent with a later MongoDB\Driver\Monitoring\CommandFailedEvent or MongoDB\Driver\Monitoring\CommandSucceededEvent.</p>
		 * @return string <p>Returns the command's request ID.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandstartedevent.getrequestid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getRequestId(): string {}

		/**
		 * Returns the Server on which the command was executed
		 * <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @return MongoDB\Driver\Server <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandstartedevent.getserver.php
		 * @since mongodb >=1.3.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}
	}

	/**
	 * <p>Classes may implement this interface to register an event subscriber that is notified for each started, successful, and failed command event. See Application Performance Monitoring (APM) for additional information.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-monitoring-commandsubscriber.php
	 * @since mongodb >=1.3.0
	 */
	interface CommandSubscriber {

		/**
		 * Notification method for a failed command
		 * <p>If the subscriber has been registered with <code>MongoDB\Driver\Monitoring\addSubscriber()</code>, the driver will call this method when a command has failed.</p>
		 * @param \MongoDB\Driver\Monitoring\CommandFailedEvent $event <p>An event object encapsulating information about the failed command.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandsubscriber.commandfailed.php
		 * @see MongoDB\Driver\Monitoring\addSubscriber()
		 * @since mongodb >=1.3.0
		 */
		public function commandFailed(\MongoDB\Driver\Monitoring\CommandFailedEvent $event): void;

		/**
		 * Notification method for a started command
		 * <p>If the subscriber has been registered with <code>MongoDB\Driver\Monitoring\addSubscriber()</code>, the driver will call this method when a command has started.</p>
		 * @param \MongoDB\Driver\Monitoring\CommandStartedEvent $event <p>An event object encapsulating information about the started command.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandsubscriber.commandstarted.php
		 * @see MongoDB\Driver\Monitoring\addSubscriber()
		 * @since mongodb >=1.3.0
		 */
		public function commandStarted(\MongoDB\Driver\Monitoring\CommandStartedEvent $event): void;

		/**
		 * Notification method for a successful command
		 * <p>If the subscriber has been registered with <code>MongoDB\Driver\Monitoring\addSubscriber()</code>, the driver will call this method when a command has succeeded.</p>
		 * @param \MongoDB\Driver\Monitoring\CommandSucceededEvent $event <p>An event object encapsulating information about the successful command.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandsubscriber.commandsucceeded.php
		 * @see MongoDB\Driver\Monitoring\addSubscriber()
		 * @since mongodb >=1.3.0
		 */
		public function commandSucceeded(\MongoDB\Driver\Monitoring\CommandSucceededEvent $event): void;
	}

	/**
	 * <p>The <b>MongoDB\Driver\Monitoring\CommandSucceededEvent</b> class encapsulates information about a successful command.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-monitoring-commandsucceededevent.php
	 * @since mongodb >=1.3.0
	 */
	final class CommandSucceededEvent {

		/**
		 * Returns the command name
		 * <p>Returns the command name (e.g. <i>"find"</i>, <i>"aggregate"</i>).</p>
		 * @return string <p>Returns the command name.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandsucceededevent.getcommandname.php
		 * @since mongodb >=1.3.0
		 */
		final public function getCommandName(): string {}

		/**
		 * Returns the command's duration in microseconds
		 * <p>The command's duration is a calculated value that includes the time to send the message and receive the reply from the server.</p>
		 * @return int <p>Returns the command's duration in microseconds.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandsucceededevent.getdurationmicros.php
		 * @since mongodb >=1.3.0
		 */
		final public function getDurationMicros(): int {}

		/**
		 * Returns the command's operation ID
		 * <p>The operation ID is generated by the driver and may be used to link events together such as bulk write operations, which may have been split across several commands at the protocol level.</p><p><b>注意</b>:  Since multiple commands may share the same operation ID, it is not reliable to use this value to associate event objects with each other. The request ID returned by <code>MongoDB\Driver\Monitoring\CommandSucceededEvent::getRequestId()</code> should be used instead. </p>
		 * @return string <p>Returns the command's operation ID.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandsucceededevent.getoperationid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getOperationId(): string {}

		/**
		 * Returns the command reply document
		 * <p>The reply document will be converted from BSON to PHP using the default deserialization rules (e.g. BSON documents will be converted to stdClass).</p>
		 * @return object <p>Returns the command reply document as a <b>stdClass</b> object.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandsucceededevent.getreply.php
		 * @since mongodb >=1.3.0
		 */
		final public function getReply(): object {}

		/**
		 * Returns the command's request ID
		 * <p>The request ID is generated by the driver and may be used to associate this MongoDB\Driver\Monitoring\CommandSucceededEvent with a previous MongoDB\Driver\Monitoring\CommandStartedEvent.</p>
		 * @return string <p>Returns the command's request ID.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandsucceededevent.getrequestid.php
		 * @since mongodb >=1.3.0
		 */
		final public function getRequestId(): string {}

		/**
		 * Returns the Server on which the command was executed
		 * <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @return MongoDB\Driver\Server <p>Returns the MongoDB\Driver\Server on which the command was executed.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-monitoring-commandsucceededevent.getserver.php
		 * @since mongodb >=1.3.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}
	}

	/**
	 * <p>Base interface for event subscribers. This is used for type-hinting <code>MongoDB\Driver\Monitoring\addSubscriber()</code> and <code>MongoDB\Driver\Monitoring\removeSubscriber()</code> and should not be implemented directly.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-monitoring-subscriber.php
	 * @since mongodb >=1.3.0
	 */
	interface Subscriber {
	}

}

namespace MongoDB\Driver {

	/**
	 * <p>The <b>MongoDB\Driver\Query</b> class is a value object that represents a database query.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-query.php
	 * @since mongodb >=1.0.0
	 */
	final class Query {

		/**
		 * Create a new Query
		 * <p>Constructs a new MongoDB\Driver\Query, which is an immutable value object that represents a database query. The query may then be executed with <code>MongoDB\Driver\Manager::executeQuery()</code>.</p>
		 * @param array|object $filter
		 * @param array $queryOptions <p></p> <b>queryOptions</b>   Option Type Description     allowPartialResults <code>boolean</code>  <p>For queries against a sharded collection, returns partial results from the mongos if some shards are unavailable instead of throwing an error.</p> <p>Falls back to the deprecated <i>"partial"</i> option if not specified.</p>    awaitData <code>boolean</code>  Use in conjunction with the <i>"tailable"</i> option to block a getMore operation on the cursor temporarily if at the end of data rather than returning no data. After a timeout period, the query returns as normal.    batchSize <code>integer</code>  <p>The number of documents to return in the first batch. Defaults to 101. A batch size of 0 means that the cursor will be established, but no documents will be returned in the first batch.</p> <p>In versions of MongoDB before 3.2, where queries use the legacy wire protocol OP_QUERY, a batch size of 1 will close the cursor irrespective of the number of matched documents.</p>    collation <code>array|object</code>  <p>» Collation は、文字列比較の際の言語固有のルールを指定するものです。たとえば、大文字小文字やアクセント記号の扱いを指定できます。 collation を指定するときには <i>"locale"</i> フィールドが必須となります。それ以外の collation フィールドはすべて任意指定です。 各フィールドについての説明は » Collation のドキュメント を参照ください。</p> <p>collation が未指定で collection のデフォルトの collation が設定されている場合は、コレクションが持っている collation を用いて操作を実行します。 コレクションや操作にも collation が指定されていない場合は、MongoDB は単純にバイナリ比較を行います。 これは、今までのバージョンでの文字列比較と同じ方法です。</p> <p>このオプションは MongoDB 3.4 以降で使用可能です。それより前のバージョンのサーバー上で指定すると、実行時に例外が発生します。</p>    comment <code>string</code>  <p>A comment to attach to the query to help interpret and trace query profile data.</p> <p>Falls back to the deprecated <i>"$comment"</i> modifier if not specified.</p>    exhaust <code>boolean</code>  <p>Stream the data down full blast in multiple "more" packages, on the assumption that the client will fully read all data queried. Faster when you are pulling a lot of data and know you want to pull it all down. Note: the client is not allowed to not read all the data unless it closes the connection.</p> <p>This option is not supported by the find command in MongoDB 3.2+ and will force the driver to use the legacy wire protocol version (i.e. OP_QUERY).</p>    explain <code>boolean</code>  <p>If <b><code>TRUE</code></b>, the returned MongoDB\Driver\Cursor will contain a single document that describes the process and indexes used to return the query.</p> <p>Falls back to the deprecated <i>"$explain"</i> modifier if not specified.</p> <p>This option is not supported by the find command in MongoDB 3.2+ and will only be respected when using the legacy wire protocol version (i.e. OP_QUERY). The » explain command should be used on MongoDB 3.0+.</p>    hint string|array|object  <p>Index specification. Specify either the index name as a string or the index key pattern. If specified, then the query system will only consider plans using the hinted index.</p> <p>Falls back to the deprecated <i>"hint"</i> option if not specified.</p>    limit <code>integer</code>  <p>The maximum number of documents to return. If unspecified, then defaults to no limit. A limit of 0 is equivalent to setting no limit.</p> <p>A negative limit is will be interpreted as a positive limit with the <i>"singleBatch"</i> option set to <b><code>TRUE</code></b>. This behavior is supported for backwards compatibility, but should be considered deprecated.</p>    max <code>array|object</code>  <p>The <i>exclusive</i> upper bound for a specific index.</p> <p>Falls back to the deprecated <i>"$max"</i> modifier if not specified.</p>    maxAwaitTimeMS <code>integer</code>  <p>Positive integer denoting the time limit in milliseconds for the server to block a getMore operation if no data is available. This option should only be used in conjunction with the <i>"tailable"</i> and <i>"awaitData"</i> options.</p>    maxScan <code>integer</code>   <b>警告</b> <p>This option is deprecated and should not be used.</p>  <p>Positive integer denoting the maximum number of documents or index keys to scan when executing the query.</p> <p>Falls back to the deprecated <i>"$maxScan"</i> modifier if not specified.</p>    maxTimeMS <code>integer</code>  <p>The cumulative time limit in milliseconds for processing operations on the cursor. MongoDB aborts the operation at the earliest following interrupt point.</p> <p>Falls back to the deprecated <i>"$maxTimeMS"</i> modifier if not specified.</p>    min <code>array|object</code>  <p>The <i>inclusive</i> lower bound for a specific index.</p> <p>Falls back to the deprecated <i>"$min"</i> modifier if not specified.</p>    modifiers <code>array</code>  » Meta operators modifying the output or behavior of a query. Use of these operators is deprecated in favor of named options.    noCursorTimeout <code>boolean</code>  Prevents the server from timing out idle cursors after an inactivity period (10 minutes).    oplogReplay <code>boolean</code>  <p>Internal use for replica sets. To use oplogReplay, you must include the following condition in the filter:</p> <p></p>   <pre>[ 'ts' =&gt; [ '$gte' =&gt; &lt;timestamp&gt; ] ]</pre>      projection <code>array|object</code>  <p>The » projection specification to determine which fields to include in the returned documents.</p> <p>If you are using the ODM functionality to deserialise documents as their original PHP class, make sure that you include the __pclass field in the projection. This is required for the deserialization to work and without it, the driver will return (by default) a <b>stdClass</b> object instead.</p>    readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation. By default, the read concern from the MongoDB Connection URI will be used.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    returnKey <code>boolean</code>  <p>If <b><code>TRUE</code></b>, returns only the index keys in the resulting documents. Default value is <b><code>FALSE</code></b>. If <b><code>TRUE</code></b> and the find command does not use an index, the returned documents will be empty.</p> <p>Falls back to the deprecated <i>"$returnKey"</i> modifier if not specified.</p>    showRecordId <code>boolean</code>  <p>Determines whether to return the record identifier for each document. If <b><code>TRUE</code></b>, adds a top-level <i>"$recordId"</i> field to the returned documents.</p> <p>Falls back to the deprecated <i>"$showDiskLoc"</i> modifier if not specified.</p>    singleBatch <code>boolean</code>  Determines whether to close the cursor after the first batch. Defaults to <b><code>FALSE</code></b>.    skip <code>integer</code> Number of documents to skip. Defaults to 0.   slaveOk <code>boolean</code> Allow query of replica set secondaries   snapshot <code>boolean</code>   <b>警告</b> <p>This option is deprecated and should not be used.</p>  <p>Prevents the cursor from returning a document more than once because of an intervening write operation.</p> <p>Falls back to the deprecated <i>"$snapshot"</i> modifier if not specified.</p>    sort <code>array|object</code>  <p>The sort specification for the ordering of the results.</p> <p>Falls back to the deprecated <i>"$orderby"</i> modifier if not specified.</p>    tailable <code>boolean</code> Returns a tailable cursor for a capped collection.
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-driver-query.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct($filter, array $queryOptions = NULL) {}
	}

	/**
	 * <p><b>MongoDB\Driver\ReadConcern</b> controls the level of isolation for read operations for replica sets and replica set shards. This option requires MongoDB 3.2 or later.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-readconcern.php
	 * @since mongodb >=1.1.0
	 */
	final class ReadConcern implements \MongoDB\BSON\Serializable {

		/**
		 * @var string <p>Default for reads against secondaries when <i>afterClusterTime</i>and <i>level</i> are unspecified.</p> <p>The query returns the instance's most recent data. Provides no guarantee that the data has been written to a majority of the replica set members (i.e. may be rolled back).</p> <p>For unsharded collections (including collections in a standalone deployment or a replica set deployment), <i>"local"</i> and <i>"available"</i> read concerns behave identically.</p> <p>For a sharded cluster, <i>"available"</i> read concern provides greater tolerance for partitions since it does not wait to ensure consistency guarantees. However, a query with <i>"available"</i> read concern may return orphan documents if the shard is undergoing chunk migrations since the <i>"available"</i> read concern, unlike <i>"local"</i> read concern, does not contact the shard's primary nor the config servers for updated metadata.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-readconcern.php
		 */
		const AVAILABLE = "available";

		/**
		 * @var string <p>The query returns data that reflects all successful writes issued with a write concern of <i>"majority"</i> <i>and</i> acknowledged prior to the start of the read operation. For replica sets that run with <i>writeConcernMajorityJournalDefault</i> set to <b><code>TRUE</code></b>, linearizable read concern returns data that will never be rolled back.</p> <p>With <i>writeConcernMajorityJournalDefault</i> set to <b><code>FALSE</code></b>, MongoDB will not wait for <i>w: "majority"</i> writes to be durable before acknowledging the writes. As such, <i>"majority"</i> write operations could possibly roll back in the event of a loss of a replica set member.</p> <p>You can specify linearizable read concern for read operations on the primary only.</p> <p>Linearizable read concern guarantees only apply if read operations specify a query filter that uniquely identifies a single document.</p>  <b>ヒント</b> <p>Always use <i>maxTimeMS</i> with linearizable read concern in case a majority of data bearing members are unavailable. <i>maxTimeMS</i> ensures that the operation does not block indefinitely and instead ensures that the operation returns an error if the read concern cannot be fulfilled.</p>  <p>Linearizable read concern requires MongoDB 3.4.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-readconcern.php
		 */
		const LINEARIZABLE = "linearizable";

		/**
		 * @var string <p>Default for reads against primary if <i>level</i> is unspecified and for reads against secondaries if <i>level</i> is unspecified but <i>afterClusterTime</i> is specified.</p> <p>The query returns the instance's most recent data. Provides no guarantee that the data has been written to a majority of the replica set members (i.e. may be rolled back).</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-readconcern.php
		 */
		const LOCAL = "local";

		/**
		 * @var string <p>The query returns the instance's most recent data acknowledged as having been written to a majority of members in the replica set.</p> <p>To use read concern level of <i>"majority"</i>, replica sets must use WiredTiger storage engine and election protocol version 1.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-readconcern.php
		 */
		const MAJORITY = "majority";

		/**
		 * Create a new ReadConcern
		 * <p>Constructs a new MongoDB\Driver\ReadConcern, which is an immutable value object.</p>
		 * @param string $level <p>The » read concern level. You may use, but are not limited to, one of the class constants.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-driver-readconcern.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct(string $level = NULL) {}

		/**
		 * Returns an object for BSON serialization
		 * @return object <p>Returns an object for serializing the ReadConcern as BSON.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-readconcern.bsonserialize.php
		 * @since mongodb >=1.2.0
		 */
		final public function bsonSerialize(): object {}

		/**
		 * Returns the ReadConcern's "level" option
		 * @return string|null <p>Returns the ReadConcern's "level" option.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-readconcern.getlevel.php
		 * @since mongodb >=1.0.0
		 */
		final public function getLevel() {}

		/**
		 * Checks if this is the default read concern
		 * <p>Returns whether this is the default read concern (i.e. no options are specified). This method is primarily intended to be used in conjunction with <code>MongoDB\Driver\Manager::getReadConcern()</code> to determine whether the Manager has been constructed without any read concern options.</p><p>The driver will not include a default read concern in its read operations (e.g. <code>MongoDB\Driver\Manager::executeQuery()</code>) in order order to allow the server to apply its own default. Libraries that access the Manager's read concern to include it in their own read commands should use this method to ensure that default read concerns are left unset.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this is the default read concern and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-readconcern.isdefault.php
		 * @since mongodb >=1.3.0
		 */
		final public function isDefault(): bool {}
	}

	/**
	 * @link https://php.net/manual/ja/class.mongodb-driver-readpreference.php
	 * @since mongodb >=1.0.0
	 */
	final class ReadPreference implements \MongoDB\BSON\Serializable {

		/**
		 * @var integer <p>All operations read from the current replica set primary. This is the default read preference for MongoDB.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-readpreference.php
		 */
		const RP_PRIMARY = 1;

		/**
		 * @var integer <p>In most situations, operations read from the primary but if it is unavailable, operations read from secondary members.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-readpreference.php
		 */
		const RP_PRIMARY_PREFERRED = 5;

		/**
		 * @var integer <p>All operations read from the secondary members of the replica set.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-readpreference.php
		 */
		const RP_SECONDARY = 2;

		/**
		 * @var integer <p>In most situations, operations read from secondary members but if no secondary members are available, operations read from the primary.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-readpreference.php
		 */
		const RP_SECONDARY_PREFERRED = 6;

		/**
		 * @var integer <p>Operations read from member of the replica set with the least network latency, irrespective of the member's type.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-readpreference.php
		 */
		const RP_NEAREST = 10;

		/**
		 * @var integer <p>The default value for the <i>"maxStalenessSeconds"</i> option is to specify no limit on maximum staleness, which means that the driver will not consider a secondary's lag when choosing where to direct a read operation.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-readpreference.php
		 */
		const NO_MAX_STALENESS = -1;

		/**
		 * @var integer <p>The minimum value for the <i>"maxStalenessSeconds"</i> option is 90 seconds. The driver estimates secondaries' staleness by periodically checking the latest write date of each replica set member. Since these checks are infrequent, the staleness estimate is coarse. Thus, the driver cannot enforce a max staleness value of less than 90 seconds.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-readpreference.php
		 */
		const SMALLEST_MAX_STALENESS_SECONDS = 90;

		/**
		 * Create a new ReadPreference
		 * <p>Constructs a new MongoDB\Driver\ReadPreference, which is an immutable value object.</p>
		 * @param string|int $mode <p></p> <b>Read preference mode</b>   Value Description      <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY</code></b> or <i>"primary"</i>   <p>All operations read from the current replica set primary. This is the default read preference for MongoDB.</p>     <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY_PREFERRED</code></b> or <i>"primaryPreferred"</i>   <p>In most situations, operations read from the primary but if it is unavailable, operations read from secondary members.</p>     <b><code>MongoDB\Driver\ReadPreference::RP_SECONDARY</code></b> or <i>"secondary"</i>   <p>All operations read from the secondary members of the replica set.</p>     <b><code>MongoDB\Driver\ReadPreference::RP_SECONDARY_PREFERRED</code></b> or <i>"secondaryPreferred"</i>   <p>In most situations, operations read from secondary members but if no secondary members are available, operations read from the primary.</p>     <b><code>MongoDB\Driver\ReadPreference::RP_NEAREST</code></b> or <i>"nearest"</i>   <p>Operations read from member of the replica set with the least network latency, irrespective of the member's type.</p>
		 * @param array $tagSets <p>Tag sets allow you to target read operations to specific members of a replica set. This parameter should be an array of associative arrays, each of which contain zero or more key/value pairs. When selecting a server for a read operation, the driver attempt to select a node having all tags in a set (i.e. the associative array of key/value pairs). If selection fails, the driver will attempt subsequent sets. An empty tag set (<i>array()</i>) will match any node and may be used as a fallback.</p> <p>Tags are not compatible with the <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY</code></b> mode and, in general, only apply when selecting a secondary member of a set for a read operation. However, the <b><code>MongoDB\Driver\ReadPreference::RP_NEAREST</code></b> mode, when combined with a tag set, selects the matching member with the lowest network latency. This member may be a primary or secondary.</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     maxStalenessSeconds <code>integer</code>  <p>Specifies a maximum replication lag, or "staleness", for reads from secondaries. When a secondary's estimated staleness exceeds this value, the driver stops using it for read operations.</p> <p>If specified, the max staleness must be a signed 32-bit integer greater than or equal to <b><code>MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS</code></b>.</p> <p>Defaults to <b><code>MongoDB\Driver\ReadPreference::NO_MAX_STALENESS</code></b>, which means that the driver will not consider a secondary's lag when choosing where to direct a read operation.</p> <p>This option is not compatible with the <b><code>MongoDB\Driver\ReadPreference::RP_PRIMARY</code></b> mode. Specifying a max staleness also requires all MongoDB instances in the deployment to be using MongoDB 3.4+. An exception will be thrown at execution time if any MongoDB instances in the deployment are of an older server version.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-driver-readpreference.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct($mode, array $tagSets = NULL, array $options = array()) {}

		/**
		 * Returns an object for BSON serialization
		 * @return object <p>Returns an object for serializing the ReadPreference as BSON.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-readpreference.bsonserialize.php
		 * @since mongodb >=1.2.0
		 */
		final public function bsonSerialize(): object {}

		/**
		 * Returns the ReadPreference's "maxStalenessSeconds" option
		 * @return int <p>Returns the ReadPreference's "maxStalenessSeconds" option. If no max staleness has been specified, <b><code>MongoDB\Driver\ReadPreference::NO_MAX_STALENESS</code></b> will be returned.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-readpreference.getmaxstalenessseconds.php
		 * @since mongodb >=1.2.0
		 */
		final public function getMaxStalenessSeconds(): int {}

		/**
		 * Returns the ReadPreference's "mode" option
		 * @return int <p>Returns the ReadPreference's "mode" option.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-readpreference.getmode.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMode(): int {}

		/**
		 * Returns the ReadPreference's "tagSets" option
		 * @return array <p>Returns the ReadPreference's "tagSets" option.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-readpreference.gettagsets.php
		 * @since mongodb >=1.0.0
		 */
		final public function getTagSets(): array {}
	}

	/**
	 * @link https://php.net/manual/ja/class.mongodb-driver-server.php
	 * @since mongodb >=1.0.0
	 */
	final class Server {

		/**
		 * @var integer <p>Unknown server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-server.php
		 */
		const TYPE_UNKNOWN = 0;

		/**
		 * @var integer <p>Standalone server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-server.php
		 */
		const TYPE_STANDALONE = 1;

		/**
		 * @var integer <p>Mongos server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-server.php
		 */
		const TYPE_MONGOS = 2;

		/**
		 * @var integer <p>Replica set possible primary server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p> <p>A server may be identified as a possible primary if it has not yet been checked but another memory of the replica set thinks it is the primary.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-server.php
		 */
		const TYPE_POSSIBLE_PRIMARY = 3;

		/**
		 * @var integer <p>Replica set primary server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-server.php
		 */
		const TYPE_RS_PRIMARY = 4;

		/**
		 * @var integer <p>Replica set secondary server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-server.php
		 */
		const TYPE_RS_SECONDARY = 5;

		/**
		 * @var integer <p>Replica set arbiter server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-server.php
		 */
		const TYPE_RS_ARBITER = 6;

		/**
		 * @var integer <p>Replica set other server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p> <p>Such servers may be hidden, starting up, or recovering. They cannot be queried, but their hosts lists are useful for discovering the current replica set configuration.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-server.php
		 */
		const TYPE_RS_OTHER = 7;

		/**
		 * @var integer <p>Replica set ghost server type, returned by <code>MongoDB\Driver\Server::getType()</code>.</p> <p>Servers may be identified as such in at least three situations: briefly during server startup; in an uninitialized replica set; or when the server is shunned (i.e. removed from the replica set config). They cannot be queried, nor can their host list be used to discover the current replica set configuration; however, the client may monitor this server in hope that it transitions to a more useful state.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-server.php
		 */
		const TYPE_RS_GHOST = 8;

		/**
		 * Create a new Server (not used)
		 * <p>MongoDB\Driver\Server objects are created internally by MongoDB\Driver\Manager when a database connection is established and may be returned by <code>MongoDB\Driver\Manager::getServers()</code> and <code>MongoDB\Driver\Manager::selectServer()</code>.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-driver-server.construct.php
		 * @see MongoDB\Driver\Manager::getServers(), MongoDB\Driver\Manager::selectServer()
		 * @since mongodb >=1.0.0
		 */
		final private function __construct() {}

		/**
		 * Execute one or more write operations on this server
		 * <p>Executes one or more write operations on this server.</p><p>A MongoDB\Driver\BulkWrite can be constructed with one or more write operations of varying types (e.g. updates, deletes, and inserts). The driver will attempt to send operations of the same type to the server in as few requests as possible to optimize round trips.</p>
		 * @param string $namespace <p>完全修飾形式の名前空間 (<i>"databaseName.collectionName"</i>)。</p>
		 * @param \MongoDB\Driver\BulkWrite $bulk <p>実行する書き込み。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>
		 * @return MongoDB\Driver\WriteResult <p>成功した場合に MongoDB\Driver\WriteResult を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.executebulkwrite.php
		 * @see MongoDB\Driver\Manager::executeBulkWrite()
		 * @since mongodb >=1.0.0
		 */
		final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulk, array $options = array()): \MongoDB\Driver\WriteResult {}

		/**
		 * Execute a database command on this server
		 * <p>Executes the command on this server.</p><p>This method applies no special logic to the command. Although this method accepts <i>"readConcern"</i> and <i>"writeConcern"</i> options, which will be incorporated into the command document, those options will not default to corresponding values from the MongoDB Connection URI nor will the MongoDB server version be taken into account. Users are therefore encouraged to use specific read and/or write command methods if possible.</p><p><b>注意</b>:  The <i>"readPreference"</i> option does not control the server to which the driver issues the operation; it will always be executed on this server object. Instead, it may be used when issuing the operation to a secondary (from a replica set connection, not standalone) or mongos node to ensure that the driver sets the wire protocol accordingly or adds the read preference to the operation, respectively. </p>
		 * @param string $db <p>コマンドを実行するデータベースの名前。</p>
		 * @param \MongoDB\Driver\Command $command <p>実行するコマンド。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>      <b>警告</b> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.executecommand.php
		 * @see MongoDB\Driver\Server::executeReadCommand(), MongoDB\Driver\Server::executeReadWriteCommand(), MongoDB\Driver\Server::executeWriteCommand(), MongoDB\Driver\Manager::executeCommand()
		 * @since mongodb >=1.0.0
		 */
		final public function executeCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database query on this server
		 * <p>Executes the query on this server.</p><p><b>注意</b>:  The <i>"readPreference"</i> option does not control the server to which the driver issues the operation; it will always be executed on this server object. Instead, it may be used when issuing the operation to a secondary (from a replica set connection, not standalone) or mongos node to ensure that the driver sets the wire protocol accordingly or adds the read preference to the operation, respectively. </p>
		 * @param string $namespace <p>完全修飾形式の名前空間 (<i>"databaseName.collectionName"</i>)。</p>
		 * @param \MongoDB\Driver\Query $query <p>実行するクエリ。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.executequery.php
		 * @see MongoDB\Driver\Manager::executeQuery()
		 * @since mongodb >=1.0.0
		 */
		final public function executeQuery(string $namespace, \MongoDB\Driver\Query $query, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads on this server
		 * <p>Executes the command on this server.</p><p>This method will apply logic that is specific to commands that read (e.g. » count) and take the MongoDB server version into account. The <i>"readConcern"</i> option will default to the corresponding value from the MongoDB Connection URI.</p><p><b>注意</b>:  The <i>"readPreference"</i> option does not control the server to which the driver issues the operation; it will always be executed on this server object. Instead, it may be used when issuing the operation to a secondary (from a replica set connection, not standalone) or mongos node to ensure that the driver sets the wire protocol accordingly or adds the read preference to the operation, respectively. </p>
		 * @param string $db <p>コマンドを実行するデータベースの名前。</p>
		 * @param \MongoDB\Driver\Command $command <p>実行するコマンド。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>      <b>警告</b> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.executereadcommand.php
		 * @see MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeReadWriteCommand(), MongoDB\Driver\Server::executeWriteCommand(), MongoDB\Driver\Manager::executeReadCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that reads and writes on this server
		 * <p>Executes the command on this server.</p><p>This method will apply logic that is specific to commands that read and write (e.g. » findAndModify) and take the MongoDB server version into account. The <i>"readConcern"</i> and <i>"writeConcern"</i> options will default to the corresponding values from the MongoDB Connection URI.</p>
		 * @param string $db <p>コマンドを実行するデータベースの名前。</p>
		 * @param \MongoDB\Driver\Command $command <p>実行するコマンド。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>      <b>警告</b> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.executereadwritecommand.php
		 * @see MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeReadCommand(), MongoDB\Driver\Server::executeWriteCommand(), MongoDB\Driver\Manager::executeReadWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeReadWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Execute a database command that writes on this server
		 * <p>Executes the command on this server.</p><p>This method will apply logic that is specific to commands that write (e.g. » drop) and take the MongoDB server version into account. The <i>"writeConcern"</i> option will default to the corresponding value from the MongoDB Connection URI.</p><p><b>注意</b>:  This method is not intended to be used to execute » insert, » update, or » delete commands. Users are encouraged to use <code>MongoDB\Driver\Server::executeBulkWrite()</code> for those commands. </p>
		 * @param string $db <p>コマンドを実行するデータベースの名前。</p>
		 * @param \MongoDB\Driver\Command $command <p>実行するコマンド。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>      <b>警告</b> <p>If you are using a <i>"session"</i> which has a transaction in progress, you cannot specify a <i>"readConcern"</i> or <i>"writeConcern"</i> option. This will result in an MongoDB\Driver\Exception\InvalidArgumentException being thrown. Instead, you should set these two options when you create the transaction with <code>MongoDB\Driver\Session::startTransaction()</code>.</p>
		 * @return MongoDB\Driver\Cursor <p>成功した場合に MongoDB\Driver\Cursor を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.executewritecommand.php
		 * @see MongoDB\Driver\Server::executeCommand(), MongoDB\Driver\Server::executeReadCommand(), MongoDB\Driver\Server::executeReadWriteCommand(), MongoDB\Driver\Manager::executeWriteCommand()
		 * @since mongodb >=1.4.0
		 */
		final public function executeWriteCommand(string $db, \MongoDB\Driver\Command $command, array $options = array()): \MongoDB\Driver\Cursor {}

		/**
		 * Returns the hostname of this server
		 * <p>Returns the hostname of this server.</p>
		 * @return string <p>Returns the hostname of this server.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.gethost.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getHost(): string {}

		/**
		 * Returns an array of information about this server
		 * <p>Returns an array of information about this server.</p>
		 * @return array <p>Returns an array of information about this server.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.getinfo.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInfo(): array {}

		/**
		 * Returns the latency of this server
		 * <p>Returns the latency of this server (i.e. the client's measured » round trip time of an <i>ismaster</i> command).</p>
		 * @return string <p>Returns the latency of this server.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.getlatency.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getLatency(): string {}

		/**
		 * Returns the port on which this server is listening
		 * <p>Returns the port on which this server is listening.</p>
		 * @return int <p>Returns the port on which this server is listening.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.getport.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getPort(): int {}

		/**
		 * Returns an array of tags describing this server in a replica set
		 * <p>Returns an <code>array</code> of » tags used to describe this server in a replica set. The array will contain zero or more <code>string</code> key and value pairs.</p>
		 * @return array <p>Returns an <code>array</code> of tags used to describe this server in a replica set.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.gettags.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getTags(): array {}

		/**
		 * Returns an integer denoting the type of this server
		 * <p>Returns an <code>integer</code> denoting the type of this server. The value will correlate with a MongoDB\Driver\Server constant.</p>
		 * @return int <p>Returns an <code>integer</code> denoting the type of this server.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.gettype.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function getType(): int {}

		/**
		 * Checks if this server is an arbiter member of a replica set
		 * <p>Returns whether this server is an » arbiter member of a replica set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this server is an arbiter member of a replica set, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.isarbiter.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isArbiter(): bool {}

		/**
		 * Checks if this server is a hidden member of a replica set
		 * <p>Returns whether this server is a » hidden member of a replica set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this server is a hidden member of a replica set, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.ishidden.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isHidden(): bool {}

		/**
		 * Checks if this server is a passive member of a replica set
		 * <p>Returns whether this server is a » passive member of a replica set (i.e. its priority is <i>0</i>).</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this server is a passive member of a replica set, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.ispassive.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isPassive(): bool {}

		/**
		 * Checks if this server is a primary member of a replica set
		 * <p>Returns whether this server is a » primary member of a replica set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this server is a primary member of a replica set, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.isprimary.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isPrimary(): bool {}

		/**
		 * Checks if this server is a secondary member of a replica set
		 * <p>Returns whether this server is a » secondary member of a replica set.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this server is a secondary member of a replica set, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-server.issecondary.php
		 * @see MongoDB\Driver\Server::getInfo()
		 * @since mongodb >=1.0.0
		 */
		final public function isSecondary(): bool {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\Session</b> class represents a client session and is returned by <code>MongoDB\Driver\Manager::startSession()</code>. Commands, queries, and write operations may then be associated the session.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-session.php
	 * @since mongodb >=1.4.0
	 */
	final class Session {

		/**
		 * Create a new Session (not used)
		 * <p>MongoDB\Driver\Session objects are returned by <code>MongoDB\Driver\Manager::startSession()</code> and cannot be constructed directly.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-driver-session.construct.php
		 * @see MongoDB\Driver\Manager::startSession()
		 * @since mongodb >=1.4.0
		 */
		final private function __construct() {}

		/**
		 * Aborts a transaction
		 * <p>Terminates the multi-document transaction and rolls back any data changes made by the operations within the transaction. That is, the transaction ends without saving any of the changes made by the operations in the transaction.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-session.aborttransaction.php
		 * @since mongodb >=1.5.0
		 */
		final public function abortTransaction(): void {}

		/**
		 * Advances the cluster time for this session
		 * <p>Advances the cluster time for this session. If the cluster time is less than or equal to the session's current cluster time, this function is a no-op.</p><p>By using this method in conjunction with <code>MongoDB\Driver\Session::advanceOperationTime()</code> to copy the cluster and operation times from another session, you can ensure that operations in this session are causally consistent with the last operation in the other session.</p>
		 * @param array|object $clusterTime <p>The cluster time is a document containing a logical timestamp and server signature. Typically, this value will be obtained by calling <code>MongoDB\Driver\Session::getClusterTime()</code> on another session object.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-session.advanceclustertime.php
		 * @since mongodb >=1.4.0
		 */
		final public function advanceClusterTime($clusterTime): void {}

		/**
		 * Advances the operation time for this session
		 * <p>Advances the operation time for this session. If the operation time is less than or equal to the session's current operation time, this function is a no-op.</p><p>By using this method in conjunction with <code>MongoDB\Driver\Session::advanceClusterTime()</code> to copy the operation and cluster times from another session, you can ensure that operations in this session are causally consistent with the last operation in the other session.</p>
		 * @param \MongoDB\BSON\TimestampInterface $operationTime <p>The operation time is a logical timestamp. Typically, this value will be obtained by calling <code>MongoDB\Driver\Session::getOperationTime()</code> on another session object.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-session.advanceoperationtime.php
		 * @since mongodb >=1.4.0
		 */
		final public function advanceOperationTime(\MongoDB\BSON\TimestampInterface $operationTime): void {}

		/**
		 * Commits a transaction
		 * <p>Saves the changes made by the operations in the multi-document transaction and ends the transaction. Until the commit, none of the data changes made from within the transaction are visible outside the transaction.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-session.committransaction.php
		 * @since mongodb >=1.5.0
		 */
		final public function commitTransaction(): void {}

		/**
		 * Terminates a session
		 * <p>This method closes an existing session. If a transaction was associated with this session, the transaction will be aborted. After calling this method, applications should not invoke other methods on the session.</p><p><b>注意</b>:  Sessions are also closed during garbage collection. It should not be necessary to call this method under normal circumstances. </p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-session.endsession.php
		 * @since mongodb >=1.5.0
		 */
		final public function endSession(): void {}

		/**
		 * Returns the cluster time for this session
		 * <p>Returns the cluster time for this session. If the session has not been used for any operation and <code>MongoDB\Driver\Session::advanceClusterTime()</code> has not been called, the cluster time will be <b><code>NULL</code></b>.</p>
		 * @return object|null <p>Returns the cluster time for this session, or <b><code>NULL</code></b> if the session has no cluster time.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-session.getclustertime.php
		 * @since mongodb >=1.4.0
		 */
		final public function getClusterTime() {}

		/**
		 * Returns the logical session ID for this session
		 * <p>Returns the logical session ID for this session, which may be used to identify this session's operations on the server.</p>
		 * @return object <p>Returns the logical session ID for this session.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-session.getlogicalsessionid.php
		 * @since mongodb >=1.4.0
		 */
		final public function getLogicalSessionId(): object {}

		/**
		 * Returns the operation time for this session
		 * <p>Returns the operation time for this session. If the session has not been used for any operation and <code>MongoDB\Driver\Session::advanceOperationTime()</code> has not been called, the operation time will be <b><code>NULL</code></b></p>
		 * @return MongoDB\BSON\Timestamp|null <p>Returns the operation time for this session, or <b><code>NULL</code></b> if the session has no operation time.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-session.getoperationtime.php
		 * @since mongodb >=1.4.0
		 */
		final public function getOperationTime() {}

		/**
		 * Returns the server to which this session is pinned
		 * <p>Returns the MongoDB\Driver\Server to which this session is pinned. If the session is not pinned to a server, <b><code>NULL</code></b> will be returned.</p><p>Session pinning is primarily used for sharded transactions, as all commands within a sharded transaction must be sent to the same mongos instance. This method is intended to be used by libraries built atop the extension to allow use of a pinned server instead of invoking server selection.</p>
		 * @return MongoDB\Driver\Server|null <p>Returns the MongoDB\Driver\Server to which this session is pinned, or <b><code>NULL</code></b> if the session is not pinned to any server.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-session.getserver.php
		 * @since mongodb >=1.6.0
		 */
		final public function getServer() {}

		/**
		 * Returns whether a multi-document transaction is in progress
		 * <p>Returns whether a multi-document transaction is currently in progress for this session. A transaction is considered "in progress" if it has been started but has not been committed or aborted.</p>
		 * @return boolean <p>Returns <b><code>TRUE</code></b> if a transaction is currently in progress for this session, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-session.isintransaction.php
		 * @since mongodb >=1.6.0
		 */
		final public function isInTransaction(): bool {}

		/**
		 * Start a new client session for use with this client
		 * <p>Creates a MongoDB\Driver\Session for the given options. The session may then be specified when executing commands, queries, and write operations.</p><p><b>注意</b>:  A MongoDB\Driver\Session can only be used with the MongoDB\Driver\Manager from which it was created. </p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description Default     causalConsistency <code>boolean</code>  <p>Configure causal consistency in a session. If <b><code>TRUE</code></b>, each operation in the session will be causally ordered after the previous read or write operation. Set to <b><code>FALSE</code></b> to disable causal consistency.</p> <p>See » Casual Consistency in the MongoDB manual for more information.</p>  <b><code>TRUE</code></b>   defaultTransactionOptions <code>array</code>  <p>Default options to apply to newly created transactions. These options are used unless they are overridden when a transaction is started with different value for each option.</p> <p></p>  <b>options</b>   Option Type Description     maxCommitTimeMS integer  <p>The maximum amount of time in milliseconds to allow a single <i>commitTransaction</i> command to run.</p> <p>If specified, <i>maxCommitTimeMS</i> must be a signed 32-bit integer greater than or equal to zero.</p>    readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>     <p>This option is available in MongoDB 4.0+.</p>  <i>[]</i>
		 * @return MongoDB\Driver\Session <p>Returns a MongoDB\Driver\Session.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.startsession.php
		 * @since mongodb >=1.4.0
		 */
		final public function startSession(array $options = NULL): \MongoDB\Driver\Session {}

		/**
		 * Starts a transaction
		 * <p>Starts a multi-document transaction associated with the session. At any given time, you can have at most one open transaction for a session. After starting a transaction, the session object must be passed to each operation via the <i>"session"</i> option (e.g. <code>MongoDB\Driver\Manager::executeBulkWrite()</code>) in order to associate that operation with the transaction.</p><p>Transactions can be committed through <code>MongoDB\Driver\Session::commitTransaction()</code>, and aborted with <code>MongoDB\Driver\Session::abortTransaction()</code>. Transactions are also automatically aborted when the session is closed from garbage collection or by explicitly calling <code>MongoDB\Driver\Session::endSession()</code>.</p>
		 * @param array $options <p>Options can be passed as argument to this method. Each element in this options array overrides the corresponding option from the <i>"defaultTransactionOptions"</i> option, if set when starting the session with <code>MongoDB\Driver\Manager::startSession()</code>.</p> <p></p> <b>options</b>   Option Type Description     maxCommitTimeMS integer  <p>The maximum amount of time in milliseconds to allow a single <i>commitTransaction</i> command to run.</p> <p>If specified, <i>maxCommitTimeMS</i> must be a signed 32-bit integer greater than or equal to zero.</p>    readConcern MongoDB\Driver\ReadConcern  <p>A read concern to apply to the operation.</p> <p>This option is available in MongoDB 3.2+ and will result in an exception at execution time if specified for an older server version.</p>    readPreference MongoDB\Driver\ReadPreference  <p>A read preference to use for selecting a server for the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-session.starttransaction.php
		 * @since mongodb >=1.5.0
		 */
		final public function startTransaction(array $options = NULL): void {}
	}

	/**
	 * <p><b>MongoDB\Driver\WriteConcern</b> describes the level of acknowledgement requested from MongoDB for write operations to a standalone <i>mongod</i> or to replica sets or to sharded clusters. In sharded clusters, <i>mongos</i> instances will pass the write concern on to the shards.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-writeconcern.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteConcern implements \MongoDB\BSON\Serializable {

		/**
		 * @var string <p>Majority of all the members in the set; arbiters, non-voting members, passive members, hidden members and delayed members are all included in the definition of majority write concern.</p>
		 * @link https://php.net/manual/ja/class.mongodb-driver-writeconcern.php
		 */
		const MAJORITY = "majority";

		/**
		 * Create a new WriteConcern
		 * <p>Constructs a new MongoDB\Driver\WriteConcern, which is an immutable value object.</p>
		 * @param string|int $w <p></p> <b>Write concern</b>   Value Description     1  Requests acknowledgement that the write operation has propagated to the standalone <i>mongod</i> or the primary in a replica set. This is the default write concern for MongoDB.    0  Requests no acknowledgment of the write operation. However, this may return information about socket exceptions and networking errors to the application.    &lt;integer greater than 1&gt;  Numbers greater than 1 are valid only for replica sets to request acknowledgement from specified number of members, including the primary.    <b><code>MongoDB\Driver\WriteConcern::MAJORITY</code></b>  <p>Requests acknowledgment that write operations have propagated to the majority of voting nodes, including the primary, and have been written to the on-disk journal for these nodes.</p> <p>Prior to MongoDB 3.0, this refers to the majority of replica set members (not just voting nodes).</p>    string  A string value is interpereted as a tag set. Requests acknowledgement that the write operations have propagated to a replica set member with the specified tag.
		 * @param int $wtimeout <p>How long to wait (in milliseconds) for secondaries before failing.</p> <p><i>wtimeout</i> causes write operations to return with an error (<b>WriteConcernError</b>) after the specified limit, even if the required write concern will eventually succeed. When these write operations return, MongoDB does not undo successful data modifications performed before the write concern exceeded the <i>wtimeout</i> time limit.</p> <p>If specified, <i>wtimeout</i> must be a signed 32-bit integer greater than or equal to zero.</p> <p></p> <b>Write concern timeout</b>   Value Description     0 Block indefinitely. This is the default.   &lt;integer greater than 0&gt;  Milliseconds to wait until returning.
		 * @param bool $journal <p>Wait until mongod has applied the write to the journal.</p>
		 * @return self
		 * @link https://php.net/manual/ja/mongodb-driver-writeconcern.construct.php
		 * @since mongodb >=1.0.0
		 */
		final public function __construct($w, int $wtimeout = NULL, bool $journal = NULL) {}

		/**
		 * Returns an object for BSON serialization
		 * @return object <p>Returns an object for serializing the WriteConcern as BSON.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeconcern.bsonserialize.php
		 * @since mongodb >=1.2.0
		 */
		final public function bsonSerialize(): object {}

		/**
		 * Returns the WriteConcern's "journal" option
		 * @return boolean|null <p>Returns the WriteConcern's "journal" option.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeconcern.getjournal.php
		 * @since mongodb >=1.0.0
		 */
		final public function getJournal() {}

		/**
		 * Returns the WriteConcern's "w" option
		 * @return string|integer|null <p>Returns the WriteConcern's "w" option.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeconcern.getw.php
		 * @since mongodb >=1.0.0
		 */
		final public function getW() {}

		/**
		 * Returns the WriteConcern's "wtimeout" option
		 * @return int <p>Returns the WriteConcern's "wtimeout" option.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeconcern.getwtimeout.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWtimeout(): int {}

		/**
		 * Checks if this is the default write concern
		 * <p>Returns whether this is the default write concern (i.e. no options are specified). This method is primarily intended to be used in conjunction with <code>MongoDB\Driver\Manager::getWriteConcern()</code> to determine whether the Manager has been constructed without any write concern options.</p><p>The driver will not include a default write concern in its write operations (e.g. <code>MongoDB\Driver\Manager::executeBulkWrite()</code>) in order to allow the server to apply its own default, which may have been » modified. Libraries that access the Manager's write concern to include it in their own write commands should use this method to ensure that default write concerns are left unset.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if this is the default write concern and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeconcern.isdefault.php
		 * @since mongodb >=1.3.0
		 */
		final public function isDefault(): bool {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\WriteConcernError</b> class encapsulates information about a write concern error and may be returned by <code>MongoDB\Driver\WriteResult::getWriteConcernError()</code>.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-writeconcernerror.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteConcernError {

		/**
		 * Returns the WriteConcernError's error code
		 * @return int <p>Returns the WriteConcernError's error code.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeconcernerror.getcode.php
		 * @since mongodb >=1.0.0
		 */
		final public function getCode(): int {}

		/**
		 * Returns additional metadata for the WriteConcernError
		 * @return mixed <p>Returns additional metadata for the WriteConcernError, or <b><code>NULL</code></b> if no metadata is available.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeconcernerror.getinfo.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInfo() {}

		/**
		 * Returns the WriteConcernError's error message
		 * @return string <p>Returns the WriteConcernError's error message.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeconcernerror.getmessage.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMessage(): string {}

		/**
		 * Returns any write concern error that occurred
		 * @return MongoDB\Driver\WriteConcernError|null <p>Returns a MongoDB\Driver\WriteConcernError if a write concern error was encountered during the write operation, and <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.getwriteconcernerror.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteConcernError() {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\WriteError</b> class encapsulates information about a write error and may be returned as an array element from <code>MongoDB\Driver\WriteResult::getWriteErrors()</code>.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-writeerror.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteError {

		/**
		 * Returns the WriteError's error code
		 * @return int <p>Returns the WriteError's error code.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeerror.getcode.php
		 * @since mongodb >=1.0.0
		 */
		final public function getCode(): int {}

		/**
		 * Returns the index of the write operation corresponding to this WriteError
		 * @return int <p>Returns the index of the write operation (from MongoDB\Driver\BulkWrite) corresponding to this WriteError.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeerror.getindex.php
		 * @since mongodb >=1.0.0
		 */
		final public function getIndex(): int {}

		/**
		 * Returns additional metadata for the WriteError
		 * @return mixed <p>Returns additional metadata for the WriteError, or <b><code>NULL</code></b> if no metadata is available.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeerror.getinfo.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInfo() {}

		/**
		 * Returns the WriteError's error message
		 * @return string <p>Returns the WriteError's error message.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeerror.getmessage.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMessage(): string {}

		/**
		 * Returns any write errors that occurred
		 * @return array <p>Returns an array of MongoDB\Driver\WriteError objects for any write errors encountered during the write operation. The array will be empty if no write errors occurred.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.getwriteerrors.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteErrors(): array {}
	}

	/**
	 * <p>The <b>MongoDB\Driver\WriteResult</b> class encapsulates information about an executed MongoDB\Driver\BulkWrite and may be returned by <code>MongoDB\Driver\Manager::executeBulkWrite()</code>.</p>
	 * @link https://php.net/manual/ja/class.mongodb-driver-writeresult.php
	 * @since mongodb >=1.0.0
	 */
	final class WriteResult {

		/**
		 * Execute one or more write operations
		 * <p>Executes one or more write operations on the primary server.</p><p>A MongoDB\Driver\BulkWrite can be constructed with one or more write operations of varying types (e.g. updates, deletes, and inserts). The driver will attempt to send operations of the same type to the server in as few requests as possible to optimize round trips.</p>
		 * @param string $namespace <p>完全修飾形式の名前空間 (<i>"databaseName.collectionName"</i>)。</p>
		 * @param \MongoDB\Driver\BulkWrite $bulk <p>実行する書き込み。</p>
		 * @param array $options <p></p> <b>options</b>   Option Type Description     session MongoDB\Driver\Session  <p>A session to associate with the operation.</p>    writeConcern MongoDB\Driver\WriteConcern  <p>A write concern to apply to the operation.</p>
		 * @return MongoDB\Driver\WriteResult <p>成功した場合に MongoDB\Driver\WriteResult を返します。</p>
		 * @link https://php.net/manual/ja/mongodb-driver-manager.executebulkwrite.php
		 * @see MongoDB\Driver\Server::executeBulkWrite()
		 * @since mongodb >=1.0.0
		 */
		final public function executeBulkWrite(string $namespace, \MongoDB\Driver\BulkWrite $bulk, array $options = array()): \MongoDB\Driver\WriteResult {}

		/**
		 * Returns the number of documents deleted
		 * @return integer|null <p>Returns the number of documents deleted, or <b><code>NULL</code></b> if the write was not acknowledged.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.getdeletedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getDeletedCount() {}

		/**
		 * Returns the number of documents inserted (excluding upserts)
		 * @return integer|null <p>Returns the number of documents inserted (excluding upserts), or <b><code>NULL</code></b> if the write was not acknowledged.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.getinsertedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getInsertedCount() {}

		/**
		 * Returns the number of documents selected for update
		 * <p>If the update operation results in no change to the document (e.g. setting the value of a field to its current value), the matched count may be greater than the value returned by <code>MongoDB\Driver\WriteResult::getModifiedCount()</code>.</p>
		 * @return integer|null <p>Returns the number of documents selected for update, or <b><code>NULL</code></b> if the write was not acknowledged.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.getmatchedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getMatchedCount() {}

		/**
		 * Returns the number of existing documents updated
		 * <p>If the update operation results in no change to the document (e.g. setting the value of a field to its current value), the modified count may be less than the value returned by <code>MongoDB\Driver\WriteResult::getMatchedCount()</code>.</p>
		 * @return integer|null <p>Returns the number of existing documents updated, or <b><code>NULL</code></b> if the write was not acknowledged.</p><p>The modified count is not available on versions of MongoDB before 2.6, which used the legacy wire protocol version (i.e. OP_UPDATE). If this is the case, the modified count will also be <b><code>NULL</code></b>.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.getmodifiedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getModifiedCount() {}

		/**
		 * Returns the server associated with this write result
		 * <p>Returns the MongoDB\Driver\Server associated with this write result. This is the server that executed the MongoDB\Driver\BulkWrite.</p>
		 * @return MongoDB\Driver\Server <p>Returns the MongoDB\Driver\Server associated with this write result.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.getserver.php
		 * @since mongodb >=1.0.0
		 */
		final public function getServer(): \MongoDB\Driver\Server {}

		/**
		 * Returns the number of documents inserted by an upsert
		 * @return integer|null <p>Returns the number of documents inserted by an upsert.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.getupsertedcount.php
		 * @since mongodb >=1.0.0
		 */
		final public function getUpsertedCount() {}

		/**
		 * Returns an array of identifiers for upserted documents
		 * @return array <p>Returns an array of identifiers (i.e. <i>"_id"</i> field values) for upserted documents. The array keys will correspond to the index of the write operation (from MongoDB\Driver\BulkWrite) responsible for the upsert.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.getupsertedids.php
		 * @since mongodb >=1.0.0
		 */
		final public function getUpsertedIds(): array {}

		/**
		 * Returns any write concern error that occurred
		 * @return MongoDB\Driver\WriteConcernError|null <p>Returns a MongoDB\Driver\WriteConcernError if a write concern error was encountered during the write operation, and <b><code>NULL</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.getwriteconcernerror.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteConcernError() {}

		/**
		 * Returns any write errors that occurred
		 * @return array <p>Returns an array of MongoDB\Driver\WriteError objects for any write errors encountered during the write operation. The array will be empty if no write errors occurred.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.getwriteerrors.php
		 * @since mongodb >=1.0.0
		 */
		final public function getWriteErrors(): array {}

		/**
		 * Returns whether the write was acknowledged
		 * <p>If the write is acknowledged, other count fields will be available on the MongoDB\Driver\WriteResult object.</p>
		 * @return bool <p>Returns <b><code>TRUE</code></b> if the write was acknowledged, and <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/mongodb-driver-writeresult.isacknowledged.php
		 * @since mongodb >=1.0.0
		 */
		final public function isAcknowledged(): bool {}
	}

}

namespace MongoDB\BSON {

	/**
	 * Returns the BSON representation of a JSON value
	 * <p>Converts an » extended JSON string to its BSON representation.</p>
	 * @param string $json <p>JSON value to be converted.</p>
	 * @return string <p>The serialized BSON document as a binary string.</p>
	 * @link https://php.net/manual/ja/function.mongodb.bson-fromjson.php
	 * @see MongoDB\BSON\toJSON()
	 * @since mongodb >=1.0.0
	 */
	function fromJSON(string $json): string {}

	/**
	 * Returns the BSON representation of a PHP value
	 * <p>Serializes a PHP array or object (e.g. document) to its » BSON representation. The returned binary string will describe a BSON document.</p>
	 * @param array|object $value
	 * @return string <p>The serialized BSON document as a binary string.</p>
	 * @link https://php.net/manual/ja/function.mongodb.bson-fromphp.php
	 * @see MongoDB\BSON\toPHP()
	 * @since mongodb >=1.0.0
	 */
	function fromPHP($value): string {}

	/**
	 * Returns the Canonical Extended JSON representation of a BSON value
	 * <p>Converts a BSON string to its » Canonical Extended JSON representation. The canonical format prefers type fidelity at the expense of concise output and is most suited for producing output that can be converted back to BSON without any loss of type information (e.g. numeric types will remain differentiated).</p>
	 * @param string $bson <p>BSON value to be converted.</p>
	 * @return string <p>The converted JSON value.</p>
	 * @link https://php.net/manual/ja/function.mongodb.bson-tocanonicalextendedjson.php
	 * @see MongoDB\BSON\fromJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
	 * @since mongodb >=1.3.0
	 */
	function toCanonicalExtendedJSON(string $bson): string {}

	/**
	 * Returns the Legacy Extended JSON representation of a BSON value
	 * <p>Converts a BSON string to its » Legacy Extended JSON representation.</p><p><b>注意</b>:  There exist several JSON formats for representing BSON. This function implements the "strict mode" defined in » MongoDB Extended JSON, which has been superseded by the canonical and relaxed formats defined in the » Extended JSON Specification and implemented by <code>MongoDB\BSON\toCanonicalExtendedJSON()</code> and <code>MongoDB\BSON\toRelaxedExtendedJSON()</code>, respectively. </p><p>» JSON does not support <b><code>NAN</code></b> and <b><code>INF</code></b> and MongoDB's Legacy Extended JSON format does not define an alternative representation for these values (» libbson will output <i>nan</i> and <i>inf</i> literals, which may not be parsed as valid JSON). If you are working with BSON that may contain non-finite numbers, please use <code>MongoDB\BSON\toCanonicalExtendedJSON()</code> or <code>MongoDB\BSON\toRelaxedExtendedJSON()</code>.</p>
	 * @param string $bson <p>BSON value to be converted.</p>
	 * @return string <p>The converted JSON value.</p>
	 * @link https://php.net/manual/ja/function.mongodb.bson-tojson.php
	 * @see MongoDB\BSON\fromJSON(), MongoDB\BSON\toCanonicalExtendedJSON(), MongoDB\BSON\toRelaxedExtendedJSON()
	 * @since mongodb >=1.0.0
	 */
	function toJSON(string $bson): string {}

	/**
	 * Returns the PHP representation of a BSON value
	 * <p>Unserializes a BSON document (i.e. binary string) to its PHP representation. The <code>typeMap</code> paramater may be used to control the PHP types used for converting BSON arrays and documents (both root and embedded).</p><p>Fields containing deprecated BSON types (i.e. undefined, symbol, DBPointer) are represented only by bare-bones objects of the classes MongoDB\BSON\Undefined, MongoDB\BSON\Symbol, and MongoDB\BSON\DBPointer, when converting BSON to PHP. These objects are created from BSON data and used for storing these types back into the database, but can not be instantiated as they have a private constructor.</p>
	 * @param string $bson <p>BSON value to be unserialized.</p>
	 * @param array $typeMap <p>型マップの設定。</p>
	 * @return array|object <p>The unserialized PHP value.</p>
	 * @link https://php.net/manual/ja/function.mongodb.bson-tophp.php
	 * @see MongoDB\BSON\fromPHP()
	 * @since mongodb >=1.0.0
	 */
	function toPHP(string $bson, array $typeMap = array()) {}

	/**
	 * Returns the Relaxed Extended JSON representation of a BSON value
	 * <p>Converts a BSON string to its » Relaxed Extended JSON representation. The relaxed format prefers use of JSON type primitives at the expense of type fidelity and is most suited for producing output that can be easily consumed by web APIs and humans.</p>
	 * @param string $bson <p>BSON value to be converted.</p>
	 * @return string <p>The converted JSON value.</p>
	 * @link https://php.net/manual/ja/function.mongodb.bson-torelaxedextendedjson.php
	 * @see MongoDB\BSON\fromJSON(), MongoDB\BSON\toCanonicalExtendedJSON()
	 * @since mongodb >=1.3.0
	 */
	function toRelaxedExtendedJSON(string $bson): string {}

}

namespace MongoDB\Driver\Monitoring {

	/**
	 * Registers a new monitoring event subscriber
	 * <p>Registers a new monitoring event subscriber with the driver. Registered subscribers will be notified of monitoring events through specific methods.</p><p><b>注意</b>:  If the object is already registered, this function is a no-op. </p>
	 * @param \MongoDB\Driver\Monitoring\Subscriber $subscriber <p>A monitoring event subscriber object to register.</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mongodb.driver.monitoring.addsubscriber.php
	 * @see MongoDB\Driver\Monitoring\removeSubscriber()
	 * @since mongodb >=1.3.0
	 */
	function addSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber): void {}

	/**
	 * Unregisters an existing monitoring event subscriber
	 * <p>Unregisters an existing monitoring event subscriber from the driver. Unregistered subscribers will no longer be notified of monitoring events.</p><p><b>注意</b>:  If the object is not registered, this function is a no-op. </p>
	 * @param \MongoDB\Driver\Monitoring\Subscriber $subscriber <p>A monitoring event subscriber object to unregister.</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.mongodb.driver.monitoring.removesubscriber.php
	 * @see MongoDB\Driver\Monitoring\addSubscriber()
	 * @since mongodb >=1.3.0
	 */
	function removeSubscriber(\MongoDB\Driver\Monitoring\Subscriber $subscriber): void {}

}
