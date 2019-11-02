<?php



namespace {

	/**
	 * システム出力バッファをフラッシュする
	 * <p>PHP および PHP が使っている (CGI, Web サーバーなどの) バックエンドのシステム書き込みバッファをフラッシュします。 それまでのすべての出力をユーザーのブラウザに対して出力しようと試みますが、 注意すべき点があります。</p><p><b>flush()</b> はウェブサーバーのバッファリング手法を上書きすることはできません。 また、クライアント側のブラウザでのバッファリングにはなんの影響も及ぼしません。 PHP のユーザーレベルでの出力バッファリングの仕組みにも影響を及ぼしません。 つまり、もし ob 出力バッファを使用しているのなら <code>ob_flush()</code> と <b>flush()</b> の両方をコールしなければなりません。</p><p>いくつかのサーバー、特に Win32 上ではスクリプトからの出力をブラウザに 結果を送信する前にスクリプトが終了するまでバッファに溜めることがあります。</p><p>mod_gzip のような Apache 用のサーバーモジュールはそれ自体がバッファリングを行います。 そのため、<b>flush()</b> をコールしても 即時にデータをクライアントに送信しないという結果につながります。</p><p>ブラウザ側で表示前に入力をバッファリングすることもあり得ます。 Netscape では例えば改行または開始タグを受信するまでテキストは バッファリングされ、最も外側のテーブルの &lt;/table&gt; タグが現れるまでテーブルは描画されません。</p><p>いくつかのバージョンの Microsoft Internet Explorer は、256 バイトの 出力を受けてからページを表示し始めます。このため、これらのブラウザに ページを表示させるには、フラッシュする前に余分な空白を送信する 必要があるかもしれません。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.flush.php
	 * @see ob_flush(), ob_clean(), ob_end_flush(), ob_end_clean()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function flush(): void {}

	/**
	 * 出力バッファをクリア(消去)する
	 * <p>この関数は、出力バッファの内容を消去します。</p><p>この関数は、<code>ob_end_clean()</code> のように出力バッファを破棄するわけではありません。</p><p>出力バッファを開始するときに、 <code>ob_start()</code> で PHP_OUTPUT_HANDLER_CLEANABLE フラグを指定する必要があります。指定しなければ、<b>ob_clean()</b> は動作しません。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.ob-clean.php
	 * @see ob_flush(), ob_end_flush(), ob_end_clean()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ob_clean(): void {}

	/**
	 * 出力用バッファをクリア(消去)し、出力のバッファリングをオフにする
	 * <p>出力用バッファの内容を消去し、出力のバッファリングをオフにします。 バッファの内容について更に何らかの処理を行いたい場合には、 バッファの内容は <b>ob_end_clean()</b> がコールされると 破棄されるため、<b>ob_end_clean()</b> の前に <code>ob_get_contents()</code> をコールしなければなりません。</p><p>出力バッファを開始するときに、 <code>ob_start()</code> で PHP_OUTPUT_HANDLER_CLEANABLE および PHP_OUTPUT_HANDLER_REMOVABLE フラグを指定する必要があります。指定しなければ、<b>ob_end_clean()</b> は動作しません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 失敗する原因は、まず、アクティブなバッファ以外に対して この関数をコールしたか、あるいは何らかの理由により バッファを消去することができなかった場合です（特殊なバッファ等）。</p>
	 * @link https://php.net/manual/ja/function.ob-end-clean.php
	 * @see ob_start(), ob_get_contents(), ob_flush()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ob_end_clean(): bool {}

	/**
	 * 出力用バッファをフラッシュ(送信)し、出力のバッファリングをオフにする
	 * <p>この関数は、出力用バッファの内容を出力し、出力のバッファリングをオフにします。 出力用バッファの内容を更に処理したい場合には、 バッファの内容は <b>ob_end_flush()</b> がコールされた後に消去されるため、 <b>ob_end_flush()</b> の前に <code>ob_get_contents()</code> をコールする必要があります。</p><p>出力バッファを開始するときに、 <code>ob_start()</code> で PHP_OUTPUT_HANDLER_FLUSHABLE および PHP_OUTPUT_HANDLER_REMOVABLE フラグを指定する必要があります。指定しなければ、<b>ob_end_flush()</b> は動作しません。</p><p><b>注意</b>:  この関数は <code>ob_get_flush()</code> に似ていますが、 <code>ob_get_flush()</code> はバッファを文字列として返すという点が違います。 </p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 失敗する原因は、まず、アクティブなバッファ以外に対してこの 関数をコールしたか、あるいは何らかの理由により バッファを消去することができなかった場合です（特殊なバッファ等）。</p>
	 * @link https://php.net/manual/ja/function.ob-end-flush.php
	 * @see ob_start(), ob_get_contents(), ob_get_flush(), ob_flush(), ob_end_clean()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ob_end_flush(): bool {}

	/**
	 * 出力バッファをフラッシュ(送信)する
	 * <p>この関数は、(ある場合に)出力バッファの内容を送信します。 更にバッファの内容を処理したい場合には、<b>ob_flush()</b> がコールされた後にバッファの内容が破棄されるので、 <b>ob_flush()</b> の前に <code>ob_get_contents()</code> をコールする必要があります。</p><p>この関数は、<code>ob_end_flush()</code> のように出力バッファを破棄しません。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.ob-flush.php
	 * @see ob_get_contents(), ob_clean(), ob_end_flush(), ob_end_clean()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ob_flush(): void {}

	/**
	 * 現在のバッファの内容を取得し、出力バッファを削除する
	 * <p>現在のバッファの中身を取得し、出力バッファを削除します。</p><p><b>ob_get_clean()</b> は、基本的に <code>ob_get_contents()</code> および <code>ob_end_clean()</code> を同時に実行するのと同じです。</p><p>出力バッファを開始するときに、 <code>ob_start()</code> で PHP_OUTPUT_HANDLER_CLEANABLE および PHP_OUTPUT_HANDLER_REMOVABLE フラグを指定する必要があります。指定しなければ、<b>ob_get_clean()</b> は動作しません。</p>
	 * @return string <p>出力バッファの内容を返した後で出力のバッファリングを終了します。 出力バッファリングが開始されていない場合は <b><code>FALSE</code></b> が返されます。</p>
	 * @link https://php.net/manual/ja/function.ob-get-clean.php
	 * @see ob_get_contents(), ob_start()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ob_get_clean(): string {}

	/**
	 * 出力用バッファの内容を返す
	 * <p>出力用バッファの内容を取得します。バッファの内容はクリアしません。</p>
	 * @return string <p>出力用バッファの内容を返します。 出力のバッファリングがアクティブでない場合には <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ob-get-contents.php
	 * @see ob_start(), ob_get_length()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ob_get_contents(): string {}

	/**
	 * 出力バッファをフラッシュし、その内容を文字列として返した後で出力バッファリングを終了する
	 * <p><b>ob_get_flush()</b> は、 出力バッファをフラッシュしてその内容を文字列として返した後、 出力バッファリングを終了します。</p><p>出力バッファを開始するときに、 <code>ob_start()</code> で PHP_OUTPUT_HANDLER_FLUSHABLE フラグを指定する必要があります。指定しなければ、<b>ob_get_flush()</b> は動作しません。</p><p><b>注意</b>:  この関数は <code>ob_end_flush()</code> と似ていますが、 この関数はバッファの内容を文字列として返すこともします。 </p>
	 * @return string <p>出力バッファを返します。バッファリングが開始されていない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ob-get-flush.php
	 * @see ob_end_clean(), ob_end_flush(), ob_list_handlers()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ob_get_flush(): string {}

	/**
	 * 出力バッファの長さを返す
	 * <p>この関数は、出力バッファの内容の長さをバイト単位で返します。</p>
	 * @return int <p>出力バッファの内容の長さをバイト単位で返します。 出力のバッファリングがアクティブでない場合には、<b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ob-get-length.php
	 * @see ob_start(), ob_get_contents()
	 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
	 */
	function ob_get_length(): int {}

	/**
	 * 出力バッファリング機構のネストレベルを返す
	 * <p>出力バッファリングハンドラのネストレベルを返します。</p>
	 * @return int <p>出力バッファリングハンドラのネストレベルを返します。 バッファリングがアクティブでない場合はゼロを返します。</p>
	 * @link https://php.net/manual/ja/function.ob-get-level.php
	 * @see ob_start(), ob_get_contents()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ob_get_level(): int {}

	/**
	 * 出力バッファのステータスを取得する
	 * <p><b>ob_get_status()</b> は、トップレベルの出力バッファの ステータス情報を返します。<code>full_status</code> が <b><code>TRUE</code></b> に設定されている場合は、すべてのアクティブな出力バッファの ステータス情報を返します。</p>
	 * @param bool $full_status <p><b><code>TRUE</code></b> を指定すると、すべてのアクティブな出力バッファを返します。 <b><code>FALSE</code></b> を指定した場合、あるいは省略した場合は、 トップレベルの出力バッファのみを返します。</p>
	 * @return array <p>パラメータ <code>full_status</code> を指定していなかったり <code>full_status</code> = <b><code>FALSE</code></b> としていた場合は、 以下の要素を保持する配列が返されます。</p>   <pre>Array ( [level] =&gt; 2 [type] =&gt; 0 [status] =&gt; 0 [name] =&gt; URL-Rewriter [del] =&gt; 1 )</pre>    <b>単純な <b>ob_get_status()</b> の出力結果</b>  キー 値    level 出力階層レベル   type  <i>PHP_OUTPUT_HANDLER_INTERNAL (0)</i> あるいは <i>PHP_OUTPUT_HANDLER_USER (1)</i>    status  <i>PHP_OUTPUT_HANDLER_START</i> (0)、<i>PHP_OUTPUT_HANDLER_CONT</i> (1) あるいは <i>PHP_OUTPUT_HANDLER_END</i> (2) のいずれか   name アクティブな出力ハンドラの名前、あるいは設定されていない場合は ' default output handler'   del  <code>ob_start()</code> が設定した削除フラグ   <p><code>full_status</code> = <b><code>TRUE</code></b> を指定してコールした場合、 出力バッファごとにひとつの要素を保持する配列が返されます。 出力レベルが配列のキーとして使用され、対応する値として 各出力レベルのステータス情報を配列として保持します。</p>  <pre> Array ( [0] =&gt; Array ( [chunk_size] =&gt; 0 [size] =&gt; 40960 [block_size] =&gt; 10240 [type] =&gt; 1 [status] =&gt; 0 [name] =&gt; default output handler [del] =&gt; 1 ) [1] =&gt; Array ( [chunk_size] =&gt; 0 [size] =&gt; 40960 [block_size] =&gt; 10240 [type] =&gt; 0 [buffer_size] =&gt; 0 [status] =&gt; 0 [name] =&gt; URL-Rewriter [del] =&gt; 1 ) ) </pre>  <p>完全な出力には、追加項目として以下の要素が含まれます。</p> <b>完全な <b>ob_get_status()</b> の出力結果</b>  キー 値    chunk_size  <code>ob_start()</code> で設定したチャンクの大きさ   size ...   blocksize ...
	 * @link https://php.net/manual/ja/function.ob-get-status.php
	 * @see ob_get_level(), ob_list_handlers()
	 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
	 */
	function ob_get_status(bool $full_status = FALSE): array {}

	/**
	 * 出力バッファを gzip 圧縮するための ob_start コールバック関数
	 * <p><b>ob_gzhandler()</b> は <code>ob_start()</code> 用のコールバック関数として使用されることを意図したもので、 圧縮されたページをサポートしている web ブラウザに対して gz エンコードされたデータを送信することを容易にします。 <b>ob_gzhandler()</b> は 実際に圧縮されたデータを送信する前にブラウザがサポートする content encoding の種類("gzip"、"deflate" またはなし)を調べ、それに基づいて 出力を返します。すべてのブラウザがサポートされています。 というのも、ブラウザは、 自分が圧縮されたページをサポートするかどうかを表す 適切なヘッダを送信することになっているからです。 圧縮されたページをブラウザがサポートしていない場合、 この関数は <b><code>FALSE</code></b> を返します。</p>
	 * @param string $buffer
	 * @param int $mode
	 * @return string
	 * @link https://php.net/manual/ja/function.ob-gzhandler.php
	 * @see ob_start(), ob_end_flush()
	 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
	 */
	function ob_gzhandler(string $buffer, int $mode): string {}

	/**
	 * 自動フラッシュをオンまたはオフにする
	 * <p><b>ob_implicit_flush()</b> は、 自動フラッシュをオンまたはオフに切替えます。 自動フラッシュにより、出力関数のコールが行われるたびに フラッシュ操作が行われるようになります。このため、<code>flush()</code> を明示的にコールする必要はなくなります。</p>
	 * @param int $flag <p><i>1</i> で自動フラッシュをオンに、<i>0</i> でオフにします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.ob-implicit-flush.php
	 * @see flush(), ob_start(), ob_end_flush()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ob_implicit_flush(int $flag = 1): void {}

	/**
	 * 使用中の出力ハンドラの一覧を取得する
	 * <p>使用中の出力ハンドラの一覧を返します。</p>
	 * @return array <p>これは、使用中の出力ハンドラを（もし存在すれば）配列で返します。もし output_buffering が 有効になっているか、あるいは <code>ob_start()</code> で 無名関数が使用されている場合、<b>ob_list_handlers()</b> は "default output handler" を返します。</p>
	 * @link https://php.net/manual/ja/function.ob-list-handlers.php
	 * @see ob_end_clean(), ob_end_flush(), ob_get_flush(), ob_start()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function ob_list_handlers(): array {}

	/**
	 * 出力のバッファリングを有効にする
	 * <p>この関数は出力のバッファリングをオンにします。 出力のバッファリングを有効にすると、 (ヘッダ以外の) スクリプトからの出力は実際には行われず、 代わりに内部バッファに保存されます。</p><p>この内部バッファの内容は、<code>ob_get_contents()</code> を用いて文字列変数にコピーされます。 内部バッファの内容を出力するには <code>ob_end_flush()</code> を使用します。 <code>ob_end_clean()</code> は、バッファの内容を出力せずに消去します。</p><p>web サーバーによっては (例: Apache)、コールバック関数からコールされた際に、 スクリプトの実行ディレクトリを変更するものがあります。 コールバック関数の内部で <i>chdir(dirname($_SERVER['SCRIPT_FILENAME']))</i> などと指定することで、これをもとに戻すことが可能です。</p><p>出力バッファはスタッカブルであり、このため、他の <b>ob_start()</b> がアクティブの間に <b>ob_start()</b> をコールすることが可能です。この場合、 <code>ob_end_flush()</code> を適切な回数コールするようにしてください。 複数の出力コールバック関数がアクティブの場合、 ネストした順番で逐次連続的に出力がフィルタ処理されます。</p>
	 * @param callable $output_callback <p>オプションの引数 <code>output_callback</code> 関数を指定することが可能です。この関数は、パラメータとして文字列をとり、 文字列を返します。このコールバック関数は、 出力バッファがフラッシュ (送信) あるいは消去 (<code>ob_flush()</code>, <code>ob_clean()</code> あるいは同等の関数で) された場合、 またはリクエストの最後にブラウザに出力をフラッシュする際にコールされます。 <code>output_callback</code> がコールされた際に、 この関数は出力バッファの内容をパラメータとして受け取ります。このコールバック関数は、 新規の出力バッファを実際に出力される結果として返す必要があり、 この結果はブラウザに送信されます。 <code>output_callback</code> がコール可能な関数ではない場合は <b><code>FALSE</code></b> を返します。 コールバックのシグネチャは、次のとおりです。</p> <p></p> handler ( string <code>$buffer</code> [, int <code>$phase</code> ] ) : string    <code>buffer</code>    出力バッファの内容。    <code>phase</code>    定数 <b><code>PHP_OUTPUT_HANDLER_&#42;</code></b> のビットマスク。    <p><code>output_callback</code> が <b><code>FALSE</code></b> を返すと、元の入力がそのままブラウザに送信されます。</p> <p><code>output_callback</code> パラメータに <b><code>NULL</code></b> 値を渡すと、 これをバイパスすることができます。</p> <p><code>ob_end_clean()</code>、 <code>ob_end_flush()</code>、<code>ob_clean()</code>、 <code>ob_flush()</code> および <b>ob_start()</b> をコールバック関数の内部からコールすることはできません。 実際にコールした際の挙動は未定義です。バッファの内容を消去したい際には、 コールバック関数から "" (空文字列) を返してください。 同じく、<i>print_r($expression, true)</i> や <i>highlight_file($filename, true)</i> のような 出力バッファリング関数も、 コールバック関数の内部からコールすることはできません。</p>  <p><b>注意</b>:</p> <p>Web ページの圧縮をサポートする圧縮 gz エンコード されたデータの Web ブラウザへの送信を容易にするために <code>ob_gzhandler()</code> が存在します。 <code>ob_gzhandler()</code> は、ブラウザが受け入れる content encoding の型を調べ、それに基づいて出力を返します。</p>
	 * @param int $chunk_size <p>オプションのパラメータ <code>chunk_size</code> が渡された場合、 バッファの長さが <code>chunk_size</code> バイトを超えるたびに、 出力の後でバッファがフラッシュされます。 デフォルト値は <i>0</i> で、これは出力関数がコールされるのが 出力バッファが閉じたときだけであることを意味します。</p> <p>PHP 5.4.0 より前のバージョンでは、<i>1</i> にも特別な意味があり、 これを指定するとチャンクサイズが 4096 バイトになります。</p>
	 * @param int $flags <p><code>flags</code> はビットマスクで、出力バッファ上でどんな操作ができるのかを制御します。 デフォルトでは、出力バッファのクリーン、フラッシュ、削除がすべてできるようになっています。 これは、明示的に <b><code>PHP_OUTPUT_HANDLER_CLEANABLE</code></b> | <b><code>PHP_OUTPUT_HANDLER_FLUSHABLE</code></b> | <b><code>PHP_OUTPUT_HANDLER_REMOVABLE</code></b> と設定したり、あるいは短縮形で <b><code>PHP_OUTPUT_HANDLER_STDFLAGS</code></b> と設定したりするのと同じです。</p> <p>各フラグが、次の表のように関数へのアクセスを制御します。</p>   定数 関数     <b><code>PHP_OUTPUT_HANDLER_CLEANABLE</code></b>  <code>ob_clean()</code>、 <code>ob_end_clean()</code> および <code>ob_get_clean()</code>    <b><code>PHP_OUTPUT_HANDLER_FLUSHABLE</code></b>  <code>ob_end_flush()</code>、 <code>ob_flush()</code> および <code>ob_get_flush()</code>    <b><code>PHP_OUTPUT_HANDLER_REMOVABLE</code></b>  <code>ob_end_clean()</code>、 <code>ob_end_flush()</code> および <code>ob_get_flush()</code>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ob-start.php
	 * @see ob_get_contents(), ob_end_clean(), ob_end_flush(), ob_implicit_flush(), ob_gzhandler(), ob_iconv_handler(), mb_output_handler(), ob_tidyhandler()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function ob_start(callable $output_callback = NULL, int $chunk_size = 0, int $flags = PHP_OUTPUT_HANDLER_STDFLAGS): bool {}

	/**
	 * URL リライタの値を追加する
	 * <p>この関数は、URL リライト機構に新しい名前/値の組を追加します。 名前および値は、URL (GET パラメータとして) およびフォーム (hidden フィールドとして) で追加されます。これは、session.use_trans_sid で透過的 URL リライティングが有効になっている場合に セッション ID が渡される方法と同じです。</p><p>この関数の挙動は、php.ini パラメータ url_rewriter.tags および url_rewriter.hosts によって制御されます。</p><p><b>注意</b>:  もし出力バッファリングが有効になっていない場合、この関数を コールすると出力バッファリングが暗黙的に開始されます。 </p>
	 * @param string $name <p>変数名。</p>
	 * @param string $value <p>変数の値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.output-add-rewrite-var.php
	 * @see output_reset_rewrite_vars(), ob_flush(), ob_list_handlers()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function output_add_rewrite_var(string $name, string $value): bool {}

	/**
	 * URL リライタの値をリセットする
	 * <p>この関数は URL リライタをリセットし、 <code>output_add_rewrite_var()</code> 関数によって事前に設定されたリライト変数を削除します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.output-reset-rewrite-vars.php
	 * @see output_add_rewrite_var(), ob_flush(), ob_list_handlers()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function output_reset_rewrite_vars(): bool {}

	/**
	 * <p>出力バッファが消去されたことを表します。</p> <p>PHP 5.4 以降で利用可能です。</p>
	 */
	define('PHP_OUTPUT_HANDLER_CLEAN', 2);

	/**
	 * <p><code>ob_start()</code> が作る出力バッファをクリーンできるかどうかを設定します。</p> <p>PHP 5.4 以降で利用可能です。</p>
	 */
	define('PHP_OUTPUT_HANDLER_CLEANABLE', 16);

	/**
	 * <p>バッファはフラッシュされたけれども、出力バッファリングはまだ続くことを表します。</p> <p>PHP 5.4 の時点では、これは <b><code>PHP_OUTPUT_HANDLER_WRITE</code></b> のエイリアスです。</p>
	 */
	define('PHP_OUTPUT_HANDLER_CONT', 0);

	/**
	 * <p>出力バッファリングが終わったことを表します。</p> <p>PHP 5.4 の時点では、これは <b><code>PHP_OUTPUT_HANDLER_FINAL</code></b> のエイリアスです。</p>
	 */
	define('PHP_OUTPUT_HANDLER_END', 8);

	/**
	 * <p>出力バッファリングの最終操作であることを表します。</p> <p>PHP 5.4 以降で利用可能です。</p>
	 */
	define('PHP_OUTPUT_HANDLER_FINAL', 8);

	/**
	 * <p>バッファがフラッシュされたことを表します。</p> <p>PHP 5.4 以降で利用可能です。</p>
	 */
	define('PHP_OUTPUT_HANDLER_FLUSH', 4);

	/**
	 * <p><code>ob_start()</code> が作る出力バッファをフラッシュできるかどうかを設定します。</p> <p>PHP 5.4 以降で利用可能です。</p>
	 */
	define('PHP_OUTPUT_HANDLER_FLUSHABLE', 32);

	/**
	 * <p><code>ob_start()</code> が作る出力バッファをスクリプトの終了前に削除できるかどうかを設定します。</p> <p>PHP 5.4 以降で利用可能です。</p>
	 */
	define('PHP_OUTPUT_HANDLER_REMOVABLE', 64);

	/**
	 * <p>出力バッファリングが始まったことを表します。</p>
	 */
	define('PHP_OUTPUT_HANDLER_START', 1);

	/**
	 * <p>出力バッファのフラグのデフォルト設定。 <b><code>PHP_OUTPUT_HANDLER_CLEANABLE</code></b> | <b><code>PHP_OUTPUT_HANDLER_FLUSHABLE</code></b> | <b><code>PHP_OUTPUT_HANDLER_REMOVABLE</code></b> と同等です。</p> <p>PHP 5.4 以降で利用可能です。</p>
	 */
	define('PHP_OUTPUT_HANDLER_STDFLAGS', 112);

	/**
	 * <p>出力バッファがフラッシュされ、データが出力されたことを表します。</p> <p>PHP 5.4 以降で利用可能です。</p>
	 */
	define('PHP_OUTPUT_HANDLER_WRITE', 0);

}
