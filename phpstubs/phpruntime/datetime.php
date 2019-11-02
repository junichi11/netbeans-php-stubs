<?php



namespace {

	/**
	 * <p>日付の間隔をあらわします。</p>
	 * <p>格納方式は、固定値 (年、月、日、時など) あるいは相対時刻 (DateTime のコンストラクタがサポートしている書式) となります。</p>
	 * @link https://php.net/manual/ja/class.dateinterval.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class DateInterval {

		/**
		 * @var integer <p>年。</p>
		 * @link https://php.net/manual/ja/class.dateinterval.php#dateinterval.props.y
		 */
		public $y;

		/**
		 * @var integer <p>月。</p>
		 * @link https://php.net/manual/ja/class.dateinterval.php#dateinterval.props.m
		 */
		public $m;

		/**
		 * @var integer <p>日。</p>
		 * @link https://php.net/manual/ja/class.dateinterval.php#dateinterval.props.d
		 */
		public $d;

		/**
		 * @var integer <p>時間。</p>
		 * @link https://php.net/manual/ja/class.dateinterval.php#dateinterval.props.h
		 */
		public $h;

		/**
		 * @var integer <p>分。</p>
		 * @link https://php.net/manual/ja/class.dateinterval.php#dateinterval.props.i
		 */
		public $i;

		/**
		 * @var integer <p>秒。</p>
		 * @link https://php.net/manual/ja/class.dateinterval.php#dateinterval.props.s
		 */
		public $s;

		/**
		 * @var integer <p>間隔が負の数になっている場合は <i>1</i>、そうでない場合は <i>0</i>。 <code>DateInterval::format()</code> を参照ください。</p>
		 * @link https://php.net/manual/ja/class.dateinterval.php#dateinterval.props.invert
		 */
		public $invert;

		/**
		 * @var mixed <p><code>DateTime::diff()</code> で作られた DateInterval オブジェクトの場合は、開始日と終了日の間の日数。 それ以外の場合は days は <b><code>FALSE</code></b> となります。</p> <p>PHP 5.4.20/5.5.4 より前のバージョンでは、 <b><code>FALSE</code></b> ではなく -99999 となっていました。</p>
		 * @link https://php.net/manual/ja/class.dateinterval.php#dateinterval.props.days
		 */
		public $days;

		/**
		 * 新しい DateInterval オブジェクトを作成する
		 * <p>新しい DateInterval オブジェクトを作成します。</p>
		 * @param string $interval_spec <p>間隔。</p> <p>最初は <i>P</i> から始まります。これは period を表します。 間隔の単位は、整数値の後に間隔指示子をつけて表します。 時間の要素を含む場合は、時間部分の前に文字 <i>T</i> を入れます。</p> <p></p> <b> <code>interval_spec</code> の間隔指示子 </b>   間隔指示子 説明     <i>Y</i> 年   <i>M</i> 月   <i>D</i> 日   <i>W</i>  週。日付に変換されるので <i>D</i> と組み合わせて使うことはできません。    <i>H</i> 時間   <i>M</i> 分   <i>S</i> 秒    <p>いくつか簡単な例を示しましょう。 <i>P2D</i> は 2 日、 <i>PT2S</i> は 2 秒、そして <i>P6YT5M</i> は 6 年と 5 分を表します。</p>  <p><b>注意</b>:</p> <p>複数の単位を指定するときは、 大きな単位を左、小さな単位を右の順に書かなければなりません。 つまり年は月より先、月は日より先、日は分より先などとなります。 1 年と 4 日を表すのは <i>P1Y4D</i> であり、<i>P4D1Y</i> ではありません。</p>  <p>日付と時刻で間隔を指定することもできます。 1 年と 4 日をこの方式で表すと <i>P0001-00-04T00:00:00</i> のようになります。 しかし、この方式では繰り返し単位以上の値を指定することはできません (たとえば <i>25</i> 時間などとは指定できません)。</p> <p>これらのフォーマットは » ISO 8601 duration specification に基づくものです。</p>
		 * @return self
		 * @link https://php.net/manual/ja/dateinterval.construct.php
		 * @see DateInterval::format(), DateTime::add(), DateTime::sub(), DateTime::diff()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct(string $interval_spec) {}

		/**
		 * 相対指定文字列から DateInterval を作成する
		 * <p>通常の日付パーサを用いて、パースされた相対指定文字列から DateInterval を設定します。</p>
		 * @param string $time <p>相対部分を含む日付。 特に、<code>strtotime()</code> や DateTime が使うパーサーがサポートする 相対書式 を使って DateInterval を作ることができます。</p>
		 * @return DateInterval <p>新しい DateInterval のインスタンスを返します。</p>
		 * @link https://php.net/manual/ja/dateinterval.createfromdatestring.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function createFromDateString(string $time): \DateInterval {}

		/**
		 * 間隔をフォーマットする
		 * <p>間隔をフォーマットします。</p>
		 * @param string $format <p></p> <b> 次の文字を、 <code>format</code> パラメータ文字列に使用することができます。 フォーマット文字は、パーセント記号 (<i>%</i>) で始めなければなりません。 </b>    <code>format</code> 文字 説明 値の例     <i>%</i> リテラルとしての <i>%</i>  <i>%</i>   <i>Y</i> 年、数値、先頭に 0 を含む 2 桁  <i>01</i>, <i>03</i>    <i>y</i> 年、数値  <i>1</i>, <i>3</i>    <i>M</i> 月、数値、先頭に 0 を含む 2 桁  <i>01</i>, <i>03</i>, <i>12</i>    <i>m</i> 月、数値  <i>1</i>, <i>3</i>, <i>12</i>    <i>D</i> 日、数値、先頭に 0 を含む 2 桁  <i>01</i>, <i>03</i>, <i>31</i>    <i>d</i> 日、数値  <i>1</i>, <i>3</i>, <i>31</i>    <i>a</i>  <code>DateTime::diff()</code> の結果に使った場合は総日数、それ以外の場合は <i>(unknown)</i>   <i>4</i>, <i>18</i>, <i>8123</i>    <i>H</i> 時間、数値、先頭に 0 を含む 2 桁  <i>01</i>, <i>03</i>, <i>23</i>    <i>h</i> 時間、数値  <i>1</i>, <i>3</i>, <i>23</i>    <i>I</i> 分、数値、先頭に 0 を含む 2 桁  <i>01</i>, <i>03</i>, <i>59</i>    <i>i</i> 分、数値  <i>1</i>, <i>3</i>, <i>59</i>    <i>S</i> 秒、数値、先頭に 0 を含む 2 桁  <i>01</i>, <i>03</i>, <i>57</i>    <i>s</i> 秒、数値  <i>1</i>, <i>3</i>, <i>57</i>    <i>R</i> 負の値の場合は "<i>-</i>"、正の値の場合は "<i>+</i>"  <i>-</i>, <i>+</i>    <i>r</i> 負の値の場合は "<i>-</i>"、正の値の場合は空文字  <i>-</i>, <i></i>
		 * @return string <p>フォーマットされた間隔を返します。</p>
		 * @link https://php.net/manual/ja/dateinterval.format.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function format(string $format): string {}
	}

	/**
	 * <p>日付の期間をあらわします。</p>
	 * <p>日付の期間を使うと、指定した期間に定期的に発生する内容を反復処理できます。</p>
	 * @link https://php.net/manual/ja/class.dateperiod.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	class DatePeriod implements \Traversable {

		/**
		 * @var integer <p>開始日を含まない。<code>DatePeriod::__construct()</code> で使用します。</p>
		 * @link https://php.net/manual/ja/class.dateperiod.php
		 */
		const EXCLUDE_START_DATE = 1;

		/**
		 * @var integer <p><b>DatePeriod</b> インスタンスが <i>$recurrences</i> を明示的に渡すことによって作成された場合の反復回数 <code>DatePeriod::getRecurrences()</code> もご覧ください。</p>
		 * @link https://php.net/manual/ja/class.dateperiod.php#dateperiod.props.recurrences
		 */
		public $recurrences;

		/**
		 * @var boolean <p>開始日を反復日のセットに含めるかどうか。</p>
		 * @link https://php.net/manual/ja/class.dateperiod.php#dateperiod.props.include_start_date
		 */
		public $include_start_date;

		/**
		 * @var DateTimeInterface <p>期間の開始日。</p>
		 * @link https://php.net/manual/ja/class.dateperiod.php#dateperiod.props.start
		 */
		public $start;

		/**
		 * @var DateTimeInterface <p>反復中に期間内の現在の日付が含まれます。</p>
		 * @link https://php.net/manual/ja/class.dateperiod.php#dateperiod.props.current
		 */
		public $current;

		/**
		 * @var DateTimeInterface <p>期間の終了日。</p>
		 * @link https://php.net/manual/ja/class.dateperiod.php#dateperiod.props.end
		 */
		public $end;

		/**
		 * @var DateInterval <p>ISO 8601 の繰り返し間隔の指定。</p>
		 * @link https://php.net/manual/ja/class.dateperiod.php#dateperiod.props.interval
		 */
		public $interval;

		/**
		 * 新しい DatePeriod オブジェクトを作成する
		 * <p>新しい DatePeriod オブジェクトを作成します。</p>
		 * @param \DateTimeInterface $start <p>期間の開始日。</p>
		 * @param \DateInterval $interval <p>期間内での発生間隔。</p>
		 * @param int $recurrences <p>反復回数。</p>
		 * @param int $options <p><b><code>DatePeriod::EXCLUDE_START_DATE</code></b> を指定すれば、 開始日を期間内の発生日から除外できます。</p>
		 * @return self
		 * @link https://php.net/manual/ja/dateperiod.construct.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __construct(\DateTimeInterface $start, \DateInterval $interval, int $recurrences, int $options = NULL) {}

		/**
		 * 間隔を取得する
		 * <p>オブジェクト指向型</p><p>期間に適用される間隔を表す DateInterval <code>object</code> を取得する。</p>
		 * @return DateInterval <p>DateInterval <code>object</code> を返す。</p>
		 * @link https://php.net/manual/ja/dateperiod.getdateinterval.php
		 * @since PHP 5 >= 5.6.5, PHP 7
		 */
		public function getDateInterval(): \DateInterval {}

		/**
		 * 終了日を取得する
		 * <p>オブジェクト指向型</p><p>期間の終了日を取得する。</p>
		 * @return DateTimeInterface <p>DatePeriod が終了日を持たない場合は <b><code>NULL</code></b> を返す。 たとえば、<code>recurrences</code> パラメータや、終了日のない <code>isostr</code> パラメータを用いて初期化されている場合である。</p><p>DatePeriod が DateTimeImmutable <code>object</code> を <code>end</code> パラメータに用いて初期化されている場合は DateTimeImmutable <code>object</code> を返す。</p><p>それ以外の場合は DateTime <code>object</code> を返す。</p>
		 * @link https://php.net/manual/ja/dateperiod.getenddate.php
		 * @since PHP 5 >= 5.6.5, PHP 7
		 */
		public function getEndDate(): \DateTimeInterface {}

		/**
		 * Gets the number of recurrences
		 * <p>オブジェクト指向型</p><p>Get the number of recurrences.</p>
		 * @return int <p>Returns the number of recurrences.</p>
		 * @link https://php.net/manual/ja/dateperiod.getrecurrences.php
		 * @since PHP 7 >= 7.2.17/7.3.4
		 */
		public function getRecurrences(): int {}

		/**
		 * 開始日を取得する
		 * <p>オブジェクト指向型</p><p>期間の開始日を取得する。</p>
		 * @return DateTimeInterface <p>DatePeriod が DateTimeImmutable <code>object</code> を <code>start</code> パラメータに用いて初期化されている場合は DateTimeImmutable <code>object</code> を返す。</p><p>それ例外の場合は DateTime <code>object</code> を返す。</p>
		 * @link https://php.net/manual/ja/dateperiod.getstartdate.php
		 * @since PHP 5 >= 5.6.5, PHP 7
		 */
		public function getStartDate(): \DateTimeInterface {}
	}

	/**
	 * <p>日付と時刻をあらわします。</p>
	 * @link https://php.net/manual/ja/class.datetime.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	class DateTime implements \DateTimeInterface {

		/**
		 * @var string Atom (例: 2005-08-15T15:52:01+00:00)
		 * @link https://php.net/manual/ja/class.datetime.php
		 */
		const ATOM = "Y-m-d\TH:i:sP";

		/**
		 * @var string HTTP Cookies (例: Monday, 15-Aug-2005 15:52:01 UTC)
		 * @link https://php.net/manual/ja/class.datetime.php
		 */
		const COOKIE = "l, d-M-Y H:i:s T";

		/**
		 * @var string ISO-8601 (例: 2005-08-15T15:52:01+0000)  <p><b>注意</b>:  この書式は ISO-8601 との互換性がありませんが、敢えてそのまま残しています。 下位互換性を保つためです。ISO-8601 互換の書式を使いたい場合は、 <b><code>DateTime::ATOM</code></b> あるいは <b><code>DATE_ATOM</code></b> を使いましょう。 </p>
		 * @link https://php.net/manual/ja/class.datetime.php
		 */
		const ISO8601 = "Y-m-d\TH:i:sO";

		/**
		 * @var string RFC 822 (例: Mon, 15 Aug 05 15:52:01 +0000)
		 * @link https://php.net/manual/ja/class.datetime.php
		 */
		const RFC822 = "D, d M y H:i:s O";

		/**
		 * @var string RFC 850 (例: Monday, 15-Aug-05 15:52:01 UTC)
		 * @link https://php.net/manual/ja/class.datetime.php
		 */
		const RFC850 = "l, d-M-y H:i:s T";

		/**
		 * @var string RFC 1036 (例: Mon, 15 Aug 05 15:52:01 +0000)
		 * @link https://php.net/manual/ja/class.datetime.php
		 */
		const RFC1036 = "D, d M y H:i:s O";

		/**
		 * @var string RFC 1123 (例: Mon, 15 Aug 2005 15:52:01 +0000)
		 * @link https://php.net/manual/ja/class.datetime.php
		 */
		const RFC1123 = "D, d M Y H:i:s O";

		/**
		 * @var string RFC 2822 (例: Mon, 15 Aug 2005 15:52:01 +0000)
		 * @link https://php.net/manual/ja/class.datetime.php
		 */
		const RFC2822 = "D, d M Y H:i:s O";

		/**
		 * @var string <b><code>DATE_ATOM</code></b> と同じ (PHP 5.1.3 以降)
		 * @link https://php.net/manual/ja/class.datetime.php
		 */
		const RFC3339 = "Y-m-d\TH:i:sP";

		/**
		 * @var string RSS (例: Mon, 15 Aug 2005 15:52:01 +0000)
		 * @link https://php.net/manual/ja/class.datetime.php
		 */
		const RSS = "D, d M Y H:i:s O";

		/**
		 * @var string World Wide Web Consortium (例: 2005-08-15T15:52:01+00:00)
		 * @link https://php.net/manual/ja/class.datetime.php
		 */
		const W3C = "Y-m-d\TH:i:sP";

		/**
		 * 新しい DateTime オブジェクトを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>新しい DateTime オブジェクトを返します。</p>
		 * @param string $time <p>日付/時刻 文字列。有効な書式については 日付と時刻の書式 で説明しています。</p> <p>ここに <b><code>NULL</code></b> を指定して <code>$timezone</code> パラメータを使うと、現在時刻を取得できます。</p>
		 * @param \DateTimeZone $timezone <p><code>$time</code> のタイムゾーンを表す DateTimeZone オブジェクト。</p> <p><code>$timezone</code> を省略した場合は、 現在のタイムゾーンを使います。</p>  <p><b>注意</b>:</p> <p><code>$time</code> パラメータが UNIX タイムスタンプ (<i>@946684800</i> など) であったりタイムゾーンつきで指定した場合 (<i>2010-01-28T15:00:00+02:00</i> など) は、 <code>$timezone</code> パラメータや現在のタイムゾーンは無視されます。</p>
		 * @return DateTime <p>新しい DateTime のインスタンスを返します。 手続き型 の場合は、失敗したときに <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.construct.php
		 * @see DateTime::createFromFormat(), DateTimeZone::__construct(), date_default_timezone_set(), DateTime::getLastErrors(), checkdate()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function __construct(string $time = "now", \DateTimeZone $timezone = NULL) {}

		/**
		 * __set_state ハンドラ
		 * <p>__set_state() を処理します。</p>
		 * @param array $array <p>初期化配列。</p>
		 * @return DateTime <p>新しい DateTime オブジェクトのインスタンスを返します。</p>
		 * @link https://php.net/manual/ja/datetime.set-state.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function __set_state(array $array): \DateTime {}

		/**
		 * __wakeup ハンドラ
		 * <p>__wakeup() を処理します。</p>
		 * @return void <p>DateTime オブジェクトを初期化します。</p>
		 * @link https://php.net/manual/ja/datetime.wakeup.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __wakeup() {}

		/**
		 * 年月日時分秒の値を DateTime オブジェクトに加える
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した DateInterval オブジェクトを、 指定した DateTime オブジェクトに加えます。</p>
		 * @param \DateInterval $interval <p>DateInterval オブジェクト。</p>
		 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.add.php
		 * @see DateTime::sub(), DateTime::diff(), DateTime::modify()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function add(\DateInterval $interval): \DateTime {}

		/**
		 * 指定した書式で時刻文字列をパースする
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>新しい DateTime オブジェクトを返します。 このオブジェクトは、<code>time</code> で指定した文字列を <code>format</code> で指定した書式に沿って解釈した時刻を表します。</p>
		 * @param string $format <p>書式を文字列で渡します。以下の書式オプションを参照ください。 大半は、<code>date()</code> で使える文字と同じです。</p> <p></p> <b><code>format</code> パラメータに渡せる文字</b>    <code>format</code> 文字 説明 取りうる値の例     <i>日</i> --- ---    <i>d</i> および <i>j</i>  2桁の日付。先頭のゼロを含むものと含まないもの  <i>01</i> から <i>31</i> あるいは <i>1</i> から <i>31</i>     <i>D</i> および <i>l</i>  曜日を表す文字列  <i>Mon</i> から <i>Sun</i> あるいは <i>Sunday</i> から <i>Saturday</i>    <i>S</i> 日付の後につける英語の接尾辞。二文字。処理中には無視されます。  <i>st</i>、<i>nd</i>、<i>rd</i> あるいは <i>th</i>    <i>z</i> 年始からの通算日数 (最初は 0)  <i>0</i> から <i>365</i>    <i>月</i> --- ---    <i>F</i> および <i>M</i>  月を表す文字列。January あるいは Sept など  <i>January</i> から <i>December</i> あるいは <i>Jan</i> から <i>Dec</i>     <i>m</i> および <i>n</i>  月を表す数値。先頭のゼロを含むものと含まないもの  <i>01</i> から <i>12</i> あるいは <i>1</i> から <i>12</i>    <i>年</i> --- ---   <i>Y</i> 4 桁の数値で表した年 例: <i>1999</i> あるいは <i>2003</i>    <i>y</i>  2 桁の数値で表した年 (1970年から2069年の間だとみなされます)   例: <i>99</i> あるいは <i>03</i> (それぞれ、 <i>1999</i> および <i>2003</i> と見なされます)    <i>時刻</i> --- ---    <i>a</i> および <i>A</i>  午前および午後  <i>am</i> あるいは <i>pm</i>     <i>g</i> および <i>h</i>  12 時間制での時間。先頭のゼロを含むものと含まないもの  <i>1</i> から <i>12</i> あるいは <i>01</i> から <i>12</i>     <i>G</i> and <i>H</i>  24 時間制での時間。先頭のゼロを含むものと含まないもの  <i>0</i> から <i>23</i> あるいは <i>00</i> から <i>23</i>    <i>i</i> 分。先頭のゼロを含む  <i>00</i> から <i>59</i>    <i>s</i> 秒。先頭のゼロを含む  <i>00</i> から <i>59</i>    <i>u</i> マイクロ秒 (最大 6 桁) 例: <i>45</i>, <i>654321</i>    <i>タイムゾーン</i> --- ---    <i>e</i>、<i>O</i>、 <i>P</i> および <i>T</i>  タイムゾーン識別子、UTC からの時差 (時間単位)、 UTC からの時差 (コロン区切りでの時間と分)、そしてタイムゾーンの短縮形 例: <i>UTC</i>、<i>GMT</i>、 <i>Atlantic/Azores</i> あるいは <i>+0200</i> あるいは <i>+02:00</i> あるいは <i>EST</i>、<i>MDT</i>    <i>完全な日付/時刻</i> --- ---   <i>U</i> Unix エポック (January 1 1970 00:00:00 GMT) からの経過秒数 例: <i>1292177455</i>    <i>空白および区切り</i> --- ---    <i> </i> (空白) 空白 1 文字あるいはタブ 1 文字 例: <i> </i>    <i>#</i>  次の区切り文字のいずれか: <i>;</i>, <i>:</i>, <i>/</i>, <i>.</i>, <i>,</i>, <i>-</i>, <i>(</i> あるいは <i>)</i>  例: <i>/</i>     <i>;</i>, <i>:</i>, <i>/</i>, <i>.</i>, <i>,</i>, <i>-</i>, <i>(</i> あるいは <i>)</i>  指定した文字 例: <i>-</i>    <i>&#63;</i> ランダムなバイト 例: <i>^</i> (UTF-8 文字の場合は複数の <i>&#63;</i> が必要になるでしょう。この場合、おそらく <i>&#42;</i> を使うと要望が満たせるはずです)   <i>&#42;</i> 次の区切り文字あるいは数字までのランダムなバイト列 例: <i>Y-&#42;-d</i> の中の <i>&#42;</i> は、文字列 <i>2009-aWord-08</i> の中の <i>aWord</i> にマッチします   <i>!</i> すべてのフィールド (年、月、日、時、分、秒、マイクロ秒およびタイムゾーン情報) を Unix エポックにリセットする  <i>!</i> がなければ、すべてのフィールドは現在の日時に設定されます。   <i>|</i> まだパースされていないすべてのフィールド (年、月、日、時、分、秒、マイクロ秒およびタイムゾーン情報) を Unix エポックにリセットする  <i>Y-m-d|</i> は、文字列をパースした結果から年月日を設定し 時分秒には 0 を設定します。   <i>+</i> この文字があると、文字列のそれ以降のデータではエラーが発生せず、 かわりに警告を発生させる それ以降のデータが存在したかどうかを調べるには <code>DateTime::getLastErrors()</code> を使います。    <p>書式文字列の中に解釈不能な文字が含まれていると処理は失敗し、 返り値にはエラーメッセージが付加されます。エラーメッセージを調べるには <code>DateTime::getLastErrors()</code> を使います。</p> <p><code>format</code> にリテラル文字を含めるには、 バックスラッシュ (<i>\</i>) でエスケープする必要があります。</p> <p><code>format</code> に文字 <i>!</i> が含まれない場合は、作成した時刻値のうち <code>format</code> で指定されていない部分を 現在のシステム時刻で初期化します。</p> <p><code>format</code> に文字 <i>!</i> が含まれる場合は、作成した時刻値のうち <code>format</code> で指定されていない部分と <i>!</i> の左側の部分を Unix エポックの対応する箇所の値で初期化します。</p> <p>Unix エポックは 1970-01-01 00:00:00 です。</p>
		 * @param string $time <p>時刻を表す文字列。</p>
		 * @param \DateTimeZone $timezone <p>指定したいタイムゾーンを表す DateTimeZone オブジェクト。</p> <p><code>timezone</code> を省略し、かつ <code>time</code> にタイムゾーンが含まれない場合は、 現在のタイムゾーンを使います。</p>  <p><b>注意</b>:</p> <p><code>time</code> パラメータが UNIX タイムスタンプ (例: <i>946684800</i>) だったりタイムゾーンを含んでいたり (例: <i>2010-01-28T15:00:00+02:00</i>) する場合は、 <code>timezone</code> パラメータや現在のタイムゾーンは無視します。</p>
		 * @return DateTime <p>新しい DateTime のインスタンス、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.createfromformat.php
		 * @see DateTime::__construct(), DateTime::getLastErrors(), checkdate(), strptime()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function createFromFormat(string $format, string $time, \DateTimeZone $timezone = NULL): \DateTime {}

		/**
		 * Returns new DateTime object encapsulating the given DateTimeImmutable object
		 * @param \DateTimeImmutable $datetime <p>The immutable DateTimeImmutable object that needs to be converted to a mutable version. This object is not modified, but instead a new DateTime object is created containing the same date, time, and timezone information.</p>
		 * @return DateTime <p>Returns a new DateTime instance.</p>
		 * @link https://php.net/manual/ja/datetime.createfromimmutable.php
		 * @since PHP 7 >= 7.3.0
		 */
		public static function createFromImmutable(\DateTimeImmutable $datetime): \DateTime {}

		/**
		 * ふたつの DateTime オブジェクトの差を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>ふたつの DateTime オブジェクトの差を返します。</p>
		 * @param \DateTimeInterface $datetime2
		 * @param bool $absolute <p>間隔が正の数になるようにするか否か。</p>
		 * @return DateInterval <p>ふたつの日付の差をあらわす DateInterval オブジェクトを返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
		 * @link https://php.net/manual/ja/datetime.diff.php
		 * @see DateInterval::format(), DateTime::add(), DateTime::sub()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function diff(\DateTimeInterface $datetime2, bool $absolute = false): \DateInterval {}

		/**
		 * 指定した書式でフォーマットした日付を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した書式でフォーマットした日付を返します。</p>
		 * @param string $format <p><code>date()</code> が理解できる書式指定文字列。</p>
		 * @return string <p>成功した場合にフォーマット済みの日付文字列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.format.php
		 * @see date()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function format(string $format): string {}

		/**
		 * 警告およびエラーを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>日付/時刻文字列のパース時に見つかった警告やエラーの配列を返します。</p>
		 * @return array <p>警告やエラーに関する情報を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/datetime.getlasterrors.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public static function getLastErrors(): array {}

		/**
		 * タイムゾーンのオフセットを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンのオフセットを返します。</p>
		 * @return int <p>成功した場合には UTC からのタイムゾーンオフセット秒数、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.getoffset.php
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getOffset(): int {}

		/**
		 * Unix タイムスタンプを取得する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>Unix タイムスタンプを取得します。</p>
		 * @return int <p>その日付をあらわす Unix タイムスタンプを返します。</p>
		 * @link https://php.net/manual/ja/datetime.gettimestamp.php
		 * @see DateTime::setTimestamp(), DateTime::format()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getTimestamp(): int {}

		/**
		 * 指定した DateTime に関連するタイムゾーンを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した DateTime に関連するタイムゾーンを返します。</p>
		 * @return DateTimeZone <p>成功した場合に DateTimeZone オブジェクト、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.gettimezone.php
		 * @see DateTime::setTimezone()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getTimezone(): \DateTimeZone {}

		/**
		 * タイムスタンプを変更する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>strtotime()</code> 形式で加算あるいは減算することによって DateTime オブジェクトのタイムスタンプを変更します。</p>
		 * @param string $modify <p>日付/時刻 文字列。有効な書式については 日付と時刻の書式 で説明しています。</p>
		 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.modify.php
		 * @see strtotime(), DateTime::add(), DateTime::sub(), DateTime::setDate(), DateTime::setISODate(), DateTime::setTime(), DateTime::setTimestamp()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function modify(string $modify): \DateTime {}

		/**
		 * 日付を設定する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>DateTime オブジェクトの現在の日付をリセットし、別の日付にします。</p>
		 * @param int $year <p>その日付の年。</p>
		 * @param int $month <p>その日付の月。</p>
		 * @param int $day <p>その日付の日。</p>
		 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.setdate.php
		 * @see DateTime::setISODate(), DateTime::setTime()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setDate(int $year, int $month, int $day): \DateTime {}

		/**
		 * ISO 日付を設定する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>ISO 8601 標準形式、つまり週と日オフセットで日付を設定します。</p>
		 * @param int $year <p>その日付の年。</p>
		 * @param int $week <p>その日付の週。</p>
		 * @param int $day <p>週の最初の日からのオフセット。</p>
		 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.setisodate.php
		 * @see DateTime::setDate(), DateTime::setTime()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setISODate(int $year, int $week, int $day = 1): \DateTime {}

		/**
		 * 時刻を設定する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>DateTime オブジェクトの現在時刻を別の時刻にリセットします。</p>
		 * @param int $hour <p>その時刻の時。</p>
		 * @param int $minute <p>その時刻の分。</p>
		 * @param int $second <p>その時刻の秒。</p>
		 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.settime.php
		 * @see DateTime::setDate(), DateTime::setISODate()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setTime(int $hour, int $minute, int $second = 0): \DateTime {}

		/**
		 * Unix タイムスタンプを用いて日付と時刻を設定する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>Unix タイムスタンプを用いて日付と時刻を設定します。</p>
		 * @param int $unixtimestamp <p>Unix タイムスタンプ。</p>
		 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.settimestamp.php
		 * @see DateTime::getTimestamp()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function setTimestamp(int $unixtimestamp): \DateTime {}

		/**
		 * DateTime オブジェクトのタイムゾーンを設定する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>新しいタイムゾーンを DateTime オブジェクトに設定します。</p>
		 * @param \DateTimeZone $timezone <p>指定したいタイムゾーンを表す DateTimeZone オブジェクト。</p>
		 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.settimezone.php
		 * @see DateTime::getTimezone(), DateTimeZone::__construct()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function setTimezone(\DateTimeZone $timezone): \DateTime {}

		/**
		 * 年月日時分秒の値を DateTime オブジェクトから引く
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した DateInterval オブジェクトを、 指定した DateTime オブジェクトから引きます。</p>
		 * @param \DateInterval $interval <p>DateInterval オブジェクト。</p>
		 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.sub.php
		 * @see DateTime::add(), DateTime::diff(), DateTime::modify()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function sub(\DateInterval $interval): \DateTime {}
	}

	/**
	 * <p>このクラスの挙動は DateTime とほぼ同じですが、 自分自身は変更せずに新しいオブジェクトを返すという点だけが異なります。</p>
	 * @link https://php.net/manual/ja/class.datetimeimmutable.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	class DateTimeImmutable implements \DateTimeInterface {

		/**
		 * 新しい DateTimeImmutable オブジェクトを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>DateTime::__construct()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
		 * @param string $time
		 * @param \DateTimeZone $timezone
		 * @return DateTimeImmutable
		 * @link https://php.net/manual/ja/datetimeimmutable.construct.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function __construct(string $time = "now", \DateTimeZone $timezone = NULL) {}

		/**
		 * __set_state ハンドラ
		 * <p><code>DateTime::__set_state()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
		 * @param array $array
		 * @return DateTimeImmutable
		 * @link https://php.net/manual/ja/datetimeimmutable.set-state.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public static function __set_state(array $array): \DateTimeImmutable {}

		/**
		 * __wakeup ハンドラ
		 * <p>__wakeup() を処理します。</p>
		 * @return void <p>DateTime オブジェクトを初期化します。</p>
		 * @link https://php.net/manual/ja/datetime.wakeup.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __wakeup() {}

		/**
		 * 年月日時分秒の値を加える
		 * <p><code>DateTime::add()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
		 * @param \DateInterval $interval
		 * @return DateTimeImmutable
		 * @link https://php.net/manual/ja/datetimeimmutable.add.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function add(\DateInterval $interval): \DateTimeImmutable {}

		/**
		 * 指定した書式でフォーマットした新しい DateTimeImmutable オブジェクトを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>DateTime::createFromFormat()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
		 * @param string $format
		 * @param string $time
		 * @param \DateTimeZone $timezone
		 * @return DateTimeImmutable
		 * @link https://php.net/manual/ja/datetimeimmutable.createfromformat.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public static function createFromFormat(string $format, string $time, \DateTimeZone $timezone = NULL): \DateTimeImmutable {}

		/**
		 * Returns new DateTimeImmutable object encapsulating the given DateTime object
		 * @param \DateTime $datetime <p>The mutable DateTime object that you want to convert to an immutable version. This object is not modified, but instead a new DateTimeImmutable object is created containing the same date time and timezone information.</p>
		 * @return DateTimeImmutable <p>Returns a new DateTimeImmutable instance.</p>
		 * @link https://php.net/manual/ja/datetimeimmutable.createfrommutable.php
		 * @since PHP 5 >= 5.6.0, PHP 7
		 */
		public static function createFromMutable(\DateTime $datetime): \DateTimeImmutable {}

		/**
		 * ふたつの DateTime オブジェクトの差を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>ふたつの DateTime オブジェクトの差を返します。</p>
		 * @param \DateTimeInterface $datetime2
		 * @param bool $absolute <p>間隔が正の数になるようにするか否か。</p>
		 * @return DateInterval <p>ふたつの日付の差をあらわす DateInterval オブジェクトを返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
		 * @link https://php.net/manual/ja/datetime.diff.php
		 * @see DateInterval::format(), DateTime::add(), DateTime::sub()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function diff(\DateTimeInterface $datetime2, bool $absolute = false): \DateInterval {}

		/**
		 * 指定した書式でフォーマットした日付を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した書式でフォーマットした日付を返します。</p>
		 * @param string $format <p><code>date()</code> が理解できる書式指定文字列。</p>
		 * @return string <p>成功した場合にフォーマット済みの日付文字列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.format.php
		 * @see date()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function format(string $format): string {}

		/**
		 * 警告およびエラーを返す
		 * <p><code>DateTime::getLastErrors()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
		 * @return array
		 * @link https://php.net/manual/ja/datetimeimmutable.getlasterrors.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public static function getLastErrors(): array {}

		/**
		 * タイムゾーンのオフセットを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンのオフセットを返します。</p>
		 * @return int <p>成功した場合には UTC からのタイムゾーンオフセット秒数、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.getoffset.php
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getOffset(): int {}

		/**
		 * Unix タイムスタンプを取得する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>Unix タイムスタンプを取得します。</p>
		 * @return int <p>その日付をあらわす Unix タイムスタンプを返します。</p>
		 * @link https://php.net/manual/ja/datetime.gettimestamp.php
		 * @see DateTime::setTimestamp(), DateTime::format()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getTimestamp(): int {}

		/**
		 * 指定した DateTime に関連するタイムゾーンを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した DateTime に関連するタイムゾーンを返します。</p>
		 * @return DateTimeZone <p>成功した場合に DateTimeZone オブジェクト、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.gettimezone.php
		 * @see DateTime::setTimezone()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getTimezone(): \DateTimeZone {}

		/**
		 * タイムスタンプを変更した新しいオブジェクトを作る
		 * <p>タイムスタンプを変更した新しい <code>DateTimeImmutable</code> オブジェクトを作ります。 元のオブジェクトは変更されません。</p>
		 * @param string $modify <p>日付/時刻 文字列。有効な書式については 日付と時刻の書式 で説明しています。</p>
		 * @return DateTimeImmutable <p>新しく作ったオブジェクトを返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetimeimmutable.modify.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function modify(string $modify): \DateTimeImmutable {}

		/**
		 * 日付を設定する
		 * <p><code>DateTime::setDate()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
		 * @param int $year
		 * @param int $month
		 * @param int $day
		 * @return DateTimeImmutable
		 * @link https://php.net/manual/ja/datetimeimmutable.setdate.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setDate(int $year, int $month, int $day): \DateTimeImmutable {}

		/**
		 * ISO 日付を設定する
		 * <p><code>DateTime::setISODate()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
		 * @param int $year
		 * @param int $week
		 * @param int $day
		 * @return DateTimeImmutable
		 * @link https://php.net/manual/ja/datetimeimmutable.setisodate.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setISODate(int $year, int $week, int $day = 1): \DateTimeImmutable {}

		/**
		 * 時刻を設定する
		 * <p><code>DateTime::setTime()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
		 * @param int $hour
		 * @param int $minute
		 * @param int $second
		 * @return DateTimeImmutable
		 * @link https://php.net/manual/ja/datetimeimmutable.settime.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setTime(int $hour, int $minute, int $second = 0): \DateTimeImmutable {}

		/**
		 * Unix タイムスタンプを用いて日付と時刻を設定する
		 * <p><code>DateTime::setTimestamp()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
		 * @param int $unixtimestamp
		 * @return DateTimeImmutable
		 * @link https://php.net/manual/ja/datetimeimmutable.settimestamp.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setTimestamp(int $unixtimestamp): \DateTimeImmutable {}

		/**
		 * タイムゾーンを設定する
		 * <p><code>DateTime::setTimezone()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
		 * @param \DateTimeZone $timezone
		 * @return DateTimeImmutable
		 * @link https://php.net/manual/ja/datetimeimmutable.settimezone.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function setTimezone(\DateTimeZone $timezone): \DateTimeImmutable {}

		/**
		 * 年月日時分秒の値を引く
		 * <p><code>DateTime::sub()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
		 * @param \DateInterval $interval
		 * @return DateTimeImmutable
		 * @link https://php.net/manual/ja/datetimeimmutable.sub.php
		 * @since PHP 5 >= 5.5.0, PHP 7
		 */
		public function sub(\DateInterval $interval): \DateTimeImmutable {}
	}

	/**
	 * <p>DateTimeInterface は、DateTime および DateTimeImmutable をタイプヒントで使えるようにするためのインターフェイスです。 このインターフェイスを実装したクラスをユーザー側で作ることはできません。</p>
	 * @link https://php.net/manual/ja/class.datetimeinterface.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	interface DateTimeInterface {

		/**
		 * __wakeup ハンドラ
		 * <p>__wakeup() を処理します。</p>
		 * @return void <p>DateTime オブジェクトを初期化します。</p>
		 * @link https://php.net/manual/ja/datetime.wakeup.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function __wakeup();

		/**
		 * 指定した書式でフォーマットした日付を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した書式でフォーマットした日付を返します。</p>
		 * @param string $format <p><code>date()</code> が理解できる書式指定文字列。</p>
		 * @return string <p>成功した場合にフォーマット済みの日付文字列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.format.php
		 * @see date()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function format(string $format): string;

		/**
		 * タイムゾーンのオフセットを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンのオフセットを返します。</p>
		 * @return int <p>成功した場合には UTC からのタイムゾーンオフセット秒数、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.getoffset.php
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getOffset(): int;

		/**
		 * Unix タイムスタンプを取得する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>Unix タイムスタンプを取得します。</p>
		 * @return int <p>その日付をあらわす Unix タイムスタンプを返します。</p>
		 * @link https://php.net/manual/ja/datetime.gettimestamp.php
		 * @see DateTime::setTimestamp(), DateTime::format()
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getTimestamp(): int;

		/**
		 * 指定した DateTime に関連するタイムゾーンを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した DateTime に関連するタイムゾーンを返します。</p>
		 * @return DateTimeZone <p>成功した場合に DateTimeZone オブジェクト、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetime.gettimezone.php
		 * @see DateTime::setTimezone()
		 * @since PHP 5 >= 5.2.1, PHP 7
		 */
		public function getTimezone(): \DateTimeZone;
	}

	/**
	 * <p>タイムゾーンをあらわします。</p>
	 * @link https://php.net/manual/ja/class.datetimezone.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	class DateTimeZone {

		/**
		 * @var integer <p>アフリカのタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const AFRICA = 1;

		/**
		 * @var integer <p>アメリカのタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const AMERICA = 2;

		/**
		 * @var integer <p>南極のタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const ANTARCTICA = 4;

		/**
		 * @var integer <p>北極のタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const ARCTIC = 8;

		/**
		 * @var integer <p>アジアのタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const ASIA = 16;

		/**
		 * @var integer <p>大西洋のタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const ATLANTIC = 32;

		/**
		 * @var integer <p>オーストラリアのタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const AUSTRALIA = 64;

		/**
		 * @var integer <p>ヨーロッパのタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const EUROPE = 128;

		/**
		 * @var integer <p>インドのタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const INDIAN = 256;

		/**
		 * @var integer <p>太平洋のタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const PACIFIC = 512;

		/**
		 * @var integer <p>UTC タイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const UTC = 1024;

		/**
		 * @var integer <p>すべてのタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const ALL = 2047;

		/**
		 * @var integer <p>過去との互換性を保つものを含むすべてのタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const ALL_WITH_BC = 4095;

		/**
		 * @var integer <p>国ごとのタイムゾーン。</p>
		 * @link https://php.net/manual/ja/class.datetimezone.php
		 */
		const PER_COUNTRY = 4096;

		/**
		 * 新しい DateTimeZone オブジェクトを作成する
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>新しい DateTimeZone オブジェクトを作成します。</p>
		 * @param string $timezone <p>サポートするタイムゾーン名のいずれか、 またはオフセット値 (+0200)。</p>
		 * @return DateTimeZone <p>成功した場合に DateTimeZone を返します。 手続き型 の場合は、失敗したときに <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetimezone.construct.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function __construct(string $timezone) {}

		/**
		 * タイムゾーンの位置情報を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンの位置情報 (国コード、緯度/経度、コメント) を返します。</p>
		 * @return array <p>タイムゾーンについての位置情報を含む配列を返します。</p>
		 * @link https://php.net/manual/ja/datetimezone.getlocation.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		public function getLocation(): array {}

		/**
		 * タイムゾーンの名前を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンの名前を返します。</p>
		 * @return string <p>タイムゾーン一覧 のタイムゾーン名のひとつを返します。</p>
		 * @link https://php.net/manual/ja/datetimezone.getname.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getName(): string {}

		/**
		 * GMT からのタイムゾーンのオフセットを返す
		 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、<code>datetime</code> パラメータで指定した 日付/時刻 についての GMT へのオフセットを返します。GMT オフセットの計算の際には、 使用する DateTimeZone オブジェクトに含まれるタイムゾーン情報を使用します。</p>
		 * @param \DateTime $datetime <p>オフセットを計算する 日付/時刻 を含む DateTime。</p>
		 * @return int <p>成功した場合にタイムゾーンのオフセット秒数、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetimezone.getoffset.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getOffset(\DateTime $datetime): int {}

		/**
		 * タイムゾーンの変遷を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p>
		 * @param int $timestamp_begin <p>開始時のタイムスタンプ。</p>
		 * @param int $timestamp_end <p>終了時のタイムスタンプ。</p>
		 * @return array <p>成功した場合にタイムゾーンの遷移を表す連想配列の配列、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetimezone.gettransitions.php
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public function getTransitions(int $timestamp_begin = NULL, int $timestamp_end = NULL): array {}

		/**
		 * 夏時間、オフセットおよびタイムゾーン名を含む連想配列を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p>
		 * @return array <p>成功した場合に配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetimezone.listabbreviations.php
		 * @see timezone_identifiers_list()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public static function listAbbreviations(): array {}

		/**
		 * すべてのタイムゾーン識別子を含む配列を返す
		 * <p>オブジェクト指向型</p><p>手続き型</p>
		 * @param int $what <p>DateTimeZone のクラス定数のいずれか。</p>
		 * @param string $country <p>2 文字の ISO 3166-1 互換の国コード。</p> <p><b>注意</b>:  このオプションを使用するのは、<code>what</code> に <b><code>DateTimeZone::PER_COUNTRY</code></b> を設定した場合のみです。 </p>
		 * @return array <p>成功した場合に配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/datetimezone.listidentifiers.php
		 * @see timezone_abbreviations_list()
		 * @since PHP 5 >= 5.2.0, PHP 7
		 */
		public static function listIdentifiers(int $what = DateTimeZone::ALL, string $country = NULL): array {}
	}

	/**
	 * グレゴリオ暦の日付/時刻の妥当性を確認します
	 * <p>引数で指定された日付の妥当性をチェックします。 各パラメータが適切に指定されている場合に、妥当であると判断されます。</p>
	 * @param int $month <p>月は 1 から 12 の間となります。</p>
	 * @param int $day <p>日は、指定された <code>month</code> の日数の範囲内になります。<code>year</code> がうるう年の場合は、それも考慮されます。</p>
	 * @param int $year <p>年は 1 から 32767 の間となります。</p>
	 * @return bool <p>指定した日付が有効な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.checkdate.php
	 * @see mktime(), strtotime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function checkdate(int $month, int $day, int $year): bool {}

	/**
	 * ローカルの日付/時刻を書式化する
	 * <p>指定された引数 <code>timestamp</code> を、与えられた フォーマット文字列によりフォーマットし、日付文字列を返します。 タイムスタンプが与えられない場合は、現在の時刻が使われます。 つまり <code>timestamp</code> はオプションであり そのデフォルト値は <code>time()</code> の値です。</p>
	 * @param string $format <p>出力される日付文字列の書式。以下のオプションを参照ください。 定義済みの定数 も用意されており、たとえば <b><code>DATE_RSS</code></b> はフォーマット文字列 <i>'D, d M Y H:i:s'</i> と同じ意味になります。</p> <p></p> <b>以下の文字が <code>format</code> パラメータ文字列として認識されます</b>    <code>format</code> 文字 説明 戻り値の例     <i>日</i> --- ---   <i>d</i> 日。二桁の数字（先頭にゼロがつく場合も）  <i>01</i> から <i>31</i>    <i>D</i> 曜日。3文字のテキスト形式。  <i>Mon</i> から <i>Sun</i>    <i>j</i> 日。先頭にゼロをつけない。  <i>1</i> から <i>31</i>     <i>l</i> (小文字の 'L') 曜日。フルスペル形式。  <i>Sunday</i> から <i>Saturday</i>    <i>N</i> ISO-8601 形式の、曜日の数値表現 (PHP 5.1.0 で追加)。  <i>1</i>（月曜日）から <i>7</i>（日曜日）   <i>S</i> 英語形式の序数を表すサフィックス。2 文字。  <i>st</i>, <i>nd</i>, <i>rd</i> または <i>th</i>。 <i>j</i>と一緒に使用する ことができる。    <i>w</i> 曜日。数値。  <i>0</i> (日曜)から <i>6</i> (土曜)   <i>z</i> 年間の通算日。数字。(ゼロから開始)  <i>0</i> から <i>365</i>    <i>週</i> --- ---   <i>W</i> ISO-8601 月曜日に始まる年単位の週番号 例: <i>42</i> (年の第 42 週目)   <i>月</i> --- ---   <i>F</i> 月。フルスペルの文字。  <i>January</i> から <i>December</i>    <i>m</i> 月。数字。先頭にゼロをつける。  <i>01</i> から <i>12</i>    <i>M</i> 月。3 文字形式。  <i>Jan</i> から <i>Dec</i>    <i>n</i> 月。数字。先頭にゼロをつけない。  <i>1</i> から <i>12</i>    <i>t</i> 指定した月の日数。  <i>28</i> から <i>31</i>    <i>年</i> --- ---   <i>L</i> 閏年であるかどうか。  <i>1</i>なら閏年。<i>0</i>なら閏年ではない。   <i>o</i> ISO-8601 形式の週番号による年。これは <i>Y</i> ほぼ同じだが、ISO 週番号 （<i>W</i>）が前年あるいは翌年に属する場合はそちらの年を使うという点が異なる（PHP 5.1.0 で追加）。 例: <i>1999</i> あるいは <i>2003</i>    <i>Y</i> 年。4 桁の数字。 例: <i>1999</i>または<i>2003</i>    <i>y</i> 年。2 桁の数字。 例: <i>99</i> または <i>03</i>    <i>時</i> --- ---   <i>a</i> 午前または午後（小文字）  <i>am</i> または <i>pm</i>    <i>A</i> 午前または午後（大文字）  <i>AM</i> または <i>PM</i>    <i>B</i> Swatch インターネット時間  <i>000</i> から <i>999</i>    <i>g</i> 時。12時間単位。先頭にゼロを付けない。  <i>1</i> から <i>12</i>    <i>G</i> 時。24時間単位。先頭にゼロを付けない。  <i>0</i> から <i>23</i>    <i>h</i> 時。数字。12 時間単位。  <i>01</i> から <i>12</i>    <i>H</i> 時。数字。24 時間単位。  <i>00</i> から <i>23</i>    <i>i</i> 分。先頭にゼロをつける。  <i>00</i> から <i>59</i>    <i>s</i> 秒。先頭にゼロをつける。  <i>00</i> から <i>59</i>    <i>u</i>  マイクロ秒 (PHP 5.2.2 で追加)。 <b>date()</b> の場合、これは常に <i>000000</i> となることに注意しましょう。というのも、 この関数が受け取るパラメータは <code>integer</code> 型だからです。 一方 DateTime をマイクロ秒つきで作成した場合は、 <code>DateTime::format()</code> はマイクロ秒にも対応しています。  例: <i>654321</i>    <i>v</i>  ミリ秒 (PHP 7.0.0 で追加) <i>u</i>と同じ注釈が当てはまります。  例: <i>654</i>    <i>タイムゾーン</i> --- ---   <i>e</i> タイムゾーン識別子（PHP 5.1.0 で追加） 例: <i>UTC</i>, <i>GMT</i>, <i>Atlantic/Azores</i>     <i>I</i> (大文字の i) サマータイム中か否か  <i>1</i>ならサマータイム中。 <i>0</i>ならそうではない。   <i>O</i> グリニッジ標準時 (GMT) との時差 例: <i>+0200</i>    <i>P</i> グリニッジ標準時 (GMT) との時差。時間と分をコロンで区切った形式 (PHP 5.1.3 で追加)。 例: <i>+02:00</i>    <i>T</i> タイムゾーンの略称 例: <i>EST</i>, <i>MDT</i> ...   <i>Z</i> タイムゾーンのオフセット秒数。 UTC の西側のタイムゾーン用のオフセットは常に負です。そして、 UTC の東側のオフセットは常に正です。  <i>-43200</i> から <i>50400</i>    <i>全ての日付/時刻</i> --- ---   <i>c</i> ISO 8601 日付 (PHP 5 で追加されました) 2004-02-12T15:19:21+00:00   <i>r</i>  » RFC 2822 フォーマットされた日付 例: <i>Thu, 21 Dec 2000 16:01:07 +0200</i>    <i>U</i> Unix Epoch (1970 年 1 月 1 日 0 時 0 分 0 秒) からの秒数  <code>time()</code> も参照    <p>フォーマット文字列中の認識されない文字は、そのまま表示されます。 <i>Z</i> 形式は、 <code>gmdate()</code> で使用した場合、常に <i>0</i> を返します。</p>  <p><b>注意</b>:</p> <p>この関数が受け付けるのは <code>integer</code> のタイムスタンプだけです。したがって、書式指定文字 <i>u</i> が有用となるのは <code>date_create()</code> で作成したタイムスタンプを用いて <code>date_format()</code> を使用した場合のみです。</p>
	 * @param int $timestamp <p>オプションのパラメータ <code>timestamp</code> は、 <code>integer</code> 型の Unix タイムスタンプです。 <code>timestamp</code> が指定されなかった場合のデフォルト値は、 現在の時刻です。言い換えると、デフォルトは <code>time()</code> の返り値となります。</p>
	 * @return string <p>日付を表す文字列を返します。 <code>timestamp</code> に数字以外が使用された場合は <b><code>FALSE</code></b> が返され、<b><code>E_WARNING</code></b> レベルのエラーが発生します。</p>
	 * @link https://php.net/manual/ja/function.date.php
	 * @see gmdate(), idate(), getdate(), getlastmod(), mktime(), strftime(), time(), strtotime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function date(string $format, int $timestamp  = 'time()'): string {}

	/**
	 * 年月日時分秒の値を DateTime オブジェクトに加える
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した DateInterval オブジェクトを、 指定した DateTime オブジェクトに加えます。</p>
	 * @param \DateTime $object <p>手続き型のみ: <code>date_create()</code> が返す DateTime オブジェクト。 この関数は、このオブジェクトを変更します。</p>
	 * @param \DateInterval $interval <p>DateInterval オブジェクト。</p>
	 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.add.php
	 * @see DateTime::sub(), DateTime::diff(), DateTime::modify()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_add(\DateTime $object, \DateInterval $interval): \DateTime {}

	/**
	 * 新しい DateTime オブジェクトを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>新しい DateTime オブジェクトを返します。</p>
	 * @param string $time <p>日付/時刻 文字列。有効な書式については 日付と時刻の書式 で説明しています。</p> <p>ここに <b><code>NULL</code></b> を指定して <code>$timezone</code> パラメータを使うと、現在時刻を取得できます。</p>
	 * @param \DateTimeZone $timezone <p><code>$time</code> のタイムゾーンを表す DateTimeZone オブジェクト。</p> <p><code>$timezone</code> を省略した場合は、 現在のタイムゾーンを使います。</p>  <p><b>注意</b>:</p> <p><code>$time</code> パラメータが UNIX タイムスタンプ (<i>@946684800</i> など) であったりタイムゾーンつきで指定した場合 (<i>2010-01-28T15:00:00+02:00</i> など) は、 <code>$timezone</code> パラメータや現在のタイムゾーンは無視されます。</p>
	 * @return DateTime <p>新しい DateTime のインスタンスを返します。 手続き型 の場合は、失敗したときに <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.construct.php
	 * @see DateTime::createFromFormat(), DateTimeZone::__construct(), date_default_timezone_set(), DateTime::getLastErrors(), checkdate()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_create(string $time = "now", \DateTimeZone $timezone = NULL): \DateTime {}

	/**
	 * 指定した書式で時刻文字列をパースする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>新しい DateTime オブジェクトを返します。 このオブジェクトは、<code>time</code> で指定した文字列を <code>format</code> で指定した書式に沿って解釈した時刻を表します。</p>
	 * @param string $format <p>書式を文字列で渡します。以下の書式オプションを参照ください。 大半は、<code>date()</code> で使える文字と同じです。</p> <p></p> <b><code>format</code> パラメータに渡せる文字</b>    <code>format</code> 文字 説明 取りうる値の例     <i>日</i> --- ---    <i>d</i> および <i>j</i>  2桁の日付。先頭のゼロを含むものと含まないもの  <i>01</i> から <i>31</i> あるいは <i>1</i> から <i>31</i>     <i>D</i> および <i>l</i>  曜日を表す文字列  <i>Mon</i> から <i>Sun</i> あるいは <i>Sunday</i> から <i>Saturday</i>    <i>S</i> 日付の後につける英語の接尾辞。二文字。処理中には無視されます。  <i>st</i>、<i>nd</i>、<i>rd</i> あるいは <i>th</i>    <i>z</i> 年始からの通算日数 (最初は 0)  <i>0</i> から <i>365</i>    <i>月</i> --- ---    <i>F</i> および <i>M</i>  月を表す文字列。January あるいは Sept など  <i>January</i> から <i>December</i> あるいは <i>Jan</i> から <i>Dec</i>     <i>m</i> および <i>n</i>  月を表す数値。先頭のゼロを含むものと含まないもの  <i>01</i> から <i>12</i> あるいは <i>1</i> から <i>12</i>    <i>年</i> --- ---   <i>Y</i> 4 桁の数値で表した年 例: <i>1999</i> あるいは <i>2003</i>    <i>y</i>  2 桁の数値で表した年 (1970年から2069年の間だとみなされます)   例: <i>99</i> あるいは <i>03</i> (それぞれ、 <i>1999</i> および <i>2003</i> と見なされます)    <i>時刻</i> --- ---    <i>a</i> および <i>A</i>  午前および午後  <i>am</i> あるいは <i>pm</i>     <i>g</i> および <i>h</i>  12 時間制での時間。先頭のゼロを含むものと含まないもの  <i>1</i> から <i>12</i> あるいは <i>01</i> から <i>12</i>     <i>G</i> and <i>H</i>  24 時間制での時間。先頭のゼロを含むものと含まないもの  <i>0</i> から <i>23</i> あるいは <i>00</i> から <i>23</i>    <i>i</i> 分。先頭のゼロを含む  <i>00</i> から <i>59</i>    <i>s</i> 秒。先頭のゼロを含む  <i>00</i> から <i>59</i>    <i>u</i> マイクロ秒 (最大 6 桁) 例: <i>45</i>, <i>654321</i>    <i>タイムゾーン</i> --- ---    <i>e</i>、<i>O</i>、 <i>P</i> および <i>T</i>  タイムゾーン識別子、UTC からの時差 (時間単位)、 UTC からの時差 (コロン区切りでの時間と分)、そしてタイムゾーンの短縮形 例: <i>UTC</i>、<i>GMT</i>、 <i>Atlantic/Azores</i> あるいは <i>+0200</i> あるいは <i>+02:00</i> あるいは <i>EST</i>、<i>MDT</i>    <i>完全な日付/時刻</i> --- ---   <i>U</i> Unix エポック (January 1 1970 00:00:00 GMT) からの経過秒数 例: <i>1292177455</i>    <i>空白および区切り</i> --- ---    <i> </i> (空白) 空白 1 文字あるいはタブ 1 文字 例: <i> </i>    <i>#</i>  次の区切り文字のいずれか: <i>;</i>, <i>:</i>, <i>/</i>, <i>.</i>, <i>,</i>, <i>-</i>, <i>(</i> あるいは <i>)</i>  例: <i>/</i>     <i>;</i>, <i>:</i>, <i>/</i>, <i>.</i>, <i>,</i>, <i>-</i>, <i>(</i> あるいは <i>)</i>  指定した文字 例: <i>-</i>    <i>&#63;</i> ランダムなバイト 例: <i>^</i> (UTF-8 文字の場合は複数の <i>&#63;</i> が必要になるでしょう。この場合、おそらく <i>&#42;</i> を使うと要望が満たせるはずです)   <i>&#42;</i> 次の区切り文字あるいは数字までのランダムなバイト列 例: <i>Y-&#42;-d</i> の中の <i>&#42;</i> は、文字列 <i>2009-aWord-08</i> の中の <i>aWord</i> にマッチします   <i>!</i> すべてのフィールド (年、月、日、時、分、秒、マイクロ秒およびタイムゾーン情報) を Unix エポックにリセットする  <i>!</i> がなければ、すべてのフィールドは現在の日時に設定されます。   <i>|</i> まだパースされていないすべてのフィールド (年、月、日、時、分、秒、マイクロ秒およびタイムゾーン情報) を Unix エポックにリセットする  <i>Y-m-d|</i> は、文字列をパースした結果から年月日を設定し 時分秒には 0 を設定します。   <i>+</i> この文字があると、文字列のそれ以降のデータではエラーが発生せず、 かわりに警告を発生させる それ以降のデータが存在したかどうかを調べるには <code>DateTime::getLastErrors()</code> を使います。    <p>書式文字列の中に解釈不能な文字が含まれていると処理は失敗し、 返り値にはエラーメッセージが付加されます。エラーメッセージを調べるには <code>DateTime::getLastErrors()</code> を使います。</p> <p><code>format</code> にリテラル文字を含めるには、 バックスラッシュ (<i>\</i>) でエスケープする必要があります。</p> <p><code>format</code> に文字 <i>!</i> が含まれない場合は、作成した時刻値のうち <code>format</code> で指定されていない部分を 現在のシステム時刻で初期化します。</p> <p><code>format</code> に文字 <i>!</i> が含まれる場合は、作成した時刻値のうち <code>format</code> で指定されていない部分と <i>!</i> の左側の部分を Unix エポックの対応する箇所の値で初期化します。</p> <p>Unix エポックは 1970-01-01 00:00:00 です。</p>
	 * @param string $time <p>時刻を表す文字列。</p>
	 * @param \DateTimeZone $timezone <p>指定したいタイムゾーンを表す DateTimeZone オブジェクト。</p> <p><code>timezone</code> を省略し、かつ <code>time</code> にタイムゾーンが含まれない場合は、 現在のタイムゾーンを使います。</p>  <p><b>注意</b>:</p> <p><code>time</code> パラメータが UNIX タイムスタンプ (例: <i>946684800</i>) だったりタイムゾーンを含んでいたり (例: <i>2010-01-28T15:00:00+02:00</i>) する場合は、 <code>timezone</code> パラメータや現在のタイムゾーンは無視します。</p>
	 * @return DateTime <p>新しい DateTime のインスタンス、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.createfromformat.php
	 * @see DateTime::__construct(), DateTime::getLastErrors(), checkdate(), strptime()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_create_from_format(string $format, string $time, \DateTimeZone $timezone = NULL): \DateTime {}

	/**
	 * 新しい DateTimeImmutable オブジェクトを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>DateTime::__construct()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
	 * @param string $time
	 * @param \DateTimeZone $timezone
	 * @return DateTimeImmutable
	 * @link https://php.net/manual/ja/datetimeimmutable.construct.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function date_create_immutable(string $time = "now", \DateTimeZone $timezone = NULL): \DateTimeImmutable {}

	/**
	 * 指定した書式でフォーマットした新しい DateTimeImmutable オブジェクトを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>DateTime::createFromFormat()</code> と似ていますが、 DateTimeImmutable で動作します。</p>
	 * @param string $format
	 * @param string $time
	 * @param \DateTimeZone $timezone
	 * @return DateTimeImmutable
	 * @link https://php.net/manual/ja/datetimeimmutable.createfromformat.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	function date_create_immutable_from_format(string $format, string $time, \DateTimeZone $timezone = NULL): \DateTimeImmutable {}

	/**
	 * 日付を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>DateTime オブジェクトの現在の日付をリセットし、別の日付にします。</p>
	 * @param \DateTime $object <p>手続き型のみ: <code>date_create()</code> が返す DateTime オブジェクト。 この関数は、このオブジェクトを変更します。</p>
	 * @param int $year <p>その日付の年。</p>
	 * @param int $month <p>その日付の月。</p>
	 * @param int $day <p>その日付の日。</p>
	 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.setdate.php
	 * @see DateTime::setISODate(), DateTime::setTime()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_date_set(\DateTime $object, int $year, int $month, int $day): \DateTime {}

	/**
	 * スクリプト中の日付/時刻関数で使用されるデフォルトタイムゾーンを取得する
	 * <p>この関数は、デフォルトのタイムゾーンを以下の優先順位で取得して返します。</p><p><code>date_default_timezone_set()</code> 関数を使用して 設定したタイムゾーン (もし何か設定されていれば) を読み込む</p><p>PHP 5.4.0 より前のバージョン<i>のみ</i>: TZ 環境変数 (もし空白でなければ) を読み込む</p><p>date.timezone ini オプション (設定されていれば) を読み込む</p><p>PHP 5.4.0 より前のバージョン<i>のみ</i>: ホスト OS に問い合わせる (もし OS がそれに対応しており、許可されていれば)。 これは、タイムゾーンを<i>推測</i>するアルゴリズムを使います。 このアルゴリズムはあらゆる状況で正しく動作するとは限りません。 この段階に到達したときには警告が表示されます。 この推測が正しくなることに期待するのではなく、 date.timezone に正しいタイムゾーンを設定するようにしましょう。</p><p>上のすべてが失敗した場合は、<b>date_default_timezone_get()</b> はデフォルトのタイムゾーンである <i>UTC</i> を返します。</p>
	 * @return string <p><code>string</code> を返します。</p>
	 * @link https://php.net/manual/ja/function.date-default-timezone-get.php
	 * @see date_default_timezone_set()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function date_default_timezone_get(): string {}

	/**
	 * スクリプト中の日付/時刻関数で使用されるデフォルトタイムゾーンを設定する
	 * <p><b>date_default_timezone_set()</b> は、日付/時刻関数で 使用されるデフォルトタイムゾーンを設定します。</p><p><b>注意</b>:</p><p>PHP 5.1.0 以降（日付/時刻 関数が書き直されてから）、タイムゾーンを 正しく設定せずに日付/時刻関数をコールすると <b><code>E_NOTICE</code></b> が発生し、またシステムの設定や TZ 環境変数を 使用すると <b><code>E_WARNING</code></b> が発生するようになりました。</p><p>スクリプト内でこの関数を使用してデフォルトタイムゾーンを設定するかわりに、 INI 設定 date.timezone でデフォルトタイムゾーンを設定することもできます。</p>
	 * @param string $timezone_identifier <p>タイムゾーン ID 。例えば <i>UTC</i> や <i>Europe/Lisbon</i> など。有効な ID の一覧は サポートされるタイムゾーンのリスト にあります。</p>
	 * @return bool <p>この関数は、<code>timezone_identifier</code> が 無効なものである場合に <b><code>FALSE</code></b>、それ以外の場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.date-default-timezone-set.php
	 * @see date_default_timezone_get()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function date_default_timezone_set(string $timezone_identifier): bool {}

	/**
	 * ふたつの DateTime オブジェクトの差を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ふたつの DateTime オブジェクトの差を返します。</p>
	 * @param \DateTime $datetime1
	 * @param \DateTime $datetime2
	 * @param bool $absolute <p>間隔が正の数になるようにするか否か。</p>
	 * @return DateInterval <p>ふたつの日付の差をあらわす DateInterval オブジェクトを返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link https://php.net/manual/ja/datetime.diff.php
	 * @see DateInterval::format(), DateTime::add(), DateTime::sub()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_diff(\DateTime $datetime1, \DateTime $datetime2, bool $absolute = false): \DateInterval {}

	/**
	 * 指定した書式でフォーマットした日付を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した書式でフォーマットした日付を返します。</p>
	 * @param \DateTime $object <p>手続き型のみ: <code>date_create()</code> が返す DateTime オブジェクト</p>
	 * @param string $format <p><code>date()</code> が理解できる書式指定文字列。</p>
	 * @return string <p>成功した場合にフォーマット済みの日付文字列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.format.php
	 * @see date()
	 * @since PHP 5 >= 5.2.1, PHP 7
	 */
	function date_format(\DateTime $object, string $format): string {}

	/**
	 * 警告およびエラーを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>日付/時刻文字列のパース時に見つかった警告やエラーの配列を返します。</p>
	 * @return array <p>警告やエラーに関する情報を含む配列を返します。</p>
	 * @link https://php.net/manual/ja/datetime.getlasterrors.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_get_last_errors(): array {}

	/**
	 * DateInterval::createFromDateString() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>DateInterval::createFromDateString()</code></p>
	 * @link https://php.net/manual/ja/function.date-interval-create-from-date-string.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_interval_create_from_date_string() {}

	/**
	 * DateInterval::format() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>DateInterval::format()</code></p>
	 * @link https://php.net/manual/ja/function.date-interval-format.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_interval_format() {}

	/**
	 * ISO 日付を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ISO 8601 標準形式、つまり週と日オフセットで日付を設定します。</p>
	 * @param \DateTime $object <p>手続き型のみ: <code>date_create()</code> が返す DateTime オブジェクト。 この関数は、このオブジェクトを変更します。</p>
	 * @param int $year <p>その日付の年。</p>
	 * @param int $week <p>その日付の週。</p>
	 * @param int $day <p>週の最初の日からのオフセット。</p>
	 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.setisodate.php
	 * @see DateTime::setDate(), DateTime::setTime()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_isodate_set(\DateTime $object, int $year, int $week, int $day = 1): \DateTime {}

	/**
	 * タイムスタンプを変更する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>strtotime()</code> 形式で加算あるいは減算することによって DateTime オブジェクトのタイムスタンプを変更します。</p>
	 * @param \DateTime $object <p>手続き型のみ: <code>date_create()</code> が返す DateTime オブジェクト。 この関数は、このオブジェクトを変更します。</p>
	 * @param string $modify <p>日付/時刻 文字列。有効な書式については 日付と時刻の書式 で説明しています。</p>
	 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.modify.php
	 * @see strtotime(), DateTime::add(), DateTime::sub(), DateTime::setDate(), DateTime::setISODate(), DateTime::setTime(), DateTime::setTimestamp()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_modify(\DateTime $object, string $modify): \DateTime {}

	/**
	 * タイムゾーンのオフセットを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンのオフセットを返します。</p>
	 * @param \DateTime $object <p>手続き型のみ: <code>date_create()</code> が返す DateTime オブジェクト</p>
	 * @return int <p>成功した場合には UTC からのタイムゾーンオフセット秒数、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.getoffset.php
	 * @since PHP 5 >= 5.2.1, PHP 7
	 */
	function date_offset_get(\DateTime $object): int {}

	/**
	 * 指定した日付に関する詳細な情報を連想配列で返す
	 * @param string $date <p><code>strtotime()</code> が理解できる書式の日付。</p>
	 * @return array <p>成功した場合に日付情報を含む配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.date-parse.php
	 * @see checkdate(), getdate()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_parse(string $date): array {}

	/**
	 * 指定した書式でフォーマットされた日付についての情報を取得する
	 * <p>指定した日付についての詳細情報を連想配列で返します。</p>
	 * @param string $format <p><code>DateTime::createFromFormat()</code> が理解できるフォーマット。</p>
	 * @param string $date <p>日付をあらわす文字列。</p>
	 * @return array <p>指定した日付についての詳細情報を連想配列で返します。</p>
	 * @link https://php.net/manual/ja/function.date-parse-from-format.php
	 * @see DateTime::createFromFormat(), checkdate()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_parse_from_format(string $format, string $date): array {}

	/**
	 * 年月日時分秒の値を DateTime オブジェクトから引く
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した DateInterval オブジェクトを、 指定した DateTime オブジェクトから引きます。</p>
	 * @param \DateTime $object <p>手続き型のみ: <code>date_create()</code> が返す DateTime オブジェクト。 この関数は、このオブジェクトを変更します。</p>
	 * @param \DateInterval $interval <p>DateInterval オブジェクト。</p>
	 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.sub.php
	 * @see DateTime::add(), DateTime::diff(), DateTime::modify()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_sub(\DateTime $object, \DateInterval $interval): \DateTime {}

	/**
	 * 日の出/日の入り時刻と薄明かり (twilight) の開始/終了時刻の情報を含む配列を返す
	 * @param int $time <p>タイムスタンプ。</p>
	 * @param float $latitude <p>緯度を表す度数。</p>
	 * @param float $longitude <p>経度を表す度数。</p>
	 * @return array <p>成功した場合に配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.date-sun-info.php
	 * @see date_sunrise(), date_sunset()
	 * @since PHP 5 >= 5.1.2, PHP 7
	 */
	function date_sun_info(int $time, float $latitude, float $longitude): array {}

	/**
	 * 指定した日付と場所についての日の出時刻を返す
	 * <p><b>date_sunrise()</b> は、与えられた日付 (<code>timestamp</code> で指定する) と場所についての日の出の時刻を返します。</p>
	 * @param int $timestamp <p>日の出時刻を取得する日の <code>timestamp</code>。</p>
	 * @param int $format <p></p> <b><code>format</code> 定数</b>   定数 説明 例     SUNFUNCS_RET_STRING 結果を <code>string</code> で返します。 16:46   SUNFUNCS_RET_DOUBLE 結果を <code>float</code> で返します。 16.78243132   SUNFUNCS_RET_TIMESTAMP 結果を <code>integer</code> (タイムスタンプ) で返します。 1095034606
	 * @param float $latitude <p>デフォルトは北緯で、南緯は負の値で表します。 <i>date.default_latitude</i> も参照ください。</p>
	 * @param float $longitude <p>デフォルトは東経で、西経は負の値で表します。 <i>date.default_longitude</i> も参照ください。</p>
	 * @param float $zenith <p>デフォルトは <i>date.sunrise_zenith</i> です。</p>
	 * @param float $gmt_offset
	 * @return mixed <p>日の出時刻を、指定した <code>format</code> で返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.date-sunrise.php
	 * @see date_sunset()
	 * @since PHP 5, PHP 7
	 */
	function date_sunrise(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude  = 'ini_get("date.default_latitude")', float $longitude  = 'ini_get("date.default_longitude")', float $zenith  = 'ini_get("date.sunrise_zenith")', float $gmt_offset = 0) {}

	/**
	 * 指定した日付と場所についての日の入り時刻を返す
	 * <p><b>date_sunset()</b> は、与えられた日付 (<code>timestamp</code> で指定する) と場所についての日の入り時刻を返します。</p>
	 * @param int $timestamp <p>日の入り時刻を取得する日の <code>timestamp</code>。</p>
	 * @param int $format <p></p> <b><code>format</code> 定数</b>   定数 説明 例     SUNFUNCS_RET_STRING 結果を <code>string</code> で返します。 16:46   SUNFUNCS_RET_DOUBLE 結果を <code>float</code> で返します。 16.78243132   SUNFUNCS_RET_TIMESTAMP 結果を <code>integer</code> (タイムスタンプ) で返します。 1095034606
	 * @param float $latitude <p>デフォルトは北緯で、南緯は負の値で表します。 <i>date.default_latitude</i> も参照ください。</p>
	 * @param float $longitude <p>デフォルトは東経で、西経は負の値で表します。 <i>date.default_longitude</i> も参照ください。</p>
	 * @param float $zenith <p>デフォルトは <i>date.sunset_zenith</i> です。</p>
	 * @param float $gmt_offset
	 * @return mixed <p>日の入り時刻を、指定した <code>format</code> で返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.date-sunset.php
	 * @see date_sunrise()
	 * @since PHP 5, PHP 7
	 */
	function date_sunset(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude  = 'ini_get("date.default_latitude")', float $longitude  = 'ini_get("date.default_longitude")', float $zenith  = 'ini_get("date.sunset_zenith")', float $gmt_offset = 0) {}

	/**
	 * 時刻を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>DateTime オブジェクトの現在時刻を別の時刻にリセットします。</p>
	 * @param \DateTime $object <p>手続き型のみ: <code>date_create()</code> が返す DateTime オブジェクト。 この関数は、このオブジェクトを変更します。</p>
	 * @param int $hour <p>その時刻の時。</p>
	 * @param int $minute <p>その時刻の分。</p>
	 * @param int $second <p>その時刻の秒。</p>
	 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.settime.php
	 * @see DateTime::setDate(), DateTime::setISODate()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_time_set(\DateTime $object, int $hour, int $minute, int $second = 0): \DateTime {}

	/**
	 * Unix タイムスタンプを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Unix タイムスタンプを取得します。</p>
	 * @param \DateTime $object
	 * @return int <p>その日付をあらわす Unix タイムスタンプを返します。</p>
	 * @link https://php.net/manual/ja/datetime.gettimestamp.php
	 * @see DateTime::setTimestamp(), DateTime::format()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_timestamp_get(\DateTime $object): int {}

	/**
	 * Unix タイムスタンプを用いて日付と時刻を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Unix タイムスタンプを用いて日付と時刻を設定します。</p>
	 * @param \DateTime $object <p>手続き型のみ: <code>date_create()</code> が返す DateTime オブジェクト。 この関数は、このオブジェクトを変更します。</p>
	 * @param int $unixtimestamp <p>Unix タイムスタンプ。</p>
	 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.settimestamp.php
	 * @see DateTime::getTimestamp()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function date_timestamp_set(\DateTime $object, int $unixtimestamp): \DateTime {}

	/**
	 * 指定した DateTime に関連するタイムゾーンを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>指定した DateTime に関連するタイムゾーンを返します。</p>
	 * @param \DateTime $object <p>手続き型のみ: <code>date_create()</code> が返す DateTime オブジェクト</p>
	 * @return DateTimeZone <p>成功した場合に DateTimeZone オブジェクト、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.gettimezone.php
	 * @see DateTime::setTimezone()
	 * @since PHP 5 >= 5.2.1, PHP 7
	 */
	function date_timezone_get(\DateTime $object): \DateTimeZone {}

	/**
	 * DateTime オブジェクトのタイムゾーンを設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>新しいタイムゾーンを DateTime オブジェクトに設定します。</p>
	 * @param \DateTime $object <p>手続き型のみ: <code>date_create()</code> が返す DateTime オブジェクト。 この関数は、このオブジェクトを変更します。</p>
	 * @param \DateTimeZone $timezone <p>指定したいタイムゾーンを表す DateTimeZone オブジェクト。</p>
	 * @return DateTime <p>メソッドチェインに使う DateTime オブジェクトを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetime.settimezone.php
	 * @see DateTime::getTimezone(), DateTimeZone::__construct()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function date_timezone_set(\DateTime $object, \DateTimeZone $timezone): \DateTime {}

	/**
	 * 日付/時刻情報を取得する
	 * <p><code>timestamp</code> に関する日付情報を有する連想配列を返します。 timestamp が指定されない場合は、現在のローカルな時間に関する情報を返します。</p>
	 * @param int $timestamp <p>オプションのパラメータ <code>timestamp</code> は、 <code>integer</code> 型の Unix タイムスタンプです。 <code>timestamp</code> が指定されなかった場合のデフォルト値は、 現在の時刻です。言い換えると、デフォルトは <code>time()</code> の返り値となります。</p>
	 * @return array <p><code>timestamp</code> に関連する情報を連想配列で返します。 返される連想配列の内容は、次のようになります。</p> <b>返される連想配列のキー</b>   キー 説明 戻り値の例     <i>"seconds"</i> 秒。数値。  <i>0</i> から <i>59</i>    <i>"minutes"</i> 分。数値。  <i>0</i> から <i>59</i>    <i>"hours"</i> 時。数値  <i>0</i> から <i>23</i>    <i>"mday"</i> 月単位の日。数値  <i>1</i> から <i>31</i>    <i>"wday"</i> 曜日。数値。  <i>0</i> (日曜) から <i>6</i> (土曜)   <i>"mon"</i> 月。数値。  <i>1</i> から <i>12</i>    <i>"year"</i> 年。4桁の数値。 例: <i>1999</i> あるいは <i>2003</i>    <i>"yday"</i> 年単位の日。数値。  <i>0</i> から <i>365</i>    <i>"weekday"</i> 曜日。フルスペルの文字。  <i>Sunday</i> から <i>Saturday</i>    <i>"month"</i> 月。フルスペルの文字。  <i>January</i> から <i>December</i>    <i>0</i> UNIX時（1970年1月1日）からの秒数。 <code>time()</code>の戻り値と同様。 <code>date()</code>でも使用される。 システムによって違うが、通常は<i>-2147483648</i> から <i>2147483647</i>.
	 * @link https://php.net/manual/ja/function.getdate.php
	 * @see date(), idate(), localtime(), time(), setlocale()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function getdate(int $timestamp  = 'time()'): array {}

	/**
	 * 現在の時間を得る
	 * <p>この関数は、gettimeofday(2) へのインターフェイスです。 この関数は、システムコールから返されたデータを有する連想配列を返します。</p>
	 * @param bool $return_float <p><b><code>TRUE</code></b> を指定すると、配列ではなく float で返します。</p>
	 * @return mixed <p>デフォルトでは配列を返します。<code>return_float</code> が設定されている場合は <code>float</code> を返します。</p><p>配列のキー:</p><ul> <li>  "sec" - UNIX エポックからの秒  </li> <li>  "usec" - マイクロ秒  </li> <li>  "minuteswest" - グリニッジ基準の分  </li> <li>  "dsttime" - 夏時間補正の型  </li> </ul>
	 * @link https://php.net/manual/ja/function.gettimeofday.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gettimeofday(bool $return_float = FALSE) {}

	/**
	 * GMT/UTC の日付/時刻を書式化する
	 * <p><code>date()</code> 関数と同じですが、返される時刻が グリニッジ標準時 (GMT) であるところが異なります。</p>
	 * @param string $format <p>出力される文字列の書式。<code>date()</code> 関数の書式オプションを参照ください。</p>
	 * @param int $timestamp <p>オプションのパラメータ <code>timestamp</code> は、 <code>integer</code> 型の Unix タイムスタンプです。 <code>timestamp</code> が指定されなかった場合のデフォルト値は、 現在の時刻です。言い換えると、デフォルトは <code>time()</code> の返り値となります。</p>
	 * @return string <p>日付を表す文字列を返します。 <code>timestamp</code> に数字以外が使用された場合は <b><code>FALSE</code></b> が返され、<b><code>E_WARNING</code></b> レベルのエラーが発生します。</p>
	 * @link https://php.net/manual/ja/function.gmdate.php
	 * @see date(), mktime(), gmmktime(), strftime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gmdate(string $format, int $timestamp  = 'time()'): string {}

	/**
	 * GMT 日付から Unix タイムスタンプを取得する
	 * <p>指定されるパラメータが GMT 日付を表すこと以外は <code>mktime()</code> と同じです。 <b>gmmktime()</b> は内部で <code>mktime()</code> を使用しているので、ローカル時刻として有効な値のみが使用可能です。</p><p><code>mktime()</code> と同様に、 引数は右から順に省略することができます。 省略された引数は、GMT の日付と時刻に従って、現在の値にセットされます。</p>
	 * @param int $hour <p><code>month</code>、<code>day</code> と <code>year</code> で決まる日付の 0 時から数えた「時」。負の値は、その日の 0 時から前にさかのぼった時間を表します。 23 より大きい値は、その翌日以降の該当する時間を表します。</p>
	 * @param int $minute <p><code>hour</code> 時 0 分から数えた「分」。 負の値は、その前の時刻を表します。 59 より大きい値は、その次の時間以降の該当する時間を表します。</p>
	 * @param int $second <p><code>minute</code> 分 0 秒から数えた「秒」。 負の値は、その前の時刻を表します。 59 より大きい値は、その次の分以降の該当する時間を表します。</p>
	 * @param int $month <p>前年末から数えた月数。1 から 12 までの場合は、カレンダーどおりのその年の「月」を表します。 (負の値を含めた) 1 より小さい値は、前年の月を逆順でたどります。 つまり 0 なら 12 月、-1 なら 11 月になるということです。 12 より大きい値は、その翌年以降の該当する月を表します。</p>
	 * @param int $day <p>前月末から数えた日数。1 から 28、29、30、31 (月によって異なる) までの場合は、その月の「日」を表します。 (負の値を含めた) 1 より小さい値は、前月の日を逆順でたどります。 つまり 0 なら前月の末日、-1 ならそのさらに前日になるということです。 その月の日数より大きい値は、翌月以降の該当する日を表します。</p>
	 * @param int $year <p>年</p>
	 * @param int $is_dst <p>常に GMT 日付を表すので、<code>is_dst</code> は結果に影響を及ぼしません。</p>  <p><b>注意</b>:</p> <p>このパラメータは PHP 7.0.0 で削除されました。</p>
	 * @return int <p>Unix タイムスタンプを <code>integer</code> で返します。</p>
	 * @link https://php.net/manual/ja/function.gmmktime.php
	 * @see mktime(), date(), time()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gmmktime(int $hour  = 'gmdate("H")', int $minute  = 'gmdate("i")', int $second  = 'gmdate("s")', int $month  = 'gmdate("n")', int $day  = 'gmdate("j")', int $year  = 'gmdate("Y")', int $is_dst = -1): int {}

	/**
	 * ロケールの設定に基づいて GMT/UTC 時刻/日付をフォーマットする
	 * <p>グリニッジ標準時を返すこと以外は、 <code>strftime()</code> と同じ動作をします。例えば、東部標準時 (GMT -0500) で実行した場合、以下の最初の行は "Dec 31 1998 20:00:00" を出力し、二行目は "Jan 01 1999 01:00:00" を出力します。</p>
	 * @param string $format <p><code>strftime()</code> の説明を参照ください。</p>
	 * @param int $timestamp <p>オプションのパラメータ <code>timestamp</code> は、 <code>integer</code> 型の Unix タイムスタンプです。 <code>timestamp</code> が指定されなかった場合のデフォルト値は、 現在の時刻です。言い換えると、デフォルトは <code>time()</code> の返り値となります。</p>
	 * @return string <p>指定した <code>timestamp</code> または timestamp が指定されていない場合に現在のローカル時間を用いて、 指定したフォーマット文字列に基づき文字列をフォーマットして返します。 月および曜日の名前、およびその他の言語依存の文字列は、 <code>setlocale()</code> で設定された現在のロケールを尊重して表示されます。</p>
	 * @link https://php.net/manual/ja/function.gmstrftime.php
	 * @see strftime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gmstrftime(string $format, int $timestamp  = 'time()'): string {}

	/**
	 * ローカルな時刻/日付を整数として整形する
	 * <p>指定された引数 <code>timestamp</code> を、 与えられたフォーマット文字列によりフォーマットし、日付数値を返します。 タイムスタンプが与えられない場合は、現在のローカル時刻が使われます。 つまり、<code>timestamp</code> はオプションであり、 そのデフォルト値は <code>time()</code> の値です。</p><p>関数 <code>date()</code> と異なり、<b>idate()</b> は <code>format</code> パラメータ中は一文字しか受け取りません。</p>
	 * @param string $format <p></p> <b>以下の文字が <code>format</code> パラメータ文字列として認識されます</b>    <code>format</code> 文字 説明     <i>B</i> Swatch ビート/インターネット時間   <i>d</i> 月の日   <i>h</i> 時 (12 時間単位)   <i>H</i> 時 (24 時間単位)   <i>i</i> 分    <i>I</i> (大文字の i) 夏時間の適用中は <i>1</i>、 そうでなければ <i>0</i> を返す    <i>L</i> (大文字の l) 閏年なら <i>1</i>、 そうでなければ <i>0</i> を返す   <i>m</i> 月数   <i>s</i> 秒   <i>t</i> 現在の月の日数   <i>U</i> Unix Epoch (January 1 1970 00:00:00 UTC) からの秒数。 これは <code>time()</code> と同じです   <i>w</i> 曜日 (日曜日は <i>0</i>)   <i>W</i> ISO-8601 形式。月曜日から始まる年単位の週番号   <i>y</i> 年 (1 桁あるいは 2 桁の数値 - 下の「注意」を確認ください)   <i>Y</i> 年 (4 桁)   <i>z</i> 年間の通算日   <i>Z</i> タイムゾーンのオフセット秒数
	 * @param int $timestamp <p>オプションのパラメータ <code>timestamp</code> は、 <code>integer</code> 型の Unix タイムスタンプです。 <code>timestamp</code> が指定されなかった場合のデフォルト値は、 現在の時刻です。言い換えると、デフォルトは <code>time()</code> の返り値となります。</p>
	 * @return int <p>整数値を返します。</p><p><b>idate()</b> が返す値の型は常に <code>integer</code> であり、 先頭に "0" がくることはありません。そのため、<b>idate()</b> の返す結果が予想より少ない桁数になることもあります。以下の例を参照ください。</p>
	 * @link https://php.net/manual/ja/function.idate.php
	 * @see date(), getdate(), time()
	 * @since PHP 5, PHP 7
	 */
	function idate(string $format, int $timestamp  = 'time()'): int {}

	/**
	 * ローカルタイムを得る
	 * <p><b>localtime()</b> 関数は、C 言語の 同名の関数コールにより返される構造体と同じ内容の配列を返します。</p>
	 * @param int $timestamp <p>オプションのパラメータ <code>timestamp</code> は、 <code>integer</code> 型の Unix タイムスタンプです。 <code>timestamp</code> が指定されなかった場合のデフォルト値は、 現在の時刻です。言い換えると、デフォルトは <code>time()</code> の返り値となります。</p>
	 * @param bool $is_associative <p><b><code>FALSE</code></b> に設定されるか省略された場合は、 配列は通常の数値を添字とした配列として返されます。 <b><code>TRUE</code></b> に設定された場合は、 <b>localtime()</b> は C 言語の関数 localtime のコールにより返される構造体の全ての要素を有する連想配列を返します。 この連想配列の各キーの名前は次のようになります。</p> <p></p><ul> <li>  "tm_sec" - 秒 (<i>0</i> から <i>59</i>)  </li> <li>  "tm_min" - 分 (<i>0</i> から <i>59</i>)  </li> <li>  "tm_hour" - 時 (<i>0</i> から <i>23</i>)  </li> <li>  "tm_mday" - 月の日付 (<i>1</i> から <i>31</i>)  </li> <li>  "tm_mon" - 月 (<i>0</i> (1月) から <i>11</i> (12月))  </li> <li>  "tm_year" - 1900 年からの年数  </li> <li>  "tm_wday" - 曜日 (<i>0</i> (日曜日) から <i>6</i> (土曜日))  </li> <li>  "tm_yday" - 年単位の日付 (<i>0</i> から <i>365</i>)  </li> <li>  "tm_isdst" - 夏時間の適用中かどうか   適用中なら正の数、そうでなければ <i>0</i>、不明なら負の数。  </li> </ul>
	 * @return array
	 * @link https://php.net/manual/ja/function.localtime.php
	 * @see getdate()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function localtime(int $timestamp  = 'time()', bool $is_associative = FALSE): array {}

	/**
	 * 現在の Unix タイムスタンプをマイクロ秒まで返す
	 * <p><b>microtime()</b> は、現在の Unix タイムスタンプをマイクロ秒単位で返します。 この関数は、gettimeofday() システムコールをサポートする オペレーティングシステムでのみ使用できます。</p>
	 * @param bool $get_as_float <p><b><code>TRUE</code></b> を指定すると、<b>microtime()</b> は文字列ではなく <code>float</code> を返すようになります。詳細は、返り値の説明を参照ください。</p>
	 * @return mixed <p>デフォルトでは、<b>microtime()</b> は "msec sec" 形式の文字列を返します。ただし、<i>sec</i> は Unix エポック (1970 年 1 月 1 日 0:00:00 GMT) からの経過秒数、<i>msec</i> は <i>sec</i> から経過したマイクロ秒数を秒単位で表したものです。</p><p><code>get_as_float</code> を <b><code>TRUE</code></b> に設定すると、<b>microtime()</b> は Unixエポック からの経過秒数を マイクロ秒で正確になるように <code>float</code> で表したものを返します。</p>
	 * @link https://php.net/manual/ja/function.microtime.php
	 * @see time()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function microtime(bool $get_as_float = FALSE) {}

	/**
	 * 日付を Unix のタイムスタンプとして取得する
	 * <p>与えられた引数に従って UNIX のタイムスタンプを返します。 このタイムスタンプは、Unix epoch(1970年1月1日00:00:00 GMT)から 指定された時刻までの通算秒を表す長整数です。</p><p>引数は右から順に省略することができます。省略された引数は、 ローカルの日付と時刻に従って、現在の値にセットされます。</p>
	 * @param int $hour <p><code>month</code>、<code>day</code> と <code>year</code> で決まる日付の 0 時から数えた「時」。負の値は、その日の 0 時から前にさかのぼった時間を表します。 23 より大きい値は、その翌日以降の該当する時間を表します。</p>
	 * @param int $minute <p><code>hour</code> 時 0 分から数えた「分」。 負の値は、その前の時刻を表します。 59 より大きい値は、その次の時間以降の該当する時間を表します。</p>
	 * @param int $second <p><code>minute</code> 分 0 秒から数えた「秒」。 負の値は、その前の時刻を表します。 59 より大きい値は、その次の分以降の該当する時間を表します。</p>
	 * @param int $month <p>前年末から数えた月数。1 から 12 までの場合は、カレンダーどおりのその年の「月」を表します。 (負の値を含めた) 1 より小さい値は、前年の月を逆順でたどります。 つまり 0 なら 12 月、-1 なら 11 月になるということです。 12 より大きい値は、その翌年以降の該当する月を表します。</p>
	 * @param int $day <p>前月末から数えた日数。1 から 28、29、30、31 (月によって異なる) までの場合は、その月の「日」を表します。 (負の値を含めた) 1 より小さい値は、前月の日を逆順でたどります。 つまり 0 なら前月の末日、-1 ならそのさらに前日になるということです。 その月の日数より大きい値は、翌月以降の該当する日を表します。</p>
	 * @param int $year <p>年。2 桁または 4 桁の値を指定可能で、 0-69 の間の値は 2000-2069 に、70-100 は 1970-2000 にマップされます。 今日最も一般的なシステム、すなわち time_t が 32 ビットの符号付き整数である システムでは <code>year</code> として有効な範囲は 1901 から 2038 の間です。しかし、PHP 5.1.0 より前のバージョンではこの範囲が 1970 から 2038 に制限されているシステム (たとえば Windows) もありました。</p>
	 * @param int $is_dst <p>このパラメータはサマータイム (DST) の時に1にセットされ、 そうでない時に0、サマータイムであるかどうかが不明である場合に-1 にセットされます。 不明な場合、PHP はサマータイムかどうか推測しようとします。 PHP を実行しているシステムで DST が有効になっている、もしくは <code>is_dst</code> が 1 にセットされている場合、 一部の時刻は有効になりません。 もし DST が有効で例えば 2:00 の場合、2:00 から 3:00 までの全ての時刻は 無効になり、<b>mktime()</b> は不確定な値 (通常は負数) を返します。いくつかのシステム (例えば Solaris 8) は真夜中に DST を有効にしますので、DST が有効なときの 0:30 は前日の 23:30 と評価されます。</p>  <p><b>注意</b>:</p> <p>PHP 5.1.0 以降、このパラメータは廃止されました。その結果、 新しいタイムゾーン処理機能がかわりに使用されます。</p>   <p><b>注意</b>:</p> <p>このパラメータは PHP 7.0.0 で削除されました。</p>
	 * @return int <p><b>mktime()</b> は与えられた引数の Unix タイムスタンプを返します。引数が不正な場合、 この関数は <b><code>FALSE</code></b> を返します（PHP 5.1 より前のバージョンでは <i>-1</i> を返していました）。</p>
	 * @link https://php.net/manual/ja/function.mktime.php
	 * @see checkdate(), gmmktime(), date(), time()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function mktime(int $hour  = 'date("H")', int $minute  = 'date("i")', int $second  = 'date("s")', int $month  = 'date("n")', int $day  = 'date("j")', int $year  = 'date("Y")', int $is_dst = -1): int {}

	/**
	 * ロケールの設定に基づいてローカルな日付・時間をフォーマットする
	 * <p>ローカルの時刻・日付を、ロケール設定にもとづいてフォーマットします。 月および曜日の名前、およびその他の言語依存の文字列は、 <code>setlocale()</code> で設定された現在のロケールを尊重して表示されます。</p><p>使用する C ライブラリで、すべての変換指定子がサポートされているとは限りません。 そのような場合、該当する変換指定子は PHP の <b>strftime()</b> ではサポートされません。 また、全てのプラットフォームが負のタイムスタンプをサポートしているわけではないため、 Unix Epoch (1970 年 1 月 1 日）以前の日付を扱えないかもしれません。 つまり、Windows や一部の Linux ディストリビューション、そしてその他のごく一部の オペレーティングシステム上では %e、%T、%R および %D (あるいはこれ以外も) が <i>Jan 1, 1970</i> より前の日付について動作しないということです。 Windwos システム上でサポートされる変換指定子の概要については、 » MSDN に掲載されています。</p>
	 * @param string $format <p></p> <b>次の変換指定子が <code>format</code> パラメータ用の文字列として認識されます</b>   <code>format</code> 説明 返り値の例     <i>日</i> --- ---   <i>%a</i> 短縮された曜日の名前  <i>Sun</i> から <i>Sat</i>    <i>%A</i> 完全な曜日の名前  <i>Sunday</i> から <i>Saturday</i>    <i>%d</i> 10 進数で 2 桁の日付 (先頭のゼロつき)  <i>01</i> から <i>31</i>    <i>%e</i>  1 桁の場合は先頭にスペースをいれた日付。 Windows ではそのようには実装されていません。詳細は以下を参照ください。   <i> 1</i> から <i>31</i>    <i>%j</i> 3 桁で先頭にゼロを含む年間での日付  <i>001</i> から <i>366</i>    <i>%u</i> ISO-8601 数値表現であらわした曜日  <i>1</i> (月曜日) から <i>7</i> (日曜日)   <i>%w</i> 数値表現であらわした曜日  <i>0</i> (日曜日) から <i>6</i> (土曜日)   <i>週</i> --- ---   <i>%U</i> 指定した年の週番号。最初の日曜日を第一週の開始日とする  <i>13</i> (年間の第 13 週の場合)   <i>%V</i> ISO-8601:1988 で規定された、指定した年の週番号。 週の開始日は月曜日で、第 1 週は少なくとも 4 日はあることになる  <i>01</i> から <i>53</i> (53 は年をまたがる週になります)   <i>%W</i> その年の週番号の数値表現。最初の月曜日を最初の週の初日とする  <i>46</i> (46 番目の週の場合。開始日は月曜日)   <i>月</i> --- ---   <i>%b</i> 現在のロケールに基づく短縮された月の名前  <i>Jan</i> から <i>Dec</i>    <i>%B</i> 現在のロケールに基づく完全な月の名前  <i>January</i> から <i>December</i>    <i>%h</i> 現在のロケールに基づく短縮された月の名前 (%b のエイリアス)  <i>Jan</i> から <i>Dec</i>    <i>%m</i> 2 桁であらわした月  <i>01</i> (1 月) から <i>12</i> (12 月)   <i>年</i> --- ---   <i>%C</i> 2 桁であらわした世紀 (年を 100 で割り、整数に丸めたもの) 20 正規の場合は <i>19</i>    <i>%g</i> 2 桁であらわした年。ISO-8601:1988 標準形式 (%V を参照) 2009 年 1 月 6 日の場合は <i>09</i>    <i>%G</i> %g の 4 桁完全版 2009 年 1 月 3 日の場合は <i>2009</i>    <i>%y</i> 2 桁であらわした年 2009 年の場合は <i>09</i>、1979 年の場合は <i>79</i>    <i>%Y</i> 4 桁であらわした年 <i>2038</i>   <i>時</i> --- ---   <i>%H</i> 2 桁であらわした 24 時間制の時間  <i>00</i> から <i>23</i>    <i>%k</i> 24 時間制の時間で、1 桁の場合は先頭にスペースをつけたもの  <i> 0</i> から <i>23</i>    <i>%I</i> 2 桁であらわした 12 時間制の時間  <i>01</i> から <i>12</i>    <i>%l (小文字の 'L')</i> 12 時間制の時間で、1 桁の場合は先頭にスペースをつけたもの  <i> 1</i> から <i>12</i>    <i>%M</i> 2 桁であらわした分  <i>00</i> から <i>59</i>    <i>%p</i> 指定した時刻に応じた大文字の 'AM' あるいは 'PM' 00:31 なら <i>AM</i>、22:23 なら <i>PM</i>    <i>%P</i> 指定した時刻に応じた小文字の 'am' あるいは 'pm' 00:31 なら <i>am</i>、22:23 なら <i>pm</i>    <i>%r</i> "%I:%M:%S %p" と同じ 21:34:17 なら <i>09:34:17 PM</i>    <i>%R</i> "%H:%M" と同じ 12:35 AM なら <i>00:35</i>、4:44 PM なら <i>16:44</i>    <i>%S</i> 2 桁であらわした秒  <i>00</i> から <i>59</i>    <i>%T</i> "%H:%M:%S" と同じ 09:34:17 PM なら <i>21:34:17</i>    <i>%X</i> ロケールに基づいた時刻の表現。日付は含まない  <i>03:59:16</i> あるいは <i>15:59:16</i>    <i>%z</i> タイムゾーンオフセット。Windows では違う実装になっています。詳細は後述します。 東海岸時刻なら <i>-0500</i>    <i>%Z</i> タイムゾーンの略称。Windows では違う実装になっています。詳細は後述します。 東海岸時刻なら <i>EST</i>    <i>タイムスタンプ</i> --- ---   <i>%c</i> 現在のロケールにもとづく日付と時間の表現 2009 年 2 月 5 日 午前 12:45:10 なら <i>Tue Feb 5 00:45:10 2009</i>    <i>%D</i> "%m/%d/%y" と同じ 2009 年 2 月 5 日なら <i>02/05/09</i>    <i>%F</i> "%Y-%m-%d" と同じ (データベースのタイムスタンプとして一般的) 2009 年 2 月 5 日なら <i>2009-02-05</i>    <i>%s</i> Unix エポックからのタイムスタンプ (<code>time()</code> 関数と同じ) 1979 年 9 月 10 日午前 08:40:00 なら <i>305815200</i>    <i>%x</i> 現在のロケールにもとづく日付の表現 (時間は除く) 2009 年 2 月 5 日なら <i>02/05/09</i>    <i>その他</i> --- ---   <i>%n</i> 改行文字 ("\n") ---   <i>%t</i> タブ文字 ("\t") ---   <i>%%</i> パーセント文字 ("%") ---    <p>このパラメータの最大長は 1023 文字です。</p>  <b>警告</b> <p>ISO-9889:1999 に反して、Sun Solaris は日曜日を 1 としています。 そのため、<i>%u</i> はこのマニュアルの説明どおりに機能しないかもしれません。</p>   <b>警告</b> <p><i>Windows 限定:</i></p> <p>Windows 上では <i>%e</i> に対応していません。 この値が欲しければ、代わりに <i>%#d</i> を使いましょう。 クロスプラットフォーム対応の関数を書く方法をこの後の例で示します。</p> <p><i>%z</i> と <i>%Z</i> は、どちらもタイムゾーン名を返します。オフセットや略称は返しません。</p>   <b>警告</b> <p><i>macOS 限定:</i> <i>%P</i> 修飾子は macOS 版の実装ではサポートされていません。</p>
	 * @param int $timestamp <p>オプションのパラメータ <code>timestamp</code> は、 <code>integer</code> 型の Unix タイムスタンプです。 <code>timestamp</code> が指定されなかった場合のデフォルト値は、 現在の時刻です。言い換えると、デフォルトは <code>time()</code> の返り値となります。</p>
	 * @return string <p>指定した <code>timestamp</code> または timestamp が指定されていない場合に現在のローカル時間を用いて、 指定したフォーマット文字列に基づき文字列をフォーマットして返します。 月および曜日の名前、およびその他の言語依存の文字列は、 <code>setlocale()</code> で設定された現在のロケールを尊重して表示されます。</p>
	 * @link https://php.net/manual/ja/function.strftime.php
	 * @see setlocale(), mktime(), strptime(), gmstrftime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function strftime(string $format, int $timestamp  = 'time()'): string {}

	/**
	 * strftime() が生成した日付/時刻をパースする
	 * <p><b>strptime()</b> は <code>date</code> をパースした結果を配列で返します。エラー時には <b><code>FALSE</code></b> を返します。</p><p>月名や曜日、そしてその他の言語依存な文字列は <code>setlocale()</code> (<b><code>LC_TIME</code></b>) で設定された現在の ロケールを考慮して返します。</p>
	 * @param string $date <p>パースする文字列（例: <code>strftime()</code> の返り値）。</p>
	 * @param string $format <p><code>date</code> で使用されているフォーマット （例: <code>strftime()</code> で使用されていたものと同じ）。 <code>strftime()</code> で使えるオプションの中には、 <b>strptime()</b> では何の影響を及ぼさないものがあることに注意しましょう。 実際にサポートする範囲がどのようになるのかは、 使っている OS と C ライブラリに依存します。</p> <p>フォーマットオプションについての詳細は <code>strftime()</code> のページを参照ください。</p>
	 * @return array <p>成功した場合は配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>配列で返されるパラメータ</b>   パラメータ 説明     <i>"tm_sec"</i> 分未満の秒数 (0-61)   <i>"tm_min"</i> 時間未満の分数 (0-59)   <i>"tm_hour"</i> 0 時以降の時間数 (0-23)   <i>"tm_mday"</i> 月内の日数 (1-31)   <i>"tm_mon"</i> 1 月から数えた月数 (0-11)   <i>"tm_year"</i> 1900 年以降の年   <i>"tm_wday"</i> 日曜日からの日数 (0-6)   <i>"tm_yday"</i> 1 月 1 日からの日数 (0-365)   <i>"unparsed"</i>  <code>date</code> の中で、指定された <code>format</code> で判断できなかった部分
	 * @link https://php.net/manual/ja/function.strptime.php
	 * @see checkdate(), strftime(), date_parse_from_format(), DateTime::createFromFormat()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function strptime(string $date, string $format): array {}

	/**
	 * 英文形式の日付を Unix タイムスタンプに変換する
	 * <p>この関数は英語の書式での日付を含む文字列が指定されることを期待しており、 <code>now</code> で与えられたその形式から Unix タイムスタンプ (1970 年 1 月 1 日 00:00:00 UTC からの経過秒数) への変換を試みます。 <code>now</code> が指定されていない場合は現在日時に変換します。</p><p>この関数の各パラメータでは、パラメータ内でタイムゾーンを指定しない限りはデフォルトのタイムゾーンを使います。 意図的にそうする場合は別として、パラメータごとにタイムゾーンを変えてしまったりしないように気をつけましょう。 デフォルトのタイムゾーンを定義する方法については <code>date_default_timezone_get()</code> を参照ください。</p>
	 * @param string $time <p>日付/時刻 文字列。有効な書式については 日付と時刻の書式 で説明しています。</p>
	 * @param int $now <p>返される値を計算するために使用されるタイムスタンプ。</p>
	 * @return int <p>成功時はタイムスタンプ、そうでなければ <b><code>FALSE</code></b> を返します。 PHP 5.1.0 以前ではこの関数は失敗時に <i>-1</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.strtotime.php
	 * @see checkdate(), strptime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function strtotime(string $time, int $now  = 'time()'): int {}

	/**
	 * 現在の Unix タイムスタンプを返す
	 * <p>現在時刻を Unix エポック (1970 年 1 月 1 日 00:00:00 GMT) からの通算秒として返します。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.time.php
	 * @see date(), microtime()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function time(): int {}

	/**
	 * 夏時間、オフセットおよびタイムゾーン名を含む連想配列を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p>
	 * @return array <p>成功した場合に配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetimezone.listabbreviations.php
	 * @see timezone_identifiers_list()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_abbreviations_list(): array {}

	/**
	 * すべてのタイムゾーン識別子を含む配列を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p>
	 * @param int $what <p>DateTimeZone のクラス定数のいずれか。</p>
	 * @param string $country <p>2 文字の ISO 3166-1 互換の国コード。</p> <p><b>注意</b>:  このオプションを使用するのは、<code>what</code> に <b><code>DateTimeZone::PER_COUNTRY</code></b> を設定した場合のみです。 </p>
	 * @return array <p>成功した場合に配列、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetimezone.listidentifiers.php
	 * @see timezone_abbreviations_list()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_identifiers_list(int $what = DateTimeZone::ALL, string $country = NULL): array {}

	/**
	 * タイムゾーンの位置情報を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンの位置情報 (国コード、緯度/経度、コメント) を返します。</p>
	 * @param \DateTimeZone $object <p>手続き型のみ: <code>timezone_open()</code> が返す DateTimeZone オブジェクト</p>
	 * @return array <p>タイムゾーンについての位置情報を含む配列を返します。</p>
	 * @link https://php.net/manual/ja/datetimezone.getlocation.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function timezone_location_get(\DateTimeZone $object): array {}

	/**
	 * 略称からタイムゾーン名を返す
	 * @param string $abbr <p>タイムゾーンの略称。</p>
	 * @param int $gmtOffset <p>GMT からのオフセット秒数。デフォルトは -1 で、 この場合は <code>abbr</code> に対応するタイムゾーンのうち最初に見つかったものを返します。 それ以外の場合は指定したオフセットを探し、 そこで見つからなかった場合には 他のオフセットも含めて最初に見つかったものを返します。</p>
	 * @param int $isdst <p>夏時間のインジケータ。デフォルトは -1 で、 タイムゾーンが夏時間を持っているかどうかは考慮せずに検索します。 この値を 1 にすると、<code>gmtOffset</code> は夏時間を考慮したオフセットと見なします。 0 の場合は、<code>gmtOffset</code> は夏時間を考慮しないオフセットと見なします。 <code>abbr</code> が存在しない場合、 タイムゾーンの検索は <code>gmtOffset</code> と <code>isdst</code> だけで行います。</p>
	 * @return string <p>成功した場合にタイムゾーン名、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.timezone-name-from-abbr.php
	 * @see timezone_abbreviations_list()
	 * @since PHP 5 >= 5.1.3, PHP 7
	 */
	function timezone_name_from_abbr(string $abbr, int $gmtOffset = -1, int $isdst = -1): string {}

	/**
	 * タイムゾーンの名前を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンの名前を返します。</p>
	 * @param \DateTimeZone $object <p>名前を取得したい DateTimeZone。</p>
	 * @return string <p>タイムゾーン一覧 のタイムゾーン名のひとつを返します。</p>
	 * @link https://php.net/manual/ja/datetimezone.getname.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_name_get(\DateTimeZone $object): string {}

	/**
	 * GMT からのタイムゾーンのオフセットを返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、<code>datetime</code> パラメータで指定した 日付/時刻 についての GMT へのオフセットを返します。GMT オフセットの計算の際には、 使用する DateTimeZone オブジェクトに含まれるタイムゾーン情報を使用します。</p>
	 * @param \DateTimeZone $object <p>手続き型のみ: <code>timezone_open()</code> が返す DateTimeZone オブジェクト</p>
	 * @param \DateTime $datetime <p>オフセットを計算する 日付/時刻 を含む DateTime。</p>
	 * @return int <p>成功した場合にタイムゾーンのオフセット秒数、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetimezone.getoffset.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_offset_get(\DateTimeZone $object, \DateTime $datetime): int {}

	/**
	 * 新しい DateTimeZone オブジェクトを作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>新しい DateTimeZone オブジェクトを作成します。</p>
	 * @param string $timezone <p>サポートするタイムゾーン名のいずれか、 またはオフセット値 (+0200)。</p>
	 * @return DateTimeZone <p>成功した場合に DateTimeZone を返します。 手続き型 の場合は、失敗したときに <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetimezone.construct.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_open(string $timezone): \DateTimeZone {}

	/**
	 * タイムゾーンの変遷を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p>
	 * @param \DateTimeZone $object <p>手続き型のみ: <code>timezone_open()</code> が返す DateTimeZone オブジェクト</p>
	 * @param int $timestamp_begin <p>開始時のタイムスタンプ。</p>
	 * @param int $timestamp_end <p>終了時のタイムスタンプ。</p>
	 * @return array <p>成功した場合にタイムゾーンの遷移を表す連想配列の配列、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/datetimezone.gettransitions.php
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function timezone_transitions_get(\DateTimeZone $object, int $timestamp_begin = NULL, int $timestamp_end = NULL): array {}

	/**
	 * timezonedb のバージョンを取得する
	 * <p>timezonedb の現在のバージョンを返します。</p>
	 * @return string <p>文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.timezone-version-get.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function timezone_version_get(): string {}

	/**
	 * Atom (例: 2005-08-15T15:52:01+00:00)
	 */
	define('DATE_ATOM', 'Y-m-d\TH:i:sP');

	/**
	 * HTTP Cookies (例: Monday, 15-Aug-2005 15:52:01 UTC)
	 */
	define('DATE_COOKIE', 'l, d-M-Y H:i:s T');

	/**
	 * ISO-8601 (例: 2005-08-15T15:52:01+0000)  <p><b>注意</b>:  この書式は ISO-8601 との互換性がありませんが、敢えてそのまま残しています。 下位互換性を保つためです。ISO-8601 互換の書式を使いたい場合は、 <b><code>DateTime::ATOM</code></b> あるいは <b><code>DATE_ATOM</code></b> を使いましょう。 </p>
	 */
	define('DATE_ISO8601', 'Y-m-d\TH:i:sO');

	/**
	 * RFC 1036 (例: Mon, 15 Aug 05 15:52:01 +0000)
	 */
	define('DATE_RFC1036', 'D, d M y H:i:s O');

	/**
	 * RFC 1123 (例: Mon, 15 Aug 2005 15:52:01 +0000)
	 */
	define('DATE_RFC1123', 'D, d M Y H:i:s O');

	/**
	 * RFC 2822 (例: Mon, 15 Aug 2005 15:52:01 +0000)
	 */
	define('DATE_RFC2822', 'D, d M Y H:i:s O');

	/**
	 * <b><code>DATE_ATOM</code></b> と同じ (PHP 5.1.3 以降)
	 */
	define('DATE_RFC3339', 'Y-m-d\TH:i:sP');

	/**
	 * RFC 822 (例: Mon, 15 Aug 05 15:52:01 +0000)
	 */
	define('DATE_RFC822', 'D, d M y H:i:s O');

	/**
	 * RFC 850 (例: Monday, 15-Aug-05 15:52:01 UTC)
	 */
	define('DATE_RFC850', 'l, d-M-y H:i:s T');

	/**
	 * RSS (例: Mon, 15 Aug 2005 15:52:01 +0000)
	 */
	define('DATE_RSS', 'D, d M Y H:i:s O');

	/**
	 * World Wide Web Consortium (例: 2005-08-15T15:52:01+00:00)
	 */
	define('DATE_W3C', 'Y-m-d\TH:i:sP');

	/**
	 * 時刻を表す浮動小数点値 (例 8.75)
	 */
	define('SUNFUNCS_RET_DOUBLE', 2);

	/**
	 * 時:分 (例: 08:02)
	 */
	define('SUNFUNCS_RET_STRING', 1);

	/**
	 * タイムスタンプ
	 */
	define('SUNFUNCS_RET_TIMESTAMP', 0);

}
