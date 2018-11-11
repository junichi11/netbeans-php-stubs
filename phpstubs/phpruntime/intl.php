<?php



/**
 * <p>各ロケール固有の並び順を考慮した文字列の比較機能を提供します。</p>
 * @link http://php.net/manual/ja/class.collator.php
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
class Collator {

	/**
	 * collator を作成する
	 * <p>新しい Collator のインスタンスを作成します。</p>
	 * @param string $locale <p>照合規則を使用するロケール。特殊な場合として、 null を渡した場合はデフォルトのロケールの照合規則を使用します。 "root" を渡した場合は、UCA の規則を使用します。</p> <p>Locale 属性は、各国・各地域のユーザーの期待通りに並べ替えやマッチングを行うために もっとも重要な属性です。デフォルトの » UCA の並び順で正しく ("正しく" とは、その言語を使用する人の期待通りにということです) 処理できるのは、オランダ語やポルトガル語などの一部の言語だけです。 それ以外の場合は、UCA にロケールを指定して その言語に応じた適切な照合を行えるようにする必要があります。 従って、各ロケールにあわせて正しく設定した collator を使用する必要があります。 ロケールを選択すると、その他の属性の値も適切な物に自動設定されます。 従って、その他の属性については明示的に設定する必要はほとんどありません。 選択したロケールによっては、文字列比較のパフォーマンスやソートキーの長さに違いが出ることがあります。</p>
	 * @return self <p>Collator のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/collator.construct.php
	 * @see Collator::create(), collator_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function __construct(string $locale) {}

	/**
	 * インデックスの情報を保持しつつ配列を並べ替える
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、インデックスと値の関係を保持したうえで配列を並べ替えます。 これを主に使用するのは、実際の並び順も重要となる連想配列です。 配列の要素には、現在のロケールの規則にしたがった並び順が適用されます。</p><p>PHP の標準関数 <code>asort()</code> と同等です。</p>
	 * @param array $arr <p>並べ替えたい文字列の配列。</p>
	 * @param int $sort_flag <p>オプションの並べ替え方式。以下のいずれか。</p><ul> <li> <p><b><code>Collator::SORT_REGULAR</code></b> - 通常の比較 (型を変更しない)</p> </li> <li> <p><b><code>Collator::SORT_NUMERIC</code></b> - 数値としての比較</p> </li> <li> <p><b><code>Collator::SORT_STRING</code></b> - 文字列としての比較</p> </li> </ul> <p>デフォルトの $sort_flag の値は <b><code>Collator::SORT_REGULAR</code></b> です。 $sort_flag に無効な値が指定された場合も、このデフォルトを使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/collator.asort.php
	 * @see collator_sort(), collator_sort_with_sort_keys()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function asort(array &$arr, int $sort_flag = NULL): bool {}

	/**
	 * ふたつの Unicode 文字列を比較する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ふたつの Unicode 文字列を、比較規則にもとづいて比較します。</p>
	 * @param string $str1 <p>最初の文字列。</p>
	 * @param string $str2 <p>2 番目の文字列。</p>
	 * @return int <p>比較結果を返します。</p><ul> <li> <p><code>str1</code> が <code>str2</code> より <i>大きい</i> ときは 1</p> </li> <li> <p><code>str1</code> と <code>str2</code> が <i>等しい</i> ときは 0</p> </li> <li> <p><code>str1</code> が <code>str2</code> より <i>小さい</i> ときは -1</p> </li> </ul> エラー時には <code>boolean</code><b><code>FALSE</code></b> を返します。  <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
	 * @link http://php.net/manual/ja/collator.compare.php
	 * @see collator_sort()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function compare(string $str1, string $str2): int {}

	/**
	 * collator を作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>すでに指定しているオプションを用いて文字列を比較します。</p>
	 * @param string $locale <p>照合規則を使用するロケール。特殊な場合として、 null を渡した場合はデフォルトのロケールの照合規則を使用します。 また、空文字列 ("") や "root" を渡した場合は » UCA の規則を使用します。</p>
	 * @return Collator <p>新しい Collator オブジェクトのインスタンス、 あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/collator.create.php
	 * @see Collator::__construct()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function create(string $locale): \Collator {}

	/**
	 * 照合用の属性の値を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>collator の属性の値を取得します。</p>
	 * @param int $attr <p>値を取得したい属性。</p>
	 * @return int <p>属性の値、あるいはエラー時に <code>boolean</code> <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/collator.getattribute.php
	 * @see collator_set_attribute(), collator_get_strength()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getAttribute(int $attr): int {}

	/**
	 * collator の直近のエラーコードを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p></p>
	 * @return int <p>直近の Collator API 関数コールが返したエラーコードを返します。</p>
	 * @link http://php.net/manual/ja/collator.geterrorcode.php
	 * @see collator_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getErrorCode(): int {}

	/**
	 * collator の直近のエラーコードのテキストを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近のエラーのメッセージを取得します。</p>
	 * @return string <p>直近の Collator API 関数コールで発生したエラーの説明を返します。</p>
	 * @link http://php.net/manual/ja/collator.geterrormessage.php
	 * @see collator_get_error_code()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getErrorMessage(): string {}

	/**
	 * collator のロケール名を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>collector のロケール名を取得します。</p>
	 * @param int $type <p>妥当なロケールか実際のロケール (それぞれ <b><code>Locale::VALID_LOCALE</code></b> および <b><code>Locale::ACTUAL_LOCALE</code></b>)。</p>
	 * @return string <p>照合データの実際のロケール名を返します。ルールベースの collator のインスタンスの場合やエラーが発生した場合は <code>boolean</code> <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/collator.getlocale.php
	 * @see collator_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getLocale(int $type): string {}

	/**
	 * 文字列のソート用のキーを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列用の照合キーを返します。</p>
	 * @param string $str <p>キーの生成元となる文字列。</p>
	 * @return string <p>文字列の照合キーを返します。照合キーを、文字列のかわりに直接比較することができます。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
	 * @link http://php.net/manual/ja/collator.getsortkey.php
	 * @see collator_sort(), collator_sort_with_sort_keys()
	 * @since PHP 5 >= 5.3.11, PHP 7, PECL intl >= 1.0.3
	 */
	public function getSortKey(string $str): string {}

	/**
	 * 現在の照合強度を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p></p>
	 * @return int <p>現在の照合強度、あるいはエラー時に <code>boolean</code> <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/collator.getstrength.php
	 * @see collator_set_strength(), collator_get_attribute()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getStrength(): int {}

	/**
	 * 照合用の属性を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p></p>
	 * @param int $attr <p>属性。</p>
	 * @param int $val <p>属性の値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/collator.setattribute.php
	 * @see collator_get_attribute(), collator_set_strength()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function setAttribute(int $attr, int $val): bool {}

	/**
	 * 照合強度を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>» ICU Collation Service は、多くの比較レベルをサポートしています ("レベル" という名前ですが、"強度" と呼ばれることもあります)。 これらのカテゴリを用いることで、ICU は、 各地域の規約にあわせた適切な文字列の並べ替えを正確に行えるようになります。 また、各段階を選択して採用することで、 テキスト内の文字列検索をさまざまな条件で行うことも可能になります。</p><p></p><p><i>第一段階 (Primary Level)</i>: 一般に、これは元となる文字自体の違いを表すものとして使用します (たとえば "a" &lt; "b")。これが、いちばん強い違いとなります。 たとえば、辞書などではこれを用いてセクション分けしています。 これは、レベル 1 の強度 (level1 strength) ともいいます。</p><p><i>第二段階 (Secondary Level)</i>: 文字のアクセント記号を、第二段階の違いとします (たとえば "as" &lt; "às" &lt; "at")。 言語によっては、その他の文字の違いも第二段階の違いとみなすこともあります。 文字列のどこかで第一段階の違いがある場合、第二段階の違いは無視します。 これは、レベル 2 の強度 (level2 strength) ともいいます。</p><p><b>注意</b>:</p><p>注意: 言語によっては (たとえばデンマーク語)、 アクセント記号は元の文字とは別の文字とみなすものもあります。 しかし、たいていの言語では、 アクセントなしの文字とアクセントつきの文字の違いは第二段階とみなします。</p><p><i>第三段階 (Tertiary Level)</i>: 大文字と小文字の違いを区別するのが第二段階の違いです (たとえば "ao" &lt; "Ao" &lt; "aò")。 さらに、ある文字とその派生形の違い (たとえば "A" と " ") も第三段階と判断します。さらに、カナの大文字と小文字の違い (訳注: たとえば "や" と "ゃ") もこの段階になります。 文字列のどこかで第一段階や第二段階の違いがある場合、 第三段階の違いは無視します。 これは、レベル 3 の強度 (level3 strength) ともいいます。</p><p><i>第四段階 (Quaternary Level)</i>: レベル 1 から 3 までで句読点を無視する場合 ("句読点の無視" を参照)、 追加の段階を使用して句読点つきの単語となしの単語を区別します (たとえば "ab" &lt; "a-b" &lt; "aB")。 どこかに第一段階や第二段階、第三段階の違いがある場合、 第四段階の違いは無視します。 これは、レベル 4 の強度 (level4 strength) ともいいます。 第四段階を使用するのは、句読点を無視する必要がある場合や 日本語のテキスト ("ひらがなの処理" を参照) を処理する場合のみです。</p><p><i>一致段階 (Identical Level)</i>: それ以外のすべてのレベルで等しかった場合に、最後の手段として一致段階を用います。 この段階で比較するのは、NFD 形式の文字列の Unicode コードポイントです。 レベル 1 から 4 までで違いがない場合にのみ比較します。 たとえば、ヘブライ語の朗誦記号 (cantillation mark) は、 この段階でしか識別できません。 この段階は慎重に使うようにしましょう。 ふたつの文字列でコードポイントの値のみが違うなどということは、 めったにないことだからです。 この段階を使用すると、(ソートキーの強度が上がるのと同時に) インクリメンタルな比較やソートキーの生成のパフォーマンスが劇的に低下します。 これは、レベル 5 の強度 (level5 strength) ともいいます。</p><p>たとえば、「アクセントを無視」したり「アクセントと大文字小文字の区別を無視」 したりしてテキストの検索を行いたいこともあります。 ほぼすべての文字は第三段階までで識別できるので、 大半のロケールではデフォルトの指定は第三段階となっています。 しかし、場合によっては第四段階の強度を使用することになります。 これを用いると、空白や句読点や記号など、 他の強度では無視されるような違いも識別するようになります。 文字の識別を非常に厳密に行うには、一致段階の強度を使用します (たとえばこれを使用すると、Mathematical Bold Small A と Mathematical Italic Small A が別の文字とみなされます)。 しかし、第三段階を超える強度を使用すると、 ソートキーが非常に長くなってしまい、 また同じ文字列に対する比較処理も非常に遅くなってしまいます。</p>
	 * @param int $strength <p>設定する強度。</p> <p>以下のいずれかです。</p><ul> <li> <p><b><code>Collator::PRIMARY</code></b></p> </li> <li> <p><b><code>Collator::SECONDARY</code></b></p> </li> <li> <p><b><code>Collator::TERTIARY</code></b></p> </li> <li> <p><b><code>Collator::QUATERNARY</code></b></p> </li> <li> <p><b><code>Collator::IDENTICAL</code></b></p> </li> <li> <p><b><code>Collator::DEFAULT_STRENGTH</code></b></p> </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/collator.setstrength.php
	 * @see collator_get_strength()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function setStrength(int $strength): bool {}

	/**
	 * 指定した collator で配列を並べ替える
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、現在のロケールの規則にもとづいて配列を並べ替えます。</p><p>PHP の標準関数 <code>sort()</code> と同等です。</p>
	 * @param array $arr <p>並べ替えたい文字列の配列。</p>
	 * @param int $sort_flag <p>オプションの並べ替え方式。以下のいずれか。</p> <p></p><ul> <li> <p><b><code>Collator::SORT_REGULAR</code></b> - 通常の比較 (型を変更しない)</p> </li> <li> <p><b><code>Collator::SORT_NUMERIC</code></b> - 数値としての比較</p> </li> <li> <p><b><code>Collator::SORT_STRING</code></b> - 文字列としての比較</p> </li> </ul> デフォルトの並べ替え方式は <b><code>Collator::SORT_REGULAR</code></b> です。<code>sort_flag</code> に無効な値を指定した場合もこの方式を使います。
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/collator.sort.php
	 * @see collator_asort(), collator_sort_with_sort_keys()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function sort(array &$arr, int $sort_flag = NULL): bool {}

	/**
	 * 指定した collator とキーで配列を並べ替える
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>collator_sort()</code> と似ていますが、 ucol_getSortKey() が作成した ICU ソートキーを用いることで 大きな配列をより高速に処理できます。</p>
	 * @param array $arr <p>並べ替えたい文字列の配列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/collator.sortwithsortkeys.php
	 * @see collator_sort(), collator_asort()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function sortWithSortKeys(array &$arr): bool {}
}

/**
 * <p>A “break iterator” is an ICU object that exposes methods for locating boundaries in text (e.g. word or sentence boundaries). The PHP <b>IntlBreakIterator</b> serves as the base class for all types of ICU break iterators. Where extra functionality is available, the intl extension may expose the ICU break iterator with suitable subclasses, such as IntlRuleBasedBreakIterator or IntlCodePointBreakIterator.</p>
 * <p>This class implements Traversable. Traversing an <b>IntlBreakIterator</b> yields non-negative integer values representing the successive locations of the text boundaries, expressed as UTF-8 code units (byte) counts, taken from the beggining of the text (which has the location <i>0</i>). The keys yielded by the iterator simply form the sequence of natural numbers <i>{0, 1, 2, …}</i>.</p>
 * @link http://php.net/manual/ja/class.intlbreakiterator.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
class IntlBreakIterator implements \Traversable {

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const DONE = -1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const WORD_NONE = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const WORD_NONE_LIMIT = 100;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const WORD_NUMBER = 100;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const WORD_NUMBER_LIMIT = 200;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const WORD_LETTER = 200;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const WORD_LETTER_LIMIT = 300;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const WORD_KANA = 300;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const WORD_KANA_LIMIT = 400;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const WORD_IDEO = 400;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const WORD_IDEO_LIMIT = 500;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const LINE_SOFT = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const LINE_SOFT_LIMIT = 100;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const LINE_HARD = 100;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const LINE_HARD_LIMIT = 200;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const SENTENCE_TERM = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const SENTENCE_TERM_LIMIT = 100;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const SENTENCE_SEP = 100;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlbreakiterator.php
	 */
	const SENTENCE_SEP_LIMIT = 200;

	/**
	 * インスタンス化をできないようにするための private なコンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/intlbreakiterator.construct.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	private function __construct() {}

	/**
	 * 文字シーケンスの組み合わせの境界用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createcharacterinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createCharacterInstance(string $locale = NULL): \ReturnType {}

	/**
	 * コードポイントの境界用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createcodepointinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createCodePointInstance(): \ReturnType {}

	/**
	 * 論理的に可能な改行用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createlineinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createLineInstance(string $locale = NULL): \ReturnType {}

	/**
	 * 文末用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createsentenceinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createSentenceInstance(string $locale = NULL): \ReturnType {}

	/**
	 * タイトル文字の区切り用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createtitleinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createTitleInstance(string $locale = NULL): \ReturnType {}

	/**
	 * 単語の区切り用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createwordinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createWordInstance(string $locale = NULL): \ReturnType {}

	/**
	 * 現在位置のインデックスを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.current.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function current(): \ReturnType {}

	/**
	 * テキスト内の最初の文字を場所を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.first.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function first(): \ReturnType {}

	/**
	 * 指定したオフセット以降の最初の境界までイテレータを進める
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.following.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function following(string $offset): \ReturnType {}

	/**
	 * このオブジェクトの直近のエラーコードを取得する
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrorcode.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getErrorCode(): \ReturnType {}

	/**
	 * このオブジェクトの直近のエラーメッセージを取得する
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrormessage.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getErrorMessage(): \ReturnType {}

	/**
	 * このオブジェクトに関連づけられたロケールを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale_type
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.getlocale.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getLocale(string $locale_type): \ReturnType {}

	/**
	 * 境界と境界の間の navigating fragments 用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key_type
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.getpartsiterator.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getPartsIterator(string $key_type = NULL): \ReturnType {}

	/**
	 * スキャンするテキストを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.gettext.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getText(): \ReturnType {}

	/**
	 * あるオフセットが境界のオフセットかどうかを調べる
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.isboundary.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function isBoundary(string $offset): \ReturnType {}

	/**
	 * イテレータの位置を、最後の文字より後に設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.last.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function last(): \ReturnType {}

	/**
	 * イテレータを次の境界まで進める
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.next.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function next(string $offset = NULL): \ReturnType {}

	/**
	 * イテレータの位置を、指定したオフセット以前の最初の境界に設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.preceding.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function preceding(string $offset): \ReturnType {}

	/**
	 * イテレータの位置を、現在位置の直前の境界に設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.previous.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function previous(): \ReturnType {}

	/**
	 * スキャンするテキストを設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $text
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.settext.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function setText(string $text): \ReturnType {}
}

/**
 * @link http://php.net/manual/ja/class.intlcalendar.php
 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
 */
class IntlCalendar {

	/**
	 * @var integer <p>カレンダーのフィールドで、時代を表す数値です。たとえば、グレゴリオ暦やユリウス暦の場合は <i>1</i> が紀元後そして <i>0</i> が紀元前を表します。 また、和暦の場合は <i>235</i> が平成を表します。 すべてのカレンダーが複数の時代を持つわけではありません。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_ERA = 0;

	/**
	 * @var integer <p>カレンダーの、年を表すフィールド。時代が違えば同じ数字になることもあります。 そのカレンダー型が複数の時代を持っている場合は、このフィールドの最小値は通常は <i>1</i> になります。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_YEAR = 1;

	/**
	 * @var integer <p>カレンダーの、月を表すフィールド。月番号はゼロからはじまるので、1月が <i>0</i>、2月が <i>1</i>、…そして12月が <i>11</i> となります。13番目の月あるいはうるう月があるカレンダーの場合は、<i>12</i> で表します。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_MONTH = 2;

	/**
	 * @var integer <p>カレンダーの、年内の週番号を表すフィールド。 これは、何曜日を週の開始日とみなすか、そして週の最小日数は何日かによって決まります。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_WEEK_OF_YEAR = 3;

	/**
	 * @var integer <p>カレンダーの、月内の週番号を表すフィールド。 これは、何曜日を週の開始日とみなすか、そして週の最小日数は何日かによって決まります。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_WEEK_OF_MONTH = 4;

	/**
	 * @var integer <p>カレンダーの、月内の日数を表すフィールド。 <b><code>IntlCalendar::FIELD_DAY_OF_MONTH</code></b> と同じで、こちらのほうがよりわかりやすい名前です。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_DATE = 5;

	/**
	 * @var integer <p>カレンダーの、年内の日数を表すフィールド。 グレゴリオ暦の場合は、<b><code>1</code></b> から始まって <b><code>365</code></b> あるいは <b><code>366</code></b> で終わります。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_DAY_OF_YEAR = 6;

	/**
	 * @var integer <p>カレンダーの、曜日を表すフィールド。 最初の値は <i>1</i> (日曜日。<b><code>IntlCalendar::DOW_SUNDAY</code></b> とそれに続く定数を参照ください) で、有効な最後の値は 7 (土曜日) です。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_DAY_OF_WEEK = 7;

	/**
	 * @var integer <p>曜日 (日曜日、月曜日、…) を指定されたときに、このフィールドには当月内でその曜日が何番目に登場するのかを代入します。 つまり、このフィールドの値が <i>1</i> で曜日番号が <i>2</i> (月曜日) だったとすると、 当月の第一月曜日の日付が設定されます。 最大値は <i>5</i> です。</p> <p>さらに、<i>0</i> や負の数も使えます。 <i>0</i> は、ある月の最初の (day of week in month の値が <i>1</i> となる) 七日間の直前の七日間を表します。 負の値を指定した場合は、月末から数えます。<i>-1</i> は、その曜日が当月の最後に登場する日付、 <i>-2</i> はさらにその一週間前といったようになります。</p> <p><b><code>IntlCalendar::FIELD_WEEK_OF_MONTH</code></b> や <b><code>IntlCalendar::FIELD_WEEK_OF_YEAR</code></b> とは異なり、この値は <code>IntlCalendar::getFirstDayOfWeek()</code> や <code>IntlCalendar::getMinimalDaysInFirstWeek()</code> に依存しません。 第一月曜日は第一月曜日であり、たとえ前月に属する日であってもそれは変わりません。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_DAY_OF_WEEK_IN_MONTH = 8;

	/**
	 * @var integer <p>カレンダーの、午前 (<i>0</i>) か午後 (<i>1</i>) かを表すフィールド。 深夜 0 時は午前、正午は午後となります。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_AM_PM = 9;

	/**
	 * @var integer <p>カレンダーの、時間を表すフィールド。午前か午後かは含みません。 有効な値は <i>0</i> から <i>11</i> までです。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_HOUR = 10;

	/**
	 * @var integer <p>カレンダーの、24 時間制の時間を表すフィールド。 有効な値は <i>0</i> から <i>23</i> までです。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_HOUR_OF_DAY = 11;

	/**
	 * @var integer <p>カレンダーの、分を表すフィールド。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_MINUTE = 12;

	/**
	 * @var integer <p>カレンダーの、秒を表すフィールド。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_SECOND = 13;

	/**
	 * @var integer <p>カレンダーの、ミリ秒を表すフィールド。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_MILLISECOND = 14;

	/**
	 * @var integer <p>カレンダーの、タイムゾーンのオフセットをミリ秒で表すフィールド。 夏時間によるオフセットは含みません。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_ZONE_OFFSET = 15;

	/**
	 * @var integer <p>カレンダーの、夏時間によるオフセットをミリ秒で表すフィールド。 夏時間を採用しているタイムゾーンの場合に使います。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_DST_OFFSET = 16;

	/**
	 * @var integer <p>カレンダーの、week of year 用の年を表すフィールド。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_YEAR_WOY = 17;

	/**
	 * @var integer <p>カレンダーの、ローカライズした曜日を表すフィールド。 <i>1</i> から <i>7</i> までの値となり、 <i>1</i> は <code>IntlCalendar::getFirstDayOfWeek()</code> が返す値にマッチする曜日に使います。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_DOW_LOCAL = 18;

	/**
	 * @var integer <p>カレンダーの、年番号を表すフィールド。この番号は、時代をまたがって続きます。 グレゴリオ暦の場合、紀元後の年についてはこの値は <b><code>IntlCalendar::FIELD_YEAR</code></b> に一致します。 紀元前 <i>y</i> 年の場合は <i>-y + 1</i> となります。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_EXTENDED_YEAR = 19;

	/**
	 * @var integer <p>カレンダーの、ユリウス日を表すフィールド。 一般的な慣習とは違って、このユリウス日は現地時間の深夜 0 時に加算されます。 UTC の正午ではありません。 これで、日付を一意に特定します。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_JULIAN_DAY = 20;

	/**
	 * @var integer <p>カレンダーの、 <b><code>IntlCalendar::FIELD_HOUR_OF_DAY</code></b> や <b><code>IntlCalendar::FIELD_MINUTE</code></b>、 <b><code>IntlCalendar::FIELD_SECOND</code></b>、そして <b><code>IntlCalendar::FIELD_MILLISECOND</code></b> の情報をまとめたフィールド。 <i>0</i> から <i>24 &#42; 3600 &#42; 1000 - 1</i> までの値となります。この値は、その日の中での経過ミリ秒数ではありません。 というのも、夏時間への移行を挟む場合はこの値は連続した値にならないからです。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_MILLISECONDS_IN_DAY = 21;

	/**
	 * @var integer <p>カレンダーのフィールドで、値が <i>1</i> のときはうるう月、 <i>0</i> の場合はそうでないことを表します。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_IS_LEAP_MONTH = 22;

	/**
	 * @var integer <p>フィールドの総数。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_FIELD_COUNT = 23;

	/**
	 * @var integer <p><b><code>IntlCalendar::FIELD_DATE</code></b> のエイリアス。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const FIELD_DAY_OF_MONTH = 5;

	/**
	 * @var integer <p>日曜日。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const DOW_SUNDAY = 1;

	/**
	 * @var integer <p>月曜日。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const DOW_MONDAY = 2;

	/**
	 * @var integer <p>火曜日。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const DOW_TUESDAY = 3;

	/**
	 * @var integer <p>水曜日。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const DOW_WEDNESDAY = 4;

	/**
	 * @var integer <p>木曜日。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const DOW_THURSDAY = 5;

	/**
	 * @var integer <p>金曜日。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const DOW_FRIDAY = 6;

	/**
	 * @var integer <p>土曜日。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const DOW_SATURDAY = 7;

	/**
	 * @var integer <p>平日であることを示す <code>IntlCalendar::getDayOfWeekType()</code> の出力。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const DOW_TYPE_WEEKDAY = 0;

	/**
	 * @var integer <p>週末であることを示す <code>IntlCalendar::getDayOfWeekType()</code> の出力。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const DOW_TYPE_WEEKEND = 1;

	/**
	 * @var integer <p>指定した曜日から週末が始まることを示す <code>IntlCalendar::getDayOfWeekType()</code> の出力。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const DOW_TYPE_WEEKEND_OFFSET = 2;

	/**
	 * @var integer <p>指定した曜日で週末が終わることを示す <code>IntlCalendar::getDayOfWeekType()</code> の出力。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const DOW_TYPE_WEEKEND_CEASE = 3;

	/**
	 * @var integer <p>スキップした範囲内の実測時間が一時間前の実測時間と同じ瞬間を指すことを示す <code>IntlCalendar::getSkippedWallTimeOption()</code> の出力。 また、繰り返した範囲内の実測時間がその最初のほうを指すことを示す <code>IntlCalendar::getRepeatedWallTimeOption()</code> の出力。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const WALLTIME_FIRST = 1;

	/**
	 * @var integer <p>スキップした範囲内の実測時間が一時間後の実測時間と同じ瞬間を指すことを示す <code>IntlCalendar::getSkippedWallTimeOption()</code> の出力。 また、繰り返した範囲内の実測時間がその二番目のほうを指すことを示す <code>IntlCalendar::getRepeatedWallTimeOption()</code> の出力。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const WALLTIME_LAST = 0;

	/**
	 * @var integer <p>スキップした範囲内の実測時間が夏時間への移行 (開始) を指すことを示す <code>IntlCalendar::getSkippedWallTimeOption()</code> の出力。</p>
	 * @link http://php.net/manual/ja/class.intlcalendar.php
	 */
	const WALLTIME_NEXT_VALID = 2;

	/**
	 * Private constructor for disallowing instantiation
	 * <p>A private constructor for disallowing instantiation with the new operator.</p><p>Call <code>IntlCalendar::createInstance()</code> instead.</p>
	 * @return self <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/intlcalendar.construct.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	private function __construct() {}

	/**
	 * Add a (signed) amount of time to a field
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Add a signed amount to a field. Adding a positive amount allows advances in time, even if the numeric value of the field decreases (e.g. when working with years in BC dates).</p><p>Other fields may need to adjusted – for instance, adding a month to the 31st of January will result in the 28th (or 29th) of February. Contrary to <code>IntlCalendar::roll()</code>, when a value wraps around, more significant fields may change. For instance, adding a day to the 31st of January will result in the 1st of February, not the 1st of Janurary.</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @param int $amount <p>The signed amount to add to the current field. If the amount is positive, the instant will be moved forward; if it is negative, the instant wil be moved into the past. The unit is implicit to the field type. For instance, hours for <b><code>IntlCalendar::FIELD_HOUR_OF_DAY</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.add.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function add(int $field, int $amount): bool {}

	/**
	 * Whether this objectʼs time is after that of the passed object
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns whether this objectʼs time succeeds the argumentʼs time.</p>
	 * @param \IntlCalendar $other <p>The calendar whose time will be checked against the primary objectʼs time.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if this objectʼs current time is after that of the <code>calendar</code> argumentʼs time. Returns <b><code>FALSE</code></b> otherwise. Also returns <b><code>FALSE</code></b> on failure. You can use exceptions or <code>intl_get_error_code()</code> to detect error conditions.</p>
	 * @link http://php.net/manual/ja/intlcalendar.after.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function after(\IntlCalendar $other): bool {}

	/**
	 * Whether this objectʼs time is before that of the passed object
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns whether this objectʼs time precedes the argumentʼs time.</p>
	 * @param \IntlCalendar $other <p>The calendar whose time will be checked against the primary objectʼs time.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if this objectʼs current time is before that of the <code>calendar</code> argumentʼs time. Returns <b><code>FALSE</code></b> otherwise. Also returns <b><code>FALSE</code></b> on failure. You can use exceptions or <code>intl_get_error_code()</code> to detect error conditions.</p>
	 * @link http://php.net/manual/ja/intlcalendar.before.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function before(\IntlCalendar $other): bool {}

	/**
	 * Clear a field or all fields
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Clears either all of the fields or a specific field. A cleared field is marked as unset, giving it the lowest priority against overlapping fields or even default values when calculating the time. Additionally, its value is set to <i>0</i>, though given the fieldʼs low priority, its value may have been internally set to another value by the time the field has finished been queried.</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success失敗した場合に <b><code>FALSE</code></b> を返します. Failure can only occur is invalid arguments are provided.</p>
	 * @link http://php.net/manual/ja/intlcalendar.clear.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function clear(int $field = NULL): bool {}

	/**
	 * Create a new IntlCalendar
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Given a timezone and locale, this method creates an IntlCalendar object. This factory method may return a subclass of IntlCalendar.</p><p>The calendar created will represent the time instance at which it was created, based on the system time. The fields can all be cleared by calling <b>IntCalendar::clear()</b> with no arguments. See also <b>IntlGregorianCalendar::__construct()</b>.</p>
	 * @param mixed $timeZone <p>The timezone to use.</p> <ul> <li> <p><b><code>NULL</code></b>。この場合はデフォルトのタイムゾーンを使います。デフォルトは、ini 項目 date.timezone で設定したものか、 <code>date_default_timezone_set()</code> 関数で指定したもの (そして <code>date_default_timezone_get()</code> が返すもの) になります。</p> </li> <li> <p>IntlTimeZone。これを直接使います。</p> </li> <li> <p>DateTimeZone。その識別子を取り出して、ICU タイムゾーンオブジェクトを作ります。 つまり、これは ICU のデータベースに基づくタイムゾーンとなり、PHP のタイムゾーンデータベースに基づくものではありません。</p> </li> <li> <p>文字列。ICU タイムゾーン識別子として有効なものを指定します。 <code>IntlTimeZone::createTimeZoneIDEnumeration()</code> を参照ください。 <i>"GMT+08:30"</i> などのオフセットも指定できます。</p> </li> </ul>
	 * @param string $locale <p>A locale to use or <b><code>NULL</code></b> to use the default locale.</p>
	 * @return IntlCalendar <p>The created IntlCalendar instance or <b><code>NULL</code></b> on failure.</p>
	 * @link http://php.net/manual/ja/intlcalendar.createinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function createInstance($timeZone = NULL, string $locale = ""): \IntlCalendar {}

	/**
	 * Compare time of two IntlCalendar objects for equality
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns true if this calendar and the given calendar have the same time. The settings, calendar types and field states do not have to be the same.</p>
	 * @param \IntlCalendar $other <p>The calendar to compare with the primary object.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the current time of both this and the passed in IntlCalendar object are the same, or <b><code>FALSE</code></b> otherwise. The value <b><code>FALSE</code></b> can also be returned on failure. This can only happen if bad arguments are passed in. In any case, the two cases can be distinguished by calling <code>intl_get_error_code()</code>.</p>
	 * @link http://php.net/manual/ja/intlcalendar.equals.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function equals(\IntlCalendar $other): bool {}

	/**
	 * Calculate difference between given time and this objectʼs time
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Return the difference between the given time and the time this object is set to, with respect to the quantity specified the <code>field</code> parameter.</p><p>This method is meant to be called successively, first with the most significant field of interest down to the least significant field. To this end, as a side effect, this calendarʼs value for the field specified is advanced by the amount returned.</p>
	 * @param float $when <p>The time against which to compare the quantity represented by the <code>field</code>. For the result to be positive, the time given for this parameter must be ahead of the time of the object the method is being invoked on.</p>
	 * @param int $field <p>The field that represents the quantity being compared.</p> <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @return int <p>Returns a (signed) difference of time in the unit associated with the specified field失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.fielddifference.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function fieldDifference(float $when, int $field): int {}

	/**
	 * Create an IntlCalendar from a DateTime object or string
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Creates an IntlCalendar object either from a DateTime object or from a string from which a DateTime object can be built.</p><p>The new calendar will represent not only the same instant as the given DateTime (subject to precision loss for dates very far into the past or future), but also the same timezone (subject to the caveat that different timezone databases will be used, and therefore the results may differ).</p>
	 * @param mixed $dateTime <p>A DateTime object or a <code>string</code> that can be passed to <code>DateTime::__construct()</code>.</p>
	 * @return IntlCalendar <p>The created IntlCalendar object or <b><code>NULL</code></b> in case of failure. If a <code>string</code> is passed, any exception that occurs inside the DateTime constructor is propagated.</p>
	 * @link http://php.net/manual/ja/intlcalendar.fromdatetime.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a2
	 */
	public static function fromDateTime($dateTime): \IntlCalendar {}

	/**
	 * Get the value for a field
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Gets the value for a specific field.</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @return int <p>An integer with the value of the time field.</p>
	 * @link http://php.net/manual/ja/intlcalendar.get.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function get(int $field): int {}

	/**
	 * The maximum value for a field, considering the objectʼs current time
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns a fieldʼs relative maximum value around the current time. The exact semantics vary by field, but in the general case this is the value that would be obtained if one would set the field value into the smallest relative maximum for the field and would increment it until reaching the global maximum or the field value wraps around, in which the value returned would be the global maximum or the value before the wrapping, respectively.</p><p>For instance, in the gregorian calendar, the actual maximum value for the day of month would vary between <i>28</i> and <i>31</i>, depending on the month and year of the current time.</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @return int <p>An <code>int</code> representing the maximum value in the units associated with the given <code>field</code>失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getactualmaximum.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getActualMaximum(int $field): int {}

	/**
	 * The minimum value for a field, considering the objectʼs current time
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns a fieldʼs relative minimum value around the current time. The exact semantics vary by field, but in the general case this is the value that would be obtained if one would set the field value into the greatest relative minimum for the field and would decrement it until reaching the global minimum or the field value wraps around, in which the value returned would be the global minimum or the value before the wrapping, respectively.</p><p>For the Gregorian calendar, this is always the same as <code>IntlCalendar::getMinimum()</code>.</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @return int <p>An <code>int</code> representing the minimum value in the fieldʼs unit失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getactualminimum.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getActualMinimum(int $field): int {}

	/**
	 * Get array of locales for which there is data
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Gives the list of locales for which calendars are installed. As of ICU 51, this is the list of all installed ICU locales.</p>
	 * @return array <p>An <code>array</code> of <code>string</code>s, one for which locale.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getavailablelocales.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function getAvailableLocales(): array {}

	/**
	 * Tell whether a day is a weekday, weekend or a day that has a transition between the two
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns whether the passed day is a weekday (<b><code>IntlCalendar::DOW_TYPE_WEEKDAY</code></b>), a weekend day (<b><code>IntlCalendar::DOW_TYPE_WEEKEND</code></b>), a day during which a transition occurs into the weekend (<b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b>) or a day during which the weekend ceases (<b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b>).</p><p>If the return is either <b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b> or <b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b>, then <code>IntlCalendar::getWeekendTransition()</code> can be called to obtain the time of the transition.</p><p>This function requires ICU 4.4 or later.</p>
	 * @param int $dayOfWeek <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, …, <b><code>IntlCalendar::DOW_SATURDAY</code></b>.</p>
	 * @return int <p>Returns one of the constants <b><code>IntlCalendar::DOW_TYPE_WEEKDAY</code></b>, <b><code>IntlCalendar::DOW_TYPE_WEEKEND</code></b>, <b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b> or <b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b>失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getdayofweektype.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getDayOfWeekType(int $dayOfWeek): int {}

	/**
	 * Get last error code on the object
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns the numeric ICU error code for the last call on this object (including cloning) or the IntlCalendar given for the <code>calendar</code> parameter (in the procedural‒style version). This may indicate only a warning (negative error code) or no error at all (<b><code>U_ZERO_ERROR</code></b>). The actual presence of an error can be tested with <code>intl_is_failure()</code>.</p><p>Invalid arguments detected on the PHP side (before invoking functions of the ICU library) are not recorded for the purposes of this function.</p><p>The last error that occurred in any call to a function of the intl extension, including early argument errors, can be obtained with <code>intl_get_error_code()</code>. This function resets the global error code, but not the objectʼs error code.</p>
	 * @return int <p>An ICU error code indicating either success, failure or a warning.</p>
	 * @link http://php.net/manual/ja/intlcalendar.geterrorcode.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getErrorCode(): int {}

	/**
	 * Get last error message on the object
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns the error message (if any) associated with the error reported by <code>IntlCalendar::getErrorCode()</code> or <code>intlcal_get_error_code()</code>. If there is no associated error message, only the string representation of the name of the error constant will be returned. Otherwise, the message also includes a message set on the side of the PHP binding.</p>
	 * @return string <p>The error message associated with last error that occurred in a function call on this object, or a string indicating the non-existance of an error.</p>
	 * @link http://php.net/manual/ja/intlcalendar.geterrormessage.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getErrorMessage(): string {}

	/**
	 * Get the first day of the week for the calendarʼs locale
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>The week day deemed to start a week, either the default value for this locale or the value set with <code>IntlCalendar::setFirstDayOfWeek()</code>.</p>
	 * @return int <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, …, <b><code>IntlCalendar::DOW_SATURDAY</code></b>失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getfirstdayofweek.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getFirstDayOfWeek(): int {}

	/**
	 * Get the largest local minimum value for a field
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns the largest local minimum for a field. This should be a value larger or equal to that returned by <code>IntlCalendar::getActualMinimum()</code>, which is in its turn larger or equal to that returned by <code>IntlCalendar::getMinimum()</code>. All these three functions return the same value for the Gregorian calendar.</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @return int <p>An <code>int</code> representing a field value, in the fieldʼs unit,失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getgreatestminimum.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getGreatestMinimum(int $field): int {}

	/**
	 * Get set of locale keyword values
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>For a given locale key, get the set of values for that key that would result in a different behavior. For now, only the <i>'calendar'</i> keyword is supported.</p><p>This function requires ICU 4.2 or later.</p>
	 * @param string $key <p>The locale keyword for which relevant values are to be queried. Only <i>'calendar'</i> is supported.</p>
	 * @param string $locale <p>The locale onto which the keyword/value pair are to be appended.</p>
	 * @param bool $commonlyUsed <p>Whether to show only the values commonly used for the specified locale.</p>
	 * @return Iterator <p>An iterator that yields strings with the locale keyword values失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getkeywordvaluesforlocale.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function getKeywordValuesForLocale(string $key, string $locale, bool $commonlyUsed): \Iterator {}

	/**
	 * Get the smallest local maximum for a field
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns the smallest local maximumw for a field. This should be a value smaller or equal to that returned by <b>IntlCalendar::getActualMaxmimum()</b>, which is in its turn smaller or equal to that returned by <code>IntlCalendar::getMaximum()</code>.</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @return int <p>An <code>int</code> representing a field value in the fieldʼs unit失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getleastmaximum.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getLeastMaximum(int $field): int {}

	/**
	 * Get the locale associated with the object
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns the locale used by this calendar object.</p>
	 * @param int $localeType <p>Whether to fetch the actual locale (the locale from which the calendar data originates, with <b><code>Locale::ACTUAL_LOCALE</code></b>) or the valid locale, i.e., the most specific locale supported by ICU relatively to the requested locale – see <b><code>Locale::VALID_LOCALE</code></b>. From the most general to the most specific, the locales are ordered in this fashion – actual locale, valid locale, requested locale.</p>
	 * @return string <p>A locale string失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getlocale.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getLocale(int $localeType): string {}

	/**
	 * Get the global maximum value for a field
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Gets the global maximum for a field, in this specific calendar. This value is larger or equal to that returned by <code>IntlCalendar::getActualMaximum()</code>, which is in its turn larger or equal to that returned by <code>IntlCalendar::getLeastMaximum()</code>.</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @return int <p>An <code>int</code> representing a field value in the fieldʼs unit失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getmaximum.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getMaximum(int $field): int {}

	/**
	 * Get minimal number of days the first week in a year or month can have
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns the smallest number of days the first week of a year or month must have in the new year or month. For instance, in the Gregorian calendar, if this value is 1, then the first week of the year will necessarily include January 1st, while if this value is 7, then the week with January 1st will be the first week of the year only if the day of the week for January 1st matches the day of the week returned by <code>IntlCalendar::getFirstDayOfWeek()</code>; otherwise it will be the previous yearʼs last week.</p>
	 * @return int <p>An <code>int</code> representing a number of days失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getminimaldaysinfirstweek.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getMinimalDaysInFirstWeek(): int {}

	/**
	 * Get the global minimum value for a field
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Gets the global minimum for a field, in this specific calendar. This value is smaller or equal to that returned by <code>IntlCalendar::getActualMinimum()</code>, which is in its turn smaller or equal to that returned by <code>IntlCalendar::getGreatestMinimum()</code>. For the Gregorian calendar, these three functions always return the same value (for each field).</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @return int <p>An <code>int</code> representing a value for the given field in the fieldʼs unit失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getminimum.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getMinimum(int $field): int {}

	/**
	 * Get number representing the current time
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>The number of milliseconds that have passed since the reference date. This number is derived from the system time.</p>
	 * @return float <p>A <code>float</code> representing a number of milliseconds since the epoch, not counting leap seconds.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getnow.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function getNow(): float {}

	/**
	 * Get behavior for handling repeating wall time
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Gets the current strategy for dealing with wall times that are repeated whenever the clock is set back during dailight saving time end transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p><p>This function requires ICU 4.9 or later.</p>
	 * @return int <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b> or <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getrepeatedwalltimeoption.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getRepeatedWallTimeOption(): int {}

	/**
	 * Get behavior for handling skipped wall time
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Gets the current strategy for dealing with wall times that are skipped whenever the clock is forwarded during dailight saving time start transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p><p>The calendar must be lenient for this option to have any effect, otherwise attempting to set a non-existing time will cause an error.</p><p>This function requires ICU 4.9 or later.</p>
	 * @return int <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b>, <b><code>IntlCalendar::WALLTIME_LAST</code></b> or <b><code>IntlCalendar::WALLTIME_NEXT_VALID</code></b>.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getskippedwalltimeoption.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getSkippedWallTimeOption(): int {}

	/**
	 * Get time currently represented by the object
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns the time associated with this object, expressed as the number of milliseconds since the epoch.</p>
	 * @return float <p>A <code>float</code> representing the number of milliseconds elapsed since the reference time (1 Jan 1970 00:00:00 UTC).</p>
	 * @link http://php.net/manual/ja/intlcalendar.gettime.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getTime(): float {}

	/**
	 * Get the objectʼs timezone
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns the IntlTimeZone object associated with this calendar.</p>
	 * @return IntlTimeZone <p>An IntlTimeZone object corresponding to the one used internally in this object.</p>
	 * @link http://php.net/manual/ja/intlcalendar.gettimezone.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getTimeZone(): \IntlTimeZone {}

	/**
	 * Get the calendar type
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>A string describing the type of this calendar. This is one of the valid values for the calendar keyword value <i>'calendar'</i>.</p>
	 * @return string <p>A <code>string</code> representing the calendar type, such as <i>'gregorian'</i>, <i>'islamic'</i>, etc.</p>
	 * @link http://php.net/manual/ja/intlcalendar.gettype.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getType(): string {}

	/**
	 * Get time of the day at which weekend begins or ends
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns the number of milliseconds after midnight at which the weekend begins or ends.</p><p>This is only applicable for days of the week for which <code>IntlCalendar::getDayOfWeekType()</code> returns either <b><code>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</code></b> or <b><code>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</code></b>. Calling this function for other days of the week is an error condition.</p><p>This function requires ICU 4.4 or later.</p>
	 * @param string $dayOfWeek <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, …, <b><code>IntlCalendar::DOW_SATURDAY</code></b>.</p>
	 * @return int <p>The number of milliseconds into the day at which the weekend begins or ends失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intlcalendar.getweekendtransition.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getWeekendTransition(string $dayOfWeek): int {}

	/**
	 * Whether the objectʼs time is in Daylight Savings Time
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Whether, for the instant represented by this object and for this objectʼs timezone, daylight saving time is in place.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if the date is in Daylight Savings Time, <b><code>FALSE</code></b> otherwise. The value <b><code>FALSE</code></b> may also be returned on failure, for instance after specifying invalid field values on non-lenient mode; use exceptions or query <code>intl_get_error_code()</code> to disambiguate.</p>
	 * @link http://php.net/manual/ja/intlcalendar.indaylighttime.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function inDaylightTime(): bool {}

	/**
	 * Whether another calendar is equal but for a different time
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns whether this and the given object are equivalent for all purposes except as to the time they have set. The locales do not have to match, as long as no change in behavior results from such mismatch. This includes the timezone, whether the lenient mode is set, the repeated and skipped wall time settings, the days of the week when the weekend starts and ceases and the times where such transitions occur. It may also include other calendar specific settings, such as the Gregorian/Julian transition instant.</p>
	 * @param \IntlCalendar $other <p>The other calendar against which the comparison is to be made.</p>
	 * @return bool <p>Assuming there are no argument errors, returns <b><code>TRUE</code></b> iif the calendars are equivalent except possibly for their set time.</p>
	 * @link http://php.net/manual/ja/intlcalendar.isequivalentto.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function isEquivalentTo(\IntlCalendar $other): bool {}

	/**
	 * Whether date/time interpretation is in lenient mode
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns whether the current date/time interpretations is lenient (the default). If that is case, some out of range values for fields will be accepted instead of raising an error.</p>
	 * @return bool <p>A <code>bool</code> representing whether the calendar is set to lenient mode.</p>
	 * @link http://php.net/manual/ja/intlcalendar.islenient.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function isLenient(): bool {}

	/**
	 * Whether a field is set
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns whether a field is set (as opposed to clear). Set fields take priority over unset fields and their default values when the date/time is being calculated. Fields set later take priority over fields set earlier.</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @return bool <p>Assuming there are no argument errors, returns <b><code>TRUE</code></b> iif the field is set.</p>
	 * @link http://php.net/manual/ja/intlcalendar.isset.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function isSet(int $field): bool {}

	/**
	 * Whether a certain date/time is in the weekend
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Returns whether either the obejctʼs current time or the provided timestamp occur during a weekend in this objectʼs calendar system.</p><p>This function requires ICU 4.4 or later.</p>
	 * @param float $date <p>An optional timestamp representing the number of milliseconds since the epoch, excluding leap seconds. If <b><code>NULL</code></b>, this objectʼs current time is used instead.</p>
	 * @return bool <p>A <code>bool</code> indicating whether the given or this objectʼs time occurs in a weekend.</p><p>The value <b><code>FALSE</code></b> may also be returned on failure, for instance after giving a date out of bounds on non-lenient mode; use exceptions or query <code>intl_get_error_code()</code> to disambiguate.</p>
	 * @link http://php.net/manual/ja/intlcalendar.isweekend.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function isWeekend(float $date = NULL): bool {}

	/**
	 * Add value to field without carrying into more significant fields
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Adds a (signed) amount to a field. The difference with respect to <code>IntlCalendar::add()</code> is that when the field value overflows, it does not carry into more significant fields.</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @param mixed $amountOrUpOrDown <p>The (signed) amount to add to the field, <b><code>TRUE</code></b> for rolling up (adding <i>1</i>), or <b><code>FALSE</code></b> for rolling down (subtracting <i>1</i>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/ja/intlcalendar.roll.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function roll(int $field, $amountOrUpOrDown): bool {}

	/**
	 * Set a time field or several common fields at once
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Sets either a specific field to the given value, or sets at once several common fields. The range of values that are accepted depend on whether the calendar is using the lenient mode.</p><p>For fields that conflict, the fields that are set later have priority.</p><p>This method cannot be called with exactly four arguments.</p>
	 * @param int $field <p>IntlCalendar の日付/時刻 フィールド定数 のいずれか。 <i>0</i> から <b><code>IntlCalendar::FIELD_COUNT</code></b> までの間の整数値です。</p>
	 * @param int $value <p>The new value of the given field.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success and <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/ja/intlcalendar.set.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function set(int $field, int $value): bool {}

	/**
	 * Set the day on which the week is deemed to start
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Defines the day of week deemed to start the week. This affects the behavior of fields that depend on the concept of week start and end such as <b><code>IntlCalendar::FIELD_WEEK_OF_YEAR</code></b> and <b><code>IntlCalendar::FIELD_YEAR_WOY</code></b>.</p>
	 * @param int $dayOfWeek <p>One of the constants <b><code>IntlCalendar::DOW_SUNDAY</code></b>, <b><code>IntlCalendar::DOW_MONDAY</code></b>, …, <b><code>IntlCalendar::DOW_SATURDAY</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Failure can only happen due to invalid parameters.</p>
	 * @link http://php.net/manual/ja/intlcalendar.setfirstdayofweek.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function setFirstDayOfWeek(int $dayOfWeek): bool {}

	/**
	 * Set whether date/time interpretation is to be lenient
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Defines whether the calendar is ‘lenient mode’. In such a mode, some of out-of-bounds values for some fields are accepted, the behavior being similar to that of <code>IntlCalendar::add()</code> (i.e., the value wraps around, carrying into more significant fields each time). If the lenient mode is off, then such values will generate an error.</p>
	 * @param bool $isLenient <p>Use <b><code>TRUE</code></b> to activate the lenient mode; <b><code>FALSE</code></b> otherwise.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Failure can only happen due to invalid parameters.</p>
	 * @link http://php.net/manual/ja/intlcalendar.setlenient.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function setLenient(bool $isLenient): bool {}

	/**
	 * Set minimal number of days the first week in a year or month can have
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Sets the smallest number of days the first week of a year or month must have in the new year or month. For instance, in the Gregorian calendar, if this value is 1, then the first week of the year will necessarily include January 1st, while if this value is 7, then the week with January 1st will be the first week of the year only if the day of the week for January 1st matches the day of the week returned by <code>IntlCalendar::getFirstDayOfWeek()</code>; otherwise it will be the previous yearʼs last week.</p>
	 * @param int $minimalDays <p>The number of minimal days to set.</p>
	 * @return bool <p><b><code>TRUE</code></b> on success, <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/ja/intlcalendar.setminimaldaysinfirstweek.php
	 * @since PHP 5 >= 5.5.1, PHP 7
	 */
	public function setMinimalDaysInFirstWeek(int $minimalDays): bool {}

	/**
	 * Set behavior for handling repeating wall times at negative timezone offset transitions
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Sets the current strategy for dealing with wall times that are repeated whenever the clock is set back during dailight saving time end transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b> (take the post-DST instant). The other possible value is <b><code>IntlCalendar::WALLTIME_FIRST</code></b> (take the instant that occurs during DST).</p><p>This function requires ICU 4.9 or later.</p>
	 * @param int $wallTimeOption <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b> or <b><code>IntlCalendar::WALLTIME_LAST</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Failure can only happen due to invalid parameters.</p>
	 * @link http://php.net/manual/ja/intlcalendar.setrepeatedwalltimeoption.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function setRepeatedWallTimeOption(int $wallTimeOption): bool {}

	/**
	 * Set behavior for handling skipped wall times at positive timezone offset transitions
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Sets the current strategy for dealing with wall times that are skipped whenever the clock is forwarded during dailight saving time start transitions. The default value is <b><code>IntlCalendar::WALLTIME_LAST</code></b> (take it as being the same instant as the one when the wall time is one hour more). Alternative values are <b><code>IntlCalendar::WALLTIME_FIRST</code></b> (same instant as the one with a wall time of one hour less) and <b><code>IntlCalendar::WALLTIME_NEXT_VALID</code></b> (same instant as when DST begins).</p><p>This affects only the instant represented by the calendar (as reported by <code>IntlCalendar::getTime()</code>), the field values will not be rewritten accordingly.</p><p>The calendar must be lenient for this option to have any effect, otherwise attempting to set a non-existing time will cause an error.</p><p>This function requires ICU 4.9 or later.</p>
	 * @param int $wallTimeOption <p>One of the constants <b><code>IntlCalendar::WALLTIME_FIRST</code></b>, <b><code>IntlCalendar::WALLTIME_LAST</code></b> or <b><code>IntlCalendar::WALLTIME_NEXT_VALID</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success. Failure can only happen due to invalid parameters.</p>
	 * @link http://php.net/manual/ja/intlcalendar.setskippedwalltimeoption.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function setSkippedWallTimeOption(int $wallTimeOption): bool {}

	/**
	 * Set the calendar time in milliseconds since the epoch
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Sets the instant represented by this object. The instant is represented by a <code>float</code> whose value should be an integer number of milliseconds since the epoch (1 Jan 1970 00:00:00.000 UTC), ignoring leap seconds. All the field values will be recalculated accordingly.</p>
	 * @param float $date <p>An instant represented by the number of number of milliseconds between such instant and the epoch, ignoring leap seconds.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success and <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/ja/intlcalendar.settime.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function setTime(float $date): bool {}

	/**
	 * Set the timezone used by this calendar
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Defines a new timezone for this calendar. The time represented by the object is preserved to the detriment of the field values.</p>
	 * @param mixed $timeZone <p>The new timezone to be used by this calendar. It can be specified in the following ways:</p><ul> <li> <p><b><code>NULL</code></b>。この場合はデフォルトのタイムゾーンを使います。デフォルトは、ini 項目 date.timezone で設定したものか、 <code>date_default_timezone_set()</code> 関数で指定したもの (そして <code>date_default_timezone_get()</code> が返すもの) になります。</p> </li> <li> <p>IntlTimeZone。これを直接使います。</p> </li> <li> <p>DateTimeZone。その識別子を取り出して、ICU タイムゾーンオブジェクトを作ります。 つまり、これは ICU のデータベースに基づくタイムゾーンとなり、PHP のタイムゾーンデータベースに基づくものではありません。</p> </li> <li> <p>文字列。ICU タイムゾーン識別子として有効なものを指定します。 <code>IntlTimeZone::createTimeZoneIDEnumeration()</code> を参照ください。 <i>"GMT+08:30"</i> などのオフセットも指定できます。</p> </li> </ul>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success and <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/ja/intlcalendar.settimezone.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function setTimeZone($timeZone): bool {}

	/**
	 * Convert an IntlCalendar into a DateTime object
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Create a DateTime object that represents the same instant (up to second precision, with a rounding error of less than 1 second) and has an analog timezone to this object (the difference being DateTimeʼs timezone will be backed by PHPʼs timezone while IntlCalendarʼs timezone is backed by ICUʼs).</p>
	 * @return DateTime <p>A DateTime object with the same timezone as this object (though using PHPʼs database instead of ICUʼs) and the same time, except for the smaller precision (second precision instead of millisecond). Returns <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/ja/intlcalendar.todatetime.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a2
	 */
	public function toDateTime(): \DateTime {}
}

/**
 * <p><b>IntlChar</b> provides access to a number of utility methods that can be used to access information about Unicode characters.</p>
 * <p>The methods and constants adhere closely to the names and behavior used by the underlying ICU library.</p>
 * @link http://php.net/manual/ja/class.intlchar.php
 * @since PHP 7
 */
class IntlChar {

	/**
	 * @var string
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const UNICODE_VERSION = '6.3';

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CODEPOINT_MIN = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CODEPOINT_MAX = 1114111;

	/**
	 * @var float <p>Special value that is returned by <code>IntlChar::getNumericValue()</code> when no numeric value is defined for a code point.</p>
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const NO_NUMERIC_VALUE = -123456789;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_ALPHABETIC = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_BINARY_START = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_ASCII_HEX_DIGIT = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_BIDI_CONTROL = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_BIDI_MIRRORED = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_DASH = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_DEFAULT_IGNORABLE_CODE_POINT = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_DEPRECATED = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_DIACRITIC = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_EXTENDER = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_FULL_COMPOSITION_EXCLUSION = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_GRAPHEME_BASE = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_GRAPHEME_EXTEND = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_GRAPHEME_LINK = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_HEX_DIGIT = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_HYPHEN = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_ID_CONTINUE = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_ID_START = 16;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_IDEOGRAPHIC = 17;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_IDS_BINARY_OPERATOR = 18;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_IDS_TRINARY_OPERATOR = 19;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_JOIN_CONTROL = 20;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_LOGICAL_ORDER_EXCEPTION = 21;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_LOWERCASE = 22;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_MATH = 23;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NONCHARACTER_CODE_POINT = 24;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_QUOTATION_MARK = 25;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_RADICAL = 26;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_SOFT_DOTTED = 27;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_TERMINAL_PUNCTUATION = 28;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_UNIFIED_IDEOGRAPH = 29;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_UPPERCASE = 30;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_WHITE_SPACE = 31;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_XID_CONTINUE = 32;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_XID_START = 33;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_CASE_SENSITIVE = 34;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_S_TERM = 35;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_VARIATION_SELECTOR = 36;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NFD_INERT = 37;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NFKD_INERT = 38;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NFC_INERT = 39;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NFKC_INERT = 40;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_SEGMENT_STARTER = 41;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_PATTERN_SYNTAX = 42;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_PATTERN_WHITE_SPACE = 43;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_POSIX_ALNUM = 44;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_POSIX_BLANK = 45;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_POSIX_GRAPH = 46;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_POSIX_PRINT = 47;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_POSIX_XDIGIT = 48;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_CASED = 49;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_CASE_IGNORABLE = 50;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_CHANGES_WHEN_LOWERCASED = 51;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_CHANGES_WHEN_UPPERCASED = 52;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_CHANGES_WHEN_TITLECASED = 53;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_CHANGES_WHEN_CASEFOLDED = 54;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_CHANGES_WHEN_CASEMAPPED = 55;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_CHANGES_WHEN_NFKC_CASEFOLDED = 56;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_BINARY_LIMIT = 57;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_BIDI_CLASS = 4096;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_INT_START = 4096;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_BLOCK = 4097;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_CANONICAL_COMBINING_CLASS = 4098;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_DECOMPOSITION_TYPE = 4099;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_EAST_ASIAN_WIDTH = 4100;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_GENERAL_CATEGORY = 4101;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_JOINING_GROUP = 4102;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_JOINING_TYPE = 4103;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_LINE_BREAK = 4104;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NUMERIC_TYPE = 4105;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_SCRIPT = 4106;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_HANGUL_SYLLABLE_TYPE = 4107;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NFD_QUICK_CHECK = 4108;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NFKD_QUICK_CHECK = 4109;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NFC_QUICK_CHECK = 4110;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NFKC_QUICK_CHECK = 4111;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_LEAD_CANONICAL_COMBINING_CLASS = 4112;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_TRAIL_CANONICAL_COMBINING_CLASS = 4113;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_GRAPHEME_CLUSTER_BREAK = 4114;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_SENTENCE_BREAK = 4115;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_WORD_BREAK = 4116;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_BIDI_PAIRED_BRACKET_TYPE = 4117;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_INT_LIMIT = 4118;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_GENERAL_CATEGORY_MASK = 8192;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_MASK_START = 8192;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_MASK_LIMIT = 8193;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NUMERIC_VALUE = 12288;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_DOUBLE_START = 12288;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_DOUBLE_LIMIT = 12289;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_AGE = 16384;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_STRING_START = 16384;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_BIDI_MIRRORING_GLYPH = 16385;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_CASE_FOLDING = 16386;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_ISO_COMMENT = 16387;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_LOWERCASE_MAPPING = 16388;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NAME = 16389;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_SIMPLE_CASE_FOLDING = 16390;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_SIMPLE_LOWERCASE_MAPPING = 16391;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_SIMPLE_TITLECASE_MAPPING = 16392;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_SIMPLE_UPPERCASE_MAPPING = 16393;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_TITLECASE_MAPPING = 16394;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_UNICODE_1_NAME = 16395;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_UPPERCASE_MAPPING = 16396;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_BIDI_PAIRED_BRACKET = 16397;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_STRING_LIMIT = 16398;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_SCRIPT_EXTENSIONS = 28672;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_OTHER_PROPERTY_START = 28672;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_OTHER_PROPERTY_LIMIT = 28673;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_INVALID_CODE = -1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_UNASSIGNED = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_GENERAL_OTHER_TYPES = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_UPPERCASE_LETTER = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_LOWERCASE_LETTER = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_TITLECASE_LETTER = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_MODIFIER_LETTER = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_OTHER_LETTER = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_NON_SPACING_MARK = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_ENCLOSING_MARK = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_COMBINING_SPACING_MARK = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_LETTER_NUMBER = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_OTHER_NUMBER = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_SPACE_SEPARATOR = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_LINE_SEPARATOR = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_PARAGRAPH_SEPARATOR = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_CONTROL_CHAR = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_FORMAT_CHAR = 16;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_PRIVATE_USE_CHAR = 17;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_SURROGATE = 18;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_DASH_PUNCTUATION = 19;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_START_PUNCTUATION = 20;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_END_PUNCTUATION = 21;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_CONNECTOR_PUNCTUATION = 22;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_OTHER_PUNCTUATION = 23;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_MATH_SYMBOL = 24;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_CURRENCY_SYMBOL = 25;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_MODIFIER_SYMBOL = 26;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_OTHER_SYMBOL = 27;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_INITIAL_PUNCTUATION = 28;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_FINAL_PUNCTUATION = 29;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_CATEGORY_CHAR_CATEGORY_COUNT = 30;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_LEFT_TO_RIGHT = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_RIGHT_TO_LEFT = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_EUROPEAN_NUMBER = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_ARABIC_NUMBER = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_BLOCK_SEPARATOR = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_SEGMENT_SEPARATOR = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_WHITE_SPACE_NEUTRAL = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_OTHER_NEUTRAL = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT = 16;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_DIR_NON_SPACING_MARK = 17;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_BOUNDARY_NEUTRAL = 18;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_FIRST_STRONG_ISOLATE = 19;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE = 20;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE = 21;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE = 22;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_DIRECTION_CHAR_DIRECTION_COUNT = 23;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_NO_BLOCK = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BASIC_LATIN = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LATIN_1_SUPPLEMENT = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LATIN_EXTENDED_A = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LATIN_EXTENDED_B = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_IPA_EXTENSIONS = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SPACING_MODIFIER_LETTERS = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_GREEK = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CYRILLIC = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ARMENIAN = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_HEBREW = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ARABIC = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SYRIAC = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_THAANA = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_DEVANAGARI = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BENGALI = 16;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_GURMUKHI = 17;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_GUJARATI = 18;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ORIYA = 19;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TAMIL = 20;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TELUGU = 21;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_KANNADA = 22;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MALAYALAM = 23;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SINHALA = 24;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_THAI = 25;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LAO = 26;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TIBETAN = 27;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MYANMAR = 28;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_GEORGIAN = 29;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_HANGUL_JAMO = 30;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ETHIOPIC = 31;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CHEROKEE = 32;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS = 33;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_OGHAM = 34;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_RUNIC = 35;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_KHMER = 36;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MONGOLIAN = 37;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LATIN_EXTENDED_ADDITIONAL = 38;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_GREEK_EXTENDED = 39;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_GENERAL_PUNCTUATION = 40;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SUPERSCRIPTS_AND_SUBSCRIPTS = 41;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CURRENCY_SYMBOLS = 42;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_COMBINING_MARKS_FOR_SYMBOLS = 43;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LETTERLIKE_SYMBOLS = 44;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_NUMBER_FORMS = 45;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ARROWS = 46;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MATHEMATICAL_OPERATORS = 47;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MISCELLANEOUS_TECHNICAL = 48;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CONTROL_PICTURES = 49;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_OPTICAL_CHARACTER_RECOGNITION = 50;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ENCLOSED_ALPHANUMERICS = 51;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BOX_DRAWING = 52;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BLOCK_ELEMENTS = 53;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_GEOMETRIC_SHAPES = 54;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS = 55;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_DINGBATS = 56;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BRAILLE_PATTERNS = 57;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_RADICALS_SUPPLEMENT = 58;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_KANGXI_RADICALS = 59;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_IDEOGRAPHIC_DESCRIPTION_CHARACTERS = 60;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_SYMBOLS_AND_PUNCTUATION = 61;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_HIRAGANA = 62;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_KATAKANA = 63;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BOPOMOFO = 64;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_HANGUL_COMPATIBILITY_JAMO = 65;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_KANBUN = 66;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BOPOMOFO_EXTENDED = 67;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ENCLOSED_CJK_LETTERS_AND_MONTHS = 68;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_COMPATIBILITY = 69;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A = 70;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS = 71;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_YI_SYLLABLES = 72;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_YI_RADICALS = 73;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_HANGUL_SYLLABLES = 74;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_HIGH_SURROGATES = 75;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_HIGH_PRIVATE_USE_SURROGATES = 76;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LOW_SURROGATES = 77;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_PRIVATE_USE_AREA = 78;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_PRIVATE_USE = 78;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS = 79;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ALPHABETIC_PRESENTATION_FORMS = 80;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_A = 81;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_COMBINING_HALF_MARKS = 82;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_COMPATIBILITY_FORMS = 83;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SMALL_FORM_VARIANTS = 84;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_B = 85;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SPECIALS = 86;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_HALFWIDTH_AND_FULLWIDTH_FORMS = 87;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_OLD_ITALIC = 88;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_GOTHIC = 89;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_DESERET = 90;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BYZANTINE_MUSICAL_SYMBOLS = 91;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MUSICAL_SYMBOLS = 92;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MATHEMATICAL_ALPHANUMERIC_SYMBOLS = 93;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B = 94;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT = 95;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TAGS = 96;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CYRILLIC_SUPPLEMENT = 97;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CYRILLIC_SUPPLEMENTARY = 97;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TAGALOG = 98;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_HANUNOO = 99;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BUHID = 100;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TAGBANWA = 101;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A = 102;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SUPPLEMENTAL_ARROWS_A = 103;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SUPPLEMENTAL_ARROWS_B = 104;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B = 105;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SUPPLEMENTAL_MATHEMATICAL_OPERATORS = 106;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_KATAKANA_PHONETIC_EXTENSIONS = 107;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_VARIATION_SELECTORS = 108;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_A = 109;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_B = 110;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LIMBU = 111;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TAI_LE = 112;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_KHMER_SYMBOLS = 113;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_PHONETIC_EXTENSIONS = 114;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_ARROWS = 115;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_YIJING_HEXAGRAM_SYMBOLS = 116;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LINEAR_B_SYLLABARY = 117;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LINEAR_B_IDEOGRAMS = 118;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_AEGEAN_NUMBERS = 119;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_UGARITIC = 120;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SHAVIAN = 121;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_OSMANYA = 122;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CYPRIOT_SYLLABARY = 123;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TAI_XUAN_JING_SYMBOLS = 124;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_VARIATION_SELECTORS_SUPPLEMENT = 125;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ANCIENT_GREEK_MUSICAL_NOTATION = 126;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ANCIENT_GREEK_NUMBERS = 127;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ARABIC_SUPPLEMENT = 128;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BUGINESE = 129;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_STROKES = 130;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_SUPPLEMENT = 131;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_COPTIC = 132;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ETHIOPIC_EXTENDED = 133;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ETHIOPIC_SUPPLEMENT = 134;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_GEORGIAN_SUPPLEMENT = 135;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_GLAGOLITIC = 136;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_KHAROSHTHI = 137;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MODIFIER_TONE_LETTERS = 138;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_NEW_TAI_LUE = 139;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_OLD_PERSIAN = 140;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_PHONETIC_EXTENSIONS_SUPPLEMENT = 141;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SUPPLEMENTAL_PUNCTUATION = 142;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SYLOTI_NAGRI = 143;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TIFINAGH = 144;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_VERTICAL_FORMS = 145;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_NKO = 146;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BALINESE = 147;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LATIN_EXTENDED_C = 148;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LATIN_EXTENDED_D = 149;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_PHAGS_PA = 150;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_PHOENICIAN = 151;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CUNEIFORM = 152;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CUNEIFORM_NUMBERS_AND_PUNCTUATION = 153;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_COUNTING_ROD_NUMERALS = 154;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SUNDANESE = 155;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LEPCHA = 156;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_OL_CHIKI = 157;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CYRILLIC_EXTENDED_A = 158;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_VAI = 159;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CYRILLIC_EXTENDED_B = 160;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SAURASHTRA = 161;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_KAYAH_LI = 162;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_REJANG = 163;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CHAM = 164;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ANCIENT_SYMBOLS = 165;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_PHAISTOS_DISC = 166;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LYCIAN = 167;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CARIAN = 168;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LYDIAN = 169;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MAHJONG_TILES = 170;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_DOMINO_TILES = 171;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SAMARITAN = 172;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED = 173;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TAI_THAM = 174;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_VEDIC_EXTENSIONS = 175;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_LISU = 176;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BAMUM = 177;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_COMMON_INDIC_NUMBER_FORMS = 178;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_DEVANAGARI_EXTENDED = 179;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_HANGUL_JAMO_EXTENDED_A = 180;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_JAVANESE = 181;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MYANMAR_EXTENDED_A = 182;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TAI_VIET = 183;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MEETEI_MAYEK = 184;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_HANGUL_JAMO_EXTENDED_B = 185;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_IMPERIAL_ARAMAIC = 186;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_OLD_SOUTH_ARABIAN = 187;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_AVESTAN = 188;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_INSCRIPTIONAL_PARTHIAN = 189;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_INSCRIPTIONAL_PAHLAVI = 190;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_OLD_TURKIC = 191;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_RUMI_NUMERAL_SYMBOLS = 192;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_KAITHI = 193;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_EGYPTIAN_HIEROGLYPHS = 194;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ENCLOSED_ALPHANUMERIC_SUPPLEMENT = 195;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ENCLOSED_IDEOGRAPHIC_SUPPLEMENT = 196;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C = 197;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MANDAIC = 198;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BATAK = 199;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ETHIOPIC_EXTENDED_A = 200;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BRAHMI = 201;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_BAMUM_SUPPLEMENT = 202;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_KANA_SUPPLEMENT = 203;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_PLAYING_CARDS = 204;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS = 205;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_EMOTICONS = 206;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TRANSPORT_AND_MAP_SYMBOLS = 207;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ALCHEMICAL_SYMBOLS = 208;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D = 209;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ARABIC_EXTENDED_A = 210;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS = 211;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_CHAKMA = 212;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MEETEI_MAYEK_EXTENSIONS = 213;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MEROITIC_CURSIVE = 214;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MEROITIC_HIEROGLYPHS = 215;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_MIAO = 216;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SHARADA = 217;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SORA_SOMPENG = 218;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_SUNDANESE_SUPPLEMENT = 219;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_TAKRI = 220;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_COUNT = 221;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BLOCK_CODE_INVALID_CODE = -1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BPT_NONE = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BPT_OPEN = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BPT_CLOSE = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const BPT_COUNT = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const EA_NEUTRAL = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const EA_AMBIGUOUS = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const EA_HALFWIDTH = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const EA_FULLWIDTH = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const EA_NARROW = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const EA_WIDE = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const EA_COUNT = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const UNICODE_CHAR_NAME = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const UNICODE_10_CHAR_NAME = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const EXTENDED_CHAR_NAME = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_NAME_ALIAS = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const CHAR_NAME_CHOICE_COUNT = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SHORT_PROPERTY_NAME = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LONG_PROPERTY_NAME = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const PROPERTY_NAME_CHOICE_COUNT = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_NONE = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_CANONICAL = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_COMPAT = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_CIRCLE = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_FINAL = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_FONT = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_FRACTION = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_INITIAL = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_ISOLATED = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_MEDIAL = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_NARROW = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_NOBREAK = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_SMALL = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_SQUARE = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_SUB = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_SUPER = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_VERTICAL = 16;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_WIDE = 17;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const DT_COUNT = 18;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JT_NON_JOINING = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JT_JOIN_CAUSING = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JT_DUAL_JOINING = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JT_LEFT_JOINING = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JT_RIGHT_JOINING = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JT_TRANSPARENT = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JT_COUNT = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_NO_JOINING_GROUP = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_AIN = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_ALAPH = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_ALEF = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_BEH = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_BETH = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_DAL = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_DALATH_RISH = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_E = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_FEH = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_FINAL_SEMKATH = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_GAF = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_GAMAL = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_HAH = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_TEH_MARBUTA_GOAL = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_HAMZA_ON_HEH_GOAL = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_HE = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_HEH = 16;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_HEH_GOAL = 17;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_HETH = 18;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_KAF = 19;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_KAPH = 20;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_KNOTTED_HEH = 21;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_LAM = 22;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_LAMADH = 23;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_MEEM = 24;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_MIM = 25;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_NOON = 26;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_NUN = 27;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_PE = 28;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_QAF = 29;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_QAPH = 30;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_REH = 31;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_REVERSED_PE = 32;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_SAD = 33;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_SADHE = 34;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_SEEN = 35;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_SEMKATH = 36;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_SHIN = 37;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_SWASH_KAF = 38;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_SYRIAC_WAW = 39;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_TAH = 40;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_TAW = 41;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_TEH_MARBUTA = 42;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_TETH = 43;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_WAW = 44;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_YEH = 45;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_YEH_BARREE = 46;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_YEH_WITH_TAIL = 47;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_YUDH = 48;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_YUDH_HE = 49;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_ZAIN = 50;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_FE = 51;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_KHAPH = 52;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_ZHAIN = 53;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_BURUSHASKI_YEH_BARREE = 54;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_FARSI_YEH = 55;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_NYA = 56;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_ROHINGYA_YEH = 57;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const JG_COUNT = 58;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_OTHER = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_CONTROL = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_CR = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_EXTEND = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_L = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_LF = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_LV = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_LVT = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_T = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_V = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_SPACING_MARK = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_PREPEND = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_REGIONAL_INDICATOR = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const GCB_COUNT = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_OTHER = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_ALETTER = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_FORMAT = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_KATAKANA = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_MIDLETTER = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_MIDNUM = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_NUMERIC = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_EXTENDNUMLET = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_CR = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_EXTEND = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_LF = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_MIDNUMLET = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_NEWLINE = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_REGIONAL_INDICATOR = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_HEBREW_LETTER = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_SINGLE_QUOTE = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_DOUBLE_QUOTE = 16;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const WB_COUNT = 17;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_OTHER = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_ATERM = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_CLOSE = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_FORMAT = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_LOWER = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_NUMERIC = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_OLETTER = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_SEP = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_SP = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_STERM = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_UPPER = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_CR = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_EXTEND = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_LF = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_SCONTINUE = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const SB_COUNT = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_UNKNOWN = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_AMBIGUOUS = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_ALPHABETIC = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_BREAK_BOTH = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_BREAK_AFTER = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_BREAK_BEFORE = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_MANDATORY_BREAK = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_CONTINGENT_BREAK = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_CLOSE_PUNCTUATION = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_COMBINING_MARK = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_CARRIAGE_RETURN = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_EXCLAMATION = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_GLUE = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_HYPHEN = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_IDEOGRAPHIC = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_INSEPARABLE = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_INSEPERABLE = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_INFIX_NUMERIC = 16;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_LINE_FEED = 17;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_NONSTARTER = 18;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_NUMERIC = 19;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_OPEN_PUNCTUATION = 20;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_POSTFIX_NUMERIC = 21;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_PREFIX_NUMERIC = 22;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_QUOTATION = 23;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_COMPLEX_CONTEXT = 24;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_SURROGATE = 25;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_SPACE = 26;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_BREAK_SYMBOLS = 27;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_ZWSPACE = 28;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_NEXT_LINE = 29;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_WORD_JOINER = 30;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_H2 = 31;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_H3 = 32;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_JL = 33;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_JT = 34;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_JV = 35;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_CLOSE_PARENTHESIS = 36;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_CONDITIONAL_JAPANESE_STARTER = 37;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_HEBREW_LETTER = 38;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_REGIONAL_INDICATOR = 39;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const LB_COUNT = 40;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const NT_NONE = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const NT_DECIMAL = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const NT_DIGIT = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const NT_NUMERIC = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const NT_COUNT = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const HST_NOT_APPLICABLE = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const HST_LEADING_JAMO = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const HST_VOWEL_JAMO = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const HST_TRAILING_JAMO = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const HST_LV_SYLLABLE = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const HST_LVT_SYLLABLE = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlchar.php
	 */
	const HST_COUNT = 6;

	/**
	 * Get the "age" of the code point
	 * <p>Gets the "age" of the code point.</p><p>The "age" is the Unicode version when the code point was first designated (as a non-character or for Private Use) or assigned a character. This can be useful to avoid emitting code points to receiving processes that do not accept newer characters.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return array <p>The Unicode version number, as an <code>array</code>. For example, version <i>1.3.31.2</i> would be represented as <i>[1, 3, 31, 2]</i>.</p>
	 * @link http://php.net/manual/ja/intlchar.charage.php
	 * @see IntlChar::getUnicodeVersion(), IntlChar::getIntPropertyMinValue(), IntlChar::getIntPropertyValue()
	 * @since PHP 7
	 */
	public static function charAge($codepoint): array {}

	/**
	 * Get the decimal digit value of a decimal digit character
	 * <p>Returns the decimal digit value of a decimal digit character.</p><p>Such characters have the general category "Nd" (decimal digit numbers) and a Numeric_Type of Decimal.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return int <p>The decimal digit value of <code>codepoint</code>, or <i>-1</i> if it is not a decimal digit character.</p>
	 * @link http://php.net/manual/ja/intlchar.chardigitvalue.php
	 * @see IntlChar::getNumericValue()
	 * @since PHP 7
	 */
	public static function charDigitValue($codepoint): int {}

	/**
	 * Get bidirectional category value for a code point
	 * <p>Returns the bidirectional category value for the code point, which is used in the » Unicode bidirectional algorithm (UAX #9).</p><p><b>注意</b>:</p><p>Some unassigned code points have bidi values of R or AL because they are in blocks that are reserved for Right-To-Left scripts.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return int <p>The bidirectional category value; one of the following constants:</p><ul> <li><b><code>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_ARABIC_NUMBER</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_BLOCK_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_SEGMENT_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_WHITE_SPACE_NEUTRAL</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_OTHER_NEUTRAL</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_DIR_NON_SPACING_MARK</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_BOUNDARY_NEUTRAL</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_FIRST_STRONG_ISOLATE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE</code></b></li> <li><b><code>IntlChar::CHAR_DIRECTION_CHAR_DIRECTION_COUNT</code></b></li> </ul>
	 * @link http://php.net/manual/ja/intlchar.chardirection.php
	 * @since PHP 7
	 */
	public static function charDirection($codepoint): int {}

	/**
	 * Find Unicode character by name and return its code point value
	 * <p>Finds a Unicode character by its name and returns its code point value.</p><p>The name is matched exactly and completely. If the name does not correspond to a code point, <b><code>FALSE</code></b> is returned.</p><p>A Unicode 1.0 name is matched only if it differs from the modern name. Unicode names are all uppercase. Extended names are lowercase followed by an uppercase hexadecimal number, and within angle brackets.</p>
	 * @param string $characterName <p>Full name of the Unicode character.</p>
	 * @param int $nameChoice <p>Which set of names to use for the lookup. Can be any of these constants:</p><ul> <li> <b><code>IntlChar::UNICODE_CHAR_NAME</code></b> (default)</li> <li><b><code>IntlChar::UNICODE_10_CHAR_NAME</code></b></li> <li><b><code>IntlChar::EXTENDED_CHAR_NAME</code></b></li> <li><b><code>IntlChar::CHAR_NAME_ALIAS</code></b></li> <li><b><code>IntlChar::CHAR_NAME_CHOICE_COUNT</code></b></li> </ul>
	 * @return int <p>The Unicode value of the code point with the given name (as an <code>integer</code>), or <b><code>FALSE</code></b> if there is no such code point.</p>
	 * @link http://php.net/manual/ja/intlchar.charfromname.php
	 * @see IntlChar::charName(), IntlChar::enumCharNames()
	 * @since PHP 7
	 */
	public static function charFromName(string $characterName, int $nameChoice = IntlChar::UNICODE_CHAR_NAME): int {}

	/**
	 * Get the "mirror-image" character for a code point
	 * <p>Maps the specified character to a "mirror-image" character.</p><p>For characters with the <i>Bidi_Mirrored</i> property, implementations sometimes need a "poor man's" mapping to another Unicode character (code point) such that the default glyph may serve as the mirror-image of the default glyph of the specified character. This is useful for text conversion to and from codepages with visual order, and for displays without glyph selection capabilities.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return mixed <p>Returns another Unicode code point that may serve as a mirror-image substitute, or <code>codepoint</code> itself if there is no such mapping or <code>codepoint</code> does not have the <i>Bidi_Mirrored</i> property.</p><p>戻り値の型は <code>integer</code> になります。ただし、コードポイントを UTF-8 文字列で渡した場合は別で、その場合の返り値の型は文字列になります。</p>
	 * @link http://php.net/manual/ja/intlchar.charmirror.php
	 * @see IntlChar::isMirrored()
	 * @since PHP 7
	 */
	public static function charMirror($codepoint) {}

	/**
	 * Retrieve the name of a Unicode character
	 * <p>Retrieves the name of a Unicode character.</p><p>Depending on <code>nameChoice</code>, the resulting character name is the "modern" name or the name that was defined in Unicode version 1.0. The name contains only "invariant" characters like A-Z, 0-9, space, and '-'. Unicode 1.0 names are only retrieved if they are different from the modern names and if ICU contains the data for them.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @param int $nameChoice <p>Which set of names to use for the lookup. Can be any of these constants:</p><ul> <li> <b><code>IntlChar::UNICODE_CHAR_NAME</code></b> (default)</li> <li><b><code>IntlChar::UNICODE_10_CHAR_NAME</code></b></li> <li><b><code>IntlChar::EXTENDED_CHAR_NAME</code></b></li> <li><b><code>IntlChar::CHAR_NAME_ALIAS</code></b></li> <li><b><code>IntlChar::CHAR_NAME_CHOICE_COUNT</code></b></li> </ul>
	 * @return string <p>The corresponding name, or an empty string if there is no name for this character.</p>
	 * @link http://php.net/manual/ja/intlchar.charname.php
	 * @see IntlChar::charFromName(), IntlChar::enumCharNames()
	 * @since PHP 7
	 */
	public static function charName($codepoint, int $nameChoice = IntlChar::UNICODE_CHAR_NAME): string {}

	/**
	 * Get the general category value for a code point
	 * <p>Returns the general category value for the code point.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return int <p>Returns the general category type, which may be one of the following constants:</p><ul> <li><b><code>IntlChar::CHAR_CATEGORY_UNASSIGNED</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_GENERAL_OTHER_TYPES</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_UPPERCASE_LETTER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_LOWERCASE_LETTER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_TITLECASE_LETTER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_MODIFIER_LETTER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_OTHER_LETTER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_NON_SPACING_MARK</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_ENCLOSING_MARK</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_COMBINING_SPACING_MARK</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_LETTER_NUMBER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_OTHER_NUMBER</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_SPACE_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_LINE_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_PARAGRAPH_SEPARATOR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_CONTROL_CHAR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_FORMAT_CHAR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_PRIVATE_USE_CHAR</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_SURROGATE</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_DASH_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_START_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_END_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_CONNECTOR_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_OTHER_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_MATH_SYMBOL</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_CURRENCY_SYMBOL</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_MODIFIER_SYMBOL</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_OTHER_SYMBOL</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_INITIAL_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_FINAL_PUNCTUATION</code></b></li> <li><b><code>IntlChar::CHAR_CATEGORY_CHAR_CATEGORY_COUNT</code></b></li> </ul>
	 * @link http://php.net/manual/ja/intlchar.chartype.php
	 * @since PHP 7
	 */
	public static function charType($codepoint): int {}

	/**
	 * Return Unicode character by code point value
	 * <p>Returns a string containing the character specified by the Unicode code point value.</p><p>This function compliments <code>IntlChar::ord()</code>.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return string <p>A string containing the single character specified by the Unicode code point value.</p>
	 * @link http://php.net/manual/ja/intlchar.chr.php
	 * @see IntlChar::ord(), chr()
	 * @since PHP 7
	 */
	public static function chr($codepoint): string {}

	/**
	 * Get the decimal digit value of a code point for a given radix
	 * <p>Returns the decimal digit value of the code point in the specified radix.</p><p>If the radix is not in the range <i>2&lt;=radix&lt;=36</i> or if the value of <code>codepoint</code> is not a valid digit in the specified radix, <b><code>FALSE</code></b> is returned. A character is a valid digit if at least one of the following is true:</p>
	 * @param string $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @param int $radix <p>The radix (defaults to <i>10</i>).</p>
	 * @return int <p>Returns the numeric value represented by the character in the specified radix, or <b><code>FALSE</code></b> if there is no value or if the value exceeds the radix.</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
	 * @link http://php.net/manual/ja/intlchar.digit.php
	 * @see IntlChar::forDigit(), IntlChar::charDigitValue(), IntlChar::isdigit()
	 * @since PHP 7
	 */
	public static function digit(string $codepoint, int $radix = 10): int {}

	/**
	 * Enumerate all assigned Unicode characters within a range
	 * <p>Enumerate all assigned Unicode characters between the start and limit code points (start inclusive, limit exclusive) and call a function for each, passing the code point value and the character name.</p><p>For Unicode 1.0 names, only those are enumerated that differ from the modern names.</p>
	 * @param mixed $start <p>The first code point in the enumeration range.</p>
	 * @param mixed $limit <p>One more than the last code point in the enumeration range (the first one after the range).</p>
	 * @param callable $callback <p>The function that is to be called for each character name. The following three arguments will be passed into it:</p><ul> <li> <code>integer</code> <i>$codepoint</i> - The numeric code point value</li> <li> <code>integer</code> <i>$nameChoice</i> - The same value as the <code>nameChoice</code> parameter below</li> <li> <code>string</code> <i>$name</i> - The name of the character</li> </ul>
	 * @param int $nameChoice <p>Selector for which kind of names to enumerate. Can be any of these constants:</p><ul> <li> <b><code>IntlChar::UNICODE_CHAR_NAME</code></b> (default)</li> <li><b><code>IntlChar::UNICODE_10_CHAR_NAME</code></b></li> <li><b><code>IntlChar::EXTENDED_CHAR_NAME</code></b></li> <li><b><code>IntlChar::CHAR_NAME_ALIAS</code></b></li> <li><b><code>IntlChar::CHAR_NAME_CHOICE_COUNT</code></b></li> </ul>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/intlchar.enumcharnames.php
	 * @see IntlChar::charName(), IntlChar::charFromName()
	 * @since PHP 7
	 */
	public static function enumCharNames($start, $limit, callable $callback, int $nameChoice = IntlChar::UNICODE_CHAR_NAME): void {}

	/**
	 * Enumerate all code points with their Unicode general categories
	 * <p>Enumerates efficiently all code points with their Unicode general categories. This is useful for building data structures, for enumerating all assigned code points, etc.</p><p>For each contiguous range of code points with a given general category ("character type"), the <code>callback</code> function is called. Adjacent ranges have different types. The Unicode Standard guarantees that the numeric value of the type is 0..31.</p>
	 * @param callable $callback <p>The function that is to be called for each contiguous range of code points with the same general category. The following three arguments will be passed into it:</p><ul> <li> <code>integer</code> <i>$start</i> - The starting code point of the range</li> <li> <code>integer</code> <i>$end</i> - The ending code point of the range</li> <li> <code>integer</code> <i>$name</i> - The category type (one of the <i>IntlChar::CHAR_CATEGORY_&#42;</i> constants)</li> </ul>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/intlchar.enumchartypes.php
	 * @since PHP 7
	 */
	public static function enumCharTypes(callable $callback): void {}

	/**
	 * Perform case folding on a code point
	 * <p>The given character is mapped to its case folding equivalent; if the character has no case folding equivalent, the character itself is returned.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @param int $options <p>Either <b><code>IntlChar::FOLD_CASE_DEFAULT</code></b> (default) or <b><code>IntlChar::FOLD_CASE_EXCLUDE_SPECIAL_I</code></b>.</p>
	 * @return mixed <p>Returns the <i>Simple_Case_Folding</i> of the code point, if any; otherwise the code point itself.</p>
	 * @link http://php.net/manual/ja/intlchar.foldcase.php
	 * @since PHP 7
	 */
	public static function foldCase($codepoint, int $options = IntlChar::FOLD_CASE_DEFAULT) {}

	/**
	 * Get character representation for a given digit and radix
	 * <p>Determines the character representation for a specific digit in the specified radix.</p><p>If the value of radix is not a valid radix, or the value of digit is not a valid digit in the specified radix, the null character (<i>U+0000</i>) is returned.</p><p>The radix argument is valid if it is greater than or equal to <i>2</i> and less than or equal to <i>36</i>. The digit argument is valid if <i>0 &lt;= digit &lt; radix</i>.</p><p>If the digit is less than <i>10</i>, then '0' + digit is returned. Otherwise, the value 'a' + digit - 10 is returned.</p>
	 * @param int $digit <p>The number to convert to a character.</p>
	 * @param int $radix <p>The radix (defaults to <i>10</i>).</p>
	 * @return int <p>The character representation (as a <code>string</code>) of the specified digit in the specified radix.</p>
	 * @link http://php.net/manual/ja/intlchar.fordigit.php
	 * @see IntlChar::digit(), IntlChar::charDigitValue(), IntlChar::isdigit()
	 * @since PHP 7
	 */
	public static function forDigit(int $digit, int $radix = 10): int {}

	/**
	 * Get the paired bracket character for a code point
	 * <p>Maps the specified character to its paired bracket character.</p><p>For <i>Bidi_Paired_Bracket_Type!=None</i>, this is the same as <code>IntlChar::charMirror()</code>. Otherwise <code>codepoint</code> itself is returned.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return mixed <p>Returns the paired bracket code point, or <code>codepoint</code> itself if there is no such mapping.</p><p>戻り値の型は <code>integer</code> になります。ただし、コードポイントを UTF-8 文字列で渡した場合は別で、その場合の返り値の型は文字列になります。</p>
	 * @link http://php.net/manual/ja/intlchar.getbidipairedbracket.php
	 * @see IntlChar::charMirror()
	 * @since PHP 7
	 */
	public static function getBidiPairedBracket($codepoint) {}

	/**
	 * Get the Unicode allocation block containing a code point
	 * <p>Returns the Unicode allocation block that contains the character.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return int <p>Returns the block value for <code>codepoint</code>. See the <i>IntlChar::BLOCK_CODE_&#42;</i> constants for possible return values.</p>
	 * @link http://php.net/manual/ja/intlchar.getblockcode.php
	 * @since PHP 7
	 */
	public static function getBlockCode($codepoint): int {}

	/**
	 * Get the combining class of a code point
	 * <p>Returns the combining class of the code point.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return int <p>Returns the combining class of the character.</p>
	 * @link http://php.net/manual/ja/intlchar.getcombiningclass.php
	 * @since PHP 7
	 */
	public static function getCombiningClass($codepoint): int {}

	/**
	 * Get the FC_NFKC_Closure property for a code point
	 * <p>Gets the FC_NFKC_Closure property string for a character.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return string <p>Returns the FC_NFKC_Closure property string for the <code>codepoint</code>, or an empty string if there is none.</p>
	 * @link http://php.net/manual/ja/intlchar.getfc-nfkc-closure.php
	 * @since PHP 7
	 */
	public static function getFC_NFKC_Closure($codepoint): string {}

	/**
	 * Get the max value for a Unicode property
	 * <p>Gets the maximum value for an enumerated/integer/binary Unicode property.</p>
	 * @param int $property <p>調べたい Unicode プロパティ (定数 <i>IntlChar::PROPERTY_&#42;</i> を参照ください)。</p>
	 * @return int <p>The maximum value returned by <code>IntlChar::getIntPropertyValue()</code> for a Unicode property. <i>&lt;=0</i> if the property selector is out of range.</p>
	 * @link http://php.net/manual/ja/intlchar.getintpropertymaxvalue.php
	 * @see IntlChar::hasBinaryProperty(), IntlChar::getIntPropertyMinValue(), IntlChar::getIntPropertyValue(), IntlChar::getUnicodeVersion()
	 * @since PHP 7
	 */
	public static function getIntPropertyMaxValue(int $property): int {}

	/**
	 * Get the min value for a Unicode property
	 * <p>Gets the minimum value for an enumerated/integer/binary Unicode property.</p>
	 * @param int $property <p>調べたい Unicode プロパティ (定数 <i>IntlChar::PROPERTY_&#42;</i> を参照ください)。</p>
	 * @return int <p>The minimum value returned by <code>IntlChar::getIntPropertyValue()</code> for a Unicode property. <i>0</i> if the property selector is out of range.</p>
	 * @link http://php.net/manual/ja/intlchar.getintpropertyminvalue.php
	 * @see IntlChar::hasBinaryProperty(), IntlChar::getIntPropertyMaxValue(), IntlChar::getIntPropertyValue(), IntlChar::getUnicodeVersion()
	 * @since PHP 7
	 */
	public static function getIntPropertyMinValue(int $property): int {}

	/**
	 * Get the value for a Unicode property for a code point
	 * <p>Gets the property value for an enumerated or integer Unicode property for a code point. Also returns binary and mask property values.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @param int $property <p>調べたい Unicode プロパティ (定数 <i>IntlChar::PROPERTY_&#42;</i> を参照ください)。</p>
	 * @return int <p>Returns the numeric value that is directly the property value or, for enumerated properties, corresponds to the numeric value of the enumerated constant of the respective property value enumeration type.</p><p>Returns <i>0</i> or <i>1</i> (for <b><code>FALSE</code></b>/<b><code>TRUE</code></b>) for binary Unicode properties.</p><p>Returns a bit-mask for mask properties.</p><p>Returns <i>0</i> if <code>property</code> is out of bounds or if the Unicode version does not have data for the property at all, or not for this code point.</p>
	 * @link http://php.net/manual/ja/intlchar.getintpropertyvalue.php
	 * @see IntlChar::hasBinaryProperty(), IntlChar::getIntPropertyMinValue(), IntlChar::getIntPropertyMaxValue(), IntlChar::getUnicodeVersion()
	 * @since PHP 7
	 */
	public static function getIntPropertyValue($codepoint, int $property): int {}

	/**
	 * Get the numeric value for a Unicode code point
	 * <p>Gets the numeric value for a Unicode code point as defined in the Unicode Character Database.</p><p>For characters without any numeric values in the Unicode Character Database, this function will return <b><code>IntlChar::NO_NUMERIC_VALUE</code></b>.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return float <p>Numeric value of <code>codepoint</code>, or <b><code>IntlChar::NO_NUMERIC_VALUE</code></b> if none is defined. This constant was added in PHP 7.0.6, prior to this version the literal value (<code>float</code>)<i>-123456789</i> may be used instead.</p>
	 * @link http://php.net/manual/ja/intlchar.getnumericvalue.php
	 * @since PHP 7
	 */
	public static function getNumericValue($codepoint): float {}

	/**
	 * Get the property constant value for a given property name
	 * <p>Returns the property constant value for a given property name, as specified in the Unicode database file PropertyAliases.txt. Short, long, and any other variants are recognized.</p><p>In addition, this function maps the synthetic names "gcm" / "General_Category_Mask" to the property <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY_MASK</code></b>. These names are not in PropertyAliases.txt.</p><p>This function compliments <code>IntlChar::getPropertyName()</code>.</p>
	 * @param string $alias <p>The property name to be matched. The name is compared using "loose matching" as described in PropertyAliases.txt.</p>
	 * @return int <p>Returns an <i>IntlChar::PROPERTY_</i> constant value, or <b><code>IntlChar::PROPERTY_INVALID_CODE</code></b> if the given name does not match any property.</p>
	 * @link http://php.net/manual/ja/intlchar.getpropertyenum.php
	 * @see IntlChar::getPropertyName()
	 * @since PHP 7
	 */
	public static function getPropertyEnum(string $alias): int {}

	/**
	 * Get the Unicode name for a property
	 * <p>Returns the Unicode name for a given property, as given in the Unicode database file PropertyAliases.txt.</p><p>In addition, this function maps the property <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY_MASK</code></b> to the synthetic names "gcm" / "General_Category_Mask". These names are not in PropertyAliases.txt.</p><p>This function compliments <code>IntlChar::getPropertyEnum()</code>.</p>
	 * @param int $property <p>調べたい Unicode プロパティ (定数 <i>IntlChar::PROPERTY_&#42;</i> を参照ください)。</p> <p><b><code>IntlChar::PROPERTY_INVALID_CODE</code></b> should not be used. Also, if <code>property</code> is out of range, <b><code>FALSE</code></b> is returned.</p>
	 * @param int $nameChoice <p>Selector for which name to get. If out of range, <b><code>FALSE</code></b> is returned.</p> <p>All properties have a long name. Most have a short name, but some do not. Unicode allows for additional names; if present these will be returned by adding 1, 2, etc. to <b><code>IntlChar::LONG_PROPERTY_NAME</code></b>.</p>
	 * @return string <p>Returns the name, or <b><code>FALSE</code></b> if either the <code>property</code> or the <code>nameChoice</code> is out of range.</p><p>If a given <code>nameChoice</code> returns <b><code>FALSE</code></b>, then all larger values of <code>nameChoice</code> will return <b><code>FALSE</code></b>, with one exception: if <b><code>FALSE</code></b> is returned for <b><code>IntlChar::SHORT_PROPERTY_NAME</code></b>, then <b><code>IntlChar::LONG_PROPERTY_NAME</code></b> (and higher) may still return a non-<b><code>FALSE</code></b> value.</p>
	 * @link http://php.net/manual/ja/intlchar.getpropertyname.php
	 * @see IntlChar::getPropertyEnum()
	 * @since PHP 7
	 */
	public static function getPropertyName(int $property, int $nameChoice = IntlChar::LONG_PROPERTY_NAME): string {}

	/**
	 * Get the property value for a given value name
	 * <p>Returns the property value integer for a given value name, as specified in the Unicode database file PropertyValueAliases.txt. Short, long, and any other variants are recognized.</p><p><b>注意</b>:</p><p>Some of the names in PropertyValueAliases.txt will only be recognized with <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY_MASK</code></b>, not <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY</code></b>. These include:</p>
	 * @param int $property <p>調べたい Unicode プロパティ (定数 <i>IntlChar::PROPERTY_&#42;</i> を参照ください)。</p> <p>If out of range, or this method doesn't work with the given value, <b><code>IntlChar::PROPERTY_INVALID_CODE</code></b> is returned.</p>
	 * @param string $name <p>The value name to be matched. The name is compared using "loose matching" as described in PropertyValueAliases.txt.</p>
	 * @return int <p>Returns the corresponding value integer, or <b><code>IntlChar::PROPERTY_INVALID_CODE</code></b> if the given name does not match any value of the given property, or if the property is invalid.</p>
	 * @link http://php.net/manual/ja/intlchar.getpropertyvalueenum.php
	 * @since PHP 7
	 */
	public static function getPropertyValueEnum(int $property, string $name): int {}

	/**
	 * Get the Unicode name for a property value
	 * <p>Returns the Unicode name for a given property value, as given in the Unicode database file PropertyValueAliases.txt.</p><p><b>注意</b>:</p><p>Some of the names in PropertyValueAliases.txt can only be retrieved using <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY_MASK</code></b>, not <b><code>IntlChar::PROPERTY_GENERAL_CATEGORY</code></b>. These include:</p>
	 * @param int $property <p>調べたい Unicode プロパティ (定数 <i>IntlChar::PROPERTY_&#42;</i> を参照ください)。</p> <p>If out of range, or this method doesn't work with the given value, <b><code>FALSE</code></b> is returned.</p>
	 * @param int $value <p>Selector for a value for the given property. If out of range, <b><code>FALSE</code></b> is returned.</p> <p>In general, valid values range from <i>0</i> up to some maximum. There are a couple exceptions:</p><ul> <li> <b><code>IntlChar::PROPERTY_BLOCK</code></b> values begin at the non-zero value <b><code>IntlChar::BLOCK_CODE_BASIC_LATIN</code></b> </li> <li> <b><code>IntlChar::PROPERTY_CANONICAL_COMBINING_CLASS</code></b> values are not contiguous and range from 0..240. </li> </ul>
	 * @param int $nameChoice <p>Selector for which name to get. If out of range, <b><code>FALSE</code></b> is returned.</p> <p>All values have a long name. Most have a short name, but some do not. Unicode allows for additional names; if present these will be returned by adding 1, 2, etc. to <b><code>IntlChar::LONG_PROPERTY_NAME</code></b>.</p>
	 * @return string <p>Returns the name, or <b><code>FALSE</code></b> if either the <code>property</code> or the <code>nameChoice</code> is out of range.</p><p>If a given <code>nameChoice</code> returns <b><code>FALSE</code></b>, then all larger values of <code>nameChoice</code> will return <b><code>FALSE</code></b>, with one exception: if <b><code>FALSE</code></b> is returned for <b><code>IntlChar::SHORT_PROPERTY_NAME</code></b>, then <b><code>IntlChar::LONG_PROPERTY_NAME</code></b> (and higher) may still return a non-<b><code>FALSE</code></b> value.</p>
	 * @link http://php.net/manual/ja/intlchar.getpropertyvaluename.php
	 * @since PHP 7
	 */
	public static function getPropertyValueName(int $property, int $value, int $nameChoice = IntlChar::LONG_PROPERTY_NAME): string {}

	/**
	 * Get the Unicode version
	 * <p>Gets the Unicode version information.</p><p>The version array is filled in with the version information for the Unicode standard that is currently used by ICU. For example, Unicode version 3.1.1 is represented as an array with the values <i>[3, 1, 1, 0]</i>.</p>
	 * @return array <p>An array containing the Unicode version number.</p>
	 * @link http://php.net/manual/ja/intlchar.getunicodeversion.php
	 * @see IntlChar::charAge()
	 * @since PHP 7
	 */
	public static function getUnicodeVersion(): array {}

	/**
	 * Check a binary Unicode property for a code point
	 * <p>Checks a binary Unicode property for a code point.</p><p>Unicode, especially in version 3.2, defines many more properties than the original set in UnicodeData.txt.</p><p>The properties APIs are intended to reflect Unicode properties as defined in the Unicode Character Database (UCD) and Unicode Technical Reports (UTR). For details about the properties see » http://www.unicode.org/ucd/. For names of Unicode properties see the UCD file PropertyAliases.txt.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @param int $property <p>調べたい Unicode プロパティ (定数 <i>IntlChar::PROPERTY_&#42;</i> を参照ください)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> or <b><code>FALSE</code></b> according to the binary Unicode property value for <code>codepoint</code>. Also <b><code>FALSE</code></b> if <code>property</code> is out of bounds or if the Unicode version does not have data for the property at all, or not for this code point.</p>
	 * @link http://php.net/manual/ja/intlchar.hasbinaryproperty.php
	 * @see IntlChar::getIntPropertyValue(), IntlChar::getUnicodeVersion()
	 * @since PHP 7
	 */
	public static function hasBinaryProperty($codepoint, int $property): bool {}

	/**
	 * Check if code point is an ignorable character
	 * <p>Determines if the specified character should be regarded as an ignorable character in an identifier.</p><p><b><code>TRUE</code></b> for characters with general category "Cf" (format controls) as well as non-whitespace ISO controls (U+0000..U+0008, U+000E..U+001B, U+007F..U+009F).</p><p><b>注意</b>:</p><p>Note that Unicode just recommends to ignore Cf (format controls).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is ignorable in identifiers, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isidignorable.php
	 * @see IntlChar::isIDStart(), IntlChar::isIDPart()
	 * @since PHP 7
	 */
	public static function isIDIgnorable($codepoint): bool {}

	/**
	 * Check if code point is permissible in an identifier
	 * <p>Determines if the specified character is permissible in an identifier.</p><p><b><code>TRUE</code></b> for characters with general categories "L" (letters), "Nl" (letter numbers), "Nd" (decimal digits), "Mc" and "Mn" (combining marks), "Pc" (connecting punctuation), and u_isIDIgnorable(c).</p><p><b>注意</b>:</p><p>This is almost the same as Unicode's ID_Continue (<b><code>IntlChar::PROPERTY_ID_CONTINUE</code></b>) except that Unicode recommends to ignore Cf which is less than <code>IntlChar::isIDIgnorable()</code>.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is the code point may occur in an identifier, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isidpart.php
	 * @see IntlChar::isIDIgnorable(), IntlChar::isIDStart()
	 * @since PHP 7
	 */
	public static function isIDPart($codepoint): bool {}

	/**
	 * Check if code point is permissible as the first character in an identifier
	 * <p>Determines if the specified character is permissible as the first character in an identifier according to Unicode (The Unicode Standard, Version 3.0, chapter 5.16 Identifiers).</p><p><b><code>TRUE</code></b> for characters with general categories "L" (letters) and "Nl" (letter numbers).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> may start an identifier, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isidstart.php
	 * @see IntlChar::isalpha(), IntlChar::isIDPart()
	 * @since PHP 7
	 */
	public static function isIDStart($codepoint): bool {}

	/**
	 * Check if code point is an ISO control code
	 * <p>Determines whether the specified code point is an ISO control code.</p><p><b><code>TRUE</code></b> for U+0000..U+001f and U+007f..U+009f (general category "Cc").</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is an ISO control code, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isisocontrol.php
	 * @see IntlChar::iscntrl()
	 * @since PHP 7
	 */
	public static function isISOControl($codepoint): bool {}

	/**
	 * Check if code point is permissible in a Java identifier
	 * <p>Determines if the specified character is permissible in a Java identifier.</p><p>In addition to <code>IntlChar::isIDPart()</code>, <b><code>TRUE</code></b> for characters with general category "Sc" (currency symbols).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> may occur in a Java identifier, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isjavaidpart.php
	 * @see IntlChar::isIDIgnorable(), IntlChar::isIDPart(), IntlChar::isJavaIDStart(), IntlChar::isalpha(), IntlChar::isdigit()
	 * @since PHP 7
	 */
	public static function isJavaIDPart($codepoint): bool {}

	/**
	 * Check if code point is permissible as the first character in a Java identifier
	 * <p>Determines if the specified character is permissible as the start of a Java identifier.</p><p>In addition to <code>IntlChar::isIDStart()</code>, <b><code>TRUE</code></b> for characters with general categories "Sc" (currency symbols) and "Pc" (connecting punctuation).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> may start a Java identifier, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isjavaidstart.php
	 * @see IntlChar::isIDStart(), IntlChar::isJavaIDPart(), IntlChar::isalpha()
	 * @since PHP 7
	 */
	public static function isJavaIDStart($codepoint): bool {}

	/**
	 * Check if code point is a space character according to Java
	 * <p>Determine if the specified code point is a space character according to Java.</p><p><b><code>TRUE</code></b> for characters with general categories "Z" (separators), which does not include control codes (e.g., TAB or Line Feed).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a space character according to Java, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isjavaspacechar.php
	 * @see IntlChar::isspace(), IntlChar::isWhitespace(), IntlChar::isUWhiteSpace()
	 * @since PHP 7
	 */
	public static function isJavaSpaceChar($codepoint): bool {}

	/**
	 * Check if code point has the Bidi_Mirrored property
	 * <p>Determines whether the code point has the Bidi_Mirrored property.</p><p>This property is set for characters that are commonly used in Right-To-Left contexts and need to be displayed with a "mirrored" glyph.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> has the Bidi_Mirrored property, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.ismirrored.php
	 * @see IntlChar::charMirror()
	 * @since PHP 7
	 */
	public static function isMirrored($codepoint): bool {}

	/**
	 * Check if code point has the Alphabetic Unicode property
	 * <p>Check if a code point has the Alphabetic Unicode property.</p><p>This is the same as <i>IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_ALPHABETIC)</i></p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> has the Alphabetic Unicode property, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isualphabetic.php
	 * @see IntlChar::isalpha(), IntlChar::hasBinaryProperty()
	 * @since PHP 7
	 */
	public static function isUAlphabetic($codepoint): bool {}

	/**
	 * Check if code point has the Lowercase Unicode property
	 * <p>Check if a code point has the Lowercase Unicode property.</p><p>This is the same as <i>IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_LOWERCASE)</i></p><p><b>注意</b>:</p><p>This is different than <code>IntlChar::islower()</code> and will return <b><code>TRUE</code></b> for more characters.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> has the Lowercase Unicode property, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isulowercase.php
	 * @see IntlChar::islower(), IntlChar::hasBinaryProperty()
	 * @since PHP 7
	 */
	public static function isULowercase($codepoint): bool {}

	/**
	 * Check if code point has the Uppercase Unicode property
	 * <p>Check if a code point has the Uppercase Unicode property.</p><p>This is the same as <i>IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_UPPERCASE)</i></p><p><b>注意</b>:</p><p>This is different than <code>IntlChar::isupper()</code> and will return <b><code>TRUE</code></b> for more characters.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> has the Uppercase Unicode property, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isuuppercase.php
	 * @see IntlChar::isupper(), IntlChar::hasBinaryProperty()
	 * @since PHP 7
	 */
	public static function isUUppercase($codepoint): bool {}

	/**
	 * Check if code point has the White_Space Unicode property
	 * <p>Check if a code point has the White_Space Unicode property.</p><p>This is the same as <i>IntlChar::hasBinaryProperty($codepoint, IntlChar::PROPERTY_WHITE_SPACE)</i></p><p><b>注意</b>:</p><p>This is different from both <code>IntlChar::isspace()</code> and <code>IntlChar::isWhitespace()</code>.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> has the White_Space Unicode property, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isuwhitespace.php
	 * @see IntlChar::isspace(), IntlChar::isWhitespace(), IntlChar::isJavaSpaceChar(), IntlChar::hasBinaryProperty()
	 * @since PHP 7
	 */
	public static function isUWhiteSpace($codepoint): bool {}

	/**
	 * Check if code point is a whitespace character according to ICU
	 * <p>Determines if the specified code point is a whitespace character according to ICU.</p><p>A character is considered to be a ICU whitespace character if and only if it satisfies one of the following criteria:</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a whitespace character according to ICU, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.iswhitespace.php
	 * @see IntlChar::isspace(), IntlChar::isJavaSpaceChar(), IntlChar::isUWhiteSpace()
	 * @since PHP 7
	 */
	public static function isWhitespace($codepoint): bool {}

	/**
	 * Check if code point is an alphanumeric character
	 * <p>Determines whether the specified code point is an alphanumeric character (letter or digit). <b><code>TRUE</code></b> for characters with general categories "L" (letters) and "Nd" (decimal digit numbers).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is an alphanumeric character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isalnum.php
	 * @see IntlChar::isalpha(), IntlChar::isdigit()
	 * @since PHP 7
	 */
	public static function isalnum($codepoint): bool {}

	/**
	 * Check if code point is a letter character
	 * <p>Determines whether the specified code point is a letter character. <b><code>TRUE</code></b> for general categories "L" (letters).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a letter character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isalpha.php
	 * @see IntlChar::isalnum(), IntlChar::isdigit()
	 * @since PHP 7
	 */
	public static function isalpha($codepoint): bool {}

	/**
	 * Check if code point is a base character
	 * <p>Determines whether the specified code point is a base character. <b><code>TRUE</code></b> for general categories "L" (letters), "N" (numbers), "Mc" (spacing combining marks), and "Me" (enclosing marks).</p><p><b>注意</b>:</p><p>This is different from the Unicode definition in chapter 3.5, conformance clause D13, which defines base characters to be all characters (not Cn) that do not graphically combine with preceding characters (M) and that are neither control (Cc) or format (Cf) characters.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a base character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isbase.php
	 * @see IntlChar::isalpha(), IntlChar::isdigit()
	 * @since PHP 7
	 */
	public static function isbase($codepoint): bool {}

	/**
	 * Check if code point is a "blank" or "horizontal space" character
	 * <p>Determines whether the specified code point is a "blank" or "horizontal space", a character that visibly separates words on a line.</p><p>The following are equivalent definitions:</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is either a "blank" or "horizontal space" character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isblank.php
	 * @see IntlChar::isspace(), IntlChar::isJavaSpaceChar(), IntlChar::isUWhiteSpace(), IntlChar::isWhitespace()
	 * @since PHP 7
	 */
	public static function isblank($codepoint): bool {}

	/**
	 * Check if code point is a control character
	 * <p>Determines whether the specified code point is a control character.</p><p>A control character is one of the following:</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a control character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.iscntrl.php
	 * @see IntlChar::isprint()
	 * @since PHP 7
	 */
	public static function iscntrl($codepoint): bool {}

	/**
	 * Check whether the code point is defined
	 * <p>Determines whether the specified code point is "defined", which usually means that it is assigned a character.</p><p><b><code>TRUE</code></b> for general categories other than "Cn" (other, not assigned).</p><p><b>注意</b>:</p><p>Note that non-character code points (e.g., U+FDD0) are not "defined" (they are Cn), but surrogate code points are "defined" (Cs).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a defined character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isdefined.php
	 * @see IntlChar::isdigit(), IntlChar::isalpha(), IntlChar::isalnum(), IntlChar::isupper(), IntlChar::islower(), IntlChar::istitle()
	 * @since PHP 7
	 */
	public static function isdefined($codepoint): bool {}

	/**
	 * Check if code point is a digit character
	 * <p>Determines whether the specified code point is a digit character.</p><p><b><code>TRUE</code></b> for characters with general category "Nd" (decimal digit numbers). Beginning with Unicode 4, this is the same as testing for the Numeric_Type of Decimal.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a digit character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isdigit.php
	 * @see IntlChar::isalpha(), IntlChar::isalnum(), IntlChar::isxdigit()
	 * @since PHP 7
	 */
	public static function isdigit($codepoint): bool {}

	/**
	 * Check if code point is a graphic character
	 * <p>Determines whether the specified code point is a "graphic" character (printable, excluding spaces).</p><p><b><code>TRUE</code></b> for all characters except those with general categories "Cc" (control codes), "Cf" (format controls), "Cs" (surrogates), "Cn" (unassigned), and "Z" (separators).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a "graphic" character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isgraph.php
	 * @since PHP 7
	 */
	public static function isgraph($codepoint): bool {}

	/**
	 * Check if code point is a lowercase letter
	 * <p>Determines whether the specified code point has the general category "Ll" (lowercase letter).</p><p><b>注意</b>:</p><p>This misses some characters that are also lowercase but have a different general category value. In order to include those, use <code>IntlChar::isULowercase()</code>.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is an Ll lowercase letter, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.islower.php
	 * @see IntlChar::isupper(), IntlChar::istitle(), IntlChar::tolower(), IntlChar::toupper()
	 * @since PHP 7
	 */
	public static function islower($codepoint): bool {}

	/**
	 * Check if code point is a printable character
	 * <p>Determines whether the specified code point is a printable character.</p><p><b><code>TRUE</code></b> for general categories other than "C" (controls).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a printable character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isprint.php
	 * @see IntlChar::iscntrl()
	 * @since PHP 7
	 */
	public static function isprint($codepoint): bool {}

	/**
	 * Check if code point is punctuation character
	 * <p>Determines whether the specified code point is a punctuation character.</p><p><b><code>TRUE</code></b> for characters with general categories "P" (punctuation).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a punctuation character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.ispunct.php
	 * @since PHP 7
	 */
	public static function ispunct($codepoint): bool {}

	/**
	 * Check if code point is a space character
	 * <p>Determines if the specified character is a space character or not.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a space character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isspace.php
	 * @see IntlChar::isJavaSpaceChar(), IntlChar::isWhitespace(), IntlChar::isUWhiteSpace()
	 * @since PHP 7
	 */
	public static function isspace($codepoint): bool {}

	/**
	 * Check if code point is a titlecase letter
	 * <p>Determines whether the specified code point is a titlecase letter.</p><p><b><code>TRUE</code></b> for general category "Lt" (titlecase letter).</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a titlecase letter, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.istitle.php
	 * @see IntlChar::isupper(), IntlChar::islower(), IntlChar::totitle()
	 * @since PHP 7
	 */
	public static function istitle($codepoint): bool {}

	/**
	 * Check if code point has the general category "Lu" (uppercase letter)
	 * <p>Determines whether the specified code point has the general category "Lu" (uppercase letter).</p><p><b>注意</b>:</p><p>This misses some characters that are also uppercase but have a different general category value. In order to include those, use <code>IntlChar::isUUppercase()</code>.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is an Lu uppercase letter, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isupper.php
	 * @see IntlChar::islower(), IntlChar::istitle(), IntlChar::tolower(), IntlChar::toupper()
	 * @since PHP 7
	 */
	public static function isupper($codepoint): bool {}

	/**
	 * Check if code point is a hexadecimal digit
	 * <p>Determines whether the specified code point is a hexadecimal digit.</p><p><b><code>TRUE</code></b> for characters with general category "Nd" (decimal digit numbers) as well as Latin letters a-f and A-F in both ASCII and Fullwidth ASCII. (That is, for letters with code points 0041..0046, 0061..0066, FF21..FF26, FF41..FF46.)</p><p>This is equivalent to <i>IntlChar::digit($codepoint, 16) &gt;= 0</i>.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if <code>codepoint</code> is a hexadecimal character, <b><code>FALSE</code></b> if not.</p>
	 * @link http://php.net/manual/ja/intlchar.isxdigit.php
	 * @see IntlChar::isdigit()
	 * @since PHP 7
	 */
	public static function isxdigit($codepoint): bool {}

	/**
	 * Return Unicode code point value of character
	 * <p>Returns the Unicode code point value of the given character.</p><p>This function compliments <code>IntlChar::chr()</code>.</p>
	 * @param mixed $character <p>A Unicode character.</p>
	 * @return int <p>Returns the Unicode code point value as an integer.</p>
	 * @link http://php.net/manual/ja/intlchar.ord.php
	 * @see IntlChar::isalnum(), IntlChar::isdigit(), IntlChar::chr(), ord()
	 * @since PHP 7
	 */
	public static function ord($character): int {}

	/**
	 * Make Unicode character lowercase
	 * <p>The given character is mapped to its lowercase equivalent. If the character has no lowercase equivalent, the original character itself is returned.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return mixed <p>Returns the Simple_Lowercase_Mapping of the code point, if any; otherwise the code point itself.</p><p>戻り値の型は <code>integer</code> になります。ただし、コードポイントを UTF-8 文字列で渡した場合は別で、その場合の返り値の型は文字列になります。</p>
	 * @link http://php.net/manual/ja/intlchar.tolower.php
	 * @see IntlChar::totitle(), IntlChar::toupper(), mb_strtolower()
	 * @since PHP 7
	 */
	public static function tolower($codepoint) {}

	/**
	 * Make Unicode character titlecase
	 * <p>The given character is mapped to its titlecase equivalent. If the character has no titlecase equivalent, the original character itself is returned.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return mixed <p>Returns the Simple_Titlecase_Mapping of the code point, if any; otherwise the code point itself.</p><p>戻り値の型は <code>integer</code> になります。ただし、コードポイントを UTF-8 文字列で渡した場合は別で、その場合の返り値の型は文字列になります。</p>
	 * @link http://php.net/manual/ja/intlchar.totitle.php
	 * @see IntlChar::tolower(), IntlChar::toupper(), mb_convert_case()
	 * @since PHP 7
	 */
	public static function totitle($codepoint) {}

	/**
	 * Make Unicode character uppercase
	 * <p>The given character is mapped to its uppercase equivalent. If the character has no uppercase equivalent, the character itself is returned.</p>
	 * @param mixed $codepoint <p>コードポイントを表す <code>integer</code> 型の値 (例: <i>U+2603 SNOWMAN</i> を表す <i>0x2603</i>)、あるいは UTF-8 文字列としてエンコードされた文字 (例: <i>"\u{2603}"</i>)。</p>
	 * @return mixed <p>Returns the Simple_Uppercase_Mapping of the code point, if any; otherwise the code point itself.</p><p>戻り値の型は <code>integer</code> になります。ただし、コードポイントを UTF-8 文字列で渡した場合は別で、その場合の返り値の型は文字列になります。</p>
	 * @link http://php.net/manual/ja/intlchar.toupper.php
	 * @see IntlChar::tolower(), IntlChar::totitle(), mb_strtoupper()
	 * @since PHP 7
	 */
	public static function toupper($codepoint) {}
}

/**
 * <p>This break iterator identifies the boundaries between UTF-8 code points.</p>
 * @link http://php.net/manual/ja/class.intlcodepointbreakiterator.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
class IntlCodePointBreakIterator extends \IntlBreakIterator implements \Traversable {

	/**
	 * インスタンス化をできないようにするための private なコンストラクタ
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self
	 * @link http://php.net/manual/ja/intlbreakiterator.construct.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	private function __construct() {}

	/**
	 * 文字シーケンスの組み合わせの境界用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createcharacterinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createCharacterInstance(string $locale = NULL): \ReturnType {}

	/**
	 * コードポイントの境界用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createcodepointinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createCodePointInstance(): \ReturnType {}

	/**
	 * 論理的に可能な改行用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createlineinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createLineInstance(string $locale = NULL): \ReturnType {}

	/**
	 * 文末用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createsentenceinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createSentenceInstance(string $locale = NULL): \ReturnType {}

	/**
	 * タイトル文字の区切り用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createtitleinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createTitleInstance(string $locale = NULL): \ReturnType {}

	/**
	 * 単語の区切り用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createwordinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createWordInstance(string $locale = NULL): \ReturnType {}

	/**
	 * 現在位置のインデックスを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.current.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function current(): \ReturnType {}

	/**
	 * テキスト内の最初の文字を場所を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.first.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function first(): \ReturnType {}

	/**
	 * 指定したオフセット以降の最初の境界までイテレータを進める
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.following.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function following(string $offset): \ReturnType {}

	/**
	 * このオブジェクトの直近のエラーコードを取得する
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrorcode.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getErrorCode(): \ReturnType {}

	/**
	 * このオブジェクトの直近のエラーメッセージを取得する
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrormessage.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getErrorMessage(): \ReturnType {}

	/**
	 * Get last code point passed over after advancing or receding the iterator
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int
	 * @link http://php.net/manual/ja/intlcodepointbreakiterator.getlastcodepoint.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getLastCodePoint(): int {}

	/**
	 * このオブジェクトに関連づけられたロケールを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale_type
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.getlocale.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getLocale(string $locale_type): \ReturnType {}

	/**
	 * 境界と境界の間の navigating fragments 用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key_type
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.getpartsiterator.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getPartsIterator(string $key_type = NULL): \ReturnType {}

	/**
	 * スキャンするテキストを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.gettext.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getText(): \ReturnType {}

	/**
	 * あるオフセットが境界のオフセットかどうかを調べる
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.isboundary.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function isBoundary(string $offset): \ReturnType {}

	/**
	 * イテレータの位置を、最後の文字より後に設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.last.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function last(): \ReturnType {}

	/**
	 * イテレータを次の境界まで進める
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.next.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function next(string $offset = NULL): \ReturnType {}

	/**
	 * イテレータの位置を、指定したオフセット以前の最初の境界に設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.preceding.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function preceding(string $offset): \ReturnType {}

	/**
	 * イテレータの位置を、現在位置の直前の境界に設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.previous.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function previous(): \ReturnType {}

	/**
	 * スキャンするテキストを設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $text
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.settext.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function setText(string $text): \ReturnType {}
}

/**
 * <p>Date Formatter は、パターン文字列や出来合いのパターンを使用して ロケールに依存する日付のフォーマット/パースを行う具象クラスです。</p>
 * <p>このクラスは ICU の日付フォーマット機能を表します。 これを使用すると、パターン文字列や出来合いのパターンを使用して 日付を各地域のフォーマットで表示したり、 文字列をパースして PHP の日付として扱ったりすることができます。</p>
 * @link http://php.net/manual/ja/class.intldateformatter.php
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
class IntlDateFormatter {

	/**
	 * Date Formatter を作成する
	 * <p>オブジェクト指向型</p><p>オブジェクト指向型 (コンストラクタ)</p><p>手続き型</p><p>Date Formatter を作成します。</p>
	 * @param string $locale <p>フォーマットやパースの際に使用するロケール。<b><code>NULL</code></b> を指定すると、 ini 設定 intl.default_locale の値を使います。</p>
	 * @param int $datetype <p>使用する日付の形式 (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>)。 IntlDateFormatter の定数 のいずれかとなります。 <b><code>NULL</code></b> を指定すると、ICU のデフォルトの日付型を使います。</p>
	 * @param int $timetype <p>使用する時刻の形式 (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>)。 IntlDateFormatter の定数 のいずれかとなります。 <b><code>NULL</code></b> を指定すると、ICU のデフォルトの時刻型を使います。</p>
	 * @param mixed $timezone <p>タイムゾーン ID。デフォルト (そして、<b><code>NULL</code></b> が渡されたときにも使われるもの) は <code>date_default_timezone_get()</code> が返す ID、あるいは <code>calendar</code> パラメータに IntlCalendar オブジェクトが渡されていればそのタイムゾーンを使います。 この ID は、ICU のデータベースにある妥当な識別子である必要があります。あるいは、 オフセットを明示した <i>GMT-05:30</i> のような形式になります。</p> <p>IntlTimeZone オブジェクトあるいは DateTimeZone オブジェクトも指定できます。</p>
	 * @param mixed $calendar <p>フォーマットやパースの際に使用するカレンダー。デフォルトは <b><code>NULL</code></b> で、 これは <b><code>IntlDateFormatter::GREGORIAN</code></b> を表します。 IntlDateFormatter のカレンダー定数 あるいは IntlCalendar を指定します。 渡された IntlCalendar は、クローンされます。 IntlDateFormatter によって元のオブジェクトが書き換えられることはありません。 これは、利用するカレンダーの型 (グレゴリオ暦、イスラム暦、ペルシア暦など) の判定に使います。 また、<code>timezone</code> パラメータに <b><code>NULL</code></b> を指定した場合にはタイムゾーンの判定にも使います。</p>
	 * @param string $pattern <p>フォーマットやパースの際に使用するオプションのパターン。 使えるパターンについては » http://userguide.icu-project.org/formatparse/datetime を参照ください。</p>
	 * @return IntlDateFormatter <p>作成された IntlDateFormatter を返します。失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.create.php
	 * @see datefmt_format(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function __construct(string $locale, int $datetype, int $timetype, $timezone = NULL, $calendar = NULL, string $pattern = "") {}

	/**
	 * Date Formatter を作成する
	 * <p>オブジェクト指向型</p><p>オブジェクト指向型 (コンストラクタ)</p><p>手続き型</p><p>Date Formatter を作成します。</p>
	 * @param string $locale <p>フォーマットやパースの際に使用するロケール。<b><code>NULL</code></b> を指定すると、 ini 設定 intl.default_locale の値を使います。</p>
	 * @param int $datetype <p>使用する日付の形式 (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>)。 IntlDateFormatter の定数 のいずれかとなります。 <b><code>NULL</code></b> を指定すると、ICU のデフォルトの日付型を使います。</p>
	 * @param int $timetype <p>使用する時刻の形式 (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>)。 IntlDateFormatter の定数 のいずれかとなります。 <b><code>NULL</code></b> を指定すると、ICU のデフォルトの時刻型を使います。</p>
	 * @param mixed $timezone <p>タイムゾーン ID。デフォルト (そして、<b><code>NULL</code></b> が渡されたときにも使われるもの) は <code>date_default_timezone_get()</code> が返す ID、あるいは <code>calendar</code> パラメータに IntlCalendar オブジェクトが渡されていればそのタイムゾーンを使います。 この ID は、ICU のデータベースにある妥当な識別子である必要があります。あるいは、 オフセットを明示した <i>GMT-05:30</i> のような形式になります。</p> <p>IntlTimeZone オブジェクトあるいは DateTimeZone オブジェクトも指定できます。</p>
	 * @param mixed $calendar <p>フォーマットやパースの際に使用するカレンダー。デフォルトは <b><code>NULL</code></b> で、 これは <b><code>IntlDateFormatter::GREGORIAN</code></b> を表します。 IntlDateFormatter のカレンダー定数 あるいは IntlCalendar を指定します。 渡された IntlCalendar は、クローンされます。 IntlDateFormatter によって元のオブジェクトが書き換えられることはありません。 これは、利用するカレンダーの型 (グレゴリオ暦、イスラム暦、ペルシア暦など) の判定に使います。 また、<code>timezone</code> パラメータに <b><code>NULL</code></b> を指定した場合にはタイムゾーンの判定にも使います。</p>
	 * @param string $pattern <p>フォーマットやパースの際に使用するオプションのパターン。 使えるパターンについては » http://userguide.icu-project.org/formatparse/datetime を参照ください。</p>
	 * @return IntlDateFormatter <p>作成された IntlDateFormatter を返します。失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.create.php
	 * @see datefmt_format(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function create(string $locale, int $datetype, int $timetype, $timezone = NULL, $calendar = NULL, string $pattern = ""): \IntlDateFormatter {}

	/**
	 * 日付/時刻 の値を文字列としてフォーマットする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>時刻の値を文字列としてフォーマットします。</p>
	 * @param mixed $value <p>フォーマットする値。DateTime オブジェクト、 IntlCalendar オブジェクト、 epoch からの経過秒数を表す数値 (小数になる可能性もある)、 あるいは <code>localtime()</code> が出力する形式の配列となります。</p> <p>DateTime オブジェクトあるいは IntlCalendar オブジェクトを渡した場合は、 そのタイムゾーンは考慮しません。これらをフォーマットするときに使うのは、 フォーマッターで設定されているタイムゾーンです。 渡したオブジェクトのタイムゾーンを使って欲しい場合は、 <code>IntlDateFormatter::setTimeZone()</code> を呼んでそのオブジェクトのタイムゾーンを設定しておかなければいけません。 あるいは、静的関数 <code>IntlDateFormatter::formatObject()</code> をかわりに使ってもかまいません。</p>
	 * @return string <p>フォーマットされた文字列、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.format.php
	 * @see datefmt_create(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message(), datefmt_format_object()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function format($value): string {}

	/**
	 * オブジェクトの書式を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、IntlCalendar オブジェクトや DateTime オブジェクトをフォーマットします。その際、明示的に IntlDateFormatter オブジェクトを作る必要はありません。</p><p>一時的な IntlDateFormatter が作られ、 渡されたオブジェクトのタイムゾーンを受け取ります。PHP に組み込まれているタイムゾーンデータベースは使いません。 そのかわりに、ICU のタイムゾーンデータベースを使います。 したがって、DateTime オブジェクトで使うタイムゾーン ID は ICU のデータベースに存在するものでなければいけません。</p>
	 * @param object $object <p>IntlCalendar あるいは DateTime 型のオブジェクト。 このオブジェクトの中のタイムゾーン情報を使います。</p>
	 * @param mixed $format <p>日付/時刻のフォーマット方法。二つの要素からなる配列 (最初の要素が日付のスタイル、二番目の要素が時刻のスタイル。それぞれ、定数 <b><code>IntlDateFormatter::NONE</code></b>、 <b><code>IntlDateFormatter::SHORT</code></b>、 <b><code>IntlDateFormatter::MEDIUM</code></b>、 <b><code>IntlDateFormatter::LONG</code></b>、 <b><code>IntlDateFormatter::FULL</code></b> のいずれか)、 これらの定数のいずれかの値を表す long 型 (日付と時刻の両方に使います)、あるいは » ICU のドキュメント にあるフォーマットを表す文字列を指定します。<b><code>NULL</code></b> を渡した場合はデフォルトのスタイルを使います。</p>
	 * @param string $locale <p>利用するロケール。<b><code>NULL</code></b> を渡した場合は デフォルトのロケール を使います。</p>
	 * @return string <p>結果を文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.formatobject.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
	 */
	public static function formatObject(object $object, $format = NULL, string $locale = NULL): string {}

	/**
	 * IntlDateFormatter が使用するカレンダー型を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p></p>
	 * @return int <p>Formatter が使用する カレンダー型 を返します。 <b><code>IntlDateFormatter::TRADITIONAL</code></b> あるいは <b><code>IntlDateFormatter::GREGORIAN</code></b> です。</p>
	 * @link http://php.net/manual/ja/intldateformatter.getcalendar.php
	 * @see datefmt_get_calendar_object(), datefmt_set_calendar(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getCalendar(): int {}

	/**
	 * カレンダーオブジェクトのコピーを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>このフォーマッターが内部的に使うカレンダーオブジェクトのコピーを取得します。 このカレンダーには型 (gregorian、japanese、buddhist、roc、persian、 islamic など) やタイムゾーンが設定されており、フォーマッターが使っている型やタイムゾーンと一致します。 オブジェクトの日付や時刻は指定されていません。</p>
	 * @return IntlCalendar <p>このフォーマッターが内部的に使うカレンダーオブジェクトのコピーを返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.getcalendarobject.php
	 * @see IntlDateFormatter::getCalendar(), IntlDateFormatter::setCalendar()
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
	 */
	public function getCalendarObject(): \IntlCalendar {}

	/**
	 * IntlDateFormatter が使用する日付形式を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Formatter が使用する日付形式を返します。</p>
	 * @return int <p>Formatter の現在の 日付形式 の値を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.getdatetype.php
	 * @see datefmt_get_timetype(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getDateType(): int {}

	/**
	 * 直近の操作のエラーコードを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の操作のエラーコードを取得します。 直近の数値フォーマット操作のエラーコードを返します。</p>
	 * @return int <p>エラーコードを返します。UErrorCode のいずれかの値となります。初期値は U_ZERO_ERROR です。</p>
	 * @link http://php.net/manual/ja/intldateformatter.geterrorcode.php
	 * @see datefmt_get_error_message(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getErrorCode(): int {}

	/**
	 * 直近の操作のエラーテキストを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の操作のエラーテキストを取得します。</p>
	 * @return string <p>直近のエラーの説明を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.geterrormessage.php
	 * @see datefmt_get_error_code(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getErrorMessage(): string {}

	/**
	 * Formatter が使用するロケールを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Formatter が使用するロケールを取得します。</p>
	 * @param int $which
	 * @return string <p>この Formatter のロケール、あるいはエラーの場合は 'false' を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.getlocale.php
	 * @see datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getLocale(int $which = NULL): string {}

	/**
	 * IntlDateFormatter が使用するパターンを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Formatter が使用するパターンを取得します。</p>
	 * @return string <p>フォーマット/パース 時に使用するパターン文字列を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.getpattern.php
	 * @see datefmt_set_pattern(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getPattern(): string {}

	/**
	 * IntlDateFormatter が使用する時刻形式を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Formatter が使用する時刻形式を返します。</p>
	 * @return int <p>Formatter の現在の 日付形式 の値を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.gettimetype.php
	 * @see datefmt_get_datetype(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getTimeType(): int {}

	/**
	 * タイムゾーンを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンを表す IntlTimeZone オブジェクトを返します。 このオブジェクトで日付や時刻をフォーマットするときに、このタイムゾーンを使います。 IntlCalendar や DateTime オブジェクトをこの IntlDateFormatter でフォーマットするときに使うタイムゾーンは、 このメソッドが返すものとなります。フォーマットしようとしているオブジェクトのタイムゾーンではありません。</p>
	 * @return IntlTimeZone <p>IntlTimeZone オブジェクトを返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.gettimezone.php
	 * @see IntlDateFormatter::getTimeZoneId(), IntlDateFormatter::setTimeZone()
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
	 */
	public function getTimeZone(): \IntlTimeZone {}

	/**
	 * IntlDateFormatter が使用するタイムゾーン ID を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>IntlDateFormatter が使用するタイムゾーン ID を取得します。</p>
	 * @return string <p>この Formatter が使用するタイムゾーンの ID 文字列を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.gettimezoneid.php
	 * @see datefmt_set_timezone_id(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getTimeZoneId(): string {}

	/**
	 * IntlDateFormatter で使用する寛大さを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>パターンに正確にマッチしていない入力の処理を、 パーサが厳格に行うのか寛大に行うのかを調べます。</p>
	 * @return bool <p>寛大なパーサの場合は <b><code>TRUE</code></b>、厳格なパーサの場合は <b><code>FALSE</code></b> 返します。 デフォルトのパーサは寛大なパーサです。</p>
	 * @link http://php.net/manual/ja/intldateformatter.islenient.php
	 * @see datefmt_set_lenient(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function isLenient(): bool {}

	/**
	 * 文字列をパースして、フィールドベースの時刻値にする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列 $value を変換し、フィールドベースの時刻値 (各フィールドを含む配列) にします。$parse_pos からパースを開始し、入力値を可能な限り使用します。</p>
	 * @param string $value <p>時間に変換する文字列。</p>
	 * @param int $position <p>$value のパースを開始する位置 (ゼロから数えます)。 $value を処理する前にエラーが発生していない場合は $parse_pos は -1 となります。それ以外の場合はパースが終了した位置となります (そしてエラーが発生します)。 この変数には、パースが失敗した場合にその終了位置が含まれます。 $parse_pos &gt; strlen($value) の場合、パースは即時に失敗します。</p>
	 * @return array <p>Localtime 互換の、整数値の配列を返します。 tm_hour フィールド内の、24 時間制の時刻の値を含みます。</p>
	 * @link http://php.net/manual/ja/intldateformatter.localtime.php
	 * @see datefmt_create(), datefmt_format(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function localtime(string $value, int &$position = NULL): array {}

	/**
	 * 文字列をパースしてタイムスタンプにする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列 $value を時間に変換します。$parse_pos からパースを開始し、 入力値を可能な限り使用します。</p>
	 * @param string $value <p>時間に変換する文字列。</p>
	 * @param int $position <p>$value のパースを開始する位置 (ゼロから数えます)。 $value を処理する前にエラーが発生していない場合は $parse_pos は -1 となります。それ以外の場合はパースが終了した位置となります (そしてエラーが発生します)。 この変数には、パースが失敗した場合にその終了位置が含まれます。 $parse_pos &gt; strlen($value) の場合、パースは即時に失敗します。</p>
	 * @return int <p>タイムスタンプとしてパースされた値を返します。 パースできなかった場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.parse.php
	 * @see datefmt_create(), datefmt_format(), datefmt_localtime(), datefmt_get_error_code(), datefmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function parse(string $value, int &$position = NULL): int {}

	/**
	 * Formatter が使うカレンダー型を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>このフォーマッターが使用するカレンダーあるいはカレンダー型を設定します。</p>
	 * @param mixed $which <p>使用する カレンダー型 (デフォルトは <b><code>IntlDateFormatter::GREGORIAN</code></b> で、 <b><code>NULL</code></b> を指定した場合にもこれを使います)、あるいは IntlCalendar オブジェクト。</p> <p>IntlCalendar オブジェクトが渡された場合は、それをクローンします。 引数として渡したオブジェクトは、何も変更されません。</p> <p>フォーマッターのタイムゾーンを残すのは IntlCalendar オブジェクトが渡されなかった場合だけで、 このオブジェクトが渡された場合は新しいタイムゾーンを利用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.setcalendar.php
	 * @see datefmt_get_calendar(), datefmt_get_calendar_object(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function setCalendar($which): bool {}

	/**
	 * パーサの寛大さを設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>パターンに正確にマッチしていない入力の処理を、 パーサが厳格に行うのか寛大に行うのかを定義します。 寛大なパースを有効にすると、日付や時刻のパターンに不備がある場合でも 可能な限り値を取得しようと試みます。余計な空白があったり 理解不能なトークンがあったり、あるいは値が無効な場合 ("Feburary 30th") は処理できません。</p>
	 * @param bool $lenient <p>パーサを寛大なものにするかどうか。デフォルトは <b><code>TRUE</code></b> (寛大) です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.setlenient.php
	 * @see datefmt_is_lenient(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function setLenient(bool $lenient): bool {}

	/**
	 * IntlDateFormatter が使用するパターンを設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>IntlDateFormatter が使用するパターンを取得します。</p>
	 * @param string $pattern <p>使用するパターン文字列。 使えるパターンについては » http://userguide.icu-project.org/formatparse/datetime を参照ください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 間違ったフォーマット文字列を指定すると、失敗します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.setpattern.php
	 * @see datefmt_get_pattern(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function setPattern(string $pattern): bool {}

	/**
	 * タイムゾーンを設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンを設定します。このオブジェクトを使って日付や時刻をフォーマットするときに、このタイムゾーンを使います。</p>
	 * @param mixed $zone <p>利用するタイムゾーン。次の形式で指定できます。</p> <ul> <li> <p><b><code>NULL</code></b>。この場合はデフォルトのタイムゾーンを使います。デフォルトは、ini 項目 date.timezone で設定したものか、 <code>date_default_timezone_set()</code> 関数で指定したもの (そして <code>date_default_timezone_get()</code> が返すもの) になります。</p> </li> <li> <p>IntlTimeZone。これを直接使います。</p> </li> <li> <p>DateTimeZone。その識別子を取り出して、ICU タイムゾーンオブジェクトを作ります。 つまり、これは ICU のデータベースに基づくタイムゾーンとなり、PHP のタイムゾーンデータベースに基づくものではありません。</p> </li> <li> <p>文字列。ICU タイムゾーン識別子として有効なものを指定します。 <code>IntlTimeZone::createTimeZoneIDEnumeration()</code> を参照ください。 <i>"GMT+08:30"</i> などのオフセットも指定できます。</p> </li> </ul>
	 * @return boolean <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.settimezone.php
	 * @see IntlDateFormatter::getTimeZone()
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
	 */
	public function setTimeZone($zone): bool {}

	/**
	 * 使用するタイムゾーンを設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>使用するタイムゾーンを設定します。</p>
	 * @param string $zone <p>使用するタイムゾーンのゾーン ID 文字列。 <b><code>NULL</code></b> あるいは空文字列を指定すると、 実行時のデフォルトタイムゾーンを使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/intldateformatter.settimezoneid.php
	 * @see datefmt_get_timezone_id(), datefmt_create()
	 * @since PHP 5 >= 5.3.0, PECL intl >= 1.0.0
	 */
	public function setTimeZoneId(string $zone): bool {}
}

/**
 * <p>このクラスは、intl 関数の内部でエラーが発生したときに例外を生成するために使います。 例外が生成されるのは、intl.use_exceptions が有効な場合だけです。</p>
 * @link http://php.net/manual/ja/class.intlexception.php
 * @since PHP 5 > 5.5.0, PHP 7, PECL intl > 3.0.0a1
 */
class IntlException extends \Exception {

	/**
	 * @var string <p>例外メッセージ</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.message
	 */
	protected $message;

	/**
	 * @var int <p>例外コード</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.code
	 */
	protected $code;

	/**
	 * @var string <p>例外が作られたファイル名</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.file
	 */
	protected $file;

	/**
	 * @var int <p>例外が作られた行</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.line
	 */
	protected $line;

	/**
	 * 例外をコピーする
	 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @since PHP 5, PHP 7
	 */
	final private function __clone() {}

	/**
	 * 例外の文字列表現
	 * <p>例外を文字列で表現したものを返します。</p>
	 * @return string <p>例外を文字列で表現したものを返します。</p>
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @since PHP 5, PHP 7
	 */
	public function __toString(): string {}

	/**
	 * 例外コードを取得する
	 * <p>例外コードを返します。</p>
	 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
	 * @link http://php.net/manual/ja/exception.getcode.php
	 * @since PHP 5, PHP 7
	 */
	final public function getCode() {}

	/**
	 * 例外が作られたファイルを取得する
	 * <p>例外が作られたファイルの名前を取得します。</p>
	 * @return string <p>例外が作られたファイルの名前を返します。</p>
	 * @link http://php.net/manual/ja/exception.getfile.php
	 * @since PHP 5, PHP 7
	 */
	final public function getFile(): string {}

	/**
	 * 例外が作られた行を取得する
	 * <p>例外が作られた行番号を取得します。</p>
	 * @return int <p>例外が作られた行番号を返します。</p>
	 * @link http://php.net/manual/ja/exception.getline.php
	 * @since PHP 5, PHP 7
	 */
	final public function getLine(): int {}

	/**
	 * 例外メッセージを取得する
	 * <p>例外メッセージを返します。</p>
	 * @return string <p>例外メッセージ文字列を返します。</p>
	 * @link http://php.net/manual/ja/exception.getmessage.php
	 * @since PHP 5, PHP 7
	 */
	final public function getMessage(): string {}

	/**
	 * 前の例外を返す
	 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
	 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/exception.getprevious.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	final public function getPrevious(): \Exception {}

	/**
	 * スタックトレースを取得する
	 * <p>例外のスタックトレースを返します。</p>
	 * @return array <p>例外のスタックトレースを配列で返します。</p>
	 * @link http://php.net/manual/ja/exception.gettrace.php
	 * @since PHP 5, PHP 7
	 */
	final public function getTrace(): array {}

	/**
	 * スタックトレースを文字列で取得する
	 * <p>例外のスタックトレースを文字列で返します。</p>
	 * @return string <p>例外のスタックトレースを文字列で返します。</p>
	 * @link http://php.net/manual/ja/exception.gettraceasstring.php
	 * @since PHP 5, PHP 7
	 */
	final public function getTraceAsString(): string {}
}

/**
 * <p>This class represents iterator objects throughout the intl extension whenever the iterator cannot be identified with any other object provided by the extension. The distinct iterator object used internally by the <i>foreach</i> construct can only be obtained (in the relevant part here) from objects, so objects of this class serve the purpose of providing the hook through which this internal object can be obtained. As a convenience, this class also implements the Iterator interface, allowing the collection of values to be navigated using the methods defined in that interface. Both these methods and the internal iterator objects provided to <i>foreach</i> are backed by the same state (e.g. the position of the iterator and its current value).</p>
 * <p>Subclasses may provide richer functionality.</p>
 * @link http://php.net/manual/ja/class.intliterator.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
class IntlIterator implements \Iterator {

	/**
	 * Get the current element
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return mixed
	 * @link http://php.net/manual/ja/intliterator.current.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function current() {}

	/**
	 * Get the current key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link http://php.net/manual/ja/intliterator.key.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function key(): string {}

	/**
	 * Move forward to the next element
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/intliterator.next.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function next(): void {}

	/**
	 * Rewind the iterator to the first element
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/intliterator.rewind.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function rewind(): void {}

	/**
	 * Check if current position is valid
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/intliterator.valid.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function valid(): bool {}
}

/**
 * <p>Objects of this class can be obtained from IntlBreakIterator objects. While the break iterators provide a sequence of boundary positions when iterated, <b>IntlPartsIterator</b> objects provide, as a convenience, the text fragments comprehended between two successive boundaries.</p>
 * <p>The keys may represent the offset of the left boundary, right boundary, or they may just the sequence of non-negative integers. See <code>IntlBreakIterator::getPartsIterator()</code>.</p>
 * @link http://php.net/manual/ja/class.intlpartsiterator.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class IntlPartsIterator extends \IntlIterator implements \Iterator {

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlpartsiterator.php
	 */
	const KEY_SEQUENTIAL = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlpartsiterator.php
	 */
	const KEY_LEFT = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intlpartsiterator.php
	 */
	const KEY_RIGHT = 2;

	/**
	 * Get the current element
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return mixed
	 * @link http://php.net/manual/ja/intliterator.current.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function current() {}

	/**
	 * Get IntlBreakIterator backing this parts iterator
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return IntlBreakIterator
	 * @link http://php.net/manual/ja/intlpartsiterator.getbreakiterator.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	public function getBreakIterator(): \IntlBreakIterator {}

	/**
	 * Get the current key
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link http://php.net/manual/ja/intliterator.key.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function key(): string {}

	/**
	 * Move forward to the next element
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/intliterator.next.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function next(): void {}

	/**
	 * Rewind the iterator to the first element
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link http://php.net/manual/ja/intliterator.rewind.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function rewind(): void {}

	/**
	 * Check if current position is valid
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/intliterator.valid.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function valid(): bool {}
}

/**
 * <p>A subclass of IntlBreakIterator that encapsulates ICU break iterators whose behavior is specified using a set of rules. This is the most common kind of break iterators.</p>
 * <p>These rules are described in the » ICU Boundary Analysis User Guide.</p>
 * @link http://php.net/manual/ja/class.intlrulebasedbreakiterator.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class IntlRuleBasedBreakIterator extends \IntlBreakIterator implements \Traversable {

	/**
	 * Create iterator from ruleset
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $rules
	 * @param string $areCompiled
	 * @return self
	 * @link http://php.net/manual/ja/intlrulebasedbreakiterator.construct.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function __construct(string $rules, string $areCompiled = NULL) {}

	/**
	 * 文字シーケンスの組み合わせの境界用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createcharacterinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createCharacterInstance(string $locale = NULL): \ReturnType {}

	/**
	 * コードポイントの境界用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createcodepointinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createCodePointInstance(): \ReturnType {}

	/**
	 * 論理的に可能な改行用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createlineinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createLineInstance(string $locale = NULL): \ReturnType {}

	/**
	 * 文末用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createsentenceinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createSentenceInstance(string $locale = NULL): \ReturnType {}

	/**
	 * タイトル文字の区切り用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createtitleinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createTitleInstance(string $locale = NULL): \ReturnType {}

	/**
	 * 単語の区切り用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.createwordinstance.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createWordInstance(string $locale = NULL): \ReturnType {}

	/**
	 * 現在位置のインデックスを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.current.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function current(): \ReturnType {}

	/**
	 * テキスト内の最初の文字を場所を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.first.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function first(): \ReturnType {}

	/**
	 * 指定したオフセット以降の最初の境界までイテレータを進める
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.following.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function following(string $offset): \ReturnType {}

	/**
	 * Get the binary form of compiled rules
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link http://php.net/manual/ja/intlrulebasedbreakiterator.getbinaryrules.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getBinaryRules(): string {}

	/**
	 * このオブジェクトの直近のエラーコードを取得する
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrorcode.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getErrorCode(): \ReturnType {}

	/**
	 * このオブジェクトの直近のエラーメッセージを取得する
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.geterrormessage.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getErrorMessage(): \ReturnType {}

	/**
	 * このオブジェクトに関連づけられたロケールを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale_type
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.getlocale.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getLocale(string $locale_type): \ReturnType {}

	/**
	 * 境界と境界の間の navigating fragments 用にイテレータを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $key_type
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.getpartsiterator.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getPartsIterator(string $key_type = NULL): \ReturnType {}

	/**
	 * Get the largest status value from the break rules that determined the current break position
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int
	 * @link http://php.net/manual/ja/intlrulebasedbreakiterator.getrulestatus.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getRuleStatus(): int {}

	/**
	 * Get the status values from the break rules that determined the current break position
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array
	 * @link http://php.net/manual/ja/intlrulebasedbreakiterator.getrulestatusvec.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getRuleStatusVec(): array {}

	/**
	 * Get the rule set used to create this object
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link http://php.net/manual/ja/intlrulebasedbreakiterator.getrules.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getRules(): string {}

	/**
	 * スキャンするテキストを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.gettext.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function getText(): \ReturnType {}

	/**
	 * あるオフセットが境界のオフセットかどうかを調べる
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.isboundary.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function isBoundary(string $offset): \ReturnType {}

	/**
	 * イテレータの位置を、最後の文字より後に設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.last.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function last(): \ReturnType {}

	/**
	 * イテレータを次の境界まで進める
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.next.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function next(string $offset = NULL): \ReturnType {}

	/**
	 * イテレータの位置を、指定したオフセット以前の最初の境界に設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $offset
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.preceding.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function preceding(string $offset): \ReturnType {}

	/**
	 * イテレータの位置を、現在位置の直前の境界に設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.previous.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function previous(): \ReturnType {}

	/**
	 * スキャンするテキストを設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $text
	 * @return ReturnType
	 * @link http://php.net/manual/ja/intlbreakiterator.settext.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public function setText(string $text): \ReturnType {}
}

/**
 * @link http://php.net/manual/ja/class.intltimezone.php
 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
 */
class IntlTimeZone {

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intltimezone.php
	 */
	const DISPLAY_SHORT = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.intltimezone.php
	 */
	const DISPLAY_LONG = 2;

	/**
	 * 指定した ID を含む等価グループの中にある ID の数を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $zoneId
	 * @return integer
	 * @link http://php.net/manual/ja/intltimezone.countequivalentids.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function countEquivalentIDs(string $zoneId): int {}

	/**
	 * このホストのデフォルトタイムゾーンの新しいコピーを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return IntlTimeZone
	 * @link http://php.net/manual/ja/intltimezone.createdefault.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function createDefault(): \IntlTimeZone {}

	/**
	 * 指定した国あるいはオフセットに関連するタイムゾーン ID の一覧を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param mixed $countryOrRawOffset
	 * @return IntlIterator
	 * @link http://php.net/manual/ja/intltimezone.createenumeration.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function createEnumeration($countryOrRawOffset = NULL): \IntlIterator {}

	/**
	 * 指定した ID のタイムゾーンオブジェクトを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $zoneId
	 * @return IntlTimeZone
	 * @link http://php.net/manual/ja/intltimezone.createtimezone.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function createTimeZone(string $zoneId): \IntlTimeZone {}

	/**
	 * Get an enumeration over system time zone IDs with the given filter conditions
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $zoneType
	 * @param string $region
	 * @param int $rawOffset
	 * @return IntlIterator <p>Returns IntlIterator失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intltimezone.createtimezoneidenumeration.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function createTimeZoneIDEnumeration(int $zoneType, string $region = NULL, int $rawOffset = NULL): \IntlIterator {}

	/**
	 * DateTimeZone からタイムゾーンオブジェクトを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \DateTimeZone $zoneId
	 * @return IntlTimeZone
	 * @link http://php.net/manual/ja/intltimezone.fromdatetimezone.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function fromDateTimeZone(\DateTimeZone $zoneId): \IntlTimeZone {}

	/**
	 * 指定したタイムゾーン ID の、正式なシステムタイムゾーン ID あるいは正規化したカスタムタイムゾーン ID を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $zoneId
	 * @param bool $isSystemID
	 * @return string
	 * @link http://php.net/manual/ja/intltimezone.getcanonicalid.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function getCanonicalID(string $zoneId, bool &$isSystemID = NULL): string {}

	/**
	 * ローカルの標準時刻からローカルの実測時刻を得るために加算する時間を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return integer
	 * @link http://php.net/manual/ja/intltimezone.getdstsavings.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getDSTSavings(): int {}

	/**
	 * このタイムゾーンの、ユーザー向けに表示する名前を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param bool $isDaylight
	 * @param int $style
	 * @param string $locale
	 * @return string
	 * @link http://php.net/manual/ja/intltimezone.getdisplayname.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getDisplayName(bool $isDaylight = NULL, int $style = NULL, string $locale = NULL): string {}

	/**
	 * 指定した ID を含む等価グループの ID を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $zoneId
	 * @param int $index
	 * @return string
	 * @link http://php.net/manual/ja/intltimezone.getequivalentid.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function getEquivalentID(string $zoneId, int $index): string {}

	/**
	 * 直近のエラーコードを取得する
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return integer
	 * @link http://php.net/manual/ja/intltimezone.geterrorcode.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getErrorCode(): int {}

	/**
	 * 直近のエラーメッセージを取得する
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link http://php.net/manual/ja/intltimezone.geterrormessage.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getErrorMessage(): string {}

	/**
	 * GMT (UTC) タイムゾーンを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return IntlTimeZone
	 * @link http://php.net/manual/ja/intltimezone.getgmt.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function getGMT(): \IntlTimeZone {}

	/**
	 * タイムゾーン ID を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link http://php.net/manual/ja/intltimezone.getid.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getID(): string {}

	/**
	 * Translate a Windows timezone into a system timezone
	 * <p>Translates a Windows timezone (e.g. "Pacific Standard Time") into a system timezone (e.g. "America/Los_Angeles").</p><p><b>注意</b>:  This function requires ICU version ≥ 52. </p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $timezone
	 * @param string $region
	 * @return string <p>Returns the system timezone失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intltimezone.getidforwindowsid.php
	 * @since PHP 7 >= 7.1.0
	 */
	public static function getIDForWindowsID(string $timezone, string $region = NULL): string {}

	/**
	 * 指定した時刻の、GMT へのオフセットを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $date
	 * @param bool $local
	 * @param int $rawOffset
	 * @param int $dstOffset
	 * @return integer
	 * @link http://php.net/manual/ja/intltimezone.getoffset.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getOffset(float $date, bool $local, int &$rawOffset, int &$dstOffset): int {}

	/**
	 * (夏時間を考慮せずに) GMT へのオフセットを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return integer
	 * @link http://php.net/manual/ja/intltimezone.getrawoffset.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getRawOffset(): int {}

	/**
	 * Get the region code associated with the given system time zone ID
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $zoneId
	 * @return string <p>Return region失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intltimezone.getregion.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function getRegion(string $zoneId): string {}

	/**
	 * ICU が使っているタイムゾーンデータのバージョンを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link http://php.net/manual/ja/intltimezone.gettzdataversion.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function getTZDataVersion(): string {}

	/**
	 * Get the "unknown" time zone
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return IntlTimeZone <p>Returns IntlTimeZone or <b><code>NULL</code></b> on failure.</p>
	 * @link http://php.net/manual/ja/intltimezone.getunknown.php
	 * @since PHP 5 >= 5.5.0, PHP 7
	 */
	public static function getUnknown(): \IntlTimeZone {}

	/**
	 * Translate a system timezone into a Windows timezone
	 * <p>Translates a system timezone (e.g. "America/Los_Angeles") into a Windows timezone (e.g. "Pacific Standard Time").</p><p><b>注意</b>:  This function requires ICU version ≥ 52. </p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $timezone
	 * @return string <p>Returns the Windows timezone失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link http://php.net/manual/ja/intltimezone.getwindowsid.php
	 * @since PHP 7 >= 7.1.0
	 */
	public static function getWindowsID(string $timezone): string {}

	/**
	 * このタイムゾーンが別のタイムゾーンと同じルールおよびオフセットを使っているかどうかを調べる
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \IntlTimeZone $otherTimeZone
	 * @return bool
	 * @link http://php.net/manual/ja/intltimezone.hassamerules.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function hasSameRules(\IntlTimeZone $otherTimeZone): bool {}

	/**
	 * DateTimeZone オブジェクトに変換する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return DateTimeZone
	 * @link http://php.net/manual/ja/intltimezone.todatetimezone.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function toDateTimeZone(): \DateTimeZone {}

	/**
	 * このタイムゾーンが夏時間を採用しているかどうかを調べる
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool
	 * @link http://php.net/manual/ja/intltimezone.usedaylighttime.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function useDaylightTime(): bool {}
}

/**
 * <p>"ロケール" とは、言語や文化等の地域固有の内容を API で取得する際に使用する識別子のことです。PHP で使用しているロケールは、 ICU (そして他の多くの Unix 系 OS や Mac、Java など) が採用している CLDR ロケールと同じです。 ロケールは、RFC 4646 形式の言語タグ (アンダースコアではなくハイフンを使用したもの) を使用します。古くから用いられているアンダースコア形式の識別子も使用できます。 特にことわりがない限り、このクラスの関数では両方の形式の識別子を使用可能です。</p>
 * <p>識別子の例を以下にあげます。</p>
 * <p>Locale クラス (そしてそれに対応する手続き型の関数) を使用して、ロケール識別子に対する操作を行います。 たとえばその識別子が妥当な形式かどうかを調べたりします。 CLDR が UAX #35 で使用している (そして ICU も継承している) 拡張は、ICU で普通に用いることができます。</p>
 * <p>Locale クラスのインスタンスを作成することはできません。 すべての関数/メソッドは静的に使用します。</p>
 * <p>null や空文字列は "root" ロケールとなります。 この "root" ロケールは、CLDR においては "en_US_POSIX" と同じ意味になります。言語タグ (そして ロケール識別子) は大文字小文字を区別しません。 仕様にあわせて大文字小文字の正規化を行う関数が存在します。</p>
 * @link http://php.net/manual/ja/class.locale.php
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
class Locale {

	/**
	 * 最もあてはまるロケールを HTTP "Accept-Language" ヘッダにもとづいて探す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>HTTP "Accept-Language" ヘッダが要求する言語リストを満たすロケールを探します。</p>
	 * @param string $header <p>"Accept-Language" ヘッダを含む文字列。RFC 2616 形式。</p>
	 * @return string <p>対応するロケール ID を返します。</p>
	 * @link http://php.net/manual/ja/locale.acceptfromhttp.php
	 * @see locale_lookup()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function acceptFromHttp(string $header): string {}

	/**
	 * ロケール文字列を正規化する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale
	 * @return string
	 * @link http://php.net/manual/ja/locale.canonicalize.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function canonicalize(string $locale): string {}

	/**
	 * 正しく並べ替えて区切られたロケール ID を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>正しく並べ替えて区切られたロケール ID を返します。 キーが特定のロケール ID サブタグを表し、 サブタグの値がそのキーに対応する値となります。</p>
	 * @param array $subtags <p>キーと値のペアを含む配列。 キーには特定のロケール ID サブタグを指定し、 そのサブタグの値を関連付けます。</p> <p><b>注意</b>:</p> <p>サブタグ 'variant' と 'private' には最大で 15 の値を指定できますが、 'extlang' には最大で 3 つの値しか指定できません。 variant には 0 から 14 までのサフィックスをつけることができ、 配列のキーは variant0, variant1, ...,variant14 となります。 返されるロケール ID において、このサブタグは variant0、variant1、variant2、……の順に並びます。</p> <p>'variant'、'private' および 'extlang' で複数の値を指定するには、 そのキー (例 'variant') の値に配列を指定するか、数字つきの複数のキー (例 'variant0'、'variant1' など) を使用します。</p>
	 * @return string <p>対応するロケール識別子を返します。</p>
	 * @link http://php.net/manual/ja/locale.composelocale.php
	 * @see locale_parse()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function composeLocale(array $subtags): string {}

	/**
	 * 言語タグフィルタがロケールにマッチするかどうかを調べる
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>$langtag フィルタが $locale でマッチするかどうかを RFC 4647 の基本フィルタリングアルゴリズムで調べます。</p>
	 * @param string $langtag <p>調べたい言語タグ。</p>
	 * @param string $locale <p>調べる対象となる言語の範囲。</p>
	 * @param bool $canonicalize <p>true の場合は、引数を正式な形式に変換してからマッチを行います。</p>
	 * @return bool <p>$locale が $langtag にマッチする場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/locale.filtermatches.php
	 * @see locale_lookup()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function filterMatches(string $langtag, string $locale, bool $canonicalize = false): bool {}

	/**
	 * 入力ロケールの変化系を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの変化系を取得します。</p>
	 * @param string $locale <p>変化系を取得したいロケール。</p>
	 * @return array <p>そのロケールのすべての variant サブタグを含む配列、あるいは存在しない場合に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/locale.getallvariants.php
	 * @see locale_get_primary_language(), locale_get_script(), locale_get_region()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function getAllVariants(string $locale): array {}

	/**
	 * INTL のグローバル 'default_locale' からデフォルトのロケールを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>デフォルトのロケールの値を取得します。PHP の国際化においては、 この値は php.ini の 'intl.default_locale' の値となります。 この値が存在しない場合は ICU の関数 uloc_getDefault() で取得します。</p>
	 * @return string <p>現在の実行時ロケールを返します。</p>
	 * @link http://php.net/manual/ja/locale.getdefault.php
	 * @see locale_set_default()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function getDefault(): string {}

	/**
	 * 入力ロケールの言語の表示名を、適切に地域化して返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの言語の表示名を、適切に地域化して返します。 <b><code>NULL</code></b> の場合はデフォルトのロケールを使用します。</p>
	 * @param string $locale <p>表示言語を返したいロケール。</p>
	 * @param string $in_locale <p>オプションのフォーマットロケール。 言語名の表示に使用します。</p>
	 * @return string <p>$locale に対応する言語の表示名を、 $in_locale にあわせた形式で返します。</p>
	 * @link http://php.net/manual/ja/locale.getdisplaylanguage.php
	 * @see locale_get_display_name(), locale_get_display_script(), locale_get_display_region(), locale_get_display_variant()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function getDisplayLanguage(string $locale, string $in_locale = NULL): string {}

	/**
	 * 入力ロケールの表示名を、適切に地域化して返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの表示名を、適切に地域化して返します。 <b><code>NULL</code></b> の場合はデフォルトのロケールを使用します。</p>
	 * @param string $locale <p>表示名を返したいロケール。</p>
	 * @param string $in_locale <p>オプションのフォーマットロケール。</p>
	 * @return string <p>ロケールの表示名を、 $in_locale にあわせた形式で返します。</p>
	 * @link http://php.net/manual/ja/locale.getdisplayname.php
	 * @see locale_get_display_language(), locale_get_display_script(), locale_get_display_region(), locale_get_display_variant()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function getDisplayName(string $locale, string $in_locale = NULL): string {}

	/**
	 * 入力ロケールの地域の表示名を、適切に地域化して返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの地域の表示名を、適切に地域化して返します。 <b><code>NULL</code></b> の場合はデフォルトのロケールを使用します。</p>
	 * @param string $locale <p>表示地域を返したいロケール。</p>
	 * @param string $in_locale <p>オプションのフォーマットロケール。 地域名の表示に使用します。</p>
	 * @return string <p>$locale に対応する地域の表示名を、 $in_locale にあわせた形式で返します。</p>
	 * @link http://php.net/manual/ja/locale.getdisplayregion.php
	 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_script(), locale_get_display_variant()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function getDisplayRegion(string $locale, string $in_locale = NULL): string {}

	/**
	 * 入力ロケールの文字の表示名を、適切に地域化して返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの文字の表示名を、適切に地域化して返します。 <b><code>NULL</code></b> の場合はデフォルトのロケールを使用します。</p>
	 * @param string $locale <p>表示文字を返したいロケール。</p>
	 * @param string $in_locale <p>オプションのフォーマットロケール。 文字名の表示に使用します。</p>
	 * @return string <p>$locale に対応する文字の表示名を、 $in_locale にあわせた形式で返します。</p>
	 * @link http://php.net/manual/ja/locale.getdisplayscript.php
	 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_region(), locale_get_display_variant()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function getDisplayScript(string $locale, string $in_locale = NULL): string {}

	/**
	 * 入力ロケールの変化形の表示名を、適切に地域化して返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの変化形の表示名を、適切に地域化して返します。 <b><code>NULL</code></b> の場合はデフォルトのロケールを使用します。</p>
	 * @param string $locale <p>表示変化形を返したいロケール。</p>
	 * @param string $in_locale <p>オプションのフォーマットロケール。 変化形の表示に使用します。</p>
	 * @return string <p>$locale に対応する変化形の表示名を、 $in_locale にあわせた形式で返します。</p>
	 * @link http://php.net/manual/ja/locale.getdisplayvariant.php
	 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_script(), locale_get_display_region()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function getDisplayVariant(string $locale, string $in_locale = NULL): string {}

	/**
	 * 入力ロケールのキーワードを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールのキーワードを取得します。</p>
	 * @param string $locale <p>キーワードを取り出したいロケール。</p>
	 * @return array <p>このロケールのキーワードと値のペアを連想配列で返します。</p>
	 * @link http://php.net/manual/ja/locale.getkeywords.php
	 * @see locale_get_all_variants()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function getKeywords(string $locale): array {}

	/**
	 * 入力ロケールのプライマリ言語を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールのプライマリ言語を取得します。</p>
	 * @param string $locale <p>プライマリ言語コードを取り出したいロケール。</p>
	 * @return string <p>このロケールの言語コード、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/locale.getprimarylanguage.php
	 * @see locale_get_script(), locale_get_region(), locale_get_all_variants()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function getPrimaryLanguage(string $locale): string {}

	/**
	 * 入力ロケールの地域を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの地域を取得します。</p>
	 * @param string $locale <p>地域コードを取り出したいロケール。</p>
	 * @return string <p>このロケールの地域サブタグ、あるいは存在しない場合に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/locale.getregion.php
	 * @see locale_get_primary_language(), locale_get_script(), locale_get_all_variants()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function getRegion(string $locale): string {}

	/**
	 * 入力ロケールの文字を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの文字を取得します。</p>
	 * @param string $locale <p>文字を取り出したいロケール。</p>
	 * @return string <p>このロケールの文字サブタグ、あるいは存在しない場合に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/locale.getscript.php
	 * @see locale_get_primary_language(), locale_get_region(), locale_get_all_variants()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function getScript(string $locale): string {}

	/**
	 * その言語にマッチする言語タグの一覧を検索する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>langtag</code> の中から、 <code>locale</code> で指定した言語の範囲に最もマッチするものを RFC 4647 の検索アルゴリズムで調べます。</p>
	 * @param array $langtag <p><code>locale</code> と比較したい言語タグの一覧を含む配列。 最大で 100 件まで指定できます。</p>
	 * @param string $locale <p>調べる対象となる言語の範囲として使用するロケール。</p>
	 * @param bool $canonicalize <p>true の場合は、引数を正式な形式に変換してからマッチを行います。</p>
	 * @param string $default <p>マッチしなかったときに使用するロケール。</p>
	 * @return string <p>最も近い言語タグ、あるいはデフォルトの値を返します。</p>
	 * @link http://php.net/manual/ja/locale.lookup.php
	 * @see locale_filter_matches()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function lookup(array $langtag, string $locale, bool $canonicalize = false, string $default = NULL): string {}

	/**
	 * ロケール ID のサブタグ要素を連想配列で返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ロケール ID のサブタグ要素を連想配列で返します。</p>
	 * @param string $locale <p>サブタグの配列を取り出したいロケール。 注意: サブタグ 'variant' と 'private' には最大で 15 の値を指定できますが、 'extlang' には最大で 3 つの値しか指定できません。</p>
	 * @return array <p>連想配列を返します。キーがロケール ID サブタグを表し、 そのサブタグの値が関連付けられています。 この配列の並び順はロケール ID サブタグの順となります。変化形が '-varX-varY-varZ' の場合、返される配列は variant0=&gt;varX , variant1=&gt;varY , variant2=&gt;varZ のようになります。</p>
	 * @link http://php.net/manual/ja/locale.parselocale.php
	 * @see locale_compose()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function parseLocale(string $locale): array {}

	/**
	 * デフォルトの実行時ロケールを設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>デフォルトの実行時ロケールを $locale に設定します。 これは INTL のグローバル 'default_locale' のロケール ID となります。UAX #35 拡張も使用可能です。</p>
	 * @param string $locale <p>BCP 47 準拠の言語タグ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/locale.setdefault.php
	 * @see locale_get_default()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function setDefault(string $locale): bool {}
}

/**
 * <p>MessageFormatter は、言語に依存しない連結されたメッセージを作成するための具象クラスです。 このクラスのメソッドを使用して、 エンドユーザー向けのすべてのメッセージを作成します。</p>
 * <p>MessageFormatter クラスは、プログラムから渡したさまざまな部品 (テキスト、数値、日付など) を組み合わせてメッセージを作成します。 MessageFormatter クラスでは、 プログラム側が部品の順序を気にする必要はありません。 このクラスでは、各部品に対して書式指定を使用し、 リソースバンドル内のひとつの文字列にメッセージをまとめます。 たとえば、 "Finished printing x out of y files..." のようなメッセージがあった場合に MessageFormatter は各翻訳に対して柔軟な表示を行います。</p>
 * <p>これまでは、エンドユーザー向けのメッセージは文章として作成し、 文字列で処理していました。 これは地域化の際にさまざまな問題を引き起こしていました。 文章の構造や単語の並び順、そして数値の書式などは 各言語によってさまざまに異なっているからです。 言語に依存しない方法でメッセージを作成するには、 メッセージの各部分を分割し、そこにデータへのキーを指定するようにします。 このキーを使用して、MessageFormatter クラスはメッセージの各部分を連結します。 そして地域化して適切な書式にした文字列をエンドユーザー向けに表示します。</p>
 * <p>MessageFormatter はオブジェクトのセットを受け取ってそれをフォーマットし、 フォーマットした文字列を適切な位置に埋め込みます。 MessageFormatter のフォーマットを選択することで、 数値にあわせて複数形を選択することができます。 一般的には、メッセージのフォーマットはリソースから取得し、 引数は実行時に動的に与えるようになります。</p>
 * @link http://php.net/manual/ja/class.messageformatter.php
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
class MessageFormatter {

	/**
	 * 新しいメッセージフォーマッタを作成する
	 * <p>オブジェクト指向型 (メソッド)</p><p>オブジェクト指向型 (コンストラクタ):</p><p>手続き型</p><p>新しい Message Formatter を作成します。</p>
	 * @param string $locale <p>引数のフォーマットに用いるロケール。</p>
	 * @param string $pattern <p>引数を埋め込むパターン文字列。 パターンには、'アポストロフィに優しい' 構文を使用します。 » umsg_autoQuoteApostrophe を通してから解釈が行われます。</p>
	 * @return MessageFormatter <p>フォーマッタオブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/messageformatter.create.php
	 * @see msgfmt_format(), msgfmt_parse(), msgfmt_get_error_code(), msgfmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function __construct(string $locale, string $pattern) {}

	/**
	 * 新しいメッセージフォーマッタを作成する
	 * <p>オブジェクト指向型 (メソッド)</p><p>オブジェクト指向型 (コンストラクタ):</p><p>手続き型</p><p>新しい Message Formatter を作成します。</p>
	 * @param string $locale <p>引数のフォーマットに用いるロケール。</p>
	 * @param string $pattern <p>引数を埋め込むパターン文字列。 パターンには、'アポストロフィに優しい' 構文を使用します。 » umsg_autoQuoteApostrophe を通してから解釈が行われます。</p>
	 * @return MessageFormatter <p>フォーマッタオブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/messageformatter.create.php
	 * @see msgfmt_format(), msgfmt_parse(), msgfmt_get_error_code(), msgfmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function create(string $locale, string $pattern): \MessageFormatter {}

	/**
	 * メッセージをフォーマットする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ロケールの規則にしたがってデータをフォーマット文字列に埋め込み、 メッセージをフォーマットします。</p>
	 * @param array $args <p>フォーマット文字列に埋め込む引数。</p>
	 * @return string <p>フォーマットした文字列を返します。 あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/messageformatter.format.php
	 * @see msgfmt_create(), msgfmt_parse(), msgfmt_format_message(), msgfmt_get_error_code(), msgfmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function format(array $args): string {}

	/**
	 * 手早くメッセージをフォーマットする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>明示的にフォーマッタオブジェクトを作成せずに、 手早くメッセージをフォーマットする関数です。 この関数を使用するのは、 一度きりのフォーマット処理であってパラメータや状態を保持する必要がない場合です。</p>
	 * @param string $locale <p>ロケールに依存する部分をフォーマットする際に使用するロケール。</p>
	 * @param string $pattern <p>使用するパターン文字列。 パターンには、'アポストロフィに優しい' 構文を使用します。 » umsg_autoQuoteApostrophe を通してから解釈が行われます。</p>
	 * @param array $args <p>フォーマット文字列に埋め込む値の配列。</p>
	 * @return string <p>フォーマットしたパターン文字列を返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/messageformatter.formatmessage.php
	 * @see msgfmt_create(), msgfmt_parse(), msgfmt_get_error_code(), msgfmt_get_error_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function formatMessage(string $locale, string $pattern, array $args): string {}

	/**
	 * 直近の操作のエラーコードを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の操作のエラーコードを取得します。</p>
	 * @return int <p>エラーコードを返します。UErrorCode の値のいずれかです。 初期値は U_ZERO_ERROR となります。</p>
	 * @link http://php.net/manual/ja/messageformatter.geterrorcode.php
	 * @see msgfmt_get_error_message(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getErrorCode(): int {}

	/**
	 * 直近の操作のエラーテキストを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の操作のエラーテキストを取得します。</p>
	 * @return string <p>直近のエラーの説明を返します。</p>
	 * @link http://php.net/manual/ja/messageformatter.geterrormessage.php
	 * @see msgfmt_get_error_code(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getErrorMessage(): string {}

	/**
	 * フォーマッタを作成した際のロケールを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタを作成した際のロケールを取得します。</p>
	 * @return string <p>ロケール名を返します。</p>
	 * @link http://php.net/manual/ja/messageformatter.getlocale.php
	 * @see msgfmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getLocale(): string {}

	/**
	 * フォーマッタが使用するパターンを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが使用するパターンを取得します。</p>
	 * @return string <p>このメッセージフォーマッタのパターン文字列を返します。</p>
	 * @link http://php.net/manual/ja/messageformatter.getpattern.php
	 * @see msgfmt_create(), msgfmt_set_pattern()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getPattern(): string {}

	/**
	 * パターンを使用して入力文字列をパースする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力文字列をパースし、取り出した項目を配列で返します。</p>
	 * @param string $value <p>パースする文字列。</p>
	 * @return array <p>取り出した項目を含む配列を返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/messageformatter.parse.php
	 * @see msgfmt_create(), msgfmt_format(), msgfmt_parse_message()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function parse(string $value): array {}

	/**
	 * 手早く入力文字列をパースする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>明示的にフォーマッタオブジェクトを作成せずに、 手早く入力文字列をパースします。 この関数を使用するのは、 一度きりのフォーマット処理であってパラメータや状態を保持する必要がない場合です。</p>
	 * @param string $locale <p>ロケールに依存する部分をパースする際に使用するロケール。</p>
	 * @param string $pattern <p><code>value</code> のパースに使うパターン。</p>
	 * @param string $source <p>パースする文字列。<code>pattern</code> を満たします。</p>
	 * @return array <p>取り出した項目を含む配列を返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/messageformatter.parsemessage.php
	 * @see msgfmt_create(), msgfmt_format_message(), msgfmt_parse()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function parseMessage(string $locale, string $pattern, string $source): array {}

	/**
	 * フォーマッタが使用するパターンを設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが使用するパターンを設定します。</p>
	 * @param string $pattern <p>このメッセージフォーマッタで使用するパターン文字列。 パターンには、'アポストロフィに優しい' 構文を使用します。 » umsg_autoQuoteApostrophe を通してから解釈が行われます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/messageformatter.setpattern.php
	 * @see msgfmt_create(), msgfmt_get_pattern()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function setPattern(string $pattern): bool {}
}

/**
 * <p>正規化とは、文字や文字列を正式に決められた表現に変換する処理のことです。 これは、検索や並べ替えなどの際に比較をするときに特に重要となります。 ただ、それだけではなく、テキストを保存する際に表記を統一するために用いることもあります。</p>
 * <p>Unicode Consortium では、 アプリケーション側でのさまざまなニーズにあわせていくつかの正規化方式を定義しています。</p>
 * @link http://php.net/manual/ja/class.normalizer.php
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
class Normalizer {

	/**
	 * Gets the Decomposition_Mapping property for the given UTF-8 encoded code point
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Gets the Decomposition_Mapping property, as specified in the Unicode Character Database (UCD), for the given UTF-8 encoded code point.</p>
	 * @param string $input <p>The input string, which should be a single, UTF-8 encoded, code point.</p>
	 * @return string <p>Returns a <code>string</code> containing the Decomposition_Mapping property, if present in the UCD.</p><p>Returns <b><code>NULL</code></b> if there is no Decomposition_Mapping property for the character.</p>
	 * @link http://php.net/manual/ja/normalizer.getrawdecomposition.php
	 * @since PHP 7 >= 7.3
	 */
	public static function getRawDecomposition(string $input): string {}

	/**
	 * 渡された文字列が、指定した正規化を適用済みかどうかを調べる
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>渡された文字列が、指定した正規化を適用済みかどうかを調べます。</p>
	 * @param string $input <p>正規化する入力文字列。</p>
	 * @param int $form <p>正規化方式のいずれか。</p>
	 * @return bool <p>正規化されている場合に <b><code>TRUE</code></b>、正規化されていない場合やエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/normalizer.isnormalized.php
	 * @see normalizer_normalize()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function isNormalized(string $input, int $form = Normalizer::FORM_C): bool {}

	/**
	 * 渡された入力を正規化し、正規化後の文字列を返す
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>渡された入力を正規化し、正規化後の文字列を返します。</p>
	 * @param string $input <p>正規化する入力文字列。</p>
	 * @param int $form <p>正規化方式のいずれか。</p>
	 * @return string <p>正規化後の文字列、あるいはエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/normalizer.normalize.php
	 * @see normalizer_is_normalized()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function normalize(string $input, int $form = Normalizer::FORM_C): string {}
}

/**
 * <p>プログラムで数値を保存したり操作したりする際には、 ロケールに依存しないバイナリ表現を使用します。 数値を表示するときに、ロケールにあわせた文字列形式に変換します。 たとえば 12345.67 という数値の表記はアメリカでは "12,345.67"、 フランスでは "12 345,67"、そしてドイツでは "12.345,67" となります。</p>
 * <p>NumberFormatter クラスのメソッドを実行すると、 数値や通貨、パーセンテージなどの値をロケールに応じた形式にフォーマットすることができます。 NumberFormatter はロケールを考慮した処理を行うので、 ロケールごとに別の NumberFormatter を用意する必要があります。 NumberFormatter のメソッドは、浮動小数点数値のような数値を ロケールにあわせた文字列に変換します。</p>
 * <p>通貨の場合は、通貨用の書式を使用してフォーマッタを作成します。 これは、ロケールにあわせて数値を適切な書式にして通貨記号をつけた文字列を返します。 もちろん、NumberFormatter クラスは為替レートの変換などは考慮しません。 指定した通貨にかかわらず、出力される数値は同じものとなります。 つまり、ロケールによって同じ数値が違う額を表すことになるということです。 9988776.65 という数値を指定したときの結果は次のようになります。</p>
 * <p>パーセンテージをフォーマットするには、 パーセンテージ用の書式を指定したフォーマッタを作成します。 これを使用すると、たとえば 0.75 のような小数が 75% と表示されるようになります。</p>
 * <p>spelled-out numbers のような複雑な書式を設定する場合は、 ルールベースの数値フォーマッタを使用します。</p>
 * @link http://php.net/manual/ja/class.numberformatter.php
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
class NumberFormatter {

	/**
	 * 数値フォーマッタを作成する
	 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型</p><p>オブジェクト指向型 (コンストラクタ):</p><p>数値フォーマッタを作成します。</p>
	 * @param string $locale <p>数値フォーマットするロケール (ロケール名。たとえば en_CA)。</p>
	 * @param int $style <p>フォーマットの形式。  フォーマット形式 定数のいずれか。 <b><code>NumberFormatter::PATTERN_DECIMAL</code></b> あるいは <b><code>NumberFormatter::PATTERN_RULEBASED</code></b> を指定した場合は指定したパターンの数値フォーマットをオープンします。 これは、それぞれ » ICU DecimalFormat ドキュメント あるいは » ICU RuleBasedNumberFormat ドキュメント で述べられている構文を満たす必要があります。</p>
	 * @param string $pattern <p>選択した形式がパターンを要求するものである場合のパターン文字列。</p>
	 * @return NumberFormatter <p>NumberFormatter オブジェクト、 あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.create.php
	 * @see numfmt_format(), numfmt_parse()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function __construct(string $locale, int $style, string $pattern = NULL) {}

	/**
	 * 数値フォーマッタを作成する
	 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型</p><p>オブジェクト指向型 (コンストラクタ):</p><p>数値フォーマッタを作成します。</p>
	 * @param string $locale <p>数値フォーマットするロケール (ロケール名。たとえば en_CA)。</p>
	 * @param int $style <p>フォーマットの形式。  フォーマット形式 定数のいずれか。 <b><code>NumberFormatter::PATTERN_DECIMAL</code></b> あるいは <b><code>NumberFormatter::PATTERN_RULEBASED</code></b> を指定した場合は指定したパターンの数値フォーマットをオープンします。 これは、それぞれ » ICU DecimalFormat ドキュメント あるいは » ICU RuleBasedNumberFormat ドキュメント で述べられている構文を満たす必要があります。</p>
	 * @param string $pattern <p>選択した形式がパターンを要求するものである場合のパターン文字列。</p>
	 * @return NumberFormatter <p>NumberFormatter オブジェクト、 あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.create.php
	 * @see numfmt_format(), numfmt_parse()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public static function create(string $locale, int $style, string $pattern = NULL): \NumberFormatter {}

	/**
	 * 数値をフォーマットする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>数値をフォーマット規則にしたがってフォーマットします。</p>
	 * @param number $value <p>フォーマットする値。<code>integer</code> あるいは <code>float</code> で指定します。その他の型は数値に変換されます。</p>
	 * @param int $type <p>使用する  フォーマット形式。</p>
	 * @return string <p>フォーマットした値を文字列で返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.format.php
	 * @see numfmt_get_error_code(), numfmt_format_currency(), numfmt_parse()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function format($value, int $type = NULL): string {}

	/**
	 * 通貨の値をフォーマットする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>通貨の値をフォーマット規則にしたがってフォーマットします。</p>
	 * @param float $value <p>通貨の値。</p>
	 * @param string $currency <p>使用する通貨を表す、3 文字の ISO 4217 通貨コード。</p>
	 * @return string <p>通貨の値をフォーマットした文字列を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.formatcurrency.php
	 * @see numfmt_get_error_code(), numfmt_format(), numfmt_parse_currency()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function formatCurrency(float $value, string $currency): string {}

	/**
	 * 属性を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタの数値属性を取得します。 数値属性の例としては、フォーマッタが作成する整数部の桁数などがあります。</p>
	 * @param int $attr <p>属性指定子。  数値属性 定数のいずれか。</p>
	 * @return int <p>成功した場合に属性の値、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.getattribute.php
	 * @see numfmt_get_error_code(), numfmt_get_text_attribute(), numfmt_set_attribute()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getAttribute(int $attr): int {}

	/**
	 * フォーマッタの直近のエラーコードを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが直近に実行した関数のエラーコードを取得します。</p>
	 * @return int <p>直近の関数コールのエラーコードを返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.geterrorcode.php
	 * @see numfmt_get_error_message(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getErrorCode(): int {}

	/**
	 * フォーマッタの直近のエラーメッセージを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが直近に実行した関数のエラーメッセージを取得します。</p>
	 * @return string <p>直近の関数コールのエラーメッセージを返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.geterrormessage.php
	 * @see numfmt_get_error_code(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getErrorMessage(): string {}

	/**
	 * フォーマッタのロケールを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタのロケール名を取得します。</p>
	 * @param int $type <p>妥当なロケールあるいは正確なロケールのいずれか ( <b><code>Locale::VALID_LOCALE</code></b>, <b><code>Locale::ACTUAL_LOCALE</code></b>, respectively) を選択します。デフォルトは実際のロケールです。</p>
	 * @return string <p>フォーマッタの作成時に使用したロケールを返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.getlocale.php
	 * @see numfmt_create(), numfmt_get_error_code()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getLocale(int $type = NULL): string {}

	/**
	 * フォーマッタのパターンを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが使用するパターンを取り出します。</p>
	 * @return string <p>このフォーマッタが使用するパターン文字列、 あるいはエラー発生時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.getpattern.php
	 * @see numfmt_get_error_code(), numfmt_set_pattern(), numfmt_create()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getPattern(): string {}

	/**
	 * 記号を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタに関連づけられている記号を取得します。 フォーマッタでは、この記号で数値の中のロケールに依存する文字 (パーセント記号など) を扱います。 この API は、ルールベースのフォーマッタではサポートしていません。</p>
	 * @param int $attr <p>記号指定子。  フォーマット記号 定数のいずれか。</p>
	 * @return string <p>記号文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.getsymbol.php
	 * @see numfmt_get_error_code(), numfmt_set_symbol()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getSymbol(int $attr): string {}

	/**
	 * テキストの属性を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタに関連づけられているテキスト属性を取得します。 テキスト属性の例としては、正の数字のサフィックスなどがあります。 属性が理解できない場合は、エラー <b><code>U_UNSUPPORTED_ERROR</code></b> が発生します。 ルールベースのフォーマッタでは、 <b><code>NumberFormatter::DEFAULT_RULESET</code></b> および <b><code>NumberFormatter::PUBLIC_RULESETS</code></b> のみが使用できます。</p>
	 * @param int $attr <p>属性指定子。  テキスト属性 定数のいずれか。</p>
	 * @return string <p>成功した場合に属性の値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.gettextattribute.php
	 * @see numfmt_get_error_code(), numfmt_get_attribute(), numfmt_set_text_attribute()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function getTextAttribute(int $attr): string {}

	/**
	 * 数値をパースする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在のフォーマット規則を使用して、文字列を数値にパースします。</p>
	 * @param string $value
	 * @param int $type <p>使用する  フォーマット形式。デフォルトでは <b><code>NumberFormatter::TYPE_DOUBLE</code></b> を使用します。</p>
	 * @param int $position <p>文字列中でパースを開始する位置のオフセット。 結果を返す際に、この値はパース終了時のオフセットを保持します。</p>
	 * @return mixed <p>パースした数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.parse.php
	 * @see numfmt_get_error_code(), numfmt_format(), numfmt_parse_currency()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function parse(string $value, int $type = NULL, int &$position = NULL) {}

	/**
	 * 通貨をパースする
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在のフォーマッタを使用して、文字列を数値と通貨にパースします。</p>
	 * @param string $value
	 * @param string $currency <p>通貨名 (3 文字の ISO 4217 通貨コード) を受け取るパラメータ。</p>
	 * @param int $position <p>文字列中でパースを開始する位置のオフセット。 結果を返す際に、この値はパース終了時のオフセットを保持します。</p>
	 * @return float <p>パースした数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.parsecurrency.php
	 * @see numfmt_get_error_code(), numfmt_parse(), numfmt_format_currency()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function parseCurrency(string $value, string &$currency, int &$position = NULL): float {}

	/**
	 * 属性を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタに関連づけられている数値属性を設定します。 数値属性の例としては、フォーマッタが作成する整数部の桁数などがあります。</p>
	 * @param int $attr <p>属性指定子。  数値属性 定数のいずれか。</p>
	 * @param int $value <p>属性の値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.setattribute.php
	 * @see numfmt_get_error_code(), numfmt_get_attribute(), numfmt_set_text_attribute()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function setAttribute(int $attr, int $value): bool {}

	/**
	 * フォーマッタのパターンを設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが使用するパターンを設定します。 ルールベースのフォーマッタでは使用できません。</p>
	 * @param string $pattern <p>» ICU DecimalFormat ドキュメント で述べられている構文によるパターン。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.setpattern.php
	 * @see numfmt_get_error_code(), numfmt_create(), numfmt_get_pattern()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function setPattern(string $pattern): bool {}

	/**
	 * 記号の値を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタに関連づけられている記号を設定します。 フォーマッタでは、この記号で数値の中のロケールに依存する文字 (パーセント記号など) を扱います。 この API は、ルールベースのフォーマッタではサポートしていません。</p>
	 * @param int $attr <p>記号指定子。  フォーマット記号 定数のいずれか。</p>
	 * @param string $value <p>その記号に対応するテキスト。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.setsymbol.php
	 * @see numfmt_get_error_code(), numfmt_get_symbol()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function setSymbol(int $attr, string $value): bool {}

	/**
	 * テキスト属性を設定する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタに関連づけられているテキスト属性を設定します。 テキスト属性の例としては、正の数字のサフィックスなどがあります。 属性が理解できない場合は、エラー <b><code>U_UNSUPPORTED_ERROR</code></b> が発生します。 ルールベースのフォーマッタでは、 <b><code>NumberFormatter::DEFAULT_RULESET</code></b> および <b><code>NumberFormatter::PUBLIC_RULESETS</code></b> のみが使用できます。</p>
	 * @param int $attr <p>属性指定子。 テキスト属性 定数のいずれか。</p>
	 * @param string $value <p>属性の値を表すテキスト。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/numberformatter.settextattribute.php
	 * @see numfmt_get_error_code(), numfmt_get_text_attribute(), numfmt_set_attribute()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
	 */
	public function setTextAttribute(int $attr, string $value): bool {}
}

/**
 * <p>ローカライズしたソフトウェア製品には、 現在のロケールによって切り替えるデータのセットが必要となることがよくあります。 たとえばメッセージやラベル、書式パターンなどです。 ICU のリソース機能を使うと、リソースセットを定義することができます。 ロケールに基づいてアプリケーションからこれを読み込み、 ロケールにかかわらず統一された方法でアクセスすることができます。</p>
 * <p>このクラスは ICU のリソースデータファイルへのアクセスを実装しています。 このファイルはバイナリデータの配列で、ICU がローカライズしたデータを保存するために使っています。</p>
 * <p>ICU リソースバンドルには、シンプルなリソースと複雑なリソースを保持することができます。 複雑なリソースとはコンテナ形式のもので、数値添字あるいは文字列添字 (PHP の配列と同じ) のいずれかの形式になります。シンプルなリソースは 文字列、整数、バイナリデータフィールド、整数の配列 のいずれかの型となります。</p>
 * <p><b>ResourceBundle</b> からデータにアクセスするには、 配列を使う方法と foreach を使う方法、そしてクラスメソッドを使う方法があります。 シンプルなリソースの場合は PHP の値、複雑なリソースの場合は <b>ResourceBundle</b> オブジェクトとして取得できます。 リソースはすべて読み込み専用となります。</p>
 * @link http://php.net/manual/ja/class.resourcebundle.php
 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
 */
class ResourceBundle {

	/**
	 * リソースバンドルを作成する
	 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型</p><p>オブジェクト指向型 (コンストラクタ)</p><p>リソースバンドルを作成します。</p>
	 * @param string $locale <p>リソースバンドルを読み込むロケール (en_CA などのロケール名)。</p>
	 * @param string $bundlename <p>データが格納されているディレクトリ、あるいは .dat ファイル名。</p>
	 * @param bool $fallback <p>ロケールを完全一致とするか、あるいは代替として親ロケールを使うことを許可するか。</p>
	 * @return ResourceBundle <p>ResourceBundle オブジェクト、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/resourcebundle.create.php
	 * @see resourcebundle_get()
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
	 */
	public function __construct(string $locale, string $bundlename, bool $fallback = NULL) {}

	/**
	 * バンドル内の要素数を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>バンドル内の要素数を取得します。</p>
	 * @return int <p>バンドル内の要素数を返します。</p>
	 * @link http://php.net/manual/ja/resourcebundle.count.php
	 * @see resourcebundle_get()
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
	 */
	public function count(): int {}

	/**
	 * リソースバンドルを作成する
	 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型</p><p>オブジェクト指向型 (コンストラクタ)</p><p>リソースバンドルを作成します。</p>
	 * @param string $locale <p>リソースバンドルを読み込むロケール (en_CA などのロケール名)。</p>
	 * @param string $bundlename <p>データが格納されているディレクトリ、あるいは .dat ファイル名。</p>
	 * @param bool $fallback <p>ロケールを完全一致とするか、あるいは代替として親ロケールを使うことを許可するか。</p>
	 * @return ResourceBundle <p>ResourceBundle オブジェクト、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/resourcebundle.create.php
	 * @see resourcebundle_get()
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
	 */
	public static function create(string $locale, string $bundlename, bool $fallback = NULL): \ResourceBundle {}

	/**
	 * バンドルからデータを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>インデックスあるいは文字列キーを指定して、バンドルからデータを取得します。</p>
	 * @param string|int $index <p>データのインデックス。文字列あるいは整数値となります。</p>
	 * @param bool $fallback <p>Whether locale should match exactly or fallback to parent locale is allowed.</p>
	 * @return mixed <p>指定したインデックスのデータ、あるいはエラー時に <b><code>NULL</code></b> を返します。 文字列、整数値、バイナリデータ文字列は、それぞれに対応する PHP の型として返します。 整数の配列は PHP の配列として返します。複雑な型は ResourceBundle オブジェクトとして返します。</p>
	 * @link http://php.net/manual/ja/resourcebundle.get.php
	 * @see resourcebundle_count()
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
	 */
	public function get($index, bool $fallback = TRUE) {}

	/**
	 * バンドルの直近のエラーコードを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>バンドルオブジェクトが最後に実行した関数のエラーコードを取得します。</p>
	 * @return int <p>バンドルオブジェクトの最後の関数コールからのエラーコードを返します。</p>
	 * @link http://php.net/manual/ja/resourcebundle.geterrorcode.php
	 * @see resourcebundle_get_error_message(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
	 */
	public function getErrorCode(): int {}

	/**
	 * バンドルの直近のエラーメッセージを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>バンドルオブジェクトが最後に実行した関数のエラーメッセージを取得します。</p>
	 * @return string <p>バンドルオブジェクトの最後の関数コールからのエラーメッセージを返します。</p>
	 * @link http://php.net/manual/ja/resourcebundle.geterrormessage.php
	 * @see resourcebundle_get_error_code(), intl_get_error_code(), intl_is_failure()
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
	 */
	public function getErrorMessage(): string {}

	/**
	 * サポートするロケールを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>ResourceBundle 名を指定して、サポートするロケールを取得します。</p>
	 * @param string $bundlename <p>ロケールを取得したい ResourceBundle のパス、あるいは 空文字列を指定するとデフォルトのロケール一覧を取得できます。</p>
	 * @return array <p>このバンドルがサポートするロケールの一覧を返します。</p>
	 * @link http://php.net/manual/ja/resourcebundle.locales.php
	 * @see resourcebundle_get()
	 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
	 */
	public function getLocales(string $bundlename): array {}
}

/**
 * <p>This class is provided because Unicode contains large number of characters and incorporates the varied writing systems of the world and their incorrect usage can expose programs or systems to possible security attacks using characters similarity.</p>
 * <p>Provided methods allow to check whether an individual string is likely an attempt at confusing the reader (<i>spoof detection</i>), such as "pаypаl" spelled with Cyrillic 'а' characters.</p>
 * @link http://php.net/manual/ja/class.spoofchecker.php
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 */
class Spoofchecker {

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.spoofchecker.php
	 */
	const SINGLE_SCRIPT_CONFUSABLE = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.spoofchecker.php
	 */
	const MIXED_SCRIPT_CONFUSABLE = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.spoofchecker.php
	 */
	const WHOLE_SCRIPT_CONFUSABLE = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.spoofchecker.php
	 */
	const ANY_CASE = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.spoofchecker.php
	 */
	const SINGLE_SCRIPT = 16;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.spoofchecker.php
	 */
	const INVISIBLE = 32;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.spoofchecker.php
	 */
	const CHAR_LIMIT = 64;

	/**
	 * Constructor
	 * <p>Creates new instance of Spoofchecker.</p>
	 * @return self <p>Returns Spoofchecker instance.</p>
	 * @link http://php.net/manual/ja/spoofchecker.construct.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public function __construct() {}

	/**
	 * Checks if given strings can be confused
	 * <p>Checks whether two given strings can easily be mistaken.</p>
	 * @param string $str1 <p>First string to check.</p>
	 * @param string $str2 <p>Second string to check.</p>
	 * @param string $error <p>This variable is set by-reference to string containing an error, if there were any.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if two given strings can be confused, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/spoofchecker.areconfusable.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public function areConfusable(string $str1, string $str2, string &$error = NULL): bool {}

	/**
	 * Checks if a given text contains any suspicious characters
	 * <p>Checks if given string contains any suspicious characters like letters which are almost identical visually, but are Unicode characters from different sets.</p>
	 * @param string $text <p>String to test.</p>
	 * @param string $error <p>This variable is set by-reference to string containing an error, if there were any.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if there are suspicious characters, <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/spoofchecker.issuspicious.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public function isSuspicious(string $text, string &$error = NULL): bool {}

	/**
	 * チェック時に使うロケールを設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $locale_list
	 * @return void
	 * @link http://php.net/manual/ja/spoofchecker.setallowedlocales.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public function setAllowedLocales(string $locale_list): void {}

	/**
	 * 実行するチェックを設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \long $checks
	 * @return void
	 * @link http://php.net/manual/ja/spoofchecker.setchecks.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public function setChecks(\long $checks): void {}
}

/**
 * <p>Transliterator クラスは、文字列の音訳を行います。</p>
 * @link http://php.net/manual/ja/class.transliterator.php
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 */
class Transliterator {

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.transliterator.php
	 */
	const FORWARD = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.transliterator.php
	 */
	const REVERSE = 1;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.transliterator.php#transliterator.props.id
	 */
	public $id;

	/**
	 * インスタンス化を拒否するために private にしたコンストラクタ
	 * <p>このメソッドをコールしてはいけません。 new 演算子によるインスタンス化を拒否するために用意されたものです。</p><p>かわりに、ファクトリーメソッドである <code>Transliterator::create()</code> あるいは <code>Transliterator::createFromRules()</code> を使いましょう。</p>
	 * @return self <p>このメソッドをコールしてはいけません。仮にリフレクションなどを使ってコールしたとしても、 その返り値は不定です。</p>
	 * @link http://php.net/manual/ja/transliterator.construct.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public function __construct() {}

	/**
	 * Transliterator を作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>id を指定して Transliterator をオープンします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $id <p>id。</p>
	 * @param int $direction <p>方向。デフォルトは &gt;Transliterator::FORWARD です。 Transliterator::REVERSE も指定できます。</p>
	 * @return Transliterator <p>成功した場合に Transliterator オブジェクト、失敗した場合に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/transliterator.create.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public static function create(string $id, int $direction = NULL): \Transliterator {}

	/**
	 * 規則に基づいた Transliterator を作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>規則に基づいた Transliterator を作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $rules <p>規則。</p>
	 * @param string $direction <p>方向。デフォルトは &gt;Transliterator::FORWARD です。 Transliterator::REVERSE も指定できます。</p>
	 * @return Transliterator <p>成功した場合に Transliterator オブジェクト、失敗した場合に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/transliterator.createfromrules.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public static function createFromRules(string $rules, string $direction = NULL): \Transliterator {}

	/**
	 * 逆方向の Transliterator を作成する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>逆方向の Transliterator をオープンします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return Transliterator <p>成功した場合に Transliterator オブジェクト、失敗した場合に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/transliterator.createinverse.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public function createInverse(): \Transliterator {}

	/**
	 * 直近のエラーコードを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この Transliterator の直近のエラーコードを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>成功した場合にエラーコードを返します。 エラーがない場合や失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/transliterator.geterrorcode.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public function getErrorCode(): int {}

	/**
	 * 直近のエラーメッセージを取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>この Transliterator の直近のエラーメッセージを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string <p>成功した場合にエラーメッセージを返します。 エラーがない場合や失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/transliterator.geterrormessage.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public function getErrorMessage(): string {}

	/**
	 * Transliterator の ID を取得する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>登録されている Transliterator ID の配列を返します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>成功した場合は登録されている Transliterator ID の配列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/transliterator.listids.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public static function listIDs(): array {}

	/**
	 * 文字列を音訳する
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列あるいはその一部をICU の音訳器を使って変換します。</p>
	 * @param string $subject <p>変換する文字列。</p>
	 * @param int $start <p>文字列の変換の開始位置を表すインデックス (UTF-16 コード単位) を指定します。指定した位置も、変換範囲に含まれます。 インデックスは 0 から始まります。この位置より前にあるテキストは、そのまま残ります。</p>
	 * @param int $end <p>文字列の変換の終了位置を表すインデックス (UTF-16 コード単位) を指定します。指定した位置は、変換範囲に含まれません。 インデックスは 0 から始まります。この位置も含めてそれ以降にあるテキストは、そのまま残ります。</p>
	 * @return string <p>成功した場合に変換後の文字列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/transliterator.transliterate.php
	 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
	 */
	public function transliterate(string $subject, int $start = NULL, int $end = NULL): string {}
}

/**
 * @link http://php.net/manual/ja/class.uconverter.php
 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
 */
class UConverter {

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const REASON_UNASSIGNED = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const REASON_ILLEGAL = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const REASON_IRREGULAR = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const REASON_RESET = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const REASON_CLOSE = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const REASON_CLONE = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const UNSUPPORTED_CONVERTER = -1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const SBCS = 0;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const DBCS = 1;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const MBCS = 2;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LATIN_1 = 3;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const UTF8 = 4;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const UTF16_BigEndian = 5;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const UTF16_LittleEndian = 6;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const UTF32_BigEndian = 7;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const UTF32_LittleEndian = 8;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const EBCDIC_STATEFUL = 9;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const ISO_2022 = 10;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_1 = 11;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_2 = 12;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_3 = 13;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_4 = 14;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_5 = 15;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_6 = 16;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_8 = 17;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_11 = 18;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_16 = 19;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_17 = 20;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_18 = 21;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_19 = 22;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const LMBCS_LAST = 22;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const HZ = 23;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const SCSU = 24;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const ISCII = 25;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const US_ASCII = 26;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const UTF7 = 27;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const BOCU1 = 28;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const UTF16 = 29;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const UTF32 = 30;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const CESU8 = 31;

	/**
	 * @var integer
	 * @link http://php.net/manual/ja/class.uconverter.php
	 */
	const IMAP_MAILBOX = 32;

	/**
	 * UConverter オブジェクトを作る
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $destination_encoding
	 * @param string $source_encoding
	 * @return self
	 * @link http://php.net/manual/ja/uconverter.construct.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function __construct(string $destination_encoding = NULL, string $source_encoding = NULL) {}

	/**
	 * ある文字セットから別の文字セットに文字列を変換する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $str
	 * @param bool $reverse
	 * @return string
	 * @link http://php.net/manual/ja/uconverter.convert.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function convert(string $str, bool $reverse = NULL): string {}

	/**
	 * デフォルトの "from" コールバック関数
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $reason
	 * @param string $source
	 * @param string $codePoint
	 * @param int $error
	 * @return mixed
	 * @link http://php.net/manual/ja/uconverter.fromucallback.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function fromUCallback(int $reason, string $source, string $codePoint, int &$error) {}

	/**
	 * 指定した名前のエイリアスを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $name
	 * @return array
	 * @link http://php.net/manual/ja/uconverter.getaliases.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function getAliases(string $name = NULL): array {}

	/**
	 * 利用可能なコンバーター名を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array
	 * @link http://php.net/manual/ja/uconverter.getavailable.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function getAvailable(): array {}

	/**
	 * 変換先エンコーディングを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link http://php.net/manual/ja/uconverter.getdestinationencoding.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getDestinationEncoding(): string {}

	/**
	 * 変換先のコンバーターの型を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return integer
	 * @link http://php.net/manual/ja/uconverter.getdestinationtype.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getDestinationType(): int {}

	/**
	 * 直近のエラーコードを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return integer
	 * @link http://php.net/manual/ja/uconverter.geterrorcode.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getErrorCode(): int {}

	/**
	 * 直近のエラーメッセージを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link http://php.net/manual/ja/uconverter.geterrormessage.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getErrorMessage(): string {}

	/**
	 * 変換元エンコーディングを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link http://php.net/manual/ja/uconverter.getsourceencoding.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getSourceEncoding(): string {}

	/**
	 * 変換元のコンバーターの型を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return integer
	 * @link http://php.net/manual/ja/uconverter.getsourcetype.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getSourceType(): int {}

	/**
	 * コンバーター名に対応する標準を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array
	 * @link http://php.net/manual/ja/uconverter.getstandards.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function getStandards(): array {}

	/**
	 * 置換文字を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return string
	 * @link http://php.net/manual/ja/uconverter.getsubstchars.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function getSubstChars(): string {}

	/**
	 * コールバックの理由を表す文字列を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $reason
	 * @return string
	 * @link http://php.net/manual/ja/uconverter.reasontext.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function reasonText(int $reason = NULL): string {}

	/**
	 * 変換先エンコーディングを設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $encoding
	 * @return void
	 * @link http://php.net/manual/ja/uconverter.setdestinationencoding.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function setDestinationEncoding(string $encoding): void {}

	/**
	 * 変換元エンコーディングを設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $encoding
	 * @return void
	 * @link http://php.net/manual/ja/uconverter.setsourceencoding.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function setSourceEncoding(string $encoding): void {}

	/**
	 * 置換文字を設定する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $chars
	 * @return void
	 * @link http://php.net/manual/ja/uconverter.setsubstchars.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function setSubstChars(string $chars): void {}

	/**
	 * デフォルトの "to" コールバック関数
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $reason
	 * @param string $source
	 * @param string $codeUnits
	 * @param int $error
	 * @return mixed
	 * @link http://php.net/manual/ja/uconverter.toucallback.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public function toUCallback(int $reason, string $source, string $codeUnits, int &$error) {}

	/**
	 * ある文字セットから別の文字セットに文字列を変換する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $str
	 * @param string $toEncoding
	 * @param string $fromEncoding
	 * @param array $options
	 * @return string
	 * @link http://php.net/manual/ja/uconverter.transcode.php
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
	 */
	public static function transcode(string $str, string $toEncoding, string $fromEncoding, array $options = NULL): string {}
}

/**
 * インデックスの情報を保持しつつ配列を並べ替える
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、インデックスと値の関係を保持したうえで配列を並べ替えます。 これを主に使用するのは、実際の並び順も重要となる連想配列です。 配列の要素には、現在のロケールの規則にしたがった並び順が適用されます。</p><p>PHP の標準関数 <code>asort()</code> と同等です。</p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @param array $arr <p>並べ替えたい文字列の配列。</p>
 * @param int $sort_flag <p>オプションの並べ替え方式。以下のいずれか。</p><ul> <li> <p><b><code>Collator::SORT_REGULAR</code></b> - 通常の比較 (型を変更しない)</p> </li> <li> <p><b><code>Collator::SORT_NUMERIC</code></b> - 数値としての比較</p> </li> <li> <p><b><code>Collator::SORT_STRING</code></b> - 文字列としての比較</p> </li> </ul> <p>デフォルトの $sort_flag の値は <b><code>Collator::SORT_REGULAR</code></b> です。 $sort_flag に無効な値が指定された場合も、このデフォルトを使用します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/collator.asort.php
 * @see collator_sort(), collator_sort_with_sort_keys()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_asort(\Collator $coll, array &$arr, int $sort_flag = NULL): bool {}

/**
 * ふたつの Unicode 文字列を比較する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>ふたつの Unicode 文字列を、比較規則にもとづいて比較します。</p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @param string $str1 <p>最初の文字列。</p>
 * @param string $str2 <p>2 番目の文字列。</p>
 * @return int <p>比較結果を返します。</p><ul> <li> <p><code>str1</code> が <code>str2</code> より <i>大きい</i> ときは 1</p> </li> <li> <p><code>str1</code> と <code>str2</code> が <i>等しい</i> ときは 0</p> </li> <li> <p><code>str1</code> が <code>str2</code> より <i>小さい</i> ときは -1</p> </li> </ul> エラー時には <code>boolean</code><b><code>FALSE</code></b> を返します。  <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/collator.compare.php
 * @see collator_sort()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_compare(\Collator $coll, string $str1, string $str2): int {}

/**
 * collator を作成する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>すでに指定しているオプションを用いて文字列を比較します。</p>
 * @param string $locale <p>照合規則を使用するロケール。特殊な場合として、 null を渡した場合はデフォルトのロケールの照合規則を使用します。 また、空文字列 ("") や "root" を渡した場合は » UCA の規則を使用します。</p>
 * @return Collator <p>新しい Collator オブジェクトのインスタンス、 あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/collator.create.php
 * @see Collator::__construct()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_create(string $locale): \Collator {}

/**
 * 照合用の属性の値を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>collator の属性の値を取得します。</p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @param int $attr <p>値を取得したい属性。</p>
 * @return int <p>属性の値、あるいはエラー時に <code>boolean</code> <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/collator.getattribute.php
 * @see collator_set_attribute(), collator_get_strength()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_get_attribute(\Collator $coll, int $attr): int {}

/**
 * collator の直近のエラーコードを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p></p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @return int <p>直近の Collator API 関数コールが返したエラーコードを返します。</p>
 * @link http://php.net/manual/ja/collator.geterrorcode.php
 * @see collator_get_error_message()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_get_error_code(\Collator $coll): int {}

/**
 * collator の直近のエラーコードのテキストを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近のエラーのメッセージを取得します。</p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @return string <p>直近の Collator API 関数コールで発生したエラーの説明を返します。</p>
 * @link http://php.net/manual/ja/collator.geterrormessage.php
 * @see collator_get_error_code()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_get_error_message(\Collator $coll): string {}

/**
 * collator のロケール名を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>collector のロケール名を取得します。</p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @param int $type <p>妥当なロケールか実際のロケール (それぞれ <b><code>Locale::VALID_LOCALE</code></b> および <b><code>Locale::ACTUAL_LOCALE</code></b>)。</p>
 * @return string <p>照合データの実際のロケール名を返します。ルールベースの collator のインスタンスの場合やエラーが発生した場合は <code>boolean</code> <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/collator.getlocale.php
 * @see collator_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_get_locale(\Collator $coll, int $type): string {}

/**
 * 文字列のソート用のキーを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列用の照合キーを返します。</p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @param string $str <p>キーの生成元となる文字列。</p>
 * @return string <p>文字列の照合キーを返します。照合キーを、文字列のかわりに直接比較することができます。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/collator.getsortkey.php
 * @see collator_sort(), collator_sort_with_sort_keys()
 * @since PHP 5 >= 5.3.11, PHP 7, PECL intl >= 1.0.3
 */
function collator_get_sort_key(\Collator $coll, string $str): string {}

/**
 * 現在の照合強度を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p></p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @return int <p>現在の照合強度、あるいはエラー時に <code>boolean</code> <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/collator.getstrength.php
 * @see collator_set_strength(), collator_get_attribute()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_get_strength(\Collator $coll): int {}

/**
 * 照合用の属性を設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p></p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @param int $attr <p>属性。</p>
 * @param int $val <p>属性の値。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/collator.setattribute.php
 * @see collator_get_attribute(), collator_set_strength()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_set_attribute(\Collator $coll, int $attr, int $val): bool {}

/**
 * 照合強度を設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>» ICU Collation Service は、多くの比較レベルをサポートしています ("レベル" という名前ですが、"強度" と呼ばれることもあります)。 これらのカテゴリを用いることで、ICU は、 各地域の規約にあわせた適切な文字列の並べ替えを正確に行えるようになります。 また、各段階を選択して採用することで、 テキスト内の文字列検索をさまざまな条件で行うことも可能になります。</p><p></p><p><i>第一段階 (Primary Level)</i>: 一般に、これは元となる文字自体の違いを表すものとして使用します (たとえば "a" &lt; "b")。これが、いちばん強い違いとなります。 たとえば、辞書などではこれを用いてセクション分けしています。 これは、レベル 1 の強度 (level1 strength) ともいいます。</p><p><i>第二段階 (Secondary Level)</i>: 文字のアクセント記号を、第二段階の違いとします (たとえば "as" &lt; "às" &lt; "at")。 言語によっては、その他の文字の違いも第二段階の違いとみなすこともあります。 文字列のどこかで第一段階の違いがある場合、第二段階の違いは無視します。 これは、レベル 2 の強度 (level2 strength) ともいいます。</p><p><b>注意</b>:</p><p>注意: 言語によっては (たとえばデンマーク語)、 アクセント記号は元の文字とは別の文字とみなすものもあります。 しかし、たいていの言語では、 アクセントなしの文字とアクセントつきの文字の違いは第二段階とみなします。</p><p><i>第三段階 (Tertiary Level)</i>: 大文字と小文字の違いを区別するのが第二段階の違いです (たとえば "ao" &lt; "Ao" &lt; "aò")。 さらに、ある文字とその派生形の違い (たとえば "A" と " ") も第三段階と判断します。さらに、カナの大文字と小文字の違い (訳注: たとえば "や" と "ゃ") もこの段階になります。 文字列のどこかで第一段階や第二段階の違いがある場合、 第三段階の違いは無視します。 これは、レベル 3 の強度 (level3 strength) ともいいます。</p><p><i>第四段階 (Quaternary Level)</i>: レベル 1 から 3 までで句読点を無視する場合 ("句読点の無視" を参照)、 追加の段階を使用して句読点つきの単語となしの単語を区別します (たとえば "ab" &lt; "a-b" &lt; "aB")。 どこかに第一段階や第二段階、第三段階の違いがある場合、 第四段階の違いは無視します。 これは、レベル 4 の強度 (level4 strength) ともいいます。 第四段階を使用するのは、句読点を無視する必要がある場合や 日本語のテキスト ("ひらがなの処理" を参照) を処理する場合のみです。</p><p><i>一致段階 (Identical Level)</i>: それ以外のすべてのレベルで等しかった場合に、最後の手段として一致段階を用います。 この段階で比較するのは、NFD 形式の文字列の Unicode コードポイントです。 レベル 1 から 4 までで違いがない場合にのみ比較します。 たとえば、ヘブライ語の朗誦記号 (cantillation mark) は、 この段階でしか識別できません。 この段階は慎重に使うようにしましょう。 ふたつの文字列でコードポイントの値のみが違うなどということは、 めったにないことだからです。 この段階を使用すると、(ソートキーの強度が上がるのと同時に) インクリメンタルな比較やソートキーの生成のパフォーマンスが劇的に低下します。 これは、レベル 5 の強度 (level5 strength) ともいいます。</p><p>たとえば、「アクセントを無視」したり「アクセントと大文字小文字の区別を無視」 したりしてテキストの検索を行いたいこともあります。 ほぼすべての文字は第三段階までで識別できるので、 大半のロケールではデフォルトの指定は第三段階となっています。 しかし、場合によっては第四段階の強度を使用することになります。 これを用いると、空白や句読点や記号など、 他の強度では無視されるような違いも識別するようになります。 文字の識別を非常に厳密に行うには、一致段階の強度を使用します (たとえばこれを使用すると、Mathematical Bold Small A と Mathematical Italic Small A が別の文字とみなされます)。 しかし、第三段階を超える強度を使用すると、 ソートキーが非常に長くなってしまい、 また同じ文字列に対する比較処理も非常に遅くなってしまいます。</p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @param int $strength <p>設定する強度。</p> <p>以下のいずれかです。</p><ul> <li> <p><b><code>Collator::PRIMARY</code></b></p> </li> <li> <p><b><code>Collator::SECONDARY</code></b></p> </li> <li> <p><b><code>Collator::TERTIARY</code></b></p> </li> <li> <p><b><code>Collator::QUATERNARY</code></b></p> </li> <li> <p><b><code>Collator::IDENTICAL</code></b></p> </li> <li> <p><b><code>Collator::DEFAULT_STRENGTH</code></b></p> </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/collator.setstrength.php
 * @see collator_get_strength()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_set_strength(\Collator $coll, int $strength): bool {}

/**
 * 指定した collator で配列を並べ替える
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、現在のロケールの規則にもとづいて配列を並べ替えます。</p><p>PHP の標準関数 <code>sort()</code> と同等です。</p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @param array $arr <p>並べ替えたい文字列の配列。</p>
 * @param int $sort_flag <p>オプションの並べ替え方式。以下のいずれか。</p> <p></p><ul> <li> <p><b><code>Collator::SORT_REGULAR</code></b> - 通常の比較 (型を変更しない)</p> </li> <li> <p><b><code>Collator::SORT_NUMERIC</code></b> - 数値としての比較</p> </li> <li> <p><b><code>Collator::SORT_STRING</code></b> - 文字列としての比較</p> </li> </ul> デフォルトの並べ替え方式は <b><code>Collator::SORT_REGULAR</code></b> です。<code>sort_flag</code> に無効な値を指定した場合もこの方式を使います。
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/collator.sort.php
 * @see collator_asort(), collator_sort_with_sort_keys()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_sort(\Collator $coll, array &$arr, int $sort_flag = NULL): bool {}

/**
 * 指定した collator とキーで配列を並べ替える
 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>collator_sort()</code> と似ていますが、 ucol_getSortKey() が作成した ICU ソートキーを用いることで 大きな配列をより高速に処理できます。</p>
 * @param \Collator $coll <p>Collator オブジェクト。</p>
 * @param array $arr <p>並べ替えたい文字列の配列。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/collator.sortwithsortkeys.php
 * @see collator_sort(), collator_asort()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function collator_sort_with_sort_keys(\Collator $coll, array &$arr): bool {}

/**
 * Date Formatter を作成する
 * <p>オブジェクト指向型</p><p>オブジェクト指向型 (コンストラクタ)</p><p>手続き型</p><p>Date Formatter を作成します。</p>
 * @param string $locale <p>フォーマットやパースの際に使用するロケール。<b><code>NULL</code></b> を指定すると、 ini 設定 intl.default_locale の値を使います。</p>
 * @param int $datetype <p>使用する日付の形式 (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>)。 IntlDateFormatter の定数 のいずれかとなります。 <b><code>NULL</code></b> を指定すると、ICU のデフォルトの日付型を使います。</p>
 * @param int $timetype <p>使用する時刻の形式 (<b><code>none</code></b>, <b><code>short</code></b>, <b><code>medium</code></b>, <b><code>long</code></b>, <b><code>full</code></b>)。 IntlDateFormatter の定数 のいずれかとなります。 <b><code>NULL</code></b> を指定すると、ICU のデフォルトの時刻型を使います。</p>
 * @param mixed $timezone <p>タイムゾーン ID。デフォルト (そして、<b><code>NULL</code></b> が渡されたときにも使われるもの) は <code>date_default_timezone_get()</code> が返す ID、あるいは <code>calendar</code> パラメータに IntlCalendar オブジェクトが渡されていればそのタイムゾーンを使います。 この ID は、ICU のデータベースにある妥当な識別子である必要があります。あるいは、 オフセットを明示した <i>GMT-05:30</i> のような形式になります。</p> <p>IntlTimeZone オブジェクトあるいは DateTimeZone オブジェクトも指定できます。</p>
 * @param mixed $calendar <p>フォーマットやパースの際に使用するカレンダー。デフォルトは <b><code>NULL</code></b> で、 これは <b><code>IntlDateFormatter::GREGORIAN</code></b> を表します。 IntlDateFormatter のカレンダー定数 あるいは IntlCalendar を指定します。 渡された IntlCalendar は、クローンされます。 IntlDateFormatter によって元のオブジェクトが書き換えられることはありません。 これは、利用するカレンダーの型 (グレゴリオ暦、イスラム暦、ペルシア暦など) の判定に使います。 また、<code>timezone</code> パラメータに <b><code>NULL</code></b> を指定した場合にはタイムゾーンの判定にも使います。</p>
 * @param string $pattern <p>フォーマットやパースの際に使用するオプションのパターン。 使えるパターンについては » http://userguide.icu-project.org/formatparse/datetime を参照ください。</p>
 * @return IntlDateFormatter <p>作成された IntlDateFormatter を返します。失敗した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.create.php
 * @see datefmt_format(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_create(string $locale, int $datetype, int $timetype, $timezone = NULL, $calendar = NULL, string $pattern = ""): \IntlDateFormatter {}

/**
 * 日付/時刻 の値を文字列としてフォーマットする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>時刻の値を文字列としてフォーマットします。</p>
 * @param \IntlDateFormatter $fmt <p>Date Formatter リソース。</p>
 * @param mixed $value <p>フォーマットする値。DateTime オブジェクト、 IntlCalendar オブジェクト、 epoch からの経過秒数を表す数値 (小数になる可能性もある)、 あるいは <code>localtime()</code> が出力する形式の配列となります。</p> <p>DateTime オブジェクトあるいは IntlCalendar オブジェクトを渡した場合は、 そのタイムゾーンは考慮しません。これらをフォーマットするときに使うのは、 フォーマッターで設定されているタイムゾーンです。 渡したオブジェクトのタイムゾーンを使って欲しい場合は、 <code>IntlDateFormatter::setTimeZone()</code> を呼んでそのオブジェクトのタイムゾーンを設定しておかなければいけません。 あるいは、静的関数 <code>IntlDateFormatter::formatObject()</code> をかわりに使ってもかまいません。</p>
 * @return string <p>フォーマットされた文字列、あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.format.php
 * @see datefmt_create(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message(), datefmt_format_object()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_format(\IntlDateFormatter $fmt, $value): string {}

/**
 * オブジェクトの書式を設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この関数は、IntlCalendar オブジェクトや DateTime オブジェクトをフォーマットします。その際、明示的に IntlDateFormatter オブジェクトを作る必要はありません。</p><p>一時的な IntlDateFormatter が作られ、 渡されたオブジェクトのタイムゾーンを受け取ります。PHP に組み込まれているタイムゾーンデータベースは使いません。 そのかわりに、ICU のタイムゾーンデータベースを使います。 したがって、DateTime オブジェクトで使うタイムゾーン ID は ICU のデータベースに存在するものでなければいけません。</p>
 * @param object $object <p>IntlCalendar あるいは DateTime 型のオブジェクト。 このオブジェクトの中のタイムゾーン情報を使います。</p>
 * @param mixed $format <p>日付/時刻のフォーマット方法。二つの要素からなる配列 (最初の要素が日付のスタイル、二番目の要素が時刻のスタイル。それぞれ、定数 <b><code>IntlDateFormatter::NONE</code></b>、 <b><code>IntlDateFormatter::SHORT</code></b>、 <b><code>IntlDateFormatter::MEDIUM</code></b>、 <b><code>IntlDateFormatter::LONG</code></b>、 <b><code>IntlDateFormatter::FULL</code></b> のいずれか)、 これらの定数のいずれかの値を表す long 型 (日付と時刻の両方に使います)、あるいは » ICU のドキュメント にあるフォーマットを表す文字列を指定します。<b><code>NULL</code></b> を渡した場合はデフォルトのスタイルを使います。</p>
 * @param string $locale <p>利用するロケール。<b><code>NULL</code></b> を渡した場合は デフォルトのロケール を使います。</p>
 * @return string <p>結果を文字列で返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.formatobject.php
 * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
 */
function datefmt_format_object(object $object, $format = NULL, string $locale = NULL): string {}

/**
 * IntlDateFormatter が使用するカレンダー型を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p></p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @return int <p>Formatter が使用する カレンダー型 を返します。 <b><code>IntlDateFormatter::TRADITIONAL</code></b> あるいは <b><code>IntlDateFormatter::GREGORIAN</code></b> です。</p>
 * @link http://php.net/manual/ja/intldateformatter.getcalendar.php
 * @see datefmt_get_calendar_object(), datefmt_set_calendar(), datefmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_get_calendar(\IntlDateFormatter $fmt): int {}

/**
 * カレンダーオブジェクトのコピーを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>このフォーマッターが内部的に使うカレンダーオブジェクトのコピーを取得します。 このカレンダーには型 (gregorian、japanese、buddhist、roc、persian、 islamic など) やタイムゾーンが設定されており、フォーマッターが使っている型やタイムゾーンと一致します。 オブジェクトの日付や時刻は指定されていません。</p>
 * @return IntlCalendar <p>このフォーマッターが内部的に使うカレンダーオブジェクトのコピーを返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.getcalendarobject.php
 * @see IntlDateFormatter::getCalendar(), IntlDateFormatter::setCalendar()
 * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
 */
function datefmt_get_calendar_object(): \IntlCalendar {}

/**
 * IntlDateFormatter が使用する日付形式を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>Formatter が使用する日付形式を返します。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @return int <p>Formatter の現在の 日付形式 の値を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.getdatetype.php
 * @see datefmt_get_timetype(), datefmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_get_datetype(\IntlDateFormatter $fmt): int {}

/**
 * 直近の操作のエラーコードを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の操作のエラーコードを取得します。 直近の数値フォーマット操作のエラーコードを返します。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @return int <p>エラーコードを返します。UErrorCode のいずれかの値となります。初期値は U_ZERO_ERROR です。</p>
 * @link http://php.net/manual/ja/intldateformatter.geterrorcode.php
 * @see datefmt_get_error_message(), intl_get_error_code(), intl_is_failure()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_get_error_code(\IntlDateFormatter $fmt): int {}

/**
 * 直近の操作のエラーテキストを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の操作のエラーテキストを取得します。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @return string <p>直近のエラーの説明を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.geterrormessage.php
 * @see datefmt_get_error_code(), intl_get_error_code(), intl_is_failure()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_get_error_message(\IntlDateFormatter $fmt): string {}

/**
 * Formatter が使用するロケールを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>Formatter が使用するロケールを取得します。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @param int $which
 * @return string <p>この Formatter のロケール、あるいはエラーの場合は 'false' を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.getlocale.php
 * @see datefmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_get_locale(\IntlDateFormatter $fmt, int $which = NULL): string {}

/**
 * IntlDateFormatter が使用するパターンを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>Formatter が使用するパターンを取得します。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @return string <p>フォーマット/パース 時に使用するパターン文字列を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.getpattern.php
 * @see datefmt_set_pattern(), datefmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_get_pattern(\IntlDateFormatter $fmt): string {}

/**
 * IntlDateFormatter が使用する時刻形式を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>Formatter が使用する時刻形式を返します。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @return int <p>Formatter の現在の 日付形式 の値を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.gettimetype.php
 * @see datefmt_get_datetype(), datefmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_get_timetype(\IntlDateFormatter $fmt): int {}

/**
 * タイムゾーンを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンを表す IntlTimeZone オブジェクトを返します。 このオブジェクトで日付や時刻をフォーマットするときに、このタイムゾーンを使います。 IntlCalendar や DateTime オブジェクトをこの IntlDateFormatter でフォーマットするときに使うタイムゾーンは、 このメソッドが返すものとなります。フォーマットしようとしているオブジェクトのタイムゾーンではありません。</p>
 * @return IntlTimeZone <p>IntlTimeZone オブジェクトを返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.gettimezone.php
 * @see IntlDateFormatter::getTimeZoneId(), IntlDateFormatter::setTimeZone()
 * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
 */
function datefmt_get_timezone(): \IntlTimeZone {}

/**
 * IntlDateFormatter が使用するタイムゾーン ID を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>IntlDateFormatter が使用するタイムゾーン ID を取得します。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @return string <p>この Formatter が使用するタイムゾーンの ID 文字列を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.gettimezoneid.php
 * @see datefmt_set_timezone_id(), datefmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_get_timezone_id(\IntlDateFormatter $fmt): string {}

/**
 * IntlDateFormatter で使用する寛大さを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>パターンに正確にマッチしていない入力の処理を、 パーサが厳格に行うのか寛大に行うのかを調べます。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @return bool <p>寛大なパーサの場合は <b><code>TRUE</code></b>、厳格なパーサの場合は <b><code>FALSE</code></b> 返します。 デフォルトのパーサは寛大なパーサです。</p>
 * @link http://php.net/manual/ja/intldateformatter.islenient.php
 * @see datefmt_set_lenient(), datefmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_is_lenient(\IntlDateFormatter $fmt): bool {}

/**
 * 文字列をパースして、フィールドベースの時刻値にする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列 $value を変換し、フィールドベースの時刻値 (各フィールドを含む配列) にします。$parse_pos からパースを開始し、入力値を可能な限り使用します。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @param string $value <p>時間に変換する文字列。</p>
 * @param int $position <p>$value のパースを開始する位置 (ゼロから数えます)。 $value を処理する前にエラーが発生していない場合は $parse_pos は -1 となります。それ以外の場合はパースが終了した位置となります (そしてエラーが発生します)。 この変数には、パースが失敗した場合にその終了位置が含まれます。 $parse_pos &gt; strlen($value) の場合、パースは即時に失敗します。</p>
 * @return array <p>Localtime 互換の、整数値の配列を返します。 tm_hour フィールド内の、24 時間制の時刻の値を含みます。</p>
 * @link http://php.net/manual/ja/intldateformatter.localtime.php
 * @see datefmt_create(), datefmt_format(), datefmt_parse(), datefmt_get_error_code(), datefmt_get_error_message()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_localtime(\IntlDateFormatter $fmt, string $value, int &$position = NULL): array {}

/**
 * 文字列をパースしてタイムスタンプにする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列 $value を時間に変換します。$parse_pos からパースを開始し、 入力値を可能な限り使用します。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @param string $value <p>時間に変換する文字列。</p>
 * @param int $position <p>$value のパースを開始する位置 (ゼロから数えます)。 $value を処理する前にエラーが発生していない場合は $parse_pos は -1 となります。それ以外の場合はパースが終了した位置となります (そしてエラーが発生します)。 この変数には、パースが失敗した場合にその終了位置が含まれます。 $parse_pos &gt; strlen($value) の場合、パースは即時に失敗します。</p>
 * @return int <p>タイムスタンプとしてパースされた値を返します。 パースできなかった場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.parse.php
 * @see datefmt_create(), datefmt_format(), datefmt_localtime(), datefmt_get_error_code(), datefmt_get_error_message()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_parse(\IntlDateFormatter $fmt, string $value, int &$position = NULL): int {}

/**
 * Formatter が使うカレンダー型を設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>このフォーマッターが使用するカレンダーあるいはカレンダー型を設定します。</p>
 * @param \IntlDateFormatter $fmt <p>フォーマッターリソース。</p>
 * @param mixed $which <p>使用する カレンダー型 (デフォルトは <b><code>IntlDateFormatter::GREGORIAN</code></b> で、 <b><code>NULL</code></b> を指定した場合にもこれを使います)、あるいは IntlCalendar オブジェクト。</p> <p>IntlCalendar オブジェクトが渡された場合は、それをクローンします。 引数として渡したオブジェクトは、何も変更されません。</p> <p>フォーマッターのタイムゾーンを残すのは IntlCalendar オブジェクトが渡されなかった場合だけで、 このオブジェクトが渡された場合は新しいタイムゾーンを利用します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.setcalendar.php
 * @see datefmt_get_calendar(), datefmt_get_calendar_object(), datefmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_set_calendar(\IntlDateFormatter $fmt, $which): bool {}

/**
 * パーサの寛大さを設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>パターンに正確にマッチしていない入力の処理を、 パーサが厳格に行うのか寛大に行うのかを定義します。 寛大なパースを有効にすると、日付や時刻のパターンに不備がある場合でも 可能な限り値を取得しようと試みます。余計な空白があったり 理解不能なトークンがあったり、あるいは値が無効な場合 ("Feburary 30th") は処理できません。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @param bool $lenient <p>パーサを寛大なものにするかどうか。デフォルトは <b><code>TRUE</code></b> (寛大) です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.setlenient.php
 * @see datefmt_is_lenient(), datefmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_set_lenient(\IntlDateFormatter $fmt, bool $lenient): bool {}

/**
 * IntlDateFormatter が使用するパターンを設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>IntlDateFormatter が使用するパターンを取得します。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @param string $pattern <p>使用するパターン文字列。 使えるパターンについては » http://userguide.icu-project.org/formatparse/datetime を参照ください。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 間違ったフォーマット文字列を指定すると、失敗します。</p>
 * @link http://php.net/manual/ja/intldateformatter.setpattern.php
 * @see datefmt_get_pattern(), datefmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function datefmt_set_pattern(\IntlDateFormatter $fmt, string $pattern): bool {}

/**
 * タイムゾーンを設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>タイムゾーンを設定します。このオブジェクトを使って日付や時刻をフォーマットするときに、このタイムゾーンを使います。</p>
 * @param mixed $zone <p>利用するタイムゾーン。次の形式で指定できます。</p> <ul> <li> <p><b><code>NULL</code></b>。この場合はデフォルトのタイムゾーンを使います。デフォルトは、ini 項目 date.timezone で設定したものか、 <code>date_default_timezone_set()</code> 関数で指定したもの (そして <code>date_default_timezone_get()</code> が返すもの) になります。</p> </li> <li> <p>IntlTimeZone。これを直接使います。</p> </li> <li> <p>DateTimeZone。その識別子を取り出して、ICU タイムゾーンオブジェクトを作ります。 つまり、これは ICU のデータベースに基づくタイムゾーンとなり、PHP のタイムゾーンデータベースに基づくものではありません。</p> </li> <li> <p>文字列。ICU タイムゾーン識別子として有効なものを指定します。 <code>IntlTimeZone::createTimeZoneIDEnumeration()</code> を参照ください。 <i>"GMT+08:30"</i> などのオフセットも指定できます。</p> </li> </ul>
 * @return boolean <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.settimezone.php
 * @see IntlDateFormatter::getTimeZone()
 * @since PHP 5 >= 5.5.0, PHP 7, PECL intl >= 3.0.0
 */
function datefmt_set_timezone($zone): bool {}

/**
 * 使用するタイムゾーンを設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>使用するタイムゾーンを設定します。</p>
 * @param \IntlDateFormatter $fmt <p>Formatter リソース。</p>
 * @param string $zone <p>使用するタイムゾーンのゾーン ID 文字列。 <b><code>NULL</code></b> あるいは空文字列を指定すると、 実行時のデフォルトタイムゾーンを使用します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/intldateformatter.settimezoneid.php
 * @see datefmt_get_timezone_id(), datefmt_create()
 * @since PHP 5 >= 5.3.0, PECL intl >= 1.0.0
 */
function datefmt_set_timezone_id(\IntlDateFormatter $fmt, string $zone): bool {}

/**
 * デフォルトの書記素クラスタシーケンスをテキストバッファから取り出す関数。 テキストは UTF-8 でエンコードされている必要があります
 * <p>手続き型</p><p>デフォルトの書記素クラスタシーケンスをテキストバッファから取り出す関数です。 テキストは UTF-8 でエンコードされている必要があります。</p>
 * @param string $haystack <p>検索する文字列。</p>
 * @param int $size <p>返す項目 ($extract_type に基づく) の最大数。</p>
 * @param int $extract_type <p>$size パラメータの単位の形式を指定します。</p> <p></p><ul> <li>GRAPHEME_EXTR_COUNT (default) - $size は、 抽出するデフォルト書記素クラスタの数です。</li> <li>GRAPHEME_EXTR_MAXBYTES - $size は、返すバイト数の最大値です。</li> <li>GRAPHEME_EXTR_MAXCHARS - $size は、返す UTF-8 文字数の最大値です。</li> </ul>
 * @param int $start <p>$haystack 内での開始位置をバイト数で指定します。 指定する場合は、0 から $haystack のバイト数までの値でなければなりません。 負の値を指定すると、$haystack の末尾からバイト数を数えます。 $start が指す位置が UTF-8 文字の先頭バイトでない場合は、 その次の文字の先頭から開始します。</p>
 * @param int $next <p>次の開始位置への参照が設定されます。 この関数をコールすると、文字列の最後の部分の先頭バイトを指すことになります。</p>
 * @return string <p>オフセット $start から始まり、 指定した $size と $extract_type を満たす、 デフォルトの書記素クラスタバウンダリで終わる文字列を返します。</p>
 * @link http://php.net/manual/ja/function.grapheme-extract.php
 * @see grapheme_substr()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function grapheme_extract(string $haystack, int $size, int $extract_type = NULL, int $start = 0, int &$next = NULL): string {}

/**
 * 大文字小文字を区別せず、文字列内で最初にあらわれる場所の (書記素単位の) 位置を見つける
 * <p>手続き型</p><p>大文字小文字を区別せず、文字列内で最初にあらわれる場所の (書記素単位の) 位置を見つけます。</p>
 * @param string $haystack <p>探す対象となる文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param string $needle <p>探したい文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param int $offset <p>オプションの $offset パラメータで、$haystack のどの位置 (バイト数や文字数ではなく、書記素単位) から探し始めるのかを指定します。 負の値を指定した場合は、文字列の末尾からのオフセットとみなします。 $offset の値にかかわらず、返される値は常に haystack の先頭からの位置になります。</p>
 * @return int <p>位置を表す整数値を返します。needle が見つからない場合は grapheme_stripos() は FALSE を返します。</p>
 * @link http://php.net/manual/ja/function.grapheme-stripos.php
 * @see grapheme_stristr(), grapheme_strpos(), grapheme_strripos(), grapheme_strrpos(), grapheme_strstr()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function grapheme_stripos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * 大文字小文字を区別せず、haystack 文字列の中で needle が最初に登場した場所以降の部分文字列を返す
 * <p>手続き型</p><p>大文字小文字を区別せず、haystack 文字列の中で needle が最初に登場した場所を含めてそれ以降の部分文字列を返します。</p>
 * @param string $haystack <p>入力文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param string $needle <p>探したい文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param bool $before_needle <p><b><code>TRUE</code></b> の場合、grapheme_strstr() は needle が最初に登場した場所より前の部分文字列を返します (needle は含めません)。</p>
 * @return string <p>$haystack の部分文字列、あるいは $needle が見つからなかった場合に FALSE を返します。</p>
 * @link http://php.net/manual/ja/function.grapheme-stristr.php
 * @see grapheme_stripos(), grapheme_strpos(), grapheme_strripos(), grapheme_strrpos(), grapheme_strstr()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function grapheme_stristr(string $haystack, string $needle, bool $before_needle = false): string {}

/**
 * 書記素単位で文字列の長さを取得する
 * <p>手続き型</p><p>書記素単位 (バイト数や文字数ではありません) で文字列の長さを取得します。</p>
 * @param string $input <p>長さを調べたい文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @return int <p>成功した場合に文字列の長さ。文字列が空の場合に 0 を返します。</p>
 * @link http://php.net/manual/ja/function.grapheme-strlen.php
 * @see iconv_strlen(), mb_strlen(), strlen()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function grapheme_strlen(string $input): int {}

/**
 * 文字列内で最初にあらわれる場所の (書記素単位の) 位置を見つける
 * <p>手続き型</p><p>文字列内で最初にあらわれる場所の (書記素単位の) 位置を見つけます。</p>
 * @param string $haystack <p>探す対象となる文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param string $needle <p>探したい文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param int $offset <p>オプションの $offset パラメータで、$haystack のどの位置 (バイト数や文字数ではなく、書記素単位) から探し始めるのかを指定します。 負のオフセットは、文字列の末尾からのオフセットと解釈されます。 $offset の値にかかわらず、返される値は常に haystack の先頭からの位置になります。</p>
 * @return int <p>位置を表す整数値を返します。needle が見つからない場合は grapheme_strpos() は FALSE を返します。</p>
 * @link http://php.net/manual/ja/function.grapheme-strpos.php
 * @see grapheme_stripos(), grapheme_stristr(), grapheme_strripos(), grapheme_strrpos(), grapheme_strstr()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function grapheme_strpos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * 大文字小文字を区別せず、文字列内で最後にあらわれる場所の (書記素単位の) 位置を見つける
 * <p>手続き型</p><p>大文字小文字を区別せず、文字列内で最後にあらわれる場所の (書記素単位の) 位置を見つけます。</p>
 * @param string $haystack <p>探す対象となる文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param string $needle <p>探したい文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param int $offset <p>オプションの $offset パラメータで、$haystack のどの位置 (バイト数や文字数ではなく、書記素単位) から探し始めるのかを指定します。 $offset の値にかかわらず、返される値は常に haystack の先頭からの位置になります。</p>
 * @return int <p>位置を表す整数値を返します。needle が見つからない場合は grapheme_strripos() は FALSE を返します。</p>
 * @link http://php.net/manual/ja/function.grapheme-strripos.php
 * @see grapheme_stripos(), grapheme_stristr(), grapheme_strpos(), grapheme_strrpos(), grapheme_strstr()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function grapheme_strripos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * 文字列内で最後にあらわれる場所の (書記素単位の) 位置を見つける
 * <p>手続き型</p><p>文字列内で最後にあらわれる場所の (書記素単位の) 位置を見つけます。</p>
 * @param string $haystack <p>探す対象となる文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param string $needle <p>探したい文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param int $offset <p>オプションの $offset パラメータで、$haystack のどの位置 (バイト数や文字数ではなく、書記素単位) から探し始めるのかを指定します。 $offset の値にかかわらず、返される値は常に haystack の先頭からの位置になります。</p>
 * @return int <p>位置を表す整数値を返します。needle が見つからない場合は grapheme_strrpos() は FALSE を返します。</p>
 * @link http://php.net/manual/ja/function.grapheme-strrpos.php
 * @see grapheme_stripos(), grapheme_stristr(), grapheme_strpos(), grapheme_strripos(), grapheme_strstr()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function grapheme_strrpos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * haystack 文字列の中で、needle が最初に登場した場所以降の部分文字列を返す
 * <p>手続き型</p><p>haystack 文字列の中で needle が最初に登場した場所を含めてそれ以降の部分文字列を返します。</p>
 * @param string $haystack <p>入力文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param string $needle <p>探したい文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param bool $before_needle <p><b><code>TRUE</code></b> の場合、grapheme_strstr() は needle が最初に登場した場所より前の部分文字列を返します (needle は含めません)。</p>
 * @return string <p>部分文字列、あるいは needle が見つからなかった場合に FALSE を返します。</p>
 * @link http://php.net/manual/ja/function.grapheme-strstr.php
 * @see grapheme_stristr(), grapheme_stripos(), grapheme_strpos(), grapheme_strripos(), grapheme_strrpos()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function grapheme_strstr(string $haystack, string $needle, bool $before_needle = false): string {}

/**
 * 部分文字列を返す
 * <p>手続き型</p><p>部分文字列を返します。</p>
 * @param string $string <p>入力文字列。正しい形式の UTF-8 でなければなりません。</p>
 * @param int $start <p>デフォルトの書記素単位での開始位置。 $start がゼロ以上である場合は、$string の $start 番目の位置から始まる文字列を返します。位置はゼロから数え始めます。 $start が負の場合は、文字列の末尾から数えて $start 番目 (書記素単位) の位置以降の文字列を返します。</p>
 * @param int $length <p>長さを書記素単位で指定します。 $length が正の値の場合は、$start から数えて最大 $length 文字までの文字列を返します (文字列全体の長さによって変わります)。 $length が負の値の場合は、文字列の末尾から多くの書記素が削除されます (start が負の場合にはまず開始位置を算出してから行います)。 $start がこの削除された場所以降になる場合は、<b><code>FALSE</code></b> を返します。</p>
 * @return string <p>$string の部分文字列を返します。</p>
 * @link http://php.net/manual/ja/function.grapheme-substr.php
 * @see grapheme_extract()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function grapheme_substr(string $string, int $start, int $length = NULL): string {}

/**
 * ドメイン名をIDNAのASCII形式に変換する
 * <p>手続き型</p><p>Unicode のドメイン名を、IDNAが定めたASCII形式に変換します。</p>
 * @param string $domain <p>変換するドメイン名。UTF-8 にエンコードされている必要があります。</p>
 * @param int $options <p>変換オプション - IDNA_ ではじまる定数 (IDNA_ERROR_&#42; 定数を除く) の組み合わせです。</p>
 * @param int $variant <p>IDNA 2003 の場合は <b><code>INTL_IDNA_VARIANT_2003</code></b>、あるいは UTS #46 の場合は <b><code>INTL_IDNA_VARIANT_UTS46</code></b>。</p>
 * @param array $idna_info <p>このパラメータを使うのは、<code>variant</code> が <b><code>INTL_IDNA_VARIANT_UTS46</code></b> の場合だけです。 このとき、このパラメータには <i>'result'</i>、 <i>'isTransitionalDifferent'</i>、そして <i>'errors'</i> の三つのキーを含む配列が入ります。 <i>'result'</i> にはおそらく不正だと考えられる変換結果、 <i>'isTransitionalDifferent'</i> には UTS #46 の非移行的な機能を使って結果を変更したかどうかをあらわす boolean 値、そして <i>'errors'</i> はエラー定数 IDNA_ERROR_&#42; のビットセットを表します。</p>
 * @return string <p>IDNA のASCII形式でエンコードされたドメイン名。失敗した場合に <b><code>FALSE</code></b> を返します</p>
 * @link http://php.net/manual/ja/function.idn-to-ascii.php
 * @see idn_to_utf8()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.2, PECL idn >= 0.1
 */
function idn_to_ascii(string $domain, int $options = 0, int $variant = INTL_IDNA_VARIANT_2003, array &$idna_info = NULL): string {}

/**
 * IDNAのASCII方式でエンコードされたドメイン名をUnicodeに変換する
 * <p>手続き型</p><p>IDNAのASCII方式でエンコードされたドメイン名をUTF-8でエンコードされたUnicodeに変換します。</p>
 * @param string $domain <p>IDNAのASCII方式でエンコードされた、変換対象のドメイン名</p>
 * @param int $options <p>変換オプション - IDNA_ ではじまる定数 (IDNA_ERROR_&#42; 定数を除く) の組み合わせです</p>
 * @param int $variant <p>IDNA 2003 の場合は <b><code>INTL_IDNA_VARIANT_2003</code></b>、あるいは UTS #46 の場合は <b><code>INTL_IDNA_VARIANT_UTS46</code></b>。</p>
 * @param array $idna_info <p>このパラメータを使うのは、<code>variant</code> が <b><code>INTL_IDNA_VARIANT_UTS46</code></b> の場合だけです。 このとき、このパラメータには <i>'result'</i>、 <i>'isTransitionalDifferent'</i>、そして <i>'errors'</i> の三つのキーを含む配列が入ります。 <i>'result'</i> にはおそらく不正だと考えられる変換結果、 <i>'isTransitionalDifferent'</i> には UTS #46 の非移行的な機能を使って結果を変更したかどうかをあらわす boolean 値、そして <i>'errors'</i> はエラー定数 IDNA_ERROR_&#42; のビットセットを表します。</p>
 * @return string <p>Unicodeのドメイン名。UTF-8 にエンコードされています。失敗した場合に <b><code>FALSE</code></b> を返します</p>
 * @link http://php.net/manual/ja/function.idn-to-utf8.php
 * @see idn_to_ascii()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.2, PECL idn >= 0.1
 */
function idn_to_utf8(string $domain, int $options = 0, int $variant = INTL_IDNA_VARIANT_2003, array &$idna_info = NULL): string {}

/**
 * 指定したエラーコードに対応する名前を取得する
 * <p>ICU のエラーコード名を返します。</p>
 * @param int $error_code <p>ICU のエラーコード。</p>
 * @return string <p>エラーコード定数と同じ名前の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.intl-error-name.php
 * @see intl_is_failure(), intl_get_error_code(), intl_get_error_message()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function intl_error_name(int $error_code): string {}

/**
 * このオブジェクトの直近のエラーコードを取得する
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return ReturnType
 * @link http://php.net/manual/ja/intlbreakiterator.geterrorcode.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function intl_get_error_code(): \ReturnType {}

/**
 * このオブジェクトの直近のエラーメッセージを取得する
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return ReturnType
 * @link http://php.net/manual/ja/intlbreakiterator.geterrormessage.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function intl_get_error_message(): \ReturnType {}

/**
 * 指定したエラーコードが失敗を表すかどうかを調べる
 * @param int $error_code <p><code>intl_get_error_code()</code> や <code>collator_get_error_code()</code> が返す値。</p>
 * @return bool <p>そのコードが何らかの失敗を意味する場合に <b><code>TRUE</code></b>、 成功あるいは警告を意味する場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.intl-is-failure.php
 * @see intl_get_error_code(), collator_get_error_code(), Collator-getErrorCode()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function intl_is_failure(int $error_code): bool {}

/**
 * Get last error code on the object
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns the numeric ICU error code for the last call on this object (including cloning) or the IntlCalendar given for the <code>calendar</code> parameter (in the procedural‒style version). This may indicate only a warning (negative error code) or no error at all (<b><code>U_ZERO_ERROR</code></b>). The actual presence of an error can be tested with <code>intl_is_failure()</code>.</p><p>Invalid arguments detected on the PHP side (before invoking functions of the ICU library) are not recorded for the purposes of this function.</p><p>The last error that occurred in any call to a function of the intl extension, including early argument errors, can be obtained with <code>intl_get_error_code()</code>. This function resets the global error code, but not the objectʼs error code.</p>
 * @param \IntlCalendar $calendar <p>The calendar object, on the procedural style interface.</p>
 * @return int <p>An ICU error code indicating either success, failure or a warning.</p>
 * @link http://php.net/manual/ja/intlcalendar.geterrorcode.php
 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
 */
function intlcal_get_error_code(\IntlCalendar $calendar): int {}

/**
 * Get last error message on the object
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns the error message (if any) associated with the error reported by <code>IntlCalendar::getErrorCode()</code> or <code>intlcal_get_error_code()</code>. If there is no associated error message, only the string representation of the name of the error constant will be returned. Otherwise, the message also includes a message set on the side of the PHP binding.</p>
 * @param \IntlCalendar $calendar <p>The calendar object, on the procedural style interface.</p>
 * @return string <p>The error message associated with last error that occurred in a function call on this object, or a string indicating the non-existance of an error.</p>
 * @link http://php.net/manual/ja/intlcalendar.geterrormessage.php
 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
 */
function intlcal_get_error_message(\IntlCalendar $calendar): string {}

/**
 * 直近のエラーコードを取得する
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return integer
 * @link http://php.net/manual/ja/intltimezone.geterrorcode.php
 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
 */
function intltz_get_error_code(): int {}

/**
 * 直近のエラーメッセージを取得する
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return string
 * @link http://php.net/manual/ja/intltimezone.geterrormessage.php
 * @since PHP 5 >= 5.5.0, PHP 7, PECL >= 3.0.0a1
 */
function intltz_get_error_message(): string {}

/**
 * 最もあてはまるロケールを HTTP "Accept-Language" ヘッダにもとづいて探す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>HTTP "Accept-Language" ヘッダが要求する言語リストを満たすロケールを探します。</p>
 * @param string $header <p>"Accept-Language" ヘッダを含む文字列。RFC 2616 形式。</p>
 * @return string <p>対応するロケール ID を返します。</p>
 * @link http://php.net/manual/ja/locale.acceptfromhttp.php
 * @see locale_lookup()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_accept_from_http(string $header): string {}

/**
 * ロケール文字列を正規化する
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $locale
 * @return string
 * @link http://php.net/manual/ja/locale.canonicalize.php
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_canonicalize(string $locale): string {}

/**
 * 正しく並べ替えて区切られたロケール ID を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>正しく並べ替えて区切られたロケール ID を返します。 キーが特定のロケール ID サブタグを表し、 サブタグの値がそのキーに対応する値となります。</p>
 * @param array $subtags <p>キーと値のペアを含む配列。 キーには特定のロケール ID サブタグを指定し、 そのサブタグの値を関連付けます。</p> <p><b>注意</b>:</p> <p>サブタグ 'variant' と 'private' には最大で 15 の値を指定できますが、 'extlang' には最大で 3 つの値しか指定できません。 variant には 0 から 14 までのサフィックスをつけることができ、 配列のキーは variant0, variant1, ...,variant14 となります。 返されるロケール ID において、このサブタグは variant0、variant1、variant2、……の順に並びます。</p> <p>'variant'、'private' および 'extlang' で複数の値を指定するには、 そのキー (例 'variant') の値に配列を指定するか、数字つきの複数のキー (例 'variant0'、'variant1' など) を使用します。</p>
 * @return string <p>対応するロケール識別子を返します。</p>
 * @link http://php.net/manual/ja/locale.composelocale.php
 * @see locale_parse()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_compose(array $subtags): string {}

/**
 * 言語タグフィルタがロケールにマッチするかどうかを調べる
 * <p>オブジェクト指向型</p><p>手続き型</p><p>$langtag フィルタが $locale でマッチするかどうかを RFC 4647 の基本フィルタリングアルゴリズムで調べます。</p>
 * @param string $langtag <p>調べたい言語タグ。</p>
 * @param string $locale <p>調べる対象となる言語の範囲。</p>
 * @param bool $canonicalize <p>true の場合は、引数を正式な形式に変換してからマッチを行います。</p>
 * @return bool <p>$locale が $langtag にマッチする場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/locale.filtermatches.php
 * @see locale_lookup()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_filter_matches(string $langtag, string $locale, bool $canonicalize = false): bool {}

/**
 * 入力ロケールの変化系を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの変化系を取得します。</p>
 * @param string $locale <p>変化系を取得したいロケール。</p>
 * @return array <p>そのロケールのすべての variant サブタグを含む配列、あるいは存在しない場合に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/locale.getallvariants.php
 * @see locale_get_primary_language(), locale_get_script(), locale_get_region()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_get_all_variants(string $locale): array {}

/**
 * INTL のグローバル 'default_locale' からデフォルトのロケールを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>デフォルトのロケールの値を取得します。PHP の国際化においては、 この値は php.ini の 'intl.default_locale' の値となります。 この値が存在しない場合は ICU の関数 uloc_getDefault() で取得します。</p>
 * @return string <p>現在の実行時ロケールを返します。</p>
 * @link http://php.net/manual/ja/locale.getdefault.php
 * @see locale_set_default()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_get_default(): string {}

/**
 * 入力ロケールの言語の表示名を、適切に地域化して返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの言語の表示名を、適切に地域化して返します。 <b><code>NULL</code></b> の場合はデフォルトのロケールを使用します。</p>
 * @param string $locale <p>表示言語を返したいロケール。</p>
 * @param string $in_locale <p>オプションのフォーマットロケール。 言語名の表示に使用します。</p>
 * @return string <p>$locale に対応する言語の表示名を、 $in_locale にあわせた形式で返します。</p>
 * @link http://php.net/manual/ja/locale.getdisplaylanguage.php
 * @see locale_get_display_name(), locale_get_display_script(), locale_get_display_region(), locale_get_display_variant()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_get_display_language(string $locale, string $in_locale = NULL): string {}

/**
 * 入力ロケールの表示名を、適切に地域化して返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの表示名を、適切に地域化して返します。 <b><code>NULL</code></b> の場合はデフォルトのロケールを使用します。</p>
 * @param string $locale <p>表示名を返したいロケール。</p>
 * @param string $in_locale <p>オプションのフォーマットロケール。</p>
 * @return string <p>ロケールの表示名を、 $in_locale にあわせた形式で返します。</p>
 * @link http://php.net/manual/ja/locale.getdisplayname.php
 * @see locale_get_display_language(), locale_get_display_script(), locale_get_display_region(), locale_get_display_variant()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_get_display_name(string $locale, string $in_locale = NULL): string {}

/**
 * 入力ロケールの地域の表示名を、適切に地域化して返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの地域の表示名を、適切に地域化して返します。 <b><code>NULL</code></b> の場合はデフォルトのロケールを使用します。</p>
 * @param string $locale <p>表示地域を返したいロケール。</p>
 * @param string $in_locale <p>オプションのフォーマットロケール。 地域名の表示に使用します。</p>
 * @return string <p>$locale に対応する地域の表示名を、 $in_locale にあわせた形式で返します。</p>
 * @link http://php.net/manual/ja/locale.getdisplayregion.php
 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_script(), locale_get_display_variant()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_get_display_region(string $locale, string $in_locale = NULL): string {}

/**
 * 入力ロケールの文字の表示名を、適切に地域化して返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの文字の表示名を、適切に地域化して返します。 <b><code>NULL</code></b> の場合はデフォルトのロケールを使用します。</p>
 * @param string $locale <p>表示文字を返したいロケール。</p>
 * @param string $in_locale <p>オプションのフォーマットロケール。 文字名の表示に使用します。</p>
 * @return string <p>$locale に対応する文字の表示名を、 $in_locale にあわせた形式で返します。</p>
 * @link http://php.net/manual/ja/locale.getdisplayscript.php
 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_region(), locale_get_display_variant()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_get_display_script(string $locale, string $in_locale = NULL): string {}

/**
 * 入力ロケールの変化形の表示名を、適切に地域化して返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの変化形の表示名を、適切に地域化して返します。 <b><code>NULL</code></b> の場合はデフォルトのロケールを使用します。</p>
 * @param string $locale <p>表示変化形を返したいロケール。</p>
 * @param string $in_locale <p>オプションのフォーマットロケール。 変化形の表示に使用します。</p>
 * @return string <p>$locale に対応する変化形の表示名を、 $in_locale にあわせた形式で返します。</p>
 * @link http://php.net/manual/ja/locale.getdisplayvariant.php
 * @see locale_get_display_name(), locale_get_display_language(), locale_get_display_script(), locale_get_display_region()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_get_display_variant(string $locale, string $in_locale = NULL): string {}

/**
 * 入力ロケールのキーワードを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールのキーワードを取得します。</p>
 * @param string $locale <p>キーワードを取り出したいロケール。</p>
 * @return array <p>このロケールのキーワードと値のペアを連想配列で返します。</p>
 * @link http://php.net/manual/ja/locale.getkeywords.php
 * @see locale_get_all_variants()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_get_keywords(string $locale): array {}

/**
 * 入力ロケールのプライマリ言語を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールのプライマリ言語を取得します。</p>
 * @param string $locale <p>プライマリ言語コードを取り出したいロケール。</p>
 * @return string <p>このロケールの言語コード、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/locale.getprimarylanguage.php
 * @see locale_get_script(), locale_get_region(), locale_get_all_variants()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_get_primary_language(string $locale): string {}

/**
 * 入力ロケールの地域を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの地域を取得します。</p>
 * @param string $locale <p>地域コードを取り出したいロケール。</p>
 * @return string <p>このロケールの地域サブタグ、あるいは存在しない場合に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/locale.getregion.php
 * @see locale_get_primary_language(), locale_get_script(), locale_get_all_variants()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_get_region(string $locale): string {}

/**
 * 入力ロケールの文字を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力ロケールの文字を取得します。</p>
 * @param string $locale <p>文字を取り出したいロケール。</p>
 * @return string <p>このロケールの文字サブタグ、あるいは存在しない場合に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/locale.getscript.php
 * @see locale_get_primary_language(), locale_get_region(), locale_get_all_variants()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_get_script(string $locale): string {}

/**
 * その言語にマッチする言語タグの一覧を検索する
 * <p>オブジェクト指向型</p><p>手続き型</p><p><code>langtag</code> の中から、 <code>locale</code> で指定した言語の範囲に最もマッチするものを RFC 4647 の検索アルゴリズムで調べます。</p>
 * @param array $langtag <p><code>locale</code> と比較したい言語タグの一覧を含む配列。 最大で 100 件まで指定できます。</p>
 * @param string $locale <p>調べる対象となる言語の範囲として使用するロケール。</p>
 * @param bool $canonicalize <p>true の場合は、引数を正式な形式に変換してからマッチを行います。</p>
 * @param string $default <p>マッチしなかったときに使用するロケール。</p>
 * @return string <p>最も近い言語タグ、あるいはデフォルトの値を返します。</p>
 * @link http://php.net/manual/ja/locale.lookup.php
 * @see locale_filter_matches()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_lookup(array $langtag, string $locale, bool $canonicalize = false, string $default = NULL): string {}

/**
 * ロケール ID のサブタグ要素を連想配列で返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>ロケール ID のサブタグ要素を連想配列で返します。</p>
 * @param string $locale <p>サブタグの配列を取り出したいロケール。 注意: サブタグ 'variant' と 'private' には最大で 15 の値を指定できますが、 'extlang' には最大で 3 つの値しか指定できません。</p>
 * @return array <p>連想配列を返します。キーがロケール ID サブタグを表し、 そのサブタグの値が関連付けられています。 この配列の並び順はロケール ID サブタグの順となります。変化形が '-varX-varY-varZ' の場合、返される配列は variant0=&gt;varX , variant1=&gt;varY , variant2=&gt;varZ のようになります。</p>
 * @link http://php.net/manual/ja/locale.parselocale.php
 * @see locale_compose()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_parse(string $locale): array {}

/**
 * デフォルトの実行時ロケールを設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>デフォルトの実行時ロケールを $locale に設定します。 これは INTL のグローバル 'default_locale' のロケール ID となります。UAX #35 拡張も使用可能です。</p>
 * @param string $locale <p>BCP 47 準拠の言語タグ。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/locale.setdefault.php
 * @see locale_get_default()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function locale_set_default(string $locale): bool {}

/**
 * 新しいメッセージフォーマッタを作成する
 * <p>オブジェクト指向型 (メソッド)</p><p>オブジェクト指向型 (コンストラクタ):</p><p>手続き型</p><p>新しい Message Formatter を作成します。</p>
 * @param string $locale <p>引数のフォーマットに用いるロケール。</p>
 * @param string $pattern <p>引数を埋め込むパターン文字列。 パターンには、'アポストロフィに優しい' 構文を使用します。 » umsg_autoQuoteApostrophe を通してから解釈が行われます。</p>
 * @return MessageFormatter <p>フォーマッタオブジェクトを返します。</p>
 * @link http://php.net/manual/ja/messageformatter.create.php
 * @see msgfmt_format(), msgfmt_parse(), msgfmt_get_error_code(), msgfmt_get_error_message()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function msgfmt_create(string $locale, string $pattern): \MessageFormatter {}

/**
 * メッセージをフォーマットする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>ロケールの規則にしたがってデータをフォーマット文字列に埋め込み、 メッセージをフォーマットします。</p>
 * @param \MessageFormatter $fmt <p>メッセージのフォーマッタ。</p>
 * @param array $args <p>フォーマット文字列に埋め込む引数。</p>
 * @return string <p>フォーマットした文字列を返します。 あるいはエラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/messageformatter.format.php
 * @see msgfmt_create(), msgfmt_parse(), msgfmt_format_message(), msgfmt_get_error_code(), msgfmt_get_error_message()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function msgfmt_format(\MessageFormatter $fmt, array $args): string {}

/**
 * 手早くメッセージをフォーマットする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>明示的にフォーマッタオブジェクトを作成せずに、 手早くメッセージをフォーマットする関数です。 この関数を使用するのは、 一度きりのフォーマット処理であってパラメータや状態を保持する必要がない場合です。</p>
 * @param string $locale <p>ロケールに依存する部分をフォーマットする際に使用するロケール。</p>
 * @param string $pattern <p>使用するパターン文字列。 パターンには、'アポストロフィに優しい' 構文を使用します。 » umsg_autoQuoteApostrophe を通してから解釈が行われます。</p>
 * @param array $args <p>フォーマット文字列に埋め込む値の配列。</p>
 * @return string <p>フォーマットしたパターン文字列を返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/messageformatter.formatmessage.php
 * @see msgfmt_create(), msgfmt_parse(), msgfmt_get_error_code(), msgfmt_get_error_message()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function msgfmt_format_message(string $locale, string $pattern, array $args): string {}

/**
 * 直近の操作のエラーコードを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の操作のエラーコードを取得します。</p>
 * @param \MessageFormatter $fmt <p>メッセージのフォーマッタ。</p>
 * @return int <p>エラーコードを返します。UErrorCode の値のいずれかです。 初期値は U_ZERO_ERROR となります。</p>
 * @link http://php.net/manual/ja/messageformatter.geterrorcode.php
 * @see msgfmt_get_error_message(), intl_get_error_code(), intl_is_failure()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function msgfmt_get_error_code(\MessageFormatter $fmt): int {}

/**
 * 直近の操作のエラーテキストを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>直近の操作のエラーテキストを取得します。</p>
 * @param \MessageFormatter $fmt <p>メッセージのフォーマッタ。</p>
 * @return string <p>直近のエラーの説明を返します。</p>
 * @link http://php.net/manual/ja/messageformatter.geterrormessage.php
 * @see msgfmt_get_error_code(), intl_get_error_code(), intl_is_failure()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function msgfmt_get_error_message(\MessageFormatter $fmt): string {}

/**
 * フォーマッタを作成した際のロケールを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタを作成した際のロケールを取得します。</p>
 * @param \NumberFormatter $formatter <p>フォーマッタリソース。</p>
 * @return string <p>ロケール名を返します。</p>
 * @link http://php.net/manual/ja/messageformatter.getlocale.php
 * @see msgfmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function msgfmt_get_locale(\NumberFormatter $formatter): string {}

/**
 * フォーマッタが使用するパターンを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが使用するパターンを取得します。</p>
 * @param \MessageFormatter $fmt <p>メッセージのフォーマッタ。</p>
 * @return string <p>このメッセージフォーマッタのパターン文字列を返します。</p>
 * @link http://php.net/manual/ja/messageformatter.getpattern.php
 * @see msgfmt_create(), msgfmt_set_pattern()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function msgfmt_get_pattern(\MessageFormatter $fmt): string {}

/**
 * パターンを使用して入力文字列をパースする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>入力文字列をパースし、取り出した項目を配列で返します。</p>
 * @param \MessageFormatter $fmt <p>メッセージのフォーマッタ。</p>
 * @param string $value <p>パースする文字列。</p>
 * @return array <p>取り出した項目を含む配列を返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/messageformatter.parse.php
 * @see msgfmt_create(), msgfmt_format(), msgfmt_parse_message()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function msgfmt_parse(\MessageFormatter $fmt, string $value): array {}

/**
 * 手早く入力文字列をパースする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>明示的にフォーマッタオブジェクトを作成せずに、 手早く入力文字列をパースします。 この関数を使用するのは、 一度きりのフォーマット処理であってパラメータや状態を保持する必要がない場合です。</p>
 * @param string $locale <p>ロケールに依存する部分をパースする際に使用するロケール。</p>
 * @param string $pattern <p><code>value</code> のパースに使うパターン。</p>
 * @param string $value
 * @return array <p>取り出した項目を含む配列を返します。 エラーが発生した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/messageformatter.parsemessage.php
 * @see msgfmt_create(), msgfmt_format_message(), msgfmt_parse()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function msgfmt_parse_message(string $locale, string $pattern, string $value): array {}

/**
 * フォーマッタが使用するパターンを設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが使用するパターンを設定します。</p>
 * @param \MessageFormatter $fmt <p>メッセージのフォーマッタ。</p>
 * @param string $pattern <p>このメッセージフォーマッタで使用するパターン文字列。 パターンには、'アポストロフィに優しい' 構文を使用します。 » umsg_autoQuoteApostrophe を通してから解釈が行われます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/messageformatter.setpattern.php
 * @see msgfmt_create(), msgfmt_get_pattern()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function msgfmt_set_pattern(\MessageFormatter $fmt, string $pattern): bool {}

/**
 * Gets the Decomposition_Mapping property for the given UTF-8 encoded code point
 * <p>オブジェクト指向型</p><p>手続き型</p><p>Gets the Decomposition_Mapping property, as specified in the Unicode Character Database (UCD), for the given UTF-8 encoded code point.</p>
 * @param string $input <p>The input string, which should be a single, UTF-8 encoded, code point.</p>
 * @return string <p>Returns a <code>string</code> containing the Decomposition_Mapping property, if present in the UCD.</p><p>Returns <b><code>NULL</code></b> if there is no Decomposition_Mapping property for the character.</p>
 * @link http://php.net/manual/ja/normalizer.getrawdecomposition.php
 * @since PHP 7 >= 7.3
 */
function normalizer_get_raw_decomposition(string $input): string {}

/**
 * 渡された文字列が、指定した正規化を適用済みかどうかを調べる
 * <p>オブジェクト指向型</p><p>手続き型</p><p>渡された文字列が、指定した正規化を適用済みかどうかを調べます。</p>
 * @param string $input <p>正規化する入力文字列。</p>
 * @param int $form <p>正規化方式のいずれか。</p>
 * @return bool <p>正規化されている場合に <b><code>TRUE</code></b>、正規化されていない場合やエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/normalizer.isnormalized.php
 * @see normalizer_normalize()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function normalizer_is_normalized(string $input, int $form = Normalizer::FORM_C): bool {}

/**
 * 渡された入力を正規化し、正規化後の文字列を返す
 * <p>オブジェクト指向型</p><p>手続き型</p><p>渡された入力を正規化し、正規化後の文字列を返します。</p>
 * @param string $input <p>正規化する入力文字列。</p>
 * @param int $form <p>正規化方式のいずれか。</p>
 * @return string <p>正規化後の文字列、あるいはエラーが発生した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/normalizer.normalize.php
 * @see normalizer_is_normalized()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function normalizer_normalize(string $input, int $form = Normalizer::FORM_C): string {}

/**
 * 数値フォーマッタを作成する
 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型</p><p>オブジェクト指向型 (コンストラクタ):</p><p>数値フォーマッタを作成します。</p>
 * @param string $locale <p>数値フォーマットするロケール (ロケール名。たとえば en_CA)。</p>
 * @param int $style <p>フォーマットの形式。  フォーマット形式 定数のいずれか。 <b><code>NumberFormatter::PATTERN_DECIMAL</code></b> あるいは <b><code>NumberFormatter::PATTERN_RULEBASED</code></b> を指定した場合は指定したパターンの数値フォーマットをオープンします。 これは、それぞれ » ICU DecimalFormat ドキュメント あるいは » ICU RuleBasedNumberFormat ドキュメント で述べられている構文を満たす必要があります。</p>
 * @param string $pattern <p>選択した形式がパターンを要求するものである場合のパターン文字列。</p>
 * @return NumberFormatter <p>NumberFormatter オブジェクト、 あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.create.php
 * @see numfmt_format(), numfmt_parse()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_create(string $locale, int $style, string $pattern = NULL): \NumberFormatter {}

/**
 * 数値をフォーマットする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>数値をフォーマット規則にしたがってフォーマットします。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param number $value <p>フォーマットする値。<code>integer</code> あるいは <code>float</code> で指定します。その他の型は数値に変換されます。</p>
 * @param int $type <p>使用する  フォーマット形式。</p>
 * @return string <p>フォーマットした値を文字列で返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.format.php
 * @see numfmt_get_error_code(), numfmt_format_currency(), numfmt_parse()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_format(\NumberFormatter $fmt, $value, int $type = NULL): string {}

/**
 * 通貨の値をフォーマットする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>通貨の値をフォーマット規則にしたがってフォーマットします。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param float $value <p>通貨の値。</p>
 * @param string $currency <p>使用する通貨を表す、3 文字の ISO 4217 通貨コード。</p>
 * @return string <p>通貨の値をフォーマットした文字列を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.formatcurrency.php
 * @see numfmt_get_error_code(), numfmt_format(), numfmt_parse_currency()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_format_currency(\NumberFormatter $fmt, float $value, string $currency): string {}

/**
 * 属性を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタの数値属性を取得します。 数値属性の例としては、フォーマッタが作成する整数部の桁数などがあります。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param int $attr <p>属性指定子。  数値属性 定数のいずれか。</p>
 * @return int <p>成功した場合に属性の値、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.getattribute.php
 * @see numfmt_get_error_code(), numfmt_get_text_attribute(), numfmt_set_attribute()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_get_attribute(\NumberFormatter $fmt, int $attr): int {}

/**
 * フォーマッタの直近のエラーコードを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが直近に実行した関数のエラーコードを取得します。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @return int <p>直近の関数コールのエラーコードを返します。</p>
 * @link http://php.net/manual/ja/numberformatter.geterrorcode.php
 * @see numfmt_get_error_message(), intl_get_error_code(), intl_is_failure()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_get_error_code(\NumberFormatter $fmt): int {}

/**
 * フォーマッタの直近のエラーメッセージを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが直近に実行した関数のエラーメッセージを取得します。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @return string <p>直近の関数コールのエラーメッセージを返します。</p>
 * @link http://php.net/manual/ja/numberformatter.geterrormessage.php
 * @see numfmt_get_error_code(), intl_get_error_code(), intl_is_failure()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_get_error_message(\NumberFormatter $fmt): string {}

/**
 * フォーマッタのロケールを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタのロケール名を取得します。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param int $type <p>妥当なロケールあるいは正確なロケールのいずれか ( <b><code>Locale::VALID_LOCALE</code></b>, <b><code>Locale::ACTUAL_LOCALE</code></b>, respectively) を選択します。デフォルトは実際のロケールです。</p>
 * @return string <p>フォーマッタの作成時に使用したロケールを返します。</p>
 * @link http://php.net/manual/ja/numberformatter.getlocale.php
 * @see numfmt_create(), numfmt_get_error_code()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_get_locale(\NumberFormatter $fmt, int $type = NULL): string {}

/**
 * フォーマッタのパターンを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが使用するパターンを取り出します。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @return string <p>このフォーマッタが使用するパターン文字列、 あるいはエラー発生時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.getpattern.php
 * @see numfmt_get_error_code(), numfmt_set_pattern(), numfmt_create()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_get_pattern(\NumberFormatter $fmt): string {}

/**
 * 記号を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタに関連づけられている記号を取得します。 フォーマッタでは、この記号で数値の中のロケールに依存する文字 (パーセント記号など) を扱います。 この API は、ルールベースのフォーマッタではサポートしていません。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param int $attr <p>記号指定子。  フォーマット記号 定数のいずれか。</p>
 * @return string <p>記号文字列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.getsymbol.php
 * @see numfmt_get_error_code(), numfmt_set_symbol()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_get_symbol(\NumberFormatter $fmt, int $attr): string {}

/**
 * テキストの属性を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタに関連づけられているテキスト属性を取得します。 テキスト属性の例としては、正の数字のサフィックスなどがあります。 属性が理解できない場合は、エラー <b><code>U_UNSUPPORTED_ERROR</code></b> が発生します。 ルールベースのフォーマッタでは、 <b><code>NumberFormatter::DEFAULT_RULESET</code></b> および <b><code>NumberFormatter::PUBLIC_RULESETS</code></b> のみが使用できます。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param int $attr <p>属性指定子。  テキスト属性 定数のいずれか。</p>
 * @return string <p>成功した場合に属性の値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.gettextattribute.php
 * @see numfmt_get_error_code(), numfmt_get_attribute(), numfmt_set_text_attribute()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_get_text_attribute(\NumberFormatter $fmt, int $attr): string {}

/**
 * 数値をパースする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在のフォーマット規則を使用して、文字列を数値にパースします。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param string $value
 * @param int $type <p>使用する  フォーマット形式。デフォルトでは <b><code>NumberFormatter::TYPE_DOUBLE</code></b> を使用します。</p>
 * @param int $position <p>文字列中でパースを開始する位置のオフセット。 結果を返す際に、この値はパース終了時のオフセットを保持します。</p>
 * @return mixed <p>パースした数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.parse.php
 * @see numfmt_get_error_code(), numfmt_format(), numfmt_parse_currency()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_parse(\NumberFormatter $fmt, string $value, int $type = NULL, int &$position = NULL) {}

/**
 * 通貨をパースする
 * <p>オブジェクト指向型</p><p>手続き型</p><p>現在のフォーマッタを使用して、文字列を数値と通貨にパースします。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param string $value
 * @param string $currency <p>通貨名 (3 文字の ISO 4217 通貨コード) を受け取るパラメータ。</p>
 * @param int $position <p>文字列中でパースを開始する位置のオフセット。 結果を返す際に、この値はパース終了時のオフセットを保持します。</p>
 * @return float <p>パースした数値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.parsecurrency.php
 * @see numfmt_get_error_code(), numfmt_parse(), numfmt_format_currency()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_parse_currency(\NumberFormatter $fmt, string $value, string &$currency, int &$position = NULL): float {}

/**
 * 属性を設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタに関連づけられている数値属性を設定します。 数値属性の例としては、フォーマッタが作成する整数部の桁数などがあります。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param int $attr <p>属性指定子。  数値属性 定数のいずれか。</p>
 * @param int $value <p>属性の値。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.setattribute.php
 * @see numfmt_get_error_code(), numfmt_get_attribute(), numfmt_set_text_attribute()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_set_attribute(\NumberFormatter $fmt, int $attr, int $value): bool {}

/**
 * フォーマッタのパターンを設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタが使用するパターンを設定します。 ルールベースのフォーマッタでは使用できません。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param string $pattern <p>» ICU DecimalFormat ドキュメント で述べられている構文によるパターン。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.setpattern.php
 * @see numfmt_get_error_code(), numfmt_create(), numfmt_get_pattern()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_set_pattern(\NumberFormatter $fmt, string $pattern): bool {}

/**
 * 記号の値を設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタに関連づけられている記号を設定します。 フォーマッタでは、この記号で数値の中のロケールに依存する文字 (パーセント記号など) を扱います。 この API は、ルールベースのフォーマッタではサポートしていません。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param int $attr <p>記号指定子。  フォーマット記号 定数のいずれか。</p>
 * @param string $value <p>その記号に対応するテキスト。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.setsymbol.php
 * @see numfmt_get_error_code(), numfmt_get_symbol()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_set_symbol(\NumberFormatter $fmt, int $attr, string $value): bool {}

/**
 * テキスト属性を設定する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>フォーマッタに関連づけられているテキスト属性を設定します。 テキスト属性の例としては、正の数字のサフィックスなどがあります。 属性が理解できない場合は、エラー <b><code>U_UNSUPPORTED_ERROR</code></b> が発生します。 ルールベースのフォーマッタでは、 <b><code>NumberFormatter::DEFAULT_RULESET</code></b> および <b><code>NumberFormatter::PUBLIC_RULESETS</code></b> のみが使用できます。</p>
 * @param \NumberFormatter $fmt <p>NumberFormatter オブジェクト。</p>
 * @param int $attr <p>属性指定子。 テキスト属性 定数のいずれか。</p>
 * @param string $value <p>属性の値を表すテキスト。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/numberformatter.settextattribute.php
 * @see numfmt_get_error_code(), numfmt_get_text_attribute(), numfmt_set_attribute()
 * @since PHP 5 >= 5.3.0, PHP 7, PECL intl >= 1.0.0
 */
function numfmt_set_text_attribute(\NumberFormatter $fmt, int $attr, string $value): bool {}

/**
 * バンドル内の要素数を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>バンドル内の要素数を取得します。</p>
 * @param \ResourceBundle $r <p>ResourceBundle オブジェクト。</p>
 * @return int <p>バンドル内の要素数を返します。</p>
 * @link http://php.net/manual/ja/resourcebundle.count.php
 * @see resourcebundle_get()
 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
 */
function resourcebundle_count(\ResourceBundle $r): int {}

/**
 * リソースバンドルを作成する
 * <p>オブジェクト指向型 (メソッド)</p><p>手続き型</p><p>オブジェクト指向型 (コンストラクタ)</p><p>リソースバンドルを作成します。</p>
 * @param string $locale <p>リソースバンドルを読み込むロケール (en_CA などのロケール名)。</p>
 * @param string $bundlename <p>データが格納されているディレクトリ、あるいは .dat ファイル名。</p>
 * @param bool $fallback <p>ロケールを完全一致とするか、あるいは代替として親ロケールを使うことを許可するか。</p>
 * @return ResourceBundle <p>ResourceBundle オブジェクト、あるいはエラー時に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/resourcebundle.create.php
 * @see resourcebundle_get()
 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
 */
function resourcebundle_create(string $locale, string $bundlename, bool $fallback = NULL): \ResourceBundle {}

/**
 * バンドルからデータを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>インデックスあるいは文字列キーを指定して、バンドルからデータを取得します。</p>
 * @param \ResourceBundle $r <p>ResourceBundle オブジェクト。</p>
 * @param string|int $index <p>データのインデックス。文字列あるいは整数値となります。</p>
 * @param bool $fallback <p>Whether locale should match exactly or fallback to parent locale is allowed.</p>
 * @return mixed <p>指定したインデックスのデータ、あるいはエラー時に <b><code>NULL</code></b> を返します。 文字列、整数値、バイナリデータ文字列は、それぞれに対応する PHP の型として返します。 整数の配列は PHP の配列として返します。複雑な型は ResourceBundle オブジェクトとして返します。</p>
 * @link http://php.net/manual/ja/resourcebundle.get.php
 * @see resourcebundle_count()
 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
 */
function resourcebundle_get(\ResourceBundle $r, $index, bool $fallback = TRUE) {}

/**
 * バンドルの直近のエラーコードを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>バンドルオブジェクトが最後に実行した関数のエラーコードを取得します。</p>
 * @param \ResourceBundle $r <p>ResourceBundle オブジェクト。</p>
 * @return int <p>バンドルオブジェクトの最後の関数コールからのエラーコードを返します。</p>
 * @link http://php.net/manual/ja/resourcebundle.geterrorcode.php
 * @see resourcebundle_get_error_message(), intl_get_error_code(), intl_is_failure()
 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
 */
function resourcebundle_get_error_code(\ResourceBundle $r): int {}

/**
 * バンドルの直近のエラーメッセージを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>バンドルオブジェクトが最後に実行した関数のエラーメッセージを取得します。</p>
 * @param \ResourceBundle $r <p>ResourceBundle オブジェクト。</p>
 * @return string <p>バンドルオブジェクトの最後の関数コールからのエラーメッセージを返します。</p>
 * @link http://php.net/manual/ja/resourcebundle.geterrormessage.php
 * @see resourcebundle_get_error_code(), intl_get_error_code(), intl_is_failure()
 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
 */
function resourcebundle_get_error_message(\ResourceBundle $r): string {}

/**
 * サポートするロケールを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>ResourceBundle 名を指定して、サポートするロケールを取得します。</p>
 * @param string $bundlename <p>ロケールを取得したい ResourceBundle のパス、あるいは 空文字列を指定するとデフォルトのロケール一覧を取得できます。</p>
 * @return array <p>このバンドルがサポートするロケールの一覧を返します。</p>
 * @link http://php.net/manual/ja/resourcebundle.locales.php
 * @see resourcebundle_get()
 * @since PHP 5 >= 5.3.2, PHP 7, PECL intl >= 2.0.0
 */
function resourcebundle_locales(string $bundlename): array {}

/**
 * Transliterator を作成する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>id を指定して Transliterator をオープンします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $id <p>id。</p>
 * @param int $direction <p>方向。デフォルトは &gt;Transliterator::FORWARD です。 Transliterator::REVERSE も指定できます。</p>
 * @return Transliterator <p>成功した場合に Transliterator オブジェクト、失敗した場合に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/transliterator.create.php
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 */
function transliterator_create(string $id, int $direction = NULL): \Transliterator {}

/**
 * 規則に基づいた Transliterator を作成する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>規則に基づいた Transliterator を作成します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $id
 * @param int $direction <p>方向。デフォルトは &gt;Transliterator::FORWARD です。 Transliterator::REVERSE も指定できます。</p>
 * @return Transliterator <p>成功した場合に Transliterator オブジェクト、失敗した場合に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/transliterator.createfromrules.php
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 */
function transliterator_create_from_rules(string $id, int $direction = NULL): \Transliterator {}

/**
 * 逆方向の Transliterator を作成する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>逆方向の Transliterator をオープンします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return Transliterator <p>成功した場合に Transliterator オブジェクト、失敗した場合に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/transliterator.createinverse.php
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 */
function transliterator_create_inverse(): \Transliterator {}

/**
 * 直近のエラーコードを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この Transliterator の直近のエラーコードを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return int <p>成功した場合にエラーコードを返します。 エラーがない場合や失敗した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/transliterator.geterrorcode.php
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 */
function transliterator_get_error_code(): int {}

/**
 * 直近のエラーメッセージを取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>この Transliterator の直近のエラーメッセージを取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return string <p>成功した場合にエラーメッセージを返します。 エラーがない場合や失敗した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/transliterator.geterrormessage.php
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 */
function transliterator_get_error_message(): string {}

/**
 * Transliterator の ID を取得する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>登録されている Transliterator ID の配列を返します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return array <p>成功した場合は登録されている Transliterator ID の配列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/transliterator.listids.php
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 */
function transliterator_list_ids(): array {}

/**
 * 文字列を音訳する
 * <p>オブジェクト指向型</p><p>手続き型</p><p>文字列あるいはその一部をICU の音訳器を使って変換します。</p>
 * @param mixed $transliterator <p>手続き型の場合に、Transliterator あるいは Transliterator を作成できる文字列を指定します。</p>
 * @param string $subject <p>変換する文字列。</p>
 * @param int $start <p>文字列の変換の開始位置を表すインデックス (UTF-16 コード単位) を指定します。指定した位置も、変換範囲に含まれます。 インデックスは 0 から始まります。この位置より前にあるテキストは、そのまま残ります。</p>
 * @param int $end <p>文字列の変換の終了位置を表すインデックス (UTF-16 コード単位) を指定します。指定した位置は、変換範囲に含まれません。 インデックスは 0 から始まります。この位置も含めてそれ以降にあるテキストは、そのまま残ります。</p>
 * @return string <p>成功した場合に変換後の文字列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/transliterator.transliterate.php
 * @since PHP 5 >= 5.4.0, PHP 7, PECL intl >= 2.0.0
 */
function transliterator_transliterate($transliterator, string $subject, int $start = NULL, int $end = NULL) {}

/**
 * IDN 関数の入力で、アサインされていないコードポイントの処理を許可します。
 */
define('IDNA_ALLOW_UNASSIGNED', 1);

/**
 * 入力が BiDi の規則を満たすかどうかをチェックします。 IDNA2003 の実装ではこの設定は無視され、常にこのチェックを行います。
 */
define('IDNA_CHECK_BIDI', 4);

/**
 * 入力が CONTEXTJ の規則を満たすかどうかをチェックします。 IDNA2003 の実装ではこの設定は無視されます。このチェックは IDNA2008 から追加されたものだからです。
 */
define('IDNA_CHECK_CONTEXTJ', 8);

/**
 * IDN 関数の入力で、アサインされていないコードポイントの処理を拒否し、 入力がドメイン名 ASCII 規則を満たすかどうかをチェックしません。
 */
define('IDNA_DEFAULT', 0);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_BIDI', 2048);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_CONTEXTJ', 4096);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_DISALLOWED', 128);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_DOMAIN_NAME_TOO_LONG', 4);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_EMPTY_LABEL', 1);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_HYPHEN_3_4', 32);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_INVALID_ACE_LABEL', 1024);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_LABEL_HAS_DOT', 512);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_LABEL_TOO_LONG', 2);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_LEADING_COMBINING_MARK', 64);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_LEADING_HYPHEN', 8);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_PUNYCODE', 256);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使うときに、 これらのエラーがビットセットで報告されます。
 */
define('IDNA_ERROR_TRAILING_HYPHEN', 16);

/**
 * <code>idn_to_ascii()</code> で非移行的処理をするためのオプション。 デフォルトでは移行的処理となります。このオプションは IDNA2003 の実装では無視されます。
 */
define('IDNA_NONTRANSITIONAL_TO_ASCII', 16);

/**
 * <code>idn_to_utf8()</code> で非移行的処理をするためのオプション。 デフォルトでは移行的処理となります。このオプションは IDNA2003 の実装では無視されます。
 */
define('IDNA_NONTRANSITIONAL_TO_UNICODE', 32);

/**
 * IDN 関数の入力がドメイン名 ASCII 規則を満たすかどうかをチェックします。
 */
define('IDNA_USE_STD3_RULES', 2);

/**
 * IDNA 2003 のアルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使います。これはデフォルトの設定です。 この定数およびデフォルトの使用は、PHP 7.2.0 以降は非推奨です。
 */
define('INTL_IDNA_VARIANT_2003', 0);

/**
 * UTS #46 アルゴリズムを <code>idn_to_utf8()</code> と <code>idn_to_ascii()</code> で使います。
 */
define('INTL_IDNA_VARIANT_UTS46', 1);

/**
 * ロケール名の長さの制限。PHP コード内では 80 文字までに制限されており、 それより長いロケール名は使用できません。
 */
define('INTL_MAX_LOCALE_LEN', 156);

