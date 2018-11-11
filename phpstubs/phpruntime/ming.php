<?php



/**
 * <p>SWFAction.</p>
 * @link http://php.net/manual/ja/class.swfaction.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFAction {

	/**
	 * 新しい SWFAction を作成する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>新しい SWFAction を作成し、その内部の <code>script</code> をコンパイルします。</p>
	 * @param string $script <p>この SWFAction に関連付ける ActionScript。 詳細は SWFAction を参照ください。</p>
	 * @return self
	 * @link http://php.net/manual/ja/swfaction.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct(string $script) {}
}

/**
 * <p>SWFBitmap.</p>
 * @link http://php.net/manual/ja/class.swfbitmap.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFBitmap {

	/**
	 * ビットマップオブジェクトを読み込む
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>新しい SWFBitmap オブジェクトを、指定した <code>file</code> から作成します。</p>
	 * @param mixed $file <p></p>  <p><b>注意</b>:</p> <p>baseline (frame 0) jpeg にのみ対応しています。baseline を最適化した jpeg やプログレッシブ jpeg には対応していません!</p>  <p>png 画像を直接読み込むことはできません。png2dbl を使用して、png から dbl ("define bits lossless") ファイルを作成する必要があります。 この理由は、ming に png ライブラリの依存性を持ち込みたくないからです。 これは autoconf が解決すべき問題ですが、いまのところ解決されていません。</p>
	 * @param mixed $alphafile <p>JPEG 画像のアルファマスクとして使用する MSK ファイル。</p>
	 * @return self
	 * @link http://php.net/manual/ja/swfbitmap.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct($file, $alphafile = NULL) {}

	/**
	 * ビットマップの高さを返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>ビットマップの高さを返します。</p>
	 * @return float <p>ビットマップの高さをピクセルで返します。</p>
	 * @link http://php.net/manual/ja/swfbitmap.getheight.php
	 * @see SWFBitmap::getWidth()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getHeight(): float {}

	/**
	 * ビットマップの幅を返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>ビットマップの幅を返します。</p>
	 * @return float <p>ビットマップの幅をピクセルで返します。</p>
	 * @link http://php.net/manual/ja/swfbitmap.getwidth.php
	 * @see SWFBitmap::getHeight()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getWidth(): float {}
}

/**
 * <p>SWFButton.</p>
 * @link http://php.net/manual/ja/class.swfbutton.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFButton {

	/**
	 * 新しいボタンを作成する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>新しいボタンを作成します。</p>
	 * @return self
	 * @link http://php.net/manual/ja/swfbutton.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct() {}

	/**
	 * ボタンに音を関連付ける
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \SWFSound $sound
	 * @param int $flags
	 * @return SWFSoundInstance
	 * @link http://php.net/manual/ja/swfbutton.addasound.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addASound(\SWFSound $sound, int $flags): \SWFSoundInstance {}

	/**
	 * アクションを追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>指定した <code>action</code> を、 条件を指定してボタンに追加します。</p>
	 * @param \SWFAction $action <p><code>SWFAction::__construct()</code> が返す SWFAction。</p>
	 * @param int $flags <p>以下のいずれかを指定します。 <b><code>SWFBUTTON_MOUSEOVER</code></b>、 <b><code>SWFBUTTON_MOUSEOUT</code></b>、 <b><code>SWFBUTTON_MOUSEUP</code></b>、 <b><code>SWFBUTTON_MOUSEUPOUTSIDE</code></b>、 <b><code>SWFBUTTON_MOUSEDOWN</code></b>、 <b><code>SWFBUTTON_DRAGOUT</code></b> および <b><code>SWFBUTTON_DRAGOVER</code></b>。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfbutton.addaction.php
	 * @see SWFButton::addShape()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addAction(\SWFAction $action, int $flags): void {}

	/**
	 * ボタンに図形を追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>指定した <code>shape</code> をボタンに追加します。</p>
	 * @param \SWFShape $shape <p>SWFShape のインスタンス。</p>
	 * @param int $flags <p>以下のいずれかを指定します。 <b><code>SWFBUTTON_UP</code></b>、 <b><code>SWFBUTTON_OVER</code></b>、 <b><code>SWFBUTTON_DOWN</code></b> および <b><code>SWFBUTTON_HIT</code></b>。</p> <p><b><code>SWFBUTTON_HIT</code></b> は表示されず、 ボタンのヒット領域を定義します。つまり、 その図形が描画された範囲が、ボタンの "押せる" 部分となります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfbutton.addshape.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addShape(\SWFShape $shape, int $flags): void {}

	/**
	 * アクションを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>ボタンがクリックされたときに実行されるアクションを設定します。</p><p>これは、<code>SWFButton::addAction()</code> にフラグ <b><code>SWFBUTTON_MOUSEUP</code></b> を指定してコールするのと同じです。</p>
	 * @param \SWFAction $action <p><code>SWFAction::__construct()</code> が返す SWFAction。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfbutton.setaction.php
	 * @see SWFButton::addAction()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setAction(\SWFAction $action): void {}

	/**
	 * addShape(shape, SWFBUTTON_DOWN) のエイリアス
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfbutton::setdown()</b> は addShape(shape, SWFBUTTON_DOWN) のエイリアスです。</p>
	 * @link http://php.net/manual/ja/swfbutton.setdown.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	function setDown() {}

	/**
	 * addShape(shape, SWFBUTTON_HIT) のエイリアス
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfbutton::sethit()</b> は addShape(shape, SWFBUTTON_HIT) のエイリアスです。</p>
	 * @link http://php.net/manual/ja/swfbutton.sethit.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	function setHit() {}

	/**
	 * Enable track as menu button behaviour
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $flag <p>This parameter can be used for a slight different behavior of buttons. You can set it to 0 (off) or 1 (on).</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfbutton.setmenu.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setMenu(int $flag): void {}

	/**
	 * addShape(shape, SWFBUTTON_OVER) のエイリアス
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfbutton::setover()</b> は addShape(shape, SWFBUTTON_OVER) のエイリアスです。</p>
	 * @link http://php.net/manual/ja/swfbutton.setover.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	function setOver() {}

	/**
	 * addShape(shape, SWFBUTTON_UP) のエイリアス
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfbutton::setup()</b> は addShape(shape, SWFBUTTON_UP) のエイリアスです。</p>
	 * @link http://php.net/manual/ja/swfbutton.setup.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	function setUp() {}
}

/**
 * <p>SWFDisplayItem.</p>
 * @link http://php.net/manual/ja/class.swfdisplayitem.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFDisplayItem {

	/**
	 * この SWFAction を、指定した SWFSprite インスタンスに追加する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \SWFAction $action <p><code>SWFAction::__construct()</code> が返す SWFAction。</p>
	 * @param int $flags
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.addaction.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addAction(\SWFAction $action, int $flags): void {}

	/**
	 * 指定した色を、このアイテムの色変換に追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::addcolor()</b> は、指定した色を このアイテムの色変換に追加します。色は RGB 形式で指定します。</p><p>オブジェクトは <b>swfshape()</b>、 <b>swfbutton()</b>、<b>swftext()</b> あるいは <b>swfsprite()</b> となります。オブジェクトは <code>swfmovie::add()</code> を使用して追加されていなければ なりません。</p>
	 * @param int $red
	 * @param int $green
	 * @param int $blue
	 * @param int $a
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.addcolor.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addColor(int $red, int $green, int $blue, int $a = NULL): void {}

	/**
	 * MASK レイヤを定義するもうひとつの方法
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.endmask.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function endMask(): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swfdisplayitem.getrot.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getRot(): float {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swfdisplayitem.getx.php
	 * @see SWFDisplayItem::getY()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getX(): float {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swfdisplayitem.getxscale.php
	 * @see SWFDisplayItem::getYScale()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getXScale(): float {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swfdisplayitem.getxskew.php
	 * @see SWFDisplayItem::getYSkew()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getXSkew(): float {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swfdisplayitem.gety.php
	 * @see SWFDisplayItem::getX()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getY(): float {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swfdisplayitem.getyscale.php
	 * @see SWFDisplayItem::getXScale()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getYScale(): float {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swfdisplayitem.getyskew.php
	 * @see SWFDisplayItem::getXSkew()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getYSkew(): float {}

	/**
	 * オブジェクトを相対座標系で移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::move()</b> は、現在のオブジェクトを 現在位置から (<code>dx</code>,<code>dy</code>) まで移動します。</p><p>オブジェクトは <b>swfshape()</b>、 <b>swfbutton()</b>、<b>swftext()</b> あるいは <b>swfsprite()</b> となります。オブジェクトは <code>swfmovie::add()</code> を使用して追加されていなければなりません。</p>
	 * @param float $dx
	 * @param float $dy
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.move.php
	 * @see SWFDisplayItem::moveTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function move(float $dx, float $dy): void {}

	/**
	 * グローバル座標系でオブジェクトを移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::moveto()</b> は、グローバル座標系で 現在のオブジェクトを (<code>x</code>,<code>y</code>) に移動します。</p><p>オブジェクトは <b>swfshape()</b>、 <b>swfbutton()</b>、<b>swftext()</b> あるいは <b>swfsprite()</b> となります。オブジェクトは <code>swfmovie::add()</code> を使用して追加されていなければなりません。</p>
	 * @param float $x
	 * @param float $y
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.moveto.php
	 * @see SWFDisplayItem::move()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function moveTo(float $x, float $y): void {}

	/**
	 * アイテムの色変換を乗算する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::multcolor()</b> は、指定した値で アイテムの色変換を乗算します。</p><p>オブジェクトは <b>swfshape()</b>、 <b>swfbutton()</b>、<b>swftext()</b> あるいは <b>swfsprite()</b> となります。オブジェクトは <code>swfmovie::add()</code> を使用して追加されていなければ なりません。</p>
	 * @param float $red <p>赤コンポーネントの値。</p>
	 * @param float $green <p>緑コンポーネントの値。</p>
	 * @param float $blue <p>青コンポーネントの値。</p>
	 * @param float $a <p>アルファコンポーネントの値。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.multcolor.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function multColor(float $red, float $green, float $blue, float $a = NULL): void {}

	/**
	 * オブジェクトをムービーから削除する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::remove()</b> は、このオブジェクトをムービーの表示リストから削除します。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.remove.php
	 * @see SWFMovie::add()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function remove(): void {}

	/**
	 * 相対座標で回転させる
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::rotate()</b> は、現在のオブジェクトを 現在の角度から <code>ddegrees</code> 度回転させます。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @param float $angle
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.rotate.php
	 * @see SWFDisplayItem::rotateTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function rotate(float $angle): void {}

	/**
	 * グローバル座標で回転させる
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::rotateto()</b> は、 グローバル座標で、現在のオブジェクトを 現在の角度から <code>ddegrees</code> 度回転させます。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @param float $angle
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.rotateto.php
	 * @see SWFDisplayItem::rotate()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function rotateTo(float $angle): void {}

	/**
	 * 相対座標系でオブジェクトを拡大縮小する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::scale()</b> は、現在のオブジェクトを 現在の大きさから (<code>dx</code>,<code>dy</code>) に拡大縮小します。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @param float $dx
	 * @param float $dy
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.scale.php
	 * @see SWFDisplayItem::scaleTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function scale(float $dx, float $dy): void {}

	/**
	 * グローバル座標系でオブジェクトを拡大縮小する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::scaleto()</b> は、現在のオブジェクトを グローバル座標系において (<code>dx</code>,<code>dy</code>) に拡大縮小します。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @param float $x
	 * @param float $y
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.scaleto.php
	 * @see SWFDisplayItem::scale()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function scaleTo(float $x, float $y = NULL): void {}

	/**
	 * z オーダーを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::setdepth()</b> は、オブジェクトの z オーダーを <code>depth</code> に設定します。デフォルト値は インスタンスが作成された(図形/文字をムービーに追加した) 際のオーダーで、 新しく作成されたものほど前面になります。2 つのオブジェクトに同じ depth を指定した場合、後から定義したもののみが移動します。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @param int $depth
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.setdepth.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setDepth(int $depth): void {}

	/**
	 * 指定したレベルに MASK レイヤを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $level
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.setmasklevel.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setMaskLevel(int $level): void {}

	/**
	 * アイテムの変換行列を設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $a
	 * @param float $b
	 * @param float $c
	 * @param float $d
	 * @param float $x
	 * @param float $y
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.setmatrix.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setMatrix(float $a, float $b, float $c, float $d, float $x, float $y): void {}

	/**
	 * オブジェクトの名前を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::setname()</b> はオブジェクトの名前を <code>name</code> に設定します。 アクションスクリプトからこの名前を使用します。 これは、スプライトに対してのみ有用です。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @param string $name
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.setname.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setName(string $name): void {}

	/**
	 * オブジェクトの比を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::setratio()</b> は、オブジェクトの比を <code>ratio</code> に設定します。明らかに、これは morph に対してのみ有用です。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @param float $ratio
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.setratio.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setRatio(float $ratio): void {}

	/**
	 * X-skew を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::skewx()</b> は、 現在の x-skew に <code>ddegrees</code> を追加します。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @param float $ddegrees
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.skewx.php
	 * @see SWFDisplayItem::skewXTo(), SWFDisplayItem::skewY(), SWFDisplayItem::skewYTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function skewX(float $ddegrees): void {}

	/**
	 * X-skew を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::skewxto()</b> は、 現在の x-skew を <code>degrees</code> に設定します。 <code>degrees</code> を 1.0 にすると、前方 45 度の傾きを 意味します。それより大きくするとより前方に、小さくするとより後方に なります。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @param float $degrees
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.skewxto.php
	 * @see SWFDisplayItem::skewX(), SWFDisplayItem::skewY(), SWFDisplayItem::skewYTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function skewXTo(float $degrees): void {}

	/**
	 * Y-skew を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::skewy()</b> は、 現在の y-skew に <code>ddegrees</code> を追加します。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @param float $ddegrees
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.skewy.php
	 * @see SWFDisplayItem::skewYTo(), SWFDisplayItem::skewX(), SWFDisplayItem::skewXTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function skewY(float $ddegrees): void {}

	/**
	 * Y-skew を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfdisplayitem::skewyto()</b> は、 現在の y-skew を <code>degrees</code> に設定します。 <code>degrees</code> を 1.0 にすると、前方 45 度の傾きを 意味します。それより大きくするとより前方に、小さくするとより後方に なります。</p><p>オブジェクトは、<b>swfshape()</b> か <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfsprite()</b> のいずれかとなります。 これは、<code>swfmovie::add()</code> で追加されたものでなければなりません。</p>
	 * @param float $degrees
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfdisplayitem.skewyto.php
	 * @see SWFDisplayItem::skewY(), SWFDisplayItem::skewX(), SWFDisplayItem::skewXTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function skewYTo(float $degrees): void {}
}

/**
 * <p><b>SWFFill</b> オブジェクトは、ビットマップや 階調の塗りつぶしを変形 (拡大縮小する・傾ける・回転させる) します。</p>
 * <p><b>swffill</b> オブジェクトは <code>SWFShape::addFill()</code> メソッドで作成します。</p>
 * @link http://php.net/manual/ja/class.swffill.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFFill {

	/**
	 * 塗りつぶしの原点を移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>塗りつぶしの原点を、指定したグローバル座標に移動します。</p>
	 * @param float $x <p>X 座標。</p>
	 * @param float $y <p>Y 座標。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swffill.moveto.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function moveTo(float $x, float $y): void {}

	/**
	 * 塗りつぶしの回転を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>塗りつぶしの回転を <code>degrees</code> 度に設定します。</p>
	 * @param float $angle <p>回転角度。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swffill.rotateto.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function rotateTo(float $angle): void {}

	/**
	 * 塗りつぶしの倍率を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>塗りつぶしの倍率を設定します。</p>
	 * @param float $x <p>X 座標。</p>
	 * @param float $y <p>Y 座標。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swffill.scaleto.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function scaleTo(float $x, float $y = NULL): void {}

	/**
	 * 塗りつぶしの x-skew を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>塗りつぶしの x-skew を <code>x</code> に設定します。</p>
	 * @param float $x <p><code>x</code> を 1.0 にすると、前方 45 度の傾きを意味します。 それより大きくするとより前方に、小さくするとより後方になります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swffill.skewxto.php
	 * @see SWFFill::skewYTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function skewXTo(float $x): void {}

	/**
	 * 塗りつぶしの y-skew を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>塗りつぶしの y-skew を <code>y</code> に設定します。</p>
	 * @param float $y <p><code>y</code> を 1.0 にすると、前方 45 度の傾きを意味します。 それより大きくするとより前方に、小さくするとより後方になります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swffill.skewyto.php
	 * @see SWFFill::skewXTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function skewYTo(float $y): void {}
}

/**
 * <p><b>SWFFont</b> オブジェクトは、フォント定義への参照を表します。 これは <code>SWFText::setFont()</code> および <code>SWFTextField::setFont()</code> で使用します。</p>
 * @link http://php.net/manual/ja/class.swffont.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFFont {

	/**
	 * フォント定義を読み込む
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><code>filename</code> が、FDBファイルの名前 (すなわち、 ".fdb" で終る) の場合、このファイル中のフォントの定義を読み込みます。 そうでない場合、ブラウザで定義されたフォントリファレンスを作成します。</p><p>FDB ("font definition block") は、フォントに関する詳細な情報が 記述されている SWF DefineFont2 ブロック用の非常に簡単なラッパーです。 FDB ファイルは、ming の配布ファイルの util ディレクトリにある 付属の makefdb ユーティリティにより SWF ジェネレータ テンプレートファイルから作成することが可能です。</p><p>ブラウザで定義されたフォントには、フォント名以外のフォント情報が含まれていません。 フォント定義は、ムービープレイヤーに提供されると仮定します。 フォント _serif, _sans, _typewriter は、常に使用可能です。 例えば、</p><p></p>
	 * @param string $filename
	 * @return self
	 * @link http://php.net/manual/ja/swffont.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct(string $filename) {}

	/**
	 * フォントの ascent (ベースライン上部の高さ) あるいは取得できない場合は 0 を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swffont.getascent.php
	 * @see SWFFont::getDescent()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getAscent(): float {}

	/**
	 * フォントの descent (ベースライン下部の深さ) あるいは取得できない場合は 0 を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swffont.getdescent.php
	 * @see SWFFont::getAscent()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getDescent(): float {}

	/**
	 * フォントの leading (行間) あるいは取得できない場合は 0 を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swffont.getleading.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getLeading(): float {}

	/**
	 * 指定した文字のグリフを文字列で返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $code
	 * @return string
	 * @link http://php.net/manual/ja/swffont.getshape.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getShape(int $code): string {}

	/**
	 * このフォントにおける指定した文字列の幅を計算する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $string
	 * @return float
	 * @link http://php.net/manual/ja/swffont.getutf8width.php
	 * @see SWFFont::getWidth()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getUTF8Width(string $string): float {}

	/**
	 * 文字列の幅を返す
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swffont::getwidth()</b> は、フォントのデフォルトの 大きさを使用して文字列 <code>string</code> の幅を返します。 テキストオブジェクトの大きさを使用した、このメソッドの <b>swftext()</b> バージョンを使用したくなることもあるでしょう。</p>
	 * @param string $string
	 * @return float
	 * @link http://php.net/manual/ja/swffont.getwidth.php
	 * @see SWFFont::getUTF8Width()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getWidth(string $string): float {}
}

/**
 * <p>SWFFontChar.</p>
 * @link http://php.net/manual/ja/class.swffontchar.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFFontChar {

	/**
	 * フォントをエクスポートするために、フォントに文字を追加する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $char
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swffontchar.addchars.php
	 * @see SWFFontChar::addUTF8Chars()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addChars(string $char): void {}

	/**
	 * フォントをエクスポートするために、フォントに文字を追加する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $char
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swffontchar.addutf8chars.php
	 * @see SWFFontChar::addChars()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addUTF8Chars(string $char): void {}
}

/**
 * <p>SWFGradient.</p>
 * @link http://php.net/manual/ja/class.swfgradient.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFGradient {

	/**
	 * 傾きオブジェクトを作成する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfgradient()</b> は、新しい SWFGradient オブジェクトを作成します。</p><p>gradient にエントリを追加すると、<code>swfshape::addfill()</code> メソッドでの塗りつぶしに gradient を使用できるようになります。</p><p>SWFGradient は以下のメソッドを保持します。<code>swfgradient::addentry()</code>。</p><p>この単純な例では、黒から白への gradient を背景に、赤い円盤を その中央に描きます。</p><p><b>例1 <b>swfgradient()</b> の例</b></p>
	 * @return self
	 * @link http://php.net/manual/ja/swfgradient.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct() {}

	/**
	 * 傾きリストにエントリを追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfgradient::addentry()</b> は、gradient のリストに エントリを追加します。<code>ratio</code> は 0 から 1 までの 数値で、gradient にこの色が現れる割合を示します。 この値を増加させると、割合が増加します。</p><p><code>red</code>、<code>green</code>、<code>blue</code> は色 (RGB モード) を表します。</p>
	 * @param float $ratio
	 * @param int $red
	 * @param int $green
	 * @param int $blue
	 * @param int $alpha
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfgradient.addentry.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addEntry(float $ratio, int $red, int $green, int $blue, int $alpha = 255): void {}
}

/**
 * <p>これらのメソッドは少々変わっています。 単に newSWFMorph(shape1, shape2); とできればわかりやすいのですが、 現在は、shape2 が変形の二番目の部分を知っている必要があります (これは、描画コマンドを受け取った時点ですぐに出力を開始するからです。 そうではなく、すべてが完了してから書き出すようにすれば、かなり楽になるのですが)。</p>
 * @link http://php.net/manual/ja/class.swfmorph.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFMorph {

	/**
	 * 新規に SWFMorph オブジェクトを作成する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>新しい SWFMorph オブジェクトを作成します。</p><p>"shape tween" とも呼ばれます。これは、趣味の悪いねじれたもので コンピュータを息詰まらせてしまいます。なんと楽しいことだ!</p>
	 * @return self
	 * @link http://php.net/manual/ja/swfmorph.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct() {}

	/**
	 * 最初の図形へのハンドルを取得する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>変換の最初の図形を取得します。</p>
	 * @return SWFShape <p>SWFShape オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/swfmorph.getshape1.php
	 * @see SWFMorph::getShape2()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getShape1(): \SWFShape {}

	/**
	 * 最後の図形へのハンドルを取得する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>変換の最後の図形を取得します。</p>
	 * @return SWFShape <p>SWFShape オブジェクトを返します。</p>
	 * @link http://php.net/manual/ja/swfmorph.getshape2.php
	 * @see SWFMorph::getShape1()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getShape2(): \SWFShape {}
}

/**
 * <p><b>SWFMovie</b> は SWF ムービーを表すオブジェクトです。</p>
 * @link http://php.net/manual/ja/class.swfmovie.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFMovie {

	/**
	 * SWF バージョン 4 のムービーを表すムービーオブジェクトを作成する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>SWF ムービーを表す、新しいムービーオブジェクトを作成します。</p>
	 * @param int $version <p>必要な SWF バージョン。デフォルトは 4 です。</p>
	 * @return self
	 * @link http://php.net/manual/ja/swfmovie.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct(int $version = NULL) {}

	/**
	 * 任意の型のデータをムービーに追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>SWF オブジェクトのインスタンス <code>instance</code> を現在のムービーに追加します。</p>
	 * @param object $instance <p>SWFShape や SWFText、SWFFont などの任意の型のオブジェクトインスタンス。</p>
	 * @return mixed <p>表示可能な型 (shape、text、button、sprite) の場合、このメソッドは、 表示リスト内のオブジェクトへのハンドル SWFDisplayItem を返します。つまり、同じ図形を をムービーに複数回追加することができ、各インスタンスについて 異なったハンドルを得ることが可能です。</p>
	 * @link http://php.net/manual/ja/swfmovie.add.php
	 * @see SWFMovie::remove()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function add(object $instance) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \SWFCharacter $char
	 * @param string $name
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfmovie.addexport.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addExport(\SWFCharacter $char, string $name): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \SWFFont $font
	 * @return mixed <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfmovie.addfont.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addFont(\SWFFont $font) {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $libswf
	 * @param string $name
	 * @return SWFSprite
	 * @link http://php.net/manual/ja/swfmovie.importchar.php
	 * @see SWFMovie::importFont()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function importChar(string $libswf, string $name): \SWFSprite {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $libswf
	 * @param string $name
	 * @return SWFFontChar
	 * @link http://php.net/manual/ja/swfmovie.importfont.php
	 * @see SWFMovie::importChar()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function importFont(string $libswf, string $name): \SWFFontChar {}

	/**
	 * フレームにラベルをつける
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $label
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfmovie.labelframe.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function labelFrame(string $label): void {}

	/**
	 * 動画の次のフレームに移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>動画の次のフレームに移動します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfmovie.nextframe.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function nextFrame(): void {}

	/**
	 * 作成したムービーを出力する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>SWFMovie を出力します。</p><p>この関数を使用する前には、 <i>Content-Type</i> HTTP ヘッダを送信し、 ムービーがブラウザで表示されるようにしておきましょう。</p>
	 * @param int $compression <p>圧縮レベルは 0 から 9 までの値で、 gzip と同様の形式で SWF の圧縮を指定します。</p> <p>このパラメータはFlash MX (6) でのみ使用可能です。</p>
	 * @return int <p>書き込んだバイト数、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/swfmovie.output.php
	 * @see SWFMovie::save(), SWFMovie::saveToFile()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function output(int $compression = NULL): int {}

	/**
	 * 表示リストからオブジェクトのインスタンスを削除する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>指定したオブジェクトのインスタンス <code>instance</code> を表示リストから削除します。</p>
	 * @param object $instance
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfmovie.remove.php
	 * @see SWFMovie::add()
	 * @since PHP 5.2.1-5.3.0, PHP 7, PECL ming SVN
	 */
	public function remove(object $instance): void {}

	/**
	 * SWF ムービーをファイルに保存する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>SWF ムービーを、指定したファイル <code>filename</code> に保存します。</p>
	 * @param string $filename <p>SWF ドキュメントの保存先へのパス。</p>
	 * @param int $compression <p>圧縮レベルは 0 から 9 までの値で、 gzip と同様の形式で SWF の圧縮を指定します。</p> <p>このパラメータはFlash MX (6) でのみ使用可能です。</p>
	 * @return int <p>書き込んだバイト数、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/swfmovie.save.php
	 * @see SWFMovie::output(), SWFMovie::saveToFile()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function save(string $filename, int $compression = -1): int {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param resource $x
	 * @param int $compression <p>圧縮レベルは 0 から 9 までの値で、 gzip と同様の形式で SWF の圧縮を指定します。</p> <p>このパラメータはFlash MX (6) でのみ使用可能です。</p>
	 * @return int <p>書き込んだバイト数、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/swfmovie.savetofile.php
	 * @see SWFMovie::output(), SWFMovie::save()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function saveToFile($x, int $compression = -1): int {}

	/**
	 * ムービーの幅と高さを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>ムービーの大きさを、指定した幅 <code>width</code> と高さ <code>height</code> に設定します。</p>
	 * @param float $width <p>ムービーの幅。</p>
	 * @param float $height <p>ムービーの高さ。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfmovie.setdimension.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setDimension(float $width, float $height): void {}

	/**
	 * 動画の総フレーム数を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>動画の総フレーム数を <code>number</code> に設定します。</p>
	 * @param int $number <p>フレームの数。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfmovie.setframes.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setFrames(int $number): void {}

	/**
	 * 動画のフレームレートを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>動画のフレームレートを <code>rate</code> に設定します。</p><p>プレイヤーがフレームを処理しきれない場合は、 アニメーションの速度が低下します。ただし、ストリーミング音声が 存在する場合は、音飛びを防ぐためにフレームが間引かれます。</p>
	 * @param float $rate <p>フレームレート。一秒あたりのフレーム数です。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfmovie.setrate.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setRate(float $rate): void {}

	/**
	 * 背景色を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>背景色を設定します。</p><p>なで rgba 版がないのでしょうか&#63; 考えても見てください。 HTML の背景を表示させたいこともあるでしょう。 その方法はあるのですが、IE4 でしか動作しません。詳細は » http://www.macromedia.com/ で検索してください。</p>
	 * @param int $red <p>赤コンポーネントの値。</p>
	 * @param int $green <p>緑コンポーネントの値。</p>
	 * @param int $blue <p>青コンポーネントの値。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfmovie.setbackground.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setbackground(int $red, int $green, int $blue): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \SWFSound $sound
	 * @return SWFSoundInstance
	 * @link http://php.net/manual/ja/swfmovie.startsound.php
	 * @see SWFMovie::stopSound()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function startSound(\SWFSound $sound): \SWFSoundInstance {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \SWFSound $sound
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfmovie.stopsound.php
	 * @see SWFMovie::startSound()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function stopSound(\SWFSound $sound): void {}

	/**
	 * MP3 ファイルをストリーム再生する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>指定した MP3 ファイル <code>mp3file</code> をストリーム再生します。</p><p>異常なデータに対する耐性は十分ではありません (最初の ID3 タグは読み飛ばしますが、その程度です)。</p><p>ムービーはそれほど賢くないので、mp3 ストリーム全体を含めるには 必要なだけの (曲の長さ &#42; 一秒あたりのフレーム数) フレームを用意する必要があります。</p>
	 * @param mixed $mp3file <p><code>fopen()</code> が返すファイルポインタ、 あるいはバイナリ文字列で指定した MP3 データ。</p>
	 * @param float $skip <p>スキップする秒数。</p>
	 * @return int <p>フレームの数を返します。</p>
	 * @link http://php.net/manual/ja/swfmovie.streammp3.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function streamMP3($mp3file, float $skip = 0): int {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfmovie.writeexports.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function writeExports(): void {}
}

/**
 * <p>SWFPrebuiltClip.</p>
 * @link http://php.net/manual/ja/class.swfprebuiltclip.php
 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
 */
class SWFPrebuiltClip {

	/**
	 * SWFPrebuiltClip オブジェクトを返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param mixed $file
	 * @return self
	 * @link http://php.net/manual/ja/swfprebuiltclip.construct.php
	 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
	 */
	public function __construct($file) {}
}

/**
 * <p>SWFShape.</p>
 * @link http://php.net/manual/ja/class.swfshape.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFShape {

	/**
	 * 新しい図形オブジェクトを作成する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>新しい SWFShape オブジェクトを作成します。</p>
	 * @return self
	 * @link http://php.net/manual/ja/swfshape.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct() {}

	/**
	 * 塗りつぶし色を図形に追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>SWFShape::addFill()</b> は、図形の塗りつぶし形式リストに 塗りつぶしを追加します。<b>SWFShape::addFill()</b> は、 異なる三つの形式で引数を受け付けます。</p><p><code>red</code>、<code>green</code>、<code>blue</code> は (RGB モードの) 色です。</p><p>引数 <code>bitmap</code> は <b>SWFBitmap()</b> オブジェクトです。引数 <code>flags</code> は以下の定数 SWFFILL_CLIPPED_BITMAP、SWFFILL_TILED_BITMAP、SWFFILL_LINEAR_GRADIENT あるいは SWFFILL_RADIAL_GRADIENT のうちのいずれかです。 デフォルトは、SWFBitmap の場合は SWFFILL_TILED_BITMAP、 SWFGradient の場合は SWFFILL_LINEAR_GRADIENT です。</p><p>引数 <code>gradient</code> は <b>SWFGradient()</b> オブジェクトです。引数 flags は以下の定数 SWFFILL_RADIAL_GRADIENT あるいは SWFFILL_LINEAR_GRADIENT のうちの いずれかです。デフォルトは SWFFILL_LINEAR_GRADIENT で、 これは確実です。</p><p><b>SWFShape::addFill()</b> は、以下で説明する <code>SWFShape::setLeftFill()</code> および <code>SWFShape::setRightFill()</code> 関数で使用する <b>SWFFill()</b> オブジェクトを返します。</p>
	 * @param int $red
	 * @param int $green
	 * @param int $blue
	 * @param int $alpha
	 * @return SWFFill
	 * @link http://php.net/manual/ja/swfshape.addfill.php
	 * @see SWFShape::setLeftFill(), SWFShape::setRightFill()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addFill(int $red, int $green, int $blue, int $alpha = 255): \SWFFill {}

	/**
	 * 現在の位置を中心とした半径 r の円弧を、12 時の方向から時計回りに 数えた角度 startAngle から endAngle まで描く
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $r
	 * @param float $startAngle
	 * @param float $endAngle
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfshape.drawarc.php
	 * @see SWFShape::drawCircle()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function drawArc(float $r, float $startAngle, float $endAngle): void {}

	/**
	 * 現在の位置を中心とした半径 r の円を、反時計回りに描く
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $r
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfshape.drawcircle.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function drawCircle(float $r): void {}

	/**
	 * 現在の位置および指定した三つの制御点を使用して 三次ベジエ曲線を描く
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $bx
	 * @param float $by
	 * @param float $cx
	 * @param float $cy
	 * @param float $dx
	 * @param float $dy
	 * @return int
	 * @link http://php.net/manual/ja/swfshape.drawcubic.php
	 * @see SWFShape::drawCubicTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function drawCubic(float $bx, float $by, float $cx, float $cy, float $dx, float $dy): int {}

	/**
	 * 現在の位置および指定した三つの制御点を使用して 三次ベジエ曲線を描く
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $bx
	 * @param float $by
	 * @param float $cx
	 * @param float $cy
	 * @param float $dx
	 * @param float $dy
	 * @return int
	 * @link http://php.net/manual/ja/swfshape.drawcubicto.php
	 * @see SWFShape::drawCubic()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function drawCubicTo(float $bx, float $by, float $cx, float $cy, float $dx, float $dy): int {}

	/**
	 * 曲線を描く (相対座標)
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfshape::drawcurve()</b> は、 (<code>swfshape::setline()</code> で設定した現在の線スタイルを 使用して) 現在のペンの位置から相対座標 (<code>anchorx</code>,<code>anchory</code>) まで 制御点 (<code>controlx</code>,<code>controly</code>) を使用して 2 次曲線を描きます。つまり、制御点にまず向かった後で、 anchor 点までなめらかに戻ってくるということです。</p><p>6 つのパラメータを使用すると、点 (x+<code>targetdx</code>, x+<code>targetdy</code>) に向かって 制御点 (x+<code>controldx</code>, y+<code>controldy</code>) および (x+<code>anchordx</code>, y+<code>anchordy</code>) を使用して 3 次ベジエ曲線を描きます。</p>
	 * @param float $controldx
	 * @param float $controldy
	 * @param float $anchordx
	 * @param float $anchordy
	 * @param float $targetdx
	 * @param float $targetdy
	 * @return int
	 * @link http://php.net/manual/ja/swfshape.drawcurve.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function drawCurve(float $controldx, float $controldy, float $anchordx, float $anchordy, float $targetdx = NULL, float $targetdy): int {}

	/**
	 * 曲線を描く
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfshape::drawcurveto()</b> は、 (<code>swfshape::setline()</code> で設定した現在の線スタイルを 使用して) 現在のペンの位置から (<code>anchorx</code>,<code>anchory</code>) まで 制御点 (<code>controlx</code>,<code>controly</code>) を使用して 2 次曲線を描きます。つまり、制御点にまず向かった後で、 anchor 点までなめらかに戻ってくるということです。</p><p>6 つのパラメータを使用すると、点 (<code>targetx</code>, <code>targety</code>) に向かって 制御点 (<code>controlx</code>, <code>controly</code>) および (<code>anchorx</code>, <code>anchory</code>). を使用して 3 次ベジエ曲線を描きます。</p>
	 * @param float $controlx
	 * @param float $controly
	 * @param float $anchorx
	 * @param float $anchory
	 * @param float $targetx
	 * @param float $targety
	 * @return int
	 * @link http://php.net/manual/ja/swfshape.drawcurveto.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function drawCurveTo(float $controlx, float $controly, float $anchorx, float $anchory, float $targetx = NULL, float $targety): int {}

	/**
	 * 指定したフォントのグリフ定義を使用して、 指定した文字列の最初の文字を図形の中に描く
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \SWFFont $font
	 * @param string $character
	 * @param int $size
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfshape.drawglyph.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function drawGlyph(\SWFFont $font, string $character, int $size = NULL): void {}

	/**
	 * 線を描く (相対座標)
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfshape::drawline()</b> は、 (<code>swfshape::setline()</code> で設定した現在の線スタイルを 使用して) 現在のペンの位置から (<code>dx</code>,<code>dy</code>) まで直線を描きます。</p>
	 * @param float $dx
	 * @param float $dy
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfshape.drawline.php
	 * @see SWFShape::drawLineTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function drawLine(float $dx, float $dy): void {}

	/**
	 * 線を描く
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfshape::drawlineto()</b> は、 (<code>swfshape::setline()</code> で設定した現在の線スタイルを 使用して) 現在のペンの位置から (<code>x</code>,<code>y</code>) まで 図形の座標空間で直線を描きます。</p>
	 * @param float $x
	 * @param float $y
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfshape.drawlineto.php
	 * @see SWFShape::drawLine()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function drawLineTo(float $x, float $y): void {}

	/**
	 * 図形のペンを移動する(相対座標)
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><code>swfshape::setrightfill()</code> は、図形のペンを 図形の座標空間で (現在の x,現在の y) から (現在の x + <code>dx</code>, 現在の y + <code>dy</code>) まで移動します。</p>
	 * @param float $dx
	 * @param float $dy
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfshape.movepen.php
	 * @see SWFShape::movePenTo()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function movePen(float $dx, float $dy): void {}

	/**
	 * 図形のペンを移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><code>swfshape::setrightfill()</code> は、図形のペンを 図形の座標空間で (<code>x</code>,<code>y</code>) に移動します。</p>
	 * @param float $x
	 * @param float $y
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfshape.movepento.php
	 * @see SWFShape::movePen()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function movePenTo(float $x, float $y): void {}

	/**
	 * 左ラスタ色を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>何とナンセンスなことに、すべての輪郭には最大 2 つまでの塗りつぶししか 接することができません。オブジェクトをラスタライズする際に、 どの塗りつぶしがあるかを早めに知っておくと便利です。 そのため swf フォーマットではこれらを指定する必要があるのです。</p><p><b>swfshape::setleftfill()</b> は、輪郭の左側の塗りつぶしを 設定します - これは、もし図形を反時計回りに描いているのなら、その内側を 表します。塗りつぶしオブジェクトは、上で説明した addFill 関数のひとつから 返される SWFFill オブジェクトです。</p><p>図形を morph の中にいれている場合、これは反転しているように見えます。 もしブラウザがクラッシュしたら、反対側の塗りつぶしを試してみてください。</p><p><i>swfshape::setleftfill($s-&gt;addfill($r, $g, $b [, $a]));</i> の短縮表記です。</p>
	 * @param \SWFGradient $fill
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfshape.setleftfill.php
	 * @see SWFShape::setRightFill()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setLeftFill(\SWFGradient $fill): void {}

	/**
	 * 図形の線種を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfshape::setline()</b> は、図形の線種を設定します。 <code>width</code> は線の幅です。<code>width</code> が 0 の場合は線種は削除されます (そして、他のすべての引数が無視されます)。 <code>width</code> &gt; 0 の場合、線の色が <code>red</code>、<code>green</code>、<code>blue</code> で設定されます。最後のパラメータ <code>a</code> は オプションです。</p><p>使用したい線種は、使用する前にすべて定義しておく必要があります (例を参照ください)。</p>
	 * @param \SWFShape $shape
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfshape.setline.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setLine(\SWFShape $shape): void {}

	/**
	 * 右ラスタ色を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><i>$swfshape-&gt;setrightfill($s-&gt;addfill($r, $g, $b [, $a]));</i> の短縮表記です。</p>
	 * @param \SWFGradient $fill
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfshape.setrightfill.php
	 * @see SWFShape::setLeftFill()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setRightFill(\SWFGradient $fill): void {}
}

/**
 * <p>SWFSound.</p>
 * @link http://php.net/manual/ja/class.swfsound.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFSound {

	/**
	 * 指定したファイルから、新しい SWFSound オブジェクトを返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $filename
	 * @param int $flags
	 * @return self
	 * @link http://php.net/manual/ja/swfsound.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct(string $filename, int $flags = 0) {}
}

/**
 * <p><b>SWFSoundInstance</b> オブジェクトは <code>SWFSprite::startSound()</code> および <code>SWFMovie::startSound()</code> メソッドが返します。</p>
 * @link http://php.net/manual/ja/class.swfsoundinstance.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFSoundInstance {

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $point
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfsoundinstance.loopcount.php
	 * @see SWFSoundInstance::loopOutPoint()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function loopCount(int $point): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $point
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfsoundinstance.loopinpoint.php
	 * @see SWFSoundInstance::loopOutPoint()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function loopInPoint(int $point): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $point
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfsoundinstance.loopoutpoint.php
	 * @see SWFSoundInstance::loopInPoint()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function loopOutPoint(int $point): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfsoundinstance.nomultiple.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function noMultiple(): void {}
}

/**
 * <p><b>SWFSprite</b> は "ムービークリップ" ともいいます。これにより、作成したオブジェクトを 時間軸にそって動かすことができるようになります。 したがって、スプライトはムービーのメソッドの大半を保持しています。</p>
 * @link http://php.net/manual/ja/class.swfsprite.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFSprite {

	/**
	 * ムービークリップ (スプライト) を作成する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>新しい SWFSprite オブジェクトを作成します。</p>
	 * @return self
	 * @link http://php.net/manual/ja/swfsprite.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct() {}

	/**
	 * オブジェクトをスプライトに追加する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfsprite::add()</b> は、<b>swfshape()</b>・ <b>swfbutton()</b>・<b>swftext()</b>・ <b>swfaction()</b> あるいは <b>swfsprite()</b> オブジェクトを追加します。</p><p>表示可能な型 (<b>swfshape()</b>、 <b>swfbutton()</b>、<b>swftext()</b>、 <b>swfaction()</b> あるいは <b>swfsprite()</b>) の場合、この関数は表示リスト内でのオブジェクトのハンドルを返します。</p>
	 * @param object $object
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfsprite.add.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function add(object $object): void {}

	/**
	 * フレームにラベルをつける
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $label
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfsprite.labelframe.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function labelFrame(string $label): void {}

	/**
	 * 動画の次のフレームに移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><code>swfsprite::setframes()</code> は、動画の次のフレームに移動します。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfsprite.nextframe.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function nextFrame(): void {}

	/**
	 * オブジェクトをスプライトから削除する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfsprite::remove()</b> は、スプライトから <b>swfshape()</b>・ <b>swfbutton()</b>・<b>swftext()</b>・ <b>swfaction()</b> あるいは <b>swfsprite()</b> オブジェクトを削除します。</p>
	 * @param object $object
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfsprite.remove.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function remove(object $object): void {}

	/**
	 * 動画の総フレーム数を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swfsprite::setframes()</b> は、 動画の総フレーム数を <code>numberofframes</code> に設定します。</p>
	 * @param int $number
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfsprite.setframes.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setFrames(int $number): void {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \SWFSound $sount
	 * @return SWFSoundInstance
	 * @link http://php.net/manual/ja/swfsprite.startsound.php
	 * @see SWFSprite::stopSound()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function startSound(\SWFSound $sount): \SWFSoundInstance {}

	/**
	 * 
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \SWFSound $sount
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfsprite.stopsound.php
	 * @see SWFSprite::startSound()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function stopSound(\SWFSound $sount): void {}
}

/**
 * <p>SWFText.</p>
 * @link http://php.net/manual/ja/class.swftext.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFText {

	/**
	 * 新しい SWFText オブジェクトを作成する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>新しい SWFText オブジェクトを作成します。</p>
	 * @return self
	 * @link http://php.net/manual/ja/swftext.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct() {}

	/**
	 * 文字列を描画する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftext::addstring()</b> は、文字列 <code>string</code> を現在のペン (カーソル) の位置に描画します。 ペンの位置は、テキストのベースラインとなります。 つまり、ベースラインより上のあるテキストは -y 方向に配置されます。</p>
	 * @param string $string
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftext.addstring.php
	 * @see SWFText::addUTF8String()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addString(string $string): void {}

	/**
	 * 現在のペンの位置に、現在のフォント・高さ・行間および色設定を使用して 指定したテキストで SWFText オブジェクトを作成する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $text
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftext.addutf8string.php
	 * @see SWFText::addString()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addUTF8String(string $text): void {}

	/**
	 * 現在のサイズにおけるフォントの ascent (ベースライン上部の高さ) あるいは取得できない場合は 0 を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swftext.getascent.php
	 * @see SWFText::getDescent()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getAscent(): float {}

	/**
	 * 現在のサイズにおけるフォントの descent (ベースライン下部の深さ) あるいは取得できない場合は 0 を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swftext.getdescent.php
	 * @see SWFText::getAscent()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getDescent(): float {}

	/**
	 * 現在のサイズにおけるフォントの leading (行間) あるいは取得できない場合は 0 を返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float
	 * @link http://php.net/manual/ja/swftext.getleading.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getLeading(): float {}

	/**
	 * Calculates the width of the given string in this text objects current font and size
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $string
	 * @return float
	 * @link http://php.net/manual/ja/swftext.getutf8width.php
	 * @see SWFText::getWidth()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getUTF8Width(string $string): float {}

	/**
	 * 文字列の幅を計算する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>テキストオブジェクトの 現在のフォント・大きさ・間隔における文字列 <code>string</code> の幅を計算して返します。</p>
	 * @param string $string
	 * @return float
	 * @link http://php.net/manual/ja/swftext.getwidth.php
	 * @see SWFText::getUTF8Width()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function getWidth(string $string): float {}

	/**
	 * ペンを移動する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftext::moveto()</b> は、ペン (あるいはカーソルと いったほうがわかりやすいでしょうか) を、テキストオブジェクトの座標空間で (<code>x</code>,<code>y</code>) に移動します。 しかし、両方ともゼロだった場合はどこにも移動しません。 うっとうしいので修正してほしいものです。</p>
	 * @param float $x
	 * @param float $y
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftext.moveto.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function moveTo(float $x, float $y): void {}

	/**
	 * 現在のテキスト色を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p>現在のテキスト色を変更します。</p>
	 * @param int $red <p>赤コンポーネントの値。</p>
	 * @param int $green <p>緑コンポーネントの値。</p>
	 * @param int $blue <p>青コンポーネントの値。</p>
	 * @param int $a <p>アルファコンポーネントの値。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftext.setcolor.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setColor(int $red, int $green, int $blue, int $a = 255): void {}

	/**
	 * 現在のフォントを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftext::setfont()</b> は、現在のフォントを <code>font</code> に設定します。</p>
	 * @param \SWFFont $font
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftext.setfont.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setFont(\SWFFont $font): void {}

	/**
	 * 現在のフォントの高さを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftext::setheight()</b> は、現在のフォントの高さを <code>height</code> に設定します。デフォルトは 240 です。</p>
	 * @param float $height
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftext.setheight.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setHeight(float $height): void {}

	/**
	 * 現在のフォントの間隔を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftext::setspacing()</b> は、現在のフォントの間隔を <code>spacing</code> に設定します。デフォルトは 1.0 です。 0 にすると、すべての文字が同じ場所に書かれます。これは実際のところ 正常に動作していません。なぜなら文字の間隔が膨らんでしまい、文字の 間に同じだけの間隔をあけることができないからです。 もうちょっとうまい説明があるとは思うのですが。 あるいは単にこれを固定の間隔にしてしまいます。 これは、ただ文字の advance がどのように働くのかを知るためだけの ものでした……。</p>
	 * @param float $spacing
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftext.setspacing.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setSpacing(float $spacing): void {}
}

/**
 * <p>SWFTextField.</p>
 * @link http://php.net/manual/ja/class.swftextfield.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
class SWFTextField {

	/**
	 * テキストフィールドのオブジェクトを作成する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield()</b> は、新しいテキストフィールドオブジェクトを 作成します。テキストフィールドは、<b>swftext()</b> オブジェクトに 比べてあまり自由度がありません - 回転もできないし、縦横比を変更する拡大縮小も できません。また傾けることもできません。しかし、テキストフィールドは フォームのエントリとして使用することが可能で、ブラウザで定義されているフォントを 使用することが可能です。</p><p>オプションのフラグでテキストフィールドの振る舞いを定義します。 以下の値が設定可能です。</p><p>SWFTextField は以下のメソッドを保持します。<code>swftextfield::setfont()</code>, <code>swftextfield::setbounds()</code>, <code>swftextfield::align()</code>, <code>swftextfield::setheight()</code>, <code>swftextfield::setleftmargin()</code>, <code>swftextfield::setrightmargin()</code>, <code>swftextfield::setmargins()</code>, <code>swftextfield::setindentation()</code>, <code>swftextfield::setlinespacing()</code>, <code>swftextfield::setcolor()</code>, <code>swftextfield::setname()</code> および <code>swftextfield::addstring()</code>。</p>
	 * @param int $flags
	 * @return self
	 * @link http://php.net/manual/ja/swftextfield.construct.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function __construct(int $flags = NULL) {}

	/**
	 * Adds characters to a font that will be available within a textfield
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $chars
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.addchars.php
	 * @see SWFTextField::addString()
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addChars(string $chars): void {}

	/**
	 * 指定した文字列をテキストフィールドに結合する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><code>swftextfield::setname()</code> は、文字列 <code>string</code> をテキストフィールドに結合します。</p>
	 * @param string $string
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.addstring.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function addString(string $string): void {}

	/**
	 * テキストフィールドの配置を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield::align()</b> は、テキストフィールドの 配置を <code>alignement</code> に設定します。 <code>alignement</code> で使用可能な値は SWFTEXTFIELD_ALIGN_LEFT、 SWFTEXTFIELD_ALIGN_RIGHT、SWFTEXTFIELD_ALIGN_CENTER および SWFTEXTFIELD_ALIGN_JUSTIFY です。</p>
	 * @param int $alignement
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.align.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function align(int $alignement): void {}

	/**
	 * テキストフィールドの幅と高さを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield::setbounds()</b> は、テキストフィールドの 幅を <code>width</code> に、そして高さを <code>height</code> に設定します。これを設定しない場合、Ming は何とか適当な大きさを 判定しようとします。</p>
	 * @param float $width
	 * @param float $height
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.setbounds.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setBounds(float $width, float $height): void {}

	/**
	 * テキストフィールドの色を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield::setcolor()</b> は、テキストフィールドの 色を設定します。デフォルトは、透明でない黒です。色は、RGB で表されます。</p>
	 * @param int $red <p>赤コンポーネントの値。</p>
	 * @param int $green <p>緑コンポーネントの値。</p>
	 * @param int $blue <p>青コンポーネントの値。</p>
	 * @param int $a <p>アルファコンポーネントの値。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.setcolor.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setColor(int $red, int $green, int $blue, int $a = 255): void {}

	/**
	 * テキストフィールドのフォントを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield::setfont()</b> は、 テキストフィールドのフォントを [ブラウザ定義の&#63;] <code>font</code> に設定します。</p>
	 * @param \SWFFont $font
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.setfont.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setFont(\SWFFont $font): void {}

	/**
	 * このテキストフィールドのフォントの高さを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield::setheight()</b> は、 このテキストフィールドのフォントの高さを <code>height</code> に設定します。デフォルトは 240 です。</p>
	 * @param float $height
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.setheight.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setHeight(float $height): void {}

	/**
	 * 最初の行の字下げを設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield::setindentation()</b> は、テキストフィールドの最初の行の字下げを <code>width</code> に設定します。</p>
	 * @param float $width
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.setindentation.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setIndentation(float $width): void {}

	/**
	 * テキストフィールドの左マージンの幅を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield::setleftmargin()</b> は、テキストフィールドの左マージンの幅を <code>width</code> に設定します。デフォルトは 0 です。</p>
	 * @param float $width
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.setleftmargin.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setLeftMargin(float $width): void {}

	/**
	 * テキストフィールドの行間を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield::setlinespacing()</b> は、テキストフィールドの行間の高さを <code>height</code> に設定します。デフォルトは 40 です。</p>
	 * @param float $height
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.setlinespacing.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setLineSpacing(float $height): void {}

	/**
	 * テキストフィールドのマージン幅を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield::setmargins()</b> は、両方のマージンを一度に指定します。せっかちな人向けです。</p>
	 * @param float $left
	 * @param float $right
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.setmargins.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setMargins(float $left, float $right): void {}

	/**
	 * 変数名を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield::setname()</b> は、このテキストフィールドの変数名を <code>name</code> に設定します。 フォームの送信やアクションスクリプトで使用します。</p>
	 * @param string $name
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.setname.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setName(string $name): void {}

	/**
	 * テキストフィールドのパディングを設定する
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $padding
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.setpadding.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setPadding(float $padding): void {}

	/**
	 * テキストフィールドの右マージンの幅を設定する
	 * <p>この関数は、 <i>実験的</i> なものです。この関数の動作・ 名前・その他ドキュメントに書かれている事項は、予告なく、将来的な PHP のリリースにおいて変更される可能性があります。 この関数は自己責任で使用してください。</p><p><b>swftextfield::setrightmargin()</b> は、テキストフィールドの右マージンの幅を <code>width</code> に設定します。デフォルトは 0 です。</p>
	 * @param float $width
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swftextfield.setrightmargin.php
	 * @since PHP 5 < 5.3.0, PECL ming SVN
	 */
	public function setRightMargin(float $width): void {}
}

/**
 * <p>SWFVideoStream.</p>
 * @link http://php.net/manual/ja/class.swfvideostream.php
 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
 */
class SWFVideoStream {

	/**
	 * SWFVideoStream オブジェクトを返す
	 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $file
	 * @return self
	 * @link http://php.net/manual/ja/swfvideostream.construct.php
	 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
	 */
	public function __construct(string $file = NULL) {}

	/**
	 * ビデオ内のフレーム数を返す
	 * <p>この関数は、SWFVideoStream のビデオフレーム数を返します。</p>
	 * @return int <p>フレーム数を整数で返します。</p>
	 * @link http://php.net/manual/ja/swfvideostream.getnumframes.php
	 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
	 */
	public function getNumFrames(): int {}

	/**
	 * ビデオの大きさを設定する
	 * <p>ストリーム再生するビデオの幅と高さを設定します。</p>
	 * @param int $x <p>幅を表すピクセル数。</p>
	 * @param int $y <p>高さを表すピクセル数。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/swfvideostream.setdimension.php
	 * @since PHP 5.0.5-5.3.0, PHP 7, PECL ming SVN
	 */
	public function setDimension(int $x, int $y): void {}
}

/**
 * keyPress(char) のアクションフラグを返す
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $char
 * @return int
 * @link http://php.net/manual/ja/function.ming-keypress.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
function ming_keypress(string $char): int {}

/**
 * 三次元の閾値を設定する
 * <p>三次ベジエ曲線を描画する際の閾値を設定します。</p>
 * @param int $threshold <p>閾値。小さいほど正確になりますが、そのぶんサイズが大きくなります。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.ming-setcubicthreshold.php
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7, PECL ming SVN
 */
function ming_setcubicthreshold(int $threshold): void {}

/**
 * Set the global scaling factor
 * <p>Sets the scale of the output SWF. Inside the SWF file, coordinates are measured in TWIPS, rather than PIXELS. There are 20 TWIPS in 1 pixel.</p>
 * @param float $scale <p>The scale to be set.</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.ming-setscale.php
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7, PECL ming SVN
 */
function ming_setscale(float $scale): void {}

/**
 * SWF 出力の圧縮を設定する
 * <p>SWF 出力の圧縮レベルを設定する。</p>
 * @param int $level <p>新しい圧縮レベル。1 から 9 までの値でなければなりません。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.ming-setswfcompression.php
 * @since PHP 5.2.1-5.3.0, PHP 7, PECL ming SVN
 */
function ming_setswfcompression(int $level): void {}

/**
 * 定数プールを使用する
 * <p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param int $use
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.ming-useconstants.php
 * @since PHP 5 < 5.3.0, PECL ming SVN
 */
function ming_useconstants(int $use): void {}

/**
 * SWF のバージョンを設定する
 * <p>ムービーで使用する SWF のバージョンを設定します。 これは Action Script の動作に影響します。</p>
 * @param int $version <p>使用する SWF のバージョン。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.ming-useswfversion.php
 * @since PHP 4 >= 4.2.0, PHP 5 < 5.3.0, PECL ming SVN
 */
function ming_useswfversion(int $version): void {}

define('MING_NEW', null);

define('MING_ZLIB', null);

define('SWFACTION_DATA', null);

define('SWFACTION_ENTERFRAME', null);

define('SWFACTION_KEYDOWN', null);

define('SWFACTION_KEYUP', null);

define('SWFACTION_MOUSEDOWN', null);

define('SWFACTION_MOUSEMOVE', null);

define('SWFACTION_MOUSEUP', null);

define('SWFACTION_ONLOAD', null);

define('SWFACTION_UNLOAD', null);

define('SWFBUTTON_DOWN', null);

define('SWFBUTTON_DRAGOUT', null);

define('SWFBUTTON_DRAGOVER', null);

define('SWFBUTTON_HIT', null);

define('SWFBUTTON_MOUSEDOWN', null);

define('SWFBUTTON_MOUSEOUT', null);

define('SWFBUTTON_MOUSEOVER', null);

define('SWFBUTTON_MOUSEUP', null);

define('SWFBUTTON_MOUSEUPOUTSIDE', null);

define('SWFBUTTON_OVER', null);

define('SWFBUTTON_UP', null);

define('SWFFILL_CLIPPED_BITMAP', null);

define('SWFFILL_LINEAR_GRADIENT', null);

define('SWFFILL_RADIAL_GRADIENT', null);

define('SWFFILL_TILED_BITMAP', null);

define('SWFTEXTFIELD_ALIGN_CENTER', null);

define('SWFTEXTFIELD_ALIGN_JUSTIFY', null);

define('SWFTEXTFIELD_ALIGN_LEFT', null);

define('SWFTEXTFIELD_ALIGN_RIGHT', null);

define('SWFTEXTFIELD_DRAWBOX', null);

define('SWFTEXTFIELD_HASLENGTH', null);

define('SWFTEXTFIELD_HTML', null);

define('SWFTEXTFIELD_MULTILINE', null);

define('SWFTEXTFIELD_NOEDIT', null);

define('SWFTEXTFIELD_NOSELECT', null);

define('SWFTEXTFIELD_PASSWORD', null);

define('SWFTEXTFIELD_WORDWRAP', null);

