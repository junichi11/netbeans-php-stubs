<?php



namespace {

	/**
	 * 現在の位置に文字を追加し、カーソルを進める
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $ch
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-addch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_addch(int $ch): int {}

	/**
	 * 現在の位置に指定した長さの属性付き文字列を追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $s
	 * @param int $n
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-addchnstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_addchnstr(string $s, int $n): int {}

	/**
	 * 現在の位置に属性付き文字列を追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $s
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-addchstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_addchstr(string $s): int {}

	/**
	 * 現在の位置に、指定した長さの文字列を追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $s
	 * @param int $n
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-addnstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_addnstr(string $s, int $n): int {}

	/**
	 * 現在の位置にテキストを出力する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $text
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-addstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_addstr(string $text): int {}

	/**
	 * カラー 0 のデフォルト色を定義する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $fg
	 * @param int $bg
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-assume-default-colors.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_assume_default_colors(int $fg, int $bg): int {}

	/**
	 * 指定した属性を無効とする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $attributes
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-attroff.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_attroff(int $attributes): int {}

	/**
	 * 指定した属性を有効にする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $attributes
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-attron.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_attron(int $attributes): int {}

	/**
	 * 指定した属性を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $attributes
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-attrset.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_attrset(int $attributes): int {}

	/**
	 * 端末のボーレートを返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-baudrate.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_baudrate(): int {}

	/**
	 * 端末のビープを鳴らす
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>ncurses_beep()</b> は、耳に聞こえる警告(ベル) を送信ます。送信できなかった場合は画面をフラッシュします。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-beep.php
	 * @see ncurses_flash()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_beep(): int {}

	/**
	 * 端末画面の背景属性を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $attrchar
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-bkgd.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_bkgd(int $attrchar): int {}

	/**
	 * 画面背景を制御する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $attrchar
	 * @return void
	 * @link https://php.net/manual/ja/function.ncurses-bkgdset.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_bkgdset(int $attrchar): void {}

	/**
	 * 属性付きの文字で画面周囲に境界を描画する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>指定した線と角を、メインウィンドウの周りに描画します。</p><p>サブウィンドウの周りに境界を描画するには <code>ncurses_wborder()</code> を使用してください!</p>
	 * @param int $left
	 * @param int $right
	 * @param int $top
	 * @param int $bottom
	 * @param int $tl_corner <p>左上隅。</p>
	 * @param int $tr_corner <p>右上隅。</p>
	 * @param int $bl_corner <p>左下隅。</p>
	 * @param int $br_corner <p>右下隅。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-border.php
	 * @see ncurses_wborder()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_border(int $left, int $right, int $top, int $bottom, int $tl_corner, int $tr_corner, int $bl_corner, int $br_corner): int {}

	/**
	 * パネルをスタックの最下部に移動する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $panel
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-bottom-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_bottom_panel($panel): int {}

	/**
	 * 端末の色を変更可能かどうか確認する
	 * <p>端末が色を扱えるかどうか、そしてプログラマが <code>ncurses_init_color()</code> で色を変更できるかどうかを返します。 この関数をコールする前に、ncurses を <code>ncurses_init()</code> で初期化しておく必要があります。</p>
	 * @return bool <p>プログラマが色定義を変更できる場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-can-change-color.php
	 * @see ncurses_has_colors(), ncurses_init_color(), ncurses_start_color()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_can_change_color(): bool {}

	/**
	 * 入力のバッファリングをオフにする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>ncurses_cbreak()</b> は、行のバッファリングと 文字の処理(文字が影響を受けない割り込みやフロー制御)を無効にし、 ユーザーが入力した文字をすぐにプログラムに渡します。</p>
	 * @return bool <p><b><code>TRUE</code></b> を返します。エラーが発生した場合は <b><code>NCURSES_ERR</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-cbreak.php
	 * @see ncurses_nocbreak()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_cbreak(): bool {}

	/**
	 * スクリーンをクリアする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>空白を設定せず 完全に画面を消去します。</p><p>注意: <b>ncurses_clear()</b> は空白を設定せずに 画面を消去します。つまり、現在の背景の状態が残されるということです。 空白文字で画面を消去するには <code>ncurses_erase()</code> を使用します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-clear.php
	 * @see ncurses_erase()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_clear(): bool {}

	/**
	 * 現在位置から最下部までスクリーンをクリアする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>ncurses_clrtobot()</b> は、カーソル位置から 画面の最下部までのすべての行を消去し、空白で埋めます。 <b>ncurses_clrtobot()</b> で作成される空白には 現在の背景設定が使用されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-clrtobot.php
	 * @see ncurses_clear(), ncurses_clrtoeol()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_clrtobot(): bool {}

	/**
	 * 現在位置から行末までスクリーンをクリアする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>ncurses_clrtoeol()</b> は、カーソル位置から 行末までを消去し、空白で埋めます。 <b>ncurses_clrtoeol()</b> で作成される空白には 現在の背景設定が使用されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-clrtoeol.php
	 * @see ncurses_clear(), ncurses_clrtobot()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_clrtoeol(): bool {}

	/**
	 * 色の RGB 値を取得する
	 * <p>指定した色定義から赤、緑、青の各コンポーネントを取得します。 この関数をコールする前に、端末の色機能を <code>ncurses_start_color()</code> で初期化しておく必要があります。</p>
	 * @param int $color <p>情報を取得したい色の番号。定義済みの色定数のいずれかとなるでしょう。</p>
	 * @param int $r <p>赤コンポーネントの値への参照。 返される値は 0 から 1000 までの値となります。</p>
	 * @param int $g <p>緑コンポーネントの値への参照。 返される値は 0 から 1000 までの値となります。</p>
	 * @param int $b <p>青コンポーネントの値への参照。 返される値は 0 から 1000 までの値となります。</p>
	 * @return int <p>関数が成功した場合は <i>-1</i>、 ncurses や端末の色機能の初期化ができていない場合は <i>0</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-color-content.php
	 * @see ncurses_init_color(), ncurses_start_color()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_color_content(int $color, int &$r, int &$g, int &$b): int {}

	/**
	 * 前景/背景色を設定する
	 * <p>アクティブな前景色と背景色を設定します。 この関数のあとに書いたすべての文字は、指定した色となります。 この関数を使用するには、端末の色がサポートされていてかつ <code>ncurses_start_color()</code> で事前に初期化されている必要があります。</p><p>ncurses は、色ペアを使って前景色と背景色の両方を指定します。 色ペアを定義するには <code>ncurses_init_pair()</code> を使用します。</p>
	 * @param int $pair <p>アクティブな色として設定したい、前景色と背景色の色ペア。</p>
	 * @return int <p>成功した場合に <i>-1</i>、失敗した場合に <i>0</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-color-set.php
	 * @see ncurses_init_pair(), ncurses_start_color()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_color_set(int $pair): int {}

	/**
	 * カーソル状態を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $visibility
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-curs-set.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_curs_set(int $visibility): int {}

	/**
	 * 端末(プログラム)モードを保存する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><code>ncurses_reset_prog_mode()</code> で使用するために (curses 内の)プログラムの現在の端末モードを保存します。</p>
	 * @return bool <p>成功した場合に <b><code>FALSE</code></b>、それ以外の場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-def-prog-mode.php
	 * @see ncurses_reset_prog_mode()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_def_prog_mode(): bool {}

	/**
	 * 端末(シェル)モードを保存する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><code>ncurses_reset_shell_mode()</code> で使用するために (curses 内でない)シェルの現在の端末モードを保存します。</p>
	 * @return bool <p>成功した場合に <b><code>FALSE</code></b>、それ以外の場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-def-shell-mode.php
	 * @see ncurses_reset_shell_mode()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_def_shell_mode(): bool {}

	/**
	 * キーコードを定義する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $definition
	 * @param int $keycode
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-define-key.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_define_key(string $definition, int $keycode): int {}

	/**
	 * パネルをスタックから取り除き、削除する (しかし、関連付けられているウィンドウは削除しない)
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $panel
	 * @return bool
	 * @link https://php.net/manual/ja/function.ncurses-del-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_del_panel($panel): bool {}

	/**
	 * パディング文字を用いて端末出力を遅延させる
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $milliseconds
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-delay-output.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_delay_output(int $milliseconds): int {}

	/**
	 * 現在位置の文字を削除し、残った部分を左に移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>カーソルがある位置の文字を削除します。 同じ行でカーソルの右側にある文字が左側にひとつづつ移動し、 その行の最後の文字があった場所は空白で埋められます。 カーソルの位置は変わりません。</p>
	 * @return bool <p>成功した場合に <b><code>FALSE</code></b>、 それ以外の場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-delch.php
	 * @see ncurses_deleteln()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_delch(): bool {}

	/**
	 * 現在位置の行を削除し、残りの部分を上に上げる
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>カーソル位置の行を削除します。 現在の行より下の行は 1 行ずつ上に移動します。 ウィンドウの最下行はクリアされます。カーソルの位置は変わりません。</p>
	 * @return bool <p>成功した場合に <b><code>FALSE</code></b>、それ以外の場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-deleteln.php
	 * @see ncurses_delch()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_deleteln(): bool {}

	/**
	 * ncurses ウインドウを削除する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @return bool
	 * @link https://php.net/manual/ja/function.ncurses-delwin.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_delwin($window): bool {}

	/**
	 * 準備中の全ての出力を書き込み、端末をリフレッシュする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>仮想スクリーンと物理スクリーンを比較し、 物理スクリーンを更新します。リフレッシュを何度もコールするよりも、 この方法のほうが効率的です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-doupdate.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_doupdate(): bool {}

	/**
	 * キーボード入力のエコーを有効とする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>エコーモードを有効にします。 ユーザーがタイプした文字がすべて <code>ncurses_getch()</code> によってエコーされます。</p>
	 * @return bool <p>成功した場合に <b><code>FALSE</code></b>、何らかのエラーが発生した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-echo.php
	 * @see ncurses_noecho()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_echo(): bool {}

	/**
	 * リフレッシュを行いつつ 1 文字出力する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $character
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-echochar.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_echochar(int $character): int {}

	/**
	 * ncurses を終了し、画面を消去する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-end.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_end(): int {}

	/**
	 * 端末画面を消去する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>端末の画面を空白で埋めます。</p><p>作成された空白の背景処理は、<code>ncurses_bkgd()</code> で設定したものとなります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-erase.php
	 * @see ncurses_bkgd(), ncurses_clear()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_erase(): bool {}

	/**
	 * 現在の erase 文字を返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>現在の erase 文字を返します。</p>
	 * @return string <p>現在の erase 文字を文字列で返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-erasechar.php
	 * @see ncurses_killchar()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_erasechar(): string {}

	/**
	 * iniscr() および newterm() の LINES を 1 に設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.ncurses-filter.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_filter(): void {}

	/**
	 * 端末画面をフラッシュする(ビジュアルベル)
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>画面をフラッシュします。 もしそれができなかった場合は、音声の警告(ベル)を送信します。</p>
	 * @return bool <p>成功した場合に <b><code>FALSE</code></b>、そうでない場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-flash.php
	 * @see ncurses_beep()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_flash(): bool {}

	/**
	 * キーボード入力バッファをフラッシュする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>タイプされた内容のうち、 まだプログラムで読み込まれていないものををすべて捨てます。</p>
	 * @return bool <p>成功した場合に <b><code>FALSE</code></b>、それ以外の場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-flushinp.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_flushinp(): bool {}

	/**
	 * キーボードから 1 文字読み込む
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-getch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_getch(): int {}

	/**
	 * ウィンドウの大きさを返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>指定したウィンドウ <code>window</code> の水平方向・垂直方向の大きさを取得します。</p><p>変数は参照渡しとする必要があり、 ユーザーが端末の大きさを変更した際にこの変数が更新されます。</p>
	 * @param resource $window <p>調べるウィンドウ。</p>
	 * @param int $y <p>ウィンドウの高さが設定されます。</p>
	 * @param int $x <p>ウィンドウの幅が設定されます。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.ncurses-getmaxyx.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_getmaxyx($window, int &$y, int &$x): void {}

	/**
	 * マウスイベントを読みこむ
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>ncurses_getmouse()</b> は、 キューからマウスイベントを読み込みます。</p>
	 * @param array $mevent <p>イベントのオプションを指定します。 これは配列への参照として渡されます(以下の例を参照ください)。</p> <p>成功した場合、以下のキーを持つ連想配列が返されます。</p><ul> <li> <p>"id" : 複数デバイスを識別する ID。</p> </li> <li> <p>"x" : 画面上の相対的な x 位置(文字単位)。</p> </li> <li> <p>"y" : 画面上の相対的な y 位置(文字単位)。</p> </li> <li> <p>"z" : 現在はサポートされていません。</p> </li> <li> <p>"mmask" : マウスアクション。</p> </li> </ul>
	 * @return bool <p>指定したウィンドウでマウスイベントが実際に見える場合に <b><code>FALSE</code></b>、そうでない場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-getmouse.php
	 * @see ncurses_ungetmouse()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_getmouse(array &$mevent): bool {}

	/**
	 * ウィンドウ内の現在のカーソル位置を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param int $y
	 * @param int $x
	 * @return void
	 * @link https://php.net/manual/ja/function.ncurses-getyx.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_getyx($window, int &$y, int &$x): void {}

	/**
	 * 端末をハーフディレイモードにする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $tenth
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-halfdelay.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_halfdelay(int $tenth): int {}

	/**
	 * カラー端末かどうか確認する
	 * <p>端末がカラー表示機能を持つかどうかを調べます。 この関数を使用すると、端末に依存しないプログラムを書くことができます。 この関数をコールする前に、 <code>ncurses_init()</code> で ncurses を初期化しておく必要があります。</p>
	 * @return bool <p>端末がカラー表示機能を持っている場合に <b><code>TRUE</code></b>、持っていない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-has-colors.php
	 * @see ncurses_can_change_color(), ncurses_start_color()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_has_colors(): bool {}

	/**
	 * 挿入/削除機能の有無を確認する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>端末が挿入/削除機能を持つかどうかを調べます。</p>
	 * @return bool <p>端末が挿入/削除機能を持つ場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-has-ic.php
	 * @see ncurses_has_il()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_has_ic(): bool {}

	/**
	 * 行挿入/削除機能の有無を確認する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>端末が行挿入/削除機能を持つかどうかを調べます。</p>
	 * @return bool <p>端末が行挿入/削除機能を持つ場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-has-il.php
	 * @see ncurses_has_ic()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_has_il(): bool {}

	/**
	 * 端末キーボードにおいてファンクションキーの有無を調べる
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $keycode
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-has-key.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_has_key(int $keycode): int {}

	/**
	 * パネルをスタックから取り除き、見えなくする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $panel
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-hide-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_hide_panel($panel): int {}

	/**
	 * 現在位置に属性付きの文字を用いて最大 n 文字長の線を水平に描画する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $charattr
	 * @param int $n
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-hline.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_hline(int $charattr, int $n): int {}

	/**
	 * 現在位置の文字と属性を取得する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>現在位置の文字を返します。</p>
	 * @return string <p>文字を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-inch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_inch(): string {}

	/**
	 * ncurses を初期化する
	 * <p>ncurses インターフェイスを初期化します。 必ず、その他の ncurses 関数の前に使用する必要があります。</p><p>プログラムを終了する前に、必ず <code>ncurses_end()</code> をコールしなければならないことに注意しましょう。 そうしないと、端末を適切な非ビジュアルモードに戻すことができません。</p>
	 * @return void <p>値を返しません。</p>
	 * @link https://php.net/manual/ja/function.ncurses-init.php
	 * @see ncurses_end()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_init(): void {}

	/**
	 * 端末の色を定義する
	 * <p>指定した色を定義/再定義します。この関数がコールされると、 画面上に存在するその色の部分が即時に新しい定義に変わります。</p><p>色機能が端末でサポートされており、かつこの関数をコールする前に <code>ncurses_start_color()</code> で初期化されている必要があります。 さらに、端末が色の変更機能を持っている必要があります。これを調べるには <code>ncurses_can_change_color()</code> を使用します。</p>
	 * @param int $color <p>再定義したい色の番号。定義済みの色定数のいずれかとなるでしょう。</p>
	 * @param int $r <p>赤コンポーネントの値。 0 から 1000 までの値となります。</p>
	 * @param int $g <p>緑コンポーネントの値。 0 から 1000 までの値となります。</p>
	 * @param int $b <p>青コンポーネントの値。 0 から 1000 までの値となります。</p>
	 * @return int <p>関数が成功した場合は <i>-1</i>、 ncurses や端末の色機能の初期化ができていない場合、 端末に色の変更機能がない場合は <i>0</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-init-color.php
	 * @see ncurses_color_content(), ncurses_start_color()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_init_color(int $color, int $r, int $g, int $b): int {}

	/**
	 * 色ペアを定義する
	 * <p>前景色と背景色の色ペアを定義/再定義します。 色ペアが事前に初期化されている場合は、 画面が再描画されて即時に新しい定義が反映されます。</p><p>この関数をコールする前に、 <code>ncurses_start_color()</code> で色機能を初期化しておく必要があります。 最初の色ペア (色ペア <i>0</i>) はデフォルトで黒地に白となっていますが、 <code>ncurses_assume_default_colors()</code> で変更することも可能です。</p>
	 * @param int $pair <p>定義したい色ペアの番号。</p>
	 * @param int $fg <p>色ペアの前景色。 定義済みの色 のいずれか、あるいは端末に色変更機能がある場合に <code>ncurses_init_color()</code> で定義したものとなります。</p>
	 * @param int $bg <p>色ペアの背景色。 定義済みの色 のいずれか、あるいは端末に色変更機能がある場合に <code>ncurses_init_color()</code> で定義したものとなります。</p>
	 * @return int <p>関数が成功した場合は <i>-1</i>、 ncurses や端末の色機能の初期化ができていない場合は <i>0</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-init-pair.php
	 * @see ncurses_pair_content(), ncurses_start_color()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_init_pair(int $pair, int $fg, int $bg): int {}

	/**
	 * 文字を挿入し、現在位置にある文字を含む残りの行を移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $character
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-insch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_insch(int $character): int {}

	/**
	 * 現在の行の後に複数の行を挿入し、スクロールダウンする (負の数を指定すると削除し、スクロールアップする)
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $count
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-insdelln.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_insdelln(int $count): int {}

	/**
	 * 行を挿入し、残りの部分をスクロールダウンする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>現在の行の上に新しい行を挿入します。いちばん下の行は失われます。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-insertln.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_insertln(): int {}

	/**
	 * 現在位置に文字列を挿入し、残りの行を右に移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $text
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-insstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_insstr(string $text): int {}

	/**
	 * 端末画面から文字列を読み込む
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>現在の位置から行末までを読み込み、その文字数を返します。</p>
	 * @param string $buffer <p>読み込んだ文字列。文字の属性は削除されます。</p>
	 * @return int <p>文字の数を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-instr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_instr(string &$buffer): int {}

	/**
	 * Ncurses が endwin モードの場合、通常の画面出力が実行可能
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>ncurses が endwin モードであるかどうかを調べます。</p>
	 * @return bool <p><code>ncurses_end()</code> がコールされた後に 続けて <code>ncurses_wrefresh()</code> がコールされていない場合に <b><code>TRUE</code></b>、それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-isendwin.php
	 * @see ncurses_end(), ncurses_wrefresh()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_isendwin(): bool {}

	/**
	 * キーコードを有効または無効にする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $keycode
	 * @param bool $enable
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-keyok.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_keyok(int $keycode, bool $enable): int {}

	/**
	 * キーパッドを on あるいは off にする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param bool $bf
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-keypad.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_keypad($window, bool $bf): int {}

	/**
	 * 現在の行削除文字を返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>現在の行削除文字を返します。</p>
	 * @return string <p>現在の行削除文字を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-killchar.php
	 * @see ncurses_erasechar()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_killchar(): string {}

	/**
	 * 端末の説明を返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>端末の詳細な説明を返します。</p>
	 * @return string <p>端末の詳細な説明を返します。 説明は、最大 128 文字までで切り詰められます。 エラー時には <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-longname.php
	 * @see ncurses_termname()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_longname(): string {}

	/**
	 * 8 ビットのメタキー情報を有効/無効にする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param bool $_8bit
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-meta.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_meta($window, bool $_8bit): int {}

	/**
	 * 座標を変換する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @param bool $toscreen
	 * @return bool
	 * @link https://php.net/manual/ja/function.ncurses-mouse-trafo.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mouse_trafo(int &$y, int &$x, bool $toscreen): bool {}

	/**
	 * マウスボタンクリックのタイムアウトを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $milliseconds
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mouseinterval.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mouseinterval(int $milliseconds): int {}

	/**
	 * マウスオプションを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>報告されるマウスイベントを設定します。デフォルトでは、 どのマウスイベントについても報告されません。</p><p>マウスイベントは、<code>ncurses_wgetch()</code> 入力ストリーム内では <b><code>NCURSES_KEY_MOUSE</code></b> で表されます。 イベントデータを読み込んでキューからイベントを取り出すには、 <code>ncurses_getmouse()</code> をコールします。</p>
	 * @param int $newmask <p>マウスマスクオプションには、以下の定義済み定数が指定可能です。</p><ul> <li><p>NCURSES_BUTTON1_PRESSED</p></li> <li><p>NCURSES_BUTTON1_RELEASED</p></li> <li><p>NCURSES_BUTTON1_CLICKED</p></li> <li><p>NCURSES_BUTTON1_DOUBLE_CLICKED</p></li> <li><p>NCURSES_BUTTON1_TRIPLE_CLICKED</p></li> <li><p>NCURSES_BUTTON2_PRESSED</p></li> <li><p>NCURSES_BUTTON2_RELEASED</p></li> <li><p>NCURSES_BUTTON2_CLICKED</p></li> <li><p>NCURSES_BUTTON2_DOUBLE_CLICKED</p></li> <li><p>NCURSES_BUTTON2_TRIPLE_CLICKED</p></li> <li><p>NCURSES_BUTTON3_PRESSED</p></li> <li><p>NCURSES_BUTTON3_RELEASED</p></li> <li><p>NCURSES_BUTTON3_CLICKED</p></li> <li><p>NCURSES_BUTTON3_DOUBLE_CLICKED</p></li> <li><p>NCURSES_BUTTON3_TRIPLE_CLICKED</p></li> <li><p>NCURSES_BUTTON4_PRESSED</p></li> <li><p>NCURSES_BUTTON4_RELEASED</p></li> <li><p>NCURSES_BUTTON4_CLICKED</p></li> <li><p>NCURSES_BUTTON4_DOUBLE_CLICKED</p></li> <li><p>NCURSES_BUTTON4_TRIPLE_CLICKED</p></li> <li><p>NCURSES_BUTTON_SHIFT&gt;</p></li> <li><p>NCURSES_BUTTON_CTRL</p></li> <li><p>NCURSES_BUTTON_ALT</p></li> <li><p>NCURSES_ALL_MOUSE_EVENTS</p></li> <li><p>NCURSES_REPORT_MOUSE_POSITION</p></li> </ul> <p>副作用として、<code>newmask</code> にゼロを設定すると マウスポインタを消去します。ゼロ以外の値を設定すると マウスポインタが表示されます。</p>
	 * @param int $oldmask <p>以前のマウスイベントマスクの値が設定されます。</p>
	 * @return int <p>イベントを報告することができるマスクを返します。失敗した場合は <i>0</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-mousemask.php
	 * @see ncurses_getch(), ncurses_getmouse(), ncurses_ungetmouse()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mousemask(int $newmask, int &$oldmask): int {}

	/**
	 * 出力位置を移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-move.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_move(int $y, int $x): int {}

	/**
	 * 左上が [startx, starty] となるようにパネルを移動する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $panel
	 * @param int $startx
	 * @param int $starty
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-move-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_move_panel($panel, int $startx, int $starty): int {}

	/**
	 * 現在位置を移動し、文字を追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @param int $c
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvaddch.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvaddch(int $y, int $x, int $c): int {}

	/**
	 * 位置を移動し、指定長の属性付きの文字列を追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @param string $s
	 * @param int $n
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvaddchnstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvaddchnstr(int $y, int $x, string $s, int $n): int {}

	/**
	 * 位置を移動し、属性付きの文字列を追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @param string $s
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvaddchstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvaddchstr(int $y, int $x, string $s): int {}

	/**
	 * 位置を移動し、指定長の文字列を追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @param string $s
	 * @param int $n
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvaddnstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvaddnstr(int $y, int $x, string $s, int $n): int {}

	/**
	 * 位置を移動し、文字列を追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @param string $s
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvaddstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvaddstr(int $y, int $x, string $s): int {}

	/**
	 * 直ちにカーソルを移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $old_y
	 * @param int $old_x
	 * @param int $new_y
	 * @param int $new_x
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvcur.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvcur(int $old_y, int $old_x, int $new_y, int $new_x): int {}

	/**
	 * 位置を移動し、文字を削除、行の残りを左シフトする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvdelch.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvdelch(int $y, int $x): int {}

	/**
	 * 位置を移動し、新しい位置で文字を得る
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvgetch.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvgetch(int $y, int $x): int {}

	/**
	 * 位置を新しく設定し、属性付きの文字を用いて最大n文字の水平線を描画
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @param int $attrchar
	 * @param int $n
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvhline.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvhline(int $y, int $x, int $attrchar, int $n): int {}

	/**
	 * 位置を移動し、新しい位置の属性付きの文字を取得する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvinch.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvinch(int $y, int $x): int {}

	/**
	 * 位置を新しく設定し、属性付きの文字を用いて最大 n 文字の垂直線を描画する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $y
	 * @param int $x
	 * @param int $attrchar
	 * @param int $n
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvvline.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvvline(int $y, int $x, int $attrchar, int $n): int {}

	/**
	 * ウインドウの新規位置に文字列を追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param int $y
	 * @param int $x
	 * @param string $text
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-mvwaddstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_mvwaddstr($window, int $y, int $x, string $text): int {}

	/**
	 * スリープ
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $milliseconds
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-napms.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_napms(int $milliseconds): int {}

	/**
	 * 新しいパネルを作成し、それをウィンドウに関連づける
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @return resource
	 * @link https://php.net/manual/ja/function.ncurses-new-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_new_panel($window) {}

	/**
	 * 新しいパッド (window) を作成する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $rows
	 * @param int $cols
	 * @return resource
	 * @link https://php.net/manual/ja/function.ncurses-newpad.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_newpad(int $rows, int $cols) {}

	/**
	 * 新規ウインドウを作成する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>描画要素を入れるための新しいウィンドウを作成します。</p><p>端末の大きさはそれぞれ異なりいろいろな値をとる可能性があるので、 ウィンドウを追加する際には <code>ncurses_getmaxyx()</code> を使用して使用可能な領域を調べることを忘れないようにしましょう。</p>
	 * @param int $rows <p>行の数。</p>
	 * @param int $cols <p>列の数。</p>
	 * @param int $y <p>原点の y 座標。</p>
	 * @param int $x <p>原点の x 座標。</p>
	 * @return resource <p>新しいウィンドウのリソース ID を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-newwin.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_newwin(int $rows, int $cols, int $y, int $x) {}

	/**
	 * 改行と復改/ラインフィードを変換する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.ncurses-nl.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_nl(): bool {}

	/**
	 * 端末を cooked モードに変更する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>端末を通常モード (cooked モード) に戻します。モードが継承されている場合、端末の 書記モードは cbreak モードであったりそうでなかったりするかもしれません。 そのため、プログラムでは <code>ncurses_cbreak()</code> および <b>ncurses_nocbreak()</b> を明示的にコールすべきです。</p>
	 * @return bool <p>何らかのエラーが発生した場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-nocbreak.php
	 * @see ncurses_cbreak()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_nocbreak(): bool {}

	/**
	 * キーボード入力エコーを無効にする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>ユーザーが入力した文字のエコーを無効にします。</p>
	 * @return bool <p>何らかのエラーが発生した場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-noecho.php
	 * @see ncurses_echo(), ncurses_getch()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_noecho(): bool {}

	/**
	 * 改行と復改/ラインフィードを変換しない
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.ncurses-nonl.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_nonl(): bool {}

	/**
	 * シグナル文字のフラッシュを無効とする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.ncurses-noqiflush.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_noqiflush(): void {}

	/**
	 * 端末を raw モード以外に変更する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>端末を raw モード以外に変更します。row モードは cbreak モードと似ており、 タイプされた文字はすぐにプログラムへ渡されます。違う点は、 raw モードの場合は 中断 (interrupt)、終了 (quit)、停止 (suspend) およびフロー制御文字もそのまま渡され、シグナルは発生しないということです。</p>
	 * @return bool <p>何らかのエラーが発生した場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-noraw.php
	 * @see ncurses_raw(), ncurses_cbreak(), ncurses_nocbreak()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_noraw(): bool {}

	/**
	 * 色ペアの前景色と背景色を取得する
	 * <p>指定した色ペアの前景色と背景色を取得します。この関数をコールする前に、 <code>ncurses_start_color()</code> で端末の色機能を初期化しておく必要があります。</p>
	 * @param int $pair <p>情報を取得したい色ペアの番号。</p>
	 * @param int $f <p>色ペアの前景色への参照。返される情報は、 定義済みの色 を指す色番号か、端末が色の変更機能をサポートしている場合に <code>ncurses_init_color()</code> で定義した色となります。</p>
	 * @param int $b <p>色ペアの背景色への参照。返される情報は、 定義済みの色 を指す色番号か、端末が色の変更機能をサポートしている場合に <code>ncurses_init_color()</code> で定義した色となります。</p>
	 * @return int <p>関数が成功した場合は <i>-1</i>、 ncurses や端末の色機能の初期化ができていない場合は <i>0</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-pair-content.php
	 * @see ncurses_init_pair(), ncurses_start_color()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_pair_content(int $pair, int &$f, int &$b): int {}

	/**
	 * パネルの上のパネルを返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $panel
	 * @return resource <p>パネルが null の場合は、スタックの最下部のパネルを返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-panel-above.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_panel_above($panel) {}

	/**
	 * パネルの下のパネルを返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $panel
	 * @return resource
	 * @link https://php.net/manual/ja/function.ncurses-panel-below.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_panel_below($panel) {}

	/**
	 * パネルに関連付けられたウィンドウを返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $panel
	 * @return resource
	 * @link https://php.net/manual/ja/function.ncurses-panel-window.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_panel_window($panel) {}

	/**
	 * パッドから仮想画面にリージョンをコピーする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $pad
	 * @param int $pminrow
	 * @param int $pmincol
	 * @param int $sminrow
	 * @param int $smincol
	 * @param int $smaxrow
	 * @param int $smaxcol
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-pnoutrefresh.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_pnoutrefresh($pad, int $pminrow, int $pmincol, int $sminrow, int $smincol, int $smaxrow, int $smaxcol): int {}

	/**
	 * パッドから仮想画面にリージョンをコピーする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $pad
	 * @param int $pminrow
	 * @param int $pmincol
	 * @param int $sminrow
	 * @param int $smincol
	 * @param int $smaxrow
	 * @param int $smaxcol
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-prefresh.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_prefresh($pad, int $pminrow, int $pmincol, int $sminrow, int $smincol, int $smaxrow, int $smaxcol): int {}

	/**
	 * パディング情報を文字列に適用し、それを出力する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $text
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-putp.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_putp(string $text): int {}

	/**
	 * シグナル文字のフラッシュを有効とする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.ncurses-qiflush.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_qiflush(): void {}

	/**
	 * 端末を raw モードに変更する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>端末を raw モードに変更します。row モードは cbreak モードと似ており、 タイプされた文字はすぐにプログラムへ渡されます。違う点は、raw モードの場合は 中断 (interrupt)、終了 (quit)、停止 (suspend) およびフロー制御文字もそのまま渡され、シグナルは発生しないということです。</p>
	 * @return bool <p>何らかのエラーが発生した場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-raw.php
	 * @see ncurses_noraw(), ncurses_cbreak(), ncurses_nocbreak()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_raw(): bool {}

	/**
	 * 画面をリフレッシュする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $ch
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-refresh.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_refresh(int $ch): int {}

	/**
	 * パネルに関連付けられたウィンドウを置き換える
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $panel
	 * @param resource $window
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-replace-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_replace_panel($panel, $window): int {}

	/**
	 * def_prog_mode で保存したプログラムモードをリセットする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-reset-prog-mode.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_reset_prog_mode(): int {}

	/**
	 * def_shell_mode で保存したシェルモードをリセットする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-reset-shell-mode.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_reset_shell_mode(): int {}

	/**
	 * 保存した端末モードに復帰する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>事前に <code>ncurses_savetty()</code> をコールすることによって保存しておいた端末モードを復元します。</p>
	 * @return bool <p>常に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-resetty.php
	 * @see ncurses_savetty()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_resetty(): bool {}

	/**
	 * 端末の状態を保存する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>現在の端末の状態を保存します。 保存された状態は、関数 <code>ncurses_resetty()</code> によって復元することが可能です。</p>
	 * @return bool <p>常に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-savetty.php
	 * @see ncurses_resetty()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_savetty(): bool {}

	/**
	 * 画面の内容をファイルにダンプする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $filename
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-scr-dump.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_scr_dump(string $filename): int {}

	/**
	 * ファイルダンプから画面を初期化する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $filename
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-scr-init.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_scr_init(string $filename): int {}

	/**
	 * ファイルダンプから画面を復帰する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $filename
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-scr-restore.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_scr_restore(string $filename): int {}

	/**
	 * ファイルダンプから画面を継承する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $filename
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-scr-set.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_scr_set(string $filename): int {}

	/**
	 * 現在位置を変更せずに画面の内容をスクロールアップまたはダウンする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $count
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-scrl.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_scrl(int $count): int {}

	/**
	 * 不可視のパネルをスタックの最上部に置き、見えるようにする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $panel
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-show-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_show_panel($panel): int {}

	/**
	 * 現在のソフトラベルキー属性を返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>現在のソフトラベルキー属性を返します。</p>
	 * @return int <p>属性を整数値で返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-slk-attr.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_attr(): int {}

	/**
	 * ソフトファンクションキーラベルの指定した属性を無効にする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $intarg
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-slk-attroff.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_attroff(int $intarg): int {}

	/**
	 * ソフトファンクションキーラベルの指定した属性を有効にする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $intarg
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-slk-attron.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_attron(int $intarg): int {}

	/**
	 * ソフトファンクションキーラベルに、指定した属性を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $intarg
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-slk-attrset.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_attrset(int $intarg): int {}

	/**
	 * 画面からソフトラベルをクリアする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>関数 <b>ncurses_slk_clear()</b> は、 画面からソフトラベルキーを消去します。</p>
	 * @return bool <p>エラー時に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-slk-clear.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_clear(): bool {}

	/**
	 * ソフトラベルキーの色を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $intarg
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-slk-color.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_color(int $intarg): int {}

	/**
	 * ソフトラベルキー関数を初期化する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>ソフトラベルキー関数を初期化します。</p><p>この関数は、必ず <code>ncurses_init()</code> あるいは <code>ncurses_newwin()</code> がコールされる前にコールする必要があります。</p>
	 * @param int $format <p><code>ncurses_init()</code> が、 最終的にソフトラベルをエミュレートするために stdscr からの線を使用する場合、 このパラメータで画面上でのラベルの配置方法を指定します。</p> <p>0 にするとラベルを 3-2-3 形式に配置し、1 にすると 4-4 形式に配置します。 また 2 にすると PC 風の 4-4-4 形式に配置しますが、それに加えて インデックスラインが作成されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-slk-init.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_init(int $format): bool {}

	/**
	 * 仮想画面にソフトラベルキーをコピーする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.ncurses-slk-noutrefresh.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_noutrefresh(): bool {}

	/**
	 * ソフトラベルキーを画面にコピーする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>ソフトラベルキーを仮想画面から実際の画面にコピーします。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-slk-refresh.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_refresh(): int {}

	/**
	 * ソフトラベルキーを復帰する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><code>ncurses_slk_clear()</code> が実行された後に ソフトラベルキーを復元します。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-slk-restore.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_restore(): int {}

	/**
	 * ファンクションキーラベルを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $labelnr
	 * @param string $label
	 * @param int $format
	 * @return bool
	 * @link https://php.net/manual/ja/function.ncurses-slk-set.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_set(int $labelnr, string $label, int $format): bool {}

	/**
	 * ncurses_slk_noutrefresh を実行する際に強制的に出力する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>次に <code>ncurses_slk_noutrefresh()</code> が実行された際に すべてのソフトラベルを強制的に出力するようにします。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-slk-touch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_slk_touch(): int {}

	/**
	 * 'standout' 属性の使用を停止する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-standend.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_standend(): int {}

	/**
	 * 'standout' 属性の使用を開始する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-standout.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_standout(): int {}

	/**
	 * 色機能を初期化する
	 * <p>ncurses の色機能を初期化します。この関数は、 <code>ncurses_init()</code> をコールした後で その他の色操作関数をコールする前に実行する必要があります。 <code>ncurses_init()</code> の直後に実行するのがよいでしょう。</p>
	 * @return int <p>成功した場合に <i>0</i>、 色テーブルの割り当てに失敗した場合や ncurses が初期化されていない場合に <i>-1</i> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-start-color.php
	 * @see ncurses_can_change_color(), ncurses_has_colors()
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_start_color(): int {}

	/**
	 * 端末でサポートされる全ての属性フラグの論理和を返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.ncurses-termattrs.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_termattrs(): bool {}

	/**
	 * 端末の(簡略)名を返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>Returns terminals shortname.</p>
	 * @return string <p>端末の簡略名を返します。 簡略名は最大 14 文字で切り詰められます。エラー時には <b><code>NULL</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-termname.php
	 * @see ncurses_longname()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_termname(): string {}

	/**
	 * 特別なキーシーケンスのタイムアウトを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $millisec
	 * @return void
	 * @link https://php.net/manual/ja/function.ncurses-timeout.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_timeout(int $millisec): void {}

	/**
	 * 可視パネルをスタックの最上部に移動する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $panel
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-top-panel.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_top_panel($panel): int {}

	/**
	 * typeahead 確認用に別のファイル記述子を指定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $fd
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-typeahead.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_typeahead(int $fd): int {}

	/**
	 * 入力ストリームに 1 文字戻す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $keycode
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-ungetch.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_ungetch(int $keycode): int {}

	/**
	 * マウスイベントをキューにプッシュする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>キューに KEY_MOUSE イベントをプッシュし、このイベントを、<code>mevent</code> で指定した状態・画面上の位置座標と関連付けます。</p>
	 * @param array $mevent <p>イベントのオプションを指定する連想配列。</p><ul> <li> <p>"id" : 複数デバイスを識別する ID。</p> </li> <li> <p>"x" : 画面上の相対的な x 位置(文字単位)。</p> </li> <li> <p>"y" : 画面上の相対的な y 位置(文字単位)。</p> </li> <li> <p>"z" : 現在はサポートされていません。</p> </li> <li> <p>"mmask" : マウスアクション</p> </li> </ul>
	 * @return bool <p>成功した場合に <b><code>FALSE</code></b>、それ以外の場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link https://php.net/manual/ja/function.ncurses-ungetmouse.php
	 * @see ncurses_getmouse()
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_ungetmouse(array $mevent): bool {}

	/**
	 * 仮想画面を再描画し、スタック内のパネルとの関係を反映させる
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void
	 * @link https://php.net/manual/ja/function.ncurses-update-panels.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_update_panels(): void {}

	/**
	 * 端末のデフォルト色をカラー ID -1 に割り付ける
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool
	 * @link https://php.net/manual/ja/function.ncurses-use-default-colors.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_use_default_colors(): bool {}

	/**
	 * 端末の大きさに関する環境情報の使用を制御する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param bool $flag
	 * @return void
	 * @link https://php.net/manual/ja/function.ncurses-use-env.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_use_env(bool $flag): void {}

	/**
	 * terminfo 記述において拡張名の使用を制御する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param bool $flag
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-use-extended-names.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_use_extended_names(bool $flag): int {}

	/**
	 * video attribute モードで、端末上に文字列を表示する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $intarg
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-vidattr.php
	 * @since PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_vidattr(int $intarg): int {}

	/**
	 * 現在位置に最大 n 文字の属性付きの文字を用いて垂直線を描画する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $charattr
	 * @param int $n
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-vline.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_vline(int $charattr, int $n): int {}

	/**
	 * ウィンドウ内の現在位置に文字を追加し、カーソルを進める
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param int $ch
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-waddch.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_waddch($window, int $ch): int {}

	/**
	 * ウィンドウ内の現在位置にテキストを出力する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param string $str
	 * @param int $n
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-waddstr.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_waddstr($window, string $str, int $n = NULL): int {}

	/**
	 * ウィンドウの属性をオフにする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param int $attrs
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wattroff.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wattroff($window, int $attrs): int {}

	/**
	 * ウィンドウの属性をオンにする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param int $attrs
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wattron.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wattron($window, int $attrs): int {}

	/**
	 * ウィンドウの属性を設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param int $attrs
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wattrset.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wattrset($window, int $attrs): int {}

	/**
	 * 属性文字を使用してウィンドウの周囲に線を描画する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><code>window</code> で指定したウィンドウの周囲を指定した線と角で囲みます。</p><p>メインウィンドウの周囲を囲むには、<code>ncurses_border()</code> を使用します。</p>
	 * @param resource $window <p>操作するウィンドウ。</p>
	 * @param int $left
	 * @param int $right
	 * @param int $top
	 * @param int $bottom
	 * @param int $tl_corner <p>左上隅。</p>
	 * @param int $tr_corner <p>右上隅。</p>
	 * @param int $bl_corner <p>左下隅。</p>
	 * @param int $br_corner <p>右下隅。</p>
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wborder.php
	 * @see ncurses_border()
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wborder($window, int $left, int $right, int $top, int $bottom, int $tl_corner, int $tr_corner, int $bl_corner, int $br_corner): int {}

	/**
	 * ウィンドウをクリアする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wclear.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wclear($window): int {}

	/**
	 * ウィンドウの色の組み合わせを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param int $color_pair
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wcolor-set.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wcolor_set($window, int $color_pair): int {}

	/**
	 * ウィンドウを消去する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-werase.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_werase($window): int {}

	/**
	 * キーボート (ウィンドウ) から文字を読み込む
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wgetch.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wgetch($window): int {}

	/**
	 * 指定した属性文字を用いて、最大 n 文字分の長さの水平線を ウィンドウに描画する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param int $charattr
	 * @param int $n
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-whline.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_whline($window, int $charattr, int $n): int {}

	/**
	 * ウィンドウ/標準画面の座標系を変換する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param int $y
	 * @param int $x
	 * @param bool $toscreen
	 * @return bool
	 * @link https://php.net/manual/ja/function.ncurses-wmouse-trafo.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wmouse_trafo($window, int &$y, int &$x, bool $toscreen): bool {}

	/**
	 * ウィンドウの出力位置を移動する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param int $y
	 * @param int $x
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wmove.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wmove($window, int $y, int $x): int {}

	/**
	 * ウィンドウを仮想画面にコピーする
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wnoutrefresh.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wnoutrefresh($window): int {}

	/**
	 * 端末画面のウインドウをリフレッシュする
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wrefresh.php
	 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wrefresh($window): int {}

	/**
	 * ウィンドウの standout モードを終了する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wstandend.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wstandend($window): int {}

	/**
	 * ウィンドウの standout モードに入る
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wstandout.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wstandout($window): int {}

	/**
	 * 指定した属性文字を用いて、最大 n 文字分の長さの垂直線を ウィンドウに描画する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $window
	 * @param int $charattr
	 * @param int $n
	 * @return int
	 * @link https://php.net/manual/ja/function.ncurses-wvline.php
	 * @since PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL ncurses >= 1.0.0
	 */
	function ncurses_wvline($window, int $charattr, int $n): int {}

}
