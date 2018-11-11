<?php



/**
 * 指定したソースを PHP トークンに分割する
 * <p><b>token_get_all()</b> は指定した文字列 <code>source</code> をパースし、Zend engine の 字句解析スキャナにより PHP 言語のトークンに分割します。</p><p>パーサトークンの一覧を得るには、パーサトークンの一覧 を参照するか、 あるいは <code>token_name()</code> でトークン値を文字列表現に 変換します。</p>
 * @param string $source <p>パースする PHP ソース。</p>
 * @param int $flags <p>以下のフラグが使えます。</p><ul> <li>  <b><code>TOKEN_PARSE</code></b> - 特定のコンテキストで予約語を使った場合に、それを認識する。  </li> </ul>
 * @return array <p>トークン ID の配列を返します。配列の各要素には、一文字単位の文字列 (例: <i>;</i>、<i>.</i>、 <i>&gt;</i>、<i>!</i> など...)、 またはトークンのインデックスを 0 番目の要素、トークンの文字列表現を 1 番目の要素、 行番号を 2 番目の要素とする配列が含まれます。</p>
 * @link http://php.net/manual/ja/function.token-get-all.php
 * @see token_name()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function token_get_all(string $source, int $flags = 0): array {}

/**
 * 指定した PHP トークンのシンボル名を取得する
 * <p><b>token_name()</b>は、PHP <code>token</code> 値のシンボル名を返します。</p>
 * @param int $token <p>トークンの値。</p>
 * @return string <p><code>token</code> に対応するシンボル名を返します。</p>
 * @link http://php.net/manual/ja/function.token-name.php
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function token_name(int $token): string {}

