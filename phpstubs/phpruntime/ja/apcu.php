<?php

// Start of apcu v.5.1.9dev

/**
 * The <b>APCUIterator</b> class makes it easier to iterate
 * over large APCu caches. This is helpful as it allows iterating over large
 * caches in steps, while grabbing a defined number of entries per lock instance,
 * so it frees the cache locks for other activities rather than hold up the
 * entire cache to grab 100 (the default) entries. Also, using regular expression
 * matching is more efficient as it's been moved to the C level.
 * @link http://php.net/manual/ja/class.apcuiterator.php
 */
class APCuIterator implements Iterator, Traversable {

	/**
	 * (PECL apcu &gt;= 5.0.0)<br/>
	 * Constructs an APCUIterator iterator object
	 * @link http://php.net/manual/ja/apcuiterator.construct.php
	 * @param mixed $search [optional] <p>
	 * A PCRE regular expression that
	 * matches against APCu key names, either as a string for
	 * a single regular expression, or as an array of regular
	 * expressions. Or, optionally pass in <b>NULL</b> to skip the search.
	 * </p>
	 * @param int $format [optional] <p>
	 * The desired format, as configured with one or more of the
	 * APCU_ITER_* constants.
	 * </p>
	 * @param int $chunk_size [optional] <p>
	 * The chunk size. Must be a value greater than 0. The default
	 * value is 100.
	 * </p>
	 * @param int $list [optional] <p>
	 * The type to list. Either pass in <b>APCU_LIST_ACTIVE</b>
	 * or <b>APCU_LIST_DELETED</b>.
	 * </p>
	 */
	public function __construct($search = null, int $format = APCU_ITER_ALL, int $chunk_size = 100, int $list = APCU_LIST_ACTIVE) {}

	/**
	 * (PECL apcu &gt;= 5.0.0)<br/>
	 * Rewinds iterator
	 * @link http://php.net/manual/ja/apcuiterator.rewind.php
	 * @return void 値を返しません。
	 */
	public function rewind(): void {}

	/**
	 * (PECL apcu &gt;= 5.0.0)<br/>
	 * Get current item
	 * @link http://php.net/manual/ja/apcuiterator.current.php
	 * @return mixed the current item on success, or <b>FALSE</b> if no
	 * more items or exist, or on failure.
	 */
	public function current() {}

	/**
	 * (PECL apcu &gt;= 5.0.0)<br/>
	 * Get iterator key
	 * @link http://php.net/manual/ja/apcuiterator.key.php
	 * @return string the key on success, or <b>FALSE</b> upon failure.
	 */
	public function key(): string {}

	/**
	 * (PECL apcu &gt;= 5.0.0)<br/>
	 * Move pointer to next item
	 * @link http://php.net/manual/ja/apcuiterator.next.php
	 * @return void 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
	 */
	public function next(): void {}

	/**
	 * (PECL apcu &gt;= 5.0.0)<br/>
	 * Checks if current position is valid
	 * @link http://php.net/manual/ja/apcuiterator.valid.php
	 * @return void <b>TRUE</b> if the current iterator position is valid, otherwise <b>FALSE</b>.
	 */
	public function valid(): void {}

	/**
	 * (PECL apcu &gt;= 5.0.0)<br/>
	 * Get total cache hits
	 * @link http://php.net/manual/ja/apcuiterator.gettotalhits.php
	 * @return int The number of hits on success, or <b>FALSE</b> on failure.
	 */
	public function getTotalHits(): int {}

	/**
	 * (PECL apcu &gt;= 5.0.0)<br/>
	 * Get total cache size
	 * @link http://php.net/manual/ja/apcuiterator.gettotalsize.php
	 * @return int The total cache size.
	 */
	public function getTotalSize(): int {}

	/**
	 * (PECL apcu &gt;= 5.0.0)<br/>
	 * Get total count
	 * @link http://php.net/manual/ja/apcuiterator.gettotalcount.php
	 * @return int The total count.
	 */
	public function getTotalCount(): int {}

}

/**
 * (PECL apcu &gt;= 4.0.0)<br/>
 * Retrieves cached information from APCu's data store
 * @link http://php.net/manual/ja/function.apcu-cache-info.php
 * @param bool $limited [optional] <p>
 * If <i>limited</i> is <b>TRUE</b>, the
 * return value will exclude the individual list of cache entries. This
 * is useful when trying to optimize calls for statistics gathering.
 * </p>
 * @return array Array of cached data (and meta-data)失敗した場合に <b>FALSE</b> を返します
 */
function apcu_cache_info(bool $limited = false): array {}

/**
 * (PECL apcu &gt;= 4.0.0)<br/>
 * Clears the APCu cache
 * @link http://php.net/manual/ja/function.apcu-clear-cache.php
 * @return bool <b>TRUE</b> always
 */
function apcu_clear_cache(): bool {}

/**
 * (PECL apcu &gt;= 4.0.0)<br/>
 * Retrieves APCu Shared Memory Allocation information
 * @link http://php.net/manual/ja/function.apcu-sma-info.php
 * @param bool $limited [optional] <p>
 * When set to <b>FALSE</b> (default) <b>apcu_sma_info</b> will
 * return a detailed information about each segment.
 * </p>
 * @return array Array of Shared Memory Allocation data; <b>FALSE</b> on failure.
 */
function apcu_sma_info(bool $limited = false): array {}

/**
 * @param $key
 */
function apcu_key_info($key) {}

function apcu_enabled() {}

/**
 * (PECL apcu &gt;= 4.0.0)<br/>
 * Cache a variable in the data store
 * @link http://php.net/manual/ja/function.apcu-store.php
 * @param string $key <p>
 * Store the variable using this name. <i>key</i>s are
 * cache-unique, so storing a second value with the same
 * <i>key</i> will overwrite the original value.
 * </p>
 * @param mixed $var <p>
 * The variable to store
 * </p>
 * @param int $ttl [optional] <p>
 * Time To Live; store <i>var</i> in the cache for
 * <i>ttl</i> seconds. After the
 * <i>ttl</i> has passed, the stored variable will be
 * expunged from the cache (on the next request). If no <i>ttl</i>
 * is supplied (or if the <i>ttl</i> is
 * 0), the value will persist until it is removed from
 * the cache manually, or otherwise fails to exist in the cache (clear,
 * restart, etc.).
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 * Second syntax returns array with error keys.
 */
function apcu_store(string $key, $var, int $ttl = 0): bool {}

/**
 * (PECL apcu &gt;= 4.0.0)<br/>
 * Fetch a stored variable from the cache
 * @link http://php.net/manual/ja/function.apcu-fetch.php
 * @param mixed $key <p>
 * The <i>key</i> used to store the value (with
 * <b>apcu_store</b>). If an array is passed then each
 * element is fetched and returned.
 * </p>
 * @param bool $success [optional] <p>
 * Set to <b>TRUE</b> in success and <b>FALSE</b> in failure.
 * </p>
 * @return mixed The stored variable or array of variables on success; <b>FALSE</b> on failure
 */
function apcu_fetch($key, bool &$success = null) {}

/**
 * (PECL apcu &gt;= 4.0.0)<br/>
 * Removes a stored variable from the cache
 * @link http://php.net/manual/ja/function.apcu-delete.php
 * @param mixed $key <p>
 * A <i>key</i> used to store the value as a
 * string for a single key,
 * or as an array of strings for several keys,
 * or as an <b>APCUIterator</b> object.
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function apcu_delete($key): bool {}

/**
 * (PECL apcu &gt;= 4.0.0)<br/>
 * Cache a new variable in the data store
 * @link http://php.net/manual/ja/function.apcu-add.php
 * @param string $key <p>
 * Store the variable using this name. <i>key</i>s are
 * cache-unique, so attempting to use <b>apcu_add</b> to
 * store data with a key that already exists will not overwrite the
 * existing data, and will instead return <b>FALSE</b>. (This is the only
 * difference between <b>apcu_add</b> and
 * <b>apcu_store</b>.)
 * </p>
 * @param mixed $var <p>
 * The variable to store
 * </p>
 * @param int $ttl [optional] <p>
 * Time To Live; store <i>var</i> in the cache for
 * <i>ttl</i> seconds. After the
 * <i>ttl</i> has passed, the stored variable will be
 * expunged from the cache (on the next request). If no <i>ttl</i>
 * is supplied (or if the <i>ttl</i> is
 * 0), the value will persist until it is removed from
 * the cache manually, or otherwise fails to exist in the cache (clear,
 * restart, etc.).
 * </p>
 * @return bool TRUE if something has effectively been added into the cache, FALSE otherwise.
 * Second syntax returns array with error keys.
 */
function apcu_add(string $key, $var, int $ttl = 0): bool {}

/**
 * (PECL apcu &gt;= 4.0.0)<br/>
 * Increase a stored number
 * @link http://php.net/manual/ja/function.apcu-inc.php
 * @param string $key <p>
 * The key of the value being increased.
 * </p>
 * @param int $step [optional] <p>
 * The step, or value to increase.
 * </p>
 * @param bool $success [optional] <p>
 * Optionally pass the success or fail boolean value to
 * this referenced variable.
 * </p>
 * @return int the current value of <i>key</i>'s value on success,
 * 失敗した場合に <b>FALSE</b> を返します
 */
function apcu_inc(string $key, int $step = 1, bool &$success = null): int {}

/**
 * (PECL apcu &gt;= 4.0.0)<br/>
 * Decrease a stored number
 * @link http://php.net/manual/ja/function.apcu-dec.php
 * @param string $key <p>
 * The key of the value being decreased.
 * </p>
 * @param int $step [optional] <p>
 * The step, or value to decrease.
 * </p>
 * @param bool $success [optional] <p>
 * Optionally pass the success or fail boolean value to
 * this referenced variable.
 * </p>
 * @return int the current value of <i>key</i>'s value on success,
 * 失敗した場合に <b>FALSE</b> を返します
 */
function apcu_dec(string $key, int $step = 1, bool &$success = null): int {}

/**
 * (PECL apcu &gt;= 4.0.0)<br/>
 * Updates an old value with a new value
 * @link http://php.net/manual/ja/function.apcu-cas.php
 * @param string $key <p>
 * The key of the value being updated.
 * </p>
 * @param int $old <p>
 * The old value (the value currently stored).
 * </p>
 * @param int $new <p>
 * The new value to update to.
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function apcu_cas(string $key, int $old, int $new): bool {}

/**
 * (PECL apcu &gt;= 4.0.0)<br/>
 * Checks if entry exists
 * @link http://php.net/manual/ja/function.apcu-exists.php
 * @param mixed $keys <p>
 * A string, or an array of strings, that
 * contain keys.
 * </p>
 * @return mixed <b>TRUE</b> if the key exists, otherwise <b>FALSE</b> Or if an
 * array was passed to <i>keys</i>, then
 * an array is returned that contains all existing keys, or an empty
 * array if none exist.
 */
function apcu_exists($keys) {}

/**
 * (PECL apcu &gt;= 5.1.0)<br/>
 * Atomically fetch or generate a cache entry
 * @link http://php.net/manual/ja/function.apcu-entry.php
 * @param string $key <p>
 * Identity of cache entry
 * </p>
 * @param callable $generator <p>
 * A callable that accepts <i>key</i> as the only argument and returns the value to cache.
 * </p>
 * @param int $ttl [optional] <p>
 * Time To Live; store <i>var</i> in the cache for
 * <i>ttl</i> seconds. After the
 * <i>ttl</i> has passed, the stored variable will be
 * expunged from the cache (on the next request). If no <i>ttl</i>
 * is supplied (or if the <i>ttl</i> is
 * 0), the value will persist until it is removed from
 * the cache manually, or otherwise fails to exist in the cache (clear,
 * restart, etc.).
 * </p>
 * @return mixed the cached value
 */
function apcu_entry(string $key, callable $generator, int $ttl = 0) {}

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
