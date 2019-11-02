<?php



namespace {

	/**
	 * DBA データベースを閉じる
	 * <p><b>dba_close()</b> は確立されたデータベースを閉じ、 により指定したデータベースハンドルの全てのリソースを開放します。</p>
	 * @param resource $handle <p><code>dba_open()</code> あるいは <code>dba_popen()</code> によって返されたデータベースハンドル。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.dba-close.php
	 * @see dba_open(), dba_popen()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_close($handle): void {}

	/**
	 * キーが指す DBA エントリを削除する
	 * <p><b>dba_delete()</b> は、指定されたエントリを データベースから削除します。</p>
	 * @param string $key <p>削除するエントリのキー。</p>
	 * @param resource $handle <p><code>dba_open()</code> あるいは <code>dba_popen()</code> によって返されたデータベースハンドル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-delete.php
	 * @see dba_exists(), dba_fetch(), dba_insert(), dba_replace()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_delete(string $key, $handle): bool {}

	/**
	 * キーが存在するかどうかを確認する
	 * <p><b>dba_exists()</b> は、指定した <code>key</code> がデータベースに存在するかどうかを確認します。</p>
	 * @param string $key <p>確認を行うキー。</p>
	 * @param resource $handle <p><code>dba_open()</code> あるいは <code>dba_popen()</code> によって返されたデータベースハンドル。</p>
	 * @return bool <p>キーが存在する場合に <b><code>TRUE</code></b> 、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-exists.php
	 * @see dba_delete(), dba_fetch(), dba_insert(), dba_replace()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_exists(string $key, $handle): bool {}

	/**
	 * キーが指すデータを取得する
	 * <p><b>dba_fetch()</b> は、<code>handle</code> が指すデータベースから <code>key</code> が指すデータを 取得します。</p>
	 * @param string $key <p>データを取得するキー。</p>  <p><b>注意</b>:</p> <p>inifile を利用する際には、この関数は配列を受け入れることが可能です。 インデックス 0 にはグループ名、インデックス 1 には値の名前を格納します。 <code>dba_key_split()</code> も参照ください。</p>
	 * @param resource $handle <p><code>dba_open()</code> あるいは <code>dba_popen()</code> によって返されたデータベースハンドル。</p>
	 * @return string <p>キー / データの組が見つかった場合にそれに関連する文字列、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-fetch.php
	 * @see dba_exists(), dba_delete(), dba_insert(), dba_replace(), dba_key_split()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_fetch(string $key, $handle): string {}

	/**
	 * 最初のキーを取得する
	 * <p><b>dba_firstkey()</b> はデータベースの最初のキーを返し、 内部キーポインタをリセットします。 この関数によりデータベース全体を連続的にサーチすることが可能になります。</p>
	 * @param resource $handle <p><code>dba_open()</code> あるいは <code>dba_popen()</code> によって返されたデータベースハンドル。</p>
	 * @return string <p>成功した場合にキー、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-firstkey.php
	 * @see dba_nextkey(), dba_key_split()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_firstkey($handle): string {}

	/**
	 * 利用可能なハンドラの一覧を得る
	 * <p><b>dba_handlers()</b> は、この拡張モジュールにより サポートされる全てのハンドラの一覧を返します。</p>
	 * @param bool $full_info <p>結果の全ての情報を表示するかどうかを切り替えます。</p>
	 * @return array <p>データベースハンドラの配列を返します。<code>full_info</code> が <b><code>TRUE</code></b> の場合、この配列はハンドラ名をキー、そのバージョンを値とする 連想配列となります。それ以外の場合はハンドラ名を値に持つ数値添字の配列と なります。</p> <p><b>注意</b>:</p> <p>cdb ライブラリが用いられている場合、 <i>cdb</i> および <i>cdb_make</i> が表示されます。</p>
	 * @link https://php.net/manual/ja/function.dba-handlers.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function dba_handlers(bool $full_info = FALSE): array {}

	/**
	 * エントリを挿入する
	 * <p><b>dba_insert()</b> は、 データベースに <code>key</code> および <code>value</code> で記述されるエントリを挿入します。</p>
	 * @param string $key <p>挿入するエントリのキー。もしこのキーが既にデータベースに存在する場合、 この関数は失敗します。既存のキーを置き換える場合は、 <code>dba_replace()</code> を使用してください。</p>
	 * @param string $value <p>挿入する値。</p>
	 * @param resource $handle <p><code>dba_open()</code> あるいは <code>dba_popen()</code> によって返されたデータベースハンドル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-insert.php
	 * @see dba_exists(), dba_delete(), dba_fetch(), dba_replace()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_insert(string $key, string $value, $handle): bool {}

	/**
	 * 文字列形式のキーを配列形式に分割する
	 * <p><b>dba_key_split()</b> は、キー（文字列形式） を配列に分割します。</p>
	 * @param mixed $key <p>文字列形式のキー。</p>
	 * @return mixed <p><i>array(0 =&gt; group, 1 =&gt; value_name)</i> 形式の配列を返します。 <code>key</code> が <b><code>NULL</code></b> あるいは <b><code>FALSE</code></b> の場合には この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-key-split.php
	 * @see dba_firstkey(), dba_nextkey(), dba_fetch()
	 * @since PHP 5, PHP 7
	 */
	function dba_key_split($key) {}

	/**
	 * オープンされている全データベースファイルのリストを得る
	 * <p><b>dba_list()</b> は、オープンされている全ての データベースファイルの一覧を返します。</p>
	 * @return array <p><i>resourceid =&gt; filename</i> 形式の連想配列を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-list.php
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function dba_list(): array {}

	/**
	 * 次のキーを取得する
	 * <p><b>dba_nextkey()</b> は、 が指すデータベースの次のキーを返し、内部キーポインタを進めます。</p>
	 * @param resource $handle <p><code>dba_open()</code> あるいは <code>dba_popen()</code> によって返されたデータベースハンドル。</p>
	 * @return string <p>成功した場合にキー、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-nextkey.php
	 * @see dba_firstkey(), dba_key_split()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_nextkey($handle): string {}

	/**
	 * データベースをオープンする
	 * <p><b>dba_open()</b> は、<code>handler</code> を用いて <code>mode</code> を指定し、<code>path</code> にデータベースインスタンスを生成します。</p>
	 * @param string $path <p>通常のファイルシステムのパス。</p>
	 * @param string $mode <p>既存のデータベースへの読み込みアクセスには "r"、読込み/書き込み アクセスには "w" を指定します。 読み込み/書き込みアクセスおよび存在しない場合にデータベースの作成を するには "c" を、そして作成、削除、読込み/書き込みアクセス用には "n" を指定します。データベースは BTree モードで作られます。 その他のモード (Hash や Queue) には対応していません。</p> <p>さらに、次の文字でデータベースのロック方法を指定することができます。 .lck でデータベースをロックする場合には "l"、 データベースファイル自体をロックする場合は "d" を使用してください。 アプリケーション全体で統一した方法を用いることが重要です。</p> <p>アクセスのテストを行う際にロックのために待ちたくない場合、"t" を 3 番目の文字に追加することができます。明らかにデータベースのロックが 不要な場合には、"l" や "d" の代わりに "-" を使用してロックを 行わないことができます。"d"、"l" または "-" のどれも指定されない場合、 "d"が指定されたものとしてデータベースファイルをロックします。</p>  <p><b>注意</b>:</p> <p>ひとつのデータベースファイルに同時に書き込めるのは、ひとつだけです。 dba を Web サーバーで使用している際に複数のリクエストが書き込み処理を 行う必要がある場合、他の書き込みが終わってからでないと次の書き込みを 行うことができません。また、書き込み中に読み込むことはできません。 dba 拡張モジュールは、このようなことを防止するためにロックを使用します。 以下の表を参照してください:</p>  <b>DBA のロック処理</b>   既にオープンしているデータベース  <code>mode</code> = "rl"  <code>mode</code> = "rlt"  <code>mode</code> = "wl"  <code>mode</code> = "wlt"  <code>mode</code> = "rd"  <code>mode</code> = "rdt"  <code>mode</code> = "wd"  <code>mode</code> = "wdt"     not open ok ok ok ok ok ok ok ok    <code>mode</code> = "rl" ok ok wait false illegal illegal illegal illegal    <code>mode</code> = "wl" wait false wait false illegal illegal illegal illegal    <code>mode</code> = "rd" illegal illegal illegal illegal ok ok wait false    <code>mode</code> = "wd" illegal illegal illegal illegal wait false wait false    <ul> <li>ok: 2 番目のコールは成功します。</li> <li>wait: 2 番目のコールは、最初のデータベースで <code>dba_close()</code> がコールされるまで待ちます。</li> <li>false: 2 番目のコールは、false を返します。</li> <li>illegal: <code>mode</code> パラメータで <i>"l"</i> および <i>"d"</i> を同時に使用することはできません。</li> </ul>
	 * @param string $handler <p><code>path</code> にアクセスする際に使用する ハンドラの名前。 <b>dba_open()</b> に指定したすべてのオプションが 渡され、その機能を用いることができます。</p>
	 * @param mixed $_
	 * @return resource <p>成功した場合に正のハンドル、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-open.php
	 * @see dba_popen(), dba_close()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_open(string $path, string $mode, string $handler = NULL, $_ = NULL) {}

	/**
	 * データベースを最適化する
	 * <p><b>dba_optimize()</b> は、指定されたデータベースを最適化します。</p>
	 * @param resource $handle <p><code>dba_open()</code> あるいは <code>dba_popen()</code> によって返されたデータベースハンドル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-optimize.php
	 * @see dba_sync()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_optimize($handle): bool {}

	/**
	 * データベースを持続的にオープンする
	 * <p><b>dba_popen()</b> は、<code>handler</code> を用いて <code>mode</code> で <code>path</code> に持続的なデータベースインスタンスを確立します。</p>
	 * @param string $path <p>通常のファイルシステムのパス。</p>
	 * @param string $mode <p>既存のデータベースへの読み込みアクセスには "r"、読込み/書き込み アクセスには "w" を指定します。 読み込み/書き込みアクセスおよび存在しない場合にデータベースの作成を するには "c" を、そして作成、削除、読込み/書き込みアクセス用には "n" を指定します。</p>
	 * @param string $handler <p><code>path</code> にアクセスする際に使用する ハンドラの名前。 <b>dba_popen()</b> に指定したすべてのオプションが 渡され、その機能を用いることができます。</p>
	 * @param mixed $_
	 * @return resource <p>成功した場合に正のハンドル、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-popen.php
	 * @see dba_open(), dba_close()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_popen(string $path, string $mode, string $handler = NULL, $_ = NULL) {}

	/**
	 * エントリを置換または挿入する
	 * <p><b>dba_replace()</b> は、<code>handle</code> で 指定したデータベースに <code>key</code> および <code>value</code> で記述されるエントリを 置換または挿入します。</p>
	 * @param string $key <p>置換するエントリのキー。</p>
	 * @param string $value <p>置換される値。</p>
	 * @param resource $handle <p><code>dba_open()</code> あるいは <code>dba_popen()</code> によって返されたデータベースハンドル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-replace.php
	 * @see dba_exists(), dba_delete(), dba_fetch(), dba_insert()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_replace(string $key, string $value, $handle): bool {}

	/**
	 * データベースを同期する
	 * <p><b>dba_sync()</b> は データベースを同期します。サポートされる場合には、 おそらくディスクへの物理的アクセスへのきっかけとなることでしょう。</p>
	 * @param resource $handle <p><code>dba_open()</code> あるいは <code>dba_popen()</code> によって返されたデータベースハンドル。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.dba-sync.php
	 * @see dba_optimize()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function dba_sync($handle): bool {}

}
