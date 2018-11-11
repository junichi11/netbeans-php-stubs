<?php



/**
 * 指定したパスワードに関して強度チェックを行う
 * <p>(PECL crack &gt;= 0.1)</p><p>crack_check — 指定したパスワードに関して強度チェックを行う</p><p>指定した辞書を用いて指定したパスワードの強度チェックを行います。 もうひとつのシグネチャは、ユーザー名と GECOS 情報も考慮します。</p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p></p><p>crackライブラリの辞書。指定しない場合は、直近にオープンされた辞書が 使用されます。</p><p>チェックするパスワード。</p><p>そのパスワードを使うアカウントのユーザー名。</p><p>ユーザーアカウントに関連づけられた GECOS 情報。</p><p><code>password</code> が強い場合に、 <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p><p></p>
 * @param resource $dictionary <p>crackライブラリの辞書。指定しない場合は、直近にオープンされた辞書が 使用されます。</p>
 * @param string $password <p>チェックするパスワード。</p>
 * @return bool <p><code>password</code> が強い場合に、 <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.crack-check.php
 * @since PECL crack >= 0.1
 */
function crack_check($dictionary, string $password): bool {}

/**
 * オープンされているCrackLib辞書を閉じる
 * <p>(PECL crack &gt;= 0.1)</p><p>crack_closedict — オープンされているCrackLib辞書を閉じる</p><p><b>crack_closedict()</b>は、指定した <code>dictionary</code>IDを閉じます。</p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p></p><p>クローズする辞書。 指定されない場合、カレントの辞書がクローズされます。</p><p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p></p>
 * @param resource $dictionary <p>クローズする辞書。 指定されない場合、カレントの辞書がクローズされます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.crack-closedict.php
 * @see crack_opendict()
 * @since PECL crack >= 0.1
 */
function crack_closedict($dictionary = NULL): bool {}

/**
 * 直近の強度チェックからのメッセージを返す
 * <p><b>crack_getlastmessage()</b> は、 直近の強度チェックからのメッセージを返します。</p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
 * @return string <p>直近の強度チェックによるメッセージ、あるいはチェックがまだ行われていない場合は <b><code>FALSE</code></b> を返します。</p><p>メッセージは以下のいずれかです。</p><ul> <li>  <i>it's WAY too short</i>  </li> <li>  <i>it is too short</i>  </li> <li>  <i>it does not contain enough DIFFERENT characters</i>  </li> <li>  <i>it is all whitespace</i>  </li> <li>  <i>it is too simplistic/systematic</i>  </li> <li>  <i>it looks like a National Insurance number.</i>  </li> <li>  <i>it is based on a dictionary word</i>  </li> <li>  <i>it is based on a (reversed) dictionary word</i>  </li> <li>  <i>strong password</i>  </li> </ul>
 * @link http://php.net/manual/ja/function.crack-getlastmessage.php
 * @see crack_check()
 * @since PECL crack >= 0.1
 */
function crack_getlastmessage(): string {}

/**
 * 新規CrackLib辞書をオープンする
 * <p>(PECL crack &gt;= 0.1)</p><p>crack_opendict — 新規CrackLib辞書をオープンする</p><p><b>crack_opendict()</b> は、指定した CrackLib <code>dictionary</code> をオープンします。この辞書は、 <code>crack_check()</code>で使用されます。</p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>注意</b>:</p><p>1度にオープンできる辞書は1つだけです。</p><p></p><p>Cracklib辞書のパス。</p><p>成功時に辞書のリソースID、失敗時に <b><code>FALSE</code></b> 。</p><p></p>
 * @param string $dictionary <p>Cracklib辞書のパス。</p>
 * @return resource <p>成功時に辞書のリソースID、失敗時に <b><code>FALSE</code></b> 。</p>
 * @link http://php.net/manual/ja/function.crack-opendict.php
 * @see crack_check(), crack_closedict()
 * @since PECL crack >= 0.1
 */
function crack_opendict(string $dictionary) {}

