<?php



/**
 * マップを走査し、各エントリ上で関数をコールする
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $domain <p>NIS ドメイン名。</p>
 * @param string $map <p>NIS マップ。</p>
 * @param string $callback
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.yp-all.php
 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0
 */
function yp_all(string $domain, string $map, string $callback): void {}

/**
 * マップ全体を含む配列を返す
 * <p>すべてのマップエントリを返します。</p>
 * @param string $domain <p>NIS ドメイン名。</p>
 * @param string $map <p>NIS マップ。</p>
 * @return array <p>すべてのマップエントリを配列で返します。 マップのキーが配列のインデックスに、 マップのエントリが配列のデータとなります。</p>
 * @link http://php.net/manual/ja/function.yp-cat.php
 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0
 */
function yp_cat(string $domain, string $map): array {}

/**
 * 指定したエラーコードに対応するエラー文字列を返す
 * <p>指定されたエラーコードに対応する エラーメッセージを返します。何が悪かったのかを正確に調べる際に便利です。</p>
 * @param int $errorcode <p>エラーコード。</p>
 * @return string <p>エラーメッセージを表す文字列を返します。</p>
 * @link http://php.net/manual/ja/function.yp-err-string.php
 * @see yp_errno()
 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0
 */
function yp_err_string(int $errorcode): string {}

/**
 * 前の操作のエラーコードを返す
 * <p>前に行った操作のエラーコードを返します。</p>
 * @return int <p>エラー定数 <i>YPERR_XXX</i> のいずれかを返します。</p>
 * @link http://php.net/manual/ja/function.yp-errno.php
 * @see yp_err_string()
 * @since PHP 4 >= 4.0.6, PHP 5 < 5.1.0
 */
function yp_errno(): int {}

/**
 * 指定したマップから最初のキー/値の組を返す
 * <p>ドメイン <code>domain</code> のマップ <code>map</code> から、最初のキー/値の組を取得します。</p>
 * @param string $domain <p>NIS ドメイン名。</p>
 * @param string $map <p>NIS マップ。</p>
 * @return array <p>最初のキー/値 の組を表す配列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yp-first.php
 * @see yp_next(), yp_get_default_domain()
 * @since PHP 4, PHP 5 < 5.1.0
 */
function yp_first(string $domain, string $map): array {}

/**
 * マシンのデフォルト NIS ドメインを取得する
 * <p>ノードのデフォルトドメインを返します。 この後の NIS コールで、これをドメインパラメータとして使用可能です。</p><p>NIS ドメインは、NIS マップの集合として説明できます。情報を検索する 必要がある各ホストは、そのホスト自体あるドメインに属しています。 詳細な情報については、冒頭に示したドキュメントを参照ください。</p>
 * @return string <p>ノードのデフォルトドメイン または <b><code>FALSE</code></b> を返します。 返り値は、この後の NIS コールでドメインパラメータとして使用可能です。</p>
 * @link http://php.net/manual/ja/function.yp-get-default-domain.php
 * @since PHP 4, PHP 5 < 5.1.0
 */
function yp_get_default_domain(): string {}

/**
 * 指定したマップのマスタ NIS サーバーのマシン名を返す
 * <p><b>yp_master()</b> は、指定したマップ <code>map</code> のマスタ NIS サーバーのマシン名を返します。</p>
 * @param string $domain <p>NIS ドメイン名。</p>
 * @param string $map <p>NIS マップ。</p>
 * @return string
 * @link http://php.net/manual/ja/function.yp-master.php
 * @see yp_get_default_domain()
 * @since PHP 4, PHP 5 < 5.1.0
 */
function yp_master(string $domain, string $map): string {}

/**
 * 検索した行を返す
 * <p>指定した <code>map</code> から、 <code>key</code> に対応する値を返します。</p>
 * @param string $domain <p>NIS ドメイン名。</p>
 * @param string $map <p>NIS マップ。</p>
 * @param string $key <p>キーは正確でなければなりません。</p>
 * @return string <p>値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yp-match.php
 * @see yp_get_default_domain()
 * @since PHP 4, PHP 5 < 5.1.0
 */
function yp_match(string $domain, string $map, string $key): string {}

/**
 * マップから、次のキー/値の組を返す
 * <p><code>map</code> という名前のマップの中で、指定したキー <code>key</code> の次にある キー/値 の組を返します。</p>
 * @param string $domain
 * @param string $map
 * @param string $key
 * @return array <p>次のキー/値 の組を表す配列、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yp-next.php
 * @see yp_first(), yp_get_default_domain()
 * @since PHP 4, PHP 5 < 5.1.0
 */
function yp_next(string $domain, string $map, string $key): array {}

/**
 * マップの呼出番号を返す
 * <p>マップの呼出番号を返します。</p>
 * @param string $domain
 * @param string $map
 * @return int <p>マップの呼出番号、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.yp-order.php
 * @see yp_get_default_domain()
 * @since PHP 4, PHP 5 < 5.1.0
 */
function yp_order(string $domain, string $map): int {}

/**
 * アクセス違反 (これはつい最近追加されたもので、現在は PECL の SVN から取得したバージョンでしか使用できません)。
 */
define('YPERR_ACCESS', null);

/**
 * 関数の引数が間違っています。
 */
define('YPERR_BADARGS', null);

/**
 * YP データベースに問題があります。
 */
define('YPERR_BADDB', null);

/**
 * データベースの反応がありません。
 */
define('YPERR_BUSY', null);

/**
 * そのようなマップはサーバーのドメインにありません。
 */
define('YPERR_DOMAIN', null);

/**
 * そのようなキーはマップにありません。
 */
define('YPERR_KEY', null);

/**
 * そのようなマップはサーバーのドメインにありません。
 */
define('YPERR_MAP', null);

/**
 * ローカルドメイン名が設定されていません。
 */
define('YPERR_NODOM', null);

/**
 * マップデータベースにもうレコードがありません。
 */
define('YPERR_NOMORE', null);

/**
 * ポートマッパーと通信できません。
 */
define('YPERR_PMAP', null);

/**
 * リソースの割り当てに失敗しました。
 */
define('YPERR_RESRC', null);

/**
 * RPC の失敗 - ドメインがバインドされていません。
 */
define('YPERR_RPC', null);

/**
 * YP バージョンが一致しません。
 */
define('YPERR_VERS', null);

/**
 * ypbind と通信できません。
 */
define('YPERR_YPBIND', null);

/**
 * yp サーバーあるいはクライアントの内部エラー。
 */
define('YPERR_YPERR', null);

/**
 * ypserv と通信できません。
 */
define('YPERR_YPSERV', null);

