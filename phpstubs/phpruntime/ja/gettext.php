<?php

// Start of gettext v.7.0.19

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * デフォルトドメインを設定する
 * @link http://php.net/manual/ja/function.textdomain.php
 * @param string $text_domain [optional] <p>
 * 新しいメッセージドメイン。<b>NULL</b> を指定すると、現在の設定をそのまま
 * 取得し、変更しません。
 * </p>
 * @return string 成功すると、この関数はドメインを変更した後に現在のメッセージドメインを
 * 返します。
 */
function textdomain(string $text_domain = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のドメインのメッセージを参照する
 * @link http://php.net/manual/ja/function.gettext.php
 * @param string $message <p>
 * 翻訳するメッセージ。
 * </p>
 * @return string 翻訳テーブルに翻訳文字列が見つかった場合にその文字列、
 * あるいは見つからなかった場合に元の文字列を返します。
 */
function gettext(string $message): string {}

/**
 * @param $msgid
 */
function _($msgid) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 現在のドメインを上書きする
 * @link http://php.net/manual/ja/function.dgettext.php
 * @param string $domain <p>
 * ドメイン。
 * </p>
 * @param string $message <p>
 * メッセージ。
 * </p>
 * @return string 成功した場合に文字列を返します。
 */
function dgettext(string $domain, string $message): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 単一の参照に関するドメインを上書きする
 * @link http://php.net/manual/ja/function.dcgettext.php
 * @param string $domain <p>
 * ドメイン。
 * </p>
 * @param string $message <p>
 * メッセージ。
 * </p>
 * @param int $category <p>
 * カテゴリ。
 * </p>
 * @return string 成功した場合に文字列を返します。
 */
function dcgettext(string $domain, string $message, int $category): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ドメインのパスを設定する
 * @link http://php.net/manual/ja/function.bindtextdomain.php
 * @param string $domain <p>
 * ドメイン。
 * </p>
 * @param string $directory <p>
 * ディレクトリのパス。
 * </p>
 * @return string 現在設定されているドメインへのフルパスを返します。
 */
function bindtextdomain(string $domain, string $directory): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * gettext の複数形版
 * @link http://php.net/manual/ja/function.ngettext.php
 * @param string $msgid1 <p>
 * 単数形のメッセージ ID。
 * </p>
 * @param string $msgid2 <p>
 * 複数形のメッセージ ID。
 * </p>
 * @param int $n <p>
 * 数 (件数など)。この数にあわせて翻訳を決定します。
 * </p>
 * @return string <i>msgid1</i> および <i>msgid2</i>
 * で表されるメッセージの、数 <i>n</i>
 * に対応する複数形を返します。
 */
function ngettext(string $msgid1, string $msgid2, int $n): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * dgettext の複数形版
 * @link http://php.net/manual/ja/function.dngettext.php
 * @param string $domain <p>
 * ドメイン。
 * </p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @return string 成功した場合に文字列を返します。
 */
function dngettext(string $domain, string $msgid1, string $msgid2, int $n): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * dcgettext の複数形版
 * @link http://php.net/manual/ja/function.dcngettext.php
 * @param string $domain <p>
 * ドメイン。
 * </p>
 * @param string $msgid1
 * @param string $msgid2
 * @param int $n
 * @param int $category
 * @return string 成功した場合に文字列を返します。
 */
function dcngettext(string $domain, string $msgid1, string $msgid2, int $n, int $category): string {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * DOMAIN メッセージカタログから返されるメッセージの文字エンコーディングを指定する
 * @link http://php.net/manual/ja/function.bind-textdomain-codeset.php
 * @param string $domain <p>
 * ドメイン。
 * </p>
 * @param string $codeset <p>
 * コードセット。
 * </p>
 * @return string 成功した場合に文字列を返します。
 */
function bind_textdomain_codeset(string $domain, string $codeset): string {}

// End of gettext v.7.0.19
?>
