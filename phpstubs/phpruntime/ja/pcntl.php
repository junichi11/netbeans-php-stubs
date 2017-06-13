<?php

// Start of pcntl v.7.1.5

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 現在実行中のプロセスをフォークする
 * @link http://php.net/manual/ja/function.pcntl-fork.php
 * @return int 成功時に、子プロセスの PID が親プロセスの実行スレッドに返され、
 * 子プロセスの実行スレッドには 0 が返されます。失敗した場合、親プロセスの
 * コンテキストに -1 が返され、子プロセスは生成されずに、PHP のエラーが
 * 出力されます。
 */
function pcntl_fork(): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 待つかフォークした子プロセスのステータスを返す
 * @link http://php.net/manual/ja/function.pcntl-waitpid.php
 * @param int $pid <p>
 * <i>pid</i> の値は、次のどれかとなります。
 * <table>
 * <i>pid</i> のとりうる値
 * <tr valign="top">
 * <td>&lt; -1</td>
 * <td>
 * プロセスグループ ID が <i>pid</i> の絶対値に等しい
 * 子プロセスを待ちます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>-1</td>
 * <td>
 * 全ての子プロセスを待ちます。これは、wait 関数の動作と同じです。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td>
 * プロセスグループ ID がコール側のプロセスと等しい子プロセスを
 * 待ちます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>&gt; 0</td>
 * <td>
 * プロセス ID が <i>pid</i> の値に等しい
 * 子プロセスを待ちます。
 * </td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * -1 を <i>pid</i> に指定した際の動きは、
 * <b>pcntl_wait</b> の機能と
 * (<i>options</i> を除いて) 同じです。
 * </p>
 * @param int $status <p>
 * <b>pcntl_waitpid</b> は、パラメータ
 * <i>status</i> の中にステータス情報を保存します。
 * このステータスは、次の関数を用いて評価可能です。
 * <b>pcntl_wifexited</b>、
 * <b>pcntl_wifstopped</b>、
 * <b>pcntl_wifsignaled</b>、
 * <b>pcntl_wexitstatus</b>、
 * <b>pcntl_wtermsig</b> および
 * <b>pcntl_wstopsig</b> 。
 * </p>
 * @param int $options [optional] <p>
 * <i>options</i> の値は、次の 2 つのグローバル定数の
 * ゼロまたはそれ以上の論理和です。
 * <table>
 * <i>options</i> のとりうる値
 * <tr valign="top">
 * <td>WNOHANG</td>
 * <td>
 * 子プロセスが終了していない場合に直ちに処理を返します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>WUNTRACED</td>
 * <td>
 * 停止した子プロセスの場合に処理を返します。そして、ステータス
 * は報告されません。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return int <b>pcntl_waitpid</b> は、終了した子プロセスの
 * プロセス ID を返します。エラーの場合は -1、<b>WNOHANG</b> が使用され、
 * 子プロセスが利用できない場合に 0 を返します。
 */
function pcntl_waitpid(int $pid, int &$status, int $options = 0): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * 待つかフォークした子プロセスのステータスを返す
 * @link http://php.net/manual/ja/function.pcntl-wait.php
 * @param int $status <p>
 * <b>pcntl_wait</b> は、パラメータ
 * <i>status</i> の中にステータス情報を保存します。
 * このステータスは、次の関数を用いて評価可能です。
 * <b>pcntl_wifexited</b>、
 * <b>pcntl_wifstopped</b>、
 * <b>pcntl_wifsignaled</b>、
 * <b>pcntl_wexitstatus</b>、
 * <b>pcntl_wtermsig</b> および
 * <b>pcntl_wstopsig</b> 。
 * </p>
 * @param int $options [optional] <p>
 * システム上で wait3 が使用可能な場合 (ほとんどの BSD 系システムが
 * 該当します)、オプションのパラメータ <i>options</i>
 * を使用可能です。このパラメータが指定されない場合、wait はシステムコールに
 * 対して使用されます。wait3 が使用できない場合、<i>options
 * </i> に値を設定しても何の影響も及ぼしません。
 * <i>options</i> の値は、次の 2 つのグローバル定数の
 * ゼロまたはそれ以上の論理和です。
 * <table>
 * <i>options</i> のとりうる値
 * <tr valign="top">
 * <td>WNOHANG</td>
 * <td>
 * 子プロセスが終了していない場合に直ちに処理を返します。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>WUNTRACED</td>
 * <td>
 * 停止した子プロセスの場合に処理を返します。
 * そして、ステータスは報告されません。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return int <b>pcntl_wait</b> は、終了した子プロセスの
 * プロセス ID を返します。エラーの場合は -1、(wait3 が使用可能なシステムで)
 * WNOHANG が使用され、子プロセスが利用できない場合に 0 を返します。
 */
function pcntl_wait(int &$status, int $options = 0): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * シグナルハンドラを設定する
 * @link http://php.net/manual/ja/function.pcntl-signal.php
 * @param int $signo <p>
 * シグナル番号。
 * </p>
 * @param mixed $signinfo
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pcntl_signal(int $signo, $signinfo): bool {}

/**
 * @param $signo
 */
function pcntl_signal_get_handler($signo) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * ペンディングシグナル用のハンドラをコールする
 * @link http://php.net/manual/ja/function.pcntl-signal-dispatch.php
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pcntl_signal_dispatch(): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ステータスコードが正常終了を表しているかどうかを調べる
 * @link http://php.net/manual/ja/function.pcntl-wifexited.php
 * @param int $status パラメータ <i>status</i> は、
 * <b>pcntl_waitpid</b> が正常にコールされた際に得られます。</p>
 * @return bool 子プロセスのステータスコードが終了に成功した場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function pcntl_wifexited(int $status): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 子プロセスが現在停止しているかどうかを調べる
 * @link http://php.net/manual/ja/function.pcntl-wifstopped.php
 * @param int $status パラメータ <i>status</i> は、
 * <b>pcntl_waitpid</b> が正常にコールされた際に得られます。</p>
 * @return bool リターンを生じた子プロセスが現在停止している場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function pcntl_wifstopped(int $status): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * ステータスコードがシグナルによる終了を表しているかどうかを調べる
 * @link http://php.net/manual/ja/function.pcntl-wifsignaled.php
 * @param int $status パラメータ <i>status</i> は、
 * <b>pcntl_waitpid</b> が正常にコールされた際に得られます。</p>
 * @return bool 捕捉されなかったシグナルのせいで子プロセスが終了した場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function pcntl_wifsignaled(int $status): bool {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 終了した子プロセスのリターンコードを返す
 * @link http://php.net/manual/ja/function.pcntl-wexitstatus.php
 * @param int $status パラメータ <i>status</i> は、
 * <b>pcntl_waitpid</b> が正常にコールされた際に得られます。</p>
 * @return int リターンコードを表す整数値を返します。
 */
function pcntl_wexitstatus(int $status): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 子プロセスを終了させたシグナルを返す
 * @link http://php.net/manual/ja/function.pcntl-wtermsig.php
 * @param int $status パラメータ <i>status</i> は、
 * <b>pcntl_waitpid</b> が正常にコールされた際に得られます。</p>
 * @return int シグナル番号を表す整数値を返します。
 */
function pcntl_wtermsig(int $status): int {}

/**
 * (PHP 4 &gt;= 4.1.0, PHP 5, PHP 7)<br/>
 * 子プロセスを停止させたシグナルを返す
 * @link http://php.net/manual/ja/function.pcntl-wstopsig.php
 * @param int $status パラメータ <i>status</i> は、
 * <b>pcntl_waitpid</b> が正常にコールされた際に得られます。</p>
 * @return int シグナル番号を返します。
 */
function pcntl_wstopsig(int $status): int {}

/**
 * (PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)<br/>
 * 現在のプロセス空間で指定したプログラムを実行する
 * @link http://php.net/manual/ja/function.pcntl-exec.php
 * @param string $path <p>
 * <i>path</i> は、バイナリ実行ファイルへのパスか、
 * あるいは有効な実行ファイルを指す shebang (例: #!/usr/local/bin/perl)
 * が一行目に存在するスクリプトへのパスである必要があります。
 * 詳細な情報については、システムの man ページで execve(2) を参照ください。
 * </p>
 * @param array $args [optional] <p>
 * <i>args</i>
 * は、プログラムに渡す引数文字列の配列です。
 * </p>
 * @param array $envs [optional] <p>
 * <i>envs</i> は、プログラムに渡す環境変数の配列です。
 * この配列は name => value のような形式で、key が環境変数名・value が
 * その値となります。
 * </p>
 * @return bool エラー時に <b>FALSE</b> を返し、成功時には何も返しません。
 */
function pcntl_exec(string $path, array $args = null, array $envs = null): bool {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * シグナルを送信するアラームを設定する
 * @link http://php.net/manual/ja/function.pcntl-alarm.php
 * @param int $seconds <p>
 * 待機する秒数。<i>seconds</i> がゼロの場合は、
 * 新しいアラームは作成されません。
 * </p>
 * @return int それまでに予定されていたアラームの予定時刻までの秒数を返します。
 * 事前に予定されていたアラームがなかった場合には
 * 0 を返します。
 */
function pcntl_alarm(int $seconds): int {}

/**
 * (PHP 5 &gt;= 5.3.4, PHP 7)<br/>
 * 直近の pcntl 関数が失敗したときのエラー番号を取得する
 * @link http://php.net/manual/ja/function.pcntl-get-last-error.php
 * @return int エラーコードを返します。
 */
function pcntl_get_last_error(): int {}

/**
 * (PHP 5 &gt;= 5.3.4, PHP 7)<br/>
 * <b>pcntl_get_last_error</b> のエイリアス
 * @link http://php.net/manual/ja/function.pcntl-errno.php
 */
function pcntl_errno() {}

/**
 * (PHP 5 &gt;= 5.3.4, PHP 7)<br/>
 * 指定した errno に対応するシステムのエラーメッセージを取得する
 * @link http://php.net/manual/ja/function.pcntl-strerror.php
 * @param int $errno <p>
 * </p>
 * @return string エラーの説明を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function pcntl_strerror(int $errno): string {}

/**
 * (PHP 5, PHP 7)<br/>
 * プロセスの優先度を取得する
 * @link http://php.net/manual/ja/function.pcntl-getpriority.php
 * @param int $pid [optional] <p>
 * 指定しなかった場合は、現在のプロセスの PID を使用します。
 * </p>
 * @param int $process_identifier [optional] <p>
 * <b>PRIO_PGRP</b>、<b>PRIO_USER</b>
 * あるいは <b>PRIO_PROCESS</b> のいずれか。
 * </p>
 * @return int <b>pcntl_getpriority</b> はプロセスの優先度を返します。
 * エラー時には <b>FALSE</b> を返します。数字が小さいほど、優先順位は上となります。
 */
function pcntl_getpriority(int $pid = 'getmypid()', int $process_identifier = PRIO_PROCESS): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * プロセスの優先度を変更する
 * @link http://php.net/manual/ja/function.pcntl-setpriority.php
 * @param int $priority <p>
 * <i>priority</i> は一般的には
 * -20 から 20 までの値です。
 * デフォルトの優先度は 0 で、数字が小さいほど
 * 優先順位が上となります。システムの型やカーネルの
 * バージョンによって優先度の扱いは違うので、詳細についてはシステムの
 * setpriority(2) の man ページを参照ください。
 * </p>
 * @param int $pid [optional] <p>
 * 指定しない場合は、現在のプロセスの PID を使用します。
 * </p>
 * @param int $process_identifier [optional] <p>
 * <b>PRIO_PGRP</b>、<b>PRIO_USER</b>
 * あるいは <b>PRIO_PROCESS</b> のいずれかです。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pcntl_setpriority(int $priority, int $pid = 'getmypid()', int $process_identifier = PRIO_PROCESS): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * ブロックされたシグナルを設定あるいは取得する
 * @link http://php.net/manual/ja/function.pcntl-sigprocmask.php
 * @param int $how <p>
 * <b>pcntl_sigprocmask</b> の挙動を設定します。以下の値が設定できます。
 * <b>SIG_BLOCK</b>:
 * 現在ブロックされているシグナルにシグナルを追加する
 * <b>SIG_UNBLOCK</b>:
 * 現在ブロックされているシグナルからシグナルを削除する
 * <b>SIG_SETMASK</b>:
 * 現在ブロックされているシグナルを、指定したもので置き換える
 * </p>
 * @param array $set <p>
 * シグナルのリスト。
 * </p>
 * @param array $oldset [optional] <p>
 * <i>oldset</i> パラメータには、
 * それまでにブロックされていたシグナルのリストが設定されます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function pcntl_sigprocmask(int $how, array $set, array &$oldset = null): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * シグナルを待つ
 * @link http://php.net/manual/ja/function.pcntl-sigwaitinfo.php
 * @param array $set <p>
 * 待つシグナルの配列。
 * </p>
 * @param array $siginfo [optional] <p>
 * シグナルについての情報を含む配列が <i>siginfo</i>
 * に設定されます。
 * </p>
 * <p>
 * 次の要素は、すべてのシグナルについて設定されます。
 * signo: シグナル番号
 * errno: エラー番号
 * code: シグナルコード
 * </p>
 * <p>
 * 次の要素は、<b>SIGCHLD</b> シグナルの場合に設定されます。
 * status: 終了値あるいはシグナル
 * utime: 使用したユーザー時間
 * stime: 使用したシステム時間
 * pid: 送信したプロセスの ID
 * uid: 送信したプロセスの実ユーザー ID
 * </p>
 * <p>
 * 次の要素は、<b>SIGILL</b>、
 * <b>SIGFPE</b>、<b>SIGSEGV</b> および
 * <b>SIGBUS</b> シグナルの場合に設定されます。
 * addr: 問題が発生したメモリ上の場所
 * </p>
 * <p>
 * 次の要素は、<b>SIGPOLL</b> シグナルの場合に設定されます。
 * band: バンドイベント
 * fd: ファイル記述子番号
 * </p>
 * @return int 成功した場合に <b>pcntl_sigwaitinfo</b> はシグナル番号を返します。
 */
function pcntl_sigwaitinfo(array $set, array &$siginfo = null): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
 * タイムアウトつきでシグナルを待つ
 * @link http://php.net/manual/ja/function.pcntl-sigtimedwait.php
 * @param array $set <p>
 * 待つシグナルの配列。
 * </p>
 * @param array $siginfo [optional] <p>
 * シグナルについての情報を含む配列が <i>siginfo</i>
 * に設定されます。
 * <b>pcntl_sigwaitinfo</b> を参照ください。
 * </p>
 * @param int $seconds [optional] <p>
 * タイムアウトの秒数。
 * </p>
 * @param int $nanoseconds [optional] <p>
 * タイムアウトのナノ秒数。
 * </p>
 * @return int 成功した場合に <b>pcntl_sigtimedwait</b> はシグナル番号を返します。
 */
function pcntl_sigtimedwait(array $set, array &$siginfo = null, int $seconds = 0, int $nanoseconds = 0): int {}

/**
 * @param $status
 */
function pcntl_wifcontinued($status) {}

/**
 * @param $on
 */
function pcntl_async_signals($on) {}

define ('WNOHANG', 1);
define ('WUNTRACED', 2);
define ('WCONTINUED', 8);
define ('SIG_IGN', 1);
define ('SIG_DFL', 0);
define ('SIG_ERR', -1);
define ('SIGHUP', 1);
define ('SIGINT', 2);
define ('SIGQUIT', 3);
define ('SIGILL', 4);
define ('SIGTRAP', 5);
define ('SIGABRT', 6);
define ('SIGIOT', 6);
define ('SIGBUS', 7);
define ('SIGFPE', 8);
define ('SIGKILL', 9);
define ('SIGUSR1', 10);
define ('SIGSEGV', 11);
define ('SIGUSR2', 12);
define ('SIGPIPE', 13);
define ('SIGALRM', 14);
define ('SIGTERM', 15);
define ('SIGSTKFLT', 16);
define ('SIGCLD', 17);
define ('SIGCHLD', 17);
define ('SIGCONT', 18);
define ('SIGSTOP', 19);
define ('SIGTSTP', 20);
define ('SIGTTIN', 21);
define ('SIGTTOU', 22);
define ('SIGURG', 23);
define ('SIGXCPU', 24);
define ('SIGXFSZ', 25);
define ('SIGVTALRM', 26);
define ('SIGPROF', 27);
define ('SIGWINCH', 28);
define ('SIGPOLL', 29);
define ('SIGIO', 29);
define ('SIGPWR', 30);
define ('SIGSYS', 31);
define ('SIGBABY', 31);
define ('PRIO_PGRP', 1);
define ('PRIO_USER', 2);
define ('PRIO_PROCESS', 0);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SIG_BLOCK', 0);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SIG_UNBLOCK', 1);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SIG_SETMASK', 2);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SI_USER', 0);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SI_KERNEL', 128);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SI_QUEUE', -1);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SI_TIMER', -2);
define ('SI_MESGQ', -3);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SI_ASYNCIO', -4);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SI_SIGIO', -5);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SI_TKILL', -6);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('CLD_EXITED', 1);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('CLD_KILLED', 2);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('CLD_DUMPED', 3);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('CLD_TRAPPED', 4);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('CLD_STOPPED', 5);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('CLD_CONTINUED', 6);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('TRAP_BRKPT', 1);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('TRAP_TRACE', 2);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('POLL_IN', 1);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('POLL_OUT', 2);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('POLL_MSG', 3);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('POLL_ERR', 4);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('POLL_PRI', 5);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('POLL_HUP', 6);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('ILL_ILLOPC', 1);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('ILL_ILLOPN', 2);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('ILL_ILLADR', 3);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('ILL_ILLTRP', 4);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('ILL_PRVOPC', 5);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('ILL_PRVREG', 6);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('ILL_COPROC', 7);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('ILL_BADSTK', 8);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('FPE_INTDIV', 1);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('FPE_INTOVF', 2);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('FPE_FLTDIV', 3);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('FPE_FLTOVF', 4);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('FPE_FLTUND', 7);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('FPE_FLTRES', 6);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('FPE_FLTINV', 7);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('FPE_FLTSUB', 8);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SEGV_MAPERR', 1);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('SEGV_ACCERR', 2);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('BUS_ADRALN', 1);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('BUS_ADRERR', 2);

/**
 * PHP 5.3.0 以降で使用可能です。
 * @link http://php.net/manual/ja/pcntl.constants.php
 */
define ('BUS_OBJERR', 3);
define ('PCNTL_EINTR', 4);
define ('PCNTL_ECHILD', 10);
define ('PCNTL_EINVAL', 22);
define ('PCNTL_EAGAIN', 11);
define ('PCNTL_ESRCH', 3);
define ('PCNTL_EACCES', 13);
define ('PCNTL_EPERM', 1);
define ('PCNTL_ENOMEM', 12);
define ('PCNTL_E2BIG', 7);
define ('PCNTL_EFAULT', 14);
define ('PCNTL_EIO', 5);
define ('PCNTL_EISDIR', 21);
define ('PCNTL_ELIBBAD', 80);
define ('PCNTL_ELOOP', 40);
define ('PCNTL_EMFILE', 24);
define ('PCNTL_ENAMETOOLONG', 36);
define ('PCNTL_ENFILE', 23);
define ('PCNTL_ENOENT', 2);
define ('PCNTL_ENOEXEC', 8);
define ('PCNTL_ENOTDIR', 20);
define ('PCNTL_ETXTBSY', 26);

// End of pcntl v.7.1.5
?>
