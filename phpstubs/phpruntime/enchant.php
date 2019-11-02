<?php



namespace {

	/**
	 * Enchant プロバイダを列挙する
	 * <p>Enchant プロバイダを列挙し、その基本情報を通知します。 同じ情報が phpinfo() からでも取得できます。</p>
	 * @param resource $broker <p>ブローカーリソース。</p>
	 * @return array <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-describe.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0
	 */
	function enchant_broker_describe($broker): array {}

	/**
	 * 辞書が存在するかどうかを調べる。空でないタグを使用する
	 * <p>辞書が存在するかどうかを調べます。空でないタグを使用します。</p>
	 * @param resource $broker <p>ブローカーリソース。</p>
	 * @param string $tag <p>空でない、LOCALE 形式のタグ。例: us_US、ch_DE など。</p>
	 * @return bool <p>タグが存在する場合に <b><code>TRUE</code></b>、存在しない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-dict-exists.php
	 * @see enchant_broker_describe()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_dict_exists($broker, string $tag): bool {}

	/**
	 * ブローカーリソースおよびその辞書を開放する
	 * <p>ブローカーリソースを、その辞書とともに開放します。</p>
	 * @param resource $broker <p>ブローカーリソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-free.php
	 * @see enchant_broker_init()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_free($broker): bool {}

	/**
	 * 辞書リソースを開放する
	 * <p>辞書リソースを開放します。</p>
	 * @param resource $dict <p>辞書リソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-free-dict.php
	 * @see enchant_broker_request_dict(), enchant_broker_request_pwl_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_free_dict($dict): bool {}

	/**
	 * Get the directory path for a given backend
	 * <p>Get the directory path for a given backend.</p>
	 * @param resource $broker <p>Broker resource.</p>
	 * @param int $dict_type <p>The type of the dictionaries, i.e. <b><code>ENCHANT_MYSPELL</code></b> or <b><code>ENCHANT_ISPELL</code></b>.</p>
	 * @return bool <p>Returns the path of the dictionary directory on success失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-get-dict-path.php
	 * @see enchant_broker_set_dict_path()
	 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
	 */
	function enchant_broker_get_dict_path($broker, int $dict_type): bool {}

	/**
	 * ブローカーの直近のエラーを返す
	 * <p>このブローカーで発生した直近のエラーを返します。</p>
	 * @param resource $broker <p>ブローカーリソース。</p>
	 * @return string <p>エラーが見つかった場合にメッセージ文字列、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-get-error.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_get_error($broker): string {}

	/**
	 * 要求を満たすブローカーオブジェクトを作成する
	 * @return resource <p>成功した場合にブローカーリソース、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-init.php
	 * @see enchant_broker_free()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_init() {}

	/**
	 * 使用可能な辞書の一覧を返す
	 * <p>使用可能な辞書の一覧と、その詳細を返します。</p>
	 * @param resource $broker <p>ブローカーリソース。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-list-dicts.php
	 * @see enchant_broker_describe()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 1.0.1
	 */
	function enchant_broker_list_dicts($broker) {}

	/**
	 * タグを使用して新しい辞書を作成する
	 * <p>タグを使用して新しい辞書を作成します。空でない言語タグで、 使用したい辞書を指定します ("en_US"、"de_DE"、...)。</p>
	 * @param resource $broker <p>ブローカーリソース。</p>
	 * @param string $tag <p>ロケールを表すタグ。例えば en_US、de_DE など。</p>
	 * @return resource <p>成功した場合に辞書リソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-request-dict.php
	 * @see enchant_dict_describe(), enchant_broker_dict_exists(), enchant_broker_free_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_request_dict($broker, string $tag) {}

	/**
	 * PWL ファイルを使用して辞書を作成する
	 * <p>PWL ファイルを使用して辞書を作成します。 PWL ファイルは、一行にひとつの単語を記述したパーソナル単語ファイルです。</p>
	 * @param resource $broker <p>ブローカーリソース。</p>
	 * @param string $filename <p>PWL ファイルへのパス。 ファイルが存在しない場合は、可能であれば新しいファイルを作ります。</p>
	 * @return resource <p>成功した場合に辞書リソース、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-request-pwl-dict.php
	 * @see enchant_dict_describe(), enchant_broker_dict_exists(), enchant_broker_free_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_request_pwl_dict($broker, string $filename) {}

	/**
	 * Set the directory path for a given backend
	 * <p>Set the directory path for a given backend.</p>
	 * @param resource $broker <p>Broker resource.</p>
	 * @param int $dict_type <p>The type of the dictionaries, i.e. <b><code>ENCHANT_MYSPELL</code></b> or <b><code>ENCHANT_ISPELL</code></b>.</p>
	 * @param string $value <p>The path of the dictionary directory.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-set-dict-path.php
	 * @see enchant_broker_get_dict_path()
	 * @since PHP 5 >= 5.3.1, PHP 7, PECL enchant >= 1.0.1
	 */
	function enchant_broker_set_dict_path($broker, int $dict_type, string $value): bool {}

	/**
	 * その言語で使用する辞書の優先順位を宣言する
	 * <p>'タグ' で表される言語で使用する辞書の優先順位を宣言します。 順位は、プロバイダ名をカンマ区切りでつないだリストで表します。 例外として、言語タグに "&#42;" を使用すると、あらゆる言語についての デフォルトの順位を宣言します。 明示的に順位を指定しなかった言語についてはこれが使用されます。</p>
	 * @param resource $broker <p>ブローカーリソース。</p>
	 * @param string $tag <p>言語タグ。"&#42;" を使用すると、あらゆる言語についての デフォルトの順位を宣言します。 明示的に順位を指定しなかった言語についてはこれが使用されます。</p>
	 * @param string $ordering <p>プロバイダ名をカンマ区切りでつないだリスト。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-broker-set-ordering.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_broker_set_ordering($broker, string $tag, string $ordering): bool {}

	/**
	 * パーソナル単語リストに単語を追加する
	 * <p>指定した辞書のパーソナル単語リストに、単語を追加します。</p>
	 * @param resource $dict <p>辞書リソース。</p>
	 * @param string $word <p>追加する単語。</p>
	 * @return void <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-dict-add-to-personal.php
	 * @see enchant_broker_request_pwl_dict(), enchant_broker_request_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_add_to_personal($dict, string $word): void {}

	/**
	 * '単語' を、このスペルチェックセッションに追加する
	 * <p>指定した辞書に単語を追加します。 追加されるのは、アクティブなスペルチェックセッションについてのみです。</p>
	 * @param resource $dict <p>辞書リソース。</p>
	 * @param string $word <p>追加する単語。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.enchant-dict-add-to-session.php
	 * @see enchant_broker_request_dict()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_add_to_session($dict, string $word): void {}

	/**
	 * 単語のスペルが正しいかどうかを調べる
	 * <p>単語のスペルが正しい場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @param resource $dict <p>辞書リソース。</p>
	 * @param string $word <p>調べる単語。</p>
	 * @return bool <p>単語のスペルが正しい場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-dict-check.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_check($dict, string $word): bool {}

	/**
	 * 個々の辞書について説明する
	 * <p>辞書の詳細を返します。</p>
	 * @param resource $dict <p>辞書リソース。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-dict-describe.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_describe($dict) {}

	/**
	 * 現在のスペリングセッションの直近のエラーを返す
	 * <p>現在のスペリングセッションの、直近のエラーを返します。</p>
	 * @param resource $dict <p>辞書リソース。</p>
	 * @return string <p>エラーメッセージを表す文字列、あるいはエラーが発生していない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-dict-get-error.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_get_error($dict): string {}

	/**
	 * このスペリングセッションに '単語' が存在するかどうかを調べる
	 * <p>ある単語が、現在のセッション内に既に存在するかどうかを調べます。</p>
	 * @param resource $dict <p>辞書リソース。</p>
	 * @param string $word <p>探す単語。</p>
	 * @return bool <p>単語が存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-dict-is-in-session.php
	 * @see enchant_dict_add_to_session()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_is_in_session($dict, string $word): bool {}

	/**
	 * 単語のスペルが正しいかどうかを調べ、修正候補を提供する
	 * <p>単語のスペルが正しい場合は <b><code>TRUE</code></b>、そうでない場合は <b><code>FALSE</code></b> を返します。変数 suggestions を指定している場合は、 そこに修正候補が格納されます。</p>
	 * @param resource $dict <p>辞書リソース。</p>
	 * @param string $word <p>調べる単語。</p>
	 * @param array $suggestions <p>単語のスペルが間違っている場合に、 この変数の中に修正候補の配列が格納されます。</p>
	 * @return bool <p>単語のスペルが正しい場合に <b><code>TRUE</code></b>、 そうでない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-dict-quick-check.php
	 * @see enchant_dict_check(), enchant_dict_suggest()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant:0.2.0-1.0.1
	 */
	function enchant_dict_quick_check($dict, string $word, array &$suggestions = NULL): bool {}

	/**
	 * 単語の修正候補を追加する
	 * <p>'mis' の修正候補として 'cor' を使用します。 @mis が @cor に置き換えられることに注意しましょう。 今後 @mis が登場すると、それは @cor で置き換えられます。 そのため、@cor が修正候補の中で衝突するかもしれません。</p>
	 * @param resource $dict <p>辞書リソース。</p>
	 * @param string $mis <p>修正する単語。</p>
	 * @param string $cor <p>正しい単語。</p>
	 * @return void <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-dict-store-replacement.php
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_store_replacement($dict, string $mis, string $cor): void {}

	/**
	 * 修正候補となる値の一覧を返す
	 * @param resource $dict <p>辞書リソース。</p>
	 * @param string $word <p>修正候補を調べる単語。</p>
	 * @return array <p>単語のスペルが間違っている場合に、修正候補の配列を返します。</p>
	 * @link https://php.net/manual/ja/function.enchant-dict-suggest.php
	 * @see enchant_dict_check(), enchant_dict_quick_check()
	 * @since PHP 5 >= 5.3.0, PHP 7, PECL enchant >= 0.1.0 
	 */
	function enchant_dict_suggest($dict, string $word): array {}

	/**
	 * Ispell 用の辞書の型。 <code>enchant_broker_get_dict_path()</code> や <code>enchant_broker_set_dict_path()</code> で利用します。
	 */
	define('ENCHANT_ISPELL', null);

	/**
	 * MySpell 用の辞書の型。 <code>enchant_broker_get_dict_path()</code> や <code>enchant_broker_set_dict_path()</code> で利用します。
	 */
	define('ENCHANT_MYSPELL', null);

}
