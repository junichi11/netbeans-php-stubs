<?php



namespace Gender {

	/**
	 * @link http://php.net/manual/ja/class.gender.php
	 * @since PECL gender >= 0.6.0
	 */
	class Gender {

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const IS_FEMALE = 70;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const IS_MOSTLY_FEMALE = 102;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const IS_MALE = 77;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const IS_MOSTLY_MALE = 109;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const IS_UNISEX_NAME = 63;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const IS_A_COUPLE = 67;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const NAME_NOT_FOUND = 32;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const ERROR_IN_NAME = 69;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const ANY_COUNTRY = 0;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const BRITAIN = 1;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const IRELAND = 2;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const USA = 3;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const SPAIN = 4;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const PORTUGAL = 5;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const ITALY = 6;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const MALTA = 7;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const FRANCE = 8;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const BELGIUM = 9;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const LUXEMBOURG = 10;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const NETHERLANDS = 11;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const GERMANY = 12;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const EAST_FRISIA = 13;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const AUSTRIA = 14;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const SWISS = 15;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const ICELAND = 16;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const DENMARK = 17;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const NORWAY = 18;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const SWEDEN = 19;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const FINLAND = 20;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const ESTONIA = 21;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const LATVIA = 22;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const LITHUANIA = 23;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const POLAND = 24;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const CZECH_REP = 25;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const SLOVAKIA = 26;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const HUNGARY = 27;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const ROMANIA = 28;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const BULGARIA = 29;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const BOSNIA = 30;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const CROATIA = 31;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const KOSOVO = 32;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const MACEDONIA = 33;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const MONTENEGRO = 34;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const SERBIA = 35;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const SLOVENIA = 36;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const ALBANIA = 37;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const GREECE = 38;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const RUSSIA = 39;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const BELARUS = 40;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const MOLDOVA = 41;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const UKRAINE = 42;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const ARMENIA = 43;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const AZERBAIJAN = 44;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const GEORGIA = 45;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const KAZAKH_UZBEK = 46;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const TURKEY = 47;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const ARABIA = 48;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const ISRAEL = 49;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const CHINA = 50;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const INDIA = 51;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const JAPAN = 52;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.gender.php
		 */
		const KOREA = 53;

		/**
		 * Gender オブジェクトを作る
		 * <p>Gender オブジェクトを作ります。オプションで、外部の名前ディレクトリに接続することもできます。 外部データベースを指定しなかったときは、コンパイル時に組み込まれたデータを使います。</p>
		 * @param string $dsn <p>開きたい DSN。</p>
		 * @return self
		 * @link http://php.net/manual/ja/gender-gender.construct.php
		 * @since PECL gender >= 0.6.0
		 */
		public function __construct(string $dsn = NULL) {}

		/**
		 * 外部の名前ディレクトリに接続する
		 * <p>外部の名前ディレクトリに接続します。 今のところ、サポートしているのはストリームだけです。</p>
		 * @param string $dsn <p>開きたい DSN。</p>
		 * @return boolean <p>成功したかどうかを boolean で返します。</p>
		 * @link http://php.net/manual/ja/gender-gender.connect.php
		 * @since PECL gender >= 0.6.0
		 */
		public function connect(string $dsn): bool {}

		/**
		 * 国を表すテキストを取得する
		 * <p>Gender クラスの定数から、国を表す文字列を取得します。</p>
		 * @param int $country <p>Gender\Gender クラスの定数で表される国 ID。</p>
		 * @return array <p>成功した場合は、短い国名と完全な国名の配列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link http://php.net/manual/ja/gender-gender.country.php
		 * @since PECL gender >= 0.8.0
		 */
		public function country(int $country): array {}

		/**
		 * 性別を取得する
		 * <p>指定した名前について、特定の国における性別を取得します。</p>
		 * @param string $name <p>調べたい名前。</p>
		 * @param int $country <p>Gender クラスの定数で表される国 ID。</p>
		 * @return integer <p>性別を返します。</p>
		 * @link http://php.net/manual/ja/gender-gender.get.php
		 * @since PECL gender >= 0.6.0
		 */
		public function get(string $name, int $country = NULL): int {}

		/**
		 * name0 が name1 のエイリアスかどうかを調べる
		 * <p>name0 が name1 のエイリアスかどうかを調べます。</p>
		 * @param string $name0 <p>調べる名前。</p>
		 * @param string $name1 <p>調べる名前。</p>
		 * @param int $country <p>Gender クラスの定数で指定する国 ID。省略した場合は ANY_COUNTRY を使います。</p>
		 * @return array <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link http://php.net/manual/ja/gender-gender.isnick.php
		 * @since PECL gender >= 0.9.0
		 */
		public function isNick(string $name0, string $name1, int $country = NULL): array {}

		/**
		 * 似た名前を取得する
		 * <p>名前と国を指定して、似た名前を取得します。</p>
		 * @param string $name <p>調べる名前。</p>
		 * @param int $country <p>Gender クラスの定数で指定する国 ID。省略した場合は ANY_COUNTRY を使います。</p>
		 * @return array <p>似ている名前の配列を返します。</p>
		 * @link http://php.net/manual/ja/gender-gender.similarnames.php
		 * @since PECL gender >= 0.9.0
		 */
		public function similarNames(string $name, int $country = NULL): array {}
	}

}
