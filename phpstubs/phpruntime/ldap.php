<?php



/**
 * 8859 文字を t61 文字に変換する
 * <p><i>ISO-8859</i> 文字を <i>t61</i> 文字に変換します。</p><p>この関数は、 <i>LDAPv2</i> サーバーとやり取りしなければならない場合に有用です。</p>
 * @param string $value <p>変換するテキスト。</p>
 * @return string <p><code>value</code> を <i>t61</i> に変換したものを返します。</p>
 * @link http://php.net/manual/ja/function.ldap-8859-to-t61.php
 * @see ldap_t61_to_8859()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function ldap_8859_to_t61(string $value): string {}

/**
 * LDAP ディレクトリにエントリを付加する
 * <p>エントリを LDAP ディレクトリに追加します。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $dn <p>LDAP エンティティの識別名。</p>
 * @param array $entry <p>そのエントリに関する情報を表す配列。 エントリの値は、個々の属性によりインデックスが作成されています。 ある属性に関して複数の値がある場合は、0 から始まる整数で 添字が作成されます。</p>  <code> &lt;&#63;php<br>$entry["attribute1"] = "value";<br>$entry["attribute2"][0] = "value1";<br>$entry["attribute2"][1] = "value2";<br>&#63;&gt;  </code>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-add.php
 * @see ldap_delete()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_add($link_identifier, string $dn, array $entry): bool {}

/**
 * LDAP ディレクトリにバインドする
 * <p>指定した RDN およびパスワードを用いて LDAP ディレクトリにバインドします。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $bind_rdn
 * @param string $bind_password
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-bind.php
 * @see ldap_unbind()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_bind($link_identifier, string $bind_rdn = NULL, string $bind_password = NULL): bool {}

/**
 * ldap_unbind() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>ldap_unbind()</code>.</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.ldap-close.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_close($link_identifier): bool {}

/**
 * 指定した DN のエントリで見付かった属性の値を比較する
 * <p>属性 <code>attribute</code> の値 <code>value</code> を、指定した LDAP ディレクトリエントリの同じ属性の値と比較します。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $dn <p>LDAP エンティティの識別名。</p>
 * @param string $attribute <p>属性の名前。</p>
 * @param string $value <p>比較する値。</p>
 * @return mixed <p><code>value</code> がマッチする場合に <b><code>TRUE</code></b>、その他の場合に <b><code>FALSE</code></b>、エラーの場合に -1 を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-compare.php
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function ldap_compare($link_identifier, string $dn, string $attribute, string $value) {}

/**
 * LDAP サーバーへ接続する
 * <p>LDAP リンク ID を作成して、指定した <code>host</code> および <code>port</code> が妥当であるかどうかを調べます。</p><p>注意: この関数は、接続を確立するするわけでは <i>ありません</i>。 指定したパラメータが妥当であり、必要に応じて接続をオープンできるかどうかを調べるだけです。</p>
 * @param string $host <p>このフィールドには、ホスト名を指定します。OpenLDAP 2.x.x 以降を使用している場合は、 LDAP URI を指定することもできます。<i>ldap://hostname:port</i> 形式、あるいは SSL を用いる場合は <i>ldaps://hostname:port</i> 形式が使えます。</p> <p>複数の LDAP URI を指定する場合は、間にスペースをはさんだひとつの文字列とします。</p> <p><i>hostname:port</i> 形式は LDAP URI としてサポートされないことに注意しましょう。 スキーマが抜けているからです。</p>
 * @param int $port <p>接続するポート。LDAP URI を用いる場合は使用しません。</p>
 * @return resource <p>指定したホスト名とポートの組み合わせ、あるいは LDAP URI が妥当であると思われる場合に正の LDAP リンク ID を返します。 これは単なる構文チェックであり、実際にサーバーに接続するわけではありません。 構文チェックに失敗した場合は <b><code>FALSE</code></b> を返します。 OpenLDAP 2.x.x を使用している場合は、 <b>ldap_connect()</b> は常に <code>resource</code> を返しますが、実際には接続せずにパラメータの初期化だけを行います。 実際に接続するのは次に ldap_&#42; 関数がコールされた際で、これは 通常は <code>ldap_bind()</code> です。</p><p>引数が指定されない場合、既に開かれているリンクのリンク ID を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-connect.php
 * @see ldap_bind()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_connect(string $host = NULL, int $port = 389) {}

/**
 * LDAP ページネーション制御情報を送信する
 * <p>LDAP ページネーションを有効にするため、ページネーション制御情報 (ページサイズやクッキーなど) を送信します。</p>
 * @param resource $link <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param int $pagesize <p>ページあたりのエントリ数。</p>
 * @param bool $iscritical <p>ページネーションを必須にするかどうか。 true にすると、もしサーバーがページネーションに対応していなければ 検索結果を返しません。</p>
 * @param string $cookie <p>サーバーから送られる opaque structure (<code>ldap_control_paged_result_response()</code>)。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-control-paged-result.php
 * @see ldap_control_paged_result_response()
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function ldap_control_paged_result($link, int $pagesize, bool $iscritical = false, string $cookie = ""): bool {}

/**
 * LDAP ページネーションクッキーを取得する
 * <p>サーバーから送られるページネーション情報を取得します。</p>
 * @param resource $link <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result
 * @param string $cookie <p>サーバーから送られる opaque structure。</p>
 * @param int $estimated <p>取得するエントリ数の予測。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-control-paged-result-response.php
 * @see ldap_control_paged_result()
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function ldap_control_paged_result_response($link, $result, string &$cookie = NULL, int &$estimated = NULL): bool {}

/**
 * 検索結果のエントリ数を数える
 * <p>直前の検索結果として保存されたエントリの数を返します。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result_identifier <p>内部の LDAP 結果。</p>
 * @return int <p>結果のエントリ数を返します。エラーの場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-count-entries.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_count_entries($link_identifier, $result_identifier): int {}

/**
 * ディレクトリからエントリを削除する
 * <p>指定したエントリを LDAP ディレクトリから削除します。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $dn <p>LDAP エンティティの識別名。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-delete.php
 * @see ldap_add()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_delete($link_identifier, string $dn): bool {}

/**
 * DN をユーザーに分かりやすい名前のフォーマットに変換する
 * <p>指定した <code>dn</code> をよりユーザーにわかりやすい形式にするため、 型名を取り除きます。</p>
 * @param string $dn <p>LDAP エンティティの識別名。</p>
 * @return string <p>ユーザーにわかりやすい形式の名前を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-dn2ufn.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_dn2ufn(string $dn): string {}

/**
 * LDAP のエラー番号をエラーメッセージ文字列に変換する
 * <p>この関数は、エラー番号 <code>errno</code> が意味する エラーメッセージ文字列を返します。LDAP errno 番号は標準化されていますが、 異なったライブラリでは、異なる（あるいはローカライズされた）エラーメッセージ が返されます。エラーメッセージの内容をチェックするのではなく、 必ずエラー番号をチェックするようにしてください。</p>
 * @param int $errno <p>エラー番号。</p>
 * @return string <p>エラーメッセージを表す文字列を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-err2str.php
 * @see ldap_errno(), ldap_error()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_err2str(int $errno): string {}

/**
 * 直近の LDAP コマンドの LDAP エラー番号を返す
 * <p>直近の LDAP コマンドにより返された、標準化されたエラー番号を返します。 この番号は、<code>ldap_err2str()</code> を用いてエラーメッセージ 文字列に変換することができます。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @return int <p>このリンクに関する直近の LDAP コマンドの LDAP エラー番号を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-errno.php
 * @see ldap_err2str(), ldap_error()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_errno($link_identifier): int {}

/**
 * 直近の LDAP コマンドの LDAP エラーメッセージを返す
 * <p>指定した <code>link_identifier</code> に関して、 直近の LDAP コマンドにより生成されたエラーを表すエラーメッセージ文字列を返します。 LDAP errno 番号は標準化されていますが、ライブラリによって異なる （あるいはローカライズされた）エラーメッセージを返します。 エラーメッセージの内容をチェックするのではなく、 必ずエラー番号をチェックするようにしてください。</p><p>php.ini で警告レベルを十分に下げるか、 警告出力を抑制するために LDAP コマンドの前に <i>@</i> 文字をつけない限り、発生したエラーは HTML 出力にも表示されます。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @return string <p>エラーメッセージ文字列を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-error.php
 * @see ldap_err2str(), ldap_errno()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_error($link_identifier): string {}

/**
 * Escape a string for use in an LDAP filter or DN
 * <p>Escapes <code>value</code> for use in the context implied by <code>flags</code>.</p>
 * @param string $value <p>The value to escape.</p>
 * @param string $ignore <p>Characters to ignore when escaping.</p>
 * @param int $flags <p>The context the escaped string will be used in: <b><code>LDAP_ESCAPE_FILTER</code></b> for filters to be used with <code>ldap_search()</code>, or <b><code>LDAP_ESCAPE_DN</code></b> for DNs.</p>
 * @return string <p>Returns the escaped string.</p>
 * @link http://php.net/manual/ja/function.ldap-escape.php
 * @since PHP 5 >= 5.6.0, PHP 7
 */
function ldap_escape(string $value, string $ignore = NULL, int $flags = NULL): string {}

/**
 * Performs an extended operation
 * <p>Performs an extended operation on the specified <code>link</code> with <code>reqoid</code> the OID of the operation and <code>reqdata</code> the data.</p>
 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
 * @param string $reqoid <p>The extended operation request OID. You may use one of <b><code>LDAP_EXOP_START_TLS</code></b>, <b><code>LDAP_EXOP_MODIFY_PASSWD</code></b>, <b><code>LDAP_EXOP_REFRESH</code></b>, <b><code>LDAP_EXOP_WHO_AM_I</code></b>, <b><code>LDAP_EXOP_TURN</code></b>, or a string with the OID of the operation you want to send.</p>
 * @param string $reqdata <p>The extended operation request data. May be NULL for some operations like <b><code>LDAP_EXOP_WHO_AM_I</code></b>, may also need to be BER encoded.</p>
 * @param array $servercontrols <p>Unused as of PHP 7.2.</p>
 * @param string $retdata <p>Will be filled with the extended operation response data if provided. If not provided you may use ldap_parse_exop on the result object later to get this data.</p>
 * @param string $retoid <p>Will be filled with the response OID if provided, usually equal to the request OID.</p>
 * @return mixed <p>When used with <code>retdata</code>, returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on error. When used without <code>retdata</code>, returns a result identifier or <b><code>FALSE</code></b> on error.</p>
 * @link http://php.net/manual/ja/function.ldap-exop.php
 * @see ldap_parse_result(), ldap_parse_exop(), ldap_exop_whoami(), ldap_exop_refresh(), ldap_exop_passwd()
 * @since PHP 7 >= 7.2.0
 */
function ldap_exop($link, string $reqoid, string $reqdata = NULL, array $servercontrols = NULL, string &$retdata = NULL, string &$retoid = NULL) {}

/**
 * PASSWD extended operation helper
 * <p>Performs a PASSWD extended operation.</p>
 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
 * @param string $user <p>dn of the user to change the password of.</p>
 * @param string $oldpw <p>The old password of this user. May be ommited depending of server configuration.</p>
 * @param string $newpw <p>The new password for this user. May be omitted or empty to have a generated password.</p>
 * @param array $serverctrls
 * @return mixed <p>Returns the generated password if <code>newpw</code> is empty or omitted. Otherwise returns <b><code>TRUE</code></b> on success and <b><code>FALSE</code></b> on failure.</p>
 * @link http://php.net/manual/ja/function.ldap-exop-passwd.php
 * @see ldap_exop(), ldap_parse_exop()
 * @since PHP 7 >= 7.2.0
 */
function ldap_exop_passwd($link, string $user = NULL, string $oldpw = NULL, string $newpw = NULL, array &$serverctrls = NULL) {}

/**
 * Refresh extended operation helper
 * <p>Performs a Refresh extended operation and returns the data.</p>
 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
 * @param string $dn <p>dn of the entry to refresh.</p>
 * @param int $ttl <p>Time in seconds (between 1 and 31557600) that the client requests that the entry exists in the directory before being automatically removed.</p>
 * @return int <p>From RFC: The responseTtl field is the time in seconds which the server chooses to have as the time-to-live field for that entry. It must not be any smaller than that which the client requested, and it may be larger. However, to allow servers to maintain a relatively accurate directory, and to prevent clients from abusing the dynamic extensions, servers are permitted to shorten a client-requested time-to-live value, down to a minimum of 86400 seconds (one day). <b><code>FALSE</code></b> will be returned on error.</p>
 * @link http://php.net/manual/ja/function.ldap-exop-refresh.php
 * @see ldap_exop()
 * @since PHP 7 >= 7.3.0
 */
function ldap_exop_refresh($link, string $dn, int $ttl): int {}

/**
 * WHOAMI extended operation helper
 * <p>Performs a WHOAMI extended operation and returns the data.</p>
 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
 * @return string <p>The data returned by the server, or <b><code>FALSE</code></b> on error.</p>
 * @link http://php.net/manual/ja/function.ldap-exop-whoami.php
 * @see ldap_exop()
 * @since PHP 7 >= 7.2.0
 */
function ldap_exop_whoami($link): string {}

/**
 * DN を構成要素ごとに分割する
 * <p><code>ldap_get_dn()</code> により返された DN を分割し、 複数の要素に分けます。各部分は、相対区分名 (Relative Distinguished Name または RDN) と呼ばれます。</p>
 * @param string $dn <p>LDAP エンティティの識別名。</p>
 * @param int $with_attrib <p>RDN が値のみを返すのか、 あるいは、属性を同時に返すのかを指定するために使用します。 属性を有する RDN (属性=値 フォーマットで) を得るためには <code>with_attrib</code> を 0 とし、 値のみを得るためには 1 に設定します。</p>
 * @return array <p>すべての DN 要素を配列で返します。失敗した場合に <b><code>FALSE</code></b> を返します。 この配列の最初の要素のキーは <i>count</i> で、 これは返される値の数を表します。次の要素は、DN の数値添字配列となります。</p>
 * @link http://php.net/manual/ja/function.ldap-explode-dn.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_explode_dn(string $dn, int $with_attrib): array {}

/**
 * 最初の属性を返す
 * <p>指定したエントリの最初の属性を取得します。残りの属性は、 <code>ldap_next_attribute()</code> を逐次コールして取得します。</p><p>エントリの読み込みと同様、 エントリからの属性の読み込みもひとつづつ行われます。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result_entry_identifier
 * @return string <p>成功した場合にエントリの最初の属性、エラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-first-attribute.php
 * @see ldap_next_attribute(), ldap_get_attributes()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_first_attribute($link_identifier, $result_entry_identifier): string {}

/**
 * 最初の結果 ID を返す
 * <p>結果内の最初のエントリのエントリ ID を返します。このエントリ ID を <code>ldap_next_entry()</code> に渡し、 結果からそれ以降のエントリを取得します。</p><p>LDAP 結果におけるエントリは、<b>ldap_first_entry()</b> および <code>ldap_next_entry()</code> 関数を用いて連続的に 読み込まれます。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result_identifier
 * @return resource <p>成功時に最初のエントリに関する結果エントリ ID、エラーの場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-first-entry.php
 * @see ldap_get_entries()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_first_entry($link_identifier, $result_identifier) {}

/**
 * 最初のリファレンスを返す
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $link
 * @param resource $result
 * @return resource
 * @link http://php.net/manual/ja/function.ldap-first-reference.php
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function ldap_first_reference($link, $result) {}

/**
 * 結果メモリを開放する
 * <p>内部での結果保持用に割り当てられていたメモリを開放します。 結果メモリは、スクリプトの終了時に自動的に開放されます。</p><p>通常、LDAP の結果用に確保された全てのメモリはスクリプトの実行終了時 に開放されます。連続的な検索を行うスクリプトのように大きな 結果セットを返す場合、スクリプトにより使用される実行用メモリを 小さく保つために <b>ldap_free_result()</b> をコールすることが可能です。</p>
 * @param resource $result_identifier
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-free-result.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_free_result($result_identifier): bool {}

/**
 * 検索結果エントリから属性を得る
 * <p>検索結果エントリから属性と値を読み込みます。</p><p>ディレクトリに特定のエントリを置いている場合、この関数をコールする ことにより、そのエントリに関して保持されている情報得ることができます。 ディレクトリエントリを "ブラウズ" するか、ディレクトリエントリの 構造が未知であるアプリケーションにおいてこの関数を使用します。 多くのアプリケーションにおいては、電子メールアドレスや姓のような 特定の属性を検索するため、保持されている他のデータにどんなものがあるか ということは問題にならないと思われます。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result_entry_identifier
 * @return array <p>成功時に完全なエントリ情報を多次元配列で返します。エラーの場合、 <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-get-attributes.php
 * @see ldap_first_attribute(), ldap_next_attribute()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_get_attributes($link_identifier, $result_entry_identifier): array {}

/**
 * 結果エントリから DN を得る
 * <p>結果における、あるエントリの DN を見つけます。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result_entry_identifier
 * @return string <p>結果エントリの DN を返します。エラーの場合、<b><code>FALSE</code></b>を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-get-dn.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_get_dn($link_identifier, $result_entry_identifier): string {}

/**
 * 全ての結果エントリを得る
 * <p>指定した結果から複数のエントリを読み込み、 その属性および複数の値を読み込みます。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result_identifier
 * @return array <p>成功時に完全な結果情報を多次元配列で返します。エラーの場合に <b><code>FALSE</code></b> を返します。</p><p>配列の構造は次のようになります。 属性インデックスは、小文字に変換されます (属性は大文字小文字を区別しませんが、配列インデックスとして使用する時は別です)。</p>  <pre> return_value["count"] = 結果におけるエントリの数 return_value[0] : 最初のエントリの詳細情報を参照します return_value[i]["dn"] = 結果における i 番目のエントリ DN return_value[i]["count"] = i 番目のエントリにおける属性の数 return_value[i][j] = 結果における i 番目のエントリにおける j 番目の属性名 return_value[i]["attribute"]["count"] = i 番目のエントリにおける属性に関する値の数 return_value[i]["attribute"][j] = i 番目のエントリにおける j 番目の値 </pre>
 * @link http://php.net/manual/ja/function.ldap-get-entries.php
 * @see ldap_first_entry(), ldap_next_entry()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_get_entries($link_identifier, $result_identifier): array {}

/**
 * 指定したオプションの現在の値を得る
 * <p><code>retval</code> を、指定したオプションの値として設定します。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param int $option <p>パラメータ <code>option</code> は以下のいずれかとなります。</p>   オプション 型     <b><code>LDAP_OPT_DEREF</code></b> integer   <b><code>LDAP_OPT_SIZELIMIT</code></b> integer   <b><code>LDAP_OPT_TIMELIMIT</code></b> integer   <b><code>LDAP_OPT_NETWORK_TIMEOUT</code></b> integer   <b><code>LDAP_OPT_PROTOCOL_VERSION</code></b> integer   <b><code>LDAP_OPT_ERROR_NUMBER</code></b> integer   <b><code>LDAP_OPT_REFERRALS</code></b> bool   <b><code>LDAP_OPT_RESTART</code></b> bool   <b><code>LDAP_OPT_HOST_NAME</code></b> string   <b><code>LDAP_OPT_ERROR_STRING</code></b> string   <b><code>LDAP_OPT_MATCHED_DN</code></b> string   <b><code>LDAP_OPT_SERVER_CONTROLS</code></b> array   <b><code>LDAP_OPT_CLIENT_CONTROLS</code></b> array   <b><code>LDAP_OPT_X_KEEPALIVE_IDLE</code></b> int     <b><code>LDAP_OPT_X_KEEPALIVE_PROBES</code></b> int     <b><code>LDAP_OPT_X_KEEPALIVE_INTERVAL</code></b> int     <b><code>LDAP_OPT_X_TLS_CACERTDIR</code></b> string     <b><code>LDAP_OPT_X_TLS_CACERTFILE</code></b> string     <b><code>LDAP_OPT_X_TLS_CERTFILE</code></b> string     <b><code>LDAP_OPT_X_TLS_CIPHER_SUITE</code></b> string     <b><code>LDAP_OPT_X_TLS_CRLCHECK</code></b> integer     <b><code>LDAP_OPT_X_TLS_CRLFILE</code></b> string     <b><code>LDAP_OPT_X_TLS_DHFILE</code></b> string     <b><code>LDAP_OPT_X_TLS_KEYILE</code></b> string     <b><code>LDAP_OPT_X_TLS_PACKAGE</code></b> string     <b><code>LDAP_OPT_X_TLS_PROTOCOL_MIN</code></b> integer     <b><code>LDAP_OPT_X_TLS_RANDOM_FILE</code></b> string     <b><code>LDAP_OPT_X_TLS_REQUIRE_CERT</code></b> integer  
 * @param mixed $retval <p>これが、オプションの値として設定されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-get-option.php
 * @see ldap_set_option()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function ldap_get_option($link_identifier, int $option, &$retval): bool {}

/**
 * 結果エントリから全ての値を得る
 * <p>結果内のエントリ属性の、すべての値を読み込みます。</p><p>この関数のコールは、<code>result_entry_identifier</code> を必要とします。このため、事前に LDAP の検索用関数のコールと個々の エントリ取得用関数のコールを行っておく必要があります。</p><p>アプリケーションでは、("surname" または "mail" のような)特定の属性 を探すためにその属性をコードに埋め込んで置くか、さもなくば、指定した エントリに関して存在する属性を調べるために <code>ldap_get_attributes()</code> をコールする必要があります。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result_entry_identifier
 * @param string $attribute
 * @return array <p>成功した場合、指定した属性に関する値を配列を返します。エラーの場合は <b><code>FALSE</code></b> を返します。値の数を調べるには、結果の配列の "count" という要素を確認します。個々の値にアクセスするには、 整数値のインデックスを指定して配列にアクセスします。 最初のインデックスは 0 となります。</p><p>LDAP では、ある属性に関して複数のエントリを持つことが可能です。 このため、たとえば一人の人間のディレクトリエントリに多数の 電子メールアドレスがあったとしても、それらをすべて "mail" という属性で管理することができます。</p> <pre> return_value["count"] = 属性の値の数 return_value[0] = 属性の最初の値 return_value[i] = 属性の i 番目の値 </pre>
 * @link http://php.net/manual/ja/function.ldap-get-values.php
 * @see ldap_get_values_len()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_get_values($link_identifier, $result_entry_identifier, string $attribute): array {}

/**
 * 結果エントリから全てのバイナリ値を得る
 * <p>結果のエントリから、属性のすべての値を読み込みます。</p><p>この関数は、文字列データではなくバイナリデータを処理すること以外は、 <code>ldap_get_values()</code> と全く同じです。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result_entry_identifier
 * @param string $attribute
 * @return array <p>成功時に属性の値を配列で返し、エラー時に <b><code>FALSE</code></b> を返します。 個々の値は、配列インデックスによりアクセスします。最初のインデックスは、0 です。 値の数は、結果の配列の "count" という要素で知ることができます。</p>
 * @link http://php.net/manual/ja/function.ldap-get-values-len.php
 * @see ldap_get_values()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_get_values_len($link_identifier, $result_entry_identifier, string $attribute): array {}

/**
 * 単一階層の検索を行う
 * <p>指定したフィルタ <code>filter</code> を使用し、スコープ <b><code>LDAP_SCOPE_ONELEVEL</code></b> でディレクトリを検索します。</p><p><b><code>LDAP_SCOPE_ONELEVEL</code></b> は、コール時に指定した <code>base_dn</code> の直下の階層から検索した結果のみを返すことを表します ("<b>ls</b>" と入力して、現在の作業ディレクトリのファイル/フォルダ 一覧を取得するのと同じようなものです)。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $base_dn <p>ディレクトリのベース DN。</p>
 * @param string $filter
 * @param array $attributes <p>必要な属性を、 array("mail", "sn", "cn") のような通常の PHP 文字列配列で保持します。 "dn" は要求された属性の型によらず常に返されることに注意してください。</p> <p>このパラメータを使用すると、デフォルトの動作よりもかなり効率的になります (デフォルトでは、すべての属性とその値を返します)。 したがって、これを使用することを推奨します。</p>
 * @param int $attrsonly <p>属性の型のみを取得したい場合は 1 を設定します。 属性の型および値の両方を取得したい場合は 0 を設定します (これがデフォルトの挙動です)。</p>
 * @param int $sizelimit <p>取得するエントリ数の制限を設定します。 0 は無制限であることを表します。</p>  <p><b>注意</b>:</p> <p>このパラメータは、サーバー側で事前に設定されている sizelimit を上書きすることはできません。それ以下の値を指定することはできます。</p> <p>ディレクトリサーバーのホストによっては、 事前に設定された数以上のエントリを返さないようになっているものもあります。 この場合、サーバーでは、それが結果セットのすべてではないことを通知します。 このパラメータでエントリ数を制限した場合にも、同じことが起こります。</p>
 * @param int $timelimit <p>検索に要する最大秒数を設定します。 これを 0 にすると無制限であることを表します。</p>  <p><b>注意</b>:</p> <p>このパラメータは、サーバー側で事前に設定されている timelimit を上書きすることはできません。それ以下の値を指定することはできます。</p>
 * @param int $deref <p>検索時のエイリアスの扱いについて指定します。 以下のいずれかとなります。</p><ul> <li>  <b><code>LDAP_DEREF_NEVER</code></b> - (デフォルト) エイリアスは参照されません。  </li> <li>  <b><code>LDAP_DEREF_SEARCHING</code></b> - エイリアスを参照しますが、検索のベースオブジェクト上にいるときは参照しません。  </li> <li>  <b><code>LDAP_DEREF_FINDING</code></b> - エイリアスの参照は、ベースオブジェクト上にいて検索中でない場合に行われます。  </li> <li>  <b><code>LDAP_DEREF_ALWAYS</code></b> - エイリアスを常に参照します。  </li> </ul>
 * @return resource <p>検索結果 ID を返します。エラーの場合は、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-list.php
 * @see ldap_search()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_list($link_identifier, string $base_dn, string $filter, array $attributes = NULL, int $attrsonly = NULL, int $sizelimit = NULL, int $timelimit = NULL, int $deref = NULL) {}

/**
 * 現在の属性に属性を追加する
 * <p>指定した <code>dn</code> に属性を追加します。 この関数は、オブジェクトレベルではなく属性レベルで修正を行います。 オブジェクトレベルの追加は、<code>ldap_add()</code> 関数により行います。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $dn <p>LDAP エンティティの識別名。</p>
 * @param array $entry
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-mod-add.php
 * @see ldap_mod_del(), ldap_mod_replace()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_mod_add($link_identifier, string $dn, array $entry): bool {}

/**
 * 現在の属性から属性を削除する
 * <p>ひとつあるいは複数の属性を、指定した <code>dn</code> から削除します。 この関数は、オブジェクトレベルではなく属性レベルで修正を行います。 オブジェクトレベルの削除は、<code>ldap_delete()</code> 関数により行います。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $dn <p>LDAP エンティティの識別名。</p>
 * @param array $entry
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-mod-del.php
 * @see ldap_mod_add(), ldap_mod_replace()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_mod_del($link_identifier, string $dn, array $entry): bool {}

/**
 * 属性を新規の値に置換する
 * <p>指定した <code>dn</code> でひとつあるいは複数の属性の置換を行います。 この関数は、オブジェクトレベルではなく属性レベルで修正を行います。 オブジェクトレベルの修正は、<code>ldap_modify()</code> 関数により行います。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $dn <p>LDAP エンティティの識別名。</p>
 * @param array $entry
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-mod-replace.php
 * @see ldap_mod_del(), ldap_mod_add()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_mod_replace($link_identifier, string $dn, array $entry): bool {}

/**
 * LDAP エントリを修正する
 * <p>LDAP ディレクトリ内のエントリを修正します。エントリの構造は <code>ldap_add()</code> と同じです。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $dn <p>LDAP エンティティの識別名。</p>
 * @param array $entry
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-modify.php
 * @see ldap_rename()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_modify($link_identifier, string $dn, array $entry): bool {}

/**
 * Batch and execute modifications on an LDAP entry
 * <p>Modifies an existing entry in the LDAP directory. Allows detailed specification of the modifications to perform.</p>
 * @param resource $link_identifier <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
 * @param string $dn <p>The distinguished name of an LDAP entity.</p>
 * @param array $entry <p>An array that specifies the modifications to make. Each entry in this array is an associative array with two or three keys: <i>attrib</i> maps to the name of the attribute to modify, <i>modtype</i> maps to the type of modification to perform, and (depending on the type of modification) <i>values</i> maps to an array of attribute values relevant to the modification.</p> <p>Possible values for <i>modtype</i> include:</p>  <b><code>LDAP_MODIFY_BATCH_ADD</code></b>   <p>Each value specified through <i>values</i> is added (as an additional value) to the attribute named by <i>attrib</i>.</p>   <b><code>LDAP_MODIFY_BATCH_REMOVE</code></b>   <p>Each value specified through <i>values</i> is removed from the attribute named by <i>attrib</i>. Any value of the attribute not contained in the <i>values</i> array will remain untouched.</p>   <b><code>LDAP_MODIFY_BATCH_REMOVE_ALL</code></b>   <p>All values are removed from the attribute named by <i>attrib</i>. A <i>values</i> entry must not be provided.</p>   <b><code>LDAP_MODIFY_BATCH_REPLACE</code></b>   <p>All current values of the attribute named by <i>attrib</i> are replaced with the values specified through <i>values</i>.</p>   <p>Note that any value for <i>attrib</i> must be a string, any value for <i>values</i> must be an array of strings, and any value for <i>modtype</i> must be one of the LDAP_MODIFY_BATCH_&#42; constants listed above.</p>
 * @param array $serverctrls
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-modify-batch.php
 * @since PHP 5.4 >= 5.4.26, PHP 5.5 >= 5.5.10, PHP 5.6 >= 5.6.0, PHP 7
 */
function ldap_modify_batch($link_identifier, string $dn, array $entry, array $serverctrls = NULL): bool {}

/**
 * 結果における次の属性を得る
 * <p>エントリ内の属性を取得します。 最初に <b>ldap_next_attribute()</b> をコールした際には <code>ldap_first_attribute()</code> から返される <code>result_entry_identifier</code> を使用します。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result_entry_identifier
 * @return string <p>成功した場合、エントリにおける次の属性を返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-next-attribute.php
 * @see ldap_get_attributes()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_next_attribute($link_identifier, $result_entry_identifier): string {}

/**
 * 次の結果エントリを得る
 * <p>結果に保持されたエントリを取得します。 連続的に <b>ldap_next_entry()</b> をコールした場合、 エントリがなくなるまでエントリを一つずつ返します。 <b>ldap_next_entry()</b> への最初のコールは、 <code>ldap_first_entry()</code> に <code>result_entry_identifier</code> を指定してコールした後に、その結果を用いて行います。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result_entry_identifier
 * @return resource <p><code>ldap_first_entry()</code> によりエントリが読み始められた 結果において次のエントリに関するエントリID を返します。 これ以上結果のエントリがない場合は、<b><code>FALSE</code></b>を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-next-entry.php
 * @see ldap_get_entries()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_next_entry($link_identifier, $result_entry_identifier) {}

/**
 * 次のリファレンスを得る
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $link
 * @param resource $entry
 * @return resource
 * @link http://php.net/manual/ja/function.ldap-next-reference.php
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function ldap_next_reference($link, $entry) {}

/**
 * Parse result object from an LDAP extended operation
 * <p>Parse LDAP extended operation data from result object <code>result</code></p>
 * @param resource $link <p>An LDAP link identifier, returned by <code>ldap_connect()</code>.</p>
 * @param resource $result <p>An LDAP result resource, returned by <code>ldap_exop()</code>.</p>
 * @param string $retdata <p>Will be filled by the response data.</p>
 * @param string $retoid <p>Will be filled by the response OID.</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-parse-exop.php
 * @see ldap_exop()
 * @since PHP 7 >= 7.2.0
 */
function ldap_parse_exop($link, $result, string &$retdata = NULL, string &$retoid = NULL): bool {}

/**
 * 参照エントリから情報を展開する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $link
 * @param resource $entry
 * @param array $referrals
 * @return bool
 * @link http://php.net/manual/ja/function.ldap-parse-reference.php
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function ldap_parse_reference($link, $entry, array &$referrals): bool {}

/**
 * 結果から情報を展開する
 * <p>LDAP の検索結果をパースします。</p>
 * @param resource $link <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result
 * @param int $errcode <p>結果に含まれる LDAP エラーコードを格納する変数への参照。 エラーが発生しなかった場合は、この変数に <i>0</i> を格納します。</p>
 * @param string $matcheddn <p>リクエスト内にマッチする DN があった場合に、それを格納する変数への参照。 なかった場合は、この変数に <b><code>NULL</code></b> を格納します。</p>
 * @param string $errmsg <p>結果に含まれる LDAP エラーメッセージを格納する変数への参照。 エラーが発生しなかった場合は、この変数に空文字列を格納します。</p>
 * @param array $referrals <p>結果に含まれるすべての照会文字列の配列を格納する変数への参照。 存在しない場合は、この変数に空の配列を格納します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-parse-result.php
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function ldap_parse_result($link, $result, int &$errcode, string &$matcheddn = NULL, string &$errmsg = NULL, array &$referrals = NULL): bool {}

/**
 * エントリを読み込む
 * <p>指定したフィルタ <code>filter</code> を使用し、スコープ <b><code>LDAP_SCOPE_BASE</code></b> でディレクトリを検索します。これは、 ディレクトリからエントリを読み込むことと同じ意味です。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $base_dn <p>ディレクトリのベース DN。</p>
 * @param string $filter <p>空のフィルタは指定できません。 このエントリに関する全ての情報を完全に取得したい場合は、 <i>objectClass=&#42;</i> というフィルタを使用してください。 ディレクトリサーバーで使用されるエントリの型が分かっている場合、 <i>objectClass=inetOrgPerson</i> のように適切なフィルタを使用することができます。</p>
 * @param array $attributes <p>必要な属性を、 array("mail", "sn", "cn") のような通常の PHP 文字列配列で保持します。 "dn" は要求された属性の型によらず常に返されることに注意してください。</p> <p>このパラメータを使用すると、デフォルトの動作よりもかなり効率的になります (デフォルトでは、すべての属性とその値を返します)。 したがって、これを使用することを推奨します。</p>
 * @param int $attrsonly <p>属性の型のみを取得したい場合は 1 を設定します。 属性の型および値の両方を取得したい場合は 0 を設定します (これがデフォルトの挙動です)。</p>
 * @param int $sizelimit <p>取得するエントリ数の制限を設定します。 0 は無制限であることを表します。</p>  <p><b>注意</b>:</p> <p>このパラメータは、サーバー側で事前に設定されている sizelimit を上書きすることはできません。それ以下の値を指定することはできます。</p> <p>ディレクトリサーバーのホストによっては、 事前に設定された数以上のエントリを返さないようになっているものもあります。 この場合、サーバーでは、それが結果セットのすべてではないことを通知します。 このパラメータでエントリ数を制限した場合にも、同じことが起こります。</p>
 * @param int $timelimit <p>検索に要する最大秒数を設定します。 これを 0 にすると無制限であることを表します。</p>  <p><b>注意</b>:</p> <p>このパラメータは、サーバー側で事前に設定されている timelimit を上書きすることはできません。それ以下の値を指定することはできます。</p>
 * @param int $deref <p>検索時のエイリアスの扱いについて指定します。 以下のいずれかとなります。</p><ul> <li>  <b><code>LDAP_DEREF_NEVER</code></b> - (デフォルト) エイリアスは参照されません。  </li> <li>  <b><code>LDAP_DEREF_SEARCHING</code></b> - エイリアスを参照しますが、検索のベースオブジェクト上にいるときは参照しません。  </li> <li>  <b><code>LDAP_DEREF_FINDING</code></b> - エイリアスの参照は、ベースオブジェクト上にいて検索中でない場合に行われます。  </li> <li>  <b><code>LDAP_DEREF_ALWAYS</code></b> - エイリアスを常に参照します。 always.  </li> </ul>
 * @return resource <p>検索結果 ID を返します。エラーの場合は、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-read.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_read($link_identifier, string $base_dn, string $filter, array $attributes = NULL, int $attrsonly = NULL, int $sizelimit = NULL, int $timelimit = NULL, int $deref = NULL) {}

/**
 * エントリ名を修正する
 * <p><code>dn</code> で指定したエントリについて、 名前の変更または移動を行います。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $dn <p>LDAP エンティティの識別名。</p>
 * @param string $newrdn <p>新しい RDN。</p>
 * @param string $newparent <p>新しい親エントリ。</p>
 * @param bool $deleteoldrdn <p><b><code>TRUE</code></b> の場合は古い RDN 値を削除します。それ以外の場合は古い RDN 値がそのエントリの non-distinguished 値として残されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-rename.php
 * @see ldap_modify()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function ldap_rename($link_identifier, string $dn, string $newrdn, string $newparent, bool $deleteoldrdn): bool {}

/**
 * SASL を使用して LDAP ディレクトリにバインドする
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $link
 * @param string $binddn
 * @param string $password
 * @param string $sasl_mech
 * @param string $sasl_realm
 * @param string $sasl_authc_id
 * @param string $sasl_authz_id
 * @param string $props
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-sasl-bind.php
 * @since PHP 5, PHP 7
 */
function ldap_sasl_bind($link, string $binddn = NULL, string $password = NULL, string $sasl_mech = NULL, string $sasl_realm = NULL, string $sasl_authc_id = NULL, string $sasl_authz_id = NULL, string $props = NULL): bool {}

/**
 * LDAP ツリーを探索する
 * <p>指定したフィルタを使用し、 スコープ <b><code>LDAP_SCOPE_SUBTREE</code></b> でディレクトリを検索します。これは、ディレクトリ全体を検索するのと同じ意味です。</p><p>4.0.5 以降、並列検索も可能となっています。並列検索を行うには、単一の ID を使うのではなく、リンク ID の配列を使用します。 同じベース DN を使用したくない場合や全ての検索について同じフィルタを 使用したくない場合、ベース DN の配列またはフィルタの配列を使用する ことが可能です。これらの配列は、リンク ID の配列と同じ大きさである 必要があります。これは、その配列の最初が一回の検索で使用され、2 番目の エントリが他の検索で使用されるといったようになるからです。並列検索を 実行する際、エラーの場合を除き、検索結果 ID の配列が返されます。 エラーの場合は対応する検索のエントリは <b><code>FALSE</code></b> となります。これは 通常返される値とよく似ていますが、検索が行われた際に結果 ID が常に 返されます。まれに、並列検索は ID を返すにもかかわらず通常の検索は <b><code>FALSE</code></b> を返すということがあります。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param string $base_dn <p>ディレクトリのベース DN。</p>
 * @param string $filter <p>検索フィルタは、LDAP ドキュメントに記述されたフォーマットの論理 演算子を用いて、簡単なものまたは高度なものとすることができます (フィルタに関する詳細な情報については、 » Netscape Directory SDK あるいは » RFC4515 を参照ください)。</p>
 * @param array $attributes <p>必要な属性を、 <i>array("mail", "sn", "cn")</i> のような通常の PHP 文字列配列で保持します。 "dn" は要求された属性の型によらず常に返されることに注意してください。</p> <p>このパラメータを使用すると、デフォルトの動作よりもかなり効率的になります (デフォルトでは、すべての属性とその値を返します)。 したがって、これを使用することを推奨します。</p>
 * @param int $attrsonly <p>属性の型のみを取得したい場合は 1 を設定します。 属性の型および値の両方を取得したい場合は 0 を設定します (これがデフォルトの挙動です)。</p>
 * @param int $sizelimit <p>取得するエントリ数の制限を設定します。 0 は無制限であることを表します。</p>  <p><b>注意</b>:</p> <p>このパラメータは、サーバー側で事前に設定されている sizelimit を上書きすることはできません。それ以下の値を指定することはできます。</p> <p>ディレクトリサーバーのホストによっては、 事前に設定された数以上のエントリを返さないようになっているものもあります。 この場合、サーバーでは、それが結果セットのすべてではないことを通知します。 このパラメータでエントリ数を制限した場合にも、同じことが起こります。</p>
 * @param int $timelimit <p>検索に要する最大秒数を設定します。 これを 0 にすると無制限であることを表します。</p>  <p><b>注意</b>:</p> <p>このパラメータは、サーバー側で事前に設定されている timelimit を上書きすることはできません。それ以下の値を指定することはできます。</p>
 * @param int $deref <p>検索時のエイリアスの扱いについて指定します。 以下のいずれかとなります。</p><ul> <li>  <b><code>LDAP_DEREF_NEVER</code></b> - (デフォルト) エイリアスは参照されません。  </li> <li>  <b><code>LDAP_DEREF_SEARCHING</code></b> - エイリアスを参照しますが、検索のベースオブジェクト上にいるときは参照しません。  </li> <li>  <b><code>LDAP_DEREF_FINDING</code></b> - エイリアスの参照は、ベースオブジェクト上にいて検索中でない場合に行われます。  </li> <li>  <b><code>LDAP_DEREF_ALWAYS</code></b> - エイリアスを常に参照します。  </li> </ul>
 * @return resource <p>検索結果 ID を返します。エラーの場合は、<b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-search.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_search($link_identifier, string $base_dn, string $filter, array $attributes = NULL, int $attrsonly = NULL, int $sizelimit = NULL, int $timelimit = NULL, int $deref = NULL) {}

/**
 * 指定したオプションの値を設定する
 * <p>指定したオプションの値を <code>newval</code> に設定します。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param int $option <p>パラメータ <code>option</code> は以下のいずれかとなります。</p>   オプション 型 ～以降で使用可能     <b><code>LDAP_OPT_DEREF</code></b> integer     <b><code>LDAP_OPT_SIZELIMIT</code></b> integer     <b><code>LDAP_OPT_TIMELIMIT</code></b> integer     <b><code>LDAP_OPT_NETWORK_TIMEOUT</code></b> integer PHP 5.3.0   <b><code>LDAP_OPT_PROTOCOL_VERSION</code></b> integer     <b><code>LDAP_OPT_ERROR_NUMBER</code></b> integer     <b><code>LDAP_OPT_REFERRALS</code></b> bool     <b><code>LDAP_OPT_RESTART</code></b> bool     <b><code>LDAP_OPT_HOST_NAME</code></b> string     <b><code>LDAP_OPT_ERROR_STRING</code></b> string     <b><code>LDAP_OPT_DIAGNOSTIC_MESSAGE</code></b> string     <b><code>LDAP_OPT_MATCHED_DN</code></b> string     <b><code>LDAP_OPT_SERVER_CONTROLS</code></b> array     <b><code>LDAP_OPT_CLIENT_CONTROLS</code></b> array     <b><code>LDAP_OPT_X_KEEPALIVE_IDLE</code></b> int     <b><code>LDAP_OPT_X_KEEPALIVE_PROBES</code></b> int     <b><code>LDAP_OPT_X_KEEPALIVE_INTERVAL</code></b> int     <b><code>LDAP_OPT_X_TLS_CACERTDIR</code></b> string     <b><code>LDAP_OPT_X_TLS_CACERTFILE</code></b> string     <b><code>LDAP_OPT_X_TLS_CERTFILE</code></b> string     <b><code>LDAP_OPT_X_TLS_CIPHER_SUITE</code></b> string     <b><code>LDAP_OPT_X_TLS_CRLCHECK</code></b> integer     <b><code>LDAP_OPT_X_TLS_CRLFILE</code></b> string     <b><code>LDAP_OPT_X_TLS_DHFILE</code></b> string     <b><code>LDAP_OPT_X_TLS_KEYILE</code></b> string     <b><code>LDAP_OPT_X_TLS_PROTOCOL_MIN</code></b> integer     <b><code>LDAP_OPT_X_TLS_RANDOM_FILE</code></b> string     <b><code>LDAP_OPT_X_TLS_REQUIRE_CERT</code></b> integer PHP 7.1.0    <p><b><code>LDAP_OPT_SERVER_CONTROLS</code></b> および <b><code>LDAP_OPT_CLIENT_CONTROLS</code></b> はコントロールのリストを必要とします。 これは、値がコントロールの配列である必要があることです。 コントロールは、そのコントロールの ID である <i>oid</i>、オプションの <i>value</i>、オプションのフラグ <i>criticality</i> からなります。PHP において、 コントロールはキーが <i>oid</i> で値が文字列、 二つのオプションの要素からなる配列で指定されます。オプションの要素は、 キーが <i>value</i> で値が文字列、そしてキーが <i>iscritical</i> で値が論理値となります。 <i>iscritical</i> を省略した場合のデフォルトは <i><b><code>FALSE</code></b></i> です。詳細は » draft-ietf-ldapext-ldap-c-api-xx.txt を参照ください。また以下の二番目の例も参照ください。</p>
 * @param mixed $newval <p>指定したオプション <code>option</code> の新しい値。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-set-option.php
 * @see ldap_get_option()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function ldap_set_option($link_identifier, int $option, $newval): bool {}

/**
 * 参照先を再バインドするためのコールバック関数を設定する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $link
 * @param callable $callback
 * @return bool
 * @link http://php.net/manual/ja/function.ldap-set-rebind-proc.php
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function ldap_set_rebind_proc($link, callable $callback): bool {}

/**
 * LDAP 結果エントリをクライアント側でソートする
 * <p><code>ldap_search()</code> が返す LDAP 検索結果をソートします。</p><p>この関数は、返された結果をクライアント側でソートします。そのため、 サーバー側の <code>sizelimit</code> や <code>ldap_search()</code> で定義した <code>sizelimit</code> に達した場合は期待どおりの結果を得られない可能性があります。</p><p>この機能は PHP 7.0.0 で <i>非推奨</i>になります。この機能に頼らないことを強く推奨します。</p>
 * @param resource $link <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @param resource $result <p><code>ldap_search()</code> が返す検索結果 ID。</p>
 * @param string $sortfilter <p>ソートのキーとして使う属性。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.ldap-sort.php
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function ldap_sort($link, $result, string $sortfilter): bool {}

/**
 * TLS を開始する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $link
 * @return bool
 * @link http://php.net/manual/ja/function.ldap-start-tls.php
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function ldap_start_tls($link): bool {}

/**
 * t61 文字を 8859 文字に変換する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $value
 * @return string
 * @link http://php.net/manual/ja/function.ldap-t61-to-8859.php
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function ldap_t61_to_8859(string $value): string {}

/**
 * LDAP ディレクトリへのバインドを解除する
 * <p>LDAP ディレクトリへのバインドを解除します。</p>
 * @param resource $link_identifier <p><code>ldap_connect()</code> が返す LDAP リンク ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ldap-unbind.php
 * @see ldap_bind()
 * @since PHP 4, PHP 5, PHP 7
 */
function ldap_unbind($link_identifier): bool {}

/**
 * SSL Authentication Mode - No authentication required. (Only for Oracle LDAP)
 */
define('GSLC_SSL_NO_AUTH', null);

/**
 * SSL Authentication Mode - Only server authentication required. (Only for Oracle LDAP)
 */
define('GSLC_SSL_ONEWAY_AUTH', null);

/**
 * SSL Authentication Mode - Both server and client authentication required. (Only for Oracle LDAP)
 */
define('GSLC_SSL_TWOWAY_AUTH', null);

/**
 * Alias dereferencing rule - Always.
 */
define('LDAP_DEREF_ALWAYS', null);

/**
 * Alias dereferencing rule - Finding.
 */
define('LDAP_DEREF_FINDING', null);

/**
 * Alias dereferencing rule - Never.
 */
define('LDAP_DEREF_NEVER', null);

/**
 * Alias dereferencing rule - Searching.
 */
define('LDAP_DEREF_SEARCHING', null);

/**
 * Extended Operation constant - Modify password (RFC 3062).
 */
define('LDAP_EXOP_MODIFY_PASSWD', null);

/**
 * Extended Operation Constant - Refresh (RFC 2589).
 */
define('LDAP_EXOP_REFRESH', null);

/**
 * Extended Operation constant - Start TLS (RFC 4511).
 */
define('LDAP_EXOP_START_TLS', null);

/**
 * Extended Operation Constant - Turn (RFC 4531).
 */
define('LDAP_EXOP_TURN', null);

/**
 * Extended Operation Constant - WHOAMI (RFC 4532).
 */
define('LDAP_EXOP_WHO_AM_I', null);

/**
 * リクエストごとに処理するクライアントコントロールのデフォルトリストを指定します。
 */
define('LDAP_OPT_CLIENT_CONTROLS', null);

/**
 * デバッグトレース用のビットレベルを指定します。
 */
define('LDAP_OPT_DEBUG_LEVEL', null);

/**
 * サーバーでエイリアスをたどるときの、別の規則を指定します。
 */
define('LDAP_OPT_DEREF', null);

/**
 * Gets the latest session error message.
 */
define('LDAP_OPT_DIAGNOSTIC_MESSAGE', null);

/**
 * Latest session error number.
 */
define('LDAP_OPT_ERROR_NUMBER', null);

/**
 * Alias of <b><code>LDAP_OPT_DIAGNOSTIC_MESSAGE</code></b>.
 */
define('LDAP_OPT_ERROR_STRING', null);

/**
 * Sets/gets a space-separated of hosts when trying to connect.
 */
define('LDAP_OPT_HOST_NAME', null);

/**
 * Sets/gets the matched DN associated with the connection.
 */
define('LDAP_OPT_MATCHED_DN', null);

/**
 * <code>ldap_set_option()</code> 用のオプションで、 ネットワークのタイムアウトを設定します (PHP 5.3.0 以降で利用可能です)。
 */
define('LDAP_OPT_NETWORK_TIMEOUT', null);

/**
 * 使用する LDAP プロトコルのバージョン (V2 あるいは V3) を指定します。
 */
define('LDAP_OPT_PROTOCOL_VERSION', null);

/**
 * LDAP サーバーから返される参照を自動的にたどるかどうかを指定します。
 */
define('LDAP_OPT_REFERRALS', null);

/**
 * Determines whether or not the connection should be implicitly restarted.
 */
define('LDAP_OPT_RESTART', null);

/**
 * リクエストごとに送信するサーバーコントロールのデフォルトリストを指定します。
 */
define('LDAP_OPT_SERVER_CONTROLS', null);

/**
 * <p>検索操作で返すことができるエントリの最大数を指定します。</p> <p><b>注意</b>:  実際のサイズ制限は、サーバー側で設定されている最大エントリ数にも影響を受けます。 これらふたつの設定のうち小さい方が実際のサイズ制限となります。 </p>
 */
define('LDAP_OPT_SIZELIMIT', null);

/**
 * 検索結果を待ち続ける秒数を指定します。  <p><b>注意</b>:  実際の時間制限は、サーバー側で設定されている最大時間にも影響を受けます。 これらふたつの設定のうち小さい方が実際の時間制限となります。 </p>
 */
define('LDAP_OPT_TIMELIMIT', null);

/**
 * Specifies the number of seconds a connection needs to remain idle before TCP starts sending keepalive probes.
 */
define('LDAP_OPT_X_KEEPALIVE_IDLE', null);

/**
 * Specifies the interval in seconds between individual keepalive probes.
 */
define('LDAP_OPT_X_KEEPALIVE_INTERVAL', null);

/**
 * Specifies the maximum number of keepalive probes TCP should send before dropping the connection.
 */
define('LDAP_OPT_X_KEEPALIVE_PROBES', null);

/**
 * Specifies the path of the directory containing CA certificates.
 */
define('LDAP_OPT_X_TLS_CACERTDIR', null);

/**
 * Specifies the full-path of the CA certificate file.
 */
define('LDAP_OPT_X_TLS_CACERTFILE', null);

/**
 * Specifies the full-path of the certificate file.
 */
define('LDAP_OPT_X_TLS_CERTFILE', null);

/**
 * Specifies the allowed cipher suite.
 */
define('LDAP_OPT_X_TLS_CIPHER_SUITE', null);

/**
 * Specifies the CRL evaluation strategy. This must be one of: <b><code>LDAP_OPT_X_TLS_CRL_NONE</code></b>,<b><code>LDAP_OPT_X_TLS_CRL_PEER</code></b>, <b><code>LDAP_OPT_X_TLS_CRL_ALL</code></b>.  <p><b>注意</b>:  This option is only valid for OpenSSL. </p>
 */
define('LDAP_OPT_X_TLS_CRLCHECK', null);

/**
 * Specifies the full-path of the CRL file.  <p><b>注意</b>:  This option is only valid for GnuTLS. </p>
 */
define('LDAP_OPT_X_TLS_CRLFILE', null);

/**
 * Specifies the full-path of the file containing the parameters for Diffie-Hellman ephemeral key exchange.  <p><b>注意</b>:  This option is ignored by GnuTLS and Mozilla NSS. </p>
 */
define('LDAP_OPT_X_TLS_DHFILE', null);

/**
 * Specifies the full-path of the certificate key file.
 */
define('LDAP_OPT_X_TLS_KEYFILE', null);

/**
 * Specifies the minimum protocol version. This can be one of: <b><code>LDAP_OPT_X_TLS_PROTOCOL_SSL2</code></b>,<b><code>LDAP_OPT_X_TLS_PROTOCOL_SSL3</code></b>, <b><code>LDAP_OPT_X_TLS_PROTOCOL_TLS1_0</code></b>, <b><code>LDAP_OPT_X_TLS_PROTOCOL_TLS1_1</code></b>, <b><code>LDAP_OPT_X_TLS_PROTOCOL_TLS1_2</code></b>
 */
define('LDAP_OPT_X_TLS_PROTOCOL_MIN', null);

/**
 * Sets/gets the random file when one of the system default ones are not available.
 */
define('LDAP_OPT_X_TLS_RANDOM_FILE', null);

/**
 * Specifies the certificate checking checking strategy. This must be one of: <b><code>LDAP_OPT_X_TLS_NEVER</code></b>,<b><code>LDAP_OPT_X_TLS_HARD</code></b>, <b><code>LDAP_OPT_X_TLS_DEMAND</code></b>, <b><code>LDAP_OPT_X_TLS_ALLOW</code></b>, <b><code>LDAP_OPT_X_TLS_TRY</code></b>. (PHP 7.0.0 以降で利用可能)
 */
define('LDAP_OPT_X_TLS_REQUIRE_CERT', null);

