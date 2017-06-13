<?php

// Start of calendar v.7.1.5

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユリウス積算日をグレゴリウス日に変換する
 * @link http://php.net/manual/ja/function.jdtogregorian.php
 * @param int $julianday <p>
 * ユリウス積算日を表す整数値。
 * </p>
 * @return string グレゴリウス暦の日付を "月/日/年" 形式の文字列で返します。
 */
function jdtogregorian(int $julianday): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * グレゴリウス日をユリウス積算日に変換する
 * @link http://php.net/manual/ja/function.gregoriantojd.php
 * @param int $month <p>
 * 月を表す、1 (January) から 12 (December) までの数字。
 * </p>
 * @param int $day <p>
 * 日を表す、1 から 31 までの数字。
 * </p>
 * @param int $year <p>
 * 年を表す、-4714 から 9999 までの数字。
 * </p>
 * @return int 指定したグレゴリウス日をユリウス積算日になおした結果を返します。
 */
function gregoriantojd(int $month, int $day, int $year): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユリウス積算日をユリウス暦に変換する
 * @link http://php.net/manual/ja/function.jdtojulian.php
 * @param int $julianday <p>
 * ユリウス積算日を表す整数値。
 * </p>
 * @return string ユリウス暦の日付を "月/日/年" 形式の文字列で返します。
 */
function jdtojulian(int $julianday): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユリウス暦をユリウス積算日に変換する
 * @link http://php.net/manual/ja/function.juliantojd.php
 * @param int $month <p>
 * 月を表す、1 (for January) から 12 (for December) までの数値。
 * </p>
 * @param int $day <p>
 * 日を表す、1 から 31 までの数値。
 * </p>
 * @param int $year <p>
 * 年を表す、-4713 から 9999 までの数値。
 * </p>
 * @return int 指定したユリウス暦の日付に対応するユリウス積算日を返します。
 */
function juliantojd(int $month, int $day, int $year): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユリウス積算日をユダヤ暦に変換する
 * @link http://php.net/manual/ja/function.jdtojewish.php
 * @param int $juliandaycount
 * @param bool $hebrew [optional] <p>
 * パラメータ <i>hebrew</i> が <b>TRUE</b> に設定されている場合、
 * ヘブライ語の文字列形式での出力のために <i>fl</i>
 * が使用されます。
 * </p>
 * @param int $fl [optional] <p>
 * 使用可能なフォーマットは
 * <b>CAL_JEWISH_ADD_ALAFIM_GERESH</b>、
 * <b>CAL_JEWISH_ADD_ALAFIM</b> および
 * <b>CAL_JEWISH_ADD_GERESHAYIM</b> です。
 * </p>
 * @return string ユダヤ暦の日付を "月/日/年" 形式の文字列で返します。
 */
function jdtojewish(int $juliandaycount, bool $hebrew = false, int $fl = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユダヤ暦の日付けをユリウス積算日に変換する
 * @link http://php.net/manual/ja/function.jewishtojd.php
 * @param int $month <p>
 * 月を表す、1 から 13 までの数値。
 * </p>
 * @param int $day <p>
 * 日を表す、1 から 30 までの数値。
 * </p>
 * @param int $year <p>
 * 年を表す、1 から 9999 までの数値。
 * </p>
 * @return int 指定したユダヤ暦の日付に対応するユリウス積算日を返します。
 */
function jewishtojd(int $month, int $day, int $year): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユリウス積算日をフランス革命暦(共和暦)に変換する
 * @link http://php.net/manual/ja/function.jdtofrench.php
 * @param int $juliandaycount
 * @return string フランス革命暦の日付を "月/日/年" 形式の文字列で返します。
 */
function jdtofrench(int $juliandaycount): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * フランス革命暦をユリウス積算日に変換する
 * @link http://php.net/manual/ja/function.frenchtojd.php
 * @param int $month <p>
 * 月を表す、1 (VendĂŠmiaire) から 13 (各年の最後の 5-6 日)
 * までの数字。
 * </p>
 * @param int $day <p>
 * 日を表す、1 から 30 までの数字。
 * </p>
 * @param int $year <p>
 * 年を表す、1 から 14 までの数字。
 * </p>
 * @return int フランス革命暦の日付をユリウス積算日になおした結果を整数値で返します。
 */
function frenchtojd(int $month, int $day, int $year): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 曜日を返す
 * @link http://php.net/manual/ja/function.jddayofweek.php
 * @param int $julianday <p>
 * ユリウス積算日を表す整数値。
 * </p>
 * @param int $mode [optional] <table>
 * 暦の曜日モード
 * <tr valign="top">
 * <td>モード</td>
 * <td>意味</td>
 * </tr>
 * <tr valign="top">
 * <td>0 (デフォルト)</td>
 * <td>
 * 整数で曜日番号 (0=Sunday, 1=Monday, 等)を返します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>
 * 曜日(英グレゴリウス)を含む文字列を返します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>
 * 曜日の省略形(英グレゴリウス)を含む文字列を返します。
 * </td>
 * </tr>
 * </table>
 * @return mixed グレゴリウス暦の曜日を表す数値あるいは文字列を返します。
 */
function jddayofweek(int $julianday, int $mode = CAL_DOW_DAYNO) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 月の名前を返す
 * @link http://php.net/manual/ja/function.jdmonthname.php
 * @param int $julianday
 * @param int $mode
 * @return string 指定したユリウス積算日と <i>calendar</i>
 * にもとづく月名を返します。
 */
function jdmonthname(int $julianday, int $mode): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した年における復活祭の真夜中のUnix時を得る
 * @link http://php.net/manual/ja/function.easter-date.php
 * @param int $year [optional] <p>
 * 1970 から 2037 までの年。省略した場合は、ローカルタイムにおける現在の年を使います。
 * </p>
 * @return int 復活祭の日を Unix タイムスタンプで返します。
 */
function easter_date(int $year = 'date("Y")'): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した年において、3 月 21 日から復活祭までの日数を得る
 * @link http://php.net/manual/ja/function.easter-days.php
 * @param int $year [optional] <p>
 * 正の数値で表した年。省略した場合は、ローカルタイムにおける現在の年を使います。
 * </p>
 * @param int $method [optional] <p>
 * <b>CAL_EASTER_ROMAN</b> に設定すると
 * 1582 年から 1752 年までの復活祭の日付をグレゴリオ暦にもとづいて
 * 計算します。それ以外に使用可能な定数については カレンダー定数を参照ください。
 * </p>
 * @return int 指定した年 <i>year</i> において、3 月 21 日から復活祭までの日数を返します。
 */
function easter_days(int $year = 'date("Y")', int $method = CAL_EASTER_DEFAULT): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Unix タイムスタンプをユリウス歴に変換する
 * @link http://php.net/manual/ja/function.unixtojd.php
 * @param int $timestamp [optional] <p>
 * 変換したい Unix タイムスタンプ。
 * </p>
 * @return int ユリウス積算日を表す整数値を返します。
 */
function unixtojd(int $timestamp = 'time()'): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ユリウス歴を Unix タイムスタンプに変換する
 * @link http://php.net/manual/ja/function.jdtounix.php
 * @param int $jday <p>
 * 2440588 から 2465342 までのユリウス積算日。
 * </p>
 * @return int 指定したユリウス積算日の開始時の Unix タイムスタンプを返します。
 */
function jdtounix(int $jday): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * サポートされるカレンダーからユリウス積算日に変換する
 * @link http://php.net/manual/ja/function.cal-to-jd.php
 * @param int $calendar <p>
 * 変換元のカレンダー。
 * <b>CAL_GREGORIAN</b>、
 * <b>CAL_JULIAN</b>、
 * <b>CAL_JEWISH</b> あるいは
 * <b>CAL_FRENCH</b> のいずれか。
 * </p>
 * @param int $month <p>
 * 月を表す数値。有効な範囲は
 * <i>calendar</i> に依存します。
 * </p>
 * @param int $day <p>
 * 日を表す数値。有効な範囲は
 * <i>calendar</i> に依存します。
 * </p>
 * @param int $year <p>
 * 年を表す数値。有効な範囲は
 * <i>calendar</i> に依存します。
 * </p>
 * @return int ユリウス積算日を返します。
 */
function cal_to_jd(int $calendar, int $month, int $day, int $year): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ユリウス積算日からサポートされるカレンダーに変換する
 * @link http://php.net/manual/ja/function.cal-from-jd.php
 * @param int $jd <p>
 * ユリウス日を表す整数値。
 * </p>
 * @param int $calendar <p>
 * 変換するカレンダー。
 * </p>
 * @return array カレンダーの情報を含む配列を返します。この配列には、
 * 年、月、日、週、曜日名、月名、"月/日/年" 形式の文字列
 * などが含まれます。
 */
function cal_from_jd(int $jd, int $calendar): array {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 指定した年とカレンダーについて、月の日数を返す
 * @link http://php.net/manual/ja/function.cal-days-in-month.php
 * @param int $calendar <p>
 * 計算に使用するカレンダー。
 * </p>
 * @param int $month <p>
 * 選択したカレンダーにおける月。
 * </p>
 * @param int $year <p>
 * 選択したカレンダーにおける年。
 * </p>
 * @return int 指定したカレンダーの、その月の日数を返します。
 */
function cal_days_in_month(int $calendar, int $month, int $year): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 特定のカレンダーに関する情報を返す
 * @link http://php.net/manual/ja/function.cal-info.php
 * @param int $calendar [optional] <p>
 * 情報を返したいカレンダー。指定しなかった場合は、
 * すべてのカレンダーに関する情報を返します。
 * </p>
 * @return array
 */
function cal_info(int $calendar = -1): array {}

define ('CAL_GREGORIAN', 0);
define ('CAL_JULIAN', 1);
define ('CAL_JEWISH', 2);
define ('CAL_FRENCH', 3);
define ('CAL_NUM_CALS', 4);
define ('CAL_DOW_DAYNO', 0);
define ('CAL_DOW_SHORT', 2);
define ('CAL_DOW_LONG', 1);
define ('CAL_MONTH_GREGORIAN_SHORT', 0);
define ('CAL_MONTH_GREGORIAN_LONG', 1);
define ('CAL_MONTH_JULIAN_SHORT', 2);
define ('CAL_MONTH_JULIAN_LONG', 3);
define ('CAL_MONTH_JEWISH', 4);
define ('CAL_MONTH_FRENCH', 5);
define ('CAL_EASTER_DEFAULT', 0);
define ('CAL_EASTER_ROMAN', 1);
define ('CAL_EASTER_ALWAYS_GREGORIAN', 2);
define ('CAL_EASTER_ALWAYS_JULIAN', 3);
define ('CAL_JEWISH_ADD_ALAFIM_GERESH', 2);
define ('CAL_JEWISH_ADD_ALAFIM', 4);
define ('CAL_JEWISH_ADD_GERESHAYIM', 8);

// End of calendar v.7.1.5
?>
