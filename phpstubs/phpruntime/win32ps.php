<?php



namespace {

	/**
	 * 稼動中のプロセスの一覧を取得する
	 * <p>稼動しているすべてのプロセスについての統計データを取得します。</p>
	 * @return array <p>失敗した場合、<b><code>FALSE</code></b> を返します。 成功した場合、実行中のすべてのプロセスについての統計情報を 含む配列を返します。統計情報の形式は <code>win32_ps_stat_proc()</code> が返すものと同じです。</p>
	 * @link https://php.net/manual/ja/function.win32-ps-list-procs.php
	 * @see win32_ps_stat_proc()
	 * @since PECL win32ps >= 1.0.1
	 */
	function win32_ps_list_procs(): array {}

	/**
	 * メモリ使用量の統計情報を取得する
	 * <p>グローバルメモリの使用状況についての統計情報を取得します。</p>
	 * @return array <p>失敗した場合は、<b><code>FALSE</code></b> を返します。 成功した場合は、以下の情報を含む配列を返します。</p>  <code>load</code>   <p>現在のメモリ使用量の、物理メモリに対するパーセンテージ。</p>   <code>unit</code>   <p>これは常に 1024 で、以下の値が 1024 バイト単位であることを示します。</p>   <code>total_phys</code>   <p>物理メモリの総容量。</p>   <code>avail_phys</code>   <p>物理メモリの残容量。</p>   <code>total_pagefile</code>   <p>ページング可能メモリ (物理メモリ + ページングファイル) の総容量。</p>   <code>avail_pagefile</code>   <p>ページング可能メモリ (物理メモリ + ページングファイル) の残容量。</p>   <code>total_virtual</code>   <p>プロセスに対する仮想メモリの総容量。</p>   <code>avail_virtual</code>   <p>プロセスに対する仮想メモリの残容量。</p>
	 * @link https://php.net/manual/ja/function.win32-ps-stat-mem.php
	 * @since PECL win32ps >= 1.0.1
	 */
	function win32_ps_stat_mem(): array {}

	/**
	 * プロセスの統計情報を取得する
	 * <p>プロセス ID <code>pid</code> のプロセスについての 統計情報を取得します。</p>
	 * @param int $pid <p>統計情報を取得するプロセスの ID。 指定しなかった場合は、現在のプロセスの ID が使用されます。</p>
	 * @return array <p>失敗した場合は、<b><code>FALSE</code></b> を返します。 成功した場合は、以下の情報を含む配列を返します。</p>  <code>pid</code>   <p>プロセス ID。</p>   <code>exe</code>   <p>実行イメージへのパス。</p>   <code>mem</code>   <p>メモリの使用量を示す以下の情報を含む配列。 <code>page_fault_count</code>、 <code>peak_working_set_size</code>、 <code>working_set_size</code>、 <code>quota_peak_paged_pool_usage</code>、 <code>quota_paged_pool_usage</code>、 <code>quota_peak_non_paged_pool_usage</code>、 <code>quota_non_paged_pool_usage</code>、 <code>pagefile_usage</code> および <code>peak_pagefile_usage</code>。</p>   <code>tms</code>   <p>CPU 時間の使用状況を示す以下の情報を含む配列。 <code>created</code>、 <code>kernel</code> および <code>user</code>。</p>
	 * @link https://php.net/manual/ja/function.win32-ps-stat-proc.php
	 * @see win32_ps_list_procs()
	 * @since PECL win32ps >= 1.0.1
	 */
	function win32_ps_stat_proc(int $pid = 0): array {}

}
