<?php

// Start of shmop v.7.0.19

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 共有メモリブロックを作成またはオープンする
 * @link http://php.net/manual/ja/function.shmop-open.php
 * @param int $key <p>
 * 共有メモリブロックのシステム ID であり、10 進数または
 * 16 進数で指定することが可能です。
 * </p>
 * @param string $flags <p>
 * フラグに設定できる内容は、次のとおりです。
 * "a" アクセス用(shmat に SHM_RDONLY を設定する)
 * 既存の共有メモリセグメントを読み込み専用でオープンする必要がある場合に
 * このフラグを使用してください。
 * @param int $mode <p>
 * 共有メモリセグメントに設定したい
 * 許可属性で、ファイルに関する許可属性と同様なものです。許可属性は、
 * 例えば 0644 のような 8 進数形式で渡す必要があります。
 * </p>
 * @param int $size <p>
 * 作成したい共有メモリブロックの大きさをバイト数で指定します。
 * </p>
 * @return resource 成功した場合は、<b>shmop_open</b> は
 * 作成した共有メモリセグメントにアクセスするために使用するリソースを返します。
 * 失敗した場合に <b>FALSE</b> を返します。
 */
function shmop_open(int $key, string $flags, int $mode, int $size) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Read data from shared memory block
 * @link http://php.net/manual/ja/function.shmop-read.php
 * @param resource $shmid <p>
 * The shared memory block identifier created by
 * <b>shmop_open</b>
 * </p>
 * @param int $start <p>
 * Offset from which to start reading
 * </p>
 * @param int $count <p>
 * The number of bytes to read
 * </p>
 * @return string the data失敗した場合に <b>FALSE</b> を返します.
 */
function shmop_read($shmid, int $start, int $count): string {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Close shared memory block
 * @link http://php.net/manual/ja/function.shmop-close.php
 * @param resource $shmid <p>
 * The shared memory block resource created by
 * <b>shmop_open</b>
 * </p>
 * @return void 値を返しません。
 */
function shmop_close($shmid): void {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Get size of shared memory block
 * @link http://php.net/manual/ja/function.shmop-size.php
 * @param resource $shmid <p>
 * The shared memory block identifier created by
 * <b>shmop_open</b>
 * </p>
 * @return int an int, which represents the number of bytes the shared memory
 * block occupies.
 */
function shmop_size($shmid): int {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Write data into shared memory block
 * @link http://php.net/manual/ja/function.shmop-write.php
 * @param resource $shmid <p>
 * The shared memory block identifier created by
 * <b>shmop_open</b>
 * </p>
 * @param string $data <p>
 * A string to write into shared memory block
 * </p>
 * @param int $offset <p>
 * Specifies where to start writing data inside the shared memory
 * segment.
 * </p>
 * @return int The size of the written <i>data</i>, or <b>FALSE</b> on
 * failure.
 */
function shmop_write($shmid, string $data, int $offset): int {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * Delete shared memory block
 * @link http://php.net/manual/ja/function.shmop-delete.php
 * @param resource $shmid <p>
 * The shared memory block resource created by
 * <b>shmop_open</b>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function shmop_delete($shmid): bool {}

// End of shmop v.7.0.19
?>
