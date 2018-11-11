<?php



/**
 * 中断したサービスを再開する
 * <p>指定した名前の、中断しているサービスを再開します。管理者権限が必要です。</p>
 * @param string $servicename <p>サービスの短い名前。</p>
 * @param string $machine <p>マシン名。省略可能で、省略した場合はローカルマシンを使います。</p>
 * @return int <p>成功した場合に <b><code>WIN32_NO_ERROR</code></b> を返します。パラメータに問題がある場合は <b><code>FALSE</code></b>、失敗した場合は Win32 エラーコード を返します。</p>
 * @link http://php.net/manual/ja/function.win32-continue-service.php
 * @see win32_start_service()
 * @since PECL win32service SVN
 */
function win32_continue_service(string $servicename, string $machine = NULL): int {}

/**
 * SCM データベースに新しいサービスのエントリを作成する
 * @param array $details <p>サービスの詳細情報を含む配列。</p>  <code>service</code>   <p>サービスの短い名前。<i>net</i> コマンドでサービスを 制御する際に、この名前を使用します。この名前は一意である（同名の サービスが 2 つ存在することがない）必要があり、スペースを含む 名前は可能な限り避けるべきです。</p>   <code>display</code>   <p>サービスの表示名。これは、サービスアプレットに表示される名前です。</p>   <code>description</code>   <p>サービスの長い名前。これは「サービス」アプレットで表示される名前です。</p>   <code>user</code>   <p>サービスを実行するユーザー名。指定しなかった場合、サービスは LocalSystem アカウントで実行されます。ユーザー名が指定された場合、 password も指定する必要があります。</p>   <code>password</code>   <p><code>user</code> に対応するパスワード。</p>   <code>path</code>   <p>サービスの開始時に起動される実行モジュールのフルパス。 指定しなかった場合、現在の PHP プロセスへのパスが使用されます。</p>   <code>params</code>   <p>サービスの開始時に渡されるコマンドラインパラメータ。 PHP スクリプトをサービスとして実行したい場合は、最初のパラメータは 実行するスクリプトへのフルパスとなります。 スクリプト名やパスにスペースを含む場合は、PHP スクリプトへのフルパスを <i>"</i> で囲まなければなりません。</p>   <code>load_order</code>   <p>load_order を制御します。現時点では完全にはサポートされていません。</p>   <code>svc_type</code>   <p>サービスの型を指定します。指定しなかった場合、デフォルト値は <b><code>WIN32_SERVICE_WIN32_OWN_PROCESS</code></b> です。 よくわからない場合はこの値を変更しないでください。</p>   <code>start_type</code>   <p>サービスをどのように開始させるかを指定します。デフォルトは <b><code>WIN32_SERVICE_AUTO_START</code></b> で、これは マシンの起動時にサービスを開始させることを意味します。</p>   <code>error_control</code>   <p>サービスに問題が発生した際にとるべき行動を SCM に指示します。 デフォルトは <b><code>WIN32_SERVER_ERROR_IGNORE</code></b> です。 この値を変更することは、現時点では完全にはサポートされていません。</p>   <code>delayed_start</code>   <p><code>delayed_start</code> を <b><code>TRUE</code></b> にすると、 他の自動起動サービスが開始したあとで少し間をおいてサービスが起動するようになります。</p> <p>任意のサービスに対してこれを指定することができますが、そのサービスの <code>start_type</code> が <b><code>WIN32_SERVICE_AUTO_START</code></b> でない場合は何の効果も及ぼしません。</p> <p>この設定が使えるのは、Windows Vista および Windows Server 2008 以降のみです。</p>   <code>base_priority</code>   <p>プロセッサの使用状況への影響を考慮すると、 ベース優先度は通常より低めに設定しておかなければなりません。</p> <p><code>base_priority</code> には、 Win32 ベース優先度クラス で定義された定数のいずれかを設定します。</p>
 * @param string $machine <p>オプションで、サービスを作成したいマシン名を指定します。 指定しなかった場合は、ローカルマシンを使用します。</p>
 * @return mixed <p>成功した場合に <b><code>WIN32_NO_ERROR</code></b> を返します。パラメータに問題がある場合は <b><code>FALSE</code></b>、失敗した場合は Win32 エラーコード を返します。</p>
 * @link http://php.net/manual/ja/function.win32-create-service.php
 * @see win32_delete_service()
 * @since PECL win32service SVN
 */
function win32_create_service(array $details, string $machine = NULL) {}

/**
 * SCM データベースからサービスのエントリを削除する
 * <p>SCM データベースからサービスの削除を試みます。管理者権限が必要です。</p><p>この関数は、単にサービスに削除マークをつけるだけです。もし他のプロセス （サービスアプレットなど）が開かれた場合、削除処理はそのアプリケーションが 終了するまで延期されます。サービスに削除マークがつけられると、それ以降は 同じサービスに対する削除の試行は失敗します。また同名の新規サービスを作成 しようとする処理も失敗します。</p>
 * @param string $servicename <p>サービスの短い名前。</p>
 * @param string $machine <p>オプションのマシン名。指定しなかった場合、ローカルマシンが使用されます。</p>
 * @return mixed <p>成功した場合に <b><code>WIN32_NO_ERROR</code></b> を返します。パラメータに問題がある場合は <b><code>FALSE</code></b>、失敗した場合は Win32 エラーコード を返します。</p>
 * @link http://php.net/manual/ja/function.win32-delete-service.php
 * @see win32_create_service()
 * @since PECL win32service SVN
 */
function win32_delete_service(string $servicename, string $machine = NULL) {}

/**
 * サービスに送信された直近の制御メッセージを返す
 * <p>サービスプロセスに送信された、直近の制御コードを返します。 サービスの実行中は、サービスを停止させる必要がないかを調べるために 定期的にこれをチェックすべきです。</p>
 * @return int <p>制御コード定数を返します。以下の Win32Service サービス制御メッセージ定数 のひとつです。 <b><code>WIN32_SERVICE_CONTROL_CONTINUE</code></b>、 <b><code>WIN32_SERVICE_CONTROL_INTERROGATE</code></b>、 <b><code>WIN32_SERVICE_CONTROL_PAUSE</code></b>、 <b><code>WIN32_SERVICE_CONTROL_PRESHUTDOWN</code></b>、 <b><code>WIN32_SERVICE_CONTROL_SHUTDOWN</code></b>、 <b><code>WIN32_SERVICE_CONTROL_STOP</code></b>。</p>
 * @link http://php.net/manual/ja/function.win32-get-last-control-message.php
 * @see win32_start_service_ctrl_dispatcher()
 * @since PECL win32service SVN
 */
function win32_get_last_control_message(): int {}

/**
 * サービスを中断する
 * <p>指定した名前のサービスを中断します。管理者権限が必要です。</p>
 * @param string $servicename <p>サービスの短い名前。</p>
 * @param string $machine <p>マシン名。省略可能で、省略した場合はローカルマシンを使います。</p>
 * @return int <p>成功した場合に <b><code>WIN32_NO_ERROR</code></b> を返します。パラメータに問題がある場合は <b><code>FALSE</code></b>、失敗した場合は Win32 エラーコード を返します。</p>
 * @link http://php.net/manual/ja/function.win32-pause-service.php
 * @see win32_start_service()
 * @since PECL win32service SVN
 */
function win32_pause_service(string $servicename, string $machine = NULL): int {}

/**
 * サービスの状態を問い合わせる
 * <p>サービスの稼動状況を問い合わせ、情報を配列で返します。</p>
 * @param string $servicename <p>サービスの短い名前。</p>
 * @param string $machine <p>オプションのマシン名。指定しなかった場合、ローカルマシンが使用されます。</p>
 * @return mixed <p>成功した場合に以下の情報を含む配列を返します。パラメータに問題がある場合は <b><code>FALSE</code></b>、失敗した場合は Win32 エラーコード を返します。</p>  <code>ServiceType</code>   <p>dwServiceType Win32Service サービス型のビットマスク を参照ください。</p>   <code>CurrentState</code>   <p>dwCurrentState Win32Service サービスステータス定数 を参照ください。</p>   <code>ControlsAccepted</code>   <p>サービスが許可しているコントロール。 Win32Service サービス制御メッセージが受領されたときのビットマスク を参照ください。</p>   <code>Win32ExitCode</code>   <p>サービスが終了した際にプロセスが返すコード。</p>   <code>ServiceSpecificExitCode</code>   <p>サービスが異常終了した際にイベントログに記録されるコード。</p>   <code>CheckPoint</code>   <p>サービスが終了する際に、現在のチェックポイント番号を保持します。 SCM はこれをいわゆる心拍のように扱い、反応しなくなったサービスを 検出するために使用します。この値は、WaitHint の値と組み合わせて 用いられます。</p>   <code>WaitHint</code>   <p>サービスが終了する際に、WaitHint を checkpoint の値に設定します。 この処理が終了した時点でサービスの終了処理が 100% 完了したことを示します。 これは、進捗状況のインジケータを実装する際に使用します。</p>   <code>ProcessId</code>   <p>Windows のプロセス ID 。0 の場合、プロセスは実行していません。</p>   <code>ServiceFlags</code>   <p>dwServiceFlags Win32Service サービスフラグ定数 を参照ください。</p>
 * @link http://php.net/manual/ja/function.win32-query-service-status.php
 * @since PECL win32service SVN
 */
function win32_query_service_status(string $servicename, string $machine = NULL) {}

/**
 * サービスの状態を更新する
 * <p>SCM に、実行中のサービスの現在の状態を通知します。 この関数のコールは、現在実行中のサービスについてのみ有効です。</p>
 * @param int $status <p>以下のステータスコードのうちのひとつ。 <b><code>WIN32_SERVICE_RUNNING</code></b>、 <b><code>WIN32_SERVICE_STOPPED</code></b>、 <b><code>WIN32_SERVICE_STOP_PENDING</code></b>、 <b><code>WIN32_SERVICE_START_PENDING</code></b>、 <b><code>WIN32_SERVICE_CONTINUE_PENDING</code></b>、 <b><code>WIN32_SERVICE_PAUSE_PENDING</code></b>、 <b><code>WIN32_SERVICE_PAUSED</code></b>。</p>
 * @param int $checkpoint <p>The checkpoint value the service increments periodically to report its progress during a lengthy start, stop, pause, or continue operation. For example, the service should increment this value as it completes each step of its initialization when it is starting up.</p> <p>The <code>checkpoint</code> is only valid when the <code>status</code> is one of <b><code>WIN32_SERVICE_STOP_PENDING</code></b>, <b><code>WIN32_SERVICE_START_PENDING</code></b>, <b><code>WIN32_SERVICE_CONTINUE_PENDING</code></b> or <b><code>WIN32_SERVICE_PAUSE_PENDING</code></b>.</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。パラメータに問題がある場合は <b><code>FALSE</code></b>、失敗した場合は Win32 エラーコード を返します。</p>
 * @link http://php.net/manual/ja/function.win32-set-service-status.php
 * @see win32_start_service_ctrl_dispatcher()
 * @since PECL win32service SVN
 */
function win32_set_service_status(int $status, int $checkpoint = 0): bool {}

/**
 * サービスを開始する
 * <p>指定したサービスの開始を試みます。通常は管理者権限を必要とします。</p>
 * @param string $servicename <p>サービスの短い名前。</p>
 * @param string $machine <p>オプションのマシン名。指定しなかった場合、ローカルマシンが使用されます。</p>
 * @return int <p>成功した場合に <b><code>WIN32_NO_ERROR</code></b> を返します。パラメータに問題がある場合は <b><code>FALSE</code></b>、失敗した場合は Win32 エラーコード を返します。</p>
 * @link http://php.net/manual/ja/function.win32-start-service.php
 * @see win32_stop_service()
 * @since PECL win32service SVN
 */
function win32_start_service(string $servicename, string $machine = NULL): int {}

/**
 * スクリプトを SCM に登録し、指定した名前でサービスとして稼動させる ようにする
 * <p>サービスコントロールマネージャ経由で起動させる際、サービスプロセスは 「チェックイン」を要求され、これによってサービスのモニタリングや 通信の機能を確立します。この関数は、サービスコントロールマネージャとの 低レベル通信を処理するスレッドを生成し、チェックインを実行します。</p><p>サービスが開始したら、サービスプロセスで行わなければならないことは次のふたつです。 まず最初は、サービスが実行中であることをサービスコントロールマネージャに通知することです。 これは、<code>win32_set_service_status()</code> に定数 <b><code>WIN32_SERVICE_RUNNING</code></b> を指定してコールすれば実現できます。 サービスが実際に動き出すまでに何らかの長い処理を要する場合は、定数 <b><code>WIN32_SERVICE_START_PENDING</code></b> を使うこともできます。 もうひとつは、常にサービスコントロールマネージャにチェックインし続け、 サービスをいつ終了させるべきかを確認することです。 これは、定期的に <code>win32_get_last_control_message()</code> をコールして返り値を適切に処理することで実現できます。</p>
 * @param string $name <p>サービスの短い名前。<code>win32_create_service()</code> で登録されたもの。</p>
 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を返します。パラメータに問題がある場合は <b><code>FALSE</code></b>、失敗した場合は Win32 エラーコード を返します。</p>
 * @link http://php.net/manual/ja/function.win32-start-service-ctrl-dispatcher.php
 * @see win32_set_service_status(), win32_get_last_control_message()
 * @since PECL win32service SVN
 */
function win32_start_service_ctrl_dispatcher(string $name) {}

/**
 * サービスを停止する
 * <p>サービスを停止します。管理者権限を必要とします。</p>
 * @param string $servicename <p>サービスの短い名前。</p>
 * @param string $machine <p>オプションのマシン名。指定しなかった場合、ローカルマシンが使用されます。</p>
 * @return int <p>成功した場合に <b><code>WIN32_NO_ERROR</code></b> を返します。パラメータに問題がある場合は <b><code>FALSE</code></b>、失敗した場合は Win32 エラーコード を返します。</p>
 * @link http://php.net/manual/ja/function.win32-stop-service.php
 * @see win32_start_service()
 * @since PECL win32service SVN
 */
function win32_stop_service(string $servicename, string $machine = NULL): int {}

/**
 * WIN32_NORMAL_PRIORITY_CLASS よりも高いけれど WIN32_HIGH_PRIORITY_CLASS よりは低い優先度のプロセス。
 */
define('WIN32_ABOVE_NORMAL_PRIORITY_CLASS', null);

/**
 * WIN32_IDLE_PRIORITY_CLASS よりも高いけれど WIN32_NORMAL_PRIORITY_CLASS よりは低い優先度のプロセス。
 */
define('WIN32_BELOW_NORMAL_PRIORITY_CLASS', null);

/**
 * SCM データベースへのハンドルに適切なアクセス権限がありません。
 */
define('WIN32_ERROR_ACCESS_DENIED', null);

/**
 * 循環依存のサービスを指定しました。
 */
define('WIN32_ERROR_CIRCULAR_DEPENDENCY', null);

/**
 * 指定したデータベースが存在しません。
 */
define('WIN32_ERROR_DATABASE_DOES_NOT_EXIST', null);

/**
 * 他の実行中のサービスがこのサービスに依存しているため、サービスを終了できません。
 */
define('WIN32_ERROR_DEPENDENT_SERVICES_RUNNING', null);

/**
 * その表示名が、サービス制御マネージャーのデータベース内に (データベース名あるいは別の表示名として) 既に存在します。
 */
define('WIN32_ERROR_DUPLICATE_SERVICE_NAME', null);

/**
 * このエラーは、サービスではなくコンソールアプリケーションとしてプログラムを実行したときに返されます。 デバッグ用にコンソールアプリケーションとして実行する場合は、 サービスに固有のコードをコールしないようにしましょう。
 */
define('WIN32_ERROR_FAILED_SERVICE_CONTROLLER_CONNECT', null);

/**
 * サービス状況構造体用のバッファが小さすぎます。構造体には何も書き込まれませんでした。
 */
define('WIN32_ERROR_INSUFFICIENT_BUFFER', null);

/**
 * 指定したサービス状況構造体が無効です。
 */
define('WIN32_ERROR_INVALID_DATA', null);

/**
 * サービス制御マネージャーデータベースへのハンドルが無効です。
 */
define('WIN32_ERROR_INVALID_HANDLE', null);

/**
 * InfoLevel パラメータにサポートしていない値が含まれています。
 */
define('WIN32_ERROR_INVALID_LEVEL', null);

/**
 * 指定したサービス名が無効です。
 */
define('WIN32_ERROR_INVALID_NAME', null);

/**
 * 指定したパラメータが無効です。
 */
define('WIN32_ERROR_INVALID_PARAMETER', null);

/**
 * <code>user</code> で指定したユーザーアカウントが存在しません。 <code>win32_create_service()</code> を参照ください。
 */
define('WIN32_ERROR_INVALID_SERVICE_ACCOUNT', null);

/**
 * 指定した制御コードが無効、あるいはこのサービスでは処理できません。
 */
define('WIN32_ERROR_INVALID_SERVICE_CONTROL', null);

/**
 * サービスのバイナリファイルが見つかりません。
 */
define('WIN32_ERROR_PATH_NOT_FOUND', null);

/**
 * サービスのインスタンスが既に動作中です。
 */
define('WIN32_ERROR_SERVICE_ALREADY_RUNNING', null);

/**
 * 指定した制御コードをサービスに送れませんでした。サービスの状態が <b><code>WIN32_SERVICE_STOPPED</code></b>、 <b><code>WIN32_SERVICE_START_PENDING</code></b> あるいは <b><code>WIN32_SERVICE_STOP_PENDING</code></b> だったためです。
 */
define('WIN32_ERROR_SERVICE_CANNOT_ACCEPT_CTRL', null);

/**
 * データベースがロックされています。
 */
define('WIN32_ERROR_SERVICE_DATABASE_LOCKED', null);

/**
 * このサービスが依存する別のサービスが存在しないか、あるいは削除マークがつけられています。
 */
define('WIN32_ERROR_SERVICE_DEPENDENCY_DELETED', null);

/**
 * このサービスが依存する別のサービスの起動に失敗しました。
 */
define('WIN32_ERROR_SERVICE_DEPENDENCY_FAIL', null);

/**
 * サービスが無効化されました。
 */
define('WIN32_ERROR_SERVICE_DISABLED', null);

/**
 * 指定したサービスはインストール済みのサービスの中に存在しません。
 */
define('WIN32_ERROR_SERVICE_DOES_NOT_EXIST', null);

/**
 * 指定したサービスは既にこのデータベースに存在します。
 */
define('WIN32_ERROR_SERVICE_EXISTS', null);

/**
 * ログオンに失敗したためサービスを起動できません。このエラーが発生するのは、 そのサービスが "Log on as a service" 権限のないアカウントで動作するように設定されている場合です。
 */
define('WIN32_ERROR_SERVICE_LOGON_FAILED', null);

/**
 * 指定したサービスには既に削除マークがついています。
 */
define('WIN32_ERROR_SERVICE_MARKED_FOR_DELETE', null);

/**
 * このサービスのスレッドを作成できません。
 */
define('WIN32_ERROR_SERVICE_NO_THREAD', null);

/**
 * サービスが起動していません。
 */
define('WIN32_ERROR_SERVICE_NOT_ACTIVE', null);

/**
 * サービスのプロセスは起動しましたが StartServiceCtrlDispatcher をコールしていません。あるいは StartServiceCtrlDispatcher をコールしたスレッドが制御ハンドラ関数でブロックされています。
 */
define('WIN32_ERROR_SERVICE_REQUEST_TIMEOUT', null);

/**
 * システムがシャットダウン中なので、この関数はコールできません。
 */
define('WIN32_ERROR_SHUTDOWN_IN_PROGRESS', null);

/**
 * ただちに実行しなければならないような、時間制約の厳しいプロセス。 このプロセスのスレッドは、優先度クラスが NORMAL あるいは IDLE であるすべてのプロセスのスレッドを先取りします。 このクラスを使う例はタスクリストです。 タスクリストは、ユーザーが呼び出したときは OS の負荷にかかわらずすぐに反応しなければなりません。 この優先度クラスを使うときには細心の注意が必要です。 この優先度クラスのアプリケーションは CPU をほぼすべて使い切ってしまうこともあるからです。
 */
define('WIN32_HIGH_PRIORITY_CLASS', null);

/**
 * システムがアイドル状態のときにだけスレッドが実行されるプロセス。 より優先度クラスの高いプロセスが実行中の場合は、 そちらのスレッドが優先的に実行されます。 このクラスを使う例はスクリーンセーバーです。 この優先度クラスは、子プロセスにも引き継がれます。
 */
define('WIN32_IDLE_PRIORITY_CLASS', null);

/**
 * エラーはありません。
 */
define('WIN32_NO_ERROR', null);

/**
 * 特別なスケジューリングが不要なプロセス。
 */
define('WIN32_NORMAL_PRIORITY_CLASS', null);

/**
 * 可能な限り優先度を高くするプロセス。 このプロセスのスレッドは、他のすべてのプロセスのスレッドを先取りします。 重要なタスクをこなす OS のプロセスであっても例外ではありません。 リアルタイムプロセスを非常に短い間隔で実行させると、 ディスクキャッシュがフラッシュされなくなったり マウスが反応しなくなったりすることがあり得ます。
 */
define('WIN32_REALTIME_PRIORITY_CLASS', null);

/**
 * サービスは一時停止して続行できます。この制御コードは、サービスが <b><code>WIN32_SERVICE_CONTROL_PAUSE</code></b> および <b><code>WIN32_SERVICE_CONTROL_CONTINUE</code></b> の通知を受け取れることを表します。
 */
define('WIN32_SERVICE_ACCEPT_PAUSE_CONTINUE', null);

/**
 * サービスはシャットダウン前のタスクを処理できます。この制御コードは、サービスが <b><code>WIN32_SERVICE_CONTROL_PRESHUTDOWN</code></b> の通知を受け取れることを表します。 この値は Windows Server 2003 や Windows XP/2000 以降では使えません。
 */
define('WIN32_SERVICE_ACCEPT_PRESHUTDOWN', null);

/**
 * サービスはシステムのシャットダウン通知を受け取ります。この制御コードは、サービスが <b><code>WIN32_SERVICE_CONTROL_SHUTDOWN</code></b> の通知を受け取れることを表します。
 */
define('WIN32_SERVICE_ACCEPT_SHUTDOWN', null);

/**
 * サービスは終了できます。この制御コードは、サービスが <b><code>WIN32_SERVICE_CONTROL_STOP</code></b> の通知を受け取れることを表します。
 */
define('WIN32_SERVICE_ACCEPT_STOP', null);

/**
 * システムの起動時に、サービス制御マネージャーが自動的にサービスを開始します。
 */
define('WIN32_SERVICE_AUTO_START', null);

/**
 * サービスの続行が待機状態です。
 */
define('WIN32_SERVICE_CONTINUE_PENDING', null);

/**
 * 停止中のサービスに再開を指示します。
 */
define('WIN32_SERVICE_CONTROL_CONTINUE', null);

/**
 * 現状の情報をサービス制御マネージャーに報告するようサービスに指示します。
 */
define('WIN32_SERVICE_CONTROL_INTERROGATE', null);

/**
 * サービスに停止するよう指示します。
 */
define('WIN32_SERVICE_CONTROL_PAUSE', null);

/**
 * サービスに、システムのシャットダウンを通知します。 この通知を処理するサービスは、サービスが終了するかあるいはシャットダウン前のタイムアウトに達するまで システムのシャットダウンを待機させることができます。 この値は、Windows Server 2003 および Windows XP/2000 以降では使えません。
 */
define('WIN32_SERVICE_CONTROL_PRESHUTDOWN', null);

/**
 * サービスに、システムがシャットダウンするので後始末をするよう通知します。 サービスがこの制御コードを受け付けた場合は、 後始末のタスクを終えてからサービスを終了しなければなりません。 SCM がこの制御コードを送った後は、他の制御コードを送ることはできません。
 */
define('WIN32_SERVICE_CONTROL_SHUTDOWN', null);

/**
 * サービスに終了するよう指示します。
 */
define('WIN32_SERVICE_CONTROL_STOP', null);

/**
 * プロセスが StartService 関数をコールしたときに、 サービス制御マネージャーがサービスを開始します。
 */
define('WIN32_SERVICE_DEMAND_START', null);

/**
 * サービスを開始することができません。開始させようとすると、エラーコード <b><code>WIN32_ERROR_SERVICE_DISABLED</code></b> を返します。
 */
define('WIN32_SERVICE_DISABLED', null);

/**
 * 起動プログラムはエラーを無視し、開始操作を続行します。
 */
define('WIN32_SERVICE_ERROR_IGNORE', null);

/**
 * 起動プログラムはエラーをイベントログに記録し、開始操作を続行します。
 */
define('WIN32_SERVICE_ERROR_NORMAL', null);

/**
 * サービスはデスクトップとのやりとりができます。このオプションは、Windows Vista 以降では使えません。
 */
define('WIN32_SERVICE_INTERACTIVE_PROCESS', null);

/**
 * サービスの中断が待機状態です。
 */
define('WIN32_SERVICE_PAUSE_PENDING', null);

/**
 * サービスは中断しています。
 */
define('WIN32_SERVICE_PAUSED', null);

/**
 * サービスは実行中です。
 */
define('WIN32_SERVICE_RUNNING', null);

/**
 * サービスはシステムプロセスで動作し、常に動作している必要があります。
 */
define('WIN32_SERVICE_RUNS_IN_SYSTEM_PROCESS', null);

/**
 * サービスは開始中です。
 */
define('WIN32_SERVICE_START_PENDING', null);

/**
 * サービスは停止中です。
 */
define('WIN32_SERVICE_STOP_PENDING', null);

/**
 * サービスは動作していません。
 */
define('WIN32_SERVICE_STOPPED', null);

/**
 * サービスは自分のプロセスで動作します。
 */
define('WIN32_SERVICE_WIN32_OWN_PROCESS', null);

/**
 * サービスは自分のプロセスで動作し、デスクトップとのやりとりができます。このオプションは、Windows Vista 以降では使えません。
 */
define('WIN32_SERVICE_WIN32_OWN_PROCESS_INTERACTIVE', null);

