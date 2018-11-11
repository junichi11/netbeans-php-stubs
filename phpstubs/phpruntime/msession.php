<?php



/**
 * msession サーバーに接続する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $host
 * @param string $port
 * @return bool
 * @link http://php.net/manual/ja/function.msession-connect.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_connect(string $host, string $port): bool {}

/**
 * セッション数を得る
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return int
 * @link http://php.net/manual/ja/function.msession-count.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_count(): int {}

/**
 * セッションを作成する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $session
 * @param string $classname
 * @param string $data
 * @return bool
 * @link http://php.net/manual/ja/function.msession-create.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_create(string $session, string $classname = NULL, string $data = NULL): bool {}

/**
 * セッションを破棄する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $name
 * @return bool
 * @link http://php.net/manual/ja/function.msession-destroy.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_destroy(string $name): bool {}

/**
 * msession サーバーへの接続を閉じる
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return void
 * @link http://php.net/manual/ja/function.msession-disconnect.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_disconnect(): void {}

/**
 * 名前と値で、すべてのセッションを検索する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $name
 * @param string $value
 * @return array
 * @link http://php.net/manual/ja/function.msession-find.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_find(string $name, string $value): array {}

/**
 * セッションから値を取得する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $session
 * @param string $name
 * @param string $value
 * @return string
 * @link http://php.net/manual/ja/function.msession-get.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_get(string $session, string $name, string $value): string {}

/**
 * msession 変数の配列を得る
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $session
 * @return array
 * @link http://php.net/manual/ja/function.msession-get-array.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_get_array(string $session): array {}

/**
 * データセッションの、構造化されていないデータを取得する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $session
 * @return string
 * @link http://php.net/manual/ja/function.msession-get-data.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_get_data(string $session): string {}

/**
 * セッションの値を増加させる
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $session
 * @param string $name
 * @return string
 * @link http://php.net/manual/ja/function.msession-inc.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_inc(string $session, string $name): string {}

/**
 * すべてのセッションの一覧を取得する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return array
 * @link http://php.net/manual/ja/function.msession-list.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_list(): array {}

/**
 * セッションの一覧を変数を使用して取得する
 * <p>共通の属性を有するセッションを検索する際に使用します。</p>
 * @param string $name <p>検索する名前。</p>
 * @return array <p><code>name</code> という名前の変数を有する全ての セッションを値とする連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.msession-listvar.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_listvar(string $name): array {}

/**
 * セッションをロックする
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $name
 * @return int
 * @link http://php.net/manual/ja/function.msession-lock.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_lock(string $name): int {}

/**
 * msession personality プラグイン内のエスケープ関数をコールする
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $session
 * @param string $val
 * @param string $param
 * @return string
 * @link http://php.net/manual/ja/function.msession-plugin.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_plugin(string $session, string $val, string $param = NULL): string {}

/**
 * ランダムな文字列を取得する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param int $param
 * @return string
 * @link http://php.net/manual/ja/function.msession-randstr.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_randstr(int $param): string {}

/**
 * セッションに値を設定する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $session
 * @param string $name
 * @param string $value
 * @return bool
 * @link http://php.net/manual/ja/function.msession-set.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_set(string $session, string $name, string $value): bool {}

/**
 * セッションに配列の値を設定する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $session
 * @param array $tuples
 * @return void
 * @link http://php.net/manual/ja/function.msession-set-array.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_set_array(string $session, array $tuples): void {}

/**
 * データセッションの、構造化されていないデータを設定する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $session
 * @param string $value
 * @return bool
 * @link http://php.net/manual/ja/function.msession-set-data.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_set_data(string $session, string $value): bool {}

/**
 * セッションの有効期間を設定/取得する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $session
 * @param int $param
 * @return int
 * @link http://php.net/manual/ja/function.msession-timeout.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_timeout(string $session, int $param = NULL): int {}

/**
 * ユニークな ID を取得する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param int $param
 * @param string $classname
 * @param string $data
 * @return string
 * @link http://php.net/manual/ja/function.msession-uniq.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_uniq(int $param, string $classname = NULL, string $data = NULL): string {}

/**
 * セッションのロックを解除する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $session
 * @param int $key
 * @return int
 * @link http://php.net/manual/ja/function.msession-unlock.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.1.3
 */
function msession_unlock(string $session, int $key): int {}

