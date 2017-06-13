<?php

// Start of enchant v.1.1.0

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * 要求を満たすブローカーオブジェクトを作成する
 * @link http://php.net/manual/ja/function.enchant-broker-init.php
 * @return resource 成功した場合にブローカーリソース、それ以外の場合に <b>FALSE</b> を返します。
 */
function enchant_broker_init() {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * ブローカーリソースおよびその辞書を開放する
 * @link http://php.net/manual/ja/function.enchant-broker-free.php
 * @param resource $broker <p>
 * ブローカーリソース。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function enchant_broker_free($broker): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * ブローカーの直近のエラーを返す
 * @link http://php.net/manual/ja/function.enchant-broker-get-error.php
 * @param resource $broker <p>
 * ブローカーリソース。
 * </p>
 * @return string エラーが見つかった場合にメッセージ文字列、それ以外の場合に <b>FALSE</b>
 * を返します。
 */
function enchant_broker_get_error($broker): string {}

/**
 * (PHP 5 &gt;= 5.3.1, PHP 7, PECL enchant &gt;= 1.0.1)<br/>
 * Set the directory path for a given backend
 * @link http://php.net/manual/ja/function.enchant-broker-set-dict-path.php
 * @param resource $broker <p>
 * Broker resource.
 * </p>
 * @param int $dict_type <p>
 * The type of the dictionaries, i.e. <b>ENCHANT_MYSPELL</b>
 * or <b>ENCHANT_ISPELL</b>.
 * </p>
 * @param string $value <p>
 * The path of the dictionary directory.
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function enchant_broker_set_dict_path($broker, int $dict_type, string $value): bool {}

/**
 * (PHP 5 &gt;= 5.3.1, PHP 7, PECL enchant &gt;= 1.0.1)<br/>
 * Get the directory path for a given backend
 * @link http://php.net/manual/ja/function.enchant-broker-get-dict-path.php
 * @param resource $broker <p>
 * Broker resource.
 * </p>
 * @param int $dict_type <p>
 * The type of the dictionaries, i.e. <b>ENCHANT_MYSPELL</b>
 * or <b>ENCHANT_ISPELL</b>.
 * </p>
 * @return bool the path of the dictionary directory on
 * success失敗した場合に <b>FALSE</b> を返します.
 */
function enchant_broker_get_dict_path($broker, int $dict_type): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 1.0.1)<br/>
 * 使用可能な辞書の一覧を返す
 * @link http://php.net/manual/ja/function.enchant-broker-list-dicts.php
 * @param resource $broker <p>
 * ブローカーリソース。
 * </p>
 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function enchant_broker_list_dicts($broker) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * タグを使用して新しい辞書を作成する
 * @link http://php.net/manual/ja/function.enchant-broker-request-dict.php
 * @param resource $broker <p>
 * ブローカーリソース。
 * </p>
 * @param string $tag <p>
 * ロケールを表すタグ。例えば en_US、de_DE など。
 * </p>
 * @return resource 成功した場合に辞書リソース、失敗した場合に <b>FALSE</b> を返します。
 */
function enchant_broker_request_dict($broker, string $tag) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * PWL ファイルを使用して辞書を作成する
 * @link http://php.net/manual/ja/function.enchant-broker-request-pwl-dict.php
 * @param resource $broker <p>
 * ブローカーリソース。
 * </p>
 * @param string $filename <p>
 * PWL ファイルへのパス。
 * ファイルが存在しない場合は、可能であれば新しいファイルを作ります。
 * </p>
 * @return resource 成功した場合に辞書リソース、失敗した場合に <b>FALSE</b> を返します。
 */
function enchant_broker_request_pwl_dict($broker, string $filename) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * 辞書リソースを開放する
 * @link http://php.net/manual/ja/function.enchant-broker-free-dict.php
 * @param resource $dict <p>
 * 辞書リソース。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function enchant_broker_free_dict($dict): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * 辞書が存在するかどうかを調べる。空でないタグを使用する
 * @link http://php.net/manual/ja/function.enchant-broker-dict-exists.php
 * @param resource $broker <p>
 * ブローカーリソース。
 * </p>
 * @param string $tag <p>
 * 空でない、LOCALE 形式のタグ。例: us_US、ch_DE など。
 * </p>
 * @return bool タグが存在する場合に <b>TRUE</b>、存在しない場合に <b>FALSE</b> を返します。
 */
function enchant_broker_dict_exists($broker, string $tag): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * その言語で使用する辞書の優先順位を宣言する
 * @link http://php.net/manual/ja/function.enchant-broker-set-ordering.php
 * @param resource $broker <p>
 * ブローカーリソース。
 * </p>
 * @param string $tag <p>
 * 言語タグ。"*" を使用すると、あらゆる言語についての
 * デフォルトの順位を宣言します。
 * 明示的に順位を指定しなかった言語についてはこれが使用されます。
 * </p>
 * @param string $ordering <p>
 * プロバイダ名をカンマ区切りでつないだリスト。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function enchant_broker_set_ordering($broker, string $tag, string $ordering): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0)<br/>
 * Enchant プロバイダを列挙する
 * @link http://php.net/manual/ja/function.enchant-broker-describe.php
 * @param resource $broker <p>
 * ブローカーリソース。
 * </p>
 * @return array 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function enchant_broker_describe($broker): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * 単語のスペルが正しいかどうかを調べる
 * @link http://php.net/manual/ja/function.enchant-dict-check.php
 * @param resource $dict <p>
 * 辞書リソース。
 * </p>
 * @param string $word <p>
 * 調べる単語。
 * </p>
 * @return bool 単語のスペルが正しい場合に <b>TRUE</b>、
 * そうでない場合に <b>FALSE</b> を返します。
 */
function enchant_dict_check($dict, string $word): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * 修正候補となる値の一覧を返す
 * @link http://php.net/manual/ja/function.enchant-dict-suggest.php
 * @param resource $dict <p>
 * 辞書リソース。
 * </p>
 * @param string $word <p>
 * 修正候補を調べる単語。
 * </p>
 * @return array 単語のスペルが間違っている場合に、修正候補の配列を返します。
 */
function enchant_dict_suggest($dict, string $word): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * パーソナル単語リストに単語を追加する
 * @link http://php.net/manual/ja/function.enchant-dict-add-to-personal.php
 * @param resource $dict <p>
 * 辞書リソース。
 * </p>
 * @param string $word <p>
 * 追加する単語。
 * </p>
 * @return void 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function enchant_dict_add_to_personal($dict, string $word): void {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * '単語' を、このスペルチェックセッションに追加する
 * @link http://php.net/manual/ja/function.enchant-dict-add-to-session.php
 * @param resource $dict <p>
 * 辞書リソース。
 * </p>
 * @param string $word <p>
 * 追加する単語。
 * </p>
 * @return void 値を返しません。
 */
function enchant_dict_add_to_session($dict, string $word): void {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * このスペリングセッションに '単語' が存在するかどうかを調べる
 * @link http://php.net/manual/ja/function.enchant-dict-is-in-session.php
 * @param resource $dict <p>
 * 辞書リソース。
 * </p>
 * @param string $word <p>
 * 探す単語。
 * </p>
 * @return bool 単語が存在する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function enchant_dict_is_in_session($dict, string $word): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * 単語の修正候補を追加する
 * @link http://php.net/manual/ja/function.enchant-dict-store-replacement.php
 * @param resource $dict <p>
 * 辞書リソース。
 * </p>
 * @param string $mis <p>
 * 修正する単語。
 * </p>
 * @param string $cor <p>
 * 正しい単語。
 * </p>
 * @return void 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function enchant_dict_store_replacement($dict, string $mis, string $cor): void {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * 現在のスペリングセッションの直近のエラーを返す
 * @link http://php.net/manual/ja/function.enchant-dict-get-error.php
 * @param resource $dict <p>
 * 辞書リソース。
 * </p>
 * @return string エラーメッセージを表す文字列、あるいはエラーが発生していない場合に
 * <b>FALSE</b> を返します。
 */
function enchant_dict_get_error($dict): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant &gt;= 0.1.0 )<br/>
 * 個々の辞書について説明する
 * @link http://php.net/manual/ja/function.enchant-dict-describe.php
 * @param resource $dict <p>
 * 辞書リソース。
 * </p>
 * @return mixed 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function enchant_dict_describe($dict) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL enchant:0.2.0-1.0.1)<br/>
 * 単語のスペルが正しいかどうかを調べ、修正候補を提供する
 * @link http://php.net/manual/ja/function.enchant-dict-quick-check.php
 * @param resource $dict <p>
 * 辞書リソース。
 * </p>
 * @param string $word <p>
 * 調べる単語。
 * </p>
 * @param array $suggestions [optional] <p>
 * 単語のスペルが間違っている場合に、
 * この変数の中に修正候補の配列が格納されます。
 * </p>
 * @return bool 単語のスペルが正しい場合に <b>TRUE</b>、
 * そうでない場合に <b>FALSE</b> を返します。
 */
function enchant_dict_quick_check($dict, string $word, array &$suggestions = null): bool {}


/**
 * MySpell 用の辞書の型。
 * <b>enchant_broker_get_dict_path</b> や
 * <b>enchant_broker_set_dict_path</b> で利用します。
 * @link http://php.net/manual/ja/enchant.constants.php
 */
define ('ENCHANT_MYSPELL', 1);

/**
 * Ispell 用の辞書の型。
 * <b>enchant_broker_get_dict_path</b> や
 * <b>enchant_broker_set_dict_path</b> で利用します。
 * @link http://php.net/manual/ja/enchant.constants.php
 */
define ('ENCHANT_ISPELL', 2);

// End of enchant v.1.1.0
?>
