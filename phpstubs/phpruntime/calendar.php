<?php



namespace {

	/**
	 * 指定した年とカレンダーについて、月の日数を返す
	 * <p>この関数は、指定した <code>calendar</code> について <code>year</code> 年 <code>month</code> 月の日数を返します。</p>
	 * @param int $calendar <p>計算に使用するカレンダー。</p>
	 * @param int $month <p>選択したカレンダーにおける月。</p>
	 * @param int $year <p>選択したカレンダーにおける年。</p>
	 * @return int <p>指定したカレンダーの、その月の日数を返します。</p>
	 * @link https://php.net/manual/ja/function.cal-days-in-month.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function cal_days_in_month(int $calendar, int $month, int $year): int {}

	/**
	 * ユリウス積算日からサポートされるカレンダーに変換する
	 * <p><b>cal_from_jd()</b> は、 <code>jd</code> で指定したユリウス日を 指定した <code>calendar</code> に変換します。 サポートされる <code>calendar</code> の値は、 <b><code>CAL_GREGORIAN</code></b>、 <b><code>CAL_JULIAN</code></b>、 <b><code>CAL_JEWISH</code></b> および <b><code>CAL_FRENCH</code></b> です。</p>
	 * @param int $jd <p>ユリウス日を表す整数値。</p>
	 * @param int $calendar <p>変換するカレンダー。</p>
	 * @return array <p>カレンダーの情報を含む配列を返します。この配列には、 年、月、日、週、曜日名、月名、"月/日/年" 形式の文字列 などが含まれます。</p>
	 * @link https://php.net/manual/ja/function.cal-from-jd.php
	 * @see cal_to_jd(), jdtofrench(), jdtogregorian(), jdtojewish(), jdtojulian(), jdtounix()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function cal_from_jd(int $jd, int $calendar): array {}

	/**
	 * 特定のカレンダーに関する情報を返す
	 * <p><b>cal_info()</b> は、指定した <code>calendar</code> についての情報を返します。</p><p>カレンダーの情報は配列として返され、その要素は <i>calname</i>、<i>calsymbol</i>、 <i>month</i>、<i>abbrevmonth</i> および <i>maxdaysinmonth</i> となります。 <code>calendar</code> として指定可能なカレンダー名は以下のとおりです。</p><p><code>calendar</code> が指定されなかった場合は、 サポートするすべてのカレンダーの情報を配列で返します。</p>
	 * @param int $calendar <p>情報を返したいカレンダー。指定しなかった場合は、 すべてのカレンダーに関する情報を返します。</p>
	 * @return array
	 * @link https://php.net/manual/ja/function.cal-info.php
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function cal_info(int $calendar = -1): array {}

	/**
	 * サポートされるカレンダーからユリウス積算日に変換する
	 * <p><b>cal_to_jd()</b> は、指定した <code>calendar</code> の日付からユリウス積算日を計算します。 サポートされる <code>calendar</code> は <b><code>CAL_GREGORIAN</code></b>、 <b><code>CAL_JULIAN</code></b>、 <b><code>CAL_JEWISH</code></b> および <b><code>CAL_FRENCH</code></b> です。</p>
	 * @param int $calendar <p>変換元のカレンダー。 <b><code>CAL_GREGORIAN</code></b>、 <b><code>CAL_JULIAN</code></b>、 <b><code>CAL_JEWISH</code></b> あるいは <b><code>CAL_FRENCH</code></b> のいずれか。</p>
	 * @param int $month <p>月を表す数値。有効な範囲は <code>calendar</code> に依存します。</p>
	 * @param int $day <p>日を表す数値。有効な範囲は <code>calendar</code> に依存します。</p>
	 * @param int $year <p>年を表す数値。有効な範囲は <code>calendar</code> に依存します。</p>
	 * @return int <p>ユリウス積算日を返します。</p>
	 * @link https://php.net/manual/ja/function.cal-to-jd.php
	 * @see cal_from_jd(), frenchtojd(), gregoriantojd(), jewishtojd(), juliantojd(), unixtojd()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function cal_to_jd(int $calendar, int $month, int $day, int $year): int {}

	/**
	 * 指定した年における復活祭の真夜中のUnix時を得る
	 * <p>指定した年yearにおける復活祭の真夜中のUnix時を返します。</p><p>この関数は、年がUnixタイムスタンプの範囲を越える時 (すなわち、1970より前、または2037より後)に警告を発生します。</p><p>復活祭の日付は、西暦325年の Nicaea 会議で春分の日の後の 最初の満月の後の日曜日として定められました。 満月とその次の日曜日の日付の計算を簡単にするために 春分の日は常に3月21日になるとして計算されます。 ここで用いるアルゴリズムは、532年頃、Dionysius Exiguus により 導出されたものです。(1753年より前の年に関して)ユリウス暦の元では 月の周期を追うために簡単な19年周期が用いられます。グレゴリウス暦 (1753年以降。この暦は、ClaviusとLiliusにより考案され、 教皇グレゴリウス13世により1582年10月に導入、イギリス及びその植民地に 1752年9月に導入された。) のもとで、二つの補正係数が周期をより正確に作成するために追加されました。</p>
	 * @param int $year <p>1970 から 2037 までの年。省略した場合は、ローカルタイムにおける現在の年を使います。</p>
	 * @return int <p>復活祭の日を Unix タイムスタンプで返します。</p>
	 * @link https://php.net/manual/ja/function.easter-date.php
	 * @see easter_days()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function easter_date(int $year  = 'date("Y")'): int {}

	/**
	 * 指定した年において、3 月 21 日から復活祭までの日数を得る
	 * <p>指定した年 year において、3 月 21 日から復活祭までの日数を返します。 year が指定されない場合、現在の年が仮定されます。</p><p>この関数は、Unix 時の範囲外(すなわち 1970 年以前または 2037 年以降)の復活祭を 計算するために <code>easter_date()</code> の代わりに使用することが できます。</p><p>復活祭の日付は、西暦 325 年の Nicaea の会議で春分の日以降の 最初の満月の後の日曜日として定義されました。 満月とその次の日曜日の日付の計算を簡単にするために 春分の日は常に 3 月 21 日になるとして計算されます。 ここで用いるアルゴリズムは、532 年頃に Dionysius Exiguus により 導出されたものです。(1753 年より前の年に関して)ユリウス暦のもとでは 月の周期を追うために簡単な 19 年周期が用いられます。グレゴリオ暦 (1753 年以降。この暦は Clavius と Lilius により考案され、 教皇グレゴリウス 13 世により 1582 年 10 月に導入、イギリス及びその植民地に 1752 年 9 月に導入された) のもとで、二つの補正係数が周期をより正確に作成するために追加されました。</p>
	 * @param int $year <p>正の数値で表した年。省略した場合は、ローカルタイムにおける現在の年を使います。</p>
	 * @param int $method <p><b><code>CAL_EASTER_ROMAN</code></b> に設定すると 1582 年から 1752 年までの復活祭の日付をグレゴリオ暦にもとづいて 計算します。それ以外に使用可能な定数については カレンダー定数を参照ください。</p>
	 * @return int <p>指定した年 <code>year</code> において、3 月 21 日から復活祭までの日数を返します。</p>
	 * @link https://php.net/manual/ja/function.easter-days.php
	 * @see easter_date()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function easter_days(int $year  = 'date("Y")', int $method = CAL_EASTER_DEFAULT): int {}

	/**
	 * フランス革命暦をユリウス積算日に変換する
	 * <p>日付けをフランス革命暦からユリウス積算日に変換します。</p><p>これらのルーチンは、1から14年まで(グレゴリウス暦の1792年9月22日から 1806年9月22日)日付けのみを変換します。 この期間は、フランス革命暦が使用されていた期間を十分にカバーしています。</p>
	 * @param int $month <p>月を表す、1 (VendĂŠmiaire) から 13 (各年の最後の 5-6 日) までの数字。</p>
	 * @param int $day <p>日を表す、1 から 30 までの数字。</p>
	 * @param int $year <p>年を表す、1 から 14 までの数字。</p>
	 * @return int <p>フランス革命暦の日付をユリウス積算日になおした結果を整数値で返します。</p>
	 * @link https://php.net/manual/ja/function.frenchtojd.php
	 * @see jdtofrench(), cal_to_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function frenchtojd(int $month, int $day, int $year): int {}

	/**
	 * グレゴリウス日をユリウス積算日に変換する
	 * <p>有効なグレゴリウス暦の範囲は紀元前 4714 年から紀元 9999 年までです。</p><p>このソフトウェアは日付けを全て紀元前 4714 年にさかのぼることが 出来ますが、この様な使い方は特に意味があるわけではありません。 グレゴリウス暦は 1582 年 10 月 15 日(ユリウス暦では 1582 年 10 月 5 日)まで制定されていませんでした。 この暦は、いくつかの国でもっと後まで受け入れられませんでした。 例えば、イギリスは 1752 年、ロシア(USSR)は 1918 年、ギリシャは 1923 年に 移行しました。 ほとんどのヨーロッパの国々では、グレゴリウス暦の前は ユリウス暦を使用していました。</p>
	 * @param int $month <p>月を表す、1 (January) から 12 (December) までの数字。</p>
	 * @param int $day <p>日を表す、1 から 31 までの数字。</p>
	 * @param int $year <p>年を表す、-4714 から 9999 までの数字。</p>
	 * @return int <p>指定したグレゴリウス日をユリウス積算日になおした結果を返します。</p>
	 * @link https://php.net/manual/ja/function.gregoriantojd.php
	 * @see jdtogregorian(), cal_to_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function gregoriantojd(int $month, int $day, int $year): int {}

	/**
	 * 曜日を返す
	 * <p>曜日を返します。 モードに依存した文字あるいは整数を返す事が出来ます。</p>
	 * @param int $julianday <p>ユリウス積算日を表す整数値。</p>
	 * @param int $mode <b>暦の曜日モード</b>   モード 意味     0 (デフォルト)  整数で曜日番号 (0=Sunday, 1=Monday, 等)を返します。    1  曜日(英グレゴリウス)を含む文字列を返します。    2  曜日の省略形(英グレゴリウス)を含む文字列を返します。
	 * @return mixed <p>グレゴリウス暦の曜日を表す数値あるいは文字列を返します。</p>
	 * @link https://php.net/manual/ja/function.jddayofweek.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jddayofweek(int $julianday, int $mode = CAL_DOW_DAYNO) {}

	/**
	 * 月の名前を返す
	 * <p>月の名前を含んだ文字列を返します。 <code>mode</code>はユリウス積算日をどの暦に変換するか、 どんなタイプの月名を返すかを関数に伝えます。</p>
	 * @param int $julianday
	 * @param int $mode
	 * @return string <p>指定したユリウス積算日と <code>calendar</code> にもとづく月名を返します。</p>
	 * @link https://php.net/manual/ja/function.jdmonthname.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdmonthname(int $julianday, int $mode): string {}

	/**
	 * ユリウス積算日をフランス革命暦(共和暦)に変換する
	 * <p>ユリウス積算日をフランス革命暦に変換します。</p>
	 * @param int $juliandaycount
	 * @return string <p>フランス革命暦の日付を "月/日/年" 形式の文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.jdtofrench.php
	 * @see frenchtojd(), cal_from_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdtofrench(int $juliandaycount): string {}

	/**
	 * ユリウス積算日をグレゴリウス日に変換する
	 * <p>ユリウス積算日を "月/日/年" の形式でグレゴリウス日を含む文字列に変換します。</p>
	 * @param int $julianday <p>ユリウス積算日を表す整数値。</p>
	 * @return string <p>グレゴリウス暦の日付を "月/日/年" 形式の文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.jdtogregorian.php
	 * @see gregoriantojd(), cal_from_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdtogregorian(int $julianday): string {}

	/**
	 * ユリウス積算日をユダヤ暦に変換する
	 * <p>ユリウス積算日をユダヤ暦に変換します。</p>
	 * @param int $juliandaycount
	 * @param bool $hebrew <p>パラメータ <code>hebrew</code> が <b><code>TRUE</code></b> に設定されている場合、 ヘブライ語の文字列形式での出力のために <code>fl</code> が使用されます。</p>
	 * @param int $fl <p>使用可能なフォーマットは <b><code>CAL_JEWISH_ADD_ALAFIM_GERESH</code></b>、 <b><code>CAL_JEWISH_ADD_ALAFIM</code></b> および <b><code>CAL_JEWISH_ADD_GERESHAYIM</code></b> です。</p>
	 * @return string <p>ユダヤ暦の日付を "月/日/年" 形式の文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.jdtojewish.php
	 * @see jewishtojd(), cal_from_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdtojewish(int $juliandaycount, bool $hebrew = false, int $fl = 0): string {}

	/**
	 * ユリウス積算日をユリウス暦に変換する
	 * <p>ユリウス積算日を "月/日/年" の形式でユリウス暦を含む文字列に変換します。</p>
	 * @param int $julianday <p>ユリウス積算日を表す整数値。</p>
	 * @return string <p>ユリウス暦の日付を "月/日/年" 形式の文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.jdtojulian.php
	 * @see juliantojd(), cal_from_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdtojulian(int $julianday): string {}

	/**
	 * ユリウス歴を Unix タイムスタンプに変換する
	 * <p>この関数は、<code>jday</code> で指定したユリウス歴に 対応する Unix タイムスタンプを返します。 <code>jday</code> が Unix 歴 (グレゴリウス歴で 1970 年と 2037 年の間 または 2440588 &lt;= <code>jday</code> &lt;= 2465342) の範囲外の場合は <b><code>FALSE</code></b> を返します。返される時刻は地方時間です (GMT ではありません)。</p>
	 * @param int $jday <p>2440588 から 2465342 までのユリウス積算日。</p>
	 * @return int <p>指定したユリウス積算日の開始時の Unix タイムスタンプを返します。</p>
	 * @link https://php.net/manual/ja/function.jdtounix.php
	 * @see unixtojd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jdtounix(int $jday): int {}

	/**
	 * ユダヤ暦の日付けをユリウス積算日に変換する
	 * <p>この関数では1年(紀元前3761年)に遡って全ての日々を扱うこと が出来ますが、この様な使い方は特に意味があるわけではありません。 ユダヤ暦は数千年に渡って使われていますが、当初は月の 始まりが決められていませんでいた。新しい月は新月が最初に観測 された日に始まりました。</p>
	 * @param int $month <p>月を表す、1 から 13 までの数値。</p>
	 * @param int $day <p>日を表す、1 から 30 までの数値。</p>
	 * @param int $year <p>年を表す、1 から 9999 までの数値。</p>
	 * @return int <p>指定したユダヤ暦の日付に対応するユリウス積算日を返します。</p>
	 * @link https://php.net/manual/ja/function.jewishtojd.php
	 * @see jdtojewish(), cal_to_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function jewishtojd(int $month, int $day, int $year): int {}

	/**
	 * ユリウス暦をユリウス積算日に変換する
	 * <p>ユリウス暦は紀元前 4713 年から紀元 9999 年の範囲で使えます。</p><p>この関数は日付けを全て紀元前 4713 年にさかのぼって扱うことが 出来ますが,この様な使い方はあまり意味があるわけではありません。 このカレンダーは紀元前 46 年に作られました、しかし細部は紀元 8 年になるまで、おそらくは 4 世紀になるまで安定しませんでした。 また、年の始まりを一つの文化のものから別の文化のものに変更すること、 つまり、January を最初の月とすることは全く受け入れられませんでした。</p><p>覚えておいてほしいのは、現在世界中で使用されているカレンダーは グレゴリウス暦であるということです。この日付をユリウス日に 変換するには、<code>gregoriantojd()</code> が使用可能です。</p>
	 * @param int $month <p>月を表す、1 (for January) から 12 (for December) までの数値。</p>
	 * @param int $day <p>日を表す、1 から 31 までの数値。</p>
	 * @param int $year <p>年を表す、-4713 から 9999 までの数値。</p>
	 * @return int <p>指定したユリウス暦の日付に対応するユリウス積算日を返します。</p>
	 * @link https://php.net/manual/ja/function.juliantojd.php
	 * @see jdtojulian(), cal_to_jd()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function juliantojd(int $month, int $day, int $year): int {}

	/**
	 * Unix タイムスタンプをユリウス歴に変換する
	 * <p>Unix タイムスタンプ(1970/1/1 からの秒数)<code>timestamp</code> をユリウス歴に変換して返します。<code>timestamp</code> が 指定されない場合は現在の日付が使用されます。</p>
	 * @param int $timestamp <p>変換したい Unix タイムスタンプ。</p>
	 * @return int <p>ユリウス積算日を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.unixtojd.php
	 * @see jdtounix()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function unixtojd(int $timestamp  = 'time()'): int {}

	/**
	 * <code>jddayofweek()</code> で、曜日を <code>integer</code> で返す。 <i>0</i> は日曜を、<i>6</i> は土曜を意味する。
	 */
	define('CAL_DOW_DAYNO', 0);

	/**
	 * <code>jddayofweek()</code> で、曜日の英語名を返す。
	 */
	define('CAL_DOW_LONG', 1);

	/**
	 * <code>jddayofweek()</code> で、曜日の省略形英語名を返す。
	 */
	define('CAL_DOW_SHORT', 2);

	/**
	 * <code>easter_days()</code> で、先発グレゴリオ暦に従って、 復活祭の日付を計算する。
	 */
	define('CAL_EASTER_ALWAYS_GREGORIAN', 2);

	/**
	 * <code>easter_days()</code> で、ユリウス暦に従って、 復活祭の日付を計算する。
	 */
	define('CAL_EASTER_ALWAYS_JULIAN', 3);

	/**
	 * <code>easter_days()</code> で、1753年より前はユリウス暦に従って、 それ以降はグレゴリオ暦に従って復活祭の日付を計算する。
	 */
	define('CAL_EASTER_DEFAULT', 0);

	/**
	 * <code>easter_days()</code> で、1583年より前はユリウス暦に従って、 それ以降はグレゴリオ暦に従って復活祭の日付を計算する。
	 */
	define('CAL_EASTER_ROMAN', 1);

	/**
	 * <code>cal_days_in_month()</code>、 <code>cal_from_jd()</code>、<code>cal_info()</code> および <code>cal_to_jd()</code> で、フランス革命暦を使う。
	 */
	define('CAL_FRENCH', 3);

	/**
	 * <code>cal_days_in_month()</code>、 <code>cal_from_jd()</code>、<code>cal_info()</code> および <code>cal_to_jd()</code> で、先発グレゴリオ暦を使う。
	 */
	define('CAL_GREGORIAN', 0);

	/**
	 * <code>cal_days_in_month()</code>、 <code>cal_from_jd()</code>、<code>cal_info()</code> および <code>cal_to_jd()</code> で、ユダヤ暦を使う。
	 */
	define('CAL_JEWISH', 2);

	/**
	 * <code>jdtojewish()</code> で、年の桁区切りとして、 「alafim」という語を追加する。
	 */
	define('CAL_JEWISH_ADD_ALAFIM', 4);

	/**
	 * <code>jdtojewish()</code> で、年の桁区切りとして、 ゲレシュ記号（シングルクォートに似た記号）を追加する。
	 */
	define('CAL_JEWISH_ADD_ALAFIM_GERESH', 2);

	/**
	 * <code>jdtojewish()</code> で、年と日の最後の文字の前に、 ゲルシャイム記号（ダブルクォートに似た記号）を追加する。
	 */
	define('CAL_JEWISH_ADD_GERESHAYIM', 8);

	/**
	 * <code>cal_days_in_month()</code>、 <code>cal_from_jd()</code>、<code>cal_info()</code> および <code>cal_to_jd()</code> で、ユリウス暦を使う。
	 */
	define('CAL_JULIAN', 1);

	/**
	 * <code>jdmonthname()</code> で、フランス革命歴月名を返す。
	 */
	define('CAL_MONTH_FRENCH', 5);

	/**
	 * <code>jdmonthname()</code> で、グレゴリオ歴月名を返す。
	 */
	define('CAL_MONTH_GREGORIAN_LONG', 1);

	/**
	 * <code>jdmonthname()</code> で、省略形のグレゴリオ歴月名を返す。
	 */
	define('CAL_MONTH_GREGORIAN_SHORT', 0);

	/**
	 * <code>jdmonthname()</code> で、ユダヤ歴月名を返す。
	 */
	define('CAL_MONTH_JEWISH', 4);

	/**
	 * <code>jdmonthname()</code> で、ユリウス歴月名を返す。
	 */
	define('CAL_MONTH_JULIAN_LONG', 3);

	/**
	 * <code>jdmonthname()</code> で、省略形のユリウス歴月名を返す。
	 */
	define('CAL_MONTH_JULIAN_SHORT', 2);

	/**
	 * 利用可能なカレンダーの数。
	 */
	define('CAL_NUM_CALS', 4);

}
