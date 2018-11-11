<?php



/**
 * assertion が FALSE であるかどうかを調べる
 * <p>PHP 5 および PHP 7</p><p>PHP 7</p><p><b>assert()</b> は、指定した <code>assertion</code> を調べて、結果が <b><code>FALSE</code></b> の場合に適切な動作をします。</p><p><code>assertion</code> が文字列として指定された場合、 <b>assert()</b>によりPHPコードとして評価されます。 もし論理型の条件を <code>assertion</code> として渡した場合、 <code>assert_options()</code> 関数で定義したであろう アサーション関数への引数として表示されません。 その条件はハンドラ関数をコールする前に文字列に変換され、論理型の <b><code>FALSE</code></b> は空文字列に変換されます。</p><p>assertion は、デバッグ目的にのみ使用するべきです。 assertion を常に<b><code>TRUE</code></b>となる条件を調べる不具合診断に使用し、<b><code>TRUE</code></b> でない場合に何らかのプログラミングエラーを示したり、extension 関数または特定のシステム制限や機能といった、 特定の機能の存在をチェックするために使用することが可能です。</p><p>assersion は、入力パラメータのチェックのような通常の実行動作に 使用するべきではありません。一般的には、assertion のチェックを無効にしても そのコードが正常に動作しなければなりません。</p><p><b>assert()</b> の動作は、 <code>assert_options()</code> またはマニュアルの関数の部分 に記述された .ini の設定により設定することが可能です。</p><p>関数 <code>assert_options()</code> や <b><code>ASSERT_CALLBACK</code></b> 設定ディレクティブにより失敗した assertion を処理するコールバック関数を設定することが可能です。</p><p><b>assert()</b> のコールバックは、assertion が発生した場所に関する情報と共に assertion に渡されたコードを容易にキャプチャーできるため、 特に自動テストセットを構築する際に便利です。 この情報は他の手法でもキャプチャー可能ですが、assertion を使用することにより、より簡単かつ容易に行なうことが可能です!</p><p>コールバック関数は、3つの引数を受ける必要があります。最初の引数は、 assertionが失敗したファイルが含まれます。2番目の引数には、 assertionが失敗した行が含まれ、3番目の引数には失敗した式が含まれます (もしある場合のみ。1 または "two" のようなリテラルの値は、 この引数に渡されません)。 PHP 5.4.8 以降では、オプションの4番目の引数を指定できます。これを設定すると、 <code>description</code> を <b>assert()</b> に渡せるようになります。</p><p><b>assert()</b> は PHP 7 で言語構造となり、expectation の定義を満たすようになりました。 すなわち、開発環境やテスト環境では有効であるが、運用環境では除去されて、まったくコストのかからないアサーションということです。</p><p>下位互換性を保つために、<code>assert_options()</code> でこれらの挙動を制御することもできますが、 PHP 7 以降でしか使わないコードでは、新たに導入された二つの設定ディレクティブを使って <b>assert()</b> の挙動を制御しましょう。 そして <code>assert_options()</code> は使わないようにしましょう。</p>
 * @param mixed $assertion <p>アサーション。 PHP 5 では、評価対象の文字列か、あるいは <code>boolean</code> 値しか指定できませんでした。 PHP 7 ではそれ以外にも、値を返すあらゆる式を指定できます。 この式を実行した結果を用いて、アサーションに成功したか否かを判断します。</p>  <b>警告</b> <p>Using <code>string</code> as the <code>assertion</code> is <i>DEPRECATED</i> as of PHP 7.2.</p>
 * @param string $description <p>オプションの説明で、 <code>assertion</code> が失敗したときのメッセージにこれを含めます。</p>
 * @return bool <p>アサーションが false となった場合に <b><code>FALSE</code></b>、それ以外の場合に <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.assert.php
 * @see assert_options()
 * @since PHP 4, PHP 5, PHP 7
 */
function assert($assertion, string $description = NULL): bool {}

/**
 * 様々な assert フラグを設定/取得する
 * <p>種々の <code>assert()</code> 制御オプションを設定したり、 単に現在の設定を調べたりします。</p>
 * @param int $what <p></p> <b>assert オプション</b>   オプション INI 設定 デフォルト値 説明     ASSERT_ACTIVE assert.active 1  <code>assert()</code> による評価を有効にする   ASSERT_WARNING assert.warning 1 assersion に失敗した場合に PHP 警告を発生する   ASSERT_BAIL assert.bail 0 assersion に失敗した場合に実行を終了する   ASSERT_QUIET_EVAL assert.quiet_eval 0  assersion 式については error_reporting を無効にする    ASSERT_CALLBACK assert.callback (<b><code>NULL</code></b>) assertion に失敗した場合にコールされるコールバック
 * @param mixed $value <p>オプションに指定する新しい値。</p>
 * @return mixed <p>そのオプションの元の値、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.assert-options.php
 * @see assert()
 * @since PHP 4, PHP 5, PHP 7
 */
function assert_options(int $what, $value = NULL) {}

/**
 * 現在のプロセスのタイトルを返す
 * <p>現在のプロセスのタイトルを返します。これは <code>cli_set_process_title()</code> で設定したものです。 これは、<b>ps</b> や <b>top</b> で表示されるタイトルと必ずしも一致するとは限りません。OS に依存します。</p><p>この関数は、 CLI モードでしか使えません。</p>
 * @return string <p>現在のプロセスのタイトルを文字列で返します。エラー時には <b><code>NULL</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.cli-get-process-title.php
 * @see cli_set_process_title()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function cli_get_process_title(): string {}

/**
 * プロセスのタイトルを設定する
 * <p>プロセスのタイトルを設定します。これは <b>top</b> や <b>ps</b> といったツールで表示されます。 この関数は、 CLI モードでしか使えません。</p>
 * @param string $title <p>新しいタイトル。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.cli-set-process-title.php
 * @see cli_get_process_title(), setproctitle()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function cli_set_process_title(string $title): bool {}

/**
 * 実行時に PHP 拡張モジュールをロードする
 * <p><code>library</code> で指定された PHP 拡張モジュールを読み込みます。</p><p>その拡張モジュールが既に使用可能かどうかを調べるには、 <code>extension_loaded()</code> を使用します。 これは、組み込みのモジュールと (php.ini か、あるいは <b>dl()</b> を使用して) 動的に読み込むモジュールの両方に対応しています。</p><p>この関数は、PHP 5.3 以降で大半の SAPI からは削除されました。 また、PHP 7.0.0 では PHP-FPM からも削除されました。</p>
 * @param string $library <p>このパラメータに指定できるのは拡張モジュールの ファイル名<i>だけ</i>であり、それはプラットフォームに依存します。 例えば、Unix プラットフォームでは sockets 拡張モジュール (共有モジュールとしてコンパイルされていれば。デフォルトでは有りません!) は sockets.so と呼ばれていますし、一方 Windows プラットフォームでは php_sockets.dll と呼ばれます。</p> <p>拡張モジュールを読み込むディレクトリは、プラットフォームによって異なります。</p> <p>Windows - php.ini に明記されていない場合、デフォルトでは 拡張モジュールは、C:\php5\ からロードされます。</p> <p>Unix - php.ini に明記されていない場合、デフォルトでは 以下に依存します。</p><ul> <li>  PHP をビルドする際に <i>--enable-debug</i> を指定しているか否か  </li> <li>  PHP をビルドする際に (実験段階の) ZTS (Zend Thread Safety) サポートを有効にしているか否か  </li> <li>  現在の <i>ZEND_MODULE_API_NO</i>(Zend 内部モジュール API 番号。基本的にはメジャーモジュール API の変更が発生した日時。 例:<i>20010901</i>)  </li> </ul> 上記を考慮して、ディレクトリのデフォルトは <i>&lt;install-dir&gt;/lib/php/extensions/ &lt;debug-or-not&gt;-&lt;zts-or-not&gt;-ZEND_MODULE_API_NO</i> となる。 例: /usr/local/php/lib/php/extensions/debug-non-zts-20010901 または /usr/local/php/lib/php/extensions/no-debug-zts-20010901.
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。 拡張モジュールのロード機能が無効だったり、あるいは 無効化されている(enable_dl でオフにされているか または php.ini で セーフモード が有効になっている)場合は、 <b><code>E_ERROR</code></b> を発行して実行は停止されます。 指定されたライブラリをロードできず <b>dl()</b> が 失敗した場合、<b><code>FALSE</code></b> に加えて <b><code>E_WARNING</code></b> メッセージが 発行されます。</p>
 * @link http://php.net/manual/ja/function.dl.php
 * @see extension_loaded()
 * @since PHP 4, PHP 5, PHP 7
 */
function dl(string $library): bool {}

/**
 * ある拡張機能がロードされているかどうかを調べる
 * <p>拡張モジュールがロードされているかどうかを調べます。</p>
 * @param string $name <p>拡張モジュールの名前。大文字小文字を区別します。</p> <p><code>phpinfo()</code>を使って種々の拡張モジュールの 名前を見ることができます。PHP の <i>CGI</i>または<i>CLI</i>バージョン を使っている場合には <b>-m</b> スイッチで、 使用できる全ての拡張モジュールのリストを得ることができます:</p> <pre> $ php -m [PHP Modules] xml tokenizer standard sockets session posix pcre overload mysql mbstring ctype [Zend Modules] </pre>
 * @return bool <p><code>name</code> で指定する拡張機能がロードされている場合に <b><code>TRUE</code></b> を返します。さもなければ <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.extension-loaded.php
 * @see get_loaded_extensions(), get_extension_funcs(), phpinfo(), dl(), function_exists()
 * @since PHP 4, PHP 5, PHP 7
 */
function extension_loaded(string $name): bool {}

/**
 * すべての既存ガベージサイクルを強制的に収集する
 * <p>すべての既存ガベージサイクルを強制的に収集します。</p>
 * @return int <p>収集したサイクルの数を返します。</p>
 * @link http://php.net/manual/ja/function.gc-collect-cycles.php
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function gc_collect_cycles(): int {}

/**
 * 循環参照コレクタを無効にする
 * <p>zend.enable_gc を <i>0</i> に設定して、循環参照コレクタを無効にします。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.gc-disable.php
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function gc_disable(): void {}

/**
 * 循環参照コレクタを有効にする
 * <p>zend.enable_gc を <i>1</i> に設定して、循環参照コレクタを有効にします。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.gc-enable.php
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function gc_enable(): void {}

/**
 * 循環参照コレクタの状態を返す
 * <p>循環参照コレクタの状態を返します。</p>
 * @return bool <p>ガベージコレクタが有効な場合に <b><code>TRUE</code></b>、そうでない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.gc-enabled.php
 * @since PHP 5 >= 5.3.0, PHP 7
 */
function gc_enabled(): bool {}

/**
 * Zend Engine のメモリーマネージャによって使用されたメモリーを再利用する
 * <p>Zend Engine のメモリーマネージャによって使用されたメモリーを再利用します。</p>
 * @return int <p>解放されたバイト数を返します。</p>
 * @link http://php.net/manual/ja/function.gc-mem-caches.php
 * @since PHP 7
 */
function gc_mem_caches(): int {}

/**
 * PHP 設定オプションの値を取得する
 * <p>PHP の設定オプション <code>option</code> の値を取得します。</p><p>この関数は、 PHP がコンパイルされた際にセットされた設定情報や Apache の設定ファイルから読んだ設定情報は返しません。</p><p>システムが 設定ファイル を使用しているかどうかを確認するには、cfg_file_path の設定値を取得してみてください。 この値が利用可能なら、設定ファイルが使用されています。</p>
 * @param string $option <p>設定オプションの名前。</p>
 * @return mixed <p><code>option</code> で指定された PHP 設定オプションの現在の値を返し、 エラーの場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.get-cfg-var.php
 * @see ini_get(), ini_get_all()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_cfg_var(string $option) {}

/**
 * 現在の PHP スクリプトの所有者の名前を取得する
 * <p>現在の PHP スクリプトの所有者の名前を返します。</p>
 * @return string <p>ユーザー名を表す文字列。</p>
 * @link http://php.net/manual/ja/function.get-current-user.php
 * @see getmyuid(), getmygid(), getmypid(), getmyinode(), getlastmod()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_current_user(): string {}

/**
 * すべての定数の名前とその値を連想配列として返す
 * <p>現在定義されている全ての定数の名前と値を返します。返される値には、 拡張モジュールにより作成された定数や <code>define()</code> 関数で作成された定数も含まれます。</p>
 * @param bool $categorize <p>これを渡すと、この関数は多次元の配列を返すようになります。 最初の次元のキーがカテゴリとなり、 そのカテゴリ内の定数とその値が下位レベルに格納されます。</p>  <code> &lt;&#63;php<br>define("MY_CONSTANT", 1);<br>print_r(get_defined_constants(true));<br>&#63;&gt;  </code>  <p>上の例の出力は、 たとえば以下のようになります。</p>  <pre> Array ( [Core] =&gt; Array ( [E_ERROR] =&gt; 1 [E_WARNING] =&gt; 2 [E_PARSE] =&gt; 4 [E_NOTICE] =&gt; 8 [E_CORE_ERROR] =&gt; 16 [E_CORE_WARNING] =&gt; 32 [E_COMPILE_ERROR] =&gt; 64 [E_COMPILE_WARNING] =&gt; 128 [E_USER_ERROR] =&gt; 256 [E_USER_WARNING] =&gt; 512 [E_USER_NOTICE] =&gt; 1024 [E_ALL] =&gt; 2047 [TRUE] =&gt; 1 ) [pcre] =&gt; Array ( [PREG_PATTERN_ORDER] =&gt; 1 [PREG_SET_ORDER] =&gt; 2 [PREG_OFFSET_CAPTURE] =&gt; 256 [PREG_SPLIT_NO_EMPTY] =&gt; 1 [PREG_SPLIT_DELIM_CAPTURE] =&gt; 2 [PREG_SPLIT_OFFSET_CAPTURE] =&gt; 4 [PREG_GREP_INVERT] =&gt; 1 ) [user] =&gt; Array ( [MY_CONSTANT] =&gt; 1 ) ) </pre>
 * @return array <p>定数名 =&gt; 定数値 の配列の配列を返します。 オプションで、その定数を定義している拡張モジュール名ごとにグループ化することもできます。</p>
 * @link http://php.net/manual/ja/function.get-defined-constants.php
 * @see defined(), get_loaded_extensions(), get_defined_functions(), get_defined_vars()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function get_defined_constants(bool $categorize = FALSE): array {}

/**
 * あるモジュールの関数名を配列として返す
 * <p>この関数は、<code>module_name</code> で示したモジュールで定義された全ての関数の名前を返します。</p>
 * @param string $module_name <p>モジュール名。</p>  <p><b>注意</b>:</p> <p>このパラメータは <i>小文字</i> でなければなりません。</p>
 * @return array <p>すべての関数を含む配列を返します。 <code>module_name</code> が拡張モジュールでない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.get-extension-funcs.php
 * @see get_loaded_extensions()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_extension_funcs(string $module_name): array {}

/**
 * 現在の include_path 設定オプションを取得する
 * <p>現在の include_path 設定オプションを取得します。</p>
 * @return string <p>パスを表す文字列を返します。</p>
 * @link http://php.net/manual/ja/function.get-include-path.php
 * @see ini_get(), restore_include_path(), set_include_path(), include
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function get_include_path(): string {}

/**
 * include または require で読み込まれたファイルの名前を配列として返す
 * <p>この関数は、 <code>include</code>、<code>include_once</code>、 <code>require</code> あるいは <code>require_once</code> によりスクリプトにロードされたすべてのファイルの名前を取得します。</p>
 * @return array <p>すべてのファイル名を含む配列を返します。</p><p>最初にコールされたスクリプトは "include されたファイル" という扱いに なります。そのため、 <code>include</code> やその仲間たちにより 読み込まれたファイルの一覧に含めて表示されます。</p><p>複数回読み込まれているファイルも、 返される配列には一度しかあらわれません。</p>
 * @link http://php.net/manual/ja/function.get-included-files.php
 * @see include, include_once, require, require_once, get_required_files()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_included_files(): array {}

/**
 * コンパイル/ロードされている全てのモジュールの名前を配列として返す
 * <p>この関数は、PHPインタプリタにコンパイル、 ロードされている全てのモジュールの名前を返します。</p>
 * @param bool $zend_extensions <p>Zend 拡張モジュールのみを返します。指定しない場合は、 mysqli のような通常の拡張モジュールを返します。デフォルトは <b><code>FALSE</code></b> (通常の拡張モジュールを返す) です。</p>
 * @return array <p>モジュール名の配列を返します。</p>
 * @link http://php.net/manual/ja/function.get-loaded-extensions.php
 * @see get_extension_funcs(), extension_loaded(), dl(), phpinfo()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_loaded_extensions(bool $zend_extensions = FALSE): array {}

/**
 * magic_quotes_gpc の現在の設定を得る
 * <p>magic_quotes_gpc の現在の設定を返します。</p><p>実行時に magic_quotes_gpc をセットしようとしても反映されないことに留意してください。</p><p>magic_quotes についての詳細な情報は セキュリティの欄 を参照してください。</p>
 * @return bool <p>magic_quotes_gpc がオフの場合に 0、そうでない場合に 1 を返します。 PHP 5.4.0 以降は、常に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.get-magic-quotes-gpc.php
 * @see addslashes(), stripslashes(), get_magic_quotes_runtime(), ini_get()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_magic_quotes_gpc(): bool {}

/**
 * magic_quotes_runtime の現在アクティブな設定値を取得する
 * <p>magic_quotes_runtime の現在アクティブな値を返します。</p>
 * @return bool <p>magic_quotes_runtime がオフの場合に 0、そうでない場合に 1 を返します。 PHP 5.4.0 以降は、常に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.get-magic-quotes-runtime.php
 * @see get_magic_quotes_gpc(), set_magic_quotes_runtime()
 * @since PHP 4, PHP 5, PHP 7
 */
function get_magic_quotes_runtime(): bool {}

/**
 * get_included_files() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>get_included_files()</code>.</p>
 * @return array
 * @link http://php.net/manual/ja/function.get-required-files.php
 * @since PHP 4, PHP 5, PHP 7
 */
function get_required_files(): array {}

/**
 * アクティブなリソースを返す
 * <p>現在アクティブなすべてのリソースの配列を返します。 オプションでリソース型によってフィルタリングされます。</p>
 * @param string $type <p>定義された場合、<b>get_resources()</b> は、指定された型のリソースのみを返すようになります。 リソース型の一覧が使用できます。</p> <p><code>string</code> <i>Unknown</i> が型として指定された場合、 不明な型のリソースのみが返されます。</p> <p>省略した場合、すべてのリソースが返されます。</p>
 * @return array <p>現在アクティブなリソースの <code>array</code> を返します。 リソース番号でインデックス付けされます。</p>
 * @link http://php.net/manual/ja/function.get-resources.php
 * @see get_loaded_extensions(), get_defined_constants(), get_defined_functions(), get_defined_vars()
 * @since PHP 7
 */
function get_resources(string $type = NULL): array {}

/**
 * 環境変数の値を取得する
 * <p>環境変数の値を取得します。</p><p><code>phpinfo()</code> を使えば、すべての環境変数の一覧を見ることができます。 これらの変数の多くは、 » RFC 3875 の section 4.1, "Request Meta-Variables" に挙げられているものです。</p>
 * @param string $varname <p>変数の名前。</p>
 * @param bool $local_only <p>true に設定すると、(OS または putenv により設定された) ローカルの環境変数のみを返します。</p>
 * @return string <p><code>varname</code> が示す環境変数の値を返し、 環境変数 <code>varname</code> が存在しない場合は<b><code>FALSE</code></b>を返します。 <code>varname</code> が省略された場合、 すべての環境変数は連想配列として返されます。</p>
 * @link http://php.net/manual/ja/function.getenv.php
 * @see putenv(), apache_getenv()
 * @since PHP 4, PHP 5, PHP 7
 */
function getenv(string $varname, bool $local_only = FALSE): string {}

/**
 * 最終更新時刻を取得する
 * <p>実行中のスクリプト本体の最終更新時刻を取得します。</p><p>別のファイルの最終更新時刻が知りたい場合は、 <code>filemtime()</code> を使用してください。</p>
 * @return int <p>現在のページの最終更新時刻を返します。 この値は Unix のタイムスタンプで、そのまま <b>date ()</b>に渡す事ができます。エラーの場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.getlastmod.php
 * @see date(), getmyuid(), getmygid(), get_current_user(), getmyinode(), getmypid(), filemtime()
 * @since PHP 4, PHP 5, PHP 7
 */
function getlastmod(): int {}

/**
 * PHP スクリプトの所有者の GID を得る
 * <p>現在のスクリプトのグループ ID を取得します。</p>
 * @return int <p>現在のスクリプトのグループ ID を返します。またはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.getmygid.php
 * @see getmyuid(), getmypid(), get_current_user(), getmyinode(), getlastmod()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function getmygid(): int {}

/**
 * 現在のスクリプトの inode を取得する
 * <p>現在のスクリプトの inode を取得します。</p>
 * @return int <p>現在のスクリプトの inode を表す整数値、あるいはエラーの場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.getmyinode.php
 * @see getmygid(), getmyuid(), getmypid(), get_current_user(), getlastmod()
 * @since PHP 4, PHP 5, PHP 7
 */
function getmyinode(): int {}

/**
 * PHP のプロセス ID を取得する
 * <p>現在の PHP プロセスの ID を取得します。</p>
 * @return int <p>現在の PHP のプロセス ID を返し、エラーの場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.getmypid.php
 * @see getmygid(), getmyuid(), get_current_user(), getmyinode(), getlastmod()
 * @since PHP 4, PHP 5, PHP 7
 */
function getmypid(): int {}

/**
 * PHP スクリプト所有者のユーザー ID を取得する
 * <p>現在のスクリプトのユーザー ID を取得します。</p>
 * @return int <p>現在のスクリプトのユーザー ID を返し、エラーの場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.getmyuid.php
 * @see getmygid(), getmypid(), get_current_user(), getmyinode(), getlastmod()
 * @since PHP 4, PHP 5, PHP 7
 */
function getmyuid(): int {}

/**
 * コマンドライン引数のリストからオプションを取得する
 * <p>スクリプトに渡されたオプションをパースします。</p>
 * @param string $options この文字列の各文字をオプション文字として使用し、 スクリプトにハイフンひとつ (<i>-</i>) で始まるオプションとして渡された内容とマッチさせます。   たとえば、オプション文字列 <i>"x"</i> は <i>-x</i> というオプションを認識します。   a-z、A-Z および 0-9 のみを認識します。
 * @param array $longopts オプションの配列。 この配列の各要素をオプション文字列として使用し、 スクリプトにハイフンふたつ (<i>--</i>) で始まるオプションとして渡された内容とマッチさせます。   たとえば、longopts の要素 <i>"opt"</i> は <i>--opt</i> というオプションを認識します。
 * @param int $optind If the <code>optind</code> parameter is present, then the index where argument parsing stopped will be written to this variable.
 * @return array <p>この関数はオプション/引数のペアを連想配列で返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p> <p><b>注意</b>:</p> <p>オプション以外のものが見つかった時点でオプションのパースは終了し、 それ以降の内容は破棄されます。</p>
 * @link http://php.net/manual/ja/function.getopt.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function getopt(string $options, array $longopts = NULL, int &$optind = NULL): array {}

/**
 * 現在のリソース使用状況を取得する
 * <p>この関数は、<b>getrusage(2)</b> へのインターフェイスです。 システムコールから返されたデータを含む連想配列を返します。</p>
 * @param int $who <p><code>who</code> が 1 の場合、getrusage は <b><code>RUSAGE_CHILDREN</code></b> を付けてコールされます。</p>
 * @return array <p>システムコールから返されたデータを含む連想配列を返します。 すべてのエントリは、記述されたフィールド名を用いてアクセス可能です。</p>
 * @link http://php.net/manual/ja/function.getrusage.php
 * @since PHP 4, PHP 5, PHP 7
 */
function getrusage(int $who = 0): array {}

/**
 * ini_set() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>ini_set()</code>.</p>
 * @param string $varname <p></p> <p>全てのオプションが <b>ini_set()</b> を使用して変更することが 可能なわけではありません。有効なオプションの完全な一覧は 付録 を参照ください。</p>
 * @param string $newvalue <p>オプションの新しい値。</p>
 * @return string
 * @link http://php.net/manual/ja/function.ini-alter.php
 * @since PHP 4, PHP 5, PHP 7
 */
function ini_alter(string $varname, string $newvalue): string {}

/**
 * 設定オプションの値を得る
 * <p>成功時に、設定オプションの値を返します。</p>
 * @param string $varname <p>設定オプションの名前。</p>
 * @return string <p>成功した場合に設定オプションの値、 <i>null</i> 値の場合は空の文字列を返します。 その設定オプションが存在しない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ini-get.php
 * @see get_cfg_var(), ini_get_all(), ini_restore(), ini_set()
 * @since PHP 4, PHP 5, PHP 7
 */
function ini_get(string $varname): string {}

/**
 * すべての設定オプションを得る
 * <p>すべての登録済み設定オプションを返します。</p>
 * @param string $extension <p>オプションで指定する拡張モジュール名。指定した場合は、 その拡張モジュールに関するオプションのみを返します。</p>
 * @param bool $details <p>詳細な設定を取得するか、あるいは各設定の現在の値のみを取得するか。 デフォルトは <b><code>TRUE</code></b> (詳細情報を取得する) です。</p>
 * @return array <p>ディレクティブ名をキーとする連想配列を返します。</p><p><code>details</code> が <b><code>TRUE</code></b> (デフォルト) の場合、 配列の値は、 <i>global_value</i> (php.iniで設定されている)、 <i>local_value</i> (おそらく<code>ini_set()</code>または .htaccessでセットされている)、<i>access</i> (アクセスレベル) を含む配列となります。</p><p><code>details</code> が <b><code>FALSE</code></b> の場合、 配列の値はそのオプションの現在の値となります。</p><p>アクセスレベルの意味についてはマニュアルを参照ください。</p> <p><b>注意</b>:</p> <p>ひとつのディレクティブに複数のアクセスレベルを設定することができます。 <i>access</i> がビットマスク値となっているのはそのためです。</p>
 * @link http://php.net/manual/ja/function.ini-get-all.php
 * @see ini_get(), ini_restore(), ini_set(), get_loaded_extensions(), phpinfo()
 * @since PHP 4 >= 4.2.0, PHP 5, PHP 7
 */
function ini_get_all(string $extension = NULL, bool $details = TRUE): array {}

/**
 * 設定オプションの値を元に戻す
 * <p>指定した設定オプションを元の値に戻します。</p>
 * @param string $varname <p>設定オプションの名前。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.ini-restore.php
 * @see ini_get(), ini_get_all(), ini_set()
 * @since PHP 4, PHP 5, PHP 7
 */
function ini_restore(string $varname): void {}

/**
 * 設定オプションの値を設定する
 * <p>指定した設定オプションの値を設定します。 設定オプションは、スクリプトの実行中は新しい値を保持し、 スクリプト終了時に元の値へ戻されます。</p>
 * @param string $varname <p></p> <p>全てのオプションが <b>ini_set()</b> を使用して変更することが 可能なわけではありません。有効なオプションの完全な一覧は 付録 を参照ください。</p>
 * @param string $newvalue <p>オプションの新しい値。</p>
 * @return string <p>成功した場合に元の値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.ini-set.php
 * @see get_cfg_var(), ini_get(), ini_get_all(), ini_restore()
 * @since PHP 4, PHP 5, PHP 7
 */
function ini_set(string $varname, string $newvalue): string {}

/**
 * set_magic_quotes_runtime() のエイリアス
 * <p>この関数は次の関数のエイリアスです。 <code>set_magic_quotes_runtime()</code></p>
 * @param bool $new_setting <p><b><code>FALSE</code></b> はオフ、<b><code>TRUE</code></b> はオンを表します。</p>
 * @return bool
 * @link http://php.net/manual/ja/function.magic-quotes-runtime.php
 * @since PHP 4, PHP 5
 */
function magic_quotes_runtime(bool $new_setting): bool {}

/**
 * PHP によって割り当てられたメモリの最大値を返す
 * <p>PHP スクリプトに割り当てられたメモリの最大値を、バイト単位で返します。</p>
 * @param bool $real_usage <p>これを <b><code>TRUE</code></b> に設定すると、システムが割り当てた実際のメモリの大きさを取得します。 省略したり <b><code>FALSE</code></b> を設定したりすると、 <i>emalloc()</i> が使用するメモリのみを報告します。</p>
 * @return int <p>メモリの最大値をバイト数で返します。</p>
 * @link http://php.net/manual/ja/function.memory-get-peak-usage.php
 * @see memory_get_usage()
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function memory_get_peak_usage(bool $real_usage = FALSE): int {}

/**
 * PHP に割り当てられたメモリの量を返す
 * <p>現在の PHP スクリプトに割り当てられたメモリの量をバイト単位で返します。</p>
 * @param bool $real_usage <p>これを <b><code>TRUE</code></b> に設定すると、システムが割り当てた実際のメモリの大きさ (未使用のページも含むもの) を取得します。 省略したり <b><code>FALSE</code></b> を設定したりすると、使用したモリのみを報告します。</p>
 * @return int <p>メモリの量をバイト単位で返します。</p>
 * @link http://php.net/manual/ja/function.memory-get-usage.php
 * @see memory_get_peak_usage()
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 */
function memory_get_usage(bool $real_usage = FALSE): int {}

/**
 * 読み込まれた php.ini ファイルのパスを取得する
 * <p>php.ini ファイルが読み込まれているかどうかを調べ、 そのパスを取得します。</p>
 * @return string <p>読み込まれている php.ini のパス、 あるいは読み込まれていない場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.php-ini-loaded-file.php
 * @see php_ini_scanned_files(), phpinfo()
 * @since PHP 5 >= 5.2.4, PHP 7
 */
function php_ini_loaded_file(): string {}

/**
 * 追加の ini ディレクトリにある .ini ファイルのリストを取得する
 * <p><b>php_ini_scanned_files()</b>は、php.iniをパースした 後で、設定ファイルのリストをカンマ区切りで返します。 ファイルを探すディレクトリは、コンパイル時のオプションで指定します。 また、実行時に環境変数で指定することもできます。詳細は インストールガイド を参照ください。</p><p>戻り値のファイル名は、フルパス形式となります。</p>
 * @return string <p>成功すると、.iniファイルをカンマ区切りにした文字列が返されます。 <b>--with-config-file-scan-dir</b> がセットされておらず、かつ環境変数 PHP_INI_SCAN_DIR も設定されていない場合は <b><code>FALSE</code></b>を返します。指定されたディレクトリが空であれば、 空文字列が返されます。ファイルが認識できないものであれば、 そのファイルは文字列には含まれますが同時にPHPがエラーを起こします。 このエラーはコンパイルの時と、<b>php_ini_scanned_files()</b> 関数を使用したときの両方で発生します。</p>
 * @link http://php.net/manual/ja/function.php-ini-scanned-files.php
 * @see ini_set(), phpinfo(), php_ini_loaded_file()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function php_ini_scanned_files(): string {}

/**
 * ロゴの guid を取得する
 * <p>ビルトインされている画像を使って PHP ロゴを表示する際に使用できる ID を返します。 ロゴが表示されるのは、expose_php が On の場合のみです。</p><p>この関数は <i>非推奨</i> であり、PHP 5.5.0 で <i>削除</i> されます。</p>
 * @return string <p><i>PHPE9568F34-D428-11d2-A769-00AA001ACF42</i> を返します。</p>
 * @link http://php.net/manual/ja/function.php-logo-guid.php
 * @see phpinfo(), phpversion(), phpcredits(), zend_logo_guid()
 * @since PHP 4, PHP 5 < 5.5.0
 */
function php_logo_guid(): string {}

/**
 * ウェブサーバーと PHP の間のインターフェイスの型を返す
 * <p>PHP が使用しているインターフェイス (サーバー API、SAPI) の型を小文字の文字列で返します。たとえば、CLI 版の PHP ではこの文字列は "cli" となります。Apache と組み合わせて使用している場合は、 実際に使用している SAPI によってさまざまな結果となります。 返されうる値の一覧を以下にあげます。</p>
 * @return string <p>インターフェイスの型を小文字の文字列で返します。</p><p>これがすべてではありませんが、以下のような値が返されます。 <i>aolserver</i>, <i>apache</i>, <i>apache2filter</i>, <i>apache2handler</i>, <i>caudium</i>, <i>cgi</i> (PHP 5.3 まで), <i>cgi-fcgi</i>, <i>cli</i>, <i>cli-server</i>, <i>continuity</i>, <i>embed</i>, <i>fpm-fcgi</i>, <i>isapi</i>, <i>litespeed</i>, <i>milter</i>, <i>nsapi</i>, <i>phttpd</i>, <i>pi3web</i>, <i>roxen</i>, <i>thttpd</i>, <i>tux</i> そして <i>webjames</i></p>
 * @link http://php.net/manual/ja/function.php-sapi-name.php
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function php_sapi_name(): string {}

/**
 * PHP が稼動しているオペレーティングシステムに関する情報を返す
 * <p><b>php_uname()</b> は、PHP が稼動しているオペレーティング システムに関する説明を返します。これは、<code>phpinfo()</code> の出力の先頭に出てくるものと同じです。 単に OS の名前を取得したい場合には <b><code>PHP_OS</code></b> 定数の利用を考えてください。ただし、 この定数が返すのは PHP が<i>構築された</i> OS の 情報であることに注意しましょう。</p><p>古い UNIX プラットフォームの中には現在の OS 情報を取得できないものもあります。 そんな場合は、PHP をビルドした OS の情報を表示します。 これがおこるのは、 uname() ライブラリコールが存在しないか機能していない場合のみです。</p>
 * @param string $mode <p><code>mode</code> は、どのような情報を返すのかを一文字で指定します:</p><ul> <li>  <i>'a'</i>: デフォルトです。すべてのモードを <i>"s n r v m"</i> の順で返します。  </li> <li>  <i>'s'</i>: オペレーティングシステム名。 例: <i>FreeBSD</i>  </li> <li>  <i>'n'</i>: ホスト名。 例: <i>localhost.example.com</i>  </li> <li>  <i>'r'</i>: リリース名。 例: <i>5.1.2-RELEASE</i>  </li> <li>  <i>'v'</i>: バージョン情報。 オペレーティングシステムによって大きく変わります。  </li> <li>  <i>'m'</i>: マシン型。例: <i>i386</i>  </li> </ul>
 * @return string <p>説明を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.php-uname.php
 * @see phpversion(), php_sapi_name(), phpinfo()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function php_uname(string $mode = "a"): string {}

/**
 * PHP に関するクレジットを出力する
 * <p>この関数は、PHP 開発者、モジュール等のリストを有するクレジットを出力します。 ページに情報を挿入するために、適切な HTML コードが生成されます。</p>
 * @param int $flag <p>独自のクレジットページを出力したい場合に <code>flag</code> を利用するとよいでしょう。</p> <p></p> <b>定義済みの <b>phpcredits()</b> フラグ</b>   名前 説明     CREDITS_ALL  すべてのクレジットを含めます。 <b><code>CREDITS_DOCS</code></b> + <b><code>CREDITS_GENERAL</code></b> + <b><code>CREDITS_GROUP</code></b> + <b><code>CREDITS_MODULES</code></b> + <b><code>CREDITS_FULLPAGE</code></b> と同等です。これは、適切なタグを含んだ それ単体で成立する HTML ページを生成します。    CREDITS_DOCS ドキュメントチームのクレジット   CREDITS_FULLPAGE  通常、他のフラグと組み合わせて使用します。 他のフラグで指定した情報を含む、それ単体で完全に独立した HTML ページを出力することを指定します。    CREDITS_GENERAL  一般的なクレジット: 言語の設計およびコンセプト、PHP 作者、SAPIモジュール    CREDITS_GROUP コア開発者のリスト   CREDITS_MODULES PHPの拡張モジュール、およびその作者のリスト   CREDITS_SAPI PHP のサーバー API モジュールとその作者のリスト
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.phpcredits.php
 * @see phpversion(), php_logo_guid(), phpinfo()
 * @since PHP 4, PHP 5, PHP 7
 */
function phpcredits(int $flag = CREDITS_ALL): bool {}

/**
 * PHP の設定情報を出力する
 * <p>現在の PHP の状態に関する、多くの情報を出力します。出力される情報には、 PHP コンパイルオプションと拡張機能、PHP のバージョン、 サーバー情報と環境（モジュールとしてコンパイルされた場合）、 PHP の環境、OS バージョン情報、パス、構成オプションのマスター およびローカルの値、HTTP ヘッダ、PHP License などがあります。</p><p>システムの設定はそれぞれ違うため、実行時設定 や 利用できる 定義済みの変数 を調べるために <b>phpinfo()</b> がよく使われます。</p><p>また、<b>phpinfo()</b> には EGPCS (Environment, GET, POST, Cookie, Server) の情報が含まれているため、デバッグツールとしても便利です。</p>
 * @param int $what <p>以下にある<i>constants</i>ビット値をひとつまたは 複数個を加算して、オプションの<code>what</code>引数に 渡すことによって出力をカスタマイズできます。 それぞれの定数やビット値をor演算子 で結んで渡すこともできます。</p> <p></p> <b><b>phpinfo()</b> のオプション</b>   名前(定数) 値 説明     INFO_GENERAL 1  configure オプション、php.ini の場所、ビルド日時、 Web サーバー、オペレーティングシステム等。    INFO_CREDITS 2  PHP クレジット。<code>phpcredits()</code> も参照ください。    INFO_CONFIGURATION 4  ローカルおよびマスタの、現在の PHP ディレクティブの値。 <code>ini_get()</code> も参照ください。    INFO_MODULES 8  ロードされているモジュールと、それぞれの設定。 <code>get_loaded_extensions()</code> も参照ください。    INFO_ENVIRONMENT 16  $_ENV で取得できる環境変数の情報。    INFO_VARIABLES 32  EGPCS（環境変数・GET・POST・クッキー・サーバー変数）から すべての  定義済みの変数を表示します。    INFO_LICENSE 64  PHP ライセンス情報。» ライセンス FAQ も参照ください。    INFO_ALL -1  上記のすべてを表示します。
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.phpinfo.php
 * @see phpversion(), phpcredits(), php_logo_guid(), ini_get(), ini_set(), get_loaded_extensions()
 * @since PHP 4, PHP 5, PHP 7
 */
function phpinfo(int $what = INFO_ALL): bool {}

/**
 * 現在の PHP バージョンを取得する
 * <p>現在動作中の PHP パーサあるいは拡張モジュールのバージョンを表す文字列を返します。</p>
 * @param string $extension <p>オプションで指定する拡張モジュール名。</p>
 * @return string <p>オプションの <code>extension</code> パラメータが指定されている場合、<b>phpversion()</b> はその拡張モジュールのバージョンを返します。 関連するバージョン情報が存在しない場合、 あるいは拡張モジュールが有効でない場合は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.phpversion.php
 * @see version_compare(), phpinfo(), phpcredits(), php_logo_guid(), zend_version()
 * @since PHP 4, PHP 5, PHP 7
 */
function phpversion(string $extension = NULL): string {}

/**
 * 環境変数の値を設定する
 * <p>サーバーの環境変数に <code>setting</code> を追加します。 この環境変数は、カレントのリクエストを実行している間のみ存在します。 リクエスト終了時、環境変数は元の状態に戻されます。</p><p>ある種の環境変数が変更されることは潜在的なセキュリティリスクとなる 可能性があります。<i>safe_mode_allowed_env_vars</i> ディレクティブには接頭辞のカンマ区切りのリストが含まれます。セーフ モードでは、ユーザーはこのディレクティブで指定された接頭辞で始まる名前 を有する環境変数のみを変更可能となります。 デフォルトでは、ユーザーは<i>PHP_</i> で始まる環境変数 (例えば<i>PHP_FOO=BAR</i>)のみを変更可能です。注意:この ディレクティブが空の場合、PHPはユーザーに全ての環境変数を修正できる許可 を与えてしまいます!</p><p><i>safe_mode_protected_env_vars</i> ディレクティブには、 カンマ区切りの環境変数のリストが含まれます。ユーザーは、この環境変数 を<b>putenv()</b>により変更することができません。これら の変数は、<i>safe_mode_allowed_env_vars</i>が変更するこ とを許可している場合でも保護されます。</p>
 * @param string $setting <p><i>"FOO=BAR"</i> 形式の設定。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.putenv.php
 * @see getenv(), apache_setenv()
 * @since PHP 4, PHP 5, PHP 7
 */
function putenv(string $setting): bool {}

/**
 * include_path 設定オプションの値を元に戻す
 * <p>include_path 設定値を php.ini でセットされたオリジナルの設定に戻します。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.restore-include-path.php
 * @see ini_restore(), get_include_path(), set_include_path(), include
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function restore_include_path(): void {}

/**
 * include_path 設定オプションをセットする
 * <p>include_path 設定オプションの値を、このスクリプト内でだけ変更します。</p>
 * @param string $new_include_path <p>include_path の新しい値。</p>
 * @return string <p>成功した場合に元の include_path の値、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.set-include-path.php
 * @see ini_set(), get_include_path(), restore_include_path(), include
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function set_include_path(string $new_include_path): string {}

/**
 * magic_quotes_runtime の現在アクティブな設定をセットする
 * <p>magic_quotes_runtime の現在アクティブな設定をセットします。</p>
 * @param bool $new_setting <p><b><code>FALSE</code></b> はオフ、<b><code>TRUE</code></b> はオンを表します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.set-magic-quotes-runtime.php
 * @see get_magic_quotes_gpc(), get_magic_quotes_runtime()
 * @since PHP 4, PHP 5
 */
function set_magic_quotes_runtime(bool $new_setting): bool {}

/**
 * 実行時間の最大値を制限する
 * <p>スクリプトが実行可能な秒数を設定します。 この制限にかかるとスクリプトは致命的エラーを返します。 デフォルトの制限値は 30 秒です。 なお、php.iniで<i>max_execution_time</i>の 値が定義されている場合にはそれを用います。</p><p>この関数がコールされた場合、 タイムアウトカウンタをゼロから再スタートします。 言いかえると、タイムアウトがデフォルトの 30 秒で スクリプト実行までに 25 秒かかる場合に、 <i>set_time_limit(20)</i> を実行すると、スクリプトは、 タイムアウトまでに全体で 45秒 の間実行されます。</p>
 * @param int $seconds <p>最大実行時間を表す秒数。ゼロを設定すると、時間制限を行いません。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b>、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.set-time-limit.php
 * @since PHP 4, PHP 5, PHP 7
 */
function set_time_limit(int $seconds): bool {}

/**
 * 一時ファイル用に使用されるディレクトリのパスを返す
 * <p>PHP が一時ファイルを保存するデフォルトのディレクトリのパスを返します。</p>
 * @return string <p>一時ディレクトリのパスを返します。</p>
 * @link http://php.net/manual/ja/function.sys-get-temp-dir.php
 * @see tmpfile(), tempnam()
 * @since PHP 5 >= 5.2.1, PHP 7
 */
function sys_get_temp_dir(): string {}

/**
 * ふたつの "PHP 標準" バージョン番号文字列を比較する
 * <p><b>version_compare()</b>は、ふたつの "PHP 標準" バージョン 番号文字列を比較します。</p><p>この関数はまず、バージョン文字列の <i>_</i>, <i>-</i>, <i>+</i> をドット <i>.</i> で置き換えます。 さらに、数値でない部分の前後にドット <i>.</i> を追加します。 例えば '4.3.2RC1' は '4.3.2.RC.1' となります。 次に、左から右へ 各部分を比較していきます。特殊な文字列が含まれている場合は以下の順で 並べ替えます: <i>ここにないすべての文字列</i> &lt; <i>dev</i> &lt; <i>alpha</i> = <i>a</i> &lt; <i>beta</i> = <i>b</i> &lt; <i>RC</i> = <i>rc</i> &lt; <i>#</i> &lt; <i>pl</i> = <i>p</i> この方法により、'4.1' と '4.1.2' のようなバージョンの違いだけではなく PHP 固有の開発ステータスの違いも判断することが可能となります。</p>
 * @param string $version1 <p>最初のバージョン番号。</p>
 * @param string $version2 <p>ふたつめのバージョン番号。</p>
 * @return int <p>デフォルトでは、<b>version_compare()</b> の返り値は 最初のバージョンが 2 番目のバージョンより小さい場合に <i>-1</i>、 同じ場合に <i>0</i>、そして 2 番目のバージョンのほうが小さい場合に <i>1</i> となります。</p><p>オプションの引数 <code>operator</code> を使用すると、 指定した演算子による関係を満たす場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返すようになります。</p>
 * @link http://php.net/manual/ja/function.version-compare.php
 * @see phpversion(), php_uname(), function_exists()
 * @since PHP 4 >= 4.1.0, PHP 5, PHP 7
 */
function version_compare(string $version1, string $version2): int {}

/**
 * Zend guid を取得する
 * <p>この関数は、ビルトインされている画像を使って Zend ロゴを表示する際に使用できる ID を返します。</p><p>この関数は <i>非推奨</i> であり、PHP 5.5.0 で <i>削除</i> されます。</p>
 * @return string <p><i>PHPE9568F35-D428-11d2-A769-00AA001ACF42</i> を返します。</p>
 * @link http://php.net/manual/ja/function.zend-logo-guid.php
 * @see php_logo_guid()
 * @since PHP 4, PHP < 5.5.0
 */
function zend_logo_guid(): string {}

/**
 * 現在のスレッドの一意な ID を返す
 * <p>この関数は、現在のスレッドの一意な ID を返します。</p>
 * @return int <p>スレッドの ID を表す整数値を返します。</p>
 * @link http://php.net/manual/ja/function.zend-thread-id.php
 * @since PHP 5, PHP 7
 */
function zend_thread_id(): int {}

/**
 * 現在の Zend Engine のバージョンを取得する
 * <p>現在実行中の Zend Engine のバージョンを含む文字列を返します。</p>
 * @return string <p>Zend Engine のバージョン番号を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.zend-version.php
 * @see phpinfo(), phpcredits(), php_logo_guid(), phpversion()
 * @since PHP 4, PHP 5, PHP 7
 */
function zend_version(): string {}

/**
 * Microsoft Small Business Server がかつてインストールされていましたが、 Windows の別のバージョンにアップグレードされました。
 */
define('0x00000001', null);

/**
 * Windows Server 2008 Enterprise, Windows Server 2003, Enterprise Edition, Windows 2000 Advanced Server あるいは Windows NT Server 4.0 Enterprise Edition がインストールされています。
 */
define('0x00000002', null);

/**
 * Microsoft BackOffice コンポーネントがインストールされています。
 */
define('0x00000004', null);

/**
 * ターミナルサービスがインストールされています。 この値は常に設定されています。もしこの値が設定されているのに <i>0x00000100</i> が設定されていなければ、 そのシステムはアプリケーションサーバーモードで動作しています。
 */
define('0x00000010', null);

/**
 * Microsoft Small Business Server が、制限クライアントライセンスでインストールされています。
 */
define('0x00000020', null);

/**
 * Windows XP Embedded がインストールされています。
 */
define('0x00000040', null);

/**
 * Windows Server 2008 Datacenter, Windows Server 2003, Datacenter Edition あるいは Windows 2000 Datacenter Server がインストールされています。
 */
define('0x00000080', null);

/**
 * リモートデスクトップに対応していますが、 ひとつのインタラクティブセッションしかサポートしていません。 この値は、システムがアプリケーションサーバーモードで実行中でない場合に設定されます。
 */
define('0x00000100', null);

/**
 * Windows Vista Home Premium, Windows Vista Home Basic あるいは Windows XP Home Edition がインストールされています。
 */
define('0x00000200', null);

/**
 * Windows Server 2003, Web Edition がインストールされています。
 */
define('0x00000400', null);

/**
 * Windows Storage Server 2003 R2 あるいは Windows Storage Server 2003 がインストールされています。
 */
define('0x00002000', null);

/**
 * Windows Server 2003, Compute Cluster Edition がインストールされています。
 */
define('0x00004000', null);

/**
 * Windows Home Server がインストールされています。
 */
define('0x00008000', null);

/**
 * <code>assert()</code> の評価を有効にします。
 */
define('ASSERT_ACTIVE', 1);

/**
 * アサーションに失敗した時点に実行を中断します。
 */
define('ASSERT_BAIL', 3);

/**
 * アサーションに失敗した場合に実行するコールバック。
 */
define('ASSERT_CALLBACK', 2);

/**
 * アサーション式の評価中は <i>error_reporting</i> を無効にします。
 */
define('ASSERT_QUIET_EVAL', 5);

/**
 * アサーションに失敗するたびに PHP の警告を発行します。
 */
define('ASSERT_WARNING', 4);

/**
 * 全てのクレジット、<i>CREDITS_DOCS + CREDITS_GENERAL + CREDITS_GROUP + CREDITS_MODULES + CREDITS_FULLPAGE</i> を指定した場合と同じ。 この定数は、適当なタグを有する完全にスタンドアローンのHTMLページ を生成します。
 */
define('CREDITS_ALL', 4294967295);

/**
 * ドキュメント作成チームのクレジット
 */
define('CREDITS_DOCS', 16);

/**
 * 通常、他のフラグと組み合わせて使用されます。 他のフラグで示される情報を含む完全に独立したHTMLページを出力する ことを指定します。
 */
define('CREDITS_FULLPAGE', 32);

/**
 * 一般的なクレジット: 言語設計とコンセプト、PHP と PHP SAPIモジュールの作者。
 */
define('CREDITS_GENERAL', 2);

/**
 * コア開発者のリスト
 */
define('CREDITS_GROUP', 1);

/**
 * PHPの拡張モジュールとその作者の一覧。
 */
define('CREDITS_MODULES', 8);

/**
 * 品質管理チームのクレジット
 */
define('CREDITS_QA', 64);

/**
 * PHPのサーバーAPIモジュールとその作者の一覧。
 */
define('CREDITS_SAPI', 4);

/**
 * 上記を全て表示します。これがデフォルト値です。
 */
define('INFO_ALL', 4294967295);

/**
 * PHPディレクティブの現在のローカルおよびマスター値。 <code>ini_get()</code>も参照してください。
 */
define('INFO_CONFIGURATION', 4);

/**
 * PHP クレジット。<code>phpcredits()</code>も参照してください。
 */
define('INFO_CREDITS', 2);

/**
 * 環境変数に関する情報で、$_ENVでも入手可能です。
 */
define('INFO_ENVIRONMENT', 16);

/**
 * configureオプション、php.ini の場所、構築日、Webサーバー、システム等。
 */
define('INFO_GENERAL', 1);

/**
 * PHPライセンス情報。» license faqも参照してください。
 */
define('INFO_LICENSE', 64);

/**
 * ロードされているモジュールとそれぞれの設定。
 */
define('INFO_MODULES', 8);

/**
 * <i>EGPCS</i> (Environment, GET, POST, Cookie, Server)から定義済の変数を表示します。
 */
define('INFO_VARIABLES', 32);

/**
 * 未使用
 */
define('INI_ALL', 7);

/**
 * 未使用
 */
define('INI_PERDIR', 2);

/**
 * 未使用
 */
define('INI_SYSTEM', 4);

/**
 * 未使用
 */
define('INI_USER', 1);

/**
 * これはドメインコントローラです。
 */
define('PHP_WINDOWS_NT_DOMAIN_CONTROLLER', null);

/**
 * これはサーバーシステム (Server 2008/2003/2000 など) です。もしドメインコントローラである場合は <b><code>PHP_WINDOWS_NT_DOMAIN_CONTROLLER</code></b> と報告されることに注意しましょう。
 */
define('PHP_WINDOWS_NT_SERVER', null);

/**
 * これはワークステーションシステム (Vista/XP/2000/NT4 など) です。
 */
define('PHP_WINDOWS_NT_WORKSTATION', null);

/**
 * Windows のビルド番号 (たとえば Windows Vista SP1 はビルド 6001 となります)。
 */
define('PHP_WINDOWS_VERSION_BUILD', null);

/**
 * Windows のメジャーバージョン。<i>4</i> (NT4/Me/98/95)、 <i>5</i> (XP/2003 R2/2003/2000) あるいは <i>6</i> (Vista/2008/7/8/8.1) となります。
 */
define('PHP_WINDOWS_VERSION_MAJOR', null);

/**
 * Windows のマイナーバージョン。<i>0</i> (Vista/2008/2000/NT4/95)、 <i>1</i> (XP)、<i>2</i> (2003 R2/2003/XP x64)、<i>10</i> (98) あるいは <i>90</i> (ME) となります。
 */
define('PHP_WINDOWS_VERSION_MINOR', null);

/**
 * PHP が現在動作しているプラットフォーム。この値は Windows Vista/XP/2000/NT4, Server 2008/2003 では <i>2</i>、 Windows ME/98/95 では <i>1</i> となります。
 */
define('PHP_WINDOWS_VERSION_PLATFORM', null);

/**
 * <i>PHP_WINDOWS_NT_&#42;</i> 定数を決定するために使用する値を含みます。 この値は <i>PHP_WINDOWS_NT_&#42;</i> 定数のいずれかとなり、 プラットフォームの形式を示します。
 */
define('PHP_WINDOWS_VERSION_PRODUCTTYPE', null);

/**
 * インストールされているサービスパックのメジャーバージョン。サービスパックがインストールされていない場合は <i>0</i> となります。たとえば Windows XP にサービスパック 3 をインストールした場合、この値は <i>3</i> となります。
 */
define('PHP_WINDOWS_VERSION_SP_MAJOR', null);

/**
 * インストールされているサービスパックのマイナーバージョン。サービスパックがインストールされていない場合は <i>0</i> となります。
 */
define('PHP_WINDOWS_VERSION_SP_MINOR', null);

/**
 * Windows のさまざまな機能がインストールされているかどうかを示すビットマスク。 各フィールドの意味については以下の表を参照ください。
 */
define('PHP_WINDOWS_VERSION_SUITEMASK', null);

