<?php



namespace {

	/**
	 * ユーザーの単語リストに単語を追加する
	 * <p><b>pspell_add_to_personal()</b> はユーザーの単語リスト に単語を追加します。ディレクトリをオープンするために <code>pspell_new_config()</code> を <code>pspell_config_personal()</code> とともに使用した場合、 <code>pspell_save_wordlist()</code> で単語リストを保存することが可能です。</p>
	 * @param int $dictionary_link
	 * @param string $word <p>追加する単語。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-add-to-personal.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_add_to_personal(int $dictionary_link, string $word): bool {}

	/**
	 * 現在のセッションの単語リストに単語を追加する
	 * <p><b>pspell_add_to_session()</b> は、 現在のセッションに関連する単語リストに単語を追加します。この関数は、 <code>pspell_add_to_personal()</code> に似ています。</p>
	 * @param int $dictionary_link
	 * @param string $word <p>追加する単語。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-add-to-session.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_add_to_session(int $dictionary_link, string $word): bool {}

	/**
	 * 単語をチェックする
	 * <p><b>pspell_check()</b> は単語のスペルをチェックします。</p>
	 * @param int $dictionary_link
	 * @param string $word <p>チェックする単語。</p>
	 * @return bool <p>スペルが正しい場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-check.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_check(int $dictionary_link, string $word): bool {}

	/**
	 * 現在のセッションをクリアする
	 * <p><b>pspell_clear_session()</b> は、 現在のセッションをクリアします。現在の単語リストはブランクになり、 例えば <code>pspell_save_wordlist()</code> でこのリストを保存しても何もおきません。</p>
	 * @param int $dictionary_link
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-clear-session.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_clear_session(int $dictionary_link): bool {}

	/**
	 * 辞書をオープンする際に使用する設定を作成する
	 * <p>辞書をオープンする際に使用する設定を作成します。</p><p><b>pspell_config_create()</b> は、 <code>pspell_new()</code> の構文に非常によく似ています。実際、 <code>pspell_new_config()</code> の直後に <b>pspell_config_create()</b> を使用した場合、全く同じ 結果となります。しかし、新しい設定を作成した後、 <code>pspell_new_config()</code> をコールする前に関数 <b>pspell_config_&#42;()</b> を使用することで いくつかの進んだ機能が使用できます。</p><p>より詳細な情報と例については、pspell Web サイト » http://aspell.net/ のオンラインマニュアルを参照ください。</p>
	 * @param string $language <p>パラメータ language は、2 文字の ISO 639 言語コードと オプションでダッシュまたはアンダースコアの後に 2 文字の ISO 3166 国コードからなる言語コードです。</p>
	 * @param string $spelling <p>パラメータ spelling は、英語のように複数のスペルがある言語に関して スペルの指定を行うものです。指定可能な値は、 'american', 'british', 'canadian'です。</p>
	 * @param string $jargon <p>パラメータ jargon は、同じ language および spelling パラメータを有する 2 つの異なる単語リストを区別するための 追加情報を有しています。</p>
	 * @param string $encoding <p>パラメータ encoding は、単語のエンコーディングとして 予想されるものです。有効な値は、'utf-8', 'iso8859-&#42;', 'koi8-r', 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned 32' です。このパラメータはよくテストされていないため、 使用する際には注意してください。</p>
	 * @return int <p>pspell 設定 ID、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-config-create.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_create(string $language, string $spelling = NULL, string $jargon = NULL, string $encoding = NULL): int {}

	/**
	 * Location of language data files
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $conf
	 * @param string $directory
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-config-data-dir.php
	 * @since PHP 5, PHP 7
	 */
	function pspell_config_data_dir(int $conf, string $directory): bool {}

	/**
	 * メイン単語リストの場所
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $conf
	 * @param string $directory
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-config-dict-dir.php
	 * @since PHP 5, PHP 7
	 */
	function pspell_config_dict_dir(int $conf, string $directory): bool {}

	/**
	 * 長さが N 文字未満の単語を無視する
	 * <p><b>pspell_config_ignore()</b> は、 <code>pspell_new_config()</code> をコールする前に使用しなければなりません。 この関数は、スペルチェッカに無視させる短い単語の長さを指定します。</p>
	 * @param int $dictionary_link
	 * @param int $n <p><code>n</code> 文字より短い単語をスキップします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-config-ignore.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_ignore(int $dictionary_link, int $n): bool {}

	/**
	 * 返される提案の数のモードを変更する
	 * <p><b>pspell_config_mode()</b> は、 <code>pspell_new_config()</code> のコール前に設定を行う際に使用します。この関数は、 <code>pspell_suggest()</code> により返される修正候補の数を定義します。</p>
	 * @param int $dictionary_link
	 * @param int $mode <p>パラメータ mode は、スペルチェッカの動作モードです。 使用可能なモードを以下に示します。</p><ul> <li>  <b><code>PSPELL_FAST</code></b> - 高速モード (修正候補の数は最小)  </li> <li>  <b><code>PSPELL_NORMAL</code></b> - 通常モード (修正候補はより多い)  </li> <li>  <b><code>PSPELL_BAD_SPELLERS</code></b> - 低速モード (修正候補は多い)  </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-config-mode.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_mode(int $dictionary_link, int $mode): bool {}

	/**
	 * 個人の単語リストを保持するファイルを設定する
	 * <p>個人の単語リストファイルを設定します。個人の単語リストは、 <code>pspell_new_config()</code>をコールした後にロードされ、 標準的な単語リストに追加されて使用されます。このファイルは、 <code>pspell_save_wordlist()</code> により個人的な単語リスト が保存されるファイルでもあります。</p><p><b>pspell_config_personal()</b> は、 <code>pspell_new_config()</code> をコールする前に設定を行うために使用する必要があります。</p>
	 * @param int $dictionary_link
	 * @param string $file <p>個人の単語リスト。存在しない場合は作成します。PHP の実行ユーザー (たとえば nobody) が書き込み可能である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-config-personal.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_personal(int $dictionary_link, string $file): bool {}

	/**
	 * 置換候補を保持するファイルを設定する
	 * <p>置換候補を保持するファイルを設定します。</p><p>置換の組は、スペルチェッカの品質を改善します。 単語のスペルミスをした場合、そして、適当な修正候補がリストにあった場合、 <code>pspell_store_replacement()</code> を置換候補を保存するために使用し、置換候補を含む単語リストを保存するために <code>pspell_save_wordlist()</code>を使用することが可能です。</p><p><b>pspell_config_repl()</b> は、 <code>pspell_new_config()</code> をコールする前に設定を行うために使用する必要があります。</p>
	 * @param int $dictionary_link
	 * @param string $file <p>このファイルは PHP の実行ユーザー (たとえば nobody) が書き込み可能である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-config-repl.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_repl(int $dictionary_link, string $file): bool {}

	/**
	 * 複合語を有効な単語の組み合わせとして考慮する
	 * <p>この関数は、複合語を正しい複合語として処理するかどうかを定義します。 つまり、"thecat" には、二つの単語の間に空白はありませんが、 正しい複合語となります。この設定の変更は、 <code>pspell_check()</code> による返り値にのみ影響を与えます。 <code>pspell_suggest()</code> は、この場合でも修正候補を返します。</p><p><b>pspell_config_runtogether()</b> は、 <code>pspell_new_config()</code> をコールする前に設定を行うために使用する必要があります。</p>
	 * @param int $dictionary_link
	 * @param bool $flag <p>連続した単語を複合語として扱う場合な <b><code>TRUE</code></b>、 それ以外の場合は <b><code>FALSE</code></b>。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-config-runtogether.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_runtogether(int $dictionary_link, bool $flag): bool {}

	/**
	 * 単語リストと共に置換リストを保存するかどうかを定義する
	 * <p><b>pspell_config_save_repl()</b> は、 <code>pspell_save_wordlist()</code> が単語リストと共に置換リストを保存するかどうかを定義します。 通常はこの関数を使用する必要はありません。なぜなら、 <code>pspell_config_repl()</code> を使用した場合は置換の組は <code>pspell_save_wordlist()</code> により保存され、 そうでない場合には置換の組は保存されないためです。</p><p><b>pspell_config_save_repl()</b> は、 <code>pspell_new_config()</code> のコール前に設定を行う際に使用します。</p>
	 * @param int $dictionary_link
	 * @param bool $flag <p>置換リストを保存する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b>。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-config-save-repl.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_config_save_repl(int $dictionary_link, bool $flag): bool {}

	/**
	 * 新規辞書をロードする
	 * <p><b>pspell_new()</b> は、新規の辞書をロードして 辞書リンク ID を返します。このリンク ID は、他の pspell 関数で使用されます。</p><p>詳細な情報および例については、pspell の Web サイト :» http://aspell.net/ にあるインラインマニュアルを参照ください。</p>
	 * @param string $language <p>パラメータ language は、2 文字の ISO 639 言語コードと オプションでダッシュまたはアンダースコアの後に 2 文字の ISO 3166 国コードからなる言語コードです。</p>
	 * @param string $spelling <p>パラメータ spelling は、英語のように複数のスペルがある言語に関して スペルの指定を行うものです。指定可能な値は、 'american', 'british', 'canadian'です。</p>
	 * @param string $jargon <p>パラメータ jargon は、同じ language および spelling パラメータを有する 2 つの異なる単語リストを区別するための 追加情報を有しています。</p>
	 * @param string $encoding <p>パラメータ encoding は、単語のエンコーディングとして 予想されるものです。有効な値は、'utf-8', 'iso8859-&#42;', 'koi8-r', 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned 32' です。このパラメータはよくテストされていないため、 使用する際には注意してください。</p>
	 * @param int $mode <p>パラメータ mode は、スペルチェッカの動作モードです。 使用可能なモードを以下に示します。</p><ul> <li>  <b><code>PSPELL_FAST</code></b> - 高速モード (修正候補の数は最小)  </li> <li>  <b><code>PSPELL_NORMAL</code></b> - 通常モード (修正候補はより多い)  </li> <li>  <b><code>PSPELL_BAD_SPELLERS</code></b> - 低速モード (修正候補は多い)  </li> <li>  <b><code>PSPELL_RUN_TOGETHER</code></b> - つながった単語を複合語 （legal compound）として考慮します。この場合、"thecat" には二つの 単語の間に空白はありませんが複合語となります。この設定の変更は <code>pspell_check()</code> から返される結果にのみ影響します。 設定変更後も <code>pspell_suggest()</code> は修正候補を返します。  </li> </ul> mode は、これらのさまざまな定数を用いたビットマスクです。 しかし <b><code>PSPELL_FAST</code></b>、 <b><code>PSPELL_NORMAL</code></b> および <b><code>PSPELL_BAD_SPELLERS</code></b> は相反するため、 この中のひとつを選択する必要があります。
	 * @return int <p>成功した場合にディレクトリリンク識別子、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-new.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_new(string $language, string $spelling = NULL, string $jargon = NULL, string $encoding = NULL, int $mode = 0): int {}

	/**
	 * 指定した設定に基づき新規辞書をロードする
	 * <p><b>pspell_new_config()</b> は、 <code>pspell_config_create()</code> で作成され、 関数 <b>pspell_config_&#42;()</b> で修正された設定を使用して 新規辞書をオープンします。この方法は最も柔軟で、 <code>pspell_new()</code> および <code>pspell_new_personal()</code> で提供された全ての機能を有しています。</p>
	 * @param int $config <p>パラメータ <code>config</code> は、config が作成された際に <code>pspell_config_create()</code> により返されたパラメータです。</p>
	 * @return int <p>成功した場合に辞書リンク ID を返すか、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-new-config.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_new_config(int $config): int {}

	/**
	 * 個人の単語リストを有する新規辞書をロードする
	 * <p><b>pspell_new_personal()</b> は、個人の単語リストと共に 新規辞書をオープンし、辞書リンクIDを返します。この ID は他の pspell 関数で使用されます。単語リストは修正可能で、必要に応じて <code>pspell_save_wordlist()</code> で保存することも可能です。 しかし、置換の組は保存されません。置換の組を保存するには、 <code>pspell_config_create()</code> を用いて設定を作成し、 <code>pspell_config_personal()</code> で個人の単語リストを 設定し、<code>pspell_config_repl()</code> で置換のファイルを 設定し、<code>pspell_new_config()</code> で新規の辞書を オープンします。</p><p>詳細な情報および例については、pspell の Web サイト :» http://aspell.net/ にあるインラインマニュアルを参照ください。</p>
	 * @param string $personal <p>個人リストに追加された単語が保存される場所を指定します。 この場所には '/' で始まる絶対パスのファイル名を指定する必要があります。 そうでない場合は $HOME からの相対パスになりますが、 これは多くのシステムでは、"/root" であり、 おそらく望ましい結果とはならないためです。</p>
	 * @param string $language <p>2 文字の ISO 639 言語コードと オプションでダッシュまたはアンダースコアの後に 2 文字の ISO 3166 国コードからなる言語コードです。</p>
	 * @param string $spelling <p>英語のように複数のスペルがある言語に関して スペルの指定を行うものです。指定可能な値は、 'american', 'british', 'canadian'です。</p>
	 * @param string $jargon <p>同じ language および spelling パラメータを有する 2 つの異なる単語リストを区別するための 追加情報を有しています。</p>
	 * @param string $encoding <p>単語のエンコーディングとして予想されるもの。有効な値は、 <i>utf-8</i>, <i>iso8859-&#42;</i>, <i>koi8-r</i>, <i>viscii</i>, <i>cp1252</i>, <i>machine unsigned 16</i>, <i>machine unsigned 32</i> です。</p>
	 * @param int $mode <p>スペルチェッカの動作モードです。 使用可能なモードを以下に示します。</p><ul> <li>  <b><code>PSPELL_FAST</code></b> - 高速モード (修正候補の数は最小)  </li> <li>  <b><code>PSPELL_NORMAL</code></b> - 通常モード (修正候補はより多い)  </li> <li>  <b><code>PSPELL_BAD_SPELLERS</code></b> - 低速モード (修正候補は多い)  </li> <li>  <b><code>PSPELL_RUN_TOGETHER</code></b> - つながった単語を複合語 （legal compound）として考慮します。この場合、"thecat" には二つの 単語の間に空白はありませんが複合語となります。この設定の変更は <code>pspell_check()</code> から返される結果にのみ影響します。 設定変更後も <code>pspell_suggest()</code> は修正候補を返します。  </li> </ul> mode は、これらのさまざまな定数を用いたビットマスクです。 しかし <b><code>PSPELL_FAST</code></b>、 <b><code>PSPELL_NORMAL</code></b> および <b><code>PSPELL_BAD_SPELLERS</code></b> は相反するため、 この中のひとつを選択する必要があります。
	 * @return int <p>その他の pspell 関数で使用する辞書リンク ID を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-new-personal.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_new_personal(string $personal, string $language, string $spelling = NULL, string $jargon = NULL, string $encoding = NULL, int $mode = 0): int {}

	/**
	 * 個人の単語リストをファイルに保存する
	 * <p><b>pspell_save_wordlist()</b> は、 現在のセッションから個人の単語リストを保存します。 ファイルの位置は <code>pspell_config_personal()</code> および(オプションで) <code>pspell_config_repl()</code> で指定されている必要があります。</p>
	 * @param int $dictionary_link <p><code>pspell_new_personal()</code> でオープンした辞書リンク ID。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-save-wordlist.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_save_wordlist(int $dictionary_link): bool {}

	/**
	 * 単語を置換する組を保存する
	 * <p><b>pspell_store_replacement()</b> は、単語の置換候補を 保存します。これにより、この後の <code>pspell_suggest()</code> で置換候補を返すことが可能と なります。この関数の利点を活かすためには、辞書をオープンする際に <code>pspell_new_personal()</code> を使用する必要があります。 置換候補を恒久的に保存するためには <code>pspell_config_personal()</code> を使用する必要があり、 <code>pspell_config_repl()</code> によりカスタム単語リストを 保存するパスを設定し、この後、変更点をディスクへ書き込むために <code>pspell_save_wordlist()</code> を使用する必要があります。</p>
	 * @param int $dictionary_link <p><code>pspell_new_personal()</code> でオープンした辞書リンク ID。</p>
	 * @param string $misspelled <p>まちがったスペルの単語。</p>
	 * @param string $correct <p><code>misspelled</code> を修正した単語。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-store-replacement.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_store_replacement(int $dictionary_link, string $misspelled, string $correct): bool {}

	/**
	 * 単語のスペルについて修正候補を示す
	 * <p><b>pspell_suggest()</b> は、 指定した単語について可能性のあるスペルの配列を返します。</p>
	 * @param int $dictionary_link
	 * @param string $word <p>調べたい単語。</p>
	 * @return array <p>修正候補の配列を返します。</p>
	 * @link https://php.net/manual/ja/function.pspell-suggest.php
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function pspell_suggest(int $dictionary_link, string $word): array {}

	define('PSPELL_BAD_SPELLERS', null);

	define('PSPELL_FAST', null);

	define('PSPELL_NORMAL', null);

	define('PSPELL_RUN_TOGETHER', null);

}
