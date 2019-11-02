<?php



namespace {

	/**
	 * ビープ音を端末に送信する
	 * <p>この関数は、端末にビープ音を送信します。</p><p><b>注意</b>:</p><p>端末の設定により、この音が聞こえることも聞こえないこともあります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-bell.php
	 * @since PECL newt >= 0.1
	 */
	function newt_bell(): void {}

	/**
	 * 新しいボタンを作成する
	 * <p>新しいボタンを作成します。</p>
	 * @param int $left <p>ボタンの X 座標。</p>
	 * @param int $top <p>ボタンの Y 座標。</p>
	 * @param string $text <p>ボタンに表示するテキスト。</p>
	 * @return resource <p>作成したボタンコンポーネントへのリソースリンク、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.newt-button.php
	 * @see newt_button_bar()
	 * @since PECL newt >= 0.1
	 */
	function newt_button(int $left, int $top, string $text) {}

	/**
	 * 作成したボタンを含むグリッドを返す
	 * <p>この関数は、作成したボタンを含むグリッドを返します。</p>
	 * @param array $buttons
	 * @return resource <p>作成したボタンを含むグリッドを返します。</p>
	 * @link https://php.net/manual/ja/function.newt-button-bar.php
	 * @since PECL newt >= 0.1
	 */
	function newt_button_bar(array &$buttons) {}

	/**
	 * 画面の中央に指定したサイズのウィンドウをオープンする
	 * <p>画面の中央に、指定したサイズのウィンドウをオープンします。</p>
	 * @param int $width <p>ウィンドウの幅。</p>
	 * @param int $height <p>ウィンドウの高さ。</p>
	 * @param string $title <p>ウィンドウのタイトル。</p>
	 * @return int <p>未定義です。</p>
	 * @link https://php.net/manual/ja/function.newt-centered-window.php
	 * @see newt_pop_window(), newt_open_window()
	 * @since PECL newt >= 0.1
	 */
	function newt_centered_window(int $width, int $height, string $title = NULL): int {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param string $text
	 * @param string $def_value
	 * @param string $seq
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-checkbox.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox(int $left, int $top, string $text, string $def_value, string $seq = NULL) {}

	/**
	 * チェックボックスリソースの値を取得する
	 * <p>この関数は、シーケンス内の文字を返します。 これは、チェックボックスの現在の値を表します。</p>
	 * @param resource $checkbox
	 * @return string <p>チェックボックスの値を表す文字を返します。</p>
	 * @link https://php.net/manual/ja/function.newt-checkbox-get-value.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_get_value($checkbox): string {}

	/**
	 * チェックボックスリソースを設定する
	 * <p>この関数は、チェックボックスリソースのさまざまなフラグを設定します。</p>
	 * @param resource $checkbox
	 * @param int $flags
	 * @param int $sense
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-checkbox-set-flags.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_set_flags($checkbox, int $flags, int $sense): void {}

	/**
	 * チェックボックスの値を設定する
	 * <p>この関数は、チェックボックスリソースの現在の値を設定します。</p>
	 * @param resource $checkbox
	 * @param string $value
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-checkbox-set-value.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_set_value($checkbox, string $value): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param int $height
	 * @param int $flags
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree(int $left, int $top, int $height, int $flags = NULL) {}

	/**
	 * 新しいアイテムをチェックボックスツリーに追加する
	 * <p>この関数は、新しいアイテムをチェックボックスツリーに追加します。</p>
	 * @param resource $checkboxtree
	 * @param string $text
	 * @param mixed $data
	 * @param int $flags
	 * @param int $index
	 * @param int $_
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree-add-item.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_add_item($checkboxtree, string $text, $data, int $flags, int $index, int $_ = NULL): void {}

	/**
	 * チェックボックスツリーのアイテムを探す
	 * <p>データを指定して、チェックボックスツリーのアイテムを探します。</p>
	 * @param resource $checkboxtree
	 * @param mixed $data
	 * @return array <p>チェックボックスツリーアイテムリソースを返します。 見つからなかった場合は <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree-find-item.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_find_item($checkboxtree, $data): array {}

	/**
	 * チェックボックスツリーの選択されているアイテムを返す
	 * <p>このメソッドは、チェックボックスツリーの選択されているアイテムを返します。</p>
	 * @param resource $checkboxtree
	 * @return mixed <p>現在の (選択されている) チェックボックスツリーアイテムを返します。</p>
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree-get-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_get_current($checkboxtree) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $checkboxtree
	 * @param mixed $data
	 * @return string
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree-get-entry-value.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_get_entry_value($checkboxtree, $data): string {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $checkboxtree
	 * @param string $seqnum
	 * @return array
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree-get-multi-selection.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_get_multi_selection($checkboxtree, string $seqnum): array {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $checkboxtree
	 * @return array
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree-get-selection.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_get_selection($checkboxtree): array {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param int $height
	 * @param string $seq
	 * @param int $flags
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree-multi.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_multi(int $left, int $top, int $height, string $seq, int $flags = NULL) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $checkboxtree
	 * @param mixed $data
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree-set-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_set_current($checkboxtree, $data): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $checkboxtree
	 * @param mixed $data
	 * @param string $text
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree-set-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_set_entry($checkboxtree, $data, string $text): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $checkboxtree
	 * @param mixed $data
	 * @param string $value
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree-set-entry-value.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_set_entry_value($checkboxtree, $data, string $value): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $checkbox_tree
	 * @param int $width
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-checkbox-tree-set-width.php
	 * @since PECL newt >= 0.1
	 */
	function newt_checkbox_tree_set_width($checkbox_tree, int $width): void {}

	/**
	 * 追加の入力を待たずに、端末の入力バッファの内容をクリアする
	 * <p>追加の入力を待たずに、端末の入力バッファの内容をクリアします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-clear-key-buffer.php
	 * @see newt_wait_for_key()
	 * @since PECL newt >= 0.1
	 */
	function newt_clear_key_buffer(): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-cls.php
	 * @since PECL newt >= 0.1
	 */
	function newt_cls(): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param string $text
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-compact-button.php
	 * @since PECL newt >= 0.1
	 */
	function newt_compact_button(int $left, int $top, string $text) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $component
	 * @param mixed $func_name
	 * @param mixed $data
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-component-add-callback.php
	 * @since PECL newt >= 0.1
	 */
	function newt_component_add_callback($component, $func_name, $data): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $component
	 * @param bool $takes_focus
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-component-takes-focus.php
	 * @since PECL newt >= 0.1
	 */
	function newt_component_takes_focus($component, bool $takes_focus): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $cols
	 * @param int $rows
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-create-grid.php
	 * @since PECL newt >= 0.1
	 */
	function newt_create_grid(int $cols, int $rows) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-cursor-off.php
	 * @since PECL newt >= 0.1
	 */
	function newt_cursor_off(): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-cursor-on.php
	 * @since PECL newt >= 0.1
	 */
	function newt_cursor_on(): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $microseconds
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-delay.php
	 * @since PECL newt >= 0.1
	 */
	function newt_delay(int $microseconds): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $form
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-draw-form.php
	 * @since PECL newt >= 0.1
	 */
	function newt_draw_form($form): void {}

	/**
	 * 指定した位置に文字列を表示する
	 * <p>指定した位置に文字列を表示します。</p>
	 * @param int $left <p>カラム番号。</p>  <p><b>注意</b>:</p> <p>left が負の数の場合、画面の反対側から位置が計算されます。</p>
	 * @param int $top <p>行番号。</p>  <p><b>注意</b>:</p> <p>top が負の数の場合、画面の反対側から位置が計算されます。</p>
	 * @param string $text <p>表示する文字列。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-draw-root-text.php
	 * @see newt_push_help_line(), newt_pop_help_line()
	 * @since PECL newt >= 0.1
	 */
	function newt_draw_root_text(int $left, int $top, string $text): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param int $width
	 * @param string $init_value
	 * @param int $flags
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_entry(int $left, int $top, int $width, string $init_value = NULL, int $flags = NULL) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $entry
	 * @return string
	 * @link https://php.net/manual/ja/function.newt-entry-get-value.php
	 * @since PECL newt >= 0.1
	 */
	function newt_entry_get_value($entry): string {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $entry
	 * @param string $value
	 * @param bool $cursor_at_end
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-entry-set.php
	 * @since PECL newt >= 0.1
	 */
	function newt_entry_set($entry, string $value, bool $cursor_at_end = NULL): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $entry
	 * @param callable $filter
	 * @param mixed $data
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-entry-set-filter.php
	 * @since PECL newt >= 0.1
	 */
	function newt_entry_set_filter($entry, callable $filter, $data): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $entry
	 * @param int $flags
	 * @param int $sense
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-entry-set-flags.php
	 * @since PECL newt >= 0.1
	 */
	function newt_entry_set_flags($entry, int $flags, int $sense): void {}

	/**
	 * newt インターフェイスを終了する
	 * <p>newt インターフェイスを終了します。プログラムが終了する際にこの関数を コールします。</p>
	 * @return int <p>成功した場合に 1、失敗した場合に 0 を返します。</p>
	 * @link https://php.net/manual/ja/function.newt-finished.php
	 * @see newt_init()
	 * @since PECL newt >= 0.1
	 */
	function newt_finished(): int {}

	/**
	 * フォームを作成する
	 * <p>新しいフォームを作成します。</p>
	 * @param resource $vert_bar <p>フォームに関連付けられる垂直スクロールバー。</p>
	 * @param string $help <p>ヘルプ文字列。</p>
	 * @param int $flags <p>さまざまなフラグ。</p>
	 * @return resource <p>作成されたフォームコンポーネントのリソースリンク、 あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.newt-form.php
	 * @see newt_form_run(), newt_run_form(), newt_form_add_component(), newt_form_add_components(), newt_form_destroy()
	 * @since PECL newt >= 0.1
	 */
	function newt_form($vert_bar = NULL, string $help = NULL, int $flags = NULL) {}

	/**
	 * フォームにコンポーネントを追加する
	 * <p><code>form</code> にコンポーネントを追加します。</p>
	 * @param resource $form <p>コンポーネントを追加するフォーム。</p>
	 * @param resource $component <p>フォームに追加するコンポーネント。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-form-add-component.php
	 * @see newt_form_add_components()
	 * @since PECL newt >= 0.1
	 */
	function newt_form_add_component($form, $component): void {}

	/**
	 * フォームに複数のコンポーネントを追加する
	 * <p><code>form</code> に複数のコンポーネントを追加します。</p>
	 * @param resource $form <p>コンポーネントを追加するフォーム。</p>
	 * @param array $components <p>フォームに追加するコンポーネントの配列。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-form-add-components.php
	 * @see newt_form_add_component()
	 * @since PECL newt >= 0.1
	 */
	function newt_form_add_components($form, array $components): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $form
	 * @param int $key
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-form-add-hot-key.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_add_hot_key($form, int $key): void {}

	/**
	 * フォームを破壊する
	 * <p>この関数は、フォームおよびそこに追加されたすべてのコンポーネント (サブフォーム上のコンポーネントも含みます)が使用しているメモリ リソースを開放します。いちどフォームが破壊されると、フォーム上の コンポーネントは使用できなくなります。</p>
	 * @param resource $form <p>破壊されるフォームコンポーネント。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-form-destroy.php
	 * @see newt_form_run(), newt_run_form()
	 * @since PECL newt >= 0.1
	 */
	function newt_form_destroy($form): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $form
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-form-get-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_get_current($form) {}

	/**
	 * フォームを実行する
	 * <p>この関数は、引数で渡したフォームを実行します。</p>
	 * @param resource $form <p>フォームコンポーネント。</p>
	 * @param array $exit_struct <p>フォームコンポーネントを実行した後の情報を返すために使用する 配列。キーと値については以下の表で示します。</p> <b>Form の終了情報の構造</b>   インデックスのキー 値の型 説明     reason integer  フォームが終了した理由。とりうる値については ここ で定義しています。    watch resource  <code>newt_form_watch_fd()</code> で指定したリソースリンク。   キー 整数 ホットキー   component resource フォームを終了させたコンポーネント。
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-form-run.php
	 * @see newt_run_form()
	 * @since PECL newt >= 0.1
	 */
	function newt_form_run($form, array &$exit_struct): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $from
	 * @param int $background
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-form-set-background.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_set_background($from, int $background): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $form
	 * @param int $height
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-form-set-height.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_set_height($form, int $height): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $form
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-form-set-size.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_set_size($form): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $form
	 * @param int $milliseconds
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-form-set-timer.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_set_timer($form, int $milliseconds): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $form
	 * @param int $width
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-form-set-width.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_set_width($form, int $width): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $form
	 * @param resource $stream
	 * @param int $flags
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-form-watch-fd.php
	 * @since PECL newt >= 0.1
	 */
	function newt_form_watch_fd($form, $stream, int $flags = NULL): void {}

	/**
	 * 参照で渡された引数に、現在の端末の大きさを格納する
	 * <p>参照で渡された引数に、現在の端末の大きさを格納します。</p>
	 * @param int $cols <p>端末のカラム数。</p>
	 * @param int $rows <p>端末の行数。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-get-screen-size.php
	 * @since PECL newt >= 0.1
	 */
	function newt_get_screen_size(int &$cols, int &$rows): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $grid
	 * @param resource $form
	 * @param bool $recurse
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-grid-add-components-to-form.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_add_components_to_form($grid, $form, bool $recurse): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $text
	 * @param resource $middle
	 * @param resource $buttons
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-grid-basic-window.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_basic_window($text, $middle, $buttons) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $grid
	 * @param bool $recurse
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-grid-free.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_free($grid, bool $recurse): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \resouce $grid
	 * @param int $width
	 * @param int $height
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-grid-get-size.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_get_size(\resouce $grid, int &$width, int &$height): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $element1_type
	 * @param resource $element1
	 * @param resource $_
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-grid-h-close-stacked.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_h_close_stacked(int $element1_type, $element1, $_ = NULL) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $element1_type
	 * @param resource $element1
	 * @param resource $_
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-grid-h-stacked.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_h_stacked(int $element1_type, $element1, $_ = NULL) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $grid
	 * @param int $left
	 * @param int $top
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-grid-place.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_place($grid, int $left, int $top): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $grid
	 * @param int $col
	 * @param int $row
	 * @param int $type
	 * @param resource $val
	 * @param int $pad_left
	 * @param int $pad_top
	 * @param int $pad_right
	 * @param int $pad_bottom
	 * @param int $anchor
	 * @param int $flags
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-grid-set-field.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_set_field($grid, int $col, int $row, int $type, $val, int $pad_left, int $pad_top, int $pad_right, int $pad_bottom, int $anchor, int $flags = NULL): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $text
	 * @param resource $middle
	 * @param resource $buttons
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-grid-simple-window.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_simple_window($text, $middle, $buttons) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $element1_type
	 * @param resource $element1
	 * @param resource $_
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-grid-v-close-stacked.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_v_close_stacked(int $element1_type, $element1, $_ = NULL) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $element1_type
	 * @param resource $element1
	 * @param resource $_
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-grid-v-stacked.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_v_stacked(int $element1_type, $element1, $_ = NULL) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $grid
	 * @param string $title
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-grid-wrapped-window.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_wrapped_window($grid, string $title): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $grid
	 * @param string $title
	 * @param int $left
	 * @param int $top
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-grid-wrapped-window-at.php
	 * @since PECL newt >= 0.1
	 */
	function newt_grid_wrapped_window_at($grid, string $title, int $left, int $top): void {}

	/**
	 * newt を初期化する
	 * <p>newt インターフェイスを初期化します。この関数は、他の newt 関数の前に コールする必要があります。</p>
	 * @return int <p>成功した場合に 1、失敗した場合に 0 を返します。</p>
	 * @link https://php.net/manual/ja/function.newt-init.php
	 * @see newt_finished()
	 * @since PECL newt >= 0.1
	 */
	function newt_init(): int {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param string $text
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-label.php
	 * @since PECL newt >= 0.1
	 */
	function newt_label(int $left, int $top, string $text) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $label
	 * @param string $text
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-label-set-text.php
	 * @since PECL newt >= 0.1
	 */
	function newt_label_set_text($label, string $text): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param int $height
	 * @param int $flags
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-listbox.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox(int $left, int $top, int $height, int $flags = NULL) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @param string $text
	 * @param mixed $data
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listbox-append-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_append_entry($listbox, string $text, $data): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listobx
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listbox-clear.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_clear($listobx): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listbox-clear-selection.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_clear_selection($listbox): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @param mixed $key
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listbox-delete-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_delete_entry($listbox, $key): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @return string
	 * @link https://php.net/manual/ja/function.newt-listbox-get-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_get_current($listbox): string {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @return array
	 * @link https://php.net/manual/ja/function.newt-listbox-get-selection.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_get_selection($listbox): array {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @param string $text
	 * @param mixed $data
	 * @param mixed $key
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listbox-insert-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_insert_entry($listbox, string $text, $data, $key): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @return int
	 * @link https://php.net/manual/ja/function.newt-listbox-item-count.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_item_count($listbox): int {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @param mixed $key
	 * @param int $sense
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listbox-select-item.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_select_item($listbox, $key, int $sense): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @param int $num
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listbox-set-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_set_current($listbox, int $num): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @param mixed $key
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listbox-set-current-by-key.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_set_current_by_key($listbox, $key): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @param int $num
	 * @param mixed $data
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listbox-set-data.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_set_data($listbox, int $num, $data): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @param int $num
	 * @param string $text
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listbox-set-entry.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_set_entry($listbox, int $num, string $text): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $listbox
	 * @param int $width
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listbox-set-width.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listbox_set_width($listbox, int $width): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param string $text
	 * @param bool $is_default
	 * @param \resouce $prev_item
	 * @param mixed $data
	 * @param int $flags
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-listitem.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listitem(int $left, int $top, string $text, bool $is_default, \resouce $prev_item, $data, int $flags = NULL) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $item
	 * @return mixed
	 * @link https://php.net/manual/ja/function.newt-listitem-get-data.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listitem_get_data($item) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $item
	 * @param string $text
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-listitem-set.php
	 * @since PECL newt >= 0.1
	 */
	function newt_listitem_set($item, string $text): void {}

	/**
	 * 指定したサイズと位置でウィンドウをオープンする
	 * <p>指定したサイズと位置でウィンドウをオープンします。</p>
	 * @param int $left <p>ウィンドウの左上隅の位置(カラム番号)。</p>
	 * @param int $top <p>ウィンドウの左上隅の位置(行番号)。</p>
	 * @param int $width <p>ウィンドウの幅。</p>
	 * @param int $height <p>ウィンドウの高さ。</p>
	 * @param string $title <p>ウィンドウのタイトル。</p>
	 * @return int <p>成功した場合に 1、失敗した場合に 0 を返します。</p>
	 * @link https://php.net/manual/ja/function.newt-open-window.php
	 * @see newt_pop_window(), newt_centered_window()
	 * @since PECL newt >= 0.1
	 */
	function newt_open_window(int $left, int $top, int $width, int $height, string $title = NULL): int {}

	/**
	 * 現在のヘルプ行をスタックの内容で置き換える
	 * <p>現在のヘルプ行を、スタックの内容で置き換えます。</p><p><b>注意</b>:</p><p><code>newt_push_help_line()</code> をコールした回数をこえて <b>newt_pop_help_line()</b> をコールしないようにすることが 重要です。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-pop-help-line.php
	 * @see newt_push_help_line()
	 * @since PECL newt >= 0.1
	 */
	function newt_pop_help_line(): void {}

	/**
	 * トップウィンドウを画面から消去する
	 * <p>トップウィンドウを画面から消去し、ウィンドウが覆っていた部分を 再描画します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-pop-window.php
	 * @see newt_open_window(), newt_centered_window()
	 * @since PECL newt >= 0.1
	 */
	function newt_pop_window(): void {}

	/**
	 * 現在のヘルプ行をスタックに保存し、新しい行を表示する
	 * <p>現在のヘルプ行をスタックに保存し、新しい行を表示します。</p>
	 * @param string $text <p>新しいヘルプメッセージ。</p>  <p><b>注意</b>:</p> <p>指定しなかった場合、ヘルプ行はクリアされます。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-push-help-line.php
	 * @see newt_pop_help_line()
	 * @since PECL newt >= 0.1
	 */
	function newt_push_help_line(string $text = NULL): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $set_member
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-radio-get-current.php
	 * @since PECL newt >= 0.1
	 */
	function newt_radio_get_current($set_member) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param string $text
	 * @param bool $is_default
	 * @param resource $prev_button
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-radiobutton.php
	 * @since PECL newt >= 0.1
	 */
	function newt_radiobutton(int $left, int $top, string $text, bool $is_default, $prev_button = NULL) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-redraw-help-line.php
	 * @since PECL newt >= 0.1
	 */
	function newt_redraw_help_line(): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $text
	 * @param int $width
	 * @param int $flex_down
	 * @param int $flex_up
	 * @param int $actual_width
	 * @param int $actual_height
	 * @return string
	 * @link https://php.net/manual/ja/function.newt-reflow-text.php
	 * @since PECL newt >= 0.1
	 */
	function newt_reflow_text(string $text, int $width, int $flex_down, int $flex_up, int &$actual_width, int &$actual_height): string {}

	/**
	 * 画面の変更された部分を更新する
	 * <p>パフォーマンスを向上させるため、newt は必要時にしか画面を更新しません。 それはプログラムが端末への書き込みを行った場合とは限りません。 変更した部分を即時に更新させるようにするために、この関数をコールします。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-refresh.php
	 * @since PECL newt >= 0.1
	 */
	function newt_refresh(): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param bool $redraw
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-resize-screen.php
	 * @since PECL newt >= 0.1
	 */
	function newt_resize_screen(bool $redraw = NULL): void {}

	/**
	 * newt_suspend() をコールした後に newt インターフェイスの使用を再開する
	 * <p><code>newt_suspend()</code> をコールした後に newt インターフェイスの使用を再開します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-resume.php
	 * @see newt_suspend()
	 * @since PECL newt >= 0.1
	 */
	function newt_resume(): void {}

	/**
	 * フォームを実行する
	 * <p>この関数は、引数で渡したフォームを実行します。</p>
	 * @param resource $form <p>フォームコンポーネント。</p>
	 * @return resource <p>フォームの実行を停止させたコンポーネントを返します。</p> <p><b>注意</b>:</p> <p>この関数は、newt の通常の名前付け規則に当てはまらないことに注意 しましょう。これは古いインターフェイスであり、すべてのフォームで 動作するわけではありません。これは、昔のアプリケーションのために だけ newt に残されています。しかし、この関数のインターフェイスは <code>newt_form_run()</code> よりシンプルであるため、 結果としていまだに頻繁に利用されています。 アプリケーションが終了した際には、フォームおよびそこに含まれる すべてのコンポーネントは破壊されます。</p>
	 * @link https://php.net/manual/ja/function.newt-run-form.php
	 * @see newt_form_run(), newt_form_destroy()
	 * @since PECL newt >= 0.1
	 */
	function newt_run_form($form) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param int $width
	 * @param int $full_value
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-scale.php
	 * @since PECL newt >= 0.1
	 */
	function newt_scale(int $left, int $top, int $width, int $full_value) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $scale
	 * @param int $amount
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-scale-set.php
	 * @since PECL newt >= 0.1
	 */
	function newt_scale_set($scale, int $amount): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $scrollbar
	 * @param int $where
	 * @param int $total
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-scrollbar-set.php
	 * @since PECL newt >= 0.1
	 */
	function newt_scrollbar_set($scrollbar, int $where, int $total): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param mixed $function
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-set-help-callback.php
	 * @since PECL newt >= 0.1
	 */
	function newt_set_help_callback($function): void {}

	/**
	 * ユーザーがサスペンドキーを押した際に起動するコールバック関数を設定する
	 * <p>ユーザーがサスペンドキー（通常は ^Z）を押した際に起動するコールバック関数を 設定します。コールバックが登録されていない場合、サスペンドのキー入力は 無視されます。</p>
	 * @param callable $function <p>ひとつの引数 data を受け取るコールバック関数。</p>
	 * @param mixed $data <p>コールバック関数に渡されるデータ。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-set-suspend-callback.php
	 * @see newt_suspend(), newt_resume()
	 * @since PECL newt >= 0.1
	 */
	function newt_set_suspend_callback(callable $function, $data): void {}

	/**
	 * 端末を元の状態に戻すよう、newt に通知する
	 * <p>端末を元の状態に戻すよう、newt に通知します。いったん実行されると、 (自分自身に SIGTSTP を送信する・子プログラムをフォークするなどの方法で) アプリケーションが自分自身でサスペンドすることが可能となります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-suspend.php
	 * @see newt_resume()
	 * @since PECL newt >= 0.1
	 */
	function newt_suspend(): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param int $width
	 * @param int $height
	 * @param int $flags
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-textbox.php
	 * @since PECL newt >= 0.1
	 */
	function newt_textbox(int $left, int $top, int $width, int $height, int $flags = NULL) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $textbox
	 * @return int
	 * @link https://php.net/manual/ja/function.newt-textbox-get-num-lines.php
	 * @since PECL newt >= 0.1
	 */
	function newt_textbox_get_num_lines($textbox): int {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param \char $_text
	 * @param int $width
	 * @param int $flex_down
	 * @param int $flex_up
	 * @param int $flags
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-textbox-reflowed.php
	 * @since PECL newt >= 0.1
	 */
	function newt_textbox_reflowed(int $left, int $top, \char $_text, int $width, int $flex_down, int $flex_up, int $flags = NULL) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $textbox
	 * @param int $height
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-textbox-set-height.php
	 * @since PECL newt >= 0.1
	 */
	function newt_textbox_set_height($textbox, int $height): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $textbox
	 * @param string $text
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-textbox-set-text.php
	 * @since PECL newt >= 0.1
	 */
	function newt_textbox_set_text($textbox, string $text): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $left
	 * @param int $top
	 * @param int $height
	 * @param int $normal_colorset
	 * @param int $thumb_colorset
	 * @return resource
	 * @link https://php.net/manual/ja/function.newt-vertical-scrollbar.php
	 * @since PECL newt >= 0.1
	 */
	function newt_vertical_scrollbar(int $left, int $top, int $height, int $normal_colorset = NULL, int $thumb_colorset = NULL) {}

	/**
	 * キーが押されるまで結果を返さない
	 * <p>この関数は、キーが押されるまで結果を返しません。 キー入力は無視されます。もし端末のバッファにキー入力が格納されている場合は、 この関数はその内容を捨てて結果をすぐに返します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-wait-for-key.php
	 * @see newt_clear_key_buffer()
	 * @since PECL newt >= 0.1
	 */
	function newt_wait_for_key(): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $title
	 * @param string $button1_text
	 * @param string $button2_text
	 * @param string $format
	 * @param mixed $args
	 * @param mixed $_
	 * @return int
	 * @link https://php.net/manual/ja/function.newt-win-choice.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_choice(string $title, string $button1_text, string $button2_text, string $format, $args = NULL, $_ = NULL): int {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $title
	 * @param string $text
	 * @param int $suggested_width
	 * @param int $flex_down
	 * @param int $flex_up
	 * @param int $data_width
	 * @param array $items
	 * @param string $button1
	 * @param string $_
	 * @return int
	 * @link https://php.net/manual/ja/function.newt-win-entries.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_entries(string $title, string $text, int $suggested_width, int $flex_down, int $flex_up, int $data_width, array &$items, string $button1, string $_ = NULL): int {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $title
	 * @param string $text
	 * @param int $suggestedWidth
	 * @param int $flexDown
	 * @param int $flexUp
	 * @param int $maxListHeight
	 * @param array $items
	 * @param int $listItem
	 * @param string $button1
	 * @param string $_
	 * @return int <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-win-menu.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_menu(string $title, string $text, int $suggestedWidth, int $flexDown, int $flexUp, int $maxListHeight, array $items, int &$listItem, string $button1 = NULL, string $_ = NULL): int {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $title
	 * @param string $button_text
	 * @param string $format
	 * @param mixed $args
	 * @param mixed $_
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-win-message.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_message(string $title, string $button_text, string $format, $args = NULL, $_ = NULL): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $title
	 * @param string $button_text
	 * @param string $format
	 * @param array $args
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.newt-win-messagev.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_messagev(string $title, string $button_text, string $format, array $args): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $title <p>Its description</p>
	 * @param string $button1_text <p>Its description</p>
	 * @param string $button2_text <p>Its description</p>
	 * @param string $button3_text <p>Its description</p>
	 * @param string $format <p>Its description</p>
	 * @param mixed $args <p>Its description</p>
	 * @param mixed $_
	 * @return int <p>What the function returns, first on success, then on failure. See also the &amp;return.success; entity</p>
	 * @link https://php.net/manual/ja/function.newt-win-ternary.php
	 * @since PECL newt >= 0.1
	 */
	function newt_win_ternary(string $title, string $button1_text, string $button2_text, string $button3_text, string $format, $args = NULL, $_ = NULL): int {}

}
