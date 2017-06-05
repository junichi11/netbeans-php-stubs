<?php

// Start of pspell v.7.0.19

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 新規辞書をロードする
 * @link http://php.net/manual/ja/function.pspell-new.php
 * @param string $language <p>
 * パラメータ language は、2 文字の ISO 639 言語コードと
 * オプションでダッシュまたはアンダースコアの後に 2 文字の ISO 3166
 * 国コードからなる言語コードです。
 * </p>
 * @param string $spelling [optional] <p>
 * パラメータ spelling は、英語のように複数のスペルがある言語に関して
 * スペルの指定を行うものです。指定可能な値は、
 * 'american', 'british', 'canadian'です。
 * </p>
 * @param string $jargon [optional] <p>
 * パラメータ jargon は、同じ language および
 * spelling パラメータを有する 2 つの異なる単語リストを区別するための
 * 追加情報を有しています。
 * </p>
 * @param string $encoding [optional] <p>
 * パラメータ encoding は、単語のエンコーディングとして
 * 予想されるものです。有効な値は、'utf-8', 'iso8859-*',
 * 'koi8-r', 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
 * 32' です。このパラメータはよくテストされていないため、
 * 使用する際には注意してください。
 * </p>
 * @param int $mode [optional] <p>
 * パラメータ mode は、スペルチェッカの動作モードです。
 * 使用可能なモードを以下に示します。
 * <b>PSPELL_FAST</b> - 高速モード (修正候補の数は最小)
 * @return int 成功した場合にディレクトリリンク識別子、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_new(string $language, string $spelling = null, string $jargon = null, string $encoding = null, int $mode = 0): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 個人の単語リストを有する新規辞書をロードする
 * @link http://php.net/manual/ja/function.pspell-new-personal.php
 * @param string $personal <p>
 * 個人リストに追加された単語が保存される場所を指定します。
 * この場所には '/' で始まる絶対パスのファイル名を指定する必要があります。
 * そうでない場合は $HOME からの相対パスになりますが、
 * これは多くのシステムでは、"/root" であり、
 * おそらく望ましい結果とはならないためです。
 * </p>
 * @param string $language <p>
 * 2 文字の ISO 639 言語コードと
 * オプションでダッシュまたはアンダースコアの後に 2 文字の ISO 3166
 * 国コードからなる言語コードです。
 * </p>
 * @param string $spelling [optional] <p>
 * 英語のように複数のスペルがある言語に関して
 * スペルの指定を行うものです。指定可能な値は、
 * 'american', 'british', 'canadian'です。
 * </p>
 * @param string $jargon [optional] <p>
 * 同じ language および
 * spelling パラメータを有する 2 つの異なる単語リストを区別するための
 * 追加情報を有しています。
 * </p>
 * @param string $encoding [optional] <p>
 * 単語のエンコーディングとして予想されるもの。有効な値は、
 * utf-8, iso8859-*,
 * koi8-r, viscii,
 * cp1252, machine unsigned 16,
 * machine unsigned 32 です。
 * </p>
 * @param int $mode [optional] <p>
 * スペルチェッカの動作モードです。
 * 使用可能なモードを以下に示します。
 * <b>PSPELL_FAST</b> - 高速モード (修正候補の数は最小)
 * @return int その他の pspell 関数で使用する辞書リンク ID を返します。
 */
function pspell_new_personal(string $personal, string $language, string $spelling = null, string $jargon = null, string $encoding = null, int $mode = 0): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 指定した設定に基づき新規辞書をロードする
 * @link http://php.net/manual/ja/function.pspell-new-config.php
 * @param int $config <p>
 * パラメータ <i>config</i> は、config が作成された際に
 * <b>pspell_config_create</b> により返されたパラメータです。
 * </p>
 * @return int 成功した場合に辞書リンク ID を返します。
 */
function pspell_new_config(int $config): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 単語をチェックする
 * @link http://php.net/manual/ja/function.pspell-check.php
 * @param int $dictionary_link
 * @param string $word <p>
 * チェックする単語。
 * </p>
 * @return bool スペルが正しい場合に <b>TRUE</b>、そうでない場合に <b>FALSE</b> を返します。
 */
function pspell_check(int $dictionary_link, string $word): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 単語のスペルについて修正候補を示す
 * @link http://php.net/manual/ja/function.pspell-suggest.php
 * @param int $dictionary_link
 * @param string $word <p>
 * 調べたい単語。
 * </p>
 * @return array 修正候補の配列を返します。
 */
function pspell_suggest(int $dictionary_link, string $word): array {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 単語を置換する組を保存する
 * @link http://php.net/manual/ja/function.pspell-store-replacement.php
 * @param int $dictionary_link <p>
 * <b>pspell_new_personal</b>
 * でオープンした辞書リンク ID。
 * </p>
 * @param string $misspelled <p>
 * まちがったスペルの単語。
 * </p>
 * @param string $correct <p>
 * <i>misspelled</i> を修正した単語。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_store_replacement(int $dictionary_link, string $misspelled, string $correct): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * ユーザーの単語リストに単語を追加する
 * @link http://php.net/manual/ja/function.pspell-add-to-personal.php
 * @param int $dictionary_link
 * @param string $word <p>
 * 追加する単語。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_add_to_personal(int $dictionary_link, string $word): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 現在のセッションの単語リストに単語を追加する
 * @link http://php.net/manual/ja/function.pspell-add-to-session.php
 * @param int $dictionary_link
 * @param string $word <p>
 * 追加する単語。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_add_to_session(int $dictionary_link, string $word): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 現在のセッションをクリアする
 * @link http://php.net/manual/ja/function.pspell-clear-session.php
 * @param int $dictionary_link
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_clear_session(int $dictionary_link): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 個人の単語リストをファイルに保存する
 * @link http://php.net/manual/ja/function.pspell-save-wordlist.php
 * @param int $dictionary_link <p>
 * <b>pspell_new_personal</b>
 * でオープンした辞書リンク ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_save_wordlist(int $dictionary_link): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 辞書をオープンする際に使用する設定を作成する
 * @link http://php.net/manual/ja/function.pspell-config-create.php
 * @param string $language <p>
 * パラメータ language は、2 文字の ISO 639 言語コードと
 * オプションでダッシュまたはアンダースコアの後に 2 文字の ISO 3166
 * 国コードからなる言語コードです。
 * </p>
 * @param string $spelling [optional] <p>
 * パラメータ spelling は、英語のように複数のスペルがある言語に関して
 * スペルの指定を行うものです。指定可能な値は、
 * 'american', 'british', 'canadian'です。
 * </p>
 * @param string $jargon [optional] <p>
 * パラメータ jargon は、同じ language および
 * spelling パラメータを有する 2 つの異なる単語リストを区別するための
 * 追加情報を有しています。
 * </p>
 * @param string $encoding [optional] <p>
 * パラメータ encoding は、単語のエンコーディングとして
 * 予想されるものです。有効な値は、'utf-8', 'iso8859-*',
 * 'koi8-r', 'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
 * 32' です。このパラメータはよくテストされていないため、
 * 使用する際には注意してください。
 * </p>
 * @return int pspell 設定 ID、あるいはエラー時に <b>FALSE</b> を返します。
 */
function pspell_config_create(string $language, string $spelling = null, string $jargon = null, string $encoding = null): int {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 複合語を有効な単語の組み合わせとして考慮する
 * @link http://php.net/manual/ja/function.pspell-config-runtogether.php
 * @param int $dictionary_link
 * @param bool $flag <p>
 * 連続した単語を複合語として扱う場合な <b>TRUE</b>、
 * それ以外の場合は <b>FALSE</b>。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_config_runtogether(int $dictionary_link, bool $flag): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 返される提案の数のモードを変更する
 * @link http://php.net/manual/ja/function.pspell-config-mode.php
 * @param int $dictionary_link
 * @param int $mode <p>
 * パラメータ mode は、スペルチェッカの動作モードです。
 * 使用可能なモードを以下に示します。
 * <b>PSPELL_FAST</b> - 高速モード (修正候補の数は最小)
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_config_mode(int $dictionary_link, int $mode): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 長さが N 文字未満の単語を無視する
 * @link http://php.net/manual/ja/function.pspell-config-ignore.php
 * @param int $dictionary_link
 * @param int $n <p>
 * <i>n</i> 文字より短い単語をスキップします。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_config_ignore(int $dictionary_link, int $n): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 個人の単語リストを保持するファイルを設定する
 * @link http://php.net/manual/ja/function.pspell-config-personal.php
 * @param int $dictionary_link
 * @param string $file <p>
 * 個人の単語リスト。存在しない場合は作成します。PHP
 * の実行ユーザー (たとえば nobody) が書き込み可能である必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_config_personal(int $dictionary_link, string $file): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * メイン単語リストの場所
 * @link http://php.net/manual/ja/function.pspell-config-dict-dir.php
 * @param int $conf
 * @param string $directory
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_config_dict_dir(int $conf, string $directory): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 言語データファイルの場所
 * @link http://php.net/manual/ja/function.pspell-config-data-dir.php
 * @param int $conf
 * @param string $directory
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_config_data_dir(int $conf, string $directory): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 置換候補を保持するファイルを設定する
 * @link http://php.net/manual/ja/function.pspell-config-repl.php
 * @param int $dictionary_link
 * @param string $file <p>
 * このファイルは PHP
 * の実行ユーザー (たとえば nobody) が書き込み可能である必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_config_repl(int $dictionary_link, string $file): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * 単語リストと共に置換リストを保存するかどうかを定義する
 * @link http://php.net/manual/ja/function.pspell-config-save-repl.php
 * @param int $dictionary_link
 * @param bool $flag <p>
 * 置換リストを保存する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b>。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pspell_config_save_repl(int $dictionary_link, bool $flag): bool {}

define ('PSPELL_FAST', 1);
define ('PSPELL_NORMAL', 2);
define ('PSPELL_BAD_SPELLERS', 3);
define ('PSPELL_RUN_TOGETHER', 8);

// End of pspell v.7.0.19
?>
