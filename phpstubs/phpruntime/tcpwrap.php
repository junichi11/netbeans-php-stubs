<?php



/**
 * tcpwrap のチェックを実行する
 * <p>この関数は /etc/hosts.allow および /etc/hosts.deny の内容をもとに、あるクライアントが <code>daemon</code> サービスへのアクセスを許可されているか 否かを調べます。</p>
 * @param string $daemon <p>サービスの名前。</p>
 * @param string $address <p>クライアントのリモートアドレス。IP アドレスあるいはドメイン名の どちらでも指定可能。</p>
 * @param string $user <p>ユーザー名（オプション）。</p>
 * @param bool $nodns <p><code>address</code> がドメイン名の場合、それを IP アドレスに名前解決するために DNS が使用されます。 <code>nodns</code> を <b><code>TRUE</code></b> に指定すると、この処理を 禁止します。</p>
 * @return bool <p>アクセスが許可されている場合に <b><code>TRUE</code></b> 、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.tcpwrap-check.php
 * @since PECL tcpwrap >= 0.1.0
 */
function tcpwrap_check(string $daemon, string $address, string $user = NULL, bool $nodns = false): bool {}

