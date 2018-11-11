<?php



/**
 * <p>Haru PDF アノテーションクラスです。</p>
 * @link http://php.net/manual/ja/class.haruannotation.php
 * @since PECL haru >= 0.0.1
 */
class HaruAnnotation {

	/**
	 * アノテーションの枠の形式を設定する
	 * <p>アノテーションの枠の形式を定義します。 この関数は、リンクアノテーションに対してのみ使用します。</p>
	 * @param float $width <p>枠線の幅。</p>
	 * @param int $dash_on <p>破線の形式。</p>
	 * @param int $dash_off <p>破線の形式。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/haruannotation.setborderstyle.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setBorderStyle(float $width, int $dash_on, int $dash_off): bool {}

	/**
	 * アノテーションの強調モードを設定する
	 * <p>アノテーションをクリックした際の表示方法を定義します。 この関数は、リンクアノテーションに対してのみ使用します。</p>
	 * @param int $mode <p>アノテーションの強調モード。以下のいずれかの値となります。</p><ul> <li> <b><code>HaruAnnotation::NO_HIGHLIGHT</code></b> - 強調しない。 </li> <li> <b><code>HaruAnnotation::INVERT_BOX</code></b> - アノテーションの内容を反転する。 </li> <li> <b><code>HaruAnnotation::INVERT_BORDER</code></b> - アノテーションの枠線を反転する。 </li> <li> <b><code>HaruAnnotation::DOWN_APPEARANCE</code></b> - アノテーションを目立たなくする。 </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/haruannotation.sethighlightmode.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setHighlightMode(int $mode): bool {}

	/**
	 * アノテーションのアイコンの形式を設定する
	 * <p>アノテーションアイコンの形式を定義します。 この関数は、テキストアノテーションに対してのみ使用します。</p>
	 * @param int $icon <p>アイコンの形式。以下のいずれかの値となります。</p><ul> <li> <b><code>HaruAnnotation::ICON_COMMENT</code></b> </li> <li> <b><code>HaruAnnotation::ICON_KEY</code></b> </li> <li> <b><code>HaruAnnotation::ICON_NOTE</code></b> </li> <li> <b><code>HaruAnnotation::ICON_HELP</code></b> </li> <li> <b><code>HaruAnnotation::ICON_NEW_PARAGRAPH</code></b> </li> <li> <b><code>HaruAnnotation::ICON_PARAGRAPH</code></b> </li> <li> <b><code>HaruAnnotation::ICON_INSERT</code></b> </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/haruannotation.seticon.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setIcon(int $icon): bool {}

	/**
	 * アノテーションの初期状態を設定する
	 * <p>アノテーションが初期状態で開いているかどうかを定義します。 この関数は、テキストアノテーションに対してのみ使用します。</p>
	 * @param bool $opened <p><b><code>TRUE</code></b> は、アノテーションが最初から開いて表示されていることを意味します。 <b><code>FALSE</code></b> は、閉じていることを意味します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/haruannotation.setopened.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setOpened(bool $opened): bool {}
}

/**
 * <p>Haru PDF 対象クラスです。</p>
 * @link http://php.net/manual/ja/class.harudestination.php
 * @since PECL haru >= 0.0.1
 */
class HaruDestination {

	/**
	 * ページの表示を、ウィンドウにあわせるよう設定する
	 * <p>ページの表示を、ウィンドウにあわせるよう設定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudestination.setfit.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setFit(): bool {}

	/**
	 * ページの表示を、ページのバウンディングボックスをウィンドウにあわせるよう設定する
	 * <p>ページの表示を、ページのバウンディングボックスをウィンドウにあわせるよう設定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudestination.setfitb.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setFitB(): bool {}

	/**
	 * ページの表示を、バウンディングボックスの幅にあわせるよう設定する
	 * <p>ページの表示を拡大し、バウンディングボックスの幅にあわせるようにします。 ページの上端の位置は <code>top</code> に設定します。</p>
	 * @param float $top <p>ページの上端の座標。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudestination.setfitbh.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setFitBH(float $top): bool {}

	/**
	 * ページの表示を、バウンディングボックスの高さにあわせるよう設定する
	 * <p>ページの表示を拡大し、バウンディングボックスの高さにあわせるようにします。 ページの左端の位置は <code>left</code> に設定します。</p>
	 * @param float $left <p>ページの左端の座標。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudestination.setfitbv.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setFitBV(float $left): bool {}

	/**
	 * ページの表示を、ウィンドウの幅にあわせるよう設定する
	 * <p>ページの表示を、ウィンドウの幅にあわせるようにします。 ページの上端の位置は <code>top</code> に設定します。</p>
	 * @param float $top <p>ページの上端の位置。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudestination.setfith.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setFitH(float $top): bool {}

	/**
	 * ページの表示を、指定した矩形にあわせるよう設定する
	 * <p>ページの表示を、パラメータで指定した矩形にあわせるよう設定します。</p>
	 * @param float $left <p>ページの左端の座標。</p>
	 * @param float $bottom <p>ページの下端の座標。</p>
	 * @param float $right <p>ページの右端の座標。</p>
	 * @param float $top <p>ページの上端の座標。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudestination.setfitr.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setFitR(float $left, float $bottom, float $right, float $top): bool {}

	/**
	 * ページの表示を、ウィンドウの高さにあわせるよう設定する
	 * <p>ページの表示を、ウィンドウの高さにあわせるようにします。</p>
	 * @param float $left <p>ページの左端の位置。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudestination.setfitv.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setFitV(float $left): bool {}

	/**
	 * ページの表示を設定する
	 * <p>ページの表示方法を、三つのパラメータ <code>left</code>、<code>top</code> および <code>zoom</code> で設定します。</p>
	 * @param float $left <p>ページの左端の位置。</p>
	 * @param float $top <p>ページの上端の位置。</p>
	 * @param float $zoom <p>拡大率。0.08 (8%) から 32 (3200%) までの値でなければなりません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudestination.setxyz.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setXYZ(float $left, float $top, float $zoom): bool {}
}

/**
 * <p>Haru PDF ドキュメントクラスです。</p>
 * @link http://php.net/manual/ja/class.harudoc.php
 * @since PECL haru >= 0.0.1
 */
class HaruDoc {

	/**
	 * 新しい HaruDoc のインスタンスを作成する
	 * <p>新しい HaruDoc のインスタンスを作成します。</p>
	 * @return self <p>値を返しません。</p>
	 * @link http://php.net/manual/ja/harudoc.construct.php
	 * @since PECL haru >= 0.0.1
	 */
	public function __construct() {}

	/**
	 * 新しいページをドキュメントに追加する
	 * <p>新しいページをドキュメントに追加します。</p>
	 * @return object <p>新しい HaruPage インスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harudoc.addpage.php
	 * @since PECL haru >= 0.0.1
	 */
	public function addPage(): object {}

	/**
	 * 指定した範囲のページにおけるページラベルの形式を設定する
	 * <p>指定した範囲のページにおけるページラベルの形式を設定します。</p>
	 * @param int $first_page <p>ラベル付けの範囲に含む最初のページ。</p>
	 * @param int $style <p>番号の形式。以下のいずれかの値となります。</p><ul> <li> <b><code>HaruPage::NUM_STYLE_DECIMAL</code></b> - ページラベルを十進数で表示します。 </li> <li> <b><code>HaruPage::NUM_STYLE_UPPER_ROMAN</code></b> - ページラベルを大文字のローマ数字で表示します。 </li> <li> <b><code>HaruPage::NUM_STYLE_LOWER_ROMAN</code></b> - ページラベルを小文字のローマ数字で表示します。 </li> <li> <b><code>HaruPage::NUM_STYLE_UPPER_LETTER</code></b> - ページラベルを大文字 (A から Z まで) で表示します。 </li> <li> <b><code>HaruPage::NUM_STYLE_LOWER_LETTERS</code></b> - ページラベルを小文字 (a から z まで) で表示します。 </li> </ul>
	 * @param int $first_num <p>この範囲内の最初のページ番号。</p>
	 * @param string $prefix <p>ページラベルの接頭辞。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.addpagelabel.php
	 * @since PECL haru >= 0.0.1
	 */
	public function addPageLabel(int $first_page, int $style, int $first_num, string $prefix = ""): bool {}

	/**
	 * HaruOutline のインスタンスを作成する
	 * <p>新しい HaruOutline のインスタンスを作成します。</p>
	 * @param string $title <p>新しいアウトラインオブジェクトの見出し。</p>
	 * @param object $parent_outline <p>有効な HaruOutline のインスタンスあるいは <b><code>NULL</code></b>。</p>
	 * @param object $encoder <p>有効な HaruEncoder のインスタンスあるいは <b><code>NULL</code></b>。</p>
	 * @return object <p>新しい HaruOutline のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harudoc.createoutline.php
	 * @since PECL haru >= 0.0.1
	 */
	public function createOutline(string $title, object $parent_outline = NULL, object $encoder = NULL): object {}

	/**
	 * ドキュメントが現在使用している HaruEncoder を取得する
	 * <p>ドキュメントが現在使用している HaruEncoder を取得します。</p>
	 * @return object <p>ドキュメントが現在使用している HaruEncoder、 あるいはエンコーダがまだ設定されていない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.getcurrentencoder.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getCurrentEncoder(): object {}

	/**
	 * ドキュメントの現在のページを返す
	 * <p>ドキュメントの現在のページを取得します。</p>
	 * @return object <p>成功した場合に HaruPage のインスタンス、 現在のページが設定されていない場合に <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.getcurrentpage.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getCurrentPage(): object {}

	/**
	 * 指定したエンコーディングの HaruEncoder のインスタンスを取得する
	 * <p>指定したエンコーディングの HaruEncoder のインスタンスを取得します。</p>
	 * @param string $encoding <p>エンコーディング名。使用できる値の一覧は 組み込みのエンコーディング を参照ください。</p>
	 * @return object <p>指定したエンコーディングの HaruEncoder のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harudoc.getencoder.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getEncoder(string $encoding): object {}

	/**
	 * HaruFont のインスタンスを取得する
	 * <p>HaruFont のインスタンスを取得します。</p>
	 * @param string $fontname <p>フォントの名前。組み込みフォントの一覧は 組み込みのフォント を参照ください。 <b>HaruDoc::loadTTF</b>、 <b>HaruDoc::loadTTC</b> および <b>HaruDoc::loadType1</b> で読み込んだフォントの名前を使用することもできます。</p>
	 * @param string $encoding <p>使用するエンコーディング。サポートするエンコーディングの一覧は 組み込みのエンコーディング を参照ください。</p>
	 * @return object <p>指定した <code>fontname</code> および <code>encoding</code> の HaruFont のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harudoc.getfont.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getFont(string $fontname, string $encoding = NULL): object {}

	/**
	 * 指定したドキュメント属性の現在の値を取得する
	 * <p>指定したドキュメント属性の文字列値を取得します。</p>
	 * @param int $type <p>属性の型。以下のいずれかを指定します。</p><ul> <li> <b><code>HaruDoc::INFO_AUTHOR</code></b> </li> <li> <b><code>HaruDoc::INFO_CREATOR</code></b> </li> <li> <b><code>HaruDoc::INFO_TITLE</code></b> </li> <li> <b><code>HaruDoc::INFO_SUBJECT</code></b> </li> <li> <b><code>HaruDoc::INFO_KEYWORDS</code></b> </li> <li> <b><code>HaruDoc::INFO_CREATION_DATE</code></b> </li> <li> <b><code>HaruDoc::INFO_MOD_DATE</code></b> </li> </ul>
	 * @return string <p>指定したドキュメント属性の文字列値を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.getinfoattr.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getInfoAttr(int $type): string {}

	/**
	 * 現在のページレイアウトを取得する
	 * <p>現在のページレイアウトを取得します。 とりうる値の一覧は <code>HaruDoc::setPageLayout()</code> を参照ください。</p>
	 * @return int <p>現在ドキュメントに設定されているページレイアウトを返します。 ページレイアウトが設定されていない場合は <b><code>FALSE</code></b> を返します。 とりうる値の一覧は <code>HaruDoc::setPageLayout()</code> を参照ください。</p>
	 * @link http://php.net/manual/ja/harudoc.getpagelayout.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getPageLayout(): int {}

	/**
	 * 現在のページモードを取得する
	 * <p>現在のページモードを取得します。 とりうる値の一覧については <code>HaruDoc::setPageMode()</code> を参照ください。</p>
	 * @return int <p>現在ドキュメントに設定されているページモードを返します。 とりうる値の一覧については <code>HaruDoc::setPageMode()</code> を参照ください。</p>
	 * @link http://php.net/manual/ja/harudoc.getpagemode.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getPageMode(): int {}

	/**
	 * 一時ストリームの大きさを取得する
	 * <p>一時ストリームの大きさを取得します。</p>
	 * @return int <p>ドキュメントの一時ストリーム内のデータの大きさを返します。 ドキュメントを一時ストリームに保存していない場合は、大きさはゼロとなります。</p>
	 * @link http://php.net/manual/ja/harudoc.getstreamsize.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getStreamSize(): int {}

	/**
	 * 指定したページの直前に新しいページを挿入する
	 * <p>新しいページを作成し、指定したページの直前に挿入します。</p>
	 * @param object $page <p>有効な HaruPage のインスタンス。</p>
	 * @return object <p>新しい HaruPage のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harudoc.insertpage.php
	 * @since PECL haru >= 0.0.1
	 */
	public function insertPage(object $page): object {}

	/**
	 * JPEG 画像を読み込む
	 * <p>指定した JPEG 画像を読み込みます。</p>
	 * @param string $filename <p>有効な JPEG 画像ファイル。</p>
	 * @return object <p>新しい HaruImage のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harudoc.loadjpeg.php
	 * @since PECL haru >= 0.0.1
	 */
	public function loadJPEG(string $filename): object {}

	/**
	 * Load PNG image and return HaruImage instance
	 * <p>Loads a PNG image.</p><p>Libharu might be built without libpng support, in this case each call to this function would result in exception.</p>
	 * @param string $filename <p>The name of a PNG image file.</p>
	 * @param bool $deferred <p>Do not load data immediately. You can set <code>deferred</code> parameter to <b><code>TRUE</code></b> for deferred data loading, in this case only size and color are loaded immediately.</p>
	 * @return object <p>Returns a HaruImage instance.</p>
	 * @link http://php.net/manual/ja/harudoc.loadpng.php
	 * @since PECL haru >= 0.0.1
	 */
	public function loadPNG(string $filename, bool $deferred = FALSE): object {}

	/**
	 * RAW 画像を読み込む
	 * <p>RAW 画像を読み込みます。</p>
	 * @param string $filename <p>RAW 画像ファイルの名前。</p>
	 * @param int $width <p>画像の幅。</p>
	 * @param int $height <p>画像の高さ。</p>
	 * @param int $color_space <p>画像の色空間。以下のいずれかの値となります。</p><ul> <li> <b><code>HaruDoc::CS_DEVICE_GRAY</code></b> </li> <li> <b><code>HaruDoc::CS_DEVICE_RGB</code></b> </li> <li> <b><code>HaruDoc::CS_DEVICE_CMYK</code></b> </li> </ul>
	 * @return object <p>HaruImage のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harudoc.loadraw.php
	 * @since PECL haru >= 0.0.1
	 */
	public function loadRaw(string $filename, int $width, int $height, int $color_space): object {}

	/**
	 * Load the font with the specified index from TTC file
	 * <p>Loads the TrueType font with the specified index from a TrueType collection file.</p>
	 * @param string $fontfile <p>The TrueType collection file.</p>
	 * @param int $index <p>The index of the font in the collection file.</p>
	 * @param bool $embed <p>When set to <b><code>TRUE</code></b>, the glyph data of the font is embedded into the PDF file, otherwise only the matrix data is included.</p>
	 * @return string <p>Returns the name of the loaded font on success.</p>
	 * @link http://php.net/manual/ja/harudoc.loadttc.php
	 * @since PECL haru >= 0.0.1
	 */
	public function loadTTC(string $fontfile, int $index, bool $embed = FALSE): string {}

	/**
	 * Load TTF font file
	 * <p>Loads the given TTF file and (optionally) embed its data into the document.</p>
	 * @param string $fontfile <p>The TTF file to load.</p>
	 * @param bool $embed <p>When set to <b><code>TRUE</code></b>, the glyph data of the font is embedded into the PDF file, otherwise only the matrix data is included.</p>
	 * @return string <p>Returns the name of the loaded font on success.</p>
	 * @link http://php.net/manual/ja/harudoc.loadttf.php
	 * @since PECL haru >= 0.0.1
	 */
	public function loadTTF(string $fontfile, bool $embed = FALSE): string {}

	/**
	 * Type1 フォントを読み込む
	 * <p>Type1 フォントを指定したファイルから読み込み、PDF ドキュメントに登録します。</p>
	 * @param string $afmfile <p>AFM ファイルへのパス。</p>
	 * @param string $pfmfile <p>オプションで指定する、PFA/PFB ファイルへのパス。 省略した場合は、フォントのグリフデータのみを PDF ドキュメントに埋め込みます。</p>
	 * @return string <p>成功時に、読み込んだフォントの名前を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.loadtype1.php
	 * @since PECL haru >= 0.0.1
	 */
	public function loadType1(string $afmfile, string $pfmfile = NULL): string {}

	/**
	 * ドキュメントデータを出力バッファに書き出す
	 * <p>ドキュメントデータを標準出力に書き出します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.output.php
	 * @since PECL haru >= 0.0.1
	 */
	public function output(): bool {}

	/**
	 * データを一時ストリームから読み込む
	 * <p>データを一時ストリームから読み込みます。</p>
	 * @param int $bytes <p>パラメータ <code>bytes</code> で、読み込むバイト数を指定します。 ストリームのデータがこれより少ない場合にも指定したバイト数が読み込まれます。</p>
	 * @return string <p>一時ストリームのデータを返します。</p>
	 * @link http://php.net/manual/ja/harudoc.readfromstream.php
	 * @since PECL haru >= 0.0.1
	 */
	public function readFromStream(int $bytes): string {}

	/**
	 * ドキュメントハンドルのエラーの状態をリセットする
	 * <p>いったんエラーコードが設定されると、入出力処理を含む 大半の操作が実行できなくなります。 エラーへの対処を済ませたあとで処理を続けたい場合は、 この関数を実行してエラー状態をリセットする必要があります。</p>
	 * @return bool <p>常に成功し、<b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.reseterror.php
	 * @since PECL haru >= 0.0.1
	 */
	public function resetError(): bool {}

	/**
	 * 一時ストリームを巻き戻す
	 * <p>ドキュメントの一時ストリームを巻き戻します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.resetstream.php
	 * @since PECL haru >= 0.0.1
	 */
	public function resetStream(): bool {}

	/**
	 * ドキュメントを指定したファイルに保存する
	 * <p>ドキュメントを、指定したファイルに保存します。</p>
	 * @param string $file <p>ドキュメントを保存するファイル名。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.save.php
	 * @since PECL haru >= 0.0.1
	 */
	public function save(string $file): bool {}

	/**
	 * ドキュメントを一時ストリームに保存する
	 * <p>ドキュメントのデータを一時ストリームに保存します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.savetostream.php
	 * @since PECL haru >= 0.0.1
	 */
	public function saveToStream(): bool {}

	/**
	 * ドキュメントの圧縮モードを設定する
	 * <p>ドキュメントの圧縮モードを定義します。libharu が Zlib サポートなしでコンパイルされている場合は、この関数は常に HaruException をスローします。</p>
	 * @param int $mode <p>使用する圧縮モード。この値は、以下のフラグの組み合わせとなります。</p><ul> <li> <b><code>HaruDoc::COMP_NONE</code></b> - 一切圧縮しません。 </li> <li> <b><code>HaruDoc::COMP_TEXT</code></b> - テキストデータを圧縮します。 </li> <li> <b><code>HaruDoc::COMP_IMAGE</code></b> - 画像データを圧縮します。 </li> <li> <b><code>HaruDoc::COMP_METADATA</code></b> - その他のデータ (フォントや cmap) を圧縮します。 </li> <li> <b><code>HaruDoc::COMP_ALL</code></b> - すべてのデータを圧縮します。 </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.setcompressionmode.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setCompressionMode(int $mode): bool {}

	/**
	 * ドキュメントの現在のエンコーダを設定する
	 * <p>ドキュメントで現在使用しているエンコーダを定義します。</p>
	 * @param string $encoding <p>使用するエンコーディングの名前。使用できる値の一覧は 組み込みのエンコーディング を参照ください。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.setcurrentencoder.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setCurrentEncoder(string $encoding): bool {}

	/**
	 * ドキュメントの暗号化モードを設定する
	 * <p>ドキュメントの暗号化モードを定義します。 先にパスワードを設定しないと、暗号化モードを設定することはできません。</p>
	 * @param int $mode <p>使用する暗号化モード。以下のいずれかとなります。</p><ul> <li> <b><code>HaruDoc::ENCRYPT_R2</code></b> - "revision2" アルゴリズムを使用します。 </li> <li> <b><code>HaruDoc::ENCRYPT_R3</code></b> - "revision3" アルゴリズムを使用します。これを使用すると、PDF のバージョンは 1.4 になります。 </li> </ul>
	 * @param int $key_len <p>暗号化キーの長さを表すバイト数。このパラメータはオプションで、 モードが <b><code>HaruDoc::ENCRYPT_R3</code></b> の場合にのみ使用します。 デフォルトの値は 5 (40 ビット) です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.setencryptionmode.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setEncryptionMode(int $mode, int $key_len = 5): bool {}

	/**
	 * ドキュメントの情報属性を設定する
	 * <p>情報属性を定義します。ドキュメントの現在のエンコーディングを使用します。</p>
	 * @param int $type <p>属性の型。以下のいずれかとなります。</p><ul> <li> <b><code>HaruDoc::INFO_AUTHOR</code></b> </li> <li> <b><code>HaruDoc::INFO_CREATOR</code></b> </li> <li> <b><code>HaruDoc::INFO_TITLE</code></b> </li> <li> <b><code>HaruDoc::INFO_SUBJECT</code></b> </li> <li> <b><code>HaruDoc::INFO_KEYWORDS</code></b> </li> </ul>
	 * @param string $info <p>属性の値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.setinfoattr.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setInfoAttr(int $type, string $info): bool {}

	/**
	 * ドキュメントの情報属性に日付と時刻を設定する
	 * <p>ドキュメントの日付や時刻の属性を設定します。</p>
	 * @param int $type <p>属性の型。以下のいずれかとなります。</p><ul> <li> <b><code>HaruDoc::INFO_CREATION_DATE</code></b> </li> <li> <b><code>HaruDoc::INFO_MOD_DATE</code></b> </li> </ul>
	 * @param int $year
	 * @param int $month <p>1 から 12 までの値。</p>
	 * @param int $day <p>1 から 31、30、29 あるいは 28 までの値 (月によって異なります)。</p>
	 * @param int $hour <p>0 から 23 までの値。</p>
	 * @param int $min <p>0 から 59 までの値。</p>
	 * @param int $sec <p>0 から 59 までの値。</p>
	 * @param string $ind <p>UTC とタイムゾーンとの関係。""、" "、"+"、"-" および "Z" のいずれか。</p>
	 * @param int $off_hour <p><code>ind</code> が " " あるいは "" 以外の場合は 0 から 23 までの値が有効。それ以外の場合はこのパラメータは無視されます。</p>
	 * @param int $off_min <p><code>ind</code> が " " あるいは "" 以外の場合は 0 から 59 までの値が有効。それ以外の場合はこのパラメータは無視されます。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.setinfodateattr.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setInfoDateAttr(int $type, int $year, int $month, int $day, int $hour, int $min, int $sec, string $ind, int $off_hour, int $off_min): bool {}

	/**
	 * ドキュメントを開いたときにどのページを表示するかを定義する
	 * <p>ドキュメントを開いたときに、どのページを表示するかを定義します。</p>
	 * @param object $destination <p>有効な HaruDestination のインスタンス。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.setopenaction.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setOpenAction(object $destination): bool {}

	/**
	 * ページをどのように表示するかを設定する
	 * <p>ページをどのように表示するかを定義します。</p>
	 * @param int $layout <p>以下の値を使用できます。</p><ul> <li> <b><code>HaruDoc::PAGE_LAYOUT_SINGLE</code></b> - 単一ページのみを表示します。 </li> <li> <b><code>HaruDoc::PAGE_LAYOUT_ONE_COLUMN</code></b> - ひとつのカラムでページを表示します。 </li> <li> <b><code>HaruDoc::PAGE_LAYOUT_TWO_COLUMN_LEFT</code></b> - ふたつのカラムでページを表示します。最初のページが左側となります。 </li> <li> <b><code>HaruDoc::PAGE_LAYOUT_TWO_COLUMN_RIGHT</code></b> - ふたつのカラムでページを表示します。最初のページが右側となります。 </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.setpagelayout.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setPageLayout(int $layout): bool {}

	/**
	 * ドキュメントをどのように表示するかを設定する
	 * <p>ドキュメントをどのように表示するかを定義します。</p>
	 * @param int $mode <p>以下の値を使用できます。</p><ul> <li> <b><code>HaruDoc::PAGE_MODE_USE_NONE</code></b> - アウトラインやサムネイルを表示しません。 </li> <li> <b><code>HaruDoc::PAGE_MODE_USE_OUTLINE</code></b> - アウトラインペインを表示します。 </li> <li> <b><code>HaruDoc::PAGE_MODE_USE_THUMBS</code></b> - サムネイルペインを表示します。 </li> <li> <b><code>HaruDoc::PAGE_MODE_FULL_SCREEN</code></b> - フルスクリーンモードで表示します。 </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.setpagemode.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setPageMode(int $mode): bool {}

	/**
	 * ページ群単位のページ数を設定する
	 * <p>デフォルトでは、ドキュメントはひとつの pages オブジェクトを持っており、 これがすべてのページのルートとなります。各ページのオブジェクトは、 すべてこのオブジェクトの配下に作成されます。ひとつの pages オブジェクトが保持できるページ数は最大で 8191 までなので、 ドキュメントの最大ページ数は 8191 となります。しかし、パラメータ <code>page_per_pages</code> を指定することで、 これを変更することができます。ルートオブジェクトは 8191 を超える pages (ページではない) オブジェクトを保持することができ、 それぞれの pages が 8191 のページを保持するのです。 これにより、ドキュメントの最大ページ数は 8191&#42;<code>page_per_pages</code> となります。</p>
	 * @param int $page_per_pages <p>pages オブジェクトが保持できるページ数。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.setpagesconfiguration.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setPagesConfiguration(int $page_per_pages): bool {}

	/**
	 * ドキュメントに所有者パスワードおよびユーザーパスワードを設定する
	 * <p>ドキュメントに所有者パスワードおよびユーザーパスワードを設定します。 これらのパスワードを設定すると、ドキュメントの内容が暗号化されます。</p>
	 * @param string $owner_password <p>所有者のパスワード。これはドキュメントの使用権限を変更することができます。 空のパスワードは認められません。所有者のパスワードを ユーザーのパスワードと同じものにすることはできません。</p>
	 * @param string $user_password <p>ユーザーのパスワード。空でもかまいません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.setpassword.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setPassword(string $owner_password, string $user_password): bool {}

	/**
	 * ドキュメントの使用権限を設定する
	 * <p>ドキュメントの使用権限を定義します。</p>
	 * @param int $permission <p>これらのフラグを組み合わせた値となります。</p><ul> <li> <b><code>HaruDoc::ENABLE_READ</code></b> - ユーザーはドキュメントを読むことができます。 </li> <li> <b><code>HaruDoc::ENABLE_PRINT</code></b> - ユーザーはドキュメントを印刷することができます。 </li> <li> <b><code>HaruDoc::ENABLE_EDIT_ALL</code></b> - ユーザーはアノテーションやフォームフィールド以外の ドキュメントの内容を編集することができます。 </li> <li> <b><code>HaruDoc::ENABLE_COPY</code></b> - ユーザーはドキュメントのテキストや画像をコピーすることができます。 </li> <li> <b><code>HaruDoc::ENABLE_EDIT</code></b> - user can add or modify ユーザーはドキュメントにアノテーションやフォームフィールドを追加したり 編集したりすることができます。 </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.setpermission.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setPermission(int $permission): bool {}

	/**
	 * 簡体字中国語エンコーディングを有効にする
	 * <p>簡体字中国語エンコーディングを有効にします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.usecnsencodings.php
	 * @since PECL haru >= 0.0.1
	 */
	public function useCNSEncodings(): bool {}

	/**
	 * 組み込みの簡体字中国語フォントを有効にする
	 * <p>組み込みの簡体字中国語フォントを有効にします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.usecnsfonts.php
	 * @since PECL haru >= 0.0.1
	 */
	public function useCNSFonts(): bool {}

	/**
	 * 繁体字中国語エンコーディングを有効にする
	 * <p>繁体字中国語エンコーディングを有効にします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.usecntencodings.php
	 * @since PECL haru >= 0.0.1
	 */
	public function useCNTEncodings(): bool {}

	/**
	 * 組み込みの繁体字中国語フォントを有効にする
	 * <p>組み込みの繁体字中国語フォントを有効にします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.usecntfonts.php
	 * @since PECL haru >= 0.0.1
	 */
	public function useCNTFonts(): bool {}

	/**
	 * 日本語エンコーディングを有効にする
	 * <p>日本語エンコーディングを有効にします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.usejpencodings.php
	 * @since PECL haru >= 0.0.1
	 */
	public function useJPEncodings(): bool {}

	/**
	 * 組み込みの日本語フォントを有効にする
	 * <p>組み込みの日本語フォントを有効にします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.usejpfonts.php
	 * @since PECL haru >= 0.0.1
	 */
	public function useJPFonts(): bool {}

	/**
	 * 韓国/朝鮮語エンコーディングを有効にする
	 * <p>韓国/朝鮮語エンコーディングを有効にします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.usekrencodings.php
	 * @since PECL haru >= 0.0.1
	 */
	public function useKREncodings(): bool {}

	/**
	 * 組み込みの韓国/朝鮮語フォントを有効にする
	 * <p>組み込みの韓国/朝鮮語フォントを有効にします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harudoc.usekrfonts.php
	 * @since PECL haru >= 0.0.1
	 */
	public function useKRFonts(): bool {}
}

/**
 * <p>Haru PDF エンコーダクラスです。</p>
 * @link http://php.net/manual/ja/class.haruencoder.php
 * @since PECL haru >= 0.0.1
 */
class HaruEncoder {

	/**
	 * テキスト内のバイトの型を取得する
	 * <p>テキスト内のバイトの型を取得します。</p>
	 * @param string $text <p>テキスト。</p>
	 * @param int $index <p>テキスト内の位置。</p>
	 * @return int <p>テキスト内の指定した位置のバイトの型を返します。 結果は以下のいずれかの値となります。</p><ul> <li> <b><code>HaruEncoder::BYTE_TYPE_SINGLE</code></b> - シングルバイト文字。 </li> <li> <b><code>HaruEncoder::BYTE_TYPE_LEAD</code></b> - ダブルバイト文字の先頭バイト。 </li> <li> <b><code>HaruEncoder::BYTE_TYPE_TRAIL</code></b> - ダブルバイト文字の後続バイト。 </li> <li> <b><code>HaruEncoder::BYTE_TYPE_UNKNOWN</code></b> - エンコーダが無効、あるいはバイトの型の取得に失敗。 </li> </ul>
	 * @link http://php.net/manual/ja/haruencoder.getbytetype.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getByteType(string $text, int $index): int {}

	/**
	 * エンコーダの型を取得する
	 * <p>エンコーダの型を取得します。</p>
	 * @return int <p>エンコーダの型を返します。結果は以下のいずれかの値となります。</p><ul> <li> <b><code>HaruEncoder::TYPE_SINGLE_BYTE</code></b> - エンコーダはシングルバイト文字用です。 </li> <li> <b><code>HaruEncoder::TYPE_DOUBLE_BYTE</code></b> - エンコーダはマルチバイト文字用です。 </li> <li> <b><code>HaruEncoder::TYPE_UNINITIALIZED</code></b> - エンコーダが初期化されていません。 </li> <li> <b><code>HaruEncoder::UNKNOWN</code></b> - エンコーダが無効です。 </li> </ul>
	 * @link http://php.net/manual/ja/haruencoder.gettype.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getType(): int {}

	/**
	 * 指定した文字を unicode に変換する
	 * <p>指定した文字を unicode に変換します。</p>
	 * @param int $character <p>変換する文字のコード。</p>
	 * @return int
	 * @link http://php.net/manual/ja/haruencoder.getunicode.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getUnicode(int $character): int {}

	/**
	 * エンコーダの書き込みモードを取得する
	 * <p>エンコーダの書き込みモードを取得します。</p>
	 * @return int <p>エンコーダの書き込みモードを返します。 結果の値は次のようになります。</p><ul> <li> <b><code>HaruEncoder::WMODE_HORIZONTAL</code></b> - 横書きモード。 </li> <li> <b><code>HaruEncoder::WMODE_VERTICAL</code></b> - 縦書きモード。 </li> </ul>
	 * @link http://php.net/manual/ja/haruencoder.getwritingmode.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getWritingMode(): int {}
}

/**
 * <p>Haru PDF 例外クラスです。</p>
 * @link http://php.net/manual/ja/class.haruexception.php
 * @since PECL haru >= 0.0.1
 */
class HaruException extends \Exception {

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
 * <p>Haru PDF フォントクラスです。</p>
 * @link http://php.net/manual/ja/class.harufont.php
 * @since PECL haru >= 0.0.1
 */
class HaruFont {

	/**
	 * フォントの垂直 ascent を取得する
	 * <p>フォントの垂直 ascent (ベースラインの上側の高さ) を取得します。</p>
	 * @return int <p>フォントの垂直 ascent (ベースラインの上側の高さ) を返します。</p>
	 * @link http://php.net/manual/ja/harufont.getascent.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getAscent(): int {}

	/**
	 * 大文字のベースラインからの距離を取得する
	 * <p>大文字のベースラインからの距離を取得します。</p>
	 * @return int <p>大文字のベースラインからの距離を返します。</p>
	 * @link http://php.net/manual/ja/harufont.getcapheight.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getCapHeight(): int {}

	/**
	 * フォントの垂直 descent を取得する
	 * <p>フォントの垂直 descent (ベースラインの下側の高さ) を取得します。</p>
	 * @return int <p>フォントの垂直 descent (ベースラインの下側の高さ) を返します。</p>
	 * @link http://php.net/manual/ja/harufont.getdescent.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getDescent(): int {}

	/**
	 * エンコーディング名を取得する
	 * <p>フォントエンコーディングの名前を取得します。</p>
	 * @return string <p>フォントエンコーディングの名前を返します。</p>
	 * @link http://php.net/manual/ja/harufont.getencodingname.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getEncodingName(): string {}

	/**
	 * フォント名を取得する
	 * <p>フォントの名前を取得します。</p>
	 * @return string <p>フォントの名前を返します。</p>
	 * @link http://php.net/manual/ja/harufont.getfontname.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getFontName(): string {}

	/**
	 * テキスト全体の幅、文字数、単語数および空白の数を取得する
	 * <p>指定したテキストについて、 テキスト全体の幅、文字数、単語数および空白の数を取得します。</p>
	 * @param string $text <p>調べたいテキスト。</p>
	 * @return array <p>指定したテキストについて、 テキスト全体の幅、文字数、単語数および空白の数を返します。</p>
	 * @link http://php.net/manual/ja/harufont.gettextwidth.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getTextWidth(string $text): array {}

	/**
	 * フォントの文字の幅を取得する
	 * <p>フォントの文字の幅を取得します。</p>
	 * @param int $character <p>文字のコード。</p>
	 * @return int <p>フォントの文字の幅を返します。</p>
	 * @link http://php.net/manual/ja/harufont.getunicodewidth.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getUnicodeWidth(int $character): int {}

	/**
	 * 小文字のベースラインからの距離を取得する
	 * <p>小文字のベースラインからの距離を取得します。</p>
	 * @return int <p>小文字のベースラインからの距離を返します。</p>
	 * @link http://php.net/manual/ja/harufont.getxheight.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getXHeight(): int {}

	/**
	 * Calculate the number of characters which can be included within the specified width
	 * <p>Calculate the number of characters which can be included within the specified width.</p>
	 * @param string $text <p>The text to fit the width.</p>
	 * @param float $width <p>The width of the area to put the text to.</p>
	 * @param float $font_size <p>The size of the font.</p>
	 * @param float $char_space <p>The character spacing.</p>
	 * @param float $word_space <p>The word spacing.</p>
	 * @param bool $word_wrap <p>When this parameter is set to <b><code>TRUE</code></b> the function "emulates" word wrapping and doesn't include the part of the current word if reached the end of the area.</p>
	 * @return int <p>Returns the number of characters which can be included within the specified width.</p>
	 * @link http://php.net/manual/ja/harufont.measuretext.php
	 * @since PECL haru >= 0.0.1
	 */
	public function measureText(string $text, float $width, float $font_size, float $char_space, float $word_space, bool $word_wrap = FALSE): int {}
}

/**
 * <p>Haru PDF 画像クラスです。</p>
 * @link http://php.net/manual/ja/class.haruimage.php
 * @since PECL haru >= 0.0.1
 */
class HaruImage {

	/**
	 * 画像の各色コンポーネントで使用するビット数を取得する
	 * <p>画像の各色コンポーネントで使用するビット数を取得します。</p>
	 * @return int <p>画像の各色コンポーネントで使用するビット数を返します。</p>
	 * @link http://php.net/manual/ja/haruimage.getbitspercomponent.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getBitsPerComponent(): int {}

	/**
	 * 色空間の名前を取得する
	 * <p>色空間の名前を取得します。</p>
	 * @return string <p>画像の色空間の名前を返します。名前は以下のいずれかとなります。</p><ul> <li> "DeviceGray" </li> <li> "DeviceRGB" </li> <li> "DeviceCMYK" </li> <li> "Indexed" </li> </ul>
	 * @link http://php.net/manual/ja/haruimage.getcolorspace.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getColorSpace(): string {}

	/**
	 * 画像の高さを取得する
	 * <p>画像の高さを取得します。</p>
	 * @return int <p>画像の高さを返します。</p>
	 * @link http://php.net/manual/ja/haruimage.getheight.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getHeight(): int {}

	/**
	 * 画像の大きさを取得する
	 * <p>画像の大きさを取得します。</p>
	 * @return array <p>二つの要素 width および height を持つ配列を返します。 それぞれ、画像の対応する部分の大きさが含まれます。</p>
	 * @link http://php.net/manual/ja/haruimage.getsize.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getSize(): array {}

	/**
	 * 画像の幅を取得する
	 * <p>画像の幅を取得します。</p>
	 * @return int <p>画像の幅を返します。</p>
	 * @link http://php.net/manual/ja/haruimage.getwidth.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getWidth(): int {}

	/**
	 * 画像の色マスクを設定する
	 * <p>画像の透過色を、RGB 値の範囲を用いて定義します。 この範囲内の色が透過色として表示されます。 画像の色空間は RGB でなければなりません。</p>
	 * @param int $rmin <p>赤の最小値。0 から 255 までの値でなければなりません。</p>
	 * @param int $rmax <p>赤の最大値。0 から 255 までの値でなければなりません。</p>
	 * @param int $gmin <p>緑の最小値。0 から 255 までの値でなければなりません。</p>
	 * @param int $gmax <p>緑の最大値。0 から 255 までの値でなければなりません。</p>
	 * @param int $bmin <p>青の最小値。0 から 255 までの値でなければなりません。</p>
	 * @param int $bmax <p>青の最大値。0 から 255 までの値でなければなりません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/haruimage.setcolormask.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setColorMask(int $rmin, int $rmax, int $gmin, int $gmax, int $bmin, int $bmax): bool {}

	/**
	 * 画像マスクを設定する
	 * <p>画像マスクとして使用する画像を設定します。 1 ビットのグレイスケール画像である必要があります。</p>
	 * @param object $mask_image <p>有効な HaruImage のインスタンス。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/haruimage.setmaskimage.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setMaskImage(object $mask_image): bool {}
}

/**
 * <p>Haru PDF アウトラインクラスです。</p>
 * @link http://php.net/manual/ja/class.haruoutline.php
 * @since PECL haru >= 0.0.1
 */
class HaruOutline {

	/**
	 * アウトラインの対象を設定する
	 * <p>アウトラインがクリックされたときにジャンプする先の 対象オブジェクトを設定します。</p>
	 * @param object $destination <p>有効な HaruDestination のインスタンス。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/haruoutline.setdestination.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setDestination(object $destination): bool {}

	/**
	 * アウトラインの初期状態を設定する
	 * <p>アウトラインを最初に表示した際に、 このノードを開くか開かないかを定義します。</p>
	 * @param bool $opened <p><b><code>TRUE</code></b> は開いた状態、<b><code>FALSE</code></b> は閉じた状態。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/haruoutline.setopened.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setOpened(bool $opened): bool {}
}

/**
 * <p>Haru PDF ページクラスです。</p>
 * @link http://php.net/manual/ja/class.harupage.php
 * @since PECL haru >= 0.0.1
 */
class HaruPage {

	/**
	 * 現在のパスに弧を追加する
	 * <p>現在のパスに弧を追加します。</p>
	 * @param float $x <p>中心の水平座標。</p>
	 * @param float $y <p>中心の垂直座標。</p>
	 * @param float $ray <p>弧の半径。</p>
	 * @param float $ang1 <p>開始角。</p>
	 * @param float $ang2 <p>終了角。<code>ang1</code> より大きくなければなりません。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.arc.php
	 * @since PECL haru >= 0.0.1
	 */
	public function arc(float $x, float $y, float $ray, float $ang1, float $ang2): bool {}

	/**
	 * テキストオブジェクトを開始し、テキストの現在位置を (0,0) に設定する
	 * <p>新しいテキストオブジェクトを開始し、テキストの現在位置を (0,0) に設定します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.begintext.php
	 * @since PECL haru >= 0.0.1
	 */
	public function beginText(): bool {}

	/**
	 * 現在のパスに円を追加する
	 * <p>現在のパスに円を追加します。</p>
	 * @param float $x <p>中心の水平座標。</p>
	 * @param float $y <p>中心の垂直座標。</p>
	 * @param float $ray <p>円の半径。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.circle.php
	 * @since PECL haru >= 0.0.1
	 */
	public function circle(float $x, float $y, float $ray): bool {}

	/**
	 * 現在の位置からパスの開始位置に直線を追加する
	 * <p>現在の位置からパスの開始位置に直線を追加します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.closepath.php
	 * @since PECL haru >= 0.0.1
	 */
	public function closePath(): bool {}

	/**
	 * 現在のページの変換行列と指定した行列を連結する
	 * <p>現在のページの変換行列と指定した行列を連結します。</p>
	 * @param float $a
	 * @param float $b
	 * @param float $c
	 * @param float $d
	 * @param float $x
	 * @param float $y
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.concat.php
	 * @since PECL haru >= 0.0.1
	 */
	public function concat(float $a, float $b, float $c, float $d, float $x, float $y): bool {}

	/**
	 * 新しい HaruDestination のインスタンスを作成する
	 * <p>新しい HaruDestination のインスタンスを作成します。</p>
	 * @return object <p>新しい HaruDestination のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harupage.createdestination.php
	 * @since PECL haru >= 0.0.1
	 */
	public function createDestination(): object {}

	/**
	 * 新しい HaruAnnotation のインスタンスを作成する
	 * <p>新しい HaruAnnotation のインスタンスを作成します。</p>
	 * @param array $rectangle <p>クリック可能な範囲を表す 4 つの座標の配列。</p>
	 * @param object $destination <p>有効な HaruDestination のインスタンス。</p>
	 * @return object <p>新しい HaruAnnotation のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harupage.createlinkannotation.php
	 * @since PECL haru >= 0.0.1
	 */
	public function createLinkAnnotation(array $rectangle, object $destination): object {}

	/**
	 * 新しい HaruAnnotation のインスタンスを作成する
	 * <p>新しい HaruAnnotation のインスタンスを作成します。</p>
	 * @param array $rectangle <p>アノテーションの範囲を表す 4 つの座標の配列。</p>
	 * @param string $text <p>表示するテキスト。</p>
	 * @param object $encoder <p>オプションで指定する HaruEncoder のインスタンス。</p>
	 * @return object <p>新しい HaruAnnotation のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harupage.createtextannotation.php
	 * @since PECL haru >= 0.0.1
	 */
	public function createTextAnnotation(array $rectangle, string $text, object $encoder = NULL): object {}

	/**
	 * 新しい HaruAnnotation のインスタンスを作成する
	 * <p>新しい HaruAnnotation のインスタンスを作成します。</p>
	 * @param array $rectangle <p>クリック可能な範囲を表す 4 つの座標の配列。</p>
	 * @param string $url <p>開く URL。</p>
	 * @return object <p>新しい HaruAnnotation のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harupage.createurlannotation.php
	 * @since PECL haru >= 0.0.1
	 */
	public function createURLAnnotation(array $rectangle, string $url): object {}

	/**
	 * ベジエ曲線を現在のパスに追加する
	 * <p>ベジエ曲線を現在のパスに追加します。 点 (x1, y1) および点 (x2, y2) をベジエ曲線の制御点とし、 現在位置を点 (x3, y3) に移動します。</p>
	 * @param float $x1 <p>ベジエ曲線の制御点。</p>
	 * @param float $y1 <p>ベジエ曲線の制御点。</p>
	 * @param float $x2 <p>ベジエ曲線の制御点。</p>
	 * @param float $y2 <p>ベジエ曲線の制御点。</p>
	 * @param float $x3 <p>現在位置はここに移動します。</p>
	 * @param float $y3
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.curveto.php
	 * @since PECL haru >= 0.0.1
	 */
	public function curveTo(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): bool {}

	/**
	 * ベジエ曲線を現在のパスに追加する
	 * <p>ベジエ曲線を現在のパスに追加します。 現在位置および点 (x2, y2) をベジエ曲線の制御点とし、 現在位置を点 (x3, y3) に移動します。</p>
	 * @param float $x2 <p>ベジエ曲線の制御点。</p>
	 * @param float $y2 <p>ベジエ曲線の制御点。</p>
	 * @param float $x3 <p>現在位置はここに移動します。</p>
	 * @param float $y3
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.curveto2.php
	 * @since PECL haru >= 0.0.1
	 */
	public function curveTo2(float $x2, float $y2, float $x3, float $y3): bool {}

	/**
	 * ベジエ曲線を現在のパスに追加する
	 * <p>ベジエ曲線を現在のパスに追加します。 点 (x1, y1) および点 (x3, y3) をベジエ曲線の制御点とし、 現在位置を点 (x3, y3) に移動します。</p>
	 * @param float $x1 <p>ベジエ曲線の制御点。</p>
	 * @param float $y1 <p>ベジエ曲線の制御点。</p>
	 * @param float $x3 <p>現在位置はここに移動します。</p>
	 * @param float $y3
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.curveto3.php
	 * @since PECL haru >= 0.0.1
	 */
	public function curveTo3(float $x1, float $y1, float $x3, float $y3): bool {}

	/**
	 * 画像をページに表示する
	 * <p>画像をページに表示します。</p>
	 * @param object $image <p>有効な HaruImage のインスタンス。</p>
	 * @param float $x <p>画像を表示する範囲の左端。</p>
	 * @param float $y <p>画像を表示する範囲の下端。</p>
	 * @param float $width <p>画像の範囲の幅。</p>
	 * @param float $height <p>画像の範囲の高さ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.drawimage.php
	 * @since PECL haru >= 0.0.1
	 */
	public function drawImage(object $image, float $x, float $y, float $width, float $height): bool {}

	/**
	 * 楕円を現在のパスに追加する
	 * <p>楕円を現在のパスに追加します。</p>
	 * @param float $x <p>中心の水平座標。</p>
	 * @param float $y <p>中心の垂直座標。</p>
	 * @param float $xray <p>楕円の x 方向の半径。</p>
	 * @param float $yray <p>楕円の y 方向の半径。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.ellipse.php
	 * @since PECL haru >= 0.0.1
	 */
	public function ellipse(float $x, float $y, float $xray, float $yray): bool {}

	/**
	 * 塗りつぶしや描画を行わずに現在のパスオブジェクトを終了する
	 * <p>塗りつぶしや描画を行わずに現在のパスオブジェクトを終了します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.endpath.php
	 * @since PECL haru >= 0.0.1
	 */
	public function endPath(): bool {}

	/**
	 * 現在のテキストオブジェクトを終了する
	 * <p>現在のテキストオブジェクトを終了します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.endtext.php
	 * @since PECL haru >= 0.0.1
	 */
	public function endText(): bool {}

	/**
	 * Fill current path using even-odd rule, then paint the path
	 * <p>Fills current path using even-odd rule, then paints the path.</p>
	 * @param bool $close_path <p>Optional parameter. When set to <b><code>TRUE</code></b>, the function closes the current path. Default to <b><code>FALSE</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
	 * @link http://php.net/manual/ja/harupage.eofillstroke.php
	 * @since PECL haru >= 0.0.1
	 */
	public function eoFillStroke(bool $close_path = FALSE): bool {}

	/**
	 * 奇偶規則を使用して現在のパスを塗りつぶす
	 * <p>奇偶規則を使用して現在のパスを塗りつぶします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.eofill.php
	 * @since PECL haru >= 0.0.1
	 */
	public function eofill(): bool {}

	/**
	 * ノンゼロワインディング規則を使用して現在のパスを塗りつぶす
	 * <p>ノンゼロワインディング規則を使用して現在のパスを塗りつぶします。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.fill.php
	 * @since PECL haru >= 0.0.1
	 */
	public function fill(): bool {}

	/**
	 * Fill current path using nonzero winding number rule, then paint the path
	 * <p>Fills current path using nonzero winding number rule, then paints the path.</p>
	 * @param bool $close_path <p>Optional parameter. When set to <b><code>TRUE</code></b>, the function closes the current path. Default to <b><code>FALSE</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
	 * @link http://php.net/manual/ja/harupage.fillstroke.php
	 * @since PECL haru >= 0.0.1
	 */
	public function fillStroke(bool $close_path = FALSE): bool {}

	/**
	 * 現在の塗りつぶし色を取得する
	 * <p>現在の塗りつぶし色を取得します。</p>
	 * @return array <p>現在の塗りつぶし色を、4 つの要素 ("c", "m", "y" および "k") からなる配列で返します。</p>
	 * @link http://php.net/manual/ja/harupage.getcmykfill.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getCMYKFill(): array {}

	/**
	 * 現在の描画色を取得する
	 * <p>現在の描画色を取得します。</p>
	 * @return array <p>現在の描画色を、4 つの要素 ("c", "m", "y" および "k") からなる配列で返します。</p>
	 * @link http://php.net/manual/ja/harupage.getcmykstroke.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getCMYKStroke(): array {}

	/**
	 * 現在の文字間隔を取得する
	 * <p>現在の文字間隔を取得します。</p>
	 * @return float <p>現在の文字間隔を返します。</p>
	 * @link http://php.net/manual/ja/harupage.getcharspace.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getCharSpace(): float {}

	/**
	 * 現在使用中のフォントを取得する
	 * <p>現在使用中のフォントを取得します。</p>
	 * @return object <p>現在使用中のフォントを表す HaruFont のインスタンスを返します。</p>
	 * @link http://php.net/manual/ja/harupage.getcurrentfont.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getCurrentFont(): object {}

	/**
	 * 現在のフォントのサイズを取得する
	 * <p>現在のフォントのサイズを取得します。</p>
	 * @return float <p>現在のフォントのサイズを返します。</p>
	 * @link http://php.net/manual/ja/harupage.getcurrentfontsize.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getCurrentFontSize(): float {}

	/**
	 * パスの描画用の現在の位置を取得する
	 * <p>パスの描画用に使用する現在位置を取得します。</p>
	 * @return array <p>パスの描画用に使用する現在位置を、二つの要素 "x" と "y" からなる配列で返します。</p>
	 * @link http://php.net/manual/ja/harupage.getcurrentpos.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getCurrentPos(): array {}

	/**
	 * テキストの印字用の現在の位置を取得する
	 * <p>テキストの印字用に使用する現在位置を取得します。</p>
	 * @return array <p>テキストの印字用に使用する現在位置を、二つの要素 "x" と "y" からなる配列で返します。</p>
	 * @link http://php.net/manual/ja/harupage.getcurrenttextpos.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getCurrentTextPos(): array {}

	/**
	 * 現在の破線のパターンを取得する
	 * <p>現在の破線のパターンを取得します。破線のパターンについての詳細な情報は <code>HaruPage::setDash()</code> を参照ください。</p>
	 * @return array <p>現在の破線のパターンを、二つの要素 "pattern" と "phase" からなる配列で返します。破線のパターンが設定されていない場合は <b><code>FALSE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.getdash.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getDash(): array {}

	/**
	 * 現在の塗りつぶしの色空間を取得する
	 * <p>現在の塗りつぶしの色空間を取得します。</p>
	 * @return int <p>現在の塗りつぶしの色空間を返します。 結果は、以下のいずれかの値となります。</p><ul> <li> <b><code>HaruDoc::CS_DEVICE_GRAY</code></b> </li> <li> <b><code>HaruDoc::CS_DEVICE_RGB</code></b> </li> <li> <b><code>HaruDoc::CS_DEVICE_CMYK</code></b> </li> <li> <b><code>HaruDoc::CS_CAL_GRAY</code></b> </li> <li> <b><code>HaruDoc::CS_CAL_RGB</code></b> </li> <li> <b><code>HaruDoc::CS_LAB</code></b> </li> <li> <b><code>HaruDoc::CS_ICC_BASED</code></b> </li> <li> <b><code>HaruDoc::CS_SEPARATION</code></b> </li> <li> <b><code>HaruDoc::CS_DEVICE_N</code></b> </li> <li> <b><code>HaruDoc::CS_INDEXED</code></b> </li> <li> <b><code>HaruDoc::CS_PATTERN</code></b> </li> </ul>
	 * @link http://php.net/manual/ja/harupage.getfillingcolorspace.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getFillingColorSpace(): int {}

	/**
	 * ページの平坦度を取得する
	 * <p>ページの平坦度を取得します。</p>
	 * @return float <p>ページの平坦度を返します。</p>
	 * @link http://php.net/manual/ja/harupage.getflatness.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getFlatness(): float {}

	/**
	 * 現在のグラフィックスモードを取得する
	 * <p>現在のグラフィックスモードを取得します。</p>
	 * @return int <p>現在のグラフィックスモードを返します。 結果は次のいずれかの値となります。</p><ul> <li> <b><code>HaruPage::GMODE_PAGE_DESCRIPTION</code></b> </li> <li> <b><code>HaruPage::GMODE_TEXT_OBJECT</code></b> </li> <li> <b><code>HaruPage::GMODE_PATH_OBJECT</code></b> </li> <li> <b><code>HaruPage::GMODE_CLIPPING_PATH</code></b> </li> <li> <b><code>HaruPage::GMODE_SHADING</code></b> </li> <li> <b><code>HaruPage::GMODE_INLINE_IMAGE</code></b> </li> <li> <b><code>HaruPage::GMODE_EXTERNAL_OBJECT</code></b> </li> </ul>
	 * @link http://php.net/manual/ja/harupage.getgmode.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getGMode(): int {}

	/**
	 * 現在の塗りつぶし色を取得する
	 * <p>現在の塗りつぶし色を取得します。</p>
	 * @return float <p>現在の塗りつぶし色を返します。</p>
	 * @link http://php.net/manual/ja/harupage.getgrayfill.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getGrayFill(): float {}

	/**
	 * 現在の描画色を取得する
	 * <p>現在の塗りつぶし色を取得します。</p>
	 * @return float <p>現在の塗りつぶし色を返します。</p>
	 * @link http://php.net/manual/ja/harupage.getgraystroke.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getGrayStroke(): float {}

	/**
	 * ページの高さを取得する
	 * <p>ページの高さを取得します。</p>
	 * @return float <p>ページの高さを返します。</p>
	 * @link http://php.net/manual/ja/harupage.getheight.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getHeight(): float {}

	/**
	 * 現在の水平方向の拡大率を取得する
	 * <p>現在の水平方向の拡大率を取得します。</p>
	 * @return float <p>現在の水平方向の拡大率を返します。</p>
	 * @link http://php.net/manual/ja/harupage.gethorizontalscaling.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getHorizontalScaling(): float {}

	/**
	 * 現在のパスの終端の形式を取得する
	 * <p>現在のパスの終端の形式を取得します。</p>
	 * @return int <p>現在のパスの終端の形式を返します。結果の値は以下のいずれかとなります。</p><ul> <li> <b><code>HaruPage::BUTT_END</code></b> - パスの端点で、線を角型に打ち切ります。 </li> <li> <b><code>HaruPage::ROUND_END</code></b> - パスの端点が、その点を中心とする半円となります。 </li> <li> <b><code>HaruPage::PROJECTING_SCUARE_END</code></b> - パスの端点から、線幅の半分まで超えて線を続けます。 </li> </ul>
	 * @link http://php.net/manual/ja/harupage.getlinecap.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getLineCap(): int {}

	/**
	 * 現在のパスの角の形式を取得する
	 * <p>現在のパスの角の形式を取得します。</p>
	 * @return int <p>現在のパスの角の形式を返します。 結果の値は以下のいずれかとなります。</p><ul> <li> <b><code>HaruPage::MITER_JOIN</code></b> </li> <li> <b><code>HaruPage::ROUND_JOIN</code></b> </li> <li> <b><code>HaruPage::BEVEL_JOIN</code></b> </li> </ul>
	 * @link http://php.net/manual/ja/harupage.getlinejoin.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getLineJoin(): int {}

	/**
	 * 現在の線幅を取得する
	 * <p>現在の線幅を取得します。</p>
	 * @return float <p>現在の線幅を返します。</p>
	 * @link http://php.net/manual/ja/harupage.getlinewidth.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getLineWidth(): float {}

	/**
	 * マイターリミットの値を取得する
	 * <p>マイターリミットの値を取得します。</p>
	 * @return float <p>マイターリミットの値を返します。</p>
	 * @link http://php.net/manual/ja/harupage.getmiterlimit.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getMiterLimit(): float {}

	/**
	 * 現在の塗りつぶし色を取得する
	 * <p>現在の塗りつぶし色を取得します。</p>
	 * @return array <p>現在の塗りつぶし色を、三つの要素 "r"、"g" および "b" からなる配列で返します。</p>
	 * @link http://php.net/manual/ja/harupage.getrgbfill.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getRGBFill(): array {}

	/**
	 * 現在の描画色を取得する
	 * <p>現在の描画色を取得します。</p>
	 * @return array <p>現在の描画色を返します。</p>
	 * @link http://php.net/manual/ja/harupage.getrgbstroke.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getRGBStroke(): array {}

	/**
	 * 現在の描画の色空間を取得する
	 * <p>現在の描画の色空間を取得します。</p>
	 * @return int <p>現在の描画の色空間を返します。 返り値の一覧は <code>HaruPage::getFillingColorSpace()</code> と同じです。</p>
	 * @link http://php.net/manual/ja/harupage.getstrokingcolorspace.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getStrokingColorSpace(): int {}

	/**
	 * 現在の行間隔の値を取得する
	 * <p>現在の行間隔の値を取得します。</p>
	 * @return float <p>現在の行間隔の値を返します。</p>
	 * @link http://php.net/manual/ja/harupage.gettextleading.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getTextLeading(): float {}

	/**
	 * そのページの現在のテキスト変換行列を取得する
	 * <p>そのページの現在のテキスト変換行列を取得します。</p>
	 * @return array <p>そのページの現在のテキスト変換行列を、 "a"、"b"、"c"、"d"、"x" および "y" の 6 つの要素からなる配列で返します。</p>
	 * @link http://php.net/manual/ja/harupage.gettextmatrix.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getTextMatrix(): array {}

	/**
	 * 現在のテキストのレンダリングモードを取得する
	 * <p>現在のテキストのレンダリングモードを取得します。</p>
	 * @return int <p>現在のテキストのレンダリングモードを返します。 結果の値は次のいずれかとなります。</p><ul> <li> <b><code>HaruPage::FILL</code></b> </li> <li> <b><code>HaruPage::STROKE</code></b> </li> <li> <b><code>HaruPage::FILL_THEN_STROKE</code></b> </li> <li> <b><code>HaruPage::INVISIBLE</code></b> </li> <li> <b><code>HaruPage::FILL_CLIPPING</code></b> </li> <li> <b><code>HaruPage::STROKE_CLIPPING</code></b> </li> <li> <b><code>HaruPage::FILL_STROKE_CLIPPING</code></b> </li> <li> <b><code>HaruPage::CLIPPING</code></b> </li> </ul>
	 * @link http://php.net/manual/ja/harupage.gettextrenderingmode.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getTextRenderingMode(): int {}

	/**
	 * 現在のテキストライズの値を取得する
	 * <p>現在のテキストライズの値を取得します。</p>
	 * @return float <p>現在のテキストライズの値を返します。</p>
	 * @link http://php.net/manual/ja/harupage.gettextrise.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getTextRise(): float {}

	/**
	 * 現在のフォントサイズ、文字エンコーディングおよび単語間隔を使用してテキストの幅を取得する
	 * <p>現在のフォントサイズ、文字エンコーディングおよび単語間隔を使用して テキストの幅を取得します。</p>
	 * @param string $text <p>調べたいテキスト。</p>
	 * @return float <p>現在のフォントサイズ、文字エンコーディングおよび単語間隔を使用して テキストの幅を返します。</p>
	 * @link http://php.net/manual/ja/harupage.gettextwidth.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getTextWidth(string $text): float {}

	/**
	 * そのページの現在の変換行列を取得する
	 * <p>そのページの現在の変換行列を取得します。</p>
	 * @return array <p>そのページの現在の変換行列を、 "a"、"b"、"c"、"d"、"x" および "y" の 6 つの要素からなる配列で返します。</p>
	 * @link http://php.net/manual/ja/harupage.gettransmatrix.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getTransMatrix(): array {}

	/**
	 * ページの幅を取得する
	 * <p>ページの幅を取得します。</p>
	 * @return float <p>ページの幅を返します。</p>
	 * @link http://php.net/manual/ja/harupage.getwidth.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getWidth(): float {}

	/**
	 * 現在の単語間隔の値を取得する
	 * <p>現在の単語間隔の値を取得します。</p>
	 * @return float <p>現在の単語間隔の値を返します。</p>
	 * @link http://php.net/manual/ja/harupage.getwordspace.php
	 * @since PECL haru >= 0.0.1
	 */
	public function getWordSpace(): float {}

	/**
	 * 現在位置から指定した位置まで直線を描画する
	 * <p>現在位置から指定した位置まで直線を描画します。</p>
	 * @param float $x
	 * @param float $y
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.lineto.php
	 * @since PECL haru >= 0.0.1
	 */
	public function lineTo(float $x, float $y): bool {}

	/**
	 * Calculate the byte length of characters which can be included on one line of the specified width
	 * <p>Get the byte length of characters which can be included on one line of the specified width.</p>
	 * @param string $text <p>The text to measure.</p>
	 * @param float $width <p>The width of the line.</p>
	 * @param bool $wordwrap <p>When this parameter is set to <b><code>TRUE</code></b> the function "emulates" word wrapping by stopping after the last full word (delimited by whitespace) that can fit on the line.</p>
	 * @return int <p>Returns the byte length of characters which can be included within the specified width. For single-byte encodings, this is equal to the number of characters. For multi-byte encodings, this is not necessarily the case.</p>
	 * @link http://php.net/manual/ja/harupage.measuretext.php
	 * @since PECL haru >= 0.0.1
	 */
	public function measureText(string $text, float $width, bool $wordwrap = FALSE): int {}

	/**
	 * Move text position to the specified offset
	 * <p>Moves text position to the specified offset. If the start position of the current line is (x1, y1), the start of the next line is (x1 + <code>x</code>, y1 + <code>y</code>).</p>
	 * @param float $x <p>The specified text position offset.</p>
	 * @param float $y <p>The specified text position offset.</p>
	 * @param bool $set_leading <p>If set to <b><code>TRUE</code></b>, the function sets the text leading to -<code>y</code>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
	 * @link http://php.net/manual/ja/harupage.movetextpos.php
	 * @since PECL haru >= 0.0.1
	 */
	public function moveTextPos(float $x, float $y, bool $set_leading = FALSE): bool {}

	/**
	 * 新しい描画パスの開始位置を設定する
	 * <p>新しい描画パスの開始位置を定義します。</p>
	 * @param float $x <p>新しい開始位置の座標。</p>
	 * @param float $y <p>新しい開始位置の座標。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.moveto.php
	 * @since PECL haru >= 0.0.1
	 */
	public function moveTo(float $x, float $y): bool {}

	/**
	 * テキストの位置を次の行の行頭に移動する
	 * <p>テキストの位置を次の行の行頭に移動します。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.movetonextline.php
	 * @since PECL haru >= 0.0.1
	 */
	public function moveToNextLine(): bool {}

	/**
	 * 現在のパスに矩形を追加する
	 * <p>現在の描画パスに矩形を追加します。</p>
	 * @param float $x <p>矩形の左端。</p>
	 * @param float $y <p>矩形の下端。</p>
	 * @param float $width <p>矩形の幅。</p>
	 * @param float $height <p>矩形の高さ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.rectangle.php
	 * @since PECL haru >= 0.0.1
	 */
	public function rectangle(float $x, float $y, float $width, float $height): bool {}

	/**
	 * ページの塗りつぶし色を設定する
	 * <p>ページの塗りつぶし色を定義します。</p>
	 * @param float $c
	 * @param float $m
	 * @param float $y
	 * @param float $k
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setcmykfill.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setCMYKFill(float $c, float $m, float $y, float $k): bool {}

	/**
	 * ページの描画色を設定する
	 * <p>ページの描画色を設定します。</p>
	 * @param float $c
	 * @param float $m
	 * @param float $y
	 * @param float $k
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setcmykstroke.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setCMYKStroke(float $c, float $m, float $y, float $k): bool {}

	/**
	 * ページの文字間隔を設定する
	 * <p>ページの文字間隔を定義します。</p>
	 * @param float $char_space <p>そのページの新しい文字間隔。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setcharspace.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setCharSpace(float $char_space): bool {}

	/**
	 * ページの破線パターンを設定する
	 * <p>ページの破線パターンを定義します。</p>
	 * @param array $pattern <p>最大 8 要素からなる配列。そのページの破線で使用する 線と空白のパターンを指定します。</p>
	 * @param int $phase <p>パターンをどこから開始するか。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setdash.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setDash(array $pattern, int $phase): bool {}

	/**
	 * ページの平坦度を設定する
	 * <p>ページの平坦度を定義します。</p>
	 * @param float $flatness <p>そのページに定義する平坦度。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setflatness.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setFlatness(float $flatness): bool {}

	/**
	 * ページのフォントおよびフォントサイズを設定する
	 * <p>ページの現在のフォントおよびフォントサイズを定義します。</p>
	 * @param object $font <p>有効な HaruFont のインスタンス。</p>
	 * @param float $size <p>フォントのサイズ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setfontandsize.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setFontAndSize(object $font, float $size): bool {}

	/**
	 * ページの塗りつぶし色を設定する
	 * <p>ページの塗りつぶし色を定義します。</p>
	 * @param float $value <p>0 から 1 までのグレイ値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setgrayfill.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setGrayFill(float $value): bool {}

	/**
	 * ページの描画色を設定する
	 * <p>ページの描画色を定義します。</p>
	 * @param float $value <p>0 から 1 までのグレイ値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setgraystroke.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setGrayStroke(float $value): bool {}

	/**
	 * ページの高さを設定する
	 * <p>ページの高さを定義します。</p>
	 * @param float $height <p>そのページに定義する高さ。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setheight.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setHeight(float $height): bool {}

	/**
	 * ページの横方向の拡大率を設定する
	 * <p>ページの水平方向の拡大率を設定します。</p>
	 * @param float $scaling <p>ページ上でテキストを表示する際の水平方向の拡大率。 初期値は 100 です。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.sethorizontalscaling.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setHorizontalScaling(float $scaling): bool {}

	/**
	 * パスの終端の形式を設定する
	 * <p>パスの終端に使用する形式を定義します。</p>
	 * @param int $cap <p>次のいずれかの値でなければなりません。</p><ul> <li> <b><code>HaruPage::BUTT_END</code></b> - パスの端点で、線を角型に打ち切ります。 </li> <li> <b><code>HaruPage::ROUND_END</code></b> - パスの端点が、その点を中心とする半円となります。 </li> <li> <b><code>HaruPage::PROJECTING_SCUARE_END</code></b> - パスの端点から、線幅の半分まで超えて線を続けます。 </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setlinecap.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setLineCap(int $cap): bool {}

	/**
	 * そのページのパスの角の形式を設定する
	 * <p>そのページのパスの角の形式を定義します。</p>
	 * @param int $join <p>以下のいずれかの値でなければなりません。</p><ul> <li> <b><code>HaruPage::MITER_JOIN</code></b> </li> <li> <b><code>HaruPage::ROUND_JOIN</code></b> </li> <li> <b><code>HaruPage::BEVEL_JOIN</code></b> </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setlinejoin.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setLineJoin(int $join): bool {}

	/**
	 * ページの線幅を設定する
	 * <p>ページの線幅を定義します。</p>
	 * @param float $width <p>そのページに定義する線幅。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setlinewidth.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setLineWidth(float $width): bool {}

	/**
	 * ページのマイターリミットの現在値を設定する
	 * <p>ページのマイターリミットの現在値を設定します。</p>
	 * @param float $limit <p>ページのマイターリミットの現在値に定義する値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setmiterlimit.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setMiterLimit(float $limit): bool {}

	/**
	 * ページの塗りつぶし色を設定する
	 * <p>ページの塗りつぶし色を定義します。すべての値は 0 から 1 までの間でなければなりません。</p>
	 * @param float $r
	 * @param float $g
	 * @param float $b
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setrgbfill.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setRGBFill(float $r, float $g, float $b): bool {}

	/**
	 * ページの描画色を設定する
	 * <p>ページの描画色を定義します。すべての値は 0 から 1 までの間でなければなりません。</p>
	 * @param float $r
	 * @param float $g
	 * @param float $b
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setrgbstroke.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setRGBStroke(float $r, float $g, float $b): bool {}

	/**
	 * ページの回転角度を設定する
	 * <p>ページの回転角度を定義します。</p>
	 * @param int $angle <p>90 度の倍数である必要があります。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setrotate.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setRotate(int $angle): bool {}

	/**
	 * ページのサイズおよび方向を設定する
	 * <p>ページのサイズおよび方向を、定義済みのフォーマットに変更します。</p>
	 * @param int $size <p>次のいずれかの値でなければなりません。</p><ul> <li> <b><code>HaruPage::SIZE_LETTER</code></b> </li> <li> <b><code>HaruPage::SIZE_LEGAL</code></b> </li> <li> <b><code>HaruPage::SIZE_A3</code></b> </li> <li> <b><code>HaruPage::SIZE_A4</code></b> </li> <li> <b><code>HaruPage::SIZE_A5</code></b> </li> <li> <b><code>HaruPage::SIZE_B4</code></b> </li> <li> <b><code>HaruPage::SIZE_B5</code></b> </li> <li> <b><code>HaruPage::SIZE_EXECUTIVE</code></b> </li> <li> <b><code>HaruPage::SIZE_US4x6</code></b> </li> <li> <b><code>HaruPage::SIZE_US4x8</code></b> </li> <li> <b><code>HaruPage::SIZE_US5x7</code></b> </li> <li> <b><code>HaruPage::SIZE_COMM10</code></b> </li> </ul>
	 * @param int $direction <p>次のいずれかの値でなければなりません。</p><ul> <li> <b><code>HaruPage::PORTRAIT</code></b> </li> <li> <b><code>HaruPage::LANDSCAPE</code></b> </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setsize.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setSize(int $size, int $direction): bool {}

	/**
	 * ページの移動方式を設定する
	 * <p>ページの移動方式を設定します。</p>
	 * @param int $type <p>以下のいずれかの値でなければなりません。</p><ul> <li> <b><code>HaruPage::TS_WIPE_RIGHT</code></b> </li> <li> <b><code>HaruPage::TS_WIPE_LEFT</code></b> </li> <li> <b><code>HaruPage::TS_WIPE_UP</code></b> </li> <li> <b><code>HaruPage::TS_WIPE_DOWN</code></b> </li> <li> <b><code>HaruPage::TS_BARN_DOORS_HORIZONTAL_OUT</code></b> </li> <li> <b><code>HaruPage::TS_BARN_DOORS_HORIZONTAL_IN</code></b> </li> <li> <b><code>HaruPage::TS_BARN_DOORS_VERTICAL_OUT</code></b> </li> <li> <b><code>HaruPage::TS_BARN_DOORS_VERTICAL_IN</code></b> </li> <li> <b><code>HaruPage::TS_BOX_OUT</code></b> </li> <li> <b><code>HaruPage::TS_BOX_IN</code></b> </li> <li> <b><code>HaruPage::TS_BLINDS_HORIZONTAL</code></b> </li> <li> <b><code>HaruPage::TS_BLINDS_VERTICAL</code></b> </li> <li> <b><code>HaruPage::TS_DISSOLVE</code></b> </li> <li> <b><code>HaruPage::TS_GLITTER_RIGHT</code></b> </li> <li> <b><code>HaruPage::TS_GLITTER_DOWN</code></b> </li> <li> <b><code>HaruPage::TS_GLITTER_TOP_LEFT_TO_BOTTOM_RIGHT</code></b> </li> <li> <b><code>HaruPage::TS_REPLACE</code></b> </li> </ul>
	 * @param float $disp_time <p>ページの表示時間を表す秒数。</p>
	 * @param float $trans_time <p>ページ移動処理を行う秒数。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setslideshow.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setSlideShow(int $type, float $disp_time, float $trans_time): bool {}

	/**
	 * ページのテキストリーディング (行間隔) を設定する
	 * <p>ページの行間隔を設定します。</p>
	 * @param float $text_leading <p>ページの行間隔に設定する値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.settextleading.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setTextLeading(float $text_leading): bool {}

	/**
	 * そのページの現在のテキスト変換行列を設定する
	 * <p>そのページのテキスト変換行列を定義します。</p>
	 * @param float $a <p>幅の乗数。</p>
	 * @param float $b <p>垂直方向の傾き (ラジアン)。</p>
	 * @param float $c <p>水平方向の傾き (ラジアン)。</p>
	 * @param float $d <p>高さの乗数。</p>
	 * @param float $x <p>テキストの水平方向の位置。</p>
	 * @param float $y <p>テキストの垂直方向の位置。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.settextmatrix.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setTextMatrix(float $a, float $b, float $c, float $d, float $x, float $y): bool {}

	/**
	 * そのページの現在のテキストのレンダリングモードを設定する
	 * <p>そのページのテキストのレンダリングモードを定義します。</p>
	 * @param int $mode <p>以下のいずれかの値でなければなりません。</p><ul> <li> <b><code>HaruPage::FILL</code></b> </li> <li> <b><code>HaruPage::STROKE</code></b> </li> <li> <b><code>HaruPage::FILL_THEN_STROKE</code></b> </li> <li> <b><code>HaruPage::INVISIBLE</code></b> </li> <li> <b><code>HaruPage::FILL_CLIPPING</code></b> </li> <li> <b><code>HaruPage::STROKE_CLIPPING</code></b> </li> <li> <b><code>HaruPage::FILL_STROKE_CLIPPING</code></b> </li> <li> <b><code>HaruPage::CLIPPING</code></b> </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.settextrenderingmode.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setTextRenderingMode(int $mode): bool {}

	/**
	 * 現在のテキストライズの値を設定する
	 * <p>現在のテキストライズの値を設定します。</p>
	 * @param float $rise <p>現在のテキストライズに設定する値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.settextrise.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setTextRise(float $rise): bool {}

	/**
	 * ページの幅を設定する
	 * <p>ページの幅を設定します。</p>
	 * @param float $width <p>ページの幅に設定する値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setwidth.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setWidth(float $width): bool {}

	/**
	 * ページの単語間隔を設定する
	 * <p>ページの単語間隔を設定します。</p>
	 * @param float $word_space <p>ページの単語間隔に設定する値。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.setwordspace.php
	 * @since PECL haru >= 0.0.1
	 */
	public function setWordSpace(float $word_space): bool {}

	/**
	 * ページの現在位置にテキストを表示する
	 * <p>ページの現在位置にテキストを表示します。</p>
	 * @param string $text <p>表示させるテキスト。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.showtext.php
	 * @since PECL haru >= 0.0.1
	 */
	public function showText(string $text): bool {}

	/**
	 * 現在位置を次の行の行頭に移動してテキストを表示する
	 * <p>現在位置を次の行の行頭に移動してテキストを表示します。</p>
	 * @param string $text <p>表示させるテキスト。</p>
	 * @param float $word_space <p>単語の間隔。</p>
	 * @param float $char_space <p>文字の間隔。</p>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.showtextnextline.php
	 * @since PECL haru >= 0.0.1
	 */
	public function showTextNextLine(string $text, float $word_space = 0, float $char_space = 0): bool {}

	/**
	 * Paint current path
	 * <p>Paints the current path.</p>
	 * @param bool $close_path <p>Closes the current path if set to <b><code>TRUE</code></b>.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success.</p>
	 * @link http://php.net/manual/ja/harupage.stroke.php
	 * @since PECL haru >= 0.0.1
	 */
	public function stroke(bool $close_path = FALSE): bool {}

	/**
	 * テキストを指定した位置に表示する
	 * <p>テキストを指定した位置に表示します。</p>
	 * @param float $x
	 * @param float $y
	 * @param string $text
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.textout.php
	 * @since PECL haru >= 0.0.1
	 */
	public function textOut(float $x, float $y, string $text): bool {}

	/**
	 * 指定した領域内にテキストを表示する
	 * <p>指定した領域内にテキストを表示します。</p>
	 * @param float $left <p>テキストの範囲の左端。</p>
	 * @param float $top <p>テキストの範囲の上端。</p>
	 * @param float $right <p>テキストの範囲の右端。</p>
	 * @param float $bottom <p>テキストの範囲の下端。</p>
	 * @param string $text <p>表示させたいテキスト。</p>
	 * @param int $align <p>テキストの配置。次のいずれかの値でなければなりません。</p><ul> <li> <b><code>HaruPage::TALIGN_LEFT</code></b> </li> <li> <b><code>HaruPage::TALIGN_RIGHT</code></b> </li> <li> <b><code>HaruPage::TALIGN_CENTER</code></b> </li> <li> <b><code>HaruPage::TALIGN_JUSTIFY</code></b> </li> </ul>
	 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を返します。</p>
	 * @link http://php.net/manual/ja/harupage.textrect.php
	 * @since PECL haru >= 0.0.1
	 */
	public function textRect(float $left, float $top, float $right, float $bottom, string $text, int $align = HaruPage::TALIGN_LEFT): bool {}
}

