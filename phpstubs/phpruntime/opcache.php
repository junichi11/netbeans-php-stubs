<?php



namespace {

	/**
	 * PHP スクリプトを、実行せずにコンパイルしてキャッシュする
	 * <p>この関数は、PHP スクリプトをコンパイルして opcode キャッシュに追加しますが、スクリプトは実行しません。 これを使うと、ウェブサーバーの再起動後にファイルをキャッシュしておき、 後でリクエストがあったときにそのキャッシュを使えるようになります。</p>
	 * @param string $file <p>コンパイルしたい PHP スクリプトへのパス。</p>
	 * @return bool <p><code>file</code> を正常にコンパイルしたときに <b><code>TRUE</code></b> を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.opcache-compile-file.php
	 * @see opcache_invalidate()
	 * @since PHP 5 >= 5.5.5, PHP 7, PECL ZendOpcache > 7.0.2
	 */
	function opcache_compile_file(string $file): bool {}

	/**
	 * キャッシュについての構成情報を取得
	 * <p>この関数は、キャッシュ・インスタンスについての構成情報を返します。</p>
	 * @return array <p>情報の配列を返します。その配列は ini 、ブラックリストおよびバージョンを含みます。</p>
	 * @link https://php.net/manual/ja/function.opcache-get-configuration.php
	 * @see opcache_get_status()
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache > 7.0.2
	 */
	function opcache_get_configuration(): array {}

	/**
	 * キャッシュについてのステータス情報を取得
	 * <p>この関数は、キャッシュ・インスタンスについてのステータス情報を返します。</p>
	 * @param bool $get_scripts <p>スクリプト固有の状態の情報を含む。</p>
	 * @return array <p>情報の配列を返します。スクリプト固有の状態の情報をオプションで含みます、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.opcache-get-status.php
	 * @see opcache_get_configuration()
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache > 7.0.2
	 */
	function opcache_get_status(bool $get_scripts = TRUE): array {}

	/**
	 * キャッシュされたスクリプトを無効にする
	 * <p>この関数は opcode キャッシュのうち、特定のスクリプトを無効にします。 <code>force</code> パラメータが指定されていないか、 <b><code>FALSE</code></b> の場合は、スクリプトの更新時刻が opcode キャッシュ時の更新時刻より新しい場合にだけ無効にします。</p>
	 * @param string $script <p>無効にしたいスクリプトのパス</p>
	 * @param bool $force <p><b><code>TRUE</code></b> にすると、無効にする必要があるかどうかに関わらずスクリプトは無効にされます。</p>
	 * @return bool <p><code>script</code> の opcode キャッシュが無効にされたか、無効にする対象が存在しない場合は <b><code>TRUE</code></b> を返します。 opcode キャッシュ機能そのものが無効にされている場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.opcache-invalidate.php
	 * @see opcache_compile_file(), opcache_reset()
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache >= 7.0.0
	 */
	function opcache_invalidate(string $script, bool $force = FALSE): bool {}

	/**
	 * スクリプトが OPCache にキャッシュされているかどうかを伝えます。
	 * <p>この関数は、PHP スクリプトが OPCache にキャッシュされているかチェックします。 これは、特定のスクリプトに対するキャッシュの "ウォーミング" をより簡単に検出するために使用できます。</p>
	 * @param string $file <p>チェックされる PHP スクリプトへのパスです。</p>
	 * @return bool <p><code>file</code> が OPCache にキャッシュされている場合、<b><code>TRUE</code></b> を、 そうでなければ <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.opcache-is-script-cached.php
	 * @see opcache_compile_file()
	 * @since PHP 5 >= 5.5.11, PHP 7, PECL ZendOpcache >= 7.0.4
	 */
	function opcache_is_script_cached(string $file): bool {}

	/**
	 * opcode のキャッシュ内容をリセットする
	 * <p>この関数は、キャッシュされた opcode 全てをリセットします。<b>opcache_reset()</b> 関数が呼び出されると、次回ヒットする全てのスクリプトが再び読み込まれ、パースされます。</p>
	 * @return bool <p>opcode のキャッシュがリセットさせた場合は <b><code>TRUE</code></b> を返します。 opcode キャッシュが無効にされている場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.opcache-reset.php
	 * @see opcache_invalidate()
	 * @since PHP 5 >= 5.5.0, PHP 7, PECL ZendOpcache >= 7.0.0
	 */
	function opcache_reset(): bool {}

}
