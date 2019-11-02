<?php



namespace {

	/**
	 * 人為的に負荷を高くする。テストやベンチマークなどで有用
	 * <p><b>eio_busy()</b> は人為的に負荷を高め、実行前に <code>delay</code> 秒待ちます。デバッグやベンチマークに使えるでしょう。</p>
	 * @param int $delay <p>待つ秒数。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p>すべてのグループリクエストが終わったときに呼ばれるコールバック。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_busy()</b> は成功した場合にリクエストリソースを返します。エラー時には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-busy.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_busy(int $delay, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * リクエストを取り消す
	 * <p><b>eio_cancel()</b> は、 <code>req</code> で指定したリクエストを取り消します。</p>
	 * @param resource $req <p>リクエストリソース。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.eio-cancel.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_cancel($req): void {}

	/**
	 * ファイルやディレクトリのパーミッションを変更する
	 * <p><b>eio_chmod()</b> は、ファイルやディレクトリのパーミッションを変更します。 新しいパーミッションを <code>mode</code> で指定します。</p>
	 * @param string $path <p>対象となるファイルやディレクトリのパス。</p> <b>警告</b><p>相対パスを避けましょう</p>
	 * @param int $mode <p>新しいパーミッション。<b><code>0644</code></b> など。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_chmod()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-chmod.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_chmod(string $path, int $mode, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルやディレクトリのオーナーを変更する
	 * <p>ファイルやディレクトリのオーナーを変更します。</p>
	 * @param string $path <p>ファイルやディレクトリへのパス。</p> <b>警告</b><p>相対パスを避けましょう</p>
	 * @param int $uid <p>ユーザー ID。-1 にすると無視されます。</p>
	 * @param int $gid <p>グループ ID。-1 にすると無視されます。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_chown()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-chown.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_chown(string $path, int $uid, int $gid = -1, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルを閉じる
	 * <p><b>eio_close()</b> は、 <code>fd</code> で指定したファイルを閉じます。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_close()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-close.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_close($fd, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * eio_&#42; のようなカスタムリクエストを実行する
	 * <p><b>eio_custom()</b> は、 <code>execute</code> で指定したカスタム関数を実行し、 その他の <i>eio_&#42;</i> と同じように処理します。</p>
	 * @param callable $execute <p>次のプロトタイプに沿ったリクエスト関数を指定します。</p><pre> mixed execute(mixed data); </pre> <code>callback</code> はイベント完了後のコールバックで、次のプロトタイプに従う必要があります。 <pre> void callback(mixed data, mixed result); </pre> <code>data</code> は、 <code>execute</code> に <code>data</code> 引数経由で渡すデータです。 <code>execute</code> が返す <code>result</code> の値に手を加えません。
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_custom()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-custom.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_custom(callable $execute, int $pri, callable $callback, $data = NULL) {}

	/**
	 * ファイルディスクリプタを複製する
	 * <p><b>eio_dup2()</b> は、ファイルディスクリプタを複製します。</p>
	 * @param mixed $fd <p>複製元のストリーム、ソケットリソース、あるいはファイルディスクリプタ。</p>
	 * @param mixed $fd2 <p>複製先のストリーム、ソケットリソース、あるいはファイルディスクリプタ。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_dup2()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-dup2.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_dup2($fd, $fd2, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * すべてのリクエストを処理し終えるまで libeio をポールする
	 * <p><b>eio_event_loop()</b> は、すべてのリクエストを処理し終えるまで libeio をポールします。</p>
	 * @return bool <p><b>eio_event_loop()</b> は、成功した場合に <b><code>TRUE</code></b> を返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-event-loop.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_event_loop(): bool {}

	/**
	 * 呼び出し元が、ファイルに割り当てられたディスク空間を直接操作できるようにする
	 * <p><b>eio_fallocate()</b> 呼び出し元が、ファイルに割り当てられたディスク空間を直接操作できるようにします。 ファイルの指定はファイルディスクリプタ <code>fd</code> で行い、 バイト幅の指定は開始位置 <code>offset</code> とそこからの長さ <code>length</code> で行います。</p><p><b>注意</b>: <b>書き込みモードでのオープンが必須</b><br></p><p><b><code>EIO_O_CREAT</code></b> を <b><code>EIO_O_WRONLY</code></b> あるいは <b><code>EIO_O_RDWR</code></b> と論理 <i>OR</i> しなければいけません。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ (たとえば <code>eio_open()</code> が返すもの)。</p>
	 * @param int $mode <p>現在サポートするフラグは <b><code>EIO_FALLOC_FL_KEEP_SIZE</code></b> (POSIX の定数 <b><code>FALLOC_FL_KEEP_SIZE</code></b> と同じ意味) だけです。</p>
	 * @param int $offset <p>バイト幅の開始位置。</p>
	 * @param int $length <p>バイト幅の長さ。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_fallocate()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-fallocate.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fallocate($fd, int $mode, int $offset, int $length, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルのパーミッションを変更する
	 * <p><b>eio_fchmod()</b> は、 ファイルディスクリプタ <code>fd</code> で指定したファイルやディレクトリのパーミッションを変更します。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ (<code>eio_open()</code> が返すものなど)。</p>
	 * @param int $mode <p>新しいパーミッション。例: 0644</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_fchmod()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-fchmod.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fchmod($fd, int $mode, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルのオーナーを変更する
	 * <p><b>eio_fchown()</b> は、 ファイルディスクリプタ <code>fd</code> で指定したファイルやディレクトリのオーナーを変更します。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ。</p>
	 * @param int $uid <p>ユーザー ID。-1 にすると無視されます。</p>
	 * @param int $gid <p>グループ ID。-1 にすると無視されます。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource
	 * @link https://php.net/manual/ja/function.eio-fchown.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fchown($fd, int $uid, int $gid = -1, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルのコア内の情報をストレージデバイスに同期させる
	 * <p><b>eio_fdatasync()</b> は、ファイルのコア内の情報をストレージデバイスに同期させます。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ (<code>eio_open()</code> が返すものなど)。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_fdatasync()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-fdatasync.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fdatasync($fd, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルの状態を取得する
	 * <p><b>eio_fstat()</b> は、 <code>callback</code> の <code>result</code> 引数でファイルの状態を返します。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><code>eio_busy()</code> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-fstat.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fstat($fd, int $pri, callable $callback, $data = NULL) {}

	/**
	 * ファイルシステムの状態を取得する
	 * <p><b>eio_fstatvfs()</b> は、ファイルシステムの状態を <code>callback</code> の <code>result</code> で返します。</p>
	 * @param mixed $fd <p>マウントされたファイルシステム内のファイルのディスクリプタ。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_fstatvfs()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-fstatvfs.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fstatvfs($fd, int $pri, callable $callback, $data = NULL) {}

	/**
	 * メモリ内でのファイルの状態をストレージデバイスに同期させる
	 * <p>メモリ内でのファイルの状態をストレージデバイスに同期させます。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_fsync()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-fsync.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_fsync($fd, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルを切り詰める
	 * <p><b>eio_ftruncate()</b> は、ファイルディスクリプタ <code>fd</code> で指定したファイルを切り詰めて、ちょうど <code>length</code> バイトにします。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ。</p>
	 * @param int $offset <p>ファイルの先頭からのオフセット。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_ftruncate()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-ftruncate.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_ftruncate($fd, int $offset = 0, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルの最終アクセス時刻と変更時刻を変更する
	 * <p><b>eio_futime()</b> は、ファイルの最終アクセス時刻と変更時刻を変更します。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ (<code>eio_open()</code> が返すものなど)。</p>
	 * @param float $atime <p>アクセス時刻。</p>
	 * @param float $mtime <p>変更時刻。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_futime()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-futime.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_futime($fd, float $atime, float $mtime, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * 内部での libeio との通信に使う変数を表すストリームを取得する
	 * <p><b>eio_get_event_stream()</b> は、内部での libeio との通信に使う変数を表すストリームを取得します。 他の PECL 拡張モジュール、たとえば libevent にバインドさせたりして使うことができます。</p>
	 * @return mixed <p><b>eio_get_event_stream()</b> は、成功した場合にストリームを返します。それ以外の場合に <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-get-event-stream.php
	 * @since PECL eio >= 0.3.1b
	 */
	function eio_get_event_stream() {}

	/**
	 * リクエストリソースに関連づけられた直近のエラーの説明を文字列で返す
	 * <p><b>eio_get_last_error()</b> は、 <code>req</code> に関連づけられた直近のエラーの説明を文字列で返します。</p>
	 * @param resource $req <p>リクエストリソース。</p>
	 * @return string <p><b>eio_get_last_error()</b> は、<code>req</code> に関連づけられた直近のエラーの説明を文字列で返します。</p> <b>警告</b><p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p>
	 * @link https://php.net/manual/ja/function.eio-get-last-error.php
	 * @since PECL eio >= 1.0.0
	 */
	function eio_get_last_error($req): string {}

	/**
	 * リクエストグループを作る
	 * <p><b>eio_grp()</b> は、リクエストグループを作ります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param string $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_grp()</b> は、成功した場合にリクエストグループリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-grp.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_grp(callable $callback, string $data = NULL) {}

	/**
	 * リクエストをリクエストグループに追加する
	 * <p><b>eio_grp_add()</b> は、リクエストをリクエストグループに追加します。</p>
	 * @param resource $grp <p><code>eio_grp()</code> が返すリクエストグループリソース。</p>
	 * @param resource $req <p>リクエストリソース。</p>
	 * @return void <p><b>eio_grp_add()</b> は値を返しません。</p>
	 * @link https://php.net/manual/ja/function.eio-grp-add.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_grp_add($grp, $req): void {}

	/**
	 * リクエストグループをキャンセルする
	 * <p><b>eio_grp_cancel()</b> は、 <code>grp</code> で指定したグループリクエストをキャンセルします。</p>
	 * @param resource $grp <p><code>eio_grp()</code> が返すリクエストグループリソース。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.eio-grp-cancel.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_grp_cancel($grp): void {}

	/**
	 * グループリミットを設定する
	 * <p>リクエストグループ内のリクエスト数を制限します。</p>
	 * @param resource $grp <p>リクエストグループリソース。</p>
	 * @param int $limit <p>グループ内のリクエスト数。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.eio-grp-limit.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_grp_limit($grp, int $limit): void {}

	/**
	 * Eio を初期化する
	 * <p><b>eio_init()</b> は、Eio を初期化します。 libeio と Eio 自身が使う内部構造用にメモリを確保します。 Eio 関数を使う前に <b>eio_init()</b> をコールしましょう。 もしコールしなくても、Eio 関数を最初にコールするときに、 内部で自動的にコールされます。</p><p></p><p>この非推奨の機能は、<i>きっと</i> 将来 <i>削除</i> されるでしょう。 Eio <i>1.1.0</i> からは <b>eio_init()</b> が非推奨となりました。 Eio <i>1.0.0</i> では、 » <i>libeio</i> の制約 があったため、もしフォークしていたなら子プロセスで <i>必ず</i> <b>eio_init()</b> をコールしなければいけませんでした。また、子プロセスで Eio を使うのなら 親プロセスでは Eio を使わないようにしなければいけません。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.eio-init.php
	 * @since PECL eio = 1.0.0
	 */
	function eio_init(): void {}

	/**
	 * ファイルのハードリンクを作る
	 * <p><b>eio_link()</b> は、<code>path</code> へのハードリンク <code>new_path</code> を作ります。</p>
	 * @param string $path <p>リンク元のパス。</p>
	 * @param string $new_path <p>リンク先のパス。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource
	 * @link https://php.net/manual/ja/function.eio-link.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_link(string $path, string $new_path, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルの状態を取得する
	 * <p><b>eio_lstat()</b> は、 <code>callback</code> の <code>result</code> 引数でファイルの状態を返します。</p>
	 * @param string $path <p>ファイルへのパス。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_lstat()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-lstat.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_lstat(string $path, int $pri, callable $callback, $data = NULL) {}

	/**
	 * ディレクトリを作る
	 * <p><b>eio_mkdir()</b> は、 <code>mode</code> で指定したアクセスモードでディレクトリを作ります。</p>
	 * @param string $path <p>新しいディレクトリへのパス。</p>
	 * @param int $mode <p>アクセスモード。例: 0755</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_mkdir()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-mkdir.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_mkdir(string $path, int $mode, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * 特殊ファイルあるいは一般ファイルを作る
	 * <p><b>eio_mknod()</b> は、一般ファイルや特殊ファイル (こちらのほうが頻繁にあります) を作ります。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $path <p>新しいノード (ファイル) へのパス。</p>
	 * @param int $mode <p>利用するパーミッションと作成するノードの型を指定します。 以下のファイルタイプ定数のひとつと、新しいノードのパーミッション (0640 など) をビット OR で組み合わせたものとなります。 ファイルタイプ定数: <b><code>EIO_S_IFREG</code></b>(通常ファイル)、 <b><code>EIO_S_IFCHR</code></b>(キャラクタファイル)、 <b><code>EIO_S_IFBLK</code></b>(ブロック特殊ファイル)、 <b><code>EIO_S_IFIFO</code></b>(FIFO - 名前付きパイプ) および <b><code>EIO_S_IFSOCK</code></b>(UNIX ドメインソケット)。 パーミッションの指定には <i>EIO_S_I&#42;</i> 定数も使えます。</p>
	 * @param int $dev <p>ファイルタイプが <b><code>EIO_S_IFCHR</code></b> あるいは <b><code>EIO_S_IFBLK</code></b> の場合に、 新しく作るデバイスファイルのメジャー番号とマイナー番号を指定します。 それ以外の場合は無視されます。<i>詳細は mknod(2) の man ページを参照ください</i>。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_mknod()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-mknod.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_mknod(string $path, int $mode, int $dev, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * 何もせず、ただリクエストのサイクルを回す
	 * <p><b>eio_nop()</b> は、何もせずただリクエストのサイクルを回します。 デバッグ時に有用です。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_nop()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-nop.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_nop(int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * 終了したけれども処理されなかったリクエストの数を返す
	 * <p><b>eio_npending()</b> は、終了したけれども処理されなかったリクエストの数を返します。</p>
	 * @return int <p><b>eio_npending()</b> は、終了したけれども処理されなかったリクエストの数を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-npending.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_npending(): int {}

	/**
	 * 未処理のリクエスト数を返す
	 * @return int <p><b>eio_nready()</b> は、未処理のリクエスト数を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-nready.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_nready(): int {}

	/**
	 * 処理対象のリクエスト数を返す
	 * <p><b>eio_nreqs()</b> は、 <code>eio_poll()</code> を呼ぶカスタムループの中からコールされます。</p>
	 * @return int <p><b>eio_nreqs()</b> は、処理対象のリクエスト数を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-nreqs.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_nreqs(): int {}

	/**
	 * 現在利用中のスレッド数を返す
	 * @return int <p><b>eio_nthreads()</b> は、現在利用中のスレッド数を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-nthreads.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_nthreads(): int {}

	/**
	 * ファイルを開く
	 * <p><b>eio_open()</b> は、 <code>path</code> で指定したファイルをアクセスモード <code>mode</code> で開きます。</p>
	 * @param string $path <p>開きたいファイルへのパス。</p> <b>警告</b><p>SAPI の種類によっては (<i>PHP-FPM</i> など)、 フルパスで指定しないと失敗します。</p>
	 * @param int $flags <p><i>EIO_O_&#42;</i> 定数のいずれか、あるいは複数の組み合わせ。 <i>EIO_O_&#42;</i> 定数の意味は、C のヘッダファイル <i>fnctl.h</i> で定義されている <i>O_&#42;</i> と同じです。デフォルトは <b><code>EIO_O_RDWR</code></b> です。</p>
	 * @param int $mode <p><i>EIO_S_I&#42;</i> 定数のいずれか、あるいは複数の (ビット OR による) 組み合わせ。 この定数の意味は、C のヘッダファイル » sys/stat.h で定義されている <i>S_I&#42;</i> と同じです。 新しくファイルを作るときは必須で、それ以外の場合は無視されます。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_open()</b> は、成功した場合に <code>callback</code> の <code>result</code> 引数でファイルディスクリプタを返します。 それ以外の場合は、<code>result</code> は <b><code>-1</code></b> になります。</p>
	 * @link https://php.net/manual/ja/function.eio-open.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_open(string $path, int $flags, int $mode, int $pri, callable $callback, $data = NULL) {}

	/**
	 * 未処理のリクエストがあるかどうかを調べる
	 * <p><b>eio_poll()</b> を使うと、特別なイベントループを実装できます。 この中で <code>eio_nreqs()</code> を使って、未処理のリクエストの有無を調べます。 unprocessed requests.</p><p><b>注意</b>:</p><p>ユーザー空間でのイベントループを実装するときにしか使えません。</p>
	 * @return int <p>何かのリクエストを実行してそれが非ゼロを返した場合は、その値を返します。 それ以外の場合は <b><code>0</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-poll.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_poll(): int {}

	/**
	 * ファイルを、指定したオフセットから読み込む
	 * <p><b>eio_read()</b> は、<code>fd</code> が指すファイルの <code>offset</code> から最大 <code>length</code> バイトまでを読み込みます。 読み込んだデータは <code>callback</code> の <code>result</code> 引数に格納されます。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ。</p>
	 * @param int $length <p>読み込むバイト数の最大値。</p>
	 * @param int $offset <p>ファイル内でのオフセット。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_read()</b> は、読み込んだデータを <code>callback</code> 関数の <code>result</code> 引数に格納します。</p>
	 * @link https://php.net/manual/ja/function.eio-read.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_read($fd, int $length, int $offset, int $pri, callable $callback, $data = NULL) {}

	/**
	 * ファイルを先読みしてページキャッシュに格納する
	 * <p><b>eio_readahead()</b> は、ファイルを先読みしてページキャッシュに格納します。 それ以降の読み込みは、ディスク I/O をブロックしなくなります。詳細は <i>READAHEAD(2)</i> の man ページを参照ください。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ。</p>
	 * @param int $offset <p>読み込みの開始位置。</p>
	 * @param int $length <p>読み込むバイト数。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_readahead()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-readahead.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_readahead($fd, int $offset, int $length, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ディレクトリ全体を読み込む
	 * <p>ディレクトリ全体を (<i>opendir</i> や <i>readdir</i>、 <i>closedir</i> といったシステムコールを使って) 読み込み、 ファイル名あるいは配列 (<code>flags</code> で指定する) を <code>callback</code> 関数の <code>result</code> 引数で返します。</p>
	 * @param string $path <p>ディレクトリのパス。</p>
	 * @param int $flags <p><i>EIO_READDIR_&#42;</i> 定数の組み合わせ。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param string $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_readdir()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。 <code>callback</code> 関数の <code>result</code> に設定される内容は <code>flags</code> によって変わります。</p>  <b><code>EIO_READDIR_DENTS</code></b> (<code>integer</code>)    <b>eio_readdir()</b> のフラグ。指定すると、コールバックの result 引数が次のキーを持つ配列になります。 <i>'names'</i> - ディレクトリ名の配列／ <i>'dents'</i> - <i>struct eio_dirent</i> 風の配列で、 それぞれがさらに以下のキーを持ちます ( <i>'name'</i> - ディレクトリ名／ <i>'type'</i> - <i>EIO_DT_&#42;</i> 定数のいずれか／ <i>'inode'</i> - inode 番号。存在しない場合は不定 )    <b><code>EIO_READDIR_DIRS_FIRST</code></b> (<code>integer</code>)    このフラグを指定すると、ディレクトリをまず最初に返して stat に最適化した順に返します。    <b><code>EIO_READDIR_STAT_ORDER</code></b> (<code>integer</code>)    このフラグを指定すると、名前を返すときの順序が 各ファイルを <i>stat</i> するのに適した順となります。 指定したディレクトリにあるすべてのファイルを <code>stat()</code> するつもりなら、この順にしておけば最速になります。    <b><code>EIO_READDIR_FOUND_UNKNOWN</code></b> (<code>integer</code>)      <p>ノード型</p>  <b><code>EIO_DT_UNKNOWN</code></b> (<code>integer</code>)    不明なノード型 (ありがち)。さらに <code>stat()</code> が必要です。    <b><code>EIO_DT_FIFO</code></b> (<code>integer</code>)    FIFO ノード型    <b><code>EIO_DT_CHR</code></b> (<code>integer</code>)    ノード型    <b><code>EIO_DT_MPC</code></b> (<code>integer</code>)    多重化キャラクタデバイス (v7+coherent) ノード型    <b><code>EIO_DT_DIR</code></b> (<code>integer</code>)    ディレクトリノード型    <b><code>EIO_DT_NAM</code></b> (<code>integer</code>)    Xenix 名前付きファイルノード型    <b><code>EIO_DT_BLK</code></b> (<code>integer</code>)    ノード型    <b><code>EIO_DT_MPB</code></b> (<code>integer</code>)    多重化ブロックデバイス (v7+coherent)    <b><code>EIO_DT_REG</code></b> (<code>integer</code>)    ノード型    <b><code>EIO_DT_NWK</code></b> (<code>integer</code>)       <b><code>EIO_DT_CMP</code></b> (<code>integer</code>)    HP-UX ネットワークノード型    <b><code>EIO_DT_LNK</code></b> (<code>integer</code>)    リンクノード型    <b><code>EIO_DT_SOCK</code></b> (<code>integer</code>)    ソケットノード型    <b><code>EIO_DT_DOOR</code></b> (<code>integer</code>)    Solaris door ノード型    <b><code>EIO_DT_WHT</code></b> (<code>integer</code>)    ノード型    <b><code>EIO_DT_MAX</code></b> (<code>integer</code>)    ノード型の最大値
	 * @link https://php.net/manual/ja/function.eio-readdir.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_readdir(string $path, int $flags, int $pri, callable $callback, string $data = NULL) {}

	/**
	 * シンボリックリンクの値を読む
	 * @param string $path <p>シンボリックリンクへのパス。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param string $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_readlink()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-readlink.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_readlink(string $path, int $pri, callable $callback, string $data = NULL) {}

	/**
	 * 正規化された絶対パスを取得する
	 * <p><b>eio_realpath()</b> は、正規化された絶対パスを <code>callback</code> 関数の <code>result</code> 引数で返します。</p>
	 * @param string $path <p>短い形式のパス。</p>
	 * @param int $pri
	 * @param callable $callback
	 * @param string $data
	 * @return resource
	 * @link https://php.net/manual/ja/function.eio-realpath.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_realpath(string $path, int $pri, callable $callback, string $data = NULL) {}

	/**
	 * ファイル名や場所を変更する
	 * <p><b>eio_rename()</b> は、ファイル名を変更したり別の場所に移動したりします。</p>
	 * @param string $path <p>元のパス。</p>
	 * @param string $new_path <p>変更後のパス。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_rename()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-rename.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_rename(string $path, string $new_path, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ディレクトリを削除する
	 * <p><b>eio_rmdir()</b> は、ディレクトリを削除します。</p>
	 * @param string $path <p>ディレクトリへのパス。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_rmdir()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-rmdir.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_rmdir(string $path, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * fd で指定したファイル内でのオフセットを、offset と whence に従って移動する
	 * <p><b>eio_seek()</b> は、<code>fd</code> で指定したファイル内でのオフセットを、<code>offset</code> と <code>whence</code> で指定した位置に移動します。<code>whence</code> の意味は次のとおりです。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ。</p>
	 * @param int $offset <p>読み込みの開始位置。</p>
	 * @param int $whence
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_seek()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-seek.php
	 * @since PECL eio >= 0.5.0b
	 */
	function eio_seek($fd, int $offset, int $whence, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルディスクリプタ間でデータを転送する
	 * <p><b>eio_sendfile()</b> は、一方のファイルディスクリプタから もう一方のファイルディスクリプタにデータをコピーします。 詳細は <i>SENDFILE(2)</i> の man ページを参照ください。</p>
	 * @param mixed $out_fd <p>出力先のストリーム、ソケットリソース、あるいはファイルディスクリプタ。 書き込みモードでのオープンが必須です。</p>
	 * @param mixed $in_fd <p>入力元のストリーム、ソケットリソース、あるいはファイルディスクリプタ。 読み込みモードでのオープンが必須です。</p>
	 * @param int $offset <p>元ファイル内でのオフセット。</p>
	 * @param int $length <p>コピーするバイト数。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param string $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_sendfile()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-sendfile.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_sendfile($out_fd, $in_fd, int $offset, int $length, int $pri = NULL, callable $callback = NULL, string $data = NULL) {}

	/**
	 * アイドルスレッドの最大数を設定する
	 * @param int $nthreads <p>アイドルスレッドの数。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.eio-set-max-idle.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_set_max_idle(int $nthreads): void {}

	/**
	 * 最大の並列スレッド数を設定する
	 * @param int $nthreads <p>並列スレッドの数。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.eio-set-max-parallel.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_set_max_parallel(int $nthreads): void {}

	/**
	 * 一度のポールで行う最大のリクエスト回数を設定する
	 * @param int $nreqs <p>リクエスト回数。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.eio-set-max-poll-reqs.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_set_max_poll_reqs(int $nreqs): void {}

	/**
	 * 最大のポール時間を設定する
	 * <p>ポールの所要時間が <code>nseconds</code> 秒を超えると、処理を止めます。</p>
	 * @param float $nseconds <p>秒数。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.eio-set-max-poll-time.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_set_max_poll_time(float $nseconds): void {}

	/**
	 * 最小の並列スレッド数を設定する
	 * @param string $nthreads <p>並列スレッドの数。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.eio-set-min-parallel.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_set_min_parallel(string $nthreads): void {}

	/**
	 * ファイルの状態を取得する
	 * <p><b>eio_stat()</b> は、 <code>callback</code> の <code>result</code> 引数でファイルの状態を返します。</p>
	 * @param string $path <p>ファイルへのパス。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_stat()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。 成功した場合は、<code>callback</code> の <code>result</code> 引数に配列が格納されます。</p>
	 * @link https://php.net/manual/ja/function.eio-stat.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_stat(string $path, int $pri, callable $callback, $data = NULL) {}

	/**
	 * ファイルシステムの状態を取得する
	 * <p><b>eio_statvfs()</b> は、ファイルシステムの状態を <code>callback</code> の <code>result</code> で返します。</p>
	 * @param string $path <p>マウントされたファイルシステム内のファイルのパス。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_statvfs()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。 成功した場合は、<code>callback</code> の <code>result</code> 引数に配列が格納されます。</p>
	 * @link https://php.net/manual/ja/function.eio-statvfs.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_statvfs(string $path, int $pri, callable $callback, $data = NULL) {}

	/**
	 * シンボリックリンクを作る
	 * <p><b>eio_symlink()</b> は、<code>path</code> へのシンボリックリンク <code>new_path</code> を作ります。</p>
	 * @param string $path <p>リンク元のパス。</p>
	 * @param string $new_path <p>リンク先のパス。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_symlink()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-symlink.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_symlink(string $path, string $new_path, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * バッファのキャッシュをディスクに書き込む
	 * @param int $pri
	 * @param callable $callback
	 * @param mixed $data
	 * @return resource <p><b>eio_sync()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-sync.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_sync(int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルセグメントをディスクに同期する
	 * <p><b>eio_sync_file_range()</b> は、ファイルディスクリプタ <code>fd</code> が指すオープン中のファイルをディスクに同期します。</p>
	 * @param mixed $fd <p>ファイルディスクリプタ。</p>
	 * @param int $offset <p>同期を開始する位置をバイト単位で指定する。</p>
	 * @param int $nbytes <p>同期させる範囲の長さをバイト単位で指定する。 <code>nbytes</code> がゼロの場合は、<code>offset</code> からファイルの末尾までのすべての範囲を同期します。</p>
	 * @param int $flags <p>ビットマスク。以下のいずれかの値を含めます。 <b><code>EIO_SYNC_FILE_RANGE_WAIT_BEFORE</code></b>, <b><code>EIO_SYNC_FILE_RANGE_WRITE</code></b>, <b><code>EIO_SYNC_FILE_RANGE_WAIT_AFTER</code></b>. これらのフラグは、それぞれ対応する <i>SYNC_FILE_RANGE_&#42;</i> と同じ意味です (<i>SYNC_FILE_RANGE(2)</i> の man ページを参照ください)。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_sync_file_range()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-sync-file-range.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_sync_file_range($fd, int $offset, int $nbytes, int $flags, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * Linux の syncfs システムコールが使えれば、それを呼ぶ
	 * @param mixed $fd <p>ファイルディスクリプタ。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_syncfs()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-syncfs.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_syncfs($fd, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルを切り詰める
	 * <p><b>eio_truncate()</b> は、<code>path</code> で指定したファイルを切り詰めて、ちょうど <code>length</code> バイトにします。</p>
	 * @param string $path <p>ファイルへのパス。</p>
	 * @param int $offset <p>ファイルの先頭からのオフセット。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><code>eio_busy()</code> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-truncate.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_truncate(string $path, int $offset = 0, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * 名前を削除し、その名前で参照しているファイルも削除する
	 * <p><b>eio_unlink()</b> は、その名前をファイルシステムから削除します。</p>
	 * @param string $path <p>ファイルへのパス。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_unlink()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-unlink.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_unlink(string $path, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルの最終アクセス時刻と変更時刻を変更する
	 * @param string $path <p>ファイルへのパス。</p>
	 * @param float $atime <p>アクセス時刻。</p>
	 * @param float $mtime <p>変更時刻。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_utime()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-utime.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_utime(string $path, float $atime, float $mtime, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ファイルに書き込む
	 * <p><b>eio_write()</b> は、<code>str</code> の先頭から <code>offset</code> バイトの位置から、最大で <code>length</code> バイトまで書き込みます。</p>
	 * @param mixed $fd <p>ストリーム、ソケットリソース、あるいは数値で表したファイルディスクリプタ (<code>eio_open()</code> が返すものなど)。</p>
	 * @param string $str <p>ソース文字列。</p>
	 * @param int $length <p>書き込む最大バイト数。</p>
	 * @param int $offset <p>ファイルの先頭からのオフセット。</p>
	 * @param int $pri <p>リクエストの優先順位。<b><code>EIO_PRI_DEFAULT</code></b>、<b><code>EIO_PRI_MIN</code></b>、<b><code>EIO_PRI_MAX</code></b> あるいは <b><code>NULL</code></b> を指定します。 <b><code>NULL</code></b> を渡した場合、<code>pri</code> は内部的に <b><code>EIO_PRI_DEFAULT</code></b> となります。</p>
	 * @param callable $callback <p><code>callback</code> 関数が、リクエスト終了時にコールされます。 この関数のプロトタイプは、</p><code> void callback(mixed $data, int $result[, resource $req]); </code> に一致しなければなりません。   <code>data</code>   <p>は、リクエストに渡すカスタムデータです。</p>   <code>result</code>   <p>にはリクエスト固有の結果が格納されます。基本的には、対応するシステムコールが返すそのままの値となります。</p>   <code>req</code>   <p>はオプションで指定するリクエストリソースです。 <code>eio_get_last_error()</code> のような関数で使えます。</p>
	 * @param mixed $data <p><code>callback</code> に渡す任意の引数。</p>
	 * @return resource <p><b>eio_write()</b> は、成功した場合にリクエストリソースを返します。エラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.eio-write.php
	 * @since PECL eio >= 0.0.1dev
	 */
	function eio_write($fd, string $str, int $length = 0, int $offset = 0, int $pri = EIO_PRI_DEFAULT, callable $callback = NULL, $data = NULL) {}

	/**
	 * ノード型
	 */
	define('EIO_DT_BLK', null);

	/**
	 * ノード型
	 */
	define('EIO_DT_CHR', null);

	/**
	 * HP-UX ネットワークノード型
	 */
	define('EIO_DT_CMP', null);

	/**
	 * ディレクトリノード型
	 */
	define('EIO_DT_DIR', null);

	/**
	 * Solaris door ノード型
	 */
	define('EIO_DT_DOOR', null);

	/**
	 * FIFO ノード型
	 */
	define('EIO_DT_FIFO', null);

	/**
	 * リンクノード型
	 */
	define('EIO_DT_LNK', null);

	/**
	 * ノード型の最大値
	 */
	define('EIO_DT_MAX', null);

	/**
	 * 多重化ブロックデバイス (v7+coherent)
	 */
	define('EIO_DT_MPB', null);

	/**
	 * 多重化キャラクタデバイス (v7+coherent) ノード型
	 */
	define('EIO_DT_MPC', null);

	/**
	 * Xenix 名前付きファイルノード型
	 */
	define('EIO_DT_NAM', null);

	define('EIO_DT_NWK', null);

	/**
	 * ノード型
	 */
	define('EIO_DT_REG', null);

	/**
	 * ソケットノード型
	 */
	define('EIO_DT_SOCK', null);

	/**
	 * 不明なノード型 (ありがち)。さらに <code>stat()</code> が必要です。
	 */
	define('EIO_DT_UNKNOWN', null);

	/**
	 * ノード型
	 */
	define('EIO_DT_WHT', null);

	define('EIO_FALLOC_FL_KEEP_SIZE', null);

	define('EIO_O_APPEND', null);

	define('EIO_O_CREAT', null);

	define('EIO_O_EXCL', null);

	define('EIO_O_FSYNC', null);

	define('EIO_O_NONBLOCK', null);

	define('EIO_O_RDONLY', null);

	define('EIO_O_RDWR', null);

	define('EIO_O_TRUNC', null);

	define('EIO_O_WRONLY', null);

	/**
	 * 優先度標準
	 */
	define('EIO_PRI_DEFAULT', null);

	/**
	 * 優先度最大
	 */
	define('EIO_PRI_MAX', null);

	/**
	 * 優先度最小
	 */
	define('EIO_PRI_MIN', null);

	/**
	 * <code>eio_readdir()</code> のフラグ。指定すると、コールバックの result 引数が次のキーを持つ配列になります。 <i>'names'</i> - ディレクトリ名の配列／ <i>'dents'</i> - <i>struct eio_dirent</i> 風の配列で、 それぞれがさらに以下のキーを持ちます ( <i>'name'</i> - ディレクトリ名／ <i>'type'</i> - <i>EIO_DT_&#42;</i> 定数のいずれか／ <i>'inode'</i> - inode 番号。存在しない場合は不定 )
	 */
	define('EIO_READDIR_DENTS', null);

	/**
	 * このフラグを指定すると、ディレクトリをまず最初に返して stat に最適化した順に返します。
	 */
	define('EIO_READDIR_DIRS_FIRST', null);

	define('EIO_READDIR_FOUND_UNKNOWN', null);

	/**
	 * このフラグを指定すると、名前を返すときの順序が 各ファイルを <i>stat</i> するのに適した順となります。 指定したディレクトリにあるすべてのファイルを <code>stat()</code> するつもりなら、この順にしておけば最速になります。
	 */
	define('EIO_READDIR_STAT_ORDER', null);

	define('EIO_S_IFBLK', null);

	define('EIO_S_IFCHR', null);

	define('EIO_S_IFIFO', null);

	define('EIO_S_IFREG', null);

	define('EIO_S_IFSOCK', null);

	define('EIO_S_IRGRP', null);

	define('EIO_S_IROTH', null);

	define('EIO_S_IRUSR', null);

	define('EIO_S_IWGRP', null);

	define('EIO_S_IWOTH', null);

	define('EIO_S_IWUSR', null);

	define('EIO_S_IXGRP', null);

	define('EIO_S_IXOTH', null);

	define('EIO_S_IXUSR', null);

	/**
	 * オフセットを現在位置に <code>offset</code> バイト加えた値にする。
	 */
	define('EIO_SEEK_CUR', null);

	/**
	 * オフセットをファイルのサイズに <code>offset</code> バイト加えた値にする。
	 */
	define('EIO_SEEK_END', null);

	/**
	 * オフセットをバイト数で指定する (<code>offset</code>)。
	 */
	define('EIO_SEEK_SET', null);

	define('EIO_SYNC_FILE_RANGE_WAIT_AFTER', null);

	define('EIO_SYNC_FILE_RANGE_WAIT_BEFORE', null);

	define('EIO_SYNC_FILE_RANGE_WRITE', null);

}
