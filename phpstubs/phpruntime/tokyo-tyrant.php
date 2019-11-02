<?php



namespace {

	/**
	 * <p>Tokyo Tyrant のメインクラスです。</p>
	 * @link https://php.net/manual/ja/class.tokyotyrant.php
	 * @since PECL tokyo_tyrant >= 0.1.0
	 */
	class TokyoTyrant {

		/**
		 * @var integer <p>Tokyo Tyrant データベースのデフォルトのポート</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBDEF_PORT = 1978;

		/**
		 * @var integer <p>文字列が～に等しい</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_STREQ = 0;

		/**
		 * @var integer <p>文字列が～に含まれる</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_STRINC = 1;

		/**
		 * @var integer <p>文字列が～で始まる</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_STRBW = 2;

		/**
		 * @var integer <p>文字列が～で終わる</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_STREW = 3;

		/**
		 * @var integer <p>文字列が～のすべてのトークンを含む</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_STRAND = 4;

		/**
		 * @var integer <p>文字列が～の少なくともひとつのトークンを含む</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_STROR = 5;

		/**
		 * @var integer <p>文字列が～の少なくともひとつのトークンに等しい</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_STROREQ = 6;

		/**
		 * @var integer <p>文字列が正規表現にマッチする</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_STRRX = 7;

		/**
		 * @var integer <p>数値が～に等しい</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_NUMEQ = 8;

		/**
		 * @var integer <p>数値が～より大きい</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_NUMGT = 9;

		/**
		 * @var integer <p>数値が～以上</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_NUMGE = 10;

		/**
		 * @var integer <p>数値が～未満</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_NUMLT = 11;

		/**
		 * @var integer <p>数値が～以下</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_NUMLE = 12;

		/**
		 * @var integer <p>数値が～と～の間にある</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_NUMBT = 13;

		/**
		 * @var integer <p>数値が～のすくなくともひとつのトークンに等しい</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_NUMOREQ = 14;

		/**
		 * @var integer <p>否定フラグ</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_NEGATE = 16777216;

		/**
		 * @var integer <p>非インデックスフラグ</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQC_NOIDX = 33554432;

		/**
		 * @var integer <p>文字列の昇順</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQO_STRASC = 0;

		/**
		 * @var integer <p>文字列の降順</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQO_STRDESC = 1;

		/**
		 * @var integer <p>数値の昇順</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQO_NUMASC = 2;

		/**
		 * @var integer <p>数値の降順</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQO_NUMDESC = 3;

		/**
		 * @var integer <p>レキシカル文字列</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBIT_LEXICAL = 0;

		/**
		 * @var integer <p>十進文字列</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBIT_DECIMAL = 1;

		/**
		 * @var integer <p>トークン転置インデックス (Tokyo Tyrant &gt;= 1.1.29)</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBIT_TOKEN = 2;

		/**
		 * @var integer <p>QGRAM 転置インデックス (Tokyo Tyrant &gt;= 1.1.29)</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBIT_QGRAM = 3;

		/**
		 * @var integer <p>最適化</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBIT_OPT = 9998;

		/**
		 * @var integer <p>void</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBIT_VOID = 9999;

		/**
		 * @var integer <p>既存のインデックスを保持する</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBIT_KEEP = 16777216;

		/**
		 * @var integer <p>フレーズによる全文検索 (Tokyo Tyrant &gt;= 1.1.29)</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQCFTS_PH = 15;

		/**
		 * @var integer <p>レコード間の union メタ検索 (Tokyo Tyrant &gt;= 1.1.33)</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQCFTS_AND = 16;

		/**
		 * @var integer <p>レコード間の intersection メタ検索 (Tokyo Tyrant &gt;= 1.1.33)</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQCFTS_OR = 17;

		/**
		 * @var integer <p>レコード間の difference メタ検索 (Tokyo Tyrant &gt;= 1.1.33)</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBQCFTS_EX = 18;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBXO_LCKREC = 1;

		/**
		 * @var integer <p>グローバルロック</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBXOLCK_GLB = 2;

		/**
		 * @var integer <p>レコード型 int</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBREC_INT = 1;

		/**
		 * @var integer <p>レコード型 float (double)</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBREC_DBL = 2;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBMS_UNION = 0;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBMS_ISECT = 1;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBMS_DIFF = 2;

		/**
		 * @var integer <p>接続失敗時に再接続するかどうか。 持続的な接続の場合はこのパラメータを on にしておくことを推奨します。</p>
		 * @link https://php.net/manual/ja/class.tokyotyrant.php
		 */
		const RDBT_RECON = 1;

		/**
		 * 新しい TokyoTyrant オブジェクトを作成する
		 * <p>新しい TokyoTyrant オブジェクトを作成し、オプションでデータベースに接続する</p>
		 * @param string $host <p>ホスト名。デフォルトは <b><code>NULL</code></b> です。</p>
		 * @param int $port <p>ポート番号。デフォルトは 1978 です。</p>
		 * @param array $options <p>接続のオプション。timeout (デフォルト: 5.0), reconnect (デフォルト: <b><code>TRUE</code></b>) および persistent (デフォルト: <b><code>TRUE</code></b>)。</p>
		 * @return self <p>データベースへの接続が失敗した場合に TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.construct.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function __construct(string $host = NULL, int $port = TokyoTyrant::RDBDEF_PORT, array $options = NULL) {}

		/**
		 * 数値キーを加算する
		 * <p>int あるいは double 値を加算します。 これは、指定した値を加算して新しい値を返します。 キーが存在しない場合は、新しいキーを作成してここで指定した値を初期値とします。</p>
		 * @param string $key <p>文字列キー。</p>
		 * @param number $increment <p>加算する値。</p>
		 * @param int $type <p><b><code>TokyoTyrant::RDBREC_INT</code></b> あるいは <b><code>TokyoTyrant::RDBREC_DBL</code></b> 定数。 このパラメータを省略した場合は、<code>increment</code> の型をもとに型を推測します。</p>
		 * @return number <p>成功した場合に新しい値を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.add.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function add(string $key, $increment, int $type = 0) {}

		/**
		 * データベースに接続する
		 * <p>リモートデータベースに接続します。</p>
		 * @param string $host <p>ホスト名。</p>
		 * @param int $port <p>ポート番号。デフォルトは 1978。</p>
		 * @param array $options <p>接続のオプション。timeout (デフォルト: 5.0), reconnect (デフォルト: <b><code>TRUE</code></b>) および persistent (デフォルト: <b><code>TRUE</code></b>)。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.connect.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connect(string $host, int $port = TokyoTyrant::RDBDEF_PORT, array $options = NULL): \TokyoTyrant {}

		/**
		 * データベースに接続する
		 * <p>URI を使用してデータベースに接続します。</p>
		 * @param string $uri <p>データベースへの URI。たとえば <i>tcp://localhost:1979/</i> のようになります。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.connecturi.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connectUri(string $uri): \TokyoTyrant {}

		/**
		 * データベースをコピーする
		 * <p>現在のデータベースのコピーを作成します。</p>
		 * @param string $path <p>データベースのコピー先へのパス。リモートデータベースを実行しているユーザーが、 そのディレクトリへの書き込みアクセス権を持っている必要があります。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.copy.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function copy(string $path): \TokyoTyrant {}

		/**
		 * リモートスクリプトを実行する
		 * <p>リモートスクリプトを実行します。</p>
		 * @param string $name <p>実行したい関数の名前。</p>
		 * @param int $options <p>レコードロックの場合は <b><code>TokyoTyrant::RDBXO_LCKREC</code></b>、 グローバルロックの場合は <b><code>TokyoTyrant::RDBXO_LCKGLB</code></b>。</p>
		 * @param string $key <p>関数に渡すキー。</p>
		 * @param string $value <p>関数に渡す値。</p>
		 * @return string <p>スクリプト関数の結果を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.ext.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function ext(string $name, int $options, string $key, string $value): string {}

		/**
		 * 前方一致でマッチするキーを返す
		 * <p>前方一致でマッチするキーをデータベースから返します。</p>
		 * @param string $prefix <p>キーのプレフィックス。</p>
		 * @param int $max_recs <p>返すレコードの最大数。</p>
		 * @return array <p>マッチしたキーの配列を返します。値は返しません。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.fwmkeys.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function fwmKeys(string $prefix, int $max_recs): array {}

		/**
		 * 値を取得する
		 * <p>このメソッドは、値を返します。文字列あるいは配列を渡すことができます。</p>
		 * @param mixed $keys <p>キーをあらわす文字列、あるいは文字列の配列。</p>
		 * @return mixed <p>指定した引数に応じて、文字列あるいは配列を返します。 エラー時に TokyoTyrantException をスローします。 文字列を渡したときに、もしそのキーが見つからなければ null を返します。 配列を渡したときは、存在するキーのみを返します。存在しないキーを渡してもエラーにはなりません。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.get.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function get($keys) {}

		/**
		 * イテレータを取得する
		 * <p>イテレータを取得し、データベース内のすべての キー/値 を反復処理できるようにします。</p>
		 * @return TokyoTyrantIterator <p>TokyoTyrantIterator オブジェクトを返します。失敗した場合に TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.getiterator.php
		 * @since No version information available, might only be in Git
		 */
		public function getIterator(): \TokyoTyrantIterator {}

		/**
		 * データベース内のレコードの数を取得する
		 * <p>データベース内のレコードの数を返します。</p>
		 * @return int <p>データベース内のレコードの数を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.num.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function num(): int {}

		/**
		 * レコードを削除する
		 * <p>レコードを削除します。単一のキーの場合は文字列で、複数のレコードのキーの場合は配列で指定します。</p>
		 * @param mixed $keys <p>文字列のキー、あるいは文字列のキーの配列。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.out.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function out($keys): \TokyoTyrant {}

		/**
		 * 値を格納する
		 * <p>key-value ペアをデータベースに格納します。<code>keys</code> が文字列の場合は、二番目のパラメータ value で値を指定します。 <code>keys</code> が文字列の場合は二番目のパラメータは必須です。 指定したキーがすでに存在する場合は、新しい値で上書きされます。</p>
		 * @param mixed $keys <p>文字列のキー、あるいは key-value ペアの配列。</p>
		 * @param string $value <p>文字列のキーを指定した場合の値。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.put.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function put($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * レコードを連結する
		 * <p>ある値を既存のキーに追記します。<code>keys</code> が配列の場合は複数の値となります。<code>keys</code> が文字列の場合は二番目のパラメータは必須です。レコードが存在しない場合は新しいレコードを作成します。</p>
		 * @param mixed $keys <p>文字列のキー、あるいは key-value ペアの配列。</p>
		 * @param string $value <p>文字列のキーを使用した場合の値。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.putcat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putCat($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * レコードを書き込む
		 * <p>key-value ペアをデータベースに格納します。<code>keys</code> が文字列の場合は、二番目のパラメータ value で値を指定します。 <code>keys</code> が文字列の場合は二番目のパラメータは必須です。 指定したキーがすでに存在する場合は、すでにレコードが存在するという例外をスローします。</p>
		 * @param mixed $keys <p>文字列のキー、あるいは key-value ペアの配列。</p>
		 * @param string $value <p>文字列の値。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.putkeep.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putKeep($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * 値を格納する
		 * <p>key-value ペアをデータベースに格納します。<code>keys</code> が文字列の場合は、二番目のパラメータ value で値を指定します。 <code>keys</code> が文字列の場合は二番目のパラメータは必須です。 このメソッドは、サーバーからの応答を待ちません。</p>
		 * @param mixed $keys <p>文字列のキー、あるいは key-value ペアの配列。</p>
		 * @param string $value <p>文字列の値。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.putnr.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putNr($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * レコードを連結する
		 * <p>レコードを連結し、左にシフトします。</p>
		 * @param string $key <p>文字列のキー。</p>
		 * @param string $value <p>連結する値。</p>
		 * @param int $width <p>レコードの幅。</p>
		 * @return mixed <p>現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.putshl.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putShl(string $key, string $value, int $width) {}

		/**
		 * Restore the database
		 * <p>Restore the database from the update log.</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $log_dir <p>Directory where the log is</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency: Default: <b><code>TRUE</code></b></p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/ja/tokyotyrant.restore.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function restore(string $log_dir, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * Set the replication master
		 * <p>Sets the replication master of the database</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $host <p>Hostname of the replication master. If <b><code>NULL</code></b> the replication is disabled.</p>
		 * @param int $port <p>Port of the replication master</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency.</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/ja/tokyotyrant.setmaster.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setMaster(string $host, int $port, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * 値のサイズを返す
		 * <p>指定したキーに対応する値のサイズを返します。</p>
		 * @param string $key <p>サイズを調べたいキー。</p>
		 * @return int <p>値のサイズを返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.size.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function size(string $key): int {}

		/**
		 * 統計情報を取得する
		 * <p>リモートデータベースの統計情報を取得します。</p>
		 * @return array <p>統計情報をあらわす key-value ペアの配列を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.stat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function stat(): array {}

		/**
		 * データベースを同期させる
		 * <p>データベースを物理デバイスに同期させます。</p>
		 * @return mixed <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.sync.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function sync() {}

		/**
		 * 接続の値を調節する
		 * <p>データベースの接続オプションを調節します。</p>
		 * @param float $timeout <p>オブジェクトのタイムアウト値 (デフォルトは 5.0)。</p>
		 * @param int $options <p>調節するオプションのビットマスク。0 あるいは <b><code>TokyoTyrant::RDBT_RECON</code></b> とすることができます。このパラメータは変更しないことを推奨します。</p>
		 * @return TokyoTyrant <p>このメソッドは現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.tune.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function tune(float $timeout, int $options = TokyoTyrant::RDBT_RECON): \TokyoTyrant {}

		/**
		 * データベースを空にする
		 * <p>リモートデータベースを空にします。</p>
		 * @return mixed <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.vanish.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function vanish() {}
	}

	/**
	 * <p>TokyoTyrantException</p>
	 * @link https://php.net/manual/ja/class.tokyotyrantexception.php
	 * @since PECL tokyo_tyrant >= 0.1.0
	 */
	class tokyotyrantexception extends \Exception {

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

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
	 * <p>TokyoTyrant および TokyoTyrantTable オブジェクト用のイテレータです。 データベース内のすべてのキーおよび値を反復処理します。 TokyoTyrantIterator はバージョン 0.2.0 で追加されました。</p>
	 * @link https://php.net/manual/ja/class.tokyotyrantiterator.php
	 * @since PECL tokyo_tyrant >= 0.2.0
	 */
	class TokyoTyrantIterator implements \Iterator {

		/**
		 * イテレータを作成する
		 * <p>新しい TokyoTyrantIterator オブジェクトを作成します。 ひとつの接続に対して複数のイテレータを作ることもできますが、 その場合、すべてのアイテムが走査されることは保証できません。 <code>object</code> パラメータには TokyoTyrant あるいは TokyoTyrantTable のインスタンスを指定します。</p>
		 * @param mixed $object
		 * @return self <p>イテレータの初期化に失敗した場合に例外をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrantiterator.construct.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function __construct($object) {}

		/**
		 * 数値キーを加算する
		 * <p>int あるいは double 値を加算します。 これは、指定した値を加算して新しい値を返します。 キーが存在しない場合は、新しいキーを作成してここで指定した値を初期値とします。</p>
		 * @param string $key <p>文字列キー。</p>
		 * @param number $increment <p>加算する値。</p>
		 * @param int $type <p><b><code>TokyoTyrant::RDBREC_INT</code></b> あるいは <b><code>TokyoTyrant::RDBREC_DBL</code></b> 定数。 このパラメータを省略した場合は、<code>increment</code> の型をもとに型を推測します。</p>
		 * @return number <p>成功した場合に新しい値を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.add.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function add(string $key, $increment, int $type = 0) {}

		/**
		 * データベースに接続する
		 * <p>リモートデータベースに接続します。</p>
		 * @param string $host <p>ホスト名。</p>
		 * @param int $port <p>ポート番号。デフォルトは 1978。</p>
		 * @param array $options <p>接続のオプション。timeout (デフォルト: 5.0), reconnect (デフォルト: <b><code>TRUE</code></b>) および persistent (デフォルト: <b><code>TRUE</code></b>)。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.connect.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connect(string $host, int $port = TokyoTyrant::RDBDEF_PORT, array $options = NULL): \TokyoTyrant {}

		/**
		 * データベースに接続する
		 * <p>URI を使用してデータベースに接続します。</p>
		 * @param string $uri <p>データベースへの URI。たとえば <i>tcp://localhost:1979/</i> のようになります。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.connecturi.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connectUri(string $uri): \TokyoTyrant {}

		/**
		 * データベースをコピーする
		 * <p>現在のデータベースのコピーを作成します。</p>
		 * @param string $path <p>データベースのコピー先へのパス。リモートデータベースを実行しているユーザーが、 そのディレクトリへの書き込みアクセス権を持っている必要があります。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.copy.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function copy(string $path): \TokyoTyrant {}

		/**
		 * 現在の値を取得する
		 * <p>反復処理中の現在の値を返します。</p>
		 * @return mixed <p>成功した場合に現在の値、失敗した場合に false を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrantiterator.current.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function current() {}

		/**
		 * リモートスクリプトを実行する
		 * <p>リモートスクリプトを実行します。</p>
		 * @param string $name <p>実行したい関数の名前。</p>
		 * @param int $options <p>レコードロックの場合は <b><code>TokyoTyrant::RDBXO_LCKREC</code></b>、 グローバルロックの場合は <b><code>TokyoTyrant::RDBXO_LCKGLB</code></b>。</p>
		 * @param string $key <p>関数に渡すキー。</p>
		 * @param string $value <p>関数に渡す値。</p>
		 * @return string <p>スクリプト関数の結果を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.ext.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function ext(string $name, int $options, string $key, string $value): string {}

		/**
		 * 前方一致でマッチするキーを返す
		 * <p>前方一致でマッチするキーをデータベースから返します。</p>
		 * @param string $prefix <p>キーのプレフィックス。</p>
		 * @param int $max_recs <p>返すレコードの最大数。</p>
		 * @return array <p>マッチしたキーの配列を返します。値は返しません。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.fwmkeys.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function fwmKeys(string $prefix, int $max_recs): array {}

		/**
		 * 値を取得する
		 * <p>このメソッドは、値を返します。文字列あるいは配列を渡すことができます。</p>
		 * @param mixed $keys <p>キーをあらわす文字列、あるいは文字列の配列。</p>
		 * @return mixed <p>指定した引数に応じて、文字列あるいは配列を返します。 エラー時に TokyoTyrantException をスローします。 文字列を渡したときに、もしそのキーが見つからなければ null を返します。 配列を渡したときは、存在するキーのみを返します。存在しないキーを渡してもエラーにはなりません。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.get.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function get($keys) {}

		/**
		 * イテレータを取得する
		 * <p>イテレータを取得し、データベース内のすべての キー/値 を反復処理できるようにします。</p>
		 * @return TokyoTyrantIterator <p>TokyoTyrantIterator オブジェクトを返します。失敗した場合に TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.getiterator.php
		 * @since No version information available, might only be in Git
		 */
		public function getIterator(): \TokyoTyrantIterator {}

		/**
		 * 現在のキーを返す
		 * <p>現在のキーを返します。</p>
		 * @return mixed <p>成功した場合に現在のキー、失敗した場合に false を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrantiterator.key.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function key() {}

		/**
		 * 次のキーに移動する
		 * <p>反復処理中に次のキーに移動し、その値を返します。</p>
		 * @return mixed <p>成功した場合に次の値、失敗した場合に false を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrantiterator.next.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function next() {}

		/**
		 * データベース内のレコードの数を取得する
		 * <p>データベース内のレコードの数を返します。</p>
		 * @return int <p>データベース内のレコードの数を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.num.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function num(): int {}

		/**
		 * レコードを削除する
		 * <p>レコードを削除します。単一のキーの場合は文字列で、複数のレコードのキーの場合は配列で指定します。</p>
		 * @param mixed $keys <p>文字列のキー、あるいは文字列のキーの配列。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.out.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function out($keys): \TokyoTyrant {}

		/**
		 * 値を格納する
		 * <p>key-value ペアをデータベースに格納します。<code>keys</code> が文字列の場合は、二番目のパラメータ value で値を指定します。 <code>keys</code> が文字列の場合は二番目のパラメータは必須です。 指定したキーがすでに存在する場合は、新しい値で上書きされます。</p>
		 * @param mixed $keys <p>文字列のキー、あるいは key-value ペアの配列。</p>
		 * @param string $value <p>文字列のキーを指定した場合の値。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.put.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function put($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * レコードを連結する
		 * <p>ある値を既存のキーに追記します。<code>keys</code> が配列の場合は複数の値となります。<code>keys</code> が文字列の場合は二番目のパラメータは必須です。レコードが存在しない場合は新しいレコードを作成します。</p>
		 * @param mixed $keys <p>文字列のキー、あるいは key-value ペアの配列。</p>
		 * @param string $value <p>文字列のキーを使用した場合の値。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.putcat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putCat($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * レコードを書き込む
		 * <p>key-value ペアをデータベースに格納します。<code>keys</code> が文字列の場合は、二番目のパラメータ value で値を指定します。 <code>keys</code> が文字列の場合は二番目のパラメータは必須です。 指定したキーがすでに存在する場合は、すでにレコードが存在するという例外をスローします。</p>
		 * @param mixed $keys <p>文字列のキー、あるいは key-value ペアの配列。</p>
		 * @param string $value <p>文字列の値。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.putkeep.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putKeep($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * 値を格納する
		 * <p>key-value ペアをデータベースに格納します。<code>keys</code> が文字列の場合は、二番目のパラメータ value で値を指定します。 <code>keys</code> が文字列の場合は二番目のパラメータは必須です。 このメソッドは、サーバーからの応答を待ちません。</p>
		 * @param mixed $keys <p>文字列のキー、あるいは key-value ペアの配列。</p>
		 * @param string $value <p>文字列の値。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.putnr.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putNr($keys, string $value = NULL): \TokyoTyrant {}

		/**
		 * レコードを連結する
		 * <p>レコードを連結し、左にシフトします。</p>
		 * @param string $key <p>文字列のキー。</p>
		 * @param string $value <p>連結する値。</p>
		 * @param int $width <p>レコードの幅。</p>
		 * @return mixed <p>現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.putshl.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putShl(string $key, string $value, int $width) {}

		/**
		 * Restore the database
		 * <p>Restore the database from the update log.</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $log_dir <p>Directory where the log is</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency: Default: <b><code>TRUE</code></b></p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/ja/tokyotyrant.restore.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function restore(string $log_dir, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * イテレータを巻き戻す
		 * <p>イテレータを巻き戻して新たに反復処理を始められるようにします。 foreach の最初に自動的にコールされます。</p>
		 * @return void <p>イテレータの初期化に失敗した場合に TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrantiterator.rewind.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function rewind(): void {}

		/**
		 * Set the replication master
		 * <p>Sets the replication master of the database</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $host <p>Hostname of the replication master. If <b><code>NULL</code></b> the replication is disabled.</p>
		 * @param int $port <p>Port of the replication master</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency.</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/ja/tokyotyrant.setmaster.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setMaster(string $host, int $port, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * 値のサイズを返す
		 * <p>指定したキーに対応する値のサイズを返します。</p>
		 * @param string $key <p>サイズを調べたいキー。</p>
		 * @return int <p>値のサイズを返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.size.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function size(string $key): int {}

		/**
		 * 統計情報を取得する
		 * <p>リモートデータベースの統計情報を取得します。</p>
		 * @return array <p>統計情報をあらわす key-value ペアの配列を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.stat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function stat(): array {}

		/**
		 * データベースを同期させる
		 * <p>データベースを物理デバイスに同期させます。</p>
		 * @return mixed <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.sync.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function sync() {}

		/**
		 * 接続の値を調節する
		 * <p>データベースの接続オプションを調節します。</p>
		 * @param float $timeout <p>オブジェクトのタイムアウト値 (デフォルトは 5.0)。</p>
		 * @param int $options <p>調節するオプションのビットマスク。0 あるいは <b><code>TokyoTyrant::RDBT_RECON</code></b> とすることができます。このパラメータは変更しないことを推奨します。</p>
		 * @return TokyoTyrant <p>このメソッドは現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.tune.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function tune(float $timeout, int $options = TokyoTyrant::RDBT_RECON): \TokyoTyrant {}

		/**
		 * イテレータが有効かどうかを調べる
		 * <p>内部ポインタが有効な要素を指しているかどうかを調べます。</p>
		 * @return bool <p>現在のアイテムが有効な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrantiterator.valid.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function valid(): bool {}

		/**
		 * データベースを空にする
		 * <p>リモートデータベースを空にします。</p>
		 * @return mixed <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.vanish.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function vanish() {}
	}

	/**
	 * <p>このクラスは、テーブルデータベースへの問い合わせに使用します。</p>
	 * @link https://php.net/manual/ja/class.tokyotyrantquery.php
	 * @since PECL tokyo_tyrant >= 0.1.0
	 */
	class TokyoTyrantQuery implements \Iterator {

		/**
		 * 新しいクエリを作成する
		 * <p>新しいクエリオブジェクトを作成します。</p>
		 * @param \TokyoTyrantTable $table <p>アクティブなデータベースに接続している TokyoTyrantTable オブジェクト。</p>
		 * @return self <p>新しい TokyoTyrantQuery オブジェクトを返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.construct.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function __construct(\TokyoTyrantTable $table) {}

		/**
		 * 条件をクエリに追加する
		 * <p>条件をクエリに追加します。 条件とは、たとえば「ある式にマッチするすべてのキーを取得する」 といったものです。</p>
		 * @param string $name <p>条件で使うカラムの名前。</p>
		 * @param int $op <p>演算子。<b><code>TokyoTyrant::RDBQC_&#42;</code></b> 定数のいずれか。</p>
		 * @param string $expr <p>式。</p>
		 * @return mixed <p>このメソッドは現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.addcond.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function addCond(string $name, int $op, string $expr) {}

		/**
		 * レコードを数える
		 * <p>クエリが返すレコードの数を返します。</p>
		 * @return int <p>マッチした行の数を返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.count.php
		 * @since No version information available, might only be in Git
		 */
		public function count(): int {}

		/**
		 * 現在の要素を返す
		 * <p>現在の要素を返します。Iterator インターフェイスを実装したものです。</p>
		 * @return array <p>現在の行を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.current.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function current(): array {}

		/**
		 * クエリのヒント文字列を取得する
		 * <p>クエリのヒント文字列を取得します。 ヒント文字列には、実行されたクエリについての情報が含まれています。 たとえば MySQL の EXPLAIN ステートメントのようなものです。</p>
		 * @return string <p>常に文字列を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.hint.php
		 * @since No version information available, might only be in Git
		 */
		public function hint(): string {}

		/**
		 * 現在のキーを返す
		 * <p>現在のキーを返します。Iterator インターフェイスを実装したものです。</p>
		 * @return string <p>現在のキーを返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.key.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function key(): string {}

		/**
		 * 複数のクエリからレコードを取得する
		 * <p>複数のクエリをデータベース上で実行し、マッチするレコードを返します。 現在のオブジェクトは常に、検索結果の一番左側のオブジェクトとなります。</p>
		 * @param array $queries <p>TokyoTyrantQuery オブジェクトの配列。</p>
		 * @param int $type <p><b><code>TokyoTyrant::RDBMS_&#42;</code></b> 定数のいずれか。</p>
		 * @return array <p>マッチする行を返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.metasearch.php
		 * @since No version information available, might only be in Git
		 */
		public function metaSearch(array $queries, int $type): array {}

		/**
		 * イテレータを次のエントリに移動する
		 * <p>結果セットの次の結果を返します。Iterator インターフェイスを実装したものです。</p>
		 * @return array <p>次の行を返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.next.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function next(): array {}

		/**
		 * クエリに基づいてレコードを削除する
		 * <p>クエリにマッチするすべてのレコードを削除します。 検索と同じように動作しますが、結果を返すのではなく結果を削除します。</p>
		 * @return TokyoTyrantQuery <p>このメソッドは現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.out.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function out(): \TokyoTyrantQuery {}

		/**
		 * イテレータを巻き戻す
		 * <p>結果セットを巻き戻し、クエリをまだ実行していない場合は実行します。 Iterator インターフェイスを実装したものです。</p>
		 * @return bool <p><b><code>TRUE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.rewind.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function rewind(): bool {}

		/**
		 * レコードを検索する
		 * <p>テーブルデータベース上で検索を実行します。 マッチしたレコードを含む、配列の配列を返します。 返される配列の最初のレベルにはデータの主キーが、 そしてその次のレベルに行のデータが格納されます。</p>
		 * @return array <p>マッチした行を返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.search.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function search(): array {}

		/**
		 * 結果を制限する
		 * <p>クエリが返す結果の最大数を設定します。</p>
		 * @param int $max <p>レコードの最大数。デフォルトは -1 です。</p>
		 * @param int $skip <p>先頭から何件のレコードを読み飛ばすか。デフォルトは -1 です。</p>
		 * @return mixed <p>このメソッドは現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.setlimit.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setLimit(int $max = NULL, int $skip = NULL) {}

		/**
		 * 結果を並べ替える
		 * <p>クエリの並び順を設定します。</p>
		 * @param string $name <p>並べ替えを行うカラム名。</p>
		 * @param int $type <p><code>type</code> には、次の定数のいずれかを指定します。</p> <ul> <li>  <b><code>TokyoTyrant::RDBQO_STRASC</code></b> - 文字列の昇順  </li> <li>  <b><code>TokyoTyrant::RDBQO_STRDESC</code></b> - 文字列の降順  </li> <li>  <b><code>TokyoTyrant::RDBQO_NUMASC</code></b> - 数値の昇順  </li> <li>  <b><code>TokyoTyrant::RDBQO_NUMDESC</code></b> - 数値の降順  </li> </ul>
		 * @return mixed <p>このメソッドは、現在のオブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.setorder.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setOrder(string $name, int $type) {}

		/**
		 * 現在のアイテムの有効性をチェックする
		 * <p>現在のアイテムが有効かどうかを調べます。。Iterator インターフェイスを実装したものです。</p>
		 * @return bool <p>現在のアイテムが有効な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrantquery.valid.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function valid(): bool {}
	}

	/**
	 * <p>テーブルデータベースへの API を提供します。 テーブルデータベースを作成するには <i>ttserver -port 1979 /tmp/tt_table.tct</i> のようなコマンドを実行します。Tokyo Tyrant のテーブル API はスキーマのないデータベースで、任意の数の key-value ペアをひとつの主キーのもとに格納することができます。</p>
	 * @link https://php.net/manual/ja/class.tokyotyranttable.php
	 * @since PECL tokyo_tyrant >= 0.1.0
	 */
	class TokyoTyrantTable extends \TokyoTyrant {

		/**
		 * 新しい TokyoTyrant オブジェクトを作成する
		 * <p>新しい TokyoTyrant オブジェクトを作成し、オプションでデータベースに接続する</p>
		 * @param string $host <p>ホスト名。デフォルトは <b><code>NULL</code></b> です。</p>
		 * @param int $port <p>ポート番号。デフォルトは 1978 です。</p>
		 * @param array $options <p>接続のオプション。timeout (デフォルト: 5.0), reconnect (デフォルト: <b><code>TRUE</code></b>) および persistent (デフォルト: <b><code>TRUE</code></b>)。</p>
		 * @return self <p>データベースへの接続が失敗した場合に TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.construct.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function __construct(string $host = NULL, int $port = TokyoTyrant::RDBDEF_PORT, array $options = NULL) {}

		/**
		 * レコードを追加する
		 * <p>このメソッドは、テーブルデータベースではサポートしていません。</p>
		 * @param string $key <p>文字列キー。</p>
		 * @param mixed $increment <p>加算する値。</p>
		 * @param string $type <p><b><code>TokyoTyrant::RDB_RECINT</code></b> あるいは <b><code>TokyoTyrant::RDB_RECDBL</code></b> 定数。 このパラメータを省略した場合は、<code>increment</code> の型をもとに型を推測します。</p>
		 * @return void <p>このクラスでこのメソッドを使うと TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.add.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function add(string $key, $increment, string $type = NULL): void {}

		/**
		 * データベースに接続する
		 * <p>リモートデータベースに接続します。</p>
		 * @param string $host <p>ホスト名。</p>
		 * @param int $port <p>ポート番号。デフォルトは 1978。</p>
		 * @param array $options <p>接続のオプション。timeout (デフォルト: 5.0), reconnect (デフォルト: <b><code>TRUE</code></b>) および persistent (デフォルト: <b><code>TRUE</code></b>)。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.connect.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connect(string $host, int $port = TokyoTyrant::RDBDEF_PORT, array $options = NULL): \TokyoTyrant {}

		/**
		 * データベースに接続する
		 * <p>URI を使用してデータベースに接続します。</p>
		 * @param string $uri <p>データベースへの URI。たとえば <i>tcp://localhost:1979/</i> のようになります。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.connecturi.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function connectUri(string $uri): \TokyoTyrant {}

		/**
		 * データベースをコピーする
		 * <p>現在のデータベースのコピーを作成します。</p>
		 * @param string $path <p>データベースのコピー先へのパス。リモートデータベースを実行しているユーザーが、 そのディレクトリへの書き込みアクセス権を持っている必要があります。</p>
		 * @return TokyoTyrant <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.copy.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function copy(string $path): \TokyoTyrant {}

		/**
		 * リモートスクリプトを実行する
		 * <p>リモートスクリプトを実行します。</p>
		 * @param string $name <p>実行したい関数の名前。</p>
		 * @param int $options <p>レコードロックの場合は <b><code>TokyoTyrant::RDBXO_LCKREC</code></b>、 グローバルロックの場合は <b><code>TokyoTyrant::RDBXO_LCKGLB</code></b>。</p>
		 * @param string $key <p>関数に渡すキー。</p>
		 * @param string $value <p>関数に渡す値。</p>
		 * @return string <p>スクリプト関数の結果を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.ext.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function ext(string $name, int $options, string $key, string $value): string {}

		/**
		 * 前方一致でマッチするキーを返す
		 * <p>前方一致でマッチするキーをデータベースから返します。</p>
		 * @param string $prefix <p>キーのプレフィックス。</p>
		 * @param int $max_recs <p>返すレコードの最大数。</p>
		 * @return array <p>マッチしたキーの配列を返します。値は返しません。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.fwmkeys.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function fwmKeys(string $prefix, int $max_recs): array {}

		/**
		 * 一意な id を生成する
		 * <p>一意な id をテーブルデータベースに生成します。 テーブルデータベース内での行の参照は、数値の主キーを使って行います。</p>
		 * @return int <p>一意な id を返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.genuid.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function genUid(): int {}

		/**
		 * 行を取得する
		 * <p>行をテーブルデータベースから取得します。 <code>keys</code> は、行を表す主キーの整数値か 複数行を表す整数値の配列となります。</p>
		 * @param mixed $keys <p>主キー。文字列あるいは整数値。</p>
		 * @return array <p>行を配列で返します。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.get.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function get($keys): array {}

		/**
		 * イテレータを取得する
		 * <p>イテレータを取得し、データベース内のすべての キー/値 を反復処理できるようにします。</p>
		 * @return TokyoTyrantIterator <p>TokyoTyrantIterator オブジェクトを返します。失敗した場合に TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.getiterator.php
		 * @since No version information available, might only be in Git
		 */
		public function getIterator(): \TokyoTyrantIterator {}

		/**
		 * クエリオブジェクトを取得する
		 * <p>データベース上で検索を実行するためのクエリオブジェクトを取得します。</p>
		 * @return TokyoTyrantQuery <p>成功した場合に TokyoTyrantQuery を返します。エラー時に TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.getquery.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function getQuery(): \TokyoTyrantQuery {}

		/**
		 * データベース内のレコードの数を取得する
		 * <p>データベース内のレコードの数を返します。</p>
		 * @return int <p>データベース内のレコードの数を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.num.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function num(): int {}

		/**
		 * レコードを削除する
		 * <p>テーブルデータベースからレコードを削除します。</p>
		 * @param mixed $keys <p>整数のキー、あるいはその配列。</p>
		 * @return void <p>このメソッドは現在のオブジェクトを返します。失敗した場合に TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.out.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function out($keys): void {}

		/**
		 * 行を格納する
		 * <p>新しい行をデータベースに格納します。このメソッドのパラメータ <code>key</code> は行の主キーで、<b><code>NULL</code></b> を渡すと一意な id を新たに生成します。<code>value</code> は配列で、行の内容を表します。通常は、キーと値のペアとなります。</p>
		 * @param string $key <p>行の主キー。</p>
		 * @param array $columns <p>行の内容。</p>
		 * @return int <p>成功した場合に主キーを返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.put.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function put(string $key, array $columns): int {}

		/**
		 * 行を連結する
		 * <p>このメソッドを使うと、新しいカラムを既存のレコードに追加することができます。 既存のキーはそのまま変わらず残り、任意の新しいカラムを行に追加することができます。 key に null を渡すと、新しい行を生成します。</p>
		 * @param string $key <p>行の主キー、あるいは <b><code>NULL</code></b>。</p>
		 * @param array $columns <p>行の内容の配列。</p>
		 * @return void <p>主キーを返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.putcat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putCat(string $key, array $columns): void {}

		/**
		 * 新しいレコードを書き込む
		 * <p>新しいレコードをデータベースに書き込みます。 もしそのキーがすでに存在する場合は、レコードが存在することをあらわす例外をスローします。</p>
		 * @param string $key <p>行の主キー、あるいは <b><code>NULL</code></b>。</p>
		 * @param array $columns <p>行の内容の配列。</p>
		 * @return void <p>主キーを返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.putkeep.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putKeep(string $key, array $columns): void {}

		/**
		 * 値を格納する
		 * <p>このメソッドは、テーブルデータベースではサポートしていません。 このメソッドを TokyoTyrantTable でコールするとエラーと見なされ、 TokyoTyrantException をスローします。</p>
		 * @param mixed $keys <p>文字列のキー、あるいは key-value ペアの配列。</p>
		 * @param string $value <p>文字列の値。</p>
		 * @return void <p>このメソッドは、テーブルデータベースではサポートしていません。 このメソッドを TokyoTyrantTable でコールするとエラーと見なされ、 TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.putnr.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putNr($keys, string $value = NULL): void {}

		/**
		 * レコードを連結する
		 * <p>このメソッドは、テーブルデータベースではサポートしていません。 このメソッドを TokyoTyrantTable でコールするとエラーと見なされ、 TokyoTyrantException をスローします。</p>
		 * @param string $key <p>文字列のキー。</p>
		 * @param string $value <p>連結する値。</p>
		 * @param int $width <p>レコードの幅。</p>
		 * @return void <p>このメソッドは、テーブルデータベースではサポートしていません。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.putshl.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function putShl(string $key, string $value, int $width): void {}

		/**
		 * Restore the database
		 * <p>Restore the database from the update log.</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $log_dir <p>Directory where the log is</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency: Default: <b><code>TRUE</code></b></p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/ja/tokyotyrant.restore.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function restore(string $log_dir, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * インデックスを設定する
		 * <p>指定したカラムにインデックスを設定します。 インデックスの型は、<b><code>TokyoTyrant::RDBIT_&#42;</code></b> 定数のいずれかで指定します。<b><code>TokyoTyrant::RDBIT_VOID</code></b> を渡すとインデックスを削除します。</p>
		 * @param string $column <p>カラム名。</p>
		 * @param int $type <p>インデックスの型。</p>
		 * @return mixed <p>このメソッドは現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyranttable.setindex.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setIndex(string $column, int $type) {}

		/**
		 * Set the replication master
		 * <p>Sets the replication master of the database</p><p>This method is not supported on 32bit platforms.</p>
		 * @param string $host <p>Hostname of the replication master. If <b><code>NULL</code></b> the replication is disabled.</p>
		 * @param int $port <p>Port of the replication master</p>
		 * @param int $timestamp <p>Beginning timestamp with microseconds</p>
		 * @param bool $check_consistency <p>Whether to check consistency.</p>
		 * @return mixed <p>This method returns the current object and throws TokyoTyrantException on failure.</p>
		 * @link https://php.net/manual/ja/tokyotyrant.setmaster.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function setMaster(string $host, int $port, int $timestamp, bool $check_consistency = TRUE) {}

		/**
		 * 値のサイズを返す
		 * <p>指定したキーに対応する値のサイズを返します。</p>
		 * @param string $key <p>サイズを調べたいキー。</p>
		 * @return int <p>値のサイズを返します。エラー時には TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.size.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function size(string $key): int {}

		/**
		 * 統計情報を取得する
		 * <p>リモートデータベースの統計情報を取得します。</p>
		 * @return array <p>統計情報をあらわす key-value ペアの配列を返します。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.stat.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function stat(): array {}

		/**
		 * データベースを同期させる
		 * <p>データベースを物理デバイスに同期させます。</p>
		 * @return mixed <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.sync.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function sync() {}

		/**
		 * 接続の値を調節する
		 * <p>データベースの接続オプションを調節します。</p>
		 * @param float $timeout <p>オブジェクトのタイムアウト値 (デフォルトは 5.0)。</p>
		 * @param int $options <p>調節するオプションのビットマスク。0 あるいは <b><code>TokyoTyrant::RDBT_RECON</code></b> とすることができます。このパラメータは変更しないことを推奨します。</p>
		 * @return TokyoTyrant <p>このメソッドは現在のオブジェクトへの参照を返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.tune.php
		 * @since PECL tokyo_tyrant >= 0.2.0
		 */
		public function tune(float $timeout, int $options = TokyoTyrant::RDBT_RECON): \TokyoTyrant {}

		/**
		 * データベースを空にする
		 * <p>リモートデータベースを空にします。</p>
		 * @return mixed <p>現在のオブジェクトを返します。失敗した場合は TokyoTyrantException をスローします。</p>
		 * @link https://php.net/manual/ja/tokyotyrant.vanish.php
		 * @since PECL tokyo_tyrant >= 0.1.0
		 */
		public function vanish() {}
	}

}
