<?php



/**
 * 仮想ドメインへのエイリアスを追加する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $domain
 * @param string $aliasdomain
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-add-alias-domain.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_add_alias_domain(string $domain, string $aliasdomain): bool {}

/**
 * 既存の仮想ドメインにエイリアスを追加する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $olddomain
 * @param string $newdomain
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-add-alias-domain-ex.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_add_alias_domain_ex(string $olddomain, string $newdomain): bool {}

/**
 * 仮想ドメインを新たに追加する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $domain
 * @param string $dir
 * @param int $uid
 * @param int $gid
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-add-domain.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_add_domain(string $domain, string $dir, int $uid, int $gid): bool {}

/**
 * 新規に仮想ドメインを追加する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $domain
 * @param string $passwd
 * @param string $quota
 * @param string $bounce
 * @param bool $apop
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-add-domain-ex.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_add_domain_ex(string $domain, string $passwd, string $quota = NULL, string $bounce = NULL, bool $apop = NULL): bool {}

/**
 * 指定した仮想ドメインに新規ユーザーを追加する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $user
 * @param string $domain
 * @param string $password
 * @param string $gecos
 * @param bool $apop
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-add-user.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_add_user(string $user, string $domain, string $password, string $gecos = NULL, bool $apop = NULL): bool {}

/**
 * 仮想エイリアスを追加する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $user
 * @param string $domain
 * @param string $alias
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-alias-add.php
 * @since PHP 4 >= 4.0.7, PECL vpopmail >= 0.2
 */
function vpopmail_alias_add(string $user, string $domain, string $alias): bool {}

/**
 * あるユーザーの仮想エイリアスを全て削除する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $user
 * @param string $domain
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-alias-del.php
 * @since PHP 4 >= 4.0.7, PECL vpopmail >= 0.2
 */
function vpopmail_alias_del(string $user, string $domain): bool {}

/**
 * あるドメインに関する仮想エイリアスを全て削除する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $domain
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-alias-del-domain.php
 * @since PHP 4 >= 4.0.7, PECL vpopmail >= 0.2
 */
function vpopmail_alias_del_domain(string $domain): bool {}

/**
 * あるドメインに関するエイリアスを取得する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $alias
 * @param string $domain
 * @return array
 * @link http://php.net/manual/ja/function.vpopmail-alias-get.php
 * @since PHP 4 >= 4.0.7, PECL vpopmail >= 0.2
 */
function vpopmail_alias_get(string $alias, string $domain): array {}

/**
 * あるドメインに関するエイリアスを全て取得する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $domain
 * @return array
 * @link http://php.net/manual/ja/function.vpopmail-alias-get-all.php
 * @since PHP 4 >= 4.0.7, PECL vpopmail >= 0.2
 */
function vpopmail_alias_get_all(string $domain): array {}

/**
 * ユーザー名/ドメイン/パスワードの認証を試みる
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $user
 * @param string $domain
 * @param string $password
 * @param string $apop
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-auth-user.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_auth_user(string $user, string $domain, string $password, string $apop = NULL): bool {}

/**
 * 仮想ドメインを削除する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $domain
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-del-domain.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_del_domain(string $domain): bool {}

/**
 * 仮想ドメインを削除する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $domain
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-del-domain-ex.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_del_domain_ex(string $domain): bool {}

/**
 * 仮想ドメインからユーザーを削除する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $user
 * @param string $domain
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-del-user.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_del_user(string $user, string $domain): bool {}

/**
 * 直近の vpopmail エラーに関するエラーメッセージを取得する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return string
 * @link http://php.net/manual/ja/function.vpopmail-error.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_error(): string {}

/**
 * 仮想ユーザーのパスワードを変更する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $user
 * @param string $domain
 * @param string $password
 * @param bool $apop
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-passwd.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_passwd(string $user, string $domain, string $password, bool $apop = NULL): bool {}

/**
 * 仮想ユーザーの容量制限(クオータ)を設定する
 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $user
 * @param string $domain
 * @param string $quota
 * @return bool
 * @link http://php.net/manual/ja/function.vpopmail-set-user-quota.php
 * @since PHP 4 >= 4.0.5, PECL vpopmail >= 0.2
 */
function vpopmail_set_user_quota(string $user, string $domain, string $quota): bool {}

