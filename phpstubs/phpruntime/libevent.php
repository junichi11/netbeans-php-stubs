<?php



namespace {

	/**
	 * モニタするイベントに追加する
	 * <p><code>event_add()</code> は <code>event</code> の実行予定を追加します。 これは、<code>event_set()</code> で指定したイベントが発生するか <code>timeout</code> で指定した時間が経過したときに実行されます。 <code>timeout</code> を省略した場合は、タイムアウトは設定されません。 <code>event</code> は、事前に <code>event_set()</code> と <code>event_base_set()</code> で初期化したものでなければなりません。 <code>event</code> に既にタイムアウトが設定されている場合は、 新しい値で上書きします。</p>
	 * @param resource $event <p>有効なイベントリソース。</p>
	 * @param int $timeout <p>オプションのタイムアウト (マイクロ秒)。</p>
	 * @return bool <p><code>event_add()</code> は、成功した場合に <b><code>TRUE</code></b>、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-add.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_add($event, int $timeout = -1): bool {}

	/**
	 * イベントベースを破棄する
	 * <p>指定した <code>event_base</code> を破棄し、 関連づけられたリソースをすべて解放します。 イベントがアタッチされているイベントベースは破棄できないことに注意しましょう。</p>
	 * @param resource $event_base <p>有効なイベントベースリソース。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.event-base-free.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_free($event_base): void {}

	/**
	 * イベントを処理する
	 * <p>指定したイベントベースのイベントループを開始します。</p>
	 * @param resource $event_base <p>有効なイベントベースリソース。</p>
	 * @param int $flags <p>オプションのパラメータ。 <b><code>EVLOOP_ONCE</code></b> と <b><code>EVLOOP_NONBLOCK</code></b> の任意の組み合わせ。</p>
	 * @return int <p><b>event_base_loop()</b> は、成功した場合に 0、エラー時に -1、 イベントが登録されていなければ 1 を返します。</p>
	 * @link https://php.net/manual/ja/function.event-base-loop.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_loop($event_base, int $flags = 0): int {}

	/**
	 * イベントループを中止する
	 * <p>アクティブなイベントループをその場で中止します。 <i>break</i> 文と同じような挙動です。</p>
	 * @param resource $event_base <p>有効なイベントベースリソース。</p>
	 * @return bool <p><b>event_base_loopbreak()</b> は、成功した場合に <b><code>TRUE</code></b>、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-base-loopbreak.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_loopbreak($event_base): bool {}

	/**
	 * あとでループを終了する
	 * <p>指定した時間が経過した時点でのイベントループの処理を正常に終えたあとに、 イベントをブロックせずにループを終了します。</p>
	 * @param resource $event_base <p>有効なイベントベースリソース。</p>
	 * @param int $timeout <p>オプションのタイムアウト (マイクロ秒)。</p>
	 * @return bool <p><b>event_base_loopexit()</b> は、成功した場合に <b><code>TRUE</code></b>、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-base-loopexit.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_loopexit($event_base, int $timeout = -1): bool {}

	/**
	 * 新しいイベントベースを作成して初期化する
	 * <p>新しいイベントベースを返します。これは <code>event_base_set()</code> や <code>event_base_loop()</code> などの関数で使えるものです。</p>
	 * @return resource <p><b>event_base_new()</b> は、成功した場合に有効なイベントベースリソース、 エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-base-new.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_new() {}

	/**
	 * イベントの優先度レベルの数値を設定する
	 * <p>イベントの優先度レベルを表す数値を設定します。</p><p>デフォルトでは、すべてのイベントは同じ優先度 (<code>npriorities</code>/2) で設定されます。 <b>event_base_priority_init()</b> を使うとイベントの優先度レベルの数値を変更でき、 イベントごとに優先度を設定することができます。</p>
	 * @param resource $event_base <p>有効なイベントベースリソース。</p>
	 * @param int $npriorities <p>イベントの優先度レベルを表す数値。</p>
	 * @return bool <p><b>event_base_priority_init()</b> は、成功した場合に <b><code>TRUE</code></b>、 エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-base-priority-init.php
	 * @since PECL libevent >= 0.0.2
	 */
	function event_base_priority_init($event_base, int $npriorities): bool {}

	/**
	 * Reinitialize the event base after a fork
	 * <p>Some event mechanisms do not survive across fork. The <code>event_base</code> needs to be reinitialized with this function.</p>
	 * @param resource $event_base <p>Valid event base resource that needs to be re-initialized.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-base-reinit.php
	 * @since PECL libevent >= 0.1.0
	 */
	function event_base_reinit($event_base): bool {}

	/**
	 * イベントベースをイベントと関連づける
	 * <p><code>event_base</code> を <code>event</code> と関連づけます。</p>
	 * @param resource $event <p>有効なイベントリソース。</p>
	 * @param resource $event_base <p>有効なイベントベースリソース。</p>
	 * @return bool <p><b>event_base_set()</b> は、成功した場合に <b><code>TRUE</code></b>、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-base-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_base_set($event, $event_base): bool {}

	/**
	 * バッファつきイベントをイベントベースと関連づける
	 * <p>指定した <code>bevent</code> を <code>event_base</code> に関連づけます。</p>
	 * @param resource $bevent <p>有効なバッファつきイベントリソース。</p>
	 * @param resource $event_base <p>有効なイベントベースリソース。</p>
	 * @return bool <p><b>event_buffer_base_set()</b> は、成功した場合に <b><code>TRUE</code></b>、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-buffer-base-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_base_set($bevent, $event_base): bool {}

	/**
	 * バッファつきイベントを無効にする
	 * <p>指定したバッファつきイベントを無効にします。</p>
	 * @param resource $bevent <p>有効なバッファつきイベントリソース。</p>
	 * @param int $events <p><b><code>EV_READ</code></b> と <b><code>EV_WRITE</code></b> の任意の組み合わせ。</p>
	 * @return bool <p><b>event_buffer_disable()</b> は、成功した場合に <b><code>TRUE</code></b>、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-buffer-disable.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_disable($bevent, int $events): bool {}

	/**
	 * バッファつきイベントを有効にする
	 * <p>指定したバッファつきイベントを有効にします。</p>
	 * @param resource $bevent <p>有効なバッファつきイベントリソース。</p>
	 * @param int $events <p><b><code>EV_READ</code></b> と <b><code>EV_WRITE</code></b> の任意の組み合わせ。</p>
	 * @return bool <p><b>event_buffer_enable()</b> は、成功した場合に <b><code>TRUE</code></b>、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-buffer-enable.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_enable($bevent, int $events): bool {}

	/**
	 * バッファつきイベントのファイル記述子を変更する
	 * <p>バッファつきイベントが操作するファイル記述子を変更します。</p>
	 * @param resource $bevent <p>有効なバッファつきイベントリソース。</p>
	 * @param resource $fd <p>有効な PHP ストリーム。ファイル記述子にキャスト可能でなければなりません。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.event-buffer-fd-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_fd_set($bevent, $fd): void {}

	/**
	 * バッファつきイベントを破棄する
	 * <p>指定したバッファつきイベントを破棄し、関連づけられたすべてのリソースを解放します。</p>
	 * @param resource $bevent <p>有効なバッファつきイベントリソース。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.event-buffer-free.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_free($bevent): void {}

	/**
	 * 新しいバッファつきイベントを作成する
	 * <p>libevent は、通常のイベント API の上位に抽象化レイヤーを用意しています。 バッファつきイベントを使うと I/O を手動で操作する必要がなくなります。 入力用と出力用にそれぞれバッファが用意されており、自動的に出し入れが行われるのです。</p>
	 * @param resource $stream <p>有効な PHP ストリームリソース。ファイル記述子にキャスト可能でなければなりません。</p>
	 * @param mixed $readcb <p>データを読み込むときに起動するコールバック。不要な場合は <code>NULL</code> を指定します。</p>
	 * @param mixed $writecb <p>記述子の書き込み準備ができたときに起動するコールバック。不要な場合は <code>NULL</code> を指定します。</p>
	 * @param mixed $errorcb <p>記述子でエラーが発生したときに起動するコールバック。不要な場合は <code>NULL</code> を指定します。</p>
	 * @param mixed $arg <p>各コールバックに渡す引数 (任意)。</p>
	 * @return resource <p><b>event_buffer_new()</b> は、成功した場合に新しいバッファつきイベント、 エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-buffer-new.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_new($stream, $readcb, $writecb, $errorcb, $arg = NULL) {}

	/**
	 * バッファ着きイベントの優先度を設定する
	 * <p><code>bevent</code> の優先度を設定します。</p>
	 * @param resource $bevent <p>有効なバッファつきイベントリソース。</p>
	 * @param int $priority <p>優先度レベル。ゼロ未満にしたり、イベントベースの最大優先度レベルを超えたりすることはできません (<code>event_base_priority_init()</code>) を参照ください。</p>
	 * @return bool <p><b>event_buffer_priority_set()</b> は、成功した場合に <b><code>TRUE</code></b>、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-buffer-priority-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_priority_set($bevent, int $priority): bool {}

	/**
	 * バッファつきイベントからデータを読み込む
	 * <p>バッファつきイベントの入力バッファからデータを読み込みます。</p>
	 * @param resource $bevent <p>有効なバッファつきイベントリソース。</p>
	 * @param int $data_size <p>データサイズ (バイト単位)。</p>
	 * @return string
	 * @link https://php.net/manual/ja/function.event-buffer-read.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_read($bevent, int $data_size): string {}

	/**
	 * バッファつきイベントのコールバックを設定あるいはリセットする
	 * <p>バッファつきイベントのコールバックを設定したり、既存のコールバックを変更したりします。</p>
	 * @param resource $event <p>有効なバッファつきイベントリソース。</p>
	 * @param mixed $readcb <p>データを読み込むときに起動するコールバック。不要な場合は <code>NULL</code> を指定します。</p>
	 * @param mixed $writecb <p>記述子の書き込み準備ができたときに起動するコールバック。不要な場合は <code>NULL</code> を指定します。</p>
	 * @param mixed $errorcb <p>記述子でエラーが発生したときに起動するコールバック。不要な場合は <code>NULL</code> を指定します。</p>
	 * @param mixed $arg <p>各コールバックに渡す引数 (任意)。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-buffer-set-callback.php
	 * @since PECL libevent >= 0.0.4
	 */
	function event_buffer_set_callback($event, $readcb, $writecb, $errorcb, $arg = NULL): bool {}

	/**
	 * バッファつきイベントの読み込みタイムアウトおよび書き込みタイムアウトを設定する
	 * <p>指定したバッファつきイベントの読み込みタイムアウトおよび書き込みタイムアウトを設定します。</p>
	 * @param resource $bevent <p>有効なバッファつきイベントリソース。</p>
	 * @param int $read_timeout <p>読み込みタイムアウト (秒数)。</p>
	 * @param int $write_timeout <p>書き込みタイムアウト (秒数)。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.event-buffer-timeout-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_timeout_set($bevent, int $read_timeout, int $write_timeout): void {}

	/**
	 * 読み込みおよび書き込みイベントのウォーターマークを設定する
	 * <p>読み込みおよび書き込みイベントのウォーターマークを設定します。 libevent は、入力バッファに少なくとも <code>lowmark</code> バイトたまるまでは読み込みコールバックを起動しません。 また、読み込みバッファが <code>highmark</code> を超えると読み込みを停止します。 出力時には、バッファのデータが <code>lowmark</code> より少なくなったときに書き込みコールバックを起動します。</p>
	 * @param resource $bevent <p>有効なバッファつきイベントリソース。</p>
	 * @param int $events <p><b><code>EV_READ</code></b> と <b><code>EV_WRITE</code></b> の任意の組み合わせ。</p>
	 * @param int $lowmark <p>低ウォーターマーク。</p>
	 * @param int $highmark <p>高ウォーターマーク。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.event-buffer-watermark-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_watermark_set($bevent, int $events, int $lowmark, int $highmark): void {}

	/**
	 * バッファつきイベントにデータを書き込む
	 * <p>指定したバッファつきイベントにデータを書き込みます。 データは出力バッファに追記され、書き込み可能になったときに記述子に書き込まれます。</p>
	 * @param resource $bevent <p>有効なバッファつきイベントリソース。</p>
	 * @param string $data <p>書き込むデータ。</p>
	 * @param int $data_size <p>オプションでサイズを指定します。<b>event_buffer_write()</b> は、 デフォルトでは <code>data</code> をすべて書き込みます。</p>
	 * @return bool <p><b>event_buffer_write()</b> は、成功した場合に <b><code>TRUE</code></b>、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-buffer-write.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_buffer_write($bevent, string $data, int $data_size = -1): bool {}

	/**
	 * モニタするイベントから削除する
	 * <p><code>event</code> をキャンセルします。</p>
	 * @param resource $event <p>有効なイベントリソース。</p>
	 * @return bool <p><code>event_del()</code> は、成功した場合に <b><code>TRUE</code></b>、 エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-del.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_del($event): bool {}

	/**
	 * イベントリソースを解放する
	 * <p>作成したイベントリソースを解放します。</p>
	 * @param resource $event <p>有効なイベントリソース。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.event-free.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_free($event): void {}

	/**
	 * 新しいイベントを作成する
	 * <p>新しいイベントリソースを作成して返します。</p>
	 * @return resource <p><b>event_new()</b> は、成功した場合にイベントリソース、 エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-new.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_new() {}

	/**
	 * Assign a priority to an event
	 * <p>Assign a priority to the <code>event</code>.</p>
	 * @param resource $event <p>Valid event resource.</p>
	 * @param int $priority <p>Priority level. Cannot be less than zero and cannot exceed maximum priority level of the event base (see <code>event_base_priority_init()</code>).</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-priority-set.php
	 * @since PECL libevent >= 0.0.5
	 */
	function event_priority_set($event, int $priority): bool {}

	/**
	 * イベントを準備する
	 * <p><code>event_add()</code> で使うイベントを準備します。 <code>events</code> で指定したイベントが発生したときに <code>callback</code> で指定した関数をコールするように設定します。 <code>events</code> は、次のフラグ <b><code>EV_TIMEOUT</code></b>、<b><code>EV_SIGNAL</code></b>、 <b><code>EV_READ</code></b>、<b><code>EV_WRITE</code></b> および <b><code>EV_PERSIST</code></b> の組み合わせとなります。</p><p><b><code>EV_SIGNAL</code></b> ビットを <code>events</code> で設定すると、<code>fd</code> をシグナル番号として解釈します。</p><p>イベントを初期化したら、<code>event_base_set()</code> を使ってイベントをイベントベースに関連づけます。</p><p>マッチするイベントが発生したら、これらの三つの引数が <code>callback</code> 関数に渡されます。</p><p>シグナル番号、あるいはストリームリソース。</p><p>イベントを表すフラグ。次のフラグ <b><code>EV_TIMEOUT</code></b>、<b><code>EV_SIGNAL</code></b>、 <b><code>EV_READ</code></b>、<b><code>EV_WRITE</code></b> および <b><code>EV_PERSIST</code></b> から構成されています。</p><p>オプションのパラメータ。<code>event_set()</code> に <code>arg</code> で渡されたもの。</p>
	 * @param resource $event <p>有効なイベントリソース。</p>
	 * @param mixed $fd <p>有効な PHP ストリームリソース。ストリームはファイル記述子にキャスト可能でなければなりません。 そのため、フィルタしたストリームはおそらく使えないでしょう。</p>
	 * @param int $events <p>指定したイベントを表すフラグの組み合わせ。 <b><code>EV_READ</code></b> と <b><code>EV_WRITE</code></b> が使えます。追加のフラグ <b><code>EV_PERSIST</code></b> を指定すると、<code>event_del()</code> がコールされるまでイベントが持続します。 指定しなければ、コールバックは一度だけしか実行されません。</p>
	 * @param mixed $callback <p>イベントが発生したときにコールされるコールバック関数。</p>
	 * @param mixed $arg <p>コールバックに渡すオプションのパラメータ。</p>
	 * @return bool <p><code>event_set()</code> は成功した場合に <b><code>TRUE</code></b>、エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-set.php
	 * @since PECL libevent >= 0.0.1
	 */
	function event_set($event, $fd, int $events, $callback, $arg = NULL): bool {}

	/**
	 * のエイリアス event_add()
	 * <p>この関数は次の関数のエイリアスです。 <code>event_add()</code>.</p>
	 * @param float $timeout <p>Timeout in seconds.</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.event-timer-add.php
	 * @since PECL libevent >= 0.0.2
	 */
	function event_timer_add(float $timeout = NULL): bool {}

	/**
	 * のエイリアス event_del()
	 * <p>この関数は次の関数のエイリアスです。 <code>event_del()</code>.</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.event-timer-del.php
	 * @since PECL libevent >= 0.0.2
	 */
	function event_timer_del(): bool {}

	/**
	 * のエイリアス event_new()
	 * <p>この関数は次の関数のエイリアスです。 <code>event_new()</code>.</p>
	 * @return resource
	 * @link https://php.net/manual/ja/function.event-timer-new.php
	 * @since PECL libevent >= 0.0.2
	 */
	function event_timer_new() {}

	/**
	 * Prepare a timer event
	 * <p>Prepares the timer event to be used in <code>event_add()</code>. The event is prepared to call the function specified by the <code>callback</code> when the event timeout elapses.</p><p>After initializing the event, use <code>event_base_set()</code> to associate the event with its event base.</p><p>In case of matching event, these three arguments are passed to the <code>callback</code> function:</p><p>Signal number or resource indicating the stream.</p><p>A flag indicating the event. This will always be <b><code>EV_TIMEOUT</code></b> for timer events.</p><p>Optional parameter, previously passed to <b>event_timer_set()</b> as <code>arg</code>.</p>
	 * @param resource $event <p>Valid event resource.</p>
	 * @param callable $callback <p>Callback function to be called when the matching event occurs.</p>
	 * @param mixed $arg <p>Optional callback parameter.</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.event-timer-set.php
	 * @since PECL libevent >= 0.0.2
	 */
	function event_timer_set($event, callable $callback, $arg = NULL): bool {}

	define('EV_PERSIST', null);

	define('EV_READ', null);

	define('EV_SIGNAL', null);

	define('EV_TIMEOUT', null);

	define('EV_WRITE', null);

	define('EVLOOP_NONBLOCK', null);

	define('EVLOOP_ONCE', null);

}
