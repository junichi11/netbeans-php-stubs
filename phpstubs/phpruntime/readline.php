<?php



namespace {

	/**
	 * 一行読み込む
	 * <p>ユーザーからの入力を一行読み込みます。 この行を <code>readline_add_history()</code>. を用いてヒストリに追加する必要があります。</p>
	 * @param string $prompt <p>ユーザーに示す確認文字列を指定します。</p>
	 * @return string <p>ユーザーから取得した文字列を一つだけ返します。 返り値の最後の改行は取り除かれます。</p>
	 * @link https://php.net/manual/ja/function.readline.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline(string $prompt = NULL): string {}

	/**
	 * ヒストリに 1 行追加する
	 * <p>この関数は、コマンドラインヒストリに 1 行追加します。</p>
	 * @param string $line <p>ヒストリに追加する行。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.readline-add-history.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_add_history(string $line): bool {}

	/**
	 * readline コールバックインターフェイスと端末を初期化し、 プロンプトを表示して結果をすぐに返す
	 * <p>readline コールバックインターフェイスを設定し、プロンプト <code>prompt</code> を表示して入力を受け取ります。 コールバック関数 <code>callback</code> はひとつのパラメータを とり、そこにはユーザーの入力内容が格納されます。一度登録したコールバック インターフェイスを削除せずもういちどこの関数をコールした場合、もとの インターフェイスは自動的に上書きされます。</p><p>コールバック機能は <code>stream_select()</code> と組み合わせると 有用です。これは <code>readline()</code> とは異なり、 IO とユーザーの入力を交互に取り扱います。</p>
	 * @param string $prompt <p>確認メッセージ。</p>
	 * @param callable $callback <p><code>callback</code> 関数が受け取るパラメータはひとつで、 ユーザーから返された入力です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.readline-callback-handler-install.php
	 * @see readline_callback_handler_remove(), readline_callback_read_char(), stream_select()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function readline_callback_handler_install(string $prompt, callable $callback): bool {}

	/**
	 * インストールされたハンドラを削除し、端末の設定をもとに戻す
	 * <p>インストールされたハンドラを削除し、端末の設定をもとに戻します。</p>
	 * @return bool <p>インストールされたコールバックが削除できた場合に <b><code>TRUE</code></b>、 削除するハンドラが見つからなかった場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.readline-callback-handler-remove.php
	 * @see readline_callback_handler_install(), readline_callback_read_char()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function readline_callback_handler_remove(): bool {}

	/**
	 * 文字を読み込み、改行を受け取ると readline コールバックインターフェイスに通知する
	 * <p>ユーザーが入力した文字を読み込みます。改行を受け取ると、この関数は <code>readline_callback_handler_install()</code> で インストールされた readline コールバックインターフェイスに対して 入力待ちを通知します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.readline-callback-read-char.php
	 * @see readline_callback_handler_install(), readline_callback_handler_remove()
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function readline_callback_read_char(): void {}

	/**
	 * ヒストリをクリアする
	 * <p>この関数はコマンドラインヒストリ全体をクリアします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.readline-clear-history.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_clear_history(): bool {}

	/**
	 * 補完関数を登録する
	 * <p>この関数は補完用の関数を登録します。 これは、Bash を使用している際に、タブキーを 押して得られるのと同様の機能です。</p>
	 * @param callable $function <p>コマンドラインの一部を入力とし、 マッチする可能性がある文字列の配列を返す 既存の関数の名前を指定する必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.readline-completion-function.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_completion_function(callable $function): bool {}

	/**
	 * 種々の readline の内部変数を取得/設定する
	 * <p>さまざまな readline の内部変数の取得あるいは設定を行います。</p>
	 * @param string $varname <p>変数の名前。</p>
	 * @param string $newvalue <p>指定した場合は、これがその設定の新しい値となります。</p>
	 * @return mixed <p>パラメータを指定しないでコールした場合、この関数は readline が使用する すべての設定の値を配列で返します。要素の添字は次のようになります。 done, end, erase_empty_line, library_version, line_buffer, mark, pending_input, point, prompt, readline_name, terminal_name</p><p>ひとつあるいはふたつのパラメータを指定してコールした場合は、 元の値が返されます。</p>
	 * @link https://php.net/manual/ja/function.readline-info.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_info(string $varname = NULL, string $newvalue = NULL) {}

	/**
	 * ヒストリを一覧表示する
	 * <p>コマンドラインヒストリ全体を取得します。</p>
	 * @return array <p>コマンドラインヒストリ全体の配列を返します。 各要素にはゼロから始まる整数の添字が付加されています。</p>
	 * @link https://php.net/manual/ja/function.readline-list-history.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_list_history(): array {}

	/**
	 * カーソルが新しい行に移動したことを readline に通知する
	 * <p>readline に、カーソルが新しい行に移動したことを通知します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.readline-on-new-line.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function readline_on_new_line(): void {}

	/**
	 * ヒストリを読み込む
	 * <p>この関数は、コマンドヒストリをファイルから読み込みます。</p>
	 * @param string $filename <p>コマンドヒストリを含むファイルへのパス。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.readline-read-history.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_read_history(string $filename = NULL): bool {}

	/**
	 * 画面を再描画する
	 * <p>画面の再描画を readline に依頼します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.readline-redisplay.php
	 * @since PHP 5 >= 5.1.0, PHP 7
	 */
	function readline_redisplay(): void {}

	/**
	 * ヒストリを書きこむ
	 * <p>この関数はコマンドヒストリをファイルに書き込みます。</p>
	 * @param string $filename <p>保存するファイルへのパス。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.readline-write-history.php
	 * @since PHP 4, PHP 5, PHP 7
	 */
	function readline_write_history(string $filename = NULL): bool {}

	/**
	 * The library which is used for readline support; currently either <i>readline</i> or <i>libedit</i>. Available as of PHP 5.5.0.
	 */
	define('READLINE_LIB', 'libedit');

}
