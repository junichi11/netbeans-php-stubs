<?php



namespace {

	/**
	 * 監視を終了する
	 * <p>リソースの監視を終了します。</p><p>さらに <b><code>FAMAcknowledge</code></b> イベントが発生します。</p>
	 * @param resource $fam <p>A resource representing a connection to the FAM service returned by <code>fam_open()</code></p>
	 * @param resource $fam_monitor <p><i>fam_monitor_XXX</i> 関数のいずれかが返すリソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fam-cancel-monitor.php
	 * @see fam_monitor_file(), fam_monitor_directory(), fam_monitor_collection(), fam_suspend_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_cancel_monitor($fam, $fam_monitor): bool {}

	/**
	 * FAM 接続を閉じる
	 * <p>FAM サービスへの接続をクローズします。</p>
	 * @param resource $fam <p><code>fam_open()</code> が返す、 FAM サービスへの接続を表すリソース。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.fam-close.php
	 * @since PHP 5 < 5.1.0
	 */
	function fam_close($fam): void {}

	/**
	 * 指定したディレクトリにあるファイルの変更を監視する
	 * <p>ディレクトリ内のファイルの監視を要求します。</p><p>ファイルの状態が変化したときに FAM イベントが発生します。 発生しうるイベントコードの詳細は、このセクションの 定数 の欄にあります。</p>
	 * @param resource $fam <p><code>fam_open()</code> が返す、 FAM サービスへの接続を表すリソース。</p>
	 * @param string $dirname <p>ファイルを監視するディレクトリへのパス。</p>
	 * @param int $depth <p>このディレクトリから最大 <code>depth</code> 階層まで掘り下げたディレクトリが検索対象となります。</p>
	 * @param string $mask <p>シェルパターン <code>mask</code> により、検索するファイル名を制限します。</p>
	 * @return resource <p>モニタリングリソース、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fam-monitor-collection.php
	 * @see fam_monitor_file(), fam_monitor_directory(), fam_cancel_monitor(), fam_suspend_monitor(), fam_resume_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_monitor_collection($fam, string $dirname, int $depth, string $mask) {}

	/**
	 * ディレクトリの変更を監視する
	 * <p>指定したディレクトリおよびそれに 含まれる全てのファイルを監視するよう指示します。</p><p>指定したディレクトリのステータス(すなわち、このディレクトリに関する <code>stat()</code> の結果)またはその内容 (すなわち、このディレクトリに関する <code>readdir()</code> の結果) が変更される度に FAM イベントが生成されます。</p><p>発生しうるイベントコードの詳細は、このセクションの 定数 の欄にあります。</p>
	 * @param resource $fam <p><code>fam_open()</code> が返す、 FAM サービスへの接続を表すリソース。</p>
	 * @param string $dirname <p>監視するディレクトリへのパス。</p>
	 * @return resource <p>モニタリングリソース、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fam-monitor-directory.php
	 * @see fam_monitor_file(), fam_monitor_collection(), fam_cancel_monitor(), fam_suspend_monitor(), fam_resume_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_monitor_directory($fam, string $dirname) {}

	/**
	 * 通常のファイルの変更を監視する
	 * <p>指定した 1 個のファイルの 監視を指示します。このファイルのステータス(すなわち、このファイルに関する 関数 <code>stat()</code> の結果)が変化する度に FAM イベントが 発生します。</p><p>発生しうるイベントコードの詳細は、このセクションの 定数 の欄にあります。</p>
	 * @param resource $fam <p><code>fam_open()</code> が返す、 FAM サービスへの接続を表すリソース。</p>
	 * @param string $filename <p>監視するファイルへのパス。</p>
	 * @return resource <p>モニタリングリソース、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fam-monitor-file.php
	 * @see fam_monitor_directory(), fam_monitor_collection(), fam_cancel_monitor(), fam_suspend_monitor(), fam_resume_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_monitor_file($fam, string $filename) {}

	/**
	 * 次の待機中の FAM イベントを返す
	 * <p>次の待機中の FAM イベントを返します。</p><p>この関数は、<code>fam_pending()</code> を用いてチェックできる イベントが検出されるまでブロックします。</p>
	 * @param resource $fam <p><code>fam_open()</code> が返す、 FAM サービスへの接続を表すリソース。</p>
	 * @return array <p>FAM イベントコードを要素 '<i>code</i>' に、このイベントが適用されるファイルのパスを 要素 '<i>filename</i>' に、 オプションでホスト名を要素 '<i>hostname</i>' に 含む配列を返します。</p><p>発生しうるイベントコードの詳細は、このセクションの 定数 の欄にあります。</p>
	 * @link https://php.net/manual/ja/function.fam-next-event.php
	 * @see fam_pending()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_next_event($fam): array {}

	/**
	 * FAM デーモンへの接続をオープンする
	 * <p>FAM サービスデーモンへの接続をオープンします。</p>
	 * @param string $appname <p>ログ記録用にアプリケーションを特定する文字列。</p>
	 * @return resource <p>成功した場合に FAM サービスへの接続を表すリソース、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fam-open.php
	 * @see fam_close()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_open(string $appname = NULL) {}

	/**
	 * 待機中の FAM イベントの有無を調べる
	 * <p>待機中の FAM イベントを調べます。</p>
	 * @param resource $fam <p><code>fam_open()</code> が返す、 FAM サービスへの接続を表すリソース。</p>
	 * @return int <p><code>fam_next_event()</code> により取得可能な待機中のイベントが ある場合にゼロ以外の値、ない場合にゼロを返します。</p>
	 * @link https://php.net/manual/ja/function.fam-pending.php
	 * @see fam_next_event()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_pending($fam): int {}

	/**
	 * 中断された監視処理を再開する
	 * <p><code>fam_suspend_monitor()</code> により中断された 指定したリソースへの監視を再開します。</p>
	 * @param resource $fam <p><code>fam_open()</code> が返す、 FAM サービスへの接続を表すリソース。</p>
	 * @param resource $fam_monitor <p><i>fam_monitor_XXX</i> 関数のいずれかが返すリソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fam-resume-monitor.php
	 * @see fam_suspend_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_resume_monitor($fam, $fam_monitor): bool {}

	/**
	 * 監視を一時的に中断する
	 * <p><b>fam_suspend_monitor()</b> は、リソースへの監視を一時的に中断します。</p><p>監視は、<code>fam_resume_monitor()</code> により後で再開することができ、 その際、全く新たに監視を指示する必要はありません。</p>
	 * @param resource $fam <p><code>fam_open()</code> が返す、 FAM サービスへの接続を表すリソース。</p>
	 * @param resource $fam_monitor <p><i>fam_monitor_XXX</i> 関数のいずれかが返すリソース。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.fam-suspend-monitor.php
	 * @see fam_cancel_monitor(), fam_resume_monitor()
	 * @since PHP 5 < 5.1.0
	 */
	function fam_suspend_monitor($fam, $fam_monitor): bool {}

	/**
	 * <code>fam_cancel_monitor()</code> に対する応答イベントです。
	 */
	define('FAMAcknowledge', null);

	/**
	 * ファイルあるいはディレクトリの、fstat(1) で取得できる値のうちの 何かが変更されました。
	 */
	define('FAMChanged', null);

	/**
	 * ディレクトリ内にファイルが作成されました。
	 */
	define('FAMCreated', null);

	/**
	 * ファイルあるいはディレクトリが削除あるいはリネームされました。
	 */
	define('FAMDeleted', null);

	/**
	 * 最後の FAMEExists イベントの後に発生します。
	 */
	define('FAMEndExist', null);

	/**
	 * ファイルやディレクトリの監視を要求するイベントです。 ディレクトリが監視されている場合、ディレクトリおよびその中に 含まれるすべてのファイルについてのイベントが発生します。
	 */
	define('FAMExists', null);

	/**
	 * このイベントは決して発生しません。
	 */
	define('FAMMoved', null);

	/**
	 * 実行可能ファイルが実行されました。
	 */
	define('FAMStartExecuting', null);

	/**
	 * 実行可能ファイルの実行が終了しました。
	 */
	define('FAMStopExecuting', null);

}
