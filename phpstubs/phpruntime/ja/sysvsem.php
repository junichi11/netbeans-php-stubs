<?php

// Start of sysvsem v.7.1.5

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * セマフォ ID を得る
 * @link http://php.net/manual/ja/function.sem-get.php
 * @param int $key
 * @param int $max_acquire [optional] <p>
 * 同時にセマフォを得ることが可能なプロセス数を
 * <i>max_acquire</i> にセットします。
 * </p>
 * @param int $perm [optional] <p>
 * セマフォのパーミッション。
 * 実際には、この値はプロセスが現在そのセマフォに付随している
 * 唯一のプロセスであることがわかった場合にのみセットされます。
 * </p>
 * @param int $auto_release [optional] <p>
 * リクエストの終了時に自動的にセマフォを開放するかどうかを指定します。
 * </p>
 * @return resource 成功した場合に正のセマフォ ID、エラー時には <b>FALSE</b> を返します。
 */
function sem_get(int $key, int $max_acquire = 1, int $perm = 0666, int $auto_release = 1) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * セマフォを得る
 * @link http://php.net/manual/ja/function.sem-acquire.php
 * @param resource $sem_identifier <p>
 * <i>sem_identifier</i> はセマフォのリソースで、
 * <b>sem_get</b> によって得られます。
 * </p>
 * @param bool $nowait [optional] <p>
 * セマフォが確保できるまでプロセスを待たせたくない場合に指定します。
 * true にすると、セマフォをその場で確保できなかった場合に、
 * この関数は即時に false を返します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function sem_acquire($sem_identifier, bool $nowait = false): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * セマフォを解放する
 * @link http://php.net/manual/ja/function.sem-release.php
 * @param resource $sem_identifier <p>
 * <b>sem_get</b> が返すセマフォリソースハンドル。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function sem_release($sem_identifier): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * セマフォを削除する
 * @link http://php.net/manual/ja/function.sem-remove.php
 * @param resource $sem_identifier <p>
 * <b>sem_get</b> が返すセマフォリソース ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function sem_remove($sem_identifier): bool {}

// End of sysvsem v.7.1.5
?>
