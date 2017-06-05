<?php

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * 出力バッファハンドラとして文字エンコーディングを変換する
 * @link http://php.net/manual/ja/function.ob-iconv-handler.php
 * @param string $contents
 * @param int $status
 * @return string このハンドラの返り値についての情報は
 * <b>ob_start</b> を参照ください。
 */
function ob_iconv_handler(string $contents, int $status): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * バッファを修正するための ob_start コールバック関数
 * @link http://php.net/manual/ja/function.ob-tidyhandler.php
 * @param string $input <p>
 * バッファ。
 * </p>
 * @param int $mode [optional] <p>
 * バッファのモード。
 * </p>
 * @return string 修正したバッファを返します。
 */
function ob_tidyhandler(string $input, int $mode = null): string {}

/**
 * (PHP 4, PHP 5 &lt; 5.4.0)<br/>
 * 現在のセッションに1つ以上の変数を登録する
 * @link http://php.net/manual/ja/function.session-register.php
 * @param mixed $name <p>
 * 変数名を含む文字列、
 * あるいは変数名や配列を含む配列。
 * </p>
 * @param mixed $_ [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function session_register($name, $_ = null): bool {}

/**
 * (PHP 4, PHP 5 &lt; 5.4.0)<br/>
 * 現在のセッションから変数の登録を削除する
 * @link http://php.net/manual/ja/function.session-unregister.php
 * @param string $name <p>
 * 変数名。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function session_unregister(string $name): bool {}

/**
 * (PHP 4, PHP 5 &lt; 5.4.0)<br/>
 * 変数がセッションに登録されているかどうかを調べる
 * @link http://php.net/manual/ja/function.session-is-registered.php
 * @param string $name <p>
 * 変数名。
 * </p>
 * @return bool <b>session_is_registered</b> は、
 * <i>name</i>
 * という名前のグローバル変数が現在のセッションに登録されている場合に
 * <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function session_is_registered(string $name): bool {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * ルートディレクトリを変更する
 * @link http://php.net/manual/ja/function.chroot.php
 * @param string $directory <p>
 * ルートディレクトリの変更先のパス。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function chroot(string $directory): bool {}
?>
