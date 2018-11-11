<?php



/**
 * DOMAIN メッセージカタログから返されるメッセージの文字エンコーディングを指定する
 * <p><b>bind_textdomain_codeset()</b> を使用することで、 <code>gettext()</code> やその類似の関数において返される、 <code>domain</code> からのメッセージの文字エンコーディングを 設定することが可能です。</p>
 * @param string $domain <p>ドメイン。</p>
 * @param string $codeset <p>コードセット。</p>
 * @return string <p>成功した場合に文字列を返します。</p>
 * @link http://php.net/manual/ja/function.bind-textdomain-codeset.php
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function bind_textdomain_codeset(string $domain, string $codeset): string {}

/**
 * ドメインのパスを設定する
 * <p><b>bindtextdomain()</b> 関数は、ドメインへのパスを設定します。</p>
 * @param string $domain <p>ドメイン。</p>
 * @param string $directory <p>ディレクトリのパス。</p>
 * @return string <p>現在設定されているドメインへのフルパスを返します。</p>
 * @link http://php.net/manual/ja/function.bindtextdomain.php
 * @since PHP 4, PHP 5, PHP 7
 */
function bindtextdomain(string $domain, string $directory): string {}

/**
 * 単一の参照に関するドメインを上書きする
 * <p>この関数により単一の参照についてカレントのドメインを上書きすることができます。</p>
 * @param string $domain <p>ドメイン。</p>
 * @param string $message <p>メッセージ。</p>
 * @param int $category <p>カテゴリ。</p>
 * @return string <p>成功した場合に文字列を返します。</p>
 * @link http://php.net/manual/ja/function.dcgettext.php
 * @see gettext()
 * @since PHP 4, PHP 5, PHP 7
 */
function dcgettext(string $domain, string $message, int $category): string {}

/**
 * dcgettext の複数形版
 * <p>この関数により単一の複数形メッセージの参照について カレントのドメインを上書きすることができます。</p>
 * @param string $domain <p>ドメイン。</p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @param int $category
 * @return string <p>成功した場合に文字列を返します。</p>
 * @link http://php.net/manual/ja/function.dcngettext.php
 * @see ngettext()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function dcngettext(string $domain, string $msgid1, string $msgid2, int $n, int $category): string {}

/**
 * 現在のドメインを上書きする
 * <p><b>dgettext()</b> 関数により、単一のメッセージ参照について 現在のドメインを上書きすることができます。</p>
 * @param string $domain <p>ドメイン。</p>
 * @param string $message <p>メッセージ。</p>
 * @return string <p>成功した場合に文字列を返します。</p>
 * @link http://php.net/manual/ja/function.dgettext.php
 * @see gettext()
 * @since PHP 4, PHP 5, PHP 7
 */
function dgettext(string $domain, string $message): string {}

/**
 * dgettext の複数形版
 * <p><b>dngettext()</b> 関数により、単一の複数形メッセージ参照について 現在のドメインを上書きすることができます。</p>
 * @param string $domain <p>ドメイン。</p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @return string <p>成功した場合に文字列を返します。</p>
 * @link http://php.net/manual/ja/function.dngettext.php
 * @see ngettext()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function dngettext(string $domain, string $msgid1, string $msgid2, int $n): string {}

/**
 * 現在のドメインのメッセージを参照する
 * <p>現在のドメインのメッセージを参照します。</p>
 * @param string $message <p>翻訳するメッセージ。</p>
 * @return string <p>翻訳テーブルに翻訳文字列が見つかった場合にその文字列、 あるいは見つからなかった場合に元の文字列を返します。</p>
 * @link http://php.net/manual/ja/function.gettext.php
 * @see setlocale()
 * @since PHP 4, PHP 5, PHP 7
 */
function gettext(string $message): string {}

/**
 * gettext の複数形版
 * <p>複数形版の <code>gettext()</code> です。 言語によっては、数量に応じていくつかの複数形が存在することがあります。</p>
 * @param string $msgid1 <p>単数形のメッセージ ID。</p>
 * @param string $msgid2 <p>複数形のメッセージ ID。</p>
 * @param int $n <p>数 (件数など)。この数にあわせて翻訳を決定します。</p>
 * @return string <p><code>msgid1</code> および <code>msgid2</code> で表されるメッセージの、数 <code>n</code> に対応する複数形を返します。</p>
 * @link http://php.net/manual/ja/function.ngettext.php
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function ngettext(string $msgid1, string $msgid2, int $n): string {}

/**
 * デフォルトドメインを設定する
 * <p>この関数は、<code>gettext()</code> がコールされた際に検索を 行うドメインを設定します。このドメインは、通常はアプリケーション名から 付けられます。</p>
 * @param string $text_domain <p>新しいメッセージドメイン。<b><code>NULL</code></b> を指定すると、現在の設定をそのまま 取得し、変更しません。</p>
 * @return string <p>成功すると、この関数はドメインを変更した後に現在のメッセージドメインを 返します。</p>
 * @link http://php.net/manual/ja/function.textdomain.php
 * @since PHP 4, PHP 5, PHP 7
 */
function textdomain(string $text_domain = NULL): string {}

