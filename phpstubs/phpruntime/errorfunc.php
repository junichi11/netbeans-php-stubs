<?php



namespace {

	/**
	 * バックトレースを生成する
	 * <p><b>debug_backtrace()</b> は PHP バックトレースを生成します。</p>
	 * @param int $options <p>PHP 5.3.6 以降、このパラメータは次のオプションのビットマスクとなります。</p> <b><b>debug_backtrace()</b> のオプション</b>   DEBUG_BACKTRACE_PROVIDE_OBJECT  "object" インデックスを埋めるかどうか。    DEBUG_BACKTRACE_IGNORE_ARGS  "args" インデックス、 すなわちすべての関数/メソッドの引数を省略してメモリを節約するかどうか。     5.3.6 より前のバージョンでは <b><code>TRUE</code></b> あるいは <b><code>FALSE</code></b> しか指定できませんでした。これは <b><code>DEBUG_BACKTRACE_PROVIDE_OBJECT</code></b> オプションを指定するかしないかを意味します。
	 * @param int $limit <p>5.4.0 以降、このパラメータを使ってスタックフレームの数を制限できるようになりました。 デフォルト (<code>limit</code>=<i>0</i>) は、すべてのスタックフレームを返します。</p>
	 * @return array <p>連想配列の配列を返します。連想配列の要素として返される可能性があるものは以下のとおりです。</p> <b> <b>debug_backtrace()</b> から返される可能性がある要素 </b>   名前 型 説明     function <code>string</code>  カレントの関数名。 __FUNCTION__ も参照してください。    line <code>integer</code>  カレントの行番号。 __LINE__ も参照してください。    file <code>string</code>  カレントのファイル名。 __FILE__ も参照してください。    class <code>string</code>  カレントのクラス名。 __CLASS__ も参照してください。    object <code>object</code>  カレントのオブジェクト。    type <code>string</code>  カレントのコール方式。メソッド呼び出しの場合は "-&gt;"、 静的なメソッド呼び出しの場合は "::" が返されます。 関数呼び出しの場合は何も返されません。    args <code>array</code>  関数の内部の場合、関数の引数のリストとなります。 インクルードされたファイル内では、 読み込まれたファイルの名前となります。
	 * @link https://php.net/manual/ja/function.debug-backtrace.php
	 * @see trigger_error(), debug_print_backtrace()
	 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
	 */
	function debug_backtrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0): array {}

	/**
	 * バックトレースを表示する
	 * <p><b>debug_print_backtrace()</b> は PHP バックトレースを 表示します。関数のコール、include / require されているファイル、 そして <code>eval()</code> された内容などが表示されます。</p>
	 * @param int $options <p>PHP 5.3.6 の時点では、このパラメータは次のオプションのビットマスクとなります。</p> <b><b>debug_print_backtrace()</b> のオプション</b>   DEBUG_BACKTRACE_IGNORE_ARGS  "args" インデックスを無視してすべての関数/メソッドの引数をメモリに格納するかどうか。
	 * @param int $limit <p>5.4.0 以降、このパラメータを使ってスタックフレームの数を制限できるようになりました。 デフォルト (<code>limit</code>=<i>0</i>) は、すべてのスタックフレームを表示します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.debug-print-backtrace.php
	 * @see debug_backtrace()
	 * @since PHP 5, PHP 7
	 */
	function debug_print_backtrace(int $options = 0, int $limit = 0): void {}

	/**
	 * 最も最近のエラーをクリア
	 * @return void <p>最も最近のエラーをクリアーし、 <code>error_get_last()</code> で取得できないようにします。</p>
	 * @link https://php.net/manual/ja/function.error-clear-last.php
	 * @since PHP 7
	 */
	function error_clear_last(): void {}

	/**
	 * 最後に発生したエラーを取得する
	 * <p>最後に発生したエラーについての情報を取得します。</p>
	 * @return array <p>最後に発生したエラーについての情報を連想配列で返します。連想配列のキーは "type"、"message"、"file" および "line" となります。 PHP の内部関数で発生したエラーの場合は、 "message" の先頭に関数名が含まれています。 エラーが発生していない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.error-get-last.php
	 * @see error_clear_last()
	 * @since PHP 5 >= 5.2.0, PHP 7
	 */
	function error_get_last(): array {}

	/**
	 * 定義されたエラー処理ルーチンにエラーメッセージを送信する
	 * <p>エラーメッセージを Web サーバーのエラーログあるいはファイルに送ります。</p>
	 * @param string $message <p>ログに記録されるエラーメッセージ。</p>
	 * @param int $message_type <p>メッセージをどこに送るのかを指定します。以下の中から指定できます。</p> <p></p> <b><b>error_log()</b> ログタイプ</b>   0  <code>message</code> は、オペレーティング・システム のシステムログのメカニズムまたはファイルのいずれかを使って PHP のシステム・ロガーに送られます。どちらが使われるかは、 設定ディレクティブ error_log の内容により決定されます。これはデフォルトのオプションです。    1  <code>message</code> は、<code>destination </code> パラメータで指定されたアドレスに、電子メール により送られます。このメッセージタイプの場合にのみ、 4 番目のパラメータである <code>extra_headers</code> が使われます。    2  このオプションは存在しません。    3  <code>message</code> は <code>destination </code> で指定されたファイルに追加されます。 明示的に指定しない限り、<code>message</code> の 最後には改行文字は追加されません。    4  <code>message</code> は、直接 SAPI のログ出力ハンドラに送信されます。
	 * @param string $destination <p>メッセージの送信先。その設定は、上で説明している <code>message_type</code> パラメータの値によります。</p>
	 * @param string $extra_headers <p>追加のヘッダ。<code>message_type</code> パラメータが <i>1</i> に設定される場合に利用されます。 このメッセージタイプは、<code>mail()</code> と同様に 内部関数を利用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.error-log.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function error_log(string $message, int $message_type = 0, string $destination = NULL, string $extra_headers = NULL): bool {}

	/**
	 * 出力する PHP エラーの種類を設定する
	 * <p><b>error_reporting()</b> 関数は、 error_reporting ディレクティブを 実行時に設定します。PHP には多くのエラーレベルがあり、 この関数によりスクリプトの持続時間(実行時間)のレベルが設定されます。 オプションの <code>level</code> を指定しなかった場合は、 <b>error_reporting()</b> は単に現在のエラーレベルを返します。</p>
	 * @param int $level <p>新しい error_reporting レベル。ビットマスクまたは名前つき定数のどちらかです。将来の バージョンとの互換性を保証するために、名前つき定数の使用が 強く推奨されています。エラーレベルが追加されると、整数の幅は増加します。 そのため、以前の整数を使用するエラーレベルは常に期待通りに動作するとは 限りません。</p> <p>利用可能なエラーレベル定数とその実際の意味は、 定義済みの定数に 記述されています。</p>
	 * @return int <p>変更前の error_reporting レベルを返します。<code>level</code> パラメータを指定しなかった場合は、現在のレベルを返します。</p>
	 * @link https://php.net/manual/ja/function.error-reporting.php
	 * @see ini_set()
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function error_reporting(int $level = NULL): int {}

	/**
	 * 以前のエラーハンドラ関数を回復する
	 * <p><code>set_error_handler()</code> を使用してエラーハンドラ関数を 変更した後、元のエラーハンドラ(組込またはユーザー定義関数)に戻すために 使用されます。</p>
	 * @return bool <p>この関数は常に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.restore-error-handler.php
	 * @see error_reporting(), set_error_handler(), restore_exception_handler(), trigger_error()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function restore_error_handler(): bool {}

	/**
	 * 以前の例外ハンドラ関数を回復する
	 * <p><code>set_exception_handler()</code> を使用して例外ハンドラ関数を 変更した後、元の例外ハンドラ(組込またはユーザー定義関数)に戻すために 使用されます。</p>
	 * @return bool <p>この関数は常に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.restore-exception-handler.php
	 * @see set_exception_handler(), set_error_handler(), restore_error_handler(), error_reporting()
	 * @since PHP 5, PHP 7
	 */
	function restore_exception_handler(): bool {}

	/**
	 * ユーザー定義のエラーハンドラ関数を設定する
	 * <p>スクリプトのエラー処理を行うユーザー関数 (<code>error_handler</code>)を設定します。</p><p>この関数は、実行時のエラー処理をユーザーが定義するために使用します。 例えば、致命的なエラーの際にデータやファイルを消去する必要があるような アプリケーションや、ある条件のもとに (<code>trigger_error()</code>を使用して)エラーを発生する必要がある アプリケーションがこの場合にあたります。</p><p>コールバック関数が <b><code>FALSE</code></b> を返さない限り、<code>error_types</code> で指定した型のエラーでは PHP 標準のエラーハンドラが完全にバイパスされることに注意してください。 <code>error_reporting()</code> の設定にかかわらず、どのような場合でも ユーザーが設定したエラーハンドラがコールされます。ただし、この場合でも ハンドラで <code>error_reporting()</code> のカレントの値を読み、 それにあわせて適切に動作させることは可能です。エラーを発生した命令の前に @ エラー制御演算子  が付加されている場合、この値は 0 となることには注意しましょう。</p><p>ユーザーハンドラ関数は、必要に応じて <code>die()</code> を コールする責任があることにも注意しましょう。エラーハンドラ関数が リターンした場合、スクリプトの実行は、エラーを発生した命令の次の命令に 継続されます。</p><p>以下のエラータイプは、ユーザー定義の関数では扱えません。 <b><code>E_ERROR</code></b>, <b><code>E_PARSE</code></b>, <b><code>E_CORE_ERROR</code></b>, <b><code>E_CORE_WARNING</code></b>, <b><code>E_COMPILE_ERROR</code></b>, <b><code>E_COMPILE_WARNING</code></b> および <b>set_error_handler()</b> がコールされたファイルで発生した 大半の <b><code>E_STRICT</code></b> 。</p><p>(ファイルアップロードのように)スクリプトが実行される前にエラーが 発生した場合、カスタムエラーハンドラはコールされません。 これは、その時点では登録されていないためです。</p>
	 * @param callable $error_handler <p>次のシグネチャに従うコールバック。 <b><code>NULL</code></b> を渡すと、ハンドラをデフォルトの状態に戻せます。 関数名のかわりにオブジェクトへのリファレンスとメソッド名を含む配列を指定することもできます。</p> <p></p> handler ( int <code>$errno</code> , string <code>$errstr</code> [, string <code>$errfile</code> [, int <code>$errline</code> [, array <code>$errcontext</code> ]]] ) : bool    <code>errno</code>    最初のパラメータ <code>errno</code> は、発生させる エラーのレベルを整数で格納します。    <code>errstr</code>    2 番目のパラメータ <code>errstr</code> は、 エラーメッセージを文字列で格納します。    <code>errfile</code>    3 番目のパラメータ <code>errfile</code> はオプションで、 エラーが発生したファイルの名前を文字列で格納します。    <code>errline</code>    4 番目のパラメータ <code>errline</code> はオプションで、 エラーが発生した行番号を整数で格納します。    <code>errcontext</code>    5 番目のパラメータ <code>errcontext</code> はオプションで、 エラーが発生した場所のアクティブシンボルテーブルを指す配列です。 つまり、エラーが発生したスコープ内でのすべての変数の内容を格納した 配列が <code>errcontext</code> だということです。 ユーザーエラーハンドラは、決してエラーコンテキストを書き換えては いけません。   <b>警告</b> <p>This parameter has been <i>DEPRECATED</i> as of PHP 7.2.0. Relying on it is highly discouraged.</p>    <p>この関数が <b><code>FALSE</code></b> を返した場合は、通常のエラーハンドラが処理を引き継ぎます。</p>
	 * @param int $error_types <p>設定パラメータ error_reporting で表示するエラーを制御するのと全く同様に、 <code>error_handler</code> の起動を制御する際に 使用可能です。 このマスクを指定しない場合、 <code>error_handler</code> は error_reporting の設定によらず 全てのエラーに関してコールされます。</p>
	 * @return mixed <p>前に定義されたエラーハンドラ(ある場合)を含む文字列を返します。 組み込みのエラーハンドラを使用している場合は <b><code>NULL</code></b> を返します。 また、無効なコールバックなどでエラーとなった場合も <b><code>NULL</code></b> を返します。 前に定義されたハンドラがクラスメソッドの場合、この関数は、 クラスとメソッド名からなる添字配列を返します。</p>
	 * @link https://php.net/manual/ja/function.set-error-handler.php
	 * @see error_reporting(), restore_error_handler(), trigger_error()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function set_error_handler(callable $error_handler, int $error_types = E_ALL | E_STRICT) {}

	/**
	 * ユーザー定義の例外ハンドラ関数を設定する
	 * <p>例外が try/catch ブロックの中でキャッチされなかった場合の デフォルトの例外ハンドラを設定します。 実行は、<code>exception_handler</code> がコールされた後に 停止します。</p>
	 * @param callable $exception_handler <p>キャッチされない例外が発生した際にコールされる関数の名前。 このハンドラ関数は、パラメータをひとつとる必要があります。 このパラメータは、スローされた例外オブジェクトとなります。 PHP 7 より前のバージョンでは、ハンドラのシグネチャは、次のようになります。</p> <p></p> handler ( <code>Exception</code> <code>$ex</code> ) : void  <p>PHP 7 からは、大半のエラーが Error 例外として報告されるようになりました。 これらもこのハンドラで扱うことになるでしょう。Error と Exception は、どちらも Throwable インターフェイスを実装しています。 PHP 7 以降のハンドラのシグネチャは、次のようになります。</p> <p></p> handler ( <code>Throwable</code> <code>$ex</code> ) : void  <p><b><code>NULL</code></b> を渡すと、このハンドラをデフォルトの状態に戻せます。</p>  <b>警告</b> <p>コールバックの <code>ex</code> パラメータにタイプヒントとして Exception を明示すると、 PHP 7 での例外の階層の変更に伴う問題が発生することに注意しましょう。</p>
	 * @return callable <p>前に定義された例外ハンドラの名前、またはエラー発生時に <b><code>NULL</code></b> を返します。 前にハンドラが定義されていない場合にも <b><code>NULL</code></b> が返されます。</p>
	 * @link https://php.net/manual/ja/function.set-exception-handler.php
	 * @see restore_exception_handler(), restore_error_handler(), error_reporting()
	 * @since PHP 5, PHP 7
	 */
	function set_exception_handler(callable $exception_handler): callable {}

	/**
	 * ユーザーレベルのエラー/警告/通知メッセージを生成する
	 * <p>ユーザーエラーを発生させるために使います。組み込みのエラーハンドラまたは新しいエラーハンドラ (<code>set_error_handler()</code>) として設定済みのユーザー定義関数と組み合わせて使うこともできます。</p><p>この関数は、実行時の例外に特定の応答を生成する必要がある場合に便利です。</p>
	 * @param string $error_msg <p>このエラーに割り当てられたメッセージ。長さは最大 1024 バイトまでです。1024 バイトを超える部分は切り捨てられます。</p>
	 * @param int $error_type <p>このエラーに割り当てられたエラー型です。E_USER 関連の定数のみが指定可能で、デフォルトは <b><code>E_USER_NOTICE</code></b> です。</p>
	 * @return bool <p>この関数は、間違った <code>error_type</code> が指定された場合に <b><code>FALSE</code></b> を、それ以外の場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.trigger-error.php
	 * @see error_reporting(), set_error_handler(), restore_error_handler()
	 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
	 */
	function trigger_error(string $error_msg, int $error_type = E_USER_NOTICE): bool {}

	/**
	 * trigger_error() のエイリアス
	 * <p>この関数は次の関数のエイリアスです。 <code>trigger_error()</code>.</p>
	 * @param string $error_msg <p>このエラーに割り当てられたメッセージ。長さは最大 1024 バイトまでです。1024 バイトを超える部分は切り捨てられます。</p>
	 * @param int $error_type <p>このエラーに割り当てられたエラー型です。E_USER 関連の定数のみが指定可能で、デフォルトは <b><code>E_USER_NOTICE</code></b> です。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.user-error.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function user_error(string $error_msg, int $error_type = E_USER_NOTICE): bool {}

	/**
	 * ユーザーによって発行される注意メッセージ。<b><code>E_NOTICE</code></b>に に似ているがPHPコード上で<code>trigger_error()</code>関数を 使用した場合に発行される点が違う。
	 */
	define('1024', null);

	/**
	 * コンパイル時の警告（致命的ではない）。<b><code>E_WARNING</code></b>に 似ているがZendスクリプティングエンジンによって発行される点が違う。
	 */
	define('128', null);

	/**
	 * PHPの初期始動時点での致命的なエラー。<b><code>E_ERROR</code></b>に 似ているがPHPのコアによって発行される点が違う。
	 */
	define('16', null);

	/**
	 * PHP 5.3.0 より
	 */
	define('16384', null);

	/**
	 * PHP 5 より
	 */
	define('2048', null);

	/**
	 * ユーザーによって発行されるエラーメッセージ。<b><code>E_ERROR</code></b> に似ているがPHPコード上で<code>trigger_error()</code>関数を 使用した場合に発行される点が違う。
	 */
	define('256', null);

	/**
	 * （致命的ではない）警告。PHPの初期始動時に発生する。 <b><code>E_WARNING</code></b>に似ているがPHPのコアによって発行される 点が違う。
	 */
	define('32', null);

	/**
	 * PHP 5.4.x では 32767、 PHP 5.3.x では 30719、 PHP 5.2.x では 6143、 それより前のバージョンでは 2047 でした。
	 */
	define('32767', null);

	/**
	 * コンパイル時のパースエラー。パースエラーはパーサでのみ生成されま す。
	 */
	define('4', null);

	/**
	 * PHP 5.2.0 より
	 */
	define('4096', null);

	/**
	 * ユーザーによって発行される警告メッセージ。<b><code>E_WARNING</code></b> に似ているがPHPコード上で<code>trigger_error()</code>関数を 使用した場合に発行される点が違う。
	 */
	define('512', null);

	/**
	 * コンパイル時の致命的なエラー。<b><code>E_ERROR</code></b>に 似ているがZendスクリプティングエンジンによって発行される点が違う。
	 */
	define('64', null);

	/**
	 * 実行時の警告。エラーを発しうる状況に遭遇したことを示す。 ただし通常のスクリプト実行の場合にもこの警告を発することがありうる。
	 */
	define('8', null);

	/**
	 * PHP 5.3.0 より
	 */
	define('8192', null);

}
