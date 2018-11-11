<?php



/**
 * Close shared memory block
 * <p><b>shmop_close()</b> is used to close a shared memory block.</p>
 * @param resource $shmid <p>The shared memory block resource created by <code>shmop_open()</code></p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.shmop-close.php
 * @see shmop_open()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function shmop_close($shmid): void {}

/**
 * Delete shared memory block
 * <p><b>shmop_delete()</b> is used to delete a shared memory block.</p>
 * @param resource $shmid <p>The shared memory block resource created by <code>shmop_open()</code></p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.shmop-delete.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function shmop_delete($shmid): bool {}

/**
 * 共有メモリブロックを作成またはオープンする
 * <p><b>shmop_open()</b> は共有メモリブロックを作成または オープンします。</p>
 * @param int $key <p>共有メモリブロックのシステム ID であり、10 進数または 16 進数で指定することが可能です。</p>
 * @param string $flags <p>フラグに設定できる内容は、次のとおりです。</p><ul> <li>  "a" アクセス用(shmat に SHM_RDONLY を設定する) 既存の共有メモリセグメントを読み込み専用でオープンする必要がある場合に このフラグを使用してください。  </li> <li>  "c" 作成用(IPC_CREATE を設定する) 新規に共有メモリセグメントが必要な場合にこのフラグを使用してください。 もし同じキーのセグメントがすでに存在する場合、それを読み書きモードで オープンしようと試みます。  </li> <li>  "w" 読み込み &amp; 書き込みアクセス用 共有メモリセグメントの読み込みや書き込みの必要がある場合にこのフラグを 使用してください。たいていの場合はこのフラグを使用します。  </li> <li>  "n" 新規メモリセグメントの作成用(IPC_CREATE|IPC_EXCL を設定する) 新規に共有メモリセグメントが必要で、もし同じフラグのセグメントが 存在するときには失敗させたい場合にこのフラグを使用してください。 セキュリティを確保するために、このフラグは有用です。これを使用する ことで、条件の競合による問題を避けることが可能です。  </li> </ul>
 * @param int $mode <p>共有メモリセグメントに設定したい 許可属性で、ファイルに関する許可属性と同様なものです。許可属性は、 例えば <i>0644</i> のような 8 進数形式で渡す必要があります。</p>
 * @param int $size <p>作成したい共有メモリブロックの大きさをバイト数で指定します。</p>
 * @return resource <p>成功した場合は、<b>shmop_open()</b> は 作成した共有メモリセグメントにアクセスするために使用するリソースを返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.shmop-open.php
 * @see shmop_close(), shmop_delete()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function shmop_open(int $key, string $flags, int $mode, int $size) {}

/**
 * Read data from shared memory block
 * <p><b>shmop_read()</b> will read a string from shared memory block.</p>
 * @param resource $shmid <p>The shared memory block identifier created by <code>shmop_open()</code></p>
 * @param int $start <p>Offset from which to start reading</p>
 * @param int $count <p>The number of bytes to read. <i>0</i> reads <code>shmop_size($shmid) - $start</code> bytes.</p>
 * @return string <p>Returns the data失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.shmop-read.php
 * @see shmop_write()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function shmop_read($shmid, int $start, int $count): string {}

/**
 * Get size of shared memory block
 * <p><b>shmop_size()</b> is used to get the size, in bytes of the shared memory block.</p>
 * @param resource $shmid <p>The shared memory block identifier created by <code>shmop_open()</code></p>
 * @return int <p>Returns an int, which represents the number of bytes the shared memory block occupies.</p>
 * @link http://php.net/manual/ja/function.shmop-size.php
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function shmop_size($shmid): int {}

/**
 * Write data into shared memory block
 * <p><b>shmop_write()</b> will write a string into shared memory block.</p>
 * @param resource $shmid <p>The shared memory block identifier created by <code>shmop_open()</code></p>
 * @param string $data <p>A string to write into shared memory block</p>
 * @param int $offset <p>Specifies where to start writing data inside the shared memory segment.</p>
 * @return int <p>The size of the written <code>data</code>, or <b><code>FALSE</code></b> on failure.</p>
 * @link http://php.net/manual/ja/function.shmop-write.php
 * @see shmop_read()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function shmop_write($shmid, string $data, int $offset): int {}

