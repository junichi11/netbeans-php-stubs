<?php



namespace {

	/**
	 * ファイルキャッシュにキャッシュされたファイルについての情報を取得する
	 * <p>ファイルキャッシュの中身とその利用状況についての情報を取得します。</p>
	 * @param bool $summaryonly <p>返される配列に、ファイルキャッシュの概要に加えて個々のキャッシュエントリの情報を含めるかどうか。</p>
	 * @return array <p>ファイルキャッシュについてのメタデータの配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します</p><p>この関数が返す配列には次の要素が含まれます。</p><ul> <li>  <i>total_cache_uptime</i> - ファイルキャッシュがアクティブになってからの経過秒数。  </li> <li>  <i>total_file_count</i> - 現在ファイルキャッシュに入っているファイルの数。  </li> <li>  <i>total_hit_count</i> - ファイルキャッシュからファイルが取り出された回数。  </li> <li>  <i>total_miss_count</i> - ファイルがファイルキャッシュに見つからなかった回数。  </li> <li> <p><i>file_entries</i> - キャッシュされているファイルに関する情報を含む配列。</p> <ul> <li>  <i>file_name</i> - キャッシュされているファイルの絶対パスでのファイル名。  </li> <li>  <i>add_time</i> - ファイルキャッシュに追加されてからの経過秒数。  </li> <li>  <i>use_time</i> - ファイルキャッシュ内でアクセスされてからの経過秒数。  </li> <li>  <i>last_check</i> - ファイルの変更をチェックされてからの経過秒数。  </li> <li>  <i>hit_count</i> - ファイルがキャッシュから取り出された回数。  </li> <li>  <i>file_size</i> - キャッシュされたファイルのサイズ (バイト単位)。  </li> </ul> </li> </ul>
	 * @link https://php.net/manual/ja/function.wincache-fcache-fileinfo.php
	 * @see wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_fcache_fileinfo(bool $summaryonly = FALSE): array {}

	/**
	 * ファイルキャッシュのメモリ使用状況についての情報を取得する
	 * <p>ファイルキャッシュによるメモリ使用状況についての情報を取得します。</p>
	 * @return array <p>ファイルキャッシュのメモリ使用状況についてのメタデータの配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します</p><p>この関数が返す配列には次の要素が含まれます。</p><ul> <li>  <i>memory_total</i> - ファイルキャッシュ用に確保されたメモリのバイト数。  </li> <li>  <i>memory_free</i> - ファイルキャッシュで使える空きメモリのバイト数。  </li> <li>  <i>num_used_blks</i> - ファイルキャッシュが使っているメモリブロック数。  </li> <li>  <i>num_free_blks</i> - ファイルキャッシュで使える空きメモリブロック数。  </li> <li>  <i>memory_overhead</i> - ファイルキャッシュが内部的に使っているメモリのバイト数。  </li> </ul>
	 * @link https://php.net/manual/ja/function.wincache-fcache-meminfo.php
	 * @see wincache_fcache_fileinfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_fcache_meminfo(): array {}

	/**
	 * 指定したキーで排他ロックを確保する
	 * <p>指定したキーについての排他ロックを確保します。 ロックを確保するまでは、現在のスクリプトの実行はブロックされます。 ロックを確保できたら、その後は他のスクリプトから同じキーのロックを要求があってもそれをブロックします。 現在のスクリプトが <code>wincache_unlock()</code> でロックを解放するまでは他のスクリプトからロックを確保できません。</p><p><b>wincache_lock()</b> および <code>wincache_unlock()</code> を使っていると、FastCGI のようなマルチプロセス環境において PHP スクリプトがデッドロックを引き起こすことがあります。 本当にそれが必要である場合でない限り、これらの関数は使わないようにしましょう。 キャッシュ上でのさまざまな操作の大半は、これらの関数を使う必要のないものです。</p>
	 * @param string $key <p>ロックを取得したいキャッシュ内のキーの名前。</p>
	 * @param bool $isglobal <p>ロックのスコープをシステム全体にするかローカルにするかを制御します。 ローカルロックのスコープは、IIS FastCGI のアプリケーションプール内 あるいは同一の親プロセス ID を持つ PHP プロセス群全体となります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wincache-lock.php
	 * @see wincache_unlock(), wincache_ucache_set(), wincache_ucache_get(), wincache_ucache_delete(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_lock(string $key, bool $isglobal = FALSE): bool {}

	/**
	 * opcode キャッシュにキャッシュされたファイルについての情報を取得する
	 * <p>opcode キャッシュの中身とその利用状況についての情報を取得します。</p><p>この機能は PHP 7.0.0 で <i>削除</i> されました。</p>
	 * @param bool $summaryonly <p>返される配列に、opcode キャッシュの概要に加えて個々のキャッシュエントリの情報を含めるかどうか。</p>
	 * @return array <p>opcode キャッシュについてのメタデータの配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します</p><p>この関数が返す配列には次の要素が含まれます。</p><ul> <li>  <i>total_cache_uptime</i> - opcode キャッシュがアクティブになってからの経過秒数。  </li> <li>  <i>total_file_count</i> - 現在 opcode キャッシュに入っているファイルの数。  </li> <li>  <i>total_hit_count</i> - opcode キャッシュからファイルが取り出された回数。  </li> <li>  <i>total_miss_count</i> - ファイルが opcode キャッシュに見つからなかった回数。  </li> <li>  <i>is_local_cache</i> - ローカルキャッシュインスタンスのメタデータである場合は true、 グローバルキャッシュのメタデータである場合は false。  </li> <li> <p><i>file_entries</i> - キャッシュされているファイルに関する情報を含む配列。</p> <ul> <li>  <i>file_name</i> - キャッシュされているファイルの絶対パスでのファイル名。  </li> <li>  <i>add_time</i> - opcode キャッシュに追加されてからの経過秒数。  </li> <li>  <i>use_time</i> - opcode キャッシュ内でアクセスされてからの経過秒数。  </li> <li>  <i>last_check</i> - ファイルの変更をチェックされてからの経過秒数。  </li> <li>  <i>hit_count</i> - ファイルがキャッシュから取り出された回数。  </li> <li>  <i>function_count</i> - キャッシュされたファイル内の関数の数。  </li> <li>  <i>class_count</i> - キャッシュされたファイルの中のクラスの数。  </li> </ul> </li> </ul>
	 * @link https://php.net/manual/ja/function.wincache-ocache-fileinfo.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_ocache_fileinfo(bool $summaryonly = FALSE): array {}

	/**
	 * opcode キャッシュのメモリ使用状況についての情報を取得する
	 * <p>opcode キャッシュによるメモリ使用状況についての情報を取得します。</p>
	 * @return array <p>opcode キャッシュのメモリ使用状況についてのメタデータの配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します</p><p>この関数が返す配列には次の要素が含まれます。</p><ul> <li>  <i>memory_total</i> - opcode キャッシュ用に確保されたメモリのバイト数。  </li> <li>  <i>memory_free</i> - opcode キャッシュで使える空きメモリのバイト数。  </li> <li>  <i>num_used_blks</i> - opcode キャッシュが使っているメモリブロック数。  </li> <li>  <i>num_free_blks</i> - opcode キャッシュで使える空きメモリブロック数。  </li> <li>  <i>memory_overhead</i> - opcode キャッシュが内部的に使っているメモリのバイト数。  </li> </ul> <b>警告</b><p>この機能は PHP 7.0.0 で <i>削除</i> されました。</p>
	 * @link https://php.net/manual/ja/function.wincache-ocache-meminfo.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_ocache_meminfo(): array {}

	/**
	 * キャッシュされたファイルのキャッシュエントリをリフレッシュする
	 * <p>ファイルのキャッシュエントリをリフレッシュします。ファイル名は引数で渡します。 引数を指定しなかった場合は、キャッシュ内のすべてのエントリをリフレッシュします。</p>
	 * @param array $files <p>リフレッシュしたいファイル名の配列。 絶対パスあるいは相対パスのどちらでもかまいません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wincache-refresh-if-changed.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_refresh_if_changed(array $files = NULL): bool {}

	/**
	 * ファイルパス解決キャッシュについての情報を取得する
	 * <p>相対ファイルパスとそれに対応する絶対ファイルパスとの対応を記録したキャッシュについての情報を取得します。</p>
	 * @param bool $summaryonly
	 * @return array <p>ファイルパス解決キャッシュについてのメタデータの配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します</p><p>この関数が返す配列には次の要素が含まれます。</p><ul> <li>  <i>total_file_count</i> - キャッシュに格納されたファイルパスのマッピングの数。  </li> <li> <p><i>rplist_entries</i> - キャッシュされたすべてのファイルパスに関する情報を含む配列。</p> <ul> <li>  <i>resolve_path</i> - ファイルへのパス。  </li> <li>  <i>subkey_data</i> - 対応する絶対パス。  </li> </ul> </li> </ul>
	 * @link https://php.net/manual/ja/function.wincache-rplist-fileinfo.php
	 * @see wincache_fcache_meminfo(), wincache_fcache_fileinfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_rplist_fileinfo(bool $summaryonly = FALSE): array {}

	/**
	 * ファイルパス解決キャッシュのメモリ使用状況についての情報を取得する
	 * <p>ファイルパス解決キャッシュによるメモリ使用状況についての情報を取得します。</p>
	 * @return array <p>ファイルパス解決キャッシュのメモリ使用状況についてのメタデータの配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します</p><p>The array returned by this function contains the following elements:</p><ul> <li>  <i>memory_total</i> - ファイルパス解決キャッシュ用に確保されたメモリのバイト数。  </li> <li>  <i>memory_free</i> - ファイルパス解決キャッシュで使える空きメモリのバイト数。  </li> <li>  <i>num_used_blks</i> - ファイルパス解決キャッシュが使っているメモリブロック数。  </li> <li>  <i>num_free_blks</i> - ファイルパス解決キャッシュで使える空きメモリブロック数。  </li> <li>  <i>memory_overhead</i> - ファイルパス解決キャッシュが内部的に使っているメモリのバイト数。  </li> </ul>
	 * @link https://php.net/manual/ja/function.wincache-rplist-meminfo.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.0.0
	 */
	function wincache_rplist_meminfo(): array {}

	/**
	 * セッションキャッシュにキャッシュされたファイルについての情報を取得する
	 * <p>セッションキャッシュの中身とその利用状況についての情報を取得します。</p>
	 * @param bool $summaryonly <p>返される配列に、セッションキャッシュの概要に加えて個々のキャッシュエントリの情報を含めるかどうか。</p>
	 * @return array <p>セッションキャッシュについてのメタデータの配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します</p><p>この関数が返す配列には次の要素が含まれます。</p><ul> <li>  <i>total_cache_uptime</i> - セッションキャッシュがアクティブになってからの経過秒数。  </li> <li>  <i>total_item_count</i> - 現在セッションキャッシュに入っている要素の数。  </li> <li>  <i>is_local_cache</i> - メタデータがローカルキャッシュ用のものである場合に true、 グローバルキャッシュ用のものである場合に false。  </li> <li>  <i>total_hit_count</i> - キャッシュからファイルが取り出された回数。  </li> <li>  <i>total_miss_count</i> - ファイルがキャッシュに見つからなかった回数。  </li> <li> <p><i>scache_entries</i> - キャッシュされているアイテムに関する情報を含む配列。</p> <ul> <li>  <i>key_name</i> - データを保存する際に使うキーの名前。  </li> <li>  <i>value_type</i> - キーに関連づけて格納する値の型。  </li> <li>  <i>use_time</i> - セッションキャッシュ内でアクセスされてからの経過秒数。  </li> <li>  <i>last_check</i> - ファイルの変更をチェックされてからの経過秒数。  </li> <li>  <i>ttl_seconds</i> - データをキャッシュ内に残す残り時間。0 は無制限。  </li> <li>  <i>age_seconds</i> - データがキャッシュに追加されてからのおよその経過時間。  </li> <li>  <i>hitcount</i> - キャッシュからファイルが取り出された回数。  </li> </ul> </li> </ul>
	 * @link https://php.net/manual/ja/function.wincache-scache-info.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_meminfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_scache_info(bool $summaryonly = FALSE): array {}

	/**
	 * セッションキャッシュのメモリ使用状況についての情報を取得する
	 * <p>セッションキャッシュによるメモリ使用状況についての情報を取得します。</p>
	 * @return array <p>セッションキャッシュのメモリ使用状況についてのメタデータの配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します</p><p>この関数が返す配列には次の要素が含まれます。</p><ul> <li>  <i>memory_total</i> - セッションキャッシュ用に確保されたメモリのバイト数。  </li> <li>  <i>memory_free</i> - セッションキャッシュで使える空きメモリのバイト数。  </li> <li>  <i>num_used_blks</i> - セッションキャッシュが使っているメモリブロック数。  </li> <li>  <i>num_free_blks</i> - セッションキャッシュで使える空きメモリブロック数。  </li> <li>  <i>memory_overhead</i> - セッションキャッシュが内部的に使っているメモリのバイト数。  </li> </ul>
	 * @link https://php.net/manual/ja/function.wincache-scache-meminfo.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_info(), wincache_scache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_scache_meminfo(): array {}

	/**
	 * 変数が既にキャッシュに存在しない場合にのみ変数をユーザーキャッシュに追加する
	 * <p>変数が既にキャッシュに存在しない場合にのみ変数をユーザーキャッシュに追加します。 追加された変数は、有効期限に達するか、 <code>wincache_ucache_delete()</code> あるいは <code>wincache_ucache_clear()</code> で削除されるまではキャッシュに残り続けます。</p>
	 * @param string $key <p>変数を格納するときに、この名前のキーを使います。 同じキーで既に変数が格納されているときは、この関数は失敗して <b><code>FALSE</code></b> を返します。 <code>key</code> は大文字小文字を区別します。同じキーがあっても値を上書きしたい場合は <code>wincache_ucache_set()</code> 関数をかわりに使います。 <code>key</code> には name =&gt; value のペアの配列を渡すこともできます。 この場合は name がキーとなります。 この形式を使えば複数の値を一度の操作でキャッシュに格納できるので、競合状態になることを防げます。</p>
	 * @param mixed $value <p>格納したい変数の値。ファイルハンドルのようなリソース型以外のすべてのデータ型をサポートしています。 最初のパラメータが配列の場合は、このパラメータは無視されます。 一般的な指針として、<code>key</code> に配列を渡す場合は <code>value</code> を <b><code>NULL</code></b> にしておきましょう。 <code>value</code> がオブジェクト、あるいはオブジェクトを含む配列である場合は、 オブジェクトがシリアライズされます。オブジェクトのシリアライズについての詳細は __sleep() を参照ください。</p>
	 * @param int $ttl <p>変数のキャッシュ内での生存時間を秒単位で指定します。 <code>ttl</code> で指定した秒数が経過すると、 格納されている変数はキャッシュから削除されます。 このパラメータのデフォルト値は <i>0</i> で、これは <code>wincache_ucache_delete()</code> あるいは <code>wincache_ucache_clear()</code> で明示的に削除するまでキャッシュに残り続けることを意味します。</p>
	 * @return bool <p><code>key</code> が文字列のときは、成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><code>key</code> が配列のときの返り値は、次のようになります。</p><ul> <li>  配列内のすべての name =&gt; value ペアが設定できた場合は、空の配列を返します。  </li> <li>  配列内の name =&gt; value ペアがひとつも設定できなかった場合は、<b><code>FALSE</code></b> を返します。  </li> <li>  成功したペアと失敗したペアがある場合は、ユーザーキャッシュへの追加に失敗した name=&gt;value ペアを含む配列を返します。  </li> </ul>
	 * @link https://php.net/manual/ja/function.wincache-ucache-add.php
	 * @see wincache_ucache_set(), wincache_ucache_get(), wincache_ucache_delete(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_add(string $key, $value, int $ttl = 0): bool {}

	/**
	 * 変数を古い値と比較して新しい値を代入する
	 * <p>指定したキーの変数を <code>old_value</code> と比較し、 マッチした場合はそこに <code>new_value</code> を代入します。</p>
	 * @param string $key <p>変数をキャッシュに格納するときに使ったキーの名前。 <code>key</code> は大文字小文字を区別します。</p>
	 * @param int $old_value <p>ユーザーキャッシュ内の <code>key</code> が指す変数の古い値。 この値は <i>long</i> 型でなければならず、 それ以外の場合はこの関数は <b><code>FALSE</code></b> を返します。</p>
	 * @param int $new_value <p>マッチしたときに <code>key</code> が指す変数に代入する新しい値。 この値は <i>long</i> 型でなければならず、 それ以外の場合はこの関数は <b><code>FALSE</code></b> を返します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wincache-ucache-cas.php
	 * @see wincache_ucache_inc(), wincache_ucache_dec()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_cas(string $key, int $old_value, int $new_value): bool {}

	/**
	 * ユーザーキャッシュの中身全体を削除する
	 * <p>ユーザーキャッシュに格納されているすべての値を消去/削除します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wincache-ucache-clear.php
	 * @see wincache_ucache_set(), wincache_ucache_add(), wincache_ucache_delete(), wincache_ucache_get(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_clear(): bool {}

	/**
	 * キーに関連づけられた値を減少させる
	 * <p><code>key</code> に関連づけられた値を、1 あるいは <code>dec_by</code> で指定した数だけ減らします。</p>
	 * @param string $key <p>変数をキャッシュに格納するときに使ったキーの名前。 <code>key</code> は大文字小文字を区別します。</p>
	 * @param int $dec_by <p><code>key</code> に関連づけられた変数の減少幅。 浮動小数点数を指定した場合は、最も近い整数に丸められます。 <code>key</code> に関連づけられた変数は <i>long</i> 型でなければならず、 それ以外の場合はこの関数は失敗して <b><code>FALSE</code></b> を返します。</p>
	 * @param bool $success <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> が設定されます。</p>
	 * @return mixed <p>成功した場合に減少後の値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wincache-ucache-dec.php
	 * @see wincache_ucache_inc(), wincache_ucache_cas()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_dec(string $key, int $dec_by = 1, bool &$success = NULL) {}

	/**
	 * 変数をユーザーキャッシュから削除する
	 * <p><code>key</code> が指す要素をユーザーキャッシュから削除します。</p>
	 * @param mixed $key <p>変数をキャッシュに格納するときに使ったキーの名前。 <code>key</code> は大文字小文字を区別します。 <code>key</code> にはキーの配列を指定することもできます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><code>key</code> が配列のときは、配列の要素がどれも削除できなかった場合に <b><code>FALSE</code></b> を返します。それ以外の場合は、削除されたすべてのキーを含む配列を返します。</p>
	 * @link https://php.net/manual/ja/function.wincache-ucache-delete.php
	 * @see wincache_ucache_set(), wincache_ucache_add(), wincache_ucache_get(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_delete($key): bool {}

	/**
	 * 変数がユーザーキャッシュに存在するかどうかを調べる
	 * <p>指定したキーの変数がユーザーキャッシュに存在するかどうかを調べます。</p>
	 * @param string $key <p>変数をキャッシュに格納するときに使ったキーの名前。 <code>key</code> は大文字小文字を区別します。</p>
	 * @return bool <p>指定したキーの変数が存在する場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wincache-ucache-exists.php
	 * @see wincache_ucache_set(), wincache_ucache_add(), wincache_ucache_get(), wincache_ucache_clear(), wincache_ucache_delete(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_exists(string $key): bool {}

	/**
	 * ユーザーキャッシュに格納された変数を取得する
	 * <p>ユーザーキャッシュに格納された変数を取得します。</p>
	 * @param mixed $key <p>変数をキャッシュに格納するときに使ったキーの名前。 <code>key</code> は大文字小文字を区別します。 <code>key</code> にはキーの配列を指定することもできます。 その場合の返り値は、<code>key</code> 配列の各要素の値の配列となります。 オブジェクト、あるいはオブジェクトを含む配列が返されるときには、 オブジェクトがデシリアライズされます。シリアライズしたオブジェクトの復元についての詳細は __wakeup() を参照ください。</p>
	 * @param bool $success <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> が設定されます。</p>
	 * @return mixed <p><code>key</code> が文字列のときは、そのキーに格納された変数の値を返します。 <code>success</code> には、成功した場合に <b><code>TRUE</code></b>、 失敗した場合に <b><code>FALSE</code></b> が設定されます。</p><p><code>key</code> が配列のときは、<code>success</code> には常に <b><code>TRUE</code></b> が設定されます。返される配列 (name =&gt; value のペア) には、取得に成功したペアだけが含まれます。指定したキーがひとつもユーザーキャッシュから見つからなかった場合は 空の配列を返します。</p>
	 * @link https://php.net/manual/ja/function.wincache-ucache-get.php
	 * @see wincache_ucache_add(), wincache_ucache_set(), wincache_ucache_delete(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_get($key, bool &$success = NULL) {}

	/**
	 * キーに関連づけられた値を増加させる
	 * <p><code>key</code> に関連づけられた値を、1 あるいは <code>inc_by</code> で指定した数だけ増やします。</p>
	 * @param string $key <p>変数をキャッシュに格納するときに使ったキーの名前。 <code>key</code> は大文字小文字を区別します。</p>
	 * @param int $inc_by <p><code>key</code> に関連づけられた変数の増加幅。 浮動小数点数を指定した場合は、最も近い整数に丸められます。 <code>key</code> に関連づけられた変数は <i>long</i> 型でなければならず、 それ以外の場合はこの関数は失敗して <b><code>FALSE</code></b> を返します。</p>
	 * @param bool $success <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> が設定されます。</p>
	 * @return mixed <p>成功した場合に増加後の値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wincache-ucache-inc.php
	 * @see wincache_ucache_dec(), wincache_ucache_cas()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_inc(string $key, int $inc_by = 1, bool &$success = NULL) {}

	/**
	 * ユーザーキャッシュにキャッシュされたファイルについての情報を取得する
	 * <p>ユーザーキャッシュに格納されたデータについての情報を取得します。</p>
	 * @param bool $summaryonly <p>返される配列に、ユーザーキャッシュの概要に加えて個々のキャッシュエントリの情報を含めるかどうか。</p>
	 * @param string $key <p>ユーザーキャッシュ内のエントリのキー。 これを指定すると、返される配列にはそのキャッシュエントリの情報だけを含むようになります。 これを指定せず、さらに <code>summaryonly</code> が <b><code>FALSE</code></b> の場合は、 返される配列にはキャッシュ内のすべてのエントリについての情報を含むようになります。</p>
	 * @return array <p>ユーザーキャッシュについてのメタデータの配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します</p><p>この関数が返す配列には次の要素が含まれます。</p><ul> <li>  <i>total_cache_uptime</i> - ユーザーキャッシュがアクティブになってからの経過秒数。  </li> <li>  <i>total_item_count</i> - 現在ユーザーキャッシュに入っている要素の数。  </li> <li>  <i>is_local_cache</i> - メタデータがローカルキャッシュ用のものである場合に true、 グローバルキャッシュ用のものである場合に false。  </li> <li>  <i>total_hit_count</i> - キャッシュからファイルが取り出された回数。  </li> <li>  <i>total_miss_count</i> - ファイルがキャッシュに見つからなかった回数。  </li> <li> <p><i>ucache_entries</i> - キャッシュされているアイテムに関する情報を含む配列。</p> <ul> <li>  <i>key_name</i> - データを保存する際に使うキーの名前。  </li> <li>  <i>value_type</i> - キーに関連づけて格納する値の型。  </li> <li>  <i>use_time</i> - ユーザーキャッシュ内でアクセスされてからの経過秒数。  </li> <li>  <i>last_check</i> - ファイルの変更をチェックされてからの経過秒数。  </li> <li>  <i>is_session</i> - indicates if the data is a session variable  </li> <li>  <i>ttl_seconds</i> - データをキャッシュ内に残す残り時間。0 は無制限。  </li> <li>  <i>age_seconds</i> - データがキャッシュに追加されてからのおよその経過時間。  </li> <li>  <i>hitcount</i> - キャッシュからファイルが取り出された回数。  </li> </ul> </li> </ul>
	 * @link https://php.net/manual/ja/function.wincache-ucache-info.php
	 * @see wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_ocache_meminfo(), wincache_rplist_meminfo(), wincache_rplist_fileinfo(), wincache_refresh_if_changed(), wincache_ucache_meminfo(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_info(bool $summaryonly = FALSE, string $key = NULL): array {}

	/**
	 * ユーザーキャッシュのメモリ使用状況についての情報を取得する
	 * <p>ユーザーキャッシュによるメモリ使用状況についての情報を取得します。</p>
	 * @return array <p>ユーザーキャッシュのメモリ使用状況についてのメタデータの配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します</p><p>この関数が返す配列には次の要素が含まれます。</p><ul> <li>  <i>memory_total</i> - ユーザーキャッシュ用に確保されたメモリのバイト数。  </li> <li>  <i>memory_free</i> - ユーザーキャッシュで使える空きメモリのバイト数。  </li> <li>  <i>num_used_blks</i> - ユーザーキャッシュが使っているメモリブロック数。  </li> <li>  <i>num_free_blks</i> - ユーザーキャッシュで使える空きメモリブロック数。  </li> <li>  <i>memory_overhead</i> - ユーザーキャッシュが内部的に使っているメモリのバイト数。  </li> </ul>
	 * @link https://php.net/manual/ja/function.wincache-ucache-meminfo.php
	 * @see wincache_fcache_fileinfo(), wincache_fcache_meminfo(), wincache_ocache_fileinfo(), wincache_rplist_fileinfo(), wincache_rplist_meminfo(), wincache_refresh_if_changed(), wincache_ucache_info(), wincache_scache_info(), wincache_scache_meminfo()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_meminfo(): array {}

	/**
	 * 変数をユーザーキャッシュに追加し、変数が既にキャッシュに存在する場合はそれを上書きする
	 * <p>変数をユーザーキャッシュに追加します。変数が既にキャッシュに存在する場合はそれを上書きします。 追加あるいは更新された変数は、有効期限に達するか、 <code>wincache_ucache_delete()</code> あるいは <code>wincache_ucache_clear()</code> で削除されるまではキャッシュに残り続けます。</p>
	 * @param mixed $key <p>変数を格納するときに、この名前のキーを使います。 同じキーで既に変数が格納されているときは、元の値を新しい値で上書きします。 <code>key</code> には name =&gt; value のペアの配列を渡すこともできます。 この場合は name がキーとなります。 この形式を使えば複数の値を一度の操作でキャッシュに格納できるので、競合状態になることを防げます。</p>
	 * @param mixed $value <p>格納したい変数の値。ファイルハンドルのようなリソース型以外のすべてのデータ型をサポートしています。 最初のパラメータが配列の場合は、このパラメータは無視されます。 一般的な指針として、<code>key</code> に配列を渡す場合は <code>value</code> を <b><code>NULL</code></b> にしておきましょう。 <code>value</code> がオブジェクト、あるいはオブジェクトを含む配列である場合は、 オブジェクトがシリアライズされます。オブジェクトのシリアライズについての詳細は __sleep() を参照ください。</p>
	 * @param int $ttl <p>変数のキャッシュ内での生存時間を秒単位で指定します。 <code>ttl</code> で指定した秒数が経過すると、 格納されている変数はキャッシュから削除されます。 このパラメータのデフォルト値は <i>0</i> で、これは <code>wincache_ucache_delete()</code> あるいは <code>wincache_ucache_clear()</code> で明示的に削除するまでキャッシュに残り続けることを意味します。</p>
	 * @return bool <p><code>key</code> が文字列のときは、成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p><code>key</code> が配列のときの返り値は、次のようになります。</p><ul> <li>  配列内のすべての name =&gt; value ペアが設定できた場合は、空の配列を返します。  </li> <li>  配列内の name =&gt; value ペアがひとつも設定できなかった場合は、<b><code>FALSE</code></b> を返します。  </li> <li>  成功したペアと失敗したペアがある場合は、ユーザーキャッシュへの追加に失敗した name=&gt;value ペアを含む配列を返します。  </li> </ul>
	 * @link https://php.net/manual/ja/function.wincache-ucache-set.php
	 * @see wincache_ucache_add(), wincache_ucache_get(), wincache_ucache_delete(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_ucache_set($key, $value, int $ttl = 0): bool {}

	/**
	 * 指定したキーの排他ロックを解放する
	 * <p>指定したキーに対して、<code>wincache_lock()</code> を使って取得した排他ロックを解放します。 別のプロセスがこのキーに対するロックをブロックされて待機している場合は、 そのプロセスがロックを取得できるようになります。</p><p><code>wincache_lock()</code> および <b>wincache_unlock()</b> を使っていると、FastCGI のようなマルチプロセス環境において PHP スクリプトがデッドロックを引き起こすことがあります。 本当にそれが必要である場合でない限り、これらの関数は使わないようにしましょう。 キャッシュ上でのさまざまな操作の大半は、これらの関数を使う必要のないものです。</p>
	 * @param string $key <p>ロックを解放したいキャッシュ内のキーの名前。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.wincache-unlock.php
	 * @see wincache_lock(), wincache_ucache_set(), wincache_ucache_get(), wincache_ucache_delete(), wincache_ucache_clear(), wincache_ucache_exists(), wincache_ucache_meminfo(), wincache_ucache_info(), wincache_scache_info()
	 * @since PECL wincache >= 1.1.0
	 */
	function wincache_unlock(string $key): bool {}

}
