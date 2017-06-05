<?php

// Start of wddx v.7.0.19

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 単一の値を WDDX パケットにシリアライズする
 * @link http://php.net/manual/ja/function.wddx-serialize-value.php
 * @param mixed $var <p>
 * シリアライズする値。
 * </p>
 * @param string $comment [optional] <p>
 * オプションのコメント文字列。これはヘッダ内で用いられます。
 * </p>
 * @return string WDDX パケット、あるいはエラー時に <b>FALSE</b> を返します。
 */
function wddx_serialize_value($var, string $comment = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 変数を WDDX パケットにシリアライズする
 * @link http://php.net/manual/ja/function.wddx-serialize-vars.php
 * @param mixed $var_name <p>
 * 変数名を表す文字列、あるいは配列。
 * 配列の中身は、変数名を表す文字列あるいは別の配列などとなります。
 * </p>
 * @param mixed $_ [optional]
 * @return string WDDX パケット、あるいはエラー時に <b>FALSE</b> を返します。
 */
function wddx_serialize_vars($var_name, $_ = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 新規の WDDX パケットを内部の構造体を用いて開始する
 * @link http://php.net/manual/ja/function.wddx-packet-start.php
 * @param string $comment [optional] <p>
 * オプションのコメント文字列。
 * </p>
 * @return resource 後で他の関数で使用するためのパケット ID、あるいはエラー時に <b>FALSE</b> を返します。
 */
function wddx_packet_start(string $comment = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した ID の WDDX パケットを終了する
 * @link http://php.net/manual/ja/function.wddx-packet-end.php
 * @param resource $packet_id <p>
 * <b>wddx_packet_start</b> が返す WDDX パケット。
 * </p>
 * @return string WDDX パケットを含む文字列を返します。
 */
function wddx_packet_end($packet_id): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した ID の WDDX パケットに変数を追加する
 * @link http://php.net/manual/ja/function.wddx-add-vars.php
 * @param resource $packet_id <p>
 * <b>wddx_packet_start</b> が返す WDDX パケット。
 * </p>
 * @param mixed $var_name <p>
 * 変数名を表す文字列、あるいは配列。
 * 配列の中身は、変数名を表す文字列あるいは別の配列などとなります。
 * </p>
 * @param mixed $_ [optional]
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function wddx_add_vars($packet_id, $var_name, $_ = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * WDDX パケットをデシリアライズする
 * @link http://php.net/manual/ja/function.wddx-deserialize.php
 * @param string $packet <p>
 * WDDX パケット。文字列あるいはストリームで指定します。
 * </p>
 * @return mixed デシリアライズした値を返します。値は文字列か数値、あるいは配列のいずれかとなります。
 * 構造体は連想配列に変換されることに注意しましょう。
 */
function wddx_deserialize(string $packet) {}

// End of wddx v.7.0.19
?>
