<?php



/**
 * <p><b>APCUIterator</b> クラスを使うと、巨大な APCu キャッシュの反復処理を容易に行えます。 巨大なキャッシュを順を追って処理し、 ロックインスタンス単位で決まった数のエントリを取得することができます。 そのため、キャッシュ全体を抱え込んで 100 件 (デフォルト) のエントリを取り込むのではなく、 キャッシュのロックを解放して他の操作ができる状態にすることが可能です。 また、正規表現によるマッチングは C 言語レベルで行われるのでより効率的です。</p>
 * @link http://php.net/manual/ja/class.apcuiterator.php
 * @since PECL apcu >= 5.0.0
 */
class APCUIterator implements \Iterator {

	/**
	 * APCUIterator イテレータオブジェクトを作成する
	 * <p>APCUIterator オブジェクトを作成します。</p>
	 * @param mixed $search <p>APCu のキーの名前にマッチする PCRE 正規表現。 単一の正規表現の場合は文字列で、複数の正規表現の場合は配列で指定します。 <b><code>NULL</code></b> を渡すと、検索をスキップします。</p>
	 * @param int $format <p>希望する書式。 APC_ITER_&#42; 定数の組み合わせで指定します。</p>
	 * @param int $chunk_size <p>チャンクサイズ。0 より大きい値でなければなりません。 デフォルト値は 100 です。</p>
	 * @param int $list <p>一覧にする形式。<b><code>APC_LIST_ACTIVE</code></b> あるいは <b><code>APC_LIST_DELETED</code></b> を渡します。</p>
	 * @return self <p>成功した場合に APCUIterator オブジェクト、 失敗した場合に <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/apcuiterator.construct.php
	 * @see apcu_exists(), apcu_cache_info()
	 * @since PECL apcu >= 5.0.0
	 */
	public function __construct($search = NULL, int $format = APC_ITER_ALL, int $chunk_size = 100, int $list = APC_LIST_ACTIVE) {}

	/**
	 * 現在の項目を取得する
	 * <p>APCUIterator から現在の項目を取得します。</p>
	 * @return mixed <p>成功した場合に現在の項目を返します。 もう項目が存在しない場合や取得に失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/apcuiterator.current.php
	 * @since PECL apcu >= 5.0.0
	 */
	public function current() {}

	/**
	 * 総数を取得する
	 * <p>総数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>総数を返します。</p>
	 * @link http://php.net/manual/ja/apcuiterator.gettotalcount.php
	 * @see apcu_cache_info()
	 * @since PECL apcu >= 5.0.0
	 */
	public function getTotalCount(): int {}

	/**
	 * キャッシュヒットの総数を取得する
	 * <p>キャッシュヒットの総数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>成功した場合にヒット数、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/apcuiterator.gettotalhits.php
	 * @see apcu_cache_info()
	 * @since PECL apcu >= 5.0.0
	 */
	public function getTotalHits(): int {}

	/**
	 * キャッシュのサイズの合計を取得する
	 * <p>キャッシュのサイズの合計を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>キャッシュのサイズの合計を返します。</p>
	 * @link http://php.net/manual/ja/apcuiterator.gettotalsize.php
	 * @see apcu_cache_info()
	 * @since PECL apcu >= 5.0.0
	 */
	public function getTotalSize(): int {}

	/**
	 * イテレータのキーを取得する
	 * <p>現在のイテレータのキーを取得します。</p>
	 * @return string <p>成功した場合にキー、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/apcuiterator.key.php
	 * @since PECL apcu >= 5.0.0
	 */
	public function key(): string {}

	/**
	 * ポインタを次の項目に移動させる
	 * <p>イテレータのポインタを次の要素に移動させます。</p>
	 * @return void <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/apcuiterator.next.php
	 * @since PECL apcu >= 5.0.0
	 */
	public function next(): void {}

	/**
	 * イテレータを巻き戻す
	 * <p>イテレータを最初の要素に巻き戻します</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/apcuiterator.rewind.php
	 * @since PECL apcu >= 5.0.0
	 */
	public function rewind(): void {}

	/**
	 * 現在位置が有効かどうかを調べる
	 * <p>イテレータの現在位置が有効かどうかを調べます。</p>
	 * @return void <p>イテレータの現在位置が有効な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/apcuiterator.valid.php
	 * @since PECL apcu >= 5.0.0
	 */
	public function valid(): void {}
}

/**
 * 新規の変数をデータ領域にキャッシュする
 * <p>まだ保存されていない場合にのみ、変数をデータ領域にキャッシュします。</p><p><b>注意</b>:  PHP の他の多くの仕組みと異なり、<b>apcu_add()</b> を用いて格納された変数はリクエストを超えて （その値がキャッシュから取り除かれるまで）持続します。 </p>
 * @param string $key <p>この名前を用いて変数を格納します。<code>key</code> は キャッシュ内で一意です。そのため、<b>apcu_add()</b> を使用して同一の <code>key</code> で新しい値を格納しようとしても、それは保存されません。 かわりに <b><code>FALSE</code></b> が返されます (これが、<b>apcu_add()</b> と <code>apcu_store()</code> の唯一の相違点です)。</p>
 * @param mixed $var <p>格納する変数。</p>
 * @param int $ttl <p>有効期間。<code>var</code> は、キャッシュに <code>ttl</code> 秒間だけ格納されます。 <code>ttl</code> が経過すると、格納されている変数は （次のリクエスト時に）キャッシュから削除されます。 <code>ttl</code> が指定されていない（あるいは <code>ttl</code> が <i>0</i> の場合）は、 キャッシュから手動で削除される・あるいはキャッシュに存在できなくなる （clear, restart など）まで値が持続します。</p>
 * @return bool <p>何かがキャッシュに正しく追加されたときに TRUE、それ以外の場合に FALSE を返します。 二番目の構文は、エラーになったキーを含む配列を返します。</p>
 * @link http://php.net/manual/ja/function.apcu-add.php
 * @see apcu_store(), apcu_fetch(), apcu_delete()
 * @since PECL apcu >= 4.0.0
 */
function apcu_add(string $key, $var, int $ttl = 0): bool {}

/**
 * APCu のデータから、キャッシュされた情報を取得する
 * <p>APC のデータから、キャッシュされた情報およびメタデータを取得します。</p>
 * @param bool $limited <p><code>limited</code> が <b><code>TRUE</code></b> の場合は、 返り値にキャッシュエントリの個々の一覧が含まれません。 これは、統計情報の収集時に呼び出しを最適化したい場合などに有用です。</p>
 * @return array <p>キャッシュされたデータ（およびメタデータ）の配列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p><p><b>注意</b>:  もし APC キャッシュのデータを取得できなかった場合、 <b>apcu_cache_info()</b> は警告を発生します。これが起こるのは、 一般的には APC が有効になっていない場合などです。 </p>
 * @link http://php.net/manual/ja/function.apcu-cache-info.php
 * @since PECL apcu >= 4.0.0
 */
function apcu_cache_info(bool $limited = FALSE): array {}

/**
 * 古い値を新しい値に更新する
 * <p><b>apcu_cas()</b> は、既に保存されている整数値が <code>old</code> パラメータにマッチする値のときに、それを <code>new</code> パラメータの値に更新します。</p>
 * @param string $key <p>更新する値のキー。</p>
 * @param int $old <p>古い値 (現在保存されている値)。</p>
 * @param int $new <p>新しく更新したい値。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.apcu-cas.php
 * @see apcu_dec(), apcu_store()
 * @since PECL apcu >= 4.0.0
 */
function apcu_cas(string $key, int $old, int $new): bool {}

/**
 * APCu キャッシュをクリアする
 * <p>キャッシュをクリアします。</p>
 * @return bool <p>常に <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.apcu-clear-cache.php
 * @see apcu_cache_info()
 * @since PECL apcu >= 4.0.0
 */
function apcu_clear_cache(): bool {}

/**
 * 保存した数値を減らす
 * <p>保存した整数値を減らします。</p>
 * @param string $key <p>減らしたい値のキー。</p>
 * @param int $step <p>減らしたい数。</p>
 * @param bool $success <p>この参照渡しの変数に、成功したか失敗したかの結果が格納されます。</p>
 * @return int <p>成功した場合に <code>key</code> の現在値を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
 * @link http://php.net/manual/ja/function.apcu-dec.php
 * @see apcu_inc()
 * @since PECL apcu >= 4.0.0
 */
function apcu_dec(string $key, int $step = 1, bool &$success = NULL): int {}

/**
 * 格納されている変数をキャッシュから取り除く
 * <p>格納されている変数をキャッシュから取り除きます。</p>
 * @param mixed $key <p>単一のキーの文字列、複数のキーの文字列の配列、 または APCUIterator オブジェクトとして 値を格納するために使用されるキー。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.apcu-delete.php
 * @see apcu_store(), apcu_fetch(), apcu_clear_cache()
 * @since PECL apcu >= 4.0.0
 */
function apcu_delete($key): bool {}

/**
 * Atomically fetch or generate a cache entry
 * <p>Atomically attempts to find <code>key</code> in the cache, if it cannot be found <code>generator</code> is called, passing <code>key</code> as the only argument. The return value of the call is then cached with the optionally specified <code>ttl</code>, and returned.</p><p><b>注意</b>:  When control enters <b>apcu_entry()</b> the lock for the cache is acquired exclusively, it is released when control leaves <b>apcu_entry()</b>: In effect, this turns the body of <code>generator</code> into a critical section, disallowing two processes from executing the same code paths concurrently. In addition, it prohibits the concurrent execution of any other APCu functions, since they will acquire the same lock. </p><p>The only APCu function that can be called safely by <code>generator</code> is <b>apcu_entry()</b>.</p>
 * @param string $key <p>Identity of cache entry</p>
 * @param callable $generator <p>A callable that accepts <code>key</code> as the only argument and returns the value to cache.</p>
 * @param int $ttl <p>Time To Live; store <code>var</code> in the cache for <code>ttl</code> seconds. After the <code>ttl</code> has passed, the stored variable will be expunged from the cache (on the next request). If no <code>ttl</code> is supplied (or if the <code>ttl</code> is <i>0</i>), the value will persist until it is removed from the cache manually, or otherwise fails to exist in the cache (clear, restart, etc.).</p>
 * @return mixed <p>Returns the cached value</p>
 * @link http://php.net/manual/ja/function.apcu-entry.php
 * @see apcu_store(), apcu_fetch(), apcu_delete()
 * @since PECL apcu >= 5.1.0
 */
function apcu_entry(string $key, callable $generator, int $ttl = 0) {}

/**
 * エントリが存在するかどうかを調べる
 * <p>指定した APCu エントリが存在するかどうかを調べます。</p>
 * @param mixed $keys <p>キーを含む文字列、あるいは文字列の配列。</p>
 * @return mixed <p>キーが存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。 <code>keys</code> に配列を渡したときは、 存在するキーをすべて含む配列を返します。 どれも存在しない場合は空の配列を返します。</p>
 * @link http://php.net/manual/ja/function.apcu-exists.php
 * @see apcu_cache_info(), apcu_fetch()
 * @since PECL apcu >= 4.0.0
 */
function apcu_exists($keys) {}

/**
 * 格納されている変数をキャッシュから取得する
 * <p>エントリをキャッシュから取得します。</p>
 * @param mixed $key <p>(<code>apcu_store()</code> を用いて) 値を格納する際に使用された <code>key</code>。 配列を渡した場合は、各要素について取得した値を返します。</p>
 * @param bool $success <p>成功したばあいに <b><code>TRUE</code></b>、失敗した際に <b><code>FALSE</code></b> が設定されます。</p>
 * @return mixed <p>成功した場合に格納されていた変数 (あるいは配列)、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.apcu-fetch.php
 * @see apcu_store(), apcu_delete()
 * @since PECL apcu >= 4.0.0
 */
function apcu_fetch($key, bool &$success = NULL) {}

/**
 * 保存した数値を増やす
 * <p>保存した整数値を増やします。</p>
 * @param string $key <p>増やしたい値のキー。</p>
 * @param int $step <p>増やしたい数。</p>
 * @param bool $success <p>この参照渡しの変数に、成功したか失敗したかの結果が格納されます。</p>
 * @return int <p>成功した場合に <code>key</code> の現在値を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
 * @link http://php.net/manual/ja/function.apcu-inc.php
 * @see apcu_dec()
 * @since PECL apcu >= 4.0.0
 */
function apcu_inc(string $key, int $step = 1, bool &$success = NULL): int {}

/**
 * APCu の共有メモリ割り当てに関する情報を取得する
 * <p>APCu の共有メモリ割り当てに関する情報を取得します。</p>
 * @param bool $limited <p><b><code>FALSE</code></b> (デフォルト) を設定すると、<b>apcu_sma_info()</b> は各セグメントの詳細な情報を返します。</p>
 * @return array <p>共有メモリ割り当てデータの配列を返します。失敗した場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.apcu-sma-info.php
 * @since PECL apcu >= 4.0.0
 */
function apcu_sma_info(bool $limited = FALSE): array {}

/**
 * 変数をデータ領域にキャッシュする
 * <p>変数をデータ領域にキャッシュします。</p><p><b>注意</b>:  PHP の他の多くの仕組みと異なり、<b>apcu_store()</b> を用いて格納された変数はリクエストを超えて （その値がキャッシュから取り除かれるまで）持続します。 </p>
 * @param string $key <p>この名前を用いて変数を格納します。<code>key</code> は キャッシュ内で一意です。そのため、同一の <code>key</code> で新しい値を格納すると、元の値は上書きされます。</p>
 * @param mixed $var <p>格納する変数。</p>
 * @param int $ttl <p>有効期間。<code>var</code> は、キャッシュに <code>ttl</code> 秒間だけ格納されます。 <code>ttl</code> が経過すると、格納されている変数は （次のリクエスト時に）キャッシュから削除されます。 <code>ttl</code> が指定されていない（あるいは <code>ttl</code> が <i>0</i> の場合）は、 キャッシュから手動で削除される・あるいはキャッシュに存在できなくなる （clear, restart など）まで値が持続します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 二番目の構文は、エラーになったキーを含む配列を返します。</p>
 * @link http://php.net/manual/ja/function.apcu-store.php
 * @see apcu_add(), apcu_fetch(), apcu_delete()
 * @since PECL apcu >= 4.0.0
 */
function apcu_store(string $key, $var, int $ttl = 0): bool {}

