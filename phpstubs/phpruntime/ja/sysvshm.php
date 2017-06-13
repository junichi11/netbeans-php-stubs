<?php

// Start of sysvshm v.7.1.5

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 共有メモリセグメントを作成またはオープンする
 * @link http://php.net/manual/ja/function.shm-attach.php
 * @param int $key <p>
 * 共有メモリセグメント ID を表す数値。
 * </p>
 * @param int $memsize [optional] <p>
 * メモリのサイズ。省略した場合のデフォルトは <i>php.ini</i> の
 * sysvshm.init_mem、あるいは 10000
 * バイトとなります。
 * </p>
 * @param int $perm [optional] <p>
 * オプションのパーミッション設定。デフォルトは 0666 です。
 * </p>
 * @return resource 共有メモリセグメントの ID を返します。
 */
function shm_attach(int $key, int $memsize = null, int $perm = 0666) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Unix システムから共有メモリを削除する
 * @link http://php.net/manual/ja/function.shm-remove.php
 * @param resource $shm_identifier <p>
 * <b>shm_attach</b> が返す
 * 共有メモリ ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function shm_remove($shm_identifier): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 共有メモリセグメントへの接続を閉じる
 * @link http://php.net/manual/ja/function.shm-detach.php
 * @param resource $shm_identifier <p>
 * <b>shm_attach</b> が返す共有メモリリソースハンドル。
 * </p>
 * @return bool <b>shm_detach</b> は、常に <b>TRUE</b> を返します。
 */
function shm_detach($shm_identifier): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 共有メモリの変数を挿入または更新する
 * @link http://php.net/manual/ja/function.shm-put-var.php
 * @param resource $shm_identifier <p>
 * <b>shm_attach</b> が返す共有メモリリソースハンドル。
 * </p>
 * @param int $variable_key <p>
 * 変数のキー。
 * </p>
 * @param mixed $variable <p>
 * 変数。<b>serialize</b> がサポートするすべての
 * 型を使うことができます。
 * 通常これは、リソース型と一部の内部オブジェクト (シリアライズできないもの)
 * 以外のすべての型を意味します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function shm_put_var($shm_identifier, int $variable_key, $variable): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * 特定のエントリが存在するかどうかを調べる
 * @link http://php.net/manual/ja/function.shm-has-var.php
 * @param resource $shm_identifier <p>
 * <b>shm_attach</b> で取得した共有メモリセグメント。
 * </p>
 * @param int $variable_key <p>
 * 変数のキー。
 * </p>
 * @return bool エントリが存在する場合に <b>TRUE</b>、それ以外の場合に <b>FALSE</b> を返します。
 */
function shm_has_var($shm_identifier, int $variable_key): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 共有メモリから変数を返す
 * @link http://php.net/manual/ja/function.shm-get-var.php
 * @param resource $shm_identifier <p>
 * 共有メモリセグメント。<b>shm_attach</b>
 * から取得します。
 * </p>
 * @param int $variable_key <p>
 * 変数のキー。
 * </p>
 * @return mixed 指定したキーの変数を返します。
 */
function shm_get_var($shm_identifier, int $variable_key) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 共有メモリから変数を削除する
 * @link http://php.net/manual/ja/function.shm-remove-var.php
 * @param resource $shm_identifier <p>
 * <b>shm_attach</b> が返す
 * 共有メモリ ID。
 * </p>
 * @param int $variable_key <p>
 * 変数のキー。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function shm_remove_var($shm_identifier, int $variable_key): bool {}

// End of sysvshm v.7.1.5
?>
