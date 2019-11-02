<?php



namespace {

	/**
	 * xhprof プロファイラを終了する
	 * <p>プロファイラを終了して、xhprof の実行結果データを返します。</p>
	 * @return array <p>実行結果の xhprof データを配列で返します。</p>
	 * @link https://php.net/manual/ja/function.xhprof-disable.php
	 * @since PECL xhprof >= 0.9.0
	 */
	function xhprof_disable(): array {}

	/**
	 * xhprof プロファイラを開始する
	 * <p>xhprof のプロファイリングを開始します。</p>
	 * @param int $flags <p>オプションのフラグで、プロファイル用の追加情報を指定します。フラグの詳細な情報は XHprof 定数 を参照ください。たとえば <b><code>XHPROF_FLAGS_MEMORY</code></b> はメモリのプロファイリングを有効にします。</p>
	 * @param array $options <p>オプション項目の配列。つまり、 'ignored_functions' オプションで関数を渡すと、 その関数のプロファイリングを無視したりできます。</p>
	 * @return void <p><b><code>NULL</code></b></p>
	 * @link https://php.net/manual/ja/function.xhprof-enable.php
	 * @see xhprof_disable(), xhprof_sample_enable(), memory_get_usage(), getrusage()
	 * @since PECL xhprof >= 0.9.0
	 */
	function xhprof_enable(int $flags = 0, array $options = NULL): void {}

	/**
	 * xhprof サンプルプロファイラを終了する
	 * <p>サンプルモードの xhprof プロファイラを終了します。</p>
	 * @return array <p>xhprof のサンプルデータの配列を返します。</p>
	 * @link https://php.net/manual/ja/function.xhprof-sample-disable.php
	 * @since PECL xhprof >= 0.9.0
	 */
	function xhprof_sample_disable(): array {}

	/**
	 * サンプリングモードでの XHProf プロファイリングを開始する
	 * <p>サンプルモードでのプロファイルを開始します。これは <code>xhprof_enable()</code> の軽量版です。 サンプリング間隔は 0.1 秒で、完全な関数のコールスタックを記録します。 主な使い道は、パフォーマンス監視や調査などでオーバーヘッドを極力抑えたい場合です。</p>
	 * @return void <p><b><code>NULL</code></b></p>
	 * @link https://php.net/manual/ja/function.xhprof-sample-enable.php
	 * @see xhprof_sample_disable(), xhprof_enable(), memory_get_usage(), getrusage()
	 * @since PECL xhprof >= 0.9.0
	 */
	function xhprof_sample_enable(): void {}

	/**
	 * CPU のプロファイル情報を出力に含めます。
	 */
	define('XHPROF_FLAGS_CPU', null);

	/**
	 * メモリのプロファイル情報を出力に含めます。
	 */
	define('XHPROF_FLAGS_MEMORY', null);

	/**
	 * すべての組み込み関数 (内部関数) をスキップします。
	 */
	define('XHPROF_FLAGS_NO_BUILTINS', null);

}
