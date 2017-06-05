<?php

// Start of bcmath v.7.0.19

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 2つの任意精度の数値を加算する
 * @link http://php.net/manual/ja/function.bcadd.php
 * @param string $left_operand <p>
 * 左オペランドを表す文字列。
 * </p>
 * @param string $right_operand <p>
 * 右オペランドを表す文字列。
 * </p>
 * @param int $scale [optional]
 * @return string 二つの数の和を文字列で返します。
 */
function bcadd(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 任意精度数値の減算を行う
 * @link http://php.net/manual/ja/function.bcsub.php
 * @param string $left_operand <p>
 * 左オペランドを表す文字列。
 * </p>
 * @param string $right_operand <p>
 * 右オペランドを表す文字列。
 * </p>
 * @param int $scale [optional]
 * @return string 減算の結果を文字列で返します。
 */
function bcsub(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 2つの任意精度数値の乗算を行う
 * @link http://php.net/manual/ja/function.bcmul.php
 * @param string $left_operand <p>
 * 左オペランドを表す文字列。
 * </p>
 * @param string $right_operand <p>
 * 右オペランドを表す文字列。
 * </p>
 * @param int $scale [optional]
 * @return string 結果を文字列で返します。
 */
function bcmul(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 2つの任意精度数値で除算を行う
 * @link http://php.net/manual/ja/function.bcdiv.php
 * @param string $left_operand <p>
 * 左オペランドを表す文字列。
 * </p>
 * @param string $right_operand <p>
 * 右オペランドを表す文字列。
 * </p>
 * @param int $scale [optional]
 * @return string 除算結果を文字列で返します。
 * <i>right_operand</i> が 0
 * の場合は <b>NULL</b> を返します。
 */
function bcdiv(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 2 つの任意精度数値の剰余を取得する
 * @link http://php.net/manual/ja/function.bcmod.php
 * @param string $left_operand <p>
 * 左オペランドを表す文字列。
 * </p>
 * @param string $modulus <p>
 * 法を表す文字列。
 * </p>
 * @return string 剰余を文字列で返します。
 * <i>modulus</i> が 0 の場合は <b>NULL</b> を返します。
 */
function bcmod(string $left_operand, string $modulus): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 任意精度数値をべき乗する
 * @link http://php.net/manual/ja/function.bcpow.php
 * @param string $left_operand <p>
 * 左オペランドを表す文字列。
 * </p>
 * @param string $right_operand <p>
 * 右オペランドを表す文字列。
 * </p>
 * @param int $scale [optional]
 * @return string 結果を文字列で返します。
 */
function bcpow(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 任意精度数値の平方根を取得する
 * @link http://php.net/manual/ja/function.bcsqrt.php
 * @param string $operand <p>
 * オペランドを表す文字列。
 * </p>
 * @param int $scale [optional]
 * @return string 平方根を文字列で返します。
 * <i>operand</i> が負の場合は <b>NULL</b> を返します。
 */
function bcsqrt(string $operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * すべての BC 演算関数におけるデフォルトのスケールを設定する
 * @link http://php.net/manual/ja/function.bcscale.php
 * @param int $scale <p>
 * スケール。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function bcscale(int $scale): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 2 つの任意精度数値を比較する
 * @link http://php.net/manual/ja/function.bccomp.php
 * @param string $left_operand <p>
 * 左オペランドを表す文字列。
 * </p>
 * @param string $right_operand <p>
 * 右オペランドを表す文字列。
 * </p>
 * @param int $scale [optional] <p>
 * オプションの <i>scale</i> パラメータで、
 * 小数点以下の桁数を指定します。ここまでを使用して比較を行います。
 * </p>
 * @return int ふたつのオペランドが等しければ 0、
 * <i>left_operand</i> が <i>right_operand</i>
 * より大きければ返り値は 1、小さければ -1 を返します。
 */
function bccomp(string $left_operand, string $right_operand, int $scale = 0): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 任意精度数値のべき乗の、指定した数値による剰余
 * @link http://php.net/manual/ja/function.bcpowmod.php
 * @param string $left_operand <p>
 * 左オペランドを表す文字列。
 * </p>
 * @param string $right_operand <p>
 * 右オペランドを表す文字列。
 * </p>
 * @param string $modulus <p>
 * 法を表す文字列。
 * </p>
 * @param int $scale [optional]
 * @return string 結果を文字列で返します。<i>modulus</i>
 * が 0 の場合は <b>NULL</b> を返します。
 */
function bcpowmod(string $left_operand, string $right_operand, string $modulus, int $scale = 0): string {}

// End of bcmath v.7.0.19
?>
