<?php

// Start of Zend OPcache v.7.1.5

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL ZendOpcache &gt;= 7.0.0)<br/>
 * opcode のキャッシュ内容をリセットする
 * @link http://php.net/manual/ja/function.opcache-reset.php
 * @return boolean opcode のキャッシュがリセットさせた場合は <b>TRUE</b> を返します。
 * opcode キャッシュが無効にされている場合は <b>FALSE</b> を返します。
 */
function opcache_reset(): bool {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL ZendOpcache &gt;= 7.0.0)<br/>
 * キャッシュされたスクリプトを無効にする
 * @link http://php.net/manual/ja/function.opcache-invalidate.php
 * @param string $script <p>
 * 無効にしたいスクリプトのパス
 * </p>
 * @param boolean $force [optional] <p>
 * <b>TRUE</b> にすると、無効にする必要があるかどうかに関わらずスクリプトは無効にされます。
 * </p>
 * @return boolean <i>script</i> の opcode キャッシュが無効にされたか、無効にする対象が存在しない場合は <b>TRUE</b> を返します。
 * opcode キャッシュ機能そのものが無効にされている場合は <b>FALSE</b> を返します。
 */
function opcache_invalidate(string $script, bool $force = false): bool {}

/**
 * (PHP 5 &gt;= 5.5.5, PHP 7, PECL ZendOpcache &gt; 7.0.2)<br/>
 * PHP スクリプトを、実行せずにコンパイルしてキャッシュする
 * @link http://php.net/manual/ja/function.opcache-compile-file.php
 * @param string $file <p>
 * コンパイルしたい PHP スクリプトへのパス。
 * </p>
 * @return boolean <i>file</i> を正常にコンパイルしたときに <b>TRUE</b> を返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function opcache_compile_file(string $file): bool {}

/**
 * (PHP 5 &gt;= 5.6.0, PHP 7, PECL ZendOpcache &gt;= 7.0.4)<br/>
 * スクリプトが OPCache にキャッシュされているかどうかを伝えます。
 * @link http://php.net/manual/ja/function.opcache-is-script-cached.php
 * @param string $file <p>
 * チェックされる PHP スクリプトへのパスです。
 * </p>
 * @return boolean <i>file</i> が OPCache にキャッシュされている場合、<b>TRUE</b> を、
 * そうでなければ <b>FALSE</b> を返します。
 */
function opcache_is_script_cached(string $file): bool {}

/**
 * (PHP 5 &gt;= 5.5.5, PHP 7, PECL ZendOpcache &gt; 7.0.2)<br/>
 * キャッシュについての構成情報を取得
 * @link http://php.net/manual/ja/function.opcache-get-configuration.php
 * @return array 情報の配列を返します。その配列は ini 、ブラックリストおよびバージョンを含みます。
 */
function opcache_get_configuration(): array {}

/**
 * (PHP 5 &gt;= 5.5.5, PHP 7, PECL ZendOpcache &gt; 7.0.2)<br/>
 * キャッシュについてのステータス情報を取得
 * @link http://php.net/manual/ja/function.opcache-get-status.php
 * @param boolean $get_scripts [optional] <p>
 * スクリプト固有の状態の情報を含む。
 * </p>
 * @return array 情報の配列を返します。スクリプト固有の状態の情報をオプションで含みます。
 */
function opcache_get_status(bool $get_scripts = true): array {}

// End of Zend OPcache v.7.1.5
?>
