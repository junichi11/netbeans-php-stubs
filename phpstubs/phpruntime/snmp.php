<?php



namespace {

	/**
	 * <p>SNMP セッションを表します。</p>
	 * @link https://php.net/manual/ja/class.snmp.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class SNMP {

		/**
		 * @var int <p>GET/SET/GETBULK リクエスト単位の最大の OID</p>
		 * @link https://php.net/manual/ja/class.snmp.php#snmp.props.max-oids
		 */
		public $max_oids;

		/**
		 * @var int <p>SNMP の値を返す方法</p>    <b><code>SNMP_VALUE_LIBRARY</code></b> Net-SNMP ライブラリの返す値を返します。   <b><code>SNMP_VALUE_PLAIN</code></b> SNMP 型ヒントを含まないプレーンな値を返します。   <b><code>SNMP_VALUE_OBJECT</code></b>  オブジェクトを返します。このオブジェクトはプロパティ "value" および "type" を持ち、後者のプロパティの値は SNMP_OCTET_STR, SNMP_COUNTER などの定数となります。 "value" の中身は <b><code>SNMP_VALUE_LIBRARY</code></b> と <b><code>SNMP_VALUE_PLAIN</code></b> のどちらが設定されているかによって変わります。
		 * @link https://php.net/manual/ja/class.snmp.php#snmp.props.valueretrieval
		 */
		public $valueretrieval;

		/**
		 * @var bool <p>NET-SNMP ライブラリ内の <code>quick_print</code> の値</p> <p>NET-SNMP ライブラリ内の <code>quick_print</code> の値を指定します。 これを (1 に) 設定すると、SNMP ライブラリは「手早く表示」した値を返します。 つまり、単なる値だけを表示するということです。<code>quick_print</code> を有効にしなければ (デフォルト)、UCD SNMP ライブラリは追加情報 (値の型、たとえば IpAddress や OID) も表示します。 さらに、quick_print が有効でない場合は、三文字以下のすべての文字列に対して追加の十六進値を表示します。</p>
		 * @link https://php.net/manual/ja/class.snmp.php#snmp.props.quick-print
		 */
		public $quick_print;

		/**
		 * @var bool <p>enum 値の表示方法</p> <p>walk や get などが、自動的に MIB 内の enum 値の元をたどって その値も可読形式の文字列にするかどうかを設定します。</p>
		 * @link https://php.net/manual/ja/class.snmp.php#snmp.props.enum-print
		 */
		public $enum_print;

		/**
		 * @var int <p>OID の出力フォーマットの制御</p>  <b>oid_output_format の値による、OID .1.3.6.1.2.1.1.3.0 の表示方法の変化</b>   <b><code>SNMP_OID_OUTPUT_FULL</code></b> .iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_NUMERIC</code></b> .1.3.6.1.2.1.1.3.0   <b><code>SNMP_OID_OUTPUT_MODULE</code></b> DISMAN-EVENT-MIB::sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_SUFFIX</code></b> sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_UCD</code></b> system.sysUpTime.sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_NONE</code></b> Undefined
		 * @link https://php.net/manual/ja/class.snmp.php#snmp.props.oid-output-format
		 */
		public $oid_output_format;

		/**
		 * @var bool <p>OID ツリーを走査中の OID 増加チェックの無効化</p> <p>SNMP エージェントの中には、 OID を返す順番がおかしくても走査はできるというものがあります。 それ以外のエージェントの場合、OID を返す順番がおかしくなると <code>SNMP::walk()</code> が無限ループになり、 メモリを食いつぶしてしまいます。PHP の SNMP ライブラリは、 デフォルトで OID の増加チェックを行い、もし OID ツリーの走査中に OID が増加しないパターンがあればそこで走査を終了します。 oid_increasing_check を <b><code>FALSE</code></b> にすると、このチェックが無効になります。</p>
		 * @link https://php.net/manual/ja/class.snmp.php#snmp.props.oid-increasing-check
		 */
		public $oid_increasing_check;

		/**
		 * @var int <p>警告ではなく SNMPException を発生させるのがどの失敗なのかを設定します。 Use bitwise OR'ed <b><code>SNMP::ERRNO_&#42;</code></b> constants. By default all SNMP exceptions are disabled.</p>
		 * @link https://php.net/manual/ja/class.snmp.php#snmp.props.exceptions-enabled
		 */
		public $exceptions_enabled;

		/**
		 * @var array <p>読み込み専用のプロパティで、リモートエージェントの設定を表します。 ホスト名やポート、デフォルトのタイムアウト、デフォルトの再試行回数を含みます。</p>
		 * @link https://php.net/manual/ja/class.snmp.php#snmp.props.info
		 */
		public $info;

		/**
		 * @var integer <p>SNMP に関するエラーは発生していません。</p>
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const ERRNO_NOERROR = 0;

		/**
		 * @var integer <p>SNMP のエラーが発生しました。</p>
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const ERRNO_GENERIC = 2;

		/**
		 * @var integer <p>SNMP エージェントへのリクエストがタイムアウトしました。</p>
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const ERRNO_TIMEOUT = 4;

		/**
		 * @var integer <p>SNMP エージェントがエラーの応答を返しました。</p>
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const ERRNO_ERROR_IN_REPLY = 8;

		/**
		 * @var integer <p>SNMP エージェントが、(BULK)WALK コマンドの実行中に前の OID から増加していない OID に当たりました。 リモート SNMP エージェントが偽物である可能性があります。</p>
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const ERRNO_OID_NOT_INCREASING = 16;

		/**
		 * @var integer <p>OID (や SET コマンドの型) のパースに失敗しました。 クエリは作成されませんでした。</p>
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const ERRNO_OID_PARSING_ERROR = 32;

		/**
		 * @var integer <p>要求された SET 操作で複数のクエリを使います。 この操作はトランザクション内の操作ではないので、 二番目以降のクエリに型や値の問題があれば失敗するかもしれません。</p>
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const ERRNO_MULTIPLE_SET_QUERIES = 64;

		/**
		 * @var integer <p>すべての SNMP::ERRNO_&#42; コードをビット OR したもの。</p>
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const ERRNO_ANY = 126;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const VERSION_1 = 0;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const VERSION_2C = 1;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const VERSION_2c = 1;

		/**
		 * @var integer
		 * @link https://php.net/manual/ja/class.snmp.php
		 */
		const VERSION_3 = 3;

		/**
		 * リモート SNMP エージェントへのセッションを表す SNMP インスタンスを作成する
		 * <p>The function description goes here.</p>
		 * @param int $version <p>SNMP プロトコルのバージョン。 <b><code>SNMP::VERSION_1</code></b>、 <b><code>SNMP::VERSION_2C</code></b> あるいは <b><code>SNMP::VERSION_3</code></b>。</p>
		 * @param string $hostname <p>SNMP エージェント。<code>hostname</code> には、オプションでコロンに続けて SNMP エージェントのポートを指定できます。 IPv6 アドレスでポートを指定する場合は、アドレス部を角括弧で囲まなければなりません。 <code>hostname</code> で FQDN を使うと、その解決に使われるのは php-snmp ライブラリであり、Net-SNMP エンジンは使いません。 FQDN を指定するときに IPv6 アドレスを使うには、FQDN を角括弧で囲まなければなりません。 いくつか例を示します。</p>   IPv4 (デフォルトのポート) 127.0.0.1   IPv6 (デフォルトのポート) ::1 あるいは [::1]   IPv4 (ポートを指定) 127.0.0.1:1161   IPv6 (ポートを指定) [::1]:1161   FQDN (デフォルトのポート) host.domain   FQDN (ポートを指定) host.domain:1161   FQDN (デフォルトのポート)、IPv6 アドレスを強制 [host.domain]   FQDN (ポートを指定)、IPv6 アドレスを強制 [host.domain]:1161
		 * @param string $community <p><code>community</code> の目的は SNMP のバージョンによって異なります。</p>    SNMP::VERSION_1  SNMP コミュニティ   SNMP::VERSION_2C  SNMP コミュニティ   SNMP::VERSION_3  SNMPv3 セキュリティ名
		 * @param int $timeout <p>最初のタイムアウトまでのミリ秒数。</p>
		 * @param int $retries <p>タイムアウト発生時の再試行回数。</p>
		 * @return self <p>リモート SNMP エージェントを表す SNMP オブジェクトを返します。</p>
		 * @link https://php.net/manual/ja/snmp.construct.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function __construct(int $version, string $hostname, string $community, int $timeout = 1000000, int $retries = 5) {}

		/**
		 * SNMP セッションを閉じる
		 * <p>SNMP セッションオブジェクトを閉じます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/snmp.close.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function close(): bool {}

		/**
		 * SNMP オブジェクトを取得する
		 * <p><code>object_id</code> で指定した SNMP オブジェクトを GET クエリで取得します。</p>
		 * @param mixed $object_id <p>SNMP オブジェクト (OID)。</p>
		 * @param bool $preserve_keys <p><code>object_id</code> が配列のときに <code>preserve_keys</code> を <b><code>TRUE</code></b> にすると、結果のキーは完全に <code>object_id</code> となります。 それ以外の場合は SNMP::oid_output_format プロパティを使ってキーの形式を判断します。</p>
		 * @return mixed <p><code>object_id</code> で指定した SNMP オブジェクトの値を <code>object_id</code> にあわせて文字列か配列で返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/snmp.get.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function get($object_id, bool $preserve_keys = FALSE) {}

		/**
		 * 直近のエラーコードを取得する
		 * <p>直近の SNMP リクエストのエラーコードを返します。</p>
		 * @return int <p>定数のページで説明した SNMP エラーコードのいずれかを返します。</p>
		 * @link https://php.net/manual/ja/snmp.geterrno.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getErrno(): int {}

		/**
		 * 直近のエラーメッセージを取得する
		 * <p>直近の SNMP リクエストのエラー文字列を返します。</p>
		 * @return string <p>直近の SNMP リクエストからのエラーを表す文字列を返します。</p>
		 * @link https://php.net/manual/ja/snmp.geterror.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getError(): string {}

		/**
		 * 指定したオブジェクト ID に続く SNMP オブジェクトを取得する
		 * <p><code>object_id</code> で指定したオブジェクトに続く SNMP オブジェクトの値を取得します。</p>
		 * @param mixed $object_id <p>SNMP オブジェクト (OID)。</p>
		 * @return mixed <p>SNMP オブジェクトの値を <code>object_id</code> にあわせて文字列か配列で返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/snmp.getnext.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function getnext($object_id) {}

		/**
		 * SNMP オブジェクトの値を設定する
		 * <p>リモート SNMP エージェントに対して、 <code>object_id</code> で指定した SNMP オブジェクトの値を設定させます。</p>
		 * @param mixed $object_id <p>SNMP オブジェクト ID。</p> <p>object_id 配列の OID 数がオブジェクトの max_oids プロパティより多ければ、set メソッドは複数のクエリで値の更新をしなければなりません。 この場合、型や値のチェックはチャンク単位で行われるので、 二番目以降のクエリでリクエストする ODI に対して型や値の問題があれば失敗するかもしれません。 そのため、object_id 配列の OID 数が max_oids プロパティより多いときには警告が発生します。</p>
		 * @param mixed $type <p>The MIB defines the type of each object id. It has to be specified as a single character from the below list.</p>  <b>types</b>   = The type is taken from the MIB   i INTEGER   u INTEGER   s STRING   x HEX STRING   d DECIMAL STRING   n NULLOBJ   o OBJID   t TIMETICKS   a IPADDRESS   b BITS    <p>If <b><code>OPAQUE_SPECIAL_TYPES</code></b> was defined while compiling the SNMP library, the following are also valid:</p>  <b>types</b>   U unsigned int64   I signed int64   F float   D double    <p>これらの大半は、対応する ASN.1 の型を使います。's', 'x', 'd' および 'b' はどれも OCTET STRING を異なる方法で表したものであり、'u' も Gauge32 値を扱うためのものです。</p> <p>MIB ファイルが "snmp_read_mib" や libsnmp の設定で MIB ツリーに読み込まれている場合は、 <code>type</code> に '=' を使うことができます。 これはすべてのオブジェクト ID を表し、型は自動的に MIB から読み込みます。</p> <p>"SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}" のような BITS 型の値変数を設定する方法は二通りあることに注意しましょう。</p> <ul> <li>  型として "b" を使い、ビット番号の一覧を指定する。この方法はおすすめしません。 同じ OID に対して GET クエリを実行しても 0xF8 などを返すからです。  </li> <li>  Using type "x" and a hex number but without(!) the usual "0x" prefix. 型として "x" を使い、通常のプレフィックス "0x" をつけずに(!) 16 進数を指定する。  </li> </ul> <p>詳細は、サンプルを参照ください。</p>
		 * @param mixed $value <p>新しい値。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/snmp.set.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function set($object_id, $type, $value): bool {}

		/**
		 * セキュリティ関連の SNMPv3 セッションパラメータを設定する
		 * <p>setSecurity は、 SNMP プロトコルバージョン 3 で使うセキュリティ関連のセッションパラメータを設定します。</p>
		 * @param string $sec_level <p>セキュリティレベル (noAuthNoPriv|authNoPriv|authPriv)。</p>
		 * @param string $auth_protocol <p>認証プロトコル (MD5 あるいは SHA)。</p>
		 * @param string $auth_passphrase <p>認証パスフレーズ。</p>
		 * @param string $priv_protocol <p>プライバシープロトコル (DES あるいは AES)。</p>
		 * @param string $priv_passphrase <p>プライバシーパスフレーズ。</p>
		 * @param string $contextName <p>コンテキスト名。</p>
		 * @param string $contextEngineID <p>コンテキスト EngineID。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/snmp.setsecurity.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function setSecurity(string $sec_level, string $auth_protocol = null, string $auth_passphrase = null, string $priv_protocol = null, string $priv_passphrase = null, string $contextName = null, string $contextEngineID = null) {}

		/**
		 * SNMP オブジェクトのサブツリーを取得する
		 * <p><b>SNMP::walk()</b> を使い、 指定した <code>object_id</code> を起点とする SNMP サブツリーを読み込みます。</p>
		 * @param string $object_id <p>取得するサブツリーのルート。</p>
		 * @param bool $suffix_as_key <p>デフォルトでは、完全な OID 記法を出力配列のキーとして使います。 <b><code>TRUE</code></b> にすると、サブツリーのプレフィックスはキーから取り除き、 object_id のサフィックスだけを残します。</p>
		 * @param int $max_repetitions <p>これは、繰り返す変数の反復処理の最大数を指定します。 デフォルトは、SNMP オブジェクトでの設定を使います。</p>
		 * @param int $non_repeaters <p>これは、渡された変数の中で反復処理の対象外とする変数の数を指定します。 デフォルトは、SNMP オブジェクトでの設定を使います。</p>
		 * @return array <p>成功した場合は SNMP オブジェクトの ID とその値の連想配列を返します。エラー時には <b><code>FALSE</code></b> を返します。 SNMP エラーが発生した場合は、<code>SNMP::getErrno()</code> および <code>SNMP::getError()</code> を使えばエラー番号(SNMP 拡張モジュールで設定したもの。クラス定数を参照) とエラーメッセージをそれぞれ取得できます。</p>
		 * @link https://php.net/manual/ja/snmp.walk.php
		 * @since PHP 5 >= 5.4.0, PHP 7
		 */
		public function walk(string $object_id, bool $suffix_as_key = FALSE, int $max_repetitions = NULL, int $non_repeaters = NULL): array {}
	}

	/**
	 * <p>SNMP で発生するエラーを表します。自分のコードから <b>SNMPException</b> をスローしてはいけません。 PHP における例外処理の詳細な情報は 例外 を参照ください。</p>
	 * @link https://php.net/manual/ja/class.snmpexception.php
	 * @since PHP 5 >= 5.4.0, PHP 7
	 */
	class SNMPException extends \RuntimeException {

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
	 * SNMP オブジェクトを取得する
	 * <p><b>snmp2_get()</b> 関数は、 <code>object_id</code> で指定した SNMP オブジェクトの値を取得します。</p>
	 * @param string $host <p>SNMP エージェント。</p>
	 * @param string $community <p>リードコミュニティ。</p>
	 * @param string $object_id <p>SNMP オブジェクト。</p>
	 * @param string $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param string $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return string <p>成功した場合に SNMP オブジェクトの値、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.snmp2-get.php
	 * @see snmp2_set()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function snmp2_get(string $host, string $community, string $object_id, string $timeout = '1000000', string $retries = '5'): string {}

	/**
	 * 指定したオブジェクト ID に続く SNMP オブジェクトを取得する
	 * <p><b>snmp2_get_next()</b> 関数は、 <code>object_id</code> で指定したオブジェクトに続く SNMP オブジェクトの値を取得します。</p>
	 * @param string $host <p>SNMP エージェント (サーバー) のホスト名。</p>
	 * @param string $community <p>リードコミュニティ。</p>
	 * @param string $object_id <p>前にある SNMP オブジェクトの ID。</p>
	 * @param string $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param string $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return string <p>成功した場合に SNMP オブジェクトの値、エラー時に <b><code>FALSE</code></b> を返します。 エラー時には E_WARNING が発生します。</p>
	 * @link https://php.net/manual/ja/function.snmp2-getnext.php
	 * @see snmp2_get(), snmp2_walk()
	 * @since PHP >= 5.2.0
	 */
	function snmp2_getnext(string $host, string $community, string $object_id, string $timeout = '1000000', string $retries = '5'): string {}

	/**
	 * 指定したすべてのオブジェクトとそのオブジェクト ID を返す
	 * <p><b>snmp2_real_walk()</b> 関数は、 <code>object_id</code> から始まる SNMP オブジェクトを走査し、その値とオブジェクト ID を返します。</p>
	 * @param string $host <p>SNMP エージェント (サーバー) のホスト名。</p>
	 * @param string $community <p>リードコミュニティ。</p>
	 * @param string $object_id <p>前にある SNMP オブジェクト ID。</p>
	 * @param string $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param string $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return array <p>成功した場合に SNMP オブジェクト ID とその値の連想配列。エラー時に <b><code>FALSE</code></b> を返します。 エラー時には E_WARNING が発生します。</p>
	 * @link https://php.net/manual/ja/function.snmp2-real-walk.php
	 * @see snmp2_walk()
	 * @since PHP >= 5.2.0
	 */
	function snmp2_real_walk(string $host, string $community, string $object_id, string $timeout = '1000000', string $retries = '5'): array {}

	/**
	 * SNMP オブジェクトの値を設定する
	 * <p><b>snmp2_set()</b> は、 <code>object_id</code> で指定した SNMP オブジェクトの値を設定します。</p>
	 * @param string $host <p>SNMP エージェント (サーバー) のホスト名。</p>
	 * @param string $community <p>ライトコミュニティ。</p>
	 * @param string $object_id <p>SNMP オブジェクト ID。</p>
	 * @param string $type <p>The MIB defines the type of each object id. It has to be specified as a single character from the below list.</p>  <b>types</b>   = The type is taken from the MIB   i INTEGER   u INTEGER   s STRING   x HEX STRING   d DECIMAL STRING   n NULLOBJ   o OBJID   t TIMETICKS   a IPADDRESS   b BITS    <p>If <b><code>OPAQUE_SPECIAL_TYPES</code></b> was defined while compiling the SNMP library, the following are also valid:</p>  <b>types</b>   U unsigned int64   I signed int64   F float   D double    <p>これらの大半は、対応する ASN.1 の型を使います。's', 'x', 'd' および 'b' はどれも OCTET STRING を異なる方法で表したものであり、'u' も Gauge32 値を扱うためのものです。</p> <p>MIB ファイルが "snmp_read_mib" や libsnmp の設定で MIB ツリーに読み込まれている場合は、 <code>type</code> に '=' を使うことができます。 これはすべてのオブジェクト ID を表し、型は自動的に MIB から読み込みます。</p> <p>"SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}" のような BITS 型の値変数を設定する方法は二通りあることに注意しましょう。</p> <ul> <li>  型として "b" を使い、ビット番号の一覧を指定する。この方法はおすすめしません。 同じ OID に対して GET クエリを実行しても 0xF8 などを返すからです。  </li> <li>  Using type "x" and a hex number but without(!) the usual "0x" prefix. 型として "x" を使い、通常のプレフィックス "0x" をつけずに(!) 16 進数を指定する。  </li> </ul> <p>詳細は、サンプルを参照ください。</p>
	 * @param string $value <p>新しい値。</p>
	 * @param string $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param string $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>SNMP ホストがデータ型を却下すると、"Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." のような’ E_WARNING メッセージが表示されます。未知の OID あるいは無効な OID を指定した場合は、おそらく "Could not add variable" のような警告となります。</p>
	 * @link https://php.net/manual/ja/function.snmp2-set.php
	 * @see snmp2_get()
	 * @since PHP >= 5.2.0
	 */
	function snmp2_set(string $host, string $community, string $object_id, string $type, string $value, string $timeout = '1000000', string $retries = '5'): bool {}

	/**
	 * すべての SNMP オブジェクトをエージェントから取得する
	 * <p><b>snmp2_walk()</b> は、 <code>hostname</code> で指定した SNMP エージェントからすべての値を読み込みます。</p>
	 * @param string $host <p>SNMP エージェント (サーバー)。</p>
	 * @param string $community <p>リードコミュニティ。</p>
	 * @param string $object_id <p><b><code>NULL</code></b> の場合は <code>object_id</code> は SNMP オブジェクトツリーのルートとなり、 ツリー配下のすべてのオブジェクトを配列で返します。</p> <p><code>object_id</code> を指定すると、 その <code>object_id</code> 以下のすべての SNMP オブジェクトを返します。</p>
	 * @param string $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param string $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return array <p><code>object_id</code> をルートとするすべての SNMP オブジェクトの値の配列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.snmp2-walk.php
	 * @see snmp2_real_walk()
	 * @since PHP >= 5.2.0
	 */
	function snmp2_walk(string $host, string $community, string $object_id, string $timeout = '1000000', string $retries = '5'): array {}

	/**
	 * SNMP オブジェクトを取得する
	 * <p><b>snmp3_get()</b> 関数は、 <code>object_id</code> で指定した SNMP オブジェクトの値を取得します。</p>
	 * @param string $host <p>SNMP エージェント (サーバー) のホスト名。</p>
	 * @param string $sec_name <p>セキュリティ名。通常はユーザー名のようなもの。</p>
	 * @param string $sec_level <p>セキュリティレベル (noAuthNoPriv|authNoPriv|authPriv)。</p>
	 * @param string $auth_protocol <p>認証プロトコル (MD5 あるいは SHA)。</p>
	 * @param string $auth_passphrase <p>認証パスフレーズ。</p>
	 * @param string $priv_protocol <p>プライバシープロトコル (DES あるいは AES)。</p>
	 * @param string $priv_passphrase <p>プライバシーパスフレーズ。</p>
	 * @param string $object_id <p>SNMP オブジェクト ID。</p>
	 * @param string $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param string $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return string <p>成功した場合に SNMP オブジェクトの値、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.snmp3-get.php
	 * @see snmp3_set()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp3_get(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $timeout = '1000000', string $retries = '5'): string {}

	/**
	 * 指定したオブジェクト ID に続く SNMP オブジェクトを取得する
	 * <p><b>snmp3_getnext()</b> 関数は、 <code>object_id</code> で指定したオブジェクトに続く SNMP オブジェクトの値を取得します。</p>
	 * @param string $host <p>SNMP エージェント (サーバー) のホスト名。</p>
	 * @param string $sec_name <p>セキュリティ名。通常はユーザー名のようなもの。</p>
	 * @param string $sec_level <p>セキュリティレベル (noAuthNoPriv|authNoPriv|authPriv)。</p>
	 * @param string $auth_protocol <p>認証プロトコル (MD5 あるいは SHA)。</p>
	 * @param string $auth_passphrase <p>認証パスフレーズ。</p>
	 * @param string $priv_protocol <p>プライバシープロトコル (DES あるいは AES)。</p>
	 * @param string $priv_passphrase <p>プライバシーパスフレーズ。</p>
	 * @param string $object_id <p>SNMP オブジェクト ID。</p>
	 * @param string $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param string $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return string <p>成功した場合に SNMP オブジェクトの値、エラー時に <b><code>FALSE</code></b> を返します。 エラー時には E_WARNING が発生します。</p>
	 * @link https://php.net/manual/ja/function.snmp3-getnext.php
	 * @see snmp3_get(), snmp3_walk()
	 * @since PHP 5, PHP 7
	 */
	function snmp3_getnext(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $timeout = '1000000', string $retries = '5'): string {}

	/**
	 * 指定したすべてのオブジェクトとそのオブジェクト ID を返す
	 * <p><b>snmp3_real_walk()</b> 関数は、 <code>object_id</code> から始まる SNMP オブジェクトを走査し、その値とオブジェクト ID を返します。</p>
	 * @param string $host <p>SNMP エージェント (サーバー) のホスト名。</p>
	 * @param string $sec_name <p>セキュリティ名。通常はユーザー名のようなもの。</p>
	 * @param string $sec_level <p>セキュリティレベル (noAuthNoPriv|authNoPriv|authPriv)。</p>
	 * @param string $auth_protocol <p>認証プロトコル (MD5 あるいは SHA)。</p>
	 * @param string $auth_passphrase <p>認証パスフレーズ。</p>
	 * @param string $priv_protocol <p>プライバシープロトコル (DES あるいは AES)。</p>
	 * @param string $priv_passphrase <p>プライバシーパスフレーズ。</p>
	 * @param string $object_id <p>SNMP オブジェクト ID。</p>
	 * @param string $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param string $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return array <p>成功した場合に SNMP オブジェクト ID とその値の連想配列。エラー時に <b><code>FALSE</code></b> を返します。 エラー時には E_WARNING が発生します。</p>
	 * @link https://php.net/manual/ja/function.snmp3-real-walk.php
	 * @see snmpwalk()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp3_real_walk(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $timeout = '1000000', string $retries = '5'): array {}

	/**
	 * SNMP オブジェクトの値を設定する
	 * <p><b>snmp3_set()</b> は、 <code>object_id</code> で指定した SNMP オブジェクトの値を設定します。</p><p>セキュリティレベルに auth や priv を使っていなくても、 protocol/password には有効な値を指定しなくてはなりません。</p>
	 * @param string $host <p>SNMP エージェント (サーバー) のホスト名。</p>
	 * @param string $sec_name <p>セキュリティ名。通常はユーザー名のようなもの。</p>
	 * @param string $sec_level <p>セキュリティレベル (noAuthNoPriv|authNoPriv|authPriv)。</p>
	 * @param string $auth_protocol <p>認証プロトコル (MD5 あるいは SHA)。</p>
	 * @param string $auth_passphrase <p>認証パスフレーズ。</p>
	 * @param string $priv_protocol <p>プライバシープロトコル (DES あるいは AES)。</p>
	 * @param string $priv_passphrase <p>プライバシーパスフレーズ。</p>
	 * @param string $object_id <p>SNMP オブジェクト ID。</p>
	 * @param string $type <p>The MIB defines the type of each object id. It has to be specified as a single character from the below list.</p>  <b>types</b>   = The type is taken from the MIB   i INTEGER   u INTEGER   s STRING   x HEX STRING   d DECIMAL STRING   n NULLOBJ   o OBJID   t TIMETICKS   a IPADDRESS   b BITS    <p>If <b><code>OPAQUE_SPECIAL_TYPES</code></b> was defined while compiling the SNMP library, the following are also valid:</p>  <b>types</b>   U unsigned int64   I signed int64   F float   D double    <p>これらの大半は、対応する ASN.1 の型を使います。's', 'x', 'd' および 'b' はどれも OCTET STRING を異なる方法で表したものであり、'u' も Gauge32 値を扱うためのものです。</p> <p>MIB ファイルが "snmp_read_mib" や libsnmp の設定で MIB ツリーに読み込まれている場合は、 <code>type</code> に '=' を使うことができます。 これはすべてのオブジェクト ID を表し、型は自動的に MIB から読み込みます。</p> <p>"SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}" のような BITS 型の値変数を設定する方法は二通りあることに注意しましょう。</p> <ul> <li>  型として "b" を使い、ビット番号の一覧を指定する。この方法はおすすめしません。 同じ OID に対して GET クエリを実行しても 0xF8 などを返すからです。  </li> <li>  Using type "x" and a hex number but without(!) the usual "0x" prefix. 型として "x" を使い、通常のプレフィックス "0x" をつけずに(!) 16 進数を指定する。  </li> </ul> <p>詳細は、サンプルを参照ください。</p>
	 * @param string $value <p>新しい値。</p>
	 * @param int $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param int $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>SNMP ホストがデータ型を却下すると、"Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." のような’ E_WARNING メッセージが表示されます。未知の OID あるいは無効な OID を指定した場合は、おそらく "Could not add variable" のような警告となります。</p>
	 * @link https://php.net/manual/ja/function.snmp3-set.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp3_set(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $type, string $value, int $timeout = 1000000, int $retries = 5): bool {}

	/**
	 * すべての SNMP オブジェクトをエージェントから取得する
	 * <p><b>snmp3_walk()</b> 関数は、 <code>hostname</code> で指定した SNMP エージェントからすべての値を読み込みます。</p><p>セキュリティレベルに auth や priv を使っていなくても、 protocol/password には有効な値を指定しなくてはなりません。</p>
	 * @param string $host <p>SNMP エージェント (サーバー) のホスト名。</p>
	 * @param string $sec_name <p>セキュリティ名。通常はユーザー名のようなもの。</p>
	 * @param string $sec_level <p>セキュリティレベル (noAuthNoPriv|authNoPriv|authPriv)。</p>
	 * @param string $auth_protocol <p>認証プロトコル (MD5 あるいは SHA)。</p>
	 * @param string $auth_passphrase <p>認証パスフレーズ。</p>
	 * @param string $priv_protocol <p>プライバシープロトコル (DES あるいは AES)。</p>
	 * @param string $priv_passphrase <p>プライバシーパスフレーズ。</p>
	 * @param string $object_id <p><b><code>NULL</code></b> の場合は <code>object_id</code> は SNMP オブジェクトツリーのルートとなり、 ツリー配下のすべてのオブジェクトを配列で返します。</p> <p><code>object_id</code> を指定すると、 その <code>object_id</code> 以下のすべての SNMP オブジェクトを返します。</p>
	 * @param string $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param string $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return array <p><code>object_id</code> をルートとするすべての SNMP オブジェクトの値の配列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.snmp3-walk.php
	 * @see snmp3_real_walk()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp3_walk(string $host, string $sec_name, string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $object_id, string $timeout = '1000000', string $retries = '5'): array {}

	/**
	 * UCD ライブラリの quick_print の現在の設定値を取得する
	 * <p>UCD ライブラリに保持された quick_print の現在の値を返します。 デフォルトでは、quick_print はオフです。</p>
	 * @return bool <p>quick_print がオンの場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.snmp-get-quick-print.php
	 * @see snmp_set_quick_print()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp_get_quick_print(): bool {}

	/**
	 * SNMP の値が返される方法を返す
	 * @return int <p>OR でつないだ定数 ( <b><code>SNMP_VALUE_LIBRARY</code></b> あるいは <b><code>SNMP_VALUE_PLAIN</code></b>) に、場合によって SNMP_VALUE_OBJECT を組み合わせて返します。</p>
	 * @link https://php.net/manual/ja/function.snmp-get-valueretrieval.php
	 * @see snmp_set_valueretrieval()
	 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
	 */
	function snmp_get_valueretrieval(): int {}

	/**
	 * アクティブな MIB ツリーの中に MIB ファイルを読み込んでパースする
	 * <p>この関数は、ベンダー固有などの追加の MIB を読み込んで、VENDOR-MIB::foo.1 のような可読形式の OID を取得します。</p><p>MIB を読み込む順序は重要で、参照先のオブジェクトが解決できなければ Net-SNMP ライブラリが警告を表示します。</p>
	 * @param string $filename <p>MIB のファイル名。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.snmp-read-mib.php
	 * @since PHP 5, PHP 7
	 */
	function snmp_read_mib(string $filename): bool {}

	/**
	 * すべての enum を、実際の整数値ではなく enum 値とともに返す
	 * <p>この関数は、snmpwalk/snmpget などが自動的に MIB の enum 値を探して可読形式の文字列で返すかどうかを切り替えます。</p>
	 * @param int $enum_print <p>この値は boolean として Net-SNMP ライブラリが解釈します。"0" あるいは "1" しか指定できません。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.snmp-set-enum-print.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function snmp_set_enum_print(int $enum_print): bool {}

	/**
	 * OID の出力フォーマットを設定する
	 * <p>この関数は次の関数のエイリアスです。 <code>snmp_set_oid_output_format()</code></p>
	 * @param int $oid_format <b><code>oid_format</code> の値による OID .1.3.6.1.2.1.1.3.0 の表しかた</b>   <b><code>SNMP_OID_OUTPUT_FULL</code></b> .iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_NUMERIC</code></b> .1.3.6.1.2.1.1.3.0    <p>PHP 5.4.0 からはさらに 4 つの定数が使えるようになりました。</p>   <b><code>SNMP_OID_OUTPUT_MODULE</code></b> DISMAN-EVENT-MIB::sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_SUFFIX</code></b> sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_UCD</code></b> system.sysUpTime.sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_NONE</code></b> Undefined
	 * @return bool
	 * @link https://php.net/manual/ja/function.snmp-set-oid-numeric-print.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function snmp_set_oid_numeric_print(int $oid_format = SNMP_OID_OUTPUT_MODULE): bool {}

	/**
	 * OID の出力形式を設定する
	 * <p><b>snmp_set_oid_output_format()</b> は、 出力形式を完全か数値のいずれかに設定します。</p>
	 * @param int $oid_format <b><code>oid_format</code> の値による OID .1.3.6.1.2.1.1.3.0 の表しかた</b>   <b><code>SNMP_OID_OUTPUT_FULL</code></b> .iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_NUMERIC</code></b> .1.3.6.1.2.1.1.3.0    <p>PHP 5.4.0 からはさらに 4 つの定数が使えるようになりました。</p>   <b><code>SNMP_OID_OUTPUT_MODULE</code></b> DISMAN-EVENT-MIB::sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_SUFFIX</code></b> sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_UCD</code></b> system.sysUpTime.sysUpTimeInstance   <b><code>SNMP_OID_OUTPUT_NONE</code></b> Undefined
	 * @return bool <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.snmp-set-oid-output-format.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function snmp_set_oid_output_format(int $oid_format = SNMP_OID_OUTPUT_MODULE): bool {}

	/**
	 * UCB SNMP ライブラリで quick_print の値を設定する
	 * <p>UCB SNMP ライブラリで <code>quick_print</code> の値を設定します。この値を (1) に設定した場合、SNMP ライブラリは、'簡潔に表示された (quick printed)' 値を返します。 これは、値のみが出力されることを意味します。 <code>quick_print</code> が有効でない場合(デフォルト)、UCD SNMP ライブラリは、 (IP アドレスまたは OID のような)その値の種類を含む、より詳細な情報を 出力します。 加えて、quick_print が有効でない場合、ライブラリは 3 文字以下の全ての 文字列について 16 進数値も出力します。</p><p>デフォルトで、UCD SNMP ライブラリは冗長な値を返します。 quick_print は、値のみを返すために用いられます。</p><p>現在、文字列は引用符で括られて返されますが、 この動作は将来のリリースでは修正される予定です。</p>
	 * @param bool $quick_print
	 * @return bool <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.snmp-set-quick-print.php
	 * @see snmp_get_quick_print()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmp_set_quick_print(bool $quick_print): bool {}

	/**
	 * SNMP の値が返される方法を設定する
	 * @param int $method <b>型</b>   SNMP_VALUE_LIBRARY Net-SNMP ライブラリの返す形式のままで返します。   SNMP_VALUE_PLAIN SNMP の型ヒントを含まないプレーンな値を返します。   SNMP_VALUE_OBJECT  プロパティ "value" および "type" をもつオブジェクトを返します。 "type" は SNMP_OCTET_STR や SNMP_COUNTER などの定数のいずれかとなります。 "value" を返す方法は、定数 <b><code>SNMP_VALUE_LIBRARY</code></b>、<b><code>SNMP_VALUE_PLAIN</code></b> のどちらが設定されているかによって決まります。
	 * @return bool
	 * @link https://php.net/manual/ja/function.snmp-set-valueretrieval.php
	 * @see snmp_get_valueretrieval()
	 * @since PHP 4 >= 4.3.3, PHP 5, PHP 7
	 */
	function snmp_set_valueretrieval(int $method = SNMP_VALUE_LIBRARY): bool {}

	/**
	 * SNMP オブジェクトを取得する
	 * <p><b>snmpget()</b> は <code>object_id</code> で指定した SNMP オブジェクトの値を読みとるために使用されます。</p>
	 * @param string $hostname <p>SNMP エージェント。</p>
	 * @param string $community <p>リードコミュニティ。</p>
	 * @param string $object_id <p>SNMP オブジェクト。</p>
	 * @param int $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param int $retries <p>タイムアウトが発生したときの再試行の回数。</p>
	 * @return string <p>成功した場合に SNMP オブジェクトの値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.snmpget.php
	 * @see snmpset()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmpget(string $hostname, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): string {}

	/**
	 * 指定したオブジェクト ID に続く SNMP オブジェクトを取得する
	 * <p><b>snmpgetnext()</b> 関数は、 <code>object_id</code> で指定したオブジェクトに続く SNMP オブジェクトの値を取得します。</p>
	 * @param string $host <p>SNMP エージェント (サーバー) のホスト名。</p>
	 * @param string $community <p>リードコミュニティ。</p>
	 * @param string $object_id <p>前にある SNMP オブジェクトの ID。</p>
	 * @param int $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param int $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return string <p>成功した場合に SNMP オブジェクトの値、エラー時に <b><code>FALSE</code></b> を返します。 エラー時には E_WARNING が発生します。</p>
	 * @link https://php.net/manual/ja/function.snmpgetnext.php
	 * @see snmpget(), snmpwalk()
	 * @since PHP 5, PHP 7
	 */
	function snmpgetnext(string $host, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): string {}

	/**
	 * 指定したオブジェクトに関するオブジェクト ID を含むすべてのオブジェクトを返す
	 * <p><b>snmprealwalk()</b> 関数は、 <code>object_id</code> から始まる SNMP オブジェクトを走査し、その値とオブジェクト ID を返します。</p>
	 * @param string $host <p>SNMP エージェント (サーバー) のホスト名。</p>
	 * @param string $community <p>リードコミュニティ。</p>
	 * @param string $object_id <p>前にある SNMP オブジェクト ID。</p>
	 * @param int $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param int $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return array <p>成功した場合に SNMP オブジェクト ID とその値の連想配列。エラー時に <b><code>FALSE</code></b> を返します。 エラー時には E_WARNING が発生します。</p>
	 * @link https://php.net/manual/ja/function.snmprealwalk.php
	 * @see snmpwalk()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmprealwalk(string $host, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): array {}

	/**
	 * SNMP オブジェクトの値を設定する
	 * <p><b>snmpset()</b> 関数は、 <code>object_id</code>で指定した SNMP オブジェクトの 値を設定するために使用します。</p>
	 * @param string $host <p>SNMP エージェント (サーバー) のホスト名。</p>
	 * @param string $community <p>ライトコミュニティ。</p>
	 * @param string $object_id <p>SNMP オブジェクト ID。</p>
	 * @param string $type <p>The MIB defines the type of each object id. It has to be specified as a single character from the below list.</p>  <b>types</b>   = The type is taken from the MIB   i INTEGER   u INTEGER   s STRING   x HEX STRING   d DECIMAL STRING   n NULLOBJ   o OBJID   t TIMETICKS   a IPADDRESS   b BITS    <p>If <b><code>OPAQUE_SPECIAL_TYPES</code></b> was defined while compiling the SNMP library, the following are also valid:</p>  <b>types</b>   U unsigned int64   I signed int64   F float   D double    <p>これらの大半は、対応する ASN.1 の型を使います。's', 'x', 'd' および 'b' はどれも OCTET STRING を異なる方法で表したものであり、'u' も Gauge32 値を扱うためのものです。</p> <p>MIB ファイルが "snmp_read_mib" や libsnmp の設定で MIB ツリーに読み込まれている場合は、 <code>type</code> に '=' を使うことができます。 これはすべてのオブジェクト ID を表し、型は自動的に MIB から読み込みます。</p> <p>"SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}" のような BITS 型の値変数を設定する方法は二通りあることに注意しましょう。</p> <ul> <li>  型として "b" を使い、ビット番号の一覧を指定する。この方法はおすすめしません。 同じ OID に対して GET クエリを実行しても 0xF8 などを返すからです。  </li> <li>  Using type "x" and a hex number but without(!) the usual "0x" prefix. 型として "x" を使い、通常のプレフィックス "0x" をつけずに(!) 16 進数を指定する。  </li> </ul> <p>詳細は、サンプルを参照ください。</p>
	 * @param mixed $value <p>新しい値。</p>
	 * @param int $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param int $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>SNMP ホストがデータ型を却下すると、"Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." のような’ E_WARNING メッセージが表示されます。未知の OID あるいは無効な OID を指定した場合は、おそらく "Could not add variable" のような警告となります。</p>
	 * @link https://php.net/manual/ja/function.snmpset.php
	 * @see snmpget()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmpset(string $host, string $community, string $object_id, string $type, $value, int $timeout = 1000000, int $retries = 5): bool {}

	/**
	 * エージェントから全ての SNMP オブジェクトを取得する
	 * <p><b>snmpwalk()</b> 関数は、<code>hostname</code> で指定した SNMP エージェントから全ての値を読みとるのに使用します。</p>
	 * @param string $hostname <p>SNMP エージェント (サーバー)。</p>
	 * @param string $community <p>リードコミュニティ。</p>
	 * @param string $object_id <p><b><code>NULL</code></b> の場合は、<code>object_id</code> が SNMP オブジェクトツリーのルートとして解釈され、 ツリーの配下のすべてのオブジェクトを配列として返します。</p> <p><code>object_id</code> を指定した場合は、 その <code>object_id</code> の配下のすべての SNMP オブジェクトを返します。</p>
	 * @param int $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param int $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return array <p><b>object_id()</b> からの SNMP オブジェクトの値の配列をルートとして返します。 エラーの場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.snmpwalk.php
	 * @see snmprealwalk()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmpwalk(string $hostname, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): array {}

	/**
	 * ネットワークエンティティに関する情報ツリーを検索する
	 * <p><b>snmpwalkoid()</b> 関数は、<code>hostname</code> で指定した SNMP エージェントから すべてのオブジェクト ID とその値を読みこむために使用します。</p><p><b>snmpwalkoid()</b> および <code>snmpwalk()</code> は、歴史的経緯により残されているものです。 どちらも、下位互換のために提供されています。 代わりに <code>snmprealwalk()</code> を使用してください。</p>
	 * @param string $hostname <p>SNMP エージェント。</p>
	 * @param string $community <p>リードコミュニティ。</p>
	 * @param string $object_id <p><b><code>NULL</code></b> の場合は、<code>object_id</code> が SNMP オブジェクトツリーのルートとして解釈され、 ツリーの配下のすべてのオブジェクトを配列として返します。</p> <p><code>object_id</code> を指定した場合は、 その <code>object_id</code> の配下のすべての SNMP オブジェクトを返します。</p>
	 * @param int $timeout <p>最初のタイムアウトまでのマイクロ秒数。</p>
	 * @param int $retries <p>タイムアウト発生時の再試行回数。</p>
	 * @return array <p><b>object_id()</b> からの SNMP オブジェクトの値の配列をルートとして返します。 エラーの場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.snmpwalkoid.php
	 * @see snmpwalk()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function snmpwalkoid(string $hostname, string $community, string $object_id, int $timeout = 1000000, int $retries = 5): array {}

	define('SNMP_BIT_STR', null);

	define('SNMP_COUNTER', null);

	define('SNMP_COUNTER64', null);

	define('SNMP_INTEGER', null);

	define('SNMP_IPADDRESS', null);

	define('SNMP_NULL', null);

	define('SNMP_OBJECT_ID', null);

	define('SNMP_OCTET_STR', null);

	/**
	 * 5.2.0 以降
	 */
	define('SNMP_OID_OUTPUT_FULL', null);

	/**
	 * 5.4.0 以降
	 */
	define('SNMP_OID_OUTPUT_MODULE', null);

	/**
	 * 5.4.0 以降
	 */
	define('SNMP_OID_OUTPUT_NONE', null);

	/**
	 * 5.2.0 以降
	 */
	define('SNMP_OID_OUTPUT_NUMERIC', null);

	/**
	 * 5.4.0 以降
	 */
	define('SNMP_OID_OUTPUT_SUFFIX', null);

	/**
	 * 5.4.0 以降
	 */
	define('SNMP_OID_OUTPUT_UCD', null);

	define('SNMP_OPAQUE', null);

	define('SNMP_TIMETICKS', null);

	define('SNMP_UINTEGER', null);

	define('SNMP_UNSIGNED', null);

	define('SNMP_VALUE_LIBRARY', null);

	define('SNMP_VALUE_OBJECT', null);

	define('SNMP_VALUE_PLAIN', null);

}
