<?php

// Start of date v.7.0.19

/**
 * DateTimeInterface は、DateTime および DateTimeImmutable をタイプヒントで使えるようにするためのインターフェイスです。
 * このインターフェイスを実装したクラスをユーザー側で作ることはできません。
 * @link http://php.net/manual/ja/class.datetimeinterface.php
 */
interface DateTimeInterface  {

	/**
	 * @param $format
	 */
	abstract public function format($format);

	abstract public function getTimezone();

	abstract public function getOffset();

	abstract public function getTimestamp();

	/**
	 * @param $object
	 * @param $absolute [optional]
	 */
	abstract public function diff($object, $absolute);

	abstract public function __wakeup();

}

/**
 * 日付と時刻をあらわします。
 * @link http://php.net/manual/ja/class.datetime.php
 */
class DateTime implements DateTimeInterface {

	/**
	 * Atom (例: 2005-08-15T15:52:01+00:00)
	 * @link http://php.net/manual/ja/class.datetime.php
	 */
	const ATOM = "Y-m-d\TH:i:sP";

	/**
	 * HTTP Cookies (例: Monday, 15-Aug-2005 15:52:01 UTC)
	 * @link http://php.net/manual/ja/class.datetime.php
	 */
	const COOKIE = "l, d-M-Y H:i:s T";

	/**
	 * ISO-8601 (例: 2005-08-15T15:52:01+0000)
	 * この書式は ISO-8601 との互換性がありませんが、敢えてそのまま残しています。
	 * 下位互換性を保つためです。ISO-8601 互換の書式を使いたい場合は、
	 * <b>DateTime::ATOM</b> あるいは
	 * <b>DATE_ATOM</b> を使いましょう。
	 * @link http://php.net/manual/ja/class.datetime.php
	 */
	const ISO8601 = "Y-m-d\TH:i:sO";

	/**
	 * RFC 822 (例: Mon, 15 Aug 05 15:52:01 +0000)
	 * @link http://php.net/manual/ja/class.datetime.php
	 */
	const RFC822 = "D, d M y H:i:s O";

	/**
	 * RFC 850 (例: Monday, 15-Aug-05 15:52:01 UTC)
	 * @link http://php.net/manual/ja/class.datetime.php
	 */
	const RFC850 = "l, d-M-y H:i:s T";

	/**
	 * RFC 1036 (例: Mon, 15 Aug 05 15:52:01 +0000)
	 * @link http://php.net/manual/ja/class.datetime.php
	 */
	const RFC1036 = "D, d M y H:i:s O";

	/**
	 * RFC 1123 (例: Mon, 15 Aug 2005 15:52:01 +0000)
	 * @link http://php.net/manual/ja/class.datetime.php
	 */
	const RFC1123 = "D, d M Y H:i:s O";
	const RFC7231 = "D, d M Y H:i:s \G\M\T";

	/**
	 * RFC 2822 (例: Mon, 15 Aug 2005 15:52:01 +0000)
	 * @link http://php.net/manual/ja/class.datetime.php
	 */
	const RFC2822 = "D, d M Y H:i:s O";

	/**
	 * <b>DATE_ATOM</b> と同じ (PHP 5.1.3 以降)
	 * @link http://php.net/manual/ja/class.datetime.php
	 */
	const RFC3339 = "Y-m-d\TH:i:sP";
	const RFC3339_EXTENDED = "Y-m-d\TH:i:s.vP";

	/**
	 * RSS (例: Mon, 15 Aug 2005 15:52:01 +0000)
	 * @link http://php.net/manual/ja/class.datetime.php
	 */
	const RSS = "D, d M Y H:i:s O";

	/**
	 * World Wide Web Consortium (例: 2005-08-15T15:52:01+00:00)
	 * @link http://php.net/manual/ja/class.datetime.php
	 */
	const W3C = "Y-m-d\TH:i:sP";


	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 新しい DateTime オブジェクトを返す
	 * @link http://php.net/manual/ja/datetime.construct.php
	 * @param $time [optional]
	 * @param $object [optional]
	 */
	public function __construct($time, $object) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * __wakeup ハンドラ
	 * @link http://php.net/manual/ja/datetime.wakeup.php
	 * @return mixed DateTime オブジェクトを初期化します。
	 */
	public function __wakeup() {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * __set_state ハンドラ
	 * @link http://php.net/manual/ja/datetime.set-state.php
	 * @param array $array <p>
	 * 初期化配列。
	 * </p>
	 * @return DateTime 新しい DateTime オブジェクトのインスタンスを返します。
	 */
	public static function __set_state(array $array): DateTime {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 指定した書式で時刻文字列をパースする
	 * @link http://php.net/manual/ja/datetime.createfromformat.php
	 * @param string $format <p>
	 * 書式を文字列で渡します。以下の書式オプションを参照ください。
	 * 大半は、<b>date</b> で使える文字と同じです。
	 * </p>
	 * <p>
	 * <table>
	 * <i>format</i> パラメータに渡せる文字
	 * <tr valign="top">
	 * <td><i>format</i> 文字</td>
	 * <td>説明</td>
	 * <td>取りうる値の例</td>
	 * </tr>
	 * <tr valign="top">
	 * 日</td>
	 * <td>---</td>
	 * <td>---</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>d および j</td>
	 * <td>2桁の日付。先頭のゼロを含むものと含まないもの</td>
	 * <td>
	 * 01 から 31 あるいは
	 * 1 から 31
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>D および l</td>
	 * <td>曜日を表す文字列</td>
	 * <td>
	 * Mon から Sun あるいは
	 * Sunday から Saturday
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>S</td>
	 * <td>日付の後につける英語の接尾辞。二文字。処理中には無視されます。</td>
	 * <td>
	 * st、nd、rd あるいは
	 * th
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>z</td>
	 * <td>年始からの通算日数 (最初は 0)</td>
	 * <td>0 から 365</td>
	 * </tr>
	 * <tr valign="top">
	 * 月</td>
	 * <td>---</td>
	 * <td>---</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>F および M</td>
	 * <td>月を表す文字列。January あるいは Sept など</td>
	 * <td>
	 * January から December あるいは
	 * Jan から Dec
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>m および n</td>
	 * <td>月を表す数値。先頭のゼロを含むものと含まないもの</td>
	 * <td>
	 * 01 から 12 あるいは
	 * 1 から 12
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * 年</td>
	 * <td>---</td>
	 * <td>---</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>Y</td>
	 * <td>4 桁の数値で表した年</td>
	 * <td>例: 1999 あるいは 2003</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>y</td>
	 * <td>
	 * 2 桁の数値で表した年 (1970年から2069年の間だとみなされます)
	 * </td>
	 * <td>
	 * 例:
	 * 99 あるいは 03
	 * (それぞれ、 1999 および
	 * 2003 と見なされます)
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * 時刻</td>
	 * <td>---</td>
	 * <td>---</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>a および A</td>
	 * <td>午前および午後</td>
	 * <td>am あるいは pm</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>g および h</td>
	 * <td>12 時間制での時間。先頭のゼロを含むものと含まないもの</td>
	 * <td>
	 * 1 から 12 あるいは
	 * 01 から 12
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>G and H</td>
	 * <td>24 時間制での時間。先頭のゼロを含むものと含まないもの</td>
	 * <td>
	 * 0 から 23 あるいは
	 * 00 から 23
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>i</td>
	 * <td>分。先頭のゼロを含む</td>
	 * <td>00 から 59</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>s</td>
	 * <td>秒。先頭のゼロを含む</td>
	 * <td>00 から 59</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>u</td>
	 * <td>マイクロ秒 (最大 6 桁)</td>
	 * <td>例: 45, 654321</td>
	 * </tr>
	 * <tr valign="top">
	 * タイムゾーン</td>
	 * <td>---</td>
	 * <td>---</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>
	 * e、O、
	 * P および T
	 * </td>
	 * <td>タイムゾーン識別子、UTC からの時差 (時間単位)、
	 * UTC からの時差 (コロン区切りでの時間と分)、そしてタイムゾーンの短縮形</td>
	 * <td>例: UTC、GMT、
	 * Atlantic/Azores あるいは
	 * +0200 あるいは +02:00 あるいは
	 * EST、MDT
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * 完全な日付/時刻</td>
	 * <td>---</td>
	 * <td>---</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>U</td>
	 * <td>Unix エポック (January 1 1970 00:00:00 GMT) からの経過秒数</td>
	 * <td>例: 1292177455</td>
	 * </tr>
	 * <tr valign="top">
	 * 空白および区切り</td>
	 * <td>---</td>
	 * <td>---</td>
	 * </tr>
	 * <tr valign="top">
	 * <td> (空白)</td>
	 * <td>空白 1 文字あるいはタブ 1 文字</td>
	 * <td>例: </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>#</td>
	 * <td>
	 * 次の区切り文字のいずれか: ;,
	 * :, /, .,
	 * ,, -, ( あるいは
	 * )
	 * </td>
	 * <td>例: /</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>
	 * ;,
	 * :, /, .,
	 * ,, -, ( あるいは
	 * )
	 * </td>
	 * <td>指定した文字</td>
	 * <td>例: -</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>?</td>
	 * <td>ランダムなバイト</td>
	 * <td>例: ^ (UTF-8 文字の場合は複数の
	 * ? が必要になるでしょう。この場合、おそらく
	 * * を使うと要望が満たせるはずです)</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>*</td>
	 * <td>次の区切り文字あるいは数字までのランダムなバイト列</td>
	 * <td>例: Y-*-d の中の *
	 * は、文字列 2009-aWord-08 の中の
	 * aWord にマッチします</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>!</td>
	 * <td>すべてのフィールド (年、月、日、時、分、秒、マイクロ秒およびタイムゾーン情報)
	 * を Unix エポックにリセットする</td>
	 * <td>! がなければ、すべてのフィールドは現在の日時に設定されます。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>|</td>
	 * <td>まだパースされていないすべてのフィールド (年、月、日、時、分、秒、マイクロ秒およびタイムゾーン情報)
	 * を Unix エポックにリセットする</td>
	 * <td>Y-m-d| は、文字列をパースした結果から年月日を設定し
	 * 時分秒には 0 を設定します。</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>+</td>
	 * <td>この文字があると、文字列のそれ以降のデータではエラーが発生せず、
	 * かわりに警告を発生させる</td>
	 * <td>それ以降のデータが存在したかどうかを調べるには <b>DateTime::getLastErrors</b>
	 * を使います。</td>
	 * </tr>
	 * </table>
	 * </p>
	 * <p>
	 * 書式文字列の中に解釈不能な文字が含まれていると処理は失敗し、
	 * 返り値にはエラーメッセージが付加されます。エラーメッセージを調べるには
	 * <b>DateTime::getLastErrors</b> を使います。
	 * </p>
	 * <p>
	 * <i>format</i> にリテラル文字を含めるには、
	 * バックスラッシュ (\) でエスケープする必要があります。
	 * </p>
	 * <p>
	 * <i>format</i> に文字
	 * ! が含まれない場合は、作成した時刻値のうち
	 * <i>format</i> で指定されていない部分を
	 * 現在のシステム時刻で初期化します。
	 * </p>
	 * <p>
	 * <i>format</i> に文字
	 * ! が含まれる場合は、作成した時刻値のうち
	 * <i>format</i> で指定されていない部分と
	 * ! の左側の部分を
	 * Unix エポックの対応する箇所の値で初期化します。
	 * </p>
	 * <p>
	 * Unix エポックは 1970-01-01 00:00:00 です。
	 * </p>
	 * @param string $time <p>
	 * 時刻を表す文字列。
	 * </p>
	 * @param DateTimeZone $timezone [optional] <p>
	 * 指定したいタイムゾーンを表す
	 * <b>DateTimeZone</b> オブジェクト。
	 * </p>
	 * <p>
	 * <i>timezone</i> を省略し、かつ
	 * <i>time</i> にタイムゾーンが含まれない場合は、
	 * 現在のタイムゾーンを使います。
	 * </p>
	 * <p>
	 * <i>time</i> パラメータが UNIX タイムスタンプ
	 * (例: 946684800) だったりタイムゾーンを含んでいたり
	 * (例: 2010-01-28T15:00:00+02:00)
	 * する場合は、
	 * <i>timezone</i> パラメータや現在のタイムゾーンは無視します。
	 * </p>
	 * @return DateTime 新しい DateTime のインスタンス、失敗した場合に <b>FALSE</b> を返します。
	 */
	public static function createFromFormat(string $format, string $time, DateTimeZone $timezone = null): DateTime {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 警告およびエラーを返す
	 * @link http://php.net/manual/ja/datetime.getlasterrors.php
	 * @return array 警告やエラーに関する情報を含む配列を返します。
	 */
	public static function getLastErrors(): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 指定した書式でフォーマットした日付を返す
	 * @link http://php.net/manual/ja/datetime.format.php
	 * @param string $format <p>
	 * <b>date</b> が理解できる書式指定文字列。
	 * </p>
	 * @return string 成功した場合にフォーマット済みの日付文字列、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function format(string $format): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * タイムスタンプを変更する
	 * @link http://php.net/manual/ja/datetime.modify.php
	 * @param string $modify <p>日付/時刻 文字列。有効な書式については 日付と時刻の書式 で説明しています。</p>
	 * @return DateTime メソッドチェインに使う <b>DateTime</b> オブジェクトを返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function modify(string $modify): DateTime {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 年月日時分秒の値を DateTime オブジェクトに加える
	 * @link http://php.net/manual/ja/datetime.add.php
	 * @param DateInterval $interval <p>
	 * <b>DateInterval</b> オブジェクト。
	 * </p>
	 * @return DateTime メソッドチェインに使う <b>DateTime</b> オブジェクトを返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function add(DateInterval $interval): DateTime {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 年月日時分秒の値を DateTime オブジェクトから引く
	 * @link http://php.net/manual/ja/datetime.sub.php
	 * @param DateInterval $interval <p>
	 * <b>DateInterval</b> オブジェクト。
	 * </p>
	 * @return DateTime メソッドチェインに使う <b>DateTime</b> オブジェクトを返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function sub(DateInterval $interval): DateTime {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 指定した DateTime に関連するタイムゾーンを返す
	 * @link http://php.net/manual/ja/datetime.gettimezone.php
	 * @return DateTimeZone 成功した場合に <b>DateTimeZone</b> オブジェクト、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getTimezone(): DateTimeZone {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * DateTime オブジェクトのタイムゾーンを設定する
	 * @link http://php.net/manual/ja/datetime.settimezone.php
	 * @param DateTimeZone $timezone <p>
	 * 指定したいタイムゾーンを表す
	 * <b>DateTimeZone</b> オブジェクト。
	 * </p>
	 * @return DateTime メソッドチェインに使う <b>DateTime</b> オブジェクトを返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setTimezone(DateTimeZone $timezone): DateTime {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * タイムゾーンのオフセットを返す
	 * @link http://php.net/manual/ja/datetime.getoffset.php
	 * @return int 成功した場合には UTC からのタイムゾーンオフセット秒数、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getOffset(): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 時刻を設定する
	 * @link http://php.net/manual/ja/datetime.settime.php
	 * @param int $hour <p>
	 * その時刻の時。
	 * </p>
	 * @param int $minute <p>
	 * その時刻の分。
	 * </p>
	 * @param int $second [optional] <p>
	 * その時刻の秒。
	 * </p>
	 * @return DateTime メソッドチェインに使う <b>DateTime</b> オブジェクトを返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setTime(int $hour, int $minute, int $second = 0): DateTime {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 日付を設定する
	 * @link http://php.net/manual/ja/datetime.setdate.php
	 * @param int $year <p>
	 * その日付の年。
	 * </p>
	 * @param int $month <p>
	 * その日付の月。
	 * </p>
	 * @param int $day <p>
	 * その日付の日。
	 * </p>
	 * @return DateTime メソッドチェインに使う <b>DateTime</b> オブジェクトを返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setDate(int $year, int $month, int $day): DateTime {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * ISO 日付を設定する
	 * @link http://php.net/manual/ja/datetime.setisodate.php
	 * @param int $year <p>
	 * その日付の年。
	 * </p>
	 * @param int $week <p>
	 * その日付の週。
	 * </p>
	 * @param int $day [optional] <p>
	 * 週の最初の日からのオフセット。
	 * </p>
	 * @return DateTime メソッドチェインに使う <b>DateTime</b> オブジェクトを返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setISODate(int $year, int $week, int $day = 1): DateTime {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Unix タイムスタンプを用いて日付と時刻を設定する
	 * @link http://php.net/manual/ja/datetime.settimestamp.php
	 * @param int $unixtimestamp <p>
	 * Unix タイムスタンプ。
	 * </p>
	 * @return DateTime メソッドチェインに使う <b>DateTime</b> オブジェクトを返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setTimestamp(int $unixtimestamp): DateTime {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Unix タイムスタンプを取得する
	 * @link http://php.net/manual/ja/datetime.gettimestamp.php
	 * @return int その日付をあらわす Unix タイムスタンプを返します。
	 */
	public function getTimestamp(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ふたつの DateTime オブジェクトの差を返す
	 * @link http://php.net/manual/ja/datetime.diff.php
	 * @param DateTimeInterface $datetime2
	 * @param bool $absolute [optional] <p>
	 * 間隔が正の数になるようにするか否か。
	 * </p>
	 * @return DateInterval ふたつの日付の差をあらわす <b>DateInterval</b> オブジェクトを返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function diff(DateTimeInterface $datetime2, bool $absolute = false): DateInterval {}

}

/**
 * このクラスの挙動は <b>DateTime</b> とほぼ同じですが、
 * 自分自身は変更せずに新しいオブジェクトを返すという点だけが異なります。
 * @link http://php.net/manual/ja/class.datetimeimmutable.php
 */
class DateTimeImmutable implements DateTimeInterface {

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * 新しい DateTimeImmutable オブジェクトを返す
	 * @link http://php.net/manual/ja/datetimeimmutable.construct.php
	 * @param $time [optional]
	 * @param $object [optional]
	 */
	public function __construct($time, $object) {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * __wakeup ハンドラ
	 * @link http://php.net/manual/ja/datetime.wakeup.php
	 * @return mixed DateTime オブジェクトを初期化します。
	 */
	public function __wakeup() {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * __set_state ハンドラ
	 * @link http://php.net/manual/ja/datetimeimmutable.set-state.php
	 * @param array $array
	 * @return DateTimeImmutable
	 */
	public static function __set_state(array $array): DateTimeImmutable {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * 指定した書式でフォーマットした新しい DateTimeImmutable オブジェクトを返す
	 * @link http://php.net/manual/ja/datetimeimmutable.createfromformat.php
	 * @param string $format
	 * @param string $time
	 * @param DateTimeZone $timezone [optional]
	 * @return DateTimeImmutable
	 */
	public static function createFromFormat(string $format, string $time, DateTimeZone $timezone = null): DateTimeImmutable {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * 警告およびエラーを返す
	 * @link http://php.net/manual/ja/datetimeimmutable.getlasterrors.php
	 * @return array
	 */
	public static function getLastErrors(): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 指定した書式でフォーマットした日付を返す
	 * @link http://php.net/manual/ja/datetime.format.php
	 * @param string $format <p>
	 * <b>date</b> が理解できる書式指定文字列。
	 * </p>
	 * @return string 成功した場合にフォーマット済みの日付文字列、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function format(string $format): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 指定した DateTime に関連するタイムゾーンを返す
	 * @link http://php.net/manual/ja/datetime.gettimezone.php
	 * @return DateTimeZone 成功した場合に <b>DateTimeZone</b> オブジェクト、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getTimezone(): DateTimeZone {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * タイムゾーンのオフセットを返す
	 * @link http://php.net/manual/ja/datetime.getoffset.php
	 * @return int 成功した場合には UTC からのタイムゾーンオフセット秒数、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getOffset(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Unix タイムスタンプを取得する
	 * @link http://php.net/manual/ja/datetime.gettimestamp.php
	 * @return int その日付をあらわす Unix タイムスタンプを返します。
	 */
	public function getTimestamp(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * ふたつの DateTime オブジェクトの差を返す
	 * @link http://php.net/manual/ja/datetime.diff.php
	 * @param DateTimeInterface $datetime2
	 * @param bool $absolute [optional] <p>
	 * 間隔が正の数になるようにするか否か。
	 * </p>
	 * @return DateInterval ふたつの日付の差をあらわす <b>DateInterval</b> オブジェクトを返します。
	 * 失敗した場合に <b>FALSE</b> を返します
	 */
	public function diff(DateTimeInterface $datetime2, bool $absolute = false): DateInterval {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * タイムスタンプを変更した新しいオブジェクトを作る
	 * @link http://php.net/manual/ja/datetimeimmutable.modify.php
	 * @param string $modify <p>日付/時刻 文字列。有効な書式については 日付と時刻の書式 で説明しています。</p>
	 * @return DateTimeImmutable 新しく作ったオブジェクトを返します。
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function modify(string $modify): DateTimeImmutable {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * 年月日時分秒の値を加える
	 * @link http://php.net/manual/ja/datetimeimmutable.add.php
	 * @param DateInterval $interval
	 * @return DateTimeImmutable
	 */
	public function add(DateInterval $interval): DateTimeImmutable {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * 年月日時分秒の値を引く
	 * @link http://php.net/manual/ja/datetimeimmutable.sub.php
	 * @param DateInterval $interval
	 * @return DateTimeImmutable
	 */
	public function sub(DateInterval $interval): DateTimeImmutable {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * タイムゾーンを設定する
	 * @link http://php.net/manual/ja/datetimeimmutable.settimezone.php
	 * @param DateTimeZone $timezone
	 * @return DateTimeImmutable
	 */
	public function setTimezone(DateTimeZone $timezone): DateTimeImmutable {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * 時刻を設定する
	 * @link http://php.net/manual/ja/datetimeimmutable.settime.php
	 * @param int $hour
	 * @param int $minute
	 * @param int $second [optional]
	 * @return DateTimeImmutable
	 */
	public function setTime(int $hour, int $minute, int $second = 0): DateTimeImmutable {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * 日付を設定する
	 * @link http://php.net/manual/ja/datetimeimmutable.setdate.php
	 * @param int $year
	 * @param int $month
	 * @param int $day
	 * @return DateTimeImmutable
	 */
	public function setDate(int $year, int $month, int $day): DateTimeImmutable {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * ISO 日付を設定する
	 * @link http://php.net/manual/ja/datetimeimmutable.setisodate.php
	 * @param int $year
	 * @param int $week
	 * @param int $day [optional]
	 * @return DateTimeImmutable
	 */
	public function setISODate(int $year, int $week, int $day = 1): DateTimeImmutable {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * Unix タイムスタンプを用いて日付と時刻を設定する
	 * @link http://php.net/manual/ja/datetimeimmutable.settimestamp.php
	 * @param int $unixtimestamp
	 * @return DateTimeImmutable
	 */
	public function setTimestamp(int $unixtimestamp): DateTimeImmutable {}

	/**
	 * (PHP 5 &gt;= 5.6.0, PHP 7)<br/>
	 * Returns new DateTimeImmutable object encapsulating the given DateTime object
	 * @link http://php.net/manual/ja/datetimeimmutable.createfrommutable.php
	 * @param DateTime $datetime <p>
	 * The mutable <b>DateTime</b> object that you want to
	 * convert to an immutable version. This object is not modified, but
	 * instead a new <b>DateTimeImmutable</b> object is
	 * created containing the same date time and timezone information.
	 * </p>
	 * @return DateTimeImmutable a new <b>DateTimeImmutable</b> instance.
	 */
	public static function createFromMutable(DateTime $datetime): DateTimeImmutable {}

}

/**
 * タイムゾーンをあらわします。
 * @link http://php.net/manual/ja/class.datetimezone.php
 */
class DateTimeZone  {

	/**
	 * <p>アフリカのタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const AFRICA = 1;

	/**
	 * <p>アメリカのタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const AMERICA = 2;

	/**
	 * <p>南極のタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const ANTARCTICA = 4;

	/**
	 * <p>北極のタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const ARCTIC = 8;

	/**
	 * <p>アジアのタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const ASIA = 16;

	/**
	 * <p>大西洋のタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const ATLANTIC = 32;

	/**
	 * <p>オーストラリアのタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const AUSTRALIA = 64;

	/**
	 * <p>ヨーロッパのタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const EUROPE = 128;

	/**
	 * <p>インドのタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const INDIAN = 256;

	/**
	 * <p>太平洋のタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const PACIFIC = 512;

	/**
	 * <p>UTC タイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const UTC = 1024;

	/**
	 * <p>すべてのタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const ALL = 2047;

	/**
	 * <p>過去との互換性を保つものを含むすべてのタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const ALL_WITH_BC = 4095;

	/**
	 * <p>国ごとのタイムゾーン。</p>
	 * @link http://php.net/manual/ja/class.datetimezone.php
	 */
	const PER_COUNTRY = 4096;


	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 新しい DateTimeZone オブジェクトを作成する
	 * @link http://php.net/manual/ja/datetimezone.construct.php
	 * @param $timezone
	 */
	public function __construct($timezone) {}

	public function __wakeup() {}

	public static function __set_state() {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * タイムゾーンの名前を返す
	 * @link http://php.net/manual/ja/datetimezone.getname.php
	 * @return string タイムゾーン一覧 のタイムゾーン名のひとつを返します。
	 */
	public function getName(): string {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * GMT からのタイムゾーンのオフセットを返す
	 * @link http://php.net/manual/ja/datetimezone.getoffset.php
	 * @param DateTime $datetime <p>
	 * オフセットを計算する 日付/時刻 を含む DateTime。
	 * </p>
	 * @return int 成功した場合にタイムゾーンのオフセット秒数、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getOffset(DateTime $datetime): int {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * タイムゾーンの変遷を返す
	 * @link http://php.net/manual/ja/datetimezone.gettransitions.php
	 * @param int $timestamp_begin [optional] <p>
	 * 開始時のタイムスタンプ。
	 * </p>
	 * @param int $timestamp_end [optional] <p>
	 * 終了時のタイムスタンプ。
	 * </p>
	 * @return array 成功した場合にタイムゾーンの遷移を表す連想配列の配列、
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getTransitions(int $timestamp_begin = null, int $timestamp_end = null): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * タイムゾーンの位置情報を返す
	 * @link http://php.net/manual/ja/datetimezone.getlocation.php
	 * @return array タイムゾーンについての位置情報を含む配列を返します。
	 */
	public function getLocation(): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * 夏時間、オフセットおよびタイムゾーン名を含む連想配列を返す
	 * @link http://php.net/manual/ja/datetimezone.listabbreviations.php
	 * @return array 成功した場合に配列、失敗した場合に <b>FALSE</b> を返します。
	 */
	public static function listAbbreviations(): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * すべてのタイムゾーン識別子を含む配列を返す
	 * @link http://php.net/manual/ja/datetimezone.listidentifiers.php
	 * @param int $what [optional] <p>
	 * <b>DateTimeZone</b> のクラス定数のいずれか。
	 * </p>
	 * @param string $country [optional] <p>
	 * 2 文字の ISO 3166-1 互換の国コード。
	 * </p>
	 * このオプションを使用するのは、<i>what</i> に
	 * <b>DateTimeZone::PER_COUNTRY</b> を設定した場合のみです。
	 * @return array 成功した場合に配列、失敗した場合に <b>FALSE</b> を返します。
	 */
	public static function listIdentifiers(int $what = DateTimeZone::ALL, string $country = null): array {}

}

/**
 * 日付の間隔をあらわします。
 * @link http://php.net/manual/ja/class.dateinterval.php
 */
class DateInterval  {
	/**
	 * <p style="margin-top:0;">
	 * &#24180;&#12290;
	 * </p>
	 * @var integer
	 */
	public $y;
	/**
	 * <p style="margin-top:0;">
	 * &#26376;&#12290;
	 * </p>
	 * @var integer
	 */
	public $m;
	/**
	 * <p style="margin-top:0;">
	 * &#26085;&#12290;
	 * </p>
	 * @var integer
	 */
	public $d;
	/**
	 * <p style="margin-top:0;">
	 * &#26178;&#38291;&#12290;
	 * </p>
	 * @var integer
	 */
	public $h;
	/**
	 * <p style="margin-top:0;">
	 * &#20998;&#12290;
	 * </p>
	 * @var integer
	 */
	public $i;
	/**
	 * <p style="margin-top:0;">
	 * &#31186;&#12290;
	 * </p>
	 * @var integer
	 */
	public $s;
	/**
	 * <p style="margin-top:0;">
	 * &#38291;&#38548;&#12364;&#36000;&#12398;&#25968;&#12395;&#12394;&#12387;&#12390;&#12356;&#12427;&#22580;&#21512;&#12399; 1&#12289;&#12381;&#12358;&#12391;&#12394;&#12356;&#22580;&#21512;&#12399;
	 * 0&#12290;
	 * <b>DateInterval::format()</b> &#12434;&#21442;&#29031;&#12367;&#12384;&#12373;&#12356;&#12290;
	 * </p>
	 * @var integer
	 */
	public $invert;
	/**
	 * <p style="margin-top:0;">
	 * <b>DateTime::diff()</b> &#12391;&#20316;&#12425;&#12428;&#12383; DateInterval
	 * &#12458;&#12502;&#12472;&#12455;&#12463;&#12488;&#12398;&#22580;&#21512;&#12399;&#12289;&#38283;&#22987;&#26085;&#12392;&#32066;&#20102;&#26085;&#12398;&#38291;&#12398;&#26085;&#25968;&#12290;
	 * &#12381;&#12428;&#20197;&#22806;&#12398;&#22580;&#21512;&#12399; days &#12399; <b><code>FALSE</code></b> &#12392;&#12394;&#12426;&#12414;&#12377;&#12290;
	 * </p>
	 * <p>
	 * PHP 5.4.20/5.5.4 &#12424;&#12426;&#21069;&#12398;&#12496;&#12540;&#12472;&#12519;&#12531;&#12391;&#12399;&#12289;
	 * <b><code>FALSE</code></b> &#12391;&#12399;&#12394;&#12367; -99999 &#12392;&#12394;&#12387;&#12390;&#12356;&#12414;&#12375;&#12383;&#12290;
	 * </p>
	 * @var mixed
	 */
	public $days;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 新しい DateInterval オブジェクトを作成する
	 * @link http://php.net/manual/ja/dateinterval.construct.php
	 * @param $interval_spec
	 */
	public function __construct($interval_spec) {}

	public function __wakeup() {}

	public static function __set_state() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 間隔をフォーマットする
	 * @link http://php.net/manual/ja/dateinterval.format.php
	 * @param string $format <p>
	 * <table>
	 * 次の文字を、
	 * <i>format</i> パラメータ文字列に使用することができます。
	 * フォーマット文字は、パーセント記号
	 * (%) で始めなければなりません。
	 * <tr valign="top">
	 * <td><i>format</i> 文字</td>
	 * <td>説明</td>
	 * <td>値の例</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>%</td>
	 * <td>リテラルとしての %</td>
	 * <td>%</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>Y</td>
	 * <td>年、数値、先頭に 0 を含む 2 桁</td>
	 * <td>01, 03</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>y</td>
	 * <td>年、数値</td>
	 * <td>1, 3</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>M</td>
	 * <td>月、数値、先頭に 0 を含む 2 桁</td>
	 * <td>01, 03, 12</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>m</td>
	 * <td>月、数値</td>
	 * <td>1, 3, 12</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>D</td>
	 * <td>日、数値、先頭に 0 を含む 2 桁</td>
	 * <td>01, 03, 31</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>d</td>
	 * <td>日、数値</td>
	 * <td>1, 3, 31</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>a</td>
	 * <td><b>DateTime::diff</b> の結果に使った場合は総日数、それ以外の場合は (unknown)</td>
	 * <td>4, 18, 8123</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>H</td>
	 * <td>時間、数値、先頭に 0 を含む 2 桁</td>
	 * <td>01, 03, 23</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>h</td>
	 * <td>時間、数値</td>
	 * <td>1, 3, 23</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>I</td>
	 * <td>分、数値、先頭に 0 を含む 2 桁</td>
	 * <td>01, 03, 59</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>i</td>
	 * <td>分、数値</td>
	 * <td>1, 3, 59</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>S</td>
	 * <td>秒、数値、先頭に 0 を含む 2 桁</td>
	 * <td>01, 03, 57</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>s</td>
	 * <td>秒、数値</td>
	 * <td>1, 3, 57</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>R</td>
	 * <td>負の値の場合は "-"、正の値の場合は "+"</td>
	 * <td>-, +</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>r</td>
	 * <td>負の値の場合は "-"、正の値の場合は空文字</td>
	 * <td>-, </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return string フォーマットされた間隔を返します。
	 */
	public function format(string $format): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 相対指定文字列から DateInterval を作成する
	 * @link http://php.net/manual/ja/dateinterval.createfromdatestring.php
	 * @param string $time <p>
	 * 相対部分を含む日付。
	 * 特に、<b>strtotime</b> や
	 * <b>DateTime</b> が使うパーサーがサポートする
	 * 相対書式
	 * を使って DateInterval を作ることができます。
	 * </p>
	 * @return DateInterval 新しい <b>DateInterval</b> のインスタンスを返します。
	 */
	public static function createFromDateString(string $time): DateInterval {}

}

/**
 * 日付の期間をあらわします。
 * @link http://php.net/manual/ja/class.dateperiod.php
 */
class DatePeriod implements Traversable {

	/**
	 * <p>開始日を含まない。<b>DatePeriod::__construct</b> で使用します。</p>
	 * @link http://php.net/manual/ja/class.dateperiod.php
	 */
	const EXCLUDE_START_DATE = 1;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * 新しい DatePeriod オブジェクトを作成する
	 * @link http://php.net/manual/ja/dateperiod.construct.php
	 * @param $start
	 * @param $interval
	 * @param $end
	 */
	public function __construct($start, $interval, $end) {}

	public function __wakeup() {}

	public static function __set_state() {}

	/**
	 * (PHP 5 &gt;= 5.6.5, PHP 7)<br/>
	 * Gets the start date
	 * @link http://php.net/manual/ja/dateperiod.getstartdate.php
	 * @return DateTimeInterface a <b>DateTimeImmutable</b> object
	 * when the <b>DatePeriod</b> is initialized with a
	 * <b>DateTimeImmutable</b> object
	 * as the <i>start</i> parameter.
	 * </p>
	 * <p>
	 * Returns a <b>DateTime</b> object
	 * otherwise.
	 */
	public function getStartDate(): DateTimeInterface {}

	/**
	 * (PHP 5 &gt;= 5.6.5, PHP 7)<br/>
	 * Gets the end date
	 * @link http://php.net/manual/ja/dateperiod.getenddate.php
	 * @return DateTimeInterface <b>NULL</b> if the <b>DatePeriod</b> does
	 * not have an end date. For example, when initialized with the
	 * <i>recurrences</i> parameter, or the
	 * <i>isostr</i> parameter without an
	 * end date.
	 * </p>
	 * <p>
	 * Returns a <b>DateTimeImmutable</b> object
	 * when the <b>DatePeriod</b> is initialized with a
	 * <b>DateTimeImmutable</b> object
	 * as the <i>end</i> parameter.
	 * </p>
	 * <p>
	 * Returns a <b>DateTime</b> object
	 * otherwise.
	 */
	public function getEndDate(): DateTimeInterface {}

	/**
	 * (PHP 5 &gt;= 5.6.5, PHP 7)<br/>
	 * Gets the interval
	 * @link http://php.net/manual/ja/dateperiod.getdateinterval.php
	 * @return DateInterval a <b>DateInterval</b> object
	 */
	public function getDateInterval(): DateInterval {}

}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 英文形式の日付を Unix タイムスタンプに変換する
 * @link http://php.net/manual/ja/function.strtotime.php
 * @param string $time <p>日付/時刻 文字列。有効な書式については 日付と時刻の書式 で説明しています。</p>
 * @param int $now [optional] <p>
 * 返される値を計算するために使用されるタイムスタンプ。
 * </p>
 * @return int 成功時はタイムスタンプ、そうでなければ <b>FALSE</b> を返します。
 * PHP 5.1.0 以前ではこの関数は失敗時に -1 を返します。
 */
function strtotime(string $time, int $now = 'time()'): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ローカルの日付/時刻を書式化する
 * @link http://php.net/manual/ja/function.date.php
 * @param string $format <p>
 * 出力される日付文字列の書式。以下のオプションを参照ください。
 * 定義済みの定数
 * も用意されており、たとえば <b>DATE_RSS</b> はフォーマット文字列
 * 'D, d M Y H:i:s' と同じ意味になります。
 * </p>
 * <p>
 * <table>
 * 以下の文字が <i>format</i>
 * パラメータ文字列として認識されます
 * <tr valign="top">
 * <td><i>format</i> 文字</td>
 * <td>説明</td>
 * <td>戻り値の例</td>
 * </tr>
 * <tr valign="top">
 * 日</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>d</td>
 * <td>日。二桁の数字（先頭にゼロがつく場合も）</td>
 * <td>01 から 31</td>
 * </tr>
 * <tr valign="top">
 * <td>D</td>
 * <td>曜日。3文字のテキスト形式。</td>
 * <td>Mon から Sun</td>
 * </tr>
 * <tr valign="top">
 * <td>j</td>
 * <td>日。先頭にゼロをつけない。</td>
 * <td>1 から 31</td>
 * </tr>
 * <tr valign="top">
 * <td>l (小文字の 'L')</td>
 * <td>曜日。フルスペル形式。</td>
 * <td>Sunday から Saturday</td>
 * </tr>
 * <tr valign="top">
 * <td>N</td>
 * <td>ISO-8601 形式の、曜日の数値表現
 * (PHP 5.1.0 で追加)。</td>
 * <td>1（月曜日）から 7（日曜日）</td>
 * </tr>
 * <tr valign="top">
 * <td>S</td>
 * <td>英語形式の序数を表すサフィックス。2 文字。</td>
 * <td>
 * st, nd, rd
 * または th。 jと一緒に使用する
 * ことができる。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>w</td>
 * <td>曜日。数値。</td>
 * <td>0 (日曜)から 6 (土曜)</td>
 * </tr>
 * <tr valign="top">
 * <td>z</td>
 * <td>年間の通算日。数字。(ゼロから開始)</td>
 * <td>0 から 365</td>
 * </tr>
 * <tr valign="top">
 * 週</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>W</td>
 * <td>ISO-8601 月曜日に始まる年単位の週番号</td>
 * <td>例: 42 (年の第 42 週目)</td>
 * </tr>
 * <tr valign="top">
 * 月</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>F</td>
 * <td>月。フルスペルの文字。</td>
 * <td>January から December</td>
 * </tr>
 * <tr valign="top">
 * <td>m</td>
 * <td>月。数字。先頭にゼロをつける。</td>
 * <td>01 から 12</td>
 * </tr>
 * <tr valign="top">
 * <td>M</td>
 * <td>月。3 文字形式。</td>
 * <td>Jan から Dec</td>
 * </tr>
 * <tr valign="top">
 * <td>n</td>
 * <td>月。数字。先頭にゼロをつけない。</td>
 * <td>1 から 12</td>
 * </tr>
 * <tr valign="top">
 * <td>t</td>
 * <td>指定した月の日数。</td>
 * <td>28 から 31</td>
 * </tr>
 * <tr valign="top">
 * 年</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>L</td>
 * <td>閏年であるかどうか。</td>
 * <td>1なら閏年。0なら閏年ではない。</td>
 * </tr>
 * <tr valign="top">
 * <td>o</td>
 * <td>ISO-8601 形式の週番号による年。これは
 * Y ほぼ同じだが、ISO 週番号
 * （W）が前年あるいは翌年に属する場合はそちらの年を使うという点が異なる（PHP 5.1.0 で追加）。</td>
 * <td>例: 1999 あるいは 2003</td>
 * </tr>
 * <tr valign="top">
 * <td>Y</td>
 * <td>年。4 桁の数字。</td>
 * <td>例: 1999または2003</td>
 * </tr>
 * <tr valign="top">
 * <td>y</td>
 * <td>年。2 桁の数字。</td>
 * <td>例: 99 または 03</td>
 * </tr>
 * <tr valign="top">
 * 時</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>a</td>
 * <td>午前または午後（小文字）</td>
 * <td>am または pm</td>
 * </tr>
 * <tr valign="top">
 * <td>A</td>
 * <td>午前または午後（大文字）</td>
 * <td>AM または PM</td>
 * </tr>
 * <tr valign="top">
 * <td>B</td>
 * <td>Swatch インターネット時間</td>
 * <td>000 から 999</td>
 * </tr>
 * <tr valign="top">
 * <td>g</td>
 * <td>時。12時間単位。先頭にゼロを付けない。</td>
 * <td>1 から 12</td>
 * </tr>
 * <tr valign="top">
 * <td>G</td>
 * <td>時。24時間単位。先頭にゼロを付けない。</td>
 * <td>0 から 23</td>
 * </tr>
 * <tr valign="top">
 * <td>h</td>
 * <td>時。数字。12 時間単位。</td>
 * <td>01 から 12</td>
 * </tr>
 * <tr valign="top">
 * <td>H</td>
 * <td>時。数字。24 時間単位。</td>
 * <td>00 から 23</td>
 * </tr>
 * <tr valign="top">
 * <td>i</td>
 * <td>分。先頭にゼロをつける。</td>
 * <td>00 から 59</td>
 * </tr>
 * <tr valign="top">
 * <td>s</td>
 * <td>秒。先頭にゼロをつける。</td>
 * <td>00 から 59</td>
 * </tr>
 * <tr valign="top">
 * <td>u</td>
 * <td>
 * マイクロ秒 (PHP 5.2.2 で追加)。
 * <b>date</b> の場合、これは常に
 * 000000 となることに注意しましょう。というのも、
 * この関数が受け取るパラメータは integer 型だからです。
 * 一方 <b>DateTime</b> をマイクロ秒つきで作成した場合は、
 * <b>DateTime::format</b> はマイクロ秒にも対応しています。
 * </td>
 * <td>例: 654321</td>
 * </tr>
 * <tr valign="top">
 * <td>v</td>
 * <td>
 * ミリ秒 (PHP 7.0.0 で追加)
 * Same note applies as for u.
 * </td>
 * <td>例: 654</td>
 * </tr>
 * <tr valign="top">
 * タイムゾーン</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>e</td>
 * <td>タイムゾーン識別子（PHP 5.1.0 で追加）</td>
 * <td>例: UTC, GMT, Atlantic/Azores</td>
 * </tr>
 * <tr valign="top">
 * <td>I (大文字の i)</td>
 * <td>サマータイム中か否か</td>
 * <td>1ならサマータイム中。 0ならそうではない。</td>
 * </tr>
 * <tr valign="top">
 * <td>O</td>
 * <td>グリニッジ標準時 (GMT) との時差</td>
 * <td>例: +0200</td>
 * </tr>
 * <tr valign="top">
 * <td>P</td>
 * <td>グリニッジ標準時 (GMT) との時差。時間と分をコロンで区切った形式 (PHP 5.1.3 で追加)。</td>
 * <td>例: +02:00</td>
 * </tr>
 * <tr valign="top">
 * <td>T</td>
 * <td>タイムゾーンの略称</td>
 * <td>例: EST, MDT ...</td>
 * </tr>
 * <tr valign="top">
 * <td>Z</td>
 * <td>タイムゾーンのオフセット秒数。
 * UTC の西側のタイムゾーン用のオフセットは常に負です。そして、
 * UTC の東側のオフセットは常に正です。</td>
 * <td>-43200 から 50400</td>
 * </tr>
 * <tr valign="top">
 * 全ての日付/時刻</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>c</td>
 * <td>ISO 8601 日付 (PHP 5 で追加されました)</td>
 * <td>2004-02-12T15:19:21+00:00</td>
 * </tr>
 * <tr valign="top">
 * <td>r</td>
 * <td>RFC 2822 フォーマットされた日付</td>
 * <td>例: Thu, 21 Dec 2000 16:01:07 +0200</td>
 * </tr>
 * <tr valign="top">
 * <td>U</td>
 * <td>Unix Epoch (1970 年 1 月 1 日 0 時 0 分 0 秒) からの秒数</td>
 * <td><b>time</b> も参照</td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * フォーマット文字列中の認識されない文字は、そのまま表示されます。
 * Z 形式は、
 * <b>gmdate</b> で使用した場合、常に 0
 * を返します。
 * </p>
 * <p>
 * この関数が受け付けるのは integer
 * のタイムスタンプだけです。したがって、書式指定文字
 * u が有用となるのは
 * <b>date_create</b> で作成したタイムスタンプを用いて
 * <b>date_format</b> を使用した場合のみです。
 * </p>
 * @param int $timestamp [optional]
 * @return string 日付を表す文字列を返します。
 * <i>timestamp</i> に数字以外が使用された場合は
 * <b>FALSE</b> が返され、<b>E_WARNING</b>
 * レベルのエラーが発生します。
 */
function date(string $format, int $timestamp = 'time()'): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * ローカルな時刻/日付を整数として整形する
 * @link http://php.net/manual/ja/function.idate.php
 * @param string $format <p>
 * <table>
 * 以下の文字が <i>format</i>
 * パラメータ文字列として認識されます
 * <tr valign="top">
 * <td><i>format</i> 文字</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>B</td>
 * <td>Swatch ビート/インターネット時間</td>
 * </tr>
 * <tr valign="top">
 * <td>d</td>
 * <td>月の日</td>
 * </tr>
 * <tr valign="top">
 * <td>h</td>
 * <td>時 (12 時間単位)</td>
 * </tr>
 * <tr valign="top">
 * <td>H</td>
 * <td>時 (24 時間単位)</td>
 * </tr>
 * <tr valign="top">
 * <td>i</td>
 * <td>分</td>
 * </tr>
 * <tr valign="top">
 * <td>I (大文字の i)</td>
 * <td>夏時間の適用中は 1、
 * そうでなければ 0 を返す</td>
 * </tr>
 * <tr valign="top">
 * <td>L (大文字の l)</td>
 * <td>閏年なら 1、
 * そうでなければ 0 を返す</td>
 * </tr>
 * <tr valign="top">
 * <td>m</td>
 * <td>月数</td>
 * </tr>
 * <tr valign="top">
 * <td>s</td>
 * <td>秒</td>
 * </tr>
 * <tr valign="top">
 * <td>t</td>
 * <td>現在の月の日数</td>
 * </tr>
 * <tr valign="top">
 * <td>U</td>
 * <td>Unix Epoch (January 1 1970 00:00:00 UTC) からの秒数。
 * これは <b>time</b> と同じです</td>
 * </tr>
 * <tr valign="top">
 * <td>w</td>
 * <td>曜日 (日曜日は 0)</td>
 * </tr>
 * <tr valign="top">
 * <td>W</td>
 * <td>ISO-8601 形式。月曜日から始まる年単位の週番号</td>
 * </tr>
 * <tr valign="top">
 * <td>y</td>
 * <td>年 (1 桁あるいは 2 桁の数値 - 下の「注意」を確認ください)</td>
 * </tr>
 * <tr valign="top">
 * <td>Y</td>
 * <td>年 (4 桁)</td>
 * </tr>
 * <tr valign="top">
 * <td>z</td>
 * <td>年間の通算日</td>
 * </tr>
 * <tr valign="top">
 * <td>Z</td>
 * <td>タイムゾーンのオフセット秒数</td>
 * </tr>
 * </table>
 * </p>
 * @param int $timestamp [optional]
 * @return int 整数値を返します。
 * </p>
 * <p>
 * <b>idate</b> が返す値の型は常に integer であり、
 * 先頭に "0" がくることはありません。そのため、<b>idate</b>
 * の返す結果が予想より少ない桁数になることもあります。以下の例を参照ください。
 */
function idate(string $format, int $timestamp = 'time()'): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * GMT/UTC の日付/時刻を書式化する
 * @link http://php.net/manual/ja/function.gmdate.php
 * @param string $format <p>
 * 出力される文字列の書式。<b>date</b>
 * 関数の書式オプションを参照ください。
 * </p>
 * @param int $timestamp [optional]
 * @return string 日付を表す文字列を返します。
 * <i>timestamp</i> に数字以外が使用された場合は
 * <b>FALSE</b> が返され、<b>E_WARNING</b>
 * レベルのエラーが発生します。
 */
function gmdate(string $format, int $timestamp = 'time()'): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 日付を Unix のタイムスタンプとして取得する
 * @link http://php.net/manual/ja/function.mktime.php
 * @param int $hour [optional] <p>
 * <i>month</i>、<i>day</i> と <i>year</i>
 * で決まる日付の 0 時から数えた「時」。負の値は、その日の 0 時から前にさかのぼった時間を表します。
 * 23 より大きい値は、その翌日以降の該当する時間を表します。
 * </p>
 * @param int $minute [optional] <p>
 * <i>hour</i> 時 0 分から数えた「分」。
 * 負の値は、その前の時刻を表します。
 * 59 より大きい値は、その次の時間以降の該当する時間を表します。
 * </p>
 * @param int $second [optional] <p>
 * <i>minute</i> 分 0 秒から数えた「秒」。
 * 負の値は、その前の時刻を表します。
 * 59 より大きい値は、その次の分以降の該当する時間を表します。
 * </p>
 * @param int $month [optional] <p>
 * 前年末から数えた月数。1 から 12 までの場合は、カレンダーどおりのその年の「月」を表します。
 * (負の値を含めた) 1 より小さい値は、前年の月を逆順でたどります。
 * つまり 0 なら 12 月、-1 なら 11 月になるということです。
 * 12 より大きい値は、その翌年以降の該当する月を表します。
 * </p>
 * @param int $day [optional] <p>
 * 前月末から数えた日数。1 から 28、29、30、31 (月によって異なる) までの場合は、その月の「日」を表します。
 * (負の値を含めた) 1 より小さい値は、前月の日を逆順でたどります。
 * つまり 0 なら前月の末日、-1 ならそのさらに前日になるということです。
 * その月の日数より大きい値は、翌月以降の該当する日を表します。
 * </p>
 * @param int $year [optional] <p>
 * 年。2 桁または 4 桁の値を指定可能で、
 * 0-69 の間の値は 2000-2069 に、70-100 は 1970-2000 にマップされます。
 * 今日最も一般的なシステム、すなわち time_t が 32 ビットの符号付き整数である
 * システムでは <i>year</i> として有効な範囲は 1901 から
 * 2038 の間です。しかし、PHP 5.1.0 より前のバージョンではこの範囲が
 * 1970 から 2038 に制限されているシステム (たとえば Windows) もありました。
 * </p>
 * @param int $is_dst [optional] <p>
 * このパラメータはサマータイム (DST) の時に1にセットされ、
 * そうでない時に0、サマータイムであるかどうかが不明である場合に-1
 * にセットされます。
 * 不明な場合、PHP はサマータイムかどうか推測しようとします。
 * PHP を実行しているシステムで DST が有効になっている、もしくは
 * <i>is_dst</i> が 1 にセットされている場合、
 * 一部の時刻は有効になりません。
 * もし DST が有効で例えば 2:00 の場合、2:00 から 3:00 までの全ての時刻は
 * 無効になり、<b>mktime</b> は不確定な値 (通常は負数)
 * を返します。いくつかのシステム (例えば Solaris 8) は真夜中に DST
 * を有効にしますので、DST が有効なときの 0:30 は前日の 23:30
 * と評価されます。
 * </p>
 * <p>
 * PHP 5.1.0 以降、このパラメータは廃止されました。その結果、
 * 新しいタイムゾーン処理機能がかわりに使用されます。
 * </p>
 * <p>
 * このパラメータは PHP 7.0.0 で削除されました。
 * </p>
 * @return int <b>mktime</b> は与えられた引数の Unix
 * タイムスタンプを返します。引数が不正な場合、
 * この関数は <b>FALSE</b> を返します（PHP 5.1 より前のバージョンでは
 * -1 を返していました）。
 */
function mktime(int $hour = 'date("H")', int $minute = 'date("i")', int $second = 'date("s")', int $month = 'date("n")', int $day = 'date("j")', int $year = 'date("Y")', int $is_dst = -1): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * GMT 日付から Unix タイムスタンプを取得する
 * @link http://php.net/manual/ja/function.gmmktime.php
 * @param int $hour [optional] <p>
 * <i>month</i>、<i>day</i> と <i>year</i>
 * で決まる日付の 0 時から数えた「時」。負の値は、その日の 0 時から前にさかのぼった時間を表します。
 * 23 より大きい値は、その翌日以降の該当する時間を表します。
 * </p>
 * @param int $minute [optional] <p>
 * <i>hour</i> 時 0 分から数えた「分」。
 * 負の値は、その前の時刻を表します。
 * 59 より大きい値は、その次の時間以降の該当する時間を表します。
 * </p>
 * @param int $second [optional] <p>
 * <i>minute</i> 分 0 秒から数えた「秒」。
 * 負の値は、その前の時刻を表します。
 * 59 より大きい値は、その次の分以降の該当する時間を表します。
 * </p>
 * @param int $month [optional] <p>
 * 前年末から数えた月数。1 から 12 までの場合は、カレンダーどおりのその年の「月」を表します。
 * (負の値を含めた) 1 より小さい値は、前年の月を逆順でたどります。
 * つまり 0 なら 12 月、-1 なら 11 月になるということです。
 * 12 より大きい値は、その翌年以降の該当する月を表します。
 * </p>
 * @param int $day [optional] <p>
 * 前月末から数えた日数。1 から 28、29、30、31 (月によって異なる) までの場合は、その月の「日」を表します。
 * (負の値を含めた) 1 より小さい値は、前月の日を逆順でたどります。
 * つまり 0 なら前月の末日、-1 ならそのさらに前日になるということです。
 * その月の日数より大きい値は、翌月以降の該当する日を表します。
 * </p>
 * @param int $year [optional] <p>
 * 年
 * </p>
 * @param int $is_dst [optional] <p>
 * 常に GMT 日付を表すので、<i>is_dst</i>
 * は結果に影響を及ぼしません。
 * </p>
 * <p>
 * このパラメータは PHP 7.0.0 で削除されました。
 * </p>
 * @return int Unix タイムスタンプを integer で返します。
 */
function gmmktime(int $hour = 'gmdate("H")', int $minute = 'gmdate("i")', int $second = 'gmdate("s")', int $month = 'gmdate("n")', int $day = 'gmdate("j")', int $year = 'gmdate("Y")', int $is_dst = -1): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * グレゴリオ暦の日付/時刻の妥当性を確認します
 * @link http://php.net/manual/ja/function.checkdate.php
 * @param int $month <p>
 * 月は 1 から 12 の間となります。
 * </p>
 * @param int $day <p>
 * 日は、指定された <i>month</i>
 * の日数の範囲内になります。<i>year</i>
 * がうるう年の場合は、それも考慮されます。
 * </p>
 * @param int $year <p>
 * 年は 1 から 32767 の間となります。
 * </p>
 * @return bool 指定した日付が有効な場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
 */
function checkdate(int $month, int $day, int $year): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ロケールの設定に基づいてローカルな日付・時間をフォーマットする
 * @link http://php.net/manual/ja/function.strftime.php
 * @param string $format <p>
 * <table>
 * 次の変換指定子が <i>format</i> パラメータ用の文字列として認識されます
 * <tr valign="top">
 * <td><i>format</i></td>
 * <td>説明</td>
 * <td>返り値の例</td>
 * </tr>
 * <tr valign="top">
 * 日</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%a</td>
 * <td>短縮された曜日の名前</td>
 * <td>Sun から Sat</td>
 * </tr>
 * <tr valign="top">
 * <td>%A</td>
 * <td>完全な曜日の名前</td>
 * <td>Sunday から Saturday</td>
 * </tr>
 * <tr valign="top">
 * <td>%d</td>
 * <td>10 進数で 2 桁の日付 (先頭のゼロつき)</td>
 * <td>01 から 31</td>
 * </tr>
 * <tr valign="top">
 * <td>%e</td>
 * <td>
 * 1 桁の場合は先頭にスペースをいれた日付。
 * Windows ではそのようには実装されていません。詳細は以下を参照ください。
 * </td>
 * <td> 1 から 31</td>
 * </tr>
 * <tr valign="top">
 * <td>%j</td>
 * <td>3 桁で先頭にゼロを含む年間での日付</td>
 * <td>001 から 366</td>
 * </tr>
 * <tr valign="top">
 * <td>%u</td>
 * <td>ISO-8601 数値表現であらわした曜日</td>
 * <td>1 (月曜日) から 7 (日曜日)</td>
 * </tr>
 * <tr valign="top">
 * <td>%w</td>
 * <td>数値表現であらわした曜日</td>
 * <td>0 (日曜日) から 6 (土曜日)</td>
 * </tr>
 * <tr valign="top">
 * 週</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%U</td>
 * <td>指定した年の週番号。最初の日曜日を第一週の開始日とする</td>
 * <td>13 (年間の第 13 週の場合)</td>
 * </tr>
 * <tr valign="top">
 * <td>%V</td>
 * <td>ISO-8601:1988 で規定された、指定した年の週番号。
 * 週の開始日は月曜日で、第 1 週は少なくとも 4 日はあることになる</td>
 * <td>01 から 53 (53
 * は年をまたがる週になります)</td>
 * </tr>
 * <tr valign="top">
 * <td>%W</td>
 * <td>その年の週番号の数値表現。最初の月曜日を最初の週の初日とする</td>
 * <td>46 (46 番目の週の場合。開始日は月曜日)</td>
 * </tr>
 * <tr valign="top">
 * 月</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%b</td>
 * <td>現在のロケールに基づく短縮された月の名前</td>
 * <td>Jan から Dec</td>
 * </tr>
 * <tr valign="top">
 * <td>%B</td>
 * <td>現在のロケールに基づく完全な月の名前</td>
 * <td>January から December</td>
 * </tr>
 * <tr valign="top">
 * <td>%h</td>
 * <td>現在のロケールに基づく短縮された月の名前 (%b のエイリアス)</td>
 * <td>Jan から Dec</td>
 * </tr>
 * <tr valign="top">
 * <td>%m</td>
 * <td>2 桁であらわした月</td>
 * <td>01 (1 月) から 12 (12 月)</td>
 * </tr>
 * <tr valign="top">
 * 年</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%C</td>
 * <td>2 桁であらわした世紀 (年を 100 で割り、整数に丸めたもの)</td>
 * <td>20 正規の場合は 19</td>
 * </tr>
 * <tr valign="top">
 * <td>%g</td>
 * <td>2 桁であらわした年。ISO-8601:1988 標準形式 (%V を参照)</td>
 * <td>2009 年 1 月 6 日の場合は 09</td>
 * </tr>
 * <tr valign="top">
 * <td>%G</td>
 * <td>%g の 4 桁完全版</td>
 * <td>2009 年 1 月 3 日の場合は 2009</td>
 * </tr>
 * <tr valign="top">
 * <td>%y</td>
 * <td>2 桁であらわした年</td>
 * <td>2009 年の場合は 09、1979 年の場合は 79</td>
 * </tr>
 * <tr valign="top">
 * <td>%Y</td>
 * <td>4 桁であらわした年</td>
 * <td>2038</td>
 * </tr>
 * <tr valign="top">
 * 時</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%H</td>
 * <td>2 桁であらわした 24 時間制の時間</td>
 * <td>00 から 23</td>
 * </tr>
 * <tr valign="top">
 * <td>%k</td>
 * <td>24 時間制の時間で、1 桁の場合は先頭にスペースをつけたもの</td>
 * <td> 0 から 23</td>
 * </tr>
 * <tr valign="top">
 * <td>%I</td>
 * <td>2 桁であらわした 12 時間制の時間</td>
 * <td>01 から 12</td>
 * </tr>
 * <tr valign="top">
 * <td>%l (小文字の 'L')</td>
 * <td>12 時間制の時間で、1 桁の場合は先頭にスペースをつけたもの</td>
 * <td> 1 から 12</td>
 * </tr>
 * <tr valign="top">
 * <td>%M</td>
 * <td>2 桁であらわした分</td>
 * <td>00 から 59</td>
 * </tr>
 * <tr valign="top">
 * <td>%p</td>
 * <td>指定した時刻に応じた大文字の 'AM' あるいは 'PM'</td>
 * <td>00:31 なら AM、22:23 なら PM</td>
 * </tr>
 * <tr valign="top">
 * <td>%P</td>
 * <td>指定した時刻に応じた小文字の 'am' あるいは 'pm'</td>
 * <td>00:31 なら am、22:23 なら pm</td>
 * </tr>
 * <tr valign="top">
 * <td>%r</td>
 * <td>"%I:%M:%S %p" と同じ</td>
 * <td>21:34:17 なら 09:34:17 PM</td>
 * </tr>
 * <tr valign="top">
 * <td>%R</td>
 * <td>"%H:%M" と同じ</td>
 * <td>12:35 AM なら 00:35、4:44 PM なら 16:44</td>
 * </tr>
 * <tr valign="top">
 * <td>%S</td>
 * <td>2 桁であらわした秒</td>
 * <td>00 から 59</td>
 * </tr>
 * <tr valign="top">
 * <td>%T</td>
 * <td>"%H:%M:%S" と同じ</td>
 * <td>09:34:17 PM なら 21:34:17</td>
 * </tr>
 * <tr valign="top">
 * <td>%X</td>
 * <td>ロケールに基づいた時刻の表現。日付は含まない</td>
 * <td>03:59:16 あるいは 15:59:16</td>
 * </tr>
 * <tr valign="top">
 * <td>%z</td>
 * <td>タイムゾーンオフセット。Windows では違う実装になっています。詳細は後述します。</td>
 * <td>東海岸時刻なら -0500</td>
 * </tr>
 * <tr valign="top">
 * <td>%Z</td>
 * <td>タイムゾーンの略称。Windows では違う実装になっています。詳細は後述します。</td>
 * <td>東海岸時刻なら EST</td>
 * </tr>
 * <tr valign="top">
 * タイムスタンプ</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%c</td>
 * <td>現在のロケールにもとづく日付と時間の表現</td>
 * <td>2009 年 2 月 5 日 午前 12:45:10 なら Tue Feb 5 00:45:10 2009</td>
 * </tr>
 * <tr valign="top">
 * <td>%D</td>
 * <td>"%m/%d/%y" と同じ</td>
 * <td>2009 年 2 月 5 日なら 02/05/09</td>
 * </tr>
 * <tr valign="top">
 * <td>%F</td>
 * <td>"%Y-%m-%d" と同じ (データベースのタイムスタンプとして一般的)</td>
 * <td>2009 年 2 月 5 日なら 2009-02-05</td>
 * </tr>
 * <tr valign="top">
 * <td>%s</td>
 * <td>Unix エポックからのタイムスタンプ (<b>time</b>
 * 関数と同じ)</td>
 * <td>1979 年 9 月 10 日午前 08:40:00 なら 305815200</td>
 * </tr>
 * <tr valign="top">
 * <td>%x</td>
 * <td>現在のロケールにもとづく日付の表現 (時間は除く)</td>
 * <td>2009 年 2 月 5 日なら 02/05/09</td>
 * </tr>
 * <tr valign="top">
 * その他</td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%n</td>
 * <td>改行文字 ("\n")</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%t</td>
 * <td>タブ文字 ("\t")</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%%</td>
 * <td>パーセント文字 ("%")</td>
 * <td>---</td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * このパラメータの最大長は 1023 文字です。
 * </p>
 * ISO-9889:1999 に反して、Sun Solaris は日曜日を 1 としています。
 * そのため、%u はこのマニュアルの説明どおりに機能しないかもしれません。
 * <p>
 * Windows 限定:
 * </p>
 * <p>
 * Windows 上では %e に対応していません。
 * この値が欲しければ、代わりに %#d を使いましょう。
 * クロスプラットフォーム対応の関数を書く方法をこの後の例で示します。
 * </p>
 * <p>
 * %z と %Z
 * は、どちらもタイムゾーン名を返します。オフセットや略称は返しません。
 * </p>
 * Mac OS X 限定: %P 修飾子は
 * Mac OS X 版の実装ではサポートされていません。
 * @param int $timestamp [optional]
 * @return string 指定した <i>timestamp</i> または timestamp
 * が指定されていない場合に現在のローカル時間を用いて、
 * 指定したフォーマット文字列に基づき文字列をフォーマットして返します。
 * 月および曜日の名前、およびその他の言語依存の文字列は、
 * <b>setlocale</b> で設定された現在のロケールを尊重して表示されます。
 */
function strftime(string $format, int $timestamp = 'time()'): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ロケールの設定に基づいて GMT/UTC 時刻/日付をフォーマットする
 * @link http://php.net/manual/ja/function.gmstrftime.php
 * @param string $format <p>
 * <b>strftime</b> の説明を参照ください。
 * </p>
 * @param int $timestamp [optional]
 * @return string 指定した <i>timestamp</i> または timestamp
 * が指定されていない場合に現在のローカル時間を用いて、
 * 指定したフォーマット文字列に基づき文字列をフォーマットして返します。
 * 月および曜日の名前、およびその他の言語依存の文字列は、
 * <b>setlocale</b> で設定された現在のロケールを尊重して表示されます。
 */
function gmstrftime(string $format, int $timestamp = 'time()'): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在の Unix タイムスタンプを返す
 * @link http://php.net/manual/ja/function.time.php
 * @return int
 */
function time(): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ローカルタイムを得る
 * @link http://php.net/manual/ja/function.localtime.php
 * @param int $timestamp [optional]
 * @param bool $is_associative [optional] <p>
 * <b>FALSE</b> に設定されるか省略された場合は、
 * 配列は通常の数値を添字とした配列として返されます。
 * <b>TRUE</b> に設定された場合は、
 * <b>localtime</b> は C 言語の関数 localtime
 * のコールにより返される構造体の全ての要素を有する連想配列を返します。
 * この連想配列の各キーの名前は次のようになります。
 * </p>
 * <p>
 * "tm_sec" - 秒 (0 から 59)
 * @return array
 */
function localtime(int $timestamp = 'time()', bool $is_associative = false): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 日付/時刻情報を取得する
 * @link http://php.net/manual/ja/function.getdate.php
 * @param int $timestamp [optional]
 * @return array <i>timestamp</i> に関連する情報を連想配列で返します。
 * 返される連想配列の内容は、次のようになります。
 * </p>
 * <p>
 * <table>
 * 返される連想配列のキー
 * <tr valign="top">
 * <td>キー</td>
 * <td>説明</td>
 * <td>戻り値の例</td>
 * </tr>
 * <tr valign="top">
 * <td>"seconds"</td>
 * <td>秒。数値。</td>
 * <td>0 から 59</td>
 * </tr>
 * <tr valign="top">
 * <td>"minutes"</td>
 * <td>分。数値。</td>
 * <td>0 から 59</td>
 * </tr>
 * <tr valign="top">
 * <td>"hours"</td>
 * <td>時。数値</td>
 * <td>0 から 23</td>
 * </tr>
 * <tr valign="top">
 * <td>"mday"</td>
 * <td>月単位の日。数値</td>
 * <td>1 から 31</td>
 * </tr>
 * <tr valign="top">
 * <td>"wday"</td>
 * <td>曜日。数値。</td>
 * <td>0 (日曜) から 6 (土曜)</td>
 * </tr>
 * <tr valign="top">
 * <td>"mon"</td>
 * <td>月。数値。</td>
 * <td>1 から 12</td>
 * </tr>
 * <tr valign="top">
 * <td>"year"</td>
 * <td>年。4桁の数値。</td>
 * <td>例: 1999 あるいは 2003</td>
 * </tr>
 * <tr valign="top">
 * <td>"yday"</td>
 * <td>年単位の日。数値。</td>
 * <td>0 から 365</td>
 * </tr>
 * <tr valign="top">
 * <td>"weekday"</td>
 * <td>曜日。フルスペルの文字。</td>
 * <td>Sunday から Saturday</td>
 * </tr>
 * <tr valign="top">
 * <td>"month"</td>
 * <td>月。フルスペルの文字。</td>
 * <td>January から December</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td>UNIX時（1970年1月1日）からの秒数。
 * <b>time</b>の戻り値と同様。 <b>date</b>でも使用される。</td>
 * <td>システムによって違うが、通常は-2147483648 から
 * 2147483647.
 * </td>
 * </tr>
 * </table>
 */
function getdate(int $timestamp = 'time()'): array {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTime::__construct</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-create.php
 * @param $time [optional]
 * @param $object [optional]
 */
function date_create($time, $object) {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * <b>DateTimeImmutable::__construct</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-create-immutable.php
 * @param $time [optional]
 * @param $object [optional]
 */
function date_create_immutable($time, $object) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * <b>DateTime::createFromFormat</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-create-from-format.php
 * @param $format
 * @param $time
 * @param $object [optional]
 */
function date_create_from_format($format, $time, $object) {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * <b>DateTimeImmutable::createFromFormat</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-create-immutable-from-format.php
 * @param $format
 * @param $time
 * @param $object [optional]
 */
function date_create_immutable_from_format($format, $time, $object) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * 指定した日付に関する詳細な情報を連想配列で返す
 * @link http://php.net/manual/ja/function.date-parse.php
 * @param string $date <p>
 * <b>strtotime</b> が理解できる書式の日付。
 * </p>
 * @return array 成功した場合に日付情報を含む配列、失敗した場合に <b>FALSE</b> を返します。
 */
function date_parse(string $date): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 指定した書式でフォーマットされた日付についての情報を取得する
 * @link http://php.net/manual/ja/function.date-parse-from-format.php
 * @param string $format <p>
 * <b>DateTime::createFromFormat</b>
 * が理解できるフォーマット。
 * </p>
 * @param string $date <p>
 * 日付をあらわす文字列。
 * </p>
 * @return array 指定した日付についての詳細情報を連想配列で返します。
 */
function date_parse_from_format(string $format, string $date): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * <b>DateTime::getLastErrors</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-get-last-errors.php
 */
function date_get_last_errors() {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTime::format</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-format.php
 * @param $object
 * @param $format
 */
function date_format($object, $format) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTime::modify</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-modify.php
 * @param $object
 * @param $modify
 */
function date_modify($object, $modify) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * <b>DateTime::add</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-add.php
 * @param $object
 * @param $interval
 */
function date_add($object, $interval) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * <b>DateTime::sub</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-sub.php
 * @param $object
 * @param $interval
 */
function date_sub($object, $interval) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTime::getTimezone</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-timezone-get.php
 * @param $object
 */
function date_timezone_get($object) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTime::setTimezone</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-timezone-set.php
 * @param $object
 * @param $timezone
 */
function date_timezone_set($object, $timezone) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTime::getOffset</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-offset-get.php
 * @param $object
 */
function date_offset_get($object) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * <b>DateTime::diff</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-diff.php
 * @param $object
 * @param $object2
 * @param $absolute [optional]
 */
function date_diff($object, $object2, $absolute) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTime::setTime</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-time-set.php
 * @param $object
 * @param $hour
 * @param $minute
 * @param $second [optional]
 */
function date_time_set($object, $hour, $minute, $second) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTime::setDate</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-date-set.php
 * @param $object
 * @param $year
 * @param $month
 * @param $day
 */
function date_date_set($object, $year, $month, $day) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTime::setISODate</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-isodate-set.php
 * @param $object
 * @param $year
 * @param $week
 * @param $day [optional]
 */
function date_isodate_set($object, $year, $week, $day) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * <b>DateTime::setTimestamp</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-timestamp-set.php
 * @param $object
 * @param $unixtimestamp
 */
function date_timestamp_set($object, $unixtimestamp) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * <b>DateTime::getTimestamp</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-timestamp-get.php
 * @param $object
 */
function date_timestamp_get($object) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTimeZone::__construct</b> のエイリアス
 * @link http://php.net/manual/ja/function.timezone-open.php
 * @param $timezone
 */
function timezone_open($timezone) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTimeZone::getName</b> のエイリアス
 * @link http://php.net/manual/ja/function.timezone-name-get.php
 * @param $object
 */
function timezone_name_get($object) {}

/**
 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
 * 略称からタイムゾーン名を返す
 * @link http://php.net/manual/ja/function.timezone-name-from-abbr.php
 * @param string $abbr <p>
 * タイムゾーンの略称。
 * </p>
 * @param int $gmtOffset [optional] <p>
 * GMT からのオフセット秒数。デフォルトは -1 で、
 * この場合は <i>abbr</i>
 * に対応するタイムゾーンのうち最初に見つかったものを返します。
 * それ以外の場合は指定したオフセットを探し、
 * そこで見つからなかった場合には
 * 他のオフセットも含めて最初に見つかったものを返します。
 * </p>
 * @param int $isdst [optional] <p>
 * 夏時間のインジケータ。デフォルトは -1 で、
 * タイムゾーンが夏時間を持っているかどうかは考慮せずに検索します。
 * この値を 1 にすると、<i>gmtOffset</i>
 * は夏時間を考慮したオフセットと見なします。
 * 0 の場合は、<i>gmtOffset</i>
 * は夏時間を考慮しないオフセットと見なします。
 * <i>abbr</i> が存在しない場合、
 * タイムゾーンの検索は <i>gmtOffset</i> と
 * <i>isdst</i> だけで行います。
 * </p>
 * @return string 成功した場合にタイムゾーン名、失敗した場合に <b>FALSE</b> を返します。
 */
function timezone_name_from_abbr(string $abbr, int $gmtOffset = -1, int $isdst = -1): string {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTimeZone::getOffset</b> のエイリアス
 * @link http://php.net/manual/ja/function.timezone-offset-get.php
 * @param DateTimeZone $object
 * @param DateTimeInterface $datetime
 */
function timezone_offset_get(DateTimeZone $objectDateTimeInterface , $datetime) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTimeZone::getTransitions</b> のエイリアス
 * @link http://php.net/manual/ja/function.timezone-transitions-get.php
 * @param $object
 * @param $timestamp_begin [optional]
 * @param $timestamp_end [optional]
 */
function timezone_transitions_get($object, $timestamp_begin, $timestamp_end) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * <b>DateTimeZone::getLocation</b> のエイリアス
 * @link http://php.net/manual/ja/function.timezone-location-get.php
 * @param $object
 */
function timezone_location_get($object) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTimeZone::listIdentifiers</b> のエイリアス
 * @link http://php.net/manual/ja/function.timezone-identifiers-list.php
 * @param $what [optional]
 * @param $country [optional]
 */
function timezone_identifiers_list($what, $country) {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
 * <b>DateTimeZone::listAbbreviations</b> のエイリアス
 * @link http://php.net/manual/ja/function.timezone-abbreviations-list.php
 */
function timezone_abbreviations_list() {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * timezonedb のバージョンを取得する
 * @link http://php.net/manual/ja/function.timezone-version-get.php
 * @return string 文字列を返します。
 */
function timezone_version_get(): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * <b>DateInterval::createFromDateString</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-interval-create-from-date-string.php
 * @param $time
 */
function date_interval_create_from_date_string($time) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * <b>DateInterval::format</b> のエイリアス
 * @link http://php.net/manual/ja/function.date-interval-format.php
 * @param $object
 * @param $format
 */
function date_interval_format($object, $format) {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * スクリプト中の日付/時刻関数で使用されるデフォルトタイムゾーンを設定する
 * @link http://php.net/manual/ja/function.date-default-timezone-set.php
 * @param string $timezone_identifier <p>
 * タイムゾーン ID 。例えば UTC や
 * Europe/Lisbon など。有効な ID の一覧は
 * にあります。
 * </p>
 * @return bool この関数は、<i>timezone_identifier</i> が
 * 無効なものである場合に <b>FALSE</b>、それ以外の場合に
 * <b>TRUE</b> を返します。
 */
function date_default_timezone_set(string $timezone_identifier): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * スクリプト中の日付/時刻関数で使用されるデフォルトタイムゾーンを取得する
 * @link http://php.net/manual/ja/function.date-default-timezone-get.php
 * @return string string を返します。
 */
function date_default_timezone_get(): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * 指定した日付と場所についての日の出時刻を返す
 * @link http://php.net/manual/ja/function.date-sunrise.php
 * @param int $timestamp <p>
 * 日の出時刻を取得する日の
 * <i>timestamp</i>。
 * </p>
 * @param int $format [optional] <p>
 * <table>
 * <i>format</i> 定数
 * <tr valign="top">
 * <td>定数</td>
 * <td>説明</td>
 * <td>例</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_STRING</td>
 * <td>結果を string で返します。</td>
 * <td>16:46</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_DOUBLE</td>
 * <td>結果を float で返します。</td>
 * <td>16.78243132</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_TIMESTAMP</td>
 * <td>結果を integer (タイムスタンプ) で返します。</td>
 * <td>1095034606</td>
 * </tr>
 * </table>
 * </p>
 * @param float $latitude [optional] <p>
 * デフォルトは北緯で、南緯は負の値で表します。
 * date.default_latitude も参照ください。
 * </p>
 * @param float $longitude [optional] <p>
 * デフォルトは東経で、西経は負の値で表します。
 * date.default_longitude も参照ください。
 * </p>
 * @param float $zenith [optional] <p>
 * デフォルトは date.sunrise_zenith です。
 * </p>
 * @param float $gmt_offset [optional]
 * @return mixed 日の出時刻を、指定した <i>format</i> で返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function date_sunrise(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude = 'ini_get("date.default_latitude")', float $longitude = 'ini_get("date.default_longitude")', float $zenith = 'ini_get("date.sunrise_zenith")', float $gmt_offset = 0) {}

/**
 * (PHP 5, PHP 7)<br/>
 * 指定した日付と場所についての日の入り時刻を返す
 * @link http://php.net/manual/ja/function.date-sunset.php
 * @param int $timestamp <p>
 * 日の入り時刻を取得する日の
 * <i>timestamp</i>。
 * </p>
 * @param int $format [optional] <p>
 * <table>
 * <i>format</i> 定数
 * <tr valign="top">
 * <td>定数</td>
 * <td>説明</td>
 * <td>例</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_STRING</td>
 * <td>結果を string で返します。</td>
 * <td>16:46</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_DOUBLE</td>
 * <td>結果を float で返します。</td>
 * <td>16.78243132</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_TIMESTAMP</td>
 * <td>結果を integer (タイムスタンプ) で返します。</td>
 * <td>1095034606</td>
 * </tr>
 * </table>
 * </p>
 * @param float $latitude [optional] <p>
 * デフォルトは北緯で、南緯は負の値で表します。
 * date.default_latitude も参照ください。
 * </p>
 * @param float $longitude [optional] <p>
 * デフォルトは東経で、西経は負の値で表します。
 * date.default_longitude も参照ください。
 * </p>
 * @param float $zenith [optional] <p>
 * デフォルトは date.sunset_zenith です。
 * </p>
 * @param float $gmt_offset [optional]
 * @return mixed 日の入り時刻を、指定した <i>format</i> で返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function date_sunset(int $timestamp, int $format = SUNFUNCS_RET_STRING, float $latitude = 'ini_get("date.default_latitude")', float $longitude = 'ini_get("date.default_longitude")', float $zenith = 'ini_get("date.sunset_zenith")', float $gmt_offset = 0) {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7)<br/>
 * 日の出/日の入り時刻と薄明かり (twilight) の開始/終了時刻の情報を含む配列を返す
 * @link http://php.net/manual/ja/function.date-sun-info.php
 * @param int $time <p>
 * タイムスタンプ。
 * </p>
 * @param float $latitude <p>
 * 緯度を表す度数。
 * </p>
 * @param float $longitude <p>
 * 経度を表す度数。
 * </p>
 * @return array 成功した場合に配列、失敗した場合に <b>FALSE</b> を返します。
 */
function date_sun_info(int $time, float $latitude, float $longitude): array {}

define ('DATE_ATOM', "Y-m-d\TH:i:sP");
define ('DATE_COOKIE', "l, d-M-Y H:i:s T");
define ('DATE_ISO8601', "Y-m-d\TH:i:sO");
define ('DATE_RFC822', "D, d M y H:i:s O");
define ('DATE_RFC850', "l, d-M-y H:i:s T");
define ('DATE_RFC1036', "D, d M y H:i:s O");
define ('DATE_RFC1123', "D, d M Y H:i:s O");
define ('DATE_RFC7231', "D, d M Y H:i:s \G\M\T");
define ('DATE_RFC2822', "D, d M Y H:i:s O");
define ('DATE_RFC3339', "Y-m-d\TH:i:sP");
define ('DATE_RFC3339_EXTENDED', "Y-m-d\TH:i:s.vP");
define ('DATE_RSS', "D, d M Y H:i:s O");
define ('DATE_W3C', "Y-m-d\TH:i:sP");

/**
 * タイムスタンプ
 * @link http://php.net/manual/ja/datetime.constants.php
 */
define ('SUNFUNCS_RET_TIMESTAMP', 0);

/**
 * 時:分 (例: 08:02)
 * @link http://php.net/manual/ja/datetime.constants.php
 */
define ('SUNFUNCS_RET_STRING', 1);

/**
 * 時刻を表す浮動小数点値 (例 8.75)
 * @link http://php.net/manual/ja/datetime.constants.php
 */
define ('SUNFUNCS_RET_DOUBLE', 2);

// End of date v.7.0.19
?>
