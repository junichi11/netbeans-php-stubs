<?php



/**
 * 現在インストールされているGDライブラリに関する情報を取得する
 * <p>インストールされている GD ライブラリのバージョンとスペックに関する情報を取得します。</p>
 * @return array <p>連想配列を返します。</p> <b><b>gd_info()</b> が返す配列の要素</b>   属性 意味     GD Version  <code>string</code>。インストールされている <i>libgd</i>のバージョン   FreeType Support  <code>boolean</code> value. <b><code>TRUE</code></b> の場合FreeTypeサポートはインストールされている   FreeType Linkage  <code>string</code>値。FreeTypeのリンク方法の情報。 'with freetype', 'with TTF library', 'with unknown library'など。 <i>FreeType Support</i>が<b><code>TRUE</code></b>にセットされている場合にのみ この要素が定義されます。    T1Lib Support  <code>boolean</code>値。 <i>T1Lib</i>サポートが含まれている場合に<b><code>TRUE</code></b>    GIF Read Support  <code>boolean</code>値。 <i>GIF</i>画像の<i>読み込み</i> がサポートされている場合に<b><code>TRUE</code></b>    GIF Create Support  <code>boolean</code>値。 <i>GIF</i>画像の<i>生成</i> がサポートされている場合に<b><code>TRUE</code></b>    JPEG Support  <code>boolean</code>値。 <i>JPEG</i>サポートが含まれている場合に<b><code>TRUE</code></b>    PNG Support  <code>boolean</code>値。 <i>PNG</i>サポートが含まれている場合に<b><code>TRUE</code></b>    WBMP Support  <code>boolean</code>値。 <i>WBMP</i>サポートが含まれている場合に<b><code>TRUE</code></b>    XBM Support  <code>boolean</code>値。 <i>XBM</i>サポートが含まれている場合に<b><code>TRUE</code></b>    WebP Support  <code>boolean</code> 値。 <i>WebP</i> サポートが含まれている場合に<b><code>TRUE</code></b>     <p><b>注意</b>:</p> <p>PHP 5.3.0 より前のバージョンでは、<i>JPEG Support</i> 属性は <i>JPG Support</i> という名前でした。</p>
 * @link http://php.net/manual/ja/function.gd-info.php
 * @see imagepng(), imagejpeg(), imagegif(), imagewbmp(), imagewebp(), imagetypes()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function gd_info(): array {}

/**
 * 画像の大きさを取得する
 * <p><b>getimagesize()</b> 関数は、サポートする任意の形式の画像ファイルの大きさを決定し、 ファイルの型と<i>高さ/幅</i>を表す文字列を返します。これらは HTML の <code>IMG</code> タグや HTTP の content type として使用できます。</p><p>この関数は、<code>filename</code> が適切な画像ファイルであることを想定しています。 画像以外のファイルを渡してもそれを画像だと判断してしまい、関数の処理は成功するでしょう。 しかし、配列には意味のない値が含まれる場合があります。</p><p><b>getimagesize()</b> を使って、そのファイルが画像であるかどうかを確かめることはできません。 そのようなことをしたい場合は、そのために用意されたソリューション (Fileinfo 拡張モジュールなど) を使いましょう。</p><p><b>getimagesize()</b> は、 <code>imageinfo</code> パラメータで追加情報を返します。</p><p><b>注意</b>:  JPC と JP2 は異なるビット深度のコンポーネントを含むことが可能なことに 注意してください。この場合 "bits" に対する値は、 最も大きい深度になります。また、JP2 ファイルは <i>複数の JPEG 2000 コードストリーム</i>を含む場合があります。この場合、 <b>getimagesize()</b> はファイルのルートから 最初に遭遇するコードストリームに対する値を返します。 </p><p><b>注意</b>:  アイコンに関する情報は、ビットレートが最大のアイコンから取得します。 </p><p><b>注意</b>:  GIF images consist of one or more frames, where each frame may only occupy part of the image. The size of the image which is reported by <b>getimagesize()</b> is the overall size (read from the logical screen descriptor). </p>
 * @param string $filename <p>このパラメータは、情報を取得したいファイルの名前を指定します。 ローカルファイルへの参照、あるいは (設定で許可されているなら) ストリームを用いたリモートファイルへの参照を指定できます。</p>
 * @param array $imageinfo <p>オプションのパラメータで、 画像ファイルから何らかの拡張情報を引き出すことが可能です。 現在、この変数にはJPGファイルについて 異なった複数のAPPマーカーが連想配列として返されます。いくつかのプログラムは、 これらのAPPマーカーを画像の中の埋込テキストの情報として使用します。 最も一般的な例は、マーカーAPPl3に埋込IPTC » http://www.iptc.org/情報が返されることです。 バイナリ形式のマーカーAPP13を読むことができるよう処理するために <code>iptcparse()</code> 関数を使用することができます。</p>  <p><b>注意</b>:</p> <p><code>imageinfo</code> は、 JFIF ファイルのみをサポートします。</p>
 * @return array <p>最大 7 つの要素からなる配列を返します。画像の形式によっては、 <i>channels</i> や <i>bits</i> は含まれないことがあります。</p><p>0 番目および 1 番目の要素は、それぞれ画像の幅と高さを表します。</p> <p><b>注意</b>:</p> <p>形式によっては、画像を含まないものや複数の画像を含むものがあります。 これらの場合、<b>getimagesize()</b> は画像のサイズを適切に決定することができません。このような場合、 <b>getimagesize()</b> が返す幅と高さはいずれもゼロとなります。</p> <p>2 番目の要素は IMAGETYPE_XXX constants 定数のひとつで、 画像の形式を表します。</p><p>3 番目の要素は IMG タグで直接利用できる文字列 <i>height="yyy" width="xxx"</i> です。</p><p><i>mime</i>は画像のMIMEタイプに一致します。この情報は 画像とともに正しい HTTP <i>Content-type</i> ヘッダを転送するために使用できます。</p> <p><b>例1 <b>getimagesize()</b> および MIME 型</b></p>  <code> &lt;&#63;php<br>$size = getimagesize($filename);<br>$fp = fopen($filename, "rb");<br>if ($size &amp;&amp; $fp) {<br>    header("Content-type: {$size['mime']}");<br>    fpassthru($fp);<br>    exit;<br>} else {<br>    // エラー<br>}<br>&#63;&gt;  </code>  <p><i>channels</i> は RGB 画像の場合に 3、CMYK 画像の場合に 4 です。</p><p><i>bits</i> は個々の色のビット数です。</p><p>画像の形式によっては、<i>channels</i> や <i>bits</i> の値の存在は混乱の元です。 たとえば、GIF は常に 1 ピクセルあたり 3 チャンネルを使用しますが、グローバルカラーテーブルを使ったアニメーション GIF のピクセルあたりのビット数を計算することはできません。</p><p>失敗した場合には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.getimagesize.php
 * @see image_type_to_mime_type(), exif_imagetype(), exif_read_data(), exif_thumbnail(), imagesx(), imagesy()
 * @since PHP 4, PHP 5, PHP 7
 */
function getimagesize(string $filename, array &$imageinfo = NULL): array {}

/**
 * 画像の大きさを文字列から取得する
 * <p><code>getimagesize()</code> と似ていますが、 <b>getimagesizefromstring()</b> の最初のパラメータはファイル名ではなく文字列となります。</p><p>この関数の挙動の詳細については <code>getimagesize()</code> のドキュメントを参照ください。</p>
 * @param string $imagedata <p>文字列で表した画像データ。</p>
 * @param array $imageinfo <p><code>getimagesize()</code> を参照ください。</p>
 * @return array <p><code>getimagesize()</code> を参照ください。</p>
 * @link http://php.net/manual/ja/function.getimagesizefromstring.php
 * @see getimagesize()
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function getimagesizefromstring(string $imagedata, array &$imageinfo = NULL): array {}

/**
 * 画像をブラウザあるいはファイルに出力する
 * <p><b>image2wbmp()</b> は、イメージ <code>im</code> から filename に WBMP ファイルを作成します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param string $filename <p>保存されるファイルへのパス。指定しなかった場合は、生の画像ストリームが直接出力されます。</p>
 * @param int $threshold <p>閾値。0 から 255 までの値 (両端を含みます)。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.image2wbmp.php
 * @see imagewbmp()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function image2wbmp($image, string $filename = NULL, int $threshold = NULL): bool {}

/**
 * 画像形式からファイルの拡張子を取得する
 * <p>指定した定数 <i>IMAGETYPE_XXX</i> に対応する拡張子を返します。</p>
 * @param int $imagetype <p><i>IMAGETYPE_XXX</i> 定数のいずれかひとつ。</p>
 * @param bool $include_dot <p>拡張子の前にドットをつけるかどうか。デフォルトは <b><code>TRUE</code></b>。</p>
 * @return string <p>指定した型に対応する拡張子を文字列で返します。</p>
 * @link http://php.net/manual/ja/function.image-type-to-extension.php
 * @since PHP 5 >= 5.2.0, PHP 7
 */
function image_type_to_extension(int $imagetype, bool $include_dot = TRUE): string {}

/**
 * getimagesize, exif_read_data, exif_thumbnail, exif_imagetypeから返される 画像形式のMIMEタイプを取得する
 * <p><b>image_type_to_mime_type()</b> は IMAGETYPE 定数で指定される Mime-Type を取得します。</p>
 * @param int $imagetype <p><i>IMAGETYPE_XXX</i> 定数のいずれか。</p>
 * @return string <p>戻り値は次のとおりです。</p> <b>戻り値の定数</b>   <code>imagetype</code> 戻り値     <b><code>IMAGETYPE_GIF</code></b> <i>image/gif</i>   <b><code>IMAGETYPE_JPEG</code></b> <i>image/jpeg</i>   <b><code>IMAGETYPE_PNG</code></b> <i>image/png</i>   <b><code>IMAGETYPE_SWF</code></b> <i>application/x-shockwave-flash</i>   <b><code>IMAGETYPE_PSD</code></b> <i>image/psd</i>   <b><code>IMAGETYPE_BMP</code></b> <i>image/bmp</i>    <b><code>IMAGETYPE_TIFF_II</code></b> (intel byte order) <i>image/tiff</i>    <b><code>IMAGETYPE_TIFF_MM</code></b> (motorola byte order)  <i>image/tiff</i>   <b><code>IMAGETYPE_JPC</code></b> <i>application/octet-stream</i>   <b><code>IMAGETYPE_JP2</code></b> <i>image/jp2</i>   <b><code>IMAGETYPE_JPX</code></b> <i>application/octet-stream</i>   <b><code>IMAGETYPE_JB2</code></b> <i>application/octet-stream</i>   <b><code>IMAGETYPE_SWC</code></b> <i>application/x-shockwave-flash</i>   <b><code>IMAGETYPE_IFF</code></b> <i>image/iff</i>   <b><code>IMAGETYPE_WBMP</code></b> <i>image/vnd.wap.wbmp</i>   <b><code>IMAGETYPE_XBM</code></b> <i>image/xbm</i>   <b><code>IMAGETYPE_ICO</code></b> <i>image/vnd.microsoft.icon</i>   <b><code>IMAGETYPE_WEBP</code></b> <i>image/webp</i>
 * @link http://php.net/manual/ja/function.image-type-to-mime-type.php
 * @see getimagesize(), exif_imagetype(), exif_read_data(), exif_thumbnail()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function image_type_to_mime_type(int $imagetype): string {}

/**
 * 元の画像を、オプションのクリッピング領域を使ってアフィン変換した画像を返す
 * <p></p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param array $affine <p>0 から 5 までのキーを持つ配列。</p>
 * @param array $clip <p>キー "x"、"y"、"width" そして "height" を持つ配列。</p>
 * @return resource <p>アフィン変換した画像リソースを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imageaffine.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function imageaffine($image, array $affine, array $clip = NULL) {}

/**
 * 二つのアフィン変換行列を連結する
 * <p>二つのアフィン変換行列を連結したものを返します。 複数の行列を、同じ画像に対して一度に適用したい場合に便利です。</p>
 * @param array $m1 <p>アフィン変換行列 (<i>0</i> から <i>5</i> までのキーに float 値を持つ配列)。</p>
 * @param array $m2 <p>アフィン変換行列 (<i>0</i> から <i>5</i> までのキーに float 値を持つ配列)。</p>
 * @return array <p>アフィン変換行列 (<i>0</i> から <i>5</i> までのキーに float 値を持つ配列) を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imageaffinematrixconcat.php
 * @see imageaffine(), imageaffinematrixget()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function imageaffinematrixconcat(array $m1, array $m2): array {}

/**
 * アフィン変換行列を取得する
 * <p>アフィン変換行列を返します。</p>
 * @param int $type <p>定数 <b><code>IMG_AFFINE_&#42;</code></b> のいずれか。</p>
 * @param mixed $options <p><code>type</code> が <b><code>IMG_AFFINE_TRANSLATE</code></b> あるいは <b><code>IMG_AFFINE_SCALE</code></b> の場合は、 <code>options</code> は <i>x</i> と <i>y</i> をキーとする配列でなければいけません。 それぞれの値は <code>float</code> にする必要があります。</p> <p><code>type</code> が <b><code>IMG_AFFINE_ROTATE</code></b>、 <b><code>IMG_AFFINE_SHEAR_HORIZONTAL</code></b>、 <b><code>IMG_AFFINE_SHEAR_VERTICAL</code></b> のいずれかである場合は、 <code>options</code> はアングルを指定する <code>float</code> 値でなければいけません。</p>
 * @return array <p><i>0</i> から <i>5</i> までのキーに float 値を持つ配列を返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imageaffinematrixget.php
 * @see imageaffine(), imageaffinematrixconcat()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function imageaffinematrixget(int $type, $options = NULL): array {}

/**
 * イメージのブレンドモードを設定する
 * <p><b>imagealphablending()</b> によりTrueColorイメージに 二つの異なる描画モードを使用可能となります。ブレンドモードでは、 全ての描画関数に指定される色のalphaチャネル要素として使用され、 例えば<code>imagesetpixel()</code>では背景色の透過割合を定 義します。結果として、gd は描画色に関してその点に存在する色を自動 的にブレンドし、イメージに結果を保存します。結果のピクセルは、透 明になります。ブレンドモードでない場合、描画色は形式的にそのアル ファチャネル情報にコピーされ、出力ピクセルを置換します。ブレンド モードは、パレットイメージを描画している際には使用できません。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param bool $blendmode <p>ブレンドモードを有効にするかどうか。True Color 画像の場合のデフォルトは <b><code>TRUE</code></b>、それ以外の場合のデフォルトは <b><code>FALSE</code></b> です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagealphablending.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagealphablending($image, bool $blendmode): bool {}

/**
 * アンチエイリアス機能を使用すべきかどうかを判断する
 * <p>直線や多角形を高速に描画するためのアンチエイリアス機能を有効にします。 アルファコンポーネントはサポートしていません。ダイレクトブレンド操作を 使用します。truecolor 画像に対してのみ動作します。</p><p>thickness および styled はサポートしていません。</p><p>背景色が透明な場合にアンチエイリアス機能を使用すると、予期せぬ結果に 終わることがあります。ブレンドメソッドでは、背景色が使用されます。 アルファコンポーネントをサポートしていないため、アルファコンポーネントに 基づいたアンチエイリアス手法は使用できません。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param bool $enabled <p>アンチエイリアスを有効にするかどうか。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imageantialias.php
 * @see imagecreatetruecolor()
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 */
function imageantialias($image, bool $enabled): bool {}

/**
 * 部分楕円を描画する
 * <p><b>imagearc()</b> は、指定した座標を中心とする円弧を描画します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $cx <p>中心の x 座標。</p>
 * @param int $cy <p>中心の y 座標。</p>
 * @param int $width <p>円弧の幅。</p>
 * @param int $height <p>円弧の高さ。</p>
 * @param int $start <p>始点の角度。</p>
 * @param int $end <p>終点の角度。 0° は 3 時の位置で、そこから時計回りの方向に円弧が描かれます。</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagearc.php
 * @see imagefilledarc(), imageellipse(), imagefilledellipse()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagearc($image, int $cx, int $cy, int $width, int $height, int $start, int $end, int $color): bool {}

/**
 * Output a BMP image to browser or file
 * <p>Outputs or saves a BMP version of the given <code>image</code>.</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param mixed $to <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b><code>NULL</code></b> を設定したりした場合は、画像ストリームを直接出力します。</p>  <p><b>注意</b>:</p> <p><b><code>NULL</code></b> is invalid if the <code>compressed</code> arguments is not used.</p>
 * @param bool $compressed <p>Whether the BMP should be compressed with run-length encoding (RLE), or not.</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagebmp.php
 * @since PHP 7 >= 7.2.0
 */
function imagebmp($image, $to = NULL, bool $compressed = TRUE): bool {}

/**
 * 水平に文字を描画する
 * <p><b>imagechar()</b> は、画像 <code>im</code> 上の座標 <code>x</code>,<code>y</code>(左上が 0, 0) に <code>color</code> 色で <code>c</code> の最初の文字を描画します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $font <p>latin2 エンコーディングの組み込みのフォントの場合は 1, 2, 3, 4, 5 のいずれか (数字が大きなほうが、より大きいフォントに対応します)、 あるいは <code>imageloadfont()</code> で登録したフォントの識別子のいずれか。</p>
 * @param int $x <p>始点の x 座標。</p>
 * @param int $y <p>始点の y 座標。</p>
 * @param string $c <p>描画する文字。</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagechar.php
 * @see imagecharup(), imageloadfont()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagechar($image, int $font, int $x, int $y, string $c, int $color): bool {}

/**
 * 垂直に文字を描画する
 * <p>指定した画像 <code>image</code> の指定した位置に、 文字 <code>c</code> を垂直に描画します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $font <p>latin2 エンコーディングの組み込みのフォントの場合は 1, 2, 3, 4, 5 のいずれか (数字が大きなほうが、より大きいフォントに対応します)、 あるいは <code>imageloadfont()</code> で登録したフォントの識別子のいずれか。</p>
 * @param int $x <p>始点の x 座標。</p>
 * @param int $y <p>始点の y 座標。</p>
 * @param string $c <p>描画する文字。</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecharup.php
 * @see imagechar(), imageloadfont()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecharup($image, int $font, int $x, int $y, string $c, int $color): bool {}

/**
 * 画像で使用する色を作成する
 * <p>指定した RGB を配色とする色の ID を返します。</p><p><b>imagecolorallocate()</b> は <code>image</code> で表される画像上で使用する各々の色を作成する際にコールする必要があります。</p><p><b>注意</b>:</p><p><b>imagecolorallocate()</b> の最初のコールで パレットをもとにした画像 (<code>imagecreate()</code> を使用して作成した画像) で背景色がセットされます。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @return int <p>色の ID、あるいは作成に失敗したい場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.imagecolorallocate.php
 * @see imagecolorallocatealpha(), imagecolordeallocate()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecolorallocate($image, int $red, int $green, int $blue): int {}

/**
 * 画像で使用する色を透過度を指定して作成する
 * <p><b>imagecolorallocatealpha()</b> は、 透明度を指定するパラメータ <code>alpha</code> が追加されている以外は <code>imagecolorallocate()</code> と等価です。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @param int $alpha <p><i>0</i> から <i>127</i> までの値。 <i>0</i> は完全に不透明な状態。 <i>127</i> は完全に透明な状態を表します。</p>
 * @return int <p>色 ID、あるいは作成に失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.imagecolorallocatealpha.php
 * @see imagecolorallocate(), imagecolordeallocate()
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 */
function imagecolorallocatealpha($image, int $red, int $green, int $blue, int $alpha): int {}

/**
 * ピクセルの色のインデックスを取得する
 * <p><code>image</code>で指定された画像上の 特定位置にあるピクセルの色のインデックスを返します。</p><p>画像が True カラーイメージである場合、この関数はそのピクセルの RGB 値を整数で返します。 赤、緑、青のそれぞれの値にアクセスするにはビットシフトとマスキングを利用してください:</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $x <p>点の x 座標。</p>
 * @param int $y <p>点の y 座標。</p>
 * @return int <p>色のインデックスを返します。失敗した場合に <b><code>FALSE</code></b> を返します</p> <b>警告</b><p>この関数は論理値 <b><code>FALSE</code></b> を返す可能性がありますが、<b><code>FALSE</code></b> として評価される値を返す可能性もあります。 詳細については 論理値の セクションを参照してください。この関数の返り値を調べるには ===演算子 を 使用してください。</p>
 * @link http://php.net/manual/ja/function.imagecolorat.php
 * @see imagecolorset(), imagecolorsforindex(), imagesetpixel()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecolorat($image, int $x, int $y): int {}

/**
 * 指定した色に最も近い色のインデックスを取得する
 * <p>指定した RGB 値に「近い」 画像パレット中の色のインデックスを返します。</p><p>指定した色とパレット上の各色の「距離」は、 RGB 値が三次元空間上の点の座標を表すと考えて計算します。</p><p>画像をファイルから作成した場合は、画像内で使われている色だけを解決します。パレットにだけ存在する色は解決されません。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @return int <p>画像パレット内で、指定した色にいちばん近い色のインデックスを返します。</p>
 * @link http://php.net/manual/ja/function.imagecolorclosest.php
 * @see imagecolorexact(), imagecolorclosestalpha(), imagecolorclosesthwb()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecolorclosest($image, int $red, int $green, int $blue): int {}

/**
 * 指定した色+アルファ値に最も近い色のインデックスを取得する
 * <p>指定した RGB 値と <code>alpha</code> レベルに 「近い」画像パレット中の色のインデックスを返します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @param int $alpha <p><i>0</i> から <i>127</i> までの値。 <i>0</i> は完全に不透明な状態。 <i>127</i> は完全に透明な状態を表します。</p>
 * @return int <p>画像パレット内で、指定した色にいちばん近い色のインデックスを返します。</p>
 * @link http://php.net/manual/ja/function.imagecolorclosestalpha.php
 * @see imagecolorexactalpha(), imagecolorclosest(), imagecolorclosesthwb()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagecolorclosestalpha($image, int $red, int $green, int $blue, int $alpha): int {}

/**
 * 色合い、白、黒を有する色のインデックスを得る
 * <p>指定した色に最も近い色合い、白、黒を有する色のインデックスを取得します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @return int <p>指定した色に最も近い色合い、白、黒を有する色のインデックスを返します。</p>
 * @link http://php.net/manual/ja/function.imagecolorclosesthwb.php
 * @see imagecolorclosest()
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function imagecolorclosesthwb($image, int $red, int $green, int $blue): int {}

/**
 * イメージの色リソースを開放する
 * <p><code>imagecolorallocate()</code> または <code>imagecolorallocatealpha()</code> で確保された色を開放します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $color <p>色 ID。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecolordeallocate.php
 * @see imagecolorallocate(), imagecolorallocatealpha()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecolordeallocate($image, int $color): bool {}

/**
 * 指定した色のインデックスを取得する
 * <p>画像パレット中の特定の色のインデックスを返します。</p><p>画像をファイルから作成した場合は、画像内で使われている色だけを解決します。パレットにだけ存在する色は解決されません。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @return int <p>指定した色の、パレット内でのインデックスを返します。 画像パレット中に色が存在しない場合は -1 を返します。</p>
 * @link http://php.net/manual/ja/function.imagecolorexact.php
 * @see imagecolorclosest()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecolorexact($image, int $red, int $green, int $blue): int {}

/**
 * 指定した色+アルファ値のインデックスを取得する
 * <p>イメージのパレットで指定した色+アルファ値のインデックスを返します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @param int $alpha <p><i>0</i> から <i>127</i> までの値。 <i>0</i> は完全に不透明な状態。 <i>127</i> は完全に透明な状態を表します。</p>
 * @return int <p>イメージのパレットにおける、指定した色+アルファ値のインデックスを返します。 指定した色がイメージのパレットに存在しない場合、-1が返されます。</p>
 * @link http://php.net/manual/ja/function.imagecolorexactalpha.php
 * @see imagecolorclosestalpha()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagecolorexactalpha($image, int $red, int $green, int $blue, int $alpha): int {}

/**
 * パレットイメージの色を True カラーイメージに近づける
 * <p>パレットイメージの色を True カラーイメージに近づけます。</p>
 * @param resource $image1 <p>truecolor イメージリンクリソース。</p>
 * @param resource $image2 <p>パレットイメージリンクリソース。 <code>image1</code> と同じ大きさの画像をさします。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecolormatch.php
 * @see imagecreatetruecolor()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function imagecolormatch($image1, $image2): bool {}

/**
 * 指定した色または出来るだけ近い色のインデックスを得る
 * <p>この関数は、指定した色に関するインデックスを常に返します。 その色そのものまたは出来るだけ近い色へのインデックスが返されます。</p><p>画像をファイルから作成した場合は、画像内で使われている色だけを解決します。パレットにだけ存在する色は解決されません。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @return int <p>色インデックスを返します。</p>
 * @link http://php.net/manual/ja/function.imagecolorresolve.php
 * @see imagecolorclosest()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecolorresolve($image, int $red, int $green, int $blue): int {}

/**
 * 指定した色+アルファ値または最も近い色のインデックスを取得する
 * <p>この関数は、指定した色のインデックスを必ず返します。そうでない場合、 正確な色または最も近い別の色のどちらかを返します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @param int $alpha <p><i>0</i> から <i>127</i> までの値。 <i>0</i> は完全に不透明な状態。 <i>127</i> は完全に透明な状態を表します。</p>
 * @return int <p>色インデックスを返します。</p>
 * @link http://php.net/manual/ja/function.imagecolorresolvealpha.php
 * @see imagecolorclosestalpha()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagecolorresolvealpha($image, int $red, int $green, int $blue, int $alpha): int {}

/**
 * 指定したパレットインデックスの色を設定する
 * <p>この関数は、パレット上で指定したインデックス index を 指定した色 color に設定します。 実際にぬりつぶしを実行するオーバーヘッドなしに パレット上の色を使用する画像をぬりつぶしたような効果を得る ことができ、便利です。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $index <p>パレットのインデックス。</p>
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @param int $alpha <p>アルファコンポーネントの値。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.imagecolorset.php
 * @see imagecolorat()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecolorset($image, int $index, int $red, int $green, int $blue, int $alpha = 0): void {}

/**
 * カラーインデックスからカラーを取得する
 * <p>指定したインデックスに対する色を取得します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $index <p>色インデックス。</p>
 * @return array <p>指定したカラーインデックス index に対して適当な値からなる red、green、blue をキーとする連想配列を返します。</p>
 * @link http://php.net/manual/ja/function.imagecolorsforindex.php
 * @see imagecolorat(), imagecolorexact()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecolorsforindex($image, int $index): array {}

/**
 * 画像パレットの色数を検出する
 * <p>指定した画像パレットの色数を返します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @return int <p>指定した画像パレットの色数を返します。 truecolor 画像の場合は 0 を返します。</p>
 * @link http://php.net/manual/ja/function.imagecolorstotal.php
 * @see imagecolorat(), imagecolorsforindex(), imageistruecolor()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecolorstotal($image): int {}

/**
 * 透明色を定義する
 * <p>指定した画像 <code>image</code> 上の透明色を設定します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return int <p>新しい透明色の ID (指定しなかった場合は現在設定されている ID) を返します。<code>color</code> を指定せず、 さらに現在の透明色も設定されていない場合は -1 を返します。</p>
 * @link http://php.net/manual/ja/function.imagecolortransparent.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecolortransparent($image, int $color = NULL): int {}

/**
 * div および offset の係数を使用し、3x3 の畳み込み配列を適用する
 * <p>画像に畳み込み配列を適用します。 指定した係数とオフセットを使用します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param array $matrix <p>3x3 の配列。三つの float 値からなる三つの配列の配列。</p>
 * @param float $div <p>畳み込み結果の除数。正規化で使用します。</p>
 * @param float $offset <p>色オフセット。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imageconvolution.php
 * @see imagefilter()
 * @since PHP 5 >= 5.1.0, PHP 7
 */
function imageconvolution($image, array $matrix, float $div, float $offset): bool {}

/**
 * 画像の一部をコピーする
 * <p><code>src_im</code>の一部、つまり、x,y座標 <code>src_x</code>, <code>src_y</code> を基準として幅<code>src_w</code>、高さ <code>src_h</code>の領域を<code>dst_im</code> にコピーします。指定された領域は、x,y座標 <code>dst_x</code>,<code>dst_y</code>にコピー されます。</p>
 * @param resource $dst_im <p>コピー先の画像リンクリソース。</p>
 * @param resource $src_im <p>コピー元の画像リンクリソース。</p>
 * @param int $dst_x <p>コピー先の x 座標。</p>
 * @param int $dst_y <p>コピー先の y 座標。</p>
 * @param int $src_x <p>コピー元の x 座標。</p>
 * @param int $src_y <p>コピー元の y 座標。</p>
 * @param int $src_w <p>コピー元の幅。</p>
 * @param int $src_h <p>コピー元の高さ。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecopy.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecopy($dst_im, $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h): bool {}

/**
 * イメージの一部をコピー、マージする
 * <p><code>src_im</code>の<code>src_x</code>, <code>src_y </code> で始まる幅 <code>src_w</code>、高さ<code>src_h</code>の領域を x,y座標で指定した <code>dst_im</code>にコピーします。 定義された部分は、x,y座標、<code>dst_x</code>、 <code>dst_y</code>にコピーされます。</p>
 * @param resource $dst_im <p>コピー先の画像リンクリソース。</p>
 * @param resource $src_im <p>コピー元の画像リンクリソース。</p>
 * @param int $dst_x <p>コピー先の x 座標。</p>
 * @param int $dst_y <p>コピー先の y 座標。</p>
 * @param int $src_x <p>コピー元の x 座標。</p>
 * @param int $src_y <p>コピー元の y 座標。</p>
 * @param int $src_w <p>コピー元の幅。</p>
 * @param int $src_h <p>コピー元の高さ。</p>
 * @param int $pct <p>二つの画像は、 0から100の範囲で指定した <code>pct</code>に基づきマージされます。 <code>pct</code> = 0 の時は、何も行われません。 100の場合、この関数の動作は、パレットイメージに対する <code>imagecopy()</code> と同じとなります (アルファコンポーネントを無視する点だけが違います)。 一方 true color 画像については、この関数はアルファ透過度を実装しています。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecopymerge.php
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function imagecopymerge($dst_im, $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h, int $pct): bool {}

/**
 * グレースケールでイメージの一部をコピー、マージする
 * <p><b>imagecopymergegray()</b> は、 <code>src_im</code> の X,Y座標 <code>src_x</code>, <code>src_y </code> から 始まる幅<code>src_w</code>、高さ <code>src_h</code> の領域を <code>dst_im</code>にコピーします。 定義された部分は、x、y座標<code>dst_x</code>、 <code>dst_y</code>にコピーされます。</p><p>この関数は <code>imagecopymerge()</code> と同じですが、マー ジをする際に、コピー前にコピー先のピクセルをグレースケールに変換 することにより、コピー先のピクセルをコピー元の色相を維持するとこ ろが異なります。</p>
 * @param resource $dst_im <p>コピー先の画像リンクリソース。</p>
 * @param resource $src_im <p>コピー元の画像リンクリソース。</p>
 * @param int $dst_x <p>コピー先の x 座標。</p>
 * @param int $dst_y <p>コピー先の y 座標。</p>
 * @param int $src_x <p>コピー元の x 座標。</p>
 * @param int $src_y <p>コピー元の y 座標。</p>
 * @param int $src_w <p>コピー元の幅。</p>
 * @param int $src_h <p>コピー元の高さ。</p>
 * @param int $pct <p><code>src_im</code> が <code>pct</code> にしたがってグレースケールに変換されます。 <code>pct</code> が 0 の場合は完全なグレースケール、 100 の場合は何も変わらない状態となります。 <code>pct</code> = 100 の場合、パレット画像に対してはこの関数は <code>imagecopy()</code> と同じ動作となります (アルファコンポーネントを無視する点だけが違います)。 一方 true color 画像については、この関数はアルファ透過度を実装しています。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecopymergegray.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagecopymergegray($dst_im, $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h, int $pct): bool {}

/**
 * 再サンプリングを行いイメージの一部をコピー、伸縮する
 * <p><b>imagecopyresampled()</b> は、イメージの矩形の部分 を別のイメージにコピーします。同時にピクセル値を滑らかに補間を行い、 このため、特にサイズを小さくした場合には鮮明さが維持されます。</p><p>言い換えると、<b>imagecopyresampled()</b> は <code>src_image</code> の座標 (<code>src_x</code>,<code>src_y</code>) にある 幅 <code>src_w</code>、高さ <code>src_h</code> の矩形領域を受け取って、それを <code>dst_image</code> の座標 (<code>dst_x</code>,<code>dst_y</code>) にある幅 <code>dst_w</code>、高さ <code>dst_h</code> の矩形領域に配置します。</p><p>コピー元とコピー先の座標、幅、高さが異なる場合には、 適当なイメージ伸縮が行われます。座標は、左上を基準とします。 この関数は、同じイメージ内の領域にコピーする場合にも使用可能です (<code>dst_image</code> が <code>src_image</code> と同じ場合) が、領域が重なる場合の結果は予測できません。</p>
 * @param resource $dst_image <p>コピー先の画像リンクリソース。</p>
 * @param resource $src_image <p>コピー元の画像リンクリソース。</p>
 * @param int $dst_x <p>コピー先の x 座標。</p>
 * @param int $dst_y <p>コピー先の y 座標。</p>
 * @param int $src_x <p>コピー元の x 座標。</p>
 * @param int $src_y <p>コピー元の y 座標。</p>
 * @param int $dst_w <p>コピー先の幅。</p>
 * @param int $dst_h <p>コピー先の高さ。</p>
 * @param int $src_w <p>コピー元の幅。</p>
 * @param int $src_h <p>コピー元の高さ。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecopyresampled.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagecopyresampled($dst_image, $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_w, int $dst_h, int $src_w, int $src_h): bool {}

/**
 * 画像の一部をコピーしサイズを変更する
 * <p><b>imagecopyresized()</b> は指定した画像の矩形部分を 別の画像へコピーします。<code>dst_image</code> はコピー先の イメージ ID、<code>src_image</code> はコピー元のイメージ ID です。</p><p>言い換えると、<b>imagecopyresized()</b> は <code>src_image</code> の座標 (<code>src_x</code>,<code>src_y</code>) にある 幅 <code>src_w</code>、高さ <code>src_h</code> の矩形領域を受け取って、それを <code>dst_image</code> の座標 (<code>dst_x</code>,<code>dst_y</code>) にある幅 <code>dst_w</code>、高さ <code>dst_h</code> の矩形領域に配置します。</p><p>コピー先とコピー元の座標、幅、高さが異なった場合、画像の一部が 適当に伸縮されます。座標の原点は左上です。(仮に、 <code>dst_image</code> と <code>src_image</code> が 同一であれば)関数は領域のコピーに使うことができますが、領域が 重なったときの結果は予測できません。</p>
 * @param resource $dst_image <p>コピー先の画像リンクリソース。</p>
 * @param resource $src_image <p>コピー元の画像リンクリソース。</p>
 * @param int $dst_x <p>コピー先の x 座標。</p>
 * @param int $dst_y <p>コピー先の y 座標。</p>
 * @param int $src_x <p>コピー元の x 座標。</p>
 * @param int $src_y <p>コピー元の y 座標。</p>
 * @param int $dst_w <p>コピー先の幅。</p>
 * @param int $dst_h <p>コピー先の高さ。</p>
 * @param int $src_w <p>コピー元の幅。</p>
 * @param int $src_h <p>コピー元の高さ。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecopyresized.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecopyresized($dst_image, $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_w, int $dst_h, int $src_w, int $src_h): bool {}

/**
 * パレットを使用する新規画像を作成する
 * <p><b>imagecreate()</b> は、 指定した大きさの空の画像を表す画像 ID を返します。</p><p>一般に、<b>imagecreate()</b> よりは <code>imagecreatetruecolor()</code> を使うことを推奨します。 より高品質な画像処理ができるからです。パレット形式の画像を出力したい場合は、 <code>imagepng()</code> や <code>imagegif()</code> で画像を保存する直前に <code>imagetruecolortopalette()</code> を呼ばなければいけません。</p>
 * @param int $width <p>画像の幅。</p>
 * @param int $height <p>画像の高さ。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreate.php
 * @see imagedestroy(), imagecreatetruecolor()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecreate(int $width, int $height) {}

/**
 * 新しい画像をファイルあるいは URL から作成する
 * <p><b>imagecreatefrombmp()</b> は、指定したファイル名から 得られたイメージを表すイメージ ID を返します。</p><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param string $filename <p>BMP 画像へのパス。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatefrombmp.php
 * @since PHP 7 >= 7.2.0
 */
function imagecreatefrombmp(string $filename) {}

/**
 * GD ファイルまたは URL から新規イメージを生成する
 * <p>GD ファイルまたは URL から新規イメージを生成します。</p><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param string $filename
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatefromgd.php
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 */
function imagecreatefromgd(string $filename) {}

/**
 * GD2 ファイルまたは URL から新規イメージを生成する
 * <p>GD2 ファイルまたは URL から新規イメージを生成します。</p><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param string $filename <p>GD2 画像へのパス。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatefromgd2.php
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 */
function imagecreatefromgd2(string $filename) {}

/**
 * GD2 ファイルまたは URL の指定した部分から新規イメージを生成する
 * <p>GD2 ファイルまたは URL の指定した部分から新規イメージを生成します。</p><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param string $filename <p>GD2 画像へのパス。</p>
 * @param int $srcX <p>作成元の x 座標。</p>
 * @param int $srcY <p>作成元の y 座標。</p>
 * @param int $width <p>コピー元の幅。</p>
 * @param int $height <p>コピー元の高さ。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatefromgd2part.php
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 */
function imagecreatefromgd2part(string $filename, int $srcX, int $srcY, int $width, int $height) {}

/**
 * 新しい画像をファイルあるいは URL から作成する
 * <p><b>imagecreatefromgif()</b> は、 指定したファイル名の画像を表す画像 ID を返します。</p><p>GIF ファイルをメモリに取り込む際、最初のフレームだけが 画像リソースポインタで返されます。<code>getimagesize()</code> で報告される画像サイズは必ずしも必要ではありません。</p><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param string $filename <p>GIF 画像へのパス。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatefromgif.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecreatefromgif(string $filename) {}

/**
 * 新しい画像をファイルあるいは URL から作成する
 * <p><b>imagecreatefromjpeg()</b> は引数 filename から得られる画像を表すイメージIDを返します。</p><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param string $filename <p>JPEG 画像へのパス。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatefromjpeg.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecreatefromjpeg(string $filename) {}

/**
 * 新しい画像をファイルあるいは URL から作成する
 * <p><b>imagecreatefrompng()</b>は引数 filename から得られる画像を表す画像 ID を返します。</p><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param string $filename <p>PNG 画像へのパス。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatefrompng.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imagecreatefrompng(string $filename) {}

/**
 * 文字列の中のイメージストリームから新規イメージを作成する
 * <p><b>imagecreatefromstring()</b> は、指定した <code>image</code> から 得られたイメージを表すイメージ ID を返します。もし、PHP が JPEG, PNG, GIF, BMP, WBMP, GD2 をサポートするようビルドされている場合、 イメージの種類は自動的に判別されます。</p>
 * @param string $image <p>画像データを含む文字列。</p>
 * @return resource <p>成功時にはイメージリソースが返されます。 イメージの種類がサポートされていない、データのフォーマットが識別できない、 イメージが壊れておりリロードできないなどの場合は <b><code>FALSE</code></b> が返されます。</p>
 * @link http://php.net/manual/ja/function.imagecreatefromstring.php
 * @see imagecreatefromjpeg(), imagecreatefrompng(), imagecreatefromgif(), imagecreatetruecolor()
 * @since PHP 4 >= 4.0.4, PHP 5, PHP 7
 */
function imagecreatefromstring(string $image) {}

/**
 * 新しい画像をファイルあるいは URL から作成する
 * <p><b>imagecreatefromwbmp()</b> は、指定したファイル名から 得られたイメージを表すイメージ ID を返します。</p><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param string $filename <p>WBMP 画像へのパス。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatefromwbmp.php
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function imagecreatefromwbmp(string $filename) {}

/**
 * 新しい画像をファイルあるいは URL から作成する
 * <p><b>imagecreatefromwebp()</b> は、指定したファイル名から得られる画像を表す ID を返します。</p><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param string $filename <p>WebP 画像へのパス。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatefromwebp.php
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function imagecreatefromwebp(string $filename) {}

/**
 * 新しい画像をファイルあるいは URL から作成する
 * <p><b>imagecreatefromxbm()</b> は、指定した filename から得られたイメージを表すイメージIDを返します。</p><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param string $filename <p>XBM 画像へのパス。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatefromxbm.php
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function imagecreatefromxbm(string $filename) {}

/**
 * 新しい画像をファイルあるいは URL から作成する
 * <p><b>imagecreatefromxpm()</b> は、指定した filename から得られたイメージを表すイメージ ID を返します。</p><p>fopen wrappers が有効の場合、この関数のファイル名として URL を使用することができます。ファイル名の指定方法に関する詳細は <code>fopen()</code> を参照ください。 サポートするプロトコル/ラッパー には、さまざまなラッパーの機能やその使用法、 提供される定義済み変数などの情報がまとめられています。</p>
 * @param string $filename <p>XPM 画像へのパス。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatefromxpm.php
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function imagecreatefromxpm(string $filename) {}

/**
 * TrueColor イメージを新規に作成する
 * <p><b>imagecreatetruecolor()</b> は、指定した大きさの黒い画像を表す画像 ID を返します。</p>
 * @param int $width <p>画像の幅。</p>
 * @param int $height <p>画像の高さ。</p>
 * @return resource <p>成功した場合に画像リソース ID、エラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecreatetruecolor.php
 * @see imagedestroy(), imagecreate()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagecreatetruecolor(int $width, int $height) {}

/**
 * 指定した矩形に画像をクロップする
 * <p>画像を指定した矩形範囲にクロップして、クロップ後の画像を返します。 パラメータ <code>image</code> で渡した画像には何も手を加えません。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param array $rect <p>クロップする矩形を配列で指定します。配列のキーには <i>x</i>, <i>y</i>, <i>width</i>, <i>height</i> を指定します。</p>
 * @return resource <p>成功した場合にクロップ後の画像リソースを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecrop.php
 * @see imagecropauto()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function imagecrop($image, array $rect) {}

/**
 * 利用可能なモードを指定して、画像を自動的にクロップする
 * <p>指定した <code>mode</code> にしたがって、画像を自動的にクロップします。</p><p>この関数は、 現在のところ詳細な情報はありません。引数のリストのみが 記述されています。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $mode <p>以下の定数のいずれか。</p>   <b><code>IMG_CROP_DEFAULT</code></b>    <b><code>IMG_CROP_TRANSPARENT</code></b> を使うことを試みます。 失敗した場合は <b><code>IMG_CROP_SIDES</code></b> を使います。    <b><code>IMG_CROP_TRANSPARENT</code></b>    透過色の背景をクロップします。    <b><code>IMG_CROP_BLACK</code></b>    黒の背景をクロップします。    <b><code>IMG_CROP_WHITE</code></b>    白の背景をクロップします。    <b><code>IMG_CROP_SIDES</code></b>    画像の四隅から、クロップする背景色を検出します。    <b><code>IMG_CROP_THRESHOLD</code></b>    <code>threshold</code> と <code>color</code> を用いてクロップします。
 * @param float $threshold <p>画像の色とクロップする色を比較する際に用いる許容誤差を、パーセントで指定します。 色の違いを判断する際には、RGBキューブ内での距離を用います。</p> <p><b><code>IMG_CROP_THRESHOLD</code></b> モードのときにだけ利用します。</p>
 * @param int $color <p>RGB値あるいはパレットインデックスを指定します。</p> <p><b><code>IMG_CROP_THRESHOLD</code></b> モードのときにだけ利用します。</p>
 * @return resource <p>成功した場合にクロップ後の画像リソースを返します。失敗した場合に <b><code>FALSE</code></b> を返します。 クロップする箇所がなかった場合やすべてクロップされてしまった場合は、処理が失敗したものとみなされます。 この場合は、<code>imagecrop()</code> は <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagecropauto.php
 * @see imagecrop()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function imagecropauto($image, int $mode = -1, float $threshold = .5, int $color = -1) {}

/**
 * 破線を描画する
 * <p>これは古い関数です。代わりに <code>imagesetstyle()</code> と <code>imageline()</code> の組み合せを使用してください。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $x1 <p>左上の x 座標。</p>
 * @param int $y1 <p>左上の y 座標 0。0 は画像の左上の角です。</p>
 * @param int $x2 <p>右下の x 座標。</p>
 * @param int $y2 <p>右下の y 座標。</p>
 * @param int $color <p>塗りつぶし色。<code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagedashedline.php
 * @see imagesetstyle(), imageline()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagedashedline($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

/**
 * 画像を破棄する
 * <p><b>imagedestroy()</b> は画像 <code>image</code> を保持するメモリを解放します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagedestroy.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imagedestroy($image): bool {}

/**
 * 楕円を描画する
 * <p>指定した座標を中心とする楕円を描画します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $cx <p>中心の x 座標。</p>
 * @param int $cy <p>中心の y 座標。</p>
 * @param int $width <p>楕円の幅。</p>
 * @param int $height <p>楕円の高さ。</p>
 * @param int $color <p>楕円の色。<code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imageellipse.php
 * @see imagefilledellipse(), imagearc()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imageellipse($image, int $cx, int $cy, int $width, int $height, int $color): bool {}

/**
 * 塗り潰す
 * <p>指定した座標 (左上が 0, 0 です) から、指定した色 <code>color</code> で <code>image</code> を塗りつぶします。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $x <p>開始位置の x 座標。</p>
 * @param int $y <p>開始位置の y 座標。</p>
 * @param int $color <p>塗りつぶし色。<code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagefill.php
 * @see imagecolorallocate()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagefill($image, int $x, int $y, int $color): bool {}

/**
 * 楕円弧を描画し、塗りつぶす
 * <p>指定した <code>image</code> の指定した座標を中心とする、 楕円弧を描画します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $cx <p>中心の x 座標。</p>
 * @param int $cy <p>中心の y 座標。</p>
 * @param int $width <p>弧の幅。</p>
 * @param int $height <p>弧の高さ。</p>
 * @param int $start <p>弧の開始角度。</p>
 * @param int $end <p>弧の終了角度。 0° は三時の方向で、そこから時計回りに数えます。</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @param int $style <p>次の選択肢のビット和。</p><ol> <li><b><code>IMG_ARC_PIE</code></b></li> <li><b><code>IMG_ARC_CHORD</code></b></li> <li><b><code>IMG_ARC_NOFILL</code></b></li> <li><b><code>IMG_ARC_EDGED</code></b></li> </ol> <b><code>IMG_ARC_PIE</code></b> および <b><code>IMG_ARC_CHORD</code></b> は相反します。 <b><code>IMG_ARC_CHORD</code></b> は、 開始角と終了角を直線で結ぶだけですが、<b><code>IMG_ARC_PIE</code></b> は、角を丸めます。<b><code>IMG_ARC_NOFILL</code></b> は、弧と弦が縁どられ塗りつぶされないことを指定します。 <b><code>IMG_ARC_EDGED</code></b> は、 <b><code>IMG_ARC_NOFILL</code></b> と共に指定することにより、 開始角と終端角は中心と結ばれます。これは、(塗りつぶすよりも) 「パイの切れ端」を縁どる良い方法です。
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagefilledarc.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagefilledarc($image, int $cx, int $cy, int $width, int $height, int $start, int $end, int $color, int $style): bool {}

/**
 * 塗りつぶされた楕円を描画する
 * <p>指定した <code>image</code> の指定した座標を中心として楕円を描画します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $cx <p>中心の x 座標。</p>
 * @param int $cy <p>中心の y 座標。</p>
 * @param int $width <p>楕円の幅。</p>
 * @param int $height <p>楕円の高さ。</p>
 * @param int $color <p>塗りつぶし色。<code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagefilledellipse.php
 * @see imageellipse(), imagefilledarc()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagefilledellipse($image, int $cx, int $cy, int $width, int $height, int $color): bool {}

/**
 * 塗りつぶした多角形を描画する
 * <p><b>imagefilledpolygon()</b> は画像 <code>image</code> 上に塗りつぶした多角形を生成します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param array $points <p>多角形の頂点の座標 <i>x</i> および <i>y</i> を含む配列。</p>
 * @param int $num_points <p>頂点の総数。 3 以上である必要があります。</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagefilledpolygon.php
 * @see imagepolygon()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagefilledpolygon($image, array $points, int $num_points, int $color): bool {}

/**
 * 塗りつぶした矩形を描画する
 * <p>色 <code>color</code> で塗りつぶした矩形を、 指定した <code>image</code> 上に作成します。 開始位置と終了位置を指定します。0, 0 が画像の左上角を表します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $x1 <p>開始位置の x 座標。</p>
 * @param int $y1 <p>開始位置の y 座標。</p>
 * @param int $x2 <p>終了位置の x 座標。</p>
 * @param int $y2 <p>終了位置の y 座標。</p>
 * @param int $color <p>塗りつぶし色。<code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagefilledrectangle.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imagefilledrectangle($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

/**
 * 特定色で塗りつぶす
 * <p><b>imagefilltoborder()</b>は、 <code>border</code>で指定した色を境界色として塗りつぶし を行います。(<code>x</code>,<code>y</code>)が 塗りつぶしの始点(左上が0, 0)で、領域内を <code>color</code>色で塗りつぶします。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $x <p>開始位置の x 座標。</p>
 * @param int $y <p>開始位置の y 座標。</p>
 * @param int $border <p>境界色。<code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @param int $color <p>塗りつぶし色。<code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagefilltoborder.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imagefilltoborder($image, int $x, int $y, int $border, int $color): bool {}

/**
 * 画像にフィルタを適用する
 * <p><b>imagefilter()</b> は、指定したフィルタ <code>filtertype</code> を <code>image</code> に適用します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $filtertype <p><code>filtertype</code> は、以下のいずれかです。</p><ul> <li>  <b><code>IMG_FILTER_NEGATE</code></b>: 画像の色を反転させます。  </li> <li>  <b><code>IMG_FILTER_GRAYSCALE</code></b>: Converts the image into grayscale by changing the red, green and blue components to their weighted sum using the same coefficients as the REC.601 luma (Y') calculation. The alpha components are retained. For palette images the result may differ due to palette limitations.  </li> <li>  <b><code>IMG_FILTER_BRIGHTNESS</code></b>: 画像の輝度を変更します。 輝度レベルを <code>arg1</code> で設定します。輝度の範囲は -255 から 255 までです。  </li> <li>  <b><code>IMG_FILTER_CONTRAST</code></b>: 画像のコントラストを 変更します。コントラストのレベルを <code>arg1</code> で設定します。  </li> <li>  <b><code>IMG_FILTER_COLORIZE</code></b>: <b><code>IMG_FILTER_GRAYSCALE</code></b> と似ていますが、 色を指定することが可能です。 <code>arg1</code>、<code>arg2</code> および <code>arg3</code> を使用して <code>red</code>、<code>green</code>、 <code>blue</code> の値を指定します。また <code>arg4</code> を使用して <code>alpha</code> チャネルの値を指定します。 各値の範囲は 0 から 255 までです。  </li> <li>  <b><code>IMG_FILTER_EDGEDETECT</code></b>: エッジを検出し、 画像のエッジを強調します。  </li> <li>  <b><code>IMG_FILTER_EMBOSS</code></b>: 画像にエンボス処理を行います。  </li> <li>  <b><code>IMG_FILTER_GAUSSIAN_BLUR</code></b>: ガウス分布を 使用して画像をぼかします。  </li> <li>  <b><code>IMG_FILTER_SELECTIVE_BLUR</code></b>: 画像をぼかします。  </li> <li>  <b><code>IMG_FILTER_MEAN_REMOVAL</code></b>: 平均を除去し、 「スケッチ風の」効果を得ます。  </li> <li>  <b><code>IMG_FILTER_SMOOTH</code></b>: 画像を滑らかにします。 滑らかさのレベルを <code>arg1</code> で指定します。  </li> <li>  <b><code>IMG_FILTER_PIXELATE</code></b>: モザイク効果を画像に適用します。 <code>arg1</code> でブロックの大きさを、 そして <code>arg2</code> でモザイク効果のモードを指定します。  </li> </ul>
 * @param int $arg1 <p></p><ul> <li>  <b><code>IMG_FILTER_BRIGHTNESS</code></b>: 輝度レベル。  </li> <li>  <b><code>IMG_FILTER_CONTRAST</code></b>: コントラストレベル。  </li> <li>  <b><code>IMG_FILTER_COLORIZE</code></b>: 赤コンポーネントの値。  </li> <li>  <b><code>IMG_FILTER_SMOOTH</code></b>: 平滑度レベル。  </li> <li>  <b><code>IMG_FILTER_PIXELATE</code></b>: ピクセル単位のブロックサイズ。  </li> </ul>
 * @param int $arg2 <p></p><ul> <li>  <b><code>IMG_FILTER_COLORIZE</code></b>: 緑コンポーネントの値。  </li> <li>  <b><code>IMG_FILTER_PIXELATE</code></b>: 高度なモザイク効果を使用するか否か (デフォルトは <b><code>FALSE</code></b>)。  </li> </ul>
 * @param int $arg3 <p></p><ul> <li>  <b><code>IMG_FILTER_COLORIZE</code></b>: 青コンポーネントの値。  </li> </ul>
 * @param int $arg4 <p></p><ul> <li>  <b><code>IMG_FILTER_COLORIZE</code></b>: アルファチャネル。 0 から 127 までの値で、0 は完全な不透明、127 は完全な透明を表す。  </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagefilter.php
 * @see imageconvolution()
 * @since PHP 5, PHP 7
 */
function imagefilter($image, int $filtertype, int $arg1 = NULL, int $arg2 = NULL, int $arg3 = NULL, int $arg4 = NULL): bool {}

/**
 * 指定したモードで画像を反転させる
 * <p><code>image</code> を、指定した <code>mode</code> で反転させます。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $mode <p>反転のモード。定数 <b><code>IMG_FLIP_&#42;</code></b> のいずれかを指定します。</p> <p></p>   定数 意味     <b><code>IMG_FLIP_HORIZONTAL</code></b>  水平方向に、上下を反転させます。    <b><code>IMG_FLIP_VERTICAL</code></b>  垂直方向に、左右を反転させます。    <b><code>IMG_FLIP_BOTH</code></b>  水平方向、垂直方向の両方に反転させます。
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imageflip.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function imageflip($image, int $mode): bool {}

/**
 * フォントの高さを取得する
 * <p>指定されたフォントの文字の高さをピクセル単位で返します。</p>
 * @param int $font <p>latin2 エンコーディングの組み込みのフォントの場合は 1, 2, 3, 4, 5 のいずれか (数字が大きなほうが、より大きいフォントに対応します)、 あるいは <code>imageloadfont()</code> で登録したフォントの識別子のいずれか。</p>
 * @return int <p>フォントの高さをピクセルで返します。</p>
 * @link http://php.net/manual/ja/function.imagefontheight.php
 * @see imagefontwidth(), imageloadfont()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagefontheight(int $font): int {}

/**
 * フォントの幅を取得する
 * <p>指定されたフォントの文字の幅をピクセル単位で返します。</p>
 * @param int $font <p>latin2 エンコーディングの組み込みのフォントの場合は 1, 2, 3, 4, 5 のいずれか (数字が大きなほうが、より大きいフォントに対応します)、 あるいは <code>imageloadfont()</code> で登録したフォントの識別子のいずれか。</p>
 * @return int <p>フォントの幅をピクセルで返します。</p>
 * @link http://php.net/manual/ja/function.imagefontwidth.php
 * @see imagefontheight(), imageloadfont()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagefontwidth(int $font): int {}

/**
 * freetype2 によるフォントを用いたテキストを囲む箱を取得する
 * <p>この関数は FreeType テキスト用のバウンディングボックスをピクセル単位で算出し、 それを返します。</p><p><b>注意</b>:</p><p><b>imageftbbox()</b> is an extended variant of <code>imagettfbbox()</code> which additionally supports the <code>extrainfo</code>.</p>
 * @param float $size <p>ポイント数単位のフォントサイズ。</p>
 * @param float $angle <p><code>text</code> を取得する角度。</p>
 * @param string $fontfile <p>TrueType フォントのファイル名 (URL も可)。 PHP が使用している GD ライブラリのバージョンにも依存しますが、 先頭に '/' がついていないファイル名を渡した場合は ファイル名の末尾に '.ttf' を追加して GD のフォントパスからファイルを探そうとすることもあります。</p>
 * @param string $text <p>取得したい文字列。</p>
 * @param array $extrainfo <p></p> <b><code>extrainfo</code> の配列のインデックス</b>   キー 型 意味     <i>linespacing</i> <code>float</code> 描画時の行間を定義します
 * @return array <p><b>imageftbbox()</b> は 8 つの要素からなる配列を返します。 これが、テキストを囲む箱の 4 つの角の座標を表します。</p>   0 左下角の X 座標   1 左下角の Y 座標   2 右下角の X 座標   3 右下角の Y 座標   4 右上角の X 座標   5 右上角の Y 座標   6 左上角の X 座標   7 左上角の Y 座標   <p>これらの点は、<code>angle</code> の値にかかわらず <i>text</i> からの相対位置になります。 つまり「左上」とは、そのテキストが水平になるように見たときの左上ということです。</p>
 * @link http://php.net/manual/ja/function.imageftbbox.php
 * @see imagefttext(), imagettfbbox()
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 */
function imageftbbox(float $size, float $angle, string $fontfile, string $text, array $extrainfo = NULL): array {}

/**
 * FreeType 2 によるフォントを用いてイメージにテキストを描画する
 * <p><b>注意</b>:</p><p><b>imagefttext()</b> is an extended variant of <code>imagettftext()</code> which additionally supports the <code>extrainfo</code>.</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param float $size <p>使用するフォントのサイズ (ポイント数)。</p>
 * @param float $angle <p>角度 (度数)。0 度は、左から右に読むテキストを表します。 度数を上げていくと、反時計回りに回転します。たとえば、 90 度の場合は下から上に読むテキストとなります。</p>
 * @param int $x <p><code>x</code> と <code>y</code> で表す座標が、最初の文字のベースポイント (その文字の左下の角とほぼ等しい点) となります。 <code>imagestring()</code> の場合は <code>x</code> と <code>y</code> で最初の文字の左上の角を指定しており、 たとえば "左上" は 0, 0 となりますが、この関数では異なります。</p>
 * @param int $y <p>y 座標。これはフォントのベースラインを指定するものであり、 文字の最下端を指定するものではありません。</p>
 * @param int $color <p>テキストに使用する色のインデックス。 <code>imagecolorexact()</code> を参照ください。</p>
 * @param string $fontfile <p>使用する TrueType フォントへのパス。</p> <p>PHP が使用している GD ライブラリのバージョンにも依存しますが、 <i><code>fontfile</code> の先頭に <i>/</i> がついていない場合はファイル名の末尾に <i>.ttf</i> を追加</i>して GD のフォントパスからファイルを探そうとすることもあります。</p> <p>GD ライブラリのバージョンが 2.0.18 より古い場合は、複数のフォントファイルを指定するときの 'パス区切り文字' がセミコロンではなく <i>スペース</i> となります。 この機能を意図せずに使ってしまい、 <i>Warning: Could not find/open font</i> といった警告が発生してしまうことがあります。 この問題が発生するバージョンの場合は、 スペースを含まないパスにフォントを格納しなければなりません。</p> <p>たいていの場合は、スクリプト内で使うフォントの場所は同じディレクトリになるでしょう。 そんな場合は、次のようにすれば読み込み時の問題を回避できます。</p> <code> &lt;&#63;php<br>// GD 用の環境変数を設定します<br>putenv('GDFONTPATH=' . realpath('.'));<br><br>// 使用するフォント名を指定します (拡張子 .ttf がないことに注目しましょう)<br>$font = 'SomeFont';<br>&#63;&gt;  </code>
 * @param string $text <p>画像に挿入するテキスト。</p>
 * @param array $extrainfo <p></p> <b><code>extrainfo</code> の配列のインデックス</b>   キー 型 意味     <i>linespacing</i> <code>float</code> 描画時の行間を定義します
 * @return array <p>この関数は、長方形の 4 つの角を表す点の配列を返します。 最初が左下の位置で、そこから反時計回りに回ります。</p>   0 左下の x 座標   1 左下の y 座標   2 右下の x 座標   3 右下の y 座標   4 右上の x 座標   5 右上の y 座標   6 左上の x 座標   7 左上の y 座標
 * @link http://php.net/manual/ja/function.imagefttext.php
 * @see imageftbbox(), imagettftext()
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 */
function imagefttext($image, float $size, float $angle, int $x, int $y, int $color, string $fontfile, string $text, array $extrainfo = NULL): array {}

/**
 * GD イメージにガンマ補正を適用する
 * <p>指定した GD 画像 <code>image</code> に 入力ガンマ値、出力ガンマ値を指定してガンマ補正を適用します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param float $inputgamma <p>入力ガンマ値。</p>
 * @param float $outputgamma <p>出力ガンマ値。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagegammacorrect.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imagegammacorrect($image, float $inputgamma, float $outputgamma): bool {}

/**
 * GD イメージをブラウザまたはファイルに出力する
 * <p>GD イメージを、指定した <code>to</code> に出力します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param mixed $to <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b><code>NULL</code></b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagegd.php
 * @see imagegd2()
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 */
function imagegd($image, $to = NULL): bool {}

/**
 * GD2 イメージをブラウザまたはファイルに出力する
 * <p>GD2 イメージを、指定した <code>to</code> に出力します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param mixed $to <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b><code>NULL</code></b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * @param int $chunk_size <p>チャンクの大きさ。</p>
 * @param int $type <p><b><code>IMG_GD2_RAW</code></b> あるいは <b><code>IMG_GD2_COMPRESSED</code></b> のいずれかです。デフォルトは <b><code>IMG_GD2_RAW</code></b> です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagegd2.php
 * @see imagegd()
 * @since PHP 4 >= 4.0.7, PHP 5, PHP 7
 */
function imagegd2($image, $to = NULL, int $chunk_size = 128, int $type = IMG_GD2_RAW): bool {}

/**
 * Get the clipping rectangle
 * <p><b>imagegetclip()</b> retrieves the current clipping rectangle, i.e. the area beyond which no pixels will be drawn.</p>
 * @param resource $im
 * @return array <p>The function returns an indexed array with the coordinates of the clipping rectangle which has the following entries:</p><ul> <li> x-coordinate of the upper left corner </li> <li> y-coordinate of the upper left corner </li> <li> x-coordinate of the lower right corner </li> <li> y-coordinate of the lower right corner </li> </ul>
 * @link http://php.net/manual/ja/function.imagegetclip.php
 * @see imagesetclip()
 * @since PHP 7 >= 7.2.0
 */
function imagegetclip($im): array {}

/**
 * 画像をブラウザあるいはファイルに出力する
 * <p><b>imagegif()</b> は画像 <code>image</code> から <code>to</code> に GIF ファイルを作成します。 引数 <code>image</code> は <code>imagecreate()</code> あるいは <i>imagecreatefrom&#42;</i> 関数から返されたものです。</p><p>画像フォーマットは、<code>imagecolortransparent()</code> を 用いて画像を透明化しない限り GIF87a となります。 透明化した場合の画像フォーマットは GIF89a となります。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param mixed $to <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b><code>NULL</code></b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagegif.php
 * @see imagepng(), imagewbmp(), imagejpeg(), imagetypes()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagegif($image, $to = NULL): bool {}

/**
 * 画面全体をキャプチャする
 * <p>画面全体のスクリーンショットを取得します。</p><p><b>注意</b>:</p><p>この関数は Windows 上でのみ使用できます。</p>
 * @return resource <p>成功した場合に画像リソースの ID、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagegrabscreen.php
 * @see imagegrabwindow()
 * @since PHP 5 >= 5.2.2, PHP 7
 */
function imagegrabscreen() {}

/**
 * ウィンドウをキャプチャする
 * <p>ウィンドウあるいはそのクライアント領域のキャプチャを、 ウィンドウハンドル (COM インスタンスの HWND プロパティ) を指定して取得します。</p><p><b>注意</b>:</p><p>この関数は Windows 上でのみ使用できます。</p>
 * @param int $window_handle <p>HWND ウィンドウ ID。</p>
 * @param int $client_area <p>アプリケーションのクライアント領域を含めるかどうか。</p>
 * @return resource <p>成功した場合に画像リソースの ID、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagegrabwindow.php
 * @see imagegrabscreen()
 * @since PHP 5 >= 5.2.2, PHP 7
 */
function imagegrabwindow(int $window_handle, int $client_area = 0) {}

/**
 * インターレースを有効もしくは無効にする
 * <p><b>imageinterlace()</b> は、インターレースビットをon またはoffに切り替えます。</p><p>インターレースビットがonでかつその画像が JPEG の場合、 その画像はプログレッシブ JPEG として生成されています。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $interlace <p>ゼロ以外の場合はインターレース画像となり、 ゼロの場合はインターレースビットを off にします。</p>
 * @return int <p>画像のインターレースビットが設定されている場合に 1、 それ以外の場合に 0 を返します。</p>
 * @link http://php.net/manual/ja/function.imageinterlace.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imageinterlace($image, int $interlace = 0): int {}

/**
 * 画像が truecolor かどうか調べる
 * <p><b>imageistruecolor()</b> は、 <code>image</code> が truecolor 画像かどうか調べます。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @return bool <p><code>image</code> が truecolor の場合に <b><code>TRUE</code></b>、 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imageistruecolor.php
 * @see imagecreatetruecolor(), imagepalettetotruecolor()
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 */
function imageistruecolor($image): bool {}

/**
 * 画像をブラウザあるいはファイルに出力する
 * <p><b>imagejpeg()</b> は、画像 <code>image</code> から JPEG ファイルを作成します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param mixed $to <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b><code>NULL</code></b> を設定したりした場合は、画像ストリームを直接出力します。</p> <p><code>quality</code> パラメータを指定するためにこの引数をスキップするには、 <b><code>NULL</code></b> を指定します。</p>
 * @param int $quality <p><code>quality</code> はオプションであり、0(品質は最低 ですが、ファイルはより小さい)から100(品質は最高ですが、ファイルは 最大)の範囲で指定します。デフォルトは IJG 品質値(75)です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagejpeg.php
 * @see imagepng(), imagegif(), imagewbmp(), imageinterlace(), imagetypes()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagejpeg($image, $to = NULL, int $quality = NULL): bool {}

/**
 * アルファブレンディングフラグを設定し、レイヤ効果を使用する
 * <p>アルファブレンディングフラグを設定し、レイヤ効果を使用します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $effect <p>以下の定数のいずれか。</p>  <b><code>IMG_EFFECT_REPLACE</code></b>    ピクセルの置換を使用します (<code>imagealphablending()</code> に <b><code>TRUE</code></b> を渡すのと同じです)。    <b><code>IMG_EFFECT_ALPHABLEND</code></b>    通常のピクセルブレンディングを使用します (<code>imagealphablending()</code> に <b><code>FALSE</code></b> を渡すのと同じです)。    <b><code>IMG_EFFECT_NORMAL</code></b>    <b><code>IMG_EFFECT_ALPHABLEND</code></b> と同じです。    <b><code>IMG_EFFECT_OVERLAY</code></b>    オーバーレイを使用すると、背景の黒い部分は黒のまま。 一方背景の白い部分は白のままとなります。 背景のグレーな部分は、前景のピクセルの色となります。    <b><code>IMG_EFFECT_MULTIPLY</code></b>    多重効果を使ったオーバーレイを使用します。
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagelayereffect.php
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function imagelayereffect($image, int $effect): bool {}

/**
 * 直線を描画する
 * <p>指定したふたつの点を結ぶ直線を描画します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $x1 <p>最初の点の x 座標。</p>
 * @param int $y1 <p>最初の点の y 座標。</p>
 * @param int $x2 <p>二番目の点の x 座標。</p>
 * @param int $y2 <p>二番目の点の y 座標。</p>
 * @param int $color <p>直線の色。<code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imageline.php
 * @see imagecreatetruecolor(), imagecolorallocate()
 * @since PHP 4, PHP 5, PHP 7
 */
function imageline($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

/**
 * 新しいフォントを読み込む
 * <p><b>imageloadfont()</b> はユーザーが定義したビットマップを読み込み、 その ID を返します。</p>
 * @param string $file <p>フォントファイル形式は現在はバイナリで、アーキクチャに依存します。 このため、PHP を実行するマシーンと同一の型の CPU 上でフォントファイルを 生成する必要があります。</p> <p></p> <b>フォントファイルのフォーマット</b>   バイト位置 C 言語のデータ型 説明     0-3 バイト目 int フォント中の文字の数   4-7 バイト目 int  フォント中の最初の文字の値(しばしば 空白を表す 32 となります)    8-11 バイト目 int 各文字のピクセル幅   12-15 バイト目 int 各文字のピクセル高さ   16 バイト目から char  文字データの配列、各文字のピクセルにつき1バイトで、 総数は(文字数&#42;幅&#42;高さ)バイトです。
 * @return int <p>フォント ID を返します。これは常に 5 より大きくなり、 組み込みのフォントと衝突することはありません。 エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imageloadfont.php
 * @see imagefontwidth(), imagefontheight()
 * @since PHP 4, PHP 5, PHP 7
 */
function imageloadfont(string $file): int {}

/**
 * Draws an open polygon
 * <p><b>imageopenpolygon()</b> draws an open polygon on the given <code>image</code>. Contrary to <code>imagepolygon()</code>, no line is drawn between the last and the first point.</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param array $points <p>An array containing the polygon's vertices, e.g.:</p>   points[0] = x0   points[1] = y0   points[2] = x1   points[3] = y1
 * @param int $num_points <p>Total number of points (vertices).</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imageopenpolygon.php
 * @see imagepolygon()
 * @since PHP 7 >= 7.2.0
 */
function imageopenpolygon($image, array $points, int $num_points, int $color): bool {}

/**
 * あるイメージから他のイメージにパレットをコピーする
 * <p><b>imagepalettecopy()</b> は、パレットを <code>source</code> から <code>destination</code> にコピーします。</p>
 * @param resource $destination <p>コピー先の画像リソース。</p>
 * @param resource $source <p>コピー元の画像リソース。</p>
 * @return void <p>値を返しません。</p>
 * @link http://php.net/manual/ja/function.imagepalettecopy.php
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function imagepalettecopy($destination, $source): void {}

/**
 * パレット形式の画像を true color に変換する
 * <p><code>imagecreate()</code> のような関数で作ったパレット形式の画像を、 <code>imagecreatetruecolor()</code> で作るような true color 形式に変換します。</p>
 * @param resource $src
 * @return bool <p>変換に成功した場合や、元画像が既に true color だった場合に <b><code>TRUE</code></b> を返します。 それ以外の場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagepalettetotruecolor.php
 * @see imagecreatetruecolor(), imageistruecolor()
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function imagepalettetotruecolor($src): bool {}

/**
 * PNG イメージをブラウザまたはファイルに出力する
 * <p>指定した <code>image</code> から、PNG 画像を出力あるいは保存します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param mixed $to <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b><code>NULL</code></b> を設定したりした場合は、画像ストリームを直接出力します。</p>  <p><b>注意</b>:</p> <p><code>quality</code> および <code>filters</code> を使用しない場合は、 <b><code>NULL</code></b> を指定することはできません。</p>
 * @param int $quality <p>圧縮レベル。0 (圧縮しない) から 9 までの値です。 現在のデフォルトは 6 です。 詳細は、» zlib マニュアル をご覧ください。</p>
 * @param int $filters <p>PNG ファイルの大きさを小さくします。 これはビットマスクフィールドで、定数 <i>PNG_FILTER_XXX</i> の組み合わせを指定します。 <b><code>PNG_NO_FILTER</code></b> や <b><code>PNG_ALL_FILTERS</code></b> を使用すると、 全フィルタを一括で無効にしたり有効にしたりできます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagepng.php
 * @see imagegif(), imagewbmp(), imagejpeg(), imagetypes(), imagesavealpha()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagepng($image, $to = NULL, int $quality = NULL, int $filters = NULL): bool {}

/**
 * 多角形を描画する
 * <p><b>imagepolygon()</b> は、指定した <code>image</code> に多角形を作成します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param array $points <p>多角形の頂点からなる PHP の配列で、 次のようになります。</p>   points[0] = x0   points[1] = y0   points[2] = x1   points[3] = y1
 * @param int $num_points <p>頂点の総数。</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagepolygon.php
 * @see imagefilledpolygon(), imageopenpolygon(), imagecreate(), imagecreatetruecolor()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagepolygon($image, array $points, int $num_points, int $color): bool {}

/**
 * Give the bounding box of a text rectangle using PostScript Type1 fonts
 * <p>Gives the bounding box of a text rectangle using PostScript Type1 fonts.</p><p>The bounding box is calculated using information available from character metrics, and unfortunately tends to differ slightly from the results achieved by actually rasterizing the text. If the angle is 0 degrees, you can expect the text to need 1 pixel more to every direction.</p>
 * @param string $text <p>The text to be written.</p>
 * @param resource $font
 * @param int $size <p><code>size</code> is expressed in pixels.</p>
 * @return array <p>Returns an array containing the following elements:</p>   0 left x-coordinate   1 upper y-coordinate   2 right x-coordinate   3 lower y-coordinate
 * @link http://php.net/manual/ja/function.imagepsbbox.php
 * @see imagepstext()
 * @since PHP 4, PHP 5
 */
function imagepsbbox(string $text, $font, int $size): array {}

/**
 * Change the character encoding vector of a font
 * <p>Loads a character encoding vector from a file and changes the fonts encoding vector to it. As a PostScript fonts default vector lacks most of the character positions above 127, you'll definitely want to change this if you use a language other than English.</p><p>If you find yourself using this function all the time, a much better way to define the encoding is to set ps.default_encoding in the configuration file to point to the right encoding file and all fonts you load will automatically have the right encoding.</p>
 * @param resource $font_index <p><code>imagepsloadfont()</code> により返されるフォントリソース</p>
 * @param string $encodingfile <p>The exact format of this file is described in T1libs documentation. T1lib comes with two ready-to-use files, IsoLatin1.enc and IsoLatin2.enc.</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagepsencodefont.php
 * @since PHP 4, PHP 5
 */
function imagepsencodefont($font_index, string $encodingfile): bool {}

/**
 * Extend or condense a font
 * <p>Extend or condense a font (<code>font_index</code>), if the value of the <code>extend</code> parameter is less than one you will be condensing the font.</p>
 * @param resource $font_index <p><code>imagepsloadfont()</code> により返されるフォントリソース</p>
 * @param float $extend <p>Extension value, must be greater than 0.</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagepsextendfont.php
 * @since PHP 4, PHP 5
 */
function imagepsextendfont($font_index, float $extend): bool {}

/**
 * Free memory used by a PostScript Type 1 font
 * <p><b>imagepsfreefont()</b> frees memory used by a PostScript Type 1 font.</p>
 * @param resource $font_index <p><code>imagepsloadfont()</code> により返されるフォントリソース</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagepsfreefont.php
 * @see imagepsloadfont()
 * @since PHP 4, PHP 5
 */
function imagepsfreefont($font_index): bool {}

/**
 * Load a PostScript Type 1 font from file
 * <p>Load a PostScript Type 1 font from the given <code>filename</code>.</p>
 * @param string $filename <p>Path to the Postscript font file.</p>
 * @return resource <p>In the case everything went right, a valid font index will be returned and can be used for further purposes. Otherwise the function returns <b><code>FALSE</code></b>.</p>
 * @link http://php.net/manual/ja/function.imagepsloadfont.php
 * @see imagepsfreefont()
 * @since PHP 4, PHP 5
 */
function imagepsloadfont(string $filename) {}

/**
 * Slant a font
 * <p>Slant a given font.</p>
 * @param resource $font_index <p><code>imagepsloadfont()</code> により返されるフォントリソース</p>
 * @param float $slant <p>Slant level.</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagepsslantfont.php
 * @since PHP 4, PHP 5
 */
function imagepsslantfont($font_index, float $slant): bool {}

/**
 * Draws a text over an image using PostScript Type1 fonts
 * <p>Draws a text on an image using PostScript Type1 fonts.</p><p>Refer to PostScript documentation about fonts and their measuring system if you have trouble understanding how this works.</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param string $text <p>The text to be written.</p>
 * @param resource $font_index <p><code>imagepsloadfont()</code> により返されるフォントリソース</p>
 * @param int $size <p><code>size</code> is expressed in pixels.</p>
 * @param int $foreground <p>The color in which the text will be painted.</p>
 * @param int $background <p>The color to which the text will try to fade in with antialiasing. No pixels with the color <code>background</code> are actually painted, so the background image does not need to be of solid color.</p>
 * @param int $x <p>x-coordinate for the lower-left corner of the first character.</p>
 * @param int $y <p>y-coordinate for the lower-left corner of the first character.</p>
 * @param int $space <p>Allows you to change the default value of a space in a font. This amount is added to the normal value and can also be negative. Expressed in character space units, where 1 unit is 1/1000th of an em-square.</p>
 * @param int $tightness <p><code>tightness</code> allows you to control the amount of white space between characters. This amount is added to the normal character width and can also be negative. Expressed in character space units, where 1 unit is 1/1000th of an em-square.</p>
 * @param float $angle <p><code>angle</code> is in degrees.</p>
 * @param int $antialias_steps <p>Allows you to control the number of colours used for antialiasing text. Allowed values are 4 and 16. The higher value is recommended for text sizes lower than 20, where the effect in text quality is quite visible. With bigger sizes, use 4. It's less computationally intensive.</p>
 * @return array <p>This function returns an array containing the following elements:</p>   0 lower left x-coordinate   1 lower left y-coordinate   2 upper right x-coordinate   3 upper right y-coordinate
 * @link http://php.net/manual/ja/function.imagepstext.php
 * @see imagepsbbox()
 * @since PHP 4, PHP 5
 */
function imagepstext($image, string $text, $font_index, int $size, int $foreground, int $background, int $x, int $y, int $space = 0, int $tightness = 0, float $angle = 0.0, int $antialias_steps = 4): array {}

/**
 * 矩形を描画する
 * <p><b>imagerectangle()</b> は、指定した座標から始まる矩形を作成します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $x1 <p>左上の x 座標。</p>
 * @param int $y1 <p>左上の y 座標。 0, 0 が画像の左上隅を表します。</p>
 * @param int $x2 <p>右下の x 座標。</p>
 * @param int $y2 <p>右下の y 座標。</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagerectangle.php
 * @since PHP 4, PHP 5, PHP 7
 */
function imagerectangle($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

/**
 * Get or set the resolution of the image
 * <p><b>imageresolution()</b> allows to set and get the resolution of an image in DPI (dots per inch). If none of the optional parameters is given, the current resolution is returned as indexed array. If only <code>res_x</code> is given, the horizontal and vertical resolution are set to this value. If both optional parameters are given, the horizontal and vertical resolution are set to these values, respectively.</p><p>The resolution is only used as meta information when images are read from and written to formats supporting this kind of information (curently PNG and JPEG). It does not affect any drawing operations. The default resolution for new images is 96 DPI.</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $res_x <p>The horizontal resolution in DPI.</p>
 * @param int $res_y <p>The vertical resolution in DPI.</p>
 * @return mixed <p>When used as getter (that is without the optional parameters), it returns <b><code>TRUE</code></b> on success, 失敗した場合に <b><code>FALSE</code></b> を返します. When used as setter (that is with one or both optional parameters given), it returns an indexed array of the horizontal and vertical resolution on success, 失敗した場合に <b><code>FALSE</code></b> を返します.</p>
 * @link http://php.net/manual/ja/function.imageresolution.php
 * @since PHP 7 >= 7.2.0
 */
function imageresolution($image, int $res_x = NULL, int $res_y = NULL) {}

/**
 * 指定された角度で画像を回転する
 * <p>画像 <code>image</code> を、 <code>angle</code> で指定された角度だけ回転します。</p><p>回転の中心は画像の中心です。 回転後の画像の大きさは、もとの大きさと異なる可能性があります。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param float $angle <p>回転角度。これは、画像を反時計回りに回転させるときの度数を表します。</p>
 * @param int $bgd_color <p>回転後、カバーされない部分の色。</p>
 * @param int $ignore_transparent <p>ゼロ以外を指定すると、透過色は無視されます (その他の場合は保持されます)。</p>
 * @return resource <p>回転させた画像のリソースを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagerotate.php
 * @see imagesetinterpolation()
 * @since PHP 4 >= 4.3.0, PHP 5, PHP 7
 */
function imagerotate($image, float $angle, int $bgd_color, int $ignore_transparent = 0) {}

/**
 * PNG 画像を保存する際に（単一色の透過設定ではない）完全な アルファチャネル情報を保存するフラグを設定する
 * <p><b>imagesavealpha()</b> は PNG 画像を保存する際に（単一色の透過設定ではない）完全な アルファチャネル情報を保存するフラグを設定します。</p><p>これを使用するためには、アルファブレンディングを解除する必要があります (<i>imagealphablending($im, false)</i>)。</p><p>アルファチャネルはすべてのブラウザでサポートされているわけではありません。 ブラウザ上での表示で問題が発生した場合は、アルファチャネルに対応している ブラウザ（例: 最新の Mozilla）でスクリプトを実行しなおしてみましょう。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param bool $saveflag <p>アルファチャネルを保存するか否か。デフォルトは <b><code>FALSE</code></b> です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagesavealpha.php
 * @see imagealphablending()
 * @since PHP 4 >= 4.3.2, PHP 5, PHP 7
 */
function imagesavealpha($image, bool $saveflag): bool {}

/**
 * 幅と高さを指定して、画像の縮尺を変更する
 * <p><b>imagescale()</b> は、指定した補間アルゴリズムを使って画像の縮尺を変更します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $new_width <p>変更後の画像の幅。</p>
 * @param int $new_height <p>変更後の画像の高さ。省略したり負の数を指定したりした場合は、元の画像のアスペクト比を維持します。</p>  <b>警告</b> <p>PHP 5.5.18 以前、あるいは PHP 5.6.2 以前のバージョンでは、常に高さを指定する必要があります。 これらのバージョンでは、高さを省略した場合のアスペクト比の計算が、正しく行われません。</p>
 * @param int $mode <p><b><code>IMG_NEAREST_NEIGHBOUR</code></b>、 <b><code>IMG_BILINEAR_FIXED</code></b>、 <b><code>IMG_BICUBIC</code></b>、 <b><code>IMG_BICUBIC_FIXED</code></b> あるいはそれ以外 (2 パスで使います) のいずれか。</p><p><b>注意</b>:  <b><code>IMG_WEIGHTED4</code></b> にはまだ対応していません。 </p>
 * @return resource <p>成功した場合に、縮尺を変更した画像リソースを返します。失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagescale.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function imagescale($image, int $new_width, int $new_height = -1, int $mode = IMG_BILINEAR_FIXED) {}

/**
 * 線の描画用にブラシイメージを設定する
 * <p><b>imagesetbrush()</b> は、特別な色 <b><code>IMG_COLOR_BRUSHED</code></b> または <b><code>IMG_COLOR_STYLEDBRUSHED</code></b> で描画される際に (<code>imageline()</code> や <code>imagepolygon()</code> のような) 全ての線描画関数で使用されるブラシイメージを設定します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param resource $brush <p>画像リソース。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagesetbrush.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagesetbrush($image, $brush): bool {}

/**
 * Set the clipping rectangle
 * <p><b>imagesetclip()</b> sets the current clipping rectangle, i.e. the area beyond which no pixels will be drawn.</p>
 * @param resource $im
 * @param int $x1 <p>The x-coordinate of the upper left corner.</p>
 * @param int $y1 <p>The y-coordinate of the upper left corner.</p>
 * @param int $x2 <p>The x-coordinate of the lower right corner.</p>
 * @param int $y2 <p>The y-coordinate of the lower right corner.</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagesetclip.php
 * @see imagegetclip()
 * @since PHP 7 >= 7.2.0
 */
function imagesetclip($im, int $x1, int $y1, int $x2, int $y2): bool {}

/**
 * 補間方法を設定する
 * <p>補間方法を設定します。これは、<code>imagerotate()</code> など GD のさまざまな関数のレンダリングに影響を及ぼします。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $method <p>補間方法。次のいずれかで指定します。</p><ul> <li>  <b><code>IMG_BELL</code></b>: Bell フィルター。  </li> <li>  <b><code>IMG_BESSEL</code></b>: Bessel フィルター。  </li> <li>  <b><code>IMG_BICUBIC</code></b>: 双三次補間。  </li> <li>  <b><code>IMG_BICUBIC_FIXED</code></b>: 双三次補間の固定小数点実装。  </li> <li>  <b><code>IMG_BILINEAR_FIXED</code></b>: 双直線補間の固定小数点実装 (<i>デフォルト (画像作成時も含む)</i>)。  </li> <li>  <b><code>IMG_BLACKMAN</code></b>: Blackman ウィンドウ関数。  </li> <li>  <b><code>IMG_BOX</code></b>: Box blur フィルター。  </li> <li>  <b><code>IMG_BSPLINE</code></b>: スプライン補間。  </li> <li>  <b><code>IMG_CATMULLROM</code></b>: 三次元エルミートスプライン補間。  </li> <li>  <b><code>IMG_GAUSSIAN</code></b>: ガウス関数。  </li> <li>  <b><code>IMG_GENERALIZED_CUBIC</code></b>: 汎用三次元スプラインフラクタル補間。  </li> <li>  <b><code>IMG_HERMITE</code></b>: エルミート補間。  </li> <li>  <b><code>IMG_HAMMING</code></b>: ハミングフィルター。  </li> <li>  <b><code>IMG_HANNING</code></b>: ハニングフィルター。  </li> <li>  <b><code>IMG_MITCHELL</code></b>: Mitchell フィルター。  </li> <li>  <b><code>IMG_POWER</code></b>: Power 補間。  </li> <li>  <b><code>IMG_QUADRATIC</code></b>: 逆二次補間。  </li> <li>  <b><code>IMG_SINC</code></b>: Sinc 関数。  </li> <li>  <b><code>IMG_NEAREST_NEIGHBOUR</code></b>: 最近接補間。  </li> <li>  <b><code>IMG_WEIGHTED4</code></b>: 重み付きフィルター。  </li> <li>  <b><code>IMG_TRIANGLE</code></b>: 三角補間。  </li> </ul>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagesetinterpolation.php
 * @since PHP 5 >= 5.5.0, PHP 7
 */
function imagesetinterpolation($image, int $method = IMG_BILINEAR_FIXED): bool {}

/**
 * 点を生成する
 * <p><b>imagesetpixel()</b> は、指定した座標にピクセルを描画します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $x <p>x 座標。</p>
 * @param int $y <p>y 座標。</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagesetpixel.php
 * @see imagecreatetruecolor(), imagecolorallocate(), imagecolorat()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagesetpixel($image, int $x, int $y, int $color): bool {}

/**
 * 線描画用のスタイルを設定する
 * <p><b>imagesetstyle()</b> は、特別な <i>IMG_COLOR_STYLED</i> または色を有するイメージの線 <i>IMG_COLOR_STYLEDBRUSHED</i> を描画する際に (<code>imageline()</code> と <code>imagepolygon()</code> のような) 全ての線描画関数で使用されるスタイルを設定します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param array $style <p>はピクセルの配列です。定数 <b><code>IMG_COLOR_TRANSPARENT</code></b> を使用すると、透明なピクセルを追加できます。 <code>style</code> は空の配列にしてはいけません。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagesetstyle.php
 * @see imagesetbrush(), imageline()
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagesetstyle($image, array $style): bool {}

/**
 * 線描画用の線幅を設定する
 * <p><b>imagesetthickness()</b> は、長方形、多角形、弧などを描画する際の線幅を <code>thickness</code> ピクセルに設定します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $thickness <p>ピクセル単位の線幅。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagesetthickness.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagesetthickness($image, int $thickness): bool {}

/**
 * 塗りつぶし用のイメージを設定する
 * <p><b>imagesettile()</b> は、特別な色 <b><code>IMG_COLOR_TILED</code></b> を指定して塗りつぶされた場合に、 (<code>imagefill()</code> や <code>imagefilledpolygon()</code> のような) 領域塗りつぶし関数で使用されるタイルイメージを設定します。</p><p>タイルは、領域を塗りつぶすために繰り返し使用されるイメージです。 全ての GD イメージをタイルとして使用可能で、 <code>imagecolortransparent()</code> でタイルの透過色 ID を設定することにより、 その一部から下の部分が透けて見えるようなタイルを作成することが可能です。</p><p><b>注意</b>:</p><p>タイルの使用が終った際には、特別な処理は不要ですが、 タイルイメージを破棄する場合には、新たにタイルイメージを設定するまでは、色 <b><code>IMG_COLOR_TILED</code></b> を使用してはいけません。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param resource $tile <p>タイルとして使用する画像リソース。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagesettile.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagesettile($image, $tile): bool {}

/**
 * 文字列を水平に描画する
 * <p>指定した座標に文字列 <code>string</code> を描画します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $font <p>latin2 エンコーディングの組み込みのフォントの場合は 1, 2, 3, 4, 5 のいずれか (数字が大きなほうが、より大きいフォントに対応します)、 あるいは <code>imageloadfont()</code> で登録したフォントの識別子のいずれか。</p>
 * @param int $x <p>左上隅の x 座標。</p>
 * @param int $y <p>左上隅の y 座標。</p>
 * @param string $string <p>書き出す文字列。</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagestring.php
 * @see imageloadfont(), imagettftext()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagestring($image, int $font, int $x, int $y, string $string, int $color): bool {}

/**
 * 文字列を垂直に描画する
 * <p>文字列 <code>string</code> を、指定した座標で垂直に描画します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param int $font <p>latin2 エンコーディングの組み込みのフォントの場合は 1, 2, 3, 4, 5 のいずれか (数字が大きなほうが、より大きいフォントに対応します)、 あるいは <code>imageloadfont()</code> で登録したフォントの識別子のいずれか。</p>
 * @param int $x <p>左下隅の x 座標。</p>
 * @param int $y <p>左下隅の y 座標。</p>
 * @param string $string <p>書き出す文字列。</p>
 * @param int $color <p><code>imagecolorallocate()</code> で作成された色識別子。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagestringup.php
 * @see imageloadfont()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagestringup($image, int $font, int $x, int $y, string $string, int $color): bool {}

/**
 * 画像の幅を取得する
 * <p>指定した画像リソース <code>image</code> の幅を返します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @return int <p><code>image</code> の幅、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagesx.php
 * @see imagecreatetruecolor(), getimagesize(), imagesy()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagesx($image): int {}

/**
 * 画像の高さを取得する
 * <p>指定した画像リソース <code>image</code> の高さを返します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @return int <p><code>image</code> の高さ、あるいはエラー時に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagesy.php
 * @see imagecreatetruecolor(), getimagesize(), imagesx()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagesy($image): int {}

/**
 * TrueColor イメージをパレットイメージに変換する
 * <p><b>imagetruecolortopalette()</b> は、TrueColorイメー ジをパレットイメージに変換します。この関数のコードは、元々 Independent JPEG Groupライブラリ用に書かれたもので、素晴らしいも のです。このコードは、色をできる限り維持することに加えて、アルファ チャネルに関する情報を出力されるパレットにおいてできるだけ維持す るように修正されています。これは、期待通りにうまくいきません。通 常は、最高の出力品質が保障されるTrueColor出力イメージを単に出力す るのが最良の方法です。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param bool $dither <p>イメージにディザーをかけることを指定します。 <b><code>TRUE</code></b> の場合はディザーが行われます。 出力はぼやけますが、色の近似はより良くなります。</p>
 * @param int $ncolors <p>パレットに保持される最大の色数を設定します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagetruecolortopalette.php
 * @since PHP 4 >= 4.0.6, PHP 5, PHP 7
 */
function imagetruecolortopalette($image, bool $dither, int $ncolors): bool {}

/**
 * TypeType フォントを使用したテキストの bounding box を生成する
 * <p>この関数は TrueType テキストの bounding box をピクセル単位で計算して 返します。</p><p><b>注意</b>:</p><p><code>imageftbbox()</code> is an extended variant of <b>imagettfbbox()</b> which additionally supports the <code>extrainfo</code>.</p>
 * @param float $size <p>ポイント数単位のフォントサイズ。</p>
 * @param float $angle <p>測定する <code>text</code> の角度(度単位)。</p>
 * @param string $fontfile <p>使用したい TrueType フォントへのパス。</p> <p>Depending on which version of the GD library PHP is using, <i>when <code>fontfile</code> does not begin with a leading <i>/</i> then <i>.ttf</i> will be appended</i> to the filename and the library will attempt to search for that filename along a library-defined font path.</p> <p>When using versions of the GD library lower than 2.0.18, a <i>space</i> character, rather than a semicolon, was used as the 'path separator' for different font files. Unintentional use of this feature will result in the warning message: <i>Warning: Could not find/open font</i>. For these affected versions, the only solution is moving the font to a path which does not contain spaces.</p> <p>In many cases where a font resides in the same directory as the script using it the following trick will alleviate any include problems.</p> <code> &lt;&#63;php<br>// GD の環境変数を設定<br>putenv('GDFONTPATH=' . realpath('.'));<br><br>// Name the font to be used (note the lack of the .ttf extension)<br>$font = 'SomeFont';<br>&#63;&gt;  </code>   <p><b>注意</b>:</p> <p>Note that open_basedir does <i>not</i> apply to <code>fontfile</code>.</p>
 * @param string $text <p>測定する文字列。</p>
 * @return array <p><b>imagettfbbox()</b> は、テキストの bounding box を 作成するための 4 点を表現する 8 個の要素からなる配列を返します。 エラー時には <b><code>FALSE</code></b> を返します。</p>   キー 内容     0 左下角の X 座標   1 左下角の Y 座標   2 右下角の X 座標   3 右下角の Y 座標   4 右上角の X 座標   5 右上角の Y 座標   6 左上角の X 座標   7 左上角の Y 座標   <p>各点の位置は、 <code>angle</code> にかかわらず <i>text</i> からの相対位置で表されます。 つまり、"左上"はテキストを水平に見た場合の左上の角を意味します。</p>
 * @link http://php.net/manual/ja/function.imagettfbbox.php
 * @see imagettftext(), imageftbbox()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagettfbbox(float $size, float $angle, string $fontfile, string $text): array {}

/**
 * TrueType フォントを使用してテキストを画像に書き込む
 * <p>指定した <code>text</code> を、 TrueType フォントを使用して画像に書き込みます。</p><p><b>注意</b>:</p><p><code>imagefttext()</code> is an extended variant of <b>imagettftext()</b> which additionally supports the <code>extrainfo</code>.</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param float $size <p>ポイント数単位のフォントサイズ。</p>
 * @param float $angle <p>度で表される角度。0 度は左から右にテキストを読む方向になります。 0 より大きな値は、反時計回りの回転を表現します。例えば、 90 という値は下から上にテキストを読む方向になります。</p>
 * @param int $x <p><code>x</code> と <code>y</code> で与えられた座標は、最初の文字のベースポイント (ほぼ文字の左下角) を定義します。 この仕様は、<code>x</code> と <code>y</code> で最初の文字の右上角を定義する <code>imagestring()</code> と異なっています。 例えば、左上は 0, 0 となります。</p>
 * @param int $y <p>y 座標。これは文字の最下位置ではなく、 フォントペースラインの位置を指定します。</p>
 * @param int $color <p>カラーインデックス。負の数を使用した場合、 アンチエイリアス機能がオフになります。 <code>imagecolorallocate()</code> を参照ください。</p>
 * @param string $fontfile <p>使用したい TrueType フォントへのパス。</p> <p>Depending on which version of the GD library PHP is using, <i>when <code>fontfile</code> does not begin with a leading <i>/</i> then <i>.ttf</i> will be appended</i> to the filename and the library will attempt to search for that filename along a library-defined font path.</p> <p>When using versions of the GD library lower than 2.0.18, a <i>space</i> character, rather than a semicolon, was used as the 'path separator' for different font files. Unintentional use of this feature will result in the warning message: <i>Warning: Could not find/open font</i>. For these affected versions, the only solution is moving the font to a path which does not contain spaces.</p> <p>In many cases where a font resides in the same directory as the script using it the following trick will alleviate any include problems.</p> <code> &lt;&#63;php<br>// GD の環境変数を設定<br>putenv('GDFONTPATH=' . realpath('.'));<br><br>// Name the font to be used (note the lack of the .ttf extension)<br>$font = 'SomeFont';<br>&#63;&gt;  </code>   <p><b>注意</b>:</p> <p>Note that open_basedir does <i>not</i> apply to <code>fontfile</code>.</p>
 * @param string $text <p>テキスト文字列を UTF-8 エンコーディングで表したもの。</p> <p>フォント内で 127 文字目以降の文字にアクセスするために、 (&amp;#8364; のような) 十進数文字参照を含めることができます。 (&amp;#xA9; のような) 十六進形式もサポートしています。 UTF-8 エンコーディングされた文字列を直接渡すことができます。</p> <p>&amp;copy; のような文字エンティティはサポートされません。 <code>html_entity_decode()</code> を使用して、 文字エンティティを UTF-8 文字列にすることを検討してください。</p> <p>フォントでサポートされていない文字が文字列で使用されている場合、 その文字は白抜きの矩形に置き換えられます。</p>
 * @return array <p>テキストの境界を 構成する 4 点を表す 8 個の要素を有する配列を返します。 返される点は左下、右下、右上、左上の順番となります。 点の座標は、角度によらず text に関する相対座標として表されます。 つまり、"左上"は、text を水平に見た場合の左上の隅を表します。 エラー時には <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagettftext.php
 * @see imagettfbbox(), imagefttext()
 * @since PHP 4, PHP 5, PHP 7
 */
function imagettftext($image, float $size, float $angle, int $x, int $y, int $color, string $fontfile, string $text): array {}

/**
 * この PHP がサポートしている画像形式を返す
 * <p>現在使用している PHP がサポートする画像形式を返します。</p>
 * @return int <p>画像形式に対応するビットフィールドで、 PHP に組み込まれている GD がサポートする画像形式を返します。 返されるビットは次のとおりです。 <b><code>IMG_BMP</code></b> | <b><code>IMG_GIF</code></b> | <b><code>IMG_JPG</code></b> | <b><code>IMG_PNG</code></b> | <b><code>IMG_WBMP</code></b> | <b><code>IMG_XPM</code></b> | <b><code>IMG_WEBP</code></b>。</p>
 * @link http://php.net/manual/ja/function.imagetypes.php
 * @see gd_info()
 * @since PHP 4 >= 4.0.2, PHP 5, PHP 7
 */
function imagetypes(): int {}

/**
 * 画像をブラウザあるいはファイルに出力する
 * <p><b>imagewbmp()</b> は、指定した <code>image</code> を WBMP にして出力あるいは保存します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param mixed $to <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b><code>NULL</code></b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * @param int $foreground <p>このパラメータで、 前景の色を指定できます。<code>imagecolorallocate()</code> で 取得した ID を使用してください。デフォルトの前景色は黒です。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagewbmp.php
 * @see image2wbmp(), imagepng(), imagegif(), imagejpeg(), imagetypes()
 * @since PHP 4 >= 4.0.1, PHP 5, PHP 7
 */
function imagewbmp($image, $to = NULL, int $foreground = NULL): bool {}

/**
 * WebP 画像をブラウザあるいはファイルに出力する
 * <p>指定した <code>image</code> を、WebP 形式で出力あるいは保存します。</p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param mixed $to <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b><code>NULL</code></b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * @param int $quality <p><code>quality</code> には、0 (品質は最低で、 ファイルサイズが小さくなる) から 100 (品質が最高で、ファイルサイズは大きくなる) までの値を指定します。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagewebp.php
 * @since PHP 5 >= 5.4.0, PHP 7
 */
function imagewebp($image, $to = NULL, int $quality = 80): bool {}

/**
 * XBM 画像をブラウザあるいはファイルに出力する
 * <p><code>imagewbmp()</code> は、指定した <code>image</code> を XBM にして出力あるいは保存します。</p><p><b>注意</b>:  <b>imagexbm()</b> はパディングを一切行わないので、 画像の幅は 8 の倍数でなければいけません。 PHP 5.6.24 および PHP 7.0.9 以降では、この制約がなくなりました。 </p>
 * @param resource $image <p><code>imagecreatetruecolor()</code> のような画像作成関数が返す画像リソース。</p>
 * @param string $filename <p>画像の保存先のパス。省略したり <b><code>NULL</code></b> を設定したりした場合は、画像ストリームを直接出力します。</p> <p><code>filename</code> (拡張子 .xbm を除いた部分) は、XBM の C 識別子としても用いられます。 そのため、現在のロケールで扱える英数字以外の文字は、アンダースコアに置き換えられます。 <code>filename</code> を <b><code>NULL</code></b> にすると、 <i>image</i> を使って C 識別子を作ります。</p>
 * @param int $foreground <p>このパラメータで、 前景の色を指定できます。<code>imagecolorallocate()</code> で 取得した ID を使用してください。デフォルトの前景色は黒です。 その他の色はすべて、背景色として扱われます。</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.imagexbm.php
 * @since PHP 5, PHP 7
 */
function imagexbm($image, string $filename, int $foreground = NULL): bool {}

/**
 * バイナリ IPTC データを JPEG イメージに埋めこむ
 * <p>バイナリ IPTC データを JPEG イメージに埋めこみます。</p>
 * @param string $iptcdata <p>書き込むデータ。</p>
 * @param string $jpeg_file_name <p>JPEG 画像へのパス。</p>
 * @param int $spool <p>Spool フラグ。このフラグが 2 より小さい場合は、JPEG が文字列として返されます。そうでない場合は、JPEG を STDOUT に出力します。</p>
 * @return mixed <p>成功し、かつ <code>spool</code> が 2 より小さい場合は、JPEG を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。<code>spool</code> が 2 以上の場合は、成功した場合に <b><code>TRUE</code></b> を返します。 失敗した場合に <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.iptcembed.php
 * @since PHP 4, PHP 5, PHP 7
 */
function iptcembed(string $iptcdata, string $jpeg_file_name, int $spool = 0) {}

/**
 * バイナリの IPTC ブロックのタグをパースする
 * <p>» IPTC ブロックをパースします。</p>
 * @param string $iptcblock <p>バイナリ IPTC ブロック。</p>
 * @return array <p>タグマーカーをインデックスとし、その値を保持する配列を返します。 エラー時や IPTC データが見つからなかったときは <b><code>FALSE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.iptcparse.php
 * @since PHP 4, PHP 5, PHP 7
 */
function iptcparse(string $iptcblock): array {}

/**
 * Convert JPEG image file to WBMP image file
 * <p>Converts a JPEG file into a WBMP file.</p>
 * @param string $jpegname <p>Path to JPEG file.</p>
 * @param string $wbmpname <p>Path to destination WBMP file.</p>
 * @param int $dest_height <p>Destination image height.</p>
 * @param int $dest_width <p>Destination image width.</p>
 * @param int $threshold <p>Threshold value, between 0 and 8 (inclusive).</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.jpeg2wbmp.php
 * @see png2wbmp()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function jpeg2wbmp(string $jpegname, string $wbmpname, int $dest_height, int $dest_width, int $threshold): bool {}

/**
 * Convert PNG image file to WBMP image file
 * <p>Converts a PNG file into a WBMP file.</p>
 * @param string $pngname <p>Path to PNG file.</p>
 * @param string $wbmpname <p>Path to destination WBMP file.</p>
 * @param int $dest_height <p>Destination image height.</p>
 * @param int $dest_width <p>Destination image width.</p>
 * @param int $threshold <p>Threshold value, between 0 and 8 (inclusive).</p>
 * @return bool <p>成功した場合に <b><code>TRUE</code></b> を、失敗した場合に <b><code>FALSE</code></b> を返します。</p> <b>警告</b><p>しかしながら、libgd がイメージの出力に失敗した場合、この関数は <b><code>TRUE</code></b> を返します。</p>
 * @link http://php.net/manual/ja/function.png2wbmp.php
 * @see jpeg2wbmp()
 * @since PHP 4 >= 4.0.5, PHP 5, PHP 7
 */
function png2wbmp(string $pngname, string $wbmpname, int $dest_height, int $dest_width, int $threshold): bool {}

/**
 * バンドルされている GD を使用する場合は 1、 それ以外の場合は 0 が設定されます。
 */
define('GD_BUNDLED', null);

/**
 * PHP をコンパイルしたときの GD の "追加" バージョン (beta/rc..) (PHP 5.2.4 以降で利用可能)。
 */
define('GD_EXTRA_VERSION', null);

/**
 * PHP をコンパイルしたときの GD のメジャーバージョン (PHP 5.2.4 以降で利用可能)。
 */
define('GD_MAJOR_VERSION', null);

/**
 * PHP をコンパイルしたときの GD のマイナーバージョン (PHP 5.2.4 以降で利用可能)。
 */
define('GD_MINOR_VERSION', null);

/**
 * PHP をコンパイルしたときの GD のリリースバージョン (PHP 5.2.4 以降で利用可能)。
 */
define('GD_RELEASE_VERSION', null);

/**
 * PHP をコンパイルしたときの GD のバージョン (PHP 5.2.4 以降で利用可能)。
 */
define('GD_VERSION', null);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_BMP', 6);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_GIF', 1);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。   (PHP 5.3.0 以降で利用可能)
 */
define('IMAGETYPE_ICO', 17);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_IFF', 14);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_JB2', 12);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_JP2', 10);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_JPC', 9);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_JPEG', 2);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_JPEG2000', 9);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_JPX', 11);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_PNG', 3);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_PSD', 5);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_SWC', 13);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_SWF', 4);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_TIFF_II', 7);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_TIFF_MM', 8);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_WBMP', 15);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。   (PHP 7.1.0 以降で利用可能)
 */
define('IMAGETYPE_WEBP', 18);

/**
 * 画像タイプ定数。<code>image_type_to_mime_type()</code> や <code>image_type_to_extension()</code> 関数で使用します。
 */
define('IMAGETYPE_XBM', 16);

/**
 * アフィン変換の形式を表す定数。<code>imageaffinematrixget()</code> 関数が使用します。
 */
define('IMG_AFFINE_ROTATE', null);

/**
 * アフィン変換の形式を表す定数。<code>imageaffinematrixget()</code> 関数が使用します。
 */
define('IMG_AFFINE_SCALE', null);

/**
 * アフィン変換の形式を表す定数。<code>imageaffinematrixget()</code> 関数が使用します。
 */
define('IMG_AFFINE_SHEAR_HORIZONTAL', null);

/**
 * アフィン変換の形式を表す定数。<code>imageaffinematrixget()</code> 関数が使用します。
 */
define('IMG_AFFINE_SHEAR_VERTICAL', null);

/**
 * アフィン変換の形式を表す定数。<code>imageaffinematrixget()</code> 関数が使用します。
 */
define('IMG_AFFINE_TRANSLATE', null);

/**
 * スタイル定数。<code>imagefilledarc()</code> 関数が使用します。
 */
define('IMG_ARC_CHORD', null);

/**
 * スタイル定数。<code>imagefilledarc()</code> 関数が使用します。
 */
define('IMG_ARC_EDGED', null);

/**
 * スタイル定数。<code>imagefilledarc()</code> 関数が使用します。
 */
define('IMG_ARC_NOFILL', null);

/**
 * スタイル定数。<code>imagefilledarc()</code> 関数が使用します。
 */
define('IMG_ARC_PIE', null);

/**
 * スタイル定数。<code>imagefilledarc()</code> 関数が使用します。   <p><b>注意</b>:</p> <p>この定数の値は <b><code>IMG_ARC_PIE</code></b> と同じです。</p>
 */
define('IMG_ARC_ROUNDED', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_BELL', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_BESSEL', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_BICUBIC', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_BICUBIC_FIXED', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_BILINEAR_FIXED', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_BLACKMAN', null);

/**
 * <code>imagetypes()</code> の戻り値として用います。
 */
define('IMG_BMP', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_BOX', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_BSPLINE', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_CATMULLROM', null);

/**
 * <code>imagecolorallocate()</code> や <code>imagecolorallocatealpha()</code> で割り当てた色のかわりに使用できる、特別な色オプション。
 */
define('IMG_COLOR_BRUSHED', null);

/**
 * <code>imagecolorallocate()</code> や <code>imagecolorallocatealpha()</code> で割り当てた色のかわりに使用できる、特別な色オプション。
 */
define('IMG_COLOR_STYLED', null);

/**
 * <code>imagecolorallocate()</code> や <code>imagecolorallocatealpha()</code> で割り当てた色のかわりに使用できる、特別な色オプション。
 */
define('IMG_COLOR_STYLEDBRUSHED', null);

/**
 * <code>imagecolorallocate()</code> や <code>imagecolorallocatealpha()</code> で割り当てた色のかわりに使用できる、特別な色オプション。
 */
define('IMG_COLOR_TILED', null);

/**
 * <code>imagecolorallocate()</code> や <code>imagecolorallocatealpha()</code> で割り当てた色のかわりに使用できる、特別な色オプション。
 */
define('IMG_COLOR_TRANSPARENT', null);

/**
 * アルファブレンディング効果。<code>imagelayereffect()</code> 関数で使用します。
 */
define('IMG_EFFECT_ALPHABLEND', null);

/**
 * アルファブレンディング効果。<code>imagelayereffect()</code> 関数で使用します。
 */
define('IMG_EFFECT_MULTIPLY', null);

/**
 * アルファブレンディング効果。<code>imagelayereffect()</code> 関数で使用します。
 */
define('IMG_EFFECT_NORMAL', null);

/**
 * アルファブレンディング効果。<code>imagelayereffect()</code> 関数で使用します。
 */
define('IMG_EFFECT_OVERLAY', null);

/**
 * アルファブレンディング効果。<code>imagelayereffect()</code> 関数で使用します。
 */
define('IMG_EFFECT_REPLACE', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。
 */
define('IMG_FILTER_BRIGHTNESS', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。
 */
define('IMG_FILTER_COLORIZE', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。
 */
define('IMG_FILTER_CONTRAST', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。
 */
define('IMG_FILTER_EDGEDETECT', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。
 */
define('IMG_FILTER_EMBOSS', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。
 */
define('IMG_FILTER_GAUSSIAN_BLUR', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。
 */
define('IMG_FILTER_GRAYSCALE', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。
 */
define('IMG_FILTER_MEAN_REMOVAL', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。
 */
define('IMG_FILTER_NEGATE', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。   (PHP 5.3.0 以降で使用可能)
 */
define('IMG_FILTER_PIXELATE', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。
 */
define('IMG_FILTER_SELECTIVE_BLUR', null);

/**
 * 特別な GD フィルタ。<code>imagefilter()</code> 関数で使用します。
 */
define('IMG_FILTER_SMOOTH', null);

/**
 * <code>imageflip()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_FLIP_BOTH', null);

/**
 * <code>imageflip()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_FLIP_HORIZONTAL', null);

/**
 * <code>imageflip()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_FLIP_VERTICAL', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_GAUSSIAN', null);

/**
 * タイプ変数。<code>imagegd2()</code> 関数が使用します。
 */
define('IMG_GD2_COMPRESSED', null);

/**
 * タイプ変数。<code>imagegd2()</code> 関数が使用します。
 */
define('IMG_GD2_RAW', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_GENERALIZED_CUBIC', null);

/**
 * <code>imagetypes()</code> の戻り値として用います。
 */
define('IMG_GIF', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_HAMMING', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_HANNING', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_HERMITE', null);

/**
 * <code>imagetypes()</code> の戻り値として用います。   <p><b>注意</b>:</p> <p>この定数の値は <b><code>IMG_JPG</code></b> と同じです。</p>
 */
define('IMG_JPEG', null);

/**
 * <code>imagetypes()</code> の戻り値として用います。
 */
define('IMG_JPG', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_MITCHELL', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_NEAREST_NEIGHBOUR', null);

/**
 * <code>imagetypes()</code> の戻り値として用います。
 */
define('IMG_PNG', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_POWER', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_QUADRATIC', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_SINC', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_TRIANGLE', null);

/**
 * <code>imagetypes()</code> の戻り値として用います。
 */
define('IMG_WBMP', null);

/**
 * <code>imagetypes()</code> の戻り値として用います。   PHP 5.6.25 と PHP 7.0.10 以降で利用可能です。
 */
define('IMG_WEBP', null);

/**
 * <code>imagesetinterpolation()</code> で使用します。PHP 5.5.0 以降で使用可能です。
 */
define('IMG_WEIGHTED4', null);

/**
 * <code>imagetypes()</code> の戻り値として用います。
 */
define('IMG_XPM', null);

/**
 * 特別な PNG フィルタ。<code>imagepng()</code> 関数で使用します。
 */
define('PNG_ALL_FILTERS', null);

/**
 * 特別な PNG フィルタ。<code>imagepng()</code> 関数で使用します。
 */
define('PNG_FILTER_AVG', null);

/**
 * 特別な PNG フィルタ。<code>imagepng()</code> 関数で使用します。
 */
define('PNG_FILTER_NONE', null);

/**
 * 特別な PNG フィルタ。<code>imagepng()</code> 関数で使用します。
 */
define('PNG_FILTER_PAETH', null);

/**
 * 特別な PNG フィルタ。<code>imagepng()</code> 関数で使用します。
 */
define('PNG_FILTER_SUB', null);

/**
 * 特別な PNG フィルタ。<code>imagepng()</code> 関数で使用します。
 */
define('PNG_FILTER_UP', null);

/**
 * 特別な PNG フィルタ。<code>imagepng()</code> 関数で使用します。
 */
define('PNG_NO_FILTER', null);

