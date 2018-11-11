<?php



/**
 * <p>静的なヘルパーメソッドを含むシンプルなクラスです。</p>
 * @link http://php.net/manual/ja/class.cairo.php
 * @since PECL cairo >= 0.1.0
 */
class Cairo {

	/**
	 * Retrieves the availables font types
	 * <p>オブジェクト指向型:</p><p>手続き型:</p><p>Returns an array with the available font backends</p>
	 * @return array <p>A list-type array with all available font backends.</p>
	 * @link http://php.net/manual/ja/cairo.availablefonts.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function availableFonts(): array {}

	/**
	 * Retrieves all available surfaces
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns an array with the available surface backends</p>
	 * @return array <p>A list-type array with all available surface backends.</p>
	 * @link http://php.net/manual/ja/cairo.availablesurfaces.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function availableSurfaces(): array {}

	/**
	 * Retrieves the current status as string
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Retrieves the current status as a readable string</p>
	 * @param int $status <p>A valid status code given by <code>cairo_status()</code> or <code>CairoContext::status()</code></p>
	 * @return string <p>A string containing the current status of a CairoContext object</p>
	 * @link http://php.net/manual/ja/cairo.statustostring.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function statusToString(int $status): string {}

	/**
	 * Retrives cairo's library version
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Retrieves the current version of the cairo library as an integer value</p>
	 * @return int <p>Current Cairo library version integer</p>
	 * @link http://php.net/manual/ja/cairo.version.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function version(): int {}

	/**
	 * Retrieves cairo version as string
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Retrieves the current cairo library version as a string.</p>
	 * @return string <p>Current Cairo library version string</p>
	 * @link http://php.net/manual/ja/cairo.versionstring.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function versionString(): string {}
}

/**
 * <p>列挙型のクラスで、テキストやシェイプをレンダリングするときの アンチエイリアス方式を指定します。</p>
 * @link http://php.net/manual/ja/class.cairoantialias.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoAntialias {

	/**
	 * @var integer <p>サブシステムやターゲットデバイス用のデフォルトのアンチエイリアスを使います。</p>
	 * @link http://php.net/manual/ja/class.cairoantialias.php
	 */
	const MODE_DEFAULT = 0;

	/**
	 * @var integer <p>二層のαマスクを使います。</p>
	 * @link http://php.net/manual/ja/class.cairoantialias.php
	 */
	const MODE_NONE = 1;

	/**
	 * @var integer <p>単色アンチエイリアス処理を行います (たとえば、白背景上の黒文字の場合にグレーの影を使います)。</p>
	 * @link http://php.net/manual/ja/class.cairoantialias.php
	 */
	const MODE_GRAY = 2;

	/**
	 * @var integer <p>LCD パネルなどのデバイスで、サブピクセル要素の並び順を利用したアンチエイリアス処理を行います。</p>
	 * @link http://php.net/manual/ja/class.cairoantialias.php
	 */
	const MODE_SUBPIXEL = 3;
}

/**
 * <p><b>CairoContent</b> を使って、 サーフェイスに含む内容を表します。 色情報とアルファ情報 (透明か不透明か) のどちらを含むのか、あるいは両方含むのかを表します。</p>
 * <p>注意: ここでの大きな値の狙いは、 <b>CairoContent</b> の値を <b>CairoContent</b> の値と区別できるようにしておくことです。 ユーザーがふたつの型を混同したら、実装がエラーを検出できるようにするためです。</p>
 * @link http://php.net/manual/ja/class.cairocontent.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoContent {

	/**
	 * @var integer <p>色情報だけを含みます。</p>
	 * @link http://php.net/manual/ja/class.cairocontent.php
	 */
	const COLOR = 4096;

	/**
	 * @var integer <p>アルファ情報だけを含みます。</p>
	 * @link http://php.net/manual/ja/class.cairocontent.php
	 */
	const ALPHA = 8192;

	/**
	 * @var integer <p>色とアルファの両方の情報を含みます。</p>
	 * @link http://php.net/manual/ja/class.cairocontent.php
	 */
	const COLOR_ALPHA = 12288;
}

/**
 * <p>コンテキストは、cairo での描画に使うメインオブジェクトです。 cairo で描画を行うには、 <b>CairoContext</b> を作ってから対象の CairoSurface を設定し、<b>CairoContext</b> の描画オプションを設定します。 <code>CairoContext::moveTo()</code> や <code>CairoContext::lineTo()</code> などの関数でシェイプを作成し、 <code>CairoContext::stroke()</code> や <code>CairoContext::fill()</code> でシェイプを描画します。 コンテキストをスタックにプッシュするには <code>CairoContext::save()</code> を使います。これで、現状を失わずに安全に変更できるようになります。 保存した状態を復元するには <code>CairoContext::restore()</code> を使います。</p>
 * @link http://php.net/manual/ja/class.cairocontext.php
 * @since PECL cairo >= 0.1.0
 */
class CairoContext {

	/**
	 * Creates a new CairoContext
	 * <p>Creates a new CairoContext object to draw</p>
	 * @param \CairoSurface $surface <p>A valid CairoSurface like CairoImageSurface or CairoPdfSurface</p>
	 * @return self <p>A CairoContext</p>
	 * @link http://php.net/manual/ja/cairocontext.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(\CairoSurface $surface) {}

	/**
	 * Appends a path to current path
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Appends the <code>path</code> onto the current path. The <code>path</code> may be either the return value from one of <code>CairoContext::copyPath()</code> or <code>CairoContext::copyPathFlat()</code>;</p><p>if <code>path</code> is not a valid CairoPath instance a CairoException will be thrown</p>
	 * @param \CairoPath $path <p>CairoPath object</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.appendpath.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function appendPath(\CairoPath $path): void {}

	/**
	 * Adds a circular arc
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Adds a circular arc of the given radius to the current path. The arc is centered at (<code>x</code>, <code>y</code>), begins at <code>angle1</code> and proceeds in the direction of increasing angles to end at <code>angle2</code>. If <code>angle2</code> is less than <code>angle1</code> it will be progressively increased by 2&#42;M_PI until it is greater than <code>angle1</code>. If there is a current point, an initial line segment will be added to the path to connect the current point to the beginning of the arc. If this initial line is undesired, it can be avoided by calling <code>CairoContext::newSubPath()</code> or procedural <code>cairo_new_sub_path()</code> before calling <b>CairoContext::arc()</b> or <b>cairo_arc()</b>. Angles are measured in radians. An angle of 0.0 is in the direction of the positive X axis (in user space). An angle of M_PI/2.0 radians (90 degrees) is in the direction of the positive Y axis (in user space). Angles increase in the direction from the positive X axis toward the positive Y axis. So with the default transformation matrix, angles increase in a clockwise direction. (To convert from degrees to radians, use degrees &#42; (M_PI / 180.).) This function gives the arc in the direction of increasing angles; see <code>CairoContext::arcNegative()</code> or <code>cairo_arc_negative()</code> to get the arc in the direction of decreasing angles.</p>
	 * @param float $x <p>x position</p>
	 * @param float $y <p>y position</p>
	 * @param float $radius <p>Radius of the arc</p>
	 * @param float $angle1 <p>start angle</p>
	 * @param float $angle2 <p>end angle</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.arc.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function arc(float $x, float $y, float $radius, float $angle1, float $angle2): void {}

	/**
	 * Adds a negative arc
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Adds a circular arc of the given <code>radius</code> to the current path. The arc is centered at (<code>x</code>, <code>y</code>), begins at <code>angle1</code> and proceeds in the direction of decreasing angles to end at <code>angle2</code>. If <code>angle2</code> is greater than <code>angle1</code> it will be progressively decreased by 2&#42;M_PI until it is less than <code>angle1</code>. See <code>CairoContext::arc()</code> or <code>cairo_arc()</code> for more details. This function differs only in the direction of the arc between the two angles.</p>
	 * @param float $x <p>double x position</p>
	 * @param float $y <p>double y position</p>
	 * @param float $radius <p>The radius of the desired negative arc</p>
	 * @param float $angle1 <p>Start angle of the arc</p>
	 * @param float $angle2 <p>End angle of the arc</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.arcnegative.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function arcNegative(float $x, float $y, float $radius, float $angle1, float $angle2): void {}

	/**
	 * Establishes a new clip region
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Establishes a new clip region by intersecting the current clip region with the current path as it would be filled by <code>CairoContext::fill()</code> or <code>cairo_fill()</code> and according to the current fill rule (see <code>CairoContext::setFillRule()</code> or <code>cairo_set_fill_rule()</code>).</p><p>After <b>CairoContext::clip()</b> or <b>cairo_clip()</b>, the current path will be cleared from the cairo context.</p><p>The current clip region affects all drawing operations by effectively masking out any changes to the surface that are outside the current clip region.</p><p>Calling <b>CairoContext::clip()</b> or <b>cairo_clip()</b> can only make the clip region smaller, never larger. But the current clip is part of the graphics state, so a temporary restriction of the clip region can be achieved by calling <b>CairoContext::clip()</b> or <b>cairo_clip()</b> within a <code>CairoContext::save()</code>/<code>CairoContext::restore()</code> or <code>cairo_save()</code>/<code>cairo_restore()</code> pair. The only other means of increasing the size of the clip region is <code>CairoContext::resetClip()</code> or procedural <code>cairo_reset_clip()</code>.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.clip.php
	 * @see cairo_reset_clip()
	 * @since PECL cairo >= 0.1.0
	 */
	public function clip(): void {}

	/**
	 * Computes the area inside the current clip
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Computes a bounding box in user coordinates covering the area inside the current clip.</p>
	 * @return array <p>An array containing the (float)x1, (float)y1, (float)x2, (float)y2, coordinates covering the area inside the current clip</p>
	 * @link http://php.net/manual/ja/cairocontext.clipextents.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function clipExtents(): array {}

	/**
	 * Establishes a new clip region from the current clip
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Establishes a new clip region by intersecting the current clip region with the current path as it would be filled by <b>Context.fill()</b> and according to the current FILL RULE (see <code>CairoContext::setFillRule()</code> or <code>cairo_set_fill_rule()</code>).</p><p>Unlike <code>CairoContext::clip()</code>, <b>CairoContext::clipPreserve()</b> preserves the path within the Context. The current clip region affects all drawing operations by effectively masking out any changes to the surface that are outside the current clip region.</p><p>Calling <b>CairoContext::clipPreserve()</b> can only make the clip region smaller, never larger. But the current clip is part of the graphics state, so a temporary restriction of the clip region can be achieved by calling <b>CairoContext::clipPreserve()</b> within a <code>CairoContext::save()</code>/<code>CairoContext::restore()</code> pair. The only other means of increasing the size of the clip region is <code>CairoContext::resetClip()</code>.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.clippreserve.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function clipPreserve(): void {}

	/**
	 * Retrieves the current clip as a list of rectangles
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns a list-type array with the current clip region as a list of rectangles in user coordinates</p>
	 * @return array <p>An array of user-space represented rectangles for the current clip</p><p>(The status in the list may be CAIRO_STATUS_CLIP_NOT_REPRESENTABLE to indicate that the clip region cannot be represented as a list of user-space rectangles. The status may have other values to indicate other errors.)</p>
	 * @link http://php.net/manual/ja/cairocontext.cliprectanglelist.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function clipRectangleList(): array {}

	/**
	 * Closes the current path
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Adds a line segment to the path from the current point to the beginning of the current sub-path, (the most recent point passed to <code>CairoContext::moveTo()</code>), and closes this sub-path. After this call the current point will be at the joined endpoint of the sub-path.</p><p>The behavior of close_path() is distinct from simply calling <code>CairoContext::lineTo()</code> with the equivalent coordinate in the case of stroking. When a closed sub-path is stroked, there are no caps on the ends of the sub-path. Instead, there is a line join connecting the final and initial segments of the sub-path.</p><p>If there is no current point before the call to <b>CairoContext::closePath()</b>, this function will have no effect.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.closepath.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function closePath(): void {}

	/**
	 * Emits the current page
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Emits the current page for backends that support multiple pages, but doesn’t clear it, so, the contents of the current page will be retained for the next page too. Use <code>CairoContext::showPage()</code> if you want to get an empty page after the emission.</p><p>This is a convenience function that simply calls <code>CairoSurface::copyPage()</code> on CairoContext’s target.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.copypage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function copyPage(): void {}

	/**
	 * Creates a copy of the current path
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Creates a copy of the current path and returns it to the user as a CairoPath. See CairoPath for hints on how to iterate over the returned data structure.</p><p>This function will always return a valid CairoPath object, but the result will have no data, if either of the following conditions hold:</p>
	 * @return CairoPath <p>A copy of the current CairoPath in the context</p>
	 * @link http://php.net/manual/ja/cairocontext.copypath.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function copyPath(): \CairoPath {}

	/**
	 * Gets a flattened copy of the current path
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Gets a flattened copy of the current path and returns it to the user as a CairoPath.</p><p>This function is like <code>CairoContext::copyPath()</code> except that any curves in the path will be approximated with piecewise-linear approximations, (accurate to within the current tolerance value). That is, the result is guaranteed to not have any elements of type CAIRO_PATH_CURVE_TO which will instead be replaced by a series of CAIRO_PATH_LINE_TO elements.</p>
	 * @return CairoPath <p>A copy of the current path</p>
	 * @link http://php.net/manual/ja/cairocontext.copypathflat.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function copyPathFlat(): \CairoPath {}

	/**
	 * Adds a curve
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Adds a cubic Bezier spline to the path from the current point to position <code>x3</code> ,<code>y3</code> in user-space coordinates, using <code>x1</code>, <code>y1</code> and <code>x2</code>, <code>y2</code> as the control points. After this call the current point will be <code>x3</code>, <code>y3</code>.</p><p>If there is no current point before the call to <b>CairoContext::curveTo()</b> this function will behave as if preceded by a call to <code>CairoContext::moveTo()</code> (<code>x1</code>, <code>y1</code>).</p>
	 * @param float $x1 <p>First control point in the x axis for the curve</p>
	 * @param float $y1 <p>First control point in the y axis for the curve</p>
	 * @param float $x2 <p>Second control point in x axis for the curve</p>
	 * @param float $y2 <p>Second control point in y axis for the curve</p>
	 * @param float $x3 <p>Final point in the x axis for the curve</p>
	 * @param float $y3 <p>Final point in the y axis for the curve</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.curveto.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function curveTo(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): void {}

	/**
	 * Transform a coordinate
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Transform a coordinate from device space to user space by multiplying the given point by the inverse of the current transformation matrix (CTM).</p>
	 * @param float $x <p>x value of the coordinate</p>
	 * @param float $y <p>y value of the coordinate</p>
	 * @return array <p>An array containing the x and y coordinates in the user-space</p>
	 * @link http://php.net/manual/ja/cairocontext.devicetouser.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function deviceToUser(float $x, float $y): array {}

	/**
	 * Transform a distance
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Transform a distance vector from device space to user space. This function is similar to <code>CairoContext::deviceToUser()</code> or <code>cairo_device_to_user()</code> except that the translation components of the inverse Cairo Transformation Matrix will be ignored when transforming (<code>x</code>,<code>y</code>).</p>
	 * @param float $x <p>X component of a distance vector</p>
	 * @param float $y <p>Y component of a distance vector</p>
	 * @return array <p>Returns an array with the x and y values of a distance vector in the user-space</p>
	 * @link http://php.net/manual/ja/cairocontext.devicetouserdistance.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function deviceToUserDistance(float $x, float $y): array {}

	/**
	 * Fills the current path
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>A drawing operator that fills the current path according to the current CairoFillRule, (each sub-path is implicitly closed before being filled). After <b>CairoContext::fill()</b> or <b>cairo_fill()</b>, the current path will be cleared from the CairoContext.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.fill.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function fill(): void {}

	/**
	 * Computes the filled area
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Computes a bounding box in user coordinates covering the area that would be affected, (the “inked” area), by a <code>CairoContext::fill()</code> operation given the current path and fill parameters. If the current path is empty, returns an empty rectangle (0,0,0,0). Surface dimensions and clipping are not taken into account.</p><p>Contrast with <code>CairoContext::pathExtents()</code>, which is similar, but returns non-zero extents for some paths with no inked area, (such as a simple line segment).</p><p>Note that <b>CairoContext::fillExtents()</b> must necessarily do more work to compute the precise inked areas in light of the fill rule, so <code>CairoContext::pathExtents()</code> may be more desirable for sake of performance if the non-inked path extents are desired.</p>
	 * @return array <p>An array with the coordinates of the afected area</p>
	 * @link http://php.net/manual/ja/cairocontext.fillextents.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function fillExtents(): array {}

	/**
	 * Fills and preserve the current path
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>A drawing operator that fills the current path according to the current CairoFillRule, (each sub-path is implicitly closed before being filled). Unlike <code>CairoContext::fill()</code>, <b>CairoContext::fillPreserve()</b> (Procedural <code>cairo_fill()</code>, <b>cairo_fill_preserve()</b>, respectively) preserves the path within the Context.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.fillpreserve.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function fillPreserve(): void {}

	/**
	 * Get the font extents
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Gets the font extents for the currently selected font.</p>
	 * @return array <p>An array containing the font extents for the current font.</p>
	 * @link http://php.net/manual/ja/cairocontext.fontextents.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function fontExtents(): array {}

	/**
	 * Retrives the current antialias mode
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns the current CairoAntialias mode, as set by <code>CairoContext::setAntialias()</code>.</p>
	 * @return int <p>The current CairoAntialias mode.</p>
	 * @link http://php.net/manual/ja/cairocontext.getantialias.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getAntialias(): int {}

	/**
	 * The getCurrentPoint purpose
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Gets the current point of the current path, which is conceptually the final point reached by the path so far.</p><p>The current point is returned in the user-space coordinate system. If there is no defined current point or if cr is in an error status, x and y will both be set to 0.0. It is possible to check this in advance with <code>CairoContext::hasCurrentPoint()</code>.</p><p>Most path construction functions alter the current point. See the following for details on how they affect the current point: <code>CairoContext::newPath()</code>, <code>CairoContext::newSubPath()</code>, <code>CairoContext::appendPath()</code>, <code>CairoContext::closePath()</code>, <code>CairoContext::moveTo()</code>, <code>CairoContext::lineTo()</code>, <code>CairoContext::curveTo()</code>, <code>CairoContext::relMoveTo()</code>, <code>CairoContext::relLineTo()</code>, <code>CairoContext::relCurveTo()</code>, <code>CairoContext::arc()</code>, <code>CairoContext::arcNegative()</code>, <code>CairoContext::rectangle()</code>, <code>CairoContext::textPath()</code>, <code>CairoContext::glyphPath()</code>.</p><p>Some functions use and alter the current point but do not otherwise change current path: <code>CairoContext::showText()</code>.</p><p>Some functions unset the current path and as a result, current point: <code>CairoContext::fill()</code>, <code>CairoContext::stroke()</code>.</p>
	 * @return array <p>An array containing the x (index 0) and y (index 1) coordinates of the current point.</p>
	 * @link http://php.net/manual/ja/cairocontext.getcurrentpoint.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getCurrentPoint(): array {}

	/**
	 * The getDash purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getdash.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getDash(): array {}

	/**
	 * The getDashCount purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getdashcount.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getDashCount(): int {}

	/**
	 * The getFillRule purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getfillrule.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFillRule(): int {}

	/**
	 * The getFontFace purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getfontface.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontFace(): void {}

	/**
	 * The getFontMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getfontmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontMatrix(): void {}

	/**
	 * The getFontOptions purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getfontoptions.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontOptions(): void {}

	/**
	 * The getGroupTarget purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getgrouptarget.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getGroupTarget(): void {}

	/**
	 * The getLineCap purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getlinecap.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getLineCap(): int {}

	/**
	 * The getLineJoin purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getlinejoin.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getLineJoin(): int {}

	/**
	 * The getLineWidth purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getlinewidth.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getLineWidth(): float {}

	/**
	 * The getMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getMatrix(): void {}

	/**
	 * The getMiterLimit purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getmiterlimit.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getMiterLimit(): float {}

	/**
	 * The getOperator purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getoperator.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getOperator(): int {}

	/**
	 * The getScaledFont purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getscaledfont.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getScaledFont(): void {}

	/**
	 * The getSource purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getsource.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getSource(): void {}

	/**
	 * The getTarget purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.gettarget.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getTarget(): void {}

	/**
	 * The getTolerance purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return float <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.gettolerance.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getTolerance(): float {}

	/**
	 * The glyphPath purpose
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Adds closed paths for the glyphs to the current path. The generated path if filled, achieves an effect similar to that of <b>CairoContext::showGlyphs()</b>.</p>
	 * @param array $glyphs <p>Array of glyphs</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.glyphpath.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function glyphPath(array $glyphs): void {}

	/**
	 * The hasCurrentPoint purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns whether a current point is defined on the current path. See <code>CairoContext::getCurrentPoint()</code> for details on the current point.</p>
	 * @return bool <p>Whether a current point is defined</p>
	 * @link http://php.net/manual/ja/cairocontext.hascurrentpoint.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function hasCurrentPoint(): bool {}

	/**
	 * The identityMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.identitymatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function identityMatrix(): void {}

	/**
	 * The inFill purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return bool <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.infill.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function inFill(float $x, float $y): bool {}

	/**
	 * The inStroke purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return bool <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.instroke.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function inStroke(float $x, float $y): bool {}

	/**
	 * The lineTo purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.lineto.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function lineTo(float $x, float $y): void {}

	/**
	 * The mask purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoPattern $pattern <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.mask.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function mask(\CairoPattern $pattern): void {}

	/**
	 * The maskSurface purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoSurface $surface <p>Description...</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.masksurface.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function maskSurface(\CairoSurface $surface, float $x = NULL, float $y = NULL): void {}

	/**
	 * The moveTo purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Begin a new sub-path. After this call the current point will be (x, y).</p>
	 * @param float $x <p>The x coordinate of the new position.</p>
	 * @param float $y <p>The y coordinate of the new position</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.moveto.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function moveTo(float $x, float $y): void {}

	/**
	 * The newPath purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Clears the current path. After this call there will be no path and no current point.</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/cairocontext.newpath.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function newPath(): void {}

	/**
	 * The newSubPath purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.newsubpath.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function newSubPath(): void {}

	/**
	 * The paint purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.paint.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function paint(): void {}

	/**
	 * The paintWithAlpha purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $alpha <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.paintwithalpha.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function paintWithAlpha(float $alpha): void {}

	/**
	 * The pathExtents purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.pathextents.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function pathExtents(): array {}

	/**
	 * The popGroup purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.popgroup.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function popGroup(): void {}

	/**
	 * The popGroupToSource purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.popgrouptosource.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function popGroupToSource(): void {}

	/**
	 * The pushGroup purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.pushgroup.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function pushGroup(): void {}

	/**
	 * The pushGroupWithContent purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $content <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.pushgroupwithcontent.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function pushGroupWithContent(int $content): void {}

	/**
	 * The rectangle purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @param float $width <p>Description...</p>
	 * @param float $height <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.rectangle.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function rectangle(float $x, float $y, float $width, float $height): void {}

	/**
	 * The relCurveTo purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x1 <p>Description...</p>
	 * @param float $y1 <p>Description...</p>
	 * @param float $x2 <p>Description...</p>
	 * @param float $y2 <p>Description...</p>
	 * @param float $x3 <p>Description...</p>
	 * @param float $y3 <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.relcurveto.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function relCurveTo(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): void {}

	/**
	 * The relLineTo purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.rellineto.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function relLineTo(float $x, float $y): void {}

	/**
	 * The relMoveTo purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.relmoveto.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function relMoveTo(float $x, float $y): void {}

	/**
	 * The resetClip purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.resetclip.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function resetClip(): void {}

	/**
	 * The restore purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.restore.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function restore(): void {}

	/**
	 * The rotate purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $angle <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.rotate.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function rotate(float $angle): void {}

	/**
	 * The save purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.save.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function save(): void {}

	/**
	 * The scale purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.scale.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function scale(float $x, float $y): void {}

	/**
	 * The selectFontFace purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $family <p>Description...</p>
	 * @param int $slant <p>Description...</p>
	 * @param int $weight <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.selectfontface.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function selectFontFace(string $family, int $slant = NULL, int $weight = NULL): void {}

	/**
	 * The setAntialias purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $antialias <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setantialias.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setAntialias(int $antialias = NULL): void {}

	/**
	 * The setDash purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param array $dashes <p>Description...</p>
	 * @param float $offset <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setdash.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setDash(array $dashes, float $offset = NULL): void {}

	/**
	 * The setFillRule purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $setting <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setfillrule.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setFillRule(int $setting): void {}

	/**
	 * The setFontFace purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Sets the font-face for a given context.</p>
	 * @param \CairoFontFace $fontface <p>A CairoFontFace object</p>
	 * @return void <p>No value is returned</p>
	 * @link http://php.net/manual/ja/cairocontext.setfontface.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setFontFace(\CairoFontFace $fontface): void {}

	/**
	 * The setFontMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoMatrix $matrix <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setfontmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setFontMatrix(\CairoMatrix $matrix): void {}

	/**
	 * The setFontOptions purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoFontOptions $fontoptions <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setfontoptions.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setFontOptions(\CairoFontOptions $fontoptions): void {}

	/**
	 * The setFontSize purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $size <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setfontsize.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setFontSize(float $size): void {}

	/**
	 * The setLineCap purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $setting <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setlinecap.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setLineCap(int $setting): void {}

	/**
	 * The setLineJoin purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $setting <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setlinejoin.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setLineJoin(int $setting): void {}

	/**
	 * The setLineWidth purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $width <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setlinewidth.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setLineWidth(float $width): void {}

	/**
	 * The setMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoMatrix $matrix <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setMatrix(\CairoMatrix $matrix): void {}

	/**
	 * The setMiterLimit purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $limit <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setmiterlimit.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setMiterLimit(float $limit): void {}

	/**
	 * The setOperator purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $setting <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setoperator.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setOperator(int $setting): void {}

	/**
	 * The setScaledFont purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoScaledFont $scaledfont <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setscaledfont.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setScaledFont(\CairoScaledFont $scaledfont): void {}

	/**
	 * The setSource purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoPattern $pattern <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setsource.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setSource(\CairoPattern $pattern): void {}

	/**
	 * The setSourceRGB purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $red <p>Description...</p>
	 * @param float $green <p>Description...</p>
	 * @param float $blue <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setsourcergb.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setSourceRGB(float $red, float $green, float $blue): void {}

	/**
	 * The setSourceRGBA purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $red <p>Description...</p>
	 * @param float $green <p>Description...</p>
	 * @param float $blue <p>Description...</p>
	 * @param float $alpha <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setsourcergba.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setSourceRGBA(float $red, float $green, float $blue, float $alpha): void {}

	/**
	 * The setSourceSurface purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoSurface $surface <p>Description...</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.setsourcesurface.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setSourceSurface(\CairoSurface $surface, float $x = NULL, float $y = NULL): void {}

	/**
	 * The setTolerance purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $tolerance <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.settolerance.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setTolerance(float $tolerance): void {}

	/**
	 * The showPage purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.showpage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function showPage(): void {}

	/**
	 * The showText purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $text <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.showtext.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function showText(string $text): void {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}

	/**
	 * The stroke purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.stroke.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function stroke(): void {}

	/**
	 * The strokeExtents purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.strokeextents.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function strokeExtents(): array {}

	/**
	 * The strokePreserve purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.strokepreserve.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function strokePreserve(): void {}

	/**
	 * The textExtents purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $text <p>Description...</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.textextents.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function textExtents(string $text): array {}

	/**
	 * The textPath purpose
	 * <p>オブジェクト指向型</p><p>手続き型</p><p>Adds closed paths for text to the current path. The generated path, if filled, achieves an effect similar to that of <code>CairoContext::showText()</code>.</p><p>Text conversion and positioning is done similar to <code>CairoContext::showText()</code>.</p><p>Like <code>CairoContext::showText()</code>, after this call the current point is moved to the origin of where the next glyph would be placed in this same progression. That is, the current point will be at the origin of the final glyph offset by its advance values. This allows for chaining multiple calls to <code>CairoContext::showText()</code> without having to set current point in between.</p><p>Note: The <b>CairoContext::textPath()</b> function call is part of what the cairo designers call the "toy" text API. It is convenient for short demos and simple programs, but it is not expected to be adequate for serious text-using applications. See <code>CairoContext::glyphPath()</code> for the "real" text path API in cairo.</p>
	 * @param string $string <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.textpath.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function textPath(string $string): void {}

	/**
	 * The transform purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoMatrix $matrix <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.transform.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function transform(\CairoMatrix $matrix): void {}

	/**
	 * The translate purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.translate.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function translate(float $x, float $y): void {}

	/**
	 * The userToDevice purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.usertodevice.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function userToDevice(float $x, float $y): array {}

	/**
	 * The userToDeviceDistance purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.usertodevicedistance.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function userToDeviceDistance(float $x, float $y): array {}
}

/**
 * <p>Exception class thrown by Cairo functions and methods</p>
 * @link http://php.net/manual/ja/class.cairoexception.php
 * @since PECL cairo >= 0.1.0
 */
class CairoException extends \Exception {

	/**
	 * @var string <p>例外メッセージ</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.message
	 */
	protected $message;

	/**
	 * @var int <p>例外コード</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.code
	 */
	protected $code;

	/**
	 * @var string <p>例外が作られたファイル名</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.file
	 */
	protected $file;

	/**
	 * @var int <p>例外が作られた行</p>
	 * @link http://php.net/manual/ja/class.exception.php#exception.props.line
	 */
	protected $line;

	/**
	 * 例外をコピーする
	 * <p>例外のコピーを作成しようとします。結果としてこれは Fatal エラーとなります。</p>
	 * @return void <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/exception.clone.php
	 * @since PHP 5, PHP 7
	 */
	final private function __clone() {}

	/**
	 * 例外の文字列表現
	 * <p>例外を文字列で表現したものを返します。</p>
	 * @return string <p>例外を文字列で表現したものを返します。</p>
	 * @link http://php.net/manual/ja/exception.tostring.php
	 * @since PHP 5, PHP 7
	 */
	public function __toString(): string {}

	/**
	 * 例外コードを取得する
	 * <p>例外コードを返します。</p>
	 * @return mixed <p>例外コードを整数値で返します。しかし、 Exception クラスを継承したクラスでは、違う型を返すこともあります (たとえば PDOException は文字列を返します)。</p>
	 * @link http://php.net/manual/ja/exception.getcode.php
	 * @since PHP 5, PHP 7
	 */
	final public function getCode() {}

	/**
	 * 例外が作られたファイルを取得する
	 * <p>例外が作られたファイルの名前を取得します。</p>
	 * @return string <p>例外が作られたファイルの名前を返します。</p>
	 * @link http://php.net/manual/ja/exception.getfile.php
	 * @since PHP 5, PHP 7
	 */
	final public function getFile(): string {}

	/**
	 * 例外が作られた行を取得する
	 * <p>例外が作られた行番号を取得します。</p>
	 * @return int <p>例外が作られた行番号を返します。</p>
	 * @link http://php.net/manual/ja/exception.getline.php
	 * @since PHP 5, PHP 7
	 */
	final public function getLine(): int {}

	/**
	 * 例外メッセージを取得する
	 * <p>例外メッセージを返します。</p>
	 * @return string <p>例外メッセージ文字列を返します。</p>
	 * @link http://php.net/manual/ja/exception.getmessage.php
	 * @since PHP 5, PHP 7
	 */
	final public function getMessage(): string {}

	/**
	 * 前の例外を返す
	 * <p>前に発生した例外 (<code>Exception::__construct()</code> の 3 番目の引数) を返します。</p>
	 * @return Exception <p>前に発生した Throwable、あるいはそれが存在しない場合は <b><code>NULL</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/exception.getprevious.php
	 * @since PHP 5 >= 5.3.0, PHP 7
	 */
	final public function getPrevious(): \Exception {}

	/**
	 * スタックトレースを取得する
	 * <p>例外のスタックトレースを返します。</p>
	 * @return array <p>例外のスタックトレースを配列で返します。</p>
	 * @link http://php.net/manual/ja/exception.gettrace.php
	 * @since PHP 5, PHP 7
	 */
	final public function getTrace(): array {}

	/**
	 * スタックトレースを文字列で取得する
	 * <p>例外のスタックトレースを文字列で返します。</p>
	 * @return string <p>例外のスタックトレースを文字列で返します。</p>
	 * @link http://php.net/manual/ja/exception.gettraceasstring.php
	 * @since PHP 5, PHP 7
	 */
	final public function getTraceAsString(): string {}
}

/**
 * @link http://php.net/manual/ja/class.cairoextend.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoExtend {

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairoextend.php
	 */
	const NONE = 0;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairoextend.php
	 */
	const REPEAT = 1;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairoextend.php
	 */
	const REFLECT = 2;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairoextend.php
	 */
	const PAD = 3;
}

/**
 * <p><b>CairoFillRule</b> を使って、どのパスを塗りつぶすかを選択します。 指定した塗りつぶしルールについて、ある点が塗りつぶし対象であるかどうかを判断する際には、 その点から引いた半直線がパスと交わるかどうかを調べます。 セグメントの端点を通過したりトリッキーな交差 (パスの接線になるなど) だったりしない限り、半直線はどの向きに引いてもかまいません (実際の塗りつぶしの実装がこうなっているわけではないことに注意しましょう。 単に、適用される規則を説明しただけです)。</p>
 * <p>デフォルトの塗りつぶしルールは <b><code>CairoFillRule::WINDING</code></b> です。</p>
 * @link http://php.net/manual/ja/class.cairofillrule.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoFillRule {

	/**
	 * @var integer <p>パスが半直線を左から右に横切るときに、カウントを +1 します。 逆に右から左に横切るときに、カウントを -1 します (左右の判断基準は、半直線の始点から見た方向です)。 最終的なカウントがゼロでない場合に、その点を塗りつぶします。</p>
	 * @link http://php.net/manual/ja/class.cairofillrule.php
	 */
	const WINDING = 0;

	/**
	 * @var integer <p>交差する点の総数を数えます。交差の向きは考慮しません。 交差点の総数が奇数の場合に、その点を塗りつぶします。</p>
	 * @link http://php.net/manual/ja/class.cairofillrule.php
	 */
	const EVEN_ODD = 1;
}

/**
 * <p><b>CairoFilter</b> を使って、 ピクセル値をパターンから読み込むときにフィルタリングを適用するかどうかを判断します。 特定のパターンに対して適用したいフィルタを指定するには <b>CairoPattern::setSource()</b> あるいは <b>cairo_pattern_set_source()</b> を参照ください。</p>
 * @link http://php.net/manual/ja/class.cairofilter.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoFilter {

	/**
	 * @var integer <p>パフォーマンスが高いフィルタで、品質は <b><code>CairoFilter::NEAREST</code></b> と同等です。</p>
	 * @link http://php.net/manual/ja/class.cairofilter.php
	 */
	const FAST = 0;

	/**
	 * @var integer <p>妥当なパフォーマンスのフィルタで、品質は <b><code>CairoFilter::BILINEAR</code></b> と同等です。</p>
	 * @link http://php.net/manual/ja/class.cairofilter.php
	 */
	const GOOD = 1;

	/**
	 * @var integer <p>高品質を得られますが、パフォーマンスはよくありません。対話的な用途には不向きです。</p>
	 * @link http://php.net/manual/ja/class.cairofilter.php
	 */
	const BEST = 2;

	/**
	 * @var integer <p>nearest-neighbor 法でフィルタリングします。</p>
	 * @link http://php.net/manual/ja/class.cairofilter.php
	 */
	const NEAREST = 3;

	/**
	 * @var integer <p>二次元のリニア補完をします。</p>
	 * @link http://php.net/manual/ja/class.cairofilter.php
	 */
	const BILINEAR = 4;

	/**
	 * @var integer <p>このフィルタ値は現在未実装です。現時点では使ってはいけません。</p>
	 * @link http://php.net/manual/ja/class.cairofilter.php
	 */
	const GAUSSIAN = 5;
}

/**
 * <p>抽象クラス CairoFontFace は、 特定のウェイトや傾きなどの特性を持つ特定のフォントを表します。 しかし変換やサイズは含みません。</p>
 * <p>注意: このクラスのインスタンスを直接作成することはできません。 <code>CairoContext::getFontFace()</code> あるいは <code>cairo_scaled_font_get_font_face()</code> で作ります。</p>
 * @link http://php.net/manual/ja/class.cairofontface.php
 * @since PECL cairo >= 0.1.0
 */
class CairoFontFace {

	/**
	 * Creates a new CairoFontFace object
	 * <p>CairoFontFace class represents a particular font at a particular weight, slant, and other characteristic but no transformation or size.</p><p>Note: This class can't be instantiated directly it is created by <code>CairoContext::getFontFace()</code> or <code>cairo_scaled_font_get_font_face()</code></p>
	 * @return self <p>CairoFontFace</p>
	 * @link http://php.net/manual/ja/cairofontface.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct() {}

	/**
	 * The getFontFace purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.getfontface.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontFace(): void {}

	/**
	 * Retrieves the font face type
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>This function returns the type of the backend used to create a font face. See CairoFontType class constants for available types.</p>
	 * @return int <p>A font type that can be any one defined in CairoFontType</p>
	 * @link http://php.net/manual/ja/cairofontface.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}

	/**
	 * Check for CairoFontFace errors
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Checks whether an error has previously occurred for this font face</p>
	 * @return int <p>CAIRO_STATUS_SUCCESS or another error such as CAIRO_STATUS_NO_MEMORY.</p>
	 * @link http://php.net/manual/ja/cairofontface.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}
}

/**
 * <p>不透明な構造体で、フォントのレンダリングに使うすべてのオプションを保持します。</p>
 * <p>cairo_font_options_t の個々の機能を設定したりアクセスしたりするときには、それぞれ cairo_font_options_set_機能名 や cairo_font_options_get_機能名 という名前の関数を使います。たとえば cairo_font_options_set_antialias() や cairo_font_options_get_antialias() などです。</p>
 * <p>将来 <b>CairoFontOptions</b> に新たな機能が追加される可能性もあります。 そのため、 <b>CairoFontOptions</b> オブジェクトのコピーや同一性チェック、 マージ、そしてハッシュ値の算出にはそれぞれ <b>CairoFontOptions::copy()</b>、<code>CairoFontOptions::equal()</code>、 <code>CairoFontOptions::merge()</code>、<code>CairoFontOptions::hash()</code> (手続き型の場合は cairo_font_options_copy()、cairo_font_options_equal()、 cairo_font_options_merge()、cairo_font_options_hash() を使う必要があります。</p>
 * @link http://php.net/manual/ja/class.cairofontoptions.php
 * @since PECL cairo >= 0.1.0
 */
class CairoFontOptions {

	/**
	 * The __construct purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct() {}

	/**
	 * The equal purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoFontOptions $other <p>Description...</p>
	 * @return bool <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.equal.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function equal(\CairoFontOptions $other): bool {}

	/**
	 * The getAntialias purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.getantialias.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getAntialias(): int {}

	/**
	 * The getHintMetrics purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.gethintmetrics.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getHintMetrics(): int {}

	/**
	 * The getHintStyle purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.gethintstyle.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getHintStyle(): int {}

	/**
	 * The getSubpixelOrder purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.getsubpixelorder.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getSubpixelOrder(): int {}

	/**
	 * The hash purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.hash.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function hash(): int {}

	/**
	 * The merge purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoFontOptions $other <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.merge.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function merge(\CairoFontOptions $other): void {}

	/**
	 * The setAntialias purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $antialias <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.setantialias.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setAntialias(int $antialias): void {}

	/**
	 * The setHintMetrics purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $hint_metrics <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.sethintmetrics.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setHintMetrics(int $hint_metrics): void {}

	/**
	 * The setHintStyle purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $hint_style <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.sethintstyle.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setHintStyle(int $hint_style): void {}

	/**
	 * The setSubpixelOrder purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $subpixel_order <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.setsubpixelorder.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setSubpixelOrder(int $subpixel_order): void {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairofontoptions.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}
}

/**
 * <p>フォントの傾きに基づいたフォントフェイスを指定します。</p>
 * @link http://php.net/manual/ja/class.cairofontslant.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoFontSlant {

	/**
	 * @var integer <p>立体</p>
	 * @link http://php.net/manual/ja/class.cairofontslant.php
	 */
	const NORMAL = 0;

	/**
	 * @var integer <p>イタリック体</p>
	 * @link http://php.net/manual/ja/class.cairofontslant.php
	 */
	const ITALIC = 1;

	/**
	 * @var integer <p>斜体</p>
	 * @link http://php.net/manual/ja/class.cairofontslant.php
	 */
	const OBLIQUE = 2;
}

/**
 * <p>CairoFontType クラスは abstract final クラスで、 指定した CairoFontFace や CairoScaledFont のタイプを表す定数を含みます。フォントタイプは、cairo の中では「フォントバックエンド」 とも呼ばれています。</p>
 * <p>CairoFontFace のタイプは、どのように作ったかによって決まります。たとえば <b>CairoToyFontFace::__construct()</b> などです。 CairoFontFace タイプは <code>CairoFontFace::getType()</code> あるいは <code>cairo_font_face_get_type()</code> で問い合わせることができます。</p>
 * <p>各種の CairoFontFace 関数を、あらゆるタイプのフォントフェイスと組み合わせて使えます。</p>
 * <p>CairoScaledFont のタイプは <code>CairoScaledFont::__construct()</code> あるいは <code>cairo_scaled_font_create()</code> に渡した CairoFontFace のタイプで決まります。 Scaled フォントタイプは <code>CairoScaledFont::getType()</code> あるいは <code>cairo_scaled_font_get_type()</code> で問い合わせることができます。</p>
 * @link http://php.net/manual/ja/class.cairofonttype.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoFontType {

	/**
	 * @var integer <p><b>CairoToyFont</b> api で作ったフォント。</p>
	 * @link http://php.net/manual/ja/class.cairofonttype.php
	 */
	const TOY = 0;

	/**
	 * @var integer <p><b>CairoFreeType</b> タイプのフォント。</p>
	 * @link http://php.net/manual/ja/class.cairofonttype.php
	 */
	const FT = 1;

	/**
	 * @var integer <p>Win32 タイプのフォント。</p>
	 * @link http://php.net/manual/ja/class.cairofonttype.php
	 */
	const WIN32 = 2;

	/**
	 * @var integer <p>Quartz タイプのフォント。</p>
	 * @link http://php.net/manual/ja/class.cairofonttype.php
	 */
	const QUARTZ = 3;

	/**
	 * The __construct purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoFontFace $font_face <p>Description...</p>
	 * @param \CairoMatrix $matrix <p>Description...</p>
	 * @param \CairoMatrix $ctm <p>Description...</p>
	 * @param \CairoFontOptions $options <p>Description...</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(\CairoFontFace $font_face, \CairoMatrix $matrix, \CairoMatrix $ctm, \CairoFontOptions $options) {}

	/**
	 * Retrieves the font face type
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>This function returns the type of the backend used to create a font face. See CairoFontType class constants for available types.</p>
	 * @return int <p>A font type that can be any one defined in CairoFontType</p>
	 * @link http://php.net/manual/ja/cairofontface.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}
}

/**
 * <p>フォントのウェイトに基づいたフォントフェイスを指定します。</p>
 * @link http://php.net/manual/ja/class.cairofontweight.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoFontWeight {

	/**
	 * @var integer <p>ノーマル。</p>
	 * @link http://php.net/manual/ja/class.cairofontweight.php
	 */
	const NORMAL = 0;

	/**
	 * @var integer <p>ボールド。</p>
	 * @link http://php.net/manual/ja/class.cairofontweight.php
	 */
	const BOLD = 1;
}

/**
 * <p>CairoFormat は、画像データのメモリ城のフォーマットを識別するために使います。</p>
 * @link http://php.net/manual/ja/class.cairoformat.php
 * @since PECL cairo >= 0.1.0
 */
class CairoFormat {

	/**
	 * @var integer <p>各ピクセルを 32 ビットで表します。上位 8 ビットがアルファ値で、 その後に赤・緑・青が続きます。32 ビットのデータがネイティブエンディアンで格納されます。 事前に重ねたアルファ値を使います (つまり、透明度 50% の赤は 0x80800000 であり、0x80ff0000 にはならないということです)。</p>
	 * @link http://php.net/manual/ja/class.cairoformat.php
	 */
	const ARGB32 = 0;

	/**
	 * @var integer <p>各ピクセルを 32 ビットで表します。上位 8 ビットは使わず、 残りの 24 ビットに赤・緑・青の順で格納します。</p>
	 * @link http://php.net/manual/ja/class.cairoformat.php
	 */
	const RGB24 = 1;

	/**
	 * @var integer <p>各ピクセルを 8 ビットで表し、アルファ値を保持します。</p>
	 * @link http://php.net/manual/ja/class.cairoformat.php
	 */
	const A8 = 2;

	/**
	 * @var integer <p>各ピクセルを 1 ビットで表し、アルファ値を保持します。 複数のピクセルをパックして 32 ビットにまとめます。 ビットの並び順は、そのプラットフォームが使うエンディアンと一致します。 ビッグエンディアンのマシンでは最初のピクセルが最上位ビットとなり、 リトルエンディアンのマシンでは最初のピクセルが最下位ビットとなります。</p>
	 * @link http://php.net/manual/ja/class.cairoformat.php
	 */
	const A1 = 3;

	/**
	 * Provides an appropiate stride to use
	 * <p>This method provides a stride value that will respect all alignment requirements of the accelerated image-rendering code within cairo.</p>
	 * @param int $format <p>The desired CairoFormat to use</p>
	 * @param int $width <p>The width of the image</p>
	 * @return int <p>The appropriate stride to use given the desired format and width, or -1 if either the format is invalid or the width too large.</p>
	 * @link http://php.net/manual/ja/cairoformat.strideforwidth.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function strideForWidth(int $format, int $width): int {}
}

/**
 * <p><b>CairoGradientPattern</b> は抽象基底クラスで、他のパターンクラス群の親となります。 直接インスタンスを作ることはできません。</p>
 * @link http://php.net/manual/ja/class.cairogradientpattern.php
 * @since PECL cairo >= 0.1.0
 */
class CairoGradientPattern extends \CairoPattern {

	/**
	 * The __construct purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct() {}

	/**
	 * The addColorStopRgb purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $offset <p>Description...</p>
	 * @param float $red <p>Description...</p>
	 * @param float $green <p>Description...</p>
	 * @param float $blue <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.addcolorstoprgb.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function addColorStopRgb(float $offset, float $red, float $green, float $blue): void {}

	/**
	 * The addColorStopRgba purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $offset <p>Description...</p>
	 * @param float $red <p>Description...</p>
	 * @param float $green <p>Description...</p>
	 * @param float $blue <p>Description...</p>
	 * @param float $alpha <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.addcolorstoprgba.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function addColorStopRgba(float $offset, float $red, float $green, float $blue, float $alpha): void {}

	/**
	 * The getColorStopCount purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.getcolorstopcount.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getColorStopCount(): int {}

	/**
	 * The getColorStopRgba purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $index <p>Description...</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.getcolorstoprgba.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getColorStopRgba(int $index): array {}

	/**
	 * The getExtend purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.getextend.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getExtend(): int {}

	/**
	 * The getMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.getmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getMatrix(): void {}

	/**
	 * The getType purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}

	/**
	 * The setExtend purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $extend <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.setextend.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setExtend(int $extend): void {}

	/**
	 * The setMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoMatrix $matrix <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.setmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setMatrix(\CairoMatrix $matrix): void {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}
}

/**
 * <p>フォントメトリックのヒントを出すかどうかを指定します。 フォントメトリックのヒントとは、量子化してデバイス空間での整数値にすることです。 こうすると文字間隔や行間隔の一貫性が向上しますが、 テキストの拡大率を変えるとレイアウトも変わってしまうことになります。</p>
 * @link http://php.net/manual/ja/class.cairohintmetrics.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoHintMetrics {

	/**
	 * @var integer <p>メトリックのヒントを、フォントバックエンドとターゲットデバイスのデフォルトに合わせます。</p>
	 * @link http://php.net/manual/ja/class.cairohintmetrics.php
	 */
	const METRICS_DEFAULT = 0;

	/**
	 * @var integer <p>フォントメトリックのヒントを出しません。</p>
	 * @link http://php.net/manual/ja/class.cairohintmetrics.php
	 */
	const METRICS_OFF = 1;

	/**
	 * @var integer <p>フォントメトリックのヒントを出します。</p>
	 * @link http://php.net/manual/ja/class.cairohintmetrics.php
	 */
	const METRICS_ON = 2;
}

/**
 * <p>フォントアウトラインのヒントの形式を指定します。 ヒントを出すとは、アウトラインをピクセルのグリッドにあわせて表示結果を改善することです。 アウトラインのヒントを出すということはアウトラインに手を加えることになるので、 本来のアウトラインのシェイプからは変わってしまいます。 フォントバックエンドによっては、これらのすべてのヒントには対応していないものもあります。</p>
 * @link http://php.net/manual/ja/class.cairohintstyle.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoHintStyle {

	/**
	 * @var integer <p>フォントバックエンドとターゲットデバイスに合わせたデフォルトのヒント形式を使います。</p>
	 * @link http://php.net/manual/ja/class.cairohintstyle.php
	 */
	const STYLE_DEFAULT = 0;

	/**
	 * @var integer <p>アウトラインのヒントを出しません。</p>
	 * @link http://php.net/manual/ja/class.cairohintstyle.php
	 */
	const STYLE_NONE = 1;

	/**
	 * @var integer <p>アウトラインのヒントを少し出して、コントラストを改善しつつ元のシェイプの状態も残します。</p>
	 * @link http://php.net/manual/ja/class.cairohintstyle.php
	 */
	const STYLE_SLIGHT = 2;

	/**
	 * @var integer <p>アウトラインのヒントを中程度に出します。コントラストと元のシェイプの状態の両方を尊重したものになります。</p>
	 * @link http://php.net/manual/ja/class.cairohintstyle.php
	 */
	const STYLE_MEDIUM = 3;

	/**
	 * @var integer <p>コントラストを最大化するようにアウトラインのヒントを出します。</p>
	 * @link http://php.net/manual/ja/class.cairohintstyle.php
	 */
	const STYLE_FULL = 4;
}

/**
 * <p>CairoImageSurface は、cairo あるいは呼び出し元のコードが確保したメモリバッファの内容をレンダリングする機能を提供します。 対応する画像フォーマットは CairoFormat で定義されているものです。</p>
 * @link http://php.net/manual/ja/class.cairoimagesurface.php
 * @since PECL cairo >= 0.1.0
 */
class CairoImageSurface extends \CairoSurface {

	/**
	 * Creates a new CairoImageSurface
	 * <p>Creates a new CairoImageSuface object of type <code>format</code></p>
	 * @param int $format <p>Can be any defined in CairoFormat</p>
	 * @param int $width <p>The width of the image surface</p>
	 * @param int $height <p>The height of the image surface</p>
	 * @return self <p>A new CairoImageSurface</p>
	 * @link http://php.net/manual/ja/cairoimagesurface.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(int $format, int $width, int $height) {}

	/**
	 * The copyPage purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Emits the current page for backends that support multiple pages, but doesn't clear it, so that the contents of the current page will be retained for the next page. Use CairoSurface::showPage() if you want to get an empty page after the emission.</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.copypage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function copyPage(): void {}

	/**
	 * The createForData purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $data <p>Description...</p>
	 * @param int $format <p>Description...</p>
	 * @param int $width <p>Description...</p>
	 * @param int $height <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoimagesurface.createfordata.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function createForData(string $data, int $format, int $width, int $height): void {}

	/**
	 * Creates a new CairoImageSurface form a png image file
	 * <p>Creates a new CairoImageSurface form a png image file</p><p>This method should be called static</p>
	 * @param string $file <p>Path to PNG image file</p>
	 * @return CairoImageSurface <p>CairoImageSurface object</p>
	 * @link http://php.net/manual/ja/cairoimagesurface.createfrompng.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function createFromPng(string $file): \CairoImageSurface {}

	/**
	 * The createSimilar purpose
	 * <p>Create a new surface that is as compatible as possible with an existing surface. For example the new surface will have the same fallback resolution and font options as other. Generally, the new surface will also use the same backend as other, unless that is not possible for some reason. The type of the returned surface may be examined with CairoSurface::getType(). Initially the surface contents are all 0 (transparent if contents have transparency, black otherwise.)</p>
	 * @param \CairoSurface $other <p>An existing surface used to select the backend of the new surface</p>
	 * @param int $content <p>The content for the new surface. See the CairoContent class for possible values.</p>
	 * @param string $width <p>Width of the new surface, (in device-space units).</p>
	 * @param string $height <p>Height of the new surface, (in device-space units).</p>
	 * @return void <p>A new CairoSurface</p>
	 * @link http://php.net/manual/ja/cairosurface.createsimilar.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function createSimilar(\CairoSurface $other, int $content, string $width, string $height): void {}

	/**
	 * The finish purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.finish.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function finish(): void {}

	/**
	 * The flush purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.flush.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function flush(): void {}

	/**
	 * The getContent purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getcontent.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getContent(): int {}

	/**
	 * Gets the image data as string
	 * <p>Returns the image data of this surface or NULL if surface is not an image surface, or if <b>CairoContext::finish()</b>, procedural : <code>cairo_surface_finish()</code>, has been called.</p>
	 * @return string <p>The image data as string</p>
	 * @link http://php.net/manual/ja/cairoimagesurface.getdata.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getData(): string {}

	/**
	 * The getDeviceOffset purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getdeviceoffset.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getDeviceOffset(): array {}

	/**
	 * The getFontOptions purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getfontoptions.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontOptions(): void {}

	/**
	 * Get the image format
	 * <p>Retrieves the image format, as one of the CairoFormat defined</p>
	 * @return int <p>One of the CairoFormat enums</p>
	 * @link http://php.net/manual/ja/cairoimagesurface.getformat.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFormat(): int {}

	/**
	 * Retrieves the height of the CairoImageSurface
	 * <p>This methods returns the CairoImageSurface height.</p>
	 * @return int <p>CairoImageSurface object height</p>
	 * @link http://php.net/manual/ja/cairoimagesurface.getheight.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getHeight(): int {}

	/**
	 * The getStride purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoimagesurface.getstride.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getStride(): int {}

	/**
	 * The getType purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}

	/**
	 * Retrieves the width of the CairoImageSurface
	 * <p>Gets the width of the CairoImageSurface</p>
	 * @return int <p>Returns the width of the CairoImageSurface object</p>
	 * @link http://php.net/manual/ja/cairoimagesurface.getwidth.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getWidth(): int {}

	/**
	 * The markDirty purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.markdirty.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function markDirty(): void {}

	/**
	 * The markDirtyRectangle purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @param float $width <p>Description...</p>
	 * @param float $height <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.markdirtyrectangle.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function markDirtyRectangle(float $x, float $y, float $width, float $height): void {}

	/**
	 * The setDeviceOffset purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.setdeviceoffset.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setDeviceOffset(float $x, float $y): void {}

	/**
	 * The setFallbackResolution purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.setfallbackresolution.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setFallbackResolution(float $x, float $y): void {}

	/**
	 * The showPage purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.showpage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function showPage(): void {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}

	/**
	 * The writeToPng purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $file <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.writetopng.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function writeToPng(string $file): void {}
}

/**
 * <p>定義した線に沿って新たな CairoLinearGradient を作ります。</p>
 * @link http://php.net/manual/ja/class.cairolineargradient.php
 * @since PECL cairo >= 0.1.0
 */
class CairoLinearGradient extends \CairoGradientPattern {

	/**
	 * The __construct purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x0 <p>Description...</p>
	 * @param float $y0 <p>Description...</p>
	 * @param float $x1 <p>Description...</p>
	 * @param float $y1 <p>Description...</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairolineargradient.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(float $x0, float $y0, float $x1, float $y1) {}

	/**
	 * The addColorStopRgb purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $offset <p>Description...</p>
	 * @param float $red <p>Description...</p>
	 * @param float $green <p>Description...</p>
	 * @param float $blue <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.addcolorstoprgb.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function addColorStopRgb(float $offset, float $red, float $green, float $blue): void {}

	/**
	 * The addColorStopRgba purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $offset <p>Description...</p>
	 * @param float $red <p>Description...</p>
	 * @param float $green <p>Description...</p>
	 * @param float $blue <p>Description...</p>
	 * @param float $alpha <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.addcolorstoprgba.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function addColorStopRgba(float $offset, float $red, float $green, float $blue, float $alpha): void {}

	/**
	 * The getColorStopCount purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.getcolorstopcount.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getColorStopCount(): int {}

	/**
	 * The getColorStopRgba purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $index <p>Description...</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.getcolorstoprgba.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getColorStopRgba(int $index): array {}

	/**
	 * The getExtend purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.getextend.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getExtend(): int {}

	/**
	 * The getPoints purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairolineargradient.getpoints.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getPoints(): array {}

	/**
	 * The setExtend purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $extend <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.setextend.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setExtend(int $extend): void {}
}

/**
 * <p>パスを描画するときの端点の処理方法を指定します。</p>
 * <p>デフォルトの方式は <b><code>CairoLineCap::BUTT</code></b> です。</p>
 * @link http://php.net/manual/ja/class.cairolinecap.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoLineCap {

	/**
	 * @var integer <p>直線の始点あるいは終点を、正確にその位置で止めます。</p>
	 * @link http://php.net/manual/ja/class.cairolinecap.php
	 */
	const BUTT = 0;

	/**
	 * @var integer <p>端点を円にして、円の中心が端点と一致するようにします。</p>
	 * @link http://php.net/manual/ja/class.cairolinecap.php
	 */
	const ROUND = 1;

	/**
	 * @var integer <p>端点を正方形にして、正方形の中心が端点と一致するようにします。</p>
	 * @link http://php.net/manual/ja/class.cairolinecap.php
	 */
	const SQUARE = 2;
}

/**
 * @link http://php.net/manual/ja/class.cairolinejoin.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoLineJoin {

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairolinejoin.php
	 */
	const MITER = 0;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairolinejoin.php
	 */
	const ROUND = 1;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairolinejoin.php
	 */
	const BEVEL = 2;
}

/**
 * <p>マトリクスを使って、異なる座標空間の座標を変換します。</p>
 * @link http://php.net/manual/ja/class.cairomatrix.php
 * @since PECL cairo >= 0.1.0
 */
class CairoMatrix {

	/**
	 * Creates a new CairoMatrix object
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns new CairoMatrix object. Matrices are used throughout cairo to convert between different coordinate spaces. Sets matrix to be the affine transformation given by xx, yx, xy, yy, x0, y0. The transformation is given by: x_new = xx &#42; x + xy &#42; y + x0; and y_new = yx &#42; x + yy &#42; y + y0;</p>
	 * @param float $xx <p>xx component of the affine transformation</p>
	 * @param float $yx <p>yx component of the affine transformation</p>
	 * @param float $xy <p>xy component of the affine transformation</p>
	 * @param float $yy <p>yy component of the affine transformation</p>
	 * @param float $x0 <p>X translation component of the affine transformation</p>
	 * @param float $y0 <p>Y translation component of the affine transformation</p>
	 * @return self <p>Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.</p>
	 * @link http://php.net/manual/ja/cairomatrix.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(float $xx = 1.0, float $yx = 0.0, float $xy = 0.0, float $yy = 1.0, float $x0 = 0.0, float $y0 = 0.0) {}

	/**
	 * Creates a new identity matrix
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Creates a new matrix that is an identity transformation. An identity transformation means the source data is copied into the destination data without change</p>
	 * @return void <p>Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.</p>
	 * @link http://php.net/manual/ja/cairomatrix.initidentity.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function initIdentity(): void {}

	/**
	 * Creates a new rotated matrix
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Creats a new matrix to a transformation that rotates by radians provided</p>
	 * @param float $radians <p>angle of rotation, in radians. The direction of rotation is defined such that positive angles rotate in the direction from the positive X axis toward the positive Y axis. With the default axis orientation of cairo, positive angles rotate in a clockwise direction.</p>
	 * @return void <p>Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.</p>
	 * @link http://php.net/manual/ja/cairomatrix.initrotate.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function initRotate(float $radians): void {}

	/**
	 * Creates a new scaling matrix
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Creates a new matrix to a transformation that scales by sx and sy in the X and Y dimensions, respectively.</p>
	 * @param float $sx <p>scale factor in the X direction</p>
	 * @param float $sy <p>scale factor in the Y direction</p>
	 * @return void <p>Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.</p>
	 * @link http://php.net/manual/ja/cairomatrix.initscale.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function initScale(float $sx, float $sy): void {}

	/**
	 * Creates a new translation matrix
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Creates a new matrix to a transformation that translates by tx and ty in the X and Y dimensions, respectively.</p>
	 * @param float $tx <p>amount to translate in the X direction</p>
	 * @param float $ty <p>amount to translate in the Y direction</p>
	 * @return void <p>Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.</p>
	 * @link http://php.net/manual/ja/cairomatrix.inittranslate.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function initTranslate(float $tx, float $ty): void {}

	/**
	 * The invert purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairomatrix.invert.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function invert(): void {}

	/**
	 * The multiply purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoMatrix $matrix1 <p>Description...</p>
	 * @param \CairoMatrix $matrix2 <p>Description...</p>
	 * @return CairoMatrix <p>Description...</p>
	 * @link http://php.net/manual/ja/cairomatrix.multiply.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function multiply(\CairoMatrix $matrix1, \CairoMatrix $matrix2): \CairoMatrix {}

	/**
	 * The rotate purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $radians <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairomatrix.rotate.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function rotate(float $radians): void {}

	/**
	 * Applies scaling to a matrix
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Applies scaling by sx, sy to the transformation in the matrix. The effect of the new transformation is to first scale the coordinates by sx and sy, then apply the original transformation to the coordinates.</p>
	 * @param float $sx <p>scale factor in the X direction</p>
	 * @param float $sy <p>scale factor in the Y direction</p>
	 * @return void
	 * @link http://php.net/manual/ja/cairomatrix.scale.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function scale(float $sx, float $sy): void {}

	/**
	 * The transformDistance purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $dx <p>Description...</p>
	 * @param float $dy <p>Description...</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairomatrix.transformdistance.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function transformDistance(float $dx, float $dy): array {}

	/**
	 * The transformPoint purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $dx <p>Description...</p>
	 * @param float $dy <p>Description...</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairomatrix.transformpoint.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function transformPoint(float $dx, float $dy): array {}

	/**
	 * The translate purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $tx <p>Description...</p>
	 * @param float $ty <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairomatrix.translate.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function translate(float $tx, float $ty): void {}
}

/**
 * <p>すべての描画操作に使う合成演算子を設定します。</p>
 * <p>デフォルトの演算子は <b><code>CairoOperator::OVER</code></b> です。</p>
 * <p>unbounded (境界なし) とマークされた演算子は、マスクレイヤーの外部であっても変更します (つまり、その影響はマスクレイヤー内だけにはおさまらないということです)。 しかし、その影響はクリッピング領域の中に限定されます。</p>
 * <p>ドキュメントをシンプルにするために、ここでの演算子の説明は 演算前と演算後の画像がどひらも完全に透明あるいは完全に不透明であるときの振る舞いだけになっています。 実際の実装は、半透明なレイヤーでも動作するようになっています。 各演算子の挙動についてより詳しい説明 (数学的な定義など) が必要な場合は、 http://cairographics.org/operators/ を参照ください。</p>
 * @link http://php.net/manual/ja/class.cairooperator.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoOperator {

	/**
	 * @var integer <p>対象レイヤーをクリアする (bounded)</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const CLEAR = 0;

	/**
	 * @var integer <p>対象レイヤーを置き換える (bounded)</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const SOURCE = 1;

	/**
	 * @var integer <p>元レイヤーを対象レイヤーの上に描画する (bounded)</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const OVER = 2;

	/**
	 * @var integer <p>元画像を対象があったところに描画する (unbounded)</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const IN = 3;

	/**
	 * @var integer <p>元画像を対象がなかったところに描画する (unbounded)</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const OUT = 4;

	/**
	 * @var integer <p>元画像を対象の上だけに描画する</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const ATOP = 5;

	/**
	 * @var integer <p>元画像を無視する</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const DEST = 6;

	/**
	 * @var integer <p>対象画像を元画像の上に描画する</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const DEST_OVER = 7;

	/**
	 * @var integer <p>元画像があったところだけ、対象画像を残す (unbounded)</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const DEST_IN = 8;

	/**
	 * @var integer <p>元画像がなかったところだけ、対象画像を残す</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const DEST_OUT = 9;

	/**
	 * @var integer <p>元画像の上にあったところだけ、対象画像を残す (unbounded)</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const DEST_ATOP = 10;

	/**
	 * @var integer <p>元画像と対象画像のどちらか一方だけがあった部分を表示する</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const XOR = 11;

	/**
	 * @var integer <p>元画像と対象画像を足し合わせる</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const ADD = 12;

	/**
	 * @var integer <p><b><code>CairoOperator::OVER</code></b> と同様だが、元画像と対象画像の形が違うことを前提とする</p>
	 * @link http://php.net/manual/ja/class.cairooperator.php
	 */
	const SATURATE = 13;
}

/**
 * <p>注意: CairoPath クラスのインスタンスを直接作ることはできません。 直接作ろうとすると Fatal Error が発生します。</p>
 * @link http://php.net/manual/ja/class.cairopath.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoPath {
}

/**
 * <p><b>CairoPattern</b> は抽象基底クラスで、他のパターンクラス群の親となります。 インスタンスを直接作ることはできません。</p>
 * @link http://php.net/manual/ja/class.cairopattern.php
 * @since PECL cairo >= 0.1.0
 */
class CairoPattern {

	/**
	 * The __construct purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct() {}

	/**
	 * The getMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.getmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getMatrix(): void {}

	/**
	 * The getType purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}

	/**
	 * The setMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoMatrix $matrix <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.setmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setMatrix(\CairoMatrix $matrix): void {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}
}

/**
 * <p><b>CairoPatternType</b> を使って、指定したパターンのタイプを表します。</p>
 * <p>パターンのタイプは、それを作った関数で決まります。 <code>cairo_pattern_create_rgb()</code> や <code>cairo_pattern_create_rgba()</code> といった関数は <b><code>CairoPatternType::SOLID</code></b> パターンを作ります。 それ以外の cairo_pattern_create_&#42; 系関数は、それぞれ特定のパターンタイプに対応します。</p>
 * @link http://php.net/manual/ja/class.cairopatterntype.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoPatternType {

	/**
	 * @var integer <p>ソリッドな (一様な) 色。不透明あるいは半透明になります。</p>
	 * @link http://php.net/manual/ja/class.cairopatterntype.php
	 */
	const SOLID = 0;

	/**
	 * @var integer <p>サーフェイス (画像) に基づくパターン。</p>
	 * @link http://php.net/manual/ja/class.cairopatterntype.php
	 */
	const SURFACE = 1;

	/**
	 * @var integer <p>直線のグラデーションパターン。</p>
	 * @link http://php.net/manual/ja/class.cairopatterntype.php
	 */
	const LINEAR = 2;

	/**
	 * @var integer <p>放射状のグラデーションパターン。</p>
	 * @link http://php.net/manual/ja/class.cairopatterntype.php
	 */
	const RADIAL = 3;
}

/**
 * @link http://php.net/manual/ja/class.cairopdfsurface.php
 * @since PECL cairo >= 0.1.0
 */
class CairoPdfSurface extends \CairoSurface {

	/**
	 * The __construct purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $file <p>Description...</p>
	 * @param float $width <p>Description...</p>
	 * @param float $height <p>Description...</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopdfsurface.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(string $file, float $width, float $height) {}

	/**
	 * The copyPage purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Emits the current page for backends that support multiple pages, but doesn't clear it, so that the contents of the current page will be retained for the next page. Use CairoSurface::showPage() if you want to get an empty page after the emission.</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.copypage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function copyPage(): void {}

	/**
	 * The createSimilar purpose
	 * <p>Create a new surface that is as compatible as possible with an existing surface. For example the new surface will have the same fallback resolution and font options as other. Generally, the new surface will also use the same backend as other, unless that is not possible for some reason. The type of the returned surface may be examined with CairoSurface::getType(). Initially the surface contents are all 0 (transparent if contents have transparency, black otherwise.)</p>
	 * @param \CairoSurface $other <p>An existing surface used to select the backend of the new surface</p>
	 * @param int $content <p>The content for the new surface. See the CairoContent class for possible values.</p>
	 * @param string $width <p>Width of the new surface, (in device-space units).</p>
	 * @param string $height <p>Height of the new surface, (in device-space units).</p>
	 * @return void <p>A new CairoSurface</p>
	 * @link http://php.net/manual/ja/cairosurface.createsimilar.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function createSimilar(\CairoSurface $other, int $content, string $width, string $height): void {}

	/**
	 * The finish purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.finish.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function finish(): void {}

	/**
	 * The flush purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.flush.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function flush(): void {}

	/**
	 * The getContent purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getcontent.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getContent(): int {}

	/**
	 * The getDeviceOffset purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getdeviceoffset.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getDeviceOffset(): array {}

	/**
	 * The getFontOptions purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getfontoptions.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontOptions(): void {}

	/**
	 * The getType purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}

	/**
	 * The markDirty purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.markdirty.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function markDirty(): void {}

	/**
	 * The markDirtyRectangle purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @param float $width <p>Description...</p>
	 * @param float $height <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.markdirtyrectangle.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function markDirtyRectangle(float $x, float $y, float $width, float $height): void {}

	/**
	 * The setDeviceOffset purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.setdeviceoffset.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setDeviceOffset(float $x, float $y): void {}

	/**
	 * The setFallbackResolution purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.setfallbackresolution.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setFallbackResolution(float $x, float $y): void {}

	/**
	 * The setSize purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $width <p>Description...</p>
	 * @param float $height <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopdfsurface.setsize.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setSize(float $width, float $height): void {}

	/**
	 * The showPage purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.showpage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function showPage(): void {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}

	/**
	 * The writeToPng purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $file <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.writetopng.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function writeToPng(string $file): void {}
}

/**
 * @link http://php.net/manual/ja/class.cairopslevel.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoPsLevel {

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairopslevel.php
	 */
	const LEVEL_2 = 0;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairopslevel.php
	 */
	const LEVEL_3 = 1;
}

/**
 * @link http://php.net/manual/ja/class.cairopssurface.php
 * @since PECL cairo >= 0.1.0
 */
class CairoPsSurface extends \CairoSurface {

	/**
	 * The __construct purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $file <p>Description...</p>
	 * @param float $width <p>Description...</p>
	 * @param float $height <p>Description...</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopssurface.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(string $file, float $width, float $height) {}

	/**
	 * The copyPage purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Emits the current page for backends that support multiple pages, but doesn't clear it, so that the contents of the current page will be retained for the next page. Use CairoSurface::showPage() if you want to get an empty page after the emission.</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.copypage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function copyPage(): void {}

	/**
	 * The createSimilar purpose
	 * <p>Create a new surface that is as compatible as possible with an existing surface. For example the new surface will have the same fallback resolution and font options as other. Generally, the new surface will also use the same backend as other, unless that is not possible for some reason. The type of the returned surface may be examined with CairoSurface::getType(). Initially the surface contents are all 0 (transparent if contents have transparency, black otherwise.)</p>
	 * @param \CairoSurface $other <p>An existing surface used to select the backend of the new surface</p>
	 * @param int $content <p>The content for the new surface. See the CairoContent class for possible values.</p>
	 * @param string $width <p>Width of the new surface, (in device-space units).</p>
	 * @param string $height <p>Height of the new surface, (in device-space units).</p>
	 * @return void <p>A new CairoSurface</p>
	 * @link http://php.net/manual/ja/cairosurface.createsimilar.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function createSimilar(\CairoSurface $other, int $content, string $width, string $height): void {}

	/**
	 * The dscBeginPageSetup purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopssurface.dscbeginpagesetup.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function dscBeginPageSetup(): void {}

	/**
	 * The dscBeginSetup purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopssurface.dscbeginsetup.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function dscBeginSetup(): void {}

	/**
	 * The dscComment purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $comment <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopssurface.dsccomment.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function dscComment(string $comment): void {}

	/**
	 * The finish purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.finish.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function finish(): void {}

	/**
	 * The flush purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.flush.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function flush(): void {}

	/**
	 * The getContent purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getcontent.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getContent(): int {}

	/**
	 * The getDeviceOffset purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getdeviceoffset.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getDeviceOffset(): array {}

	/**
	 * The getEps purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return bool <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopssurface.geteps.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getEps(): bool {}

	/**
	 * The getFontOptions purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getfontoptions.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontOptions(): void {}

	/**
	 * The getLevels purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopssurface.getlevels.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function getLevels(): array {}

	/**
	 * The getType purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}

	/**
	 * The levelToString purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $level <p>Description...</p>
	 * @return string <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopssurface.leveltostring.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function levelToString(int $level): string {}

	/**
	 * The markDirty purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.markdirty.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function markDirty(): void {}

	/**
	 * The markDirtyRectangle purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @param float $width <p>Description...</p>
	 * @param float $height <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.markdirtyrectangle.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function markDirtyRectangle(float $x, float $y, float $width, float $height): void {}

	/**
	 * The restrictToLevel purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $level <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopssurface.restricttolevel.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function restrictToLevel(int $level): void {}

	/**
	 * The setDeviceOffset purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.setdeviceoffset.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setDeviceOffset(float $x, float $y): void {}

	/**
	 * The setEps purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param bool $level <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopssurface.seteps.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setEps(bool $level): void {}

	/**
	 * The setFallbackResolution purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.setfallbackresolution.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setFallbackResolution(float $x, float $y): void {}

	/**
	 * The setSize purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $width <p>Description...</p>
	 * @param float $height <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopssurface.setsize.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setSize(float $width, float $height): void {}

	/**
	 * The showPage purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.showpage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function showPage(): void {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}

	/**
	 * The writeToPng purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $file <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.writetopng.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function writeToPng(string $file): void {}
}

/**
 * @link http://php.net/manual/ja/class.cairoradialgradient.php
 * @since PECL cairo >= 0.1.0
 */
class CairoRadialGradient extends \CairoGradientPattern {

	/**
	 * The __construct purpose
	 * <p>オブジェクト指向型:</p><p>手続き型:</p><p>Creates a new radial gradient <code>CairoPattern</code> between the two circles defined by (x0, y0, r0) and (x1, y1, r1). Before using the gradient pattern, a number of color stops should be defined using <b>CairoRadialGradient::addColorStopRgb()</b> or <b>CairoRadialGradient::addColorStopRgba()</b>.</p><p>Note: The coordinates here are in pattern space. For a new pattern, pattern space is identical to user space, but the relationship between the spaces can be changed with <b>CairoRadialGradient::setMatrix()</b>.</p>
	 * @param float $x0 <p>x coordinate for the center of the start circle.</p>
	 * @param float $y0 <p>y coordinate for the center of the start circle.</p>
	 * @param float $r0 <p>radius of the start circle.</p>
	 * @param float $x1 <p>x coordinate for the center of the end circle.</p>
	 * @param float $y1 <p>y coordinate for the center of the end circle.</p>
	 * @param float $r1 <p>radius of the end circle.</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoradialgradient.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(float $x0, float $y0, float $r0, float $x1, float $y1, float $r1) {}

	/**
	 * The addColorStopRgb purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $offset <p>Description...</p>
	 * @param float $red <p>Description...</p>
	 * @param float $green <p>Description...</p>
	 * @param float $blue <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.addcolorstoprgb.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function addColorStopRgb(float $offset, float $red, float $green, float $blue): void {}

	/**
	 * The addColorStopRgba purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $offset <p>Description...</p>
	 * @param float $red <p>Description...</p>
	 * @param float $green <p>Description...</p>
	 * @param float $blue <p>Description...</p>
	 * @param float $alpha <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.addcolorstoprgba.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function addColorStopRgba(float $offset, float $red, float $green, float $blue, float $alpha): void {}

	/**
	 * The getCircles purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoradialgradient.getcircles.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getCircles(): array {}

	/**
	 * The getColorStopCount purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.getcolorstopcount.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getColorStopCount(): int {}

	/**
	 * The getColorStopRgba purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $index <p>Description...</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.getcolorstoprgba.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getColorStopRgba(int $index): array {}

	/**
	 * The getExtend purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.getextend.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getExtend(): int {}

	/**
	 * The setExtend purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $extend <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairogradientpattern.setextend.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setExtend(int $extend): void {}
}

/**
 * @link http://php.net/manual/ja/class.cairoscaledfont.php
 * @since PECL cairo >= 0.1.0
 */
class CairoScaledFont {

	/**
	 * The __construct purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoFontFace $font_face <p>Description...</p>
	 * @param \CairoMatrix $matrix <p>Description...</p>
	 * @param \CairoMatrix $ctm <p>Description...</p>
	 * @param \CairoFontOptions $options <p>Description...</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(\CairoFontFace $font_face, \CairoMatrix $matrix, \CairoMatrix $ctm, \CairoFontOptions $options) {}

	/**
	 * The extents purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.extents.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function extents(): array {}

	/**
	 * The getCtm purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return CairoMatrix <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.getctm.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getCtm(): \CairoMatrix {}

	/**
	 * The getFontFace purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.getfontface.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontFace(): void {}

	/**
	 * The getFontMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.getfontmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontMatrix(): void {}

	/**
	 * The getFontOptions purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.getfontoptions.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontOptions(): void {}

	/**
	 * The getScaleMatrix purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.getscalematrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getScaleMatrix(): void {}

	/**
	 * The getType purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}

	/**
	 * The glyphExtents purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param array $glyphs <p>Description...</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.glyphextents.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function glyphExtents(array $glyphs): array {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}

	/**
	 * The textExtents purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $text <p>Description...</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairoscaledfont.textextents.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function textExtents(string $text): array {}
}

/**
 * @link http://php.net/manual/ja/class.cairosolidpattern.php
 * @since PECL cairo >= 0.1.0
 */
class CairoSolidPattern extends \CairoPattern {

	/**
	 * The __construct purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $red <p>Description...</p>
	 * @param float $green <p>Description...</p>
	 * @param float $blue <p>Description...</p>
	 * @param float $alpha <p>Description...</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosolidpattern.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(float $red, float $green, float $blue, float $alpha = 0) {}

	/**
	 * The getMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.getmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getMatrix(): void {}

	/**
	 * The getRgba purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosolidpattern.getrgba.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getRgba(): array {}

	/**
	 * The getType purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}

	/**
	 * The setMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoMatrix $matrix <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.setmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setMatrix(\CairoMatrix $matrix): void {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}
}

/**
 * <p><b>CairoStatus</b> は、Cairo を使っているときに発生するエラーを表します。 関数から直接返される場合もありますが、CairoContext を使っている場合は 直近のエラーがオブジェクトに格納されており、<code>CairoContext::status()</code> あるいは <code>cairo_status()</code> で取得できます。将来的には新たなエントリも追加されるでしょう。</p>
 * <p><code>Cairo::statusToString()</code> あるいは <code>cairo_status_to_string()</code> を使えば、人間向けのエラーメッセージを取得できます。</p>
 * @link http://php.net/manual/ja/class.cairostatus.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoStatus {

	/**
	 * @var integer <p>エラーは発生していません</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const SUCCESS = 0;

	/**
	 * @var integer <p>メモリ不足</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const NO_MEMORY = 1;

	/**
	 * @var integer <p>対応する <code>cairo_save()</code> がないときに <code>cairo_restore()</code> を呼んだ</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_RESTORE = 2;

	/**
	 * @var integer <p>取り出すグループがない</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_POP_GROUP = 3;

	/**
	 * @var integer <p>現在の点が定義されていない</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const NO_CURRENT_POINT = 4;

	/**
	 * @var integer <p>無効な行列 (不可逆)</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_MATRIX = 5;

	/**
	 * @var integer <p>入力の CairoStatus に対して無効な値</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_STATUS = 6;

	/**
	 * @var integer <p>Null ポインタ</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const NULL_POINTER = 7;

	/**
	 * @var integer <p>入力文字列が妥当な UTF-8 文字列ではない</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_STRING = 8;

	/**
	 * @var integer <p>入力のパスデータが無効</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_PATH_DATA = 9;

	/**
	 * @var integer <p>入力ストリームからの読み込み中のエラー</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const READ_ERROR = 10;

	/**
	 * @var integer <p>出力ストリームへの書き出し中のエラー</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const WRITE_ERROR = 11;

	/**
	 * @var integer <p>対象のサーフェイスが処理済み</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const SURFACE_FINISHED = 12;

	/**
	 * @var integer <p>サーフェイスの型がその操作に適していない</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const SURFACE_TYPE_MISMATCH = 13;

	/**
	 * @var integer <p>パターンの型がその操作に適していない</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const PATTERN_TYPE_MISMATCH = 14;

	/**
	 * @var integer <p>入力の CairoContent に対して無効な値</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_CONTENT = 15;

	/**
	 * @var integer <p>入力の CairoFormat に対して無効な値</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_FORMAT = 16;

	/**
	 * @var integer <p>入力のビジュアルに対して無効な値</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_VISUAL = 17;

	/**
	 * @var integer <p>ファイルが存在しない</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const FILE_NOT_FOUND = 18;

	/**
	 * @var integer <p>ダッシュの設定で無効な値</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_DASH = 19;

	/**
	 * @var integer <p>DSC コメントとして妥当でない値</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_DSC_COMMENT = 20;

	/**
	 * @var integer <p>無効なインデックスがゲッターに渡された</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_INDEX = 21;

	/**
	 * @var integer <p>クリップ領域がそのフォーマットで表現できない</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const CLIP_NOT_REPRESENTABLE = 22;

	/**
	 * @var integer <p>テンポラリファイルの作成あるいは書き込み時のエラー</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const TEMP_FILE_ERROR = 23;

	/**
	 * @var integer <p><b>CairoStride</b> の無効な値</p>
	 * @link http://php.net/manual/ja/class.cairostatus.php
	 */
	const INVALID_STRIDE = 24;

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}

	/**
	 * Retrieves the current status as string
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Retrieves the current status as a readable string</p>
	 * @param int $status <p>A valid status code given by <code>cairo_status()</code> or <code>CairoContext::status()</code></p>
	 * @return string <p>A string containing the current status of a CairoContext object</p>
	 * @link http://php.net/manual/ja/cairo.statustostring.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function statusToString(int $status): string {}
}

/**
 * @link http://php.net/manual/ja/class.cairosubpixelorder.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoSubpixelOrder {

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosubpixelorder.php
	 */
	const ORDER_DEFAULT = 0;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosubpixelorder.php
	 */
	const ORDER_RGB = 1;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosubpixelorder.php
	 */
	const ORDER_BGR = 2;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosubpixelorder.php
	 */
	const ORDER_VRGB = 3;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosubpixelorder.php
	 */
	const ORDER_VBGR = 4;
}

/**
 * <p>これは、他のすべてのサーフェイスクラスの基底クラスです。 CairoSurface は抽象型で、cairo が描画できるすべての描画ターゲットを表します。 実際の描画処理は CairoContext を使って行います。</p>
 * @link http://php.net/manual/ja/class.cairosurface.php
 * @since PECL cairo >= 0.1.0
 */
class CairoSurface {

	/**
	 * The __construct purpose
	 * <p>CairoSurface is an abstract type and, as such, should not be instantiated in your PHP scripts.</p>
	 * @return self <p>No return value</p>
	 * @link http://php.net/manual/ja/cairosurface.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct() {}

	/**
	 * The copyPage purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Emits the current page for backends that support multiple pages, but doesn't clear it, so that the contents of the current page will be retained for the next page. Use CairoSurface::showPage() if you want to get an empty page after the emission.</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.copypage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function copyPage(): void {}

	/**
	 * The createSimilar purpose
	 * <p>Create a new surface that is as compatible as possible with an existing surface. For example the new surface will have the same fallback resolution and font options as other. Generally, the new surface will also use the same backend as other, unless that is not possible for some reason. The type of the returned surface may be examined with CairoSurface::getType(). Initially the surface contents are all 0 (transparent if contents have transparency, black otherwise.)</p>
	 * @param \CairoSurface $other <p>An existing surface used to select the backend of the new surface</p>
	 * @param int $content <p>The content for the new surface. See the CairoContent class for possible values.</p>
	 * @param string $width <p>Width of the new surface, (in device-space units).</p>
	 * @param string $height <p>Height of the new surface, (in device-space units).</p>
	 * @return void <p>A new CairoSurface</p>
	 * @link http://php.net/manual/ja/cairosurface.createsimilar.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function createSimilar(\CairoSurface $other, int $content, string $width, string $height): void {}

	/**
	 * The finish purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.finish.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function finish(): void {}

	/**
	 * The flush purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.flush.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function flush(): void {}

	/**
	 * The getContent purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getcontent.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getContent(): int {}

	/**
	 * The getDeviceOffset purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getdeviceoffset.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getDeviceOffset(): array {}

	/**
	 * The getFontOptions purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getfontoptions.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontOptions(): void {}

	/**
	 * The getType purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}

	/**
	 * The markDirty purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.markdirty.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function markDirty(): void {}

	/**
	 * The markDirtyRectangle purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @param float $width <p>Description...</p>
	 * @param float $height <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.markdirtyrectangle.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function markDirtyRectangle(float $x, float $y, float $width, float $height): void {}

	/**
	 * The setDeviceOffset purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.setdeviceoffset.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setDeviceOffset(float $x, float $y): void {}

	/**
	 * The setFallbackResolution purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.setfallbackresolution.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setFallbackResolution(float $x, float $y): void {}

	/**
	 * The showPage purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.showpage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function showPage(): void {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}

	/**
	 * The writeToPng purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $file <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.writetopng.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function writeToPng(string $file): void {}
}

/**
 * @link http://php.net/manual/ja/class.cairosurfacepattern.php
 * @since PECL cairo >= 0.1.0
 */
class CairoSurfacePattern extends \CairoPattern {

	/**
	 * The __construct purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoSurface $surface <p>Description...</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurfacepattern.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(\CairoSurface $surface) {}

	/**
	 * The getExtend purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurfacepattern.getextend.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getExtend(): int {}

	/**
	 * The getFilter purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurfacepattern.getfilter.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFilter(): int {}

	/**
	 * The getMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.getmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getMatrix(): void {}

	/**
	 * The getSurface purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurfacepattern.getsurface.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getSurface(): void {}

	/**
	 * The getType purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}

	/**
	 * The setExtend purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $extend <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurfacepattern.setextend.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setExtend(int $extend): void {}

	/**
	 * The setFilter purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $filter <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurfacepattern.setfilter.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setFilter(int $filter): void {}

	/**
	 * The setMatrix purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param \CairoMatrix $matrix <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.setmatrix.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setMatrix(\CairoMatrix $matrix): void {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairopattern.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}
}

/**
 * @link http://php.net/manual/ja/class.cairosurfacetype.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoSurfaceType {

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const IMAGE = 0;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const PDF = 1;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const PS = 2;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const XLIB = 3;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const XCB = 4;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const GLITZ = 5;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const QUARTZ = 6;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const WIN32 = 7;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const BEOS = 8;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const DIRECTFB = 9;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const SVG = 10;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const OS2 = 11;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const WIN32_PRINTING = 12;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosurfacetype.php
	 */
	const QUARTZ_IMAGE = 13;
}

/**
 * <p>Svg 専用のサーフェイスクラスで、SVG (standard vector graphics) サーフェイスバックエンドを使います。</p>
 * @link http://php.net/manual/ja/class.cairosvgsurface.php
 * @since PECL cairo >= 0.1.0
 */
class CairoSvgSurface extends \CairoSurface {

	/**
	 * The __construct purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $file <p>Description...</p>
	 * @param float $width <p>Description...</p>
	 * @param float $height <p>Description...</p>
	 * @return self <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosvgsurface.construct.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function __construct(string $file, float $width, float $height) {}

	/**
	 * The copyPage purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Emits the current page for backends that support multiple pages, but doesn't clear it, so that the contents of the current page will be retained for the next page. Use CairoSurface::showPage() if you want to get an empty page after the emission.</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.copypage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function copyPage(): void {}

	/**
	 * The createSimilar purpose
	 * <p>Create a new surface that is as compatible as possible with an existing surface. For example the new surface will have the same fallback resolution and font options as other. Generally, the new surface will also use the same backend as other, unless that is not possible for some reason. The type of the returned surface may be examined with CairoSurface::getType(). Initially the surface contents are all 0 (transparent if contents have transparency, black otherwise.)</p>
	 * @param \CairoSurface $other <p>An existing surface used to select the backend of the new surface</p>
	 * @param int $content <p>The content for the new surface. See the CairoContent class for possible values.</p>
	 * @param string $width <p>Width of the new surface, (in device-space units).</p>
	 * @param string $height <p>Height of the new surface, (in device-space units).</p>
	 * @return void <p>A new CairoSurface</p>
	 * @link http://php.net/manual/ja/cairosurface.createsimilar.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function createSimilar(\CairoSurface $other, int $content, string $width, string $height): void {}

	/**
	 * The finish purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.finish.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function finish(): void {}

	/**
	 * The flush purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.flush.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function flush(): void {}

	/**
	 * The getContent purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getcontent.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getContent(): int {}

	/**
	 * The getDeviceOffset purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return array <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getdeviceoffset.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getDeviceOffset(): array {}

	/**
	 * The getFontOptions purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.getfontoptions.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getFontOptions(): void {}

	/**
	 * The getType purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.gettype.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function getType(): int {}

	/**
	 * Used to retrieve a list of supported SVG versions
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns a numerically indexed array of currently available CairoSvgVersion constants. In order to retreive the string values for each item, use <code>CairoSvgSurface::versionToString()</code>.</p>
	 * @return array <p>Returns a numerically indexed array of integer values.</p>
	 * @link http://php.net/manual/ja/cairosvgsurface.getversions.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function getVersions(): array {}

	/**
	 * The markDirty purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.markdirty.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function markDirty(): void {}

	/**
	 * The markDirtyRectangle purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @param float $width <p>Description...</p>
	 * @param float $height <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.markdirtyrectangle.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function markDirtyRectangle(float $x, float $y, float $width, float $height): void {}

	/**
	 * The restrictToVersion purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $version <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosvgsurface.restricttoversion.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function restrictToVersion(int $version): void {}

	/**
	 * The setDeviceOffset purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.setdeviceoffset.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setDeviceOffset(float $x, float $y): void {}

	/**
	 * The setFallbackResolution purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param float $x <p>Description...</p>
	 * @param float $y <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.setfallbackresolution.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function setFallbackResolution(float $x, float $y): void {}

	/**
	 * The showPage purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.showpage.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function showPage(): void {}

	/**
	 * The status purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @return int <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.status.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function status(): int {}

	/**
	 * The versionToString purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param int $version <p>Description...</p>
	 * @return string <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosvgsurface.versiontostring.php
	 * @since PECL cairo >= 0.1.0
	 */
	public static function versionToString(int $version): string {}

	/**
	 * The writeToPng purpose
	 * <p>The method description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $file <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairosurface.writetopng.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function writeToPng(string $file): void {}
}

/**
 * @link http://php.net/manual/ja/class.cairosvgversion.php
 * @since バージョン情報なし。おそらく SVN 版にしか存在しないでしょう
 */
class CairoSvgVersion {

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosvgversion.php
	 */
	const VERSION_1_1 = 0;

	/**
	 * @var integer <p>Description here...</p>
	 * @link http://php.net/manual/ja/class.cairosvgversion.php
	 */
	const VERSION_1_2 = 1;
}

/**
 * <p><b>CairoToyFontFace</b> クラスを <code>CairoContext::selectFontFace()</code> の代わりに使うと、コンテキストに依存しないトイフォントを作れます。</p>
 * @link http://php.net/manual/ja/class.cairotoyfontface.php
 * @since PECL cairo >= 0.1.0
 */
class CairoToyFontFace extends \CairoFontFace {

	/**
	 * The selectFontFace purpose
	 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
	 * @param string $family <p>Description...</p>
	 * @param int $slant <p>Description...</p>
	 * @param int $weight <p>Description...</p>
	 * @return void <p>Description...</p>
	 * @link http://php.net/manual/ja/cairocontext.selectfontface.php
	 * @since PECL cairo >= 0.1.0
	 */
	public function selectFontFace(string $family, int $slant = NULL, int $weight = NULL): void {}
}

/**
 * Appends a path to current path
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Appends the <code>path</code> onto the current path. The <code>path</code> may be either the return value from one of <code>CairoContext::copyPath()</code> or <code>CairoContext::copyPathFlat()</code>;</p><p>if <code>path</code> is not a valid CairoPath instance a CairoException will be thrown</p>
 * @param \CairoContext $context <p>CairoContext object</p>
 * @param \CairoPath $path <p>CairoPath object</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.appendpath.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_append_path(\CairoContext $context, \CairoPath $path): void {}

/**
 * Adds a circular arc
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Adds a circular arc of the given radius to the current path. The arc is centered at (<code>x</code>, <code>y</code>), begins at <code>angle1</code> and proceeds in the direction of increasing angles to end at <code>angle2</code>. If <code>angle2</code> is less than <code>angle1</code> it will be progressively increased by 2&#42;M_PI until it is greater than <code>angle1</code>. If there is a current point, an initial line segment will be added to the path to connect the current point to the beginning of the arc. If this initial line is undesired, it can be avoided by calling <code>CairoContext::newSubPath()</code> or procedural <code>cairo_new_sub_path()</code> before calling <b>CairoContext::arc()</b> or <b>cairo_arc()</b>. Angles are measured in radians. An angle of 0.0 is in the direction of the positive X axis (in user space). An angle of M_PI/2.0 radians (90 degrees) is in the direction of the positive Y axis (in user space). Angles increase in the direction from the positive X axis toward the positive Y axis. So with the default transformation matrix, angles increase in a clockwise direction. (To convert from degrees to radians, use degrees &#42; (M_PI / 180.).) This function gives the arc in the direction of increasing angles; see <code>CairoContext::arcNegative()</code> or <code>cairo_arc_negative()</code> to get the arc in the direction of decreasing angles.</p>
 * @param \CairoContext $context <p>A valid CairoContext object</p>
 * @param float $x <p>x position</p>
 * @param float $y <p>y position</p>
 * @param float $radius <p>Radius of the arc</p>
 * @param float $angle1 <p>start angle</p>
 * @param float $angle2 <p>end angle</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.arc.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_arc(\CairoContext $context, float $x, float $y, float $radius, float $angle1, float $angle2): void {}

/**
 * Adds a negative arc
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Adds a circular arc of the given <code>radius</code> to the current path. The arc is centered at (<code>x</code>, <code>y</code>), begins at <code>angle1</code> and proceeds in the direction of decreasing angles to end at <code>angle2</code>. If <code>angle2</code> is greater than <code>angle1</code> it will be progressively decreased by 2&#42;M_PI until it is less than <code>angle1</code>. See <code>CairoContext::arc()</code> or <code>cairo_arc()</code> for more details. This function differs only in the direction of the arc between the two angles.</p>
 * @param \CairoContext $context <p>A valid CairoContext object</p>
 * @param float $x <p>double x position</p>
 * @param float $y <p>double y position</p>
 * @param float $radius <p>The radius of the desired negative arc</p>
 * @param float $angle1 <p>Start angle of the arc</p>
 * @param float $angle2 <p>End angle of the arc</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.arcnegative.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_arc_negative(\CairoContext $context, float $x, float $y, float $radius, float $angle1, float $angle2): void {}

/**
 * Retrieves the availables font types
 * <p>オブジェクト指向型:</p><p>手続き型:</p><p>Returns an array with the available font backends</p>
 * @return array <p>A list-type array with all available font backends.</p>
 * @link http://php.net/manual/ja/cairo.availablefonts.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_available_fonts(): array {}

/**
 * Retrieves all available surfaces
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns an array with the available surface backends</p>
 * @return array <p>A list-type array with all available surface backends.</p>
 * @link http://php.net/manual/ja/cairo.availablesurfaces.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_available_surfaces(): array {}

/**
 * Establishes a new clip region
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Establishes a new clip region by intersecting the current clip region with the current path as it would be filled by <code>CairoContext::fill()</code> or <code>cairo_fill()</code> and according to the current fill rule (see <code>CairoContext::setFillRule()</code> or <code>cairo_set_fill_rule()</code>).</p><p>After <b>CairoContext::clip()</b> or <b>cairo_clip()</b>, the current path will be cleared from the cairo context.</p><p>The current clip region affects all drawing operations by effectively masking out any changes to the surface that are outside the current clip region.</p><p>Calling <b>CairoContext::clip()</b> or <b>cairo_clip()</b> can only make the clip region smaller, never larger. But the current clip is part of the graphics state, so a temporary restriction of the clip region can be achieved by calling <b>CairoContext::clip()</b> or <b>cairo_clip()</b> within a <code>CairoContext::save()</code>/<code>CairoContext::restore()</code> or <code>cairo_save()</code>/<code>cairo_restore()</code> pair. The only other means of increasing the size of the clip region is <code>CairoContext::resetClip()</code> or procedural <code>cairo_reset_clip()</code>.</p>
 * @param \CairoContext $context <p>A valid CairoContext object</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.clip.php
 * @see cairo_reset_clip()
 * @since PECL cairo >= 0.1.0
 */
function cairo_clip(\CairoContext $context): void {}

/**
 * Computes the area inside the current clip
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Computes a bounding box in user coordinates covering the area inside the current clip.</p>
 * @param \CairoContext $context <p>A valid CairoContext object</p>
 * @return array <p>An array containing the (float)x1, (float)y1, (float)x2, (float)y2, coordinates covering the area inside the current clip</p>
 * @link http://php.net/manual/ja/cairocontext.clipextents.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_clip_extents(\CairoContext $context): array {}

/**
 * Establishes a new clip region from the current clip
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Establishes a new clip region by intersecting the current clip region with the current path as it would be filled by <b>Context.fill()</b> and according to the current FILL RULE (see <code>CairoContext::setFillRule()</code> or <code>cairo_set_fill_rule()</code>).</p><p>Unlike <code>CairoContext::clip()</code>, <b>CairoContext::clipPreserve()</b> preserves the path within the Context. The current clip region affects all drawing operations by effectively masking out any changes to the surface that are outside the current clip region.</p><p>Calling <b>CairoContext::clipPreserve()</b> can only make the clip region smaller, never larger. But the current clip is part of the graphics state, so a temporary restriction of the clip region can be achieved by calling <b>CairoContext::clipPreserve()</b> within a <code>CairoContext::save()</code>/<code>CairoContext::restore()</code> pair. The only other means of increasing the size of the clip region is <code>CairoContext::resetClip()</code>.</p>
 * @param \CairoContext $context <p>A valid CairoContext object</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.clippreserve.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_clip_preserve(\CairoContext $context): void {}

/**
 * Retrieves the current clip as a list of rectangles
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns a list-type array with the current clip region as a list of rectangles in user coordinates</p>
 * @param \CairoContext $context <p>A valid CairoContext object created with <code>CairoContext::__construct()</code> or <code>cairo_create()</code></p>
 * @return array <p>An array of user-space represented rectangles for the current clip</p><p>(The status in the list may be CAIRO_STATUS_CLIP_NOT_REPRESENTABLE to indicate that the clip region cannot be represented as a list of user-space rectangles. The status may have other values to indicate other errors.)</p>
 * @link http://php.net/manual/ja/cairocontext.cliprectanglelist.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_clip_rectangle_list(\CairoContext $context): array {}

/**
 * Closes the current path
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Adds a line segment to the path from the current point to the beginning of the current sub-path, (the most recent point passed to <code>CairoContext::moveTo()</code>), and closes this sub-path. After this call the current point will be at the joined endpoint of the sub-path.</p><p>The behavior of close_path() is distinct from simply calling <code>CairoContext::lineTo()</code> with the equivalent coordinate in the case of stroking. When a closed sub-path is stroked, there are no caps on the ends of the sub-path. Instead, there is a line join connecting the final and initial segments of the sub-path.</p><p>If there is no current point before the call to <b>CairoContext::closePath()</b>, this function will have no effect.</p>
 * @param \CairoContext $context <p>A valid CairoContext object created with <code>CairoContext::__construct()</code> or <code>cairo_create()</code></p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.closepath.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_close_path(\CairoContext $context): void {}

/**
 * Emits the current page
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Emits the current page for backends that support multiple pages, but doesn’t clear it, so, the contents of the current page will be retained for the next page too. Use <code>CairoContext::showPage()</code> if you want to get an empty page after the emission.</p><p>This is a convenience function that simply calls <code>CairoSurface::copyPage()</code> on CairoContext’s target.</p>
 * @param \CairoContext $context <p>A valid CairoContext object created with <code>CairoContext::__construct()</code> or <code>cairo_create()</code></p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.copypage.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_copy_page(\CairoContext $context): void {}

/**
 * Creates a copy of the current path
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Creates a copy of the current path and returns it to the user as a CairoPath. See CairoPath for hints on how to iterate over the returned data structure.</p><p>This function will always return a valid CairoPath object, but the result will have no data, if either of the following conditions hold:</p>
 * @param \CairoContext $context <p>A valid CairoContext object created with <code>CairoContext::__construct()</code> or <code>cairo_create()</code></p>
 * @return CairoPath <p>A copy of the current CairoPath in the context</p>
 * @link http://php.net/manual/ja/cairocontext.copypath.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_copy_path(\CairoContext $context): \CairoPath {}

/**
 * Gets a flattened copy of the current path
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Gets a flattened copy of the current path and returns it to the user as a CairoPath.</p><p>This function is like <code>CairoContext::copyPath()</code> except that any curves in the path will be approximated with piecewise-linear approximations, (accurate to within the current tolerance value). That is, the result is guaranteed to not have any elements of type CAIRO_PATH_CURVE_TO which will instead be replaced by a series of CAIRO_PATH_LINE_TO elements.</p>
 * @param \CairoContext $context <p>A CairoContext object</p>
 * @return CairoPath <p>A copy of the current path</p>
 * @link http://php.net/manual/ja/cairocontext.copypathflat.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_copy_path_flat(\CairoContext $context): \CairoPath {}

/**
 * Returns a new CairoContext object on the requested surface
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return CairoContext <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-create.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_create(\CairoSurface $surface): \CairoContext {}

/**
 * Adds a curve
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Adds a cubic Bezier spline to the path from the current point to position <code>x3</code> ,<code>y3</code> in user-space coordinates, using <code>x1</code>, <code>y1</code> and <code>x2</code>, <code>y2</code> as the control points. After this call the current point will be <code>x3</code>, <code>y3</code>.</p><p>If there is no current point before the call to <b>CairoContext::curveTo()</b> this function will behave as if preceded by a call to <code>CairoContext::moveTo()</code> (<code>x1</code>, <code>y1</code>).</p>
 * @param \CairoContext $context <p>A valid CairoContext object created with <code>CairoContext::__construct()</code> or <code>cairo_create()</code></p>
 * @param float $x1 <p>First control point in the x axis for the curve</p>
 * @param float $y1 <p>First control point in the y axis for the curve</p>
 * @param float $x2 <p>Second control point in x axis for the curve</p>
 * @param float $y2 <p>Second control point in y axis for the curve</p>
 * @param float $x3 <p>Final point in the x axis for the curve</p>
 * @param float $y3 <p>Final point in the y axis for the curve</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.curveto.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_curve_to(\CairoContext $context, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): void {}

/**
 * Transform a coordinate
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Transform a coordinate from device space to user space by multiplying the given point by the inverse of the current transformation matrix (CTM).</p>
 * @param \CairoContext $context <p>A valid CairoContext object created with <code>CairoContext::__construct()</code> or <code>cairo_create()</code></p>
 * @param float $x <p>x value of the coordinate</p>
 * @param float $y <p>y value of the coordinate</p>
 * @return array <p>An array containing the x and y coordinates in the user-space</p>
 * @link http://php.net/manual/ja/cairocontext.devicetouser.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_device_to_user(\CairoContext $context, float $x, float $y): array {}

/**
 * Transform a distance
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Transform a distance vector from device space to user space. This function is similar to <code>CairoContext::deviceToUser()</code> or <code>cairo_device_to_user()</code> except that the translation components of the inverse Cairo Transformation Matrix will be ignored when transforming (<code>x</code>,<code>y</code>).</p>
 * @param \CairoContext $context <p>A valid CairoContext object created with <code>CairoContext::__construct()</code> or <code>cairo_create()</code></p>
 * @param float $x <p>X component of a distance vector</p>
 * @param float $y <p>Y component of a distance vector</p>
 * @return array <p>Returns an array with the x and y values of a distance vector in the user-space</p>
 * @link http://php.net/manual/ja/cairocontext.devicetouserdistance.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_device_to_user_distance(\CairoContext $context, float $x, float $y): array {}

/**
 * Fills the current path
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>A drawing operator that fills the current path according to the current CairoFillRule, (each sub-path is implicitly closed before being filled). After <b>CairoContext::fill()</b> or <b>cairo_fill()</b>, the current path will be cleared from the CairoContext.</p>
 * @param \CairoContext $context <p>A valid CairoContext object created with <code>CairoContext::__construct()</code> or <code>cairo_create()</code></p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.fill.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_fill(\CairoContext $context): void {}

/**
 * Computes the filled area
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Computes a bounding box in user coordinates covering the area that would be affected, (the “inked” area), by a <code>CairoContext::fill()</code> operation given the current path and fill parameters. If the current path is empty, returns an empty rectangle (0,0,0,0). Surface dimensions and clipping are not taken into account.</p><p>Contrast with <code>CairoContext::pathExtents()</code>, which is similar, but returns non-zero extents for some paths with no inked area, (such as a simple line segment).</p><p>Note that <b>CairoContext::fillExtents()</b> must necessarily do more work to compute the precise inked areas in light of the fill rule, so <code>CairoContext::pathExtents()</code> may be more desirable for sake of performance if the non-inked path extents are desired.</p>
 * @param \CairoContext $context <p>A valid CairoContext object created with <code>CairoContext::__construct()</code> or <code>cairo_create()</code></p>
 * @return array <p>An array with the coordinates of the afected area</p>
 * @link http://php.net/manual/ja/cairocontext.fillextents.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_fill_extents(\CairoContext $context): array {}

/**
 * Fills and preserve the current path
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>A drawing operator that fills the current path according to the current CairoFillRule, (each sub-path is implicitly closed before being filled). Unlike <code>CairoContext::fill()</code>, <b>CairoContext::fillPreserve()</b> (Procedural <code>cairo_fill()</code>, <b>cairo_fill_preserve()</b>, respectively) preserves the path within the Context.</p>
 * @param \CairoContext $context <p>A valid CairoContext object created with <code>CairoContext::__construct()</code> or <code>cairo_create()</code></p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.fillpreserve.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_fill_preserve(\CairoContext $context): void {}

/**
 * Get the font extents
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Gets the font extents for the currently selected font.</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return array <p>An array containing the font extents for the current font.</p>
 * @link http://php.net/manual/ja/cairocontext.fontextents.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_extents(\CairoContext $context): array {}

/**
 * Retrieves the font face type
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>This function returns the type of the backend used to create a font face. See CairoFontType class constants for available types.</p>
 * @param \CairoFontFace $fontface
 * @return int <p>A font type that can be any one defined in CairoFontType</p>
 * @link http://php.net/manual/ja/cairofontface.gettype.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_face_get_type(\CairoFontFace $fontface): int {}

/**
 * Check for CairoFontFace errors
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Checks whether an error has previously occurred for this font face</p>
 * @param \CairoFontFace $fontface <p>A valid CairoFontFace object</p>
 * @return int <p>CAIRO_STATUS_SUCCESS or another error such as CAIRO_STATUS_NO_MEMORY.</p>
 * @link http://php.net/manual/ja/cairofontface.status.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_face_status(\CairoFontFace $fontface): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return CairoFontOptions <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-create.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_create(): \CairoFontOptions {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @param \CairoFontOptions $other <p>Description...</p>
 * @return bool <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-equal.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_equal(\CairoFontOptions $options, \CairoFontOptions $other): bool {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-get-antialias.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_get_antialias(\CairoFontOptions $options): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-get-hint-metrics.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_get_hint_metrics(\CairoFontOptions $options): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-get-hint-style.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_get_hint_style(\CairoFontOptions $options): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-get-subpixel-order.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_get_subpixel_order(\CairoFontOptions $options): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-hash.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_hash(\CairoFontOptions $options): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @param \CairoFontOptions $other <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-merge.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_merge(\CairoFontOptions $options, \CairoFontOptions $other): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @param int $antialias <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-set-antialias.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_set_antialias(\CairoFontOptions $options, int $antialias): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @param int $hint_metrics <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-set-hint-metrics.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_set_hint_metrics(\CairoFontOptions $options, int $hint_metrics): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @param int $hint_style <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-set-hint-style.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_set_hint_style(\CairoFontOptions $options, int $hint_style): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @param int $subpixel_order <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-set-subpixel-order.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_set_subpixel_order(\CairoFontOptions $options, int $subpixel_order): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontOptions $options <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-font-options-status.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_font_options_status(\CairoFontOptions $options): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param int $format <p>Description...</p>
 * @param int $width <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-format-stride-for-width.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_format_stride_for_width(int $format, int $width): int {}

/**
 * Retrives the current antialias mode
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns the current CairoAntialias mode, as set by <code>CairoContext::setAntialias()</code>.</p>
 * @param \CairoContext $context <p>A valid CairoContext object created with <code>CairoContext::__construct()</code> or <code>cairo_create()</code></p>
 * @return int <p>The current CairoAntialias mode.</p>
 * @link http://php.net/manual/ja/cairocontext.getantialias.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_antialias(\CairoContext $context): int {}

/**
 * The getCurrentPoint purpose
 * <p>オブジェクト指向型</p><p>手続き型</p><p>Gets the current point of the current path, which is conceptually the final point reached by the path so far.</p><p>The current point is returned in the user-space coordinate system. If there is no defined current point or if cr is in an error status, x and y will both be set to 0.0. It is possible to check this in advance with <code>CairoContext::hasCurrentPoint()</code>.</p><p>Most path construction functions alter the current point. See the following for details on how they affect the current point: <code>CairoContext::newPath()</code>, <code>CairoContext::newSubPath()</code>, <code>CairoContext::appendPath()</code>, <code>CairoContext::closePath()</code>, <code>CairoContext::moveTo()</code>, <code>CairoContext::lineTo()</code>, <code>CairoContext::curveTo()</code>, <code>CairoContext::relMoveTo()</code>, <code>CairoContext::relLineTo()</code>, <code>CairoContext::relCurveTo()</code>, <code>CairoContext::arc()</code>, <code>CairoContext::arcNegative()</code>, <code>CairoContext::rectangle()</code>, <code>CairoContext::textPath()</code>, <code>CairoContext::glyphPath()</code>.</p><p>Some functions use and alter the current point but do not otherwise change current path: <code>CairoContext::showText()</code>.</p><p>Some functions unset the current path and as a result, current point: <code>CairoContext::fill()</code>, <code>CairoContext::stroke()</code>.</p>
 * @param \CairoContext $context <p>A valid CairoContext object.</p>
 * @return array <p>An array containing the x (index 0) and y (index 1) coordinates of the current point.</p>
 * @link http://php.net/manual/ja/cairocontext.getcurrentpoint.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_current_point(\CairoContext $context): array {}

/**
 * The getDash purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return array <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getdash.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_dash(\CairoContext $context): array {}

/**
 * The getDashCount purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return int <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getdashcount.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_dash_count(\CairoContext $context): int {}

/**
 * The getFillRule purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return int <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getfillrule.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_fill_rule(\CairoContext $context): int {}

/**
 * The getFontFace purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getfontface.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_font_face(\CairoContext $context): void {}

/**
 * The getFontMatrix purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getfontmatrix.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_font_matrix(\CairoContext $context): void {}

/**
 * The getFontOptions purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getfontoptions.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_font_options(\CairoContext $context): void {}

/**
 * The getGroupTarget purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getgrouptarget.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_group_target(\CairoContext $context): void {}

/**
 * The getLineCap purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return int <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getlinecap.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_line_cap(\CairoContext $context): int {}

/**
 * The getLineJoin purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return int <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getlinejoin.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_line_join(\CairoContext $context): int {}

/**
 * The getLineWidth purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return float <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getlinewidth.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_line_width(\CairoContext $context): float {}

/**
 * The getMatrix purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getmatrix.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_matrix(\CairoContext $context): void {}

/**
 * The getMiterLimit purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return float <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getmiterlimit.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_miter_limit(\CairoContext $context): float {}

/**
 * The getOperator purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return int <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getoperator.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_operator(\CairoContext $context): int {}

/**
 * The getScaledFont purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getscaledfont.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_scaled_font(\CairoContext $context): void {}

/**
 * The getSource purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.getsource.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_source(\CairoContext $context): void {}

/**
 * The getTarget purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.gettarget.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_target(\CairoContext $context): void {}

/**
 * The getTolerance purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return float <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.gettolerance.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_get_tolerance(\CairoContext $context): float {}

/**
 * The glyphPath purpose
 * <p>オブジェクト指向型</p><p>手続き型</p><p>Adds closed paths for the glyphs to the current path. The generated path if filled, achieves an effect similar to that of <b>CairoContext::showGlyphs()</b>.</p>
 * @param \CairoContext $context <p>A CairoContext object</p>
 * @param array $glyphs <p>Array of glyphs</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.glyphpath.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_glyph_path(\CairoContext $context, array $glyphs): void {}

/**
 * The hasCurrentPoint purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns whether a current point is defined on the current path. See <code>CairoContext::getCurrentPoint()</code> for details on the current point.</p>
 * @param \CairoContext $context <p>A valid CairoContext object.</p>
 * @return bool <p>Whether a current point is defined</p>
 * @link http://php.net/manual/ja/cairocontext.hascurrentpoint.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_has_current_point(\CairoContext $context): bool {}

/**
 * The identityMatrix purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.identitymatrix.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_identity_matrix(\CairoContext $context): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param int $format <p>Description...</p>
 * @param int $width <p>Description...</p>
 * @param int $height <p>Description...</p>
 * @return CairoImageSurface <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-image-surface-create.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_image_surface_create(int $format, int $width, int $height): \CairoImageSurface {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $data <p>Description...</p>
 * @param int $format <p>Description...</p>
 * @param int $width <p>Description...</p>
 * @param int $height <p>Description...</p>
 * @param int $stride <p>Description...</p>
 * @return CairoImageSurface <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-image-surface-create-for-data.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_image_surface_create_for_data(string $data, int $format, int $width, int $height, int $stride = -1): \CairoImageSurface {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param mixed $file <p>Description...</p>
 * @return CairoImageSurface <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-image-surface-create-from-png.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_image_surface_create_from_png($file): \CairoImageSurface {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoImageSurface $surface <p>Description...</p>
 * @return string <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-image-surface-get-data.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_image_surface_get_data(\CairoImageSurface $surface): string {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoImageSurface $surface <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-image-surface-get-format.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_image_surface_get_format(\CairoImageSurface $surface): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoImageSurface $surface <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-image-surface-get-height.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_image_surface_get_height(\CairoImageSurface $surface): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoImageSurface $surface <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-image-surface-get-stride.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_image_surface_get_stride(\CairoImageSurface $surface): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoImageSurface $surface <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-image-surface-get-width.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_image_surface_get_width(\CairoImageSurface $surface): int {}

/**
 * The inFill purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return bool <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.infill.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_in_fill(\CairoContext $context, float $x, float $y): bool {}

/**
 * The inStroke purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return bool <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.instroke.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_in_stroke(\CairoContext $context, float $x, float $y): bool {}

/**
 * The lineTo purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.lineto.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_line_to(\CairoContext $context, float $x, float $y): void {}

/**
 * The mask purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param \CairoPattern $pattern <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.mask.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_mask(\CairoContext $context, \CairoPattern $pattern): void {}

/**
 * The maskSurface purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.masksurface.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_mask_surface(\CairoContext $context, \CairoSurface $surface, float $x = NULL, float $y = NULL): void {}

/**
 * のエイリアス CairoMatrix::initScale()
 * <p>この関数は次の関数のエイリアスです。 <code>CairoMatrix::initScale()</code>.</p><p>この関数エイリアスは非推奨であり、下位互換性維持のために残されています。 今後、PHP から削除される可能性がありますので、この関数を使用しないことを推奨します。</p>
 * @link http://php.net/manual/ja/function.cairo-matrix-create-scale.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_create_scale() {}

/**
 * のエイリアス CairoMatrix::initTranslate()
 * <p>この関数は次の関数のエイリアスです。 <code>CairoMatrix::initTranslate()</code>.</p><p>この関数エイリアスは非推奨であり、下位互換性維持のために残されています。 今後、PHP から削除される可能性がありますので、この関数を使用しないことを推奨します。</p>
 * @link http://php.net/manual/ja/function.cairo-matrix-create-translate.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_create_translate() {}

/**
 * Creates a new CairoMatrix object
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns new CairoMatrix object. Matrices are used throughout cairo to convert between different coordinate spaces. Sets matrix to be the affine transformation given by xx, yx, xy, yy, x0, y0. The transformation is given by: x_new = xx &#42; x + xy &#42; y + x0; and y_new = yx &#42; x + yy &#42; y + y0;</p>
 * @param float $xx <p>xx component of the affine transformation</p>
 * @param float $yx <p>yx component of the affine transformation</p>
 * @param float $xy <p>xy component of the affine transformation</p>
 * @param float $yy <p>yy component of the affine transformation</p>
 * @param float $x0 <p>X translation component of the affine transformation</p>
 * @param float $y0 <p>Y translation component of the affine transformation</p>
 * @return object <p>Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.</p>
 * @link http://php.net/manual/ja/cairomatrix.construct.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_init(float $xx = 1.0, float $yx = 0.0, float $xy = 0.0, float $yy = 1.0, float $x0 = 0.0, float $y0 = 0.0): object {}

/**
 * Creates a new identity matrix
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Creates a new matrix that is an identity transformation. An identity transformation means the source data is copied into the destination data without change</p>
 * @return object <p>Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.</p>
 * @link http://php.net/manual/ja/cairomatrix.initidentity.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_init_identity(): object {}

/**
 * Creates a new rotated matrix
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Creats a new matrix to a transformation that rotates by radians provided</p>
 * @param float $radians <p>angle of rotation, in radians. The direction of rotation is defined such that positive angles rotate in the direction from the positive X axis toward the positive Y axis. With the default axis orientation of cairo, positive angles rotate in a clockwise direction.</p>
 * @return object <p>Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.</p>
 * @link http://php.net/manual/ja/cairomatrix.initrotate.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_init_rotate(float $radians): object {}

/**
 * Creates a new scaling matrix
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Creates a new matrix to a transformation that scales by sx and sy in the X and Y dimensions, respectively.</p>
 * @param float $sx <p>scale factor in the X direction</p>
 * @param float $sy <p>scale factor in the Y direction</p>
 * @return object <p>Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.</p>
 * @link http://php.net/manual/ja/cairomatrix.initscale.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_init_scale(float $sx, float $sy): object {}

/**
 * Creates a new translation matrix
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Creates a new matrix to a transformation that translates by tx and ty in the X and Y dimensions, respectively.</p>
 * @param float $tx <p>amount to translate in the X direction</p>
 * @param float $ty <p>amount to translate in the Y direction</p>
 * @return object <p>Returns a new CairoMatrix object that can be used with surfaces, contexts, and patterns.</p>
 * @link http://php.net/manual/ja/cairomatrix.inittranslate.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_init_translate(float $tx, float $ty): object {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoMatrix $matrix <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-matrix-invert.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_invert(\CairoMatrix $matrix): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoMatrix $matrix1 <p>Description...</p>
 * @param \CairoMatrix $matrix2 <p>Description...</p>
 * @return CairoMatrix <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-matrix-multiply.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_multiply(\CairoMatrix $matrix1, \CairoMatrix $matrix2): \CairoMatrix {}

/**
 * The rotate purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param string $radians <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairomatrix.rotate.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_rotate(\CairoContext $context, string $radians): void {}

/**
 * Applies scaling to a matrix
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Applies scaling by sx, sy to the transformation in the matrix. The effect of the new transformation is to first scale the coordinates by sx and sy, then apply the original transformation to the coordinates.</p>
 * @param \CairoContext $context
 * @param float $sx <p>scale factor in the X direction</p>
 * @param float $sy <p>scale factor in the Y direction</p>
 * @return void
 * @link http://php.net/manual/ja/cairomatrix.scale.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_scale(\CairoContext $context, float $sx, float $sy): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoMatrix $matrix <p>Description...</p>
 * @param float $dx <p>Description...</p>
 * @param float $dy <p>Description...</p>
 * @return array <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-matrix-transform-distance.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_transform_distance(\CairoMatrix $matrix, float $dx, float $dy): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoMatrix $matrix <p>Description...</p>
 * @param float $dx <p>Description...</p>
 * @param float $dy <p>Description...</p>
 * @return array <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-matrix-transform-point.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_transform_point(\CairoMatrix $matrix, float $dx, float $dy): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoMatrix $matrix <p>Description...</p>
 * @param float $tx <p>Description...</p>
 * @param float $ty <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-matrix-translate.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_matrix_translate(\CairoMatrix $matrix, float $tx, float $ty): void {}

/**
 * The moveTo purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Begin a new sub-path. After this call the current point will be (x, y).</p>
 * @param \CairoContext $context <p>A valid CairoContext object.</p>
 * @param float $x <p>The x coordinate of the new position.</p>
 * @param float $y <p>The y coordinate of the new position</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.moveto.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_move_to(\CairoContext $context, float $x, float $y): void {}

/**
 * The newPath purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Clears the current path. After this call there will be no path and no current point.</p>
 * @param \CairoContext $context <p>A valid CairoContext object.</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/cairocontext.newpath.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_new_path(\CairoContext $context): void {}

/**
 * The newSubPath purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.newsubpath.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_new_sub_path(\CairoContext $context): void {}

/**
 * The paint purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.paint.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_paint(\CairoContext $context): void {}

/**
 * The paintWithAlpha purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $alpha <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.paintwithalpha.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_paint_with_alpha(\CairoContext $context, float $alpha): void {}

/**
 * The pathExtents purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return array <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.pathextents.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_path_extents(\CairoContext $context): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoGradientPattern $pattern <p>Description...</p>
 * @param float $offset <p>Description...</p>
 * @param float $red <p>Description...</p>
 * @param float $green <p>Description...</p>
 * @param float $blue <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-add-color-stop-rgb.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_add_color_stop_rgb(\CairoGradientPattern $pattern, float $offset, float $red, float $green, float $blue): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoGradientPattern $pattern <p>Description...</p>
 * @param float $offset <p>Description...</p>
 * @param float $red <p>Description...</p>
 * @param float $green <p>Description...</p>
 * @param float $blue <p>Description...</p>
 * @param float $alpha <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-add-color-stop-rgba.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_add_color_stop_rgba(\CairoGradientPattern $pattern, float $offset, float $red, float $green, float $blue, float $alpha): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return CairoPattern <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-create-for-surface.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_create_for_surface(\CairoSurface $surface): \CairoPattern {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param float $x0 <p>Description...</p>
 * @param float $y0 <p>Description...</p>
 * @param float $x1 <p>Description...</p>
 * @param float $y1 <p>Description...</p>
 * @return CairoPattern <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-create-linear.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_create_linear(float $x0, float $y0, float $x1, float $y1): \CairoPattern {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param float $x0 <p>Description...</p>
 * @param float $y0 <p>Description...</p>
 * @param float $r0 <p>Description...</p>
 * @param float $x1 <p>Description...</p>
 * @param float $y1 <p>Description...</p>
 * @param float $r1 <p>Description...</p>
 * @return CairoPattern <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-create-radial.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_create_radial(float $x0, float $y0, float $r0, float $x1, float $y1, float $r1): \CairoPattern {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param float $red <p>Description...</p>
 * @param float $green <p>Description...</p>
 * @param float $blue <p>Description...</p>
 * @return CairoPattern <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-create-rgb.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_create_rgb(float $red, float $green, float $blue): \CairoPattern {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param float $red <p>Description...</p>
 * @param float $green <p>Description...</p>
 * @param float $blue <p>Description...</p>
 * @param float $alpha <p>Description...</p>
 * @return CairoPattern <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-create-rgba.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_create_rgba(float $red, float $green, float $blue, float $alpha): \CairoPattern {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoGradientPattern $pattern <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-get-color-stop-count.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_get_color_stop_count(\CairoGradientPattern $pattern): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoGradientPattern $pattern <p>Description...</p>
 * @param int $index <p>Description...</p>
 * @return array <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-get-color-stop-rgba.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_get_color_stop_rgba(\CairoGradientPattern $pattern, int $index): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $pattern <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-get-extend.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_get_extend(string $pattern): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurfacePattern $pattern <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-get-filter.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_get_filter(\CairoSurfacePattern $pattern): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoLinearGradient $pattern <p>Description...</p>
 * @return array <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-get-linear-points.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_get_linear_points(\CairoLinearGradient $pattern): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPattern $pattern <p>Description...</p>
 * @return CairoMatrix <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-get-matrix.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_get_matrix(\CairoPattern $pattern): \CairoMatrix {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoRadialGradient $pattern <p>Description...</p>
 * @return array <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-get-radial-circles.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_get_radial_circles(\CairoRadialGradient $pattern): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSolidPattern $pattern <p>Description...</p>
 * @return array <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-get-rgba.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_get_rgba(\CairoSolidPattern $pattern): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurfacePattern $pattern <p>Description...</p>
 * @return CairoSurface <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-get-surface.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_get_surface(\CairoSurfacePattern $pattern): \CairoSurface {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPattern $pattern <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-get-type.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_get_type(\CairoPattern $pattern): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $pattern <p>Description...</p>
 * @param string $extend <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-set-extend.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_set_extend(string $pattern, string $extend): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurfacePattern $pattern <p>Description...</p>
 * @param int $filter <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-set-filter.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_set_filter(\CairoSurfacePattern $pattern, int $filter): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPattern $pattern <p>Description...</p>
 * @param \CairoMatrix $matrix <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-set-matrix.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_set_matrix(\CairoPattern $pattern, \CairoMatrix $matrix): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPattern $pattern <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pattern-status.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pattern_status(\CairoPattern $pattern): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $file <p>Description...</p>
 * @param float $width <p>Description...</p>
 * @param float $height <p>Description...</p>
 * @return CairoPdfSurface <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pdf-surface-create.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pdf_surface_create(string $file, float $width, float $height): \CairoPdfSurface {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPdfSurface $surface <p>Description...</p>
 * @param float $width <p>Description...</p>
 * @param float $height <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-pdf-surface-set-size.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pdf_surface_set_size(\CairoPdfSurface $surface, float $width, float $height): void {}

/**
 * The popGroup purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.popgroup.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pop_group(\CairoContext $context): void {}

/**
 * The popGroupToSource purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.popgrouptosource.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_pop_group_to_source(\CairoContext $context): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @return array <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-ps-get-levels.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_ps_get_levels(): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param int $level <p>Description...</p>
 * @return string <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-ps-level-to-string.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_ps_level_to_string(int $level): string {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $file <p>Description...</p>
 * @param float $width <p>Description...</p>
 * @param float $height <p>Description...</p>
 * @return CairoPsSurface <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-ps-surface-create.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_ps_surface_create(string $file, float $width, float $height): \CairoPsSurface {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPsSurface $surface <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-ps-surface-dsc-begin-page-setup.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_ps_surface_dsc_begin_page_setup(\CairoPsSurface $surface): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPsSurface $surface <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-ps-surface-dsc-begin-setup.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_ps_surface_dsc_begin_setup(\CairoPsSurface $surface): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPsSurface $surface <p>Description...</p>
 * @param string $comment <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-ps-surface-dsc-comment.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_ps_surface_dsc_comment(\CairoPsSurface $surface, string $comment): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPsSurface $surface <p>Description...</p>
 * @return bool <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-ps-surface-get-eps.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_ps_surface_get_eps(\CairoPsSurface $surface): bool {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPsSurface $surface <p>Description...</p>
 * @param int $level <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-ps-surface-restrict-to-level.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_ps_surface_restrict_to_level(\CairoPsSurface $surface, int $level): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPsSurface $surface <p>Description...</p>
 * @param bool $level <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-ps-surface-set-eps.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_ps_surface_set_eps(\CairoPsSurface $surface, bool $level): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoPsSurface $surface <p>Description...</p>
 * @param float $width <p>Description...</p>
 * @param float $height <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-ps-surface-set-size.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_ps_surface_set_size(\CairoPsSurface $surface, float $width, float $height): void {}

/**
 * The pushGroup purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.pushgroup.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_push_group(\CairoContext $context): void {}

/**
 * The pushGroupWithContent purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param int $content <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.pushgroupwithcontent.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_push_group_with_content(\CairoContext $context, int $content): void {}

/**
 * The rectangle purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @param float $width <p>Description...</p>
 * @param float $height <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.rectangle.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_rectangle(\CairoContext $context, float $x, float $y, float $width, float $height): void {}

/**
 * The relCurveTo purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $x1 <p>Description...</p>
 * @param float $y1 <p>Description...</p>
 * @param float $x2 <p>Description...</p>
 * @param float $y2 <p>Description...</p>
 * @param float $x3 <p>Description...</p>
 * @param float $y3 <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.relcurveto.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_rel_curve_to(\CairoContext $context, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): void {}

/**
 * The relLineTo purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.rellineto.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_rel_line_to(\CairoContext $context, float $x, float $y): void {}

/**
 * The relMoveTo purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.relmoveto.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_rel_move_to(\CairoContext $context, float $x, float $y): void {}

/**
 * The resetClip purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.resetclip.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_reset_clip(\CairoContext $context): void {}

/**
 * The restore purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.restore.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_restore(\CairoContext $context): void {}

/**
 * The rotate purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $angle <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.rotate.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_rotate(\CairoContext $context, float $angle): void {}

/**
 * The save purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.save.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_save(\CairoContext $context): void {}

/**
 * The scale purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.scale.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scale(\CairoContext $context, float $x, float $y): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoFontFace $fontface <p>Description...</p>
 * @param \CairoMatrix $matrix <p>Description...</p>
 * @param \CairoMatrix $ctm <p>Description...</p>
 * @param \CairoFontOptions $fontoptions <p>Description...</p>
 * @return CairoScaledFont <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-scaled-font-create.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scaled_font_create(\CairoFontFace $fontface, \CairoMatrix $matrix, \CairoMatrix $ctm, \CairoFontOptions $fontoptions): \CairoScaledFont {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoScaledFont $scaledfont <p>Description...</p>
 * @return array <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-scaled-font-extents.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scaled_font_extents(\CairoScaledFont $scaledfont): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoScaledFont $scaledfont <p>Description...</p>
 * @return CairoMatrix <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-scaled-font-get-ctm.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scaled_font_get_ctm(\CairoScaledFont $scaledfont): \CairoMatrix {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoScaledFont $scaledfont <p>Description...</p>
 * @return CairoFontFace <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-scaled-font-get-font-face.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scaled_font_get_font_face(\CairoScaledFont $scaledfont): \CairoFontFace {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoScaledFont $scaledfont <p>Description...</p>
 * @return CairoFontOptions <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-scaled-font-get-font-matrix.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scaled_font_get_font_matrix(\CairoScaledFont $scaledfont): \CairoFontOptions {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoScaledFont $scaledfont <p>Description...</p>
 * @return CairoFontOptions <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-scaled-font-get-font-options.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scaled_font_get_font_options(\CairoScaledFont $scaledfont): \CairoFontOptions {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoScaledFont $scaledfont <p>Description...</p>
 * @return CairoMatrix <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-scaled-font-get-scale-matrix.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scaled_font_get_scale_matrix(\CairoScaledFont $scaledfont): \CairoMatrix {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoScaledFont $scaledfont <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-scaled-font-get-type.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scaled_font_get_type(\CairoScaledFont $scaledfont): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoScaledFont $scaledfont <p>Description...</p>
 * @param array $glyphs <p>Description...</p>
 * @return array <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-scaled-font-glyph-extents.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scaled_font_glyph_extents(\CairoScaledFont $scaledfont, array $glyphs): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoScaledFont $scaledfont <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-scaled-font-status.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scaled_font_status(\CairoScaledFont $scaledfont): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoScaledFont $scaledfont <p>Description...</p>
 * @param string $text <p>Description...</p>
 * @return array <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-scaled-font-text-extents.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_scaled_font_text_extents(\CairoScaledFont $scaledfont, string $text): array {}

/**
 * The selectFontFace purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param string $family <p>Description...</p>
 * @param int $slant <p>Description...</p>
 * @param int $weight <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.selectfontface.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_select_font_face(\CairoContext $context, string $family, int $slant = NULL, int $weight = NULL): void {}

/**
 * The setAntialias purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param int $antialias <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setantialias.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_antialias(\CairoContext $context, int $antialias = NULL): void {}

/**
 * The setDash purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param array $dashes <p>Description...</p>
 * @param float $offset <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setdash.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_dash(\CairoContext $context, array $dashes, float $offset = NULL): void {}

/**
 * The setFillRule purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param int $setting <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setfillrule.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_fill_rule(\CairoContext $context, int $setting): void {}

/**
 * The setFontFace purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Sets the font-face for a given context.</p>
 * @param \CairoContext $context <p>A CairoContext object to change the font-face for.</p>
 * @param \CairoFontFace $fontface <p>A CairoFontFace object</p>
 * @return void <p>No value is returned</p>
 * @link http://php.net/manual/ja/cairocontext.setfontface.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_font_face(\CairoContext $context, \CairoFontFace $fontface): void {}

/**
 * The setFontMatrix purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param \CairoMatrix $matrix <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setfontmatrix.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_font_matrix(\CairoContext $context, \CairoMatrix $matrix): void {}

/**
 * The setFontOptions purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param \CairoFontOptions $fontoptions <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setfontoptions.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_font_options(\CairoContext $context, \CairoFontOptions $fontoptions): void {}

/**
 * The setFontSize purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $size <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setfontsize.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_font_size(\CairoContext $context, float $size): void {}

/**
 * The setLineCap purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param int $setting <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setlinecap.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_line_cap(\CairoContext $context, int $setting): void {}

/**
 * The setLineJoin purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param int $setting <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setlinejoin.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_line_join(\CairoContext $context, int $setting): void {}

/**
 * The setLineWidth purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $width <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setlinewidth.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_line_width(\CairoContext $context, float $width): void {}

/**
 * The setMatrix purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param \CairoMatrix $matrix <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setmatrix.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_matrix(\CairoContext $context, \CairoMatrix $matrix): void {}

/**
 * The setMiterLimit purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $limit <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setmiterlimit.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_miter_limit(\CairoContext $context, float $limit): void {}

/**
 * The setOperator purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param int $setting <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setoperator.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_operator(\CairoContext $context, int $setting): void {}

/**
 * The setScaledFont purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param \CairoScaledFont $scaledfont <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setscaledfont.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_scaled_font(\CairoContext $context, \CairoScaledFont $scaledfont): void {}

/**
 * The setSource purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param \CairoPattern $pattern <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setsource.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_source(\CairoContext $context, \CairoPattern $pattern): void {}

/**
 * The setSourceSurface purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.setsourcesurface.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_source_surface(\CairoContext $context, \CairoSurface $surface, float $x = NULL, float $y = NULL): void {}

/**
 * The setTolerance purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $tolerance <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.settolerance.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_set_tolerance(\CairoContext $context, float $tolerance): void {}

/**
 * The showPage purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.showpage.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_show_page(\CairoContext $context): void {}

/**
 * The showText purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param string $text <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.showtext.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_show_text(\CairoContext $context, string $text): void {}

/**
 * The status purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return int <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.status.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_status(\CairoContext $context): int {}

/**
 * Retrieves the current status as string
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Retrieves the current status as a readable string</p>
 * @param int $status <p>A valid status code given by <code>cairo_status()</code> or <code>CairoContext::status()</code></p>
 * @return string <p>A string containing the current status of a CairoContext object</p>
 * @link http://php.net/manual/ja/cairo.statustostring.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_status_to_string(int $status): string {}

/**
 * The stroke purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.stroke.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_stroke(\CairoContext $context): void {}

/**
 * The strokeExtents purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return array <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.strokeextents.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_stroke_extents(\CairoContext $context): array {}

/**
 * The strokePreserve purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.strokepreserve.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_stroke_preserve(\CairoContext $context): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-copy-page.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_copy_page(\CairoSurface $surface): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @param int $content <p>Description...</p>
 * @param float $width <p>Description...</p>
 * @param float $height <p>Description...</p>
 * @return CairoSurface <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-create-similar.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_create_similar(\CairoSurface $surface, int $content, float $width, float $height): \CairoSurface {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-finish.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_finish(\CairoSurface $surface): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-flush.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_flush(\CairoSurface $surface): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-get-content.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_get_content(\CairoSurface $surface): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return array <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-get-device-offset.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_get_device_offset(\CairoSurface $surface): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return CairoFontOptions <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-get-font-options.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_get_font_options(\CairoSurface $surface): \CairoFontOptions {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-get-type.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_get_type(\CairoSurface $surface): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-mark-dirty.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_mark_dirty(\CairoSurface $surface): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @param float $width <p>Description...</p>
 * @param float $height <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-mark-dirty-rectangle.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_mark_dirty_rectangle(\CairoSurface $surface, float $x, float $y, float $width, float $height): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-set-device-offset.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_set_device_offset(\CairoSurface $surface, float $x, float $y): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-set-fallback-resolution.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_set_fallback_resolution(\CairoSurface $surface, float $x, float $y): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-show-page.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_show_page(\CairoSurface $surface): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @return int <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-status.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_status(\CairoSurface $surface): int {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSurface $surface <p>Description...</p>
 * @param resource $stream <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-surface-write-to-png.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_surface_write_to_png(\CairoSurface $surface, $stream): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param string $file <p>Description...</p>
 * @param float $width <p>Description...</p>
 * @param float $height <p>Description...</p>
 * @return CairoSvgSurface <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-svg-surface-create.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_svg_surface_create(string $file, float $width, float $height): \CairoSvgSurface {}

/**
 * Used to retrieve a list of supported SVG versions
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Returns a numerically indexed array of currently available CairoSvgVersion constants. In order to retreive the string values for each item, use <code>CairoSvgSurface::versionToString()</code>.</p>
 * @return array <p>Returns a numerically indexed array of integer values.</p>
 * @link http://php.net/manual/ja/cairosvgsurface.getversions.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_svg_surface_get_versions(): array {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoSvgSurface $surface <p>Description...</p>
 * @param int $version <p>Description...</p>
 * @return void <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-svg-surface-restrict-to-version.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_svg_surface_restrict_to_version(\CairoSvgSurface $surface, int $version): void {}

/**
 * Description
 * <p>The function description goes here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param int $version <p>Description...</p>
 * @return string <p>What is returned on success and failure</p>
 * @link http://php.net/manual/ja/function.cairo-svg-version-to-string.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_svg_version_to_string(int $version): string {}

/**
 * The textExtents purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @return array <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.textextents.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_text_extents(\CairoContext $context): array {}

/**
 * The textPath purpose
 * <p>オブジェクト指向型</p><p>手続き型</p><p>Adds closed paths for text to the current path. The generated path, if filled, achieves an effect similar to that of <code>CairoContext::showText()</code>.</p><p>Text conversion and positioning is done similar to <code>CairoContext::showText()</code>.</p><p>Like <code>CairoContext::showText()</code>, after this call the current point is moved to the origin of where the next glyph would be placed in this same progression. That is, the current point will be at the origin of the final glyph offset by its advance values. This allows for chaining multiple calls to <code>CairoContext::showText()</code> without having to set current point in between.</p><p>Note: The <b>CairoContext::textPath()</b> function call is part of what the cairo designers call the "toy" text API. It is convenient for short demos and simple programs, but it is not expected to be adequate for serious text-using applications. See <code>CairoContext::glyphPath()</code> for the "real" text path API in cairo.</p>
 * @param \CairoContext $context <p>A CairoContext object</p>
 * @param string $text <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.textpath.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_text_path(\CairoContext $context, string $text): void {}

/**
 * The transform purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param \CairoMatrix $matrix <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.transform.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_transform(\CairoContext $context, \CairoMatrix $matrix): void {}

/**
 * The translate purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return void <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.translate.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_translate(\CairoContext $context, float $x, float $y): void {}

/**
 * The userToDevice purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return array <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.usertodevice.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_user_to_device(\CairoContext $context, float $x, float $y): array {}

/**
 * The userToDeviceDistance purpose
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Description here.</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param \CairoContext $context <p>Description...</p>
 * @param float $x <p>Description...</p>
 * @param float $y <p>Description...</p>
 * @return array <p>Description...</p>
 * @link http://php.net/manual/ja/cairocontext.usertodevicedistance.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_user_to_device_distance(\CairoContext $context, float $x, float $y): array {}

/**
 * Retrives cairo's library version
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Retrieves the current version of the cairo library as an integer value</p>
 * @return int <p>Current Cairo library version integer</p>
 * @link http://php.net/manual/ja/cairo.version.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_version(): int {}

/**
 * Retrieves cairo version as string
 * <p>オブジェクト指向型 (method):</p><p>手続き型:</p><p>Retrieves the current cairo library version as a string.</p>
 * @return string <p>Current Cairo library version string</p>
 * @link http://php.net/manual/ja/cairo.versionstring.php
 * @since PECL cairo >= 0.1.0
 */
function cairo_version_string(): string {}

define('CAIRO_ANTIALIAS_DEFAULT', null);

define('CAIRO_ANTIALIAS_GRAY', null);

define('CAIRO_ANTIALIAS_NONE', null);

define('CAIRO_ANTIALIAS_SUBPIXEL', null);

define('CAIRO_CONTENT_ALPHA', null);

define('CAIRO_CONTENT_COLOR', null);

define('CAIRO_CONTENT_COLOR_ALPHA', null);

define('CAIRO_EXTEND_NONE', null);

define('CAIRO_EXTEND_PAD', null);

define('CAIRO_EXTEND_REFLECT', null);

define('CAIRO_EXTEND_REPEAT', null);

define('CAIRO_FILL_RULE_EVEN_ODD', null);

define('CAIRO_FILL_RULE_WINDING', null);

define('CAIRO_FILTER_BEST', null);

define('CAIRO_FILTER_BILINEAR', null);

define('CAIRO_FILTER_FAST', null);

define('CAIRO_FILTER_GAUSSIAN', null);

define('CAIRO_FILTER_GOOD', null);

define('CAIRO_FILTER_NEAREST', null);

define('CAIRO_FONT_SLANT_ITALIC', null);

define('CAIRO_FONT_SLANT_NORMAL', null);

define('CAIRO_FONT_SLANT_OBLIQUE', null);

define('CAIRO_FONT_TYPE_FT', null);

define('CAIRO_FONT_TYPE_QUARTZ', null);

define('CAIRO_FONT_TYPE_TOY', null);

define('CAIRO_FONT_TYPE_WIN32', null);

define('CAIRO_FONT_WEIGHT_BOLD', null);

define('CAIRO_FONT_WEIGHT_NORMAL', null);

define('CAIRO_FORMAT_A1', null);

define('CAIRO_FORMAT_A8', null);

define('CAIRO_FORMAT_ARGB32', null);

define('CAIRO_FORMAT_RGB24', null);

define('CAIRO_HINT_METRICS_DEFAULT', null);

define('CAIRO_HINT_METRICS_OFF', null);

define('CAIRO_HINT_METRICS_ON', null);

define('CAIRO_HINT_STYLE_DEFAULT', null);

define('CAIRO_HINT_STYLE_FULL', null);

define('CAIRO_HINT_STYLE_MEDIUM', null);

define('CAIRO_HINT_STYLE_NONE', null);

define('CAIRO_HINT_STYLE_SLIGHT', null);

define('CAIRO_LINE_CAP_BUTT', null);

define('CAIRO_LINE_CAP_ROUND', null);

define('CAIRO_LINE_CAP_SQUARE', null);

define('CAIRO_LINE_JOIN_BEVEL', null);

define('CAIRO_LINE_JOIN_MITER', null);

define('CAIRO_LINE_JOIN_ROUND', null);

define('CAIRO_OPERATOR_ADD', null);

define('CAIRO_OPERATOR_ATOP', null);

define('CAIRO_OPERATOR_CLEAR', null);

define('CAIRO_OPERATOR_DEST', null);

define('CAIRO_OPERATOR_DEST_ATOP', null);

define('CAIRO_OPERATOR_DEST_IN', null);

define('CAIRO_OPERATOR_DEST_OUT', null);

define('CAIRO_OPERATOR_DEST_OVER', null);

define('CAIRO_OPERATOR_IN', null);

define('CAIRO_OPERATOR_OUT', null);

define('CAIRO_OPERATOR_OVER', null);

define('CAIRO_OPERATOR_SATURATE', null);

define('CAIRO_OPERATOR_SOURCE', null);

define('CAIRO_OPERATOR_XOR', null);

define('CAIRO_PATTERN_TYPE_LINEAR', null);

define('CAIRO_PATTERN_TYPE_RADIAL', null);

define('CAIRO_PATTERN_TYPE_SOLID', null);

define('CAIRO_PATTERN_TYPE_SURFACE', null);

define('CAIRO_PS_LEVEL_2', null);

define('CAIRO_PS_LEVEL_3', null);

define('CAIRO_STATUS_CLIP_NOT_REPRESENTABLE', null);

define('CAIRO_STATUS_FILE_NOT_FOUND', null);

define('CAIRO_STATUS_INVALID_CONTENT', null);

define('CAIRO_STATUS_INVALID_DASH', null);

define('CAIRO_STATUS_INVALID_DSC_COMMENT', null);

define('CAIRO_STATUS_INVALID_FORMAT', null);

define('CAIRO_STATUS_INVALID_INDEX', null);

define('CAIRO_STATUS_INVALID_MATRIX', null);

define('CAIRO_STATUS_INVALID_PATH_DATA', null);

define('CAIRO_STATUS_INVALID_POP_GROUP', null);

define('CAIRO_STATUS_INVALID_RESTORE', null);

define('CAIRO_STATUS_INVALID_STATUS', null);

define('CAIRO_STATUS_INVALID_STRIDE', null);

define('CAIRO_STATUS_INVALID_STRING', null);

define('CAIRO_STATUS_INVALID_VISUAL', null);

define('CAIRO_STATUS_NO_CURRENT_POINT', null);

define('CAIRO_STATUS_NO_MEMORY', null);

define('CAIRO_STATUS_NULL_POINTER', null);

define('CAIRO_STATUS_PATTERN_TYPE_MISMATCH', null);

define('CAIRO_STATUS_READ_ERROR', null);

define('CAIRO_STATUS_SUCCESS', null);

define('CAIRO_STATUS_SURFACE_FINISHED', null);

define('CAIRO_STATUS_SURFACE_TYPE_MISMATCH', null);

define('CAIRO_STATUS_TEMP_FILE_ERROR', null);

define('CAIRO_STATUS_WRITE_ERROR', null);

define('CAIRO_SUBPIXEL_ORDER_BGR', null);

define('CAIRO_SUBPIXEL_ORDER_DEFAULT', null);

define('CAIRO_SUBPIXEL_ORDER_RGB', null);

define('CAIRO_SUBPIXEL_ORDER_VBGR', null);

define('CAIRO_SUBPIXEL_ORDER_VRGB', null);

define('CAIRO_SURFACE_TYPE_BEOS', null);

define('CAIRO_SURFACE_TYPE_DIRECTFB', null);

define('CAIRO_SURFACE_TYPE_GLITZ', null);

define('CAIRO_SURFACE_TYPE_IMAGE', null);

define('CAIRO_SURFACE_TYPE_OS2', null);

define('CAIRO_SURFACE_TYPE_PDF', null);

define('CAIRO_SURFACE_TYPE_PS', null);

define('CAIRO_SURFACE_TYPE_QUARTZ', null);

define('CAIRO_SURFACE_TYPE_QUARTZ_IMAGE', null);

define('CAIRO_SURFACE_TYPE_SVG', null);

define('CAIRO_SURFACE_TYPE_WIN32', null);

define('CAIRO_SURFACE_TYPE_WIN32_PRINTING', null);

define('CAIRO_SURFACE_TYPE_XCB', null);

define('CAIRO_SURFACE_TYPE_XLIB', null);

define('CAIRO_SVG_VERSION_1_1', null);

define('CAIRO_SVG_VERSION_1_2', null);

