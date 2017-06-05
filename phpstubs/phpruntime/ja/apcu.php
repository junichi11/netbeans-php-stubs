<?php

// Start of apcu v.5.1.9dev

class APCuIterator implements Iterator, Traversable {

	/**
	 * @param $search [optional]
	 * @param $format [optional]
	 * @param $chunk_size [optional]
	 * @param $list [optional]
	 */
	public function __construct($search, $format, $chunk_size, $list) {}

	public function rewind() {}

	public function current() {}

	public function key() {}

	public function next() {}

	public function valid() {}

	public function getTotalHits() {}

	public function getTotalSize() {}

	public function getTotalCount() {}

}

/**
 * @param $limited [optional]
 */
function apcu_cache_info($limited) {}

function apcu_clear_cache() {}

/**
 * @param $limited [optional]
 */
function apcu_sma_info($limited) {}

/**
 * @param $key
 */
function apcu_key_info($key) {}

function apcu_enabled() {}

/**
 * @param $key
 * @param $var
 * @param $ttl [optional]
 */
function apcu_store($key, $var, $ttl) {}

/**
 * @param $key
 * @param $success [optional]
 */
function apcu_fetch($key, &$success) {}

/**
 * @param $keys
 */
function apcu_delete($keys) {}

/**
 * @param $key
 * @param $var
 * @param $ttl [optional]
 */
function apcu_add($key, $var, $ttl) {}

/**
 * @param $key
 * @param $step [optional]
 * @param $success [optional]
 */
function apcu_inc($key, $step, &$success) {}

/**
 * @param $key
 * @param $step [optional]
 * @param $success [optional]
 */
function apcu_dec($key, $step, &$success) {}

/**
 * @param $key
 * @param $old
 * @param $new
 */
function apcu_cas($key, $old, $new) {}

/**
 * @param $keys
 */
function apcu_exists($keys) {}

/**
 * @param $key
 * @param $generator
 * @param $ttl [optional]
 */
function apcu_entry($key, $generator, $ttl) {}

define ('APC_LIST_ACTIVE', 1);
define ('APC_LIST_DELETED', 2);
define ('APC_ITER_TYPE', 1);
define ('APC_ITER_KEY', 2);
define ('APC_ITER_VALUE', 4);
define ('APC_ITER_NUM_HITS', 8);
define ('APC_ITER_MTIME', 16);
define ('APC_ITER_CTIME', 32);
define ('APC_ITER_DTIME', 64);
define ('APC_ITER_ATIME', 128);
define ('APC_ITER_REFCOUNT', 256);
define ('APC_ITER_MEM_SIZE', 512);
define ('APC_ITER_TTL', 1024);
define ('APC_ITER_NONE', 0);
define ('APC_ITER_ALL', 4294967295);

// End of apcu v.5.1.9dev
?>
