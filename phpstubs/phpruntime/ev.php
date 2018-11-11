<?php



/**
 * <p>Ev は静的クラスで、デフォルトのループへのアクセスや各種共通操作へのアクセスを提供します。</p>
 * @link http://php.net/manual/ja/class.ev.php
 * @since PECL ev >= 0.2.0
 */
final class Ev {

	/**
	 * @var integer <p>デフォルトのフラグの値。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const FLAG_AUTO = 0;

	/**
	 * @var integer <p>このフラグを使う (あるいは setuid や setgid でプログラムを実行する) と、 <i>libev</i> は環境変数 LIBEV_FLAGS を見ません。 それ以外の場合 (デフォルト) は、 LIBEV_FLAGS が見つかった場合は その内容でフラグを上書きします。パフォーマンステストやバグの調査のときに有用です。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const FLAG_NOENV = 16777216;

	/**
	 * @var integer <p>libev が繰り返しのたびにフォークをチェックするようにします。毎回手動で <code>EvLoop::fork()</code> を呼ぶことがなくなります。 これを実現するために、ループ内での繰り返しの旅に <i>getpid()</i> を呼んでいます。 そのため、繰り返しの回数が増えるとイベントループがスローダウンするかもしれませんが、 通常は気になるほどではありません。このフラグの設定を上書きしたり、 環境変数 LIBEV_FLAGS で指定したりすることはできません。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const FLAG_FORKCHECK = 33554432;

	/**
	 * @var integer <p>このフラグを指定すると、 <i>libev</i> は » ev_stat ウォッチャーに <i>inotify</i> API を使わなくなります。 このフラグは inotify ファイルディスクリプタを節約するのに便利です。 これを使わなければ、<i>ev_stat</i> ウォッチャーを使ったループのたびに <i>inotify</i> ハンドルをひとつずつ消費することになります。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const FLAG_NOINOTIFY = 1048576;

	/**
	 * @var integer <p>このフラグを指定すると、 <i>libev</i> は » ev_signal (および » ev_child ) ウォッチャーに <i>signalfd</i> API を使おうとします。 この API はシグナルを同期的に配送し、高速に処理したり キューに入ったシグナルデータを取得できるようにしたりします。 また、スレッドを使ったときのシグナル処理も、 スレッド内でシグナルが適切にブロックされている限りはシンプルになります。 デフォルトでは <i>signalfd</i> を使いません。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const FLAG_SIGNALFD = 2097152;

	/**
	 * @var integer <p>このフラグを指定すると、 <i>libev</i> はシグナルのマスクを変更しないようにします。 具体的には、シグナルが受信されるまではブロックしないようになるということです。</p> <p>これは、自前のシグナル処理をするときに便利です。 また、特定のスレッドでだけシグナルを処理するという場合にも有用です。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const FLAG_NOSIGMASK = 4194304;

	/**
	 * @var integer <p>イベントループが新しいイベントを探し、 新しいイベントや未処理のイベントを処理するけれども、 もしイベントが見つからない場合は、最初のループですぐに呼び出し元に制御を戻します。 イベントを待つためにプロセスをブロックしたりはしません。 これは、時間のかかる計算をしているときのポーリングなどに便利です。 プログラムの動きを止めることなく新しいイベントを処理できます。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const RUN_NOWAIT = 1;

	/**
	 * @var integer <p>イベントループが (必要なら待ち続けてでも) 新しいイベントを探し、 その新しいイベントや未処理のイベントを処理します。 少なくとも一つのイベントがやってくるまで (libev 自身のイベント間隔になるでしょう。 そのため、ユーザー低位のコールバックが呼ばれる保証はありません) プロセスをブロックし ループ処理の終了後に呼び出し元に制御を戻します。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const RUN_ONCE = 2;

	/**
	 * @var integer <p>ブレーク操作をキャンセルします。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const BREAK_CANCEL = 0;

	/**
	 * @var integer <p>一番内側の <code>Ev::run()</code> (あるいは <code>EvLoop::run()</code> ) の呼び出しを返します。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const BREAK_ONE = 1;

	/**
	 * @var integer <p>ネストしたすべての <code>Ev::run()</code> (あるいは <code>EvLoop::run()</code> ) の呼び出しを返します。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const BREAK_ALL = 2;

	/**
	 * @var integer <p>最小の優先度。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const MINPRI = -2;

	/**
	 * @var integer <p>最大の優先度。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const MAXPRI = 2;

	/**
	 * @var integer <p>EvIo ウォッチャーが読み込み可能になったときのファイルディスクリプタ。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const READ = 1;

	/**
	 * @var integer <p>EvIo ウォッチャーが書き込み可能になったときのファイルディスクリプタ。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const WRITE = 2;

	/**
	 * @var integer <p>EvTimer ウォッチャーがタイムアウトしました。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const TIMER = 256;

	/**
	 * @var integer <p>EvPeriodic ウォッチャーがタイムアウトしました。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const PERIODIC = 512;

	/**
	 * @var integer <p><code>EvSignal::__construct()</code> のコンストラクタで指定したシグナルを受信しました。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const SIGNAL = 1024;

	/**
	 * @var integer <p><code>EvChild::__construct()</code> のコンストラクタで指定した <code>pid</code> が、状態の変更を受信しました。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const CHILD = 2048;

	/**
	 * @var integer <p>EvStat ウォッチャーで指定したパスが、その属性を変更しました。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const STAT = 4096;

	/**
	 * @var integer <p>他のウォッチャーが何もすることがなくなったときに、 EvIdle ウォッチャーが動作します。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const IDLE = 8192;

	/**
	 * @var integer <p>すべての EvPrepare ウォッチャーが、 <code>Ev::run()</code> の開始前に起動しました。つまり、 イベントループがスリープしたり新しいイベントのポーリングをしたりする直前に EvPrepare ウォッチャーが起動するということになります。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const PREPARE = 16384;

	/**
	 * @var integer <p>すべての EvCheck ウォッチャーが、 <code>Ev::run()</code> が新しいイベントをとりまとめた直後 (ただし受信したイベントのコールバックをキューに入れる前) にキューに入ります。つまり、 イベントループ内で優先度が同じ (あるいはより低い) ウォッチャーより前に EvCheck ウォッチャーが起動するということになります。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const CHECK = 32768;

	/**
	 * @var integer <p>EvEmbed で指定した埋め込みイベントループが注目を必要としています。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const EMBED = 65536;

	/**
	 * @var integer <p>まだ <i>libev</i> で送信したりそれ以外の使いかたをしたりはしていませんが、 <i>libev</i> ユーザーが (<code>EvWatcher::feed()</code> などで) ウォッチャーに通知するために使えます。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const CUSTOM = 16777216;

	/**
	 * @var integer <p>指定されていないエラーが発生し、ウォッチャーが停止しました。 これが発生する原因として考えられるのは、 <i>libev</i> がメモリ不足でウォッチャーをきちんと開始できなかった場合や ファイルディスクリプタが閉じてしまった場合などがあります。 <i>libev</i> は、これらに関してはアプリケーションのバグとみなします。 詳細は » ANATOMY OF A WATCHER を参照ください。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const ERROR = 2147483648;

	/**
	 * @var integer <p><i>select(2) バックエンド</i></p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const BACKEND_SELECT = 1;

	/**
	 * @var integer <p><i>poll(2) バックエンド</i></p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const BACKEND_POLL = 2;

	/**
	 * @var integer <p>Linux 限定の <i>epoll(7)</i> バックエンド。2.6.9 以前のカーネルでもそれ以降のカーネルでも使えます。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const BACKEND_EPOLL = 4;

	/**
	 * @var integer <p><i>kqueue</i> バックエンド。大半の BSD システムで利用します。 EvEmbed ウォッチャーを使って、 kqueue バックエンドのループを別のループに埋め込むことができます。 たとえば、 <i>kqueue</i> バックエンドのループを作って、 それをソケットに対してだけ使うこともできます。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const BACKEND_KQUEUE = 8;

	/**
	 * @var integer <p>Solaris 8 バックエンド。現時点では未実装です。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const BACKEND_DEVPOLL = 16;

	/**
	 * @var integer <p>Solaris 10 のイベントポート機構で、規模が大きくなっても対応できます。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const BACKEND_PORT = 32;

	/**
	 * @var integer <p>壊れているものも含めて、すべてのバックエンドを試します。 これを明示的に使うことは推奨しません。ビット演算子を使って、 <b><code>Ev::BACKEND_ALL</code></b> &amp; ~ <b><code>Ev::BACKEND_KQUEUE</code></b> のようにするか、 <code>Ev::recommendedBackends()</code> を使うか、あるいは何もバックエンドを指定しないようにしましょう。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const BACKEND_ALL = 63;

	/**
	 * @var integer <p>これはバックエンドではなく、 <code>flags</code> の中のすべてのバックエンドビットをマスクするものです。 たとえば、環境変数 LIBEV_FLAGS を変更するときに使います。</p>
	 * @link http://php.net/manual/ja/class.ev.php
	 */
	const BACKEND_MASK = 65535;

	/**
	 * Constructs EvSignal watcher object
	 * <p>Constructs EvSignal watcher object and starts it automatically. For a stopped periodic watcher consider using <code>EvSignal::createStopped()</code> method.</p>
	 * @param int $signum <p>Signal number. See constants exported by <i>pcntl</i> extension. See also <i>signal(7)</i> man page.</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return self <p>Returns EvSignal object on success.</p>
	 * @link http://php.net/manual/ja/evsignal.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(int $signum, callable $callback, $data = NULL, int $priority = 0) {}

	/**
	 * libev が使うバックエンドを表す整数値を返す
	 * <p><i>libev</i> が使うバックエンドを表す整数値を返します。 バックエンドのフラグ も参照ください。</p>
	 * @return int <p><i>libev</i> が使うバックエンドを表す整数値 (ビットマスク) を返します。</p>
	 * @link http://php.net/manual/ja/ev.backend.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function backend(): int {}

	/**
	 * Returns or creates the default event loop
	 * <p>If the default event loop is not created, <b>EvLoop::defaultLoop()</b> creates it with the specified parameters. Otherwise, it just returns the object representing previously created instance ignoring all the parameters.</p>
	 * @param int $flags <p>One of the event loop flags</p>
	 * @param mixed $data <p>Custom data to associate with the loop.</p>
	 * @param float $io_interval
	 * @param float $timeout_interval
	 * @return EvLoop <p>Returns EvLoop object on success.</p>
	 * @link http://php.net/manual/ja/evloop.defaultloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public static function defaultLoop(int $flags = Ev::FLAG_AUTO, $data = NULL, float $io_interval = 0., float $timeout_interval = 0.): \EvLoop {}

	/**
	 * 再帰の深さを返す
	 * <p><code>Ev::run()</code> に入った回数から <code>Ev::run()</code> を正常終了した回数を引いた結果、 つまり、再帰の深さを返します。 <code>Ev::run()</code> の外部では、この数は <b><code>0</code></b> になります。 コールバックの中では、この数は <b><code>1</code></b> になります。ただし、<code>Ev::run()</code> が再帰的に呼び出されている (あるいは別スレッドから呼び出されている) 場合は、もっと大きな数になります。</p>
	 * @return int <p><b>ev_depth()</b> は、デフォルトのループの再帰の深さを返します。</p>
	 * @link http://php.net/manual/ja/ev.depth.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function depth(): int {}

	/**
	 * 他のイベントループに埋め込めるバックエンド群を返す
	 * <p>他のイベントループに埋め込めるバックエンド群を返します。</p>
	 * @return void <p>ビットマスクを返します。 バックエンドのフラグ を、ビット <i>OR</i> 演算子で組み合わせたものになります。</p>
	 * @link http://php.net/manual/ja/ev.embeddablebackends.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function embeddableBackends(): void {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * シグナルイベントを Ev に送る
	 * <p>シグナルの受信をシミュレートします。 この関数は、いつでもどんなコンテキストでも安全に呼べます。 シグナルハンドラやランダムスレッドからでもだいじょうぶです。 主に、プロセス内で自前のシグナル処理を行う場合に使います。</p><p><code>Ev::feedSignalEvent()</code> とは違い、どのループがシグナルを登録したのかにかかわらず動作します。</p>
	 * @param int $signum <p>シグナル番号。詳細は <i>signal(7)</i> の man ページを参照ください。 <i>pcntl</i> 拡張モジュールが公開する定数も使えます。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/ev.feedsignal.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function feedSignal(int $signum): void {}

	/**
	 * シグナルイベントの情報をデフォルトループに送る
	 * <p>シグナルイベントをデフォルトループに送ります。 Ev は、<code>signal</code> で指定したシグナルを受け取ったかのように反応します。</p>
	 * @param int $signum <p>シグナル番号。詳細は <i>signal(7)</i> の man ページを参照ください。 <i>pcntl</i> 拡張モジュールが公開する定数も使えます。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/ev.feedsignalevent.php
	 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
	 */
	final public static function feedSignalEvent(int $signum): void {}

	/**
	 * Creates EvFork watcher object associated with the current event loop instance
	 * <p>Creates EvFork watcher object associated with the current event loop instance</p>
	 * @param callable $callback
	 * @param mixed $data
	 * @param int $priority
	 * @return EvFork <p>Returns EvFork object on success.</p>
	 * @link http://php.net/manual/ja/evloop.fork.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function fork(callable $callback, $data = NULL, int $priority = 0): \EvFork {}

	/**
	 * デフォルトのイベントループが新しいイベントをポーリングした回数を返す
	 * <p>デフォルトのイベントループが新しいイベントをポーリングした回数を返します。 生成カウンターとして有用です。</p>
	 * @return int <p>デフォルトのイベントループのポーリング回数を返します。</p>
	 * @link http://php.net/manual/ja/ev.iteration.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function iteration(): int {}

	/**
	 * デフォルトのイベントループで直近の処理が始まった時刻を返す
	 * <p>デフォルトのイベントループで直近の処理が始まった時刻を返します。 これはタイマー (EvTimer および EvPeriodic) が基準にしているもので、 通常は <code>Ev::time()</code> を呼ぶよりも高速になります。</p>
	 * @return float <p>デフォルトのイベントループで直近の処理が始まった時刻を表す秒数を返します。</p>
	 * @link http://php.net/manual/ja/ev.now.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function now(): float {}

	/**
	 * カーネルに問い合わせて現在時刻を確認し、処理中の Ev::now が返す時刻を更新する
	 * <p>カーネルに問い合わせて現在時刻を確認し、処理中の <code>Ev::now()</code> が返す時刻を更新します。これはコストが高い操作で、通常は自動的に <code>Ev::run()</code> の中で実行します。</p><p>このメソッドが役立つ場面はほとんどありませんが、 たとえば何かのイベントコールバックがイベントループに入らず長時間処理を続けているときに、 <i>libev</i> が把握する現在時刻を更新するというのがその一つになります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/ev.nowupdate.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function nowUpdate(): void {}

	/**
	 * 現在のプラットフォーム上でおすすめのバックエンドのビットマスクを返す
	 * <p>この <i>libev</i> のバイナリに組み込まれたすべてのバックエンドと、 中でもこのプラットフォーム上でおすすめのバックエンドを返します。 おすすめとは、多くのファイルディスクリプタ形式に対応しているということです。 このバックエンド群は、<b>ev_supported_backends()</b> が返すものより少なくなることがよくあります。たとえば <i>kqueue</i> は大半の <i>BSD</i> システムでうまく動かず、 明示的にリクエストしない限り自動検出できないからです。 このメソッドが返すバックエンドはどれも、明示的に指定しなくても <i>libev</i> で使えます。</p>
	 * @return void <p>ビットマスクを返します。 バックエンドのフラグ を、ビット <i>OR</i> 演算子で組み合わせたものになります。</p>
	 * @link http://php.net/manual/ja/ev.recommendedbackends.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function recommendedBackends(): void {}

	/**
	 * 一時停止していたデフォルトのイベントループを再開させる
	 * <p><code>Ev::suspend()</code> と <b>Ev::resume()</b> が、それぞれループの一時停止と再開に対応します。</p><p>すべてのタイマーウォッチャーは、 <i>suspend</i> から <i>resume</i> までの時間だけ遅延します。また、すべての定期ウォッチャーは再スケジュールされます (つまり、一時停止中に発生したイベントは失うことになります)。</p><p><code>Ev::suspend()</code> を呼んだ後は、 そのループ上では <b>Ev::resume()</b> 以外の関数を呼べません。 また、先に <code>Ev::suspend()</code> を呼んでいない状態で <b>Ev::resume()</b> は呼べません。</p><p><i>suspend</i> や <i>resume</i> を呼ぶと、 イベントループの時刻を更新するという副作用があります (<code>Ev::nowUpdate()</code> を参照ください)。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/ev.resume.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function resume(): void {}

	/**
	 * イベントのチェックとデフォルトループのコールバックの呼び出しを開始する
	 * <p>イベントのチェックとデフォルトループのコールバックの呼び出しを開始します。 コールバックが <code>Ev::stop()</code> メソッドを読んだとき、 あるいは flags がゼロ以外のとき (この場合の返り値は true) に結果を返します。あるいは、ループを参照するアクティブなウォッチャーがないとき (<code>EvWatcher::keepalive()</code> が <b><code>TRUE</code></b>) のときにも結果を返し、このときに返す値は <b><code>FALSE</code></b> になります。 戻り値の解釈は、一般的に、 <i>もし <b><code>TRUE</code></b> ならまだ作業が残っている</i> となります。</p>
	 * @param int $flags <p>オプションのパラメータで、以下のいずれかになります。</p> <b> <code>flags</code> に指定できる値の一覧 </b>    <code>flags</code>  説明      <b><code>0</code></b>  上で述べたデフォルトの挙動。    <b><code>Ev::RUN_ONCE</code></b>  最大 1 件ブロックします (待つけれども繰り返しません)。    <b><code>Ev::RUN_NOWAIT</code></b>  まったくブロックしません (イベントを取得して処理しますが、待ちません)。    <p>実行フラグ定数 も参照ください。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/ev.run.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function run(int $flags = NULL): void {}

	/**
	 * 指定した秒数だけプロセスをブロックする
	 * <p>指定した秒数だけプロセスをブロックします。</p>
	 * @param float $seconds <p>秒数。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/ev.sleep.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function sleep(float $seconds): void {}

	/**
	 * デフォルトのイベントループを止める
	 * <p>デフォルトのイベントループを止めます。</p>
	 * @param int $how <p><i>Ev::BREAK_&#42;</i> 定数 のいずれか。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/ev.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function stop(int $how = NULL): void {}

	/**
	 * 現在の libev の構成でサポートするバックエンド群を返す
	 * <p>現在の libev の構成でサポートするバックエンド群を返します。</p>
	 * @return void <p>ビットマスクを返します。 バックエンドのフラグ を、ビット <i>OR</i> 演算子で組み合わせたものになります。</p>
	 * @link http://php.net/manual/ja/ev.supportedbackends.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function supportedBackends(): void {}

	/**
	 * デフォルトのイベントループを一時停止する
	 * <p><b>Ev::suspend()</b> と <code>Ev::resume()</code> が、それぞれループの一時停止と再開に対応します。</p><p>すべてのタイマーウォッチャーは、 <i>suspend</i> から <i>resume</i> までの時間だけ遅延します。また、すべての定期ウォッチャーは再スケジュールされます (つまり、一時停止中に発生したイベントは失うことになります)。</p><p><b>Ev::suspend()</b> を呼んだ後は、 そのループ上では <code>Ev::resume()</code> 以外の関数を呼べません。 また、先に <b>Ev::suspend()</b> を呼んでいない状態で <code>Ev::resume()</code> は呼べません。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/ev.suspend.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function suspend(): void {}

	/**
	 * epoch から現在時刻までの秒数を返す
	 * <p>epoch から現在時刻までの秒数を返します。 <code>Ev::now()</code> を使うことを検討しましょう。</p>
	 * @return float <p>epoch から現在時刻までの秒数を返します。</p>
	 * @link http://php.net/manual/ja/ev.time.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function time(): float {}

	/**
	 * 内部の整合性をチェックする (デバッグ用)
	 * <p>内部の整合性をチェック (<i>libev</i> のデバッグ用) し、もしデータ構造が壊れている場合はプログラムを終了させます。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/ev.verify.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function verify(): void {}
}

/**
 * <p>EvPrepare ウォッチャーと <b>EvCheck</b> ウォッチャーは、 通常はペアで使います。 EvPrepare ウォッチャーはプロセスをブロックする前に起動し、 <b>EvCheck</b> はブロックした後に起動します。</p>
 * <p><code>EvLoop::run()</code> あるいはそれに類するメソッドや関数 (現在のイベントループに入るもの) は、EvPrepare ウォッチャーや <b>EvCheck</b> ウォッチャーからは呼べません。 現在のループ以外のループは問題ありません。 その理由は、これらのウォッチャーの中では再帰をチェックする必要がないからです。 つまり、処理の流れは常に EvPrepare -&gt; ブロック -&gt; <b>EvCheck</b> となるので、これらのウォッチャーは常にペアで呼ばれ、ブロッキング呼び出しの前後を囲むことになります。</p>
 * <p>主な利用目的は他のイベント機構を <i>libev</i> に統合することで、 少し高度な使いかたになります。変数の変更を追跡したり 自前のウォッチャーを実装したり、net-snmp やコルーチンライブラリを統合したりといった、 さまざまな用途で使えます。 また、何らかのデータをキャッシュしてブロッキングの前にフラッシュするなどの用途で使えることもあります。</p>
 * <p><b>EvCheck</b> には最高の優先度 (<b><code>Ev::MAXPRI</code></b>) を与えることを推奨します。 これで、ポーリングの後は他のあらゆるウォッチャーよりも先に実行されることが保証されます (EvPrepare ウォッチャーの場合は無鐘鋳です)。</p>
 * <p>また、<b>EvCheck</b> ウォッチャーはイベントをアクティブにしたり送信したりしてはいけません。 <i>libev</i> では対応してはいますが、 他の <b>EvCheck</b> ウォッチャーが仕事をする前に実行される可能性があります。</p>
 * @link http://php.net/manual/ja/class.evcheck.php
 * @since PECL ev >= 0.2.0
 */
class EvCheck extends \EvWatcher {

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-active
	 */
	public $is_active;

	/**
	 * @var mixed <p>User custom data associated with the watcher</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-pending
	 */
	public $is_pending;

	/**
	 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.priority
	 */
	public $priority;

	/**
	 * EvCheck ウォッチャーオブジェクトを作る
	 * <p>EvCheck ウォッチャーオブジェクトを作ります。</p>
	 * @param callable $callback <p>ウォッチャーのコールバック を参照ください。</p>
	 * @param mixed $data <p>このウォッチャーに関連づけるカスタムデータ。</p>
	 * @param int $priority <p>ウォッチャーの優先度。</p>
	 * @return self <p>成功した場合に EvCheck オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/evcheck.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(callable $callback, $data = NULL, int $priority = NULL) {}

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * 停止した EvCheck ウォッチャーのインスタンスを作る
	 * <p>停止した EvCheck ウォッチャーのインスタンスを作ります。</p>
	 * @param string $callback <p>ウォッチャーのコールバック を参照ください。</p>
	 * @param string $data <p>このウォッチャーに関連づけるカスタムデータ。</p>
	 * @param string $priority <p>ウォッチャーの優先度。</p>
	 * @return object <p>成功した場合に EvCheck オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/evcheck.createstopped.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function createStopped(string $callback, string $data = NULL, string $priority = NULL): object {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * Begin checking for events and calling callbacks for the loop
	 * <p>Begin checking for events and calling callbacks for the current event loop. Returns when a callback calls <code>Ev::stop()</code> method, or the flags are nonzero(in which case the return value is true) or when there are no active watchers which reference the loop( <code>EvWatcher::keepalive()</code> is <b><code>TRUE</code></b>), in which case the return value will be <b><code>FALSE</code></b>. The return value can generally be interpreted as <i>if <b><code>TRUE</code></b>, there is more work left to do</i> .</p>
	 * @param int $flags <p>Optional parameter <code>flags</code> can be one of the following:</p> <b> List for possible values of <code>flags</code> </b>    <code>flags</code>  Description      <b><code>0</code></b>  The default behavior described above    <b><code>Ev::RUN_ONCE</code></b>  Block at most one(wait, but don't loop)    <b><code>Ev::RUN_NOWAIT</code></b>  Don't block at all(fetch/handle events, but don't wait)    <p>See the run flag constants .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.run.php
	 * @since PECL ev >= 0.2.0
	 */
	public function run(int $flags = 0): void {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}
}

/**
 * <p><b>EvChild</b> ウォッチャーは、子プロセスの状態の変更 (たいていは、停止したり終了したりといったもの) に反応してこのプロセスが <b><code>SIGCHLD</code></b> を受け取ったときに起動します。 <b><code>EvChild</code></b> ウォッチャーは、子をフォークした後 (おそらくはすでに終了した後) でインストールしてもかまいません。 ただし、まだイベントループに入っていないとき (あるいはウォッチャーから引き続いているとき) に限ります。 つまり、フォークした直後に子プロセス用のウォッチャーを登録するのはかまいませんが、 フォークした後でイベントループを何回か処理した後で登録したり、次のコールバックの実行時に登録したりすることはできません。</p>
 * <p><b>EvChild</b> ウォッチャーは、 <i>デフォルトループ</i> の中でだけ登録できます。</p>
 * @link http://php.net/manual/ja/class.evchild.php
 * @since PECL ev >= 0.2.0
 */
class EvChild extends \EvWatcher {

	/**
	 * @var mixed <p><i>読み込み専用</i>。 このウォッチャーが注目するプロセス ID。<b><code>0</code></b> の場合はあらゆるプロセス ID を表します。</p>
	 * @link http://php.net/manual/ja/class.evchild.php#evchild.props.pid
	 */
	public $pid;

	/**
	 * @var mixed <p><i>読み込み専用</i>。 状態の変更を検出するプロセスの ID。</p>
	 * @link http://php.net/manual/ja/class.evchild.php#evchild.props.rpid
	 */
	public $rpid;

	/**
	 * @var mixed <p><i>読み込み専用</i>。 rpid のプロセス終了ステータス。</p>
	 * @link http://php.net/manual/ja/class.evchild.php#evchild.props.rstatus
	 */
	public $rstatus;

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-active
	 */
	public $is_active;

	/**
	 * @var mixed <p>User custom data associated with the watcher</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-pending
	 */
	public $is_pending;

	/**
	 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.priority
	 */
	public $priority;

	/**
	 * EvChild ウォッチャーオブジェクトを作る
	 * <p>EvChild ウォッチャーオブジェクトを作ります。</p><p>プロセス ID <code>pid</code> (<code>pid</code> is <b><code>0</code></b> の場合は任意の <i>PID</i>) の状態の変更を受信したときに、コールバックを呼びます (状態が変わるのは、プロセスが停止したり強制終了させられたり、 <code>trace</code> が <b><code>TRUE</code></b> になったり、さらにプロセスを一時停止したり再開したりしたときです)。 言い換えると、あるプロセスが <b><code>SIGCHLD</code></b> を受信したときに、 <i>Ev</i> はすべての変更された子プロセスやゾンビ子プロセスの exit/wait 状態を取得してコールバックを呼びます。</p><p>EvChild が終了してから child ウォッチャーをインストールしてもかまいませんが、 イベントループが次のイテレーションを始める前でないといけません。 たとえば、最初のプロセスが <i>fork</i> した後で新しい子プロセスが終了するかもしれません。 そのときは、新しい <i>PID</i> の親にだけ EvChild ウォッチャーをインストールできます。</p><p>exit/tracing ステータスや <code>pid</code> にアクセスするには、 ウォッチャーオブジェクトのプロパティ rstatus および rpid を使います。</p><p>一つの <i>PID</i> に対する <i>PID</i> ウォッチャーの数は無制限で、すべてが呼び出されます。</p><p><code>EvChild::createStopped()</code> メソッドは、新しく作ったウォッチャーを開始させません。</p>
	 * @param int $pid <p>状態の変更を待つプロセスの PID (<b><code>0</code></b> にすると、すべてのプロセスを対象にします)。</p>
	 * @param bool $trace <p><b><code>FALSE</code></b> にすると、プロセスが終了したときにだけウォッチャーをアクティブにします。 <b><code>TRUE</code></b> の場合は、プロセスが一時停止したり再開したりしたときにもウォッチャーをアクティブにします。</p>
	 * @param callable $callback <p>ウォッチャーのコールバック を参照ください。</p>
	 * @param mixed $data <p>このウォッチャーに関連づけるカスタムデータ。</p>
	 * @param int $priority <p>ウォッチャーの優先度。</p>
	 * @return self <p>成功した場合に EvChild オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/evchild.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(int $pid, bool $trace, callable $callback, $data = NULL, int $priority = 0) {}

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * 停止した EvChild ウォッチャーのインスタンスを作る
	 * <p><code>EvChild::__construct()</code> と同じですが、ウォッチャーを自動的には開始しません。</p>
	 * @param int $pid <p><code>EvChild::__construct()</code> と同じ。</p>
	 * @param bool $trace <p><code>EvChild::__construct()</code> と同じ。</p>
	 * @param callable $callback <p>ウォッチャーのコールバック を参照ください。</p>
	 * @param mixed $data <p>このウォッチャーに関連づけるカスタムデータ。</p>
	 * @param int $priority <p>ウォッチャーの優先度。</p>
	 * @return object
	 * @link http://php.net/manual/ja/evchild.createstopped.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function createStopped(int $pid, bool $trace, callable $callback, $data = NULL, int $priority = NULL): object {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * ウォッチャーを設定する
	 * @param int $pid <p><code>EvChild::__construct()</code> と同じ。</p>
	 * @param bool $trace <p><code>EvChild::__construct()</code> と同じ。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evchild.set.php
	 * @since PECL ev >= 0.2.0
	 */
	public function set(int $pid, bool $trace): void {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}
}

/**
 * <p>イベントループを別のイベントループに埋め込むために使います。</p>
 * @link http://php.net/manual/ja/class.evembed.php
 * @since PECL ev >= 0.2.0
 */
class EvEmbed extends \EvWatcher {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.evembed.php#evembed.props.embed
	 */
	public $embed;

	/**
	 * EvEmbed オブジェクトを作る
	 * <p>これは高度なウォッチャー型で、あるイベントループを別のイベントループに埋め込むことができます。 現在は、埋め込みループに対応しているのは IO イベントだけです。 他の型のウォッチャーを使うと、処理が遅延したり不正確な動きになったりする可能性があるので、 使ってはいけません。</p><p>詳細は、 »  libev のドキュメント を参照ください。</p><p>このウォッチャーは、<i>BSD</i> システムで <i>kqueue</i> が使えないときにも大量のソケットを処理できるようにするのに便利です。 以下の例を参照ください。</p>
	 * @param object $other <p>EvLoop のインスタンス。 埋め込むループです。これは埋め込み可能なものでなければいけません (<code>Ev::embeddableBackends()</code> を参照ください)。</p>
	 * @param callable $callback <p>ウォッチャーのコールバック を参照ください。</p>
	 * @param mixed $data <p>このウォッチャーに関連づけるカスタムデータ。</p>
	 * @param int $priority <p>ウォッチャーの優先度。</p>
	 * @return self <p>成功した場合に EvEmbed オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/evembed.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(object $other, callable $callback = NULL, $data = NULL, int $priority = NULL) {}

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * 停止した EvEmbed ウォッチャーのインスタンスを作る
	 * <p><code>EvEmbed::__construct()</code> と同じですが、ウォッチャーを自動的には開始しません。</p>
	 * @param object $other <p><code>EvEmbed::__construct()</code> と同じ。</p>
	 * @param callable $callback <p>ウォッチャーのコールバック を参照ください。</p>
	 * @param mixed $data <p>このウォッチャーに関連づけるカスタムデータ。</p>
	 * @param int $priority <p>ウォッチャーの優先度。</p>
	 * @return void <p>成功した場合に、停止した EvEmbed オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/evembed.createstopped.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function createStopped(object $other, callable $callback = NULL, $data = NULL, int $priority = NULL): void {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * ウォッチャーを設定する
	 * <p>ウォッチャーを設定して、 <code>他の</code> イベントループオブジェクトで使えるようにします。</p>
	 * @param object $other <p><code>EvEmbed::__construct()</code> と同じ。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evembed.set.php
	 * @since PECL ev >= 0.2.0
	 */
	public function set(object $other): void {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}

	/**
	 * 埋め込んだループに対して単一の非ブロックスイープを行う
	 * <p>埋め込んだループに対して単一の非ブロックスイープを行います。 次のコードとほぼ同じ動きですが、埋め込んだループ用に最適な方法をとります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evembed.sweep.php
	 * @since PECL ev >= 0.2.0
	 */
	public function sweep(): void {}
}

/**
 * <p>Fork ウォッチャーが呼ばれるのは、<i>fork()</i> を検出したときです (通常は、誰かが <code>EvLoop::fork()</code> を呼んで <i>libev</i> に通知します)。 起動するのは、イベントループが次の処理をブロックする前、 そして EvCheck ウォッチャーが呼ばれる前になります。 また、フォークした後の子プロセス内でだけ起動します。 誰かが間違ったプロセスで <code>EvLoop::fork()</code> を呼んだとしても、fork ハンドラが起動してしまうことに注意しましょう。</p>
 * @link http://php.net/manual/ja/class.evfork.php
 * @since PECL ev >= 0.2.0
 */
class EvFork extends \EvWatcher {

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-active
	 */
	public $is_active;

	/**
	 * @var mixed <p>User custom data associated with the watcher</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-pending
	 */
	public $is_pending;

	/**
	 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.priority
	 */
	public $priority;

	/**
	 * EvFork ウォッチャーオブジェクトを作る
	 * <p>EvFork ウォッチャーオブジェクトを作り、自動的に開始させます。</p>
	 * @param callable $callback <p>ウォッチャーのコールバック を参照ください。</p>
	 * @param mixed $data <p>このウォッチャーに関連づけるカスタムデータ。</p>
	 * @param int $priority <p>ウォッチャーの優先度。</p>
	 * @return self <p>成功した場合に EvFork オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/evfork.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(callable $callback, $data = NULL, int $priority = 0) {}

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * 停止した EvFork ウォッチャーのインスタンスを作る
	 * <p><code>EvFork::__construct()</code> と同じですが、ウォッチャーを自動的には開始しません。</p>
	 * @param string $callback <p>ウォッチャーのコールバック を参照ください。</p>
	 * @param string $data <p>このウォッチャーに関連づけるカスタムデータ。</p>
	 * @param string $priority <p>ウォッチャーの優先度。</p>
	 * @return object <p>成功した場合に、停止した EvFork オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/evfork.createstopped.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function createStopped(string $callback, string $data = NULL, string $priority = NULL): object {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Creates EvFork watcher object associated with the current event loop instance
	 * <p>Creates EvFork watcher object associated with the current event loop instance</p>
	 * @param callable $callback
	 * @param mixed $data
	 * @param int $priority
	 * @return EvFork <p>Returns EvFork object on success.</p>
	 * @link http://php.net/manual/ja/evloop.fork.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function fork(callable $callback, $data = NULL, int $priority = 0): \EvFork {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}
}

/**
 * <p><b>EvIdle</b> watchers trigger events when no other events of the same or higher priority are pending ( EvPrepare , EvCheck and other <b>EvIdle</b> watchers do not count as receiving <i>events</i> ).</p>
 * <p>Thus, as long as the process is busy handling sockets or timeouts(or even signals) of the same or higher priority it will not be triggered. But when the process is in idle(or only lower-priority watchers are pending), the <b>EvIdle</b> watchers are being called once per event loop iteration - until stopped, that is, or the process receives more events and becomes busy again with higher priority stuff.</p>
 * <p>Apart from keeping the process non-blocking(which is a useful on its own sometimes), <b>EvIdle</b> watchers are a good place to do <i>"pseudo-background processing"</i> , or delay processing stuff to after the event loop has handled all outstanding events.</p>
 * <p>The most noticeable effect is that as long as any <i>idle</i> watchers are active, the process will <i>not</i> block when waiting for new events.</p>
 * @link http://php.net/manual/ja/class.evidle.php
 * @since PECL ev >= 0.2.0
 */
class EvIdle extends \EvWatcher {

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-active
	 */
	public $is_active;

	/**
	 * @var mixed <p>User custom data associated with the watcher</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-pending
	 */
	public $is_pending;

	/**
	 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.priority
	 */
	public $priority;

	/**
	 * Constructs the EvIdle watcher object
	 * <p>Constructs the EvIdle watcher object and starts the watcher automatically.</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return self <p>Returns EvIdle object on success.</p>
	 * @link http://php.net/manual/ja/evidle.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(callable $callback, $data = NULL, int $priority = NULL) {}

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * Creates instance of a stopped EvIdle watcher object
	 * <p>The same as <code>EvIdle::__construct()</code> , but doesn't start the watcher automatically.</p>
	 * @param string $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return object <p>Returns EvIdle object on success.</p>
	 * @link http://php.net/manual/ja/evidle.createstopped.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function createStopped(string $callback, $data = NULL, int $priority = NULL): object {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}
}

/**
 * <p><b>EvIo</b> watchers check whether a file descriptor(or socket, or a stream castable to numeric file descriptor) is readable or writable in each iteration of the event loop, or, more precisely, when reading would not block the process and writing would at least be able to write some data. This behaviour is called <i>level-triggering</i> because events are kept receiving as long as the condition persists. To stop receiving events just stop the watcher.</p>
 * <p>The number of read and/or write event watchers per <code>fd</code> is unlimited. Setting all file descriptors to non-blocking mode is also usually a good idea(but not required).</p>
 * <p>Another thing to watch out for is that it is quite easy to receive false readiness notifications, i.e. the callback might be called with <b><code>Ev::READ</code></b> but a subsequent <i>read()</i> will actually block because there is no data. It is very easy to get into this situation. Thus it is best to always use non-blocking I/O: An extra <i>read()</i> returning <b><code>EAGAIN</code></b> (or similar) is far preferable to a program hanging until some data arrives.</p>
 * <p>If for some reason it is impossible to run the <code>fd</code> in non-blocking mode, then separately re-test whether a file descriptor is really ready. Some people additionally use <b><code>SIGALRM</code></b> and an interval timer, just to be sure thry won't block infinitely.</p>
 * <p>Always consider using non-blocking mode.</p>
 * @link http://php.net/manual/ja/class.evio.php
 * @since PECL ev >= 0.2.0
 */
class EvIo extends \EvWatcher {

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.evio.php#evio.props.fd
	 */
	public $fd;

	/**
	 * @var mixed
	 * @link http://php.net/manual/ja/class.evio.php#evio.props.events
	 */
	public $events;

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-active
	 */
	public $is_active;

	/**
	 * @var mixed <p>User custom data associated with the watcher</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-pending
	 */
	public $is_pending;

	/**
	 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.priority
	 */
	public $priority;

	/**
	 * Constructs EvIo watcher object
	 * <p>Constructs EvIo watcher object and starts the watcher automatically.</p>
	 * @param mixed $fd <p>Can be a stream opened with <code>fopen()</code> or similar functions, numeric file descriptor, or socket.</p>
	 * @param int $events <p><b><code>Ev::READ</code></b> and/or <b><code>Ev::WRITE</code></b> . See the bit masks .</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return self <p>Returns EvIo object on success.</p>
	 * @link http://php.net/manual/ja/evio.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct($fd, int $events, callable $callback, $data = NULL, int $priority = NULL) {}

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * Create stopped EvIo watcher object
	 * <p>The same as <code>EvIo::__construct()</code> , but doesn't start the watcher automatically.</p>
	 * @param mixed $fd <p>The same as for <code>EvIo::__construct()</code></p>
	 * @param int $events <p>The same as for <code>EvIo::__construct()</code></p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return EvIo <p>Returns EvIo object on success.</p>
	 * @link http://php.net/manual/ja/evio.createstopped.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function createStopped($fd, int $events, callable $callback, $data = NULL, int $priority = 0): \EvIo {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * Configures the watcher
	 * <p>Configures the EvIo watcher</p>
	 * @param mixed $fd <p>The same as for <code>EvIo::__construct()</code></p>
	 * @param int $events <p>The same as for <code>EvIo::__construct()</code></p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evio.set.php
	 * @since PECL ev >= 0.2.0
	 */
	public function set($fd, int $events): void {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}
}

/**
 * <p>Represents an event loop that is always distinct from the <i>default loop</i> . Unlike the <i>default loop</i> , it cannot handle EvChild watchers.</p>
 * <p>Having threads we have to create a loop per thread, and use the <i>default loop</i> in the parent thread.</p>
 * <p>The <i>default event loop</i> is initialized automatically by <i>Ev</i> . It is accessible via methods of the Ev class, or via <code>EvLoop::defaultLoop()</code> method.</p>
 * @link http://php.net/manual/ja/class.evloop.php
 * @since PECL ev >= 0.2.0
 */
final class EvLoop {

	/**
	 * @var mixed <p>Custom data attached to loop</p>
	 * @link http://php.net/manual/ja/class.evloop.php#evloop.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> . The backend flags indicating the event backend in use.</p>
	 * @link http://php.net/manual/ja/class.evloop.php#evloop.props.backend
	 */
	public $backend;

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if it is the default event loop.</p>
	 * @link http://php.net/manual/ja/class.evloop.php#evloop.props.is-default-loop
	 */
	public $is_default_loop;

	/**
	 * @var mixed <p>The current iteration count of the loop. See <code>Ev::iteration()</code></p>
	 * @link http://php.net/manual/ja/class.evloop.php#evloop.props.iteration
	 */
	public $iteration;

	/**
	 * @var mixed <p>The number of pending watchers. <b><code>0</code></b> indicates that there are no watchers pending.</p>
	 * @link http://php.net/manual/ja/class.evloop.php#evloop.props.pending
	 */
	public $pending;

	/**
	 * @var mixed <p>Higher io_interval allows <i>libev</i> to spend more time collecting EvIo events, so more events can be handled per iteration, at the cost of increasing latency. Timeouts (both EvPeriodic and EvTimer ) will not be affected. Setting this to a non-zero value will introduce an additional <i>sleep()</i> call into most loop iterations. The sleep time ensures that <i>libev</i> will not poll for EvIo events more often than once per this interval, on average. Many programs can usually benefit by setting the io_interval to a value near <b><code>0.1</code></b> , which is often enough for interactive servers(not for games). It usually doesn't make much sense to set it to a lower value than <b><code>0.01</code></b> , as this approaches the timing granularity of most systems.</p> <p>See also » FUNCTIONS CONTROLLING EVENT LOOPS .</p>
	 * @link http://php.net/manual/ja/class.evloop.php#evloop.props.io-interval
	 */
	public $io_interval;

	/**
	 * @var mixed <p>Higher timeout_interval allows <i>libev</i> to spend more time collecting timeouts, at the expense of increased latency/jitter/inexactness(the watcher callback will be called later). EvIo watchers will not be affected. Setting this to a non-null value will not introduce any overhead in <i>libev</i> . See also » FUNCTIONS CONTROLLING EVENT LOOPS .</p>
	 * @link http://php.net/manual/ja/class.evloop.php#evloop.props.timeout-interval
	 */
	public $timeout_interval;

	/**
	 * @var mixed <p>The recursion depth. See <code>Ev::depth()</code> .</p>
	 * @link http://php.net/manual/ja/class.evloop.php#evloop.props.depth
	 */
	public $depth;

	/**
	 * Constructs the event loop object
	 * <p>Constructs the event loop object.</p>
	 * @param int $flags <p>One of the event loop flags</p>
	 * @param mixed $data <p>Custom data associated with the loop.</p>
	 * @param float $io_interval <p>See io_interval</p>
	 * @param float $timeout_interval <p>See timeout_interval</p>
	 * @return self <p>Returns new EvLoop object.</p>
	 * @link http://php.net/manual/ja/evloop.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(int $flags = NULL, $data = NULL, float $io_interval = 0.0, float $timeout_interval = 0.0) {}

	/**
	 * Returns an integer describing the backend used by libev
	 * <p>The same as <code>Ev::backend()</code> , but for the loop instance.</p>
	 * @return int <p>Returns an integer describing the backend used by libev. See <code>Ev::backend()</code> .</p>
	 * @link http://php.net/manual/ja/evloop.backend.php
	 * @since PECL ev >= 0.2.0
	 */
	public function backend(): int {}

	/**
	 * Creates EvCheck object associated with the current event loop instance
	 * <p>Creates EvCheck object associated with the current event loop instance.</p>
	 * @param string $callback
	 * @param string $data
	 * @param string $priority
	 * @return EvCheck <p>Returns EvCheck object on success.</p>
	 * @link http://php.net/manual/ja/evloop.check.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function check(string $callback, string $data = NULL, string $priority = NULL): \EvCheck {}

	/**
	 * Creates EvChild object associated with the current event loop
	 * <p>Creates EvChild object associated with the current event loop.</p>
	 * @param string $pid
	 * @param string $trace
	 * @param string $callback
	 * @param string $data
	 * @param string $priority
	 * @return EvChild <p>Returns EvChild object on success.</p>
	 * @link http://php.net/manual/ja/evloop.child.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function child(string $pid, string $trace, string $callback, string $data = NULL, string $priority = NULL): \EvChild {}

	/**
	 * Returns or creates the default event loop
	 * <p>If the default event loop is not created, <b>EvLoop::defaultLoop()</b> creates it with the specified parameters. Otherwise, it just returns the object representing previously created instance ignoring all the parameters.</p>
	 * @param int $flags <p>One of the event loop flags</p>
	 * @param mixed $data <p>Custom data to associate with the loop.</p>
	 * @param float $io_interval
	 * @param float $timeout_interval
	 * @return EvLoop <p>Returns EvLoop object on success.</p>
	 * @link http://php.net/manual/ja/evloop.defaultloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public static function defaultLoop(int $flags = Ev::FLAG_AUTO, $data = NULL, float $io_interval = 0., float $timeout_interval = 0.): \EvLoop {}

	/**
	 * 再帰の深さを返す
	 * <p><code>Ev::run()</code> に入った回数から <code>Ev::run()</code> を正常終了した回数を引いた結果、 つまり、再帰の深さを返します。 <code>Ev::run()</code> の外部では、この数は <b><code>0</code></b> になります。 コールバックの中では、この数は <b><code>1</code></b> になります。ただし、<code>Ev::run()</code> が再帰的に呼び出されている (あるいは別スレッドから呼び出されている) 場合は、もっと大きな数になります。</p>
	 * @return int <p><b>ev_depth()</b> は、デフォルトのループの再帰の深さを返します。</p>
	 * @link http://php.net/manual/ja/ev.depth.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function depth(): int {}

	/**
	 * Creates an instance of EvEmbed watcher associated with the current EvLoop object
	 * <p>Creates an instance of EvEmbed watcher associated with the current EvLoop object.</p>
	 * @param string $other
	 * @param string $callback
	 * @param string $data
	 * @param string $priority
	 * @return EvEmbed <p>Returns EvEmbed object on success.</p>
	 * @link http://php.net/manual/ja/evloop.embed.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function embed(string $other, string $callback = NULL, string $data = NULL, string $priority = NULL): \EvEmbed {}

	/**
	 * Creates EvFork watcher object associated with the current event loop instance
	 * <p>Creates EvFork watcher object associated with the current event loop instance</p>
	 * @param callable $callback
	 * @param mixed $data
	 * @param int $priority
	 * @return EvFork <p>Returns EvFork object on success.</p>
	 * @link http://php.net/manual/ja/evloop.fork.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function fork(callable $callback, $data = NULL, int $priority = 0): \EvFork {}

	/**
	 * Creates EvIdle watcher object associated with the current event loop instance
	 * <p>Creates EvIdle watcher object associated with the current event loop instance</p>
	 * @param callable $callback
	 * @param mixed $data
	 * @param int $priority
	 * @return EvIdle <p>Returns EvIdle object on success.</p>
	 * @link http://php.net/manual/ja/evloop.idle.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function idle(callable $callback, $data = NULL, int $priority = 0): \EvIdle {}

	/**
	 * Invoke all pending watchers while resetting their pending state
	 * <p>Invoke all pending watchers while resetting their pending state.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.invokepending.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invokePending(): void {}

	/**
	 * Create EvIo watcher object associated with the current event loop instance
	 * <p>Create EvIo watcher object associated with the current event loop instance.</p>
	 * @param mixed $fd
	 * @param int $events
	 * @param callable $callback
	 * @param mixed $data
	 * @param int $priority
	 * @return EvIo <p>Returns EvIo object on success.</p>
	 * @link http://php.net/manual/ja/evloop.io.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function io($fd, int $events, callable $callback, $data = NULL, int $priority = 0): \EvIo {}

	/**
	 * デフォルトのイベントループが新しいイベントをポーリングした回数を返す
	 * <p>デフォルトのイベントループが新しいイベントをポーリングした回数を返します。 生成カウンターとして有用です。</p>
	 * @return int <p>デフォルトのイベントループのポーリング回数を返します。</p>
	 * @link http://php.net/manual/ja/ev.iteration.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function iteration(): int {}

	/**
	 * Must be called after a fork
	 * <p>Must be called after a <i>fork</i> in the child, before entering or continuing the event loop. An alternative is to use <b><code>Ev::FLAG_FORKCHECK</code></b> which calls this function automatically, at some performance loss (refer to the » libev documentation ).</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.loopfork.php
	 * @since PECL ev >= 0.2.0
	 */
	public function loopFork(): void {}

	/**
	 * Returns the current "event loop time"
	 * <p>Returns the current "event loop time", which is the time the event loop received events and started processing them. This timestamp does not change as long as callbacks are being processed, and this is also the base time used for relative timers. You can treat it as the timestamp of the event occurring(or more correctly, libev finding out about it).</p>
	 * @return float <p>Returns time of the event loop in (fractional) seconds.</p>
	 * @link http://php.net/manual/ja/evloop.now.php
	 * @since PECL ev >= 0.2.0
	 */
	public function now(): float {}

	/**
	 * Establishes the current time by querying the kernel, updating the time returned by EvLoop::now in the progress
	 * <p>Establishes the current time by querying the kernel, updating the time returned by <code>EvLoop::now()</code> in the progress. This is a costly operation and is usually done automatically within <code>EvLoop::run()</code> .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.nowupdate.php
	 * @since PECL ev >= 0.2.0
	 */
	public function nowUpdate(): void {}

	/**
	 * Creates EvPeriodic watcher object associated with the current event loop instance
	 * <p>Creates EvPeriodic watcher object associated with the current event loop instance</p>
	 * @param float $offset
	 * @param float $interval
	 * @param callable $callback
	 * @param mixed $data
	 * @param int $priority
	 * @return EvPeriodic <p>Returns EvPeriodic object on success.</p>
	 * @link http://php.net/manual/ja/evloop.periodic.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function periodic(float $offset, float $interval, callable $callback, $data = NULL, int $priority = 0): \EvPeriodic {}

	/**
	 * Creates EvPrepare watcher object associated with the current event loop instance
	 * <p>Creates EvPrepare watcher object associated with the current event loop instance</p>
	 * @param callable $callback
	 * @param mixed $data
	 * @param int $priority
	 * @return EvPrepare <p>Returns EvPrepare object on success</p>
	 * @link http://php.net/manual/ja/evloop.prepare.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function prepare(callable $callback, $data = NULL, int $priority = 0): \EvPrepare {}

	/**
	 * Resume previously suspended default event loop
	 * <p><code>EvLoop::suspend()</code> and <b>EvLoop::resume()</b> methods suspend and resume a loop correspondingly.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.resume.php
	 * @since PECL ev >= 0.2.0
	 */
	public function resume(): void {}

	/**
	 * Begin checking for events and calling callbacks for the loop
	 * <p>Begin checking for events and calling callbacks for the current event loop. Returns when a callback calls <code>Ev::stop()</code> method, or the flags are nonzero(in which case the return value is true) or when there are no active watchers which reference the loop( <code>EvWatcher::keepalive()</code> is <b><code>TRUE</code></b>), in which case the return value will be <b><code>FALSE</code></b>. The return value can generally be interpreted as <i>if <b><code>TRUE</code></b>, there is more work left to do</i> .</p>
	 * @param int $flags <p>Optional parameter <code>flags</code> can be one of the following:</p> <b> List for possible values of <code>flags</code> </b>    <code>flags</code>  Description      <b><code>0</code></b>  The default behavior described above    <b><code>Ev::RUN_ONCE</code></b>  Block at most one(wait, but don't loop)    <b><code>Ev::RUN_NOWAIT</code></b>  Don't block at all(fetch/handle events, but don't wait)    <p>See the run flag constants .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.run.php
	 * @since PECL ev >= 0.2.0
	 */
	public function run(int $flags = 0): void {}

	/**
	 * Creates EvSignal watcher object associated with the current event loop instance
	 * <p>Creates EvSignal watcher object associated with the current event loop instance</p>
	 * @param int $signum
	 * @param callable $callback
	 * @param mixed $data
	 * @param int $priority
	 * @return EvSignal <p>Returns EvSignal object on success</p>
	 * @link http://php.net/manual/ja/evloop.signal.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function signal(int $signum, callable $callback, $data = NULL, int $priority = 0): \EvSignal {}

	/**
	 * Creates EvStat watcher object associated with the current event loop instance
	 * <p>Creates EvStat watcher object associated with the current event loop instance</p>
	 * @param string $path
	 * @param float $interval
	 * @param callable $callback
	 * @param mixed $data
	 * @param int $priority
	 * @return EvStat <p>Returns EvStat object on success</p>
	 * @link http://php.net/manual/ja/evloop.stat.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function stat(string $path, float $interval, callable $callback, $data = NULL, int $priority = 0): \EvStat {}

	/**
	 * Stops the event loop
	 * <p>Stops the event loop</p>
	 * @param int $how <p>One of <i>Ev::BREAK_&#42;</i> constants .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(int $how = NULL): void {}

	/**
	 * Suspend the loop
	 * <p><b>EvLoop::suspend()</b> and <code>EvLoop::resume()</code> methods suspend and resume a loop correspondingly.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.suspend.php
	 * @since PECL ev >= 0.2.0
	 */
	public function suspend(): void {}

	/**
	 * Creates EvTimer watcher object associated with the current event loop instance
	 * <p>Creates EvTimer watcher object associated with the current event loop instance</p>
	 * @param float $after
	 * @param float $repeat
	 * @param callable $callback
	 * @param mixed $data
	 * @param int $priority
	 * @return EvTimer <p>Returns EvTimer object on success</p>
	 * @link http://php.net/manual/ja/evloop.timer.php
	 * @since PECL ev >= 0.2.0
	 */
	final public function timer(float $after, float $repeat, callable $callback, $data = NULL, int $priority = 0): \EvTimer {}

	/**
	 * Performs internal consistency checks(for debugging)
	 * <p>Performs internal consistency checks(for debugging <i>libev</i> ) and abort the program if any data structures were found to be corrupted.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.verify.php
	 * @since PECL ev >= 0.2.0
	 */
	public function verify(): void {}
}

/**
 * <p>Periodic watchers are also timers of a kind, but they are very versatile.</p>
 * <p>Unlike EvTimer , <b>EvPeriodic</b> watchers are not based on real time(or relative time, the physical time that passes) but on wall clock time(absolute time, calendar or clock). The difference is that wall clock time can run faster or slower than real time, and time jumps are not uncommon(e.g. when adjusting it).</p>
 * <p><b>EvPeriodic</b> watcher can be configured to trigger after some specific point in time. For example, if an <b>EvPeriodic</b> watcher is configured to trigger <i>"in 10 seconds"</i> (e.g. <code>EvLoop::now()</code> + <b><code>10.0</code></b> , i.e. an absolute time, not a delay), and the system clock is reset to <i>January of the previous year</i> , then it will take a year or more to trigger the event (unlike an EvTimer , which would still trigger roughly <b><code>10</code></b> seconds after starting it as it uses a relative timeout).</p>
 * <p>As with timers, the callback is guaranteed to be invoked only when the point in time where it is supposed to trigger has passed. If multiple timers become ready during the same loop iteration then the ones with earlier time-out values are invoked before ones with later time-out values (but this is no longer true when a callback calls <code>EvLoop::run()</code> recursively).</p>
 * @link http://php.net/manual/ja/class.evperiodic.php
 * @since PECL ev >= 0.2.0
 */
class EvPeriodic extends \EvWatcher {

	/**
	 * @var mixed <p>When repeating, this contains the offset value, otherwise this is the absolute point in time(the offset value passed to <code>EvPeriodic::set()</code> , although <i>libev</i> might modify this value for better numerical stability).</p>
	 * @link http://php.net/manual/ja/class.evperiodic.php#evperiodic.props.offset
	 */
	public $offset;

	/**
	 * @var mixed <p>The current interval value. Can be modified any time, but changes only take effect when the periodic timer fires or <code>EvPeriodic::again()</code> is being called.</p>
	 * @link http://php.net/manual/ja/class.evperiodic.php#evperiodic.props.interval
	 */
	public $interval;

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-active
	 */
	public $is_active;

	/**
	 * @var mixed <p>User custom data associated with the watcher</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-pending
	 */
	public $is_pending;

	/**
	 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.priority
	 */
	public $priority;

	/**
	 * Constructs EvPeriodic watcher object
	 * <p>Constructs EvPeriodic watcher object and starts it automatically. <code>EvPeriodic::createStopped()</code> method creates stopped periodic watcher.</p>
	 * @param float $offset <p>See Periodic watcher operation modes</p>
	 * @param string $interval <p>See Periodic watcher operation modes</p>
	 * @param callable $reschedule_cb <p>Reschedule callback. You can pass <b><code>NULL</code></b>. See Periodic watcher operation modes</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return self <p>Returns EvPeriodic object on success.</p>
	 * @link http://php.net/manual/ja/evperiodic.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(float $offset, string $interval, callable $reschedule_cb, callable $callback, $data = NULL, int $priority = 0) {}

	/**
	 * Simply stops and restarts the periodic watcher again
	 * <p>Simply stops and restarts the periodic watcher again. This is only useful when attributes are changed.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evperiodic.again.php
	 * @since PECL ev >= 0.2.0
	 */
	public function again(): void {}

	/**
	 * Returns the absolute time that this watcher is supposed to trigger next
	 * <p>When the watcher is active, returns the absolute time that this watcher is supposed to trigger next. This is not the same as the offset argument to <code>EvPeriodic::set()</code> or <code>EvPeriodic::__construct()</code> , but indeed works even in interval mode.</p>
	 * @return float <p>Returns the absolute time this watcher is supposed to trigger next in seconds.</p>
	 * @link http://php.net/manual/ja/evperiodic.at.php
	 * @since PECL ev >= 0.2.0
	 */
	public function at(): float {}

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * Create a stopped EvPeriodic watcher
	 * <p>Create EvPeriodic object. Unlike <code>EvPeriodic::__construct()</code> this method doesn't start the watcher automatically.</p>
	 * @param float $offset <p>See Periodic watcher operation modes</p>
	 * @param float $interval <p>See Periodic watcher operation modes</p>
	 * @param callable $reschedule_cb <p>Reschedule callback. You can pass <b><code>NULL</code></b>. See Periodic watcher operation modes</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return EvPeriodic <p>Returns EvPeriodic watcher object on success.</p>
	 * @link http://php.net/manual/ja/evperiodic.createstopped.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function createStopped(float $offset, float $interval, callable $reschedule_cb, callable $callback, $data = NULL, int $priority = 0): \EvPeriodic {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * Returns the current "event loop time"
	 * <p>Returns the current "event loop time", which is the time the event loop received events and started processing them. This timestamp does not change as long as callbacks are being processed, and this is also the base time used for relative timers. You can treat it as the timestamp of the event occurring(or more correctly, libev finding out about it).</p>
	 * @return float <p>Returns time of the event loop in (fractional) seconds.</p>
	 * @link http://php.net/manual/ja/evloop.now.php
	 * @since PECL ev >= 0.2.0
	 */
	public function now(): float {}

	/**
	 * Begin checking for events and calling callbacks for the loop
	 * <p>Begin checking for events and calling callbacks for the current event loop. Returns when a callback calls <code>Ev::stop()</code> method, or the flags are nonzero(in which case the return value is true) or when there are no active watchers which reference the loop( <code>EvWatcher::keepalive()</code> is <b><code>TRUE</code></b>), in which case the return value will be <b><code>FALSE</code></b>. The return value can generally be interpreted as <i>if <b><code>TRUE</code></b>, there is more work left to do</i> .</p>
	 * @param int $flags <p>Optional parameter <code>flags</code> can be one of the following:</p> <b> List for possible values of <code>flags</code> </b>    <code>flags</code>  Description      <b><code>0</code></b>  The default behavior described above    <b><code>Ev::RUN_ONCE</code></b>  Block at most one(wait, but don't loop)    <b><code>Ev::RUN_NOWAIT</code></b>  Don't block at all(fetch/handle events, but don't wait)    <p>See the run flag constants .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.run.php
	 * @since PECL ev >= 0.2.0
	 */
	public function run(int $flags = 0): void {}

	/**
	 * Configures the watcher
	 * <p>(Re-)Configures EvPeriodic watcher</p>
	 * @param float $offset <p>The same meaning as for <code>EvPeriodic::__construct()</code> . See Periodic watcher operation modes</p>
	 * @param float $interval <p>The same meaning as for <code>EvPeriodic::__construct()</code> . See Periodic watcher operation modes</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evperiodic.set.php
	 * @since PECL ev >= 0.2.0
	 */
	public function set(float $offset, float $interval): void {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}
}

/**
 * <p><b>EvPrepare</b> ウォッチャーと EvCheck ウォッチャーは、 通常はペアで使います。 <b>EvPrepare</b> ウォッチャーはプロセスをブロックする前に起動し、 EvCheck はブロックした後に起動します。</p>
 * <p><code>EvLoop::run()</code> あるいはそれに類するメソッドや関数 (現在のイベントループに入るもの) は、<b>EvPrepare</b> ウォッチャーや EvCheck ウォッチャーからは呼べません。 現在のループ以外のループは問題ありません。 その理由は、これらのウォッチャーの中では再帰をチェックする必要がないからです。 つまり、処理の流れは常に <b>EvPrepare</b> -&gt; ブロック -&gt; EvCheck となるので、これらのウォッチャーは常にペアで呼ばれ、ブロッキング呼び出しの前後を囲むことになります。</p>
 * <p>主な利用目的は他のイベント機構を <i>libev</i> に統合することで、 少し高度な使いかたになります。変数の変更を追跡したり 自前のウォッチャーを実装したり、net-snmp やコルーチンライブラリを統合したりといった、 さまざまな用途で使えます。 また、何らかのデータをキャッシュしてブロッキングの前にフラッシュするなどの用途で使えることもあります。</p>
 * <p>EvCheck には最高の優先度 (<b><code>Ev::MAXPRI</code></b>) を与えることを推奨します。 これで、ポーリングの後は他のあらゆるウォッチャーよりも先に実行されることが保証されます (<b>EvPrepare</b> ウォッチャーの場合は無鐘鋳です)。</p>
 * <p>また、EvCheck ウォッチャーはイベントをアクティブにしたり送信したりしてはいけません。 <i>libev</i> では対応してはいますが、 他の EvCheck ウォッチャーが仕事をする前に実行される可能性があります。</p>
 * @link http://php.net/manual/ja/class.evprepare.php
 * @since PECL ev >= 0.2.0
 */
class EvPrepare extends \EvWatcher {

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-active
	 */
	public $is_active;

	/**
	 * @var mixed <p>User custom data associated with the watcher</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-pending
	 */
	public $is_pending;

	/**
	 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.priority
	 */
	public $priority;

	/**
	 * EvPrepare ウォッチャーオブジェクトを作る
	 * <p>EvPrepare ウォッチャーオブジェクトを作り、自動的に開始させます。 停止状態のウォッチャーが必要なときは、 <code>EvPrepare::createStopped()</code> を使いましょう。</p>
	 * @param string $callback <p>ウォッチャーのコールバック を参照ください。</p>
	 * @param string $data <p>このウォッチャーに関連づけるカスタムデータ。</p>
	 * @param string $priority <p>ウォッチャーの優先度。</p>
	 * @return self <p>成功した場合に EvPrepare オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/evprepare.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(string $callback, string $data = NULL, string $priority = NULL) {}

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * 停止した EvPrepare ウォッチャーのインスタンスを作る
	 * <p>停止した EvPrepare ウォッチャーのインスタンスを作ります。 <code>EvPrepare::__construct()</code> とは違い、 このメソッドはウォッチャーを自動的に開始させません。</p>
	 * @param callable $callback <p>ウォッチャーのコールバック を参照ください。</p>
	 * @param mixed $data <p>このウォッチャーに関連づけるカスタムデータ。</p>
	 * @param int $priority <p>ウォッチャーの優先度。</p>
	 * @return EvPrepare <p>成功した場合に EvPrepare オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/evprepare.createstopped.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function createStopped(callable $callback, $data = NULL, int $priority = 0): \EvPrepare {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * Begin checking for events and calling callbacks for the loop
	 * <p>Begin checking for events and calling callbacks for the current event loop. Returns when a callback calls <code>Ev::stop()</code> method, or the flags are nonzero(in which case the return value is true) or when there are no active watchers which reference the loop( <code>EvWatcher::keepalive()</code> is <b><code>TRUE</code></b>), in which case the return value will be <b><code>FALSE</code></b>. The return value can generally be interpreted as <i>if <b><code>TRUE</code></b>, there is more work left to do</i> .</p>
	 * @param int $flags <p>Optional parameter <code>flags</code> can be one of the following:</p> <b> List for possible values of <code>flags</code> </b>    <code>flags</code>  Description      <b><code>0</code></b>  The default behavior described above    <b><code>Ev::RUN_ONCE</code></b>  Block at most one(wait, but don't loop)    <b><code>Ev::RUN_NOWAIT</code></b>  Don't block at all(fetch/handle events, but don't wait)    <p>See the run flag constants .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.run.php
	 * @since PECL ev >= 0.2.0
	 */
	public function run(int $flags = 0): void {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}
}

/**
 * <p><b>EvSignal</b> watchers will trigger an event when the process receives a specific signal one or more times. Even though signals are very asynchronous, <i>libev</i> will try its best to deliver signals synchronously, i.e. as part of the normal event processing, like any other event.</p>
 * <p>There is no limit for the number of watchers for the same signal, but only within the same loop, i.e. one can watch for <b><code>SIGINT</code></b> in the default loop and for <b><code>SIGIO</code></b> in another loop, but it is not allowed to watch for <b><code>SIGINT</code></b> in both the default loop and another loop at the same time. At the moment, <b><code>SIGCHLD</code></b> is permanently tied to the default loop.</p>
 * <p>If possible and supported, <i>libev</i> will install its handlers with <i>SA_RESTART</i> (or equivalent) behaviour enabled, so system calls should not be unduly interrupted. In case of a problem with system calls getting interrupted by signals, all the signals can be blocked in an EvCheck watcher and unblocked in a EvPrepare watcher.</p>
 * @link http://php.net/manual/ja/class.evsignal.php
 * @since PECL ev >= 0.2.0
 */
class EvSignal extends \EvWatcher {

	/**
	 * @var mixed <p>Signal number. See the constants exported by <i>pcntl</i> extension. See also <i>signal(7)</i> man page.</p>
	 * @link http://php.net/manual/ja/class.evsignal.php#evsignal.props.signum
	 */
	public $signum;

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-active
	 */
	public $is_active;

	/**
	 * @var mixed <p>User custom data associated with the watcher</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-pending
	 */
	public $is_pending;

	/**
	 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.priority
	 */
	public $priority;

	/**
	 * Constructs EvSignal watcher object
	 * <p>Constructs EvSignal watcher object and starts it automatically. For a stopped periodic watcher consider using <code>EvSignal::createStopped()</code> method.</p>
	 * @param int $signum <p>Signal number. See constants exported by <i>pcntl</i> extension. See also <i>signal(7)</i> man page.</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return self <p>Returns EvSignal object on success.</p>
	 * @link http://php.net/manual/ja/evsignal.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(int $signum, callable $callback, $data = NULL, int $priority = 0) {}

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * Create stopped EvSignal watcher object
	 * <p>Create stopped EvSignal watcher object. Unlike <code>EvSignal::__construct()</code> , this method does't start the watcher automatically.</p>
	 * @param int $signum <p>Signal number. See constants exported by <i>pcntl</i> extension. See also <i>signal(7)</i> man page.</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return EvSignal <p>Returns EvSignal object on success.</p>
	 * @link http://php.net/manual/ja/evsignal.createstopped.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function createStopped(int $signum, callable $callback, $data = NULL, int $priority = 0): \EvSignal {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * Configures the watcher
	 * <p>Configures the watcher.</p>
	 * @param int $signum <p>Signal number. The same as for <code>EvSignal::__construct()</code></p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evsignal.set.php
	 * @since PECL ev >= 0.2.0
	 */
	public function set(int $signum): void {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}
}

/**
 * <p><b>EvStat</b> monitors a file system path for attribute changes. It calls <i>stat()</i> on that path in regular intervals(or when the OS signals it changed) and sees if it changed compared to the last time, invoking the callback if it did.</p>
 * <p>The path does not need to exist: changing from "path exists" to "path does not exist" is a status change like any other. The condition "path does not exist" is signified by the <b><code>'nlink'</code></b> item being 0(returned by <code>EvStat::attr()</code> method).</p>
 * <p>The path must not end in a slash or contain special components such as <b><code>'.'</code></b> or <b><code>..</code></b> . The path should be absolute: if it is relative and the working directory changes, then the behaviour is undefined.</p>
 * <p>Since there is no portable change notification interface available, the portable implementation simply calls <i>stat()</i> regularly on the path to see if it changed somehow. For this case a recommended polling interval can be specified. If one specifies a polling interval of <b><code>0.0 </code></b> (highly recommended) then a suitable, unspecified default value will be used(which could be expected to be around 5 seconds, although this might change dynamically). <i>libev</i> will also impose a minimum interval which is currently around <b><code>0.1</code></b> , but that’s usually overkill.</p>
 * <p>This watcher type is not meant for massive numbers of <b>EvStat</b> watchers, as even with OS-supported change notifications, this can be resource-intensive.</p>
 * @link http://php.net/manual/ja/class.evstat.php
 * @since PECL ev >= 0.2.0
 */
class EvStat extends \EvWatcher {

	/**
	 * @var mixed <p><i>Readonly</i> . The path to wait for status changes on.</p>
	 * @link http://php.net/manual/ja/class.evstat.php#evstat.props.path
	 */
	public $path;

	/**
	 * @var mixed <p><i>Readonly</i> . Hint on how quickly a change is expected to be detected and should normally be specified as <b><code>0.0</code></b> to let <i>libev</i> choose a suitable value.</p>
	 * @link http://php.net/manual/ja/class.evstat.php#evstat.props.interval
	 */
	public $interval;

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-active
	 */
	public $is_active;

	/**
	 * @var mixed <p>User custom data associated with the watcher</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-pending
	 */
	public $is_pending;

	/**
	 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.priority
	 */
	public $priority;

	/**
	 * Constructs EvStat watcher object
	 * <p>Constructs EvStat watcher object and starts the watcher automatically.</p>
	 * @param string $path <p>The path to wait for status changes on.</p>
	 * @param float $interval <p>Hint on how quickly a change is expected to be detected and should normally be specified as <b><code>0.0</code></b> to let <i>libev</i> choose a suitable value.</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return self <p>Returns EvStat watcher object on succes.</p>
	 * @link http://php.net/manual/ja/evstat.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(string $path, float $interval, callable $callback, $data = NULL, int $priority = 0) {}

	/**
	 * Returns the values most recently detected by Ev
	 * <p>Returns array of the values most recently detected by Ev</p>
	 * @return array <p>Returns array with the values most recently detect by Ev(without actual <i>stat</i> 'ing):</p> <b> List for item keys of the array returned by <b>EvStat::attr()</b> </b>   Key Description      <b><code>'dev'</code></b>  ID of device containing file    <b><code>'ino'</code></b>  inode number    <b><code>'mode'</code></b>  protection    <b><code>'nlink'</code></b>  number of hard links    <b><code>'uid'</code></b>  user ID of owner    <b><code>'size'</code></b>  total size, in bytes    <b><code>'gid'</code></b>  group ID of owner    <b><code>'rdev'</code></b>  device ID (if special file)    <b><code>'blksize'</code></b>  blocksize for file system I/O    <b><code>'blocks'</code></b>  number of 512B blocks allocated    <b><code>'atime'</code></b>  time of last access    <b><code>'ctime'</code></b>  time of last status change    <b><code>'mtime'</code></b>  time of last modification   <p>See <i>stat(2)</i> man page for details.</p>
	 * @link http://php.net/manual/ja/evstat.attr.php
	 * @since PECL ev >= 0.2.0
	 */
	public function attr(): array {}

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * Create a stopped EvStat watcher object
	 * <p>Creates EvStat watcher object, but doesn't start it automatically(unlike <code>EvStat::__construct()</code> ).</p>
	 * @param string $path <p>The path to wait for status changes on.</p>
	 * @param float $interval <p>Hint on how quickly a change is expected to be detected and should normally be specified as <b><code>0.0</code></b> to let <i>libev</i> choose a suitable value.</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return void <p>Returns a stopped EvStat watcher object on success.</p>
	 * @link http://php.net/manual/ja/evstat.createstopped.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function createStopped(string $path, float $interval, callable $callback, $data = NULL, int $priority = 0): void {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * Returns the previous set of values returned by EvStat::attr
	 * <p>Just like <code>EvStat::attr()</code> , but returns the previous set of values.</p>
	 * @return void <p>Returns an array with the same structure as the array returned by <code>EvStat::attr()</code> . The array contains previously detected values.</p>
	 * @link http://php.net/manual/ja/evstat.prev.php
	 * @since PECL ev >= 0.2.0
	 */
	public function prev(): void {}

	/**
	 * Configures the watcher
	 * <p>Configures the watcher.</p>
	 * @param string $path <p>The path to wait for status changes on.</p>
	 * @param float $interval <p>Hint on how quickly a change is expected to be detected and should normally be specified as <b><code>0.0</code></b> to let <i>libev</i> choose a suitable value.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evstat.set.php
	 * @since PECL ev >= 0.2.0
	 */
	public function set(string $path, float $interval): void {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Initiates the stat call
	 * <p>Initiates the stat call(updates internal cache). It stats(using <i>lstat</i> ) the path specified in the watcher and sets to the values found.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> if path exists. Otherwise <b><code>FALSE</code></b>.</p>
	 * @link http://php.net/manual/ja/evstat.stat.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stat(): bool {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}
}

/**
 * <p><b>EvTimer</b> watchers are simple relative timers that generate an event after a given time, and optionally repeating in regular intervals after that.</p>
 * <p>The timers are based on real time, that is, if one registers an event that times out after an hour and resets the system clock to <i>January last year</i> , it will still time out after(roughly) one hour. "Roughly" because detecting time jumps is hard, and some inaccuracies are unavoidable.</p>
 * <p>The callback is guaranteed to be invoked only after its timeout has passed (not at, so on systems with very low-resolution clocks this might introduce a small delay). If multiple timers become ready during the same loop iteration then the ones with earlier time-out values are invoked before ones of the same priority with later time-out values (but this is no longer true when a callback calls <code>EvLoop::run()</code> recursively).</p>
 * <p>The timer itself will do a best-effort at avoiding drift, that is, if a timer is configured to trigger every <b><code>10</code></b> seconds, then it will normally trigger at exactly <b><code>10</code></b> second intervals. If, however, the script cannot keep up with the timer because it takes longer than those <b><code>10</code></b> seconds to do) the timer will not fire more than once per event loop iteration.</p>
 * @link http://php.net/manual/ja/class.evtimer.php
 * @since PECL ev >= 0.2.0
 */
class EvTimer extends \EvWatcher {

	/**
	 * @var mixed <p>If repeat is <b><code>0.0</code></b> , then it will automatically be stopped once the timeout is reached. If it is positive, then the timer will automatically be configured to trigger again every repeat seconds later, until stopped manually.</p>
	 * @link http://php.net/manual/ja/class.evtimer.php#evtimer.props.repeat
	 */
	public $repeat;

	/**
	 * @var mixed <p>Returns the remaining time until a timer fires. If the timer is active, then this time is relative to the current event loop time, otherwise it's the timeout value currently configured.</p> <p>That is, after instanciating an <b>EvTimer</b> with an <code>after</code> value of <b><code>5.0</code></b> and <code>repeat</code> value of <b><code>7.0</code></b> , remaining returns <b><code>5.0</code></b> . When the timer is started and one second passes, remaining will return <b><code>4.0</code></b> . When the timer expires and is restarted, it will return roughly <b><code>7.0</code></b> (likely slightly less as callback invocation takes some time too), and so on.</p>
	 * @link http://php.net/manual/ja/class.evtimer.php#evtimer.props.remaining
	 */
	public $remaining;

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-active
	 */
	public $is_active;

	/**
	 * @var mixed <p>User custom data associated with the watcher</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-pending
	 */
	public $is_pending;

	/**
	 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.priority
	 */
	public $priority;

	/**
	 * Constructs an EvTimer watcher object
	 * <p>Constructs an EvTimer watcher object.</p>
	 * @param float $after <p>Configures the timer to trigger after <code>after</code> seconds.</p>
	 * @param float $repeat <p>If repeat is <b><code>0.0</code></b> , then it will automatically be stopped once the timeout is reached. If it is positive, then the timer will automatically be configured to trigger again every repeat seconds later, until stopped manually.</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return self <p>Returns EvTimer object on success.</p>
	 * @link http://php.net/manual/ja/evtimer.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	public function __construct(float $after, float $repeat, callable $callback, $data = NULL, int $priority = 0) {}

	/**
	 * Restarts the timer watcher
	 * <p>This will act as if the timer timed out and restart it again if it is repeating. The exact semantics are:</p><p>if the timer is pending, its pending status is cleared.</p><p>if the timer is started but non-repeating, stop it (as if it timed out).</p><p>if the timer is repeating, either start it if necessary (with the repeat value), or reset the running timer to the repeat value.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evtimer.again.php
	 * @since PECL ev >= 0.2.0
	 */
	public function again(): void {}

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * Creates EvTimer stopped watcher object
	 * <p>Creates EvTimer stopped watcher object. Unlike <code>EvTimer::__construct()</code> , this method doesn't start the watcher automatically.</p>
	 * @param float $after <p>Configures the timer to trigger after <code>after</code> seconds.</p>
	 * @param float $repeat <p>If repeat is <b><code>0.0</code></b> , then it will automatically be stopped once the timeout is reached. If it is positive, then the timer will automatically be configured to trigger again every repeat seconds later, until stopped manually.</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @param mixed $data <p>Custom data associated with the watcher.</p>
	 * @param int $priority <p>Watcher priority</p>
	 * @return EvTimer <p>Returns EvTimer watcher object on success.</p>
	 * @link http://php.net/manual/ja/evtimer.createstopped.php
	 * @since PECL ev >= 0.2.0
	 */
	final public static function createStopped(float $after, float $repeat, callable $callback, $data = NULL, int $priority = 0): \EvTimer {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * Begin checking for events and calling callbacks for the loop
	 * <p>Begin checking for events and calling callbacks for the current event loop. Returns when a callback calls <code>Ev::stop()</code> method, or the flags are nonzero(in which case the return value is true) or when there are no active watchers which reference the loop( <code>EvWatcher::keepalive()</code> is <b><code>TRUE</code></b>), in which case the return value will be <b><code>FALSE</code></b>. The return value can generally be interpreted as <i>if <b><code>TRUE</code></b>, there is more work left to do</i> .</p>
	 * @param int $flags <p>Optional parameter <code>flags</code> can be one of the following:</p> <b> List for possible values of <code>flags</code> </b>    <code>flags</code>  Description      <b><code>0</code></b>  The default behavior described above    <b><code>Ev::RUN_ONCE</code></b>  Block at most one(wait, but don't loop)    <b><code>Ev::RUN_NOWAIT</code></b>  Don't block at all(fetch/handle events, but don't wait)    <p>See the run flag constants .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evloop.run.php
	 * @since PECL ev >= 0.2.0
	 */
	public function run(int $flags = 0): void {}

	/**
	 * Configures the watcher
	 * <p>Configures the watcher</p>
	 * @param float $after <p>Configures the timer to trigger after <code>after</code> seconds.</p>
	 * @param float $repeat <p>If repeat is <b><code>0.0</code></b> , then it will automatically be stopped once the timeout is reached. If it is positive, then the timer will automatically be configured to trigger again every repeat seconds later, until stopped manually.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evtimer.set.php
	 * @since PECL ev >= 0.2.0
	 */
	public function set(float $after, float $repeat): void {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}
}

/**
 * <p><b>EvWatcher</b> is a base class for all watchers( EvCheck , EvChild etc.). Since <b>EvWatcher</b> 's constructor is abstract , one can't(and don't need to) create EvWatcher objects directly.</p>
 * @link http://php.net/manual/ja/class.evwatcher.php
 * @since PECL ev >= 0.2.0
 */
abstract class EvWatcher {

	/**
	 * @var mixed <p><i>Readonly</i> . <b><code>TRUE</code></b> if the watcher is active. <b><code>FALSE</code></b> otherwise.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-active
	 */
	public $is_active;

	/**
	 * @var mixed <p>User custom data associated with the watcher</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.data
	 */
	public $data;

	/**
	 * @var mixed <p><i>Readonly</i> .<b><code>TRUE</code></b> if the watcher is pending, i.e. it has outstanding events, but its callback has not yet been invoked. <b><code>FALSE</code></b> otherwise. As long, as a watcher is pending(but not active), one must <i>not</i> change its priority.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.is-pending
	 */
	public $is_pending;

	/**
	 * @var mixed <p><code>Integer</code> between <b><code>Ev::MINPRI</code></b> and <b><code>Ev::MAXPRI</code></b> . Pending watchers with higher priority will be invoked before watchers with lower priority, but priority will not keep watchers from being executed(except for EvIdle watchers). EvIdle watchers provide functionality to suppress invocation when higher priority events are pending.</p>
	 * @link http://php.net/manual/ja/class.evwatcher.php#evwatcher.props.priority
	 */
	public $priority;

	/**
	 * Abstract constructor of a watcher object
	 * <p><b>EvWatcher::__construct()</b> is an abstract constructor of a watcher object implemented in the derived classes.</p>
	 * @return self
	 * @link http://php.net/manual/ja/evwatcher.construct.php
	 * @since PECL ev >= 0.2.0
	 */
	abstract public function __construct();

	/**
	 * Clear watcher pending status
	 * <p>If the watcher is pending, this method clears its pending status and returns its revents bitset(as if its callback was invoked). If the watcher isn't pending it does nothing and returns <b><code>0</code></b> .</p><p>Sometimes it can be useful to "poll" a watcher instead of waiting for its callback to be invoked, which can be accomplished with this function.</p>
	 * @return int <p>In case if the watcher is pending, returns revents bitset as if the watcher callback had been invoked. Otherwise returns <b><code>0</code></b> .</p>
	 * @link http://php.net/manual/ja/evwatcher.clear.php
	 * @since PECL ev >= 0.2.0
	 */
	public function clear(): int {}

	/**
	 * Feeds the given revents set into the event loop
	 * <p>Feeds the given revents set into the event loop, as if the specified event had happened for the watcher.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.feed.php
	 * @since PECL ev >= 0.2.0
	 */
	public function feed(int $revents): void {}

	/**
	 * Returns the loop responsible for the watcher
	 * <p>Returns the loop responsible for the watcher</p>
	 * @return EvLoop <p>Returns EvLoop event loop object responsible for the watcher.</p>
	 * @link http://php.net/manual/ja/evwatcher.getloop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function getLoop(): \EvLoop {}

	/**
	 * Invokes the watcher callback with the given received events bit mask
	 * <p>Invokes the watcher callback with the given received events bit mask.</p>
	 * @param int $revents <p>Bit mask of watcher received events .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.invoke.php
	 * @since PECL ev >= 0.2.0
	 */
	public function invoke(int $revents): void {}

	/**
	 * Configures whether to keep the loop from returning
	 * <p>Configures whether to keep the loop from returning. With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p><p>Watchers have keepalive <code>value</code> <b><code>TRUE</code></b> by default.</p><p>Clearing keepalive status is useful when returning from <code>Ev::run()</code> / <code>EvLoop::run()</code> just because of the watcher is undesirable. It could be a long running UDP socket watcher or so.</p>
	 * @param bool $value <p>With keepalive <code>value</code> set to <b><code>FALSE</code></b> the watcher won't keep <code>Ev::run()</code> / <code>EvLoop::run()</code> from returning even though the watcher is active.</p>
	 * @return bool <p>Returns the previous state.</p>
	 * @link http://php.net/manual/ja/evwatcher.keepalive.php
	 * @since PECL ev >= 0.2.0
	 */
	public function keepalive(bool $value = NULL): bool {}

	/**
	 * Sets new callback for the watcher
	 * <p>Sets new callback for the watcher</p>
	 * @param callable $callback <p>See Watcher callbacks .</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.setcallback.php
	 * @since PECL ev >= 0.2.0
	 */
	public function setCallback(callable $callback): void {}

	/**
	 * Starts the watcher
	 * <p>Marks the watcher as active. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.start.php
	 * @since PECL ev >= 0.2.0
	 */
	public function start(): void {}

	/**
	 * Stops the watcher
	 * <p>Marks the watcher as inactive. Note that only active watchers will receive events.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/evwatcher.stop.php
	 * @since PECL ev >= 0.2.0
	 */
	public function stop(): void {}
}

