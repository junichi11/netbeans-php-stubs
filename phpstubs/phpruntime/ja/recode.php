<?php

// Start of recode v.7.1.5

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * コード変換指令に基づき文字列のコードを変換する
 * @link http://php.net/manual/ja/function.recode-string.php
 * @param string $request <p>
 * 変換指令の型。
 * </p>
 * @param string $string <p>
 * 変換する文字列。
 * </p>
 * @return string 変換後の文字列、または変換指令を実行できない場合に <b>FALSE</b> を返します。
 */
function recode_string(string $request, string $string): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * コード変換指令に基づきファイルからファイルにコード変換する
 * @link http://php.net/manual/ja/function.recode-file.php
 * @param string $request <p>
 * 変換指令の型。
 * </p>
 * @param resource $input <p>
 * 入力として使用する
 * ローカルファイルハンドルリソース。
 * </p>
 * @param resource $output <p>
 * 出力として使用する
 * ローカルファイルハンドルリソース。
 * </p>
 * @return bool 応じることができない場合に <b>FALSE</b>、それ以外の場合に <b>TRUE</b> を返します。
 */
function recode_file(string $request, $input, $output): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * <b>recode_string</b> のエイリアス
 * @link http://php.net/manual/ja/function.recode.php
 * @param $request
 * @param $str
 */
function recode($request, $str) {}

// End of recode v.7.1.5
?>
