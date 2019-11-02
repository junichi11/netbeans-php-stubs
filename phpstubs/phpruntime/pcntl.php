<?php



namespace {

	/**
	 * シグナルを送信するアラームを設定する
	 * <p>プロセスに対して、 指定した秒数後に <i>SIGALRM</i> シグナルを送信するタイマーを作成します。 <b>pcntl_alarm()</b> をコールすると、 それまでに設定されていたアラームはすべて取り消されます。</p>
	 * @param int $seconds <p>待機する秒数。<code>seconds</code> がゼロの場合は、 新しいアラームは作成されません。</p>
	 * @return int <p>それまでに予定されていたアラームの予定時刻までの秒数を返します。 事前に予定されていたアラームがなかった場合には <i>0</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-alarm.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function pcntl_alarm(int $seconds): int {}

	/**
	 * Enable/disable asynchronous signal handling or return the old setting
	 * <p>If the <code>on</code> parameter is omitted, <b>pcntl_async_signals()</b> returns whether asynchronous signal handling is enabled. Otherwise, asynchronous signal handling is enabled or disabled.</p>
	 * @param bool $on <p>Whether asynchronous signal handling should be enabled.</p>
	 * @return bool <p>When used as getter (that is without the optional parameter) it returns whether asynchronous signal handling is enabled. When used as setter (that is with the optional parameter given), it returns whether asynchronous signal handling was enabled <i>before</i> the function call.</p>
	 * @link https://php.net/manual/ja/function.pcntl-async-signals.php
	 * @since PHP 7 >= 7.1.0
	 */
	function pcntl_async_signals(bool $on = NULL): bool {}

	/**
	 * pcntl_get_last_error() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>pcntl_get_last_error()</code></p>
	 * @return int
	 * @link https://php.net/manual/ja/function.pcntl-errno.php
	 * @since PHP 5 >= 5.3.4, PHP 7
	 */
	function pcntl_errno(): int {}

	/**
	 * 現在のプロセス空間で指定したプログラムを実行する
	 * <p>指定した引数でプログラムを実行します。</p>
	 * @param string $path <p><code>path</code> は、バイナリ実行ファイルへのパスか、 あるいは有効な実行ファイルを指す shebang (例: #!/usr/local/bin/perl) が一行目に存在するスクリプトへのパスである必要があります。 詳細な情報については、システムの man ページで execve(2) を参照ください。</p>
	 * @param array $args <p><code>args</code> は、プログラムに渡す引数文字列の配列です。</p>
	 * @param array $envs <p><code>envs</code> は、プログラムに渡す環境変数の配列です。 この配列は name =&gt; value のような形式で、key が環境変数名・value が その値となります。</p>
	 * @return void <p>成功した場合に <b><code>NULL</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します.</p>
	 * @link https://php.net/manual/ja/function.pcntl-exec.php
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function pcntl_exec(string $path, array $args = NULL, array $envs = NULL): void {}

	/**
	 * 現在実行中のプロセスをフォークする
	 * <p><b>pcntl_fork()</b> 関数は、親プロセスとその PID および PPID のみが異なる子プロセスを生成します。システム上でのフォークの 動作の具体的な詳細については、実行するシステムの fork(2) の マニュアルを参照ください。</p>
	 * @return int <p>成功時に、子プロセスの PID が親プロセスの実行スレッドに返され、 子プロセスの実行スレッドには 0 が返されます。失敗した場合、親プロセスの コンテキストに -1 が返され、子プロセスは生成されずに、PHP のエラーが 出力されます。</p>
	 * @link https://php.net/manual/ja/function.pcntl-fork.php
	 * @see pcntl_waitpid(), pcntl_signal(), setproctitle()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function pcntl_fork(): int {}

	/**
	 * 直近の pcntl 関数が失敗したときのエラー番号を取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>エラーコードを返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-get-last-error.php
	 * @see pcntl_strerror()
	 * @since PHP 5 >= 5.3.4, PHP 7
	 */
	function pcntl_get_last_error(): int {}

	/**
	 * プロセスの優先度を取得する
	 * <p><b>pcntl_getpriority()</b> は、<code>pid</code> の優先度を設定します。システムの型やカーネルの バージョンによって優先度の扱いは違うので、詳細についてはシステムの getpriority(2) の man ページを参照ください。</p>
	 * @param int $pid <p>指定しなかった場合は、現在のプロセスの PID を使用します。</p>
	 * @param int $process_identifier <p><b><code>PRIO_PGRP</code></b>、<b><code>PRIO_USER</code></b> あるいは <b><code>PRIO_PROCESS</code></b> のいずれか。</p>
	 * @return int <p><b>pcntl_getpriority()</b> はプロセスの優先度を返します。 エラー時には <b><code>FALSE</code></b> を返します。数字が小さいほど、優先順位は上となります。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
	 * @link https://php.net/manual/ja/function.pcntl-getpriority.php
	 * @see pcntl_setpriority()
	 * @since PHP 5, PHP 7
	 */
	function pcntl_getpriority(int $pid  = 'getmypid()', int $process_identifier = PRIO_PROCESS): int {}

	/**
	 * プロセスの優先度を変更する
	 * <p><b>pcntl_setpriority()</b> は、 <code>pid</code> の優先度を設定します。</p>
	 * @param int $priority <p><code>priority</code> は一般的には <i>-20</i> から <i>20</i> までの値です。 デフォルトの優先度は <i>0</i> で、数字が小さいほど 優先順位が上となります。システムの型やカーネルの バージョンによって優先度の扱いは違うので、詳細についてはシステムの setpriority(2) の man ページを参照ください。</p>
	 * @param int $pid <p>指定しない場合は、現在のプロセスの PID を使用します。</p>
	 * @param int $process_identifier <p><b><code>PRIO_PGRP</code></b>、<b><code>PRIO_USER</code></b> あるいは <b><code>PRIO_PROCESS</code></b> のいずれかです。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-setpriority.php
	 * @see pcntl_getpriority()
	 * @since PHP 5, PHP 7
	 */
	function pcntl_setpriority(int $priority, int $pid  = 'getmypid()', int $process_identifier = PRIO_PROCESS): bool {}

	/**
	 * シグナルハンドラを設定する
	 * <p><b>pcntl_signal()</b> 関数は、<code>signo</code> が指すシグナルに関するハンドラを新たに設定するか、既存のハンドラを置き換えます。</p>
	 * @param int $signo <p>シグナル番号。</p>
	 * @param callable|int $handler <p>シグナルハンドラ。<code>callable</code> を渡すと、それを実行してシグナルを処理します。 あるいは、グローバル定数 <b><code>SIG_IGN</code></b> または <b><code>SIG_DFL</code></b> を渡すこともできます。それぞれ、シグナルを無視することとデフォルトのシグナルハンドラを復活させることを表します。</p> <p><code>callable</code> を渡す場合は、次のシグネチャを実装したものでなければいけません。</p> <p></p> handler ( int <code>$signo</code> ) : void    <code>signo</code>    処理するシグナル。    <code>siginfo</code>    OS が siginfo_t 構造体をサポートしている場合、 これはシグナルに依存するシグナル情報の配列になります。     <p><b>注意</b>:</p> <p>オブジェクトのメソッドをハンドラとして指定した場合には、 そのハンドラを別のものに変えたりスクリプトが終了したりするまでは オブジェクトの参照カウントが増加しないことに注意しましょう。</p>
	 * @param bool $restart_syscalls <p>再起動のシステムコールに対応するかどうかを設定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-signal.php
	 * @see pcntl_fork(), pcntl_waitpid()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function pcntl_signal(int $signo, $handler, bool $restart_syscalls = TRUE): bool {}

	/**
	 * ペンディングシグナル用のハンドラをコールする
	 * <p><b>pcntl_signal_dispatch()</b> 関数は、 <code>pcntl_signal()</code> がインストールしたシグナルハンドラを 各ペンディングシグナルに対してコールします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-signal-dispatch.php
	 * @see pcntl_signal(), pcntl_sigprocmask(), pcntl_sigwaitinfo(), pcntl_sigtimedwait()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function pcntl_signal_dispatch(): bool {}

	/**
	 * Get the current handler for specified signal
	 * <p>The <b>pcntl_signal_get_handler()</b> function will get the current handler for the specified <code>signo</code>.</p>
	 * @param int $signo <p>The signal number.</p>
	 * @return mixed <p>This function may return an integer value that refers to <b><code>SIG_DFL</code></b> or <b><code>SIG_IGN</code></b>. If you set a custom handler a string value containing the function name is returned.</p>
	 * @link https://php.net/manual/ja/function.pcntl-signal-get-handler.php
	 * @see pcntl_signal()
	 * @since PHP 7 >= 7.1.0
	 */
	function pcntl_signal_get_handler(int $signo) {}

	/**
	 * ブロックされたシグナルを設定あるいは取得する
	 * <p><b>pcntl_sigprocmask()</b> 関数は、 ブロックされたシグナルを <code>how</code> パラメータに応じて 追加、削除あるいは設定します。</p>
	 * @param int $how <p><b>pcntl_sigprocmask()</b> の挙動を設定します。以下の値が設定できます。</p><ul> <li> <b><code>SIG_BLOCK</code></b>: 現在ブロックされているシグナルにシグナルを追加する</li> <li> <b><code>SIG_UNBLOCK</code></b>: 現在ブロックされているシグナルからシグナルを削除する</li> <li> <b><code>SIG_SETMASK</code></b>: 現在ブロックされているシグナルを、指定したもので置き換える</li> </ul>
	 * @param array $set <p>シグナルのリスト。</p>
	 * @param array $oldset <p><code>oldset</code> パラメータには、 それまでにブロックされていたシグナルのリストが設定されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-sigprocmask.php
	 * @see pcntl_sigwaitinfo(), pcntl_sigtimedwait()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function pcntl_sigprocmask(int $how, array $set, array &$oldset = NULL): bool {}

	/**
	 * タイムアウトつきでシグナルを待つ
	 * <p><b>pcntl_sigtimedwait()</b> 関数の挙動は <code>pcntl_sigwaitinfo()</code> とほぼ同じですが、さらに 2 つのパラメータがあります。 <code>seconds</code> および <code>nanoseconds</code> がそれで、 スクリプトが待ち続ける時間の上限をここで設定することができます。</p>
	 * @param array $set <p>待つシグナルの配列。</p>
	 * @param array $siginfo <p>シグナルについての情報を含む配列が <code>siginfo</code> に設定されます。 <code>pcntl_sigwaitinfo()</code> を参照ください。</p>
	 * @param int $seconds <p>タイムアウトの秒数。</p>
	 * @param int $nanoseconds <p>タイムアウトのナノ秒数。</p>
	 * @return int <p>成功した場合に <b>pcntl_sigtimedwait()</b> はシグナル番号を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-sigtimedwait.php
	 * @see pcntl_sigprocmask(), pcntl_sigwaitinfo()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function pcntl_sigtimedwait(array $set, array &$siginfo = NULL, int $seconds = 0, int $nanoseconds = 0): int {}

	/**
	 * シグナルを待つ
	 * <p><b>pcntl_sigwaitinfo()</b> は、 呼び出し元のスクリプトの実行をいったん停止させ、<code>set</code> で指定したシグナルを受け取るまで待ちます。もしそのシグナルのいずれかがすでにペンディング状態 (<code>pcntl_sigprocmask()</code> でブロックされているなど) の場合、 <b>pcntl_sigwaitinfo()</b> は即時に結果を返します。</p>
	 * @param array $set <p>待つシグナルの配列。</p>
	 * @param array $siginfo <p>シグナルについての情報を含む配列が <code>siginfo</code> に設定されます。</p> <p>次の要素は、すべてのシグナルについて設定されます。</p><ul> <li>signo: シグナル番号</li> <li>errno: エラー番号</li> <li>code: シグナルコード</li> </ul> <p>次の要素は、<b><code>SIGCHLD</code></b> シグナルの場合に設定されます。</p><ul> <li>status: 終了値あるいはシグナル</li> <li>utime: 使用したユーザー時間</li> <li>stime: 使用したシステム時間</li> <li>pid: 送信したプロセスの ID</li> <li>uid: 送信したプロセスの実ユーザー ID</li> </ul> <p>次の要素は、<b><code>SIGILL</code></b>、 <b><code>SIGFPE</code></b>、<b><code>SIGSEGV</code></b> および <b><code>SIGBUS</code></b> シグナルの場合に設定されます。</p><ul> <li>addr: 問題が発生したメモリ上の場所</li> </ul> <p>次の要素は、<b><code>SIGPOLL</code></b> シグナルの場合に設定されます。</p><ul> <li>band: バンドイベント</li> <li>fd: ファイル記述子番号</li> </ul>
	 * @return int <p>成功した場合に <b>pcntl_sigwaitinfo()</b> はシグナル番号を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-sigwaitinfo.php
	 * @see pcntl_sigprocmask(), pcntl_sigtimedwait()
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	function pcntl_sigwaitinfo(array $set, array &$siginfo = NULL): int {}

	/**
	 * 指定した errno に対応するシステムのエラーメッセージを取得する
	 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $errno
	 * @return string <p>エラーの説明を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-strerror.php
	 * @see pcntl_get_last_error()
	 * @since PHP 5 >= 5.3.4, PHP 7
	 */
	function pcntl_strerror(int $errno): string {}

	/**
	 * 待つかフォークした子プロセスのステータスを返す
	 * <p>この関数は、子プロセスが終了する・ カレントのプロセスを終了させるシグナルが送信される・シグナル処理関数を コールするシグナルが送信される のいずれかが発生するまでカレントのプロセスの実行を中断します。 子プロセスが、 コール時に 既に終了している場合("ゾンビ"プロセスと呼ばれます)、この関数は 直ちに処理を返します。子プロセスにより使用される全てのシステム リソースは、解放されます。waitpid のシステムでの動作に関する詳細は、 システムの wait(2) についての man ページを参照ください。</p><p><b>注意</b>:</p><p>この関数は、<code>pid</code> に <i>-1</i> を指定し、<code>options</code> を何も設定せずに <code>pcntl_waitpid()</code> をコールするのと等価です。</p>
	 * @param int $status <p><b>pcntl_wait()</b> は、パラメータ <code>status</code> の中にステータス情報を保存します。 このステータスは、次の関数を用いて評価可能です。 <code>pcntl_wifexited()</code>、 <code>pcntl_wifstopped()</code>、 <code>pcntl_wifsignaled()</code>、 <code>pcntl_wexitstatus()</code>、 <code>pcntl_wtermsig()</code> および <code>pcntl_wstopsig()</code> 。</p>
	 * @param int $options <p>システム上で wait3 が使用可能な場合 (ほとんどの BSD 系システムが 該当します)、オプションのパラメータ <code>options</code> を使用可能です。このパラメータが指定されない場合、wait はシステムコールに 対して使用されます。wait3 が使用できない場合、<code>options </code> に値を設定しても何の影響も及ぼしません。 <code>options</code> の値は、次の 2 つのグローバル定数の ゼロまたはそれ以上の論理和です。</p> <b><code>options</code> のとりうる値</b>   <i>WNOHANG</i>  子プロセスが終了していない場合に直ちに処理を返します。    <i>WUNTRACED</i>  停止した子プロセスの場合に処理を返します。 そして、ステータスは報告されません。
	 * @param array $rusage
	 * @return int <p><b>pcntl_wait()</b> は、終了した子プロセスの プロセス ID を返します。エラーの場合は -1、(wait3 が使用可能なシステムで) WNOHANG が使用され、子プロセスが利用できない場合に 0 を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-wait.php
	 * @see pcntl_fork(), pcntl_signal(), pcntl_wifexited(), pcntl_wifstopped(), pcntl_wifsignaled(), pcntl_wexitstatus(), pcntl_wtermsig(), pcntl_wstopsig(), pcntl_waitpid()
	 * @since PHP 5, PHP 7
	 */
	function pcntl_wait(int &$status, int $options = 0, array &$rusage = NULL): int {}

	/**
	 * 待つかフォークした子プロセスのステータスを返す
	 * <p>引数 <code>pid</code> で指定した子プロセスが終了する・ 現在のプロセスを終了させるシグナルが送信される・シグナル処理関数を コールするシグナルが送信される のいずれかが発生するまで、現在のプロセスの実行を中断します。</p><p><code>pid</code> でリクエストされた子プロセスが、 コール時に 既に終了している場合("ゾンビ"プロセスと呼ばれます)、この関数は 直ちに処理を返します。子プロセスにより使用される全てのシステム リソースは、解放されます。waitpid のシステムでの動作に関する詳細は、 システムの waitpid(2) についての man ページを参照ください。</p>
	 * @param int $pid <p><code>pid</code> の値は、次のどれかとなります。</p> <b><code>pid</code> のとりうる値</b>   <i>&lt; -1</i>  プロセスグループ ID が <code>pid</code> の絶対値に等しい 子プロセスを待ちます。    <i>-1</i>  全ての子プロセスを待ちます。これは、wait 関数の動作と同じです。    <i>0</i>  プロセスグループ ID がコール側のプロセスと等しい子プロセスを 待ちます。    <i>&gt; 0</i>  プロセス ID が <code>pid</code> の値に等しい 子プロセスを待ちます。      <p><b>注意</b>:</p> <p><i>-1</i> を <code>pid</code> に指定した際の動きは、 <code>pcntl_wait()</code> の機能と (<code>options</code> を除いて) 同じです。</p>
	 * @param int $status <p><b>pcntl_waitpid()</b> は、パラメータ <code>status</code> の中にステータス情報を保存します。 このステータスは、次の関数を用いて評価可能です。 <code>pcntl_wifexited()</code>、 <code>pcntl_wifstopped()</code>、 <code>pcntl_wifsignaled()</code>、 <code>pcntl_wexitstatus()</code>、 <code>pcntl_wtermsig()</code> および <code>pcntl_wstopsig()</code> 。</p>
	 * @param int $options <p><code>options</code> の値は、次の 2 つのグローバル定数の ゼロまたはそれ以上の論理和です。</p> <b><code>options</code> のとりうる値</b>   <i>WNOHANG</i>  子プロセスが終了していない場合に直ちに処理を返します。    <i>WUNTRACED</i>  停止した子プロセスの場合に処理を返します。そして、ステータス は報告されません。
	 * @param array $rusage
	 * @return int <p><b>pcntl_waitpid()</b> は、終了した子プロセスの プロセス ID を返します。エラーの場合は -1、<b><code>WNOHANG</code></b> が使用され、 子プロセスが利用できない場合に 0 を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-waitpid.php
	 * @see pcntl_fork(), pcntl_signal(), pcntl_wifexited(), pcntl_wifstopped(), pcntl_wifsignaled(), pcntl_wexitstatus(), pcntl_wtermsig(), pcntl_wstopsig()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function pcntl_waitpid(int $pid, int &$status, int $options = 0, array &$rusage = NULL): int {}

	/**
	 * 終了した子プロセスのリターンコードを返す
	 * <p>終了した子プロセスのリターンコードを返します。この関数は、 <code>pcntl_wifexited()</code> が <b><code>TRUE</code></b> を返す場合のみ 有用です。</p>
	 * @param int $status <p>パラメータ <code>status</code> は、 <code>pcntl_waitpid()</code> が正常にコールされた際に得られます。</p>
	 * @return int <p>リターンコードを表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-wexitstatus.php
	 * @see pcntl_waitpid(), pcntl_wifexited()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function pcntl_wexitstatus(int $status): int {}

	/**
	 * ステータスコードが正常終了を表しているかどうかを調べる
	 * <p>ステータスコードが正常終了を表しているかどうかを調べます。</p>
	 * @param int $status <p>パラメータ <code>status</code> は、 <code>pcntl_waitpid()</code> が正常にコールされた際に得られます。</p>
	 * @return bool <p>子プロセスのステータスコードが終了に成功した場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-wifexited.php
	 * @see pcntl_waitpid(), pcntl_wexitstatus()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function pcntl_wifexited(int $status): bool {}

	/**
	 * ステータスコードがシグナルによる終了を表しているかどうかを調べる
	 * <p>子プロセスが終了した原因が、 シグナルが捕捉されなかったことであるかどうかを調べます。 caught.</p>
	 * @param int $status <p>パラメータ <code>status</code> は、 <code>pcntl_waitpid()</code> が正常にコールされた際に得られます。</p>
	 * @return bool <p>捕捉されなかったシグナルのせいで子プロセスが終了した場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-wifsignaled.php
	 * @see pcntl_waitpid(), pcntl_signal()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function pcntl_wifsignaled(int $status): bool {}

	/**
	 * 子プロセスが現在停止しているかどうかを調べる
	 * <p>リターンを生じた子プロセスが現在停止しているかどうかを調べます。 この関数は、<code>pcntl_waitpid()</code> のコールが オプション <i>WUNTRACED</i> を用いている場合のみ使用可能です。</p>
	 * @param int $status <p>パラメータ <code>status</code> は、 <code>pcntl_waitpid()</code> が正常にコールされた際に得られます。</p>
	 * @return bool <p>リターンを生じた子プロセスが現在停止している場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-wifstopped.php
	 * @see pcntl_waitpid()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function pcntl_wifstopped(int $status): bool {}

	/**
	 * 子プロセスを停止させたシグナルを返す
	 * <p>子プロセスを停止させたシグナル番号を返します。この関数は、 <code>pcntl_wifstopped()</code> が <b><code>TRUE</code></b> を返す場合のみ有用です。</p>
	 * @param int $status <p>パラメータ <code>status</code> は、 <code>pcntl_waitpid()</code> が正常にコールされた際に得られます。</p>
	 * @return int <p>シグナル番号を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-wstopsig.php
	 * @see pcntl_waitpid(), pcntl_wifstopped()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function pcntl_wstopsig(int $status): int {}

	/**
	 * 子プロセスを終了させたシグナルを返す
	 * <p>子プロセスを終了させたシグナル番号を返します。この関数は、 <code>pcntl_wifsignaled()</code> が <b><code>TRUE</code></b> を返す場合のみ有用です。</p>
	 * @param int $status <p>パラメータ <code>status</code> は、 <code>pcntl_waitpid()</code> が正常にコールされた際に得られます。</p>
	 * @return int <p>シグナル番号を表す整数値を返します。</p>
	 * @link https://php.net/manual/ja/function.pcntl-wtermsig.php
	 * @see pcntl_waitpid(), pcntl_signal(), pcntl_wifsignaled()
	 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
	 */
	function pcntl_wtermsig(int $status): int {}

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('BUS_ADRALN', 1);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('BUS_ADRERR', 2);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('BUS_OBJERR', 3);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('CLD_CONTINUED', 6);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('CLD_DUMPED', 3);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('CLD_EXITED', 1);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('CLD_KILLED', 2);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('CLD_STOPPED', 5);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('CLD_TRAPPED', 4);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('FPE_FLTDIV', 3);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('FPE_FLTINV', 7);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('FPE_FLTOVF', 4);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('FPE_FLTRES', 6);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('FPE_FLTSUB', 8);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('FPE_FLTUND', 7);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('FPE_INTDIV', 1);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('FPE_INTOVF', 2);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('ILL_BADSTK', 8);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('ILL_COPROC', 7);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('ILL_ILLADR', 3);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('ILL_ILLOPC', 1);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('ILL_ILLOPN', 2);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('ILL_ILLTRP', 4);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('ILL_PRVOPC', 5);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('ILL_PRVREG', 6);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('POLL_ERR', 4);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('POLL_HUP', 6);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('POLL_IN', 1);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('POLL_MSG', 3);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('POLL_OUT', 2);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('POLL_PRI', 5);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SEGV_ACCERR', 2);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SEGV_MAPERR', 1);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SI_ASYNCIO', -4);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SI_KERNEL', 128);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SI_MSGGQ', null);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SI_NOINFO', null);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SI_QUEUE', -1);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SI_SIGIO', -5);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SI_TIMER', -2);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SI_TKILL', -6);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SI_USER', 0);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SIG_BLOCK', 0);

	define('SIG_DFL', 0);

	define('SIG_ERR', -1);

	define('SIG_IGN', 1);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SIG_SETMASK', 2);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('SIG_UNBLOCK', 1);

	define('SIGABRT', 6);

	define('SIGALRM', 14);

	define('SIGBABY', 31);

	define('SIGBUS', 7);

	define('SIGCHLD', 17);

	define('SIGCLD', 17);

	define('SIGCONT', 18);

	define('SIGFPE', 8);

	define('SIGHUP', 1);

	define('SIGILL', 4);

	define('SIGINT', 2);

	define('SIGIO', 29);

	define('SIGIOT', 6);

	define('SIGKILL', 9);

	define('SIGPIPE', 13);

	define('SIGPOLL', 29);

	define('SIGPROF', 27);

	define('SIGPWR', 30);

	define('SIGQUIT', 3);

	define('SIGSEGV', 11);

	define('SIGSTKFLT', 16);

	define('SIGSTOP', 19);

	define('SIGSYS', 31);

	define('SIGTERM', 15);

	define('SIGTRAP', 5);

	define('SIGTSTP', 20);

	define('SIGTTIN', 21);

	define('SIGTTOU', 22);

	define('SIGURG', 23);

	define('SIGUSR1', 10);

	define('SIGUSR2', 12);

	define('SIGVTALRM', 26);

	define('SIGWINCH', 28);

	define('SIGXCPU', 24);

	define('SIGXFSZ', 25);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('TRAP_BRKPT', 1);

	/**
	 * PHP 5.3.0 以降で使用可能です。
	 */
	define('TRAP_TRACE', 2);

	define('WNOHANG', 1);

	define('WUNTRACED', 2);

}
