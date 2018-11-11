<?php



/**
 * クライアントとの接続が切断されているかどうかを調べる
 * <p>クライアントとの接続が切断されているかどうかを調べます。</p>
 * @return int <p>クライアントとの接続が切断されている場合に 1、それ以外の場合に 0 を返します。</p>
 * @link http://php.net/manual/ja/function.connection-aborted.php
 * @see connection_status(), ignore_user_abort()
 * @since PHP 4, PHP 5, PHP 7
 */
function connection_aborted(): int {}

/**
 * 接続ステータスのビットフィールドを返す
 * <p>接続ステータスのビットフィールドを取得します。</p>
 * @return int <p>接続ステータスのビットフィールドを返します。これを定数 <i>CONNECTION_XXX</i> と比較することで、接続の状態を判断できます。</p>
 * @link http://php.net/manual/ja/function.connection-status.php
 * @see connection_aborted(), ignore_user_abort()
 * @since PHP 4, PHP 5, PHP 7
 */
function connection_status(): int {}

/**
 * 定数の値を返す
 * <p><code>name</code> で指定した定数の値を返します。</p><p><b>constant()</b> はある定数の値を取得する必要があるが、 その名前が不明な場合に有用です。これは、定数名が変数に保存されているか、 関数により返されるかの場合です。</p><p>この関数は クラス定数に対しても動作します。</p>
 * @param string $name <p>定数名。</p>
 * @return mixed <p>定数の値、あるいはその定数が定義されていない場合に <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.constant.php
 * @see define(), defined()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function constant(string $name) {}

/**
 * 名前を指定して定数を定義する
 * <p>実行時に、名前を指定して定数を定義します。</p>
 * @param string $name <p>定数の名前。</p>
 * @param mixed $value <p>定数の値。PHP 5 では、<code>value</code> は スカラー値 (<code>integer</code>、 <code>float</code>、<code>string</code>、<code>boolean</code> あるいは <b><code>NULL</code></b>) でなければいけません。PHP 7 では配列を使うこともできます。</p>  <b>警告</b> <p>リソース型の定数を定義することもできますが、 推奨できません。予期せぬ振る舞いをする可能性があります。</p>
 * @param bool $case_insensitive <p><b><code>TRUE</code></b> を指定すると、定数は大文字小文字を区別しないようになります。 デフォルトでは大文字小文字を区別します。つまり <i>CONSTANT</i> と <i>Constant</i> は別の値を表すわけです。</p>  <p><b>注意</b>:</p> <p>大文字小文字を区別しないときは、定数は小文字で格納されます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.define.php
 * @see defined(), constant()
 * @since PHP 4, PHP 5, PHP 7
 */
function define(string $name, $value, bool $case_insensitive = false): bool {}

/**
 * 指定した名前の定数が存在するかどうかを調べる
 * <p>指定した定数が存在し、定義されているかどうかを調べます。</p><p><b>注意</b>:</p><p>変数が存在するかどうかを知りたければ、<code>isset()</code> を利用してください。<b>defined()</b> は 定数にしか適用できません。 関数が存在するかどうかを知りたければ、 <code>function_exists()</code> を利用してください。</p>
 * @param string $name <p>定数名。</p>
 * @return bool <p><code>name</code> で指定した名前の定数が定義されている 場合に <b><code>TRUE</code></b>、その他の場合に<b><code>FALSE</code></b>を返します。</p>
 * @link http://php.net/manual/ja/function.defined.php
 * @see define(), constant(), get_defined_constants(), function_exists()
 * @since PHP 4, PHP 5, PHP 7
 */
function defined(string $name): bool {}

/**
 * ユーザーのブラウザの機能を取得する
 * <p>ユーザーのブラウザの機能を調べます。これは、browscap.ini ファイルのブラウザ情報を調べることにより行います。</p>
 * @param string $user_agent <p>処理するユーザーエージェント。デフォルトでは、HTTP の User-Agent ヘッダの内容を使用します。しかし、このパラメータを渡すことでこれを変更する (別のブラウザの情報を取得する) ことが可能です。</p> <p>このパラメータを処理しないようにするには <b><code>NULL</code></b> 値を渡します。</p>
 * @param bool $return_array <p><b><code>TRUE</code></b> を指定すると、この関数はオブジェクトでなく配列を返します。</p>
 * @return mixed <p>情報は、オブジェクトあるいは配列形式で返されます。 たとえばブラウザのメジャーバージョン番号、マイナーバージョン番号や ID 文字列といったさまざまなデータが含まれています。また、 フレームや JavaScript、クッキーといった機能についての <b><code>TRUE</code></b>/<b><code>FALSE</code></b> 値も含んでいます。</p><p><i>cookies</i> の値は、単にそのブラウザがクッキーを扱う機能を 有していることを示すだけであり、ユーザーがクッキーを受け入れる設定に しているかどうかを表すものではありません。それをチェックする唯一の方法は、 いったん <code>setcookie()</code> でクッキーを設定してからリロードし、 その値を調べることです。</p>
 * @link http://php.net/manual/ja/function.get-browser.php
 * @since PHP 4, PHP 5, PHP 7
 */
function get_browser(string $user_agent = NULL, bool $return_array = false) {}

/**
 * ファイルの構文ハイライト表示
 * <p><code>filename</code> の中のコードを構文ハイライト表示して 出力します。色は、PHP 組込の構文ハイライタで定義されているものを使用します。</p><p>多くのサーバーでは、拡張子が <i>phps</i> のファイルは 自動的に構文ハイライト表示されるように設定されています。例えば example.phps のようなファイルは、構文ハイライト したソースファイルとして表示されます。これを有効にするには、 httpd.conf に以下のような行を追加します。</p>
 * @param string $filename <p>ハイライト表示する PHP ファイルへのパス。</p>
 * @param bool $return <p>このパラメータを <b><code>TRUE</code></b> にすると、この関数はハイライトされたコードを返します。</p>
 * @return mixed <p><code>return</code> が <b><code>TRUE</code></b> の場合は、 ハイライトされたコードを文字列として返し、表示しません。 それ以外の場合は、成功した場合に <b><code>TRUE</code></b>、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.highlight-file.php
 * @see highlight_string()
 * @since PHP 4, PHP 5, PHP 7
 */
function highlight_file(string $filename, bool $return = false) {}

/**
 * 文字列の構文ハイライト表示
 * <p>PHP 組込みの 構文ハイライタで定義されたカラーを使用して <code>str</code> を構文ハイライト表示したものを、html マークアップで出力あるいは返します。</p>
 * @param string $str <p>ハイライト表示する PHP コード。開始タグを含む必要があります。</p>
 * @param bool $return <p>このパラメータを <b><code>TRUE</code></b> にすると、この関数はハイライトされたコードを返します。</p>
 * @return mixed <p><code>return</code> が <b><code>TRUE</code></b> の場合は、 ハイライトされたコードを文字列として返し、表示しません。 それ以外の場合は、成功した場合に <b><code>TRUE</code></b>、 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.highlight-string.php
 * @see highlight_file()
 * @since PHP 4, PHP 5, PHP 7
 */
function highlight_string(string $str, bool $return = false) {}

/**
 * Get the system's high resolution time
 * <p>Returns the system's high resolution time, counted from an arbitrary point in time. The delivered timestamp is monotonic and can not be adjusted.</p>
 * @param bool $get_as_number <p>Whether the high resolution time should be returned as <code>array</code> or number.</p>
 * @return mixed <p>Returns an array of integers in the form [seconds, nanoseconds], if the parameter <code>get_as_number</code> is false. Otherwise the nanoseconds are returned as <code>integer</code> (64bit platforms) or <code>float</code> (32bit platforms).</p>
 * @link http://php.net/manual/ja/function.hrtime.php
 * @since PHP 7 >= 7.3.0
 */
function hrtime(bool $get_as_number = FALSE) {}

/**
 * クライアントの接続が切断された際にスクリプトの実行を終了するかどうかを設定する
 * <p>クライアントの接続が切断された際にスクリプトの実行を終了するかどうかを設定します。</p><p>PHP をコマンドラインスクリプトとして実行していて スクリプトを終了させずに tty が消えた場合は、 次に何かを書こうとしたときにスクリプトが終了します。これは <code>value</code> が <b><code>TRUE</code></b> に設定されていても同じです。</p>
 * @param bool $value <p>指定すると、この関数は ini 項目 ignore_user_abort に <code>value</code> の値を設定します。 省略した場合、この関数は前の設定をそのまま返し、何も変更しません。</p>
 * @return int <p>以前の設定を表す integer 値を返します。</p>
 * @link http://php.net/manual/ja/function.ignore-user-abort.php
 * @see connection_aborted(), connection_status()
 * @since PHP 4, PHP 5, PHP 7
 */
function ignore_user_abort(bool $value = NULL): int {}

/**
 * データをバイナリ文字列にパックする
 * <p>指定された引数を <code>format</code> に基づいて バイナリ文字列にパックします。</p><p>この関数のアイデアは Perl からのものであり、フォーマット指定用の コードは Perl と同様に動作します。しかし、中には存在しない書式コードもあります。 たとえば Perl の "u" は存在しません。</p><p>符号付及び符号無しの区別は関数 <code>unpack()</code> にのみ 影響を与えます。関数 <b>pack()</b> は符号付及び符号無しの フォーマットコードのどちらでも同じ結果となることに注意しましょう。</p>
 * @param string $format <p>フォーマット文字列は、 フォーマットコードの後にオプションの反復指定用引数が続く形式と なっています。反復指定用引数として整数値、または入力データの最後まで 反復を意味する <i>&#42;</i> のどちらかを指定することができます。 a, A, h, H の場合、 反復数はそのデータ引数が取得する文字の数を指定します。反復数が @ の場合、 次のデータを置く場所の絶対位置を表します。その他の場合、反復数は データ引数が使われる数を指定し、結果のバイナリ文字列にパックされます。</p> <p>現在、実装されているものを以下に示します。</p> <b><b>pack()</b> の書式文字</b>   コード 説明     a NUL で埋めた文字列   A 空白で埋めた文字列   h 十六進文字列、下位ニブルが先   H 十六進文字列、上位ニブルが先   c signed char   C unsigned char   s signed short (常に 16 ビット、マシンのバイトオーダー)   S unsigned short (常に 16 ビット、マシンのバイトオーダー)   n unsigned short (常に 16 ビット、ビッグエンディアンバイトオーダー)   v unsigned short (常に 16 ビット、リトルエンディアンバイトオーダー)   i signed integer (サイズおよびバイトオーダーはマシン依存)   I unsigned integer (サイズおよびバイトオーダーはマシン依存)   l signed long (常に 32 ビット、マシンのバイトオーダー)   L unsigned long (常に 32 ビット、マシンのバイトオーダー)   N unsigned long (常に 32 ビット、ビッグエンディアンバイトオーダー)   V unsigned long (常に 32 ビット、リトルエンディアンバイトオーダー)   q signed long long (常に 64 ビット、マシンのバイトオーダー)   Q unsigned long long (常に 64 ビット、マシンのバイトオーダー)   J unsigned long long (常に 64 ビット、ビッグエンディアンバイトオーダー)   P unsigned long long (常に 64 ビット、リトルエンディアンバイトオーダー)   f float (サイズおよび表現はマシン依存)   d double (サイズおよび表現はマシン依存)   x NUL バイト   X 1 バイト戻る   Z NUL 埋め文字列 (PHP 5.5 以降)   @ 絶対位置まで NUL で埋める
 * @param mixed $args
 * @param mixed $_
 * @return string <p>バイナリ文字列を含むデータを返します。</p>
 * @link http://php.net/manual/ja/function.pack.php
 * @see unpack()
 * @since PHP 4, PHP 5, PHP 7
 */
function pack(string $format, $args = NULL, $_ = NULL): string {}

/**
 * 指定したファイルの文法チェック（と実行）を行う
 * <p>指定したファイル <code>filename</code> に対して文法チェック (lint) を行い、スクリプトにエラーがないかどうかを調べます。</p><p>これは コマンドライン から <b>php -l</b> を利用するのと似ていますが、 <b>php_check_syntax()</b> は実際に <code>filename</code> を実行します (結果は出力しません)。</p><p>たとえば、もし <code>filename</code> の中で関数が 定義されていた場合に <b>php_check_syntax()</b> はそれを実行しますが、<code>filename</code> の 結果は表示されません。</p><p><b>注意</b>:</p><p>技術的な理由により、この関数は廃止され、PHP から削除されました。 かわりに、コマンドライン から <i>php -l somefile.php</i> を利用してください。</p>
 * @param string $filename <p>調べるファイルの名前。</p>
 * @param string $error_message <p><code>error_message</code> パラメータが指定された場合、 文法チェックの際に生成されたエラーメッセージがここに格納されます。 <code>error_message</code> は 参照で渡されます。</p>
 * @return bool <p>文法チェックが成功した場合に <b><code>TRUE</code></b> 、チェックが失敗したり <code>file_name</code> がオープンできなかった場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.php-check-syntax.php
 * @see include, is_readable()
 * @since PHP 5 < 5.0.5
 */
function php_check_syntax(string $filename, string &$error_message = NULL): bool {}

/**
 * コメントと空白文字を取り除いたソースを返す
 * <p>PHP のソースコード <code>filename</code> からコメントと 空白文字を取り除いたものを返します。これは、スクリプトの中で 実際のコードの量がどれくらいなのかを知るのに役立つでしょう。 これは コマンドライン から <b>php -w</b> を実行するのと同じです。</p>
 * @param string $filename <p>PHP ファイルへのパス。</p>
 * @return string <p>成功した場合に処理済みのソースコード、失敗した場合に空の文字列を返します。</p> <p><b>注意</b>:</p> <p>This function respects the value of the short_open_tag ini directive.</p>  <p><b>注意</b>:</p> <p>PHP 5.0.1 以降、この関数は記述どおりに動作するようになりました。 それまでは単に空の文字列を返すだけでした。このバグについての詳細な情報は、 バグ番号 » 29606 を参照ください。</p>
 * @link http://php.net/manual/ja/function.php-strip-whitespace.php
 * @since PHP 5, PHP 7
 */
function php_strip_whitespace(string $filename): string {}

/**
 * Convert string from one codepage to another
 * <p>Convert string from one codepage to another.</p>
 * @param int|string $in_codepage <p>The codepage of the <code>subject</code> string. Either the codepage name or identifier.</p>
 * @param int|string $out_codepage <p>The codepage to convert the <code>subject</code> string to. Either the codepage name or identifier.</p>
 * @param string $subject <p>The string to convert.</p>
 * @return string <p>The <code>subject</code> string converted to <code>out_codepage</code>, or <b><code>NULL</code></b> on failure.</p>
 * @link http://php.net/manual/ja/function.sapi-windows-cp-conv.php
 * @see sapi_windows_cp_get(), iconv()
 * @since PHP 7 >= 7.1.0
 */
function sapi_windows_cp_conv($in_codepage, $out_codepage, string $subject): string {}

/**
 * Get process codepage
 * <p>Get the identifier of the codepage of the current process.</p>
 * @param string $kind <p>The kind of codepage: either <i>'ansi'</i> or <i>'oem'</i>.</p>
 * @return int <p>Returns the codepage identifier.</p>
 * @link http://php.net/manual/ja/function.sapi-windows-cp-get.php
 * @see sapi_windows_cp_set()
 * @since PHP 7 >= 7.1.0
 */
function sapi_windows_cp_get(string $kind): int {}

/**
 * Indicates whether the codepage is UTF-8 compatible
 * <p>Indicates whether the codepage of the current process is UTF-8 compatible.</p>
 * @return bool <p>Returns whether the codepage of the current process is UTF-8 compatible.</p>
 * @link http://php.net/manual/ja/function.sapi-windows-cp-is-utf8.php
 * @see sapi_windows_cp_get()
 * @since PHP 7 >= 7.1.0
 */
function sapi_windows_cp_is_utf8(): bool {}

/**
 * Set process codepage
 * <p>Set the codepage of the current process.</p>
 * @param int $cp <p>A codepage identifier.</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.sapi-windows-cp-set.php
 * @see sapi_windows_cp_get()
 * @since PHP 7 >= 7.1.0
 */
function sapi_windows_cp_set(int $cp): bool {}

/**
 * Get or set VT100 support for the specified stream associated to an output buffer of a Windows console.
 * <p>If <code>enable</code> is omitted, the function return <b><code>TRUE</code></b> if the stream <code>stream</code> has VT100 control codes enabled, <b><code>FALSE</code></b> otherwise.</p><p>If <code>enable</code> is specified, the function will try to enable or disable the VT100 features of the stream <code>stream</code>. If the feature has been successfully enabled (or disabled), the function will return <b><code>TRUE</code></b>, or <b><code>FALSE</code></b> otherwise.</p><p>At startup, PHP tries to enable the VT100 feature of the <b><code>STDOUT</code></b>/<b><code>STDERR</code></b> streams. By the way, if those streams are redirected to a file, the VT100 features may not be enabled.</p><p>The function uses the <b><code>ENABLE_VIRTUAL_TERMINAL_PROCESSING</code></b> flag implemented in the Windows 10 API, so the VT100 feature may not be available on older Windows versions.</p>
 * @param resource $stream <p>The stream on which the function will operate.</p>
 * @param bool $enable <p>If specified, the VT100 feature will be enabled (if <b><code>TRUE</code></b>) or disabled (if <b><code>FALSE</code></b>).</p>
 * @return bool <p>If <code>enable</code> is not specified: returns <b><code>TRUE</code></b> if the VT100 feature is enabled, <b><code>FALSE</code></b> otherwise.</p><p>If <code>enable</code> is specified: 成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.sapi-windows-vt100-support.php
 * @since PHP 7 >= 7.2.0
 */
function sapi_windows_vt100_support($stream, bool $enable = NULL): bool {}

/**
 * highlight_file() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>highlight_file()</code>.</p>
 * @param string $filename <p>ハイライト表示する PHP ファイルへのパス。</p>
 * @param bool $return <p>このパラメータを <b><code>TRUE</code></b> にすると、この関数はハイライトされたコードを返します。</p>
 * @return mixed
 * @link http://php.net/manual/ja/function.show-source.php
 * @since PHP 4, PHP 5, PHP 7
 */
function show_source(string $filename, bool $return = false) {}

/**
 * 実行を遅延させる
 * <p><code>seconds</code> で与えられた秒数ぶんプログラムの実行を遅延させます。</p>
 * @param int $seconds <p>秒単位の停止時間。</p>
 * @return int <p>成功した場合にゼロ、エラーが発生した場合に <b><code>FALSE</code></b> を返します。</p><p>シグナルで中断した場合、<b>sleep()</b> はゼロ以外の値を返します。 Windows では、この値は常に <i>192</i> (Windows API の定数 <b><code>WAIT_IO_COMPLETION</code></b> の値) です。 その他のプラットフォームでは、残りの遅延秒数を返します。</p>
 * @link http://php.net/manual/ja/function.sleep.php
 * @see usleep(), time_nanosleep(), time_sleep_until(), set_time_limit()
 * @since PHP 4, PHP 5, PHP 7
 */
function sleep(int $seconds): int {}

/**
 * システムの平均負荷を取得する
 * <p>過去 1、5、15 分間のシステムの平均負荷 (システムの実行キューの中のプロセス数) を表す三つの値を返します。</p>
 * @return array <p>(過去 1、5、15 分間の) 三つの値を <code>array</code> で返します。</p>
 * @link http://php.net/manual/ja/function.sys-getloadavg.php
 * @since PHP 5 >= 5.1.3, PHP 7
 */
function sys_getloadavg(): array {}

/**
 * 秒およびナノ秒単位で実行を遅延する
 * <p>指定した <code>seconds</code> および <code>nanoseconds</code> の時間だけプログラムの実行を遅延させます。</p>
 * @param int $seconds <p>非負の整数である必要があります。</p>
 * @param int $nanoseconds <p>十億よりも小さい非負の整数である必要があります。</p>
 * @return mixed <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p><p>シグナルによって遅延処理が中断された場合、以下の要素からなる連想配列を返します。</p><ul> <li>  <i>seconds</i> - 残りの秒数  </li> <li>  <i>nanoseconds</i> - 残りのナノ秒数  </li> </ul>
 * @link http://php.net/manual/ja/function.time-nanosleep.php
 * @see sleep(), usleep(), time_sleep_until(), set_time_limit()
 * @since PHP 5, PHP 7
 */
function time_nanosleep(int $seconds, int $nanoseconds) {}

/**
 * 指定した時刻まで実行を遅延する
 * <p>指定した <code>timestamp</code> までスクリプトの実行を遅延させます。</p>
 * @param float $timestamp <p>スクリプトが再開する時刻。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.time-sleep-until.php
 * @see sleep(), usleep(), time_nanosleep(), set_time_limit()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function time_sleep_until(float $timestamp): bool {}

/**
 * 一意な ID を生成する
 * <p>マイクロ秒単位の現在時刻にもとづいた、接頭辞つきの一意な ID を取得します。</p><p>この関数が生成する値は、暗号学的に安全ではありません。そのため、これを暗号として使ってはいけません。暗号学的に安全な値が必要な場合は、<code>random_int()</code> か <code>random_bytes()</code> あるいは <code>openssl_random_pseudo_bytes()</code> を使いましょう。</p><p>This function does not guarantee uniqueness of return value. Since most systems adjust system clock by NTP or like, system time is changed constantly. Therefore, it is possible that this function does not return unique ID for the process/thread. Use <code>more_entropy</code> to increase likelihood of uniqueness.</p>
 * @param string $prefix <p>これが有用なのは、たとえば複数ホストで同時に ID を生成するような場合です。このような場合、同じマイクロ秒で同じ ID が生成されてしまう可能性があります。</p> <p>空の <code>prefix</code> を指定すると、 返される文字列は 13 文字となります。 <code>more_entropy</code> が <b><code>TRUE</code></b> の場合は 23 文字となります。</p>
 * @param bool $more_entropy <p><b><code>TRUE</code></b> にすると、<b>uniqid()</b> は 返り値の最後にさらに別のエントロピーを (線形合同法を使用して) 追加します。これにより、結果が一意になる可能性を高めます。</p>
 * @return string <p>タイムスタンプにもとづいた一意な識別子を文字列で返します。</p> <b>警告</b> <p>This function tries to create 一意な識別子, but it does not guarantee 100% uniqueness of return value.</p>
 * @link http://php.net/manual/ja/function.uniqid.php
 * @since PHP 4, PHP 5, PHP 7
 */
function uniqid(string $prefix = "", bool $more_entropy = false): string {}

/**
 * バイナリ文字列からデータを切り出す
 * <p><code>format</code> に基づき、バイナリ文字列から配列に分解します。</p><p>分解した結果は連想配列に格納されます。 このようにするには、別のフォーマットコードを使用してそれらを スラッシュ / で区切る必要があります。 引数にリピータが含まれる場合の配列の要素名は、 指定した名前の後に順番に番号がついたものとなります。</p>
 * @param string $format <p>書式コードの説明は <code>pack()</code> を参照ください。</p>
 * @param string $data <p>パックされたデータ。</p>
 * @return array <p>バイナリ文字列を切り出した要素を含む連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.unpack.php
 * @see pack()
 * @since PHP 4, PHP 5, PHP 7
 */
function unpack(string $format, string $data): array {}

/**
 * マイクロ秒単位で実行を遅延する
 * <p>指定したマイクロ秒数だけプログラムの実行を遅延させます。</p>
 * @param int $micro_seconds <p>実行を停止するマイクロ秒数。マイクロ秒とは、一秒の百万分の一です。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.usleep.php
 * @see sleep(), time_nanosleep(), time_sleep_until(), set_time_limit()
 * @since PHP 4, PHP 5, PHP 7
 */
function usleep(int $micro_seconds): void {}

/**
 * PHP 5.1 で追加されました。
 */
define('__COMPILER_HALT_OFFSET__', null);

define('CONNECTION_ABORTED', 1);

define('CONNECTION_NORMAL', 0);

define('CONNECTION_TIMEOUT', 2);

namespace HRTime {

	/**
	 * @link http://php.net/manual/ja/class.hrtime-performancecounter.php
	 * @since PECL hrtime >= 0.4.3
	 */
	class PerformanceCounter {

		/**
		 * Timer frequency in ticks per second
		 * <p>Returns the timer frequency in ticks per second. This value is constant after the system start on almost any operating system.</p>
		 * @return int <p>Returns <code>integer</code> indicating the timer frequency.</p>
		 * @link http://php.net/manual/ja/hrtime-performancecounter.getfrequency.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public static function getFrequency(): int {}

		/**
		 * Current ticks from the system
		 * <p>Returns the ticks count.</p>
		 * @return int <p>Returns <code>integer</code> indicating the ticks count.</p>
		 * @link http://php.net/manual/ja/hrtime-performancecounter.getticks.php
		 * @since PECL hrtime >= 0.6.0
		 */
		public static function getTicks(): int {}

		/**
		 * Ticks elapsed since the given value
		 * <p>Returns the ticks count elapsed since the given start value.</p>
		 * @param int $start <p>Starting ticks value.</p>
		 * @return int <p>Returns <code>integer</code> indicating the ticks count.</p>
		 * @link http://php.net/manual/ja/hrtime-performancecounter.gettickssince.php
		 * @since PECL hrtime >= 0.6.0
		 */
		public static function getTicksSince(int $start): int {}
	}

	/**
	 * @link http://php.net/manual/ja/class.hrtime-stopwatch.php
	 * @since PECL hrtime >= 0.4.3
	 */
	class StopWatch extends \HRTime\PerformanceCounter {

		/**
		 * Get elapsed ticks for all intervals
		 * <p>Get elapsed ticks for all the previously closed intervals.</p>
		 * @return int <p>Returns <code>integer</code> indicating elapsed ticks.</p>
		 * @link http://php.net/manual/ja/hrtime-stopwatch.getelapsedticks.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function getElapsedTicks(): int {}

		/**
		 * Get elapsed time for all intervals
		 * <p>Get elapsed time for all the previously closed intervals.</p>
		 * @param int $unit <p>Time unit represented by a HRTime\Unit constant. Default is HRTime\Unit::SECOND.</p>
		 * @return float <p>Returns <code>float</code> indicating elapsed time.</p>
		 * @link http://php.net/manual/ja/hrtime-stopwatch.getelapsedtime.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function getElapsedTime(int $unit = NULL): float {}

		/**
		 * Timer frequency in ticks per second
		 * <p>Returns the timer frequency in ticks per second. This value is constant after the system start on almost any operating system.</p>
		 * @return int <p>Returns <code>integer</code> indicating the timer frequency.</p>
		 * @link http://php.net/manual/ja/hrtime-performancecounter.getfrequency.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public static function getFrequency(): int {}

		/**
		 * Get elapsed ticks for the last interval
		 * <p>Get elapsed ticks for the previously closed interval.</p>
		 * @return int <p>Returns <code>integer</code> indicating elapsed ticks.</p>
		 * @link http://php.net/manual/ja/hrtime-stopwatch.getlastelapsedticks.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function getLastElapsedTicks(): int {}

		/**
		 * Get elapsed time for the last interval
		 * <p>Get elapsed time for the previously closed interval.</p>
		 * @param int $unit <p>Time unit represented by a HRTime\Unit constant. Default is HRTime\Unit::SECOND.</p>
		 * @return float <p>Returns <code>float</code> indicating elapsed time.</p>
		 * @link http://php.net/manual/ja/hrtime-stopwatch.getlastelapsedtime.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function getLastElapsedTime(int $unit = NULL): float {}

		/**
		 * Current ticks from the system
		 * <p>Returns the ticks count.</p>
		 * @return int <p>Returns <code>integer</code> indicating the ticks count.</p>
		 * @link http://php.net/manual/ja/hrtime-performancecounter.getticks.php
		 * @since PECL hrtime >= 0.6.0
		 */
		public static function getTicks(): int {}

		/**
		 * Ticks elapsed since the given value
		 * <p>Returns the ticks count elapsed since the given start value.</p>
		 * @param int $start <p>Starting ticks value.</p>
		 * @return int <p>Returns <code>integer</code> indicating the ticks count.</p>
		 * @link http://php.net/manual/ja/hrtime-performancecounter.gettickssince.php
		 * @since PECL hrtime >= 0.6.0
		 */
		public static function getTicksSince(int $start): int {}

		/**
		 * Whether the measurement is running
		 * <p>Reveals whether the measurement was started.</p>
		 * @return bool <p>Returns <code>boolean</code> indicating whetehr the measurement is running.</p>
		 * @link http://php.net/manual/ja/hrtime-stopwatch.isrunning.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function isRunning(): bool {}

		/**
		 * Start time measurement
		 * <p>Starts the time measurement. It has no effect if the measurement was already started. The measurement will be continued if it was previously stopped.</p>
		 * @return void <p>Returns void.</p>
		 * @link http://php.net/manual/ja/hrtime-stopwatch.start.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function start(): void {}

		/**
		 * Stop time measurement
		 * <p>Stop the time measurement for the previously started interval.</p>
		 * @return void <p>Returns void.</p>
		 * @link http://php.net/manual/ja/hrtime-stopwatch.stop.php
		 * @since PECL hrtime >= 0.4.3
		 */
		public function stop(): void {}
	}

	/**
	 * @link http://php.net/manual/ja/class.hrtime-unit.php
	 * @since PECL hrtime >= 0.4.3
	 */
	class Unit {

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.hrtime-unit.php
		 */
		const SECOND = 0;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.hrtime-unit.php
		 */
		const MILLISECOND = 1;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.hrtime-unit.php
		 */
		const MICROSECOND = 2;

		/**
		 * @var integer
		 * @link http://php.net/manual/ja/class.hrtime-unit.php
		 */
		const NANOSECOND = 3;
	}

}
