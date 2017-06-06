<?php

// Start of intl v.1.1.0

class Collator  {
	const DEFAULT_VALUE = -1;
	const PRIMARY = 0;
	const SECONDARY = 1;
	const TERTIARY = 2;
	const DEFAULT_STRENGTH = 2;
	const QUATERNARY = 3;
	const IDENTICAL = 15;
	const OFF = 16;
	const ON = 17;
	const SHIFTED = 20;
	const NON_IGNORABLE = 21;
	const LOWER_FIRST = 24;
	const UPPER_FIRST = 25;

	/**
	 * <p>
	 * 文字列の後に続くさまざまなアクセントによる並べ替えを行います。
	 * この属性は、フランス語などの一部のロケールでは自動的に
	 * On となります。
	 * 通常は、この属性を明示的に設定する必要はありません。
	 * これを On
	 * にすると文字列の比較の効率が落ちますが、
	 * ソートキーの長さは影響を受けません。
	 * 使用できる値は次のとおりです。
	 * <b>Collator::ON</b>
	 * <b>Collator::OFF</b)<デフォルト)
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * <p>
	 * FRENCH_COLLATION のルール
	 * <p>
	 * F=OFF cote &lt; coté &lt; côte &lt; côté
	 * F=ON cote &lt; côte &lt; coté &lt; côté
	 * </p>
	 * </p>
	 * @link http://php.net/manual/ja/intl.collator-constants.php
	 */
	const FRENCH_COLLATION = 0;

	/**
	 * <p>
	 * Alternate 属性は、UCA における、いわゆる "可変文字 (variable characters)"、
	 * つまり空白や句読点、記号の処理方法を制御するものです。
	 * Alternate を NonIgnorable
	 * (N) に設定すると、これらの文字の違いを通常の文字の違いと同じように扱います。
	 * Alternate を Shifted
	 * (S) に設定すると、これらの文字の違いの重要度を低くします。
	 * Shifted は、Strength
	 * を Quaternary (第四段階) に指定して使用することが多くなります。
	 * この場合、文字列の比較において空白や句読点そして記号の違いを考慮するのは
	 * それ以外の要素 (文字、アクセント、大文字小文字) がすべて一致する場合のみとなります。
	 * Alternate を Shifted 以外にした場合は、
	 * Strength が 3 のときと 4 のときの違いがなくなります。
	 * 詳細な情報やサンプルは、
	 * UCA の
	 * Variable_Weighting を参照ください。
	 * Alternate の値を単なる
	 * On や Off
	 * にしていない理由は、将来的にさらに別の値が追加される可能性があるからです。
	 * UCA のオプション Blanked を表すには、Strength を 3
	 * そして Alternate を Shifted に設定します。
	 * 大半のロケールでは、デフォルトは NonIgnorable です。
	 * Shifted を選択すると、記号類以外が等しい文字列がたくさんあるときに処理速度が低下します。
	 * 強度レベルを上げない限り、ソートキーの長さには影響を与えません。
	 * </p>
	 * <p>
	 * 使用できる値は次のとおりです。
	 * <b>Collator::NON_IGNORABLE</b)<デフォルト)
	 * <b>Collator::SHIFTED</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * <p>
	 * ALTERNATE_HANDLING のルール
	 * <p>
	 * S=3, A=N di Silva &lt; Di Silva &lt; diSilva &lt; U.S.A. &lt; USA
	 * S=3, A=S di Silva = diSilva &lt; Di Silva &lt; U.S.A. = USA
	 * S=4, A=S di Silva &lt; diSilva &lt; Di Silva &lt; U.S.A. &lt; USA
	 * </p>
	 * </p>
	 * @link http://php.net/manual/ja/intl.collator-constants.php
	 */
	const ALTERNATE_HANDLING = 1;

	/**
	 * <p>
	 * Case_First 属性は、
	 * 文字列のその他の部分に違いがないときに
	 * 大文字と小文字のどちらが前にくるかを指定するものです。
	 * 使用できる値は、
	 * Uppercase_First
	 * (U) と Lowercase_First
	 * (L)、そして標準の Default
	 * と Off です。
	 * Off と Lowercase_First は、結果に関していえばほとんど違いはありません。
	 * そのため、普通は Lowercase_First を使うことはありません。
	 * Off あるいは Uppercase_First を使用することになります
	 * (X と L の違いを知りたい人は、Collation
	 * Customization を調べてください)。
	 * L あるいは U のいずれを指定しても、文字列比較の処理速度には影響を与えません。
	 * しかし、ソートキーの長さには影響を与えます。
	 * </p>
	 * <p>
	 * 使用できる値は次のとおりです。
	 * <b>Collator::OFF</b)<デフォルト)
	 * <b>Collator::LOWER_FIRST</b>
	 * <b>Collator::UPPER_FIRST</b>
	 * <b>Collator:DEFAULT</b>
	 * </p>
	 * <p>
	 * CASE_FIRST のルール
	 * <p>
	 * C=X or C=L "china" &lt; "China" &lt; "denmark" &lt; "Denmark"
	 * C=U "China" &lt; "china" &lt; "Denmark" &lt; "denmark"
	 * </p>
	 * </p>
	 * @link http://php.net/manual/ja/intl.collator-constants.php
	 */
	const CASE_FIRST = 2;

	/**
	 * <p>
	 * Case_Level 属性は、アクセントは無視するものの大文字小文字は区別したい場合に使用します。
	 * そんな場合は、Strength を Primary
	 * にして Case_Level を On とします。
	 * 大半のロケールでは、この設定はデフォルトで Off となっています。
	 * この属性を On
	 * にすると、文字列の比較のパフォーマンスやソートキーに多少影響を及ぼします。
	 * </p>
	 * <p>
	 * 使用できる値は次のとおりです。
	 * <b>Collator::OFF</b)<デフォルト)
	 * <b>Collator::ON</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * <p>
	 * CASE_LEVEL のルール
	 * <p>
	 * S=1, E=X role = Role = rôle
	 * S=1, E=O role = rôle &lt; Role
	 * </p>
	 * </p>
	 * @link http://php.net/manual/ja/intl.collator-constants.php
	 */
	const CASE_LEVEL = 3;

	/**
	 * <p>
	 * Normalization 設定は、比較時にテキストを正規化するか否かを指定します。
	 * この設定を off (多くのロケールにおけるデフォルト設定です) にしても、
	 * 一般的な使用法ではほぼ正確に利用できます (詳細は UTN #5 を参照ください)。
	 * 問題となるのは、アクセント記号が正規の位置以外に登場する場合などです。
	 * この設定を On にすると、
	 * どんなテキストが与えられたとしても可能な限り結果を保証するようにします。
	 * この属性を On にすると、
	 * 文字列比較のパフォーマンスに中程度の影響を及ぼします。
	 * 影響の程度は、正規化を要する並びの登場頻度に依存します。
	 * ソートキーの長さには、目立った影響は及ぼしません。
	 * 入力テキストが NFD あるいは NFKD 形式で正規化されている場合は、
	 * このオプションを有効にする必要はありません。
	 * </p>
	 * <p>
	 * 使用できる値は次のとおりです。
	 * <b>Collator::OFF</b)<デフォルト)
	 * <b>Collator::ON</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * @link http://php.net/manual/ja/intl.collator-constants.php
	 */
	const NORMALIZATION_MODE = 4;

	/**
	 * <p>
	 * ICU Collation Service は、多くの比較レベルをサポートしています
	 * ("レベル" という名前ですが、"強度" と呼ばれることもあります)。
	 * これらのカテゴリを用いることで、ICU は、
	 * 各地域の規約にあわせた適切な文字列の並べ替えを正確に行えるようになります。
	 * また、各段階を選択して採用することで、
	 * テキスト内の文字列検索をさまざまな条件で行うことも可能になります。
	 * 詳細な情報は <b>collator_set_strength</b> を参照ください。
	 * </p>
	 * <p>
	 * 使用できる値は次のとおりです。
	 * <b>Collator::PRIMARY</b>
	 * <b>Collator::SECONDARY</b>
	 * <b>Collator::TERTIARY</b)<デフォルト)
	 * <b>Collator::QUATERNARY</b>
	 * <b>Collator::IDENTICAL</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * @link http://php.net/manual/ja/intl.collator-constants.php
	 */
	const STRENGTH = 5;

	/**
	 * <p>
	 * JIS x 4061 との互換性を維持するには、さらなるレベルを追加して
	 * ひらがなとカタカナを区別する必要があります。
	 * 標準規格との互換性を要する場合は、この属性を
	 * On にして強度を Quaternary にしなければなりません。
	 * これは、ソートキーの長さにも文字列比較のパフォーマンスにも影響を及ぼします。
	 * </p>
	 * <p>
	 * 使用できる値は次のとおりです。
	 * <b>Collator::OFF</b)<デフォルト)
	 * <b>Collator::ON</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * @link http://php.net/manual/ja/intl.collator-constants.php
	 */
	const HIRAGANA_QUATERNARY_MODE = 6;

	/**
	 * <p>
	 * on にすると、数値形式の文字列の各桁を数値として使用した照合キーを生成します。
	 * これにより、'100' のほうが '2' より「後」に並ぶようになります。
	 * </p>
	 * <p>
	 * 使用できる値は次のとおりです。
	 * <b>Collator::OFF</b)<デフォルト)
	 * <b>Collator::ON</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * @link http://php.net/manual/ja/intl.collator-constants.php
	 */
	const NUMERIC_COLLATION = 7;
	const SORT_REGULAR = 0;
	const SORT_STRING = 1;
	const SORT_NUMERIC = 2;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * collator を作成する
	 * @link http://php.net/manual/ja/collator.construct.php
	 * @param string $locale <p>
	 * 照合規則を使用するロケール。特殊な場合として、
	 * null を渡した場合はデフォルトのロケールの照合規則を使用します。
	 * "root" を渡した場合は、UCA の規則を使用します。
	 * </p>
	 * <p>
	 * Locale 属性は、各国・各地域のユーザーの期待通りに並べ替えやマッチングを行うために
	 * もっとも重要な属性です。デフォルトの
	 * UCA
	 * の並び順で正しく ("正しく" とは、その言語を使用する人の期待通りにということです)
	 * 処理できるのは、オランダ語やポルトガル語などの一部の言語だけです。
	 * それ以外の場合は、UCA にロケールを指定して
	 * その言語に応じた適切な照合を行えるようにする必要があります。
	 * 従って、各ロケールにあわせて正しく設定した collator を使用する必要があります。
	 * ロケールを選択すると、その他の属性の値も適切な物に自動設定されます。
	 * 従って、その他の属性については明示的に設定する必要はほとんどありません。
	 * 選択したロケールによっては、文字列比較のパフォーマンスやソートキーの長さに違いが出ることがあります。
	 * </p>
	 */
	public function __construct(string $locale) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * collator を作成する
	 * @link http://php.net/manual/ja/collator.create.php
	 * @param string $locale <p>
	 * 照合規則を使用するロケール。特殊な場合として、
	 * null を渡した場合はデフォルトのロケールの照合規則を使用します。
	 * また、空文字列 ("") や "root" を渡した場合は UCA の規則を使用します。
	 * </p>
	 * @return Collator 新しい <b>Collator</b> オブジェクトのインスタンス、
	 * あるいはエラー時に <b>NULL</b> を返します。
	 */
	public static function create(string $locale): Collator {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * ふたつの Unicode 文字列を比較する
	 * @link http://php.net/manual/ja/collator.compare.php
	 * @param string $str1 <p>
	 * 最初の文字列。
	 * </p>
	 * @param string $str2 <p>
	 * 2 番目の文字列。
	 * </p>
	 * @return int 比較結果を返します。</p>
	 * <p>
	 * <p>
	 * <i>str1</i> が <i>str2</i> より
	 * 大きい ときは 1
	 * </p>
	 * <p>
	 * <i>str1</i> と <i>str2</i> が
	 * 等しい ときは 0
	 * </p>
	 * <p>
	 * <i>str1</i> が <i>str2</i> より
	 * 小さい ときは -1
	 * </p>
	 * エラー時には
	 * boolean
	 * <b>FALSE</b>
	 * を返します。
	 */
	public function compare(string $str1, string $str2): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 指定した collator で配列を並べ替える
	 * @link http://php.net/manual/ja/collator.sort.php
	 * @param array $arr <p>
	 * 並べ替えたい文字列の配列。
	 * </p>
	 * @param int $sort_flag [optional] <p>
	 * オプションの並べ替え方式。以下のいずれか。
	 * </p>
	 * <p>
	 * <p>
	 * <b>Collator::SORT_REGULAR</b>
	 * - 通常の比較 (型を変更しない)
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function sort(array &$arr, int $sort_flag = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 指定した collator とキーで配列を並べ替える
	 * @link http://php.net/manual/ja/collator.sortwithsortkeys.php
	 * @param array $arr <p>並べ替えたい文字列の配列。</p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function sortWithSortKeys(array &$arr): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * インデックスの情報を保持しつつ配列を並べ替える
	 * @link http://php.net/manual/ja/collator.asort.php
	 * @param array $arr <p>並べ替えたい文字列の配列。</p>
	 * @param int $sort_flag [optional] <p>
	 * オプションの並べ替え方式。以下のいずれか。
	 * <p>
	 * <b>Collator::SORT_REGULAR</b>
	 * - 通常の比較 (型を変更しない)
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function asort(array &$arr, int $sort_flag = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 照合用の属性の値を取得する
	 * @link http://php.net/manual/ja/collator.getattribute.php
	 * @param int $attr <p>
	 * 値を取得したい属性。
	 * </p>
	 * @return int 属性の値、あるいはエラー時に boolean <b>FALSE</b> を返します。
	 */
	public function getAttribute(int $attr): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 照合用の属性を設定する
	 * @link http://php.net/manual/ja/collator.setattribute.php
	 * @param int $attr <p>属性。</p>
	 * @param int $val <p>
	 * 属性の値。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setAttribute(int $attr, int $val): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 現在の照合強度を取得する
	 * @link http://php.net/manual/ja/collator.getstrength.php
	 * @return int 現在の照合強度、あるいはエラー時に boolean <b>FALSE</b> を返します。
	 */
	public function getStrength(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 照合強度を設定する
	 * @link http://php.net/manual/ja/collator.setstrength.php
	 * @param int $strength <p>設定する強度。</p>
	 * <p>
	 * 以下のいずれかです。
	 * <p>
	 * <b>Collator::PRIMARY</b>
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setStrength(int $strength): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * collator のロケール名を取得する
	 * @link http://php.net/manual/ja/collator.getlocale.php
	 * @param int $type <p>
	 * 妥当なロケールか実際のロケール (それぞれ
	 * <b>Locale::VALID_LOCALE</b> および
	 * <b>Locale::ACTUAL_LOCALE</b>)。
	 * </p>
	 * @return string 照合データの実際のロケール名を返します。ルールベースの collator
	 * のインスタンスの場合やエラーが発生した場合は
	 * boolean <b>FALSE</b> を返します。
	 */
	public function getLocale(int $type): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * collator の直近のエラーコードを取得する
	 * @link http://php.net/manual/ja/collator.geterrorcode.php
	 * @return int 直近の Collator API 関数コールが返したエラーコードを返します。
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * collator の直近のエラーコードのテキストを取得する
	 * @link http://php.net/manual/ja/collator.geterrormessage.php
	 * @return string 直近の Collator API 関数コールで発生したエラーの説明を返します。
	 */
	public function getErrorMessage(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.11, PHP 7, PECL intl &gt;= 1.0.3)<br/>
	 * 文字列のソート用のキーを取得する
	 * @link http://php.net/manual/ja/collator.getsortkey.php
	 * @param string $str <p>
	 * キーの生成元となる文字列。
	 * </p>
	 * @return string 文字列の照合キーを返します。照合キーを、文字列のかわりに直接比較することができます。
	 */
	public function getSortKey(string $str): string {}

}

class NumberFormatter  {

	/**
	 * パターンで定義する十進形式
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PATTERN_DECIMAL = 0;

	/**
	 * 十進形式
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const DECIMAL = 1;

	/**
	 * 通貨形式
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const CURRENCY = 2;

	/**
	 * パーセント形式
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PERCENT = 3;

	/**
	 * 科学形式
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const SCIENTIFIC = 4;

	/**
	 * ルールベースの省略しない形式
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const SPELLOUT = 5;

	/**
	 * ルールベースの序数形式
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const ORDINAL = 6;

	/**
	 * ルールベースの連続形式
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const DURATION = 7;

	/**
	 * パターンで定義するルールベースの形式
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PATTERN_RULEBASED = 9;

	/**
	 * PATTERN_DECIMAL のエイリアス
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const IGNORE = 0;

	/**
	 * そのロケールのデフォルトの形式
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const DEFAULT_STYLE = 1;

	/**
	 * 正の無限大に向けて丸めるモード
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const ROUND_CEILING = 0;

	/**
	 * 負の無限大に向けて丸めるモード
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const ROUND_FLOOR = 1;

	/**
	 * ゼロに向けて丸めるモード
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const ROUND_DOWN = 2;

	/**
	 * ゼロから離れる方向に丸めるモード
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const ROUND_UP = 3;

	/**
	 * "一番近いところ" に向けて丸めるモード。
	 * 両方から等距離にある場合は偶数になるように丸めます。
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const ROUND_HALFEVEN = 4;

	/**
	 * "一番近いところ" に向けて丸めるモード。
	 * 両方から等距離にある場合はゼロに向けて丸めます。
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const ROUND_HALFDOWN = 5;

	/**
	 * "一番近いところ" に向けて丸めるモード。
	 * 両方から等距離にある場合はゼロから離れる方向に丸めます。
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const ROUND_HALFUP = 6;

	/**
	 * プレフィックスの前にパディング文字を入れる
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PAD_BEFORE_PREFIX = 0;

	/**
	 * プレフィックスの後にパディング文字を入れる
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PAD_AFTER_PREFIX = 1;

	/**
	 * サフィックスの前にパディング文字を入れる
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PAD_BEFORE_SUFFIX = 2;

	/**
	 * サフィックスの後にパディング文字を入れる
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PAD_AFTER_SUFFIX = 3;

	/**
	 * 整数値のみをパースする
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PARSE_INT_ONLY = 0;

	/**
	 * グループ区切り文字を使用する
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const GROUPING_USED = 1;

	/**
	 * 常に小数点を表示する
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const DECIMAL_ALWAYS_SHOWN = 2;

	/**
	 * 整数部の最大桁数
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const MAX_INTEGER_DIGITS = 3;

	/**
	 * 整数部の最小桁数
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const MIN_INTEGER_DIGITS = 4;

	/**
	 * 整数部の桁数
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const INTEGER_DIGITS = 5;

	/**
	 * 小数部の最大桁数
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const MAX_FRACTION_DIGITS = 6;

	/**
	 * 小数部の最小桁数
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const MIN_FRACTION_DIGITS = 7;

	/**
	 * 小数部の桁数
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const FRACTION_DIGITS = 8;

	/**
	 * 乗数
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const MULTIPLIER = 9;

	/**
	 * グループ化のサイズ
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const GROUPING_SIZE = 10;

	/**
	 * 丸めモード
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const ROUNDING_MODE = 11;

	/**
	 * 切り上げ
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const ROUNDING_INCREMENT = 12;

	/**
	 * format() の出力のパディング幅
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const FORMAT_WIDTH = 13;

	/**
	 * パディングを行う位置。
	 * 使用できる引数の値についてはパディング位置に関する定数を参照ください。
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PADDING_POSITION = 14;

	/**
	 * 第二段階のグループ化のサイズ
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const SECONDARY_GROUPING_SIZE = 15;

	/**
	 * 有効数字を使用する
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const SIGNIFICANT_DIGITS_USED = 16;

	/**
	 * 有効数字の最小桁数
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const MIN_SIGNIFICANT_DIGITS = 17;

	/**
	 * 有効数字の最大桁数
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const MAX_SIGNIFICANT_DIGITS = 18;

	/**
	 * ルールベースのフォーマットで使用する Lenient パースモード
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const LENIENT_PARSE = 19;

	/**
	 * 正の数のプレフィックス
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const POSITIVE_PREFIX = 0;

	/**
	 * 正の数のサフィックス
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const POSITIVE_SUFFIX = 1;

	/**
	 * 負の数のプレフィックス
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const NEGATIVE_PREFIX = 2;

	/**
	 * 負の数のサフィックス
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const NEGATIVE_SUFFIX = 3;

	/**
	 * 余白を埋める際に使用する文字
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PADDING_CHARACTER = 4;

	/**
	 * ISO 通貨コード
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const CURRENCY_CODE = 5;

	/**
	 * デフォルトのルールセット。
	 * ルールベースのフォーマッタでのみ有効です。
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const DEFAULT_RULESET = 6;

	/**
	 * パブリックルールセット。
	 * これは、ルールベースのフォーマッタでのみ有効です。
	 * これは読み込み専用の属性です。
	 * パブリックルールセットは文字列として返され、
	 * 個々のルールセットは ';' (セミコロン)
	 * で区切られています。
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PUBLIC_RULESETS = 7;

	/**
	 * 小数点
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const DECIMAL_SEPARATOR_SYMBOL = 0;

	/**
	 * グループ区切り文字
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const GROUPING_SEPARATOR_SYMBOL = 1;

	/**
	 * パターン区切り文字
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PATTERN_SEPARATOR_SYMBOL = 2;

	/**
	 * パーセント記号
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PERCENT_SYMBOL = 3;

	/**
	 * ゼロ
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const ZERO_DIGIT_SYMBOL = 4;

	/**
	 * パターン内で数字を表す文字
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const DIGIT_SYMBOL = 5;

	/**
	 * マイナス記号
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const MINUS_SIGN_SYMBOL = 6;

	/**
	 * プラス記号
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PLUS_SIGN_SYMBOL = 7;

	/**
	 * 通貨記号
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const CURRENCY_SYMBOL = 8;

	/**
	 * 国際通貨記号
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const INTL_CURRENCY_SYMBOL = 9;

	/**
	 * 金額の区切り文字
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const MONETARY_SEPARATOR_SYMBOL = 10;

	/**
	 * 指数記号
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const EXPONENTIAL_SYMBOL = 11;

	/**
	 * パーミル記号
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PERMILL_SYMBOL = 12;

	/**
	 * パディング文字のエスケープ記号
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const PAD_ESCAPE_SYMBOL = 13;

	/**
	 * 無限大記号
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const INFINITY_SYMBOL = 14;

	/**
	 * 非数値記号
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const NAN_SYMBOL = 15;

	/**
	 * 有効数字記号
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const SIGNIFICANT_DIGIT_SYMBOL = 16;

	/**
	 * 金額のグループ区切り文字
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const MONETARY_GROUPING_SEPARATOR_SYMBOL = 17;

	/**
	 * 変数の型に由来する型
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const TYPE_DEFAULT = 0;

	/**
	 * 32 ビット整数値としてフォーマット/パースする
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const TYPE_INT32 = 1;

	/**
	 * 64 ビット整数値としてフォーマット/パースする
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const TYPE_INT64 = 2;

	/**
	 * 浮動小数点数値としてフォーマット/パースする
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const TYPE_DOUBLE = 3;

	/**
	 * 通貨値としてフォーマット/パースする
	 * @link http://php.net/manual/ja/intl.numberformatter-constants.php
	 */
	const TYPE_CURRENCY = 4;


	/**
	 * @param $locale
	 * @param $style
	 * @param $pattern [optional]
	 */
	public function __construct($locale, $style, $pattern) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 数値フォーマッタを作成する
	 * @link http://php.net/manual/ja/numberformatter.create.php
	 * @param string $locale <p>
	 * 数値フォーマットするロケール (ロケール名。たとえば en_CA)。
	 * </p>
	 * @param int $style <p>
	 * フォーマットの形式。
	 * フォーマット形式 定数のいずれか。
	 * <b>NumberFormatter::PATTERN_DECIMAL</b>
	 * あるいは <b>NumberFormatter::PATTERN_RULEBASED</b>
	 * を指定した場合は指定したパターンの数値フォーマットをオープンします。
	 * これは、それぞれ
	 * ICU DecimalFormat
	 * ドキュメント あるいは
	 * ICU RuleBasedNumberFormat
	 * ドキュメント で述べられている構文を満たす必要があります。
	 * </p>
	 * @param string $pattern [optional] <p>
	 * 選択した形式がパターンを要求するものである場合のパターン文字列。
	 * </p>
	 * @return NumberFormatter <b>NumberFormatter</b> オブジェクト、
	 * あるいはエラー時に <b>FALSE</b> を返します。
	 */
	public static function create(string $locale, int $style, string $pattern = null): NumberFormatter {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 数値をフォーマットする
	 * @link http://php.net/manual/ja/numberformatter.format.php
	 * @param number $value <p>
	 * フォーマットする値。integer あるいは float
	 * で指定します。その他の型は数値に変換されます。
	 * </p>
	 * @param int $type [optional] <p>
	 * 使用する
	 * フォーマット形式。
	 * </p>
	 * @return string フォーマットした値を文字列で返します。
	 * エラー時には <b>FALSE</b> を返します。
	 */
	public function format($value, int $type = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 数値をパースする
	 * @link http://php.net/manual/ja/numberformatter.parse.php
	 * @param string $value
	 * @param int $type [optional] <p>
	 * 使用する
	 * フォーマット形式。デフォルトでは
	 * <b>NumberFormatter::TYPE_DOUBLE</b> を使用します。
	 * </p>
	 * @param int $position [optional] <p>
	 * 文字列中でパースを開始する位置のオフセット。
	 * 結果を返す際に、この値はパース終了時のオフセットを保持します。
	 * </p>
	 * @return mixed パースした数値、あるいはエラー時に <b>FALSE</b> を返します。
	 */
	public function parse(string $value, int $type = null, int &$position = null) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 通貨の値をフォーマットする
	 * @link http://php.net/manual/ja/numberformatter.formatcurrency.php
	 * @param float $value <p>
	 * 通貨の値。
	 * </p>
	 * @param string $currency <p>
	 * 使用する通貨を表す、3 文字の ISO 4217 通貨コード。
	 * </p>
	 * @return string 通貨の値をフォーマットした文字列を返します。
	 */
	public function formatCurrency(float $value, string $currency): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 通貨をパースする
	 * @link http://php.net/manual/ja/numberformatter.parsecurrency.php
	 * @param string $value
	 * @param string $currency <p>
	 * 通貨名 (3 文字の ISO 4217 通貨コード) を受け取るパラメータ。
	 * </p>
	 * @param int $position [optional] <p>
	 * 文字列中でパースを開始する位置のオフセット。
	 * 結果を返す際に、この値はパース終了時のオフセットを保持します。
	 * </p>
	 * @return float パースした数値、あるいはエラー時に <b>FALSE</b> を返します。
	 */
	public function parseCurrency(string $value, string &$currency, int &$position = null): float {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 属性を設定する
	 * @link http://php.net/manual/ja/numberformatter.setattribute.php
	 * @param int $attr <p>
	 * 属性指定子。
	 * 数値属性 定数のいずれか。
	 * </p>
	 * @param int $value <p>
	 * 属性の値。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setAttribute(int $attr, int $value): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 属性を取得する
	 * @link http://php.net/manual/ja/numberformatter.getattribute.php
	 * @param int $attr <p>
	 * 属性指定子。
	 * 数値属性 定数のいずれか。
	 * </p>
	 * @return int 成功した場合に属性の値、エラー時に <b>FALSE</b> を返します。
	 */
	public function getAttribute(int $attr): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * テキスト属性を設定する
	 * @link http://php.net/manual/ja/numberformatter.settextattribute.php
	 * @param int $attr <p>
	 * 属性指定子。
	 * テキスト属性
	 * 定数のいずれか。
	 * </p>
	 * @param string $value <p>
	 * 属性の値を表すテキスト。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setTextAttribute(int $attr, string $value): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * テキストの属性を取得する
	 * @link http://php.net/manual/ja/numberformatter.gettextattribute.php
	 * @param int $attr <p>
	 * 属性指定子。
	 * テキスト属性 定数のいずれか。
	 * </p>
	 * @return string 成功した場合に属性の値、あるいはエラー時に <b>FALSE</b> を返します。
	 */
	public function getTextAttribute(int $attr): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 記号の値を設定する
	 * @link http://php.net/manual/ja/numberformatter.setsymbol.php
	 * @param int $attr <p>
	 * 記号指定子。
	 * フォーマット記号 定数のいずれか。
	 * </p>
	 * @param string $value <p>
	 * その記号に対応するテキスト。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setSymbol(int $attr, string $value): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 記号を取得する
	 * @link http://php.net/manual/ja/numberformatter.getsymbol.php
	 * @param int $attr <p>
	 * 記号指定子。
	 * フォーマット記号 定数のいずれか。
	 * </p>
	 * @return string 記号文字列、あるいはエラー時に <b>FALSE</b> を返します。
	 */
	public function getSymbol(int $attr): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * フォーマッタのパターンを設定する
	 * @link http://php.net/manual/ja/numberformatter.setpattern.php
	 * @param string $pattern <p>
	 * ICU DecimalFormat
	 * ドキュメント で述べられている構文によるパターン。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setPattern(string $pattern): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * フォーマッタのパターンを取得する
	 * @link http://php.net/manual/ja/numberformatter.getpattern.php
	 * @return string このフォーマッタが使用するパターン文字列、
	 * あるいはエラー発生時に <b>FALSE</b> を返します。
	 */
	public function getPattern(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * フォーマッタのロケールを取得する
	 * @link http://php.net/manual/ja/numberformatter.getlocale.php
	 * @param int $type [optional] <p>
	 * 妥当なロケールあるいは正確なロケールのいずれか (
	 * <b>Locale::VALID_LOCALE</b>,
	 * <b>Locale::ACTUAL_LOCALE</b>,
	 * respectively) を選択します。デフォルトは実際のロケールです。
	 * </p>
	 * @return string フォーマッタの作成時に使用したロケールを返します。
	 */
	public function getLocale(int $type = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * フォーマッタの直近のエラーコードを取得する
	 * @link http://php.net/manual/ja/numberformatter.geterrorcode.php
	 * @return int 直近の関数コールのエラーコードを返します。
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * フォーマッタの直近のエラーメッセージを取得する
	 * @link http://php.net/manual/ja/numberformatter.geterrormessage.php
	 * @return string 直近の関数コールのエラーメッセージを返します。
	 */
	public function getErrorMessage(): string {}

}

class Normalizer  {

	/**
	 * 分解/合成を行わない
	 * @link http://php.net/manual/ja/intl.normalizer-constants.php
	 */
	const NONE = 1;

	/**
	 * Normalization Form D (NFD) - Canonical Decomposition
	 * @link http://php.net/manual/ja/intl.normalizer-constants.php
	 */
	const FORM_D = 2;
	const NFD = 2;

	/**
	 * Normalization Form KD (NFKD) - Compatibility Decomposition
	 * @link http://php.net/manual/ja/intl.normalizer-constants.php
	 */
	const FORM_KD = 3;
	const NFKD = 3;

	/**
	 * Normalization Form C (NFC) - Canonical Decomposition followed by
	 * Canonical Composition
	 * @link http://php.net/manual/ja/intl.normalizer-constants.php
	 */
	const FORM_C = 4;
	const NFC = 4;

	/**
	 * Normalization Form KC (NFKC) - Compatibility Decomposition, followed by
	 * Canonical Composition
	 * @link http://php.net/manual/ja/intl.normalizer-constants.php
	 */
	const FORM_KC = 5;
	const NFKC = 5;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 渡された入力を正規化し、正規化後の文字列を返す
	 * @link http://php.net/manual/ja/normalizer.normalize.php
	 * @param string $input <p>正規化する入力文字列。</p>
	 * @param int $form [optional] <p>正規化方式のいずれか。</p>
	 * @return string 正規化後の文字列、あるいはエラーが発生した場合に <b>FALSE</b> を返します。
	 */
	public static function normalize(string $input, int $form = Normalizer::FORM_C): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 渡された文字列が、指定した正規化を適用済みかどうかを調べる
	 * @link http://php.net/manual/ja/normalizer.isnormalized.php
	 * @param string $input <p>正規化する入力文字列。</p>
	 * @param int $form [optional] <p>
	 * 正規化方式のいずれか。
	 * </p>
	 * @return bool 正規化されている場合に <b>TRUE</b>、正規化されていない場合やエラーが発生した場合に <b>FALSE</b> を返します。
	 */
	public static function isNormalized(string $input, int $form = Normalizer::FORM_C): bool {}

}

class Locale  {

	/**
	 * これは、データが実際にやってくる元のロケールです。
	 * @link http://php.net/manual/ja/intl.locale-constants.php
	 */
	const ACTUAL_LOCALE = 0;

	/**
	 * これは、ICU がサポートする最も明確なロケールです。
	 * @link http://php.net/manual/ja/intl.locale-constants.php
	 */
	const VALID_LOCALE = 1;

	/**
	 * NumberFormatter のようなロケールの影響を受けるさまざまなクラスのメソッドの
	 * locale パラメータとして使用します。
	 * この定数は、デフォルトのロケールをメソッドで使用するようにします。
	 * @link http://php.net/manual/ja/intl.locale-constants.php
	 */
	const DEFAULT_LOCALE = null;

	/**
	 * 言語サブタグ
	 * @link http://php.net/manual/ja/intl.locale-constants.php
	 */
	const LANG_TAG = "language";

	/**
	 * 拡張言語サブタグ
	 * @link http://php.net/manual/ja/intl.locale-constants.php
	 */
	const EXTLANG_TAG = "extlang";

	/**
	 * 文字サブタグ
	 * @link http://php.net/manual/ja/intl.locale-constants.php
	 */
	const SCRIPT_TAG = "script";

	/**
	 * 地域サブタグ
	 * @link http://php.net/manual/ja/intl.locale-constants.php
	 */
	const REGION_TAG = "region";

	/**
	 * 変化形サブタグ
	 * @link http://php.net/manual/ja/intl.locale-constants.php
	 */
	const VARIANT_TAG = "variant";

	/**
	 * 先祖言語 (Grandfathered Language) サブタグ
	 * @link http://php.net/manual/ja/intl.locale-constants.php
	 */
	const GRANDFATHERED_LANG_TAG = "grandfathered";

	/**
	 * プライベートサブタグ
	 * @link http://php.net/manual/ja/intl.locale-constants.php
	 */
	const PRIVATE_TAG = "private";


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * INTL のグローバル 'default_locale' からデフォルトのロケールを取得する
	 * @link http://php.net/manual/ja/locale.getdefault.php
	 * @return string 現在の実行時ロケールを返します。
	 */
	public static function getDefault(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * デフォルトの実行時ロケールを設定する
	 * @link http://php.net/manual/ja/locale.setdefault.php
	 * @param string $locale <p>
	 * BCP 47 準拠の言語タグ。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public static function setDefault(string $locale): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 入力ロケールのプライマリ言語を取得する
	 * @link http://php.net/manual/ja/locale.getprimarylanguage.php
	 * @param string $locale <p>
	 * プライマリ言語コードを取り出したいロケール。
	 * </p>
	 * @return string このロケールの言語コード、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public static function getPrimaryLanguage(string $locale): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 入力ロケールの文字を取得する
	 * @link http://php.net/manual/ja/locale.getscript.php
	 * @param string $locale <p>
	 * 文字を取り出したいロケール。
	 * </p>
	 * @return string このロケールの文字サブタグ、あるいは存在しない場合に <b>NULL</b> を返します。
	 */
	public static function getScript(string $locale): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 入力ロケールの地域を取得する
	 * @link http://php.net/manual/ja/locale.getregion.php
	 * @param string $locale <p>
	 * 地域コードを取り出したいロケール。
	 * </p>
	 * @return string このロケールの地域サブタグ、あるいは存在しない場合に <b>NULL</b> を返します。
	 */
	public static function getRegion(string $locale): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 入力ロケールのキーワードを取得する
	 * @link http://php.net/manual/ja/locale.getkeywords.php
	 * @param string $locale <p>
	 * キーワードを取り出したいロケール。
	 * </p>
	 * @return array このロケールのキーワードと値のペアを連想配列で返します。
	 */
	public static function getKeywords(string $locale): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 入力ロケールの文字の表示名を、適切に地域化して返す
	 * @link http://php.net/manual/ja/locale.getdisplayscript.php
	 * @param string $locale <p>
	 * 表示文字を返したいロケール。
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * オプションのフォーマットロケール。
	 * 文字名の表示に使用します。
	 * </p>
	 * @return string $locale に対応する文字の表示名を、
	 * $in_locale にあわせた形式で返します。
	 */
	public static function getDisplayScript(string $locale, string $in_locale = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 入力ロケールの地域の表示名を、適切に地域化して返す
	 * @link http://php.net/manual/ja/locale.getdisplayregion.php
	 * @param string $locale <p>
	 * 表示地域を返したいロケール。
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * オプションのフォーマットロケール。
	 * 地域名の表示に使用します。
	 * </p>
	 * @return string $locale に対応する地域の表示名を、
	 * $in_locale にあわせた形式で返します。
	 */
	public static function getDisplayRegion(string $locale, string $in_locale = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 入力ロケールの表示名を、適切に地域化して返す
	 * @link http://php.net/manual/ja/locale.getdisplayname.php
	 * @param string $locale <p>
	 * 表示名を返したいロケール。
	 * </p>
	 * @param string $in_locale [optional] <p>オプションのフォーマットロケール。</p>
	 * @return string ロケールの表示名を、
	 * $in_locale にあわせた形式で返します。
	 */
	public static function getDisplayName(string $locale, string $in_locale = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 入力ロケールの言語の表示名を、適切に地域化して返す
	 * @link http://php.net/manual/ja/locale.getdisplaylanguage.php
	 * @param string $locale <p>
	 * 表示言語を返したいロケール。
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * オプションのフォーマットロケール。
	 * 言語名の表示に使用します。
	 * </p>
	 * @return string $locale に対応する言語の表示名を、
	 * $in_locale にあわせた形式で返します。
	 */
	public static function getDisplayLanguage(string $locale, string $in_locale = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 入力ロケールの変化形の表示名を、適切に地域化して返す
	 * @link http://php.net/manual/ja/locale.getdisplayvariant.php
	 * @param string $locale <p>
	 * 表示変化形を返したいロケール。
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * オプションのフォーマットロケール。
	 * 変化形の表示に使用します。
	 * </p>
	 * @return string $locale に対応する変化形の表示名を、
	 * $in_locale にあわせた形式で返します。
	 */
	public static function getDisplayVariant(string $locale, string $in_locale = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 正しく並べ替えて区切られたロケール ID を返す
	 * @link http://php.net/manual/ja/locale.composelocale.php
	 * @param array $subtags <p>
	 * キーと値のペアを含む配列。
	 * キーには特定のロケール ID サブタグを指定し、
	 * そのサブタグの値を関連付けます。
	 * <p>
	 * サブタグ 'variant' と 'private' には最大で 15 の値を指定できますが、
	 * 'extlang' には最大で 3 つの値しか指定できません。
	 * variant には 0 から 14 までのサフィックスをつけることができ、
	 * 配列のキーは variant0, variant1, ...,variant14 となります。
	 * 返されるロケール ID において、このサブタグは
	 * variant0、variant1、variant2、……の順に並びます。
	 * </p>
	 * <p>
	 * 'variant'、'private' および 'extlang' で複数の値を指定するには、
	 * そのキー (例 'variant') の値に配列を指定するか、数字つきの複数のキー
	 * (例 'variant0'、'variant1' など) を使用します。
	 * </p>
	 * </p>
	 * @return string 対応するロケール識別子を返します。
	 */
	public static function composeLocale(array $subtags): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * ロケール ID のサブタグ要素を連想配列で返す
	 * @link http://php.net/manual/ja/locale.parselocale.php
	 * @param string $locale <p>
	 * サブタグの配列を取り出したいロケール。
	 * 注意: サブタグ 'variant' と 'private' には最大で 15 の値を指定できますが、
	 * 'extlang' には最大で 3 つの値しか指定できません。
	 * </p>
	 * @return array 連想配列を返します。キーがロケール ID サブタグを表し、
	 * そのサブタグの値が関連付けられています。
	 * この配列の並び順はロケール ID サブタグの順となります。変化形が
	 * '-varX-varY-varZ' の場合、返される配列は
	 * variant0=&gt;varX , variant1=&gt;varY ,
	 * variant2=&gt;varZ のようになります。
	 */
	public static function parseLocale(string $locale): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 入力ロケールの変化系を取得する
	 * @link http://php.net/manual/ja/locale.getallvariants.php
	 * @param string $locale <p>
	 * 変化系を取得したいロケール。
	 * </p>
	 * @return array そのロケールのすべての variant サブタグを含む配列、あるいは存在しない場合に
	 * <b>NULL</b> を返します。
	 */
	public static function getAllVariants(string $locale): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 言語タグフィルタがロケールにマッチするかどうかを調べる
	 * @link http://php.net/manual/ja/locale.filtermatches.php
	 * @param string $langtag <p>
	 * 調べたい言語タグ。
	 * </p>
	 * @param string $locale <p>
	 * 調べる対象となる言語の範囲。
	 * </p>
	 * @param bool $canonicalize [optional] <p>
	 * true の場合は、引数を正式な形式に変換してからマッチを行います。
	 * </p>
	 * @return bool $locale が $langtag にマッチする場合に <b>TRUE</b>、
	 * それ以外の場合に <b>FALSE</b> を返します。
	 */
	public static function filterMatches(string $langtag, string $locale, bool $canonicalize = false): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * その言語にマッチする言語タグの一覧を検索する
	 * @link http://php.net/manual/ja/locale.lookup.php
	 * @param array $langtag <p>
	 * <i>locale</i> と比較したい言語タグの一覧を含む配列。
	 * 最大で 100 件まで指定できます。
	 * </p>
	 * @param string $locale <p>
	 * 調べる対象となる言語の範囲として使用するロケール。
	 * </p>
	 * @param bool $canonicalize [optional] <p>
	 * true の場合は、引数を正式な形式に変換してからマッチを行います。
	 * </p>
	 * @param string $default [optional] <p>
	 * マッチしなかったときに使用するロケール。
	 * </p>
	 * @return string 最も近い言語タグ、あるいはデフォルトの値を返します。
	 */
	public static function lookup(array $langtag, string $locale, bool $canonicalize = false, string $default = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * ロケール文字列を正規化する
	 * @link http://php.net/manual/ja/locale.canonicalize.php
	 * @param string $locale <p>
	 * </p>
	 * @return string
	 */
	public static function canonicalize(string $locale): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 最もあてはまるロケールを HTTP "Accept-Language" ヘッダにもとづいて探す
	 * @link http://php.net/manual/ja/locale.acceptfromhttp.php
	 * @param string $header <p>
	 * "Accept-Language" ヘッダを含む文字列。RFC 2616 形式。
	 * </p>
	 * @return string 対応するロケール ID を返します。
	 */
	public static function acceptFromHttp(string $header): string {}

}

class MessageFormatter  {

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 新しいメッセージフォーマッタを作成する
	 * @link http://php.net/manual/ja/messageformatter.create.php
	 * @param string $locale <p>
	 * 引数のフォーマットに用いるロケール。
	 * </p>
	 * @param string $pattern <p>
	 * 引数を埋め込むパターン文字列。
	 * パターンには、'アポストロフィに優しい' 構文を使用します。
	 * umsg_autoQuoteApostrophe
	 * を通してから解釈が行われます。
	 * </p>
	 */
	public function __construct(string $locale, string $pattern) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 新しいメッセージフォーマッタを作成する
	 * @link http://php.net/manual/ja/messageformatter.create.php
	 * @param string $locale <p>
	 * 引数のフォーマットに用いるロケール。
	 * </p>
	 * @param string $pattern <p>
	 * 引数を埋め込むパターン文字列。
	 * パターンには、'アポストロフィに優しい' 構文を使用します。
	 * umsg_autoQuoteApostrophe
	 * を通してから解釈が行われます。
	 * </p>
	 * @return MessageFormatter フォーマッタオブジェクトを返します。
	 */
	public static function create(string $locale, string $pattern): MessageFormatter {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * メッセージをフォーマットする
	 * @link http://php.net/manual/ja/messageformatter.format.php
	 * @param array $args <p>
	 * フォーマット文字列に埋め込む引数。
	 * </p>
	 * @return string フォーマットした文字列を返します。
	 * あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function format(array $args): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 手早くメッセージをフォーマットする
	 * @link http://php.net/manual/ja/messageformatter.formatmessage.php
	 * @param string $locale <p>
	 * ロケールに依存する部分をフォーマットする際に使用するロケール。
	 * </p>
	 * @param string $pattern <p>
	 * 使用するパターン文字列。
	 * パターンには、'アポストロフィに優しい' 構文を使用します。
	 * umsg_autoQuoteApostrophe
	 * を通してから解釈が行われます。
	 * </p>
	 * @param array $args <p>
	 * フォーマット文字列に埋め込む値の配列。
	 * </p>
	 * @return string フォーマットしたパターン文字列を返します。
	 * エラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public static function formatMessage(string $locale, string $pattern, array $args): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * パターンを使用して入力文字列をパースする
	 * @link http://php.net/manual/ja/messageformatter.parse.php
	 * @param string $value <p>
	 * パースする文字列。
	 * </p>
	 * @return array 取り出した項目を含む配列を返します。
	 * エラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function parse(string $value): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 手早く入力文字列をパースする
	 * @link http://php.net/manual/ja/messageformatter.parsemessage.php
	 * @param string $locale <p>
	 * ロケールに依存する部分をパースする際に使用するロケール。
	 * </p>
	 * @param string $pattern <p>
	 * <i>value</i> のパースに使うパターン。
	 * </p>
	 * @param string $source <p>
	 * パースする文字列。<i>pattern</i> を満たします。
	 * </p>
	 * @return array 取り出した項目を含む配列を返します。
	 * エラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public static function parseMessage(string $locale, string $pattern, string $source): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * フォーマッタが使用するパターンを設定する
	 * @link http://php.net/manual/ja/messageformatter.setpattern.php
	 * @param string $pattern <p>
	 * このメッセージフォーマッタで使用するパターン文字列。
	 * パターンには、'アポストロフィに優しい' 構文を使用します。
	 * umsg_autoQuoteApostrophe
	 * を通してから解釈が行われます。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setPattern(string $pattern): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * フォーマッタが使用するパターンを取得する
	 * @link http://php.net/manual/ja/messageformatter.getpattern.php
	 * @return string このメッセージフォーマッタのパターン文字列を返します。
	 */
	public function getPattern(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * フォーマッタを作成した際のロケールを取得する
	 * @link http://php.net/manual/ja/messageformatter.getlocale.php
	 * @return string ロケール名を返します。
	 */
	public function getLocale(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 直近の操作のエラーコードを取得する
	 * @link http://php.net/manual/ja/messageformatter.geterrorcode.php
	 * @return int エラーコードを返します。UErrorCode の値のいずれかです。
	 * 初期値は U_ZERO_ERROR となります。
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 直近の操作のエラーテキストを取得する
	 * @link http://php.net/manual/ja/messageformatter.geterrormessage.php
	 * @return string 直近のエラーの説明を返します。
	 */
	public function getErrorMessage(): string {}

}

class IntlDateFormatter  {

	/**
	 * 完全に指定した形式 (Tuesday, April 12, 1952 AD あるいは 3:30:42pm PST)
	 * @link http://php.net/manual/ja/intl.intldateformatter-constants.php
	 */
	const FULL = 0;

	/**
	 * 長い形式 (January 12, 1952 あるいは 3:30:32pm)
	 * @link http://php.net/manual/ja/intl.intldateformatter-constants.php
	 */
	const LONG = 1;

	/**
	 * 中間の形式 (Jan 12, 1952)
	 * @link http://php.net/manual/ja/intl.intldateformatter-constants.php
	 */
	const MEDIUM = 2;

	/**
	 * 不可欠なデータのみを扱う最も省略した形式 (12/13/52 あるいは 3:30pm)
	 * @link http://php.net/manual/ja/intl.intldateformatter-constants.php
	 */
	const SHORT = 3;

	/**
	 * この要素を含まない
	 * @link http://php.net/manual/ja/intl.intldateformatter-constants.php
	 */
	const NONE = -1;

	/**
	 * グレゴリオ暦
	 * @link http://php.net/manual/ja/intl.intldateformatter-constants.php
	 */
	const GREGORIAN = 1;

	/**
	 * 非グレゴリオ暦
	 * @link http://php.net/manual/ja/intl.intldateformatter-constants.php
	 */
	const TRADITIONAL = 0;


	/**
	 * @param $locale
	 * @param $datetype
	 * @param $timetype
	 * @param $timezone [optional]
	 * @param $calendar [optional]
	 * @param $pattern [optional]
	 */
	public function __construct($locale, $datetype, $timetype, $timezone, $calendar, $pattern) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Date Formatter を作成する
	 * @link http://php.net/manual/ja/intldateformatter.create.php
	 * @param string $locale <p>
	 * フォーマットやパースの際に使用するロケール。<b>NULL</b> を指定すると、
	 * ini 設定 intl.default_locale
	 * の値を使います。
	 * </p>
	 * @param int $datetype <p>
	 * 使用する日付の形式 (<b>none</b>,
	 * <b>short</b>, <b>medium</b>,
	 * <b>long</b>, <b>full</b>)。
	 * IntlDateFormatter の定数
	 * のいずれかとなります。
	 * <b>NULL</b> を指定すると、ICU のデフォルトの日付型を使います。
	 * </p>
	 * @param int $timetype <p>
	 * 使用する時刻の形式 (<b>none</b>,
	 * <b>short</b>, <b>medium</b>,
	 * <b>long</b>, <b>full</b>)。
	 * IntlDateFormatter の定数
	 * のいずれかとなります。
	 * <b>NULL</b> を指定すると、ICU のデフォルトの時刻型を使います。
	 * </p>
	 * @param mixed $timezone [optional] <p>
	 * タイムゾーン ID。デフォルト (そして、<b>NULL</b> が渡されたときにも使われるもの)
	 * は <b>date_default_timezone_get</b> が返す ID、あるいは
	 * <i>calendar</i> パラメータに <b>IntlCalendar</b>
	 * オブジェクトが渡されていればそのタイムゾーンを使います。
	 * この ID は、ICU のデータベースにある妥当な識別子である必要があります。あるいは、
	 * オフセットを明示した GMT-05:30 のような形式になります。
	 * </p>
	 * <p>
	 * <b>IntlTimeZone</b> オブジェクトあるいは
	 * <b>DateTimeZone</b> オブジェクトも指定できます。
	 * </p>
	 * @param mixed $calendar [optional] <p>
	 * フォーマットやパースの際に使用するカレンダー。デフォルトは <b>NULL</b> で、
	 * これは <b>IntlDateFormatter::GREGORIAN</b> を表します。
	 * IntlDateFormatter のカレンダー定数
	 * あるいは <b>IntlCalendar</b> を指定します。
	 * 渡された <b>IntlCalendar</b> は、クローンされます。
	 * <b>IntlDateFormatter</b> によって元のオブジェクトが書き換えられることはありません。
	 * これは、利用するカレンダーの型 (グレゴリオ暦、イスラム暦、ペルシア暦など) の判定に使います。
	 * また、<i>timezone</i> パラメータに <b>NULL</b> を指定した場合にはタイムゾーンの判定にも使います。
	 * </p>
	 * @param string $pattern [optional] <p>
	 * フォーマットやパースの際に使用するオプションのパターン。
	 * 使えるパターンについては http://userguide.icu-project.org/formatparse/datetime
	 * を参照ください。
	 * </p>
	 * @return IntlDateFormatter 作成された <b>IntlDateFormatter</b> を返します。失敗した場合は <b>FALSE</b> を返します。
	 */
	public static function create(string $locale, int $datetype, int $timetype, $timezone = NULL, $calendar = NULL, string $pattern = ""): IntlDateFormatter {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * IntlDateFormatter が使用する日付形式を取得する
	 * @link http://php.net/manual/ja/intldateformatter.getdatetype.php
	 * @return int Formatter の現在の 日付形式
	 * の値を返します。
	 */
	public function getDateType(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * IntlDateFormatter が使用する時刻形式を取得する
	 * @link http://php.net/manual/ja/intldateformatter.gettimetype.php
	 * @return int Formatter の現在の 日付形式
	 * の値を返します。
	 */
	public function getTimeType(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * IntlDateFormatter が使用するカレンダー型を取得する
	 * @link http://php.net/manual/ja/intldateformatter.getcalendar.php
	 * @return int Formatter が使用する
	 * カレンダー型
	 * を返します。
	 * <b>IntlDateFormatter::TRADITIONAL</b> あるいは
	 * <b>IntlDateFormatter::GREGORIAN</b> です。
	 */
	public function getCalendar(): int {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
	 * カレンダーオブジェクトのコピーを取得する
	 * @link http://php.net/manual/ja/intldateformatter.getcalendarobject.php
	 * @return IntlCalendar このフォーマッターが内部的に使うカレンダーオブジェクトのコピーを返します。
	 */
	public function getCalendarObject(): IntlCalendar {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Formatter が使うカレンダー型を設定する
	 * @link http://php.net/manual/ja/intldateformatter.setcalendar.php
	 * @param mixed $which <p>
	 * 使用する カレンダー型
	 * (デフォルトは <b>IntlDateFormatter::GREGORIAN</b> で、
	 * <b>NULL</b> を指定した場合にもこれを使います)、あるいは
	 * <b>IntlCalendar</b> オブジェクト。
	 * </p>
	 * <p>
	 * <b>IntlCalendar</b> オブジェクトが渡された場合は、それをクローンします。
	 * 引数として渡したオブジェクトは、何も変更されません。
	 * </p>
	 * <p>
	 * フォーマッターのタイムゾーンを残すのは
	 * <b>IntlCalendar</b> オブジェクトが渡されなかった場合だけで、
	 * このオブジェクトが渡された場合は新しいタイムゾーンを利用します。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setCalendar($which): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * IntlDateFormatter が使用するタイムゾーン ID を取得する
	 * @link http://php.net/manual/ja/intldateformatter.gettimezoneid.php
	 * @return string この Formatter が使用するタイムゾーンの ID 文字列を返します。
	 */
	public function getTimeZoneId(): string {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
	 * タイムゾーンを取得する
	 * @link http://php.net/manual/ja/intldateformatter.gettimezone.php
	 * @return IntlTimeZone <b>IntlTimeZone</b> オブジェクトを返します。
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function getTimeZone(): IntlTimeZone {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
	 * タイムゾーンを設定する
	 * @link http://php.net/manual/ja/intldateformatter.settimezone.php
	 * @param mixed $zone <p>
	 * 利用するタイムゾーン。次の形式で指定できます。
	 * </p>
	 * @return boolean 成功した場合に <b>TRUE</b>、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setTimeZone($zone): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * IntlDateFormatter が使用するパターンを設定する
	 * @link http://php.net/manual/ja/intldateformatter.setpattern.php
	 * @param string $pattern <p>
	 * 使用するパターン文字列。
	 * 使えるパターンについては http://userguide.icu-project.org/formatparse/datetime
	 * を参照ください。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 * 間違ったフォーマット文字列を指定すると、失敗します。
	 */
	public function setPattern(string $pattern): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * IntlDateFormatter が使用するパターンを取得する
	 * @link http://php.net/manual/ja/intldateformatter.getpattern.php
	 * @return string フォーマット/パース 時に使用するパターン文字列を返します。
	 */
	public function getPattern(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Formatter が使用するロケールを取得する
	 * @link http://php.net/manual/ja/intldateformatter.getlocale.php
	 * @param int $which [optional]
	 * @return string この Formatter のロケール、あるいはエラーの場合は 'false' を返します。
	 */
	public function getLocale(int $which = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * パーサの寛大さを設定する
	 * @link http://php.net/manual/ja/intldateformatter.setlenient.php
	 * @param bool $lenient <p>
	 * パーサを寛大なものにするかどうか。デフォルトは <b>TRUE</b> (寛大) です。
	 * </p>
	 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function setLenient(bool $lenient): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * IntlDateFormatter で使用する寛大さを取得する
	 * @link http://php.net/manual/ja/intldateformatter.islenient.php
	 * @return bool 寛大なパーサの場合は <b>TRUE</b>、厳格なパーサの場合は <b>FALSE</b> 返します。
	 * デフォルトのパーサは寛大なパーサです。
	 */
	public function isLenient(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 日付/時刻 の値を文字列としてフォーマットする
	 * @link http://php.net/manual/ja/intldateformatter.format.php
	 * @param mixed $value <p>
	 * フォーマットする値。<b>DateTime</b> オブジェクト、
	 * <b>IntlCalendar</b> オブジェクト、
	 * epoch からの経過秒数を表す数値 (小数になる可能性もある)、
	 * あるいは <b>localtime</b> が出力する形式の配列となります。
	 * </p>
	 * <p>
	 * <b>DateTime</b> オブジェクトあるいは
	 * <b>IntlCalendar</b> オブジェクトを渡した場合は、
	 * そのタイムゾーンは考慮しません。これらをフォーマットするときに使うのは、
	 * フォーマッターで設定されているタイムゾーンです。
	 * 渡したオブジェクトのタイムゾーンを使って欲しい場合は、
	 * <b>IntlDateFormatter::setTimeZone</b>
	 * を呼んでそのオブジェクトのタイムゾーンを設定しておかなければいけません。
	 * あるいは、静的関数
	 * <b>IntlDateFormatter::formatObject</b> をかわりに使ってもかまいません。
	 * </p>
	 * @return string フォーマットされた文字列、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
	 */
	public function format($value): string {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
	 * オブジェクトの書式を設定する
	 * @link http://php.net/manual/ja/intldateformatter.formatobject.php
	 * @param object $object <p>
	 * <b>IntlCalendar</b> あるいは
	 * <b>DateTime</b> 型のオブジェクト。
	 * このオブジェクトの中のタイムゾーン情報を使います。
	 * </p>
	 * @param mixed $format [optional] <p>
	 * 日付/時刻のフォーマット方法。二つの要素からなる配列
	 * (最初の要素が日付のスタイル、二番目の要素が時刻のスタイル。それぞれ、定数
	 * <b>IntlDateFormatter::NONE</b>、
	 * <b>IntlDateFormatter::SHORT</b>、
	 * <b>IntlDateFormatter::MEDIUM</b>、
	 * <b>IntlDateFormatter::LONG</b>、
	 * <b>IntlDateFormatter::FULL</b> のいずれか)、
	 * これらの定数のいずれかの値を表す long 型
	 * (日付と時刻の両方に使います)、あるいは
	 * ICU
	 * のドキュメント にあるフォーマットを表す文字列を指定します。<b>NULL</b> を渡した場合はデフォルトのスタイルを使います。
	 * </p>
	 * @param string $locale [optional] <p>
	 * 利用するロケール。<b>NULL</b> を渡した場合は デフォルトのロケール を使います。
	 * </p>
	 * @return string 結果を文字列で返します。失敗した場合に <b>FALSE</b> を返します。
	 */
	public static function formatObject($object, $format = NULL, string $locale = NULL): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 文字列をパースしてタイムスタンプにする
	 * @link http://php.net/manual/ja/intldateformatter.parse.php
	 * @param string $value <p>
	 * 時間に変換する文字列。
	 * </p>
	 * @param int $position [optional] <p>
	 * $value のパースを開始する位置 (ゼロから数えます)。
	 * $value を処理する前にエラーが発生していない場合は
	 * $parse_pos は -1 となります。それ以外の場合はパースが終了した位置となります
	 * (そしてエラーが発生します)。
	 * この変数には、パースが失敗した場合にその終了位置が含まれます。
	 * $parse_pos > strlen($value) の場合、パースは即時に失敗します。
	 * </p>
	 * @return int タイムスタンプとしてパースされた値を返します。
	 * パースできなかった場合は <b>FALSE</b> を返します。
	 */
	public function parse(string $value, int &$position = null): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 文字列をパースして、フィールドベースの時刻値にする
	 * @link http://php.net/manual/ja/intldateformatter.localtime.php
	 * @param string $value <p>
	 * 時間に変換する文字列。
	 * </p>
	 * @param int $position [optional] <p>
	 * $value のパースを開始する位置 (ゼロから数えます)。
	 * $value を処理する前にエラーが発生していない場合は
	 * $parse_pos は -1 となります。それ以外の場合はパースが終了した位置となります
	 * (そしてエラーが発生します)。
	 * この変数には、パースが失敗した場合にその終了位置が含まれます。
	 * $parse_pos > strlen($value) の場合、パースは即時に失敗します。
	 * </p>
	 * @return array Localtime 互換の、整数値の配列を返します。
	 * tm_hour フィールド内の、24 時間制の時刻の値を含みます。
	 */
	public function localtime(string $value, int &$position = null): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 直近の操作のエラーコードを取得する
	 * @link http://php.net/manual/ja/intldateformatter.geterrorcode.php
	 * @return int エラーコードを返します。UErrorCode のいずれかの値となります。初期値は U_ZERO_ERROR です。
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * 直近の操作のエラーテキストを取得する
	 * @link http://php.net/manual/ja/intldateformatter.geterrormessage.php
	 * @return string 直近のエラーの説明を返します。
	 */
	public function getErrorMessage(): string {}

}

class ResourceBundle implements Traversable {

	/**
	 * @param $locale
	 * @param $bundlename
	 * @param $fallback [optional]
	 */
	public function __construct($locale, $bundlename, $fallback) {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * リソースバンドルを作成する
	 * @link http://php.net/manual/ja/resourcebundle.create.php
	 * @param string $locale <p>
	 * リソースバンドルを読み込むロケール (en_CA などのロケール名)。
	 * </p>
	 * @param string $bundlename <p>
	 * データが格納されているディレクトリ、あるいは .dat ファイル名。
	 * </p>
	 * @param bool $fallback [optional] <p>
	 * ロケールを完全一致とするか、あるいは代替として親ロケールを使うことを許可するか。
	 * </p>
	 * @return ResourceBundle <b>ResourceBundle</b> オブジェクト、あるいはエラー時に <b>NULL</b> を返します。
	 */
	public static function create(string $locale, string $bundlename, bool $fallback = null): ResourceBundle {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * バンドルからデータを取得する
	 * @link http://php.net/manual/ja/resourcebundle.get.php
	 * @param string|int $index <p>
	 * データのインデックス。文字列あるいは整数値となります。
	 * </p>
	 * @param bool $fallback [optional] <p>
	 * Whether locale should match exactly or fallback to parent locale is allowed.
	 * </p>
	 * @return mixed 指定したインデックスのデータ、あるいはエラー時に <b>NULL</b> を返します。
	 * 文字列、整数値、バイナリデータ文字列は、それぞれに対応する PHP の型として返します。
	 * 整数の配列は PHP の配列として返します。複雑な型は
	 * <b>ResourceBundle</b> オブジェクトとして返します。
	 */
	public function get($index, bool $fallback = true) {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * バンドル内の要素数を取得する
	 * @link http://php.net/manual/ja/resourcebundle.count.php
	 * @return int バンドル内の要素数を返します。
	 */
	public function count(): int {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * サポートするロケールを取得する
	 * @link http://php.net/manual/ja/resourcebundle.locales.php
	 * @param string $bundlename <p>
	 * ロケールを取得したい ResourceBundle のパス、あるいは
	 * 空文字列を指定するとデフォルトのロケール一覧を取得できます。
	 * </p>
	 * @return array このバンドルがサポートするロケールの一覧を返します。
	 */
	public static function getLocales(string $bundlename): array {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * バンドルの直近のエラーコードを取得する
	 * @link http://php.net/manual/ja/resourcebundle.geterrorcode.php
	 * @return int バンドルオブジェクトの最後の関数コールからのエラーコードを返します。
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * バンドルの直近のエラーメッセージを取得する
	 * @link http://php.net/manual/ja/resourcebundle.geterrormessage.php
	 * @return string バンドルオブジェクトの最後の関数コールからのエラーメッセージを返します。
	 */
	public function getErrorMessage(): string {}

}

class Transliterator  {
	const FORWARD = 0;
	const REVERSE = 1;

	public $id;


	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * インスタンス化を拒否するために private にしたコンストラクタ
	 * @link http://php.net/manual/ja/transliterator.construct.php
	 */
	final private function __construct() {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Transliterator を作成する
	 * @link http://php.net/manual/ja/transliterator.create.php
	 * @param string $id <p>
	 * id。
	 * </p>
	 * @param int $direction [optional] <p>
	 * 方向。デフォルトは
	 * >Transliterator::FORWARD です。
	 * Transliterator::REVERSE も指定できます。
	 * </p>
	 * @return Transliterator 成功した場合に <b>Transliterator</b> オブジェクト、失敗した場合に
	 * <b>NULL</b> を返します。
	 */
	public static function create(string $id, int $direction = null): Transliterator {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * 規則に基づいた Transliterator を作成する
	 * @link http://php.net/manual/ja/transliterator.createfromrules.php
	 * @param string $rules <p>
	 * 規則。
	 * </p>
	 * @param string $direction [optional] <p>
	 * 方向。デフォルトは
	 * >Transliterator::FORWARD です。
	 * Transliterator::REVERSE も指定できます。
	 * </p>
	 * @return Transliterator 成功した場合に <b>Transliterator</b> オブジェクト、失敗した場合に
	 * <b>NULL</b> を返します。
	 */
	public static function createFromRules(string $rules, string $direction = null): Transliterator {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * 逆方向の Transliterator を作成する
	 * @link http://php.net/manual/ja/transliterator.createinverse.php
	 * @return Transliterator 成功した場合に <b>Transliterator</b> オブジェクト、失敗した場合に
	 * <b>NULL</b> を返します。
	 */
	public function createInverse(): Transliterator {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Transliterator の ID を取得する
	 * @link http://php.net/manual/ja/transliterator.listids.php
	 * @return array 成功した場合は登録されている Transliterator ID の配列を返します。
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public static function listIDs(): array {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * 文字列を音訳する
	 * @link http://php.net/manual/ja/transliterator.transliterate.php
	 * @param string $subject <p>
	 * 変換する文字列。
	 * </p>
	 * @param int $start [optional] <p>
	 * 文字列の変換の開始位置を表すインデックス (UTF-16 コード単位) を指定します。指定した位置も、変換範囲に含まれます。
	 * インデックスは 0 から始まります。この位置より前にあるテキストは、そのまま残ります。
	 * </p>
	 * @param int $end [optional] <p>
	 * 文字列の変換の終了位置を表すインデックス (UTF-16 コード単位) を指定します。指定した位置は、変換範囲に含まれません。
	 * インデックスは 0 から始まります。この位置も含めてそれ以降にあるテキストは、そのまま残ります。
	 * </p>
	 * @return string 成功した場合に変換後の文字列を返します。
	 * 失敗した場合に <b>FALSE</b> を返します。
	 */
	public function transliterate(string $subject, int $start = null, int $end = null): string {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * 直近のエラーコードを取得する
	 * @link http://php.net/manual/ja/transliterator.geterrorcode.php
	 * @return int 成功した場合にエラーコードを返します。
	 * エラーがない場合や失敗した場合は <b>FALSE</b> を返します。
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * 直近のエラーメッセージを取得する
	 * @link http://php.net/manual/ja/transliterator.geterrormessage.php
	 * @return string 成功した場合にエラーメッセージを返します。
	 * エラーがない場合や失敗した場合は <b>FALSE</b> を返します。
	 */
	public function getErrorMessage(): string {}

}

/**
 * @link http://php.net/manual/ja/class.intltimezone.php
 */
class IntlTimeZone  {
	const DISPLAY_SHORT = 1;
	const DISPLAY_LONG = 2;
	const DISPLAY_SHORT_GENERIC = 3;
	const DISPLAY_LONG_GENERIC = 4;
	const DISPLAY_SHORT_GMT = 5;
	const DISPLAY_LONG_GMT = 6;
	const DISPLAY_SHORT_COMMONLY_USED = 7;
	const DISPLAY_GENERIC_LOCATION = 8;
	const TYPE_ANY = 0;
	const TYPE_CANONICAL = 1;
	const TYPE_CANONICAL_LOCATION = 2;


	private function __construct() {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 指定した ID のタイムゾーンオブジェクトを作る
	 * @link http://php.net/manual/ja/intltimezone.createtimezone.php
	 * @param string $zoneId <p>
	 * </p>
	 * @return IntlTimeZone
	 */
	public static function createTimeZone(string $zoneId): IntlTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * DateTimeZone からタイムゾーンオブジェクトを作る
	 * @link http://php.net/manual/ja/intltimezone.fromdatetimezone.php
	 * @param DateTimeZone $zoneId <p>
	 * </p>
	 * @return IntlTimeZone
	 */
	public static function fromDateTimeZone(DateTimeZone $zoneId): IntlTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * このホストのデフォルトタイムゾーンの新しいコピーを作る
	 * @link http://php.net/manual/ja/intltimezone.createdefault.php
	 * @return IntlTimeZone
	 */
	public static function createDefault(): IntlTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * GMT (UTC) タイムゾーンを作る
	 * @link http://php.net/manual/ja/intltimezone.getgmt.php
	 * @return IntlTimeZone
	 */
	public static function getGMT(): IntlTimeZone {}

	public static function getUnknown() {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 指定した国あるいはオフセットに関連するタイムゾーン ID の一覧を取得する
	 * @link http://php.net/manual/ja/intltimezone.createenumeration.php
	 * @param mixed $countryOrRawOffset [optional] <p>
	 * </p>
	 * @return IntlIterator
	 */
	public static function createEnumeration($countryOrRawOffset = null): IntlIterator {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 指定した ID を含む等価グループの中にある ID の数を取得する
	 * @link http://php.net/manual/ja/intltimezone.countequivalentids.php
	 * @param string $zoneId <p>
	 * </p>
	 * @return integer
	 */
	public static function countEquivalentIDs(string $zoneId): integer {}

	/**
	 * @param $zoneType
	 * @param $region [optional]
	 * @param $rawOffset [optional]
	 */
	public static function createTimeZoneIDEnumeration($zoneType, $region, $rawOffset) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 指定したタイムゾーン ID の、正式なシステムタイムゾーン ID あるいは正規化したカスタムタイムゾーン ID を取得する
	 * @link http://php.net/manual/ja/intltimezone.getcanonicalid.php
	 * @param string $zoneId <p>
	 * </p>
	 * @param bool $isSystemID [optional] <p>
	 * </p>
	 * @return string
	 */
	public static function getCanonicalID(string $zoneId, bool &$isSystemID = null): string {}

	/**
	 * @param $zoneId
	 */
	public static function getRegion($zoneId) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * ICU が使っているタイムゾーンデータのバージョンを取得する
	 * @link http://php.net/manual/ja/intltimezone.gettzdataversion.php
	 * @return string
	 */
	public static function getTZDataVersion(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 指定した ID を含む等価グループの ID を取得する
	 * @link http://php.net/manual/ja/intltimezone.getequivalentid.php
	 * @param string $zoneId <p>
	 * </p>
	 * @param integer $index <p>
	 * </p>
	 * @return string
	 */
	public static function getEquivalentID(string $zoneId, integer $index): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * タイムゾーン ID を取得する
	 * @link http://php.net/manual/ja/intltimezone.getid.php
	 * @return string
	 */
	public function getID(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * このタイムゾーンが夏時間を採用しているかどうかを調べる
	 * @link http://php.net/manual/ja/intltimezone.usedaylighttime.php
	 * @return bool
	 */
	public function useDaylightTime(): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 指定した時刻の、GMT へのオフセットを取得する
	 * @link http://php.net/manual/ja/intltimezone.getoffset.php
	 * @param float $date <p>
	 * </p>
	 * @param bool $local <p>
	 * </p>
	 * @param integer $rawOffset <p>
	 * </p>
	 * @param integer $dstOffset <p>
	 * </p>
	 * @return integer
	 */
	public function getOffset(float $date, bool $local, integer &$rawOffset, integer &$dstOffset): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * (夏時間を考慮せずに) GMT へのオフセットを取得する
	 * @link http://php.net/manual/ja/intltimezone.getrawoffset.php
	 * @return integer
	 */
	public function getRawOffset(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * このタイムゾーンが別のタイムゾーンと同じルールおよびオフセットを使っているかどうかを調べる
	 * @link http://php.net/manual/ja/intltimezone.hassamerules.php
	 * @param IntlTimeZone $otherTimeZone <p>
	 * </p>
	 * @return bool
	 */
	public function hasSameRules(IntlTimeZone $otherTimeZone): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * このタイムゾーンの、ユーザー向けに表示する名前を取得する
	 * @link http://php.net/manual/ja/intltimezone.getdisplayname.php
	 * @param bool $isDaylight [optional] <p>
	 * </p>
	 * @param integer $style [optional] <p>
	 * </p>
	 * @param string $locale [optional] <p>
	 * </p>
	 * @return string
	 */
	public function getDisplayName(bool $isDaylight = null, integer $style = null, string $locale = null): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * ローカルの標準時刻からローカルの実測時刻を得るために加算する時間を取得する
	 * @link http://php.net/manual/ja/intltimezone.getdstsavings.php
	 * @return integer
	 */
	public function getDSTSavings(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * DateTimeZone オブジェクトに変換する
	 * @link http://php.net/manual/ja/intltimezone.todatetimezone.php
	 * @return DateTimeZone
	 */
	public function toDateTimeZone(): DateTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 直近のエラーコードを取得する
	 * @link http://php.net/manual/ja/intltimezone.geterrorcode.php
	 * @return integer
	 */
	public function getErrorCode(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 直近のエラーメッセージを取得する
	 * @link http://php.net/manual/ja/intltimezone.geterrormessage.php
	 * @return string
	 */
	public function getErrorMessage(): string {}

}

/**
 * @method bool isSet(int $field) (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>Whether a field is set
 * @link http://php.net/manual/ja/class.intlcalendar.php
 */
class IntlCalendar  {
	const FIELD_ERA = 0;
	const FIELD_YEAR = 1;
	const FIELD_MONTH = 2;
	const FIELD_WEEK_OF_YEAR = 3;
	const FIELD_WEEK_OF_MONTH = 4;
	const FIELD_DATE = 5;
	const FIELD_DAY_OF_YEAR = 6;
	const FIELD_DAY_OF_WEEK = 7;
	const FIELD_DAY_OF_WEEK_IN_MONTH = 8;
	const FIELD_AM_PM = 9;
	const FIELD_HOUR = 10;
	const FIELD_HOUR_OF_DAY = 11;
	const FIELD_MINUTE = 12;
	const FIELD_SECOND = 13;
	const FIELD_MILLISECOND = 14;
	const FIELD_ZONE_OFFSET = 15;
	const FIELD_DST_OFFSET = 16;
	const FIELD_YEAR_WOY = 17;
	const FIELD_DOW_LOCAL = 18;
	const FIELD_EXTENDED_YEAR = 19;
	const FIELD_JULIAN_DAY = 20;
	const FIELD_MILLISECONDS_IN_DAY = 21;
	const FIELD_IS_LEAP_MONTH = 22;
	const FIELD_FIELD_COUNT = 23;
	const FIELD_DAY_OF_MONTH = 5;
	const DOW_SUNDAY = 1;
	const DOW_MONDAY = 2;
	const DOW_TUESDAY = 3;
	const DOW_WEDNESDAY = 4;
	const DOW_THURSDAY = 5;
	const DOW_FRIDAY = 6;
	const DOW_SATURDAY = 7;
	const DOW_TYPE_WEEKDAY = 0;
	const DOW_TYPE_WEEKEND = 1;
	const DOW_TYPE_WEEKEND_OFFSET = 2;
	const DOW_TYPE_WEEKEND_CEASE = 3;
	const WALLTIME_FIRST = 1;
	const WALLTIME_LAST = 0;
	const WALLTIME_NEXT_VALID = 2;


	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Private constructor for disallowing instantiation
	 * @link http://php.net/manual/ja/intlcalendar.construct.php
	 */
	private function __construct() {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Create a new IntlCalendar
	 * @link http://php.net/manual/ja/intlcalendar.createinstance.php
	 * @param mixed $timeZone [optional] <p>
	 * The timezone to use.
	 * </p>
	 * @param string $locale [optional] <p>
	 * A locale to use or <b>NULL</b> to use the default locale.
	 * </p>
	 * @return IntlCalendar The created <b>IntlCalendar</b> instance or <b>NULL</b> on
	 * failure.
	 */
	public static function createInstance($timeZone = NULL, string $locale = ""): IntlCalendar {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get set of locale keyword values
	 * @link http://php.net/manual/ja/intlcalendar.getkeywordvaluesforlocale.php
	 * @param string $key <p>
	 * The locale keyword for which relevant values are to be queried. Only
	 * 'calendar' is supported.
	 * </p>
	 * @param string $locale <p>
	 * The locale onto which the keyword/value pair are to be appended.
	 * </p>
	 * @param boolean $commonlyUsed <p>
	 * Whether to show only the values commonly used for the specified locale.
	 * </p>
	 * @return Iterator An iterator that yields strings with the locale keyword
	 * values失敗した場合に <b>FALSE</b> を返します.
	 */
	public static function getKeywordValuesForLocale(string $key, string $locale, bool $commonlyUsed): Iterator {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get number representing the current time
	 * @link http://php.net/manual/ja/intlcalendar.getnow.php
	 * @return float A float representing a number of milliseconds since the epoch,
	 * not counting leap seconds.
	 */
	public static function getNow(): float {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get array of locales for which there is data
	 * @link http://php.net/manual/ja/intlcalendar.getavailablelocales.php
	 * @return array An array of strings, one for which locale.
	 */
	public static function getAvailableLocales(): array {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the value for a field
	 * @link http://php.net/manual/ja/intlcalendar.get.php
	 * @param int $field
	 * @return int An integer with the value of the time field.
	 */
	public function get(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get time currently represented by the object
	 * @link http://php.net/manual/ja/intlcalendar.gettime.php
	 * @return float A float representing the number of milliseconds elapsed since the
	 * reference time (1 Jan 1970 00:00:00 UTC).
	 */
	public function getTime(): float {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the calendar time in milliseconds since the epoch
	 * @link http://php.net/manual/ja/intlcalendar.settime.php
	 * @param float $date <p>
	 * An instant represented by the number of number of milliseconds between
	 * such instant and the epoch, ignoring leap seconds.
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function setTime(float $date): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Add a (signed) amount of time to a field
	 * @link http://php.net/manual/ja/intlcalendar.add.php
	 * @param int $field
	 * @param int $amount <p>
	 * The signed amount to add to the current field. If the amount is positive,
	 * the instant will be moved forward; if it is negative, the instant wil be
	 * moved into the past. The unit is implicit to the field type. For instance,
	 * hours for <b>IntlCalendar::FIELD_HOUR_OF_DAY</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success失敗した場合に <b>FALSE</b> を返します.
	 */
	public function add(int $field, int $amount): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the timezone used by this calendar
	 * @link http://php.net/manual/ja/intlcalendar.settimezone.php
	 * @param mixed $timeZone <p>
	 * The new timezone to be used by this calendar. It can be specified in the
	 * following ways:
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function setTimeZone($timeZone): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether this objectʼs time is after that of the passed object
	 * @link http://php.net/manual/ja/intlcalendar.after.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool <b>TRUE</b> if this objectʼs current time is after that of the
	 * <i>calendar</i> argumentʼs time. Returns <b>FALSE</b> otherwise.
	 * Also returns <b>FALSE</b> on failure. You can use exceptions or
	 * <b>intl_get_error_code</b> to detect error conditions.
	 */
	public function after(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether this objectʼs time is before that of the passed object
	 * @link http://php.net/manual/ja/intlcalendar.before.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool <b>TRUE</b> if this objectʼs current time is before that of the
	 * <i>calendar</i> argumentʼs time. Returns <b>FALSE</b> otherwise.
	 * Also returns <b>FALSE</b> on failure. You can use exceptions or
	 * <b>intl_get_error_code</b> to detect error conditions.
	 */
	public function before(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set a time field or several common fields at once
	 * @link http://php.net/manual/ja/intlcalendar.set.php
	 * @param int $field
	 * @param int $value <p>
	 * The new value of the given field.
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function set(int $field, int $value): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Add value to field without carrying into more significant fields
	 * @link http://php.net/manual/ja/intlcalendar.roll.php
	 * @param int $field
	 * @param mixed $amountOrUpOrDown <p>
	 * The (signed) amount to add to the field, <b>TRUE</b> for rolling up (adding
	 * 1), or <b>FALSE</b> for rolling down (subtracting
	 * 1).
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function roll(int $field, $amountOrUpOrDown): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Clear a field or all fields
	 * @link http://php.net/manual/ja/intlcalendar.clear.php
	 * @param int $field [optional]
	 * @return bool <b>TRUE</b> on success失敗した場合に <b>FALSE</b> を返します. Failure can only occur is
	 * invalid arguments are provided.
	 */
	public function clear(int $field = NULL): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Calculate difference between given time and this objectʼs time
	 * @link http://php.net/manual/ja/intlcalendar.fielddifference.php
	 * @param float $when <p>
	 * The time against which to compare the quantity represented by the
	 * <i>field</i>. For the result to be positive, the time
	 * given for this parameter must be ahead of the time of the object the
	 * method is being invoked on.
	 * </p>
	 * @param int $field <p>
	 * The field that represents the quantity being compared.
	 * </p>
	 * @return int a (signed) difference of time in the unit associated with the
	 * specified field失敗した場合に <b>FALSE</b> を返します.
	 */
	public function fieldDifference(float $when, int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * The maximum value for a field, considering the objectʼs current time
	 * @link http://php.net/manual/ja/intlcalendar.getactualmaximum.php
	 * @param int $field
	 * @return int An int representing the maximum value in the units associated
	 * with the given <i>field</i>失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getActualMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * The minimum value for a field, considering the objectʼs current time
	 * @link http://php.net/manual/ja/intlcalendar.getactualminimum.php
	 * @param int $field
	 * @return int An int representing the minimum value in the fieldʼs
	 * unit失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getActualMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Tell whether a day is a weekday, weekend or a day that has a transition between the two
	 * @link http://php.net/manual/ja/intlcalendar.getdayofweektype.php
	 * @param int $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return int one of the constants
	 * <b>IntlCalendar::DOW_TYPE_WEEKDAY</b>,
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND</b>,
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</b> or
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</b>失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getDayOfWeekType(int $dayOfWeek): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the first day of the week for the calendarʼs locale
	 * @link http://php.net/manual/ja/intlcalendar.getfirstdayofweek.php
	 * @return int One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getFirstDayOfWeek(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the largest local minimum value for a field
	 * @link http://php.net/manual/ja/intlcalendar.getgreatestminimum.php
	 * @param int $field
	 * @return int An int representing a field value, in the fieldʼs
	 * unit,失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getGreatestMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the smallest local maximum for a field
	 * @link http://php.net/manual/ja/intlcalendar.getleastmaximum.php
	 * @param int $field
	 * @return int An int representing a field value in the fieldʼs
	 * unit失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getLeastMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the locale associated with the object
	 * @link http://php.net/manual/ja/intlcalendar.getlocale.php
	 * @param int $localeType <p>
	 * Whether to fetch the actual locale (the locale from which the calendar
	 * data originates, with <b>Locale::ACTUAL_LOCALE</b>) or the
	 * valid locale, i.e., the most specific locale supported by ICU relatively
	 * to the requested locale – see <b>Locale::VALID_LOCALE</b>.
	 * From the most general to the most specific, the locales are ordered in
	 * this fashion – actual locale, valid locale, requested locale.
	 * </p>
	 * @return string A locale string失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getLocale(int $localeType): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the global maximum value for a field
	 * @link http://php.net/manual/ja/intlcalendar.getmaximum.php
	 * @param int $field
	 * @return int An int representing a field value in the fieldʼs
	 * unit失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get minimal number of days the first week in a year or month can have
	 * @link http://php.net/manual/ja/intlcalendar.getminimaldaysinfirstweek.php
	 * @return int An int representing a number of days失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getMinimalDaysInFirstWeek(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the global minimum value for a field
	 * @link http://php.net/manual/ja/intlcalendar.getminimum.php
	 * @param int $field
	 * @return int An int representing a value for the given
	 * field in the fieldʼs unit失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the objectʼs timezone
	 * @link http://php.net/manual/ja/intlcalendar.gettimezone.php
	 * @return IntlTimeZone An <b>IntlTimeZone</b> object corresponding to the one used
	 * internally in this object.
	 */
	public function getTimeZone(): IntlTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the calendar type
	 * @link http://php.net/manual/ja/intlcalendar.gettype.php
	 * @return string A string representing the calendar type, such as
	 * 'gregorian', 'islamic', etc.
	 */
	public function getType(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get time of the day at which weekend begins or ends
	 * @link http://php.net/manual/ja/intlcalendar.getweekendtransition.php
	 * @param string $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return int The number of milliseconds into the day at which the weekend begins or
	 * ends失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getWeekendTransition(string $dayOfWeek): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether the objectʼs time is in Daylight Savings Time
	 * @link http://php.net/manual/ja/intlcalendar.indaylighttime.php
	 * @return bool <b>TRUE</b> if the date is in Daylight Savings Time, <b>FALSE</b> otherwise.
	 * The value <b>FALSE</b> may also be returned on failure, for instance after
	 * specifying invalid field values on non-lenient mode; use exceptions or query
	 * <b>intl_get_error_code</b> to disambiguate.
	 */
	public function inDaylightTime(): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether another calendar is equal but for a different time
	 * @link http://php.net/manual/ja/intlcalendar.isequivalentto.php
	 * @param IntlCalendar $other <p>
	 * The other calendar against which the comparison is to be made.
	 * </p>
	 * @return bool Assuming there are no argument errors, returns <b>TRUE</b> iif the calendars are
	 * equivalent except possibly for their set time.
	 */
	public function isEquivalentTo(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether date/time interpretation is in lenient mode
	 * @link http://php.net/manual/ja/intlcalendar.islenient.php
	 * @return bool A bool representing whether the calendar is set to lenient mode.
	 */
	public function isLenient(): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether a certain date/time is in the weekend
	 * @link http://php.net/manual/ja/intlcalendar.isweekend.php
	 * @param float $date [optional] <p>
	 * An optional timestamp representing the number of milliseconds since the
	 * epoch, excluding leap seconds. If <b>NULL</b>, this objectʼs current time is
	 * used instead.
	 * </p>
	 * @return bool A bool indicating whether the given or this objectʼs time occurs
	 * in a weekend.
	 * </p>
	 * <p>
	 * The value <b>FALSE</b> may also be returned on failure, for instance after giving
	 * a date out of bounds on non-lenient mode; use exceptions or query
	 * <b>intl_get_error_code</b> to disambiguate.
	 */
	public function isWeekend(float $date = NULL): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the day on which the week is deemed to start
	 * @link http://php.net/manual/ja/intlcalendar.setfirstdayofweek.php
	 * @param int $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setFirstDayOfWeek(int $dayOfWeek): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set whether date/time interpretation is to be lenient
	 * @link http://php.net/manual/ja/intlcalendar.setlenient.php
	 * @param string $isLenient <p>
	 * Use <b>TRUE</b> to activate the lenient mode; <b>FALSE</b> otherwise.
	 * </p>
	 * @return ReturnType <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setLenient(string $isLenient): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Set minimal number of days the first week in a year or month can have
	 * @link http://php.net/manual/ja/intlcalendar.setminimaldaysinfirstweek.php
	 * @param int $minimalDays <p>
	 * The number of minimal days to set.
	 * </p>
	 * @return bool <b>TRUE</b> on success, <b>FALSE</b> on failure.
	 */
	public function setMinimalDaysInFirstWeek(int $minimalDays): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Compare time of two IntlCalendar objects for equality
	 * @link http://php.net/manual/ja/intlcalendar.equals.php
	 * @param IntlCalendar $other <p>
	 * The calendar to compare with the primary object.
	 * </p>
	 * @return bool <b>TRUE</b> if the current time of both this and the passed in
	 * <b>IntlCalendar</b> object are the same, or <b>FALSE</b>
	 * otherwise. The value <b>FALSE</b> can also be returned on failure. This can only
	 * happen if bad arguments are passed in. In any case, the two cases can be
	 * distinguished by calling <b>intl_get_error_code</b>.
	 */
	public function equals(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get behavior for handling repeating wall time
	 * @link http://php.net/manual/ja/intlcalendar.getrepeatedwalltimeoption.php
	 * @return int One of the constants <b>IntlCalendar::WALLTIME_FIRST</b> or
	 * <b>IntlCalendar::WALLTIME_LAST</b>.
	 */
	public function getRepeatedWallTimeOption(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get behavior for handling skipped wall time
	 * @link http://php.net/manual/ja/intlcalendar.getskippedwalltimeoption.php
	 * @return int One of the constants <b>IntlCalendar::WALLTIME_FIRST</b>,
	 * <b>IntlCalendar::WALLTIME_LAST</b> or
	 * <b>IntlCalendar::WALLTIME_NEXT_VALID</b>.
	 */
	public function getSkippedWallTimeOption(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set behavior for handling repeating wall times at negative timezone offset transitions
	 * @link http://php.net/manual/ja/intlcalendar.setrepeatedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants <b>IntlCalendar::WALLTIME_FIRST</b> or
	 * <b>IntlCalendar::WALLTIME_LAST</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setRepeatedWallTimeOption(int $wallTimeOption): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set behavior for handling skipped wall times at positive timezone offset transitions
	 * @link http://php.net/manual/ja/intlcalendar.setskippedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants <b>IntlCalendar::WALLTIME_FIRST</b>,
	 * <b>IntlCalendar::WALLTIME_LAST</b> or
	 * <b>IntlCalendar::WALLTIME_NEXT_VALID</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setSkippedWallTimeOption(int $wallTimeOption): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a2)<br/>
	 * Create an IntlCalendar from a DateTime object or string
	 * @link http://php.net/manual/ja/intlcalendar.fromdatetime.php
	 * @param mixed $dateTime <p>
	 * A <b>DateTime</b> object or a string that
	 * can be passed to <b>DateTime::__construct</b>.
	 * </p>
	 * @return IntlCalendar The created <b>IntlCalendar</b> object or <b>NULL</b> in case of
	 * failure. If a string is passed, any exception that occurs
	 * inside the <b>DateTime</b> constructor is propagated.
	 */
	public static function fromDateTime($dateTime): IntlCalendar {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a2)<br/>
	 * Convert an IntlCalendar into a DateTime object
	 * @link http://php.net/manual/ja/intlcalendar.todatetime.php
	 * @return DateTime A <b>DateTime</b> object with the same timezone as this
	 * object (though using PHPʼs database instead of ICUʼs) and the same time,
	 * except for the smaller precision (second precision instead of millisecond).
	 * Returns <b>FALSE</b> on failure.
	 */
	public function toDateTime(): DateTime {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error code on the object
	 * @link http://php.net/manual/ja/intlcalendar.geterrorcode.php
	 * @return int An ICU error code indicating either success, failure or a warning.
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error message on the object
	 * @link http://php.net/manual/ja/intlcalendar.geterrormessage.php
	 * @return string The error message associated with last error that occurred in a function call
	 * on this object, or a string indicating the non-existance of an error.
	 */
	public function getErrorMessage(): string {}

}

class IntlGregorianCalendar extends IntlCalendar  {

	/**
	 * @param $timeZoneOrYear [optional]
	 * @param $localeOrMonth [optional]
	 * @param $dayOfMonth [optional]
	 * @param $hour [optional]
	 * @param $minute [optional]
	 * @param $second [optional]
	 */
	public function __construct($timeZoneOrYear, $localeOrMonth, $dayOfMonth, $hour, $minute, $second) {}

	/**
	 * @param $date
	 */
	public function setGregorianChange($date) {}

	public function getGregorianChange() {}

	/**
	 * @param $year
	 */
	public function isLeapYear($year) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Create a new IntlCalendar
	 * @link http://php.net/manual/ja/intlcalendar.createinstance.php
	 * @param mixed $timeZone [optional] <p>
	 * The timezone to use.
	 * </p>
	 * @param string $locale [optional] <p>
	 * A locale to use or <b>NULL</b> to use the default locale.
	 * </p>
	 * @return IntlCalendar The created <b>IntlCalendar</b> instance or <b>NULL</b> on
	 * failure.
	 */
	public static function createInstance($timeZone = NULL, string $locale = ""): IntlCalendar {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get set of locale keyword values
	 * @link http://php.net/manual/ja/intlcalendar.getkeywordvaluesforlocale.php
	 * @param string $key <p>
	 * The locale keyword for which relevant values are to be queried. Only
	 * 'calendar' is supported.
	 * </p>
	 * @param string $locale <p>
	 * The locale onto which the keyword/value pair are to be appended.
	 * </p>
	 * @param boolean $commonlyUsed <p>
	 * Whether to show only the values commonly used for the specified locale.
	 * </p>
	 * @return Iterator An iterator that yields strings with the locale keyword
	 * values失敗した場合に <b>FALSE</b> を返します.
	 */
	public static function getKeywordValuesForLocale(string $key, string $locale, bool $commonlyUsed): Iterator {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get number representing the current time
	 * @link http://php.net/manual/ja/intlcalendar.getnow.php
	 * @return float A float representing a number of milliseconds since the epoch,
	 * not counting leap seconds.
	 */
	public static function getNow(): float {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get array of locales for which there is data
	 * @link http://php.net/manual/ja/intlcalendar.getavailablelocales.php
	 * @return array An array of strings, one for which locale.
	 */
	public static function getAvailableLocales(): array {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the value for a field
	 * @link http://php.net/manual/ja/intlcalendar.get.php
	 * @param int $field
	 * @return int An integer with the value of the time field.
	 */
	public function get(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get time currently represented by the object
	 * @link http://php.net/manual/ja/intlcalendar.gettime.php
	 * @return float A float representing the number of milliseconds elapsed since the
	 * reference time (1 Jan 1970 00:00:00 UTC).
	 */
	public function getTime(): float {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the calendar time in milliseconds since the epoch
	 * @link http://php.net/manual/ja/intlcalendar.settime.php
	 * @param float $date <p>
	 * An instant represented by the number of number of milliseconds between
	 * such instant and the epoch, ignoring leap seconds.
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function setTime(float $date): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Add a (signed) amount of time to a field
	 * @link http://php.net/manual/ja/intlcalendar.add.php
	 * @param int $field
	 * @param int $amount <p>
	 * The signed amount to add to the current field. If the amount is positive,
	 * the instant will be moved forward; if it is negative, the instant wil be
	 * moved into the past. The unit is implicit to the field type. For instance,
	 * hours for <b>IntlCalendar::FIELD_HOUR_OF_DAY</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success失敗した場合に <b>FALSE</b> を返します.
	 */
	public function add(int $field, int $amount): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the timezone used by this calendar
	 * @link http://php.net/manual/ja/intlcalendar.settimezone.php
	 * @param mixed $timeZone <p>
	 * The new timezone to be used by this calendar. It can be specified in the
	 * following ways:
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function setTimeZone($timeZone): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether this objectʼs time is after that of the passed object
	 * @link http://php.net/manual/ja/intlcalendar.after.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool <b>TRUE</b> if this objectʼs current time is after that of the
	 * <i>calendar</i> argumentʼs time. Returns <b>FALSE</b> otherwise.
	 * Also returns <b>FALSE</b> on failure. You can use exceptions or
	 * <b>intl_get_error_code</b> to detect error conditions.
	 */
	public function after(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether this objectʼs time is before that of the passed object
	 * @link http://php.net/manual/ja/intlcalendar.before.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool <b>TRUE</b> if this objectʼs current time is before that of the
	 * <i>calendar</i> argumentʼs time. Returns <b>FALSE</b> otherwise.
	 * Also returns <b>FALSE</b> on failure. You can use exceptions or
	 * <b>intl_get_error_code</b> to detect error conditions.
	 */
	public function before(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set a time field or several common fields at once
	 * @link http://php.net/manual/ja/intlcalendar.set.php
	 * @param int $field
	 * @param int $value <p>
	 * The new value of the given field.
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function set(int $field, int $value): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Add value to field without carrying into more significant fields
	 * @link http://php.net/manual/ja/intlcalendar.roll.php
	 * @param int $field
	 * @param mixed $amountOrUpOrDown <p>
	 * The (signed) amount to add to the field, <b>TRUE</b> for rolling up (adding
	 * 1), or <b>FALSE</b> for rolling down (subtracting
	 * 1).
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function roll(int $field, $amountOrUpOrDown): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Clear a field or all fields
	 * @link http://php.net/manual/ja/intlcalendar.clear.php
	 * @param int $field [optional]
	 * @return bool <b>TRUE</b> on success失敗した場合に <b>FALSE</b> を返します. Failure can only occur is
	 * invalid arguments are provided.
	 */
	public function clear(int $field = NULL): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Calculate difference between given time and this objectʼs time
	 * @link http://php.net/manual/ja/intlcalendar.fielddifference.php
	 * @param float $when <p>
	 * The time against which to compare the quantity represented by the
	 * <i>field</i>. For the result to be positive, the time
	 * given for this parameter must be ahead of the time of the object the
	 * method is being invoked on.
	 * </p>
	 * @param int $field <p>
	 * The field that represents the quantity being compared.
	 * </p>
	 * @return int a (signed) difference of time in the unit associated with the
	 * specified field失敗した場合に <b>FALSE</b> を返します.
	 */
	public function fieldDifference(float $when, int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * The maximum value for a field, considering the objectʼs current time
	 * @link http://php.net/manual/ja/intlcalendar.getactualmaximum.php
	 * @param int $field
	 * @return int An int representing the maximum value in the units associated
	 * with the given <i>field</i>失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getActualMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * The minimum value for a field, considering the objectʼs current time
	 * @link http://php.net/manual/ja/intlcalendar.getactualminimum.php
	 * @param int $field
	 * @return int An int representing the minimum value in the fieldʼs
	 * unit失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getActualMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Tell whether a day is a weekday, weekend or a day that has a transition between the two
	 * @link http://php.net/manual/ja/intlcalendar.getdayofweektype.php
	 * @param int $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return int one of the constants
	 * <b>IntlCalendar::DOW_TYPE_WEEKDAY</b>,
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND</b>,
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</b> or
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</b>失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getDayOfWeekType(int $dayOfWeek): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the first day of the week for the calendarʼs locale
	 * @link http://php.net/manual/ja/intlcalendar.getfirstdayofweek.php
	 * @return int One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getFirstDayOfWeek(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the largest local minimum value for a field
	 * @link http://php.net/manual/ja/intlcalendar.getgreatestminimum.php
	 * @param int $field
	 * @return int An int representing a field value, in the fieldʼs
	 * unit,失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getGreatestMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the smallest local maximum for a field
	 * @link http://php.net/manual/ja/intlcalendar.getleastmaximum.php
	 * @param int $field
	 * @return int An int representing a field value in the fieldʼs
	 * unit失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getLeastMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the locale associated with the object
	 * @link http://php.net/manual/ja/intlcalendar.getlocale.php
	 * @param int $localeType <p>
	 * Whether to fetch the actual locale (the locale from which the calendar
	 * data originates, with <b>Locale::ACTUAL_LOCALE</b>) or the
	 * valid locale, i.e., the most specific locale supported by ICU relatively
	 * to the requested locale – see <b>Locale::VALID_LOCALE</b>.
	 * From the most general to the most specific, the locales are ordered in
	 * this fashion – actual locale, valid locale, requested locale.
	 * </p>
	 * @return string A locale string失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getLocale(int $localeType): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the global maximum value for a field
	 * @link http://php.net/manual/ja/intlcalendar.getmaximum.php
	 * @param int $field
	 * @return int An int representing a field value in the fieldʼs
	 * unit失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get minimal number of days the first week in a year or month can have
	 * @link http://php.net/manual/ja/intlcalendar.getminimaldaysinfirstweek.php
	 * @return int An int representing a number of days失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getMinimalDaysInFirstWeek(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the global minimum value for a field
	 * @link http://php.net/manual/ja/intlcalendar.getminimum.php
	 * @param int $field
	 * @return int An int representing a value for the given
	 * field in the fieldʼs unit失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the objectʼs timezone
	 * @link http://php.net/manual/ja/intlcalendar.gettimezone.php
	 * @return IntlTimeZone An <b>IntlTimeZone</b> object corresponding to the one used
	 * internally in this object.
	 */
	public function getTimeZone(): IntlTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the calendar type
	 * @link http://php.net/manual/ja/intlcalendar.gettype.php
	 * @return string A string representing the calendar type, such as
	 * 'gregorian', 'islamic', etc.
	 */
	public function getType(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get time of the day at which weekend begins or ends
	 * @link http://php.net/manual/ja/intlcalendar.getweekendtransition.php
	 * @param string $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return int The number of milliseconds into the day at which the weekend begins or
	 * ends失敗した場合に <b>FALSE</b> を返します.
	 */
	public function getWeekendTransition(string $dayOfWeek): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether the objectʼs time is in Daylight Savings Time
	 * @link http://php.net/manual/ja/intlcalendar.indaylighttime.php
	 * @return bool <b>TRUE</b> if the date is in Daylight Savings Time, <b>FALSE</b> otherwise.
	 * The value <b>FALSE</b> may also be returned on failure, for instance after
	 * specifying invalid field values on non-lenient mode; use exceptions or query
	 * <b>intl_get_error_code</b> to disambiguate.
	 */
	public function inDaylightTime(): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether another calendar is equal but for a different time
	 * @link http://php.net/manual/ja/intlcalendar.isequivalentto.php
	 * @param IntlCalendar $other <p>
	 * The other calendar against which the comparison is to be made.
	 * </p>
	 * @return bool Assuming there are no argument errors, returns <b>TRUE</b> iif the calendars are
	 * equivalent except possibly for their set time.
	 */
	public function isEquivalentTo(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether date/time interpretation is in lenient mode
	 * @link http://php.net/manual/ja/intlcalendar.islenient.php
	 * @return bool A bool representing whether the calendar is set to lenient mode.
	 */
	public function isLenient(): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether a certain date/time is in the weekend
	 * @link http://php.net/manual/ja/intlcalendar.isweekend.php
	 * @param float $date [optional] <p>
	 * An optional timestamp representing the number of milliseconds since the
	 * epoch, excluding leap seconds. If <b>NULL</b>, this objectʼs current time is
	 * used instead.
	 * </p>
	 * @return bool A bool indicating whether the given or this objectʼs time occurs
	 * in a weekend.
	 * </p>
	 * <p>
	 * The value <b>FALSE</b> may also be returned on failure, for instance after giving
	 * a date out of bounds on non-lenient mode; use exceptions or query
	 * <b>intl_get_error_code</b> to disambiguate.
	 */
	public function isWeekend(float $date = NULL): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the day on which the week is deemed to start
	 * @link http://php.net/manual/ja/intlcalendar.setfirstdayofweek.php
	 * @param int $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setFirstDayOfWeek(int $dayOfWeek): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set whether date/time interpretation is to be lenient
	 * @link http://php.net/manual/ja/intlcalendar.setlenient.php
	 * @param string $isLenient <p>
	 * Use <b>TRUE</b> to activate the lenient mode; <b>FALSE</b> otherwise.
	 * </p>
	 * @return ReturnType <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setLenient(string $isLenient): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Set minimal number of days the first week in a year or month can have
	 * @link http://php.net/manual/ja/intlcalendar.setminimaldaysinfirstweek.php
	 * @param int $minimalDays <p>
	 * The number of minimal days to set.
	 * </p>
	 * @return bool <b>TRUE</b> on success, <b>FALSE</b> on failure.
	 */
	public function setMinimalDaysInFirstWeek(int $minimalDays): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Compare time of two IntlCalendar objects for equality
	 * @link http://php.net/manual/ja/intlcalendar.equals.php
	 * @param IntlCalendar $other <p>
	 * The calendar to compare with the primary object.
	 * </p>
	 * @return bool <b>TRUE</b> if the current time of both this and the passed in
	 * <b>IntlCalendar</b> object are the same, or <b>FALSE</b>
	 * otherwise. The value <b>FALSE</b> can also be returned on failure. This can only
	 * happen if bad arguments are passed in. In any case, the two cases can be
	 * distinguished by calling <b>intl_get_error_code</b>.
	 */
	public function equals(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get behavior for handling repeating wall time
	 * @link http://php.net/manual/ja/intlcalendar.getrepeatedwalltimeoption.php
	 * @return int One of the constants <b>IntlCalendar::WALLTIME_FIRST</b> or
	 * <b>IntlCalendar::WALLTIME_LAST</b>.
	 */
	public function getRepeatedWallTimeOption(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get behavior for handling skipped wall time
	 * @link http://php.net/manual/ja/intlcalendar.getskippedwalltimeoption.php
	 * @return int One of the constants <b>IntlCalendar::WALLTIME_FIRST</b>,
	 * <b>IntlCalendar::WALLTIME_LAST</b> or
	 * <b>IntlCalendar::WALLTIME_NEXT_VALID</b>.
	 */
	public function getSkippedWallTimeOption(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set behavior for handling repeating wall times at negative timezone offset transitions
	 * @link http://php.net/manual/ja/intlcalendar.setrepeatedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants <b>IntlCalendar::WALLTIME_FIRST</b> or
	 * <b>IntlCalendar::WALLTIME_LAST</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setRepeatedWallTimeOption(int $wallTimeOption): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set behavior for handling skipped wall times at positive timezone offset transitions
	 * @link http://php.net/manual/ja/intlcalendar.setskippedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants <b>IntlCalendar::WALLTIME_FIRST</b>,
	 * <b>IntlCalendar::WALLTIME_LAST</b> or
	 * <b>IntlCalendar::WALLTIME_NEXT_VALID</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setSkippedWallTimeOption(int $wallTimeOption): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a2)<br/>
	 * Create an IntlCalendar from a DateTime object or string
	 * @link http://php.net/manual/ja/intlcalendar.fromdatetime.php
	 * @param mixed $dateTime <p>
	 * A <b>DateTime</b> object or a string that
	 * can be passed to <b>DateTime::__construct</b>.
	 * </p>
	 * @return IntlCalendar The created <b>IntlCalendar</b> object or <b>NULL</b> in case of
	 * failure. If a string is passed, any exception that occurs
	 * inside the <b>DateTime</b> constructor is propagated.
	 */
	public static function fromDateTime($dateTime): IntlCalendar {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a2)<br/>
	 * Convert an IntlCalendar into a DateTime object
	 * @link http://php.net/manual/ja/intlcalendar.todatetime.php
	 * @return DateTime A <b>DateTime</b> object with the same timezone as this
	 * object (though using PHPʼs database instead of ICUʼs) and the same time,
	 * except for the smaller precision (second precision instead of millisecond).
	 * Returns <b>FALSE</b> on failure.
	 */
	public function toDateTime(): DateTime {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error code on the object
	 * @link http://php.net/manual/ja/intlcalendar.geterrorcode.php
	 * @return int An ICU error code indicating either success, failure or a warning.
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error message on the object
	 * @link http://php.net/manual/ja/intlcalendar.geterrormessage.php
	 * @return string The error message associated with last error that occurred in a function call
	 * on this object, or a string indicating the non-existance of an error.
	 */
	public function getErrorMessage(): string {}

}

/**
 * This class is provided because Unicode contains large number of characters
 * and incorporates the varied writing systems of the world and their incorrect
 * usage can expose programs or systems to possible security attacks using
 * characters similarity.
 * @link http://php.net/manual/ja/class.spoofchecker.php
 */
class Spoofchecker  {
	const SINGLE_SCRIPT_CONFUSABLE = 1;
	const MIXED_SCRIPT_CONFUSABLE = 2;
	const WHOLE_SCRIPT_CONFUSABLE = 4;
	const ANY_CASE = 8;
	const SINGLE_SCRIPT = 16;
	const INVISIBLE = 32;
	const CHAR_LIMIT = 64;


	public function __construct() {}

	/**
	 * @param $text
	 * @param $error [optional]
	 */
	public function isSuspicious($text, &$error) {}

	/**
	 * @param $s1
	 * @param $s2
	 * @param $error [optional]
	 */
	public function areConfusable($s1, $s2, &$error) {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * チェック時に使うロケールを設定する
	 * @link http://php.net/manual/ja/spoofchecker.setallowedlocales.php
	 * @param string $locale_list <p>
	 * </p>
	 * @return void
	 */
	public function setAllowedLocales(string $locale_list): void {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * 実行するチェックを設定する
	 * @link http://php.net/manual/ja/spoofchecker.setchecks.php
	 * @param long $checks <p>
	 * </p>
	 * @return void
	 */
	public function setChecks(long $checks): void {}

}

/**
 * このクラスは、intl 関数の内部でエラーが発生したときに例外を生成するために使います。
 * 例外が生成されるのは、intl.use_exceptions が有効な場合だけです。
 * @link http://php.net/manual/ja/class.intlexception.php
 */
class IntlException extends Exception implements Throwable {
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

/**
 * This class represents iterator objects throughout the intl extension
 * whenever the iterator cannot be identified with any other object provided
 * by the extension. The distinct iterator object used internally by the
 * foreach
 * construct can only be obtained (in the relevant part here) from
 * objects, so objects of this class serve the purpose of providing the hook
 * through which this internal object can be obtained. As a convenience, this
 * class also implements the <b>Iterator</b> interface,
 * allowing the collection of values to be navigated using the methods
 * defined in that interface. Both these methods and the internal iterator
 * objects provided to foreach are backed by the same
 * state (e.g. the position of the iterator and its current value).
 * @link http://php.net/manual/ja/class.intliterator.php
 */
class IntlIterator implements Iterator, Traversable {

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Get the current element
	 * @link http://php.net/manual/ja/intliterator.current.php
	 * @return ReturnType
	 */
	public function current(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Get the current key
	 * @link http://php.net/manual/ja/intliterator.key.php
	 * @return ReturnType
	 */
	public function key(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Move forward to the next element
	 * @link http://php.net/manual/ja/intliterator.next.php
	 * @return ReturnType
	 */
	public function next(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Rewind the iterator to the first element
	 * @link http://php.net/manual/ja/intliterator.rewind.php
	 * @return ReturnType
	 */
	public function rewind(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Check if current position is valid
	 * @link http://php.net/manual/ja/intliterator.valid.php
	 * @return ReturnType
	 */
	public function valid(): ReturnType {}

}

/**
 * A &quot;break iterator&quot; is an ICU object that exposes methods for locating
 * boundaries in text (e.g. word or sentence boundaries).
 * The PHP <b>IntlBreakIterator</b> serves as the base class
 * for all types of ICU break iterators. Where extra functionality is
 * available, the intl extension may expose the ICU break iterator with
 * suitable subclasses, such as
 * <b>IntlRuleBasedBreakIterator</b> or
 * <b>IntlCodePointBreaIterator</b>.
 * @link http://php.net/manual/ja/class.intlbreakiterator.php
 */
class IntlBreakIterator implements Traversable {
	const DONE = -1;
	const WORD_NONE = 0;
	const WORD_NONE_LIMIT = 100;
	const WORD_NUMBER = 100;
	const WORD_NUMBER_LIMIT = 200;
	const WORD_LETTER = 200;
	const WORD_LETTER_LIMIT = 300;
	const WORD_KANA = 300;
	const WORD_KANA_LIMIT = 400;
	const WORD_IDEO = 400;
	const WORD_IDEO_LIMIT = 500;
	const LINE_SOFT = 0;
	const LINE_SOFT_LIMIT = 100;
	const LINE_HARD = 100;
	const LINE_HARD_LIMIT = 200;
	const SENTENCE_TERM = 0;
	const SENTENCE_TERM_LIMIT = 100;
	const SENTENCE_SEP = 100;
	const SENTENCE_SEP_LIMIT = 200;


	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * インスタンス化をできないようにするための private なコンストラクタ
	 * @link http://php.net/manual/ja/intlbreakiterator.construct.php
	 */
	private function __construct() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 単語の区切り用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createwordinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createWordInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 論理的に可能な改行用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createlineinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createLineInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 文字シーケンスの組み合わせの境界用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createcharacterinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createCharacterInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 文末用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createsentenceinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createSentenceInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * タイトル文字の区切り用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createtitleinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createTitleInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * コードポイントの境界用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createcodepointinstance.php
	 * @return ReturnType
	 */
	public static function createCodePointInstance(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * スキャンするテキストを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.gettext.php
	 * @return ReturnType
	 */
	public function getText(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * スキャンするテキストを設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.settext.php
	 * @param string $_text_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function setText(string $_text_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * テキスト内の最初の文字を場所を取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.first.php
	 * @return ReturnType
	 */
	public function first(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータの位置を、最後の文字より後に設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.last.php
	 * @return ReturnType
	 */
	public function last(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータの位置を、現在位置の直前の境界に設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.previous.php
	 * @return ReturnType
	 */
	public function previous(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータを次の境界まで進める
	 * @link http://php.net/manual/ja/intlbreakiterator.next.php
	 * @param string $_offset_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function next(string $_offset_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 現在位置のインデックスを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.current.php
	 * @return ReturnType
	 */
	public function current(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 指定したオフセット以降の最初の境界までイテレータを進める
	 * @link http://php.net/manual/ja/intlbreakiterator.following.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function following(string $_offset_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータの位置を、指定したオフセット以前の最初の境界に設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.preceding.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function preceding(string $_offset_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * あるオフセットが境界のオフセットかどうかを調べる
	 * @link http://php.net/manual/ja/intlbreakiterator.isboundary.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function isBoundary(string $_offset_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * このオブジェクトに関連づけられたロケールを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.getlocale.php
	 * @param string $_locale_type_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getLocale(string $_locale_type_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 境界と境界の間の navigating fragments 用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.getpartsiterator.php
	 * @param string $_key_type_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getPartsIterator(string $_key_type_ = null): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * このオブジェクトの直近のエラーコードを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrorcode.php
	 * @return ReturnType
	 */
	public function getErrorCode(): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * このオブジェクトの直近のエラーメッセージを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrormessage.php
	 * @return ReturnType
	 */
	public function getErrorMessage(): ReturnType {}

}

/**
 * A subclass of <b>IntlBreakIterator</b> that encapsulates
 * ICU break iterators whose behavior is specified using a set of rules. This
 * is the most common kind of break iterators.
 * @link http://php.net/manual/ja/class.intlrulebasedbreakiterator.php
 */
class IntlRuleBasedBreakIterator extends IntlBreakIterator implements Traversable {
	const DONE = -1;
	const WORD_NONE = 0;
	const WORD_NONE_LIMIT = 100;
	const WORD_NUMBER = 100;
	const WORD_NUMBER_LIMIT = 200;
	const WORD_LETTER = 200;
	const WORD_LETTER_LIMIT = 300;
	const WORD_KANA = 300;
	const WORD_KANA_LIMIT = 400;
	const WORD_IDEO = 400;
	const WORD_IDEO_LIMIT = 500;
	const LINE_SOFT = 0;
	const LINE_SOFT_LIMIT = 100;
	const LINE_HARD = 100;
	const LINE_HARD_LIMIT = 200;
	const SENTENCE_TERM = 0;
	const SENTENCE_TERM_LIMIT = 100;
	const SENTENCE_SEP = 100;
	const SENTENCE_SEP_LIMIT = 200;


	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Create iterator from ruleset
	 * @link http://php.net/manual/ja/intlrulebasedbreakiterator.construct.php
	 * @param string $rules
	 * @param string $areCompiled [optional]
	 */
	public function __construct(string $rules, string $areCompiled = null) {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Get the rule set used to create this object
	 * @link http://php.net/manual/ja/intlrulebasedbreakiterator.getrules.php
	 * @return ReturnType
	 */
	public function getRules(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Get the largest status value from the break rules that determined the current break position
	 * @link http://php.net/manual/ja/intlrulebasedbreakiterator.getrulestatus.php
	 * @return ReturnType
	 */
	public function getRuleStatus(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Get the status values from the break rules that determined the current break position
	 * @link http://php.net/manual/ja/intlrulebasedbreakiterator.getrulestatusvec.php
	 * @return ReturnType
	 */
	public function getRuleStatusVec(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Get the binary form of compiled rules
	 * @link http://php.net/manual/ja/intlrulebasedbreakiterator.getbinaryrules.php
	 * @return ReturnType
	 */
	public function getBinaryRules(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 単語の区切り用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createwordinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createWordInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 論理的に可能な改行用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createlineinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createLineInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 文字シーケンスの組み合わせの境界用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createcharacterinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createCharacterInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 文末用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createsentenceinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createSentenceInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * タイトル文字の区切り用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createtitleinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createTitleInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * コードポイントの境界用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createcodepointinstance.php
	 * @return ReturnType
	 */
	public static function createCodePointInstance(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * スキャンするテキストを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.gettext.php
	 * @return ReturnType
	 */
	public function getText(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * スキャンするテキストを設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.settext.php
	 * @param string $_text_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function setText(string $_text_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * テキスト内の最初の文字を場所を取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.first.php
	 * @return ReturnType
	 */
	public function first(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータの位置を、最後の文字より後に設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.last.php
	 * @return ReturnType
	 */
	public function last(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータの位置を、現在位置の直前の境界に設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.previous.php
	 * @return ReturnType
	 */
	public function previous(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータを次の境界まで進める
	 * @link http://php.net/manual/ja/intlbreakiterator.next.php
	 * @param string $_offset_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function next(string $_offset_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 現在位置のインデックスを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.current.php
	 * @return ReturnType
	 */
	public function current(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 指定したオフセット以降の最初の境界までイテレータを進める
	 * @link http://php.net/manual/ja/intlbreakiterator.following.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function following(string $_offset_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータの位置を、指定したオフセット以前の最初の境界に設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.preceding.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function preceding(string $_offset_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * あるオフセットが境界のオフセットかどうかを調べる
	 * @link http://php.net/manual/ja/intlbreakiterator.isboundary.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function isBoundary(string $_offset_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * このオブジェクトに関連づけられたロケールを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.getlocale.php
	 * @param string $_locale_type_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getLocale(string $_locale_type_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 境界と境界の間の navigating fragments 用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.getpartsiterator.php
	 * @param string $_key_type_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getPartsIterator(string $_key_type_ = null): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * このオブジェクトの直近のエラーコードを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrorcode.php
	 * @return ReturnType
	 */
	public function getErrorCode(): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * このオブジェクトの直近のエラーメッセージを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrormessage.php
	 * @return ReturnType
	 */
	public function getErrorMessage(): ReturnType {}

}

/**
 * This break iterator
 * identifies the boundaries between UTF-8 code points.
 * @link http://php.net/manual/ja/class.intlcodepointbreakiterator.php
 */
class IntlCodePointBreakIterator extends IntlBreakIterator implements Traversable {
	const DONE = -1;
	const WORD_NONE = 0;
	const WORD_NONE_LIMIT = 100;
	const WORD_NUMBER = 100;
	const WORD_NUMBER_LIMIT = 200;
	const WORD_LETTER = 200;
	const WORD_LETTER_LIMIT = 300;
	const WORD_KANA = 300;
	const WORD_KANA_LIMIT = 400;
	const WORD_IDEO = 400;
	const WORD_IDEO_LIMIT = 500;
	const LINE_SOFT = 0;
	const LINE_SOFT_LIMIT = 100;
	const LINE_HARD = 100;
	const LINE_HARD_LIMIT = 200;
	const SENTENCE_TERM = 0;
	const SENTENCE_TERM_LIMIT = 100;
	const SENTENCE_SEP = 100;
	const SENTENCE_SEP_LIMIT = 200;


	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Get last code point passed over after advancing or receding the iterator
	 * @link http://php.net/manual/ja/intlcodepointbreakiterator.getlastcodepoint.php
	 * @return ReturnType
	 */
	public function getLastCodePoint(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * インスタンス化をできないようにするための private なコンストラクタ
	 * @link http://php.net/manual/ja/intlbreakiterator.construct.php
	 */
	private function __construct() {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 単語の区切り用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createwordinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createWordInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 論理的に可能な改行用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createlineinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createLineInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 文字シーケンスの組み合わせの境界用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createcharacterinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createCharacterInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 文末用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createsentenceinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createSentenceInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * タイトル文字の区切り用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createtitleinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createTitleInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * コードポイントの境界用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.createcodepointinstance.php
	 * @return ReturnType
	 */
	public static function createCodePointInstance(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * スキャンするテキストを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.gettext.php
	 * @return ReturnType
	 */
	public function getText(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * スキャンするテキストを設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.settext.php
	 * @param string $_text_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function setText(string $_text_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * テキスト内の最初の文字を場所を取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.first.php
	 * @return ReturnType
	 */
	public function first(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータの位置を、最後の文字より後に設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.last.php
	 * @return ReturnType
	 */
	public function last(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータの位置を、現在位置の直前の境界に設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.previous.php
	 * @return ReturnType
	 */
	public function previous(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータを次の境界まで進める
	 * @link http://php.net/manual/ja/intlbreakiterator.next.php
	 * @param string $_offset_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function next(string $_offset_ = null): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 現在位置のインデックスを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.current.php
	 * @return ReturnType
	 */
	public function current(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 指定したオフセット以降の最初の境界までイテレータを進める
	 * @link http://php.net/manual/ja/intlbreakiterator.following.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function following(string $_offset_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * イテレータの位置を、指定したオフセット以前の最初の境界に設定する
	 * @link http://php.net/manual/ja/intlbreakiterator.preceding.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function preceding(string $_offset_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * あるオフセットが境界のオフセットかどうかを調べる
	 * @link http://php.net/manual/ja/intlbreakiterator.isboundary.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function isBoundary(string $_offset_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * このオブジェクトに関連づけられたロケールを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.getlocale.php
	 * @param string $_locale_type_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getLocale(string $_locale_type_): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * 境界と境界の間の navigating fragments 用にイテレータを作る
	 * @link http://php.net/manual/ja/intlbreakiterator.getpartsiterator.php
	 * @param string $_key_type_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getPartsIterator(string $_key_type_ = null): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * このオブジェクトの直近のエラーコードを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrorcode.php
	 * @return ReturnType
	 */
	public function getErrorCode(): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * このオブジェクトの直近のエラーメッセージを取得する
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrormessage.php
	 * @return ReturnType
	 */
	public function getErrorMessage(): ReturnType {}

}

/**
 * Objects of this class can be obtained from
 * <b>IntlBreakIterator</b> objects. While the break
 * iterators provide a sequence of boundary positions when iterated,
 * <b>IntlPartsIterator</b> objects provide, as a
 * convenience, the text fragments comprehended between two successive
 * boundaries.
 * @link http://php.net/manual/ja/class.intlpartsiterator.php
 */
class IntlPartsIterator extends IntlIterator implements Traversable, Iterator {
	const KEY_SEQUENTIAL = 0;
	const KEY_LEFT = 1;
	const KEY_RIGHT = 2;


	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Get IntlBreakIterator backing this parts iterator
	 * @link http://php.net/manual/ja/intlpartsiterator.getbreakiterator.php
	 * @return ReturnType
	 */
	public function getBreakIterator(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Get the current element
	 * @link http://php.net/manual/ja/intliterator.current.php
	 * @return ReturnType
	 */
	public function current(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Get the current key
	 * @link http://php.net/manual/ja/intliterator.key.php
	 * @return ReturnType
	 */
	public function key(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Move forward to the next element
	 * @link http://php.net/manual/ja/intliterator.next.php
	 * @return ReturnType
	 */
	public function next(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Rewind the iterator to the first element
	 * @link http://php.net/manual/ja/intliterator.rewind.php
	 * @return ReturnType
	 */
	public function rewind(): ReturnType {}

	/**
	 * (バージョン情報なし。おそらく SVN 版にしか存在しないでしょう)<br/>
	 * Check if current position is valid
	 * @link http://php.net/manual/ja/intliterator.valid.php
	 * @return ReturnType
	 */
	public function valid(): ReturnType {}

}

/**
 * @link http://php.net/manual/ja/class.uconverter.php
 */
class UConverter  {
	const REASON_UNASSIGNED = 0;
	const REASON_ILLEGAL = 1;
	const REASON_IRREGULAR = 2;
	const REASON_RESET = 3;
	const REASON_CLOSE = 4;
	const REASON_CLONE = 5;
	const UNSUPPORTED_CONVERTER = -1;
	const SBCS = 0;
	const DBCS = 1;
	const MBCS = 2;
	const LATIN_1 = 3;
	const UTF8 = 4;
	const UTF16_BigEndian = 5;
	const UTF16_LittleEndian = 6;
	const UTF32_BigEndian = 7;
	const UTF32_LittleEndian = 8;
	const EBCDIC_STATEFUL = 9;
	const ISO_2022 = 10;
	const LMBCS_1 = 11;
	const LMBCS_2 = 12;
	const LMBCS_3 = 13;
	const LMBCS_4 = 14;
	const LMBCS_5 = 15;
	const LMBCS_6 = 16;
	const LMBCS_8 = 17;
	const LMBCS_11 = 18;
	const LMBCS_16 = 19;
	const LMBCS_17 = 20;
	const LMBCS_18 = 21;
	const LMBCS_19 = 22;
	const LMBCS_LAST = 22;
	const HZ = 23;
	const SCSU = 24;
	const ISCII = 25;
	const US_ASCII = 26;
	const UTF7 = 27;
	const BOCU1 = 28;
	const UTF16 = 29;
	const UTF32 = 30;
	const CESU8 = 31;
	const IMAP_MAILBOX = 32;


	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * UConverter オブジェクトを作る
	 * @link http://php.net/manual/ja/uconverter.construct.php
	 * @param string $destination_encoding [optional] <p>
	 * </p>
	 * @param string $source_encoding [optional] <p>
	 * </p>
	 */
	public function __construct(string $destination_encoding = null, string $source_encoding = null) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 変換元エンコーディングを設定する
	 * @link http://php.net/manual/ja/uconverter.setsourceencoding.php
	 * @param string $encoding <p>
	 * </p>
	 * @return void
	 */
	public function setSourceEncoding(string $encoding): void {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 変換先エンコーディングを設定する
	 * @link http://php.net/manual/ja/uconverter.setdestinationencoding.php
	 * @param string $encoding <p>
	 * </p>
	 * @return void
	 */
	public function setDestinationEncoding(string $encoding): void {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 変換元エンコーディングを取得する
	 * @link http://php.net/manual/ja/uconverter.getsourceencoding.php
	 * @return string
	 */
	public function getSourceEncoding(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 変換先エンコーディングを取得する
	 * @link http://php.net/manual/ja/uconverter.getdestinationencoding.php
	 * @return string
	 */
	public function getDestinationEncoding(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 変換元のコンバーターの型を取得する
	 * @link http://php.net/manual/ja/uconverter.getsourcetype.php
	 * @return integer
	 */
	public function getSourceType(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 変換先のコンバーターの型を取得する
	 * @link http://php.net/manual/ja/uconverter.getdestinationtype.php
	 * @return integer
	 */
	public function getDestinationType(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 置換文字を取得する
	 * @link http://php.net/manual/ja/uconverter.getsubstchars.php
	 * @return string
	 */
	public function getSubstChars(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 置換文字を設定する
	 * @link http://php.net/manual/ja/uconverter.setsubstchars.php
	 * @param string $chars <p>
	 * </p>
	 * @return void
	 */
	public function setSubstChars(string $chars): void {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * デフォルトの "to" コールバック関数
	 * @link http://php.net/manual/ja/uconverter.toucallback.php
	 * @param integer $reason <p>
	 * </p>
	 * @param string $source <p>
	 * </p>
	 * @param string $codeUnits <p>
	 * </p>
	 * @param integer $error <p>
	 * </p>
	 * @return mixed
	 */
	public function toUCallback(integer $reason, string $source, string $codeUnits, integer &$error) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * デフォルトの "from" コールバック関数
	 * @link http://php.net/manual/ja/uconverter.fromucallback.php
	 * @param integer $reason <p>
	 * </p>
	 * @param string $source <p>
	 * </p>
	 * @param string $codePoint <p>
	 * </p>
	 * @param integer $error <p>
	 * </p>
	 * @return mixed
	 */
	public function fromUCallback(integer $reason, string $source, string $codePoint, integer &$error) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * ある文字セットから別の文字セットに文字列を変換する
	 * @link http://php.net/manual/ja/uconverter.convert.php
	 * @param string $str <p>
	 * </p>
	 * @param bool $reverse [optional] <p>
	 * </p>
	 * @return string
	 */
	public function convert(string $str, bool $reverse = null): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * ある文字セットから別の文字セットに文字列を変換する
	 * @link http://php.net/manual/ja/uconverter.transcode.php
	 * @param string $str <p>
	 * </p>
	 * @param string $toEncoding <p>
	 * </p>
	 * @param string $fromEncoding <p>
	 * </p>
	 * @param array $options [optional] <p>
	 * </p>
	 * @return string
	 */
	public static function transcode(string $str, string $toEncoding, string $fromEncoding, array $options = null): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 直近のエラーコードを取得する
	 * @link http://php.net/manual/ja/uconverter.geterrorcode.php
	 * @return integer
	 */
	public function getErrorCode(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 直近のエラーメッセージを取得する
	 * @link http://php.net/manual/ja/uconverter.geterrormessage.php
	 * @return string
	 */
	public function getErrorMessage(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * コールバックの理由を表す文字列を取得する
	 * @link http://php.net/manual/ja/uconverter.reasontext.php
	 * @param integer $reason [optional] <p>
	 * </p>
	 * @return string
	 */
	public static function reasonText(integer $reason = null): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 利用可能なコンバーター名を取得する
	 * @link http://php.net/manual/ja/uconverter.getavailable.php
	 * @return array
	 */
	public static function getAvailable(): array {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * 指定した名前のエイリアスを取得する
	 * @link http://php.net/manual/ja/uconverter.getaliases.php
	 * @param string $name [optional] <p>
	 * </p>
	 * @return array
	 */
	public static function getAliases(string $name = null): array {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * コンバーター名に対応する標準を取得する
	 * @link http://php.net/manual/ja/uconverter.getstandards.php
	 * @return array
	 */
	public static function getStandards(): array {}

}

/**
 * <b>IntlChar</b> provides access to a number of utility
 * methods that can be used to access information about Unicode characters.
 * @link http://php.net/manual/ja/class.intlchar.php
 */
class IntlChar  {
	const UNICODE_VERSION = 7.0;
	const CODEPOINT_MIN = 0;
	const CODEPOINT_MAX = 1114111;
	const FOLD_CASE_DEFAULT = 0;
	const FOLD_CASE_EXCLUDE_SPECIAL_I = 1;
	const NO_NUMERIC_VALUE = -123456789;
	const PROPERTY_ALPHABETIC = 0;
	const PROPERTY_BINARY_START = 0;
	const PROPERTY_ASCII_HEX_DIGIT = 1;
	const PROPERTY_BIDI_CONTROL = 2;
	const PROPERTY_BIDI_MIRRORED = 3;
	const PROPERTY_DASH = 4;
	const PROPERTY_DEFAULT_IGNORABLE_CODE_POINT = 5;
	const PROPERTY_DEPRECATED = 6;
	const PROPERTY_DIACRITIC = 7;
	const PROPERTY_EXTENDER = 8;
	const PROPERTY_FULL_COMPOSITION_EXCLUSION = 9;
	const PROPERTY_GRAPHEME_BASE = 10;
	const PROPERTY_GRAPHEME_EXTEND = 11;
	const PROPERTY_GRAPHEME_LINK = 12;
	const PROPERTY_HEX_DIGIT = 13;
	const PROPERTY_HYPHEN = 14;
	const PROPERTY_ID_CONTINUE = 15;
	const PROPERTY_ID_START = 16;
	const PROPERTY_IDEOGRAPHIC = 17;
	const PROPERTY_IDS_BINARY_OPERATOR = 18;
	const PROPERTY_IDS_TRINARY_OPERATOR = 19;
	const PROPERTY_JOIN_CONTROL = 20;
	const PROPERTY_LOGICAL_ORDER_EXCEPTION = 21;
	const PROPERTY_LOWERCASE = 22;
	const PROPERTY_MATH = 23;
	const PROPERTY_NONCHARACTER_CODE_POINT = 24;
	const PROPERTY_QUOTATION_MARK = 25;
	const PROPERTY_RADICAL = 26;
	const PROPERTY_SOFT_DOTTED = 27;
	const PROPERTY_TERMINAL_PUNCTUATION = 28;
	const PROPERTY_UNIFIED_IDEOGRAPH = 29;
	const PROPERTY_UPPERCASE = 30;
	const PROPERTY_WHITE_SPACE = 31;
	const PROPERTY_XID_CONTINUE = 32;
	const PROPERTY_XID_START = 33;
	const PROPERTY_CASE_SENSITIVE = 34;
	const PROPERTY_S_TERM = 35;
	const PROPERTY_VARIATION_SELECTOR = 36;
	const PROPERTY_NFD_INERT = 37;
	const PROPERTY_NFKD_INERT = 38;
	const PROPERTY_NFC_INERT = 39;
	const PROPERTY_NFKC_INERT = 40;
	const PROPERTY_SEGMENT_STARTER = 41;
	const PROPERTY_PATTERN_SYNTAX = 42;
	const PROPERTY_PATTERN_WHITE_SPACE = 43;
	const PROPERTY_POSIX_ALNUM = 44;
	const PROPERTY_POSIX_BLANK = 45;
	const PROPERTY_POSIX_GRAPH = 46;
	const PROPERTY_POSIX_PRINT = 47;
	const PROPERTY_POSIX_XDIGIT = 48;
	const PROPERTY_CASED = 49;
	const PROPERTY_CASE_IGNORABLE = 50;
	const PROPERTY_CHANGES_WHEN_LOWERCASED = 51;
	const PROPERTY_CHANGES_WHEN_UPPERCASED = 52;
	const PROPERTY_CHANGES_WHEN_TITLECASED = 53;
	const PROPERTY_CHANGES_WHEN_CASEFOLDED = 54;
	const PROPERTY_CHANGES_WHEN_CASEMAPPED = 55;
	const PROPERTY_CHANGES_WHEN_NFKC_CASEFOLDED = 56;
	const PROPERTY_BINARY_LIMIT = 57;
	const PROPERTY_BIDI_CLASS = 4096;
	const PROPERTY_INT_START = 4096;
	const PROPERTY_BLOCK = 4097;
	const PROPERTY_CANONICAL_COMBINING_CLASS = 4098;
	const PROPERTY_DECOMPOSITION_TYPE = 4099;
	const PROPERTY_EAST_ASIAN_WIDTH = 4100;
	const PROPERTY_GENERAL_CATEGORY = 4101;
	const PROPERTY_JOINING_GROUP = 4102;
	const PROPERTY_JOINING_TYPE = 4103;
	const PROPERTY_LINE_BREAK = 4104;
	const PROPERTY_NUMERIC_TYPE = 4105;
	const PROPERTY_SCRIPT = 4106;
	const PROPERTY_HANGUL_SYLLABLE_TYPE = 4107;
	const PROPERTY_NFD_QUICK_CHECK = 4108;
	const PROPERTY_NFKD_QUICK_CHECK = 4109;
	const PROPERTY_NFC_QUICK_CHECK = 4110;
	const PROPERTY_NFKC_QUICK_CHECK = 4111;
	const PROPERTY_LEAD_CANONICAL_COMBINING_CLASS = 4112;
	const PROPERTY_TRAIL_CANONICAL_COMBINING_CLASS = 4113;
	const PROPERTY_GRAPHEME_CLUSTER_BREAK = 4114;
	const PROPERTY_SENTENCE_BREAK = 4115;
	const PROPERTY_WORD_BREAK = 4116;
	const PROPERTY_BIDI_PAIRED_BRACKET_TYPE = 4117;
	const PROPERTY_INT_LIMIT = 4118;
	const PROPERTY_GENERAL_CATEGORY_MASK = 8192;
	const PROPERTY_MASK_START = 8192;
	const PROPERTY_MASK_LIMIT = 8193;
	const PROPERTY_NUMERIC_VALUE = 12288;
	const PROPERTY_DOUBLE_START = 12288;
	const PROPERTY_DOUBLE_LIMIT = 12289;
	const PROPERTY_AGE = 16384;
	const PROPERTY_STRING_START = 16384;
	const PROPERTY_BIDI_MIRRORING_GLYPH = 16385;
	const PROPERTY_CASE_FOLDING = 16386;
	const PROPERTY_ISO_COMMENT = 16387;
	const PROPERTY_LOWERCASE_MAPPING = 16388;
	const PROPERTY_NAME = 16389;
	const PROPERTY_SIMPLE_CASE_FOLDING = 16390;
	const PROPERTY_SIMPLE_LOWERCASE_MAPPING = 16391;
	const PROPERTY_SIMPLE_TITLECASE_MAPPING = 16392;
	const PROPERTY_SIMPLE_UPPERCASE_MAPPING = 16393;
	const PROPERTY_TITLECASE_MAPPING = 16394;
	const PROPERTY_UNICODE_1_NAME = 16395;
	const PROPERTY_UPPERCASE_MAPPING = 16396;
	const PROPERTY_BIDI_PAIRED_BRACKET = 16397;
	const PROPERTY_STRING_LIMIT = 16398;
	const PROPERTY_SCRIPT_EXTENSIONS = 28672;
	const PROPERTY_OTHER_PROPERTY_START = 28672;
	const PROPERTY_OTHER_PROPERTY_LIMIT = 28673;
	const PROPERTY_INVALID_CODE = -1;
	const CHAR_CATEGORY_UNASSIGNED = 0;
	const CHAR_CATEGORY_GENERAL_OTHER_TYPES = 0;
	const CHAR_CATEGORY_UPPERCASE_LETTER = 1;
	const CHAR_CATEGORY_LOWERCASE_LETTER = 2;
	const CHAR_CATEGORY_TITLECASE_LETTER = 3;
	const CHAR_CATEGORY_MODIFIER_LETTER = 4;
	const CHAR_CATEGORY_OTHER_LETTER = 5;
	const CHAR_CATEGORY_NON_SPACING_MARK = 6;
	const CHAR_CATEGORY_ENCLOSING_MARK = 7;
	const CHAR_CATEGORY_COMBINING_SPACING_MARK = 8;
	const CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER = 9;
	const CHAR_CATEGORY_LETTER_NUMBER = 10;
	const CHAR_CATEGORY_OTHER_NUMBER = 11;
	const CHAR_CATEGORY_SPACE_SEPARATOR = 12;
	const CHAR_CATEGORY_LINE_SEPARATOR = 13;
	const CHAR_CATEGORY_PARAGRAPH_SEPARATOR = 14;
	const CHAR_CATEGORY_CONTROL_CHAR = 15;
	const CHAR_CATEGORY_FORMAT_CHAR = 16;
	const CHAR_CATEGORY_PRIVATE_USE_CHAR = 17;
	const CHAR_CATEGORY_SURROGATE = 18;
	const CHAR_CATEGORY_DASH_PUNCTUATION = 19;
	const CHAR_CATEGORY_START_PUNCTUATION = 20;
	const CHAR_CATEGORY_END_PUNCTUATION = 21;
	const CHAR_CATEGORY_CONNECTOR_PUNCTUATION = 22;
	const CHAR_CATEGORY_OTHER_PUNCTUATION = 23;
	const CHAR_CATEGORY_MATH_SYMBOL = 24;
	const CHAR_CATEGORY_CURRENCY_SYMBOL = 25;
	const CHAR_CATEGORY_MODIFIER_SYMBOL = 26;
	const CHAR_CATEGORY_OTHER_SYMBOL = 27;
	const CHAR_CATEGORY_INITIAL_PUNCTUATION = 28;
	const CHAR_CATEGORY_FINAL_PUNCTUATION = 29;
	const CHAR_CATEGORY_CHAR_CATEGORY_COUNT = 30;
	const CHAR_DIRECTION_LEFT_TO_RIGHT = 0;
	const CHAR_DIRECTION_RIGHT_TO_LEFT = 1;
	const CHAR_DIRECTION_EUROPEAN_NUMBER = 2;
	const CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR = 3;
	const CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR = 4;
	const CHAR_DIRECTION_ARABIC_NUMBER = 5;
	const CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR = 6;
	const CHAR_DIRECTION_BLOCK_SEPARATOR = 7;
	const CHAR_DIRECTION_SEGMENT_SEPARATOR = 8;
	const CHAR_DIRECTION_WHITE_SPACE_NEUTRAL = 9;
	const CHAR_DIRECTION_OTHER_NEUTRAL = 10;
	const CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING = 11;
	const CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE = 12;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC = 13;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING = 14;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE = 15;
	const CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT = 16;
	const CHAR_DIRECTION_DIR_NON_SPACING_MARK = 17;
	const CHAR_DIRECTION_BOUNDARY_NEUTRAL = 18;
	const CHAR_DIRECTION_FIRST_STRONG_ISOLATE = 19;
	const CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE = 20;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE = 21;
	const CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE = 22;
	const CHAR_DIRECTION_CHAR_DIRECTION_COUNT = 23;
	const BLOCK_CODE_NO_BLOCK = 0;
	const BLOCK_CODE_BASIC_LATIN = 1;
	const BLOCK_CODE_LATIN_1_SUPPLEMENT = 2;
	const BLOCK_CODE_LATIN_EXTENDED_A = 3;
	const BLOCK_CODE_LATIN_EXTENDED_B = 4;
	const BLOCK_CODE_IPA_EXTENSIONS = 5;
	const BLOCK_CODE_SPACING_MODIFIER_LETTERS = 6;
	const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS = 7;
	const BLOCK_CODE_GREEK = 8;
	const BLOCK_CODE_CYRILLIC = 9;
	const BLOCK_CODE_ARMENIAN = 10;
	const BLOCK_CODE_HEBREW = 11;
	const BLOCK_CODE_ARABIC = 12;
	const BLOCK_CODE_SYRIAC = 13;
	const BLOCK_CODE_THAANA = 14;
	const BLOCK_CODE_DEVANAGARI = 15;
	const BLOCK_CODE_BENGALI = 16;
	const BLOCK_CODE_GURMUKHI = 17;
	const BLOCK_CODE_GUJARATI = 18;
	const BLOCK_CODE_ORIYA = 19;
	const BLOCK_CODE_TAMIL = 20;
	const BLOCK_CODE_TELUGU = 21;
	const BLOCK_CODE_KANNADA = 22;
	const BLOCK_CODE_MALAYALAM = 23;
	const BLOCK_CODE_SINHALA = 24;
	const BLOCK_CODE_THAI = 25;
	const BLOCK_CODE_LAO = 26;
	const BLOCK_CODE_TIBETAN = 27;
	const BLOCK_CODE_MYANMAR = 28;
	const BLOCK_CODE_GEORGIAN = 29;
	const BLOCK_CODE_HANGUL_JAMO = 30;
	const BLOCK_CODE_ETHIOPIC = 31;
	const BLOCK_CODE_CHEROKEE = 32;
	const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS = 33;
	const BLOCK_CODE_OGHAM = 34;
	const BLOCK_CODE_RUNIC = 35;
	const BLOCK_CODE_KHMER = 36;
	const BLOCK_CODE_MONGOLIAN = 37;
	const BLOCK_CODE_LATIN_EXTENDED_ADDITIONAL = 38;
	const BLOCK_CODE_GREEK_EXTENDED = 39;
	const BLOCK_CODE_GENERAL_PUNCTUATION = 40;
	const BLOCK_CODE_SUPERSCRIPTS_AND_SUBSCRIPTS = 41;
	const BLOCK_CODE_CURRENCY_SYMBOLS = 42;
	const BLOCK_CODE_COMBINING_MARKS_FOR_SYMBOLS = 43;
	const BLOCK_CODE_LETTERLIKE_SYMBOLS = 44;
	const BLOCK_CODE_NUMBER_FORMS = 45;
	const BLOCK_CODE_ARROWS = 46;
	const BLOCK_CODE_MATHEMATICAL_OPERATORS = 47;
	const BLOCK_CODE_MISCELLANEOUS_TECHNICAL = 48;
	const BLOCK_CODE_CONTROL_PICTURES = 49;
	const BLOCK_CODE_OPTICAL_CHARACTER_RECOGNITION = 50;
	const BLOCK_CODE_ENCLOSED_ALPHANUMERICS = 51;
	const BLOCK_CODE_BOX_DRAWING = 52;
	const BLOCK_CODE_BLOCK_ELEMENTS = 53;
	const BLOCK_CODE_GEOMETRIC_SHAPES = 54;
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS = 55;
	const BLOCK_CODE_DINGBATS = 56;
	const BLOCK_CODE_BRAILLE_PATTERNS = 57;
	const BLOCK_CODE_CJK_RADICALS_SUPPLEMENT = 58;
	const BLOCK_CODE_KANGXI_RADICALS = 59;
	const BLOCK_CODE_IDEOGRAPHIC_DESCRIPTION_CHARACTERS = 60;
	const BLOCK_CODE_CJK_SYMBOLS_AND_PUNCTUATION = 61;
	const BLOCK_CODE_HIRAGANA = 62;
	const BLOCK_CODE_KATAKANA = 63;
	const BLOCK_CODE_BOPOMOFO = 64;
	const BLOCK_CODE_HANGUL_COMPATIBILITY_JAMO = 65;
	const BLOCK_CODE_KANBUN = 66;
	const BLOCK_CODE_BOPOMOFO_EXTENDED = 67;
	const BLOCK_CODE_ENCLOSED_CJK_LETTERS_AND_MONTHS = 68;
	const BLOCK_CODE_CJK_COMPATIBILITY = 69;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A = 70;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS = 71;
	const BLOCK_CODE_YI_SYLLABLES = 72;
	const BLOCK_CODE_YI_RADICALS = 73;
	const BLOCK_CODE_HANGUL_SYLLABLES = 74;
	const BLOCK_CODE_HIGH_SURROGATES = 75;
	const BLOCK_CODE_HIGH_PRIVATE_USE_SURROGATES = 76;
	const BLOCK_CODE_LOW_SURROGATES = 77;
	const BLOCK_CODE_PRIVATE_USE_AREA = 78;
	const BLOCK_CODE_PRIVATE_USE = 78;
	const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS = 79;
	const BLOCK_CODE_ALPHABETIC_PRESENTATION_FORMS = 80;
	const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_A = 81;
	const BLOCK_CODE_COMBINING_HALF_MARKS = 82;
	const BLOCK_CODE_CJK_COMPATIBILITY_FORMS = 83;
	const BLOCK_CODE_SMALL_FORM_VARIANTS = 84;
	const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_B = 85;
	const BLOCK_CODE_SPECIALS = 86;
	const BLOCK_CODE_HALFWIDTH_AND_FULLWIDTH_FORMS = 87;
	const BLOCK_CODE_OLD_ITALIC = 88;
	const BLOCK_CODE_GOTHIC = 89;
	const BLOCK_CODE_DESERET = 90;
	const BLOCK_CODE_BYZANTINE_MUSICAL_SYMBOLS = 91;
	const BLOCK_CODE_MUSICAL_SYMBOLS = 92;
	const BLOCK_CODE_MATHEMATICAL_ALPHANUMERIC_SYMBOLS = 93;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B = 94;
	const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT = 95;
	const BLOCK_CODE_TAGS = 96;
	const BLOCK_CODE_CYRILLIC_SUPPLEMENT = 97;
	const BLOCK_CODE_CYRILLIC_SUPPLEMENTARY = 97;
	const BLOCK_CODE_TAGALOG = 98;
	const BLOCK_CODE_HANUNOO = 99;
	const BLOCK_CODE_BUHID = 100;
	const BLOCK_CODE_TAGBANWA = 101;
	const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A = 102;
	const BLOCK_CODE_SUPPLEMENTAL_ARROWS_A = 103;
	const BLOCK_CODE_SUPPLEMENTAL_ARROWS_B = 104;
	const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B = 105;
	const BLOCK_CODE_SUPPLEMENTAL_MATHEMATICAL_OPERATORS = 106;
	const BLOCK_CODE_KATAKANA_PHONETIC_EXTENSIONS = 107;
	const BLOCK_CODE_VARIATION_SELECTORS = 108;
	const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_A = 109;
	const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_B = 110;
	const BLOCK_CODE_LIMBU = 111;
	const BLOCK_CODE_TAI_LE = 112;
	const BLOCK_CODE_KHMER_SYMBOLS = 113;
	const BLOCK_CODE_PHONETIC_EXTENSIONS = 114;
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_ARROWS = 115;
	const BLOCK_CODE_YIJING_HEXAGRAM_SYMBOLS = 116;
	const BLOCK_CODE_LINEAR_B_SYLLABARY = 117;
	const BLOCK_CODE_LINEAR_B_IDEOGRAMS = 118;
	const BLOCK_CODE_AEGEAN_NUMBERS = 119;
	const BLOCK_CODE_UGARITIC = 120;
	const BLOCK_CODE_SHAVIAN = 121;
	const BLOCK_CODE_OSMANYA = 122;
	const BLOCK_CODE_CYPRIOT_SYLLABARY = 123;
	const BLOCK_CODE_TAI_XUAN_JING_SYMBOLS = 124;
	const BLOCK_CODE_VARIATION_SELECTORS_SUPPLEMENT = 125;
	const BLOCK_CODE_ANCIENT_GREEK_MUSICAL_NOTATION = 126;
	const BLOCK_CODE_ANCIENT_GREEK_NUMBERS = 127;
	const BLOCK_CODE_ARABIC_SUPPLEMENT = 128;
	const BLOCK_CODE_BUGINESE = 129;
	const BLOCK_CODE_CJK_STROKES = 130;
	const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_SUPPLEMENT = 131;
	const BLOCK_CODE_COPTIC = 132;
	const BLOCK_CODE_ETHIOPIC_EXTENDED = 133;
	const BLOCK_CODE_ETHIOPIC_SUPPLEMENT = 134;
	const BLOCK_CODE_GEORGIAN_SUPPLEMENT = 135;
	const BLOCK_CODE_GLAGOLITIC = 136;
	const BLOCK_CODE_KHAROSHTHI = 137;
	const BLOCK_CODE_MODIFIER_TONE_LETTERS = 138;
	const BLOCK_CODE_NEW_TAI_LUE = 139;
	const BLOCK_CODE_OLD_PERSIAN = 140;
	const BLOCK_CODE_PHONETIC_EXTENSIONS_SUPPLEMENT = 141;
	const BLOCK_CODE_SUPPLEMENTAL_PUNCTUATION = 142;
	const BLOCK_CODE_SYLOTI_NAGRI = 143;
	const BLOCK_CODE_TIFINAGH = 144;
	const BLOCK_CODE_VERTICAL_FORMS = 145;
	const BLOCK_CODE_NKO = 146;
	const BLOCK_CODE_BALINESE = 147;
	const BLOCK_CODE_LATIN_EXTENDED_C = 148;
	const BLOCK_CODE_LATIN_EXTENDED_D = 149;
	const BLOCK_CODE_PHAGS_PA = 150;
	const BLOCK_CODE_PHOENICIAN = 151;
	const BLOCK_CODE_CUNEIFORM = 152;
	const BLOCK_CODE_CUNEIFORM_NUMBERS_AND_PUNCTUATION = 153;
	const BLOCK_CODE_COUNTING_ROD_NUMERALS = 154;
	const BLOCK_CODE_SUNDANESE = 155;
	const BLOCK_CODE_LEPCHA = 156;
	const BLOCK_CODE_OL_CHIKI = 157;
	const BLOCK_CODE_CYRILLIC_EXTENDED_A = 158;
	const BLOCK_CODE_VAI = 159;
	const BLOCK_CODE_CYRILLIC_EXTENDED_B = 160;
	const BLOCK_CODE_SAURASHTRA = 161;
	const BLOCK_CODE_KAYAH_LI = 162;
	const BLOCK_CODE_REJANG = 163;
	const BLOCK_CODE_CHAM = 164;
	const BLOCK_CODE_ANCIENT_SYMBOLS = 165;
	const BLOCK_CODE_PHAISTOS_DISC = 166;
	const BLOCK_CODE_LYCIAN = 167;
	const BLOCK_CODE_CARIAN = 168;
	const BLOCK_CODE_LYDIAN = 169;
	const BLOCK_CODE_MAHJONG_TILES = 170;
	const BLOCK_CODE_DOMINO_TILES = 171;
	const BLOCK_CODE_SAMARITAN = 172;
	const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED = 173;
	const BLOCK_CODE_TAI_THAM = 174;
	const BLOCK_CODE_VEDIC_EXTENSIONS = 175;
	const BLOCK_CODE_LISU = 176;
	const BLOCK_CODE_BAMUM = 177;
	const BLOCK_CODE_COMMON_INDIC_NUMBER_FORMS = 178;
	const BLOCK_CODE_DEVANAGARI_EXTENDED = 179;
	const BLOCK_CODE_HANGUL_JAMO_EXTENDED_A = 180;
	const BLOCK_CODE_JAVANESE = 181;
	const BLOCK_CODE_MYANMAR_EXTENDED_A = 182;
	const BLOCK_CODE_TAI_VIET = 183;
	const BLOCK_CODE_MEETEI_MAYEK = 184;
	const BLOCK_CODE_HANGUL_JAMO_EXTENDED_B = 185;
	const BLOCK_CODE_IMPERIAL_ARAMAIC = 186;
	const BLOCK_CODE_OLD_SOUTH_ARABIAN = 187;
	const BLOCK_CODE_AVESTAN = 188;
	const BLOCK_CODE_INSCRIPTIONAL_PARTHIAN = 189;
	const BLOCK_CODE_INSCRIPTIONAL_PAHLAVI = 190;
	const BLOCK_CODE_OLD_TURKIC = 191;
	const BLOCK_CODE_RUMI_NUMERAL_SYMBOLS = 192;
	const BLOCK_CODE_KAITHI = 193;
	const BLOCK_CODE_EGYPTIAN_HIEROGLYPHS = 194;
	const BLOCK_CODE_ENCLOSED_ALPHANUMERIC_SUPPLEMENT = 195;
	const BLOCK_CODE_ENCLOSED_IDEOGRAPHIC_SUPPLEMENT = 196;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C = 197;
	const BLOCK_CODE_MANDAIC = 198;
	const BLOCK_CODE_BATAK = 199;
	const BLOCK_CODE_ETHIOPIC_EXTENDED_A = 200;
	const BLOCK_CODE_BRAHMI = 201;
	const BLOCK_CODE_BAMUM_SUPPLEMENT = 202;
	const BLOCK_CODE_KANA_SUPPLEMENT = 203;
	const BLOCK_CODE_PLAYING_CARDS = 204;
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS = 205;
	const BLOCK_CODE_EMOTICONS = 206;
	const BLOCK_CODE_TRANSPORT_AND_MAP_SYMBOLS = 207;
	const BLOCK_CODE_ALCHEMICAL_SYMBOLS = 208;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D = 209;
	const BLOCK_CODE_ARABIC_EXTENDED_A = 210;
	const BLOCK_CODE_ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS = 211;
	const BLOCK_CODE_CHAKMA = 212;
	const BLOCK_CODE_MEETEI_MAYEK_EXTENSIONS = 213;
	const BLOCK_CODE_MEROITIC_CURSIVE = 214;
	const BLOCK_CODE_MEROITIC_HIEROGLYPHS = 215;
	const BLOCK_CODE_MIAO = 216;
	const BLOCK_CODE_SHARADA = 217;
	const BLOCK_CODE_SORA_SOMPENG = 218;
	const BLOCK_CODE_SUNDANESE_SUPPLEMENT = 219;
	const BLOCK_CODE_TAKRI = 220;
	const BLOCK_CODE_BASSA_VAH = 221;
	const BLOCK_CODE_CAUCASIAN_ALBANIAN = 222;
	const BLOCK_CODE_COPTIC_EPACT_NUMBERS = 223;
	const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_EXTENDED = 224;
	const BLOCK_CODE_DUPLOYAN = 225;
	const BLOCK_CODE_ELBASAN = 226;
	const BLOCK_CODE_GEOMETRIC_SHAPES_EXTENDED = 227;
	const BLOCK_CODE_GRANTHA = 228;
	const BLOCK_CODE_KHOJKI = 229;
	const BLOCK_CODE_KHUDAWADI = 230;
	const BLOCK_CODE_LATIN_EXTENDED_E = 231;
	const BLOCK_CODE_LINEAR_A = 232;
	const BLOCK_CODE_MAHAJANI = 233;
	const BLOCK_CODE_MANICHAEAN = 234;
	const BLOCK_CODE_MENDE_KIKAKUI = 235;
	const BLOCK_CODE_MODI = 236;
	const BLOCK_CODE_MRO = 237;
	const BLOCK_CODE_MYANMAR_EXTENDED_B = 238;
	const BLOCK_CODE_NABATAEAN = 239;
	const BLOCK_CODE_OLD_NORTH_ARABIAN = 240;
	const BLOCK_CODE_OLD_PERMIC = 241;
	const BLOCK_CODE_ORNAMENTAL_DINGBATS = 242;
	const BLOCK_CODE_PAHAWH_HMONG = 243;
	const BLOCK_CODE_PALMYRENE = 244;
	const BLOCK_CODE_PAU_CIN_HAU = 245;
	const BLOCK_CODE_PSALTER_PAHLAVI = 246;
	const BLOCK_CODE_SHORTHAND_FORMAT_CONTROLS = 247;
	const BLOCK_CODE_SIDDHAM = 248;
	const BLOCK_CODE_SINHALA_ARCHAIC_NUMBERS = 249;
	const BLOCK_CODE_SUPPLEMENTAL_ARROWS_C = 250;
	const BLOCK_CODE_TIRHUTA = 251;
	const BLOCK_CODE_WARANG_CITI = 252;
	const BLOCK_CODE_COUNT = 253;
	const BLOCK_CODE_INVALID_CODE = -1;
	const BPT_NONE = 0;
	const BPT_OPEN = 1;
	const BPT_CLOSE = 2;
	const BPT_COUNT = 3;
	const EA_NEUTRAL = 0;
	const EA_AMBIGUOUS = 1;
	const EA_HALFWIDTH = 2;
	const EA_FULLWIDTH = 3;
	const EA_NARROW = 4;
	const EA_WIDE = 5;
	const EA_COUNT = 6;
	const UNICODE_CHAR_NAME = 0;
	const UNICODE_10_CHAR_NAME = 1;
	const EXTENDED_CHAR_NAME = 2;
	const CHAR_NAME_ALIAS = 3;
	const CHAR_NAME_CHOICE_COUNT = 4;
	const SHORT_PROPERTY_NAME = 0;
	const LONG_PROPERTY_NAME = 1;
	const PROPERTY_NAME_CHOICE_COUNT = 2;
	const DT_NONE = 0;
	const DT_CANONICAL = 1;
	const DT_COMPAT = 2;
	const DT_CIRCLE = 3;
	const DT_FINAL = 4;
	const DT_FONT = 5;
	const DT_FRACTION = 6;
	const DT_INITIAL = 7;
	const DT_ISOLATED = 8;
	const DT_MEDIAL = 9;
	const DT_NARROW = 10;
	const DT_NOBREAK = 11;
	const DT_SMALL = 12;
	const DT_SQUARE = 13;
	const DT_SUB = 14;
	const DT_SUPER = 15;
	const DT_VERTICAL = 16;
	const DT_WIDE = 17;
	const DT_COUNT = 18;
	const JT_NON_JOINING = 0;
	const JT_JOIN_CAUSING = 1;
	const JT_DUAL_JOINING = 2;
	const JT_LEFT_JOINING = 3;
	const JT_RIGHT_JOINING = 4;
	const JT_TRANSPARENT = 5;
	const JT_COUNT = 6;
	const JG_NO_JOINING_GROUP = 0;
	const JG_AIN = 1;
	const JG_ALAPH = 2;
	const JG_ALEF = 3;
	const JG_BEH = 4;
	const JG_BETH = 5;
	const JG_DAL = 6;
	const JG_DALATH_RISH = 7;
	const JG_E = 8;
	const JG_FEH = 9;
	const JG_FINAL_SEMKATH = 10;
	const JG_GAF = 11;
	const JG_GAMAL = 12;
	const JG_HAH = 13;
	const JG_TEH_MARBUTA_GOAL = 14;
	const JG_HAMZA_ON_HEH_GOAL = 14;
	const JG_HE = 15;
	const JG_HEH = 16;
	const JG_HEH_GOAL = 17;
	const JG_HETH = 18;
	const JG_KAF = 19;
	const JG_KAPH = 20;
	const JG_KNOTTED_HEH = 21;
	const JG_LAM = 22;
	const JG_LAMADH = 23;
	const JG_MEEM = 24;
	const JG_MIM = 25;
	const JG_NOON = 26;
	const JG_NUN = 27;
	const JG_PE = 28;
	const JG_QAF = 29;
	const JG_QAPH = 30;
	const JG_REH = 31;
	const JG_REVERSED_PE = 32;
	const JG_SAD = 33;
	const JG_SADHE = 34;
	const JG_SEEN = 35;
	const JG_SEMKATH = 36;
	const JG_SHIN = 37;
	const JG_SWASH_KAF = 38;
	const JG_SYRIAC_WAW = 39;
	const JG_TAH = 40;
	const JG_TAW = 41;
	const JG_TEH_MARBUTA = 42;
	const JG_TETH = 43;
	const JG_WAW = 44;
	const JG_YEH = 45;
	const JG_YEH_BARREE = 46;
	const JG_YEH_WITH_TAIL = 47;
	const JG_YUDH = 48;
	const JG_YUDH_HE = 49;
	const JG_ZAIN = 50;
	const JG_FE = 51;
	const JG_KHAPH = 52;
	const JG_ZHAIN = 53;
	const JG_BURUSHASKI_YEH_BARREE = 54;
	const JG_FARSI_YEH = 55;
	const JG_NYA = 56;
	const JG_ROHINGYA_YEH = 57;
	const JG_MANICHAEAN_ALEPH = 58;
	const JG_MANICHAEAN_AYIN = 59;
	const JG_MANICHAEAN_BETH = 60;
	const JG_MANICHAEAN_DALETH = 61;
	const JG_MANICHAEAN_DHAMEDH = 62;
	const JG_MANICHAEAN_FIVE = 63;
	const JG_MANICHAEAN_GIMEL = 64;
	const JG_MANICHAEAN_HETH = 65;
	const JG_MANICHAEAN_HUNDRED = 66;
	const JG_MANICHAEAN_KAPH = 67;
	const JG_MANICHAEAN_LAMEDH = 68;
	const JG_MANICHAEAN_MEM = 69;
	const JG_MANICHAEAN_NUN = 70;
	const JG_MANICHAEAN_ONE = 71;
	const JG_MANICHAEAN_PE = 72;
	const JG_MANICHAEAN_QOPH = 73;
	const JG_MANICHAEAN_RESH = 74;
	const JG_MANICHAEAN_SADHE = 75;
	const JG_MANICHAEAN_SAMEKH = 76;
	const JG_MANICHAEAN_TAW = 77;
	const JG_MANICHAEAN_TEN = 78;
	const JG_MANICHAEAN_TETH = 79;
	const JG_MANICHAEAN_THAMEDH = 80;
	const JG_MANICHAEAN_TWENTY = 81;
	const JG_MANICHAEAN_WAW = 82;
	const JG_MANICHAEAN_YODH = 83;
	const JG_MANICHAEAN_ZAYIN = 84;
	const JG_STRAIGHT_WAW = 85;
	const JG_COUNT = 86;
	const GCB_OTHER = 0;
	const GCB_CONTROL = 1;
	const GCB_CR = 2;
	const GCB_EXTEND = 3;
	const GCB_L = 4;
	const GCB_LF = 5;
	const GCB_LV = 6;
	const GCB_LVT = 7;
	const GCB_T = 8;
	const GCB_V = 9;
	const GCB_SPACING_MARK = 10;
	const GCB_PREPEND = 11;
	const GCB_REGIONAL_INDICATOR = 12;
	const GCB_COUNT = 13;
	const WB_OTHER = 0;
	const WB_ALETTER = 1;
	const WB_FORMAT = 2;
	const WB_KATAKANA = 3;
	const WB_MIDLETTER = 4;
	const WB_MIDNUM = 5;
	const WB_NUMERIC = 6;
	const WB_EXTENDNUMLET = 7;
	const WB_CR = 8;
	const WB_EXTEND = 9;
	const WB_LF = 10;
	const WB_MIDNUMLET = 11;
	const WB_NEWLINE = 12;
	const WB_REGIONAL_INDICATOR = 13;
	const WB_HEBREW_LETTER = 14;
	const WB_SINGLE_QUOTE = 15;
	const WB_DOUBLE_QUOTE = 16;
	const WB_COUNT = 17;
	const SB_OTHER = 0;
	const SB_ATERM = 1;
	const SB_CLOSE = 2;
	const SB_FORMAT = 3;
	const SB_LOWER = 4;
	const SB_NUMERIC = 5;
	const SB_OLETTER = 6;
	const SB_SEP = 7;
	const SB_SP = 8;
	const SB_STERM = 9;
	const SB_UPPER = 10;
	const SB_CR = 11;
	const SB_EXTEND = 12;
	const SB_LF = 13;
	const SB_SCONTINUE = 14;
	const SB_COUNT = 15;
	const LB_UNKNOWN = 0;
	const LB_AMBIGUOUS = 1;
	const LB_ALPHABETIC = 2;
	const LB_BREAK_BOTH = 3;
	const LB_BREAK_AFTER = 4;
	const LB_BREAK_BEFORE = 5;
	const LB_MANDATORY_BREAK = 6;
	const LB_CONTINGENT_BREAK = 7;
	const LB_CLOSE_PUNCTUATION = 8;
	const LB_COMBINING_MARK = 9;
	const LB_CARRIAGE_RETURN = 10;
	const LB_EXCLAMATION = 11;
	const LB_GLUE = 12;
	const LB_HYPHEN = 13;
	const LB_IDEOGRAPHIC = 14;
	const LB_INSEPARABLE = 15;
	const LB_INSEPERABLE = 15;
	const LB_INFIX_NUMERIC = 16;
	const LB_LINE_FEED = 17;
	const LB_NONSTARTER = 18;
	const LB_NUMERIC = 19;
	const LB_OPEN_PUNCTUATION = 20;
	const LB_POSTFIX_NUMERIC = 21;
	const LB_PREFIX_NUMERIC = 22;
	const LB_QUOTATION = 23;
	const LB_COMPLEX_CONTEXT = 24;
	const LB_SURROGATE = 25;
	const LB_SPACE = 26;
	const LB_BREAK_SYMBOLS = 27;
	const LB_ZWSPACE = 28;
	const LB_NEXT_LINE = 29;
	const LB_WORD_JOINER = 30;
	const LB_H2 = 31;
	const LB_H3 = 32;
	const LB_JL = 33;
	const LB_JT = 34;
	const LB_JV = 35;
	const LB_CLOSE_PARENTHESIS = 36;
	const LB_CONDITIONAL_JAPANESE_STARTER = 37;
	const LB_HEBREW_LETTER = 38;
	const LB_REGIONAL_INDICATOR = 39;
	const LB_COUNT = 40;
	const NT_NONE = 0;
	const NT_DECIMAL = 1;
	const NT_DIGIT = 2;
	const NT_NUMERIC = 3;
	const NT_COUNT = 4;
	const HST_NOT_APPLICABLE = 0;
	const HST_LEADING_JAMO = 1;
	const HST_VOWEL_JAMO = 2;
	const HST_TRAILING_JAMO = 3;
	const HST_LV_SYLLABLE = 4;
	const HST_LVT_SYLLABLE = 5;
	const HST_COUNT = 6;


	/**
	 * (PHP 7)<br/>
	 * Return Unicode character by code point value
	 * @link http://php.net/manual/ja/intlchar.chr.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return string A string containing the single character specified by the Unicode code point value.
	 */
	public static function chr($codepoint): string {}

	/**
	 * (PHP 7)<br/>
	 * Return Unicode code point value of character
	 * @link http://php.net/manual/ja/intlchar.ord.php
	 * @param mixed $character <p>
	 * A Unicode character.
	 * </p>
	 * @return int the Unicode code point value as an integer.
	 */
	public static function ord($character): int {}

	/**
	 * (PHP 7)<br/>
	 * Check a binary Unicode property for a code point
	 * @link http://php.net/manual/ja/intlchar.hasbinaryproperty.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @param int $property 調べたい Unicode プロパティ (定数 IntlChar::PROPERTY_* を参照ください)。</p>
	 * @return bool <b>TRUE</b> or <b>FALSE</b> according to the binary Unicode property value for <i>codepoint</i>.
	 * Also <b>FALSE</b> if <i>property</i> is out of bounds or if the Unicode version does not have data for
	 * the property at all, or not for this code point.
	 */
	public static function hasBinaryProperty($codepoint, int $property): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the Alphabetic Unicode property
	 * @link http://php.net/manual/ja/intlchar.isualphabetic.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> has the Alphabetic Unicode property, <b>FALSE</b> if not.
	 */
	public static function isUAlphabetic($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the Lowercase Unicode property
	 * @link http://php.net/manual/ja/intlchar.isulowercase.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> has the Lowercase Unicode property, <b>FALSE</b> if not.
	 */
	public static function isULowercase($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the Uppercase Unicode property
	 * @link http://php.net/manual/ja/intlchar.isuuppercase.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> has the Uppercase Unicode property, <b>FALSE</b> if not.
	 */
	public static function isUUppercase($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the White_Space Unicode property
	 * @link http://php.net/manual/ja/intlchar.isuwhitespace.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> has the White_Space Unicode property, <b>FALSE</b> if not.
	 */
	public static function isUWhiteSpace($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Get the value for a Unicode property for a code point
	 * @link http://php.net/manual/ja/intlchar.getintpropertyvalue.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @param int $property 調べたい Unicode プロパティ (定数 IntlChar::PROPERTY_* を参照ください)。</p>
	 * @return int the numeric value that is directly the property value or, for enumerated properties, corresponds to the
	 * numeric value of the enumerated constant of the respective property value enumeration type.
	 * </p>
	 * <p>
	 * Returns 0 or 1 (for <b>FALSE</b>/<b>TRUE</b>) for binary Unicode properties.
	 * </p>
	 * <p>
	 * Returns a bit-mask for mask properties.
	 * </p>
	 * <p>
	 * Returns 0 if <i>property</i> is out of bounds or if the Unicode version does not
	 * have data for the property at all, or not for this code point.
	 */
	public static function getIntPropertyValue($codepoint, int $property): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the min value for a Unicode property
	 * @link http://php.net/manual/ja/intlchar.getintpropertyminvalue.php
	 * @param int $property 調べたい Unicode プロパティ (定数 IntlChar::PROPERTY_* を参照ください)。</p>
	 * @return int The minimum value returned by <b>IntlChar::getIntPropertyValue</b> for a Unicode property.
	 * 0 if the property selector is out of range.
	 */
	public static function getIntPropertyMinValue(int $property): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the max value for a Unicode property
	 * @link http://php.net/manual/ja/intlchar.getintpropertymaxvalue.php
	 * @param int $property 調べたい Unicode プロパティ (定数 IntlChar::PROPERTY_* を参照ください)。</p>
	 * @return int The maximum value returned by <b>IntlChar::getIntPropertyValue</b> for a Unicode property.
	 * &lt;=0 if the property selector is out of range.
	 */
	public static function getIntPropertyMaxValue(int $property): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the numeric value for a Unicode code point
	 * @link http://php.net/manual/ja/intlchar.getnumericvalue.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return float Numeric value of <i>codepoint</i>,
	 * or <b>IntlChar::NO_NUMERIC_VALUE</b> if none is defined. This
	 * constant was added in PHP 7.0.6, prior to this version the literal value
	 * (float)-123456789 may be used instead.
	 */
	public static function getNumericValue($codepoint): float {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a lowercase letter
	 * @link http://php.net/manual/ja/intlchar.islower.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is an Ll lowercase letter, <b>FALSE</b> if not.
	 */
	public static function islower($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the general category "Lu" (uppercase letter)
	 * @link http://php.net/manual/ja/intlchar.isupper.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is an Lu uppercase letter, <b>FALSE</b> if not.
	 */
	public static function isupper($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a titlecase letter
	 * @link http://php.net/manual/ja/intlchar.istitle.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a titlecase letter, <b>FALSE</b> if not.
	 */
	public static function istitle($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a digit character
	 * @link http://php.net/manual/ja/intlchar.isdigit.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a digit character, <b>FALSE</b> if not.
	 */
	public static function isdigit($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a letter character
	 * @link http://php.net/manual/ja/intlchar.isalpha.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a letter character, <b>FALSE</b> if not.
	 */
	public static function isalpha($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is an alphanumeric character
	 * @link http://php.net/manual/ja/intlchar.isalnum.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is an alphanumeric character, <b>FALSE</b> if not.
	 */
	public static function isalnum($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a hexadecimal digit
	 * @link http://php.net/manual/ja/intlchar.isxdigit.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a hexadecimal character, <b>FALSE</b> if not.
	 */
	public static function isxdigit($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is punctuation character
	 * @link http://php.net/manual/ja/intlchar.ispunct.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a punctuation character, <b>FALSE</b> if not.
	 */
	public static function ispunct($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a graphic character
	 * @link http://php.net/manual/ja/intlchar.isgraph.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a "graphic" character, <b>FALSE</b> if not.
	 */
	public static function isgraph($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a "blank" or "horizontal space" character
	 * @link http://php.net/manual/ja/intlchar.isblank.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is either a "blank" or "horizontal space" character, <b>FALSE</b> if not.
	 */
	public static function isblank($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check whether the code point is defined
	 * @link http://php.net/manual/ja/intlchar.isdefined.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a defined character, <b>FALSE</b> if not.
	 */
	public static function isdefined($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a space character
	 * @link http://php.net/manual/ja/intlchar.isspace.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a space character, <b>FALSE</b> if not.
	 */
	public static function isspace($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a space character according to Java
	 * @link http://php.net/manual/ja/intlchar.isjavaspacechar.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a space character according to Java, <b>FALSE</b> if not.
	 */
	public static function isJavaSpaceChar($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a whitespace character according to ICU
	 * @link http://php.net/manual/ja/intlchar.iswhitespace.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a whitespace character according to ICU, <b>FALSE</b> if not.
	 */
	public static function isWhitespace($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a control character
	 * @link http://php.net/manual/ja/intlchar.iscntrl.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a control character, <b>FALSE</b> if not.
	 */
	public static function iscntrl($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is an ISO control code
	 * @link http://php.net/manual/ja/intlchar.isisocontrol.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is an ISO control code, <b>FALSE</b> if not.
	 */
	public static function isISOControl($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a printable character
	 * @link http://php.net/manual/ja/intlchar.isprint.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a printable character, <b>FALSE</b> if not.
	 */
	public static function isprint($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a base character
	 * @link http://php.net/manual/ja/intlchar.isbase.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a base character, <b>FALSE</b> if not.
	 */
	public static function isbase($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Get bidirectional category value for a code point
	 * @link http://php.net/manual/ja/intlchar.chardirection.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return int The bidirectional category value; one of the following constants:
	 * <b>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT</b>
	 * <b>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT</b>
	 * <b>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER</b>
	 * <b>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR</b>
	 * <b>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR</b>
	 * <b>IntlChar::CHAR_DIRECTION_ARABIC_NUMBER</b>
	 * <b>IntlChar::CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR</b>
	 * <b>IntlChar::CHAR_DIRECTION_BLOCK_SEPARATOR</b>
	 * <b>IntlChar::CHAR_DIRECTION_SEGMENT_SEPARATOR</b>
	 * <b>IntlChar::CHAR_DIRECTION_WHITE_SPACE_NEUTRAL</b>
	 * <b>IntlChar::CHAR_DIRECTION_OTHER_NEUTRAL</b>
	 * <b>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING</b>
	 * <b>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE</b>
	 * <b>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC</b>
	 * <b>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING</b>
	 * <b>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE</b>
	 * <b>IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT</b>
	 * <b>IntlChar::CHAR_DIRECTION_DIR_NON_SPACING_MARK</b>
	 * <b>IntlChar::CHAR_DIRECTION_BOUNDARY_NEUTRAL</b>
	 * <b>IntlChar::CHAR_DIRECTION_FIRST_STRONG_ISOLATE</b>
	 * <b>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE</b>
	 * <b>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE</b>
	 * <b>IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE</b>
	 * <b>IntlChar::CHAR_DIRECTION_CHAR_DIRECTION_COUNT</b>
	 */
	public static function charDirection($codepoint): int {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the Bidi_Mirrored property
	 * @link http://php.net/manual/ja/intlchar.ismirrored.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> has the Bidi_Mirrored property, <b>FALSE</b> if not.
	 */
	public static function isMirrored($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Get the "mirror-image" character for a code point
	 * @link http://php.net/manual/ja/intlchar.charmirror.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return mixed another Unicode code point that may serve as a mirror-image substitute, or <i>codepoint</i>
	 * itself if there is no such mapping or <i>codepoint</i> does not have the
	 * Bidi_Mirrored property.
	 */
	public static function charMirror($codepoint) {}

	/**
	 * (PHP 7)<br/>
	 * Get the paired bracket character for a code point
	 * @link http://php.net/manual/ja/intlchar.getbidipairedbracket.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return mixed the paired bracket code point, or <i>codepoint</i> itself if there is no such mapping.
	 */
	public static function getBidiPairedBracket($codepoint) {}

	/**
	 * (PHP 7)<br/>
	 * Get the general category value for a code point
	 * @link http://php.net/manual/ja/intlchar.chartype.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return int the general category type, which may be one of the following constants:
	 * <b>IntlChar::CHAR_CATEGORY_UNASSIGNED</b>
	 * <b>IntlChar::CHAR_CATEGORY_GENERAL_OTHER_TYPES</b>
	 * <b>IntlChar::CHAR_CATEGORY_UPPERCASE_LETTER</b>
	 * <b>IntlChar::CHAR_CATEGORY_LOWERCASE_LETTER</b>
	 * <b>IntlChar::CHAR_CATEGORY_TITLECASE_LETTER</b>
	 * <b>IntlChar::CHAR_CATEGORY_MODIFIER_LETTER</b>
	 * <b>IntlChar::CHAR_CATEGORY_OTHER_LETTER</b>
	 * <b>IntlChar::CHAR_CATEGORY_NON_SPACING_MARK</b>
	 * <b>IntlChar::CHAR_CATEGORY_ENCLOSING_MARK</b>
	 * <b>IntlChar::CHAR_CATEGORY_COMBINING_SPACING_MARK</b>
	 * <b>IntlChar::CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER</b>
	 * <b>IntlChar::CHAR_CATEGORY_LETTER_NUMBER</b>
	 * <b>IntlChar::CHAR_CATEGORY_OTHER_NUMBER</b>
	 * <b>IntlChar::CHAR_CATEGORY_SPACE_SEPARATOR</b>
	 * <b>IntlChar::CHAR_CATEGORY_LINE_SEPARATOR</b>
	 * <b>IntlChar::CHAR_CATEGORY_PARAGRAPH_SEPARATOR</b>
	 * <b>IntlChar::CHAR_CATEGORY_CONTROL_CHAR</b>
	 * <b>IntlChar::CHAR_CATEGORY_FORMAT_CHAR</b>
	 * <b>IntlChar::CHAR_CATEGORY_PRIVATE_USE_CHAR</b>
	 * <b>IntlChar::CHAR_CATEGORY_SURROGATE</b>
	 * <b>IntlChar::CHAR_CATEGORY_DASH_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_START_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_END_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_CONNECTOR_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_OTHER_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_MATH_SYMBOL</b>
	 * <b>IntlChar::CHAR_CATEGORY_CURRENCY_SYMBOL</b>
	 * <b>IntlChar::CHAR_CATEGORY_MODIFIER_SYMBOL</b>
	 * <b>IntlChar::CHAR_CATEGORY_OTHER_SYMBOL</b>
	 * <b>IntlChar::CHAR_CATEGORY_INITIAL_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_FINAL_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_CHAR_CATEGORY_COUNT</b>
	 */
	public static function charType($codepoint): int {}

	/**
	 * (PHP 7)<br/>
	 * Enumerate all code points with their Unicode general categories
	 * @link http://php.net/manual/ja/intlchar.enumchartypes.php
	 * @param callable $callback <p>
	 * The function that is to be called for each contiguous range of code points with the same general category.
	 * The following three arguments will be passed into it:
	 * integer $start - The starting code point of the range
	 * integer $end - The ending code point of the range
	 * integer $name - The category type (one of the IntlChar::CHAR_CATEGORY_* constants)
	 * </p>
	 * @return void 値を返しません。
	 */
	public static function enumCharTypes(callable $callback): void {}

	/**
	 * (PHP 7)<br/>
	 * Get the combining class of a code point
	 * @link http://php.net/manual/ja/intlchar.getcombiningclass.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return int the combining class of the character.
	 */
	public static function getCombiningClass($codepoint): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the decimal digit value of a decimal digit character
	 * @link http://php.net/manual/ja/intlchar.chardigitvalue.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return int The decimal digit value of <i>codepoint</i>,
	 * or -1 if it is not a decimal digit character.
	 */
	public static function charDigitValue($codepoint): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the Unicode allocation block containing a code point
	 * @link http://php.net/manual/ja/intlchar.getblockcode.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return int the block value for <i>codepoint</i>.
	 * See the IntlChar::BLOCK_CODE_* constants for possible return values.
	 */
	public static function getBlockCode($codepoint): int {}

	/**
	 * (PHP 7)<br/>
	 * Retrieve the name of a Unicode character
	 * @link http://php.net/manual/ja/intlchar.charname.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @param int $nameChoice [optional] <p>
	 * Which set of names to use for the lookup. Can be any of these constants:
	 * <b>IntlChar::UNICODE_CHAR_NAME</b> (default)
	 * <b>IntlChar::UNICODE_10_CHAR_NAME</b>
	 * <b>IntlChar::EXTENDED_CHAR_NAME</b>
	 * <b>IntlChar::CHAR_NAME_ALIAS</b>
	 * <b>IntlChar::CHAR_NAME_CHOICE_COUNT</b>
	 * </p>
	 * @return string The corresponding name, or an empty string if there is no name for this character.
	 */
	public static function charName($codepoint, int $nameChoice = IntlChar::UNICODE_CHAR_NAME): string {}

	/**
	 * (PHP 7)<br/>
	 * Find Unicode character by name and return its code point value
	 * @link http://php.net/manual/ja/intlchar.charfromname.php
	 * @param string $characterName <p>
	 * Full name of the Unicode character.
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * Which set of names to use for the lookup. Can be any of these constants:
	 * <b>IntlChar::UNICODE_CHAR_NAME</b> (default)
	 * <b>IntlChar::UNICODE_10_CHAR_NAME</b>
	 * <b>IntlChar::EXTENDED_CHAR_NAME</b>
	 * <b>IntlChar::CHAR_NAME_ALIAS</b>
	 * <b>IntlChar::CHAR_NAME_CHOICE_COUNT</b>
	 * </p>
	 * @return int The Unicode value of the code point with the given name (as an integer), or <b>FALSE</b> if there is no such code point.
	 */
	public static function charFromName(string $characterName, int $nameChoice = IntlChar::UNICODE_CHAR_NAME): int {}

	/**
	 * (PHP 7)<br/>
	 * Enumerate all assigned Unicode characters within a range
	 * @link http://php.net/manual/ja/intlchar.enumcharnames.php
	 * @param mixed $start <p>
	 * The first code point in the enumeration range.
	 * </p>
	 * @param mixed $limit <p>
	 * One more than the last code point in the enumeration range (the first one after the range).
	 * </p>
	 * @param callable $callback <p>
	 * The function that is to be called for each character name. The following three arguments will be passed into it:
	 * integer $codepoint - The numeric code point value
	 * integer $nameChoice - The same value as the <i>nameChoice</i> parameter below
	 * string $name - The name of the character
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * Selector for which kind of names to enumerate. Can be any of these constants:
	 * <b>IntlChar::UNICODE_CHAR_NAME</b> (default)
	 * <b>IntlChar::UNICODE_10_CHAR_NAME</b>
	 * <b>IntlChar::EXTENDED_CHAR_NAME</b>
	 * <b>IntlChar::CHAR_NAME_ALIAS</b>
	 * <b>IntlChar::CHAR_NAME_CHOICE_COUNT</b>
	 * </p>
	 * @return void 値を返しません。
	 */
	public static function enumCharNames($start, $limit, callable $callback, int $nameChoice = IntlChar::UNICODE_CHAR_NAME): void {}

	/**
	 * (PHP 7)<br/>
	 * Get the Unicode name for a property
	 * @link http://php.net/manual/ja/intlchar.getpropertyname.php
	 * @param int $property 調べたい Unicode プロパティ (定数 IntlChar::PROPERTY_* を参照ください)。</p>
	 * <p>
	 * <b>IntlChar::PROPERTY_INVALID_CODE</b> should not be used.
	 * Also, if <i>property</i> is out of range, <b>FALSE</b> is returned.
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * Selector for which name to get. If out of range, <b>FALSE</b> is returned.
	 * </p>
	 * <p>
	 * All properties have a long name. Most have a short name, but some do not. Unicode allows for additional names;
	 * if present these will be returned by adding 1, 2, etc. to <b>IntlChar::LONG_PROPERTY_NAME</b>.
	 * </p>
	 * @return string the name, or <b>FALSE</b> if either the <i>property</i> or the <i>nameChoice</i>
	 * is out of range.
	 * </p>
	 * <p>
	 * If a given <i>nameChoice</i> returns <b>FALSE</b>, then all larger values of
	 * <i>nameChoice</i> will return <b>FALSE</b>, with one exception: if <b>FALSE</b> is returned for
	 * <b>IntlChar::SHORT_PROPERTY_NAME</b>, then <b>IntlChar::LONG_PROPERTY_NAME</b>
	 * (and higher) may still return a non-<b>FALSE</b> value.
	 */
	public static function getPropertyName(int $property, int $nameChoice = IntlChar::LONG_PROPERTY_NAME): string {}

	/**
	 * (PHP 7)<br/>
	 * Get the property constant value for a given property name
	 * @link http://php.net/manual/ja/intlchar.getpropertyenum.php
	 * @param string $alias <p>
	 * The property name to be matched. The name is compared using "loose matching" as described in PropertyAliases.txt.
	 * </p>
	 * @return int an IntlChar::PROPERTY_ constant value,
	 * or <b>IntlChar::PROPERTY_INVALID_CODE</b> if the given name does not match any property.
	 */
	public static function getPropertyEnum(string $alias): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the Unicode name for a property value
	 * @link http://php.net/manual/ja/intlchar.getpropertyvaluename.php
	 * @param int $property 調べたい Unicode プロパティ (定数 IntlChar::PROPERTY_* を参照ください)。</p>
	 * <p>
	 * If out of range, or this method doesn't work with the given value, <b>FALSE</b> is returned.
	 * </p>
	 * @param int $value <p>
	 * Selector for a value for the given property. If out of range, <b>FALSE</b> is returned.
	 * </p>
	 * <p>
	 * In general, valid values range from 0 up to some maximum. There are a couple exceptions:
	 * <b>IntlChar::PROPERTY_BLOCK</b> values begin at the non-zero value <b>IntlChar::BLOCK_CODE_BASIC_LATIN</b>
	 * <b>IntlChar::PROPERTY_CANONICAL_COMBINING_CLASS</b> values are not contiguous and range from 0..240.
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * Selector for which name to get. If out of range, <b>FALSE</b> is returned.
	 * </p>
	 * <p>
	 * All values have a long name. Most have a short name, but some do not. Unicode allows for additional names;
	 * if present these will be returned by adding 1, 2, etc. to <b>IntlChar::LONG_PROPERTY_NAME</b>.
	 * </p>
	 * @return string the name, or <b>FALSE</b> if either the <i>property</i> or the <i>nameChoice</i>
	 * is out of range.
	 * </p>
	 * <p>
	 * If a given <i>nameChoice</i> returns <b>FALSE</b>, then all larger values of <i>nameChoice</i>
	 * will return <b>FALSE</b>, with one exception: if <b>FALSE</b> is returned for <b>IntlChar::SHORT_PROPERTY_NAME</b>,
	 * then <b>IntlChar::LONG_PROPERTY_NAME</b> (and higher) may still return a non-<b>FALSE</b> value.
	 */
	public static function getPropertyValueName(int $property, int $value, int $nameChoice = IntlChar::LONG_PROPERTY_NAME): string {}

	/**
	 * (PHP 7)<br/>
	 * Get the property value for a given value name
	 * @link http://php.net/manual/ja/intlchar.getpropertyvalueenum.php
	 * @param int $property 調べたい Unicode プロパティ (定数 IntlChar::PROPERTY_* を参照ください)。</p>
	 * <p>
	 * If out of range, or this method doesn't work with the given value,
	 * <b>IntlChar::PROPERTY_INVALID_CODE</b> is returned.
	 * </p>
	 * @param string $name <p>
	 * The value name to be matched. The name is compared using "loose matching" as described in PropertyValueAliases.txt.
	 * </p>
	 * @return int the corresponding value integer, or <b>IntlChar::PROPERTY_INVALID_CODE</b> if the given name
	 * does not match any value of the given property, or if the property is invalid.
	 */
	public static function getPropertyValueEnum(int $property, string $name): int {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is permissible as the first character in an identifier
	 * @link http://php.net/manual/ja/intlchar.isidstart.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> may start an identifier, <b>FALSE</b> if not.
	 */
	public static function isIDStart($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is permissible in an identifier
	 * @link http://php.net/manual/ja/intlchar.isidpart.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is the code point may occur in an identifier, <b>FALSE</b> if not.
	 */
	public static function isIDPart($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is an ignorable character
	 * @link http://php.net/manual/ja/intlchar.isidignorable.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is ignorable in identifiers, <b>FALSE</b> if not.
	 */
	public static function isIDIgnorable($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is permissible as the first character in a Java identifier
	 * @link http://php.net/manual/ja/intlchar.isjavaidstart.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> may start a Java identifier, <b>FALSE</b> if not.
	 */
	public static function isJavaIDStart($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is permissible in a Java identifier
	 * @link http://php.net/manual/ja/intlchar.isjavaidpart.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> may occur in a Java identifier, <b>FALSE</b> if not.
	 */
	public static function isJavaIDPart($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Make Unicode character lowercase
	 * @link http://php.net/manual/ja/intlchar.tolower.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return mixed the Simple_Lowercase_Mapping of the code point, if any;
	 * otherwise the code point itself.
	 */
	public static function tolower($codepoint) {}

	/**
	 * (PHP 7)<br/>
	 * Make Unicode character uppercase
	 * @link http://php.net/manual/ja/intlchar.toupper.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return mixed the Simple_Uppercase_Mapping of the code point, if any;
	 * otherwise the code point itself.
	 */
	public static function toupper($codepoint) {}

	/**
	 * (PHP 7)<br/>
	 * Make Unicode character titlecase
	 * @link http://php.net/manual/ja/intlchar.totitle.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return mixed the Simple_Titlecase_Mapping of the code point, if any;
	 * otherwise the code point itself.
	 */
	public static function totitle($codepoint) {}

	/**
	 * (PHP 7)<br/>
	 * Perform case folding on a code point
	 * @link http://php.net/manual/ja/intlchar.foldcase.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @param int $options [optional] <p>
	 * Either <b>IntlChar::FOLD_CASE_DEFAULT</b> (default)
	 * or <b>IntlChar::FOLD_CASE_EXCLUDE_SPECIAL_I</b>.
	 * </p>
	 * @return mixed the Simple_Case_Folding of the code point, if any; otherwise the code point itself.
	 */
	public static function foldCase($codepoint, int $options = IntlChar::FOLD_CASE_DEFAULT) {}

	/**
	 * (PHP 7)<br/>
	 * Get the decimal digit value of a code point for a given radix
	 * @link http://php.net/manual/ja/intlchar.digit.php
	 * @param string $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @param int $radix [optional] <p>
	 * The radix (defaults to 10).
	 * </p>
	 * @return int the numeric value represented by the character in the specified radix,
	 * or <b>FALSE</b> if there is no value or if the value exceeds the radix.
	 */
	public static function digit(string $codepoint, int $radix = 10): int {}

	/**
	 * (PHP 7)<br/>
	 * Get character representation for a given digit and radix
	 * @link http://php.net/manual/ja/intlchar.fordigit.php
	 * @param int $digit <p>
	 * The number to convert to a character.
	 * </p>
	 * @param int $radix [optional] <p>
	 * The radix (defaults to 10).
	 * </p>
	 * @return int The character representation (as a string) of the specified digit in the specified radix.
	 */
	public static function forDigit(int $digit, int $radix = 10): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the "age" of the code point
	 * @link http://php.net/manual/ja/intlchar.charage.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return array The Unicode version number, as an array.
	 * For example, version 1.3.31.2 would be represented as [1, 3, 31, 2].
	 */
	public static function charAge($codepoint): array {}

	/**
	 * (PHP 7)<br/>
	 * Get the Unicode version
	 * @link http://php.net/manual/ja/intlchar.getunicodeversion.php
	 * @return array An array containing the Unicode version number.
	 */
	public static function getUnicodeVersion(): array {}

	/**
	 * (PHP 7)<br/>
	 * Get the FC_NFKC_Closure property for a code point
	 * @link http://php.net/manual/ja/intlchar.getfc-nfkc-closure.php
	 * @param mixed $codepoint コードポイントを表す integer 型の値 (例: U+2603 SNOWMAN を表す 0x2603)、あるいは UTF-8 文字列としてエンコードされた文字 (例: "\u{2603}")。</p>
	 * @return string the FC_NFKC_Closure property string for the <i>codepoint</i>, or an empty string if there is none.
	 */
	public static function getFC_NFKC_Closure($codepoint): string {}

}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * collator を作成する
 * @link http://php.net/manual/ja/collator.create.php
 * @param string $locale <p>
 * 照合規則を使用するロケール。特殊な場合として、
 * null を渡した場合はデフォルトのロケールの照合規則を使用します。
 * また、空文字列 ("") や "root" を渡した場合は UCA の規則を使用します。
 * </p>
 * @return Collator 新しい <b>Collator</b> オブジェクトのインスタンス、
 * あるいはエラー時に <b>NULL</b> を返します。
 */
function collator_create(string $locale): Collator {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * ふたつの Unicode 文字列を比較する
 * @link http://php.net/manual/ja/collator.compare.php
 * @param string $str1 <p>
 * 最初の文字列。
 * </p>
 * @param string $str2 <p>
 * 2 番目の文字列。
 * </p>
 * @return int 比較結果を返します。</p>
 * <p>
 * <p>
 * <i>str1</i> が <i>str2</i> より
 * 大きい ときは 1
 * </p>
 * <p>
 * <i>str1</i> と <i>str2</i> が
 * 等しい ときは 0
 * </p>
 * <p>
 * <i>str1</i> が <i>str2</i> より
 * 小さい ときは -1
 * </p>
 * エラー時には
 * boolean
 * <b>FALSE</b>
 * を返します。
 */
function collator_compare(string $str1, string $str2): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 照合用の属性の値を取得する
 * @link http://php.net/manual/ja/collator.getattribute.php
 * @param int $attr <p>
 * 値を取得したい属性。
 * </p>
 * @return int 属性の値、あるいはエラー時に boolean <b>FALSE</b> を返します。
 */
function collator_get_attribute(int $attr): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 照合用の属性を設定する
 * @link http://php.net/manual/ja/collator.setattribute.php
 * @param int $attr <p>属性。</p>
 * @param int $val <p>
 * 属性の値。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function collator_set_attribute(int $attr, int $val): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 現在の照合強度を取得する
 * @link http://php.net/manual/ja/collator.getstrength.php
 * @param Collator $object
 * @return int 現在の照合強度、あるいはエラー時に boolean <b>FALSE</b> を返します。
 */
function collator_get_strength(Collator $object): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 照合強度を設定する
 * @link http://php.net/manual/ja/collator.setstrength.php
 * @param int $strength <p>設定する強度。</p>
 * <p>
 * 以下のいずれかです。
 * <p>
 * <b>Collator::PRIMARY</b>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function collator_set_strength(int $strength): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 指定した collator で配列を並べ替える
 * @link http://php.net/manual/ja/collator.sort.php
 * @param array $arr <p>
 * 並べ替えたい文字列の配列。
 * </p>
 * @param int $sort_flag [optional] <p>
 * オプションの並べ替え方式。以下のいずれか。
 * </p>
 * <p>
 * <p>
 * <b>Collator::SORT_REGULAR</b>
 * - 通常の比較 (型を変更しない)
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function collator_sort(array &$arr, int $sort_flag = null): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 指定した collator とキーで配列を並べ替える
 * @link http://php.net/manual/ja/collator.sortwithsortkeys.php
 * @param array $arr <p>並べ替えたい文字列の配列。</p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function collator_sort_with_sort_keys(array &$arr): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * インデックスの情報を保持しつつ配列を並べ替える
 * @link http://php.net/manual/ja/collator.asort.php
 * @param array $arr <p>並べ替えたい文字列の配列。</p>
 * @param int $sort_flag [optional] <p>
 * オプションの並べ替え方式。以下のいずれか。
 * <p>
 * <b>Collator::SORT_REGULAR</b>
 * - 通常の比較 (型を変更しない)
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function collator_asort(array &$arr, int $sort_flag = null): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * collator のロケール名を取得する
 * @link http://php.net/manual/ja/collator.getlocale.php
 * @param int $type <p>
 * 妥当なロケールか実際のロケール (それぞれ
 * <b>Locale::VALID_LOCALE</b> および
 * <b>Locale::ACTUAL_LOCALE</b>)。
 * </p>
 * @return string 照合データの実際のロケール名を返します。ルールベースの collator
 * のインスタンスの場合やエラーが発生した場合は
 * boolean <b>FALSE</b> を返します。
 */
function collator_get_locale(int $type): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * collator の直近のエラーコードを取得する
 * @link http://php.net/manual/ja/collator.geterrorcode.php
 * @param Collator $object
 * @return int 直近の Collator API 関数コールが返したエラーコードを返します。
 */
function collator_get_error_code(Collator $object): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * collator の直近のエラーコードのテキストを取得する
 * @link http://php.net/manual/ja/collator.geterrormessage.php
 * @param Collator $object
 * @return string 直近の Collator API 関数コールで発生したエラーの説明を返します。
 */
function collator_get_error_message(Collator $object): string {}

/**
 * (PHP 5 &gt;= 5.3.11, PHP 7, PECL intl &gt;= 1.0.3)<br/>
 * 文字列のソート用のキーを取得する
 * @link http://php.net/manual/ja/collator.getsortkey.php
 * @param string $str <p>
 * キーの生成元となる文字列。
 * </p>
 * @return string 文字列の照合キーを返します。照合キーを、文字列のかわりに直接比較することができます。
 */
function collator_get_sort_key(string $str): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 数値フォーマッタを作成する
 * @link http://php.net/manual/ja/numberformatter.create.php
 * @param string $locale <p>
 * 数値フォーマットするロケール (ロケール名。たとえば en_CA)。
 * </p>
 * @param int $style <p>
 * フォーマットの形式。
 * フォーマット形式 定数のいずれか。
 * <b>NumberFormatter::PATTERN_DECIMAL</b>
 * あるいは <b>NumberFormatter::PATTERN_RULEBASED</b>
 * を指定した場合は指定したパターンの数値フォーマットをオープンします。
 * これは、それぞれ
 * ICU DecimalFormat
 * ドキュメント あるいは
 * ICU RuleBasedNumberFormat
 * ドキュメント で述べられている構文を満たす必要があります。
 * </p>
 * @param string $pattern [optional] <p>
 * 選択した形式がパターンを要求するものである場合のパターン文字列。
 * </p>
 * @return NumberFormatter <b>NumberFormatter</b> オブジェクト、
 * あるいはエラー時に <b>FALSE</b> を返します。
 */
function numfmt_create(string $locale, int $style, string $pattern = null): NumberFormatter {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 数値をフォーマットする
 * @link http://php.net/manual/ja/numberformatter.format.php
 * @param number $value <p>
 * フォーマットする値。integer あるいは float
 * で指定します。その他の型は数値に変換されます。
 * </p>
 * @param int $type [optional] <p>
 * 使用する
 * フォーマット形式。
 * </p>
 * @return string フォーマットした値を文字列で返します。
 * エラー時には <b>FALSE</b> を返します。
 */
function numfmt_format($value, int $type = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 数値をパースする
 * @link http://php.net/manual/ja/numberformatter.parse.php
 * @param string $value
 * @param int $type [optional] <p>
 * 使用する
 * フォーマット形式。デフォルトでは
 * <b>NumberFormatter::TYPE_DOUBLE</b> を使用します。
 * </p>
 * @param int $position [optional] <p>
 * 文字列中でパースを開始する位置のオフセット。
 * 結果を返す際に、この値はパース終了時のオフセットを保持します。
 * </p>
 * @return mixed パースした数値、あるいはエラー時に <b>FALSE</b> を返します。
 */
function numfmt_parse(string $value, int $type = null, int &$position = null) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 通貨の値をフォーマットする
 * @link http://php.net/manual/ja/numberformatter.formatcurrency.php
 * @param float $value <p>
 * 通貨の値。
 * </p>
 * @param string $currency <p>
 * 使用する通貨を表す、3 文字の ISO 4217 通貨コード。
 * </p>
 * @return string 通貨の値をフォーマットした文字列を返します。
 */
function numfmt_format_currency(float $value, string $currency): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 通貨をパースする
 * @link http://php.net/manual/ja/numberformatter.parsecurrency.php
 * @param string $value
 * @param string $currency <p>
 * 通貨名 (3 文字の ISO 4217 通貨コード) を受け取るパラメータ。
 * </p>
 * @param int $position [optional] <p>
 * 文字列中でパースを開始する位置のオフセット。
 * 結果を返す際に、この値はパース終了時のオフセットを保持します。
 * </p>
 * @return float パースした数値、あるいはエラー時に <b>FALSE</b> を返します。
 */
function numfmt_parse_currency(string $value, string &$currency, int &$position = null): float {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 属性を設定する
 * @link http://php.net/manual/ja/numberformatter.setattribute.php
 * @param int $attr <p>
 * 属性指定子。
 * 数値属性 定数のいずれか。
 * </p>
 * @param int $value <p>
 * 属性の値。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function numfmt_set_attribute(int $attr, int $value): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 属性を取得する
 * @link http://php.net/manual/ja/numberformatter.getattribute.php
 * @param int $attr <p>
 * 属性指定子。
 * 数値属性 定数のいずれか。
 * </p>
 * @return int 成功した場合に属性の値、エラー時に <b>FALSE</b> を返します。
 */
function numfmt_get_attribute(int $attr): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * テキスト属性を設定する
 * @link http://php.net/manual/ja/numberformatter.settextattribute.php
 * @param int $attr <p>
 * 属性指定子。
 * テキスト属性
 * 定数のいずれか。
 * </p>
 * @param string $value <p>
 * 属性の値を表すテキスト。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function numfmt_set_text_attribute(int $attr, string $value): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * テキストの属性を取得する
 * @link http://php.net/manual/ja/numberformatter.gettextattribute.php
 * @param int $attr <p>
 * 属性指定子。
 * テキスト属性 定数のいずれか。
 * </p>
 * @return string 成功した場合に属性の値、あるいはエラー時に <b>FALSE</b> を返します。
 */
function numfmt_get_text_attribute(int $attr): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 記号の値を設定する
 * @link http://php.net/manual/ja/numberformatter.setsymbol.php
 * @param int $attr <p>
 * 記号指定子。
 * フォーマット記号 定数のいずれか。
 * </p>
 * @param string $value <p>
 * その記号に対応するテキスト。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function numfmt_set_symbol(int $attr, string $value): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 記号を取得する
 * @link http://php.net/manual/ja/numberformatter.getsymbol.php
 * @param int $attr <p>
 * 記号指定子。
 * フォーマット記号 定数のいずれか。
 * </p>
 * @return string 記号文字列、あるいはエラー時に <b>FALSE</b> を返します。
 */
function numfmt_get_symbol(int $attr): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * フォーマッタのパターンを設定する
 * @link http://php.net/manual/ja/numberformatter.setpattern.php
 * @param string $pattern <p>
 * ICU DecimalFormat
 * ドキュメント で述べられている構文によるパターン。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function numfmt_set_pattern(string $pattern): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * フォーマッタのパターンを取得する
 * @link http://php.net/manual/ja/numberformatter.getpattern.php
 * @param $nf
 * @return string このフォーマッタが使用するパターン文字列、
 * あるいはエラー発生時に <b>FALSE</b> を返します。
 */
function numfmt_get_pattern($nf): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * フォーマッタのロケールを取得する
 * @link http://php.net/manual/ja/numberformatter.getlocale.php
 * @param int $type [optional] <p>
 * 妥当なロケールあるいは正確なロケールのいずれか (
 * <b>Locale::VALID_LOCALE</b>,
 * <b>Locale::ACTUAL_LOCALE</b>,
 * respectively) を選択します。デフォルトは実際のロケールです。
 * </p>
 * @return string フォーマッタの作成時に使用したロケールを返します。
 */
function numfmt_get_locale(int $type = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * フォーマッタの直近のエラーコードを取得する
 * @link http://php.net/manual/ja/numberformatter.geterrorcode.php
 * @param $nf
 * @return int 直近の関数コールのエラーコードを返します。
 */
function numfmt_get_error_code($nf): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * フォーマッタの直近のエラーメッセージを取得する
 * @link http://php.net/manual/ja/numberformatter.geterrormessage.php
 * @param $nf
 * @return string 直近の関数コールのエラーメッセージを返します。
 */
function numfmt_get_error_message($nf): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 渡された入力を正規化し、正規化後の文字列を返す
 * @link http://php.net/manual/ja/normalizer.normalize.php
 * @param string $input <p>正規化する入力文字列。</p>
 * @param int $form [optional] <p>正規化方式のいずれか。</p>
 * @return string 正規化後の文字列、あるいはエラーが発生した場合に <b>FALSE</b> を返します。
 */
function normalizer_normalize(string $input, int $form = Normalizer::FORM_C): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 渡された文字列が、指定した正規化を適用済みかどうかを調べる
 * @link http://php.net/manual/ja/normalizer.isnormalized.php
 * @param string $input <p>正規化する入力文字列。</p>
 * @param int $form [optional] <p>
 * 正規化方式のいずれか。
 * </p>
 * @return bool 正規化されている場合に <b>TRUE</b>、正規化されていない場合やエラーが発生した場合に <b>FALSE</b> を返します。
 */
function normalizer_is_normalized(string $input, int $form = Normalizer::FORM_C): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * INTL のグローバル 'default_locale' からデフォルトのロケールを取得する
 * @link http://php.net/manual/ja/locale.getdefault.php
 * @return string 現在の実行時ロケールを返します。
 */
function locale_get_default(): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * デフォルトの実行時ロケールを設定する
 * @link http://php.net/manual/ja/locale.setdefault.php
 * @param string $locale <p>
 * BCP 47 準拠の言語タグ。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function locale_set_default(string $locale): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 入力ロケールのプライマリ言語を取得する
 * @link http://php.net/manual/ja/locale.getprimarylanguage.php
 * @param string $locale <p>
 * プライマリ言語コードを取り出したいロケール。
 * </p>
 * @return string このロケールの言語コード、あるいはエラー時に <b>NULL</b> を返します。
 */
function locale_get_primary_language(string $locale): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 入力ロケールの文字を取得する
 * @link http://php.net/manual/ja/locale.getscript.php
 * @param string $locale <p>
 * 文字を取り出したいロケール。
 * </p>
 * @return string このロケールの文字サブタグ、あるいは存在しない場合に <b>NULL</b> を返します。
 */
function locale_get_script(string $locale): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 入力ロケールの地域を取得する
 * @link http://php.net/manual/ja/locale.getregion.php
 * @param string $locale <p>
 * 地域コードを取り出したいロケール。
 * </p>
 * @return string このロケールの地域サブタグ、あるいは存在しない場合に <b>NULL</b> を返します。
 */
function locale_get_region(string $locale): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 入力ロケールのキーワードを取得する
 * @link http://php.net/manual/ja/locale.getkeywords.php
 * @param string $locale <p>
 * キーワードを取り出したいロケール。
 * </p>
 * @return array このロケールのキーワードと値のペアを連想配列で返します。
 */
function locale_get_keywords(string $locale): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 入力ロケールの文字の表示名を、適切に地域化して返す
 * @link http://php.net/manual/ja/locale.getdisplayscript.php
 * @param string $locale <p>
 * 表示文字を返したいロケール。
 * </p>
 * @param string $in_locale [optional] <p>
 * オプションのフォーマットロケール。
 * 文字名の表示に使用します。
 * </p>
 * @return string $locale に対応する文字の表示名を、
 * $in_locale にあわせた形式で返します。
 */
function locale_get_display_script(string $locale, string $in_locale = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 入力ロケールの地域の表示名を、適切に地域化して返す
 * @link http://php.net/manual/ja/locale.getdisplayregion.php
 * @param string $locale <p>
 * 表示地域を返したいロケール。
 * </p>
 * @param string $in_locale [optional] <p>
 * オプションのフォーマットロケール。
 * 地域名の表示に使用します。
 * </p>
 * @return string $locale に対応する地域の表示名を、
 * $in_locale にあわせた形式で返します。
 */
function locale_get_display_region(string $locale, string $in_locale = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 入力ロケールの表示名を、適切に地域化して返す
 * @link http://php.net/manual/ja/locale.getdisplayname.php
 * @param string $locale <p>
 * 表示名を返したいロケール。
 * </p>
 * @param string $in_locale [optional] <p>オプションのフォーマットロケール。</p>
 * @return string ロケールの表示名を、
 * $in_locale にあわせた形式で返します。
 */
function locale_get_display_name(string $locale, string $in_locale = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 入力ロケールの言語の表示名を、適切に地域化して返す
 * @link http://php.net/manual/ja/locale.getdisplaylanguage.php
 * @param string $locale <p>
 * 表示言語を返したいロケール。
 * </p>
 * @param string $in_locale [optional] <p>
 * オプションのフォーマットロケール。
 * 言語名の表示に使用します。
 * </p>
 * @return string $locale に対応する言語の表示名を、
 * $in_locale にあわせた形式で返します。
 */
function locale_get_display_language(string $locale, string $in_locale = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 入力ロケールの変化形の表示名を、適切に地域化して返す
 * @link http://php.net/manual/ja/locale.getdisplayvariant.php
 * @param string $locale <p>
 * 表示変化形を返したいロケール。
 * </p>
 * @param string $in_locale [optional] <p>
 * オプションのフォーマットロケール。
 * 変化形の表示に使用します。
 * </p>
 * @return string $locale に対応する変化形の表示名を、
 * $in_locale にあわせた形式で返します。
 */
function locale_get_display_variant(string $locale, string $in_locale = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 正しく並べ替えて区切られたロケール ID を返す
 * @link http://php.net/manual/ja/locale.composelocale.php
 * @param array $subtags <p>
 * キーと値のペアを含む配列。
 * キーには特定のロケール ID サブタグを指定し、
 * そのサブタグの値を関連付けます。
 * <p>
 * サブタグ 'variant' と 'private' には最大で 15 の値を指定できますが、
 * 'extlang' には最大で 3 つの値しか指定できません。
 * variant には 0 から 14 までのサフィックスをつけることができ、
 * 配列のキーは variant0, variant1, ...,variant14 となります。
 * 返されるロケール ID において、このサブタグは
 * variant0、variant1、variant2、……の順に並びます。
 * </p>
 * <p>
 * 'variant'、'private' および 'extlang' で複数の値を指定するには、
 * そのキー (例 'variant') の値に配列を指定するか、数字つきの複数のキー
 * (例 'variant0'、'variant1' など) を使用します。
 * </p>
 * </p>
 * @return string 対応するロケール識別子を返します。
 */
function locale_compose(array $subtags): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * ロケール ID のサブタグ要素を連想配列で返す
 * @link http://php.net/manual/ja/locale.parselocale.php
 * @param string $locale <p>
 * サブタグの配列を取り出したいロケール。
 * 注意: サブタグ 'variant' と 'private' には最大で 15 の値を指定できますが、
 * 'extlang' には最大で 3 つの値しか指定できません。
 * </p>
 * @return array 連想配列を返します。キーがロケール ID サブタグを表し、
 * そのサブタグの値が関連付けられています。
 * この配列の並び順はロケール ID サブタグの順となります。変化形が
 * '-varX-varY-varZ' の場合、返される配列は
 * variant0=&gt;varX , variant1=&gt;varY ,
 * variant2=&gt;varZ のようになります。
 */
function locale_parse(string $locale): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 入力ロケールの変化系を取得する
 * @link http://php.net/manual/ja/locale.getallvariants.php
 * @param string $locale <p>
 * 変化系を取得したいロケール。
 * </p>
 * @return array そのロケールのすべての variant サブタグを含む配列、あるいは存在しない場合に
 * <b>NULL</b> を返します。
 */
function locale_get_all_variants(string $locale): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 言語タグフィルタがロケールにマッチするかどうかを調べる
 * @link http://php.net/manual/ja/locale.filtermatches.php
 * @param string $langtag <p>
 * 調べたい言語タグ。
 * </p>
 * @param string $locale <p>
 * 調べる対象となる言語の範囲。
 * </p>
 * @param bool $canonicalize [optional] <p>
 * true の場合は、引数を正式な形式に変換してからマッチを行います。
 * </p>
 * @return bool $locale が $langtag にマッチする場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function locale_filter_matches(string $langtag, string $locale, bool $canonicalize = false): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * ロケール文字列を正規化する
 * @link http://php.net/manual/ja/locale.canonicalize.php
 * @param string $locale <p>
 * </p>
 * @return string
 */
function locale_canonicalize(string $locale): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * その言語にマッチする言語タグの一覧を検索する
 * @link http://php.net/manual/ja/locale.lookup.php
 * @param array $langtag <p>
 * <i>locale</i> と比較したい言語タグの一覧を含む配列。
 * 最大で 100 件まで指定できます。
 * </p>
 * @param string $locale <p>
 * 調べる対象となる言語の範囲として使用するロケール。
 * </p>
 * @param bool $canonicalize [optional] <p>
 * true の場合は、引数を正式な形式に変換してからマッチを行います。
 * </p>
 * @param string $default [optional] <p>
 * マッチしなかったときに使用するロケール。
 * </p>
 * @return string 最も近い言語タグ、あるいはデフォルトの値を返します。
 */
function locale_lookup(array $langtag, string $locale, bool $canonicalize = false, string $default = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 最もあてはまるロケールを HTTP "Accept-Language" ヘッダにもとづいて探す
 * @link http://php.net/manual/ja/locale.acceptfromhttp.php
 * @param string $header <p>
 * "Accept-Language" ヘッダを含む文字列。RFC 2616 形式。
 * </p>
 * @return string 対応するロケール ID を返します。
 */
function locale_accept_from_http(string $header): string {}

/**
 * @param $locale
 * @param $pattern
 */
function msgfmt_create($locale, $pattern) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * メッセージをフォーマットする
 * @link http://php.net/manual/ja/messageformatter.format.php
 * @param array $args <p>
 * フォーマット文字列に埋め込む引数。
 * </p>
 * @return string フォーマットした文字列を返します。
 * あるいはエラーが発生した場合は <b>FALSE</b> を返します。
 */
function msgfmt_format(array $args): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 手早くメッセージをフォーマットする
 * @link http://php.net/manual/ja/messageformatter.formatmessage.php
 * @param string $locale <p>
 * ロケールに依存する部分をフォーマットする際に使用するロケール。
 * </p>
 * @param string $pattern <p>
 * 使用するパターン文字列。
 * パターンには、'アポストロフィに優しい' 構文を使用します。
 * umsg_autoQuoteApostrophe
 * を通してから解釈が行われます。
 * </p>
 * @param array $args <p>
 * フォーマット文字列に埋め込む値の配列。
 * </p>
 * @return string フォーマットしたパターン文字列を返します。
 * エラーが発生した場合は <b>FALSE</b> を返します。
 */
function msgfmt_format_message(string $locale, string $pattern, array $args): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * パターンを使用して入力文字列をパースする
 * @link http://php.net/manual/ja/messageformatter.parse.php
 * @param string $value <p>
 * パースする文字列。
 * </p>
 * @return array 取り出した項目を含む配列を返します。
 * エラーが発生した場合は <b>FALSE</b> を返します。
 */
function msgfmt_parse(string $value): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 手早く入力文字列をパースする
 * @link http://php.net/manual/ja/messageformatter.parsemessage.php
 * @param string $locale <p>
 * ロケールに依存する部分をパースする際に使用するロケール。
 * </p>
 * @param string $pattern <p>
 * <i>value</i> のパースに使うパターン。
 * </p>
 * @param string $source <p>
 * パースする文字列。<i>pattern</i> を満たします。
 * </p>
 * @return array 取り出した項目を含む配列を返します。
 * エラーが発生した場合は <b>FALSE</b> を返します。
 */
function msgfmt_parse_message(string $locale, string $pattern, string $source): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * フォーマッタが使用するパターンを設定する
 * @link http://php.net/manual/ja/messageformatter.setpattern.php
 * @param string $pattern <p>
 * このメッセージフォーマッタで使用するパターン文字列。
 * パターンには、'アポストロフィに優しい' 構文を使用します。
 * umsg_autoQuoteApostrophe
 * を通してから解釈が行われます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function msgfmt_set_pattern(string $pattern): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * フォーマッタが使用するパターンを取得する
 * @link http://php.net/manual/ja/messageformatter.getpattern.php
 * @param $mf
 * @return string このメッセージフォーマッタのパターン文字列を返します。
 */
function msgfmt_get_pattern($mf): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * フォーマッタを作成した際のロケールを取得する
 * @link http://php.net/manual/ja/messageformatter.getlocale.php
 * @param $mf
 * @return string ロケール名を返します。
 */
function msgfmt_get_locale($mf): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 直近の操作のエラーコードを取得する
 * @link http://php.net/manual/ja/messageformatter.geterrorcode.php
 * @param $nf
 * @return int エラーコードを返します。UErrorCode の値のいずれかです。
 * 初期値は U_ZERO_ERROR となります。
 */
function msgfmt_get_error_code($nf): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 直近の操作のエラーテキストを取得する
 * @link http://php.net/manual/ja/messageformatter.geterrormessage.php
 * @param $coll
 * @return string 直近のエラーの説明を返します。
 */
function msgfmt_get_error_message($coll): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Date Formatter を作成する
 * @link http://php.net/manual/ja/intldateformatter.create.php
 * @param string $locale <p>
 * フォーマットやパースの際に使用するロケール。<b>NULL</b> を指定すると、
 * ini 設定 intl.default_locale
 * の値を使います。
 * </p>
 * @param int $datetype <p>
 * 使用する日付の形式 (<b>none</b>,
 * <b>short</b>, <b>medium</b>,
 * <b>long</b>, <b>full</b>)。
 * IntlDateFormatter の定数
 * のいずれかとなります。
 * <b>NULL</b> を指定すると、ICU のデフォルトの日付型を使います。
 * </p>
 * @param int $timetype <p>
 * 使用する時刻の形式 (<b>none</b>,
 * <b>short</b>, <b>medium</b>,
 * <b>long</b>, <b>full</b>)。
 * IntlDateFormatter の定数
 * のいずれかとなります。
 * <b>NULL</b> を指定すると、ICU のデフォルトの時刻型を使います。
 * </p>
 * @param mixed $timezone [optional] <p>
 * タイムゾーン ID。デフォルト (そして、<b>NULL</b> が渡されたときにも使われるもの)
 * は <b>date_default_timezone_get</b> が返す ID、あるいは
 * <i>calendar</i> パラメータに <b>IntlCalendar</b>
 * オブジェクトが渡されていればそのタイムゾーンを使います。
 * この ID は、ICU のデータベースにある妥当な識別子である必要があります。あるいは、
 * オフセットを明示した GMT-05:30 のような形式になります。
 * </p>
 * <p>
 * <b>IntlTimeZone</b> オブジェクトあるいは
 * <b>DateTimeZone</b> オブジェクトも指定できます。
 * </p>
 * @param mixed $calendar [optional] <p>
 * フォーマットやパースの際に使用するカレンダー。デフォルトは <b>NULL</b> で、
 * これは <b>IntlDateFormatter::GREGORIAN</b> を表します。
 * IntlDateFormatter のカレンダー定数
 * あるいは <b>IntlCalendar</b> を指定します。
 * 渡された <b>IntlCalendar</b> は、クローンされます。
 * <b>IntlDateFormatter</b> によって元のオブジェクトが書き換えられることはありません。
 * これは、利用するカレンダーの型 (グレゴリオ暦、イスラム暦、ペルシア暦など) の判定に使います。
 * また、<i>timezone</i> パラメータに <b>NULL</b> を指定した場合にはタイムゾーンの判定にも使います。
 * </p>
 * @param string $pattern [optional] <p>
 * フォーマットやパースの際に使用するオプションのパターン。
 * 使えるパターンについては http://userguide.icu-project.org/formatparse/datetime
 * を参照ください。
 * </p>
 * @return IntlDateFormatter 作成された <b>IntlDateFormatter</b> を返します。失敗した場合は <b>FALSE</b> を返します。
 */
function datefmt_create(string $locale, int $datetype, int $timetype, $timezone = NULL, $calendar = NULL, string $pattern = ""): IntlDateFormatter {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * IntlDateFormatter が使用する日付形式を取得する
 * @link http://php.net/manual/ja/intldateformatter.getdatetype.php
 * @param $mf
 * @return int Formatter の現在の 日付形式
 * の値を返します。
 */
function datefmt_get_datetype($mf): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * IntlDateFormatter が使用する時刻形式を取得する
 * @link http://php.net/manual/ja/intldateformatter.gettimetype.php
 * @param $mf
 * @return int Formatter の現在の 日付形式
 * の値を返します。
 */
function datefmt_get_timetype($mf): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * IntlDateFormatter が使用するカレンダー型を取得する
 * @link http://php.net/manual/ja/intldateformatter.getcalendar.php
 * @param $mf
 * @return int Formatter が使用する
 * カレンダー型
 * を返します。
 * <b>IntlDateFormatter::TRADITIONAL</b> あるいは
 * <b>IntlDateFormatter::GREGORIAN</b> です。
 */
function datefmt_get_calendar($mf): int {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
 * カレンダーオブジェクトのコピーを取得する
 * @link http://php.net/manual/ja/intldateformatter.getcalendarobject.php
 * @param $mf
 * @return IntlCalendar このフォーマッターが内部的に使うカレンダーオブジェクトのコピーを返します。
 */
function datefmt_get_calendar_object($mf): IntlCalendar {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Formatter が使うカレンダー型を設定する
 * @link http://php.net/manual/ja/intldateformatter.setcalendar.php
 * @param mixed $which <p>
 * 使用する カレンダー型
 * (デフォルトは <b>IntlDateFormatter::GREGORIAN</b> で、
 * <b>NULL</b> を指定した場合にもこれを使います)、あるいは
 * <b>IntlCalendar</b> オブジェクト。
 * </p>
 * <p>
 * <b>IntlCalendar</b> オブジェクトが渡された場合は、それをクローンします。
 * 引数として渡したオブジェクトは、何も変更されません。
 * </p>
 * <p>
 * フォーマッターのタイムゾーンを残すのは
 * <b>IntlCalendar</b> オブジェクトが渡されなかった場合だけで、
 * このオブジェクトが渡された場合は新しいタイムゾーンを利用します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function datefmt_set_calendar($which): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Formatter が使用するロケールを取得する
 * @link http://php.net/manual/ja/intldateformatter.getlocale.php
 * @param int $which [optional]
 * @return string この Formatter のロケール、あるいはエラーの場合は 'false' を返します。
 */
function datefmt_get_locale(int $which = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * IntlDateFormatter が使用するタイムゾーン ID を取得する
 * @link http://php.net/manual/ja/intldateformatter.gettimezoneid.php
 * @param $mf
 * @return string この Formatter が使用するタイムゾーンの ID 文字列を返します。
 */
function datefmt_get_timezone_id($mf): string {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
 * タイムゾーンを取得する
 * @link http://php.net/manual/ja/intldateformatter.gettimezone.php
 * @param $mf
 * @return IntlTimeZone <b>IntlTimeZone</b> オブジェクトを返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function datefmt_get_timezone($mf): IntlTimeZone {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
 * タイムゾーンを設定する
 * @link http://php.net/manual/ja/intldateformatter.settimezone.php
 * @param mixed $zone <p>
 * 利用するタイムゾーン。次の形式で指定できます。
 * </p>
 * @return boolean 成功した場合に <b>TRUE</b>、失敗した場合に <b>FALSE</b> を返します。
 */
function datefmt_set_timezone($zone): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * IntlDateFormatter が使用するパターンを取得する
 * @link http://php.net/manual/ja/intldateformatter.getpattern.php
 * @param $mf
 * @return string フォーマット/パース 時に使用するパターン文字列を返します。
 */
function datefmt_get_pattern($mf): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * IntlDateFormatter が使用するパターンを設定する
 * @link http://php.net/manual/ja/intldateformatter.setpattern.php
 * @param string $pattern <p>
 * 使用するパターン文字列。
 * 使えるパターンについては http://userguide.icu-project.org/formatparse/datetime
 * を参照ください。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * 間違ったフォーマット文字列を指定すると、失敗します。
 */
function datefmt_set_pattern(string $pattern): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * IntlDateFormatter で使用する寛大さを取得する
 * @link http://php.net/manual/ja/intldateformatter.islenient.php
 * @param $mf
 * @return bool 寛大なパーサの場合は <b>TRUE</b>、厳格なパーサの場合は <b>FALSE</b> 返します。
 * デフォルトのパーサは寛大なパーサです。
 */
function datefmt_is_lenient($mf): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * パーサの寛大さを設定する
 * @link http://php.net/manual/ja/intldateformatter.setlenient.php
 * @param bool $lenient <p>
 * パーサを寛大なものにするかどうか。デフォルトは <b>TRUE</b> (寛大) です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function datefmt_set_lenient(bool $lenient): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 日付/時刻 の値を文字列としてフォーマットする
 * @link http://php.net/manual/ja/intldateformatter.format.php
 * @param mixed $value <p>
 * フォーマットする値。<b>DateTime</b> オブジェクト、
 * <b>IntlCalendar</b> オブジェクト、
 * epoch からの経過秒数を表す数値 (小数になる可能性もある)、
 * あるいは <b>localtime</b> が出力する形式の配列となります。
 * </p>
 * <p>
 * <b>DateTime</b> オブジェクトあるいは
 * <b>IntlCalendar</b> オブジェクトを渡した場合は、
 * そのタイムゾーンは考慮しません。これらをフォーマットするときに使うのは、
 * フォーマッターで設定されているタイムゾーンです。
 * 渡したオブジェクトのタイムゾーンを使って欲しい場合は、
 * <b>IntlDateFormatter::setTimeZone</b>
 * を呼んでそのオブジェクトのタイムゾーンを設定しておかなければいけません。
 * あるいは、静的関数
 * <b>IntlDateFormatter::formatObject</b> をかわりに使ってもかまいません。
 * </p>
 * @return string フォーマットされた文字列、あるいはエラーが発生した場合は <b>FALSE</b> を返します。
 */
function datefmt_format($value): string {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
 * オブジェクトの書式を設定する
 * @link http://php.net/manual/ja/intldateformatter.formatobject.php
 * @param object $object <p>
 * <b>IntlCalendar</b> あるいは
 * <b>DateTime</b> 型のオブジェクト。
 * このオブジェクトの中のタイムゾーン情報を使います。
 * </p>
 * @param mixed $format [optional] <p>
 * 日付/時刻のフォーマット方法。二つの要素からなる配列
 * (最初の要素が日付のスタイル、二番目の要素が時刻のスタイル。それぞれ、定数
 * <b>IntlDateFormatter::NONE</b>、
 * <b>IntlDateFormatter::SHORT</b>、
 * <b>IntlDateFormatter::MEDIUM</b>、
 * <b>IntlDateFormatter::LONG</b>、
 * <b>IntlDateFormatter::FULL</b> のいずれか)、
 * これらの定数のいずれかの値を表す long 型
 * (日付と時刻の両方に使います)、あるいは
 * ICU
 * のドキュメント にあるフォーマットを表す文字列を指定します。<b>NULL</b> を渡した場合はデフォルトのスタイルを使います。
 * </p>
 * @param string $locale [optional] <p>
 * 利用するロケール。<b>NULL</b> を渡した場合は デフォルトのロケール を使います。
 * </p>
 * @return string 結果を文字列で返します。失敗した場合に <b>FALSE</b> を返します。
 */
function datefmt_format_object($object, $format = NULL, string $locale = NULL): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 文字列をパースしてタイムスタンプにする
 * @link http://php.net/manual/ja/intldateformatter.parse.php
 * @param string $value <p>
 * 時間に変換する文字列。
 * </p>
 * @param int $position [optional] <p>
 * $value のパースを開始する位置 (ゼロから数えます)。
 * $value を処理する前にエラーが発生していない場合は
 * $parse_pos は -1 となります。それ以外の場合はパースが終了した位置となります
 * (そしてエラーが発生します)。
 * この変数には、パースが失敗した場合にその終了位置が含まれます。
 * $parse_pos > strlen($value) の場合、パースは即時に失敗します。
 * </p>
 * @return int タイムスタンプとしてパースされた値を返します。
 * パースできなかった場合は <b>FALSE</b> を返します。
 */
function datefmt_parse(string $value, int &$position = null): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 文字列をパースして、フィールドベースの時刻値にする
 * @link http://php.net/manual/ja/intldateformatter.localtime.php
 * @param string $value <p>
 * 時間に変換する文字列。
 * </p>
 * @param int $position [optional] <p>
 * $value のパースを開始する位置 (ゼロから数えます)。
 * $value を処理する前にエラーが発生していない場合は
 * $parse_pos は -1 となります。それ以外の場合はパースが終了した位置となります
 * (そしてエラーが発生します)。
 * この変数には、パースが失敗した場合にその終了位置が含まれます。
 * $parse_pos > strlen($value) の場合、パースは即時に失敗します。
 * </p>
 * @return array Localtime 互換の、整数値の配列を返します。
 * tm_hour フィールド内の、24 時間制の時刻の値を含みます。
 */
function datefmt_localtime(string $value, int &$position = null): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 直近の操作のエラーコードを取得する
 * @link http://php.net/manual/ja/intldateformatter.geterrorcode.php
 * @param $nf
 * @return int エラーコードを返します。UErrorCode のいずれかの値となります。初期値は U_ZERO_ERROR です。
 */
function datefmt_get_error_code($nf): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 直近の操作のエラーテキストを取得する
 * @link http://php.net/manual/ja/intldateformatter.geterrormessage.php
 * @param $coll
 * @return string 直近のエラーの説明を返します。
 */
function datefmt_get_error_message($coll): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 書記素単位で文字列の長さを取得する
 * @link http://php.net/manual/ja/function.grapheme-strlen.php
 * @param string $input <p>
 * 長さを調べたい文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @return int 成功した場合に文字列の長さ。文字列が空の場合に 0 を返します。
 */
function grapheme_strlen(string $input): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 文字列内で最初にあらわれる場所の (書記素単位の) 位置を見つける
 * @link http://php.net/manual/ja/function.grapheme-strpos.php
 * @param string $haystack <p>
 * 探す対象となる文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param string $needle <p>
 * 探したい文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param int $offset [optional] <p>
 * オプションの $offset パラメータで、$haystack
 * のどの位置 (バイト数や文字数ではなく、書記素単位) から探し始めるのかを指定します。
 * 負のオフセットは、文字列の末尾からのオフセットと解釈されます。
 * $offset の値にかかわらず、返される値は常に haystack
 * の先頭からの位置になります。
 * </p>
 * @return int 位置を表す整数値を返します。needle が見つからない場合は
 * grapheme_strpos() は FALSE を返します。
 */
function grapheme_strpos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 大文字小文字を区別せず、文字列内で最初にあらわれる場所の (書記素単位の) 位置を見つける
 * @link http://php.net/manual/ja/function.grapheme-stripos.php
 * @param string $haystack <p>
 * 探す対象となる文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param string $needle <p>
 * 探したい文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param int $offset [optional] <p>
 * オプションの $offset パラメータで、$haystack
 * のどの位置 (バイト数や文字数ではなく、書記素単位) から探し始めるのかを指定します。
 * 負の値を指定した場合は、文字列の末尾からのオフセットとみなします。
 * $offset の値にかかわらず、返される値は常に haystack
 * の先頭からの位置になります。
 * </p>
 * @return int 位置を表す整数値を返します。needle が見つからない場合は
 * grapheme_stripos() は FALSE を返します。
 */
function grapheme_stripos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 文字列内で最後にあらわれる場所の (書記素単位の) 位置を見つける
 * @link http://php.net/manual/ja/function.grapheme-strrpos.php
 * @param string $haystack <p>
 * 探す対象となる文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param string $needle <p>
 * 探したい文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param int $offset [optional] <p>
 * オプションの $offset パラメータで、$haystack
 * のどの位置 (バイト数や文字数ではなく、書記素単位) から探し始めるのかを指定します。
 * $offset の値にかかわらず、返される値は常に haystack
 * の先頭からの位置になります。
 * </p>
 * @return int 位置を表す整数値を返します。needle が見つからない場合は
 * grapheme_strrpos() は FALSE を返します。
 */
function grapheme_strrpos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 大文字小文字を区別せず、文字列内で最後にあらわれる場所の (書記素単位の) 位置を見つける
 * @link http://php.net/manual/ja/function.grapheme-strripos.php
 * @param string $haystack <p>
 * 探す対象となる文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param string $needle <p>
 * 探したい文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param int $offset [optional] <p>
 * オプションの $offset パラメータで、$haystack
 * のどの位置 (バイト数や文字数ではなく、書記素単位) から探し始めるのかを指定します。
 * $offset の値にかかわらず、返される値は常に haystack
 * の先頭からの位置になります。
 * </p>
 * @return int 位置を表す整数値を返します。needle が見つからない場合は
 * grapheme_strripos() は FALSE を返します。
 */
function grapheme_strripos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 部分文字列を返す
 * @link http://php.net/manual/ja/function.grapheme-substr.php
 * @param string $string <p>
 * 入力文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param int $start <p>
 * デフォルトの書記素単位での開始位置。
 * $start がゼロ以上である場合は、$string の
 * $start 番目の位置から始まる文字列を返します。位置はゼロから数え始めます。
 * $start が負の場合は、文字列の末尾から数えて
 * $start 番目 (書記素単位) の位置以降の文字列を返します。
 * </p>
 * @param int $length [optional] <p>
 * 長さを書記素単位で指定します。
 * $length が正の値の場合は、$start から数えて最大
 * $length 文字までの文字列を返します (文字列全体の長さによって変わります)。
 * $length が負の値の場合は、文字列の末尾から多くの書記素が削除されます
 * (start が負の場合にはまず開始位置を算出してから行います)。
 * $start がこの削除された場所以降になる場合は、<b>FALSE</b> を返します。
 * </p>
 * @return string $string の部分文字列を返します。
 */
function grapheme_substr(string $string, int $start, int $length = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * haystack 文字列の中で、needle が最初に登場した場所以降の部分文字列を返す
 * @link http://php.net/manual/ja/function.grapheme-strstr.php
 * @param string $haystack <p>
 * 入力文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param string $needle <p>
 * 探したい文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param bool $before_needle [optional] <p>
 * <b>TRUE</b> の場合、grapheme_strstr()
 * は needle が最初に登場した場所より前の部分文字列を返します (needle は含めません)。
 * </p>
 * @return string 部分文字列、あるいは needle が見つからなかった場合に FALSE を返します。
 */
function grapheme_strstr(string $haystack, string $needle, bool $before_needle = false): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 大文字小文字を区別せず、haystack 文字列の中で needle が最初に登場した場所以降の部分文字列を返す
 * @link http://php.net/manual/ja/function.grapheme-stristr.php
 * @param string $haystack <p>
 * 入力文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param string $needle <p>
 * 探したい文字列。正しい形式の UTF-8 でなければなりません。
 * </p>
 * @param bool $before_needle [optional] <p>
 * <b>TRUE</b> の場合、grapheme_strstr()
 * は needle が最初に登場した場所より前の部分文字列を返します (needle は含めません)。
 * </p>
 * @return string $haystack の部分文字列、あるいは $needle が見つからなかった場合に FALSE を返します。
 */
function grapheme_stristr(string $haystack, string $needle, bool $before_needle = false): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * デフォルトの書記素クラスタシーケンスをテキストバッファから取り出す関数。
テキストは UTF-8 でエンコードされている必要があります
 * @link http://php.net/manual/ja/function.grapheme-extract.php
 * @param string $haystack <p>
 * 検索する文字列。
 * </p>
 * @param int $size <p>
 * 返す項目 ($extract_type に基づく) の最大数。
 * </p>
 * @param int $extract_type [optional] <p>
 * $size パラメータの単位の形式を指定します。
 * </p>
 * <p>
 * GRAPHEME_EXTR_COUNT (default) - $size は、
 * 抽出するデフォルト書記素クラスタの数です。
 * GRAPHEME_EXTR_MAXBYTES - $size は、返すバイト数の最大値です。
 * GRAPHEME_EXTR_MAXCHARS - $size は、返す UTF-8 文字数の最大値です。
 * </p>
 * @param int $start [optional] <p>
 * $haystack 内での開始位置をバイト数で指定します。
 * 指定する場合は、0 から $haystack のバイト数までの値でなければなりません。
 * 負の値を指定すると、$haystack の末尾からバイト数を数えます。
 * $start が指す位置が UTF-8 文字の先頭バイトでない場合は、
 * その次の文字の先頭から開始します。
 * </p>
 * @param int $next [optional] <p>
 * 次の開始位置への参照が設定されます。
 * この関数をコールすると、文字列の最後の部分の先頭バイトを指すことになります。
 * </p>
 * @return string オフセット $start から始まり、
 * 指定した $size と $extract_type を満たす、
 * デフォルトの書記素クラスタバウンダリで終わる文字列を返します。
 */
function grapheme_extract(string $haystack, int $size, int $extract_type = null, int $start = 0, int &$next = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.2, PHP 7, PECL idn &gt;= 0.1)<br/>
 * ドメイン名をIDNAのASCII形式に変換する
 * @link http://php.net/manual/ja/function.idn-to-ascii.php
 * @param string $domain <p>
 * 変換するドメイン名。UTF-8 にエンコードされている必要があります。
 * </p>
 * @param int $options [optional] <p>
 * 変換オプション - IDNA_ ではじまる定数
 * (IDNA_ERROR_* 定数を除く) の組み合わせです。
 * </p>
 * @param int $variant [optional] <p>
 * IDNA 2003 の場合は <b>INTL_IDNA_VARIANT_2003</b>、あるいは
 * UTS #46 の場合は <b>INTL_IDNA_VARIANT_UTS46</b>。
 * </p>
 * @param array $idna_info [optional] <p>
 * このパラメータを使うのは、<i>variant</i> が
 * <b>INTL_IDNA_VARIANT_UTS46</b> の場合だけです。
 * このとき、このパラメータには 'result'、
 * 'isTransitionalDifferent'、そして
 * 'errors' の三つのキーを含む配列が入ります。
 * 'result' にはおそらく不正だと考えられる変換結果、
 * 'isTransitionalDifferent' には
 * UTS #46 の非移行的な機能を使って結果を変更したかどうかをあらわす boolean 値、そして
 * 'errors' はエラー定数 IDNA_ERROR_*
 * のビットセットを表します。
 * </p>
 * @return string IDNA のASCII形式でエンコードされたドメイン名。失敗した場合に <b>FALSE</b> を返します
 */
function idn_to_ascii(string $domain, int $options = 0, int $variant = INTL_IDNA_VARIANT_2003, array &$idna_info = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.2, PHP 7, PECL idn &gt;= 0.1)<br/>
 * IDNAのASCII方式でエンコードされたドメイン名をUnicodeに変換する
 * @link http://php.net/manual/ja/function.idn-to-utf8.php
 * @param string $domain <p>
 * IDNAのASCII方式でエンコードされた、変換対象のドメイン名
 * </p>
 * @param int $options [optional] <p>
 * 変換オプション - IDNA_ ではじまる定数
 * (IDNA_ERROR_* 定数を除く) の組み合わせです
 * </p>
 * @param int $variant [optional] <p>
 * IDNA 2003 の場合は <b>INTL_IDNA_VARIANT_2003</b>、あるいは
 * UTS #46 の場合は <b>INTL_IDNA_VARIANT_UTS46</b>。
 * </p>
 * @param array $idna_info [optional] <p>
 * このパラメータを使うのは、<i>variant</i> が
 * <b>INTL_IDNA_VARIANT_UTS46</b> の場合だけです。
 * このとき、このパラメータには 'result'、
 * 'isTransitionalDifferent'、そして
 * 'errors' の三つのキーを含む配列が入ります。
 * 'result' にはおそらく不正だと考えられる変換結果、
 * 'isTransitionalDifferent' には
 * UTS #46 の非移行的な機能を使って結果を変更したかどうかをあらわす boolean 値、そして
 * 'errors' はエラー定数 IDNA_ERROR_*
 * のビットセットを表します。
 * </p>
 * @return string Unicodeのドメイン名。UTF-8 にエンコードされています。失敗した場合に <b>FALSE</b> を返します
 */
function idn_to_utf8(string $domain, int $options = 0, int $variant = INTL_IDNA_VARIANT_2003, array &$idna_info = null): string {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * リソースバンドルを作成する
 * @link http://php.net/manual/ja/resourcebundle.create.php
 * @param string $locale <p>
 * リソースバンドルを読み込むロケール (en_CA などのロケール名)。
 * </p>
 * @param string $bundlename <p>
 * データが格納されているディレクトリ、あるいは .dat ファイル名。
 * </p>
 * @param bool $fallback [optional] <p>
 * ロケールを完全一致とするか、あるいは代替として親ロケールを使うことを許可するか。
 * </p>
 * @return ResourceBundle <b>ResourceBundle</b> オブジェクト、あるいはエラー時に <b>NULL</b> を返します。
 */
function resourcebundle_create(string $locale, string $bundlename, bool $fallback = null): ResourceBundle {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * バンドルからデータを取得する
 * @link http://php.net/manual/ja/resourcebundle.get.php
 * @param string|int $index <p>
 * データのインデックス。文字列あるいは整数値となります。
 * </p>
 * @param bool $fallback [optional] <p>
 * Whether locale should match exactly or fallback to parent locale is allowed.
 * </p>
 * @return mixed 指定したインデックスのデータ、あるいはエラー時に <b>NULL</b> を返します。
 * 文字列、整数値、バイナリデータ文字列は、それぞれに対応する PHP の型として返します。
 * 整数の配列は PHP の配列として返します。複雑な型は
 * <b>ResourceBundle</b> オブジェクトとして返します。
 */
function resourcebundle_get($index, bool $fallback = true) {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * バンドル内の要素数を取得する
 * @link http://php.net/manual/ja/resourcebundle.count.php
 * @param $bundle
 * @return int バンドル内の要素数を返します。
 */
function resourcebundle_count($bundle): int {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * サポートするロケールを取得する
 * @link http://php.net/manual/ja/resourcebundle.locales.php
 * @param string $bundlename <p>
 * ロケールを取得したい ResourceBundle のパス、あるいは
 * 空文字列を指定するとデフォルトのロケール一覧を取得できます。
 * </p>
 * @return array このバンドルがサポートするロケールの一覧を返します。
 */
function resourcebundle_locales(string $bundlename): array {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * バンドルの直近のエラーコードを取得する
 * @link http://php.net/manual/ja/resourcebundle.geterrorcode.php
 * @param $bundle
 * @return int バンドルオブジェクトの最後の関数コールからのエラーコードを返します。
 */
function resourcebundle_get_error_code($bundle): int {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * バンドルの直近のエラーメッセージを取得する
 * @link http://php.net/manual/ja/resourcebundle.geterrormessage.php
 * @param $bundle
 * @return string バンドルオブジェクトの最後の関数コールからのエラーメッセージを返します。
 */
function resourcebundle_get_error_message($bundle): string {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * Transliterator を作成する
 * @link http://php.net/manual/ja/transliterator.create.php
 * @param string $id <p>
 * id。
 * </p>
 * @param int $direction [optional] <p>
 * 方向。デフォルトは
 * >Transliterator::FORWARD です。
 * Transliterator::REVERSE も指定できます。
 * </p>
 * @return Transliterator 成功した場合に <b>Transliterator</b> オブジェクト、失敗した場合に
 * <b>NULL</b> を返します。
 */
function transliterator_create(string $id, int $direction = null): Transliterator {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * 規則に基づいた Transliterator を作成する
 * @link http://php.net/manual/ja/transliterator.createfromrules.php
 * @param string $rules <p>
 * 規則。
 * </p>
 * @param string $direction [optional] <p>
 * 方向。デフォルトは
 * >Transliterator::FORWARD です。
 * Transliterator::REVERSE も指定できます。
 * </p>
 * @return Transliterator 成功した場合に <b>Transliterator</b> オブジェクト、失敗した場合に
 * <b>NULL</b> を返します。
 */
function transliterator_create_from_rules(string $rules, string $direction = null): Transliterator {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * Transliterator の ID を取得する
 * @link http://php.net/manual/ja/transliterator.listids.php
 * @return array 成功した場合は登録されている Transliterator ID の配列を返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function transliterator_list_ids(): array {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * 逆方向の Transliterator を作成する
 * @link http://php.net/manual/ja/transliterator.createinverse.php
 * @param Transliterator $orig_trans
 * @return Transliterator 成功した場合に <b>Transliterator</b> オブジェクト、失敗した場合に
 * <b>NULL</b> を返します。
 */
function transliterator_create_inverse(Transliterator $orig_trans): Transliterator {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * 文字列を音訳する
 * @link http://php.net/manual/ja/transliterator.transliterate.php
 * @param string $subject <p>
 * 変換する文字列。
 * </p>
 * @param int $start [optional] <p>
 * 文字列の変換の開始位置を表すインデックス (UTF-16 コード単位) を指定します。指定した位置も、変換範囲に含まれます。
 * インデックスは 0 から始まります。この位置より前にあるテキストは、そのまま残ります。
 * </p>
 * @param int $end [optional] <p>
 * 文字列の変換の終了位置を表すインデックス (UTF-16 コード単位) を指定します。指定した位置は、変換範囲に含まれません。
 * インデックスは 0 から始まります。この位置も含めてそれ以降にあるテキストは、そのまま残ります。
 * </p>
 * @return string 成功した場合に変換後の文字列を返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function transliterator_transliterate(string $subject, int $start = null, int $end = null): string {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * 直近のエラーコードを取得する
 * @link http://php.net/manual/ja/transliterator.geterrorcode.php
 * @param Transliterator $trans
 * @return int 成功した場合にエラーコードを返します。
 * エラーがない場合や失敗した場合は <b>FALSE</b> を返します。
 */
function transliterator_get_error_code(Transliterator $trans): int {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * 直近のエラーメッセージを取得する
 * @link http://php.net/manual/ja/transliterator.geterrormessage.php
 * @param Transliterator $trans
 * @return string 成功した場合にエラーメッセージを返します。
 * エラーがない場合や失敗した場合は <b>FALSE</b> を返します。
 */
function transliterator_get_error_message(Transliterator $trans): string {}

/**
 * @param $zoneId
 */
function intltz_create_time_zone($zoneId) {}

/**
 * @param DateTimeZone $dateTimeZone
 */
function intltz_from_date_time_zone(DateTimeZone $dateTimeZone) {}

function intltz_create_default() {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_id(IntlTimeZone $timeZone) {}

function intltz_get_gmt() {}

function intltz_get_unknown() {}

/**
 * @param $countryOrRawOffset [optional]
 */
function intltz_create_enumeration($countryOrRawOffset) {}

/**
 * @param $zoneId
 */
function intltz_count_equivalent_ids($zoneId) {}

/**
 * @param $zoneType
 * @param $region [optional]
 * @param $rawOffset [optional]
 */
function intltz_create_time_zone_id_enumeration($zoneType, $region, $rawOffset) {}

/**
 * @param $zoneId
 * @param $isSystemID [optional]
 */
function intltz_get_canonical_id($zoneId, &$isSystemID) {}

/**
 * @param $zoneId
 */
function intltz_get_region($zoneId) {}

function intltz_get_tz_data_version() {}

/**
 * @param $zoneId
 * @param $index
 */
function intltz_get_equivalent_id($zoneId, $index) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_use_daylight_time(IntlTimeZone $timeZone) {}

/**
 * @param IntlTimeZone $timeZone
 * @param $date
 * @param $local
 * @param $rawOffset
 * @param $dstOffset
 */
function intltz_get_offset(IntlTimeZone $timeZone, $date, $local, &$rawOffset, &$dstOffset) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_raw_offset(IntlTimeZone $timeZone) {}

/**
 * @param IntlTimeZone $timeZone
 * @param IntlTimeZone $otherTimeZone [optional]
 */
function intltz_has_same_rules(IntlTimeZone $timeZoneIntlTimeZone , $otherTimeZone) {}

/**
 * @param IntlTimeZone $timeZone
 * @param $isDaylight [optional]
 * @param $style [optional]
 * @param $locale [optional]
 */
function intltz_get_display_name(IntlTimeZone $timeZone, $isDaylight, $style, $locale) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_dst_savings(IntlTimeZone $timeZone) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_to_date_time_zone(IntlTimeZone $timeZone) {}

/**
 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
 * 直近のエラーコードを取得する
 * @link http://php.net/manual/ja/intltimezone.geterrorcode.php
 * @param IntlTimeZone $timeZone
 * @return integer
 */
function intltz_get_error_code(IntlTimeZone $timeZone): integer {}

/**
 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
 * 直近のエラーメッセージを取得する
 * @link http://php.net/manual/ja/intltimezone.geterrormessage.php
 * @param IntlTimeZone $timeZone
 * @return string
 */
function intltz_get_error_message(IntlTimeZone $timeZone): string {}

/**
 * @param $timeZone [optional]
 * @param $locale [optional]
 */
function intlcal_create_instance($timeZone, $locale) {}

/**
 * @param $key
 * @param $locale
 * @param $commonlyUsed
 */
function intlcal_get_keyword_values_for_locale($key, $locale, $commonlyUsed) {}

function intlcal_get_now() {}

function intlcal_get_available_locales() {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_time(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $date
 */
function intlcal_set_time(IntlCalendar $calendar, $date) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 * @param $amount
 */
function intlcal_add(IntlCalendar $calendar, $field, $amount) {}

/**
 * @param IntlCalendar $calendar
 * @param $timeZone
 */
function intlcal_set_time_zone(IntlCalendar $calendar, $timeZone) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_after(IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_before(IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $fieldOrYear
 * @param $valueOrMonth
 * @param $dayOfMonth [optional]
 * @param $hour [optional]
 * @param $minute [optional]
 * @param $second [optional]
 */
function intlcal_set(IntlCalendar $calendar, $fieldOrYear, $valueOrMonth, $dayOfMonth, $hour, $minute, $second) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 * @param $amountOrUpOrDown [optional]
 */
function intlcal_roll(IntlCalendar $calendar, $field, $amountOrUpOrDown) {}

/**
 * @param IntlCalendar $calendar
 * @param $field [optional]
 */
function intlcal_clear(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $when
 * @param $field
 */
function intlcal_field_difference(IntlCalendar $calendar, $when, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_actual_maximum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_actual_minimum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $dayOfWeek
 */
function intlcal_get_day_of_week_type(IntlCalendar $calendar, $dayOfWeek) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_first_day_of_week(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_greatest_minimum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_least_maximum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $localeType
 */
function intlcal_get_locale(IntlCalendar $calendar, $localeType) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_maximum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_minimal_days_in_first_week(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_minimum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_time_zone(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_type(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $dayOfWeek
 */
function intlcal_get_weekend_transition(IntlCalendar $calendar, $dayOfWeek) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_in_daylight_time(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_is_equivalent_to(IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_is_lenient(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_is_set(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $date [optional]
 */
function intlcal_is_weekend(IntlCalendar $calendar, $date) {}

/**
 * @param IntlCalendar $calendar
 * @param $dayOfWeek
 */
function intlcal_set_first_day_of_week(IntlCalendar $calendar, $dayOfWeek) {}

/**
 * @param IntlCalendar $calendar
 * @param $isLenient
 */
function intlcal_set_lenient(IntlCalendar $calendar, $isLenient) {}

/**
 * @param IntlCalendar $calendar
 * @param $numberOfDays
 */
function intlcal_set_minimal_days_in_first_week(IntlCalendar $calendar, $numberOfDays) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_equals(IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param $dateTime
 */
function intlcal_from_date_time($dateTime) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_to_date_time(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_repeated_wall_time_option(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_skipped_wall_time_option(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $wallTimeOption
 */
function intlcal_set_repeated_wall_time_option(IntlCalendar $calendar, $wallTimeOption) {}

/**
 * @param IntlCalendar $calendar
 * @param $wallTimeOption
 */
function intlcal_set_skipped_wall_time_option(IntlCalendar $calendar, $wallTimeOption) {}

/**
 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
 * Get last error code on the object
 * @link http://php.net/manual/ja/intlcalendar.geterrorcode.php
 * @param IntlCalendar $calendar
 * @return int An ICU error code indicating either success, failure or a warning.
 */
function intlcal_get_error_code(IntlCalendar $calendar): int {}

/**
 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
 * Get last error message on the object
 * @link http://php.net/manual/ja/intlcalendar.geterrormessage.php
 * @param IntlCalendar $calendar
 * @return string The error message associated with last error that occurred in a function call
 * on this object, or a string indicating the non-existance of an error.
 */
function intlcal_get_error_message(IntlCalendar $calendar): string {}

/**
 * @param $timeZoneOrYear [optional]
 * @param $localeOrMonth [optional]
 * @param $dayOfMonth [optional]
 * @param $hour [optional]
 * @param $minute [optional]
 * @param $second [optional]
 */
function intlgregcal_create_instance($timeZoneOrYear, $localeOrMonth, $dayOfMonth, $hour, $minute, $second) {}

/**
 * @param IntlGregorianCalendar $calendar
 * @param $date
 */
function intlgregcal_set_gregorian_change(IntlGregorianCalendar $calendar, $date) {}

/**
 * @param IntlGregorianCalendar $calendar
 */
function intlgregcal_get_gregorian_change(IntlGregorianCalendar $calendar) {}

/**
 * @param IntlGregorianCalendar $calendar
 * @param $year
 */
function intlgregcal_is_leap_year(IntlGregorianCalendar $calendar, $year) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 直近のエラーコードを取得する
 * @link http://php.net/manual/ja/function.intl-get-error-code.php
 * @return int 直近の API 関数のコールが返すエラーコードを返します。
 */
function intl_get_error_code(): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 直近のエラーの説明を取得する
 * @link http://php.net/manual/ja/function.intl-get-error-message.php
 * @return string 直近の API 関数のコールで発生したエラーの説明を返します。
 */
function intl_get_error_message(): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 指定したエラーコードが失敗を表すかどうかを調べる
 * @link http://php.net/manual/ja/function.intl-is-failure.php
 * @param int $error_code <p>
 * <b>intl_get_error_code</b> や
 * <b>collator_get_error_code</b>
 * が返す値。
 * </p>
 * @return bool そのコードが何らかの失敗を意味する場合に <b>TRUE</b>、
 * 成功あるいは警告を意味する場合に <b>FALSE</b>
 * を返します。
 */
function intl_is_failure(int $error_code): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * 指定したエラーコードに対応する名前を取得する
 * @link http://php.net/manual/ja/function.intl-error-name.php
 * @param int $error_code <p>
 * ICU のエラーコード。
 * </p>
 * @return string エラーコード定数と同じ名前の文字列を返します。
 */
function intl_error_name(int $error_code): string {}


/**
 * ロケール名の長さの制限。PHP コード内では 80 文字までに制限されており、
 * それより長いロケール名は使用できません。
 * @link http://php.net/manual/ja/intl.constants.php
 */
define ('INTL_MAX_LOCALE_LEN', 80);
define ('INTL_ICU_VERSION', 55.1);
define ('INTL_ICU_DATA_VERSION', 55.1);
define ('ULOC_ACTUAL_LOCALE', 0);
define ('ULOC_VALID_LOCALE', 1);
define ('GRAPHEME_EXTR_COUNT', 0);
define ('GRAPHEME_EXTR_MAXBYTES', 1);
define ('GRAPHEME_EXTR_MAXCHARS', 2);
define ('U_USING_FALLBACK_WARNING', -128);
define ('U_ERROR_WARNING_START', -128);
define ('U_USING_DEFAULT_WARNING', -127);
define ('U_SAFECLONE_ALLOCATED_WARNING', -126);
define ('U_STATE_OLD_WARNING', -125);
define ('U_STRING_NOT_TERMINATED_WARNING', -124);
define ('U_SORT_KEY_TOO_SHORT_WARNING', -123);
define ('U_AMBIGUOUS_ALIAS_WARNING', -122);
define ('U_DIFFERENT_UCA_VERSION', -121);
define ('U_ERROR_WARNING_LIMIT', -119);
define ('U_ZERO_ERROR', 0);
define ('U_ILLEGAL_ARGUMENT_ERROR', 1);
define ('U_MISSING_RESOURCE_ERROR', 2);
define ('U_INVALID_FORMAT_ERROR', 3);
define ('U_FILE_ACCESS_ERROR', 4);
define ('U_INTERNAL_PROGRAM_ERROR', 5);
define ('U_MESSAGE_PARSE_ERROR', 6);
define ('U_MEMORY_ALLOCATION_ERROR', 7);
define ('U_INDEX_OUTOFBOUNDS_ERROR', 8);
define ('U_PARSE_ERROR', 9);
define ('U_INVALID_CHAR_FOUND', 10);
define ('U_TRUNCATED_CHAR_FOUND', 11);
define ('U_ILLEGAL_CHAR_FOUND', 12);
define ('U_INVALID_TABLE_FORMAT', 13);
define ('U_INVALID_TABLE_FILE', 14);
define ('U_BUFFER_OVERFLOW_ERROR', 15);
define ('U_UNSUPPORTED_ERROR', 16);
define ('U_RESOURCE_TYPE_MISMATCH', 17);
define ('U_ILLEGAL_ESCAPE_SEQUENCE', 18);
define ('U_UNSUPPORTED_ESCAPE_SEQUENCE', 19);
define ('U_NO_SPACE_AVAILABLE', 20);
define ('U_CE_NOT_FOUND_ERROR', 21);
define ('U_PRIMARY_TOO_LONG_ERROR', 22);
define ('U_STATE_TOO_OLD_ERROR', 23);
define ('U_TOO_MANY_ALIASES_ERROR', 24);
define ('U_ENUM_OUT_OF_SYNC_ERROR', 25);
define ('U_INVARIANT_CONVERSION_ERROR', 26);
define ('U_INVALID_STATE_ERROR', 27);
define ('U_COLLATOR_VERSION_MISMATCH', 28);
define ('U_USELESS_COLLATOR_ERROR', 29);
define ('U_NO_WRITE_PERMISSION', 30);
define ('U_STANDARD_ERROR_LIMIT', 31);
define ('U_BAD_VARIABLE_DEFINITION', 65536);
define ('U_PARSE_ERROR_START', 65536);
define ('U_MALFORMED_RULE', 65537);
define ('U_MALFORMED_SET', 65538);
define ('U_MALFORMED_SYMBOL_REFERENCE', 65539);
define ('U_MALFORMED_UNICODE_ESCAPE', 65540);
define ('U_MALFORMED_VARIABLE_DEFINITION', 65541);
define ('U_MALFORMED_VARIABLE_REFERENCE', 65542);
define ('U_MISMATCHED_SEGMENT_DELIMITERS', 65543);
define ('U_MISPLACED_ANCHOR_START', 65544);
define ('U_MISPLACED_CURSOR_OFFSET', 65545);
define ('U_MISPLACED_QUANTIFIER', 65546);
define ('U_MISSING_OPERATOR', 65547);
define ('U_MISSING_SEGMENT_CLOSE', 65548);
define ('U_MULTIPLE_ANTE_CONTEXTS', 65549);
define ('U_MULTIPLE_CURSORS', 65550);
define ('U_MULTIPLE_POST_CONTEXTS', 65551);
define ('U_TRAILING_BACKSLASH', 65552);
define ('U_UNDEFINED_SEGMENT_REFERENCE', 65553);
define ('U_UNDEFINED_VARIABLE', 65554);
define ('U_UNQUOTED_SPECIAL', 65555);
define ('U_UNTERMINATED_QUOTE', 65556);
define ('U_RULE_MASK_ERROR', 65557);
define ('U_MISPLACED_COMPOUND_FILTER', 65558);
define ('U_MULTIPLE_COMPOUND_FILTERS', 65559);
define ('U_INVALID_RBT_SYNTAX', 65560);
define ('U_INVALID_PROPERTY_PATTERN', 65561);
define ('U_MALFORMED_PRAGMA', 65562);
define ('U_UNCLOSED_SEGMENT', 65563);
define ('U_ILLEGAL_CHAR_IN_SEGMENT', 65564);
define ('U_VARIABLE_RANGE_EXHAUSTED', 65565);
define ('U_VARIABLE_RANGE_OVERLAP', 65566);
define ('U_ILLEGAL_CHARACTER', 65567);
define ('U_INTERNAL_TRANSLITERATOR_ERROR', 65568);
define ('U_INVALID_ID', 65569);
define ('U_INVALID_FUNCTION', 65570);
define ('U_PARSE_ERROR_LIMIT', 65571);
define ('U_UNEXPECTED_TOKEN', 65792);
define ('U_FMT_PARSE_ERROR_START', 65792);
define ('U_MULTIPLE_DECIMAL_SEPARATORS', 65793);
define ('U_MULTIPLE_DECIMAL_SEPERATORS', 65793);
define ('U_MULTIPLE_EXPONENTIAL_SYMBOLS', 65794);
define ('U_MALFORMED_EXPONENTIAL_PATTERN', 65795);
define ('U_MULTIPLE_PERCENT_SYMBOLS', 65796);
define ('U_MULTIPLE_PERMILL_SYMBOLS', 65797);
define ('U_MULTIPLE_PAD_SPECIFIERS', 65798);
define ('U_PATTERN_SYNTAX_ERROR', 65799);
define ('U_ILLEGAL_PAD_POSITION', 65800);
define ('U_UNMATCHED_BRACES', 65801);
define ('U_UNSUPPORTED_PROPERTY', 65802);
define ('U_UNSUPPORTED_ATTRIBUTE', 65803);
define ('U_FMT_PARSE_ERROR_LIMIT', 65810);
define ('U_BRK_INTERNAL_ERROR', 66048);
define ('U_BRK_ERROR_START', 66048);
define ('U_BRK_HEX_DIGITS_EXPECTED', 66049);
define ('U_BRK_SEMICOLON_EXPECTED', 66050);
define ('U_BRK_RULE_SYNTAX', 66051);
define ('U_BRK_UNCLOSED_SET', 66052);
define ('U_BRK_ASSIGN_ERROR', 66053);
define ('U_BRK_VARIABLE_REDFINITION', 66054);
define ('U_BRK_MISMATCHED_PAREN', 66055);
define ('U_BRK_NEW_LINE_IN_QUOTED_STRING', 66056);
define ('U_BRK_UNDEFINED_VARIABLE', 66057);
define ('U_BRK_INIT_ERROR', 66058);
define ('U_BRK_RULE_EMPTY_SET', 66059);
define ('U_BRK_UNRECOGNIZED_OPTION', 66060);
define ('U_BRK_MALFORMED_RULE_TAG', 66061);
define ('U_BRK_ERROR_LIMIT', 66062);
define ('U_REGEX_INTERNAL_ERROR', 66304);
define ('U_REGEX_ERROR_START', 66304);
define ('U_REGEX_RULE_SYNTAX', 66305);
define ('U_REGEX_INVALID_STATE', 66306);
define ('U_REGEX_BAD_ESCAPE_SEQUENCE', 66307);
define ('U_REGEX_PROPERTY_SYNTAX', 66308);
define ('U_REGEX_UNIMPLEMENTED', 66309);
define ('U_REGEX_MISMATCHED_PAREN', 66310);
define ('U_REGEX_NUMBER_TOO_BIG', 66311);
define ('U_REGEX_BAD_INTERVAL', 66312);
define ('U_REGEX_MAX_LT_MIN', 66313);
define ('U_REGEX_INVALID_BACK_REF', 66314);
define ('U_REGEX_INVALID_FLAG', 66315);
define ('U_REGEX_LOOK_BEHIND_LIMIT', 66316);
define ('U_REGEX_SET_CONTAINS_STRING', 66317);
define ('U_REGEX_ERROR_LIMIT', 66326);
define ('U_IDNA_PROHIBITED_ERROR', 66560);
define ('U_IDNA_ERROR_START', 66560);
define ('U_IDNA_UNASSIGNED_ERROR', 66561);
define ('U_IDNA_CHECK_BIDI_ERROR', 66562);
define ('U_IDNA_STD3_ASCII_RULES_ERROR', 66563);
define ('U_IDNA_ACE_PREFIX_ERROR', 66564);
define ('U_IDNA_VERIFICATION_ERROR', 66565);
define ('U_IDNA_LABEL_TOO_LONG_ERROR', 66566);
define ('U_IDNA_ZERO_LENGTH_LABEL_ERROR', 66567);
define ('U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR', 66568);
define ('U_IDNA_ERROR_LIMIT', 66569);
define ('U_STRINGPREP_PROHIBITED_ERROR', 66560);
define ('U_STRINGPREP_UNASSIGNED_ERROR', 66561);
define ('U_STRINGPREP_CHECK_BIDI_ERROR', 66562);
define ('U_ERROR_LIMIT', 66818);

/**
 * IDN 関数の入力で、アサインされていないコードポイントの処理を拒否し、
 * 入力がドメイン名 ASCII 規則を満たすかどうかをチェックしません。
 * @link http://php.net/manual/ja/intl.constants.php
 */
define ('IDNA_DEFAULT', 0);

/**
 * IDN 関数の入力で、アサインされていないコードポイントの処理を許可します。
 * @link http://php.net/manual/ja/intl.constants.php
 */
define ('IDNA_ALLOW_UNASSIGNED', 1);

/**
 * IDN 関数の入力がドメイン名 ASCII 規則を満たすかどうかをチェックします。
 * @link http://php.net/manual/ja/intl.constants.php
 */
define ('IDNA_USE_STD3_RULES', 2);

/**
 * 入力が BiDi の規則を満たすかどうかをチェックします。
 * IDNA2003 の実装ではこの設定は無視され、常にこのチェックを行います。
 * @link http://php.net/manual/ja/intl.constants.php
 */
define ('IDNA_CHECK_BIDI', 4);

/**
 * 入力が CONTEXTJ の規則を満たすかどうかをチェックします。
 * IDNA2003 の実装ではこの設定は無視されます。このチェックは IDNA2008 から追加されたものだからです。
 * @link http://php.net/manual/ja/intl.constants.php
 */
define ('IDNA_CHECK_CONTEXTJ', 8);

/**
 * <b>idn_to_ascii</b> で非移行的処理をするためのオプション。
 * デフォルトでは移行的処理となります。このオプションは IDNA2003 の実装では無視されます。
 * @link http://php.net/manual/ja/intl.constants.php
 */
define ('IDNA_NONTRANSITIONAL_TO_ASCII', 16);

/**
 * <b>idn_to_utf8</b> で非移行的処理をするためのオプション。
 * デフォルトでは移行的処理となります。このオプションは IDNA2003 の実装では無視されます。
 * @link http://php.net/manual/ja/intl.constants.php
 */
define ('IDNA_NONTRANSITIONAL_TO_UNICODE', 32);

/**
 * IDNA 2003 のアルゴリズムを <b>idn_to_utf8</b> と
 * <b>idn_to_ascii</b> で使います。これはデフォルトの設定です。
 * この定数およびデフォルトの使用は、PHP 7.2.0 以降は非推奨です。
 * @link http://php.net/manual/ja/intl.constants.php
 */
define ('INTL_IDNA_VARIANT_2003', 0);

/**
 * UTS #46 アルゴリズムを <b>idn_to_utf8</b> と
 * <b>idn_to_ascii</b> で使います。
 * @link http://php.net/manual/ja/intl.constants.php
 */
define ('INTL_IDNA_VARIANT_UTS46', 1);

/**
 * UTS #46 アルゴリズムを
 * <b>idn_to_utf8</b> と
 * <b>idn_to_ascii</b> で使うときに、
 * これらのエラーがビットセットで報告されます。
 * @link http://php.net/manual/ja/intl.constants.php
 */
define ('IDNA_ERROR_EMPTY_LABEL', 1);
define ('IDNA_ERROR_LABEL_TOO_LONG', 2);
define ('IDNA_ERROR_DOMAIN_NAME_TOO_LONG', 4);
define ('IDNA_ERROR_LEADING_HYPHEN', 8);
define ('IDNA_ERROR_TRAILING_HYPHEN', 16);
define ('IDNA_ERROR_HYPHEN_3_4', 32);
define ('IDNA_ERROR_LEADING_COMBINING_MARK', 64);
define ('IDNA_ERROR_DISALLOWED', 128);
define ('IDNA_ERROR_PUNYCODE', 256);
define ('IDNA_ERROR_LABEL_HAS_DOT', 512);
define ('IDNA_ERROR_INVALID_ACE_LABEL', 1024);
define ('IDNA_ERROR_BIDI', 2048);
define ('IDNA_ERROR_CONTEXTJ', 4096);

// End of intl v.1.1.0
?>
