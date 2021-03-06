<?php



namespace {

	/**
	 * <p>Represents a class for connecting to a Gearman job server and making requests to perform some function on provided data. The function performed must be one registered by a Gearman worker and the data passed is opaque to the job server.</p>
	 * @link https://php.net/manual/ja/class.gearmanclient.php
	 * @since PECL gearman >= 0.5.0
	 */
	class GearmanClient {

		/**
		 * Create a GearmanClient instance
		 * <p>Creates a GearmanClient instance representing a client that connects to the job server and submits tasks to complete.</p>
		 * @return self <p>A GearmanClient object.</p>
		 * @link https://php.net/manual/ja/gearmanclient.construct.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function __construct() {}

		/**
		 * Add client options
		 * <p>Adds one or more options to those already set.</p>
		 * @param int $options <p>The options to add. One of the following constants, or a combination of them using the bitwise OR operator (|): <b><code>GEARMAN_CLIENT_GENERATE_UNIQUE</code></b>, <b><code>GEARMAN_CLIENT_NON_BLOCKING</code></b>, <b><code>GEARMAN_CLIENT_UNBUFFERED_RESULT</code></b> or <b><code>GEARMAN_CLIENT_FREE_TASKS</code></b>.</p>
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/ja/gearmanclient.addoptions.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function addOptions(int $options): bool {}

		/**
		 * Add a job server to the client
		 * <p>Adds a job server to a list of servers that can be used to run a task. No socket I/O happens here; the server is simply added to the list.</p>
		 * @param string $host <p>ジョブサーバーのホスト名。</p>
		 * @param int $port <p>ジョブサーバーのポート番号。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.addserver.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addServer(string $host = '127.0.0.1', int $port = 4730): bool {}

		/**
		 * Add a list of job servers to the client
		 * <p>Adds a list of job servers that can be used to run a task. No socket I/O happens here; the servers are simply added to the full list of servers.</p>
		 * @param string $servers <p>A comma-separated list of servers, each server specified in the format '<i>host:port</i>'.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.addservers.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addServers(string $servers = '127.0.0.1:4730'): bool {}

		/**
		 * Add a task to be run in parallel
		 * <p>Adds a task to be run in parallel with other tasks. Call this method for all the tasks to be run in parallel, then call <code>GearmanClient::runTasks()</code> to perform the work. Note that enough workers need to be available for the tasks to all run in parallel.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param mixed $context <p>タスクに関連づけるアプリケーションコンテキスト。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return GearmanTask <p>A GearmanTask object or <b><code>FALSE</code></b> if the task could not be added.</p>
		 * @link https://php.net/manual/ja/gearmanclient.addtask.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addTask(string $function_name, string $workload, &$context = NULL, string $unique = NULL): \GearmanTask {}

		/**
		 * Add a background task to be run in parallel
		 * <p>Adds a background task to be run in parallel with other tasks. Call this method for all the tasks to be run in parallel, then call <code>GearmanClient::runTasks()</code> to perform the work.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param mixed $context <p>タスクに関連づけるアプリケーションコンテキスト。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return GearmanTask <p>A GearmanTask object or <b><code>FALSE</code></b> if the task could not be added.</p>
		 * @link https://php.net/manual/ja/gearmanclient.addtaskbackground.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addTaskBackground(string $function_name, string $workload, &$context = NULL, string $unique = NULL): \GearmanTask {}

		/**
		 * Add a high priority task to run in parallel
		 * <p>Adds a high priority task to be run in parallel with other tasks. Call this method for all the high priority tasks to be run in parallel, then call <code>GearmanClient::runTasks()</code> to perform the work. Tasks with a high priority will be selected from the queue before those of normal or low priority.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param mixed $context <p>タスクに関連づけるアプリケーションコンテキスト。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return GearmanTask <p>A GearmanTask object or <b><code>FALSE</code></b> if the task could not be added.</p>
		 * @link https://php.net/manual/ja/gearmanclient.addtaskhigh.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addTaskHigh(string $function_name, string $workload, &$context = NULL, string $unique = NULL): \GearmanTask {}

		/**
		 * Add a high priority background task to be run in parallel
		 * <p>Adds a high priority background task to be run in parallel with other tasks. Call this method for all the tasks to be run in parallel, then call <code>GearmanClient::runTasks()</code> to perform the work. Tasks with a high priority will be selected from the queue before those of normal or low priority.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param mixed $context <p>タスクに関連づけるアプリケーションコンテキスト。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return GearmanTask <p>A GearmanTask object or <b><code>FALSE</code></b> if the task could not be added.</p>
		 * @link https://php.net/manual/ja/gearmanclient.addtaskhighbackground.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addTaskHighBackground(string $function_name, string $workload, &$context = NULL, string $unique = NULL): \GearmanTask {}

		/**
		 * Add a low priority task to run in parallel
		 * <p>Adds a low priority background task to be run in parallel with other tasks. Call this method for all the tasks to be run in parallel, then call <code>GearmanClient::runTasks()</code> to perform the work. Tasks with a low priority will be selected from the queue after those of normal or low priority.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param mixed $context <p>タスクに関連づけるアプリケーションコンテキスト。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return GearmanTask <p>A GearmanTask object or <b><code>FALSE</code></b> if the task could not be added.</p>
		 * @link https://php.net/manual/ja/gearmanclient.addtasklow.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addTaskLow(string $function_name, string $workload, &$context = NULL, string $unique = NULL): \GearmanTask {}

		/**
		 * Add a low priority background task to be run in parallel
		 * <p>Adds a low priority background task to be run in parallel with other tasks. Call this method for all the tasks to be run in parallel, then call <code>GearmanClient::runTasks()</code> to perform the work. Tasks with a low priority will be selected from the queue after those of normal or high priority.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param mixed $context <p>タスクに関連づけるアプリケーションコンテキスト。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return GearmanTask <p>A GearmanTask object or <b><code>FALSE</code></b> if the task could not be added.</p>
		 * @link https://php.net/manual/ja/gearmanclient.addtasklowbackground.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addTaskLowBackground(string $function_name, string $workload, &$context = NULL, string $unique = NULL): \GearmanTask {}

		/**
		 * Add a task to get status
		 * <p>Used to request status information from the Gearman server, which will call the specified status callback (set using <code>GearmanClient::setStatusCallback()</code>).</p>
		 * @param string $job_handle <p>The job handle for the task to get status for</p>
		 * @param string $context <p>Data to be passed to the status callback, generally a reference to an array or object</p>
		 * @return GearmanTask <p>A GearmanTask object.</p>
		 * @link https://php.net/manual/ja/gearmanclient.addtaskstatus.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addTaskStatus(string $job_handle, string &$context = NULL): \GearmanTask {}

		/**
		 * Clear all task callback functions
		 * <p>Clears all the task callback functions that have previously been set.</p>
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/ja/gearmanclient.clearcallbacks.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function clearCallbacks(): bool {}

		/**
		 * Create a copy of a GearmanClient object
		 * <p>Creates a copy of a GearmanClient object.</p>
		 * @return GearmanClient <p>A GearmanClient on success, <b><code>FALSE</code></b> on failure.</p>
		 * @link https://php.net/manual/ja/gearmanclient.clone.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function clone(): \GearmanClient {}

		/**
		 * Get the application context
		 * <p>Get the application context previously set with <code>GearmanClient::setContext()</code>.</p>
		 * @return string <p>The same context data structure set with <code>GearmanClient::setContext()</code></p>
		 * @link https://php.net/manual/ja/gearmanclient.context.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function context(): string {}

		/**
		 * Get the application data (deprecated)
		 * <p>Get the application data previously set with <code>GearmanClient::setData()</code>.</p><p><b>注意</b>:</p><p>This method was replaced by <code>GearmanClient::setContext()</code> in the 0.6.0 release of the Gearman extension.</p>
		 * @return string <p>The same string data set with <code>GearmanClient::setData()</code></p>
		 * @link https://php.net/manual/ja/gearmanclient.data.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function data(): string {}

		/**
		 * Run a single task and return a result [deprecated]
		 * <p>The <b>GearmanClient::do()</b> method is deprecated as of pecl/gearman 1.0.0. Use <code>GearmanClient::doNormal()</code>.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return string <p>A string representing the results of running a task.</p>
		 * @link https://php.net/manual/ja/gearmanclient.do.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function do(string $function_name, string $workload, string $unique = NULL): string {}

		/**
		 * Run a task in the background
		 * <p>Runs a task in the background, returning a job handle which can be used to get the status of the running task.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return string <p>The job handle for the submitted task.</p>
		 * @link https://php.net/manual/ja/gearmanclient.dobackground.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function doBackground(string $function_name, string $workload, string $unique = NULL): string {}

		/**
		 * Run a single high priority task
		 * <p>Runs a single high priority task and returns a string representation of the result. It is up to the GearmanClient and GearmanWorker to agree on the format of the result. High priority tasks will get precedence over normal and low priority tasks in the job queue.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return string <p>A string representing the results of running a task.</p>
		 * @link https://php.net/manual/ja/gearmanclient.dohigh.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function doHigh(string $function_name, string $workload, string $unique = NULL): string {}

		/**
		 * Run a high priority task in the background
		 * <p>Runs a high priority task in the background, returning a job handle which can be used to get the status of the running task. High priority tasks take precedence over normal and low priority tasks in the job queue.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return string <p>The job handle for the submitted task.</p>
		 * @link https://php.net/manual/ja/gearmanclient.dohighbackground.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function doHighBackground(string $function_name, string $workload, string $unique = NULL): string {}

		/**
		 * Get the job handle for the running task
		 * <p>Gets that job handle for a running task. This should be used between repeated <code>GearmanClient::doNormal()</code> calls. The job handle can then be used to get information on the task.</p>
		 * @return string <p>The job handle for the running task.</p>
		 * @link https://php.net/manual/ja/gearmanclient.dojobhandle.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function doJobHandle(): string {}

		/**
		 * Run a single low priority task
		 * <p>Runs a single low priority task and returns a string representation of the result. It is up to the GearmanClient and GearmanWorker to agree on the format of the result. Normal and high priority tasks will get precedence over low priority tasks in the job queue.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return string <p>A string representing the results of running a task.</p>
		 * @link https://php.net/manual/ja/gearmanclient.dolow.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function doLow(string $function_name, string $workload, string $unique = NULL): string {}

		/**
		 * Run a low priority task in the background
		 * <p>Runs a low priority task in the background, returning a job handle which can be used to get the status of the running task. Normal and high priority tasks take precedence over low priority tasks in the job queue.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return string <p>The job handle for the submitted task.</p>
		 * @link https://php.net/manual/ja/gearmanclient.dolowbackground.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function doLowBackground(string $function_name, string $workload, string $unique = NULL): string {}

		/**
		 * Run a single task and return a result
		 * <p>Runs a single task and returns a string representation of the result. It is up to the GearmanClient and GearmanWorker to agree on the format of the result.</p>
		 * @param string $function_name <p>ワーカーが実行するために登録した関数。</p>
		 * @param string $workload <p>シリアライズしたデータ。</p>
		 * @param string $unique <p>タスクを特定するために用いる一意な ID。</p>
		 * @return string <p>A string representing the results of running a task.</p>
		 * @link https://php.net/manual/ja/gearmanclient.donormal.php
		 * @since No version information available, might only be in Git
		 */
		public function doNormal(string $function_name, string $workload, string $unique = NULL): string {}

		/**
		 * Get the status for the running task
		 * <p>Returns the status for the running task. This should be used between repeated <code>GearmanClient::doNormal()</code> calls.</p>
		 * @return array <p>An array representing the percentage completion given as a fraction, with the first element the numerator and the second element the denomintor.</p>
		 * @link https://php.net/manual/ja/gearmanclient.dostatus.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function doStatus(): array {}

		/**
		 * Send data to all job servers to see if they echo it back [deprecated]
		 * <p>The <b>GearmanClient::echo()</b> method is deprecated as of pecl/gearman 1.0.0. Use <code>GearmanClient::ping()</code>.</p>
		 * @param string $workload <p>Some arbitrary serialized data to be echo back</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.echo.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function echo(string $workload): bool {}

		/**
		 * Returns an error string for the last error encountered
		 * <p>Returns an error string for the last error encountered.</p>
		 * @return string <p>A human readable error string.</p>
		 * @link https://php.net/manual/ja/gearmanclient.error.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function error(): string {}

		/**
		 * Get an errno value
		 * <p>Value of errno in the case of a GEARMAN_ERRNO return value.</p>
		 * @return int <p>A valid Gearman errno.</p>
		 * @link https://php.net/manual/ja/gearmanclient.geterrno.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function getErrno(): int {}

		/**
		 * Get the status of a background job
		 * <p>オブジェクト指向型 (method):</p><p>Gets the status for a background job given a job handle. The status information will specify whether the job is known, whether the job is currently running, and the percentage completion.</p>
		 * @param string $job_handle <p>Gearman サーバーが割り当てたジョブハンドル。</p>
		 * @return array <p>An array containing status information for the job corresponding to the supplied job handle. The first array element is a boolean indicating whether the job is even known, the second is a boolean indicating whether the job is still running, and the third and fourth elements correspond to the numerator and denominator of the fractional completion percentage, respectively.</p>
		 * @link https://php.net/manual/ja/gearmanclient.jobstatus.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function jobStatus(string $job_handle): array {}

		/**
		 * Send data to all job servers to see if they echo it back
		 * <p>Sends some arbitrary data to all job servers to see if they echo it back. The data sent is not used or processed in any other way. Primarily used for testing and debugging.</p>
		 * @param string $workload <p>Some arbitrary serialized data to be echo back</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.ping.php
		 * @since No version information available, might only be in Git
		 */
		public function ping(string $workload): bool {}

		/**
		 * Remove client options
		 * <p>Removes (unsets) one or more options.</p>
		 * @param int $options <p>The options to be removed (unset)</p>
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/ja/gearmanclient.removeoptions.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function removeOptions(int $options): bool {}

		/**
		 * Get the last Gearman return code
		 * <p>Returns the last Gearman return code.</p>
		 * @return int <p>A valid Gearman return code.</p>
		 * @link https://php.net/manual/ja/gearmanclient.returncode.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function returnCode(): int {}

		/**
		 * Run a list of tasks in parallel
		 * <p>For a set of tasks previously added with <code>GearmanClient::addTask()</code>, <code>GearmanClient::addTaskHigh()</code>, <code>GearmanClient::addTaskLow()</code>, <code>GearmanClient::addTaskBackground()</code>, <code>GearmanClient::addTaskHighBackground()</code>, or <code>GearmanClient::addTaskLowBackground()</code>, this call starts running the tasks in parallel.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.runtasks.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function runTasks(): bool {}

		/**
		 * Callback function when there is a data packet for a task (deprecated)
		 * <p>Sets the callback function for accepting data packets for a task. The callback function should take a single argument, a GearmanTask object.</p><p><b>注意</b>:</p><p>This method has been replaced by <code>GearmanClient::setDataCallback()</code> in the 0.6.0 release of the Gearman extension.</p>
		 * @param callable $callback <p>A function or method to call</p>
		 * @return void <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.setclientcallback.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function setClientCallback(callable $callback): void {}

		/**
		 * Set a function to be called on task completion
		 * <p>Use to set a function to be called when a GearmanTask is completed, or when <code>GearmanJob::sendComplete()</code> is invoked by a worker (whichever happens first).</p><p>This callback executes only when executing a GearmanTask using <code>GearmanClient::runTasks()</code>. It is not used for individual jobs.</p>
		 * @param callable $callback <p>A function to be called</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.setcompletecallback.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function setCompleteCallback(callable $callback): bool {}

		/**
		 * Set application context
		 * <p>Sets an arbitrary string to provide application context that can later be retrieved by <code>GearmanClient::context()</code>.</p>
		 * @param string $context <p>Arbitrary context data</p>
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/ja/gearmanclient.setcontext.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function setContext(string $context): bool {}

		/**
		 * Set a callback for when a task is queued
		 * <p>Sets a function to be called when a task is received and queued by the Gearman job server. The callback should accept a single argument, a GearmanTask object.</p>
		 * @param string $callback <p>A function to call</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.setcreatedcallback.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function setCreatedCallback(string $callback): bool {}

		/**
		 * Set application data (deprecated)
		 * <p>Sets some arbitrary application data that can later be retrieved by <code>GearmanClient::data()</code>.</p><p><b>注意</b>:</p><p>This method has been replaced by <b>GearmanCient::setContext()</b> in the 0.6.0 release of the Gearman extension.</p>
		 * @param string $data
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/ja/gearmanclient.setdata.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function setData(string $data): bool {}

		/**
		 * Callback function when there is a data packet for a task
		 * <p>Sets the callback function for accepting data packets for a task. The callback function should take a single argument, a GearmanTask object.</p>
		 * @param callable $callback <p>A function or method to call</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.setdatacallback.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function setDataCallback(callable $callback): bool {}

		/**
		 * Set a callback for worker exceptions
		 * <p>Specifies a function to call when a worker for a task sends an exception.</p>
		 * @param callable $callback <p>Function to call when the worker throws an exception</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.setexceptioncallback.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function setExceptionCallback(callable $callback): bool {}

		/**
		 * Set callback for job failure
		 * <p>Sets the callback function to be used when a task does not complete successfully. The function should accept a single argument, a GearmanTask object.</p>
		 * @param callable $callback <p>A function to call</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.setfailcallback.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function setFailCallback(callable $callback): bool {}

		/**
		 * Set client options
		 * <p>Sets one or more client options.</p>
		 * @param int $options <p>The options to be set</p>
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/ja/gearmanclient.setoptions.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function setOptions(int $options): bool {}

		/**
		 * Set a callback for collecting task status
		 * <p>Sets a callback function used for getting updated status information from a worker. The function should accept a single argument, a GearmanTask object.</p>
		 * @param callable $callback <p>A function to call</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.setstatuscallback.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function setStatusCallback(callable $callback): bool {}

		/**
		 * Set socket I/O activity timeout
		 * <p>Sets the timeout for socket I/O activity.</p>
		 * @param int $timeout <p>An interval of time in milliseconds</p>
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/ja/gearmanclient.settimeout.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function setTimeout(int $timeout): bool {}

		/**
		 * Set a callback for worker warnings
		 * <p>Sets a function to be called when a worker sends a warning. The callback should accept a single argument, a GearmanTask object.</p>
		 * @param callable $callback <p>A function to call</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.setwarningcallback.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function setWarningCallback(callable $callback): bool {}

		/**
		 * Set a callback for accepting incremental data updates
		 * <p>Sets a function to be called when a worker needs to send back data prior to job completion. A worker can do this when it needs to send updates, send partial results, or flush data during long running jobs. The callback should accept a single argument, a GearmanTask object.</p>
		 * @param callable $callback <p>A function to call</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanclient.setworkloadcallback.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function setWorkloadCallback(callable $callback): bool {}

		/**
		 * Get current socket I/O activity timeout value
		 * <p>Returns the timeout in milliseconds to wait for I/O activity.</p>
		 * @return int <p>Timeout in milliseconds to wait for I/O activity. A negative value means an infinite timeout.</p>
		 * @link https://php.net/manual/ja/gearmanclient.timeout.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function timeout(): int {}
	}

	/**
	 * @link https://php.net/manual/ja/class.gearmanexception.php
	 * @since PECL gearman >= 0.5.0
	 */
	class GearmanException extends \Exception {

		/**
		 * @var string <p>例外メッセージ</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.message
		 */
		protected $message;

		/**
		 * @var int <p>例外コード</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.code
		 */
		protected $code;

		/**
		 * @var string <p>例外が作られたファイル名</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.file
		 */
		protected $file;

		/**
		 * @var int <p>例外が作られた行</p>
		 * @link https://php.net/manual/ja/class.exception.php#exception.props.line
		 */
		protected $line;

		/**
		 * 例外をコピーする
		 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/exception.clone.php
		 * @since PHP 5, PHP 7
		 */
		final private function __clone() {}

		/**
		 * 例外の文字列表現
		 * <p>例外を文字列で表現したものを返します。</p>
		 * @return string <p>例外を文字列で表現したものを返します。</p>
		 * @link https://php.net/manual/ja/exception.tostring.php
		 * @since PHP 5, PHP 7
		 */
		public function __toString(): string {}

		/**
		 * 例外コードを取得する
		 * <p>例外コードを返します。</p>
		 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
		 * @link https://php.net/manual/ja/exception.getcode.php
		 * @since PHP 5, PHP 7
		 */
		final public function getCode() {}

		/**
		 * 例外が作られたファイルを取得する
		 * <p>例外が作られたファイルの名前を取得します。</p>
		 * @return string <p>例外が作られたファイルの名前を返します。</p>
		 * @link https://php.net/manual/ja/exception.getfile.php
		 * @since PHP 5, PHP 7
		 */
		final public function getFile(): string {}

		/**
		 * 例外が作られた行を取得する
		 * <p>例外が作られた行番号を取得します。</p>
		 * @return int <p>例外が作られた行番号を返します。</p>
		 * @link https://php.net/manual/ja/exception.getline.php
		 * @since PHP 5, PHP 7
		 */
		final public function getLine(): int {}

		/**
		 * 例外メッセージを取得する
		 * <p>例外メッセージを返します。</p>
		 * @return string <p>例外メッセージ文字列を返します。</p>
		 * @link https://php.net/manual/ja/exception.getmessage.php
		 * @since PHP 5, PHP 7
		 */
		final public function getMessage(): string {}

		/**
		 * 前の例外を返す
		 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
		 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/exception.getprevious.php
		 * @since PHP 5 >= 5.3.0, PHP 7
		 */
		final public function getPrevious(): \Exception {}

		/**
		 * スタックトレースを取得する
		 * <p>例外のスタックトレースを返します。</p>
		 * @return array <p>例外のスタックトレースを配列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettrace.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTrace(): array {}

		/**
		 * スタックトレースを文字列で取得する
		 * <p>例外のスタックトレースを文字列で返します。</p>
		 * @return string <p>例外のスタックトレースを文字列で返します。</p>
		 * @link https://php.net/manual/ja/exception.gettraceasstring.php
		 * @since PHP 5, PHP 7
		 */
		final public function getTraceAsString(): string {}
	}

	/**
	 * @link https://php.net/manual/ja/class.gearmanjob.php
	 * @since PECL gearman >= 0.5.0
	 */
	class GearmanJob {

		/**
		 * Create a GearmanJob instance
		 * <p>Creates a GearmanJob instance representing a job the worker is to complete.</p>
		 * @return self <p>A GearmanJob object.</p>
		 * @link https://php.net/manual/ja/gearmanjob.construct.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function __construct() {}

		/**
		 * Send the result and complete status (deprecated)
		 * <p>Sends result data and the complete status update for this job.</p><p><b>注意</b>:</p><p>This method has been replaced by <code>GearmanJob::sendComplete()</code> in the 0.6.0 release of the Gearman extension.</p>
		 * @param string $result <p>Serialized result data.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.complete.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function complete(string $result): bool {}

		/**
		 * Send data for a running job (deprecated)
		 * <p>Sends data to the job server (and any listening clients) for this job.</p><p><b>注意</b>:</p><p>This method has been replaced by <code>GearmanJob::sendData()</code> in the 0.6.0 release of the Gearman extension.</p>
		 * @param string $data <p>Arbitrary serialized data.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.data.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function data(string $data): bool {}

		/**
		 * Send exception for running job (deprecated)
		 * <p>Sends the supplied exception when this job is running.</p><p><b>注意</b>:</p><p>This method has been replaced by <code>GearmanJob::sendException()</code> in the 0.6.0 release of the Gearman extension.</p>
		 * @param string $exception <p>An exception description.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.exception.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function exception(string $exception): bool {}

		/**
		 * Send fail status (deprecated)
		 * <p>Sends failure status for this job, indicating that the job failed in a known way (as opposed to failing due to a thrown exception).</p><p><b>注意</b>:</p><p>This method has been replaced by <code>GearmanJob::sendFail()</code> in the 0.6.0 release of the Gearman extension.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.fail.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function fail(): bool {}

		/**
		 * Get function name
		 * <p>Returns the function name for this job. This is the function the work will execute to perform the job.</p>
		 * @return string <p>The name of a function.</p>
		 * @link https://php.net/manual/ja/gearmanjob.functionname.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function functionName(): string {}

		/**
		 * Get the job handle
		 * <p>Returns the opaque job handle assigned by the job server.</p>
		 * @return string <p>An opaque job handle.</p>
		 * @link https://php.net/manual/ja/gearmanjob.handle.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function handle(): string {}

		/**
		 * Get last return code
		 * <p>Returns the last return code issued by the job server.</p>
		 * @return int <p>A valid Gearman return code.</p>
		 * @link https://php.net/manual/ja/gearmanjob.returncode.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function returnCode(): int {}

		/**
		 * Send the result and complete status
		 * <p>Sends result data and the complete status update for this job.</p>
		 * @param string $result <p>Serialized result data.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.sendcomplete.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function sendComplete(string $result): bool {}

		/**
		 * Send data for a running job
		 * <p>Sends data to the job server (and any listening clients) for this job.</p>
		 * @param string $data <p>Arbitrary serialized data.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.senddata.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function sendData(string $data): bool {}

		/**
		 * Send exception for running job (exception)
		 * <p>Sends the supplied exception when this job is running.</p>
		 * @param string $exception <p>An exception description.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.sendexception.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function sendException(string $exception): bool {}

		/**
		 * Send fail status
		 * <p>Sends failure status for this job, indicating that the job failed in a known way (as opposed to failing due to a thrown exception).</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.sendfail.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function sendFail(): bool {}

		/**
		 * Send status
		 * <p>Sends status information to the job server and any listening clients. Use this to specify what percentage of the job has been completed.</p>
		 * @param int $numerator <p>The numerator of the precentage completed expressed as a fraction.</p>
		 * @param int $denominator <p>The denominator of the precentage completed expressed as a fraction.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.sendstatus.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function sendStatus(int $numerator, int $denominator): bool {}

		/**
		 * Send a warning
		 * <p>Sends a warning for this job while it is running.</p>
		 * @param string $warning <p>A warning message.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.sendwarning.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function sendWarning(string $warning): bool {}

		/**
		 * Set a return value
		 * <p>Sets the return value for this job, indicates how the job completed.</p>
		 * @param int $gearman_return_t <p>A valid Gearman return value.</p>
		 * @return bool <p>Description...</p>
		 * @link https://php.net/manual/ja/gearmanjob.setreturn.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function setReturn(int $gearman_return_t): bool {}

		/**
		 * Send status (deprecated)
		 * <p>Sends status information to the job server and any listening clients. Use this to specify what percentage of the job has been completed.</p><p><b>注意</b>:</p><p>This method has been replaced by <code>GearmanJob::sendStatus()</code> in the 0.6.0 release of the Gearman extenstion.</p>
		 * @param int $numerator <p>The numerator of the precentage completed expressed as a fraction.</p>
		 * @param int $denominator <p>The denominator of the precentage completed expressed as a fraction.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.status.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function status(int $numerator, int $denominator): bool {}

		/**
		 * Get the unique identifier
		 * <p>Returns the unique identifiter for this job. The identifier is assigned by the client.</p>
		 * @return string <p>An opaque unique identifier.</p>
		 * @link https://php.net/manual/ja/gearmanjob.unique.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function unique(): string {}

		/**
		 * Send a warning (deprecated)
		 * <p>Sends a warning for this job while it is running.</p><p><b>注意</b>:</p><p>This method has been replaced by <code>GearmanJob::sendWarning()</code> in the 0.6.0 release of the Gearman extension.</p>
		 * @param string $warning <p>A warning messages.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanjob.warning.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function warning(string $warning): bool {}

		/**
		 * Get workload
		 * <p>Returns the workload for the job. This is serialized data that is to be processed by the worker.</p>
		 * @return string <p>Serialized data.</p>
		 * @link https://php.net/manual/ja/gearmanjob.workload.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function workload(): string {}

		/**
		 * Get size of work load
		 * <p>Returns the size of the job's work load (the data the worker is to process) in bytes.</p>
		 * @return int <p>The size in bytes.</p>
		 * @link https://php.net/manual/ja/gearmanjob.workloadsize.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function workloadSize(): int {}
	}

	/**
	 * @link https://php.net/manual/ja/class.gearmantask.php
	 * @since PECL gearman >= 0.5.0
	 */
	class GearmanTask {

		/**
		 * Create a GearmanTask instance
		 * <p>Creates a GearmanTask instance representing a task to be submitted to a job server.</p>
		 * @return self <p>A GearmanTask object.</p>
		 * @link https://php.net/manual/ja/gearmantask.construct.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function __construct() {}

		/**
		 * Create a task (deprecated)
		 * <p>Returns a new GearmanTask object.</p><p><b>注意</b>:</p><p>This method was removed in the 0.6.0 version of the Gearman extension.</p>
		 * @return GearmanTask <p>A GearmanTask oject失敗した場合に <b><code>FALSE</code></b> を返します.</p>
		 * @link https://php.net/manual/ja/gearmantask.create.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function create(): \GearmanTask {}

		/**
		 * Get data returned for a task
		 * <p>Returns data being returned for a task by a worker.</p>
		 * @return string <p>The serialized data, or <b><code>FALSE</code></b> if no data is present.</p>
		 * @link https://php.net/manual/ja/gearmantask.data.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function data(): string {}

		/**
		 * Get the size of returned data
		 * <p>Returns the size of the data being returned for a task.</p>
		 * @return int <p>The data size, or <b><code>FALSE</code></b> if there is no data.</p>
		 * @link https://php.net/manual/ja/gearmantask.datasize.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function dataSize(): int {}

		/**
		 * Get associated function name (deprecated)
		 * <p>Returns the name of the function this task is associated with, i.e., the function the Gearman worker calls.</p><p><b>注意</b>:</p><p>This method has been replaced by <code>GearmanTask::functionName()</code> in the 0.6.0 release of the Gearman extension.</p>
		 * @return string <p>A function name.</p>
		 * @link https://php.net/manual/ja/gearmantask.function.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function function(): string {}

		/**
		 * Get associated function name
		 * <p>Returns the name of the function this task is associated with, i.e., the function the Gearman worker calls.</p>
		 * @return string <p>A function name.</p>
		 * @link https://php.net/manual/ja/gearmantask.functionname.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function functionName(): string {}

		/**
		 * Determine if task is known
		 * <p>Gets the status information for whether or not this task is known to the job server.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the task is known, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/gearmantask.isknown.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function isKnown(): bool {}

		/**
		 * Test whether the task is currently running
		 * <p>Indicates whether or not this task is currently running.</p>
		 * @return bool <p><b><code>TRUE</code></b> if the task is running, <b><code>FALSE</code></b> otherwise.</p>
		 * @link https://php.net/manual/ja/gearmantask.isrunning.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function isRunning(): bool {}

		/**
		 * Get the job handle
		 * <p>Returns the job handle for this task.</p>
		 * @return string <p>The opaque job handle.</p>
		 * @link https://php.net/manual/ja/gearmantask.jobhandle.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function jobHandle(): string {}

		/**
		 * Read work or result data into a buffer for a task
		 * <p></p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
		 * @param int $data_len <p>Length of data to be read.</p>
		 * @return array <p>An array whose first element is the length of data read and the second is the data buffer. Returns <b><code>FALSE</code></b> if the read failed.</p>
		 * @link https://php.net/manual/ja/gearmantask.recvdata.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function recvData(int $data_len): array {}

		/**
		 * Get the last return code
		 * <p>Returns the last Gearman return code for this task.</p>
		 * @return int <p>A valid Gearman return code.</p>
		 * @link https://php.net/manual/ja/gearmantask.returncode.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function returnCode(): int {}

		/**
		 * Send data for a task (deprecated)
		 * <p></p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
		 * @param string $data <p>Data to send to the worker.</p>
		 * @return int <p>The length of data sent, or <b><code>FALSE</code></b> if the send failed.</p>
		 * @link https://php.net/manual/ja/gearmantask.senddata.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function sendData(string $data): int {}

		/**
		 * Send data for a task
		 * <p></p><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
		 * @param string $data <p>Data to send to the worker.</p>
		 * @return int <p>The length of data sent, or <b><code>FALSE</code></b> if the send failed.</p>
		 * @link https://php.net/manual/ja/gearmantask.sendworkload.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function sendWorkload(string $data): int {}

		/**
		 * Get completion percentage denominator
		 * <p>Returns the denominator of the percentage of the task that is complete expressed as a fraction.</p>
		 * @return int <p>A number between 0 and 100, or <b><code>FALSE</code></b> if cannot be determined.</p>
		 * @link https://php.net/manual/ja/gearmantask.taskdenominator.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function taskDenominator(): int {}

		/**
		 * Get completion percentage numerator
		 * <p>Returns the numerator of the percentage of the task that is complete expressed as a fraction.</p>
		 * @return int <p>A number between 0 and 100, or <b><code>FALSE</code></b> if cannot be determined.</p>
		 * @link https://php.net/manual/ja/gearmantask.tasknumerator.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function taskNumerator(): int {}

		/**
		 * Get the unique identifier for a task
		 * <p>Returns the unique identifier for this task. This is assigned by the GearmanClient, as opposed to the job handle which is set by the Gearman job server.</p>
		 * @return string <p>The unique identifier, or <b><code>FALSE</code></b> if no identifier is assigned.</p>
		 * @link https://php.net/manual/ja/gearmantask.unique.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function unique(): string {}

		/**
		 * Get the unique identifier for a task (deprecated)
		 * <p>Returns the unique identifier for this task. This is assigned by the GearmanClient, as opposed to the job handle which is set by the Gearman job server.</p><p><b>注意</b>:</p><p>This method has been replaced by <code>GearmanTask::unique()</code> in the 0.6.0 release of the Gearman extension.</p>
		 * @return string <p>The unique identifier, or <b><code>FALSE</code></b> if no identifier is assigned.</p>
		 * @link https://php.net/manual/ja/gearmantask.uuid.php
		 * @since PECL gearman <= 0.5.0
		 */
		public function uuid(): string {}
	}

	/**
	 * @link https://php.net/manual/ja/class.gearmanworker.php
	 * @since PECL gearman >= 0.5.0
	 */
	class GearmanWorker {

		/**
		 * Create a GearmanWorker instance
		 * <p>Creates a GearmanWorker instance representing a worker that connects to the job server and accepts tasks to run.</p>
		 * @return self <p>A GearmanWorker object</p>
		 * @link https://php.net/manual/ja/gearmanworker.construct.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function __construct() {}

		/**
		 * Register and add callback function
		 * <p>Registers a function name with the job server and specifies a callback corresponding to that function. Optionally specify extra application context data to be used when the callback is called and a timeout.</p>
		 * @param string $function_name <p>The name of a function to register with the job server</p>
		 * @param callable $function <p>A callback that gets called when a job for the registered function name is submitted</p>
		 * @param mixed $context <p>A reference to arbitrary application context data that can be modified by the worker function</p>
		 * @param int $timeout <p>An interval of time in seconds</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanworker.addfunction.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addFunction(string $function_name, callable $function, &$context = NULL, int $timeout = NULL): bool {}

		/**
		 * Add worker options
		 * <p>Adds one or more options to the options previously set.</p>
		 * @param int $option <p>The options to be added</p>
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/ja/gearmanworker.addoptions.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function addOptions(int $option): bool {}

		/**
		 * Add a job server
		 * <p>Adds a job server to this worker. This goes into a list of servers than can be used to run jobs. No socket I/O happens here.</p>
		 * @param string $host <p>ジョブサーバーのホスト名。</p>
		 * @param int $port <p>ジョブサーバーのポート番号。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanworker.addserver.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addServer(string $host = '127.0.0.1', int $port = 4730): bool {}

		/**
		 * Add job servers
		 * <p>Adds one or more job servers to this worker. These go into a list of servers that can be used to run jobs. No socket I/O happens here.</p>
		 * @param string $servers <p>A comma separated list of job servers in the format host:port. If no port is specified, it defaults to 4730.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanworker.addservers.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function addServers(string $servers = '127.0.0.1:4730'): bool {}

		/**
		 * Create a copy of the worker
		 * <p>Creates a copy of the worker.</p>
		 * @return void <p>A GearmanWorker object</p>
		 * @link https://php.net/manual/ja/gearmanworker.clone.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function clone(): void {}

		/**
		 * Test job server response
		 * <p>Sends data to all job servers to see if they echo it back. This is a test function to see if job servers are responding properly.</p>
		 * @param string $workload <p>Arbitrary serialized data</p>
		 * @return bool <p>Standard Gearman return value.</p>
		 * @link https://php.net/manual/ja/gearmanworker.echo.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function echo(string $workload): bool {}

		/**
		 * Get the last error encountered
		 * <p>Returns an error string for the last error encountered.</p>
		 * @return string <p>An error string.</p>
		 * @link https://php.net/manual/ja/gearmanworker.error.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function error(): string {}

		/**
		 * Get errno
		 * <p>Returns the value of errno in the case of a GEARMAN_ERRNO return value.</p>
		 * @return int <p>A valid errno.</p>
		 * @link https://php.net/manual/ja/gearmanworker.geterrno.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function getErrno(): int {}

		/**
		 * Get worker options
		 * <p>Gets the options previously set for the worker.</p>
		 * @return int <p>The options currently set for the worker.</p>
		 * @link https://php.net/manual/ja/gearmanworker.options.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function options(): int {}

		/**
		 * Register a function with the job server
		 * <p>Registers a function name with the job server with an optional timeout. The timeout specifies how many seconds the server will wait before marking a job as failed. If the timeout is set to zero, there is no timeout.</p>
		 * @param string $function_name <p>The name of a function to register with the job server</p>
		 * @param int $timeout <p>An interval of time in seconds</p>
		 * @return bool <p>A standard Gearman return value.</p>
		 * @link https://php.net/manual/ja/gearmanworker.register.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function register(string $function_name, int $timeout = NULL): bool {}

		/**
		 * Remove worker options
		 * <p>Removes (unsets) one or more worker options.</p>
		 * @param int $option <p>The options to be removed (unset)</p>
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/ja/gearmanworker.removeoptions.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function removeOptions(int $option): bool {}

		/**
		 * Get last Gearman return code
		 * <p>Returns the last Gearman return code.</p>
		 * @return int <p>A valid Gearman return code.</p>
		 * @link https://php.net/manual/ja/gearmanworker.returncode.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function returnCode(): int {}

		/**
		 * Give the worker an identifier so it can be tracked when asking gearmand for the list of available workers
		 * <p>Assigns the worker an identifier.</p>
		 * @param string $id <p>A string identifier.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanworker.setid.php
		 * @since No version information available, might only be in Git
		 */
		public function setId(string $id): bool {}

		/**
		 * Set worker options
		 * <p>Sets one or more options to the supplied value.</p>
		 * @param int $option <p>The options to be set</p>
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/ja/gearmanworker.setoptions.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function setOptions(int $option): bool {}

		/**
		 * Set socket I/O activity timeout
		 * <p>Sets the interval of time to wait for socket I/O activity.</p>
		 * @param int $timeout <p>An interval of time in milliseconds. A negative value indicates an infinite timeout.</p>
		 * @return bool <p>Always returns <b><code>TRUE</code></b>.</p>
		 * @link https://php.net/manual/ja/gearmanworker.settimeout.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function setTimeout(int $timeout): bool {}

		/**
		 * Get socket I/O activity timeout
		 * <p>Returns the current time to wait, in milliseconds, for socket I/O activity.</p>
		 * @return int <p>A time period is milliseconds. A negative value indicates an infinite timeout.</p>
		 * @link https://php.net/manual/ja/gearmanworker.timeout.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function timeout(): int {}

		/**
		 * Unregister a function name with the job servers
		 * <p>Unregisters a function name with the job servers ensuring that no more jobs (for that function) are sent to this worker.</p>
		 * @param string $function_name <p>The name of a function to register with the job server</p>
		 * @return bool <p>A standard Gearman return value.</p>
		 * @link https://php.net/manual/ja/gearmanworker.unregister.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function unregister(string $function_name): bool {}

		/**
		 * Unregister all function names with the job servers
		 * <p>Unregisters all previously registered functions, ensuring that no more jobs are sent to this worker.</p>
		 * @return bool <p>A standard Gearman return value.</p>
		 * @link https://php.net/manual/ja/gearmanworker.unregisterall.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function unregisterAll(): bool {}

		/**
		 * Wait for activity from one of the job servers
		 * <p>Causes the worker to wait for activity from one of the Gearman job servers when operating in non-blocking I/O mode. On failure, issues a <b><code>E_WARNING</code></b> with the last Gearman error encountered.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanworker.wait.php
		 * @since PECL gearman >= 0.6.0
		 */
		public function wait(): bool {}

		/**
		 * Wait for and perform jobs
		 * <p>Waits for a job to be assigned and then calls the appropriate callback function. Issues an <b><code>E_WARNING</code></b> with the last Gearman error if the return code is not one of <b><code>GEARMAN_SUCCESS</code></b>, <b><code>GEARMAN_IO_WAIT</code></b>, or <b><code>GEARMAN_WORK_FAIL</code></b>.</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/gearmanworker.work.php
		 * @since PECL gearman >= 0.5.0
		 */
		public function work(): bool {}
	}

	/**
	 * Get the job handle
	 * <p>Returns the job handle for this task.</p>
	 * @return string <p>The opaque job handle.</p>
	 * @link https://php.net/manual/ja/gearmantask.jobhandle.php
	 * @since PECL gearman >= 0.5.0
	 */
	function gearman_job_handle(): string {}

	/**
	 * Get the status of a background job
	 * <p>オブジェクト指向型 (method):</p><p>Gets the status for a background job given a job handle. The status information will specify whether the job is known, whether the job is currently running, and the percentage completion.</p>
	 * @param string $job_handle <p>Gearman サーバーが割り当てたジョブハンドル。</p>
	 * @return array <p>An array containing status information for the job corresponding to the supplied job handle. The first array element is a boolean indicating whether the job is even known, the second is a boolean indicating whether the job is still running, and the third and fourth elements correspond to the numerator and denominator of the fractional completion percentage, respectively.</p>
	 * @link https://php.net/manual/ja/gearmanclient.jobstatus.php
	 * @since PECL gearman >= 0.5.0
	 */
	function gearman_job_status(string $job_handle): array {}

	define('GEARMAN_ARGS_BUFFER_SIZE', null);

	/**
	 * Automatically free task objects once they are complete. This is the default setting in this extension to prevent memory leaks.
	 */
	define('GEARMAN_CLIENT_FREE_TASKS', null);

	/**
	 * Generate a unique id (UUID) for each task.
	 */
	define('GEARMAN_CLIENT_GENERATE_UNIQUE', null);

	/**
	 * Run the cient in a non-blocking mode.
	 */
	define('GEARMAN_CLIENT_NON_BLOCKING', null);

	/**
	 * Allow the client to read data in chunks rather than have the library buffer the entire data result and pass that back.
	 */
	define('GEARMAN_CLIENT_UNBUFFERED_RESULT', null);

	/**
	 * Failed to connect to servers.
	 */
	define('GEARMAN_COULD_NOT_CONNECT', null);

	define('GEARMAN_DEFAULT_SOCKET_RECV_SIZE', null);

	define('GEARMAN_DEFAULT_SOCKET_SEND_SIZE', null);

	define('GEARMAN_DEFAULT_SOCKET_TIMEOUT', null);

	define('GEARMAN_DEFAULT_TCP_HOST', null);

	define('GEARMAN_DEFAULT_TCP_PORT', null);

	/**
	 * After <code>GearmanClient::echo()</code> or <code>GearmanWorker::echo()</code> the data returned doesn't match the data sent.
	 */
	define('GEARMAN_ECHO_DATA_CORRUPTION', null);

	/**
	 * A system error. Check <b>GearmanClient::errno()</b> or <b>GearmanWorker::errno()</b> for the system error code that was returned.
	 */
	define('GEARMAN_ERRNO', null);

	/**
	 * DNS resolution failed (invalid host, port, etc).
	 */
	define('GEARMAN_GETADDRINFO', null);

	/**
	 * Trying to register a function name of NULL or using the callback interface without specifying callbacks.
	 */
	define('GEARMAN_INVALID_FUNCTION_NAME', null);

	/**
	 * Trying to register a function with a NULL callback function.
	 */
	define('GEARMAN_INVALID_WORKER_FUNCTION', null);

	/**
	 * When in non-blocking mode, an event is hit that would have blocked.
	 */
	define('GEARMAN_IO_WAIT', null);

	define('GEARMAN_JOB_HANDLE_SIZE', null);

	/**
	 * Lost a connection during a request.
	 */
	define('GEARMAN_LOST_CONNECTION', null);

	define('GEARMAN_MAX_COMMAND_ARGS', null);

	define('GEARMAN_MAX_ERROR_SIZE', null);

	/**
	 * Memory allocation failed (ran out of memory).
	 */
	define('GEARMAN_MEMORY_ALLOCATION_FAILURE', null);

	/**
	 * When the client opted to stream the workload of a task, but did not specify a workload callback function.
	 */
	define('GEARMAN_NEED_WORKLOAD_FN', null);

	/**
	 * <b>GearmanClient::wait()</b> or <b>GearmanWorker()</b> was called with no connections.
	 */
	define('GEARMAN_NO_ACTIVE_FDS', null);

	/**
	 * For a non-blocking worker, when <code>GearmanWorker::work()</code> does not have any active jobs.
	 */
	define('GEARMAN_NO_JOBS', null);

	/**
	 * When a worker gets a job for a function it did not register.
	 */
	define('GEARMAN_NO_REGISTERED_FUNCTIONS', null);

	/**
	 * Did not call <code>GearmanClient::addServer()</code> before submitting jobs or tasks.
	 */
	define('GEARMAN_NO_SERVERS', null);

	define('GEARMAN_OPTION_SIZE', null);

	define('GEARMAN_PACKET_HEADER_SIZE', null);

	/**
	 * For the non-blocking client task interface, can be returned from the task callback to "pause" the call and return from <code>GearmanClient::runTasks()</code>. Call <code>GearmanClient::runTasks()</code> again to continue.
	 */
	define('GEARMAN_PAUSE', null);

	define('GEARMAN_RECV_BUFFER_SIZE', null);

	define('GEARMAN_SEND_BUFFER_SIZE', null);

	/**
	 * Internal error: trying to flush more data in one atomic chunk than is possible due to hard-coded buffer sizes.
	 */
	define('GEARMAN_SEND_BUFFER_TOO_SMALL', null);

	/**
	 * Something went wrong in the Gearman server and it could not handle the request gracefully.
	 */
	define('GEARMAN_SERVER_ERROR', null);

	/**
	 * Whatever action was taken was successful.
	 */
	define('GEARMAN_SUCCESS', null);

	/**
	 * Hit the timeout limit set by the client/worker.
	 */
	define('GEARMAN_TIMEOUT', null);

	/**
	 * Indicates something going very wrong in gearmand. Applies only to GearmanWorker.
	 */
	define('GEARMAN_UNEXPECTED_PACKET', null);

	define('GEARMAN_UNIQUE_SIZE', null);

	/**
	 * Internal client/worker state error.
	 */
	define('GEARMAN_UNKNOWN_STATE', null);

	/**
	 * Notice return code obtained with <code>GearmanClient::returnCode()</code> when using <code>GearmanClient::do()</code>. Sent to update the client with data from a running job. A worker uses this when it needs to send updates, send partial results, or flush data during long running jobs.
	 */
	define('GEARMAN_WORK_DATA', null);

	/**
	 * Notice return code obtained with <code>GearmanClient::returnCode()</code> when using <code>GearmanClient::do()</code>. Indicates that a job failed with a given exception.
	 */
	define('GEARMAN_WORK_EXCEPTION', null);

	/**
	 * Notice return code obtained with <code>GearmanClient::returnCode()</code> when using <code>GearmanClient::do()</code>. Indicates that the job failed.
	 */
	define('GEARMAN_WORK_FAIL', null);

	/**
	 * Notice return code obtained with <code>GearmanClient::returnCode()</code> when using <code>GearmanClient::do()</code>. Sent to update the status of a long running job. Use <code>GearmanClient::doStatus()</code> to obtain the percentage complete of the task.
	 */
	define('GEARMAN_WORK_STATUS', null);

	/**
	 * Notice return code obtained with <code>GearmanClient::returnCode()</code> when using <code>GearmanClient::do()</code>. Updates the client with a warning. The behavior is just like <b><code>GEARMAN_WORK_DATA</code></b>, but should be treated as a warning instead of normal response data.
	 */
	define('GEARMAN_WORK_WARNING', null);

	/**
	 * Return the client assigned unique ID in addition to the job handle.
	 */
	define('GEARMAN_WORKER_GRAB_UNIQ', null);

	/**
	 * Run the worker in non-blocking mode.
	 */
	define('GEARMAN_WORKER_NON_BLOCKING', null);

	define('GEARMAN_WORKER_WAIT_TIMEOUT', null);

}
