<?php



namespace {

	/**
	 * bbcode 要素を追加する
	 * <p>既存の BBCode_Container tag_set に、tag_rules を使用してタグを追加します。</p>
	 * @param resource $bbcode_container <p><code>bbcode_create()</code> が返す BBCode_Container。</p>
	 * @param string $tag_name <p>BBCode_Container tag_set に追加する新しいタグ。</p>
	 * @param array $tag_rules <p>パース規則を指定する連想配列。使用できるキーは <code>bbcode_create()</code> を参照ください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.bbcode-add-element.php
	 * @since PECL bbcode >= 0.9.0
	 */
	function bbcode_add_element($bbcode_container, string $tag_name, array $tag_rules): bool {}

	/**
	 * 顔文字をパーサに追加する
	 * <p>顔文字をパーサに追加します。</p>
	 * @param resource $bbcode_container <p><code>bbcode_create()</code> が返す BBCode_Container リソース。</p>
	 * @param string $smiley <p>見つかった場合に置換の対象となる文字列。</p>
	 * @param string $replace_by <p>顔文字が見つかった場合にそれを置換する文字列。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.bbcode-add-smiley.php
	 * @since PECL bbcode >= 0.10.2
	 */
	function bbcode_add_smiley($bbcode_container, string $smiley, string $replace_by): bool {}

	/**
	 * BBCode リソースを作成する
	 * <p>この関数は、新しい BBCode リソースを返します。 これを用いて BBCode 文字列をパースします。</p>
	 * @param array $bbcode_initial_tags <p>タグ名をキー、BBCode を正しくパースするために必要なパラメータをその値とする連想配列。 以下の キー/値 のペアが使用可能です。</p><ul> <li>  flags (任意) - BBCODE_FLAGS_&#42; 定数を組み合わせたフラグ。  </li> <li>  type (必須) - タグの種類を表す整数値。BBCODE_TYPE_&#42; 定数を使用します。  </li> <li>  open_tag (必須) - 開始タグ用の HTML 置換文字列。  </li> <li>  close_tag (必須) - 終了タグ用の HTML 置換文字列。  </li> <li>  default_arg (任意) - tag_type が OPTARG で、 引数が指定されていない場合に使用するデフォルトの引数。  </li> <li>  content_handling (任意) - コンテンツの変更時に使用するコールバックの名前を指定します。 オブジェクト指向の記法は 0.10.1 以降でしかサポートしていません。 コールバック関数のプロトタイプは string name<i>(string $content, string $argument)</i> となります。  </li> <li>  param_handling (任意) - 引数の変更時に使用するコールバックの名前を指定します。 オブジェクト指向の記法は 0.10.1 以降でしかサポートしていません。 コールバック関数のプロトタイプは string name<i>(string $content, string $argument)</i> となります。  </li> <li>  childs (任意) - このタグの子として使用できるタグのリスト。 カンマ区切りの文字列で指定します。 先頭が ! の場合は、指定したタグ以外のすべての子を許可します。  </li> <li>  parent (任意) - このタグの親として使用できるタグのリスト。 カンマ区切りの文字列で指定します。  </li> </ul>
	 * @return resource <p>BBCode_Container を返します。</p>
	 * @link https://php.net/manual/ja/function.bbcode-create.php
	 * @since PECL bbcode >= 0.9.0
	 */
	function bbcode_create(array $bbcode_initial_tags = NULL) {}

	/**
	 * BBCode_container リソースを閉じる
	 * <p>この関数は、<code>bbcode_create()</code> がオープンしたリソースを閉じます。</p>
	 * @param resource $bbcode_container <p><code>bbcode_create()</code> が返す BBCode_Container。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.bbcode-destroy.php
	 * @since PECL bbcode >= 0.9.0
	 */
	function bbcode_destroy($bbcode_container): bool {}

	/**
	 * 文字列を、指定した規則のもとでパースする
	 * <p>この関数は、<code>bbcode_create()</code> で作成した bbcode_container の規則にもとづいて文字列 to_parse をパースします。</p>
	 * @param resource $bbcode_container <p><code>bbcode_create()</code> が返す BBCode_Container。</p>
	 * @param string $to_parse <p>パースしたい文字列。</p>
	 * @return string <p>パースした文字列を返します。失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.bbcode-parse.php
	 * @since PECL bbcode >= 0.9.0
	 */
	function bbcode_parse($bbcode_container, string $to_parse): string {}

	/**
	 * 別のパーサをアタッチして、引数のパース用に別のルールセットを設定する
	 * <p>別のパーサを bbcode_container にアタッチします。 このパーサは、引数をパースする必要が生じた際にのみ用いられます。 この関数を使用しない場合、 デフォルトの引数パーサとして用いられるのはそのパーサ自身です。</p>
	 * @param resource $bbcode_container <p><code>bbcode_create()</code> が返す BBCode_Container リソース。</p>
	 * @param resource $bbcode_arg_parser <p><code>bbcode_create()</code> が返す BBCode_Container リソース。 これは引数のパースにのみ使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.bbcode-set-arg-parser.php
	 * @since PECL bbcode >= 0.10.2
	 */
	function bbcode_set_arg_parser($bbcode_container, $bbcode_arg_parser): bool {}

	/**
	 * パーサのオプションを設定あるいは変更する
	 * <p>パーサのオプションを設定あるいは変更します。</p>
	 * @param resource $bbcode_container <p><code>bbcode_create()</code> が返す BBCode_Container リソース。</p>
	 * @param int $flags <p>bbcode_container オプションに適用するフラグのセット。</p>
	 * @param int $mode <p>BBCODE_SET_FLAGS_&#42; 定数のいずれか。 指定したフラグを設定する、あるいは解除する、あるいは置き換えるのいずれかを指定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.bbcode-set-flags.php
	 * @since PECL bbcode >= 0.10.2
	 */
	function bbcode_set_flags($bbcode_container, int $flags, int $mode = BBCODE_SET_FLAGS_SET): bool {}

	/**
	 * これはパーサのオプションで、ダブルクォート (<i>"</i>) でクォートしたタグを受け付けます。
	 */
	define('BBCODE_ARG_DOUBLE_QUOTE', null);

	/**
	 * これはパーサのオプションで、HTML 版のダブルクォート (<i>&amp;quot;</i>) でクォートしたタグを受け付けます。
	 */
	define('BBCODE_ARG_HTML_QUOTE', null);

	/**
	 * これはパーサのオプションで、クォート文字をエスケープします。 これにより、文字列内でクォート文字を使用できるようになります。 エスケープ文字は \ で、これがエスケープ対象の文字の前に追加されます。 エスケープ対象でない文字の前にこれが見つかった場合は、削除されます。 デフォルトではエスケープを行いません。
	 */
	define('BBCODE_ARG_QUOTE_ESCAPING', null);

	/**
	 * これはパーサのオプションで、シングルクォート (<i>'</i>) でクォートしたタグを受け付けます。
	 */
	define('BBCODE_ARG_SINGLE_QUOTE', null);

	/**
	 * これはパーサのオプションで、エラー時の対応方法を変更します。 タグをオープンした順に、自動的にタグを閉じます。 また、開始タグしか存在しない場合にも、 終了タグがあるかのように扱います。
	 */
	define('BBCODE_AUTO_CORRECT', null);

	/**
	 * これはパーサのオプションで、エラー時の対応方法を変更します。 終了タグの並び順が間違っている場合に、 自動的にタグを再開します。
	 */
	define('BBCODE_CORRECT_REOPEN_TAGS', null);

	/**
	 * これはパーサのオプションで、 そのタグレベルで何もフラグが設定されていない場合に 顔文字を OFF にします。
	 */
	define('BBCODE_DEFAULT_SMILEYS_OFF', null);

	/**
	 * これはパーサのオプションで、 そのタグレベルで何もフラグが設定されていない場合に 顔文字を ON にします。
	 */
	define('BBCODE_DEFAULT_SMILEYS_ON', null);

	/**
	 * これはパーサのオプションで、BBCode のパースを無効にします。 これは、単に "顔文字" の変換機能だけを使いたい場合に便利です。 be used.
	 */
	define('BBCODE_DISABLE_TREE_BUILD', null);

	/**
	 * この BBCode タグの引数をパースする必要があります (引数自体も BBCode 拡張モジュールでパースします)。 0.10.2 以降では、引数のパーサとして別のパーサを使用することができます。
	 */
	define('BBCODE_FLAGS_ARG_PARSING', null);

	/**
	 * この BBCode タグにはコンテンツを含めることができません (自動的に空となります)。
	 */
	define('BBCODE_FLAGS_CDATA_NOT_ALLOWED', null);

	/**
	 * この BBCode タグは、閉じられていない子要素がが自動的に閉じられたときに、 再開させません。
	 */
	define('BBCODE_FLAGS_DENY_REOPEN_CHILD', null);

	/**
	 * この BBCode タグは、同じ型のタグが同一ネストレベルに登場したときに自動的に閉じます。
	 */
	define('BBCODE_FLAGS_ONE_OPEN_PER_LEVEL', null);

	/**
	 * この BBCode タグは、中身が空の場合に自動的に削除します。 軽量な HTML を生成することができます。
	 */
	define('BBCODE_FLAGS_REMOVE_IF_EMPTY', null);

	/**
	 * この BBCode タグは、顔文字を受け付けません。
	 */
	define('BBCODE_FLAGS_SMILEYS_OFF', null);

	/**
	 * この BBCode タグは、顔文字を受け付けます。
	 */
	define('BBCODE_FLAGS_SMILEYS_ON', null);

	/**
	 * これはパーサのオプションで、 顔文字のパースを完全に無効にします。
	 */
	define('BBCODE_FORCE_SMILEYS_OFF', null);

	/**
	 * これは、パーサのフラグを ON に切り替えられるようにします。
	 */
	define('BBCODE_SET_FLAGS_ADD', null);

	/**
	 * これは、パーサのフラグを OFF に切り替えられるようにします。
	 */
	define('BBCODE_SET_FLAGS_REMOVE', null);

	/**
	 * これは、完全なフラグをパーサに設定できるようにします。
	 */
	define('BBCODE_SET_FLAGS_SET', null);

	/**
	 * 単純なバイナリサーチではなく、 大文字小文字を区別せずに顔文字を検出します。
	 */
	define('BBCODE_SMILEYS_CASE_INSENSITIVE', null);

	/**
	 * この BBCode タグは、引数をひとつ必要とします。
	 */
	define('BBCODE_TYPE_ARG', null);

	/**
	 * この BBCode タグは、引数を受け取りません。
	 */
	define('BBCODE_TYPE_NOARG', null);

	/**
	 * この BBCode タグは、オプションで引数をひとつ受け取ることができます。
	 */
	define('BBCODE_TYPE_OPTARG', null);

	/**
	 * この BBCode タグは、特別なルートタグ (ネストレベル 0) です。
	 */
	define('BBCODE_TYPE_ROOT', null);

	/**
	 * この BBCode タグには、対応する終了タグはありません。
	 */
	define('BBCODE_TYPE_SINGLE', null);

}
