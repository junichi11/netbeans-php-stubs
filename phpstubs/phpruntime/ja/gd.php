<?php

// Start of gd v.7.0.19

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 現在インストールされているGDライブラリに関する情報を取得する
 * @link http://php.net/manual/ja/function.gd-info.php
 * @return array 連想配列を返します。
 * </p>
 * <p>
 * <table>
 * <b>gd_info</b> が返す配列の要素
 * <tr valign="top">
 * <td>属性</td>
 * <td>意味</td>
 * </tr>
 * <tr valign="top">
 * <td>GD Version</td>
 * <td>string。インストールされている
 * libgdのバージョン</td>
 * </tr>
 * <tr valign="top">
 * <td>FreeType Support</td>
 * <td>boolean value. <b>TRUE</b>
 * の場合FreeTypeサポートはインストールされている</td>
 * </tr>
 * <tr valign="top">
 * <td>FreeType Linkage</td>
 * <td>
 * string値。FreeTypeのリンク方法の情報。
 * 'with freetype', 'with TTF library', 'with unknown library'など。
 * FreeType Supportが<b>TRUE</b>にセットされている場合にのみ
 * この要素が定義されます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>T1Lib Support</td>
 * <td>boolean値。
 * T1Libサポートが含まれている場合に<b>TRUE</b></td>
 * </tr>
 * <tr valign="top">
 * <td>GIF Read Support</td>
 * <td>boolean値。
 * GIF画像の読み込み
 * がサポートされている場合に<b>TRUE</b></td>
 * </tr>
 * <tr valign="top">
 * <td>GIF Create Support</td>
 * <td>boolean値。
 * GIF画像の生成
 * がサポートされている場合に<b>TRUE</b></td>
 * </tr>
 * <tr valign="top">
 * <td>JPEG Support</td>
 * <td>boolean値。
 * JPEGサポートが含まれている場合に<b>TRUE</b></td>
 * </tr>
 * <tr valign="top">
 * <td>PNG Support</td>
 * <td>boolean値。
 * PNGサポートが含まれている場合に<b>TRUE</b></td>
 * </tr>
 * <tr valign="top">
 * <td>WBMP Support</td>
 * <td>boolean値。
 * WBMPサポートが含まれている場合に<b>TRUE</b></td>
 * </tr>
 * <tr valign="top">
 * <td>XBM Support</td>
 * <td>boolean値。
 * XBMサポートが含まれている場合に<b>TRUE</b></td>
 * </tr>
 * <tr valign="top">
 * <td>WebP Support</td>
 * <td>boolean 値。
 * WebP サポートが含まれている場合に<b>TRUE</b></td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * PHP 5.3.0 より前のバージョンでは、JPEG Support 属性は
 * JPG Support という名前でした。
 */
function gd_info(): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 部分楕円を描画する
 * @link http://php.net/manual/ja/function.imagearc.php
 * @param resource $image
 * @param int $cx <p>
 * 中心の x 座標。
 * </p>
 * @param int $cy <p>
 * 中心の y 座標。
 * </p>
 * @param int $width <p>
 * 円弧の幅。
 * </p>
 * @param int $height <p>
 * 円弧の高さ。
 * </p>
 * @param int $start <p>
 * 始点の角度。
 * </p>
 * @param int $end <p>
 * 終点の角度。
 * 0° は 3 時の位置で、そこから時計回りの方向に円弧が描かれます。
 * </p>
 * @param int $color <p>
 * <b>imagecolorallocate</b> で作成した色 ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagearc($image, int $cx, int $cy, int $width, int $height, int $start, int $end, int $color): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 楕円を描画する
 * @link http://php.net/manual/ja/function.imageellipse.php
 * @param resource $image
 * @param int $cx <p>
 * 中心の x 座標。
 * </p>
 * @param int $cy <p>
 * 中心の y 座標。
 * </p>
 * @param int $width <p>
 * 楕円の幅。
 * </p>
 * @param int $height <p>
 * 楕円の高さ。
 * </p>
 * @param int $color <p>
 * 楕円の色を、
 * <b>imagecolorallocate</b>
 * で作成した画像 ID で指定します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imageellipse($image, int $cx, int $cy, int $width, int $height, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 水平に文字を描画する
 * @link http://php.net/manual/ja/function.imagechar.php
 * @param resource $image
 * @param int $font
 * @param int $x <p>
 * 始点の x 座標。
 * </p>
 * @param int $y <p>
 * 始点の y 座標。
 * </p>
 * @param string $c <p>
 * 描画する文字。
 * </p>
 * @param int $color <p>
 * <b>imagecolorallocate</b> で作成した色 ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagechar($image, int $font, int $x, int $y, string $c, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 垂直に文字を描画する
 * @link http://php.net/manual/ja/function.imagecharup.php
 * @param resource $image
 * @param int $font
 * @param int $x <p>
 * 始点の x 座標。
 * </p>
 * @param int $y <p>
 * 始点の y 座標。
 * </p>
 * @param string $c <p>
 * 描画する文字。
 * </p>
 * @param int $color <p>
 * <b>imagecolorallocate</b> で作成した色 ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagecharup($image, int $font, int $x, int $y, string $c, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * ピクセルの色のインデックスを取得する
 * @link http://php.net/manual/ja/function.imagecolorat.php
 * @param resource $image
 * @param int $x <p>
 * 点の x 座標。
 * </p>
 * @param int $y <p>
 * 点の y 座標。
 * </p>
 * @return int 色のインデックスを返します。
 */
function imagecolorat($image, int $x, int $y): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 画像で使用する色を作成する
 * @link http://php.net/manual/ja/function.imagecolorallocate.php
 * @param resource $image
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @return int 色の ID、あるいは作成に失敗したい場合に <b>FALSE</b> を返します。
 */
function imagecolorallocate($image, int $red, int $green, int $blue): int {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * あるイメージから他のイメージにパレットをコピーする
 * @link http://php.net/manual/ja/function.imagepalettecopy.php
 * @param resource $destination <p>
 * コピー先の画像リソース。
 * </p>
 * @param resource $source <p>
 * コピー元の画像リソース。
 * </p>
 * @return void 値を返しません。
 */
function imagepalettecopy($destination, $source): void {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5, PHP 7)<br/>
 * 文字列の中のイメージストリームから新規イメージを作成する
 * @link http://php.net/manual/ja/function.imagecreatefromstring.php
 * @param string $image <p>
 * 画像データを含む文字列。
 * </p>
 * @return resource 成功時にはイメージリソースが返されます。
 * イメージの種類がサポートされていない、データのフォーマットが識別できない、
 * イメージが壊れておりリロードできないなどの場合は <b>FALSE</b> が返されます。
 */
function imagecreatefromstring(string $image) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した色に最も近い色のインデックスを取得する
 * @link http://php.net/manual/ja/function.imagecolorclosest.php
 * @param resource $image
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @return int 画像パレット内で、指定した色にいちばん近い色のインデックスを返します。
 */
function imagecolorclosest($image, int $red, int $green, int $blue): int {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 色合い、白、黒を有する色のインデックスを得る
 * @link http://php.net/manual/ja/function.imagecolorclosesthwb.php
 * @param resource $image
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @return int 指定した色に最も近い色合い、白、黒を有する色のインデックスを返します。
 */
function imagecolorclosesthwb($image, int $red, int $green, int $blue): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * イメージの色リソースを開放する
 * @link http://php.net/manual/ja/function.imagecolordeallocate.php
 * @param resource $image
 * @param int $color <p>
 * 色 ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagecolordeallocate($image, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した色または出来るだけ近い色のインデックスを得る
 * @link http://php.net/manual/ja/function.imagecolorresolve.php
 * @param resource $image
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @return int 色インデックスを返します。
 */
function imagecolorresolve($image, int $red, int $green, int $blue): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定した色のインデックスを取得する
 * @link http://php.net/manual/ja/function.imagecolorexact.php
 * @param resource $image
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @return int 指定した色の、パレット内でのインデックスを返します。
 * 画像パレット中に色が存在しない場合は -1 を返します。
 */
function imagecolorexact($image, int $red, int $green, int $blue): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 指定したパレットインデックスの色を設定する
 * @link http://php.net/manual/ja/function.imagecolorset.php
 * @param resource $image
 * @param int $index <p>
 * パレットのインデックス。
 * </p>
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @param int $alpha [optional] <p>
 * アルファコンポーネントの値。
 * </p>
 * @return void 値を返しません。
 */
function imagecolorset($image, int $index, int $red, int $green, int $blue, int $alpha = 0): void {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 透明色を定義する
 * @link http://php.net/manual/ja/function.imagecolortransparent.php
 * @param resource $image
 * @param int $color [optional] <p>
 * <b>imagecolorallocate</b> で指定した色 ID。
 * </p>
 * @return int 新しい透明色の ID (指定しなかった場合は現在設定されている ID)
 * を返します。<i>color</i> を指定せず、
 * さらに現在の透明色も設定されていない場合は -1 を返します。
 */
function imagecolortransparent($image, int $color = null): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 画像パレットの色数を検出する
 * @link http://php.net/manual/ja/function.imagecolorstotal.php
 * @param resource $image <p>
 * <b>imagecreatefromgif</b> のような画像作成関数のひとつが返す画像リソース。
 * </p>
 * @return int 指定した画像パレットの色数を返します。
 * truecolor 画像の場合は 0 を返します。
 */
function imagecolorstotal($image): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * カラーインデックスからカラーを取得する
 * @link http://php.net/manual/ja/function.imagecolorsforindex.php
 * @param resource $image
 * @param int $index <p>
 * 色インデックス。
 * </p>
 * @return array 指定したカラーインデックス index に対して適当な値からなる
 * red、green、blue をキーとする連想配列を返します。
 */
function imagecolorsforindex($image, int $index): array {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 画像の一部をコピーする
 * @link http://php.net/manual/ja/function.imagecopy.php
 * @param resource $dst_im <p>コピー先の画像リンクリソース。</p>
 * @param resource $src_im <p>コピー元の画像リンクリソース。</p>
 * @param int $dst_x <p>
 * コピー先の x 座標。
 * </p>
 * @param int $dst_y <p>
 * コピー先の y 座標。
 * </p>
 * @param int $src_x <p>
 * コピー元の x 座標。
 * </p>
 * @param int $src_y <p>
 * コピー元の y 座標。
 * </p>
 * @param int $src_w <p>コピー元の幅。</p>
 * @param int $src_h <p>コピー元の高さ。</p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagecopy($dst_im, $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h): bool {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * イメージの一部をコピー、マージする
 * @link http://php.net/manual/ja/function.imagecopymerge.php
 * @param resource $dst_im <p>コピー先の画像リンクリソース。</p>
 * @param resource $src_im <p>コピー元の画像リンクリソース。</p>
 * @param int $dst_x <p>
 * コピー先の x 座標。
 * </p>
 * @param int $dst_y <p>
 * コピー先の y 座標。
 * </p>
 * @param int $src_x <p>
 * コピー元の x 座標。
 * </p>
 * @param int $src_y <p>
 * コピー元の y 座標。
 * </p>
 * @param int $src_w <p>コピー元の幅。</p>
 * @param int $src_h <p>コピー元の高さ。</p>
 * @param int $pct <p>
 * 二つの画像は、
 * 0から100の範囲で指定した <i>pct</i>に基づきマージされます。
 * <i>pct</i> = 0 の時は、何も行われません。
 * 100の場合、この関数の動作は、パレットイメージに対する
 * <b>imagecopy</b> と同じとなります
 * (アルファコンポーネントを無視する点だけが違います)。
 * 一方 true color 画像については、この関数はアルファ透過度を実装しています。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagecopymerge($dst_im, $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h, int $pct): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * グレースケールでイメージの一部をコピー、マージする
 * @link http://php.net/manual/ja/function.imagecopymergegray.php
 * @param resource $dst_im <p>コピー先の画像リンクリソース。</p>
 * @param resource $src_im <p>コピー元の画像リンクリソース。</p>
 * @param int $dst_x <p>
 * コピー先の x 座標。
 * </p>
 * @param int $dst_y <p>
 * コピー先の y 座標。
 * </p>
 * @param int $src_x <p>
 * コピー元の x 座標。
 * </p>
 * @param int $src_y <p>
 * コピー元の y 座標。
 * </p>
 * @param int $src_w <p>コピー元の幅。</p>
 * @param int $src_h <p>コピー元の高さ。</p>
 * @param int $pct <p>
 * <i>src_im</i> が <i>pct</i>
 * にしたがってグレースケールに変換されます。
 * <i>pct</i> が 0 の場合は完全なグレースケール、
 * 100 の場合は何も変わらない状態となります。
 * <i>pct</i> = 100 の場合、パレット画像に対してはこの関数は
 * <b>imagecopy</b> と同じ動作となります
 * (アルファコンポーネントを無視する点だけが違います)。
 * 一方 true color 画像については、この関数はアルファ透過度を実装しています。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagecopymergegray($dst_im, $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_w, int $src_h, int $pct): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 画像の一部をコピーしサイズを変更する
 * @link http://php.net/manual/ja/function.imagecopyresized.php
 * @param resource $dst_image <p>コピー先の画像リンクリソース。</p>
 * @param resource $src_image <p>コピー元の画像リンクリソース。</p>
 * @param int $dst_x <p>
 * コピー先の x 座標。
 * </p>
 * @param int $dst_y <p>
 * コピー先の y 座標。
 * </p>
 * @param int $src_x <p>
 * コピー元の x 座標。
 * </p>
 * @param int $src_y <p>
 * コピー元の y 座標。
 * </p>
 * @param int $dst_w <p>
 * コピー先の幅。
 * </p>
 * @param int $dst_h <p>
 * コピー先の高さ。
 * </p>
 * @param int $src_w <p>コピー元の幅。</p>
 * @param int $src_h <p>コピー元の高さ。</p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagecopyresized($dst_image, $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_w, int $dst_h, int $src_w, int $src_h): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * パレットを使用する新規画像を作成する
 * @link http://php.net/manual/ja/function.imagecreate.php
 * @param int $width <p>
 * 画像の幅。
 * </p>
 * @param int $height <p>
 * 画像の高さ。
 * </p>
 * @return resource 成功した場合に画像リソース ID、エラー時に <b>FALSE</b> を返します。
 */
function imagecreate(int $width, int $height) {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * TrueColor イメージを新規に作成する
 * @link http://php.net/manual/ja/function.imagecreatetruecolor.php
 * @param int $width <p>
 * 画像の幅。
 * </p>
 * @param int $height <p>
 * 画像の高さ。
 * </p>
 * @return resource 成功した場合に画像リソース ID、エラー時に <b>FALSE</b> を返します。
 */
function imagecreatetruecolor(int $width, int $height) {}

/**
 * (PHP 4 &gt;= 4.3.2, PHP 5, PHP 7)<br/>
 * 画像が truecolor かどうか調べる
 * @link http://php.net/manual/ja/function.imageistruecolor.php
 * @param resource $image
 * @return bool <i>image</i> が truecolor の場合に <b>TRUE</b>、
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function imageistruecolor($image): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * TrueColor イメージをパレットイメージに変換する
 * @link http://php.net/manual/ja/function.imagetruecolortopalette.php
 * @param resource $image
 * @param bool $dither <p>
 * イメージにディザーをかけることを指定します。
 * <b>TRUE</b> の場合はディザーが行われます。
 * 出力はぼやけますが、色の近似はより良くなります。
 * </p>
 * @param int $ncolors <p>
 * パレットに保持される最大の色数を設定します。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagetruecolortopalette($image, bool $dither, int $ncolors): bool {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * パレット形式の画像を true color に変換する
 * @link http://php.net/manual/ja/function.imagepalettetotruecolor.php
 * @param resource $src
 * @return bool 変換に成功した場合や、元画像が既に true color だった場合に <b>TRUE</b> を返します。
 * それ以外の場合に <b>FALSE</b> を返します。
 */
function imagepalettetotruecolor($src): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 線描画用の線幅を設定する
 * @link http://php.net/manual/ja/function.imagesetthickness.php
 * @param resource $image
 * @param int $thickness <p>
 * ピクセル単位の線幅。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagesetthickness($image, int $thickness): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 楕円弧を描画し、塗りつぶす
 * @link http://php.net/manual/ja/function.imagefilledarc.php
 * @param resource $image
 * @param int $cx <p>
 * 中心の x 座標。
 * </p>
 * @param int $cy <p>
 * 中心の y 座標。
 * </p>
 * @param int $width <p>
 * 弧の幅。
 * </p>
 * @param int $height <p>
 * 弧の高さ。
 * </p>
 * @param int $start <p>
 * 弧の開始角度。
 * </p>
 * @param int $end <p>
 * 弧の終了角度。
 * 0° は三時の方向で、そこから時計回りに数えます。
 * </p>
 * @param int $color <p>
 * <b>imagecolorallocate</b>
 * で作成した色 ID。
 * </p>
 * @param int $style <p>
 * 次の選択肢のビット和。
 * <b>IMG_ARC_PIE</b>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagefilledarc($image, int $cx, int $cy, int $width, int $height, int $start, int $end, int $color, int $style): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 塗りつぶされた楕円を描画する
 * @link http://php.net/manual/ja/function.imagefilledellipse.php
 * @param resource $image
 * @param int $cx <p>
 * 中心の x 座標。
 * </p>
 * @param int $cy <p>
 * 中心の y 座標。
 * </p>
 * @param int $width <p>
 * 楕円の幅。
 * </p>
 * @param int $height <p>
 * 楕円の高さ。
 * </p>
 * @param int $color <p>
 * 塗りつぶし色。
 * <b>imagecolorallocate</b>
 * で作成した色 ID です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagefilledellipse($image, int $cx, int $cy, int $width, int $height, int $color): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * イメージのブレンドモードを設定する
 * @link http://php.net/manual/ja/function.imagealphablending.php
 * @param resource $image
 * @param bool $blendmode <p>
 * ブレンドモードを有効にするかどうか。True Color 画像の場合のデフォルトは
 * <b>TRUE</b>、それ以外の場合のデフォルトは <b>FALSE</b> です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagealphablending($image, bool $blendmode): bool {}

/**
 * (PHP 4 &gt;= 4.3.2, PHP 5, PHP 7)<br/>
 * PNG 画像を保存する際に（単一色の透過設定ではない）完全な
アルファチャネル情報を保存するフラグを設定する
 * @link http://php.net/manual/ja/function.imagesavealpha.php
 * @param resource $image
 * @param bool $saveflag <p>
 * アルファチャネルを保存するか否か。デフォルトは <b>FALSE</b> です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagesavealpha($image, bool $saveflag): bool {}

/**
 * (PHP 4 &gt;= 4.3.2, PHP 5, PHP 7)<br/>
 * 画像で使用する色を透過度を指定して作成する
 * @link http://php.net/manual/ja/function.imagecolorallocatealpha.php
 * @param resource $image
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @param int $alpha <p>
 * 0 から 127 までの値。
 * 0 は完全に不透明な状態。
 * 127 は完全に透明な状態を表します。
 * </p>
 * @return int 色 ID、あるいは作成に失敗した場合に <b>FALSE</b> を返します。
 */
function imagecolorallocatealpha($image, int $red, int $green, int $blue, int $alpha): int {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 指定した色+アルファ値または最も近い色のインデックスを取得する
 * @link http://php.net/manual/ja/function.imagecolorresolvealpha.php
 * @param resource $image
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @param int $alpha <p>
 * 0 から 127 までの値。
 * 0 は完全に不透明な状態。
 * 127 は完全に透明な状態を表します。
 * </p>
 * @return int 色インデックスを返します。
 */
function imagecolorresolvealpha($image, int $red, int $green, int $blue, int $alpha): int {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 指定した色+アルファ値に最も近い色のインデックスを取得する
 * @link http://php.net/manual/ja/function.imagecolorclosestalpha.php
 * @param resource $image
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @param int $alpha <p>
 * 0 から 127 までの値。
 * 0 は完全に不透明な状態。
 * 127 は完全に透明な状態を表します。
 * </p>
 * @return int 画像パレット内で、指定した色にいちばん近い色のインデックスを返します。
 */
function imagecolorclosestalpha($image, int $red, int $green, int $blue, int $alpha): int {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 指定した色+アルファ値のインデックスを取得する
 * @link http://php.net/manual/ja/function.imagecolorexactalpha.php
 * @param resource $image
 * @param int $red <p>赤コンポーネントの値。</p>
 * @param int $green <p>緑コンポーネントの値。</p>
 * @param int $blue <p>青コンポーネントの値。</p>
 * @param int $alpha <p>
 * 0 から 127 までの値。
 * 0 は完全に不透明な状態。
 * 127 は完全に透明な状態を表します。
 * </p>
 * @return int イメージのパレットにおける、指定した色+アルファ値のインデックスを返します。
 * 指定した色がイメージのパレットに存在しない場合、-1が返されます。
 */
function imagecolorexactalpha($image, int $red, int $green, int $blue, int $alpha): int {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 再サンプリングを行いイメージの一部をコピー、伸縮する
 * @link http://php.net/manual/ja/function.imagecopyresampled.php
 * @param resource $dst_image <p>コピー先の画像リンクリソース。</p>
 * @param resource $src_image <p>コピー元の画像リンクリソース。</p>
 * @param int $dst_x <p>
 * コピー先の x 座標。
 * </p>
 * @param int $dst_y <p>
 * コピー先の y 座標。
 * </p>
 * @param int $src_x <p>
 * コピー元の x 座標。
 * </p>
 * @param int $src_y <p>
 * コピー元の y 座標。
 * </p>
 * @param int $dst_w <p>
 * コピー先の幅。
 * </p>
 * @param int $dst_h <p>
 * コピー先の高さ。
 * </p>
 * @param int $src_w <p>コピー元の幅。</p>
 * @param int $src_h <p>コピー元の高さ。</p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagecopyresampled($dst_image, $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_w, int $dst_h, int $src_w, int $src_h): bool {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * 指定された角度で画像を回転する
 * @link http://php.net/manual/ja/function.imagerotate.php
 * @param resource $image
 * @param float $angle <p>
 * 回転角度。これは、画像を反時計回りに回転させるときの度数を表します。
 * </p>
 * @param int $bgd_color <p>
 * 回転後、カバーされない部分の色。
 * </p>
 * @param int $ignore_transparent [optional] <p>
 * ゼロ以外を指定すると、透過色は無視されます
 * (その他の場合は保持されます)。
 * </p>
 * @return resource 回転させた画像のリソースを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function imagerotate($image, float $angle, int $bgd_color, int $ignore_transparent = 0) {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 指定したモードで画像を反転させる
 * @link http://php.net/manual/ja/function.imageflip.php
 * @param resource $image
 * @param int $mode <p>
 * 反転のモード。定数 <b>IMG_FLIP_*</b> のいずれかを指定します。
 * </p>
 * <p>
 * <tr valign="top">
 * <td>定数</td>
 * <td>意味</td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMG_FLIP_HORIZONTAL</b></td>
 * <td>
 * 水平方向に、上下を反転させます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMG_FLIP_VERTICAL</b></td>
 * <td>
 * 垂直方向に、左右を反転させます。
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IMG_FLIP_BOTH</b></td>
 * <td>
 * 水平方向、垂直方向の両方に反転させます。
 * </td>
 * </tr>
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imageflip($image, int $mode): bool {}

/**
 * (PHP 4 &gt;= 4.3.2, PHP 5, PHP 7)<br/>
 * アンチエイリアス機能を使用すべきかどうかを判断する
 * @link http://php.net/manual/ja/function.imageantialias.php
 * @param resource $image
 * @param bool $enabled <p>
 * アンチエイリアスを有効にするかどうか。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imageantialias($image, bool $enabled): bool {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 指定した矩形に画像をクロップする
 * @link http://php.net/manual/ja/function.imagecrop.php
 * @param resource $image
 * @param array $rect <p>
 * クロップする矩形を配列で指定します。配列のキーには
 * x, y, width,
 * height を指定します。
 * </p>
 * @return resource 成功した場合にクロップ後の画像リソースを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function imagecrop($image, array $rect) {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 利用可能なモードを指定して、画像を自動的にクロップする
 * @link http://php.net/manual/ja/function.imagecropauto.php
 * @param resource $image
 * @param int $mode [optional] <p>
 * 以下の定数のいずれか。
 * </p>
 * <b>IMG_CROP_DEFAULT</b>
 * <b>IMG_CROP_TRANSPARENT</b> を使うことを試みます。
 * 失敗した場合は <b>IMG_CROP_SIDES</b> を使います。
 * @param float $threshold [optional] <p>
 * 画像の色とクロップする色を比較する際に用いる許容誤差を、パーセントで指定します。
 * 色の違いを判断する際には、RGBキューブ内での距離を用います。
 * </p>
 * <p>
 * <b>IMG_CROP_THRESHOLD</b> モードのときにだけ利用します。
 * </p>
 * @param int $color [optional] <p>
 * RGB値あるいはパレットインデックスを指定します。
 * </p>
 * <p>
 * <b>IMG_CROP_THRESHOLD</b> モードのときにだけ利用します。
 * </p>
 * @return resource 成功した場合にクロップ後の画像リソースを返します。失敗した場合に <b>FALSE</b> を返します。
 * クロップする箇所がなかった場合やすべてクロップされてしまった場合は、処理が失敗したものとみなされます。
 * この場合は、<b>imagecrop</b> は <b>FALSE</b> を返します。
 */
function imagecropauto($image, int $mode = -1, float $threshold = .5, int $color = -1) {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 幅と高さを指定して、画像の縮尺を変更する
 * @link http://php.net/manual/ja/function.imagescale.php
 * @param resource $image
 * @param int $new_width <p>
 * 変更後の画像の幅。
 * </p>
 * @param int $new_height [optional] <p>
 * 変更後の画像の高さ。省略したり負の数を指定したりした場合は、元の画像のアスペクト比を維持します。
 * </p>
 * <p>
 * PHP 5.5.18 以前、あるいは PHP 5.6.2 以前のバージョンでは、常に高さを指定する必要があります。
 * これらのバージョンでは、高さを省略した場合のアスペクト比の計算が、正しく行われません。
 * </p>
 * @param int $mode [optional] <p>
 * <b>IMG_NEAREST_NEIGHBOUR</b>、
 * <b>IMG_BILINEAR_FIXED</b>、
 * <b>IMG_BICUBIC</b>、
 * <b>IMG_BICUBIC_FIXED</b> あるいはそれ以外 (2 パスで使います)
 * のいずれか。
 * <b>IMG_WEIGHTED4</b> にはまだ対応していません。
 * </p>
 * @return resource 成功した場合に、縮尺を変更した画像リソースを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function imagescale($image, int $new_width, int $new_height = -1, int $mode = IMG_BILINEAR_FIXED) {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 元の画像を、オプションのクリッピング領域を使ってアフィン変換した画像を返す
 * @link http://php.net/manual/ja/function.imageaffine.php
 * @param resource $image
 * @param array $affine <p>
 * 0 から 5 までのキーを持つ配列。
 * </p>
 * @param array $clip [optional] <p>
 * キー "x"、"y"、"width" そして "height" を持つ配列。
 * </p>
 * @return resource アフィン変換した画像リソースを返します。失敗した場合に <b>FALSE</b> を返します。
 */
function imageaffine($image, array $affine, array $clip = null) {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 二つのアフィン変換行列を連結する
 * @link http://php.net/manual/ja/function.imageaffinematrixconcat.php
 * @param array $m1 <p>
 * アフィン変換行列 (0 から 5
 * までのキーに float 値を持つ配列)。
 * </p>
 * @param array $m2 <p>
 * アフィン変換行列 (0 から 5
 * までのキーに float 値を持つ配列)。
 * </p>
 * @return array アフィン変換行列 (0 から 5 までのキーに float 値を持つ配列)
 * を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function imageaffinematrixconcat(array $m1, array $m2): array {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * アフィン変換行列を取得する
 * @link http://php.net/manual/ja/function.imageaffinematrixget.php
 * @param int $type <p>
 * 定数 <b>IMG_AFFINE_*</b> のいずれか。
 * </p>
 * @param mixed $options <p>
 * <i>type</i> が <b>IMG_AFFINE_TRANSLATE</b>
 * あるいは <b>IMG_AFFINE_SCALE</b> の場合は、
 * <i>options</i> は x と
 * y をキーとする配列でなければいけません。
 * それぞれの値は float にする必要があります。
 * </p>
 * <p>
 * <i>type</i> が <b>IMG_AFFINE_ROTATE</b>、
 * <b>IMG_AFFINE_SHEAR_HORIZONTAL</b>、
 * <b>IMG_AFFINE_SHEAR_VERTICAL</b> のいずれかである場合は、
 * <i>options</i> はアングルを指定する float 値でなければいけません。
 * </p>
 * @return array 0 から 5 までのキーに float 値を持つ配列を返します。失敗した場合に <b>FALSE</b> を返します。
 */
function imageaffinematrixget(int $type, $options): array {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
 * 補間方法を設定する
 * @link http://php.net/manual/ja/function.imagesetinterpolation.php
 * @param resource $image
 * @param int $method [optional] <p>
 * 補間方法。次のいずれかで指定します。
 * <b>IMG_BELL</b>: Bell フィルター。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagesetinterpolation($image, int $method = IMG_BILINEAR_FIXED): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 塗りつぶし用のイメージを設定する
 * @link http://php.net/manual/ja/function.imagesettile.php
 * @param resource $image
 * @param resource $tile <p>
 * タイルとして使用する画像リソース。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagesettile($image, $tile): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 線の描画用にブラシイメージを設定する
 * @link http://php.net/manual/ja/function.imagesetbrush.php
 * @param resource $image
 * @param resource $brush <p>
 * 画像リソース。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagesetbrush($image, $brush): bool {}

/**
 * (PHP 4 &gt;= 4.0.6, PHP 5, PHP 7)<br/>
 * 線描画用のスタイルを設定する
 * @link http://php.net/manual/ja/function.imagesetstyle.php
 * @param resource $image
 * @param array $style <p>
 * はピクセルの配列です。定数
 * <b>IMG_COLOR_TRANSPARENT</b>
 * を使用すると、透明なピクセルを追加できます。
 * <i>style</i> は空の配列にしてはいけません。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagesetstyle($image, array $style): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 新しい画像をファイルあるいは URL から作成する
 * @link http://php.net/manual/ja/function.imagecreatefrompng.php
 * @param string $filename <p>
 * PNG 画像へのパス。
 * </p>
 * @return resource 成功した場合に画像リソース ID、エラー時に <b>FALSE</b> を返します。
 */
function imagecreatefrompng(string $filename) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 新しい画像をファイルあるいは URL から作成する
 * @link http://php.net/manual/ja/function.imagecreatefromgif.php
 * @param string $filename <p>
 * GIF 画像へのパス。
 * </p>
 * @return resource 成功した場合に画像リソース ID、エラー時に <b>FALSE</b> を返します。
 */
function imagecreatefromgif(string $filename) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 新しい画像をファイルあるいは URL から作成する
 * @link http://php.net/manual/ja/function.imagecreatefromjpeg.php
 * @param string $filename <p>
 * JPEG 画像へのパス。
 * </p>
 * @return resource 成功した場合に画像リソース ID、エラー時に <b>FALSE</b> を返します。
 */
function imagecreatefromjpeg(string $filename) {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 新しい画像をファイルあるいは URL から作成する
 * @link http://php.net/manual/ja/function.imagecreatefromwbmp.php
 * @param string $filename <p>
 * WBMP 画像へのパス。
 * </p>
 * @return resource 成功した場合に画像リソース ID、エラー時に <b>FALSE</b> を返します。
 */
function imagecreatefromwbmp(string $filename) {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 新しい画像をファイルあるいは URL から作成する
 * @link http://php.net/manual/ja/function.imagecreatefromxbm.php
 * @param string $filename <p>
 * XBM 画像へのパス。
 * </p>
 * @return resource 成功した場合に画像リソース ID、エラー時に <b>FALSE</b> を返します。
 */
function imagecreatefromxbm(string $filename) {}

/**
 * (PHP 4 &gt;= 4.0.7, PHP 5, PHP 7)<br/>
 * GD ファイルまたは URL から新規イメージを生成する
 * @link http://php.net/manual/ja/function.imagecreatefromgd.php
 * @param string $filename
 * @return resource 成功した場合に画像リソース ID、エラー時に <b>FALSE</b> を返します。
 */
function imagecreatefromgd(string $filename) {}

/**
 * (PHP 4 &gt;= 4.0.7, PHP 5, PHP 7)<br/>
 * GD2 ファイルまたは URL から新規イメージを生成する
 * @link http://php.net/manual/ja/function.imagecreatefromgd2.php
 * @param string $filename <p>
 * GD2 画像へのパス。
 * </p>
 * @return resource 成功した場合に画像リソース ID、エラー時に <b>FALSE</b> を返します。
 */
function imagecreatefromgd2(string $filename) {}

/**
 * (PHP 4 &gt;= 4.0.7, PHP 5, PHP 7)<br/>
 * GD2 ファイルまたは URL の指定した部分から新規イメージを生成する
 * @link http://php.net/manual/ja/function.imagecreatefromgd2part.php
 * @param string $filename <p>
 * GD2 画像へのパス。
 * </p>
 * @param int $srcX <p>
 * 作成元の x 座標。
 * </p>
 * @param int $srcY <p>
 * 作成元の y 座標。
 * </p>
 * @param int $width <p>コピー元の幅。</p>
 * @param int $height <p>コピー元の高さ。</p>
 * @return resource 成功した場合に画像リソース ID、エラー時に <b>FALSE</b> を返します。
 */
function imagecreatefromgd2part(string $filename, int $srcX, int $srcY, int $width, int $height) {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * PNG イメージをブラウザまたはファイルに出力する
 * @link http://php.net/manual/ja/function.imagepng.php
 * @param resource $image
 * @param mixed $to [optional] <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b>NULL</b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * <p>
 * <i>quality</i> および
 * <i>filters</i> を使用しない場合は、
 * <b>NULL</b> を指定することはできません。
 * </p>
 * @param int $quality [optional] <p>
 * 圧縮レベル。0 (圧縮しない) から 9 までの値です。
 * 現在のデフォルトは 6 です。
 * 詳細は、zlib マニュアル をご覧ください。
 * </p>
 * @param int $filters [optional] <p>
 * PNG ファイルの大きさを小さくします。
 * これはビットマスクフィールドで、定数
 * PNG_FILTER_XXX の組み合わせを指定します。
 * <b>PNG_NO_FILTER</b> や
 * <b>PNG_ALL_FILTERS</b> を使用すると、
 * 全フィルタを一括で無効にしたり有効にしたりできます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagepng($image, $to = null, int $quality = null, int $filters = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 画像をブラウザあるいはファイルに出力する
 * @link http://php.net/manual/ja/function.imagegif.php
 * @param resource $image
 * @param mixed $to [optional] <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b>NULL</b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagegif($image, $to = null): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 画像をブラウザあるいはファイルに出力する
 * @link http://php.net/manual/ja/function.imagejpeg.php
 * @param resource $image
 * @param mixed $to [optional] <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b>NULL</b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * <p>
 * <i>quality</i>
 * パラメータを指定するためにこの引数をスキップするには、
 * <b>NULL</b> を指定します。
 * </p>
 * @param int $quality [optional] <p>
 * <i>quality</i> はオプションであり、0(品質は最低
 * ですが、ファイルはより小さい)から100(品質は最高ですが、ファイルは
 * 最大)の範囲で指定します。デフォルトは IJG 品質値(75)です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagejpeg($image, $to = null, int $quality = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)<br/>
 * 画像をブラウザあるいはファイルに出力する
 * @link http://php.net/manual/ja/function.imagewbmp.php
 * @param resource $image
 * @param mixed $to [optional] <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b>NULL</b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * @param int $foreground [optional] <p>
 * このパラメータで、
 * 前景の色を指定できます。<b>imagecolorallocate</b> で
 * 取得した ID を使用してください。デフォルトの前景色は黒です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagewbmp($image, $to = null, int $foreground = null): bool {}

/**
 * (PHP 4 &gt;= 4.0.7, PHP 5, PHP 7)<br/>
 * GD イメージをブラウザまたはファイルに出力する
 * @link http://php.net/manual/ja/function.imagegd.php
 * @param resource $image
 * @param mixed $to [optional] <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b>NULL</b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagegd($image, $to = NULL): bool {}

/**
 * (PHP 4 &gt;= 4.0.7, PHP 5, PHP 7)<br/>
 * GD2 イメージをブラウザまたはファイルに出力する
 * @link http://php.net/manual/ja/function.imagegd2.php
 * @param resource $image
 * @param mixed $to [optional] <p>ファイル保存先のパスあるいはオープン中のリソース (この関数が値を戻した後で自動的にクローズされます)。省略したり <b>NULL</b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * @param int $chunk_size [optional] <p>
 * チャンクの大きさ。
 * </p>
 * @param int $type [optional] <p>
 * <b>IMG_GD2_RAW</b> あるいは
 * <b>IMG_GD2_COMPRESSED</b> のいずれかです。デフォルトは
 * <b>IMG_GD2_RAW</b> です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagegd2($image, $to = NULL, int $chunk_size = 128, int $type = IMG_GD2_RAW): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 画像を破棄する
 * @link http://php.net/manual/ja/function.imagedestroy.php
 * @param resource $image
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagedestroy($image): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * GD イメージにガンマ補正を適用する
 * @link http://php.net/manual/ja/function.imagegammacorrect.php
 * @param resource $image
 * @param float $inputgamma <p>
 * 入力ガンマ値。
 * </p>
 * @param float $outputgamma <p>
 * 出力ガンマ値。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagegammacorrect($image, float $inputgamma, float $outputgamma): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 塗り潰す
 * @link http://php.net/manual/ja/function.imagefill.php
 * @param resource $image
 * @param int $x <p>
 * 開始位置の x 座標。
 * </p>
 * @param int $y <p>
 * 開始位置の y 座標。
 * </p>
 * @param int $color <p>
 * 塗りつぶし色。
 * <b>imagecolorallocate</b>
 * で作成した色 ID です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagefill($image, int $x, int $y, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 塗りつぶした多角形を描画する
 * @link http://php.net/manual/ja/function.imagefilledpolygon.php
 * @param resource $image
 * @param array $points <p>
 * 多角形の頂点の座標 x および y
 * を含む配列。
 * </p>
 * @param int $num_points <p>
 * 頂点の総数。
 * 3 以上である必要があります。
 * </p>
 * @param int $color <p>
 * <b>imagecolorallocate</b> で作成した色 ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagefilledpolygon($image, array $points, int $num_points, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 塗りつぶした矩形を描画する
 * @link http://php.net/manual/ja/function.imagefilledrectangle.php
 * @param resource $image
 * @param int $x1 <p>
 * 開始位置の x 座標。
 * </p>
 * @param int $y1 <p>
 * 開始位置の y 座標。
 * </p>
 * @param int $x2 <p>
 * 終了位置の x 座標。
 * </p>
 * @param int $y2 <p>
 * 終了位置の y 座標。
 * </p>
 * @param int $color <p>
 * 塗りつぶし色。
 * <b>imagecolorallocate</b>
 * で作成した色 ID です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagefilledrectangle($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 特定色で塗りつぶす
 * @link http://php.net/manual/ja/function.imagefilltoborder.php
 * @param resource $image
 * @param int $x <p>
 * 開始位置の x 座標。
 * </p>
 * @param int $y <p>
 * 開始位置の y 座標。
 * </p>
 * @param int $border <p>
 * 境界色。
 * <b>imagecolorallocate</b>
 * で作成した色 ID です。
 * </p>
 * @param int $color <p>
 * 塗りつぶし色。
 * <b>imagecolorallocate</b>
 * で作成した色 ID です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagefilltoborder($image, int $x, int $y, int $border, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * フォントの幅を取得する
 * @link http://php.net/manual/ja/function.imagefontwidth.php
 * @param int $font
 * @return int フォントの幅をピクセルで返します。
 */
function imagefontwidth(int $font): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * フォントの高さを取得する
 * @link http://php.net/manual/ja/function.imagefontheight.php
 * @param int $font
 * @return int フォントの高さをピクセルで返します。
 */
function imagefontheight(int $font): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * インターレースを有効もしくは無効にする
 * @link http://php.net/manual/ja/function.imageinterlace.php
 * @param resource $image
 * @param int $interlace [optional] <p>
 * ゼロ以外の場合はインターレース画像となり、
 * ゼロの場合はインターレースビットを off にします。
 * </p>
 * @return int 画像のインターレースビットが設定されている場合に 1、
 * それ以外の場合に 0 を返します。
 */
function imageinterlace($image, int $interlace = 0): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 直線を描画する
 * @link http://php.net/manual/ja/function.imageline.php
 * @param resource $image
 * @param int $x1 <p>
 * 最初の点の x 座標。
 * </p>
 * @param int $y1 <p>
 * 最初の点の y 座標。
 * </p>
 * @param int $x2 <p>
 * 二番目の点の x 座標。
 * </p>
 * @param int $y2 <p>
 * 二番目の点の y 座標。
 * </p>
 * @param int $color <p>
 * 直線の色。
 * <b>imagecolorallocate</b>
 * で作成した色 ID です。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imageline($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 新しいフォントを読み込む
 * @link http://php.net/manual/ja/function.imageloadfont.php
 * @param string $file <p>
 * フォントファイル形式は現在はバイナリで、アーキクチャに依存します。
 * このため、PHP を実行するマシーンと同一の型の CPU 上でフォントファイルを
 * 生成する必要があります。
 * </p>
 * <p>
 * <table>
 * フォントファイルのフォーマット
 * <tr valign="top">
 * <td>バイト位置</td>
 * <td>C 言語のデータ型</td>
 * <td>説明</td>
 * </tr>
 * <tr valign="top">
 * <td>0-3 バイト目</td>
 * <td>int</td>
 * <td>フォント中の文字の数</td>
 * </tr>
 * <tr valign="top">
 * <td>4-7 バイト目</td>
 * <td>int</td>
 * <td>
 * フォント中の最初の文字の値(しばしば 空白を表す 32 となります)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>8-11 バイト目</td>
 * <td>int</td>
 * <td>各文字のピクセル幅</td>
 * </tr>
 * <tr valign="top">
 * <td>12-15 バイト目</td>
 * <td>int</td>
 * <td>各文字のピクセル高さ</td>
 * </tr>
 * <tr valign="top">
 * <td>16 バイト目から</td>
 * <td>char</td>
 * <td>
 * 文字データの配列、各文字のピクセルにつき1バイトで、
 * 総数は(文字数*幅*高さ)バイトです。
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return int フォント ID を返します。これは常に 5 より大きくなり、
 * 組み込みのフォントと衝突することはありません。
 * エラー時には <b>FALSE</b> を返します。
 */
function imageloadfont(string $file): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 多角形を描画する
 * @link http://php.net/manual/ja/function.imagepolygon.php
 * @param resource $image
 * @param array $points <p>
 * 多角形の頂点からなる PHP の配列で、
 * 次のようになります。
 * <tr valign="top">
 * <td>points[0]</td>
 * <td>= x0</td>
 * </tr>
 * <tr valign="top">
 * <td>points[1]</td>
 * <td>= y0</td>
 * </tr>
 * <tr valign="top">
 * <td>points[2]</td>
 * <td>= x1</td>
 * </tr>
 * <tr valign="top">
 * <td>points[3]</td>
 * <td>= y1</td>
 * </tr>
 * </p>
 * @param int $num_points <p>
 * 頂点の総数。
 * </p>
 * @param int $color <p>
 * <b>imagecolorallocate</b>
 * で作成した色 ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagepolygon($image, array $points, int $num_points, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 矩形を描画する
 * @link http://php.net/manual/ja/function.imagerectangle.php
 * @param resource $image
 * @param int $x1 <p>
 * 左上の x 座標。
 * </p>
 * @param int $y1 <p>
 * 左上の y 座標。
 * 0, 0 が画像の左上隅を表します。
 * </p>
 * @param int $x2 <p>
 * 右下の x 座標。
 * </p>
 * @param int $y2 <p>
 * 右下の y 座標。
 * </p>
 * @param int $color <p>
 * <b>imagecolorallocate</b>
 * で作成した色 ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagerectangle($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 点を生成する
 * @link http://php.net/manual/ja/function.imagesetpixel.php
 * @param resource $image
 * @param int $x <p>
 * x 座標。
 * </p>
 * @param int $y <p>
 * y 座標。
 * </p>
 * @param int $color <p>
 * <b>imagecolorallocate</b>
 * で作成した色 ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagesetpixel($image, int $x, int $y, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列を水平に描画する
 * @link http://php.net/manual/ja/function.imagestring.php
 * @param resource $image
 * @param int $font
 * @param int $x <p>
 * 左上隅の x 座標。
 * </p>
 * @param int $y <p>
 * 左上隅の y 座標。
 * </p>
 * @param string $string <p>
 * 書き出す文字列。
 * </p>
 * @param int $color <p>
 * <b>imagecolorallocate</b>
 * で作成した色 ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagestring($image, int $font, int $x, int $y, string $string, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 文字列を垂直に描画する
 * @link http://php.net/manual/ja/function.imagestringup.php
 * @param resource $image
 * @param int $font
 * @param int $x <p>
 * 左下隅の x 座標。
 * </p>
 * @param int $y <p>
 * 左下隅の y 座標。
 * </p>
 * @param string $string <p>
 * 書き出す文字列。
 * </p>
 * @param int $color <p>
 * <b>imagecolorallocate</b>
 * で作成した色 ID。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagestringup($image, int $font, int $x, int $y, string $string, int $color): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 画像の幅を取得する
 * @link http://php.net/manual/ja/function.imagesx.php
 * @param resource $image
 * @return int <i>image</i> の幅、あるいはエラー時に <b>FALSE</b>
 * を返します。
 */
function imagesx($image): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 画像の高さを取得する
 * @link http://php.net/manual/ja/function.imagesy.php
 * @param resource $image
 * @return int <i>image</i> の高さ、あるいはエラー時に <b>FALSE</b>
 * を返します。
 */
function imagesy($image): int {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * 破線を描画する
 * @link http://php.net/manual/ja/function.imagedashedline.php
 * @param resource $image
 * @param int $x1 <p>
 * 左上の x 座標。
 * </p>
 * @param int $y1 <p>
 * 左上の y 座標 0。0 は画像の左上の角です。
 * </p>
 * @param int $x2 <p>
 * 右下の x 座標。
 * </p>
 * @param int $y2 <p>
 * 右下の y 座標。
 * </p>
 * @param int $color <p>
 * 塗りつぶし色。
 * <b>imagecolorallocate</b> で作成した色 ID。
 * </p>
 * @return bool 常に true を返します。
 */
function imagedashedline($image, int $x1, int $y1, int $x2, int $y2, int $color): bool {}

/**
 * (PHP 4 &gt;= 4.0.2, PHP 5, PHP 7)<br/>
 * この PHP がサポートしている画像形式を返す
 * @link http://php.net/manual/ja/function.imagetypes.php
 * @return int 画像形式に対応するビットフィールドで、
 * PHP に組み込まれている GD がサポートする画像形式を返します。
 * 返されるビットは次のとおりです。
 * <b>IMG_BMP</b> |
 * <b>IMG_GIF</b> | <b>IMG_JPG</b> |
 * <b>IMG_PNG</b> | <b>IMG_WBMP</b> |
 * <b>IMG_XPM</b> | <b>IMG_WEBP</b>。
 */
function imagetypes(): int {}

/**
 * @param $f_org
 * @param $f_dest
 * @param $d_height
 * @param $d_width
 * @param $d_threshold
 */
function jpeg2wbmp($f_org, $f_dest, $d_height, $d_width, $d_threshold) {}

/**
 * @param $f_org
 * @param $f_dest
 * @param $d_height
 * @param $d_width
 * @param $d_threshold
 */
function png2wbmp($f_org, $f_dest, $d_height, $d_width, $d_threshold) {}

/**
 * (PHP 4 &gt;= 4.0.5, PHP 5, PHP 7)<br/>
 * 画像をブラウザあるいはファイルに出力する
 * @link http://php.net/manual/ja/function.image2wbmp.php
 * @param resource $image
 * @param string $filename [optional] <p>
 * 保存されるファイルへのパス。指定しなかった場合は、生の画像ストリームが直接出力されます。
 * </p>
 * @param int $threshold [optional] <p>
 * 閾値。0 から 255 までの値 (両端を含みます)。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function image2wbmp($image, string $filename = null, int $threshold = null): bool {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * アルファブレンディングフラグを設定し、レイヤ効果を使用する
 * @link http://php.net/manual/ja/function.imagelayereffect.php
 * @param resource $image
 * @param int $effect <p>
 * 以下の定数のいずれか。
 * <b>IMG_EFFECT_REPLACE</b>
 * ピクセルの置換を使用します
 * (<b>imagealphablending</b> に <b>TRUE</b>
 * を渡すのと同じです)。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagelayereffect($image, int $effect): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * XBM 画像をブラウザあるいはファイルに出力する
 * @link http://php.net/manual/ja/function.imagexbm.php
 * @param resource $image
 * @param string $filename <p>画像の保存先のパス。省略したり <b>NULL</b> を設定したりした場合は、画像ストリームを直接出力します。</p>
 * <p>
 * <i>filename</i> (拡張子 .xbm を除いた部分)
 * は、XBM の C 識別子としても用いられます。
 * そのため、現在のロケールで扱える英数字以外の文字は、アンダースコアに置き換えられます。
 * <i>filename</i> を <b>NULL</b> にすると、
 * image を使って C 識別子を作ります。
 * </p>
 * @param int $foreground [optional] <p>
 * このパラメータで、
 * 前景の色を指定できます。<b>imagecolorallocate</b> で
 * 取得した ID を使用してください。デフォルトの前景色は黒です。
 * その他の色はすべて、背景色として扱われます。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagexbm($image, string $filename, int $foreground = null): bool {}

/**
 * (PHP 4 &gt;= 4.3.0, PHP 5, PHP 7)<br/>
 * パレットイメージの色を True カラーイメージに近づける
 * @link http://php.net/manual/ja/function.imagecolormatch.php
 * @param resource $image1 <p>
 * truecolor イメージリンクリソース。
 * </p>
 * @param resource $image2 <p>
 * パレットイメージリンクリソース。
 * <i>image1</i> と同じ大きさの画像をさします。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagecolormatch($image1, $image2): bool {}

/**
 * (PHP 5, PHP 7)<br/>
 * 画像にフィルタを適用する
 * @link http://php.net/manual/ja/function.imagefilter.php
 * @param resource $image
 * @param int $filtertype <p>
 * <i>filtertype</i> は、以下のいずれかです。
 * <b>IMG_FILTER_NEGATE</b>: 画像の色を反転させます。
 * @param int $arg1 [optional] <p>
 * <b>IMG_FILTER_BRIGHTNESS</b>: 輝度レベル。
 * @param int $arg2 [optional] <p>
 * <b>IMG_FILTER_COLORIZE</b>: 緑コンポーネントの値。
 * @param int $arg3 [optional] <p>
 * <b>IMG_FILTER_COLORIZE</b>: 青コンポーネントの値。
 * @param int $arg4 [optional] <p>
 * <b>IMG_FILTER_COLORIZE</b>: アルファチャネル。
 * 0 から 127 までの値で、0 は完全な不透明、127
 * は完全な透明を表す。
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imagefilter($image, int $filtertype, int $arg1 = null, int $arg2 = null, int $arg3 = null, int $arg4 = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
 * div および offset の係数を使用し、3x3 の畳み込み配列を適用する
 * @link http://php.net/manual/ja/function.imageconvolution.php
 * @param resource $image
 * @param array $matrix <p>
 * 3x3 の配列。三つの float 値からなる三つの配列の配列。
 * </p>
 * @param float $div <p>
 * 畳み込み結果の除数。正規化で使用します。
 * </p>
 * @param float $offset <p>
 * 色オフセット。
 * </p>
 * @return bool 成功した場合に <b>TRUE</b> を、失敗した場合に <b>FALSE</b> を返します。
 */
function imageconvolution($image, array $matrix, float $div, float $offset): bool {}


/**
 * <b>imagetypes</b> の戻り値として用います。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_GIF', 1);

/**
 * <b>imagetypes</b> の戻り値として用います。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_JPG', 2);

/**
 * <b>imagetypes</b> の戻り値として用います。
 * <p>
 * この定数の値は <b>IMG_JPG</b> と同じです。
 * </p>
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_JPEG', 2);

/**
 * <b>imagetypes</b> の戻り値として用います。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_PNG', 4);

/**
 * <b>imagetypes</b> の戻り値として用います。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_WBMP', 8);

/**
 * <b>imagetypes</b> の戻り値として用います。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_XPM', 16);

/**
 * <b>imagetypes</b> の戻り値として用います。
 * PHP 5.6.25 と PHP 7.0.10 以降で利用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_WEBP', 32);

/**
 * <b>imagecolorallocate</b> や
 * <b>imagecolorallocatealpha</b>
 * で割り当てた色のかわりに使用できる、特別な色オプション。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_COLOR_TILED', -5);

/**
 * <b>imagecolorallocate</b> や
 * <b>imagecolorallocatealpha</b>
 * で割り当てた色のかわりに使用できる、特別な色オプション。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_COLOR_STYLED', -2);

/**
 * <b>imagecolorallocate</b> や
 * <b>imagecolorallocatealpha</b>
 * で割り当てた色のかわりに使用できる、特別な色オプション。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_COLOR_BRUSHED', -3);

/**
 * <b>imagecolorallocate</b> や
 * <b>imagecolorallocatealpha</b>
 * で割り当てた色のかわりに使用できる、特別な色オプション。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_COLOR_STYLEDBRUSHED', -4);

/**
 * <b>imagecolorallocate</b> や
 * <b>imagecolorallocatealpha</b>
 * で割り当てた色のかわりに使用できる、特別な色オプション。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_COLOR_TRANSPARENT', -6);

/**
 * スタイル定数。<b>imagefilledarc</b> 関数が使用します。
 * <p>
 * この定数の値は <b>IMG_ARC_PIE</b> と同じです。
 * </p>
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_ARC_ROUNDED', 0);

/**
 * スタイル定数。<b>imagefilledarc</b> 関数が使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_ARC_PIE', 0);

/**
 * スタイル定数。<b>imagefilledarc</b> 関数が使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_ARC_CHORD', 1);

/**
 * スタイル定数。<b>imagefilledarc</b> 関数が使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_ARC_NOFILL', 2);

/**
 * スタイル定数。<b>imagefilledarc</b> 関数が使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_ARC_EDGED', 4);

/**
 * タイプ変数。<b>imagegd2</b> 関数が使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_GD2_RAW', 1);

/**
 * タイプ変数。<b>imagegd2</b> 関数が使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_GD2_COMPRESSED', 2);

/**
 * <b>imageflip</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FLIP_HORIZONTAL', 1);

/**
 * <b>imageflip</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FLIP_VERTICAL', 2);

/**
 * <b>imageflip</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FLIP_BOTH', 3);

/**
 * アルファブレンディング効果。<b>imagelayereffect</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_EFFECT_REPLACE', 0);

/**
 * アルファブレンディング効果。<b>imagelayereffect</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_EFFECT_ALPHABLEND', 1);

/**
 * アルファブレンディング効果。<b>imagelayereffect</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_EFFECT_NORMAL', 2);

/**
 * アルファブレンディング効果。<b>imagelayereffect</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_EFFECT_OVERLAY', 3);
define ('IMG_CROP_DEFAULT', 0);
define ('IMG_CROP_TRANSPARENT', 1);
define ('IMG_CROP_BLACK', 2);
define ('IMG_CROP_WHITE', 3);
define ('IMG_CROP_SIDES', 4);
define ('IMG_CROP_THRESHOLD', 5);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_BELL', 1);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_BESSEL', 2);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_BILINEAR_FIXED', 3);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_BICUBIC', 4);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_BICUBIC_FIXED', 5);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_BLACKMAN', 6);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_BOX', 7);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_BSPLINE', 8);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_CATMULLROM', 9);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_GAUSSIAN', 10);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_GENERALIZED_CUBIC', 11);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_HERMITE', 12);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_HAMMING', 13);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_HANNING', 14);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_MITCHELL', 15);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_POWER', 17);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_QUADRATIC', 18);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_SINC', 19);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_NEAREST_NEIGHBOUR', 16);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_WEIGHTED4', 21);

/**
 * <b>imagesetinterpolation</b> で使用します。PHP 5.5.0 以降で使用可能です。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_TRIANGLE', 20);

/**
 * アフィン変換の形式を表す定数。<b>imageaffinematrixget</b> 関数が使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_AFFINE_TRANSLATE', 0);

/**
 * アフィン変換の形式を表す定数。<b>imageaffinematrixget</b> 関数が使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_AFFINE_SCALE', 1);

/**
 * アフィン変換の形式を表す定数。<b>imageaffinematrixget</b> 関数が使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_AFFINE_ROTATE', 2);

/**
 * アフィン変換の形式を表す定数。<b>imageaffinematrixget</b> 関数が使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_AFFINE_SHEAR_HORIZONTAL', 3);

/**
 * アフィン変換の形式を表す定数。<b>imageaffinematrixget</b> 関数が使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_AFFINE_SHEAR_VERTICAL', 4);

/**
 * バンドルされている GD を使用する場合は 1、
 * それ以外の場合は 0 が設定されます。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('GD_BUNDLED', 1);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_NEGATE', 0);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_GRAYSCALE', 1);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_BRIGHTNESS', 2);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_CONTRAST', 3);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_COLORIZE', 4);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_EDGEDETECT', 5);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_GAUSSIAN_BLUR', 7);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_SELECTIVE_BLUR', 8);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_EMBOSS', 6);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_MEAN_REMOVAL', 9);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_SMOOTH', 10);

/**
 * 特別な GD フィルタ。<b>imagefilter</b> 関数で使用します。
 * (PHP 5.3.0 以降で使用可能)
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('IMG_FILTER_PIXELATE', 11);

/**
 * PHP をコンパイルしたときの GD のバージョン
 * (PHP 5.2.4 以降で利用可能)。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('GD_VERSION', "2.0.35");

/**
 * PHP をコンパイルしたときの GD のメジャーバージョン
 * (PHP 5.2.4 以降で利用可能)。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('GD_MAJOR_VERSION', 2);

/**
 * PHP をコンパイルしたときの GD のマイナーバージョン
 * (PHP 5.2.4 以降で利用可能)。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('GD_MINOR_VERSION', 0);

/**
 * PHP をコンパイルしたときの GD のリリースバージョン
 * (PHP 5.2.4 以降で利用可能)。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('GD_RELEASE_VERSION', 35);

/**
 * PHP をコンパイルしたときの GD の "追加" バージョン (beta/rc..)
 * (PHP 5.2.4 以降で利用可能)。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('GD_EXTRA_VERSION', "");

/**
 * 特別な PNG フィルタ。<b>imagepng</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('PNG_NO_FILTER', 0);

/**
 * 特別な PNG フィルタ。<b>imagepng</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('PNG_FILTER_NONE', 8);

/**
 * 特別な PNG フィルタ。<b>imagepng</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('PNG_FILTER_SUB', 16);

/**
 * 特別な PNG フィルタ。<b>imagepng</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('PNG_FILTER_UP', 32);

/**
 * 特別な PNG フィルタ。<b>imagepng</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('PNG_FILTER_AVG', 64);

/**
 * 特別な PNG フィルタ。<b>imagepng</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('PNG_FILTER_PAETH', 128);

/**
 * 特別な PNG フィルタ。<b>imagepng</b> 関数で使用します。
 * @link http://php.net/manual/ja/image.constants.php
 */
define ('PNG_ALL_FILTERS', 248);

// End of gd v.7.0.19
?>
