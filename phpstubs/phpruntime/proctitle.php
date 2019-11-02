<?php



namespace {

	/**
	 * プロセスのタイトルを設定
	 * <p>プロセスのタイトルを設定します。</p>
	 * @param string $title <p>プロセスのタイトルとして使用するタイトル</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.setproctitle.php
	 * @see cli_set_process_title(), pcntl_fork(), setthreadtitle()
	 * @since PECL proctitle >= 0.1.0
	 */
	function setproctitle(string $title): void {}

	/**
	 * スレッドのタイトルを設定
	 * <p>スレッドのタイトルを設定します。</p>
	 * @param string $title <p>スレッドのタイトルとして使用するタイトル</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.setthreadtitle.php
	 * @see pcntl_fork(), setproctitle()
	 * @since PECL proctitle >= 0.1.2
	 */
	function setthreadtitle(string $title): bool {}

}
