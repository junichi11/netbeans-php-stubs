<?php



namespace {

	/**
	 * <p><b>APCIterator</b> クラスを使うと、巨大な APC キャッシュの反復処理を容易に行えます。 巨大なキャッシュを順を追って処理し、 ロックインスタンス単位で決まった数のエントリを取得することができます。 そのため、キャッシュ全体を抱え込んで 100 件 (デフォルト) のエントリを取り込むのではなく、 キャッシュのロックを解放して他の操作ができる状態にすることが可能です。 また、正規表現によるマッチングは C 言語レベルで行われるのでより効率的です。</p>
	 * @link https://php.net/manual/ja/class.apciterator.php
	 * @since PECL apc >= 3.1.1
	 */
	class APCIterator implements \Iterator {

		/**
		 * APCIterator イテレータオブジェクトを作成する
		 * <p>APCIterator オブジェクトを作成します。</p>
		 * @param string $cache <p>キャッシュの形式。<i>user</i> あるいは <i>file</i> となります。</p>
		 * @param mixed $search <p>APC のキーの名前にマッチする PCRE 正規表現。 単一の正規表現の場合は文字列で、複数の正規表現の場合は配列で指定します。 <b><code>NULL</code></b> を渡すと、検索をスキップします。</p>
		 * @param int $format <p>希望する書式。 APC_ITER_&#42; 定数の組み合わせで指定します。</p>
		 * @param int $chunk_size <p>チャンクサイズ。0 より大きい値でなければなりません。 デフォルト値は 100 です。</p>
		 * @param int $list <p>一覧にする形式。<b><code>APC_LIST_ACTIVE</code></b> あるいは <b><code>APC_LIST_DELETED</code></b> を渡します。</p>
		 * @return self <p>成功した場合に APCIterator オブジェクト、 失敗した場合に <b><code>NULL</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/apciterator.construct.php
		 * @see apc_exists(), apc_cache_info()
		 * @since PECL apc >= 3.1.1
		 */
		public function __construct(string $cache, $search = NULL, int $format = APC_ITER_ALL, int $chunk_size = 100, int $list = APC_LIST_ACTIVE) {}

		/**
		 * 現在の項目を取得する
		 * <p>APCIterator から現在の項目を取得します。</p>
		 * @return mixed <p>成功した場合に現在の項目を返します。 もう項目が存在しない場合や取得に失敗した場合は <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/apciterator.current.php
		 * @since PECL apc >= 3.1.1
		 */
		public function current() {}

		/**
		 * 総数を取得する
		 * <p>総数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>総数を返します。</p>
		 * @link https://php.net/manual/ja/apciterator.gettotalcount.php
		 * @see apc_cache_info()
		 * @since PECL apc >= 3.1.1
		 */
		public function getTotalCount(): int {}

		/**
		 * キャッシュヒットの総数を取得する
		 * <p>キャッシュヒットの総数を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>成功した場合にヒット数、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/apciterator.gettotalhits.php
		 * @see apc_cache_info()
		 * @since PECL apc >= 3.1.1
		 */
		public function getTotalHits(): int {}

		/**
		 * キャッシュのサイズの合計を取得する
		 * <p>キャッシュのサイズの合計を取得します。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
		 * @return int <p>キャッシュのサイズの合計を返します。</p>
		 * @link https://php.net/manual/ja/apciterator.gettotalsize.php
		 * @see apc_cache_info()
		 * @since PECL apc >= 3.1.1
		 */
		public function getTotalSize(): int {}

		/**
		 * イテレータのキーを取得する
		 * <p>現在のイテレータのキーを取得します。</p>
		 * @return string <p>成功した場合にキー、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/apciterator.key.php
		 * @since PECL apc >= 3.1.1
		 */
		public function key(): string {}

		/**
		 * ポインタを次の項目に移動させる
		 * <p>イテレータのポインタを次の要素に移動させます。</p>
		 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/apciterator.next.php
		 * @since PECL apc >= 3.1.1
		 */
		public function next(): bool {}

		/**
		 * イテレータを巻き戻す
		 * <p>イテレータを最初の要素に巻き戻します。</p>
		 * @return void <p>値を返しません。</p>
		 * @link https://php.net/manual/ja/apciterator.rewind.php
		 * @since PECL apc >= 3.1.1
		 */
		public function rewind(): void {}

		/**
		 * 現在位置が有効かどうかを調べる
		 * <p>イテレータの現在位置が有効かどうかを調べます。</p>
		 * @return bool <p>イテレータの現在位置が有効な場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
		 * @link https://php.net/manual/ja/apciterator.valid.php
		 * @since PECL apc >= 3.1.1
		 */
		public function valid(): bool {}
	}

	/**
	 * 新規の変数をデータ領域にキャッシュする
	 * <p>まだ保存されていない場合にのみ、変数をデータ領域にキャッシュします。</p><p><b>注意</b>:  PHP の他の多くの仕組みと異なり、<b>apc_add()</b> を用いて格納された変数はリクエストを超えて （その値がキャッシュから取り除かれるまで）持続します。 </p>
	 * @param string $key <p>この名前を用いて変数を格納します。<code>key</code> は キャッシュ内で一意です。そのため、<b>apc_add()</b> を使用して同一の <code>key</code> で新しい値を格納しようとしても、それは保存されません。 かわりに <b><code>FALSE</code></b> が返されます (これが、<b>apc_add()</b> と <code>apc_store()</code> の唯一の相違点です)。</p>
	 * @param mixed $var <p>格納する変数。</p>
	 * @param int $ttl <p>有効期間。<code>var</code> は、キャッシュに <code>ttl</code> 秒間だけ格納されます。 <code>ttl</code> が経過すると、格納されている変数は （次のリクエスト時に）キャッシュから削除されます。 <code>ttl</code> が指定されていない（あるいは <code>ttl</code> が <i>0</i> の場合）は、 キャッシュから手動で削除される・あるいはキャッシュに存在できなくなる （clear, restart など）まで値が持続します。</p>
	 * @return bool <p>何かがキャッシュに正しく追加されたときに TRUE、それ以外の場合に FALSE を返します。 二番目の構文は、エラーになったキーを含む配列を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-add.php
	 * @see apc_store(), apc_fetch(), apc_delete()
	 * @since PECL apc >= 3.0.13
	 */
	function apc_add(string $key, $var, int $ttl = 0): bool {}

	/**
	 * 指定したファイルおよびユーザー変数のバイナリダンプを取得する
	 * <p>指定したファイルおよびユーザー変数のバイナリダンプを APC キャッシュから返します。 files や user_vars に <b><code>NULL</code></b> を指定すると、全エントリを表します。 一方、array() を渡すと何もダンプしません。</p>
	 * @param array $files <p>ファイル。<b><code>NULL</code></b> を渡すと全エントリを意味し、 <code>array()</code> を渡すと何もダンプしません。</p>
	 * @param array $user_vars <p>ユーザー変数。<b><code>NULL</code></b> を渡すと全エントリを意味し、 <code>array()</code> を渡すと何もダンプしません。</p>
	 * @return string <p>指定したファイルおよびユーザー変数のバイナリダンプを APC キャッシュから返します。 APC が有効でない場合は <b><code>FALSE</code></b>、未知のエラーが発生した場合は <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-bin-dump.php
	 * @see apc_bin_dumpfile(), apc_bin_load()
	 * @since PECL apc >= 3.1.4
	 */
	function apc_bin_dump(array $files = NULL, array $user_vars = NULL): string {}

	/**
	 * キャッシュされたファイルやユーザー変数のバイナリダンプをファイルに出力する
	 * <p>キャッシュされたファイルやユーザー変数のバイナリダンプを APC キャッシュから取得し、指定したファイルに出力します。</p>
	 * @param array $files <p>The file names being dumped.</p>
	 * @param array $user_vars <p>The user variables being dumped.</p>
	 * @param string $filename <p>The filename where the dump is being saved.</p>
	 * @param int $flags <p>Flags passed to the <code>filename</code> stream. See the <code>file_put_contents()</code> documentation for details.</p>
	 * @param resource $context <p>The context passed to the <code>filename</code> stream. See the <code>file_put_contents()</code> documentation for details.</p>
	 * @return int <p>The number of bytes written to the file, otherwise <b><code>FALSE</code></b> if APC is not enabled, <code>filename</code> is an invalid file name, <code>filename</code> can't be opened, the file dump can't be completed (e.g., the hard drive is out of disk space), or an unknown error was encountered.</p>
	 * @link https://php.net/manual/ja/function.apc-bin-dumpfile.php
	 * @see apc_bin_dump(), apc_bin_load()
	 * @since PECL apc >= 3.1.4
	 */
	function apc_bin_dumpfile(array $files, array $user_vars, string $filename, int $flags = 0, $context = NULL): int {}

	/**
	 * バイナリダンプを APC のファイル/ユーザーキャッシュに読み込む
	 * <p>指定したバイナリダンプを APC のファイル/ユーザーキャッシュに読み込みます。</p>
	 * @param string $data <p>読み込むバイナリダンプ。通常は <code>apc_bin_dump()</code> で出力したもの。</p>
	 * @param int $flags <p><b><code>APC_BIN_VERIFY_CRC32</code></b>、<b><code>APC_BIN_VERIFY_MD5</code></b> あるいはその両方。</p>
	 * @return bool <p>バイナリダンプの読み込みに成功した場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。<b><code>FALSE</code></b> が返される理由には、 APC が有効でない場合や <code>data</code> が有効な APC バイナリダンプでない (予期せぬサイズなど) 場合などがあります。</p>
	 * @link https://php.net/manual/ja/function.apc-bin-load.php
	 * @see apc_bin_dump(), apc_bin_loadfile()
	 * @since PECL apc >= 3.1.4
	 */
	function apc_bin_load(string $data, int $flags = 0): bool {}

	/**
	 * バイナリダンプをファイルから APC のファイル/ユーザーキャッシュに読み込む
	 * <p>指定したファイルから、バイナリダンプを APC のファイル/ユーザーキャッシュに読み込みます。</p>
	 * @param string $filename <p>ダンプを含むファイルの名前。通常は <code>apc_bin_dumpfile()</code> で出力したもの。</p>
	 * @param resource $context <p>ファイルのコンテキスト。</p>
	 * @param int $flags <p><b><code>APC_BIN_VERIFY_CRC32</code></b>、<b><code>APC_BIN_VERIFY_MD5</code></b> あるいはその両方。</p>
	 * @return bool <p>バイナリダンプの読み込みに成功した場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。<b><code>FALSE</code></b> が返される理由には、 APC が有効でない場合や <code>filename</code> が無効なファイルの場合、空のファイルの場合、 <code>filename</code> のオープンに失敗した場合、 ダンプが不完全な場合、そして <code>data</code> が有効な APC バイナリダンプでない (予期せぬサイズなど) 場合などがあります。</p>
	 * @link https://php.net/manual/ja/function.apc-bin-loadfile.php
	 * @see apc_bin_dumpfile(), apc_bin_load()
	 * @since PECL apc >= 3.1.4
	 */
	function apc_bin_loadfile(string $filename, $context = NULL, int $flags = 0): bool {}

	/**
	 * APC のデータから、キャッシュされた情報を取得する
	 * <p>APC のデータから、キャッシュされた情報およびメタデータを取得します。</p>
	 * @param string $cache_type <p><code>cache_type</code> が "<i>user</i>" の場合はユーザーキャッシュの情報を返します。</p> <p><code>cache_type</code> が "<i>filehits</i>" の場合は、現在のリクエストにおいて バイトコードキャッシュから提供したファイルがどれなのかについての情報を返します。 この機能を使用するには、コンパイル時に <b>--enable-filehits</b> を指定する必要があります。</p> <p><code>cache_type</code> に無効な値を指定したり、 値を指定しなかったりした場合は、 システムキャッシュ (キャッシュされたファイル) の情報を返します。</p>
	 * @param bool $limited <p><code>limited</code> が <b><code>TRUE</code></b> の場合は、 返り値にキャッシュエントリの個々の一覧が含まれません。 これは、統計情報の収集時に呼び出しを最適化したい場合などに有用です。</p>
	 * @return array <p>キャッシュされたデータ（およびメタデータ）の配列を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p><p><b>注意</b>:  もし APC キャッシュのデータを取得できなかった場合、 <b>apc_cache_info()</b> は警告を発生します。これが起こるのは、 一般的には APC が有効になっていない場合などです。 </p>
	 * @link https://php.net/manual/ja/function.apc-cache-info.php
	 * @since PECL apc >= 2.0.0
	 */
	function apc_cache_info(string $cache_type = "", bool $limited = FALSE): array {}

	/**
	 * 古い値を新しい値に更新する
	 * <p><b>apc_cas()</b> は、既に保存されている整数値が <code>old</code> パラメータにマッチする値のときに、それを <code>new</code> パラメータの値に更新します。</p>
	 * @param string $key <p>更新する値のキー。</p>
	 * @param int $old <p>古い値 (現在保存されている値)。</p>
	 * @param int $new <p>新しく更新したい値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-cas.php
	 * @see apc_dec(), apc_store()
	 * @since PECL apc >= 3.1.1
	 */
	function apc_cas(string $key, int $old, int $new): bool {}

	/**
	 * APC キャッシュをクリアする
	 * <p>ユーザー/システム キャッシュをクリアします。</p>
	 * @param string $cache_type <p><code>cache_type</code> が "<i>user</i>" の場合はユーザーキャッシュがクリアされます。 それ以外の場合はシステムキャッシュ (キャッシュされたファイル) がクリアされます。</p>
	 * @return bool <p>常に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-clear-cache.php
	 * @see apc_cache_info()
	 * @since PECL apc >= 2.0.0
	 */
	function apc_clear_cache(string $cache_type = ""): bool {}

	/**
	 * ファイルをバイトコードキャッシュに保存し、すべてのフィルタをバイパスする
	 * <p>ファイルをバイトコードキャッシュに保存し、すべてのフィルタをバイパスします。</p>
	 * @param string $filename <p>コンパイルし、バイトコードキャッシュに保存したい PHP ファイルへの完全パスあるいは相対パス。</p>
	 * @param bool $atomic
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-compile-file.php
	 * @see apc_bin_dumpfile(), apc_bin_loadfile()
	 * @since PECL apc >= 3.0.13
	 */
	function apc_compile_file(string $filename, bool $atomic = TRUE) {}

	/**
	 * 保存した数値を減らす
	 * <p>保存した整数値を減らします。</p>
	 * @param string $key <p>減らしたい値のキー。</p>
	 * @param int $step <p>減らしたい数。</p>
	 * @param bool $success <p>この参照渡しの変数に、成功したか失敗したかの結果が格納されます。</p>
	 * @return int <p>成功した場合に <code>key</code> の現在値を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link https://php.net/manual/ja/function.apc-dec.php
	 * @see apc_inc()
	 * @since PECL apc >= 3.1.1
	 */
	function apc_dec(string $key, int $step = 1, bool &$success = NULL): int {}

	/**
	 * 定数の組を定義し、それを取得あるいは一括定義する
	 * <p>ご存知のとおり、<code>define()</code> は非常に遅いです。 APC を使用する主な利点はスクリプト/アプリケーションのパフォーマンスの改善なので、 大量の定数を定義する手順を合理化するために、この仕組みが提供されています。 しかし、この関数は期待通りの動作をしません。</p><p>よりよい解決策として、PECL の » hidef 拡張モジュールを試してみましょう。</p><p><b>注意</b>:  （キャッシュ全体をクリアすることなく）格納されている定数を削除するには、 <code>constants</code> に空の配列を渡します。そうすれば、 そこに格納されていた値は事実上削除されます。 </p>
	 * @param string $key <p><code>key</code> は、格納される定数群の名前を表します。 この <code>key</code> は、格納されている定数を <code>apc_load_constants()</code> で取得するために使用されます。</p>
	 * @param array $constants <p><i>constant_name =&gt; value</i> 形式の連想配列。 <i>constant_name</i> は、一般の 定数 の命名規則に従う 必要があります。 <i>value</i> は、スカラ値でなければ なりません。</p>
	 * @param bool $case_sensitive <p>デフォルトでは、定数名の大文字・小文字は区別されます。すなわち、 <i>CONSTANT</i> と <i>Constant</i> は別の値を表します。このパラメータを <b><code>FALSE</code></b> にすると、 定数名の大文字・小文字は区別されなくなります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-define-constants.php
	 * @see apc_load_constants(), define(), constant()
	 * @since PECL apc >= 3.0.0
	 */
	function apc_define_constants(string $key, array $constants, bool $case_sensitive = TRUE): bool {}

	/**
	 * 格納されている変数をキャッシュから取り除く
	 * <p>格納されている変数をキャッシュから取り除きます。</p>
	 * @param string $key <p>（<code>apc_store()</code> を用いて）値を格納する際に 使用された <code>key</code> 。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-delete.php
	 * @see apc_store(), apc_fetch()
	 * @since PECL apc >= 3.0.0
	 */
	function apc_delete(string $key) {}

	/**
	 * ファイルを opcode キャッシュから削除する
	 * <p>指定したファイルを opcode キャッシュから削除します。</p>
	 * @param mixed $keys <p>削除したいファイル。文字列、文字列の配列、あるいは APCIterator オブジェクトで指定します。</p>
	 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 <code>keys</code> が配列なら、 成功した場合は空の配列を返します。失敗した場合は失敗したファイルを含む配列を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-delete-file.php
	 * @see apc_clear_cache(), apc_delete(), apc_exists()
	 * @since PECL apc >= 3.1.1
	 */
	function apc_delete_file($keys) {}

	/**
	 * APC キーが存在するかどうかを調べる
	 * <p>指定した APC キーが存在するかどうかを調べます。</p>
	 * @param mixed $keys <p>キーを含む文字列、あるいは文字列の配列。</p>
	 * @return mixed <p>キーが存在する場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。 <code>keys</code> に配列を渡したときは、 存在するキーをすべて含む配列を返します。 どれも存在しない場合は空の配列を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-exists.php
	 * @see apc_cache_info(), apc_fetch()
	 * @since PECL apc >= 3.1.4
	 */
	function apc_exists($keys) {}

	/**
	 * 格納されている変数をキャッシュから取得する
	 * <p>格納されている変数をキャッシュから取得します。</p>
	 * @param mixed $key <p>(<code>apc_store()</code> を用いて) 値を格納する際に使用された <code>key</code>。 配列を渡した場合は、各要素について取得した値を返します。</p>
	 * @param bool $success <p>成功したばあいに <b><code>TRUE</code></b>、失敗した際に <b><code>FALSE</code></b> が設定されます。</p>
	 * @return mixed <p>成功した場合に格納されていた変数 (あるいは配列)、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-fetch.php
	 * @see apc_store(), apc_delete()
	 * @since PECL apc >= 3.0.0
	 */
	function apc_fetch($key, bool &$success = NULL) {}

	/**
	 * 保存した数値を増やす
	 * <p>保存した整数値を増やします。</p>
	 * @param string $key <p>増やしたい値のキー。</p>
	 * @param int $step <p>増やしたい数。</p>
	 * @param bool $success <p>この参照渡しの変数に、成功したか失敗したかの結果が格納されます。</p>
	 * @return int <p>成功した場合に <code>key</code> の現在値を返します。 失敗した場合に <b><code>FALSE</code></b> を返します</p>
	 * @link https://php.net/manual/ja/function.apc-inc.php
	 * @see apc_dec()
	 * @since PECL apc >= 3.1.1
	 */
	function apc_inc(string $key, int $step = 1, bool &$success = NULL): int {}

	/**
	 * 定数群をキャッシュから読み込む
	 * <p>定数群をキャッシュから読み込みます。</p>
	 * @param string $key <p>取得したい定数群（<code>apc_define_constants()</code> を使用して格納されたもの）。</p>
	 * @param bool $case_sensitive <p>デフォルトでは、定数名の大文字・小文字は区別されます。すなわち、 <i>CONSTANT</i> と <i>Constant</i> は別の値を表します。このパラメータを <b><code>FALSE</code></b> にすると、 定数名の大文字・小文字は区別されなくなります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-load-constants.php
	 * @see apc_define_constants(), define(), constant()
	 * @since PECL apc >= 3.0.0
	 */
	function apc_load_constants(string $key, bool $case_sensitive = TRUE): bool {}

	/**
	 * APC の共有メモリ割り当てに関する情報を取得する
	 * <p>APC の共有メモリ割り当てに関する情報を取得します。</p>
	 * @param bool $limited <p><b><code>FALSE</code></b> (デフォルト) を設定すると、<b>apc_sma_info()</b> は各セグメントの詳細な情報を返します。</p>
	 * @return array <p>共有メモリ割り当てデータの配列を返します。失敗した場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-sma-info.php
	 * @since PECL apc >= 2.0.0
	 */
	function apc_sma_info(bool $limited = FALSE): array {}

	/**
	 * 変数をデータ領域にキャッシュする
	 * <p>変数をデータ領域にキャッシュします。</p><p><b>注意</b>:  PHP の他の多くの仕組みと異なり、<b>apc_store()</b> を用いて格納された変数はリクエストを超えて （その値がキャッシュから取り除かれるまで）持続します。 </p>
	 * @param string $key <p>この名前を用いて変数を格納します。<code>key</code> は キャッシュ内で一意です。そのため、同一の <code>key</code> で新しい値を格納すると、元の値は上書きされます。</p>
	 * @param mixed $var <p>格納する変数。</p>
	 * @param int $ttl <p>有効期間。<code>var</code> は、キャッシュに <code>ttl</code> 秒間だけ格納されます。 <code>ttl</code> が経過すると、格納されている変数は （次のリクエスト時に）キャッシュから削除されます。 <code>ttl</code> が指定されていない（あるいは <code>ttl</code> が <i>0</i> の場合）は、 キャッシュから手動で削除される・あるいはキャッシュに存在できなくなる （clear, restart など）まで値が持続します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 二番目の構文は、エラーになったキーを含む配列を返します。</p>
	 * @link https://php.net/manual/ja/function.apc-store.php
	 * @see apc_add(), apc_fetch(), apc_delete()
	 * @since PECL apc >= 3.0.0
	 */
	function apc_store(string $key, $var, int $ttl = 0): bool {}

	define('APC_BIN_VERIFY_CRC32', null);

	define('APC_BIN_VERIFY_MD5', null);

	define('APC_ITER_ALL', null);

	define('APC_ITER_ATIME', null);

	define('APC_ITER_CTIME', null);

	define('APC_ITER_DEVICE', null);

	define('APC_ITER_DTIME', null);

	define('APC_ITER_FILENAME', null);

	define('APC_ITER_INODE', null);

	define('APC_ITER_KEY', null);

	define('APC_ITER_MD5', null);

	define('APC_ITER_MEM_SIZE', null);

	define('APC_ITER_MTIME', null);

	define('APC_ITER_NONE', null);

	define('APC_ITER_NUM_HITS', null);

	define('APC_ITER_REFCOUNT', null);

	define('APC_ITER_TTL', null);

	define('APC_ITER_TYPE', null);

	define('APC_ITER_VALUE', null);

	define('APC_LIST_ACTIVE', null);

	define('APC_LIST_DELETED', null);

}
