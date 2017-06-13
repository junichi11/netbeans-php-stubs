<?php

// Start of shmop v.7.1.5

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
 * @param $shmid
 * @param $start
 * @param $count
 */
function shmop_read($shmid, $start, $count) {}

/**
 * @param $shmid
 */
function shmop_close($shmid) {}

/**
 * @param $shmid
 */
function shmop_size($shmid) {}

/**
 * @param $shmid
 * @param $data
 * @param $offset
 */
function shmop_write($shmid, $data, $offset) {}

/**
 * @param $shmid
 */
function shmop_delete($shmid) {}

// End of shmop v.7.1.5
?>
