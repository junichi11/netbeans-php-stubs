<?php

// Start of readline v.7.1.5

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 一行読み込む
 * @link http://php.net/manual/ja/function.readline.php
 * @param string $prompt [optional] <p>
 * ユーザーに示す確認文字列を指定します。
 * </p>
 * @return string ユーザーから取得した文字列を一つだけ返します。
 * 返り値の最後の改行は取り除かれます。
 */
function readline(string $prompt = null): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 種々の readline の内部変数を取得/設定する
 * @link http://php.net/manual/ja/function.readline-info.php
 * @param string $varname [optional] <p>
 * 変数の名前。
 * </p>
 * @param string $newvalue [optional] <p>
 * 指定した場合は、これがその設定の新しい値となります。
 * </p>
 * @return mixed パラメータを指定しないでコールした場合、この関数は readline が使用する
 * すべての設定の値を配列で返します。要素の添字は次のようになります。
 * done, end, erase_empty_line, library_version,
 * line_buffer, mark, pending_input, point, prompt, readline_name,
 * terminal_name
 * </p>
 * <p>
 * ひとつあるいはふたつのパラメータを指定してコールした場合は、
 * 元の値が返されます。
 */
function readline_info(string $varname = null, string $newvalue = null) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ヒストリに 1 行追加する
 * @link http://php.net/manual/ja/function.readline-add-history.php
 * @param string $line <p>
 * ヒストリに追加する行。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function readline_add_history(string $line): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ヒストリをクリアする
 * @link http://php.net/manual/ja/function.readline-clear-history.php
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function readline_clear_history(): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ヒストリを一覧表示する
 * @link http://php.net/manual/ja/function.readline-list-history.php
 * @return array コマンドラインヒストリ全体の配列を返します。
 * 各要素にはゼロから始まる整数の添字が付加されています。
 */
function readline_list_history(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ヒストリを読み込む
 * @link http://php.net/manual/ja/function.readline-read-history.php
 * @param string $filename [optional] <p>
 * コマンドヒストリを含むファイルへのパス。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function readline_read_history(string $filename = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ヒストリを書きこむ
 * @link http://php.net/manual/ja/function.readline-write-history.php
 * @param string $filename [optional] <p>
 * 保存するファイルへのパス。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function readline_write_history(string $filename = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 補完関数を登録する
 * @link http://php.net/manual/ja/function.readline-completion-function.php
 * @param callable $function <p>
 * コマンドラインの一部を入力とし、
 * マッチする可能性がある文字列の配列を返す
 * 既存の関数の名前を指定する必要があります。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function readline_completion_function(callable $function): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * readline コールバックインターフェイスと端末を初期化し、
プロンプトを表示して結果をすぐに返す
 * @link http://php.net/manual/ja/function.readline-callback-handler-install.php
 * @param string $prompt <p>
 * 確認メッセージ。
 * </p>
 * @param callable $callback <p>
 * <i>callback</i> 関数が受け取るパラメータはひとつで、
 * ユーザーから返された入力です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function readline_callback_handler_install(string $prompt, callable $callback): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 文字を読み込み、改行を受け取ると readline コールバックインターフェイスに通知する
 * @link http://php.net/manual/ja/function.readline-callback-read-char.php
 * @return void 値を返しません。
 */
function readline_callback_read_char(): void {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * インストールされたハンドラを削除し、端末の設定をもとに戻す
 * @link http://php.net/manual/ja/function.readline-callback-handler-remove.php
 * @return bool インストールされたコールバックが削除できた場合に <b>TRUE</b>、
 * 削除するハンドラが見つからなかった場合に <b>FALSE</b> を返します。
 */
function readline_callback_handler_remove(): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * 画面を再描画する
 * @link http://php.net/manual/ja/function.readline-redisplay.php
 * @return void 値を返しません。
 */
function readline_redisplay(): void {}

define ('READLINE_LIB', "readline");

// End of readline v.7.1.5
?>
